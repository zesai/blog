<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Home\SocialiteClient;
use App\Models\Home\SocialiteUser;
use Auth;
use Exception;
use File;
use GuzzleHttp\Client;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Two\User;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Throwable;
use URL;

class HomeController extends Controller
{

    /**
     * 重定向到首页
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * 第三方登陆
     * @var |null
     */
    private $socialiteClients = null;

    /**
     * HomeController constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->socialiteClients = SocialiteClient::all();
        $driver = $request->route('driver');

        if (!empty($driver) && !$this->socialiteClients->pluck('name')->contains($driver)) {
            throw new AccessDeniedHttpException('Disallowed socialite client.');
        }
    }

    /**
     * 重定向到授权页面
     * @param $driver
     * @return mixed
     * @author zesai
     * @date 2020/8/21
     */
    public function redirectToProvider($driver)
    {
        // 记录登录前的url
        $data = [
            'target_url' => URL::previous(),
        ];
        session($data);

        return Socialite::driver($driver)->redirect();
    }

    /**
     * 从回调中获取用户信息并登陆
     * @param Request $request
     * @param $driver
     * @return RedirectResponse|Redirector|void
     * @throws Throwable
     * @author zesai
     * @date 2020/8/21
     */
    public function handleProviderCallback(Request $request, $driver)
    {
        if (!$request->has('code')) {
            return abort(404);
        }

        // 定义各种第三方登录的type对应的数字
        $type = $this->socialiteClients->pluck('id', 'name');

        try {
            /** @var User $user */
            $user = Socialite::driver($driver)->user();
        } catch (Exception $e) {
            Log::error('第三方登陆出错', ['driver' => $driver, 'code' => $e->getCode(), 'message' => $e->getMessage()]);

            return redirect('/');
        }

        // 查找此用户是否已经登录过
        $countMap = [
            'socialite_client_id' => $type[$driver],
            'openid' => $user->id,
        ];

        $socialiteUser = SocialiteUser::query()->select('id', 'login_times', 'email')
            ->where($countMap)
            ->first();

        // 如果已经存在;则更新用户资料  如果不存在;则插入数据
        $name = $user->nickname ?? $user->name;

        if ($socialiteUser) {

            $userId = $socialiteUser->id;

            // 更新数据
            SocialiteUser::where('id', $userId)->update([
                'name' => $name,
                'access_token' => $user->token,
                'last_login_ip' => $request->getClientIp(),
                'login_times' => $socialiteUser->login_times + 1,
            ]);

        } else {

            $userId = SocialiteUser::create([
                'socialite_client_id' => $type[$driver],
                'name' => $name,
                'openid' => $user->id,
                'access_token' => $user->token,
                'last_login_ip' => $request->getClientIp(),
                'login_times' => 1,
                'email' => (string)$user->email,
            ])->id;

            // 更新头像
            SocialiteUser::where('id', $userId)->update([
                'avatar' => '/uploads/avatar/' . $userId . '.jpg',
            ]);
        }

        $avatarPath = storage_path('app/public/uploads/avatar/' . $userId . '.jpg');

        try {

            // 下载最新的头像到本地
            $client = new Client();
            $client->request('GET', $user->avatar, [
                'sink' => $avatarPath,
            ]);
        } catch (Exception $e) {

            // 如果下载失败；则使用默认图片
            if (!File::isDirectory(storage_path('app/public/uploads/avatar'))) {
                File::makeDirectory(storage_path('app/public/uploads/avatar'), 0755, true);
            }

            File::copy(public_path('images/default/avatar.jpg'), $avatarPath);
        }

        $this->guard()->loginUsingId($userId, true);

        // 如果session没有存储登录前的页面;则直接返回到首页
        return redirect(session('target_url', url('/')))->with('success', '登录成功！');
    }

    /**
     * 退出登陆
     * @return RedirectResponse
     * @author zesai
     * @date 2020/8/21
     */
    public function logout()
    {
        $this->guard()->logout();

        return redirect()->back()->with('success', '退出成功！');
    }

    /**
     * 设置 socialite guard
     * @return Guard|StatefulGuard
     * @author zesai
     * @date 2020/8/11
     */
    public function guard()
    {
        return Auth::guard('socialite');
    }
}
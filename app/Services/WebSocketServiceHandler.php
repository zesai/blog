<?php

namespace App\Services;

use Arr;
use Hhxsv5\LaravelS\Swoole\WebSocketHandlerInterface;
use Illuminate\Redis\RedisManager;
use Illuminate\Support\Facades\Log;
use Swoole\Http\Request;
use Swoole\WebSocket\Frame;
use Swoole\WebSocket\Server;
use Swoole\Table;

class WebSocketServiceHandler implements WebSocketHandlerInterface
{
    /** @var RedisManager $redis */
    private $redis;

    /** @var Table $table */
    private $table;

    /**
     * WebSocketServiceHandler constructor.
     */
    public function __construct()
    {
        $this->redis = app('redis');
        $this->table = app('swoole')->messageTable;
    }

    /**
     * @param Server $server
     * @param Request $request
     * @author zesai
     * @date 2020/8/24
     */
    public function onOpen(Server $server, Request $request)
    {
        //判断是否传递了sessionId参数
//        if (!isset($request->get["sessionId"])) {
//            $data = [
//                "type" => "notLoggedIn",
//                "data" => "请先登陆",
//            ];
//            $server->push($request->fd, json_encode($data));
//            return;
//        }

//        $get = $request->get;
//
//        $this->table->set('uid:' . $userId, ['value' => $request->fd]);// 绑定uid到fd的映射
//        $this->table->set('fd:' . $request->fd, ['value' => $userId]);// 绑定fd到uid的映射

        $server->push($request->fd, '欢迎光临 靓仔？？');
    }

    /**
     * @param Server $server
     * @param Frame $frame
     * @throws \Exception
     * @author zesai
     * @date 2020/8/24
     */
    public function onMessage(Server $server, Frame $frame)
    {
        Log::info('通话', [json_decode($frame->data, true)]);
        $server->push($frame->fd, '欢迎光临 靓仔？？' . date('Y-m-d H:i:s'));

    }

    /**
     * @param Server $server
     * @param $fd
     * @param $reactorId
     * @author zesai
     * @date 2020/8/24
     */
    public function onClose(Server $server, $fd, $reactorId)
    {
        $user_id = $this->table->get('fd:', $fd);
    }
}
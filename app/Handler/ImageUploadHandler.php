<?php

namespace App\Handler;

use Exception;
use Faker\Provider\File;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ImageUploadHandler
{
    /**
     * 只允许这些后缀文件上传
     * @var array allowed_ext
     */
    protected $allowed_ext = ['jpg', 'png', 'jpeg', 'gif', 'bmp'];

    /**
     * 上传基础目录
     * @var string
     */
    protected $base_folder_name = "uploads/images/";

    /**
     * 添加新的可以上传的文件后缀
     * @param array $ext
     * @return ImageUploadHandler
     * @author zesai
     * @date 2020/8/28
     */
    public function pushAllowedExt(array $ext): ImageUploadHandler
    {
        array_push($this->allowed_ext, $ext);
        return $this;
    }

    /**
     * 上传文件
     * @param UploadedFile $file
     * @param $folder
     * @param $file_prefix
     * @param bool $max_width
     * @return string
     * @throws Exception
     * @author zesai
     * @date 2020/8/28
     */
    public function save($file, $folder, $file_prefix, $max_width = false)
    {
        $folder_name = $this->base_folder_name . $folder . '/' . date('Y/m', time());

        // 文件具体存储的物理路径，`public_path()` 获取的是 `public` 文件夹的物理路径。
        // 值如：/home/vagrant/Code/larabbs/public/uploads/images/avatars/201709/21/
        $upload_path = public_path() . '/' . $folder_name;

        // 获取文件的后缀名，因图片从剪贴板里黏贴时后缀名为空，所以此处确保后缀一直存在
        $extension = strtolower($file->getClientOriginalExtension()) ?: 'png';

        // 拼接文件名，加前缀是为了增加辨析度，前缀可以是相关数据模型的 ID
        // 值如：1_1493521050_7BVc9v9ujP.png
        $filename = $file_prefix . '_' . time() . '_' . Str::random(10) . '.' . $extension;

        // 如果上传的不是图片将终止操作
        if ( ! in_array($extension, $this->allowed_ext)){
            throw new Exception('请上传图片格式文件');
        }


        return '';
    }
}
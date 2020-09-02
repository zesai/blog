<?php
/**
 * @see https://github.com/hhxsv5/laravel-s/blob/master/Settings-CN.md  Chinese
 * @see https://github.com/hhxsv5/laravel-s/blob/master/Settings.md  English
 */

use App\Services\WebSocketServiceHandler;
use Swoole\Table;

return [
    'listen_ip'                => env('LARAVELS_LISTEN_IP', '127.0.0.1'),
    'listen_port'              => env('LARAVELS_LISTEN_PORT', 5200),
    'socket_type'              => defined('SWOOLE_SOCK_TCP') ? SWOOLE_SOCK_TCP : 1,

    //是否启用运行时协程，需Swoole>=4.1.0，默认false。
    'enable_coroutine_runtime' => false,

    //string 当通过LaravelS响应数据时，设置HTTP头部Server的值，若为空则不设置，默认 LaravelS
    'server'                   => env('LARAVELS_SERVER', 'LaravelS'),

    //bool 是否开启LaravelS处理静态资源(要求 Swoole >= 1.7.21，若Swoole >= 1.9.17则由Swoole自己处理)，
    //默认false，建议Nginx处理静态资源，LaravelS仅处理动态资源。静态资源的默认路径为base_path('public')，
    //可通过修改swoole.document_root变更。
    'handle_static'            => env('LARAVELS_HANDLE_STATIC', false),

    //string Laravel/Lumen的基础路径，默认base_path()，可用于配置符号链接。
    'laravel_base_path'        => env('LARAVEL_BASE_PATH', base_path()),

    //bool 是否开启Inotify Reload，用于当修改代码后实时Reload所有worker进程，依赖库inotify，通过命令php --ri inotify检查是否可用，默认false，建议仅开发环境开启
    'inotify_reload'           => [
        'enable'        => env('LARAVELS_INOTIFY_RELOAD', false),
        'watch_path'    => base_path(),
        'file_types'    => ['.php'],
        'excluded_dirs' => [],
        'log'           => true,
    ],
    'event_handlers'           => [],
    'websocket'                => [
        'enable' => true,
        'handler' => WebSocketServiceHandler::class,
    ],
    'sockets'                  => [],
    'processes'                => [
        //[
        //    'class'    => \App\Processes\TestProcess::class,
        //    'redirect' => false, // Whether redirect stdin/stdout, true or false
        //    'pipe'     => 0 // The type of pipeline, 0: no pipeline 1: SOCK_STREAM 2: SOCK_DGRAM
        //    'enable'   => true // Whether to enable, default true
        //],
    ],
    'timer'                    => [
        'enable'          => env('LARAVELS_TIMER', false),
        'jobs'            => [
            // Enable LaravelScheduleJob to run `php artisan schedule:run` every 1 minute, replace Linux Crontab
            //\Hhxsv5\LaravelS\Illuminate\LaravelScheduleJob::class,
            // Two ways to configure parameters:
            // [\App\Jobs\XxxCronJob::class, [1000, true]], // Pass in parameters when registering
            // \App\Jobs\XxxCronJob::class, // Override the corresponding method to return the configuration
        ],
        'max_wait_time'   => 5,
        // Enable the global lock to ensure that only one instance starts the timer when deploying multiple instances.
        'global_lock'     => false,
        'global_lock_key' => config('app.name', 'Laravel'),
    ],
    'swoole_tables'            => [
        'message' => [
            'size' =>102400,//Table的最大行数
            'column' => [
                ['name' => 'value', 'type' => Table::TYPE_INT, 'size' => 8],
            ]
        ],
    ],
    'register_providers'       => [],
    'cleaners'                 => [
        // See LaravelS's built-in cleaners: https://github.com/hhxsv5/laravel-s/blob/master/Settings.md#cleaners
    ],
    'destroy_controllers'      => [
        'enable'        => false,
        'excluded_list' => [
            //\App\Http\Controllers\TestController::class,
        ],
    ],
    'swoole'                   => [
        'daemonize'          => env('LARAVELS_DAEMONIZE', false),
        'dispatch_mode'      => 2,
        'reactor_num'        => env('LARAVELS_REACTOR_NUM', function_exists('swoole_cpu_num') ? swoole_cpu_num() * 2 : 4),
        'worker_num'         => env('LARAVELS_WORKER_NUM', function_exists('swoole_cpu_num') ? swoole_cpu_num() * 2 : 8),
        //'task_worker_num'    => env('LARAVELS_TASK_WORKER_NUM', function_exists('swoole_cpu_num') ? swoole_cpu_num() * 2 : 8),
        'task_ipc_mode'      => 1,
        'task_max_request'   => env('LARAVELS_TASK_MAX_REQUEST', 8000),
        'task_tmpdir'        => @is_writable('/dev/shm/') ? '/dev/shm' : '/tmp',
        'max_request'        => env('LARAVELS_MAX_REQUEST', 8000),
        'open_tcp_nodelay'   => true,
        'pid_file'           => storage_path('laravels.pid'),
        'log_file'           => storage_path(sprintf('logs/swoole-%s.log', date('Y-m'))),
        'log_level'          => 4,
        'document_root'      => base_path('public'),
        'buffer_output_size' => 2 * 1024 * 1024,
        'socket_buffer_size' => 128 * 1024 * 1024,
        'package_max_length' => 4 * 1024 * 1024,
        'reload_async'       => true,
        'max_wait_time'      => 60,
        'enable_reuse_port'  => true,
        'enable_coroutine'   => false,
        'http_compression'   => false,

        // 表示每60秒遍历一次，一个连接如果600秒内未向服务器发送任何数据，此连接将被强制关闭
        'heartbeat_idle_time'      => 600,
        'heartbeat_check_interval' => 60,

        // Slow log
        // 'request_slowlog_timeout' => 2,
        // 'request_slowlog_file'    => storage_path(sprintf('logs/slow-%s.log', date('Y-m'))),
        // 'trace_event_worker'      => true,

        /**
         * More settings of Swoole
         * @see https://wiki.swoole.com/#/server/setting  Chinese
         * @see https://www.swoole.co.uk/docs/modules/swoole-server/configuration  English
         */
    ],
];

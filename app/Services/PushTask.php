<?php


namespace App\Services;

use Hhxsv5\LaravelS\Swoole\Task\Task;

class PushTask extends Task
{
    private $type;
    private $flag;
    private $mark;
    private $data;
    private $time;
    private $extra;

    public function __construct(
        int $type, int $flag, string $mark, string $data, int $time, array $extra = [])
    {
        $this->type = $type;
        $this->flag = $flag;
        $this->mark = $mark;
        $this->data = $data;
        $this->time = $time;
        $this->extra = $extra;

    }

    public function handle()
    {

    }
}
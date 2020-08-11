<?php


namespace App\Services;


use Arr;

class Order
{
    /**
     * 获取锁的key
     *
     * @param       $class
     * @param       $method
     * @param mixed ...$_
     *
     * @return string
     * @author Creak
     */
    public static function getLockerKey($class, $method, ...$_)
    {
        $args = call_user_func_array([self::class, 'convertToStrHash'], func_get_args());

        return "talk:util:lockerKey:" . $args;
    }

    /**
     * uniqueStr and md5
     *
     * @param mixed ...$_
     *
     * @return string
     * @author Creak
     */
    public static function convertToStrHash(...$_)
    {
        return str_replace('\\', ':', call_user_func(["self", "convertToStr"], func_get_args()));
    }

    /**
     * uniqueStr
     *
     * @param mixed ...$_
     *
     * @return string
     * @author Creak
     */
    public static function convertToStr(...$_)
    {
        $arr = Arr::dot(func_get_args());

        foreach ($arr as $k => $v) {
            if (!$v) {
                unset($arr[$k]);
            } elseif (is_array($v)) {
                $arr[$k] = '[]';
            }
        }

        return implode(':', $arr);
    }
}
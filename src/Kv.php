<?php
declare(strict_types=1);

namespace Pt\Kv;

abstract class Kv
{
    /**
     * 项目标识
     * @var string
     */
    protected static $project = '';

    /**
     * 一般标识功能描述
     * @var string
     */
    protected static $tail = '';

    /**
     * 头标识
     * @var string
     */
    protected static $prefix = '';

    /**
     * 分隔符
     */
    protected static $separator = ':';

    /**
     * [prefix:][key_mark:][projectMark:][tail:]
     */
    protected static function compileKey(array $value = [], string $prefix = ''): string
    {
        $k = $prefix;

        if (static::$project) {
            $k = $k . static::$separator . static::$project;
        }

        if (static::$tail) {
            $k = $k . static::$separator . static::$tail;
        }

        if (static::$prefix) {
            $k = static::$prefix . static::$separator . $k;
        }

        if(1 === count($value)){
            return $k . static::$separator . $value[0];
        }

        return $k . implode(static::$separator, $value);
    }
}
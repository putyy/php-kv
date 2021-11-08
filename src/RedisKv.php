<?php
declare(strict_types=1);

namespace Pt\Kv;

/**
 * Class RedisKv
 * @package Pt\Kv
 */
class RedisKv extends Kv
{
    /**
     * Redis string, key
     */
    const REDIS_KEY   = 'k';

    /**
     * redis list
     */
    const REDIS_LISTS = 'l';

    /**
     * redis hash
     */
    const REDIS_HASH  = 'h';

    /**
     * redis set
     */
    const REDIS_SET   = 's';

    /**
     * redis sorted set
     */
    const REDIS_S_SET  = 'ss';

    public static function getKey(array $value = []): string
    {
        return parent::compileKey($value, self::REDIS_KEY);
    }

    public static function getListKey(array $value = []): string
    {
        return parent::compileKey($value, self::REDIS_LISTS);
    }

    public static function getHashKey(array $value = []): string
    {
        return parent::compileKey($value, self::REDIS_HASH);
    }

    public static function getSetKey(array $value = []): string
    {
        return parent::compileKey($value, self::REDIS_SET);
    }

    public static function getSSetKey(array $value = []): string
    {
        return parent::compileKey($value, self::REDIS_S_SET);
    }
}
# php-kv
php实现有规律的创建key value数据库对应键名称的基础包
```shell
composer require putyy/php-kv
```

### redis示例
```php

class UserInfo extends \Pt\Kv\RedisKv
{
//    protected static $prefix = "test";
//    protected static $project = "wecaht";
    protected static $tail = "user_info";
}
var_dump(UserInfo::getKey(["uid"]));
var_dump(UserInfo::getHashKey(["uid"]));
var_dump(UserInfo::getListKey());
var_dump(UserInfo::getSetKey());
var_dump(UserInfo::getSSetKey());
```
```shell
string(15) "k:user_info:uid"
string(15) "h:user_info:uid"
string(11) "l:user_info"
string(11) "s:user_info"
string(12) "ss:user_info"
```

----

```php

class UserInfo extends \Pt\Kv\RedisKv
{
//    protected static $prefix = "test";
    protected static $project = "wecaht";
    protected static $tail = "user_info";
}
var_dump(UserInfo::getKey(["uid"]));
var_dump(UserInfo::getHashKey(["uid"]));
var_dump(UserInfo::getListKey());
var_dump(UserInfo::getSetKey());
var_dump(UserInfo::getSSetKey());
```
```shell
string(22) "k:wecaht:user_info:uid"
string(22) "h:wecaht:user_info:uid"
string(18) "l:wecaht:user_info"
string(18) "s:wecaht:user_info"
string(19) "ss:wecaht:user_info"
```

----

```php

class UserInfo extends \Pt\Kv\RedisKv
{
    protected static $prefix = "test";
//    protected static $project = "wecaht";
    protected static $tail = "user_info";
}
var_dump(UserInfo::getKey(["uid"]));
var_dump(UserInfo::getHashKey(["uid"]));
var_dump(UserInfo::getListKey());
var_dump(UserInfo::getSetKey());
var_dump(UserInfo::getSSetKey());
```
```shell
string(20) "test:k:user_info:uid"
string(20) "test:h:user_info:uid"
string(16) "test:l:user_info"
string(16) "test:s:user_info"
string(17) "test:ss:user_info"
```

----

```php
class UserInfo extends \Pt\Kv\RedisKv
{
//    protected static $prefix = "test";
//    protected static $project = "wecaht";
//    protected static $tail = "user_info";
}
var_dump(UserInfo::getKey(["uid"]));
var_dump(UserInfo::getHashKey(["uid"]));
var_dump(UserInfo::getListKey());
var_dump(UserInfo::getSetKey());
var_dump(UserInfo::getSSetKey());
```
```shell
string(5) "k:uid"
string(5) "h:uid"
string(1) "l"
string(1) "s"
string(2) "ss"
```
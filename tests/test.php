<?php
declare(strict_types=1);
require_once __DIR__."/../vendor/autoload.php";
require_once __DIR__."/UserInfo.php";

var_dump(UserInfo::getKey(["uid"]));
var_dump(UserInfo::getHashKey(["uid"]));
var_dump(UserInfo::getListKey());
var_dump(UserInfo::getSetKey());
var_dump(UserInfo::getSSetKey());
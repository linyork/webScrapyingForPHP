<?php
require_once 'vendor/autoload.php';

use QL\QueryList;
$ql = QueryList::get('https://google.com.tw/search?q=test');

$s = $ql->find('#nav a.fl:last')->text();
var_dump($s);exit;
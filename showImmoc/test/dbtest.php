<?php
header('content-type:text/html;charset=utf-8');
require_once '../configs/configs.php';
require_once '../lib/mysql.func.php';
$resu = connect();
var_dump($resu);
<?php
require_once '../include.php';
$username = $_POST['username'];
$password = $_POST['password'];
$verify = $_POST['verify'];
$verify1 = $_SESSION['verify'];

if($verify == $verify1){
	$sql = "select * from imooc_admin where username = '{$username}' and password = '{$password}'";
	$res = checkAmin($sql);
	print_r($res);
} else {
	echo "<script>alert('验证码错误');</script>";
	echo "<script>window.location='login.php';</script>";
}


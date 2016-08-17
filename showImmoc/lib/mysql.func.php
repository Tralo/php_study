<?php
function connect(){
	mysql_connect("localhost","root","123456") or die("数据库连接失败Error:".mysql_errno().":".mysql_error());
}
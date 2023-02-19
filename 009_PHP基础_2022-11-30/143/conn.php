<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>conn文件</title>
</head>
 
<body>
		<?php
$mysql_server_name = 'localhost:3309'; //mysql数据库服务器
$mysql_username = 'root'; //mysql数据库用户名
$mysql_password = 'root'; //mysql数据库密码
$mysql_database = 'php'; //的mysql数据库名
$conn=mysqli_connect($mysql_server_name,$mysql_username,$mysql_password,$mysql_database); //连接数据库
//连接数据库错误提示
	mysqli_query($conn, 'set names utf8');
	mysqli_query($conn, 'set character set utf8');
if (mysqli_connect_errno($conn)) 
{ 
	die("连接 MySQL 失败: " . mysqli_connect_error()); 
}
?>
</body>
</html>
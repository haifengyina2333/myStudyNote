<?php
//------文件编码格式，为了显示中文--------
header("content-type:text/html; charest=UTF-8");
 
//-------收受web的传值-------
$uname=$_POST["uname"];
$pwd=$_POST["pwd"];
 
//-----链接mysql数据库---
include("conn.php");
 
//----免除一些警告-------
error_reporting(0);
 
//-------启动session------
session_start();
 
//判断$uname与$pwd是否为空值-->true 返回上一步-->false 执行数据库查询，并且给session赋值
if(!($uname && $pwd)){
	echo"<script>alert('输入的账号或密码为空！请重新输入账号和密码');history.go(-1);</script>";
}else{
	$sqlstr ="SELECT * FROM user52 WHERE (account='$uname') AND (password='$pwd')";
	
	$result = $conn->query($sqlstr);
	}	
	if($result->num_rows > 0){
		$_SESSION["user"]=$uname;
		echo"<script>location='index1.php'</script>";	
		// alert('登录成功，即将转到主页面');
	}else{
		echo"<script>alert('密码或者账号错误，登录失败，请重新输入账号和密码');history.go(-1);</script>";
}
 
?>
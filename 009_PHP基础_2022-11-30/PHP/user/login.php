<?php
include_once('MySql.php');
$login_usernumber = $_COOKIE['php_usernumber'];
$login_password = $_COOKIE['php_password'];
 // 5.设置SQL语句
 $login_sql = "SELECT usernumber,username,password  FROM libraryusers WHERE usernumber = $login_usernumber ";
 // 6.发送结果集
 $login_res = mysqli_query($link, $login_sql);
 // 7.处理返回结果
 $login_jg = mysqli_fetch_assoc($login_res);
 // 登录验证部分
 if ($login_jg != NUll) {
     if ($login_jg['password'] == $login_password) {
      
     } else {

        header('location:../index.php');
     }

 } else {
    header('location:../index.php');
 }
 ?>

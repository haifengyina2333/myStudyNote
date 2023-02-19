<?php
session_start();
$username = 'hello';
$password = '123';
if ($username == $_GET['user'] && $password == $_GET['pass']) {   
    $_SESSION['username'] = $_GET['user']; 
    echo '登录成功';
}else{
    echo '登录失败';
}
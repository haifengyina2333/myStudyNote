<?php

$username = 'hello';
$password = '123';
if ($username == $_GET['user'] && $password == $_GET['pass']) {
    setcookie('username','hello',time()+3600,'/');
    echo '登录成功';
}else{
    echo '登录失败';
}
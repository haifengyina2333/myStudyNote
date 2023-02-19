<?php

function ljsjk($url,$user,$password,$ku){
    $link = mysqli_connect($url,$user,$password);
    // 会返回一个对象
    
    //2.判断是否连接成功
    
    if(!$link){
        exit ('链接数据库失败');
    }
    
    // 3.设置字符集
    mysqli_set_charset($link,'utf8');
    
    
    // 4.选择数据库
    mysqli_select_db($link,$ku);

    return $link;
}
?>
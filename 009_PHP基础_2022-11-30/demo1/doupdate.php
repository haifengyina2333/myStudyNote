<?php

include('sjk.php');

$id = $_GET['id'];
$username = $_GET['username'];
$gender = $_GET['gender'];
$address = $_GET['address'];
$age = $_GET['age'];

$sql = "update user set `username`= '$username' , `username`= '$username' , `address` = '$address' , `age` ='$age' where id = $id;";

$res = mysqli_query($link,$sql);


echo ('添加成功');
echo '<a href="demo.php"> 返回</a>';
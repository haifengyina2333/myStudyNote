<?php
    include('sjk.php');

    $id = $_GET['id'];
    $username = $_GET['username'];
    $gender = $_GET['gender'];
    $address = $_GET['address'];
    $age = $_GET['age'];
$sql = "insert into user(id,username,password,gender,address,age) value ($id ,'$username','password','$gender','$address','$age');";

$res = mysqli_query($link,$sql);

echo '添加成功';
header('location:demo.php');
echo '<a href="demo.php"> 返回</a>';
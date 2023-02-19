<?php
        include_once('MySql.php');

$Id = $_GET['id'];
$number  = $_GET['usernumber'];
$name  = $_GET['username'];
$password  = $_GET['password'];
$real  = $_GET['real_name'];
$gender  = $_GET['gender'];
$age  = $_GET['age'];
$address  = $_GET['address'];
$phone  = $_GET['phone'];
$mail  = $_GET['mail'];
$sql = "UPDATE libraryusers set `usernumber` = '$number', `username` = '$name' , `password` = '$password' ,`real_name` ='$real',`gender` = '$gender' , `age`='$age',`address`='$address',`phone`='$phone',`mail`='$mail'where id = '$Id'";
$res = mysqli_query($link, $sql);
header('location:./UserAdmin.php');

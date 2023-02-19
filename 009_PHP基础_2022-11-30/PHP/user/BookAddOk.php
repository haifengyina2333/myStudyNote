<?php

$BookId = $_GET['BookId'];
$BookName = $_GET['BookName'];
$BookAuthor = $_GET['BookAuthor'];
$BookType = $_GET['BookType'];
$BookBriefIntroduction = $_GET['BookBriefIntroduction'];
// 连接数据库部分
include_once('MySql.php');

$sql = "insert into Books(BookId,BookName,BookAuthor,BookType,BookBriefIntroduction) value ($BookId ,'$BookName',' $BookAuthor','$BookType','$BookBriefIntroduction');";

$res = mysqli_query($link, $sql);

header('location:BookAdmin.php');
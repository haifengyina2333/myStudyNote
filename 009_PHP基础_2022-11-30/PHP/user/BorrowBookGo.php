<?php

$BookId = $_GET['BookId'];
$usernumber = $_COOKIE['php_usernumber'];

include_once('MySql.php');


$sql = "insert into borrowbooks(Usernumber,BookId) value ($usernumber,$BookId);";

$res = mysqli_query($link, $sql);

header('location:ReturnBook.php');
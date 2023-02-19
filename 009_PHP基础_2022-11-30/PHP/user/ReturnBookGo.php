<?php

include_once('MySql.php');
$Id = $_GET['id'];
$sql = "DELETE from borrowbooks WHERE id = $Id";
$res = mysqli_query($link, $sql);
header('location:ReturnBook.php');
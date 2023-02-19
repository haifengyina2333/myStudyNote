<?php
            include_once('login.php');
$Id = $_GET['id'];

$sql = "DELETE from libraryusers WHERE id = $Id";
$res = mysqli_query($link, $sql);

header('location:./UserAdmin.php');

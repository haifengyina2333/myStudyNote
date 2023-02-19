<?php
     $Id = $_GET['id'];

    // 连接数据库部分
    include_once('MySql.php');

    $sql = "DELETE from Books WHERE id = $Id";


    $res = mysqli_query($link, $sql);

    header('location:BookAdmin.php');
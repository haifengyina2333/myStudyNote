<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/bootstrap.css">

    <!-- 公共样式 -->
    <link rel="stylesheet" href="../CSS/base.css">
    <!-- 重复样式 -->
    <link rel="stylesheet" href="../CSS/common.css">
    <!-- 这个页面的的独特样式 -->
    <link rel="shortcut icon" href="../img/Library.ico" type="image/x-icon">

    <title>管理页面</title>
</head>

<body>
<div class="header">
        <ul class="nav nav-tabs nav-justified">
            <li ><a href="./BorrowBook.php">借书</a></li>
            <li ><a href="./ReturnBook.php">还书</a></li>
            <li class="active"><a href="./BookAdmin.php">图书管理</a></li>
            <li ><a href="./UserAdmin.php">用户管理</a></li>
            <li><a href="./loginReturn.php">退出登录</a></li>
        </ul>
    </div>
    <div class="CoreContent">
        <h2>图书修改功能</h2>

        <?php

        $Id = $_GET['id'];
        // 连接数据库部分
        include_once('MySql.php');

        $sql = "select * from Books WHERE id = $Id";

        $res = mysqli_query($link, $sql);

        $rows = mysqli_fetch_assoc($res);

        ?>

        <form action="BookModifyOk.php" class="modify"  >
            <input type="hidden" value="<?php echo $Id; ?>" name="Id"> 
            图书ID：<input type="text" value="<?php echo $rows['BookId']; ?>" name="BookId">
            <br>
            图书名：<input type="text" value="<?php echo $rows['BookName']; ?>" name="BookName">
            <br>
            图书类型：<input type="text" value="<?php echo $rows['BookType']; ?>" name="BookType">
            <br>
            图书作者：<input type="text" value="<?php echo $rows['BookAuthor']; ?>" name="BookAuthor">
            <br>
            图书简介： <textarea name="BookBriefIntroduction" id="" cols="30" rows="10"><?php echo $rows['BookBriefIntroduction']; ?></textarea>
            
            <br>
            <input type="submit" name="" id="" value="修改">
    </div>

    <footer class="footer">©1999-2022 21软件1班 贾瑞洁</footer>
</body>

</html>
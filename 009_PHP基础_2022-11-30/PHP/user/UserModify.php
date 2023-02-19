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
            <li><a href="./BorrowBook.php">借书</a></li>
            <li><a href="./ReturnBook.php">还书</a></li>
            <li><a href="./BookAdmin.php">图书管理</a></li>
            <li class="active"><a href="./UserAdmin.php">用户管理</a></li>
            <li><a href="./loginReturn.php">退出登录</a></li>
        </ul>
    </div>
    <div class="CoreContent">
        <h2>用户信息修改功能</h2>

        <?php

        $Id = $_GET['id'];
        // 连接数据库部分
        include_once('MySql.php');

        $sql = "select * from libraryusers WHERE id = $Id";

        $res = mysqli_query($link, $sql);

        $rows = mysqli_fetch_assoc($res);

        ?>

        <form action="UserModifyOk.php" class="Delete"  >
            <input type="hidden" value="<?php echo $Id; ?>" name="id"> 
            用户账号：<input type="text" value="<?php echo $rows['usernumber']; ?>" name="usernumber">
            <br>
            用户名称：<input type="text" value="<?php echo $rows['username']; ?>" name="username">
            <br>
            用户密码：<input type="password" value="<?php echo $rows['password']; ?>" name="password">
            <br>
            用户真实名字：<input type="text" value="<?php echo $rows['real_name']; ?>" name="real_name">
            <br>
            用户性别：<input type="text" value="<?php echo $rows['gender']; ?>" name="gender">
            <br>
            用户年龄：<input type="text" value="<?php echo $rows['age']; ?>" name="age">
            <br>
            用户地址：<input type="text" value="<?php echo $rows['address']; ?>" name="address">
            <br>
            用户手机号：<input type="text" value="<?php echo $rows['phone']; ?>" name="phone">
            <br>
            用户邮箱：<input type="text" value="<?php echo $rows['mail']; ?>" name="mail">
            <br>
            
            
            <br>
            <input type="submit" name="" id="" value="修改">
    </div>

    <footer class="footer">©1999-2022 21软件1班 贾瑞洁</footer>
</body>

</html>
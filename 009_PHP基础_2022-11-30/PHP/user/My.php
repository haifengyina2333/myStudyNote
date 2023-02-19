<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <ul class="daohanglan">
            <li><a href="./BorrowBook.php">借书</a></li>
            <li><a href="./ReturnBook.php">还书</a></li>
            <li ><a href="./BookAdmin.php">图书管理</a></li>
            <li ><a href="./UserAdmin.php">用户管理</a></li>
            <li class="hover"><a href="./My.php">个人中心</a></li>
            <li><a href="./loginReturn.php">退出登录</a></li>
        </ul>
    </div>
    <div class="CoreContent">
        <h2>个人信息修改功能</h2>

        <?php

        $MyUsernumber = $_COOKIE['php_usernumber'];
        // 连接数据库部分
        include_once('login.php');
        include_once('MySql.php');

        $sql = "select * from libraryusers WHERE Usernumber = $MyUsernumber";

        $res = mysqli_query($link, $sql);

        $rows = mysqli_fetch_assoc($res);

        ?>

        <form action="MyOk.php" class="Delete"  >
            <input type="hidden" value="<?php echo $rows['id']; ?>" name="id"> 
            我的账号：<input type="text" value="<?php echo $rows['usernumber']; ?>" name="usernumber">
            <br>
            我的名称：<input type="text" value="<?php echo $rows['username']; ?>" name="username">
            <br>
            我的密码：<input type="password" value="<?php echo $rows['password']; ?>" name="password">
            <br>
            我的真实名字：<input type="text" value="<?php echo $rows['real_name']; ?>" name="real_name">
            <br>
            我的性别：<input type="text" value="<?php echo $rows['gender']; ?>" name="gender">
            <br>
            我的年龄：<input type="text" value="<?php echo $rows['age']; ?>" name="age">
            <br>
            我的地址：<input type="text" value="<?php echo $rows['address']; ?>" name="address">
            <br>
            我的手机号：<input type="text" value="<?php echo $rows['phone']; ?>" name="phone">
            <br>
            我的邮箱：<input type="text" value="<?php echo $rows['mail']; ?>" name="mail">
            <br>
            
            
            <br>
            <input type="submit" name="" id="" value="修改">
    </div>

    <footer class="footer">©1999-2022 广东建设职业技术学院 —— 21软件1班 周润楠</footer>
</body>

</html>
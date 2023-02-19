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
    <link rel="stylesheet" href="../CSS/bootstrap.css">
    
    <link rel="shortcut icon" href="../img/Library.ico" type="image/x-icon">

    <title>图书添加页面</title>
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
        <h2>图书添加功能</h2>
        <form action="BookAddOk.php" class="modify"  >
            图书ID：<input type="text" value="" name="BookId">
            <br>
            图书名：<input type="text" value="" name="BookName">
            <br>
            图书类型：<input type="text" value="" name="BookType">
            <br>
            图书作者：<input type="text" value="" name="BookAuthor">
            <br>
            图书简介： <textarea name="BookBriefIntroduction" id="" cols="30" rows="10"></textarea>
            <br>
            <input type="submit" name="" id="" value="添加">
    </div>

    <footer class="footer">©1999-2022 21软件1班 贾瑞洁</footer>
</body>

</html>
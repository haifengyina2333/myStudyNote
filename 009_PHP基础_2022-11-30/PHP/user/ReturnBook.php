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
    <link rel="shortcut icon" href="../img/Library.ico" type="image/x-icon">

</head>

<body>
<div class="header">
        <ul class="nav nav-tabs nav-justified">
            <li><a href="./BorrowBook.php">借书</a></li>
            <li class="active"><a href="./ReturnBook.php">还书</a></li>
            <li><a href="./BookAdmin.php">图书管理</a></li>
            <li ><a href="./UserAdmin.php">用户管理</a></li>
            <li><a href="./loginReturn.php">退出登录</a></li>
        </ul>
    </div>
    <div class="CoreContent">
        <h2>图书馆还书功能</h2>
        <table class="table">
            <tr class="thead">
                <th class="one">#</th>
                <th class="one">书名</th>
                <th class="one">类别</th>
                <th class="one">作者</th>
                <th class="two">简介</th>
                <th class="one">操作</th>
            </tr>
            <?php


            // 连接数据库部分
            include_once('MySql.php');
            include_once('login.php');
            // 分页开始
            
            $page = empty($_GET['page']) ? 1 : $_GET['page'];

            $usernumber = $_COOKIE['php_usernumber'];

            $sql = "select count(*) as count from borrowbooks Where usernumber = $usernumber;";

            $res = mysqli_query($link, $sql);

            $pageRes = mysqli_fetch_assoc($res);
            // 总条数
            $count = $pageRes['count']; //as 的别名
            // 每页显示条数
            $num = 7;
            // 总页数
            $pageCount = ceil($count / $num);
            // 偏移量
            $offset = ($page - 1) * $num;


            $sql = "select borrowbooks.id,books.BookName,books.BookType,books.BookAuthor,books.BookBriefIntroduction FROM 
            borrowbooks JOIN books on borrowbooks.bookId=books.BookId WHERE borrowbooks.usernumber = $usernumber limit " . $offset . ',' . $num;

            $res = mysqli_query($link, $sql);



            while ($rows = mysqli_fetch_assoc($res)) {
                echo "<tr class='table_body'>";
                echo '<td>' . $rows['id'] . '</td>';
                echo '<td>' . $rows['BookName'] . '</td>';
                echo '<td>' . $rows['BookType'] . '</td>';
                echo '<td>' . $rows['BookAuthor'] . '</td>';
                echo '<td style="     height: 48px;
                overflow: hidden;
                font-size: 12px; display: block;
                text-align: left;
                padding-top:5px;">' . $rows['BookBriefIntroduction'] . '</td>';

                echo '<td><a href="ReturnBookGo.php?id=' . $rows['id'] . '">还书 </a>';
                echo '</tr>';
            }

            echo '</table>';



            $prev = $page - 1;
            $next = $page + 1;

            if ($prev < 1) {
                $prev = 1;
            }
            if ($next > $pageCount) {
                $next = $pageCount;
            }

            ?>
            <a class="go" href="ReturnBook.php?page=1">首页</a>
            <a class="go" href="ReturnBook.php?page=<?php echo $prev; ?>">上一页</a>
            <span>
                <?php echo $page ?>
                /
                <?php echo $pageCount ?>
            </span>
            <a class="go" href="ReturnBook.php?page=<?php echo $next; ?>">下一页</a>
            <a class="go" href="ReturnBook.php?page=<?php echo $pageCount; ?>">尾页</a>
    </div>

    <footer class="footer">©1999-2022 21软件1班 贾瑞洁</footer>
</body>

</html>
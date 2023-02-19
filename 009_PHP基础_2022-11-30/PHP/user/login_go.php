<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登录跳转中</title>
    <link rel="stylesheet" href="../CSS/bootstrap.css">

    <!-- 公共样式 -->
    <link rel="stylesheet" href="../CSS/base.css">
    <!-- 重复样式 -->
    <link rel="stylesheet" href="../CSS/common.css">
    <!-- 这个页面的的独特样式 -->
    <link rel="stylesheet" href="../CSS/login_go.css">
    <link rel="shortcut icon" href="../img/Library.ico" type="image/x-icon">

</head>

<body>

    <div class="bigbox">
        <span class="biaoti">图书管理系统</span>

        <div class="login">
            <div class="blur"></div>

            <?php
            $usernumber = $_POST['username'];
            $userpassword = $_POST['password'];

            // 连接数据库部分
            $url = '127.0.0.1:3309';
            $user = 'root';
            $password = 'root';
            $ku = 'php';
            $link = mysqli_connect($url, $user, $password);
            // 会返回一个对象
            
            //2.判断是否连接成功
            if (!$link) {
                exit("<h2 class= 'title' >链接数据库失败</h2>
                <h3 class= 'title' >请稍后再试</h3>
                <h5 class= 'title' >长时间无法使用，请联系管理员</h5>
                <h6 class= 'title' >电话： + 86 1008611 周先生</h6>");

            }
            // 3.设置字符集
            mysqli_set_charset($link, 'utf8');
            // 4.选择数据库
            mysqli_select_db($link, $ku);

            // 5.设置SQL语句
            $sql = "SELECT usernumber,username,password  FROM libraryusers WHERE usernumber = $usernumber ";
            // 6.发送结果集
            $res = mysqli_query($link, $sql);
            // 7.处理返回结果
            $jg = mysqli_fetch_assoc($res);
            // 登录验证部分
            if ($jg != NUll) {
                if ($jg['password'] == $userpassword) {
                    echo "<h2 class= 'title' >欢 迎 你</h2>
                    <h3 class='title'>" . $jg['username'] . "</h3>";

                    setcookie('php_usernumber',$jg['usernumber'],time() + 604800 ,'../');
                    setcookie('php_username',$jg['username'],time() + 604800 ,'../');
                    setcookie('php_password', $jg['password'], time() + 604800, '../');

                    header('Refresh: 1 ; url = http://localhost:3000/PHP/user/BorrowBook.php?usernumber='.$usernumber);
                } else {
                    echo "<h3 class= 'title' >密码错误</h3>
                    <h3 class= 'title' >请重新输入</h3>";
                    header('Refresh: 1 ; url = http://localhost:3000/PHP/index.php');
                }

            } else {
                echo "<h3 class= 'title' >该用户名不存在</h3>
                    <h3 class= 'title' >请重新输入</h3>";
                // 带跳转功能的 header 属性
                // 第一个是 跳转时间    这里是 url
                header('Refresh: 1 ; url = http://localhost:3000/PHP/index.php');
                // 一般的跳转功能
                // header('location:demo.php');
            }
            ?>
            <h4 class='title'>正在跳转中,请稍等</h4>
        </div>




</body>

</html>
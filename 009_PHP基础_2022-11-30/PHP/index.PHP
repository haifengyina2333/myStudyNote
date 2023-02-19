<!DOCTYPE html>
<htmm lang="zh-cn" class="html">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>登录</title>
        <link rel="shortcut icon" href="../img/Library.ico" type="image/x-icon">

        <!-- 公共样式 -->
        <link rel="stylesheet" href="./CSS/base.css">
        <!-- 重复样式 -->
        <link rel="stylesheet" href="./CSS/common.css">
        <!-- 这个页面的的独特样式 -->
        <link rel="stylesheet" href="./CSS/index.css">
        <link rel="shortcut icon" href="./img/Library.ico" type="image/x-icon">
        <!-- 导入Jquery库 -->
        <script src="./JS/jquery.js"></script>
        <!-- 导入该页面的Js代码 -->
        <script src="./Js/index.js"></script>
        

    </head>

    <body>
        <div class="bigbox">
            <span class="biaoti">简单图书管理系统</span>
            <form action="./user/login_go.php" method="post">
                <div class="login">
                    <div class="blur"></div>
                    <h4 class="title">登 录</h4>
                    <div class="srk">
                        <p>账号 :</p>
                        <input type="text" name="username" id="username" required>
                        <p>密码 :</p>
                        <input type="password" name="password" id="password" required>
                        <a class="wjmm" href="404.php">忘记密码</a>
                    </div>
                    <input type="submit" name="" id="denlu" value="登录">
                    <span  class="ts">请你输入账号和密码</span>
                    <!-- <button><a href="">注册</a></button> -->
                </div>
            </form>
        </div>
    </body>

</htmm>
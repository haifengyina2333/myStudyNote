<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>登录页面</title>
</head>
<link rel="stylesheet" href="./bootstrap.min.css">
	<link rel="stylesheet" href="./common.css">
<link rel="shortcut icon" href="../img/tbiao.ico" type="image/x-icon">
<body>
    <div class="box container">
       
        <!-- 整体文本居中 -->
    <!-- <div aligh = center></div> -->
    
		<span >图书馆系统登录界面</span>
    <form method="POST" action="log_ok.php">
    <br>
       账号 ：<input type="text" name="uname" placeholder="请输入用户名" class="srk"/>
       <br><br>
       密码 ：<input type="password" name="pwd" placeholder="请输入密码" class="srk"/>
        <br />
        <input type="submit" class="btn  btn-primary zcgn" value="登录" >
		<input type="reset" class="btn btn-success zcgn"> 
        <br><br>
        <a href="register.php">注册账号</a>
		
            </form>
           
        </div>
    </div>
    
</body>
</html>
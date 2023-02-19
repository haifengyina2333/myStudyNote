<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>注册页面</title>
	<link rel="stylesheet" href="./bootstrap.min.css">
	<link rel="stylesheet" href="./common.css">
<link rel="shortcut icon" href="../img/tbiao.ico" type="image/x-icon">

</head>



<body>
	<?php
    $a = mt_rand(333333, 999999999);
    ?>

	<div class="box container">
		<h2 >注册用户</h2>
		<form method="post" name="from1" action="register_ok.php" >
			<!--  在数据库中id是自动增长列  -->
			账号： <input name="id" class="srk" type="text" value="<?php echo " $a"; ?>"><br/>

			姓名： <input class="srk" type="text" name="username"><br />
			性别： <input class="srk" type="text" name="sex"><br />
			年龄： <input class="srk" type="text" name="age"><br />
			地址： <input class="srk" type="text" name="address"><br />
			邮箱： <input class="srk" type="text" name="mail"><br />
			密码： <input class="srk" type="text" name="password"><br />
			确认 密码： <input class="srk" type="text" name="repsw"><br />
			手机号码： <input class="srk" type="text" name="number"><br />


			<input type="reset" name="reset" value="重置" class="btn btn-primary zcgn">
			<input  type="submit" name="submit" value="注册" onClick="myfunction" class="btn btn-success zcgn">
			<br><br>
			 <a href="log.php">返回上一页</a>
			


		</form>
	</div>
</body>

</html>
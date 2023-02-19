<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>添加数据</title>
	<link rel="stylesheet" href="./bootstrap.min.css">
	<link rel="stylesheet" href="./common.css">
<link rel="shortcut icon" href="../img/tbiao.ico" type="image/x-icon">

</head>

<body>
	<?php
    error_reporting(0);
    session_start();
    include("conn.php");
    ?>
	<ul class="nav nav-pills nav-justified">
		<li><a href="#">
				<?php
                echo date("Y-m-d") . "";
                ?>
			</a>
		</li>
		<li ><a href="index1.php">书库</a></li>
		<li class="active"><a href="index_ok.php">添加图书</a></li>
		<li><a href="index-select.php">查询图书</a></li>
		<li><a href="update1.php">删除图书</a></li>
		<li><a href="delete.php">修改图书</a></li>
		<li><a href="back.php">退出系统</a></li>

		<li><a href="index1.php">
				<?php if (!($_SESSION['user']))
	                echo '';
                else {
	                echo "欢迎 ：";
	                echo $_SESSION['user'];
                } ?>
			</a></li>
	</ul>
	<div class="box container">
		<span>添加图书</span>
		<br>
		<form method="post" name="form1" action="index_ok.php">
			
			序号 : <input type="text" name="id" class="srk"></input><br/>
			书名 : <input type="text" name="name" class="srk"></input><br/>
			价格 : <input type="text" name="price" class="srk"></input><br/>
			日期 : <input type="text" name="data" class="srk"></input><br/>
			类型 : <input type="text" name="type" class="srk"></input><br/>
			<input class="btn  btn-primary zcgn" type="reset" name="5" value="重置"></input>
			<input class="btn btn-success zcgn" type="submit" name="6" value="提交"></input>

		</form>
	</div>
	<?php
    error_reporting(0);
    header("content-type:text/html; charest=UTF-8"); //文件编码格式
    include_once("conn.php"); //连接数据库文件
    $a = $_POST["id"];
    $b = $_POST["name"];
    $c = $_POST["price"];
    $d = $_POST["data"];
    $e = $_POST["type"];
    //把input中的namejie
    if (!($a and $b and $c and $d and $e)) {
	    echo "<script>alter('输入值不许为空');history.go(-1);</script>"; //判断变量名是否为空值
    
    } else {

	    $sqlstr1 = "insert into book52 values('" . $a . "','" . $b . "','" . $c . "','" . $d . "','" . $e . "')";

	    //执行sql   insert语句    把用post引用的变量接入到bookable中
    
	    $result = mysqli_query($conn, $sqlstr1); //承接结果集
    
	    if ($result) {
		    echo "<script>alter('添加成功');location='index1.php'</script>";
	    } else {
		    echo "<script>alter('添加失败');history.go(-1);</script>";
	    }
    }
    ?>
	
</body>

</html>
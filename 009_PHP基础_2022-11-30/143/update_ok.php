<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>跳转</title>
</head>
<style>
body{
            background-image: url(img/111111111111111.jpg);
        }
 </style>
 
<body>
	<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>更新数据</title>
</head>
<body>
<?php
header("Content-type:text/html; charest=UTF-8");//编码方式
 
include_once("conn.php");//连接数据库
$a=$_POST["id"];
$b=$_POST["name"];
$c=$_POST["price"];
$d=$_POST["data"];
$e=$_POST["type"];
	if($_POST['action'] == "update"){
		if(!( $b and $c and $d and $e)){
			echo "输入不允许为空";  //返回上一页  或者使用alert
		}else{
		$sqlstr="update book52 set  name='".$b."',price='".$c."',data='".$d."',type='".$e."' where id=".$a; //定义更新语句
		
		//如果查询所有后面属性可以省略，一一对应
		$result = mysqli_query($conn,$sqlstr);
		
		
		if($result){
			echo"修改成功，点击<a href='index1.php'>这里</a>查看";
		}else{
			echo"修改失败.<br>$sqlstr";
		}
	}
	}
?>
</body>
</html>
</body>
</html>
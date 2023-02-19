<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>删除</title>
</head>
<style>
body{
            background-image: url(img/111111111111111.jpg);
        }
 </style>
 
<body>
	<?php
	header("Content-type:text/html; charest=UTF-8");//编码方式
	// 处理删除操作的页面 
	include_once("conn.php");
	if($_GET['action']=="delete"){
	$sqlstr1="delete from book52 where id =".$_GET['id'];
	$result=mysqli_query($conn,$sqlstr1);
		
		
		if($result){
			echo"删除成功";
		}else{
			echo"删除失败";
		}
	}
	
?>
</body>
</html>
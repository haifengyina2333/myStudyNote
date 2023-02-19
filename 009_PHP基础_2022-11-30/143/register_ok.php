<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>注册实现页面</title>
</head>
<style>
body{
            background-image: url(img/111111111111111.jpg);
        }
		</style>
</body>
 
<body>
	<?php
	include_once("conn.php");
	header("content-type:text/html; charest=UTF-8");//文件编码格式
	session_start();
	
	
	$id=$_POST['id'];
	$username=$_POST['username'];
	$sex=$_POST['sex'];
	$age=$_POST['age'];
	$address=$_POST['address'];
	$mail=$_POST['mail'];
	$password=$_POST['password'];
	$repsw=$_POST['repsw'];
	$number=$_POST['number'];
	
	
	
    
	if(!($id and $username and $sex and $age and $address and $mail and $password and $number and $repsw )){
		echo"<script>alert('输入值不许为空');history.go(-1);</script>";
	}else{
		 if(!($repsw==$password)){
		echo"<script>alert('两次密码不一致');history.go(-1);</script>";
	 }else{
	$sql = "SELECT * FROM user52 WHERE (account='$id')";//在数据库中找相应信息！
	$res = $conn->query($sql);
		 //判断结果集的记录数是否大于0
	
		if ($res->num_rows > 0){
			echo"<script>alert('已经有相同账号,请您换个账号进行注册');history.go(-1);</script>";
		}else{
			$_SESSION['user']=$id;
			$sqlstr1="insert into user52 values('".$id."','".$username."','".$sex."','".$age."','".$address."','".$mail."','".$password."','".$number."')";
		    //执行sql   insert语句    把用post引用的变量接入到register中
		    $result = mysqli_query($conn,$sqlstr1);//承接结果集
			
			if($result){
			echo"<script>alert('注册成功');location='index1.php'</script>";	
			}else{
			echo"<script>alert('注册失败');history.go(-1);</script>";	
			}
		}
}
			 
 }
	
	
	?>
</body>
</html>
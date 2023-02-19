<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>简单查询</title>
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
		<li><a href="index1.php">书库</a></li>
		<li><a href="index_ok.php">添加图书</a></li>
		<li class="active"><a href="index-select.php">查询图书</a></li>
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
	<div class="bigbox container">
	<table class="table table-striped table-hover" >
	
				<?php
					include_once("conn.php");
				?>
				
					<tr>
						<th>序号</th>
						<th>图书名称</th>
						<th>价格</th>
						<th>出版日期</th>
						<th>类型</th>
						<th>操作</th>
					</tr>
		<?php
		
		header("content-type:text/html; charest=UTF-8");//文件编码格式
	include_once("conn.php");//连接数据库文件
		
		$sqlstr="select * from book52 order by id ";//通过把sql语句放到变量值中 来执行php
		
		$result = mysqli_query($conn,$sqlstr);//承接结果集   一般来说结果集之后会被用在循环中例如index_ok.php ，或者遍历输出数据库中的值例如index1.php
		
		while($rows= mysqli_fetch_row($result)){
			
			?>
					<tr>
					<td><?php echo $rows[0];?></td>
					<td><?php echo $rows[1];?></td>
					<td><?php echo $rows[2];?></td>
					<td><?php echo $rows[3];?></td>
					<td><?php echo $rows[4];?></td>
					<td>
					<button class="btn btn-primary"><a href =update.php?action=update&id=<?php echo $rows[0]?>>修改</a></button>	/
					<button class="btn btn-danger">	<a href =delete.php?action=delete&id=<?php echo $rows[0]?>>删除</button></td>
					</tr>	

					<?php
						
						}
					?>	
		</table>
	</div>
	<ul class="pager">
		<li><a href="#">首页</a></li>
		<li><a href="#">上一页</a></li>
		<li><a href="#">下一页</a></li>
		<li><a href="#">尾页</a></li>
	</ul>

	
</body>
</html>
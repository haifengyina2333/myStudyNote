<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>更改文档</title>
<link rel="stylesheet" href="./bootstrap.min.css">
	<link rel="stylesheet" href="./common.css">
<link rel="shortcut icon" href="../img/tbiao.ico" type="image/x-icon">

</head>

<body>
	
		<?php
		error_reporting(0);
		include_once("conn.php");//连接数据库文件
		if($_GET['action']=="update"){
			
			$sqlstr="select * from book52 where id =".$_GET['id'];      //".$_GET['id'];没看懂
			$result = mysqli_query($conn,$sqlstr);//承接结果集   一般来说结果集之后会被用在循环中例如index_ok.php ，或者遍历输出数据库中的值例如index1.php
			$rows = mysqli_fetch_row($result);       //枚举数组
		}
	
			?>
		  
		  <div class="box container">	
		  <h1>修改书籍内容</h1>
		<form method="post" name="intForm" action="update_ok.php">
			
		    书籍名称 : <input type="text" name="name"   class="srk"  value="<?php echo $rows[1];    ?>"></input><br/>
			价格 : <input class="srk" type="text" name="price"   value="<?php echo $rows[2];  ?>"></input><br/>
		    日期 : <input class="srk" type="text" name="data"  value="<?php echo $rows[3]; ?>"></input><br/>
		    类型 : <input class="srk" type="text" name="type"   value="<?php echo $rows[4];  ?>"></input><br/>
			<input  type="hidden" name="action"value="update"></input>
			<input type="hidden" name="id" value="<?php echo $rows[0] ?>"></input>
            <input type="reset" name="Reset" value="重置" class="btn  btn-primary zcgn">
            <input type="submit" name="Submit" value="提交" class="btn btn-success zcgn">
            
            
		</form>
	</div>

</body>
</html>
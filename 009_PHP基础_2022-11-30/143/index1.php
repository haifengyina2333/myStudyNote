<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>图书管理系统</title>
	<link rel="stylesheet" href="./bootstrap.min.css">
	<link rel="stylesheet" href="./common.css">
<link rel="shortcut icon" href="../img/tbiao.ico" type="image/x-icon">

</head>
<

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
		<li class="active"><a href="index1.php">书库</a></li>
		<li><a href="index_ok.php">添加图书</a></li>
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
	<div class="bigbox container">
		<table class="table table-striped table-hover">
			<?php
            include_once("conn.php");
            ?>
			<tr>
				<th>序号</th>
				<th>图书名称</th>
				<th>价格</th>
				<th>出版日期</th>
				<th>类型</th>
			</tr>
			<?php
            // 分页开始
            
            $page = empty($_GET['page']) ? 1 : $_GET['page'];

            $sql = "select count(*) as count from book52;";

            $res = mysqli_query($conn, $sql);

            $pageRes = mysqli_fetch_assoc($res);
            // 总条数
            $count = $pageRes['count']; //as 的别名
            // 每页显示条数
            $num = 10;
            // 总页数
            $pageCount = ceil($count / $num);
            // 偏移量
            $offset = ($page - 1) * $num;

            $sql = "select * from book52 limit " . $offset . ',' . $num;




            $result = mysqli_query($conn, $sql);
            /*$sums = mysqli_num_rows($result);
			echo $nums;*/
            while ($myrows = mysqli_fetch_array($result)) {
            ?>
			<tr>
				<td>
					<?php echo $myrows['id']; ?>
				</td>
				<td>
					<?php echo $myrows['name']; ?>
				</td>
				<td>
					<?php echo $myrows['price']; ?>
				</td>
				<td>
					<?php echo $myrows['data']; ?>
				</td>
				<td>
					<?php echo $myrows['type']; ?>
				</td>
			</tr>

			<?php

            }
			
            $prev = $page - 1;
            $next = $page + 1;

            if ($prev < 1) {
                $prev = 1;
            }
            if ($next > $pageCount) {
                $next = $pageCount;
            }

            ?>

		</table>
	</div>
	<ul class="pager">
		<li><a href="index1.php?page=1">首页</a></li>
		<li><a href="index1.php?page=<?php echo $prev; ?>">上一页</a></li>
		 <span><?php echo $page ?> /<?php echo $pageCount ?> </span>
		<li><a href="index1.php?page=<?php echo $next; ?>">下一页</a></li>
		<li><a href="index1.php?page=<?php echo $pageCount; ?>">尾页</a></li>
	</ul>


</body>

</html>
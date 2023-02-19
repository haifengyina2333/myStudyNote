<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>查询</title>
</head>
<style>
body{
            background-image: url(img/111111111111111.jpg);
        }
		</style>
</body>
 
<body>

<form name="searchValue" method="post" action="">
	  <table width="800" border="0" cellspacing="1" cellpadding="0" align="center" bgcolor="#bbbbbb">
		<tr bgcolor="23c677">
			<td width="45%" align="right">选择查询项目：
				<select name="name">
					<option value="id">序号</option>
					<option value="name" selected>图书名称</option>
					<option value="price">作者</option>
					<option value="date">出版时间</option>
					<option value="type">类型</option>
				</select>
			</td>
			<td width="55%" align="left">
				<input type="search" name="searchValue">
			</td>			
		</tr>
		<tr bgcolor="23c677">
			<td width="45%" align="right">
			</td>
			<td width="55%" align="left">
				<input type="submit" name="searchValue" value="查询">
				<input type="reset" name="reset" value="清空">
			</td>			
		</tr>
	  </table>
	</form>
	<table width="800" border="0" cellspacing="1" cellpadding="0" align="center" bgcolor="#bbbbbb">
		<tr bgcolor="#23c677">			
			<td width="5%" align="center">序号</td>
			<td width="30%" align="center">图书名称</td>
			<td width="10%" align="center">作者</td>
			<td width="20%" align="center">出版时间</td>
			<td width="10%" align="center">所属类型</td>			
		</tr>
		<?php 
		   include_once 'conn.php';
		   if (isset($_POST['searchField']) && isset($_POST['searchValue']))
		   {
		       $sqlstr="select * from book52 where ".$_POST['searchField']." like '%".$_POST['searchValue']."%'";
		       $result=mysqli_query($conn, $sqlstr);
		       while ($myrows=mysqli_fetch_array($result))
		       {
		 ?>
		 		<tr bgcolor="#23c677">		    		
        			<td align="center"><?php echo $myrows[0];?></td>
        			<td align="center"><?php echo $myrows[1];?></td>
        			<td align="center"><?php echo $myrows[2];?></td>
        			<td align="center"><?php echo $myrows[3];?></td>
        			<td align="center"><?php echo $myrows[4];?></td>        			
        		</tr>		 
		 <?php           
		       }
		   }
		?>
	</table>
	</body>
</html>

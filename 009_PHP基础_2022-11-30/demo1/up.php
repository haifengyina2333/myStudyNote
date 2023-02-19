<?php
include('sjk.php');
$id = $_GET['id'];



$sql = "select * from `user` where id = $id ";

$res = mysqli_query($link,$sql);
$rows = mysqli_fetch_assoc($res);

?>
<html>
    <form action="doupdate.php">
        <input type="hidden" value="<?php echo $id;?>" name= "id">
        用户名：<input type="text" value="<?php echo $rows['username'];?>" name= "username"><br>
        性别：<input type="text" value="<?php echo $rows['gender'];?>" name= "gender"><br>
        地址：<input type="text" value="<?php echo $rows['address'];?>" name= "address"><br>
        年龄：<input type="text" value="<?php echo $rows['age'];?>" name= "age"><br>
        <input type="submit" name="" id="" value="添加">
    </form>
</html>

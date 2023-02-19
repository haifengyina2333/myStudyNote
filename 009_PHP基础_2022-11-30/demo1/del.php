<?php
include_once('sjk.php');

echo '删除中';

$id = $_GET['id'];



$sql = "delete from user where id = $id";

$boolean = mysqli_query($link,$sql);

if($boolean && mysqli_affected_rows($link)){
    echo '删除成功';
    header('location:demo.php');
}else{
    echo '删除失败';
}
mysqli_close($link);
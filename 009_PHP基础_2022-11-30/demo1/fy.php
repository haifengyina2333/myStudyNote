<?php

//  select * from user limit 0,5    第一页
//  select * from user limit 5,5    二
//  select * from user limit 10,5   三
//  select * from user limit 15,5   四

//  
include('sjk.php');


// 分页开始

$page = empty($_GET['page'] ) ? 1 : $_GET['page'];

$sql = "select count(*) as count from user;";

$res = mysqli_query($link,$sql);

$pageRes = mysqli_fetch_assoc($res);
// 总条数
$count = $pageRes['count']; //as 的别名
// 每页显示条数
$num = 5;
// 总页数
$pageCount = ceil($count/$num);
// 偏移量
$offset = ($page-1) * $num;

$sql = "select * from user limit ".$offset.','.$num;

$res = mysqli_query($link,$sql);

echo '<table>';
echo '<th>ID</th><th>名字</th><th>性别</th><th>地址</th><th>年龄</th><th>操作</th>';

while ($rows = mysqli_fetch_assoc($res)) {
    echo '<tr>';
    echo '<td>' . $rows['id'] . '</td>';
    echo '<td>' . $rows['username'] . '</td>';
    echo '<td>' . $rows['gender'] . '</td>';
    echo '<td>' . $rows['address'] . '</td>';
    echo '<td>' . $rows['age'] . '</td>';
    //                            带走这个 ID
    echo '<td><a href="del.php?id=' . $rows['id'] . '">删除</a><a href="up.php?id=' . $rows['id'] . '">修改</a></td>';
    echo '</tr>';
}
    echo '<tr><a href="add.php">添加</a>';
echo '</table>';

$prev = $page - 1;
$next = $page + 1;

if($prev < 1){
    $prev = 1;
}
if($next > $pageCount){
    $next = $pageCount;
}


?>
<a href="fy.php?page=1">首页</a>&nbsp;&nbsp;&nbsp;
<a href="fy.php?page=<?php echo $prev;?>">上一页</a>&nbsp;&nbsp;&nbsp;
<a href="fy.php?page=<?php echo $next;?>">下一页</a>&nbsp;&nbsp;&nbsp;
<a href="fy.php?page=<?php echo $pageCount;?>">尾巴</a>

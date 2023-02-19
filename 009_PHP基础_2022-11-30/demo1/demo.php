<?php
$link = mysqli_connect('127.0.0.1:3309', 'root', 'root');

if (!$link) {
    echo '链接数据库失败';
}

mysqli_set_charset($link, 'utf8');

mysqli_select_db($link, 'php');

$sql = "SELECT * FROM `user`;";

$res = mysqli_query($link, $sql);

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
mysqli_close($link);
?>
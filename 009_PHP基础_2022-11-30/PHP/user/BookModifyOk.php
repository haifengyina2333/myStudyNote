     <?php
         $Id = $_GET['Id'];
        $BookId = $_GET['BookId'];
        $BookName =$_GET['BookName'];
        $BookAuthor =$_GET['BookAuthor'];
        $BookType =$_GET['BookType'];
        $BookBriefIntroduction =$_GET['BookBriefIntroduction'];
        // 连接数据库部分
        include_once('MySql.php');

        $sql = "UPDATE Books set `BookId` = '$BookId', `BookName` = '$BookName' , `BookAuthor` = '$BookAuthor' ,`BookType` ='$BookType',`BookBriefIntroduction` = '$BookBriefIntroduction' where id = '$Id';";

        $res = mysqli_query($link, $sql);

        header('location:BookAdmin.php');

        // var_dump($res);
        // header('Refresh: 0 ;url = http://localhost:3000/php_work/user/BookAdmin.php');
        ?>

## 项目说明
---

该项目是一个基础的图书管理系统，使用的技术包括 HTML4 + CSS3 + JQuery + PHP + MySQL ,项目难度较为简单,属于一个新手入门级，主要是可以充分熟悉以上技术的使用，充分了解一个简单网页的开发流程。


### 项目文件目录说明
---

` CSS  ` 里面存放了项目相关的 CSS 样式文件 
-  ` base.css ` 是清理默认样式的CSS文件-
- ` common.js ` 是网页导航条和网页底部说明的CSS文件，
- 其他文件按各种名字对应各个网页
  
` JS ` 里面存放了项目相关的 JS 脚本代码
- `JQuery.js ` 是 JQuery 库的
- 其他按名字一一对应

` less ` 里面存放了项目相关的 CSS 样式文件的预处理文件，具体参考` CSS `的相关说明

` lib ` 里面存放了项目相关的 ` 依赖文件 ` ，目前是一个 ` bootstrap ` 的 CSS 框架

` user ` 里面存放了项目相关的 ` PHP ` 文件，除了 **登录** 之外的所有页面都存放在里面

` index.php ` 就是主页，已经是最开始的登录页面


### 项目单一文件介绍
---
` index.php ` 是主页，其中通过 CSS3 实现了 **毛玻璃** 效果，通过 **==post== 方法将用户的账号和密码传递给下一个网页。** 

其中，表单还有相关的验证代码，通过 **正则表达式** 实现了对 **表单内容的限制** ，做到了 **登录前判断**，减少了相关的后端代码。

---
` login_go.php ` 是**登录时的跳转页面**，在此页面继续 **登录的验证**，遇到了 **账号不存在，密码不正确** 的情况，通过使用 `  header() `  方法，重新跳转回主页。

如果密码正确的情况下，也是通过 `  header() `  方法 ，将**用户的账号作为参数传递给下一个页面**。

**扩展知识: header()的使用:**
` header('location:demo.php'); `  在 ` locarion: `  跟  ` URL `

` header('Refresh: 1 ; url = http://localhost:3000/php_work/index.php'); `
` Refresh: `跟 **自动跳转的时间（单位秒）**  
` url =  ` 后带 url ，**不需要引号**

` header()  ` 后的代码正常执行




### 网站结构及各功能模块
---
1. 网站结构：
- 数据库：用来存储图书信息、用户信息等数据。
- ~~服务器端：用来接收、处理客户端发来的请求，并返回相应响应。~~**(前后端统一架构，没有严格区分服务端)**
- 客户端：用来发起请求，接收服务器端的响应，并将响应内容显示在浏览器中。

2. 各功能模块：
- 用户管理模块：用来实现用户的注册、登录、登出等功能。
- 图书管理模块：用来实现图书的添加、删除、修改、查询等功能。
- 管理员模块：用来实现管理员的登录、管理图书信息、管理用户信息等功能。
- ~~借阅管理模块：用来实现借阅、还书、查询借阅记录等功能。~~**(时间关系没有实现)**

### 功能模块
#### 用户管理模块：
1. 登录：用户可以通过登录页面，输入用户名和密码，登录系统。如果登录成功，系统会记录用户的登录信息，并跳转到首页或者其他页面。
2. 登出：用户可以通过登出页面，退出系统。登出后，系统会清除用户
3. 修改资料：用户可以通过修改资料页面，修改自己的用户名、邮箱、密码等信息。修改成功后，系统会更新用户的资料。
4. ~~注册：用户可以通过注册页面，填写用户名、密码、邮箱等信息，注册一个新的账号。~~**(时间关系没有实现)**
5. ~~找回密码：用户如果忘记了密码，可以通过找回密码页面，输入用户名和邮箱，找回密码。~~**(时间关系没有实现)**

#### 图书管理模块：
1. 图书录入：管理员可以通过图书录入页面，输入图书的名称、作者、出版社、ISBN、类别、价格等信息，完成图书的录入。录入成功后，系统会自动生成一个唯一的图书编号(ID)，并将图书信息保存到数据库中。
2. 图书查询：用户可以通过图书查询页面，查询相关的图书信息。查询结果会以列表的形式显示，用户可以点击图书名称查看详细的图书信息。
3. 图书借阅：用户可以通过图书借阅页面，借阅图书。借阅成功后，系统会更新图书的借阅状态，并记录用户的借阅记录。
4. 图书还书：用户可以通过图书还书页面，还书。还书成功后，系统会更新图书的借阅状态，并记录用户的借阅记录。
5. 借阅记录查询：用户可以通过借阅记录查询页面，查看自己的借阅记录。
   
#### 管理员模块:
1. 管理员登录：管理员可以通过管理员登录页面，输入用户名和密码，完成登录。登录成功后，系统会自动跳转到管理员主页面。
2. 管理员主页：管理员可以通过管理员主页面，查看系统的运行情况，包括用户总数、图书总数、借阅总数等信息。管理员主页还提供了系统的操作菜单，方便管理员快速进行后续的操作。
3. 用户管理：管理员可以通过用户管理页面，对用户进行管理。包括查看用户列表、添加新用户、修改用户信息、删除用户等操作。管理员可以对用户进行分类管理，比如按照用户角色（普通用户、管理员）或者用户状态（正常、锁定）等进行管理。
4. 图书管理：管理员可以通过图书管理页面，对图书进行管理。包括查看图书列表、添加新图书、修改图书信息、删除图书等操作。管理员可以对图书进行分类管理，比如按照图书的类别、出版社等进行管理。
5. ~~借阅管理：管理员可以通过借阅管理页面，对用户的借阅情况进行管理。包括查看借阅列表、审核借阅申请、续借图书、处理逾期还书等操作~~

### 已实现的功能：
1. 图书管理模块：
   ![](%E5%9B%BE%E4%B9%A6%E7%AE%A1%E7%90%86.png)
   - 图书录入
   - 图书查询
   - 图书借阅![](%E5%B1%8F%E5%B9%95%E6%88%AA%E5%9B%BE%202022-12-10%20201810.png)
   - 图书还书
   - 借阅记录查询
2. 管理员模块：
   - 管理员登录
   - 管理员主页
   - 用户管理![](%E7%94%A8%E6%88%B7%E7%AE%A1%E7%90%86.png)
   - 图书管理![](%E5%9B%BE%E4%B9%A6%E4%BF%AE%E6%94%B9%E5%8A%9F%E8%83%BD.png)
3. 用户管理模块
   - 登录
   - 登出
   - 修改资料![](%E4%B8%AA%E4%BA%BA%E4%BF%A1%E6%81%AF%E4%BF%AE%E6%94%B9.png)

**以上的相关功能,都已经直接或者是间接实现,总体运行良好，暂无发现恶性BUG。**


### 数据库相关数据表的介绍说明：
```sql
DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `BookId` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `BookName` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `BookType` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `BookAuthor` varchar(255) NOT NULL,
  `BookBriefIntroduction` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
```
**这是一个用于==创建图书表==的SQL语句。**

该语句首先判断是否存在名为books的表，如果存在则删除，然后创建一个名为books的表，该表包含了以下字段：

- id：自增主键，用于唯一标识每一本书。
-  BookId：图书编号，用于唯一标识每一本书。
BookName：图书名称，用于表示每一本书的名称。
- BookType：图书类型，用于表示每一本书的类型。
- BookAuthor：图书作者，用于表示每一本书的作者。
- BookBriefIntroduction：图书简介，用于简要介绍每一本书的内容。
为了保证表中数据的完整性，该表中的id字段设为主键。同时，为了更好的管理表中的数据，该表设置了自增长属性，每插入一条新记录，id字段的值都会自动增加1。

总的来说，这个SQL语句用于创建一个名为books的图书表，该表能够存储所有图书信息，方便进行图书管理。


```sql
DROP TABLE IF EXISTS `borrowbooks`;
CREATE TABLE `borrowbooks` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `usernumber` varchar(255) NOT NULL,
  `bookId` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
```
该语句首先判断是否存在名为borrowbooks的表，如果存在则删除，然后创建一个名为borrowbooks的表，该表包含了以下字段：

- id：自增主键，用于唯一标识每一次借书记录。
- usernumber：借书人的学号或工号，用于表示借书人的身份。
- bookId：借书的图书编号，用于唯一标识借书人借的书。
为了保证表中数据的完整性，该表中的id字段设为主键。同时，为了更好的管理表中的数据，该表设置了自增长属性，每插入一条新记录，id字段的值都会自动增加1。

总的来说，这个SQL语句用于创建一个名为borrowbooks的借书表，该表能够存储借书人的借书信息，方便进行借书管理。

```sql
DROP TABLE IF EXISTS `libraryusers`;
CREATE TABLE `libraryusers` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `usernumber` varchar(256) NOT NULL COMMENT '用户账号',
  `username` varchar(256) NOT NULL COMMENT '用户名',
  `password` varchar(256) NOT NULL COMMENT '密码',
  `real_name` varchar(256) NOT NULL COMMENT '真实姓名',
  `gender` varchar(256) NOT NULL COMMENT '性别',
  `address` varchar(256) DEFAULT '未公开' COMMENT '地址',
  `phone` varchar(256) NOT NULL COMMENT '手机号',
  `age` varchar(256) NOT NULL COMMENT '年龄',
  `mail` varchar(256) DEFAULT NULL COMMENT '电子邮箱',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`usernumber`)
) ENGINE=MyISAM AUTO_INCREMENT=103 DEFAULT CHARSET=utf8 COMMENT='用户表信息';
```
这是一个用于创建借书表的SQL语句。

该语句首先判断是否存在名为libraryusers的表，如果存在则删除，然后创建一个名为libraryusers的表，该表包含了以下字段：
- id：主键，自增长的整数。
- usernumber：用户的编号，用来唯一标识一个用户。
- username：用户名，用来登录系统。
- password：密码，用来保护用户的隐私和安全。
- real_name：用户的真实姓名。
- gender：用户的性别。
- address：用户的地址，默认值为“未公开”，表示用户可以选择不公开自己的地址。
- phone：用户的手机号。
- age：用户的年龄。
- mail：用户的电子邮箱。

为了保证表中数据的完整性，该表中的id字段设为主键。同时，为了更好的管理表中的数据，该表设置了自增长属性，每插入一条新记录，id字段的值都会自动增加1。

表的结构定义语句中，id 字段是主键，用来唯一标识一条记录；usernumber 字段是唯一键，用来保证每个用户的编号不重复。

上面这个表是图书管理系统中用户表的结构。它包括用户的账号（usernumber）、用户名（username）、密码（password）、真实姓名（real_name）、性别（gender）、地址（address）、手机号（phone）、年龄（age）和电子邮箱（mail）。这些信息都是用来对用户进行管理的。为了防止用户名重复，在这个表中，我们设置了usernumber字段的唯一索引，这样就保证了每个用户的账号都是唯一的。此外，表中还有一个主键，用来唯一标识每一条记录。

总的来说，这个SQL语句用于创建一个名为libraryusers的用户表，该表能够存储借书人的借书信息，方便进行借书管理。

---

**这些代码是用来创建三个数据表的。==第一个表 books 包含了图书的信息，包括图书的编号、名称、类型、作者、简介等信息。第二个表 borrowbooks 包含了用户借阅的图书的信息，包括用户的编号、借阅的图书的编号。第三个表 libraryusers 包含了用户的信息，包括用户编号、用户名、密码、真实姓名、性别、地址、手机号、年龄、电子邮箱等信息。==**

**这三个表之间的关系如下：**

` borrowbooks ` 表中的`  usernumber`  字段对应 ` libraryusers`  表中的`  usernumber `字段，表示哪个用户借了哪本书。
` borrowbooks ` 表中的 ` bookId  ` 字段对应`  books`  表中的 ` BookId  `字段，表示哪本书被哪个用户借了。

### 分页功能：
```php
// 分页开始

$page = empty($_GET['page']) ? 1 : $_GET['page'];
$sql = "select count(*) as count from libraryusers;";
$res = mysqli_query($link, $sql);
$pageRes = mysqli_fetch_assoc($res);
// 总条数
$count = $pageRes['count']; //as 的别名
// 每页显示条数
$num = 10;
// 总页数
$pageCount = ceil($count / $num);
// 偏移量
$offset = ($page - 1) * $num;

$sql = "select * from libraryusers limit " .$offset . ',' . $num;

$res = mysqli_query($link, $sql);

```
这段代码涉及到一些基本的数据库操作和分页功能。首先，它使用 mysqli_query 函数执行`$sql = "select count(*) as count from libraryusers;"; `语句，该语句用于统计数据库中的记录总数。然后，它使用 ceil 函数计算出总页数，并根据当前页码和每页显示的条数，计算出数据库查询语句中的偏移量。最后，它再次使用 mysqli_query 函数执行`"select * from libraryusers limit " .$offset . ',' . $num;`语句，用于获取分页后的数据。  

### 数据库连接：
```php

$url = '127.0.0.1:3309';
     $user = 'root';
     $password = 'root';
     $ku = 'php';
     $link = mysqli_connect($url, $user, $password);
     // 会返回一个对象
     
     //2.判断是否连接成功
     if (!$link) {
         exit('链接失败');
     }
     // 3.设置字符集
     mysqli_set_charset($link, 'utf8');
     // 4.选择数据库
     mysqli_select_db($link, $ku);
```
这段代码实现了一个简单的数据库连接。它首先使用 mysqli_connect 函数连接到数据库服务器，并使用 mysqli_set_charset 函数设置字符集，最后使用 mysqli_select_db 函数选择要操作的数据库。


### 登录验证功能：

**通过对 ` cookie `  进行设置，保存了用户的账号，密码，昵称。再通过下面的代码，进行登录验证功能。**

```php
include_once('MySql.php');
$login_usernumber = $_COOKIE['php_usernumber'];
$login_password = $_COOKIE['php_password'];
 // 5.设置SQL语句
 $login_sql = "SELECT usernumber,username,password  FROM libraryusers WHERE usernumber = $login_usernumber ";
 // 6.发送结果集
 $login_res = mysqli_query($link, $login_sql);
 // 7.处理返回结果
 $login_jg = mysqli_fetch_assoc($login_res);
 // 登录验证部分
 if ($login_jg != NUll) {
     if ($login_jg['password'] == $login_password) {
      
     } else {

        header('location:../index.php');
     }

 } else {
    header('location:../index.php');
 }
 ```
这段代码实现了一个简单的登录验证功能。首先，它使用` $_COOKIE `变量获取两个` cookie `值，分别是用户名和密码。然后，它使用 `mysqli_query `函数执行一条` SQL `语句，用于查询数据库中是否有指定用户名的用户。最后，它使用` mysqli_fetch_assoc `函数处理查询结果，并与` cookie `中的密码进行比对，**如果不匹配则重定向到登录页面。**

### 退出登录功能：
```php
 setcookie('php_usernumber','',time() -1 ,'../');
     setcookie('php_username','',time() -1 ,'../');
     setcookie('php_password', '', time() -1, '../');
     header('location:../index.php');
```
这段代码用于删除` cookies`。首先，它使用 `setcookie `函数删除三个名为 `php_usernumber`、`php_username `和` php_password `的 `cookies`。该函数的第一个参数指定` cookie `的名称，第二个参数指定 `cookie `的值，第三个参数指定 `cookie `的过期时间，最后一个参数指定` cookie `的作用域。在这里，所有` cookie `的过期时间都设置为当前时间减去 1，这样就可以立即删除这些 `cookie`。最后，它使用 `header `函数跳转到 `index.php `页面。




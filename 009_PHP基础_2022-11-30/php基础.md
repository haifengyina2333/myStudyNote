## PHP基础

#### $ 变量 
` $ `可以定义变量 ,区分大小写,可以使用小划线,数字不能开头
判断一个变量是否存在 `isset (变量名)`
销毁变量 `unset (变量名)`

#### 单引号和双引号
 但是 ` " " ` 会算转义字符    ` ' ' `会被省略( \ , 和 ' 是可以的)
可以用单引号就不用双引号

` . `可以连接字符串和变量
`echo $name.'李四';`
`echo "{$name}好好学习天天向上";` 这样子可以连接变量和字符串

1、单引号不能解析变量，双引号可以解析变量
2、双引号执行转译字符，单引号不转译 \n \r \t
3、它执行转译\ \和\ .
4、能使用单引号就不适用双引号，为什么？因为单引号效率要比双引号快
5、如果是字符串和变量一起的时候用` . `来链接
6、双引号里面插入单引号，单引号里面插入变量，变量会解析 “'$a'”
7、如果双引号里面插入变量的时候请在后面加上**空格**或者,号，
不然计算机会认为你是一体的或者**用大括号**抱起来
注意，当变量和字符串想在一起的时候有黏黏的口水“点“来拼接

#### 数据类型
```php
 //整型就是整数
//浮点型就是小数
//布尔类型 boolean 真和假
// 1 == 2
true false
//字符串 单引号 双引号都是
$name = '张三';
$a = 'abc';
$b = "123";

// 数组
$arr = [1,2,3,4,'ac'];
// 对象
object

// 特殊类型
空 null
资源  resource
// 资源就是咱们电脑上的图片 avi rvmb mp3 网络请求都是资源
```

#### 数据类型转换
`gettype( );` 获取数据类型

**强制转换**:
转换为整型 `intval( ) `
转换为浮点 `floatval( ) `
转换为字符串 `strval( ) `
转换为布尔 `boolval( ) `
  ```php

-.

is_array(); // 数组
is_string(); // 字符串
is_bool(); // 布尔
is_float(); // 浮点
is_object(); // 对象
is_int(); // 整型
is_numeric(); // 数值
is_resource(); // 资源
is_null(); // 空
is_scalar();//标量
```
#### 常量
`define('常量名','常量值'); ` 名字一般是大写字母,而且不能重复定义,第一次定义就固定下来了
`defined(常量名); ` 判断是否定义

**系统常量:**
` _FILE_ ` 文件位置
` _LINE_ ` 代码在第几行
`PHP_VERSION` PHP版本号
`_DIR_` 文件路径 和最上面的一样
`_FUNCTION_` 获取函数名(如果存在)
`M_PI` 圆周率

#### 运算符 
和 js 差不多

#### 流程控制 
略

#### 函数 
和js 差不多  不过没有默认参数,就必须传,不然会报错

#### 作用域
超全局作用域
外部变量和内部变量是同一个变量
` $_GET $_POST S_FILE $_COOKIE $_SESSION $GLOBALS `
加了 ` static `的这个变量只会初始化一次 在运行的时候它会记录上一次的值 static变量不会销毁
```php
function sum(){
    $num = 1; 

    $num++;
    echo $num;
}
sum();
sum();
sum();
sum();
// 结果是 2222
function sum(){
    static $num = 1; 

    $num++;
    echo $num;
}
sum();
sum();
sum();
sum();
// 结果是 2345

        //  限制形参的类型          限制返回值类型
function sum(int $num1 , int $nu2):float{
return $numl + $num2;
}

//    无论传递多少数值,统一变成数组
function test(...$arr){
return $numl + $num2;
}

// 匿名函数

$hello = function (){
    echo '我是匿名函数';
};
// 使用匿名函数
$hello();

```
#### 常用函数
数学函数：
随机：
>rand(最小值,最大值); 
>mt_rand(最小值,最大值); 比上面那个快

小数：
>floor:不大于该数的最大整数 向上取整
>ceil：不小于该数的最小整数 向下取整
>round：四舍五入法取整

其它：
>abs：绝对值
>pi：圆周率
>M_PI：常量，与pi()函数的返回值相同
>poW：指数表达式
>max：最大值
>min：最小值

字符串函数：

大小写转换：
>strtolower：转换为小写
>strtoupper：转换为大写
>lcfirst：首字母小写
>ucfirst：首字母大写
>ucwords：每个单词首字母大写

空白处理：
>trim：去掉首尾的空白字符
>ltrim：去掉开头的空白字符
>rtrim/chop：去掉结尾的空白字符

查找定位：
>strstr/strchr：返回首次出现到结尾的内容
>strrchr：返回最后一次出现到结尾的内容
>stristr： strstr忽略大小写的版本
>strpos：返回首次出现的位置
>stripos: strpos忽略大小写的版本
>strrpos：返回最后一次出现的位置
>strripos： strrpos忽略大小写的版本
>substr：子串提取，可以通过下标方式获取单个字符($str[n])
>strpbrk：返回(字符列表中任意字符)首次出现到结尾的内容

比较：
>strcmp：二进制比较字符串
>strcasecmp：strcmp忽略大小写
>strnatcmp：自然顺序比较
>strnatcasecmp： strnatcmp的忽略大小写版本

顺序：
>str shuffle：打乱顺序(舒服了)
>strrev：逆序字符串

转换：
>chr：将ASCII码值转换为字符

还有的就看手册吧

#### 文件包含
类似导入包的功能
` include ('文件名/文件路径'); `         还能执行后面的代码,重复就报错

` require ('文件名/文件路径'); `         无法执行后面的代码,重复就报错

` include_once('文件名/文件路径') `  写两个一样的 不报错

` require_once('文件名/文件路径'); `  

####　数组

**一般数组**
` $arr = [1,2,3,4];`
`$arr = array(1,2,3,4);`

`Sarr = ['3' =>'a' ,'b' ,'c' , 'd'];` 从 3 开始索引

**关联数组:**
```php
$arr = [
    'java' => '大数据'，
    'html' => '页面',
    'php' => 'mysql',
    'js' =>'效果！'
];
```

**二维数组:(多维数组)**
```php
$arr = [
    'php' => [
        'html',
        'css',
        'js'
    ],
    'java',
    'go',
    'c++'
];
// 可以反复嵌套,可以做到 n 维数组
```

**数组元素删除:**
`unset( ); `

**其他**
关联数组的元素获取
`$arr['java'];`

添加新元素
`$arr[] = 123;` 默认是在后面加

获取数组的长度
`$num = count($arr);  `

关联数组的遍历:
```php
foreach ($arr as $key -> Svalue) {
    echo $arr[$ske].'<br />';
}
// 简写
foreach ($arr as $val) {
    echo $val.'<br />';
}
```

list 的使用

```php
$arr = ['a','b','c','e','f'];
list($a , $b , $c , $d) = $arr;
echo $a,$b,$c,$d
```

**list 搭配 each 同样可以实现关联数组的遍历**

#### 超全局数组
```html
<!--            传输地址            传输类型-->
<form action="login.php" method="get">
用户名:<input type="text" name="username" /><br />
密码：<input type-="password" name="password" /><br />
<input type="submit" value="登录">
</form>

$_GET 可以获取上面代码提交的数据 数据类型是 关联数组
```
$_GET 可以获取GET代码提交的数据 数据类型是 关联数组 会在浏览器链接处出现数据 不够安全
$_POST 不会在浏览器地址栏显示 比GET安全
$_REQUEST 可以同时接受 GET 和 POST
$_SERVER $_SESSION $_COOKIE

【$_SERVER】
` $_SERVER['REMOTE_ADDR']; `获取ip地址
` $_SERVER['HTTP_REFERER']; `上级来源页]


#### 错误处理
`var_dump();` 可以打印变量(包括数组)的所有数据

notice warning 错误后的代码会执行

Fatal error 后续代码不会继续执行
 
在错误的代码前 加 ` @ ` 可以屏蔽掉 notice warning  这两种类型的错误



修改 php 配置文件 可以屏蔽掉所有错误,错误就会保存在 日志 里,自己百度吧

#### 日期函数

`time(); ` 时间戳 单位: s

`date('Y-m-d H:i:s',时间戳); ` 差了几个小时 以后可以修改

`date default timezone set('PRC'); ` 上面的补充 修改为北京时区
修改配置文件也可以
` date.timezone =  ` 在一行配置文件

#### 数据库

#### 连接数据库
1. 连接数据库
2. 判断是否连接成功
3. 设置字符集
4. 选择数据库
5. 准备sql语句 select update insert delete
6. 发送sql语句
7. 处理结果集
8. 关闭数据库(释放资源)
   
**相关代码:**  

```php
// 1.链接数据库
$link = $mysqli_connect('url','user','password');
// 会返回一个对象

//2.判断是否连接成功

if(!$link){
    exit ('链接数据库失败');
}

// 3.设置字符集
mysqli_set_charset($link,'utf8');


// 4.选择数据库
mysqli_select_db($link,'bbs/数据库');

// 5.准备sql语句
$sql = "select * form 数据表";

// 6.发送sql语句
$res = mysqli_query($link,$sql);

// 7.处理结果集
$result = mysqli_fetch_assoc($res); 
// 第一行
$result = mysqli_fetch_assoc($res); 
// 现在变成第二行了

// 8.关闭数据库
mysqli_close($link);

```
#### 数据库功能常用函数
```php
$result = mysqli_fetch_assoc($res); 
// 只能返回一条结果

// 使用可以循环返回多挑
while($rows = mysqli_fetch_assoc($res)){
    var_dump($rows);
}

// 使用row 返回 索引的数组(上面那个是关联数组)
$result = mysqli_fetch_row($res); 

// 既带索引 也有关联性
$result = mysqli_fetch_array($res); 

// 返回多少条数据 是int类型
$result = mysqli_num_rows($res); 

$result = mysqli_fetched_rows($link); 


mysqli_affected_rows($link) ;//返回你修改的,删除，添加的时候的受影响的行数
mysqli_insert_id($link);//返回的是你插入的当前的数据的自增的id


```

demo1 文件夹有完整的 增删改查 操作 ， 包括 分页

####　会话控制
```php
// 只存在于客户端的
//   创造                   存在时间 60  生效范围 这个文件夹
setcookie('name','zhangsan',time() + 60,'/')
// 销毁
setcookie('name','',time()-1,'/')


// 服务端的
session_start();    //开启
$_SESSION['username'] = 'zhangsan';     //存值


session_destroy();  //销毁
unset($_SESSION['username']);
```

#### GD库









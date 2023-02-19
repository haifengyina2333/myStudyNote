第二和三天学习流程和循环
并没有必要进行笔记。

## 数组
存放**一组数据的集合**，存储在单个变量下的。
#### 创建数组
1. 利用new 处建数组    
   `var arr = new Array();`
2. **利用字面量创建数组**
   `var arr = [];`
  ` var 数组名 = [' ',' ',' ',' '];`
  数据之间需要逗号分隔开，数组里面的数据称为数组元素。
#### 获取数组元素
通过数组索引来访问，又称为数组下标。（从零开始）
    `数组名[数组索引]  `
    没有相关的元素，就输出undefined
 #### 遍历数组
 使用循环来遍历
 ``` javascript
 var arr = ['xxx','bbb','ccc'];
 for(var i = 0;i < 3;i++ ){
    console.log(arr[i];)
 }
 ```
 可以通过对 3 的值通过方法来进行自动获取
 **数组的长度**
 数组名.length
如下代码所示：
  ``` javascript
 var arr = ['xxx','bbb','ccc'];
 for(var i = 0;i < arr.length;i++ ){
    console.log(arr[i];)
 }
 ```
 #### 新增元素
 1. 修改length，新增数组长度
```javascript
arr.length = 5; //修改arr数组长度为5，没给值的默认为undefined
```

 2. 修改索引号
```javascript
arr[3] = 'aaa'; //会多一个出来，如果索引号是已经存在的，则是替换
```
#### 数组元素的转移
只记一个非常妙的方法
```javascript
var arr = ['','','',''];
var newArr = [];
for (var i 0;i<arr.length;i++){
if (arr[i] > 10){
//新数组索引号应该从0开始依次递增，因为一开始数组长度是0.所以理论上可以无限使用，避免了另一种方法出现的重复定义变量
newArr [newArr.length] = arr[i];
}
```
#### 删除数组其中一些元素
实现：
1. 需要一个新数组用于存放筛选之后的数据。
2. 遍历原来的数组，把不满足条件的数据添加到新数组里面（此时要注意采用数组名+索引的格式接收数据）。
3. 新数组里面的个数，用length不断累加。
案例：
```javascript
var arr = [2,0,6,1,77,8,52,0,25,7];
var newArr = [];
for (var i = 0;i < arr.length;i++){
if (arr[i] != 0){
newArr[newArr.length] = arr[i];
}
console.log(newArr);
```
#### 数组排序：冒泡排序
冒泡排序：冒泡排序是一种简单的排序算法。==它重复地走访过要排序的数列，一次比较两个元素，如果他们的顺序措误就把他们交换过来==。走访数列的工作是重复地进行直到没有再需要交换，也就是说该数列已经排序完成。这个算法的名字由来是因为越小的元素会经由交换慢慢“浮到数列的顶端。
![](%E7%AC%AC%E5%9B%9B%E5%A4%A9%20%E6%95%B0%E7%BB%84/%E5%86%92%E6%B3%A1%E6%8E%92%E5%BA%8F.jpg)
```javascript
var arr=[5,4,3,2,1];
for(vari=g;i<=arr.1 ength-1;i++){//外层循环管趟数
    for(varj=g;j<=arr.length-i-1;j+){//里面的循环管每一趟的交换次数
//内部交换2个变量的值前一个和后面一个数组元素相比较
        if (arr[j] > arr[j+1]){
            var temp = arr[j];
            arr[j] = arr[j +1];
            arr[j + 1]temp;
        }
    }
}
```
#### 数组排序：
另一个案例
#### 二元数组：
还没有学

---

## 函数
一段可以被重复执行调用的代码块


---
#### 函数的使用
1. 声明函数
2. 调用函数
    
##### 1.声明函数
```javaScript
function 函数名(){
    //函数体
}
```
- function 声明白函数的关键字 全部小写
- 函数一般是做某件事，函数名的动词
- 函数自己不执行
  
##### 2.调用函数
```javaScript 
函数名();
```
---
#### 函数的封装
把一个或多个功能封成一个函数，对外只提供一个接口

#### 函数的参数
形参是用来接收实参的，==类似一个不用声明变量==
```javaScript 

function 函数名(形参1,形参2,...){   //在函数声明的小括号里的是形参
}

函数名(实参1,实参2,...);        //在函数调用的小括号里的是实参
```
#### 函数的形参和实参个数不匹配问题
1. 如果实参和形参的个数一致，则输出正常结果 (Java中正常，其他报错)
2. ==如果实参的个数多于形参，则多的部分不参与运算==
3. ==如果实参的个数少于形参，则形参会被定义为 undefined，返回Nan==(非数字)   

#### 函数的返回值
在声明时使用return 返回结果给执行函数的调用者
`函数名() = return 后面的结果`
详细的代码
```javascript
function 函数名(){
    //函数体
    return 需要返回的结果;
}

函数名();           //他的结果是return 后的数据
```
#### 案例：利用函数处理数组的最大值
```javascript
//利用函数求数组[5, 2, 99, 101, 67, 77]中的最大数值。
function getArrMax(arr){            //arr接受一个数组
var max = arr[0];
for (var i = 1;i <= arr.length;i++){
    if (arr[i] > max){
        max = arr[i];
        }
    }   
        return max;
getArrMax([5, 2, 99, 101, 67, 77]);      //实参是一个数组送过去
//或者是
var tr = getArrMax([5, 2, 99, 101, 67, 77]);
```
#### return注意事项
1. return 终止函数
return 后面的代码不会被执行，所以 return 的后面不写代码
2. return 只能返回一个值
如果 return 后面附带多个值，就只返回最后一个值
3. return 后可以返回数组(对象)，从而实现返回多个值
4. 如果函数没有写 return ，则返回 undefined 
 ---
#### 补充：break，continue，return 的区别
**break** : 结束当前的循环体（如for、while)
**continue** : 跳出本次循环，继续执行下次循环（如for、while)
**return** : 不仅可以退出循环，还能够返回return语句中的值，同时还可以结束当前的函数体内的代码
#### arguments 的使用（只有函数才有）
当我们不确定有多少个参数传递的时候，可以用==arguments==来获取。在JavaScript中，arguments实际上
它是当前函数的一个==内置对象==。所有函数都内置了一个arguments对象，arguments对象中==存储了传递的
所有实参==。
```javascript
//arguments的使用  每个函数都有的，也只有函数才有
function fn(){
console.log(arguments);//里面存储了所有传递过来的实参
console.log(arguments.length);
console.log(arguments[2]);
    for (var i=0;i<arguments.length;i+){
        console.log(arguments[i]);
    }
} 
fn(1, 2, 3);
fn(1, 2, 3, 5, 6, 7);
```
伪数组并不是真正意义上的数组
1. 具有数组的length属性
2. 按照索引的方式进行存储的
3. 它没有真正数组的一些方法pop()，push()等等
#### 函数之间可以互相调用

#### 函数的两种声明方式
1. 利用关键字来声明
`function fn(){ }`
2. ==函数表达式(匿名函数)==  **没有名字，名字是变量，并不是函数名**
  相当于变量里存了一个函数
`var 变量名 = function(){};`
调用：
`变量名(); `

---

## 作用域(对应Java的 成员变量 和 局部变量)
代码只能在某个范围内起作用和效果
目的：提高程序的可靠性，更重要的是减少命名冲突

---
#### Js的作用域(es6)之前：全局作用域 局部作用域
##### 全局作用域：整个Script标签 或者 一个单独的js文件
 全局变量：在全局作用域下的变量，在全局都可以使用
如果在函数内部的==没有声明，直接赋值的变量==是全局变量，即没有用 ==var== 声明的
`num2 =  20 ;`
函数的形参也是局部变量
#### 局部作用域(函数作用域)：在函数内部就是局部作用域，这个代码的名字只在函数内部起效果和作用的
 局部变量：在局部作用域下的变量，只能在函数内部使用(包括声明定义都在函数内部)
### 从执行效率来看
(1)全局变量只有浏览器关闭的时候才会销毁，比较占内存资源
(2)局部变量当我们程序执行完毕就会销毁，比较节约内存资源
### JavaScript目前没有块级作用域( 存疑？)
即写在if里的，仍然是全局变量
#### 作用域链 ==(就近原则)==
内部函数访问外部函数的变量，采取的是链式查找的方式(==就近原则==)


#### 作用域链案例：
```javascript
function f1(){
    var num = 123;

        function f2(){
        console.log(num);
        }
    f2()；
    }
var num = 456;
f1();                //123
```

#### 案例二：求在函数 fn3 中 a 与 b 的值
```javascript
var a = 1;
function fn1 (){
    var a = 2;
    var b = '22';
    fn2();
    function fn2 (){
    var a = 3;
    fn3();
        function fn3 (){
        var a = 4;
        conso1e.1og(a);
        conso1e.1og(b);
        }
    }
}

fn1();
```
**答案是 a = 4 , b = '22'**

---

## 对象
一组无序的属性和方法的集合 ，所有的事物都是对象，例如字符串，数值，数组，函数等
对象由**属性**和**方法**组成
属性：事物的特征，在对象中用属性来表示(常用名词)
方法：事物的行为，在对象中用方法来表示(常用动词)
#### 为什么需要对象
保存一个值时，可以使用变量，保存多个值（一组值）时，可以使用数组。如果要保存一个人的完整信息呢？
例如，将“张三疯”的个人的信息保存在数组中的方式为：
`var arr = [ 张三疯’，男'，128,1541];`
JS中的对象表达结构更清晰，更强大。张三疯的个人信息在对象中的表达结构如下：
```javascript
张三疯.姓名 = 张三疯”;          
张三疯·性别 = '男';
张三疯.年龄 = 128;
张三疯.身高= 154 ;

//代码:

person.name ='张三疯';
person.sex = '男';
person .age = 128;
person.height = 154 ;

```
#### 创建对象的三种方式
##### 利用**字面量**创建对象：
对象字面量：就是花括号{}里面包含了
```javascript
var obj = {
    uname:'张三疯',
    age: 18,
    sex: '男',
    sayhi:function(){
        console.log('hi~');
    }
}

```
注意事项：
1. 里面的属性或者方法我们采取键值对的形式 键 属性名 :值属性值
2. 多个属性或者方法中间用逗号隔开的
3. 方法冒号后面跟的是一个匿名函数
##### 利用new Object 来创建对象：
```javascript
var obj = new Object();
obj.uname = '';
obj.age = 18;
obj.sex = '';
obj.sayhi = function(){
    console.log('hi~');
}
```
注意事项：
1. 我们是利用 等号 = 赋值的方法 添加对象的属性和方法
2. 每个属性和方法之间用 分号结束

##### 利用构造函数创建对象
前面的两种方法一次只能创建一个对象
因此利用函数的方法来重复相同的代码 该函数称为 **构造函数**
构造函数 封装的是对象
```javascript
function 构造函数名(){
     this.属性 = 值;
     this.方法 =  function(){}
}
//使用
new 构造函数名(){

}
```
案例：
```javascript
function star(uname, age, sex) {
this.name = uname;
this .age = age;
this . sex = sex;
}
var ldh = new Star( '刘德华', 18，'男’);

```
注意事项：
1. 构造函数名字首字母要大写
2. 我们构造函数不需要return 就可以返回结果
3. 调用构造函数 必须使用 new
4. 属性和方法必须用this
##### new的执行过程
 1. new 在内存中创建了一个空的对象
 2. this 指向刚才的对象
 3. 执行构造函数里面的代码 给空对象添加属性和方法
 4. 返回这个对象


#### 对象的使用
调用对象的属性的两种方法：
**对象名.属性名**
`console.log(obj.uname);`
**对象名['属性名']**
`console.log(obj['age']);`
调用对象的方法：(方法名后加小括号)
`obj.sayhi();`

#### 变量,属性，函数，方法的区别
**变量和属性一样是用来存储数据的**
区别:
变量 单独声明并赋值 使用的时候直接写变量名 单独存在
属性 在对象里面的不需要声明的 使用的时候必须是 对象.属性

---

**函数和方法都是用来实现某种功能的**
区别：
函数是单独声明 并且调用的 函数名（）单独存在的
方法 在对象里面 调用的时候 对象.方法()

#### 遍历对象
for..in 遍历对象(也可以用来遍历对象的方法，一般是属性值)
`for (变量 in 对象){
    }`
案例：
```javascript
for (var k in obj){
    console.log(k);        //得到的是属性名
    console.log(obj.k);   // 得到的是属性值
}
```

---

## 预解析

```javascript
//1问
/console.log(num);      //报错
//2问
Iconsole.log(num)       //undefined 
var num = 10;
//3问
fn();
function fn(){
console.1og(11);
}
//4问
fun();/报错坑2
var fun = function(){
console.1og(22);}
```

JavaScript代码是由浏览器中的JavaScript解析器来执行的。JavaScript解析器在运行JavaScript代码的
时候分为两步：==预解析和代码执行==。
**js引擎会把  js里面所有的  var  还有  function  提升到当前作用域的最前面**
**代码执行   按照代码书写的顺序从上往下执行**
#### 预解析
变量预解析(变量提升)：把所有变量声明提升到当前作用域最前面 不提升赋值操作
函数预解析(函数提升)：把所有函数声明提升到当前作用域最前面(匿名表达式无法使用) 不调用函数
#### 案例：
**案例一：**
```javaScript
var num = 10;
fun();

function fun(){
    console.log(num);   //是多少？
    var num = 20;
}

///相当于下面
var num;

function fun(){
    var num;
    console.log(num);       //undefined
    num = 20;
}

num = 10;
fun();
```
**案例二：**
```javascript
var num = 10;

function fn(){
    console.log (num);      //这里是多少？  
    var num = 20;
    console.log (num);      //这里是多少？  
}

    fn();

/////相当于以下
var num = 10;
function fn(){
    var num;
    console.log (num);  
    num = 20;
    console.log (num);      
}
fn();
```
答案是 undefined 和 9

**经典案例：**
```javascript
f1();
console.log(c);
console.log(b);
console.log(a);
function f1() {
var a = b = c = 9;
// 实际上是 var a = 9 ; b = 9 ; c = 9; 后面有两个全局变量
console.log(a);             
console.log(b);
console.log(c);
}

```
答案是 ？  五个九和一个报错

---

## 内置对象
Javascript 中有三种对象，自定义对象，内置对象，**浏览器对象（js独有）**
内置对象就是指；语言白带的一些对象，这些对象供开发者使用，并提供了—些堂或本而必要能（属性和方法）
# 学会查文档!

#### Math 数学对象
他不是一个构造函数 不需要 new 来使用 直接使用就行了
属性： Math.PI 是圆周率
      Math.max(数值);  求最大值
```javascript
Math.PI             // 圆周率
Math.floor()        //向下取整
Math.ceil()          //向上取整
Math.round()         //四舍五入版 就近取整  注意 -3.5结果是-3  .5 往大的取
Math.abs()              //绝对值
Math.max() / Math.min()   // 求最大和最小值

```
**Math随机数方法**
random()  返回一个随机的小数 [0,1) 包括0 但不包括 1 
得到两个数的随机整数 并且包含这两个数
`Math.floor(Math.random() * (max - min + 1)) + min;`
封装：
```javascript
function getrandowint(min,max){
    return Math.floor(Math.random() * (max - min + 1)) + min; 
}
```
#### Date日期对象
date() 是一个构造函数 必须使用 new 来调用创建日期对象
1. 使用Date   如果没有参数，返回系统的当前时间
    var date = new Date();
    console.log(date);
2. 参数常用的写法 数字型 2022,10,01   或者是**字符串型 '2022-10-1 8:8:8'**
   var  date = new Date(2022,10,01);

##### 日期的格式化
![](%E7%AC%AC%E4%B8%83%E5%A4%A9%20%E7%BB%93%E5%B0%BE/%E6%97%A5%E6%9C%9F%E7%9A%84%E6%A0%BC%E5%BC%8F%E5%8C%96.png)
 
 **获得Date的毫秒数(时间戳)的四种方法 不是当前时间的毫秒数 而是距离1970年1月1日过了多少毫秒**

```
date.valuof();
date.gettime();
```
 **简单的写法：**
  `var date1 = +new Date();`
 ** H5 新增的总毫秒数：**
  `Date.now()`

**倒计时案例：**
```javascript
/*核心算法：输入的时间减去现在的时间就是剩余的时间，即倒计时，但是不能拿着时分秒相减，比如05分减去25分，结果会是负数的。
用时间戳来做。用户输入时间总的毫秒数减去现在时间的总的毫秒数，得到的就是剩余时
间的毫秒数。
把剩余时间总的毫秒数转换为天、时、分、秒（时间戳转换为时分秒）*/
d = parselnt(总秒数 / 60 / 60 / 24);      //计算天数
h = parselnt(总秒数 / 60 / 60 % 24)     //计算小时
m = parselnt(总秒数 / 60 % 60);         //计算分数
s = parselnt(总秒数 % 60);            // 计算当前秒数

//详细的代码

function countDown(time）{
var nowTime = +new Date(); // 返回的是当前时间总的毫秒数
var inputTime = +new Date(time); // 返回的是用户输入时间总的毫秒数
var times = (inputTime - nowTime) / 1000;//times是剩余时间总的秒数
var d = parseInt(times / 60 / 60 / 24); // 天
d = d < 10 ? '0' + d : d;
var h = parseInt(times / 60 / 60 % 24 );//时
h = h < 10 ? '0' + h : h;
var m = parseInt(times / 60 % 60);// 分
m = m < 10 ? '0' + m : m;
var s = parseInt(times % 60);// 当前的秒
s = s < 10 ? '0' + s : s;
return d + '天' + h + '时' + m + '分' + s + '秒';
}
console.log(countDown('2023-6-1 18:00:00'));
var date = new Date():
console.log(date);
```
#### 数组对象(Array)
**创建数组**
1. **利用new 处建数组**   
   `var arr = new Array();` 创建了一个空的数组
   `var arr = new Array(2);` 创建了一个长度为 2 的数组
   `var arr = new Array(2，3);` 创建了内容为[ 2 , 3 ]数组
2. 利用字面量创建数组
   `var arr = [];`
  ` var 数组名 = [' ',' ',' ',' '];`
  数据之间需要逗号分隔开，数组里面的数据称为数组元素。

**检测是否为数组的两种方法**
instanceof 运算符 用来判断对象类型
`arr instanceof Array`
Array.isArray(对象);  h5新增的

**添加或删除数组元素的方法**
1. push() 在数组末尾添加一个或多个数组元素 
    push 可以追加元素给数组
    push有返回值 返回的结果是新数组的长度
    push() 里直接写要添加的元素
2. unshift() 在数组前面添加一个或多个数组元素    
    同push相同，只是顺序不同
3. pop() 删除数组的最后一个元素 一次只能删除一个
    pop()里面不需要加参数 
    pop 返回值是被删除的元素
    原数组会发生变化
4. shift() 删除第一个 参考pop   

**添加或删除数组的案例：**

 ```javascript
 //有一个包含工资的数组[1500，12000, 2100, 1800]，要求把数组中工资超过2000的删除，剩余的放至新数组里面
var arr = [1500, 1200, 2000，2100, 1800];
var newArr = [];
for (var i = o; i < arr.length；i++）{
    if (arr[i] < 2000){
    // newArr[newArr.length] = arr[i];
        newArr.push(arr[i]);
    }
}
console.log(newArr);
```


**数组排序**
1. 翻转数组：数组名.reverse();
2. 冒泡排序：数组名：sort();
    直接使用sort会有问题
    数组名：sort(function(a,b){
        return a - b ; 升序排序
        return b - a ; 降序排序
    });

**数组索引**
`数组名.indexof(数组元素)  `
该方法会返回数组的索引号，多个就只返回第一个，如果搜索不到则返回 -1
`数组名.lastIndexof(数组元素)  `
与上面相同，前面是从前往后，last是从后往前

**数组去重案例**
目标：把旧数组里面不重复的元素选取出来放到新数组中，重复的元素只保留一个，放到新数组中去重。
**核心算法：我们遍历旧数组，然后拿着旧数组元素去查询新数组，如果该元素在新数组里面没有出现过，我们就添加，否则不添加。
我们怎么知道该元素没有存在？ 利用 新数组: indexOf(数组元素) 如果返回时 -1 就说明 新数组里面没有该元素**

```javascript
function unique(arr）{
    var newArr = [];
    for (var i = o; i < arr .length；i++）{
        if (newArr.indexOf(arr[i]) === -1）{
        newArr.push(arr[i])；
        }
    }
    return newArr；
}
var demo = unique(['c','b','s','c','e','a']);
```

**数组转换为字符串**
1. `数组名.toString();`
2. `数组名.join('分隔符');  `
   可以在 ( )中间，添加自己想要的分隔符号
   默认不加就是 ','

#### 字符串对象

**基本包装类型**：就是把 **简单数据类型** 包装成了 **复杂数据类型**

`var str = 'andy';`

实际上：

```javascript
var temp = new String ('andy');
str = temp;
temp = null;
```
**字符类型不可变：**
因为字符串不可变，所以不要大量拼接字符串

**根据字符返回索引位置**
`字符串名.indexof('查找的字符')  `
`字符串名.lastIndexof('查找的字符')`
**indexof('要查找的字符',[起始位置])**


**根据位置返回字符**
charAt(index); 根据位置返回字符 从零开始算
charCodeA(index); 返回相应索引号的字符ASCII的值 目的：判断用户按了哪一个键
字符串名[index] h5新增 有兼容性问题

**统计出现最多的字符**
```javascript
//核心算法：利用 charAt（）遍历这个字符串
//把每个字符都存储给对象，如果对象没有该属性，就为1，如果存在了就 +1
//遍历对象，得到最大值和该字符
var str = 'abcoefoxyozzopp';
var o = {};
for (var i = o; i < str.length；i++）{
    var chars = str.charAt(i); // chars 是 字符串的每一个字符
    if (o[chars]) { // o[chars] 得到的是属性值
    o[chars]++;
    } else {
        o[chars] = 1;
        }
}
// 2.遍历对象
var max = 0;
var ch = '';
for (var k in o) {
// k 得到是 属性名
// o[k] 得到的是属性值
if (o[k] > max）{
max = o[k];
ch = k;
}
console.log(max);
```
**o[chars]等效于 o.chars**

**字符串操作方法**

**concat(字符串1，字符串2，字符串3);      
相当于 + , + 更常用
substr(截取的起始位置,截取的个数);      
数组也有相同的方法**

slice(截取的起始位置,end);  截取到end的位置 end不取
substring(起始位置,end);    同上， 但不就是负值

**替换字符串和转换为数组**
replace('被替换的字符','替换的字符');  只会替换一次
split('分隔符');        字符串之间的分隔符            
toUpperCase();          转换为大写
toULowerCase();         转换为小写

---

#### JavaScript 简单类型和复杂类型
**简单类型(值类型)：**
string , number , booean , undefined , null

**null：**
如果有个变量以后打算存储对象，暂时没想好放什么 这个时候就给null
 
**堆栈空间分配区别 :**
1、栈（操作系统）：由操作系统自动分配释放存放函数的参数值、局部变量的值等。其操作方式类似于数据结构中的栈；
    
**==简单数据类型存放到栈里面==**
2、堆（操作系统）：存储复杂类型（对象)，一般由程序员分配释放，若程序员不释放，由垃圾回收机制回收。
**==复杂数据类型存放到堆里面==**

**简单类型：**
在栈里面开辟空间 直接存放数值，把变量名指向数值
**复杂类型：**
在==栈里面存放**指向堆**的相关地址(16进制的地址)==,真正的对象存放在==堆==里

**简单数据类型传参：**

将 **==值完全交给新变量==**，修改新的变量不会影响原有的变量

**复杂数据类型传参**
将 **==地址==** 交给新的参数，修改新的参数之后会导致原有的数据发生改变








 
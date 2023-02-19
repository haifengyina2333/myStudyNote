## 基础总结


#### 数据类型
1.类型
基本（值）类型
 `string` 任意字符串
 `number` 任意的数字
 `boolean` true/false
 `undefined` undefined
 `null` null

对象(引用)类型
 `Object`:任意对象
 `Function` **一种特别的对象**(可以执行)
 `Array`　一种特别的对象(有数值下标，内部数据是有序的)
2．判断
`typeof` 返回数据类型的 字符串表达
<!-- typeof 不能判断Object和null ， Object和Array -->
`instanceof` 判断对象的具体类型
`=== / ==` 只能直接判断null，undefined
```javascript
//1．基本
// typeof返回数据类型的字符串表达
var a
console.log(a, typeof a, typeof a='='undefined',a===undefined ) // undefined 'undefined' true true
console.log(undefined==='undefined')
a = 4
console.log(typeof a==='number')
a = 'atguigu'
console.log(typeof a==='string")
a = true
console.log(typeof a==="boolean')
a = null
console.log(typeof a, a===null) // 'object'
//2．对象
var b1 = {
b2: [1, 'abc', console.log],
b3: function () {
console.log("b3')
return function(){
    console.log('hello');
}
}
}
console.log(b1 instanceof Object, b1 instanceof Array) // true faLse
console.log(b1.b2 instanceof Array，b1.b2 instanceof Object) // true true
console.log(b1.b3 instanceof Function, b1.b3 instanceof Object) // true true
console.log(typeof b1.b3==='function'）// true
console.log(typeof b1.b2[2]==='function') // true
b1.b2[2](4) //可以执行 b2 的函数
b1.b3()(); //打印 hello
```
undefined 与nuLL 的区别?
undefined代表定义未赋值
null定义并赋值了，只是值为null

什么时候给变量赋值为nuLL呢?
初始赋值，表明将要赋值为对象
结束前， 进对象成为垃圾对象(被垃圾回收器回收)

#### 数据 变量 内存
什么是数据?
存储在内存中代表特定信息的'东东1，本质上是0101...
数据的特点：可传递，可运算 

什么是内存?
内存条通电后产生的可储存数据的临时空间
内存的产生和死亡：内存条(电路板)==>通电==>产生内存空间==>存储数据==>处理数据==>断电==>内存空间和数据消失
一块内存的数据：
1.内部存储的数据
2.地址值
内存的分类：
栈内存：全局变量、局部变量
堆内存：对象

什么是变量?
可变化的量，由变量名和变量值组成
每个变量都对应的一块小内存，变量名用来查找对应的内存

内存,数据,变量三者之间的关系
内存用来存储数据的空间
变量是内存的标识


**变量**
 地址，值，对象


**在js调用函数时传递变量参数时，是值传递(但有些是==基本数据类型（值）==，或者是==复杂数据类型（地址）==)**

**可能是 ==值传递（值）==和==引用传递（地址）==**


---

#### JS的内存管理

**内存的生命周期：**
分配小内存空间，得到使用权
存储数据，反复继续操作
释放小内存空间
**释放内存**
局部变量：函数执行完自动释放
对象：成为垃圾对象=>垃圾回收器回收

`function fn(){ var b = {} }   fn();`
b是直动释放，b所指向的对象是在后面的某个时刻由垃圾回收器回收
释放和回收 不一样

---


#### 对象
**什么是对象？**
多个数据的封装体
用来保存多个数据的容器
一个对象代表现实中的一个事物

**为什么要用对象？**
统一管理多个数据

**对象的组成**
属性：属性名（字符串）和属性值（任意）组成
方法：一种特别的属性（属性值是函数）（直接输出函数不带后面的括号，输出内容是函数本身）

**如何访问对象内部数据？**
`对象名·属性名` ：编码简单

`对象名['属性名']`：编码麻烦能通用
1. 属性名包含特殊字符,这种要使用 ` [' ']`
`p.content-type `
2. 属性名不确定
```javascript
var propName ='myAge';
var value = 18;
//p.propName = value ; //不能用
p[propName] = value;
console.log(p[propName]);
```

---

#### 函数
**什么是函数？**
实现特定功能的条语句的封装体
只有函数是可以执行的，其它类型的数据不能执行

**为什么要用函数？**
提高代码复用
便于阅读交流

**如何定义函数？**
函数声明
表达式

**如何调用（执行）函数？**
test():直接调用
obj.test() : 通过对象调用
new test():new调用
test.call / apply(obj): obj.test() 临时让test成为obj的方法进行调用
```javascript
var obj = {};
function test2(){
    this.xxx ='atguigu';
}

//obj.test2() 不能直接，根本就没有
test2.call(obj) //obj.test2()
console.log(obj.xxx) 可以让一个函数成为指定任意对象的方法进行调用
```

**回调函数**

**什么函数才是回调函数？**
你定义的
你没有调用
但最终它执行  

**常见的回调函数？**
dom事件回调函数
定时器回调函数

ajax请求回调函数（后面讲）
生命周期回调函数（后面讲）

#### IIFE (立即执行匿名函数)

全称：Immediately-Invoked Function Expression ==（立即执行函数）==
作用：
* 隐藏实现
* 不会污染外部（全局）命名空间
* 模块化
```javascript

(function(){//匿名函数自调用
    conso1e.log('…')
})();

```


#### this 的指向
**this是什么？**
任何函数本质上都是通过某个对象来调用，没有指定就是 window
所有函数内部都有一个变量 this
它的值是调用函数的当前对象

**如何确定this的值？**
test():window
p.test():p
new test():新创建的对象
p.call(obj):obj

#### 关于分号问题

js一条语句的后面可以不加分号
是否加分号是编码风落问题，「投有应该不应该，只有你自己喜欢不喜欢

**在下面2种情况下不丽分号会有问题：**
小括号开头的前一条语句
中方括号开头的前一条语句
解决办法：在行首加分号
强有力的例子：vue.js库

---

## 函数高级

#### 原型和原型链

**原型**
函数的prototype,属性（图）
每个函数都有一个prototype,属性，它==默认==指向一个 object 空对象（即称为：原型对象，也就没有自己写的属性）
原型对象中有一个属性 constructor,它指向构造函数
给原型对象添加属性（一般都是方法），可以给实例对象使用
作用：函数的所有实例对象自动拥有原型中的属性（方法）
```javascript
fun.prototype.test = function (){
    console.log('test()')
}

function fun (){

}

console.log(fun.prototype) //默认指向一个Object空对象（没有我们的属性）
```

```javascript
//原型对象中有一个属性constructor,.它指向构造函数
console.log(Date.prototype.constructor === Date)
```

**显式原型和隐式原型**
**每个==函数function==:都有一个prototype,即显式原型（属性）
每个==实例对象==都有一个__proto__，可称为隐式原型（属性）
对象的隐式原型的值为其对应构造函数的显式原型的值**
内存结构图
总结：
函数的加rototype.属性：在定义函数时自动添加的,默认值是一个空object 对象
对象的__proto__属性：创建对象时自动，添加的，默认值为构造函数的prototype,属性值
程序员能直接操作显式原型，但不能直接操作隐式原型(ES6之前)

**prototype** 函数function 显式原型
__proto__ 实例对象  隐式原型
`this.proto = Fn.prototype; `
本质是相同的，但使用的对象不同
![](%E5%8E%9F%E5%9E%8B.png)

**原型链---别名：隐式原型链（建议使用：使用Java的继承去理解）**
原型链（图解）:访问一个碰象的属性时，先在自身属性中查找，找到返回
如果没有，再==沿着` __proto__ `这条链向上查找==，找到返回
如果最终没找到，返回undefined
别名：隐式原型链
作用：==查找==对象的==属性==（方法）
函数 -> Function -> 空Object
![](%E5%8E%9F%E5%9E%8B%E9%93%BE.png)

f1->Foo实例对象->Foo构造函数（Object空对象）->Object原型 -> null
f1 是Foo的实例，Foo是Object的实例
foo >>>>Foo>>>>Function>>>>Object>>>>null

**instanceof (判断左边是不是右边的实例对象)**
```javascript
function Foo(){
var f1 new Foo();
}
console.log(f1 instanceof Foo) //true
console.log(f1 instanceof object); //true
console.log(Object instanceof Function)//true
console.log(Object instanceof Object)//true
console.log(Function instanceof Function)//true
console.log(Function instanceof object)//true
```
**例题**
```javascript
// 第一题
function A () {
}
A.prototype.n = 1;

var b = new A()

A.prototype = {
n:2,
m:3
}

var c = new A();
console.log(b.n, b.m, c.n, c.m)
// 1 undefined 2 3
// =-==================================================================
// 第二题
function F(){
    Object.prototype.a = function(){
        console.log('a()')
    }
    Function.prototype.b = function(){
        console.log('b()')
    }
}
var = new F();
f.a()   //OK
f.b()   //报错，上面已经是尽头了
F.a()   //OK
F.b()   //OK
```

#### 执行上下文与执行上下文栈
**变量提升与函数提升**
**变量声明提升**
通过var定义(声明)的变量，在定义语句之前就可以访问到
值：undefined

**函数声明提升**
通过function声明的函数，在之前就可以**直接调用**
值：函数定义(对象)

**注意：通过变量保存的函数不能使用**

```javascript
var a = 3
function fn () {
console.log(a)// undefined
var a = 4
}
```

**全局执行上下文**
1. 代码分类（位置）
全局代码
函数代码 
2. 全局执行上下文
>1. 在执行全局代码前将window确定为全局执行上下文
>
>2. 对全局数据进行预处理
>* var 定义的全局变量 ==> undefined，添加为window的属性
>* function 声明的全局函数 ==> 赋值（fun），添加为window的方法
>* this ==> 赋值(window)
>3. 开始执行全局代码


**函数执行上下文**
1. 在调用函数，准备执行函数体之前， 创建对应的函数执行上下文对象(虚拟的，存在于栈中)
2. 对局部数据进行预处理
* 形参变量 ==> 赋值（实参) ==>添加为执行上下文的属性
* arguments ==> 赋值（实参列表)，冻加为执行上下文的属性
* var定义的局部变量 ==> undefined, 添加为执行上下文的属性
* function声明的函数 ==> 赋值（fun)，添加为执行上下文的方法
* this ==>赋值(调用函数的对象)
3. 开始执行函数体代码


**执行上下文栈**
1. 在全局代码执行前,JS引擎就会创建一个栈来存储管理所有的执行上下文对象
2. 在全局执行上下文(window)确定后，将其添加到栈中(压栈)
3. 在函数执行上下文创建后,将其添加到栈中(压栈)
4. 在当前函数执行完后,将栈顶的对象移除(出栈)
5. 当**所有的代码执行完后，栈中只剩下 window**


**相当于执行一个函数，多一个执行上下文栈**


#### 作用域和作用域链
**理解：**
就是一块"地盘",一个代码段所在的区域
它是静态的(相对于上下文对象)，在编写代码时就确定了

**分类:**
全局作用域
函数作用域
没有块作用域(ES6有了)
```javascript
if(true) {
var c = 3
}
console.log(c)  //正常打印，代表无块作用域， es6 之前不存在
```

**作用:**
隔离变量，不同作用域下同名变量不会有冲突

```javascript
var x = 10;
function fn() {
    console.log(x);
    }
function show(f) {
    var x = 20;
    fn();
}

show(fn);   //打印 10


var fn = function(){
        console.log(fn)
    }
fn()     、//打印函数自己
var obj = {
    fn2:function
    console.log(fn2)
}
obj.fn2()      //报错 ，要改成 this.fn2
```



#### 闭包函数

`for (var i = 0, Length = btns.length ; i < Length ; i++) {   }`    for的一个性能优化


**如何产生闭包?**
当一个嵌套的内部(一)函厂嵌套的外部(文)函数的变量（函数)时，就产生了闭包

**闭包到底是什么?**
* 使用chrome 调试查看
* 理解一：闭包是嵌套的内部函数(绝大部分人)
* 理解二：包含被引用变量(函数)的对象（极少数人）
* 注意： 闭包存在于嵌套的内部函数中
**产生闭包的条件?**
* 函数嵌套
* 内部函数引用了外部函数的数据（变量/函数）
* 执行外部函数，执行内部函数定义
* 每执行一次外部函数，就产生了一个新闭包


**常见的闭包**
```javascript 
// 1.将函数作为另一个函数的返回值，局部变量可以得到保留
function fn1() {
    var a = 2
    function fn2() {
    a++
    console.log(a)
    }
return fn2
var f = fn1()
f() //3
f() //4

//=================================================

//2.将函数作为实参传递给另一个函数调用
function showDeLay(msg, time) {
    setTimeout(function () {
        alert(msg)
    },time)
}
showDelay( 'atguigu', 2000)
```

**闭包的作用**
**使用函数内部的变量在函数执行完后，仍然存活在内存中（延长了局部变量的生命周期)
让函数外部可以操作(读写)到函数内部的数据(变量/函数）**

**问题：**
1. 函数执行完后，函数内部声明的局部变量是否还存在?
    一般是不存在，存在于闭包中的变量才可能存在
2. 在函数外部能直接访问函数内部的局部变量吗?
    不能，但我们可以通过闭包让外部操作它

**闭包的生命周期：**
**产生：在嵌套内部函数定义执行完时就产生了（不是在调用）**
**死亡：在嵌套的内部函数成为垃圾对象时**

```javascript 
// 1.将函数作为另一个函数的返回值，局部变量可以得到保留
function fn1() {
    //闭包已经产生了 
    var a = 2
    function fn2() {
    a++
    console.log(a)
    }
return fn2
var f = fn1()
f() //3
f = null  //闭包死亡
```


**JS模块：**

**概念：**
具有特定功能的js文件
将所有的数据和功能都封装在一个函数内部(私有的)
只向外暴露一个包信n个方法的对象或函数
模块的使用者，只需要通过模块暴露的对象调用方法来实现对应的功能

**参考代码：**
```javascript
//方法一：
function myModule(){
//私有数据
    var msg = "My atguigu'
//操作数据的函数
    function doSomething() {
        console.log('doSomething() '+msg.tol
    }
    function dootherthing () {
        console.log('dootherthing() '+msg.t/
    }
//向外暴露对象(给外部使用的方法)
    return {
        dosomething: doSomething,
        dootherthing: dootherthing
    }
}
//使用：
var f = myModule()
f.dosomething()
//方法二；通过匿名函数，将函数添加到 window 对象中去
```

**闭包的缺点：**

* 函数执行完后，函数内的局部变量没有释放，占用内存时间会变长
* 容易造成内存泄露
  
>**解决方法：** 
>* 能不用闭包就不用
>* 及时释放

#### 内存溢出和内存泄漏：

**内存溢出：**
当程序运行需要的内存超过了剩余的内存时，就出抛出内存溢出的错误

**内存泄漏：**
* 占用的内存没有及时释放
* 内存泄露积累多了就容易导致内存溢出
> **常见的内存泄露:**
>* 意外的全局变量
>* 没有及时清理的计时器或回调函数
>* 闭包

#### 闭包测试题
```javascript
var name = "The Window"
var object = {
    name : "My Object",
    getNameFunc : function(){
        return function(){
            return this.name
        }   
    }
}
alert(object.getNameFunc()());  //The Window

//==================================================================
var name2 = "The Window";
var object2 = {
    name2 : "My Object",
    getNameFunc : function(){
    var that = this;
        return function(){
            return that.name2;
        }
    }
}
alert(object2.getNameFunc()()); // my object


//====================================================================
//题目三：
tunction fun(n,o) {
console.log(o)
    return {
        fun:function(m){
        return fun(m,n);
        }
    }
}
var a = fun(o); a.fun(1); a.fun(2); a.fun(3);  //undefined, ?, ?, ?
var b = fun(o).fun(1).fun(2).fun(3);    //undefined, ?, ?, ?
var c = fun(o).fun(1); C.fun(2); C.fun(3);  //undefined, ?, ?, ?
```

## 对象高级

#### 创建对象的方式

**方式一: Object构造函数模式**
* 套路:先创建空Object对象，再动态添加属性/方法
* 适用场景：起始时不确定对象内部数据
* 问题: **语句太多**
```javascript
var p = new Object()
p.name = 'om'
p.age = 12
p.setName = function (name) {
this.name = name
}
//使用；
p.setName('hello')
```

**方式二：对象字面量模式**
* 套路：使用{}}创建对象，同时指定属性/方法
* 适用场景：起始时对象内部数据是确定的
* 问题：如果**创建多个对象，有重复代码**
```javascript
var p = {
    name: 'Tom',
    age: 12,
    setName: function (name) {
        this.name = name
    }
}
//使用：
p.setName('hello')
```

**方式三：工厂模式**
* 套路：通过工厂函数动态创建对象并返回
* 适用场景: 需要创建多个对象
* 问题: **对象没有一个具体的类型**，都是Object类型
```javascript
function createPerson(name,age) {  //返回一个对象的函数===>工厂函数
    var obj = {
    name: name,
    age: age,
        setName: function (name) {
        this.name = name
        }
    }
    return obj
}
//使用：
var p1 = createPerson('Tom', 12);
```

**方式四：自定义构造函数模式**
* 套路：自定义构造函数，通过new创建对象
* 适用场景：需要创建多个类型确定的对象
* 问题: 每个对象都有相同的数据，浪费内存
```javascript
function Person(name, age) {
    this.name = name
    this.age = age
    this.setName = function (name) {
    this.name = name
    }
    // 按下面这么写，这样可以节约内存
    // Person.prototype.setName = function (name) {
    // this.name = namer
    // }
}
//使用：
var p1 = new Person('张先生',12)
p1.setName('周先生')
```

#### 继承

**方式1：原型链继承：**

**1.套路**
1. 定义父类型构造函数
2. 给父类型的原型添加方法
3. 定义子类型的构造函数
4. 创建父类型的对象赋值给了类型的原型
5. 将子类型原型的构造属性设置为子类型
6. 给子类型原型添加方法
7. 创建一类型的对象：可以调历父类型的方法
   
**2．关键**
1.子类型的原型为父类型的一个实例对象

```javascript
// 父类型
function Supper(){
    this.supProp = 'Supper property'
}
Supper.prototype.showSupperProp = function () {
    console.log(this.supProp)
}
//子类型
function Sub(){
    this.subProp = 'Sub property'
}

// 关键语句
Sub.prototype = new Supper ()
// 将Sub的原型对象变成 Supper 的实例化对象，就可以调用 Supper 的方法

Sub.prototype.showSubProp = function () {
    console.log(this.subProp)
}
var sub = new Sub()
sub.showSupperProp()   
sub.showSubProp()      //如何通过此语句调用父类型的同名方法
```
![](%E5%8E%9F%E5%9E%8B%E9%93%BE%E7%BB%A7%E6%89%BF.png)

**问题：**
```javascript
// 父类型
function Supper(){
    this.supProp = 'Supper property'
}
Supper.prototype.showSupperProp = function () {
    console.log(this.supProp)
}
//子类型
function Sub(){
    this.subProp = 'Sub property'
}

// 关键语句
Sub.prototype = new Supper ()
// 将Sub的原型对象变成 Supper 的实例化对象，就可以调用 Supper 的方法

// construtor 属性会变成 Supper ，下面是解决问题的方法
Sub.prototype.construtor = Sub


Sub.prototype.showSubProp = function () {
    console.log(this.subProp)
}
var sub = new Sub()
sub.showSupperProp()   
sub.showSubProp()      //如何通过此语句调用父类型的同名方法
```

**方法2：借用构造函数继承(假的)**
**1.套路：**
1. 定义父类型构造函数
2. 定义子类型构造函数
3. 在子类型构造函数中调用父类型构造
   
**2.关键：**
1. 在子类型构造函数中通用super()调用父类型构造函数
```javascript
function Person(name, age) {
    this.name = name
    this.age = age
}
function student(name, age, price) {
    Person.call(this, name, age) //相当于：this.Person(name, age)
    /*this.name = name
    this.age = age*/
    this.price = price
}
var s = new Student('Tom', 20, 14000)
console.log(s.name, s.age, s.price)
```



**组合继承：原型链+借用构造函数的组合继承**
1. 利用原型链实现对父类型对象的方法继承
2. 利用super()借用父类型构建函数初始化相同属性

```javascript 
function Person(name, age) {
    this.name = name
    this.age = age
}

Person.prototype.setName = function (name) {
    this.name = name
}   

function Student(name, age, price) {
    Person.call(this, name, age) // 为了得到属性 相当于 this.Person(name, age)
    this.price = price
}

Student.prototype = new Person() // 为了能看到父类型的方法
Student.prototype.constructor = Student //修正constructor属性

Student.prototype.setPrice = function (price) {
    this.price = price
} 
var s = new student('Tom', 24, 15000)
s.setName('Bob')
s.setPrice(16000)
console.log(s.name, s.age, s.price)
```

## 线程机制与事件机制

#### 进程和线程：

**进程(process)**
>程序的一次执行，它占有一片独有的内存空间
>可以通过 windows 任务管理器查看进程

**线程(thread)**
>是进程内的一个独立执行单元
>是程序执行的一个完整流程
>是CPU的最小的调度单元

**图解：**

>![](%E8%BF%9B%E7%A8%8B%E5%92%8C%E7%BA%BF%E7%A8%8B.png)

**其他问题：**
>应用程序必须运行在某个进程的某个线程上
>一个进程中至少有一个运行的线程:主线程，进程启动后自动创建
>一个进程中也可以同时运行多个线程，我们会说程序是多线程运行的
>**一个进程内的数据可以供其中的多个线程直接共享**
>**多个进程之间的数据是不能直接共享的**
>**线程池(thread pool):** 保存多个线程对象的容器，实现线程对象的反复利用

**多线程和单线程的区别：**

**多线程**
优点：
>能有效提升CPU的利用率
>创建多线程开销

缺点：
>线程间切换开销
>死锁与状态同步问题

**单线程**
优点；
>顺序编程简单易懂

缺点:
>效率低

**js是单线程运行的,但使用H5中的Web Workers可以多线程运行**
**浏览器运行都是多线程运行的**

**单进程:firefox,老版IE
多进程:chrome,新版 IE**


#### 浏览器内核：支撑浏览器运行的最核心的程序

**不同浏览器的内核是不同的:**
>Chrome, Safari :webkit
firefox : Gecko
IE:Trident
>360,搜狗等国内浏览器：Trident + webkit

**内核由很多模块组成:**
**主线程**
>js引擎模块∶负责js程序的编译与运行
html,css文档解析模块：负责页面文本的解析
DOM/CSS模块：负责dom/css在内存中的相关处理
布局和渲染模块∶负责页面的布局和效果的绘制（内存中的对象）
...

**分线程**
>定时器模块：负责定时器的管理
DOM事件响应模块：负责事件的管理
网络请求模块：负责 ajax 请求

#### 定时器的思考：
定时器真是定时执行的吗?
* 定时器并不能保证真正定时执行
```javascript
var start = Date.now()
console.log('启动定时器前... ')
setTimeout(function () {
console.log('定时器执行了'，Date.now()-start)
},200)
console.log('启动定时器后...' )
// 延迟 1 ~ 3 ms
// 做一个长时间的工作之后,会导致定时器的延迟增大非常多
```
* 一般会延迟一丁点(可以接受),**也有可能延迟很长时间(不能接受)**

* 定时器回调函数是在主线程执行的，js是单线程的
 
**定时器是通过事件循环模型实现的**

**js是单线程执行的:**
`alert()` 会直接暂停 js 主线程的执行,会导致定时器不计时

1. 如何证明is执行是单线程的?
* `setTimeout()` 的回调函数是在主线程执行的
* **定时器回调函数**只有在运行栈中的代码全部执行完后才有可能执行
  

2. 为什么is要用单线程模式，而不用多线程模式
* JavaScript 的单线程，与它的用途有关。
* 作为浏览器脚本语言，JavaScript 的主要用途是与用户互动，以及操作DOM。
* 这决定了它只能是单线程，否则会带来很复杂的同步问题


3. 代码的分类：(**同步与异步**)
* 初始化代码
* 回调代码


4. js引擎执行代码的基本流程
* 先执行初始化代码: 包含一些特别的代码 (异步执行)
* 设置定时器
* 绑定监听
* 发送 ajax 请求
* 后面在某个时刻才会执行回调代码

#### 事件循环模型(同步与异步)

**所有代码分类**
* 初始化执行代码(同步代码)：包含绑定dom事件监听，设置定时器，发送ajax请求的代码
* 回调执行代码（异步代码)：处理回调逻辑
  
**js引擎执行代码的基本流程:**
* 初始化代码===>回调代码
  
**模型的2个重要组成部分：**
* 事件管理(Dom,定时器,ajax)模块
* 回调队列
  
**模型的运转流程**
* 执行初始化代码，将事件回调函数交给对应模块管理
* 当事件发生时，管理模块会将回调函数及其数据添加到回调列队中
* 只有当初始化代码执行完后（可能要一定时间)，才会遍历读取回调队列中的回调函数执行
![](js%E6%89%A7%E8%A1%8C%E6%9C%BA%E5%88%B6.png)


## H5 Web Workers 多线程

**H5规范提供Jjs分线程的实现，取名为: Web Workers**

**相关API**
* Worker：构造函数,加载分线程执行的js文件
* worker.prototype.onmessage：用于接收另一个线程的回调函数
* Worker.prototype.postMessage: 向另一个线程发送消息
**不足**
* worker内代码不能操作DOM（更新UI) ( Window 不是 分线程 的全局对象)
* 不能跨域加载JS
* 不是每个浏览器都支持这个新特性
* 稍微慢一些 ( 相比较来说,比主线程慢，但不会导致主线程被冻结 )


**使用：**
```javascript
// 主线程代码
// 创建一个 Worker 对象
var worker = new Worker(' ')

// 绑定接收消息的监听
worker.onmessage = function (event) {
    console.log('主线程接收分线程返回的数据')
    alert(event.data)
}
// 向分线程发送消息
worker.postMessage(number)


// 分线程代码
//  Window 不是 分线程 的全局对象
var onmessage = function (event) {
var number = event.data
console.log('分线程接收到主线程发送的数据：' + number)
//计算
var result = fibonacci(number)
postMessage(result)
console.log('分线程向主线程返回数据：' + result)
}

```














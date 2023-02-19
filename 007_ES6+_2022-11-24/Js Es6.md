##　ES
ES ：全称（ EcmaScript ） ，是脚本语言的规范，而平时经常编写的 **JavaScript,是EcmaScript的一种实现**，所以 ==ES新特性其实指的就是JavaScript的新特性==

## ES 6 

####　为什么要学习 ES 6 
ES6 的版本变动内容最多，具有里程碑意义
ES6 加入许多新的语法特性，编程实现更简 单、高效
ES6 是前端发展趋势，就业必备技能

#### Let 关键字

```javascript
let a;
let a,b,c;
let e = 100;
let f = 521,

// 1.变量不能重复声明

let star = '你好';
let star = '再见';

// 2. 块级作用域 全局,函数,eval 
// if else while for 
{
    let girl = '冰冰';
}
// 3.不存在变量提升
console.log(kkk);
let kkk = 123;

// 4.不影响作用域链

// 案例：
let items = document.getElementsByClassName('item');
//遍历并绑定事件
for(var i = ;i < items.length;i++){
    items[i].onclick = function(){
    //修改当前元素的背景颜色
    // this.style.background = 'pink';  如果改成下面的
        items[i].style.background = 'pink';
    }
}
// 报错

for(let i = ;i < items.length;i++){
    items[i].onclick = function(){
    //修改当前元素的背景颜色
    // this.style.background = 'pink';
        items[i].style.background = 'pink';
    }
}

// 正常
```

#### const 

```javascript
const School = '监狱';

// 1.一定要赋初始值
const A ;

// 2.一般常量要大写（潜规则）

const a = 'hello';

//3．常量的值不能修改

School = '假的';

///4．块儿级作用域

{
const PLAYER = 'UZI';
}
console.log(PLAYER);

//5.对于数组和对象的元素修改，不算做对常量的修改，不会报错

const TEAM = ['UZI','MXLG','Ming','Letme'];
// TEAM.push('Meiko');
TEAM = 123; 

// 这样会报错
``` 


#### 变量的解构赋值
**ES6 允许按照一定模式从数组和对象中提取值，对变量进行赋值**
这被称为解构赋值

```javascript 
// 1.数组的方式
const F4 = ['小沈阳','刘能','赵四','宋小宝'];
let [xiao, liu,zhao, song] = F4;
console.log(xiao);
console.log(liu);
console.log(zhao);
console.log(song);

//2．对象的解构
const zhao = {
    name: '赵本山',
    age:'不详',
    xiaopin: function(){
        console.log("我可以演小品”);
    }
};
let {name, age, xiaopin}= zhao;
console.log(name);
console.log(age);
console.log(xiaopin);
xiaopin();
```

#### 模板字符串

Es6 引入了新的声明字符串的方式 `` '' " "

```JavaScript
// 1.声明
let str = ` 我是大监狱 `;

//2．内容中可以直接出现换行符
let str =`<ul>
            <li>沈腾</li>
            <li>玛丽</li>
            <li>魏翔</li>
            <li>艾伦</li>
        </ul>;`


//3．变量拼接
let lovest ='魏翔'：
let out = ` $[lovest}是我心目中最搞笑的演员!! `;
console.log(out);

```

#### Es 6 的简化对象写法
ES6 允许在大括号里面，直接写入变量和函数，作为对象的属性和方法。
这样的书写更加简洁
```javascript

let name ='boy';
let change = function(){
console.log('我们可以改变你！！');

const school = {
    name,
    // name:name;
    change,
    improve(){
        console.log("我们可以提高你的技能");
    }
}

```

#### 箭头函数
**ES6 允许使用「箭头」（=>）定义函数。**

```javascript
let fn = function(){ ... }


let fn = (a,b）=> { ... }

//1. this 是静态的. this 始终指向函数声明时所在作用域下的 this 的值
function getName(){
    console.log(this.name);
}
let getName2 = () => {
    console.log(this.name);
}
//设置 window 对象的 name 属性
window.name = '你好';
const school = {}
    name: "ATGUIGU"
}
//直接调用
// getName
// getName2();
//call 方法调用
getName.call(school);    // ATGUIGU
getName2.call(school);      //你好

// 2.不能作为构造函数的实例化对象

let Person = (name,age) => {
this.name = name;
this.age = agw;
}
let me = new Person('xiao',30);
console.log(me);
// 会报错


//3．不能使用 arguments 变量
let fn = () => {
    console.log(arguments);
}
fn(1,2,3);

// 4.箭头函数的简写

//1.省略小括号，当形参只有一个的时候
let add = n => {
    return n + n;
}

//2) 省略花括号，当代码体只有一条语句的时候，此时 return 必须省
// 而且语句的执行结果就是函数的返回值
let pow = (n) => n * n;
console.log(pow(9); //81

//需求-1 点击 div 2s 后颜色变成『粉色』
//获取元素
let ad = document.getElementById('ad');
//绑定事件
ad.addEventListener("click", function(){
    //保存 this 的值
    //-let  this·=·this;
    //定时器
    setTimeout(() =>{
    //修改背景颜色-this
    // console.log(this);
    // _this.style.background = 'pink';
        this.style.background = 'pink';
    },2000);
});




//需求-2 从数组中返回偶数的元素
const arr = [1,6,9,10,100,25];
const result = arr.filter(function(item){
    if(item % 2 === 0){
        return true;
    }else{
        return false;
        }
}
// 上面和下面的效果是一样的
const result = arr.filter(item => item % 2 === 0)

// 箭头函数适合与 this 无关的回调．定时器，数组的方法回调
// 箭头函数不适合与 this 有关的回调． 事件回调，对象的方法
```

#### 函数参数的默认值
```javascript
// ES6 允许给函数参数赋初始值

// 1.形参初始值 具有默认值的参数,一般位置要靠后(潜规则)
function add(a = 2, b = 3, c = 4){
    return c;
}

// 2.默认值可以和 结构赋值 来使用
function connect({host="127.0.0.1", username,password, port}){
    console.log(host)
    console.log(username)
    console.log(password)
    console.log(port)
}
connect({
    host: 'localhost'.
    username: 'root'
    password: 'root',
    port:3306
})
```

#### rest 参数
ES6 引入 rest 参数，用于获取函数的实参，用来代替 ` arguments`

`...args`

```javascript

// ES5 获取实参的方式
function date(){
console.log(arguments);
}
date('白芷','阿娇','思慧');


// ES6 rest 参数
function date(...args){
console.log(args);
}
// rest 参数 必须放到最后
function fn(a,b,...args){
console.log(a);
console.log(b);
console.log(args);
}
fn(1,2,3,4,5,6);

```


#### 扩展运算符

`... `扩展运算符能将『数组』转换为逗号分隔的『参数序列』
```JavaScript

// 『...』 扩展运算符能将『数组』转换为逗号分隔的『参数序列』
//声明一个数组 ...
const tfboys = ['易烊千玺'，'王源'，'王俊凯'];
// =〉'易烊千玺'，'王源'，'王俊凯'
// 声明一个函数
function chunwan(){
    console.log(arguments);
}
chunwan(...tfboys);    //相当于  chunwan('易烊千玺'，'王源'，王俊凯'）


//1．数组的合并 情圣 误杀 唐探
const kuaizi =['王太利','肖央'];
const fenghuang = ['曾毅','玲花'];
// const zuixuanxiaopingguo = kuaizi.concat(fenghuang);
const zuixuanxiaopingguo = [...kuaizi, ...fenghuang];

//2．数组的克隆
const sanzhihua = ['E','G','M'];
const sanyecao = [...sanzhihua];
console.log(sanyecao);

//3．将伪数组转为真正的数组
const divs = document.querySelectorAll('div');
const divArr = [...divs]:
console.log(divArr):

```


#### Symbol 
ES6 引入了一种新的原始数据类型 Symbol，表示独一无二的值。它是JavaScript 语言的第七种数据类型，是一种类似于字符串的数据类型。

**Symbol特点:**
1. Symbol的值是唯一的，用来解决命名冲突的问题
2. ==Symbol值不能与其他数据进行运算==
3. Symbol定义的对象属性不能使用 for..in 循环遍历，但是可以使用` Reflect.ownKeys `来获取对象的所有键名

**创建Symbol**

```JavaScript
let s = Symbol(); 
let s2 = Symbol('尚硅谷');
let s3 = Symbol('尚硅谷');
console.log(s2 === s3);  //false
// 括号的内容 只是一个标识符

// Symbol.for 创建
let s4 = Symbol.for();

let s4 = Symbol.for('尚硅谷');
let s5 = Symbol.for('尚硅谷');
console.log(s4 === s5);  //true
```
**Symbol的使用**

```JavaScript
 //向对象中添加方法 up down
  let game = {
    name:'俄罗斯方块',
    up: function(){},
    down: function(){}
  };
  // 声明一个对象
  let methods = {
    up: Symbol(),
    down: Symbol()
  };
  game[methods.up] = function(){
    console.log("我可以改变形状");
  }
  game[methods.down] = function(){
    console.log("我可以快速下降!!");
  }
game[methods.up]();


//=======================================================================================

let youxi = {
    name:"狼人杀",
    [Symbol.for('say')]: function(){
      console.log("我可以发言")
    },
    [Symbol.for('zibao')]: function(){
      console.log('我可以自爆');
    }
  }
  console.log(youxi);
  //Symbol.for('say')产生的标识是唯一的，所以可以调用定义在youxi里面的[Symbol.for('say')]方法
  youxi[Symbol.for('say')]();

```

**Symbol的内置属性**
```JavaScript
class Personi
static [Symbol.hasInstance](param){
    console.log(param);
    console.log("我被用来检测类型了
    return false;
}

let = o;
console.log(o instanceof Person);
//  相当于执行上面的语句的同时,也执行了 static 里面的代码
```
 
####　迭代器
迭代器（Iterator）是一种接口，为各种不同的数据结构提供统一的访问机制。
任何数据结构只要部署Iterator接口，就可以完成遍历操作。
1. ES6创造了一种新的遍历命令for.of循环，Iterator接口主要供for..of消费
2. 原生具备iterator接口的数据(可用for of遍历)
 ` Array , Arguments , Set , Map , String , TypedArray , NodeList` 
3. 工作原理
a) 创建一个指针对象，指向当前数据结构的起始位置
b) 第一次调用对象的next方法，指针自动指向数据结构的第一个成员
c) 接下来不断调用next方法，指针一直往后移动，直到指向最后一个成员
d)每调用next方法返回一个包含value和don萎属性的对象

**需要自定义遍历数据的时候，要想到迭代器。**

```javascript
//声明一个数组
const xiyou = ['唐僧','孙悟空','猪八戒','沙僧'];
//使用 for...of 遍历数组
for(let v of xiyou){
    console.log(v);
    // '唐僧','孙悟空','猪八戒','沙僧'
}
for(let v in xiyou){
    console.log(v);
    // 0 , 1 , 2 , 3
```

**迭代器的应用:自定义迭代器**

```javascript
const banji = {
    name: "终极一班”,
    stus:[
    'xiaoming',
    'xiaoning',
    'xiaotian',
    'knigh'
    ],
    [Symbol.iterator](){
        //索引变量
        let index = 0;
        let _this = this;
        return {
            next: function(){
                if(index< _this.stus.length){
                    const result = { value:_this.stus[index], done: false}
                    //下标自增
                    index++;
                     //返回结果
                    return result;            
                }else{
                 return {value: undefined, done: true};
                }
            }
        };

        for(let v of banji）{
            console.log(v);
        }

```


####　生成器
**生成器就是一个特殊的函数** ,用来进行异步编程 
` * `
` yield `相当于代码的分隔符
```javascript

function * gen(){
    yield '一只没有耳朵';
    yield '一只没有尾部';
    yield '真奇怪';
}
let iterator = gen(); 
iterator.next(); //执行


// ===================================================================


function gen(){
    console.log(111);
    yield ' 一只没有耳朵';
    console.1og(222);
    yield '一只没有尾部';
    console.log(333);
    yield ' 真奇怪';
    console.1og(444);
}


let iterator =  gen();
iterator.next();    //111  一只没有耳朵
iterator.next();    //222  一只没有尾部
iterator.next();    //333 真奇怪
iterator.next();    //444
// 相当于执行到 yield 就停止

//遍历
for(let v of gen()){
    console.log(v);
}

// 传递参数


function * gen(){
    yield 111;
    yield 222;
    yield 333;
}
//执行获取迭代器对象
let iterator gen();
console.log(iterator.next());
console.log(iterator.next());
console.log(iterator.next());


//
function * gen(arg){
console.log(arg);

let one = yield 111;    //BBB
console.log(one);

let two = yield 222;    //CCC
console.log(two);

let three = yield 333;  //DDD
console.log(three);
}
//执行获取迭代器对象
let iterator gen('AAA');
console.log(iterator.next());   // AAA
//next方法可以传入实参
console.log(iterator.next('BBB'));
console.log(iterator.next('CCC'));
console.log(iterator.next('DDD'));
``` 

**生成器函数实例**
```javascript
// 1s·后控制台输出·111··2s后输出·222··3s后输出·333
// 下面这种被称为 回调地狱
setTimeout(()=>{
    console.log(111);
    setTimeout(()=>{
        console.1og(222);
        setTimeout(()=>{
            console.log(333);
        },3000);
    },2000);
},1000);

// ===============================================================

function one(){
    setTimeout(()=>{
        console.log(111);
        iterator.next();
    },1000)
}

function two(){
    setTimeout(()=>{
        console.log(222);
        iterator.next();
    },2000)
}

function three(){
    setTimeout(()=>{
        console.log(333);
        iterator.next();
    },3000)
}

function * gen(){
    yield one();
    yield two();
    yield three();
}
let iterator = gen();
iterator.next();

```

#### Promise 
具体自己去百度一下
```javascript
//实例化Promise对象
const p = new Promise(function(resolve,reject){ //resolve 成功  reject 失败 
setTimeout(function(){
//let data='数据库中的用户数据'；
//resolve
//resolve(data);
 let err='数据读取失败';
reject(err);
},1000);
});
//调用promise对象的then方法

p.then(function(value){
    console.log(value);
    },function(reason){
    console.error(reason);
});
```

**then方法**
```javascript

```


#### Set 集合
ES6提供了新的数据结构Set(集合)。它类似于数组，但成员的值都是唯一的，集合实现了iterator接口，所以可以使用「扩展运算符」和「for.of.」进行遍历，集合的属性和方法：
```javascript
//声明一个set
let s =  new Set();
let s2 = new Set(['大事儿','小事儿','好事儿','坏事儿','小事儿']);
// 会自动去重

//元素个数
console.log(s2.size);
//添加新的元素
s2.add('喜事儿')；
//删除元素
s2.delete('坏事儿')
//检测
conso1e.1og(s2.has('糟心事')；
//清空
s2.c1ear();
console.log(s2);



1et arr=[1,2,3,4,5,4,3,2,1];
//1.数组去重
let result [...new Set(arr)];
console.log(result);
//2.交集
1et arr2=[4,5,6,5,6]
let result [...new Set(arr)].filter(item =>{
    let s2 new Set(arr2);//4 5 6
    if(s2.has(item)){
        return true;
    }else{
        return false;
    }
});

// let result [...new Set(arr)].filter(item =new-Set(arr2).has(item)); 

//3.并集
let union = [...new Set([...arr,...arr2])];
console.log(union);

//4.差集
let diff [...new Set(arr)].filter(item =>!(new Set(arr2).has(item)));
console.log(diff);
```

#### Map 
ES6提供了Map数据结构。它类似于对象，也是键值对的集合。但是“键”的范围不限于字符串，各种类型的值（包括对象）都可以当作键。Map也实现了iterator接口，所以可以使用『扩展运算符」和「for.of』进行遍历。Map的属性和方法：
1) size 返回Map的元素个数
2) set 增加一个新元素，返回当前Map
3) get 返回键名对象的键值
4) has 检测Map中是否包含某个元素，返回boolean值
5) clear 清空集合，返回undefined

```javascript
//声明Map
let m new Map();
//添加元素
m.set('name','尚硅谷');
m.set('change',function(){
console.1og("我们可以改变你！！");
});
let key = { school : 'ATGUIGU'
};
m.set(key,['北京','上海','深圳']);


//size
console.log(m.size);

//删除
m.delete('name');

//获取
console.1og(m.get('change'));
console.log(m.get(key));

//清空
m.clear();

//遍历
for(let v of m){
console.log(v);
}
```

#### class 类
Es6提供了更接近传统语言的写法，引入了Class(类)这个概念，作为对象的模板。通过class关键字，可以定义类。基本上，ES6的class可以看作只是一个语法糖，它的绝大部分功能，ES5都可以做到，新的class写法只是让对象原型的写法更加清晰、更像面向对象编程的语法而己。
知识点：
1) class声明类
2) constructor定义构造函数初始化
3) extends继承父类
4) super调用父级构造方法
5) static定义静态方法和属性
6) 父类方法可以重写
   
```javascript
class Phone {
    // 构造方法
    constructor(brand,price){
        this.brand = brand;
        this.price = price;
    }
    // 方法
    call(){
        console.log("我可以打电话");
    }
}

let apple = new Phone('苹果'，5999);
apple.call();
```

**static 静态成员**
被` static ` 标注的变量和方法属于类，而不是属于实例化对象

**继承**
```javascript
class SmartPhone extends Phone{
//构造方法
    constructor(brand,price,color,size){
        super(brand,price);//Phone.call(this,brand,price)
        this.color color;
        this.sizesize;
    }
    photo(){
        console.1og("拍照")；
    }
}
```
**子类方法重写**
参考java ，但不能调用父类的同名方法，只能重写

**get 和 set**
```javascript

//get和set
class Phone{
    get price(){
        console.1og("价格属性被读取了");
        return 'iloveyou';
    }
    set price(newval){
        console.1og('价格属性被修改了');
    }   
//实例化对象
let s new Phone();
//console.log(s.price);

s.price = 'free';
}
```

#### ES6 数值扩展

0. Number.EPSILON是JavaScript表示的最小精度`EPSILON `属性的值接近于`2.2284460492503130808472633361816E-16`
1. 二进制和八进制
2. Number.isFinite检测一个数值是否为有限数
3. Number.isNaN检测一个数值是否为NaN
4. Number.parseInt Number.parseFloat字符串转整数
5. Number.isInteger判断一个数是否为整数
6. Math.trunc将数字的小数部分抹掉
7. Math.sign判断一个数到底为正数负数还是零


#### ES6 对象方法扩展
```javascript
//1.Object.is判断两个值是否完全相等
console.log(object.is(120,120));//

console.log(object.is(NaN,NaN));//true

console.1og(NaN ===NaN);//false


//2.Object.assign对象的合并
console.log(object.assign(config1,config2));
// 有相同的变量，后面的覆盖前面的

//3.Object.setPrototypeOf设置原型对象
Object.getPrototypeof
const school = {
    name:'尚硅谷'
}
const cities = {
    xiaoqu:['北京'，'上海'，'深圳'];
}
Object.setPrototypeof(school,cities);
console.log(school);
```

#### ES6 模块化
模块化是指将一个大的程序文件，拆分成许多小的文件，然后将小文件组合起来。

**模块化的好处**
1) 防止命名冲突
2) 代码复用
3) 高维护性


**ES6 的模块化语法**
模块功能主要由两个命令构成：` export  和  import `。
` export ` 命令用于规定模块的对外接口
` import ` 命令用于输入其他模块提供的功能

**暴露的方法**
```html
<script type="module">
//引入m1.js模块内容
import * as m1 from "./src/js/m1.js";
//引入m2.js模块内容
import * as m2 from "./src/js/m2.js";

import * as m3 from "./src/js/m3.js";

m3.default.change();
</script>

<script>
// 分别暴露
export let school='尚硅谷';
export function teach(){
    console.1og("我们可以教给你开发技能");
    }
</script>

<script>
// 统一暴露
 let school='尚硅谷';
 function teach(){
    console.1og("我们可以教给你开发技能");
 }
 export {school,teach};
</script>


<script>
//默认暴露
export default{
    school:'ATGUIGU',
    change:function(){
        console.1og("我们可以改变你！！");
    }
}
</script>
```

**导入的方法**
```javascript
//1.通用的导入方式
//引入m1.js模块内容
/import * as m1 from "./src/js/m1.js";
//引入m2.js模块内容
import * as m2 from "./src/js/m2.js";
//引入m3.js
import * as m3 from "./src/js/m3.js";

//2.解构赋值形式
import {school,teach} from "./src/js/m1.js";
import {school as guigu,findJob} from "./src/js/m2.js";
import {default as m3} from "./src/js/m3.js";

//3.简便形式 针对默认暴露
import m3 from "./src/js/m3.js";
```

**可以通过引入一个入口文件来使用模块**




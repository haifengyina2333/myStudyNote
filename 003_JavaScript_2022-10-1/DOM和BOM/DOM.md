## Web api 和 JavaSCript

#### JavaScript的组成：
Javascript语法，DOM，BOM
 
#### Web APIs
是 W3C 的标准
主要是DOM和BOM
Web APIs是 js 独有的部分
学习页面交互

#### API 和 WebAPI
API 就是给程序员提供的一种工具，以便能更轻松的实现想要的功能

WebAPI 是浏览器提供的一套存在浏览器功能和页面元素的API (BOM和DOM)
Web API 一般都有输出（函数的传参和返回值），Web API很多都是方法（函数）
API 和 内置对象 有相似性

## DOM：
文档对象模型(DOM)，是 W3C 组织推荐处理可标记语言的一种（HTML，XMl）的标准编程接口

#### DOM树
一个页面就是一个文档，DOM 中用 document 表示
元素：页面中所有的标签都是元素，DOM中使用 element
节点：网页中所有的内容都是节点（标签，属性，文本，注释等），DOM 中使用 node 表示

#### 获取元素：
**==所有获取的方法的前面必须加 document==**
- **根据ID获取
  `getElementByld('要查找的ID名(一定要字符串，注意大小写)');`
    返回的是一个元素对象  一个完整的标签内容**
     
    `console.dir(对象); 打印元素对象，可以查看里面的属性和方法`

- **根据标签名获取
    `getElementByTagName('标签名');`
    返回的是 元素对象的集合 ，以伪数组的形式存储
    哪怕只有一个标签，返回的也是伪数组
    如果压根就没有标签，就返回一个空的伪数组**
    `父元素.getElementTagName(' ');`
    可以获取父元素下的相关元素
     `element.getElementTagName(' ');`
    
- **根据类名获取 H5 新增
   ` getElementByClassName('');`**

- **根据选择器获取 H5 新增
  `querySelector('选择器');` 
  只能返回选择器的第一个对象**

- **返回指定选择器的所有元素对象集合 H5新增
 ` querySelectorAll('选择器');`**

**==所有获取的方法的前面必须加 document==**
  #### 获取特殊元素：
  **获取body元素**
  `document.body;`
  **获取html元素**
  ` document.documentElement;`

  #### 事件(几乎都是小写)
1. 事件由三部分组成  事件源 事件类型 事件处理程序  事件三要素
2. 事件源 事件被触发的对象 谁 按钮
    `var btn = document.getElementById(' ');`
2. 事件类型 如何触发 什么事件 比如鼠标点击（onclick) 还是鼠标经过 还是键盘按下
3. 事件处理 通过一个函数赋值的方式 完成
   
   **案例：一个判断是不是 傻逼 的按钮**
   ```JavaScript
    <button id="btm">我是一个大傻逼</button>
    <script>
        var btm = document.getElementById('btm');
        btm.onclick = function(){
           if( prompt('你是傻逼吗？') == '是'){
            alert('不愧是你呢 ，傻逼！');
           }else {
            alert('骗人是不好的');
           }
        }
    </script>

   ```
   #### 事件的执行过程
   1. 获取事件源
   2. 绑定事件 或称 注册事件
   3. 添加事件处理程序

   **常见的鼠标事件**
  
```javascript
onclick           鼠标点击左键触发
onmouseover       鼠标经过触发
onmouseout        鼠标离开触发
onfocus           获得鼠标焦点触发
onblur            失去鼠标焦点触发
onmousemove       鼠标移动触发
onmouseup         鼠标弹起触发
onmousedown       鼠标按下触发
   ```
   #### 操作元素：
   **改变元素内容**
   `元素对象(element).innerText = '   ';`

  innerText 不识别  HTML 标签 非标准 去除空格和换行

   `元素对象.innerHTML = '  ';`   **常用**

  innerHTML 识别HTML标签 W3C标准    保留空格和换行 保留HTML标签

  **这两个属性是可以读写的 可以打印出来**

  

  **改变元素属性**
    `元素对象.src、href、id、alt、title = '   '; `


    
  案例：

  ```JavaScript
        <img src="images/s.gif" alt="">
        <div>上午好</div>
        <script>
          //根据系统不同时间来判断，所以需要用到日期内置对象
          //利用多分支语句来设置不同的图片
          // 需要一个图片，并且根据时间修改图片，就需要用到操作元素src属性
          //需要一个div元素，显示不同问候语，修改元素内容即可 I
          // 1.获取元素
            var img = document .querySelector('img");
            var div = document.queryselector( 'div');
            // 2. 得到当前的小时数
            var date = new Date();
            var h = date getHours();
            //3.判断小时数改变图片和文字信息
            if (h < 12){
            img.src = 'images/s.gif';
            div.innerHTML = '亲，上午好，好好写代码';
            } else if (h < 18){
            img.src = 'images/x.gif';
            div.innerHTML = '亲，下午好，好好写代码';
            } else {
            img.src = 'images/w.gif';
            div.innerHTML = '亲，晚上好，好好写代码';
            }
         </script>

   ```
**表单元素的属性操作**
type(类型)、value(表单里面的值)、checked()、selected、disabled()
**参考上面的案例：**
`btm.disabled = true; / this.disabled = true`
==this是事件函数的调用者==

#### 密码框显示密码案例：
```javascript
//1．获取元素
var eye = document . getElementById('eye');
var pwd = document.getElementById('pwd');
//2.注册事件处理程序
var flag = 0;
eye .onclick = function() {
//点击一次之后,flag -定要变化
if (flag == o) {
pwd.type = 'text';
eye.src = '图片地址';
flag = 1;
} else {
pwd . type = 'password';
eye.src = '图片地址2';
flag = 0;
}
```

**元素的样式属性操作**
js 修改样式， 样式属性要用驼峰命名法 
#### 简单的行内修改样式：

`元素对象.style.样式名字 = '  ';`

#### 循环精灵图案例：
利用 for 循环改变背景图位置
前提是精灵图有规律

```javascript
//1.获取元素所有的小li
var lis = document.queryselectorAll('li');
for (var i = 0; i < lis.length; i++）{
//让索引号乘以44 就是每个li 的背景y坐标index就是我们的y坐标
var index = i * 44;
lis[i].style.backgroundPosition = 'e -' + index + 'px';
}
```
#### 显示/隐藏 搜索框的内容
```javascript
//1.获取元素
var text = document .queryselector('input');
// 2.注册事件 获得焦点事件 onfocus
text.onfocus = function() {
// console.log("得到了焦点');
    if (this.value === '手机') {
      this.value = '';
      }
      //获得焦点 把文本框的文字颜色变深
      this.style.color = '#333';
    }
//3.注册事件 失去焦点事件 onblur
text.onblur = function() {
// console.log('失去了焦点’);
    if(this.value === ''){
    this.value = '手机';
    }
      this.style.color = '#999';
    }
```
#### 类操作修改样式：
把类写到 CSS 中  适用于 ==样式较多== 的情况下 或者是 ==功能复杂== 的情况下
`元素对象.className = '类名';`
可以直接调用 CSS 的样式 但会覆盖原来的类名
如果想保留原来的类名 还使用新的类名
`元素对象.className = '原类名 新类名';`

如果功能较少 使用
`元素对象.style.样式名字 = '  ';`

#### 密码判断案例：
```javascript
//1.获取元素
var ipt = document .queryselector('.ipt ');
var message = document.queryselector('.message');
//2.注册事件 失去焦点
ipt.onblur = function() {
// 根据表单里面值的长度 ipt .value .length
if (this.value.length < 6 || this value.length > 16）{
// console.log("错误’);
message.className = 'message wrong';
message.innerHTML = '您输入的位数不对要求6~16位';
} else {
message.className = 'message right';
message.innerHTML = '您输入的正确';
}
```
#### 操作元素总结：
**1. 操作元素内容
   innerText , innerHTMl
2. 操作常见元素属性
  src , href , title , alt等
3. 操作表单元素属性
   type , value , disabled,
4. 操作元素样式属性
    className , style**

#### 排他思想
同一组元素，想要某一个元素实现某种样式，用循环和排他思想来完成
排他思想：
1. 所有元素清除样式(干掉其他人)
2. 给当前元素设置样式 (留下自己)
3. 顺序肯定是先干掉其他人，然后设置自己 
   
#### 同一组元素，想要同时实现注册事件，用循环来实现

#### 自定义属性值
**获取自定义属性值**
`element.getAttribute('属性名');`
即
`对象名.getAttribute('属性名');`

原来的
`element.属性名('')`

**设置自定义属性值**
`对象名.属性 = '值';`
`对象名.setAtttibute ('属性'，'值');  针对于自定义属性`

**移除属性**
语法：
`element.removveAttribute('属性名');`
即是
`对象名.removveAttribute('属性名');`    


#### Tab 案例：
使用自定义属性来保存和使用数据
通过对标题添加自定属性 ， 通过自定义属性来开关相关功能

#### H5自定属性：
1. data- 开头的就是自定义属性
2. H5 新增的获取自定义属性：
   `对象名.dataset.属性名`
   dataset 是一个集合，里面存放了所有以data开头的自定义属性  ie 11 开始支持
   只能获取data 开头的属性

#### 节点操作
目的是获取元素
利用节点的层次关系来获取元素
节点：HTML 所有内容都可以称为节点
节点类型(NodeType)，节点内容，节点值
元素节点类型为：1
属性节点类型为：2
文本节点类型为：3 (包括文字、空格、换行等)
 **一般操作元素节点**

**节点层次关系**

**==此次所有的对象 都是由元素获取来的 也可以称号为对象==**

**1. 父级节点**
`子对象.parentNode` 得到离元素最近的父节点
可以少写 document 语句
找不到就返回 null
**2. 子级节点**
`父对象.childNodes`  (会包括换行等节点)
不推荐使用  需要使用循环去除其他节点
`父对象.children` (非标准，但好用)
**3. 最后或者是第一个节点**
`对象名.firstChild` (第一个节点，不管是元素还是文本)
`对象名.lastChild` (最后一个节点，不管是元素还是文本)

兼容性问题， IE9 才能支持：
`对象名.firstElementChild` 返回第一个子元素节点
`对象名.lastElementChild` 返回最后一个子元素节点
没有兼容性问题的方法 ： 使用children[]
`父对象.children[0]` 返回第一个子元素节点
`父对象.children[父对象.children.length-1]`  返回最后一个子元素节点
 
**4. 兄弟节点 （比较少用）**
 `对象名.nextSibling` 下一个兄弟节点，包括文本节点(可能是换行）
 `对象名.previousSibling` 上一个兄弟节点

 如果要元素节点：IE 9 以上才能支持
 `对象名.nextElementSibling` 下一个元素兄弟节点 没有就返回 NUll
 `对象名.previousElementSibling` 上一个元素兄弟节点

**5. 创建节点**
`document.createElement('标签');`删除父元素下的子元素，并且返回被删除的元素



添加节点：在某个元素添加一个孩子节点，位置在最后面
`父元素.appendChild('标签')；`
也称为追加节点
`父元素.insertBefore(要追加的元素,在什么元素的前面);`

==必须先创建才能，添加==

#### 发布评论相关案例：
```javascript
    <textarea name="" id="" cols="30" rows="10"></textarea>
    <button>发布</button>
    <ul>

    </ul>
      <script>
            // 获取元素
            var btn = document.querySelector('button');
            var text = document.querySelector('textarea');
            var ul = document.querySelector('ul');
            // 注册事件
            btn.onclick = function (){
            // 创建元素
            var li = document.createElement('li');
            // 添加元素
            li.innerHTML = text.value;
            // ul.appendChild(li);
            ul.insertBefore(li,ul.children[0]);
      </script>
        }
```
**6. 删除节点**
`父对象.removeChild(删除的节点);`

**7. 复制节点**
`对象名.cloneNode();`  只克隆了标签
需要通过变量来保存，然后通过 添加节点的知识 添加进去
默认括号的值是 空 或者 false 是浅拷贝
加了true 则是深度拷贝 ，拷贝了其自身和其所有的子节点

#### 动态表格生成案例：
```javascript
      <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html{
            background-color: #CCC;
        }
        table{
            margin: 200px auto;
            margin-bottom: 0px;
        
        }
        table thead{
            background-color: #66ccff;
            border: 2px solid #ec4e8a;
            height: 40px;
            font-size: 20px;
        }
        table td{
            background-color: #66ccff;
            
        }
        table th{
            background-color: #66ccff;
        }
        table th{
            width: 100px;
        }
        table th:nth-child(1){
            width: 140px;
        }
        table th:nth-child(2){
            width: 175px;
        }
       table tr {
            text-align: center;
       }
       td{
        border: 1px solid #ec4e8a;
       }
       th{
        border: 1px solid #ec4e8a;
       }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>姓名</th>
                <th>科目</th>
                <th>成绩</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
          
    
        </tbody>
    </table>
   <script>
   
   
    var datas = [{
        name:'我是狗',
        subject:'JavaScript',
        score:100
    },{
        name:'我是猫',
        subject:'JavaScript',
        score:82
    },{
        name:'我是傻逼',
         subject:'JavaScript',
        score:60},
        {
        name:'傻逼',
         subject:'JavaScript',
        score:91}];
    // 2. tbody里面创行
    // var tbody = document.getElementsByTagName('tbody');
    var tbody = document.querySelector('tbody');
    for(var i = 0 ; i <datas.length;i++){
        // 创造行
        var tr = document.createElement('tr')
        tbody.appendChild(tr);
        // 创造列
        for(var k in datas[i]){
          var td = document.createElement('td');
          td.innerHTML = datas[i][k];
          tr.appendChild(td);
        }
        // 创造删除单原格
        var td = document.createElement('td');
        td.innerHTML = '<a href="javascript:;">删除</a>'
        tr.appendChild(td);
    }
    // 4.删除操作
    var as = document.querySelectorAll('a');
    for(var i = 0; i < as.length;i++){
        as[i].onclick = function(){
            tbody.removeChild(this.parentNode.parentNode);        }
    }

   </script>
```

**三种动态创建元素**
1. document.write('想添加的内容');
   会导致页面重绘(类似于重新建了一个只有相关代码的页面)
2. innerHTML 创建元素
   

  ```javascript 
    var inner = document.querySelector('.inner');
    inner.innerHTML = '<a href="#">百度</a>';
  ```
==innerHTML 创建多个元素，效率更高，采用数组拼接字符串 以1000个 a 标签为标准==
==**采用数组拼接字符串 大概是 10ms 左右**== 
采用字符串直接相加 大概是 3000ms 左右

3. document.creatElement()  创建元素

```javascript 
  var create = document.queryselector('.create');
  var a = document.createElement('a');
  create.appendchild(a);
``` 
速度稍比数组型的 innerHTML 稍慢（ 20ms ），但胜在于是结构简单
==采用数组的 innerHTML 结构复杂==

## DOM 重点核心
**==文档对象模型==**（DocumentObject Model，简称 DOM ) ,是W3C组织推荐的处理可扩展标记语言
（HTML或者XML）的标准编程接口。
W3C 已经定义了一系列的DOM接口，通过这些DOM接口可以改变网页的内容、结构和样式。
1. 对于JavaScript，为了能够使lavaScript操作HTML, JavaScript就有了一套自己的dom编程接口。
2. 对于HTML，dom使得html形成一棵dom树.包含文档、元素、节点

---
 ### 关于dom操作，我们主要针对于元素的操作。主要有创建、增、删、改、查、属性操作、事件操作。

#### 创建元素
1. document.write
2. innerHTML
3. createElement
#### 增加元素
1. appendChild
2. insertBefore
#### 删除元素
1. removeChild
#### 改变元素
主要修改dom的元素属性，dom元素的内容、属性,表单的值等
1. 修改元素属性： src、href、title等
2. 修改普通元素内容：innerHTML、innerText
3. 修改表单元素：value、type、disabled等
4. 修改元素样式 ：style、className
#### 查找元素
主要获取查询dom的元素
1. DOM提供的API方法：getElementByld、getElementsByTagName古老用法不太推荐
2. H5提供的新方法：querySelector、querySelectorAll 提倡
3. 利用节点操作获取元素：父(parentNode)、子(children)、兄(previousElementSibling、
nextElementSibling)提倡
#### 属性操作
主要针对于自定义属性。
1. setAttribute : 设置dom的属性值
2. getAttribute:得到dom的属性值
3. removeAttribute 移除属性
#### 事件操作
onclick           鼠标点击左键触发
onmouseover       鼠标经过触发
onmouseout        鼠标离开触发
onfocus           获得鼠标焦点触发
onblur            失去鼠标焦点触发
onmousemove       鼠标移动触发
onmouseup         鼠标弹起触发
onmousedown       鼠标按下触发

---
## 事件高级
**注册事件的两种方法**
**利用 on 开头的事件onclick**
`<button onclick= "alert(hi～)" ></button>`

`btn.onclick = function()`
特点：注册事件的唯一性
同一个元素同一个事件只能设置一个处理函数，最后注册的处理函数将会覆盖前面注册的处理函数
**方法监听事件**
w3c标准推荐方式
addEventListener)它是一个方法
==IE9之前的IE不支持此方法，可使用 attachEvent( )代替==
`eventTarget.addEventListener(type, listener[ , useCapture] )`

`对象名.addEventListener('事件类型',方法()/监听器)`

eventTarget.addEventListener()方法将指定的监听器注册到eventTarget（目标对象）上，当该对
象触发指定的事件时，就会执行事件处理函数。
该方法接收三个参数：
 type : 事件类型字符串，比如 click、mouseover , 注意这里不要带on
listener : 事件处理函数，事件发生时，会调用该监听函数
useCapture :可选参数，是一个布尔值，默认是false。学完DOM事件流后，我们再进一步学习

**方法监听事件代码**
```JavaScript
    btns[i].addEventListener('click', function() {
    alert('这里面是函数');
    })
```
**ie9 以下使用的attachEvent (只做了解)**
`eventTarget.attachEvent (eventNameWithOn, callback)`
eventTarget.attachEvent（）方法将指定的监听器注册到 eventTarget ( 目标标对象）上，当该对象触
发指定的事件时，指定的回调函数就会被执行。
该方法接收两个参数：
eventNameWithOn :事件类型字符串，比如onclick、onmouseover，这里要带on
callback :事件处理函数，当目标触发事件时回调函数被调用
 
**解决兼容性案例:**
```javascript
function addEventListener(element, eventName, fn) {
// 判断当前浏览器是否支持 addEventListener 方法
if (element.addEventListener) {
  element.addEventListener(eventName, fn); /第三个参数 默认是false
        } else if (dlement .attachEvent ) {
              element.attachEvent('on' + eventName, fn);
           } else {
            //相当于 element.onclick = fn;
                  element['on' + eventName] = fn;
           }
```

**删除/解绑 事件**
传统方式删除事件:
`对象名.事件类型 = null;`

```JavaScript
var divs = document.queryselectorAll('div");
divs[0].onclick = function() {
    alert(11);
// 1．传统方式删除事件
    divs[0].onclick = null;
} 
```
监听方法删除事件:
`对象名.removeEventListener`
```javascript
// 2. removeEventListener 删除事件
divs[1] .addEventListener( 'click', fn）// 里面的fn 不需要调用加小括号
function fn() {
  alert(22);
  divs[1].removeEventListener('click', fn);
}
```
ie9以下的方法
```JavaScript
divs[2].attachEvent('onclick', fnl);
function fn1() {
  alert(33);
  divs[2].detachEvent('onclick'，fnll ;
}
```

#### DOM的事件流
事件发生时会在元素节点之间按照特定的顺序传播，这个传播过程即DOM事件流。
比如我们给一个div注册了点击事件：
**DOM事件流分为3个阶段：**
1. 捕获阶段
2. 当前目标阶段
3. 冒泡阶段
  
  我们向水里面扔一块石头，首先它会有一个下降的过程，这个过程就可以理解为从最顶层向事件发生的最具体元素（目标点）的捕获过程；之后会产生泡泡，会在最低点（最具体元素）之后漂浮到水面上，这个过程相当于事件冒泡。

1. JS 代码中只能执行捕获或者冒泡其中的一个阶段。
2. onclick和attachEvent 只能得到冒泡阶段。
3. addEventListener(type, listener[, useCapture])第三个参数如果是true，表示在事件捕获阶段调用事件处理程序；如果 false（不写默认就是false），表示在事件冒泡阶段调用事件处理程序。
4. 实际开发中我们很少使用事件捕获，我们更关注事件冒泡。
5. 有些事件是没有冒泡的，比如 onblur、onfocus、onmouseenter、onmouseleave
6. 事件冒泡有时候会带来麻烦，有时候又会帮助很巧妙的做些事件,我们后面学习。
```javaScript
// 捕获阶段
//document->html->body -> father -> son
var son = document.queryselector(' .son' );
son.addEventListener('click', function(){
alert('son');
}, true);

var father = document.queryselector('.father');
father.addEventListener('click', function() {
alert('father');
}, true);
//就是会先执行fanther

// 冒泡阶段(多用)
var son = document.queryselector(' .son' );
son.addEventListener('click',function(){
alert('son');
}, false);

var father = document.queryselector('.father');
father.addEventListener('click', function() {
alert('father');
},false);
// 先执行 son 后 执行fanther
// document->html->body -> father -> son 从右往左来
```
#### 事件对象
1. gvemt 就是一个事件对象 与到我们侦听函数的 小括号里面 当形金来我
2. 掌件对象只有有了事件才会存在，它是系统给我们自动创建的，不需要我们传递参数
3. 事件对象 是 我们事件的一系列相关数据的集合 跟事件相关的 比如鼠标点击里面就包含了==鼠标的相关信息，鼠标坐标啊，如果是键盘事件里面就包含的键盘事件的信息== 比如 判断用户按下了那个键
4. 这个事件对象我们可以自己命名 比如 event 、evt、e 
5. 兼容性问题：ie 6、7、8 通过 windows.event 也可以加判断 e = e || windows.event;
```javascript

var div = document.querySelector('div');
  // 传统的
  div.onclick = function(event）{
  console.log(event);
  }
  // 监听事件 
  div.addEventListener('click', function(event){
  console.log(event);
  })
```
**事件对象的常用属性和方法**

`e.target ` 返回的是触发事件的对象  (标准)
`e.srcElement` ie 6、7、8 使用
```javascript
//常见事件对象的属性和方法
//1.e.target 返回的是触发事件的对象（元素） this 返回的是绑定事件的对象（元素）
// 区别 ：e.target 点击了那个元素，就返回那个元素 this 那个元素绑定了这个点击事件，那么就返回谁
var div = document .queryselector('div');
  div.addEventListener('click', function(e) {
  console.log(e.target);
  console.log(this);
  })
var ul = document.queryselector('ul ' );
  ul.addEventListener('click', function(e){
// 我们给ul 绑定了事件 那么this 就指向u1
  console.log(this);
// e.target 指向我们点击的那个对象 谁触发了这个事件 我们点击的是li   e.target 指向的就是li
  console.log(e.target);
  })

  // 兼容性解决方法：
  div.onclick = function(e) {
  e = e || window.event;
  var target = e.target || e.srcElement;
```
`e.type`   返回事件类型 不带 on 的
   
`e.preventDefault(); `   阻止默认行为(事件)的方法
`e.returnVale`    阻止默认行为(事件)的属性
`return false;`  没有兼容性问题,但会导致后面的属性不执行
```javascript
var a = document.queryselector('a');
a.addEventListener( 'click', function(e) {
e .preventDefault(); // dom 标准写法
})
// 3.传统的注册方式
a.onclick = function(e）{
// 普通浏览器 e.preventDefault(); 方法
  e.preventDelault();
//低版本浏览器 ie678 returnValue 属性
  e.returnValue；
// 我们可以利用return false 也能阻止默认行为 没有兼容性问题
  return false;
```

#### 阻止事件冒泡
`stopPropagation();`  阻止冒泡 dom 推荐的标准 有兼容性问题
`e.cancelBubble = true;`  非标准 兼容性解决
```javascript
//阻止冒泡 dom 推荐的标准 stopPropagation()
var son = document.queryselector('.son');
son.addEventListener('click', function(e) {
e.stopPropagation();
e.cancelBubble = true;
}, false);

var father = document.queryselector('.father');
father.addEventListener('click', function() {
alert('father');
}, false);

document.addEventListener('click', function() {
alert('document ");
})
// 以上案例体现出了阻止冒泡的作用，但father这个仍然会冒泡
```
#### 事件委托
事件委托也称为事件代理，在jQuery里面称为事件委派。
**原理：**
==不是每个子节点单独设置事件监听器，而是事件监听器设置在其父节点上，然后利用冒泡原理影响设置每个子节点。==
以上案例：给ul 注册点击事件，然后利用事件对象的 target 来找到当前点击的Ii，因为点击li，事件会冒泡到ul上，ul有注册事件，就会触发事件监听器。
**事件委托的作用**
我们只操作了一次 DOM , 提高了程序的性能。
```javascript
// 事件委托的核心原理：给父节点添加侦听器, 利用事件冒泡影响每一个子节点
var ul = document .queryselector('ul');
  ul.addEventListener('click', function(e) {
// alert('知否知否，点我应有弹框在手！”);
// e.target 这个可以得到我们点击的对象
  e.target.style.backgroundColor = 'pink";
  })
```
#### 扩展知识——禁止右键菜单和禁止选中文字
`contextmenu`   右键菜单
`selectstart`   禁止选中文字
```javascript
// 1. contextmenu 我们可以禁用右键菜单
document.addEventListener('contextmenu', function(e) {
e.preventDefault();
})
//2.禁止选中文字 selectstart
document.addEventListener('selectstart', function(e){
e.preventDefault();
})
```
#### 获取鼠标在页面中的坐标
1. 获取鼠标在可视页面中的坐标
`e.clientX`   
`e.clientY`   
2. 获取鼠标在文档的坐标  ie9以上才支持
`e.pageX`   
`e.pageY`     
3. 返回鼠标相对于电脑屏幕的坐标
`e.screenX`
`e.screenY`

#### 跟着鼠标的图片案例：
`mousemove` 鼠标移动事件
**分析：**
鼠标不断的移动，使用鼠标移动事件：mousemove
在页面中移动，给document注册事件
图片要移动距离，而且不占位置，我们使用绝对定位即可
核心原理：每次鼠标移动，我们都会获得最新的鼠标坐标，把这个x和y坐标做为图片的top和left值就可以移动图片
```html
<img src="images/angel.gif" alt="">
<script>
var pic = document.queryselector('img');
document .addEventListener('mousemove', function(e) {
//1.mousemove只要我们鼠标移动1px 就会触发这个事件
// console.log(1);
// 2.核心原理：每次鼠标移动，我们都会获得最新的鼠标坐标,把这个x和y坐标做为图片的top和1eft 值就可以移动图片
var x = e.pageX;
var y = e.pageY;
console.log('x坐标是'+ x,'y坐标是' + y);
//3 ．千万不要忘记给left和top添加px 单位
pic.style.left = x + 'px';
pic.style.top = y + 'px';
});
</script>
```

#### 键盘事件
1. `onkeyup` 按键弹起时触发
   `keyup` 

2. `onkeydown` 按键按下时触发
   `keydown` 

3. `onkeypress` 不能识别功能键  ctrl shift 箭头 这些
   `keypress` 

  同时存在时执行顺序： keydown keypress keyup
#### 键盘事件对象
键盘事件对象的 keycode 属性可以返回按下的键的ASCII值
key 属性可以返回按下的键 有兼容性问题

keyup keydown 不区分字母大小写

#### 搜索框定位案例：
**focus(); 方法可以获取焦点**
```html
  <input type="text">
  <script>
  //核心思路:检测用户是否按下了s 键，如果按下s键，就把光标定位到搜索框里面
  //使用键盘事件对象里面的keyCode 判断用户按下的是否是s键
  //搜索框获得焦点:使用js 里面的 focus（）方法
   var ipu = document.querySelector('input');
        document.addEventListener('keyup',function(e){
            if(e.keyCode === 83){
                ipu.focus();
                
            }
        })
</script>
```
---
#### 快递单号查询
```html
    <style>
        .big{
            display: none;
            height: 40px;
            width: 100px;
            font-size: 30px;
        }
    </style>
</head>
<body>
    <div>
        <div class="big"></div>
        <input type="text" name="" id="">
        <script>
            var big = document.querySelector('.big');
            var ipu = document.querySelector('input');
// 快递单号输入内容时，上面的大号字体盒子（big）显示(这里面的文字
// 同时把快递单号里面的值（value）获取过来赋值给big盒子(innerText）做为内容
// 如果快递单号里面内容为空，则隐藏大号字体盒子(big)盒子

// 注意：keydown和keypress在文本框里面的特点：他们两个事件触发的时候，文字还没有落入文本框中。
// keyup事件触发的时候，文字已经落入文本框里面了
// 当我们失去焦点，就隐藏这个con盒子
// 当我们获得焦点，并且文本框内容不为空，就显示这个con盒子
            ipu.addEventListener('keyup',function(e){
                if(this.value == ''){
                big.style.display = 'none';
            }else {
                big.innerHTML = ipu.value;
                big.style.display = 'block';
            }
            })
            // 失去焦点，隐藏放大的
            ipu.addEventListener('blur',function(){
                big.style.display = 'none';
            })
            // 获取了焦点，显示放大字体
            ipu.addEventListener('focus',function(){
                if(ipu.value != ''){
                big.style.display = 'block';
                }
            })
        </script>
    </div>
</body>
```


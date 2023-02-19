##　BOM 概述
BOM ( Browser Object Model ) 即**浏览器对象模型**，它提供了独立于内容而与浏览器窗口进行交互的对象，其核心
对象是 window。
BOM由一系列相关的对象构成，并且每个对象都提供了很多方法与属性。
BOM 缺乏标准，JavaScript语法的标准化组织是ECMA，DOM的标准化组织是 W3C , BOM最初是Netscape 浏
览器标准的一部分。

#### DOM和BOM的区别
DOM
* 文档对象模型
* DOM就是**把「文档」当做一个「对象」来看待**
* DOM的顶级对象是**document**
* DOM主要学习的是操作页面元素
* DOM是W3C标准规范



BOM
* 浏览器对象模型
* 把 **「浏览器」当做一个「对象」来看待**
* BOM的顶级对象是**window**
* BOM学习的是窗口交互的一些对象
* BOM是浏览器厂商在各自浏览器上定义的，兼容性较差


#### BOM的构成
BOM 比 DOM 更大,包含了 DOM

**window 对象 包含了 document , location , navigation ,screen ,history**

**window 对象是浏览器的顶级对象**，它具有双重角色。
1. 它是JS访问浏览器窗口的一个接口。
2. 它是一个全局对象。定义在全局作用域中的变量、函数都会变成window对象的属性和方法。
在调用的时候可以省略window，前面学习的对话框都属于window对象方法，如alert0、prompt0 等。
注意：window下的一个特殊属性 `window.name`

```JavaScript
var num = 10;
function fn (){
    console.log(11);
}

fn();
window.fn();
console.log(num);
console.log(window.num);
```

---

#### 页面加载事件
` window.onload `是窗口(页面）加载事件,当文档内容完全加载完成会触发事件(包括图像、脚本文件、CSS
文件等),就调用的处理函数。
注意：
1. 有了window.onload 就可以把 JS 代码写到页面元素的上方，因为onload是等页面内容全部加载完毕，
再去执行处理函数。
2. window.onload 传统注册事件方式只能写一次，如果有多个，会以最后一个window.onload 为准。
3. 如果使用 addEventListener 则没有限制
   
```javascript
window.onload = function(){}
//或者
window.addEventListener("load",function(){});
```



`document .addEventListener('DOMContentLoaded',function(){})`
DOMContentLoaded 事件触发时，仅当DOM加哦完成，不包括样式表，图片，flash等等。
le9以上才支持
如果页面的图片很多的话,从用户访问到onload触发可能需要较长的时间,交互效果就不能实现，必然影响用
户的体验，此时用DOMContentLoaded事件比较合适。

**区别**:
load 等页面内容全部加载完毕，包含页面dom元素 图片 flash css 等等
DOMContentLoaded 是DOM 加载完毕，不包含图片 falsh css 等就可以执行 加载速度比 load更快一些

#### 窗口加载事件
`window.onresize = function(){}`
`window.addEventListener("resize",function(){});`
window.onresize是调整窗口大小加载事件 当触发时就调用的处理函数。
注意：
1. 只要窗口大小发生像素变化，就会触发这个事件。
2. 我们经常利用这个事件完成响应式布局(CSS2), window.innerWidth当前屏幕的宽度


#### 定时器 setTimeout()
`window.setTimeout(调用函数，延时时间(单位是:ms)）;`
1. 这个window在调用的时候可以省略
2. 这个延时时间单位是毫秒 但是可以省略，如果省略默认的是0
3. 这个调用函数可以直接写函数，或者写函数名或者采取字符串加函数名三种形式。第三种不推荐
4. 页面中可能有很多的定时器，我们经常给定时器加标识符 （名字）
```JavaScript
//写法一:
setTimeout(function() {
    console.log('时间到了');
    }, 2000);

function hello(){
    console.log('你的时间到了');
}
//写法二:
setTimeout(hello,2000);
//写法三: 不提倡 麻烦
setTimeout('hello',2000);

// 定时器加标识符:
var time1 = setTimeout(hello,2000);
```


#### 回调函数
setTimeout() 这个调用函数我们也称为回调函数 callback
普通函数是按照代码顺序直接调用。
而这个函数，需要等待时间，**时间到了才去调用这个函数，因此称为回调函数**。
简单理解 : **回调，就是回头调用的意思。上一件事干完，再回头再调用这个函数。**
以前我们讲的 element.onclick = function(00 或者 element.addEventListener("click",fn); 里面的函数也是回调函数。


####  clearTimeout 停止 setTimeout() 定时器

`window.clearTimeout(定时器名字);`

clearTimeout（）法取消了先前通过调用 setTimeout() 建立的定时器。
注意：
1. window可以省略。
2. 里面的参数就是定时器的标识符。

#### setInterval()定时器
` window.setInterval(回调函数，[间隔的毫秒数])；`
setlnterval() 方法重复调用一个函数，每隔这个时间，就去调用一次回调函数。
注意：
1. window可以省略。
2. 这个调用函数可以直接写函数，或者写函数名或者采取字符串“函数名0”三种形式。
3. 间隔的毫秒数省略默认是0，如果写，必须是毫秒，表示每隔多少毫秒就自动调用这个函数。
4. 因为定时器可能有很多，所以我们经常给定时器赋值一个标识符。

**setTimeout()和setInterval()的区别**
setTimeout() 是一次性的
setInterval() 不是一次性的,间隔时间到,就调用


#### 倒计时案例:
```html
    <div>
        <span class="hour">1</span>
        <span class="miunte">2</span>
        <span class="second">3</span>
    </div>

    <script>
        // 1.获取元素
        var hour = document.querySelector('.hour');
        var miunte = document.querySelector('.miunte');
        var second = document.querySelector('.second');
        
        var inputTime = +new Date('2022-11-4 18:00:00'); // 返回的是用户输入时间总的毫秒数
        
        countDown();
        // 2.获取时分秒的代码
        var time = setInterval(countDown, 1000);

        function countDown() {
            var nowTime = +new Date(); // 返回的是当前时间总的毫秒数
            var times = (inputTime - nowTime) / 1000;//times是剩余时间总的秒数
            var h = parseInt(times / 60 / 60 );//时 这里可能会出现几百个小时的问题
            h = h < 10 ? '0' + h : h;
            hour.innerHTML = h;
            var m = parseInt(times / 60 % 60);// 分
            m = m < 10 ? '0' + m : m;
            miunte.innerHTML = m;
            var s = parseInt(times % 60);// 当前的秒
            s = s < 10 ? '0' + s : s;
            second.innerHTML = s;
        }
    </script>
```

#### clearsetInterval 停止 setInterval()定时器
`window.clearsetInterval(定时器名字);`
可以通过 先定义一个 null 变量,再给变量赋值一个  setInterval()定时器 ,这样比较稳妥
注意：
1. window可以省略。
2. 里面的参数就是定时器的标识符。


#### 发送短信案例
```html
    手机号码:<input type="number"> <button>发送</button>
<script>
// 按钮点击之后，会禁用disabled 为true
// 同时按钮里面的内容会变化，注意button里面的内容通过 innerHTML修改
//里面秒数是有变化的，因此需要用到定时器
//定义一个变量，在定时器里面，不断递减
// 如果变量为0 说明到了时间，我们需要停止定时器，并且复原按钮初始状态
var btn = document.queryselector( 'button' );
var time = 3 ;
// 定义剩下的秒数
btn.addEventListener('click', function() {
    btn.disabled = true;
    var timer = setInterval(function(){
        if (time == 0) {
        //清除定时器和复原按钮
            clearInterval(timer);
            btn.disabled = false;
            btn.innerHTML = '发送';
            time = 3;
        } else {
            btn.innerHTML = '还剩下' + time +'秒';
            time--;
            }
        }, 1000);
})
</script>
```


#### this 关键字
this的指向在函数定义的时候是确定不了的，只有函数执行的时候才能确定this到底指向谁，一般情况下this
的最终指向的是那个调用它的对象
注意:
1. 全局作用域或者普通函数中this指向全局对象window (**注意定时器里面的this指向window**)
   console.log(this);   
   打印了一个window对象
    function(){
        console.log(this);
        打印了一个window对象
    }
2. 方法调用中谁调用this指向谁
3. 构造函数中this指向构造函数的实例

#### JS的执行机制
JavaScript语言的一大特点就是单线程，也就是说，同一个时间只能做一件事。这是因为Javascript这门脚
本语言诞生的使命所致——JavaScript 是为处理页面中用户的交互，以及操作DOM而诞生的。比如我们对
某个DOM元素进行添加和删除操作，不能同时进行。应该先进行添加，之后再删除。

单线程就意味着，所有任务需要排队，前一个任务结束，才会执行后一个任务。这样所导致的问题是：如果
JS执行的时间过就会造成页面的渲染不连贯，导致页面渲染加载阻塞的感觉。

**同步和异步**
为了解决这个问题，利用多核CPU的计算能力，HTML5提出Web Worker标准，允许JavaScript脚本创
建多个线程。于是，JS中出现了**同步和异步**。

**同步:**
**前一个任务结束后再执行后一个任务，程序的执行顺序与任务的排列顺序是一致的、同步的** 比如做饭的同步做
法：我们要烧水煮饭，等水开了（10分钟之后），再去切菜，炒菜。

**异步**
你在做一件事情时，因为这件事情会花费很长时间，**在做这件事的同时，你还可以去处理其他事情** 比如做
饭的异步做法，我们在烧水的同时，利用这10分钟，去切菜，炒菜。

<br>

**同步任务**
同步任务都在主线程上执行，形成一个执行栈。
**异步任务**
JS 的异步是通过回调函数实现的。
一般而言，异步任务有以下三种类型:
1、普通事件，如click、resize等
2、资源加载，如load、error等
3、定时器，包括setlnterval、setTimeout等

**执行机制**
1. **先执行执行栈中的同步任务。**
2. 异步任务（回调函数）放入任务队列中。
3. 一旦执行栈中的所有同步任务执行完毕，系统就会按次序读取任务队列中的异步任务，于是被读取的异步任
务结束等待状态，进入执行栈，开始执行。
![](js%E6%89%A7%E8%A1%8C%E6%9C%BA%E5%88%B6.png)

#### locaion 对象
**什么是location对象**
window 对象给找们提供了一个**location 属性** 用于**获取或设置窗体的 URL** ，开且可以用于**解析URL**。因为这个属性返回的是一个对象，所以我们将这个属性也称为**location 对象**。
**什么是URl**
统一资源定位符(Uniform Resource Locator, URL) 是互联网上标准资源的地址。互联网上的每个文件都有
一个唯一的URL，它包含的信息指出文件的位置以及浏览器应该怎么处理它。
URL 的一般语法格式为：
`protocol://host[:port]/path/[?query]#fragment`
`http://www.itcast .cn/index.html?name=andy kage=18#link`

![](URL%E5%9C%B0%E5%9D%80%E7%BB%84%E6%88%90.png)

**location 对象的属性:**
`location.href` 获取或者设置 整个URL
`location.host` 返回主机（域名） www.XXXXXXXX.com
`location.port` 返回端口号 如果未写返回空字符串
`location.pathname` 返回路径
`location.search`   返回参数 
`location.hash` 返回片段 #后面内容 常见于链接锚点

暂时记住:href 和 search 

#### 五秒钟跳转案例

```html
    <div></div>
    <script>
        var div = document.querySelector('div');
        var time = 5;
        setInterval(function(){
            if(time == 0){
                location.href = 'http://www.baidu.com';
            }else{
            div.innerHTML = '你将在' + time + '跳转页面';
            time --; }
        },1000)
    </script>
```
#### 登录案例的传递信息
第一个登录页面，里面有提交表单，action 提交到 index.html页面
第二个页面，可以使用第一个页面的参数，这样实现了一个数据不同页面之间的传递效果
第二个页面之所以可以使用第一个页面的数据，是利用了URL里面的location.search参数
在第二个页面中，需要把这个参数是提取。
第一步去掉？利用substr
第二步 利用=号分割键和值 (
split( '= ")
```html

<!-- 页面一： -->
    <form action="dl_2.html">
    用户名: <input type="text" name="uname"> 
    <input type="submit" value="登录"></form>


<!-- 页面二(名字是dl_2.html)： -->
    <div></div>
    <script>
        var div = document.querySelector('div');
        var str = location.search;
        // 字符串对象.substr();     字符串截取 
        str = str.substr(1); 
        // 字符串对象.splii('=');   分隔字符串
        var arr = str.split('=');
        div.innerHTML = '欢迎您的光临，尊贵的' + arr[1]  + '用户';
    </script>

<!-- 中文会发生乱码，以后会解决这个问题 -->


```

#### location 对象的方法
`location.assign()`
跟 href 一样，可以跳转页面（也称为重定向页面)，记录历史，可以实现后退功能 **括号里加单引号**
`location.replace()`
替换当前页面，因为不记录历史，所以不能后退页面
`location.reload()`
重新加载页面，相当于刷新按钮或者 F5 如果参数为true 强制刷新Ctrl + F5 (不使用本地缓存)
打开过一次的网页，本地可能有缓存,按Ctrl + F5 就可以不使用缓存重新打开

#### navigator 对象
navigator对象包含有关浏览器的信息，它有很多属性，我们最常用的是**userAgent**，该属性可以返回由客
户机发送服务器的 user-agent头部的值。
下面前端代码可以判断用户那个终端打开页面，实现跳转


#### history 对象
window 对象给我们提供了一个history 对象，与浏览器历史记录进行交互。该对象包含用户（在浏览器窗口中）
访问过的URL。
`back()`可以后退功能
`forward()`前进功能
`go(参数)` 前进后退功能参数如果是1前进1个页面如果是-1 后退1个页面






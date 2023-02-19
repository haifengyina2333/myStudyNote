

## JQuery 的概述

#### Javascript 库
仓库： 可以把很多东西放到这个仓库里面. 找东西只需要到仓库里面查找到就可以了。

JavaScript库：即library，是一个**封装**好的特定的集合（方法和函数）。从封装一大堆函数的角度理解库，就
是在这个库中，封装了很多预先定义好的函数在里面，比如动画animate、hide、show , 比如获取元素等。
 
**简单理解 ∶** 就是一个JS文件，里面对我们原生js代码进行了封装，存放到里面。这样我们可以快速高效的使用
这些封装好的功能了。

**JQuery 就是一个方便操作 Dom 的一个库**

#### JQuery的概念
**JQuery** 是一个快速、简洁的 **JavaScript 库**，其设计的宗旨是“ write Less , Do More ”，即倡导写更少的代码，做更多的事情。
j 就是 JavaScript ，Query查询；意思就是查询 js ，把 js 中的 DOM 操作做了封装，我们可以快速的查询使用里
面的功能。
**JQuery封装了 JavaScript常用的功能代码**，优化了 DOM操作、事件处理、动画设计和 Ajax 交互。

**学习JQuery本质：就是学习调用这些函数（方法）。**
**JQuery 出现的目的是加快前端人员的开发速度**，我们可以非常方便的调用和使用它，从而提高开发效率。

#### JQuery 的优点
* 轻量级。核心文件才几十kb，不会影响页面加载速度
* 跨浏览器兼容。基本兼容了现在主流的浏览器
* 链式编程、隐式迭代
* 对事件、样式、动画支持，大大简化了DOM操作
* 支持插件扩展开发。有着丰富的第三方的插件，例如∶
* 树形菜单、日期控件、轮播图等
* 免费、开源


## JQuery 的使用

#### JQuery 的入口函数
```javascript
//1.等着页面DOM加载完毕再去执行js 代码
$(document).ready(function() {
    $('div').hide();
})
// 2.等着页面DOM加载完毕再去执行js 代码
$({function() {
    $('div').hide();
}
```
1 等着 DOM结构涫毕目内部件码 不心|所有外源加裁完 JQuery 帮我们完成了封装
2.相当于原生js 中的DOMContentLoaded。
3.不同于原生js 中的load事件是等页面文档、外部的js文件、css文件、图片加载完毕才执行内部代码。


#### JQuery 的顶级对象
1. ` $ ` 是 JQuery 的别称，在代码中可以使用 JQuery 代替 ` $ ` ，但一般为了方便，通常都直接使用 $。
2. ` $ `是JQuery的顶级对象，相当于原生 JavaScript 中的 window 。把元素利用 ` $ `包装成 JQuery 对象，就可以调用 JQuery 的方法。


#### JQuery 对象和 Dom 对象
1. 用原生 JS 获取来的对象就是 DOM 对象。
2. JQuery 方法获取的元素就是 JQuery 对象。
3. JQuery 对象本质是：利用 $ 对 DOM 对象包装后产生的对象( 伪数组形式存储 ) 。
4. JQuery 对象只能使用 JQuery 方法，DOM 对象则使用原生的 Javascirpt 属性和方法
```javascript
//1. DOM 对象:用原生 js 获取过来的对象就是 DOM 对象
var myDiv = document.queryselector( 'div'); // myDiv 是DOM对象
console.dir(myDiv);
//2.JQuery对象：用JQuery方式获取过来的对象是JQuery对象。本质：通过$把DOM元素进行了包装
$('div');   // $ ('div') 是一个JQuery 对象
// 3. JQuery 对象只能使用 JQuery 方法，DOM 对象则使用原生的 Javascirpt 属性和方法

```

#### JQuery 对象和 DOM 对象相互转换
DOM对象与JQuery 对象之间是可以相互转换的。
**因为原生js比JQuery更大**，原生的一些属性和方法JQuery没有给我们封装.要想使用这些属性和方法需要把
JQuery对象转换为DOM对象才能使用。

```javascript
//1．DOM对象转换为JQuery对象
//（1）我们直接获取视频，得到就是JQuery对象
$('videb');
//（2）我们已经使用原生js 获取过来 DOM对象
var myvideo = document.queryselector('video');
/ /$(myvideo).play();// JQuery里面没有play 这个方法
//2.JQuery对象转换为DOM对象
// myvideo .play();
$('video')[0].play()
$('video').get(0).play() I
```
 

## JQuery 的常用 APi

#### JQuery 基础选择器

**基础选择器**
原生 JS 选择器很多，很杂，而且兼容性情况不一致，因此 JQuery 给我们做了封装，使获取元素统一标准。

` $(“选择器”) ` **里面选择器直接写 CSS选择器即可，但是要加引号**

![](%E5%9F%BA%E7%A1%80%E9%80%89%E6%8B%A9%E5%99%A8.png)

**层级选择器**
包括 子代选择器 `.ul>li  `，后代选择器`.ul li `

`选择器:checked` 可以获取被选中的复选框 

#### JQuery 的隐式迭代
**遍历内部DOM元素（伪数组形式存储）的过程就叫做隐式迭代。**
简单理解∶给匹配到的所有元素进行循环遍历，执行相应的方法，而**不用我们再进行循环，简化我们的操作**，
方便我们调用。

#### JQuery 筛选选择器
![](%E7%AD%9B%E9%80%89%E9%80%89%E6%8B%A9%E5%99%A8.png)

#### JQuery 筛选方法(重点)
![](%E7%AD%9B%E9%80%89%E6%96%B9%E6%B3%95.png)

`parents (" ")`  **查找祖先元素**

**重点记住：parent() children() find() siblings() eq()**

```javascript
//注意一下都是方法 带括号
$(function() {
//1.父 parent（）返回的是 最近一级的父级元素 亲爸爸|Y
console.log($(".son").parent();
// 2. 子
//（1）亲儿子 children（）类似子代选择器 ul>li
// $(" .nav" ).children("p").css("color", "red");
//（2）可以选里面所有的孩子 包括儿子和孙子 find（）类似于后代选择器
$(" .nav").find("p").css("color", "red");
```

**下拉菜单案例**

```javascript
$(function() {
//鼠标经过
    $(".nav>li").mouseover(function() {
// $(this）JQuery 当前元素 this不要加引号
    // show（）显示元素 hide()隐藏元素
        $(this).children("ul").show();
    });
    //鼠标离开
    $(" .nav>li").mouseout(function(){
        $(this).children("ul").hide()
    })
}
```


#### JQuery 的排他思想
```html
<body>
<button>快速</button>
<button>快速</button>
<button>快速</button>
<button>快速</button>
<button>快速</button>
<button>快速</button>
<button>快速</button>
<script>
//入口函数 
$(function() {
//1.隐式迭代 给所有的按钮都绑定了点击事件
    $("button").click(function() {
        // 2.当前的元素变化背景颜色
        $(this).css("background", "pink");
        //3.其余的兄弟去掉背景颜色
        $(this).siblings("button" ).css("background", "" );
    });
})
</script>
</body>
```

#### JQuery 的链式编程
链式编程是为了节省代码量，看起来更优雅。
` $(this).css("color","red").siblings.css('color’,) `

**注意：注意执行的对象**


```javascript
$(function() {
//1．隐式迭代 给所有的按钮都绑定了点击事件
    $("button").click(function() {

    //2.让当前元素颜色变为红色
    // $(this).css("color", "red");
    //3.让其余的姐妹元素不变色
    // $(this).siblings().css("color", " ");

    //链式编程
    $(this).css("color", "red").siblings().css("color","");               
    });
})
```

#### JQuery 修改 CSS 样式

**直接设置 CSS 样式**

JQuery可以使用 CSS 方法来修改简单元素样式 ,也可以操作类，修改多个样式。
1. 参数只写属性名，则是返回属性值
 ` $(this).css("color"); `

2. 参数是**属性名，属性值，逗号分隔**，是设置一组样式，属性必须加引号，值如果是数字可以不用跟单位和引号
` $(this),css("color","red")`

3. 参数可以是对象形式，方便设置多组样式。属性名和属性值用冒号隔开，属性可以不用引号
   **如果是复合属性则必须采取驼峰命名法，如果值不是数字，则需要加引号**
```javascript
   $("div").css({
    width: 400,
    height: 400,
    backgroundColor:"red"
   }
```

**修改类名：**
添加类名：
` $(this).addClass("current"); `
删除类名：
` $(this).removeClass("current"); `
切换类名：(有就删除上，没有就添加)
`$(this).toggleClass("current");`

**Jquery 和 原生 className 的区别**
* 原生 JS 会覆盖原来的类名  
* Jquery 是追加类名，不影响原来的类名


#### Jquery 效果

**显示和隐藏**

`show ( [speed, [easing],[fn] ])`   显示
`hide ( [speed, [easing],[fn] ])`   隐藏
`toggle ( [speed, [easing],[fn] ])` 切换

**显示和隐藏 一般不添加参数**

参数：
(1) 参数都可以省略，无动画直接显示。
(2) speed ：三种预定速度之一的字符串( " slow ", "normal", or "ast")或表示动画时长的毫杪数值(如 : 1000)。
(3) easing : (Optional)用来指定切换效果，默认是“ swing ”，可用参数“ linear ”。
(4) fn: 回调函数，在动画完成时执行的函数，每个元素执行一次。

---

**滑动**
`slideDown ( [speed, [easing],[fn] ])`   下拉
`slideUp ( [speed, [easing],[fn] ])`   上拉
`slideToggle ( [speed, [easing],[fn] ])` 滑动切换切换

参数：
(1) 参数都可以省略，无动画直接显示。
(2) speed ：二种预定速度之一的字符串( " slow ", "normal", or "ast")或表示动画时长的毫杪数值(如 : 1000)。
(3) easing : (Optional)用来指定切换效果，默认是“ swing ”，可用参数“ linear ”。
(4) fn: 回调函数，在动画完成时执行的函数，每个元素执行一次。

**事件切换**
` hover(fn1 , fn2) `    fn1 是鼠标经过的函数,fn2是鼠标离开的函数
` hover(fn) `   fn 是鼠标经过和离开都会触发的 

**动画队列及其停止排队方法**
动画或者效果一旦触发就会执行，如果多次触发，就造成多个动画或者效果排队执行。
` stop( ) ` 此方法可以停止现在的动画
**stop 方法写在动画的前面，才能停止动画排队**


**淡入和淡出**
`fadeIn( )  ` 淡入
`fadeOut( )  ` 淡出
`fadeToggle( )  ` 淡入淡出切换

**参数参考上面的**

` fadeTo([[speed],opacity, [easing],[fn]]) ` 修改透明度 透明度和速度是必须写的
**参数:**
( 1 ) opacity 透明度必须写，取值0~1之间。
( 2 ) speed ：三种预定速度之一的字符串( " slow ", "normal", or "ast")或表示动画时长的毫杪数值(如 : 1000)。

( 3 ) easing : (Optional)用来指定切换效果，默认是“swing”，可用参数“linear”。
 

**自定义动画**

` animate(params, [speed],[easing],[fn]) `

**参数:**
(1) **params:想要更改的样式属性，以对象形式传递，必须写。属性名可以不用带引号，如果是复合属性则需要采取驼峰命名法 borderLeft 。其余参数都可以省略。**
(2) speed : 三种预定速度之一的字符串( "slow" , "normal" , or "fast”)或表示动画时长的毫秒数值(如：1000)。
(3) easing : (Optional) 用来指定切换效果，默认是“swing”，可用参数“linear”。
(4) fn:回调函数，在动画完成时执行的函数，每个元素执行一次。


#### Jquery 属性操作
获取属性值
` prop("属性名") `
设置属性值
` prop("属性名","属性值") `

设置或获取 自定义属性
`attr (" "," ")` 

**数据缓存 data( )**
` data ( ) ` 里面的相关数据是存放在元素的内存里

` data( ) ` 可以获取h5 自定义属性 而且不用写 data - 而且是返回的是数字型


#### Jquery 内容文本值
`html( ) ` 获取元素内容(包括标签)
`html(" ") ` 设置元素内容(包括标签)
` text ( ) ` 获取内容(不包括标签)
` val ( ) ` 获取表单值

**括号里面写上就是设置**


#### Jquery 元素操作
**遍历元素**

`each(function(index , DomEle) { ... } ) `  **遍历 DOM 对象使用，一定程度避开隐式迭代**
```javascript
// 如果针对于同一类元素做不同操作，需要用到遍历元素（类似for，但是比for强大）
// 1.each(）方法遍历元素
$("div").each(function(i, domEle){
    // 回调函数第一个参数一定是索引号 可以自己指定索引号号名称
    // console.log(index);
    console.log(i);
    // 回调函数第二个参数一定是 dom元素对象
    console.log(domEle);
    // domEle.css("color"); dom对象没有css方法
    $(domEle).css("color", "blue");
})
```

`$.each(对象, function(index,DomEle) {... } )` **什么都可以遍历**，不只是对象，也可以是数组，包括数据


**创建元素**
`$("<li> 创造的li </li>")`


**添加元素**
内部添加：
`element.append( ); `添加到内容最后面
`element.ptepend( ); `添加到内容最前面

外部添加：
`element.after("内容")`把内容放入目标元素后面
`element.before("内容") `把内容放入目标元素前面

**删除元素**

` element.remove( ) `   删除匹配的元素（本身）,自杀
` element.empty( )`      删除匹配的元素集合中所有的子节点 杀自己的孩子
` element.html( )`       清空匹配的元素内容 杀自己的内容，包括孩子

```javascript
.
//1．创建元素
var li =$("<li>我是后来创建的li</li>");
//2．添加元素
//（1）内部添加
$("ul").append(li); //内部添加并且放到内容的最后面
$("ul").prepend(li);// 内部添加并且放到内容的最前面
//（2）外部添加
var div = $("<div>我是后妈生的</div>");
// $(".test").after(div);
$(".test").before(div);
//3．删除元素
// $("ul").remove()；可以删除匹配的元素 自杀
// $("ul").empty();//可以删除匹配的元素里面的子节点 孩子
$("ul").html("")；// 可以删除匹配的元素里面的子节点 孩子
```

#### Jquery 的尺寸和大小操作
` width() / height() ` 取得匹配元素宽度和高度值 只算width / height
` innerWidth() / innerHieght() ` 取得匹配元素宽度和高度值包含padding
` outerWidth() / outerHeight() ` 取得匹配元素宽度和高度值包含padding、border
` outerWidth(true)/ outerHeight(true) ` 取得匹配元素宽度和高度值包含padding、borde、margin

**以上参数为空，则是获取相应值，返回的是数字型。
如果参数为数字，则是修改相应值。**
```javascript
// 1. width(）/ height(）获取设置元素 width和height大小
console.log($("div").width());
$("div").width(300);
// 2. innerWidth(） / innerHeight(） 获取设置元素 width和height + padding 大小
console.log($("div").innerWidth());

// 3. outerWidth(）/ outerHeight(）获取设置元素 width和height + padding + border 大小
console.log($("div").outerwidth());
// 4. outerWidth(true) / outerHeight(true）获取设置 width和height + padding + border +margin
console.log($("div").outerWidth(true));
```

#### Jquery 的位置

位置主要有三个： ` offset ( )、position ( )、scrollTop( )/scrollLeft() `

**设置或获取元素偏移**
1. `offset() ` 
offset() 方法设置或**返回被选元素相对于==文档==的偏移坐标**，跟父级没有关系。
该方法有2个属性left、top：offset().top 用于获取距离文档顶部的距离，offset().left用于获取距离文档左侧的距离。
可以设置元素的偏移：offset(( top: 10, left: 30 ));

```javascript
console.log($(".son").offset(
console.log($(".son").offset().top);
$(".son").offset({
    top:200,
    left:200
});
```
2. position ( ) 
position0)方法用于**返回被选元素相对于==带有定位的父级==偏移坐标**，如果父级都没有定位，则以文档为准。
**只能获取，不能偏移**

3. ` scrollTop() / scrollLeft () ` **设置或获取元素被卷去的头部和左侧**

```javascript
$(document).scrollTop(1pe);
// 被卷去的头部 scrollTop()/被卷去的左侧 scrollLeft()
// 页面滚动事件
Var boxTop = $(".container").offset().top;
$(window).scroll(function(){
// console.log(11);
console.log($(document).scrollTop());
if ($(document).scrollTop()>= boxTop){
    $(".back").fadeIn();
    } else{
        $(".back").fadeOut();
    }
})
```

**节流阀（互斥锁）**
防止某些不需要执行的代码被反复执行

## Jquery 事件

#### 单个事件
`element.事件(function(){]) `
` $("div").click(function(){ 事件处理程序}) `


#### 事件处理 on()绑定事件
on() 方法在匹配元素上绑定一个或多个事件的事件处理函数
` element.on(events,[selector],fn) `
1. events:一个或多个用空格分隔的事件类型，如"click"或"keydown"。
2. selector: 元素的子元素选择器。

```javascript
$("div").on({
    mouseenter: function(){
        $(this).css("background", "skyblue");
    },
    click: function(){
        $(this).css("background", "purple");
    }
});
// 都是一样的话
$("div").on("mouseenter mouseleave", function()（
    $(this).toggleclass("current");
    });
```

#### 事件委托

**on 可以实现事件委托**
```javascript
$("ul").on("click", "li", function(){
    alert(11);
});
```
click 是绑定在 ul 上的,但是触发对象是 ul 里的 li

**on 可以给未来动态创建的元素绑定事件**
```javascript
$("ol").on("click", "li", function(){
    alert(11);
})
var li = $("<li>我是后来创建的</li>");
$("ol").append(li);
```

#### off 解绑事件
` off() ` 解除元素对象所有事件
` off("click") ` 解除元素对象 click 事件
` $(ul).off("click","li") ` 解除事件委托的 click 事件

**如果有的事件只想触发一次，可以使用  ` one ( ) ` 来绑定事件。（使用方法和 on 一样，区别是只能触发一次）**


#### 自动触发事件
1. ` $("div").click() `
2. ` $("div").trigger("click") `
3. ` $("div").triggerHandler("click") ` 此方法不会触发元素的默认事件

#### 事件对象
阻止默认行为：` event.preventDefault() 或者 return false `
阻止冒泡：` event.stopPropagation( ) `

```javascript
$("div").on("click", function(event){
// console.log(event);
console.log("点击了div");
//阻止了事件冒泡
event.stopPropagation();
})
```
## Jquery 的其他方法
 
#### Jquery 拷贝对象
`$.extend([deep], target, object1, [objectN])`

`$.extend(targetObj, obj); `
`$.extend(true, targetObj, obj); `
1. deep: 如果设为true为深拷贝，默认为false 浅拷贝
2. target:要拷贝的目标对象
3. object1:待拷贝到第一个对象的对象。
4. objectN:待拷贝到第N个对象的对象。
5. 浅拷贝是把被拷贝的对象复杂数据类型中的地址拷贝给目标对象，修改目标对象会影响被拷贝对象。
   
#### 多库共存
jQuery使用 ` $ `作为标示符，随着jQuery的流行,其他js库也会用这$作为标识符，这样一起使用会引起冲突。 

**需要一个解决方案，让jQuery 和其他的js库不存在冲突，可以同时存在，这就叫做多库共存。**

**jQuery 解决方案：**
1. 把里面的$符号统一改为jQuery。比如jQuery("div'")
2. jQuery变量规定新的名称：（释放控制权）
   ` $.noConflict() `
   即：
 ` var jq = $.noConflict(); `
 之后 的 ` $ ` 会变成 ` jq`  变成了 ` jq("div"); `


 #### Jquery 插件
 jQuery 功能比较有限，想要更复杂的特效效果，可以借助于jQuery 插件完成。
注意: 这些插件也是依赖于jQuery来完成的，所以必须要先引入jQuery文件，因此也称为jQuery 插件。
jQuery 插件常用的网站：
1. jQuery 插件库 http://www.jq22.com/
2. jQuery之家 http://www.htmleaf.com/
   
jQuery 插件使用步骤：
1. 引入相关文件。（jQuery文件和 插件文件）
2. 复制相关html、css、js(调用插件)。
   
#### 图片懒加载技术（插件）
**图片懒加载：**（图片使用延迟加载在可提高网页下载速度。它也能帮助减轻服务器负载）
当我们页面滑动到可视区域，再显示图片。

#### 全屏滚动（插件）

 







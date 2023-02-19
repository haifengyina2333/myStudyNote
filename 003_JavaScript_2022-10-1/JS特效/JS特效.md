## JS电脑特效

#### 元素偏移量 offset系列
offset翻译过来就是偏移量，我们使用offset 系列相关属性可以动态的得到该元素的位置（偏移）、大小等。
获得元素距离带有定位贷元素的位置
获得元素自身的大小（宽度高度）
注意：返回的数值都不带单位

`element.offsetParent`      返回作为该元素带有定位的父级元素，如果父级都没有定位则返回body 
`.offsetParent` 返回带**定位的父亲** 父子节点则是返回**亲父亲**

`element.offsetTop`     返回元素相对带有定位父元素上方的偏移
`element.offsetLeft`        返回元素相对带有定位父元素左边框的偏移
`element.offsetWidth`       返回自身包括padding、边框、内容区的**宽度**，返回数值不带单位
`element.offsetHeight`      返回自身包括padding、边框、内容区的**高度**，返回数值不带单位

给父亲元素加一个相对定位就行

**offset**
* offset可以得到任意样式表中的样式值
* offset 系列获得的数值是没有单位的
* offsetWidth包含padding+border+width
* offsetWidth等属性是只读属性，只能获取不能赋值
* **所以，我们想要获取元素大小位置，用offset更合适**

---

**style**
* style只能得到行内样式表中的样式值
* style.width获得的是带有单位的字符串
* style.width获得不包含padding和border的值
* style.width是可读写属性，可以获取也可以赋值
* **所以，我们想要给元素更改值，则需要用style改变**


**获得鼠标在盒子中的距离**
首先我们可以获取鼠标在页面中的坐标，也可以获得盒子相对于页面的位置，可以通过计算，得到是鼠标在盒子的坐标
```html
    <style>
        div{
            width: 200px;
            height: 200px;
            background-color: aqua;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div></div>
    <script>
        var div = document.querySelector('div');
        div.addEventListener('mousemove',function(e){
            var x = e.pageX - this.offsetLeft;
            var y = e.pageY - this.offsetTop;
            this.innerHTML = 'X的坐标是：' + x + ' ' + 'Y的坐标是：' + y ;
            // 鼠标移动事件 mousemove
        })
    </script>
</body>
```
**拖登陆框案例**
在页面中拖拽的原理：鼠标按下并且移动，之后松开鼠标
触发事件是鼠标按下 mousedowm，鼠标移动mousemove鼠标松开mouseup
拖拽过程:鼠标移动过程中，获得最新的值赋值给模态框的left和top值，这样模态框可以跟着鼠标走了
鼠标按下触发的事件源是 最上面一行，就是 id 为 title
鼠标的坐标减去鼠标在盒子内的坐标, 才是模态框真正的位置。
```html
    <style>
        div{
            height: 300px;
            width: 600px;
            background-color: skyblue;
            margin: 400px auto;
        }
    </style>
</head>
<body>
    <div></div>
    <script>
        var div = document.querySelector('div');
        // 鼠标开始拖
        div.addEventListener('mousedown',function(e){
            // 获取鼠标的位置
            var x = e.pageX - this.offsetLeft;
            var y = e.pageY - this.offsetTop;
            // 鼠标移动时，把鼠标在页面中的坐标 - 鼠标在盒子里面的坐标
            div.addEventListener('mousemove',move)
            function move(e){
                div.style.marginLeft = e.pageX - x + 'px';
                div.style.marginTop = e.pageY - y + 'px';
            }
            //当鼠标放开 移除上面的事件
            div.addEventListener('mouseup',function(){
                div.removeEventListener('mousemove',move)
            })
        })
    </script>
</body>
```

**页面图片放大效果**
整个案例可以分为三个功能模块：

* 鼠标经过小图片盒子，黄色的遮挡层和大图片盒子显示，离开隐藏2个盒子功能
* 黄色的遮挡层跟随鼠标功能。
* 移动黄色遮挡层，大图片跟随移动功能。
```html
    <style>
    .ybb{
        position: relative;
        height: 600px;
        width: 400px;
        background-color: #ccc;
    }
    .mark{
        position: absolute;
        top: 0px;
        left: 0px;
        height: 200px;
        width: 200px;
        background-color: #FEDE4F;
        opacity: 0.5;
        cursor: move;
    }
    .big{
        position: absolute;
        top: 0;
        left: 450px;
        height: 800px;
        width: 600px;
        background-color: #ccc;
        overflow: hidden;
    }
    .big_img{
        position: relative;
        top: 0px;
        left: 0px;
    }
    </style>
    <script src="./ssbiaofdaan.js"></script>
</head>
<body>
    <div class="ybb">
       <img src="./saoji.jpg" alt="" width="100%" height="100%"> 
        <div class="mark"></div>
        <div class="big">
            <img class="big_img" src="./saoji.jpg" alt="" >
        </div>
    </div>
</body>
```
**JavaScript部分**
```javascript
// 保证页面加载完之后才执行js
window.addEventListener('load',function(){
    var ybb = document.querySelector('.ybb')
    var big = document.querySelector('.big')
    var mark = document.querySelector('.mark')
    // 进入小盒子出现
    ybb.addEventListener('mouseover',function(){
        mark.style.display = 'block';
        big.style.display = 'block';
       
    })
    // 进入小盒子消失
    ybb.addEventListener('mouseout',function(){
        mark.style.display = 'none';
        big.style.display = 'none';
    })
    // 黄色盒子移动
     ybb.addEventListener('mousemove',function(e){
    //  获取鼠标在小盒子的坐标
     var x = e.pageX - this.offsetLeft;       
     var y = e.pageY - this.offsetTop;  
    //  保证鼠标始终是遮挡层的中心
     var maxX = x - mark.offsetWidth / 2;
     var maxY = y - mark.offsetHeight / 2;
    //  保证遮挡层不会超过小盒子的判断
    //  小盒子最大移动宽度 = 小盒子的宽度 - 遮挡层的宽度 高度同理
     if(maxX <= 0){
        maxX = 0;
     }else if (maxX >= ybb.offsetWidth - mark.offsetWidth){
        maxX = ybb.offsetWidth - mark.offsetWidth;
     }
     if(maxY <= 0){
        maxY = 0;
     }else if (maxY >= ybb.offsetHeight - mark.offsetHeight){
        maxY = ybb.offsetHeight - mark.offsetHeight;
     }
// 遮挡层移动的距离
     mark.style.left = maxX  + 'px';     
     mark.style.top =  maxY+ 'px';   
// 小盒子最大移动 的 宽度和高度
     var maskMaxY = ybb.offsetHeight - mark.offsetHeight;
     var maskMaxX = ybb.offsetWidth - mark.offsetWidth;
// 大图区域 
// 大图片最大移动宽度 = 大图宽度 - 大盒子的宽度 高度同理
var big_img = document.querySelector('.big_img');
var bigMaxX = big_img.offsetWidth - big.offsetWidth;
var bigMaxY = big_img.offsetHeight - big.offsetHeight;
// 大图移动的距离
// 大图片的移动距离 = 遮挡层移动距离 * 大图片最大移动距离 / 遮挡层的最大移动距离
     var bigX = maxX * bigMaxX / maskMaxX; 
     var bigY = maxY * bigMaxY / maskMaxY; 
     big_img.style.left = -bigX + 'px';
     big_img.style.top = -bigY + 'px';
        })
})
```

#### 元素可视区 client 系列
`element.clientTop`  返回元素上边框的大小
`element.clientLeft`  返回元素左边框的大小
`element.clientWidth`  返回自身包括padding、内容区的宽度，不含边框，返回数值不带单位
`element.clientHeight`  返回自身包括padding、内容区的高度，不含边框，返回数值不带单位

#### 补充
**立刻执行函数：不需要调用，直接执行**
`(function(){ })()` 或者是 `(function(){ }  ( ))`

**主要作用：创建一个独立的作用域。避免了命名冲突问题**

**传递参数和具体写法**

```javascript
// 写法一:
(function(a,b){
    console.log(a + b);

}) (1,2)    //第二个小括号可以看作调用函数
// 写法二:
(function(a,b){
    console.log(a + b);

} (1,2))
```

**pageshow 事件**
比 load 事件更细节, 要给 window 对象添加
`e.persisted ` 返回true 就是表示该页面是从缓存取过来的

#### 元素 scroll 系列
scroll 翻译过来就是滚动的，我们使用scroll 系列的相关属性可以动态的得到该元素的大小、滚动距离等。

` element.scrollTop `    返回被卷去的上侧距离，返回数值不带单位
` element.scrollLeft `   返回被卷去的左侧距离，返回数值不带单位
` element.scrollWidth `  返回自身实际的宽度，不含边框，返回数值不带单位
` element.scrollHeight `  返回自身实际的高度，不含边框，返回数值不带单位

**scroll 滚动事件** 
页面被卷去的头部：可以通过window.pageYOffset 获得 如果是被卷去的左側 window.pageXOffset
注意：元素被卷去的头部是element.scrollTop ,如果是页面被卷去的头部则是window.pageYOffset
`window.pageYOffset` 有严重的兼容性问题

**兼容性：（了解就行）**
需要注意的是，页面被卷去的头部，有兼容性问题，因此被卷去的头部通常有如下几种写法
1.声明了DTD，使用document.documentElement.scrollTop
2.未声明 DTD，使用 document.body.crollTop

#### 三大系列 总结：
`element.offsetWidth`   返回自身包括padding 、**边框**、内容区的宽度，返回数值不带单位

`element.clientWidth`   **返回自身包括padding、内容区的宽度(超过部分不返回)**，不含边框，返回数值不带单位

`element.scrollWidth`   **返回自身实际的宽度(文字超出部分)，不含边框**，返回数值不带单位
 
**他们主要用法：**
1. offset系列经常用于获得元素位置 offsetLeft offsetTop
2. client经常用于获取元素大小   clientWidth clientHeight
3. scroll经常用于获取滚动距离 scrollTop scrollLeft
4. 注意页面滚动的距离通过w  indow.pagexoffset 获得

#### mousemove  和 mouseenter 事件的差别
**mouseenter 鼠标事件**
当鼠标移动到元素上时就会触发mouseenter事件
类似mouseover，它们两者之间的差别是
**mouseover 鼠标经过自身盒子会触发，经过子盒子还会触发。**
**mouseenter 只会经过自身盒子触发**

**之所以这样，就是因为mouseenter不会冒泡**
跟 mouseenter 搭配鼠标离开 mouseleave 同样不会冒泡

---

#### JavaScript动画函数
**动画原理**
核心原理：通过定时器setlnterval 不断移动盒子位置。
实现步骤：
1. 获得盒子当前位置
2. 让盒子在当前位置加上1个移动距离
3. 利用定时器不断重复这个操作
4. 加一个结束定时器的条件
5. 注意此元素需要添加定位，才能使用 element.style.left
   
```html
    <style>
        div{
            position: relative;
            left: 0px;
            height:200px;
            width:200px;
            background-color: skyblue;
            text-align: center;
            line-height: 200px;
        }
    </style>
</head>
<body>
    <div>我免费了</div>
    <script>
        var div = document.querySelector('div');
        var times = setInterval(function(){
            if(div.offsetLeft >= 800){
                // 停止动画效果，实际上是停止定时器
                clearInterval(times);
            }
            div.style.left = div.offsetLeft + 1 + 'px';
        },500)
    </script>
```  

**动画函数的封装**

```javascript
// obj 是需要动画的函数 target是停止动画的条件 ，方便代码的复用
function animate(obj,target){
        var times = setInterval(function(){
            if(obj.offsetLeft >= target){
                // 停止动画效果，实际上是停止定时器
                clearInterval(times);
            }
            obj.style.left = obj.offsetLeft + 1 + 'px';
        },30)
}
```

**给不同的对象添加不同的定时器**
如果多个元素都使用这个动画函数，每次都要var声明定时器。我们可以给不同的元素使用不同的定时器（自
己专门用自己的定时器）。
核心原理：利用JS是一门动态语言，可以很方便的给**当前对象添加属性**。

```javascript
function animate(obj,target){
    // 将定时器变成obj的一个属性，减少内存的开辟
        obj.times = setInterval(function(){
            if(obj.offsetLeft >= target){
               clearInterval(obj.times);
            }
            obj.style.left = obj.offsetLeft + 1 + 'px';
        },30)
}
```

问题：**定时器可以存在多个，导致定时器越来越多，动画越来越快**
解决方法：` clearInterval(obj.times); `  
**在给obj添加定时器前 加` clearInterval(obj.times); ` 清掉以前的定时器**

#### 缓动动画原理
缓动动画就是让元素运动速度有所变化，最常见的是让速度慢慢停下来
思路：
1. 让盒子每次移动的距离慢慢变小，速度就会慢慢落下来。
2. 核心算发: (目标值 - 现在的位置）/ 10   做为每次移动的距离步长
3. 停止的条件是：让当前盒子位置等于目标位置就停止定时器


```javascript
function animate(obj,target){
        obj.times = setInterval(function(){
            // 步长值写在定时器里面,
           
            var step = (target - obj.offsetLeft) / 10;
             // 防止因为小数点出现,没有正好到目标位置的情况 : 防止倒退的时候,小数取得太大,出现问题,
            step = step > 0 ? Math.ceil(step) : Math.floor(step);
            if(obj.offsetLeft >= target){
               clearInterval(obj.times);
            }
            obj.style.left = obj.offsetLeft + step + 'px';
        },30)
}
```

匀速动画 就是 盒子是当前的位置 + 固定的值 10
缓动动画就是 盒子当前的位置 + 变化的值(目标值 - 现在的位置）/ 10)

#### 动画函数的回调函数
把函数当参数,传给动画函数
```javascript
function animate(obj,target,callback){
    //相当于 callback = function(){};
        obj.times = setInterval(function(){
            var step = (target - obj.offsetLeft) / 10;
            step = step > 0 ? Math.ceil(step) : Math.floor(step);
            if(obj.offsetLeft >= target){
               clearInterval(obj.times);
            if(callback()){ //存在就执行
               callback();
                }
            }
            obj.style.left = obj.offsetLeft + step + 'px';
        },30)
}

//  使用
    animate(div,800,function(){
        alert('hello');
    });
```

#### 把动画函数封装到独立的JS文件

#### 网页轮播图案例:
**节流阀**
通过定义开关函数，如果开就执行代码，在执行代码就关了节流阀，调用动画结束之后就打开节流阀，放开下一次代码的执行
[轮播图HTML部分](#html结构部分)
[轮播图JS部分](#js结构部分)

##### HTML结构部分**
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
        }
        .look {
            position: relative;
            margin: 0 auto;
            margin-top:50px;
            background:#ccc;
            width: 420px;
            height: 650px;
            overflow: hidden;
            list-style: none;
        }
        .img{
            position: absolute;
            top: 0px;
            left: 0px;
            width: 800%;
            height: 100%;
        }
        .img li{
            float: left;
            width: 420px;
            height: 100%;
            
        }
        .img li a img{
            width: 100%;
            height: 100%;
        }
        .but_L{
            display: none;
            position: absolute;
            top: 50%;
            transform: translate(0%,-50%) ;
            background-color: black;
            font-size: 45px;
            /* 透明度 */
            opacity: 0.3;
            color: #fff;
            z-index: 1;
        }   
        .but_R{
            display: none;
            position: absolute;
            right: 0px;
            top: 50%;
            transform: translate(0%,-50%) ;
            background-color: black;
            font-size: 45px;
            /* 透明度 */
            opacity: 0.3;
            color: #fff;
            z-index: 1;
        }
        /* 该功能使用js实现了 */
        /* .look:hover .display{
            display: block;
        } */
        .buttonS{
            position:absolute;
            bottom: 10px;
            left: 50%; 
            transform: translate(-50%,0);  
            z-index: 1;
        }
        .buttonS li{
            float: left;
            height: 15px;
            width: 15px;
            border-radius: 30px;
            border: 2px solid black;
            /* background-color: aqua; */
            margin-left: 6px;
            opacity: 0.5;
        }
        .aqua{
            background-color: aqua;
            
        }
    </style>
        <!-- 导入动画函数 -->
    <!-- <script src="./dh.js"></script> -->
    <script src="./index.js"></script>
</head>
<body>
    <div class="look">
        <ul class="img">
            <li><a href=""><img src="./轮播图1.jpg" alt=""></a></li>
            <li><a href=""><img src="./轮播图2.jpg" alt=""></a></li>
            <li><a href=""><img src="./轮播图4.jpg" alt=""></a></li>
            <li><a href=""><img src="./轮播图5.jpg" alt=""></a></li>
            <li><a href=""><img src="./轮播图6.jpg" alt=""></a></li>
            <li><a href=""><img src="./轮播图7.jpg" alt=""></a></li>
            <li><a href=""><img src="./轮播图8.jpg" alt=""></a></li>
        </ul>
        <div class="but_L display"> ＜ </div>
        <div class="but_R display"> ＞ </div>
        <ul class="buttonS">

        </ul>
    </div>
</body>
</html>
```
##### js结构部分
```javascript
// 动画函数，多次调用，写在这里
function animate(obj, target, callback) {
    //相当于 callback = function(){};
    clearInterval(obj.times);
    obj.times = setInterval(function () {
        var step = (target - obj.offsetLeft) / 10;
        step = step > 0 ? Math.ceil(step) : Math.floor(step);
        if (obj.offsetLeft == target) {
            clearInterval(obj.times);
            if (callback) {
                //存在就执行
                callback();
            }
            // callback &&　callback(); 更好的写法
        }
        obj.style.left = obj.offsetLeft + step + 'px';
    }, 15)
}
// 页面加载完毕，执行下面的代码
window.addEventListener('load', function () {
    var look = document.querySelector('.look');
    var img = document.querySelector('.img');
    var but_L = document.querySelector('.but_L');
    var but_R = document.querySelector('.but_R');
    var buttonS = document.querySelector('.buttonS');
    // 轮播图的显示尺寸，也是下面图片切换的参考尺寸
    var imgWidth = look.offsetWidth;
    // 自动播放时长
    var go_time = 1000;
    // 节流阀
    var flag = true;
    // 向左向右轮播图片的计数变量，也是图片判断的玩意
    var now = 0;

    // 自动播放定时器
    var times = setInterval(function () {
        but_R.click();
    }, go_time);


    // 跟 mouseenter 搭配鼠标离开 mouseleave 不会冒泡
    //  mouseente进入轮播图区域  就显示两个按钮
    look.addEventListener('mouseenter', function () {
        // 按钮显示
        but_L.style.display = 'block';
        but_R.style.display = 'block';
        // 清理自动播放
        clearInterval(times);
        times = null;
    })
    // 鼠标离开 mouseleave 
    look.addEventListener('mouseleave', function () {
        // 按钮不显示
        but_L.style.display = 'none';
        but_R.style.display = 'none';
        // 自动播放开启
        times = setInterval(function () {
            but_R.click();
        }, go_time);
    })

    // 生成下面的小点
    for (var i = 0; i < img.children.length; i++) {
        // 创建一个小li
        var li = document.createElement('li');
        // 给 li 自定义索引号
        li.setAttribute('index', i);
        // 添加 li 进 ul
        buttonS.appendChild(li);
        // 跳转图片部分
        // 主体对象是li
        buttonS.children[0].className = 'aqua';
        li.addEventListener('click', function () {
            // 小点改颜色
            for (var i = 0; i < buttonS.children.length; i++) {
                buttonS.children[i].className = '';
            }
            this.className = 'aqua';
            // 图片移动部分
            // 获取index，代表现在是哪一个图片
            var index = this.getAttribute('index');
            // 通过算法得到，要移动的位置，移动的位置 = 每一个图片的宽度 * 目前的图片数 
            var go = imgWidth * index;
            // 将图片数给到now
            now = index;
            // 执行动画，记得加 - 号
            animate(img, -go);
        })
    }
    // 复制第一张图片，放到最后去，实现无缝切换
    // 拷贝img的第一个子节点，放到 copy1里
    var copy1 = img.children[0].cloneNode(true);
    // 把copy1 添加到img子节点的最后
    img.appendChild(copy1);
    // 左按钮 
    but_L.addEventListener('click', function () {
        // 节流阀开就执行下面的代码
        if (flag) {
            // 关闭节流阀
            flag = false;
            if (now <= 0) {
                // 如果图片是第0张，那么执行下面的代码
                // 立刻飞到不存在的那一个图片，因为第一个图片的left是0，所以
                // -img..children.length 其实是存在是第最后一个图片，所以要+1
                img.style.left = (-img.children.length + 1) * imgWidth + 'px';
                // 然后索引号变成 图片个数 -1 ，也就是 索引号 7 ，也就是第八张
                now = img.children.length - 1;
                // 播放动画，获取目前的图片left值，然后将图片向左拉，所以要正值
                // 左移 正值 ，右移 负值
                animate(img, img.offsetLeft + imgWidth, function () {
                    // 执行完毕之后打开节流阀
                    flag = true;
                });
                // 索引号 -1 ，因为图片已经移动了
                now--;
            } else {
                // 如果不是第一张图片，那么直接执行图片左拉
                animate(img, img.offsetLeft + imgWidth, function () {
                    // 执行完毕之后打开节流阀
                    flag = true;
                });
                // 变索引号
                now--;
            }
            // 获取图片目前的索引号的小点
            var xyd = buttonS.children[now];
            //排他思想 删除其他所有图片的小点颜色
            for (var i = 0; i < buttonS.children.length; i++) {
                buttonS.children[i].className = '';
            }
            //  设置自己图片的小点颜色
            // 与右移不同，左移不需要判断是不是最后一个图，因为压根就不会影响
            xyd.className = 'aqua';
        }
    })
    // 右按钮
    but_R.addEventListener('click', function () {
        // 如果节流阀开，那么执行下面的代码
        if (flag) {
            // 节流阀关
            flag = false;
            // 如果现在 图片索引号 >= 图片的个数 - 1 就是刚刚好是,最后一张，也就是拷贝出来的那一张 
            if (now >= img.children.length - 1) {
                // 立刻设置left到0去，无缝回到 起点去
                img.style.left = 0 + 'px';
                // 将 now 复原为 0
                now = 0;
                // 然后执行动画
                // 图片距离左边的距离 - 图片要移动的距离 就是刚刚好移动一张图的距离
                // 动画执行完成之后，节流阀开
                animate(img, img.offsetLeft - imgWidth, function () {
                    flag = true;
                });
                // 之后 now 自加 1 ，因为现在是第二张图片
                now++;
            } else {
                // 如果不是最后一张图，那么直接移动一张图片的距离

                animate(img, img.offsetLeft - imgWidth, function () {
                    // 执行完毕之后打开节流阀
                    flag = true;
                });
                //  执行完毕之后，图片索引号要加 1
                now++;
            }
            // 获取目前图片索引号的小点
            var xyd = buttonS.children[now];
            // 排他思想，将其他小点取消颜色
            for (var i = 0; i < buttonS.children.length; i++) {
                buttonS.children[i].className = '';
            }
            // 如果现在是最后一个图片，那么就改第一个小点
            // 因为第一张图片从来没有在右移按钮出现过，在不改变上面的代码的情况下，只能在这里修改
            if (now >= img.children.length - 1) {
                buttonS.children[0].className = 'aqua';
            } else {
                // 如果不是，就改图片对应的小点
                xyd.className = 'aqua';
            }
        }
    })

})
```
#### 回到顶部动画案例：
`window.scroll(X, Y);` 窗口滚动到某个位置 不需要加入px
```javascript
function animate(obj,target,callback){
    //相当于 callback = function(){};
        obj.times = setInterval(function(){
            var step = (target - window.pageYOffset) / 10;
            step = step > 0 ? Math.ceil(step) : Math.floor(step);
            if(window.pageYOffset == target){
               clearInterval(obj.times);
            if(callback){ //存在就执行
               callback();
                }
                // callback &&　callback(); 更好的写法
             }
            // obj.style.left = obj.offsetLeft + step + 'px';
            windows.scroll(0,window.pageYOffset + step);
        },15)
}
// 调用：
animate(windows,0);
```


---
## JS移动端特效
####　触屏事件
移动端浏览器兼容性较好，我们不需要考虑以前JS的兼容性问题，可以放心的使用原生 JS 书写效果，但是移动
端也有自己独特的地方。比如**触屏事件touch（也称触摸事件）**，Android和IOS都有。。
touch 对象代表一个触摸点。触摸点可能是一根手指，也可能是一根触摸笔。触屏事件可响应用户手指
`touchstart` 手指触摸到一个DOM 元素时触发
`touchmove` 手指在一个DOM元素上滑动时触发
`touchend` 手指从一个DOM元素上移开时触发

#### 触摸事件对象
TouchEvent 是一类描述手指在鱼中草平面（角草屏屏 钟草板等）的状态变化的事件。这类事件甲于描述一个或多个触点，使开发者可以检测触点的移动，触点的增加和减少，等等
` touchstart、touchmove、touchend ` 三个事件都会各自有事件对象。

` touches` 正在**触摸屏幕**的所有手指的一个列表
` targetTouches` 正在触摸**当前 DOM 元素**上的手指的一个列表
` changedTouches` 手指状态发生了改变的列表，从无到有，**从有到无变化**

**区别：** 当我们手指离开屏幕的时候，就没有了 touches 和 targetTouches 列表但是会有 changedTouches


**因为平时我们都是给元素注册触摸事件，所以重点记住targetTocuhes**
`e.targetTouches[0] `
targetTouches[0] 就可以得到正在触摸dom元素的第一个手指的相关信息比如 手指的坐标等等

#### 移动端拖元素
1. touchstart、touchmove、touchend可以实现拖动元素
2. 但是拖动元素需要当前手指的坐标值我们可以使用 targetTouches[0]里面的pagex和pageY
`e.preventDefault();` 阻止了屏幕滚动
```html
    <style>
        div {
            position: relative;
            height: 300px;
            width: 300px;
            background-color: skyblue;
            left: 20px;
            top: 20px;
        }
    </style>
<body>
    <div></div>
    <script>
        var div = document.querySelector('div');
        // 定义手指原来的位置
        var startX = 0;
        var startY = 0;
        // 定义盒子原来的位置
        var X = 0;
        var Y = 0;
        // 开始拖
        div.addEventListener('touchstart', function (e) {
            // 获取手指的初始化坐标和盒子的初始坐标
            startX = e.targetTouches[0].pageX;
            startY = e.targetTouches[0].pageY;
            X = this.offsetLeft;
            Y = this.offsetHeight;
            })
            // 手指头移动之后的坐标减少去手指的初始化坐标
        div.addEventListener('touchmove', function (e) {
                var moveX = e.targetTouches[0].pageX - startX;
                var moveY = e.targetTouches[0].pageY - startY;
            //移动后盒子的坐标 =   盒子原来的位置 + 手指移动的距离
                this.style.left = X + moveX + 'px';
                this.style.top = Y + moveY + 'px';
                //阻止了屏幕滚动事件
                e.preventDefault();
        })
    </script>
```
#### 移动轮播图
这里不写详细代码，移动端主要是通过 CSS3的偏移量属性来做轮播图，因为小点点击消失了，实际上代码更少，**相对来说**，另一方面是我忘记了
#### 监听过渡事件
` addEventListener('transitionend', function() { `

#### classList 属性
classList属性是HTML5新增的一个属性，返回元素的类名。但是ie10以上版本支持。
1．添加类名是在后面追加类名不会覆盖以前的类名 注意前面不需要加。
`classList.add('three');`
2.删除类名
`classList.remove('one');`
3.切换类
`.classList.toggle('bg');`
#### 手机端的click的延迟问题
多动端 click 事件会有300ms的延时，原因是移动端屏幕双击会缩放(double tap to zOOm) 页面。
解决方案：
**1.禁用缩放。浏览器禁用默认的双击缩放行为并且去掉300ms的点击延迟。**
`<meta name="viewport" content=" user-scalable=no">`
` user-scalable=no `
**2.利用touch事件自己封装这个事件解决300ms延迟。**
原理就是：
1.当我们手指触摸屏幕，记录当前触摸时间
2.当我们手指离开屏幕，用离开的时间减去触摸的时间
3.如果时间小于150ms，并且没有滑动过屏幕，那么我们就定义为点击
```javascript
//封装tap，解决click 300ms 延时
        function tap(obj, callback) {
            var isMove = false;
            var startTime = 0;// 记录触摸时候的时间变量
            obj.addEventListener('touchstart', function (e) {
                startTime = Date.now(); // 记录触摸时间
            });
            obj.addEventListener('touchmove', function (e) {
                isMove = true;// 看是否有滑动，有消动算拖拽，不算点击
            });
            obj.addEventListener('touchend', function (e) {
                if (!isMove && (Date.now() - startTime) < 150) { // 如果手指触摸和离开时间小于150ms 算点击
                    callback && callback(); //执行回调函数
                }
                isMove = false;
                // 取反 重置
                startTime = O;
            });
        }
        //调用
        tap(div, function () { 
            //执行代码 1
        });
```
**3.fastclick 插件**



## 插件

什么是插件？
移动端要求的是快速开发，所以我们经常会借助于一些插件来帮我完成操作，那么什么是插件呢？
**JS插件是js文件**，它遵循一定规范编写，方便程序展示效果，拥有特定功能且方便调用。如轮播图和瀑布流插件。
**特点：它一般是为了解决某个问题而专门存在，其功能单一，并且比较小。**

#### fastclick 插件

fastclick 是为了解决 300ms 问题的插件
```javascript
// 导入js 文件
if ('addEventListener' in document) {
    document.addEventListener('DOMContentLoaded', function() {
    Fastclick.attach(document.body);
    }, false);
}
```
#### swiper 多功能插件（有中文的）
swiper 多功能插件
引入dist的 css 和 js 文件
在网页找到了编号,打开demo网页，直接复制demo的相关代码

#### 其他移动端常见插件
superslide : http://www.superslide2.com/
iscroll : https://github.com/cubiq/iscroll

#### 移动端视频插件 zy.media.js

## 框架
**框架，顾名思义就是一套架构，它会基于自身的特点向用户提供一套较为完整的解决方案。框架的控制权在框架
本身，使用者要按照框架所规定的某种规范进行开发。**
前端常用的框架有 Bootstrap、Vue、Angular、React等。既能开发PC端，也能开发移动端
前端常用的移动端插件有swiper、superslide、iscrol等。

**框架：大而全，一整套解决方案
插件∶ 小而专一，某个功能的解决方案**



## 本地数据存储
随着互联网的快速发展，基于网页的应用越来越普遍，同时也变的越来越复杂，为了满足各种各样的需求，会经
常性在本地存储大量的数据，HTML5规范提出了相关解决方案。

#### 本地存储特性
1、数据存储在用户浏览器中
2、设置、读取方便、甚至页面刷新不丢失数据
3、容量较大，sessionStorage约5M、localStorage约20M

#### window.sessionStorage
**1、生命周期为关闭浏览器窗口**
**2、在同一个窗口(页面)下数据可以共享**
3、以键值对的形式存储使用
4、windows可以不写

**代码：**
`sessionStorage.setltem(key,value)` 存储数据 key 是 名字 ，value 是 数据
`sessionStorage.getItem(key);`  获取数据
`sessionStorage.removeItem(key);` 删除数据
`sessionStorage.clear();` 删除数据

可以在浏览器 Application 里面的 Session Storage 看到

####  window.localStorage
**1、生命周期永久生效，除非手动删除否则关闭页面也会存在**
**2、可以多窗口（页面）共享（同一浏览器可以共享）**
3、 以键值对的形式存储使用
4、windows可以不写

**代码：**
`localStorage.setltem(key,value)` 存储数据 key 是 名字 ，value 是 数据
`localStorage.getItem(key);`  获取数据
`localStorage.removeItem(key);` 删除数据
`localStorage.clear();` 删除数据

#### 用户名案例：
**change事件**
1. input标签
监听input值的变化，当值发生变化，失去焦点后触发change事件。对于单选框和复选框，当用户鼠标做出选择时，立即触发change事件；
2. select标签
对于下拉选择框，当用户做出选择时，立即触发change事件；
3. textarea标签
监听textarea值的变化，当值发生变化，失去焦点后触发change事件。

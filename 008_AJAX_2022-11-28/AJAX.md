## AJAX
**==AJAX==** 全称为Asynchronous JavaScript And XML,就是 异步的JS 和 XML。通过 *AJAX* 可以在浏览器中向服务器发送异步请求，最大的优势：**==无刷新获取数据==**。
AUAX不是新的编程语言，而是一种将现有的标准组合在一起使用的新方式。

### XML 和 JSON
XML可扩展标记语言。
**XML被设计用来传输和存储数据。**
XML和HTML类似，不同的是HTML中都是预定义标签，而ML中没有预定义标签，全都是自定义标签，用来表示一些数据。
```XML
<!-- 比如说我有一个学生数据： -->
<!-- name="孙悟空"；age=18;gender="男"; -->
<!-- 用XML表示： -->
<student>
<name>孙悟空</name>
<age>18</age>
<gender>男</gender>.
</student>
```
但目前**己经被==JSON==取代了。**
用JSON表示：
`{"name":"孙悟空"，"age":18,"gender'":"男"}`

### AJAX 的特点
**优点:**
1. 可以无需刷新页面而与服务器端进行通信
2. 允许你根据用户事件来更新部分页面内容。
   
**缺点：**
1. 没有浏贤历史，不能回退
2. 存在跨域问题（同源）
3. SEO 不友好

### HTTP 协议：
**HTTP**(hypertext transport protocol) 协议『超文本传输协议」，协议详细规定了浏览器和万维网服务器之间互相通信的规则。
约定，规则

##### 请求报文
**重点是格式和参数**
```http
行      GET /url HTTP/1.1    分别是: 请求类型 url  协议版本
头      Host: atguigu.com
        Cookie: name=guigu
        Content-type: application/x-www-form-urlencoded
        User-Agent: chrome 83
空行
体      username=admin&password=admin
```
##### 响应报文
```http
行      HTTP/1.1 200 OK    分别是: 协议版本 响应时间 状态码（404 401 ……）
头      Content-Type:text/html;charset=utf-8
        Content-length:2048
        Content-encoding:gzip 
空行
体      <html>
            <head>
            </head>
            <body>
                <h1>尚硅谷</h1>
            </body>
        </html>
```
 ### AJAX各种各样的AJAX请求发送方法
#### 安装node.js 和 express 框架

**安装node.js**在这里省略，具体去百度

```JavaScript
// 在VS Code控制台执行
npm init --yes
// 初始化 node 管理包
// 安装 express 框架
npm i express
// 创建文件 
// 写入以下代码


// 引入express
const express = require('express');
// 创建应用对象
const app = express();
// 创建路由规则
//request是对请求报文的封装
//response是对响应报文的封装
app.get('/',(request,response)=>{
    // 简单的响应
    response.send('hello AJax');
});

// 端口监听启动服务
app.listen(8001,()=>{
    console.log("服务启动成功，8001端口正在运行");
});

// 在控制台执行 
node 文件名.js 
// 浏览器打开 127.0.0.1:端口号
// 一切正常 来到下一步
```
#### AJAX 案例准备
创建 html 文件 和 JS 文件 分别填入以下代码

html
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        button{
            width: 250px;
            height: 50px;
            border-radius: 10px;
            font-size: 20px;
            margin-bottom: 20px;
        }
        .nr{
            width: 500px;
            height: 500px;
            border: 2px solid skyblue;
            background-color: #c8adc4;
            padding: 20px;
            font-size: 24px;
            color: #fff;
        }
        
    </style>
</head>
<body>
    <button>点击发生请求</button>
    <div class="nr" id="nr"></div>
</body>
</html>
```

js

```javascript
// 引入express
const express = require('express');

// 创建应用对象
const app = express();

// 创建路由规则
//request是对请求报文的封装
//response是对响应报文的封装
app.get('/server',(request,response)=>{
    // 设置响应头 设置允许跨越
    response.setHeader('Access-Control-Allow-Origin','*')

    // 简单的响应
    response.send('hello AJax');
});

// 端口监听启动服务
app.listen(8001,()=>{
    console.log("服务启动成功，8001端口正在运行");
});
```
运行服务,然后打开浏览器 输入` 127.0.0.1:8001/server  `
显示出` hello Ajax `就是正常运行
如果端口已被上一个案例占用,回到上一个控制台 输入 `Ctrl + C ` 释放或是 改变新服务的端口


#### AJAX请求的基本操作

```javascript
 // 获取button 元素
const btn = document.querySelecto('button');
// 获取 div 元素
const div = document.querySelector('nr');

btn.addEventListener('click',function(){
    console.log("点击了捏");
    // 1.创建对象
    const xhr = new XMLHttpRequest();
    // 2.初始化 设置请求方法和 url
    xhr.open('GET','http://127.0.01:8001/server');
    // 3.发送
    xhr.send();
    // 4.事件绑定 处理服务端返回的结果
    // on when 当...的时候
    // readystat 是xhr 对象中的属性,表示态 0 1 2 3 4 
    // change 改变 
    xhr.onreadystatechange = function(){
        // 判断(判断服务端返回了所有的结果)
        if(xhr.readyState === 4){
            // 判断响应状态码 200 404 403401 500
            // 一般200左右都算 成功
            if (xhr.status >= 200 && xhrstatus < 300) {
                // 处理结果 行 头 空行 体
                // 1.响应行
                // 响应的状态码
                console.log(xhr.status);
                // 状态字符串
                console.log(xhrstatusText);
                // 所有的响应头
                console.log(xhrgetAllResponseHeaders);
                // 响应体
                console.log(xhrresponse);
                // 设置div的内容
                div.innerHTML = xhrresponse;
            }else{
            }
        }
    }
})
```
点击按钮，实现了响应体内容的改变，在没有刷新网页的情况下

#### AJAX 设置请求参数
` xhr.open('GET','http://127.0.0.1:8001/server'); `

在后面加
` xhr.open('GET','http://127.0.0.1:8001/server?a=100&b=400'); `

在url的后面加 `?` 参数是 ` 参数名 = 参数值 ` 不够就 ` & `

`?a=100&b=400`

#### AJAX POST请求
```javascript
       div.addEventListener("mouseover",function(){
            console.log('1');
            // 创建对象
            const xhr = new XMLHttpRequest();
            // 初始化
            xhr.open('POST','http://127.0.0.1:8001/server');
            // 发送
            xhr.send('a=1000&c=200');
            // 事件绑定
            xhr.onreadystatechange = function(){
                if(xhr.readyState === 4 ){
                    if(xhr.status >= 200 && xhr.status < 300){
                        // 处理服务端的返回结果
                        div.innerHTML = xhr.response;
                    }
                }
            }
        })

// 服务端
// 引入express
const express = require('express');

// 创建应用对象
const app = express();

// 创建路由规则
//request是对请求报文的封装
//response是对响应报文的封装
app.get('/server',(request,response)=>{
    // 设置响应头 设置允许跨越
    response.setHeader('Access-Control-Allow-Origin','*')

    // 简单的响应
    response.send('hello AJax');
});



// 和get请求的区别  主要是这里
app.post('/server',(request,response)=>{
    // 设置响应头 设置允许跨越
    response.setHeader('Access-Control-Allow-Origin','*')

    // 简单的响应
    response.send('hello AJax POST');
});
// 端口监听启动服务
app.listen(8001,()=>{
    console.log("服务启动成功，8001端口正在运行");
});
```
#### AJAX POST请求的参数设置
            
在 `xhr.send('a=1000&c=200'); ` 里面添加


#### AJAX 设置请求头的内容
```JavaScript
div.addEventListener("mouseover",function(){
        console.log('1');
        // 创建对象
        const xhr = new XMLHttpRequest();
        // 初始化
        xhr.open('POST','http://127.0.0.1:8001/server');
        // 设置请求头
        //                     参数类型
        xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        // 自定义请求头
        xhr.setRequestHeader('name','hello');
        // 发送
        xhr.send('a=1000&c=200');
        // 事件绑定
        xhr.onreadystatechange = function(){
            if(xhr.readyState === 4 ){
                if(xhr.status >= 200 && xhr.status < 300){
                    // 处理服务端的返回结果
                    div.innerHTML = xhr.response;
                }
            }
        }
});
```
#### 服务端响应JSON数据
```javascript
app.all('/Json-server',(request,response)=>{
    // 设置响应头 设置允许跨越
    response.setHeader('Access-Control-Allow-Origin','*');
    // 设置响应头 允许所有类型响应头
    // 还要把post 改成 all
    response.setHeader('Access-Control-Allow-Headers','*');
    // 数据的响应
    const date = {
        name: 'zhou'
    };
    
	//转换为字符串
	// let str = JSON.stringify(date);

	//  设置响应体  
	// 这里的响应体只能发送 字符串 和 二进制缓存 ,所有才需要上面的转换
    // 新版本可以直接发送对象了,不过客户端需要转换格式,在客户端设置响应体数据类型之后,客户端也不需要转换
    response.send(date);
});

div.addEventListener("mouseover",function(){
    console.log('1');
    // 创建对象
    const xhr = new XMLHttpRequest();
    // 自动转换的时候要使用
    // 设置响应体数据类型
    xhr.responseType = 'json';
    // 初始化
    xhr.open('GET','http://127.0.0.1:8001/Json-server');
    // 发送
    xhr.send();
    // 事件绑定
    xhr.onreadystatechange = function(){
        if(xhr.readyState === 4 ){
            if(xhr.status >= 200 && xhr.status < 300){
                // 处理服务端的返回结果
                // 手动数据转换
                // let date = JSON.parse(xhr.response);
                // div.innerHTML = date.name;
                
                // 自动转换的代码
                div.innerHTML = xhr.response.name;
                console.log(xhr.response)
            }
        }
    }
});
```
#### 安装 nodemon (自动重新启动服务)
在控制台使用 `npm install -g nodemon` 完成安装

启动服务:`nodemon.cmd 服务文件名`

保存之后,不需要重新启动服务了,会自动启动

#### IE浏览器缓存问题
IE浏览器在同一个请求时会优先走缓存，而不是重新请求，所以要保证每一次请求都是新的请求。
解决方法：
在请求的URL里面加入一个会变的值，即 **?t=' + Date.now()**
```javascript
 btn.addEventListener('click',function(){
            console.log("我被点击了");
            const xhr = new XMLHttpRequest();
            //因为Ie会走缓存，给下面的URL添加这个( ?t=' + Date.now()  )，解决缓存问题，
            xhr.open("GET",'http://127.0.0.1:8001/ie?t=' + Date.now());
            xhr.send();
            xhr.onreadystatechange = function(){
                if(xhr.readyState == 4){
                    if(xhr.status  >= 200 && xhr.readyState < 300)
                    div.innerHTML = xhr.response;
                }
            }

        });
```

#### 请求超时与网络延迟的处理
```JavaScript
            const xhr = new XMLHttpRequest();
            // 超过设置时间就作废
            xhr.timeout = 2000;
            // 超时的回调函数
            xhr.ontimeout = function(){
                div.innerHTML = "超时了,请你重新试一试吧!";
            }
            // 网络错误的回调函数
            xhr.onerror = () =>{
                div.innerHTML = "你的网络似乎不大好!";
            }
            xhr.open("GET",'http://127.0.0.1:8001/delay');
            xhr.send();
```
#### 取消AJAX请求
对当前 AJAX 连接对象使用 abort 方法即可.
注意点: 在前面的代码中,连接对象都在点击事件内,且为const定义的常量,无法被其他方法调用,需要做出改变,将**连接对象提前声明(let)到方法外**,就可以在其他的监听方法中调用了。
```html
<button class="fs">
        发送请求
    </button>
    <button class="qx">
        取消发送
    </button>

    <div class="nr" id="nr"></div>
    <script>
        const fs = document.querySelector('.fs');
        const qx = document.querySelector('.qx');
        const div = document.querySelector('.nr');
        let xhr = null;
        fs.addEventListener('click', function () {
            console.log("我被点击了");
            xhr = new XMLHttpRequest();
            xhr.onerror = () => {
                div.innerHTML = "你的网络似乎不大好!";
            }
            xhr.open("GET", 'http://127.0.0.1:8001/delay');
            xhr.send();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4) {
                    if (xhr.status >= 200 && xhr.readyState < 300)
                        div.innerHTML = xhr.response;
                }
            }
        });
        qx.onclick = () =>{
            xhr.abort();
        }
```

#### AJAX重复发生请求的问题
使用节流阀。
```javascript
        const fs = document.querySelector('.fs');
        const qx = document.querySelector('.qx');
        const div = document.querySelector('.nr');
        let xhr = null;
        // 定义标识变量
        let isSending = false;

        fs.addEventListener('click', function () {
            console.log("我被点击了");
            // 如果正在发送就取消该请求。
            if(isSending) xhr.abort();
            xhr = new XMLHttpRequest();
            
            //修改标识变量
            isSending = true;

            xhr.open("GET", 'http://127.0.0.1:8001/delay');
            xhr.send();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4) {
                    //修改标识变量
                    isSending = false;

                    if (xhr.status >= 200 && xhr.readyState < 300)
                        div.innerHTML = xhr.response;
                }
            }
        });
 ```
#### Jquery中发送AJAX请求

```javascript
    // get 加了数据类型就可以变成一个对象
          $('button').eq(0).click(function(){
            $.get('http://127.0.0.1:8001/JQ',{a:100,b:200},function(data){
                console.log(data);
            },'json')
          })
          // post 没有说明数据类型就可以只是一个字符串
          $('button').eq(1).click(function(){
            $.post('http://127.0.0.1:8001/JQ',{a:100,b:200},function(data){
                console.log(data);
            },)
          })

          //AJAX 通用方法
          $('button').eq(2).click(function(){
          $.ajax({
            // URL
            url:'http://127.0.0.1:8001/JQ',
            // 参数
            data:{a:100,b:200},
            // 请求类型
            type:'GET',
            // 响应体结果设置
            dataType:'json',
            // 成功的回调：
            success:function(data){
                console.log(data);
            },
            //超过时间
            timeout:2000,
            error:function(){
                console.log('出错了！');
            },
            // 头信息的设置
            headers:{
                c:300,
                d:400
            }
          })
         })
        
```
#### Axios发送AJAX请求
```javascript
        // 配置baseURL 简化链接
        axios.defaults.baseURL = 'http://127.0.0.1:8001';
        //GET
        btn1.onclick = function () {
            axios.get("http://127.0.0.1:8001/axios", {
                //URL参数
                params: {
                    id: 10086,
                    vip: 9
                },
                headers: {
                    name: 'love',
                    age: 20
                },
            }).then(value => {
                console.log(value);
            });
        }
        // POST
        btn2.onclick = function () {
            axios.post('http://127.0.0.1:8001/axios',
                {
                    // 请求体
                    username: 'admin',
                    passwordd: 'admin'
                }, {
                //URL参数
                params: {
                    id: 110,
                    vip: 999
                },
                // 请求头 这里面不能放中文，否则出问题
                headers: {
                    name: 'xiaom',
                    age: 20
                }
            })
        }
        btn3.onclick = () => {
            axios({
                // 请求方法：
                method: 'post',
                // URL
                url: 'http://127.0.0.1:8001/axios',
                // URL参数
                params: {
                    iphone: 1881000231,
                    age: 20
                },
                // 请求头
                headers: {
                    name: 'dddaaa',
                    age: 50
                },
                // 请求体
                data: {
                    username: 'admin',
                    passwordd: 'admin'
                }
            }).then(response => {
                //响应状态码
                console.log(response.status);
                //响应状态字符串
                console.log(response.statusText);
                //响应头信息
                console.log(response.headers);
                //响应体
                console.log(Response.data);
            })
        }
```

#### fetch函数发送AJAX请求
```javascript
        btn1.onclick = () =>{
            fetch('http://127.0.0.1:8001/fetch?id=2',{

                // 请求方法 
                // method:'POST',
                method:'post',
                headers:{
                    name:'huawei',
                    age:20
                },
                // 请求体
                body:'username=admin&password=hello'
            }).then(Request=>{
            //    return Request.text();
                return Request.json();
            }).then(Request => {
                console.log(Request);
            })
        }
```
### AJAX跨域
#### 同源策略
==**同源策略：协议、域名、端口号必须完全相同，是浏览器的一种安全策略**==
==**违背同源策略就是跨域。**==
==**AJAX默认遵循同源策略**==
```javascript
// 客户端
 btn.onclick = () =>{
            const x = new XMLHttpRequest();
            // 满足同源策略，所以URL可以省略一部分
            x.open("GET",'/data');
            // 发送
            x.send();
            x.onreadystatechange = function(){
                if(x.readyState == 4){
                    if(x.status >= 200 && x.status < 300){
                        console.log(x.response);
                    }
                }
            }
        }
// 服务端
const { request, response } = require('express');
const express = require('express');
const app = express();

app.get('/home',(request,response)=>{
    response.sendFile(__dirname + '/index.html')
})

app.get('/data',(request,response)=>{
    response.send('用户数据')
})

app.listen(8002,()=>{
    console.log('服务器启动完成！');
})
```

### 跨域解决方法
#### 原生JSONP
JSONP(JSON with Padding),是==**一个非官方的跨域解决方案**==，纯粹凭借程序员的聪明才智开发出来，==**只支持get请求。**==

在网页有一些标签天往具有跨域能力，比如：img link iframe script。
JSONP就是利用script标签的跨域能力来发送请求的

**使用方法：**
```javascript

```
#### Jquery的JSONP方法

```javascript

```

#### CORS
CORS(Cross-Origin Resource Sharing),跨域资源共享。CORS是官方的跨域解决方案，它的特点是不需要在客户端做任何特殊的操作，完全在服务器中进行处理，支持get和post请求。跨域资源共享标准新增了一组HTTP首部字段，允许服务器声明哪些源站通过浏览器有权限访问哪些资源

**CORS是通过设置一个响应头来告诉浏览器，该请求允许跨域，浏览器收到该响应以后就会对响应放行。**

在前面的已经出现过了，在服务端添加相关代码
```javascript
response.setHeader('Access-Control-Allow-Origin','*')
response.setHeader("Access-Control-Allow-Headers",'*')
response.setHeader("Access-Control-Allow-Method",'*')
```
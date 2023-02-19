### 命令行称口（小黑屏、shell、终端、cmd窗口）

#### 常用指令
` dir ` 列出当前文件夹的所有的文件
`cd 目录 ` 可以进入指定的文件夹
> ` . ` 表示当前目录
> ` ..` 表示上一级目录

`md 文件夹名` 创建文件夹
`rd 文件名` 删除文件夹
`文件名 ` 打开文件


#### 环境变量(Windows系统的变量)
`path`:当我们在命令行窗口打开一个文件，或调用一个程序时，系统会首先在当前目录下寻找文件程序，如果找到了则直接打开如果没有找到则会依次到环境变量path的路径中寻找

所以我们可以将一些经常需要访问的程序和文件的路径添加到path中，这样我们就可以在任意位置来访问这些文件和程序了

### 进程和线程

#### 进程
- 进程负责为程序的运行提供必备的环境
- 进程就相当于工厂中的车间

#### 线程
- 线程是计算机中最小的计算单位,线程负责执行进程的程序
- 线程就相当于工厂中的工人

#### 单线程
Js是单线程的

#### 多线程



## Node.js

### Node简介
- Node.js是一个能够在服务器端运行JavaScript的开放源代码跨平台     **JavaScript运行环境**。

- Node采用Google开发的V8引擎运行js代码，使用 ==事件驱动，非阻塞和异步I/O模型等技术== 来提高性能，可优化应用程序的传输量和规模。

- Node大部分基本模块都用)JavaScript编写。在Node出现之前JS通常作为客户端程序设计语言使申，以切JS写出的程序常在用户的浏览器上运行。

- 目前，Node已被IBM、Microsoft、Yahoo!、Walmart、Groupon、SAP、LinkedIn、Rakuten、PayPal、Voxeri和GoDaddy等企业采用。

### I/O(Input/Output)
- I/O操作指的是对磁盘的读写操作

### Node
- Node是对ES标准一个实现，Node也是一个JS引擎
- 通过Node可以使js代码在服务器端执行
- Node仅仅对ES标准进行了实现，所以在Node中不包含DOM 和 BOM	
- Node中可以使用所有的内建对象
	String Number Boolean Math Date RegExp Function Object Array
	而BOM和DOM都不能使用
		但是可以使用 console 也可以使用定时器（setTimeout() setInterval()）
			
- Node可以在后台来编写服务器
	Node编写服务器都是单线程的服务器
	- 进程
		- 进程就是一个一个的工作计划（工厂中的车间）
	- 线程
		- 线程是计算机最小的运算单位（工厂中的工人）
		线程是干活的
				
- 传统的服务器都是多线程的
	- 每进来一个请求，就创建一个线程去处理请求
		
- Node的服务器单线程的
	- Node处理请求时是单线程，但是在后台拥有一个I/O线程池

### 下载LTS版本的Node并安装
https://nodejs.org/zh-cn/

在cmd 输入 `node -v`验证是否安装成功。 

### Node执行Js文件
` node 文件名.js`

### Node模块化
VScode安装 `node-snippets`

如果程序设计的规模达到了一定程度，则必须对其进行模块化。

模块化可以有多种形式，但至少应该提供能够将代码分割为多个源文件的机制。

CommonJS的模块功能可以帮我们解决该问题。

#### 模块的定义
**在node中一个js文件就是一个模块**

#### 模块的引用
使用：` require()` 函数来引入一个模块
例子：` var 变量 = require("模块的路径");` 相对路径必须要以`.`开始
引入的模块是一个对象

默认情况下在js文件中编写的内容，都是运行在一个独立的函数中，外部的模块无法访问

**使用 exports (导出) 向外部暴露变量和方法：**
`exports.属性 = 属性值; `
`exports.方法 = 函数; `

#### 模块标识 
上面的模块路径实际上就是模块标识
` var 变量 = require("模块标识");`

node是通过模块的标识来寻找模块的
对于核心模块（npm中下载的模块），直接使用模块的名字对其进行引入
` var fs = require("fs"); `
` var express = require("express");`

#### 其他
在node中有一个全局对象 global ,它的作用和网页中 window 类似
在全局中创建的变量都会作为 global 的属性保存
在全局中创建的函数都会作为 global 的方法保存

当nod在执行模块中的代码时，它会首先在代码的最顶部，添加如下代码
`function (exports,require,module,filename,dirname){`

在代码的最底部，添加如下代码：
`}`

实际上模块中的代码都是包装在一个函数中执行的，并且在函数执行时，传递进了五个实参：
**exports：** 该对象用来将变量或函数暴露到外部

**require：** 函数，用来引入外部的模块

**module：**
>module 代表的就是模块本身
exports 只是模块的一个属性
既可以使用 module.exports 导出，也可以使用 exports

**filename：** 当前模块的完整路径

**dirname：** 当前模块所在文件夹的路径

```javascript
// 会报错，因为
//exports = module.exports
exports = {
    name:"猪八戒"，
    age:28,
    sayName:function ()
    console.log("我是猪八戒")：
};
// 如果是就正常
module.exports = {
    name:"猪八戒"，
    age:28,
    sayName:function ()
    console.log("我是猪八戒")：
};
```
#### exports 和 module.exports`
- 通过 `exports` 只能使用 `. `的方式来向外暴露内部变量 `exports.xxx = xxx`
- 而`module.exports`既可以通过`.`的形式，也可以直接赋值
`module.exports.xxx = xxx;`
`module.exports = { }`
不知道怎么选，就用 module.exports

### 包（package）
包实际上就是一个压缩文件，解压以后为目录。符合规范的目录。
- 将多个模块组合为一个完整的功能，就是一个包
- 包结构
	- bin
		- 二进制的可执行文件，一般都是一些工具包中才有
	- lib
		- js文件
	- doc
		- 文档
	- test
		- 测试代码
	- package.json
		- 包的描述文件
		
- package.json	
	- 它是一个json格式的文件，在它里面保存了包各种相关的信息
		name 包名
		version 版本
		dependencies 依赖
		main 包的主要的文件
		bin 可执行文件

### NPM （Node Package Manager node的包管理器）
对于Node而言，NPM帮助其完成了第三方模块的发布、安装和依赖等。借助NPMNode与第三方模块之间形成了很好的一个生态系统。
- 通过npm可以对node中的包进行上传、下载、搜索等操作
- npm会在安装完node以后，自动安装
- npm的常用指令
	npm -v 查看npm的版本
	npm version 查看所有模块的版本
	npm s/search 包名 搜索包	
	npm i/install 包名 安装指定的包
	npm init 初始化项目（创建package.json）
	npm r/remove 包名 删除一个包
	npm i/install 包名 --save 安装指定的包并添加依赖（新的版本默认就是这样了）
	npm i/install 包名 -g 全局安装（一般都是一些工具）
	npm i/install 安装当前项目所依赖的包

默认会安装在项目文件夹下，会自己新建一个文件夹放相关内容。

### CNPM 
下载太过大的包或者是服务器无法连接,可以通过配置镜像服务器，来提高下载速度。
`npm install -g cnpm --registry=https://registry.npmmirror.com`
之后通过使用 `cnpm` 命令即可 `cnpm i/install 安装当前项目所依赖的包`

### Node搜索包的流程
node在使用模块名字来引入模块时，它会首先在当前目录的node_modules中寻找是否含有该模块
如果有则直接使用，如果没有则去上一级目录的node_modules中寻找
如果有则直接使用，如果没有则再去上一级目录寻找，直到找到为止
直到找到磁盘的根目录，如果依然没有，则报错误

### Buffer 缓冲区
- BUffer缓冲区和数组很像,操作的方法也和数组类似
- Js的数组相对其他语言来说,性能很差。
- 数组不能存储二进制文件，而Buffer是专门用来存储二进制文件的
- 使用Buffer不需要引入模块，直接使用即可。
- Buffer 中存储的都是二进制的数据，但是在显示的时候是16进制，因为二进制显示太了
	- buffer中的每一个元素的范围是从 00 - ff / 0 - 255
	- 0000 0000 - 1111 1111
	- 计算机一个 0 或一个 1 我们称为 1 位(bit)
	- 8bit = 1 byte(字节)
	- buffer中的一个元素,占用内存的一个字节
```javascript

var str = "你好啊";
//将一个字符串保存buffer中
var buf = Buffer.from(str);  //Buffer.from(str)将一个字符串转换为buffer
buf.length //占用内存的大小（中文占三个字节，因为占一个）
str.length //字符串的长度
console.log(buf);   // <Buffer e4 bd a0 e5 a5 bd e5 95 8a>


//创建一个指定大小buffer
// Buffer的大小一旦确定，则不能修改，Buffer.实际上是对底层内存的直接操作

// var buf2 = new Buffer(10);
var buf2 = Buffer.alloc(10);
//通过素引，来操buf中的元素
buf2[0] = 88;
buf2[1] = 255;
buf2[2] = 0xaa;
buf2[3] = 256;  //实际上是  1 0000 0000 舍弃了第九个
buf2[10] = 15;	//实际上没起作用,buffer长度也不会扩大
console.log(buf2);

// 只要数字在控制台或页面中翰出一定是 10进制
console.log(buf2[1]);

//Buffer.allocUnsafe(size)创建一个指定大小buffer,但是ouffer中可能含有敏感数据
// 申请内存空间之后，直接使用，没有清空原数据
var buf3 = Buffer.allocUnsafe(10);

buf.tostring(); //将缓冲区中的数据转换为字符月
```

### 文件系统（File System）
	- 通过 Node 操作系统中的文件
	- Node通过fs模块来和文件系统进行交互
	- 该模块提供了一些标准文件访问 API 来打开、读取、写入文件，以及与其交互。
	- 要使用fs模块，首先需要对其进行加载 `const fs = require("fs");`

#### 同步和异步调用

fs模块中所有的操作都有两种形式可供选择 ==**同步和异步**==。

同步文件系统会**阻塞**程序的执行，也就是除非操作完毕，否则不会向下执行代码。
异步文件系统**不会阻塞**程序的执行，而是在操作完成时，通过回调函数将结果返回。

#### 文件的写入
- **同步文件写入：**
	1. 打开文件
	`fs.openSync(path,flags[,mode]);`
		- path 要打开文件的路径
		- flags 打开文件的操作类型
			- r 只读的
			- w 可写的
		- mode 设置文件的操作权限，一般不传	
		- 该方法会返回一个文件的描述符作为结果，我们可以通过该描述符来对文件进行各种操作
	2. 向文件写入
	`fs.writesync(fd,string[,position[,encoding]])`
		- fd 文件的描述符，需要传递要写入的文件的描述符
		- string 要写入的内容
		- position 写入的起始位置
		- encoding 写入的编码,默认是 utf-8
	3. 关闭文件
	`fs.closeSync(fd)`
		- fd 文件的描述符，需要传递要关闭的文件的描述符

```javascript 
var fs = require("fs");
//打开文件
var fd = fs.opensync("hello.txt","w");
//向文件中写入内容
fs.writesync(fd,"今天天气真不错~~")；
//关闭文件
fs.closesync(fd);
```

- **异步文件写入:**
	1. 打开文件
	`fs.open(path,flags[,mode],callback);`
		- callback 回调函数	
		- 回调函数有两个参数
			- err 错误对象，如果没有错误则为null
			- fd 文件的描述符
	2. 向文件写入(写在上面的回调函数中)
	`fs.write(fd,string[,position[,encoding]],callback)`
		- 回调函数有三个参数
			- err
			- written
			- string 
	3. 关闭文件
	`fs.close(fd,callback)`
		- 回调函数有一个参数 err
``` javascript
var fs = require("fs");

fs.open("hello2.txt", "w", function (err ,fd) {
    //判断是否出错
    if (!err) {
        //如果没有出错，则对文件进行写入操作
        fs.write(fd, "这是异步写入的内容", function (err) {
            if (!err) {
                console.log("写入成功~~");
            }
            //关闭文件
            fs.close(fd, function (err) {
                if (!err) {
                    console.log("文件已关闭~~");
                }
            })
        });
    } else {
        console.log(err);
    }
});
```
- **简单文件写入：**
`fs.writeFile(file,data[,options],callback)`
`fs.writeFilesync(file,data[,options])`
	- file 要操作的文件路径（绝对路径注意转义字符 //）
	- data 要写入的数据
	- options 可选的,可以对写入执行一些设置,是一个对象
		- encoding <string>|<null> 默认='utf8'
		- mode 默认 go666
		- flag 默认 "w"
			- r 读取，不存在则异常
			- w 写入，不存在则创建，存在则覆盖
			- a 追加，不存在则创建
	- callback 当写入完成以后执行的函数

``` javascript
var fs = require("fs");
fs.write中ile("hello3.txt","这是通过writeFile写入的内容",{flag:"w"},function(err){
	if(!err){
		console.log("写入成功~~~");
	}else{
		console.log(err);
	}
});
```

- **流式文件写入：**
	同步、异步、简单文件的写入都不适合大文件的写入，性能较差，容易导致内存溢出

```javascript
var fs = require("fs");
// 流式文件写入
// 创建一个可写流
// fs.createWriteStream(path [,options])
// 可以用来创建一个可写流
// path 文件路径
// options 配置的参数
var ws = fs.createWriteStream("hello3.txt");

// 可以通过监听流的 open 和 close 事件来监听流的打开和关闭
// on(事件字符串,回调函数)
// 		- 可以为对象绑定一个事件
// once(事件字符串,回调函数)
// 		- 可以为对象绑定一个一次性事件，该事件将会在触发一次以后自动失效
ws.once("open",function(){
	console.log("流打开了~~~")
});
ws.once("close",function(){
	console.log("流关闭了~~~")
});

// 通过ws向文件中输出内容
ws.write("写入1");
ws.write("写入2");
ws.write("写入3");

// 关闭流
ws.close();
// 速度快的计算机close()没执行就可能已经向文件写完了,但难免造成缺斤少两
ws.end();

```
#### 文件的读取
- **同步文件读取：**
- **异步文件读取：**
和上面写入差不多

- **简单文件读取：**
`fs.readFile(path[,options,],callback)`
`fs.readFileSync(path[,options,])`
	- path 需要读取的文件路径
	- options 读取的选项
	- callback 回调函数，通过回调函数将读取打的内容返回（err, data）	
		- err 错误对象
		- **data 读取到的对象，会返回一个 buffer**
		- buffer 可以存放图片，音视频的数据
```javascript
var fs = require("fs");
var path = "路径";
fs.readFile(path, function (err ,data) {
    if (!err) {
        //console.log(data);    //这是一个buffer对象，有时候需要转换
        //将data写入到文件中
        fs.writeFile("hello.jpg", data, function (err) {
            if (!err) {
                console.log("文件写入成功");
            }
        });
    }
});

```

- **流式文件读取：**
流式文件读取也适用于一些比较大的文件，可以分多次将文件读取到内存中

```javascript
var fs = require("fs");
//创建一个可读流
var rs = fs.createReadstream("a1.MP3")
//监听流的开启和关闭
rs.once("open", function () {
    console.log("可读流打开了~~");
});
rs.once("close", function () {
    conso1e.log("可读流关闭了~");
    ws.end();
});

//创建一个可写流
var ws = fs.createwritestream("a2.MP3");
// 监听可写流
ws.once("open", function () {
    console.log("可写流打开了~~");
});
ws.once("close", function () {
    conso1e.log("可写流关闭了~");
});


//如果要读取一个可读流中的数据，必须要为可读流绑定一个data事件，data事件绑定完毕，它会自动开始读取数据,读取完，就自动关闭了
rs.on ("data",function (data){
    // console.log(data);
    // 将读取到的数据写入到可写流中
    ws.write(data);
});

// pipe () 可以将可读流中内容，直接输出到可写流中。
rs.pipe(ws);
```

简化上面的代码

```javascript
var fs = require("fs");
//创建一个可读流和可写流
var rs = fs.createReadstream("a1.MP3")
var ws = fs.createwritestream("a2.MP3");
// 将可读流中内容，直接输出到可写流中。
rs.pipe(ws);
```

#### 其他的方法
- **验证路径是否存在**
	- ~~-fs.exists(path,callback)~~
	- `fs.existsSync(path) `返回true 或者是 false

- **获取文件信息**
	- `fs.stat(path,callback)`
	- `fs.statSync(path)`
		- 获取文件的状态
		- 它会给我们返回一个对象，这个对象保存了当前对象状态的相关信息
```javascript
fs.stat ("a.mp3",function (err,stat){
	console.log(stat.size);			
		//size 文件大小
		// isFile() 是否是一个文件
		// isDirectory() 是否是一个文件夹（目录）
});
```

- **删除文件**
	- `fs.unlink(path,callback)`
	- `fs.unlinkSync(path)`

- **列出文件**
	- `fs.readdir(path [,options],callback)`
	- `fs.readdirSync(path[,options])`
```javascript
fs.readdir(".",function(err,files){
	if(!err){
		console.log(files);
	}
});


```

- **截断文件**
	- `fs.truncate(path,len,callback)`
	- `fs.truncateSync(path,len)`
		- 截断文件，将文件修改为指定的大小,中文需要注意
	

- **建立目录**
	- `fs.mkdir(path [,mode],callback)`
	- `fs.mkdirSync(path [,mode])`

- **删除目录**
	- `fs.rmdir(path,callback)`
	- `fs.rmdirSync(path)`


- **重命名文件和目录**
	- `fs.rename(oldPath,newPath,callback)`
	- `fs.renameSync(oldPath,newPath)`


- **监视文件更改写入**
	- `fs.watchFile(filename[,options],listener)`
		- options 设置选项，是一个对象
			- interval 检查文件的间隔，默认是：5007
		- listener 回调函数
			- curr 当前文件的状态
			- prev 修改前文件的状态
			- 而且都是 stat 对象


### 暂告一段落


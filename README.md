## 快速跳转：
[语法格式](#html语法规范)
[Vs code快捷键](#vs-code的一些常用快捷键)

## Web标准
web标准分成三层:
结构 HTML
表现 CSS
行为 Javascript
## 初识HTML（超文本标记语言）

#### 初识HTML和文字加粗的案例
创建一个txt文件，改后缀为html，写入下面的代码
```html
<strong> 加粗的字</strong>
```
#### HTML骨架
HTML要按下面的结构去写，VS code 里一个感叹号 加回车 可以生成
```html
<!DOCTYPE html>
<html lang="en"> 这是整个html
<head>      这是一个头

    <title>Document</title>     这是标题
</head>
<body>  这是身体

</body>
</html>     
```

#### 开发工具
前端开发工具使用 **VS code** ,装好中文插件和Live Server
VS code 里一个感叹号 加回车 可以生成
## HTML语法规范
#### 注释：
Vs code 快捷键是： `Ctrl + /`
注释的代码不会执行，是给工程师看的
#### HTML标签的结构：
**标签一般是成对出现，少部分是单独出现**
1. 标签由`<、>、/、`英文单词或字母组成。并且把标签中`< >`包括起来的英文单词或字母称为标签名
2. 常见标签由两部分组成，我们称之为：双标签。前部分叫**开始标签**，后部分叫**结束标签**，两部分之间包裹内容
3. 少数标签由一部分组成，我们称之为：单标签。自成一体，无法包裹内容。

**标签的关系：**
父子关系，兄弟关系
#### 标题标签：
场景: 在新闻和文章的页面中，都离不开标题，用来突出显示文章主题
代码：h系列标签
```HTMl
<h1>1级标题</h1>
<h2>2级标题</h2>
<h3>3级标题</h3>
<h4>4级标题</h4>
<h5>5级标题</h5>
<h6>6级标题</h6>
```
语义: 1~6级标题，重要程度依次递减
特点:
1. 文字都有加粗
2. 文字都有变大，并且从h1一h6文字逐渐减小
3. 独占一行
#### 段落标签：
场景：在新闻和文章的页面中，用于分段显示
代码:
`<p>我是一段文字</p>`
语义:段落
特点:
1. 段落之间存在间隙
2. 独占一行
   
#### 换行标签和水平线标签：
**换行标签**
场景：让文字强制换行显示
代码：`<br>`
语义:换行
特点:
1. 单标签
2. 让文字强制换行

**水平线标签**
场景：分割不同主题内容的水平线
代码: `<hr>`
语义:主题的分割转换
特点:
1. 单标签
2. 在页面中显示一条水平线
   
#### 文本格式化标签：
场景：需要让文字加粗
下划线、倾斜 删除线等效果，要成对出现
代码:
```html
b   加粗        strong加粗
u   下划线      ins下划线
i   倾斜       em倾斜
s   删除线     del删除线
```
语义：突出重要性的强调语境用右边

---

实际项目开发中选择标签的原则：标签语义化
即：根据语义选择对应正确的标签
如：需要写标题，就使用h系列标签
如：需要写段落，就使用p标签
好处:
对人: 好理解，好记忆
对机器：有利于机器解析，对搜索引擎（SEO）有帮助
推荐:
strong、ins、em、del，表示的强调语义更强烈!
#### 图片标签：
场景：在网页中显示图片
代码：`<img src=" " alt="">`
特点:
1. 单标签
2. img标签需要展示对应的效果，需要借助标签的属性进行设置!
   
`src=" "`  src是属性名，双引号里是属性值。
src是图片地址属性
`alt=" "` alt是图片加载失败时，显示的文本
**可选属性：**
`title=" "` 鼠标放在图片上的文字
`width="" height==""` 控制图片的宽高，只写一个，另一个会等比缩放，也可以强制拉伸 
#### 路径：
绝对路径和相对路径
相对路径: `./../../`
绝对路径: `C://......../../`
#### 音频标签：
场景：在页面中插入音频
代码：`<audio src="./music.mp3" controls> </audio>`
常见属性:
`src=" "` 显示音频路径
`controls` 显示播放控件
`autoplay` 自动播放(目前大部分浏览器不支持)
`loop` 循环播放
支持格式：MP3，Wav，Ogg
#### 视频标签：
场景：在页面中插入视频
代码: `<video src="./video.mp4" controls></video>`
常见属性:
`src=" "` 显示视频路径
`controls` 显示视频播放控件
`autoplay` 自动播放(大部分浏览器不支持，但谷歌浏览器需要加 muted 实现静音播放)
`loop` 循环播放
`muted` 静音播放
支持格式：MP4，WebM，Ogg

#### 链接标签：
场景：点击之后，从一个页面跳转到另一个页面
称呼: a标签、超链接、锚链接
代码：`<a href="./目标网页.htmL">超链接</a>`
特点:
1. 双标签，内部可以包裹内容
2. 如果需要a标签点击之后去指定页面，需要设置a标签的href属性

**其他属性：**
`target="" `目标网页的打开形式

`_self` 默认值，覆盖原网页
`_blank` 在新窗口中跳转
像这样：
`<a href="./目标网页.htmL" target="_blank">超链接</a>`
#### 列表标签：
**无序列表**
```html
<ul>我是列表标题
    <li>我是列表内容</li>
</ul>
```
显示特点：
列表的每一项前默认显示圆点标识
注意点:
1. ul标签中**只允许包含li标签**
2. li标签可以包含任意内容


**有序列表**
```html
<ol>我是列表标题
    <li>我是列表内容</li>
</ol>
```
显示特点:
列表的每一项前默认显示序号标识
注意点:
1. ol标签中只允许包含Ii标签
2. li标签可以包含任意内容


**自定义列表**
```html
<dl>我是包括整体的一个标签
    <dt>我是标题</dt>
    <dd>我是女人</dd>

</dl>
```
显示特点:
dd前会默认显示缩进效果
注意点:
1. dl标签中只允许包含dt/dd标签
2. dt/dd标签可以包含任意内容
   
一般使用在网页底部

#### 表格标签：
**一般语法格式：**
```html
<table>
    <tr> 我是一行
        <td>我是表格第一行的内容</td>
    </tr> 
    <tr> 我是二行
        <td>我是表格第二行的内容</td>
    </tr>
</table>
```

`caption `  表格标题
`th` 表头单元格

**表格的结构标签**(了解)：
`thead` 表格头
`tbody` 表格身体
`tfoot` 表格尾

使用案例：

```html
  <table border="1">
        <caption>我是学生成绩单</caption>
        <thead>
        <tr> 
            <th>姓名</th>
            <th>成绩</th>
            <th>评语</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>小白</td>
            <td>96</td>
            <td>非常好，再接再厉</td>
        </tr>
        </tbody>
    </table>
``` 
**合并单元格属性**(写在td里)：
`rowspan=" "`   跨行合并
`cospan=" "`  跨列合并  
双引号里面写合并的数量，包括自己

### 表单标签：
#### input 系列标签
场景：在网页中显示收集用户信息的表单效果，如：登录页、注册页
标签名: input
input标签可以通过type属性值的不同，展示不同效果
type 属性值:
 <table>
        <caption><b>input的type属性值</b></caption>
        <thead>
            <tr>
                <th>标签名</th>
                <th>type属性值</th>
                <th>说明</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>input</td>
                <td>text</td>
                <td>文本框，用于输入单行文本</td>
            </tr>
            <tr>
                <td>input</td>
                <td>password</td>
                <td>密码框，用于输入密码,加密显示</td>
            </tr>
            <tr>
                <td>input</td>
                <td>radio</td>
                <td>单选框，用于多选</td>
            </tr>
            <tr>
                <td>input</td>
                <td>checkbox</td>
                <td> 多选框，用于多选多</td>
            </tr>
            <tr>
                <td>input</td>
                <td>file</td>
                <td>文件选择，用于之后上传文件</td>
            </tr>
            <tr>
                <td>input</td>
                <td>submit</td>
                <td>提交按钮，用于提交</td>
            </tr>
            <tr>
                <td>input</td>
                <td>reset</td>
                <td>重置按钮，用于重置</td>
            </tr>
            <tr>
                <td>input</td>
                <td>button</td>
                <td>普通按钮，默认无功能，之后配合js添加功能</td>
            </tr>
        </tbody>
    </table>

**input 占位符(提示信息)**
`placeholder=" "`　双引号里写属性值
使用:
`<input type="text" placeholder="我是你爸爸">` 

**单选框的使用**
场景：在网页中显示多选一的单选表单控件
type属性值: radio

`name=""`   分组。有相同name属性值的单选框为一组,一组中同时只能有一个被选中
`checked`   默认选中

注意点:
1. name属性对于单选框有分组功能
2. 有相同name属性值的单选框为一组，一组中只能同时有一个被选中

综合使用：
```html  
    <input type="radio" name="sex" >男
    <input type="radio" name="sex" checked>女
 ```

**上传多个文件**
`multiple`  在input中添加此属性，可以实现选择多个文件

**input 按钮和表单域标签**
 <table>
        <caption><b>input的按钮</b></caption>
        <thead>
            <tr>
                <th>标签名</th>
                <th>type属性值</th>
                <th>说明</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>input</td>
                <td>submit</td>
                <td>提交按钮，用于提交</td>
            </tr>
            <tr>
                <td>input</td>
                <td>reset</td>
                <td>重置按钮，用于重置</td>
            </tr>
            <tr>
                <td>input</td>
                <td>button</td>
                <td>普通按钮，默认无功能，之后配合js添加功能</td>
            </tr>
        </tbody>
</table>


`<form action=""> </form>`

加了**表单域标签**才能保证 `summit` `reset` 正常使用
在  button  里加 `value=""` 加提示文字
`<input type="button" value="我是狗东西">`

#### button 标签：
场景：在网页中显示用户点击的按钮
标签名：button
type属性值 (同input的按钮系列）:
`submit`    提交按钮。点击之后提交数据给后端服务器
`reset` 重置按钮。点击之后恢复表单默认值
`button`    普通按钮。默认无功能，之后配合js添加功能
注意点:
1. 谷歌浏览器中button默认是提交按钮
2. button标签是双标签，更便于包裹其他内容：文字、图片等

#### select 下拉菜单标签：
场景：在网页中提供多个选择项的下拉菜单表单控件
标签组成:
` select `标签：下拉菜单的整体
` option `标签：下拉菜单的每一项
常见属性:
` selected `: 下拉菜单的默认选中
```html
    <select>
        <option >我是傻逼</option>
        <option >我是大傻逼</option>
        <option selected>我是超级大傻逼</option>
    </select>

```
#### textarea文本域标签：
场景：在网页中提供可输入多行文本的表单控件
标签名：textarea
常见属性:
`cols`:规定了文本域内可见宽度
`rows`:规定了文本域内可见行数
注意点:
1. 右下角可以拖拽改变大小
2. 实际开发时针对于样式效果推荐用CSS设置

#### label 标签：
场景:常用于绑定内容与表单标签的关系
标签名：label
使用方法1：
1. 使用label标签把内容（如：文本）包裹起来
2. 在表单标签上添加id属性
3. 在label标签的for属性中设置对应的id属性值


使用方法2(好使)：
1. 直接使用label标签把内容(如：文本)和表单标签一起包裹起来
2. 需要把label标签的for属性删除即可

### 语义化标签：
#### 没有语意的标签：
div标签：—行只显示一个（独占一行）
span标签：一行可以显示多个
#### 有语义的布局标签：
移动端标签：
 <table>    
        <thead>
            <tr>
                <th>标签名</th>
                <th>语义</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>header</td>
                <td>网页头部</td>
            </tr>
            <tr>
                <td>nav</td>
                <td>网页导航</td>
            </tr>
            <tr>
                <td>footer</td>
                <td>网页底部</td>
            </tr>
             <tr>
                <td>aside</td>
                <td>网页侧边栏</td>
            </tr>
             <tr>
                <td>section</td>
                <td>网页区块</td>
            </tr>
             <tr>
                <td>article</td>
                <td>网页文字</td>
            </tr>
        </tbody>
</table>

![](2.jpg)



### 字符实体：
在 HTML 中使用多个空格，只能生效一个，使用下面的标签就是一个空格，一个就是一个空格
非常常用的空格：
`<&nbsp>`
& = `Shift + 7`

## 至此，HTML 的基本语法规范全部学习完毕，如果需要更多资料，可以上网搜索，建议去寻找相关的案例，加强对知识掌握程度

---
# 附：
## VS code的一些常用快捷键
` Alt + Shift + f ` 格式化文档
` Ctrl + Enter ` 下一行
` Ctrl + / `  单/多行注释
` Alt + 上/下键 ` 移动当前代码
` Alt + Shift + 上/下键 ` 复制当前代码
` Ctrl + D `选定多个相同的单词  
` Shift + Alt ` 选择编某个区块辑
` Ctrl + 左箭头/ 右箭头 ` 定位到单词首/单词尾
` Ctrl + Shift + 左箭头/ 右箭头 ` 选中单词
` Ctrl + H ` 全局替换某写单词
` Ctrl + W ` 关闭当前窗口
` Alt + Shift + 左箭头/ 右箭头 ` 选中行
` Ctrl + Alt + 上/下键 `添加多个光标
` Ctrl + G ` 快速定位到某一行

---

## CSS:层叠样式表
CSS一般是写在   Style  标签里，style 标签一般写在 head 标签里，title 标签下
### CSS三大特性：
**层叠性：所谓层叠性，就是后面的样式会覆盖前面的**
当样式冲突时，只有当选择器优先级相同时,才能通过层叠性判断结果

**继承性：子元素有默认继承父元素样式的特点（子承父业）**
可以继承的常见属性(文字控制属性都可以继承)
1. color
2. font-style、font-weight、font-size、font-family
3. text-indent、text-align
4. line-height
5. .....

**优先级：继承 < 通配符选择器<标签选择器 <类选择器 < id选择器 < 行内样式 < !important**
!important写在属性值的后面，分号的前面！
!important不能提升继承的优先级，只要是继承优先级最低！
实际开发中不建议使用!important 。
**权重计算：**
场景：如果是复合选择器，此时需要通过权重叠加计算方法，判断最终哪个选择器优先级最高会生效
权重叠加计算公式:（每一级之间不存在进位）
第一级 第二级 第三级 第四级
( 0 , 0 , 0 , 0 )
复合选择器中：
行内样式的个数 id选择器的个数
类选择器的个数
标签选择器的个数
比较规则:
1. 先比较第一级数字，如果比较出来了，之后的统统不看
2. 如果第一级数字相同，此时再去比较第二级数字，如果比较出来了，之后的统统不看
3. ...
4. 如果最终所有数字都相同，表示优先级相同，则比较层叠性（谁写在下面，谁说了算!)
注意点!important如果不是继承，则权重最高.

## 简单的语法格式：
通过对上面的观察，我们可以发现CSS的语法格式化是：
```html
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            /* 文字颜色 */
            color: aqua;
            /* 文字大小 */
            font-size: 30px;
            /* 背景颜色 */
            background-color: pink;
            /* px 就是 像素 */
            /* 高度 */
            height: 400px;
            /* 宽度 */
            width: 200px;
        }
    </style>
</head>
<body>
    <p>我是大傻逼</p>
</body>
```



选择器 {
    CSS属性：CSS属性值;
    CSS属性：CSS属性值;
}

## 调试工具(浏览器按 F12 )
可以通过 Style 项目的功能快速排除bug
在这里不多做说明

## emmet 语法
![](emmet.png)

## CSS 引入方式
**内嵌式:CSS写在style标签中（小案例使用）**
提示: style标签虽然可以写在页面任意位置，但是通常约定写在 head 标签中
如上案例所示
**外联式：CSS写在一个单独的.css文件中(项目中使用)**
提示：需要通过link标签在网页中引入
`<link rel="stylesheet" href="style.css">`
**行内式: CSS 写在标签的style属性中**
提示：现在不推荐使用，之后会配合js使用
`<div style="background-color: aqua;"></div>`

## CSS书写顺序：
1. 浮动/display/定位
2. 盒子模型
3. 文字样式
   
浏览器加载速度会稍快
   
## 选择器：

#### 标签选择器
**结构：标签名 { css属性名：属性值; }**
作用：通过标签写标签，设置样式
注意点:
1. **标签选择器选择的是==一类标签==，而不是单独某一个**
2. 标签选择器无论嵌套关系有多深，都能找到对应的标签  
```html 
<style>
p {
    color: red ;
}
</style>
```

#### 类选择器(常用)
**结构：.类名{ css属性名：属性值; }**
作用：通过类名，找到页面中所有带有这个类名的标签，设置样式
注意点:
1. 所有标签上都有class属性，class属性的属性值称为类名（类似于名字）
2. 类名可以由数字、字母、下划线、中划线组成，但不能以数字或开头
3. 一个标签可以同时有多个类名，类名之间以空格隔开
4. 类名可以重复，一个类选择器可以同时选中多个标签
5. 类名前面一定要带 . 不然就不是生效
   
```html
    <style>
        .hello{
            /* 文字颜色 */
            color: aqua;
        }
    </style>
</head>
<body>
    <p class="hello">你是天才</p>
</body>
```

#### ID选择器
**结构：#id属性值{ css属名：属性值; }**
作用：通过id属性值，找到页面中带有这个id属性值的标签，设置样式
注意点:
1. 所有标签上都有id属性
2. id属性值类似于身份证号码，在一个页面中是唯一的，不可重复的！
3. 一个标签上只能有一个id属性值
4. 一个id选择器只能选中一个标签
```html
   <style>

        #oh{
          color: aqua;
        }
    </style>
</head>
<body>
    <p id="oh">你是天才</p>
</body>
```

####　通配符选择器
**结构：*（css属性名：属性值; }**
作用：找到页面中所有的标签，设置样式
注意点:
1. 开发中使用极少，只会在极特殊情况下才会用到
2. **可能会用于去除标签默认的margin和padding**
```html
   <style>
    *{
        color:aqua;
    }
    </style>
</head>
<body>
    <p>你是天才</p>
    <div>你是大天才</div>
</body>
```

#### 复合选择器

**后代选择器**
根据HTML标签的嵌套关系，选择父元素 后代中 满足条件的元素
**选择器1 选择器2 {CSS}**
如下案例，只对div下的所有 p 生效
```html
    <style>
        div p{
            color: aqua;
        }
    </style>
</head>

<body>
    <p>我是天才</p>
    <div>
        <p>我是大天才</p>
    </div>
</body>
```

**子代选择器**
根据HTML标签的嵌套关系，选择父元素 子代中 满足条件的元素
**选择器1>选择器2 {...}**
==只能对子代生效==

**并集选择器**
作用：同时选择多组标签，设置相同的样式
**选择器语法: 选择器1 , 选择器2{ css }**
结果:
找到 选择器1 和 选择器2 选中的标签，设置样式
注意点:
1. 并集选择器中的每组选择器之间通过，分隔
2. 并集选择器中的每组选择器可以是基础选择器或者复合选择器
3. 并集选择器中的每组选择器通常一行写一个，提高代码的可读性

**交集选择器**
作用：选中页面中 同时满足 多个选择器的标签
**选择器语法：选择器1选择器2 { css }**
结果:
(既又原则) 找到页面中 既 能被选择器1选中，又能被选择器2选中的标签，设置样式
注意点:
1.交集选择器中的选择器之间是紧挨着的，没有东西分隔
2.交集选择器中如果有标签选择器，**标签选择器必须写在最前面**

#### hover伪类选择器
作用：选中鼠标悬停在元素上的状态，设置样式
**选择器语法:选择器:hover{ css }**
注意点:
1. 伪类选择器选中的元素的某种状态
   
## CSS基本

#### 文字样式
`font-size: ;` **文字大小**

`font-weight: ;` **文字加粗** 
关键字：bold 加粗 / normal 不加粗
数字( 100 ~ 900 )：正常 400  / 加粗 700

`font-style: ;` **文字倾斜**
normal 不倾斜(默认值)  / italic 倾斜

`font-family: ;` **字体样式**
常见取值：具体1,具体字体2,具体字体3,具体字体4,...字体系列
具体字体："Microsoft YaHei"、微软雅黑、黑体、宋体、楷体等...
字体系列：sans-serif、serif、monospace等….
渲染规则:
1. 从左往右按照顺序查找，如果电脑中未安装该字体，则显示下一个字体
2. 如果都不支持，此时会根据操作系统，显示最后字体系列的默认字体

注意点:
1. 如果字体名称中存在多个单词，推荐使用引号包裹
2. 最后一项字体系列不需要引号包裹
3. 网页开发时，尽量使用系统常见自带字体，保证不同用户浏览网页都可以正确显示

windows默认是 微软雅黑 / mac 默认是 苹方

**补充：**
无衬线字体（sans-serif）
1.特点：**文字笔画粗细均匀，并且首尾无装饰**
2.场景：网页中大多采用无衬线字体
3.常见该系列字体：黑体、Arial

衬线字体（serif）
1.特点：**文字笔画粗细不均，并且首尾有笔锋装饰**
2.场景：报刊书籍中应用广泛
3.常见该系列字体：宋体、Times NewRoman

等宽字体（monospace）
1.特点：**每个字母或文字的宽度相等**
2.场景：一般用于程序代码编写，有利于代码的阅读和编写
3.常见该系列字体：Consolas、fira code

`font：;`
属性名：font (复合属性)
取值:
font : style weight size family;
省略要求:
只能省略前两个，如果省略了相当于设置了默认值
注意点:如果需要同时设置单独和连写形式
要么把单独的样式写在连写的下面
要么把单独的样式写在连写的里面

#### 文本样式
`text-indent: ;` **首行缩进**
数字 + px
数字 + em (em相当于当前标签 font-size 的文字大小)

`text-align: ;` **水平对齐方式(可以对齐图片)**
lefe 左对齐
center 居中对齐
right 右对齐
**补充：**
text-align : center 能让哪些元素水平居中？
1. 文本
2. span标签、a标签
3. input标签、img标签

注意点:
==如果需要让以上元素水平居中，text-align : center 需要给以上元素的 父元素 设置==

` text-decoration: ;` **文字本修饰线**
underline 下划线（常用）
line-through 删除线（不常用）
overline 上划线（几乎不用）
none 无装饰线（常用）

`line-height: ;` **行高**
数字+px
倍数（当前标签font-size的倍数）
应用:
1. **让单行文本垂直居中可以设置 `line-height:文字父元素高度`**;
2. 网页精准布局时，会设置line-height : 1可以取消上下间距
行高与font连写的注意点:
如果同时设置了行高和font连写，注意覆盖问题
`font : style weight size/line-height family ;`

#### 颜色
`color: ;`  **文字颜色**
`background-color: ;`   **背景颜色**
四种方法：
预定义的颜色名
`red、green、blue、yellow......`
**rgb表示法
红绿蓝三原色。每项取值范围: 0-255
`rgb(0,0,0)、rgb(255,255,255)、rgb(255,0,0).….`
rgba表示法
红绿蓝三原色+a表示透明度，取值范围是0~1
`rgba(255,255,255,0.5)、rgba(255,0,0,0.3)...…`**
十六进制表示法
\#开头，将数字转换成十六进制表示
`#000000、#ff0000、#e92322，简写: #000、#f00`

#### 标签水平居中
`margin: 0 auto;` 

#### 背景
`background-color: ;`  **背景颜色**
背景颜色默认值是透明:rgba(0,0,0,0)、transparent
背景颜色不会影响盒子大小，并且还能看清盒子的大小和位置，一般在布局中会习惯先给盒子设置背景颜色
<br>

`background-image:url(.../.../..) ;` **背景图片**
背景图片中url中可以省略引号
背景图片默认是在水平和垂直方向平铺的
背景图片仅仅是指给盒子起到装饰效果，类似于背景颜色
**背景图 和 img 的区别**
img标签是一个标签，不设置宽高默认会以原尺寸显示
背景图片只是装饰的CSS样式，不能撑开div标签
==背景图适合做装饰，img使用在重要场景==

<br>

`background-repeat: ;`  **背景图平铺**
repeat  (默认值) 水平和垂直方向都平铺
no-repeat   不平铺
repeat-x    沿着水平方向（x轴）平铺
repeat-y    沿着垂直方向（y轴）平铺

<br>

`background-position:水平方向位置 垂直方向位置 ;`  **背景图位置**
位置可以采用关键字或者是坐标
关键字: 水平方向(left，center，right) /垂直方向(top ，center ，bottom) 
坐标： 数字 + px 默认是向左和下移动，可以取负值来向左和下移动
使用关键字可以颠倒顺序

<br>

`background` **复合属性**
单个属性值的合写，取值之间以空格隔开，不分先后顺序
书写顺序:
推荐: background:color image repeat position
省略问题:
可以按照需求省略
特殊情况：在pc端，如果盒子大小和背景图片大小一样，此时可以直接写 background: url()
注意点
1. 如果需要设置单独的样式和连写
2. 要么把单独的样式写在连写的下面
3. 要么把单独的样式写在连写的里面

<br>

#### 元素显示模式
元素就是标签
三种显示模式：

**块级显示**
显示特点:
1. **独占一行（一行只能显示一个）**
2. **宽度默认是父元素的宽度，高度默认由内容撑开**
3. **可以设置宽高**
代表标签:
div、p、h系列、ul、li、dl、dt、dd、form、header、nav、footer.…
<br>

**行内显示**
显示特点:
1. **一行可以显示多个**
2. **宽度和高度默认由内容撑开**
3. **不可以设置宽高**
代表标签:
span、b、u、i、s、strong、ins、em、del.
<br>

**行内块显示**
显示特点:
1. **一行可以显示多个**
2. **可以设置宽高**
代表标签:
input、textarea、button、select.
特殊情况：img标签有行内块元素特点，但是Chrome调试工具中显示结果是inline

`display: ;`    **显示模式转换**
block             转换为块级
inline-block      转换为行内块
inline            转换为行内

**标签嵌套原则：**
**块级元素一般作为大容器，可以嵌套：文本、块级元素、行内元素、行内块元素等等**
但是：p标签中不要嵌套div、p、h等块级元素
**a标签内部可以嵌套任意元素**
但是：a标签不能嵌套a标签

#### 盒子模型：
**盒子的概念：**
1. 页面中的每一个标签，都可看做是一个“盒子”，通过盒子的视角更方便的进行布局
2. 浏览器在渲染 (显示) 网页时，会将网页中的元素看做是一个个的矩形区域，我们也形象的称之为盒子


**盒子模型**
CSS中规定每个盒子分别由：内容区域（content）、内边距区域（padding）、边框区域（border）、外边距区域（
margin）构成，这就是 盒子模型
![](%E7%9B%92%E5%AD%90%E6%A8%A1%E5%9E%8B.png)



#### 盒子模型的样式
`width: ; / height; ;` **盒子的内容宽度和高度**
<br>

`border:边框线大小 边框线类型 颜色 ;` **盒子模型的边框**
边框线类型： solid 实线 / dashead 虚线  / dotted 点线 /
**单独设置一个方向**  `border-方向关键词: ;`
方向关键词: `left right top botton`
**单独的每个写法(了解):**
`border-width: ;` 边框粗细
`border-style: ;` 边框样式
`border-color: ;` 边框颜色
**border会让盒子尺寸发生变化，让盒子变大**
<br>

`padding: ;`  **盒子模型的内边距**
**单独设置一个方向**  `padding-方向关键词: ;`
后面可以跟四个值，也可以只跟一个值
四个值，就是从 上 开始顺时针一圈
三个值，就参考对面的值 比如 下 参考 上，两个同理
**padding也会让盒子尺寸发生变化，让盒子变大**
<br>

`box-sizing:border-box;` **内减模式**
解决了padding 和 border 对盒子尺寸的影响，保证盒子大小不发生变化
<br>

`margin: ;` **盒子模型外边距**
同padding一样
**单独设置一个方向**  `mragin-方向关键词: ;`
<br>

**清理默认外边距**
```html
    * {
        margin: 0 ;
        padding: 0 ;
    }
```
<br>

**版心居中**
`margin: 0 auto;` 

[GO](#标签水平居中)
<br>

**外边距问题**

**一：合并问题**
场景：垂直布局 的 块级元素
上下的margin会合并
结果：最终两者距离为margin的最大值
解决方法：避免就好
只给其中一个盒子设置margin即可

**二：坍塌问题**
场景：互相嵌套的块级元素，子元素的 margin-top 会作用在父元素上
结果：导致父元素一起往下移动
解决方法:
1. 给父元素设置border-top或者padding-top (分隔父子元素的margin-top）
2. 给父元素设置overflow: hidden
`overflow: hidden` **超出部分不显示**

3. 转换成行内块元素
4. 设置浮动

<br>

**行内元素的内外边距问题**
行内元素无法完美使用 margin 和 padding ，水平生效，垂直方向不生效。
解决方法：
1. 改显示模式
2. 加行高 `line-height: ;`

#### 结构伪类选择器：
作用与优势：
1.作用：根据元素在HTML中的结构关系查找元素
2.优势：减少对于HTML中类的依赖，有利于保持代码整洁
3.场景：常用于查找某父级选择器中的子元素
选择器：
`E:first-child {}`匹配父元素中第一个子元素，并且是E元素
`E:last-child {}`匹配父元素中最后一个子元素，并且是E元素
**`E:nth-child(n) {}`匹配父元素中第n个子元素，并且是E元素**
`E:nth-last-child(n) {}`匹配父元素中倒数第n个子元素，并且是E元素
n的注意点：
1.n为: 0、1、2、3、4、5、6、…
通过n可以组成常见公式
`2n、even` 偶数 
`2n+1、2n-1、odd`奇数
`-n+5` 找到前5个
 `n+5` 找到从第5个往后

#### 伪元素
伪元素：一般页面中的非主体内容可以使用伪元素
区别:
元素:HTML设置的标签
伪元素：由CSS模拟出的标签效果
种类：
`::before` 在父元素内容的最前添加一个伪元素
`::after` 在父元素内容的最后添加一个伪元素
注意点:
1. 必须设置content属性才能生效
` content: ''; ` 留空也可以，不能不写，不写完全不生效
2. 伪元素默认是行内元素，宽高不生效

#### 标准流
标准流：又称文档流，是浏览器在渲染显示网页内容时默认采用的一套排版规则，规定了应该以何种方式排列元素
常见标准流排版规则:
1.块级元素：从上往下，垂直布局，独占一行
2.行内元素或行内块元素：从左往右，水平布局，空间不够自动折行

#### 浮动

**行内块的问题：行内块会有一个默认的间距(代码换行导致的间距)**

**浮动的作用**
早期的浮动是用来实现图文环绕的
现在用来实现网页布局

**浮动的代码**
`float: 方向关键字 ;`
方向关键词: `left right top botton`

**浮动的特点**
1. 浮动元素会脱离标准流（简称：脱标），在标准流中不占位置
相当于从地面飘到了空中
2. 浮动元素比标准流高半个级别，可以覆盖标准流中的元素
3. 浮动找浮动，下一个浮动元素会在上一个浮动元素后面左右浮动

浮动元素有特殊的显示效果(具备行内块特点)
* 一行可以显示多个
* 可以设置宽高

**浮动会影响水平居中（浮动优先级比内外边距高）**

**CSS书写顺序：**
1. 浮动/display/定位
2. 盒子模型
3. 文字样式
   
浏览器加载速度会稍快

**清除浮动的影响**
影响：如果子元素浮动了，此时子元素不能撑开标准流的块级父元素
原因：子元素浮动后脱标 不占位置同时父元素没有高度
目的: 需要父元素有高度，从而不影响其他网页元素的布局

**解决方法（一）：给父元素加高度**
大部分时候父元素不能加高度

**解决方法（二）**
操作:
1. 在父元素内容的最后添加一个块级元素
2. 给添加的块级元素设置 ` clear:both `
缺点：会让 HTML 结构更复杂

**解决方法（三）——单伪元素清除法**
```html
.clearfix :: after {
    content: '';
    display: block;
    clear: both;
    }  
<!-- 补充写法 -->
.clearfix ::after {
content:'';
display: block;
clear: both;

height: 0;
visibility: hidden;  
} 
```
**解决方法（四）——双伪元素清除法**
```html
<!--.clearfix :: before, 解决外边距坍塌问题 
外边距坍塌问题：互相嵌套的块级元素，子元素的 margin-top 会作用在父元素上 -->
.clearfix :: before, 
.clearfix :: after {
    content：'';
    display: table;
    }

.clearfix :: after {
    clear: both;
    }
```
**解决方法（五）**
`overflow:hidden;`

#### 定位

**定位的基本作用**

**网页布局方式：**
**标准流**
1.块级元素独占一行一垂直布局
2.行内元素/行内块元素一行显示多个一水平布局

**浮动**
1.可以让原本垂直布局的 块级元素变成水平布局

**定位**
1.可以让元素自由的摆放在网页的任意位置，也可以让盒子始终固定在屏幕中的某个位置
2.一般用于盒子之间的层叠情况，定位之后的元素层级最高，可以层叠在其他盒子上面

**使用定位**
1. `position: ;`   **设置定位类型**
静态定位：static  相对定位； relative  绝对定位： absolute  固定定位：fixed  粘性定位：Sticky
2. **设置偏移值**
![](%E5%AE%9A%E4%BD%8D.png)

**相对定位**
介绍：**相对于自己之前的位置进行移动**
代码:` position:relative; `
特点:
1. 需要配合方位属性实现移动
2. 相对于自己原来位置进行移动
3. 在页面中占位置(原来的位置)——没有脱标
4. 没有改变显示特点
   
**如果有相反位置属性，以left和top为准**
   
应用场景:
1.配合绝对定位组CP（子绝父相）
2.用于小范围的移动
   
**绝对定位**
介绍:**相对于非静态定位的父元素进行定位移动**
代码: ` position:absolute; `
特点:
1. 需要配合方位属性实现移动
2. 默认相对于浏览器可视区域进行移动
3. 在页面中不占位置——已经脱标
4. 还改变了默认的显示特点，变得像行内块

应用场景:
1.配合绝对定位组CP（子绝父相）

**子绝父相居中案例**
因为绝对定位的盒子不能使用 `margin:0 auto;`

` left:50%; `
`margin: -盒子宽度的一半; `
使用这两个代码实现绝对定位之后的居中

位移居中

`transform: translate(-50%,-50%)` **位移自己宽度，高度的一半**
搭配：` left:50%; ` 就可以实现居中

**固定定位**
介绍：相对于浏览器进行定位移动
代码: ` position:fixed; `
特点:
1. 需要配合方位属性实现移动
2. 相对于浏览器可视区域进行移动
3. 在页面中不占位置——已经脱标
4. 具备行内块特点
   
应用场景:
1.让盒子固定在屏幕中的某个位置

**粘性定位**
介绍：粘性定位可以被认为是相对定位和固定定位的混合。
代码: ` position: sticky; `
特点：
1. 以浏览器的可视窗口为参照点移动元素（固定定位特点）
2. 粘性定位占有原先的位置（相对定位特点）
3. 必须添加top、left、right、bottom其中一个才有效


**定位的显示层级关系**

**不同布局方式元素的层级关系:**
标准流 < 浮动 < 定位
**不同定位之间的层级关系：**
相对、绝对、固定默认层级相同
此时HTML中写在下面的元素层级更高，会覆盖上面的元素
可以使用 ` z-index: 数字; ` 数字越大，显示层级越大 默认值都是 0


   
#### 装饰

**文字和图片对不齐的问题**
**基线：文字对齐的一条线**
` vertical-align: middle ` **对齐方式**
`baseline 默认基线 / top 顶部对齐 / middle 中部对齐 / bottom 底部对齐
**==浏览器把行内块和行内当文字处理==，容易发生对不齐的情况**

**图片垂直方向居中**
```html
.father {
    width: 600px;
    height: 600px;
    background-color:pink;
    line-height: 600px;
    }
img{
    vertical-align: middle;
    text-align:center;
}
```
<br>

**光标的类型**
`cursor: ;` **光标类型**

* default   默认值，通常是箭头
* pointer   小手效果，提示用户可以点击
* text    工字型，提示用户可以选择文字
* move    十字光标，提示用户可以移动

**边框圆角**
`border-radius: 圆角半径 ;` **边框圆角**
四个值，从左上角 顺时针一圈，没有的看对角
数字 + px 或者是 百分比 
取 50%  就是一个圆形
取长方形高度的一般 就可以形成一个胶囊形

**溢出部分显示效果**
`overflow: ;` **溢出部分显示效果**
* visible 默认值，溢出部分可见。
* hidden  溢出部分隐藏
* scroll  无论是否溢出，都显示滚动条
* auto    根据是否溢出，自动显示或隐藏滚动条

**显示隐藏效果**
` display:none; `   不占位的隐藏
` visibility:hidden; ` 看不见了，但是占了位置

**透明属性**
`opacity: ;` **让元素和其内容完全透明**
0 ~ 1 选择透明度

**CSS精灵图**
场景: 项目中将多张小图片，合并成一张大图片，这张大图片称之为精灵图
优点：减少服务器发送次数轻服务器的压力，提高页面加载速度
例如：
* 需要在网页中展示8张小图片
* 8张小图片分别发送一发送8次
* 合成一张精灵图发送一发送1次
  
**精灵图的使用：**

1. 创建一个盒子,设置盒子的尺寸和小图尺寸相同
2. 将精灵图设置为盒子的背景图片
3. 修改背景图位置
通过PxCook工具测量小图片左上角坐标，分别取**负值**设置给盒子的`background-position: x y`

**背景图尺寸** *
`background-size: ;`    **背景图尺寸**
* 数字 + px 简单方便，常用
* 百分比 相对于当前盒子自身的宽高百分比
* contain 包含，将背景图片等比例缩放，直到不会超出盒子的最大(会导致盒子留白)
* cover 覆盖，将背景图片等比例缩放，直到刚好填满整个盒子没有空白(会导致图片没显示全)

**background连写拓展**
完整连写:
`background: color image repeat position/size;`
注意点: 
background-size和background连写同时设置时，需要注意覆盖问题
解决:
1.要么单独的样式写连写的下面
2.要么单独的样式写在连写的里面

**盒子阴影**
`box-shadow: ;` **盒子阴影**
h-shadow    必须，水平偏移量。允许负值
y-shadow    必须，垂直偏移量。允许负值
blur    可选，模糊度
spread  可选，阴影扩大
color   可选，阴影颜色
inset   可选，将阴影改为内部阴影

**文字阴影**
`text-shadow: ;`     **文字阴影**

**过渡**
`transition: ;` **过渡**
需要搭配 hover 使用
谁变化，给谁加
过渡的属性: all(所有) 或者是 其他属性
过渡的时长: 数字 + S 

## 其他部分：

#### 网页骨架：
```html
<!DOCTYPE html><!-- <!DOCTYPE html>文档类型声明，告诉浏览器该网页的 HTML版本 -->
<html lang="en"> 
<!-- 作用：搜索引擎旧类 + 浏览器翻译
常见语言：zh-CN 简体中文 / en 英文 -->
<head>
    <meta charset="UTF-8">
    <!-- 标识 网页 使用的字符编码 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- IE兼容性 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 做移动网页要使用 -->
    <title>Document</title>
    <!-- 网页标题 -->
</head>
<body>
    
</body>
</html>
```
#### SEO 三大标签：
**SEO(Search Engine Optimization)：搜索引擎优化**
作用：让网站在搜索引擎上的排名靠前
提升SEO的常见方法:
1. 竞价排名
2. 将网页制作成html后缀
3. 标签语义化
4. ...


**三大标签**
1. title:网页标题标签
2. description:网页描述标签
3. keywords:网页关键词标签

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- meta 选择 dsc 和 kw -->
    <meta name="description" content="啊爸爸爸">
    <meta name="keywords" content="我阿松大阿松大阿松大阿三">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
```

#### favicon 标题图标
`<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">`
`link:favicon` **快捷键**

#### 项目目录
1. 新建项目文件夹 pc-client，在VScode中打开
在实际开发中，项目文件夹不建议使用中文
所有项目相关文件都保存在 pc-client 目录中
2. 复制favicon.ico到pc-client 目录
    一般习惯将ico图标放在项目根目录
3. 复制==images==和==uploads==目录到 pc-client 目录中
images：存放网站固定使用的图片素材，如: logo、样式修饰图片...等
uploads: 存放网站非固定使用的图片素材，如：商品图片、宣传图片..等
4. 新建 index.html在根目录
5. 新建css文件夹保存网站的样式，并新建以下CSS文件:
    base.css：基础公共样式
    common.css：该网站中多个网页相同模块的重复样式，如：头部、底部
    index.css:首页样式

#### 一部分公共样式
```css
* {
    padding: 0;
    margin: 0;
    /* 内减模式 */
    box-sizing: border-box;
}

ul li {
    /* 去除li的小圆点 */
    list-style: none;
}

a {
    /* 去掉<a>的下划线 */
    text-decoration: none;
}

```
##　至此，CSS基础部分，已经学习完毕，你可以进入更进一步的CSS学习了

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

## CSS3
#### 字体图标
字体图标**展示的是图标，本质是字体**。
处理简单的、颜色单一的图片

**字体图标的优点：**
灵活性：灵活地修改样式，例如：尺寸、颜色等
轻量级：体积小、渲染快、降低服务器请求次数
兼容性：几乎兼容所有主流浏览器
使用方便:
1. 下载字体包
2. 使用字体图标

**下载:**
1. 前往 https://www.iconfont.cn/ 登录之后，挑选自己心仪的图标
2. 添加到购物车，之后添加进项目，下载回来

**使用：下载回来的demo页面，有使用说明，推荐第二种使用方法**
1. 使用 link 引入字体图标的 CSS 样式表
2. 字体图标使用 span 为标签
3. 为span 添加类名 
```html
<head>
    <link rel="stylesheet" href="./download/iconfont.css">
</head>
<body>
    <!-- 方法一： -->
    <span class="iconfont">&#xe64b;</span>
    <!-- 方法二： -->
</body>
```
**上传矢量图：**

如果图标库没有项目所需的图标：
IconFont网站上传矢量图生成字体图标
1. 与设计师沟通，得到SVG矢量图
2. lconFont网站上传图标，下载使用


#### 平面转换
转换：` transform `
改变盒子在平面内的形态（位移、旋转、缩放）
2D转换
![](%E5%B9%B3%E9%9D%A2.png)


**位移**
`transform: translate(水平移动距离,垂直移动距离);`

**取值（正负均可）:**
像素单位数值
百分比（参照物为盒子自身尺寸）
注意：X轴正向为右，Y轴正向为下

**技巧：**
translate()如果只给出一个值，表示x轴方向移动距离
单独设置某个方向的移动距离：translateX() & translateY()
前面不要忘记加` transform:`

绝对定位居中：` left:50%; top:50%; transform:translate(-50%,-50%); `

---

**旋转**
` transform:rotate(角度); `
注意：角度单位是deg(一圈就是 360 deg),加过渡才能生效 `transition: all 2s;`
技巧：取值正负均可，正值我顺时针，负值逆时值

---

**转换原点** 
` transform-origin ` 默认原点是盒子中心点
`transform-origin: 原点水平位置 原点垂直位置;`
**取值：**
**方位名词(left、top、right、bottom、center)  常用**
像素单位数值
百分比（参照盒子目身尺寸计算）
**注意：**
写在标签自己身上，不要写在 hover 上

<br><br>

**多重转换**
`transform: translate() rotate( );`
**写在前面先执行，一般是先移动再旋转，如果先旋转再位移会出现的奇怪的bug
注意：旋转会导致坐标轴向发生改变,多重转换如果涉及到旋转往最后书写**

<br>

**透明度属性可以实现淡入淡出效果，因为其可以被过渡属性影响**

---

**缩放效果**
**传统的改宽高因为原点不同，导致效果非常奇怪**

` transform:scale(x轴缩放倍数,y轴缩放倍数); `
` transform: scale(缩放倍数); `
**Scale值大于 1 表示放大, Scale值小于 1 表示缩小
注意：使用 定位 + 平面位移的居中 之后使用缩放，会因为层叠性，导致失去居中效果
所以使用复合，保证位移属性一直存在就行**

#### 渐变
```CSS
backqround-image: linear-gradient(
颜色1，
颜色2
);
```

常用的透明渐变黑效果：
```css
/* transparent是透明的 */
background-image: linear-gradient(
transparent,
rgba(0,0,0,0.6)
```


#### 空间转换 ( 3D转换 )

**空间位移**

使用` transform `属性实现元素在空间内的位移、旋转、缩放等效果,相对于空间来说，**多了一条 Z 轴**
**z的正值指向自己  负值是指屏幕后面**

` transform: translate3d(x, y, z); `
` transform: translateX(值); `
` transform:translateY(值); `
` transform: translateZ(值); `

这样写，并不能看到 Z 的效果，需要另外的属性做支持,也就是下面的**透视属性**


近大远小、近清楚远模糊
Z轴是视线方向，移动效果应该是距离的远或近，电脑屏幕是平面，默认无法观察远近效果

**透视效果:**
给需要透视属性的父级加

`perspective:值;`

**值一般是像素单位数值，数值一般在800px-1200px。**
透视距离也称为视距，所谓的视距就是人的眼睛到屏幕的距离。


**空间旋转**

` transform:rotateZ(值); ` 和平面旋转一毛一样，因为 Z 轴是视线,所以绕着 Z 旋转，实际上没有变化
` transform:rotateX(值); `  正值向后面 负值向前面倒
` transform:rotateY(值); `  像钢管舞那样（；´д｀）ゞ，正值向屏幕里面，负值向屏幕外面

**左式法则**
判断旋转方向:左手握住旋转轴，拇指指向正值方向，手指弯曲方向为旋转正值方向

**综合属性**
rotate3d(x, y, z, 角度度数)：用来设置**自定义旋转轴**的位置及旋转的角度
x，y，z 取值为0-1之间的数字

**立体呈现**
添加`transform-style:preserve-3d ;` 使子元素处于真正的3d空间

默认值 ` flat `, 表示子元素处于2D平面内呈现,不开启 3D 空间
之后搭配空间位移，实现 3D 效果

**空间缩放**
` transform: scaleX(倍数); ` 
` transform: scaleY(倍数); ` 
` transform: scaleZ(倍数); ` 立体图形才能看到缩放
` transform: scale3d(x, y, z); ` 


#### 动画
**实现2个状态间的变化过程 使用过渡**
实现多个状态间的变化过程，动画过程可控（重复播放、最终画面、是否暂停）

**动画的本质是快速切换大量图片时在人脑中形成的具有连续性的画面
构成动画的最小单元：帧或动画帧**
 
**实现步骤：**
```css
/* 1.定义动画 */
/* 两种状态的变化 */
@keyframes 动画名称{
    form{}
    to{}
}
/* 多个状态的变化，数量不做限制，百分比就是总时间的占比 */
@keyframes 动画名称{
    0%{}
    10%{}
    15%{}
    100%{}
}
/* 2.使用 */
选择器 {
    animation:动画名称 动画时间;   
}
```

**animation:**
`animation:动画名称 动画时长 速度曲线 延迟时间 重复次数 动画方向 执行完毕时状态;`
**注意：
动画名称和动画时长必须赋值
取值不分先后顺序
如果有2个时间值，第一个时间表示动画时长，第二个时间表示延迟时间**

**速度曲线:**
` linera ` 匀速运动
` steps(数值) ` 分步动画，数值代表多少步

**延迟时间：**
直接写时间
 
**重复次数：**
直接写次数，无限直接写 ` infinite `

**动画方向：**
` alternate ` 恢复回去，播放完动画之后播放倒回去的动画

**执行完毕时的状态：**
需要去掉**重复次数 和 动画方向**
` backwards `  默认值，未播放时的状态
` forwards ` 保存最后的状态

**拆分写法：**
` animation-name ` 动画名称
` animation-duration ` 动画时长
` animation-delay ` 延迟时间
` animation-fill-mode ` 动画执行完毕时状态
` animation-timing-function ` 速度曲线
` animation-iteration-count ` 重复次数
` animation-direction ` 动画执行方向
` animation-play-state ` 暂停动画,` paused `为暂停，通常配合：hover 使用

#### 逐帧动画
使用 ` steps() ` 完成逐帧动画
逐帧动画：帧动画。开发中，一般配合精灵图实现动画效果。
` animation-timing-function:steps (N); `
将动画过程等分成N份

**定义动画:改变背景图的位置（移动的距离就是精灵图的宽度）
使用动画:添加速度曲线 steps(N) ,N与精灵图上小图个数相同,添加无限重复效果**


**多组动画:**
```css
选择器{
  animation:
    动画1,
    动画2,
    动画N,  
}
```
 
#### 走马灯案例：
给后面接上前面的图片，保证无缝动画

#### 出游案例：
` background-size: cover; ` 背景图覆盖 html
` contain ` 等比例放大

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

## 正则表达式
==正则表达式== (Regular Expression) 是**用于匹配字符串中字符组合的模式**。在JavaScriptr中，正则表达式也是对象。

正则表通常被用来检索、替换那些符合某个模式（规则）的文本，例如验证表单：用户名表单只能输入英文字母、数字或者下划线，呢称输入框中可以输入中文 **（匹配）**。此外，正则表达还常用于过滤掉页面内容中的些敏感词 **（替换）**，或从字符串中获取我们想要的特定部分 **(提取)** 等

#### 正则表达式的特点
1. 灵活性、逻辑性和功能性非常的强。
2. 可以迅速地用极简单的方式达到字符串的复杂控制。
3. 对于刚接触的人来说，比较晦涩难懂。比如：^\w+(-+.JW+)*@w+([-Jw+)w+([-Jw+)*$
4. 实际开发，一般都是直接复制写好的正则表达式.但是要求会使用正则表达式并且根据实际情况修改正则表达
式.比如用户名：/[a-z0-9_-]3,16}$/


#### 正则表达式在 js 中的使用
**1. 利用RegExp 对象来创建 正则表达式**
` let regexp new RegExp(/123/); `
**2. 利用字面量创建**
`let rg = /123/; `


#### 检测正则表达式 test

`test( ) ` 正则对象方法，用于检测字符串是否符合该规侧，该刻对象会返回` true `或 `false `,其参数是测试字符串。

大概是这样子的：

` rg.test(123); `       true
` rg.test('abc'); `     false

#### 正则表达式的组成

一个正则表达式可以由简单的字符构成，比如/abc/,也可以是简单和特殊字符的组合，比如/b*c/。其中
特殊字符也被称为 ==**元字符**== ，在正则表达式中是具有特殊意义的专用符号，如` ^、$、+ `等。

**正则表达式里面不需要加引号,不管是数字型还是字符串型**
```javascript
let rg = /abc/;

//正则表达式里面不需要加引号不管是数字型还是字符串型

// /abc/ 只要包含有abc这个字符串返回的都是 true
console.log(rg.test('abc'));
console.log(rg.test('abcd'));
console.log(rg.test('aabcd'));
```


---

#### 元字符

##### 边界符 ^  $
` ^ ` 表示匹配行首的文本（以谁开始）


` $  ` 表示匹配行尾的文本（以谁结束）

**如果 ^ 和 $ 在一起，表示必须是精确匹配。**

```javascript

let reg = /^abc/;
// 必须以 abc 开头的

console.log(reg.test('abc'));   //true
console.log(reg.test('abcd'));  //true
console.log(reg.test('aabcd')); //false

let reg = /^abc$/;
// 精确匹配 必须是 abc 才行

console.log(reg1.test('abc'));      //true
console.log(reg1.test('abcd'));     //false
console.log(reg1.test('aabcd'));    //false
console.log(reg1.test('alcabc'));   //false

```


##### 字符类（上）
` [ ] ` 表示有**一系列字符可供选择**，**只要匹配其中一个**就可以了 

` -  ` **方括号内部范围符** 解决了重复输入的问题

```javascript
let rg = /[abc]/;  //只要包含有 a 或者包含有 b 或者包含有 c 都返回为true
console.log(rg.test('andy'));   //true
console.log(rg.test('baby'));   //true
console.log(rg.test('color'));  //true
console.log(rg.test('red'));    //false


let rg = /^[abs]$/;  //三选一 只有是 a 或者是 b 或者是 c 这三个字母才返回 true


let reg = /^[a-z]$/; // 26个英文字母任何一个字母返回
console.log(reg.test('a'));     //true
console.log(reg.test('z'));     //true
console.log(reg.test(1));       //false
console.log(reg.test('A'));     //false
``` 

##### 字符类（下）
如果 ==**方括号里面**== 包括 ` ^ ` 则代表取反

还有 ==**字符组合**==

```javascript
//字符组合
let reg = /^[a-zA-Z]$/; //26个英文字母（大写和小写都可以）任何一个字母返回true  -表示是a到z的范围

console.log(reg1.test('a'));     //true
console.log(reg1.test('B'));     //true
console.log(reg1.test(8));       //true
console.log(reg1.test('-'));     //true
console.log(reg1.test('_'));     //true
console.log(reg1.test('!'));    //false
```


##### 量词符
**量词符用来设定某个模式出现的次数。**
` * `  重复零次或更多次
` + `  重复一次或更多次
` ? `  重复零次或一次

` {n} `  重复n次
` {n,} `  重复n次或更多次    ` , ` 后不能有空格
` {n,m} `  重复n到m次

```javascript
// * 相当于 >= 0 可以出现 0 次或者很多次
let reg = /a*$/;
console.log(reg.test(''));       //true
console.log(reg.test('a'));      //true
console.log(reg.test('aaaa'));  //true

// + 相当于>=1可以出现1次或者很多次
let reg = /^a+$/;
console.log(reg.test(''));      //false
console.log(reg.test('a'));     //true
console.log(reg.test('aaaa'));  //true

// ? 相当于 1 || 0 
let reg = /a?$/;
console.log(reg.test(''));      //true
console.log(reg.test('a'));      //true
console.log(reg.test('aaaa'));  //false

// {3}就是重复3次
let reg = /a{3)$/;
console.log(reg.test(''));          //false
console.log(reg.test('a'));         //false
console.log(reg.test('aaaa'));      //false
console.log(reg.test('aaa'));       //true

// {3,} 大于等于3  , 后不能有空格
let reg = /a{3,)$/;
console.log(reg.test(''));      //false
console.log(reg.test('a'));     //false
console.log(reg.test('aaaa'));  //true
console.log(reg.test('aaa'));   //true

// {3,6}大于等于3并且小于等于6
let reg = /^a{3,6}$/;
console.log(reg.test(''));           //false
console.log(reg.test('a'));         //false
console.log(reg.test('aaaa'));      //true
console.log(reg.test('aaa'));       //true
console.log(reg.test('aaaaaaa'));   //false 七个了
```

##### 量词符设置某个模式出现的次数

```javascript
let reg  =/^[a-zA-ZB-9_-]/; //这个模式用户只能输入英文字母数字下划线短横线但是有边界符和[]这就限定了只能多选1

console.log(reg.test('a'));      //true
console.log(reg.test('8'));     //true
console.log(reg.test('18'));    //false
console.log(reg.test('aa'));     //false

let reg  =/^[a-zA-ZB-9_-]{6,16}/;       // { }前不要有空格
console.log(reg.test('a'));      //false
console.log(reg.test('andy-red'));  //true
console.log(reg.test('andy_red'));  //true
console.log(reg.test('andy007'));   //true
console.log(reg.test('andy!007'));  //false
```


##### 括号总结
大括号 量词符.里面表示重复次数
中括号 字符集合。匹配方括号中的任意字符
小括号 表示优先级

```javascript
//中括号字符集合.匹配方括号中的任意字符
let reg = /[abc]$/;
//a也可以b也可以c可以 a || b || c


//大括号量词符.里面表示重复次数
let reg = /abc{3)$/;
//它只是让 c 重复三次
console.log(reg.test('abc'));       //false
console.log(reg.test('abcabcabc'));  //false
console.log(reg.test('abccc'));      //true


//小括号表示优先级
let reg = /^(abc){3}$/; //它是让 abc 重复三次
console.log(reg.test('abc'));       //false
console.log(reg.test('abcabcabc'));  //true
console.log(reg.test('abccc'));      ///false
```

##### 预定义类

预定义类指的是**某些常见模式的简写方式。**

`\d ` 匹配0-9之间的任一数字，相当于[0-9]
`\D ` 匹配所有0-9以外的字符，相当于[^0-9]

`\w`  匹配任意的字母、数字和下划线，相当于[A-Za-z0-9]
`\W ` 除所有字母、数字和下划线以外的字符，相当于[A-Za-z0-9_]

`\s ` 匹配空格（包括换行符、制表符、空格符等），相等于[\t\r\n\v\f]
`\S ` 匹配非空格的字符，相当于[^\t\r\n\v\f]

正则表达式 有 ` | ` ，代表 **==或==**

#### 替换
`replace ( ) ` 方法可以实现替换字符串操作，用来替换的参数可以是一个字符串或是一个正则表达式。
` /表达式/[switch] ` switch(也称为修饰符按照什么样的模式来匹配.有三种值：
` g ` : 全局匹配
` i ` ：忽略大小写
` gi ` : 全局匹配+忽略大小写
```javascript
//替换replace
var str = 'andy和red';
var newstr = str.replace('andy','baby');
console.log(newstr);        //baby和red
// 屏蔽敏感词
str.replace(/激情/,'**');
// 上面的 只能修改一次 改成这样就可以全部屏蔽了
str.replace(/激情/g,'**');
str.replace(/激情|gay|傻逼|草|草泥马|操你妈/g,'**');
```



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


## ES7

#### Array.prototype.includes(检测数组中是否包含某个元素)
` Includes ` 方法用来检测数组中是否包含某个元素，返回布尔类型值

```javascript
const mingzhu=['西游记'，'红楼梦'，'三国演义'，'水浒传]；
//判断
console.1og(mingzhu.includes('西游记'));
```


#### 指数操作符（幂运算）

在ES7中引入指数运算符 ` ** ` ，用来实现幂运算，功能与 ` Math.pow ` 结果相同


## ES8 ( async 和 await )

` async ` 和  ` await ` 两种语法结合可以让异步代码像同步代码一样

#### async 函数
```javascript
//async函数
async function fn(){
//返回一个字符串
//return '尚硅谷'；
//返回的结果不是一个 Promise 类型的对象，返回的结果就是成功 Promise 对象 
//return;
//抛出错误，返回的结果是一个失败的 Promise
//throw new Error('出错啦！')；
//返回的结果如果是一个Promise对象
    return new Promise((resolve,reject)=>{
        resolve('成功的数据');
        reject("失败的错误");
})

}

```

#### await表达式
1. **==await必须写在 async函数中==**
2. await右侧的表达式一般为 promise 对象
3. await返回的是 promise 成功的值
4. await的promise失败了,就会抛出异常，需要通过 try.catch捕获处理


#### ES8 对象方法的扩展
`Object.values() `方法返回一个给定对象的所有可枚举属性值的数组
`Object..entries()`方法返回一个给定对象自身可遍历属性 [key,value] 的数组
` Object.getownPropertyDescriptors() ` 该方法返回指定对象所有自身属性的描述对象
```javascript
//声明对象
const school
name:"尚硅谷"，
cities:['北京'，'上海'，'深圳']，
xueke:['前端'，'Java','大数据'，"运维']
}
//获取对象所有的键
console.log(object.keys(school));
//获取对象所有的值
console.log(object.values(school));
//entries
console.log(object.entries(school));

```

## Git
### 版本控制
#### 什么是版本控制？我们为什么要关心它呢？
版本控制是一种记录一个或若干文件内容变化，以便将来查阅特定版本修订情况的系统
#### 为什么要使用版本控制?
软件开发中采用版本控制系统是个明智的选择。
有了它你就可以将某个文件回溯到之前的状态，甚至将整个项目都回退到过去某个时间点的状态。就算你乱来一气把整个项目中的文件改的改删的删，你也照样可以轻松恢复到原先的样子。但额外增加的工作量却微乎其微。你可以比较文件的变化细节，查出最后是谁修改了哪个地方，从而找出导致怪异问题出现的原因，又是谁在何时报告了某个功能缺陷等等。
#### 集中化的版本控制
集中化的版本控制系统诸如 CVS，svn 以及 Perforce 等，都有一个单一的集中管理的服务器，保存所有文件的修订版本，而协同工作的人们都通过客户端连到这台服务器，取出最新的文件或者提交更新。多年以来，这已成为版本控制系统的标准做法
![Alt text](img/%E9%9B%86%E4%B8%AD%E5%8C%96%E7%89%88%E6%9C%AC%E6%8E%A7%E5%88%B6.png)

这种做法带来了许多好处，现在，每个人都可以在一定程度上看到项目中的其他人正在做些什么。而管理员也可以轻松掌控每个开发者的权限，并且管理一个集中化的版本控制系统; 要远比在各个客户端上维护本地数据库来得轻松容易

**事分两面，有好有坏。这么做最显而易见的缺点是中央服务器的单点故障。如果服务器宕机一小时，那么在这一小时内，谁都无法提交更新，也就无法协同工作。**

**要是中央服务器的磁盘发生故障，碰巧没做备份，或者备份不及时，就会有丢失数据的风险。最坏的情况是彻底丢失整个项目的所有历史更改记录，而被客户端偶然提取出来的保存在本地的某些快照数据就成了恢复数据的希望。但这样的话依然是个问题，你不能保证所有的数据都已经有人事先完整提取出来过。只要整个项目的历史记录被保存在单一位置，就有丢失所有历史更新记录的风险**

####  分布式的版本控制系统
于是分布式版本控制系统面世了。在这类系统中，像 Git，BitKeeper 等，==**客户端并不只提取最新版本的文件快照，而是把代码仓库完整地镜像下来。**== 这么一来，任何一处协同工作用的服务器发生故障，事后都可以用任何一个镜像出来的本地仓库恢复。因为每一次的提取操作，实际上都是一次对代码仓库的完整备份
![Alt text](img/%E5%88%86%E5%B8%83%E5%BC%8F.png)

更进一步，许多这类系统都可以指定和若干不同的远端代码仓库进行交互。籍此，你就可以在同一个项目中分别和不同工作小组的人相互协作。

**分布式的版本控制系统在管理项目时 存放的不是项目版本与版本之间的差异.它存的是索引(所需磁盘空间很少 所以每个客户端都可以放下整个项目的历史记录)**

**分布式的版本控制系统出现之后,解决了集中式版本控制系统的缺陷:**
1. 断网的情况下也可以进行开发(因为版本控制是在本地进行的)
2. 使用 github 进行团队协作,哪怕 github 挂了 每个客户端保存的也都是整个完整的项目(包含历史记录的!!!）

### Git的简介与安装
#### 简介：
Git 是目前世界上最先进的分布式版本控制系统。同生活中的许多伟大事件一样，Git 诞生于一个极富纷争大举创新的年代。Linux 内核开源项目有着为数众广的参与者。绝大多数的 Linux 内核维护工作都花在了提交补丁和保存归档的繁琐事务上（1991－2002
年间）。到 2002 年，整个项目组开始启用分布式版本控制系统 BitKeeper 来管理和维护代码。

到了 2005 年，开发 BitKeeper 的商业公司同 Linux 内核开源社区的合作关系结束，他们收回了免费使用 BitKeeper 的权力。这就迫使 Linux 开源社区（特别是 Linux 的缔造者 Linus Torvalds ）不得不吸取教训，只有开发一套属于自己的版本控制系统才不至于重蹈覆辙。他们对新的系统制订了若干目标：

- 分支切换速度快 
- 容量小(压缩) 
- 简单的设计 
- 完全分布式
- 对非线性开发模式的强力支持（允许上千个并行开发的分支）
- 有能力高效管理类似 Linux 内核一样的超大规模项（速度和数据量）

自诞生于 2005 年以来，Git 日臻成熟完善，在高度易用的同时，仍然保留着初期设定的目标。它的速度飞快，极其适合管理大项目，它还有着令人难以置信的非线性分支管理系统可以应付各种复杂的项目开发需求。

#### Git的安装
git 地址 : https://git-scm.com/download/win
![Alt text](img/Linux%E5%AE%89%E8%A3%85.png)
安装时，无脑下一步即可

![Alt text](img/GIt%E6%89%93%E5%BC%80.png)

之后需要在Git的命令行界面进行简单的配置：

输入`git  --version ` 可以参考Git的版本号

Git 提供了一个叫做 git config 的命令来配置或读取相应的工作环境变量而正是由这些环境变量，决定了 Git 在各个环节的具体工作方式和行为。这些变量可以存放在以下三个不同的地方：

` /etc/gitconfig ` 文件：系统中对所有用户都普遍适用的配置。若使用 ` git config ` 时用 `  --system ` 选项，读写的就是这个文件。

` ~/.gitconfig  `文件：用户目录下的配置文件只适用于该用户。若使用 `git config `时用 ` --global `选项，读写的就是这个文件。

` .git/config `文件：当前项目的 Git 目录中的配置文件（也就是工作目录中的 ` .git/config `文件）这里的配置仅仅针对当前项目有效。

**用户信息 :**
第一个要配置的是你个人的用户名称和电子邮件地址。这两条配置很重要，每次 Git 提交时都会引用这两条信息，说明是谁提交了更新，所以会随更新内容一起被永久纳入历史记录：
```
git config --global user.name "Your Name"
git config --global user.email "email@example.com"
```
要检查已有的配置信息，可以使用 
`git config --list `

删除配置信息
`git config --global --unset user.email`

#### 区域
工作区
暂存区（索引）
版本库

工作区的内容修改好，改好之后提交到暂存区，此时会形成一个版本

#### 对象
Git对象
树对象
提交对象

### Git底层命令(底层概)
#### 初始化Git仓库
要对现有的某个项目开始用 Git 管理，只需到此项目所在的目录，执行： `git init `

**作用：** 初始化后，在当前目录下会出现一个名为 .git 的目录，所有 Git 需要的数据和资源都存放在这个目录中。不过目前，仅仅是按照既有的结构框架初始化好了里边所有的文件和目录，但我们还没有开始跟踪管理项目中的任何一个文件。

#### linux命令
`clear` ：清除屏幕
`echo 'test content'` ：往控制台输出信息 
`echo 'test content' > test.txt` 往 test.txt 里输入test content ,没有则是新建
`ll `：将当前目录下的 子文件&子目录平铺在控制台
`find 目录名`： 将对应目录下的子孙文件&子孙目录平铺在控制台
`find 目录名 -type f `：将对应目录下的文件平铺在控制台
`rm 文件名 `： 删除文件
`mv 源文件 重命名文件`: 重命名
`cat 文件的 url `: 查看对应文件的内容
`vim 文件的 url(在英文模式下)` 即可查看文件
> 按 i 进插入模式 进行文件的编辑 
 按 esc 键之后按 `:`键 进行以下命令的执行
 q! 强制退出（不保存）
 wq 保存退出
 set nu 设置行号

#### Git对象
Git 的核心部分是一个简单的键值对数据库。你可以向该数据库插入任意类型的内容，它会返回一个键值，通过该键值可以在任意时刻再次检索该内容

##### 向数据库写入内容并返回对应键值

**命令：** `echo 'test content' | git hash-object -w --stdin`
写入的内容被压缩处理了。

**返回：**
该命令输出一个长度为 40 个字符的校验和。 这是一个 SHA-1 哈希值

**其他说明：**
`-w `  选项指示 hash-object 命令存储数据对象；若不指定此选项，则该命令仅返回对应的键值(哈希值),不存储数据。
存储在git的目录下的object文件夹

` --stdin `（standard input）选项则指示该命令从标准输入读取内容；若不指定此选项，则须在命令尾部给出待存储文件的路径,也就是说没有前面的echo命令，则需要跟文件路径。

存文件 : `git hash-object -w 文件路径 `
返回对应文件的键值: `git hash-object 文件路径 `
 
##### 查看 Git 是如何存储数据的 
**命令：** 
`find .git/objects -type f `

**返回：** 
.git/objects/d6/70460b4b4aece5915caf5c68d12f560a9fe3e4 

##### 根据键值拉取数据 

**命令：** 
`git cat-file -p key `

-p 选项可指示该命令自动判断内容的类型，并为我们显示格式友好的内容
利用 cat-file -t 命令，可以让 Git 告诉我们其内部存储的任何对象类型

**返回：**
对应文件的内容


##### 对一个文件进行简单的版本控制 

创建一个新文件并将其内容存入数据库 
**命令：**
```
echo 'version 1' > test.txt 
git hash-object -w test.txt 
```
**返回：** 
`83baae61804e65cc73a7201a7252750c76066a30`

向文件里写入新内容，并再次将其存入数据库 
**命令：** 
```
echo 'version 2' > test.txt 
git hash-object -w test.txt 
```
**返回：** 
`1f7a7a472abf3dd9643fd615f6da379c4acb3e3a`

查看数据库内容 
命令： 
`find .git/objects -type f `

```
git cat-file -p 83baae61804e65cc73a7201a7252750c76066a30 
git cat-file -p 1f7a7a472abf3dd9643fd615f6da379c4acb3e3a
```

##### 问题：
1. 记住**文件的每一个版本**所对应的 SHA-1 值并不现实
2. 在 Git 中，文件名并没有被保存 —— 我们仅保存了文件的内容
==**解决方案：树对象 **==

**注意:**
当前的操作都是在对本地数据库进行操作不涉及暂存区

##### Git存储的是数据

#### 树对象
树对象（tree object），它能解决文件名保存的问题，也允许我们将多个文件组织到一起。Git 以一种类似于 UNIX 文件系统的方式存储内容。所有内容均以树对象和数据对象(git 对象)的形式存储，其中树对象对应了 UNIX 中的目录项，数据对象(git 对象)则大致上对应文件内容。一个树对象包含了一条或多条记录（每条记录含有一个指向 git 对象或者子树对象的 SHA-1 指针，以及相应的模式、类型、文件名信息）。一个树对象也可以包含另一个树对象。

我们可以通过 update-index；write-tree；read-tree 等命令来构建树对像并塞入到暂存区。

假设我们做了一系列操作之后得到一个树对像

##### 操作
1. 利用 `  update-index `命令 为 test.txt 文件的首个版本——创建一个
暂存区。并通过 ` write-tree `命令生成树对像。
命令：
`echo "test.txt v1" > test.txt`
`git hash-object -w test.txt`
`git update-index --add --cacheinfo 100644  560a3d89bf36ea10794402f6664740c284d4ae3b test.txt `

` git write-tree  `

文件模式为 
100644，表明这是一个普通文件 
100755，表示一个可执行文件； 
120000，表示一个符号链接。

`--add `选项： 因为此前该文件并不在暂存区中 首次需要`-—add `

`--cacheinfo `选项： 因为将**要添加的文件位于 Git 数据库中**，而不是位于当前目录下 所有需要`-—cacheinfo `
 
**查看暂存区当前的样子**
`git ls-files -s`

2. 新增 new.txt 将 new.txt 和 test.txt 文件的第二个个版本
塞入暂存区。并通过 write-tree 命令生成树对像。
命令： 
```
echo 'new file' > new.txt 
//修改test.txt的内容，使其成为版本v2
git hash-object -w test.txt
```
从目前为止，库里一共是四条记录，即
![Alt text](img/%E5%9B%9B%E4%B8%AA%E5%93%88%E5%B8%8C.png)
第一个是树对象（即项目的一个版本记录）
一个是 test.txt 文件的版本 v1
一个是 test.txt 文件的版本 v2
一个是  new.txt  文件的版本 v1

```
git update-index --cacheinfo 100644 test.txt第二个版本的哈希 test.txt 

git update-index --cacheinfo 100644 new的哈希 new.txt

//git update-index --add new.txt 
git write-tree 
```
![Alt text](img/%E4%BA%94%E4%B8%AA%E8%AE%B0%E5%BD%95.png)
**目前是三个Git对象，两个树对象**
树一：` 06e21bb0105e2de6c846725a9a7172f57dd1af96 `
数二：` fa7df0191ee34ec020a6a4006ea645a5d709d097 `

3. 将第一个树对象加入第二个树对象，使其成为新的树对象
**命令：**
```
git read-tree 
--prefix=bak 第一颗的哈希 
git write-tree 
```
` read-tree ` 命令，可以把树对象读入暂存区

**最后的树：**

![Alt text](img/%E6%9C%80%E5%90%8E%E7%9A%84%E6%A0%91.png)

##### 问题
现在有三个树对象（执行了三次 write-tree），分别代表了我们想要跟踪的不同项目快照。然而问题依旧：若想重用这些快照，你必须记住所有三个SHA-1 哈希值。 并且，你也完全不知道是谁保存了这些快照，在什么时刻保存的，以及为什么保存这些快照。而以上这些，正是提交对象（commit object）能为你保存的基本信息

**查看树对象：**
`git cat-file -p 6ca41ab7f4e217c254a2b9c6988df2b5aaca47f1` 即第三个树的哈希
![Alt text](img/%E6%9F%A5%E7%9C%8B%E6%A0%91%E5%AF%B9%E8%B1%A1.png)

#### 提交对象
我们可以通过调用 commit-tree 命令创建一个提交对象，为此需要指定一个树对象的 SHA-1 值，以及该提交的父提交对象（如果有的话 第一次将暂存区做快照就没有父对象）

##### 创建提交对象 
` echo 'first commit' | git commit-tree 树一的哈希 `

**返回提交对象的哈希：**
提交对象1: `fdf4fc3344e67ab068f836878b6c4951e3b15f3d`

##### 查看提交对象 
`git cat-file -p fdf4fc33 //提交对象的哈希(前几个哈希文就可以) `

返回：
>一个树对象的哈希
>提交者的名字
>提交者的邮箱
>提交的信息

##### 提交对象的格式
提交对象的格式很简单：它先指定一个顶层树对象，代表当前项目快照；然后是作者/提交者信息（依据你的 user.name 和 user.email 配置来设定，外加一个时间戳）；留空一行，最后是提交注释

接着，我们将创建另两个提交对象，它们分别引用各自的上一个提交（作为其
父提交对象）：

`echo 'second commit' | git commit-tree 树2的哈希 -p 提交对象1`
提交对象2: ` cac0cab538b970a37ea1e769cbbde608743bc96d `

`echo 'third commit' | git commit-tree 树3的哈希 -p 提交对象2 `
提交对象3: `1a410efbd13591db07496601ebc7a059dd55cfe9`

![Alt text](img/%E5%A4%9A%E4%B8%AA%E6%8F%90%E4%BA%A4%E5%AF%B9%E8%B1%A1.png)

##### 注意 
` git commit-tree `不但生成提交对象 而且会将对应的快照（树对象）提交到本地库中 

#### 总结:
实际上**树对象**保存了文件的对象和其他树对象,而**提交对象**保存了树对象和提交者的信息、上一个提交对象,实际上提交对象才是每个版本的快照和说明。

树对象只是保存了版本快照，但没有保存版本说明。

实际上树对象完整的保留了每个版本的快照，而不是增量的保存，这样虽然付出了更多的空间，但却可以完整的保留所有历史版本。

![Alt text](img/%E5%A4%9A%E4%B8%AA%E6%8F%90%E4%BA%A4%E5%AF%B9%E8%B1%A1.png)

### Git高层命令

#### Git操作最基本的流程
1. 创建工作目录: `git init`
2. 对工作目录进行修改 
3. `git add 文件名` 在库生成了Git对象,同时推送到暂存区
   >`git hash-object -w 文件名(修改了多少文件,就被执行了多少次)`
   >`git updata -index --add --cacheinfo 100644 Git的哈希` 
4. `git commit -m "注释内容"` 生成了树对象和提交对象
   >`git write-tree`
   >`git commit-tree 树的哈希 -m "提交的信息"`

#### 初始化新仓库

**命令：** `git init`

**解析：** 要对现有的某个项目开始用 Git 管理，只需到此项目所在的目录，执
行：` git init `

**作用：**初始化后，在当前目录下会出现一个名为 .git 的目录，**所有 Git 需要的数据和资源都存放在这个目录中**。不过目前，仅仅是按照既有的结构框架初始化好了里边所有的文件和目录，但我们还没有开始跟踪管理项目中的任何一个文件。

工作目录下面的所有文件都不外乎这两种状态：**已跟踪 或 未跟踪**

已跟踪的文件是指本来就被纳入版本控制管理的文件，在上次快照中有它们的记录，工作一段时间后，它们的状态可能是 ==**已提交，已修改或者已暂存**==

所有其他文件都属于未跟踪文件。它们既没有上次更新时的快照，也不在当前的暂存区域。

初次克隆某个仓库时，工作目录中的所有文件都属于已跟踪文件，且状态为已提交；在编辑过某些文件之后，Git 将这些文件标为已修改。我们逐步把这些修改过的文件放到暂存区域，直到最后一次性提交所有这些暂存起来的文件。使用 Git 时的文件状态变化周期如下图所示


#### 检查当前文件状态
命令：`git status`
作用：确定文件当前处于什么状态

#### 跟踪新文件（暂存区）,将修改添加到暂存区 
**命令：** `git add 文件名`

**作用：** 跟踪一个新文件,实际上是这样子的 > ==**工作区文件 -> 在库中生成Git对象 -> 推送到暂存区**==


#### 查看已暂存和未暂存的更新 
实际上` git status `的显示比较简单，仅仅是列出了修改过的文件，如果要查看具体修改了什么地方，可以用` git diff `命令.这个命令它已经能解决我们

两个问题了：当前做的哪些更新还没有暂存？有哪些更新已经暂存起来准备
好了下次提交？
1. 当前做的哪些更新还没有暂存？，
命令：`git diff`（不加参数直接输入 git diff）
1. 有哪些更新已经暂存起来准备好了下次提交？
命令： ` git diff –cached ` 或者` git diff –staged `(1.6.1 以上)


#### 提交更新 
当暂存区域已经准备妥当可以提交时，在此之前，请一定要确认还有什么修改过的或新建的文件还没有 git add 过，否则提交的时候不会记录这些还没暂存起来的变化。所以，每次准备提交前，先用 git status 看下，是不是都已暂存起来了，然后再运行提交命令` git commit`

命令：`git commit`
注意：这种方式会启动文本编辑器以便输入本次提交的说明

默认的提交消息包含最后一次运行 git status 的输出，放在注释行里，另外开头还有一空行，供你输入提交说明。你完全可以去掉这些注释行，不过留着也没关系，多少能帮你回想起这次更新的内容有哪些。

尽管使用暂存区域的方式可以精心准备要提交的细节，但**有时候这么做略显繁琐。Git 提供了一个跳过使用暂存区域的方式**，只要在提交的时候，给` git commit `加上` -a `选项，Git 就会自动把所有已经跟踪过的文件暂存起来一并提交，从而跳过` git add `步骤,不过要先有跟踪.


`git commit -a` : 将所有已跟踪文件中的执行修改或删除操作的文件都提交到本地仓库，即使它们没有经过 git add 添加到暂存区。

#### 移除文件
要从 Git 中移除某个文件，就必须要从已跟踪文件清单中注册删除（确切地说，是在暂存区域注册删除），然后提交。可以用 ` git rm `命令完成此项工作，并连带从工作目录中删除指定的文件，这样以后就不会出现在未跟踪文件清单中了。

这里里的删除不是真的删除，只是**打上已删除的标识而已**，仍然存在于本地仓库中
实际上是同时删除了工作区和暂存区的相关文件。

` git rm ` 此命令只能删除没修改过的文件，实际上相当于 
```
rm 文件名
<!-- 此时会变成以修改，需要提交到暂存区 -->
git add 文件名
<!-- 再去提交 -->
```

`git rm -f 文件名` 文件修改后的删除

`git rm --cached 文件名` 删除暂存区文件，但保留工作区的文件，并且将这次删除放入暂存区。

#### 文件改名 
`git mv 文件名 被修改的文件名` 实际上,修改文件名就相当于删除了老文件，新建了一个文件,一般而言，都需要删除老文件操作一下，同时`add`新文件一下,不过此操作取代了下面的操作，比较简便:
其实，运行 git mv 就相当于运行了下面三条命令：
>mv README.txt  README
git rm README.txt
git add README

#### 查看历史记录

`git log `: 提交历史,默认是五行

在提交了若干更新，又或者克隆了某个项目之后，你也许想回顾下提交历史。
完成这个任务最简单而又有效的工具是 ` git log `命令

**参数:**
` git log --pretty=oneline` 一条一行
` git log --oneline ` 一条一行,但哈希简写

#### 总结

`git init` 初始化仓库
`git status `查看文件的状态
`git diff` 查看哪些修改还没有暂存
`git diff --staged` 查看哪些修改以及被暂存了还没提交
`git log --oneline` 查看提交的历记录
`git add./ ` 将修改添加到暂存区
` git reflog ` **查看仓库所有操作**
将暂存区提交到版本库:
`git commit`
`git commit -a`
`git commit -a -m "注释"`

### Git 分支操作
几乎所有的版本控制系统都以某种形式支持分支。 使用分支意味着你可以把你的工作从开发主线上分离开来，以免影响开发主线。 在很多版本控制系统中，这是一个略微低效的过程——常常需要完全创建一个源代码目录的副本。对于大项目来说，这样的过程会耗费很多时间。

而 Git 的分支模型极其的高效轻量的。是 Git 的必杀技特性，也正因为这一特性，使得 Git 从众多版本控制系统中脱颖而出

#### 创建分支
**命令：** `git branch 分支名`
**作用：**
为你创建了一个可以移动的新的指针。 比如，创建一个 testing 分
支：` git branch testing `。这会在当前所在的提交对象上创建一个指针
 注意：
1. `git branch 分支名` 创建一个新分支，并不会自动切换到新分支中去,搭配`git checkout 分支名` 即可

![Alt text](img/%E5%88%9B%E5%BB%BA%E5%88%86%E6%94%AF.png)

`git branch `不只是可以创建与删除分支。 如果不加任何参数运行它，会得到 **当前所有分支的一个列表**
` git branch -d 分支名` 删除分支，（删除空的分支删除已经被合并的分支） `-D `强制删除
` git branch -v ` 可以查看每一个分支的最后一次提交
` git branch 分支名 commitHash` 新建一个分支并且使分支指向对应的提交对象相当于时光机
>`git branch –merged`
查看哪些分支已经合并到当前分支
在这个列表中分支名字前没有 * 号的分支通常可以使用
`git branch -d` 删除掉

>`git branch --no-merged`
查看所有包含未合并工作的分支
尝试使用` git branch -d `命令删除在这个列表中的分支时会失败。
如果真的想要删除分支并丢掉那些工作，可以使用` -D `选项强制删
除它。

#### 切换分支
 
` git checkout 分支名`
**切回 master 命令：** `git checkout master`

![Alt text](img/%E5%88%87%E6%8D%A2%E5%88%86%E6%94%AF.png)

`-b` 可以创建的同时切换过去 `git checkout -b 分支名`


**注意 :**

==**分支切换会改变你工作目录中的文件，同时缓存区也会被改变**==

在切换分支时，一定要注意你工作目录里的文件会被改变。 如果是切换到一个较旧的分支，你的工作目录会恢复到该分支最后一次提交时的样子。同时缓存区也会被改变。如果 Git 不能干净利落地完成这个任务，它将禁止切换分支

==**每次在切换分支前 提交一下当前分支**==
==**每次切换分支前当前分支一定得是干净的（已提交状态）**==

在切换分支时如果当前分支上有未暂存的修改（第一次）或者有未提交的暂存（第一次）
分古可以切换成功 ， 但是这种操作可能会污染其他分古

![Alt text](img/%E4%BF%AE%E6%94%B9%E5%88%86%E6%94%AF%E4%B9%8B%E5%90%8E%E6%8F%90%E4%BA%A4.png)


#### 查看项目分叉历史
`git log --oneline --decorate --graph --all` 

以后可以起别名 方便快速输入。


#### 分支合并

![Alt text](img/%E5%90%88%E5%B9%B6%E7%9A%84%E7%9B%AE%E7%9A%84.png)

先切回主分支，执行 `git merge 被合并分支` ,可以将被合并分支的代码合并到主分支。

然后就可以删除被合并分支 `git branch -d 被合并分支`

这种合并称为：快进合并
![Alt text](img/%E5%BF%AB%E8%BF%9B%E5%90%88%E5%B9%B6.png)

#### 分支模式

**长期分支：**
![Alt text](img/%E9%95%BF%E6%9C%9F%E5%88%86%E6%94%AF.png)


#### 分支的本质
Git 的分支，其实本质上仅仅是指向提交对象的可变指针。 Git 的默认分支名字是` master `。 在多次提交操作之后，你其实已经有一个指向最后那个提交对象的` master `分支。 它会在每次的提交操作中自动向前移动。

HEAD是一个指针，默认是指向master分支，切换分支其实就是让HEAD指向不同的分支  每次有新的提交时HEAD都会带着当前指向的分支,一起往前移动

#### 分支原理
`git/refs`  : 这个目录中保存了分支及其对应的提交对象

**HEAD :** 它是一个指向其他引用的指针

### Git存储
当你在项目的一部分上已经工作一段时间后，所有东西都进入了混乱的状态，而这时你想要切换到另一个分支做一点别的事情。 问题是，你不想仅仅因为过会儿回到这一点而为做了一半的工作创建一次提交。 针对这个问题就需要Git存储

`git stash `命令会将未完成的修改保存到一个栈(后进先出)上，而你
可以在任何时候重新应用这些改动 `git stash apply`

`git stash apply 名字 ` 如果不指定一个储藏，Git 认为指定的是最近的储藏
` git stash list `:查看存储
` git stash drop 名字` :将要移除的储藏的名字来移除它
`git stash pop 名字` 来应用储藏然后立即从栈上扔掉它

### 配别名
Git 并不会在你输入部分命令时自动推断出你想要的命令。 如果不想每次都输入完整的 Git 命令，可以通过 git config 文件来轻松地为每一个命令设置一个别名。
```
git config --global alias.co checkout
git config --global alias.br branch
git config --global alias.ci commit
git config --global alias.st status
```
主要是针对这个
`git config --global alias.XXX "log --oneline --decorate --graph --all"` 太长的用双引号包起来，防止出现 BUG
可以简化为 ` git XXX`

### 撤销（后悔药）

#### 撤销在工作目录的修改
`git checkout --文件名（文件路径） ` ：将在工作目录中对文件的修改撤销

#### 撤销在暂存区的修改
`git reset HEAD(默认的指针) 文件名` ：将文件从暂存区中撤回到工作目录

#### 撤销版本库的修改

**注释信息错误：**
`git commit --amend `  如果自上次提交以来你还未做任何修改（例如，在上次提交后马上执行了此命令），那么快照会保持不变，而你所修改的只是提交信息

**提交错误或者是缺失：**
如果你 **提交后发现忘记了暂存某些需要的修改**，可以像下面这样操作
```
git commit -m 'initial commit'
git add ./
git commit –amend
```
最终你只会有一个提交 -> 第二次提交将代替第一次提交的结果

意思就是如果你提交完项目，发现 **有些修改你忘补充了,就把这些修改add到暂存区，然后对上一次的提交进行修订**,可以说amend命令不是撤销提交，而是对提交进行修订（修改注释或者补充修改内容）

本质上是 把旧的错误的隐藏，再次提交，看怎么理解，说是修订也没问题，但是实际上是重新提交了

另外可以直接` git commit -a --amend `,然后改注释，一次到位，当然，**有新文件的话，那还是先单独add**

### Reset重置三部曲（commithash）

==**Reset的命令移动了HEAD，会带着分支一起走**==

移动 HEAD : `git reset –soft HEAD~ ` 
这与改变 HEAD 自身不同（checkout 所做的）；reset 移动 HEAD 指向的分支。

它本质上是撤销了上一次 git commit 命令。 当你在运行 git commit 时，Git 会创建一个新的提交，并移动 HEAD 所指向的分支来使其指向该提交。
当你将它 reset 回 HEAD~（HEAD 的父结点）时，其实就是把该分支移动回原来的位置，而不会改变索引和工作目录。 现在你可以更新索引并再次运行` git commit` 来完成 `git commit --amend` 所要做的事情了。

`git reset [--mixed] HEAD~`
`[--mixed] ` ： 不保存暂存区
注意  ` git reset HEAD~  `等同于`  git reset –mixed HEAD~`
:它依然会撤销一上次 提交，但还会 取消暂存 所有的东西。 于是，我们回滚到了所有` git add `和 `git commit` 的命令执行之前。

`git reset --hard HEAD~`
你撤销了最后的提交、git add 和 git commit 命令以及工作目录中的所有工作。

必须注意，`--hard `标记是 `reset `命令唯一的危险用法，它也是 Git 会
真正地销毁数据的仅有的几个操作之一。 其他任何形式的` reset `调用都可
以轻松撤消，但是 `--hard `选项不能，因为**它强制覆盖了工作目录中的文件**。
在这种特殊情况下，我们的 Git 数据库中的一个提交内还留有该文件的 v3 版
本，我们可以通过 `reflog `来找回它。**但是若该文件还未提交，Git 仍会覆
盖它从而导致无法恢复。**

**路径reset：**
` git reset 文件名 ` 相当于 是 ` git reset --mixed HEAD 文件名`
撤销暂存区文件的修改，回到上一次提交的文件。

注意点：首先不同于` reset --hard ` , ` checkout ` 对工作目录是安全的，它会通过检查来确保不会将已更改的文件弄丢。而 `reset --hard` 则会不做检查就全面地替换所有东西。
第二个重要的区别是如何更新 HEAD。 reset 会移动 HEAD 分支的指向，而 checkout 只会移动 HEAD 自身来指向另一个分支。
![Alt text](img/reset%20%E5%92%8C%20checkout%E7%9A%84%E5%8C%BA%E5%88%AB.png)

`git checkout -- 文件名 ` 更新工作目录
`git checkout commithash 文件名 ` 更新工作目录和暂存区

### 数据恢复

在你使用 Git 的时候，你可能会意外丢失一次提交。 通常这是因为你强制删除了
正在工作的分支，但是最后却发现你还需要这个分支；亦或者硬重置了一个分支，放弃了你想要的提交。 如果这些事情已经发生，该如何找回你的提交呢？

使用`  git reflog `找到了你想恢复到的版本 执行` git branch 分支名 hash `
现在有一个新的的分支是你的 master 分支曾经指向的地方，再一次使得前两次提交可到达了。

或者是执行 ` git reset --hard hash`

### 打Tag(标签名)
#### 列出Tag
`git tag -l '标签名*'`

#### 创建Tag
`git tag 标签名` 默认最新的提交
`git tag v1.4 commitHash` 指定的提交对象


#### 查看标签
`git show 标签名`

#### 删除标签
`git tag -d 标签名`

#### 检出标签
`git checkout 标签名`

这会使你的仓库处于“分离头指针（detacthed HEAD）”状态。在“分离头指针”状态下，如果你做了某些更改然后提交它们，标签不会发生变化，但你的新提交将不属于任何 分支，并且将无法访问，除非访问确切的提交哈希。因此，如果你需要进行更改——比如说你正在修复旧版本的错 误,这通常需要创建一个新分支：
`git checkout -b 分支名`

简而言之:检出标签之后如果想做修改,必须创建一个新分支。才能做修改并且提交。


## 远程仓库

### Github仓库的创建
![Alt text](img/Github%E4%BB%93%E5%BA%93%E5%88%9B%E5%BB%BA.png)
![Alt text](img/%E4%BB%93%E5%BA%93%E5%88%9B%E5%BB%BA01.png)
![Alt text](img/%E4%BB%93%E5%BA%9302.png)

### 为远程仓库配置别名和用户信息
`git remote –v`:显示远程仓库使用的 Git 别名与其对应的 URL
`git remote add 仓库别名 url`:添加一个新的远程 Git 仓库，同时指定一个你可以轻松引用的简写

`git config user.name "名字"`
`git config user.email "邮箱"`

`git branch -M main` 改主分支名字为 main

### 推送本地项目到远程仓库
`git push 仓库别名 分支名(一般是main)`

`git push 仓库别名 本地分支名:远程分支名`

### 克隆远程仓库到本地
`git clone url （克隆时不需要 git init）`

### 邀请成员加入团队
![Alt text](img/%E8%BF%9C%E7%A8%8B%E4%BB%93%E5%BA%93%E9%A1%B9%E7%9B%AE%E8%AE%BE%E7%BD%AE.png)
![Alt text](img/%E9%82%80%E8%AF%B7.png)

### 更新成员提交的内容
`git fetch 别名`
git fetch [remote-name]
这个命令会访问远程仓库，从中拉取所有你还没有的数据。 执行完成后，你将会拥有那个远程仓库中所有分支的引用，可以随时合并或查看必须注意 git fetch 命令会将数据拉取到你的本地仓库 - 它并不会自动合并或修改你当前的工作。当准备好时你必须手动将其合并入你的工作。

`git merge 分支名` 合并分支



`git pull ` 相当于这里的两个，如果分支产生了冲突了，就还要自己处理
只能在 **远程跟踪分支和本地分支建立联系时使用**


### 远程分支 远程跟踪分支 本地分支 的区别


![Alt text](img/%E8%BF%9C%E7%A8%8B%E8%B7%9F%E8%B8%AA%E5%88%86%E6%94%AF.png)

绿色的是本地分支 红色的是远程跟踪分支  远程分支是仓库的分支

实际上push（fetch）时，是远程跟踪分支同远程分支进行同步，在fetch时，会在本地创建 远程跟踪分支，除了克隆仓库时主分支和远程跟踪分支有联系，其他分支创建时，一般没有联系，这个时候如果在本地分支和远程跟踪分支同步之后，重新提交本地分支，那么就会面临push失败的情况。因为远程跟踪分支和远程分支的版本是一样的。

#### 一个本地分支怎么去跟踪一个远程跟踪分支（联系）
1. 当克隆的时候 会自动生成一个master本地分支(已经跟踪了对应的远程跟踪分支)
2. 在新建其他分支时 可以指定想要跟踪的远程跟踪分支
   ` git checkout -b 本地分支名 远程跟踪分支名`
   ` git checkout --track  远程跟踪分支名 `（这样子是同名的）
3. 将一个已经存在的本地分支 联系 一个远程跟踪分支   
   `git branch -u 远程跟踪分支名   `

**查看已经建立联系的分支:** `git branch -vv`

#### 删除远程分支
`git push origin --delete serverfix`  删除远程分支
`git remote prune origin --dry-run`   列出仍在远程跟踪但是远程已被删除的无用分支
`git remote prune origin `   清除上面命令列出来的远程跟踪


## 冲突

### 本地冲突
合并之后，会在冲突文件内有区域提示，自己打开文件处理，处理完毕之后重新提交一次，完成对冲突的处理。

### 远程冲突
即你在提交之前，有另一个版本提交了，而你刚刚好提交的内容有重复的地方，就重新`pull`一下，找到重复地方，做出修改，再提交一次版本，重新推送。

写一半拉取之后，发现版本落后之后而且有冲突，先提交一次，然后再拉取，做修改，再此提交，然后再推送。


## 派生

如果你想要参与某个项目，但是并没有推送权限，这时可以对这个项目进行“派生”（Fork）。 派生的意思是指，GitHub 将在你的空间中创建一个完全属于你的项目副本，且你对其具有推送权限。通过这种方式，项目的管理者不再需要忙着把用户添加到贡献者列表并给予他们推送权限。 人们可以派生这个项目，将修改推送到派生出的项目副本中，并通过创建合并请求（Pull Request）来让他们的改动进入源版本库。
基本流程：
1. 从 master 分支中创建一个新分支 （自己 fork 的项目）
2. 提交一些修改来改进项目 （自己 fork 的项目）
3. 将这个分支推送到 GitHub 上 （自己 fork 的项目）
4. 创建一个合并请求
5. 讨论，根据实际情况继续修改
6. 项目的拥有者合并或关闭你的合并请求
注意点：
每次在发起新的 Pull Request 时 要去拉取最新的源仓库的代码而不是自己 fork 的那个仓库。
`git remote add <shortname 源仓库> <url 源仓库>`
`git fetch 远程仓库名字`
`git merge 对应的远程跟踪分支`

## 远程协作
### 三个必须懂得概念
    本地分支
    远程跟踪分支(remote/分支名)
    远程分支

### 远程协作的基本流程
    第一步: 项目经理创建一个空的远程仓库
    第二步: 项目经理创建一个待推送的本地仓库
    第三步: 为远程仓库配别名  配完用户名 邮箱
    第四步: 在本地仓库中初始化代码 提交代码
    第五步: 推送
    第六步: 邀请成员
    第七步: 成员克隆远程仓库
    第八步: 成员做出修改
    第九步: 成员推送自己的修改
    第十步: 项目经理拉取成员的修改

### 做跟踪
    克隆才仓库时 会自动为main做跟踪
    本地没有分支
        git checkout --track 远程跟踪分支(remote/分支名)
    本地已经创建了分支
        git branch -u 远程跟踪分支(remote/分支名)
### 推送
    git push
### 拉取
    git pull
### pull request
    让第三方人员参与到项目中 fork


### 使用频率最高的五个命令
    git status
    git add
    git commit
    git push
    git pull

































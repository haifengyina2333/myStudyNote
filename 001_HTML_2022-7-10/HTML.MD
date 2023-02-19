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
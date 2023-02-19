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








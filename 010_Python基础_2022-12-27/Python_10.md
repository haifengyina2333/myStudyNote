## 综合案例：

#### json
- JSON是一种轻量级的数据交互格式。可以按照JSON指定的格式去组织和封装数据
- JS0N本质上是一个带有特定格式的字符串

主要功能：**json就是一种在各个编程语言中流通的数据格式，负责不同编程语言中的数据传递和交互**，类似于：
- 国际通用语言-英语
- 中国56个民族不同地区的通用语言-普通话

各种编程语言存储数据的容器不尽相同，在Python中有字典dict这样的数据类型，而其它语言可能没有对应的字典。

为了让不同的语言都能够相互通用的互相传递数据，JSON就是一种非常良好的中转数据格式。如下图，以Py tho和C语言互传数据为例：
![Alt text](img/json.png)

#### json格式数据转化

![Alt text](img/json%E6%95%B0%E6%8D%AE%E6%A0%BC%E5%BC%8F.png)

![Alt text](img/python%E5%92%8Cjson%E7%9A%84%E6%95%B0%E6%8D%AE%E8%BD%AC%E6%8D%A2.png)

` json.dumps(data,ensure_ascii=False) ` 中文变成字符，后面加这
个参数

#### Pyecharts 模块
Echarts是个由百度开源的数据可视化，凭借着良好的交互性，精巧的图表设计，得到了众多开发者的认可.而Python是门富有表达力的语言，很适合用于数据处理.当数据分析遇上数据可视化时oyecharts诞生了.

**安装：**
` pip install pyecharts `

输入`python ` `import pyecharts`  验证安装

打开官方画廊：：https://gallery.pyecharts.org/#/README


#### Pyecharts的入门使用：
```python
# 导包 
from pyecharts.charts import Line
# 创建一个折线图对象
line = Line()
# 给折线图对象添加X轴
line.add_xaxis(["中国","美国","英国"])
# 给折线图对象添加Y轴
line.add_yaxis("GDP",[30,20,10])
# 将代码生成为图像
line.render()
# 会生成一个html文件
```

#### pyecharts模块配置选项：

**常用到2个类别的选项：**
- 全局配置选项
- 系列配置选项

**全局配置：**
全局配置选项可以通过` set_global_.opts `方法来进行配置，相应的选项和选项的功能如下：
 ```python
line.set_global_opts(
# 标题控制
title_opts=TitleOpts("测试",pos_left="center",pos_bottom="1%")
# 图例
Legend_opts=LegendOpts(is_show=True),
# 工具箱
toolbox_opts=ToolboxOpts(is_show=True),
# 视觉衍射
visualmap_opts=VisualMapOpts(is_show=True),

tooltip_opts=TooltipOpts(is_show=True),
)
```

#### 
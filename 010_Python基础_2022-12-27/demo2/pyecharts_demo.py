# 导包 折线图包 
from pyecharts.charts import Line
# 标题的控制包 图例包 工具箱包
from pyecharts.options import TitleOpts,LegendOpts,ToolboxOpts,VisualMapOpts

# 创建一个折线图对象
line = Line()
# 给折线图对象添加X轴
line.add_xaxis(["中国","美国","英国"])
# 给折线图对象添加Y轴
line.add_yaxis("GDP",[30,20,10])
# 设置全局配置
line.set_global_opts(
    title_opts = TitleOpts(title="GDP展示",pos_left="center",pos_bottom="1%"),
    # 图例
    Legend_opts=LegendOpts(is_show=True),
    # 工具箱
    toolbox_opts=ToolboxOpts(is_show=True),
    # 视觉衍射
    visualmap_opts=VisualMapOpts(is_show=True),
)


# 将代码生成为图像
line.render()

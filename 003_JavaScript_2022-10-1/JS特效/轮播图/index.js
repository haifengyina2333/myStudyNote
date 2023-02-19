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





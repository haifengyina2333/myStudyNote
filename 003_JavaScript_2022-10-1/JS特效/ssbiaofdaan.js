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

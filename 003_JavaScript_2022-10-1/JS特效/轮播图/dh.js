function animate(obj,target,callback){
    //相当于 callback = function(){};
        obj.times = setInterval(function(){
            var step = (target - obj.offsetLeft) / 10;
            step = step > 0 ? Math.ceil(step) : Math.floor(step);
            if(obj.offsetLeft == target){
               clearInterval(obj.times);
            if(callback){ //存在就执行
               callback();
                }
                // callback &&　callback(); 更好的写法
             }
            obj.style.left = obj.offsetLeft + step + 'px';
        },15)
}


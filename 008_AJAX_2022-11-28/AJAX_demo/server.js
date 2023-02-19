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
    response.send('这是一个Get的响应体。（给/server的）');
});


app.post('/server',(request,response)=>{
    // 设置响应头 设置允许跨越
    response.setHeader('Access-Control-Allow-Origin','*');

    // 设置自定义请求头的时候使用

    // 设置响应头 允许所有类型响应头
    // 还要把post 改成 all
    response.setHeader('Access-Control-Allow-Headers','*');


    // 简单的响应
    response.send('这是一个Post的响应体。（给/server的）');
});

//响应 JSon 数据
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

//针对IE的缓存问题
app.get('/ie',(request,response)=>{
    // 设置响应头 设置允许跨越
    response.setHeader('Access-Control-Allow-Origin','*')
    // 简单的响应
    response.send('这是一个IE缓存问题的响应体。2（给/server的）');
});

// 等待3s再响应
app.get('/delay',(request,response)=>{
    // 设置响应头 设置允许跨越
    response.setHeader('Access-Control-Allow-Origin','*');
    setTimeout(()=>{
        response.send('对不起,我刚有空');
    },3000);
});

// Jquery服务
app.all('/JQ',(request,response)=>{
    // 设置响应头 设置允许跨越
    response.setHeader('Access-Control-Allow-Origin','*')

    const data = {name:'hello'}
    // 简单的响应
    response.send(JSON.stringify(data));
});

app.all('/axios',(request,response)=>{
    // 设置响应头 设置允许跨越
    response.setHeader('Access-Control-Allow-Origin','*')
    response.setHeader('Access-Control-Allow-Headers','*');

    const data = {name:'hello'}
    // 简单的响应
    response.send(JSON.stringify(data));
});

app.all('/fetch',(request,response)=>{
    // 设置响应头 设置允许跨越
    response.setHeader('Access-Control-Allow-Origin','*')
    response.setHeader('Access-Control-Allow-Headers','*');

    const data = {name:'hello'}
    // 简单的响应
    response.send(JSON.stringify(data));
});

// 端口监听启动服务
app.listen(8001,()=>{
    console.log("服务启动成功，8001端口正在运行");
});
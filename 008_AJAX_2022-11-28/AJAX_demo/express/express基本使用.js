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
    console.log("服务启动成功，8000端口正在运行");
});

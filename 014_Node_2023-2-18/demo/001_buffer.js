var str = "你好啊";
//将一个字符串保存buffer中
var buf = Buffer.from(str);
// buf.length //占用内存的大小（中文占三个字节，因为占一个）
// str.length //字符串的长度
console.log(buf);


// fs.open("hello2.txt", "w", function (err, fd) {
//     //判断是否出错
//     if (!err) {
//         //如果没有出错，则对文件进行写入操作
//         fs.write(fd, "这是异步写入的内容", function (err) {
//             if (!err) {
//                 console.log("写入成功~~");
//             }
//             //关闭文件
//             fs.close(fd, function (err) {
//                 if (!err) {
//                     console.log("文件已关闭~~");
//                 }
//             })
//         });
//     } else {
//         console.log(err);
//     }
// });

// var fs = require("fs");
// var path = "路径";
// fs.readFile(path, function (err ,data) {
//     if (!err) {
//         //console.log(data);
//         //将data写入到文件中
//         fs.writeFile("hello.jpg", data, function (err) {
//             if (!err) {
//                 console.log("文件写入成功");
//             }
//         });
//     }
// });
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
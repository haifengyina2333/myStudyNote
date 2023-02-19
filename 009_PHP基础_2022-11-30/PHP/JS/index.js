
// Jquery 入口函数 
$(document).ready(function () {
    console.log('====================================================');
    hello();
});

function hello() {
    // 验证表单的JS代码
    // Jquery 获取对象
    let zh = $("#username");
    let mm = $("#password");
    // 正则表达式匹配
    const zhhyz = /^\d{3,12}$/;
    const mmyz = /^[a-zA-Z0-9]{5,12}$/;
    // 失去焦点触发方法
    zh.blur(function () {
        // 正则表达式匹配 表单值
        if (!zhhyz.test(zh.val())) {
            alert('用户名不符合规范，账号应由3 ~ 12 位数字组成。');
            zh.val('');
            console.log('账号表单失去焦点，触发');
        } else {
            // 密码表单失去焦点的相关验证代码
            mm.blur(function () {
                if (!mmyz.test(mm.val())) {
                    alert('密码不符合规范,密码长度应为5 ~ 12位,由字母和数字组成。');
                    mm.val('');
                    console.log('密码框失去焦点，触发');
                }
            });
        }
    });
}
## ES7

#### Array.prototype.includes(检测数组中是否包含某个元素)
` Includes ` 方法用来检测数组中是否包含某个元素，返回布尔类型值

```javascript
const mingzhu=['西游记'，'红楼梦'，'三国演义'，'水浒传]；
//判断
console.1og(mingzhu.includes('西游记'));
```


#### 指数操作符（幂运算）

在ES7中引入指数运算符 ` ** ` ，用来实现幂运算，功能与 ` Math.pow ` 结果相同


## ES8 ( async 和 await )

` async ` 和  ` await ` 两种语法结合可以让异步代码像同步代码一样

#### async 函数
```javascript
//async函数
async function fn(){
//返回一个字符串
//return '尚硅谷'；
//返回的结果不是一个 Promise 类型的对象，返回的结果就是成功 Promise 对象 
//return;
//抛出错误，返回的结果是一个失败的 Promise
//throw new Error('出错啦！')；
//返回的结果如果是一个Promise对象
    return new Promise((resolve,reject)=>{
        resolve('成功的数据');
        reject("失败的错误");
})

}

```

#### await表达式
1. **==await必须写在 async函数中==**
2. await右侧的表达式一般为 promise 对象
3. await返回的是 promise 成功的值
4. await的promise失败了,就会抛出异常，需要通过 try.catch捕获处理


#### ES8 对象方法的扩展
`Object.values() `方法返回一个给定对象的所有可枚举属性值的数组
`Object..entries()`方法返回一个给定对象自身可遍历属性 [key,value] 的数组
` Object.getownPropertyDescriptors() ` 该方法返回指定对象所有自身属性的描述对象
```javascript
//声明对象
const school
name:"尚硅谷"，
cities:['北京'，'上海'，'深圳']，
xueke:['前端'，'Java','大数据'，"运维']
}
//获取对象所有的键
console.log(object.keys(school));
//获取对象所有的值
console.log(object.values(school));
//entries
console.log(object.entries(school));

```

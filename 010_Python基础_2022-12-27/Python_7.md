## Python函数进阶

#### 函数的多返回值
```python
def test_return():
    return 1,2

x,y = test_return()
print(x) # 结果1
print(y) # 结果2

```

**按照返回值的顺序，写对应顺序的多个变量接收即可**
**变量之间用逗号隔开**
**支持不同类型的数据 return**

#### 函数的多种传参方式

**位置参数：**

**位置参数：调用函数时根据函数定义的参数位置来传递参数**
```python
def user_info(name,age,gender):
    print(f'您的名字是{name},年龄是{age},性别是{gender}')

user_info('TOM',20,'男')
```
注意：
==**传递的参数和定义的参数的顺序及个数必须一致**==

**关键字参数：**

**关键字参数：函数调用时通过 ` 键 = 值 ` 形式传递参数，**
作用：可以让函数更加清晰、容易使用，同时也清除了参数的顺序需求
```python

def user_info(name,age,gender)
    print(f"您的名字是：{name},年龄是：{age},性别是：{gender}")

#关键字传参
user_info(name="小明",age=20,gender="男")
#可以不按照固定顺序

user_info(age=20,gender="男",name="小明")
#可以和位置参数混用，位置参数必须在前，且匹配参数顺序
user_info("小明",age=20,gender="男")
```
**注意：**
**函数调用时，如果有位置参数时，==位置参数必须在关键字参数的前面==，但关键字参数之间不存在先后顺序**

**缺省参数:**
**缺省参数：缺省参数也叫默认参数，用于定义函数，为参数提供默认值，调用函数时可不传该默认参数的值（注意：**
所有位置参数必须出现在默认参数前，包括函数定义和调用).
作用：当调用函数时没有传递参数，就会使用默认是用缺省参数对应的值
```python
def user_.info(name,age,gender='男')：
    print(f'您的名字是{name},年龄是{age},性别是{gender}')

user_info('TOM',20)
user_info('Rose',18,)
```
注意：
**函数调用时，如果为缺省参数传值则修改默认参数值，否则使用这个默认值**
**要放在最后，否则报错**

**不定长参数**
**不定长参数：不定长参数也叫可变参数**
用升不确定调用的时候会传递多少个参数（不传参也可以）的场景，
作用：当调用函数时不确定参数个数时，可以使用不定长参数

不定长参数的类型：
- 位置传递
- 关键字传递

**位置传递**
```python
def user info(*args):
    print(args)
#('T0M',)
user_info('TOM')
#(T0M',18)
user info('TOM', 18)
```

注意：
传进的所有参数都会被 args 变量收集，它会根据传进参数的位置合并为**一个元组(tuple)**,args是元组类型，这就是位置传递

**关键字**
```python
def user info(**kwargs):
    print(kwargs)
#{'name':T0M','age':18,'id':110}
user_info(name = 'TOM', age = 18, id = 110)
```

注意：
参数是 “键=值” 形式的形式的情况下，**所有的 “键=值” 都会被 ` **kwargs `接受，同时会根据 “键=值” 组成字典**.

#### 匿名函数

**函数作为参数传递**
```python
def test_func(compute):
    result compute(1,2)
    print(result)

def compute(x,y):
    return x + y

test_func(compute)
#结果：3
```
函数compute,作为参数，传入了test funci函数中使用。
- test func需要一个函数作为参数传入，这个函数需要接收2个数字进行计算，计算逻辑由这个被传入函数决定
- compute函数接收2个数字对其进行计算，compute函数作为参数，传递给了test func函数使用
- 最终，在test funci函数内部，由传入的compute函数，完成了对数字的计算操作

所以，**这是一种，计算逻辑的传递，而非数据的传递**
就像上述代码那样，不仅仅是相加，相见、相除、等任何逻辑都可以自行定义并作为函数传入。

**lambda 匿名函数**
函数的定义中

- def关键字，可以定义带有名称的函数
- lambda关键字，可以定义匿名函数（无名称)

区别：

- 有名称的函数，可以基于名称重复使用。
- 无名称的匿名函数，只可临时使用一次。

**匿名函数定义语法：**
` lambda 传入参数：函数体（一行代码） `
` lambda `是关键字，表示定义匿名函数
传入参数表示匿名函数的形式参数，如：x,y表示接收2个形式参数
函数体，就是函数的执行逻辑，要注意：**只能写一行，无法写多行代码**

也可以通过lambda关键字，传入一个一次性使用的lambda匿名函数
```python   
def test_func(compute):
    result compute(1,2)
    print(result)

test_func(lambda x,y:x + y)  #结果：3

```
使用def和使用lambda,定义的函数功能完全一致，只是lambda关键字定义的函数是匿名的，无法二次使用

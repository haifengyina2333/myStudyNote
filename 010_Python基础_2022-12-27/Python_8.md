## Python 文件操作

#### 文件的编码
编码技术即：**翻译的规则，记录了如何将内容翻译成二进制，以及如何将二进制翻译回可识别内容。**

计算机中有许多可用编码：
- UTF-8
- GBK
- Big5
- ...

**不同的编码，将内容翻译成二进制也是不同的。**

#### 文件的读取操作
想想我们平常对**文件的基本操作**，大概可以分为**三个步骤（简称文件操作三步走）：**
1. 打开文件
2. 读写文件
3. 关闭文件

**注意：可以只打开和关闭文件，不进行任何读写**

**open()打开函数**
在Python,使用open函数，可以打开一个已经存在的文件，或者创建一个新文件，语法如下
` open(name,mode,encoding) `
- name:是要打开的目标文件名的字符串（可以包含文件所在的具体路径）。
- mode:设置打开文件的模式（访问模式）：只读、写入、追加等。
- encoding:编码格式（推荐使用UTF-8)
示例代码：

` f = open('python.txt','r',encoding="UTF-8") `
**encoding的顺序不是第三位，所以不能用位置参数，用关键字参数直接指定**

![Alt text](img/%E6%96%87%E4%BB%B6%E7%9A%84mode%E6%A8%A1%E5%BC%8F.png)

**read()方法：**
` 文件对象.read(num) `
num 表示要从文件中读取的数据的长度（单位是字节），如果没有传入num,那么就表示读取文件中所有的数据。

**同一个文件对象，读取方法的指针会一直存在，并且会被读取的方法影响。**

**readlines()方法：**
**readlines** 可以按照行的方式把**整个文件中的内容进行一次性读取，并且返回的是一个列表**，其中每一行的数据为一个元素。**(有换行的字符)**
```python
f = open('python.txt')
content = f.readlines()
# ['hello world n','abcdefg n','aaa\n','bbb\n','ccc']
print(content)
#关闭文件
f.close()
```

**readline方法**
` readline() ` 次读取一行内容 **(没有换行的字符)**

**循环读取**
```python 
for line in f:
    print(f"每一行的内容是：{line}")
```

**关闭文件**
` close( ) ` 关闭文件对象

` sleep ( ) ` 程序睡眠,需要导入 time 包

**with open语法**
```python
with open("python.txt","r",encoding="UTF-8") as f:
    for line in f:
        print(f"每一行的内容是：{line}")

#通过在with open的语句块中对文件进行操作
#可以在操作完成后自动关闭close文件，避免遗忘掉close方法
```
![Alt text](img/%E6%96%87%E4%BB%B6%E7%9A%84%E4%B8%80%E4%BA%9B%E6%93%8D%E4%BD%9C.png)


#### 文件的写入
```python
#1.打开文件
f = open('python.txt','w',encoding="UTF-8")       # w 模式会覆盖原内容
#2.文件写入
f.write('hello world')
#3.内容刷新
f.flush()
# 或者是直接使用 close ,close 内置了 flush 功能
f.close()
```
**注意：**
- **直接调用 write ,内容并未真正写入文件，而是会积攒在程序的内存中，称之为==缓冲区==**
- **当调用 flush 的时候，内容会真正写入文件**
- 这样做是避免频繁的操作硬盘，导致效率下降（攒一堆，一次性写磁盘）

#### 追加写入操作（和上面的差不多，区别看注意那里）
```python
# 1.打开文件，通过a模式打开即可
f = open('python.txt','a')
# 2.文件写入
f.write('hello world')
# 3.内容刷新
f.flush()
```
**注意：**
- a模式，文件不存在会创建文件
- a模式，文件存在会在最后，追加写入文件






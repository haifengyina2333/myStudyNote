## 面向对象(OOP)的思想——“万事万物皆对象”
### 面向过程(POP) 与 面向对象(OOP)
二者都是一种思想，面向对象是相对于面向过程而言的。面向过程， ==**强调的
是功能行为，以函数为最小单位，考虑怎么做。**== 面向对象，将功能封装进对
象，==**强调具备了功能的对象，以类/对象为最小单位，考虑谁来做。**==
面向对象更加强调运用人类在日常的思维逻辑中采用的思想方法与原则，如
抽象、分类、继承、聚合、多态等。

### 面向对象的三大特征
- **封装 (Encapsulation)**
- **继承 (Inheritance)**
- **多态 (Polymorphism)**

![Alt text](OOP/%E9%9D%A2%E5%90%91%E8%BF%87%E7%A8%8B%E5%92%8C%E9%9D%A2%E5%90%91%E5%AF%B9%E8%B1%A1.png)

### 面向对象的思想概述

程序员从面向过程的 ==**执行者**== 转化成了面向对象的 ==**指挥者**==

### 面向对象分析方法分析问题的思路和步骤：
1. 根据问题需要，选择问题所针对的 ==**现实世界中的实体**==。
2. 从实体中寻找解决问题相关的属性和功能，这些属性和功能就形成了 ==**概念世界中的类**==。
3. 把抽象的实体用计算机语言进行描述，==**形成计算机世界中类的定义**==。即借助某种程序语言，把类构造成计算机能够识别和处理的数据结构。
4. 将 ==**类实例化成计算机世界中的对象**==。对象是计算机世界中解决问题的最终工具。

### 面向对象的例子：
**列车司机紧急刹车**：刹车的不是司机，而是 ==**车**==，司机使用了 **==车的刹车行为。==**
**你把门关上了**：关门的不是你，而是 ==**门**==，你使用了 ==**门的关闭行为 。**==


## Java语言的面向对象
### Java语言的基本元素：类和对象
==**类(Class)和对象(Object)**== 是面向对象的核心概念。
- 类是对一类事物的描述，是 ==**抽象的**==、概念上的定义
- 对象是 ==**实际存在**== 的该类事物的每个个体，因而也称为 ==**实例(instance)。**==

#### “万事万物皆对象”

#### 面向对象的思想概述
![Alt text](OOP/%E4%BA%BA%E7%B1%BB.png)
- 可以理解为：==**类 = 抽象概念的人；对象 = 实实在在的某个人**==
- 面向对象程序设计的重点是 ==**类的设计**==
- 类的设计，==**其实就是类的成员的设计**==
  
#### Java类及类的成员
- 现实世界的生物体，大到鲸鱼，小到蚂蚁，都是由最基本的 ==**细胞**== 构成的。同
理，Java代码世界是由诸多个不同功能的 ==**类**== 构成的。

- 现实生物世界中的细胞又是由什么构成的呢？细胞核、细胞质、… 那么，
Java中用类class来描述事物也是如此。常见的类的成员有：

==**属 性**==：对应类中的成员变量
==**行 为**==：对应类中的成员方法

```java
// 类名 人
class Person{
	//属性
	String name;
	int age = 1;
	boolean isMale;
	//方法
	public void eat(){
		System.out.println("人可以吃饭");
	}
	public void sleep(){
		System.out.println("人可以睡觉");
	}
	public void talk(String language){
		System.out.println("人可以说话,使用的是：" + language);
	}
}
```
#### 类的语法格式
```java
修饰符 class 类名{
    属性声明：
    方法声明：
}
// 说明：修饰符public：类可以被任意访问
// 类的正文要用{ }括起来
// 举例：
public class Person{
    private int age ; //声明私有变量 age

    public void showAge(int i) { //声明方法showAge( )
        age = i;
    }
}
```
#### 创建Java自定义类
步骤：
1. 定义类（考虑修饰符、类名）
2. 编写类的属性（考虑修饰符、属性类型、属性名、初始化值）
3. 编写类的方法（考虑修饰符、返回值类型、方法名、形参等）

### 对象的创建和使用
#### 创建对象语法
```java
类名 对象名 = new 类名();

public class Zoo{
    public static void main(String args[]){
    //创建对象
    Animal xb = new Animal(); 
    xb.legs = 4;//访问属性
    System.out.println(xb.legs);
    xb.eat();//访问方法
    xb.move();//访问方法
    }
}


public class Animal {
    public int legs;

    public void eat(){
        System.out.println(“Eating.”);
    }
    public viod move(){
        System.out.println(“Move.”);
    }
}
```
**如果创建了一个类的多个对象，对于类中定义的属性，每个对象都拥有各自的一套副本，且互不干扰。**

```java
public class Zoo {
    public static void main(String args[]) {
        Animal x1 = new Animal();//对象 1
        Animal x2 = new Animal();//对象 2
        x1.legs = 4;
        x2.legs = 0;
        System.out.println(x1.legs); // 4
        System.out.println(x2.legs); // 0
        
        x1.legs = 2;
        System.out.println(x1.legs); // 2
        System.out.println(x2.legs); // 0
    }
}
```
#### 类的访问机制：
- ==**在一个类中的访问机制**==：类中的方法可以直接访问类中的成员变量。
（例外：==**static方法访问非static，编译不通过。**==）
- ==**在不同类中的访问机制**==：先创建要访问类的对象，再用对象访问类中定义的成员。





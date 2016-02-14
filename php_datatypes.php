<?php
/**
 * Created by PhpStorm.
 * User: jgirl
 * Date: 16-2-14
 * Time: 上午8:43
 * Description: PHP 数据类型
 * Url: http://www.w3school.com.cn/php/php_datatypes.asp
 */



/**
 * 知识点１：PHP 字符串
 * 字符串是字符序列,可以是引号内的任何文本
 */
$x="Hello World!";
echo $x;
echo "<br>";
$x='Hello World!';
echo $x;


/**
 * 知识点２：PHP 整数
 * 整数规则：
    整数必须有至少一个数字（0-9）
    整数不能包含逗号或空格
    整数不能有小数点
    整数正负均可
    可以用三种格式规定整数：十进制、十六进制（前缀是 0x）或八进制（前缀是 0）
 */
$x=888;
var_dump($x);
echo "<br>";
$x=-888;
var_dump($x);
echo "<br>";
$x=0x8C;
var_dump($x);
echo "<br>";
$x=047;
var_dump($x);//var_dump() 会返回变量的数据类型和值
echo "<br>";

/**
 * 知识点３：PHP 浮点数
 * 字符串是字符序列,可以是引号内的任何文本
 */
$x=10.365;
var_dump($x);
echo "<br>";
$x=2.4e3;
var_dump($x);
echo "<br>";
$x=8E-5;
var_dump($x);
echo "<br>";

/**
 * 知识点４：PHP 逻辑
 * 逻辑是 true 或 false,常用于条件测试
 */
$x=true;
$y=false;

/**
 * 知识点５：PHP 数组
 * 逻辑是 true 或 false,常用于条件测试
 */
$cars=array("Volvo","BMW","SAAB");
var_dump($cars);
echo "<br>";
var_dump($cars[0]);
echo "<br>";

/**
 * 知识点６：PHP 对象
 * 对象是存储数据和有关如何处理数据的信息的数据类型。
 * 在 PHP 中，必须明确地声明对象。
 * 首先我们必须声明对象的类。对此，我们使用 class 关键词。类是包含属性和方法的结构。
 * 然后我们在对象类中定义数据类型，然后在该类的实例中使用此数据类型
 */
class Car{
    var $color;
    function Car($color="green"){
        $this->color=$color;
    }
    function what_color(){
        return $this->color;
    }
}

/**
 * 知识点７：PHP NULL 值
 * 特殊的 NULL 值表示变量无值。
 * NULL 是数据类型 NULL 唯一可能的值。
 * NULL 值标示变量是否为空。也用于区分空字符串与空值数据库。
 * 可以通过把值设置为 NULL，将变量清空
 */
$x="Hello World!";
$x=null;
var_dump($x);
?>
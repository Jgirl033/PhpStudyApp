<?php
/**
 * Created by PhpStorm.
 * User: jgirl
 * Date: 16-2-14
 * Time: 下午3:13
 * Description: PHP 常量
 * Url: http://www.w3school.com.cn/php/php_constants.asp
 */

/**
 * 知识点１：PHP 常量
 * 常量是单个值的标识符（名称）
 * 在脚本中无法改变该值
 * 注意：常量类似变量，但是常量一旦被定义就无法更改或撤销定义,与变量不同，常量贯穿整个脚本是自动全局的
 * 有效的常量名以字符或下划线开头（常量名称前面没有 $ 符号）
 */

/**
 * 知识点２：设置PHP 常量
 * 如需设置常量，请使用 define() 函数 - 它使用三个参数：
    首个参数定义常量的名称
    第二个参数定义常量的值
    可选的第三个参数规定常量名是否对大小写敏感。默认是 false。
 */

define("GREENING","Hi,I am Jgirl!");
echo GREENING;
echo "<br>";

define("GREENING","How do you do?",true);
echo greening;
?>

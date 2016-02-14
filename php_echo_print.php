<?php
/**
 * Created by PhpStorm.
 * User: jgirl
 * Date: 16-2-13
 * Time: 下午4:34
 * Description: echo 和 print 语句
 * Url: http://www.w3school.com.cn/php/php_echo_print.asp
 */


/**
 *知识点１：PHP echo 和 print 语句
 * echo 和 print 之间的差异：
 * echo - 能够输出一个以上的字符串
 * print - 只能输出一个字符串，并始终返回 1
 * 注意：echo 比 print 稍快，因为它不返回任何值。
 */


/**
 * 知识点２：echo 语句
 * echo 是一个语言结构，有无括号均可使用：echo 或 echo()。
 */
echo "<h2>PHP is fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This", " string", " was", " made", " with multiple parameters.";

$txt1="Learn PHP";
$txt2="W3School.com.cn";
$cars=array("Volvo","BMW","SAAB");

echo $txt1;
echo "<br>";
echo "Study PHP at $txt2";
echo "My car is a {$cars[0]}";

/**
 * 知识点３：print 语句
 * print 也是语言结构，有无括号均可使用：print 或 print()。
 */
print "<h2>PHP is fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";

$txt1="Learn PHP";
$txt2="W3School.com.cn";
$cars=array("Volvo","BMW","SAAB");

print $txt1;
print "<br>";
print "Study PHP at $txt2";
print "My car is a {$cars[0]}";
?>
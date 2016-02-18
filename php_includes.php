<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>include</title>
</head>
<body>
<div class="menu">
    <?php include 'menu.php';?>
</div>

<h1>欢迎访问我们的首页！</h1>
<p>一段文本。</p>
<p>一段文本。</p>
<?php
/**
 * Created by PhpStorm.
 * User: jgirl
 * Date: 16-2-18
 * Time: 下午3:15
 * Description: PHP Include 文件
 * Url: http://www.w3school.com.cn/php/php_includes.asp
 */
include 'footer.php';


include 'vars.php';
echo "我有一辆".$color.$car."。<br>";

include 'noFileExists.php';
echo "I have a $color $car.";//include引用文件，如果文件不存在，则发出警告，继续执行脚本

require 'noFileExists.php';
echo "I have a $color $car.";//require引用文件，如果文件不存在，则返回严重错误，停止执行脚本
?>

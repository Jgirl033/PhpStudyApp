<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文件处理</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: jgirl
 * Date: 16-2-18
 * Time: 下午3:43
 * Description: PHP 文件
 * Url: http://www.w3school.com.cn/php/php_file.asp
 */

/**
 * 知识点１：readfile()函数
 */
echo readfile("webdictionary.txt")."<br>";//读取文件中的数据，并写入缓冲

/**
 * 知识点２：文件的打开/读取/关闭
 * fopen()：第一个参数包含被打开的文件名，第二个参数规定打开文件的模式
 * fread()：第一个参数包含待读取文件的文件名，第二个参数规定待读取的最大字节数
 * fgets()：用于从文件读取单行
 * fclose()：fclose() 函数用于关闭打开的文件
 */
$myfile=fopen("webdictionary.txt","r") or die("Unable to open file!");//打开文件作为文件对象
echo "使用fread读取:<br>";
echo fread($myfile,filesize("webdictionary.txt"))."<br>";//读取文件
echo "使用fgets读取:<br>";
$myfile=fopen("webdictionary.txt","r") or die("Unable to open file!");//打开文件作为文件对象
echo fgets($myfile);
fclose($myfile);//关闭文件，特别是写入文件时


/**
 * 知识３：检查读取状态
 * feof() 函数检查是否已到达 "end-of-file" (EOF)
 * fgets() 用于从文件读取单行
 * fgetc() 函数用于从文件中读取单个字符
 *
 */
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// 输出单行直到 end-of-file
while(!feof($myfile)) {//这里不输出最后一行
    echo fgets($myfile) . "<br>";//用于从文件读取单行
}
fclose($myfile);


$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// 输出单字符直到 end-of-file
while(!feof($myfile)) {
    echo fgetc($myfile);//从文件中读取单个字符
}
fclose($myfile);


/**
 * 知识点４：创建文件
 * fopen()　可用于创建文件或打开文件
 */
$myfile = fopen("newfile.txt", "w");//如果文件不存在，则创建文件，'w'会覆盖原有的文件内容

/**
 * 知识点５：写入文件
 * fwrite() 用于写入文件，第一个参数是写入的文件名，第二个参数是要写入的数据
 */
$txt="Bill Gates\n";
fwrite($myfile,$txt);
$txt="Steve Jobs\n";
fwrite($myfile,$txt);
fclose($myfile);

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);
$txt = "Minnie Mouse\n";
fwrite($myfile, $txt);
fclose($myfile);
?>


</body>
</html>

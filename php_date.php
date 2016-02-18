<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>日期和时间</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: jgirl
 * Date: 16-2-18
 * Time: 下午2:21
 * Description:PHP 日期和时间
 * Url: http://www.w3school.com.cn/php/php_date.asp
 */


/**
 * 知识点１：date()函数
 * date(format,timestamp)
 * format是必需的
 * date() 函数的格式参数是必需的，它们规定如何格式化日期或时间
 * 下面列出了一些常用于日期的字符：
        d - 表示月里的某天（01-31）
        m - 表示月（01-12）
        Y - 表示年（四位数）
        1 - 表示周里的某天
 */

echo "今天是 ".date("Y/m/d")."<br>";
echo "今天是 ".date("Y.m.d")."<br>";
echo "今天是 ".date("Y-m-d")."<br>";
echo "今天是 ".date("1")."<br>";

/**
 * 知识点２：获得简单的时间
        h - 带有首位零的 12 小时小时格式
        i - 带有首位零的分钟
        s - 带有首位零的秒（00 -59）
        a - 小写的午前和午后（am 或 pm）
 */
date_default_timezone_set("Asia/Shanghai");//设置时区
echo "当前时间是 ".date("h:i:sa")."<br>";

$d=mktime(9,12,31,6,10,2015);
echo "创建日期是 ".date("Y-m-d h:i:sa")."<br>";

$d=strtotime("10:38pm April 15 2015");
echo "创建日期是 " . date("Y-m-d h:i:sa", $d);

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$startdate=strtotime("Saturday");
$enddate=strtotime("+6 weeks",$startdate);
while($startdate<$enddate){
    echo date("M d",$startdate),"<br>";
    $startdate=strtotime("+1 weeks",$startdate);
}

$d1=strtotime("December 31");
$d2=ceil(($d1-time())/60/60/24);//先获得秒数，再进行除法
echo "距离十二月三十一日还有：" . $d2 ." 天。";
?>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>表单处理_get</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: jgirl
 * Date: 16-2-18
 * Time: 下午2:11
 * Description: PHP　多维数组
 * Url: http://www.w3school.com.cn/php/php_arrays_multi.asp
 */


$cars=array(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("SAAB",5,2),
    array("Land Rover",17,15)
);
echo $cars[0][0].": 库存:".$cars[0][1].", 销量:".$cars[0][2].".<br>";

for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
}
?>
</body>
</html>

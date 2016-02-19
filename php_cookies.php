<?php
/**
 * Created by PhpStorm.
 * User: jgirl
 * Date: 16-2-19
 * Time: 下午2:11
 * Description: PHP　Cookies
 * Url: http://www.w3school.com.cn/php/php_cookies.asp
 */

/**
 * 知识点１：什么是cookies?
 * cookie 常用于识别用户
 * cookie 是服务器留在用户计算机中的小文件
 * 每当相同的计算机通过浏览器请求页面时，它同时会发送 cookie
 */

/**
 * setcookie() 函数用于设置 cookie
 * setcookie() 函数必须位于 <html> 标签之前
 */
setcookie("user", "Alex Porter", time()+3600);//将名为"user"的cookie赋值为""Alex Porter"，并设置在一个小时后过期
//在发送 cookie 时，cookie 的值会自动进行 URL 编码，在取回时进行自动解码（为防止 URL 编码，请使用 setrawcookie() 取而代之）
//setcookie("user", "", time()-3600);
//当删除 cookie 时，您应当使过期日期变更为过去的时间点

echo $_COOKIE["user"];//输出一个cookie
print_r($_COOKIE);//输出全部cookie
echo "<br>";

if (isset($_COOKIE["user"]))
    echo "Welcome " . $_COOKIE["user"] . "!<br />";
else
    echo "Welcome guest!<br />";

?>

<html>
<body>

</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: jgirl
 * Date: 16-2-15
 * Time: 下午2:27
 * Description: 全局变量 - 超全局变量
 * Url: http://www.w3school.com.cn/php/php_superglobals.asp
 */


/**
 * 超全局变量是：
    $GLOBALS
    $_SERVER
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION
 */

/**
 * 知识点１：$GLOBALS — 引用全局作用域中可用的全部变量
 */
$x = 75;
$y = 25;

function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;//全局变量
echo "<br>";

/**
 * 知识点２：$_SERVER - 保存关于报头、路径和脚本位置的信息
 */
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];//返回当前页面的完整 URL（不可靠，因为不是所有用户代理都支持）
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];


/**
 * 知识点３：$_REQUEST 用于收集 HTML 表单提交的数据，具体代码看php_request.php
 */

/**
 * 知识点４： $_POST 广泛用于收集提交 method="post" 的 HTML 表单后的表单数据，具体代码看php_post.php
 */

/**
 * 知识点５：$_GET 也可用于收集提交 HTML 表单 (method="get") 之后的表单数据，具体代码看php_get.php
 */
?>
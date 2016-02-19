<?php
/**
 * Created by PhpStorm.
 * User: jgirl
 * Date: 16-2-19
 * Time: 下午2:28
 * Description: PHP Sessions
 * Url: http://www.w3school.com.cn/php/php_sessions.asp
 */

/**
 * 知识点１：PHP session 变量用于存储有关用户会话的信息，或更改用户会话的设置。
 * Session 变量保存的信息是单一用户的，并且可供应用程序中的所有页面使用。
 */


/**
 * 知识点２：Session的工作机制
 * 为每个访问者创建一个唯一的 id (UID)，并基于这个 UID 来存储变量
 * UID 存储在 cookie 中，亦或通过 URL 进行传导
 */

/**
 * 知识点３：如何启动Session会话
 * 把用户信息存储到 PHP session 中之前，首先必须启动会话
 * session_start() 函数必须位于 <html> 标签之前
 */
session_start();//向服务器注册会话，用于保存用户信息，服务器会为会话分配 UID
$_SESSION['views']=1;//保存会话信息
?>

<html>
<body>

<?php
echo "Pageviews=". $_SESSION['views'];//取出会话信息
echo "<br>";

if(isset($_SESSION['views']))//检查会话是否已经有views变量
    $_SESSION['views']=$_SESSION['views']+1;
else
    $_SESSION['views']=1;//不存在，则创建变量

echo "Views=". $_SESSION['views'];

unset($_SESSION['views']);//释放指定的 session 变量

session_destroy();//整个会话关闭，删除所有之前的数据
?>

</body>
</html>
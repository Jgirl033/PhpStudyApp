<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>表单处理_get</title>
</head>
<body>
<a href="php_get.php?subject=PHP&web=W3school.com.cn">测试 $GET</a>
<br>
<?php
// $_GET 也可用于收集提交 HTML 表单 (method="get") 之后的表单数据。
//$_GET 也可以收集 URL 中的发送的数据
echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
?>
</body>
</html>
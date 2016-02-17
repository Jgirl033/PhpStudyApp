<html>
<body>
<!--使用全局变量$_GET接收表单数据-->
<!--$_GET 是通过 URL 参数传递到当前脚本的变量数组-->
Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>

</body>
</html>


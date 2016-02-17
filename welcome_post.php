<html>
<body>
<!--使用全局变量$_POST接收表单数据-->
<!--$_POST 是通过 HTTP POST 传递到当前脚本的变量数组-->
Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP表单验证</title>
</head>
<body>

<?php
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {//在脚本开头，我们检查表单是否使用 $_SERVER["REQUEST_METHOD"] 进行提交
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $website = test_input($_POST["website"]);
    $comment = test_input($_POST["comment"]);
    $gender = test_input($_POST["gender"]);//获取用户post的数据并对其进行处理
}

function test_input($data) {
    $data = trim($data);//去除用户输入数据中不必要的字符（多余的空格、制表符、换行）
    $data = stripslashes($data);//删除用户输入数据中的反斜杠（\）
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!--$_SERVER["PHP_SELF"] 是一种超全局变量，它返回当前执行脚本的文件名，黑客可能会利用进行攻击-->
<!--htmlspecialchars() 函数把特殊字符转换为 HTML 实体-->
<!--对 HTML 表单数据进行适当的验证对于防范黑客和垃圾邮件很重要!-->
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    Website: <input type="text" name="website"><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <br><br>
    <input type="submit" name="submit" value="提交">
</form>

<?php
echo "<h2>您的输入：</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;//这里的变量是经过test_input处理过的
?>
</body>
</html>
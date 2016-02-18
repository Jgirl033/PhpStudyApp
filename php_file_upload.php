<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文件上传</title>
</head>
<body>
<form action="upload_file.php" method="post"
      enctype="multipart/form-data">
    <!--<form> 标签的 enctype 属性规定了在提交表单时要使用哪种内容类型-->
    <!--如果表单需要二进制文件数据时，应记得使用"multipart/form-data"-->
    <label for="file">Filename:</label>
    <input type="file" name="file" id="file" />
    <!-- type="file" 属性规定了应该把输入作为文件来处理-->
    <br/>
    <input type="submit" name="submit" value="Submit" />
</form>

</body>
</html>

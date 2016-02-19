<?php
/**
 * Created by PhpStorm.
 * User: jgirl
 * Date: 16-2-19
 * Time: 下午2:51
 * Description: PHP发送邮件
 * Url: http://jingyan.baidu.com/article/7f766daf436b9b4101e1d0e2.html
 */





//引入发送邮件类
require("smtp.php");
//使用163邮箱服务器
$smtpserver = "smtp.163.com";
//163邮箱服务器端口
$smtpserverport = 25;
//你的163服务器邮箱账号
$smtpusermail = "18819423747@163.com";
//收件人邮箱
//$smtpemailto = "841917374@qq.com";
$smtpemailto = $_POST["email"];//接收表单填写的邮箱地址
//你的邮箱账号(去掉@163.com)
$smtpuser = "***********";//SMTP服务器的用户帐号
//你的邮箱密码
$smtppass = "******"; //SMTP服务器的用户密码


//邮件主题
//$mailsubject = "测试邮件发送";
$mailsubject = $_POST["subject"];//接收表单填写的邮箱主题
//邮件内容
//$mailbody = "PHP+MySQL";
$mailbody = $_POST["message"];//由表单发送过来的数据
//邮件格式（HTML/TXT）,TXT为文本邮件
$mailtype = "TXT";
//这里面的一个true是表示使用身份验证,否则不使用身份验证.
$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);
//是否显示发送的调试信息
$smtp->debug = TRUE;
//发送邮件
$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype);
?>
<?php
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

	// Pear Mail 扩展  
	
	//引入发送邮件类

	require("smtp.php"); 

	//使用163邮箱服务器

	$smtpserver = "smtp.163.com";

	//163邮箱服务器端口 

	$smtpserverport = 25;

	//你的163服务器邮箱账号

	$smtpusermail = "zhangruo1117@163.com";

	//收件人邮箱

	$smtpemailto = $email;

	//你的邮箱账号(去掉@163.com)

	$smtpuser = "zhangruo1117";//SMTP服务器的用户帐号 

	//你的邮箱密码

	$smtppass = "ZRLXY123"; //SMTP服务器的用户密码 
	
	//邮件主题 

	$mailsubject = "Testing";

	//邮件内容 

	$mailbody = $message;

	//邮件格式（HTML/TXT）,TXT为文本邮件 

	$mailtype = "TXT";

	//这里面的一个true是表示使用身份验证,否则不使用身份验证. 

	$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);

	//是否显示发送的调试信息 

	$smtp->debug = TRUE;

	//发送邮件

	$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype); 
	
    //send email
    mail("ruo.zhang@carmeltop.com", "msg from".$email, $message);
}
?>
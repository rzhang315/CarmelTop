<?php
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

	// Pear Mail ��չ  
	
	//���뷢���ʼ���

	require("smtp.php"); 

	//ʹ��163���������

	$smtpserver = "smtp.163.com";

	//163����������˿� 

	$smtpserverport = 25;

	//���163�����������˺�

	$smtpusermail = "zhangruo1117@163.com";

	//�ռ�������

	$smtpemailto = $email;

	//��������˺�(ȥ��@163.com)

	$smtpuser = "zhangruo1117";//SMTP���������û��ʺ� 

	//�����������

	$smtppass = "ZRLXY123"; //SMTP���������û����� 
	
	//�ʼ����� 

	$mailsubject = "Testing";

	//�ʼ����� 

	$mailbody = $message;

	//�ʼ���ʽ��HTML/TXT��,TXTΪ�ı��ʼ� 

	$mailtype = "TXT";

	//�������һ��true�Ǳ�ʾʹ�������֤,����ʹ�������֤. 

	$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);

	//�Ƿ���ʾ���͵ĵ�����Ϣ 

	$smtp->debug = TRUE;

	//�����ʼ�

	$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype); 
	
    //send email
    mail("ruo.zhang@carmeltop.com", "msg from".$email, $message);
}
?>
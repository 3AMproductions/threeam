<?php
require("ext.phpmailer.php");

if ($_POST['ajax'] == 'true'){
	$mail = new my_phpmailer();
	header("Content-Type: text/xml; charset: UTF-8");
	echo '<?xml version="1.0" encoding="utf-8" ?>';
	echo '<form_validation type="email">';
	if($_POST['field'] == 'name'){
		$mail->FromName = $_POST['value'];
		$validate_name = $mail->validate_name();
		if(empty($validate_name)) echo '<field><fieldname>name</fieldname><valid>true</valid><message/></field>';
		else echo '<field><fieldname>name</fieldname><valid>false</valid><message>'.$validate_name.'</message></field>';
	}elseif($_POST['field'] == 'email'){
		$mail->From = $_POST['value'];
		$validate_address = $mail->validate_address();
		if(empty($validate_address)) echo '<field><fieldname>email</fieldname><valid>true</valid><message/></field>';
		else echo '<field><fieldname>email</fieldname><valid>false</valid><message>'.$validate_address.'</message></field>';
	}elseif($_POST['field'] == 'subject'){
		$mail->Subject = $_POST['value'];
		$validate_subject = $mail->validate_subject();
		if(empty($validate_subject)) echo '<field><fieldname>subject</fieldname><valid>true</valid><message/></field>';
		else echo '<field><fieldname>subject</fieldname><valid>false</valid><message>'.$validate_subject.'</message></field>';
	}elseif($_POST['field'] == 'body'){
		$mail->Body = $_POST['value'];
		$validate_body = $mail->validate_body();
		if(empty($validate_body)) echo '<field><fieldname>body</fieldname><valid>true</valid><message/></field>';
		else echo '<field><fieldname>body</fieldname><valid>false</valid><message>'.$validate_body.'</message></field>';
	}
	echo '</form_validation>';
	exit;
}
else{
	$valid_mail = true;
	$mail = new my_phpmailer();
	$mail->IsMail();

	$mail->FromName = $_POST['name'];
	$mail->From = $_POST['email'];
	$mail->Subject = $_POST['subject'];
	$mail->Body = $_POST['body'];

	$validate_name = $mail->validate_name();
	$validate_address = $mail->validate_address();
	$validate_subject = $mail->validate_subject();
	$validate_body = $mail->validate_body();
	
	$valid_mail = (empty($validate_name) and empty($validate_address) and empty($validate_subject) and empty($validate_body));
	
	session_start();
	if($valid_mail){
		$mail->Subject = 'From webform: '.$mail->Subject;
		if($mail->Send()){
			$_SESSION['invalid_mail'] = false;
			$_SESSION['mail_sent'] = true;
			unset($_SESSION['mail']);
			$_SESSION['greeting'] = '<strong class="big">Thank you</strong> for taking the time to contact us. We will get back to you as soon as possible.';
			if(isset($_POST['page'])) header("location: http://".$_POST['page']);
			else header("location: http://www.3amproductions.net/contact.php");
      		exit;
		} else{
			$_SESSION['invalid_mail'] = false;
			$_SESSION['mail_sent'] = false;
			$_SESSION['mail'] = $mail;
			$_SESSION['greeting'] = "There has been an error while sending your mail. Please try again later or email us directly with the email addresses on the right.";
//			$_SESSION['greeting'] = "I'm sorry. Our contact service is temporarily disabled. Please try again later or email us directly with the email addresses on the right.";
			if(isset($_POST['page'])) header("location: http://".$_POST['page']);
			else header("location: http://www.3amproductions.net/contact.php");
		}
	}
	else{
		$_SESSION['invalid_mail'] = true;
		$_SESSION['mail_sent'] = false;
		$_SESSION['mail'] = $mail;
		$_SESSION['greeting'] = "There were some errors in your form that need correcting before it can be processed. Please correct them below and then hit 'Send'.";
		$_SESSION['name_msg'] = $validate_name;
		$_SESSION['address_msg'] = $validate_address;
		$_SESSION['subject_msg'] = $validate_subject;
		$_SESSION['body_msg'] = $validate_body;
		if(isset($_POST['page'])) header("location: http://".$_POST['page']);
		else header("location: http://www.3amproductions.net/contact.php");
	}
}
?>

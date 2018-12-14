<?php
if(isset($_POST['submit'])) {
	$fullname = $_POST['fullname'];
	$emailFrom = $_POST['email'];
	//$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	$emailTo = "n.moone@hotmail.com";
	$headers = "From: My Website".$emailFrom;
	$txt = "you have received an e-mail from ".$fullname.".\n\n".$message;
	
	mail($emailTo, $subject, $txt, $headers);
	header("Location: CV_nm.html?mailsend");
}
>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="../images/iDealLogo.ico" />
</head>

<body>
<?php
	
	//$strTo = "ideal.icomment@gmail.com";
/*	$n_name = $_POST["name"];
	$strTo = "idealphysics.yingcm@gmail.com";
	$strSubject = "ติดต่อจาก".$n_name;
	$strHeader = "From:idealphysics";
	$strMessage = "ชื่อ : ".$_POST["name"].
				  "อีเมล :".$_POST["email"].
				  "ความคิดเห็น :".$_POST["message"];
	$flgSend = @mail($strTo,$strSubject,$strMessage,$strHeader);
	if($flgSend)
	{
		echo ("<script language='javascript'>
				window.alert('สำเร็จ')
				window.location.href='../contact.php';
				</script>");
	}
	else
	{
		echo ("<script language='javascript'>
				window.alert('ไม่สำเร็จ')
				window.location.href='../contact.php';
				</script>");
	}*/
		require("PHPMailer_v5.1/class.phpmailer.php");
		
		$n_name = $_POST["name"];
		$strD = date("d-m-Y");
		
		$mail = new PHPMailer();	
		$mail->Charset="utf-8";
		$mail->IsHTML(true);
		$mail->IsSMTP();
		$mail->SMTPAuth = true;
		$mail->ContentType="text/html";
		$mail->SMTPSecure = "ssl";
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 465;
		$mail->Username = "idealphysics.yingcm@gmail.com";
		$mail->Password = "iiexjiiexj52_g";
		$mail->From = "idealphysics.yingcm@gmail.com";
		$mail->FromName = "idealphysics $strD";
		$subject ="iDEAL PHYSICS ติดต่อจาก$n_name";
		$subject = '=?UTF-8?B?' . base64_encode($subject) . '?=';
		$mail->Subject = iconv("tis-620","utf-8",$subject);
		$mail->Body = "ชื่อ : ".$_POST["name"]."<br>".
					  "อีเมล :".$_POST["email"]."<br>".
					  "ความคิดเห็น :".$_POST["message"];
				
				
		$mail->AddAddress("idealphysics.yingcm@gmail.com");
		
		
	
		$mail->set('X-Priority', '3');
	
		
		
		if($mail->Send()) {
			echo ("<script language='javascript'>
				window.alert('สำเร็จ')
				window.location.href='../contact.php';
				</script>");
		} 

	
?>
  
</body>
</html>
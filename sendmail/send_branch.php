<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="../images/iDealLogo.ico" />
</head>

<body>

<?php
	/*$branch = $_POST["comment_branch"];
	$strTo = 'ideal.icomment@gmail.com';
	$strSubject = "comment idealphysics";
	$strMessage = "<B>ข้อเสนอแนะพนักงาน  :</B>".nl2br($_POST["comment_branch"]).
				  "<br><br>".
				   "<B>ข้อเสนอแนะ  :</B>".nl2br($_POST["comment"]).
				  "<br><br>".
				  "<B>".$_POST["name1"].":</B><br>".nl2br($_POST["comment_name1"]).
				  "<br><br>".
				   "<B>".$_POST["name2"].":</B><br>".nl2br($_POST["comment_name2"]).
				  "<br><br>".
				  "<B>".$_POST["name3"].":</B><br>".nl2br($_POST["comment_name3"]).
				  "<br><br>".
				  "<B>".$_POST["name4"].":</B><br>".nl2br($_POST["comment_name4"]).
				  "<br><br>".
				    "<br><br>".
				  "<B>".$_POST["name5"].":</B><br>".nl2br($_POST["comment_name5"]).
				  "<br><br>".
				  "<B>อีเมลติตต่อ:</B>".$_POST["email"]
				  ;
				  


	$strSid = md5(uniqid(time()));

	$strHeader = "idealphysics";
	$strHeader .= "From: "."iDEAL PHYSICS <".$_POST["email"].">\nReply-To: ".$_POST["email"]."";

	$strHeader .= "MIME-Version: 1.0\n";
	$strHeader .= "Content-Type: multipart/mixed; boundary=\"".$strSid."\"\n\n";
	$strHeader .= "This is a multi-part message in MIME format.\n";

	$strHeader .= "--".$strSid."\n";
	$strHeader .= "Content-type: text/html; charset=UTF-8\n"; 
	$strHeader .= "Content-Transfer-Encoding: 7bit\n\n";
	$strHeader .= $strMessage."\n\n";
	

	$flgSend = @mail($strTo,$strSubject,null,$strHeader); 
	if($flgSend)
	{
		echo ("<script language='javascript'>
				window.alert('สำเร็จ')
				window.history.back();
				</script>");
	}
	else
	{
		echo ("<script language='javascript'>
				window.alert('ไม่สำเร็จ')
				window.history.back();
				</script>");
	}
	*/
	
	require("PHPMailer_v5.1/class.phpmailer.php");
		
		$branch = $_POST["comment_branch"];
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
		$subject ="iDEAL PHYSICS แสดงความเห็น สาขา :$branch";
		$subject = '=?UTF-8?B?' . base64_encode($subject) . '?=';
		$mail->Subject = iconv("tis-620","utf-8",$subject);
		$mail->Body = "<B>ข้อเสนอแนะพนักงาน  :</B>".nl2br($_POST["comment_branch"]).
					  "<br><br>".
					   "<B>ข้อเสนอแนะ  :</B>".nl2br($_POST["comment"]).
					  "<br><br>".
					  "<B>".$_POST["name1"].":</B><br>".nl2br($_POST["comment_name1"]).
					  "<br><br>".
					   "<B>".$_POST["name2"].":</B><br>".nl2br($_POST["comment_name2"]).
					  "<br><br>".
					  "<B>".$_POST["name3"].":</B><br>".nl2br($_POST["comment_name3"]).
					  "<br><br>".
					  "<B>".$_POST["name4"].":</B><br>".nl2br($_POST["comment_name4"]).
					  "<br><br>".
						"<br><br>".
					  "<B>".$_POST["name5"].":</B><br>".nl2br($_POST["comment_name5"]).
					  "<br><br>".
					  "<B>อีเมลติตต่อ:</B>".$_POST["email"]
					  ;
				  
				
				
		$mail->AddAddress("ideal.icomment@gmail.com");
		
		
	
		$mail->set('X-Priority', '3');
	
		
		
		if($mail->Send()) {
			echo ("<script language='javascript'>
				window.alert('สำเร็จ')
				window.history.back();
				</script>");

		} 

?>
    
</body>
</html>
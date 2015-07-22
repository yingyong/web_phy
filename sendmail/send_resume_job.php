<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="../images/iDealLogo.ico" />
</head>

<body>
<?php
/*	$name = $_POST["job_name"];
	$strTo = 'ideal.icomment@gmail.com';
	$strSubject = "ใบสมัครงาน จาก" .$name;
	$strMessage = "<B>ชื่อ :</B>".$_POST["job_name"]."<br>".
				  "<hr></hr>".
				  "<B>นามสกุล :</B>".$_POST["job_lastname"]."<br>".
				  "<hr></hr>".
				  "<B>วัน/เดือน/ปีเกิด :</B>".$_POST["job_birthday"]."<br>".
				  "<hr></hr>".
				  "<B>เบอร์โทรศัพท์ :</B>".$_POST["job_tel"]."<br>".
				  "<hr></hr>".
				  "<B>email :</B>".$_POST["job_email"]."<br>".
				  "<hr></hr>".
				  "<B>ตำแหน่งที่ต้องการสมัคร :</B>".$_POST["job_career"]."<br>".
				  "<hr></hr>".
				  "<B>เงินเดือนที่ต้องการ :</B>".$_POST["job_salary"]."<br>".
				  "<hr></hr>".
				  "<B>ที่อยู่ปัจจุบัน :</B>".$_POST["job_address"]."<br>".
				  "<hr></hr>".
				  "<B>ข้อมูลการศึกษา :</B>".$_POST["job_study"]."<br>".
				  "<hr></hr>".
				  "<B>ประวัติการศึกษา :</B>".$_POST["job_job"]."<br>"
				  ;


	$strSid = md5(uniqid(time()));

	$strHeader = "";
	$strHeader .= "From: "."ใบสมัครงาน iDEAL PHYSICS จาก".$_POST["job_name"]."<".$_POST["job_email"].">\nReply-To: ".$_POST["job_email"]."";

	$strHeader .= "MIME-Version: 1.0\n";
	$strHeader .= "Content-Type: multipart/mixed; boundary=\"".$strSid."\"\n\n";
	$strHeader .= "This is a multi-part message in MIME format.\n";

	$strHeader .= "--".$strSid."\n";
	$strHeader .= "Content-type: text/html; charset=UTF-8\n"; 
	$strHeader .= "Content-Transfer-Encoding: 7bit\n\n";
	$strHeader .= $strMessage."\n\n";
	

	if($_FILES["fileAttach"]["name"] != "")
	{
		$strFilesName = $_FILES["fileAttach"]["name"];
		$strContent = chunk_split(base64_encode(file_get_contents($_FILES["fileAttach"]["tmp_name"]))); 
		$strHeader .= "--".$strSid."\n";
		$strHeader .= "Content-Type: application/octet-stream; name=\"".$strFilesName."\"\n"; 
		$strHeader .= "Content-Transfer-Encoding: base64\n";
		$strHeader .= "Content-Disposition: attachment; filename=\"".$strFilesName."\"\n\n";
		$strHeader .= $strContent."\n\n";
	}
	

	$flgSend = @mail($strTo,$strSubject,null,$strHeader); 
	if($flgSend)
	{
		echo ("<script language='javascript'>
				window.alert('สำเร็จ')
				window.location.href='../resume_job.php';
				</script>");
	}
	else
	{
		echo ("<script language='javascript'>
				window.alert('ไม่สำเร็จ')
				window.location.href='../resume_job.php';
				</script>");
	}
	*/
	
	require("PHPMailer_v5.1/class.phpmailer.php");
		
		$strD = date("d-m-Y");
		$name = $_POST["job_name"];
		
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
		$mail->From = "idealphysics@gmail.com";
		$mail->FromName = "idealphysics $strD";
		$subject ="iDEAL PHYSICS ใบสมัครงาน จาก" .$name;
		$subject = '=?UTF-8?B?' . base64_encode($subject) . '?=';
		$mail->Subject = iconv("tis-620","utf-8",$subject);
		$mail->Body = "<B>ชื่อ :</B>".$_POST["job_name"]."<br>".
				  	  "<hr></hr>".
					  "<B>นามสกุล :</B>".$_POST["job_lastname"]."<br>".
					  "<hr></hr>".
					  "<B>วัน/เดือน/ปีเกิด :</B>".$_POST["job_birthday"]."<br>".
					  "<hr></hr>".
					  "<B>เบอร์โทรศัพท์ :</B>".$_POST["job_tel"]."<br>".
					  "<hr></hr>".
					  "<B>email :</B>".$_POST["job_email"]."<br>".
					  "<hr></hr>".
					  "<B>ตำแหน่งที่ต้องการสมัคร :</B>".$_POST["job_career"]."<br>".
					  "<hr></hr>".
					  "<B>เงินเดือนที่ต้องการ :</B>".$_POST["job_salary"]."<br>".
					  "<hr></hr>".
					  "<B>ที่อยู่ปัจจุบัน :</B>".$_POST["job_address"]."<br>".
					  "<hr></hr>".
					  "<B>ข้อมูลการศึกษา :</B>".$_POST["job_study"]."<br>".
					  "<hr></hr>".
					  "<B>ประวัติการศึกษา :</B>".$_POST["job_job"]."<br>"
					  ;
				
				
		$mail->AddAddress("ideal.icomment@gmail.com");
		
		
	
		$mail->set('X-Priority', '3');
		
			if ($_FILES["fileAttach".$i]["size"] > 0) {
			copy($_FILES["fileAttach".$i]["tmp_name"],"myfile/".$_FILES["fileAttach".$i]["name"]);
			$attach_file = "myfile/".$_FILES["fileAttach".$i]["name"];
			$mail->AddAttachment($attach_file);
			}
	
		
		
		if($mail->Send()) {
			echo ("<script language='javascript'>
				window.alert('สำเร็จ')
				window.location.href='../resume_job.php';
				</script>");
		} 
?>
  
</body>
</html>
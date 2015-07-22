<?php
session_start(); 
?>
<?php $nav_menu = 1; ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>iDEAL PHYSICS</title>
<meta content="width=1024" name="viewport" content="width=device-width minimum-scale=1, maximum-scale=4">	
<link rel="icon"  type="image/png" href="images/idealphysics3.png"  >
<link href="css/styles.css" rel="stylesheet">

   
<link rel='stylesheet' id='reponsive'  href='css/footer_styles.css' type='text/css' media='all' />
   <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
     <!-- Bootstrap Core CSS -->
    <link href="css/nav_bar_styles.css" rel="stylesheet">
    
     <link href="css/font-style.css" rel="stylesheet">
     
      <script  type='text/javascript' src="js/script.js"></script>
      <script type='text/javascript' src='js/jquery-1.11.0.js'></script> 
 	  <script language="JavaScript" src="js/gen_validatorv31.js" type="text/javascript"></script>	

</head>

<body>
<?php include "nav_bar.php";?>
<div class="container_blog">
         <div class="topicc" >CONTACT</div>
         <div class="blogg_hr"><hr></hr></div>
         
         
         <div class="contact_blog">
  
            <div class="contact_left contact_box">
            
              <div class="contact_type">
                  <div class="contact_top">สำนักงานใหญ่</div>
                  <div class="contact_descript">
                    678/12-14 ถนนเจริญนคร ซอยเจริญนคร 24<br>
                    แขวงบางลำภูล่าง เขตคลองสาน กทม. 10600
                  </div> 
                
                <div class="contact_icon">
                      <div id="contact_i">
                      	<img src="images/contact/7.png" width="38px;">
                      </div>
                      
                      <div id="contact_i">
                      	<img src="images/contact/6.png" width="38px;">
                      </div>
                       
                      <div id="contact_i">
                      	<img src="images/contact/5.png" width="38px;">
                      </div>
                  </div>
                  
                  <div class="contact_mobile">
                      <div id="contact_m">087-911-7000</div>
                      <div id="contact_m">02-863-6004</div>
                      <div id="contact_m">02-863-6005</div>
                  </div>
                  
                  <div class="contact_social_icon">
                    <a href="http://www.facebook.com/idealfanpage"target="blank" style="text-decoration:none;">
                    	<img src="images/social/FB.png">
                    </a>
                    
                    <a href="https://twitter.com/idealphysics"target="blank" style="text-decoration:none;">
                    	<img src="images/social/TW.png">
                    </a>
                    
                    <a href="http://instagram.com/idealphysics" target="blank"style="text-decoration:none;">
                    	<img src="images/social/IG.png">
                    </a>
                    
                    <a href="http://www.youtube.com/user/ideallike" target="blank" style="text-decoration:none;">
                    	<img src="images/social/Youtube.png">
                    </a>
                    
                    <a href="mailto:idealphysics@gmail.com" target="blank" style="text-decoration:none;">
                    	<img src="images/social/Email.png">
                    </a>
           
                   
                    
                  </div> 
              </div>
                
            </div>
            
            <?php
				
				
				$errors = '';
				$name = '';
				$email = '';
				$message = '';
				
				if(isset($_POST['submit']))
				{
					
					$name = $_POST['name'];
					$email = $_POST['email'];
					$message = $_POST['message'];
					
					if(empty($name)||empty($email))
					{
						$errors .= "\n Name and Email are required fields. ";	
					}
					if(IsInjected($email))
					{
						$errors .= "\n Bad email value!";
					}
					if(empty($_SESSION['6_letters_code'] ) ||
					  strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
					{
					
						$errors .= "\n";
					}
					
					if(empty($errors))
					{
						//ideal.icomment@gmail.com
						$to = 'ideal.icomment@gmail.com';
						$subject="iDEAL PHYSICS - contact ";
						$from = 'ideal.icomment@gmail.com';
						$ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
						
						$body = "".
						"ชื่อ : $name\n".
						"Email : $email \n".
						"ข้อความ : \n "."$message\n".
						
						$headers = "";
						$headers .= "Reply-To: $visitor_email \r\n";
						
						mail($to, $subject, $body,$headers);
						
							echo ("<script language='javascript'>
								window.alert('สำเร็จ')
								window.location.href='contact.php';
								</script>");
					}
				}
				
				function IsInjected($str)
				{
				  $injections = array('(\n+)',
							  '(\r+)',
							  '(\t+)',
							  '(%0A+)',
							  '(%0D+)',
							  '(%08+)',
							  '(%09+)'
							  );
				  $inject = join('|', $injections);
				  $inject = "/$inject/i";
				  if(preg_match($inject,$str))
					{
					return true;
				  }
				  else
					{
					return false;
				  }
				}
		   ?>
           
           <?php
			if(!empty($errors)){
			echo "<p class='err'>".nl2br($errors)."</p>";
			}
			?>
            
			<div id='contact_form_errorloc' class='err'></div>
 
		<form method="POST" name="contact_form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">    
        
                
            <div class="contact_right">
             		<div class="contact_form">
                      		<div class="contact_text">Name</div>
                            <div><input name="name"  class="contact_text_bar" type="text" size="45"  value='<?php echo $name ?>'/></div>
                            
                            <div class="contact_text">E-mail *</div>
                            <div><input type="text" class="contact_text_bar" name="email" size="45"  value='<?php echo htmlentities($email) ?>'/></div>
                            
                            <div class="contact_text">Message *</div>
                            <div><textarea cols="45" class="contact_text_bar_mess"  name="message"rows="6"  value='<?php echo htmlentities($message) ?>'></textarea></div>
                            
                            
                            <div class="contact_capcha">          
	                       
                                    <img src="captcha/captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg'" width='110px;'">

                                        <input id="6_letters_code" name="6_letters_code" type="text" class="contact_text_capcha"><br>
                                        <small> <a href='javascript: refreshCaptcha();'><img src="images/contact/2.png"  class="contact_refresh"/></a> </small>
                                        </p>
                                        <div class="contact_capcha_button">
                                        	<input type="submit" value="Submit" name='submit' class="contact_button">
                                        </div>
                                        
                                        <script language="JavaScript">
                                        
                                        var frmvalidator  = new Validator("contact_form");
                                        
                                        frmvalidator.EnableOnPageErrorDisplaySingleBox();
                                        frmvalidator.EnableMsgsTogether();
                                        
                                        frmvalidator.addValidation("name","req","<div style='color:#ff0000; font-size:20px; font-weight:bold; padding-bottom: 15px;'>กรุณากรอกชื่อ - สกุล</div>"); 
                                        frmvalidator.addValidation("email","req","<div style='color:#ff0000; font-size:20px; font-weight:bold; padding-bottom: 15px; '>กรุณากรอก email</div>"); 
                                        frmvalidator.addValidation("email","email","<div style='color:#ff0000; font-size:20px; font-weight:bold; padding-bottom: 15px;'>กรุณากรอก email ให้ถูกต้อง</div>"); 
                                        </script>
                                        <script language='JavaScript' type='text/javascript'>
                                        function refreshCaptcha()
                                        {
                                            var img = document.images['captchaimg'];
                                            img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
                                        }
                                        </script>        
                       		</div><!--contact_capcha-->

         				</div> <!--contact_form-->
                        
                   </div><!--contact_form-->
          
                           
            </div><!--contact_right-->
            
         </form>  
            
          
            
        </div> <!-- END contact_blog-->
        
</div><!--container_blog-->

<?php include "footer.php";?>


</body>
</html>
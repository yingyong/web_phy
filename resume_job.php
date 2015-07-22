<?php $nav_menu = 1; ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>iDEAL PHYSICS</title>
<link rel="icon"  type="image/png" href="images/idealphysics3.png"  >

<meta content="width=1024" name="viewport" content="width=device-width minimum-scale=1, maximum-scale=4">	

<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/style.css">
<link rel='stylesheet' id='reponsive'  href='css/footer_styles.css' type='text/css' media='all' />
   <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
     <!-- Bootstrap Core CSS -->
    <link href="css/nav_bar_styles.css" rel="stylesheet">
    
    <link href="css/font-style.css" rel="stylesheet">
    <script src="js/jquery-1.11.0.js"></script>
    
    
    
	<script language="javascript">
		function check_job(){
			if(document.form.job_name.value==""){
				alert('กรูณากรอกชื่อ');
				document.form.job_name.focus();
				return false;
			}
			if(document.form.job_lastname.value==""){
				alert('กรุณากรอกนามสกุล');
				document.form.job_lastname.focus();
				return false;
			}
			if(document.form.job_birthday.value==""){
				alert('กรุณากรอกวัน/เดือน/ปีเกิด');
				document.form.job_birthday.focus();
				return false;
			}
			if(document.form.job_tel.value==""){
				alert('กรุณากรอกเบอร์โทรศัพท์');
				document.form.job_tel.focus();
				return false;
			}
			if(document.form.job_email.value==""){
				alert('กรุณากรอก Email');
				document.form.job_email.focus();
				return false;
			}
			if(document.form.job_career.value==""){
				alert('กรุณากรอกตำแหน่งที่ต้องการสมัคร');
				document.form.job_career.focus();
				return false;
			}
			if(document.form.job_salary.value==""){
				alert('กรุณากรอกเงินเดือนที่ต้องการ');
				document.form.job_salary.focus();
				return false;
			}
			if(document.form.job_address.value==""){
				alert('กรุณากรอกที่อยู่ปัจจุบัน');
				document.form.job_address.focus();
				return false;
			}
			if(document.form.job_study.value==""){
				alert('กรุณากรอกข้อมูลการศึกษา');
				document.form.job_study.focus();
				return false;
			}
			if(document.form.job_job.value==""){
				alert('กรุณากรอกประวัติการทำงาน');
				document.form.job_job.focus();
				return false;
			}
			document.form.submit();
			
		}
	</script>
    
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

<style>
	
</style>

</head>

<body>
<?php include "nav_bar.php";?>
<div class="container_blog">
         <div class="topicc" >สมัครงาน</div>
         <div class="blogg_hr"><hr></hr></div>
    
 <form name="form" action="sendmail/send_resume_job.php" method="post"  enctype="multipart/form-data" name="frmMain" onSubmit="JavaScript:return check_job();">    
  <div class="job_blog">
  
          <div class="job_box">
          
           	<div class="job_box_left">
            	<label>
                	<div class="job_text">ชื่อ</div><br>
                	<span>
                    	<input type="text" name="job_name" class="job_input" />
                     </span>
                </label>
                <label>
                	<div class="job_text">นามสกุล</div><br>
                	<span>
                    	<input type="text" name="job_lastname" class="job_input" />
                    </span>
                </label>
                <label>
                	<div class="job_text">วัน/เดือน/ปีเกิด</div><br>
                	<span>
                    	<input type="text" name="job_birthday" class="job_input" />
                    </span>
                </label>
                <label>
                	<div class="job_text">เบอร์โทรศัพท์</div><br>
                	<span>
                    	<input type="text" name="job_tel" class="job_input" />
                    </span>
                </label>
                <label>
                	<div class="job_text">ตำแหน่งที่ต้องการสมัคร</div><br>
                    <span>
                    	<input type="text" name="job_career" class="job_input" />
                    </span>
                </label>
                
            </div>
           
            <div class="job_box_right">
            	<label>
                	<span>
                      <div class="job_image">
                    	<div class="job_box_pic">
                        	<img id="blah" src="images/job/gray.png" class="j_gray"  width="120px;" height="120px;"/>
                        </div>
                     
                      
                      <div class="fileUpload btn" id="job_resume_jobs">
                          <span>choose file</span>
                          <input name="fileAttach" type="file" class="upload" onchange="readURL(this);"/>
                          
                      </div>
                      
                      
                        <div class="job_text_pic">
                        	แนบรูปภาพประจำตัว<br>
                 
                        </div>
                      </div>
                        
                    </span>
                </label>
                <br>
            	 <label>
                	<div class="job_text">Email</div><br>
                	<span>
                    	<input type="text" name="job_email" class="job_input" />
                    </span>
                </label>
                <label>
                	<div class="job_text">เงินเดือนที่ต้องการ</div><br>
                    <span>
                    	<input type="text" name="job_salary" class="job_input" />
                    </span>
                </label>
                
              
            </div>
            
             <div class="job_box_leftt">
            	<div class="job_textarea_textarea">
                    <div>
                        <label><div class="job_text_area">ที่อยู่ปัจจุบัน</div></label><br>
                       <textarea name="job_address"  class="job_textarea"></textarea>
                    </div>
                     
                    <div>
                        <label><div class="job_text_area">ข้อมูลการศึกษา</div></label><br>
                        <textarea name="job_study"  class="job_textarea"></textarea>
                    </div>
                  
                    <div>
                        <label><div class="job_text_area">ประวัติการทำงาน</div></label><br>
                        <textarea name="job_job"  class="job_textarea"></textarea>
                    </div>
                </div>
             
            </div>
            
                   <input name="submit" type="image" src="images/job/2.png" width="120px;"/>
            
          </div>
        
              
     </div> <!-- END job_blog -->
</form>
         
</div>

<div style="margin-bottom:-100px;"></div>

<?php include "footer.php";?>
</body>
</html>
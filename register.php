<?php $nav_menu = 1; ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>iDEAL PHYSICS</title>
<link rel="icon"  type="image/png" href="images/idealphysics3.png" />

<meta content="width=1024" name="viewport" content="width=device-width minimum-scale=1, maximum-scale=4">	

<link rel="stylesheet" href="css/styles.css">

<link rel='stylesheet' id='reponsive'  href='css/footer_styles.css' type='text/css' media='all' />
   <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
     <!-- Bootstrap Core CSS -->
    <link href="css/nav_bar_styles.css" rel="stylesheet">
    
    <link href="css/font-style.css" rel="stylesheet">
       
    <script src="js/jquery-1.11.0.js"></script>
    
    <script src="js/script.js"></script>





<script type="text/javascript">
function re(code)
{
	var name = $('#name').val();
	var sname = $('#sname').val();
	var tel = $('#tel').val();
	var data = {name:name, sname:sname, tel:tel};
	var strmsg = "กรุณากรอก ";
			if (data.name == '' || data.sname == '' || data.tel == ''){
				if(data.name == "" ){
					strmsg += "ชื่อ ";
				}
				if(data.sname == ""){
					strmsg += "นามสกุล ";
				}
				if(data.tel == ""){
					strmsg += "เบอร์โทรศัพท์ ";
				}
				alert(strmsg);
				exit();	
			} else if(  tel.length < 9 || tel.length > 10 ){
				alert("เบอร์โทรศัพท์ไม่ถูกต้องกรุณาตรวจสอบอีกครั้ง");
				exit();	
			}else if (code == undefined || code == "undefined"){
				alert("กรุณาเลือกคอร์ดที่ต้องการชำระเงิน");
				exit();
			} 	
   document.location = "pdf/index.php?name="+name+"&sname="+sname+"&tel="+tel+"&code="+code+" ";
}
</script>

<script>
	$(document).ready(function(e) {
        //alert('test');
		$('.windows8').hide();
		var output = $('.resulttable');
		$('#bp').click(function(e) {
			$('.windows8').show();
			var table = $('.resulttable tr td').remove();
			var table = $('.resulttable tr td .rg_top').remove();
			var table = $('.resulttable tr td .rg_top_hr hr').remove();
			var course = $('#bp').attr('alt');
			showcourse(course);
			
        });
		
		$('#ep').click(function(e) {
			$('.windows8').show();
			var table = $('.resulttable tr td').remove();
			var table = $('.resulttable tr td .rg_top').remove();
			var course = $('#ep').attr('alt');
			showcourse(course);
           
        });
		
		$('#ap').click(function(e) {
			$('.windows8').show();
			var table = $('.resulttable tr td').remove();
			var table = $('.resulttable tr td .rg_top').remove();
			var course = $('#ap').attr('alt');
			showcourse(course);
           
        });
		
		$('#eg').click(function(e) {
			$('.windows8').show();
			var table = $('.resulttable tr td').remove();
			var table = $('.resulttable tr td .rg_top').remove();
			var course = $('#eg').attr('alt');
			showcourse(course);
           
        });
		
		$('#qp').click(function(e) {
			$('.windows8').show();
			var table = $('.resulttable tr td').remove();
			var table = $('.resulttable tr td .rg_top').remove();
			var course = $('#qp').attr('alt');
			showcourse(course);
           
        });
				
		$('#ad').click(function(e) {
			$('.windows8').show();
			var table = $('.resulttable tr td').remove();
			var table = $('.resulttable tr td .rg_top').remove();
			var course = $('#ad').attr('alt');
			showcourse1(course);
           
        });
		
		
		
		
	
    });
	

function validate(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[0-9]/;
  if( !regex.test(key) ) {
	alert("กรุณาใส่เฉพาะตัวเลข !");
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}

	function showcourse(value) {
		var output = $('.resulttable');
		var output1 = $('#resultul');
		var data = {name:course};
		var course = $('.price').attr('value');
		var data = {name:value};
		
		if (value =='bp'){
			va= 'BASIC PHYSICS';
		}else if(value =='ep'){
			va= 'ENTRANCE PHYSICS';
		}else if(value =='ap'){
			va= 'ADVANCE PHYSICS';
		}else if(value =='eg'){
			va= 'ENGINEERING PHYSICS';
		}else if(value =='qp'){
			va= 'QUOTA PHYSICS';
		}else if(value =='ad'){
			va= 'ซื้อวันเพิ่ม';
		}
		
		$.ajax({
			data: data,
			url: 'server.php',
			type: "POST",
			dataType:"json",
			success: function(data){
			
				output.append('<tr class="table-'+value+'"><td style="cursor:default;" align="center"><div class="rg_top"><div class="rg_top_text">'+va+'</div><div class="rg_top_hr"><hr></hr></div></div>รหัส</td><td style="cursor:default;" align="center">คอร์ส</td><td style="cursor:default;" align="center">ราคา</td><td style="cursor:default;" align="center">ลงทะเบียน</td></tr>');
				$.each(data, function(i,item){
					setTimeout(function(){
						output.append('<tr><td style="cursor:default;" class="td-bp" align="center">'+item.course+'</td><td style="cursor:default;" class="td-bp" align="left">'+item.name+'</td><td style="cursor:default;" class="td-bp" align="center" oncheck="numberWithCommas(x)" >'+item.price+'</td><td><input type="hidden" id="code" value="'+item.course+'" /><input type="image" src="images/register/1.png" width="30px;"  class="b_button" value='+item.course+' onClick="re(this.value)"></td></tr>');
					},1500);
					
					$('.windows8').fadeOut(3000);
					
					
				});
				
				
			}
		});
	}
	
	function showcourse1(value) {
		var output = $('.resulttable');
		var output1 = $('#resultul');
		var data = {name:course};
		var course = $('.price').attr('value');
		var data = {name:value};
		
		if(value =='ad'){
			va= 'ซื้อวันเพิ่ม';
		}
		
		$.ajax({
			data: data,
			url: 'server.php',
			type: "POST",
			dataType:"json",
			success: function(data){
			
				output.append('<tr class="table-'+value+'"><td style="cursor:default;" align="center"><div class="rg_top"><div class="rg_top_text">'+va+'</div><div class="rg_top_hr"><hr></hr></div></div>รหัส</td><td style="cursor:default;" align="center">จำนวนวันที่เพิ่ม</td><td style="cursor:default;" align="center">ราคา</td><td style="cursor:default;" align="center">ลงทะเบียน</td></tr>');
				$.each(data, function(i,item){
					setTimeout(function(){
						output.append('<tr><td style="cursor:default;" class="td-bp" align="center">'+item.course+'</td><td style="cursor:default;" class="td-bp" align="center">'+item.name+'</td><td style="cursor:default;" class="td-bp" align="center" oncheck="numberWithCommas(x)" >'+item.price+'</td><td><input type="hidden" id="code" value="'+item.course+'" /><input type="image" src="images/register/1.png" width="30px;"  class="b_button" value='+item.course+' onClick="re(this.value)"></td></tr>');
					},1500);
					
					$('.windows8').fadeOut(3000);
					
					
				});
				
				
			}
		});
	}
	
	

	
	
</script>  

</head>

<body>
<?php include "nav_bar.php";?>


<div class="container_blog">
         <div class="topicc" >ใบชำระค่าเรียน</div>
         <div class="blogg_hr"><hr></hr></div>

<div class="re_re_gis">
    
    
	<div class="register_box">
      		
        <div class="register_box_box register_column">
            <div class="register_topic" id="register_profile"><b>ข้อมูลส่วนตัว</b></div>
                     <div class="register_box_list">
                        <div class="register_box_set">
                            
                                <label style="padding-right: 50px;">
                                <span>ชื่อ</span><br><input  type="text" id="name" class="register_t" id="register_pad" maxlength="20"/>
                                </label>
                                
                                <label>
                                <span>นามสกุล</span><br><input type="text" id="sname"  class="register_t" id="register_pad" maxlength="20"/>
                                </label>
                                
                                <label>
                                <span>เบอร์โทรศัพท์</span><br><input type="text" id="tel" maxlength="10" onkeypress ="validate(event)" class="register_t" id="register_pad"/>
                                </label>
                                
                                
                               
                                
                               
                               
                            	<!--<img src="images/register/1.png" width="30" class="btnSubmit" type="button"  onClick="myFunction()">-->
                        </div>
                    </div>
     
    	</div>
    
    </div>
</div>
      
  
    <div class="register_box_course" style="margin-top: -58px;">
    <section id="main">
   		<div class="register_box_b_course register_box_bb_course">
        	<div class="register_topicc"><b>เลือกคอร์สเรียน</b></div>
        
        <div class="register_boxx_course">
            
            
            <div class="register_level_course"><b style="color:#F60;">PHYSICS</b></div>
            	<div class="register_boxx_course_learnning">
              <br>
              <div style="margin-left:55px;">
               <label class="img-con" id="bp" alt="bp">
               	  <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'"  >
                    <span class="rg_text_bp">BASIC</span><img src="images/register/4.png" style="width:160px;">
                   <!-- <img src="images/register/4.png" class="rg_img_box" width="160"><span class="rg_text_bp">BASIC</span>-->
                  </a>
                </label>
                                
                <label class="img-con" id="ep" alt="ep">
                   <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'"  >
                     <span class="rg_text_ep">ENTRANCE</span><img src="images/register/5.png" style="width:160px;">
                    <!-- <img src="images/register/5.png" class="rg_img_box" width="160"/> <span class="rg_text_ep">ENTRANCE</span>-->
                   </a>
                </label>
                
                 <label class="img-con" id="ap" alt="ap">
                   <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'"  >
                     <span class="rg_text_ap">ADVANCE</span><img src="images/register/6.png" style="width:160px;">
                     <!--<span class="rg_text_ap">ADVANCE</span><br>
                     <img src="images/register/6.png" class="rg_img_box" width="160"/>-->
                   </a>
                </label>
                
                 <label class="img-con" id="eg" alt="eg">
                   <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'"  >
                     <span class="rg_text_eg">ENGINEERING</span><img src="images/register/7.png" style="width:160px;">
                    <!-- <span class="rg_text_eg">ENGINEER(PAT 3)</span><br>
                     <img src="images/register/7.png" class="rg_img_box" width="160"/>-->
                   </a>
                </label>
                
                 <label class="img-con" id="qp" alt="qp">
                   <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'"  >
                         <span class="rg_text_qp">QUOTA</span><img src="images/register/8.png" style="width:160px;">
                    <!-- <span class="rg_text_qp">QUOTA</span><br>
                     <img src="images/register/8.png" class="rg_img_box" width="160"/>-->
                   </a>
                </label>
                </div>
        		 </div> 
   
           
               <a href = "javascript:void(0)" onclick = "document.getElementById('light1').style.display='block';document.getElementById('fade').style.display='block'" >
             		 <div class="register_level_course"><b style="color:#F60; float: left; margin-top: 10px">ซื้อวันเพิ่ม</b><div class="rg_img_ad"><img class="img-con" id="ad" alt="ad" src="images/register/9.png" width="100" style="margin-top: -20px;"></div></div>
            	</a>
                 
                 
      </div>   
   
     </div>     
<!--popup course--> 
 	<div id="light" class="white_content">
    	<div class="windows8">
                    <div class="wBall" id="wBall_1">
                    	<div class="wInnerBall"></div>
                    </div>
                    <div class="wBall" id="wBall_2">
                    	<div class="wInnerBall"></div>
                    </div>
                    <div class="wBall" id="wBall_3">
                    	<div class="wInnerBall"></div>
                    </div>
                    <div class="wBall" id="wBall_4">
                    	<div class="wInnerBall"></div>
                    </div>
                    <div class="wBall" id="wBall_5">
                    	<div class="wInnerBall"></div>
                    </div>
    	</div>
        
<!--end popup course--> 


        
        
        
        
        <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">
        <img src="images/register/Delete-icon.png"  class="rg_img_close"/>
         </a>
         
       
        <div class="mainbox-r">
        	<table class="resulttable" width="99%" border="0" cellspacing="0" cellpadding="0">
              	
            </table>
            
            <ul id="resultul">
            
            </ul>
            
        </div>
       
     </div>
     
     
     
     
     <!--popup course--> 
 	<div id="light1" class="white_content">
    	<div class="windows8">
                    <div class="wBall" id="wBall_1">
                    	<div class="wInnerBall"></div>
                    </div>
                    <div class="wBall" id="wBall_2">
                    	<div class="wInnerBall"></div>
                    </div>
                    <div class="wBall" id="wBall_3">
                    	<div class="wInnerBall"></div>
                    </div>
                    <div class="wBall" id="wBall_4">
                    	<div class="wInnerBall"></div>
                    </div>
                    <div class="wBall" id="wBall_5">
                    	<div class="wInnerBall"></div>
                    </div>
    	</div>
        
<!--end popup course--> 


        
        
        
        
        <a href = "javascript:void(0)" onclick = "document.getElementById('light1').style.display='none';document.getElementById('fade').style.display='none'">
        <img src="images/register/Delete-icon.png"  class="rg_img_close"/>
         </a>
         
       
        <div class="mainbox-r">
        	<table class="resulttable" width="99%" border="0" cellspacing="0" cellpadding="0">
              	
            </table>
            
            <ul id="resultul">
            
            </ul>
            
        </div>
       
     </div>
	
        <br><br>
        <table id="foot-table" width="90%" border="0" cellspacing="0" cellpadding="0" style="display:none;">
        	<tr>
            	<th width="80">รหัส</th>
                <th>คอร์ส</th>
                <th width="80">ราคา</th>
            </tr>  
        </table>
        <br>
       
    </section>
    
    </div>
    
    
    </form>
</div>



<?php include "footer.php";?>

</body>
</html>
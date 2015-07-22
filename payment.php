<?php $nav_menu = 1; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>iDEAL PHYSICS</title>
<meta content="width=1025" name="viewport" content="width=device-width minimum-scale=1, maximum-scale=4">
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
    <script src="js/submenu.js"></script>
       
       
<script>

$(function(){
	 $("#menu1").click(function(){$('html, body').animate({scrollTop:$("#slide1").position().top},"slow")});
	 $("#menu2").click(function(){$('html, body').animate({scrollTop:$("#slide2").position().top},"slow")});
	 $("#menu3").click(function(){$('html, body').animate({scrollTop:$("#slide3").position().top},"slow")});
	 $("#menu4").click(function(){$('html, body').animate({scrollTop:$("#slide4").position().top},"slow")});
	 $("#menu5").click(function(){$('html, body').animate({scrollTop:$("#slide5").position().top},"slow")});
});
   $(document).ready(function(){
        $("#menu__about").change(function(){
        	$('html, body').animate({scrollTop:$("#"+this.value).position().top},"slow");
    });
});
/*$(function(){
 
 $(".menu1").click(function(){
$('html, body').animate({
scrollTop:$("#slide1")
.position().top},800);
});
 
 
 $(".menu2").click(function(){
$('html, body').animate({
scrollTop:$("#slide2")
.position().top},800);
});
 
 
 $(".menu3").click(function(){
$('html, body').animate({
scrollTop:$("#slide3")
.position().top},800);
});
 
 
 
 $(".menu4").click(function(){
$('html, body').animate({
scrollTop:$("#slide4")
.position().top},800);
});
 
 
 
 $(".menu5").click(function(){
$('html, body').animate({
scrollTop:$("#slide5")
.position().top},800);
});
 

});*/



</script>



</head>

<body>
<?php
$Score = 100;
?>

<?php include "nav_bar.php";?>

   
<div class="container_blog_b">

               
         
<div class="payment_i_blogmenu">
      <bghide class="payment_bghide">
           <div class="payment_i_menu" >
             <div class="p_top_head">
               <div class="topic" >PAYMENT</div>
               <div class="bloggg_hr"><hr></hr></div>          
             </div>  
           </div>
           
 <div class='subb__menu' id="cssmenu">

        <ul>
            <li id="menu1" class="active"><a href="#slide1"><img src="images/payment/1.png" class="pay_pic"></a></li>
            <li id="menu2"><a href="#slide2"><img src="images/payment/2.png" class="pay_pic"></a></li>
            <li id="menu3"><a href="#slide3"><img src="images/payment/3.png" class="pay_pic"></a></li>
            <li id="menu4"><a href="#slide4"><img src="images/payment/4.png" class="pay_pic"></a></li>
            <li id="menu5"><a href="#slide5"><img src="images/payment/5.png" class="pay_pic"></a></li>
        </ul>

        </ul>
        </ul>
        <select id="menu__about">
            <option value="slide1">ชำระที่ธนาคาร</option>
            <option value="slide2">Credit Card</option>
            <option value="slide3">KTB</option>
            <option value="slide4">SCB</option>
            <option value="slide5">K-Bank</option>
        </select>
   </div>
              <!--<center>
               <div class="payment_menu_blog">  
                  <div class="payment_pic">
                     <a class="menu1"><img src="images/payment/1.png" class="pay_pic"></a>
                     <a class="menu2"><img src="images/payment/2.png" class="pay_pic"></a>
                     <a class="menu3"><img src="images/payment/3.png" class="pay_pic"></a>
                     <a class="menu4"><img src="images/payment/4.png" class="pay_pic"></a>
                     <a class="menu5"><img src="images/payment/5.png" class="pay_pic"></a>
                  </div>
                </div>
              </center>-->
      </bghide>
    </div>

       
<div style="margin-top:-100px;"></div> 
        <div id="slide1" class="pay_ment_slide">
                  <div class="payment_topic"><img src="images/payment/8.png" class="payment_head_head"/></div>
                            <div class="p_p_text">ชำระค่าเรียนที่เคาน์เตอร์ธนาคาร</div>
                          <div class="blog_hr_a"><hr></hr></div>
                           
          <div class="payment_scroll">
           
                           
                           <div class="payment_counter">
                              <div class="payment_detail payment_boxs">
                                  นำใบชำระค่าเรียน ideal Physics หรือ ใบโอนเงินของธนาคารชำระได้ที่เคาน์เตอร์<br>
                              ธ.ไทยพาณิชย์ ธ.กสิกรไทย หรือ ธ.กรุงไทย ทุกสาขา
                              </div>
                              <a href="images/pdf/PayIN.pdf" target="_blank">
                                  <div class="payment_detail_right">
                                        <img src="images/payment/13.png" /><br> <div class="payment_payment">ใบชำระค่าเรียน</div></div>
                                  </div>
                              </a>
                           </div>
                           <div class="payment_line"></div>
                           </div>
                           
                   <div style="margin-top:-160px;"></div>         

                 <div id="slide2" class="pay_ment_slide">
                    <div class="payment_topic"><img src="images/payment/9.png" class="payment_head_head"/></div>
                            <div class="p_p_text">ชำระค่าเรียนผ่านบัตรเครดิต</div>
                          <div class="blog_hr_b"><hr></hr></div>
                        	<center>  
                            	<div class="payment_pic_credit" ><img src="images/payment/14.png" class="p_pic"/></div>
                            </center>
                 </div>
                
                 <div style="margin-top:-160px;"></div> 
                  <div id="slide3" class="pay_ment_slide">
                    <div class="payment_topic"><img src="images/payment/10.png" class="payment_head_head"/></div>
                             <div class="p_p_text">ธนาคารกรุงไทย</div>
                          <div class="blog_hr_c"><hr></hr></div>
                          <center>
                          	<div class="payment_pic_pay" ><img src="images/payment/15.png" class="p_pic"/></div>
                    	</center>
                  </div>
                     
                    <div style="margin-top:-160px;"></div> 
                      <div id="slide4" class="pay_ment_slide">
                      <div class="payment_topic"><img src="images/payment/11.png" class="payment_head_head"/></div>
                             <div class="p_p_text">ธนาคารไทยพาณิชย์</div>
                          <div class="blog_hr_d"><hr></hr></div>
                          <center>
                          	<div class="payment_pic_pay" ><img src="images/payment/16.png" class="p_pic"/></div>
                      	 </center>
                    </div>
                   
                    <div style="margin-top:-220px;"></div> 
                    <div id="slide5" class="pay_ment_slide">
                      <div class="payment_topic"><img src="images/payment/12.png" class="payment_head_head"/></div>
                            <div class="p_p_text">ธนาคารกสิกรไทย</div>
                          <div class="blog_hr_e"><hr></hr></div>
                          <center>
                         	 <div class="payment_pic_pay" ><img src="images/payment/17.png" class="p_pic"/></div>
                          </center>
                  </div>
                 
</div>
     <div style="margin-top:-120px;"></div> 

<?php include "footer.php";?>
   
   


</body>
</html>
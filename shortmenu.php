<!-- Add jQuery library -->

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.3"></script>
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.2" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="source/helpers/jquery.fancybox-media.js?v=1.0.5"></script>

<style type="text/css">  
 html {   
        height: 100%;   
        }   
body {   
    background: #FFF;   
    padding: 0;   
    margin: 0;   
    width: 100%;   
    height: 100%;  
 } 
#overlayII {   
  	background:#000;
	width:100%;
	height:100%;
	z-index:99900;
	top:0px;
	left:0px;
	position:fixed;
    opacity: .5;   
    filter: alpha(opacity=50);   
    -moz-opacity: .5;  
	display:none;
}   
.msg_show{
	width:500px;
	height: 220px;
	margin-top: 5%;
	margin-left: 20%;
	box-shadow: 10px 10px 5px #888888;
	background-color:#000;
	border-radius: 10px 10px 10px 10px;
	-moz-border-radius: 10px 10px 10px 10px;
	-webkit-border-radius: 10px 10px 10px 10px;
	border: 0px solid #000000;	
}
.msg_showguru{
	width:35%;
	height: 35%;
	margin-top: 5%;
	margin-left: 15%;
	box-shadow: 10px 10px 5px #888888;
	background-color:#000;
	border-radius: 10px 10px 10px 10px;
	-moz-border-radius: 10px 10px 10px 10px;
	-webkit-border-radius: 10px 10px 10px 10px;
	border: 0px solid #000000;	
}
.show_box_img {
	color:#FFFFFF;
	font-size:17px;
	width:5%;
	height:5%;
	margin-top: 0px;
	margin-left: 96%;
	position:absolute;
	z-index: 99;
}
.show_box_img:hover {
	color:#FFFFFF;
	text-decoration:none;
}
.head_login_popup {
	width: 100%;
	height: 40px;
	background-color: #F60;
	border-radius: 10px 10px 0px 0px;
	-moz-border-radius: 10px 10px 0px 0px;
	-webkit-border-radius: 10px 10px 0px 0px;
	border: 0px solid #000000;	
}
.head_login_popup > a {
	margin-top: 5px;
	margin-left: 30%;
	text-decoration:none;
	color:#FFF;
	font-size: 27px;
	font-weight:bold;
	position:absolute;
}
.logo_popup {
	background-image:url(images/login_idealphysics/logo_login.png);
	background-position:center;
	background-repeat:no-repeat;
	background-size: 100% 100%;
	width: 15%;
	height: 15%;
	margin-left: 5%;
	margin-top: 0.2%;
	position:absolute;
}
.textemail {
	margin-top: 30px;
	margin-left: 20%;
	width: 70%;
}
.textpassword {
	margin-top: 5px;
	margin-left: 0px;
	width: 100%;
	
}
.btn_login {
	text-align:center;
	color:#FFF;
	font-size: 16px;
	margin-top: 10px;
	margin-left: 60%;
	width: 17%;
	height: 15%;
	background-color: #F60;
	border-radius: 8px 8px 8px 8px;
	-moz-border-radius: 8px 8px 8px 8px;
	-webkit-border-radius: 8px 8px 8px 8px;
	border: 0px solid #000000;	
}
.btn_login:hover {
	background-color:#FF3300;
}

@media only screen and (max-width: 1024px) {
	.msg_show{
	margin-left: 10%;
}

}
@media only screen and (min-width: 1025px) and (max-width: 1395px) {
	.msg_show{
	margin-left: 15%;
}

}
</style> 
<script type="text/javascript">

$(document).ready(function() {
$("#fancybox-manual-a").click(function() {
				$.fancybox.open('images/popupindex/PopUp-Everywhere.png');
			});
});

</script>



<div class="shortmenu">
	<ul>
    	<li>
      
      	
        <a href="http://www.idealprivate.com/Index.php" target="_blank" class="booking"><h1>ระบบเรียนส่วนตัว</br>ที่ตอบสนองทุกความต้องการ</h1></a>
		<a style="cursor:pointer" id="fancybox-manual-a" class="guru"><h1>ระบบการเรียนใหม่</br>ที่สามารถเรียนได้ ทุกที่ ทุกเวลา</h1></a>
        <a href="channel.php?submenu=ANSWER" class="vdo"><h1>ทดลองเรียนได้ทุกวิชา</br>เพื่อความมั่นใจ</h1></a>
      	<a href="javascript:void(0);?name='booking" class="show_box plus"><h1>จองที่นั่งเรียน</br>ideal Private</h1></a>

        <a           														class="underline"></a>

        <a href="http://idealprivate.com/guru/" target="_blank" class="idealonline"><h1>ส่งคำถาม-รับคำตอบ</br>กับอาจารย์ผู้สอนโดยตรง</h1></a>
        <a href="images/pdf/payin.pdf" target="_blank" class="idealprivate"></a>
        <a href="register.php" class="regis"></a>
        <a href="register.php" class="payment"><h1>ซื้อวันเรียนเพิ่มได้</br>เมื่ออายุคอร์สหมด</h1></a>
        
       
       
        </li>
    </ul>
</div>

<div class="msg_show">
<a class="show_box show_box_img" href="javascript:void(0);">X</a>
<div class="msg_data">
<!--à¹×éÍËÒã¹ popup message-->
<div class="logo_popup"></div>
<div class="head_login_popup">
<a>ideal Physics</a>
</div>
<div class="textemail">
    <form class="form-horizontal" method="post">
    <div class="form-group form-group-sm">
    <div class="col-sm-10">
      <input class="form-control" type="text" id="txtUser" placeholder="Username" name="email">
<div class="textpassword">
      <input class="form-control" type="password" id="txtPassword" placeholder="Password" name="pass">
      </div>
    </div>
  </div>
  </div>
  <button type='submit' id="loginButton" class='btn_login'>Login</button>
  </form>
</div>
</div>
</div>
<div id="overlayII"></div>

<script type="text/javascript">
$(function(){
	$(".show_box").click(function(){
		$("#overlayII").fadeToggle("",function(){ // áÊ´§ÊèÇ¹¢Í§ overlay
			$(".msg_show").fadeToggle("",function(){ // áÊ´§ÊèÇ¹¢Í§ à¹×éÍËÒ popup
				if($(this).css("display")=="block"){		// ¶éÒà»ç¹¡Ã³ÕáÊ´§¢éÍÁÙÅ 
				//	ËÒ¡µéÍ§¡ÒÃ´Ö§¢éÍÁÙÅÁÒáÊ´§ áºº ajax
				//	ÊÒÁÒÃ¶´Ñ´á»Å§¨Ò¡â¤é´¹Õéä´é		
				//	$(".msg_data").load("data.php");	
				//		ËÃ×Í
				//	$.post("data.php",{},function(data){
				//		$(".msg_data").html(data);
				//	});
				}
			});
		});
	});
});
</script>


<script>
$('#loginButton').click(function() {

            var username = $('#txtUser').val();
            var password = $('#txtPassword').val();

           

            var result;

                $.ajax ({

                    url:"forLogin.php",
                    type:"POST",
                    async:false,
                    data:{"type":'login','username':username,'password':password},
                    dataType:"json",
                    success:function(data){
                        result = data;
                    }

                });

           
            

            if (result) {



                var url = 'http://login2.idealprivate.com/login.php';
                var url1 = "http://www.idealphysics.com/demo/idealup/include/login.php";
                var keyword = enc(Math.floor((Math.random()*10000)+1).toString());
                /*if(location.pathname != ""){
                    var urlpath = location.pathname;
                    urlpath = urlpath.replace("/idealup.com/public_html","");  // ตอนขึ้น sv จริงเอาออกก่อนนะ
                    var str = urlpath.split("/");
                    for(var i=2; i<str.length ; i++){
                        url= "../"+url;
                    }
            //     alert(url);
                }*/
                $.ajax({
                    type: "POST",
                    data: {"user":username,"pass":password,"key":keyword},
                    url: url,
                    success: function(data){
                        if (data == 1){
                            mypopup = window.location.replace('http://login2.idealprivate.com/register/index.php?user='+username+'&url='+url1+'&key='+keyword+'&ref='+window.location,'nenuber=no,toorlbar=no,location=no,scrollbars=no, status=no,resizable=no,width=180,height=180,top=220,left=650 ');
                        	mypopup.focus();
                        	location.reload();
                        }else{
                            alert(data);
                        }
                    }
                });
                return false;

            } else {

                //$('#alertError').show();
                //$('#txtPassword').val('');
                alert('username or password is incorrect');

            }            

 });       

    function enc(str) {
        var encoded = "";
        for (i=0; i<str.length;i++) {
            var a = str.charCodeAt(i);
            var b = a ^ 123;    // bitwise XOR with any number, e.g. 123
            encoded = encoded+String.fromCharCode(b);
        }
        return encoded;
    }
</script>





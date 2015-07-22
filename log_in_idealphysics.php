<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IDEAL PHYSICS</title>
		<link rel="shortcut icon" href="images/iDealLogo.ico" />
    	<!-- Bootstrap Core CSS -->
    	<link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Style -->
        <link href="css/font-style.css" rel="stylesheet">
        
		<link href="css/nav_bar_styles.css" rel="stylesheet">
<style type="text/css">
.popup_wrapper {
	width:100%;
	height: 100%;
	margin-top: 0%;
	margin-left: 0%;
	box-shadow: 10px 10px 5px #888888;
	background-color:#000;
	border-radius: 10px 10px 10px 10px;
	-moz-border-radius: 10px 10px 10px 10px;
	-webkit-border-radius: 10px 10px 10px 10px;
	border: 0px solid #000000;	
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
.logopopup {
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
	margin-left: 25%;
	width: 50%;
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
	width: 15%;
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
</style> 
</head>

<body>
<div class="popup_wrapper">
<div class="logopopup"></div>
<div class="head_login_popup">
<a>ideal Physics</a>
</div>
 <div class="textemail">
    <form class="form-horizontal" method="post">
    <div class="form-group form-group-sm">
    <div class="col-sm-10">
      <input class="form-control" type="text" id="formGroupInputSmall" placeholder="Email" name="email">
 <div class="textpassword">
      <input class="form-control" type="password" id="formGroupInputSmall" placeholder="Password" name="pass">
      </div>
    </div>
  </div>
  </div>
  <button type='submit' name='smt' class='btn_login'>Login</button>
  </form>
</div>
</body>  
</html>
<? 
 if(isset($_POST['smt'])){
         require_once 'config.php';
         $query = "select * from user where Email = '".$_POST['email']."' and Pass ='".$_POST['pass']."'";
         $result = mysql_query($query);
         if(mysql_num_rows($result)>0)
         {
            while($rows =  mysql_fetch_assoc($result)){
                $_SESSION['user']=$rows['Email'];
            }          
            echo "<script type='text/javascript'>";
				echo "alert('ยินดีต้อนรับ')";
				echo "</script>";
				echo "<script>window.location='index.php'</script>";
         }else
		 {
			echo "<script type='text/javascript'>";
				echo "alert('กรุณาลองใหม่อีกครั้ง')";
				echo "</script>";
		 }
   }
?>
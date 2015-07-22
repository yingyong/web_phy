<?
   ob_start();
   session_start();
   session_destroy();

   $nav_menu = 1;
   //$_SESSION['user'] = $user;
   //$user_hash=hash('sha256' ,'$user');
   //echo $_SESSION['user'];
?>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="width=1024" name="viewport" content="width=device-width minimum-scale=1, maximum-scale=4">
<title>IDEAL PHYSICS</title>
<link rel="shortcut icon" href="images/idealphysics3.png" />
    <!-- Font Style -->
        <link href="css/font-style.css" rel="stylesheet">
    <!-- Style Core CSS -->
        <link href="css/idealphysics_styles.css" rel="stylesheet">
        <link href="css/login_popup.css" rel="stylesheet">
        <link href="css/nav_bar_styles.css" rel="stylesheet">
        <link href="css/shortmenu.css" rel="stylesheet">
        <link href="css/event_styles.css" rel="stylesheet">
        <link href="css/footer_styles.css" rel="stylesheet">
        <link href="css/parnerlink_styles.css" rel="stylesheet">
        <link rel='stylesheet' id='reponsive'  href='css/styles.css' type='text/css' media='all' />
        <script  type='text/javascript' src='js/jquery-1.11.0.js'></script>  
        <script src="slidesjs/js/slides.min.jquery.js"></script>
        <script  type='text/javascript' src="js/script.js"></script>

</head>

<body class="worlding">
<?php  
$Score=80; // ตัวแปร PHP check index 
?>
<div>
 <!-- headidealphysics -->
<?php include 'idealphysics.php';?>
</div>
<div id="idealslide"></div>
<div>
<!-- Begin Navbar -->
<?php include 'nav_bar.php';?>
</div>
<div>
<!--Slide image -->
<?php include 'slideshow.php';?>
</div>
</br>
</br>
</br>
<div>
<!--shortcuts menu-->
<?php include 'shortmenu.php';?>
</div>
<!-- VDO -->
<!-- include Video Youtube Start-->
<script type="text/javascript">
     var videoId ="oCQ_aqGxDXQ"; 
</script>
<?php include 'videoPlayindex.php';?>
</br>
<div>
<!--Begin event-->
<?php //include 'event.php'; ?>
</div>
<div>
<!--Begin social-->
<?php include 'social_test.php'; ?>
</div>
<!--Begin Partnerlink-->
<?php //include 'parnerlink.php'; ?>
</div>
<div>
<!--Begin Footer-->
<?php include 'footer.php'; ?>
</div>  

  
</body>
</html>

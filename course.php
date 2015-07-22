<?php 

    ini_set('display_errors', '1');
    error_reporting(E_ALL);
    
    session_start();
    $nav_menu = 3;
    
	require_once "connectDB.php";
?>
<html>
<head>
<meta content="width=1024" name="viewport" content="width=device-width minimum-scale=1, maximum-scale=4">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>IDEAL PHYSICS</title>
	<!-- Bootstrap Core CSS -->
    	<link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Style -->
        <link href="css/font-style.css" rel="stylesheet">
    <!-- Core CSS -->
    	<link href="css/nav_bar_styles.css" rel="stylesheet">
        <link href="css/course-physics-basic.css" rel="stylesheet">
        <link href="css/course-physics-popup.css" rel="stylesheet">
        <link href="css/footer_styles.css" rel="stylesheet" />

        

        <script type='text/javascript' src='js/jquery-1.11.0.js'></script>
        <!-- Include Thumbelina script. -->
        <link rel="stylesheet" type="text/css" href="css/thumbelina.css" />
        <script type="text/javascript" src="js/thumbelina.js"></script>  
  
        <script  type='text/javascript' src="js/script.js"></script>
     
</head>

<style>
    
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
</style>

<body>
<?php 
$Score=100; // ตัวแปร PHP check index 
?>
<div>
<!--Begin Nav_nar-->
<?php  require_once 'nav_bar.php';?>
</div>
<div>
<!--VDO-->
<!--include Video Youtube Start-->
<script type="text/javascript">

     var videoId ="W-3bpfTINM4"; 

</script>
<?php require_once 'videoPlay.php';?>
</div>
<div>
<?php require_once 'submenucourse.php';?>
</div>
<br>
<br>
<br>
<div>
<!--Begin Course-physics-basic-->
<?php require_once 'course-physics-basic.php';?>
</div>
<br>
<br>
<br>
<br>
<div>
<!--begin Footer-->
<?php require_once 'footer.php';?>
</div>

<?php require_once 'closeConn.php';?>
</body>
</html>
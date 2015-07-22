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
<meta name=keywords content="idealup, ไอเดียลอัพ, รกำฟสีย, สอนฟิสิก, ideal physics, ideal private, ideal, physics, ฟิสิกส์, อาจารย์พีระ,ไอเดียลฟิสิกส์ , ไอเดียล ฟิสิกส์ , ไอเดียว , ฟิสิกส์ , กวดวิชา , เรียนพิเศษ , ideal physics, idealphysics , ideal , idea , พี่มัก , อ. พีระ บูชาบุพพาจารย์ , อ.พีระ , อาจารย์มัก , อาจารย์พีระ , อาจารย์พีระ บ.บุพพาจารย์ , อาจารย์มัก พีระ ,อาจารย์มัก ไอเดียล , อาจารย์มัก สอนฟิสิกส์ , IP , สอนฟิสิกส์ดีที่สุด ,คอร์สฟิสิกส์ , คอร์สไฟฟ้า ,คอร์สเอนท์ , ไฟฟ้า, กลศาสตร์ , คลื่น ,แสง,เสียง, สมบัติสสาร , อะตอม , สสาร ,entrance,ตะลุยโจทย์,พื้นฐานวิดวะ,พื้นฐานวิศวะ ,สอนสด , ระเบียบการ , ปิดเทอม ,เปิดเทอม , สมัครเรียน , คอร์ส Ent, สอนดี , รู้เรื่อง , ง่าย , สาขา, เชียงราย , ลำปาง , พิษณุโลก , เชียงใหม่ , อุดร , ขอนแก่น , โคราช , ร้อยเอ็ด , บุรีรัมย์ , อุบล , นครสวรรค์ , สุพรรณ , ชลบุรี , ราชบุรี , สุราษฎร์ , ภูเก็ต , ตรัง ,หาดใหญ่ , นราธิวาส ,สยามสแควร์ , สยามกิตติ์ ,บางกะปิ , วงเวียนใหญ่ , สามเสน ,งามวงศ์วาน ,พญาไท , ตึกววรณสรณ์ , นนทบุรี , ideal private , private , ระบบเรียนส่วนตัว , ข้อสอบโควต้า , 087 977 7000 ,สรุปสูตร ,แก้โจทย์ ,สนุกสนาน,ไม่น่าเบื่อ , ไม่ง่วง ,จออัจฉริยะ,facebook , ม.4 ,ม.5,ม.6 ,จุฬา,ทันตะ ,วิศวะ ,แพทย์,แพทย์ ศิริราช , แพทย์ มหิดล ,GAT ,PAT ,สอบ, สอบ ent , มหาวิทยาลัย , สอนฟิสิกส์, quota physics, physics, รกำฟส, ย้ัหรแห, รกำฟส ย้ัหรแห, physic, physics online, เรียนพิเศษ,รกำฟส,">
<meta name=description content="โรงเรียนกวดวิชา ideal physics สถาบันสอนฟิสิกส์ที่ดีที่สุด โดย อ. พีระ บ.บุพพาจารย์ (พี่มัก) เปิดสอนทั้งระบบ DVD และระบบเรียนส่วนตัว  ideal private">
<meta name=author content="">
<meta name=robots content="index, follow">
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
<?php include 'social.php'; ?>
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

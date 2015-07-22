<?php $nav_menu = 1; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>iDEAL PHYSICS</title>
<link rel="icon"  type="image/png" href="images/idealphysics3.png" />
<meta content="width=1024" name="viewport" content="width=device-width minimum-scale=1, maximum-scale=4">	
<link href="css/styles.css" rel="stylesheet">


<link rel='stylesheet' id='reponsive'  href='css/footer_styles.css' type='text/css' media='all' />
   <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
     <!-- Bootstrap Core CSS -->
    <link href="css/nav_bar_styles.css" rel="stylesheet">
     <link href="css/font-style.css" rel="stylesheet">

      <script  type='text/javascript' src="js/script.js"></script>
      <script type='text/javascript' src='js/jquery-1.11.0.js'></script>


	

	 <script>
		function myHide()
		{
			document.getElementById('hidepage').style.display='block';//content ที่ต้องการแสดงหลังจากเพจโหลดเสร็จ
			document.getElementById('hidepage2').style.display='none';//content ที่ต้องการแสดงระหว่างโหลดเพจ
		}
	</script>
 
 
</head>

<body onload="myHide();">

<?php include "nav_bar.php";?>


       <div id="mainSection">
       
                    <div id="hidepage2" class="hidepage2" style="align="center" width="100%"">
                      <br>
                      <div id="branch_advanced" class="branch_circle" ><a>l</a></div><br>
                    
                      </div>
                      
                      <div id="hidepage" style="display:none;">
                     
                   </div>
          
            <?php
			  $link=$_GET['link'];
			  if ($link == $_GET['link']){
				  require_once 'branch/'.$link.'.php';
			  }
            ?>  
       </div>
 <div style="margin-bottom:-150px;"></div>
    
<?php include "footer.php";?>

    


</body>
</html>

 <link href="css/bootstrap.min.css" rel="stylesheet">
 <script src="js/bootstrap.min.js"></script>

 <script>
   $(document).ready(function() {
	   $(window).bind('scroll', function() {
	   var u_score=<?=$Score?>; // ตัวแปร javascript    
	   var navHeight = $( window ).height() - 630;
		if(u_score==80){	
			 if ($(window).scrollTop() > 630) {
				 $('nav').addClass('fixed');
			 }
			 else {
				 $('nav').removeClass('fixed');
			 }
	   }
	   if(u_score==100) {	
	   		$('nav').addClass('stand');
	   }
		});
	});
</script>
<div style="height : 55px;max-width:1024px;margin-left: auto;margin-right: auto;">
<nav>
 <div class="navbar-default" role="navigation">
 <div class="container">
        <div class="navbar-header"><a class="navbar-brand" href="#"><!--<img src="images/iDealLogo.png" width="190" height="75">--></a>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
          <?php
              if($nav_menu == 1) {
          ?>
            <li><a class="text_active" href="index.php#idealslide">HOME</a></li>
            
            <li><a class="line"></a></li>
            
            <li><a class="text" href="about.php">ABOUT</a></li>
            
            <li><a class="line"></a></li>
             
            <li><a class="text" href="course.php">COURSE</a></li>
            
            <li><a class="line"></a></li>
            
            <li><a class="text" href="club.php">CLUB</a></li>
            
            <li><a class="line"></a></li>
            
            <li><a class="text" href="channel.php">iCHANNEL</a></li>
            <?
            }
              elseif($nav_menu == 2) {

            ?>
            <li><a class="text" href="index.php#idealslide">HOME</a></li>
            
            <li><a class="line"></a></li>
            
            <li><a class="text_active" href="about.php">ABOUT</a></li>
            
            <li><a class="line"></a></li>
             
            <li><a class="text" href="course.php">COURSE</a></li>
            
            <li><a class="line"></a></li>
            
            <li><a class="text" href="club.php">CLUB</a></li>
            
            <li><a class="line"></a></li>
            
            <li><a class="text" href="channel.php">iCHANNEL</a></li>
            <?
            }
               elseif($nav_menu == 3) {

            ?>
            <li><a class="text" href="index.php#idealslide">HOME</a></li>
            
            <li><a class="line"></a></li>
            
            <li><a class="text" href="about.php">ABOUT</a></li>
            
            <li><a class="line"></a></li>
             
            <li><a class="text_active" href="course.php">COURSE</a></li>
            
            <li><a class="line"></a></li>
            
            <li><a class="text" href="club.php">CLUB</a></li>
            
            <li><a class="line"></a></li>
            
            <li><a class="text" href="channel.php">iCHANNEL</a></li>
            <?
            }
              elseif($nav_menu == 4) {

            ?>
            <li><a class="text" href="index.php#idealslide">HOME</a></li>
            
            <li><a class="line"></a></li>
            
            <li><a class="text" href="about.php">ABOUT</a></li>
            
            <li><a class="line"></a></li>
             
            <li><a class="text" href="course.php">COURSE</a></li>
            
            <li><a class="line"></a></li>
            
            <li><a class="text_active" href="club.php">CLUB</a></li>
            
            <li><a class="line"></a></li>
            
            <li><a class="text" href="channel.php">iCHANNEL</a></li>
            <?
            }
              else {

            ?>
            <li><a class="text" href="index.php#idealslide">HOME</a></li>
            
            <li><a class="line"></a></li>
            
            <li><a class="text" href="about.php">ABOUT</a></li>
            
            <li><a class="line"></a></li>
             
            <li><a class="text" href="course.php">COURSE</a></li>
            
            <li><a class="line"></a></li>
            
            <li><a class="text" href="club.php">CLUB</a></li>
            
            <li><a class="line"></a></li>
            
            <li><a class="text_active" href="channel.php">iCHANNEL</a></li>
            <?
            }
            ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
  </div><!-- /.navbar -->
</nav>
</div>
<div style="clear:both"></div>
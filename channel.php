<?php 

	ini_set('display_errors', '1');
    error_reporting(E_ALL);

	mb_internal_encoding("UTF-8");
	date_default_timezone_set('Asia/Bangkok');
	$Score = 100;
	$nav_menu = 5;

	// วิธีการใส่กลุ่มต่างๆ ให้กับ VDO

	// ใน Folder ชื่อ vdochannel มี File หนึ่ง ชื่อ vdochannel.json
	// ให้แก้ไขที่ "divclass" โดยที่ VDO นึงๆ จะไปอยู่กับ Group มากกว่า 1 Group ได้
	// ซึ่งใส่ allideallikevideos ไว้กับทุกๆ VDO เพื่อให้รู้ว่า VDO เหล่านี้ มาจาก ideallike ของ YouTube
	// ตาม Group ชื่อ 'NEW' ใน divclass ใส่ newcoming
	// ตาม Group ชื่อ 'TRIAL' ใน divclass ใส่ triallearning
	// ตาม Group ชื่อ 'TUEFREE' ใน divclass ใส่ freetutor
	// ตาม Group ชื่อ 'ANSWER' ใน divclass ใส่ solutions
	// ตาม Group ชื่อ 'SUGGESTION' ใน divclass ใส่ recommended
	// ตาม Group ชื่อ 'INTERVIEW' ใน divclass ใส่ interviewing

	// ตัวอย่างเช่น หาก VDO นั้น อยู่ใน Group ของ NEW , ANSWER , และ SUGGESTION ก็ระบุค่าdivclass เป็นดังนี้
	// "divclass": "allideallikevideos newcoming solutions recommended",

	// หาก VDO นั้น อยู่ใน Group ของ TRIAL ก็ระบุค่าdivclass เป็นดังนี้
	// "divclass": "allideallikevideos triallearning",

	// ก็คือ พิมพ์ไว้ใน " " แล้วคั่นชื่อ Class ต่างๆ ด้วย เว้นวรรค (Spacebar)
	// ซึ่ง allideallikevideos นั้น ไม่มีก็ได้ ไม่มีผลต่อ Code ม้อดใส่เพื่อให้รู้ว่า VDO เหล่านี้ มาจาก ideallike ของ YouTube

?><!doctype html>
<html><head>
<meta content="width=1024" name="viewport" content="width=device-width minimum-scale=1, maximum-scale=4">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Cache-control" content="no-cache, must-revalidate" />
<title>IDEAL PHYSICS</title>
	<!-- Bootstrap Core CSS -->
    	<link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- Core CSS -->
    	<link href="css/nav_bar_styles.css" rel="stylesheet" />
        <link href="css/submenu.css" rel="stylesheet" />
        <link href="css/channel.css" rel="stylesheet" />
        <link href="css/footer_styles.css" rel="stylesheet" />

        <link href="css/font-style.css" rel="stylesheet" />
        

        <script type='text/javascript' src='js/jquery-1.11.0.js'></script>
        <script type='text/javascript' src='js/script.js'></script>

        <script type='text/javascript' src='js/isotope.pkgd.min.js'></script>
        <script type='text/javascript'>
		<!--

			// ModdTP 's JavaScript begins here.

			var videoId = "W-3bpfTINM4"; //"4Y-e1IyhRO0"; //
			var crlf							= "\r\n";
			var $div_responsive_vdo_preview;
			var colW							= 290;
			var columns							= null;

			function getSearchParameters()
			{
				var prmstr = window.location.search.substr(1);
				return ((prmstr != null) && (prmstr != "")) ? transformToAssocArray(prmstr) : {};
			}

			function transformToAssocArray( prmstr ) {
				var params = {};
				var prmarr = prmstr.split("&");
				for ( var i = 0; i < prmarr.length; i++)
				{
					var tmparr = prmarr[i].split("=");
					params[tmparr[0]] = tmparr[1];
				}
				return params;
			}

			function playerLoadVideoByIdIfNotAJAX(youtubeVideoID,youtubeVideoTitle,youtubeVideoViewCount,youtubeVideoTitle,youtubeVideoDescription,youtubeVideoDuration)
			{
				$('html, body').animate({scrollTop:0},"slow");
				$('#views').html(numberWithCommas(""+youtubeVideoViewCount+""));
				$('#vdoTitle').html(youtubeVideoTitle);
				$('#vdoDescription').html(youtubeVideoDescription);
				$('#duration').html(formattingTime(youtubeVideoDuration));
				$("#timeDuration").html("ความยาว : " + numberWithCommas(""+parseInt((parseInt(youtubeVideoDuration))/60)+"")+":"+parseInt((youtubeVideoDuration%60)/10)+(youtubeVideoDuration%10) + " นาที");
				player.loadVideoById(youtubeVideoID);
				dvControl.style.display = "none";
				buttonPlay.src = "images/pause.png";
				updateRuntime = setInterval(runTime, 100);
				status = "play";
			}

			function trulyOperateSubMenu(subMenuID)
			{
				switch(subMenuID)
				{
					case 'top_menu_01':	// ทั้งหมด
						$div_responsive_vdo_preview.isotope({ filter: '*' });
					break;
					case 'top_menu_02': // มาใหม่
						$div_responsive_vdo_preview.isotope({ filter: '.solutions' });
					break;
					case 'top_menu_03': // ทดลองเรียน
						$div_responsive_vdo_preview.isotope({ filter: '.guide' });
					break;
					case 'top_menu_04': // ติวฟรี
						$div_responsive_vdo_preview.isotope({ filter: '.interviewing' });
					break;
					case 'top_menu_05': // เฉลยโจทย์
						$div_responsive_vdo_preview.isotope({ filter: '.freetutor' });
					break;
					case 'top_menu_06': // แนะนำ
						$div_responsive_vdo_preview.isotope({ filter: '.recommended' });
					break;
					case 'top_menu_07': // สัมภาษณ์
						$div_responsive_vdo_preview.isotope({ filter: '.freetutor' });
				}
				$div_responsive_vdo_preview.isotope( 'once', 'layoutComplete', function()
				{
					setTimeout(function()
					{
						$('html, body').animate({scrollTop:$("#div_responsive_vdo_preview").position().top-48},"slow");
					} , 100);
				});

			}

			function activeSubMenu(subMenuName)
			{
				$('.sub__menu li').removeClass('active');
				//var menu__channel_option_selected = $("#menu__channel option:selected").val();
				//$('#li_'+menu__channel_option_selected.substring(menu__channel_option_selected.length-11,menu__channel_option_selected.length)).addClass('active');	
				switch(subMenuName.toLowerCase())
				{
					case 'all':
						$('#li_top_menu_01').addClass('active');
						$('#menu__channel').val('option_top_menu_01');
						trulyOperateSubMenu('top_menu_01');
					break;
					case 'new':
						$('#li_top_menu_02').addClass('active');
						$('#menu__channel').val('option_top_menu_02');
						trulyOperateSubMenu('top_menu_02');
					break;
					case 'trial':
						$('#li_top_menu_03').addClass('active');
						$('#menu__channel').val('option_top_menu_03');
						trulyOperateSubMenu('top_menu_03');
					break;
					case 'tuefree':
						$('#li_top_menu_04').addClass('active');
						$('#menu__channel').val('option_top_menu_04');
						trulyOperateSubMenu('top_menu_04');
					break;
					case 'answer':
						$('#li_top_menu_05').addClass('active');
						$('#menu__channel').val('option_top_menu_05');
						trulyOperateSubMenu('top_menu_05');
					break;
					case 'suggestion':
						$('#li_top_menu_06').addClass('active');
						$('#menu__channel').val('option_top_menu_06');
						trulyOperateSubMenu('top_menu_06');
					break;
					case 'interview':
						$('#li_top_menu_07').addClass('active');
						$('#menu__channel').val('option_top_menu_07');
						trulyOperateSubMenu('top_menu_07');
				}
			}

			jQuery(document).ready(function($)
			{

				$div_responsive_vdo_preview = $('#div_responsive_vdo_preview');
				var initial_isotope = { //transitionDuration : '0.8s' ,
					itemSelector: '.youtubeblock',
					layoutMode : 'masonry' ,
					isInitLayout: false ,
					masonry: {
						/*columnWidth: 292,*/
						isFitWidth: true
					}
				};
				$div_responsive_vdo_preview.isotope(initial_isotope);
				$div_responsive_vdo_preview.isotope( 'once', 'layoutComplete', function()
				{
					setTimeout(function()
					{
						var htmlGET = getSearchParameters();
						if(htmlGET.hasOwnProperty('submenu'))
							if((typeof(htmlGET.submenu)=="string")?(htmlGET.submenu!==null):false)
							{
								//var filter_argument_set = {'all':'*','new':'.newcoming','trial':'.triallearning','tuefree':'.freetutor','answer':'.solutions','suggestion':'.recommended','interview':'.interviewing'}
								//initial_isotope.filter = filter_argument_set[htmlGET.submenu];
								activeSubMenu(htmlGET.submenu);
							}
					} , 1750);
				});
				$div_responsive_vdo_preview.isotope();

				$(window).bind('scroll', function() {
					var navHeight = $(window).height() - 450 ;
					if ($(window).scrollTop() > 450)
					{
						// $('nav2').addClass('fixed');
						$('bghide').addClass('bghide');
					}
					else
					{
						// $('nav2').removeClass('fixed');
						$('bghide').removeClass('bghide');
					}
				});
				//$(".sub__menu select").change(function(){
				//	//$('html, body').animate({scrollTop:$("#a_"+this.value).position().top},"slow");
				//	$('html, body').animate({scrollTop:$("#div_responsive_vdo_preview").position().top-48},"slow");
				//});

				//$('.sub__menu > ul').prepend('<li class=\"mobile\"><a href=\"#\"><span><i></i></span></a></li>');

				//$('.sub__menu > ul > li > a')
				$('li[id^=li_top_menu_]')
				.click(function(e)
				{
				  $('.sub__menu li').removeClass('active');
				  $(this).closest('li').addClass('active');	
				  var checkElement = $(this).next();
				  if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
					$(this).closest('li').removeClass('active');
					checkElement.slideUp('normal'); // หน้า VDO Channel ที่ม้อดทำ ไม่จำเป็นต้อง Slide หน้าจอ เมื่อ click ที่ Menu
				  }
				  if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
					$('.sub__menu ul ul:visible').slideUp('normal');
					checkElement.slideDown('normal'); // หน้า VDO Channel ที่ม้อดทำ ไม่จำเป็นต้อง Slide หน้าจอ เมื่อ click ที่ Menu
				  }
				  if( $(this).parent().hasClass('mobile') ) {
					e.preventDefault();
					$('.sub__menu').toggleClass('expand');
				  }


					// (เริ่ม) สลับบรรดา Thumbnails เมื่อ click บน Menu ด้วย "isotope" Widget
					var top_menu_id = e.target.id.substring(e.target.id.length-11,e.target.id.length);
					var value_string = "option_" + top_menu_id;
					$('#menu__channel').val(value_string);
					trulyOperateSubMenu(top_menu_id)
					// (จบ) สลับบรรดา Thumbnails เมื่อ click บน Menu ด้วย "isotope" Widget

					if($(this).closest('li').find('ul').children().length == 0) {
						return true;
					} else {
						return false;	
					}
				});
				$('#menu__channel').change(function()
				{
					$('.sub__menu li').removeClass('active');
					var menu__channel_option_selected = $("#menu__channel option:selected").val();
					$('#li_'+menu__channel_option_selected.substring(menu__channel_option_selected.length-11,menu__channel_option_selected.length)).addClass('active');	
					var top_menu_id = $("#menu__channel option:selected").val();
					top_menu_id = top_menu_id.substring(top_menu_id.length-11,top_menu_id.length);
					trulyOperateSubMenu(top_menu_id);
				});
			});

			if (typeof console === "undefined")
			{
				console = {
					log: function() { }
				};
			}

		//-->
		</script>

 </head>
<style>
  .box-channel {
    max-width: 1024px;
    margin-left: auto;
    margin-right: auto;
  }
</style>

<body>
<!--Begin Nav_nar-->
<?php include('nav_bar.php'); ?>
<!--End Nav_nar-->

<!--Begin Main YouTube Player-->
<!--div height="55" style="height:55px;">&nbsp;</div-->
<?php 
include('videoPlay.php');
?>
</br>
<!--End Main YouTube Player-->

<!--Begin Submenucourse-->
<bghide>
<div class="box_center">
<div class='sub__menu' id="cssmenu">
<ul>
	<li id="li_top_menu_01" class="active">
	<a id="a_option_top_menu_01"><span id="span_top_menu_01">ALL</span></a>
    </li>
	<li id="li_top_menu_02">
	<a id="a_option_top_menu_02"><span id="span_top_menu_02">เฉลยข้อสอบ</span></a>
	</li>
	<li id="li_top_menu_03">
	<a id="a_option_top_menu_03"><span id="span_top_menu_03">แนะนำ ideal</span></a>
	</li>
	<li id="li_top_menu_04">
    <a id="a_option_top_menu_04"><span id="span_top_menu_04">สัมภาษณ์</span></a>
	</li>
	<li id="li_top_menu_05">
    <a id="a_option_top_menu_05"><span id="span_top_menu_05">ทดลองเรียน</span></a>
	</li>
</ul>
        <select id="menu__channel">
            <option value="option_top_menu_01">ALL</option>
            <option value="option_top_menu_02">NEW</option>
            <option value="option_top_menu_03">TRIAL</option>
            <option value="option_top_menu_04">TUE FREE</option>
            <option value="option_top_menu_05">ANSWER</option>
            <option value="option_top_menu_06">SUGGESTION</option>
            <option value="option_top_menu_07">INTERVIEW</option>
        </select>
</div>
</div>
</bghide>
<!--End Submenucourse-->
<div class="box_channel">
<div id="div_responsive_vdo_preview" class="div_responsive_vdo_preview js-isotope"><!-- js-isotope data-isotope-options='{ "transitionDuration" : "0.8s" , "layoutMode" : "masonry" }' -->
<?php
	include("vdochannel/vdolist.php");
?>
</div>
</div>
<!--Begin Footer-->
<?php include('footer.php'); ?>
<!--End Footer-->


</body>
</html>
<?php $nav_menu = 4; ?>
<html>
<head>
<title>ideal physics - club</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!--<meta name="viewport" content="width=device-width minimum-scale=1, maximum-scale=4">	-->
<meta content="width=1024" name="viewport" content="width=device-width minimum-scale=1, maximum-scale=4">
    <link rel="shortcut icon" href="images/idealphysics2.png"/>
    <link href="css/nav_bar_styles.css" rel="stylesheet"/>
    <link href="css/font-style.css" rel="stylesheet"/>
    <link href="css/footer_styles.css" rel="stylesheet" />
    <link href="css/submenu.css" rel="stylesheet"/>
    <link href="css/club.css" rel="stylesheet"/>
    <link href="css/magnific-popup.css"/>
    <script src="js/jquery-1.11.0.js"></script>
    <!--script src="js/submenu.js"></script-->
    <script type='text/javascript' src="js/script.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    
    <script>

     $(function(){

        $("#tab_answer").click(function(){
        
            $('html, body').animate({scrollTop:$("#top_answer").position().top-150},"slow");
                $(this).addClass('active').siblings().removeClass('active');
        });
        $("#tab_formulas").click(function(){
           
            $('html, body').animate({scrollTop:$("#top_formulas").position().top-150},"slow");
                $(this).addClass('active').siblings().removeClass('active');
        });
        $("#tab_diagram").click(function(){
            
            $('html, body').animate({scrollTop:$("#top_treediagram").position().top-150},"slow");
                $(this).addClass('active').siblings().removeClass('active');
         });
        $("#tab_statistic").click(function(){

            $('html, body').animate({scrollTop:$("#statistic").position().top},"slow")});
        $("#tab_student").click(function(){

            $('html, body').animate({scrollTop:$("#students").position().top},"slow")});
     });


     $(document).ready(function(){
     $(window).bind('scroll', function() {
        var navHeight = $(window).height() - 350;
        if ($(window).scrollTop() > 350) {
           // $('nav2').addClass('fixed');
            $('bghide').addClass('bghide');
        }
        else {
         //   $('nav2').removeClass('fixed');
            $('bghide').removeClass('bghide');
        }
    });

        $(".sub__menu select").change(function(){
            $('html, body').animate({scrollTop:$("#"+this.value).position().top},"slow");
    });
});
function scroller(event){
                    var scrollYPos = $(event.data.id).offset().top;
                    event.preventDefault();
                    TweenLite.to(window, 2, {scrollTo:{y:scrollYPos, x:0}, ease:Power4.easeOut})
                }  
    $(document).ready(function () {
    $(document).on("scroll", onScroll);
    
});

function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('#sub__menu a').each(function () {
        var currLink = $(this);
        var refElement =$(currLink.attr("href"));
        if (refElement.position().top-150 <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('#sub__menu ul li').removeClass("active");
            currLink.parent().addClass("active");
            currValue=currLink.attr('href').substring(1) 
            $(".sub__menu select").val(currValue);//   = currValue;       
        }
        else{
            currLink.parent().removeClass("active");
        }
    });    
}
    



    //var max_scroll = 400; // this is the scroll position to start positioning the nav in a fixed way
    /*$(document).ready(function(){
        $(window).bind('scroll', function() {
            var navHeight = $(window).height() - 350;
            if ($(window).scrollTop() > 350) {
                $('bghide').addClass('bghide');
              //$('#answer').addClass('fix_header');
              //$('#answer_tab').addClass('fix_answer_tab')
            }
            else {
                $('bghide').removeClass('bghide');
              //$('#answer').removeClass('fix_header');
              //$('#answer_tab').removeClass('fix_answer_tab');
            }*/

            

            

           
            /*var scrollTop = $(window).scrollTop();
            var topAnswer = 640;//640;
            var resScreen = 0;
            if($(window).width() <= 640){
                resScreen = 100;
            }
            var topFormulas = $("#answer").height() + topAnswer-resScreen;
            var topDiagram = $("#formulas").height()+ topFormulas;
            var topStatistic = $("#treediagram").height() + topDiagram;*/
               // fix  answer header and tab
            //alert("scrollTop ==> "+scrollTop+ " ===  topAnswer =>"+ topAnswer+ "  ====== topFormulas => "+topFormulas);
            /*if(scrollTop > topAnswer && scrollTop < topFormulas){
                    //alert("fix answer");
                $('#top_answer').addClass('fix_header');
                $('#answer_tab').addClass('fix_answer_tab')
            }else{
                $('#top_answer').removeClass('fix_header');
                $('#answer_tab').removeClass('fix_answer_tab')
            }*/

            // fix formulas header
            /*if(scrollTop > topFormulas  && scrollTop < topDiagram){
                $('#top_formulas').addClass('fix_header');
            }else{
                $('#top_formulas').removeClass('fix_header');
            }
            
            // fix tree diagram header
            if(scrollTop > topDiagram && scrollTop < topStatistic){
                $('#top_treediagram').addClass('fix_header');
            }else{
                $("#top_treediagram").removeClass("fix_header");
            }*/

        //});
    // mobile screen sub menu to list
        //$(".sub__menu select").change(function(){
           //$('#top_answer').removeClass('fix_header');
           //$('#top_formulas').removeClass('fix_header'); 
           //$('#top_treediagram').removeClass('fix_header');
        //$('html, body').animate({scrollTop:$("#"+this.value).position().top-150},"slow");
           /*$('#top_'+this.value).addClass('fix_header');
            if(this.value === "answer"){
                      $('#answer_tab').addClass('active')
            }else{
                      $('#answer_tab').removeClass('active')
            }*/
        //});
    //});

    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }

    </script>
</head>
<?php 
$Score=100; // ตัวแปร PHP check index 
?>
<body>
<div>
    <!--Begin Nav_nar-->
    <?php include 'nav_bar.php';?>
</div>
<div class="club-news" id="news"><img src="images/club/cover-club.jpg" ></div>
<bghide>
<div class="box_center">   
    <div class="sub__menu" id="club_menu" >
        <ul>
            <li id="tab_answer"><a href="#answer">ANSWER</a></li>
            <li id="tab_formulas"><a href="#formulas">FORMULAS</a></li>
            <li id="tab_diagram"><a href="#treediagram">TREE DIAGRAM</a></li>
           <!-- <li id="tab_statistic"><a href="#statistic">STATISTIC</a></li>
            <li id="tab_student"><a href="#students">STUDENTS</a></li>-->
        </ul>

        <select>

            <option value="answer" >ANSWER</option>
            <option value="formulas">FORMULAS</option>
            <option value="treediagram">TREE DIAGRAM</option>
          <!--  <option value="statistic">STATISTIC</option>
            <option value="students">STUDENTS</option>-->
        </select>
    </div>
</div>
</bghide>
<div style="clear:both;"></div>
 <!--div style="margin-top:-100px;"></div-->
<div class="box_centerII">
    <div class="club-headerII" id='answer'>
        <div id="top_answer">
            <div class="club-tab"></div>
                <div class="club-headname">ANSWER</div>
        </div>
        <?php include 'answer.php'; ?>
    </div>
</div>
<!-- formulas -->
 <div style="clear:both;"></div>
 <div class="box_centerII">
    <div class="club-header" id='formulas' >
        <div id="top_formulas">
            <div class="club-tab"></div>
                <div class="club-headname">FORMULAS</div>
        </div>
        <?php include 'formulas_edit.php';?>
    </div>
</div>
<!-- tree diagram -->
 <div style="clear:both;"></div>
 <div class="box_centerII">
    <div class="club-header-for" id='treediagram' >
        <div id="top_treediagram">
            <div class="club-tab"></div>
                <div class="club-headname">TREE DIAGRAM</div>  
        </div>
        <?php include 'treediagram.php';?>
    </div>
</div>
 <!-- statistic -->
 <!--<div class="club-header" id='statistic' >
     <div class="club-tab"></div>
     <div class="club-headname">STATISTIC</div>
     
   <?php //include 'club_answer.php';?>

 </div>
 <br>-->
<!-- student --><!--
 <div class="club-header" id='students'>
     <div class="club-tab"></div>
     <div class="club-headname">STUDENTS</div>
     
   <?php //include 'club_answer.php';?>

 </div>

-->
<?php include 'footer.php'?>
 </body>
</html>

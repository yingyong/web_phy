<!--script  type='text/javascript' src="js/submenu.js"></script-->
<link rel="stylesheet" href="css/submenu.css">
<script>
$(function(){
    $("#tabPhysicslogo").click(function(){
        $('html, body').animate({
            scrollTop:$("#player-video").position().top-150},"slow")
    });
    $("#tab_basic").click(function(){
        $('html, body').animate({
            scrollTop:$("#physicsBPlink").position().top-150},"slow")
    });
    $("#tab_entrance").click(function(){
        $('html, body').animate({
            scrollTop:$("#physicsEPlink").position().top-150},"slow")
    });
    $("#tab_advance").click(function(){
        $('html, body').animate({
            scrollTop:$("#physicsAPlink").position().top-150},"slow")
    });
    $("#tab_engineer").click(function(){
        $('html, body').animate({
            scrollTop:$("#physicsEGlink").position().top-150},"slow")
    });
    $("#tab_quota").click(function(){
        $('html, body').animate({
            scrollTop:$("#physicsQPlink").position().top-150},"slow")
    });
});
    

$(document).ready(function(){
    $(window).bind('scroll', function() {
        var navHeight = $(window).height() - 450;
        if ($(window).scrollTop() > 450) {
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
  </script>
    </head>
    <body>

    <bghide>
    <div class="box_center">
    <div class="sub__menu" id="sub__menu">
    <ul>
        <li class="active" id='tabPhysicslogo'><a href="#player-video"><img src="images/Course/video_logo.png" width="25" height="20"></a></li>
        <li id='tab_basic'><a href="#physicsBPlink">BASIC</a></li>
        <li id='tab_entrance'><a href="#physicsEPlink">ENTRANCE</a></li>
        <li id="tab_advance"><a href="#physicsAPlink" >ADVANCE</a></li>
        <li id="tab_engineer"><a href="#physicsEGlink" >ENGINEERING</a></li>
        <li id="tab_quota"><a href="#physicsQPlink">QUOTA</a></li>
    </ul>
    
    <select>
        <option value="PhysicsBP">BASIC</option>
        <option value="PhysicsEP">ENTRANCE</option>
        <option value="PhysicsAP">ADVANCE</option>
        <option value="PhysicsEG">ENGINEERING</option>
        <option value="PhysicsQP">QUOTA</option>
    </select>
</div>
    </div>
    </bghide>


    </body>
</html>

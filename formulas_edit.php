<link rel="stylesheet" href="css/magnific-popup.css"> 
<link rel="stylesheet" type="text/css" href="css/formulas.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<div class="formulas">
		<div class="head">
			<div class="text_mechanics"></div>
				<div class="measurement">
					<a href="#formulas_detail" class="formulas_item">Measurement</a>
				</div>
				<div class="momentum">
					<a href="#formulas_detail" class="formulas_item">Momentum</a>
				</div>
				<div class="linearmotion">
					<a href="#formulas_detail" class="formulas_item">Linear Motion</a>
				</div>
				<div class="projectile">
					<a href="#formulas_detail" class="formulas_item">Projectile</a>
				</div>
				<div class="force">
					<a href="#formulas_detail" class="formulas_item">Newton Law's of Motion</a>
				</div>
				<div class="circular">
					<a href="#formulas_detail" class="formulas_item">Circular Motion</a>
				</div>
				<div class="equilibrium">
					<a href="#formulas_detail" class="formulas_item">Equilibrium</a>
				</div>
				<div class="simple">
					<a href="#formulas_detail" class="formulas_item">Simple Harmonic</a>
				</div>
				<div class="work">
					<a href="#formulas_detail" class="formulas_item">Work and Energy</a>
				</div>
				<div class="rotation">
					<a href="#formulas_detail" class="formulas_item">Rotation</a>
				</div>
		</div>
		<div class="head2">
			<div class="text_wave"></div>
				<div class="wave">
					<a href="#formulas_detail" class="formulas_item">Wave</a>
				</div>
				<div class="sound">
					<a href="#formulas_detail" class="formulas_item">Sound</a>
				</div>
				<div class="light">
					<a href="#formulas_detail" class="formulas_item">Light</a>
				</div>
		</div>
		<div class="head2">
			<div class="text_properties"></div>
				<div class="heat">
					<a href="#formulas_detail" class="formulas_item">Heat</a>
				</div>
				<div class="gas">
					<a href="#formulas_detail" class="formulas_item">Gas</a>
				</div>
				<div class="liquid">
					<a href="#formulas_detail" class="formulas_item">Liquid</a>
				</div>
				<div class="solid">
					<a href="#formulas_detail" class="formulas_item">Solid</a>
				</div>
		</div>
		<div class="head2">
			<div class="text_electricity"></div>
				<div class="electrotatic">
					<a href="#formulas_detail" class="formulas_item">Electrostatic</a>
				</div>
				<div class="direct">
					<a href="#formulas_detail" class="formulas_item">Direct Current</a>
				</div>
				<div class="alternating">
					<a href="#formulas_detail" class="formulas_item">Alternating Current</a>
				</div>
				<div class="electromagnetic">
					<a href="#formulas_detail" class="formulas_item">Electromagnetic</a>
				</div>
		</div>
		<div class="head2">
			<div class="text_atomic"></div>
				<div class="atom">
					<a href="#formulas_detail" class="formulas_item">Atom</a>
				</div>
				<div class="nuclear">
					<a href="#formulas_detail" class="formulas_item">Nuclear</a>
				</div>
		</div>
	</div>

	<div class="formulas_detail" id="formulas_detail" >
  <!--  <div><div class="formulas_detail_name"></div><div></div><img src="images/club/(]org.png" style="float:right; height:50px"></div>-->
    <!-- <div  style="position:relative">
        <a href="answer/AboutPhysics_1.pdf" target="_pop">
            <div style="width:340px;height:50px;top:50;right:0;position:absolute"></div>
        </a>
        <img src="images/club/answer/club.png" style="width:100%"></div>
    <div><img src="images/club/answer/cluba.png" style="width:100%"></div>
    -->
</div>

	<script>
    var formulasPath = "images/club/formulas_new/";
       $(document).ready(function() {
        //   $('.formulas_list a').click(function(){
             
//});
/*
$('.formulas_item').magnificPopup({
  type:'inline',
  midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
});*/

        var groups = {};
       $('.formulas_item').each(function() {
    //     var id = parseInt($(this).attr('data-index'), 10);
        var id= this.innerHTML;
         if(!groups[id]) {
           groups[id] = [];
         } 


         groups[id].push( this );
       });


       $.each(groups, function() {

         $(this).magnificPopup({
             type: 'inline',
             closeOnContentClick: true,
             closeBtnInside: false,
            // gallery: { enabled:true }
         })

       });
       $(".formulas_item").click(function(){
           //alert($(this).attr('data-index'));
          // showAnswer($(this).attr('data-index'));
            $(".formulas_detail").empty();
               var formulasimg =this.innerHTML.replace(/ /g,'');            
                tagHTML = '<div  style="position:relative">'+
                                    '<a href="'+formulasPath+'AboutPhysics_1.pdf" target="_pop">'+
                                    '<div style="width:340px;height:50px;top:75px;right:0;position:absolute"></div>'+
                                    '</a>'+
                                    '<img src="'+formulasPath+formulasimg+'.png" style="width:100%"></div>';      
              $(".formulas_detail").prepend(tagHTML);
       });
    });
</script>
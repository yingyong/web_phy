 <link rel="stylesheet" href="css/magnific-popup.css"> 
   <div class="formulas">
        <div>
            <div class="formulas_line line_1">&nbsp;</div>
            <div class="formulas_line line_2">&nbsp;</div>
            <div class="formulas_line line_3">&nbsp;</div></div>
        <div class="formulas_list"><a href="#formulas_detail"  class="formulas_item">Measurement</a><div class="default_symbol">&#187;</div></div>
        <div class="formulas_list"><a href="#formulas_detail"  class="formulas_item">General Plane Motion</a><div class="default_symbol">&#187;</div></div>
        <div class="formulas_list"><a href="#formulas_detail"  class="formulas_item">Electrostatic</a><div class="default_symbol">&#187;</div></div>
        <div class="formulas_list"><a href="#formulas_detail"  class="formulas_item">Linear Motion</a><div class="default_symbol">&#187;</div></div>
        <div class="formulas_list"><a href="#formulas_detail"  class="formulas_item">Heat and Gas</a><div class="default_symbol">&#187;</div></div> 
        <div class="formulas_list"><a href="#formulas_detail"  class="formulas_item">Direct Current</a><div class="default_symbol">&#187;</div></div>
        <div class="formulas_list"><a href="#formulas_detail"  class="formulas_item">Force and Law of Motion</a><div class="default_symbol">&#187;</div></div>
        <div class="formulas_list"><a href="#formulas_detail"  class="formulas_item">Properties of Matter</a><div class="default_symbol">&#187;</div></div>
        <div class="formulas_list"><a href="#formulas_detail"  class="formulas_item">Electromagnetic</a><div class="default_symbol">&#187;</div></div>
        <div class="formulas_list"><a href="#formulas_detail"  class="formulas_item">Equilibrium</a><div class="default_symbol">&#187;</div></div> 
        <div class="formulas_list"><a href="#formulas_detail"  class="formulas_item">Wave</a><div class="default_symbol">&#187;</div></div>
        <div class="formulas_list"><a href="#formulas_detail"  class="formulas_item">Alternating Current</a><div class="default_symbol">&#187;</div></div>  
        <div class="formulas_list"><a href="#formulas_detail"  class="formulas_item">Work and Energy</a><div class="default_symbol">&#187;</div></div>
        <div class="formulas_list"><a href="#formulas_detail"  class="formulas_item">Sound</a><div class="default_symbol">&#187;</div></div>
        <div class="formulas_list"><a href="#formulas_detail"  class="formulas_item">Electron and Atom</a><div class="default_symbol">&#187</div></div>
        <div class="formulas_list last_line_1"><a href="#formulas_detail"  class="formulas_item">Momentum</a><div class="default_symbol">&#187;</div></div> 
        <div class="formulas_list last_line_2"><a href="#formulas_detail"  class="formulas_item">Light</a><div class="default_symbol">&#187;</div></div>
        <div class="formulas_list last_line_3"><a href="#formulas_detail"  class="formulas_item">Nuclear</a><div class="default_symbol">&#187;</div></div> 
         <div>
             <div class="formulas_line line_1"></div>
             <div class="formulas_line line_2"></div>
             <div class="formulas_line line_3"></div>

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
    var formulasPath = "images/club/formulas/";
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
                                    '<img src="'+formulasPath+formulasimg+'.jpg" style="width:100%"></div>';      
              $(".formulas_detail").prepend(tagHTML);
       });
    });
</script>



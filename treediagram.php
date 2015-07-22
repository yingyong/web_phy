<div class="diagram">
    <div><div class="diagram_line line_1">&nbsp;</div><div class="diagram_line line_2">&nbsp;</div><div  class="diagram_line line_3">&nbsp;</div></div>
    <div class="diagram_list"><a href="#diagram_detail"  class="diagram_item">Introduction</a><div class="default_symbol">&#187;</div></div>
    <div class="diagram_list"><a href="#diagram_detail"  class="diagram_item">SHM</a><div class="default_symbol">&#187;</div></div>
    <div class="diagram_list"><a href="#diagram_detail"  class="diagram_item">Wave</a><div class="default_symbol">&#187;</div></div>
    <div class="diagram_list"><a href="#diagram_detail"  class="diagram_item">Linear Motion</a><div class="default_symbol">&#187;</div></div>
    <div class="diagram_list"><a href="#diagram_detail"  class="diagram_item">Rotation Motion</a><div class="default_symbol">&#187;</div></div> 
    <div class="diagram_list"><a href="#diagram_detail"  class="diagram_item">Sound</a><div class="default_symbol">&#187;</div></div>
    <div class="diagram_list"><a href="#diagram_detail"  class="diagram_item">Newton's Law of Motion</a><div class="default_symbol">&#187;</div></div>
    <div class="diagram_list"><a href="#diagram_detail"  class="diagram_item">Electrostatic</a><div class="default_symbol">&#187;</div></div>
    <div class="diagram_list"><a href="#diagram_detail"  class="diagram_item">Light</a><div class="default_symbol">&#187;</div></div>
    <div class="diagram_list"><a href="#diagram_detail"  class="diagram_item">Equilibrium</a><div class="default_symbol">&#187;</div></div> 
    <div class="diagram_list"><a href="#diagram_detail"  class="diagram_item">Direct Current</a><div class="default_symbol">&#187;</div></div>
    <div class="diagram_list"><a href="#diagram_detail"  class="diagram_item">Heat</a><div class="default_symbol">&#187;</div></div>
    <div class="diagram_list"><a href="#diagram_detail"  class="diagram_item">Work and Energy</a><div class="default_symbol">&#187;</div></div>
    <div class="diagram_list"><a href="#diagram_detail"  class="diagram_item">Electromagnetic</a><div class="default_symbol">&#187;</div></div>
    <div class="diagram_list"><a href="#diagram_detail"  class="diagram_item">Gas</a><div class="default_symbol">&#187;</div></div>
    <div class="diagram_list"><a href="#diagram_detail"  class="diagram_item">Momentum</a><div class="default_symbol">&#187;</div></div>
    <div class="diagram_list"><a href="#diagram_detail"  class="diagram_item">Alternating Current</a><div class="default_symbol">&#187;</div></div>  
    <div class="diagram_list"><a href="#diagram_detail"  class="diagram_item">Liquid</a><div class="default_symbol">&#187;</div></div>
    <div class="diagram_list"><a href="#diagram_detail"  class="diagram_item">Projectile Motion</a><div class="default_symbol">&#187;</div></div>
    <div class="diagram_list"><a href="#diagram_detail"  class="diagram_item">Atom</a><div class="default_symbol">&#187;</div></div>
    <div class="diagram_list" ><a href="#diagram_detail"  class="diagram_item">Solid</a><div class="default_symbol">&#187;</div></div> 
    <div class="diagram_list last_line_1" ><a href="#diagram_detail"  class="diagram_item">Circular Motion</a><div class="default_symbol">&#187;</div></div>
    <div class="diagram_list last_line_2" ><a href="#diagram_detail"  class="diagram_item">Nuclear</a><div class="default_symbol">&#187;</div></div> 
    <div class="diagram_list last_line_3 line_blank" >&nbsp;<div class="default_symbol">&#187;</div></div>
     <div style='width:100%'>
         <div class="diagram_line line_1"></div>
         <div class="diagram_line line_2"></div>
         <div class="diagram_line line_3"></div>
             
     </div>    
    </div>
<div class="diagram_detail" id="diagram_detail">
  <!--  <div><div class="diagram_detail_name"></div><div></div><img src="images/club/(]org.png" style="float:right; height:50px"></div>-->
</div>
<script>
    
    var diagramPath = "images/club/diagram/";
       $(document).ready(function() {
           
       var groups = {};
       $('.diagram_item').each(function() {
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
       
           $('.diagram_item').click(function(){
                       $(".diagram_detail").empty();
               var diagramimg =this.innerHTML.replace(/ /g,'');            
                tagHTML = '<div  style="position:relative">'+
                                    '<a href="'+diagramPath+diagramimg+'.pdf" target="_pop">'+
                                    '<div style="width:340px;height:50px;top:75px;right:0;position:absolute"></div>'+
                                    '</a>'+
                                    '<img src="'+diagramPath+diagramimg+'.png" style="width:100%"></div>';      
              $(".diagram_detail").prepend(tagHTML);

})
       });
</script>



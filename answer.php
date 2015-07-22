<link rel="stylesheet" type="text/css" href="css/answer.css " />
<!-- category tab-->
<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
<script src="js/easyResponsiveTabs.js"></script>
<link rel="stylesheet" href="css/magnific-popup.css"> 
<?php    
include "connectDB.php";
$sqlCat = "select * from category where category_class =1";
$sql = "select * from books ";
$result = mysql_query($sql);
$resultCat = mysql_query($sqlCat);

$booksPath = "images/books/Physics/";
$books = array();
?>

        <div id="courseType" >
            <div id="answer_tab">
            <ul class="resp-tabs-list hor_1">
              <li class="bp">Basic</li>
              <li class="ep">Entrance</li>
              <li class="ap">Advance</li>
              <li class="eg">Engineering</li>
              <li class="qp">Quota</li>
            </ul>
            <div  id="tab_line" class="tab-line"></div>
        </div>
        <div class="resp-tabs-container hor_1">   
<?php 
    if (mysql_num_rows($result) > 0) :
        while($rowCat = mysql_fetch_array($resultCat)) :
            $catShortName = $rowCat["category_short_name"];
?>
            <div class="answer_view">
                  <!--   <fieldset>
           <legend id="catagory"><?php //echo $rowCat["category_name"] ?></legend>    -->
                    <ul class="wrapper">
                    <?php 
                        mysql_data_seek ($result, 0);
                        while($row =mysql_fetch_array($result)) :
                            if($rowCat["category_id"]  == $row['category_books']) :
                                 $bookName = explode(",",$row["book_name_en"]);
                                 $books[$row["book_id"]] =$row["book_answer"];

                   ?> 
                      <?

                      if($row['book_id'] <= 10) {

                      ?>
                        <li  class="dvBook">
                            <a href="#course_answer"  class="courseItem" data-index="<?php echo $row["book_id"];?>">
                                <img src="<?php echo $booksPath.$catShortName."/".$row["book_image"] ?>"  class="img_book" >
                                <div class="book_description <?="_".$catShortName; ?>" >
                                    <?php for($b=0; $b< count($bookName) ; $b++) : ?>
                                    <div class="book_name"  >&#8226; <?php echo $bookName[$b]; ?></div>
                                    <?php endfor; ?>    
                                </div>
                            </a>
                        </li>
                        <?

                        if($row['book_id'] == 10) {

                        ?>

                        <div class="dvBookII"></div>

                        <?

                        }

                        

                      } elseif($row['book_id'] <= 13) {

                      ?>
                        <li  class="dvBook">
                            <a href="#course_answer"  class="courseItem" data-index="<?php echo $row["book_id"];?>">
                                <img src="<?php echo $booksPath.$catShortName."/".$row["book_image"] ?>"  class="img_book" >
                                <div class="book_description <?="_".$catShortName; ?>" >
                                    <?php for($b=0; $b< count($bookName) ; $b++) : ?>
                                    <div class="book_name"  >&#8226; <?php echo $bookName[$b]; ?></div>
                                    <?php endfor; ?>    
                                </div>
                            </a>
                        </li>
                      <?

                        if($row['book_id'] == 13) {

                        ?>

                        <div class="dvBookII"></div>

                        <?

                        }

                        }elseif($row['book_id'] <= 17) {

                      ?>
                        <li  class="dvBook">
                            <a href="#course_answer"  class="courseItem" data-index="<?php echo $row["book_id"];?>">
                                <img src="<?php echo $booksPath.$catShortName."/".$row["book_image"] ?>"  class="img_book" >
                                <div class="book_description <?="_".$catShortName; ?>" >
                                    <?php for($b=0; $b< count($bookName) ; $b++) : ?>
                                    <div class="book_name"  >&#8226; <?php echo $bookName[$b]; ?></div>
                                    <?php endfor; ?>    
                                </div>
                            </a>
                        </li>
                      <?
                      
                        if($row['book_id'] == 17) {

                        ?>

                        <div class="dvBookII"></div>

                        <?

                        }

                        }elseif($row['book_id'] <= 19) {

                      ?>    
                        <li  class="dvBook">
                            <a href="#course_answer"  class="courseItem" data-index="<?php echo $row["book_id"];?>">
                                <img src="<?php echo $booksPath.$catShortName."/".$row["book_image"] ?>"  class="img_book" >
                                <div class="book_description <?="_".$catShortName; ?>" >
                                    <?php for($b=0; $b< count($bookName) ; $b++) : ?>
                                    <div class="book_name"  >&#8226; <?php echo $bookName[$b]; ?></div>
                                    <?php endfor; ?>    
                                </div>
                            </a>
                        </li>
                      <?
                      
                        if($row['book_id'] == 19) {

                        ?>

                        <div class="dvBookII"></div>

                        <?

                        }

                        }elseif($row['book_id'] <= 21) {

                      ?>
                        <li  class="dvBook">
                            <a href="#course_answer"  class="courseItem" data-index="<?php echo $row["book_id"];?>">
                                <img src="<?php echo $booksPath.$catShortName."/".$row["book_image"] ?>"  class="img_book" >
                                <div class="book_description <?="_".$catShortName; ?>" >
                                    <?php for($b=0; $b< count($bookName) ; $b++) : ?>
                                    <div class="book_name"  >&#8226; <?php echo $bookName[$b]; ?></div>
                                    <?php endfor; ?>    
                                </div>
                            </a>
                        </li>
                      <?
                      
                        if($row['book_id'] == 21) {

                        ?>

                        <div class="dvBookII"></div>

                        <?

                        }

                        }elseif($row['book_id'] >= 22) {

                      ?>
                        <li  class="dvBook">
                            <a href="#course_answer"  class="courseItem" data-index="<?php echo $row["book_id"];?>">
                                <img src="<?php echo $booksPath.$catShortName."/".$row["book_image"] ?>"  class="img_book" >
                                <div class="book_description <?="_".$catShortName; ?>" >
                                    <?php for($b=0; $b< count($bookName) ; $b++) : ?>
                                    <div class="book_name"  >&#8226; <?php echo $bookName[$b]; ?></div>
                                    <?php endfor; ?>    
                                </div>
                            </a>
                        </li>
                      <?

                      }

                      ?>

                        <!--</div>-->
                    <?php 
                            endif;
                        endwhile;
                    ?>
                    </ul>
             <!-- </fieldset>-->
            </div> 
            <?php endwhile; ?>
        </div>
        </div>

    <?php
    else :
        echo "0 results";
    endif;

include "closeConn.php";

?>
<div class="course__answer-detail" id="course_answer" ></div>

<script type="text/javascript">
$(document).ready(function(){
     // Example 1: From an element in DOM
   var groups = {};
$('.courseItem').each(function() {
  var id = parseInt($(this).attr('data-index'), 10);

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
$(".courseItem").click(function(){
    showAnswer($(this).attr('data-index'));
});

           //Horizontal Tab
    $('#courseType').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion
        width: 'auto', //auto or any width like 600px
        fit: true, // 100% fit in a container
        tabidentify: 'hor_1', // The tab groups identifier
        activate: function(event) { // Callback function if tab is switched
            var $tab = $(this);
            var $info = $('#nested-tabInfo');
            var $name = $('span', $info);
            $name.text($tab.text());
            $info.show();
            $('html, body').animate({scrollTop:$("#answer").position().top},"slow");
        }
    });
        
         
    $('.resp-tabs-list li').on('click', function(e) {
        var activeClass = $(this).attr('class');
        var useClass = activeClass.split(" ");
        $(".tab-line").removeClass().addClass("tab-line "+useClass[0]);
    });
});
    
function showAnswer(courseCode){
    var answer = <?php echo json_encode($books);?>; 
    var tagHTML =""; 
    $("#course_answer").empty();
    if(!!answer[courseCode]){
        var answerList = answer[courseCode].split("|");   
        var answerPath = "images/club/answer/";
        var answerPath_pdf = "images/club/answer_pdf/";

      
        for(var i=0; i<answerList.length ;i++){
            filename = answerList[i].substr(1 , answerList[i].length-5);
            tagHTML += '<div  class="dv_answer">'+
                                    '<a href="'+answerPath_pdf+answerList[i]+'.pdf" download>'+
                                        '<div  class="pdf_download" ></div>'+
                                    '</a>'+
                                    '<img src="'+answerPath+answerList[i]+'.png">'+
                              '</div>';      
         }
        
    }else{
        tagHTML ='<div class="notify_msg">อยู่ระหว่างจัดทำข้อมูล !!</div>';
    }
    $("#course_answer").prepend(tagHTML);
 }

</script>

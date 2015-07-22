<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);
    $sql = mysql_query("SELECT COUNT(*) FROM courses");
    $res = mysql_fetch_array($sql);

    $records = $res[0];
?>

<!-- Include Thumbelina script. -->
        <link rel="stylesheet" type="text/css" href="css/thumbelina.css" />
        <script type="text/javascript" src="js/thumbelina.js"></script>


<!--Script Click Even POPUP-->
<script type="text/javascript">
$(function(){
  $(".show_box").click(function(){
    $("#overlay").fadeToggle("",function(){ // แสดงส่วนของ overlay
      $(".msg_show").fadeToggle("",function(){ // แสดงส่วนของ เนื้อหา popup
        if($(this).css("display")=="block"){    // ถ้าเป็นกรณีแสดงข้อมูล 
        //  หากต้องการดึงข้อมูลมาแสดง แบบ ajax
        //  สามารถดัดแปลงจากโค้ดนี้ได้    
        //  $(".msg_data").load("data.php");  
        //    หรือ
        //  $.post("data.php",{},function(data){
        //    $(".msg_data").html(data);
        //  });
        }
      });
    });
  });
});
</script>


<!-- Create sliders. -->
         <script type="text/javascript">
         
          $(document).ready(function(){

            var i;
            var y=<?=$records?>;

              for (i = 1; i <= y; i++) {
                   $('#slider'+i).Thumbelina({
                      $bwdBut:$("#slider" + i +" .left"),    // Selector to left button.
                      $fwdBut:$("#slider" + i +" .right")    // Selector to right button.
                     
                });//end .Thumbelina

              }//end for loop
              
            });//end function
        </script>

<?php 
      $sql = "SELECT * FROM  category WHERE  category_class = 1";
      $query = mysql_query($sql);
      $course_infos=array();

      while ($rows = mysql_fetch_array($query)) 
      {
          $category_name = $rows['category_name'];
          $category_id = $rows['category_id'];
          $category_short_name = $rows['category_short_name'];
?>
<div id="physics<?=$category_short_name;?>link">

<div id="Physics<?=$category_short_name;?>" class="<?=$category_short_name;?>">

<ul>   
      <?php
      if($category_short_name == 'BP') {
      ?>
       <p  class="basic"><a class="basic">กลศาสตร์ </a></p>
       <p1 class="basic"><a class="basic">คลื่น   </a></p1>
       <p2 class="basic"><a class="basic">ไฟฟ้า   </a></p2>
       <p3 class="basic"><a class="basic">สสาร     </a></p3>
       <p4 class="basic"><a class="basic">อะตอม    </a></p4>
       <div class="bgbasic">
            <a class="textbgbasic"> กลุ่ม</a>
      </div> 
       <?php
          }else {
       ?>
       <div class="bgbasic">
            <a class="textbgbasic"></a>
      </div>
      <?
        }
      ?>
       <div class="headbasic">
            <a class="textheadbasic"><?=$category_name;?></a>
      </div>

<?php

                $sql2 = "SELECT * FROM courses ";
                $query2 = mysql_query($sql2);

                while ($rows2 = mysql_fetch_array($query2)){

				           $category_id_course = $rows2['category_id'];
                   $course_id   = $rows2['course_id'];
                   $course_code = $rows2['course_code'];
                   $course_name =  $rows2['course_name'];
                   $bg_color    = $rows2['bg_color'];
                   $course_img_boxset = $rows2['course_img_boxset'];
                   $course_img_books = $rows2['course_img_books'];
                   $course_img_note = $rows2['course_img_note'];
                   $course_img_formula = $rows2['course_img_formula'];


                 
                  $pathimages = "images/books/Physics/";
                  $pathnote = "images/books/Physics/Note/";
                  $pathformular = "images/books/Physics/formular/";
                 

                  //----------path+image---------
                  //  $boxset = $pathimages.$category_short_name.'/'.$course_img_boxset;
                  
                  //  $book   = $pathimages.$category_short_name./'.$course_img_books;
                  //   echo $book;
                  $note   = $pathnote.$course_img_note;
                  //----------loop book by "|"---
                  $array_book =(explode("|",$course_img_books));
                  $array_note =(explode("|",$course_img_note));
                  $array_formular = (explode("|",$course_img_formula));
                  $Normal = (count($array_book));
                  //echo "มีหนังสือจำนวน".$Normal;

                
               
                  $course_infos[$course_id] = $rows2;
?>
<?php
if($category_id_course == $category_id) {
?>
<?
    if($bg_color == "" ) {
?>
    <li class="set">
<?
  } else if ($bg_color == 1) {
?>
    <li class="setI">
<?
  } else if ($bg_color == 2) {
?>
    <li class="setII">
<?
  } else if ($bg_color == 3) {
?>
    <li class="setIII">
<?
  }
?>
       <div class="bgnumberbasic">
            <a class="textnumberbasic">
            <?php 
                if($category_id_course == 1 ) {
                    echo $rows2['course_id'];
                }
            ?>
            </a>
      
      </div>
      
       <div class="bgcodebasic">  
            <a class="textcodebasic">  รหัส : <?=$rows2['course_code']?></a>
      </div>

       <div class="subjectbasic">
            เรื่องที่เรียน : <?=$rows2['course_name']?>
      </div>

       <div class="timebasic">
            เวลาของเนื้อหา : <?=$rows2['course_content']?> ชั่วโมง
       </div>

       <div class="timeexpirebasic">
            ระยะเวลาหมดอายุ : <?=$rows2['course_day']?> วัน
       </div>

       <div class="claimbasic">
            สิทธิเข้าเรียน : <?=$rows2['course_booking']?> ช่อง
       </div>

       <div class="cancelbasic">
            สิทธิยกเลิก : <?=$rows2['course_cancel']?> ช่อง
       </div>

       <div class="linebasic">
            <img src="images/footer/LineSmallFooter.png" width="2" height="80">
       </div>
       <div class="bookbasic">
       <div id="slider<?=$rows2['course_id']?>" class="sliderbox">
           <?php
            if ($Normal >= 2){
            echo "<div class=\"thumbelina-but horiz left\" >&#706;</div>";
            } 
            ?>
            <ul>
                <?php if(!empty($course_img_boxset)) { ?>
                <li>
               
                  <img src="<?php echo $pathimages.$category_short_name.'/'.$course_img_boxset ?>" width=80 height=80>
                
                <?php 
                  }
                  foreach ($array_book as $value) 
                  {
                ?>
                <li>
                  <img src="<?php echo $pathimages.$category_short_name.'/'.$value ?>" width=80 height=80>
                </li> 
               <?php 
                  }
                  foreach ($array_note as $value) 
                  {
                ?>
                <li>
                  <img src="<?php echo $pathnote.$value?>" width=80 height=80>
                <?php 
                  }
                  if(!empty($course_img_formula)){
                    if($course_img_formula == 'Formular.png') {
                      foreach ($array_formular as $value) 
                      {
                      ?>
                      <li>
                        <img src="<?php echo $pathformular.$value?>" width=40 height=80>
                      <?
                      }//loop foreach

                    }else if($course_img_formula == 'FormulasPoster.png'){
                       foreach ($array_formular as $value) 
                      {
                      ?>
                      <li>
                        <img src="<?php echo $pathformular.$value?>" width=100 height=80>
                      <?
                      }//loop foreach

                    }else{
                      foreach ($array_formular as $value) 
                      {
                      ?>
                      <li>
                        <img class="bookitem" src="<?php echo $pathformular.$value?>" width=60 height=60>
                <?
                      }
                    }
                  }//if empty
                ?>
                </li>
            </ul>
            <?php
            if ($Normal >= 2){
            echo "<div class=\"thumbelina-but horiz right\">&#707;</div>";
            } 
            ?>
        </div>
       </div>
       <div class="pricebasic" OnChange="JavaScript:numberWithCommas(x)">
              ราคา : 
       <?php
              $inum = $rows2['course_price'];
              echo number_format( $inum );
              ?>
              บาท
       </div> 
       <div class="btnbasic">
            <a href="" class="show_box course_info basic" data-courseid="<?php echo $course_id; ?>">ลงทะเบียน</a>
       </div>
    </li>
    <?php
          }//end if
       }//loop course
    ?> 
      </ul>
</div>
<?php }//loop category?>  
 

             
<!--POP UP Detail-->
<div class="msg_show">
<a class="show_box show_box_img" href="javascript:void(0);"></a>
<div id="msg_data" >
<!--เนื้อหาใน popup message-->
  <div class="title"></div>
    
    <div class="img_book_box">
    
    <div id="msg_course_img_books" ></div>

    </div>
    <div class="popuplineunder"></div>
    
<form class="form-horizontal" method="post" action="pdf/course.php" target="_blank" onsubmit="return re()">

  <div class="headtextname">ชื่อ</div>
    <div class="textname">

      <div class="form-group form-group-sm">
        <div class="col-sm-10">
            <input class="form-control" type="text" id="txtname" placeholder="" name="name">
        </div>
      </div>
    </div>
  
  
  <div class="headtextlastname">นามสกุล</div>
    <div class="textlastname">
   
    <div class="form-group form-group-sm">
    <div class="col-sm-10">
      <input class="form-control" type="text" id="txtlastname" placeholder="" name="lastname">
    </div>
    </div>
    </div>
  
  
  <div class="headtexttell">เบอร์โทรศัพท์</div>
    <div class="texttell">

    <div class="form-group form-group-sm">
    <div class="col-sm-10">
      <input class="form-control" type="text" id="txttel" placeholder="" name="tel" maxlength="10">
      <!--<input class="form-control" type="text" id="msg_course_code formGroupInputSmall" placeholder="" name="code" value="">-->  
    </div>
    </div>
    </div>

    <div class="headtextcode"></div>
    <div class="textcode">
      <div id="msg_course_code_pdf"></div>
    </div>
  
  <input  type="submit" class="confirm" value="" />

  <script>
    //function closepopup(){
      //alert('Close');
     //location.reload();
    //}
  </script>
  
  
</form>

  
 <!-- <div class="confirm"><a href="#">ตกลง<a></div>-->
  
                  </div>
            </div> 
      </div>
</div>

<div id="overlay"></div>
<script type="text/javascript">
  function re(code)
{
  var name = $('#txtname').val();
  var sname = $('#txtlastname').val();
  var tel = $('#txttel').val();
  var data = {name:name, sname:sname, tel:tel};
  var strmsg = "กรุณากรอก ";
      if (data.name == '' || data.sname == '' || data.tel == ''){
        if(data.name == "" ){
          strmsg += "ชื่อ ";
        }
        if(data.sname == ""){
          strmsg += "นามสกุล ";
        }
        if(data.tel == ""){
          strmsg += "เบอร์โทรศัพท์ ";
        }
        alert(strmsg);
        return false;
      } else if(  tel.length <= 9 || tel.length > 10 ){
        alert("เบอร์โทรศัพท์ไม่ถูกต้องกรุณาตรวจสอบอีกครั้ง");
        return false;
      } else if(isNaN(tel)){
        alert('กรุณาใส่เฉพราะตัวเลข');
        return false;
      } 
}
</script>


<script>
// set ตัวแปร java script 
  var course_infos = <?php echo json_encode($course_infos); ?>;
  
  $(document).ready(function(){
    $('.course_info').click(function(){

      var course_id = $(this).data('courseid');
      var course = course_infos[course_id];
      var category_id = (course.category_id);
      var course_code = (course.course_code);
      var course_price = (course.course_price);
      var course_price_full = numberWithCommas(course_price);
      var course_code_pdf = (course.course_code);

      var course_code_html = '<input class="formhidden" type="text" id="formGroupInputSmall" placeholder="" value="'+course_code_pdf+'" name="code">';
      //alert(course_code_html);

      
      
      if (category_id <= 1) {
      
      //namecourse
      var path = "images/popup/";
      var pathnote = "images/books/Physics/Note/";
      var pathformular = "images/books/Physics/formular/";
      var book = (course.course_code);
      var str = book.split("|");
      var bookimg ="";

      for (var i=0; i < str.length; i++){
        
        bookimg += '<img src="'+path+'bp_'+str[i]+'.png'+'" width="100%" height="100%" class="img_book">';
        
  
      }
      
      //namenote
      var note = (course.course_img_note);
      
      var noteshort = note.split("|");
      
      var notefull ="";
      
      
      for (var i=0; i < noteshort.length; i++) {
        
        notefull += '<img src="'+pathnote+noteshort[i]+'" class="img_note"  >';
        
      
      }
      
      
      
      //nameformular
      var formular = (course.course_img_formula);
      
      var formularshort = formular.split("|");
      
      var formularfull ="";
      
      if(formular == 'Formular.png') {

        for (var i=0; i < formularshort.length; i++) {
        
        formularfull += '<img src="'+pathformular+formularshort[i]+'" class="img_formular_black"  >';

        }

      }else {

         for (var i=0; i < formularshort.length; i++) {
        
        formularfull += '<img src="'+pathformular+formularshort[i]+'" class="img_formular"  >';

        }
      }
      
      
      var namecourse = (course.course_duration);
      
      var nameshort = namecourse.split(",");
      
      var namefull ="";
      
      
      for (var i=0; i < nameshort.length; i+=2){
        
        namefull += '<h6  class="name"><img src="images/popup/dotblack.png" width="4%" heigth="4%"> '+nameshort[i]+'</h6>';
      }
      
      var namecourseII = (course.course_duration);
      
      var nameshortII = namecourseII.split(",");
      
      var namefullII ="";
      
      for (var x=1; x < nameshortII.length; x+=2) {
        
        namefullII += '<h6  class="name2"><img src="images/popup/dotblack.png" width="4%" heigth="4%"> '+nameshortII[x]+'</h6>';
      }
      
      //console.log(course);

      //chance java to html
      $('#msg_coruse_id').html(course.course_id);
      $('#msg_coruse_name').html(course.course_name);
      $('#msg_course_code').html(course.course_code);
      $('#msg_course_duration').html(namefull);
      $('#msg_course_durationII').html(namefullII);
      $('#msg_course_content').html(course.course_content);
      $('#msg_course_day').html(course.course_day);
      $('#msg_course_booking').html(course.course_booking);
      $('#msg_course_cancel').html(course.course_cancel);
      $('#msg_course_img_books').html(bookimg);
      $('#msg_course_price').html(course_price_full);
      $('#msg_course_code_pdf').html(course_code_html);
      }
      
      
      else if (category_id <= 2) {
      //namecourse
      var path = "images/popup/";
      var pathnote = "images/books/Physics/Note/";
      var pathformular = "images/books/Physics/formular/";

      //nameboxset
      var boxset = (course.course_img_boxset);
      var boxsetshort = boxset.split("|");
      
      var boxsetimg ="";

      for (var i=0; i < boxsetshort.length; i++){
        
        boxsetimg += '<img src="'+path+boxsetshort[i]+'" class="img_book"  >';
  
      }

      //namebook
      var book = (course.course_code);
      var str = book.split("|");
      var bookimg ="";

      for (var i=0; i < str.length; i++){
        
        bookimg += '<img src="'+path+'ep_'+str[i]+'.png'+'" class="img_book"  >';
  
      }
      
      //namenote
      var note = (course.course_img_note);
      
      var noteshort = note.split("|");
      
      var notefull ="";
      
      
      for (var i=0; i < noteshort.length; i++) {
        
        notefull += '<img src="'+pathnote+noteshort[i]+'" class="img_note"  >';
        
      //alert(notefull)
      }
      
      
      //nameformular
      var formular = (course.course_img_formula);
      
      var formularshort = formular.split("|");
      
      var formularfull ="";
      
      if(formular == 'Formular.png') {

        for (var i=0; i < formularshort.length; i++) {
        
        formularfull += '<img src="'+pathformular+formularshort[i]+'" class="img_formular_black"  >';

        }

      }else {

         for (var i=0; i < formularshort.length; i++) {
        
        formularfull += '<img src="'+pathformular+formularshort[i]+'" class="img_formular"  >';

        }
      }
       
      
      var namecourse = (course.course_duration);
      
      var nameshort = namecourse.split(",");
      
      var namefull ="";
      
      
      for (var i=0; i < nameshort.length; i+=2){
        
        namefull += '<h6  class="name"><img src="images/popup/dotblack.png" width="4%" heigth="4%"> '+nameshort[i]+'</h6>';
      }
      
      var namecourseII = (course.course_duration);
      
      var nameshortII = namecourseII.split(",");
      
      var namefullII ="";
      
      for (var x=1; x < nameshortII.length; x+=2) {
        
        namefullII += '<h6  class="name2"><img src="images/popup/dotblack.png" width="4%" heigth="4%"> '+nameshortII[x]+'</h6>';
      }
      
      
      
      
      
      
      
      //console.log(namecourse);

      //chance java to html
      $('#msg_coruse_id').html(course.course_id);
      $('#msg_coruse_name').html(course.course_name);
      $('#msg_course_code').html(course.course_code);
      $('#msg_course_duration').html(namefull);
      $('#msg_course_durationII').html(namefullII);
      $('#msg_course_content').html(course.course_content);
      $('#msg_course_day').html(course.course_day);
      $('#msg_course_booking').html(course.course_booking);
      $('#msg_course_cancel').html(course.course_cancel);
      $('#msg_course_img_books').html(bookimg);
      $('#msg_course_price').html(course_price_full);
      $('#msg_course_code_pdf').html(course_code_html);
      
      }
      
      
      else if (category_id <= 3) {
      //namecourse
      var path = "images/popup/";
      var pathnote = "images/books/Physics/Note/";
      var pathformular = "images/books/Physics/formular/";

      //nameboxset
      var boxset = (course.course_img_boxset);
      var boxsetshort = boxset.split("|");
      
      var boxsetimg ="";

      for (var i=0; i < boxsetshort.length; i++){
        
        boxsetimg += '<img src="'+path+boxsetshort[i]+'" class="img_book"  >';
  
      }

      //namebook
      var book = (course.course_code);
      var str = book.split("|");
      
      var bookimg ="";

      for (var i=0; i < str.length; i++){
        
        bookimg += '<img src="'+path+'ap_'+str[i]+'.png'+'" class="img_book"  >';
  
      }
      
      //namenote
      var note = (course.course_img_note);
      
      var noteshort = note.split("|");
      
      var notefull ="";
      
      
      for (var i=0; i < noteshort.length; i++) {
        
        notefull += '<img src="'+pathnote+noteshort[i]+'" class="img_note"  >';
        
      //alert(notefull)
      }
      
      
      //nameformular
      var formular = (course.course_img_formula);
      
      var formularshort = formular.split("|");
      
      var formularfull ="";
      
      if(formular == 'Formular.png') {

        for (var i=0; i < formularshort.length; i++) {
        
        formularfull += '<img src="'+pathformular+formularshort[i]+'" class="img_formular_black"  >';

        }

      }else {

         for (var i=0; i < formularshort.length; i++) {
        
        formularfull += '<img src="'+pathformular+formularshort[i]+'" class="img_formular"  >';

        }
      }
      
      var namecourse = (course.course_duration);
      
      var nameshort = namecourse.split(",");
      
      var namefull ="";
      
      
      for (var i=0; i < nameshort.length; i+=2){
        
        namefull += '<h6  class="name"><img src="images/popup/dotblack.png" width="4%" heigth="4%"> '+nameshort[i]+'</h6>';
      }
      
      var namecourseII = (course.course_duration);
      
      var nameshortII = namecourseII.split(",");
      
      var namefullII ="";
      
      for (var x=1; x < nameshortII.length; x+=2) {
        
        namefullII += '<h6  class="name2"><img src="images/popup/dotblack.png" width="4%" heigth="4%"> '+nameshortII[x]+'</h6>';
      }
      
      
      //console.log(namecourse);

      //chance java to html
      $('#msg_coruse_id').html(course.course_id);
      $('#msg_coruse_name').html(course.course_name);
      $('#msg_course_code').html(course.course_code);
      $('#msg_course_duration').html(namefull);
      $('#msg_course_durationII').html(namefullII);
      $('#msg_course_content').html(course.course_content);
      $('#msg_course_day').html(course.course_day);
      $('#msg_course_booking').html(course.course_booking);
      $('#msg_course_cancel').html(course.course_cancel);
      $('#msg_course_img_books').html(bookimg);
      $('#msg_course_price').html(course_price_full);
      $('#msg_course_code_pdf').html(course_code_html);

      }
      
      
      else if (category_id <= 4) {
  
      //namecourse
      var path = "images/popup/";
      var pathnote = "images/books/Physics/Note/";
      var pathformular = "images/books/Physics/formular/";

       //nameboxset
      var boxset = (course.course_img_boxset);
      var boxsetshort = boxset.split("|");
      
      var boxsetimg ="";

      for (var i=0; i < boxsetshort.length; i++){
        
        boxsetimg += '<img src="'+path+boxsetshort[i]+'" class="img_book"  >';
  
      }

      //namebook
      var book = (course.course_code);
      var str = book.split("|");
      
      var bookimg ="";

      for (var i=0; i < str.length; i++){
        
        bookimg += '<img src="'+path+'eg_'+str[i]+'.png'+'" class="img_book"  >';
  
      }
      
      //namenote
      var note = (course.course_img_note);
      
      var noteshort = note.split("|");
      
      var notefull ="";
      
      
      for (var i=0; i < noteshort.length; i++) {
        
        notefull += '<img src="'+pathnote+noteshort[i]+'" class="img_note"  >';
        
      //alert(notefull)
      }
      
     //nameformular
      var formular = (course.course_img_formula);
      
      var formularshort = formular.split("|");
      
      var formularfull ="";
      
      if(formular == 'Formular.png') {

        for (var i=0; i < formularshort.length; i++) {
        
        formularfull += '<img src="'+pathformular+formularshort[i]+'" class="img_formular_black"  >';

        }

      }else {

         for (var i=0; i < formularshort.length; i++) {
        
        formularfull += '<img src="'+pathformular+formularshort[i]+'" class="img_formular"  >';

        }
      }
      
      
      var namecourse = (course.course_duration);
      
      var nameshort = namecourse.split(",");
      
      var namefull ="";
      
      
      for (var i=0; i < nameshort.length; i+=2){
        
        namefull += '<h6  class="name"><img src="images/popup/dotblack.png" width="4%" heigth="4%"> '+nameshort[i]+'</h6>';
      }
      
      var namecourseII = (course.course_duration);
      
      var nameshortII = namecourseII.split(",");
      
      var namefullII ="";
      
      for (var x=1; x < nameshortII.length; x+=2) {
        
        namefullII += '<h6  class="name2"><img src="images/popup/dotblack.png" width="4%" heigth="4%"> '+nameshortII[x]+'</h6>';
      }
      
      
      
      
      
      
      
      //console.log(namecourse);

      //chance java to html
      $('#msg_coruse_id').html(course.course_id);
      $('#msg_coruse_name').html(course.course_name);
      $('#msg_course_code').html(course.course_code);
      $('#msg_course_duration').html(namefull);
      $('#msg_course_durationII').html(namefullII);
      $('#msg_course_content').html(course.course_content);
      $('#msg_course_day').html(course.course_day);
      $('#msg_course_booking').html(course.course_booking);
      $('#msg_course_cancel').html(course.course_cancel);
      $('#msg_course_img_books').html(bookimg);
      $('#msg_course_price').html(course_price_full);
      $('#msg_course_code_pdf').html(course_code_html);

      }
      
      else if (category_id <= 5) {
      //namecourse
      var path = "images/popup/";
      var pathnote = "images/books/Physics/Note/";
      var pathformular = "images/books/Physics/formular/";
      var book = (course.course_code);
      var str = book.split("|");
      
      var bookimg ="";

      for (var i=0; i < str.length; i++){
        
        bookimg += '<img src="'+path+'qp_'+str[i]+'.png'+'" class="img_book"  >';
  
      }
      
      //namenote
      var note = (course.course_img_note);
      
      var noteshort = note.split("|");
      
      var notefull ="";
      
      
      for (var i=0; i < noteshort.length; i++) {
        
        notefull += '<img src="'+pathnote+noteshort[i]+'" class="img_note"  >';
        
      //alert(notefull)
      }
      
      //nameformular
      var formular = (course.course_img_formula);
      
      var formularshort = formular.split("|");
      
      var formularfull ="";
      
      if(formular == 'Formular.png') {

        for (var i=0; i < formularshort.length; i++) {
        
        formularfull += '<img src="'+pathformular+formularshort[i]+'" class="img_formular_black"  >';

        }

      }else if(formular == 'FormulasPoster.png'){

        for (var i=0; i < formularshort.length; i++) {
        
        formularfull += '<img src="'+pathformular+formularshort[i]+'" class="img_formular_poster"  >';

        }
      }else {

         for (var i=0; i < formularshort.length; i++) {
        
        formularfull += '<img src="'+pathformular+formularshort[i]+'" class="img_formular"  >';

        }
      }
      
      
      
      var namecourse = (course.course_duration);
      
      var nameshort = namecourse.split(",");
      
      var namefull ="";
      
      
      for (var i=0; i < nameshort.length; i+=2){
        
        namefull += '<h6  class="name"><img src="images/popup/dotblack.png" width="4%" heigth="4%"> '+nameshort[i]+'</h6>';
      }
      
      var namecourseII = (course.course_duration);
      
      var nameshortII = namecourseII.split(",");
      
      var namefullII ="";
      
      for (var x=1; x < nameshortII.length; x+=2) {
        
        namefullII += '<h6  class="name2"><img src="images/popup/dotblack.png" width="4%" heigth="4%"> '+nameshortII[x]+'</h6>';
      }
        //console.log(namecourse);

        //chance java to html
      $('#msg_coruse_id').html(course.course_id);
      $('#msg_coruse_name').html(course.course_name);
      $('#msg_course_code').html(course.course_code);
      $('#msg_course_duration').html(namefull);
      $('#msg_course_durationII').html(namefullII);
      $('#msg_course_content').html(course.course_content);
      $('#msg_course_day').html(course.course_day);
      $('#msg_course_booking').html(course.course_booking);
      $('#msg_course_cancel').html(course.course_cancel);
      $('#msg_course_img_books').html(bookimg);
      $('#msg_course_price').html(course_price_full);
      $('#msg_course_code_pdf').html(course_code_html);

      }
      
     
      return false;
      });
    
    });

</script>

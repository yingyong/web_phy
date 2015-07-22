<?php $nav_menu = 2; ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ideal physics</title>
<meta content="width=1024" name="viewport" content="width=device-width minimum-scale=1, maximum-scale=4">
<link rel="icon"  type="image/png" href="images/idealphysics3.png"  >
<link href="css/styles.css" rel="stylesheet">
<link href="css/nav_bar_styles.css" rel="stylesheet">  
<link href="css/font-style.css" rel="stylesheet">
<script src="js/jquery-1.11.0.js"></script>
<script src="js/submenu.js"></script>

 
<script>
$(function(){
	 $("#tab1").click(function(){$('html, body').animate({scrollTop:$("#idealPhysics").position().top},"slow")});
	 $("#tab2").click(function(){$('html, body').animate({scrollTop:$("#idealTeacher").position().top},"slow")});
	 $("#tab3").click(function(){$('html, body').animate({scrollTop:$("#idealPrivate").position().top},"slow")});
	 
});
   $(document).ready(function(){
        $("#menu__about").change(function(){
        	$('html, body').animate({scrollTop:$("#"+this.value).position().top},"slow");
    });
});
</script>

</head>

<body>
<?php
$Score = 100;
?>
<?php include "nav_bar.php";?>

<bghide class="about_bghide">
     
    <div class='sub__menu' id="cssmenu">
        <ul> 
        	<li id="tab1" class="active"><a href="#idealPhysics">ideal Physics</a></li>
        	<li id="tab2"><a href="#idealTeacher">ideal Teacher</a></li>
            <li id="tab3"><a href="#idealPrivate">ideal Private</a></li>
           
        </ul>
        <select id="menu__about">
        	<option value="idealPhysics">ideal Physics</option>
        	<option value="idealTeacher">ideal Teacher</option>
            <option value="idealPrivate">ideal Private</option>
            
            
        </select>
   </div>
</bghide>
    
<div id="idealPhysics" class="about_idealphysics">

    <center id="about_top_banner">
        <img src="images/about/banner.png"  id="about_img_banner"  >
        
       <div id="about_blog_banner">
            <div class="about_blog_left_banner">
            	 <img src="images/about/macbookpro.png" id="about_img_mac"/>
                  <iframe class="about_youtube_physic" src="http://www.youtube.com/embed/oCQ_aqGxDXQ?rel=0" frameborder="0" allowfullscreen></iframe> 
                  <img src="images/about/word.png" id="about_img_word"/>
                  <img src="images/about/stamp.png" id="about_img_stamp"/>
            </div>
            <div class="about_blog_center_banner">
             	<img src="images/about/line_vertical.png" id="about_img_line"/>
            </div>
            <div class="about_blog_right_banner">
            	<div class="about_text_top">ideal Physics</div>
                <div class="about_text_top_detail">สถาบันแห่งการเรียนรู้เพื่ออนาคต</div>
                		 <div class="about_box_text" id="about_t_text_orange">
                                  นับย้อนกลับไปเมื่อ 26 ปีก่อน นักศึกษาคนหนึ่งเริ่มต้น จับปากกาสอนพิเศษด้วยแนวการสอนที่เน้นความเข้าใจ ใช้ภาษาที่ง่ายและอยากให้ผู้เรียนรักในวิชาฟิสิกส์ สิ่งต่างๆ เกิดขึ้นพร้อมกับความสุขเมื่อเห็นเด็กเรียนรู้เรื่อง และ Entrance ติด
                          </div>
                          <div  class="about_box_text" id="about_t_text_black" >      
                                จากความสุขเล็กๆ เหล่านี้ก่อให้เกิดสถาบันกวดวิชา ideal Physics สถาบันที่สอนฟิสิกส์ด้วยความตั้งใจ ที่อยากเห็นนักเรียนทุกคนรัก และเข้าใจในวิชาฟิสิกส์ ซึ่งสาขาแรกที่เปิดนั้น คือ สาขาบางกะปิ ในพ.ศ 2540 ส่วนรูปแบบการเรียนในตอนนั้น มีเพียงระบบสอนสดและ DVD					                          </div>
                         <div class="about_box_text" id="about_t_text_black" >
                                จากจุดเริ่มต้นแรก ideal Physics ได้พัฒนาสิ่งต่างๆ เพื่อมอบความรู้ให้กับน้องๆไม่ว่าจะเป็นการขยายสาขาที่มีมากกว่า 27 สาขาทั่วประเทศพัฒนารูปแบบการเรียน ideal Physics ให้เป็นระบบเรียนส่วนตัวที่ตอบสนองทุกความต้องการพัฒนาสื่อการเรียนต่างๆให้ทันสมัย เปิดวิชาและคอร์สใหม่เพื่อให้ตรงกับความต้องการของนักเรียนซึ่งผลลัพธ์ของการไม่หยุดพัฒนาตัวเอง คือความสำเร็จของน้องๆ ideal จากรุ่นหนึ่งสู่รุ่นหนึ่ง
                          </div>
                          <div class="about_box_text" id="about_t_text_orange" >
                                การได้เป็นส่วนหนึ่งของความสำเร็จคือสิ่งที่ ideal Physics ภาคภูมิใจ และเราสัญญาว่าเราจะใส่ใจทุกรายละเอียด เพื่อมอบสิ่งที่ดีที่สุดให้กับน้องๆ ideal Physics ของเรา เพื่อเป็นสถาบันแห่งการเรียนรู้เพื่ออนาคตตลอดไป
                          </div>
            </div> 
           
        </div>
      
       
        
    </center>
    
</div>



<div id="idealTeacher" class="about_idealteacher" > 
				
                
 	<div id="about_about_teacher">
       	<img src="images/about/ipad_air_teacher.png" id="about_img_ipad"/>
        <iframe class="about_youtube_teacher" src="http://www.youtube.com/embed/W-3bpfTINM4?rel=0" frameborder="0" allowfullscreen></iframe> 
     	<img src="images/about/word_teacher.png" id="about_img_word_teacher" />
    </div>
        
	<center id="about_top_banner_teacher">
		<img src="images/about/banner_teacher.png"id="about_img_banner_teacher" />
         
         <div id="about_blog_banner_teacher">
            <div class="about_blog_left_banner_teacher">
            	 <img src="images/about/bg_teacher.png"id="about_img_banner_bgteacher" />
            </div>
           
           <div class="about_blog_right_banner_teacher" >
            	<div class="about_text_top">ideal Teacher</div>
                <div class="about_text_top_detail">ป๋ามัก (อ. พีระ บ.บุพพาจารย์)</div>
                		<div class="about_box_text" id="about_t_text_orange_teacher">
                            	พี่มักกล่าวกับเราถึงหัวใจสำคัญของ ideal Physics สถาบันที่เปิดสอนมากว่า 17 ปีและมีสาขามากกว่า 27 สาขาทั่วประเทศ ซึ่งวันนี้พี่มักจะมาบอกเล่าเรื่องราวและตัวตน จากจุดเริ่มต้นจนถึงวันนี้ - 26 ปี ideal Physics
                         </div>
                       <div class="about_box_text" id="about_t_text_black_teacher">
                                “คนเก่งจะไม่เข้าใจคนโง่ แต่พี่คือคนโง่ พี่เลยรู้ว่าถ้าน้องมาเรียนแล้ว น้องจะโง่ตรงไหน เพราะพี่เคยโง่มาก่อน นี่คือข้อได้เปรียบของพี่คนอื่นโอลิมปิกหมด เขาไม่เข้าใจหรอกแต่พี่ไม่ใช่ ตรงนี้น้องเข้าใจแบบนี้ใช่ไหม น้องเข้าใจผิดเพราะพี่เคยเข้าใจผิดมาก่อน แต่คนฉลาดมันไม่เคยเข้าใจผิด คนโง่ย่อมเข้าใจในคนโง่ คนฉลาดจะไปเข้าใจได้อย่างไรว่าเคยงงอันนี้”
                         </div>
           
                          <div class="about_box_text" id="about_t_text_orange_teacher">
                         		จากประสบการณ์ของพี่มัก ที่รู้ว่าน้องไม่เข้าใจส่วนใด จึงทำให้อธิบายได้ตรงจุดที่น้องอยากรู้ จนเกิดเป็นแนวการสอนฟิสิกส์ที่ต่างจากสถาบันอื่นๆ
                         </div>
                         <div class="about_box_text" id="about_t_text_black_teacher">
                         		“เวลาสอนพี่จะพูดทฤษฎีก่อน ว่าทั่วไปเขาพูดแบบนี้ เขาพูดภาษาฟิสิกส์ถามว่างงไหม? ถ้างง... งั้นมาฟังภาษาคน”
                          </div>
                         <div class="about_box_text" id="about_t_text_orange_teacher">
                         		ด้วยการสอนที่ใช้ภาษาที่เข้าใจง่าย เปลี่ยนมุมมองในการเรียนฟิสิกส์ มีอีกสิ่งหนึ่งที่ ideal Physics ให้ความสำคัญคือ การเรียนแบบไม่เน้นจำสูตร
                         </div>
                          <div class="about_box_text" id="about_t_text_black_teacher">
                         		“สูตรเป็นเครื่องมือที่คนฉลาดใช้บอกคนโง่ แต่ถ้าเราไม่รู้ที่มามันก็จบ มันเป็นความเข้าใจฟิสิกส์ที่ผิด บางที่สอนให้ท่องสูตร ideal เราก็ท่องนะ แต่เราท่องแบบไม่รู้ตัว เพราะเราเจอทุกวันอ่านหนังสือทุกวัน เราเลยไม่ต้องท่องเราเจอบ่อยๆมันจะเป็นความคุ้นเคย ฉะนั้นเวลาทำโจทย์ยากๆ ไม่ได้ก็ Back to Basic กลับไปสู่ธรรมชาติ เวลาพี่จะให้เด็กจำอะไร พี่จะลากไปสู่ธรรมชาติ เพราะฟิสิกส์ก็เป็นเหมือนกัน เวลาเข้าไปทำโจทย์เรื่องนี้สูตรเป็นไงเราก็นึกไปถึง Basic ก็คิดออก ต่อให้ผ่านไป 20 ปีก็ไม่ลืม”
                         </div>
                          <div class="about_box_text" id="about_t_text_orange_teacher">
                           		 จากเทคนิคการสอนที่ไม่เน้นการจำสูตร ยังมีอีกสิ่งที่พี่มักคอยสอนน้องๆ อยู่เสมอ นั่นก็คือ Tree Diagram
                         </div>
                         <div class="about_box_text" id="about_t_text_black_teacher">
                           	 “Tree Diagram เป็นสิ่งที่ช่วยจัดกระบวนการทางความคิด เป็นแผนภาพที่ช่วยให้เห็นโครงสร้างของฟิสิกส์ทั้งหมด โดยใช้หลักการจำเป็นรูปภาพ อัจฉริยะเขาจำด้วยรูปภาพ เอาความรู้มาร้อยเรียง และจัดหมวดหมู่เป็นรูปภาพ แล้วมันจะมีเรื่องราวต่อไปเอง”
                         </div>
                         <div class="about_box_text" id="about_t_text_orange_teacher">
                           		 เรื่องราวต่างๆถูกถ่ายทอดออกมามากมาย รวมทั้งประสบการณ์ในอดีตของพี่มักที่ทำให้เราเข้าใจว่า ทำไม ideal Physics จึงให้ความสำคัญกับเวลาเรียนมากเป็นพิเศษ “พี่ค้นพบว่าไม่มีใครเรียนรอบเดียวแล้วรู้เรื่อง ideal Physics จึงให้เวลาเรียนมากกว่าถึง 1.7 เท่า
                         </div>
                         <div class="about_box_text" id="about_t_text_black_teacher">
                            	เพื่อให้น้องได้มีโอกาสทบทวนความรู้และเข้าใจมากขึ้นนี่คือสิ่งที่พี่เคยได้ พี่เลยอยากให้เด็กทุกคนได้เหมือนกับที่พี่เคยได้”
                         </div>
                         <div class="about_box_text" id="about_t_text_orange_teacher">
                            	ก่อนจบบทสนทนาพี่มักทิ้งท้ายกับพวกเราพร้อมรอยยิ้ม
                         </div>
                         <div class="about_box_text" id="about_t_text_orange_teacher" style="font-style:italic; ">
                       			<div style="margin-left:270px;">“ฟิสิกส์อธิบายได้ทุกอย่าง ยกเว้น จิตใจนารี” </div>
                         </div>
            	
            </div> 
            
            
     
        </div>
          
    </center>
</div>


<div id="idealPrivate" class="about_idealprivate">
			<div id="about_img_youtube">
                 <img src="images/about/idealtv.png" id="about_img_idealtv"/>
                 <iframe class="about_youtube_private" src="http://www.youtube.com/embed/fKS8lhYcbpc?rel=0" frameborder="0" allowfullscreen></iframe> 
        	</div>
	<center id="about_top_banner_private">
    	
		<img src="images/about/banner_private.png"id="about_img_banner_private" />
         
        
         <div id="about_blog_banner_private">
         	 <div class="about_text_top_private">
                     ที่นี่ดีกว่าแน่นอน
              </div>
              <div align="center">
                    <img src="images/about/pic1.png" class="about_pic_priv"/>
                    <img src="images/about/pic2.png" class="about_pic_priv"/>
                    <img src="images/about/pic3.png" class="about_pic_priv"/>
              </div>
               <div class="about_img_detail">
                     <img src="images/about/01.png" class="about_pic_detail"/>
               </div>
               <div class="about_img_detail">
                     <img src="images/about/02.png" class="about_pic_detail"/>
               </div>
                <div class="about_img_detail">
                     <img src="images/about/03.png" class="about_pic_detail"/>
               </div>
               <div class="about_img_detail">
                     <img src="images/about/04.png" class="about_pic_detail"/>
               </div>
               <div class="about_img_detail">
                     <img src="images/about/05.png" class="about_pic_detail"/>
               </div>
                <div class="about_img_detail">
                     <img src="images/about/06.png" class="about_pic_detail"/>
               </div>
               <div class="about_img_detail">
                     <img src="images/about/07.png" class="about_pic_detail"/>
               </div>
               <div class="about_img_detail">
                     <img src="images/about/08.png" class="about_pic_detail"/>
               </div>
                <div class="about_img_detail">
                     <img src="images/about/09.png" class="about_pic_detail"/>
               </div>
               <div class="about_img_detail">
                     <img src="images/about/10.png" class="about_pic_detail"/>
               </div>
               <div class="about_img_detail">
                     <img src="images/about/11.png" class="about_pic_detail"/>
               </div>
                <div class="about_img_detail">
                     <img src="images/about/12.png" class="about_pic_detail"/>
               </div>
              
              
             
       </div>
       		<div class="about_teacher_gray">
				<div class="about_left_teacher_learning">
					 <img src="images/about/pic_pic.png" class="about_img_learn"/>
					 <div class="about_learn">
						<div class="ab_text">LEARNING SPACE</div>
						<img src="images/about/line_line.png" class="about_img_learn_line"/> 
						<img src="images/about/table.png" class="about_img_learnn"/> 
						<img src="images/about/monitor.png" class="about_img_learnn"/>
                        <img src="images/about/partition.png" class="about_img_learnn">
						<img src="images/about/headphone.png" class="about_img_learnn">

					</div>
				</div>
				
			</div>

			 <img src="images/about/interface_2015.png" class="about_img_interface"/>

			<div id="about_blog_banner_banner_private">
				<div id ="about_left_book">
					<div id="ab_pad_book">
                        <img src="images/about/booking.png" class="about_p_pic"/>
                        <div class="ab_tab_book">
                          <div class="about_t_text_orange">BOOKING</div>
                          <div class="about_t_text_black">สามารถจองเรียนได้ทันทีเพื่อการเรียนที่ต่อเนื่อง</div>
                        </div>
                   </div>

				   <div id="ab_pad_cap">
						<img src="images/about/capture.png" class="about_p_pic"/>
                        <div class="ab_tab_cap">
                            <div class="about_t_text_orange">Capture</div>
                            <div class="about_t_text_black">ระบบบันทึกภาพหน้าจอขณะเรียน เพื่อส่งคำถามไปที่ ideal Guru</div>
                        </div>
                   </div>
				
				
				<div id="ab_pad_news">
                        <img src="images/about/news.png" class="about_p_pic"/>
                        <div class="ab_tab_news">
                            <div class="about_t_text_orange">News Board</div>
                            <div class="about_t_text_black">เมนูแจ้งข่าวสารสำคัญ ทุกเรื่องที่เป็นประโยชน์ต่อน้องๆ ideal Private</div>
                        </div>
                 </div>

                 <div style="padding-left:50px; margin-bottom: 30px;">
                         <img src="images/about/tool.png" class="about_p_pic"/>
                         <div class="ab_tab_tool">
                             <div class="about_t_text_orange">Tools</div>
                             <div class="about_t_text_black">รวมเครื่องมือต่างๆ เพื่อช่วยอำนวยความสะดวกในการเรียน</div>
                         </div>
                  </div>
       
			</div>
				<div id ="about_center_book">
						<img src="images/about/line_vertical.png" id="about_img_line_private"/>
				</div>
				<div id ="about_right_book">
					<div id="ab_pad_guru">
                          <img src="images/about/guru.png" class="about_p_pic"/>
                          <div class="ab_tab_guru">
                               <div class="about_t_text_orange">Guru</div>
                               <div class="about_t_text_black">ระบบฝากคำถาม ที่สามารถถามข้อสงสัยระหว่างเรียนได้ทันที</div>
                          </div>
                     </div>
					 <div id="ab_pad_play">
                           <img src="images/about/playcontrol.png" class="about_p_pic"/>
                           <div class="ab_tab_play">
                                <div class="about_t_text_orange">Play Control</div>
                                <div class="about_t_text_black">แถบควบคุมการเล่น สามารถปรับ เร่งสปีด เนื้อหา และควบคุม หยุด ย้อน ก่อน หลังได้ตามต้องการ</div>
                            </div>
                     </div>
					<div id="ab_pad_sneak">
                            <img src="images/about/vdo.png" class="about_p_pic"/>
                            <div class="ab_tab_sneak">
                                <div class="about_t_text_orange">sneak peek</div>
                                <div class="about_t_text_black">รวบรวม vdo ที่น่าสนใจของแต่ละวิชา ให้น้องๆ ได้รับชม</div>
                            </div>
                   </div>
					<div style="padding-left:50px; margin-bottom: 50px;">
                            <img src="images/about/appendix.png" class="about_p_pic"/>
                            <div class="ab_tab_appen">
                                  <div class="about_t_text_orange">appendix</div>
                                  <div class="about_t_text_black">รวบรวมทุกข้อมูล สรุปสูตร และเกร็ดความรู้ที่จำเป็นต่อการเรียน</div>
                            </div>
                   </div>
				</div>
				<!--	<div class="about_hr_book" id="ab_hr_hr_book"><hr></hr></div>-->

				 <div class="about_top_private">เราเป็นมากกว่าสุดยอดระบบเรียนส่วนตัว</div>
				<img src="images/about/banner_banner.png" class="about_img_ban"/>
				<div class="about_l_left">
                    	<img src="images/about/full_hd.png" class="ab_img_img"/>
                </div>
				<div class="about_l_left">
                        <img src="images/about/display.png" class="ab_img_img"/>
                </div>
				<div class="about_l_left">
                        <img src="images/about/smart_board.png" class="ab_img_img"/>
                </div>
				<div class="about_l_left">
                        <img src="images/about/time.png"class="ab_img_img"/>
                </div>
				<div class="about_l_left">
                        <img src="images/about/easy.png" class="ab_img_img"/>
                </div>

				<div class="about_img10">
                    	<img src="images/about/banner10.png" class="img_img_about"/>
                </div>
				<div class="about_l_left10">
                    	<img src="images/about/left10.png" class="img_img_about10"/>
                </div>
                <div class="about_l_left10">
                      <img src="images/about/right10.png" class="img_img_about10"/>
                </div>

			</div>
			<div id="about_3">
                      <div class="about_l_left3">
                          <div class="ab_text3">สะดวก ง่าย รวดเร็ว</div>
                      </div>
                       <div class="about_l_right3">
                          <img src="images/about/p_pic.png" class="img_img_about"/>
                      </div>
						
            </div>
				
					

    </center>

</div>

                    


<?php include "footer.php";?>


</body>
</html>
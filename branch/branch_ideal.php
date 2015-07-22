
<div class="container_blog">
         <div class="topicc" >BRANCH</div>
         <div class="blogg_hr"><hr></hr></div>
       
         
         
          <div class="branch_b">
        	
            <div class="branch_icon">
        	      <img src="images/icon/club-formular.png" id="button1" name="button1" onclick="show_data(2)" style="display:none"/>
        	</div>
  			<div class="branch_icon_icon">
        		  <img src="images/icon/club-formular.png" id="button" name="button" onclick="show_data(1)"/>
        	</div>

      <span id="button_filed" style="display:none">
       		<div class="branch_table">
      			<?php include"menu_branch.php";?>
            </div>
         
      </span>  
      </div>
     
<?php
	
	$strSQL = "SELECT * FROM branch WHERE branch_code = '".$_GET['branch']."'";
	mysql_query("SET NAMES UTF8");
	$objQueryy = mysql_query($strSQL);
?>
     
<?php
	while($objResultt = mysql_fetch_array($objQueryy))
		{
?>        
         
 <div class="b_branch_blog">
            <div class="b_branch_left b_branch_box">
             	<iframe class="b_branch_news_map"frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?=$objResultt["map"];?>"></iframe><br /><small><a href="<?=$objResultt["map"];?>" style="color:#0000FF;text-align:left"></small>
                    </a>
            </div>
            <div class="b_branch_right">
             	<div class="b_branch_black">
                	<div align="center" class="branch_b_black" ><img src="images/branch/icon/i-logo.png"/></div>
                </div>
                
                <div class="b_branch_gray">
                  <div align="center" class="branch_b_gray">
                      <span class="b_branch_br">สาขา</span>
                      <span class="b_branch_br_name"><?=$objResultt["branch_name"];?></span>
                  </div>
         	   </div>
               
               <div class="b_branch_address">
               		<img src="images/branch_home.png" class="bb_icon_home" />
              		
					<div class="bb_address"><?=$objResultt["address"];?></div>
               </div>
               
               <div class="b_branch_address">
               		<img src="images/branch_tel.png"  class="bb_icon" />
              		<?=$objResultt["phone"];?>
               </div>
               
               <div class="b_branch_address">
               		<img src="images/branch_fax.png"  class="bb_icon" />
              		<?=$objResultt["fax"];?>
               </div>
               
             
  
  </div> <!-- ENDb_branch_blog -->
  
 
  
      <div class="b_branch_blog_two">
  
          <div class="b_branch_blog_two_box_left">
            <div class="image-gallery">
              
                          <div class="big-image">           
                                  <img id="branch_slide_pic1" src="images/branch/<?=$objResultt["branch_name_en"];?>/<?=$objResultt["picture"];?>" />
                                  <img id="branch_slide_pic2" src="images/branch/<?=$objResultt["branch_name_en"];?>/<?=$objResultt["picture_one"];?>" />
                                  <img id="branch_slide_pic3" src="images/branch/<?=$objResultt["branch_name_en"];?>/<?=$objResultt["picture_two"];?>"/>
                                  <img id="branch_slide_pic4" src="images/branch/<?=$objResultt["branch_name_en"];?>/<?=$objResultt["picture_three"];?>" />
                                
                                  <img id="default" src="images/branch/<?=$objResultt["branch_name_en"];?>/<?=$objResultt["picture"];?>" />
                                
                          </div><!--big-image-->
                            <div class="b_slide_small">
                            
                            <ul>
                              <li>
                              <!--	<img src="../images/branch/icon/previous.png" class="b_img_pre"/>-->
                                <a href="#branch_slide_pic1"><img  src="images/branch/<?=$objResultt["branch_name_en"];?>/<?=$objResultt["picture"];?>" class="branch_slide" /></a>
                                <a href="#branch_slide_pic2"><img  src="images/branch/<?=$objResultt["branch_name_en"];?>/<?=$objResultt["picture_one"];?>" class="branch_slide" /></a>
                                <a href="#branch_slide_pic3"><img  src="images/branch/<?=$objResultt["branch_name_en"];?>/<?=$objResultt["picture_two"];?>" class="branch_slide"/></a>
                                <a href="#branch_slide_pic4"><img  src="images/branch/<?=$objResultt["branch_name_en"];?>/<?=$objResultt["picture_three"];?>"  class="branch_slide"/></a>
                              <!-- <img src="../images/branch/icon/next.png" class="b_img_next" />-->
                             </li>
                           </ul>
                           
                           </div>
                
              		</div><!--image-gallery-->
          </div>
          
        
	<?php } ?>	
          
   
   
<?php
	require_once("include.php");
	$strSQL = "SELECT * FROM jos_users WHERE  branch = '".$_GET['branch']."'  and st = 'Active' ORDER BY id ASC";
	mysql_query("SET NAMES UTF8");
	$objQuery_next = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>

  
         
           
          <div class="b_branch_blog_two_box_left">
          
          <form action="sendmail/send_branch.php" method="post" name="form" >
            	<div class="branch_staff">
                    <div class="branch_head_comment">
                         <div class="branch_head_text"> ข้อเสนอแนะ </div>
                     </div>
                    <div align="center" class="branch_comment">
                    	<input name="comment_branch"  value="" type="hidden">
                  		<textarea name="comment" class="b_comment_text" value="" placeholder=" แนะนำสาขา"></textarea>
              		</div>
                    
 <?php
	while($objResult_next = mysql_fetch_assoc($objQuery_next))
		{
?>        			
					<input name="comment_b"  value="<?=$objResult_next["branch"];?>" type="hidden">

                    <div class="b_line_height" > 
                     <div class="branch_border_staff"> 
                            <img src="http://idealnext.com/myfile/<?=$objResult_next["file"];?>" class="b_img_staff"/>
                            <div align="center" class="b_branch_name_comment"><?=$objResult_next["nick_name"];?><?=$b?></div>    
                     </div> 
                     <div class="branch_comment_employee">
                     		
                     		
                     		<input name="name"  value="<?=$objResult_next["nick_name"];?>" type="hidden" >
                            <textarea name="comment_name" class="b_comment_text_name" placeholder=" แนะนำพนักงาน"></textarea>
                      </div>  
                   </div>
                   
 <?
}
?>          
                 
                   <div class="branch_bottom_comment">
                     <div class="branch_bottom_text">
                        <input type="text" name="email" class="branch_comment_input" placeholder="E-mail"/>
                        <input type="submit"  value="SEND"  class="branch_botton_send"/>
                     </div>     
                 </div>    
          
                 
               </div><!--branch_staff-->   
               
           </form>
               
          </div><!--b_branch_blog_two_box_left-->
          
    
    
        
 	</div>  <!-- END b_branch_blog_two -->
  
</div> <!--container_blog-->
<?php
	if (mysql_errno()) {
    //add our call stack trace here
    print get_callstack(); //alternatively, error_log(get_callstack());

    $this->_errorlog(@mysql_errno().': '.@mysql_error().".SQL in question: $sql");        
    return 'An SQL error has occurred. Please see error.log for details.';
}
?>
<?php mysql_close($objConnectt); ?>

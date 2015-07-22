<link rel='stylesheet' id='reponsive'  href='css/footer_styles.css' type='text/css' media='all' />
<footer>
        <div class="splitter">
        <ul>
		<li><a href="contact.php" class="fix">CONTACT</a></li>
        <li><a class="last"></a></li>
        <li><a href="branch.php" class="fix"> BRANCH</a></li>
        <li><a class="last"></a></li>    
        <li><a href="payment.php" class="fix"> PAYMENT</a></li>
        <li><a class="last"></a></li>
        <li><a href="resume_job.php" class="fix"> JOIN US</a></li>
        <ul>
        </div>
        <ul>
            <div class="box">
                <li>
                    <div class="text">
                        <h1>ABOUT</h1>
                        <div>
                        <a href="about.php#idealPhysics"><img src = "images/footer/dot.png "style="width:5px; height:5;bottom:1px;position: relative;"> IDEAL PHYSICS</a><br>
                        <a href="about.php#idealTeacher"><img src = "images/footer/dot.png "style="width:5px; height:5;bottom:1px;position: relative;"> IDEAL TEACHER</a><br>
                        <a href="about.php#idealPrivate"><img src = "images/footer/dot.png "style="width:5px; height:5;bottom:1px;position: relative;"> IDEAL PRIVATE</a><br>
                        </div>
                </li>
                <li>
                    <div class="text">
                        <h1>COURSE</h1>
                        <div>
                        <a href="course.php#physicsBPlink"><img src = "images/footer/dot.png"style="width:5px; height:5;bottom:1px;position: relative;"> BASIC</a><br>
                        <a href="course.php#physicsEPlink"><img src = "images/footer/dot.png"style="width:5px; height:5;bottom:1px;position: relative;"> ENTRANCE</a><br>
                        <a href="course.php#physicsAPlink"><img src = "images/footer/dot.png"style="width:5px; height:5;bottom:1px;position: relative;"> ADVANCE</a><br>
                        <a href="course.php#physicsEGlink"><img src = "images/footer/dot.png"style="width:5px; height:5;bottom:1px;position: relative;"> ENGINEERING</a><br>
                        <a href="course.php#physicsQPlink"><img src = "images/footer/dot.png"style="width:5px; height:5;bottom:1px;position: relative;"> QUOTA</a><br>
                        </div>
                </li>
                <li>
                    <div class="text">
                        <h1>CLUB</h1>
                        <div>
                        <a href="club.php#answer"><img src = "images/footer/dot.png"style="width:5px; height:5;bottom:1px;position: relative;"> ANSWER</a><br>
                        <a href="club.php#formulas"><img src = "images/footer/dot.png"style="width:5px; height:5;bottom:1px;position: relative;"> FORMULAS</a><br>
                        <a href="club.php#treediagram"><img src = "images/footer/dot.png"style="width:5px; height:5;bottom:1px;position: relative;"> TREE DIAGRAM</a><br>
                        <!--<a href="club.php#statistic"><img src = "images/footer/dot.png"width="10" height="10"> STATIC</a><br>
                        <a href="club.php#student"><img src = "images/footer/dot.png"width="10" height="10"> STUDENT</a><br>-->
                       </div>
                </li>
                <li>
                    <div class="text">
                        <h1>iCHANNEL</h1>
                        <div>
                        <?php
                        $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

                        if (strpos($url,'channel.php') !== false) {
                        ?>
                        <a style="cursor:pointer" onclick="activeSubMenu('all');">       <img src = "images/footer/dot.png"style="width:5px; height:5;bottom:1px;position: relative;"> ALL</a><br>
                        <a style="cursor:pointer" onclick="activeSubMenu('NEW');">       <img src = "images/footer/dot.png"style="width:5px; height:5;bottom:1px;position: relative;"> เฉลยข้อสอบ</a><br>
                        <a style="cursor:pointer" onclick="activeSubMenu('TRIAL');">     <img src = "images/footer/dot.png"style="width:5px; height:5;bottom:1px;position: relative;"> แนะนำ</a><br>
                        <a style="cursor:pointer" onclick="activeSubMenu('TUEFREE');">   <img src = "images/footer/dot.png"style="width:5px; height:5;bottom:1px;position: relative;"> สัมภาษณ์</a><br>
                        <a style="cursor:pointer" onclick="activeSubMenu('ANSWER');">    <img src = "images/footer/dot.png"style="width:5px; height:5;bottom:1px;position: relative;"> ทดลองเรียน</a><br>
                        <?     
                        } else {
                        ?>
                        <a href="channel.php?submenu=ALL">       <img src = "images/footer/dot.png"style="width:5px; height:5;bottom:1px;position: relative;"> ALL</a><br>
                        <a href="channel.php?submenu=NEW">       <img src = "images/footer/dot.png"style="width:5px; height:5;bottom:1px;position: relative;"> เฉลยข้อสอบ</a><br>
                        <a href="channel.php?submenu=TRIAL">     <img src = "images/footer/dot.png"style="width:5px; height:5;bottom:1px;position: relative;"> แนะนำ</a><br>
                        <a href="channel.php?submenu=TUEFREE">   <img src = "images/footer/dot.png"style="width:5px; height:5;bottom:1px;position: relative;"> สัมภาษณ์</a><br>
                        <a href="channel.php?submenu=ANSWER">    <img src = "images/footer/dot.png"style="width:5px; height:5;bottom:1px;position: relative;"> ทดลองเรียน</a><br>
                        <?
                            }
                        ?>
                        </div>
                </li>
            </div>
            <li>
                <div class="text2">
                    <img src = "images/footer/LineBigFooter.png" width="80%" height="100%">
            </li>
            <li>
                <div class="text3">
                    <a href="https://www.facebook.com/idealfanpage" target="_blank"><img src = "images/footer/FBFooter.png""width=40 height=40"></a>
                    <a href="https://twitter.com/idealphysics" target="_blank"><img src = "images/footer/TWFooter.png""width=40 height=40"></a>
                    <a href="https://instagram.com/idealphysics/" target="_blank"><img src = "images/footer/IGFooter.png""width=40 height=40"></a>
                    <a href="https://www.youtube.com/channel/UCeI4EJhc6yBMps4ZqCOFTnQ" target="_blank"><img src = "images/footer/YoutubeFooter.png""width=40 height=40"></a>
                	</div>                              
            </li>
             <li>
                <div class="text4">
                    Call Center : 087-911-7000
                	</div>                              
            </li>
        </ul>
    </footer>
    <script>
            function channel(){
               if(window.location.href.indexOf("channel.php") > -1) {
                }
               else{

                   window.location.assign('channel.php');
                } 
            }
    </script>
    

   <!-- <link rel="stylesheet" href="css/global.css">-->
    <link rel="stylesheet" href="css/video.css">

    <script type="text/javascript" src="js/video.js"></script>
  <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
        <div  id="player-video" class="">
            <div class="player__contents">
                <div class="player__banner " >
                    <div class="player__container">
                        <div  class="vdoView " id="vdoView">
                            <div class="player" >
                                <video id="player"></video>
                       </div> 
                        </div>         
  
                        <a class="player__play"  id="dvControl" title="Play player">
                     <div class="g-button-play player__play__button"></div>
                        </a>
                    </div>
                    <!--  need include file globel.css
                    <div class="player__tools">
                        <div class="player__tools__list">
                            <div class="player__tools__list__actions module">
                                <a class="player__tools__tool watch-later-button watch-later-button--add tooltip" href="/session/new" id="player-hero-wl">
                                    <i class="icon icon_circle-watchlater player__tools__icon watch-later-button__icon"></i>
                                    <span class="watch-later-button__label">Watch later</span>
                                </a>
                                <div class="tooltip__popup popup popup--tailed popup--inverse">
                                    <div style="color:#111;font-size:13px;line-height:1.6;text-align:left;width:145px;">Short on time? Save<br>this talk to watch later.</div>
                                </div>
                                <a class="player__tools__tool favorite-button favorite-button--add tooltip" href="/session/new" id="player-hero-favorite">
                                    <i class="icon icon_circle-favorite player__tools__icon favorite-button__icon"></i>
                                    <span class="favorite-button__label">Favorite</span>
                                </a>
                                <a class="player__tools__tool download-button" href="#">
                                    <i class="icon icon_circle-download player__tools__icon"></i>
                                    <span>Download</span>
                                </a>
                                <a class="player__tools__tool rate-button" href="#">
                                    <i class="icon icon_circle-rate player__tools__icon></i>
                                    <span>Rate</span>
                                </a>
                            </div>
                        </div>
                    </div>-->
                </div><!--  player-hero__contents-->       
   <div class="player__details player__details--long" id="vdoEntry">
                    <h1 class="player__header">
                        <div class="player__title">
                            <span class="player-title__content" id="vdoTitle">ideal Physics</br></br>แนะนำสถาบัน</span>
                        </div>
                        <!-- <div class="player__speaker" >
                             <span class="player__content"  id="title">ideal Physics</span>
                         </div>-->
                    </h1>
                    
                    <div  class="player__meta"><div style="float:left;display:block;"></div><div id="timeDuration" style="float:left;padding-left:3px;" ></div> </div>
                </div>             
            </div>

        </div><!-- player-video-->   
<div id="playControl" style="max-width:1024px;height:60px;margin-left: auto;margin-right: auto;top:0px;position: relative;">
        <div id="runtimeBar" style="max-width:1024px;margin-left: auto;margin-right: auto;">
            <div id="defaultBar" style="max-width:1024px;margin-left: auto;margin-right: auto;">
                <div id="bufferingBar">
                    <div id="runingBar"></div>
                </div>
            </div> 
            <div class="clear:both;"></div>
        </div>

        <div id="btnControl">
            <input type="image" id="buttonPlay" src="images/play.png" class="videoButton" >
            <input type="image" id="volumeMuter" src="images/unmute.png" class="videoButton" >
            
            <div id="currentTimeShow">00:00/00:00</div>
            <!--input type="image" onclick="screenView()" src="images/resize.png" class="videoButton"  ontouchend="" id="changeScreen" style="font-color:#ffffff;float: right;"-->
            <input type="image" id="utubePage" onclick="gotoYT()" src="images/youtube.png" >

            <!--   <div id="rightSrubture">
                 <div id="volumeAdjuster" onmouseover="document.getElementById('volumeBar').style.display='block';document.getElementById('currentTimeShow').style.display='none';" onmouseout="document.getElementById('volumeBar').style.display='none';document.getElementById('currentTimeShow').style.display='block';" >
         
                   <div id="volumeBar" style="display:none;">
                     <div id="volumeValue"></div>
                   </div>
                 </div>
                 
               </div>-->

            <div style="clear:both;"></div>
        </div>
 <div class="subsection-gray">  <!-- buttom line--></div>   
        <h />
    </div>       
        <!-- end video controls  -->
        <div class="video-social">
            <div class="video-text"> Share to Friends  </div>
            <div  class="icon-social"><a href="http://www.facebook.com/idealfanpage" target="_blank" alt="ideal Physics Facebook"><img src="images/FB.png"></a></div>
            <div class="icon-social"><a href="https://twitter.com/idealphysics" target="_blank"><img src="images/Twitter.png"></a></div>
            <div class="icon-social"><a href="mailto:idealphysics@gmail.com" target="_blank"><img src="images/Mail.png" ></a></div>
            <div class="icon-social"><a href="http://www.youtube.com/user/ideallike" target="_blank"><img src="images/YT.png" ></a></div>
            <div class="share-count" id="sharing-count">
                <span class="sharing__value" id="views"></span>
                <span class="sharing__label">
                    <!--span class="label__block">Total</span>
                    <span class="label__block">views</span-->
                </span>
            </div>
            <div class="icon-private"  ><img src="images/Private-icon.png" ></div>
        </div>
        <br><br><br>


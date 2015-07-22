// 2. This code loads the IFrame Player API code asynchronously.
 var tag = document.createElement('script');
 tag.src = "https://www.youtube.com/iframe_api";
 var firstScriptTag = document.getElementsByTagName('script')[0];
 firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);


var player;
var isMobile = { 
Android: function() { return navigator.userAgent.match(/Android/i); }, 
BlackBerry: function() { return navigator.userAgent.match(/BlackBerry/i); }, 
iOS: function() { return navigator.userAgent.match(/iPhone|iPad|iPod/i); }, 
Opera: function() { return navigator.userAgent.match(/Opera Mini/i); }, 
Windows: function() { return navigator.userAgent.match(/IEMobile/i); }, 
any: function() { return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows()); } };
var hideControl = 0;
jQuery(function($) {
    if (isMobile.any()){
		//hide setting play control  use control of YT 
		$('#dvControl').toggle('player__tools');
		$('#playControl').toggleClass('player__tools');
		hideControl = 1;
	}
});

 // 3. This function creates an <iframe> (and YouTube player)
 //    after the API code downloads.
// if autoPlay is true set 'playsinline':'1'  else 'playsinline':'0'
 function onYouTubeIframeAPIReady() {
	player = new YT.Player('player', {
		 videoId: videoId,
		 playerVars: {'autohide': 2, 'controls': hideControl, 'showinfo': 0, 'rel': 0,'wmode':'transparent','enablejsapi':1},
		events: {	
		//  'onReady': onPlayerReady
		//  'onStateChange': onPlayerStateChange
		}
	});
	 playerVideo	= document.getElementById("player-video");
	 dvControl		= document.getElementById("dvControl");
	 buttonPlay		= document.getElementById("buttonPlay");
	 utubePage		= document.getElementById("utubePage");
	 // runtime bar 
	 defaultBar		= document.getElementById('defaultBar');
	 bufferingBar	= document.getElementById('bufferingBar');
	 runingBar		= document.getElementById('runingBar');
	 // volumn strctur here..
	 volumeMuter	= document.getElementById('volumeMuter');
	 playvideo		= document.getElementById("player");
	 vdoEntry		= document.getElementById("vdoEntry");
	 changeScreen	= document.getElementById("changeScreen");
	 vdoView		= document.getElementById("vdoView");

	 defaultBar.style.width = screen.width - 20;   // 20 is scrol bar
	 //tyVolume=player.getVolume();
	 //tyVolSize = volumeValue.style.width;
	 videoVolLength	= parseFloat(85 - 5);

	 videoTimeLength = parseFloat(defaultBar.offsetWidth - 20);
	 //player.setVolume(50);  
	 dvControl.addEventListener('click',play,false);
	 buttonPlay.addEventListener('click', play, false);
	 defaultBar.addEventListener('click', goTheTime, false);
	 volumeMuter.addEventListener('click', muteSound, false);
	 //  utubePage.addEventListener('click',gotoYT(), false); 
	 dvControl.addEventListener('mouseover', showEntry, false);
	 dvControl.addEventListener('mouseout', hideEntry, false);
	 playvideo.addEventListener("onStateChange", "onytplayerStateChange");

 }
 var normalScreen = true;
 function  goTheTime(e) {
	 var videoStatus = player.getPlayerState();
	 if (videoStatus > 0 && videoStatus < 5) {
		 if (videoStatus === 1) {
			 buttonPlay.src = "images/pause.png";
			 player.playVideo();
		 } else {
			 buttonPlay.src = "images/play.png";
			 player.pauseVideo();
		 }
		 var mouseX = e.pageX - defaultBar.offsetLeft;
		 var newtime = mouseX * player.getDuration() / videoTimeLength;
		 player.seekTo(newtime, true);
		 runingBar.style.width = mouseX + "xp";
	 }
 }

 function muteSound() {
	if (player.isMuted()) {
		player.unMute();
		volumeMuter.src = "images/unmute.png";
	} else {
		player.mute();
		volumeMuter.src = "images/mute.png";

	}
 }
 

  var playerReadyInterval;
            var disablePlayerReadyInterval;
            
            // 4. The API will call this function when the video player is ready.
            function onPlayerReady(event) {
                playerReadyInterval = window.setInterval(function(){
                    player.playVideo();
                }, 1000);
                
                disablePlayerReadyInterval = window.setInterval(function(){
                    if (player.getCurrentTime() < 1.0) {
                        return;
                    }
                    // Video started...
                    window.clearInterval(playerReadyInterval);
                    window.clearInterval(disablePlayerReadyInterval);
                }, 1000);
            }
 
 // 4. The API will call this function when the video player is ready.
 /*
 function onPlayerReady(event) {
	var embedCode = event.target.getVideoEmbedCode();
	event.target.playVideo();
	if (document.getElementById('embed-code')) {
		document.getElementById('embed-code').innerHTML = embedCode;
	}
 }*/
 var updateRuntime;
 var status =""; 
 function play(){

	 vdoView.className += " playing";
	// changeScreen.src = "images/resize2.png";
	 normalScreen = false;
	if (player.getPlayerState() === YT.PlayerState.PLAYING) {
		status = "pause";
		dvControl.style.display = "block";
		window.clearInterval(updateRuntime);
		buttonPlay.src = "images/play.png";
		player.pauseVideo();
	} else {
	   player.playVideo();
	   dvControl.style.display = "none";
		buttonPlay.src = "images/pause.png";
		updateRuntime = setInterval(runTime, 100);
		status = "play";
	}
	
 }

 function runTime() {
	 var endBufTime = (player.getVideoBytesLoaded() * videoTimeLength);
	 bufferingBar.style.width = endBufTime + "px";
	if(player.getPlayerState() === YT.PlayerState.PAUSED) {
		  dvControl.style.display="block";
		   //window.clearInterval(updateRuntime);
		   buttonPlay.src = "images/play.png";
	}else if(player.getPlayerState() === YT.PlayerState.PLAYING){
		dvControl.style.display="none";
		buttonPlay.src = "images/pause.png";
	}
	 if (player.getPlayerState() !== 0) {
		 vdoEntry.style.display = (playerVideo.offsetWidth >= 1007) ? "none" : "";
		 var currentLength = (player.getCurrentTime() * videoTimeLength / player.getDuration());
		 runingBar.style.width = currentLength + "px";
	 } else {
		 runingBar.style.width = "0px";
		 vdoEntry.style.display = "block";
		 dvControl.style.display = "block";
		 buttonPlay.src = "images/replay.png";
		 window.clearInterval(updateRuntime);
	 }
	
	 if (player.getDuration() === /nan/) {
		 currentTimeShow.innerHTML = "00:00/00:00";
	 } else {
		 currentTimeShow.innerHTML = formattingTime(player.getCurrentTime()) + "/" + formattingTime(player.getDuration());
	 }
}

 //var screensize = '"";'
 function screenView() {
	 if (normalScreen) {
		 // change To BigScreen
		 vdoView.className += " playing";
		 changeScreen.src = "images/resize2.png";
		 normalScreen = false;
	 } else {
		 // change to normal
		 vdoView.className = "vdoView";
		 changeScreen.src = "images/resize.png";
		 normalScreen = true;
	 }
 }

 // 5. The API calls this function when the player's state changes.
 //    The function indicates that when playing a video (state=1),
 //    the player should play for six seconds and then stop.
 function gotoYT() {
	 window.open(player.getVideoUrl());
 }

$(document).ready(function() {
	 $.ajax({
		 url: "http://gdata.youtube.com/feeds/api/videos/" + videoId + "?v=2&prettyprint=true&alt=json",
		 dataType: "jsonp",
		 success: function(data) {
		 parseresults(data);
		 }
	 });
 });

 function parseresults(data) {
	 var title = data.entry.title.$t;
	 var description = data.entry.media$group.media$description.$t;
	 var viewcount = numberWithCommas(data.entry.yt$statistics.viewCount);
	 var author = data.entry.author[0].name.$t;
	 var duration = data.entry.media$group.yt$duration.seconds;
	 duration = formattingTime(duration);
	 //$('#views').html(viewcount);
	 //$('#vdoTitle').html(title);
	 $('#vdoDescription').html(description);
	 $('#duration').html(duration);
	 //$("#timeDuration").html("ความยาว : " + duration + " นาที");
 }
function formattingTime(time) {
	var seconds = Math.round(time);
	var minutes = Math.floor(seconds / 60);
	var hours = Math.floor(minutes / 60);
	minutes = (minutes >= 10) ? minutes : "0" + minutes;
	seconds = seconds % 60;
	seconds = (seconds >= 10) ? seconds : "0" + seconds;
	hours = (hours >= 10) ? hours : "0" + hours;
	var theValueReturn = (hours == 0) ? minutes + ":" + seconds : hours + ":" + minutes + ":" + seconds;
	return theValueReturn;
}

 function showEntry() {
	 if (player.getPlayerState() === YT.PlayerState.PAUSED) {
		 vdoEntry.style.display = "block";
	 }
 }

 function hideEntry() {
	 if (player.getPlayerState() === YT.PlayerState.PAUSED && playerVideo.offsetWidth >= 1007) {
		 vdoEntry.style.display = "none";
	 }
 }


<?php

	mb_internal_encoding("UTF-8");
	date_default_timezone_set('Asia/Bangkok');

	function html_moddtp_specialchars($inputString)
	{
		return str_replace( array("\r","\n") , array("<br />","<br />") , str_replace( "\r\n" , "<br />" , str_replace( '"' , "\\\"" , ( str_replace( "'" , "\\'" , $inputString) ) ) ) ); // htmlspecialchars($inputString , ENT_QUOTES)
	}

	$array_of_youtubeblock = file_get_contents(
		getcwd()."/vdochannel/vdochannel.json"
	);
	$array_of_youtubeblock = json_decode($array_of_youtubeblock , true);
	$new_lefttopred_img = '';
	if(empty($array_of_youtubeblock)||(!is_array($array_of_youtubeblock)))
		$array_of_youtubeblock = array();
	foreach($array_of_youtubeblock as $index_of_array => $item_of_array)
		if((!empty($item_of_array))?is_array($item_of_array):false)
		{
			if( ((mb_strpos($item_of_array["divclass"]," newcoming")!==FALSE)?(mb_strpos($item_of_array["divclass"]," newcoming")>0):FALSE)
			|| ((mb_strpos($item_of_array["divclass"],"newcoming")!==FALSE)?(mb_strpos($item_of_array["divclass"],"newcoming")==0):FALSE) )
				$new_lefttopred_img = '<div class="new_lefttopred_div"><img src="./images/new_left-top-red.png" id="new_lefttopred_'.html_moddtp_specialchars($item_of_array["id"]).'" class="new_lefttopred_img" /></div>';
			else
				$new_lefttopred_img = '';

?><div class="youtubeblock<?php echo empty($item_of_array["divclass"])?"":" ".$item_of_array["divclass"]; ?>">
<img class="youtubepreview" id="<?php echo html_moddtp_specialchars($item_of_array["id"]); ?>" width="236px" height="138px" src="<?php echo html_moddtp_specialchars($item_of_array["imgsrc"]); ?>" onclick="playerLoadVideoByIdIfNotAJAX( '<?php echo html_moddtp_specialchars($item_of_array["youtubeid"]); ?>' , '<?php echo html_moddtp_specialchars($item_of_array["vdotitle"]); ?>' , '<?php echo html_moddtp_specialchars($item_of_array["viewcounter"]); ?>' , '<?php echo html_moddtp_specialchars($item_of_array["vdotitle"]); ?>' , '<?php echo html_moddtp_specialchars($item_of_array["vdodescription"]); ?>' , '<?php echo html_moddtp_specialchars($item_of_array["vdoduration"]); ?>' );" />
<?php echo $new_lefttopred_img; ?><div class="youtubesmalldescription"><table cellpadding="0" cellspacing="0" border="0"><tr><td colspan="2"><?php echo $item_of_array["vdotitle"]; ?></td></tr>
<tr><td width="48">อัพโหลด</td><td> :  <?php echo $item_of_array["uploaddate_thai"]; ?></td></tr>
<tr><td width="48">VIEW</td><td> : <?php echo number_format(intval($item_of_array["viewcounter"])); ?></td></tr></table></div>
</div>
<?php

		}

?>
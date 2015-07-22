<?php
	
   $host="localhost";
   $user_name="idealnext_next";
   $pass_word="@next*27";
   $db="idealnext_next";
   $objConnectt = mysql_connect( $host,$user_name,$pass_word) or die ("ไม่สามารถติดต่อโฮสข้อมูลได้");
   $objDB = mysql_select_db($db) or die("ไม่สามารถติพต่อฐานข้อมูลได้"); 
   mysql_query("SET NAMES UTF8");

?>
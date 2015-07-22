<?php

	header("access-control-allow-origin: *");

	//$_POST['name'] = 'bp';
	$name = $_POST['name'];

	if ($_POST['name'] =='bp'){
		$category_id_id = '1';
	}else if($_POST['name']=='ep'){
		$category_id_id = '2';
	}else if($_POST['name']=='ap'){
		$category_id_id = '3';
	}else if($_POST['name']=='eg'){
		$category_id_id = '4';
	}else if($_POST['name']=='qp'){
		$category_id_id = '5';
	}else if($_POST['name']=='bb'){
		$category_id_id = '6';
	}else if($_POST['name']=='eb'){
		$category_id_id = '7';	
	}else if($_POST['name']=='p1'){
		$category_id_id = '8';
	}else if($_POST['name']=='p2'){
		$category_id_id = '9';
	}else if($_POST['name']=='p3'){
		$category_id_id = '10';
	}else if($_POST['name']=='c1'){
		$category_id_id = '11';
	}else if($_POST['name']=='c2'){
		$category_id_id = '12';
	}else if($_POST['name']=='chsk'){
		$category_id_id = '13';
	}else if($_POST['name']=='c3'){
		$category_id_id = '14';
	}else if($_POST['name']=='cpat'){
		$category_id_id = '15';
	}
	
	
	
	include('connectDB.php');
	/*$objConnect = mysql_connect("localhost","ideal_web","password");
	$objDB = mysql_select_db("ideal_web");*/

	$strSQL = "SELECT * FROM courses WHERE category_id = '".$category_id_id."' order by course_id ";
	mysql_query("SET NAMES UTF8");
	$objQuery = mysql_query($strSQL);
	while($objResult = mysql_fetch_array($objQuery)){

	
	
	
	$json_data[]=array(
		'name' => $objResult['course_duration'],
		'course' => $objResult['course_code'],
		'price' => number_format($objResult['course_price']),
		'id' => $objResult['category_id']
				);
				
	}
	$json= json_encode($json_data);
	echo $json; 
	
	include('closeConn.php');
?> 
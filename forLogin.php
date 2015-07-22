<?php
         session_start();
		 date_default_timezone_set("Asia/Bangkok");

		 $objConnect = mysql_connect('203.151.20.22', 'admindb', 'idealadm*27') or die ("ไม่สามารถติดต่อโฮสข้อมูลได้");
	     $objDB = mysql_select_db("learning") or die("ไม่สามารถติพต่อฐานข้อมูลได้");
		 

		 $type = $_POST['type'];
		 

		 if ($type == 'login') {

	     	$username = $_POST['username'];

	     	$password = $_POST['password'];


	     	

         	$SQL = "SELECT * FROM tstudent WHERE 1 AND FUSERNAME = '".$username."' AND FPASSWORD = '".$password."'";

		 	$result = mysql_query($SQL);
		 	$rows =  mysql_fetch_assoc($result);

		 	if($rows) {

		 		$_SESSION['user'] = $rows['FUSERNAME'];
		 	}


			echo json_encode($rows);
		 
	    }

		
?>
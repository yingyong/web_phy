
<?php
   date_default_timezone_set('Asia/Bangkok');
   /*=============== ติดต่อฐานข้อมูล =================*/
   $host="localhost";
   $user_name="idealup";
   $pass_word="@up*27";
   $db="idealup_web";
   $objConnect = mysql_connect( $host,$user_name,$pass_word) or die ("ไม่สามารถติดต่อโฮสข้อมูลได้");
   $objDB = mysql_select_db($db) or die("ไม่สามารถติพต่อฐานข้อมูลได้"); 
   mysql_query("SET NAMES UTF8");
   
   
   
function js_thai_encode($data){   // fix all thai elements
    if (is_array($data)){
        foreach($data as $a => $b){
            if (is_array($data[$a])){
                $data[$a] = js_thai_encode($data[$a]);
            }else{
                $data[$a] = iconv("tis-620","utf-8",$b);
            }
        }
    }else{
        $data =iconv("tis-620","utf-8",$data);
    }
    return $data;
}



?> 

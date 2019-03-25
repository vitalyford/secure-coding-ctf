<?php
require_once "functions.php";
include_once "flag3.php"; 

if(isset($_COOKIE['points'])){

$value=$_COOKIE['points'];	
//echo "value=".$value;

if(decode_cookie($value)==100000){
	answer();
	die();
}

update_cookie($value);	
	
}else{//no cookie
	new_cookie();
}

function new_cookie(){
	setcookie("points",0,time() + (86400 * 30),'/');	
	write_page(0);
	
}
function update_cookie($v){
	$new_value=encode_cookie(decode_cookie($v)+1);
	setcookie("points",$new_value,time() + (86400 * 30),'/');
	write_page(decode_cookie($new_value));
}

function write_page($v){
echo "
<html>
<head></head>
<body>
You must get exactly 100,000 points to get the flag!
</br><br/>
<form method=post>
<button type=submit name='submit'>Add Point!</button>
</form>
<div>
<table border='1'><tr><td>Points:</td><td>".$v."</td></td></table>
</div>
</body>
</html>";	
}
?>



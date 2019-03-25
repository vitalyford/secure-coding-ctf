<html>
<head></head>
<body>
<h2><font color='red'>WE GOT HACKED LAST WEEK BUT NOW WE ARE SECURE!</font></h2>
This is a free service to ping an outside address!<br/>
Enter IP or hostname...</br>
<form method=get>
<textarea name='address'></textarea>
<button type=submit>Ping!</button>
</form>
<?php
require "dir_listing.php";

if(isset($_GET['address'])){

$address=$_GET['address'];
$address=preg_replace("/\||&|;/"," ",$address);


$command="ping -n 1 ";
$command=$command.$address;


//echo $command;
$answer=shell_exec($command);
echo "<h3>".preg_replace("/\r|\n/","<br/>",$answer)."</h3>";
	
}
?>
</body>
</html>

<html>
<head></head>
<body>
This is a free service to ping an outside address!<br/>
Enter IP or hostname...</br>
<form method=get>
<input type='text' name='address'></input>
<button type=submit>Ping!</button>
</form>
<?php

if(isset($_GET['address'])){

$address=$_GET['address'];
require "code.php";
$command="ping -c 1 ".$address;
$answer=passthru($command);
echo "<h3>".preg_replace("/\r|\n/","<br/>",$answer)."</h3>";
		
}
?>
</body>
</html>


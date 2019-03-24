<?php
require "settings.php";

if (isset($_GET['password'])){
	
	
	if(strcmp($_GET['password'],$actualPass)==0)
	{
		echo $flag;
		}
	else
	{
		echo "Nope<br/><br/><br/>";
		}
}
?>
<html>
<head><title>Log in</title></head>
<body>
Your goal is to log in...</br></br>
<!-- Hint: no sql is needed... -->
<form method='get'>
Password:<br/>
<input type='text' name='password' id='password'></br>
<button type='submit'>Submit</button>
</form>
</body>

</html>
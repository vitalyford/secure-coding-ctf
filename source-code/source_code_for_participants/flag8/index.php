<html>
<head><title>File Share</title></head>
<body>
<table border='1px'>
<th>File</th><th>Access?</th>
<?php
$userAccess="0"; //guest or admin
if(!$fileString=file_get_contents('./files.config')){
	die("could not read files.txt");
}
$fileArray=explode('|',$fileString);


foreach ($fileArray as $file){
	$thisFile=explode(',',$file);
	$hasAccess=checkAccess($thisFile,$userAccess);
	echo "<tr>";
	if($hasAccess)
		echo "<td><a href='files.php?id=".$thisFile[0]."'>".$thisFile[1]."</a></td>";
	else
		echo "<td>".$thisFile[1]."</td>";
	
	
	if($hasAccess)
		echo "<td>YES</td></tr>"; 
	else 
		echo "<td>You dont have the proper access level to download this file!</td></tr>";
}


function checkAccess($file,$userAccess){
	if($file[2] <= $userAccess) return true;
	return false;
}

?>
</table>
</body>
</html>
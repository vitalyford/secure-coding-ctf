<html>
<head><title>Gallery</title></head>
<body>
<table>
<tr>
<?php
$loc = "./images";
$files = scandir($loc);
//removes . and ..
$files=array_diff($files,[".",".."]);
//var_dump($files);
$col=0;
foreach ($files as $file){
	//echo "file=".$file;
	if($col%5===0){echo "</tr><tr>";}
	echo "<td><img width='200' height='200' src=images/".$file."></td>";
	$col++;
}
?>
</tr>
</table>
</body>
</html>
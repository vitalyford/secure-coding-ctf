<html><head><title>Image Upload v1.0</title></head>
<body>
<?php
if(!ini_get("file_uploads")){echo "<font color='red'>There is an issue with this flag. Contact CTF admins.</font>";}

if(isset($_FILES["fileToUpload"]["name"])){

$fileName=$_FILES["fileToUpload"]["name"];
$target_dir = "./images/";
$target_file = $target_dir . basename($fileName);
$uploadOk = 1;

$name=explode(".",$fileName);
$newName=time() . '.' . end($name);
//spaces cause issues with img tags
$name=str_replace(" ","_",$name);


if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$name[0]."_".$newName)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.<br/>";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

}
?>
<h3>Welcome to my image upload server! Please be nice!</h3>
<form  method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
<h1><a href="gallery.php">Click here to go to the gallery</a></h1>
</body>
</html>

<?php
$target_dir="uploads/";
$target_file=$target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk=1;
$imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"]))
{
	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if($check !== false)
	{
		var_dump($check);
		echo "File is an image - " . $check["mime"] . ".";
		$uploadOk=1;
	}
	else
	{
		echo "File is not an image";
		$uploadOk=0;
	}
	if(file_exists($target_file))
	{
		echo "sorry, file already exists.";
		$uploadOk=0;
	}
	if($_FILES["fileToUpload"]["size"] > 500000)
	{
		echo "sorry, your file is too large";
		$uploadOk=0;
	}
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif")
	{
		echo "sorry, only JPG,JPEG,PNG & GIF files are allowed";
		$uploadOk=0;
	}
	if($uploadOk == 0)
	{
		echo "sorry, your file was not uploaded.";
	} 
	else
	{
		if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file))
		{
			echo "This file" . basename($_FILES["fileToUpload"]["name"])."has been uploaded.";
		}
		else
		{
			echo "sorry, there was an error uploading your file";
		}
	}
}
?>
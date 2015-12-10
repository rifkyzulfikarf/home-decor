<?php
session_start();
$ds          = DIRECTORY_SEPARATOR;
 
if (!empty($_FILES)) {
	
	include "../../blob/blob.php";
	
	$id = $_POST['id'];
     
    $tempFile = $_FILES['file']['tmp_name'];
      
    $targetPath = "../../../../assets/img/";
     
	$temp = explode(".",$_FILES["file"]["name"]);
	
	$newFileName = rand(1,99999999) . '.' .end($temp);
	
	$targetFile =  $targetPath. $newFileName;
	
	$koneksi = new koneksi();
	
	if ($simpan = $koneksi->runQuery("UPDATE `img` SET `nama` = '$newFileName' WHERE `id` = '$id'")) {
		move_uploaded_file($tempFile,$targetFile);
    }
}
?>
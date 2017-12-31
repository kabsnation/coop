<?php
require("../Handlers/DocumentHandler.php");
require("../config/config.php");
$doc = new DocumentHandler();
$connect = new Connect();
$con = $connect->connectDB();
$target_dir = "files/";
$target_file="";
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if(isset($_POST['checkbox'])){
	$trackingNumber = $_POST['trackingNumber'];
	$documentType = $_POST['documentType'];
	$file = "";
	$uploadOk=0;
	$doneUpload=0;
	if(isset($_POST['file'])){
		$target_file = $target_dir . basename($_FILES["file"]["name"]);
	 	$check = getimagesize($_FILES["file"]["tmp_name"]);
	    if($check !== false) {
	        $uploadOk = 1;
	    } else {
	        $uploadOk = 0;
	    }
	    if ($_FILES["file"]["size"] > 500000) {
	    	$uploadOk = 0;
		}
		if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
	   		$doneUpload=1;
	    } 
	    else {
	       	$doneUpload=0;
	    }
	}
	$id = $_POST['accountId'];
	$result = "";
	//ADD TO TRACKING
	//upload img
	
	$trackingId = $doc->addDocument($trackingNumber,$documentType,$id,$target_file);
	if($trackingId != ""){
		foreach($_POST['checkbox'] as $recipient){
			$result = $doc->addDocumentLocation($recipient,$trackingId);
		} 
	}
	if($result){
		echo "<script>window.location='COOP_AddDocument.php';alert('Success!');</script>";
	}
}
?>
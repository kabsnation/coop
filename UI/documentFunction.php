<?php
require("../Handlers/DocumentHandler.php");
require("../config/config.php");
$doc = new DocumentHandler();
$connect = new Connect();
$con = $connect->connectDB();
if(isset($_POST['checkbox'])){
	$trackingNumber = $_POST['trackingNumber'];
	$documentType = $_POST['documentType'];
	$file = "";
	if(isset($_POST['file']))
		$file = $_POST['file'];
	$id = $_POST['accountId'];
	$result = "";
	//ADD TO TRACKING
	$trackingId = $doc->addDocument($trackingNumber,$documentType,$id,$file);
	if($trackingId != ""){
		foreach($_POST['checkbox'] as $recipient){
			$result = $doc->addDocumentLocation($recipient,$trackingId);
		} 
	}
	if($result){
		echo "<script>window.location='COOP_AddDocument.php';alert('Success!');</script>";
	}
	echo $result;
}
?>
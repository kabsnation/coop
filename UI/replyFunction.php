<?php
require("../config/config.php");
require("../Handlers/DocumentHandler.php");
$doc = new DocumentHandler();
$id = $_POST['id'];
$idTracking =$_POST['idTracking'];
if(!empty($_POST['reply']) && isset($_POST['idTracking']) && isset($_POST['id'])){
	
}
else if(!empty($_POST['response']) && isset($_POST['idTracking']) && isset($_POST['id'])){
	
	$response = $_POST['response'];
	$result = $doc->changeInboxStatus($id,$idTracking);
	if($result){
		echo "<script>
		window.location='CCDO_ViewMessage.php?id=".$idTracking."';
		alert('Success');
		</script>";
	}
}
else{
	echo "<script>
		window.location='CCDO_ViewMessage.php?id=".$idTracking."';
		alert('Please add a message for a reply');
		</script>";
}
?>
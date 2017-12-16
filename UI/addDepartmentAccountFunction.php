<?php
require("../Handlers/AccountHandler.php");
$handler = new AccountHandler();
$connect = new Connect();
$con = $connect-> connectDB();

if(isset($_POST['txtUsername'])){

	$lastName = mysqli_real_escape_string($con,stripcslashes(trim($_POST['txtLastname'])));
	$firstName = mysqli_real_escape_string($con,stripcslashes(trim($_POST['txtFirstName'])));
	$middleName = mysqli_real_escape_string($con,stripcslashes(trim($_POST['txtMiddleName'])));
	$nameSuffix = mysqli_real_escape_string($con,stripcslashes(trim($_POST['ddlNameSuffix'])));
	$sex= mysqli_real_escape_string($con,stripcslashes(trim($_POST['ddlSex'])));

	$cellnumber = mysqli_real_escape_string($con,stripcslashes(trim($_POST['txtCellphoneNumber'])));
	$email = mysqli_real_escape_string($con,stripcslashes(trim($_POST['txtEmail'])));

	$position = "ADMIN";
	$departmentId = 1;
	$accountType= 1;

	$userName= mysqli_real_escape_string($con,stripcslashes(trim($_POST['txtUsername'])));
	$password= mysqli_real_escape_string($con,stripcslashes(trim($_POST['txtPassword'])));

	$accountId=$handler->addDepartmentAccountInfo($firstName,$lastName,$middleName,$nameSuffix,$cellnumber,$email,$position);
	if($accountId!=""){
		$result=$handler->addDepartmentAccount($userName,$password,$accountId,$departmentId,$accountType);
	}
}
?>
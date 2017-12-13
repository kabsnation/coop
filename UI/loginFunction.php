<?php
require("../Handlers/AccountHandler.php");
$handler = new AccountHandler();
$conn = new Connect();
$con=$conn->connectDB();
if(isset($_POST["username"])&&isset($_POST["password"])){
	$username= mysqli_real_escape_string($con,stripcslashes(trim($_POST["username"])));
	$password=mysqli_real_escape_string($con,stripcslashes(trim($_POST["password"])));
	$result=$handler->getAccount($username,$password);
	foreach ($result as $r) {
		echo $username;
	}
}
$username=$_POST["username"];
$password=$_POST["password"];
echo $password;

?>
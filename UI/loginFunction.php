<?php
require("../Handlers/AccountHandler.php");
$handler = new AccountHandler();
$conn = new Connect();
$con=$conn->connectDB();
if(isset($_POST["username"])&&isset($_POST["password"])){
	$username= mysqli_real_escape_string($con,stripcslashes(trim($_POST["username"])));
	$password=mysqli_real_escape_string($con,stripcslashes(trim($_POST["password"])));
	$results=$handler->getAccount($username,$password);
	foreach ($results as $result) {
			if($result['idaccount_type']==1){
				$_SESSION["idSuperAdmin"]= $result["idAccounts"];
				echo "<script> window.location=""<script>";
			}
			else if($result['idaccount_type']==2){
				$_SESSION["idAccountAdmin"]= $result["idAccounts"];
				echo "<script> window.location=""<script>";
			}
			else if($result['idaccount_type']==3){
				$_SESSION["idTrackingAdmin"]= $result["idAccounts"];
				echo "<script> window.location=""<script>";
			}
			else if($result['idaccount_type']==4){
				$_SESSION["idCoop"]= $result["idAccounts"];
				echo "<script> window.location=""<script>";
			}
			else if($result['idaccount_type']==2){
				$_SESSION["idDept"]= $result["idAccounts"];
				echo "<script> window.location=""<script>";
			}

		}
	}
}
?>
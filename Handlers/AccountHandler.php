<?php
require("../config/config.php");
class AccountHandler{

	public function getAccount($username,$password){
		$con = new Connect();
		$query = "SELECT * FROM Accounts WHERE username='".$username."' AND password ='" .$password."'";
		$result = $con->select($query);
		return $result;
	}

}
?>
<?php
class DocumentHandler{
	
	public function getTrackingNumber(){
		$con = new Connect();
		$query = "SELECT trackingNumber FROM Tracking ORDER BY idTracking DESC LIMIT 1";
		$trackingNumber = $con->select($query);
		while($row=$trackingNumber->fetch_assoc()){
			if($row['trackingNumber']!= NULL){
				$number = explode("-", $row['trackingNumber']);
				$tempo = $this->incrementNumber($number[1]);
				$number = $number[0]."-".$tempo;
			}
			else{
				$number = 'CCDO-00001';
			}
		}
		return $number;
	}
	public function incrementNumber($trackingNumber){
		$trackingNumber = str_pad($trackingNumber + 1, 5, 0, STR_PAD_LEFT);
		return $trackingNumber;
	}
	public function getDocumentType(){
		$con = new Connect();
		$query = "SELECT * FROM Document_type ORDER BY Document";
		$documentType = $con->select($query);
		return $documentType;
	}
	public function addDocument($trackingNumber,$documentType,$senderId,$file = ""){
		$con = new Connect();
		$query = "INSERT INTO tracking(trackingNumber,DateTime,idDocument_Type,idAccounts,Status) VALUES('".$trackingNumber."','".date("Y/m/d-h:i:sa")."','".$documentType."','".$senderId."','ONGOING')";
		$result = $con->insertReturnLastId($query);
		return $result;
	}
	public function addDocumentLocation($recipient,$trackingId){
		$con = new Connect();
		$query = "INSERT INTO tracking_location(Location_Status,idAccounts,idTracking) VALUES('WAITING FOR CONFIRMATION','".$recipient."','".$trackingId."')";
		$result = $con->insert($query);
		return $result;
	}
	public function getTracking(){
		$con = new Connect();
		$query = "SELECT trackingNumber,DateTime,Document,Status FROM tracking,document_type WHERE Status='ONGOING' and tracking.idDocument_Type= document_type.idDocument_Type ORDER BY idTracking DESC";
		$result = $con->select($query);
		return $result;
	}
	public function getLocationByTrackingNumber($trackingNumber){
		$con = new Connect();
		$query="SELECT Location_Status ,CONCAT(account_info.First_Name, ' ', account_info.Last_Name) as name FROM tracking,tracking_location,accounts,account_info WHERE Status='ONGOING' and tracking.idTracking= tracking_location.idTracking and tracking.idAccounts= accounts.idAccounts and accounts.idAccount_Info = account_info.idAccount_Info and trackingNumber = '".$trackingNumber."'";
		$result = $con->select($query);
		return $result;
	}
	public function getTrackingInfo($trackingNumber){
		$con = new Connect();
		$query ="SELECT trackingNumber,DateTime,Document,Status,Email_Address, CONCAT(account_info.First_Name, ' ', account_info.Last_Name) as name FROM tracking,document_type,accounts,account_info WHERE Status='ONGOING' and tracking.idDocument_Type= document_type.idDocument_Type and tracking.idAccounts= accounts.idAccounts and accounts.idAccount_Info = account_info.idAccount_Info and trackingNumber ='".$trackingNumber."'";
		$result = $con->select($query);
		return $result;
	}
	public function getTrackingCount(){
		$con = new Connect();
		$query = "SELECT count(*) FROM tracking,document_type WHERE Status='ONGOING' and tracking.idDocument_Type= document_type.idDocument_Type ORDER BY idTracking DESC";
		$result = $con->select($query);
		return $result;
	}
}
?>
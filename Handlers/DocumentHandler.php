<?php
class DocumentHandler{
	
	public function getTrackingNumber(){
		$con = new Connect();
		$query = "SELECT trackingNumber FROM Tracking ORDER BY idTracking DESC LIMIT 1";
		$trackingNumber = $con->select($query);
		if($trackingNumber){
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
<<<<<<< HEAD
			return $number;	
		}
		return 'CCDO-00001';
=======
			return $number;
		}
		return 'CCDO-00001';
		
>>>>>>> a6c20656c9ced646a744475fe5106d0d1f05fefc
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
	public function addDocument($title,$trackingNumber,$documentType,$senderId,$reply,$file = "",$message = ""){
		$con = new Connect();
		$query= "INSERT INTO inbox_info(title,message) VALUES('".$title."','".$message."')";
		$result = $con->insertReturnLastId($query);
		$query = "INSERT INTO tracking(trackingNumber,DateTime,idDocument_Type,idAccounts,Status,filePath,needReply,idinbox_info) VALUES('".$trackingNumber."','".date("Y/m/d-h:i:sa")."','".$documentType."','".$senderId."','ONGOING','".$file."',".$reply.",$result)";
		$result = $con->insertReturnLastId($query);
		
		return $result;
	}
	public function addDocumentLocation($recipient,$trackingId){
		$con = new Connect();
		$query = "INSERT INTO location(status,idAccounts,idTracking) VALUES('WAITING FOR CONFIRMATION','".$recipient."','".$trackingId."')";
		$result = $con->insert($query);
		return $result;
	}
	public function getTrackingById($id){
		$con = new Connect();
		$query = "SELECT trackingNumber,DateTime,Document,Status FROM tracking,document_type WHERE Status='ONGOING' and tracking.idDocument_Type= document_type.idDocument_Type and idAccounts='".$id."' ORDER BY idTracking DESC";
		$result = $con->select($query);
		return $result;
	}
	public function getTracking(){
		$con = new Connect();
		$query = "SELECT trackingNumber,DateTime,Document,Status FROM tracking,document_type WHERE Status='ONGOING' and tracking.idDocument_Type= document_type.idDocument_Type ORDER BY idTracking DESC";
		$result = $con->select($query);
		return $result;
	}
	public function getLocationDeptByTrackingNumber($trackingNumber){
		$con = new Connect();
		$query="SELECT location.status,department.Department FROM tracking JOIN inbox_info ON tracking.idinbox_info = inbox_info.idinbox_info JOIN location ON tracking.idtracking = location.idTracking JOIN accounts ON accounts.idAccounts = location.idAccounts JOIN department ON department.idDepartment = accounts.idDepartment WHERE tracking.Status='ONGOING' and trackingNumber ='".$trackingNumber."'";
		$result = $con->select($query);
		return $result;
	}
	public function getLocationCoopByTrackingNumber($trackingNumber){
		$con = new Connect();
		$query = "SELECT location.status ,cooperative_profile.Cooperative_Name FROM tracking,location,inbox_info,accounts,cooperative_profile WHERE tracking.Status='ONGOING' and tracking.idinbox_info= inbox_info.idinbox_info and location.idAccounts= accounts.idAccounts and tracking.idTracking = location.idTracking and accounts.idCooperative_Profile = cooperative_profile.idCooperative_Profile and trackingNumber ='".$trackingNumber."'";
		$result = $con-> select($query);
		return $result;
	}
	public function getTrackingInfo($trackingNumber){
		$con = new Connect();
		//checking
		$query ="SELECT tracking.idAccounts,idDepartment,idCooperative_Profile FROM tracking,accounts WHERE tracking.idAccounts = accounts.idAccounts and trackingNumber='".$trackingNumber."'";
		$result = $con->select($query);
		if($result){
			foreach ($result as $info) {
				if($info['idCooperative_Profile']==NULL){
					$query ="SELECT trackingNumber,DateTime,Document,Status,Email_Address,filePath, CONCAT(account_info.First_Name, ' ', account_info.Last_Name) as name FROM tracking,document_type,accounts,account_info WHERE Status='ONGOING' and tracking.idDocument_Type= document_type.idDocument_Type and tracking.idAccounts= accounts.idAccounts and accounts.idAccount_Info = account_info.idAccount_Info and trackingNumber ='".$trackingNumber."'";
					$result = $con->select($query);
					return $result;
				}
				else{
					$query ="SELECT trackingNumber,DateTime,Document,tracking.Status,Email_Address,filePath, CONCAT(Cooperative_Name) as name FROM tracking,document_type,accounts,cooperative_profile WHERE tracking.Status='ONGOING' and tracking.idDocument_Type= document_type.idDocument_Type and tracking.idAccounts= accounts.idAccounts and accounts.idCooperative_Profile = cooperative_profile.idCooperative_Profile and trackingNumber ='".$trackingNumber."'";
					$result = $con->select($query);
					return $result;

				}
			}
		}
	}
	public function getTrackingCountById($id){
		$con = new Connect();
		$query = "SELECT count(*) FROM tracking,document_type WHERE Status='ONGOING' and tracking.idDocument_Type= document_type.idDocument_Type and idAccounts= ".$id." ORDER BY idTracking DESC";
		$result = $con->select($query);
		return $result;
	}
	public function getInboxCountById($id){
		//check this.
		$con = new Connect();
		$query = "SELECT count(*) FROM tracking,inbox_info,location WHERE tracking.idinbox_info = inbox_info.idinbox_info and location.idTracking = tracking.idTracking and tracking.Status = 'ONGOING' and location.idAccounts =$id";
		$result = $con->select($query);
		return $result;
	}
	public function inboxCoopById($id){
		$con = new Connect();
		$query ="SELECT *,COALESCE (department,cooperative_name,concat(first_name,' ', last_name)) as name from tracking JOIN inbox_info ON inbox_info.idinbox_info = tracking.idinbox_info JOIN location ON location.idTracking = tracking.idTracking LEFT OUTER JOIN accounts ON accounts.idAccounts = tracking.idAccounts LEFT OUTER JOIN department ON department.idDepartment = accounts.idDepartment LEFT OUTER JOIN cooperative_profile ON cooperative_profile.idCooperative_Profile = accounts.idCooperative_Profile LEFT OUTER JOIN account_info ON account_info.idAccount_Info = accounts.idAccounts where tracking.status = 'ONGOING' and location.idAccounts = $id ORDER BY tracking.idTracking DESC";
		$result = $con->select($query);
		return $result;
	}
	public function getInboxInfo($idTracking,$id){
		$con = new Connect();
		$query ="SELECT tracking.idTracking,trackingNumber,title,message,filePath,needReply,COALESCE (department,cooperative_name,concat(first_name,' ', last_name)) as name,ifnull((SELECT email_address FROM account_info JOIN accounts ON accounts.idAccount_info = account_info.idAccount_Info where accounts.idaccounts = tracking .idAccounts),cooperative_profile.Email_Address) as email, DateTime FROM tracking LEFT OUTER JOIN inbox_info ON inbox_info.idinbox_info = tracking.idinbox_info LEFT OUTER JOIN location ON location.idTracking = tracking.idTracking JOIN document_type ON tracking.idDocument_Type = document_type.idDocument_Type LEFT OUTER JOIN accounts ON accounts.idAccounts = tracking.idAccounts LEFT OUTER JOIN department ON department.idDepartment = accounts.idDepartment LEFT OUTER JOIN cooperative_profile ON cooperative_profile.idCooperative_Profile = accounts.idCooperative_Profile LEFT OUTER JOIN account_info ON account_info.idAccount_Info = accounts.idAccounts where tracking.idTracking = $idTracking and location.idAccounts = $id";
		$result = $con->select($query);
		return $result;
	}
	public function getTrackingLocation($idTracking){
		$con = new Connect();
		$query ="SELECT location.idlocation,location.idAccounts,COALESCE (department,cooperative_name,concat(first_name,' ', last_name)) as name,ifnull((SELECT email_address FROM account_info JOIN accounts ON accounts.idAccount_info = account_info.idAccount_Info where accounts.idaccounts = location.idAccounts),cooperative_profile.Email_Address) as email FROM tracking  LEFT OUTER JOIN inbox_info ON inbox_info.idinbox_info = tracking.idinbox_info LEFT OUTER JOIN location ON location.idTracking = tracking.idTracking LEFT OUTER JOIN accounts ON accounts.idAccounts = location.idAccounts LEFT OUTER JOIN department ON department.idDepartment = accounts.idDepartment LEFT OUTER JOIN cooperative_profile ON cooperative_profile.idCooperative_Profile = accounts.idCooperative_Profile LEFT OUTER JOIN account_info ON account_info.idAccount_Info = accounts.idAccounts WHERE tracking.Status = 'ONGOING' and tracking.idTracking = $idTracking";
		$result = $con->select($query);
		return $result;
	}
	public function getTrackingLocationById($idTracking,$id){
		$con = new Connect();
		$query ="SELECT location.idlocation,location.idAccounts,COALESCE (department,cooperative_name,concat(first_name,' ', last_name)) as name,ifnull((SELECT email_address FROM account_info JOIN accounts ON accounts.idAccount_info = account_info.idAccount_Info where accounts.idaccounts = location.idAccounts),cooperative_profile.Email_Address) as email FROM tracking LEFT OUTER JOIN inbox_info ON inbox_info.idinbox_info = tracking.idinbox_info LEFT OUTER JOIN location ON location.idTracking = tracking.idTracking LEFT OUTER JOIN accounts ON accounts.idAccounts = location.idAccounts LEFT OUTER JOIN department ON department.idDepartment = accounts.idDepartment LEFT OUTER JOIN cooperative_profile ON cooperative_profile.idCooperative_Profile = accounts.idCooperative_Profile LEFT OUTER JOIN account_info ON account_info.idAccount_Info = accounts.idAccounts WHERE tracking.Status = 'ONGOING' and tracking.idTracking = $idTracking and location.idAccounts = $id";
		$result = $con->select($query);
		return $result;
	}
	public function changeInboxStatus($id,$idTracking){
		$con = new Connect();
		$query = "UPDATE location  SET status ='RECEIVED' WHERE idAccounts = $id and idTracking = $idTracking";
		$result = $con->update($query);
		return $result;
	}
	// public function replyByIdTracking($id,$idTracking){
	// 	$con = new Connect();
	// 	$query = "INSERT INTO inbox_info"
	// }

}
?>
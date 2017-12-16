<?php
require("../config/config.php");
class AccountHandler{

	public function getAccount($userName,$password){
		$con = new Connect();
		$query = "SELECT * FROM Accounts WHERE userName='".$userName."' AND password ='" .$password."'";
		$result = $con->select($query);
		return $result;
	}
	public function addCooperative($cooperativeName,$address,$telephoneNumber,$emailAddress,$CDA_Reg_No,$Date_of_Reg,$CIN,$orgAspectId,$respondentId,$businessOperationId,$commonBondOfMembershipId,$memberProfileId,$affiliation,$regulatoryId,$coopertaiveType,$areaId){
		$con = new Connect();
		$query = "INSERT INTO Cooperative_Profile(Cooperative_Name,Address,Telephone_Number,Email_Address,CDA_Reg_No,Date_of_Reg,CIN,idRespondent,idOrganizational_Aspect,idBusiness_Operation,Type_of_Cooperative_idType,idCommonBond_of_Membership,idarea_of_operation,idMembership_Profile,Affilation,idRegulatory_Requirements) VALUES('".$cooperativeName."','".$address."','".$telephoneNumber."','".$emailAddress."','".$CDA_Reg_No."','".$Date_of_Reg."','".$CIN."','".$respondentId."','".$orgAspectId."','".$businessOperationId."','".$coopertaiveType."','".$commonBondOfMembershipId."','".$areaId."','".$memberProfileId."','".$affiliation."','".$regulatoryId."')";
		$result = $con->insert($query);
		return $result;
	}
	public function addMemberProfile($totalMember,$totalMale,$totalFemale,$numberOfRegular,$numberOfAssociate,$trainingAttendByMember,$trainingAttendByOfficers,$trainingAttendByMgtStaff,$membershipCompositionId){
		$con = new Connect();
		$query = "INSERT INTO Membership_Profile(Total_Number_of_Membership,Total_Male,Total_Female,Number_of_Regular,Number_of_Associate,Training_Attended_by_Member,Training_Attended_by_Officers,Training_Attended_by_Mgt_Staff,idMembership_composition) VALUES('".$totalMember."','".$totalMale."','".$totalFemale."','".$numberOfRegular."','".$numberOfAssociate."','".$trainingAttendByMember."','".$trainingAttendByOfficers."','".$trainingAttendByMgtStaff."','".$membershipCompositionId."')";
		$memberProfileId = $con->insertReturnLastId($query);
		return $memberProfileId;
	}
	public function addRegulatoryRequirements($birNumber,$tin,$businessPermitNumber,$cocNumber,$cocDateOfIssue,$certificateOfTaxExemptionNumber){
		$con = new Connect();
		$query = "INSERT INTO Regulatory_Requirements(BIR_Number,TIN,Business_Permit_Number,COC_Number,COC_Date_of_Issue,Certificate_of_Tax_Exemption_Number) VALUES('".$birNumber."','".$tin."','".$businessPermitNumber."','".$cocNumber."','".$cocDateOfIssue."','"
			.$certificateOfTaxExemptionNumber."')";
		$regulatoryId = $con -> insertReturnLastId($query);
		return $regulatoryId;

	}
	public function addOrganizationalAspect($noOfBoardOfDirectors,$noOfEmployees,$chairman,$viceChairman,$manager,$secretary,$audit,$treasurer,$electionCommitteeChair,$medAndConciliation,$otherCommittee,$dateOfRegularMeeting,$dateOfMonthlyMeeting,$dateOfCommitteeMeeting){
		$con = new Connect();
		$query="INSERT INTO Organizational_Aspect(No_of_Board_of_Directors,No_of_Employees,BOD_Chairman,Manager,BOD_Vice_Chairman,Secretary,Audit,Treasurer,Election_Committee_Chair,Med_and_Conciliation,Other_Commitees,Date_of_Regular_Meeting,Date_of_Monthly_Meeting,Date_of_Commitee_Meeting) VALUES('".$noOfBoardOfDirectors."','".$noOfEmployees."','".$chairman."','".$manager."','".$viceChairman."','".$secretary."','".$audit."','".$treasurer."','".$electionCommitteeChair."','".$medAndConciliation."','".$otherCommittee."','".$dateOfRegularMeeting."','".$dateOfMonthlyMeeting."','".$dateOfCommitteeMeeting."')";
		$orgAspectId = $con->insertReturnLastId($query);
		return $orgAspectId;
	}
	public function addRespondent($respondentName,$respondentContactNumber,$position,$respondentEmailAddress){
		$con = new Connect();
		$query = "INSERT INTO Respondent(Name,Contact_Number,Position,Email_Address) VALUES('".$respondentName."','".$respondentContactNumber."','".$position."','".$respondentEmailAddress."')";
		$respondentId = $con->insertReturnLastId($query);
		return $respondentId;
	}
	public function addBusinessOperation($businessEngagedIn,$otherBusiness,$serviceOffered,$paidUpId,$coopAssetId,$assistingFinancialInstitution=""){
		$con = new Connect();
		$query="INSERT INTO Business_Operation(Business_Engaged_In,Other_Business,Services_Offered_to_Members,idCoop_Asset,idPaid_up_Capital,Assisting_Financial_Institution) VALUES('".$businessEngagedIn."','".$otherBusiness."','".$serviceOffered."','".$coopAssetId."','".$paidUpId."','".$assistingFinancialInstitution."')";
		$businessOperationId = $con->insertReturnLastId($query);
		return $businessOperationId;
	}
	public function addPaidUpCapital($totalPaidUp,$beginningPaidUp,$toDatePaidUp){
		$con = new Connect();
		$query = "INSERT INTO Paid_up_Capital(Total_Paid_up,Beginning,To_Date) VALUES('".$totalPaidUp."','".$beginningPaidUp."','".$toDatePaidUp."')";
		$paidUpId = $con->insertReturnLastId($query);
		return $paidUpId;
	}
	public function addCoopAsset($totalCoopAsset,$beginningAsset,$toDateAsset){
		$con = new Connect();
		$query = "INSERT INTO Coop_Asset(Total_Coop_Asset,Beginning,To_Date) VALUES('".$totalCoopAsset."','".$beginningAsset."','".$toDateAsset."')";
		$coopAssetId =$con->insertReturnLastId($query);
		return $coopAssetId;
	}
	public function getTypeOfCooperative(){
		$con= new Connect();
		$query="SELECT * FROM Type_of_Cooperative";
		$result=$con->select($query);
		return $result;
	}
	public function getMembership(){
		$con= new Connect();
		$query="SELECT * FROM CommonBond_of_Membership";
		$result=$con->select($query);
		return $result;
	}
	public function getAreaOfOperation(){
		$con= new Connect();
		$query="SELECT * FROM area_of_operation";
		$result=$con->select($query);
		return $result;
	}
	public function getMembershipComposition(){
		$con= new Connect();
		$query="SELECT * FROM Membership_composition";
		$result=$con->select($query);
		return $result;
	}

	public function addDepartmentAccountInfo($fisrtName,$lastName,$middleName,$nameSuffix,$cellnumber,$email,$position){
		$con = new Connect();
		$query = "INSERT INTO Account_Info (First_Name, Last_Name, Middle_Name,Name_Suffix,Cellphone_number,Email_Address,Position) VALUES ('" .$fisrtName."','".$lastName."','".$middleName."','".$nameSuffix."','".$cellnumber."','".$email."','".$position."')";
		$lastId = $con->insertReturnLastId($query);
		return $lastId;
	}

	public function addDepartmentAccount($userName,$password,$accountId,$departmentId,$accountType){
		$con = new Connect();
		$query = "INSERT INTO accounts (Username, Password, idAccount_Info, idDepartment, idaccount_type) VALUES ('" .$userName. "','" .$password. "'," .$accountId. "," .$departmentId. "," .$accountType. ")";
		$result = $con->insert($query);

	}
}
?>
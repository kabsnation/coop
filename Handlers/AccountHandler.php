<?php
require("../config/config.php");
class AccountHandler{

	public function getAccount($username,$password){
		$con = new Connect();
		$query = "SELECT * FROM Accounts WHERE username='".$username."' AND password ='" .$password."'";
		$result = $con->select($query);
		return $result;
	}
	public function addCooperative($cooperativeName,$address,$telephoneNumber,$emailAddress,$CDA_Reg_No,$Date_of_Reg,$CIN,$respondentName,$respondentContactNumber,$position,$respondentEmailAddress,$noOfBoardOfDirectors,$noOfEmployees,$chairman,$viceChairman,$manager,$secretary,$audit,$treasurer,$electionCommitteeChair,$medAndConciliation,$other_Committee,$dateOfRegularMeeting,$dateOfMonthlyMeeting,$dateOfCommitteeMeeting,$businessEngagedIn,$otherBusiness,$serviceOffered,$totalPaidUp,$beginningPaidUp,$toDatePaidUp,$totalCoopAsset,$beginningAsset,$toDateAsset,$birNumber,$tin,$businessPermitNumber,$cocNumber,$cocDateOfIssue,$certificateOfTaxExemptionNumber,$totalMember,$totalMale,$totalFemale,$numberOfRegular,$numberOfAssociate,$trainingAttendByMember,$trainingAttendByOfficers,$trainingAttendByMgtStaff,$idMembershipComposition,$idCommonBondOfMembership,$cooperativeType,$areaId){

		$query="";
	}

}
?>
<?php
include('../login/dbConnect.php');
session_start();

if ($_SERVER['REQUEST_METHOD']=="POST") {
	$ins = $_POST['ins'];
	if($ins=='Government') $insName = $_POST['govHosp']; else $insName = $_POST['pvtHosp'];
	$diseaseGroup = $_POST['diseaseGroup'];
	if($diseaseGroup=='Group A') $diseaseName = $_POST['groupA'];else $diseaseName = $_POST['groupB'];
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$nickName = isset($_POST['nickName'])? $_POST['nickName']:Null;
	$gender = $_POST['gender'];
	$onsetDate = $_POST['onsetYear'].'-'.$_POST['onsetMonth'].'-'.$_POST['onsetDay'];
	$regDate = $_POST['regYear'].'-'.$_POST['regMonth'].'-'.$_POST['regDay'];
	$regOrBHTNo = isset($_POST['regOrBHTNo'])? $_POST['regOrBHTNo']:Null;
	$ward = $_POST['ward'];
	if(!isset($_POST['year'])){
		$birthDate = $_POST['birthYear'].'-'.$_POST['birthMonth'].'-'.$_POST['birthDay'];
		$yearOfBirth = 0000;
	}else{
		$birthDate = Null;
		$yearOfBirth = $_POST['yearOfBirth'];
	}/*
	if(!isset($_POST['year'])) $age = date("Y")-$_POST['birthYear'];else $age = date("Y")-$_POST['yearOfBirth'];
	*/
	$age =  isset($_POST['age'])? $_POST['age']:Null;
	if($age>=18){
		$nextOfKinFirstName =  isset($_POST['nextOfKinFirstName'])? $_POST['nextOfKinFirstName']:Null;
	}else $nextOfKinFirstName = Null;
	if($age>=18){
		$nextOfKinLastName = isset($_POST['nextOfKinLastName'])? $_POST['nextOfKinLastName']:Null;
	}else $nextOfKinLastName = Null;
	if($age<18){
		$guardian = isset($_POST['guardian'])? $_POST['guardian']:Null;
	}else $guardian = Null;
	if($age<18){
		$guardianFirstName = isset($_POST['guardianFirstName'])? $_POST['guardianFirstName']:Null;
	}else $guardianFirstName = Null;
	if($age<18){
		$guardianLastName = isset($_POST['guardianLastName'])? $_POST['guardianLastName']:Null;
	}else $guardianLastName = Null;
		
	$ethnicGroup = Null;
	$labRes = $_POST['labRes'];
	if($labRes =='Not available'){
		$ns1 = Null;
		$igm = Null;
		$igg = Null;
	}else{
		$ns1 = isset($_POST['ns1'])? $_POST['ns1']:Null;
		$igm = isset($_POST['igm'])? $_POST['igm']:Null;
		$igg = isset($_POST['igg'])? $_POST['igg']:Null;
	}
	$resAddLine1 = $_POST['resAddLine1'];
	$resAddLine2 = isset($_POST['resAddLine2'])? $_POST['resAddLine2']:Null;    
	$resGsDivName = $_POST['resGsDivName'];
	$resGsDiv = $_POST['resGsDiv'];
	$resDsDiv = $_POST['resDsDiv'];
	$resDistrict = $_POST['resDistrict'];
	$resProvince = $_POST['resProvince'];	
	$resMohArea = $_POST['resMohArea'];
	$resPhiRange = $_POST['resPhiRange'];
	$resLandmark = $_POST['resLandmark'];
	$curAddLine1 = isset($_POST['same'])? $_POST['resAddLine1']:$_POST['curAddLine1']; 
	$curAddLine2 = isset($_POST['same'])? $_POST['resAddLine2']:$_POST['curAddLine2']; 
	$curGsDivName = isset($_POST['same'])? $_POST['resGsDivName']:$_POST['curGsDivName'];
	$curGsDiv = isset($_POST['same'])? $_POST['resGsDiv']:$_POST['curGsDiv'];
	$curDsDiv = isset($_POST['same'])? $_POST['resDsDiv']:$_POST['curDsDiv'];
	$curDistrict = isset($_POST['same'])? $_POST['resDistrict']:$_POST['curDistrict'];
	$curProvince = isset($_POST['same'])? $_POST['resProvince']:$_POST['curProvince'];	
	$curMohArea = isset($_POST['same'])? $_POST['resMohArea']:$_POST['curMohArea'];
	$curPhiRange = isset($_POST['same'])? $_POST['resPhiRange']:$_POST['curPhiRange'];
	$curLandmark = isset($_POST['same'])? $_POST['resLandmark']:$_POST['curLandmark'];
	$contactNoMobile = $_POST['contactNoMobile'];
	$contactNoHome = $_POST['homeAreaCode'].$_POST['homePhoneNo'];
	$visitArea = isset($_POST['visitArea'])? $_POST['visitArea']:Null;
	
	$result = $mysqli->query("SELECT * FROM doctor WHERE userId = '" .$_SESSION['userId']. "'");
	if ($row = $result->fetch_assoc()) {
		$designation = $row['designation'];
	}
	
	if($mysqli->query("INSERT INTO patient(userId,insName,firstName,lastName,nickName,gender,birthDate,yearOfBirth,age,nextOfKinFirstName,nextOfKinLastName,guardian,guardianFirstName,guardianLastName,ethnicGroup,resAddLine1,resAddLine2,resGsDivName,resGsDiv,resDsDiv,resDistrict,resProvince,resMohArea,resPhiRange,resLandmark,curAddLine1,curAddLine2,curGsDivName,curGsDiv,curDsDiv,curDistrict,curProvince,curMohArea,curPhiRange,curLandmark,contactNoMobile,contactNoHome,visitArea) VALUES('" . $_SESSION['userId'] . "', '" . $insName . "', '" . $firstName . "', '" . $lastName . "', '" . $nickName . "', '" . $gender . "', '" . $birthDate . "', '" . $yearOfBirth . "', '" . $age . "', '" . $nextOfKinFirstName . "', '" . $nextOfKinLastName . "', '" . $guardian . "', '" . $guardianFirstName . "', '" . $guardianLastName . "', '" . $ethnicGroup . "', '" . $resAddLine1 . "', '" . $resAddLine2 . "', '" . $resGsDivName . "', '" . $resGsDiv . "', '" . $resDsDiv . "', '" . $resDistrict . "', '" . $resProvince . "', '" . $resMohArea . "', '" . $resPhiRange . "', '" . $resLandmark . "', '" . $curAddLine1 . "', '" . $curAddLine2 . "', '" . $curGsDivName . "', '" . $curGsDiv . "', '" . $curDsDiv . "', '" . $curDistrict . "', '" . $curProvince . "', '" . $curMohArea . "', '" . $curPhiRange . "', '" . $curLandmark . "', '" . $contactNoMobile . "', '" . $contactNoHome . "', '" . $visitArea . "')")){

		$_SESSION['paId'] = $mysqli->insert_id;
		
		$mysqli->query("INSERT INTO notification(userId,insName,paId,diseaseGroup,diseaseName,onsetDate,regDate,regOrBHTNo,ward,ns1,igm,igg,designation) VALUES('" . $_SESSION['userId'] . "', '" . $insName . "', '" . $_SESSION['paId'] . "', '" . $diseaseGroup . "', '" . $diseaseName . "', '" . $onsetDate . "', '" . $regDate . "', '" . $regOrBHTNo . "', '" . $ward . "', '" . $ns1 . "', '" . $igm . "', '" . $igg . "', '" . $designation . "')");

		echo "Data entered successfully";
		//header("Location: ../doctor/home.php"); 
	}else{
		echo $mysqli->error;
	}
}
?>
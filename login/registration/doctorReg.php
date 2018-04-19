<?php
include('../dbConnect.php');
session_start();

//check if form is submitted
if (isset($_POST['submit'])) {
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$regNo = $_POST['regNo'];
	$designation = $_POST['designation'];
	$addLine1 = $_POST['addLine1'];
	$addLine2 = isset($_POST['addLine2'])? $_POST['addLine2']:Null;    
	$province = $_POST['province'];
	$district = $_POST['district'];
	$contactNoOffice = $_POST['officeAreaCode'].$_POST['officePhoneNo'];
	$contactNoMobile = $_POST['contactNoMobile'];
	$hospital1 = isset($_POST['newHosp'])? $_POST['hospital1_2']:$_POST['hospital1_1'];
	$hospital2 = isset($_POST['hospital2'])? $_POST['hospital2']:Null;
	$hospital3 = isset($_POST['hospital3'])? $_POST['hospital3']:Null;
	$hospital4 = isset($_POST['hospital4'])? $_POST['hospital4']:Null;
	$hospital5 = isset($_POST['hospital5'])? $_POST['hospital5']:Null;
	$otherHospital = isset($_POST['otherHospital'])? $_POST['otherHospital']:Null;
	
	if($mysqli->query("INSERT INTO doctor(userId,firstName,lastName,gender,regNo,designation,addLine1,addLine2,province,district,contactNoOffice,contactNoMobile,hospital1,hospital2,hospital3,hospital4,hospital5,otherHospital) VALUES('" . $_SESSION['userId'] . "','" . $firstName . "', '" . $lastName . "', '" . $gender . "', '" . $regNo . "', '" . $designation . "', '" . $addLine1 . "', '" . $addLine2 . "', '" . $province . "', '" . $district . "', '" . $contactNoOffice . "', '" . $contactNoMobile . "', '" . $hospital1 . "', '" . $hospital2 . "', '" . $hospital3 . "', '" . $hospital4 . "', '" . $hospital5 . "', '" . $otherHospital . "')")){
		$mysqli->query("UPDATE users SET status='yes' WHERE id='" . $_SESSION['userId']. "'");
		$_SESSION['status'] = "yes";
		header("Location: ../../doctor/home.php"); 
	}else{
		echo $mysqli->error;
	}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html class="supernova">
<head>
<title>Registration-Doctor</title>
<link href="css/formCss.css" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="css/nova.css" />
<link type="text/css" media="print" rel="stylesheet" href="css/printForm.css" />
<link type="text/css" rel="stylesheet" href="css/form.css"/>
<style type="text/css">
    .form-label-left{
        width:150px !important;
    }.form-line{
        padding-top:12px;
        padding-bottom:12px;
    }.form-label-right{
        width:150px !important;
    }body, html{
        margin:0;
        padding:0;
        background:false;
    }.form-all{
        margin:0px auto;
        padding-top:0px;
        width:690px;
        color:#555 !important;
        font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
        font-size:14px;
    }.form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color: #555;
    }input[type=text], input[type=number] {
		height: 20px;		
	}
</style>
<script src="js/prototype.forms.js" type="text/javascript"></script>
<script src="js/jotform.forms.js" type="text/javascript"></script>
<script type="text/javascript">
   JotForm.setConditions([{"action":[{"id":"action_1479632889449","visibility":"Hide","isError":false,"field":"15"}],"id":"1479632898894","index":"0","link":"Any","priority":"0","terms":[{"id":"term_1479632889449","field":"14","operator":"isEmpty","value":"","isError":false}],"type":"field"},{"action":[{"id":"action_1479632861060","visibility":"Hide","isError":false,"field":"13"}],"id":"1479632880640","index":"1","link":"Any","priority":"1","terms":[{"id":"term_1479632861060","field":"14","operator":"isFilled","value":"","isError":false}],"type":"field"}]);
   JotForm.init(function(){
      setTimeout(function() {
          $('input_7').hint('### ### ####');
       }, 20);
	JotForm.clearFieldOnHide="disable";
	JotForm.onSubmissionError="jumpToFirstError";
   });
   function configureDistrict(id1,id2) {
    var Central = ['','Matale', 'Kandy', 'Nuwara Eliya'];
    var Eastern = ['','Trincomalee', 'Batticaloa', 'Ampara'];
    var NorthCentral = ['','Anuradhapura', 'Polonnaruwa'];
	var NorthWestern = ['','Puttalam', 'Kurunegala'];
    var Northern = ['','Jaffna', 'Kilinochchi', 'Mannar', 'Mullaitivu','Vavuniya'];
	var Sabaragamuwa = ['','Kegalle', 'Ratnapura'];
	var Southern = ['','Hambantota', 'Matara', 'Galle'];
	var Uva = ['','Badulla', 'Monaragala'];
	var Western = ['','Gampaha', 'Colombo','Kalutara'];

    switch (id1.value) {
        case 'Central':
            id2.options.length = 0;
            for (i = 0; i < Central.length; i++) {
                createOption(id2, Central[i], Central[i]);
            }
            break;
        case 'Eastern':
            id2.options.length = 0; 
			for (i = 0; i < Eastern.length; i++) {
				createOption(id2, Eastern[i], Eastern[i]);
            }
            break;
        case 'North Central':
            id2.options.length = 0;
            for (i = 0; i < NorthCentral.length; i++) {
                createOption(id2, NorthCentral[i], NorthCentral[i]);
            }
            break;
		case 'North Western':
            id2.options.length = 0;
            for (i = 0; i < NorthWestern.length; i++) {
                createOption(id2, NorthWestern[i], NorthWestern[i]);
            }
            break;
        case 'Northern':
            id2.options.length = 0; 
			for (i = 0; i < Northern.length; i++) {
				createOption(id2, Northern[i], Northern[i]);
            }
            break;
        case 'Sabaragamuwa':
            id2.options.length = 0;
            for (i = 0; i < Sabaragamuwa.length; i++) {
                createOption(id2, Sabaragamuwa[i], Sabaragamuwa[i]);
            }
            break;
		case 'Southern':
            id2.options.length = 0;
            for (i = 0; i < Southern.length; i++) {
                createOption(id2, Southern[i], Southern[i]);
            }
            break;
        case 'Uva':
            id2.options.length = 0; 
			for (i = 0; i < Uva.length; i++) {
				createOption(id2, Uva[i], Uva[i]);
            }
            break;
        case 'Western':
            id2.options.length = 0;
            for (i = 0; i < Western.length; i++) {
                createOption(id2, Western[i], Western[i]);
            }
            break;
        default:
            id2.options.length = 0;
            break;
    }
}
function createOption(id1, text, value) {
    var opt = document.createElement('option');
    opt.value = value;
    opt.text = text;
    id1.options.add(opt);
}
</script>
</head>
<body>
<form class="jotform-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" name="doctorRegForm" accept-charset="utf-8">
  <input type="hidden" name="formID" value="63231082385452" />
  <div class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group">
          <div class="header-text httal htvam">
            <h2 id="header_1" class="form-header">
              Registration-Doctor
            </h2>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fullname" id="id_3">
        <label class="form-label form-label-left form-label-auto" id="label_3" for="input_3">
          Full Name
          <span class="form-required"> * </span>
        </label>
        <div id="cid_3" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align: top;">
            <input class="form-textbox validate[required]" type="text" size="10" name="firstName" id="first_3" />
            <label class="form-sub-label" for="first_3" id="sublabel_first" style="min-height: 13px;"> First Name </label>
          </span>
          <span class="form-sub-label-container" style="vertical-align: top;">
            <input class="form-textbox validate[required]" type="text" size="15" name="lastName" id="last_3" />
            <label class="form-sub-label" for="last_3" id="sublabel_last" style="min-height: 13px;"> Last Name </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_22">
        <label class="form-label form-label-left form-label-auto" id="label_22" for="input_22">
        Gender <span class="form-required"> * </span>
        </label>
        <div id="cid_22" class="form-input jf-required">
        <div class="form-multiple-column" data-columnCount="3">
          <span class="form-radio-item">
          <span class="dragger-item"></span>
          <input type="radio" class="form-radio validate[required]" id="input_22_0" name="gender" value="Male" />
          <label id="label_input_22_0" for="input_22_0">
          Male </label>
          </span>
          <span class="form-radio-item">
          <span class="dragger-item">
          </span>
          <input type="radio" class="form-radio validate[required]" id="input_22_1" name="gender" value="Female" />
          <label id="label_input_22_1" for="input_22_1">
          Female </label>
          </span>
          <span class="form-radio-item">
          <span class="dragger-item">
          </span>
          <input type="radio" class="form-radio validate[required]" id="input_22_2" name="gender" value="Other" />
          <label id="label_input_22_2" for="input_22_2">
          Other </label>
          </span>
        </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_4">
        <label class="form-label form-label-left form-label-auto" id="label_4" for="input_4">
          Registration No
          <span class="form-required">*</span>
        </label>
        <div id="cid_4" class="form-input jf-required">
          <input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_4" name="regNo" size="20" value="" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_dropdown" id="id_21">
        <label class="form-label form-label-left form-label-auto" id="label_21" for="input_21">
          Designation
          <span class="form-required">*</span>
        </label>
        <div id="cid_21" class="form-input jf-required">
          <select class="form-dropdown validate[required]" style="width:150px;" id="input_21" name="designation">
            <option value="">  </option>
            <option value="Consultant Physician"> Consultant Physician </option>
            <option value="Doctor"> Doctor </option>
            <option value="General Physician"> General Physician</option>
            <option value="Physician"> Physician</option>
          </select>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_11">
        <label class="form-label form-label-left form-label-auto" id="label_11" for="input_11">
          Personal Address
          <span class="form-required"> *</span>
        </label>
        <div id="cid_11" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align: top;">
            <input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_11" name="addLine1" size="20" value="" />
            <label class="form-sub-label" for="input_11" style="min-height: 13px;"> Address Line 1 </label>
          </span>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_12">
        <label class="form-label form-label-left form-label-auto" id="label_12" for="input_12"> </label>
        <div id="cid_12" class="form-input">
          <span class="form-sub-label-container" style="vertical-align: top;">
            <input type="text" class=" form-textbox" data-type="input-textbox" id="input_12" name="addLine2" size="20" value="" />
            <label class="form-sub-label" for="input_12" style="min-height: 13px;"> Address Line 2 </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_dropdown" id="id_9">
        <label class="form-label form-label-left form-label-auto" id="label_9" for="input_9">
          <span class="form-required">* </span>
        </label>
        <div id="cid_9" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align: top;">
            <select class="form-dropdown validate[required]" style="width:150px;" id="input_9" name="province" onchange="configureDistrict(this,document.getElementById('input_10'))">
              <option value=""></option>
					<option value="Central">Central</option>
					<option value="Eastern">Eastern</option>
					<option value="North Central">North Central </option>
					<option value="North Western">North Western</option>
					<option value="Northern">Northern</option>
					<option value="Sabaragamuwa">Sabaragamuwa</option>
					<option value="Southern">Southern</option>
					<option value="Uva">Uva</option>
					<option value="Western">Western</option>
            </select>
            <label class="form-sub-label" for="input_9" style="min-height: 13px;"> Province </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_dropdown" id="id_10">
        <label class="form-label form-label-left form-label-auto" id="label_10" for="input_10">
          <span class="form-required">* </span>
        </label>
        <div id="cid_10" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align: top;">
            <select class="form-dropdown validate[required]" style="width:150px;" id="input_10" name="district">
            </select>
            <label class="form-sub-label" for="input_10" style="min-height: 13px;"> District </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_phone" id="id_6">
        <label class="form-label form-label-left form-label-auto" id="label_6" for="input_6">
          Contact No - Office
          <span class="form-required">* </span>
        </label>
        <div id="cid_6" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align: top;">
            <input placeholder="(###)" class="form-textbox validate[required]" type="tel" name="officeAreaCode" id="input_6_area" size="3">
            <span class="phone-separate">
              &nbsp;-
            </span>
            <label class="form-sub-label" for="input_6_area" id="sublabel_area" style="min-height: 13px;"> Area Code </label>
          </span>
          <span class="form-sub-label-container" style="vertical-align: top;">
            <input placeholder="#######" class="form-textbox validate[required]" type="tel" name="officePhoneNo" id="input_6_phone" size="8">
            <label class="form-sub-label" for="input_6_phone" id="sublabel_phone" style="min-height: 13px;"> Phone Number </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_7">
        <label class="form-label form-label-left form-label-auto" id="label_7" for="input_7">
          Contact No - Mobile
          <span class="form-required">* </span>
        </label>
        <div id="cid_7" class="form-input jf-required">
          <input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_7" name="contactNoMobile" size="18" value="" />
        </div>
      </li>
      <li class="form-line jf-required form-field-hidden" style="display:none;" data-type="control_dropdown" id="id_13">
        <label class="form-label form-label-left form-label-auto" id="label_13" for="input_13">
          Hospital 1
          <span class="form-required">* </span>
        </label>
        <div id="cid_13" class="form-input jf-required">
          <select class="form-dropdown validate[required]" style="width:190px;" id="input_13" name="hospital1_1">
            <option value="">  </option>
            <option value="Govenment"> Govenment </option>
            <option value="Jaffna Teaching Hospital"> Jaffna Teaching Hospital </option>
            <option value="Private"> Private </option>
            <option value="New Yarl Hospital"> New Yarl Hospital </option>
            <option value="Northern Central Hospitals (pvt)"> Northern Central Hospitals (pvt) </option>
            <option value="Rakavo Hospital"> Rakavo Hospital </option>
            <option value="Ruhlins Hospital"> Ruhlins Hospital </option>
            <option value="Sujeeva Hospital"> Sujeeva Hospital </option>
            <option value="Nagaa Medical Centre"> Nagaa Medical Centre </option>
            <option value="Sampanthar Modern Clinic"> Sampanthar Modern Clinic </option>
            <option value="Shan's Health Care"> Shan's Health Care </option>
            <option value="Divisional Hospital"> Divisional Hospital </option>
            <option value="Sunrice Medi Clinic"> Sunrice Medi Clinic </option>
            <option value="Royal Medical Centre"> Royal Medical Centre </option>
            <option value="Mangalapathy Siddha Ayurvedic"> Mangalapathy Siddha Ayurvedic </option>
            <option value="Shanthe Medi Clinic"> Shanthe Medi Clinic </option>
            <option value="Pillaiyar Medi Clinic"> Pillaiyar Medi Clinic </option>
            <option value="Modern New Medi Care Hospital"> Modern New Medi Care Hospital </option>
            <option value="Care &amp; Cure"> Care &amp; Cure </option>
            <option value="Renny Dental &amp; Optical Service"> Renny Dental &amp; Optical Service </option>
            <option value="Dental Surgery"> Dental Surgery </option>
            <option value="Life Care Medi Cilinic"> Life Care Medi Cilinic </option>
            <option value="Renny Dental &amp; Optical Service"> Renny Dental &amp; Optical Service </option>
            <option value="Suharni Hospital"> Suharni Hospital </option>
          </select>
        </div>
      </li>
      <li class="form-line jf-required form-field-hidden" style="display:none;" data-type="control_textbox" id="id_15">
        <label class="form-label form-label-left form-label-auto" id="label_15" for="input_15">
          Hospital 1
          <span class="form-required">*</span>
        </label>
        <div id="cid_15" class="form-input jf-required">
          <input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_15" name="hospital1_2" size="20" value="" />
        </div>
      </li>
      <li class="form-line" data-type="control_checkbox" id="id_14">
        <label class="form-label form-label-left form-label-auto" id="label_14" for="input_14">  </label>
        <div id="cid_14" class="form-input jf-required">
          <div class="form-single-column">
            <span class="form-checkbox-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_14_0" name="newHosp" value="Other New" />
              <label id="label_input_14_0" for="input_14_0"> Other New </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_dropdown" id="id_16">
        <label class="form-label form-label-left form-label-auto" id="label_16" for="input_16"> Hospital 2 </label>
        <div id="cid_16" class="form-input jf-required">
          <select class="form-dropdown" style="width:190px;" id="input_16" name="hospital2">
            <option value="">  </option>
            <option value="Govenment"> Govenment </option>
            <option value="Jaffna Teaching Hospital"> Jaffna Teaching Hospital </option>
            <option value="Private"> Private </option>
            <option value="New Yarl Hospital"> New Yarl Hospital </option>
            <option value="Northern Central Hospitals (pvt)"> Northern Central Hospitals (pvt) </option>
            <option value="Rakavo Hospital"> Rakavo Hospital </option>
            <option value="Ruhlins Hospital"> Ruhlins Hospital </option>
            <option value="Sujeeva Hospital"> Sujeeva Hospital </option>
            <option value="Nagaa Medical Centre"> Nagaa Medical Centre </option>
            <option value="Sampanthar Modern Clinic"> Sampanthar Modern Clinic </option>
            <option value="Shan's Health Care"> Shan's Health Care </option>
            <option value="Divisional Hospital"> Divisional Hospital </option>
            <option value="Sunrice Medi Clinic"> Sunrice Medi Clinic </option>
            <option value="Royal Medical Centre"> Royal Medical Centre </option>
            <option value="Mangalapathy Siddha Ayurvedic"> Mangalapathy Siddha Ayurvedic </option>
            <option value="Shanthe Medi Clinic"> Shanthe Medi Clinic </option>
            <option value="Pillaiyar Medi Clinic"> Pillaiyar Medi Clinic </option>
            <option value="Modern New Medi Care Hospital"> Modern New Medi Care Hospital </option>
            <option value="Care &amp; Cure"> Care &amp; Cure </option>
            <option value="Renny Dental &amp; Optical Service"> Renny Dental &amp; Optical Service </option>
            <option value="Dental Surgery"> Dental Surgery </option>
            <option value="Life Care Medi Cilinic"> Life Care Medi Cilinic </option>
            <option value="Renny Dental &amp; Optical Service"> Renny Dental &amp; Optical Service </option>
            <option value="Suharni Hospital"> Suharni Hospital </option>
          </select>
        </div>
      </li>
      <li class="form-line" data-type="control_dropdown" id="id_17">
        <label class="form-label form-label-left form-label-auto" id="label_17" for="input_17"> Hospital 3 </label>
        <div id="cid_17" class="form-input jf-required">
          <select class="form-dropdown" style="width:190px;" id="input_17" name="hospital3">
            <option value="">  </option>
            <option value="Govenment"> Govenment </option>
            <option value="Jaffna Teaching Hospital"> Jaffna Teaching Hospital </option>
            <option value="Private"> Private </option>
            <option value="New Yarl Hospital"> New Yarl Hospital </option>
            <option value="Northern Central Hospitals (pvt)"> Northern Central Hospitals (pvt) </option>
            <option value="Rakavo Hospital"> Rakavo Hospital </option>
            <option value="Ruhlins Hospital"> Ruhlins Hospital </option>
            <option value="Sujeeva Hospital"> Sujeeva Hospital </option>
            <option value="Nagaa Medical Centre"> Nagaa Medical Centre </option>
            <option value="Sampanthar Modern Clinic"> Sampanthar Modern Clinic </option>
            <option value="Shan's Health Care"> Shan's Health Care </option>
            <option value="Divisional Hospital"> Divisional Hospital </option>
            <option value="Sunrice Medi Clinic"> Sunrice Medi Clinic </option>
            <option value="Royal Medical Centre"> Royal Medical Centre </option>
            <option value="Mangalapathy Siddha Ayurvedic"> Mangalapathy Siddha Ayurvedic </option>
            <option value="Shanthe Medi Clinic"> Shanthe Medi Clinic </option>
            <option value="Pillaiyar Medi Clinic"> Pillaiyar Medi Clinic </option>
            <option value="Modern New Medi Care Hospital"> Modern New Medi Care Hospital </option>
            <option value="Care &amp; Cure"> Care &amp; Cure </option>
            <option value="Renny Dental &amp; Optical Service"> Renny Dental &amp; Optical Service </option>
            <option value="Dental Surgery"> Dental Surgery </option>
            <option value="Life Care Medi Cilinic"> Life Care Medi Cilinic </option>
            <option value="Renny Dental &amp; Optical Service"> Renny Dental &amp; Optical Service </option>
            <option value="Suharni Hospital"> Suharni Hospital </option>
          </select>
        </div>
      </li>
      <li class="form-line" data-type="control_dropdown" id="id_18">
        <label class="form-label form-label-left form-label-auto" id="label_18" for="input_18"> Hospital 4 </label>
        <div id="cid_18" class="form-input jf-required">
          <select class="form-dropdown" style="width:190px;" id="input_18" name="hospital4">
            <option value="">  </option>
            <option value="Govenment"> Govenment </option>
            <option value="Jaffna Teaching Hospital"> Jaffna Teaching Hospital </option>
            <option value="Private"> Private </option>
            <option value="New Yarl Hospital"> New Yarl Hospital </option>
            <option value="Northern Central Hospitals (pvt)"> Northern Central Hospitals (pvt) </option>
            <option value="Rakavo Hospital"> Rakavo Hospital </option>
            <option value="Ruhlins Hospital"> Ruhlins Hospital </option>
            <option value="Sujeeva Hospital"> Sujeeva Hospital </option>
            <option value="Nagaa Medical Centre"> Nagaa Medical Centre </option>
            <option value="Sampanthar Modern Clinic"> Sampanthar Modern Clinic </option>
            <option value="Shan's Health Care"> Shan's Health Care </option>
            <option value="Divisional Hospital"> Divisional Hospital </option>
            <option value="Sunrice Medi Clinic"> Sunrice Medi Clinic </option>
            <option value="Royal Medical Centre"> Royal Medical Centre </option>
            <option value="Mangalapathy Siddha Ayurvedic"> Mangalapathy Siddha Ayurvedic </option>
            <option value="Shanthe Medi Clinic"> Shanthe Medi Clinic </option>
            <option value="Pillaiyar Medi Clinic"> Pillaiyar Medi Clinic </option>
            <option value="Modern New Medi Care Hospital"> Modern New Medi Care Hospital </option>
            <option value="Care &amp; Cure"> Care &amp; Cure </option>
            <option value="Renny Dental &amp; Optical Service"> Renny Dental &amp; Optical Service </option>
            <option value="Dental Surgery"> Dental Surgery </option>
            <option value="Life Care Medi Cilinic"> Life Care Medi Cilinic </option>
            <option value="Renny Dental &amp; Optical Service"> Renny Dental &amp; Optical Service </option>
            <option value="Suharni Hospital"> Suharni Hospital </option>
          </select>
        </div>
      </li>
      <li class="form-line" data-type="control_dropdown" id="id_19">
        <label class="form-label form-label-left form-label-auto" id="label_19" for="input_19"> Hospital 5 </label>
        <div id="cid_19" class="form-input jf-required">
          <select class="form-dropdown" style="width:190px;" id="input_19" name="hospital5">
            <option value="">  </option>
            <option value="Govenment"> Govenment </option>
            <option value="Jaffna Teaching Hospital"> Jaffna Teaching Hospital </option>
            <option value="Private"> Private </option>
            <option value="New Yarl Hospital"> New Yarl Hospital </option>
            <option value="Northern Central Hospitals (pvt)"> Northern Central Hospitals (pvt) </option>
            <option value="Rakavo Hospital"> Rakavo Hospital </option>
            <option value="Ruhlins Hospital"> Ruhlins Hospital </option>
            <option value="Sujeeva Hospital"> Sujeeva Hospital </option>
            <option value="Nagaa Medical Centre"> Nagaa Medical Centre </option>
            <option value="Sampanthar Modern Clinic"> Sampanthar Modern Clinic </option>
            <option value="Shan's Health Care"> Shan's Health Care </option>
            <option value="Divisional Hospital"> Divisional Hospital </option>
            <option value="Sunrice Medi Clinic"> Sunrice Medi Clinic </option>
            <option value="Royal Medical Centre"> Royal Medical Centre </option>
            <option value="Mangalapathy Siddha Ayurvedic"> Mangalapathy Siddha Ayurvedic </option>
            <option value="Shanthe Medi Clinic"> Shanthe Medi Clinic </option>
            <option value="Pillaiyar Medi Clinic"> Pillaiyar Medi Clinic </option>
            <option value="Modern New Medi Care Hospital"> Modern New Medi Care Hospital </option>
            <option value="Care &amp; Cure"> Care &amp; Cure </option>
            <option value="Renny Dental &amp; Optical Service"> Renny Dental &amp; Optical Service </option>
            <option value="Dental Surgery"> Dental Surgery </option>
            <option value="Life Care Medi Cilinic"> Life Care Medi Cilinic </option>
            <option value="Renny Dental &amp; Optical Service"> Renny Dental &amp; Optical Service </option>
            <option value="Suharni Hospital"> Suharni Hospital </option>
          </select>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_20">
        <label class="form-label form-label-left form-label-auto" id="label_20" for="input_20"> Other Hospital </label>
        <div id="cid_20" class="form-input jf-required">
          <input type="text" class=" form-textbox" data-type="input-textbox" id="input_20" name="otherHospital" size="20" value="" />
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="margin-left:156px" class="form-buttons-wrapper">
			<input type="submit" name="submit" value="Submit" class="form-submit-button">
            <!--button id="input_2" type="submit" class="form-submit-button">
              Submit
            </button-->
          </div>
        </div>
      </li>
    </ul>
  </div>
</form>
</body>
</html>
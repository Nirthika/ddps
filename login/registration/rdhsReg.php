<?php
include('../dbConnect.php');
session_start();

//check if form is submitted
if (isset($_POST['submit'])) {
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$rdhsDiv = $_POST['rdhsDiv'];
	$addLine1 = $_POST['addLine1'];
	$addLine2 = isset($_POST['addLine2'])? $_POST['addLine2']:Null;    
	$province = $_POST['province'];
	$district = $_POST['district'];
	$contactNoOffice = $_POST['officeAreaCode'].$_POST['officePhoneNo'];
	$contactNoMobile = $_POST['contactNoMobile'];
	$institute = $_POST['institute'];
	
	if($mysqli->query("INSERT INTO rdhs(userId,insName,firstName,lastName,rdhsDiv,addLine1,addLine2,province,district,contactNoOffice,contactNoMobile) VALUES('" . $_SESSION['userId'] . "','" . $institute . "','" . $firstName . "', '" . $lastName . "', '" . $rdhsDiv . "', '" . $addLine1 . "', '" . $addLine2 . "', '" . $province . "', '" . $district . "', '" . $contactNoOffice . "', '" . $contactNoMobile . "')")){
		$mysqli->query("UPDATE users SET status='yes' WHERE id='" . $_SESSION['userId']. "'");
		$_SESSION['status'] = "yes";
		header("Location: ../../rdhs/home.php"); 
	}else{
		echo $mysqli->error;
	}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html class="supernova"><head>
<title>Registration-RDHS</title>
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
</script>
</head>
<body>
<form class="jotform-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" name="rdhsRegForm" accept-charset="utf-8">
  <input type="hidden" name="formID" value="63241962115451" />
  <div class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group">
          <div class="header-text httal htvam">
            <h2 id="header_1" class="form-header">
              Registration-RDHS
            </h2>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fullname" id="id_3">
        <label class="form-label form-label-left form-label-auto" id="label_3" for="input_3">
          Full Name
          <span class="form-required">*</span>
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
      <li class="form-line jf-required" data-type="control_textbox" id="id_4">
        <label class="form-label form-label-left form-label-auto" id="label_4" for="input_4">
          RDHS Div
          <span class="form-required">*</span>
        </label>
        <div id="cid_4" class="form-input jf-required">
          <input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_4" name="rdhsDiv" size="20" value="" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_11">
        <label class="form-label form-label-left form-label-auto" id="label_11" for="input_11">
          Personal Address
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_11" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align: top;">
            <input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_11" name="addLine1" size="20" value="" />
            <label class="form-sub-label" for="input_11" style="min-height: 13px;"> Address Line 1 </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_12">
        <label class="form-label form-label-left form-label-auto" id="label_12" for="input_12">
          <span class="form-required">*</span>
        </label>
        <div id="cid_12" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align: top;">
            <input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_12" name="addLine2" size="20" value="" />
            <label class="form-sub-label" for="input_12" style="min-height: 13px;"> Address Line 2 </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_dropdown" id="id_9">
        <label class="form-label form-label-left form-label-auto" id="label_9" for="input_9">
          <span class="form-required">*</span>
        </label>
        <div id="cid_9" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align: top;">
            <select class="form-dropdown validate[required]" style="width:150px;" id="input_9" name="province">
              <option value="">  </option>
              <option value="Option 1"> Option 1 </option>
              <option value="Option 2"> Option 2 </option>
              <option value="Option 3"> Option 3 </option>
            </select>
            <label class="form-sub-label" for="input_9" style="min-height: 13px;"> Province </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_dropdown" id="id_10">
        <label class="form-label form-label-left form-label-auto" id="label_10" for="input_10">
          <span class="form-required"> * </span>
        </label>
        <div id="cid_10" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align: top;">
            <select class="form-dropdown validate[required]" style="width:150px;" id="input_10" name="district">
              <option value="">  </option>
              <option value="Option 1"> Option 1 </option>
              <option value="Option 2"> Option 2 </option>
              <option value="Option 3"> Option 3 </option>
            </select>
            <label class="form-sub-label" for="input_10" style="min-height: 13px;"> District </label>
          </span>
        </div>
      </li>
      <li class="form-line" data-type="control_phone" id="id_6">
        <label class="form-label form-label-left form-label-auto" id="label_6" for="input_6"> Contact No - Office </label>
        <div id="cid_6" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align: top;">
            <input placeholder="(###)" class="form-textbox" type="tel" name="officeAreaCode" id="input_6_area" size="3">
            <span class="phone-separate">
              &nbsp;-
            </span>
            <label class="form-sub-label" for="input_6_area" id="sublabel_area" style="min-height: 13px;"> Area Code </label>
          </span>
          <span class="form-sub-label-container" style="vertical-align: top;">
            <input placeholder="#######" class="form-textbox" type="tel" name="officePhoneNo" id="input_6_phone" size="8">
            <label class="form-sub-label" for="input_6_phone" id="sublabel_phone" style="min-height: 13px;"> Phone Number </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_7">
        <label class="form-label form-label-left form-label-auto" id="label_7" for="input_7">
          Contact No - Mobile
          <span class="form-required">*</span>
        </label>
        <div id="cid_7" class="form-input jf-required">
          <input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_7" name="contactNoMobile" size="18" value="" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_dropdown" id="id_13">
        <label class="form-label form-label-left form-label-auto" id="label_13" for="input_13">
          Institute
          <span class="form-required">*</span>
        </label>
        <div id="cid_13" class="form-input jf-required">
          <select class="form-dropdown validate[required]" style="width:190px;" id="input_13" name="institute">
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
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="margin-left:156px" class="form-buttons-wrapper">
            <button id="input_2" type="submit" class="form-submit-button">
              Submit
            </button>
          </div>
        </div>
      </li>
    </ul>
  </div>
</form>
</body>
</html>
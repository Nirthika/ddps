<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html class="supernova">
<head>
<title>H411a Form</title>
<script src="js/prototype.forms.js" type="text/javascript">
</script>
<script src="js/jotform.forms.js" type="text/javascript">
</script>
<script type="text/javascript">
JotForm.setConditions([
	{"action":[{"id":"action_1471511712467","visibility":"Show","isError":false,"field":"12"}],"id":"1471511751986","index":"0","link":"Any","priority":"0","terms":[{"id":"term_1471511712467","field":"11","operator":"equals","value":"Other","isError":false}],"type":"field"}
]); 
JotForm.init(function(){ 
	JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"]; 
	JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"]; 
	JotForm.calendarOther = {"today":"Today"}; 
	JotForm.setCalendar("7", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":false,"past":true,"custom":false,"ranges":false,"start":"","end":""}); 
	JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
	JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"]; 
	JotForm.calendarOther = {"today":"Today"}; 
	JotForm.setCalendar("17", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":false,"past":true,"custom":false,"ranges":false,"start":"","end":""}); 
	JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"]; 
	JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"]; 
	JotForm.calendarOther = {"today":"Today"}; 
	JotForm.setCalendar("18", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":false,"past":true,"custom":false,"ranges":false,"start":"","end":""}); 
	JotForm.clearFieldOnHide="disable"; 
	JotForm.onSubmissionError="jumpToFirstError";
});
function getAge() {
	var birthYear = document.getElementById("year_7").value;
	var today = new Date();
	var age = today.getFullYear() - birthYear;
	document.getElementById("id_age").innerHTML = age;
} 
</script>
<link href="css/formCss.css" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="css/nova.css" />
<link type="text/css" media="print" rel="stylesheet" href="css/printForm.css" />
<link type="text/css" rel="stylesheet" href="css/form.css"/>
<style type="text/css">
	.form-label-left{ 
		width:180px !important; 
	}.form-line{ 
		padding-top:12px; 
		padding-bottom:12px; 
	}.form-label-right{ 
		width:150px !important; 
	}.form-all{ 
		width:100%; 
		color:#555 !important; 
		font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif; 
		font-size:14px; 
	}.form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{ 
		color: #555; 
	}.eachtd:hover{
		background-color: #f5f5f5;
	}input[type=text], input[type=number] {
		height: 20px;		
	}
</style>
</head>
<body>
<center>
<form class="jotform-form" action="https://submit.jotform.me/submit/62302233846450/" method="post" name="form_62302233846450" id="62302233846450" accept-charset="utf-8">
<div class="form-all">
<ul class="form-section page-section">
<table rules="cols">
<tr>
<td colspan="2">
	<li id="cid_3" class="form-input-wide" data-type="control_head">
	<div class="form-header-group">
	<div class="header-text httal htvam">
	<center>
	<h3>DEPARTMENT OF HEALTH</h3>
	</center>
	</div>
	</div>
	</li>
</td></tr><tr><td colspan="2">
	<li id="cid_1" class="form-input-wide" data-type="control_head">
	<div class="form-header-group">
	<div class="header-text httal htvam">
	<center>
	<h2 id="header_1" class="form-header">COMMUNICABLE DISEASE REPORT - PAET II </h2>
	<center>
	</div>
	</div>
	</li>
</td></tr><tr><td>
	<table>
	<tr><td class="eachtd">
		<li class="form-line jf-required" data-type="control_dropdown" id="id_4">
		<label class="form-label form-label-left form-label-auto" id="label_4" for="input_4">
		R.D.H.S Division <span class="form-required">* </span>
		</label>
		<div id="cid_4" class="form-input jf-required">
		<select class="form-dropdown validate[required]" style="width:150px" id="input_4" name="rdhsDiv">
		<option value="">
		</option>
		<option value="Option 1">
		Option 1 </option>
		<option value="Option 2">
		Option 2 </option>
		<option value="Option 3">
		Option 3 </option>
		</select>
		</div>
		</li>
	</td></tr><tr><td class="eachtd">
		<li class="form-line jf-required" data-type="control_dropdown" id="id_5">
		<label class="form-label form-label-left form-label-auto" id="label_5" for="input_5">
		M.O.H Area <span class="form-required">	* </span>
		</label>
		<div id="cid_5" class="form-input jf-required">
		<select class="form-dropdown validate[required]" style="width:150px" id="input_5" name="mohArea">
		<option value="">
		</option>
		<option value="Chankanai">
		Chankanai </option>
		<option value="Chavakachcheri">
		Chavakachcheri </option>
		<option value="Jaffna">
		Jaffna </option>
		<option value="Karaveddy">
		Karaveddy </option>
		<option value="Kayta">
		Kayta </option>
		<option value="Kopay">
		Kopay </option>
		<option value="Nallur">
		Nallur </option>
		<option value="Point Pedro">
		Point Pedro </option>
		<option value="Sandilipay">
		Sandilipay </option>
		<option value="Tellippalai">
		Tellippalai </option>
		<option value="Uduvil">
		Uduvil </option>
		</select>
		</div>
		</li>
	</td></tr><tr><td class="eachtd">
		<li class="form-line jf-required" data-type="control_textbox" id="id_6">
		<label class="form-label form-label-left form-label-auto" id="label_6" for="input_6">
		M.O.H Registration No. <span class="form-required">	* </span>
		</label>
		<div id="cid_6" class="form-input jf-required">
		<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_6" name="mohRegNo" size="20" value="" />
		</div>
		</li>
	</td></tr><tr><td class="eachtd">
		<li class="form-line jf-required" data-type="control_datetime" id="id_7">
		<label class="form-label form-label-left form-label-auto" id="label_7" for="input_7">
		Date of Birth <span class="form-required">
		* </span>
		</label>
		<div id="cid_7" class="form-input jf-required">
		<span class="form-sub-label-container" style="vertical-align: top">
		<input class="form-textbox validate[required, limitDate]" id="day_7" name="birthDay" type="tel" size="2" maxlength="2" value="" />
		<span class="date-separate">
		&nbsp;- </span>
		<label class="form-sub-label" for="day_7" id="sublabel_day" style="min-height: 13px;">
		Day </label>
		</span>
		<span class="form-sub-label-container" style="vertical-align: top">
		<input class="form-textbox validate[required, limitDate]" id="month_7" name="birthMonth" type="tel" size="2" maxlength="2" value="" />
		<span class="date-separate">
		&nbsp;- </span>
		<label class="form-sub-label" for="month_7" id="sublabel_month" style="min-height: 13px;">
		Month </label>
		</span>
		<span class="form-sub-label-container" style="vertical-align: top">
		<input class="form-textbox validate[required, limitDate]" id="year_7" name="birthYear" type="tel" size="4" maxlength="4" value="" />
		<label class="form-sub-label" for="year_7" id="sublabel_year" style="min-height: 13px;">
		Year </label>
		</span>
		<span class="form-sub-label-container" style="vertical-align: top">
		<img alt="Pick a Date" id="input_7_pick" src="images/calendar.png" align="absmiddle" />
		<label class="form-sub-label" for="input_7_pick" style="min-height: 13px;">
		</label>
		</span>
		</div>
		</li>
	</td></tr><tr><td class="eachtd">
		<li class="form-line jf-required" data-type="control_number" id="id_8">
		<label class="form-label form-label-left form-label-auto" id="label_8" for="input_8">
		Age <span class="form-required">* </span>
		</label>
		<div id="cid_8" class="form-input jf-required">
		<label id="id_age" border="2" onClick="getAge()"></label>
		<label class="form-sub-label" for="input_20" style="min-height: 13px;" onClick="getAge()"> Click Here To Get Age </label>
		</div>
		</li>
	</td></tr><tr><td class="eachtd">
		<li class="form-line jf-required" data-type="control_radio" id="id_9">
		<label class="form-label form-label-left form-label-auto" id="label_9" for="input_9">
		Gender <span class="form-required">
		* </span>
		</label>
		<div id="cid_9" class="form-input jf-required">
		<div class="form-single-column">
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">
		</span>
		<input type="radio" class="form-radio validate[required]" id="input_9_0" name="gender" value="Male" />
		<label id="label_input_9_0" for="input_9_0">
		Male </label>
		</span>
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">
		</span>
		<input type="radio" class="form-radio validate[required]" id="input_9_1" name="gender" value="Female" />
		<label id="label_input_9_1" for="input_9_1">
		Female </label>
		</span>
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">
		</span>
		<input type="radio" class="form-radio validate[required]" id="input_9_2" name="gender" value="Other" />
		<label id="label_input_9_2" for="input_9_2">
		Other </label>
		</span>
		</div>
		</div>
		</li>
	</td></tr><tr><td class="eachtd">
		<li class="form-line jf-required" data-type="control_textbox" id="id_10">
		<label class="form-label form-label-left form-label-auto" id="label_10" for="input_10">
		Occupation <span class="form-required">
		* </span>
		</label>
		<div id="cid_10" class="form-input jf-required">
		<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_10" name="occupation" size="20" value="" />
		</div>
		</li>
	</td></tr><tr><td class="eachtd">
		<li class="form-line jf-required" data-type="control_radio" id="id_11">
		<label class="form-label form-label-left form-label-auto" id="label_11" for="input_11">
		Source of Notification <span class="form-required">
		* </span>
		</label>
		<div id="cid_11" class="form-input jf-required">
		<div class="form-single-column">
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">
		</span>
		<input type="radio" class="form-radio validate[required]" id="input_11_0" name="sourceOfNotify" value="Hospital" />
		<label id="label_input_11_0" for="input_11_0">
		Hospital </label>
		</span>
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">
		</span>
		<input type="radio" class="form-radio validate[required]" id="input_11_1" name="sourceOfNotify" value="Dispensary" />
		<label id="label_input_11_1" for="input_11_1">
		Dispensary </label>
		</span>
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">
		</span>
		<input type="radio" class="form-radio validate[required]" id="input_11_2" name="sourceOfNotify" value="P.H.I" />
		<label id="label_input_11_2" for="input_11_2">
		P.H.I </label>
		</span>
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">
		</span>
		<input type="radio" class="form-radio validate[required]" id="input_11_3" name="sourceOfNotify" value="Grama Sevaka" />
		<label id="label_input_11_3" for="input_11_3">
		Grama Sevaka </label>
		</span>
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">
		</span>
		<input type="radio" class="form-radio validate[required]" id="input_11_4" name="sourceOfNotify" value="School Teacher" />
		<label id="label_input_11_4" for="input_11_4">
		School Teacher </label>
		</span>
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">
		</span>
		<input type="radio" class="form-radio validate[required]" id="input_11_5" name="sourceOfNotify" value="Private Practitioner" />
		<label id="label_input_11_5" for="input_11_5">
		Private Practitioner </label>
		</span>
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">
		</span>
		<input type="radio" class="form-radio validate[required]" id="input_11_6" name="sourceOfNotify" value="Ayurvedic Physician" />
		<label id="label_input_11_6" for="input_11_6">
		Ayurvedic Physician </label>
		</span>
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">
		</span>
		<input type="radio" class="form-radio validate[required]" id="input_11_7" name="sourceOfNotify" value="Estate Superintendent" />
		<label id="label_input_11_7" for="input_11_7">
		Estate Superintendent </label>
		</span>
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">
		</span>
		<input type="radio" class="form-radio validate[required]" id="input_11_8" name="sourceOfNotify" value="Other" />
		<label id="label_input_11_8" for="input_11_8">
		Other </label>
		</span>
		</div>
		</div>
		</li>
	</td></tr><tr><td class="eachtd">
		<li class="form-line jf-required form-field-hidden" style="display:none;" data-type="control_textbox" id="id_12">
		<label class="form-label form-label-left form-label-auto" id="label_12" for="input_12">
		Specify <span class="form-required">
		* </span>
		</label>
		<div id="cid_12" class="form-input jf-required">
		<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_12" name="specify" size="20" value="" />
		</div>
		</li>
	</td></tr>
	</table>
</td>
<td>
	<table>
	<tr><td class="eachtd">	
		<li class="form-line jf-required" data-type="control_dropdown" id="id_13">
		<label class="form-label form-label-left form-label-auto" id="label_13" for="input_13">
		Disease as Notified <span class="form-required">* </span>
		</label>
		<div id="cid_13" class="form-input jf-required">
		<select class="form-dropdown validate[required]" style="width:150px" id="input_13" name="diseaseAsNotify">
		<option value=""></option>
		<option value="Chicken Pox">Chicken Pox </option>
		<option value="Cholera">Cholera </option>
		<option value="Dengue Fever/ Dengue Haemorragic Fever">Dengue Fever/ Dengue Haemorragic Fever </option>
		<option value="Diphtheria">Diphtheria </option>
		<option value="Dysentery">Dysentery </option>
		<option value="Encephalitis (including Japanese Encephalitis)">Encephalitis (including Japanese Encephalitis) </option>
		<option value="Enteric Fever">Enteric Fever </option>
		<option value="Food">Food </option>
		<option value="Human Rabies">Human Rabies </option>
		<option value="Leptospirosis">Leptospirosis </option>
		<option value="Malaria">Malaria </option>
		<option value="Measles">Measles </option>
		<option value="Meningitis">Meningitis </option>
		<option value="Mumps">Mumps </option>
		<option value="Paralysis">Paralysis </option>
		<option value="Pertussis">Pertussis </option>
		<option value="Plague">Plague </option>
		<option value="Poisoning">Poisoning </option>
		<option value="Polio Myelitis / Acute Flaccid">Polio Myelitis / Acute Flaccid </option>
		<option value="Rubella/Congenital Rubella Syndrome">Rubella/Congenital Rubella Syndrome </option>
		<option value="Severe Acute Respiratory Syndrome (SARS)">Severe Acute Respiratory Syndrome (SARS) </option>
		<option value="Simple continued fever of over 7 days or more">Simple continued fever of over 7 days or more </option>
		<option value="Tetanus/ Neonatal tetanus">Tetanus/ Neonatal tetanus </option>
		<option value="Tuberculosis">Tuberculosis </option>
		<option value="Typhus Fever">Typhus Fever </option>
		<option value="Viral Hepatitis">Viral Hepatitis </option>
		<option value="Yellow Fever">Yellow Fever </option>
		</select>
		</div>
		</li>
	</td></tr><tr><td class="eachtd">
		<li class="form-line jf-required" data-type="control_datetime" id="id_17">
		<label class="form-label form-label-left form-label-auto" id="label_17" for="input_17">
		Date of Notification <span class="form-required">
		* </span>
		</label>
		<div id="cid_17" class="form-input jf-required">
		<span class="form-sub-label-container" style="vertical-align: top">
		<input class="form-textbox validate[required, limitDate]" id="day_17" name="notifyDay" type="tel" size="2" maxlength="2" value="" />
		<span class="date-separate">
		&nbsp;- </span>
		<label class="form-sub-label" for="day_17" id="sublabel_day" style="min-height: 13px;">
		Day </label>
		</span>
		<span class="form-sub-label-container" style="vertical-align: top">
		<input class="form-textbox validate[required, limitDate]" id="month_17" name="notifyMonth" type="tel" size="2" maxlength="2" value="" />
		<span class="date-separate">
		&nbsp;- </span>
		<label class="form-sub-label" for="month_17" id="sublabel_month" style="min-height: 13px;">
		Month </label>
		</span>
		<span class="form-sub-label-container" style="vertical-align: top">
		<input class="form-textbox validate[required, limitDate]" id="year_17" name="notifyYear" type="tel" size="4" maxlength="4" value="" />
		<label class="form-sub-label" for="year_17" id="sublabel_year" style="min-height: 13px;">
		Year </label>
		</span>
		<span class="form-sub-label-container" style="vertical-align: top">
		<img alt="Pick a Date" id="input_17_pick" src="images/calendar.png" align="absmiddle" />
		<label class="form-sub-label" for="input_17_pick" style="min-height: 13px;">
		</label>
		</span>
		</div>
		</li>
	</td></tr><tr><td class="eachtd">
		<li class="form-line jf-required" data-type="control_dropdown" id="id_14">
		<label class="form-label form-label-left form-label-auto" id="label_14" for="input_14">
		Disease as Confirmed <span class="form-required">* </span>
		</label>
		<div id="cid_14" class="form-input jf-required">
		<select class="form-dropdown validate[required]" style="width:150px" id="input_14" name="diseaseAsConf">
		<option value=""></option>
		<option value="Chicken Pox">Chicken Pox </option>
		<option value="Cholera">Cholera </option>
		<option value="Dengue Fever/ Dengue Haemorragic Fever">Dengue Fever/ Dengue Haemorragic Fever </option>
		<option value="Diphtheria">Diphtheria </option>
		<option value="Dysentery">Dysentery </option>
		<option value="Encephalitis (including Japanese Encephalitis)">Encephalitis (including Japanese Encephalitis) </option>
		<option value="Enteric Fever">Enteric Fever </option>
		<option value="Food">Food </option>
		<option value="Human Rabies">Human Rabies </option>
		<option value="Leptospirosis">Leptospirosis </option>
		<option value="Malaria">Malaria </option>
		<option value="Measles">Measles </option>
		<option value="Meningitis">Meningitis </option>
		<option value="Mumps">Mumps </option>
		<option value="Paralysis">Paralysis </option>
		<option value="Pertussis">Pertussis </option>
		<option value="Plague">Plague </option>
		<option value="Poisoning">Poisoning </option>
		<option value="Polio Myelitis / Acute Flaccid">Polio Myelitis / Acute Flaccid </option>
		<option value="Rubella/Congenital Rubella Syndrome">Rubella/Congenital Rubella Syndrome </option>
		<option value="Severe Acute Respiratory Syndrome (SARS)">Severe Acute Respiratory Syndrome (SARS) </option>
		<option value="Simple continued fever of over 7 days or more">Simple continued fever of over 7 days or more </option>
		<option value="Tetanus/ Neonatal tetanus">Tetanus/ Neonatal tetanus </option>
		<option value="Tuberculosis">Tuberculosis </option>
		<option value="Typhus Fever">Typhus Fever </option>
		<option value="Viral Hepatitis">Viral Hepatitis </option>
		<option value="Yellow Fever">Yellow Fever </option>
		</select>
		</div>
		</li>
	</td></tr><tr><td class="eachtd">
		<li class="form-line jf-required" data-type="control_datetime" id="id_18">
		<label class="form-label form-label-left form-label-auto" id="label_18" for="input_18">
		Date of Confirmation <span class="form-required">
		* </span>
		</label>
		<div id="cid_18" class="form-input jf-required">
		<span class="form-sub-label-container" style="vertical-align: top">
		<input class="form-textbox validate[required, limitDate]" id="day_18" name="confDay" type="tel" size="2" maxlength="2" value="" />
		<span class="date-separate">
		&nbsp;- </span>
		<label class="form-sub-label" for="day_18" id="sublabel_day" style="min-height: 13px;">
		Day </label>
		</span>
		<span class="form-sub-label-container" style="vertical-align: top">
		<input class="form-textbox validate[required, limitDate]" id="month_18" name="confMonth" type="tel" size="2" maxlength="2" value="" />
		<span class="date-separate">
		&nbsp;- </span>
		<label class="form-sub-label" for="month_18" id="sublabel_month" style="min-height: 13px;">
		Month </label>
		</span>
		<span class="form-sub-label-container" style="vertical-align: top">
		<input class="form-textbox validate[required, limitDate]" id="year_18" name="confYear]" type="tel" size="4" maxlength="4" value="" />
		<label class="form-sub-label" for="year_18" id="sublabel_year" style="min-height: 13px;">
		Year </label>
		</span>
		<span class="form-sub-label-container" style="vertical-align: top">
		<img alt="Pick a Date" id="input_18_pick" src="images/calendar.png" align="absmiddle" />
		<label class="form-sub-label" for="input_18_pick" style="min-height: 13px;">
		</label>
		</span>
		</div>
		</li>
	</td></tr><tr><td class="eachtd">
		<li class="form-line jf-required" data-type="control_radio" id="id_15">
		<label class="form-label form-label-left form-label-auto" id="label_15" for="input_15">
		Confirmed by <span class="form-required">* </span>
		</label>
		<div id="cid_15" class="form-input jf-required">
		<div class="form-single-column">
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">	</span>
		<input type="radio" class="form-radio validate[required]" id="input_15_0" name="confirmedBy" value="Hospital M.O" />
		<label id="label_input_15_0" for="input_15_0">Hospital M.O </label>
		</span>
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">	</span>
		<input type="radio" class="form-radio validate[required]" id="input_15_1" name="confirmedBy" value="M.O.H" />
		<label id="label_input_15_1" for="input_15_1">M.O.H </label>
		</span>
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">	</span>
		<input type="radio" class="form-radio validate[required]" id="input_15_2" name="confirmedBy" value="Other Govt M.O" />
		<label id="label_input_15_2" for="input_15_2">	Other Govt M.O </label>
		</span>
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">	</span>
		<input type="radio" class="form-radio validate[required]" id="input_15_3" name="confirmedBy" value="Apothecary" />
		<label id="label_input_15_3" for="input_15_3">	Apothecary </label>
		</span>
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">	</span>
		<input type="radio" class="form-radio validate[required]" id="input_15_4" name="confirmedBy" value="Practitioner" />
		<label id="label_input_15_4" for="input_15_4">	Practitioner </label>
		</span>
		</div>
		</div>
		</li>
	</td></tr><tr><td class="eachtd">
		<li class="form-line jf-required" data-type="control_radio" id="id_16">
		<label class="form-label form-label-left form-label-auto" id="label_16" for="input_16">
		Nature of Confirmation <span class="form-required">	* </span>
		</label>
		<div id="cid_16" class="form-input jf-required">
		<div class="form-single-column">
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">	</span>
		<input type="radio" class="form-radio validate[required]" id="input_16_0" name="natureOfConf" value="Clinical only" />
		<label id="label_input_16_0" for="input_16_0">Clinical only </label>
		</span>
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">	</span>
		<input type="radio" class="form-radio validate[required]" id="input_16_1" name="natureOfConf" value="Clinical and Epidemiological" />
		<label id="label_input_16_1" for="input_16_1">	Clinical and Epidemiological </label>
		</span>
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">	</span>
		<input type="radio" class="form-radio validate[required]" id="input_16_2" name="natureOfConf" value="Clinical and Bacteriological" />
		<label id="label_input_16_2" for="input_16_2">Clinical and Bacteriological </label>
		</span>
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">	</span>
		<input type="radio" class="form-radio validate[required]" id="input_16_3" name="natureOfConf" value="Clinical and Serological" />
		<label id="label_input_16_3" for="input_16_3">	Clinical and Serological </label>
		</span>
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">	</span>
		<input type="radio" class="form-radio validate[required]" id="input_16_4" name="natureOfConf" value="Clinical, Bacteriological and Serological" />
		<label id="label_input_16_4" for="input_16_4">Clinical, Bacteriological and Serological </label>
		</span>
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">	</span>
		<input type="radio" class="form-radio validate[required]" id="input_16_5" name="natureOfConf" value="Clinical and direct Microscopy" />
		<label id="label_input_16_5" for="input_16_5">	Clinical and direct Microscopy </label>
		</span>
		</div>
		</div>
		</li>
	</td></tr><tr><td class="eachtd">	
		<li class="form-line" data-type="control_textarea" id="id_19">
		<label class="form-label form-label-left form-label-auto" id="label_19" for="input_19">
		Office Use Only </label>
		<div id="cid_19" class="form-input jf-required">
		<textarea id="input_19" class="form-textarea" name="officeNote" cols="40" rows="6">
		</textarea>
		</div>
		</li>
	</td></tr>
	</table>
</td>
</tr>
</table>
<hr/>
<li class="form-line" data-type="control_button" id="id_2">
<div id="cid_2" class="form-input-wide">
<div style="margin-left:156px" class="form-buttons-wrapper">
<button id="input_2" type="submit" class="form-submit-button">
Submit </button>
</div>
</div>
</li>
</ul>
</div>
</form>
</center>
</body>
</html>
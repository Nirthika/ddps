<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html class="supernova">
<head>
<title>H411 Form</title>
<script src="js/prototype.forms.js" type="text/javascript"></script>
<script src="js/jotform.forms.js" type="text/javascript"></script>
<script type="text/javascript">
JotForm.init(function(){ 
	JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"]; 
	JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"]; 
	JotForm.calendarOther = {"today":"Today"}; 
	JotForm.setCalendar("10", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":false,"past":true,"custom":false,"ranges":false,"start":"","end":""}); 
	JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"]; 
	JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"]; 
	JotForm.calendarOther = {"today":"Today"}; 
	JotForm.setCalendar("11", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":false,"past":true,"custom":false,"ranges":false,"start":"","end":""}); 
	JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"]; 
	JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"]; 
	JotForm.calendarOther = {"today":"Today"}; 
	JotForm.setCalendar("19", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":false,"past":true,"custom":false,"ranges":false,"start":"","end":""}); 
	JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"]; 
	JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"]; 
	JotForm.calendarOther = {"today":"Today"}; 
	JotForm.setCalendar("23", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); 
	JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"]; 
	JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"]; 
	JotForm.calendarOther = {"today":"Today"}; 
	JotForm.setCalendar("24", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":false,"past":true,"custom":false,"ranges":false,"start":"","end":""}); 
	JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"]; 
	JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"]; 
	JotForm.calendarOther = {"today":"Today"}; 
	JotForm.setCalendar("25", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); 
	JotForm.clearFieldOnHide="disable"; 
	JotForm.onSubmissionError="jumpToFirstError"; 
}); 
JotForm.setConditions([
	{"action":[{"id":"action_1478416135553","visibility":"Hide","isError":false,"field":"52"}],"id":"1478416159205","index":"1","link":"Any","priority":"1","terms":[{"id":"term_1478416135553","field":"50","operator":"isEmpty","value":"","isError":false}],"type":"field"},
	{"action":[{"id":"action_1478416167649","visibility":"Hide","isError":false,"field":"19"}],"id":"1478416186586","index":"0","link":"Any","priority":"0","terms":[{"id":"term_1478416167649","field":"50","operator":"isFilled","value":"","isError":false}],"type":"field"},
]);
function getAge() {
	var birthYear1 = document.getElementById("year_19").value;
	var birthYear2 = document.getElementById("input_52").value;
	var today = new Date();
	if (document.getElementById("input_50_0").checked)
		var age = today.getFullYear() - birthYear2;
	else 
		var age = today.getFullYear() - birthYear1;
	document.getElementById("id_age").innerHTML = age;
}
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
function configureGSDiv(id1,id2) {
    var Jaffna = ['','Ariyalai Center', 'Ariyalai Center North', 'Ariyalai Center South','Ariyalai Center West','Ariyalai North West','Ariyalai South West','Athiyady','Chundukuli North','Chundukuli South','Colompuththurai East','Colompuththurai West','Eachchamodai','Fort','Grand Bazaar','Gurunagar East','Gurunagar West','Iyanar kovilady','Jaffna town East','Jaffna town West','Kandarmadam N.E','Kandarmadam N.W','Kandarmadam S.E','Kandarmadam S.W','Kodday','Maruthady','Moor Street North','Moor Street South','Nadankulam','Nallur North','Nallur Rajathany','Nallur South','Navanthurai North','Navanthurai South','Neeraviyady','New Moor Street','Passaiyoor East','Passaiyoor West','Reclamation East','Reclamation West','Sangiliyan thoppu','Sirampaiyady','Small bazaar','Thirunagar','Vannarpannai','Vannarpannai N.E','Vannarpannai N.W','Vannarpannai North'];
    
    switch (id1.value) {
        case 'Jaffna':
            id2.options.length = 0;
            for (i = 0; i < Jaffna.length; i++) {
                createOption(id2, Jaffna[i], Jaffna[i]);
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
<link href="css/formCss.css" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="css/nova.css" />
<link type="text/css" media="print" rel="stylesheet" href="css/printForm.css" />
<link type="text/css" rel="stylesheet" href="css/form.css"/>

<style type="text/css">
	.form-label-left{ 
		width:185px !important; 
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
	}td{
		vertical-align: top;
	}td:hover{
		background-color: #f5f5f5;
	}input[type=text], input[type=number] {
		height: 20px;		
	}
</style>

<form class="jotform-form" action="https://submit.jotform.me/submit/61922085292457/" method="post" name="form_61922085292457" id="61922085292457" accept-charset="utf-8">

<div class="form-all">
<label class="form-label-left"> Health - 411 </label>

<ul class="form-section page-section">
	<li id="cid_3" class="form-input-wide" data-type="control_head">
	<div class="form-header-group">
	<div class="header-text httal htvam">
		<h3>DEPARTMENT OF HEALTH </h3>
	</div>
	</div>
	</li>
	<li id="cid_1" class="form-input-wide" data-type="control_head">
	<div class="form-header-group">
		<h2>COMMUNICABLE DISEASE REPORT - PAET I </h2>
	</div>
	</li>
<table>
<tr>
<td>
	<li class="form-line jf-required" data-type="control_textbox" id="id_4">
		<label class="form-label form-label-left form-label-auto" id="label_4" for="input_4">
		P.H.I Registration No. <span class="form-required">	* </span>
		</label>
		<div id="cid_4" class="form-input jf-required">
		<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_4" name="q4_phiRegistration" size="20" value="" />
		</div>
	</li>
</td><td>
	<li class="form-line jf-required" data-type="control_textbox" id="id_5">
		<label class="form-label form-label-left form-label-auto" id="label_5" for="input_5">
		P.H.I Range <span class="form-required">* </span>
		</label>
		<div id="cid_5" class="form-input jf-required">
		<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_5" name="q5_phiRange" size="20" value="" />
		</div>
	</li>
</td><td>
	<li class="form-line jf-required" data-type="control_textbox" id="id_6">
	<label class="form-label form-label-left form-label-auto" id="label_6" for="input_6">
	M.O.H Notification No. <span class="form-required">	* </span>
	</label>
	<div id="cid_6" class="form-input jf-required">
	<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_6" name="q6_mohNotification" size="20" value="" />
	</div>
	</li>
</td><td>
	<li class="form-line jf-required" data-type="control_dropdown" id="id_7">
	<label class="form-label form-label-left form-label-auto" id="label_7" for="input_7">
	M.O.H Area <span class="form-required">	* </span>
	</label>
	<div id="cid_7" class="form-input jf-required">
		<select class="form-dropdown validate[required]" style="width:150px" id="input_7" name="q7_moharea">
		<option value=""></option>
		<option value="Chankanai">Chankanai </option>
		<option value="Chavakachcheri">Chavakachcheri </option>
		<option value="Jaffna">Jaffna </option>
		<option value="Karaveddy">Karaveddy </option>
		<option value="Kayta">Kayta </option>
		<option value="Kopay">Kopay </option>
		<option value="Nallur">Nallur </option>
		<option value="Point Pedro">Point Pedro </option>
		<option value="Sandilipay">Sandilipay </option>
		<option value="Tellippalai">Tellippalai </option>
		<option value="Uduvil">Uduvil </option>
		</select>
	</div>
	</li>
</td><td>
	<li class="form-line jf-required" data-type="control_textbox" id="id_8">
	<label class="form-label form-label-left form-label-auto" id="label_8" for="input_8" size="30">
	M.O.H Registration No. <span class="form-required">	* </span>
	</label>
	<div id="cid_8" class="form-input jf-required">
		<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_8" name="q8_mohRegistration" size="20" value="" />
	</div>
	</li>
</td>
</tr>
</table>
<hr/>
<table width="100%">
<tr>
<td>
	<li class="form-line jf-required" data-type="control_dropdown" id="id_9">
	<label class="form-label form-label-left form-label-auto" id="label_9" for="input_9">
	Disease is notified <span class="form-required"> * </span>
	</label>
	<div id="cid_9" class="form-input jf-required">
	<select class="form-dropdown validate[required]" style="width:150px" id="input_9" name="q9_diseaseIs">
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
</td><td>
	<li class="form-line jf-required" data-type="control_datetime" id="id_10">
	<label class="form-label form-label-left form-label-auto" id="label_10" for="input_10">
	Notified Date <span class="form-required">
	* </span>
	</label>
	<div id="cid_10" class="form-input jf-required">
		<span class="form-sub-label-container" style="vertical-align: top">
		<input class="form-textbox validate[required, limitDate]" id="day_10" name="q10_date[day]" type="tel" size="2" maxlength="2" value="" />
		<span class="date-separate">
		&nbsp;- </span>
		<label class="form-sub-label" for="day_10" id="sublabel_day" style="min-height: 13px;">
		Day </label>
		</span>
		<span class="form-sub-label-container" style="vertical-align: top">
		<input class="form-textbox validate[required, limitDate]" id="month_10" name="q10_date[month]" type="tel" size="2" maxlength="2" value="" />
		<span class="date-separate">
		&nbsp;- </span>
		<label class="form-sub-label" for="month_10" id="sublabel_month" style="min-height: 13px;">
		Month </label>
		</span>
		<span class="form-sub-label-container" style="vertical-align: top">
		<input class="form-textbox validate[required, limitDate]" id="year_10" name="q10_date[year]" type="tel" size="4" maxlength="4" value="" />
		<label class="form-sub-label" for="year_10" id="sublabel_year" style="min-height: 13px;">
		Year </label>
		</span>
		<span class="form-sub-label-container" style="vertical-align: top">
		<img alt="Pick a Date" id="input_10_pick" src="images/calendar.png" align="absmiddle" />
		<label class="form-sub-label" for="input_10_pick" style="min-height: 13px;">
		</label>
		</span>
	</div>
	</li>
</td>
</tr><tr>
<td style="border-bottom: 1px solid">
	<li class="form-line jf-required" data-type="control_dropdown" id="id_12">
	<label class="form-label form-label-left form-label-auto" id="label_12" for="input_12">
	Disease confirmed <span class="form-required">* </span>
	</label>
	<div id="cid_12" class="form-input jf-required">
		<select class="form-dropdown validate[required]" style="width:150px" id="input_12" name="q12_diseaseConfirmed">
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
</td><td style="border-bottom: 1px solid">
	<li class="form-line jf-required" data-type="control_datetime" id="id_11">
	<label class="form-label form-label-left form-label-auto" id="label_11" for="input_11">
	Confirmed Date <span class="form-required">* </span>
	</label>
	<div id="cid_11" class="form-input jf-required">
		<span class="form-sub-label-container" style="vertical-align: top">
		<input class="form-textbox validate[required, limitDate]" id="day_11" name="q11_date11[day]" type="tel" size="2" maxlength="2" value="" />
		<span class="date-separate">
		&nbsp;- </span>
		<label class="form-sub-label" for="day_11" id="sublabel_day" style="min-height: 13px;">
		Day </label>
		</span>
		<span class="form-sub-label-container" style="vertical-align: top">
		<input class="form-textbox validate[required, limitDate]" id="month_11" name="q11_date11[month]" type="tel" size="2" maxlength="2" value="" />
		<span class="date-separate">
		&nbsp;- </span>
		<label class="form-sub-label" for="month_11" id="sublabel_month" style="min-height: 13px;">
		Month </label>
		</span>
		<span class="form-sub-label-container" style="vertical-align: top">
		<input class="form-textbox validate[required, limitDate]" id="year_11" name="q11_date11[year]" type="tel" size="4" maxlength="4" value="" />
		<label class="form-sub-label" for="year_11" id="sublabel_year" style="min-height: 13px;">
		Year </label>
		</span>
		<span class="form-sub-label-container" style="vertical-align: top">
		<img alt="Pick a Date" id="input_11_pick" src="images/calendar.png" align="absmiddle" />
		<label class="form-sub-label" for="input_11_pick" style="min-height: 13px;">
		</label>
		</span>
	</div>
	</li>
</td>
</tr><tr>
<td>
	<li class="form-line jf-required" data-type="control_fullname" id="id_13">
	<label class="form-label form-label-left form-label-auto" id="label_13" for="input_13">
	Name of Patient <span class="form-required">* </span>
	</label>
	<div id="cid_13" class="form-input jf-required">
		<span class="form-sub-label-container" style="vertical-align: top">
		<input class="form-textbox validate[required]" type="text" size="10" name="q13_nameOf[first]" id="first_13" />
		<label class="form-sub-label" for="first_13" id="sublabel_first" style="min-height: 13px;">
		First Name </label>
		</span>
		<span class="form-sub-label-container" style="vertical-align: top">
		<input class="form-textbox validate[required]" type="text" size="15" name="q13_nameOf[last]" id="last_13" />
		<label class="form-sub-label" for="last_13" id="sublabel_last" style="min-height: 13px;">
		Last Name </label>
		</span>
	</div>
	</li>
</td><td>
	<li class="form-line jf-required" data-type="control_datetime" id="id_19">
	<label class="form-label form-label-left form-label-auto" id="label_19" for="input_19">
	Date of Birth <span class="form-required">* </span>
	</label>
	<div id="cid_19" class="form-input jf-required">
		<span class="form-sub-label-container" style="vertical-align: top">
		<input class="form-textbox validate[required, limitDate]" id="day_19" name="q19_dateOf[day]" type="tel" size="2" maxlength="2" value="" />
		<span class="date-separate">
		&nbsp;- </span>
		<label class="form-sub-label" for="day_19" id="sublabel_day" style="min-height: 13px;">
		Day </label>
		</span>
		<span class="form-sub-label-container" style="vertical-align: top">
		<input class="form-textbox validate[required, limitDate]" id="month_19" name="q19_dateOf[month]" type="tel" size="2" maxlength="2" value="" />
		<span class="date-separate">
		&nbsp;- </span>
		<label class="form-sub-label" for="month_19" id="sublabel_month" style="min-height: 13px;">
		Month </label>
		</span>
		<span class="form-sub-label-container" style="vertical-align: top">
		<input class="form-textbox validate[required, limitDate]" id="year_19" name="q19_dateOf[year]" type="tel" size="4" maxlength="4" value="" />
		<label class="form-sub-label" for="year_19" id="sublabel_year" style="min-height: 13px;">
		Year </label>
		</span>
		<span class="form-sub-label-container" style="vertical-align: top">
		<img alt="Pick a Date" id="input_19_pick" src="images/calendar.png" align="absmiddle" />
		<label class="form-sub-label" for="input_19_pick" style="min-height: 13px;">
		</label>
		</span>
	</div>
	</li>
	<li class="form-line" data-type="control_checkbox" id="id_50">
		<label class="form-label form-label-left form-label-auto" id="label_50" for="input_50">  </label>
		<div id="cid_50" class="form-input jf-required">
		<div class="form-single-column">
			<span class="form-checkbox-item" style="clear:left;">
			<span class="dragger-item"></span>
			<input type="checkbox" class="form-checkbox" id="input_50_0" name="q50_input50[]" value="Year Only" />
			<label id="label_input_50_0" for="input_50_0"> Year Only </label>
			</span>
		</div>
		</div>
	</li>
	<li class="form-line jf-required form-field-hidden" style="display:none;" data-type="control_number" id="id_52">
		<label class="form-label form-label-left form-label-auto" id="label_52" for="input_52">
		Year of Birth
		<span class="form-required">*</span>
		</label>
		<div id="cid_52" class="form-input jf-required">
			<input type="tel" class="form-number-input  form-textbox validate[required]" id="input_52" name="q52_yearOf" style="width:60px" size="4" value="" data-type="input-number" data-maxlength="4"/>
		</div>
	</li>
</td>
</tr><tr>
<td rowspan="3">
	<li class="form-line jf-required" data-type="control_textbox" id="id_14">
	<label class="form-label form-label-left form-label-auto" id="label_14" for="input_14">
	Address <span class="form-required">* </span>
	</label>
		<div id="cid_14" class="form-input jf-required">
			<span class="form-sub-label-container" style="vertical-align: top">
			<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_14" name="q14_address" size="20" value="" />
			<label class="form-sub-label" for="input_14" style="min-height: 13px;">
			Address Line 1 </label>
			</span>
		</div>
	</li>
	<li class="form-line" data-type="control_textbox" id="id_15">
	<label class="form-label form-label-left form-label-auto" id="label_15" for="input_15">
	</label>
		<div id="cid_15" class="form-input jf-required">
			<span class="form-sub-label-container" style="vertical-align: top">
			<input type="text" class=" form-textbox" data-type="input-textbox" id="input_15" name="q15_input15" size="20" value="" />
			<label class="form-sub-label" for="input_15" style="min-height: 13px;">
			Address Line 2 </label>
			</span>
		</div>
	</li>
	<li class="form-line jf-required" data-type="control_dropdown" id="id_16">
	<label class="form-label form-label-left form-label-auto" id="label_16" for="input_16">
	<span class="form-required">* </span>
	</label>
		<div id="cid_16" class="form-input jf-required">
			<span class="form-sub-label-container" style="vertical-align: top">
			<select class="form-dropdown validate[required]" style="width:150px" id="input_16" name="q16_input16" onchange="configureDistrict(this,document.getElementById('input_17'))">
			<option value=""></option>
			<option value="Northern">Northern </option>
			<option value="North Western">North Western </option>
			<option value="Western">Western </option>
			<option value="North Central">North Central </option>
			<option value="Central">Central </option>
			<option value="Sabaragamuwa">Sabaragamuwa </option>
			<option value="Eastern">Eastern </option>
			<option value="Uva">Uva </option>
			<option value="Southern">Southern </option>
			</select>
			<label class="form-sub-label" for="input_16" style="min-height: 13px;">
			Province </label>
			</span>
		</div>
	</li>
	<li class="form-line jf-required" data-type="control_dropdown" id="id_17">
		<label class="form-label form-label-left form-label-auto" id="label_17" for="input_17">
		<span class="form-required">* </span>
		</label>
		<div id="cid_17" class="form-input jf-required">
			<span class="form-sub-label-container" style="vertical-align: top">
			<select class="form-dropdown validate[required]" style="width:150px" id="input_17" name="q17_input17" onchange="configureGSDiv(this,document.getElementById('input_18'))">
			</select>
			<label class="form-sub-label" for="input_17" style="min-height: 13px;">
			District </label>
			</span>
		</div>
	</li>
	<li class="form-line jf-required" data-type="control_dropdown" id="id_18">
	<label class="form-label form-label-left form-label-auto" id="label_18" for="input_18">
	<span class="form-required">* </span>
	</label>
	<div id="cid_18" class="form-input jf-required">
		<span class="form-sub-label-container" style="vertical-align: top">
		<select class="form-dropdown validate[required]" style="width:150px" id="input_18" name="q18_input18">
		</select>
		<label class="form-sub-label" for="input_18" style="min-height: 13px;">
		DS Division </label>
		</span>
	</div>
	</li>
	<li class="form-line jf-required" data-type="control_dropdown" id="id_30">
	<label class="form-label form-label-left form-label-auto" id="label_30" for="input_30">
	<span class="form-required">* </span>
	</label>
	<div id="cid_30" class="form-input jf-required">
		<span class="form-sub-label-container" style="vertical-align: top">
		<select class="form-dropdown validate[required]" style="width:150px" id="input_30" name="q30_input30">
		</select>
		<label class="form-sub-label" for="input_18" style="min-height: 13px;">
		GS Division </label>
		</span>
	</div>
	</li>
</td><td>
	<li class="form-line jf-required" data-type="control_number" id="id_20">
	<label class="form-label form-label-left form-label-auto" id="label_20" for="input_20">
	Age <span class="form-required">* </span>
	</label>
	<div id="cid_20" class="form-input jf-required">
		<label id="id_age" border="2" onClick="getAge()"></label>
		<label class="form-sub-label" for="input_20" style="min-height: 13px;" onClick="getAge()"> Click Here To Get Age </label>
	</div>
	</li>
</td>
</tr><tr>
<td>
	<li class="form-line jf-required" data-type="control_radio" id="id_21">
	<label class="form-label form-label-left form-label-auto" id="label_21" for="input_21">
	Gender <span class="form-required">* </span>
	</label>
	<div id="cid_21" class="form-input jf-required">
		<div class="form-single-column">
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">
		</span>
		<input type="radio" class="form-radio validate[required]" id="input_21_0" name="q21_gender" value="Male" />
		<label id="label_input_21_0" for="input_21_0">
		Male </label>
		</span>
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">
		</span>
		<input type="radio" class="form-radio validate[required]" id="input_21_1" name="q21_gender" value="Female" />
		<label id="label_input_21_1" for="input_21_1">
		Female </label>
		</span>
		</div>
	</div>
	</li>
</td>
</tr><tr>
<td>
	<li class="form-line jf-required" data-type="control_radio" id="id_22">
	<label class="form-label form-label-left form-label-auto" id="label_22" for="input_22">
	Ethnic Group <span class="form-required">* </span>
	</label>
	<div id="cid_22" class="form-input jf-required">
	<div class="form-single-column">
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">
		</span>
		<input type="radio" class="form-radio validate[required]" id="input_22_0" name="q22_ethnicGroup" value="SriLankanTamil" />
		<label id="label_input_22_0" for="input_22_0">
		SriLankan Tamil </label>
		</span>
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">
		</span>
		<input type="radio" class="form-radio validate[required]" id="input_22_4" name="q22_ethnicGroup" value="IndianTamil" />
		<label id="label_input_22_4" for="input_22_4">
		Indian Tamil </label>
		</span>
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">
		</span>
		<input type="radio" class="form-radio validate[required]" id="input_22_1" name="q22_ethnicGroup" value="Sinhala" />
		<label id="label_input_22_1" for="input_22_1">
		Sinhala </label>
		</span>
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">
		</span>
		<input type="radio" class="form-radio validate[required]" id="input_22_2" name="q22_ethnicGroup" value="Muslims" />
		<label id="label_input_22_2" for="input_22_2">
		Muslims </label>
		</span>
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">
		</span>
		<input type="radio" class="form-radio validate[required]" id="input_22_3" name="q22_ethnicGroup" value="Burghers" />
		<label id="label_input_22_3" for="input_22_3">
		Burghers </label>
		</span>
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">
		</span>
		<input type="radio" class="form-radio validate[required]" id="input_22_5" name="q22_ethnicGroup" value="Others" />
		<label id="label_input_22_5" for="input_22_5">
		Others </label>
		</span>
	</div>
	</div>
	</li>
</td>
</table>
<hr/>
<table width="100%">
<tr>
<td>
	<li class="form-line jf-required" data-type="control_datetime" id="id_23">
	<label class="form-label form-label-left form-label-auto" id="label_23" for="input_23">
	Date of Onset <span class="form-required">* </span>
	</label>
	<div id="cid_23" class="form-input jf-required">
		<span class="form-sub-label-container" style="vertical-align: top">
		<input class="form-textbox validate[required, limitDate]" id="day_23" name="q23_dateOf23[day]" type="tel" size="2" maxlength="2" value="" />
		<span class="date-separate">
		&nbsp;- </span>
		<label class="form-sub-label" for="day_23" id="sublabel_day" style="min-height: 13px;">
		Day </label>
		</span>
		<span class="form-sub-label-container" style="vertical-align: top">
		<input class="form-textbox validate[required, limitDate]" id="month_23" name="q23_dateOf23[month]" type="tel" size="2" maxlength="2" value="" />
		<span class="date-separate">
		&nbsp;- </span>
		<label class="form-sub-label" for="month_23" id="sublabel_month" style="min-height: 13px;">
		Month </label>
		</span>
		<span class="form-sub-label-container" style="vertical-align: top">
		<input class="form-textbox validate[required, limitDate]" id="year_23" name="q23_dateOf23[year]" type="tel" size="4" maxlength="4" value="" />
		<label class="form-sub-label" for="year_23" id="sublabel_year" style="min-height: 13px;">
		Year </label>
		</span>
		<span class="form-sub-label-container" style="vertical-align: top">
		<img alt="Pick a Date" id="input_23_pick" src="images/calendar.png" align="absmiddle" />
		<label class="form-sub-label" for="input_23_pick" style="min-height: 13px;">
		</label>
		</span>
	</div>
	</li>
</td><td rowspan="4">
	<li class="form-line jf-required" data-type="control_textarea" id="id_27">
	<label class="form-label form-label-left form-label-auto" id="label_27" for="input_27">
	Patient's movements during three weeks prior to onset  <span class="form-required">	* </span>
	</label><br>
	<div id="cid_27" class="form-input jf-required">
		<textarea id="input_27" class="form-textarea validate[required]" name="q27_patientsMovements" cols="45" rows="20">
	</textarea>
	</div>
	</li>
</td>
</tr><tr>
<td>
	<li class="form-line jf-required" data-type="control_datetime" id="id_24">
	<label class="form-label form-label-left form-label-auto" id="label_24" for="input_24">
	Date of Hospitalisation <span class="form-required">
	* </span>
	</label>
	<div id="cid_24" class="form-input jf-required">
		<span class="form-sub-label-container" style="vertical-align: top">
		<input class="form-textbox validate[required, limitDate]" id="day_24" name="q24_dateOf24[day]" type="tel" size="2" maxlength="2" value="" />
		<span class="date-separate">
		&nbsp;- </span>
		<label class="form-sub-label" for="day_24" id="sublabel_day" style="min-height: 13px;">
		Day </label>
		</span>
		<span class="form-sub-label-container" style="vertical-align: top">
		<input class="form-textbox validate[required, limitDate]" id="month_24" name="q24_dateOf24[month]" type="tel" size="2" maxlength="2" value="" />
		<span class="date-separate">
		&nbsp;- </span>
		<label class="form-sub-label" for="month_24" id="sublabel_month" style="min-height: 13px;">
		Month </label>
		</span>
		<span class="form-sub-label-container" style="vertical-align: top">
		<input class="form-textbox validate[required, limitDate]" id="year_24" name="q24_dateOf24[year]" type="tel" size="4" maxlength="4" value="" />
		<label class="form-sub-label" for="year_24" id="sublabel_year" style="min-height: 13px;">
		Year </label>
		</span>
		<span class="form-sub-label-container" style="vertical-align: top">
		<img alt="Pick a Date" id="input_24_pick" src="images/calendar.png" align="absmiddle" />
		<label class="form-sub-label" for="input_24_pick" style="min-height: 13px;">
		</label>
		</span>
	</div>
	</li>
</td>
</tr><tr>
<td>
	<li class="form-line jf-required" data-type="control_datetime" id="id_25">
	<label class="form-label form-label-left form-label-auto" id="label_25" for="input_25">
	Date of Discharge <span class="form-required">	* </span>
	</label>
	<div id="cid_25" class="form-input jf-required">
		<span class="form-sub-label-container" style="vertical-align: top">
		<input class="form-textbox validate[required, limitDate]" id="day_25" name="q25_dateOf25[day]" type="tel" size="2" maxlength="2" value="" />
		<span class="date-separate">
		&nbsp;- </span>
		<label class="form-sub-label" for="day_25" id="sublabel_day" style="min-height: 13px;">
		Day </label>
		</span>
		<span class="form-sub-label-container" style="vertical-align: top">
		<input class="form-textbox validate[required, limitDate]" id="month_25" name="q25_dateOf25[month]" type="tel" size="2" maxlength="2" value="" />
		<span class="date-separate">
		&nbsp;- </span>
		<label class="form-sub-label" for="month_25" id="sublabel_month" style="min-height: 13px;">
		Month </label>
		</span>
		<span class="form-sub-label-container" style="vertical-align: top">
		<input class="form-textbox validate[required, limitDate]" id="year_25" name="q25_dateOf25[year]" type="tel" size="4" maxlength="4" value="" />
		<label class="form-sub-label" for="year_25" id="sublabel_year" style="min-height: 13px;">
		Year </label>
		</span>
		<span class="form-sub-label-container" style="vertical-align: top">
		<img alt="Pick a Date" id="input_25_pick" src="images/calendar.png" align="absmiddle" />
		<label class="form-sub-label" for="input_25_pick" style="min-height: 13px;">
		</label>
		</span>
	</div>
	</li>
</td>
</tr><tr>
<td>
	<li class="form-line jf-required" data-type="control_dropdown" id="id_26">
	<label class="form-label form-label-left form-label-auto" id="label_26" for="input_26">
	Name of Hospital <span class="form-required">* </span>
	</label>
	<div id="cid_26" class="form-input jf-required">
		<select class="form-dropdown validate[required]" style="width:230px" id="input_26" name="q26_nameOf26">
		<option value=""></option>
		<option value="Care &amp; Cure">Care &amp; Cure </option>
		<option value="Chest Clinic">Chest Clinic </option>
		<option value="Dental Surgery">Dental Surgery </option>
		<option value="Divisional Hospital">Divisional Hospital </option>
		<option value="Jaffna Teaching Hospital">Jaffna Teaching Hospital </option>
		<option value="Life Care Medi Cilinic">Life Care Medi Cilinic </option>
		<option value="Mangalapathy Siddha Ayurvedic">Mangalapathy Siddha Ayurvedic </option>
		<option value="Modern New Medi Care Hospital">Modern New Medi Care Hospital </option>
		<option value="Nagaa Medical Centre">Nagaa Medical Centre </option>
		<option value="New Yarl Hospital">New Yarl Hospital </option>
		<option value="Northern Central Hospitals">Northern Central Hospitals </option>
		<option value="Pillaiyar Medi Clinic">Pillaiyar Medi Clinic </option>
		<option value="Rakavo Hospital">Rakavo Hospital </option>
		<option value="Renny Dental &amp; Optical Service">Renny Dental &amp; Optical Service </option>
		<option value="Renny Dental &amp; Optical Service">Renny Dental &amp; Optical Service </option>
		<option value="Royal Medical Centre">Royal Medical Centre </option>
		<option value="Ruhlins Hospital">Ruhlins Hospital </option>
		<option value="Sampanthar Modern Clinic">Sampanthar Modern Clinic </option>
		<option value="Shan's Health Care">Shan's Health Care </option>
		<option value="Shanthe Medi Clinic">Shanthe Medi Clinic </option>
		<option value="SMO">SMO </option>
		<option value="Suharni Hospital">Suharni Hospital </option>
		<option value="Sujeeva Hospital">Sujeeva Hospital </option>
		<option value="Sunrise Medi Clinic">Sunrise Medi Clinic </option>
		</select>
	</div>
	</li>
</td>
</tr><tr>
<td>
	<li class="form-line jf-required" data-type="control_radio" id="id_28">
	<label class="form-label form-label-left form-label-auto" id="label_28" for="input_28">
	Outcome <span class="form-required">* </span>
	</label>
	<div id="cid_28" class="form-input jf-required">
		<div class="form-single-column">
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">
		</span>
		<input type="radio" class="form-radio validate[required]" id="input_28_2" name="q28_outcome" value="StillInWard" />
		<label id="label_input_28_2" for="input_28_2">
		Still in ward </label>
		</span>
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">
		</span>
		<input type="radio" class="form-radio validate[required]" id="input_28_0" name="q28_outcome" value="Recovered" />
		<label id="label_input_28_0" for="input_28_0">
		Recovered </label>
		</span>
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">
		</span>
		<input type="radio" class="form-radio validate[required]" id="input_28_1" name="q28_outcome" value="Died" />
		<label id="label_input_28_1" for="input_28_1">
		Died </label>
		</span>
		</div>
	</div>
	</li>
</td><td rowspan="3">
	<li class="form-line jf-required" data-type="control_textarea" id="id_31">
	<label class="form-label form-label-left form-label-auto" id="label_31" for="input_31">
	Laboratory Finding <span class="form-required">* </span>
	</label>
	<div id="cid_31" class="form-input jf-required">
		<textarea id="input_31" class="form-textarea validate[required]" name="q31_laboratoryFinding" cols="45" rows="15">	</textarea>
	</div>
	</li>
</td>
</tr><tr>
<td>
	<li class="form-line jf-required" data-type="control_radio" id="id_29">
	<label class="form-label form-label-left form-label-auto" id="label_29" for="input_29">
	Where Isolated <span class="form-required">	* </span>
	</label>
	<div id="cid_29" class="form-input jf-required">
	<div class="form-single-column">
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">
		</span>
		<input type="radio" class="form-radio validate[required]" id="input_29_0" name="q29_whereIsolated" value="House" />
		<label id="label_input_29_0" for="input_29_0">
		House </label>
		</span>
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">
		</span>
		<input type="radio" class="form-radio validate[required]" id="input_29_1" name="q29_whereIsolated" value="Hospital" />
		<label id="label_input_29_1" for="input_29_1">
		Hospital </label>
		</span>
		<span class="form-radio-item" style="clear:left;">
		<span class="dragger-item">
		</span>
		<input type="radio" class="form-radio validate[required]" id="input_29_2" name="q29_whereIsolated" value="Not Isolated" />
		<label id="label_input_29_2" for="input_29_2">
		Not Isolated </label>
		</span>
	</div>
	</div>
	</li>
</td>
</tr>
</table>

<table border="1" width="100%">
<tr>
<th colspan="4">CONTACTS INVESTIGATED</th>
</tr><tr>
<th>Name</th>
<th>Age</th>
<th>Date Seen</th>
<th>Observation</th>
</tr><tr>
<th align="left">I. Patient's Household</th>
<th></th>
<th></th>
<th></th>
</tr><tr>
<td>
<li class="form-line" data-type="control_textbox" id="id_32">
<div id="cid_32" class="form-input">
	<span class="form-sub-label-container" style="vertical-align: top">
	<input class="form-textbox" type="text" size="10" name="q32_nameOf[first]" id="first_32" />
	<label class="form-sub-label" for="first_32" id="sublabel_first" style="min-height: 13px;">
	First Name </label>
	</span>
	<span class="form-sub-label-container" style="vertical-align: top">
	<input class="form-textbox" type="text" size="15" name="q32_nameOf[last]" id="last_32" />
	<label class="form-sub-label" for="last_32" id="sublabel_last" style="min-height: 13px;">
	Last Name </label>
	</span>
</div>
</li>
</td><td>
<li class="form-line" data-type="control_number" id="id_33">
<div id="cid_33" class="form-input">
<input type="number" class="form-number-input form-textbox" id="input_33" name="q33_age" style="width:60px" size="3" value="" data-type="input-number" />
</div>
</li>
</td><td>
<li class="form-line" data-type="control_datetime" id="id_34">
<div id="cid_34" class="form-input">
<span class="form-sub-label-container" style="vertical-align: top">
<input class="form-textbox" id="day_34" name="q34_dateOf34[day]" type="tel" size="2" maxlength="2" value="" />
<span class="date-separate">
&nbsp;- </span>
<label class="form-sub-label" for="day_34" id="sublabel_day" style="min-height: 13px;">
Day </label>
</span>
<span class="form-sub-label-container" style="vertical-align: top">
<input class="form-textbox" id="month_34" name="q34_dateOf34[month]" type="tel" size="2" maxlength="2" value="" />
<span class="date-separate">
&nbsp;- </span>
<label class="form-sub-label" for="month_34" id="sublabel_month" style="min-height: 13px;">
Month </label>
</span>
<span class="form-sub-label-container" style="vertical-align: top">
<input class="form-textbox" id="year_34" name="q34_dateOf34[year]" type="tel" size="4" maxlength="4" value="" />
<label class="form-sub-label" for="year_34" id="sublabel_year" style="min-height: 13px;">
Year </label>
</span>
<span class="form-sub-label-container" style="vertical-align: top">
<img alt="Pick a Date" id="input_34_pick" src="images/calendar.png" align="absmiddle" />
<label class="form-sub-label" for="input_34_pick" style="min-height: 13px;">
</label>
</span>
</div>
</li>
</td><td>
<li class="form-line" data-type="control_textarea" id="id_35">
<div id="cid_35" class="form-input">
<textarea id="input_35" class="form-textarea" name="q35_observation" cols="40" rows="3">
</textarea>
</div>
</li>
</td>
</tr><tr>
<td>
<li class="form-line" data-type="control_textbox" id="id_36">
<div id="cid_36" class="form-input">
	<span class="form-sub-label-container" style="vertical-align: top">
	<input class="form-textbox" type="text" size="10" name="q36_nameOf[first]" id="first_36" />
	<label class="form-sub-label" for="first_36" id="sublabel_first" style="min-height: 13px;">
	First Name </label>
	</span>
	<span class="form-sub-label-container" style="vertical-align: top">
	<input class="form-textbox" type="text" size="15" name="q36_nameOf[last]" id="last_36" />
	<label class="form-sub-label" for="last_36" id="sublabel_last" style="min-height: 13px;">
	Last Name </label>
	</span>
</div>
</li>
</td><td>
<li class="form-line" data-type="control_number" id="id_37">
<div id="cid_37" class="form-input">
<input type="number" class="form-number-input form-textbox" id="input_37" name="q37_age" style="width:60px" size="3" value="" data-type="input-number" />
</div>
</li>
</td><td>
<li class="form-line" data-type="control_datetime" id="id_38">
<div id="cid_38" class="form-input">
<span class="form-sub-label-container" style="vertical-align: top">
<input class="form-textbox" id="day_38" name="q38_dateOf38[day]" type="tel" size="2" maxlength="2" value="" />
<span class="date-separate">
&nbsp;- </span>
<label class="form-sub-label" for="day_38" id="sublabel_day" style="min-height: 13px;">
Day </label>
</span>
<span class="form-sub-label-container" style="vertical-align: top">
<input class="form-textbox" id="month_38" name="q38_dateOf38[month]" type="tel" size="2" maxlength="2" value="" />
<span class="date-separate">
&nbsp;- </span>
<label class="form-sub-label" for="month_38" id="sublabel_month" style="min-height: 13px;">
Month </label>
</span>
<span class="form-sub-label-container" style="vertical-align: top">
<input class="form-textbox" id="year_38" name="q38_dateOf38[year]" type="tel" size="4" maxlength="4" value="" />
<label class="form-sub-label" for="year_38" id="sublabel_year" style="min-height: 13px;">
Year </label>
</span>
<span class="form-sub-label-container" style="vertical-align: top">
<img alt="Pick a Date" id="input_38_pick" src="images/calendar.png" align="absmiddle" />
<label class="form-sub-label" for="input_38_pick" style="min-height: 13px;">
</label>
</span>
</div>
</li>
</td><td>
<li class="form-line" data-type="control_textarea" id="id_39">
<div id="cid_39" class="form-input">
<textarea id="input_39" class="form-textarea" name="q39_observation" cols="40" rows="3">
</textarea>
</div>
</li>
</td>
</tr><tr>
<th align="left">II. Other Contacts</th>
<th></th>
<th></th>
<th></th>
</tr><tr>
<td>
<li class="form-line" data-type="control_textbox" id="id_40">
<div id="cid_40" class="form-input">
	<span class="form-sub-label-container" style="vertical-align: top">
	<input class="form-textbox" type="text" size="10" name="q40_nameOf[first]" id="first_40" />
	<label class="form-sub-label" for="first_40" id="sublabel_first" style="min-height: 13px;">
	First Name </label>
	</span>
	<span class="form-sub-label-container" style="vertical-align: top">
	<input class="form-textbox" type="text" size="15" name="q40_nameOf[last]" id="last_40" />
	<label class="form-sub-label" for="last_40" id="sublabel_last" style="min-height: 13px;">
	Last Name </label>
	</span>
</div>
</li>
</td><td>
<li class="form-line" data-type="control_number" id="id_41">
<div id="cid_41" class="form-input">
<input type="number" class="form-number-input form-textbox" id="input_41" name="q41_age" style="width:60px" size="3" value="" data-type="input-number" />
</div>
</li>
</td><td>
<li class="form-line" data-type="control_datetime" id="id_42">
<div id="cid_42" class="form-input">
<span class="form-sub-label-container" style="vertical-align: top">
<input class="form-textbox" id="day_42" name="q42_dateOf42[day]" type="tel" size="2" maxlength="2" value="" />
<span class="date-separate">
&nbsp;- </span>
<label class="form-sub-label" for="day_42" id="sublabel_day" style="min-height: 13px;">
Day </label>
</span>
<span class="form-sub-label-container" style="vertical-align: top">
<input class="form-textbox" id="month_42" name="q42_dateOf42[month]" type="tel" size="2" maxlength="2" value="" />
<span class="date-separate">
&nbsp;- </span>
<label class="form-sub-label" for="month_42" id="sublabel_month" style="min-height: 13px;">
Month </label>
</span>
<span class="form-sub-label-container" style="vertical-align: top">
<input class="form-textbox" id="year_42" name="q42_dateOf42[year]" type="tel" size="4" maxlength="4" value="" />
<label class="form-sub-label" for="year_42" id="sublabel_year" style="min-height: 13px;">
Year </label>
</span>
<span class="form-sub-label-container" style="vertical-align: top">
<img alt="Pick a Date" id="input_42_pick" src="images/calendar.png" align="absmiddle" />
<label class="form-sub-label" for="input_42_pick" style="min-height: 13px;">
</label>
</span>
</div>
</li>
</td><td>
<li class="form-line" data-type="control_textarea" id="id_43">
<div id="cid_43" class="form-input">
<textarea id="input_43" class="form-textarea" name="q43_observation" cols="40" rows="3">
</textarea>
</div>
</li>
</td>
</tr><tr>
<td>
<li class="form-line" data-type="control_textbox" id="id_44">
<div id="cid_44" class="form-input">
	<span class="form-sub-label-container" style="vertical-align: top">
	<input class="form-textbox" type="text" size="10" name="q44_nameOf[first]" id="first_44" />
	<label class="form-sub-label" for="first_44" id="sublabel_first" style="min-height: 13px;">
	First Name </label>
	</span>
	<span class="form-sub-label-container" style="vertical-align: top">
	<input class="form-textbox" type="text" size="15" name="q44_nameOf[last]" id="last_44" />
	<label class="form-sub-label" for="last_44" id="sublabel_last" style="min-height: 13px;">
	Last Name </label>
	</span>
</div>
</li>
</td><td>
<li class="form-line" data-type="control_number" id="id_45">
<div id="cid_45" class="form-input">
<input type="number" class="form-number-input form-textbox" id="input_45" name="q45_age" style="width:60px" size="3" value="" data-type="input-number" />
</div>
</li>
</td><td>
<li class="form-line" data-type="control_datetime" id="id_46">
<div id="cid_46" class="form-input">
<span class="form-sub-label-container" style="vertical-align: top">
<input class="form-textbox" id="day_46" name="q46_dateOf46[day]" type="tel" size="2" maxlength="2" value="" />
<span class="date-separate">
&nbsp;- </span>
<label class="form-sub-label" for="day_46" id="sublabel_day" style="min-height: 13px;">
Day </label>
</span>
<span class="form-sub-label-container" style="vertical-align: top">
<input class="form-textbox" id="month_46" name="q46_dateOf46[month]" type="tel" size="2" maxlength="2" value="" />
<span class="date-separate">
&nbsp;- </span>
<label class="form-sub-label" for="month_46" id="sublabel_month" style="min-height: 13px;">
Month </label>
</span>
<span class="form-sub-label-container" style="vertical-align: top">
<input class="form-textbox" id="year_46" name="q46_dateOf46[year]" type="tel" size="4" maxlength="4" value="" />
<label class="form-sub-label" for="year_46" id="sublabel_year" style="min-height: 13px;">
Year </label>
</span>
<span class="form-sub-label-container" style="vertical-align: top">
<img alt="Pick a Date" id="input_46_pick" src="images/calendar.png" align="absmiddle" />
<label class="form-sub-label" for="input_46_pick" style="min-height: 13px;">
</label>
</span>
</div>
</li>
</td><td>
<li class="form-line" data-type="control_textarea" id="id_39">
<div id="cid_39" class="form-input">
<textarea id="input_39" class="form-textarea" name="q39_observation" cols="40" rows="3">
</textarea>
</div>
</li>
</td>
</tr>
</table>

<li id="cid_55" class="form-input-wide" data-type="control_head">
<div class="form-header-group">
  <div class="header-text httal htvam">
	<h2 id="header_55" class="form-header">
	</h2>
	<div id="subHeader_55" class="form-subHeader">
	  PATIENT RELEVANT HISTORY OF EVENT
	</div>
  </div>
</div>
</li>
<table>
<tr>
<td>
<li class="form-line jf-required" data-type="control_textbox" id="id_56">
<label class="form-label form-label-left form-label-auto" id="label_56" for="input_56">
  Symptoms Development
  <span class="form-required">
	*
  </span>
</label>
<div id="cid_56" class="form-input jf-required">
  <textarea class=" form-textbox validate[required]" id="input_56" name="q56_sysmtomsDevelopment" cols="40" rows="4"> </textarea>
</div>
</li>
</td>
<td>
<li class="form-line jf-required" data-type="control_checkbox" id="id_57">
<label class="form-label form-label-left form-label-auto" id="label_57" for="input_57">
  Type of treatment getting
  <span class="form-required">
	*
  </span>
</label>
<div id="cid_57" class="form-input jf-required">
  <div class="form-single-column">
	<span class="form-checkbox-item" style="clear:left;">
	  <span class="dragger-item">
	  </span>
	  <input type="checkbox" class="form-checkbox validate[required]" id="input_57_0" name="q57_typeOf[]" value="Indigenous" />
	  <label id="label_input_57_0" for="input_57_0"> Indigenous </label>
	</span>
	<span class="form-checkbox-item" style="clear:left;">
	  <span class="dragger-item">
	  </span>
	  <input type="checkbox" class="form-checkbox validate[required]" id="input_57_1" name="q57_typeOf[]" value="Western" />
	  <label id="label_input_57_1" for="input_57_1"> Western </label>
	</span>
	<span class="form-checkbox-item" style="clear:left;">
	  <span class="dragger-item">
	  </span>
	  <input type="checkbox" class="form-checkbox validate[required]" id="input_57_2" name="q57_typeOf[]" value="Both" />
	  <label id="label_input_57_2" for="input_57_2"> Both </label>
	</span>
	<span class="form-checkbox-item" style="clear:left;">
	  <span class="dragger-item">
	  </span>
	  <input type="checkbox" class="form-checkbox validate[required]" id="input_57_3" name="q57_typeOf[]" value="No Treatement" />
	  <label id="label_input_57_3" for="input_57_3"> No Treatement </label>
	</span>
  </div>
</div>
</li>
</td>
</tr><tr>
<td>
<li class="form-line" data-type="control_textarea" id="id_58">
<label class="form-label form-label-left form-label-auto" id="label_58" for="input_58"> Complications </label>
<div id="cid_58" class="form-input jf-required">
  <textarea id="input_58" class="form-textarea" name="q58_complications" cols="34" rows="4"></textarea>
</div>
</li>
</td>
<td>
<li class="form-line jf-required" data-type="control_checkbox" id="id_59">
<label class="form-label form-label-left form-label-auto" id="label_59" for="input_59">
  Recent Visit to the Disease Area
  <span class="form-required">
	*
  </span>
</label>
<div id="cid_59" class="form-input jf-required">
  <div class="form-single-column">
	<span class="form-checkbox-item" style="clear:left;">
	  <span class="dragger-item">
	  </span>
	  <input type="checkbox" class="form-checkbox validate[required]" id="input_59_0" name="q59_recentVisit59[]" value="Foreign" />
	  <label id="label_input_59_0" for="input_59_0"> Foreign </label>
	</span>
	<span class="form-checkbox-item" style="clear:left;">
	  <span class="dragger-item">
	  </span>
	  <input type="checkbox" class="form-checkbox validate[required]" id="input_59_1" name="q59_recentVisit59[]" value="Option 2" />
	  <label id="label_input_59_1" for="input_59_1"> Option 2 </label>
	</span>
	<span class="form-checkbox-item" style="clear:left;">
	  <span class="dragger-item">
	  </span>
	  <input type="checkbox" class="form-checkbox validate[required]" id="input_59_2" name="q59_recentVisit59[]" value="Option 3" />
	  <label id="label_input_59_2" for="input_59_2"> Option 3 </label>
	</span>
  </div>
</div>
</li>
</td>
</tr><tr>
<td>
<li class="form-line jf-required" data-type="control_checkbox" id="id_60">
<label class="form-label form-label-left form-label-auto" id="label_60" for="input_60">
  Possible Source of Infection
  <span class="form-required">
	*
  </span>
</label>
<div id="cid_60" class="form-input jf-required">
  <div class="form-single-column">
	<span class="form-checkbox-item" style="clear:left;">
	  <span class="dragger-item">
	  </span>
	  <input type="checkbox" class="form-checkbox validate[required]" id="input_60_0" name="q60_posibleSource[]" value="Home" />
	  <label id="label_input_60_0" for="input_60_0"> Home </label>
	</span>
	<span class="form-checkbox-item" style="clear:left;">
	  <span class="dragger-item">
	  </span>
	  <input type="checkbox" class="form-checkbox validate[required]" id="input_60_1" name="q60_posibleSource[]" value="Working Place" />
	  <label id="label_input_60_1" for="input_60_1"> Working Place </label>
	</span>
	<span class="form-checkbox-item" style="clear:left;">
	  <span class="dragger-item">
	  </span>
	  <input type="checkbox" class="form-checkbox validate[required]" id="input_60_2" name="q60_posibleSource[]" value="Outside" />
	  <label id="label_input_60_2" for="input_60_2"> Outside </label>
	</span>
	<span class="form-checkbox-item" style="clear:left;">
	  <span class="dragger-item">
	  </span>
	  <input type="checkbox" class="form-checkbox validate[required]" id="input_60_3" name="q60_posibleSource[]" value="Other" />
	  <label id="label_input_60_3" for="input_60_3"> Other </label>
	</span>
  </div>
</div>
</li>
</td>
<td>
<li class="form-line jf-required" data-type="control_checkbox" id="id_61">
<label class="form-label form-label-left form-label-auto" id="label_61" for="input_61">
  Control Measures Taken
  <span class="form-required">
	*
  </span>
</label>
<div id="cid_61" class="form-input jf-required">
  <div class="form-single-column">
	<span class="form-checkbox-item" style="clear:left;">
	  <span class="dragger-item">
	  </span>
	  <input type="checkbox" class="form-checkbox validate[required]" id="input_61_0" name="q61_controlMeasures[]" value="Remove Gabage" />
	  <label id="label_input_61_0" for="input_61_0"> Remove Gabage </label>
	</span>
	<span class="form-checkbox-item" style="clear:left;">
	  <span class="dragger-item">
	  </span>
	  <input type="checkbox" class="form-checkbox validate[required]" id="input_61_1" name="q61_controlMeasures[]" value="Remove Water store" />
	  <label id="label_input_61_1" for="input_61_1"> Remove Water store </label>
	</span>
	<span class="form-checkbox-item" style="clear:left;">
	  <span class="dragger-item">
	  </span>
	  <input type="checkbox" class="form-checkbox validate[required]" id="input_61_2" name="q61_controlMeasures[]" value="Use Mosquito net" />
	  <label id="label_input_61_2" for="input_61_2"> Use Mosquito net </label>
	</span>
	<span class="form-checkbox-item" style="clear:left;">
	  <span class="dragger-item">
	  </span>
	  <input type="checkbox" class="form-checkbox validate[required]" id="input_61_3" name="q61_controlMeasures[]" value="Other" />
	  <label id="label_input_61_3" for="input_61_3"> Other </label>
	</span>
  </div>
</div>
</li>
</td>
</tr><tr>
<td>
<li class="form-line jf-required" data-type="control_checkbox" id="id_62">
<label class="form-label form-label-left form-label-auto" id="label_62" for="input_62">
  Preventive Measures
  <span class="form-required">
	*
  </span>
</label>
<div id="cid_62" class="form-input jf-required">
  <div class="form-single-column">
	<span class="form-checkbox-item" style="clear:left;">
	  <span class="dragger-item">
	  </span>
	  <input type="checkbox" class="form-checkbox validate[required]" id="input_62_0" name="q62_preventiveMeasures[]" value="Option 1" />
	  <label id="label_input_62_0" for="input_62_0"> Option 1 </label>
	</span>
	<span class="form-checkbox-item" style="clear:left;">
	  <span class="dragger-item">
	  </span>
	  <input type="checkbox" class="form-checkbox validate[required]" id="input_62_1" name="q62_preventiveMeasures[]" value="Option 2" />
	  <label id="label_input_62_1" for="input_62_1"> Option 2 </label>
	</span>
	<span class="form-checkbox-item" style="clear:left;">
	  <span class="dragger-item">
	  </span>
	  <input type="checkbox" class="form-checkbox validate[required]" id="input_62_2" name="q62_preventiveMeasures[]" value="Option 3" />
	  <label id="label_input_62_2" for="input_62_2"> Option 3 </label>
	</span>
  </div>
</div>
</li>
</td>
<td>
<li class="form-line jf-required" data-type="control_textbox" id="id_63">
<label class="form-label form-label-left form-label-auto" id="label_63" for="input_63">
  Follow up
  <span class="form-required">
	*
  </span>
</label>
<div id="cid_63" class="form-input jf-required">
  <input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_63" name="q63_followUp" size="20" value="" />
</div>
</li>
</td>
</tr>
</table>
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
</html>
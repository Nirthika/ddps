<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html class="supernova">
<head>
<title>H399 Form</title>
<script src="js/prototype.forms.js" type="text/javascript"></script>
<script src="js/jotform.forms.js" type="text/javascript"></script>
<script type="text/javascript">
JotForm.setConditions([
	{"action":[{"id":"action_1467787283876","visibility":"Show","isError":false,"field":"11"}],"id":"1467787628345","index":"0","link":"Any","priority":"0","terms":[{"id":"term_1467787283876","field":"8","operator":"equals","value":"Chankanai","isError":false}],"type":"field"},
	{"action":[{"id":"action_0_1467787795736","visibility":"Show","isError":false,"field":"12"}],"id":"1467787776222","index":"1","link":"Any","priority":"1","terms":[{"id":"term_0_1467787795736","field":"8","operator":"equals","value":"Chavakachcheri","isError":false}],"type":"field"},
	{"action":[{"id":"action_0_1467788310297","visibility":"Show","isError":false,"field":"14"}],"id":"1467787811154","index":"2","link":"Any","priority":"2","terms":[{"id":"term_0_1467788310296","field":"8","operator":"equals","value":"Jaffna","isError":false}],"type":"field"},
	{"action":[{"id":"action_0_1467788328950","visibility":"Show","isError":false,"field":"13"}],"id":"1467787836301","index":"3","link":"Any","priority":"3","terms":[{"id":"term_0_1467788328950","field":"8","operator":"equals","value":"Karaveddy","isError":false}],"type":"field"},
	{"action":[{"id":"action_0_1467787869669","visibility":"Show","isError":false,"field":"15"}],"id":"1467787865328","index":"4","link":"Any","priority":"4","terms":[{"id":"term_0_1467787869669","field":"8","operator":"equals","value":"Kayts","isError":false}],"type":"field"},
	{"action":[{"id":"action_0_1467787892407","visibility":"Show","isError":false,"field":"16"}],"id":"1467787884560","index":"5","link":"Any","priority":"5","terms":[{"id":"term_0_1467787892407","field":"8","operator":"equals","value":"Kopay","isError":false}],"type":"field"},
	{"action":[{"id":"action_0_1467787914877","visibility":"Show","isError":false,"field":"17"}],"id":"1467787910025","index":"6","link":"Any","priority":"6","terms":[{"id":"term_0_1467787914877","field":"8","operator":"equals","value":"Nallur","isError":false}],"type":"field"},
	{"action":[{"id":"action_0_1467787941100","visibility":"Show","isError":false,"field":"18"}],"id":"1467787936599","index":"7","link":"Any","priority":"7","terms":[{"id":"term_0_1467787941100","field":"8","operator":"equals","value":"Point Pedro","isError":false}],"type":"field"},
	{"action":[{"id":"action_0_1467787958827","visibility":"Show","isError":false,"field":"19"}],"id":"1467787954317","index":"8","link":"Any","priority":"8","terms":[{"id":"term_0_1467787958827","field":"8","operator":"equals","value":"Sandilipay","isError":false}],"type":"field"},
	{"action":[{"id":"action_0_1467787977321","visibility":"Show","isError":false,"field":"20"}],"id":"1467787971264","index":"9","link":"Any","priority":"9","terms":[{"id":"term_0_1467787977320","field":"8","operator":"equals","value":"Tellippalai","isError":false}],"type":"field"},
	{"action":[{"id":"action_0_1467787995611","visibility":"Show","isError":false,"field":"21"}],"id":"1467787990106","index":"10","link":"Any","priority":"10","terms":[{"id":"term_0_1467787995611","field":"8","operator":"equals","value":"Uduvil","isError":false}],"type":"field"}
]); 
JotForm.init(function(){ 
	JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"]; JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"]; JotForm.calendarOther = {"today":"Today"}; JotForm.setCalendar("9", false, false); JotForm.clearFieldOnHide="disable"; FormTranslation.init({"detectUserLanguage":false,"firstPageOnly":false,"options":"English (UK)|Tamil|Sinhala","originalLanguage":"en-UK","primaryLanguage":"en-UK","saveUserLanguage":false,"showStatus":"flag-with-nation","theme":"light-theme","version":2}); JotForm.onSubmissionError="jumpToFirstError"; 
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
function configureMOH(id1,id2) {
	var JaffnaMOH = ['','Chankanai','Chavakachcheri','Jaffna','Karaveddy','Kayts','Kopay','Nallur','Point Pedro','Sandilipay','Tellippalai','Uduvil'];
    switch (id1.value) {
        case 'Jaffna':
            id2.options.length = 0;
            for (i = 0; i < JaffnaMOH.length; i++) {
                createOption(id2, JaffnaMOH[i], JaffnaMOH[i]);
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
function chankanaiTotal(input0,input1,input2,input3,input4,input5,input6){
	var in0 = input0.value;
	var in1 = input1.value;
	var in2 = input2.value;
	var in3 = input3.value;
	var in4 = input4.value;
	var in5 = input5.value;
	if(in0==null || in0==""){in0=0;}
	if(in1==null || in1==""){in1=0;}
	if(in2==null || in2==""){in2=0;}
	if(in3==null || in3==""){in3=0;}
	if(in4==null || in4==""){in4=0;}
	if(in5==null || in5==""){in5=0;}
	
	var chankanaiTot = parseInt(in0)+parseInt(in1)+parseInt(in2)+parseInt(in3)+parseInt(in4)+parseInt(in5);
	input6.value = chankanaiTot;
}
function chavaTotal(input0,input1,input2,input3,input4,input5,input6,input7,input8,input9,input10,input11){
	var in0 = input0.value;
	var in1 = input1.value;
	var in2 = input2.value;
	var in3 = input3.value;
	var in4 = input4.value;
	var in5 = input5.value;
	var in6 = input6.value;
	var in7 = input7.value;
	var in8 = input8.value;
	var in9 = input9.value;
	var in10 = input10.value;
	if(in0==null || in0==""){in0=0;}
	if(in1==null || in1==""){in1=0;}
	if(in2==null || in2==""){in2=0;}
	if(in3==null || in3==""){in3=0;}
	if(in4==null || in4==""){in4=0;}
	if(in5==null || in5==""){in5=0;}
	if(in6==null || in6==""){in6=0;}
	if(in7==null || in7==""){in7=0;}
	if(in8==null || in8==""){in8=0;}
	if(in9==null || in9==""){in9=0;}
	if(in10==null || in10==""){in10=0;}
	
	var chavaTot = parseInt(in0)+parseInt(in1)+parseInt(in2)+parseInt(in3)+parseInt(in4)+parseInt(in5)+parseInt(in6)+parseInt(in7)+parseInt(in8)+parseInt(in9)+parseInt(in10);
	input11.value = chavaTot;
}
function karaveddyTotal(input0,input1,input2,input3,input4,input5){
	var in0 = input0.value;
	var in1 = input1.value;
	var in2 = input2.value;
	var in3 = input3.value;
	var in4 = input4.value;
	if(in0==null || in0==""){in0=0;}
	if(in1==null || in1==""){in1=0;}
	if(in2==null || in2==""){in2=0;}
	if(in3==null || in3==""){in3=0;}
	if(in4==null || in4==""){in4=0;}
		
	var karaveddyTot = parseInt(in0)+parseInt(in1)+parseInt(in2)+parseInt(in3)+parseInt(in4);
	input5.value = karaveddyTotal;
}
function jaffnaTotal(input0,input1,input2,input3,input4,input5,input6,input7,input8){
	var in0 = input0.value;
	var in1 = input1.value;
	var in2 = input2.value;
	var in3 = input3.value;
	var in4 = input4.value;
	var in5 = input5.value;
	var in6 = input6.value;
	var in7 = input7.value;
	if(in0==null || in0==""){in0=0;}
	if(in1==null || in1==""){in1=0;}
	if(in2==null || in2==""){in2=0;}
	if(in3==null || in3==""){in3=0;}
	if(in4==null || in4==""){in4=0;}
	if(in5==null || in5==""){in5=0;}
	if(in6==null || in6==""){in6=0;}
	if(in7==null || in7==""){in7=0;}
	
	var jaffnaTot = parseInt(in0)+parseInt(in1)+parseInt(in2)+parseInt(in3)+parseInt(in4)+parseInt(in5)+parseInt(in6)+parseInt(in7);
	input8.value = jaffnaTot;
}
function kaytsTotal(input0,input1,input2,input3,input4,input5,input6,input7){
	var in0 = input0.value;
	var in1 = input1.value;
	var in2 = input2.value;
	var in3 = input3.value;
	var in4 = input4.value;
	var in5 = input5.value;
	var in6 = input6.value;
	if(in0==null || in0==""){in0=0;}
	if(in1==null || in1==""){in1=0;}
	if(in2==null || in2==""){in2=0;}
	if(in3==null || in3==""){in3=0;}
	if(in4==null || in4==""){in4=0;}
	if(in5==null || in5==""){in5=0;}
	if(in6==null || in6==""){in6=0;}
	
	var kaytsTot = parseInt(in0)+parseInt(in1)+parseInt(in2)+parseInt(in3)+parseInt(in4)+parseInt(in5)+parseInt(in6);
	input7.value = kaytsTot;
}
function kopayTotal(input0,input1,input2,input3,input4,input5,input6,input7,input8){
	var in0 = input0.value;
	var in1 = input1.value;
	var in2 = input2.value;
	var in3 = input3.value;
	var in4 = input4.value;
	var in5 = input5.value;
	var in6 = input6.value;
	var in7 = input7.value;
	if(in0==null || in0==""){in0=0;}
	if(in1==null || in1==""){in1=0;}
	if(in2==null || in2==""){in2=0;}
	if(in3==null || in3==""){in3=0;}
	if(in4==null || in4==""){in4=0;}
	if(in5==null || in5==""){in5=0;}
	if(in6==null || in6==""){in6=0;}
	if(in7==null || in7==""){in7=0;}
	
	var kopayTot = parseInt(in0)+parseInt(in1)+parseInt(in2)+parseInt(in3)+parseInt(in4)+parseInt(in5)+parseInt(in6)+parseInt(in7);
	input8.value = kopayTot;
}
function nallurTotal(input0,input1,input2,input3,input4){
	var in0 = input0.value;
	var in1 = input1.value;
	var in2 = input2.value;
	var in3 = input3.value;
	if(in0==null || in0==""){in0=0;}
	if(in1==null || in1==""){in1=0;}
	if(in2==null || in2==""){in2=0;}
	if(in3==null || in3==""){in3=0;}
	
	var nallurTot = parseInt(in0)+parseInt(in1)+parseInt(in2)+parseInt(in3);
	input4.value = nallurTot;
}
function pointPedroTotal(input0,input1,input2,input3,input4,input5,input6,input7,input8,input9){
	var in0 = input0.value;
	var in1 = input1.value;
	var in2 = input2.value;
	var in3 = input3.value;
	var in4 = input4.value;
	var in5 = input5.value;
	var in6 = input6.value;
	var in7 = input7.value;
	var in8 = input8.value;
	if(in0==null || in0==""){in0=0;}
	if(in1==null || in1==""){in1=0;}
	if(in2==null || in2==""){in2=0;}
	if(in3==null || in3==""){in3=0;}
	if(in4==null || in4==""){in4=0;}
	if(in5==null || in5==""){in5=0;}
	if(in6==null || in6==""){in6=0;}
	if(in7==null || in7==""){in7=0;}
	if(in8==null || in8==""){in8=0;}
	
	var pointPedroTot = parseInt(in0)+parseInt(in1)+parseInt(in2)+parseInt(in3)+parseInt(in4)+parseInt(in5)+parseInt(in6)+parseInt(in7)+parseInt(in8);
	input9.value = pointPedroTot;
}tellipalaiTotal
function sandilipayTotal(input0,input1,input2,input3,input4,input5,input6,input7){
	var in0 = input0.value;
	var in1 = input1.value;
	var in2 = input2.value;
	var in3 = input3.value;
	var in4 = input4.value;
	var in5 = input5.value;
	var in6 = input6.value;
	if(in0==null || in0==""){in0=0;}
	if(in1==null || in1==""){in1=0;}
	if(in2==null || in2==""){in2=0;}
	if(in3==null || in3==""){in3=0;}
	if(in4==null || in4==""){in4=0;}
	if(in5==null || in5==""){in5=0;}
	if(in6==null || in6==""){in6=0;}
	
	var sandilipayTot = parseInt(in0)+parseInt(in1)+parseInt(in2)+parseInt(in3)+parseInt(in4)+parseInt(in5)+parseInt(in6);
	input7.value = sandilipayTot;
}
function tellipalaiTotal(input0,input1,input2,input3){
	var in0 = input0.value;
	var in1 = input1.value;
	var in2 = input2.value;
	if(in0==null || in0==""){in0=0;}
	if(in1==null || in1==""){in1=0;}
	if(in2==null || in2==""){in2=0;}
	
	var tellipalaiTot = parseInt(in0)+parseInt(in1)+parseInt(in2);
	input3.value = tellipalaiTot;
}
function udivilTotal(input0,input1,input2,input3,input4,input5,input6){
	var in0 = input0.value;
	var in1 = input1.value;
	var in2 = input2.value;
	var in3 = input3.value;
	var in4 = input4.value;
	var in5 = input5.value;
	if(in0==null || in0==""){in0=0;}
	if(in1==null || in1==""){in1=0;}
	if(in2==null || in2==""){in2=0;}
	if(in3==null || in3==""){in3=0;}
	if(in4==null || in4==""){in4=0;}
	if(in5==null || in5==""){in5=0;}
	
	var udivilTot = parseInt(in0)+parseInt(in1)+parseInt(in2)+parseInt(in3)+parseInt(in4)+parseInt(in5);
	input6.value = udivilTot;
}
</script>

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
	}.form-all{ 
		width:100%; 
		color:#555 !important; 
		font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif; 
		font-size:14px; 
	}.form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{ 
		color: #555; 
	}tr:hover{
		background-color: #f5f5f5;
	}input[type=text], input[type=number] {
		height: 20px;		
	}
</style>
</head>
<body>
<form class="jotform-form" action="https://submit.jotform.me/submit/61660676518463/" method="post" name="form_61660676518463" id="61660676518463" accept-charset="utf-8">
<div class="form-all">

<link type="text/css" rel="stylesheet" media="all" href="css/lang.css" />
<!--div class="cont">
<label class="form-label-left"> Health - 399 </label>
<input type="text" id="input_language" name="input_language" style="display:none" />
	<div class="language-dd" id="langDd">
	<div class="dd-placeholder lang-emp">
	Language </div>
	<ul class="lang-list dn" id="langList">
	<li data-lang="en-UK" class="en-UK">
	English (UK) </li>
	<li data-lang="ta" class="ta">
	Tamil </li>
	<li data-lang="si" class="si">
	Sinhala </li>
	</ul>
	</div>
</div-->
<script type="text/javascript" src="js/lang.js"></script>

<ul class="form-section page-section">
<table rules="cols">
	<tr>
		<td colspan=2>
			<li id="cid_1" class="form-input-wide" data-type="control_head">
				<div class="form-header-group">
				<div class="header-text httac htvam">
					<h2>WEEKLY RETURN OF COMMUNICABLE DISEASES </h2>
					<h3>DEPARTMENT OF HEALTH SERVICES </h3>
				</div>
				</div>
			</li>
			<li id="cid_3" class="form-input-wide" data-type="control_head">
				
				<div class="header-text httal htvam">
					<h4><i>Part I - Cases notified during the week</i></h4>
				</div>
				
			</li>
		</td>
	</tr>
	<tr>
		<td>
		</td>
		<td>
			<li class="form-line jf-required" data-type="control_datetime" id="id_9">
				<label class="form-label form-label-left form-label-auto" id="label_9" for="input_9">
				Week Ending <span class="form-required">
				* </span>
				</label>
				<div id="cid_9" class="form-input jf-required">
					<span class="form-sub-label-container" style="vertical-align: top">
						<input class="form-textbox validate[required]" id="day_9" name="weekEndDay" type="tel" size="2" maxlength="2" value="" />
						<span class="date-separate">
						&nbsp;- </span>
						<label class="form-sub-label" for="day_9" id="sublabel_day" style="min-height: 13px;">
						Day </label>
					</span>
					<span class="form-sub-label-container" style="vertical-align: top">
						<input class="form-textbox validate[required]" id="month_9" name="weekEndMonth" type="tel" size="2" maxlength="2" value="" />
						<span class="date-separate">
						&nbsp;- </span>
						<label class="form-sub-label" for="month_9" id="sublabel_month" style="min-height: 13px;">
						Month </label>
					</span>
					<span class="form-sub-label-container" style="vertical-align: top">
						<input class="form-textbox validate[required]" id="year_9" name="weekEndYear" type="tel" size="4" maxlength="4" value="" />
						<label class="form-sub-label" for="year_9" id="sublabel_year" style="min-height: 13px;">
						Year </label>
					</span>
					<span class="form-sub-label-container" style="vertical-align: top">
						<img alt="Pick a Date" id="input_9_pick" src="images/calendar.png" align="absmiddle" />
						<label class="form-sub-label" for="input_9_pick" style="min-height: 13px;">
						</label>
					</span>
				</div>
			</li>
		</td>
	</tr>
	<tr>
		<td>
			<li class="form-line jf-required" data-type="control_dropdown" id="id_4">
				<label class="form-label form-label-left form-label-auto" id="label_4" for="input_4">
				Province <span class="form-required">
				* </span>
				</label>
				<div id="cid_4" class="form-input jf-required">
					<select class="form-dropdown validate[required]" style="width:150px" id="input_4" name="province" onchange="configureDistrict(this,document.getElementById('input_6'))">
					<option value=""></option>
					<option value="Central">Central </option>
					<option value="Eastern">Eastern </option>
					<option value="North Central">North Central </option>
					<option value="North Western">North Western </option>
					<option value="Northern">Northern </option>
					<option value="Sabaragamuwa">
					Sabaragamuwa </option>
					<option value="Southern">Southern </option>
					<option value="Uva">Uva </option>
					<option value="Western">Western </option>
					</select>
				</div>
			</li>
		</td>
		<td>
			<li class="form-line jf-required" data-type="control_dropdown" id="id_6">
				<label class="form-label form-label-left form-label-auto" id="label_6" for="input_6">
				District <span class="form-required">
				* </span>
				</label>
				<div id="cid_6" class="form-input jf-required">
					<select class="form-dropdown validate[required]" style="width:150px" id="input_6" name="district" onchange="configureMOH(this,document.getElementById('input_8'))">
					
					</select>
				</div>
			</li>
		</td>
	</tr>
	<tr>
		<td>
			<li class="form-line jf-required" data-type="control_dropdown" id="id_7">
				<label class="form-label form-label-left form-label-auto" id="label_7" for="input_7">
				R.D.H.S Division <span class="form-required">
				* </span>
				</label>
				<div id="cid_7" class="form-input jf-required">
					<select class="form-dropdown validate[required]" style="width:150px" id="input_7" name="rdhsDiv">
					<option value=""></option>
					<option value="Option 1">Option 1 </option>
					<option value="Option 2">Option 2 </option>
					<option value="Option 3">Option 3 </option>
					</select>
				</div>
			</li>
		</td>
		<td>
			<li class="form-line jf-required" data-type="control_dropdown" id="id_8">
				<label class="form-label form-label-left form-label-auto" id="label_8" for="input_8">
				M.O.H Area <span class="form-required">
				* </span>
				</label>
				<div id="cid_8" class="form-input jf-required">
					<select class="form-dropdown validate[required]" style="width:150px" id="input_8" name="mohArea">
					
					</select>
				</div>
			</li>
		</td>
	</tr>
	</table>
	<li class="form-line form-field-hidden" style="display:none;" data-type="control_matrix" id="id_11">
		<label class="form-label form-label-left form-label-auto" id="label_11" for="input_11">
		PHI Area Vs Diseases </label>
		<div id="cid_11" class="form-input jf-required">
		<table summary="" cellpadding="4" cellspacing="0" class="form-matrix-table">
			<tr>
				<th style="border:none">&nbsp; </th>
				<th class="form-matrix-column-headers form-matrix-column_0">Internationally Notifiable Diseases(Cholera, Plague, Yellow Fever)</th>
				<th class="form-matrix-column-headers form-matrix-column_1">Polio Myelitis / Acute Flaccid Paralysis </th>
				<th class="form-matrix-column-headers form-matrix-column_2">Chicken Pox </th>
				<th class="form-matrix-column-headers form-matrix-column_3">Dengue Fever/ Dengue Hemorrhagic Fever </th>
				<th class="form-matrix-column-headers form-matrix-column_4">Diphtheria </th>
				<th class="form-matrix-column-headers form-matrix-column_5">Dysentery </th>
				<th class="form-matrix-column-headers form-matrix-column_6">Encephalitis (including Japanese Encephalitis) </th>
				<th class="form-matrix-column-headers form-matrix-column_7">Enteric Fever </th>
				<th class="form-matrix-column-headers form-matrix-column_8">Food Poisoning </th>
				<th class="form-matrix-column-headers form-matrix-column_9">Human Rabies </th>
				<th class="form-matrix-column-headers form-matrix-column_10">Leptospirosis </th>
				<th class="form-matrix-column-headers form-matrix-column_11">Malaria </th>
				<th class="form-matrix-column-headers form-matrix-column_12">Measles </th>
				<th class="form-matrix-column-headers form-matrix-column_13">Meningitis </th>
				<th class="form-matrix-column-headers form-matrix-column_14">Mumps </th>
				<th class="form-matrix-column-headers form-matrix-column_15">Rubella </th>
				<th class="form-matrix-column-headers form-matrix-column_16">Congenital Rubella Syndrome </th>
				<th class="form-matrix-column-headers form-matrix-column_17">Simple continued fever </th>
				<th class="form-matrix-column-headers form-matrix-column_18">Tetanus </th>
				<th class="form-matrix-column-headers form-matrix-column_19">Neonatal tetanus </th>
				<th class="form-matrix-column-headers form-matrix-column_20">Typhus Fever </th>
				<th class="form-matrix-column-headers form-matrix-column_21">Viral Hepatitis </th>
				<th class="form-matrix-column-headers form-matrix-column_22">Whooping cough </th>
				<th class="form-matrix-column-headers form-matrix-column_23">Tuberculosis </th>				
			</tr>
			<tr>
				<th align="left" class="form-matrix-row-headers">Arali </th>
				<td align="center" class="form-matrix-values">
				<input id="input_11_0_0" type="text" class="form-number-input form-dropdown" name="q11_phiArea11[0][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_0,input_11_1_0,input_11_2_0,input_11_3_0,input_11_4_0,input_11_5_0,input_11_6_0);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_0_1" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[0][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_1,input_11_1_1,input_11_2_1,input_11_3_1,input_11_4_1,input_11_5_1,input_11_6_1);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_0_2" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[0][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_2,input_11_1_2,input_11_2_2,input_11_3_2,input_11_4_2,input_11_5_2,input_11_6_2);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_0_3" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[0][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_3,input_11_1_3,input_11_2_3,input_11_3_3,input_11_4_3,input_11_5_3,input_11_6_3);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_0_4" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[0][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_4,input_11_1_4,input_11_2_4,input_11_3_4,input_11_4_4,input_11_5_4,input_11_6_4);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_0_5" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[0][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_5,input_11_1_5,input_11_2_5,input_11_3_5,input_11_4_5,input_11_5_5,input_11_6_5);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_0_6" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[0][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_6,input_11_1_6,input_11_2_6,input_11_3_6,input_11_4_6,input_11_5_6,input_11_6_6);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_0_7" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[0][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_7,input_11_1_7,input_11_2_7,input_11_3_7,input_11_4_7,input_11_5_7,input_11_6_7);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_0_8" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[0][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_8,input_11_1_8,input_11_2_8,input_11_3_8,input_11_4_8,input_11_5_8,input_11_6_8);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_0_9" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[0][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_9,input_11_1_9,input_11_2_9,input_11_3_9,input_11_4_9,input_11_5_9,input_11_6_9);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_0_10" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[0][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_10,input_11_1_10,input_11_2_10,input_11_3_10,input_11_4_10,input_11_5_10,input_11_6_10);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_0_11" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[0][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_11,input_11_1_11,input_11_2_11,input_11_3_11,input_11_4_11,input_11_5_11,input_11_6_11);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_0_12" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[0][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_12,input_11_1_12,input_11_2_12,input_11_3_12,input_11_4_12,input_11_5_12,input_11_6_12);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_0_13" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[0][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_13,input_11_1_13,input_11_2_13,input_11_3_13,input_11_4_13,input_11_5_13,input_11_6_13);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_0_14" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[0][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_14,input_11_1_14,input_11_2_14,input_11_3_14,input_11_4_14,input_11_5_14,input_11_6_14);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_0_15" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[0][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_15,input_11_1_15,input_11_2_15,input_11_3_15,input_11_4_15,input_11_5_15,input_11_6_15);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_0_16" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[0][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_16,input_11_1_16,input_11_2_16,input_11_3_16,input_11_4_16,input_11_5_16,input_11_6_16);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_0_17" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[0][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_17,input_11_1_17,input_11_2_17,input_11_3_17,input_11_4_17,input_11_5_17,input_11_6_17);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_0_18" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[0][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_18,input_11_1_18,input_11_2_18,input_11_3_18,input_11_4_18,input_11_5_18,input_11_6_18);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_0_19" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[0][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_19,input_11_1_19,input_11_2_19,input_11_3_19,input_11_4_19,input_11_5_19,input_11_6_19);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_0_20" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[0][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_20,input_11_1_20,input_11_2_20,input_11_3_20,input_11_4_20,input_11_5_20,input_11_6_20);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_0_21" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[0][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_21,input_11_1_21,input_11_2_21,input_11_3_21,input_11_4_21,input_11_5_21,input_11_6_21);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_0_22" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[0][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_22,input_11_1_22,input_11_2_22,input_11_3_22,input_11_4_22,input_11_5_22,input_11_6_22);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_0_23" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[0][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_23,input_11_1_23,input_11_2_23,input_11_3_23,input_11_4_23,input_11_5_23,input_11_6_23);"/>
				</td>				
			</tr>
			<tr>
				<th align="left" class="form-matrix-row-headers">
				Chankanai </th>
				<td align="center" class="form-matrix-values">
				<input id="input_11_1_0" type="text" class="form-number-input form-dropdown" name="q11_phiArea11[1][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_0,input_11_1_0,input_11_2_0,input_11_3_0,input_11_4_0,input_11_5_0,input_11_6_0);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_1_1" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[1][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_1,input_11_1_1,input_11_2_1,input_11_3_1,input_11_4_1,input_11_5_1,input_11_6_1);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_1_2" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[1][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_2,input_11_1_2,input_11_2_2,input_11_3_2,input_11_4_2,input_11_5_2,input_11_6_2);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_1_3" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[1][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_3,input_11_1_3,input_11_2_3,input_11_3_3,input_11_4_3,input_11_5_3,input_11_6_3);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_1_4" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[1][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_4,input_11_1_4,input_11_2_4,input_11_3_4,input_11_4_4,input_11_5_4,input_11_6_4);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_1_5" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[1][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_5,input_11_1_5,input_11_2_5,input_11_3_5,input_11_4_5,input_11_5_5,input_11_6_5);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_1_6" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[1][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_6,input_11_1_6,input_11_2_6,input_11_3_6,input_11_4_6,input_11_5_6,input_11_6_6);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_1_7" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[1][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_7,input_11_1_7,input_11_2_7,input_11_3_7,input_11_4_7,input_11_5_7,input_11_6_7);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_1_8" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[1][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_8,input_11_1_8,input_11_2_8,input_11_3_8,input_11_4_8,input_11_5_8,input_11_6_8);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_1_9" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[1][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_9,input_11_1_9,input_11_2_9,input_11_3_9,input_11_4_9,input_11_5_9,input_11_6_9);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_1_10" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[1][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_10,input_11_1_10,input_11_2_10,input_11_3_10,input_11_4_10,input_11_5_10,input_11_6_10);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_1_11" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[1][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_11,input_11_1_11,input_11_2_11,input_11_3_11,input_11_4_11,input_11_5_11,input_11_6_11);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_1_12" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[1][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_12,input_11_1_12,input_11_2_12,input_11_3_12,input_11_4_12,input_11_5_12,input_11_6_12);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_1_13" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[1][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_13,input_11_1_13,input_11_2_13,input_11_3_13,input_11_4_13,input_11_5_13,input_11_6_13);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_1_14" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[1][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_14,input_11_1_14,input_11_2_14,input_11_3_14,input_11_4_14,input_11_5_14,input_11_6_14);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_1_15" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[1][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_15,input_11_1_15,input_11_2_15,input_11_3_15,input_11_4_15,input_11_5_15,input_11_6_15);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_1_16" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[1][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_16,input_11_1_16,input_11_2_16,input_11_3_16,input_11_4_16,input_11_5_16,input_11_6_16);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_1_17" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[1][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_17,input_11_1_17,input_11_2_17,input_11_3_17,input_11_4_17,input_11_5_17,input_11_6_17);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_1_18" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[1][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_18,input_11_1_18,input_11_2_18,input_11_3_18,input_11_4_18,input_11_5_18,input_11_6_18);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_1_19" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[1][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_19,input_11_1_19,input_11_2_19,input_11_3_19,input_11_4_19,input_11_5_19,input_11_6_19);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_1_20" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[1][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_20,input_11_1_20,input_11_2_20,input_11_3_20,input_11_4_20,input_11_5_20,input_11_6_20);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_1_21" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[1][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_21,input_11_1_21,input_11_2_21,input_11_3_21,input_11_4_21,input_11_5_21,input_11_6_21);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_1_22" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[1][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_22,input_11_1_22,input_11_2_22,input_11_3_22,input_11_4_22,input_11_5_22,input_11_6_22);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_1_23" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[1][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_23,input_11_1_23,input_11_2_23,input_11_3_23,input_11_4_23,input_11_5_23,input_11_6_23);"/>
				</td>
			</tr>
			<tr>
				<th align="left" class="form-matrix-row-headers">
				Chulipuram </th>
				<td align="center" class="form-matrix-values">
				<input id="input_11_2_0" type="text" class="form-number-input form-dropdown" name="q11_phiArea11[2][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_0,input_11_1_0,input_11_2_0,input_11_3_0,input_11_4_0,input_11_5_0,input_11_6_0);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_2_1" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[2][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_1,input_11_1_1,input_11_2_1,input_11_3_1,input_11_4_1,input_11_5_1,input_11_6_1);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_2_2" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[2][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_2,input_11_1_2,input_11_2_2,input_11_3_2,input_11_4_2,input_11_5_2,input_11_6_2);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_2_3" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[2][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_3,input_11_1_3,input_11_2_3,input_11_3_3,input_11_4_3,input_11_5_3,input_11_6_3);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_2_4" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[2][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_4,input_11_1_4,input_11_2_4,input_11_3_4,input_11_4_4,input_11_5_4,input_11_6_4);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_2_5" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[2][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_5,input_11_1_5,input_11_2_5,input_11_3_5,input_11_4_5,input_11_5_5,input_11_6_5);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_2_6" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[2][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_6,input_11_1_6,input_11_2_6,input_11_3_6,input_11_4_6,input_11_5_6,input_11_6_6);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_2_7" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[2][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_7,input_11_1_7,input_11_2_7,input_11_3_7,input_11_4_7,input_11_5_7,input_11_6_7);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_2_8" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[2][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_8,input_11_1_8,input_11_2_8,input_11_3_8,input_11_4_8,input_11_5_8,input_11_6_8);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_2_9" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[2][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_9,input_11_1_9,input_11_2_9,input_11_3_9,input_11_4_9,input_11_5_9,input_11_6_9);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_2_10" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[2][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_10,input_11_1_10,input_11_2_10,input_11_3_10,input_11_4_10,input_11_5_10,input_11_6_10);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_2_11" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[2][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_11,input_11_1_11,input_11_2_11,input_11_3_11,input_11_4_11,input_11_5_11,input_11_6_11);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_2_12" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[2][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_12,input_11_1_12,input_11_2_12,input_11_3_12,input_11_4_12,input_11_5_12,input_11_6_12);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_2_13" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[2][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_13,input_11_1_13,input_11_2_13,input_11_3_13,input_11_4_13,input_11_5_13,input_11_6_13);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_2_14" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[2][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_14,input_11_1_14,input_11_2_14,input_11_3_14,input_11_4_14,input_11_5_14,input_11_6_14);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_2_15" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[2][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_15,input_11_1_15,input_11_2_15,input_11_3_15,input_11_4_15,input_11_5_15,input_11_6_15);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_2_16" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[2][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_16,input_11_1_16,input_11_2_16,input_11_3_16,input_11_4_16,input_11_5_16,input_11_6_16);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_2_17" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[2][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_17,input_11_1_17,input_11_2_17,input_11_3_17,input_11_4_17,input_11_5_17,input_11_6_17);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_2_18" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[2][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_18,input_11_1_18,input_11_2_18,input_11_3_18,input_11_4_18,input_11_5_18,input_11_6_18);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_2_19" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[2][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_19,input_11_1_19,input_11_2_19,input_11_3_19,input_11_4_19,input_11_5_19,input_11_6_19);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_2_20" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[2][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_20,input_11_1_20,input_11_2_20,input_11_3_20,input_11_4_20,input_11_5_20,input_11_6_20);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_2_21" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[2][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_21,input_11_1_21,input_11_2_21,input_11_3_21,input_11_4_21,input_11_5_21,input_11_6_21);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_2_22" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[2][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_22,input_11_1_22,input_11_2_22,input_11_3_22,input_11_4_22,input_11_5_22,input_11_6_22);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_2_23" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[2][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_23,input_11_1_23,input_11_2_23,input_11_3_23,input_11_4_23,input_11_5_23,input_11_6_23);"/>
				</td>				
			</tr>
			<tr>
				<th align="left" class="form-matrix-row-headers">
				Moolai </th>
				<td align="center" class="form-matrix-values">
				<input id="input_11_3_0" type="text" class="form-number-input form-dropdown" name="q11_phiArea11[3][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_0,input_11_1_0,input_11_2_0,input_11_3_0,input_11_4_0,input_11_5_0,input_11_6_0);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_3_1" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[3][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_1,input_11_1_1,input_11_2_1,input_11_3_1,input_11_4_1,input_11_5_1,input_11_6_1);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_3_2" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[3][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_2,input_11_1_2,input_11_2_2,input_11_3_2,input_11_4_2,input_11_5_2,input_11_6_2);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_3_3" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[3][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_3,input_11_1_3,input_11_2_3,input_11_3_3,input_11_4_3,input_11_5_3,input_11_6_3);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_3_4" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[3][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_4,input_11_1_4,input_11_2_4,input_11_3_4,input_11_4_4,input_11_5_4,input_11_6_4);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_3_5" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[3][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_5,input_11_1_5,input_11_2_5,input_11_3_5,input_11_4_5,input_11_5_5,input_11_6_5);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_3_6" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[3][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_6,input_11_1_6,input_11_2_6,input_11_3_6,input_11_4_6,input_11_5_6,input_11_6_6);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_3_7" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[3][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_7,input_11_1_7,input_11_2_7,input_11_3_7,input_11_4_7,input_11_5_7,input_11_6_7);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_3_8" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[3][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_8,input_11_1_8,input_11_2_8,input_11_3_8,input_11_4_8,input_11_5_8,input_11_6_8);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_3_9" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[3][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_9,input_11_1_9,input_11_2_9,input_11_3_9,input_11_4_9,input_11_5_9,input_11_6_9);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_3_10" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[3][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_10,input_11_1_10,input_11_2_10,input_11_3_10,input_11_4_10,input_11_5_10,input_11_6_10);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_3_11" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[3][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_11,input_11_1_11,input_11_2_11,input_11_3_11,input_11_4_11,input_11_5_11,input_11_6_11);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_3_12" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[3][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_12,input_11_1_12,input_11_2_12,input_11_3_12,input_11_4_12,input_11_5_12,input_11_6_12);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_3_13" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[3][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_13,input_11_1_13,input_11_2_13,input_11_3_13,input_11_4_13,input_11_5_13,input_11_6_13);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_3_14" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[3][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_14,input_11_1_14,input_11_2_14,input_11_3_14,input_11_4_14,input_11_5_14,input_11_6_14);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_3_15" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[3][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_15,input_11_1_15,input_11_2_15,input_11_3_15,input_11_4_15,input_11_5_15,input_11_6_15);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_3_16" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[3][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_16,input_11_1_16,input_11_2_16,input_11_3_16,input_11_4_16,input_11_5_16,input_11_6_16);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_3_17" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[3][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_17,input_11_1_17,input_11_2_17,input_11_3_17,input_11_4_17,input_11_5_17,input_11_6_17);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_3_18" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[3][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_18,input_11_1_18,input_11_2_18,input_11_3_18,input_11_4_18,input_11_5_18,input_11_6_18);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_3_19" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[3][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_19,input_11_1_19,input_11_2_19,input_11_3_19,input_11_4_19,input_11_5_19,input_11_6_19);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_3_20" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[3][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_20,input_11_1_20,input_11_2_20,input_11_3_20,input_11_4_20,input_11_5_20,input_11_6_20);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_3_21" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[3][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_21,input_11_1_21,input_11_2_21,input_11_3_21,input_11_4_21,input_11_5_21,input_11_6_21);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_3_22" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[3][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_22,input_11_1_22,input_11_2_22,input_11_3_22,input_11_4_22,input_11_5_22,input_11_6_22);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_3_23" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[3][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_23,input_11_1_23,input_11_2_23,input_11_3_23,input_11_4_23,input_11_5_23,input_11_6_23);"/>
				</td>				
			</tr>
			<tr>
				<th align="left" class="form-matrix-row-headers">
				Sithankeny </th>
				<td align="center" class="form-matrix-values">
				<input id="input_11_4_0" type="text" class="form-number-input form-dropdown" name="q11_phiArea11[4][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_0,input_11_1_0,input_11_2_0,input_11_3_0,input_11_4_0,input_11_5_0,input_11_6_0);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_4_1" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[4][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_1,input_11_1_1,input_11_2_1,input_11_3_1,input_11_4_1,input_11_5_1,input_11_6_1);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_4_2" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[4][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_2,input_11_1_2,input_11_2_2,input_11_3_2,input_11_4_2,input_11_5_2,input_11_6_2);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_4_3" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[4][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_3,input_11_1_3,input_11_2_3,input_11_3_3,input_11_4_3,input_11_5_3,input_11_6_3);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_4_4" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[4][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_4,input_11_1_4,input_11_2_4,input_11_3_4,input_11_4_4,input_11_5_4,input_11_6_4);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_4_5" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[4][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_5,input_11_1_5,input_11_2_5,input_11_3_5,input_11_4_5,input_11_5_5,input_11_6_5);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_4_6" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[4][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_6,input_11_1_6,input_11_2_6,input_11_3_6,input_11_4_6,input_11_5_6,input_11_6_6);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_4_7" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[4][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_7,input_11_1_7,input_11_2_7,input_11_3_7,input_11_4_7,input_11_5_7,input_11_6_7);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_4_8" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[4][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_8,input_11_1_8,input_11_2_8,input_11_3_8,input_11_4_8,input_11_5_8,input_11_6_8);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_4_9" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[4][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_9,input_11_1_9,input_11_2_9,input_11_3_9,input_11_4_9,input_11_5_9,input_11_6_9);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_4_10" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[4][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_10,input_11_1_10,input_11_2_10,input_11_3_10,input_11_4_10,input_11_5_10,input_11_6_10);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_4_11" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[4][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_11,input_11_1_11,input_11_2_11,input_11_3_11,input_11_4_11,input_11_5_11,input_11_6_11);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_4_12" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[4][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_12,input_11_1_12,input_11_2_12,input_11_3_12,input_11_4_12,input_11_5_12,input_11_6_12);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_4_13" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[4][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_13,input_11_1_13,input_11_2_13,input_11_3_13,input_11_4_13,input_11_5_13,input_11_6_13);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_4_14" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[4][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_14,input_11_1_14,input_11_2_14,input_11_3_14,input_11_4_14,input_11_5_14,input_11_6_14);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_4_15" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[4][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_15,input_11_1_15,input_11_2_15,input_11_3_15,input_11_4_15,input_11_5_15,input_11_6_15);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_4_16" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[4][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_16,input_11_1_16,input_11_2_16,input_11_3_16,input_11_4_16,input_11_5_16,input_11_6_16);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_4_17" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[4][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_17,input_11_1_17,input_11_2_17,input_11_3_17,input_11_4_17,input_11_5_17,input_11_6_17);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_4_18" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[4][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_18,input_11_1_18,input_11_2_18,input_11_3_18,input_11_4_18,input_11_5_18,input_11_6_18);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_4_19" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[4][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_19,input_11_1_19,input_11_2_19,input_11_3_19,input_11_4_19,input_11_5_19,input_11_6_19);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_4_20" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[4][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_20,input_11_1_20,input_11_2_20,input_11_3_20,input_11_4_20,input_11_5_20,input_11_6_20);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_4_21" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[4][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_21,input_11_1_21,input_11_2_21,input_11_3_21,input_11_4_21,input_11_5_21,input_11_6_21);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_4_22" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[4][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_22,input_11_1_22,input_11_2_22,input_11_3_22,input_11_4_22,input_11_5_22,input_11_6_22);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_4_23" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[4][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_23,input_11_1_23,input_11_2_23,input_11_3_23,input_11_4_23,input_11_5_23,input_11_6_23);"/>
				</td>
			</tr>
			<tr>
				<th align="left" class="form-matrix-row-headers">
				Vaddukoddai </th>
				<td align="center" class="form-matrix-values">
				<input id="input_11_5_0" type="text" class="form-number-input form-dropdown" name="q11_phiArea11[5][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_0,input_11_1_0,input_11_2_0,input_11_3_0,input_11_4_0,input_11_5_0,input_11_6_0);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_5_1" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[5][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_1,input_11_1_1,input_11_2_1,input_11_3_1,input_11_4_1,input_11_5_1,input_11_6_1);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_5_2" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[5][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_2,input_11_1_2,input_11_2_2,input_11_3_2,input_11_4_2,input_11_5_2,input_11_6_2);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_5_3" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[5][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_3,input_11_1_3,input_11_2_3,input_11_3_3,input_11_4_3,input_11_5_3,input_11_6_3);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_5_4" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[5][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_4,input_11_1_4,input_11_2_4,input_11_3_4,input_11_4_4,input_11_5_4,input_11_6_4);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_5_5" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[5][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_5,input_11_1_5,input_11_2_5,input_11_3_5,input_11_4_5,input_11_5_5,input_11_6_5);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_5_6" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[5][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_6,input_11_1_6,input_11_2_6,input_11_3_6,input_11_4_6,input_11_5_6,input_11_6_6);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_5_7" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[5][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_7,input_11_1_7,input_11_2_7,input_11_3_7,input_11_4_7,input_11_5_7,input_11_6_7);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_5_8" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[5][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_8,input_11_1_8,input_11_2_8,input_11_3_8,input_11_4_8,input_11_5_8,input_11_6_8);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_5_9" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[5][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_9,input_11_1_9,input_11_2_9,input_11_3_9,input_11_4_9,input_11_5_9,input_11_6_9);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_5_10" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[5][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_10,input_11_1_10,input_11_2_10,input_11_3_10,input_11_4_10,input_11_5_10,input_11_6_10);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_5_11" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[5][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_11,input_11_1_11,input_11_2_11,input_11_3_11,input_11_4_11,input_11_5_11,input_11_6_11);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_5_12" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[5][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_12,input_11_1_12,input_11_2_12,input_11_3_12,input_11_4_12,input_11_5_12,input_11_6_12);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_5_13" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[5][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_13,input_11_1_13,input_11_2_13,input_11_3_13,input_11_4_13,input_11_5_13,input_11_6_13);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_5_14" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[5][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_14,input_11_1_14,input_11_2_14,input_11_3_14,input_11_4_14,input_11_5_14,input_11_6_14);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_5_15" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[5][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_15,input_11_1_15,input_11_2_15,input_11_3_15,input_11_4_15,input_11_5_15,input_11_6_15);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_5_16" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[5][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_16,input_11_1_16,input_11_2_16,input_11_3_16,input_11_4_16,input_11_5_16,input_11_6_16);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_5_17" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[5][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_17,input_11_1_17,input_11_2_17,input_11_3_17,input_11_4_17,input_11_5_17,input_11_6_17);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_5_18" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[5][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_18,input_11_1_18,input_11_2_18,input_11_3_18,input_11_4_18,input_11_5_18,input_11_6_18);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_5_19" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[5][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_19,input_11_1_19,input_11_2_19,input_11_3_19,input_11_4_19,input_11_5_19,input_11_6_19);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_5_20" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[5][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_20,input_11_1_20,input_11_2_20,input_11_3_20,input_11_4_20,input_11_5_20,input_11_6_20);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_5_21" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[5][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_21,input_11_1_21,input_11_2_21,input_11_3_21,input_11_4_21,input_11_5_21,input_11_6_21);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_5_22" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[5][]" style="width:60px" size="5" onchange="chankanaichankanaiTotal(input_11_0_22,input_11_1_22,input_11_2_22,input_11_3_22,input_11_4_22,input_11_5_22,input_11_6_22);"/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_5_23" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[5][]" style="width:60px" size="5" onchange="chankanaiTotal(input_11_0_23,input_11_1_23,input_11_2_23,input_11_3_23,input_11_4_23,input_11_5_23,input_11_6_23);"/>
				</td>
			</tr>
			<tr>
				<th align="left" class="form-matrix-row-headers">
				Total </th> 
				<td align="center" class="form-matrix-values">
				<input id="input_11_6_0" type="text" class="form-number-input form-dropdown" name="q11_phiArea11[6][]" style="width:60px" size="5" disabled/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_6_1" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[6][]" style="width:60px" size="5" disabled/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_6_2" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[6][]" style="width:60px" size="5" disabled/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_6_3" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[6][]" style="width:60px" size="5" disabled/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_6_4" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[6][]" style="width:60px" size="5" disabled/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_6_5" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[6][]" style="width:60px" size="5" disabled/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_6_6" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[6][]" style="width:60px" size="5" disabled/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_6_7" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[6][]" style="width:60px" size="5" disabled/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_6_8" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[6][]" style="width:60px" size="5" disabled/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_6_9" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[6][]" style="width:60px" size="5" disabled/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_6_10" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[6][]" style="width:60px" size="5" disabled/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_6_11" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[6][]" style="width:60px" size="5" disabled/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_6_12" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[6][]" style="width:60px" size="5" disabled/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_6_13" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[6][]" style="width:60px" size="5" disabled/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_6_14" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[6][]" style="width:60px" size="5" disabled/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_6_15" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[6][]" style="width:60px" size="5" disabled/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_6_16" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[6][]" style="width:60px" size="5" disabled/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_6_17" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[6][]" style="width:60px" size="5" disabled/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_6_18" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[6][]" style="width:60px" size="5" disabled/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_6_19" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[6][]" style="width:60px" size="5" disabled/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_6_20" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[6][]" style="width:60px" size="5" disabled/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_6_21" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[6][]" style="width:60px" size="5" disabled/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_6_22" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[6][]" style="width:60px" size="5" disabled/>
				</td>
				<td align="center" class="form-matrix-values">
				<input id="input_11_6_23" type="number" class="form-number-input form-dropdown" name="q11_phiArea11[6][]" style="width:60px" size="5" disabled/>
				</td>
			</tr>
		</table>
	</div>
</li>
<li class="form-line form-field-hidden" style="display:none;" data-type="control_matrix" id="id_12">
	<label class="form-label form-label-left form-label-auto" id="label_12" for="input_12">
	PHI Area Vs Diseases </label>
	<div id="cid_12" class="form-input jf-required">
	<table summary="" cellpadding="4" cellspacing="0" class="form-matrix-table">
		<tr>
			<th style="border:none">&nbsp; </th>
				<th class="form-matrix-column-headers form-matrix-column_0">Internationally Notifiable Diseases(Cholera, Plague, Yellow Fever)</th>
				<th class="form-matrix-column-headers form-matrix-column_1">Polio Myelitis / Acute Flaccid Paralysis </th>
				<th class="form-matrix-column-headers form-matrix-column_2">Chicken Pox </th>
				<th class="form-matrix-column-headers form-matrix-column_3">Dengue Fever/ Dengue Hemorrhagic Fever </th>
				<th class="form-matrix-column-headers form-matrix-column_4">Diphtheria </th>
				<th class="form-matrix-column-headers form-matrix-column_5">Dysentery </th>
				<th class="form-matrix-column-headers form-matrix-column_6">Encephalitis (including Japanese Encephalitis) </th>
				<th class="form-matrix-column-headers form-matrix-column_7">Enteric Fever </th>
				<th class="form-matrix-column-headers form-matrix-column_8">Food Poisoning </th>
				<th class="form-matrix-column-headers form-matrix-column_9">Human Rabies </th>
				<th class="form-matrix-column-headers form-matrix-column_10">Leptospirosis </th>
				<th class="form-matrix-column-headers form-matrix-column_11">Malaria </th>
				<th class="form-matrix-column-headers form-matrix-column_12">Measles </th>
				<th class="form-matrix-column-headers form-matrix-column_13">Meningitis </th>
				<th class="form-matrix-column-headers form-matrix-column_14">Mumps </th>
				<th class="form-matrix-column-headers form-matrix-column_15">Rubella </th>
				<th class="form-matrix-column-headers form-matrix-column_16">Congenital Rubella Syndrome </th>
				<th class="form-matrix-column-headers form-matrix-column_17">Simple continued fever </th>
				<th class="form-matrix-column-headers form-matrix-column_18">Tetanus </th>
				<th class="form-matrix-column-headers form-matrix-column_19">Neonatal tetanus </th>
				<th class="form-matrix-column-headers form-matrix-column_20">Typhus Fever </th>
				<th class="form-matrix-column-headers form-matrix-column_21">Viral Hepatitis </th>
				<th class="form-matrix-column-headers form-matrix-column_22">Whooping cough </th>
				<th class="form-matrix-column-headers form-matrix-column_23">Tuberculosis </th>
		</tr>
		<tr>
			<th align="left" class="form-matrix-row-headers">Eluthumadduval </th>
			<td align="center" class="form-matrix-values">
			<input id="input_12_0_0" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[0][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_0,input_12_1_0,input_12_2_0,input_12_3_0,input_12_4_0,input_12_5_0,input_12_6_0,input_12_7_0,input_12_8_0,input_12_9_0,input_12_10_0,input_12_11_0);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_0_1" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[0][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_1,input_12_1_1,input_12_2_1,input_12_3_1,input_12_4_1,input_12_5_1,input_12_6_1,input_12_7_1,input_12_8_1,input_12_9_1,input_12_10_1,input_12_11_1);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_0_2" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[0][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_2,input_12_1_2,input_12_2_2,input_12_3_2,input_12_4_2,input_12_5_2,input_12_6_2,input_12_7_2,input_12_8_2,input_12_9_2,input_12_10_2,input_12_11_2);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_0_3" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[0][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_3,input_12_1_3,input_12_2_3,input_12_3_3,input_12_4_3,input_12_5_3,input_12_6_3,input_12_7_3,input_12_8_3,input_12_9_3,input_12_10_3,input_12_11_3);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_0_4" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[0][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_4,input_12_1_4,input_12_2_4,input_12_3_4,input_12_4_4,input_12_5_4,input_12_6_4,input_12_7_4,input_12_8_4,input_12_9_4,input_12_10_4,input_12_11_4);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_0_5" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[0][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_5,input_12_1_5,input_12_2_5,input_12_3_5,input_12_4_5,input_12_5_5,input_12_6_5,input_12_7_5,input_12_8_5,input_12_9_5,input_12_10_5,input_12_11_5);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_0_6" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[0][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_6,input_12_1_6,input_12_2_6,input_12_3_6,input_12_4_6,input_12_5_6,input_12_6_6,input_12_7_6,input_12_8_6,input_12_9_6,input_12_10_6,input_12_11_6);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_0_7" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[0][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_7,input_12_1_7,input_12_2_7,input_12_3_7,input_12_4_7,input_12_5_7,input_12_6_7,input_12_7_7,input_12_8_7,input_12_9_7,input_12_10_7,input_12_11_7);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_0_8" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[0][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_8,input_12_1_8,input_12_2_8,input_12_3_8,input_12_4_8,input_12_5_8,input_12_6_8,input_12_7_8,input_12_8_8,input_12_9_8,input_12_10_8,input_12_11_8);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_0_9" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[0][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_9,input_12_1_9,input_12_2_9,input_12_3_9,input_12_4_9,input_12_5_9,input_12_6_9,input_12_7_9,input_12_8_9,input_12_9_9,input_12_10_9,input_12_11_9);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_0_10" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[0][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_10,input_12_1_10,input_12_2_10,input_12_3_10,input_12_4_10,input_12_5_10,input_12_6_10,input_12_7_10,input_12_8_10,input_12_9_10,input_12_10_10,input_12_11_10);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_0_11" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[0][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_11,input_12_1_11,input_12_2_11,input_12_3_11,input_12_4_11,input_12_5_11,input_12_6_11,input_12_7_11,input_12_8_11,input_12_9_11,input_12_10_11,input_12_11_11);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_0_12" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[0][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_12,input_12_1_12,input_12_2_12,input_12_3_12,input_12_4_12,input_12_5_12,input_12_6_12,input_12_7_12,input_12_8_12,input_12_9_12,input_12_10_12,input_12_11_12);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_0_13" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[0][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_13,input_12_1_13,input_12_2_13,input_12_3_13,input_12_4_13,input_12_5_13,input_12_6_13,input_12_7_13,input_12_8_13,input_12_9_13,input_12_10_13,input_12_11_13);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_0_14" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[0][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_14,input_12_1_14,input_12_2_14,input_12_3_14,input_12_4_14,input_12_5_14,input_12_6_14,input_12_7_14,input_12_8_14,input_12_9_14,input_12_10_14,input_12_11_14);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_0_15" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[0][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_15,input_12_1_15,input_12_2_15,input_12_3_15,input_12_4_15,input_12_5_15,input_12_6_15,input_12_7_15,input_12_8_15,input_12_9_15,input_12_10_15,input_12_11_15);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_0_16" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[0][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_16,input_12_1_16,input_12_2_16,input_12_3_16,input_12_4_16,input_12_5_16,input_12_6_16,input_12_7_16,input_12_8_16,input_12_9_16,input_12_10_16,input_12_11_16);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_0_17" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[0][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_17,input_12_1_17,input_12_2_17,input_12_3_17,input_12_4_17,input_12_5_17,input_12_6_17,input_12_7_17,input_12_8_17,input_12_9_17,input_12_10_17,input_12_11_17);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_0_18" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[0][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_18,input_12_1_18,input_12_2_18,input_12_3_18,input_12_4_18,input_12_5_18,input_12_6_18,input_12_7_18,input_12_8_18,input_12_9_18,input_12_10_18,input_12_11_18);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_0_19" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[0][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_19,input_12_1_19,input_12_2_19,input_12_3_19,input_12_4_19,input_12_5_19,input_12_6_19,input_12_7_19,input_12_8_19,input_12_9_19,input_12_10_19,input_12_11_19);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_0_20" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[0][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_20,input_12_1_20,input_12_2_20,input_12_3_20,input_12_4_20,input_12_5_20,input_12_6_20,input_12_7_20,input_12_8_20,input_12_9_20,input_12_10_20,input_12_11_20);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_0_21" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[0][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_21,input_12_1_21,input_12_2_21,input_12_3_21,input_12_4_21,input_12_5_21,input_12_6_21,input_12_7_21,input_12_8_21,input_12_9_21,input_12_10_21,input_12_11_21);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_0_22" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[0][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_22,input_12_1_22,input_12_2_22,input_12_3_22,input_12_4_22,input_12_5_22,input_12_6_22,input_12_7_22,input_12_8_22,input_12_9_22,input_12_10_22,input_12_11_22);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_0_23" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[0][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_23,input_12_1_23,input_12_2_23,input_12_3_23,input_12_4_23,input_12_5_23,input_12_6_23,input_12_7_23,input_12_8_23,input_12_9_23,input_12_10_23,input_12_11_23);"/>
			</td>			
		</tr>
		<tr>
			<th align="left" class="form-matrix-row-headers">Kaithady </th>
			<td align="center" class="form-matrix-values">
			<input id="input_12_1_0" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[1][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_0,input_12_1_0,input_12_2_0,input_12_3_0,input_12_4_0,input_12_5_0,input_12_6_0,input_12_7_0,input_12_8_0,input_12_9_0,input_12_10_0,input_12_11_0);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_1_1" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[1][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_1,input_12_1_1,input_12_2_1,input_12_3_1,input_12_4_1,input_12_5_1,input_12_6_1,input_12_7_1,input_12_8_1,input_12_9_1,input_12_10_1,input_12_11_1);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_1_2" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[1][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_2,input_12_1_2,input_12_2_2,input_12_3_2,input_12_4_2,input_12_5_2,input_12_6_2,input_12_7_2,input_12_8_2,input_12_9_2,input_12_10_2,input_12_11_2);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_1_3" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[1][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_3,input_12_1_3,input_12_2_3,input_12_3_3,input_12_4_3,input_12_5_3,input_12_6_3,input_12_7_3,input_12_8_3,input_12_9_3,input_12_10_3,input_12_11_3);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_1_4" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[1][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_4,input_12_1_4,input_12_2_4,input_12_3_4,input_12_4_4,input_12_5_4,input_12_6_4,input_12_7_4,input_12_8_4,input_12_9_4,input_12_10_4,input_12_11_4);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_1_5" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[1][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_5,input_12_1_5,input_12_2_5,input_12_3_5,input_12_4_5,input_12_5_5,input_12_6_5,input_12_7_5,input_12_8_5,input_12_9_5,input_12_10_5,input_12_11_5);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_1_6" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[1][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_6,input_12_1_6,input_12_2_6,input_12_3_6,input_12_4_6,input_12_5_6,input_12_6_6,input_12_7_6,input_12_8_6,input_12_9_6,input_12_10_6,input_12_11_6);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_1_7" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[1][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_7,input_12_1_7,input_12_2_7,input_12_3_7,input_12_4_7,input_12_5_7,input_12_6_7,input_12_7_7,input_12_8_7,input_12_9_7,input_12_10_7,input_12_11_7);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_1_8" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[1][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_8,input_12_1_8,input_12_2_8,input_12_3_8,input_12_4_8,input_12_5_8,input_12_6_8,input_12_7_8,input_12_8_8,input_12_9_8,input_12_10_8,input_12_11_8);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_1_9" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[1][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_9,input_12_1_9,input_12_2_9,input_12_3_9,input_12_4_9,input_12_5_9,input_12_6_9,input_12_7_9,input_12_8_9,input_12_9_9,input_12_10_9,input_12_11_9);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_1_10" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[1][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_10,input_12_1_10,input_12_2_10,input_12_3_10,input_12_4_10,input_12_5_10,input_12_6_10,input_12_7_10,input_12_8_10,input_12_9_10,input_12_10_10,input_12_11_10);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_1_11" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[1][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_11,input_12_1_11,input_12_2_11,input_12_3_11,input_12_4_11,input_12_5_11,input_12_6_11,input_12_7_11,input_12_8_11,input_12_9_11,input_12_10_11,input_12_11_11);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_1_12" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[1][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_12,input_12_1_12,input_12_2_12,input_12_3_12,input_12_4_12,input_12_5_12,input_12_6_12,input_12_7_12,input_12_8_12,input_12_9_12,input_12_10_12,input_12_11_12);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_1_13" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[1][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_13,input_12_1_13,input_12_2_13,input_12_3_13,input_12_4_13,input_12_5_13,input_12_6_13,input_12_7_13,input_12_8_13,input_12_9_13,input_12_10_13,input_12_11_13);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_1_14" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[1][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_14,input_12_1_14,input_12_2_14,input_12_3_14,input_12_4_14,input_12_5_14,input_12_6_14,input_12_7_14,input_12_8_14,input_12_9_14,input_12_10_14,input_12_11_14);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_1_15" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[1][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_15,input_12_1_15,input_12_2_15,input_12_3_15,input_12_4_15,input_12_5_15,input_12_6_15,input_12_7_15,input_12_8_15,input_12_9_15,input_12_10_15,input_12_11_15);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_1_16" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[1][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_16,input_12_1_16,input_12_2_16,input_12_3_16,input_12_4_16,input_12_5_16,input_12_6_16,input_12_7_16,input_12_8_16,input_12_9_16,input_12_10_16,input_12_11_16);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_1_17" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[1][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_17,input_12_1_17,input_12_2_17,input_12_3_17,input_12_4_17,input_12_5_17,input_12_6_17,input_12_7_17,input_12_8_17,input_12_9_17,input_12_10_17,input_12_11_17);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_1_18" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[1][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_18,input_12_1_18,input_12_2_18,input_12_3_18,input_12_4_18,input_12_5_18,input_12_6_18,input_12_7_18,input_12_8_18,input_12_9_18,input_12_10_18,input_12_11_18);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_1_19" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[1][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_19,input_12_1_19,input_12_2_19,input_12_3_19,input_12_4_19,input_12_5_19,input_12_6_19,input_12_7_19,input_12_8_19,input_12_9_19,input_12_10_19,input_12_11_19);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_1_20" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[1][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_20,input_12_1_20,input_12_2_20,input_12_3_20,input_12_4_20,input_12_5_20,input_12_6_20,input_12_7_20,input_12_8_20,input_12_9_20,input_12_10_20,input_12_11_20);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_1_21" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[1][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_21,input_12_1_21,input_12_2_21,input_12_3_21,input_12_4_21,input_12_5_21,input_12_6_21,input_12_7_21,input_12_8_21,input_12_9_21,input_12_10_21,input_12_11_21);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_1_22" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[1][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_22,input_12_1_22,input_12_2_22,input_12_3_22,input_12_4_22,input_12_5_22,input_12_6_22,input_12_7_22,input_12_8_22,input_12_9_22,input_12_10_22,input_12_11_22);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_1_23" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[1][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_23,input_12_1_23,input_12_2_23,input_12_3_23,input_12_4_23,input_12_5_23,input_12_6_23,input_12_7_23,input_12_8_23,input_12_9_23,input_12_10_23,input_12_11_23);"/>
			</td>
		</tr>
		<tr>
			<th align="left" class="form-matrix-row-headers">Kodikamam </th>
			<td align="center" class="form-matrix-values">
			<input id="input_12_2_0" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[2][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_0,input_12_1_0,input_12_2_0,input_12_3_0,input_12_4_0,input_12_5_0,input_12_6_0,input_12_7_0,input_12_8_0,input_12_9_0,input_12_10_0,input_12_11_0);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_2_1" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[2][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_1,input_12_1_1,input_12_2_1,input_12_3_1,input_12_4_1,input_12_5_1,input_12_6_1,input_12_7_1,input_12_8_1,input_12_9_1,input_12_10_1,input_12_11_1);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_2_2" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[2][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_2,input_12_1_2,input_12_2_2,input_12_3_2,input_12_4_2,input_12_5_2,input_12_6_2,input_12_7_2,input_12_8_2,input_12_9_2,input_12_10_2,input_12_11_2);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_2_3" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[2][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_3,input_12_1_3,input_12_2_3,input_12_3_3,input_12_4_3,input_12_5_3,input_12_6_3,input_12_7_3,input_12_8_3,input_12_9_3,input_12_10_3,input_12_11_3);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_2_4" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[2][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_4,input_12_1_4,input_12_2_4,input_12_3_4,input_12_4_4,input_12_5_4,input_12_6_4,input_12_7_4,input_12_8_4,input_12_9_4,input_12_10_4,input_12_11_4);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_2_5" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[2][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_5,input_12_1_5,input_12_2_5,input_12_3_5,input_12_4_5,input_12_5_5,input_12_6_5,input_12_7_5,input_12_8_5,input_12_9_5,input_12_10_5,input_12_11_5);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_2_6" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[2][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_6,input_12_1_6,input_12_2_6,input_12_3_6,input_12_4_6,input_12_5_6,input_12_6_6,input_12_7_6,input_12_8_6,input_12_9_6,input_12_10_6,input_12_11_6);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_2_7" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[2][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_7,input_12_1_7,input_12_2_7,input_12_3_7,input_12_4_7,input_12_5_7,input_12_6_7,input_12_7_7,input_12_8_7,input_12_9_7,input_12_10_7,input_12_11_7);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_2_8" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[2][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_8,input_12_1_8,input_12_2_8,input_12_3_8,input_12_4_8,input_12_5_8,input_12_6_8,input_12_7_8,input_12_8_8,input_12_9_8,input_12_10_8,input_12_11_8);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_2_9" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[2][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_9,input_12_1_9,input_12_2_9,input_12_3_9,input_12_4_9,input_12_5_9,input_12_6_9,input_12_7_9,input_12_8_9,input_12_9_9,input_12_10_9,input_12_11_9);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_2_10" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[2][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_10,input_12_1_10,input_12_2_10,input_12_3_10,input_12_4_10,input_12_5_10,input_12_6_10,input_12_7_10,input_12_8_10,input_12_9_10,input_12_10_10,input_12_11_10);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_2_11" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[2][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_11,input_12_1_11,input_12_2_11,input_12_3_11,input_12_4_11,input_12_5_11,input_12_6_11,input_12_7_11,input_12_8_11,input_12_9_11,input_12_10_11,input_12_11_11);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_2_12" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[2][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_12,input_12_1_12,input_12_2_12,input_12_3_12,input_12_4_12,input_12_5_12,input_12_6_12,input_12_7_12,input_12_8_12,input_12_9_12,input_12_10_12,input_12_11_12);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_2_13" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[2][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_13,input_12_1_13,input_12_2_13,input_12_3_13,input_12_4_13,input_12_5_13,input_12_6_13,input_12_7_13,input_12_8_13,input_12_9_13,input_12_10_13,input_12_11_13);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_2_14" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[2][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_14,input_12_1_14,input_12_2_14,input_12_3_14,input_12_4_14,input_12_5_14,input_12_6_14,input_12_7_14,input_12_8_14,input_12_9_14,input_12_10_14,input_12_11_14);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_2_15" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[2][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_15,input_12_1_15,input_12_2_15,input_12_3_15,input_12_4_15,input_12_5_15,input_12_6_15,input_12_7_15,input_12_8_15,input_12_9_15,input_12_10_15,input_12_11_15);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_2_16" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[2][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_16,input_12_1_16,input_12_2_16,input_12_3_16,input_12_4_16,input_12_5_16,input_12_6_16,input_12_7_16,input_12_8_16,input_12_9_16,input_12_10_16,input_12_11_16);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_2_17" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[2][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_17,input_12_1_17,input_12_2_17,input_12_3_17,input_12_4_17,input_12_5_17,input_12_6_17,input_12_7_17,input_12_8_17,input_12_9_17,input_12_10_17,input_12_11_17);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_2_18" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[2][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_18,input_12_1_18,input_12_2_18,input_12_3_18,input_12_4_18,input_12_5_18,input_12_6_18,input_12_7_18,input_12_8_18,input_12_9_18,input_12_10_18,input_12_11_18);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_2_19" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[2][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_19,input_12_1_19,input_12_2_19,input_12_3_19,input_12_4_19,input_12_5_19,input_12_6_19,input_12_7_19,input_12_8_19,input_12_9_19,input_12_10_19,input_12_11_19);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_2_20" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[2][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_20,input_12_1_20,input_12_2_20,input_12_3_20,input_12_4_20,input_12_5_20,input_12_6_20,input_12_7_20,input_12_8_20,input_12_9_20,input_12_10_20,input_12_11_20);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_2_21" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[2][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_21,input_12_1_21,input_12_2_21,input_12_3_21,input_12_4_21,input_12_5_21,input_12_6_21,input_12_7_21,input_12_8_21,input_12_9_21,input_12_10_21,input_12_11_21);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_2_22" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[2][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_22,input_12_1_22,input_12_2_22,input_12_3_22,input_12_4_22,input_12_5_22,input_12_6_22,input_12_7_22,input_12_8_22,input_12_9_22,input_12_10_22,input_12_11_22);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_2_23" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[2][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_23,input_12_1_23,input_12_2_23,input_12_3_23,input_12_4_23,input_12_5_23,input_12_6_23,input_12_7_23,input_12_8_23,input_12_9_23,input_12_10_23,input_12_11_23);"/>
			</td>
		</tr>
		<tr>
			<th align="left" class="form-matrix-row-headers">Madduvil </th>
			<td align="center" class="form-matrix-values">
			<input id="input_12_3_0" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[3][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_0,input_12_1_0,input_12_2_0,input_12_3_0,input_12_4_0,input_12_5_0,input_12_6_0,input_12_7_0,input_12_8_0,input_12_9_0,input_12_10_0,input_12_11_0);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_3_1" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[3][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_1,input_12_1_1,input_12_2_1,input_12_3_1,input_12_4_1,input_12_5_1,input_12_6_1,input_12_7_1,input_12_8_1,input_12_9_1,input_12_10_1,input_12_11_1);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_3_2" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[3][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_2,input_12_1_2,input_12_2_2,input_12_3_2,input_12_4_2,input_12_5_2,input_12_6_2,input_12_7_2,input_12_8_2,input_12_9_2,input_12_10_2,input_12_11_2);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_3_3" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[3][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_3,input_12_1_3,input_12_2_3,input_12_3_3,input_12_4_3,input_12_5_3,input_12_6_3,input_12_7_3,input_12_8_3,input_12_9_3,input_12_10_3,input_12_11_3);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_3_4" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[3][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_4,input_12_1_4,input_12_2_4,input_12_3_4,input_12_4_4,input_12_5_4,input_12_6_4,input_12_7_4,input_12_8_4,input_12_9_4,input_12_10_4,input_12_11_4);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_3_5" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[3][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_5,input_12_1_5,input_12_2_5,input_12_3_5,input_12_4_5,input_12_5_5,input_12_6_5,input_12_7_5,input_12_8_5,input_12_9_5,input_12_10_5,input_12_11_5);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_3_6" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[3][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_6,input_12_1_6,input_12_2_6,input_12_3_6,input_12_4_6,input_12_5_6,input_12_6_6,input_12_7_6,input_12_8_6,input_12_9_6,input_12_10_6,input_12_11_6);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_3_7" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[3][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_7,input_12_1_7,input_12_2_7,input_12_3_7,input_12_4_7,input_12_5_7,input_12_6_7,input_12_7_7,input_12_8_7,input_12_9_7,input_12_10_7,input_12_11_7);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_3_8" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[3][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_8,input_12_1_8,input_12_2_8,input_12_3_8,input_12_4_8,input_12_5_8,input_12_6_8,input_12_7_8,input_12_8_8,input_12_9_8,input_12_10_8,input_12_11_8);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_3_9" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[3][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_9,input_12_1_9,input_12_2_9,input_12_3_9,input_12_4_9,input_12_5_9,input_12_6_9,input_12_7_9,input_12_8_9,input_12_9_9,input_12_10_9,input_12_11_9);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_3_10" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[3][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_10,input_12_1_10,input_12_2_10,input_12_3_10,input_12_4_10,input_12_5_10,input_12_6_10,input_12_7_10,input_12_8_10,input_12_9_10,input_12_10_10,input_12_11_10);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_3_11" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[3][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_11,input_12_1_11,input_12_2_11,input_12_3_11,input_12_4_11,input_12_5_11,input_12_6_11,input_12_7_11,input_12_8_11,input_12_9_11,input_12_10_11,input_12_11_11);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_3_12" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[3][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_12,input_12_1_12,input_12_2_12,input_12_3_12,input_12_4_12,input_12_5_12,input_12_6_12,input_12_7_12,input_12_8_12,input_12_9_12,input_12_10_12,input_12_11_12);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_3_13" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[3][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_13,input_12_1_13,input_12_2_13,input_12_3_13,input_12_4_13,input_12_5_13,input_12_6_13,input_12_7_13,input_12_8_13,input_12_9_13,input_12_10_13,input_12_11_13);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_3_14" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[3][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_14,input_12_1_14,input_12_2_14,input_12_3_14,input_12_4_14,input_12_5_14,input_12_6_14,input_12_7_14,input_12_8_14,input_12_9_14,input_12_10_14,input_12_11_14);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_3_15" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[3][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_15,input_12_1_15,input_12_2_15,input_12_3_15,input_12_4_15,input_12_5_15,input_12_6_15,input_12_7_15,input_12_8_15,input_12_9_15,input_12_10_15,input_12_11_15);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_3_16" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[3][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_16,input_12_1_16,input_12_2_16,input_12_3_16,input_12_4_16,input_12_5_16,input_12_6_16,input_12_7_16,input_12_8_16,input_12_9_16,input_12_10_16,input_12_11_16);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_3_17" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[3][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_17,input_12_1_17,input_12_2_17,input_12_3_17,input_12_4_17,input_12_5_17,input_12_6_17,input_12_7_17,input_12_8_17,input_12_9_17,input_12_10_17,input_12_11_17);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_3_18" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[3][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_18,input_12_1_18,input_12_2_18,input_12_3_18,input_12_4_18,input_12_5_18,input_12_6_18,input_12_7_18,input_12_8_18,input_12_9_18,input_12_10_18,input_12_11_18);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_3_19" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[3][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_19,input_12_1_19,input_12_2_19,input_12_3_19,input_12_4_19,input_12_5_19,input_12_6_19,input_12_7_19,input_12_8_19,input_12_9_19,input_12_10_19,input_12_11_19);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_3_20" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[3][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_20,input_12_1_20,input_12_2_20,input_12_3_20,input_12_4_20,input_12_5_20,input_12_6_20,input_12_7_20,input_12_8_20,input_12_9_20,input_12_10_20,input_12_11_20);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_3_21" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[3][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_21,input_12_1_21,input_12_2_21,input_12_3_21,input_12_4_21,input_12_5_21,input_12_6_21,input_12_7_21,input_12_8_21,input_12_9_21,input_12_10_21,input_12_11_21);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_3_22" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[3][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_22,input_12_1_22,input_12_2_22,input_12_3_22,input_12_4_22,input_12_5_22,input_12_6_22,input_12_7_22,input_12_8_22,input_12_9_22,input_12_10_22,input_12_11_22);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_3_23" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[3][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_23,input_12_1_23,input_12_2_23,input_12_3_23,input_12_4_23,input_12_5_23,input_12_6_23,input_12_7_23,input_12_8_23,input_12_9_23,input_12_10_23,input_12_11_23);"/>
			</td>
		</tr>
		<tr>
			<th align="left" class="form-matrix-row-headers">
			Manthuvil </th>
			<td align="center" class="form-matrix-values">
			<input id="input_12_4_0" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[4][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_0,input_12_1_0,input_12_2_0,input_12_3_0,input_12_4_0,input_12_5_0,input_12_6_0,input_12_7_0,input_12_8_0,input_12_9_0,input_12_10_0,input_12_11_0);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_4_1" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[4][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_1,input_12_1_1,input_12_2_1,input_12_3_1,input_12_4_1,input_12_5_1,input_12_6_1,input_12_7_1,input_12_8_1,input_12_9_1,input_12_10_1,input_12_11_1);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_4_2" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[4][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_2,input_12_1_2,input_12_2_2,input_12_3_2,input_12_4_2,input_12_5_2,input_12_6_2,input_12_7_2,input_12_8_2,input_12_9_2,input_12_10_2,input_12_11_2);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_4_3" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[4][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_3,input_12_1_3,input_12_2_3,input_12_3_3,input_12_4_3,input_12_5_3,input_12_6_3,input_12_7_3,input_12_8_3,input_12_9_3,input_12_10_3,input_12_11_3);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_4_4" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[4][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_4,input_12_1_4,input_12_2_4,input_12_3_4,input_12_4_4,input_12_5_4,input_12_6_4,input_12_7_4,input_12_8_4,input_12_9_4,input_12_10_4,input_12_11_4);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_4_5" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[4][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_5,input_12_1_5,input_12_2_5,input_12_3_5,input_12_4_5,input_12_5_5,input_12_6_5,input_12_7_5,input_12_8_5,input_12_9_5,input_12_10_5,input_12_11_5);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_4_6" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[4][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_6,input_12_1_6,input_12_2_6,input_12_3_6,input_12_4_6,input_12_5_6,input_12_6_6,input_12_7_6,input_12_8_6,input_12_9_6,input_12_10_6,input_12_11_6);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_4_7" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[4][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_7,input_12_1_7,input_12_2_7,input_12_3_7,input_12_4_7,input_12_5_7,input_12_6_7,input_12_7_7,input_12_8_7,input_12_9_7,input_12_10_7,input_12_11_7);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_4_8" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[4][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_8,input_12_1_8,input_12_2_8,input_12_3_8,input_12_4_8,input_12_5_8,input_12_6_8,input_12_7_8,input_12_8_8,input_12_9_8,input_12_10_8,input_12_11_8);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_4_9" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[4][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_9,input_12_1_9,input_12_2_9,input_12_3_9,input_12_4_9,input_12_5_9,input_12_6_9,input_12_7_9,input_12_8_9,input_12_9_9,input_12_10_9,input_12_11_9);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_4_10" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[4][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_10,input_12_1_10,input_12_2_10,input_12_3_10,input_12_4_10,input_12_5_10,input_12_6_10,input_12_7_10,input_12_8_10,input_12_9_10,input_12_10_10,input_12_11_10);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_4_11" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[4][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_11,input_12_1_11,input_12_2_11,input_12_3_11,input_12_4_11,input_12_5_11,input_12_6_11,input_12_7_11,input_12_8_11,input_12_9_11,input_12_10_11,input_12_11_11);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_4_12" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[4][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_12,input_12_1_12,input_12_2_12,input_12_3_12,input_12_4_12,input_12_5_12,input_12_6_12,input_12_7_12,input_12_8_12,input_12_9_12,input_12_10_12,input_12_11_12);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_4_13" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[4][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_13,input_12_1_13,input_12_2_13,input_12_3_13,input_12_4_13,input_12_5_13,input_12_6_13,input_12_7_13,input_12_8_13,input_12_9_13,input_12_10_13,input_12_11_13);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_4_14" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[4][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_14,input_12_1_14,input_12_2_14,input_12_3_14,input_12_4_14,input_12_5_14,input_12_6_14,input_12_7_14,input_12_8_14,input_12_9_14,input_12_10_14,input_12_11_14);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_4_15" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[4][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_15,input_12_1_15,input_12_2_15,input_12_3_15,input_12_4_15,input_12_5_15,input_12_6_15,input_12_7_15,input_12_8_15,input_12_9_15,input_12_10_15,input_12_11_15);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_4_16" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[4][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_16,input_12_1_16,input_12_2_16,input_12_3_16,input_12_4_16,input_12_5_16,input_12_6_16,input_12_7_16,input_12_8_16,input_12_9_16,input_12_10_16,input_12_11_16);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_4_17" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[4][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_17,input_12_1_17,input_12_2_17,input_12_3_17,input_12_4_17,input_12_5_17,input_12_6_17,input_12_7_17,input_12_8_17,input_12_9_17,input_12_10_17,input_12_11_17);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_4_18" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[4][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_18,input_12_1_18,input_12_2_18,input_12_3_18,input_12_4_18,input_12_5_18,input_12_6_18,input_12_7_18,input_12_8_18,input_12_9_18,input_12_10_18,input_12_11_18);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_4_19" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[4][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_19,input_12_1_19,input_12_2_19,input_12_3_19,input_12_4_19,input_12_5_19,input_12_6_19,input_12_7_19,input_12_8_19,input_12_9_19,input_12_10_19,input_12_11_19);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_4_20" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[4][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_20,input_12_1_20,input_12_2_20,input_12_3_20,input_12_4_20,input_12_5_20,input_12_6_20,input_12_7_20,input_12_8_20,input_12_9_20,input_12_10_20,input_12_11_20);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_4_21" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[4][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_21,input_12_1_21,input_12_2_21,input_12_3_21,input_12_4_21,input_12_5_21,input_12_6_21,input_12_7_21,input_12_8_21,input_12_9_21,input_12_10_21,input_12_11_21);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_4_22" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[4][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_22,input_12_1_22,input_12_2_22,input_12_3_22,input_12_4_22,input_12_5_22,input_12_6_22,input_12_7_22,input_12_8_22,input_12_9_22,input_12_10_22,input_12_11_22);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_4_23" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[4][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_23,input_12_1_23,input_12_2_23,input_12_3_23,input_12_4_23,input_12_5_23,input_12_6_23,input_12_7_23,input_12_8_23,input_12_9_23,input_12_10_23,input_12_11_23);"/>
			</td>
		</tr>
		<tr>
			<th align="left" class="form-matrix-row-headers">Meesalai </th>
			<td align="center" class="form-matrix-values">
			<input id="input_12_5_0" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[5][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_0,input_12_1_0,input_12_2_0,input_12_3_0,input_12_4_0,input_12_5_0,input_12_6_0,input_12_7_0,input_12_8_0,input_12_9_0,input_12_10_0,input_12_11_0);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_5_1" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[5][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_1,input_12_1_1,input_12_2_1,input_12_3_1,input_12_4_1,input_12_5_1,input_12_6_1,input_12_7_1,input_12_8_1,input_12_9_1,input_12_10_1,input_12_11_1);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_5_2" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[5][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_2,input_12_1_2,input_12_2_2,input_12_3_2,input_12_4_2,input_12_5_2,input_12_6_2,input_12_7_2,input_12_8_2,input_12_9_2,input_12_10_2,input_12_11_2);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_5_3" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[5][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_3,input_12_1_3,input_12_2_3,input_12_3_3,input_12_4_3,input_12_5_3,input_12_6_3,input_12_7_3,input_12_8_3,input_12_9_3,input_12_10_3,input_12_11_3);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_5_4" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[5][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_4,input_12_1_4,input_12_2_4,input_12_3_4,input_12_4_4,input_12_5_4,input_12_6_4,input_12_7_4,input_12_8_4,input_12_9_4,input_12_10_4,input_12_11_4);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_5_5" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[5][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_5,input_12_1_5,input_12_2_5,input_12_3_5,input_12_4_5,input_12_5_5,input_12_6_5,input_12_7_5,input_12_8_5,input_12_9_5,input_12_10_5,input_12_11_5);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_5_6" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[5][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_6,input_12_1_6,input_12_2_6,input_12_3_6,input_12_4_6,input_12_5_6,input_12_6_6,input_12_7_6,input_12_8_6,input_12_9_6,input_12_10_6,input_12_11_6);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_5_7" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[5][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_7,input_12_1_7,input_12_2_7,input_12_3_7,input_12_4_7,input_12_5_7,input_12_6_7,input_12_7_7,input_12_8_7,input_12_9_7,input_12_10_7,input_12_11_7);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_5_8" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[5][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_8,input_12_1_8,input_12_2_8,input_12_3_8,input_12_4_8,input_12_5_8,input_12_6_8,input_12_7_8,input_12_8_8,input_12_9_8,input_12_10_8,input_12_11_8);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_5_9" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[5][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_9,input_12_1_9,input_12_2_9,input_12_3_9,input_12_4_9,input_12_5_9,input_12_6_9,input_12_7_9,input_12_8_9,input_12_9_9,input_12_10_9,input_12_11_9);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_5_10" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[5][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_10,input_12_1_10,input_12_2_10,input_12_3_10,input_12_4_10,input_12_5_10,input_12_6_10,input_12_7_10,input_12_8_10,input_12_9_10,input_12_10_10,input_12_11_10);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_5_11" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[5][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_11,input_12_1_11,input_12_2_11,input_12_3_11,input_12_4_11,input_12_5_11,input_12_6_11,input_12_7_11,input_12_8_11,input_12_9_11,input_12_10_11,input_12_11_11);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_5_12" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[5][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_12,input_12_1_12,input_12_2_12,input_12_3_12,input_12_4_12,input_12_5_12,input_12_6_12,input_12_7_12,input_12_8_12,input_12_9_12,input_12_10_12,input_12_11_12);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_5_13" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[5][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_13,input_12_1_13,input_12_2_13,input_12_3_13,input_12_4_13,input_12_5_13,input_12_6_13,input_12_7_13,input_12_8_13,input_12_9_13,input_12_10_13,input_12_11_13);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_5_14" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[5][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_14,input_12_1_14,input_12_2_14,input_12_3_14,input_12_4_14,input_12_5_14,input_12_6_14,input_12_7_14,input_12_8_14,input_12_9_14,input_12_10_14,input_12_11_14);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_5_15" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[5][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_15,input_12_1_15,input_12_2_15,input_12_3_15,input_12_4_15,input_12_5_15,input_12_6_15,input_12_7_15,input_12_8_15,input_12_9_15,input_12_10_15,input_12_11_15);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_5_16" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[5][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_16,input_12_1_16,input_12_2_16,input_12_3_16,input_12_4_16,input_12_5_16,input_12_6_16,input_12_7_16,input_12_8_16,input_12_9_16,input_12_10_16,input_12_11_16);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_5_17" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[5][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_17,input_12_1_17,input_12_2_17,input_12_3_17,input_12_4_17,input_12_5_17,input_12_6_17,input_12_7_17,input_12_8_17,input_12_9_17,input_12_10_17,input_12_11_17);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_5_18" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[5][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_18,input_12_1_18,input_12_2_18,input_12_3_18,input_12_4_18,input_12_5_18,input_12_6_18,input_12_7_18,input_12_8_18,input_12_9_18,input_12_10_18,input_12_11_18);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_5_19" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[5][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_19,input_12_1_19,input_12_2_19,input_12_3_19,input_12_4_19,input_12_5_19,input_12_6_19,input_12_7_19,input_12_8_19,input_12_9_19,input_12_10_19,input_12_11_19);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_5_20" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[5][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_20,input_12_1_20,input_12_2_20,input_12_3_20,input_12_4_20,input_12_5_20,input_12_6_20,input_12_7_20,input_12_8_20,input_12_9_20,input_12_10_20,input_12_11_20);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_5_21" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[5][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_21,input_12_1_21,input_12_2_21,input_12_3_21,input_12_4_21,input_12_5_21,input_12_6_21,input_12_7_21,input_12_8_21,input_12_9_21,input_12_10_21,input_12_11_21);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_5_22" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[5][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_22,input_12_1_22,input_12_2_22,input_12_3_22,input_12_4_22,input_12_5_22,input_12_6_22,input_12_7_22,input_12_8_22,input_12_9_22,input_12_10_22,input_12_11_22);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_5_23" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[5][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_23,input_12_1_23,input_12_2_23,input_12_3_23,input_12_4_23,input_12_5_23,input_12_6_23,input_12_7_23,input_12_8_23,input_12_9_23,input_12_10_23,input_12_11_23);"/>
			</td>
		</tr>
		<tr>
			<th align="left" class="form-matrix-row-headers">Navatkuli </th>
			<td align="center" class="form-matrix-values">
			<input id="input_12_6_0" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[6][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_0,input_12_1_0,input_12_2_0,input_12_3_0,input_12_4_0,input_12_5_0,input_12_6_0,input_12_7_0,input_12_8_0,input_12_9_0,input_12_10_0,input_12_11_0);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_6_1" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[6][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_1,input_12_1_1,input_12_2_1,input_12_3_1,input_12_4_1,input_12_5_1,input_12_6_1,input_12_7_1,input_12_8_1,input_12_9_1,input_12_10_1,input_12_11_1);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_6_2" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[6][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_2,input_12_1_2,input_12_2_2,input_12_3_2,input_12_4_2,input_12_5_2,input_12_6_2,input_12_7_2,input_12_8_2,input_12_9_2,input_12_10_2,input_12_11_2);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_6_3" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[6][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_3,input_12_1_3,input_12_2_3,input_12_3_3,input_12_4_3,input_12_5_3,input_12_6_3,input_12_7_3,input_12_8_3,input_12_9_3,input_12_10_3,input_12_11_3);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_6_4" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[6][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_4,input_12_1_4,input_12_2_4,input_12_3_4,input_12_4_4,input_12_5_4,input_12_6_4,input_12_7_4,input_12_8_4,input_12_9_4,input_12_10_4,input_12_11_4);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_6_5" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[6][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_5,input_12_1_5,input_12_2_5,input_12_3_5,input_12_4_5,input_12_5_5,input_12_6_5,input_12_7_5,input_12_8_5,input_12_9_5,input_12_10_5,input_12_11_5);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_6_6" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[6][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_6,input_12_1_6,input_12_2_6,input_12_3_6,input_12_4_6,input_12_5_6,input_12_6_6,input_12_7_6,input_12_8_6,input_12_9_6,input_12_10_6,input_12_11_6);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_6_7" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[6][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_7,input_12_1_7,input_12_2_7,input_12_3_7,input_12_4_7,input_12_5_7,input_12_6_7,input_12_7_7,input_12_8_7,input_12_9_7,input_12_10_7,input_12_11_7);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_6_8" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[6][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_8,input_12_1_8,input_12_2_8,input_12_3_8,input_12_4_8,input_12_5_8,input_12_6_8,input_12_7_8,input_12_8_8,input_12_9_8,input_12_10_8,input_12_11_8);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_6_9" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[6][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_9,input_12_1_9,input_12_2_9,input_12_3_9,input_12_4_9,input_12_5_9,input_12_6_9,input_12_7_9,input_12_8_9,input_12_9_9,input_12_10_9,input_12_11_9);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_6_10" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[6][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_10,input_12_1_10,input_12_2_10,input_12_3_10,input_12_4_10,input_12_5_10,input_12_6_10,input_12_7_10,input_12_8_10,input_12_9_10,input_12_10_10,input_12_11_10);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_6_11" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[6][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_11,input_12_1_11,input_12_2_11,input_12_3_11,input_12_4_11,input_12_5_11,input_12_6_11,input_12_7_11,input_12_8_11,input_12_9_11,input_12_10_11,input_12_11_11);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_6_12" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[6][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_12,input_12_1_12,input_12_2_12,input_12_3_12,input_12_4_12,input_12_5_12,input_12_6_12,input_12_7_12,input_12_8_12,input_12_9_12,input_12_10_12,input_12_11_12);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_6_13" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[6][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_13,input_12_1_13,input_12_2_13,input_12_3_13,input_12_4_13,input_12_5_13,input_12_6_13,input_12_7_13,input_12_8_13,input_12_9_13,input_12_10_13,input_12_11_13);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_6_14" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[6][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_14,input_12_1_14,input_12_2_14,input_12_3_14,input_12_4_14,input_12_5_14,input_12_6_14,input_12_7_14,input_12_8_14,input_12_9_14,input_12_10_14,input_12_11_14);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_6_15" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[6][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_15,input_12_1_15,input_12_2_15,input_12_3_15,input_12_4_15,input_12_5_15,input_12_6_15,input_12_7_15,input_12_8_15,input_12_9_15,input_12_10_15,input_12_11_15);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_6_16" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[6][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_16,input_12_1_16,input_12_2_16,input_12_3_16,input_12_4_16,input_12_5_16,input_12_6_16,input_12_7_16,input_12_8_16,input_12_9_16,input_12_10_16,input_12_11_16);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_6_17" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[6][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_17,input_12_1_17,input_12_2_17,input_12_3_17,input_12_4_17,input_12_5_17,input_12_6_17,input_12_7_17,input_12_8_17,input_12_9_17,input_12_10_17,input_12_11_17);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_6_18" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[6][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_18,input_12_1_18,input_12_2_18,input_12_3_18,input_12_4_18,input_12_5_18,input_12_6_18,input_12_7_18,input_12_8_18,input_12_9_18,input_12_10_18,input_12_11_18);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_6_19" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[6][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_19,input_12_1_19,input_12_2_19,input_12_3_19,input_12_4_19,input_12_5_19,input_12_6_19,input_12_7_19,input_12_8_19,input_12_9_19,input_12_10_19,input_12_11_19);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_6_20" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[6][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_20,input_12_1_20,input_12_2_20,input_12_3_20,input_12_4_20,input_12_5_20,input_12_6_20,input_12_7_20,input_12_8_20,input_12_9_20,input_12_10_20,input_12_11_20);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_6_21" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[6][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_21,input_12_1_21,input_12_2_21,input_12_3_21,input_12_4_21,input_12_5_21,input_12_6_21,input_12_7_21,input_12_8_21,input_12_9_21,input_12_10_21,input_12_11_21);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_6_22" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[6][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_22,input_12_1_22,input_12_2_22,input_12_3_22,input_12_4_22,input_12_5_22,input_12_6_22,input_12_7_22,input_12_8_22,input_12_9_22,input_12_10_22,input_12_11_22);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_6_23" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[6][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_23,input_12_1_23,input_12_2_23,input_12_3_23,input_12_4_23,input_12_5_23,input_12_6_23,input_12_7_23,input_12_8_23,input_12_9_23,input_12_10_23,input_12_11_23);"/>
			</td>
		</tr>
		<tr>
			<th align="left" class="form-matrix-row-headers">Sarasalai </th>
			<td align="center" class="form-matrix-values">
			<input id="input_12_7_0" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[7][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_0,input_12_1_0,input_12_2_0,input_12_3_0,input_12_4_0,input_12_5_0,input_12_6_0,input_12_7_0,input_12_8_0,input_12_9_0,input_12_10_0,input_12_11_0);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_7_1" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[7][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_1,input_12_1_1,input_12_2_1,input_12_3_1,input_12_4_1,input_12_5_1,input_12_6_1,input_12_7_1,input_12_8_1,input_12_9_1,input_12_10_1,input_12_11_1);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_7_2" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[7][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_2,input_12_1_2,input_12_2_2,input_12_3_2,input_12_4_2,input_12_5_2,input_12_6_2,input_12_7_2,input_12_8_2,input_12_9_2,input_12_10_2,input_12_11_2);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_7_3" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[7][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_3,input_12_1_3,input_12_2_3,input_12_3_3,input_12_4_3,input_12_5_3,input_12_6_3,input_12_7_3,input_12_8_3,input_12_9_3,input_12_10_3,input_12_11_3);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_7_4" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[7][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_4,input_12_1_4,input_12_2_4,input_12_3_4,input_12_4_4,input_12_5_4,input_12_6_4,input_12_7_4,input_12_8_4,input_12_9_4,input_12_10_4,input_12_11_4);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_7_5" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[7][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_5,input_12_1_5,input_12_2_5,input_12_3_5,input_12_4_5,input_12_5_5,input_12_6_5,input_12_7_5,input_12_8_5,input_12_9_5,input_12_10_5,input_12_11_5);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_7_6" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[7][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_6,input_12_1_6,input_12_2_6,input_12_3_6,input_12_4_6,input_12_5_6,input_12_6_6,input_12_7_6,input_12_8_6,input_12_9_6,input_12_10_6,input_12_11_6);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_7_7" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[7][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_7,input_12_1_7,input_12_2_7,input_12_3_7,input_12_4_7,input_12_5_7,input_12_6_7,input_12_7_7,input_12_8_7,input_12_9_7,input_12_10_7,input_12_11_7);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_7_8" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[7][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_8,input_12_1_8,input_12_2_8,input_12_3_8,input_12_4_8,input_12_5_8,input_12_6_8,input_12_7_8,input_12_8_8,input_12_9_8,input_12_10_8,input_12_11_8);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_7_9" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[7][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_9,input_12_1_9,input_12_2_9,input_12_3_9,input_12_4_9,input_12_5_9,input_12_6_9,input_12_7_9,input_12_8_9,input_12_9_9,input_12_10_9,input_12_11_9);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_7_10" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[7][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_10,input_12_1_10,input_12_2_10,input_12_3_10,input_12_4_10,input_12_5_10,input_12_6_10,input_12_7_10,input_12_8_10,input_12_9_10,input_12_10_10,input_12_11_10);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_7_11" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[7][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_11,input_12_1_11,input_12_2_11,input_12_3_11,input_12_4_11,input_12_5_11,input_12_6_11,input_12_7_11,input_12_8_11,input_12_9_11,input_12_10_11,input_12_11_11);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_7_12" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[7][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_12,input_12_1_12,input_12_2_12,input_12_3_12,input_12_4_12,input_12_5_12,input_12_6_12,input_12_7_12,input_12_8_12,input_12_9_12,input_12_10_12,input_12_11_12);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_7_13" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[7][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_13,input_12_1_13,input_12_2_13,input_12_3_13,input_12_4_13,input_12_5_13,input_12_6_13,input_12_7_13,input_12_8_13,input_12_9_13,input_12_10_13,input_12_11_13);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_7_14" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[7][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_14,input_12_1_14,input_12_2_14,input_12_3_14,input_12_4_14,input_12_5_14,input_12_6_14,input_12_7_14,input_12_8_14,input_12_9_14,input_12_10_14,input_12_11_14);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_7_15" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[7][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_15,input_12_1_15,input_12_2_15,input_12_3_15,input_12_4_15,input_12_5_15,input_12_6_15,input_12_7_15,input_12_8_15,input_12_9_15,input_12_10_15,input_12_11_15);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_7_16" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[7][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_16,input_12_1_16,input_12_2_16,input_12_3_16,input_12_4_16,input_12_5_16,input_12_6_16,input_12_7_16,input_12_8_16,input_12_9_16,input_12_10_16,input_12_11_16);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_7_17" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[7][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_17,input_12_1_17,input_12_2_17,input_12_3_17,input_12_4_17,input_12_5_17,input_12_6_17,input_12_7_17,input_12_8_17,input_12_9_17,input_12_10_17,input_12_11_17);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_7_18" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[7][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_18,input_12_1_18,input_12_2_18,input_12_3_18,input_12_4_18,input_12_5_18,input_12_6_18,input_12_7_18,input_12_8_18,input_12_9_18,input_12_10_18,input_12_11_18);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_7_19" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[7][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_19,input_12_1_19,input_12_2_19,input_12_3_19,input_12_4_19,input_12_5_19,input_12_6_19,input_12_7_19,input_12_8_19,input_12_9_19,input_12_10_19,input_12_11_19);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_7_20" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[7][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_20,input_12_1_20,input_12_2_20,input_12_3_20,input_12_4_20,input_12_5_20,input_12_6_20,input_12_7_20,input_12_8_20,input_12_9_20,input_12_10_20,input_12_11_20);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_7_21" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[7][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_21,input_12_1_21,input_12_2_21,input_12_3_21,input_12_4_21,input_12_5_21,input_12_6_21,input_12_7_21,input_12_8_21,input_12_9_21,input_12_10_21,input_12_11_21);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_7_22" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[7][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_22,input_12_1_22,input_12_2_22,input_12_3_22,input_12_4_22,input_12_5_22,input_12_6_22,input_12_7_22,input_12_8_22,input_12_9_22,input_12_10_22,input_12_11_22);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_7_23" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[7][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_23,input_12_1_23,input_12_2_23,input_12_3_23,input_12_4_23,input_12_5_23,input_12_6_23,input_12_7_23,input_12_8_23,input_12_9_23,input_12_10_23,input_12_11_23);"/>
			</td>
		</tr>
		<tr>
			<th align="left" class="form-matrix-row-headers">UCI </th>
			<td align="center" class="form-matrix-values">
			<input id="input_12_8_0" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[8][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_0,input_12_1_0,input_12_2_0,input_12_3_0,input_12_4_0,input_12_5_0,input_12_6_0,input_12_7_0,input_12_8_0,input_12_9_0,input_12_10_0,input_12_11_0);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_8_1" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[8][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_1,input_12_1_1,input_12_2_1,input_12_3_1,input_12_4_1,input_12_5_1,input_12_6_1,input_12_7_1,input_12_8_1,input_12_9_1,input_12_10_1,input_12_11_1);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_8_2" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[8][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_2,input_12_1_2,input_12_2_2,input_12_3_2,input_12_4_2,input_12_5_2,input_12_6_2,input_12_7_2,input_12_8_2,input_12_9_2,input_12_10_2,input_12_11_2);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_8_3" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[8][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_3,input_12_1_3,input_12_2_3,input_12_3_3,input_12_4_3,input_12_5_3,input_12_6_3,input_12_7_3,input_12_8_3,input_12_9_3,input_12_10_3,input_12_11_3);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_8_4" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[8][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_4,input_12_1_4,input_12_2_4,input_12_3_4,input_12_4_4,input_12_5_4,input_12_6_4,input_12_7_4,input_12_8_4,input_12_9_4,input_12_10_4,input_12_11_4);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_8_5" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[8][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_5,input_12_1_5,input_12_2_5,input_12_3_5,input_12_4_5,input_12_5_5,input_12_6_5,input_12_7_5,input_12_8_5,input_12_9_5,input_12_10_5,input_12_11_5);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_8_6" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[8][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_6,input_12_1_6,input_12_2_6,input_12_3_6,input_12_4_6,input_12_5_6,input_12_6_6,input_12_7_6,input_12_8_6,input_12_9_6,input_12_10_6,input_12_11_6);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_8_7" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[8][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_7,input_12_1_7,input_12_2_7,input_12_3_7,input_12_4_7,input_12_5_7,input_12_6_7,input_12_7_7,input_12_8_7,input_12_9_7,input_12_10_7,input_12_11_7);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_8_8" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[8][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_8,input_12_1_8,input_12_2_8,input_12_3_8,input_12_4_8,input_12_5_8,input_12_6_8,input_12_7_8,input_12_8_8,input_12_9_8,input_12_10_8,input_12_11_8);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_8_9" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[8][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_9,input_12_1_9,input_12_2_9,input_12_3_9,input_12_4_9,input_12_5_9,input_12_6_9,input_12_7_9,input_12_8_9,input_12_9_9,input_12_10_9,input_12_11_9);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_8_10" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[8][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_10,input_12_1_10,input_12_2_10,input_12_3_10,input_12_4_10,input_12_5_10,input_12_6_10,input_12_7_10,input_12_8_10,input_12_9_10,input_12_10_10,input_12_11_10);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_8_11" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[8][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_11,input_12_1_11,input_12_2_11,input_12_3_11,input_12_4_11,input_12_5_11,input_12_6_11,input_12_7_11,input_12_8_11,input_12_9_11,input_12_10_11,input_12_11_11);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_8_12" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[8][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_12,input_12_1_12,input_12_2_12,input_12_3_12,input_12_4_12,input_12_5_12,input_12_6_12,input_12_7_12,input_12_8_12,input_12_9_12,input_12_10_12,input_12_11_12);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_8_13" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[8][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_13,input_12_1_13,input_12_2_13,input_12_3_13,input_12_4_13,input_12_5_13,input_12_6_13,input_12_7_13,input_12_8_13,input_12_9_13,input_12_10_13,input_12_11_13);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_8_14" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[8][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_14,input_12_1_14,input_12_2_14,input_12_3_14,input_12_4_14,input_12_5_14,input_12_6_14,input_12_7_14,input_12_8_14,input_12_9_14,input_12_10_14,input_12_11_14);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_8_15" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[8][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_15,input_12_1_15,input_12_2_15,input_12_3_15,input_12_4_15,input_12_5_15,input_12_6_15,input_12_7_15,input_12_8_15,input_12_9_15,input_12_10_15,input_12_11_15);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_8_16" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[8][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_16,input_12_1_16,input_12_2_16,input_12_3_16,input_12_4_16,input_12_5_16,input_12_6_16,input_12_7_16,input_12_8_16,input_12_9_16,input_12_10_16,input_12_11_16);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_8_17" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[8][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_17,input_12_1_17,input_12_2_17,input_12_3_17,input_12_4_17,input_12_5_17,input_12_6_17,input_12_7_17,input_12_8_17,input_12_9_17,input_12_10_17,input_12_11_17);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_8_18" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[8][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_18,input_12_1_18,input_12_2_18,input_12_3_18,input_12_4_18,input_12_5_18,input_12_6_18,input_12_7_18,input_12_8_18,input_12_9_18,input_12_10_18,input_12_11_18);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_8_19" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[8][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_19,input_12_1_19,input_12_2_19,input_12_3_19,input_12_4_19,input_12_5_19,input_12_6_19,input_12_7_19,input_12_8_19,input_12_9_19,input_12_10_19,input_12_11_19);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_8_20" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[8][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_20,input_12_1_20,input_12_2_20,input_12_3_20,input_12_4_20,input_12_5_20,input_12_6_20,input_12_7_20,input_12_8_20,input_12_9_20,input_12_10_20,input_12_11_20);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_8_21" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[8][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_21,input_12_1_21,input_12_2_21,input_12_3_21,input_12_4_21,input_12_5_21,input_12_6_21,input_12_7_21,input_12_8_21,input_12_9_21,input_12_10_21,input_12_11_21);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_8_22" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[8][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_22,input_12_1_22,input_12_2_22,input_12_3_22,input_12_4_22,input_12_5_22,input_12_6_22,input_12_7_22,input_12_8_22,input_12_9_22,input_12_10_22,input_12_11_22);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_8_23" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[8][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_23,input_12_1_23,input_12_2_23,input_12_3_23,input_12_4_23,input_12_5_23,input_12_6_23,input_12_7_23,input_12_8_23,input_12_9_23,input_12_10_23,input_12_11_23);"/>
			</td>
		</tr>
		<tr>
			<th align="left" class="form-matrix-row-headers">UCII </th>
			<td align="center" class="form-matrix-values">
			<input id="input_12_9_0" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[9][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_0,input_12_1_0,input_12_2_0,input_12_3_0,input_12_4_0,input_12_5_0,input_12_6_0,input_12_7_0,input_12_8_0,input_12_9_0,input_12_10_0,input_12_11_0);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_9_1" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[9][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_1,input_12_1_1,input_12_2_1,input_12_3_1,input_12_4_1,input_12_5_1,input_12_6_1,input_12_7_1,input_12_8_1,input_12_9_1,input_12_10_1,input_12_11_1);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_9_2" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[9][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_2,input_12_1_2,input_12_2_2,input_12_3_2,input_12_4_2,input_12_5_2,input_12_6_2,input_12_7_2,input_12_8_2,input_12_9_2,input_12_10_2,input_12_11_2);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_9_3" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[9][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_3,input_12_1_3,input_12_2_3,input_12_3_3,input_12_4_3,input_12_5_3,input_12_6_3,input_12_7_3,input_12_8_3,input_12_9_3,input_12_10_3,input_12_11_3);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_9_4" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[9][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_4,input_12_1_4,input_12_2_4,input_12_3_4,input_12_4_4,input_12_5_4,input_12_6_4,input_12_7_4,input_12_8_4,input_12_9_4,input_12_10_4,input_12_11_4);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_9_5" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[9][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_5,input_12_1_5,input_12_2_5,input_12_3_5,input_12_4_5,input_12_5_5,input_12_6_5,input_12_7_5,input_12_8_5,input_12_9_5,input_12_10_5,input_12_11_5);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_9_6" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[9][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_6,input_12_1_6,input_12_2_6,input_12_3_6,input_12_4_6,input_12_5_6,input_12_6_6,input_12_7_6,input_12_8_6,input_12_9_6,input_12_10_6,input_12_11_6);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_9_7" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[9][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_7,input_12_1_7,input_12_2_7,input_12_3_7,input_12_4_7,input_12_5_7,input_12_6_7,input_12_7_7,input_12_8_7,input_12_9_7,input_12_10_7,input_12_11_7);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_9_8" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[9][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_8,input_12_1_8,input_12_2_8,input_12_3_8,input_12_4_8,input_12_5_8,input_12_6_8,input_12_7_8,input_12_8_8,input_12_9_8,input_12_10_8,input_12_11_8);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_9_9" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[9][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_9,input_12_1_9,input_12_2_9,input_12_3_9,input_12_4_9,input_12_5_9,input_12_6_9,input_12_7_9,input_12_8_9,input_12_9_9,input_12_10_9,input_12_11_9);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_9_10" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[9][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_10,input_12_1_10,input_12_2_10,input_12_3_10,input_12_4_10,input_12_5_10,input_12_6_10,input_12_7_10,input_12_8_10,input_12_9_10,input_12_10_10,input_12_11_10);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_9_11" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[9][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_11,input_12_1_11,input_12_2_11,input_12_3_11,input_12_4_11,input_12_5_11,input_12_6_11,input_12_7_11,input_12_8_11,input_12_9_11,input_12_10_11,input_12_11_11);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_9_12" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[9][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_12,input_12_1_12,input_12_2_12,input_12_3_12,input_12_4_12,input_12_5_12,input_12_6_12,input_12_7_12,input_12_8_12,input_12_9_12,input_12_10_12,input_12_11_12);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_9_13" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[9][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_13,input_12_1_13,input_12_2_13,input_12_3_13,input_12_4_13,input_12_5_13,input_12_6_13,input_12_7_13,input_12_8_13,input_12_9_13,input_12_10_13,input_12_11_13);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_9_14" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[9][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_14,input_12_1_14,input_12_2_14,input_12_3_14,input_12_4_14,input_12_5_14,input_12_6_14,input_12_7_14,input_12_8_14,input_12_9_14,input_12_10_14,input_12_11_14);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_9_15" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[9][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_15,input_12_1_15,input_12_2_15,input_12_3_15,input_12_4_15,input_12_5_15,input_12_6_15,input_12_7_15,input_12_8_15,input_12_9_15,input_12_10_15,input_12_11_15);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_9_16" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[9][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_16,input_12_1_16,input_12_2_16,input_12_3_16,input_12_4_16,input_12_5_16,input_12_6_16,input_12_7_16,input_12_8_16,input_12_9_16,input_12_10_16,input_12_11_16);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_9_17" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[9][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_17,input_12_1_17,input_12_2_17,input_12_3_17,input_12_4_17,input_12_5_17,input_12_6_17,input_12_7_17,input_12_8_17,input_12_9_17,input_12_10_17,input_12_11_17);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_9_18" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[9][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_18,input_12_1_18,input_12_2_18,input_12_3_18,input_12_4_18,input_12_5_18,input_12_6_18,input_12_7_18,input_12_8_18,input_12_9_18,input_12_10_18,input_12_11_18);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_9_19" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[9][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_19,input_12_1_19,input_12_2_19,input_12_3_19,input_12_4_19,input_12_5_19,input_12_6_19,input_12_7_19,input_12_8_19,input_12_9_19,input_12_10_19,input_12_11_19);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_9_20" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[9][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_20,input_12_1_20,input_12_2_20,input_12_3_20,input_12_4_20,input_12_5_20,input_12_6_20,input_12_7_20,input_12_8_20,input_12_9_20,input_12_10_20,input_12_11_20);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_9_21" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[9][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_21,input_12_1_21,input_12_2_21,input_12_3_21,input_12_4_21,input_12_5_21,input_12_6_21,input_12_7_21,input_12_8_21,input_12_9_21,input_12_10_21,input_12_11_21);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_9_22" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[9][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_22,input_12_1_22,input_12_2_22,input_12_3_22,input_12_4_22,input_12_5_22,input_12_6_22,input_12_7_22,input_12_8_22,input_12_9_22,input_12_10_22,input_12_11_22);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_9_23" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[9][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_23,input_12_1_23,input_12_2_23,input_12_3_23,input_12_4_23,input_12_5_23,input_12_6_23,input_12_7_23,input_12_8_23,input_12_9_23,input_12_10_23,input_12_11_23);"/>
			</td>
		</tr>
		<tr>
			<th align="left" class="form-matrix-row-headers">Varani </th>
			<td align="center" class="form-matrix-values">
			<input id="input_12_10_0" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[10][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_0,input_12_1_0,input_12_2_0,input_12_3_0,input_12_4_0,input_12_5_0,input_12_6_0,input_12_7_0,input_12_8_0,input_12_9_0,input_12_10_0,input_12_11_0);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_10_1" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[10][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_1,input_12_1_1,input_12_2_1,input_12_3_1,input_12_4_1,input_12_5_1,input_12_6_1,input_12_7_1,input_12_8_1,input_12_9_1,input_12_10_1,input_12_11_1);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_10_2" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[10][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_2,input_12_1_2,input_12_2_2,input_12_3_2,input_12_4_2,input_12_5_2,input_12_6_2,input_12_7_2,input_12_8_2,input_12_9_2,input_12_10_2,input_12_11_2);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_10_3" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[10][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_3,input_12_1_3,input_12_2_3,input_12_3_3,input_12_4_3,input_12_5_3,input_12_6_3,input_12_7_3,input_12_8_3,input_12_9_3,input_12_10_3,input_12_11_3);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_10_4" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[10][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_4,input_12_1_4,input_12_2_4,input_12_3_4,input_12_4_4,input_12_5_4,input_12_6_4,input_12_7_4,input_12_8_4,input_12_9_4,input_12_10_4,input_12_11_4);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_10_5" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[10][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_5,input_12_1_5,input_12_2_5,input_12_3_5,input_12_4_5,input_12_5_5,input_12_6_5,input_12_7_5,input_12_8_5,input_12_9_5,input_12_10_5,input_12_11_5);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_10_6" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[10][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_6,input_12_1_6,input_12_2_6,input_12_3_6,input_12_4_6,input_12_5_6,input_12_6_6,input_12_7_6,input_12_8_6,input_12_9_6,input_12_10_6,input_12_11_6);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_10_7" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[10][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_7,input_12_1_7,input_12_2_7,input_12_3_7,input_12_4_7,input_12_5_7,input_12_6_7,input_12_7_7,input_12_8_7,input_12_9_7,input_12_10_7,input_12_11_7);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_10_8" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[10][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_8,input_12_1_8,input_12_2_8,input_12_3_8,input_12_4_8,input_12_5_8,input_12_6_8,input_12_7_8,input_12_8_8,input_12_9_8,input_12_10_8,input_12_11_8);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_10_9" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[10][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_9,input_12_1_9,input_12_2_9,input_12_3_9,input_12_4_9,input_12_5_9,input_12_6_9,input_12_7_9,input_12_8_9,input_12_9_9,input_12_10_9,input_12_11_9);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_10_10" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[10][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_10,input_12_1_10,input_12_2_10,input_12_3_10,input_12_4_10,input_12_5_10,input_12_6_10,input_12_7_10,input_12_8_10,input_12_9_10,input_12_10_10,input_12_11_10);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_10_11" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[10][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_11,input_12_1_11,input_12_2_11,input_12_3_11,input_12_4_11,input_12_5_11,input_12_6_11,input_12_7_11,input_12_8_11,input_12_9_11,input_12_10_11,input_12_11_11);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_10_12" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[10][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_12,input_12_1_12,input_12_2_12,input_12_3_12,input_12_4_12,input_12_5_12,input_12_6_12,input_12_7_12,input_12_8_12,input_12_9_12,input_12_10_12,input_12_11_12);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_10_13" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[10][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_13,input_12_1_13,input_12_2_13,input_12_3_13,input_12_4_13,input_12_5_13,input_12_6_13,input_12_7_13,input_12_8_13,input_12_9_13,input_12_10_13,input_12_11_13);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_10_14" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[10][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_14,input_12_1_14,input_12_2_14,input_12_3_14,input_12_4_14,input_12_5_14,input_12_6_14,input_12_7_14,input_12_8_14,input_12_9_14,input_12_10_14,input_12_11_14);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_10_15" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[10][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_15,input_12_1_15,input_12_2_15,input_12_3_15,input_12_4_15,input_12_5_15,input_12_6_15,input_12_7_15,input_12_8_15,input_12_9_15,input_12_10_15,input_12_11_15);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_10_16" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[10][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_16,input_12_1_16,input_12_2_16,input_12_3_16,input_12_4_16,input_12_5_16,input_12_6_16,input_12_7_16,input_12_8_16,input_12_9_16,input_12_10_16,input_12_11_16);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_10_17" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[10][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_17,input_12_1_17,input_12_2_17,input_12_3_17,input_12_4_17,input_12_5_17,input_12_6_17,input_12_7_17,input_12_8_17,input_12_9_17,input_12_10_17,input_12_11_17);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_10_18" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[10][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_18,input_12_1_18,input_12_2_18,input_12_3_18,input_12_4_18,input_12_5_18,input_12_6_18,input_12_7_18,input_12_8_18,input_12_9_18,input_12_10_18,input_12_11_18);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_10_19" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[10][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_19,input_12_1_19,input_12_2_19,input_12_3_19,input_12_4_19,input_12_5_19,input_12_6_19,input_12_7_19,input_12_8_19,input_12_9_19,input_12_10_19,input_12_11_19);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_10_20" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[10][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_20,input_12_1_20,input_12_2_20,input_12_3_20,input_12_4_20,input_12_5_20,input_12_6_20,input_12_7_20,input_12_8_20,input_12_9_20,input_12_10_20,input_12_11_20);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_10_21" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[10][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_21,input_12_1_21,input_12_2_21,input_12_3_21,input_12_4_21,input_12_5_21,input_12_6_21,input_12_7_21,input_12_8_21,input_12_9_21,input_12_10_21,input_12_11_21);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_10_22" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[10][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_22,input_12_1_22,input_12_2_22,input_12_3_22,input_12_4_22,input_12_5_22,input_12_6_22,input_12_7_22,input_12_8_22,input_12_9_22,input_12_10_22,input_12_11_22);"/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_10_23" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[10][]" style="width:60px" size="5" onchange="chavaTotal(input_12_0_23,input_12_1_23,input_12_2_23,input_12_3_23,input_12_4_23,input_12_5_23,input_12_6_23,input_12_7_23,input_12_8_23,input_12_9_23,input_12_10_23,input_12_11_23);"/>
			</td>
		</tr>
		<tr>
			<th align="left" class="form-matrix-row-headers">Total </th>
			<td align="center" class="form-matrix-values">
			<input id="input_12_11_0" type="text" class="form-number-input form-dropdown" name="q12_phiArea12[11][]" style="width:60px" size="5" disabled/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_11_1" type="number" class="form-number-input form-dropdown" name="q12_phiArea12[11][]" style="width:60px" size="5" disabled/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_11_2" type="text" class="form-number-input form-dropdown" name="q12_phiArea12[11][]" style="width:60px" size="5" disabled/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_11_3" type="text" class="form-number-input form-dropdown" name="q12_phiArea12[11][]" style="width:60px" size="5" disabled/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_11_4" type="text" class="form-number-input form-dropdown" name="q12_phiArea12[11][]" style="width:60px" size="5" disabled/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_11_5" type="text" class="form-number-input form-dropdown" name="q12_phiArea12[11][]" style="width:60px" size="5" disabled/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_11_6" type="text" class="form-number-input form-dropdown" name="q12_phiArea12[11][]" style="width:60px" size="5" disabled/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_11_7" type="text" class="form-number-input form-dropdown" name="q12_phiArea12[11][]" style="width:60px" size="5" disabled/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_11_8" type="text" class="form-number-input form-dropdown" name="q12_phiArea12[11][]" style="width:60px" size="5" disabled/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_11_9" type="text" class="form-number-input form-dropdown" name="q12_phiArea12[11][]" style="width:60px" size="5" disabled/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_11_10" type="text" class="form-number-input form-dropdown" name="q12_phiArea12[11][]" style="width:60px" size="5" disabled/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_11_11" type="text" class="form-number-input form-dropdown" name="q12_phiArea12[11][]" style="width:60px" size="5" disabled/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_11_12" type="text" class="form-number-input form-dropdown" name="q12_phiArea12[11][]" style="width:60px" size="5" disabled/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_11_13" type="text" class="form-number-input form-dropdown" name="q12_phiArea12[11][]" style="width:60px" size="5" disabled/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_11_14" type="text" class="form-number-input form-dropdown" name="q12_phiArea12[11][]" style="width:60px" size="5" disabled/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_11_15" type="text" class="form-number-input form-dropdown" name="q12_phiArea12[11][]" style="width:60px" size="5" disabled/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_11_16" type="text" class="form-number-input form-dropdown" name="q12_phiArea12[11][]" style="width:60px" size="5" disabled/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_11_17" type="text" class="form-number-input form-dropdown" name="q12_phiArea12[11][]" style="width:60px" size="5" disabled/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_11_18" type="text" class="form-number-input form-dropdown" name="q12_phiArea12[11][]" style="width:60px" size="5" disabled/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_11_19" type="text" class="form-number-input form-dropdown" name="q12_phiArea12[11][]" style="width:60px" size="5" disabled/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_11_20" type="text" class="form-number-input form-dropdown" name="q12_phiArea12[11][]" style="width:60px" size="5" disabled/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_11_21" type="text" class="form-number-input form-dropdown" name="q12_phiArea12[11][]" style="width:60px" size="5" disabled/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_11_22" type="text" class="form-number-input form-dropdown" name="q12_phiArea12[11][]" style="width:60px" size="5" disabled/>
			</td>
			<td align="center" class="form-matrix-values">
			<input id="input_12_11_23" type="text" class="form-number-input form-dropdown" name="q12_phiArea12[11][]" style="width:60px" size="5" disabled/>
			</td>
		</tr>
	</table>
</div>
</li>
<li class="form-line form-field-hidden" style="display:none;" data-type="control_matrix" id="id_13">
<label class="form-label form-label-left form-label-auto" id="label_13" for="input_13">PHI Area Vs Diseases </label>
<div id="cid_13" class="form-input jf-required">
<table summary="" cellpadding="4" cellspacing="0" class="form-matrix-table">
<tr>
<th style="border:none">&nbsp; </th>
<th class="form-matrix-column-headers form-matrix-column_0">Internationally Notifiable Diseases(Cholera, Plague, Yellow Fever)</th>
<th class="form-matrix-column-headers form-matrix-column_1">Polio Myelitis / Acute Flaccid Paralysis </th>
<th class="form-matrix-column-headers form-matrix-column_2">Chicken Pox </th>
<th class="form-matrix-column-headers form-matrix-column_3">Dengue Fever/ Dengue Hemorrhagic Fever </th>
<th class="form-matrix-column-headers form-matrix-column_4">Diphtheria </th>
<th class="form-matrix-column-headers form-matrix-column_5">Dysentery </th>
<th class="form-matrix-column-headers form-matrix-column_6">Encephalitis (including Japanese Encephalitis) </th>
<th class="form-matrix-column-headers form-matrix-column_7">Enteric Fever </th>
<th class="form-matrix-column-headers form-matrix-column_8">Food Poisoning </th>
<th class="form-matrix-column-headers form-matrix-column_9">Human Rabies </th>
<th class="form-matrix-column-headers form-matrix-column_10">Leptospirosis </th>
<th class="form-matrix-column-headers form-matrix-column_11">Malaria </th>
<th class="form-matrix-column-headers form-matrix-column_12">Measles </th>
<th class="form-matrix-column-headers form-matrix-column_13">Meningitis </th>
<th class="form-matrix-column-headers form-matrix-column_14">Mumps </th>
<th class="form-matrix-column-headers form-matrix-column_15">Rubella </th>
<th class="form-matrix-column-headers form-matrix-column_16">Congenital Rubella Syndrome </th>
<th class="form-matrix-column-headers form-matrix-column_17">Simple continued fever </th>
<th class="form-matrix-column-headers form-matrix-column_18">Tetanus </th>
<th class="form-matrix-column-headers form-matrix-column_19">Neonatal tetanus </th>
<th class="form-matrix-column-headers form-matrix-column_20">Typhus Fever </th>
<th class="form-matrix-column-headers form-matrix-column_21">Viral Hepatitis </th>
<th class="form-matrix-column-headers form-matrix-column_22">Whooping cough </th>
<th class="form-matrix-column-headers form-matrix-column_23">Tuberculosis </th>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Alvai-II </th>
<td align="center" class="form-matrix-values">
<input id="input_13_0_0" type="number" class="form-number-input form-dropdown" name="q13_phiArea[0][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_0,input_13_1_0,input_13_2_0,input_13_3_0,input_13_4_0,input_13_5_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_0_1" type="number" class="form-number-input form-dropdown" name="q13_phiArea[0][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_1,input_13_1_1,input_13_2_1,input_13_3_1,input_13_4_1,input_13_5_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_0_2" type="number" class="form-number-input form-dropdown" name="q13_phiArea[0][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_2,input_13_1_2,input_13_2_2,input_13_3_2,input_13_4_2,input_13_5_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_0_3" type="number" class="form-number-input form-dropdown" name="q13_phiArea[0][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_3,input_13_1_3,input_13_2_3,input_13_3_3,input_13_4_3,input_13_5_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_0_4" type="number" class="form-number-input form-dropdown" name="q13_phiArea[0][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_4,input_13_1_4,input_13_2_4,input_13_3_4,input_13_4_4,input_13_5_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_0_5" type="number" class="form-number-input form-dropdown" name="q13_phiArea[0][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_5,input_13_1_5,input_13_2_5,input_13_3_5,input_13_4_5,input_13_5_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_0_6" type="number" class="form-number-input form-dropdown" name="q13_phiArea[0][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_6,input_13_1_6,input_13_2_6,input_13_3_6,input_13_4_6,input_13_5_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_0_7" type="number" class="form-number-input form-dropdown" name="q13_phiArea[0][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_7,input_13_1_7,input_13_2_7,input_13_3_7,input_13_4_7,input_13_5_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_0_8" type="number" class="form-number-input form-dropdown" name="q13_phiArea[0][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_8,input_13_1_8,input_13_2_8,input_13_3_8,input_13_4_8,input_13_5_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_0_9" type="number" class="form-number-input form-dropdown" name="q13_phiArea[0][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_9,input_13_1_9,input_13_2_9,input_13_3_9,input_13_4_9,input_13_5_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_0_10" type="number" class="form-number-input form-dropdown" name="q13_phiArea[0][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_10,input_13_1_10,input_13_2_10,input_13_3_10,input_13_4_10,input_13_5_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_0_11" type="number" class="form-number-input form-dropdown" name="q13_phiArea[0][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_11,input_13_1_11,input_13_2_11,input_13_3_11,input_13_4_11,input_13_5_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_0_12" type="number" class="form-number-input form-dropdown" name="q13_phiArea[0][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_12,input_13_1_12,input_13_2_12,input_13_3_12,input_13_4_12,input_13_5_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_0_13" type="number" class="form-number-input form-dropdown" name="q13_phiArea[0][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_13,input_13_1_13,input_13_2_13,input_13_3_13,input_13_4_13,input_13_5_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_0_14" type="number" class="form-number-input form-dropdown" name="q13_phiArea[0][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_14,input_13_1_14,input_13_2_14,input_13_3_14,input_13_4_14,input_13_5_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_0_15" type="number" class="form-number-input form-dropdown" name="q13_phiArea[0][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_15,input_13_1_15,input_13_2_15,input_13_3_15,input_13_4_15,input_13_5_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_0_16" type="number" class="form-number-input form-dropdown" name="q13_phiArea[0][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_16,input_13_1_16,input_13_2_16,input_13_3_16,input_13_4_16,input_13_5_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_0_17" type="number" class="form-number-input form-dropdown" name="q13_phiArea[0][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_17,input_13_1_17,input_13_2_17,input_13_3_17,input_13_4_17,input_13_5_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_0_18" type="number" class="form-number-input form-dropdown" name="q13_phiArea[0][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_18,input_13_1_18,input_13_2_18,input_13_3_18,input_13_4_18,input_13_5_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_0_19" type="number" class="form-number-input form-dropdown" name="q13_phiArea[0][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_19,input_13_1_19,input_13_2_19,input_13_3_19,input_13_4_19,input_13_5_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_0_20" type="number" class="form-number-input form-dropdown" name="q13_phiArea[0][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_20,input_13_1_20,input_13_2_20,input_13_3_20,input_13_4_20,input_13_5_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_0_21" type="number" class="form-number-input form-dropdown" name="q13_phiArea[0][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_21,input_13_1_21,input_13_2_21,input_13_3_21,input_13_4_21,input_13_5_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_0_22" type="number" class="form-number-input form-dropdown" name="q13_phiArea[0][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_22,input_13_1_22,input_13_2_22,input_13_3_22,input_13_4_22,input_13_5_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_0_23" type="number" class="form-number-input form-dropdown" name="q13_phiArea[0][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_23,input_13_1_23,input_13_2_23,input_13_3_23,input_13_4_23,input_13_5_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Karanavai </th>
<td align="center" class="form-matrix-values">
<input id="input_13_1_0" type="number" class="form-number-input form-dropdown" name="q13_phiArea[1][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_0,input_13_1_0,input_13_2_0,input_13_3_0,input_13_4_0,input_13_5_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_1_1" type="number" class="form-number-input form-dropdown" name="q13_phiArea[1][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_1,input_13_1_1,input_13_2_1,input_13_3_1,input_13_4_1,input_13_5_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_1_2" type="number" class="form-number-input form-dropdown" name="q13_phiArea[1][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_2,input_13_1_2,input_13_2_2,input_13_3_2,input_13_4_2,input_13_5_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_1_3" type="number" class="form-number-input form-dropdown" name="q13_phiArea[1][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_3,input_13_1_3,input_13_2_3,input_13_3_3,input_13_4_3,input_13_5_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_1_4" type="number" class="form-number-input form-dropdown" name="q13_phiArea[1][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_4,input_13_1_4,input_13_2_4,input_13_3_4,input_13_4_4,input_13_5_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_1_5" type="number" class="form-number-input form-dropdown" name="q13_phiArea[1][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_5,input_13_1_5,input_13_2_5,input_13_3_5,input_13_4_5,input_13_5_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_1_6" type="number" class="form-number-input form-dropdown" name="q13_phiArea[1][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_6,input_13_1_6,input_13_2_6,input_13_3_6,input_13_4_6,input_13_5_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_1_7" type="number" class="form-number-input form-dropdown" name="q13_phiArea[1][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_7,input_13_1_7,input_13_2_7,input_13_3_7,input_13_4_7,input_13_5_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_1_8" type="number" class="form-number-input form-dropdown" name="q13_phiArea[1][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_8,input_13_1_8,input_13_2_8,input_13_3_8,input_13_4_8,input_13_5_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_1_9" type="number" class="form-number-input form-dropdown" name="q13_phiArea[1][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_9,input_13_1_9,input_13_2_9,input_13_3_9,input_13_4_9,input_13_5_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_1_10" type="number" class="form-number-input form-dropdown" name="q13_phiArea[1][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_10,input_13_1_10,input_13_2_10,input_13_3_10,input_13_4_10,input_13_5_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_1_11" type="number" class="form-number-input form-dropdown" name="q13_phiArea[1][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_11,input_13_1_11,input_13_2_11,input_13_3_11,input_13_4_11,input_13_5_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_1_12" type="number" class="form-number-input form-dropdown" name="q13_phiArea[1][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_12,input_13_1_12,input_13_2_12,input_13_3_12,input_13_4_12,input_13_5_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_1_13" type="number" class="form-number-input form-dropdown" name="q13_phiArea[1][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_13,input_13_1_13,input_13_2_13,input_13_3_13,input_13_4_13,input_13_5_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_1_14" type="number" class="form-number-input form-dropdown" name="q13_phiArea[1][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_14,input_13_1_14,input_13_2_14,input_13_3_14,input_13_4_14,input_13_5_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_1_15" type="number" class="form-number-input form-dropdown" name="q13_phiArea[1][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_15,input_13_1_15,input_13_2_15,input_13_3_15,input_13_4_15,input_13_5_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_1_16" type="number" class="form-number-input form-dropdown" name="q13_phiArea[1][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_16,input_13_1_16,input_13_2_16,input_13_3_16,input_13_4_16,input_13_5_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_1_17" type="number" class="form-number-input form-dropdown" name="q13_phiArea[1][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_17,input_13_1_17,input_13_2_17,input_13_3_17,input_13_4_17,input_13_5_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_1_18" type="number" class="form-number-input form-dropdown" name="q13_phiArea[1][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_18,input_13_1_18,input_13_2_18,input_13_3_18,input_13_4_18,input_13_5_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_1_19" type="number" class="form-number-input form-dropdown" name="q13_phiArea[1][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_19,input_13_1_19,input_13_2_19,input_13_3_19,input_13_4_19,input_13_5_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_1_20" type="number" class="form-number-input form-dropdown" name="q13_phiArea[1][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_20,input_13_1_20,input_13_2_20,input_13_3_20,input_13_4_20,input_13_5_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_1_21" type="number" class="form-number-input form-dropdown" name="q13_phiArea[1][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_21,input_13_1_21,input_13_2_21,input_13_3_21,input_13_4_21,input_13_5_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_1_22" type="number" class="form-number-input form-dropdown" name="q13_phiArea[1][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_22,input_13_1_22,input_13_2_22,input_13_3_22,input_13_4_22,input_13_5_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_1_23" type="number" class="form-number-input form-dropdown" name="q13_phiArea[1][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_23,input_13_1_23,input_13_2_23,input_13_3_23,input_13_4_23,input_13_5_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Nelliyady </th>
<td align="center" class="form-matrix-values">
<input id="input_13_2_0" type="number" class="form-number-input form-dropdown" name="q13_phiArea[2][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_0,input_13_1_0,input_13_2_0,input_13_3_0,input_13_4_0,input_13_5_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_2_1" type="number" class="form-number-input form-dropdown" name="q13_phiArea[2][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_1,input_13_1_1,input_13_2_1,input_13_3_1,input_13_4_1,input_13_5_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_2_2" type="number" class="form-number-input form-dropdown" name="q13_phiArea[2][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_2,input_13_1_2,input_13_2_2,input_13_3_2,input_13_4_2,input_13_5_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_2_3" type="number" class="form-number-input form-dropdown" name="q13_phiArea[2][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_3,input_13_1_3,input_13_2_3,input_13_3_3,input_13_4_3,input_13_5_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_2_4" type="number" class="form-number-input form-dropdown" name="q13_phiArea[2][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_4,input_13_1_4,input_13_2_4,input_13_3_4,input_13_4_4,input_13_5_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_2_5" type="number" class="form-number-input form-dropdown" name="q13_phiArea[2][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_5,input_13_1_5,input_13_2_5,input_13_3_5,input_13_4_5,input_13_5_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_2_6" type="number" class="form-number-input form-dropdown" name="q13_phiArea[2][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_6,input_13_1_6,input_13_2_6,input_13_3_6,input_13_4_6,input_13_5_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_2_7" type="number" class="form-number-input form-dropdown" name="q13_phiArea[2][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_7,input_13_1_7,input_13_2_7,input_13_3_7,input_13_4_7,input_13_5_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_2_8" type="number" class="form-number-input form-dropdown" name="q13_phiArea[2][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_8,input_13_1_8,input_13_2_8,input_13_3_8,input_13_4_8,input_13_5_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_2_9" type="number" class="form-number-input form-dropdown" name="q13_phiArea[2][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_9,input_13_1_9,input_13_2_9,input_13_3_9,input_13_4_9,input_13_5_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_2_10" type="number" class="form-number-input form-dropdown" name="q13_phiArea[2][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_10,input_13_1_10,input_13_2_10,input_13_3_10,input_13_4_10,input_13_5_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_2_11" type="number" class="form-number-input form-dropdown" name="q13_phiArea[2][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_11,input_13_1_11,input_13_2_11,input_13_3_11,input_13_4_11,input_13_5_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_2_12" type="number" class="form-number-input form-dropdown" name="q13_phiArea[2][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_12,input_13_1_12,input_13_2_12,input_13_3_12,input_13_4_12,input_13_5_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_2_13" type="number" class="form-number-input form-dropdown" name="q13_phiArea[2][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_13,input_13_1_13,input_13_2_13,input_13_3_13,input_13_4_13,input_13_5_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_2_14" type="number" class="form-number-input form-dropdown" name="q13_phiArea[2][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_14,input_13_1_14,input_13_2_14,input_13_3_14,input_13_4_14,input_13_5_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_2_15" type="number" class="form-number-input form-dropdown" name="q13_phiArea[2][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_15,input_13_1_15,input_13_2_15,input_13_3_15,input_13_4_15,input_13_5_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_2_16" type="number" class="form-number-input form-dropdown" name="q13_phiArea[2][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_16,input_13_1_16,input_13_2_16,input_13_3_16,input_13_4_16,input_13_5_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_2_17" type="number" class="form-number-input form-dropdown" name="q13_phiArea[2][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_17,input_13_1_17,input_13_2_17,input_13_3_17,input_13_4_17,input_13_5_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_2_18" type="number" class="form-number-input form-dropdown" name="q13_phiArea[2][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_18,input_13_1_18,input_13_2_18,input_13_3_18,input_13_4_18,input_13_5_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_2_19" type="number" class="form-number-input form-dropdown" name="q13_phiArea[2][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_19,input_13_1_19,input_13_2_19,input_13_3_19,input_13_4_19,input_13_5_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_2_20" type="number" class="form-number-input form-dropdown" name="q13_phiArea[2][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_20,input_13_1_20,input_13_2_20,input_13_3_20,input_13_4_20,input_13_5_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_2_21" type="number" class="form-number-input form-dropdown" name="q13_phiArea[2][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_21,input_13_1_21,input_13_2_21,input_13_3_21,input_13_4_21,input_13_5_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_2_22" type="number" class="form-number-input form-dropdown" name="q13_phiArea[2][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_22,input_13_1_22,input_13_2_22,input_13_3_22,input_13_4_22,input_13_5_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_2_23" type="number" class="form-number-input form-dropdown" name="q13_phiArea[2][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_23,input_13_1_23,input_13_2_23,input_13_3_23,input_13_4_23,input_13_5_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Thunnalai </th>
<td align="center" class="form-matrix-values">
<input id="input_13_3_0" type="number" class="form-number-input form-dropdown" name="q13_phiArea[3][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_0,input_13_1_0,input_13_2_0,input_13_3_0,input_13_4_0,input_13_5_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_3_1" type="number" class="form-number-input form-dropdown" name="q13_phiArea[3][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_1,input_13_1_1,input_13_2_1,input_13_3_1,input_13_4_1,input_13_5_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_3_2" type="number" class="form-number-input form-dropdown" name="q13_phiArea[3][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_2,input_13_1_2,input_13_2_2,input_13_3_2,input_13_4_2,input_13_5_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_3_3" type="number" class="form-number-input form-dropdown" name="q13_phiArea[3][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_3,input_13_1_3,input_13_2_3,input_13_3_3,input_13_4_3,input_13_5_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_3_4" type="number" class="form-number-input form-dropdown" name="q13_phiArea[3][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_4,input_13_1_4,input_13_2_4,input_13_3_4,input_13_4_4,input_13_5_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_3_5" type="number" class="form-number-input form-dropdown" name="q13_phiArea[3][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_5,input_13_1_5,input_13_2_5,input_13_3_5,input_13_4_5,input_13_5_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_3_6" type="number" class="form-number-input form-dropdown" name="q13_phiArea[3][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_6,input_13_1_6,input_13_2_6,input_13_3_6,input_13_4_6,input_13_5_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_3_7" type="number" class="form-number-input form-dropdown" name="q13_phiArea[3][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_7,input_13_1_7,input_13_2_7,input_13_3_7,input_13_4_7,input_13_5_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_3_8" type="number" class="form-number-input form-dropdown" name="q13_phiArea[3][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_8,input_13_1_8,input_13_2_8,input_13_3_8,input_13_4_8,input_13_5_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_3_9" type="number" class="form-number-input form-dropdown" name="q13_phiArea[3][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_9,input_13_1_9,input_13_2_9,input_13_3_9,input_13_4_9,input_13_5_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_3_10" type="number" class="form-number-input form-dropdown" name="q13_phiArea[3][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_10,input_13_1_10,input_13_2_10,input_13_3_10,input_13_4_10,input_13_5_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_3_11" type="number" class="form-number-input form-dropdown" name="q13_phiArea[3][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_11,input_13_1_11,input_13_2_11,input_13_3_11,input_13_4_11,input_13_5_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_3_12" type="number" class="form-number-input form-dropdown" name="q13_phiArea[3][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_12,input_13_1_12,input_13_2_12,input_13_3_12,input_13_4_12,input_13_5_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_3_13" type="number" class="form-number-input form-dropdown" name="q13_phiArea[3][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_13,input_13_1_13,input_13_2_13,input_13_3_13,input_13_4_13,input_13_5_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_3_14" type="number" class="form-number-input form-dropdown" name="q13_phiArea[3][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_14,input_13_1_14,input_13_2_14,input_13_3_14,input_13_4_14,input_13_5_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_3_15" type="number" class="form-number-input form-dropdown" name="q13_phiArea[3][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_15,input_13_1_15,input_13_2_15,input_13_3_15,input_13_4_15,input_13_5_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_3_16" type="number" class="form-number-input form-dropdown" name="q13_phiArea[3][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_16,input_13_1_16,input_13_2_16,input_13_3_16,input_13_4_16,input_13_5_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_3_17" type="number" class="form-number-input form-dropdown" name="q13_phiArea[3][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_17,input_13_1_17,input_13_2_17,input_13_3_17,input_13_4_17,input_13_5_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_3_18" type="number" class="form-number-input form-dropdown" name="q13_phiArea[3][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_18,input_13_1_18,input_13_2_18,input_13_3_18,input_13_4_18,input_13_5_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_3_19" type="number" class="form-number-input form-dropdown" name="q13_phiArea[3][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_19,input_13_1_19,input_13_2_19,input_13_3_19,input_13_4_19,input_13_5_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_3_20" type="number" class="form-number-input form-dropdown" name="q13_phiArea[3][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_20,input_13_1_20,input_13_2_20,input_13_3_20,input_13_4_20,input_13_5_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_3_21" type="number" class="form-number-input form-dropdown" name="q13_phiArea[3][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_21,input_13_1_21,input_13_2_21,input_13_3_21,input_13_4_21,input_13_5_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_3_22" type="number" class="form-number-input form-dropdown" name="q13_phiArea[3][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_22,input_13_1_22,input_13_2_22,input_13_3_22,input_13_4_22,input_13_5_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_3_23" type="number" class="form-number-input form-dropdown" name="q13_phiArea[3][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_23,input_13_1_23,input_13_2_23,input_13_3_23,input_13_4_23,input_13_5_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Udupiddy </th>
<td align="center" class="form-matrix-values">
<input id="input_13_4_0" type="number" class="form-number-input form-dropdown" name="q13_phiArea[4][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_0,input_13_1_0,input_13_2_0,input_13_3_0,input_13_4_0,input_13_5_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_4_1" type="number" class="form-number-input form-dropdown" name="q13_phiArea[4][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_1,input_13_1_1,input_13_2_1,input_13_3_1,input_13_4_1,input_13_5_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_4_2" type="number" class="form-number-input form-dropdown" name="q13_phiArea[4][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_2,input_13_1_2,input_13_2_2,input_13_3_2,input_13_4_2,input_13_5_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_4_3" type="number" class="form-number-input form-dropdown" name="q13_phiArea[4][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_3,input_13_1_3,input_13_2_3,input_13_3_3,input_13_4_3,input_13_5_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_4_4" type="number" class="form-number-input form-dropdown" name="q13_phiArea[4][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_4,input_13_1_4,input_13_2_4,input_13_3_4,input_13_4_4,input_13_5_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_4_5" type="number" class="form-number-input form-dropdown" name="q13_phiArea[4][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_5,input_13_1_5,input_13_2_5,input_13_3_5,input_13_4_5,input_13_5_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_4_6" type="number" class="form-number-input form-dropdown" name="q13_phiArea[4][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_6,input_13_1_6,input_13_2_6,input_13_3_6,input_13_4_6,input_13_5_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_4_7" type="number" class="form-number-input form-dropdown" name="q13_phiArea[4][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_7,input_13_1_7,input_13_2_7,input_13_3_7,input_13_4_7,input_13_5_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_4_8" type="number" class="form-number-input form-dropdown" name="q13_phiArea[4][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_8,input_13_1_8,input_13_2_8,input_13_3_8,input_13_4_8,input_13_5_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_4_9" type="number" class="form-number-input form-dropdown" name="q13_phiArea[4][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_9,input_13_1_9,input_13_2_9,input_13_3_9,input_13_4_9,input_13_5_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_4_10" type="number" class="form-number-input form-dropdown" name="q13_phiArea[4][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_10,input_13_1_10,input_13_2_10,input_13_3_10,input_13_4_10,input_13_5_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_4_11" type="number" class="form-number-input form-dropdown" name="q13_phiArea[4][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_11,input_13_1_11,input_13_2_11,input_13_3_11,input_13_4_11,input_13_5_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_4_12" type="number" class="form-number-input form-dropdown" name="q13_phiArea[4][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_12,input_13_1_12,input_13_2_12,input_13_3_12,input_13_4_12,input_13_5_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_4_13" type="number" class="form-number-input form-dropdown" name="q13_phiArea[4][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_13,input_13_1_13,input_13_2_13,input_13_3_13,input_13_4_13,input_13_5_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_4_14" type="number" class="form-number-input form-dropdown" name="q13_phiArea[4][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_14,input_13_1_14,input_13_2_14,input_13_3_14,input_13_4_14,input_13_5_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_4_15" type="number" class="form-number-input form-dropdown" name="q13_phiArea[4][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_15,input_13_1_15,input_13_2_15,input_13_3_15,input_13_4_15,input_13_5_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_4_16" type="number" class="form-number-input form-dropdown" name="q13_phiArea[4][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_16,input_13_1_16,input_13_2_16,input_13_3_16,input_13_4_16,input_13_5_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_4_17" type="number" class="form-number-input form-dropdown" name="q13_phiArea[4][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_17,input_13_1_17,input_13_2_17,input_13_3_17,input_13_4_17,input_13_5_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_4_18" type="number" class="form-number-input form-dropdown" name="q13_phiArea[4][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_18,input_13_1_18,input_13_2_18,input_13_3_18,input_13_4_18,input_13_5_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_4_19" type="number" class="form-number-input form-dropdown" name="q13_phiArea[4][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_19,input_13_1_19,input_13_2_19,input_13_3_19,input_13_4_19,input_13_5_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_4_20" type="number" class="form-number-input form-dropdown" name="q13_phiArea[4][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_20,input_13_1_20,input_13_2_20,input_13_3_20,input_13_4_20,input_13_5_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_4_21" type="number" class="form-number-input form-dropdown" name="q13_phiArea[4][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_21,input_13_1_21,input_13_2_21,input_13_3_21,input_13_4_21,input_13_5_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_4_22" type="number" class="form-number-input form-dropdown" name="q13_phiArea[4][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_22,input_13_1_22,input_13_2_22,input_13_3_22,input_13_4_22,input_13_5_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_4_23" type="number" class="form-number-input form-dropdown" name="q13_phiArea[4][]" style="width:60px" size="5" onchange="karaveddyTotal(input_13_0_23,input_13_1_23,input_13_2_23,input_13_3_23,input_13_4_23,input_13_5_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Total </th>
<td align="center" class="form-matrix-values">
<input id="input_13_5_0" type="text" class="form-number-input form-dropdown" name="q13_phiArea[5][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_5_1" type="text" class="form-number-input form-dropdown" name="q13_phiArea[5][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_5_2" type="text" class="form-number-input form-dropdown" name="q13_phiArea[5][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_5_3" type="text" class="form-number-input form-dropdown" name="q13_phiArea[5][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_5_4" type="text" class="form-number-input form-dropdown" name="q13_phiArea[5][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_5_5" type="text" class="form-number-input form-dropdown" name="q13_phiArea[5][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_5_6" type="text" class="form-number-input form-dropdown" name="q13_phiArea[5][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_5_7" type="text" class="form-number-input form-dropdown" name="q13_phiArea[5][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_5_8" type="text" class="form-number-input form-dropdown" name="q13_phiArea[5][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_5_9" type="text" class="form-number-input form-dropdown" name="q13_phiArea[5][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_5_10" type="text" class="form-number-input form-dropdown" name="q13_phiArea[5][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_5_11" type="text" class="form-number-input form-dropdown" name="q13_phiArea[5][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_5_12" type="text" class="form-number-input form-dropdown" name="q13_phiArea[5][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_5_13" type="text" class="form-number-input form-dropdown" name="q13_phiArea[5][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_5_14" type="text" class="form-number-input form-dropdown" name="q13_phiArea[5][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_5_15" type="text" class="form-number-input form-dropdown" name="q13_phiArea[5][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_5_16" type="text" class="form-number-input form-dropdown" name="q13_phiArea[5][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_5_17" type="text" class="form-number-input form-dropdown" name="q13_phiArea[5][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_5_18" type="text" class="form-number-input form-dropdown" name="q13_phiArea[5][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_5_19" type="text" class="form-number-input form-dropdown" name="q13_phiArea[5][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_5_20" type="text" class="form-number-input form-dropdown" name="q13_phiArea[5][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_5_21" type="text" class="form-number-input form-dropdown" name="q13_phiArea[5][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_5_22" type="text" class="form-number-input form-dropdown" name="q13_phiArea[5][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_13_5_23" type="text" class="form-number-input form-dropdown" name="q13_phiArea[5][]" style="width:60px" size="5" disabled/>
</td>
</tr>
</table>
</div>
</li>
<li class="form-line form-field-hidden" style="display:none;" data-type="control_matrix" id="id_14">
<label class="form-label form-label-left form-label-auto" id="label_14" for="input_14">PHI Area Vs Diseases </label>
<div id="cid_14" class="form-input jf-required">
<table summary="" cellpadding="4" cellspacing="0" class="form-matrix-table">
<tr>
<th style="border:none">&nbsp; </th>
<th class="form-matrix-column-headers form-matrix-column_0">Internationally Notifiable Diseases(Cholera, Plague, Yellow Fever)</th>
<th class="form-matrix-column-headers form-matrix-column_1">Polio Myelitis / Acute Flaccid Paralysis </th>
<th class="form-matrix-column-headers form-matrix-column_2">Chicken Pox </th>
<th class="form-matrix-column-headers form-matrix-column_3">Dengue Fever/ Dengue Hemorrhagic Fever </th>
<th class="form-matrix-column-headers form-matrix-column_4">Diphtheria </th>
<th class="form-matrix-column-headers form-matrix-column_5">Dysentery </th>
<th class="form-matrix-column-headers form-matrix-column_6">Encephalitis (including Japanese Encephalitis) </th>
<th class="form-matrix-column-headers form-matrix-column_7">Enteric Fever </th>
<th class="form-matrix-column-headers form-matrix-column_8">Food Poisoning </th>
<th class="form-matrix-column-headers form-matrix-column_9">Human Rabies </th>
<th class="form-matrix-column-headers form-matrix-column_10">Leptospirosis </th>
<th class="form-matrix-column-headers form-matrix-column_11">Malaria </th>
<th class="form-matrix-column-headers form-matrix-column_12">Measles </th>
<th class="form-matrix-column-headers form-matrix-column_13">Meningitis </th>
<th class="form-matrix-column-headers form-matrix-column_14">Mumps </th>
<th class="form-matrix-column-headers form-matrix-column_15">Rubella </th>
<th class="form-matrix-column-headers form-matrix-column_16">Congenital Rubella Syndrome </th>
<th class="form-matrix-column-headers form-matrix-column_17">Simple continued fever </th>
<th class="form-matrix-column-headers form-matrix-column_18">Tetanus </th>
<th class="form-matrix-column-headers form-matrix-column_19">Neonatal tetanus </th>
<th class="form-matrix-column-headers form-matrix-column_20">Typhus Fever </th>
<th class="form-matrix-column-headers form-matrix-column_21">Viral Hepatitis </th>
<th class="form-matrix-column-headers form-matrix-column_22">Whooping cough </th>
<th class="form-matrix-column-headers form-matrix-column_23">Tuberculosis </th>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Ariyalai </th>
<td align="center" class="form-matrix-values">
<input id="input_14_0_0" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[0][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_0,input_14_1_0,input_14_2_0,input_14_3_0,input_14_4_0,input_14_5_0,input_14_6_0,input_14_7_0,input_14_8_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_0_1" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[0][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_1,input_14_1_1,input_14_2_1,input_14_3_1,input_14_4_1,input_14_5_1,input_14_6_1,input_14_7_1,input_14_8_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_0_2" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[0][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_2,input_14_1_2,input_14_2_2,input_14_3_2,input_14_4_2,input_14_5_2,input_14_6_2,input_14_7_2,input_14_8_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_0_3" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[0][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_3,input_14_1_3,input_14_2_3,input_14_3_3,input_14_4_3,input_14_5_3,input_14_6_3,input_14_7_3,input_14_8_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_0_4" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[0][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_4,input_14_1_4,input_14_2_4,input_14_3_4,input_14_4_4,input_14_5_4,input_14_6_4,input_14_7_4,input_14_8_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_0_5" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[0][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_5,input_14_1_5,input_14_2_5,input_14_3_5,input_14_4_5,input_14_5_5,input_14_6_5,input_14_7_5,input_14_8_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_0_6" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[0][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_6,input_14_1_6,input_14_2_6,input_14_3_6,input_14_4_6,input_14_5_6,input_14_6_6,input_14_7_6,input_14_8_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_0_7" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[0][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_7,input_14_1_7,input_14_2_7,input_14_3_7,input_14_4_7,input_14_5_7,input_14_6_7,input_14_7_7,input_14_8_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_0_8" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[0][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_8,input_14_1_8,input_14_2_8,input_14_3_8,input_14_4_8,input_14_5_8,input_14_6_8,input_14_7_8,input_14_8_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_0_9" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[0][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_9,input_14_1_9,input_14_2_9,input_14_3_9,input_14_4_9,input_14_5_9,input_14_6_9,input_14_7_9,input_14_8_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_0_10" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[0][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_10,input_14_1_10,input_14_2_10,input_14_3_10,input_14_4_10,input_14_5_10,input_14_6_10,input_14_7_10,input_14_8_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_0_11" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[0][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_11,input_14_1_11,input_14_2_11,input_14_3_11,input_14_4_11,input_14_5_11,input_14_6_11,input_14_7_11,input_14_8_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_0_12" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[0][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_12,input_14_1_12,input_14_2_12,input_14_3_12,input_14_4_12,input_14_5_12,input_14_6_12,input_14_7_12,input_14_8_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_0_13" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[0][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_13,input_14_1_13,input_14_2_13,input_14_3_13,input_14_4_13,input_14_5_13,input_14_6_13,input_14_7_13,input_14_8_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_0_14" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[0][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_14,input_14_1_14,input_14_2_14,input_14_3_14,input_14_4_14,input_14_5_14,input_14_6_14,input_14_7_14,input_14_8_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_0_15" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[0][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_15,input_14_1_15,input_14_2_15,input_14_3_15,input_14_4_15,input_14_5_15,input_14_6_15,input_14_7_15,input_14_8_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_0_16" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[0][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_16,input_14_1_16,input_14_2_16,input_14_3_16,input_14_4_16,input_14_5_16,input_14_6_16,input_14_7_16,input_14_8_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_0_17" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[0][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_17,input_14_1_17,input_14_2_17,input_14_3_17,input_14_4_17,input_14_5_17,input_14_6_17,input_14_7_17,input_14_8_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_0_18" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[0][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_18,input_14_1_18,input_14_2_18,input_14_3_18,input_14_4_18,input_14_5_18,input_14_6_18,input_14_7_18,input_14_8_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_0_19" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[0][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_19,input_14_1_19,input_14_2_19,input_14_3_19,input_14_4_19,input_14_5_19,input_14_6_19,input_14_7_19,input_14_8_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_0_20" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[0][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_20,input_14_1_20,input_14_2_20,input_14_3_20,input_14_4_20,input_14_5_20,input_14_6_20,input_14_7_20,input_14_8_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_0_21" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[0][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_21,input_14_1_21,input_14_2_21,input_14_3_21,input_14_4_21,input_14_5_21,input_14_6_21,input_14_7_21,input_14_8_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_0_22" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[0][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_22,input_14_1_22,input_14_2_22,input_14_3_22,input_14_4_22,input_14_5_22,input_14_6_22,input_14_7_22,input_14_8_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_0_23" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[0][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_23,input_14_1_23,input_14_2_23,input_14_3_23,input_14_4_23,input_14_5_23,input_14_6_23,input_14_7_23,input_14_8_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Bazaar-I </th>
<td align="center" class="form-matrix-values">
<input id="input_14_1_0" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[1][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_0,input_14_1_0,input_14_2_0,input_14_3_0,input_14_4_0,input_14_5_0,input_14_6_0,input_14_7_0,input_14_8_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_1_1" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[1][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_1,input_14_1_1,input_14_2_1,input_14_3_1,input_14_4_1,input_14_5_1,input_14_6_1,input_14_7_1,input_14_8_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_1_2" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[1][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_2,input_14_1_2,input_14_2_2,input_14_3_2,input_14_4_2,input_14_5_2,input_14_6_2,input_14_7_2,input_14_8_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_1_3" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[1][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_3,input_14_1_3,input_14_2_3,input_14_3_3,input_14_4_3,input_14_5_3,input_14_6_3,input_14_7_3,input_14_8_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_1_4" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[1][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_4,input_14_1_4,input_14_2_4,input_14_3_4,input_14_4_4,input_14_5_4,input_14_6_4,input_14_7_4,input_14_8_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_1_5" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[1][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_5,input_14_1_5,input_14_2_5,input_14_3_5,input_14_4_5,input_14_5_5,input_14_6_5,input_14_7_5,input_14_8_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_1_6" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[1][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_6,input_14_1_6,input_14_2_6,input_14_3_6,input_14_4_6,input_14_5_6,input_14_6_6,input_14_7_6,input_14_8_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_1_7" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[1][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_7,input_14_1_7,input_14_2_7,input_14_3_7,input_14_4_7,input_14_5_7,input_14_6_7,input_14_7_7,input_14_8_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_1_8" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[1][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_8,input_14_1_8,input_14_2_8,input_14_3_8,input_14_4_8,input_14_5_8,input_14_6_8,input_14_7_8,input_14_8_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_1_9" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[1][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_9,input_14_1_9,input_14_2_9,input_14_3_9,input_14_4_9,input_14_5_9,input_14_6_9,input_14_7_9,input_14_8_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_1_10" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[1][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_10,input_14_1_10,input_14_2_10,input_14_3_10,input_14_4_10,input_14_5_10,input_14_6_10,input_14_7_10,input_14_8_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_1_11" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[1][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_11,input_14_1_11,input_14_2_11,input_14_3_11,input_14_4_11,input_14_5_11,input_14_6_11,input_14_7_11,input_14_8_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_1_12" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[1][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_12,input_14_1_12,input_14_2_12,input_14_3_12,input_14_4_12,input_14_5_12,input_14_6_12,input_14_7_12,input_14_8_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_1_13" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[1][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_13,input_14_1_13,input_14_2_13,input_14_3_13,input_14_4_13,input_14_5_13,input_14_6_13,input_14_7_13,input_14_8_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_1_14" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[1][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_14,input_14_1_14,input_14_2_14,input_14_3_14,input_14_4_14,input_14_5_14,input_14_6_14,input_14_7_14,input_14_8_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_1_15" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[1][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_15,input_14_1_15,input_14_2_15,input_14_3_15,input_14_4_15,input_14_5_15,input_14_6_15,input_14_7_15,input_14_8_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_1_16" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[1][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_16,input_14_1_16,input_14_2_16,input_14_3_16,input_14_4_16,input_14_5_16,input_14_6_16,input_14_7_16,input_14_8_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_1_17" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[1][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_17,input_14_1_17,input_14_2_17,input_14_3_17,input_14_4_17,input_14_5_17,input_14_6_17,input_14_7_17,input_14_8_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_1_18" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[1][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_18,input_14_1_18,input_14_2_18,input_14_3_18,input_14_4_18,input_14_5_18,input_14_6_18,input_14_7_18,input_14_8_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_1_19" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[1][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_19,input_14_1_19,input_14_2_19,input_14_3_19,input_14_4_19,input_14_5_19,input_14_6_19,input_14_7_19,input_14_8_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_1_20" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[1][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_20,input_14_1_20,input_14_2_20,input_14_3_20,input_14_4_20,input_14_5_20,input_14_6_20,input_14_7_20,input_14_8_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_1_21" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[1][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_21,input_14_1_21,input_14_2_21,input_14_3_21,input_14_4_21,input_14_5_21,input_14_6_21,input_14_7_21,input_14_8_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_1_22" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[1][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_22,input_14_1_22,input_14_2_22,input_14_3_22,input_14_4_22,input_14_5_22,input_14_6_22,input_14_7_22,input_14_8_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_1_23" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[1][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_23,input_14_1_23,input_14_2_23,input_14_3_23,input_14_4_23,input_14_5_23,input_14_6_23,input_14_7_23,input_14_8_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">
Bazaar-II </th>
<td align="center" class="form-matrix-values">
<input id="input_14_2_0" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[2][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_0,input_14_1_0,input_14_2_0,input_14_3_0,input_14_4_0,input_14_5_0,input_14_6_0,input_14_7_0,input_14_8_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_2_1" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[2][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_1,input_14_1_1,input_14_2_1,input_14_3_1,input_14_4_1,input_14_5_1,input_14_6_1,input_14_7_1,input_14_8_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_2_2" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[2][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_2,input_14_1_2,input_14_2_2,input_14_3_2,input_14_4_2,input_14_5_2,input_14_6_2,input_14_7_2,input_14_8_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_2_3" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[2][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_3,input_14_1_3,input_14_2_3,input_14_3_3,input_14_4_3,input_14_5_3,input_14_6_3,input_14_7_3,input_14_8_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_2_4" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[2][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_4,input_14_1_4,input_14_2_4,input_14_3_4,input_14_4_4,input_14_5_4,input_14_6_4,input_14_7_4,input_14_8_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_2_5" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[2][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_5,input_14_1_5,input_14_2_5,input_14_3_5,input_14_4_5,input_14_5_5,input_14_6_5,input_14_7_5,input_14_8_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_2_6" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[2][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_6,input_14_1_6,input_14_2_6,input_14_3_6,input_14_4_6,input_14_5_6,input_14_6_6,input_14_7_6,input_14_8_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_2_7" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[2][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_7,input_14_1_7,input_14_2_7,input_14_3_7,input_14_4_7,input_14_5_7,input_14_6_7,input_14_7_7,input_14_8_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_2_8" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[2][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_8,input_14_1_8,input_14_2_8,input_14_3_8,input_14_4_8,input_14_5_8,input_14_6_8,input_14_7_8,input_14_8_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_2_9" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[2][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_9,input_14_1_9,input_14_2_9,input_14_3_9,input_14_4_9,input_14_5_9,input_14_6_9,input_14_7_9,input_14_8_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_2_10" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[2][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_10,input_14_1_10,input_14_2_10,input_14_3_10,input_14_4_10,input_14_5_10,input_14_6_10,input_14_7_10,input_14_8_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_2_11" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[2][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_11,input_14_1_11,input_14_2_11,input_14_3_11,input_14_4_11,input_14_5_11,input_14_6_11,input_14_7_11,input_14_8_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_2_12" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[2][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_12,input_14_1_12,input_14_2_12,input_14_3_12,input_14_4_12,input_14_5_12,input_14_6_12,input_14_7_12,input_14_8_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_2_13" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[2][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_13,input_14_1_13,input_14_2_13,input_14_3_13,input_14_4_13,input_14_5_13,input_14_6_13,input_14_7_13,input_14_8_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_2_14" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[2][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_14,input_14_1_14,input_14_2_14,input_14_3_14,input_14_4_14,input_14_5_14,input_14_6_14,input_14_7_14,input_14_8_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_2_15" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[2][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_15,input_14_1_15,input_14_2_15,input_14_3_15,input_14_4_15,input_14_5_15,input_14_6_15,input_14_7_15,input_14_8_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_2_16" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[2][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_16,input_14_1_16,input_14_2_16,input_14_3_16,input_14_4_16,input_14_5_16,input_14_6_16,input_14_7_16,input_14_8_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_2_17" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[2][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_17,input_14_1_17,input_14_2_17,input_14_3_17,input_14_4_17,input_14_5_17,input_14_6_17,input_14_7_17,input_14_8_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_2_18" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[2][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_18,input_14_1_18,input_14_2_18,input_14_3_18,input_14_4_18,input_14_5_18,input_14_6_18,input_14_7_18,input_14_8_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_2_19" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[2][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_19,input_14_1_19,input_14_2_19,input_14_3_19,input_14_4_19,input_14_5_19,input_14_6_19,input_14_7_19,input_14_8_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_2_20" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[2][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_20,input_14_1_20,input_14_2_20,input_14_3_20,input_14_4_20,input_14_5_20,input_14_6_20,input_14_7_20,input_14_8_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_2_21" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[2][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_21,input_14_1_21,input_14_2_21,input_14_3_21,input_14_4_21,input_14_5_21,input_14_6_21,input_14_7_21,input_14_8_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_2_22" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[2][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_22,input_14_1_22,input_14_2_22,input_14_3_22,input_14_4_22,input_14_5_22,input_14_6_22,input_14_7_22,input_14_8_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_2_23" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[2][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_23,input_14_1_23,input_14_2_23,input_14_3_23,input_14_4_23,input_14_5_23,input_14_6_23,input_14_7_23,input_14_8_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Columbuthurai </th>
<td align="center" class="form-matrix-values">
<input id="input_14_3_0" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[3][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_0,input_14_1_0,input_14_2_0,input_14_3_0,input_14_4_0,input_14_5_0,input_14_6_0,input_14_7_0,input_14_8_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_3_1" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[3][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_1,input_14_1_1,input_14_2_1,input_14_3_1,input_14_4_1,input_14_5_1,input_14_6_1,input_14_7_1,input_14_8_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_3_2" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[3][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_2,input_14_1_2,input_14_2_2,input_14_3_2,input_14_4_2,input_14_5_2,input_14_6_2,input_14_7_2,input_14_8_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_3_3" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[3][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_3,input_14_1_3,input_14_2_3,input_14_3_3,input_14_4_3,input_14_5_3,input_14_6_3,input_14_7_3,input_14_8_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_3_4" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[3][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_4,input_14_1_4,input_14_2_4,input_14_3_4,input_14_4_4,input_14_5_4,input_14_6_4,input_14_7_4,input_14_8_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_3_5" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[3][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_5,input_14_1_5,input_14_2_5,input_14_3_5,input_14_4_5,input_14_5_5,input_14_6_5,input_14_7_5,input_14_8_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_3_6" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[3][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_6,input_14_1_6,input_14_2_6,input_14_3_6,input_14_4_6,input_14_5_6,input_14_6_6,input_14_7_6,input_14_8_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_3_7" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[3][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_7,input_14_1_7,input_14_2_7,input_14_3_7,input_14_4_7,input_14_5_7,input_14_6_7,input_14_7_7,input_14_8_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_3_8" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[3][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_8,input_14_1_8,input_14_2_8,input_14_3_8,input_14_4_8,input_14_5_8,input_14_6_8,input_14_7_8,input_14_8_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_3_9" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[3][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_9,input_14_1_9,input_14_2_9,input_14_3_9,input_14_4_9,input_14_5_9,input_14_6_9,input_14_7_9,input_14_8_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_3_10" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[3][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_10,input_14_1_10,input_14_2_10,input_14_3_10,input_14_4_10,input_14_5_10,input_14_6_10,input_14_7_10,input_14_8_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_3_11" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[3][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_11,input_14_1_11,input_14_2_11,input_14_3_11,input_14_4_11,input_14_5_11,input_14_6_11,input_14_7_11,input_14_8_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_3_12" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[3][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_12,input_14_1_12,input_14_2_12,input_14_3_12,input_14_4_12,input_14_5_12,input_14_6_12,input_14_7_12,input_14_8_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_3_13" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[3][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_13,input_14_1_13,input_14_2_13,input_14_3_13,input_14_4_13,input_14_5_13,input_14_6_13,input_14_7_13,input_14_8_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_3_14" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[3][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_14,input_14_1_14,input_14_2_14,input_14_3_14,input_14_4_14,input_14_5_14,input_14_6_14,input_14_7_14,input_14_8_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_3_15" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[3][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_15,input_14_1_15,input_14_2_15,input_14_3_15,input_14_4_15,input_14_5_15,input_14_6_15,input_14_7_15,input_14_8_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_3_16" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[3][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_16,input_14_1_16,input_14_2_16,input_14_3_16,input_14_4_16,input_14_5_16,input_14_6_16,input_14_7_16,input_14_8_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_3_17" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[3][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_17,input_14_1_17,input_14_2_17,input_14_3_17,input_14_4_17,input_14_5_17,input_14_6_17,input_14_7_17,input_14_8_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_3_18" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[3][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_18,input_14_1_18,input_14_2_18,input_14_3_18,input_14_4_18,input_14_5_18,input_14_6_18,input_14_7_18,input_14_8_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_3_19" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[3][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_19,input_14_1_19,input_14_2_19,input_14_3_19,input_14_4_19,input_14_5_19,input_14_6_19,input_14_7_19,input_14_8_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_3_20" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[3][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_20,input_14_1_20,input_14_2_20,input_14_3_20,input_14_4_20,input_14_5_20,input_14_6_20,input_14_7_20,input_14_8_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_3_21" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[3][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_21,input_14_1_21,input_14_2_21,input_14_3_21,input_14_4_21,input_14_5_21,input_14_6_21,input_14_7_21,input_14_8_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_3_22" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[3][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_22,input_14_1_22,input_14_2_22,input_14_3_22,input_14_4_22,input_14_5_22,input_14_6_22,input_14_7_22,input_14_8_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_3_23" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[3][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_23,input_14_1_23,input_14_2_23,input_14_3_23,input_14_4_23,input_14_5_23,input_14_6_23,input_14_7_23,input_14_8_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Gurunagar-I </th>
<td align="center" class="form-matrix-values">
<input id="input_14_4_0" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[4][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_0,input_14_1_0,input_14_2_0,input_14_3_0,input_14_4_0,input_14_5_0,input_14_6_0,input_14_7_0,input_14_8_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_4_1" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[4][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_1,input_14_1_1,input_14_2_1,input_14_3_1,input_14_4_1,input_14_5_1,input_14_6_1,input_14_7_1,input_14_8_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_4_2" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[4][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_2,input_14_1_2,input_14_2_2,input_14_3_2,input_14_4_2,input_14_5_2,input_14_6_2,input_14_7_2,input_14_8_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_4_3" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[4][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_3,input_14_1_3,input_14_2_3,input_14_3_3,input_14_4_3,input_14_5_3,input_14_6_3,input_14_7_3,input_14_8_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_4_4" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[4][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_4,input_14_1_4,input_14_2_4,input_14_3_4,input_14_4_4,input_14_5_4,input_14_6_4,input_14_7_4,input_14_8_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_4_5" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[4][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_5,input_14_1_5,input_14_2_5,input_14_3_5,input_14_4_5,input_14_5_5,input_14_6_5,input_14_7_5,input_14_8_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_4_6" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[4][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_6,input_14_1_6,input_14_2_6,input_14_3_6,input_14_4_6,input_14_5_6,input_14_6_6,input_14_7_6,input_14_8_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_4_7" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[4][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_7,input_14_1_7,input_14_2_7,input_14_3_7,input_14_4_7,input_14_5_7,input_14_6_7,input_14_7_7,input_14_8_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_4_8" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[4][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_8,input_14_1_8,input_14_2_8,input_14_3_8,input_14_4_8,input_14_5_8,input_14_6_8,input_14_7_8,input_14_8_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_4_9" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[4][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_9,input_14_1_9,input_14_2_9,input_14_3_9,input_14_4_9,input_14_5_9,input_14_6_9,input_14_7_9,input_14_8_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_4_10" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[4][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_10,input_14_1_10,input_14_2_10,input_14_3_10,input_14_4_10,input_14_5_10,input_14_6_10,input_14_7_10,input_14_8_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_4_11" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[4][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_11,input_14_1_11,input_14_2_11,input_14_3_11,input_14_4_11,input_14_5_11,input_14_6_11,input_14_7_11,input_14_8_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_4_12" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[4][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_12,input_14_1_12,input_14_2_12,input_14_3_12,input_14_4_12,input_14_5_12,input_14_6_12,input_14_7_12,input_14_8_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_4_13" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[4][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_13,input_14_1_13,input_14_2_13,input_14_3_13,input_14_4_13,input_14_5_13,input_14_6_13,input_14_7_13,input_14_8_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_4_14" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[4][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_14,input_14_1_14,input_14_2_14,input_14_3_14,input_14_4_14,input_14_5_14,input_14_6_14,input_14_7_14,input_14_8_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_4_15" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[4][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_15,input_14_1_15,input_14_2_15,input_14_3_15,input_14_4_15,input_14_5_15,input_14_6_15,input_14_7_15,input_14_8_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_4_16" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[4][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_16,input_14_1_16,input_14_2_16,input_14_3_16,input_14_4_16,input_14_5_16,input_14_6_16,input_14_7_16,input_14_8_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_4_17" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[4][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_17,input_14_1_17,input_14_2_17,input_14_3_17,input_14_4_17,input_14_5_17,input_14_6_17,input_14_7_17,input_14_8_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_4_18" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[4][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_18,input_14_1_18,input_14_2_18,input_14_3_18,input_14_4_18,input_14_5_18,input_14_6_18,input_14_7_18,input_14_8_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_4_19" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[4][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_19,input_14_1_19,input_14_2_19,input_14_3_19,input_14_4_19,input_14_5_19,input_14_6_19,input_14_7_19,input_14_8_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_4_20" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[4][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_20,input_14_1_20,input_14_2_20,input_14_3_20,input_14_4_20,input_14_5_20,input_14_6_20,input_14_7_20,input_14_8_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_4_21" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[4][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_21,input_14_1_21,input_14_2_21,input_14_3_21,input_14_4_21,input_14_5_21,input_14_6_21,input_14_7_21,input_14_8_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_4_22" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[4][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_22,input_14_1_22,input_14_2_22,input_14_3_22,input_14_4_22,input_14_5_22,input_14_6_22,input_14_7_22,input_14_8_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_4_23" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[4][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_23,input_14_1_23,input_14_2_23,input_14_3_23,input_14_4_23,input_14_5_23,input_14_6_23,input_14_7_23,input_14_8_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Gurunagar-II </th>
<td align="center" class="form-matrix-values">
<input id="input_14_5_0" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[5][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_0,input_14_1_0,input_14_2_0,input_14_3_0,input_14_4_0,input_14_5_0,input_14_6_0,input_14_7_0,input_14_8_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_5_1" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[5][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_1,input_14_1_1,input_14_2_1,input_14_3_1,input_14_4_1,input_14_5_1,input_14_6_1,input_14_7_1,input_14_8_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_5_2" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[5][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_2,input_14_1_2,input_14_2_2,input_14_3_2,input_14_4_2,input_14_5_2,input_14_6_2,input_14_7_2,input_14_8_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_5_3" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[5][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_3,input_14_1_3,input_14_2_3,input_14_3_3,input_14_4_3,input_14_5_3,input_14_6_3,input_14_7_3,input_14_8_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_5_4" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[5][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_4,input_14_1_4,input_14_2_4,input_14_3_4,input_14_4_4,input_14_5_4,input_14_6_4,input_14_7_4,input_14_8_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_5_5" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[5][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_5,input_14_1_5,input_14_2_5,input_14_3_5,input_14_4_5,input_14_5_5,input_14_6_5,input_14_7_5,input_14_8_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_5_6" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[5][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_6,input_14_1_6,input_14_2_6,input_14_3_6,input_14_4_6,input_14_5_6,input_14_6_6,input_14_7_6,input_14_8_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_5_7" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[5][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_7,input_14_1_7,input_14_2_7,input_14_3_7,input_14_4_7,input_14_5_7,input_14_6_7,input_14_7_7,input_14_8_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_5_8" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[5][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_8,input_14_1_8,input_14_2_8,input_14_3_8,input_14_4_8,input_14_5_8,input_14_6_8,input_14_7_8,input_14_8_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_5_9" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[5][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_9,input_14_1_9,input_14_2_9,input_14_3_9,input_14_4_9,input_14_5_9,input_14_6_9,input_14_7_9,input_14_8_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_5_10" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[5][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_10,input_14_1_10,input_14_2_10,input_14_3_10,input_14_4_10,input_14_5_10,input_14_6_10,input_14_7_10,input_14_8_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_5_11" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[5][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_11,input_14_1_11,input_14_2_11,input_14_3_11,input_14_4_11,input_14_5_11,input_14_6_11,input_14_7_11,input_14_8_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_5_12" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[5][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_12,input_14_1_12,input_14_2_12,input_14_3_12,input_14_4_12,input_14_5_12,input_14_6_12,input_14_7_12,input_14_8_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_5_13" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[5][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_13,input_14_1_13,input_14_2_13,input_14_3_13,input_14_4_13,input_14_5_13,input_14_6_13,input_14_7_13,input_14_8_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_5_14" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[5][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_14,input_14_1_14,input_14_2_14,input_14_3_14,input_14_4_14,input_14_5_14,input_14_6_14,input_14_7_14,input_14_8_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_5_15" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[5][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_15,input_14_1_15,input_14_2_15,input_14_3_15,input_14_4_15,input_14_5_15,input_14_6_15,input_14_7_15,input_14_8_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_5_16" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[5][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_16,input_14_1_16,input_14_2_16,input_14_3_16,input_14_4_16,input_14_5_16,input_14_6_16,input_14_7_16,input_14_8_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_5_17" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[5][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_17,input_14_1_17,input_14_2_17,input_14_3_17,input_14_4_17,input_14_5_17,input_14_6_17,input_14_7_17,input_14_8_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_5_18" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[5][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_18,input_14_1_18,input_14_2_18,input_14_3_18,input_14_4_18,input_14_5_18,input_14_6_18,input_14_7_18,input_14_8_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_5_19" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[5][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_19,input_14_1_19,input_14_2_19,input_14_3_19,input_14_4_19,input_14_5_19,input_14_6_19,input_14_7_19,input_14_8_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_5_20" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[5][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_20,input_14_1_20,input_14_2_20,input_14_3_20,input_14_4_20,input_14_5_20,input_14_6_20,input_14_7_20,input_14_8_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_5_21" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[5][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_21,input_14_1_21,input_14_2_21,input_14_3_21,input_14_4_21,input_14_5_21,input_14_6_21,input_14_7_21,input_14_8_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_5_22" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[5][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_22,input_14_1_22,input_14_2_22,input_14_3_22,input_14_4_22,input_14_5_22,input_14_6_22,input_14_7_22,input_14_8_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_5_23" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[5][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_23,input_14_1_23,input_14_2_23,input_14_3_23,input_14_4_23,input_14_5_23,input_14_6_23,input_14_7_23,input_14_8_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Nallur </th>
<td align="center" class="form-matrix-values">
<input id="input_14_6_0" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[6][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_0,input_14_1_0,input_14_2_0,input_14_3_0,input_14_4_0,input_14_5_0,input_14_6_0,input_14_7_0,input_14_8_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_6_1" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[6][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_1,input_14_1_1,input_14_2_1,input_14_3_1,input_14_4_1,input_14_5_1,input_14_6_1,input_14_7_1,input_14_8_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_6_2" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[6][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_2,input_14_1_2,input_14_2_2,input_14_3_2,input_14_4_2,input_14_5_2,input_14_6_2,input_14_7_2,input_14_8_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_6_3" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[6][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_3,input_14_1_3,input_14_2_3,input_14_3_3,input_14_4_3,input_14_5_3,input_14_6_3,input_14_7_3,input_14_8_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_6_4" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[6][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_4,input_14_1_4,input_14_2_4,input_14_3_4,input_14_4_4,input_14_5_4,input_14_6_4,input_14_7_4,input_14_8_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_6_5" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[6][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_5,input_14_1_5,input_14_2_5,input_14_3_5,input_14_4_5,input_14_5_5,input_14_6_5,input_14_7_5,input_14_8_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_6_6" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[6][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_6,input_14_1_6,input_14_2_6,input_14_3_6,input_14_4_6,input_14_5_6,input_14_6_6,input_14_7_6,input_14_8_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_6_7" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[6][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_7,input_14_1_7,input_14_2_7,input_14_3_7,input_14_4_7,input_14_5_7,input_14_6_7,input_14_7_7,input_14_8_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_6_8" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[6][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_8,input_14_1_8,input_14_2_8,input_14_3_8,input_14_4_8,input_14_5_8,input_14_6_8,input_14_7_8,input_14_8_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_6_9" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[6][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_9,input_14_1_9,input_14_2_9,input_14_3_9,input_14_4_9,input_14_5_9,input_14_6_9,input_14_7_9,input_14_8_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_6_10" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[6][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_10,input_14_1_10,input_14_2_10,input_14_3_10,input_14_4_10,input_14_5_10,input_14_6_10,input_14_7_10,input_14_8_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_6_11" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[6][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_11,input_14_1_11,input_14_2_11,input_14_3_11,input_14_4_11,input_14_5_11,input_14_6_11,input_14_7_11,input_14_8_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_6_12" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[6][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_12,input_14_1_12,input_14_2_12,input_14_3_12,input_14_4_12,input_14_5_12,input_14_6_12,input_14_7_12,input_14_8_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_6_13" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[6][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_13,input_14_1_13,input_14_2_13,input_14_3_13,input_14_4_13,input_14_5_13,input_14_6_13,input_14_7_13,input_14_8_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_6_14" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[6][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_14,input_14_1_14,input_14_2_14,input_14_3_14,input_14_4_14,input_14_5_14,input_14_6_14,input_14_7_14,input_14_8_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_6_15" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[6][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_15,input_14_1_15,input_14_2_15,input_14_3_15,input_14_4_15,input_14_5_15,input_14_6_15,input_14_7_15,input_14_8_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_6_16" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[6][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_16,input_14_1_16,input_14_2_16,input_14_3_16,input_14_4_16,input_14_5_16,input_14_6_16,input_14_7_16,input_14_8_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_6_17" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[6][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_17,input_14_1_17,input_14_2_17,input_14_3_17,input_14_4_17,input_14_5_17,input_14_6_17,input_14_7_17,input_14_8_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_6_18" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[6][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_18,input_14_1_18,input_14_2_18,input_14_3_18,input_14_4_18,input_14_5_18,input_14_6_18,input_14_7_18,input_14_8_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_6_19" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[6][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_19,input_14_1_19,input_14_2_19,input_14_3_19,input_14_4_19,input_14_5_19,input_14_6_19,input_14_7_19,input_14_8_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_6_20" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[6][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_20,input_14_1_20,input_14_2_20,input_14_3_20,input_14_4_20,input_14_5_20,input_14_6_20,input_14_7_20,input_14_8_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_6_21" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[6][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_21,input_14_1_21,input_14_2_21,input_14_3_21,input_14_4_21,input_14_5_21,input_14_6_21,input_14_7_21,input_14_8_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_6_22" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[6][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_22,input_14_1_22,input_14_2_22,input_14_3_22,input_14_4_22,input_14_5_22,input_14_6_22,input_14_7_22,input_14_8_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_6_23" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[6][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_23,input_14_1_23,input_14_2_23,input_14_3_23,input_14_4_23,input_14_5_23,input_14_6_23,input_14_7_23,input_14_8_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Vannar Pannai </th>
<td align="center" class="form-matrix-values">
<input id="input_14_7_0" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[7][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_0,input_14_1_0,input_14_2_0,input_14_3_0,input_14_4_0,input_14_5_0,input_14_6_0,input_14_7_0,input_14_8_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_7_1" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[7][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_1,input_14_1_1,input_14_2_1,input_14_3_1,input_14_4_1,input_14_5_1,input_14_6_1,input_14_7_1,input_14_8_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_7_2" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[7][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_2,input_14_1_2,input_14_2_2,input_14_3_2,input_14_4_2,input_14_5_2,input_14_6_2,input_14_7_2,input_14_8_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_7_3" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[7][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_3,input_14_1_3,input_14_2_3,input_14_3_3,input_14_4_3,input_14_5_3,input_14_6_3,input_14_7_3,input_14_8_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_7_4" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[7][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_4,input_14_1_4,input_14_2_4,input_14_3_4,input_14_4_4,input_14_5_4,input_14_6_4,input_14_7_4,input_14_8_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_7_5" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[7][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_5,input_14_1_5,input_14_2_5,input_14_3_5,input_14_4_5,input_14_5_5,input_14_6_5,input_14_7_5,input_14_8_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_7_6" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[7][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_6,input_14_1_6,input_14_2_6,input_14_3_6,input_14_4_6,input_14_5_6,input_14_6_6,input_14_7_6,input_14_8_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_7_7" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[7][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_7,input_14_1_7,input_14_2_7,input_14_3_7,input_14_4_7,input_14_5_7,input_14_6_7,input_14_7_7,input_14_8_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_7_8" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[7][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_8,input_14_1_8,input_14_2_8,input_14_3_8,input_14_4_8,input_14_5_8,input_14_6_8,input_14_7_8,input_14_8_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_7_9" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[7][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_9,input_14_1_9,input_14_2_9,input_14_3_9,input_14_4_9,input_14_5_9,input_14_6_9,input_14_7_9,input_14_8_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_7_10" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[7][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_10,input_14_1_10,input_14_2_10,input_14_3_10,input_14_4_10,input_14_5_10,input_14_6_10,input_14_7_10,input_14_8_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_7_11" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[7][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_11,input_14_1_11,input_14_2_11,input_14_3_11,input_14_4_11,input_14_5_11,input_14_6_11,input_14_7_11,input_14_8_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_7_12" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[7][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_12,input_14_1_12,input_14_2_12,input_14_3_12,input_14_4_12,input_14_5_12,input_14_6_12,input_14_7_12,input_14_8_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_7_13" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[7][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_13,input_14_1_13,input_14_2_13,input_14_3_13,input_14_4_13,input_14_5_13,input_14_6_13,input_14_7_13,input_14_8_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_7_14" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[7][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_14,input_14_1_14,input_14_2_14,input_14_3_14,input_14_4_14,input_14_5_14,input_14_6_14,input_14_7_14,input_14_8_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_7_15" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[7][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_15,input_14_1_15,input_14_2_15,input_14_3_15,input_14_4_15,input_14_5_15,input_14_6_15,input_14_7_15,input_14_8_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_7_16" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[7][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_16,input_14_1_16,input_14_2_16,input_14_3_16,input_14_4_16,input_14_5_16,input_14_6_16,input_14_7_16,input_14_8_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_7_17" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[7][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_17,input_14_1_17,input_14_2_17,input_14_3_17,input_14_4_17,input_14_5_17,input_14_6_17,input_14_7_17,input_14_8_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_7_18" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[7][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_18,input_14_1_18,input_14_2_18,input_14_3_18,input_14_4_18,input_14_5_18,input_14_6_18,input_14_7_18,input_14_8_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_7_19" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[7][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_19,input_14_1_19,input_14_2_19,input_14_3_19,input_14_4_19,input_14_5_19,input_14_6_19,input_14_7_19,input_14_8_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_7_20" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[7][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_20,input_14_1_20,input_14_2_20,input_14_3_20,input_14_4_20,input_14_5_20,input_14_6_20,input_14_7_20,input_14_8_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_7_21" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[7][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_21,input_14_1_21,input_14_2_21,input_14_3_21,input_14_4_21,input_14_5_21,input_14_6_21,input_14_7_21,input_14_8_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_7_22" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[7][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_22,input_14_1_22,input_14_2_22,input_14_3_22,input_14_4_22,input_14_5_22,input_14_6_22,input_14_7_22,input_14_8_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_7_23" type="number" class="form-number-input form-dropdown" name="q14_phiArea14[7][]" style="width:60px" size="5" onchange="jaffnaTotal(input_14_0_23,input_14_1_23,input_14_2_23,input_14_3_23,input_14_4_23,input_14_5_23,input_14_6_23,input_14_7_23,input_14_8_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Total </th>
<td align="center" class="form-matrix-values">
<input id="input_14_8_0" type="text" class="form-number-input form-dropdown" name="q14_phiArea14[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_8_1" type="text" class="form-number-input form-dropdown" name="q14_phiArea14[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_8_2" type="text" class="form-number-input form-dropdown" name="q14_phiArea14[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_8_3" type="text" class="form-number-input form-dropdown" name="q14_phiArea14[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_8_4" type="text" class="form-number-input form-dropdown" name="q14_phiArea14[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_8_5" type="text" class="form-number-input form-dropdown" name="q14_phiArea14[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_8_6" type="text" class="form-number-input form-dropdown" name="q14_phiArea14[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_8_7" type="text" class="form-number-input form-dropdown" name="q14_phiArea14[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_8_8" type="text" class="form-number-input form-dropdown" name="q14_phiArea14[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_8_9" type="text" class="form-number-input form-dropdown" name="q14_phiArea14[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_8_10" type="text" class="form-number-input form-dropdown" name="q14_phiArea14[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_8_11" type="text" class="form-number-input form-dropdown" name="q14_phiArea14[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_8_12" type="text" class="form-number-input form-dropdown" name="q14_phiArea14[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_8_13" type="text" class="form-number-input form-dropdown" name="q14_phiArea14[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_8_14" type="text" class="form-number-input form-dropdown" name="q14_phiArea14[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_8_15" type="text" class="form-number-input form-dropdown" name="q14_phiArea14[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_8_16" type="text" class="form-number-input form-dropdown" name="q14_phiArea14[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_8_17" type="text" class="form-number-input form-dropdown" name="q14_phiArea14[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_8_18" type="text" class="form-number-input form-dropdown" name="q14_phiArea14[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_8_19" type="text" class="form-number-input form-dropdown" name="q14_phiArea14[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_8_20" type="text" class="form-number-input form-dropdown" name="q14_phiArea14[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_8_21" type="text" class="form-number-input form-dropdown" name="q14_phiArea14[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_8_22" type="text" class="form-number-input form-dropdown" name="q14_phiArea14[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_14_8_23" type="text" class="form-number-input form-dropdown" name="q14_phiArea14[8][]" style="width:60px" size="5" disabled/>
</td>
</tr>
</table>
</div>
</li>
<li class="form-line form-field-hidden" style="display:none;" data-type="control_matrix" id="id_15">
<label class="form-label form-label-left form-label-auto" id="label_15" for="input_15">PHI Area Vs Diseases </label>
<div id="cid_15" class="form-input jf-required">
<table summary="" cellpadding="4" cellspacing="0" class="form-matrix-table">
<tr>
<th style="border:none">&nbsp; </th>
<th class="form-matrix-column-headers form-matrix-column_0">Internationally Notifiable Diseases(Cholera, Plague, Yellow Fever)</th>
<th class="form-matrix-column-headers form-matrix-column_1">Polio Myelitis / Acute Flaccid Paralysis </th>
<th class="form-matrix-column-headers form-matrix-column_2">Chicken Pox </th>
<th class="form-matrix-column-headers form-matrix-column_3">Dengue Fever/ Dengue Hemorrhagic Fever </th>
<th class="form-matrix-column-headers form-matrix-column_4">Diphtheria </th>
<th class="form-matrix-column-headers form-matrix-column_5">Dysentery </th>
<th class="form-matrix-column-headers form-matrix-column_6">Encephalitis (including Japanese Encephalitis) </th>
<th class="form-matrix-column-headers form-matrix-column_7">Enteric Fever </th>
<th class="form-matrix-column-headers form-matrix-column_8">Food Poisoning </th>
<th class="form-matrix-column-headers form-matrix-column_9">Human Rabies </th>
<th class="form-matrix-column-headers form-matrix-column_10">Leptospirosis </th>
<th class="form-matrix-column-headers form-matrix-column_11">Malaria </th>
<th class="form-matrix-column-headers form-matrix-column_12">Measles </th>
<th class="form-matrix-column-headers form-matrix-column_13">Meningitis </th>
<th class="form-matrix-column-headers form-matrix-column_14">Mumps </th>
<th class="form-matrix-column-headers form-matrix-column_15">Rubella </th>
<th class="form-matrix-column-headers form-matrix-column_16">Congenital Rubella Syndrome </th>
<th class="form-matrix-column-headers form-matrix-column_17">Simple continued fever </th>
<th class="form-matrix-column-headers form-matrix-column_18">Tetanus </th>
<th class="form-matrix-column-headers form-matrix-column_19">Neonatal tetanus </th>
<th class="form-matrix-column-headers form-matrix-column_20">Typhus Fever </th>
<th class="form-matrix-column-headers form-matrix-column_21">Viral Hepatitis </th>
<th class="form-matrix-column-headers form-matrix-column_22">Whooping cough </th>
<th class="form-matrix-column-headers form-matrix-column_23">Tuberculosis </th>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Allaipiddy </th>
<td align="center" class="form-matrix-values">
<input id="input_15_0_0" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[0][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_0,input_15_1_0,input_15_2_0,input_15_3_0,input_15_4_0,input_15_5_0,input_15_6_0,input_15_7_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_0_1" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[0][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_1,input_15_1_1,input_15_2_1,input_15_3_1,input_15_4_1,input_15_5_1,input_15_6_1,input_15_7_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_0_2" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[0][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_2,input_15_1_2,input_15_2_2,input_15_3_2,input_15_4_2,input_15_5_2,input_15_6_2,input_15_7_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_0_3" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[0][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_3,input_15_1_3,input_15_2_3,input_15_3_3,input_15_4_3,input_15_5_3,input_15_6_3,input_15_7_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_0_4" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[0][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_4,input_15_1_4,input_15_2_4,input_15_3_4,input_15_4_4,input_15_5_4,input_15_6_4,input_15_7_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_0_5" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[0][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_5,input_15_1_5,input_15_2_5,input_15_3_5,input_15_4_5,input_15_5_5,input_15_6_5,input_15_7_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_0_6" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[0][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_6,input_15_1_6,input_15_2_6,input_15_3_6,input_15_4_6,input_15_5_6,input_15_6_6,input_15_7_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_0_7" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[0][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_7,input_15_1_7,input_15_2_7,input_15_3_7,input_15_4_7,input_15_5_7,input_15_6_7,input_15_7_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_0_8" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[0][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_8,input_15_1_8,input_15_2_8,input_15_3_8,input_15_4_8,input_15_5_8,input_15_6_8,input_15_7_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_0_9" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[0][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_9,input_15_1_9,input_15_2_9,input_15_3_9,input_15_4_9,input_15_5_9,input_15_6_9,input_15_7_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_0_10" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[0][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_10,input_15_1_10,input_15_2_10,input_15_3_10,input_15_4_10,input_15_5_10,input_15_6_10,input_15_7_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_0_11" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[0][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_11,input_15_1_11,input_15_2_11,input_15_3_11,input_15_4_11,input_15_5_11,input_15_6_11,input_15_7_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_0_12" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[0][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_12,input_15_1_12,input_15_2_12,input_15_3_12,input_15_4_12,input_15_5_12,input_15_6_12,input_15_7_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_0_13" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[0][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_13,input_15_1_13,input_15_2_13,input_15_3_13,input_15_4_13,input_15_5_13,input_15_6_13,input_15_7_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_0_14" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[0][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_14,input_15_1_14,input_15_2_14,input_15_3_14,input_15_4_14,input_15_5_14,input_15_6_14,input_15_7_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_0_15" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[0][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_15,input_15_1_15,input_15_2_15,input_15_3_15,input_15_4_15,input_15_5_15,input_15_6_15,input_15_7_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_0_16" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[0][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_16,input_15_1_16,input_15_2_16,input_15_3_16,input_15_4_16,input_15_5_16,input_15_6_16,input_15_7_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_0_17" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[0][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_17,input_15_1_17,input_15_2_17,input_15_3_17,input_15_4_17,input_15_5_17,input_15_6_17,input_15_7_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_0_18" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[0][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_18,input_15_1_18,input_15_2_18,input_15_3_18,input_15_4_18,input_15_5_18,input_15_6_18,input_15_7_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_0_19" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[0][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_19,input_15_1_19,input_15_2_19,input_15_3_19,input_15_4_19,input_15_5_19,input_15_6_19,input_15_7_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_0_20" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[0][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_20,input_15_1_20,input_15_2_20,input_15_3_20,input_15_4_20,input_15_5_20,input_15_6_20,input_15_7_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_0_21" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[0][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_21,input_15_1_21,input_15_2_21,input_15_3_21,input_15_4_21,input_15_5_21,input_15_6_21,input_15_7_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_0_22" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[0][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_22,input_15_1_22,input_15_2_22,input_15_3_22,input_15_4_22,input_15_5_22,input_15_6_22,input_15_7_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_0_23" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[0][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_23,input_15_1_23,input_15_2_23,input_15_3_23,input_15_4_23,input_15_5_23,input_15_6_23,input_15_7_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Delft </th>
<td align="center" class="form-matrix-values">
<input id="input_15_1_0" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[1][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_0,input_15_1_0,input_15_2_0,input_15_3_0,input_15_4_0,input_15_5_0,input_15_6_0,input_15_7_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_1_1" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[1][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_1,input_15_1_1,input_15_2_1,input_15_3_1,input_15_4_1,input_15_5_1,input_15_6_1,input_15_7_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_1_2" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[1][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_2,input_15_1_2,input_15_2_2,input_15_3_2,input_15_4_2,input_15_5_2,input_15_6_2,input_15_7_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_1_3" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[1][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_3,input_15_1_3,input_15_2_3,input_15_3_3,input_15_4_3,input_15_5_3,input_15_6_3,input_15_7_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_1_4" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[1][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_4,input_15_1_4,input_15_2_4,input_15_3_4,input_15_4_4,input_15_5_4,input_15_6_4,input_15_7_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_1_5" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[1][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_5,input_15_1_5,input_15_2_5,input_15_3_5,input_15_4_5,input_15_5_5,input_15_6_5,input_15_7_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_1_6" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[1][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_6,input_15_1_6,input_15_2_6,input_15_3_6,input_15_4_6,input_15_5_6,input_15_6_6,input_15_7_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_1_7" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[1][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_7,input_15_1_7,input_15_2_7,input_15_3_7,input_15_4_7,input_15_5_7,input_15_6_7,input_15_7_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_1_8" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[1][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_8,input_15_1_8,input_15_2_8,input_15_3_8,input_15_4_8,input_15_5_8,input_15_6_8,input_15_7_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_1_9" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[1][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_9,input_15_1_9,input_15_2_9,input_15_3_9,input_15_4_9,input_15_5_9,input_15_6_9,input_15_7_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_1_10" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[1][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_10,input_15_1_10,input_15_2_10,input_15_3_10,input_15_4_10,input_15_5_10,input_15_6_10,input_15_7_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_1_11" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[1][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_11,input_15_1_11,input_15_2_11,input_15_3_11,input_15_4_11,input_15_5_11,input_15_6_11,input_15_7_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_1_12" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[1][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_12,input_15_1_12,input_15_2_12,input_15_3_12,input_15_4_12,input_15_5_12,input_15_6_12,input_15_7_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_1_13" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[1][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_13,input_15_1_13,input_15_2_13,input_15_3_13,input_15_4_13,input_15_5_13,input_15_6_13,input_15_7_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_1_14" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[1][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_14,input_15_1_14,input_15_2_14,input_15_3_14,input_15_4_14,input_15_5_14,input_15_6_14,input_15_7_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_1_15" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[1][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_15,input_15_1_15,input_15_2_15,input_15_3_15,input_15_4_15,input_15_5_15,input_15_6_15,input_15_7_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_1_16" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[1][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_16,input_15_1_16,input_15_2_16,input_15_3_16,input_15_4_16,input_15_5_16,input_15_6_16,input_15_7_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_1_17" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[1][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_17,input_15_1_17,input_15_2_17,input_15_3_17,input_15_4_17,input_15_5_17,input_15_6_17,input_15_7_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_1_18" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[1][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_18,input_15_1_18,input_15_2_18,input_15_3_18,input_15_4_18,input_15_5_18,input_15_6_18,input_15_7_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_1_19" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[1][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_19,input_15_1_19,input_15_2_19,input_15_3_19,input_15_4_19,input_15_5_19,input_15_6_19,input_15_7_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_1_20" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[1][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_20,input_15_1_20,input_15_2_20,input_15_3_20,input_15_4_20,input_15_5_20,input_15_6_20,input_15_7_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_1_21" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[1][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_21,input_15_1_21,input_15_2_21,input_15_3_21,input_15_4_21,input_15_5_21,input_15_6_21,input_15_7_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_1_22" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[1][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_22,input_15_1_22,input_15_2_22,input_15_3_22,input_15_4_22,input_15_5_22,input_15_6_22,input_15_7_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_1_23" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[1][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_23,input_15_1_23,input_15_2_23,input_15_3_23,input_15_4_23,input_15_5_23,input_15_6_23,input_15_7_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Karainagar </th>
<td align="center" class="form-matrix-values">
<input id="input_15_2_0" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[2][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_0,input_15_1_0,input_15_2_0,input_15_3_0,input_15_4_0,input_15_5_0,input_15_6_0,input_15_7_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_2_1" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[2][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_1,input_15_1_1,input_15_2_1,input_15_3_1,input_15_4_1,input_15_5_1,input_15_6_1,input_15_7_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_2_2" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[2][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_2,input_15_1_2,input_15_2_2,input_15_3_2,input_15_4_2,input_15_5_2,input_15_6_2,input_15_7_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_2_3" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[2][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_3,input_15_1_3,input_15_2_3,input_15_3_3,input_15_4_3,input_15_5_3,input_15_6_3,input_15_7_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_2_4" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[2][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_4,input_15_1_4,input_15_2_4,input_15_3_4,input_15_4_4,input_15_5_4,input_15_6_4,input_15_7_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_2_5" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[2][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_5,input_15_1_5,input_15_2_5,input_15_3_5,input_15_4_5,input_15_5_5,input_15_6_5,input_15_7_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_2_6" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[2][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_6,input_15_1_6,input_15_2_6,input_15_3_6,input_15_4_6,input_15_5_6,input_15_6_6,input_15_7_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_2_7" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[2][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_7,input_15_1_7,input_15_2_7,input_15_3_7,input_15_4_7,input_15_5_7,input_15_6_7,input_15_7_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_2_8" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[2][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_8,input_15_1_8,input_15_2_8,input_15_3_8,input_15_4_8,input_15_5_8,input_15_6_8,input_15_7_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_2_9" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[2][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_9,input_15_1_9,input_15_2_9,input_15_3_9,input_15_4_9,input_15_5_9,input_15_6_9,input_15_7_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_2_10" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[2][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_10,input_15_1_10,input_15_2_10,input_15_3_10,input_15_4_10,input_15_5_10,input_15_6_10,input_15_7_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_2_11" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[2][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_11,input_15_1_11,input_15_2_11,input_15_3_11,input_15_4_11,input_15_5_11,input_15_6_11,input_15_7_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_2_12" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[2][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_12,input_15_1_12,input_15_2_12,input_15_3_12,input_15_4_12,input_15_5_12,input_15_6_12,input_15_7_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_2_13" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[2][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_13,input_15_1_13,input_15_2_13,input_15_3_13,input_15_4_13,input_15_5_13,input_15_6_13,input_15_7_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_2_14" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[2][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_14,input_15_1_14,input_15_2_14,input_15_3_14,input_15_4_14,input_15_5_14,input_15_6_14,input_15_7_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_2_15" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[2][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_15,input_15_1_15,input_15_2_15,input_15_3_15,input_15_4_15,input_15_5_15,input_15_6_15,input_15_7_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_2_16" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[2][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_16,input_15_1_16,input_15_2_16,input_15_3_16,input_15_4_16,input_15_5_16,input_15_6_16,input_15_7_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_2_17" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[2][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_17,input_15_1_17,input_15_2_17,input_15_3_17,input_15_4_17,input_15_5_17,input_15_6_17,input_15_7_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_2_18" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[2][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_18,input_15_1_18,input_15_2_18,input_15_3_18,input_15_4_18,input_15_5_18,input_15_6_18,input_15_7_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_2_19" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[2][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_19,input_15_1_19,input_15_2_19,input_15_3_19,input_15_4_19,input_15_5_19,input_15_6_19,input_15_7_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_2_20" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[2][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_20,input_15_1_20,input_15_2_20,input_15_3_20,input_15_4_20,input_15_5_20,input_15_6_20,input_15_7_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_2_21" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[2][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_21,input_15_1_21,input_15_2_21,input_15_3_21,input_15_4_21,input_15_5_21,input_15_6_21,input_15_7_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_2_22" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[2][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_22,input_15_1_22,input_15_2_22,input_15_3_22,input_15_4_22,input_15_5_22,input_15_6_22,input_15_7_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_2_23" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[2][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_23,input_15_1_23,input_15_2_23,input_15_3_23,input_15_4_23,input_15_5_23,input_15_6_23,input_15_7_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Kayts </th>
<td align="center" class="form-matrix-values">
<input id="input_15_3_0" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[3][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_0,input_15_1_0,input_15_2_0,input_15_3_0,input_15_4_0,input_15_5_0,input_15_6_0,input_15_7_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_3_1" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[3][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_1,input_15_1_1,input_15_2_1,input_15_3_1,input_15_4_1,input_15_5_1,input_15_6_1,input_15_7_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_3_2" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[3][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_2,input_15_1_2,input_15_2_2,input_15_3_2,input_15_4_2,input_15_5_2,input_15_6_2,input_15_7_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_3_3" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[3][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_3,input_15_1_3,input_15_2_3,input_15_3_3,input_15_4_3,input_15_5_3,input_15_6_3,input_15_7_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_3_4" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[3][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_4,input_15_1_4,input_15_2_4,input_15_3_4,input_15_4_4,input_15_5_4,input_15_6_4,input_15_7_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_3_5" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[3][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_5,input_15_1_5,input_15_2_5,input_15_3_5,input_15_4_5,input_15_5_5,input_15_6_5,input_15_7_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_3_6" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[3][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_6,input_15_1_6,input_15_2_6,input_15_3_6,input_15_4_6,input_15_5_6,input_15_6_6,input_15_7_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_3_7" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[3][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_7,input_15_1_7,input_15_2_7,input_15_3_7,input_15_4_7,input_15_5_7,input_15_6_7,input_15_7_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_3_8" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[3][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_8,input_15_1_8,input_15_2_8,input_15_3_8,input_15_4_8,input_15_5_8,input_15_6_8,input_15_7_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_3_9" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[3][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_9,input_15_1_9,input_15_2_9,input_15_3_9,input_15_4_9,input_15_5_9,input_15_6_9,input_15_7_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_3_10" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[3][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_10,input_15_1_10,input_15_2_10,input_15_3_10,input_15_4_10,input_15_5_10,input_15_6_10,input_15_7_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_3_11" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[3][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_11,input_15_1_11,input_15_2_11,input_15_3_11,input_15_4_11,input_15_5_11,input_15_6_11,input_15_7_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_3_12" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[3][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_12,input_15_1_12,input_15_2_12,input_15_3_12,input_15_4_12,input_15_5_12,input_15_6_12,input_15_7_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_3_13" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[3][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_13,input_15_1_13,input_15_2_13,input_15_3_13,input_15_4_13,input_15_5_13,input_15_6_13,input_15_7_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_3_14" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[3][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_14,input_15_1_14,input_15_2_14,input_15_3_14,input_15_4_14,input_15_5_14,input_15_6_14,input_15_7_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_3_15" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[3][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_15,input_15_1_15,input_15_2_15,input_15_3_15,input_15_4_15,input_15_5_15,input_15_6_15,input_15_7_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_3_16" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[3][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_16,input_15_1_16,input_15_2_16,input_15_3_16,input_15_4_16,input_15_5_16,input_15_6_16,input_15_7_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_3_17" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[3][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_17,input_15_1_17,input_15_2_17,input_15_3_17,input_15_4_17,input_15_5_17,input_15_6_17,input_15_7_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_3_18" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[3][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_18,input_15_1_18,input_15_2_18,input_15_3_18,input_15_4_18,input_15_5_18,input_15_6_18,input_15_7_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_3_19" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[3][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_19,input_15_1_19,input_15_2_19,input_15_3_19,input_15_4_19,input_15_5_19,input_15_6_19,input_15_7_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_3_20" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[3][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_20,input_15_1_20,input_15_2_20,input_15_3_20,input_15_4_20,input_15_5_20,input_15_6_20,input_15_7_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_3_21" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[3][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_21,input_15_1_21,input_15_2_21,input_15_3_21,input_15_4_21,input_15_5_21,input_15_6_21,input_15_7_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_3_22" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[3][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_22,input_15_1_22,input_15_2_22,input_15_3_22,input_15_4_22,input_15_5_22,input_15_6_22,input_15_7_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_3_23" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[3][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_23,input_15_1_23,input_15_2_23,input_15_3_23,input_15_4_23,input_15_5_23,input_15_6_23,input_15_7_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Nainathivu </th>
<td align="center" class="form-matrix-values">
<input id="input_15_4_0" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[4][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_0,input_15_1_0,input_15_2_0,input_15_3_0,input_15_4_0,input_15_5_0,input_15_6_0,input_15_7_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_4_1" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[4][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_1,input_15_1_1,input_15_2_1,input_15_3_1,input_15_4_1,input_15_5_1,input_15_6_1,input_15_7_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_4_2" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[4][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_2,input_15_1_2,input_15_2_2,input_15_3_2,input_15_4_2,input_15_5_2,input_15_6_2,input_15_7_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_4_3" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[4][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_3,input_15_1_3,input_15_2_3,input_15_3_3,input_15_4_3,input_15_5_3,input_15_6_3,input_15_7_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_4_4" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[4][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_4,input_15_1_4,input_15_2_4,input_15_3_4,input_15_4_4,input_15_5_4,input_15_6_4,input_15_7_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_4_5" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[4][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_5,input_15_1_5,input_15_2_5,input_15_3_5,input_15_4_5,input_15_5_5,input_15_6_5,input_15_7_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_4_6" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[4][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_6,input_15_1_6,input_15_2_6,input_15_3_6,input_15_4_6,input_15_5_6,input_15_6_6,input_15_7_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_4_7" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[4][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_7,input_15_1_7,input_15_2_7,input_15_3_7,input_15_4_7,input_15_5_7,input_15_6_7,input_15_7_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_4_8" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[4][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_8,input_15_1_8,input_15_2_8,input_15_3_8,input_15_4_8,input_15_5_8,input_15_6_8,input_15_7_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_4_9" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[4][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_9,input_15_1_9,input_15_2_9,input_15_3_9,input_15_4_9,input_15_5_9,input_15_6_9,input_15_7_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_4_10" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[4][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_10,input_15_1_10,input_15_2_10,input_15_3_10,input_15_4_10,input_15_5_10,input_15_6_10,input_15_7_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_4_11" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[4][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_11,input_15_1_11,input_15_2_11,input_15_3_11,input_15_4_11,input_15_5_11,input_15_6_11,input_15_7_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_4_12" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[4][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_12,input_15_1_12,input_15_2_12,input_15_3_12,input_15_4_12,input_15_5_12,input_15_6_12,input_15_7_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_4_13" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[4][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_13,input_15_1_13,input_15_2_13,input_15_3_13,input_15_4_13,input_15_5_13,input_15_6_13,input_15_7_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_4_14" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[4][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_14,input_15_1_14,input_15_2_14,input_15_3_14,input_15_4_14,input_15_5_14,input_15_6_14,input_15_7_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_4_15" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[4][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_15,input_15_1_15,input_15_2_15,input_15_3_15,input_15_4_15,input_15_5_15,input_15_6_15,input_15_7_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_4_16" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[4][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_16,input_15_1_16,input_15_2_16,input_15_3_16,input_15_4_16,input_15_5_16,input_15_6_16,input_15_7_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_4_17" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[4][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_17,input_15_1_17,input_15_2_17,input_15_3_17,input_15_4_17,input_15_5_17,input_15_6_17,input_15_7_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_4_18" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[4][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_18,input_15_1_18,input_15_2_18,input_15_3_18,input_15_4_18,input_15_5_18,input_15_6_18,input_15_7_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_4_19" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[4][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_19,input_15_1_19,input_15_2_19,input_15_3_19,input_15_4_19,input_15_5_19,input_15_6_19,input_15_7_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_4_20" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[4][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_20,input_15_1_20,input_15_2_20,input_15_3_20,input_15_4_20,input_15_5_20,input_15_6_20,input_15_7_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_4_21" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[4][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_21,input_15_1_21,input_15_2_21,input_15_3_21,input_15_4_21,input_15_5_21,input_15_6_21,input_15_7_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_4_22" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[4][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_22,input_15_1_22,input_15_2_22,input_15_3_22,input_15_4_22,input_15_5_22,input_15_6_22,input_15_7_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_4_23" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[4][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_23,input_15_1_23,input_15_2_23,input_15_3_23,input_15_4_23,input_15_5_23,input_15_6_23,input_15_7_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Punguduthivu </th>
<td align="center" class="form-matrix-values">
<input id="input_15_5_0" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[5][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_0,input_15_1_0,input_15_2_0,input_15_3_0,input_15_4_0,input_15_5_0,input_15_6_0,input_15_7_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_5_1" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[5][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_1,input_15_1_1,input_15_2_1,input_15_3_1,input_15_4_1,input_15_5_1,input_15_6_1,input_15_7_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_5_2" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[5][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_2,input_15_1_2,input_15_2_2,input_15_3_2,input_15_4_2,input_15_5_2,input_15_6_2,input_15_7_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_5_3" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[5][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_3,input_15_1_3,input_15_2_3,input_15_3_3,input_15_4_3,input_15_5_3,input_15_6_3,input_15_7_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_5_4" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[5][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_4,input_15_1_4,input_15_2_4,input_15_3_4,input_15_4_4,input_15_5_4,input_15_6_4,input_15_7_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_5_5" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[5][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_5,input_15_1_5,input_15_2_5,input_15_3_5,input_15_4_5,input_15_5_5,input_15_6_5,input_15_7_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_5_6" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[5][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_6,input_15_1_6,input_15_2_6,input_15_3_6,input_15_4_6,input_15_5_6,input_15_6_6,input_15_7_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_5_7" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[5][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_7,input_15_1_7,input_15_2_7,input_15_3_7,input_15_4_7,input_15_5_7,input_15_6_7,input_15_7_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_5_8" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[5][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_8,input_15_1_8,input_15_2_8,input_15_3_8,input_15_4_8,input_15_5_8,input_15_6_8,input_15_7_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_5_9" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[5][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_9,input_15_1_9,input_15_2_9,input_15_3_9,input_15_4_9,input_15_5_9,input_15_6_9,input_15_7_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_5_10" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[5][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_10,input_15_1_10,input_15_2_10,input_15_3_10,input_15_4_10,input_15_5_10,input_15_6_10,input_15_7_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_5_11" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[5][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_11,input_15_1_11,input_15_2_11,input_15_3_11,input_15_4_11,input_15_5_11,input_15_6_11,input_15_7_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_5_12" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[5][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_12,input_15_1_12,input_15_2_12,input_15_3_12,input_15_4_12,input_15_5_12,input_15_6_12,input_15_7_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_5_13" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[5][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_13,input_15_1_13,input_15_2_13,input_15_3_13,input_15_4_13,input_15_5_13,input_15_6_13,input_15_7_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_5_14" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[5][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_14,input_15_1_14,input_15_2_14,input_15_3_14,input_15_4_14,input_15_5_14,input_15_6_14,input_15_7_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_5_15" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[5][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_15,input_15_1_15,input_15_2_15,input_15_3_15,input_15_4_15,input_15_5_15,input_15_6_15,input_15_7_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_5_16" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[5][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_16,input_15_1_16,input_15_2_16,input_15_3_16,input_15_4_16,input_15_5_16,input_15_6_16,input_15_7_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_5_17" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[5][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_17,input_15_1_17,input_15_2_17,input_15_3_17,input_15_4_17,input_15_5_17,input_15_6_17,input_15_7_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_5_18" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[5][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_18,input_15_1_18,input_15_2_18,input_15_3_18,input_15_4_18,input_15_5_18,input_15_6_18,input_15_7_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_5_19" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[5][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_19,input_15_1_19,input_15_2_19,input_15_3_19,input_15_4_19,input_15_5_19,input_15_6_19,input_15_7_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_5_20" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[5][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_20,input_15_1_20,input_15_2_20,input_15_3_20,input_15_4_20,input_15_5_20,input_15_6_20,input_15_7_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_5_21" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[5][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_21,input_15_1_21,input_15_2_21,input_15_3_21,input_15_4_21,input_15_5_21,input_15_6_21,input_15_7_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_5_22" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[5][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_22,input_15_1_22,input_15_2_22,input_15_3_22,input_15_4_22,input_15_5_22,input_15_6_22,input_15_7_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_5_23" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[5][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_23,input_15_1_23,input_15_2_23,input_15_3_23,input_15_4_23,input_15_5_23,input_15_6_23,input_15_7_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Velanai </th>
<td align="center" class="form-matrix-values">
<input id="input_15_6_0" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[6][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_0,input_15_1_0,input_15_2_0,input_15_3_0,input_15_4_0,input_15_5_0,input_15_6_0,input_15_7_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_6_1" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[6][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_1,input_15_1_1,input_15_2_1,input_15_3_1,input_15_4_1,input_15_5_1,input_15_6_1,input_15_7_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_6_2" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[6][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_2,input_15_1_2,input_15_2_2,input_15_3_2,input_15_4_2,input_15_5_2,input_15_6_2,input_15_7_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_6_3" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[6][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_3,input_15_1_3,input_15_2_3,input_15_3_3,input_15_4_3,input_15_5_3,input_15_6_3,input_15_7_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_6_4" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[6][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_4,input_15_1_4,input_15_2_4,input_15_3_4,input_15_4_4,input_15_5_4,input_15_6_4,input_15_7_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_6_5" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[6][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_5,input_15_1_5,input_15_2_5,input_15_3_5,input_15_4_5,input_15_5_5,input_15_6_5,input_15_7_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_6_6" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[6][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_6,input_15_1_6,input_15_2_6,input_15_3_6,input_15_4_6,input_15_5_6,input_15_6_6,input_15_7_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_6_7" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[6][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_7,input_15_1_7,input_15_2_7,input_15_3_7,input_15_4_7,input_15_5_7,input_15_6_7,input_15_7_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_6_8" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[6][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_8,input_15_1_8,input_15_2_8,input_15_3_8,input_15_4_8,input_15_5_8,input_15_6_8,input_15_7_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_6_9" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[6][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_9,input_15_1_9,input_15_2_9,input_15_3_9,input_15_4_9,input_15_5_9,input_15_6_9,input_15_7_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_6_10" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[6][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_10,input_15_1_10,input_15_2_10,input_15_3_10,input_15_4_10,input_15_5_10,input_15_6_10,input_15_7_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_6_11" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[6][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_11,input_15_1_11,input_15_2_11,input_15_3_11,input_15_4_11,input_15_5_11,input_15_6_11,input_15_7_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_6_12" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[6][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_12,input_15_1_12,input_15_2_12,input_15_3_12,input_15_4_12,input_15_5_12,input_15_6_12,input_15_7_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_6_13" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[6][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_13,input_15_1_13,input_15_2_13,input_15_3_13,input_15_4_13,input_15_5_13,input_15_6_13,input_15_7_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_6_14" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[6][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_14,input_15_1_14,input_15_2_14,input_15_3_14,input_15_4_14,input_15_5_14,input_15_6_14,input_15_7_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_6_15" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[6][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_15,input_15_1_15,input_15_2_15,input_15_3_15,input_15_4_15,input_15_5_15,input_15_6_15,input_15_7_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_6_16" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[6][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_16,input_15_1_16,input_15_2_16,input_15_3_16,input_15_4_16,input_15_5_16,input_15_6_16,input_15_7_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_6_17" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[6][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_17,input_15_1_17,input_15_2_17,input_15_3_17,input_15_4_17,input_15_5_17,input_15_6_17,input_15_7_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_6_18" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[6][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_18,input_15_1_18,input_15_2_18,input_15_3_18,input_15_4_18,input_15_5_18,input_15_6_18,input_15_7_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_6_19" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[6][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_19,input_15_1_19,input_15_2_19,input_15_3_19,input_15_4_19,input_15_5_19,input_15_6_19,input_15_7_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_6_20" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[6][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_20,input_15_1_20,input_15_2_20,input_15_3_20,input_15_4_20,input_15_5_20,input_15_6_20,input_15_7_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_6_21" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[6][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_21,input_15_1_21,input_15_2_21,input_15_3_21,input_15_4_21,input_15_5_21,input_15_6_21,input_15_7_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_6_22" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[6][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_22,input_15_1_22,input_15_2_22,input_15_3_22,input_15_4_22,input_15_5_22,input_15_6_22,input_15_7_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_6_23" type="number" class="form-number-input form-dropdown" name="q15_phiArea15[6][]" style="width:60px" size="5" onchange="kaytsTotal(input_15_0_23,input_15_1_23,input_15_2_23,input_15_3_23,input_15_4_23,input_15_5_23,input_15_6_23,input_15_7_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Total </th>
<td align="center" class="form-matrix-values">
<input id="input_15_7_0" type="text" class="form-number-input form-dropdown" name="q15_phiArea15[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_7_1" type="text" class="form-number-input form-dropdown" name="q15_phiArea15[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_7_2" type="text" class="form-number-input form-dropdown" name="q15_phiArea15[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_7_3" type="text" class="form-number-input form-dropdown" name="q15_phiArea15[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_7_4" type="text" class="form-number-input form-dropdown" name="q15_phiArea15[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_7_5" type="text" class="form-number-input form-dropdown" name="q15_phiArea15[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_7_6" type="text" class="form-number-input form-dropdown" name="q15_phiArea15[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_7_7" type="text" class="form-number-input form-dropdown" name="q15_phiArea15[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_7_8" type="text" class="form-number-input form-dropdown" name="q15_phiArea15[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_7_9" type="text" class="form-number-input form-dropdown" name="q15_phiArea15[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_7_10" type="text" class="form-number-input form-dropdown" name="q15_phiArea15[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_7_11" type="text" class="form-number-input form-dropdown" name="q15_phiArea15[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_7_12" type="text" class="form-number-input form-dropdown" name="q15_phiArea15[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_7_13" type="text" class="form-number-input form-dropdown" name="q15_phiArea15[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_7_14" type="text" class="form-number-input form-dropdown" name="q15_phiArea15[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_7_15" type="text" class="form-number-input form-dropdown" name="q15_phiArea15[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_7_16" type="text" class="form-number-input form-dropdown" name="q15_phiArea15[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_7_17" type="text" class="form-number-input form-dropdown" name="q15_phiArea15[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_7_18" type="text" class="form-number-input form-dropdown" name="q15_phiArea15[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_7_19" type="text" class="form-number-input form-dropdown" name="q15_phiArea15[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_7_20" type="text" class="form-number-input form-dropdown" name="q15_phiArea15[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_7_21" type="text" class="form-number-input form-dropdown" name="q15_phiArea15[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_7_22" type="text" class="form-number-input form-dropdown" name="q15_phiArea15[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_15_7_23" type="text" class="form-number-input form-dropdown" name="q15_phiArea15[7][]" style="width:60px" size="5" disabled/>
</td>
</tr>
</table>
</div>
</li>
<li class="form-line form-field-hidden" style="display:none;" data-type="control_matrix" id="id_16">
<label class="form-label form-label-left form-label-auto" id="label_16" for="input_16">PHI Area Vs Diseases </label>
<div id="cid_16" class="form-input jf-required">
<table summary="" cellpadding="4" cellspacing="0" class="form-matrix-table">
<tr>
<th style="border:none">&nbsp; </th>
<th class="form-matrix-column-headers form-matrix-column_0">Internationally Notifiable Diseases(Cholera, Plague, Yellow Fever)</th>
<th class="form-matrix-column-headers form-matrix-column_1">Polio Myelitis / Acute Flaccid Paralysis </th>
<th class="form-matrix-column-headers form-matrix-column_2">Chicken Pox </th>
<th class="form-matrix-column-headers form-matrix-column_3">Dengue Fever/ Dengue Hemorrhagic Fever </th>
<th class="form-matrix-column-headers form-matrix-column_4">Diphtheria </th>
<th class="form-matrix-column-headers form-matrix-column_5">Dysentery </th>
<th class="form-matrix-column-headers form-matrix-column_6">Encephalitis (including Japanese Encephalitis) </th>
<th class="form-matrix-column-headers form-matrix-column_7">Enteric Fever </th>
<th class="form-matrix-column-headers form-matrix-column_8">Food Poisoning </th>
<th class="form-matrix-column-headers form-matrix-column_9">Human Rabies </th>
<th class="form-matrix-column-headers form-matrix-column_10">Leptospirosis </th>
<th class="form-matrix-column-headers form-matrix-column_11">Malaria </th>
<th class="form-matrix-column-headers form-matrix-column_12">Measles </th>
<th class="form-matrix-column-headers form-matrix-column_13">Meningitis </th>
<th class="form-matrix-column-headers form-matrix-column_14">Mumps </th>
<th class="form-matrix-column-headers form-matrix-column_15">Rubella </th>
<th class="form-matrix-column-headers form-matrix-column_16">Congenital Rubella Syndrome </th>
<th class="form-matrix-column-headers form-matrix-column_17">Simple continued fever </th>
<th class="form-matrix-column-headers form-matrix-column_18">Tetanus </th>
<th class="form-matrix-column-headers form-matrix-column_19">Neonatal tetanus </th>
<th class="form-matrix-column-headers form-matrix-column_20">Typhus Fever </th>
<th class="form-matrix-column-headers form-matrix-column_21">Viral Hepatitis </th>
<th class="form-matrix-column-headers form-matrix-column_22">Whooping cough </th>
<th class="form-matrix-column-headers form-matrix-column_23">Tuberculosis </th>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Atchuvely-I </th>
<td align="center" class="form-matrix-values">
<input id="input_16_0_0" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[0][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_0,input_16_1_0,input_16_2_0,input_16_3_0,input_16_4_0,input_16_5_0,input_16_6_0,input_16_7_0,input_16_8_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_0_1" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[0][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_1,input_16_1_1,input_16_2_1,input_16_3_1,input_16_4_1,input_16_5_1,input_16_6_1,input_16_7_1,input_16_8_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_0_2" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[0][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_2,input_16_1_2,input_16_2_2,input_16_3_2,input_16_4_2,input_16_5_2,input_16_6_2,input_16_7_2,input_16_8_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_0_3" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[0][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_3,input_16_1_3,input_16_2_3,input_16_3_3,input_16_4_3,input_16_5_3,input_16_6_3,input_16_7_3,input_16_8_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_0_4" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[0][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_4,input_16_1_4,input_16_2_4,input_16_3_4,input_16_4_4,input_16_5_4,input_16_6_4,input_16_7_4,input_16_8_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_0_5" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[0][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_5,input_16_1_5,input_16_2_5,input_16_3_5,input_16_4_5,input_16_5_5,input_16_6_5,input_16_7_5,input_16_8_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_0_6" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[0][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_6,input_16_1_6,input_16_2_6,input_16_3_6,input_16_4_6,input_16_5_6,input_16_6_6,input_16_7_6,input_16_8_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_0_7" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[0][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_7,input_16_1_7,input_16_2_7,input_16_3_7,input_16_4_7,input_16_5_7,input_16_6_7,input_16_7_7,input_16_8_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_0_8" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[0][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_8,input_16_1_8,input_16_2_8,input_16_3_8,input_16_4_8,input_16_5_8,input_16_6_8,input_16_7_8,input_16_8_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_0_9" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[0][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_9,input_16_1_9,input_16_2_9,input_16_3_9,input_16_4_9,input_16_5_9,input_16_6_9,input_16_7_9,input_16_8_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_0_10" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[0][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_10,input_16_1_10,input_16_2_10,input_16_3_10,input_16_4_10,input_16_5_10,input_16_6_10,input_16_7_10,input_16_8_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_0_11" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[0][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_11,input_16_1_11,input_16_2_11,input_16_3_11,input_16_4_11,input_16_5_11,input_16_6_11,input_16_7_11,input_16_8_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_0_12" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[0][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_12,input_16_1_12,input_16_2_12,input_16_3_12,input_16_4_12,input_16_5_12,input_16_6_12,input_16_7_12,input_16_8_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_0_13" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[0][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_13,input_16_1_13,input_16_2_13,input_16_3_13,input_16_4_13,input_16_5_13,input_16_6_13,input_16_7_13,input_16_8_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_0_14" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[0][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_14,input_16_1_14,input_16_2_14,input_16_3_14,input_16_4_14,input_16_5_14,input_16_6_14,input_16_7_14,input_16_8_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_0_15" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[0][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_15,input_16_1_15,input_16_2_15,input_16_3_15,input_16_4_15,input_16_5_15,input_16_6_15,input_16_7_15,input_16_8_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_0_16" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[0][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_16,input_16_1_16,input_16_2_16,input_16_3_16,input_16_4_16,input_16_5_16,input_16_6_16,input_16_7_16,input_16_8_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_0_17" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[0][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_17,input_16_1_17,input_16_2_17,input_16_3_17,input_16_4_17,input_16_5_17,input_16_6_17,input_16_7_17,input_16_8_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_0_18" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[0][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_18,input_16_1_18,input_16_2_18,input_16_3_18,input_16_4_18,input_16_5_18,input_16_6_18,input_16_7_18,input_16_8_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_0_19" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[0][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_19,input_16_1_19,input_16_2_19,input_16_3_19,input_16_4_19,input_16_5_19,input_16_6_19,input_16_7_19,input_16_8_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_0_20" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[0][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_20,input_16_1_20,input_16_2_20,input_16_3_20,input_16_4_20,input_16_5_20,input_16_6_20,input_16_7_20,input_16_8_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_0_21" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[0][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_21,input_16_1_21,input_16_2_21,input_16_3_21,input_16_4_21,input_16_5_21,input_16_6_21,input_16_7_21,input_16_8_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_0_22" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[0][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_22,input_16_1_22,input_16_2_22,input_16_3_22,input_16_4_22,input_16_5_22,input_16_6_22,input_16_7_22,input_16_8_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_0_23" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[0][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_23,input_16_1_23,input_16_2_23,input_16_3_23,input_16_4_23,input_16_5_23,input_16_6_23,input_16_7_23,input_16_8_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Atchuvely-II </th>
<td align="center" class="form-matrix-values">
<input id="input_16_1_0" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[1][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_0,input_16_1_0,input_16_2_0,input_16_3_0,input_16_4_0,input_16_5_0,input_16_6_0,input_16_7_0,input_16_8_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_1_1" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[1][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_1,input_16_1_1,input_16_2_1,input_16_3_1,input_16_4_1,input_16_5_1,input_16_6_1,input_16_7_1,input_16_8_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_1_2" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[1][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_2,input_16_1_2,input_16_2_2,input_16_3_2,input_16_4_2,input_16_5_2,input_16_6_2,input_16_7_2,input_16_8_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_1_3" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[1][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_3,input_16_1_3,input_16_2_3,input_16_3_3,input_16_4_3,input_16_5_3,input_16_6_3,input_16_7_3,input_16_8_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_1_4" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[1][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_4,input_16_1_4,input_16_2_4,input_16_3_4,input_16_4_4,input_16_5_4,input_16_6_4,input_16_7_4,input_16_8_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_1_5" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[1][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_5,input_16_1_5,input_16_2_5,input_16_3_5,input_16_4_5,input_16_5_5,input_16_6_5,input_16_7_5,input_16_8_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_1_6" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[1][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_6,input_16_1_6,input_16_2_6,input_16_3_6,input_16_4_6,input_16_5_6,input_16_6_6,input_16_7_6,input_16_8_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_1_7" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[1][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_7,input_16_1_7,input_16_2_7,input_16_3_7,input_16_4_7,input_16_5_7,input_16_6_7,input_16_7_7,input_16_8_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_1_8" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[1][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_8,input_16_1_8,input_16_2_8,input_16_3_8,input_16_4_8,input_16_5_8,input_16_6_8,input_16_7_8,input_16_8_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_1_9" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[1][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_9,input_16_1_9,input_16_2_9,input_16_3_9,input_16_4_9,input_16_5_9,input_16_6_9,input_16_7_9,input_16_8_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_1_10" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[1][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_10,input_16_1_10,input_16_2_10,input_16_3_10,input_16_4_10,input_16_5_10,input_16_6_10,input_16_7_10,input_16_8_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_1_11" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[1][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_11,input_16_1_11,input_16_2_11,input_16_3_11,input_16_4_11,input_16_5_11,input_16_6_11,input_16_7_11,input_16_8_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_1_12" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[1][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_12,input_16_1_12,input_16_2_12,input_16_3_12,input_16_4_12,input_16_5_12,input_16_6_12,input_16_7_12,input_16_8_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_1_13" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[1][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_13,input_16_1_13,input_16_2_13,input_16_3_13,input_16_4_13,input_16_5_13,input_16_6_13,input_16_7_13,input_16_8_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_1_14" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[1][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_14,input_16_1_14,input_16_2_14,input_16_3_14,input_16_4_14,input_16_5_14,input_16_6_14,input_16_7_14,input_16_8_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_1_15" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[1][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_15,input_16_1_15,input_16_2_15,input_16_3_15,input_16_4_15,input_16_5_15,input_16_6_15,input_16_7_15,input_16_8_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_1_16" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[1][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_16,input_16_1_16,input_16_2_16,input_16_3_16,input_16_4_16,input_16_5_16,input_16_6_16,input_16_7_16,input_16_8_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_1_17" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[1][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_17,input_16_1_17,input_16_2_17,input_16_3_17,input_16_4_17,input_16_5_17,input_16_6_17,input_16_7_17,input_16_8_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_1_18" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[1][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_18,input_16_1_18,input_16_2_18,input_16_3_18,input_16_4_18,input_16_5_18,input_16_6_18,input_16_7_18,input_16_8_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_1_19" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[1][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_19,input_16_1_19,input_16_2_19,input_16_3_19,input_16_4_19,input_16_5_19,input_16_6_19,input_16_7_19,input_16_8_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_1_20" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[1][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_20,input_16_1_20,input_16_2_20,input_16_3_20,input_16_4_20,input_16_5_20,input_16_6_20,input_16_7_20,input_16_8_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_1_21" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[1][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_21,input_16_1_21,input_16_2_21,input_16_3_21,input_16_4_21,input_16_5_21,input_16_6_21,input_16_7_21,input_16_8_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_1_22" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[1][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_22,input_16_1_22,input_16_2_22,input_16_3_22,input_16_4_22,input_16_5_22,input_16_6_22,input_16_7_22,input_16_8_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_1_23" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[1][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_23,input_16_1_23,input_16_2_23,input_16_3_23,input_16_4_23,input_16_5_23,input_16_6_23,input_16_7_23,input_16_8_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Irupalai </th>
<td align="center" class="form-matrix-values">
<input id="input_16_2_0" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[2][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_0,input_16_1_0,input_16_2_0,input_16_3_0,input_16_4_0,input_16_5_0,input_16_6_0,input_16_7_0,input_16_8_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_2_1" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[2][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_1,input_16_1_1,input_16_2_1,input_16_3_1,input_16_4_1,input_16_5_1,input_16_6_1,input_16_7_1,input_16_8_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_2_2" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[2][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_2,input_16_1_2,input_16_2_2,input_16_3_2,input_16_4_2,input_16_5_2,input_16_6_2,input_16_7_2,input_16_8_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_2_3" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[2][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_3,input_16_1_3,input_16_2_3,input_16_3_3,input_16_4_3,input_16_5_3,input_16_6_3,input_16_7_3,input_16_8_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_2_4" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[2][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_4,input_16_1_4,input_16_2_4,input_16_3_4,input_16_4_4,input_16_5_4,input_16_6_4,input_16_7_4,input_16_8_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_2_5" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[2][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_5,input_16_1_5,input_16_2_5,input_16_3_5,input_16_4_5,input_16_5_5,input_16_6_5,input_16_7_5,input_16_8_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_2_6" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[2][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_6,input_16_1_6,input_16_2_6,input_16_3_6,input_16_4_6,input_16_5_6,input_16_6_6,input_16_7_6,input_16_8_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_2_7" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[2][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_7,input_16_1_7,input_16_2_7,input_16_3_7,input_16_4_7,input_16_5_7,input_16_6_7,input_16_7_7,input_16_8_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_2_8" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[2][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_8,input_16_1_8,input_16_2_8,input_16_3_8,input_16_4_8,input_16_5_8,input_16_6_8,input_16_7_8,input_16_8_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_2_9" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[2][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_9,input_16_1_9,input_16_2_9,input_16_3_9,input_16_4_9,input_16_5_9,input_16_6_9,input_16_7_9,input_16_8_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_2_10" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[2][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_10,input_16_1_10,input_16_2_10,input_16_3_10,input_16_4_10,input_16_5_10,input_16_6_10,input_16_7_10,input_16_8_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_2_11" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[2][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_11,input_16_1_11,input_16_2_11,input_16_3_11,input_16_4_11,input_16_5_11,input_16_6_11,input_16_7_11,input_16_8_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_2_12" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[2][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_12,input_16_1_12,input_16_2_12,input_16_3_12,input_16_4_12,input_16_5_12,input_16_6_12,input_16_7_12,input_16_8_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_2_13" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[2][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_13,input_16_1_13,input_16_2_13,input_16_3_13,input_16_4_13,input_16_5_13,input_16_6_13,input_16_7_13,input_16_8_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_2_14" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[2][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_14,input_16_1_14,input_16_2_14,input_16_3_14,input_16_4_14,input_16_5_14,input_16_6_14,input_16_7_14,input_16_8_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_2_15" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[2][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_15,input_16_1_15,input_16_2_15,input_16_3_15,input_16_4_15,input_16_5_15,input_16_6_15,input_16_7_15,input_16_8_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_2_16" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[2][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_16,input_16_1_16,input_16_2_16,input_16_3_16,input_16_4_16,input_16_5_16,input_16_6_16,input_16_7_16,input_16_8_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_2_17" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[2][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_17,input_16_1_17,input_16_2_17,input_16_3_17,input_16_4_17,input_16_5_17,input_16_6_17,input_16_7_17,input_16_8_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_2_18" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[2][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_18,input_16_1_18,input_16_2_18,input_16_3_18,input_16_4_18,input_16_5_18,input_16_6_18,input_16_7_18,input_16_8_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_2_19" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[2][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_19,input_16_1_19,input_16_2_19,input_16_3_19,input_16_4_19,input_16_5_19,input_16_6_19,input_16_7_19,input_16_8_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_2_20" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[2][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_20,input_16_1_20,input_16_2_20,input_16_3_20,input_16_4_20,input_16_5_20,input_16_6_20,input_16_7_20,input_16_8_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_2_21" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[2][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_21,input_16_1_21,input_16_2_21,input_16_3_21,input_16_4_21,input_16_5_21,input_16_6_21,input_16_7_21,input_16_8_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_2_22" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[2][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_22,input_16_1_22,input_16_2_22,input_16_3_22,input_16_4_22,input_16_5_22,input_16_6_22,input_16_7_22,input_16_8_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_2_23" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[2][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_23,input_16_1_23,input_16_2_23,input_16_3_23,input_16_4_23,input_16_5_23,input_16_6_23,input_16_7_23,input_16_8_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Kopay </th>
<td align="center" class="form-matrix-values">
<input id="input_16_3_0" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[3][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_0,input_16_1_0,input_16_2_0,input_16_3_0,input_16_4_0,input_16_5_0,input_16_6_0,input_16_7_0,input_16_8_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_3_1" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[3][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_1,input_16_1_1,input_16_2_1,input_16_3_1,input_16_4_1,input_16_5_1,input_16_6_1,input_16_7_1,input_16_8_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_3_2" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[3][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_2,input_16_1_2,input_16_2_2,input_16_3_2,input_16_4_2,input_16_5_2,input_16_6_2,input_16_7_2,input_16_8_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_3_3" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[3][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_3,input_16_1_3,input_16_2_3,input_16_3_3,input_16_4_3,input_16_5_3,input_16_6_3,input_16_7_3,input_16_8_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_3_4" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[3][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_4,input_16_1_4,input_16_2_4,input_16_3_4,input_16_4_4,input_16_5_4,input_16_6_4,input_16_7_4,input_16_8_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_3_5" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[3][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_5,input_16_1_5,input_16_2_5,input_16_3_5,input_16_4_5,input_16_5_5,input_16_6_5,input_16_7_5,input_16_8_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_3_6" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[3][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_6,input_16_1_6,input_16_2_6,input_16_3_6,input_16_4_6,input_16_5_6,input_16_6_6,input_16_7_6,input_16_8_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_3_7" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[3][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_7,input_16_1_7,input_16_2_7,input_16_3_7,input_16_4_7,input_16_5_7,input_16_6_7,input_16_7_7,input_16_8_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_3_8" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[3][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_8,input_16_1_8,input_16_2_8,input_16_3_8,input_16_4_8,input_16_5_8,input_16_6_8,input_16_7_8,input_16_8_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_3_9" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[3][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_9,input_16_1_9,input_16_2_9,input_16_3_9,input_16_4_9,input_16_5_9,input_16_6_9,input_16_7_9,input_16_8_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_3_10" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[3][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_10,input_16_1_10,input_16_2_10,input_16_3_10,input_16_4_10,input_16_5_10,input_16_6_10,input_16_7_10,input_16_8_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_3_11" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[3][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_11,input_16_1_11,input_16_2_11,input_16_3_11,input_16_4_11,input_16_5_11,input_16_6_11,input_16_7_11,input_16_8_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_3_12" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[3][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_12,input_16_1_12,input_16_2_12,input_16_3_12,input_16_4_12,input_16_5_12,input_16_6_12,input_16_7_12,input_16_8_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_3_13" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[3][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_13,input_16_1_13,input_16_2_13,input_16_3_13,input_16_4_13,input_16_5_13,input_16_6_13,input_16_7_13,input_16_8_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_3_14" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[3][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_14,input_16_1_14,input_16_2_14,input_16_3_14,input_16_4_14,input_16_5_14,input_16_6_14,input_16_7_14,input_16_8_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_3_15" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[3][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_15,input_16_1_15,input_16_2_15,input_16_3_15,input_16_4_15,input_16_5_15,input_16_6_15,input_16_7_15,input_16_8_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_3_16" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[3][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_16,input_16_1_16,input_16_2_16,input_16_3_16,input_16_4_16,input_16_5_16,input_16_6_16,input_16_7_16,input_16_8_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_3_17" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[3][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_17,input_16_1_17,input_16_2_17,input_16_3_17,input_16_4_17,input_16_5_17,input_16_6_17,input_16_7_17,input_16_8_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_3_18" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[3][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_18,input_16_1_18,input_16_2_18,input_16_3_18,input_16_4_18,input_16_5_18,input_16_6_18,input_16_7_18,input_16_8_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_3_19" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[3][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_19,input_16_1_19,input_16_2_19,input_16_3_19,input_16_4_19,input_16_5_19,input_16_6_19,input_16_7_19,input_16_8_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_3_20" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[3][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_20,input_16_1_20,input_16_2_20,input_16_3_20,input_16_4_20,input_16_5_20,input_16_6_20,input_16_7_20,input_16_8_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_3_21" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[3][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_21,input_16_1_21,input_16_2_21,input_16_3_21,input_16_4_21,input_16_5_21,input_16_6_21,input_16_7_21,input_16_8_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_3_22" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[3][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_22,input_16_1_22,input_16_2_22,input_16_3_22,input_16_4_22,input_16_5_22,input_16_6_22,input_16_7_22,input_16_8_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_3_23" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[3][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_23,input_16_1_23,input_16_2_23,input_16_3_23,input_16_4_23,input_16_5_23,input_16_6_23,input_16_7_23,input_16_8_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Neervely </th>
<td align="center" class="form-matrix-values">
<input id="input_16_4_0" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[4][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_0,input_16_1_0,input_16_2_0,input_16_3_0,input_16_4_0,input_16_5_0,input_16_6_0,input_16_7_0,input_16_8_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_4_1" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[4][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_1,input_16_1_1,input_16_2_1,input_16_3_1,input_16_4_1,input_16_5_1,input_16_6_1,input_16_7_1,input_16_8_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_4_2" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[4][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_2,input_16_1_2,input_16_2_2,input_16_3_2,input_16_4_2,input_16_5_2,input_16_6_2,input_16_7_2,input_16_8_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_4_3" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[4][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_3,input_16_1_3,input_16_2_3,input_16_3_3,input_16_4_3,input_16_5_3,input_16_6_3,input_16_7_3,input_16_8_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_4_4" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[4][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_4,input_16_1_4,input_16_2_4,input_16_3_4,input_16_4_4,input_16_5_4,input_16_6_4,input_16_7_4,input_16_8_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_4_5" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[4][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_5,input_16_1_5,input_16_2_5,input_16_3_5,input_16_4_5,input_16_5_5,input_16_6_5,input_16_7_5,input_16_8_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_4_6" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[4][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_6,input_16_1_6,input_16_2_6,input_16_3_6,input_16_4_6,input_16_5_6,input_16_6_6,input_16_7_6,input_16_8_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_4_7" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[4][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_7,input_16_1_7,input_16_2_7,input_16_3_7,input_16_4_7,input_16_5_7,input_16_6_7,input_16_7_7,input_16_8_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_4_8" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[4][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_8,input_16_1_8,input_16_2_8,input_16_3_8,input_16_4_8,input_16_5_8,input_16_6_8,input_16_7_8,input_16_8_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_4_9" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[4][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_9,input_16_1_9,input_16_2_9,input_16_3_9,input_16_4_9,input_16_5_9,input_16_6_9,input_16_7_9,input_16_8_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_4_10" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[4][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_10,input_16_1_10,input_16_2_10,input_16_3_10,input_16_4_10,input_16_5_10,input_16_6_10,input_16_7_10,input_16_8_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_4_11" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[4][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_11,input_16_1_11,input_16_2_11,input_16_3_11,input_16_4_11,input_16_5_11,input_16_6_11,input_16_7_11,input_16_8_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_4_12" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[4][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_12,input_16_1_12,input_16_2_12,input_16_3_12,input_16_4_12,input_16_5_12,input_16_6_12,input_16_7_12,input_16_8_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_4_13" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[4][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_13,input_16_1_13,input_16_2_13,input_16_3_13,input_16_4_13,input_16_5_13,input_16_6_13,input_16_7_13,input_16_8_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_4_14" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[4][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_14,input_16_1_14,input_16_2_14,input_16_3_14,input_16_4_14,input_16_5_14,input_16_6_14,input_16_7_14,input_16_8_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_4_15" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[4][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_15,input_16_1_15,input_16_2_15,input_16_3_15,input_16_4_15,input_16_5_15,input_16_6_15,input_16_7_15,input_16_8_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_4_16" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[4][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_16,input_16_1_16,input_16_2_16,input_16_3_16,input_16_4_16,input_16_5_16,input_16_6_16,input_16_7_16,input_16_8_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_4_17" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[4][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_17,input_16_1_17,input_16_2_17,input_16_3_17,input_16_4_17,input_16_5_17,input_16_6_17,input_16_7_17,input_16_8_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_4_18" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[4][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_18,input_16_1_18,input_16_2_18,input_16_3_18,input_16_4_18,input_16_5_18,input_16_6_18,input_16_7_18,input_16_8_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_4_19" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[4][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_19,input_16_1_19,input_16_2_19,input_16_3_19,input_16_4_19,input_16_5_19,input_16_6_19,input_16_7_19,input_16_8_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_4_20" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[4][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_20,input_16_1_20,input_16_2_20,input_16_3_20,input_16_4_20,input_16_5_20,input_16_6_20,input_16_7_20,input_16_8_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_4_21" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[4][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_21,input_16_1_21,input_16_2_21,input_16_3_21,input_16_4_21,input_16_5_21,input_16_6_21,input_16_7_21,input_16_8_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_4_22" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[4][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_22,input_16_1_22,input_16_2_22,input_16_3_22,input_16_4_22,input_16_5_22,input_16_6_22,input_16_7_22,input_16_8_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_4_23" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[4][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_23,input_16_1_23,input_16_2_23,input_16_3_23,input_16_4_23,input_16_5_23,input_16_6_23,input_16_7_23,input_16_8_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Puttur </th>
<td align="center" class="form-matrix-values">
<input id="input_16_5_0" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[5][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_0,input_16_1_0,input_16_2_0,input_16_3_0,input_16_4_0,input_16_5_0,input_16_6_0,input_16_7_0,input_16_8_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_5_1" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[5][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_1,input_16_1_1,input_16_2_1,input_16_3_1,input_16_4_1,input_16_5_1,input_16_6_1,input_16_7_1,input_16_8_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_5_2" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[5][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_2,input_16_1_2,input_16_2_2,input_16_3_2,input_16_4_2,input_16_5_2,input_16_6_2,input_16_7_2,input_16_8_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_5_3" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[5][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_3,input_16_1_3,input_16_2_3,input_16_3_3,input_16_4_3,input_16_5_3,input_16_6_3,input_16_7_3,input_16_8_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_5_4" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[5][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_4,input_16_1_4,input_16_2_4,input_16_3_4,input_16_4_4,input_16_5_4,input_16_6_4,input_16_7_4,input_16_8_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_5_5" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[5][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_5,input_16_1_5,input_16_2_5,input_16_3_5,input_16_4_5,input_16_5_5,input_16_6_5,input_16_7_5,input_16_8_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_5_6" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[5][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_6,input_16_1_6,input_16_2_6,input_16_3_6,input_16_4_6,input_16_5_6,input_16_6_6,input_16_7_6,input_16_8_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_5_7" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[5][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_7,input_16_1_7,input_16_2_7,input_16_3_7,input_16_4_7,input_16_5_7,input_16_6_7,input_16_7_7,input_16_8_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_5_8" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[5][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_8,input_16_1_8,input_16_2_8,input_16_3_8,input_16_4_8,input_16_5_8,input_16_6_8,input_16_7_8,input_16_8_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_5_9" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[5][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_9,input_16_1_9,input_16_2_9,input_16_3_9,input_16_4_9,input_16_5_9,input_16_6_9,input_16_7_9,input_16_8_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_5_10" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[5][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_10,input_16_1_10,input_16_2_10,input_16_3_10,input_16_4_10,input_16_5_10,input_16_6_10,input_16_7_10,input_16_8_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_5_11" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[5][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_11,input_16_1_11,input_16_2_11,input_16_3_11,input_16_4_11,input_16_5_11,input_16_6_11,input_16_7_11,input_16_8_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_5_12" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[5][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_12,input_16_1_12,input_16_2_12,input_16_3_12,input_16_4_12,input_16_5_12,input_16_6_12,input_16_7_12,input_16_8_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_5_13" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[5][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_13,input_16_1_13,input_16_2_13,input_16_3_13,input_16_4_13,input_16_5_13,input_16_6_13,input_16_7_13,input_16_8_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_5_14" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[5][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_14,input_16_1_14,input_16_2_14,input_16_3_14,input_16_4_14,input_16_5_14,input_16_6_14,input_16_7_14,input_16_8_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_5_15" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[5][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_15,input_16_1_15,input_16_2_15,input_16_3_15,input_16_4_15,input_16_5_15,input_16_6_15,input_16_7_15,input_16_8_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_5_16" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[5][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_16,input_16_1_16,input_16_2_16,input_16_3_16,input_16_4_16,input_16_5_16,input_16_6_16,input_16_7_16,input_16_8_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_5_17" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[5][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_17,input_16_1_17,input_16_2_17,input_16_3_17,input_16_4_17,input_16_5_17,input_16_6_17,input_16_7_17,input_16_8_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_5_18" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[5][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_18,input_16_1_18,input_16_2_18,input_16_3_18,input_16_4_18,input_16_5_18,input_16_6_18,input_16_7_18,input_16_8_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_5_19" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[5][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_19,input_16_1_19,input_16_2_19,input_16_3_19,input_16_4_19,input_16_5_19,input_16_6_19,input_16_7_19,input_16_8_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_5_20" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[5][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_20,input_16_1_20,input_16_2_20,input_16_3_20,input_16_4_20,input_16_5_20,input_16_6_20,input_16_7_20,input_16_8_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_5_21" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[5][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_21,input_16_1_21,input_16_2_21,input_16_3_21,input_16_4_21,input_16_5_21,input_16_6_21,input_16_7_21,input_16_8_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_5_22" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[5][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_22,input_16_1_22,input_16_2_22,input_16_3_22,input_16_4_22,input_16_5_22,input_16_6_22,input_16_7_22,input_16_8_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_5_23" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[5][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_23,input_16_1_23,input_16_2_23,input_16_3_23,input_16_4_23,input_16_5_23,input_16_6_23,input_16_7_23,input_16_8_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Siruppiddy </th>
<td align="center" class="form-matrix-values">
<input id="input_16_6_0" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[6][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_0,input_16_1_0,input_16_2_0,input_16_3_0,input_16_4_0,input_16_5_0,input_16_6_0,input_16_7_0,input_16_8_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_6_1" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[6][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_1,input_16_1_1,input_16_2_1,input_16_3_1,input_16_4_1,input_16_5_1,input_16_6_1,input_16_7_1,input_16_8_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_6_2" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[6][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_2,input_16_1_2,input_16_2_2,input_16_3_2,input_16_4_2,input_16_5_2,input_16_6_2,input_16_7_2,input_16_8_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_6_3" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[6][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_3,input_16_1_3,input_16_2_3,input_16_3_3,input_16_4_3,input_16_5_3,input_16_6_3,input_16_7_3,input_16_8_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_6_4" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[6][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_4,input_16_1_4,input_16_2_4,input_16_3_4,input_16_4_4,input_16_5_4,input_16_6_4,input_16_7_4,input_16_8_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_6_5" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[6][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_5,input_16_1_5,input_16_2_5,input_16_3_5,input_16_4_5,input_16_5_5,input_16_6_5,input_16_7_5,input_16_8_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_6_6" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[6][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_6,input_16_1_6,input_16_2_6,input_16_3_6,input_16_4_6,input_16_5_6,input_16_6_6,input_16_7_6,input_16_8_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_6_7" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[6][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_7,input_16_1_7,input_16_2_7,input_16_3_7,input_16_4_7,input_16_5_7,input_16_6_7,input_16_7_7,input_16_8_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_6_8" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[6][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_8,input_16_1_8,input_16_2_8,input_16_3_8,input_16_4_8,input_16_5_8,input_16_6_8,input_16_7_8,input_16_8_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_6_9" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[6][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_9,input_16_1_9,input_16_2_9,input_16_3_9,input_16_4_9,input_16_5_9,input_16_6_9,input_16_7_9,input_16_8_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_6_10" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[6][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_10,input_16_1_10,input_16_2_10,input_16_3_10,input_16_4_10,input_16_5_10,input_16_6_10,input_16_7_10,input_16_8_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_6_11" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[6][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_11,input_16_1_11,input_16_2_11,input_16_3_11,input_16_4_11,input_16_5_11,input_16_6_11,input_16_7_11,input_16_8_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_6_12" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[6][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_12,input_16_1_12,input_16_2_12,input_16_3_12,input_16_4_12,input_16_5_12,input_16_6_12,input_16_7_12,input_16_8_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_6_13" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[6][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_13,input_16_1_13,input_16_2_13,input_16_3_13,input_16_4_13,input_16_5_13,input_16_6_13,input_16_7_13,input_16_8_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_6_14" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[6][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_14,input_16_1_14,input_16_2_14,input_16_3_14,input_16_4_14,input_16_5_14,input_16_6_14,input_16_7_14,input_16_8_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_6_15" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[6][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_15,input_16_1_15,input_16_2_15,input_16_3_15,input_16_4_15,input_16_5_15,input_16_6_15,input_16_7_15,input_16_8_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_6_16" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[6][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_16,input_16_1_16,input_16_2_16,input_16_3_16,input_16_4_16,input_16_5_16,input_16_6_16,input_16_7_16,input_16_8_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_6_17" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[6][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_17,input_16_1_17,input_16_2_17,input_16_3_17,input_16_4_17,input_16_5_17,input_16_6_17,input_16_7_17,input_16_8_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_6_18" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[6][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_18,input_16_1_18,input_16_2_18,input_16_3_18,input_16_4_18,input_16_5_18,input_16_6_18,input_16_7_18,input_16_8_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_6_19" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[6][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_19,input_16_1_19,input_16_2_19,input_16_3_19,input_16_4_19,input_16_5_19,input_16_6_19,input_16_7_19,input_16_8_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_6_20" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[6][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_20,input_16_1_20,input_16_2_20,input_16_3_20,input_16_4_20,input_16_5_20,input_16_6_20,input_16_7_20,input_16_8_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_6_21" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[6][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_21,input_16_1_21,input_16_2_21,input_16_3_21,input_16_4_21,input_16_5_21,input_16_6_21,input_16_7_21,input_16_8_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_6_22" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[6][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_22,input_16_1_22,input_16_2_22,input_16_3_22,input_16_4_22,input_16_5_22,input_16_6_22,input_16_7_22,input_16_8_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_6_23" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[6][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_23,input_16_1_23,input_16_2_23,input_16_3_23,input_16_4_23,input_16_5_23,input_16_6_23,input_16_7_23,input_16_8_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Urumpirai </th>
<td align="center" class="form-matrix-values">
<input id="input_16_7_0" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[7][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_0,input_16_1_0,input_16_2_0,input_16_3_0,input_16_4_0,input_16_5_0,input_16_6_0,input_16_7_0,input_16_8_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_7_1" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[7][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_1,input_16_1_1,input_16_2_1,input_16_3_1,input_16_4_1,input_16_5_1,input_16_6_1,input_16_7_1,input_16_8_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_7_2" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[7][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_2,input_16_1_2,input_16_2_2,input_16_3_2,input_16_4_2,input_16_5_2,input_16_6_2,input_16_7_2,input_16_8_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_7_3" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[7][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_3,input_16_1_3,input_16_2_3,input_16_3_3,input_16_4_3,input_16_5_3,input_16_6_3,input_16_7_3,input_16_8_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_7_4" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[7][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_4,input_16_1_4,input_16_2_4,input_16_3_4,input_16_4_4,input_16_5_4,input_16_6_4,input_16_7_4,input_16_8_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_7_5" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[7][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_5,input_16_1_5,input_16_2_5,input_16_3_5,input_16_4_5,input_16_5_5,input_16_6_5,input_16_7_5,input_16_8_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_7_6" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[7][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_6,input_16_1_6,input_16_2_6,input_16_3_6,input_16_4_6,input_16_5_6,input_16_6_6,input_16_7_6,input_16_8_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_7_7" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[7][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_7,input_16_1_7,input_16_2_7,input_16_3_7,input_16_4_7,input_16_5_7,input_16_6_7,input_16_7_7,input_16_8_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_7_8" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[7][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_8,input_16_1_8,input_16_2_8,input_16_3_8,input_16_4_8,input_16_5_8,input_16_6_8,input_16_7_8,input_16_8_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_7_9" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[7][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_9,input_16_1_9,input_16_2_9,input_16_3_9,input_16_4_9,input_16_5_9,input_16_6_9,input_16_7_9,input_16_8_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_7_10" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[7][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_10,input_16_1_10,input_16_2_10,input_16_3_10,input_16_4_10,input_16_5_10,input_16_6_10,input_16_7_10,input_16_8_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_7_11" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[7][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_11,input_16_1_11,input_16_2_11,input_16_3_11,input_16_4_11,input_16_5_11,input_16_6_11,input_16_7_11,input_16_8_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_7_12" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[7][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_12,input_16_1_12,input_16_2_12,input_16_3_12,input_16_4_12,input_16_5_12,input_16_6_12,input_16_7_12,input_16_8_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_7_13" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[7][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_13,input_16_1_13,input_16_2_13,input_16_3_13,input_16_4_13,input_16_5_13,input_16_6_13,input_16_7_13,input_16_8_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_7_14" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[7][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_14,input_16_1_14,input_16_2_14,input_16_3_14,input_16_4_14,input_16_5_14,input_16_6_14,input_16_7_14,input_16_8_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_7_15" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[7][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_15,input_16_1_15,input_16_2_15,input_16_3_15,input_16_4_15,input_16_5_15,input_16_6_15,input_16_7_15,input_16_8_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_7_16" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[7][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_16,input_16_1_16,input_16_2_16,input_16_3_16,input_16_4_16,input_16_5_16,input_16_6_16,input_16_7_16,input_16_8_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_7_17" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[7][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_17,input_16_1_17,input_16_2_17,input_16_3_17,input_16_4_17,input_16_5_17,input_16_6_17,input_16_7_17,input_16_8_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_7_18" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[7][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_18,input_16_1_18,input_16_2_18,input_16_3_18,input_16_4_18,input_16_5_18,input_16_6_18,input_16_7_18,input_16_8_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_7_19" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[7][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_19,input_16_1_19,input_16_2_19,input_16_3_19,input_16_4_19,input_16_5_19,input_16_6_19,input_16_7_19,input_16_8_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_7_20" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[7][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_20,input_16_1_20,input_16_2_20,input_16_3_20,input_16_4_20,input_16_5_20,input_16_6_20,input_16_7_20,input_16_8_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_7_21" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[7][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_21,input_16_1_21,input_16_2_21,input_16_3_21,input_16_4_21,input_16_5_21,input_16_6_21,input_16_7_21,input_16_8_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_7_22" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[7][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_22,input_16_1_22,input_16_2_22,input_16_3_22,input_16_4_22,input_16_5_22,input_16_6_22,input_16_7_22,input_16_8_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_7_23" type="number" class="form-number-input form-dropdown" name="q16_phiArea16[7][]" style="width:60px" size="5" onchange="kopayTotal(input_16_0_23,input_16_1_23,input_16_2_23,input_16_3_23,input_16_4_23,input_16_5_23,input_16_6_23,input_16_7_23,input_16_8_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Total </th>
<td align="center" class="form-matrix-values">
<input id="input_16_8_0" type="text" class="form-number-input form-dropdown" name="q16_phiArea16[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_8_1" type="text" class="form-number-input form-dropdown" name="q16_phiArea16[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_8_2" type="text" class="form-number-input form-dropdown" name="q16_phiArea16[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_8_3" type="text" class="form-number-input form-dropdown" name="q16_phiArea16[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_8_4" type="text" class="form-number-input form-dropdown" name="q16_phiArea16[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_8_5" type="text" class="form-number-input form-dropdown" name="q16_phiArea16[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_8_6" type="text" class="form-number-input form-dropdown" name="q16_phiArea16[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_8_7" type="text" class="form-number-input form-dropdown" name="q16_phiArea16[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_8_8" type="text" class="form-number-input form-dropdown" name="q16_phiArea16[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_8_9" type="text" class="form-number-input form-dropdown" name="q16_phiArea16[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_8_10" type="text" class="form-number-input form-dropdown" name="q16_phiArea16[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_8_11" type="text" class="form-number-input form-dropdown" name="q16_phiArea16[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_8_12" type="text" class="form-number-input form-dropdown" name="q16_phiArea16[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_8_13" type="text" class="form-number-input form-dropdown" name="q16_phiArea16[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_8_14" type="text" class="form-number-input form-dropdown" name="q16_phiArea16[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_8_15" type="text" class="form-number-input form-dropdown" name="q16_phiArea16[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_8_16" type="text" class="form-number-input form-dropdown" name="q16_phiArea16[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_8_17" type="text" class="form-number-input form-dropdown" name="q16_phiArea16[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_8_18" type="text" class="form-number-input form-dropdown" name="q16_phiArea16[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_8_19" type="text" class="form-number-input form-dropdown" name="q16_phiArea16[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_8_20" type="text" class="form-number-input form-dropdown" name="q16_phiArea16[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_8_21" type="text" class="form-number-input form-dropdown" name="q16_phiArea16[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_8_22" type="text" class="form-number-input form-dropdown" name="q16_phiArea16[8][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_16_8_23" type="text" class="form-number-input form-dropdown" name="q16_phiArea16[8][]" style="width:60px" size="5" disabled/>
</td>
</tr>
</table>
</div>
</li>
<li class="form-line form-field-hidden" style="display:none;" data-type="control_matrix" id="id_17">
<label class="form-label form-label-left form-label-auto" id="label_17" for="input_17">PHI Area Vs Diseases </label>
<div id="cid_17" class="form-input jf-required">
<table summary="" cellpadding="4" cellspacing="0" class="form-matrix-table">
<tr>
<th style="border:none">&nbsp; </th>
<th class="form-matrix-column-headers form-matrix-column_0">Internationally Notifiable Diseases(Cholera, Plague, Yellow Fever)</th>
<th class="form-matrix-column-headers form-matrix-column_1">Polio Myelitis / Acute Flaccid Paralysis </th>
<th class="form-matrix-column-headers form-matrix-column_2">Chicken Pox </th>
<th class="form-matrix-column-headers form-matrix-column_3">Dengue Fever/ Dengue Hemorrhagic Fever </th>
<th class="form-matrix-column-headers form-matrix-column_4">Diphtheria </th>
<th class="form-matrix-column-headers form-matrix-column_5">Dysentery </th>
<th class="form-matrix-column-headers form-matrix-column_6">Encephalitis (including Japanese Encephalitis) </th>
<th class="form-matrix-column-headers form-matrix-column_7">Enteric Fever </th>
<th class="form-matrix-column-headers form-matrix-column_8">Food Poisoning </th>
<th class="form-matrix-column-headers form-matrix-column_9">Human Rabies </th>
<th class="form-matrix-column-headers form-matrix-column_10">Leptospirosis </th>
<th class="form-matrix-column-headers form-matrix-column_11">Malaria </th>
<th class="form-matrix-column-headers form-matrix-column_12">Measles </th>
<th class="form-matrix-column-headers form-matrix-column_13">Meningitis </th>
<th class="form-matrix-column-headers form-matrix-column_14">Mumps </th>
<th class="form-matrix-column-headers form-matrix-column_15">Rubella </th>
<th class="form-matrix-column-headers form-matrix-column_16">Congenital Rubella Syndrome </th>
<th class="form-matrix-column-headers form-matrix-column_17">Simple continued fever </th>
<th class="form-matrix-column-headers form-matrix-column_18">Tetanus </th>
<th class="form-matrix-column-headers form-matrix-column_19">Neonatal tetanus </th>
<th class="form-matrix-column-headers form-matrix-column_20">Typhus Fever </th>
<th class="form-matrix-column-headers form-matrix-column_21">Viral Hepatitis </th>
<th class="form-matrix-column-headers form-matrix-column_22">Whooping cough </th>
<th class="form-matrix-column-headers form-matrix-column_23">Tuberculosis </th>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Kokuvil-I </th>
<td align="center" class="form-matrix-values">
<input id="input_17_0_0" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[0][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_0,input_17_1_0,input_17_2_0,input_17_3_0,input_17_4_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_0_1" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[0][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_1,input_17_1_1,input_17_2_1,input_17_3_1,input_17_4_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_0_2" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[0][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_2,input_17_1_2,input_17_2_2,input_17_3_2,input_17_4_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_0_3" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[0][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_3,input_17_1_3,input_17_2_3,input_17_3_3,input_17_4_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_0_4" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[0][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_4,input_17_1_4,input_17_2_4,input_17_3_4,input_17_4_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_0_5" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[0][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_5,input_17_1_5,input_17_2_5,input_17_3_5,input_17_4_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_0_6" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[0][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_6,input_17_1_6,input_17_2_6,input_17_3_6,input_17_4_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_0_7" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[0][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_7,input_17_1_7,input_17_2_7,input_17_3_7,input_17_4_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_0_8" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[0][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_8,input_17_1_8,input_17_2_8,input_17_3_8,input_17_4_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_0_9" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[0][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_9,input_17_1_9,input_17_2_9,input_17_3_9,input_17_4_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_0_10" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[0][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_10,input_17_1_10,input_17_2_10,input_17_3_10,input_17_4_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_0_11" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[0][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_11,input_17_1_11,input_17_2_11,input_17_3_11,input_17_4_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_0_12" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[0][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_12,input_17_1_12,input_17_2_12,input_17_3_12,input_17_4_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_0_13" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[0][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_13,input_17_1_13,input_17_2_13,input_17_3_13,input_17_4_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_0_14" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[0][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_14,input_17_1_14,input_17_2_14,input_17_3_14,input_17_4_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_0_15" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[0][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_15,input_17_1_15,input_17_2_15,input_17_3_15,input_17_4_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_0_16" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[0][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_16,input_17_1_16,input_17_2_16,input_17_3_16,input_17_4_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_0_17" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[0][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_17,input_17_1_17,input_17_2_17,input_17_3_17,input_17_4_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_0_18" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[0][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_18,input_17_1_18,input_17_2_18,input_17_3_18,input_17_4_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_0_19" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[0][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_19,input_17_1_19,input_17_2_19,input_17_3_19,input_17_4_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_0_20" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[0][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_20,input_17_1_20,input_17_2_20,input_17_3_20,input_17_4_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_0_21" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[0][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_21,input_17_1_21,input_17_2_21,input_17_3_21,input_17_4_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_0_22" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[0][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_22,input_17_1_22,input_17_2_22,input_17_3_22,input_17_4_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_0_23" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[0][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_23,input_17_1_23,input_17_2_23,input_17_3_23,input_17_4_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Kokuvil-II </th>
<td align="center" class="form-matrix-values">
<input id="input_17_1_0" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[1][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_0,input_17_1_0,input_17_2_0,input_17_3_0,input_17_4_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_1_1" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[1][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_1,input_17_1_1,input_17_2_1,input_17_3_1,input_17_4_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_1_2" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[1][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_2,input_17_1_2,input_17_2_2,input_17_3_2,input_17_4_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_1_3" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[1][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_3,input_17_1_3,input_17_2_3,input_17_3_3,input_17_4_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_1_4" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[1][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_4,input_17_1_4,input_17_2_4,input_17_3_4,input_17_4_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_1_5" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[1][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_5,input_17_1_5,input_17_2_5,input_17_3_5,input_17_4_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_1_6" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[1][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_6,input_17_1_6,input_17_2_6,input_17_3_6,input_17_4_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_1_7" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[1][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_7,input_17_1_7,input_17_2_7,input_17_3_7,input_17_4_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_1_8" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[1][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_8,input_17_1_8,input_17_2_8,input_17_3_8,input_17_4_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_1_9" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[1][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_9,input_17_1_9,input_17_2_9,input_17_3_9,input_17_4_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_1_10" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[1][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_10,input_17_1_10,input_17_2_10,input_17_3_10,input_17_4_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_1_11" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[1][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_11,input_17_1_11,input_17_2_11,input_17_3_11,input_17_4_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_1_12" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[1][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_12,input_17_1_12,input_17_2_12,input_17_3_12,input_17_4_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_1_13" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[1][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_13,input_17_1_13,input_17_2_13,input_17_3_13,input_17_4_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_1_14" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[1][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_14,input_17_1_14,input_17_2_14,input_17_3_14,input_17_4_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_1_15" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[1][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_15,input_17_1_15,input_17_2_15,input_17_3_15,input_17_4_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_1_16" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[1][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_16,input_17_1_16,input_17_2_16,input_17_3_16,input_17_4_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_1_17" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[1][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_17,input_17_1_17,input_17_2_17,input_17_3_17,input_17_4_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_1_18" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[1][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_18,input_17_1_18,input_17_2_18,input_17_3_18,input_17_4_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_1_19" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[1][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_19,input_17_1_19,input_17_2_19,input_17_3_19,input_17_4_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_1_20" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[1][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_20,input_17_1_20,input_17_2_20,input_17_3_20,input_17_4_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_1_21" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[1][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_21,input_17_1_21,input_17_2_21,input_17_3_21,input_17_4_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_1_22" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[1][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_22,input_17_1_22,input_17_2_22,input_17_3_22,input_17_4_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_1_23" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[1][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_23,input_17_1_23,input_17_2_23,input_17_3_23,input_17_4_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Kondavil </th>
<td align="center" class="form-matrix-values">
<input id="input_17_2_0" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[2][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_0,input_17_1_0,input_17_2_0,input_17_3_0,input_17_4_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_2_1" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[2][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_1,input_17_1_1,input_17_2_1,input_17_3_1,input_17_4_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_2_2" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[2][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_2,input_17_1_2,input_17_2_2,input_17_3_2,input_17_4_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_2_3" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[2][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_3,input_17_1_3,input_17_2_3,input_17_3_3,input_17_4_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_2_4" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[2][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_4,input_17_1_4,input_17_2_4,input_17_3_4,input_17_4_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_2_5" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[2][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_5,input_17_1_5,input_17_2_5,input_17_3_5,input_17_4_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_2_6" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[2][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_6,input_17_1_6,input_17_2_6,input_17_3_6,input_17_4_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_2_7" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[2][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_7,input_17_1_7,input_17_2_7,input_17_3_7,input_17_4_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_2_8" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[2][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_8,input_17_1_8,input_17_2_8,input_17_3_8,input_17_4_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_2_9" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[2][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_9,input_17_1_9,input_17_2_9,input_17_3_9,input_17_4_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_2_10" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[2][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_10,input_17_1_10,input_17_2_10,input_17_3_10,input_17_4_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_2_11" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[2][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_11,input_17_1_11,input_17_2_11,input_17_3_11,input_17_4_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_2_12" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[2][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_12,input_17_1_12,input_17_2_12,input_17_3_12,input_17_4_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_2_13" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[2][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_13,input_17_1_13,input_17_2_13,input_17_3_13,input_17_4_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_2_14" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[2][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_14,input_17_1_14,input_17_2_14,input_17_3_14,input_17_4_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_2_15" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[2][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_15,input_17_1_15,input_17_2_15,input_17_3_15,input_17_4_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_2_16" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[2][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_16,input_17_1_16,input_17_2_16,input_17_3_16,input_17_4_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_2_17" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[2][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_17,input_17_1_17,input_17_2_17,input_17_3_17,input_17_4_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_2_18" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[2][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_18,input_17_1_18,input_17_2_18,input_17_3_18,input_17_4_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_2_19" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[2][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_19,input_17_1_19,input_17_2_19,input_17_3_19,input_17_4_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_2_20" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[2][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_20,input_17_1_20,input_17_2_20,input_17_3_20,input_17_4_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_2_21" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[2][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_21,input_17_1_21,input_17_2_21,input_17_3_21,input_17_4_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_2_22" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[2][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_22,input_17_1_22,input_17_2_22,input_17_3_22,input_17_4_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_2_23" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[2][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_23,input_17_1_23,input_17_2_23,input_17_3_23,input_17_4_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Nallur </th>
<td align="center" class="form-matrix-values">
<input id="input_17_3_0" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[3][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_0,input_17_1_0,input_17_2_0,input_17_3_0,input_17_4_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_3_1" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[3][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_1,input_17_1_1,input_17_2_1,input_17_3_1,input_17_4_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_3_2" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[3][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_3,input_17_1_3,input_17_2_3,input_17_3_3,input_17_4_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_3_3" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[3][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_3,input_17_1_3,input_17_2_3,input_17_3_3,input_17_4_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_3_4" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[3][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_4,input_17_1_4,input_17_2_4,input_17_3_4,input_17_4_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_3_5" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[3][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_5,input_17_1_5,input_17_2_5,input_17_3_5,input_17_4_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_3_6" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[3][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_6,input_17_1_6,input_17_2_6,input_17_3_6,input_17_4_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_3_7" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[3][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_7,input_17_1_7,input_17_2_7,input_17_3_7,input_17_4_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_3_8" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[3][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_8,input_17_1_8,input_17_2_8,input_17_3_8,input_17_4_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_3_9" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[3][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_9,input_17_1_9,input_17_2_9,input_17_3_9,input_17_4_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_3_10" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[3][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_10,input_17_1_10,input_17_2_10,input_17_3_10,input_17_4_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_3_11" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[3][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_11,input_17_1_11,input_17_2_11,input_17_3_11,input_17_4_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_3_12" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[3][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_12,input_17_1_12,input_17_2_12,input_17_3_12,input_17_4_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_3_13" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[3][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_13,input_17_1_13,input_17_2_13,input_17_3_13,input_17_4_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_3_14" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[3][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_14,input_17_1_14,input_17_2_14,input_17_3_14,input_17_4_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_3_15" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[3][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_15,input_17_1_15,input_17_2_15,input_17_3_15,input_17_4_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_3_16" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[3][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_16,input_17_1_16,input_17_2_16,input_17_3_16,input_17_4_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_3_17" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[3][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_17,input_17_1_17,input_17_2_17,input_17_3_17,input_17_4_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_3_18" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[3][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_18,input_17_1_18,input_17_2_18,input_17_3_18,input_17_4_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_3_19" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[3][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_19,input_17_1_19,input_17_2_19,input_17_3_19,input_17_4_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_3_20" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[3][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_20,input_17_1_20,input_17_2_20,input_17_3_20,input_17_4_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_3_21" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[3][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_21,input_17_1_21,input_17_2_21,input_17_3_21,input_17_4_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_3_22" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[3][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_22,input_17_1_22,input_17_2_22,input_17_3_22,input_17_4_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_3_23" type="number" class="form-number-input form-dropdown" name="q17_phiArea17[3][]" style="width:60px" size="5" onchange="nallurTotal(input_17_0_23,input_17_1_23,input_17_2_23,input_17_3_23,input_17_4_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Total </th>
<td align="center" class="form-matrix-values">
<input id="input_17_4_0" type="text" class="form-number-input form-dropdown" name="q17_phiArea17[4][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_4_1" type="text" class="form-number-input form-dropdown" name="q17_phiArea17[4][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_4_2" type="text" class="form-number-input form-dropdown" name="q17_phiArea17[4][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_4_3" type="text" class="form-number-input form-dropdown" name="q17_phiArea17[4][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_4_4" type="text" class="form-number-input form-dropdown" name="q17_phiArea17[4][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_4_5" type="text" class="form-number-input form-dropdown" name="q17_phiArea17[4][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_4_6" type="text" class="form-number-input form-dropdown" name="q17_phiArea17[4][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_4_7" type="text" class="form-number-input form-dropdown" name="q17_phiArea17[4][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_4_8" type="text" class="form-number-input form-dropdown" name="q17_phiArea17[4][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_4_9" type="text" class="form-number-input form-dropdown" name="q17_phiArea17[4][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_4_10" type="text" class="form-number-input form-dropdown" name="q17_phiArea17[4][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_4_11" type="text" class="form-number-input form-dropdown" name="q17_phiArea17[4][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_4_12" type="text" class="form-number-input form-dropdown" name="q17_phiArea17[4][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_4_13" type="text" class="form-number-input form-dropdown" name="q17_phiArea17[4][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_4_14" type="text" class="form-number-input form-dropdown" name="q17_phiArea17[4][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_4_15" type="text" class="form-number-input form-dropdown" name="q17_phiArea17[4][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_4_16" type="text" class="form-number-input form-dropdown" name="q17_phiArea17[4][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_4_17" type="text" class="form-number-input form-dropdown" name="q17_phiArea17[4][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_4_18" type="text" class="form-number-input form-dropdown" name="q17_phiArea17[4][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_4_19" type="text" class="form-number-input form-dropdown" name="q17_phiArea17[4][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_4_20" type="text" class="form-number-input form-dropdown" name="q17_phiArea17[4][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_4_21" type="text" class="form-number-input form-dropdown" name="q17_phiArea17[4][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_4_22" type="text" class="form-number-input form-dropdown" name="q17_phiArea17[4][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_17_4_23" type="text" class="form-number-input form-dropdown" name="q17_phiArea17[4][]" style="width:60px" size="5" disabled/>
</td>
</tr>
</table>
</div>
</li>
<li class="form-line form-field-hidden" style="display:none;" data-type="control_matrix" id="id_18">
<label class="form-label form-label-left form-label-auto" id="label_18" for="input_18">PHI Area Vs Diseases </label>
<div id="cid_18" class="form-input jf-required">
<table summary="" cellpadding="4" cellspacing="0" class="form-matrix-table">
<tr>
<th style="border:none">&nbsp; </th>
<th class="form-matrix-column-headers form-matrix-column_0">Internationally Notifiable Diseases(Cholera, Plague, Yellow Fever)</th>
<th class="form-matrix-column-headers form-matrix-column_1">Polio Myelitis / Acute Flaccid Paralysis </th>
<th class="form-matrix-column-headers form-matrix-column_2">Chicken Pox </th>
<th class="form-matrix-column-headers form-matrix-column_3">Dengue Fever/ Dengue Hemorrhagic Fever </th>
<th class="form-matrix-column-headers form-matrix-column_4">Diphtheria </th>
<th class="form-matrix-column-headers form-matrix-column_5">Dysentery </th>
<th class="form-matrix-column-headers form-matrix-column_6">Encephalitis (including Japanese Encephalitis) </th>
<th class="form-matrix-column-headers form-matrix-column_7">Enteric Fever </th>
<th class="form-matrix-column-headers form-matrix-column_8">Food Poisoning </th>
<th class="form-matrix-column-headers form-matrix-column_9">Human Rabies </th>
<th class="form-matrix-column-headers form-matrix-column_10">Leptospirosis </th>
<th class="form-matrix-column-headers form-matrix-column_11">Malaria </th>
<th class="form-matrix-column-headers form-matrix-column_12">Measles </th>
<th class="form-matrix-column-headers form-matrix-column_13">Meningitis </th>
<th class="form-matrix-column-headers form-matrix-column_14">Mumps </th>
<th class="form-matrix-column-headers form-matrix-column_15">Rubella </th>
<th class="form-matrix-column-headers form-matrix-column_16">Congenital Rubella Syndrome </th>
<th class="form-matrix-column-headers form-matrix-column_17">Simple continued fever </th>
<th class="form-matrix-column-headers form-matrix-column_18">Tetanus </th>
<th class="form-matrix-column-headers form-matrix-column_19">Neonatal tetanus </th>
<th class="form-matrix-column-headers form-matrix-column_20">Typhus Fever </th>
<th class="form-matrix-column-headers form-matrix-column_21">Viral Hepatitis </th>
<th class="form-matrix-column-headers form-matrix-column_22">Whooping cough </th>
<th class="form-matrix-column-headers form-matrix-column_23">Tuberculosis </th>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Alvai-II </th>
<td align="center" class="form-matrix-values">
<input id="input_18_0_0" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[0][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_0,input_18_1_0,input_18_2_0,input_18_3_0,input_18_4_0,input_18_5_0,input_18_6_0,input_18_7_0,input_18_8_0,input_18_9_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_0_1" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[0][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_1,input_18_1_1,input_18_2_1,input_18_3_1,input_18_4_1,input_18_5_1,input_18_6_1,input_18_7_1,input_18_8_1,input_18_9_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_0_2" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[0][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_2,input_18_1_2,input_18_2_2,input_18_3_2,input_18_4_2,input_18_5_2,input_18_6_2,input_18_7_2,input_18_8_2,input_18_9_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_0_3" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[0][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_3,input_18_1_3,input_18_2_3,input_18_3_3,input_18_4_3,input_18_5_3,input_18_6_3,input_18_7_3,input_18_8_3,input_18_9_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_0_4" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[0][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_4,input_18_1_4,input_18_2_4,input_18_3_4,input_18_4_4,input_18_5_4,input_18_6_4,input_18_7_4,input_18_8_4,input_18_9_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_0_5" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[0][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_5,input_18_1_5,input_18_2_5,input_18_3_5,input_18_4_5,input_18_5_5,input_18_6_5,input_18_7_5,input_18_8_5,input_18_9_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_0_6" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[0][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_6,input_18_1_6,input_18_2_6,input_18_3_6,input_18_4_6,input_18_5_6,input_18_6_6,input_18_7_6,input_18_8_6,input_18_9_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_0_7" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[0][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_7,input_18_1_7,input_18_2_7,input_18_3_7,input_18_4_7,input_18_5_7,input_18_6_7,input_18_7_7,input_18_8_7,input_18_9_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_0_8" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[0][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_8,input_18_1_8,input_18_2_8,input_18_3_8,input_18_4_8,input_18_5_8,input_18_6_8,input_18_7_8,input_18_8_8,input_18_9_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_0_9" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[0][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_9,input_18_1_9,input_18_2_9,input_18_3_9,input_18_4_9,input_18_5_9,input_18_6_9,input_18_7_9,input_18_8_9,input_18_9_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_0_10" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[0][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_10,input_18_1_10,input_18_2_10,input_18_3_10,input_18_4_10,input_18_5_10,input_18_6_10,input_18_7_10,input_18_8_10,input_18_9_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_0_11" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[0][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_11,input_18_1_11,input_18_2_11,input_18_3_11,input_18_4_11,input_18_5_11,input_18_6_11,input_18_7_11,input_18_8_11,input_18_9_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_0_12" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[0][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_12,input_18_1_12,input_18_2_12,input_18_3_12,input_18_4_12,input_18_5_12,input_18_6_12,input_18_7_12,input_18_8_12,input_18_9_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_0_13" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[0][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_13,input_18_1_13,input_18_2_13,input_18_3_13,input_18_4_13,input_18_5_13,input_18_6_13,input_18_7_13,input_18_8_13,input_18_9_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_0_14" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[0][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_14,input_18_1_14,input_18_2_14,input_18_3_14,input_18_4_14,input_18_5_14,input_18_6_14,input_18_7_14,input_18_8_14,input_18_9_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_0_15" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[0][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_15,input_18_1_15,input_18_2_15,input_18_3_15,input_18_4_15,input_18_5_15,input_18_6_15,input_18_7_15,input_18_8_15,input_18_9_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_0_16" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[0][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_16,input_18_1_16,input_18_2_16,input_18_3_16,input_18_4_16,input_18_5_16,input_18_6_16,input_18_7_16,input_18_8_16,input_18_9_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_0_17" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[0][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_17,input_18_1_17,input_18_2_17,input_18_3_17,input_18_4_17,input_18_5_17,input_18_6_17,input_18_7_17,input_18_8_17,input_18_9_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_0_18" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[0][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_18,input_18_1_18,input_18_2_18,input_18_3_18,input_18_4_18,input_18_5_18,input_18_6_18,input_18_7_18,input_18_8_18,input_18_9_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_0_19" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[0][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_19,input_18_1_19,input_18_2_19,input_18_3_19,input_18_4_19,input_18_5_19,input_18_6_19,input_18_7_19,input_18_8_19,input_18_9_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_0_20" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[0][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_20,input_18_1_20,input_18_2_20,input_18_3_20,input_18_4_20,input_18_5_20,input_18_6_20,input_18_7_20,input_18_8_20,input_18_9_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_0_21" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[0][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_21,input_18_1_21,input_18_2_21,input_18_3_21,input_18_4_21,input_18_5_21,input_18_6_21,input_18_7_21,input_18_8_21,input_18_9_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_0_22" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[0][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_22,input_18_1_22,input_18_2_22,input_18_3_22,input_18_4_22,input_18_5_22,input_18_6_22,input_18_7_22,input_18_8_22,input_18_9_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_0_23" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[0][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_23,input_18_1_23,input_18_2_23,input_18_3_23,input_18_4_23,input_18_5_23,input_18_6_23,input_18_7_23,input_18_8_23,input_18_9_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Ampan </th>
<td align="center" class="form-matrix-values">
<input id="input_18_1_0" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[1][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_0,input_18_1_0,input_18_2_0,input_18_3_0,input_18_4_0,input_18_5_0,input_18_6_0,input_18_7_0,input_18_8_0,input_18_9_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_1_1" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[1][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_1,input_18_1_1,input_18_2_1,input_18_3_1,input_18_4_1,input_18_5_1,input_18_6_1,input_18_7_1,input_18_8_1,input_18_9_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_1_2" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[1][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_2,input_18_1_2,input_18_2_2,input_18_3_2,input_18_4_2,input_18_5_2,input_18_6_2,input_18_7_2,input_18_8_2,input_18_9_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_1_3" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[1][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_3,input_18_1_3,input_18_2_3,input_18_3_3,input_18_4_3,input_18_5_3,input_18_6_3,input_18_7_3,input_18_8_3,input_18_9_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_1_4" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[1][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_4,input_18_1_4,input_18_2_4,input_18_3_4,input_18_4_4,input_18_5_4,input_18_6_4,input_18_7_4,input_18_8_4,input_18_9_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_1_5" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[1][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_5,input_18_1_5,input_18_2_5,input_18_3_5,input_18_4_5,input_18_5_5,input_18_6_5,input_18_7_5,input_18_8_5,input_18_9_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_1_6" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[1][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_6,input_18_1_6,input_18_2_6,input_18_3_6,input_18_4_6,input_18_5_6,input_18_6_6,input_18_7_6,input_18_8_6,input_18_9_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_1_7" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[1][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_7,input_18_1_7,input_18_2_7,input_18_3_7,input_18_4_7,input_18_5_7,input_18_6_7,input_18_7_7,input_18_8_7,input_18_9_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_1_8" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[1][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_8,input_18_1_8,input_18_2_8,input_18_3_8,input_18_4_8,input_18_5_8,input_18_6_8,input_18_7_8,input_18_8_8,input_18_9_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_1_9" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[1][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_9,input_18_1_9,input_18_2_9,input_18_3_9,input_18_4_9,input_18_5_9,input_18_6_9,input_18_7_9,input_18_8_9,input_18_9_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_1_10" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[1][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_10,input_18_1_10,input_18_2_10,input_18_3_10,input_18_4_10,input_18_5_10,input_18_6_10,input_18_7_10,input_18_8_10,input_18_9_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_1_11" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[1][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_11,input_18_1_11,input_18_2_11,input_18_3_11,input_18_4_11,input_18_5_11,input_18_6_11,input_18_7_11,input_18_8_11,input_18_9_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_1_12" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[1][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_12,input_18_1_12,input_18_2_12,input_18_3_12,input_18_4_12,input_18_5_12,input_18_6_12,input_18_7_12,input_18_8_12,input_18_9_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_1_13" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[1][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_13,input_18_1_13,input_18_2_13,input_18_3_13,input_18_4_13,input_18_5_13,input_18_6_13,input_18_7_13,input_18_8_13,input_18_9_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_1_14" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[1][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_14,input_18_1_14,input_18_2_14,input_18_3_14,input_18_4_14,input_18_5_14,input_18_6_14,input_18_7_14,input_18_8_14,input_18_9_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_1_15" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[1][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_15,input_18_1_15,input_18_2_15,input_18_3_15,input_18_4_15,input_18_5_15,input_18_6_15,input_18_7_15,input_18_8_15,input_18_9_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_1_16" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[1][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_16,input_18_1_16,input_18_2_16,input_18_3_16,input_18_4_16,input_18_5_16,input_18_6_16,input_18_7_16,input_18_8_16,input_18_9_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_1_17" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[1][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_17,input_18_1_17,input_18_2_17,input_18_3_17,input_18_4_17,input_18_5_17,input_18_6_17,input_18_7_17,input_18_8_17,input_18_9_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_1_18" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[1][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_18,input_18_1_18,input_18_2_18,input_18_3_18,input_18_4_18,input_18_5_18,input_18_6_18,input_18_7_18,input_18_8_18,input_18_9_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_1_19" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[1][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_19,input_18_1_19,input_18_2_19,input_18_3_19,input_18_4_19,input_18_5_19,input_18_6_19,input_18_7_19,input_18_8_19,input_18_9_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_1_20" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[1][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_20,input_18_1_20,input_18_2_20,input_18_3_20,input_18_4_20,input_18_5_20,input_18_6_20,input_18_7_20,input_18_8_20,input_18_9_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_1_21" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[1][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_21,input_18_1_21,input_18_2_21,input_18_3_21,input_18_4_21,input_18_5_21,input_18_6_21,input_18_7_21,input_18_8_21,input_18_9_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_1_22" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[1][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_22,input_18_1_22,input_18_2_22,input_18_3_22,input_18_4_22,input_18_5_22,input_18_6_22,input_18_7_22,input_18_8_22,input_18_9_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_1_23" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[1][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_23,input_18_1_23,input_18_2_23,input_18_3_23,input_18_4_23,input_18_5_23,input_18_6_23,input_18_7_23,input_18_8_23,input_18_9_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Chempiyanpattu </th>
<td align="center" class="form-matrix-values">
<input id="input_18_2_0" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[2][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_0,input_18_1_0,input_18_2_0,input_18_3_0,input_18_4_0,input_18_5_0,input_18_6_0,input_18_7_0,input_18_8_0,input_18_9_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_2_1" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[2][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_1,input_18_1_1,input_18_2_1,input_18_3_1,input_18_4_1,input_18_5_1,input_18_6_1,input_18_7_1,input_18_8_1,input_18_9_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_2_2" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[2][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_2,input_18_1_2,input_18_2_2,input_18_3_2,input_18_4_2,input_18_5_2,input_18_6_2,input_18_7_2,input_18_8_2,input_18_9_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_2_3" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[2][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_3,input_18_1_3,input_18_2_3,input_18_3_3,input_18_4_3,input_18_5_3,input_18_6_3,input_18_7_3,input_18_8_3,input_18_9_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_2_4" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[2][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_4,input_18_1_4,input_18_2_4,input_18_3_4,input_18_4_4,input_18_5_4,input_18_6_4,input_18_7_4,input_18_8_4,input_18_9_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_2_5" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[2][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_5,input_18_1_5,input_18_2_5,input_18_3_5,input_18_4_5,input_18_5_5,input_18_6_5,input_18_7_5,input_18_8_5,input_18_9_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_2_6" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[2][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_6,input_18_1_6,input_18_2_6,input_18_3_6,input_18_4_6,input_18_5_6,input_18_6_6,input_18_7_6,input_18_8_6,input_18_9_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_2_7" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[2][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_7,input_18_1_7,input_18_2_7,input_18_3_7,input_18_4_7,input_18_5_7,input_18_6_7,input_18_7_7,input_18_8_7,input_18_9_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_2_8" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[2][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_8,input_18_1_8,input_18_2_8,input_18_3_8,input_18_4_8,input_18_5_8,input_18_6_8,input_18_7_8,input_18_8_8,input_18_9_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_2_9" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[2][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_9,input_18_1_9,input_18_2_9,input_18_3_9,input_18_4_9,input_18_5_9,input_18_6_9,input_18_7_9,input_18_8_9,input_18_9_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_2_10" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[2][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_10,input_18_1_10,input_18_2_10,input_18_3_10,input_18_4_10,input_18_5_10,input_18_6_10,input_18_7_10,input_18_8_10,input_18_9_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_2_11" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[2][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_11,input_18_1_11,input_18_2_11,input_18_3_11,input_18_4_11,input_18_5_11,input_18_6_11,input_18_7_11,input_18_8_11,input_18_9_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_2_12" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[2][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_12,input_18_1_12,input_18_2_12,input_18_3_12,input_18_4_12,input_18_5_12,input_18_6_12,input_18_7_12,input_18_8_12,input_18_9_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_2_13" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[2][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_13,input_18_1_13,input_18_2_13,input_18_3_13,input_18_4_13,input_18_5_13,input_18_6_13,input_18_7_13,input_18_8_13,input_18_9_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_2_14" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[2][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_14,input_18_1_14,input_18_2_14,input_18_3_14,input_18_4_14,input_18_5_14,input_18_6_14,input_18_7_14,input_18_8_14,input_18_9_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_2_15" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[2][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_15,input_18_1_15,input_18_2_15,input_18_3_15,input_18_4_15,input_18_5_15,input_18_6_15,input_18_7_15,input_18_8_15,input_18_9_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_2_16" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[2][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_16,input_18_1_16,input_18_2_16,input_18_3_16,input_18_4_16,input_18_5_16,input_18_6_16,input_18_7_16,input_18_8_16,input_18_9_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_2_17" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[2][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_17,input_18_1_17,input_18_2_17,input_18_3_17,input_18_4_17,input_18_5_17,input_18_6_17,input_18_7_17,input_18_8_17,input_18_9_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_2_18" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[2][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_18,input_18_1_18,input_18_2_18,input_18_3_18,input_18_4_18,input_18_5_18,input_18_6_18,input_18_7_18,input_18_8_18,input_18_9_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_2_19" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[2][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_19,input_18_1_19,input_18_2_19,input_18_3_19,input_18_4_19,input_18_5_19,input_18_6_19,input_18_7_19,input_18_8_19,input_18_9_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_2_20" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[2][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_20,input_18_1_20,input_18_2_20,input_18_3_20,input_18_4_20,input_18_5_20,input_18_6_20,input_18_7_20,input_18_8_20,input_18_9_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_2_21" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[2][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_21,input_18_1_21,input_18_2_21,input_18_3_21,input_18_4_21,input_18_5_21,input_18_6_21,input_18_7_21,input_18_8_21,input_18_9_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_2_22" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[2][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_22,input_18_1_22,input_18_2_22,input_18_3_22,input_18_4_22,input_18_5_22,input_18_6_22,input_18_7_22,input_18_8_22,input_18_9_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_2_23" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[2][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_23,input_18_1_23,input_18_2_23,input_18_3_23,input_18_4_23,input_18_5_23,input_18_6_23,input_18_7_23,input_18_8_23,input_18_9_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Point Pedro-I </th>
<td align="center" class="form-matrix-values">
<input id="input_18_3_0" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[3][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_0,input_18_1_0,input_18_2_0,input_18_3_0,input_18_4_0,input_18_5_0,input_18_6_0,input_18_7_0,input_18_8_0,input_18_9_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_3_1" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[3][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_1,input_18_1_1,input_18_2_1,input_18_3_1,input_18_4_1,input_18_5_1,input_18_6_1,input_18_7_1,input_18_8_1,input_18_9_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_3_2" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[3][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_2,input_18_1_2,input_18_2_2,input_18_3_2,input_18_4_2,input_18_5_2,input_18_6_2,input_18_7_2,input_18_8_2,input_18_9_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_3_3" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[3][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_3,input_18_1_3,input_18_2_3,input_18_3_3,input_18_4_3,input_18_5_3,input_18_6_3,input_18_7_3,input_18_8_3,input_18_9_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_3_4" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[3][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_4,input_18_1_4,input_18_2_4,input_18_3_4,input_18_4_4,input_18_5_4,input_18_6_4,input_18_7_4,input_18_8_4,input_18_9_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_3_5" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[3][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_5,input_18_1_5,input_18_2_5,input_18_3_5,input_18_4_5,input_18_5_5,input_18_6_5,input_18_7_5,input_18_8_5,input_18_9_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_3_6" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[3][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_6,input_18_1_6,input_18_2_6,input_18_3_6,input_18_4_6,input_18_5_6,input_18_6_6,input_18_7_6,input_18_8_6,input_18_9_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_3_7" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[3][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_7,input_18_1_7,input_18_2_7,input_18_3_7,input_18_4_7,input_18_5_7,input_18_6_7,input_18_7_7,input_18_8_7,input_18_9_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_3_8" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[3][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_8,input_18_1_8,input_18_2_8,input_18_3_8,input_18_4_8,input_18_5_8,input_18_6_8,input_18_7_8,input_18_8_8,input_18_9_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_3_9" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[3][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_9,input_18_1_9,input_18_2_9,input_18_3_9,input_18_4_9,input_18_5_9,input_18_6_9,input_18_7_9,input_18_8_9,input_18_9_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_3_10" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[3][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_10,input_18_1_10,input_18_2_10,input_18_3_10,input_18_4_10,input_18_5_10,input_18_6_10,input_18_7_10,input_18_8_10,input_18_9_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_3_11" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[3][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_11,input_18_1_11,input_18_2_11,input_18_3_11,input_18_4_11,input_18_5_11,input_18_6_11,input_18_7_11,input_18_8_11,input_18_9_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_3_12" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[3][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_12,input_18_1_12,input_18_2_12,input_18_3_12,input_18_4_12,input_18_5_12,input_18_6_12,input_18_7_12,input_18_8_12,input_18_9_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_3_13" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[3][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_13,input_18_1_13,input_18_2_13,input_18_3_13,input_18_4_13,input_18_5_13,input_18_6_13,input_18_7_13,input_18_8_13,input_18_9_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_3_14" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[3][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_14,input_18_1_14,input_18_2_14,input_18_3_14,input_18_4_14,input_18_5_14,input_18_6_14,input_18_7_14,input_18_8_14,input_18_9_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_3_15" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[3][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_15,input_18_1_15,input_18_2_15,input_18_3_15,input_18_4_15,input_18_5_15,input_18_6_15,input_18_7_15,input_18_8_15,input_18_9_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_3_16" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[3][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_16,input_18_1_16,input_18_2_16,input_18_3_16,input_18_4_16,input_18_5_16,input_18_6_16,input_18_7_16,input_18_8_16,input_18_9_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_3_17" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[3][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_17,input_18_1_17,input_18_2_17,input_18_3_17,input_18_4_17,input_18_5_17,input_18_6_17,input_18_7_17,input_18_8_17,input_18_9_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_3_18" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[3][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_18,input_18_1_18,input_18_2_18,input_18_3_18,input_18_4_18,input_18_5_18,input_18_6_18,input_18_7_18,input_18_8_18,input_18_9_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_3_19" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[3][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_19,input_18_1_19,input_18_2_19,input_18_3_19,input_18_4_19,input_18_5_19,input_18_6_19,input_18_7_19,input_18_8_19,input_18_9_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_3_20" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[3][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_20,input_18_1_20,input_18_2_20,input_18_3_20,input_18_4_20,input_18_5_20,input_18_6_20,input_18_7_20,input_18_8_20,input_18_9_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_3_21" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[3][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_21,input_18_1_21,input_18_2_21,input_18_3_21,input_18_4_21,input_18_5_21,input_18_6_21,input_18_7_21,input_18_8_21,input_18_9_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_3_22" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[3][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_22,input_18_1_22,input_18_2_22,input_18_3_22,input_18_4_22,input_18_5_22,input_18_6_22,input_18_7_22,input_18_8_22,input_18_9_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_3_23" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[3][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_23,input_18_1_23,input_18_2_23,input_18_3_23,input_18_4_23,input_18_5_23,input_18_6_23,input_18_7_23,input_18_8_23,input_18_9_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Point Pedro-II </th>
<td align="center" class="form-matrix-values">
<input id="input_18_4_0" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[4][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_0,input_18_1_0,input_18_2_0,input_18_3_0,input_18_4_0,input_18_5_0,input_18_6_0,input_18_7_0,input_18_8_0,input_18_9_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_4_1" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[4][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_1,input_18_1_1,input_18_2_1,input_18_3_1,input_18_4_1,input_18_5_1,input_18_6_1,input_18_7_1,input_18_8_1,input_18_9_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_4_2" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[4][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_2,input_18_1_2,input_18_2_2,input_18_3_2,input_18_4_2,input_18_5_2,input_18_6_2,input_18_7_2,input_18_8_2,input_18_9_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_4_3" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[4][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_3,input_18_1_3,input_18_2_3,input_18_3_3,input_18_4_3,input_18_5_3,input_18_6_3,input_18_7_3,input_18_8_3,input_18_9_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_4_4" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[4][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_4,input_18_1_4,input_18_2_4,input_18_3_4,input_18_4_4,input_18_5_4,input_18_6_4,input_18_7_4,input_18_8_4,input_18_9_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_4_5" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[4][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_5,input_18_1_5,input_18_2_5,input_18_3_5,input_18_4_5,input_18_5_5,input_18_6_5,input_18_7_5,input_18_8_5,input_18_9_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_4_6" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[4][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_6,input_18_1_6,input_18_2_6,input_18_3_6,input_18_4_6,input_18_5_6,input_18_6_6,input_18_7_6,input_18_8_6,input_18_9_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_4_7" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[4][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_7,input_18_1_7,input_18_2_7,input_18_3_7,input_18_4_7,input_18_5_7,input_18_6_7,input_18_7_7,input_18_8_7,input_18_9_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_4_8" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[4][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_8,input_18_1_8,input_18_2_8,input_18_3_8,input_18_4_8,input_18_5_8,input_18_6_8,input_18_7_8,input_18_8_8,input_18_9_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_4_9" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[4][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_9,input_18_1_9,input_18_2_9,input_18_3_9,input_18_4_9,input_18_5_9,input_18_6_9,input_18_7_9,input_18_8_9,input_18_9_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_4_10" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[4][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_10,input_18_1_10,input_18_2_10,input_18_3_10,input_18_4_10,input_18_5_10,input_18_6_10,input_18_7_10,input_18_8_10,input_18_9_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_4_11" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[4][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_11,input_18_1_11,input_18_2_11,input_18_3_11,input_18_4_11,input_18_5_11,input_18_6_11,input_18_7_11,input_18_8_11,input_18_9_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_4_12" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[4][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_12,input_18_1_12,input_18_2_12,input_18_3_12,input_18_4_12,input_18_5_12,input_18_6_12,input_18_7_12,input_18_8_12,input_18_9_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_4_13" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[4][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_13,input_18_1_13,input_18_2_13,input_18_3_13,input_18_4_13,input_18_5_13,input_18_6_13,input_18_7_13,input_18_8_13,input_18_9_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_4_14" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[4][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_14,input_18_1_14,input_18_2_14,input_18_3_14,input_18_4_14,input_18_5_14,input_18_6_14,input_18_7_14,input_18_8_14,input_18_9_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_4_15" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[4][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_15,input_18_1_15,input_18_2_15,input_18_3_15,input_18_4_15,input_18_5_15,input_18_6_15,input_18_7_15,input_18_8_15,input_18_9_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_4_16" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[4][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_16,input_18_1_16,input_18_2_16,input_18_3_16,input_18_4_16,input_18_5_16,input_18_6_16,input_18_7_16,input_18_8_16,input_18_9_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_4_17" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[4][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_17,input_18_1_17,input_18_2_17,input_18_3_17,input_18_4_17,input_18_5_17,input_18_6_17,input_18_7_17,input_18_8_17,input_18_9_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_4_18" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[4][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_18,input_18_1_18,input_18_2_18,input_18_3_18,input_18_4_18,input_18_5_18,input_18_6_18,input_18_7_18,input_18_8_18,input_18_9_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_4_19" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[4][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_19,input_18_1_19,input_18_2_19,input_18_3_19,input_18_4_19,input_18_5_19,input_18_6_19,input_18_7_19,input_18_8_19,input_18_9_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_4_20" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[4][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_20,input_18_1_20,input_18_2_20,input_18_3_20,input_18_4_20,input_18_5_20,input_18_6_20,input_18_7_20,input_18_8_20,input_18_9_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_4_21" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[4][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_21,input_18_1_21,input_18_2_21,input_18_3_21,input_18_4_21,input_18_5_21,input_18_6_21,input_18_7_21,input_18_8_21,input_18_9_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_4_22" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[4][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_22,input_18_1_22,input_18_2_22,input_18_3_22,input_18_4_22,input_18_5_22,input_18_6_22,input_18_7_22,input_18_8_22,input_18_9_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_4_23" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[4][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_23,input_18_1_23,input_18_2_23,input_18_3_23,input_18_4_23,input_18_5_23,input_18_6_23,input_18_7_23,input_18_8_23,input_18_9_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Puloly </th>
<td align="center" class="form-matrix-values">
<input id="input_18_5_0" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[5][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_0,input_18_1_0,input_18_2_0,input_18_3_0,input_18_4_0,input_18_5_0,input_18_6_0,input_18_7_0,input_18_8_0,input_18_9_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_5_1" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[5][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_1,input_18_1_1,input_18_2_1,input_18_3_1,input_18_4_1,input_18_5_1,input_18_6_1,input_18_7_1,input_18_8_1,input_18_9_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_5_2" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[5][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_2,input_18_1_2,input_18_2_2,input_18_3_2,input_18_4_2,input_18_5_2,input_18_6_2,input_18_7_2,input_18_8_2,input_18_9_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_5_3" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[5][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_3,input_18_1_3,input_18_2_3,input_18_3_3,input_18_4_3,input_18_5_3,input_18_6_3,input_18_7_3,input_18_8_3,input_18_9_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_5_4" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[5][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_4,input_18_1_4,input_18_2_4,input_18_3_4,input_18_4_4,input_18_5_4,input_18_6_4,input_18_7_4,input_18_8_4,input_18_9_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_5_5" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[5][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_5,input_18_1_5,input_18_2_5,input_18_3_5,input_18_4_5,input_18_5_5,input_18_6_5,input_18_7_5,input_18_8_5,input_18_9_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_5_6" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[5][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_6,input_18_1_6,input_18_2_6,input_18_3_6,input_18_4_6,input_18_5_6,input_18_6_6,input_18_7_6,input_18_8_6,input_18_9_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_5_7" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[5][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_7,input_18_1_7,input_18_2_7,input_18_3_7,input_18_4_7,input_18_5_7,input_18_6_7,input_18_7_7,input_18_8_7,input_18_9_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_5_8" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[5][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_8,input_18_1_8,input_18_2_8,input_18_3_8,input_18_4_8,input_18_5_8,input_18_6_8,input_18_7_8,input_18_8_8,input_18_9_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_5_9" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[5][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_9,input_18_1_9,input_18_2_9,input_18_3_9,input_18_4_9,input_18_5_9,input_18_6_9,input_18_7_9,input_18_8_9,input_18_9_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_5_10" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[5][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_10,input_18_1_10,input_18_2_10,input_18_3_10,input_18_4_10,input_18_5_10,input_18_6_10,input_18_7_10,input_18_8_10,input_18_9_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_5_11" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[5][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_11,input_18_1_11,input_18_2_11,input_18_3_11,input_18_4_11,input_18_5_11,input_18_6_11,input_18_7_11,input_18_8_11,input_18_9_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_5_12" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[5][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_12,input_18_1_12,input_18_2_12,input_18_3_12,input_18_4_12,input_18_5_12,input_18_6_12,input_18_7_12,input_18_8_12,input_18_9_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_5_13" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[5][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_13,input_18_1_13,input_18_2_13,input_18_3_13,input_18_4_13,input_18_5_13,input_18_6_13,input_18_7_13,input_18_8_13,input_18_9_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_5_14" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[5][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_14,input_18_1_14,input_18_2_14,input_18_3_14,input_18_4_14,input_18_5_14,input_18_6_14,input_18_7_14,input_18_8_14,input_18_9_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_5_15" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[5][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_15,input_18_1_15,input_18_2_15,input_18_3_15,input_18_4_15,input_18_5_15,input_18_6_15,input_18_7_15,input_18_8_15,input_18_9_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_5_16" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[5][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_16,input_18_1_16,input_18_2_16,input_18_3_16,input_18_4_16,input_18_5_16,input_18_6_16,input_18_7_16,input_18_8_16,input_18_9_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_5_17" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[5][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_17,input_18_1_17,input_18_2_17,input_18_3_17,input_18_4_17,input_18_5_17,input_18_6_17,input_18_7_17,input_18_8_17,input_18_9_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_5_18" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[5][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_18,input_18_1_18,input_18_2_18,input_18_3_18,input_18_4_18,input_18_5_18,input_18_6_18,input_18_7_18,input_18_8_18,input_18_9_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_5_19" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[5][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_19,input_18_1_19,input_18_2_19,input_18_3_19,input_18_4_19,input_18_5_19,input_18_6_19,input_18_7_19,input_18_8_19,input_18_9_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_5_20" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[5][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_20,input_18_1_20,input_18_2_20,input_18_3_20,input_18_4_20,input_18_5_20,input_18_6_20,input_18_7_20,input_18_8_20,input_18_9_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_5_21" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[5][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_21,input_18_1_21,input_18_2_21,input_18_3_21,input_18_4_21,input_18_5_21,input_18_6_21,input_18_7_21,input_18_8_21,input_18_9_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_5_22" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[5][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_22,input_18_1_22,input_18_2_22,input_18_3_22,input_18_4_22,input_18_5_22,input_18_6_22,input_18_7_22,input_18_8_22,input_18_9_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_5_23" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[5][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_23,input_18_1_23,input_18_2_23,input_18_3_23,input_18_4_23,input_18_5_23,input_18_6_23,input_18_7_23,input_18_8_23,input_18_9_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Thondaimanaru </th>
<td align="center" class="form-matrix-values">
<input id="input_18_6_0" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[6][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_0,input_18_1_0,input_18_2_0,input_18_3_0,input_18_4_0,input_18_5_0,input_18_6_0,input_18_7_0,input_18_8_0,input_18_9_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_6_1" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[6][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_1,input_18_1_1,input_18_2_1,input_18_3_1,input_18_4_1,input_18_5_1,input_18_6_1,input_18_7_1,input_18_8_1,input_18_9_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_6_2" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[6][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_2,input_18_1_2,input_18_2_2,input_18_3_2,input_18_4_2,input_18_5_2,input_18_6_2,input_18_7_2,input_18_8_2,input_18_9_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_6_3" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[6][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_3,input_18_1_3,input_18_2_3,input_18_3_3,input_18_4_3,input_18_5_3,input_18_6_3,input_18_7_3,input_18_8_3,input_18_9_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_6_4" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[6][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_4,input_18_1_4,input_18_2_4,input_18_3_4,input_18_4_4,input_18_5_4,input_18_6_4,input_18_7_4,input_18_8_4,input_18_9_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_6_5" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[6][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_5,input_18_1_5,input_18_2_5,input_18_3_5,input_18_4_5,input_18_5_5,input_18_6_5,input_18_7_5,input_18_8_5,input_18_9_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_6_6" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[6][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_6,input_18_1_6,input_18_2_6,input_18_3_6,input_18_4_6,input_18_5_6,input_18_6_6,input_18_7_6,input_18_8_6,input_18_9_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_6_7" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[6][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_7,input_18_1_7,input_18_2_7,input_18_3_7,input_18_4_7,input_18_5_7,input_18_6_7,input_18_7_7,input_18_8_7,input_18_9_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_6_8" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[6][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_8,input_18_1_8,input_18_2_8,input_18_3_8,input_18_4_8,input_18_5_8,input_18_6_8,input_18_7_8,input_18_8_8,input_18_9_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_6_9" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[6][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_9,input_18_1_9,input_18_2_9,input_18_3_9,input_18_4_9,input_18_5_9,input_18_6_9,input_18_7_9,input_18_8_9,input_18_9_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_6_10" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[6][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_10,input_18_1_10,input_18_2_10,input_18_3_10,input_18_4_10,input_18_5_10,input_18_6_10,input_18_7_10,input_18_8_10,input_18_9_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_6_11" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[6][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_11,input_18_1_11,input_18_2_11,input_18_3_11,input_18_4_11,input_18_5_11,input_18_6_11,input_18_7_11,input_18_8_11,input_18_9_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_6_12" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[6][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_12,input_18_1_12,input_18_2_12,input_18_3_12,input_18_4_12,input_18_5_12,input_18_6_12,input_18_7_12,input_18_8_12,input_18_9_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_6_13" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[6][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_13,input_18_1_13,input_18_2_13,input_18_3_13,input_18_4_13,input_18_5_13,input_18_6_13,input_18_7_13,input_18_8_13,input_18_9_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_6_14" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[6][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_14,input_18_1_14,input_18_2_14,input_18_3_14,input_18_4_14,input_18_5_14,input_18_6_14,input_18_7_14,input_18_8_14,input_18_9_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_6_15" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[6][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_15,input_18_1_15,input_18_2_15,input_18_3_15,input_18_4_15,input_18_5_15,input_18_6_15,input_18_7_15,input_18_8_15,input_18_9_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_6_16" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[6][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_16,input_18_1_16,input_18_2_16,input_18_3_16,input_18_4_16,input_18_5_16,input_18_6_16,input_18_7_16,input_18_8_16,input_18_9_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_6_17" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[6][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_17,input_18_1_17,input_18_2_17,input_18_3_17,input_18_4_17,input_18_5_17,input_18_6_17,input_18_7_17,input_18_8_17,input_18_9_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_6_18" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[6][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_18,input_18_1_18,input_18_2_18,input_18_3_18,input_18_4_18,input_18_5_18,input_18_6_18,input_18_7_18,input_18_8_18,input_18_9_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_6_19" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[6][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_19,input_18_1_19,input_18_2_19,input_18_3_19,input_18_4_19,input_18_5_19,input_18_6_19,input_18_7_19,input_18_8_19,input_18_9_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_6_20" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[6][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_20,input_18_1_20,input_18_2_20,input_18_3_20,input_18_4_20,input_18_5_20,input_18_6_20,input_18_7_20,input_18_8_20,input_18_9_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_6_21" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[6][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_21,input_18_1_21,input_18_2_21,input_18_3_21,input_18_4_21,input_18_5_21,input_18_6_21,input_18_7_21,input_18_8_21,input_18_9_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_6_22" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[6][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_22,input_18_1_22,input_18_2_22,input_18_3_22,input_18_4_22,input_18_5_22,input_18_6_22,input_18_7_22,input_18_8_22,input_18_9_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_6_23" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[6][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_23,input_18_1_23,input_18_2_23,input_18_3_23,input_18_4_23,input_18_5_23,input_18_6_23,input_18_7_23,input_18_8_23,input_18_9_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Uduthurai </th>
<td align="center" class="form-matrix-values">
<input id="input_18_7_0" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[7][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_0,input_18_1_0,input_18_2_0,input_18_3_0,input_18_4_0,input_18_5_0,input_18_6_0,input_18_7_0,input_18_8_0,input_18_9_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_7_1" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[7][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_1,input_18_1_1,input_18_2_1,input_18_3_1,input_18_4_1,input_18_5_1,input_18_6_1,input_18_7_1,input_18_8_1,input_18_9_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_7_2" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[7][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_2,input_18_1_2,input_18_2_2,input_18_3_2,input_18_4_2,input_18_5_2,input_18_6_2,input_18_7_2,input_18_8_2,input_18_9_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_7_3" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[7][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_3,input_18_1_3,input_18_2_3,input_18_3_3,input_18_4_3,input_18_5_3,input_18_6_3,input_18_7_3,input_18_8_3,input_18_9_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_7_4" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[7][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_4,input_18_1_4,input_18_2_4,input_18_3_4,input_18_4_4,input_18_5_4,input_18_6_4,input_18_7_4,input_18_8_4,input_18_9_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_7_5" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[7][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_5,input_18_1_5,input_18_2_5,input_18_3_5,input_18_4_5,input_18_5_5,input_18_6_5,input_18_7_5,input_18_8_5,input_18_9_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_7_6" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[7][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_6,input_18_1_6,input_18_2_6,input_18_3_6,input_18_4_6,input_18_5_6,input_18_6_6,input_18_7_6,input_18_8_6,input_18_9_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_7_7" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[7][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_7,input_18_1_7,input_18_2_7,input_18_3_7,input_18_4_7,input_18_5_7,input_18_6_7,input_18_7_7,input_18_8_7,input_18_9_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_7_8" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[7][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_8,input_18_1_8,input_18_2_8,input_18_3_8,input_18_4_8,input_18_5_8,input_18_6_8,input_18_7_8,input_18_8_8,input_18_9_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_7_9" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[7][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_9,input_18_1_9,input_18_2_9,input_18_3_9,input_18_4_9,input_18_5_9,input_18_6_9,input_18_7_9,input_18_8_9,input_18_9_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_7_10" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[7][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_10,input_18_1_10,input_18_2_10,input_18_3_10,input_18_4_10,input_18_5_10,input_18_6_10,input_18_7_10,input_18_8_10,input_18_9_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_7_11" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[7][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_11,input_18_1_11,input_18_2_11,input_18_3_11,input_18_4_11,input_18_5_11,input_18_6_11,input_18_7_11,input_18_8_11,input_18_9_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_7_12" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[7][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_12,input_18_1_12,input_18_2_12,input_18_3_12,input_18_4_12,input_18_5_12,input_18_6_12,input_18_7_12,input_18_8_12,input_18_9_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_7_13" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[7][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_13,input_18_1_13,input_18_2_13,input_18_3_13,input_18_4_13,input_18_5_13,input_18_6_13,input_18_7_13,input_18_8_13,input_18_9_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_7_14" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[7][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_14,input_18_1_14,input_18_2_14,input_18_3_14,input_18_4_14,input_18_5_14,input_18_6_14,input_18_7_14,input_18_8_14,input_18_9_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_7_15" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[7][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_15,input_18_1_15,input_18_2_15,input_18_3_15,input_18_4_15,input_18_5_15,input_18_6_15,input_18_7_15,input_18_8_15,input_18_9_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_7_16" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[7][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_16,input_18_1_16,input_18_2_16,input_18_3_16,input_18_4_16,input_18_5_16,input_18_6_16,input_18_7_16,input_18_8_16,input_18_9_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_7_17" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[7][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_17,input_18_1_17,input_18_2_17,input_18_3_17,input_18_4_17,input_18_5_17,input_18_6_17,input_18_7_17,input_18_8_17,input_18_9_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_7_18" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[7][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_18,input_18_1_18,input_18_2_18,input_18_3_18,input_18_4_18,input_18_5_18,input_18_6_18,input_18_7_18,input_18_8_18,input_18_9_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_7_19" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[7][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_19,input_18_1_19,input_18_2_19,input_18_3_19,input_18_4_19,input_18_5_19,input_18_6_19,input_18_7_19,input_18_8_19,input_18_9_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_7_20" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[7][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_20,input_18_1_20,input_18_2_20,input_18_3_20,input_18_4_20,input_18_5_20,input_18_6_20,input_18_7_20,input_18_8_20,input_18_9_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_7_21" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[7][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_21,input_18_1_21,input_18_2_21,input_18_3_21,input_18_4_21,input_18_5_21,input_18_6_21,input_18_7_21,input_18_8_21,input_18_9_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_7_22" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[7][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_22,input_18_1_22,input_18_2_22,input_18_3_22,input_18_4_22,input_18_5_22,input_18_6_22,input_18_7_22,input_18_8_22,input_18_9_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_7_23" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[7][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_23,input_18_1_23,input_18_2_23,input_18_3_23,input_18_4_23,input_18_5_23,input_18_6_23,input_18_7_23,input_18_8_23,input_18_9_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Valvettithurai </th>
<td align="center" class="form-matrix-values">
<input id="input_18_8_0" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[8][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_0,input_18_1_0,input_18_2_0,input_18_3_0,input_18_4_0,input_18_5_0,input_18_6_0,input_18_7_0,input_18_8_0,input_18_9_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_8_1" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[8][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_1,input_18_1_1,input_18_2_1,input_18_3_1,input_18_4_1,input_18_5_1,input_18_6_1,input_18_7_1,input_18_8_1,input_18_9_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_8_2" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[8][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_2,input_18_1_2,input_18_2_2,input_18_3_2,input_18_4_2,input_18_5_2,input_18_6_2,input_18_7_2,input_18_8_2,input_18_9_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_8_3" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[8][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_3,input_18_1_3,input_18_2_3,input_18_3_3,input_18_4_3,input_18_5_3,input_18_6_3,input_18_7_3,input_18_8_3,input_18_9_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_8_4" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[8][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_4,input_18_1_4,input_18_2_4,input_18_3_4,input_18_4_4,input_18_5_4,input_18_6_4,input_18_7_4,input_18_8_4,input_18_9_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_8_5" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[8][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_5,input_18_1_5,input_18_2_5,input_18_3_5,input_18_4_5,input_18_5_5,input_18_6_5,input_18_7_5,input_18_8_5,input_18_9_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_8_6" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[8][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_6,input_18_1_6,input_18_2_6,input_18_3_6,input_18_4_6,input_18_5_6,input_18_6_6,input_18_7_6,input_18_8_6,input_18_9_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_8_7" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[8][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_7,input_18_1_7,input_18_2_7,input_18_3_7,input_18_4_7,input_18_5_7,input_18_6_7,input_18_7_7,input_18_8_7,input_18_9_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_8_8" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[8][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_8,input_18_1_8,input_18_2_8,input_18_3_8,input_18_4_8,input_18_5_8,input_18_6_8,input_18_7_8,input_18_8_8,input_18_9_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_8_9" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[8][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_9,input_18_1_9,input_18_2_9,input_18_3_9,input_18_4_9,input_18_5_9,input_18_6_9,input_18_7_9,input_18_8_9,input_18_9_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_8_10" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[8][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_10,input_18_1_10,input_18_2_10,input_18_3_10,input_18_4_10,input_18_5_10,input_18_6_10,input_18_7_10,input_18_8_10,input_18_9_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_8_11" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[8][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_11,input_18_1_11,input_18_2_11,input_18_3_11,input_18_4_11,input_18_5_11,input_18_6_11,input_18_7_11,input_18_8_11,input_18_9_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_8_12" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[8][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_12,input_18_1_12,input_18_2_12,input_18_3_12,input_18_4_12,input_18_5_12,input_18_6_12,input_18_7_12,input_18_8_12,input_18_9_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_8_13" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[8][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_13,input_18_1_13,input_18_2_13,input_18_3_13,input_18_4_13,input_18_5_13,input_18_6_13,input_18_7_13,input_18_8_13,input_18_9_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_8_14" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[8][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_14,input_18_1_14,input_18_2_14,input_18_3_14,input_18_4_14,input_18_5_14,input_18_6_14,input_18_7_14,input_18_8_14,input_18_9_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_8_15" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[8][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_15,input_18_1_15,input_18_2_15,input_18_3_15,input_18_4_15,input_18_5_15,input_18_6_15,input_18_7_15,input_18_8_15,input_18_9_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_8_16" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[8][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_16,input_18_1_16,input_18_2_16,input_18_3_16,input_18_4_16,input_18_5_16,input_18_6_16,input_18_7_16,input_18_8_16,input_18_9_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_8_17" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[8][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_17,input_18_1_17,input_18_2_17,input_18_3_17,input_18_4_17,input_18_5_17,input_18_6_17,input_18_7_17,input_18_8_17,input_18_9_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_8_18" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[8][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_18,input_18_1_18,input_18_2_18,input_18_3_18,input_18_4_18,input_18_5_18,input_18_6_18,input_18_7_18,input_18_8_18,input_18_9_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_8_19" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[8][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_19,input_18_1_19,input_18_2_19,input_18_3_19,input_18_4_19,input_18_5_19,input_18_6_19,input_18_7_19,input_18_8_19,input_18_9_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_8_20" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[8][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_20,input_18_1_20,input_18_2_20,input_18_3_20,input_18_4_20,input_18_5_20,input_18_6_20,input_18_7_20,input_18_8_20,input_18_9_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_8_21" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[8][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_21,input_18_1_21,input_18_2_21,input_18_3_21,input_18_4_21,input_18_5_21,input_18_6_21,input_18_7_21,input_18_8_21,input_18_9_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_8_22" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[8][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_22,input_18_1_22,input_18_2_22,input_18_3_22,input_18_4_22,input_18_5_22,input_18_6_22,input_18_7_22,input_18_8_22,input_18_9_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_8_23" type="number" class="form-number-input form-dropdown" name="q18_phiArea18[8][]" style="width:60px" size="5" onchange="pointPedroTotal(input_18_0_23,input_18_1_23,input_18_2_23,input_18_3_23,input_18_4_23,input_18_5_23,input_18_6_23,input_18_7_23,input_18_8_23,input_18_9_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Total </th>
<td align="center" class="form-matrix-values">
<input id="input_18_9_0" type="text" class="form-number-input form-dropdown" name="q18_phiArea18[9][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_9_1" type="text" class="form-number-input form-dropdown" name="q18_phiArea18[9][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_9_2" type="text" class="form-number-input form-dropdown" name="q18_phiArea18[9][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_9_3" type="text" class="form-number-input form-dropdown" name="q18_phiArea18[9][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_9_4" type="text" class="form-number-input form-dropdown" name="q18_phiArea18[9][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_9_5" type="text" class="form-number-input form-dropdown" name="q18_phiArea18[9][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_9_6" type="text" class="form-number-input form-dropdown" name="q18_phiArea18[9][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_9_7" type="text" class="form-number-input form-dropdown" name="q18_phiArea18[9][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_9_8" type="text" class="form-number-input form-dropdown" name="q18_phiArea18[9][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_9_9" type="text" class="form-number-input form-dropdown" name="q18_phiArea18[9][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_9_10" type="text" class="form-number-input form-dropdown" name="q18_phiArea18[9][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_9_11" type="text" class="form-number-input form-dropdown" name="q18_phiArea18[9][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_9_12" type="text" class="form-number-input form-dropdown" name="q18_phiArea18[9][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_9_13" type="text" class="form-number-input form-dropdown" name="q18_phiArea18[9][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_9_14" type="text" class="form-number-input form-dropdown" name="q18_phiArea18[9][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_9_15" type="text" class="form-number-input form-dropdown" name="q18_phiArea18[9][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_9_16" type="text" class="form-number-input form-dropdown" name="q18_phiArea18[9][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_9_17" type="text" class="form-number-input form-dropdown" name="q18_phiArea18[9][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_9_18" type="text" class="form-number-input form-dropdown" name="q18_phiArea18[9][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_9_19" type="text" class="form-number-input form-dropdown" name="q18_phiArea18[9][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_9_20" type="text" class="form-number-input form-dropdown" name="q18_phiArea18[9][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_9_21" type="text" class="form-number-input form-dropdown" name="q18_phiArea18[9][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_9_22" type="text" class="form-number-input form-dropdown" name="q18_phiArea18[9][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_18_9_23" type="text" class="form-number-input form-dropdown" name="q18_phiArea18[9][]" style="width:60px" size="5" disabled/>
</td>
</tr>
</table>
</div>
</li>
<li class="form-line form-field-hidden" style="display:none;" data-type="control_matrix" id="id_19">
<label class="form-label form-label-left form-label-auto" id="label_19" for="input_19">PHI Area Vs Diseases </label>
<div id="cid_19" class="form-input jf-required">
<table summary="" cellpadding="4" cellspacing="0" class="form-matrix-table">
<tr>
<th style="border:none">&nbsp; </th>
<th class="form-matrix-column-headers form-matrix-column_0">Internationally Notifiable Diseases(Cholera, Plague, Yellow Fever)</th>
<th class="form-matrix-column-headers form-matrix-column_1">Polio Myelitis / Acute Flaccid Paralysis </th>
<th class="form-matrix-column-headers form-matrix-column_2">Chicken Pox </th>
<th class="form-matrix-column-headers form-matrix-column_3">Dengue Fever/ Dengue Hemorrhagic Fever </th>
<th class="form-matrix-column-headers form-matrix-column_4">Diphtheria </th>
<th class="form-matrix-column-headers form-matrix-column_5">Dysentery </th>
<th class="form-matrix-column-headers form-matrix-column_6">Encephalitis (including Japanese Encephalitis) </th>
<th class="form-matrix-column-headers form-matrix-column_7">Enteric Fever </th>
<th class="form-matrix-column-headers form-matrix-column_8">Food Poisoning </th>
<th class="form-matrix-column-headers form-matrix-column_9">Human Rabies </th>
<th class="form-matrix-column-headers form-matrix-column_10">Leptospirosis </th>
<th class="form-matrix-column-headers form-matrix-column_11">Malaria </th>
<th class="form-matrix-column-headers form-matrix-column_12">Measles </th>
<th class="form-matrix-column-headers form-matrix-column_13">Meningitis </th>
<th class="form-matrix-column-headers form-matrix-column_14">Mumps </th>
<th class="form-matrix-column-headers form-matrix-column_15">Rubella </th>
<th class="form-matrix-column-headers form-matrix-column_16">Congenital Rubella Syndrome </th>
<th class="form-matrix-column-headers form-matrix-column_17">Simple continued fever </th>
<th class="form-matrix-column-headers form-matrix-column_18">Tetanus </th>
<th class="form-matrix-column-headers form-matrix-column_19">Neonatal tetanus </th>
<th class="form-matrix-column-headers form-matrix-column_20">Typhus Fever </th>
<th class="form-matrix-column-headers form-matrix-column_21">Viral Hepatitis </th>
<th class="form-matrix-column-headers form-matrix-column_22">Whooping cough </th>
<th class="form-matrix-column-headers form-matrix-column_23">Tuberculosis </th>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Anaikkodai </th>
<td align="center" class="form-matrix-values">
<input id="input_19_0_0" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[0][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_0,input_19_1_0,input_19_2_0,input_19_3_0,input_19_4_0,input_19_5_0,input_19_6_0,input_19_7_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_0_1" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[0][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_1,input_19_1_1,input_19_2_1,input_19_3_1,input_19_4_1,input_19_5_1,input_19_6_1,input_19_7_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_0_2" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[0][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_2,input_19_1_2,input_19_2_2,input_19_3_2,input_19_4_2,input_19_5_2,input_19_6_2,input_19_7_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_0_3" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[0][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_3,input_19_1_3,input_19_2_3,input_19_3_3,input_19_4_3,input_19_5_3,input_19_6_3,input_19_7_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_0_4" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[0][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_4,input_19_1_4,input_19_2_4,input_19_3_4,input_19_4_4,input_19_5_4,input_19_6_4,input_19_7_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_0_5" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[0][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_5,input_19_1_5,input_19_2_5,input_19_3_5,input_19_4_5,input_19_5_5,input_19_6_5,input_19_7_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_0_6" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[0][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_6,input_19_1_6,input_19_2_6,input_19_3_6,input_19_4_6,input_19_5_6,input_19_6_6,input_19_7_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_0_7" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[0][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_7,input_19_1_7,input_19_2_7,input_19_3_7,input_19_4_7,input_19_5_7,input_19_6_7,input_19_7_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_0_8" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[0][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_8,input_19_1_8,input_19_2_8,input_19_3_8,input_19_4_8,input_19_5_8,input_19_6_8,input_19_7_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_0_9" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[0][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_9,input_19_1_9,input_19_2_9,input_19_3_9,input_19_4_9,input_19_5_9,input_19_6_9,input_19_7_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_0_10" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[0][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_10,input_19_1_10,input_19_2_10,input_19_3_10,input_19_4_10,input_19_5_10,input_19_6_10,input_19_7_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_0_11" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[0][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_11,input_19_1_11,input_19_2_11,input_19_3_11,input_19_4_11,input_19_5_11,input_19_6_11,input_19_7_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_0_12" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[0][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_12,input_19_1_12,input_19_2_12,input_19_3_12,input_19_4_12,input_19_5_12,input_19_6_12,input_19_7_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_0_13" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[0][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_13,input_19_1_13,input_19_2_13,input_19_3_13,input_19_4_13,input_19_5_13,input_19_6_13,input_19_7_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_0_14" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[0][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_14,input_19_1_14,input_19_2_14,input_19_3_14,input_19_4_14,input_19_5_14,input_19_6_14,input_19_7_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_0_15" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[0][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_15,input_19_1_15,input_19_2_15,input_19_3_15,input_19_4_15,input_19_5_15,input_19_6_15,input_19_7_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_0_16" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[0][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_16,input_19_1_16,input_19_2_16,input_19_3_16,input_19_4_16,input_19_5_16,input_19_6_16,input_19_7_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_0_17" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[0][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_17,input_19_1_17,input_19_2_17,input_19_3_17,input_19_4_17,input_19_5_17,input_19_6_17,input_19_7_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_0_18" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[0][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_18,input_19_1_18,input_19_2_18,input_19_3_18,input_19_4_18,input_19_5_18,input_19_6_18,input_19_7_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_0_19" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[0][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_19,input_19_1_19,input_19_2_19,input_19_3_19,input_19_4_19,input_19_5_19,input_19_6_19,input_19_7_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_0_20" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[0][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_20,input_19_1_20,input_19_2_20,input_19_3_20,input_19_4_20,input_19_5_20,input_19_6_20,input_19_7_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_0_21" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[0][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_21,input_19_1_21,input_19_2_21,input_19_3_21,input_19_4_21,input_19_5_21,input_19_6_21,input_19_7_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_0_22" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[0][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_22,input_19_1_22,input_19_2_22,input_19_3_22,input_19_4_22,input_19_5_22,input_19_6_22,input_19_7_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_0_23" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[0][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_23,input_19_1_23,input_19_2_23,input_19_3_23,input_19_4_23,input_19_5_23,input_19_6_23,input_19_7_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Ilvalai </th>
<td align="center" class="form-matrix-values">
<input id="input_19_1_0" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[1][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_0,input_19_1_0,input_19_2_0,input_19_3_0,input_19_4_0,input_19_5_0,input_19_6_0,input_19_7_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_1_1" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[1][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_1,input_19_1_1,input_19_2_1,input_19_3_1,input_19_4_1,input_19_5_1,input_19_6_1,input_19_7_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_1_2" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[1][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_2,input_19_1_2,input_19_2_2,input_19_3_2,input_19_4_2,input_19_5_2,input_19_6_2,input_19_7_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_1_3" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[1][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_3,input_19_1_3,input_19_2_3,input_19_3_3,input_19_4_3,input_19_5_3,input_19_6_3,input_19_7_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_1_4" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[1][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_4,input_19_1_4,input_19_2_4,input_19_3_4,input_19_4_4,input_19_5_4,input_19_6_4,input_19_7_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_1_5" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[1][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_5,input_19_1_5,input_19_2_5,input_19_3_5,input_19_4_5,input_19_5_5,input_19_6_5,input_19_7_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_1_6" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[1][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_6,input_19_1_6,input_19_2_6,input_19_3_6,input_19_4_6,input_19_5_6,input_19_6_6,input_19_7_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_1_7" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[1][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_7,input_19_1_7,input_19_2_7,input_19_3_7,input_19_4_7,input_19_5_7,input_19_6_7,input_19_7_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_1_8" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[1][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_8,input_19_1_8,input_19_2_8,input_19_3_8,input_19_4_8,input_19_5_8,input_19_6_8,input_19_7_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_1_9" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[1][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_9,input_19_1_9,input_19_2_9,input_19_3_9,input_19_4_9,input_19_5_9,input_19_6_9,input_19_7_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_1_10" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[1][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_10,input_19_1_10,input_19_2_10,input_19_3_10,input_19_4_10,input_19_5_10,input_19_6_10,input_19_7_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_1_11" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[1][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_11,input_19_1_11,input_19_2_11,input_19_3_11,input_19_4_11,input_19_5_11,input_19_6_11,input_19_7_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_1_12" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[1][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_12,input_19_1_12,input_19_2_12,input_19_3_12,input_19_4_12,input_19_5_12,input_19_6_12,input_19_7_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_1_13" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[1][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_13,input_19_1_13,input_19_2_13,input_19_3_13,input_19_4_13,input_19_5_13,input_19_6_13,input_19_7_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_1_14" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[1][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_14,input_19_1_14,input_19_2_14,input_19_3_14,input_19_4_14,input_19_5_14,input_19_6_14,input_19_7_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_1_15" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[1][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_15,input_19_1_15,input_19_2_15,input_19_3_15,input_19_4_15,input_19_5_15,input_19_6_15,input_19_7_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_1_16" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[1][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_16,input_19_1_16,input_19_2_16,input_19_3_16,input_19_4_16,input_19_5_16,input_19_6_16,input_19_7_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_1_17" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[1][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_17,input_19_1_17,input_19_2_17,input_19_3_17,input_19_4_17,input_19_5_17,input_19_6_17,input_19_7_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_1_18" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[1][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_18,input_19_1_18,input_19_2_18,input_19_3_18,input_19_4_18,input_19_5_18,input_19_6_18,input_19_7_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_1_19" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[1][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_19,input_19_1_19,input_19_2_19,input_19_3_19,input_19_4_19,input_19_5_19,input_19_6_19,input_19_7_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_1_20" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[1][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_20,input_19_1_20,input_19_2_20,input_19_3_20,input_19_4_20,input_19_5_20,input_19_6_20,input_19_7_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_1_21" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[1][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_21,input_19_1_21,input_19_2_21,input_19_3_21,input_19_4_21,input_19_5_21,input_19_6_21,input_19_7_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_1_22" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[1][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_22,input_19_1_22,input_19_2_22,input_19_3_22,input_19_4_22,input_19_5_22,input_19_6_22,input_19_7_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_1_23" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[1][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_23,input_19_1_23,input_19_2_23,input_19_3_23,input_19_4_23,input_19_5_23,input_19_6_23,input_19_7_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Manipay </th>
<td align="center" class="form-matrix-values">
<input id="input_19_2_0" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[2][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_0,input_19_1_0,input_19_2_0,input_19_3_0,input_19_4_0,input_19_5_0,input_19_6_0,input_19_7_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_2_1" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[2][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_1,input_19_1_1,input_19_2_1,input_19_3_1,input_19_4_1,input_19_5_1,input_19_6_1,input_19_7_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_2_2" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[2][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_2,input_19_1_2,input_19_2_2,input_19_3_2,input_19_4_2,input_19_5_2,input_19_6_2,input_19_7_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_2_3" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[2][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_3,input_19_1_3,input_19_2_3,input_19_3_3,input_19_4_3,input_19_5_3,input_19_6_3,input_19_7_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_2_4" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[2][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_4,input_19_1_4,input_19_2_4,input_19_3_4,input_19_4_4,input_19_5_4,input_19_6_4,input_19_7_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_2_5" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[2][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_5,input_19_1_5,input_19_2_5,input_19_3_5,input_19_4_5,input_19_5_5,input_19_6_5,input_19_7_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_2_6" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[2][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_6,input_19_1_6,input_19_2_6,input_19_3_6,input_19_4_6,input_19_5_6,input_19_6_6,input_19_7_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_2_7" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[2][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_7,input_19_1_7,input_19_2_7,input_19_3_7,input_19_4_7,input_19_5_7,input_19_6_7,input_19_7_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_2_8" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[2][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_8,input_19_1_8,input_19_2_8,input_19_3_8,input_19_4_8,input_19_5_8,input_19_6_8,input_19_7_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_2_9" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[2][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_9,input_19_1_9,input_19_2_9,input_19_3_9,input_19_4_9,input_19_5_9,input_19_6_9,input_19_7_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_2_10" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[2][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_10,input_19_1_10,input_19_2_10,input_19_3_10,input_19_4_10,input_19_5_10,input_19_6_10,input_19_7_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_2_11" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[2][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_11,input_19_1_11,input_19_2_11,input_19_3_11,input_19_4_11,input_19_5_11,input_19_6_11,input_19_7_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_2_12" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[2][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_12,input_19_1_12,input_19_2_12,input_19_3_12,input_19_4_12,input_19_5_12,input_19_6_12,input_19_7_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_2_13" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[2][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_13,input_19_1_13,input_19_2_13,input_19_3_13,input_19_4_13,input_19_5_13,input_19_6_13,input_19_7_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_2_14" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[2][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_14,input_19_1_14,input_19_2_14,input_19_3_14,input_19_4_14,input_19_5_14,input_19_6_14,input_19_7_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_2_15" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[2][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_15,input_19_1_15,input_19_2_15,input_19_3_15,input_19_4_15,input_19_5_15,input_19_6_15,input_19_7_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_2_16" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[2][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_16,input_19_1_16,input_19_2_16,input_19_3_16,input_19_4_16,input_19_5_16,input_19_6_16,input_19_7_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_2_17" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[2][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_17,input_19_1_17,input_19_2_17,input_19_3_17,input_19_4_17,input_19_5_17,input_19_6_17,input_19_7_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_2_18" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[2][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_18,input_19_1_18,input_19_2_18,input_19_3_18,input_19_4_18,input_19_5_18,input_19_6_18,input_19_7_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_2_19" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[2][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_19,input_19_1_19,input_19_2_19,input_19_3_19,input_19_4_19,input_19_5_19,input_19_6_19,input_19_7_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_2_20" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[2][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_20,input_19_1_20,input_19_2_20,input_19_3_20,input_19_4_20,input_19_5_20,input_19_6_20,input_19_7_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_2_21" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[2][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_21,input_19_1_21,input_19_2_21,input_19_3_21,input_19_4_21,input_19_5_21,input_19_6_21,input_19_7_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_2_22" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[2][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_22,input_19_1_22,input_19_2_22,input_19_3_22,input_19_4_22,input_19_5_22,input_19_6_22,input_19_7_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_2_23" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[2][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_23,input_19_1_23,input_19_2_23,input_19_3_23,input_19_4_23,input_19_5_23,input_19_6_23,input_19_7_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Navaly </th>
<td align="center" class="form-matrix-values">
<input id="input_19_3_0" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[3][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_0,input_19_1_0,input_19_2_0,input_19_3_0,input_19_4_0,input_19_5_0,input_19_6_0,input_19_7_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_3_1" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[3][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_1,input_19_1_1,input_19_2_1,input_19_3_1,input_19_4_1,input_19_5_1,input_19_6_1,input_19_7_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_3_2" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[3][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_2,input_19_1_2,input_19_2_2,input_19_3_2,input_19_4_2,input_19_5_2,input_19_6_2,input_19_7_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_3_3" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[3][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_3,input_19_1_3,input_19_2_3,input_19_3_3,input_19_4_3,input_19_5_3,input_19_6_3,input_19_7_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_3_4" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[3][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_4,input_19_1_4,input_19_2_4,input_19_3_4,input_19_4_4,input_19_5_4,input_19_6_4,input_19_7_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_3_5" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[3][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_5,input_19_1_5,input_19_2_5,input_19_3_5,input_19_4_5,input_19_5_5,input_19_6_5,input_19_7_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_3_6" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[3][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_6,input_19_1_6,input_19_2_6,input_19_3_6,input_19_4_6,input_19_5_6,input_19_6_6,input_19_7_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_3_7" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[3][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_7,input_19_1_7,input_19_2_7,input_19_3_7,input_19_4_7,input_19_5_7,input_19_6_7,input_19_7_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_3_8" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[3][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_8,input_19_1_8,input_19_2_8,input_19_3_8,input_19_4_8,input_19_5_8,input_19_6_8,input_19_7_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_3_9" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[3][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_9,input_19_1_9,input_19_2_9,input_19_3_9,input_19_4_9,input_19_5_9,input_19_6_9,input_19_7_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_3_10" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[3][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_10,input_19_1_10,input_19_2_10,input_19_3_10,input_19_4_10,input_19_5_10,input_19_6_10,input_19_7_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_3_11" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[3][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_11,input_19_1_11,input_19_2_11,input_19_3_11,input_19_4_11,input_19_5_11,input_19_6_11,input_19_7_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_3_12" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[3][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_12,input_19_1_12,input_19_2_12,input_19_3_12,input_19_4_12,input_19_5_12,input_19_6_12,input_19_7_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_3_13" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[3][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_13,input_19_1_13,input_19_2_13,input_19_3_13,input_19_4_13,input_19_5_13,input_19_6_13,input_19_7_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_3_14" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[3][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_14,input_19_1_14,input_19_2_14,input_19_3_14,input_19_4_14,input_19_5_14,input_19_6_14,input_19_7_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_3_15" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[3][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_15,input_19_1_15,input_19_2_15,input_19_3_15,input_19_4_15,input_19_5_15,input_19_6_15,input_19_7_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_3_16" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[3][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_16,input_19_1_16,input_19_2_16,input_19_3_16,input_19_4_16,input_19_5_16,input_19_6_16,input_19_7_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_3_17" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[3][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_17,input_19_1_17,input_19_2_17,input_19_3_17,input_19_4_17,input_19_5_17,input_19_6_17,input_19_7_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_3_18" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[3][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_18,input_19_1_18,input_19_2_18,input_19_3_18,input_19_4_18,input_19_5_18,input_19_6_18,input_19_7_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_3_19" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[3][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_19,input_19_1_19,input_19_2_19,input_19_3_19,input_19_4_19,input_19_5_19,input_19_6_19,input_19_7_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_3_20" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[3][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_20,input_19_1_20,input_19_2_20,input_19_3_20,input_19_4_20,input_19_5_20,input_19_6_20,input_19_7_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_3_21" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[3][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_21,input_19_1_21,input_19_2_21,input_19_3_21,input_19_4_21,input_19_5_21,input_19_6_21,input_19_7_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_3_22" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[3][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_22,input_19_1_22,input_19_2_22,input_19_3_22,input_19_4_22,input_19_5_22,input_19_6_22,input_19_7_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_3_23" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[3][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_23,input_19_1_23,input_19_2_23,input_19_3_23,input_19_4_23,input_19_5_23,input_19_6_23,input_19_7_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Pandertharrippu </th>
<td align="center" class="form-matrix-values">
<input id="input_19_4_0" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[4][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_0,input_19_1_0,input_19_2_0,input_19_3_0,input_19_4_0,input_19_5_0,input_19_6_0,input_19_7_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_4_1" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[4][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_1,input_19_1_1,input_19_2_1,input_19_3_1,input_19_4_1,input_19_5_1,input_19_6_1,input_19_7_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_4_2" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[4][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_2,input_19_1_2,input_19_2_2,input_19_3_2,input_19_4_2,input_19_5_2,input_19_6_2,input_19_7_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_4_3" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[4][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_3,input_19_1_3,input_19_2_3,input_19_3_3,input_19_4_3,input_19_5_3,input_19_6_3,input_19_7_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_4_4" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[4][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_4,input_19_1_4,input_19_2_4,input_19_3_4,input_19_4_4,input_19_5_4,input_19_6_4,input_19_7_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_4_5" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[4][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_5,input_19_1_5,input_19_2_5,input_19_3_5,input_19_4_5,input_19_5_5,input_19_6_5,input_19_7_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_4_6" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[4][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_6,input_19_1_6,input_19_2_6,input_19_3_6,input_19_4_6,input_19_5_6,input_19_6_6,input_19_7_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_4_7" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[4][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_7,input_19_1_7,input_19_2_7,input_19_3_7,input_19_4_7,input_19_5_7,input_19_6_7,input_19_7_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_4_8" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[4][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_8,input_19_1_8,input_19_2_8,input_19_3_8,input_19_4_8,input_19_5_8,input_19_6_8,input_19_7_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_4_9" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[4][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_9,input_19_1_9,input_19_2_9,input_19_3_9,input_19_4_9,input_19_5_9,input_19_6_9,input_19_7_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_4_10" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[4][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_10,input_19_1_10,input_19_2_10,input_19_3_10,input_19_4_10,input_19_5_10,input_19_6_10,input_19_7_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_4_11" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[4][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_11,input_19_1_11,input_19_2_11,input_19_3_11,input_19_4_11,input_19_5_11,input_19_6_11,input_19_7_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_4_12" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[4][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_12,input_19_1_12,input_19_2_12,input_19_3_12,input_19_4_12,input_19_5_12,input_19_6_12,input_19_7_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_4_13" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[4][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_13,input_19_1_13,input_19_2_13,input_19_3_13,input_19_4_13,input_19_5_13,input_19_6_13,input_19_7_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_4_14" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[4][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_14,input_19_1_14,input_19_2_14,input_19_3_14,input_19_4_14,input_19_5_14,input_19_6_14,input_19_7_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_4_15" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[4][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_15,input_19_1_15,input_19_2_15,input_19_3_15,input_19_4_15,input_19_5_15,input_19_6_15,input_19_7_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_4_16" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[4][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_16,input_19_1_16,input_19_2_16,input_19_3_16,input_19_4_16,input_19_5_16,input_19_6_16,input_19_7_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_4_17" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[4][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_17,input_19_1_17,input_19_2_17,input_19_3_17,input_19_4_17,input_19_5_17,input_19_6_17,input_19_7_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_4_18" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[4][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_18,input_19_1_18,input_19_2_18,input_19_3_18,input_19_4_18,input_19_5_18,input_19_6_18,input_19_7_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_4_19" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[4][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_19,input_19_1_19,input_19_2_19,input_19_3_19,input_19_4_19,input_19_5_19,input_19_6_19,input_19_7_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_4_20" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[4][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_20,input_19_1_20,input_19_2_20,input_19_3_20,input_19_4_20,input_19_5_20,input_19_6_20,input_19_7_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_4_21" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[4][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_21,input_19_1_21,input_19_2_21,input_19_3_21,input_19_4_21,input_19_5_21,input_19_6_21,input_19_7_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_4_22" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[4][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_22,input_19_1_22,input_19_2_22,input_19_3_22,input_19_4_22,input_19_5_22,input_19_6_22,input_19_7_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_4_23" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[4][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_23,input_19_1_23,input_19_2_23,input_19_3_23,input_19_4_23,input_19_5_23,input_19_6_23,input_19_7_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Sandilipay </th>
<td align="center" class="form-matrix-values">
<input id="input_19_5_0" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[5][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_0,input_19_1_0,input_19_2_0,input_19_3_0,input_19_4_0,input_19_5_0,input_19_6_0,input_19_7_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_5_1" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[5][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_1,input_19_1_1,input_19_2_1,input_19_3_1,input_19_4_1,input_19_5_1,input_19_6_1,input_19_7_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_5_2" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[5][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_2,input_19_1_2,input_19_2_2,input_19_3_2,input_19_4_2,input_19_5_2,input_19_6_2,input_19_7_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_5_3" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[5][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_3,input_19_1_3,input_19_2_3,input_19_3_3,input_19_4_3,input_19_5_3,input_19_6_3,input_19_7_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_5_4" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[5][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_4,input_19_1_4,input_19_2_4,input_19_3_4,input_19_4_4,input_19_5_4,input_19_6_4,input_19_7_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_5_5" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[5][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_5,input_19_1_5,input_19_2_5,input_19_3_5,input_19_4_5,input_19_5_5,input_19_6_5,input_19_7_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_5_6" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[5][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_6,input_19_1_6,input_19_2_6,input_19_3_6,input_19_4_6,input_19_5_6,input_19_6_6,input_19_7_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_5_7" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[5][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_7,input_19_1_7,input_19_2_7,input_19_3_7,input_19_4_7,input_19_5_7,input_19_6_7,input_19_7_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_5_8" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[5][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_8,input_19_1_8,input_19_2_8,input_19_3_8,input_19_4_8,input_19_5_8,input_19_6_8,input_19_7_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_5_9" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[5][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_9,input_19_1_9,input_19_2_9,input_19_3_9,input_19_4_9,input_19_5_9,input_19_6_9,input_19_7_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_5_10" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[5][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_10,input_19_1_10,input_19_2_10,input_19_3_10,input_19_4_10,input_19_5_10,input_19_6_10,input_19_7_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_5_11" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[5][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_11,input_19_1_11,input_19_2_11,input_19_3_11,input_19_4_11,input_19_5_11,input_19_6_11,input_19_7_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_5_12" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[5][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_12,input_19_1_12,input_19_2_12,input_19_3_12,input_19_4_12,input_19_5_12,input_19_6_12,input_19_7_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_5_13" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[5][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_13,input_19_1_13,input_19_2_13,input_19_3_13,input_19_4_13,input_19_5_13,input_19_6_13,input_19_7_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_5_14" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[5][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_14,input_19_1_14,input_19_2_14,input_19_3_14,input_19_4_14,input_19_5_14,input_19_6_14,input_19_7_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_5_15" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[5][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_15,input_19_1_15,input_19_2_15,input_19_3_15,input_19_4_15,input_19_5_15,input_19_6_15,input_19_7_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_5_16" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[5][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_16,input_19_1_16,input_19_2_16,input_19_3_16,input_19_4_16,input_19_5_16,input_19_6_16,input_19_7_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_5_17" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[5][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_17,input_19_1_17,input_19_2_17,input_19_3_17,input_19_4_17,input_19_5_17,input_19_6_17,input_19_7_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_5_18" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[5][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_18,input_19_1_18,input_19_2_18,input_19_3_18,input_19_4_18,input_19_5_18,input_19_6_18,input_19_7_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_5_19" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[5][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_19,input_19_1_19,input_19_2_19,input_19_3_19,input_19_4_19,input_19_5_19,input_19_6_19,input_19_7_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_5_20" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[5][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_20,input_19_1_20,input_19_2_20,input_19_3_20,input_19_4_20,input_19_5_20,input_19_6_20,input_19_7_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_5_21" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[5][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_21,input_19_1_21,input_19_2_21,input_19_3_21,input_19_4_21,input_19_5_21,input_19_6_21,input_19_7_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_5_22" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[5][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_22,input_19_1_22,input_19_2_22,input_19_3_22,input_19_4_22,input_19_5_22,input_19_6_22,input_19_7_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_5_23" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[5][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_23,input_19_1_23,input_19_2_23,input_19_3_23,input_19_4_23,input_19_5_23,input_19_6_23,input_19_7_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Suthumalai </th>
<td align="center" class="form-matrix-values">
<input id="input_19_6_0" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[6][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_0,input_19_1_0,input_19_2_0,input_19_3_0,input_19_4_0,input_19_5_0,input_19_6_0,input_19_7_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_6_1" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[6][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_1,input_19_1_1,input_19_2_1,input_19_3_1,input_19_4_1,input_19_5_1,input_19_6_1,input_19_7_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_6_2" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[6][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_2,input_19_1_2,input_19_2_2,input_19_3_2,input_19_4_2,input_19_5_2,input_19_6_2,input_19_7_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_6_3" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[6][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_3,input_19_1_3,input_19_2_3,input_19_3_3,input_19_4_3,input_19_5_3,input_19_6_3,input_19_7_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_6_4" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[6][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_4,input_19_1_4,input_19_2_4,input_19_3_4,input_19_4_4,input_19_5_4,input_19_6_4,input_19_7_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_6_5" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[6][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_5,input_19_1_5,input_19_2_5,input_19_3_5,input_19_4_5,input_19_5_5,input_19_6_5,input_19_7_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_6_6" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[6][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_6,input_19_1_6,input_19_2_6,input_19_3_6,input_19_4_6,input_19_5_6,input_19_6_6,input_19_7_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_6_7" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[6][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_7,input_19_1_7,input_19_2_7,input_19_3_7,input_19_4_7,input_19_5_7,input_19_6_7,input_19_7_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_6_8" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[6][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_8,input_19_1_8,input_19_2_8,input_19_3_8,input_19_4_8,input_19_5_8,input_19_6_8,input_19_7_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_6_9" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[6][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_9,input_19_1_9,input_19_2_9,input_19_3_9,input_19_4_9,input_19_5_9,input_19_6_9,input_19_7_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_6_10" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[6][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_10,input_19_1_10,input_19_2_10,input_19_3_10,input_19_4_10,input_19_5_10,input_19_6_10,input_19_7_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_6_11" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[6][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_11,input_19_1_11,input_19_2_11,input_19_3_11,input_19_4_11,input_19_5_11,input_19_6_11,input_19_7_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_6_12" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[6][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_12,input_19_1_12,input_19_2_12,input_19_3_12,input_19_4_12,input_19_5_12,input_19_6_12,input_19_7_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_6_13" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[6][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_13,input_19_1_13,input_19_2_13,input_19_3_13,input_19_4_13,input_19_5_13,input_19_6_13,input_19_7_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_6_14" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[6][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_14,input_19_1_14,input_19_2_14,input_19_3_14,input_19_4_14,input_19_5_14,input_19_6_14,input_19_7_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_6_15" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[6][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_15,input_19_1_15,input_19_2_15,input_19_3_15,input_19_4_15,input_19_5_15,input_19_6_15,input_19_7_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_6_16" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[6][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_16,input_19_1_16,input_19_2_16,input_19_3_16,input_19_4_16,input_19_5_16,input_19_6_16,input_19_7_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_6_17" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[6][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_17,input_19_1_17,input_19_2_17,input_19_3_17,input_19_4_17,input_19_5_17,input_19_6_17,input_19_7_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_6_18" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[6][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_18,input_19_1_18,input_19_2_18,input_19_3_18,input_19_4_18,input_19_5_18,input_19_6_18,input_19_7_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_6_19" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[6][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_19,input_19_1_19,input_19_2_19,input_19_3_19,input_19_4_19,input_19_5_19,input_19_6_19,input_19_7_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_6_20" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[6][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_20,input_19_1_20,input_19_2_20,input_19_3_20,input_19_4_20,input_19_5_20,input_19_6_20,input_19_7_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_6_21" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[6][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_21,input_19_1_21,input_19_2_21,input_19_3_21,input_19_4_21,input_19_5_21,input_19_6_21,input_19_7_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_6_22" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[6][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_22,input_19_1_22,input_19_2_22,input_19_3_22,input_19_4_22,input_19_5_22,input_19_6_22,input_19_7_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_6_23" type="number" class="form-number-input form-dropdown" name="q19_phiArea19[6][]" style="width:60px" size="5" onchange="sandilipayTotal(input_19_0_23,input_19_1_23,input_19_2_23,input_19_3_23,input_19_4_23,input_19_5_23,input_19_6_23,input_19_7_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Total </th>
<td align="center" class="form-matrix-values">
<input id="input_19_7_0" type="text" class="form-number-input form-dropdown" name="q19_phiArea19[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_7_1" type="text" class="form-number-input form-dropdown" name="q19_phiArea19[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_7_2" type="text" class="form-number-input form-dropdown" name="q19_phiArea19[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_7_3" type="text" class="form-number-input form-dropdown" name="q19_phiArea19[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_7_4" type="text" class="form-number-input form-dropdown" name="q19_phiArea19[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_7_5" type="text" class="form-number-input form-dropdown" name="q19_phiArea19[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_7_6" type="text" class="form-number-input form-dropdown" name="q19_phiArea19[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_7_7" type="text" class="form-number-input form-dropdown" name="q19_phiArea19[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_7_8" type="text" class="form-number-input form-dropdown" name="q19_phiArea19[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_7_9" type="text" class="form-number-input form-dropdown" name="q19_phiArea19[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_7_10" type="text" class="form-number-input form-dropdown" name="q19_phiArea19[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_7_11" type="text" class="form-number-input form-dropdown" name="q19_phiArea19[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_7_12" type="text" class="form-number-input form-dropdown" name="q19_phiArea19[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_7_13" type="text" class="form-number-input form-dropdown" name="q19_phiArea19[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_7_14" type="text" class="form-number-input form-dropdown" name="q19_phiArea19[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_7_15" type="text" class="form-number-input form-dropdown" name="q19_phiArea19[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_7_16" type="text" class="form-number-input form-dropdown" name="q19_phiArea19[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_7_17" type="text" class="form-number-input form-dropdown" name="q19_phiArea19[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_7_18" type="text" class="form-number-input form-dropdown" name="q19_phiArea19[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_7_19" type="text" class="form-number-input form-dropdown" name="q19_phiArea19[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_7_20" type="text" class="form-number-input form-dropdown" name="q19_phiArea19[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_7_21" type="text" class="form-number-input form-dropdown" name="q19_phiArea19[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_7_22" type="text" class="form-number-input form-dropdown" name="q19_phiArea19[7][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_19_7_23" type="text" class="form-number-input form-dropdown" name="q19_phiArea19[7][]" style="width:60px" size="5" disabled/>
</td>
</tr>
</table>
</div>
</li>
<li class="form-line form-field-hidden" style="display:none;" data-type="control_matrix" id="id_20">
<label class="form-label form-label-left form-label-auto" id="label_20" for="input_20">PHI Area Vs Diseases </label>
<div id="cid_20" class="form-input jf-required">
<table summary="" cellpadding="4" cellspacing="0" class="form-matrix-table">
<tr>
<th style="border:none">&nbsp; </th>
<th class="form-matrix-column-headers form-matrix-column_0">Internationally Notifiable Diseases(Cholera, Plague, Yellow Fever)</th>
<th class="form-matrix-column-headers form-matrix-column_1">Polio Myelitis / Acute Flaccid Paralysis </th>
<th class="form-matrix-column-headers form-matrix-column_2">Chicken Pox </th>
<th class="form-matrix-column-headers form-matrix-column_3">Dengue Fever/ Dengue Hemorrhagic Fever </th>
<th class="form-matrix-column-headers form-matrix-column_4">Diphtheria </th>
<th class="form-matrix-column-headers form-matrix-column_5">Dysentery </th>
<th class="form-matrix-column-headers form-matrix-column_6">Encephalitis (including Japanese Encephalitis) </th>
<th class="form-matrix-column-headers form-matrix-column_7">Enteric Fever </th>
<th class="form-matrix-column-headers form-matrix-column_8">Food Poisoning </th>
<th class="form-matrix-column-headers form-matrix-column_9">Human Rabies </th>
<th class="form-matrix-column-headers form-matrix-column_10">Leptospirosis </th>
<th class="form-matrix-column-headers form-matrix-column_11">Malaria </th>
<th class="form-matrix-column-headers form-matrix-column_12">Measles </th>
<th class="form-matrix-column-headers form-matrix-column_13">Meningitis </th>
<th class="form-matrix-column-headers form-matrix-column_14">Mumps </th>
<th class="form-matrix-column-headers form-matrix-column_15">Rubella </th>
<th class="form-matrix-column-headers form-matrix-column_16">Congenital Rubella Syndrome </th>
<th class="form-matrix-column-headers form-matrix-column_17">Simple continued fever </th>
<th class="form-matrix-column-headers form-matrix-column_18">Tetanus </th>
<th class="form-matrix-column-headers form-matrix-column_19">Neonatal tetanus </th>
<th class="form-matrix-column-headers form-matrix-column_20">Typhus Fever </th>
<th class="form-matrix-column-headers form-matrix-column_21">Viral Hepatitis </th>
<th class="form-matrix-column-headers form-matrix-column_22">Whooping cough </th>
<th class="form-matrix-column-headers form-matrix-column_23">Tuberculosis </th>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Alaveddy </th>
<td align="center" class="form-matrix-values">
<input id="input_20_0_0" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[0][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_0,input_20_1_0,input_20_2_0,input_20_3_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_0_1" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[0][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_1,input_20_1_1,input_20_2_1,input_20_3_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_0_2" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[0][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_2,input_20_1_2,input_20_2_2,input_20_3_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_0_3" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[0][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_3,input_20_1_3,input_20_2_3,input_20_3_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_0_4" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[0][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_4,input_20_1_4,input_20_2_4,input_20_3_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_0_5" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[0][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_5,input_20_1_5,input_20_2_5,input_20_3_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_0_6" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[0][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_6,input_20_1_6,input_20_2_6,input_20_3_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_0_7" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[0][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_7,input_20_1_7,input_20_2_7,input_20_3_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_0_8" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[0][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_8,input_20_1_8,input_20_2_8,input_20_3_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_0_9" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[0][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_9,input_20_1_9,input_20_2_9,input_20_3_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_0_10" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[0][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_10,input_20_1_10,input_20_2_10,input_20_3_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_0_11" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[0][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_11,input_20_1_11,input_20_2_11,input_20_3_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_0_12" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[0][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_12,input_20_1_12,input_20_2_12,input_20_3_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_0_13" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[0][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_13,input_20_1_13,input_20_2_13,input_20_3_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_0_14" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[0][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_14,input_20_1_14,input_20_2_14,input_20_3_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_0_15" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[0][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_15,input_20_1_15,input_20_2_15,input_20_3_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_0_16" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[0][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_16,input_20_1_16,input_20_2_16,input_20_3_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_0_17" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[0][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_17,input_20_1_17,input_20_2_17,input_20_3_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_0_18" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[0][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_18,input_20_1_18,input_20_2_18,input_20_3_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_0_19" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[0][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_19,input_20_1_19,input_20_2_19,input_20_3_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_0_20" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[0][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_20,input_20_1_20,input_20_2_20,input_20_3_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_0_21" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[0][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_21,input_20_1_21,input_20_2_21,input_20_3_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_0_22" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[0][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_22,input_20_1_22,input_20_2_22,input_20_3_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_0_23" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[0][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_23,input_20_1_23,input_20_2_23,input_20_3_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Mallakam </th>
<td align="center" class="form-matrix-values">
<input id="input_20_1_0" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[1][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_0,input_20_1_0,input_20_2_0,input_20_3_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_1_1" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[1][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_1,input_20_1_1,input_20_2_1,input_20_3_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_1_2" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[1][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_2,input_20_1_2,input_20_2_2,input_20_3_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_1_3" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[1][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_3,input_20_1_3,input_20_2_3,input_20_3_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_1_4" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[1][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_4,input_20_1_4,input_20_2_4,input_20_3_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_1_5" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[1][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_5,input_20_1_5,input_20_2_5,input_20_3_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_1_6" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[1][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_6,input_20_1_6,input_20_2_6,input_20_3_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_1_7" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[1][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_7,input_20_1_7,input_20_2_7,input_20_3_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_1_8" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[1][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_8,input_20_1_8,input_20_2_8,input_20_3_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_1_9" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[1][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_9,input_20_1_9,input_20_2_9,input_20_3_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_1_10" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[1][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_10,input_20_1_10,input_20_2_10,input_20_3_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_1_11" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[1][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_11,input_20_1_11,input_20_2_11,input_20_3_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_1_12" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[1][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_12,input_20_1_12,input_20_2_12,input_20_3_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_1_13" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[1][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_13,input_20_1_13,input_20_2_13,input_20_3_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_1_14" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[1][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_14,input_20_1_14,input_20_2_14,input_20_3_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_1_15" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[1][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_15,input_20_1_15,input_20_2_15,input_20_3_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_1_16" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[1][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_16,input_20_1_16,input_20_2_16,input_20_3_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_1_17" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[1][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_17,input_20_1_17,input_20_2_17,input_20_3_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_1_18" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[1][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_18,input_20_1_18,input_20_2_18,input_20_3_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_1_19" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[1][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_19,input_20_1_19,input_20_2_19,input_20_3_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_1_20" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[1][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_20,input_20_1_20,input_20_2_20,input_20_3_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_1_21" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[1][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_21,input_20_1_21,input_20_2_21,input_20_3_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_1_22" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[1][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_22,input_20_1_22,input_20_2_22,input_20_3_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_1_23" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[1][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_23,input_20_1_23,input_20_2_23,input_20_3_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Tellippalai </th>
<td align="center" class="form-matrix-values">
<input id="input_20_2_0" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[2][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_0,input_20_1_0,input_20_2_0,input_20_3_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_2_1" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[2][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_1,input_20_1_1,input_20_2_1,input_20_3_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_2_2" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[2][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_2,input_20_1_2,input_20_2_2,input_20_3_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_2_3" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[2][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_3,input_20_1_3,input_20_2_3,input_20_3_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_2_4" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[2][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_4,input_20_1_4,input_20_2_4,input_20_3_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_2_5" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[2][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_5,input_20_1_5,input_20_2_5,input_20_3_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_2_6" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[2][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_6,input_20_1_6,input_20_2_6,input_20_3_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_2_7" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[2][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_7,input_20_1_7,input_20_2_7,input_20_3_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_2_8" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[2][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_8,input_20_1_8,input_20_2_8,input_20_3_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_2_9" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[2][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_9,input_20_1_9,input_20_2_9,input_20_3_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_2_10" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[2][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_10,input_20_1_10,input_20_2_10,input_20_3_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_2_11" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[2][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_11,input_20_1_11,input_20_2_11,input_20_3_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_2_12" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[2][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_12,input_20_1_12,input_20_2_12,input_20_3_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_2_13" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[2][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_13,input_20_1_13,input_20_2_13,input_20_3_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_2_14" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[2][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_14,input_20_1_14,input_20_2_14,input_20_3_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_2_15" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[2][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_15,input_20_1_15,input_20_2_15,input_20_3_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_2_16" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[2][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_16,input_20_1_16,input_20_2_16,input_20_3_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_2_17" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[2][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_17,input_20_1_17,input_20_2_17,input_20_3_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_2_18" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[2][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_18,input_20_1_18,input_20_2_18,input_20_3_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_2_19" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[2][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_19,input_20_1_19,input_20_2_19,input_20_3_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_2_20" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[2][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_20,input_20_1_20,input_20_2_20,input_20_3_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_2_21" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[2][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_21,input_20_1_21,input_20_2_21,input_20_3_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_2_22" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[2][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_22,input_20_1_22,input_20_2_22,input_20_3_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_2_23" type="number" class="form-number-input form-dropdown" name="q20_phiArea20[2][]" style="width:60px" size="5" onchange="tellipalaiTotal(input_20_0_23,input_20_1_23,input_20_2_23,input_20_3_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Total </th>
<td align="center" class="form-matrix-values">
<input id="input_20_3_0" type="text" class="form-number-input form-dropdown" name="q20_phiArea20[3][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_3_1" type="text" class="form-number-input form-dropdown" name="q20_phiArea20[3][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_3_2" type="text" class="form-number-input form-dropdown" name="q20_phiArea20[3][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_3_3" type="text" class="form-number-input form-dropdown" name="q20_phiArea20[3][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_3_4" type="text" class="form-number-input form-dropdown" name="q20_phiArea20[3][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_3_5" type="text" class="form-number-input form-dropdown" name="q20_phiArea20[3][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_3_6" type="text" class="form-number-input form-dropdown" name="q20_phiArea20[3][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_3_7" type="text" class="form-number-input form-dropdown" name="q20_phiArea20[3][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_3_8" type="text" class="form-number-input form-dropdown" name="q20_phiArea20[3][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_3_9" type="text" class="form-number-input form-dropdown" name="q20_phiArea20[3][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_3_10" type="text" class="form-number-input form-dropdown" name="q20_phiArea20[3][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_3_11" type="text" class="form-number-input form-dropdown" name="q20_phiArea20[3][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_3_12" type="text" class="form-number-input form-dropdown" name="q20_phiArea20[3][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_3_13" type="text" class="form-number-input form-dropdown" name="q20_phiArea20[3][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_3_14" type="text" class="form-number-input form-dropdown" name="q20_phiArea20[3][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_3_15" type="text" class="form-number-input form-dropdown" name="q20_phiArea20[3][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_3_16" type="text" class="form-number-input form-dropdown" name="q20_phiArea20[3][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_3_17" type="text" class="form-number-input form-dropdown" name="q20_phiArea20[3][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_3_18" type="text" class="form-number-input form-dropdown" name="q20_phiArea20[3][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_3_19" type="text" class="form-number-input form-dropdown" name="q20_phiArea20[3][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_3_20" type="text" class="form-number-input form-dropdown" name="q20_phiArea20[3][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_3_21" type="text" class="form-number-input form-dropdown" name="q20_phiArea20[3][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_3_22" type="text" class="form-number-input form-dropdown" name="q20_phiArea20[3][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_20_3_23" type="text" class="form-number-input form-dropdown" name="q20_phiArea20[3][]" style="width:60px" size="5" disabled/>
</td>
</tr>
</table>
</div>
</li>
<li class="form-line form-field-hidden" style="display:none;" data-type="control_matrix" id="id_21">
<label class="form-label form-label-left form-label-auto" id="label_21" for="input_21">PHI Area Vs Diseases </label>
<div id="cid_21" class="form-input jf-required">
<table summary="" cellpadding="4" cellspacing="0" class="form-matrix-table">
<tr>
<th style="border:none">&nbsp; </th>
<th class="form-matrix-column-headers form-matrix-column_0">Internationally Notifiable Diseases(Cholera, Plague, Yellow Fever)</th>
<th class="form-matrix-column-headers form-matrix-column_1">Polio Myelitis / Acute Flaccid Paralysis </th>
<th class="form-matrix-column-headers form-matrix-column_2">Chicken Pox </th>
<th class="form-matrix-column-headers form-matrix-column_3">Dengue Fever/ Dengue Hemorrhagic Fever </th>
<th class="form-matrix-column-headers form-matrix-column_4">Diphtheria </th>
<th class="form-matrix-column-headers form-matrix-column_5">Dysentery </th>
<th class="form-matrix-column-headers form-matrix-column_6">Encephalitis (including Japanese Encephalitis) </th>
<th class="form-matrix-column-headers form-matrix-column_7">Enteric Fever </th>
<th class="form-matrix-column-headers form-matrix-column_8">Food Poisoning </th>
<th class="form-matrix-column-headers form-matrix-column_9">Human Rabies </th>
<th class="form-matrix-column-headers form-matrix-column_10">Leptospirosis </th>
<th class="form-matrix-column-headers form-matrix-column_11">Malaria </th>
<th class="form-matrix-column-headers form-matrix-column_12">Measles </th>
<th class="form-matrix-column-headers form-matrix-column_13">Meningitis </th>
<th class="form-matrix-column-headers form-matrix-column_14">Mumps </th>
<th class="form-matrix-column-headers form-matrix-column_15">Rubella </th>
<th class="form-matrix-column-headers form-matrix-column_16">Congenital Rubella Syndrome </th>
<th class="form-matrix-column-headers form-matrix-column_17">Simple continued fever </th>
<th class="form-matrix-column-headers form-matrix-column_18">Tetanus </th>
<th class="form-matrix-column-headers form-matrix-column_19">Neonatal tetanus </th>
<th class="form-matrix-column-headers form-matrix-column_20">Typhus Fever </th>
<th class="form-matrix-column-headers form-matrix-column_21">Viral Hepatitis </th>
<th class="form-matrix-column-headers form-matrix-column_22">Whooping cough </th>
<th class="form-matrix-column-headers form-matrix-column_23">Tuberculosis </th>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Chunakam-I </th>
<td align="center" class="form-matrix-values">
<input id="input_21_0_0" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[0][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_0,input_21_1_0,input_21_2_0,input_21_3_0,input_21_4_0,input_21_5_0,input_21_6_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_0_1" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[0][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_1,input_21_1_1,input_21_2_1,input_21_3_1,input_21_4_1,input_21_5_1,input_21_6_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_0_2" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[0][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_2,input_21_1_2,input_21_2_2,input_21_3_2,input_21_4_2,input_21_5_2,input_21_6_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_0_3" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[0][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_3,input_21_1_3,input_21_2_3,input_21_3_3,input_21_4_3,input_21_5_3,input_21_6_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_0_4" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[0][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_4,input_21_1_4,input_21_2_4,input_21_3_4,input_21_4_4,input_21_5_4,input_21_6_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_0_5" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[0][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_5,input_21_1_5,input_21_2_5,input_21_3_5,input_21_4_5,input_21_5_5,input_21_6_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_0_6" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[0][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_6,input_21_1_6,input_21_2_6,input_21_3_6,input_21_4_6,input_21_5_6,input_21_6_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_0_7" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[0][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_7,input_21_1_7,input_21_2_7,input_21_3_7,input_21_4_7,input_21_5_7,input_21_6_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_0_8" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[0][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_8,input_21_1_8,input_21_2_8,input_21_3_8,input_21_4_8,input_21_5_8,input_21_6_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_0_9" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[0][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_9,input_21_1_9,input_21_2_9,input_21_3_9,input_21_4_9,input_21_5_9,input_21_6_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_0_10" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[0][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_10,input_21_1_10,input_21_2_10,input_21_3_10,input_21_4_10,input_21_5_10,input_21_6_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_0_11" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[0][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_11,input_21_1_11,input_21_2_11,input_21_3_11,input_21_4_11,input_21_5_11,input_21_6_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_0_12" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[0][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_12,input_21_1_12,input_21_2_12,input_21_3_12,input_21_4_12,input_21_5_12,input_21_6_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_0_13" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[0][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_13,input_21_1_13,input_21_2_13,input_21_3_13,input_21_4_13,input_21_5_13,input_21_6_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_0_14" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[0][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_14,input_21_1_14,input_21_2_14,input_21_3_14,input_21_4_14,input_21_5_14,input_21_6_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_0_15" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[0][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_15,input_21_1_15,input_21_2_15,input_21_3_15,input_21_4_15,input_21_5_15,input_21_6_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_0_16" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[0][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_16,input_21_1_16,input_21_2_16,input_21_3_16,input_21_4_16,input_21_5_16,input_21_6_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_0_17" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[0][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_17,input_21_1_17,input_21_2_17,input_21_3_17,input_21_4_17,input_21_5_17,input_21_6_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_0_18" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[0][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_18,input_21_1_18,input_21_2_18,input_21_3_18,input_21_4_18,input_21_5_18,input_21_6_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_0_19" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[0][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_19,input_21_1_19,input_21_2_19,input_21_3_19,input_21_4_19,input_21_5_19,input_21_6_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_0_20" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[0][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_20,input_21_1_20,input_21_2_20,input_21_3_20,input_21_4_20,input_21_5_20,input_21_6_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_0_21" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[0][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_21,input_21_1_21,input_21_2_21,input_21_3_21,input_21_4_21,input_21_5_21,input_21_6_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_0_22" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[0][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_22,input_21_1_22,input_21_2_22,input_21_3_22,input_21_4_22,input_21_5_22,input_21_6_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_0_23" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[0][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_23,input_21_1_23,input_21_2_23,input_21_3_23,input_21_4_23,input_21_5_23,input_21_6_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Chunakam-II </th>
<td align="center" class="form-matrix-values">
<input id="input_21_1_0" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[1][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_0,input_21_1_0,input_21_2_0,input_21_3_0,input_21_4_0,input_21_5_0,input_21_6_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_1_1" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[1][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_1,input_21_1_1,input_21_2_1,input_21_3_1,input_21_4_1,input_21_5_1,input_21_6_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_1_2" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[1][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_2,input_21_1_2,input_21_2_2,input_21_3_2,input_21_4_2,input_21_5_2,input_21_6_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_1_3" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[1][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_3,input_21_1_3,input_21_2_3,input_21_3_3,input_21_4_3,input_21_5_3,input_21_6_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_1_4" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[1][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_4,input_21_1_4,input_21_2_4,input_21_3_4,input_21_4_4,input_21_5_4,input_21_6_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_1_5" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[1][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_5,input_21_1_5,input_21_2_5,input_21_3_5,input_21_4_5,input_21_5_5,input_21_6_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_1_6" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[1][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_6,input_21_1_6,input_21_2_6,input_21_3_6,input_21_4_6,input_21_5_6,input_21_6_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_1_7" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[1][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_7,input_21_1_7,input_21_2_7,input_21_3_7,input_21_4_7,input_21_5_7,input_21_6_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_1_8" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[1][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_8,input_21_1_8,input_21_2_8,input_21_3_8,input_21_4_8,input_21_5_8,input_21_6_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_1_9" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[1][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_9,input_21_1_9,input_21_2_9,input_21_3_9,input_21_4_9,input_21_5_9,input_21_6_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_1_10" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[1][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_10,input_21_1_10,input_21_2_10,input_21_3_10,input_21_4_10,input_21_5_10,input_21_6_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_1_11" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[1][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_11,input_21_1_11,input_21_2_11,input_21_3_11,input_21_4_11,input_21_5_11,input_21_6_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_1_12" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[1][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_12,input_21_1_12,input_21_2_12,input_21_3_12,input_21_4_12,input_21_5_12,input_21_6_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_1_13" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[1][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_13,input_21_1_13,input_21_2_13,input_21_3_13,input_21_4_13,input_21_5_13,input_21_6_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_1_14" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[1][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_14,input_21_1_14,input_21_2_14,input_21_3_14,input_21_4_14,input_21_5_14,input_21_6_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_1_15" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[1][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_15,input_21_1_15,input_21_2_15,input_21_3_15,input_21_4_15,input_21_5_15,input_21_6_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_1_16" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[1][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_16,input_21_1_16,input_21_2_16,input_21_3_16,input_21_4_16,input_21_5_16,input_21_6_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_1_17" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[1][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_17,input_21_1_17,input_21_2_17,input_21_3_17,input_21_4_17,input_21_5_17,input_21_6_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_1_18" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[1][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_18,input_21_1_18,input_21_2_18,input_21_3_18,input_21_4_18,input_21_5_18,input_21_6_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_1_19" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[1][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_19,input_21_1_19,input_21_2_19,input_21_3_19,input_21_4_19,input_21_5_19,input_21_6_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_1_20" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[1][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_20,input_21_1_20,input_21_2_20,input_21_3_20,input_21_4_20,input_21_5_20,input_21_6_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_1_21" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[1][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_21,input_21_1_21,input_21_2_21,input_21_3_21,input_21_4_21,input_21_5_21,input_21_6_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_1_22" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[1][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_22,input_21_1_22,input_21_2_22,input_21_3_22,input_21_4_22,input_21_5_22,input_21_6_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_1_23" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[1][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_23,input_21_1_23,input_21_2_23,input_21_3_23,input_21_4_23,input_21_5_23,input_21_6_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Erlalai </th>
<td align="center" class="form-matrix-values">
<input id="input_21_2_0" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[2][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_0,input_21_1_0,input_21_2_0,input_21_3_0,input_21_4_0,input_21_5_0,input_21_6_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_2_1" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[2][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_1,input_21_1_1,input_21_2_1,input_21_3_1,input_21_4_1,input_21_5_1,input_21_6_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_2_2" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[2][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_2,input_21_1_2,input_21_2_2,input_21_3_2,input_21_4_2,input_21_5_2,input_21_6_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_2_3" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[2][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_3,input_21_1_3,input_21_2_3,input_21_3_3,input_21_4_3,input_21_5_3,input_21_6_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_2_4" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[2][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_4,input_21_1_4,input_21_2_4,input_21_3_4,input_21_4_4,input_21_5_4,input_21_6_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_2_5" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[2][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_5,input_21_1_5,input_21_2_5,input_21_3_5,input_21_4_5,input_21_5_5,input_21_6_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_2_6" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[2][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_6,input_21_1_6,input_21_2_6,input_21_3_6,input_21_4_6,input_21_5_6,input_21_6_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_2_7" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[2][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_7,input_21_1_7,input_21_2_7,input_21_3_7,input_21_4_7,input_21_5_7,input_21_6_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_2_8" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[2][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_8,input_21_1_8,input_21_2_8,input_21_3_8,input_21_4_8,input_21_5_8,input_21_6_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_2_9" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[2][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_9,input_21_1_9,input_21_2_9,input_21_3_9,input_21_4_9,input_21_5_9,input_21_6_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_2_10" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[2][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_10,input_21_1_10,input_21_2_10,input_21_3_10,input_21_4_10,input_21_5_10,input_21_6_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_2_11" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[2][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_11,input_21_1_11,input_21_2_11,input_21_3_11,input_21_4_11,input_21_5_11,input_21_6_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_2_12" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[2][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_12,input_21_1_12,input_21_2_12,input_21_3_12,input_21_4_12,input_21_5_12,input_21_6_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_2_13" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[2][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_13,input_21_1_13,input_21_2_13,input_21_3_13,input_21_4_13,input_21_5_13,input_21_6_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_2_14" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[2][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_14,input_21_1_14,input_21_2_14,input_21_3_14,input_21_4_14,input_21_5_14,input_21_6_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_2_15" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[2][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_15,input_21_1_15,input_21_2_15,input_21_3_15,input_21_4_15,input_21_5_15,input_21_6_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_2_16" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[2][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_16,input_21_1_16,input_21_2_16,input_21_3_16,input_21_4_16,input_21_5_16,input_21_6_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_2_17" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[2][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_17,input_21_1_17,input_21_2_17,input_21_3_17,input_21_4_17,input_21_5_17,input_21_6_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_2_18" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[2][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_18,input_21_1_18,input_21_2_18,input_21_3_18,input_21_4_18,input_21_5_18,input_21_6_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_2_19" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[2][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_19,input_21_1_19,input_21_2_19,input_21_3_19,input_21_4_19,input_21_5_19,input_21_6_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_2_20" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[2][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_20,input_21_1_20,input_21_2_20,input_21_3_20,input_21_4_20,input_21_5_20,input_21_6_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_2_21" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[2][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_21,input_21_1_21,input_21_2_21,input_21_3_21,input_21_4_21,input_21_5_21,input_21_6_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_2_22" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[2][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_22,input_21_1_22,input_21_2_22,input_21_3_22,input_21_4_22,input_21_5_22,input_21_6_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_2_23" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[2][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_23,input_21_1_23,input_21_2_23,input_21_3_23,input_21_4_23,input_21_5_23,input_21_6_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Inuvil </th>
<td align="center" class="form-matrix-values">
<input id="input_21_3_0" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[3][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_0,input_21_1_0,input_21_2_0,input_21_3_0,input_21_4_0,input_21_5_0,input_21_6_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_3_1" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[3][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_1,input_21_1_1,input_21_2_1,input_21_3_1,input_21_4_1,input_21_5_1,input_21_6_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_3_2" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[3][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_2,input_21_1_2,input_21_2_2,input_21_3_2,input_21_4_2,input_21_5_2,input_21_6_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_3_3" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[3][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_3,input_21_1_3,input_21_2_3,input_21_3_3,input_21_4_3,input_21_5_3,input_21_6_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_3_4" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[3][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_4,input_21_1_4,input_21_2_4,input_21_3_4,input_21_4_4,input_21_5_4,input_21_6_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_3_5" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[3][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_5,input_21_1_5,input_21_2_5,input_21_3_5,input_21_4_5,input_21_5_5,input_21_6_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_3_6" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[3][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_6,input_21_1_6,input_21_2_6,input_21_3_6,input_21_4_6,input_21_5_6,input_21_6_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_3_7" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[3][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_7,input_21_1_7,input_21_2_7,input_21_3_7,input_21_4_7,input_21_5_7,input_21_6_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_3_8" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[3][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_8,input_21_1_8,input_21_2_8,input_21_3_8,input_21_4_8,input_21_5_8,input_21_6_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_3_9" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[3][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_9,input_21_1_9,input_21_2_9,input_21_3_9,input_21_4_9,input_21_5_9,input_21_6_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_3_10" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[3][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_10,input_21_1_10,input_21_2_10,input_21_3_10,input_21_4_10,input_21_5_10,input_21_6_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_3_11" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[3][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_11,input_21_1_11,input_21_2_11,input_21_3_11,input_21_4_11,input_21_5_11,input_21_6_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_3_12" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[3][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_12,input_21_1_12,input_21_2_12,input_21_3_12,input_21_4_12,input_21_5_12,input_21_6_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_3_13" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[3][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_13,input_21_1_13,input_21_2_13,input_21_3_13,input_21_4_13,input_21_5_13,input_21_6_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_3_14" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[3][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_14,input_21_1_14,input_21_2_14,input_21_3_14,input_21_4_14,input_21_5_14,input_21_6_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_3_15" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[3][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_15,input_21_1_15,input_21_2_15,input_21_3_15,input_21_4_15,input_21_5_15,input_21_6_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_3_16" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[3][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_16,input_21_1_16,input_21_2_16,input_21_3_16,input_21_4_16,input_21_5_16,input_21_6_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_3_17" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[3][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_17,input_21_1_17,input_21_2_17,input_21_3_17,input_21_4_17,input_21_5_17,input_21_6_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_3_18" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[3][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_18,input_21_1_18,input_21_2_18,input_21_3_18,input_21_4_18,input_21_5_18,input_21_6_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_3_19" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[3][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_19,input_21_1_19,input_21_2_19,input_21_3_19,input_21_4_19,input_21_5_19,input_21_6_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_3_20" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[3][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_20,input_21_1_20,input_21_2_20,input_21_3_20,input_21_4_20,input_21_5_20,input_21_6_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_3_21" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[3][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_21,input_21_1_21,input_21_2_21,input_21_3_21,input_21_4_21,input_21_5_21,input_21_6_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_3_22" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[3][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_22,input_21_1_22,input_21_2_22,input_21_3_22,input_21_4_22,input_21_5_22,input_21_6_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_3_23" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[3][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_23,input_21_1_23,input_21_2_23,input_21_3_23,input_21_4_23,input_21_5_23,input_21_6_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Punnalaikadduvan </th>
<td align="center" class="form-matrix-values">
<input id="input_21_4_0" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[4][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_0,input_21_1_0,input_21_2_0,input_21_3_0,input_21_4_0,input_21_5_0,input_21_6_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_4_1" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[4][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_1,input_21_1_1,input_21_2_1,input_21_3_1,input_21_4_1,input_21_5_1,input_21_6_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_4_2" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[4][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_2,input_21_1_2,input_21_2_2,input_21_3_2,input_21_4_2,input_21_5_2,input_21_6_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_4_3" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[4][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_3,input_21_1_3,input_21_2_3,input_21_3_3,input_21_4_3,input_21_5_3,input_21_6_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_4_4" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[4][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_4,input_21_1_4,input_21_2_4,input_21_3_4,input_21_4_4,input_21_5_4,input_21_6_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_4_5" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[4][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_5,input_21_1_5,input_21_2_5,input_21_3_5,input_21_4_5,input_21_5_5,input_21_6_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_4_6" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[4][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_6,input_21_1_6,input_21_2_6,input_21_3_6,input_21_4_6,input_21_5_6,input_21_6_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_4_7" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[4][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_7,input_21_1_7,input_21_2_7,input_21_3_7,input_21_4_7,input_21_5_7,input_21_6_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_4_8" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[4][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_8,input_21_1_8,input_21_2_8,input_21_3_8,input_21_4_8,input_21_5_8,input_21_6_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_4_9" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[4][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_9,input_21_1_9,input_21_2_9,input_21_3_9,input_21_4_9,input_21_5_9,input_21_6_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_4_10" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[4][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_10,input_21_1_10,input_21_2_10,input_21_3_10,input_21_4_10,input_21_5_10,input_21_6_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_4_11" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[4][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_11,input_21_1_11,input_21_2_11,input_21_3_11,input_21_4_11,input_21_5_11,input_21_6_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_4_12" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[4][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_12,input_21_1_12,input_21_2_12,input_21_3_12,input_21_4_12,input_21_5_12,input_21_6_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_4_13" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[4][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_13,input_21_1_13,input_21_2_13,input_21_3_13,input_21_4_13,input_21_5_13,input_21_6_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_4_14" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[4][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_14,input_21_1_14,input_21_2_14,input_21_3_14,input_21_4_14,input_21_5_14,input_21_6_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_4_15" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[4][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_15,input_21_1_15,input_21_2_15,input_21_3_15,input_21_4_15,input_21_5_15,input_21_6_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_4_16" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[4][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_16,input_21_1_16,input_21_2_16,input_21_3_16,input_21_4_16,input_21_5_16,input_21_6_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_4_17" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[4][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_17,input_21_1_17,input_21_2_17,input_21_3_17,input_21_4_17,input_21_5_17,input_21_6_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_4_18" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[4][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_18,input_21_1_18,input_21_2_18,input_21_3_18,input_21_4_18,input_21_5_18,input_21_6_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_4_19" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[4][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_19,input_21_1_19,input_21_2_19,input_21_3_19,input_21_4_19,input_21_5_19,input_21_6_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_4_20" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[4][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_20,input_21_1_20,input_21_2_20,input_21_3_20,input_21_4_20,input_21_5_20,input_21_6_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_4_21" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[4][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_21,input_21_1_21,input_21_2_21,input_21_3_21,input_21_4_21,input_21_5_21,input_21_6_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_4_22" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[4][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_22,input_21_1_22,input_21_2_22,input_21_3_22,input_21_4_22,input_21_5_22,input_21_6_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_4_23" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[4][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_23,input_21_1_23,input_21_2_23,input_21_3_23,input_21_4_23,input_21_5_23,input_21_6_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Uduvil </th>
<td align="center" class="form-matrix-values">
<input id="input_21_5_0" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[5][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_0,input_21_1_0,input_21_2_0,input_21_3_0,input_21_4_0,input_21_5_0,input_21_6_0);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_5_1" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[5][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_1,input_21_1_1,input_21_2_1,input_21_3_1,input_21_4_1,input_21_5_1,input_21_6_1);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_5_2" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[5][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_2,input_21_1_2,input_21_2_2,input_21_3_2,input_21_4_2,input_21_5_2,input_21_6_2);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_5_3" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[5][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_3,input_21_1_3,input_21_2_3,input_21_3_3,input_21_4_3,input_21_5_3,input_21_6_3);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_5_4" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[5][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_4,input_21_1_4,input_21_2_4,input_21_3_4,input_21_4_4,input_21_5_4,input_21_6_4);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_5_5" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[5][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_5,input_21_1_5,input_21_2_5,input_21_3_5,input_21_4_5,input_21_5_5,input_21_6_5);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_5_6" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[5][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_6,input_21_1_6,input_21_2_6,input_21_3_6,input_21_4_6,input_21_5_6,input_21_6_6);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_5_7" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[5][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_7,input_21_1_7,input_21_2_7,input_21_3_7,input_21_4_7,input_21_5_7,input_21_6_7);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_5_8" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[5][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_8,input_21_1_8,input_21_2_8,input_21_3_8,input_21_4_8,input_21_5_8,input_21_6_8);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_5_9" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[5][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_9,input_21_1_9,input_21_2_9,input_21_3_9,input_21_4_9,input_21_5_9,input_21_6_9);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_5_10" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[5][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_10,input_21_1_10,input_21_2_10,input_21_3_10,input_21_4_10,input_21_5_10,input_21_6_10);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_5_11" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[5][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_11,input_21_1_11,input_21_2_11,input_21_3_11,input_21_4_11,input_21_5_11,input_21_6_11);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_5_12" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[5][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_12,input_21_1_12,input_21_2_12,input_21_3_12,input_21_4_12,input_21_5_12,input_21_6_12);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_5_13" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[5][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_13,input_21_1_13,input_21_2_13,input_21_3_13,input_21_4_13,input_21_5_13,input_21_6_13);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_5_14" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[5][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_14,input_21_1_14,input_21_2_14,input_21_3_14,input_21_4_14,input_21_5_14,input_21_6_14);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_5_15" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[5][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_15,input_21_1_15,input_21_2_15,input_21_3_15,input_21_4_15,input_21_5_15,input_21_6_15);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_5_16" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[5][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_16,input_21_1_16,input_21_2_16,input_21_3_16,input_21_4_16,input_21_5_16,input_21_6_16);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_5_17" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[5][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_17,input_21_1_17,input_21_2_17,input_21_3_17,input_21_4_17,input_21_5_17,input_21_6_17);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_5_18" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[5][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_18,input_21_1_18,input_21_2_18,input_21_3_18,input_21_4_18,input_21_5_18,input_21_6_18);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_5_19" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[5][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_19,input_21_1_19,input_21_2_19,input_21_3_19,input_21_4_19,input_21_5_19,input_21_6_19);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_5_20" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[5][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_20,input_21_1_20,input_21_2_20,input_21_3_20,input_21_4_20,input_21_5_20,input_21_6_20);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_5_21" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[5][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_21,input_21_1_21,input_21_2_21,input_21_3_21,input_21_4_21,input_21_5_21,input_21_6_21);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_5_22" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[5][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_22,input_21_1_22,input_21_2_22,input_21_3_22,input_21_4_22,input_21_5_22,input_21_6_22);"/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_5_23" type="number" class="form-number-input form-dropdown" name="q21_phiArea21[5][]" style="width:60px" size="5" onchange="udivilTotal(input_21_0_23,input_21_1_23,input_21_2_23,input_21_3_23,input_21_4_23,input_21_5_23,input_21_6_23);"/>
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Total </th>
<td align="center" class="form-matrix-values">
<input id="input_21_6_0" type="text" class="form-number-input form-dropdown" name="q21_phiArea21[6][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_6_1" type="text" class="form-number-input form-dropdown" name="q21_phiArea21[6][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_6_2" type="text" class="form-number-input form-dropdown" name="q21_phiArea21[6][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_6_3" type="text" class="form-number-input form-dropdown" name="q21_phiArea21[6][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_6_4" type="text" class="form-number-input form-dropdown" name="q21_phiArea21[6][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_6_5" type="text" class="form-number-input form-dropdown" name="q21_phiArea21[6][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_6_6" type="text" class="form-number-input form-dropdown" name="q21_phiArea21[6][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_6_7" type="text" class="form-number-input form-dropdown" name="q21_phiArea21[6][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_6_8" type="text" class="form-number-input form-dropdown" name="q21_phiArea21[6][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_6_9" type="text" class="form-number-input form-dropdown" name="q21_phiArea21[6][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_6_10" type="text" class="form-number-input form-dropdown" name="q21_phiArea21[6][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_6_11" type="text" class="form-number-input form-dropdown" name="q21_phiArea21[6][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_6_12" type="text" class="form-number-input form-dropdown" name="q21_phiArea21[6][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_6_13" type="text" class="form-number-input form-dropdown" name="q21_phiArea21[6][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_6_14" type="text" class="form-number-input form-dropdown" name="q21_phiArea21[6][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_6_15" type="text" class="form-number-input form-dropdown" name="q21_phiArea21[6][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_6_16" type="text" class="form-number-input form-dropdown" name="q21_phiArea21[6][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_6_17" type="text" class="form-number-input form-dropdown" name="q21_phiArea21[6][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_6_18" type="text" class="form-number-input form-dropdown" name="q21_phiArea21[6][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_6_19" type="text" class="form-number-input form-dropdown" name="q21_phiArea21[6][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_6_20" type="text" class="form-number-input form-dropdown" name="q21_phiArea21[6][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_6_21" type="text" class="form-number-input form-dropdown" name="q21_phiArea21[6][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_6_22" type="text" class="form-number-input form-dropdown" name="q21_phiArea21[6][]" style="width:60px" size="5" disabled/>
</td>
<td align="center" class="form-matrix-values">
<input id="input_21_6_23" type="text" class="form-number-input form-dropdown" name="q21_phiArea21[6][]" style="width:60px" size="5" disabled/>
</td>
</tr>
</table>
</div>
</li>
<li id="cid_22" class="form-input-wide" data-type="control_head">
	<div class="header-text httal htvam">
	<h4><i>Part I I - Weekly Summary</i></h4>
	</div>
</li>
<li class="form-line" data-type="control_matrix" id="id_23">
<label class="form-label form-label-left form-label-auto" id="label_23" for="input_23">PHI Area Vs Diseases </label>
<div id="cid_23" class="form-input jf-required">
<table summary="" cellpadding="4" cellspacing="0" class="form-matrix-table">
<tr>
<th style="border:none">&nbsp; </th>
<th class="form-matrix-column-headers form-matrix-column_0">Internationally Notifiable Diseases(Cholera, Plague, Yellow Fever)</th>
<th class="form-matrix-column-headers form-matrix-column_1">Polio Myelitis / Acute Flaccid Paralysis </th>
<th class="form-matrix-column-headers form-matrix-column_2">Chicken Pox </th>
<th class="form-matrix-column-headers form-matrix-column_3">Dengue Fever/ Dengue Hemorrhagic Fever </th>
<th class="form-matrix-column-headers form-matrix-column_4">Diphtheria </th>
<th class="form-matrix-column-headers form-matrix-column_5">Dysentery </th>
<th class="form-matrix-column-headers form-matrix-column_6">Encephalitis (including Japanese Encephalitis) </th>
<th class="form-matrix-column-headers form-matrix-column_7">Enteric Fever </th>
<th class="form-matrix-column-headers form-matrix-column_8">Food Poisoning </th>
<th class="form-matrix-column-headers form-matrix-column_9">Human Rabies </th>
<th class="form-matrix-column-headers form-matrix-column_10">Leptospirosis </th>
<th class="form-matrix-column-headers form-matrix-column_11">Malaria </th>
<th class="form-matrix-column-headers form-matrix-column_12">Measles </th>
<th class="form-matrix-column-headers form-matrix-column_13">Meningitis </th>
<th class="form-matrix-column-headers form-matrix-column_14">Mumps </th>
<th class="form-matrix-column-headers form-matrix-column_15">Rubella </th>
<th class="form-matrix-column-headers form-matrix-column_16">Congenital Rubella Syndrome </th>
<th class="form-matrix-column-headers form-matrix-column_17">Simple continued fever </th>
<th class="form-matrix-column-headers form-matrix-column_18">Tetanus </th>
<th class="form-matrix-column-headers form-matrix-column_19">Neonatal tetanus </th>
<th class="form-matrix-column-headers form-matrix-column_20">Typhus Fever </th>
<th class="form-matrix-column-headers form-matrix-column_21">Viral Hepatitis </th>
<th class="form-matrix-column-headers form-matrix-column_22">Whooping cough </th>
<th class="form-matrix-column-headers form-matrix-column_23">Tuberculosis </th>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">New cases notified during the week </th>
<td align="center" class="form-matrix-values">
<input id="input_23_0_0" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[0][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_0_1" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[0][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_0_2" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[0][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_0_3" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[0][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_0_4" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[0][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_0_5" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[0][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_0_6" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[0][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_0_7" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[0][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_0_8" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[0][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_0_9" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[0][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_0_10" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[0][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_0_11" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[0][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_0_12" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[0][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_0_13" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[0][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_0_14" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[0][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_0_15" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[0][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_0_16" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[0][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_0_17" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[0][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_0_18" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[0][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_0_19" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[0][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_0_20" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[0][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_0_21" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[0][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_0_22" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[0][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_0_23" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[0][]" style="width:60px" size="5" />
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Cases informed earlier and awaiting investigation at beginning of the week </th>
<td align="center" class="form-matrix-values">
<input id="input_23_1_0" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[1][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_1_1" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[1][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_1_2" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[1][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_1_3" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[1][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_1_4" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[1][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_1_5" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[1][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_1_6" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[1][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_1_7" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[1][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_1_8" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[1][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_1_9" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[1][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_1_10" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[1][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_1_11" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[1][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_1_12" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[1][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_1_13" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[1][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_1_14" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[1][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_1_15" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[1][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_1_16" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[1][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_1_17" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[1][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_1_18" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[1][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_1_19" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[1][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_1_20" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[1][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_1_21" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[1][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_1_22" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[1][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_1_23" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[1][]" style="width:60px" size="5" />
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Cases decided as untraceable during the week </th>
<td align="center" class="form-matrix-values">
<input id="input_23_2_0" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[2][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_2_1" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[2][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_2_2" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[2][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_2_3" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[2][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_2_4" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[2][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_2_5" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[2][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_2_6" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[2][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_2_7" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[2][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_2_8" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[2][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_2_9" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[2][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_2_10" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[2][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_2_11" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[2][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_2_12" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[2][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_2_13" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[2][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_2_14" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[2][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_2_15" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[2][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_2_16" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[2][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_2_17" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[2][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_2_18" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[2][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_2_19" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[2][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_2_20" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[2][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_2_21" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[2][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_2_22" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[2][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_2_23" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[2][]" style="width:60px" size="5" />
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Cases decided as belonging to other MOH areas during the week </th>
<td align="center" class="form-matrix-values">
<input id="input_23_3_0" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[3][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_3_1" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[3][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_3_2" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[3][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_3_3" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[3][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_3_4" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[3][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_3_5" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[3][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_3_6" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[3][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_3_7" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[3][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_3_8" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[3][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_3_9" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[3][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_3_10" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[3][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_3_11" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[3][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_3_12" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[3][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_3_13" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[3][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_3_14" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[3][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_3_15" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[3][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_3_16" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[3][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_3_17" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[3][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_3_18" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[3][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_3_19" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[3][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_3_20" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[3][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_3_21" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[3][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_3_22" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[3][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_3_23" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[3][]" style="width:60px" size="5" />
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Cases confirmed as a non-notifiable disease during the week </th>
<td align="center" class="form-matrix-values">
<input id="input_23_4_0" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[4][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_4_1" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[4][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_4_2" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[4][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_4_3" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[4][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_4_4" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[4][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_4_5" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[4][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_4_6" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[4][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_4_7" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[4][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_4_8" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[4][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_4_9" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[4][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_4_10" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[4][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_4_11" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[4][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_4_12" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[4][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_4_13" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[4][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_4_14" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[4][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_4_15" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[4][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_4_16" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[4][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_4_17" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[4][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_4_18" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[4][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_4_19" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[4][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_4_20" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[4][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_4_21" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[4][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_4_22" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[4][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_4_23" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[4][]" style="width:60px" size="5" />
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Cases confirmed as a notifiable disease during the week </th>
<td align="center" class="form-matrix-values">
<input id="input_23_5_0" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[5][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_5_1" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[5][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_5_2" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[5][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_5_3" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[5][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_5_4" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[5][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_5_5" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[5][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_5_6" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[5][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_5_7" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[5][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_5_8" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[5][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_5_9" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[5][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_5_10" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[5][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_5_11" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[5][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_5_12" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[5][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_5_13" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[5][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_5_14" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[5][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_5_15" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[5][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_5_16" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[5][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_5_17" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[5][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_5_18" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[5][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_5_19" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[5][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_5_20" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[5][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_5_21" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[5][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_5_22" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[5][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_5_23" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[5][]" style="width:60px" size="5" />
</td>
</tr>
<tr>
<th align="left" class="form-matrix-row-headers">Cases awaiting investigation at the end of the week </th>
<td align="center" class="form-matrix-values">
<input id="input_23_6_0" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[6][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_6_1" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[6][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_6_2" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[6][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_6_3" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[6][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_6_4" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[6][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_6_5" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[6][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_6_6" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[6][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_6_7" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[6][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_6_8" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[6][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_6_9" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[6][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_6_10" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[6][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_6_11" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[6][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_6_12" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[6][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_6_13" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[6][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_6_14" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[6][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_6_15" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[6][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_6_16" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[6][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_6_17" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[6][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_6_18" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[6][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_6_19" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[6][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_6_20" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[6][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_6_21" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[6][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_6_22" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[6][]" style="width:60px" size="5" />
</td>
<td align="center" class="form-matrix-values">
<input id="input_23_6_23" type="number" class="form-number-input form-dropdown" name="q23_phiArea23[6][]" style="width:60px" size="5" />
</td>
</tr>
</table>
</div>
</li>
<li class="form-line" data-type="control_button" id="id_5">
<div id="cid_5" class="form-input-wide">
<div style="margin-left:156px" class="form-buttons-wrapper">
<button id="input_5" type="submit" class="form-submit-button">Submit </button>
</div>
</div>
</li>
</ul>
</div>
</form>
</body>
</html>
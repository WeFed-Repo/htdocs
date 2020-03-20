@CHARSET "ISO-8859-1";





body {
	height: 100%;
	margin: 0;
	background: url(/sapef23/f23/images/youbusinessweb/header_bkg.jpg) center top no-repeat;
	font-size: 11px;
	font-family: Helvetica, Arial, sans-serif;
}

.wrapper { min-height: 100%; }

.clearall { clear: both; }

.header {
	position: relative;
	z-index: 2000;
	-webkit-box-shadow: 0 1px 8px 1px #000000;
    -webkit-box-shadow: 0 1px 8px 1px rgba(0,0,0,0.5);
    -ms-box-shadow: 0 1px 8px 1px rgba(0,0,0,0.5);
	box-shadow: 0 1px 8px 1px rgba(0,0,0,0.5);
	/*behavior: url(/sapef23/f23/javascript/css3pie.htc); - Alfa 2015 07 31 - Per scrollbar orizzontale IE8*/
}

.divFooter { height: 145px; margin-top: -145px; }

.row { margin: 0; }

/*.main { margin-top: 30px; padding-bottom: 125px; } - laura 17/08/2015 modificato come sotto per eliminare scrollbar verticale in homepage*/
.main { margin-top: 28px; padding-bottom: 145px; }


strong {
	font-family: Helvetica, Arial, sans-serif;
	font-weight: bold;
}

a, a:link, a:visited, a:active, a:focus { color: #003b79; text-decoration: none; }
a:hover { color: #003b79; text-decoration: underline; }

a.diagnostica,a.diagnostica:link, a.diagnostica:visited, a.diagnostica:active, a.diagnostica:focus {
    text-decoration: underline;
}

h1 {
	display: inline-table;
	position: relative;
	color: #666;
	background: #fff;
	box-shadow: 0 8px 8px -6px rgba(125,183,125,0.6);
	border-bottom: 1px solid #7db77d;
	padding: 0 15px 0 45px;
	margin: 10px 0 15px 0;
	font-family: Helvetica, Arial, sans-serif;
	font-size: 1.4em;
	font-weight: 300;
	line-height: 24px;
	letter-spacing: 0px;
	behavior: url(/sapef23/f23/javascript/pie.htc);
}

	.contentLeft h1 {
		font-size: 1.4em;
		line-height: 24px;
		letter-spacing: 0px;
		padding: 0 15px 0 40px;
		margin: 10px 0px 20px 0px;
		behavior: url(/sapef23/f23/javascript/pie.htc);
	}
	
	.contentLeft h1.centered-title {
		display: block;
		width: 80%;
		margin: 0px auto;
		margin-top: 10px;
		margin-bottom: 25px;
		padding-left: 15px;
		padding-right: 15px;
		text-align: center;
	}
	
	div.generic_text {
		margin: 15px;
		font-size: 1.04em;
	}
	
h3 {
	display: inline-block;
	padding-left: 20px;
	font-family: Helvetica, Arial, sans-serif;
	font-size: 18px;
	font-weight: normal;
	line-height: 28px;
	letter-spacing: 0px;
}
table th {
	text-align: center;
}

table td{
	text-align:left;
}

.oRight{
	text-align:right;
}

#homepage_pref ul[id^='col'] > li,
#homepage ul[id^='col'] > li {
	list-style: none;
}

	#homepage #col1 { padding-left: 0; padding-right: 5px; }
	#homepage #col2 { padding-left: 5px; padding-right: 0; }

.breadcrumb {
margin-bottom: 10px;
}

.section {
	clear: both;
	position: relative;
	margin: 0px;
	margin-top: 10px;
	margin-bottom: 0px;
	padding: 0px;
	padding-bottom: 5px;
	background: #f7fcf7;
}

.section.left {
	clear: none;
	float: left;
	width: 48%;
}
	
.section.right {
	clear: none;
	float: right;
	width: 48%;
}


.titleSection {
	display: inline-block;
	color: #357745;
	background: url(/sapef23/f23/styles/youbusinessweb/images/general-sprite.png) right 0px no-repeat;
	margin-top: 0px;
	margin-bottom: 5px;
	padding-right: 50px;
	font-family: Helvetica, Arial, sans-serif;
	font-size: 1.2em;
	font-weight: 300;
}

	.success .titleSection {
		background: url(/sapef23/f23/styles/youbusinessweb/images/general-sprite.png) right -114px no-repeat;
		color: #fff;
	}
	
	.alert .titleSection,
	.waiting .titleSection {
	background: url(/sapef23/f23/styles/youbusinessweb/images/general-sprite.png) right -76px no-repeat;
	}
	
	.error .titleSection {
		background: url(/sapef23/f23/styles/youbusinessweb/images/general-sprite.png) right -38px no-repeat;
		color: #fff;
	}

	
	.error .error-field label { color: #d00; }
	.error .error-field input,
	.error .error-field select,
	.error .error-field textarea { border: 1px solid #d00; }


	div.context-buttons {
		float: right;
		margin-bottom: 5px;
	}
	.context-buttons a {
		display: inline-block;
		width: 35px;
		height: 35px;
		text-indent: 100%;
		white-space: nowrap;
		overflow: hidden;
	}
	
		.context-buttons a.btnTimeline { background: url(/sapef23/f23/styles/youbusinessweb/images/general-sprite.png) -296px -400px no-repeat; }
		.context-buttons a.btnTimeline:hover { background-position: -296px -435px; }
		.context-buttons a.btnTimeline.disabled { background-position: -296px -470px; cursor: default; }
			
		.context-buttons a.btnTable { background: url(/sapef23/f23/styles/youbusinessweb/images/general-sprite.png) -331px -400px no-repeat; }
		.context-buttons a.btnTable:hover { background-position: -331px -435px; }
		.context-buttons a.btnTable.disabled { background-position: -331px -470px; cursor: default; }
		
		.context-buttons a.btnChart { background: url(/sapef23/f23/styles/youbusinessweb/images/general-sprite.png) -366px -400px no-repeat; }
		.context-buttons a.btnChart:hover { background-position: -366px -435px; }
		.context-buttons a.btnChart.disabled { background-position: -366px -470px; cursor: default; }

/****************************************/

.bs-example {
	position: relative;
	margin: 0px;
	padding: 0 0px 15px;
	font-size: 1.06em;
}

	.bs-example p { margin: 0; padding: 0; padding-top: 10px; }

.top10{
	position: relative;
	top: 10px;
}
.top5{
	position: relative;
	top: 5px;
}

input[type="button"].button,
#contentLeft input[type="button"].button.thin.XL,
.btn {
	display: inline-block;
	margin: 0 5px;
	margin-bottom: 10px;
	padding: 4px 8px;
	background: #357745;
	border: 2px solid #357745;
	border-radius: 6px;
	color: #fff;
	font-size:12px;
	line-height: 14px;
	font-family: Helvetica, Arial, sans-serif;
	font-weight: bold;
	behavior: url(/sapef23/f23/javascript/css3pie.htc);
}

.btn:hover, .btn:focus, .btn:active, .btn.active { color: #fff; background: #7ea889!important; border-color: #7ea889!important; }

.form-horizontal .form-group{ margin-left: 0; margin-right: 0; padding-left: 0; padding-right: 0; }


.form-group .btn { margin-bottom: 0; }

.btn-primary {
	position: relative;
	margin: 0 10px;
	margin-bottom: 10px;
	font-size: 14px;
	line-height: 20px;
	padding: 6px 12px;
	text-transform: uppercase;
	background: #357745;
	border: 2px solid #357745;
	behavior: url(/sapef23/f23/javascript/css3pie.htc);
}
	.btn-primary:last-child{
		margin-right:0;
	}
.btn-primary.execute {
	color: #fff;
	background: #97d596;
	border: 2px solid #357745;
}
	.btn-primary.execute:hover { background: #acddab; border-color: #7ea889; }

.btn.disabled { background: #999; border-color: #999; }
.btn-file {
	 position: relative;
	 overflow: hidden;
	 padding: 0.45em;
}
.btn-file input[type=file] {
	 position: absolute;
	 top: 0;
	 right: 0;
	 min-width: 100%;
	 min-height: 100%;
	 font-size: 100px;
	 text-align: left;
	 filter: alpha(opacity=0);
	 opacity: 0;
	 outline: none;
	 background: white;
	 cursor: inherit;
	 display: block;
}

.select-button {
	display: inline-block;
	position: relative;
	min-width: 60px;
	margin: 10px;
	padding: 6px 12px;
	background: #357745;
	border: none;
	border-radius: 6px;
	color: #fff;
	font-family: Helvetica, Arial, sans-serif;
	font-size: 1.04em;
	font-weight: bold;
	line-height: 16px;
	text-transform: uppercase;
	behavior: url(/sapef23/f23/javascript/css3pie.htc);
}
.select-button.active { background: #425482; color: #fff; }


	.form-control{
	display:inline-block;
	}

.form-control.thin{
	padding:2px;
}
.floatl-marginr10{
	float:left;
	margin-right:10px;
}
.form-control.w-auto { width: 75%; display: inline-block; }

.form-control.with-help {
	display: inline-block;
	width: auto;	
}

.w-auto{
		width:auto;
	}
.form-control{
	border-radius: 0;
	background-color: #f9f9f9;	
	width: 90%; /*by icbpi: per far si che l'img lampadina non vada sotto*/
	display: inline-block;/*by icbpi: per far si che l'img lampadina non vada sotto*/
}
.form-control.data{width: 76%;}/*by icbpi: per far si che l'img del cal non vada sotto*/
.form-control.dataRiep,.form-control.inRiga{width: 56%;}/*by icbpi: per far si che l'img del cal non vada sotto*/
button[disabled], html input[disabled] { background-color: #eaeaea; border: 1px solid #ccc; }
/***** NEW FORM STYLES *****/

div.form-field-input {}

	div.form-field-input label, div.form-field-input label.file{
		display: block;
		padding-bottom: 3px;
		margin-bottom:0;
		border-bottom: none;
		text-align: left;
	}
	div.form-field-input label.file{
		display: block;
		padding: 5px;
		font-weight: bold;
	}

	div.form-field-input .form-field {
		display: block;
		text-align: left;
	}
	div.form-field-input .form-field > div { padding-left: 0; padding-right: 0; }

	div.form-field-input .form-field > div.field-buttons { display: inline-block; margin-top: 5px; }
	
	div.form-field-input .form-field > div.field-buttons .btn { margin: 0; }


div.form-field-resume { padding: 0 15px; }

	.form-field-resume label {
		display: block;
		border-bottom: 1px dotted #a2b7cb;
		text-align: left;
	}
	
	.form-field-resume .resume {
		display: block;
		text-align: left;
	}
	.form-field-resume .resume.importo { display: block; float: right; padding-top: 0; text-align: right; white-space: nowrap; }


input#importoInt, input.importo, input#interiSaldoVers, #interiSaldo { width: 100px; display: inline-block; text-align: right; }
span.virgola { display: inline-block; padding: 0 5px; }
input#importoDec, input#centSaldoVers, #centSaldo{ display: inline-block; width: 40px; text-align: left; }


/***************************/


.logo{
	position:absolute;
	z-index:50;
	background: url(/sapef23/f23/images/sprite.png) no-repeat 0px 0px;
	width: 160px;
	height: 70px;
	/*top: 40px;*/
    top: 15px;
}

.logo a { display: block; width: 160px; height: 70px; cursor: pointer; }

.logo span{
	display: none;
}
.user-info { float: left; font-size: 10px; font-weight: normal;background: url(/sapef23/f23/styles/youbusinessweb/images/general-sprite.png) -296px -300px no-repeat;padding-left: 30px;}

.user-info strong { color: #003b79; }
.breadcrumb{
	position: absolute;
	right: 0px;
	top: 0px;
	margin: 5px 10px 0px 0px;
	background: transparent;
	color: #666;
	font-size: 1.04em;
	font-weight: normal;
	/*text-transform: capitalize;*/
}
	.breadcrumb>li+li:before { color: #aaa; }


div.circle, div.circleConferma{
	width: 14px;
	height: 14px;
	border-radius: 50%;
	display: inline-block;
	margin-right: 3px;
	background: #7ea889;
	position: relative;
	top: 5px;
	behavior: url(/sapef23/f23/javascript/css3pie.htc);
}
div.circleConferma{
	behavior: url(/sapef23/f23/javascript/css3pie.htc);
}
div.circle_line{
	border-bottom: 3px solid #7ea889;
	width:90%;
	margin-top: 1px;
	position:absolute;
	font-size: 7px;
}
div.circle_line.current {
	width: auto;
	border-color: #357745;
}

.pager{
	position:relative;
	margin-right: 15px;
}

div.circle.current_page, div.circleConferma.current_page{
	background: #357745;
}


/****** SELEZIONE RAPPORTO ********/

#mainContent .riquadro .table { border-collapse: separate; margin-bottom: 0; }
	

#mainContent .riquadro .table tr td,
#mainContent .riquadro .table tr th,
.ui-dialog .table tr th,
.ui-dialog .table tr td {
	border-top: 2px solid #fff;	
}	

	#mainContent .riquadro .table tbody tr:nth-child(odd),#mainContent .riquadro .table tbody tr.odd,.ui-dialog .table tbody tr:nth-child(odd) { background-color: #f5f5f5; }
	#mainContent .riquadro .table tbody tr:nth-child(even),#mainContent .riquadro .table tbody tr.even, .ui-dialog .table tbody tr:nth-child(even) { background-color: #e3eee3; }
	
	#mainContent .riquadro .table tr th,
	.ui-dialog .table tr th {
		border-bottom: none;
		border-top: none;
		background-color: #a7cea7;
		vertical-align: middle;
		font-family: Helvetica, Arial, sans-serif;
		font-weight: bold;
		font-size: 1.04em;
		font-weight: bold;
		line-height: 14px;
	}

#mainContent .riquadro .tabellaSelezioneCC, .ui-dialog .tabellaSelezioneCC { background: #e7f5e7; position: relative; padding: 0 5px 5px 5px; }
#mainContent .riquadro .tabSelezioneCC .dataTables_wrapper,.ui-dialog .tabellaSelezioneCC .dataTables_wrapper { padding: 5px; background: #fff; }
#mainContent .riquadro .tabSelezioneCC .table, .ui-dialog .tabSelezioneCC .table{ margin-bottom: 0; }
#mainContent .riquadro .tabSelezioneCC .table tbody > tr.hover,
#mainContent .riquadro .tabSelezioneCC .table tbody > tr.hover:nth-child(odd),
#mainContent .riquadro .tabSelezioneCC .table tbody > tr.hover:nth-child(even),
#mainContent .riquadro .tabSelezioneCC .table tbody > tr.hover.odd,
#mainContent .riquadro .tabSelezioneCC .table tbody > tr.hover.even { cursor: pointer; background: #458e57 !important; color: #fff; }


.CCselezionato {
	display: block;
	position: relative;
	margin: 10px 0 5px 0;
	padding: 20px 0px 20px 0px;
}
.CCselezionato span {
	display: inline-block;
	margin: 0 8px 0 0;
	padding: 3px 4px;
}
.CCselezionato #numero, .CCselezionato .ABI, .CCselezionato .CAB,
.CCselezionato #contabile, .CCselezionato .disponibile,
.CCselezionato #intestazione {font-family: Helvetica, Arial, sans-serif;font-weight: bold;}
	
.CCselezionato #numeri span { float: left; margin-right: 10px; width: 80%; }
.CCselezionato #numeri span.importo{ 
	text-align: right;
	font-weight: bold; 
}
.CCselezionato #numeri span { float: left; margin-right: 10px; width: 80%; }
.CCselezionato #numeri span strong { float: right; text-align: right; }
.CCselezionato #numeri span.importo{ 
	text-align: right;
	font-weight: bold; 
}
.CCselezionato .btnSelezioneCC {
	display: block;
	width: 20px;
	height: 20px;
	position: absolute;
	top: 50%;
	right: 10px;
	margin-top: -10px;
}
.CCselezionato .btnSelezioneCC.open { transform: rotate(180deg); }

.dataTables_length { width: 40%; float: right; text-align: right;}
.dataTables_filter {
	float: left;
	margin: 5px 0 8px 10px;
	padding-right: 30px;
	background: url(/sapef23/f23/images/ico-filter.png) right center no-repeat;
}
.dataTables_filter label {  margin-bottom: 0; padding: 3px 0; font-weight: normal; }
.dataTables_length label { margin-bottom: 0; padding: 8px 10px 0px 0; font-weight: normal; }

.dataTables_filter input { margin: 0 10px; border: 1px solid #aaa; background: #f9f9f9; }
.dataTables_filter input:after {
	content: " ";
	display: inline-block;
}

.dataTables_paginate { text-align: center; }


/* Hide Prev and Next links */
.dataTables_paginate > a { display: none; }

.dataTables_paginate span a {
	display: inline-block;
	position: relative;
	margin: 10px 5px;
	width: 24px;
	height: 24px;
	padding: 0;
	border-radius: 12px;
	color: #fff;
	background: #99c99c;
	font-weight: bold;
	font-size: 12px;
	text-align: center;
	cursor: pointer;
	line-height: 26px;
	behavior: url(/sapef23/f23/javascript/css3pie.htc);
	outline: none;
}

	
.dataTables_paginate span a.current { background: #357745; }

.dataTables_paginate span a:hover { background: #7ea889; text-decoration: none; }
	

/********* TABELLA ESPANDIBILE **********/

#mainContent .riquadro table.expandable  {}

	tr.odd { background-color: #f5f5f5; }
	tr.even { background-color: #e3eee3; }

	#mainContent .riquadro table.expandable tbody tr td table { width: 100%; }
	#mainContent .riquadro table.expandable tbody tr td table tr,
	#mainContent .riquadro table.expandable tbody tr td table tr:nth-child(odd),
	#mainContent .riquadro table.expandable tbody tr td table tr:nth-child(even),
	#mainContent .riquadro .section .riquadro.importi table tr:nth-child(odd),
	#mainContent .riquadro .section .riquadro.importi table tr:nth-child(even) { background: none; }
	#mainContent .riquadro table.expandable tbody tr.details { display: none; }	
	#mainContent .riquadro table.expandable tbody tr td table tr td { border: none; }
	#mainContent .riquadro table.expandable tbody tr.details > td { padding: 0px; padding-top: 5px; border: none; }
		
	#mainContent .riquadro table.expandable tr td .riquadro,
	#mainContent .riquadro .section .riquadro.importi {
			box-shadow: none;
			border: 1px solid #b7c5b7;
		}		
	#mainContent .riquadro table.expandable tr td .riquadro h4{
		display: block;
		position: relative;
		color: #666;
		background: #fff;
		box-shadow: 0 8px 8px -6px rgba(125,183,125,0.6);
		border-bottom: 1px solid #7db77d;
		border-bottom: 1px solid #61a4d3;
		margin: 5px 10px;
		padding: 0 10px;
		font-family: Helvetica, Arial, sans-serif;
		font-size: 1.2em;
		font-weight: 300;
		text-align: center;
		line-height: 1.3em;
		letter-spacing: 0px;
		behavior: url(/sapef23/f23/javascript/css3pie.htc);}		
		#mainContent .riquadro table.expandable tr td .riquadro div {
			margin-top: 10px;
			padding: 5px;
			font-size: 0.9em;
		}
		#mainContent .riquadro table.expandable tr td .riquadro div table { margin-bottom: 5px; }
		#mainContent .riquadro table.expandable tr td .riquadro div table td {
			border: none;
			padding: 0 0 2px 7px;
			font-size: 1em;
			letter-spacing: -0.2px;
		}
		#mainContent .riquadro table.expandable tr td .riquadro div table td.oRight { padding: 0 7px 2px 0; }


	a.table-expand-collapse,
	a.table-expand-collapse.expand,
	a.table-expand-collapse.collapse {
		display: block;
		position: relative;
		bottom: auto;
		right: auto;
		margin: 0 auto;
		width: 20px;
		height: 20px;
		text-indent: 100%;
		overflow: hidden;
		white-space: nowrap;
	}
		

		a.table-expand-collapse.expand { background: url(/sapef23/f23/styles/youbusinessweb/images/icons-sprite.png) -60px 0px no-repeat; }
		a.table-expand-collapse.collapse { background: url/sapef23/f23/styles/youbusinessweb/images/icons-sprite.png) -40px 0px no-repeat; }
/****************************************/

#mainContent .riquadro .section .riquadro.importi { margin: 10px; }
#mainContent .riquadro .section .riquadro.importi div { margin-top: 0; }

#mainContent .riquadro .section .riquadro.importi table tr td,
#mainContent .riquadro .section .riquadro.importi table tr td.oRight {
	font-size: 1.1em;
	padding: 10px 8px;
}

#mainContent .riquadro .section .riquadro.importi div table tr.total td {
	/*border-top: 2px solid #a2b7cb;*/
	background: #e7eff5;
	color: #003b79;
}
.checkbox input[type=checkbox]{
	position:relative;
	margin:0;
}

.form-horizontal .control-label {
	text-align: left !important;
}

.form-horizontal .control-label.txt_right {
		text-align: right;
}

.checkbox label{
	font-weight: 700;
}

.form-control{
	padding:4px;
	height: auto;
	font-size: 1em;
}

select.form-control { height: 25px; }

input.default-text,
textarea.default-text { color: #aaa; font-style: italic; }


span.resume {
	display: inline-block;
	padding-top: 7px;
	font-family: Helvetica, Arial, sans-serif;
	font-weight: bold;
	letter-spacing: -0.2px;
}
.riquadro {
	position: relative;
	display: block;
	background: #fff;
	height: auto;
	padding: 0px;
	margin: 0px;
	margin-bottom: 15px;
	border: 1px solid #b7c5b7;
	/*color: #001831;*/
   	color: #003b79;
	border-radius: 2px;
	box-shadow: 0px 1px 3px 1px #bbb;
}

.contentLeft .riquadro p { margin: 10px; }

.contentLeft ul.link-list {
	margin: 0;
	margin-left: 10px;
	margin-top: 10px;
	padding: 0;
}

.contentLeft ul.link-list  li {
	list-style-type: none;
	display: block;
	margin: 0px 10px 8px 10px;
	padding: 0;
}

.contentLeft .link-list li a { font-family: Helvetica, Arial, sans-serif; font-weight: bold; }
div.flag {
	width: 25px;
	height: 40px;
	display: block;
	float: left;
	position: absolute;
	top: 10px;
	left: 10px;
	z-index: 4;
}
.messaggio .btn-messaggi img{
		float: left;
		max-width: 200px;
		margin: 0px 15px 15px 0;
		padding: 0;
		display: block;
	}
	
.messaggio .btn-messaggi .collapse{
	display:none;
}

.messaggio .contentPangina img{
	float:left;
}

.messaggio .fullContent { display: none; }

/*box vincola*/

.vincola_box{
	display: inline-block;
	position: relative;
	width: 28px;
	height: 28px;
	float: left;
	cursor: pointer;
	background-color: #003366;
	color: white;
	font-weight: bold;
	margin-left: 1px;
	border-radius: 5px;
	text-align: center;
	padding-top: 5px;

}

input[type='text'].vincola{
	margin-left: 1px;
	margin-top: 2px;
}


/*#contentLeft .flag { top: 9px; }*/
div.flag.pagamentoF23{ background: url(/sapef23/f23/images/youbusinessweb/pins-sprite.png) no-repeat -78px 0; } /*new SIMO*/

h1 a,
h3 a,
a.help-icon,
a.action { display: inline-block; margin-right: 10px; vertical-align: middle; }

	h1 a img.imgSrv,
	h3 a img.imgSrv,
	a.help-icon img,
	a.action img, 
	img.ui-datepicker-trigger { float: none; margin-left: 10px; margin-right: 0; }
	


/* menu */
.navbar { margin-bottom: 0px; }

nav.nav-main.navbar-right {
	padding: 0;
}

ul.topMain>li {
	width: 90px;
	height: 84px;
}

.nav>li>a {
	padding: 0;
	height: 80px;
}

.topNav .disabled {
    opacity: 0.5; 
     padding-top: 4px;
     filter: alpha(opacity = 50); zoom:1;
}

.topNav .disabled .topMain ul.nav li,
.topNav .disabled .topMain ul.nav li strong { color: #ddd; }


ul.topMain>li>a:hover {
	/*border-bottom: 5px solid #61a4d3;*/
	border-radius: 0;
}

ul.topMain a:hover strong { color: #7db77d; }

ul.topMain>li.active {
	border-bottom: 5px solid #7db77d;
	border-radius: 0;
}

ul.dropdown-menu .row {
	margin: 0;
}

ul.dropdown-menu .row .col-md-4 ul {
	padding: 15px;
}

ul.dropdown-menu .row .col-md-4 {
	padding: 0;
}

.topNav ul.nav>li:hover a {
	color:#7db77d;
}

.topNav ul.nav>li.mega-menu div div {
	border-left: 1px solid #acd8ab;
	border-right: 1px solid #fff;
}

.topNav ul.nav>li.mega-menu>ul li.subdropdown:hover>a,
.topNav ul.nav>li.mega-menu>ul li.subdropdown>a { background: none; cursor: default; color: #999; text-decoration: none; }

.topNav ul.nav>li.mega-menu>ul li.subdropdown ul li {
	  margin-left: 0px;
	  padding: 0px;
	  padding-left: 10px;
	  font-size: 0.95em;
}


.topNav ul.nav>li.mega-menu div div.menu-info { margin: 0px; padding: 0px 10px; color: #666; }
.topNav ul.nav>li.mega-menu div div.menu-info div { padding-top: 5px; font-family: Helvetica, Arial, sans-serif; font-size: 0.9em; font-weight: normal; line-height: 1.2em; text-transform: none; }

.topNav ul.nav>li.mega-menu div div.menu-info h3 {
	margin: 8px 0px;
	padding: 0px 10px;
	color: #666;
	background: #e8f2e8;
	box-shadow: 0 10px 8px -6px rgba(108,159,108,0.5);
	border-bottom: 1px solid #6c9f6c;
	font-family: Helvetica, Arial, sans-serif;
	font-weight: normal;
	font-size: 1.2em;
	line-height: 1.25em;
	behavior: url(/sapef23/f23/javascript/css3pie.htc);
}

ul.topMain li .ico {
	width: 32px;
	height: 32px;
	margin: 0 auto;
	margin-bottom: 5px;
}

ul.topMain div.sportello { background: url(/sapef23/f23/images/menu-sprite.png) no-repeat 0px 0px; }
ul.topMain li.active div.sportello,
ul.topMain li.hover div.sportello,
ul.topMain a:hover div.sportello { background: url(/sapef23/f23/images/menu-sprite.png) no-repeat 0px -32px; }

ul.topMain div.dati-e-disposizioni { background: url(/sapef23/f23/images/menu-sprite.png) no-repeat -32px 0px; }
ul.topMain li.active div.dati-e-disposizioni,
ul.topMain li.hover div.dati-e-disposizioni,
ul.topMain a:hover div.dati-e-disposizioni { background: url(/sapef23/f23/images/menu-sprite.png) no-repeat -32px -32px; }

ul.topMain div.pagamenti { background: url(/sapef23/f23/images/menu-sprite.png) no-repeat -64px 0px; }
ul.topMain li.active div.pagamenti,
ul.topMain li.hover div.pagamenti,
ul.topMain a:hover div.pagamenti { background: url(/sapef23/f23/images/menu-sprite.png) no-repeat -64px -32px; }

ul.topMain div.carte { background: url(/sapef23/f23/images/menu-sprite.png) no-repeat -96px 0px; }
ul.topMain li.active div.carte,
ul.topMain li.hover div.carte,
ul.topMain a:hover div.carte { background: url(/sapef23/f23/images/menu-sprite.png) no-repeat -96px -32px; }

ul.topMain div.configura { background: url(/sapef23/f23/images/menu-sprite.png) no-repeat -128px 0px; }
ul.topMain li.active div.configura,
ul.topMain li.hover div.configura,
ul.topMain a:hover div.configura { background: url(/sapef23/f23/images/menu-sprite.png) no-repeat -128px -32px; }

ul.topMain div.incassi { background: url(/sapef23/f23/images/menu-sprite.png) no-repeat -160px 0px; }
ul.topMain li.active div.incassi,
ul.topMain li.hover div.incassi,
ul.topMain a:hover div.incassi { background: url(/sapef23/f23/images/menu-sprite.png) no-repeat -160px -32px; }

ul.topMain div.documenti { background: url(/sapef23/f23/images/menu-sprite.png) no-repeat -192px 0px; }
ul.topMain li.active div.documenti,
ul.topMain li.hover div.documenti,
ul.topMain a:hover div.documenti { background: url(/sapef23/f23/images/menu-sprite.png) no-repeat -192px -32px; }

ul.topMain div.anagrafiche { background: url(/sapef23/f23/images/menu-sprite.png) no-repeat -224px 0px; }
ul.topMain li.active div.anagrafiche,
ul.topMain li.hover div.anagrafiche,
ul.topMain a:hover div.anagrafiche { background: url(/sapef23/f23/images/menu-sprite.png) no-repeat -224px -32px; }

ul.topMain li ul.dropdown-menu .row {
	background: #e8f2e8;
	border: 1px solid #8fa48f;
}

ul.topMain li ul.dropdown-menu>li {
	padding-top: 10px;
}

ul.topMain li ul.dropdown-menu .row {
	background: #e8f2e8;
	border: 1px solid #8fa48f;
	padding: 10px 0px;
	box-shadow: 0 2px 8px 0px rgba(0,0,0,0.6);
	behavior: url(/sapef23/f23/javascript/css3pie.htc);
}

.topMain > li.sub-open > a {
	height: 90px;
	background: url(/sapef23/f23/images/menu-arrow.png) center 77px no-repeat;
	z-index: 2000;
}


/* Submenu positions */
.topMain li ul.dropdown-menu.sportello				{ left: 0px; }
.topMain li ul.dropdown-menu.dati-e-disposizioni	{ left: 20px; }
.topMain li ul.dropdown-menu.pagamenti				{ left: 0px; }
.topMain li ul.dropdown-menu.carte					{ left: 200px; }
.topMain li ul.dropdown-menu.configura				{ left: 110px; }
.topMain li ul.dropdown-menu.incassi				{ left: 80px; }
.topMain li ul.dropdown-menu.documenti				{ left: 60px; }
.topMain li ul.dropdown-menu.anagrafiche			{ left: 160px; }


/* fine menu*/

.icbpi > li > a {
	padding: 8px;
	height: 40px;
  margin-left:5px;
  margin-top:10px;  
}

#mainContent { padding-left: 0; padding-right: 0; }
	
	
.loginMessage {
	margin: 20px;
	margin-bottom: 40px;
	padding: 0px;
}
	.loginMessage img { float: left; max-width: 200px; margin: 0px 15px 15px 0; padding: 0; }
	.loginMessage p { margin: 0; margin-bottom: 10px; padding: 0; }

.loginMessage .fullContent { display: none; }







	#mainContent { padding-left: 0; padding-right: 10px; }
	
	#mainContent .riquadro .table { border-collapse: separate; clear: both; }
	
	
	#mainContent .riquadro .table tr td,
	#mainContent .riquadro .table tr th {
		
		vertical-align:middle;
	}	
	#mainContent .riquadro .table tr th {
	padding-top:4px;
	padding-bottom:4px;
	}
	
	#mainContent .riquadro .tabSelezioneMovimenti .table tr th.sorting,
	#mainContent .riquadro .tabSelezioneMovimenti .table tr th.sorting_asc,
	#mainContent .riquadro .tabSelezioneMovimenti .table tr th.sorting_desc{
		padding-left: 18px;
	}
	
	#mainContent .riquadro .tabSelezioneCC .dataTables_wrapper {
  padding: 5px 2px 1px 2px;
    background: #fff;
}

a.expand,
a.collapse {
	display: block;
	cursor: pointer;
	width: 30px;
	height: 30px;
	position: absolute;
	right: 15px;
	bottom: 15px;
	text-decoration: none;
}

	.collapsed a.collapse { display: none; }
	.expanded a.expand { display: none; }


.ibandiviso label {
height: 41px;
}

.imgSrv{
	float: left;
	margin-left: 10px;
}

form#formInserimento .nickname {
display: none;
}

.ui-dialog-title { font-family: Helvetica, Arial, sans-serif;
font-weight: bold; font-size: 16px; color: #fff; }

.ui-dialog,
.ui-dialog .ui-dialog-content{
	padding:0;
    z-index: 2000;
}

div.dialog-content {
	margin: 15px;
}

.form-group label,
.form-horizontal .control-label { padding-top: 7px; font-family: Helvetica, Arial, sans-serif; font-weight: normal; }

.formPopUp .form-group > div{
	margin-top:5px;
}

.padding10{
	padding:10px;
}

.padding10-0{
	padding:10px 0;
}

.formPopUp{
	margin-bottom: 10px;
}

.box-riquadro {
	box-shadow: 0px 1px 3px 1px #bbb;
	padding: 7px;
	margin-bottom: 20px;
	border-radius: 2px;
		behavior: url(/sapef23/f23/javascript/css3pie.htc);
}

.table.tableflat>tbody>tr>td{
	border-top:0;
	text-align:left;
}

.sliderContainerSpalla {
	margin-top: 8px;
	margin-bottom: 10px;
}


.sliderContainer {
	position: relative;
	width: 100%;
	height: 31px;
	padding-top: 8px;
}
.slider {
	margin-left: 10px;
	margin-right: 45px;
	border-radius: 5px;
}
.slider .ui-slider-handle {
	border-radius: 0 0 0 0;
	box-shadow: 1px 1px 2px #666666;
	height: 17px;
	margin-left: -22px;
	text-align: center;
	text-decoration: none;
	top: -5px;
	width: 45px;
	font-size:12px
}
.slider .ui-slider-handle:hover {
	text-decoration: none;
	cursor: e-resize;
	background: #7db77d url("/sapef23/f23/styles/youbusinessweb/images/ui-bg_glass_60_7db77d_1x400.png") 50% 50% repeat-x
}

.ui-slider .ui-slider-range { background: none; }

/**************** FOOTER *****************/

.footer{
	padding: 0px 0 8px 0px;
	border-top: 1px solid #7db77d;
	background: #d8e9d8;
	color: #003b79;
	min-height: 125px;
	font-size: 0.85em;
}

div.footer > div.container > div {
    font-size: 1.2em;
    line-height: 1.2em;
}

.footer p { margin: 4px 0px; }

.footer a{
    text-decoration: none;
	color:#003b79;
}

.footer a:hover{
text-decoration: underline;
}

.footer .social{
	text-align: left;
	
}
.footer .social a{
	margin-right:10px;
	margin-top:10px;
}
.footer .social a:last-child{
	margin-right:0;	
}
.footer-logo{
	margin-top:10px;
	float:right;	
	background: url(/sapef23/f23/styles/youbusinessweb/images/general-sprite.png) no-repeat 0px -310px;
	width: 170px;
	height: 52px;
}
.footer-logo span{
display:none;
}

/*Sonia: 09/12/2015 aggiunto per uniformare il footer a quello di Alten (come da richiesta Banca) */
.footer h4 {
    font-size: 1.1em;
    font-weight: bold;
}

.footer .assistenza { }

	.footer .assistenza > div { margin-bottom: 5px; }
	
	.footer .assistenza a.ico-assistenza,
	.footer .assistenza a.ico-manuale,
	.footer .assistenza a.ico-gestore {
		float: left;
		width: 28px;
		height: 28px;
		margin-right: 5px;
		margin-bottom: 5px;
		text-decoration: none;
	}
	
		.footer .assistenza a.ico-assistenza { background: url(/sapef23/f23/styles/youbusinessweb/images/general-sprite.png) -366px -978px no-repeat; }
		.footer .assistenza a.ico-manuale { background: url(/sapef23/f23/styles/youbusinessweb/images/general-sprite.png) -296px -978px no-repeat; }
		.footer .assistenza a.ico-gestore { background: url(/sapef23/f23/styles/youbusinessweb/images/general-sprite.png) -436px -978px no-repeat; }
		
.footer .manuale { margin-top: 36px; }

div.footer > div.container > div.disclaimer { font-size: 1em; }
/*Sonia: fine aggiunta*/

/***************** LEFT COLUMN *****************/

.spalla  .table{
	margin-bottom: 10px;
	margin-top: 10px;
}


.spalla  .table td {
	border:none;
	padding:0 0 2px 7px;
	font-size: 1em;
	letter-spacing: -0.2px;
}
.spalla  .table td strong { letter-spacing: -0.5px; }

.spalla .table-responsive{
	border-bottom:1px solid #eee;
}

.spalla .table-responsive:last-child{
	border:none;
}




/***************** BOX HOMEPAGE *****************/

.riquadro a {
	/*color: #357745;*/
}

.homebox { margin: 0; padding: 0; padding-top: 10px; padding-bottom: 5px; }


.homebox .homeMsg {
		display: inline-block;
		margin: 0 auto;
		margin-top: 20px;
		margin-bottom: 30px;
		padding: 2px 8px;
	}
	
		.homebox .homeMsg span.ui-icon { float: left; margin-top: 2px; margin-right: 8px; }	


	/* Link rapidi */
	ul.quick-links { margin: 5px; margin-bottom: 15px; padding: 0; }

	ul.quick-links li {
		list-style-type: none;
		display: block;
		min-height: 24px;
		margin: 0;
		margin-bottom: 6px;
		padding: 0;
		vertical-align: middle;
		font-weight: bold;
	}

		ul.quick-links li img { display: inline-block; vertical-align: middle; margin-right: 5px; }


	/* Riepilogo conto */
	.homebox div.account {
		position: relative;
		margin-right: 15px;
		padding: 3px 0 3px 15px;
		background: url(/sapef23/f23/styles/youbusinessweb/images/general-sprite.png) right -200px no-repeat;
	}
	
		.homebox div.account span {
			display: inline-block;
			width: 85%;
		}
		
			.homebox div.account span.coordinate {
				font-weight: bold;
				color: #357745;
			}
			.homebox div.account span.intestatario {
				font-size: 0.9em;
			}
			
			.homebox div.account a { position: absolute; right: 20px; top: 6px; }


		.homebox div.resume { margin-top: 10px; }
		
			.homebox .resume label.control-label {
				display: inline-block;
				margin-bottom: 0;
				border-bottom: none;
				font-weight: normal;
			}
			
			.homebox .resume span.resume {
				display: inline-block;
				margin-bottom: 0;
				padding-top: 0;
				color: #357745;
			}


	
/*********************************** BOOTSTRAP OVERRIDE *****************************************/
.col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
  padding-right: 10px;
  padding-left: 10px;
}
/************************************************************************************************/

/**********************AGGIUNTI NUOVI CSS GRAFICA HOME 27/01/2016************************************/
.col-xs-80, .col-xs-20, .col-xs-100 {
    float: left;
    position: relative;
    min-height: 1px;
    padding-right: 10px;
    padding-left: 10px;
}
	.col-xs-20 { width: 23%; }
	.col-xs-80 { width: 77%; }
    .col-xs-100 { width: 100%; }


    #MainSection #col1 { padding-left: 0; padding-right: 5px; }
	#MainSection #col2 { padding-left: 5px; padding-right: 0; }
/**********************AGGIUNTI NUOVI CSS GRAFICA HOME 27/01/2016************************************/





/***************** GRAFICI e TIMELINE *****************/

.tablePanel { display: block; clear: both; }
.timelinePanel { opacity: 0; clear: both; }
.chartPanel {
	opacity: 0;
	width: 75%;
	margin: 0px auto;
	text-align: center;
}
.chart-canvas { margin: 0px auto; margin-bottom: 10px; }

div.legend {
	position: absolute;
	top: 20px;
	right: 30px;
	padding: 5px 15px;
	border: 1px solid #ccc;
	border-radius: 4px;
	z-index: 1000;
	background: rgba(255,255,255,0.75);
}

	.legend ul.chart-legend {
		display: block;
		margin: 0;
		padding: 0;
	}
	
		.legend ul.chart-legend li {
			display: block;
			list-style-type: none;
			margin: 4px 0px;
			padding: 4px 0;
		}
			.legend ul.chart-legend li span.color {
				display: table-cell;
				width: 20px;
				height: 20px;
				margin-right: 10px;
				padding: 0;
				/*border: 1px solid #888;*/
				box-shadow: 0 0 2px 0px rgba(0,0,0,0.7);
				border-radius: 3px;
			}
			.legend ul.chart-legend li span.label {
				display: table-cell;
				vertical-align: middle;
				padding-top: 5px;
				color: #444;
				font-size: 0.8em;
				font-weight: normal;
			}



a.pdf {
	display: block;
	min-height: 24px;
	margin-bottom: 8px;
	padding-left: 32px;
	padding-top: 4px;
	color: #003b79;
	text-decoration: none;
	background: url(/sapef23/f23/styles/youbusinessweb/images/general-sprite.png) -296px -774px no-repeat;
	line-height: 20px;
}

span.pdf {
    display: inline-block;
	min-height: 24px;
	margin-bottom: 1px;
	padding-left: 24px;
	padding-top: 4px;
	color: #003b79;
	text-decoration: none;
	background: url(/sapef23/f23/styles/youbusinessweb/images/general-sprite.png) -296px -774px no-repeat;
	line-height: 20px;
}

.display-none { display: none; }


.left { float: left; }
.right { float: right; }

.txt_center { text-align: center; }
.txt_left { text-align: left; }
.txt_right { text-align: right; }
.txt_bottom { vertical-align: bottom; }

.vertical_center,
.table>tbody>tr>td.vertical_center { vertical-align: middle; }


.txt16 { font-size: 16px; }
.txt14 { font-size: 14px; }
.txt11 { font-size: 11px; }
.txt10 { font-size: 10px; }


.line24 { line-height: 24px; }
.line20 { line-height: 20px; }
.line16 { line-height: 16px; }
.line14 { line-height: 14px; }

.blue { color: #003b79; }
.red { color: #b40303; }

.margin-top5 { margin-top: 5px; }
.margin-top10 { margin-top: 10px; }
.margin-top20 { margin-top: 20px; }
.margin-top28 { margin-top: 28px; }
.margin-top22 { margin-top: 22px; }
.margin-bottom20 { margin-bottom: 20px; }

.clear-padding { padding: 0px !important; }

div.messagePanel {
	display: none;
	min-height: 100px;
	margin: 0;
	margin-top: 15px;
	margin-bottom: 20px;
	padding: 0;
	border: none;
	border-radius: 0;
	font-size: 1.04em;
}
	div.messagePanel.visible { display: block; }

div.messagePanel.error { background: url(/sapef23/f23/images/ico_msg_error.png) #fff3ef 20px 36px no-repeat; }
div.messagePanel.alert { background: url(/sapef23/f23/images/ico_msg_alert.png) #fdfce4 20px 36px no-repeat; }
div.messagePanel.waiting { background: url(/sapef23/f23/images/ico_msg_awaiting.png) #fdfce4 20px 36px no-repeat; }
div.messagePanel.success { background: url(/sapef23/f23/images/ico_msg_ok.png) #f3fdf2 20px 36px no-repeat; }


	.messagePanel h3 { margin-top: 0px; }
	.messagePanel ul, .messagePanel p { margin-left: 100px; margin-right: 10px; padding: 0px; }
	.messagePanel strong { font-size: 1.04em; font-family: Helvetica, Arial, sans-serif; font-weight: bold; font-weight: bold; }



.newsItem {
	margin: 10px;
}

	.newsItem span.date { display: block; color: #666; font-size: 1.04em; font-family: Helvetica, Arial, sans-serif;
font-weight: bold; font-weight: 600; }
	.newsItem strong.title { display: block; margin: 3px 0px 10px 0; font-size: 1.04em; }
	.newsItem a img { display: block; margin: 0 auto; max-width: 95%; }
	/*.newsItem p { margin: 0px; margin-top: 10px; padding: 0px; font-size: 13px; text-align: justify; }*/
    .newsItem p { margin: 0px; margin-top: 10px; padding: 0px; font-size: 1.0em; text-align: justify; }



.ui-dialog .ui-dialog-titlebar { border-radius: 2px 2px 0 0; }


/***** CUSTOM JQUERY UI DATEPICKER ******/

.ui-widget {
	font-family: Helvetica,Arial,sans-serif;
	font-size: 1em;
}
.ui-widget .ui-widget {
	font-size: 1em;
}
.ui-widget input,
.ui-widget select,
.ui-widget textarea,
.ui-widget button {
	font-family: Helvetica,Arial,sans-serif;
	font-size: 1em;
}
.ui-widget-content {
	border: 1px solid #aaaaaa;
	background: #ffffff url("/sapef23/f23/styles/youbusinessweb/images/ui-bg_flat_75_ffffff_40x100.png") 50% 50% repeat-x;
	color: #001831;
}
.ui-widget-content a {
	color: #001831;
}
.ui-widget-header {
	border: 1px solid #7db77d;
	background: #7db77d url("/sapef23/f23/styles/youbusinessweb/images/ui-bg_glass_60_7db77d_1x400.png") 50% 50% repeat-x;
	color: #fff;
	font-weight: bold;
}
.ui-widget-header a {
	color: #fff;
}

/* Interaction states
----------------------------------*/
.ui-state-default,
.ui-widget-content .ui-state-default,
.ui-widget-header .ui-state-default {
	border: 1px solid #aaaaaa;
	background: #cce2cc url("/sapef23/f23/styles/youbusinessweb/images/ui-bg_flat_75_cce2cc_40x100.png") 50% 50% repeat-x;
	font-weight: normal;
	color: #003b79;
}
.ui-state-default a,
.ui-state-default a:link,
.ui-state-default a:visited {
	color: #003b79;
	text-decoration: none;
}
.ui-state-hover,
.ui-widget-content .ui-state-hover,
.ui-widget-header .ui-state-hover,
.ui-state-focus,
.ui-widget-content .ui-state-focus,
.ui-widget-header .ui-state-focus {
	border: 1px solid #7ea889;
	background: #7ea889 url("/sapef23/f23/styles/youbusinessweb/images/ui-bg_flat_75_7ea889_40x100.png") 50% 50% repeat-x;
	font-weight: normal;
	color: #fff;
}
.ui-state-hover a,
.ui-state-hover a:hover,
.ui-state-hover a:link,
.ui-state-hover a:visited,
.ui-state-focus a,
.ui-state-focus a:hover,
.ui-state-focus a:link,
.ui-state-focus a:visited {
	color: #fff;
	text-decoration: none;
}
.ui-state-active,
.ui-widget-content .ui-state-active,
.ui-widget-header .ui-state-active {
	border: 1px solid #aaaaaa;
	background: #97d596 url("/sapef23/f23/styles/youbusinessweb/images/ui-bg_flat_65_97d596_40x100.png") 50% 50% repeat-x;
	font-weight: normal;
	color: #fff;
}
.ui-state-active a,
.ui-state-active a:link,
.ui-state-active a:visited {
	color: #fff;
	text-decoration: none;
}

/* Interaction Cues
----------------------------------*/
.ui-state-highlight,
.ui-widget-content .ui-state-highlight,
.ui-widget-header .ui-state-highlight {
	border: 1px solid #dbc66e;
	background: #fdee79 url("/sapef23/f23/styles/youbusinessweb/images/ui-bg_flat_55_fdee79_40x100.png") 50% 50% repeat-x;
	color: #001831;
}
.ui-state-highlight a,
.ui-widget-content .ui-state-highlight a,
.ui-widget-header .ui-state-highlight a {
	color: #001831;
}
.ui-state-error,
.ui-widget-content .ui-state-error,
.ui-widget-header .ui-state-error {
	border: 1px solid #ff3919;
	background: #fff3ef url("/sapef23/f23/styles/youbusinessweb/images/ui-bg_flat_95_fff3ef_40x100.png") 50% 50% repeat-x;
	color: #001831;
}
.ui-state-error a,
.ui-widget-content .ui-state-error a,
.ui-widget-header .ui-state-error a {
	color: #001831;
}
.ui-state-error-text,
.ui-widget-content .ui-state-error-text,
.ui-widget-header .ui-state-error-text {
	color: #001831;
}
.ui-priority-primary,
.ui-widget-content .ui-priority-primary,
.ui-widget-header .ui-priority-primary {
	font-weight: bold;
}
.ui-priority-secondary,
.ui-widget-content .ui-priority-secondary,
.ui-widget-header .ui-priority-secondary {
    -ms-opacity: .7;
    opacity: .7;
    -webkit-filter:Alpha(Opacity=70);
    -moz-filter:Alpha(Opacity=70);
    -o-filter:Alpha(Opacity=70);
    filter:Alpha(Opacity=70); /* support: IE8 */
	font-weight: normal;
}

.ui-state-disabled,
.ui-widget-content .ui-state-disabled,
.ui-widget-header .ui-state-disabled {
    -ms-opacity: .35;
    opacity: .35;
    -webkit-filter:Alpha(Opacity=35);
    -moz-filter:Alpha(Opacity=35);
    -o-filter:Alpha(Opacity=35);
    filter:Alpha(Opacity=35); /* support: IE8 */
	background-image: none;
}

.ui-state-disabled .ui-icon {
    -webkit-filter:Alpha(Opacity=35);
    -moz-filter:Alpha(Opacity=35);
    -o-filter:Alpha(Opacity=35);
    filter:Alpha(Opacity=35); /* support: IE8 - See #6059 */
}
.ybb-pp{
    background-color:#E8F2E8;
    border-spacing:2px;
	box-shadow: 0 1px 8px 1px rgba(0,0,0,0.5);
    border:rgba(0,0,0,0.2) 1px solid;
    
}

/* Icons
----------------------------------*/

/* states and images */
.ui-icon {
	width: 16px;
	height: 16px;
}
.ui-icon,
.ui-widget-content .ui-icon {
	background-image: url("/sapef23/f23/styles/youbusinessweb/images/ui-icons_001831_256x240.png");
}
.ui-widget-header .ui-icon {
	background-image: url("/sapef23/f23/styles/youbusinessweb/images/ui-icons_fff_256x240.png");
}
.ui-state-default .ui-icon {
	background-image: url("/sapef23/f23/styles/youbusinessweb/images/ui-icons_fff_256x240.png");
}
.ui-state-hover .ui-icon,
.ui-state-focus .ui-icon {
	background-image: url("/sapef23/f23/styles/youbusinessweb/images/ui-icons_fff_256x240.png");
}
.ui-state-active .ui-icon {
	background-image: url("/sapef23/f23/styles/youbusinessweb/images/ui-icons_fff_256x240.png");
}
.ui-state-highlight .ui-icon {
	background-image: url("/sapef23/f23/styles/youbusinessweb/images/ui-icons_dbc66e_256x240.png");
}
.ui-state-error .ui-icon,
.ui-state-error-text .ui-icon {
	background-image: url("/sapef23/f23/styles/youbusinessweb/images/ui-icons_ff3919_256x240.png");
}

/* Overlays */
.ui-widget-overlay {
    background: #aaaaaa url("/sapef23/f23/styles/youbusinessweb/images/ui-bg_flat_0_aaaaaa_40x100.png") 50% 50% repeat-x;
    -ms-opacity: .3;
    opacity: .3;
    -webkit-filter: Alpha(Opacity=30);
    -moz-filter: Alpha(Opacity=30);
    -o-filter: Alpha(Opacity=30);
    filter: Alpha(Opacity=30); /* support: IE8 */
}

.ui-widget-shadow {
    margin: -8px 0 0 -8px;
	padding: 8px;
	background: #aaaaaa url("/sapef23/f23/styles/youbusinessweb/images/ui-bg_flat_0_aaaaaa_40x100.png") 50% 50% repeat-x;
    -ms-opacity: .3;
    opacity: .3;
    -webkit-filter: Alpha(Opacity=30);
    -moz-filter: Alpha(Opacity=30);
    -o-filter: Alpha(Opacity=30);
    filter: Alpha(Opacity=30); /* support: IE8 */
    -ms-border-radius: 8px;
    border-radius: 8px;
}


/* EVENTI */

#riepilogoEventi {
	height: 200px;
	margin-bottom: 10px;
	overflow-y: auto;
	overflow-x: hidden;
}

.legendaEventi { margin-bottom: 10px; line-height: normal; }

.colorBox {
	clear: left;
	float: left;
	margin-top: 1px;
	padding-top: 10px;
	padding-left: 10px;
	width: 10px;
	height: 10px;
	margin-right: 5px;
}
/****** BOOTSTRAP POPOVER ******/
.popover {
	background-color: #c5e7bc;
} 
.popover-content { padding: 4px; }

	.popover.top>.arrow:after { border-top-color: #c5e7bc; }
	.popover.left>.arrow:after { border-left-color: #c5e7bc; }
	.popover.bottom>.arrow:after { border-bottom-color: #c5e7bc; }
	.popover.right>.arrow:after { border-right-color: #c5e7bc; } 

.event-description { float: left; padding: 0; font-size: 0.85em; }

	.event-description span.event-category { display: inline-block; margin-bottom: 3px; font-size: 1.1em; }

	.event-description ul { margin: 0; padding: 0 0 0 18px; }
		.event-description ul li { margin-bottom: 5px; }


.legendaEventi .oggi, .events-legend .oggi,
td.oggi > .ui-state-default { background: #fdee79; border: 1px solid #dbc66e; }

.legendaEventi .appuntamento, .events-legend .appuntamento,
td.appuntamento > .ui-state-default { background: #14955d; color: #fff; border: 1px solid #10764a; }

.legendaEventi .festivita, .events-legend .festivita,
td.festivita > .ui-state-default { background: #e25c5c; color: #fff; border: 1px solid #b64444; }

.legendaEventi .fiscale, .events-legend .fiscale,
 td.fiscale > .ui-state-default { background: #377ade; color: #fff; border: 1px solid #2a5eac; }

.legendaEventi .amministrazione, .events-legend .amministrazione,
 td.amministrazione > .ui-state-default { background: #1077e3; color: #fff; border: 1px solid #2a5eac; }

.legendaEventi .compleanno, .events-legend .compleanno,
 td.compleanno > .ui-state-default { background: #f1a732; color: #fff; border: 1px solid #dbc66e; }

/**********************************************************************/

.container.help {
    width: auto;
    margin-top: 10px;
}

@media (max-width:767px){ body { width: 100%; } .container{ width:980px; } }
@media (min-width:768px){ body { width: 100%; } .container{ width:980px; } }
@media (min-width:1000px){ body { width: 100%; } .container{ width: 100%; } }

/*commentato originale questo tiene il contentuto della homepage più stretto*/
@media (min-width:1200px){ body { font-size: 12px; } .container{ width:auto; min-width: 1000px; max-width: 1320px; } .spalla { display: block; } }
/**********************AGGIUNTI NUOVI CSS GRAFICA HOME 27/01/2016************************************/
/*nuova modifica questo tiene il contentuto della homepage più largo come sito alten*/
/*@media (min-width:1200px){ body { font-size: 12px; } .container{ width: 100% !important; min-width: 1000px; max-width: 1680px; } .spalla { display: block; } }*/
/**********************AGGIUNTI NUOVI CSS GRAFICA HOME 27/01/2016************************************/
@media (min-width:1320px){ body { font-size: 13px; } #mainContent { font-size: 1.05em; } }
#divNumeriPagina {
    display: block;
    text-align: center;
}
.customPag:hover {
	background: #7ea889; 
	text-decoration: none;
}

.customPag {
	display: inline-block;
	position: relative;
	margin: 10px 5px;
	width: 24px;
	height: 24px;
	padding: 0;
	border-radius: 12px;
	color: #fff !important;
	background: #99c99c;
	font-weight: bold;
	font-size: 12px;
	text-align: center;
	cursor: pointer;
	line-height: 26px;
	behavior: url(/sapef23/f23/javascript/css3pie.htc);
	outline: none;
}

.txtNumeroPagine {
	display: inline-block;
	position: relative;
	margin: 10px 5px;
	width: 24px;
	height: 24px;
	padding: 0;
	border-radius: 12px;
	color: #fff !important;
	background: #357745;
	font-weight: bold;
	font-size: 12px;
	text-align: center;
	cursor: pointer;
	line-height: 26px;
	behavior: url(/sapef23/f23/javascript/css3pie.htc);
	outline: none;
}

/*Codice modifica $16061$*/


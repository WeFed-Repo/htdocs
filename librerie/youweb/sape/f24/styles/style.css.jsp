
@CHARSET "ISO-8859-1";


html { height: 100%; background: url(/sape/f24/images/header_bkg_repeat.jpg) left -113px repeat-x; }

body {
	height: 100%;
	margin: 0;
	background: url(/sape/f24/images/header_bkg.jpg) center -113px no-repeat;
	font-size: 11px;
	font-family: Helvetica, Arial, sans-serif;
	color: #003B79;
}

.wrapper { min-height: 83%; }

.row { margin: 0; }

.main { margin-top: 30px;}

strong {
	font-family: Helvetica, Arial, sans-serif;
	font-weight: bold;
}

a, a:link, a:visited, a:active, a:focus { color: #003b79; text-decoration: none; }
a:hover { color: #003b79; text-decoration: underline; }

h1 {
	display: inline-table;
	position: relative;
	color: #666;
	background: #fff;
	box-shadow: 0 8px 8px -6px rgba(97,162,211,0.6);
	border-bottom: 1px solid #61a4d3;
	padding: 0 15px 0 45px;
	margin: 10px 0 20px 0;
	font-family: Helvetica, Arial, sans-serif;
	font-size: 1.4em;
	font-weight: 300;
	line-height: 24px;
	letter-spacing: 0px;
	behavior: url(/sape/f24/javascript/css3pie.htc);
}
.conferma{
	behavior: url(/sape/f24/javascript/css3pie.htc)!important;
}

	#contentLeft h1 {
		font-size: 1.4em;
		line-height: 24px;
		letter-spacing: 0px;
		padding: 0 15px 0 40px;
		margin: 10px 0px 20px 0px;
		behavior: url(/sape/f24/javascript/css3pie.htc);
	}
	
	#contentLeft h1.centered-title {
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
hr{border-bottom: 1px dotted #a2b7cb; /* by icbpi*/ }

.negativo{
	color: #d00;
	text-align:right;
}
.positivo{
	text-align:right;
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
	/*background: #fafcfe;*/
	background: #f5f9fc;
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

input.hasDatepicker[disabled] + img.ui-datepicker-trigger {
     display: none;
}

h3.titleSection {
	margin-bottom: 6px;
}
.titleSection, .titleSectionLong {
	display: inline-block;
	color: #003b79;
	background: url(/sape/f24/images/sf_titolo.png) right center no-repeat;
	margin-top: 0px;

	padding-right: 50px;
	font-family: Helvetica, Arial, sans-serif;
	font-size: 1.2em;
	font-weight: 300;
}

	.success .titleSection {
		background: url(/sape/f24/images/sf_titolo_verde.png) right center no-repeat;
	}
	
	.alert .titleSection,
	.waiting .titleSection {
	background: url(/sape/f24/images/sf_titolo_giallo.png) right center no-repeat;
	}
	
	.error .titleSection {
		background: url(/sape/f24/images/sf_titolo_rosso.png) right center no-repeat;
		color: #fff;
	}
	
	.error .error-field label { color: #d00; }
	.error .error-field input,
	.error .error-field select,
	.error .error-field textarea { border: 1px solid #d00; }

textarea.form-control{
	max-width:100%;
	min-width:30%;
}

div.context-buttons {
	float: right;
	margin-bottom: 5px;
}
	.context-buttons a {
		display: inline-block;
		width: 30px;
		height: 30px;
		text-indent: 100%;
		white-space: nowrap;
		overflow: hidden;
	}
	
		.context-buttons a.btnTable { background: url(/sape/f24/images/btn-i-tabella.png) center top no-repeat; }
		.context-buttons a.btnChart { background: url(/sape/f24/images/btn-i-grafico.png) center top no-repeat; }
		.context-buttons a.btnTimeline { background: url(/sape/f24/images/btn-i-timeline.png) center top no-repeat; }
		
		.context-buttons a:hover { background-position: center center; }
		.context-buttons a.disabled { background-position: center bottom; cursor: default; }
	
	
	

	.bs-example {
		position: relative;
		margin: 0px;
		padding: 0 0px 15px px;
	}

		.bs-example > p { padding: 10px 15px 0 15px; }
	
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
	position: relative;
	display: inline-block;
	padding: 3px 8px;
	background: #1b5a9a;
	border-radius: 4px;
	color: #fff;
	font-size:12px;
	line-height: 14px;
	behavior: url(/sape/f24/javascript/css3pie.htc);
	text-transform: capitalize;
}
span.btn{
	line-height: 9px;
}

.btn:hover, .btn:focus, .btn:active, .btn.active { color: #fff; background: #6689af; border-color: #6689af; }


	.form-horizontal .form-group{ 
		margin: 0; 
		margin-bottom:7px; }


.form-group .btn { margin-bottom: 0; }




.btn-primary {
	position: relative;
	margin: 0 10px;
	margin-bottom: 10px;
	font-size: 14px;
	line-height: 20px;
	padding: 4px 10px;	
	border: 2px solid #1b5a9a;
	behavior: url(/sape/f24/javascript/css3pie.htc);
}

	.btn-primary:last-child{
		margin-right:0;
	}
.btn-primary.execute {
	color: #fff;
	background: #61a4d3;
	border: 2px solid #003b79;
}
.btn-primary.execute:hover { background: #a0c8e5; border-color: #6689af; }

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

	min-width: 60px;
	margin: 10px;
	padding: 6px 12px;
	background: #1b5a9a;
	border: none;
	border-radius: 6px;
	color: #fff;	
	font-size: 1.04em;
	font-weight: bold;
	line-height: 16px;
	text-transform: capitalize;
	behavior: url(/sape/f24/javascript/css3pie.htc);
}
.select-button.active { background: #ffd801; }

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


input#importoInt, input.importo { width: 100px; display: inline-block; text-align: right; }
span.virgola { display: inline-block; padding: 0 5px; }
input#importoDec { display: inline-block; width: 40px; text-align: left; }


/***************************/


.logo{
	position:absolute;
	z-index:50;
	background: url(/sape/f24/images/sprite.png) no-repeat 0px 0px;
	width: 140px;
	height: 103px;
	top: 4px;
}

.logo a { display: block; width: 140px; height: 103px; cursor: pointer; }

.logo span{
	display: none;
}

.user-info { float: left; font-size: 10px; font-weight: normal; }


.breadcrumb{
	position: absolute;
	right: 0px;
	top: 0px;
	margin: 5px 10px 0px 0px;
	background: transparent;
	color: #666;
	font-size: 1.04em;
	font-weight: normal;
	text-transform: capitalize;
}
	.breadcrumb>li+li:before { color: #aaa; }


div.circle, div.circleConferma{
	width: 14px;
	height: 14px;
	border-radius: 50%;
	display: inline-block;
	margin-right: 3px;
	background: #7697ba;
	position: relative;
	top: 5px;
	behavior: url(/sape/f24/javascript/css3pie.htc);
}
div.circleConferma{
	behavior: url(/sape/f24/javascript/css3pie.htc);
}
div.circle_line{
	border-bottom: 3px solid #7697ba;
	width:90%;
	margin-top: 1px;
	position:absolute;
	font-size: 7px;
}
div.circle_line.current {
	width: auto;
	border-color: #003b79;
}

.pager{
	position:relative;
	margin-right: 15px;
}

div.circle.current_page, div.circleConferma.current_page{
background: #003b79;
}


/****** SELEZIONE RAPPORTO ********/

#mainContent .riquadro .table { border-collapse: separate; }
	

#mainContent .riquadro .table tr td,
#mainContent .riquadro .table tr th,
.ui-dialog .table tr th,
.ui-dialog .table tr td {
	border-top: 2px solid #fff;
	
}	
	#mainContent .riquadro .table tbody tr:nth-child(odd), .ui-dialog .table tbody tr:nth-child(odd) { background-color: #f5f5f5; }
	#mainContent .riquadro .table tbody tr:nth-child(even), .ui-dialog .table tbody tr:nth-child(even) { background-color: #e7eff5; }
		
	#mainContent .riquadro .table tr th,
	.ui-dialog .table tr th {
		border-bottom: none;
		border-top: none;
		background-color: #bcd9ec;
		vertical-align: middle;		
		font-weight: bold;
		font-size: 1.04em;
		font-weight: bold;
		line-height: 14px;
	}

#mainContent .riquadro .tabellaSelezioneCC, #mainContent .riquadro .tabellaSelezioneCarte,
.ui-dialog .tabellaSelezioneCC, .ui-dialog .tabellaSelezioneCarte { background: #e7eff5;}
	

#mainContent .riquadro .tabSelezioneCC .dataTables_wrapper,
#mainContent .riquadro .tabSelezioneCarte .dataTables_wrapper,
.ui-dialog .tabellaSelezioneCC .dataTables_wrapper,
.ui-dialog .tabellaSelezioneCarte .dataTables_wrapper{ padding: 0px; background-color:#fff; margin-bottom: 10px}
	
#mainContent .riquadro .tabSelezioneCC .table, #mainContent .riquadro .tabSelezioneCarte .table,
.ui-dialog .tabSelezioneCC .table, .ui-dialog .tabSelezioneCarte .table { margin-bottom: 0; }
	
#mainContent .riquadro .tabSelezioneCC .table tbody tr.hover,
#mainContent .riquadro .tabSelezioneCC .table tbody tr.hover:nth-child(odd),
#mainContent .riquadro .tabSelezioneCC .table tbody tr.hover:nth-child(even),
#mainContent .riquadro .tabSelezioneCarte .table tbody tr.hover,
#mainContent .riquadro .tabSelezioneCarte .table tbody tr.hover:nth-child(odd),
#mainContent .riquadro .tabSelezioneCarte .table tbody tr.hover:nth-child(even),

.ui-dialog .tabSelezioneCC .table tbody tr.hover,
.ui-dialog .tabSelezioneCC .table tbody tr.hover:nth-child(odd),
.ui-dialog .tabSelezioneCC .table tbody tr.hover:nth-child(even),
.ui-dialog .tabSelezioneCarte .table tbody tr.hover,
.ui-dialog .tabSelezioneCarte .table tbody tr.hover:nth-child(odd),
.ui-dialog .tabSelezioneCarte .table tbody tr.hover:nth-child(even) { cursor: pointer; background: #45719e !important; color: #fff; }
	
.CCselezionato {
	display: block;
	position: relative;
	margin: 10px 0 0 0;
	padding: 5px 0;
}
	.CCselezionato span {
		display: inline-block;
		margin: 0 8px 0 0px;
		padding: 2px 0;
	}
	
	.selezioneFinanziamenti .CCselezionato span{
		margin: 0;
	}
		
	.CCselezionato #intestazione{
		text-transform: capitalize;
	}
		
	.CCselezionato #numero,
	.CCselezionato #agenzia,
	.CCselezionato #intestazione {font-weight: bold;}
	
	.CCselezionato #numeri span { float: left; margin-right: 10px;}
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
	background: url(/sape/f24/images/ico-filter.png) right center no-repeat;
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
		margin: 10px 5px;
		width: 24px;
		height: 24px;
		padding: 0;
		border-radius: 50%;
		color: #fff;
		background: #99b1c9;
		font-weight: bold;
		font-size: 12px;
		text-align: center;
		cursor: pointer;
		line-height: 26px;
		behavior: url(/sape/f24/javascript/css3pie.htc);
		outline: none;
	}
	
	.dataTables_paginate span a.current { background: #003b79; }
	
	
	
	.dataTables_paginate span a:hover { background: #45719e; text-decoration: none; }
	
	
	/****************************************/
	/********* TABELLA ESPANDIBILE **********/
	
	#mainContent .riquadro table.expandable {}
	
	tr.odd { background-color: #f5f5f5; }
	tr.even { background-color: #e7eff5; }
	
	#mainContent .riquadro .tabSelezioneCC .table tbody > tr.hover td,
	#mainContent .riquadro .tabSelezioneCC .table tbody > tr.hover.odd td,
	#mainContent .riquadro .tabSelezioneCC .table tbody > tr.hover.even td { cursor: pointer; background: #45719e; color: #fff; }



	#mainContent .riquadro table.expandable tbody tr td table { width: 100%; }
		#mainContent .riquadro table.expandable tbody tr td table tr,
		#mainContent .riquadro table.expandable tbody tr td table tr:nth-child(odd),
		#mainContent .riquadro table.expandable tbody tr td table tr:nth-child(even) { background: none; }
			#mainContent .riquadro table.expandable tbody tr td table tr td { border: none; }
	
	#mainContent .riquadro table.expandable tbody tr.details { display: none; }
	
	#mainContent .riquadro table.expandable tbody tr.details > td { padding: 0px; padding-top: 5px; border: none; }
	
	#mainContent .riquadro table.expandable tr td .riquadro {
		box-shadow: none;
		border: 1px solid #dae6f0;
	}
		
	#mainContent .riquadro table.expandable tr td .riquadro h4 {
		display: block;
		position: relative;
		color: #666;
		background: #fff;
		box-shadow: 0 8px 8px -6px rgba(97,162,211,0.6);
		border-bottom: 1px solid #61a4d3;
		margin: 5px 10px;
		padding: 0 10px;
		font-size: 1.2em;
		font-weight: 300;
		text-align: center;
		line-height: 1.3em;
		letter-spacing: 0px;
		behavior: url(/sape/f24/javascript/css3pie.htc);
	}
		
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
	
	
	.CCselezionato .btnSelezioneCC.open { transform: rotate(180deg); }
	
	.dataTables_length { width: 40%; float: right; text-align: right; }
	.dataTables_filter {
		float: left;
		margin: 5px 0 8px 10px;
		padding-right: 30px;
		
	}
		.dataTables_filter label { margin-bottom: 5px; padding: 3px 0; font-weight: normal; }
		.dataTables_length label { margin-bottom: 0; padding: 8px 10px 0px 0; font-weight: normal; }
		
		.dataTables_filter input { margin: 0 10px; border: 1px solid #aaa; background: #f9f9f9; }
		.dataTables_filter input:after {
			content: " ";
			display: inline-block	
		}	
			
			
		.dataTables_paginate { text-align: center; }
.hide{
	display: none;
}
	
	
	/* Hide Prev and Next links */
	.dataTables_paginate > a { display: none; }
	
	
		.dataTables_paginate span a {
	
			display: inline-block;
			margin: 10px 5px;
			width: 24px;
			height: 24px;
			padding: 0;
			border-radius: 50%;
			color: #fff;
			background: #99b1c9;
			font-weight: bold;
			font-size: 12px;
			text-align: center;
			cursor: pointer;
			line-height: 26px;
	
		}
		
		.dataTables_paginate span a.current { background: #003b79; }
	
		.dataTables_paginate span a:hover { background: #4c75a1; text-decoration: none; }
	
	
	/****************************************/	
	a.table-expand-collapse,
	a.table-expand-collapse.expand,
	a.table-expand-collapse.collapse {
		display: block;
		position: relative;
		bottom: auto;
		right: auto;
		margin: 0 auto;
		width: 24px;
		height: 24px;
		text-indent: 100%;
		overflow: hidden;
		white-space: nowrap;
	}
		a.table-expand-collapse.expand { background: url(/sape/f24/images/ico-expand.png) center center no-repeat; }
		a.table-expand-collapse.collapse { background: url(/sape/f24/images/ico-collapse.png) center center no-repeat; }


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
	padding:2px;
	height: 22px;
	font-size: 1em;
}
	
select.form-control { height: 22px; }
	
	input.default-text,
	textarea.default-text { color: #aaa; font-style: italic; }
	
	span.resume {
		display: inline-block;
		font-weight: bold;
		letter-spacing: -0.2px;
	}
	
	.selezioneCC .table>thead>tr>th, 
	.selezioneCC .table>tbody>tr>th, 
	.selezioneCC .table>tfoot>tr>th, 
	.selezioneCC .table>thead>tr>td, 
	.selezioneCC .table>tbody>tr>td, 
	.selezioneCC .table>tfoot>tr>td{
		padding:4px;
	
	}
	.table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td{
		padding:3px 10px 3px 10px;
	}
	.riquadro {
		position: relative;
		display: block;
		background: #fff;
		height: auto;
		padding: 0px;
		margin: 0px;
		margin-bottom: 10px;
		border: 1px solid #b7c5d1;
		border-radius: 2px;
		box-shadow: 0px 1px 3px 1px #bbb;
	}
	
	#contentLeft .riquadro p { margin: 10px; }
	
	#contentLeft .riquadro .messagePanel.alert p { margin: 10px 0px 0px 100px; };
	
	#contentLeft ul.link-list {
		margin: 0;
		margin-top: 10px;
		padding: 0!important;
	}
	
	#contentLeft ul.link-list {
		padding: 0!important;
		margin-left: 10px;
	}
	
		#contentLeft ul.link-list  li {
			list-style-type: none;
			display: block;
			margin: 0px 10px 8px 10px;
			padding: 0;
		}
		
		#contentLeft .link-list li a { 
	font-weight: bold; }
		
	
	
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
	
	div.browserVersione{
		width: 100%;
		height: 35px;
		float: left;
		clear: both;
	}
	
	div.browserVersione > p{
		padding-top: 10px;
		margin-left: 40px;
	}
	
	div.browser {
		width: 29px;
		height: 35px;
		display: block;
		float: left;
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
	
	


div.flag.pagamentoF24{ background: url(/sape/f24/images/pins-sprite.png) no-repeat -78px 0; } /*new SIMO*/





h1 a,
h3 a,
a.help-icon,
a.action { display: inline-block; margin-right: 10px; vertical-align: middle; }

	h1 a img.imgSrv,
	h3 a img.imgSrv,
	a.help-icon img,
	a.action img, 
	img.ui-datepicker-trigger{ float: none; margin-left: 10px; margin-right: 0;cursor: pointer;
}
	

.topbar {
	height: 35px;
	font-weight: bold;
	background-color: #d2e6f4;
	border: none;
	color: #003b79;
	padding: 2px 0px;
}

.topbar span {
	color: #666;
}

.topbar .buttons div {
	padding: 2px 5px;
}

.logout form {
	width: 25px;
	height: 25px;
	background: url(/sape/f24/images/sprite.png) no-repeat -222px -89px;
	display: block;
}

.pref a {
	width: 25px;
	height: 25px;
	background: url(/sape/f24/images/sprite.png) no-repeat -200px -88px;
	display: block;
}

.lock a {
	width: 25px;
	height: 25px;
	background: url(/sape/f24/images/sprite.png) no-repeat -172px -89px;
	display: block;
}

/* menu */
.navbar { margin-bottom: 0px; }

nav.nav-main.navbar-right {
	padding: 0;
}

ul#topMain>li {
	width: 90px;
	height: 84px;
}

.nav>li>a {
	padding: 0;
	height: 80px;
}

.icbpi > li > a {
	padding: 8px;
	height: 40px;
  margin-left:5px;
  margin-top:10px;  
}

#topNav .disabled { opacity: 0.5; padding-top: 4px; }
#topNav .disabled #topMain ul.nav li,
#topNav .disabled #topMain ul.nav li strong { color: #ddd; }


ul#topMain>li>a:hover {
	/*border-bottom: 5px solid #61a4d3;*/
	border-radius: 0;
}

ul#topMain a:hover strong { color: #61a4d3; }

ul#topMain>li.active {
	border-bottom: 5px solid #61a4d3;
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

#topNav ul.nav>li.mega-menu div div.menu-info { margin: 0px; padding: 0px 10px; color: #003b79; }
#topNav ul.nav>li.mega-menu div div.menu-info div { padding-top: 5px; font-family: Helvetica, Arial, sans-serif; font-size: 0.9em; font-weight: normal; line-height: 1.2em; text-transform: none; }

#topNav ul.nav>li.mega-menu div div.menu-info h3 {
	margin: 8px 0px;
	padding: 0px 10px;
	color: #003b79;
	background: #d6e8f4;
	font-family: Helvetica, Arial, sans-serif;
	font-weight: normal;
	font-size: 1.2em;
	line-height: 1.25em;
	box-shadow: 0 10px 8px -6px rgba(0,59,121,0.5);
	border-bottom: 1px solid #4883c0;
	behavior: url(/sape/f24/javascript/css3pie.htc);
}

ul#topMain li .ico {
	width: 32px;
	height: 32px;
	margin: 0 auto;
	margin-bottom: 5px;
}

ul#topMain div.sportello { background: url(/sape/f24/images/menu-sprite.png) no-repeat 0px 0px; }
ul#topMain li.active div.sportello,
ul#topMain li.hover div.sportello,
ul#topMain a:hover div.sportello { background: url(/sape/f24/images/menu-sprite.png) no-repeat 0px -32px; }

ul#topMain div.contodeposito { background: url(/sape/f24/images/menu-sprite.png) no-repeat -32px 0px; }
ul#topMain li.active div.contodeposito,
ul#topMain li.hover div.contodeposito,
ul#topMain a:hover div.contodeposito { background: url(/sape/f24/images/menu-sprite.png) no-repeat -32px -32px; }

ul#topMain div.pagamenti { background: url(/sape/f24/images/menu-sprite.png) no-repeat -64px 0px; }
ul#topMain li.active div.pagamenti,
ul#topMain li.hover div.pagamenti,
ul#topMain a:hover div.pagamenti { background: url(/sape/f24/images/menu-sprite.png) no-repeat -64px -32px; }

ul#topMain div.carte { background: url(/sape/f24/images/menu-sprite.png) no-repeat -96px 0px; }
ul#topMain li.active div.carte,
ul#topMain li.hover div.carte,
ul#topMain a:hover div.carte { background: url(/sape/f24/images/menu-sprite.png) no-repeat -96px -32px; }

ul#topMain div.alert { background: url(/sape/f24/images/menu-sprite.png) no-repeat -128px 0px; }
ul#topMain li.active div.alert,
ul#topMain li.hover div.alert,
ul#topMain a:hover div.alert { background: url(/sape/f24/images/menu-sprite.png) no-repeat -128px -32px; }

ul#topMain div.posta_personale { background: url(/sape/f24/images/menu-sprite.png) no-repeat -160px 0px; }
ul#topMain li.active div.posta_personale,
ul#topMain li.hover div.posta_personale,
ul#topMain a:hover div.posta_personale { background: url(/sape/f24/images/menu-sprite.png) no-repeat -160px -32px; }

ul#topMain div.investimenti { background: url(/sape/f24/images/menu-sprite.png) no-repeat -192px 0px; }
ul#topMain li.active div.investimenti,
ul#topMain li.hover div.investimenti,
ul#topMain a:hover div.investimenti { background: url(/sape/f24/images/menu-sprite.png) no-repeat -192px -32px; }

ul#topMain div.servizi_per_te { background: url(/sape/f24/images/menu-sprite.png) no-repeat -224px 0px; }
ul#topMain li.active div.servizi_per_te,
ul#topMain li.hover div.servizi_per_te,
ul#topMain a:hover div.servizi_per_te { background: url(/sape/f24/images/menu-sprite.png) no-repeat -224px -32px; }

.mega-menu.dropdown .alert{
	padding:0;
} 


ul#topMain li ul.dropdown-menu>li {
	padding-top: 10px;
}

ul#topMain li ul.dropdown-menu .row {
	background: #d6e8f4;
	padding: 10px 0px;
	border: 1px solid #8f9ba4;
	box-shadow: 0 2px 8px 0px rgba(0,0,0,0.6);
	behavior: url(/sape/f24/javascript/css3pie.htc);
}


#topMain > li.sub-open > a {
	height: 90px;
	background: url(/sape/f24/images/menu-arrow.png) center 77px no-repeat;
	z-index: 2000;
}
/*
#topMain > li.sub-open > a:after {
	position: absolute;
	top: 77px;
	display: block;
	width: 21px;
	height: 15px;
	content: '';
	background: url(/sape/f24/images/menu-arrow.png) center bottom no-repeat;
	left: 50%;
	margin-left: -11px;
	z-index: 99900;
}
*/

/* Submenu positions */
#topMain li ul.dropdown-menu.sportello			{ left: 0px; }
#topMain li ul.dropdown-menu.contodeposito		{ left: 0px; }
#topMain li ul.dropdown-menu.pagamenti			{ left: 0px; }
#topMain li ul.dropdown-menu.carte				{ left: 0px; }
#topMain li ul.dropdown-menu.alert				{ left: 0px; }
#topMain li ul.dropdown-menu.posta_personale	{ left: 80px; }
#topMain li ul.dropdown-menu.investimenti		{ left: 0px; }
#topMain li ul.dropdown-menu.servizi_per_te		{ left: 80px; }






#topMain li ul.dropdown-menu.sportello:after {
	left: 45px;
	/*border-right: 8px solid transparent;
	border-bottom: 8px solid #d6e8f4;
	border-left: 8px solid transparent;*/
}

#topMain li ul.dropdown-menu.contodeposito:after {
	left: 145px;
}

#topMain li ul.dropdown-menu.pagamenti:after {
	left: 245px;
}

#topMain li ul.dropdown-menu.carte:after {
	left: 350px;
}

#topMain li ul.dropdown-menu.alert:after {
	left: 450px;
}

#topMain li ul.dropdown-menu.posta_personale:after {
	left: 550px;
}

#topMain li ul.dropdown-menu.investimenti:after {
	left: 655px;
}

#topMain li ul.dropdown-menu.servizi_per_te:after {
	left: 755px;
}


/* fine menu*/


/**** LINK RAPIDI ****/

ul.quick-links { margin: 5px 10px; padding: 0; }

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
	
	
.loginMessage {
	margin: 20px;
	margin-bottom: 40px;
	padding: 0px;
}
	.loginMessage img { float: left; max-width: 200px; margin: 0px 15px 15px 0; padding: 0; }
	.loginMessage p { margin: 0; margin-bottom: 10px; padding: 0; }

.loginMessage .fullContent { display: none; }


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
}

div.dialog-content {
	margin: 15px;
}

.form-group label,
.form-horizontal .control-label { margin-bottom:0; padding-top: 2px;  font-weight: normal;position:relative;}

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
	behavior: url(/sape/f24/javascript/css3pie.htc);
}

.table.tableflat>tbody>tr>td{
	border-top:0;
	text-align:left;
}

.footer{
	padding: 10px 0 8px 0px;
	border-top: 1px solid #b6c7d5;
	background: #d7ebf9; /*#c4d4e4;*/
	color: #003b79;
	font-size: 1em;
}

.footer p { margin: 4px 0px; }

.footer a{
	text-decoration: underline;
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
	background: url(/sape/f24/images/sprite.png) no-repeat 0px -178px;
	width: 170px;
	height: 52px;
}
.footer-logo span{
display:none;
}

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


/* GRAFICI e TIMELINE */

.tablePanel { display: block; }
.timelinePanel { opacity: 0; }
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
	background: url(/sape/f24/images/i_pdf.png) left 0px no-repeat;
	line-height: 20px;
}

.display-none { display: none; }


.left { float: left; }
.right { float: right; }

.txt_center { text-align: center; }
.txt_left { text-align: left; }
.txt_right { text-align: right; }

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

.margin-right20 {margin-right: 20px;}
.margin-bottom20{margin-bottom: 20px;}
.margin-top28 { margin-top: 28px; }
.margin-top22 { margin-top: 22px; }
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

div.messagePanel.error { background: url(/sape/f24/images/ico_msg_error.png) #fff9f9 20px 35px no-repeat; }
div.messagePanel.alert { background: url(/sape/f24/images/ico_msg_alert.png) #fdfce4 20px 35px no-repeat; }
div.messagePanel.waiting { background: url(/sape/f24/images/ico_msg_awaiting.png) #fdfce4 20px center no-repeat; }
div.messagePanel.success { background: url(/sape/f24/images/ico_msg_ok.png) #f3fdf2 20px 35px no-repeat; }

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
.newsItem p { margin: 0px; margin-top: 10px; padding: 0px; font-size: 13px; text-align: justify; }



.ui-dialog .ui-dialog-titlebar { border-radius: 2px 2px 0 0; }



/*-- by icbpi --*/
.container.help{width:auto; margin-top: 10px;}
.bs-example.help{padding:10px;}
.col-lg-1.col-lg-1-icbpi, .col-md-1.col-md-1-icbpi, .col-sm-1.col-sm-1-icbpi, .col-xs-1.col-xs-1-icbpi {
    width: 10%;
} 
	.selezionato,.selezionato:focus, .selezionato:active{
		background-color: #1b5a9a;
		border: medium none;
		text-transform: uppercase;
		color:#fff;
	}
	
	.nonSelezionato,.nonSelezionato:hover{
		background-color: #999;
		border: medium none;
		text-transform: uppercase;
		color:#fff;
	}
	.solaLettura{
	    background-color: #EEEEEE;	   	
		}		
	#divNumeriPagina{text-align:center!important; display:block;}
	
	.input-group { 
  	display: block;}
  
 	.input-group-btn, .input-group .form-control {
    display: inline;
    float: left;
    padding-left: 0;
	}
	.input-group .form-control {
 		margin-left: 57px;}
    
	
/*--*/

@media (min-width:1000px){ body { width: 100%; } .container{ width: 100%; } }
@media (min-width:1200px){ body { font-size: 12px; } .container{ width:auto; min-width: 1000px; max-width: 1320px; } .spalla { display: block; } }
@media (min-width:1320px){ body { font-size: 13px; } .mainContent { font-size: 1.05em; }}
@media (min-width: 672px) and (max-width: 1024px) {
	body, html {
    	font-size: 10px !important;
    	width: 100%;
	}
	.container{ width: 100%; } 
	.form-horizontal .form-group {
    	margin-left: 0 !important;
    	margin-right: 0 !important;
	}
	.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
    	min-height: 1px;
    	padding-left: 5px!important;
    	padding-right: 5px!important;
    	position: relative;
    	
	}

	.pop p{padding:10px !important;}
	
	
	.addScrollClass {
	 -webkit-transform: translate3d(0, 0, 0) !important;
	 -webkit-overflow-scrolling:touch !important;
	 overflow:scroll !important;
	}

	td a, td a:link, td a:visited, td a:active, td a:focus {
	    text-decoration: underline !important;
	}
	td a:hover {
	    text-decoration: none !important;
	}

	.ui-dialog {
    top: 10px !important;
	}
	.pull-right img{position:absolute !important; z-index:100; margin-left:-2px;}

	input[type="date"], input[type="time"], input[type="datetime-local"], input[type="month"],.form-control{
	    line-height: normal !important;
	}
	
}

 	#label-intestazione {
    clear: both;
    display: block;
    float: left;
    width: 33.3333%;
}

.table-responsive > .table > thead > tr > th, .table-responsive > .table > tbody > tr > th, .table-responsive > .table > thead > tr > td, .table-responsive > .table > tbody > tr > td{
    white-space: normal;
}
.aCapo{width:260px; display:block; word-wrap: break-word;}


/* modifiche */

/* FONT MONTSERRAT */
/*
@font-face {font-family: 'bankFont'; src: url('/HT/fe/font/futuraBT/27145D_1_0.eot'); 
	src: url("/wscmn/font/futuraBT/27145D_1_0.eot?#iefix") format("embedded-opentype"), 
	url("/wscmn/font/futuraBT/27145D_1_0.woff") format("woff"), 
	url("/wscmn/font/futuraBT/27145D_1_0.ttf") format("truetype");
	font-weight:300;font-style:normal;}
@font-face {font-family: 'bankFont'; src: url('/HT/fe/font/futuraBT/27145D_4_0.eot'); 
	src: url("/wscmn/font/futuraBT/27145D_4_0.eot?#iefix") format("embedded-opentype"), 
	url("/wscmn/font/futuraBT/27145D_4_0.woff") format("woff"), 
	url("/wscmn/font/futuraBT/27145D_4_0.ttf") format("truetype");
	font-weight:600;font-style:bold;}
*/
@font-face {font-family: 'bankFont';  
	src: url('/HT/fe/font/montserrat-light-webfont.woff2') format('woff2'),
         url('/HT/fe/font/montserrat-light-webfont.woff') format('woff');
	font-weight:300;
	font-style:normal;
}
@font-face {font-family: 'bankFont';  
	src: url('/HT/fe/font/montserrat-lightitalic-webfont.woff2') format('woff2'),
         url('/HT/fe/font/montserrat-lightitalic-webfont.woff') format('woff');
	font-weight:300;
	font-style:italic;
}

@font-face {font-family: 'bankFont';  
	src: url('/HT/fe/font/montserrat-medium-webfont.woff2') format('woff2'),
         url('/HT/fe/font/montserrat-medium-webfont.woff') format('woff');
	font-weight:600;
	font-style:normal;
}
@font-face {font-family: 'bankFont';  
	src: url('/HT/fe/font/montserrat-mediumitalic-webfont.woff2') format('woff2'),
         url('/HT/fe/font/montserrat-mediumitalic-webfont.woff') format('woff');
	font-weight:600;
	font-style:italic;
}

@font-face {font-family: 'bankFont';  
	src: url('/HT/fe/font/montserrat-semibold-webfont.woff2') format('woff2'),
         url('/HT/fe/font/montserrat-semibold-webfont.woff') format('woff');
	font-weight: 800;
	font-style:normal;
}
@font-face {font-family: 'bankFont';  
	src: url('/HT/fe/font/montserrat-semibolditalic-webfont.woff2') format('woff2'),
         url('/HT/fe/font/montserrat-semibolditalic-webfont.woff') format('woff');
	font-weight:800;
	font-style:italic;
}
/* /FONT */




html, body, div.flag.pagamentoF24, .titleSection, .titleSectionLong {background:none; }
.breadcrumb {left: 20px;}
body, strong {font-family: 'bankFont', Arial, sans-serif;}
#mainContent h1 {
    margin: 0 0 13px 20px;
    padding: 0;
    font-size: 18px;
    font-weight: 600;
    text-transform: uppercase;
    float: left;
    letter-spacing: 1px;
}
.btn-primary, .btn-primary:hover, .btn-primary:visited, .btn-primary.execute, .btn-primary.execute:hover {
    position: relative;
    margin-bottom: 30px;
    font-size: 14px;
    border: 0;
    padding: 9px 28px 7px 28px;
    color: #fff;
    background-color: #0e977f!important;
    background-image: none;
	border-radius: 16px;
	text-transform: uppercase;
	line-height: 14px;
	font-weight: 600;
}

h1 {box-shadow: none; border-bottom: 0;padding: 0 15px 0 20px; font-family: 'bankFont', Arial, sans-serif;}


.riquadro{border:0;border-radius:0;box-shadow:none;}
.form-control{background-color:#fff;box-shadow:none;}
hr {border-bottom: 1px solid #a2b7cb;border-top:0;}
#mainContent .riquadro .tabellaSelezioneCC, #mainContent .riquadro .tabellaSelezioneCarte, .ui-dialog .tabellaSelezioneCC, .ui-dialog .tabellaSelezioneCarte { background: #dadde0;}

div .pager .circle:after{position: relative;top:3px;left:-2px;}
div .pager .circle:nth-child(2):after {content: "1";}
div .pager .circle:nth-child(3):after {content: "2";} 
div .pager .circle:nth-child(4):after {content: "3";} 
div .pager .circle:nth-child(5):after {content: "4";}
div .pager .circle:nth-child(6):after {content: "5";}
div.circle:last-child{margin-right: 0}

div.circle{
		width: 22px;
		height: 22px;
		border-radius: 50%;
		display: inline-block;
		margin-right: 3px;
		background: #d7d7d7;
		position: relative;
		top: 5px;
		color:#fff;
		text-align: center
	}
div.circle_line{
		width:90%;
		position:absolute;
		font-size: 7px;
		border-bottom: 0;
	}
	div.circle_line.current {
		width: auto;
		border-color: #003b79;
	}
	
	.pager{
		position:relative;
		top:14px;
		margin-right: 15px;
		margin: 0;
		width:100%;
		text-align:right;
	}	
h1 {color:#202d50;}
.success .titleSection {background: none; color: #75c2b8; font-size:16px}
div.messagePanel.success { background: none;}
.messagePanel ul, .messagePanel p { margin-left:20px; color: #75c2b8; font-size:14px}

.error .titleSection {background: none; color: #f16875; font-size:16px}
div.messagePanel.error { background: none;}
div.messagePanel.error p {color: #f16875;}
.error a, .error a:link, .error a:visited, .error a:active, .error a:focus {color: #f16875; text-decoration: none;}
.alert  .titleSection {background: none; color: #f16875; font-size:16px}
div.messagePanel.alert { background: none;}
div.messagePanel.alert h3, div.messagePanel.alert p {color: #edb54d;}
.alert a, .alert a:link, .alert a:visited, .alert a:active, .alert a:focus {color: #edb54d; text-decoration: none;}
.messagePanel strong {font-weight:normal;}
div.messagePanel h3 {font-weight: 600;}

.sectionNoBg {background: none;}
.btn-col input[type="button"].button,
.btn-col .btn, .btn-col .btn:hover, .btn-col .btn:focus, .btn-col .btn:active {background: #0e977f; border-color: #0e977f;}

#mainContent .riquadro .table tr th,.ui-dialog .table tr th {background-color: #dadde0;}
.table-responsive {border:0}
#mainContent .riquadro .table tbody tr:nth-child(odd), .ui-dialog .table tbody tr:nth-child(odd) { background-color: #edeff0; }
#mainContent .riquadro .table tbody tr:nth-child(even), .ui-dialog .table tbody tr:nth-child(even) { background-color: #dadde0; }

.CCselezionato .btnSelezioneCC img {display: none;}
.CCselezionato .btnSelezioneCC { margin-top: -46px;}
.CCselezionato .btnSelezioneCC {display: block; width:23px; height:23px; background: url(/sape/f24/images/icon_accordion_closed.png) no-repeat 98% center; background-size:100%; top:62px; right: 30px;}
	#mainContent .riquadro .tabSelezioneCC .table tbody > tr.hover.even td, #mainContent .riquadro .tabSelezioneCC .table tbody > tr.hover.odd td { cursor: pointer; background:#003b79; color: #fff; }
.table.help .paro .left, .table.help .disparo .left {float: none;}
.btn, .btn:hover, .btn:focus, .btn:active, .btn.active { color: #fff; background:#0e977f; border-color:#0e977f;}

	
	
/*codice modifica $MOD699$*/
/*codice modifica $3400$*/
/*codice modifica $3401$*/
/*codice modifica $3755$*/
/*codice modifica $3996$*/
/*codice modifica $4430$*/
/*Codice modifica $9333$*/
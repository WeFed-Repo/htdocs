
<?php
/* PARTE PUBBLICA  */

//XXXBANKING HOME
if ($bank != "webank" && $location == "hom" && $area == "pub") {
?>
	<link href="/wscmn/css/pub_home.css" rel="stylesheet" type="text/css" media="all">
	<link href="/css/pub_home_color.css" rel="stylesheet" type="text/css" media="all">
<?php
}

//XXXBANKING PUBBLICA
if ($bank != "webank" && $location != "hom" && $area == "pub") {
?>
	<link href="/wscmn/css/pub_generic2.css" rel="stylesheet" type="text/css" media="all">
	<link href="/css/pub_color.css" rel="stylesheet" type="text/css" media="all">
<?php
}

//WEBANK HOME
if ($bank == "webank" && $location == "hom" && $area == "pub") {
?>
	<link rel="stylesheet" href="/css/pub_home.css">
<?php
}

//WEBANK PUBBLICA

if ($bank == "webank" && $location != "hom" && $area == "pub") {
?>
<link rel="stylesheet" href="css/pub_generic.css"></link>
<link rel="stylesheet" href="css/pub_print_wb.css" media="print"></link>
<?php
	if ($location == "con" || $location == "fro") {
		?>
		<style type="text/css">
			body {background:#fff;}
			#leftSite {background:none;}
			#rightSite {background:none;}
			#main {background:none;}
		</style>
		<?php
	}	
}

//XXXBANKING PRIVATA RETAIL
if ($area == "pri" && $customer == "ret") {
?>
	<link href="/wscmn/css/priv_generic.css" rel="stylesheet" type="text/css" media="all">
	<link href="/wscmn/css/ret/priv_special.css" rel="stylesheet" type="text/css" media="all">
	<link href="/wscmn/css/ret/priv_fes.css" rel="stylesheet" type="text/css" media="all">
	<link href="/css/ret/priv_color.css" rel="stylesheet" type="text/css" media="all">
	<link href="/wscmn/css/priv_print.css" rel="stylesheet" type="text/css" media="print">
	<link rel="stylesheet" href="/wscmn/css/priv_calendar.css" type="text/css" media="all">
	
<?php
}

//XXXBANKING PRIVATA BUSINESS
if ($bank != "webank" && $area == "pri" && $customer == "bus") {
?>
	<link href="/wscmn/css/priv_generic.css" rel="stylesheet" type="text/css" media="all">
	<link href="/wscmn/css/bus/priv_special.css" rel="stylesheet" type="text/css" media="all">
	<link href="/css/bus/priv_color.css" rel="stylesheet" type="text/css" media="all">
	<link rel="stylesheet" type="text/css" media="print" href="/wscmn/css/priv_print.css">
	<link rel="stylesheet" href="/wscmn/css/priv_calendar.css" type="text/css" media="all">
<?php
}

//HACK PER IE 7-9
?>
<!--[if lte IE 9]> 
<link rel="stylesheet" href="/wscmn/css/priv_generic_compat.css" type="text/css" media="all">
<![endif]-->

















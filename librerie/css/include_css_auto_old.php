<?php

//XXXBANKING HOME
//if ($bank != "webank" && $location == "hom" && $area == "pub") {virtual ("/wscmn/css/include_home_css.html");} // catalogo old
if ($bank != "webank" && $location == "hom" && $area == "pub") {virtual ("/librerie/css/pub_all_home_css.php");}

//XXXBANKING PUBBLICA
if ($bank != "webank" && $location != "hom" && $area == "pub") {virtual ("/wscmn/css/include_css_pub.html");} // catalogo old
//if ($bank != "webank" && $location != "hom" && $area == "pub") {virtual ("/wscmn/css/pub_all_int_css.php");}

//XXXBANKING PRIVATA RETAIL
if ($bank != "webank" && $area == "pri" && $customer == "ret") {virtual("/wscmn/css/include_css_priv.html");}

//XXXBANKING PRIVATA BUSINESS
if ($bank != "webank" && $area == "pri" && $customer == "bus") {virtual("/wscmn/css/include_css_priv_bus.html");}


//WEBANK HOME
if ($bank == "webank" && $location == "hom" && $area == "pub") {virtual("/wscmn/css/include_home_wb_css.html");}

//WEBANK PUBBLICA
if ($bank == "webank" && $location != "hom" && $area == "pub") 
{
	virtual("/wscmn/css/include_css_pub_wb.html");
	if ($location == "con" || $location == "fro")
	{
		?>
		<style>
			body {background:#fff;}
			#leftSite {background:none;}
			#rightSite {background:none;}
			#main {background:none;}
		</style>
		<?php
	}	
}

//WEBANK PRIVATA RETAIL + BUSINESS
if ($bank == "webank" && $area == "pri") {virtual("/wscmn/css/include_css_priv.html");}

?>
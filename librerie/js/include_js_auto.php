<?php

//XXXBANKING PUBBLICA
if ($bank != "webank" && $area == "pub") {virtual ("/wscmn/js/include_js_multi_pub.html");}

//XXXBANKING PRIVATA RETAIL
if ($bank != "webank" && $area == "pri" && $customer == "ret") {virtual("/js/include_js_priv.html");}


//XXXBANKING PRIVATA BUSINESS
if ($bank != "webank" && $area == "pri" && $customer == "bus") {virtual("/wscmn/js/include_js_bus_priv.html");}


//WEBANK HOME
if ($bank == "webank" && $location == "hom" && $area == "pub") {?><script language="javascript" type="text/javascript" src="/wscmn/js/pub_home_utilities2.js"></script><?php }

//WEBANK PUBBLICA
if ($bank == "webank" && $location != "hom" && $area == "pub") {virtual("/librerie/js/include_js_black_pub.php");}

//WEBANK PRIVATA RETAIL + BUSINESS
if ($bank == "webank" && $area == "pri") {virtual("/js/include_js_black_priv.html");}

//BPM PRIVATA OGGETTI SCHEDA PRODOTTO NEW LAYOUT
if ($bank == "bpm" && $page == "catalog_bpm_new_layout.php" && $customer == "ret") {virtual("/js/include_js_priv.html");}


?>
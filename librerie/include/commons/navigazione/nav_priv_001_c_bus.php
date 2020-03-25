<div id="header">
		<a href="index_priv.html" title="Banca Popolare di Milano" id="header_logo"><span>Banca Popolare di Milano</span></a>
		<div id="cerca_box">
			<input type="text" class="testo" name="cerca" value="Cerca la funzione" onclick="if(this.value == 'Cerca la funzione') {this.value = ''}" onblur="if(this.value == '') {this.value = 'Cerca la funzione'}" /> <input type="image" src="/img/bus/btn_cerca_header.gif" name="submitCerca" />
		</div>
		<div id="service_menu">
			<ul class="service_menu_links">
			<li class="inPlus">Plus</li>
			<li><a href="#"><span>Help Center</span></a></li>
			<li><a href="#"><span>Mappa</span></a></li>
			<li><a href="#"><span>Contatti</span></a></li>
			<li class="btnEsci"><input type="image" src="/img/bus/btn_esc_service.gif" /></li>
			</ul>
		</div>
	</div>	
	<script src="/wscmn/js/privata/utilities_condes.js" type="text/javascript"></script>

	 <div id="ticker"></div>
<script type="text/javascript">
ticker('<nobr id="firsttick" onmouseover="stopticker()" onmouseout="startticker()"><span><span><b><a href="#" onclick="openAlert(\'layeralert2\');void(0)">Lorem ipsum lorem ipsum.</a></b> Lorem ipsum lorem <b>ipsum lorem</b> ipsum lorem ipsum <a href="#" onclick="openAlert(\'layeralert2\');void(0)">lorem ipsum lorem ipsum</a> lorem ipsum.</span></span><span><span><b><a href="#" onclick="openAlert(\'layeralert2\');void(0)">Lorem ipsum lorem ipsum.</a></b> Lorem ipsum lorem <b>ipsum lorem</b> ipsum lorem ipsum <a href="#" onclick="openAlert(\'layeralert2\');void(0)">lorem ipsum lorem ipsum</a> lorem ipsum.</span></span></nobr>');
</script>
	<div id="help"><a href="#1" onmouseover="document.images.help.src='/img/bus/btn_help_on.gif'" onmouseout="document.images.help.src='/img/bus/btn_help_off.gif'" onclick="window.open('/wscmn/php/tpl_priv_popup_helpcenter.php?type=TESO&bank=<?php print $bank;?>','hc','width=194,height=<?php if($bank == "bm")print "404"; else print "424";?>,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=auto,resizable=no,top=170,left=760');"><img src="/img/bus/btn_help_off.gif" alt="Help" title="Help" name="help" /></a></div>
	
	<div id="ctnmenulevel1"> <img src="/img/bus/tab_tesoreria_on.gif" alt="" usemap="#map" id="tab"/><br />
    <ul id="nav_priv_iln_sportello" style="visibility:hidden">
      <li id="nav_priv_iln_corporate"><a href="#1" title="Corporate home"><span>Corporate 
        home</span>&nbsp;</a></li>
      <li id="nav_priv_iln_situaz_az"><a href="#1" title="Situazione azienda"><span>Situazione 
        azienda</span>&nbsp;</a></li>
      <li id="nav_priv_iln_pagamenti"><a href="#1" title="Pagamenti"><span>Pagamenti</span>&nbsp;</a></li>
      <li id="nav_priv_iln_incassi"><a href="#1" title="Incassi"><span>Incassi</span>&nbsp;</a></li>
      <li id="nav_priv_iln_anagrafiche"><a href="#1" title="Anagrafiche"><span>Anagrafiche</span>&nbsp;</a></li>
      <li id="nav_priv_iln_oltre_la_banca"><a href="#1" title="Oltre la banca"><span>Oltre 
        la banca</span>&nbsp;</a></li>
    </ul>
    <ul id="nav_priv_iln_enti" style="visibility:visible">
      <li id="nav_priv_iln_enti_corporate"><a href="#1" title="My home"><span>My home</span>&nbsp;</a></li>
      <li id="nav_priv_iln_enti_gestione_enti"><a href="#1" title="Gestione enti"><span>Gestione enti</span>&nbsp;</a></li>
      <li id="nav_priv_iln_enti_firma_digitale"><a href="#1" title="Firma digitale"><span>Firma digitale</span>&nbsp;</a></li>
      <li id="nav_priv_iln_enti_ici"><a href="#1" title="Ici"><span>Ici</span>&nbsp;</a></li>
      <li id="nav_priv_iln_incassi_vari"><a href="#1" title="Incassi"><span>Incassi</span>&nbsp;</a></li>
      <!--li id="nav_priv_iln_gest_fin_consulenza"><a href="fp_consulenza.html" title="Consulenza"><span>Consulenza</span>&nbsp;</a></li>
      <li id="nav_priv_iln_gest_fin_oltre_la_banca"><a href="fp_oltre_gest.html" title="Oltre la banca"><span>Oltre 
        la banca</span>&nbsp;</a></li-->
    </ul>
  </div>
  <map name="map" id="map">
	<area alt="" coords="122,2,241,19" href="#1" title="vai alla sezione Tesoreria" onclick="showTabGestione();" />
	<area alt="" coords="24,4,90,19" href="/connect.php?page=tpl_priv_bus_Teso_fp.php#1" title="vai alla sezione Sportello" onclick="hideTabGestione();" />
</map>

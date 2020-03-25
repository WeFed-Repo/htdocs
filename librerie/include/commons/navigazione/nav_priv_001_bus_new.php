<div id="headercontainerFlat">
	<img src="/img/logo_print_new.gif" class="printlogoNew" alt=""/>
	<a href="#"><img src="/img/logo_bpm_flat2.png"  class="logo" alt="Banca Popolare di Milano"/></a>
	<div class="headerFloat">
		<ul class="headerRightTop">
			<li class="tipoConto">
				<span>Classic</span>
			</li>
			<li>
				<a href="#"><span><i class="icon-phone"></i>Help Center</span></a>
			</li>
			<li>
				<a href="#"><span><i class="icon-sitemap"></i>Mappa</span></a>
			</li>
			<li>
				<a href="#"><span><i class="icon-envelope"></i>Contatti</span></a>
			</li>
			<li class="btnEsci"><a class="buttonFlat" onclick=""><span><i class="icon-off"></i>Esci</span></a></li>
		</ul>
		<br class="clear" />
    <?php 
      if ($page != "template_old/tpl_priv_bus_fp_box_va.php") { ?>

      <form name="ricerca" method="POST" action=""><span class="buttonFlatWrapper"><input type="text" class="buttonFlat" onblur="if(this.value == '') {this.value = 'Cerca'}" onclick="if(this.value == 'Cerca') {this.value = ''}" value="Cerca" name="searchTerms"><a href="#" class="invioFlat"><i class="icon-search"></i></a></span></form>

      <?php } ?>
    <ul class="headerRightBottom">
      <!-- Assistente virtuale da profilare -->
      <li id="assVirtuale"><a class="btnVirtass" onclick="javascript:;"></a></li>
      <!-- Fine assistente virtuale per profilazione -->
			<li id="help"><a class="buttonFlat" onclick=""><span><i class="icon-phone"></i>Help</span></a></li>
		</ul>
	</div>
</div>

<script src="/wscmn/js/privata/utilities_condes.js" type="text/javascript"></script>
	<div id="ctnmenulevel1"> 
	<!--<img alt="Vai alla Corporate home" title="Vai alla Corporate home" src="/INLINEANET/iln/img/tab_corporatehome.gif">-->
	<img src="/img/bus/tab_sportello_on.gif" alt="" usemap="#map" id="tab"/>
	
	<br />
    <ul id="nav_priv_iln_sportello">
							
      <li id="nav_priv_iln_corporate">
        <a class="current" title="" id="href_nav_priv_iln_corporate" href="/imprpri/wbOnetoone/HomePriv.do?cf=0.6288376103195973&amp;tabId=nav_priv_iln_corporate&amp;OBS_KEY=nav_priv_iln_corporate">
          <span></span>&nbsp;
        </a>
      </li>
							
      <li id="nav_priv_iln_situaz_az">
        <a class="" title="" id="href_nav_priv_iln_situaz_az" href="/imprpri/wbOnetoone/fpSchedaProdotto.do?cf=0.593485854410096&amp;tabId=nav_priv_iln_situaz_az&amp;OBS_KEY=nav_priv_iln_situaz_az">
          <span></span>&nbsp;
        </a>
      </li>
							
      <li id="nav_priv_iln_pagamenti">
        <a class="" title="" id="href_nav_priv_iln_pagamenti" href="/imprpri/wbOnetoone/fpSchedaProdotto.do?cf=0.5704957564002804&amp;tabId=nav_priv_iln_pagamenti&amp;OBS_KEY=nav_priv_iln_pagamenti">
          <span></span>&nbsp;
        </a>
      </li>
							
      <li id="nav_priv_iln_incassi">
        <a class="" title="" id="href_nav_priv_iln_incassi" href="/imprpri/wbOnetoone/fpSchedaProdotto.do?cf=0.7760236286724106&amp;tabId=nav_priv_iln_incassi&amp;OBS_KEY=nav_priv_iln_incassi">
          <span></span>&nbsp;
        </a>
      </li>
	  
	  <li id="nav_priv_iln_carte">
        <a class="" title="" id="href_nav_priv_iln_carte" href="/imprpri/wbOnetoone/fpSchedaProdotto.do?cf=0.7760236286724106&amp;tabId=nav_priv_iln_carte&amp;OBS_KEY=nav_priv_iln_carte">
          <span></span>&nbsp;
        </a>
      </li>
							
      <li id="nav_priv_iln_gest_fin_servizi">
        <a class="" title="SERVIZI" id="href_nav_priv_iln_gest_fin_servizi" href="/imprpri/wbOnetoone/fpSchedaProdotto.do?cf=0.9721501908920612&amp;tabId=nav_priv_iln_gest_fin_servizi&amp;OBS_KEY=nav_priv_iln_gest_fin_servizi">
          <span>SERVIZI</span>&nbsp;
        </a>
      </li>
	
    </ul>
   
		<ul id="nav_priv_iln_enti">
							
      <li id="nav_priv_iln_enti_corporate">
        <a href="/imprpri/wbOnetoone/HomePriv.do?cf=0.9085373880994088&tabId=nav_priv_iln_enti_corporate&OBS_KEY=nav_priv_iln_enti_corporate"
          id="href_nav_priv_iln_enti_corporate"
          title=""
          class="current">
          <span>My Home</span>&nbsp;
        </a>
      </li>
							
      <li id="nav_priv_iln_enti_gestione_enti">
        <a href="/imprpri/wbOnetoone/mf/do/wbOnetoone/WsRaDate.do?RAUri=SeEnti?cf=0.7632820408090301&tabId=nav_priv_iln_enti_gestione_enti&OBS_KEY=nav_priv_iln_enti_gestione_enti"
          id="href_nav_priv_iln_enti_gestione_enti"
          title="Gestione enti"
          class="">
          <span>Gestione enti</span>&nbsp;
        </a>
      </li>
							
      <li id="nav_priv_iln_enti_firma_digitale">
        <a href="/imprpri/wbOnetoone/mf/do/wbOnetoone/WsRaDate.do?RAUri=SeViewRiepilogo?cf=0.6637632147212214&tabId=nav_priv_iln_enti_firma_digitale&OBS_KEY=nav_priv_iln_enti_firma_digitale"
          id="href_nav_priv_iln_enti_firma_digitale"
          title="Firma digitale"
          class="">
          <span>Firma digitale</span>&nbsp;
        </a>
      </li>
							
      <li id="nav_priv_iln_enti_ici">
        <a href="/imprpri/wbOnetoone/mf/do/wbOnetoone/WsRaDate.do?RAUri=TeSeIci_CaricaFormSelezione?cf=0.09146139654771845&tabId=nav_priv_iln_enti_ici&OBS_KEY=nav_priv_iln_enti_ici"
          id="href_nav_priv_iln_enti_ici"
          title="Ici"
          class="">
          <span>Ici</span>&nbsp;
        </a>
      </li>
							
      <li id="nav_priv_iln_incassi_vari">
        <a href="/imprpri/wbOnetoone/mf/do/wbOnetoone/WsRaDate.do?RAUri=TeSeIncassiFormSelezione?cf=0.7218669879820827&tabId=nav_priv_iln_incassi_vari&OBS_KEY=nav_priv_iln_incassi_vari"
          id="href_nav_priv_iln_incassi_vari"
          title="Incassi vari"
          class="">
          <span>Incassi vari</span>&nbsp;
        </a>
      </li>
	
    </ul>
  </div>
 <map name="map" id="map">
	<area alt="" coords="89,0,167,33" href="#1" title="vai alla sezione Gestione finanziaria" onclick="showTabGestione();" onmouseover= "effectHoverFlat();" onmouseout= "effectHoverFlat();"/>
	<area alt="" coords="0,0,80,33" href="#1" title="vai alla sezione Sportello" onclick="hideTabGestione();" onmouseover= "effectHoverFlat2();" onmouseout= "effectHoverFlat2();"/>
  </map>
 

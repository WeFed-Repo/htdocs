<?php include("../core/base.php"); ?>
<?php
$tipo = $_GET["tipo"];
$libs = 'webank';
$libsurl = 'http://convergenza.webank.local';
$colorLink = "#8ab10b";

if ($site == 'youweb') {
	$libs = "youweb";
	$colorLink = "#122e5c";
}
$tpl = $_GET["tpl"];
$liv1 = $_GET["liv1"];
$liv2 = $_GET["liv2"];
$liv3 = $_GET["liv3"];
$liv4 = $_GET["liv4"];
$foreign = $_GET["foreign"];


/* Funzioni per il menu */
function getId($name) {

    $id = strtolower(str_replace(" ","_",$name));
    return $id;
}
$jsonstr = file_get_contents("../include/menu_".$site.".json");
$menu = json_decode($jsonstr,true);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="it">
    <head>
        <title>Webank</title>

		<?php
		$site = 'webank';

		include("../include/struttura/head_meta.php");
		include("../include/struttura/head_css.php");
		include("../include/struttura/head_js.php");
		?>

        <!-- JS LIBRERIE (non includere in sviluppo) -->
        <script src="/js/priv_librerie.js"></script>
        <!-- / JS LIBRERIE -->
    </head>
    <body class="myhome">

    <?php include("../include/struttura_webank/menu_mobile.php"); ?>



        <!-- HEADING -->
        <header class="headerFixed">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="printlogoNew">
                        <img src="/WB/fe/img/logo_print.gif" alt="Logo">
                    </div>
                    <!-- HEADER DESKTOP -->
                    <div class="row hidden-xs hidden-sm no-gutter-left">
                        <div class="col-md-3 col-md-offset-0 ">
                            <div id="logoWrap">
                                <a href="#"><img src="/WB/fe/img/logo_bank.png" alt="Logo"></a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="userMenu">
                                <ul class="userMenuConsole">
                                    <li><a class="userMenuLink telLink" href="tel:800060070"><i class="icon icon-numeroverde_desktop"></i><span
                                                    class="userMenuLabel">800 060 070</span></a></li>
                                    <li><a class="userMenuLink" href="#"><i class="icon icon-consultare_desktop"></i><span class="userMenuLabel">Consultare e disporre</span></a>
                                    </li>
                                    <li><a class="userMenuLink" href="#"><i class="icon icon-esci_desktop"></i><span class="userMenuLabel">Esci</span></a>
                                    </li>
                                </ul>
                                <ul class="userMenuInfo">
                                    <li class="nameConto"><span>Massimiliano Rossi Vincenzi</span></li>
                                    <li><a href="#"><i class="icon icon-imieidati_desktop"></i><span>I miei dati</span></a></li>
                                    <li><a href="#"><i class="icon icon-alert_desktop"></i><span>Alert</span></a></li>
                                    <li><a href="#"><i class="icon icon-sicurezza_desktop"></i><span>Sicurezza</span></a></li>
									<li><a href="#"><i class="icon icon-calendar"></i><span>Calendario</span></a></li>
                                </ul>
                            </div>
                            <ul id="userMenuMobile">
                <li class="userMenuMobile-first"><span class="nameConto">Mario Rossi</span></li>
                <li class="userMenuMobile-second"><a href="/WEBWB/serviziPerTe/contattiERecapiti.do" title="I Miei dati"><span>I miei dati</span><i class="icon icon-imieidati_mobile"></i></a></li>
                <li class="userMenuMobile-third"><a href="/WEBWB/sm/riepilogo.do" title="Alert"><span>Alert</span><i class="icon icon-alert_mobile"></i></a></li>
                <li class="userMenuMobile-fourth"><a href="/WEBWB/wb/content/sicurezzaInfo.do" title="Sicurezza"><span>Sicurezza</span><i class="icon icon-sicurezza_mobile"></i></a></li>
                <li class="userMenuMobile-fifth"><a href="/WEBWB/serviziPerTe/ilMioCalendario.do" title="Calendario"><span>Calendario</span><i class="icon icon-calendar"></i></a></li>
                <!--codice call me back mobile -->
                <li class="userMenuMobile-prenota-chiamata">
                    <span class="icona-call-me-back-wrapper stato-attivo">
                        <a data-toggle="modal" data-target="#modaleCallMeBack" class="icon-stato icon icon icon-cmb" title="Prenota una chiamata">
                            <span class="icon-text">Prenota una chiamata</span>
                            <i class="icon icon-ico_cmb_outline" title="Prenota una chiamata"></i>
                        </a>
                        <a data-toggle="modal" data-target="#modaleCallMeBack" class="icon-stato icon icon icon-cmb-ok" title="Prenota una chiamata-già prenotato">
                            <span class="icon-text">Prenota una chiamata</span>
                            <span class="glyph glyph-ico_cmb_badge" title="Prenota una chiamata-già prenotato"></span>
                        </a>
                        <a data-toggle="modal" data-target="#modaleCallMeBack" class="icon-stato icon icon icon-cmb-ko" title="Prenota una chiamata disservizio"> 
                            <span class="icon-text">Prenota una chiamata</span> 
                            <span class="glyph glyph-ico_cmb_alert" title="Prenota una chiamata disservizio"></span>
                        </a>
                    </span>
                </li>
                <!--codice call me back mobile -->
                 
                <li class="userMenuMobile-sixth"><a href="/WEBWB/wb/content/helpcenterContatti.do" title="Servizio clienti"><span>Servizio clienti</span><i class="icon icon-helpcenter"></i></a></li>
               
                <li class="userMenuMobile-seventh"><a href="/WEBWB/wb/content/contattaci.do" title="Scrivici"><span>Scrivici</span><i class="icon icon-scrivici"></i></a></li>
                <li class="userMenuMobile-eighth"><a href="#" title="Esci" onclick="$('form#logout').submit(); return false;"><span>Esci</span><i class="icon icon-esci_mobile"></i></a></li>
</ul>
                        </div>
                    </div>
                    <!-- FINE HEADER DESKTOP -->

                    <!-- HEADER MOBILE -->
                    <div class="headerMobile">
                        <div class="row hidden-md hidden-lg no-gutter">
                            <div class="col-xs-2">
                                <a class="headbtn menuopen btn-icon"><i class="icon icon-menu"></i></a>
                            </div>
                            <div class="col-xs-8">
                                <span id="logomyhome" onclick="location.reload();"><img src="/WB/fe/img/logo_mobile.png" alt="Logo"></span>
                                <span id="sectionName" onclick="location.reload();">Lorem ipsum dolor</span>
                            </div>
                            <div class="col-xs-2">
                                <a class="headbtn usermenuopen btn-icon"><i class="icon icon-user"></i></a>

                            </div>
                        </div>
                    </div>
                    <!-- FINE HEADER MOBILE -->
                </div>
            </div>
        </header>
        <!-- FINE HEADING -->

        <!-- MENU -->
        <?php include ("../include/struttura_webank/menu.php"); ?>
        <!-- FINE MENU -->

        <?php virtual ("/include/struttura_webank/toolbox.php"); ?>

        <div class="scrollable">
            <!-- CONTENT (dinamico a seconda del tipo di pagina da visualizzare - front page, pagina standard, pagina estesa) -->
            <div id="main">
                <div class="wrapper">
                    <div class="container-fluid">

						<?php

						$structure = "standard";
						// Full page
						if (strpos($tpl, "tpl_priv_full") !== false) {
							$structure = "full";
						} else {
							if (strpos($tpl, "tpl_priv_fp") !== false) {
								$structure = "fp";
							}
						}
						virtual("strutt_webank_navigazione.php");

						?>


                    </div>
                </div>
            </div>
            <!-- /CONTENT -->

            <!-- FOOTER -->
            <footer class="footerFixed">
                <div class="footermenu">
                    <div class="wrapper">
                        <ul>
                            <li><a href="/template/strutt_webank.php?tpl=tpl_responsive_trasparenza.php&responsive=y&liv0=8&liv1=0"
                                   title="Qui informazioni sulla trasparenza"><img src="/WB/fe/img/img_trasparenza_menu_footer.png"
                                                                                   alt="Qui informazioni sulla trasparenza"></a></li>
                            <li><a href="/template/strutt_webank.php?tpl=tpl_responsive_eventi.php&responsive=y&liv0=8&liv1=0" title="Eventi e corsi">Eventi
                                    e corsi</a></li>
                            <li><a href="/template/strutt_webank.php?tpl=tpl_responsive_fogli_informativi.php&responsive=y&liv0=8&liv1=0"
                                   title="Fogli Informativi">Fogli informativi</a></li>
                            <li><a href="/template/strutt_webank.php?tpl=tpl_responsive_privacy.php&responsive=y&liv0=8&liv2=1" title="Privacy">Privacy</a>
                            </li>
                            <li><a href="#" title="Reclami">Reclami</a></li>
                            <li><strong><a target="_blank" href="http://www.faresolidale.it/" title="Solidarietà">Solidariet&agrave;</a></strong></li>
                        </ul>
                    </div>
                </div>
                <div class="wrapper">
                    <p>Banca Popolare di Milano Societ&agrave; Cooperativa a r.l. Piazza F. Meda, 4 - 20121 Milano - tel. 02 77001<br> P. IVA
                        00715120150 Gruppo Bipiemme. Tutti i diritti riservati. </p>
                </div>
            </footer>            <!-- /FOOTER -->
        </div>
    </body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">
<head>
<?php
$hostsuffix = ($_SERVER['HTTP_HOST'] == 'librerie')? '' : 'FIX';
?>
<title>Librerie <?php print $fullname ?> <?php print $customer ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="Content-Language" content="it">
<meta name="script" http-equiv="Content-Script-Type" content="text/javascript">
<meta name="script" http-equiv="Content-Style-Type" content="text/css">
<?php
//solo per il caso webank
if ($bank == "webank" && $customer == "bus") {
  	echo "<meta http-equiv=\"refresh\" content=\"1;url=http://libreriewebank" . $hostsuffixa . "/connect.php?page=index.php&customer=ret\">";
	exit;
}
?>
<link rel="stylesheet" href="/wscmn/css/server.css"/>
<style>
	body {background-color: #fff !important;}
	.head {background-color: #fff; border: solid 2px <?php print $forecolor ?>; padding:5px 10px; margin:0 0 20px 0;}
	.head h2 {color: #666 !important}
	h3 {color: <?php print $forecolor ?>;}
</style>
<script type="text/javascript" src="/wscmn/js/ajax_low.js"></script>
</head>
<body bgcolor="#ffffff">
<div class="head">
  <h2>Librerie LANDING e MAIL</h2>
 
  <br class="clear" />  
</div>


<table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td class="bordo paddbot5" width="20%" align="center"><h3>AREA</h3></td>
		<td class="bordo" align="center" width="40%"><h3>TEMPLATE MAIL</h3></td>
	</tr>
	<tr>
		<td class="bordo paddbot5"><ul><li>Accredito stipendio</li></ul></td>
		<td class="bordo" align="center"><a href="http://librerie.webank.local/mail/mail_accredito_stipendio/mail.html">Arredito stipendio</a> | <a href="http://librerie.webank.local/mail/mail_accredito_stipendio_settembre/mail.html">Arredito stipendio settembre</a></td>
	</tr>
	<tr>
		<td class="bordo paddbot5"><ul><li>Bancarizzazione</li></ul></td>
		<td class="bordo" align="center"><a href="http://librerie.webank.local/mail/mail_bancarizzazione/mail_amex/mail.html">Amex</a> | <a href="http://librerie.webank.local/mail/amex/mail/mail.html">Amex 2</a> | <a href="http://librerie.webank.local/mail/mail_bancarizzazione/mail_cariparma/mail.html">Cariparma</a> | <a href="http://librerie.webank.local/mail/mail_bancarizzazione/mail_corporate/mail.html">Corporate</a>| <a href="http://librerie.webank.local/mail/mail_bancarizzazione/mail_intestatari/mail.html">Intestatari</a> | <a href="http://librerie.webank.local/mail/mail_bancarizzazione/mail_standard/mail.html">Standard</a> | <a href="http://librerie.webank.local/mail/mail_bancarizzati/mail.html">Bancarizzati</a></td>
	</tr>
	<tr>
		<td class="bordo paddbot5"><ul><li>Bancomat internazionale</li></ul></td>
		<td class="bordo" align="center"><a href="http://librerie.webank.local/mail/bancomat_internazionale/mail.html">Bancomat internazionale</a></td>
	</tr>
	<tr>
		<td class="bordo paddbot5"><ul><li>Blocchi operativi</li></ul></td>
		<td class="bordo" align="center"><a href="http://librerie.webank.local/mail/mail_blocchi/mail.html">Sito non disponibile</a></td>
	</tr>
	<tr>
		<td class="bordo paddbot5"><ul><li>Bollettino postale BPM</li></ul></td>
		<td class="bordo" align="center"><a href="http://librerie.webank.local/mail/mail_bollettino_postale_BPM/mail.html">Bollettino postale</a></td>
	</tr>
	<tr>
		<td class="bordo paddbot5"><ul><li>Campagna on boarding</li></ul></td>
		<td class="bordo" align="center"><a href="http://librerie.webank.local/mail/campagna_on_boarding/accredito_stipendio.html">Accredito stipendio</a>| <a href="http://librerie.webank.local/mail/campagna_on_boarding/bancomat.html">Bancomat internazionale</a>| <a href="http://librerie.webank.local/mail/campagna_on_boarding/trasloco.html">Trasloco</a></td>
	</tr>
	<tr>
		<td class="bordo paddbot5"><ul><li>Carte</li></ul></td>
		<td class="bordo" align="center"><a href="http://librerie.webank.local/mail/mail_cartajeans/mail.html">Cartajeans</a> | <a href="http://librerie.webank.local/mail/mail_cartimpronta/mail.html">Cartimpronta</a> | <a href="http://librerie.webank.local/mail/mail_cartimpronta/mail2.html">Cartimpronta2</a> | <a href="http://librerie.webank.local/mail/mail_iPad_noClienti/newsletter.html">Cartimpronta Ipad</a> | <a href="http://librerie.webank.local/mail/mail_cartimpronta_one/index.html">Cartimpronta ONE Christmas</a> | <a href="http://librerie.webank.local/mail/mail_movimenti_cartimpronta/mail.html">Movimenti Cartimpronta</a></td>
	</tr>
	<tr>
		<td class="bordo paddbot5"><ul><li>Commissioni zero</li></ul></td>
		<td class="bordo" align="center"><a href="http://librerie.webank.local/mail/mail_commisioni_zero/mail.html">Commissioni zero</a></td>
	</tr>
	<tr>
		<td class="bordo paddbot5"><ul><li>Comportamenti premianti</li></ul></td>
		<td class="bordo" align="center"><a href="http://librerie.webank.local/mail/mail_premianti_3/mail.html">Premianti 3%</a></td>
	</tr>
	<tr>
		<td class="bordo paddbot5"><ul><li>Congeliamo i bolli</li></ul></td>
		<td class="bordo" align="center"><a href="http://librerie.webank.local/mail/mail_superbollo/conto_tecnico/mail.html">Conto tecnico</a> | <a href="http://librerie.webank.local/mail/mail_superbollo/deposito_prestito/mail.html">Deposito e prestiti</a> | <a href="http://librerie.webank.local/mail/mail_superbollo/no_deposito_titoli/mail.html">no deposito</a> |<a href="http://librerie.webank.local/mail/mail_superbollo/si_deposito_no_prestito/mail.html">deposito/no prestito</a> |<a href="http://librerie.webank.local/mail/mail_superbollo/sposta_titoli/mail.html"> sposta titoli </a></td>
	</tr>
	<tr>
		<td class="bordo paddbot5"><ul><li>Contatti</li></ul></td>
		<td class="bordo" align="center"><a href="http://librerie.webank.local/mail/mail_contatti/mail.html"> Contatti </a></td>
	</tr>
	<tr>
		<td class="bordo paddbot5"><ul><li>Cross selling</li></ul></td>
		<td class="bordo" align="center"><a href="http://librerie.webank.local/mail/mail_cross_selling/high/mail.html">High quality</a> | <a href="http://librerie.webank.local/mail/mail_cross_selling/low/mail.html">Low quality</a> | <a href="http://librerie.webank.local/mail/mail_cross_selling/punta_su_di_te/newsletter.html">Punta su di te</a> | <a href="http://librerie.webank.local/mail/mail_cross_selling/bancomat/newsletter.html">Bancomat</a> | <a href="http://librerie.webank.local/mail/mail_cross_selling/conto_tecnicisti/newsletter.html"> Conto tecnicisti </a></td>
	</tr>
	<tr>
		<td class="bordo"><ul><li>Eventi</li></ul></td>
		<td class="bordo" align="center"><a href="http://librerie.webank.local/mail/mail_eventi/mail.html">Maggio</a>| <a href="http://librerie.webank.local/mail/mail_eventi/pimco/mail.html">Evento Pimco</a></td>
	</tr>
	<tr>
		<td class="bordo paddbot5"><ul><li>Extramoney</li></ul></td>
		<td class="bordo" align="center"><a href="http://librerie.webank.local/mail/extramoney/mail.html">Extramoney</a></td>
	</tr>
	<tr>
		<td class="bordo paddbot5"><ul><li>Financial</li></ul></td>
		<td class="bordo" align="center"><a href="http://librerie.webank.local/mail/financial/mail.html">Financial</a> | <a href="http://librerie.webank.local/mail/financial2/mail.html">Financial2</a></td>
	</tr>
	<tr>
		<td class="bordo paddbot5"><ul><li>Fondi e Sicav</li></ul></td>
		<td class="bordo" align="center"><a href="http://libreriewebank.webank.local/lndpage/fondi_sicav/eurizon/mail/mail.html">Guida Eurizon</a> |<a href="http://libreriewebank.webank.local/lndpage/fondi_sicav/normale/mail/mail.html">Guida Normale</a> | <a href="http://librerie.webank.local/mail/Fondi&Sicav/bl/newsletter.html">f&S Bl</a> | <a href="http://librerie.webank.local/mail/Fondi&Sicav/bpm/newsletter.html">f&S Bpm</a> | <a href="http://librerie.webank.local/mail/Fondi&Sicav/cra/newsletter.html">f&S cra</a> | <a href="http://librerie.webank.local/mail/Fondi&Sicav/webank/newsletter.html">f&S Webank</a> | <a href="http://librerie.webank.local/mail/Fondi&Sicav/2011_03/Template_HTML/newsletter.html">Mail mensile</a></td>
	</tr>
	<tr>
		<td class="bordo paddbot5"><ul><li>Groupon</li></ul></td>
		<td class="bordo" align="center"><a href="http://libreriewebank.webank.local/mail/comunicazione_groupon/mail.html">Promo Groupon</a></td>
	</tr>
	<tr>
		<td class="bordo"><ul><li>Magic</li></ul></td>
		<td class="bordo" align="center"><a href="http://librerie.webank.local/mail/mail_magic/mail.html">Magic</a></td>
	</tr>
	<tr>
		<td class="bordo"><ul><li>Masterpass</li></ul></td>
		<td class="bordo" align="center"><a href="http://librerie.webank.local/mail/mail_masterpass/mail.html">Masterpass</a></td>
	</tr>
	<tr>
		<td class="bordo"><ul><li>Metlife</li></ul></td>
		<td class="bordo" align="center"><a href="http://libreriewebank.webank.local/mail/metlife/mail/mail.html">Metlife</a> | <a href="http://librerie.webank.local/mail/metlife/wecare/mail.html">Wecare</a></td>
	</tr>
	<tr>
		<td class="bordo"><ul><li>MGM</li></ul></td>
		<td class="bordo" align="center"><a href="http://libreriewebank.webank.local/mail/Mail_Mgm_html/mail.html">MGM</a>|<a href="http://librerie.webank.local/mail/Mail_Mgm2014/mail.html">MGM 2014</a></td>
	</tr>
	<tr>
		<td class="bordo"><ul><li>Multimedia news</li></ul></td>
		<td class="bordo" align="center"><a href="http://librerie.webank.local/mail/mail_mmn/mail.html">Mail 1</a> | <a href="http://librerie.webank.local/mail/mail_mmn2/mail.html">Mail 2</a></td>
	</tr>
	<tr>
		<td class="bordo"><ul><li>Nuove funzioni</li></ul></td>
		<td class="bordo" align="center"><a href="http://librerie.webank.local/mail/mail_nuove_funzioni/mail.html">Mail nuove funzioni</a></td>
	</tr>
	<tr>
		<td class="bordo"><ul><li>Obbligazioni</li></ul></td>
		<td class="bordo" align="center"><a href="http://librerie.webank.local/mail/mail_obbligazioni/mail.html">Obbligazioni</a></td>
	</tr>
	<tr>
		<td class="bordo"><ul><li>Pac</li></ul></td>
		<td class="bordo" align="center"><a href="http://librerie.webank.local/mail/mail_pac/mail.html">Pac</a></td>
	</tr>
	<tr>
		<td class="bordo"><ul><li>Pricing</li></ul></td>
		<td class="bordo" align="center"><a href="http://librerie.webank.local/mail/mail_commerciale_pricing/versione1/mail.html">Versione 1</a> | <a href="http://librerie.webank.local/mail/mail_commerciale_pricing/versione2/mail.html">Versione 2</a></td>
	</tr>
	<tr>
		<td class="bordo"><ul><li>Promo 3,2,1</li></ul></td>
		<td class="bordo" align="center"><a href="http://librerie.webank.local/mail/mail_promo_3_2_1/mail.html">Promo 3,2,1</a></td>
	</tr>
	<tr>
		<td class="bordo"><ul><li>Promozione 3,5%</li></ul></td>
		<td class="bordo" align="center"><a href="http://librerie.webank.local/mail/mail_350/newsletter.html">Promozione 3,5%</a></td>
	</tr>
	<tr>
		<td class="bordo"><ul><li>Sole24</li></ul></td>
		<td class="bordo" align="center"><a href="http://librerie.webank.local/mail/sole24/mail.html">Sole24</a></td>
	</tr>
	<tr>
		<td class="bordo"><ul><li>Rcs</li></ul></td>
		<td class="bordo" align="center"><a href="http://librerie.webank.local/mail/mail_rcs/mail.html">Rcs</a></td>
	</tr>
	<tr>
		<td class="bordo"><ul><li>Retention </li></ul></td>
		<td class="bordo" align="center"><a href="http://librerie.webank.local/mail/mail_conto_webank_t3/mail.html">T3</a> | <a href="http://librerie.webank.local/mail/mail_conto_webank_v2/mail.html">v2</a>| <a href="http://librerie.webank.local/mail/webank_t3/mail.html">nuova app</a></td>
	</tr>
	<tr>
		<td class="bordo"><ul><li>T3</li></ul></td>
		<td class="bordo" align="center"><a href="http://librerie.webank.local/mail/mail_t3open/mail.html">T3 open</a> | <a href="http://librerie.webank.local/mail/mail_mechanica/mail.html">Mechanica</a></td>
	</tr>
	<tr>
		<td class="bordo"><ul><li>Trade win</li></ul></td>
		<td class="bordo" align="center"><a href="http://librerie.webank.local/mail/mail_trade_win/mail.html">Trade win ipad</a></td>
	</tr>
	<tr>
		<td class="bordo"><ul><li>Trading eventi</li></ul></td>
		<td class="bordo" align="center"><a href="http://librerie.webank.local/mail/mail_eventi_trading/mail.html">Eventi</a></td>
	</tr>
	<tr>
		<td class="bordo"><ul><li>Trasloco</li></ul></td>
		<td class="bordo" align="center"><a href="http://librerie.webank.local/mail/mail_trasloco/mail.html">Trasloco</a></td>
	</tr>
	<tr>
		<td class="bordo"><ul><li>We for traders</li></ul></td>
		<td class="bordo" align="center"><a href="http://librerie.webank.local/mail/mail_wefortraders/mail.html">Vantaggi trading</a> | <a href="http://librerie.webank.local/mail/mail_4_traders/ultima_versione/mail.html">Vantaggi trading (ultima versione)</a></td>
	</tr>
	<tr>
		<td class="bordo"><ul><li>Vincolo in scadenza</li></ul></td>
		<td class="bordo" align="center"><a href="http://librerie.webank.local/mail/vincolo in scadenza/mail.html">vincolo in scadenza</a></td>
	</tr>
	<tr>
		<td class="bordo"><ul><li>Volaregratis</li></ul></td>
		<td class="bordo" align="center"><a href="http://librerie.webank.local/mail/mail_volagratis/mail.html">Volagratis</a></td>
	</tr>
	<tr>
		<td class="bordo"><ul><li>Zurich</li></ul></td>
		<td class="bordo" align="center"><a href="http://librerie.webank.local/mail/mail_zurich/mail1.html">Mail 1</a> | <a href="http://librerie.webank.local/mail/mail_zurich/mail2.html">Mail 2</a></td>
	</tr>	
</table>
<br /><br/>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td class="bordo paddbot5" width="20%" align="center"><h3>AREA</h3></td>
		<td class="bordo" align="center" width="80%" colspan="2"><h3>OGGETTI SINGOLI</h3></td>
	</tr>
	<tr>
		<td class="bordo paddbot5" width="20%">Footer</td>
		<td class="bordo" align="center" width="80%" colspan="2"><a href="http://librerie.webank.local/mail/footer/footer/tabella.html">Tabella</a> | <a href="http://librerie.webank.local/mail/footer/footer_mensile/tabella.html">Footer mensile</a> | <a href="http://librerie.webank.local/mail/footer/footer_social/tabella.html">Footer social</a> | <a href="http://librerie.webank.local/mail/footer/footer_tradetour/tabella.html">Footer tradetour</a></td>
	</tr>
		<tr>
		<td class="bordo paddbot5" width="20%">Box</td>
		<td class="bordo" align="center" width="80%" colspan="2"><a href="http://librerie.webank.local/mail/box_accredito_stipendio/box.html">Box accredito stipendio</a></td>
	</tr>
</table>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<?php
$wb1  = "6F8E0A";
$wb2  = "DCE9B0";
$wb3  = "DCE7B5";
$wb4  = "CEE08F";

$bpm1 = "007A63";
$bpm2 = "D4E9E5";
$bpm3 = "D4E9E5";
$bpm4 = "bfded8";

$bl1  = "1c5e91";
$bl2  = "e8eff4";
$bl3  = "e8eff4";
$bl4  = "dde7ef";

$bm1  = "AA1224";
$bm2  = "6B0B18";
$bm3  = "EED0D3";
$bm4  = "AA1224";

switch ($bank)
	{
	case "webank":
		$colorpri = $wb1;
		$colorsec = $wb2;
		$colorter = $wb3;
		$colorbor = $wb4;
		break;
		
	case "bpm":
		$colorpri = $bpm1;
		$colorsec = $bpm2;
		$colorter = $bpm3;
		$colorbor = $bpm4;
		
		break;
	case "bl":
		$colorpri = $bl1;
		$colorsec = $bl2;
		$colorter = $bl3;
		$colorbor = $bl4;
		break;
	case "bm":
		$colorpri = $bm1;
		$colorsec = $bm2;
		break;
	default:
		$colorpri = $wb1;
		$colorsec = $wb2;
		break;
	}
?>
	<title>Mail3</title>
	<style>
		body{background-color:#fff}
		td.testata {background: #<?php print $colorpri;?> !important;color:#fff !important;border:1px solid #<?php print $colorpri;?> !important;}
		td.celle {border:1px solid #<?php print $colorpri;?> !important;}
		table.special {background: #<?php print $colorsec;?> !important;border:1.5pt solid #<?php print $colorpri;?> !important;}
		td.left {color: #<?php print $colorpri;?> !important;}
		a.evidenza {color:#<?php print $colorpri;?>;text-decoration:underline !important;}
		a.button {color:#FFFFFF;text-decoration:underline !important;background-color:#<?php print $colorpri;?>;padding:2px 8px}
		
		.boxpaolo{border:1px solid #<?php print $colorbor;?>!important;background-color:#<?php print $colorter;?>!important}
		.cellimg{padding:7px 11px 0 11px;border-top:1px solid #fff}
		.celltitolo{padding:7px 11px 0 0;border-top:1px solid #fff;font-family:verdana, arial, sans-serif;font-weight:bold;font-size:15px;color:#3e3d40!important}
		.celltitolo2{font-family:verdana, arial, sans-serif;font-weight:bold;font-size:13px;color:#<?php print $colorpri;?>!important}
		.cellsottotitolo{padding:3px 11px 0 0;font-family:arial, verdana, sans-serif;font-size:13px;color:#<?php print $colorpri;?>!important}
		.text1{padding:2px 8px 0 0;font-family:arial, verdana, sans-serif;font-size:11px;color:#707070}
		.text2{padding:4px 8px 0 11px;font-family:arial, verdana, sans-serif;font-size:13px;color:#<?php print $colorpri;?>!important}
		.text3{padding:2px 8px 8px 11px;font-family:arial, verdana, sans-serif;font-size:11px;color:#707070}
		.text4{padding:4px 8px 0 0;font-family:arial, verdana, sans-serif;font-size:12px;color:#000}
		.text5{padding:2px 8px 8px 0;font-family:arial, verdana, sans-serif;font-size:10px;color:#707070}
	</style>
</head>
<body style="text-align:center;margin:0;padding:0">
<div style="width:502px;margin:0 auto;padding:0;background:#fff;text-align:left;border-right:1px solid #<?php print $colorpri;?>;border-left:1px solid #<?php print $colorpri;?>;padding:10px 0">
<div style="padding:0 40px">
<p style="font: normal 9.5pt helvetica,verdana,sans-serif;color:#000;margin:0;padding:0;">Da: <?php print $bank;?><br />Oggetto: Accesso a <?php print $bank;?> sbloccato</p>
<p style="margin:0;padding:0;width:100%;text-align:right;margin-bottom:33px;margin-top:10px;"><img src="/img/ret/logo_mail.gif" /></p>
<p style="margin:0;padding:0;font: normal 9.5pt helvetica,verdana,sans-serif;line-height:14pt;color:#000;text-align:justify">
Gentile Mario Rossi,<br />
Carlo Bianchi, cliente del nostro servizio di internet banking, le comunica di aver ordinato un bonifico a suo favore.
<br clear="all"><br>
Carlo Bianchi le invia anche il seguente messaggio:   <br>Nunc vel sem. Nullam pulvinar, leo non tincidunt convallis, dolor sapien consequat dui, a dignissim nibh felis eget nulla. Suspendisse potenti. Sed urna ligula, volutpat ac, lacinia non; placerat a,. 
</p>
<p style="font: normal 9.5pt helvetica,verdana,sans-serif;color:#000;margin-top:20px">Un saluto cordiale.<br />Webank</p>
<table style="font: normal 9.5pt helvetica,verdana,sans-serif;color:#000;width:100%;border-collapse:collapse;margin-top:20px;" border="0">
<tr><td colspan="2" class="testata" style="background: #666666;height:14px;line-height:14pt;font-weight:bold;padding: 0 4px;">LOREM IPSUM LOREM</td></tr>
<tr><td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:none !important;width:88px">Lorem ipsum</td><td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-right:none !important">Lorem ipsum</td></tr>
<tr><td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:none !important;width:88px">Lorem ipsum</td><td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-right:none !important">Lorem ipsum</td></tr>
<tr><td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:none !important;width:88px">Lorem ipsum</td><td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-right:none !important">Lorem ipsum</td></tr>
<tr><td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:none !important;width:88px">Lorem ipsum</td><td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-right:none !important">Lorem ipsum</td></tr>
<tr><td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:none !important;width:88px">Lorem ipsum</td><td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-right:none !important">Lorem ipsum</td></tr>
</table>
<br /><br />
<table style="font: normal 9.5pt helvetica,verdana,sans-serif;color:#000;width:100%;margin-top:20px;" border="0" cellpadding="0" cellspacing="0">
     <tr>
        <td class="testata" style="background: #666666;height:14px;line-height:14pt;font-weight:bold;padding: 0 4px;">MACRO ASSET CLASS</td>
        <td class="testata" style="background: #666666;height:14px;line-height:11pt;font-weight:bold;padding: 0 4px;">Peso</td>
        <td class="testata" style="background: #666666;height:14px;line-height:11pt;font-weight:bold;padding: 0 4px;">Asset Class</td>
        <td class="testata" style="background: #666666;height:14px;line-height:11pt;font-weight:bold;padding: 0 4px;">Peso</td>       

        
    </tr>
  	<tr>
        <td rowspan="3" class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-bottom:0!important">MACRO ASSET CLASS	10</td>
         <td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important; text-align:right">9</td>
        <td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important;">Asset Class</td>
        <td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important; text-align:right">10,51</td>
       
    </tr>
    <tr>
         <td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important; text-align:right;">10</td>
		<td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important;">Lorem ispum dolor sit</td>
        <td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important; text-align:right">xxx</td>
       
    </tr>
    <tr>
         <td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important; text-align:right;border-bottom:0!important">10</td>
		<td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important">Lorem ispum dolor sit</td>
        <td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important; text-align:right;border-bottom:0!important">xxx</td>
        
    </tr>
	<tr>
        <td rowspan="3" class="celle" style="background-color:#EFEFEF;border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;">MACRO ASSET CLASS	10</td>
         <td class="celle" style="background-color:#EFEFEF;border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important; text-align:right">9</td>
        <td class="celle" style="background-color:#EFEFEF;border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important;">Asset Class</td>
        <td class="celle" style="background-color:#EFEFEF;border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important; text-align:right">10,51</td>
       
    </tr>
    <tr>
         <td class="celle" style="background-color:#EFEFEF;border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important; text-align:right">10</td>
		<td class="celle" style="background-color:#EFEFEF;border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important;">Lorem ispum dolor sit</td>
        <td class="celle" style="background-color:#EFEFEF;border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important; text-align:right">xxx</td>
       
    </tr>
    <tr>
         <td class="celle" style="background-color:#EFEFEF;border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important; text-align:right">10</td>
		<td class="celle" style="background-color:#EFEFEF;border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;">Lorem ispum dolor sit</td>
        <td class="celle" style="background-color:#EFEFEF;border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important; text-align:right">xxx</td>
        
    </tr>
</table>
<table style="font: normal 9.5pt helvetica,verdana,sans-serif;color:#000;width:100%;border-collapse:collapse;margin-top:20px;" border="0">
<tr><td class="testata" style="background: #666666;height:14px;line-height:14pt;font-weight:bold;padding: 0 4px;">LOREM IPSUM LOREM</td></tr>
<tr>
	<td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:none !important;border-right:none !important">
		<ul style="margin: 5px 0 5px 15px !important;padding:0 !important;">
		<li>asdasdasdasd <a href="#" class="button" style="text-decoration:underline !important;color:#FFFFFF;background-color:#<?php print $colorpri;?>;padding:2px 8px">sadasdasdas</a> sadasdasdas asdasdasdasd sadasdasdas asdasdasdasd <strong>sadasdasdas asdasdasdasd</strong> sadasdasdas</li>
		<li>asdasdasdasd <a href="#" class="evidenza" style="text-decoration:underline !important;color:#<?php print $colorpri;?>;">sadasdasdas</a></li>
	</ul></td>
</tr>
</table>
<br />
<?php if($bank == "webank"){?>
<center><a href="#"><img src="/img/ret/completa_richiesta.gif" border="0" alt="Completa la richiesta di apertura conto" /></a></center>
<?php }?>
<p style="margin:0;padding:0;font: bold 9.5pt helvetica,verdana,sans-serif;line-height:14pt;color:#000;margin-top:20px;text-transform: uppercase">Lorem ipsum lorem</p>
<p style="margin:0;padding:0;font: normal 9.5pt helvetica,verdana,sans-serif;line-height:14pt;color:#000;margin-top:5px;text-align:justify;padding-left:3mm">
Nunc vel sem. Nullam pulvinar, leo non tincidunt convallis, dolor sapien consequat dui, a dignissim nibh felis eget nulla. Suspendisse potenti. Sed urna ligula, volutpat ac, lacinia non; placerat a, lorem. Sed non augue sed nibh varius aliquet? Nunc elit. Suspendisse et felis eget orci gravida condimentum? Cras enim ipsum, euismod ultricies, varius sed, vehicula ornare, leo. Etiam ultricies bibendum nisi. Vestibulum id pede sit amet metus accumsan tempus. <a href="#" class="evidenza" style="text-decoration:underline !important;color:#<?php print $colorpri;?>;">Donec varius porttitor lacus</a>.
</p>
<br />
<!--<table class="special" style="background: #cccccc;border:1.5pt solid #666666;font: normal 9.5pt helvetica,verdana,sans-serif;color:#000;width:100%;border-collapse:collapse;margin-top:20px" border="0">
<tr><td class="left" style="color: #000000;margin:0;padding:0 4px;height:14px;line-height:14pt;font-weight:bold;width:82px;text-align:center;vertical-align:center">LOREM!</td>
<td style="padding: 9.5pt 0;font-weight:bold">Nunc venenatis tristique metus. <br /><i>Curabitur ut nunc non dolor tincidunt suscipit.</i></td></tr>
</table>-->
<?php if($bank != "bm") {?>
<table width="420" style="color:#000;border:1px solid #666666;" border="0" cellspacing="0" cellpadding="0" class="boxpaolo">
	<tr>
		<td width="46" style="margin:0;text-align:left;padding:7px 11px 0 11px;border-top:1px solid #fff;" rowspan="3" valign="top" class="cellimg"><img src="/img/ret/img_or_paolo_mail.gif" /></td>
		<td width="352" style="margin:0;text-align:left;padding:7px 0px 0 0;border-top:1px solid #fff;font-family:verdana, arial, sans-serif;font-weight:bold;font-size:15px;color:#3e3d40" class="celltitolo">CHIEDI A PAOLO</td>
	</tr>
	<tr>
		<td width="100%" style="text-align:left;padding:3px 0px 0 0;font-family:arial, verdana, sans-serif;font-size:13px;color:#000" class="cellsottotitolo">Cerchi lo stato dei tuoi pagamenti?</td>
	</tr>
	<tr>
		<td width="100%" style="text-align:left;padding:2px 0px 0 0;font-family:arial, verdana, sans-serif;font-size:11px;color:#707070" class="text1"><strong>&Egrave; facile</strong>: entra nella tua area privata e scrivi &quot;<strong>esito disposizioni</strong>&quot; nella finestra di <strong>Paolo</strong>, l'<strong>assistente virtuale</strong> ti porter&agrave; nell'area richiesta.</td>
	</tr>
	<tr>
		<td colspan="2" style="text-align:left;padding:4px 8px 0 11px;font-family:arial, verdana, sans-serif;font-size:13px;color:#000" class="text2">Vuoi tenere sotto controllo il tuo conto via Sms?</td>
	</tr>
	<tr>
		<td colspan="2" style="text-align:left;padding:2px 8px 8px 11px;font-family:arial, verdana, sans-serif;font-size:11px;color:#707070" class="text3">Per tua maggiore <strong>sicurezza</strong>, la banca ti invia un <strong>Sms gratuito</strong> a conferma delle disposizioni pi&ugrave; importanti.  Scrivi &quot;Alert Sms&quot; nella finestra di dialogo di Paolo.
Ti condurr&agrave; alla pagina dove potrai <strong>inserire o aggiornare il tuo numero di cellulare</strong> per usufruire del servizio.</td>
	</tr>
</table>
<?php } ?>
<br><br>
<?php if($bank = "wb") {?>
<table width="420" style="color:#000;border:1px solid #666666;" border="0" cellspacing="0" cellpadding="0" class="boxpaolo">
	<tr>
		<td width="46" style="margin:0;text-align:left;padding:7px 11px 0 11px;border-top:1px solid #fff;" valign="top" class="cellimg"><img src="/img/ret/img_or_cartaimpronta.gif" /></td>
		<td width="352" style="margin:0;text-align:left;padding:7px 0px 7px 0;border-top:1px solid #fff;font-family:verdana, arial, sans-serif;"><span style="font-family:verdana, arial, sans-serif;font-weight:bold;font-size:13px;color:#3e3d40" class="celltitolo2">RICHIEDI CARTIMPRONTA, LA CARTA DI CREDITO CON CANONE GRATUITO,<br>ENTRO IL 19 DICEMBRE:</span>
		<br>
		<span style="text-align:left;padding:4px 0 0 0;font-family:arial, verdana, sans-serif;font-size:12px;color:#000;" class="text4">puoi vincere <strong>120&euro;</strong> in <strong>buoni TotalErg, Media World</strong> o <strong>eBay</strong>!</span>
		<br><br>
		<span style="text-align:left;padding:2px 8px 0 0;font-family:arial, verdana, sans-serif;font-size:10px;color:#707070;" class="text5"><i>MESSAGGIO PUBBLICITARIO CON FINALIT&Agrave; PROMOZIONALE.<br>Regolamento e fogli informativi su <a href="http://www.webank.it" style="color:#000" target="_blank">www.webank.it</a></i></span>
		</td>
	</tr>
</table>
<?php } ?>
<br><br>
</div>
</div>
</body>
</html>
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
	<title>Bollo auto</title>
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
		.cellsottotitolo{padding:3px 11px 0 0;font-family:arial, verdana, sans-serif;font-size:13px;color:#<?php print $colorpri;?>!important}
		.text1{padding:2px 8px 0 0;font-family:arial, verdana, sans-serif;font-size:11px;color:#707070}
		.text2{padding:4px 8px 0 11px;font-family:arial, verdana, sans-serif;font-size:13px;color:#<?php print $colorpri;?>!important}
		.text3{padding:2px 8px 8px 11px;font-family:arial, verdana, sans-serif;font-size:11px;color:#707070}
	</style>
</head>
<body style="text-align:center;margin:0;padding:0">
<div style="width:502px;margin:0 auto;padding:0;background:#fff;text-align:left;border-right:1px solid #<?php print $colorpri;?>;border-left:1px solid #<?php print $colorpri;?>;padding:10px 0">
<div style="padding:0 40px">
<p style="font: normal 9.5pt helvetica,verdana,sans-serif;color:#000;margin:0;padding:0;">Da: <?php print $bank;?><br />Oggetto: bollo auto</p>
<p style="margin:0;padding:0;width:100%;text-align:right;margin-bottom:33px;margin-top:10px;"><img src="/img/ret/logo_mail.gif" /></p>
<p style="margin:0;padding:0;font: normal 9.5pt helvetica,verdana,sans-serif;line-height:14pt;color:#000;text-align:justify">
Gentile Delia Fratucelli,<br />
ti informiamo che &egrave; stato effettuato il pagamento del bollo auto da te inserito.
<br clear="all">
Sul sito, in "esito disposizioni", puoi stampare la relativa ricevuta. 
</p>
<p style="font: normal 9.5pt helvetica,verdana,sans-serif;color:#000;margin-top:20px">Un saluto cordiale.<br />Webank</p>

<table style="font: normal 9.5pt helvetica,verdana,sans-serif;color:#000;width:100%;margin-top:20px;" border="0" cellpadding="0" cellspacing="0">
     <tr>
        <td colspan="2" class="testata" style="background: #666666;height:14px;line-height:14pt;font-weight:bold;padding: 0 4px;">PAGAMENTO BOLLO AUTO</td>        
    </tr>
  	 <tr>
         <td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-bottom:0!important"><strong>Tassa</strong></td>
		<td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important;">Lorem ispum dolor sit</td>       
    </tr>
	 <tr>
         <td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-bottom:0!important"><strong>Sanzioni</strong></td>
		<td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important;">00,00 EUR</td>       
    </tr>
	<tr>
         <td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-bottom:0!important;border-top:0!important;"><strong>Di cui interessi</strong></td>
		<td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important;border-top:0!important">00,00 EUR</td>       
    </tr>
	 <tr>
         <td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-bottom:0!important"><strong>Commissioni</strong></td>
		<td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important;">00,00 EUR</td>       
    </tr>
	<tr>
         <td class="celle" style="background-color:#EFEFEF;border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-bottom:0!important"><strong>IMPORTO TOTALE</strong></td>
		<td class="celle" style="background-color:#EFEFEF;border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important;">00,00 EUR</td>       
    </tr>
	 <tr>
         <td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-bottom:0!important">&nbsp;</td>
		<td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important;">&nbsp;</td>       
    </tr>
	 <tr>
         <td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-bottom:0!important"><strong>Data pagamento </strong></td>
		<td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important;">00/00/00</td>       
    </tr>
	 <tr>
         <td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-bottom:0!important"><strong>Tipo di veicolo</strong></td>
		<td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important;">lorem ipsum</td>       
    </tr>
	 <tr>
         <td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-bottom:0!important"><strong>Numero di targa</strong></td>
		<td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important;">000000</td>       
    </tr>
	 <tr>
         <td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-bottom:0!important"><strong>Regione di residenza </strong></td>
		<td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important;">lorem ipsum</td>       
    </tr>
	 <tr>
         <td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-bottom:0!important"><strong>Mesi validit&agrave; bollo</strong></td>
		<td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important;">lorem ipsum</td>       
    </tr>
	 <tr>
         <td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;"><strong>Data scadenza bollo</strong></td>
		<td class="celle" style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;">00/00/00</td>       
    </tr>
	
</table>

<br />

<p style="margin:0;padding:0;font: bold 9.5pt helvetica,verdana,sans-serif;line-height:14pt;color:#000;margin-top:20px;text-transform: uppercase">TI SERVE UNA MANO?</p>
<p style="margin:0;padding:0;font: normal 9.5pt helvetica,verdana,sans-serif;line-height:14pt;color:#000;margin-top:5px;text-align:justify;padding-left:3mm">
Per ricevere assistenza in tutte le operazioni chiama il nostro numero verde 800 060 070 dal luned&igrave; al venerd&igrave; (ore 8-22) e il sabato (ore 9-17). Per identificarti tieni a portata di mano user ID e password di secondo livello. Se preferisci, scrivi a  <a href="mailto:webank@webank.it" class="evidenza" style="text-decoration:underline !important;color:#<?php print $colorpri;?>;">webank@webank.it</a>.
</p>
<br />
<p style="margin:0;padding:0;font: bold 9.5pt helvetica,verdana,sans-serif;line-height:14pt;color:#000;margin-top:20px;text-transform: uppercase">webank@webank.it.  </p>
<p style="margin:0;padding:0;font: normal 9.5pt helvetica,verdana,sans-serif;line-height:14pt;color:#000;margin-top:5px;text-align:justify;padding-left:3mm">
BPM Banking – Disposizione in data 20/01/2014 ora 11:50.<br /> 
Effettuato pagamento bollo auto, targa BO793698 di EUR 27,00 dall'utente 0386324.</p>
<br />


</div>
</div>
</body>
</html>
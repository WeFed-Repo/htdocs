<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>Mail3</title>
	<style>
		body{background-color:#fff}
		td.testata {background: #007a63 !important;color:#fff !important;border:1px solid #007a63 !important;}
		td.celle {border:1px solid #007a63 !important;}
		table.special {background: #d4e9e5 !important;border:1.5pt solid #007a63 !important;}
		td.left {color: #007a63 !important;}
		a.evidenza {color:#007a63;text-decoration:none !important;}
		
		.boxpaolo{border:1px solid <?php print $bordercolor; ?>!important;background-color:<?php print $backcolor; ?>!important}
		.cellimg{padding:7px 11px 0 11px;border-top:1px solid #fff}
		.celltitolo{padding:7px 11px 0 0;border-top:1px solid #fff;font-family:verdana, arial, sans-serif;font-weight:bold;font-size:15px;color:#3e3d40!important}
		.cellsottotitolo{padding:3px 11px 0 0;font-family:arial, verdana, sans-serif;font-size:13px;color:<?php print $forecolor; ?>!important}
		.text1{padding:2px 8px 0 0;font-family:arial, verdana, sans-serif;font-size:11px;color:#707070}
		.text2{padding:4px 8px 0 11px;font-family:arial, verdana, sans-serif;font-size:13px;color:<?php print $forecolor; ?>!important}
		.text3{padding:2px 8px 8px 11px;font-family:arial, verdana, sans-serif;font-size:11px;color:#707070}
		
	</style>
</head>
<body style="text-align:center;margin:0;padding:0">
<div style="width:502px;margin:0 auto;padding:0;background:#fff;text-align:left;border-right:1px solid <?php print $forecolor; ?>;border-left:1px solid <?php print $forecolor; ?>;padding:10px 0">
<div style="padding:0 40px">

<p style="margin:0;padding:0;width:100%;text-align:right;margin-bottom:33px;margin-top:10px;"><img src="/img/ret/logo_mail.gif" /></p>
<p style="margin:0;padding:0;font: normal 9.5pt helvetica,verdana,sans-serif;line-height:14pt;color:#000;text-align:justify">
Gentile Mario Rossi,<br />
Carlo Bianchi, cliente del nostro servizio di internet banking, le comunica di aver ordinato un bonifico a suo favore.
<br clear="all"><br>
Carlo Bianchi le invia anche il seguente messaggio:   <br>Nunc vel sem. Nullam pulvinar, leo non tincidunt convallis, dolor sapien consequat dui, a dignissim nibh felis eget nulla. Suspendisse potenti. Sed urna ligula, volutpat ac, lacinia non; placerat a,. 
</p>
<p style="font: normal 9.5pt helvetica,verdana,sans-serif;color:#000;margin-top:20px">Un saluto cordiale.<br /><?php print $fullname;?></p>
<table style="font: normal 9.5pt helvetica,verdana,sans-serif;color:#000;width:100%;border-collapse:collapse;margin-top:20px;" border="0">
<tr><td colspan="2" class="testata" style="background: <?php print $forecolor; ?>!important;height:14px;line-height:14pt;font-weight:bold;padding: 0 4px;border-color:<?php print $forecolor; ?>!important;">LOREM IPSUM LOREM</td></tr>
<tr><td class="celle" style="border:1px solid <?php print $forecolor; ?>!important;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:none !important;width:88px">Lorem ipsum</td><td class="celle" style="border:1px solid <?php print $forecolor; ?>!important;margin:0;padding:0 4px;height:14px;line-height:14pt;border-right:none !important">Lorem ipsum</td></tr>
<tr><td class="celle" style="border:1px solid <?php print $forecolor; ?>!important;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:none !important;width:88px">Lorem ipsum</td><td class="celle" style="border:1px solid <?php print $forecolor; ?>!important;margin:0;padding:0 4px;height:14px;line-height:14pt;border-right:none !important">Lorem ipsum</td></tr>
<tr><td class="celle" style="border:1px solid <?php print $forecolor; ?>!important;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:none !important;width:88px">Lorem ipsum</td><td class="celle" style="border:1px solid <?php print $forecolor; ?>!important;margin:0;padding:0 4px;height:14px;line-height:14pt;border-right:none !important">Lorem ipsum</td></tr>
<tr><td class="celle" style="border:1px solid <?php print $forecolor; ?>!important;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:none !important;width:88px">Lorem ipsum</td><td class="celle" style="border:1px solid <?php print $forecolor; ?>!important;margin:0;padding:0 4px;height:14px;line-height:14pt;border-right:none !important">Lorem ipsum</td></tr>
<tr><td class="celle" style="border:1px solid <?php print $forecolor; ?>!important;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:none !important;width:88px">Lorem ipsum</td><td class="celle" style="border:1px solid <?php print $forecolor; ?>!important;margin:0;padding:0 4px;height:14px;line-height:14pt;border-right:none !important">Lorem ipsum</td></tr>
</table>
<p style="margin:0;padding:0;font: bold 9.5pt helvetica,verdana,sans-serif;line-height:14pt;color:#000;margin-top:20px;text-transform: uppercase">Lorem ipsum lorem</p>
<p style="margin:0;padding:0;font: normal 9.5pt helvetica,verdana,sans-serif;line-height:14pt;color:#000;margin-top:5px;text-align:justify;padding-left:3mm">
Nunc vel sem. Nullam pulvinar, leo non tincidunt convallis, dolor sapien consequat dui, a dignissim nibh felis eget nulla. Suspendisse potenti. Sed urna ligula, volutpat ac, lacinia non; placerat a, lorem. Sed non augue sed nibh varius aliquet? Nunc elit. Suspendisse et felis eget orci gravida condimentum? Cras enim ipsum, euismod ultricies, varius sed, vehicula ornare, leo. Etiam ultricies bibendum nisi. Vestibulum id pede sit amet metus accumsan tempus. <a href="#" class="evidenza" style="text-decoration:underline;color:<?php print $forecolor; ?>;">Donec varius porttitor lacus</a>.
</p>
<br />
<!--<table class="special" style="background: <?php print $backcolor; ?>!important;border:1.5pt solid <?php print $forecolor; ?>!important;font: normal 9.5pt helvetica,verdana,sans-serif;color:#000;width:100%;border-collapse:collapse;margin-top:20px" border="0">
<tr><td class="left" style="color: <?php print $forecolor; ?>!important;margin:0;padding:0 4px;height:14px;line-height:14pt;font-weight:bold;width:82px;text-align:center;vertical-align:center">LOREM!</td>
<td style="padding: 9.5pt 0;font-weight:bold">Nunc venenatis tristique metus. <br /><i>Curabitur ut nunc non dolor tincidunt suscipit.</i></td></tr>
</table>-->


<table width="420" style="color:#000;border:1px solid #666666;" border="0" cellspacing="0" cellpadding="0" class="boxpaolo">
	<tr>
		<td width="" style="padding:7px 11px 0 11px;border-top:1px solid #fff;" rowspan="3" valign="top" class="cellimg"><img src="/img/ret/img_or_paolo_mail.gif" /></td>
		<td width="332" style="padding:7px 11px 0 0;border-top:1px solid #fff;font-family:verdana, arial, sans-serif;font-weight:bold;font-size:15px;color:#3e3d40" class="celltitolo">CHIEDI A PAOLO</td>
	</tr>
	<tr>
		<td width="" style="padding:3px 11px 0 0;font-family:arial, verdana, sans-serif;font-size:13px;color:#000" class="cellsottotitolo">Cerchi lo stato dei tuoi pagamenti?</td>
	</tr>
	<tr>
		<td width="" style="padding:2px 8px 0 0;font-family:arial, verdana, sans-serif;font-size:11px;color:#707070" class="text1"><strong>&Egrave; facile</strong>: entra nella tua area privata e scrivi &quot;<strong>esito disposizioni</strong>&quot; nella finestra di <strong>Paolo</strong>, l'<strong>assistente virtuale</strong> ti porter&agrave; nell'area richiesta.</td>
	</tr>
	<tr>
		<td colspan="2" style="padding:4px 8px 0 11px;font-family:arial, verdana, sans-serif;font-size:13px;color:#000" class="text2">Vuoi tenere sotto controllo il tuo conto via Sms?</td>
	</tr>
	<tr>
		<td colspan="2" style="padding:2px 8px 8px 11px;font-family:arial, verdana, sans-serif;font-size:11px;color:#707070" class="text3">Per tua maggiore <strong>sicurezza</strong>, la banca ti invia un <strong>Sms gratuito</strong> a conferma delle disposizioni pi&ugrave; importanti.  Scrivi &quot;Alert Sms&quot; nella finestra di dialogo di Paolo.
Ti condurr&agrave; alla pagina dove potrai <strong>inserire o aggiornare il tuo numero di cellulare</strong> per usufruire del servizio.</td>
	</tr>
</table>
</div>
</div>
</body>
</html>
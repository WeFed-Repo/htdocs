<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<?php
			$hostArr = explode('.', $_SERVER['HTTP_HOST']);
			$hostsuffix = (strpos(strtoupper($hostArr[0]), 'FIX'))? 'fix' : '';

			if ($_SERVER['SERVER_NAME'] != 'localhost') {
                $fullDomain = "libreriewebank{$hostsuffix}.".$hostArr[1].".local";
            } else {
                $fullDomain = $_SERVER['HTTP_HOST'];
            }
		?>
		<title>Librerie gruppo BPM</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<link rel="stylesheet" href="/wscmn/css/server.css" />
		<style type="text/css">
		<?php
			if ($hostsuffix == "fix")  {
			?>
			body {background: transparent url(/librerie/img/bgfix.png) repeat 0 0}
			<?php	
			}
			?>
		html,body{margin:0;padding:0}
		a{color:#dae0df;font-size:10px;font-weight:bold}
		</style>
	</head>
	<body bgcolor="#ffffff">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr class="testa2"> 
				<td align="center" width="33%" class="sf1">Privata</td>
				<td align="center" width="34%" class="sf1">Retail</td>
				<td align="center" width="33%" class="sf1">Business</td>
			</tr>
			<tr> 
				<td align="center" class="sf"><img src="img/banca.gif" alt=" "/></td>
				<td align="center" class="sf">
					<a href="http://<?php echo $fullDomain ?>/connect.php?page=librerie.php&pag=indice&customer=ret" class="link">Responsive</a><br>
					<a href="http://<?php echo $fullDomain ?>/connect.php?page=librerie.php&pag=index_noresp&customer=ret" class="link">Cross fixed</a><br><br>
					<a href="http://<?php echo $fullDomain ?>/connect.php?page=old_index.php&amp;customer=ret" class="link">OLD</a>
				</td>
				<td align="center" class="sf"><a href="http://libreriebpm<?php echo $hostsuffix ?>.webank.local/connect.php?page=old_index.php&amp;customer=bus" class="link">Librerie Business</a></td>
			</tr>
			<tr class="testa2"> 
				<td align="center" colspan="3" class="sf1">Pubblica</td>
			</tr>
			<tr>
				<td align="center" colspan="3" class="sf"><a href="http://<?php echo $fullDomain ?>/connect.php?page=librerie.php&pag=indice_pubblica&customer=ret" class="link">Webank pubblica new</a></td>
			</tr>
			<tr>
				<td align="center" colspan="3" class="sf"><a href="http://libreriebpm.webank.local/html/dayM/str_home_pub_dayM.html" class="link">Bpm pubblica day M</a></td>
			</tr>
				<tr class="testa2"> 
				<td align="center" colspan="3" class="sf1">APP TABLET</td>
			</tr>
			<tr>
				<td align="center" colspan="3" class="sf">Accesso simulazione <a href="https://webanksvi7web.webank.local/mobile/pda/pdaCallSimulation.jsp" class="link">SVI7</a> <a href="https://webanksvi8web.webank.local/mobile/pda/pdaCallSimulation.jsp" class="link">SVI8</a></td>
			</tr>
			<tr class="testa2"> 
				<td align="center" colspan="3" class="sf1">Responsive</td>
			</tr>
			<tr>
				<td align="center" class="sf"><a class="link" href="https://webanksvi7web.webank.local/responsive/login.html">Vecchio sito ristilizzato</a></td>
				<td align="center" class="sf"><a class="link" href="http://<?php echo $fullDomain ?>/connect.php?page=index_resp.php">Progettazione nuovo sito</a></td>
				<td align="center" class="sf"><a class="link" href="/librerie/responsive_test/index.php">Test sul responsive</a></td>
			</tr>
			<tr class="testa2"> 
				<td align="center" colspan="3" class="sf1">Specifiche</td>
			</tr>
			<tr>
				<td align="center" class="sf"><a class="link" href="http://<?php echo $fullDomain ?>/connect.php?page=index_spec_css_font.php">CSS e Font</a></td>
				<td align="center" class="sf"><a class="link" href="http://<?php echo $fullDomain ?>/connect.php?page=index_spec_griglia.php">Griglia</a></td>
				<td align="center" class="sf">&nbsp;</td>
			</tr>
		</table>
		<br>
		<table width="100%" cellspacing="0" cellpadding="0" border="0">
			<tr class="testa2"> 
				<td align="center" class="sf1" colspan="3">Landing, Mail & Msg Push</td>
			</tr>
			<tr > 
				<td align="center" class="sf" width="33%"><a class="link" href="http://<?php echo $fullDomain ?>/connect.php?page=old_index_landing.php">Landing e Mail Marketing</a></td>
				<td align="center" class="sf" width="34%"><a class="link" href="http://<?php echo $fullDomain ?>/connect.php?page=old_index_mail_operative.php">Mail Operative</a></td>
				<td align="center" class="sf" width="33%"><a class="link" href="http://<?php echo $fullDomain ?>/connect.php?page=old_index_msg_push.php">Msg Push</a></td>
			</tr>		
			<tr> 
				<td colspan="2"><img width="1" height="20" src="img/pixel_trasp.gif" alt=" "></td>
			</tr>
		</table>
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tbody><tr class="testa2">
				<td align="center" class="sf1" colspan="4">Altri siti del gruppo</td>
			</tr>
			
			<tr>
				<td align="center" class="sf2" width="20%"><img src="img/logo_transfer.png" alt=" "></td>
				<td class="sf2" width="30%"><a href="/files.php" class="link">File manager</a></td>
				<td align="center" class="sf2" width="20%"><img src="img/carte.gif" alt=" "></td>
				<td class="sf2" width="30%"><a href="http://libreriebpmpre.webank.local/index.php" class="link">Librerie</a></td>
				
			</tr>
			<tr>
				<td align="center" class="sf2" width="20%"><img src="img/wbmolpol.gif" alt=" "></td>
				<td class="sf2" width="30%"><a href="http://<?php echo $fullDomain ?>/mol-pol/index_pol.html" class="link">POL</a></td>
				
				<td align="center" class="sf2"><img src="img/bpmmolpol.gif" alt=" "></td>
				<td class="sf2"><a href="http://libreriebpm<?php echo $hostsuffix ?>.webank.local/mol-pol/MOL/" class="link">MOL</a>&nbsp;&nbsp;&nbsp;<a href="http://libreriebpm/mol-pol/POL/index.html" class="link">POL</a></td>
			</tr>
			<tr>
				<td align="center" class="sf2"><img src="img/logo_wetools.jpg" alt=" "></td>
				<td class="sf2"><a href="http://librerieadmin.webank.local/login.php" class="link">WeTools login</a> - <a href="http://librerieadmin<?php echo $hostsuffix ?>.webank.local/index.php" class="link">WeTools index</a>
				</td>
				<td align="center" class="sf2"><img src="img/logo_wetools.jpg" alt=" "></td>
				<td class="sf2"><a href="http://librerieadmin.webank.local/scheduler_login.php" class="link">WeScheduler login</a> - <a href="http://librerieadmin<?php echo $hostsuffix ?>.webank.local/scheduler_index.php" class="link">WeScheduler index</a></td>
			</tr>
			<tr>
				<td align="center" class="sf2"><img src="img/logo_wecms.png" alt=" "></td>
				<td class="sf2"><a href="http://librerieadmin.webank.local/cms_login.php" class="link">CMS login</a> - <a href="http://librerieadmin<?php echo $hostsuffix ?>.webank.local/cms_index.php" class="link">CMS index</a></td>
				<td align="center" class="sf2"></td>
				<td class="sf2"></td>
			</tr>
			<!-- 
			<tr>
				<td align="center" class="sf2"><img src="img/cir.gif"/></td>
				<td align="center" class="sf2"><a href="http://librerie_cir" class="link">Librerie</a></td>
				<td align="center" class="sf2"><img src="img/blmolpol.gif"/></td>
				<td align="center" class="sf2"><a href="http://libreriebl/mol-pol/MOL/" class="link">MOL</a>&nbsp;&nbsp;&nbsp;<a href="http://libreriebl/mol-pol/POL/index.html" class="link">POL</a></td>
			</tr>
			-->
			<tr>
				<td align="center" class="sf2"><img src="img/logo_welending.gif" alt=" "></td>
				<td class="sf2"><a href="http://librerieadmin<?php echo $hostsuffix ?>.webank.local/prestitotitoli/index.php" class="link">WeLending index</a> - <a href="http://librerieadmin/prestitotitoli/login.php" class="link">WeLending login</a></td>
				<td align="center" class="sf2"><img src="img/logo_bpmlending.gif" alt=" "></td>
				<td class="sf2"><a href="http://librerieadmin<?php echo $hostsuffix ?>.webank.local/prestitotitoli/bpm_index.php" class="link">BpmLending index</a> - <a href="http://librerieadmin/prestitotitoli/bpm_login.php" class="link">BpmLending login</a></td>
			</tr>
			<tr>
				<td align="center" class="sf2"><img src="img/logo_cms.gif" alt=" "></td>
				<td class="sf2"><a href="http://10.13.5.77:7110/bvmc/cm/contentBrowse.do" class="link">CMS collaudo</a></td>
				<td align="center" class="sf2"><img src="img/logo_vivocha.gif" alt=" "></td>
				<td class="sf2"><a href="https://cloudando.vivocha.com/a/webank/login" class="link">Vivocha Foundry</a> (userId: userwebank - pwd:W3B17245)</td>
			</tr>
			<tr>
				<td align="center" class="sf2"><img src="img/logo_wiki.gif" alt=" "></td>
				<td class="sf2"><a href="http://wikisvi.webank.local/index.php/Pagina_principale" class="link">Wiki</a></td>
				<td align="center" class="sf2"><img src="http://libreriewebank.webank.local/librerie/img/logo_wb.gif" alt=" "></td>
				<td class="sf2"><a href="https://webanksvi7web.webank.local/responsive/indexResp.html" class="link">Test sito responsive</a></td>
			</tr>
		</tbody></table>
		<!--
		<table width="100%" cellspacing="0" cellpadding="0" border="0">
			<tr class="testa2"> 
				<td align="center" class="sf1" colspan="2">Landing & Mail</td>
			</tr>
			<tr > 
				<td align="center" class="sf" width="50%"><a class="link" href="http://<?php echo $fullDomain ?>/connect.php?page=index_landing.php">Landing e Mail Marketing</a></td>
				<td align="center" class="sf"><a class="link" href="http://<?php echo $fullDomain ?>/connect.php?page=index_mail_operative.php">Mail Operative</a></td>
			</tr>
			<tr> 
				<td colspan="2"><img width="1" height="20" src="img/pixel_trasp.gif"></td>
			</tr>
		</table>
		
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr class="testa2">
				<td align="center" class="sf1" colspan="4">Altri siti del gruppo</td>
			</tr>
			
			<tr>
				<td align="center" class="sf2" width="20%"><img src="img/carte.gif"/></td>
				<td class="sf2" width="30%"><a href="http://libreriebpmpre<?php echo $hostsuffix ?>.webank.local/index.php" class="link">Librerie</a></td>
				
				<td align="center" class="sf2" width="20%"><img src="img/wbmolpol.gif"/></td>
				<td class="sf2" width="30%"><a href="http://<?php echo $fullDomain ?>/mol-pol/index_pol.html" class="link">POL</a></td>
			
			</tr>
			<tr>
				<td align="center" class="sf2"><img src="img/bpmmolpol.gif"/></td>
				<td class="sf2"><a href="http://libreriebpm<?php echo $hostsuffix ?>.webank.local/mol-pol/MOL/" class="link">MOL</a>&nbsp;&nbsp;&nbsp;<a href="http://libreriebpm<?php echo $hostsuffix ?>/mol-pol/POL/index.html" class="link">POL</a></td>
			
				<td align="center" class="sf2"><img src="img/logo_wetools.jpg"/></td>
				<td class="sf2"><a href="http://librerieadmin<?php echo $hostsuffix ?>.webank.local/index.php" class="link">WeTools index</a> - <a href="http://librerieadmin<?php echo $hostsuffix ?>.webank.local/login.php" class="link">WeTools login</a></td>
			</tr>
			<tr>
				<td align="center" class="sf2"><img src="img/logo_welending.gif" /></td>
				<td class="sf2"><a href="http://librerieadmin<?php echo $hostsuffix ?>.webank.local/prestitotitoli/index.php" class="link">WeLending index</a> - <a href="http://librerieadmin<?php echo $hostsuffix ?>/prestitotitoli/login.php" class="link">WeLending login</a></td>
				<td align="center" class="sf2"><img src="img/logo_bpmlending.gif" /></td>
				<td class="sf2"><a href="http://librerieadmin<?php echo $hostsuffix ?>.webank.local/prestitotitoli/bpm_index.php" class="link">BpmLending index</a> - <a href="http://librerieadmin<?php echo $hostsuffix ?>/prestitotitoli/bpm_login.php" class="link">BpmLending login</a></td>
			</tr>
			<tr>
				<td align="center" class="sf2"><img src="img/logo_cms.gif" /></td>
				<td class="sf2"><a href="http://10.13.5.77:7110/bvmc/cm/contentBrowse.do" class="link">CMS collaudo</a></td>
				<td align="center" class="sf2"><img src="img/logo_vivocha.gif"/></td>
				<td class="sf2"><a href="https://cloudando.vivocha.com/a/webank/login" class="link">Vivocha Foundry</a> (userId: userwebank - pwd:W3B17245)</td>
			</tr>
			<tr>
				<td align="center" class="sf2"><img src="img/logo_wiki.gif"/></td>
				<td class="sf2"><a href="http://wikisvi.webank.local/index.php/Pagina_principale" class="link">Wiki</a></td>
				<td align="center" class="sf2"><img src="http://<?php echo $fullDomain ?>/librerie/img/logo_wb.gif"/></td>
				<td class="sf2"><a href="https://webanksvi7web.webank.local/responsive/indexResp.html" class="link">Test sito responsive</a></td>
			</tr>
		</table>
		-->
	</body>
</html>

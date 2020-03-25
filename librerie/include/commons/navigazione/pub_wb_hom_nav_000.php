<img src="/img/lg_stampa.jpg" class="headingprint" alt="Webank">
<div id="header">
	<h1><a href="/webankpub/wb/home.do?tabId=nav_pub_wb_home_nw&OBS_KEY=nav_pub_wb_home_nw&OBS_REF=nav_pub_wb_home_nw"><span>Webank</span></a></h1>
	<div class="headerLogin">
		<a class="buttonLogin" href="javascript:;" rel="nofollow" onclick="javascript:switchLogin();"><span>Login clienti</span></a>
		<div class="formLogin">
			<form method="post" action="" name="toplogin" id="toplogin">
				<fieldset>
					<label>User ID</label>
					<a href="/webankpub/wb/fpServizi.do?tabId=nav_pub_wb_serveaiuto_nw&OBS_KEY=pro_wbn_serve_aiuto" title="Serve aiuto">Serve aiuto?</a>
					<input type="text" value="" name="username" id="idCl" maxlength="8"/>
				</fieldset>
					<fieldset class="bottomsep">
					<label>Password</label>
					<input type="password" value="" name="password" id="pwd1b" maxlength="16" autocomplete="off" />
					<div class="doubleoption">
						<label><input type="radio" checked value="WEBANK" name="service"/> Privati</label>
						<label><input type="radio" value="INLINEANET" name="service" /> Business</label>
					</div>
				</fieldset>
				<fieldset class="bottomsep">
					<div class="vertioption">
						<label><input type="radio" value="full" checked name="loginType"/> <span>Consultare e Disporre</span></label>
						<label><input type="radio" value="info" name="loginType"/> <span>Consultare</span></label>
					</div>
				</fieldset>
				<input name="browser" value="" type="hidden">
				<input name="versione" value="" type="hidden">
				<input name="initClick" value="" type="hidden">
				<input name="Servizio" value="" type="hidden">
				<input name="multiwebapp" value="yes" type="hidden">
				<input src="/img/ret/pixel_trasp.gif" type="image" width="0" height="0" class="hiddenInput">
				<input name="IDAlleato" value="HOME_PRIV" type="hidden">			
				<input type="submit" value="" id="buttonentra" onclick="return checkUserAndPwd(toplogin.idCl,toplogin.idCl,toplogin.pwd1b,toplogin.pwd1b);"/>
			</form>
		</div>
		
	</div>
	<div class="headerMenu">
		<ul>
			<li class="first"><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_chi_siamo_wb.php">Chi siamo</a></li>
			<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_assitenza_a_360_wb.php">Contatti</a></li>
			<li><a href="/connect.php?page=tpl_pub_loginaol_nopwd.php">Stato apertura conto</a></li>
		</ul>	
	</div>
</div>
<!--<script type="text/javascript">
		var login_host_privati = 'https://' + cgi_host + '/webankpub/wb/' + login_action_privati;
		document.toplogin.action = login_host_privati;
		function setService()	{
			//Se è IMPRESE 
			if (document.toplogin.service[1].checked)	{
				document.toplogin.action=login_host_imprese;
				document.toplogin.IDAlleato.value="POE_HOME_PRIV";
				document.toplogin.Servizio.value="CONTO@BUSINESS";
			} else {
				document.toplogin.action=login_host_privati;
				document.toplogin.IDAlleato.value="HOME_PRIV";
				document.toplogin.Servizio.value="";
			}
		}
</script>-->
<!-- FINE HEADER -->

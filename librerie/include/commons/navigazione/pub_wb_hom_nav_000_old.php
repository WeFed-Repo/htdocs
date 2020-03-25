<img src="/img/lg_stampa.jpg" class="headingprint" alt="Webank">
<div id="header">
	<h1><a href="/connect.php?page=str_home_pub_wb.php"><span>Webank</span></a></h1>
	<form method="post"  action="/connect.php?page=str_interna_1col_pub_wb.php&tpl=tpl_pub_errore_wb.php" name="toplogin" id="toplogin">
		<div class="toploginLeft">
			<a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_serve_aiuto_wb.php" title="Serve aiuto">Serve aiuto?</a>
			<div>
				<span class="inputtxtLeft"></span>
				<input type="text" value="User ID" name="fintousername" onfocus="this.style.display = 'none'; document.getElementById('idCl').style.display = '';document.getElementById('idCl').focus();" id="idCliente" />
				<input type="text" value="" name="username" style="display: none;" id="idCl" maxlength="8"/>
				<span class="inputtxtLRight"></span>
			</div>
			<div>
				<span class="inputtxtLeft"></span>
				<input type="text" value="Password" name="fintapassword" onfocus="this.style.display = 'none'; document.getElementById('pwd1b').style.display = '';document.getElementById('pwd1b').focus(); " id="pwd1"/>
				<input type="password" style="display: none;" value="" name="password" id="pwd1b" maxlength="16" />
				<span class="inputtxtLRight"></span>
			</div>
		</div>
		<div class="toploginRight">
			<a href="#" title="Cosa vuoi fare">Cosa vuoi fare?</a>
			<div id="selectcont1">
				<select name="service">
					<option value="WEBANK">Privati</option>
					
					<option value="INLINEANET">Business</option>
				</select>
			</div>
			<div id="selectcont2">
				<select name="loginType">
					<option value="full">Consultare e Disporre</option>
					<option value="info">Consultare</option>
				</select>
			</div>
			<input type="submit" onclick="return checkUserAndPwd(toplogin.idCl,toplogin.idCl,toplogin.pwd1b,toplogin.pwd1b);" id="buttonentra" value=""/>
		</div>
	</form>
</div>


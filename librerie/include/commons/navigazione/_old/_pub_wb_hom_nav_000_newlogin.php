<style type="text/css">
#toplogin {float:right;padding-top:16px;height:59px;background: none; width:500px;}
*html #toplogin {width:505px;}
#toplogin a {margin-left:0;}
#toplogin .toploginLeft {float:left;width:218px;}
#toplogin .toploginRight {float:right;width:282px;}
#toplogin .toploginLeft a, #toplogin .toploginRight a, #toplogin .toploginRight .selectEl a {margin:0!important; padding:0;display:block;}
#toplogin .toploginRight a {padding-left:72px;}
#toplogin .toploginRight .selectEl a {font-size:11px;}
#header #toplogin #idCliente, #header #toplogin #idCl {margin-left:0;}
#header #toplogin #idCliente, #header #toplogin #idCl, #header #toplogin #pwd1, #header #toplogin #pwd1b {background:#fff none;border:0;border-bottom:solid 1px #000;padding:4px 0 4px 0px;width:92px;height:14px;margin:0!important;}
#toplogin .toploginLeft .inputtxtLeft, #toplogin .toploginLeft .inputtxtLRight {width:6px;height:23px;float:left;padding:0;background:transparent url(/img/str_bg_pub_bordosxinput.gif) no-repeat 0 0;}
#toplogin .toploginLeft .inputtxtLRight {background:transparent url(/img/str_bg_pub_bordodxinput.gif) no-repeat 0 0;}
#toplogin .toploginLeft div {margin-right:5px;float:left;}
#toplogin .toploginRight #selectcont1 {width:67px;float:left;margin-right:3px;position:relative;z-index:2;}
#toplogin .toploginRight #selectcont1 .input {width:42px;float:left;}
#toplogin .toploginRight #selectcont2 .input {width:107px;float:left;z-index:2;}
#toplogin .toploginRight #selectcont2 {width:132px;float:left; position:relative;z-index:2;}
#toplogin .toploginRight .selectEl {background:#1e201d url(/img/str_bg_pub_select.gif) no-repeat 0 0; height:24px;}
#toplogin .toploginRight .selectEl a.opener {width:16px;height:24px; float:left;background:#1E201D url(/img/str_bg_arrow_select.gif) no-repeat scroll 0 0}
#toplogin .toploginRight .selectEl a.opener:hover {width:16px;height:24px; float:left;background:#1E201D url(/img/str_bg_arrow_select.gif) no-repeat scroll 0 -24px}
#toplogin .toploginRight .input {color:#ccc; padding:2px 0 0px 5px;height:16px;margin-top:2px;margin-left:4px; display:inline;}
#toplogin .toploginRight .selectEl .input:hover {color:#ccc;background-color:#2f3032;cursor:pointer;}
#toplogin .toploginRight .selector {position:absolute; left:0; padding-left:3px; margin-top:20px;margin-left:0px;z-index:2;background:transparent url(/img/str_bg_pub_options___.gif) no-repeat 0 bottom; }
#toplogin .toploginRight #selectcont1 .selector {width:62px;}
#toplogin .toploginRight #selectcont2 .selector {width:127px;}
#toplogin .toploginRight #selectcont1 .selector a {width:54px;float:left;margin:0;}
#toplogin .toploginRight #selectcont2 .selector a {width:119px;float:left;margin:0;}
#toplogin .toploginRight .selector a {color:#ccc; padding:0px 0 2px 5px;margin-top:2px;margin-left:4px; display:inline;}
#toplogin .toploginRight .selector a:hover {color:#ccc;background-color:#2f3032;cursor:pointer;}
#toplogin .toploginRight .selector span {background:transparent url(/img/str_bg_pub_optionsdx___.gif) no-repeat right bottom;width:100%;padding:1px 0 5px 1px; }
#toplogin span, #toplogin a {color:#8ab10b;}
#toplogin .toploginRight #selectcont2.disable .selectEl {background:#1e201d url(/img/str_bg_pub_select_disable.gif) no-repeat 0 0; height:24px;}
#toplogin .toploginRight #selectcont2.disable .selectEl .input:hover {cursor:text;background-color:#1e201d}
#toplogin .toploginRight #selectcont2.disable .selectEl a.opener, #toplogin .toploginRight .selectEl.disable a.opener:hover  {background:#1E201D url(/img/str_bg_arrow_select_disable.gif) no-repeat scroll 0 0;cursor:text}
#toplogin #buttonentra {float:right!important; background: transparent url(/img/str_bg_pub_btn_entra.gif) no-repeat scroll 0 0;width:62px;height:25px;}
#toplogin #buttonentra:hover {float:right!important; background: transparent url(/img/str_bg_pub_btn_entra.gif) repeat-x scroll 0 -25px;width:62px;height:25px;}

</style>



<img src="/img/lg_stampa.jpg" class="headingprint" alt="Webank">
<div id="header">
	<h1><a href="/connect.php?page=str_home_pub_wb.php"><span>Webank</span></a></h1>
	
	<form method="post"  action="/connect.php?page=str_interna_1col_pub_wb.php&tpl=tpl_pub_errore_wb.php" name="toplogin" id="toplogin">
		<div class="toploginLeft">
			<a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_serve_aiuto_wb.php" title="Serve aiuto">Serve aiuto?</a>
			<div>
				<span class="inputtxtLeft"></span>
				<input type="text" value="User ID" name="fintousername" onfocus="this.style.display = 'none'; document.getElementById('idCl').style.display = '';document.getElementById('idCl').focus();" id="idCliente"/>
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
					<select name="cliente">
						<option value="WEBANK" name="service">Privati</option>
						
						<option value="INLINEANET" name="service">Business</option>
						
						
					</select>
				</div>
				<div id="selectcont2">
					<select name="modalità">
						<option value="full">Consultare e disporre</option>
						<option value="Info">Consultare</option>
					</select>
				</div>
		
				<input type="submit" value="" id="buttonentra" />
		
		
		</div>
	</form>
</div>
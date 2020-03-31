<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">
	<head>
		<title>Librerie Webank</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta http-equiv="Content-Language" content="it" />
		<link href="/prestitotitoli/css/style.css" rel="stylesheet" type="text/css" media="all">
		<link href="/prestitotitoli/css/bpm_style.css" rel="stylesheet" type="text/css" media="all">
		<script type="text/javascript" src="/prestitotitoli/js/pt_utilities.js"></script>
	</head>
	<body>
		
		<?php virtual ("/prestitotitoli/include/header.php"); ?>
		
		<?php
			$errore = (isset($_GET['errore']) && $_GET['errore'] == y)? true : false;
		?>
		
		<div id="login">			
			<!-- LOGIN BOX -->
			<div id="boxlogin">
				<form method="post" action="login_check.php" id="loginform">
					<div class="bgTopLogin"></div>
					<div class="bglogin">
						<div class="bgFieldslogin">
							<p class="loginTitle">Effettua il login</p>
							
							<?php //if ($errore) { ?>
							<p class="error">
								<strong>Attenzione!</strong><br>
								Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude.
							</p>
							<?php //} ?>
							
							<fieldset class="loginField">
								<label class="loginLabel" for="username">Username</label><input type="text" id="username" name="username" class="loginInput<?php if ($errore) print (" error");?>"/>
							</fieldset>
							<fieldset class="loginField passwordField">
								<label class="loginLabel" for="password">Password</label><input type="password" id="password" name="password" class="loginInput<?php if ($errore) print (" error");?>"/>
							</fieldset>
							<fieldset class="loginCommand">
								<a class="changepassword" href="#1">Cambia password</a>
								<a href="javascript:;" onclick="document.getElementById('loginform').submit();" title="entra" class="button btnformright"><span class="btndx"></span><span>entra</span><span class="btnsx"></span></a>
								<br class="clear"/>
							</fieldset>
							<div class="boxlogindetails">
								<ul>
									<li>Inserisci lo <strong>Username</strong> con cui entri nel tuo computer.</li>
									<li>Inserisci la <strong>Password</strong> che ti è stata fornita.</li>
									<li>Premi il tasto <strong>Entra</strong>.</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="bgBottomLogin"></div>
				</form>
			</div>	
		</div>
		
		<?php virtual ("/prestitotitoli/include/footer.php"); ?>
	</body>
</html>
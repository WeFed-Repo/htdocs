<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">
	<head>
		<link rel="stylesheet" href="/css/wsadmin.css">
		<link rel="shortcut icon" href="/favicon.ico" />
	</head>
	<body class="scheduler">
		<div id="header">
			<a href="scheduler_index.php?layout=home">
			<h1 class="logo">
				<span>WeTools</span>
			</h1>
			</a>
		</div>
		<div id="login" class="scheduler">
			<p>
				<strong>Benvenuto in WeTools</strong>, lo strumento  per la gestione dei processi interni di WeBank
			</p>
			<!-- LOGIN BOX -->
			<div id="boxlogin">
				<form method="post" action="scheduler_index.php" id="loginform">
					<p><strong>Effettua il login:</strong></p>
					<?php
						if ($_GET["errore"]=="y")
						{
					?>
					<p class="error">
						<strong>Attenzione!</strong><br>
						Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude.
					</p>
					<?php
						}
					?>
					<fieldset>
						<label>Username</label>
						<input type="text" name="username" <?php if ($_GET["errore"]=="y") print ("class=\"error\"");?>/>
					</fieldset>
					<fieldset>
						<label>Password</label>
						<input type="password" name="password" <?php if ($_GET["errore"]=="y") print ("class=\"error\"");?>/>
					</fieldset>
					<fieldset>
						<a class="changepassword" href="http://wesrvfs/iisadmpwd/">Cambia password</a>
						<a href="javascript:;" onclick="document.getElementById('loginform').submit();" title="Entra" class="button"><img src="/img/scheduler_btn_login.gif" alt="Entra"/></a>
					</fieldset>
				</form>
			</div>
			<div class="boxlogindetails">
				<strong>COME EFFETTUARE IL LOGIN</strong>
				<ul>
					<li>Inserisci lo <strong>Username</strong> con cui entri nel tuo computer.</li>
					<li>Inserisci la <strong>Password</strong> che ti &egrave; stata fornita.</li>
					<li>Premi il tasto <strong>Entra</strong>.</li>
				</ul>
			</div>
			<ul class="outerlist">
				<li><a href="###">I have a dream: monitoraggio siti</a></li>
				<li><a href="###">Monitoraggio code</a></li>
			</ul>
		</div>
		<div id="footer">
			<div class="footbox">
				<p>
					Ti ricordiamo che sei tenuto a condividere questi principi nell'attivit&agrave; quotidiana tramite due semplici comportamenti:
				</p>
				<ul>
					<li>Non permettere ad alcuno di utilizzare questo strumento con la tua utenza</li>
					<li>Non diffondere in alcun modo le informazione di cui verrai a conoscenza durante il tuo lavoro</li>
				</ul> 
			</div>
		</div>
	</body>
</html>
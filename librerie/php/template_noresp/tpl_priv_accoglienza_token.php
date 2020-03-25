<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>LIBRERIE WEBANK &raquo; Template struttura &raquo; Pagina interna privata</title>
	 <!-- INIZIO CODICE--> 
<?php virtual ("/wscmn/css/include_css_priv.html"); ?>
<?php virtual ("/js/include_js_priv.html"); ?>
	<!-- FINE CODICE--> 
</head>
<body class="bgfp obs" >
		<div id="sicurezza">
		
			<div class="boxtitle">
				<div class="phonebox"><p>Servizio clienti nazionale<span>800 060 070</span></p></div>
				<p>Lorem ipsum <span>Dolor Sit</span> amet consectetur <span>Elit</span></p>
			</div>
			
			<div class="boxbody">
				<div id="contenuti">
				
				<!-- PARAGRAFO INTRODUTTIVO -->
				<p>
					Sed vel velit ac quam blandit <strong>sagittis</strong> dolor lorem.
				</p>
				<!-- BOX FEEDBACK -->
				<!-- ESITO POSITIVO -->
				<div class="boxesito positivo">
					<div class="middle"><span class="imgCont"></span>
						<div class="text">
							<div class="row-fluid">
								<div class="span12">
									<p><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
									et quas molestias excepturi <a href="#">sint occaecati cupiditate non provident</a>, similiq</p>
									<ul class="listafrec">
										<li><a href="#1" title="#">Lorem ipsum dolor sit amet, consectetuer</a></li>
									</ul>
									<ul class="lista">
										<li>Lorem ipsum dolor sit amet, consectetuer</li>
										<li>Lorem ipsum dolor sit amet, consectetuer</li>
										<li>Lorem ipsum dolor sit amet, consectetuer</li>
									</ul>
									<p class="note">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec quis tellus.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- FINE ESITO POSITIVO -->

				<!-- ESITO NEGATIVO -->
				<div class="boxesito negativo">
					<div class="middle"><span class="imgCont"></span>
						<div class="text">
							<div class="row-fluid">
								<div class="span12">
									<p><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
									et quas molestias excepturi <a href="#">sint occaecati cupiditate non provident</a>, similiq</p>
									<ul class="listafrec">
										<li><a href="#1" title="#">Lorem ipsum dolor sit amet, consectetuer</a></li>
									</ul>
									<ul class="lista">
										<li>Lorem ipsum dolor sit amet, consectetuer</li>
										<li>Lorem ipsum dolor sit amet, consectetuer</li>
										<li>Lorem ipsum dolor sit amet, consectetuer</li>
									</ul>
									<p class="note">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec quis tellus.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- FINE ESITO NEGATIVO -->
		
				<!-- FINE BOX FEEDBACK -->

				<!-- FORM CODICE OTP -->
				<?php virtual("/librerie/include/responsive/form/formGenerico14_token.php") ?>
				<!-- FINE FORM CODICE OTP -->
			
				</div>
			</div>
			<div class="boxend"></div>
		</div>
		
<!-- PAGINA STANDARD (SOSTITUIRE CON QUALSIASI COSA)-->
<div id="testa" style="text-align: center;">
	     <img src="/img/ret/str_myhome_ss.gif">
</div>
<!-- FINE PAGINA STANDARD (SOSTITUIRE CON QUALSIASI COSA NEL BODY) -->

		
		
</body>
</html>
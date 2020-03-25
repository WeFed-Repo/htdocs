<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>LIBRERIE Bpm &raquo; Template struttura &raquo; Pagina interna privata</title>
	 <!-- INIZIO CODICE--> 
		<?php virtual ("/wscmn/css/include_css_priv.html"); ?>
		<?php virtual ("/js/include_js_priv.html"); ?>
	<!-- FINE CODICE--> 
</head>

<body class="bgfp obs" >
	
	
<!-- BOX SICUREZZA IN OVERLAYER -->		
		<div id="sicurezza">

			<div class="boxtitle">
				<div class="phonebox"><p>Servizio clienti nazionale<span>800 060 070</span></p></div>
				<p>Lorem ipsum <span>Dolor Sit</span> amet consectetur <span>Elit</span></p>
			</div>
			
			<script type="text/javascript">
			
			/* FUNZIONE DI TESTING */
			function testInformativa()
			{
				//Se non è ceccata la "presa visione"
				if ( !document.getElementById("checkVisione").checked)
				{
					fieldSetError('checkInformativa');
					document.getElementById("ErroriValidazione").style.display = "block";
				}
				else
				{
					parent.location.href = "/connect.php?page=tpl_priv_accoglienza_informativa_light_end.php";
				}
			}
			
			</script>
			<div class="boxbody">
				<div id="contenuti">
					<!-- PARAGRAFO INTRODUTTIVO -->
					<p>
						Prima di accedere al tuo conto ti invitiamo a <strong>compiere alcuni passi fondamentali</strong>.
					</p>
					<div class="sicurezzabox">
						<h1>Adempimenti di legge e informative</h1>
						<div class="box77">
							<div class="top"></div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in felis. Integer sit amet diam. Sed vel velit ac quam blandit sagittis. Cras velit nisl, dignissim sollicitudin, dictum quis, tempus vitae, purus. In vel nibh nec sem tempus hendrerit. Proin sit amet justo. Cras pharetra nibh lacinia arcu. Praesent gravida lectus a felis.
							</p>
							<br class="clear">
							<div class="bottom"></div>
						</div>
						<br class="clear">
						<div class="fooform">
							<div class="fooformtop"></div>
							<div class="fooformright">
							<div><a href="#" class="btnformright" title="prosegui"><img src="/img/ret/btn_left_ar.gif" alt=""><span>prosegui</span><img src="/img/ret/btn_right_ar.gif" alt=""></a></div>
							<br class="clear">
							</div>	
						</div>
					</div>
				</div>
			</div>
			<div class="boxend"></div>
		</div>
<!-- FINE BOX SICUREZZA IN OVERLAYER -->		


<!-- PAGINA STANDARD (SOSTITUIRE CON QUALSIASI COSA)-->
<div id="testa" style="text-align: center;">
	     <img src="/img/ret/str_myhome_ss.gif">
</div>
<!-- FINE PAGINA STANDARD (SOSTITUIRE CON QUALSIASI COSA NEL BODY) -->

</body>
</html>
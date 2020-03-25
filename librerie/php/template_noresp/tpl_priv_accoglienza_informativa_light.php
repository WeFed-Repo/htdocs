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
					parent.location.href = "/connect.php?page=tpl_priv_accoglienza_informativa_end.php";
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
						<h3 class="squaredotted">Informativa sul trattamento dei dati personali</h3>
						<!-- BOX ERRORE -->
						
					<div id="ErroriValidazione" style="display:none;">
						<div class="boxtop"><img border="0" src="/img/ret/box_msgtop.jpg" alt=""></div>
						<br class="clear">
						<div class="boxtxt">
							<p class="box_mess">
								<img border="0" src="/img/ret/box_attenzione.jpg" alt=""><br>
								Per proseguire &egrave; necessario che tu prenda visione del nuovo testo riguardante l'informativa sul trattamento dei dati personali. Per farlo ti invitiamo a visualizzare il testo aprendo il documento PDF attraverso il link sottostante e successivamente spuntare la casella di presa visione.
							</p> 
							<br class="clear">
						</div>
						<br class="clear">
						<div class="boxbottom"><img border="0" src="/img/ret/box_msgbottom.jpg" alt=""></div>
						</div>
						<!-- / BOX ERRORE -->
						<p>
							Ti informiamo che &egrave; stata acquisita la nuova normativa in tema di privacy sul trattamento dei dati personali. Con l'introduzione di tale informativa <strong>non sar&agrave; apportata alcuna modifica ai consensi</strong> sul trattamento dei dati personali <strong>precedentemente espressi</strong>.
						</p>
						<p>
							Per dichiarare di prendere visione e successivamente esprimere i consensi &egrave; necessario aprire, attraverso il link sottostante, e leggere il nuovo testo dell'informativa per il trattamento dei dati personali.
						</p>
						<p>
							Visualizza la nuova <a href="#### LINK AL PDF #####" onclick="fieldEnable('checkInformativa');" target="_blank">informativa sul trattamento dei dati personali</a>.
						</p>
						<script type="text/javascript">loadFormControl ()</script>
						<form>
							<fieldset id="checkInformativa" class="disabled">
								<label><input type="checkbox" disabled="false" value="off" id="checkVisione" onclick="fieldCheck(this, 'checkInformativa');" title="Per poter dichiarare &egrave; necessario prendere prima visione del PDF contenente l'informativa attraverso il link appena sopra."/>Dichiaro di aver preso visione della nuova informativa</label>
							</fieldset>
						</form>
						<div class="fooform">
							<div class="fooformtop"></div>
							<div class="fooformright">
							<div><a href="javascript:;" class="btnformright" title="dichiara" onclick="testInformativa();"><img src="/img/ret/btn_left_ar.gif" alt=""><span>dichiara</span><img src="/img/ret/btn_right_ar.gif" alt=""></a></div>
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
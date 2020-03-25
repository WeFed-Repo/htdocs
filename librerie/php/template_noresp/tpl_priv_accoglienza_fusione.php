<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>LIBRERIE WEBANK &raquo; Template struttura &raquo; Pagina interna privata</title>
	 <!-- INIZIO CODICE--> 
<?php virtual ("/wscmn/css/include_css_priv.html"); ?>
<?php virtual ("/wscmn/js/include_js_ret_priv.html"); ?>
	<!-- FINE CODICE--> 
</head>
<body class="bgfp obs" >
		<div id="sicurezza">
		
			<div class="boxtitle">
				<div class="phonebox"><p>Servizio clienti<span>800.060.070</span></p></div>
				<p>Benvenuto <span>MARIO ROSSI</span> nell'area privata di <span>Webank</span></p>
			</div>
			
			<div class="boxbody">
				<div id="contenuti">
				
					<!-- INSERIMENTO INSIDIRZZO -->
					<div class="sicurezzabox">
					
						<h1>Lorem ipsum dolor sit amet</h1>
						<h3  class="squaredotted">AGGIORNAMENTO DELL'INDIRIZZO DI RESIDENZA</h3>
						<p>
						La  normativa  antiriciclaggio (decreto legislativo 21 novembre 2007 n. 231.) prevede tra gli obblighi del cliente quello di fornire <span data-tooltip="#ttDatiAggiornati" class="txthelp">dati aggiornati</span><span id="ttDatiAggiornati" class="ttHtmlContent"><i>"I clienti forniscono, sotto la propria responsabilit&agrave;, tutte le informazioni  necessarie e aggiornate per consentire ai  soggetti destinatari del presente decreto di adempiere  agli  obblighi di adeguata verifica della clientela"</i>.<br><br>(Art. 21,  decreto legislativo 21 novembre 2007 n. 231).</span>.<br> 
						<br>
						Dalle nostre verifiche, risultano presenti <strong>due indirizzi di residenza</strong> nell'anagrafe dei tuoi <strong>rapporti attivi con il Gruppo BPM</strong>.<br>
						<br>
						Ti chiediamo di <strong>indicare</strong> quale dei due &egrave; valido e aggiornato. Se nessuno dei due lo &egrave;, segnalaci il nuovo indirizzo di residenza.<br>
						<br>
						L'indirizzo che aggiorni in questa pagina sarà ritenuto l'unico valido per <strong>tutti i rapporti attivi  con il Gruppo BPM</strong>.<br>
						<br>
						L'aggiornamento richieder&agrave; alcuni giorni lavorativi. Ti invieremo via <strong>email conferma</strong> dell'avvenuto aggiornamento.
						</p>
						<!-- FORM SELEZIONE INDIRIZZO -->
						<script type="text/javascript">
							// Inizializzazione interattivita' radio button (cambiare parametri [es:name field] se necessario)
							$(function(){
								$("input[name=radioInd]").click(function(){
									// Reset border tutti i box
									$("input[name=radioInd]").parents(".span6,.span12").removeClass("evident");
									// Colorazione bordo
									$(this).parents(".span6,.span12").addClass("evident");
									if ($(this).attr("value")== "altro")
										{
											$("#altroIndirizzo").show();
										}
									else
										{
											$("#altroIndirizzo").hide();
										}
										
									// Abilita il bottone "salva"
									$("#btnSalva").removeClass("buttDis");
								});
							});
						</script>
						<div class="formGeneric radioBox">
							<div class="row-fluid">
								<div class="span6 borded">
									<label>
										<input type="radio" name="radioInd">
										<span class="text">
											Via Veneto 15<br>
											20010 Boffalora sopra Ticino<br>
											Milano
										</span>
									</label>
								</div>
								<div class="span6 borded">
									<label>
										<input type="radio" name="radioInd">
										<span class="text">
											Via Pico della Mirandola 67<br>
											20010 San Giorgio su Legnano<br>
											Milano
										</span>
									</label>
								</div>
							</div>
							<div class="row-fluid">
								<div class="span12 borded">
									<label class="paddBottomSmall">
										<input type="radio" name="radioInd" value="altro">
										<span class="text">
											Altro indirizzo
										</span>
									</label>
									<div id="altroIndirizzo" style="display:none">
										<div class="row-fluid paddBottomSmall">
											<div class="span6">
												<label class="nomefield">Indirizzo</label>
												<input type="text">
											</div>
											<div class="span2">
												<label class="nomefield">Numero civico</label>
												<input type="text">
											</div>
											<div class="span4">
												<label class="nomefield">Presso</label>
												<input type="text">
											</div>
										</div>
										<div class="row-fluid paddBottomSmall">
											<div class="span2">
												<label class="nomefield">Cap</label>
												<input type="text">
											</div>
											<div class="span4">
												<label class="nomefield">Citt&agrave;</label>
												<select placeholder="Citt&agrave;"><option>lorem</option><option>lorem</option></select>
											</div>
											<div class="span2">
												<label class="nomefield">Provincia</label>
												<select placeholder="Provincia"><option>lorem</option><option>lorem</option></select>
											</div>
										</div>
										<p class="note">* I campi contrassegnati dall'asterisco sono obbligatori.</p>
									</div>
								</div>
							</div>
							<br class="clear">
						</div>
					</div>
					<!-- PULSANTE -->
					<div class="aButtonconsRight">
						<span class="btnc"><a class="aButton" href="javascript:;"><span>Ignora questa volta</span></a></span>
						<span class="btnc"><a class="aButton buttDis" href="javascript:;" id="btnSalva"><span>Salva</span></a></span>
					</div>
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
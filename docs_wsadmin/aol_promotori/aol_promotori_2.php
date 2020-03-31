<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">	
<head>
	<title>Webank - Apri conto Webank</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta http-equiv="Content-Language" content="it" />
	<meta name="author" content="We@service S.p.a" />
	<meta name="description" content="Webank - La banca online dal 1999" />
	<meta name="keywords" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
	<link rel="shortcut icon" href="/img/favicon.ico" />
	<link rel="stylesheet" href="/css/aol_promotori2.css"></link>
	<script src="/wscmn/js/jquery.js" type="text/javascript"></script>
	<script type="text/javascript" src="/js/aol_promotori.js"></script>
</head>
<body>
	<div id="pagecontainer">
		<div id="header">
			<h1><a href="/webankpub/wb/home.do?tabId=nav_pub_wb_home_nw&amp;OBS_KEY=nav_pub_wb_home_nw"><span>Webank</span></a></h1>
		</div>
		<div id="menu">
			<h2>Richiesta apertura conto</h2>
		</div>
		<div id="content">
			<div id="aolcontainer">
				<div id="aolleft">
					<script type="text/javascript">
					function showDett(obj) 
					 { 
						var radioId =$(obj).closest('fieldset').find('.blockradio');
						if(!radioId.hasClass('opened')) radioId.addClass('opened');
						else{radioId.removeClass('opened');}
						if($('.btnCont')) {$('.btnCont:first').hide()};
						
					 }
					</script>
					<form autocomplete="off" method="post" action="">	
						<div class="aolblock">
							<h3>Estratto conto e contabili</h3>
							<p>Scegli come ricevere l'estratto conto e le contabili del tuo conto. Ti saranno inviate trimestralmente, se vuoi modificarne la frequenza contatta il nostro Servizio Clienti.</p>
							<div class="fieldblock" id="contabili">
								<fieldset style="width: 195px;" class="lastrow">
									<label><input type="radio" id="col" value="1" name="col"><span class="optiontext">online<br>servizio gratuito</span></label>	
								</fieldset>
								<fieldset class="lastrow">
									<label><input type="radio" id="col" value="0" name="col"><span class="optiontext">cartacee<br>servizio a pagamento: 1,35&euro; per ciascun documento</span></label>
								</fieldset>
									
								<span class="errortext">Seleziona</span>
							</div>
						</div>
						<div class="aolblock">
							<div id="aolDeposito" class="">
									<div class="productPush">
										<h3>prodotti aggiuntivi</h3>
										<fieldset>
											<label><input type="checkbox" name="" value="1" id="" onclick="if(this.checked) {$('#aolDeposito').attr('class','opened')} else {$('#aolDeposito').attr('class','')};"><span class="large">Deposito titoli e servizi di investimento</span></label>
										</fieldset>
									</div>
									<div id="aolDepositoCont">
										<div class="aolDepositotop">
											<span class="title" title="Dati per l'apertura del deposito titoli"></span>
										</div>
										<div class="aolDepositoBody">
											<!-- CONTENUTO DEI CAMPI -->
											<h4 class="primo">Regime fiscale</h4>
											
											
											<div class="fieldblock" id="regime">
											
											<fieldset class="fullwidth">
												<label>
													<input type="radio" id="ct_regimenew" checked="checked" value="1" name="ct_regimenew">
													<span class="optiontext"><strong>Regime fiscale amministrato (consigliato)</strong></span>
												</label>
											</fieldset>
											
											<fieldset class="fullwidth">
												<label>
													<input type="radio" id="ct_regimenew" value="0" name="ct_regimenew">
													<span class="optiontext"><strong>Regime fiscale dichiarativo</strong></span>
												
												</label>
											</fieldset>
											
											<span class="errortext">Seleziona</span>
											</div>
											
											<h4>Tipo di commissione</h4>
											
											
											<div class="fieldblock" id="commissioni">
												
											<fieldset style="width: 160px;" class="lastrow">
												<label><input type="radio" id="ng_commissioni" value="1" name="ng_commissioni"><span class="optiontext">profilo fisso</span></label>
											</fieldset>
											
											<fieldset style="width: 150px;" class="lastrow">
												<label><input type="radio" id="ng_commissioni" value="0" name="ng_commissioni"><span class="optiontext">profilo variabile</span></label>
											</fieldset>
											
											<span class="errortext">Seleziona</span>
											</div>
											
											<h4>Abilitazione long overnight</h4>
											<fieldset class="fullwidth check lastrow" style="min-height: 20px;">
												<label>
													<input type="checkbox"title="Lorem ipsum dolor sit amet" id="informativa">
													<span class="optiontext optiontextb">Desidero ricevere la documentazione per l'abilitazione al servizio Long Overnight</span>
												</label>
												<span class="errortext">Compila</span>
											</fieldset>
											<h4>Estratto conto e contabili del deposito titoli</h4>
											<div class="fieldblock" id="contabiliCt">
											
											<fieldset style="width: 160px;" class="lastrow">
												<label><input type="radio" value="1" name="colCt"><span class="optiontext">online<br>servizio gratuito</span></label>
											</fieldset>
											
											<fieldset style="width: 300px;" class="lastrow">
												<label><input type="radio" value="0" name="colCt"><span class="optiontext">cartacee<br>servizio a pagamento: 1,35€ per ciascun documento</span></label>
											</fieldset>
											
											<span class="errortext">Seleziona</span>
											</div>
											<!-- FINE CONTENUTO DEI CAMPI -->
										</div>
										<div class="aolDepositoBottom"> </div>
									</div>
									<div class="productPush">
										<fieldset>
											<label><input type="checkbox" id="" value="1" name=""><span class="large">Bancomat</span></label>
										</fieldset>
									</div>
										<div class="productPush">
										<fieldset>
											<label><input type="checkbox" id="" value="1" name=""><span class="large">Carta Je@ns</span></label>
										</fieldset>
									</div>
							</div>
						</div>
						
						<br class="clear" />
						<div class="aolblock">
							<h3>PROCEDURA DI IDENTIFICAZIONE</h3>
							<p>
							Tutti i <b>nuovi clienti</b> devono quindi scegliere una modalit&agrave; di identificazione tra quelle previste.<br/>
							</p>
							
							<strong>MARIO GIORDANO</strong><p>ha dichiarato di essere gi&agrave; cliente Webank, quindi non dovr&agrave;  effettuare la procedura di identificazione.

Gli altri intestatari devono scegliere una modalit&agrave; di identificazione tra quelle indicate.</p>
		
							<fieldset id="identificazioneCont" class="fullwidthradio lastrow identificazioneCont">
						<div class="blockradio">
							<label>
								<input type="radio" value="bonifico" name="identificazione" title="Lorem ipsum dolor sit amet" class="identificazione" onclick="showDett(this);" aolblockindex="0">
								<span class="optiontextmini">tramite bonifico (consigliato da Webank)</span>
							</label>
							<span class="dett">
									<strong>MARIO GIORDANO</strong>
									<p class="minitext">
									Inserisci l'iBAN del conto corrente dal quale farai il bonifico.
									</p>
									<fieldset><div class="fieldCounter"><span>0</span>/27 caratteri</div>
										<span class="label">IBAN*</span>
										<input type="text" maxlength="27" id="iban">
										<script type="text/javascript" defer="defer">setCounterOnField("iban",27);</script>
									<span class="errortext">lorem</span>
									</fieldset>
							</span>
						</div>
						<div class="blockradio">
							<label>
								<input type="radio" value="agenzia" name="identificazione" title="Lorem ipsum dolor sit amet" class="identificazione" onclick="showDett(this);" aolblockindex="0">
								<span class="optiontextmini">in un'agenzia del Gruppo Bipiemme </span>
								
							</label>
							
							<a class="openpop" onclick="$('listagenzia').show();" href="javascript:;">vuoi sapere qual'&egrave; l'agenzia pi&ugrave; vicina a te?</a>
							<div class="btnCont" style="display: none;" id="listagenzia">
									<fieldset class="lastrow">
										<span class="label">Comune</span>
										<input type="text" value="" name="">
										<span class="errortext">Lorem</span>
									</fieldset>
									<fieldset class="btn lastrow">
										<a onclick="javascript:window.open('connect.php?page=str_pub_pop_agenzia.php','main1','width=450,height=410,top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=yes')" title="cerca" href="javascript:;" class="greenbutton" aolblockindex="0"><span>cerca</span></a>
									</fieldset>
							</div>
						</div>
				
					<span class="errortext">lorem</span>
					</fieldset>
	

						</div>
						<div class="filettobutton linked">
							<a class="backLinked" href="/aol_promotori/aol_promotori.php" title="indietro">indietro</a>
							<a href="javascript:;" title="invia la richiesta" class="greenbutton" onclick="setError('col','lorem');"><span>invia la richiesta</span></a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>
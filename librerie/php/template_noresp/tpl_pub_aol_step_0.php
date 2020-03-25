<!-- ESEMPIO DI SETTING ERRORI: NON COPIARE -->
<script type="text/javascript">
	//Esempio di setting di alcuni errori
	errori = false;
	function esempioErrori()
	{
		if (errori)
		{
			//parent.location.href = "/connect.php?page=str_aol_pub_wb.php&tpl=tpl_pub_aol_step_1.php";
			openPopOverLayer('convenzione', 'floating');
			unsetError('nome_int1','Lorem');
		return 0;
		}
		setViewElement('nome_int1');
		setError('nome_int1','Lorem');
		setError('cognome_int1','Lorem');
		setError('campoSesso','Lorem');
		setError('cod_fiscale_int1','Lorem');
		setError('mail_int1','Lorem')
		setError('prefisso_3_int1','Lorem');
		setError('titolareEffettivo','Lorem');
		setError('informativaPrivacy','Lorem ipsum dolor sit');
		//Per togliere gli errori utilizzare unsetError con gli stessi parametri (id del campo)
		errori = true;
	}
</script>
<!-- FINE ESEMPIO DI SETTING ERRORI: NON COPIARE -->
<div id="aolcontainer">
<!-- CONTENITORE PRINCIPALE -->
	<div id="aolleft">
		<!-- Form -->

		
		<form name="form" autocomplete="off">
			<!-- Blocco intestazione -->
			<div class="aolblock">
				<h3>Intestazione conto</h3>
				<fieldset class="fullwidth lastrow">
					<label><input type="radio" name="qintest" checked value="0"/><span class="optiontext" style="width:130px">Un intestatario</span></label>
					<label><input type="radio" name="qintest" value="1"/><span class="optiontext" style="width:130px">Due intestatari</span></label>
					<label><input type="radio" name="qintest" value="2"/><span class="optiontext" style="width:130px">Tre intestatari</span></label>
				</fieldset>
			</div>
			<!-- fine blocco intestazione-->
			<!-- blocco anagrafici -->
			<div class="aolblock">
				<h3>Dati anagrafici intestatario</h3>
				<div class="aolblockwrapper">
				<fieldset class="tolltipclick">
					<span class="label"><span>Nome*</span>
						<span class="closed">
							<span id="nome" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'small')}"><span class="uniqTooltipPos"> <a href="javascript:;" class="noborder"><img src="/img/img_or_tooltip_off.gif" alt=""/></a></span>
							<span class="uniqTooltipInnerHTML">
									<p>Scrivi il tuo nome per esteso, come &egrave; scritto sul documento di identit&agrave;.</p>
							</span></span>
						</span>
					</span>
					<input type="text" id="inputNome"/>
					<span class="errortext"></span>
				</fieldset>
				<fieldset class="tolltipclick">
					
					<span class="label">
					<span>Cognome*</span>
					<span class="closed">
							<span id="cognome" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'small')}"><span class="uniqTooltipPos"> <a href="javascript:;" class="noborder"><img src="/img/img_or_tooltip_off.gif" alt=""/></a></span>
							<span class="uniqTooltipInnerHTML">
									<p>Scrivi il tuo cognome per esteso, come &egrave; scritto sul documento di identit&agrave;.</p>
							</span></span>
					</span>
					</span>
					
					<input type="text"/>
					<span class="errortext"></span>
				</fieldset>
				<fieldset style="width: 183px;" class="error">
					<span class="label">Data di nascita</span>
					<div id="tuttaLaData">
						<div class="fieldblock">
							<input type="text" style="width:25px;" value="gg" class="opzionale" onclick="removeOpt(this,'gg');"/>
							
						</div>
						<span class="separator">/</span>
						<div class="fieldblock">
							<input type="text" style="width:25px;" value="mm" class="opzionale" onclick="removeOpt(this,'mm');"/>
							
						</div>
						<span class="separator">/</span>
						<div class="fieldblock">
							<input type="text" style="width:50px;" value="aaaa" class="opzionale" onclick="removeOpt(this,'aaaa');"/>
							
						</div>
						
					</div>
					<span class="errortext">L'intestatario deve essere maggiorenne</span>
					<span class="errortext"></span>
				</fieldset>
				<fieldset style="width:104px">
					<span class="label">Sesso*</span>
					<label style="width:40px;"><input type="radio" name="sesso" id="campoSesso"><span class="optiontext">M</span></label>
					<label style="width:30px;"><input type="radio" name="sesso" ><span class="optiontext">F</span></label>
					<span class="errortext">Compila</span>
				</fieldset>
				<fieldset>
					<span class="label">Codice fiscale*</span>
					<input type="text" maxlength="16" id="codicefiscale" value=""/>
					<script type="text/javascript" defer="defer">setCounterOnField("codicefiscale",16);</script>
					<span class="errortext">Compila</span>
				</fieldset>
				<br class="clear">
				<fieldset class="lastrow">
					<span class="label">Email*</span>
					<input type="text"/>
					<span class="errortext">Compila</span>
				</fieldset>
				<fieldset class="lastrow tolltipclick">
					<span class="label">
					<span>Numero cellulare*</span>
					
					<span class="closed">
							<span id="cellulare" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')}"><span class="uniqTooltipPos"> <a href="javascript:;" class="noborder"><img src="/img/img_or_tooltip_off.gif" alt=""/></a></span>
							<span class="uniqTooltipInnerHTML">
									<p>Grazie al <strong>Programma Sicurezza</strong>, riceverai SMS <strong>gratuiti</strong> per controllare i movimenti sul tuo conto<br/> (bonifici, ricariche telefoniche e carte prepagate).</p>
							</span></span>
					</span>
					</span>
					<div class="fieldblock">
						<input type="text" style="width:50px"/>
						<span class="errortext">Compila</span>
					</div>
					<div class="fieldblock">
						<input type="text" style="width:60px"/>
						<span class="errortext">Compila</span>
					</div>
					<div class="fieldblock">
						<span class="errorIE">
						<select style="width:116px" id="selectOperatore"/>
							<option selected value="">operatore</option>
							<option value="1">Lorem ipsum</option>
						</select>
						</span>
						<span class="errortext">Seleziona</span>
					</div>
				</fieldset>
				</div>
				<img src="/img/str_aol_dacompilarebot.gif"  class="promobottom"/>
			</div>
			<!-- fine blocco anagrafici -->
			<!-- blocco codici -->
			<div class="aolblock">
				<h3>Codici per convenzioni e promozioni</h3>
				
				<div class="aolblockwrapper">
				<fieldset>
					<span class="label">Codice convenzione</span>
					<input type="text" value="opzionale" class="opzionale" onclick="removeOpt(this,'opzionale')"/>
					<span class="errortext">Verifica</span>
				</fieldset>
				<fieldset>
					<span class="label">Codice presentatore</span>
					<input type="text" value="opzionale" class="opzionale" onclick="removeOpt(this,'opzionale')"/>
					<span class="errortext">Verifica</span>
				</fieldset>
				<fieldset class="lastrow">
					<span class="label">Codice promotore</span>
					<input type="text" value="opzionale" class="opzionale" onclick="removeOpt(this,'opzionale')"/>
					<span class="errortext">Verifica</span>
				</fieldset>
				</div>
				<img src="/img/str_aol_dacompilarebot.gif"  class="promobottom"/>
			</div>
			<!-- fine blocco codici -->
			<!-- blocco adempimenti -->
			
			
			<div class="aolblockpromo">
				<h3>Adempimenti per normativa antiriciclaggio</h3>
				<div class="aolblockwrapper">
					<p class="minitext">
						Sei tenuto a fornire alla Banca alcune dichiarazioni e informazioni ai sensi della vigente normativa antiriciclaggio (D.Lgs. 231/07). Ti ricordiamo che il rilascio di false informazioni od omissioni comporta conseguenze anche di natura penale.
					</p>
					<fieldset class="lastrow">
						<span class="label">Utilizzo del conto*</span>
						<select/>
							<option value="1">Lorem ipsum dolor</option>
							<option value="2">Lorem ipsum dolor</option>
							<option value="3">Lorem ipsum dolor</option>
						</select>
						<span class="errortext">Seleziona</span>
					</fieldset>
					
					<fieldset class="check error tolltipclick">
						<span class="label"><span>Titolare effettivo*</span>
						<span class="closed">
							<span id="titolare" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'small')}"><span class="uniqTooltipPos"> <a href="javascript:;" class="noborder"><img src="/img/img_or_tooltip_off.gif" alt=""/></a></span>
							<span class="uniqTooltipInnerHTML">
									<p>lorem ipsum</p>
							</span></span>
					   </span>
						
						</span>
						<label>
							<input type="checkbox" id="titolareEffettivo"/>
							<span class="optiontextmini">Dichiaro di essere il Titolare Effettivo del conto ai sensi del D.Lgs. 231/07 e di agire esclusivamente per mio conto.</span>
						</label>
						<span class="errortext">Compila</span>
					</fieldset>
					<p class="minitext nobottpad">
						NB: Se il conto viene aperto su incarico di un'altra persona (al fine di effettuare operazioni per conto di quest'ultima) allora non sei il Titolare Effettivo. 
					</p>
				</div>
				<img src="/img/str_aol_dacompilarebot.gif"  class="promobottom"/>
			</div>
			
			<!-- fine blocco adempimenti -->
			<!-- blocco dati personali -->
			<div class="aolblockpromo">
				<h3>Informativa sul trattamento dei dati personali</h3>
				<div class="aolblockwrapper">
				<p class="minitext">Prendi visione dell'informativa; per procedere occorre aprire il documento.</p>
				<ul class="documentlist">
					<li><a href="####" onclick="javascript: fieldEnable('informativaPrivacy', true); fieldEnable('inputNome', false); fieldEnable('tuttaLaData', false); setVisitedLink(this)">Informativa sul trattamento dei dati personali (xx kb)</a>*
				</ul>
				<fieldset class="fullwidth check lastrow tolltipclick">
					<label>
						<span class="closed">
							<span onclick="if(this.parentNode.className=='closed' && $(this).find('input').is(':disabled')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this);}" class="uniqTooltipText over fixed" id="informativaCheck">
								<span class="uniqTooltipPos">
									<a class="hovfincont" href="javascript:;"><span class="hovfin"></span><input type="checkbox" disabled="" id="informativaPrivacy"></a>
									<span class="uniqTooltipInnerHTML">
										<p>lorem ispum</p>
									</span>
								</span>
							</span>
						</span>
						
						<span class="optiontextmini">Dichiaro di aver letto attentamente l'informativa resa disponibile su supporto durevole e di averne compreso il contenuto.</span>
					</label>
					<span class="errortext">Compila</span>
				</fieldset>
			
				</div>
				<img src="/img/str_aol_dacompilarebot.gif"  class="promobottom"/>
			</div>
			<!-- fine blocco dati personali -->
			<div class="filettobutton">
				<a class="greenbutton" href="javascript:;" title="avanti" onclick="esempioErrori();"><span>avanti</span></a>
			</div>
		</form>
		<!-- / form -->
	</div>
<!-- PANNELLO DI DESTRA -->	
	<div id="aolright">
	<!-- caso A celletta singola-->
		<!--<div class="gen">
			<div class="boxpromoright">
				<a href="#"><img src="/img/ban_promo_nuovi_clenti.gif" alt ="promo 3,5% nuovi clienti" /></a>
				<div class="promoopen">
					<a href="javascript:;" title="verifica le condizioni" onmouseover="showCond(this)" onmouseout="hideCond(this)">Verifica le condizioni</a>
					<span class="condizionidetails" style="display:none;">
						<h4><strong>Promozione Webank ti d&agrave; il 3,5</strong></h4>
						<ul>
							<li><strong>3,5% lordo</strong> sulle somme vincolate per <strong>12 mesi</strong></li>
						</ul>
						Le condizioni:
						<ul>
							<li>la <strong>richiesta di apertura</strong> di Conto Webank va inviata entro il <strong>15 luglio 2011</strong></li>
							<li>la <strong>linea vincolata</strong> a 12 mesi va aperta entro il 05 agosto 2011</li>
						</ul>
					</span>
					<img src="/img/str_promoopenbottom.gif"  alt="" />
				</div>
			</div>
		</div>
		<div class="filettolarge"></div>
		<div class="gen">
			<img src="/img/tit_portata_mano.gif"  alt="tieni a portata di mano" />
		</div>
		<div class="filettolarge"></div>
		<div class="gen">
			<ul class="elencodoc">
				<li>Documento d'identit&agrave;</li>
				<li>Codice fiscale</li>
				<li class="last">IBAN del conto da cui effettuare il bonifico per il riconoscimento, se non sei già cliente Webank</li>
			</ul>
		</div>
		<div class="filettolarge"></div>-->
		
		<!--caso B celletta doppia-->
		
		<div class="gen">
			<div id="boxpromocont">
				<div class="boxpromoright paddbott">
					<a href="#"><img src="/img/2015_promo_conto.gif" alt ="promo 3,5% nuovi clienti" /></a>
					<span class="promoopen">
						<a href="javascript:;" title="verifica le condizioni" onclick="showCond(this);">Verifica le condizioni
						
						</a>
						<span class="condizionidetails" style="display:none;">
							<h4><strong>Promozione Webank ti d&agrave; il 3,5</strong></h4>
							<ul>
								<li><strong>3,5% lordo</strong> sulle somme vincolate per <strong>12 mesi</strong></li>
							</ul>
							Le condizioni:
							<ul>
								<li>la <strong>richiesta di apertura</strong> di Conto Webank va inviata entro il <strong>15 luglio 2011</strong></li>
								<li>la <strong>linea vincolata</strong> a 12 mesi va aperta entro il 05 agosto 2011</li>
							</ul>
						</span>
						<img src="/img/str_promoopenbottom.gif"  alt="" />
					</span>
				</div>
				<br /><br />
				<div class="boxpromoright">
					<a href="#"><img src="/img/2015_promo_trading.gif" alt ="promo Tarding" /></a>
					<span class="promoopen">
						<a href="javascript:;" title="verifica le condizioni" onclick="showCond(this);">Verifica le condizioni</a>
						<span class="condizionidetails" style="display:none;">
							<h4><strong>Offerta trading 3,2,1: eseguito!</strong></h4>
							<ul>
								<li><strong>Commissioni di trading esclusive</strong> su <strong>ogni ordine eseguito</strong>sui mercati <strong>azionari</strong> e <strong>obbligazionari</strong> italiani e sui mercati dei  <strong>derivati italiani</strong> ed <strong>esteri: </strong>
									<ul>
										<li><strong>3 €</strong> nel <strong>primo mese</strong>, <strong>2 €</strong> nel <strong>secondo</strong>, <strong>1 €</strong> nel <strong>terzo</strong></li>
										<li>fino a un minimo di <strong>2 €</strong> per <strong>tutto il 2011</strong>, secondo il numero di ordini eseguiti nei primi 3 mesi dell’offerta</li>
									</ul>
								</li>
								<li><strong>Piattaforma T3 gratuita fino al 31 dicembre 2011</strong></li>
							</ul>
							Le condizioni:
							<ul>
								<li>la <strong>richiesta di apertura</strong> di <strong>Conto Webank</strong> e del <strong>deposito titoli</strong> va inviata tra il <strong>9 aprile</strong> e il <strong>9 maggio 2011</strong></li>
								<li>il deposito deve <strong>essere aperto</strong> entro il <strong>30 maggio 2011</strong>(ricorda che l'apertura avviene al massimo entro <strong>7 giorni lavorativi</strong> da quanto riceviamo tutti i documenti necessari compilati correttamente)</li>
							</ul>
						</span>
						<img src="/img/str_promoopenbottom.gif"  alt="" />
					</span>
				</div>
			</div>
		</div>
		










	<!-- caso A -->
	<!--	
	<div class="gen">
		<div id="boxpromocont">
		
			<div class="boxpromoright  paddbott">
				<a href="javascript:;"><img src="/img/ban_promosm_gennaio2014_top.gif"/></a>
				<div class="promoopen">
					<a href="javascript:;" onmouseover="showCond(this)" onmouseout="hideCond(this)">Verifica le condizioni</a>
					<span class="condizionidetails" style="display:none;">null</span>
					<img src="null"  alt="" />
				</div>
			</div>
			
			<div class="boxpromoright ">
				<a href="javascript:;"><img src="/img/ban_promosm_gennaio2014_bottom.gif"/></a>
				<div class="promoopen">
					<a href="javascript:;" onmouseover="showCond(this)" onmouseout="hideCond(this)">Verifica le condizioni</a>
					<span class="condizionidetails" style="display:none;"><p><strong>Per avere i Bolli Gratis sul deposito titoli:</strong> - Richiedi l&#39;apertura di conto Webank entro il <strong>02/05/2012</strong> e perfeziona l&#39;apertura,inviando la documentazione firmata, entro il <strong>18/05/2012</strong>;<br />- richiedi e perfeziona, inviando la documentazione firmata,l&rsquo;<strong>apertura del deposito titoli</strong> entro <strong>18/05/2012;</strong> <br />- Attiva il <strong>Portafoglio Extra</strong> (servizio di Prestito Titoli di WeBank) entro il <strong>18/05/2012</strong>.<br />L&#39;imposta verr&agrave; rimborsata nel periodo di riferimento se, il deposito titoli avr&agrave; un controvalore di Titoli e Fondi pari ad almeno 10.000 Euro (Giacenza complessiva) e avr&agrave; attivo il Portafoglio Extra (il servizio prestito titoli di WeBank) durante il Periodo di Riferimento.<br /><br />Il rimborso sar&agrave; pari allo 0,1% annuo per l&rsquo;anno 2012 e dello 0,15% per l&rsquo;anno 2013 del controvalore in Titoli e Fondi, calcolato secondo i criteri della Legge N.214 del 22/12/2011, fino a un <strong>massimo di Euro 1.200 annui.</strong><br /><br /><span style="color: #999999">Consulta tutti i dettagli sul Regolamento, i Fogli Informativi e l&#39;Informativa Precontrattuale.</span></p></span>
					<!img src="/wbx/res/promConv/img/str_promoopenbottom.gif"  alt="" />
					<img src="/img/str_promoopenbottom_white.gif"  alt="" />
				</div>
			</div>
		
		
		</div>
		</div>
		-->
		<!--fine caso A -->
		
		
		<!--caso B celletta doppia ma che sembri una sola (promo conto+trading)-->
		<!--<style>
		#aolright .boxpromoright.paddbott {margin-bottom:0px !important}
		#aolright .boxpromoright.paddbott span.promoopen {display:none}
		</style>-->
		<!--<div class="gen">
			<div id="boxpromocont">
				<div class="boxpromoright paddbott">
					<a href="#"><img src="/img/ban_promosm_marzo2012_ct_top.gif" alt ="promo 3,5% nuovi clienti" /></a>
					<span class="promoopen">
						<a href="javascript:;" title="verifica le condizioni" onmouseover="showCond(this)" onmouseout="hideCond(this)">Verifica le condizioni</a>
						<span class="condizionidetails" style="display:none;">
							<h4><strong>Promozione Webank ti d&agrave; il 3,5</strong></h4>
							<ul>
								<li><strong>3,5% lordo</strong> sulle somme vincolate per <strong>12 mesi</strong></li>
							</ul>
							Le condizioni:
							<ul>
								<li>la <strong>richiesta di apertura</strong> di Conto Webank va inviata entro il <strong>15 luglio 2011</strong></li>
								<li>la <strong>linea vincolata</strong> a 12 mesi va aperta entro il 05 agosto 2011</li>
							</ul>
						</span>
						<img src="/img/str_promoopenbottom.gif"  alt="" />
					</span>
				</div>
				<!--br /><br /-->
				<!--<div class="boxpromoright">
					<a href="#"><img src="/img/ban_promosm_marzo2012_ct_bottom.gif" alt ="promo Tarding" /></a>
					<span class="promoopen">
						<a href="javascript:;" title="verifica le condizioni" onmouseover="showCond(this)" onmouseout="hideCond(this)">Verifica le condizioni</a>
						<span class="condizionidetails" style="display:none;">
							Per avere <strong>rimborso dell'imposta di bollo sul deposito titoli</strong>:
							<ul>
								<li><strong>Richiedi l'apertura</strong> del <strong>conto</strong> corrente entro il <strong>29/02/12</strong>.</li>
								<li><strong>Perfeziona l'apertura del conto</strong> e la contrattualistica del <strong>deposito titoli</strong> entro il <strong>30/03/12</strong>.</li>
								<li>Attiva il <strong>Portafoglio Extra</strong> (servizio di Prestito Titoli di WeBank) entro il <strong>15/04/2012</strong>.</li>
							</ul>
							L'imposta verr&agrave; rimborsata nel periodo di riferimento se, il deposito titoli avr&agrave; un controvalore di Titoli e Fondi pari ad almeno 10.000 Euro (Giacenza complessiva) e avr&agrave; attivo il Portafoglio Extra (il servizio prestito titoli di WeBank) durante il Periodo di Riferimento. 
							<br /><br />
							Per avere il <strong>tasso promozionale del 4,50%</strong> lordo annuo: 
							<ul>
								<li><strong>Richiedi l'apertura</strong> del <strong>conto corrente</strong> entro il <strong>29/02/12</strong>.</li>
								<li><strong>Perfeziona l'apertura del conto</strong> entro il <strong>30/03/12</strong>.</li>
								<li><strong>Attiva</strong> le linee vincolate a 3,6 e 12 mesi entro il <strong>15/04/12</strong>.</li>
							</ul>
							<span style="color:#999">Consulta tutti i dettagli sul Regolamento, i Fogli Informativi e l'Informativa Precontrattuale.</span> 
							<!--
							Per avere il <strong>tasso promozionale del 4,50%</strong> lordo annuo:
							<ul>
								<li><strong>Richiedi l'apertura</strong> del <strong>conto corrente</strong> entro il <strong>29/02/12</strong>.</li>
								<li><strong>Perfeziona l'apertura del conto</strong> entro il <strong>30/03/12</strong>, invia tutta la documentazione firmata.</li>
								<li><strong>Attiva</strong> le linee vincolate a 3,6 e 12 mesi entro il <strong>15/04/12</strong>.</li>
							</ul>
							Per avere <strong>i bolli gratis sul deposito titoli</strong>:
							<ul>
								<li><strong>Richiedi l'apertura</strong> del <strong>conto</strong> entro il <strong>29/02/12</strong>.</li>
								<li><strong>Richiedi l'apertura del deposito titoli</strong> entro il <strong>30/03/12</strong>.</li>
								<li><strong>Perfeziona l'apertura del conto</strong> e del <strong>deposito titoli</strong> entro il <strong>30/03/12</strong>.</li>
								<li>Attiva il <strong>Portafoglio Extra</strong> (servizio di Prestito Titoli di WeBank) entro il <strong>15/04/2012</strong>.</li>
							</ul>
							L'imposta verr&agrave; rimborsata nel periodo di riferimento se, il deposito titoli avr&agrave; un controvalore di Titoli e Fondi pari ad almeno 10.000 Euro (Giacenza complessiva) e avr&agrave; attivo il Portafoglio Extra (il servizio prestito titoli di WeBank) durante il Periodo di Riferimento.
							<br /><br />
							<span style="color:#999">Consulta tutti i dettagli sul Regolamento, i Fogli Informativi e l'Informativa Precontrattuale.</span>  
							-->
							
							<!--h4><strong>Offerta trading 3,2,1: eseguito!</strong></h4>
							<ul>
								<li><strong>Commissioni di trading esclusive</strong> su <strong>ogni ordine eseguito</strong>sui mercati <strong>azionari</strong> e <strong>obbligazionari</strong> italiani e sui mercati dei  <strong>derivati italiani</strong> ed <strong>esteri: </strong>
									<ul>
										<li><strong>3 €</strong> nel <strong>primo mese</strong>, <strong>2 €</strong> nel <strong>secondo</strong>, <strong>1 €</strong> nel <strong>terzo</strong></li>
										<li>fino a un minimo di <strong>2 €</strong> per <strong>tutto il 2011</strong>, secondo il numero di ordini eseguiti nei primi 3 mesi dell’offerta</li>
									</ul>
								</li>
								<li><strong>Piattaforma T3 gratuita fino al 31 dicembre 2011</strong></li>
							</ul>
							Le condizioni:
							<ul>
								<li>la <strong>richiesta di apertura</strong> di <strong>Conto Webank</strong> e del <strong>deposito titoli</strong> va inviata tra il <strong>9 aprile</strong> e il <strong>9 maggio 2011</strong></li>
								<li>il deposito deve <strong>essere aperto</strong> entro il <strong>30 maggio 2011</strong>(ricorda che l'apertura avviene al massimo entro <strong>7 giorni lavorativi</strong> da quanto riceviamo tutti i documenti necessari compilati correttamente)</li>
							</ul
						</span>
						<img src="/img/str_promoopenbottom_white.gif"  alt="" />
					</span>
				</div>
			</div>
		</div>-->
		
		<!--fine caso B -->
		
		<div class="filettolarge"></div>
		<div class="leftit">
			<img src="/img/tit_portata_mano.gif"  alt="tieni a portata di mano" />
		</div>
		<div class="gen">
			<ul class="elencodoc">
				<li>Documento d'identit&agrave;</li>
				<li>Codice fiscale</li>
				<li class="last">IBAN del conto da cui effettuare il bonifico per il riconoscimento, se non sei già cliente Webank</li>
			</ul>
		</div>
		<div class="filettolarge"></div>
		
		<?php virtual("/librerie/include/commons/boxeditoriali/pub_aol_001.php"); ?>
	</div>
	</div>
</div>


<!-- OVERLAY CONVENZIONE -->
		<div id="convenzione" class="overlayer" style="display:none">
			<div class="abbandono aol">
				<div class="overlayertitle">
					<img src="/img/tit_wb_prima_procedere.gif"  alt="Prima di procedere" />
					<a href="#" onclick="closePopOverLayer('convenzione')" class="chiudi" id="close"></a>
					
					<span></span>
				</div>
				<div class="overlayerbody">
					<span class="sep"></span>
					<p>Hai ricevuto la <strong>Guida Pratica al conto corrente</strong> e il <strong>Foglio Informativo Webank</strong> da parte del soggetto che ti ha contattato (per esempio, il promotore)? </p>
					<p>Se non li hai ricevuti, puoi aprire Conto Webank, ma non alle condizioni previste dalla convenzione.</p>
					<p>Confermi di aver ricevuto i documenti indicati sopra?</p>
					<div class="filettobutton">
						<a title="si"  href="/connect.php?page=str_aol_pub_wb.php&tpl=tpl_pub_aol_step_1.php" class="greenbutton"><span>si</span></a>
						<a title="no"   href="/connect.php?page=str_aol_pub_wb.php&tpl=tpl_pub_aol_step_0.php" class="greenbutton"><span>no</span></a>
					</div>
				</div>
				
			</div>
		</div>
<!-- FINE OVERLAY OVERLAY CONVENZIONE -->


<script src="//cloudando.vivocha.com/a/webank/api/vivocha.js"></script>
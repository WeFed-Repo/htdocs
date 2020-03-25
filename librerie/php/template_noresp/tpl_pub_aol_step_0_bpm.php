<div id="aolcontainer">
	<div id="aolleft">
		<form id="aol" name="aol" action="" method="post" autocomplete="off">
			<input type="hidden" name="fromPageName" value="wsPUaol0.jsp">
			<div class="aolblock">
				<h3>Intestazione conto</h3>
				<fieldset class="fullwidth lastrow">
					<label><input type="radio" name="num_intestatari" value="1" checked="checked" id="num_intestatari"><span class="optiontext" style="width: 130px">Un intestatario</span></label> 
					<label><input type="radio" name="num_intestatari" value="2" id="num_intestatari"><span class="optiontext" style="width: 130px">Due intestatari</span></label> 
					<label><input type="radio" name="num_intestatari" value="3" id="num_intestatari"><span class="optiontext" style="width: 130px">Tre intestatari</span> </label>
				</fieldset>
			</div>
			<div class="aolblock">
				<h3>Dati anagrafici intestatario</h3>
				<fieldset>
					<span class="label"><span>Nome*</span><span><a onmouseover="showGreenToolTip(this, 'Scrivi il tuo nome per esteso, come è scritto sul documento di identità.'); this.getElementsByTagName('img')[0].setAttribute('src','/img/img_or_tooltip_on.gif');" onmouseout="hideGreenToolTip(); this.getElementsByTagName('img')[0].setAttribute('src','/img/img_or_tooltip_off.gif');" class="imgTooltip"><img src="/img/img_or_tooltip_off.gif"alt=""/></a></span></span>
					<input type="text" name="nome_int1" value="" id="nome_int1">
					<span class="errortext">Compila</span>
				</fieldset>
				<fieldset>
					<span class="label"><span>Cognome*</span><span><a onmouseover="showGreenToolTip(this, 'Scrivi il tuo cognome per esteso, come è scritto sul documento di identità.'); this.getElementsByTagName('img')[0].setAttribute('src','/img/img_or_tooltip_on.gif');" onmouseout="hideGreenToolTip(); this.getElementsByTagName('img')[0].setAttribute('src','/img/img_or_tooltip_off.gif');" class="imgTooltip"><img src="/img/img_or_tooltip_off.gif" alt=""/></a></span></span>
					<input type="text" name="cognome_int1" value="" id="cognome_int1">
					<span class="errortext">Compila</span>
				</fieldset>
				<fieldset style="width: 183px;">
					<span class="label">Data di nascita*</span>
					<div id="tuttaLaData">
						<div class="fieldblock">
							<input type="text" name="gg_nascita_int1" maxlength="2" value="gg" onclick="removeOpt(this,'gg')" onkeyup="removeOpt(this,'gg');nextFocus(this, mm_nascita_int1,'gg', 2)" id="gg_nascita_int1" style="width:25px;" class="opzionale">
							<span class="errortext">Compila</span>
						</div>
						<span class="separator">/</span>
						<div class="fieldblock">
							<input type="text" name="mm_nascita_int1" maxlength="2" value="mm" onclick="removeOpt(this,'mm')" onkeyup="removeOpt(this,'mm');nextFocus(this, aa_nascita_int1,'mm', 2)" id="mm_nascita_int1" style="width:25px;" class="opzionale">
							<span class="errortext">Compila</span>
						</div>
						<span class="separator">/</span>
						<div class="fieldblock">
							<input type="text" name="aa_nascita_int1" maxlength="4" value="aaaa" onclick="removeOpt(this,'aaaa')" id="aa_nascita_int1" style="width:50px;" class="opzionale">
							<span class="errortext">Compila</span>
						</div>
					</div>
					<span class="errortext"></span>
				</fieldset>
				<fieldset style="width: 104px">
					<span class="label">Sesso*</span> <label style="width: 33px;"><input type="radio" name="sesso_int1" value="M" id="sesso_int1"><span
						class="optiontext">M</span> </label> <label style="width: 30px;"><input type="radio" name="sesso_int1" value="F" id="sesso_int1"><span
						class="optiontext">F</span> </label> <span class="errortext">Seleziona</span>
				</fieldset>
				<fieldset>
					<span class="label">Codice fiscale*</span>
					<input type="text" name="cod_fiscale_int1" maxlength="16" value="" id="cod_fiscale_int1">
					<script type="text/javascript" defer="defer">setCounterOnField("cod_fiscale_int1",16);</script>
					<span class="errortext">Compila</span>
				</fieldset>
				<br class="clear">
				<fieldset class="lastrow">
					<span class="label">Email*</span>
					<input type="text" name="mail_int1" value="" id="mail_int1">
					<span class="errortext">Compila</span>
				</fieldset>
				<fieldset class="lastrow">
					<span class="label"><span>Numero cellulare*</span><span><a onmouseover="showGreenToolTip(this, 'Grazie al <strong>Programma Sicurezza</strong>, riceverai SMS <strong>gratuiti</strong> per controllare i movimenti del tuo conto (bonifici, ricariche telefoniche e carte prepagate)'); this.getElementsByTagName('img')[0].setAttribute('src','/img/img_or_tooltip_on.gif');" onmouseout="hideGreenToolTip(); this.getElementsByTagName('img')[0].setAttribute('src','/img/img_or_tooltip_off.gif');" class="imgTooltip"><img src="/img/img_or_tooltip_off.gif" alt=""/></a></span></span>
					<div class="fieldblock">
						<input type="text" name="prefisso_3_int1" maxlength="3" value="" onkeyup="nextFocus(this, telefono_3_int1,'',3)" id="prefisso_3_int1" style="width:50px">
						<span class="errortext">Compila</span>
					</div>
					<div class="fieldblock">
						<input type="text" name="telefono_3_int1" maxlength="7" value="" id="telefono_3_int1" style="width:60px">
						<span class="errortext">Compila</span>
					</div>
					<div class="fieldblock">
						<select name="operatore_int1" id="operatore_int1" style="width:116px" class="inputStep2 altri">
							<option value="">operatore</option>
							<option value="WIND">Wind</option>
							<option value="VODAF">Vodafone</option>
							<option value="TRE">Tre</option>
							<option value="TIM">Tim</option>
							<option value="POSTE">Poste Mobile</option>
							<option value="MTV">Mtv Mobile</option>
							<option value="FASTWEB">Fastweb Mobile</option>
							<option value="DAILY">Daily Telecom Mobile</option>
							<option value="COOP">Coop Voce</option>
							<option value="CONAD">Conad Insim</option>
							<option value="BT">BT Mobile</option>
							<option value="AMOBILE">A-Mobile</option>
							<option value="TELEPASS">Telepass Mobile</option>
							<option value="UNO">Uno Mobile</option>
							<option value="ALTRO">Altro...</option>
						</select>
						<span class="errortext">Seleziona</span>
					</div>
				</fieldset>
			</div>
			<div class="aolblock">
				<h3>Codici per convenzioni e promozioni</h3>
				<fieldset>
					<span class="label">Codice convenzione</span>
					<input type="text" name="cod_prom_conv" maxlength="10" value="opzionale" onclick="removeOpt(this,'opzionale')" id="cod_prom_conv" class="opzionale">
					<span class="errortext">Verifica</span>
				</fieldset>
				<fieldset>
					<span class="label">Codice presentatore</span>
					<input type="text" name="cod_presentatore" maxlength="18" value="opzionale" onclick="removeOpt(this,'opzionale')" id="cod_presentatore" class="opzionale">
					<span class="errortext">Verifica</span>
				</fieldset>
				<fieldset class="lastrow">
					<span class="label">Codice promotore</span>
					<input type="text" name="cod_promotore" maxlength="10" value="opzionale" onclick="removeOpt(this,'opzionale')" id="cod_promotore" class="opzionale">
					<span class="errortext">Verifica</span>
				</fieldset>
			</div>

			<div class="aolblock">
				<h3>Informativa sul trattamento dei dati personali</h3>
				<div class="aolblockwrapper">
					<p class="minitext">Prendi visione dell'informativa; per procedere occorre aprire il documento.</p>
					<ul class="documentlist">
						<li><a href="/doc/nsf/InformativaTrattamentoDatiPersonali.pdf" onclick="fieldEnable('informativaPrivacy', true);setVisitedLink(this);" target="_blank">Informativa sul trattamento dei dati personali</a>*</li>
					</ul>
					<fieldset class="fullwidth check lastrow">
						<label><input type="checkbox" name="informativaPrivacy" value="1" disabled="disabled" id="informativaPrivacy" title="Prima di procedere, occorre prendere visione dell'informativa, aprendo il relativo .pdf">
							<span class="optiontextmini">Dichiaro di aver letto
								attentamente l'informativa disponibile su documento elettronico
								(supporto durevole), di averne compreso e salvato il contenuto.</span>
						</label> <span class="errortext">Prendi visione del documento e seleziona</span>
					</fieldset>
				</div>
				<img class="promobottom" src="/img/str_aol_dacompilarebot.gif">
			</div>
			<div class="filettobutton">
				<a class="greenbutton"
					href="javascript:invia(false);" title="avanti"><span>avanti</span>
				</a>
			</div>
		</form>
	</div>
	<div id="aolright">
		<div class="gen">
			<div id="boxpromocont">
				<div class="boxpromoright  paddbott">
					<a href="javascript:;"><img src="/wbx/res/promConv/img/ban_promosm_aprile2013_top.gif"/></a>
					<div class="promoopen">
						<a href="javascript:;" onmouseover="showCond(this)" onmouseout="hideCond(this)">Verifica le condizioni</a>
						<span class="condizionidetails" style="display:none;">null</span>
						<img src="null"  alt="" />
					</div>
				</div>
				<div class="boxpromoright ">
					<a href="javascript:;"><img src="/wbx/res/promConv/img/ban_promosm_aprile2013_bottom.gif"/></a>
					<div class="promoopen">
						<a href="javascript:;" onmouseover="showCond(this)" onmouseout="hideCond(this)">Verifica le condizioni</a>
						<span class="condizionidetails" style="display:none;">Con la promozione <strong>&#39;Scegli una banca eccezionale&#39;</strong>, hai diritto a:<br /><strong>- tasso di interesse promozionale del 3,50% lordo annuo</strong> sulle linee vincolate con scadenza a <strong>3/6/12 mesi,</strong> attivate entro il <strong>31/07/2013;</strong><br /><strong>- ZERO BOLLI su conto corrente</strong> per l&#39;anno <strong>2013 </strong>per tutti coloro che, entro il <strong>31/07/2013</strong>, avranno un primo movimento di accredito dello stipendio o pensione.<br /><strong>- ZERO BOLLI</strong> per strumenti finanziari e altri prodotti finanziari su <strong>deposito titoli</strong>, per l&#39;anno <strong>2013</strong> a tutti coloro che:<br />- entro il <strong>31/07/2013</strong>, avranno attivato il servizio Portafoglio Extra (servizio prestito titoli a favore a favore di Bpm) da mantenere attivo per tutto il 2013;<br />- alla fine di ogni Periodo di Riferimento e al 31/12/2013, avranno una <strong>Giacenza Complessiva di almeno 10.000 euro tra Titoli e/o Fondi.</strong><br /><br /></span>
						<img src="/wbx/res/promConv/img/str_promoopenbottom_white.gif"  alt="" />
					</div>
				</div>
			</div>
		</div>
		<div class="filettolarge"></div>
		<div class="leftit"><img src="/img/tit_portata_mano.gif"  alt="tieni a portata di mano" /></div>
		<div class="gen">
			<ul class="elencodoc">
				<li>Documento d'identit&agrave;</li>
				<li>Codice fiscale</li>
				<li class="last">L'IBAN di un conto corrente intestato a te: se non sei già cliente Bpm, ti servirà per effettuare l'identificazione tramite bonifico</li>
			</ul>
		</div>
		<div class="filettolarge"></div>
		<div class="leftit">
			<a href="javascript:;" onclick="switchAolDoclist(this);"><img src="/img/tit_documentazione_opened.gif"  alt="Documentazione" /></a>
		</div>
		<div id="aoldoclist">
			<ul>
				<li><a href="#" onclick="setVisitedLink(this);" target="blank">Foglio Informativo</a></li>
				<li><a href="#" onclick="setVisitedLink(this);" target="blank">Condizioni generali</a></li>
				<li><a href="#" onclick="setVisitedLink(this);" target="blank">Modulo richiesta</a></li>
				<li><a href="#" onclick="setVisitedLink(this);" target="blank">Documento di sintesi</a></li>
				<li><a href="#" onclick="setVisitedLink(this);" target="blank">Informativa precontrattuale servizi a distanza</a></li>
				<li><a href="#" onclick="setVisitedLink(this);" target="blank">Principali diritti del cliente</a></li>
				<li><a href="#" onclick="setVisitedLink(this);" target="blank">Guida pratica al conto</a></li>
				<li><a href="#" onclick="setVisitedLink(this);" target="blank">Guida pratica e modulo per ricorrere all'Arbitro</a></li>
				<li><a href="#" onclick="setVisitedLink(this);" target="blank">Modulo di richiesta Carta Je@ns</a></li>
				<li><a href="#" onclick="setVisitedLink(this);" target="blank">Foglio informativo Carta Je@ns</a></li>
				
			</ul>
			<h4>Per  apertura deposito titoli</h4>
			<ul>
				<li><a href="#" onclick="setVisitedLink(this);" target="blank">Richiesta deposito titoli</a></li>
				<li><a href="#" onclick="setVisitedLink(this);" target="blank">Condizioni generali</a></li>
				<li><a href="#" onclick="setVisitedLink(this);" target="blank">Documento di sintesi</a></li>
				<li><a href="#" onclick="setVisitedLink(this);" target="blank">Informativa Mifid</a></li>
				<li><a href="#" onclick="setVisitedLink(this);" target="blank">Guida Camera di Conciliazione della CONSOB</a></li>
			</ul>
		</div>
	</div>
</div>

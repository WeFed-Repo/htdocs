<script type="text/javascript" src="/wscmn/js/ret/pdfobject.js"></script>
<h2>Deposito titoli</h2>
<div class="navfrontPage outerTab">
	<div class="innerTab">
		<ul>
			<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_priv_scopri_deposito.php&amp;liv1=FI&responsive=y&liv0=3&liv1=4&liv2=0&liv3=2">Scopri</a><span class="new"></span></li>
			<li class="on"><a href="#">Apri</a><span class="new"></span></li>
		</ul>
	</div>
	<div class="separator"></div>
</div>
<div id="esitoDt" style="display:none">
	<section class="boxesitoWrap">
	<div class="boxesito positivo">
		<div class="text">
			<div class="row">
				<div class="col-xs-12">
					<strong>La richiesta di apertura conto &egrave; stata inviata</strong>
					<ul>
						<li>Stampa e firma la documentazione contrattuale</li>
						<li>
							Invia la documentazione, insieme alla copia di un documento di identit&agrave; valido all'indirizzo:<br>
							Webank,<br>
							c/o Banca Popolare di Milano<br>
							via Massaua 4<br>
							20146 Milano
						</li>
					</ul>
					<p>Se il conto corrente &grave; cointestato, lo sar&agrave; anche il deposito titoli.<br>
					In questo caso, consideriamo tutte le decisioni legate al deposito titoli congiuntamente da tutti gli intestatari.</p>	
					<p>Il deposito titoli sar&agrave; aperto dopo che avremo ricevuto tutta la documentazione contrattuale</p>
				</div>
				<div class="form-group btnWrapper">
					<div class="btn-align-right">
						<a type="button" class="btn btn-primary" id="">stampa tutti i documenti</a>
					</div>
					<br class="clear">
				</div>
			</div>
		</div>
	</div>
</section>

</div>
<div class="panel-nofill boxrichiesta">
	<div class="panel-group panel-step unclosable" id="accordionDepStep1" role="tablist" aria-multiselectable="true">
		<div class="panel panel-default panel-selected">
			<div class="panel-heading" role="tab" id="carteStep1">
				<h4 class="panel-title">
					<span class="number-step"><span class="number">1</span><i class="icon icon-2x icon icon-spunta"></i></span>
					<a class="" data-toggle="" href="#collapseCarteStep1" aria-expanded="true" aria-controls="collapseCarteStep1">
						Caratteristiche deposito titoli<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i><i class="icon icon-edit_fill editButton"></i>
					</a>
				</h4>
			</div>
			<div class="border-panel-collapse">
				<div id="collapseCarteStep1" class="panel-collapse collapse in stepToggle" role="tabpanel" aria-labelledby="carteStep1">
					<div class="panel-body">
						<div id="datiInput">
							<form id="formrichiesta1" class="formGenerico">
								
								<h4>1. Scegli il conto corrente</h4>
								<div class="form-group">
									<!-- UNICA RIGA CON CAMPO-->
									<div class="row">
										<div class="col-sm-12">
											<label class="control-label-output">Conto corrente</label>
											<span class="output">CC 01099 0000049199 </span>
										</div>
									</div>
								</div>
								<hr>
								
								<h4>2. Scegli il regime fiscale</h4>
								<p>Ai sensi dell'art.6 del D. Lgs. 21 novembre 1997 n. 461, e successive modifiche, il Cliente pu&ograve; esprimere la sua scelta per l'applicazione dell'imposizione sostitutiva sulle plusvalenze, differenziali e/o proventi dei Servizi Amministrati.</p>
								<div class="form-group">
									<div class="row">
										<div class="col-sm-12">
											<label class="control-label">Modalit&agrave; di consegna</label>
											<div class="row">
												<div class="col-sm-12">
													<div class="radio inline">
														<label class="textWrapper">
															<input type="radio" name="ct_regime" id="" checked>
															<span class="text"><strong>Regime fiscale amministrativo (consigliato).</strong><br>
																Il cliente che sceglie questo regime delega alla banca il calcolo dell'imposta sostitutiva sulle plusvalenze realizzate (Capital Gain). Questo regime renderà più semplice la compilazione dei redditi. Il cliente dichiara di essere a conoscenza che la scelta effettuata sul regime fiscale verrà applicata anche all'operatività in fondi Comuni di Investimento.
															</span>
														</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-12">
													<div class="radio inline">
														<label class="textWrapper">
															<input type="radio" name="ct_regime" id="">
															<span class="text"><strong>Regime fiscale dichiarativo</strong><br>
																l cliente dichiara di essere a conoscenza degli obblighi personali di natura dichiarativa in materia fiscale e solleva qualsiasi responsabilit&agrave; al riguardo. L'intermediario non applicher&agrave; nessuna ritenuta sul Capital Gain, il cliente sarà tenuto al regime ordinario di tassazione e dovr&agrave;, quindi, adempiere agli obblighi impositivi. Scegliendo il regime fiscale dichiarativo, il cliente rinuncia espressamente all'applicazione del regime fiscale amministrativo sui fondi.
															</span>
														</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div> 
								<hr>
								<h4>3. Scegli il profilo commissionale</h4>
								<div class="form-group">
									<div id="errorTab" class="requiredField">
									<table cellspacing="0" cellpadding="0" border="0" class="table-sceltaprofilo hidden-xs wrapper-sel">
										<tbody>
											<tr>
												<td class="bgAtt ch-profilo" width="50%">
													<div>
														<span class="ico-fix"></span>
														<span><input type="radio" name="ng_commissioni" value="1" onclick="" id="id_commissioni">Profilo fisso</span>
													</div>
												</td>
												<td width="50%" class="ch-profilo">
													<div>
														<span class="ico-var"></span>
														<span><input type="radio" name="ng_commissioni" value="1" onclick="" id="id_commissioni">Profilo variabile</span>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
									</div>
									<div class="formGenerico visible-xs wrapper-sel">
										<select class="form-control selectProfilo" name="">
											<option value="">Profilo Fisso</option>
											<option value>Profilo Variabile</option>
										</select>
									</div>
									<div class="headerContainerNoBootS">
										<div class="tableContainerNoBootS">
											<table id="ProfiloFis" cellspacing="0" cellpadding="0" border="0" class="table-tipoprofilo">
												<thead>
													<tr>
														<th colspan="2" class="left">Commissioni mese precedente</th>
														<th>da 0<br>a 500 &euro;</th>
														<th>da 500<br>a 1000 &euro;</th>
														<th>da 1000<br>a 1500 &euro;</th>
														<th>da 1500<br>a 2000 &euro;</th>
														<th>oltre i 2000 &euro;</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td colspan="2" rowspan="5" class="left"><strong>Livello</strong></td>
														<td class="bgCosti color1" rowspan="5"><span class="circle">1</span></td>
														<td class="empty">&nbsp;</td>
														<td class="empty">&nbsp;</td>
														<td class="empty">&nbsp;</td>
														<td class="empty">&nbsp;</td>
													</tr>
													<tr>
														<td rowspan="4" class="bgCosti color2"><span class="circle">2</span></td>
														<td class="empty">&nbsp;</td>
														<td class="empty">&nbsp;</td>
														<td class="empty">&nbsp;</td>
													</tr>
													<tr>
														<td rowspan="3" class="bgCosti color3"><span class="circle">3</span></td>
														<td class="empty">&nbsp;</td>
														<td class="empty">&nbsp;</td>
													</tr>
													<tr>
														<td rowspan="2" class="bgCosti color4"><span class="circle">4</span></td>
														<td class="empty">&nbsp;</td>
													</tr>
													<tr>
														<td class="bgCosti color5"><span class="circle">5</span></td>
													</tr>
													<tr>
														<td class="td-accordion"><a data-toggle="collapse" href="#collapserow1" aria-expanded="false" aria-controls="collapse" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i></a></td>
														<td class="no-border-left"><strong>Azioni Italia, Azioni Europa*,
															Obbligazioni ETF e SEDEX</strong></td>
															<td class="bgCosti color1">12 &euro;</td>
															<td class="bgCosti color2">8 &euro;</td>
															<td class="bgCosti color3">6 &euro;</td>
															<td class="bgCosti color4">4 &euro;</td>
															<td class="bgCosti color5">2,75 &euro;</td>
														</tr>
														<tr id="collapserow1" class="collapse" aria-expanded="true" style="">
															<td colspan="7"><p>
																<strong>Azionario Italia</strong> (MTA - TAH, AIM, ETF, PLUS, azionario Euro TLX)<br>
																<strong>Azionario Europa*</strong> (Germania Xetra, Euronext Francia - Olanda - Belgio, Portogallo, Ibex Spagna)<br><strong>Obbligazionario</strong> (EUROTLX, MOT, ExtraMOT, Hi - MTF, Akros IS, Obbligazioni OTC)<br>
																<strong>Certificati e CW</strong> (Sedex)
															</p>
														</td>
													</tr>
													<tr>
														<td class="td-accordion"><a data-toggle="collapse" href="#collapserow2" aria-expanded="false" aria-controls="collapse" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i></a></td>
														<td class="no-border-left"><strong>Azioni USA</strong></td>
														<td class="bgCosti color1">15,9 &#36;</td>
														<td class="bgCosti color2">12,9 &#36;</td>
														<td class="bgCosti color3">9,9 &#36;</td>
														<td class="bgCosti color4">6,9 &#36;</td>
														<td class="bgCosti color5">6,9 &#36;</td>
													</tr>
													<tr id="collapserow2" class="collapse" aria-expanded="true" style="">
														<td colspan="7"><p>Nasdaq, Nyse</p>
														</td>
													</tr>
													<tr>	
														<td class="td-accordion"><a data-toggle="collapse" href="#collapserow3" aria-expanded="false" aria-controls="collapse" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i></a></td>
														<td class="no-border-left"><strong>Azioni Londra</strong></td>
														<td class="bgCosti color1">12,5 &pound;</td>
														<td class="bgCosti color2">12,5 &pound;</td>
														<td class="bgCosti color3">10 &pound;</td>
														<td class="bgCosti color4">10 &pound;</td>
														<td class="bgCosti color5">7,5 &pound;</td>
													</tr>
													<tr id="collapserow3" class="collapse" aria-expanded="true" style="">
														<td colspan="7"><p>London Stock Exchange</p>
														</td>
													</tr>
													<tr>
														<td class="td-accordion"><a data-toggle="collapse" href="#collapserow4" aria-expanded="false" aria-controls="collapse" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i></a></td>
														<td class="no-border-left"><strong>Derivati A</strong></td>
														<td class="bgCosti color1">9 &euro;</td>
														<td class="bgCosti color2">5,9 &euro;</td>
														<td class="bgCosti color3">5,9 &euro;</td>
														<td class="bgCosti color4">3 &euro;</td>
														<td class="bgCosti color5">3 &euro;</td>
													</tr>
													<tr id="collapserow4" class="collapse" aria-expanded="true" style="">
														<td colspan="7"><p><strong>IDEM</strong> (FTSE MIB Future)<br>
															<strong>EUREX</strong> (Dax Future, Bund, Bobl ,Schatz, Buxl, BTP Long - Short -<br>Mid Term Futures, OAT Futures)<br>
															<strong>CME</strong> (Nikkei 225 Dollar based, Energy Futures,<br>5/10/30 Year Treasury Futures, Agricultural Futures (1), Metal Futures)<br>
															<strong>eCBOT</strong> (Metal Futures)<br>
															<strong>LIFFE</strong> (FTSE 100 Index Futures, Long Gilt Futures)<br><br>
															(1) Per gli strumenti Agricultural Futures &egrave; prevista una commissione minima pari a 5,90 Euro per lotto eseguito.</p>
														</td>
													</tr>
													<tr>
														<td class="td-accordion"><a data-toggle="collapse" href="#collapserow5" aria-expanded="false" aria-controls="collapse" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i></a></td>
														<td class="no-border-left"><strong>Derivati B</strong></td>
														<td class="bgCosti color1">5,9 &euro;</td>
														<td class="bgCosti color2">3,9 &euro;</td>
														<td class="bgCosti color3">3,9 &euro;</td>
														<td class="bgCosti color4">3 &euro;</td>
														<td class="bgCosti color5">3 &euro;</td>
													</tr>
													<tr id="collapserow5" class="collapse" aria-expanded="true" style="">
														<td colspan="7"><p><strong>IDEM</strong> (FTSE MIB Options, Opzioni su Azioni)<br>
															<strong>EUREX</strong> (DJ Eurostoxx 50 Futures, DjStoxx50, DJSettoriali, DJTitan30, Option Dax -  Option Dj, EuroStoxx 50 - Bund - Bobl - Schatz)<br>
															<strong>CME</strong> ( Eurodollaro 3 mesi, Futures, E-mini nasdaq100 - E mini S&amp;P500 Futures, Mini Dow Jones Futures, E-MiniS&amp;P MID 400, E-MiniS&amp;P SMCAP 600, Euro/Dollaro FX � E-mini, Euro/Dollaro FX Futures-Futures su Cambi:British Pound, Canadian Dollar, Australian Dollar, Swiss Franc)<br>
															<strong>LIFFE</strong> (AC40 Futures, AEX Futures)</p>

														</td>
													</tr>
													<tr>
														<td class="td-accordion"><a data-toggle="collapse" href="#collapserow6" aria-expanded="false" aria-controls="collapse" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i></a></td>
														<td class="no-border-left"><strong>Derivati C</strong></td>
														<td class="bgCosti color1">3,9 &euro;</td>
														<td class="bgCosti color2">1,9 &euro;</td>
														<td class="bgCosti color3">1,9 &euro;</td>
														<td class="bgCosti color4">1,9 &euro;</td>
														<td class="bgCosti color5">1,9 &euro;</td>
													</tr>
													<tr id="collapserow6" class="collapse" aria-expanded="true" style="">
														<td colspan="7"><p><strong>IDEM</strong> (MiniFTSE MIB Future, MiniFTSE 100 Future, Stock Future)</p></p></td>
													</tr>
													<tr>
														<td colspan="7">
															* Su ciascun ordine esguito sui mercati azionari europei sar&agrave; applicata una maggiorazione di 9 euro per spese e diritti fissi.
															Il livello commissionale valido per ciascun mese dipende dalle commissioni generate nel corso del mese solare precedente.
														</td>
													</tr>
												</tbody>
											</table>
											<table id="ProfiloVar" cellspacing="0" cellpadding="0" border="0" class="table-tipoprofilo" style="display:none">
												<thead>
													<tr>
														<th colspan="2" class="left">Commissioni mese precedente</th>
														<th>da 0<br>a 500 &euro;</th>
														<th>da 500<br>a 1000 &euro;</th>
														<th>da 1000<br>a 1500 &euro;</th>
														<th>da 1500<br>a 2000 &euro;</th>
														<th>oltre i 2000 &euro;</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td colspan="2" rowspan="5" class="left"><strong>Livello</strong></td>
														<td class="bgCosti color1" rowspan="5"><span class="circle">1</span></td>
														<td class="empty">&nbsp;</td>
														<td class="empty">&nbsp;</td>
														<td class="empty">&nbsp;</td>
														<td class="empty">&nbsp;</td>
													</tr>
													<tr>
														<td rowspan="4" class="bgCosti color2"><span class="circle">2</span></td>
														<td class="empty">&nbsp;</td>
														<td class="empty">&nbsp;</td>
														<td class="empty">&nbsp;</td>
													</tr>
													<tr>
														<td rowspan="3" class="bgCosti color3"><span class="circle">3</span></td>
														<td class="empty">&nbsp;</td>
														<td class="empty">&nbsp;</td>
													</tr>
													<tr>
														<td rowspan="2" class="bgCosti color4"><span class="circle">4</span></td>
														<td class="empty">&nbsp;</td>
													</tr>
													<tr>
														<td class="bgCosti color5"><span class="circle">5</span></td>
													</tr>
													<tr>
														<td class="td-accordion"><a data-toggle="collapse" href="#collapserow1b" aria-expanded="false" aria-controls="collapse" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i></a></td>
														<td class="no-border-left"><strong>Azioni Italia, Azioni Europa*,
															Obbligazioni ETF e SEDEX</strong></td>
															<td class="bgCosti color1">0,19%<br><span class="fontMin">Min 2,75 €<br>Max 18,9 &euro;</td>
															<td class="bgCosti color2">8 &euro;</td>
															<td class="bgCosti color3">6 &euro;</td>
															<td class="bgCosti color4">4 &euro;</td>
															<td class="bgCosti color5">2,75 &euro;</td>
														</tr>
														<tr id="collapserow1b" class="collapse" aria-expanded="true" style="">
															<td colspan="7"><p>
																<strong>Azionario Italia</strong> (MTA - TAH, AIM, ETF, PLUS, azionario Euro TLX)<br>
																<strong>Azionario Europa*</strong> (Germania Xetra, Euronext Francia - Olanda - Belgio, Portogallo, Ibex Spagna)<br><strong>Obbligazionario</strong> (EUROTLX, MOT, ExtraMOT, Hi - MTF, Akros IS, Obbligazioni OTC)<br>
																<strong>Certificati e CW</strong> (Sedex)
															</p>
														</td>
													</tr>
													<tr>
														<td class="td-accordion"><a data-toggle="collapse" href="#collapserow2b" aria-expanded="false" aria-controls="collapse" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i></a></td>
														<td class="no-border-left"><strong>Azioni USA</strong></td>
														<td class="bgCosti color1">15,9 &#36;</td>
														<td class="bgCosti color2">12,9 &#36;</td>
														<td class="bgCosti color3">9,9 &#36;</td>
														<td class="bgCosti color4">6,9 &#36;</td>
														<td class="bgCosti color5">6,9 &#36;</td>
													</tr>
													<tr id="collapserow2b" class="collapse" aria-expanded="true" style="">
														<td colspan="7"><p>Nasdaq, Nyse</p>
														</td>
													</tr>
													<tr>	
														<td class="td-accordion"><a data-toggle="collapse" href="#collapserow3b" aria-expanded="false" aria-controls="collapse" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i></a></td>
														<td class="no-border-left"><strong>Azioni Londra</strong></td>
														<td class="bgCosti color1">12,5 &pound;</td>
														<td class="bgCosti color2">12,5 &pound;</td>
														<td class="bgCosti color3">10 &pound;</td>
														<td class="bgCosti color4">10 &pound;</td>
														<td class="bgCosti color5">7,5 &pound;</td>
													</tr>
													<tr id="collapserow3b" class="collapse" aria-expanded="true" style="">
														<td colspan="7"><p>London Stock Exchange</p>
														</td>
													</tr>
													<tr>
														<td class="td-accordion"><a data-toggle="collapse" href="#collapserow4b" aria-expanded="false" aria-controls="collapse" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i></a></td>
														<td class="no-border-left"><strong>Derivati A</strong></td>
														<td class="bgCosti color1">9 &euro;</td>
														<td class="bgCosti color2">5,9 &euro;</td>
														<td class="bgCosti color3">5,9 &euro;</td>
														<td class="bgCosti color4">3 &euro;</td>
														<td class="bgCosti color5">3 &euro;</td>
													</tr>
													<tr id="collapserow4b" class="collapse" aria-expanded="true" style="">
														<td colspan="7"><p><strong>IDEM</strong> (FTSE MIB Future)<br>
															<strong>EUREX</strong> (Dax Future, Bund, Bobl ,Schatz, Buxl, BTP Long - Short -<br>Mid Term Futures, OAT Futures)<br>
															<strong>CME</strong> (Nikkei 225 Dollar based, Energy Futures,<br>5/10/30 Year Treasury Futures, Agricultural Futures (1), Metal Futures)<br>
															<strong>eCBOT</strong> (Metal Futures)<br>
															<strong>LIFFE</strong> (FTSE 100 Index Futures, Long Gilt Futures)<br><br>
															(1) Per gli strumenti Agricultural Futures &egrave; prevista una commissione minima pari a 5,90 Euro per lotto eseguito.</p>
														</td>
													</tr>
													<tr>
														<td class="td-accordion"><a data-toggle="collapse" href="#collapserow5b" aria-expanded="false" aria-controls="collapse" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i></a></td>
														<td class="no-border-left"><strong>Derivati B</strong></td>
														<td class="bgCosti color1">5,9 &euro;</td>
														<td class="bgCosti color2">3,9 &euro;</td>
														<td class="bgCosti color3">3,9 &euro;</td>
														<td class="bgCosti color4">3 &euro;</td>
														<td class="bgCosti color5">3 &euro;</td>
													</tr>
													<tr id="collapserow5b" class="collapse" aria-expanded="true" style="">
														<td colspan="7"><p><strong>IDEM</strong> (FTSE MIB Options, Opzioni su Azioni)<br>
															<strong>EUREX</strong> (DJ Eurostoxx 50 Futures, DjStoxx50, DJSettoriali, DJTitan30, Option Dax -  Option Dj, EuroStoxx 50 - Bund - Bobl - Schatz)<br>
															<strong>CME</strong> ( Eurodollaro 3 mesi, Futures, E-mini nasdaq100 - E mini S&amp;P500 Futures, Mini Dow Jones Futures, E-MiniS&amp;P MID 400, E-MiniS&amp;P SMCAP 600, Euro/Dollaro FX � E-mini, Euro/Dollaro FX Futures-Futures su Cambi:British Pound, Canadian Dollar, Australian Dollar, Swiss Franc)<br>
															<strong>LIFFE</strong> (AC40 Futures, AEX Futures)</p>

														</td>
													</tr>
													<tr>
														<td class="td-accordion"><a data-toggle="collapse" href="#collapserow6b" aria-expanded="false" aria-controls="collapse" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i></a></td>
														<td class="no-border-left"><strong>Derivati C</strong></td>
														<td class="bgCosti color1">3,9 &euro;</td>
														<td class="bgCosti color2">1,9 &euro;</td>
														<td class="bgCosti color3">1,9 &euro;</td>
														<td class="bgCosti color4">1,9 &euro;</td>
														<td class="bgCosti color5">1,9 &euro;</td>
													</tr>
													<tr id="collapserow6b" class="collapse" aria-expanded="true" style="">
														<td colspan="7"><p><strong>IDEM</strong> (MiniFTSE MIB Future, MiniFTSE 100 Future, Stock Future)</p></p></td>
													</tr>
													<tr>
														<td colspan="7">
															* Su ciascun ordine esguito sui mercati azionari europei sar&agrave; applicata una maggiorazione di 9 euro per spese e diritti fissi.
															Il livello commissionale valido per ciascun mese dipende dalle commissioni generate nel corso del mese solare precedente.
														</td>
													</tr>
												</tbody>
											</table>
											<p class="note">Per le condizioni economiche complete e le principali condizioni contrattuali fare riferimento al Documento di Sintesi ed ai Fogli Informativi</p>
										</div>
									</div>
								</div>
								<hr>
								
								<h4>4. Contabili ed estratto conto online</h4>
								<div class="form-group">
									<p><strong>In automatico e gratuitamente</strong> riceverai direttamente online le <strong>contabili e gli estratti conto</strong>. Nel caso volessi ricevere le contabili cartacee, potrai farne richiesta al percorso:
										Sportello > Il mio conto > Rendicontazione > estratto conto e contabili > gestione servizio.
									</p>
								</div>
								<hr>
								
								<h4>5. Autorizza la comunicazione a distanza</h4>
								<div class="form-group">
									<p>Per poter comunicare con te attraverso <strong>tecniche a distanza</strong> quali ad esempio la posta elettronica (email) o il telefono, necessitiamo del tuo consenso. Al riguardo, ti informiamo che l'operativit&agrave; a distanza caratterizza tutti i servizi Webank. Pertanto, in mancanza del tuo consenso, <strong>non potremo procedere all'apertura del deposito titoli.</strong></p>
									<div class="row">
										<div class="col-sm-12" id="consensoWrapper">
											<div class="row">
												<div class="col-sm-6">
													<div class="radio inline">
														<label class="textWrapper">
															<input type="radio" name="rbdist" id=""  value="0">
															<span class="text">Do il consenso</span>
														</label>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="radio inline">
														<label class="textWrapper txthelp">
															<input class="closeable" type="radio" name="rbdist" id="rbdist_1" value="1"  data-toggle="tooltip" data-title="Se non dai il consenso alle tecniche di comunicazione a distanza, non &egrave; possibile procedere all'apertura del deposito titoli.">
															<span class="text">Non do il consenso</span>
														</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<hr>
								
								<h4>6. Autocertificazione cittadini residenti in USA</h4>
								<h4>Iole Tolve</h4>
								<div class="form-group">
									<div class="row">
										<div class="col-sm-12 requiredField" id="inputUsa1">
											<label class="control-label closeable" </li></ul>Sei una US PERSON?<a href="#1" class="no-underline btn-icon"><i class="icon icon-info_fill marginLeft_10  icon-20 closeable" data-toggle="tooltip" data-title="Si definisce &ldquo;US Person &rdquo;(Persona Statunitense):<ul><li>un cittadino statunitense o una persona fisica residente negli Stati Uniti,</li>
												<li>una societ&agrave; di persone o altra entit&agrave; fiscalmente trasparente ovvero una societ&agrave; di capitali organizzata negli Stati Uniti o in base alla legislazione degli Stati Uniti o di ogni suo Stato,</li>
												<li>un trust se 1) un tribunale negli Stati Uniti, conformemente al diritto applicabile, ha competenza a emettere un'ordinanza o una sentenza in merito sostanzialmente a tutte le questioni riguardanti l'amministrazione del trust, e 2) una o pi&ugrave; persone statunitensi hanno l'autorit&agrave; di controllare tutte le decisioni sostanziali del trust, o di un'eredit&agrave; giacente di un de cuius che è cittadino statunitense o residente negli Stati Uniti."></i></a></label>
												<p>Dichiarando di essere US PERSON, alle rendite finanziarie derivanti da operazioni di titoli di emittenti in USA verr&agrave; applicato solo il regime di tassazione americano.
													In assenza di tale autocertificazione tali rendite saranno sottoposte a tassazione italiana e americana.</p>
													<div class="row">
														<div class="col-sm-3">
															<div class="radio inline">
																<label class="textWrapper">
																	<input type="radio" name="usPerson_int1" id="usPerson_int1_y" value="1">
																	<span class="text">Si</span>
																</label>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="radio inline">
																<label class="textWrapper">
																	<input type="radio" name="usPerson_int1" id="usPerson_int1_n" value="2">
																	<span class="text">No</span>
																</label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<hr>

										<h4>7. Adempimenti normativa Fatca e Crs</h4>
										<div class="form-group">
											<p>Con l'entrata in vigore della normativa FATCA (Foreign Account Tax Compliance Act) e CRS (Common Reporting Standard), il Governo italiano si &egrave; impegnato a garantire la compliance fiscale internazionale mediante l'adesione allo scambio automatico di informazioni fra le amministrazioni tributarie dei rispettivi Paesi aderenti.
												Alla luce di tali normative, ti chiediamo di <a href="javascript:;" onclick="$('#boxFatca').slideDown();">dichiarare il/i tuo/tuoi Paese/i di residenza fiscale.</a></p>
												<div  id="boxFatca" style="display:none">	
													<div class="box-generico-border pad_top_0">
														<h4>ADEMPIMENTI NORMATIVA FATCA E CRS <a class="close btn-icon flRight"  aria-label="Close" onclick="$('#boxFatca').slideUp();"><i class="icon icon-alert_error_fill icon-2x"></i></a></h4>
														<div class="box-generico-text">
															<strong>Residenza fiscale in Italia</strong>
															<p>Le persone fisiche hanno residenza fiscale in Italia se:</p>
															<ul><li>sono iscritte, per la maggior parte del periodo di imposta, nelle anagrafi della popolazione residente anche se domiciliano all'estero,</li></ul>
															<p>oppure:</p>
															<ul><li>hanno nel territorio dello stato italiano il domicilio o la residenza ai sensi del codice civile (Art. 2, co. 2, D.P.R. 917/1986).</li></ul>
															<p>Sono invece fiscalmente non residenti coloro che, per oltre la met&agrave; del periodo di imposta (183 giorni - 184 giorni negli anni bisestili), hanno residenza anagrafica estera (iscrizione all'Aire) e hanno altres&igrave; il domicilio all'estero (interessi economici e vitali oltrefrontiera). Mancando quest'ultima condizione, anche chi è iscritto all'Aire si considera residente fiscalmente in Italia.</p>
														</div>
														<div class="box-generico-text">
															<strong>Residenza fiscale estera</strong>
															<p>Ogni giurisdizione definisce autonomamente i criteri per l'attribuzione della residenza fiscale ad un soggetto. Il Paese nel quale il soggetto è tenuto a pagare le imposte sui redditi, in virt&ugrave; della propria residenza, domicilio o altro, &egrave; verosimilmente il Paese nel quale tale soggetto ha la propria residenza fiscale. Tuttavia, alcune circostanze (ad es. lavorare all'estero) potrebbero implicare la residenza fiscale di un soggetto in più Paesi, nello stesso intervallo temporale (ad. es. anno civile). In tal caso, al fine di risolvere tali casistiche di doppia residenza fiscale, le Convenzioni contro la doppia imposizione contengono le cosiddette &quot;tiebreaker rules&quot;, alle quali il soggetto pu&ograve; fare riferimento per stabilire la propria residenza fiscale.<br>
																Per ulteriori informazioni relative alla propria residenza fiscale, si prega di contattare il proprio consulente fiscale o verificare le informazioni disponibili sul <a href="#">Portale Web dell'OECD</a>.<br>
																Alla luce di quanto sopra, se risulti essere fiscalmente residente anche in un altro Paese oltre l'Italia, ti chiediamo di indicarlo nell'apposito campo.
															</p>
														</div>
														<div class="box-generico-text">
																<h4>Iole Tolve</h4>
																<div class="form-group">
																	<div class="row">
																		<div class="col-sm-12">
																			<label class="control-label txthelp closeable" data-toggle="tooltip" data-title="Ai fini delle imposte sui redditi, si considerano residenti le persone fisiche che per la maggior parte del periodo d'imposta sono iscritte nelle anagrafi della popolazione residente anche se domiciliano all'estero, oppure le persone fisiche che hanno nel territorio dello Stato il proprio domicilio o residenza ai sensi del codice civile (Art. 2, co. 2, D.P.R. 917/1986).<br><strong>É possibile aprire Conto Webank solo se il Paese di residenza fiscale è l'Italia.</strong>">Paese di residenza fiscale</label>
																			<span class="output">Italia</span>
																		</div>
																	</div>
																</div>
																<div class="form-group">
																	<div class="row">
																		<div class="col-sm-12">
																			<label class="control-label txthelp closeable" data-toggle="tooltip" data-title="Ai fini delle imposte sui redditi, si considerano residenti le persone fisiche che per la maggior parte del periodo d'imposta sono iscritte nelle anagrafi della popolazione residente anche se domiciliano all'estero, oppure le persone fisiche che hanno nel territorio dello Stato il proprio domicilio o residenza ai sensi del codice civile (Art. 2, co. 2, D.P.R. 917/1986).<br><strong>É possibile aprire Conto Webank solo se il Paese di residenza fiscale è l'Italia.</strong>">Paese di residenza fiscale</label>
																			<span class="output">Italia</span>
																		</div>
																	</div>
																</div>
																<div class="fatcaintestatario form-group" id="fatca1">
																	<div class="fatcaFieldWrapper">
																		<div class="fatcaField">
																			<div class="form-group">	
																				<div class="row">
																					<div class="col-sm-6">
																						<label class="control-label txthelp closeable" data-toggle="tooltip" data-title="Il regime fiscale applicato sarà quello dell'Italia. Questa informazione è rilevante solo ai fini FATCA e CRS. Se il cliente dichiara un Paese estero come «Altro Paese di residenza fiscale» la banca è tenuta, ai sensi delle normative FATCA e CRS, a segnalarlo con frequenza annuale all'Agenzia delle Entrate" data-original-title="" title="">
																							<span class="labelCounter">Secondo</span> paese di residenza fiscale
																						</label>

																						<select name="residenzaFiscale2_int1" id="selectfacta_int1_id1" class="form-control">
																							<option value="">seleziona</option>

																							<option value="238|ABU DHABI|X">ABU DHABI</option>

																							<option value="2|AFGHANISTAN|X">AFGHANISTAN</option>

																							<option value="239|AJMAN|X">AJMAN</option>

																							<option value="87|ALBANIA|X">ALBANIA</option>

																							<option value="3|ALGERIA|X">ALGERIA</option>

																							<option value="4|ANDORRA|S">ANDORRA</option>

																							<option value="133|ANGOLA|X">ANGOLA</option>

																							<option value="209|ANGUILLA|X">ANGUILLA</option>

																							<option value="180|ANTARTIDE|X">ANTARTIDE</option>

																							<option value="197|ANTIGUA E BARBUDA|X">ANTIGUA E BARBUDA</option>

																							<option value="5|ARABIA SAUDITA|S">ARABIA SAUDITA</option>

																							<option value="6|ARGENTINA|S">ARGENTINA</option>

																							<option value="266|ARMENIA|X">ARMENIA</option>

																							<option value="212|ARUBA|X">ARUBA</option>

																							<option value="7|AUSTRALIA|S">AUSTRALIA</option>

																							<option value="8|AUSTRIA|S">AUSTRIA</option>

																							<option value="268|AZERBAIGIAN|X">AZERBAIGIAN</option>

																							<option value="160|BAHAMAS|X">BAHAMAS</option>

																							<option value="169|BAHRAIN|X">BAHRAIN</option>

																							<option value="130|BANGLADESH|X">BANGLADESH</option>

																							<option value="118|BARBADOS|X">BARBADOS</option>

																							<option value="9|BELGIO|S">BELGIO</option>

																							<option value="198|BELIZE|S">BELIZE</option>

																							<option value="158|BENIN|X">BENIN</option>

																							<option value="207|BERMUDA|N">BERMUDA</option>

																							<option value="97|BHUTAN|X">BHUTAN</option>

																							<option value="264|BIELORUSSIA|X">BIELORUSSIA</option>

																							<option value="10|BOLIVIA|X">BOLIVIA</option>

																							<option value="295|BONAIRE, SAINT ESTATIUS, SABA|X">BONAIRE, SAINT ESTATIUS, SABA</option>

																							<option value="274|BOSNIA ED ERZEGOVINA|X">BOSNIA ED ERZEGOVINA</option>

																							<option value="98|BOTSWANA|X">BOTSWANA</option>

																							<option value="11|BRASILE|S">BRASILE</option>

																							<option value="125|BRUNEI|X">BRUNEI</option>

																							<option value="12|BULGARIA|S">BULGARIA</option>

																							<option value="142|BURKINA FASO|X">BURKINA FASO</option>

																							<option value="25|BURUNDI|X">BURUNDI</option>

																							<option value="135|CAMBOGIA|X">CAMBOGIA</option>

																							<option value="119|CAMERUN|X">CAMERUN</option>

																							<option value="13|CANADA|S">CANADA</option>

																							<option value="188|CAPO VERDE|X">CAPO VERDE</option>

																							<option value="144|CIAD|X">CIAD</option>

																							<option value="15|CILE|X">CILE</option>

																							<option value="16|CINA|S">CINA</option>

																							<option value="101|CIPRO|S">CIPRO</option>

																							<option value="93|CITTA DEL VATICANO|X">CITTA DEL VATICANO</option>

																							<option value="17|COLOMBIA|S">COLOMBIA</option>

																							<option value="176|COMOROS|X">COMOROS</option>

																							<option value="145|CONGO|X">CONGO</option>

																							<option value="74|COREA DEL NORD|X">COREA DEL NORD</option>

																							<option value="84|COREA DEL SUD|S">COREA DEL SUD</option>

																							<option value="146|COSTA DI AVORIO|X">COSTA DI AVORIO</option>

																							<option value="19|COSTA RICA|S">COSTA RICA</option>

																							<option value="261|CROAZIA|S">CROAZIA</option>

																							<option value="20|CUBA|X">CUBA</option>

																							<option value="296|CURAÇAO|X">CURAÇAO</option>

																							<option value="21|DANIMARCA|S">DANIMARCA</option>

																							<option value="192|DOMINICA|X">DOMINICA</option>

																							<option value="24|ECUADOR|X">ECUADOR</option>

																							<option value="23|EGITTO|X">EGITTO</option>

																							<option value="64|EL SALVADOR|X">EL SALVADOR</option>

																							<option value="240|EMIRATI ARABI UNITI|X">EMIRATI ARABI UNITI</option>

																							<option value="277|ERITREA|X">ERITREA</option>

																							<option value="257|ESTONIA|S">ESTONIA</option>

																							<option value="26|ETIOPIA|X">ETIOPIA</option>

																							<option value="161|FIGI|X">FIGI</option>

																							<option value="27|FILIPPINE|X">FILIPPINE</option>

																							<option value="28|FINLANDIA|S">FINLANDIA</option>

																							<option value="29|FRANCIA|S">FRANCIA</option>

																							<option value="241|FUIJAYRAH|X">FUIJAYRAH</option>

																							<option value="157|GABON|X">GABON</option>

																							<option value="164|GAMBIA|X">GAMBIA</option>

																							<option value="267|GEORGIA|X">GEORGIA</option>

																							<option value="94|GERMANIA|X">GERMANIA</option>

																							<option value="112|GHANA|X">GHANA</option>

																							<option value="82|GIAMAICA|X">GIAMAICA</option>

																							<option value="88|GIAPPONE|S">GIAPPONE</option>

																							<option value="102|GIBILTERRA|S">GIBILTERRA</option>

																							<option value="113|GIBUTI|X">GIBUTI</option>

																							<option value="122|GIORDANIA|X">GIORDANIA</option>

																							<option value="32|GRECIA|S">GRECIA</option>

																							<option value="156|GRENADA|X">GRENADA</option>

																							<option value="200|GROENLANDIA|S">GROENLANDIA</option>

																							<option value="214|GUADALUPA|X">GUADALUPA</option>

																							<option value="154|GUAM|X">GUAM</option>

																							<option value="33|GUATEMALA|X">GUATEMALA</option>

																							<option value="201|GUERNSEY|S">GUERNSEY</option>

																							<option value="123|GUIANA FRANCESE|X">GUIANA FRANCESE</option>

																							<option value="137|GUINEA|X">GUINEA</option>

																							<option value="167|GUINEA EQUATORIALE|X">GUINEA EQUATORIALE</option>

																							<option value="185|GUINEA-BISSAU|X">GUINEA-BISSAU</option>

																							<option value="159|GUYANA|X">GUYANA</option>

																							<option value="34|HAITI|X">HAITI</option>

																							<option value="35|HONDURAS|X">HONDURAS</option>

																							<option value="103|HONG KONG|S">HONG KONG</option>

																							<option value="114|INDIA|S">INDIA</option>

																							<option value="129|INDONESIA|X">INDONESIA</option>

																							<option value="39|IRAN|X">IRAN</option>

																							<option value="38|IRAQ|X">IRAQ</option>

																							<option value="40|IRLANDA|S">IRLANDA</option>

																							<option value="41|ISLANDA|S">ISLANDA</option>

																							<option value="286|ISLOE SVALBARD E JAN MAYEN|X">ISLOE SVALBARD E JAN MAYEN</option>

																							<option value="280|ISOLA BOUVET|X">ISOLA BOUVET</option>

																							<option value="282|ISOLA CHRISTMAS|X">ISOLA CHRISTMAS</option>

																							<option value="281|ISOLA COCOS  KEELING|X">ISOLA COCOS  KEELING</option>

																							<option value="203|ISOLA DI MAN|S">ISOLA DI MAN</option>

																							<option value="292|ISOLE ALAND|X">ISOLE ALAND</option>

																							<option value="252|ISOLE AMERICANE DEL PACIFICO|X">ISOLE AMERICANE DEL PACIFICO</option>

																							<option value="211|ISOLE CAYMAN|N">ISOLE CAYMAN</option>

																							<option value="237|ISOLE COOK|X">ISOLE COOK</option>

																							<option value="190|ISOLE FALKLAND|X">ISOLE FALKLAND</option>

																							<option value="204|ISOLE FAROE|S">ISOLE FAROE</option>

																							<option value="284|ISOLE HEARD E MCDONALD|X">ISOLE HEARD E MCDONALD</option>

																							<option value="219|ISOLE MARIANNE SETTENTRIONALI|X">ISOLE MARIANNE SETTENTRIONALI</option>

																							<option value="217|ISOLE MARSHALL|S">ISOLE MARSHALL</option>

																							<option value="285|ISOLE NORFOLK|X">ISOLE NORFOLK</option>

																							<option value="191|ISOLE SALOMONE|X">ISOLE SALOMONE</option>

																							<option value="210|ISOLE TURKS E CAICOS|N">ISOLE TURKS E CAICOS</option>

																							<option value="221|ISOLE VERGINI AMERICANE|X">ISOLE VERGINI AMERICANE</option>

																							<option value="249|ISOLE VERGINI BRITANNICHE|X">ISOLE VERGINI BRITANNICHE</option>

																							<option value="182|ISRAELE|S">ISRAELE</option>

																							<option value="202|JERSEY|S">JERSEY</option>

																							<option value="269|KAZAKISTAN|X">KAZAKISTAN</option>

																							<option value="116|KENYA|X">KENYA</option>

																							<option value="194|KIRIBATI|X">KIRIBATI</option>

																							<option value="291|KOSOVO|X">KOSOVO</option>

																							<option value="126|KUWAIT|S">KUWAIT</option>

																							<option value="270|KYRGYZSTAN|X">KYRGYZSTAN</option>

																							<option value="136|LAOS|X">LAOS</option>

																							<option value="89|LESOTHO|X">LESOTHO</option>

																							<option value="258|LETTONIA|S">LETTONIA</option>

																							<option value="95|LIBANO|X">LIBANO</option>

																							<option value="44|LIBERIA|X">LIBERIA</option>

																							<option value="45|LIBIA|X">LIBIA</option>

																							<option value="90|LIECHTENSTEIN|S">LIECHTENSTEIN</option>

																							<option value="259|LITUANIA|S">LITUANIA</option>

																							<option value="92|LUSSEMBURGO|S">LUSSEMBURGO</option>

																							<option value="59|MACAO|N">MACAO</option>

																							<option value="278|MACEDONIA|X">MACEDONIA</option>

																							<option value="104|MADAGASCAR|X">MADAGASCAR</option>

																							<option value="56|MALAWI|X">MALAWI</option>

																							<option value="127|MALDIVE|X">MALDIVE</option>

																							<option value="106|MALESIA|S">MALESIA</option>

																							<option value="149|MALI|X">MALI</option>

																							<option value="105|MALTA|S">MALTA</option>

																							<option value="107|MAROCCO|X">MAROCCO</option>

																							<option value="213|MARTINICA|X">MARTINICA</option>

																							<option value="141|MAURITANIA|X">MAURITANIA</option>

																							<option value="128|MAURITIUS|X">MAURITIUS</option>

																							<option value="226|MAYOTTE|X">MAYOTTE</option>

																							<option value="46|MESSICO|S">MESSICO</option>

																							<option value="215|MICRONESIA|X">MICRONESIA</option>

																							<option value="265|MOLDAVIA|X">MOLDAVIA</option>

																							<option value="91|MONACO|X">MONACO</option>

																							<option value="110|MONGOLIA|X">MONGOLIA</option>

																							<option value="290|MONTENEGRO|X">MONTENEGRO</option>

																							<option value="208|MONTSERRAT|N">MONTSERRAT</option>

																							<option value="134|MOZAMBICO|X">MOZAMBICO</option>

																							<option value="83|MYANMAR|X">MYANMAR</option>

																							<option value="206|NAMIBIA|X">NAMIBIA</option>

																							<option value="109|NARAU|S">NARAU</option>

																							<option value="115|NEPAL|X">NEPAL</option>

																							<option value="47|NICARAGUA|X">NICARAGUA</option>

																							<option value="150|NIGER|X">NIGER</option>

																							<option value="117|NIGERIA|X">NIGERIA</option>

																							<option value="205|NIUE|X">NIUE</option>

																							<option value="48|NORVEGIA|S">NORVEGIA</option>

																							<option value="253|NUOVA CALEDONIA|X">NUOVA CALEDONIA</option>

																							<option value="49|NUOVA ZELANDA|S">NUOVA ZELANDA</option>

																							<option value="163|OMAN|X">OMAN</option>

																							<option value="50|PAESI BASSI|S">PAESI BASSI</option>

																							<option value="36|PAKISTAN|X">PAKISTAN</option>

																							<option value="216|PALAU|X">PALAU</option>

																							<option value="279|PALESTINA|X">PALESTINA</option>

																							<option value="51|PANAMA|X">PANAMA</option>

																							<option value="186|PAPUA NUOVA GUINEA|X">PAPUA NUOVA GUINEA</option>

																							<option value="52|PARAGUAY|X">PARAGUAY</option>

																							<option value="53|PERU|X">PERU</option>

																							<option value="175|PITCAIRN|X">PITCAIRN</option>

																							<option value="225|POLINESIA FRANCESE|X">POLINESIA FRANCESE</option>

																							<option value="54|POLONIA|S">POLONIA</option>

																							<option value="55|PORTOGALLO|S">PORTOGALLO</option>

																							<option value="220|PORTORICO|X">PORTORICO</option>

																							<option value="168|QATAR|X">QATAR</option>

																							<option value="242|RAS AL KHAIMAH|X">RAS AL KHAIMAH</option>

																							<option value="31|REGNO UNITO|S">REGNO UNITO</option>

																							<option value="18|REP. DEMOCRATICA DEL CONGO|X">REP. DEMOCRATICA DEL CONGO</option>

																							<option value="143|REPPUBBLICA CENTROAFRICANA|X">REPPUBBLICA CENTROAFRICANA</option>

																							<option value="275|REPUBBLICA CECA|S">REPUBBLICA CECA</option>

																							<option value="63|REPUBBLICA DOMINICANA|X">REPUBBLICA DOMINICANA</option>

																							<option value="247|REUNION|X">REUNION</option>

																							<option value="61|ROMANIA|S">ROMANIA</option>

																							<option value="151|RUANDA|X">RUANDA</option>

																							<option value="262|RUSSIA|S">RUSSIA</option>

																							<option value="166|SAHARA OCCIDENTALE|X">SAHARA OCCIDENTALE</option>

																							<option value="293|SAINT BARTHELEMY|X">SAINT BARTHELEMY</option>

																							<option value="195|SAINT KITTS E NEVIS|X">SAINT KITTS E NEVIS</option>

																							<option value="199|SAINT LUCIA|S">SAINT LUCIA</option>

																							<option value="222|SAINT MARTIN (FRENCH PART)|X">SAINT MARTIN (FRENCH PART)</option>

																							<option value="248|SAINT PIERRE E MIQUELON|X">SAINT PIERRE E MIQUELON</option>

																							<option value="196|SAINT VINCENT E GRENADINE|S">SAINT VINCENT E GRENADINE</option>

																							<option value="131|SAMOA|X">SAMOA</option>

																							<option value="148|SAMOA AMERICANA|X">SAMOA AMERICANA</option>

																							<option value="37|SAN MARINO|S">SAN MARINO</option>

																							<option value="254|SANTA ELENA|X">SANTA ELENA</option>

																							<option value="187|SAO TOME E PRINCIPE|X">SAO TOME E PRINCIPE</option>

																							<option value="152|SENEGAL|X">SENEGAL</option>

																							<option value="289|SERBIA|X">SERBIA</option>

																							<option value="189|SEYCHELLES|S">SEYCHELLES</option>

																							<option value="243|SHARJAH|X">SHARJAH</option>

																							<option value="153|SIERRA LEONE|X">SIERRA LEONE</option>

																							<option value="147|SINGAPORE|S">SINGAPORE</option>

																							<option value="294|SINT MAARTEN (DUTCH PART)|X">SINT MAARTEN (DUTCH PART)</option>

																							<option value="65|SIRIA|X">SIRIA</option>

																							<option value="276|SLOVACCHIA|S">SLOVACCHIA</option>

																							<option value="260|SLOVENIA|S">SLOVENIA</option>

																							<option value="66|SOMALIA|X">SOMALIA</option>

																							<option value="67|SPAGNA|S">SPAGNA</option>

																							<option value="85|SRI LANKA|X">SRI LANKA</option>

																							<option value="69|STATI UNITI|S">STATI UNITI</option>

																							<option value="78|SUD AFRICA|S">SUD AFRICA</option>

																							<option value="283|SUD GEORGIA E SUD SANDWICH|X">SUD GEORGIA E SUD SANDWICH</option>

																							<option value="297|SUD SUDAN|X">SUD SUDAN</option>

																							<option value="70|SUDAN|X">SUDAN</option>

																							<option value="124|SURINAME|X">SURINAME</option>

																							<option value="68|SVEZIA|S">SVEZIA</option>

																							<option value="71|SVIZZERA|S">SVIZZERA</option>

																							<option value="138|SWAZILAND|X">SWAZILAND</option>

																							<option value="272|TAGIKISTAN|X">TAGIKISTAN</option>

																							<option value="72|TAILANDIA|X">TAILANDIA</option>

																							<option value="22|TAIWAN|X">TAIWAN</option>

																							<option value="57|TANZANIA|X">TANZANIA</option>

																							<option value="183|TERRITORI FRANCESI DEL SUD|X">TERRITORI FRANCESI DEL SUD</option>

																							<option value="245|TERRITORIO BRITANNICO OCEANO INDIANO|X">TERRITORIO BRITANNICO OCEANO INDIANO</option>

																							<option value="287|TIMOR EST|X">TIMOR EST</option>

																							<option value="155|TOGO|X">TOGO</option>

																							<option value="236|TOKELAU|X">TOKELAU</option>

																							<option value="162|TONGA|X">TONGA</option>

																							<option value="120|TRINIDAD E TOBAGO|X">TRINIDAD E TOBAGO</option>

																							<option value="75|TUNISIA|X">TUNISIA</option>

																							<option value="76|TURCHIA|S">TURCHIA</option>

																							<option value="273|TURKMENISTAN|X">TURKMENISTAN</option>

																							<option value="193|TUVALU|X">TUVALU</option>

																							<option value="263|UCRAINA|X">UCRAINA</option>

																							<option value="132|UGANDA|X">UGANDA</option>

																							<option value="244|UMM AL QAIWAIN|X">UMM AL QAIWAIN</option>

																							<option value="77|UNGHERIA|S">UNGHERIA</option>

																							<option value="80|URUGUAY|S">URUGUAY</option>

																							<option value="271|UZBEKISTAN|X">UZBEKISTAN</option>

																							<option value="121|VANUATU|X">VANUATU</option>

																							<option value="81|VENEZUELA|X">VENEZUELA</option>

																							<option value="62|VIETNAM|X">VIETNAM</option>

																							<option value="218|WALLIS E FUGUNA|X">WALLIS E FUGUNA</option>

																							<option value="42|YEMEN|X">YEMEN</option>

																							<option value="58|ZAMBIA|X">ZAMBIA</option>

																							<option value="73|ZIMBABWE|X">ZIMBABWE</option>

																						</select>
																					</div>
																					<div id="tin_int1_id1" class="col-sm-6">
																						<label class="control-label">Taxpayer Identification Number (Tin)</label>
																						<input class="tinField form-control disabled" type="text" name="TIN2_int1" id="TIN_int1_id1" maxlength="20" style="text-transform:uppercase" disabled="disabled">

																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="fatcaFieldButton">
																		<div class="row">
																			<div class="col-sm-6">
																				<a href="javascript:;" class="fieldButton remove">
																					<i class="icon icon-f-row_contract icon-2x icon-inline marginRight_Medium"></i>
																					<span>Elimina <span class="labelCounterMeno">seconda</span> residenza fiscale</span>
																				</a>
																			</div>
																			<div class="col-sm-6">
																				<a href="javascript:;" class="fieldButton add disabled">
																					<i class="icon icon-f-row_expand icon-2x icon-inline marginRight_Medium"></i>
																					<span>Aggiungi <span class="labelCounterPiu">terza</span> residenza fiscale</span>
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<!--
																<div class="form-group">
																	<div class="row marginBottomMicro">
																		<div class="col-sm-12">
																			<strong>Altro indirizzo di corrispondenza (non sarà utilizzato dalla banca)</strong>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-sm-6">
																			<label class="control-label">Stato</label>
																			<select name="stato_FATCALayer_int1" id="stato_FATCALayer_int1" class="form-control">
																				<option></option>
																			</select>
																		</div>
																		<div class="col-sm-6">
																			<label class="control-label">Indirizzo</label>
																			<input type="text" name="via_FATCALayer_int1" id="via_FATCALayer_int1" class="form-control">
																		</div>
																	</div>
																</div>
																
																<div class="form-group">
																	<div class="row">
																		<div class="col-sm-3">
																			<label class="control-label">Provincia</label>
																			<input type="text" name="provincia_FATCALayer_int1" id="provincia_FATCALayer_int1" class="form-control">
																		</div>
																		<div class="col-sm-6">
																			<label class="control-label">Comune</label>
																			<input type="text" name="comune_FATCALayer_int1" id="comune_FATCALayer_int1" class="form-control">																		</div>
																		<div class="col-sm-3">
																			<label class="control-label">CAP</label>
																			<input type="text" name="cap_FATCALayer_int1" id="cap_FATCALayer_int1" class="form-control">										
																		</div>
																	</div>
																</div>-->
																<div class="form-group btnWrapper">
																	<div class="btn-align-left">
																		<a type="button" class="btn btn-default">annulla</a>
																	</div>
																	<div class="btn-align-right">
																		<a type="button" class="btn btn-primary" id="">salva</a>
																	</div>
																	<br class="clear">
																</div>
														</div>
													</div>
												</div>
										</div>
										
										<hr>
										<h4>8. Comunica un tuo recapito</h4>	
										<div class="form-group">
											<p>Questo &egrave; il recapito che ci hai dato per la corrispondenza, al quale ti invieremo la documentazione contrattuale (copia cliente) dopo aver aperto il deposito titoli da te richiesto. <strong>Verificalo bene prima di procedere!</strong> Se vuoi riceverlo ad un indirizzo diverso (per esempio in ufficio) puoi modificarlo*, scrivendo i nuovi dati.</p>
											<div class="form-group">
												<div class="row">
													<div class="col-sm-6">
														<label class="control-label">Presso</label>
														<select name="presso_richiedente"  class="form-control">
															<option></option>
														</select>
													</div>
													<div class="col-sm-6">
														<label class="control-label">Indirizzo</label>
														<input type="text" name="via_richiedente" class="form-control" value="VIA MAIORANA 60-62">
													</div>
												</div>
											</div>
												<div class="form-group">
														<div class="row">
															<div class="col-sm-3">
																<label class="control-label">Provincia</label>
																<select name="provincia_richiedente"  class="form-control">
																	<option></option>
																</select>
															</div>
															<div class="col-sm-6">
																<label class="control-label">Comune</label>
																<select id="comuneRecapito"  class="form-control">
																	<option></option>
																</select>
															</div>
															<div class="col-sm-3">
																<label class="control-label">CAP</label>
																<select name="cap_richiedente"  class="form-control" id="capRecapito">
																	<option></option>
																</select>									
															</div>
														</div>
												</div>
												<p class="note">* La modifica &egrave; valida soltanto per questo caso, ma non implica il cambio dell'indirizzo presente in anagrafe</p>
												<h4>Normativa antiriciclaggio</h4>

												<div class="panel-group sub-accordion" id="accordionInner" role="tablist" aria-multiselectable="true">
												  <div class="panel panel-default">
												    <div class="panel-heading" role="tab" id="headingInner">
												      <h4 class="panel-title">
												        <a data-toggle="collapse" href="#collapseInner" aria-expanded="true" aria-controls="collapseInner">
												         Iole Tolve<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
												        </a>
												      </h4>
												    </div>
												    <div id="collapseInner" class="panel-collapse  collapse in" role="tabpanel" aria-labelledby="headingInner">
												      <div class="panel-body">
												      	<p>Per questa normativa sei tenuto a fornire alla Banca alcune <span class="txthelp closeable" data-toggle="tooltip" data-title="Ai sensi della vigente normativa antiriciclaggio (D.Lgs. 231/07 e successive integrazioni e modifiche ed ai sensi del Provvedimento Banca d’Italia del 3 Aprile 2013) il Cliente è obbligato a fornire alla Banca alcune dichiarazioni e informazioni.<br>
Ti ricordiamo che il rilascio di false informazioni od omissioni <strong>comporta conseguenze anche di natura penale.</strong><br>
Prima di procedere ti invitiamo a prendere visione dell'<a href=&quot;#&quot;>Informativa sul trattamento dei dati personali della Banca</a>. I dati forniti di seguito devono ritenersi integrati (sempre per le finalità di cui alla normativa antiriciclaggio) con i dati forniti alla Banca in relazione ai rapporti bancari, finanziari e di investimento.">informazioni obbligatorie</span></p>
												      	<h4>Profilo personale</h4>
												      	<div class="form-group">
												      		<p>Persona politicamente esposta? Importante: prima di rispondere leggi la <span class="txthelp" data-toggle="modal" data-target="#layerPersPol">definizione</span></p>
													      	<div class="row requiredField">
																<div class="col-sm-3">
																	<div class="radio inline">
																		<label class="textWrapper">
																			<input type="radio" name="politicEspostaAv_int1" id="politicEspostaAv_int1_N">
																			<span class="text">No</span>
																		</label>
																	</div>
																</div>
																<div class="col-sm-3">
																	<div class="radio inline">
																		<label class="textWrapper">
																			<input type="radio" name="politicEspostaAv_int1" id="politicEspostaAv_int1_S">
																			<span class="text">Si</span>
																		</label>
																	</div>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="row">
																<div class="col-sm-6 requiredField">
																	<label class="control-label">Natura e scopo prevalente del rapporto*</label>
																	<select id="usoConto" name="usoConto" class="form-control">
																		<option></option>
																	</select>
																</div>
																<div class="col-sm-6">
																	<label class="control-label">Seconda cittadinanza</label>
																	<select id="cittadinanza2Av_int1" name="cittadinanza2Av_int1" class="form-control">
																		<option></option>
																	</select>
																</div>
															</div>
														</div>
														<h4>Profilo professionale e patrimoniale</h4>
														<div class="form-group">
															<div class="row">
																<div class="col-sm-12 requiredField">
																	<label class="control-label">Professione*</label>
																	<select id="professioneAv_int1" name="professioneAv_int1" class="form-control">
																		<option></option>
																	</select>
																</div>
																<!--<div class="col-sm-6 requiredField">
																	<label class="control-label">Settore*</label>
																	<select id="settoreAv_int1" name="settoreAv_int1" class="form-control">
																		<option></option>
																	</select>
																</div>-->
															</div>
														</div>
														<div class="form-group">
															<div class="row">
																<div class="col-sm-12 requiredField">
																	<label class="control-label">Dettaglio settore*</label>
																	<select id="dettaglioSettoreAv_int1" name="dettaglioSettoreAv_int1" class="form-control" disabled>
																		<option></option>
																	</select>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="row">
																<div class="col-sm-6 requiredField">
																	<label class="control-label">Stato di svolgimento attivit&agrave;*</label>
																	<select id="statoAttivitaAv_int1" name="statoAttivitaAv_int1" class="form-control">
																		<option></option>
																	</select>
																</div>
																<div class="col-sm-6 requiredField">
																	<label class="control-label">Provincia di svolgimento attivit&agrave;*</label>
																	<select id="provinciaAttivitaAv_int1" name="provinciaAttivitaAv_int1" class="form-control" disabled>
																		<option></option>
																	</select>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="row">
																<div class="col-sm-6 requiredField">
																	<label class="control-label">Reddito annuo netto*</label>
																	<select id="redditoAnnuoAv_int1" name="redditoAnnuoAv_int1" class="form-control">
																		<option></option>
																	</select>
																</div>
																<div class="col-sm-6 requiredField">
																	<label class="control-label">Origine del reddito*</label>
																	<select id="origineRedditoAv_int1" name="origineRedditoAv_int1" class="form-control">
																		<option></option>
																	</select>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="row">
																<div class="col-sm-6">
																	<label class="control-label txthelp closeable" data-toggle="tooltip" data-title="Per &quot;origine dei fondi &quot; si intende il capitale che impieghi sul conto corrente proveniente da fonti anche diverse dal reddito di lavoro (es. rendite immobiliari)">Origine dei fondi</label>
																	<select id="originePatrimonioAv_int1" name="originePatrimonioAv_int1" class="form-control">
																		<option></option>
																	</select>
																</div>
																
															</div>
														</div>
													</div>
												    </div>
												  </div>
												</div>
										</div>
										<div class="form-group btnWrapper">
												<div class="btn-align-right">
													<a type="button" class="btn btn-primary" id="btnProsegui">conferma e prosegui</a>
												</div>
												<br class="clear">
										</div>

											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="panel-group panel-step disabled" id="accordionDepStep2" role="tablist" aria-multiselectable="true">
					        <div class="panel panel-default">
					            <div class="panel-heading" role="tab" id="carteStep2">
					                <h4 class="panel-title">
						         <span class="number-step"><span class="number">2</span><i class="icon icon-2x icon icon-spunta"></i></span>
									<a class="" data-toggle="" href="#collapseCarteStep2" aria-expanded="false" aria-controls="collapseCarteStep2">
							         	Documentazione precontrattuale <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
							        </a>
							   </h4>
					            </div>
					            <div class="border-panel-collapse">
					            	<div id="collapseCarteStep2" class="panel-collapse collapse stepToggle" role="tabpanel" aria-labelledby="carteStep2">
					                    <div class="panel-body">
					                        <div id="datiInput2">
					                            <form class="formGenerico" role="form">
					                            	<h4>Leggi l'informativa precontrattuale</h4>
					                            	<p>Ti ricordiamo che &egrave; tuo diritto ricevere copia di tutta la documentazione contrattuale, idonea per la stipula e per una ponderata valutazione del contenuto:</p>
					                            	<ul>
					                            		<li>questo diritto pu&ograve; essere sottoposto a termini e condizioni</li>
														<li>l'esercizio di tale diritto non impegna le parti a stipulare il contratto</li>
													</ul>
													<p>Per procedere occorre aprire il documento. Ricorda di salvare i documenti sul tuo computer</p>
													<p><strong>Documentazione informativa precontrattuale Deposito titoli (pdf 1580kb)*</strong><br>
													Modulo di richiesta dei Servizi Amministrati Webank, comprensivo di Documento di Sintesi e Condizioni Generali per la prestazione dei servizi di investimento, Informativa preliminare Mifid)</p>
					                            	<div class="pdfEmbedded">
														<div class="marginBottomMini">
															<div class="row">
																<div class="col-sm-12">
																	<a href="javascript:;" onclick="ableinput('#presaVisione');" class="embed">Leggi</a>
																	<a href="javascript:;" class="flRight closePdfEmbedd" style="display:none">Chiudi</a>
																</div>
															</div>
														</div>
														<div class="pdfToOpen" style="display:none">
															<div id="pdf1" class="pdf"></div>
														</div>
														<div class="form-group">
															<div class="row">	
																<div class="col-sm-12">
																	<div class="checkbox">
						                                                <label id="informative2" class="textWrapper disabledField richiesta-1">
						                                                    <span class="hovfin closeable" data-toggle="tooltip" data-title="Per procedere occorre prendere visione della documentazione informativa"></span>
						                                                    <input type="checkbox" name="" id="presaVisione" disabled>
						                                                    <span class="text">Dichiaro di aver preso visione della documentazione/informativa precontrattuale che Banca Popolare di Milano mi ha consegnato.</span>
						                                                </label>
						                                              </div>
																</div>
															</div>
														</div>

												    </div>
												    <p><strong>Altra documentazione di informativa precontrattuale Deposito titoli (facoltativa)</strong><br>
														   (Guida Camera di Conciliazione della Consob, Foglio Informativo, Questionario di profilatura MIFID copia in bianco)
													<div class="pdfEmbedded">
														<div class="row-fluid">
															<a href="javascript:;" class="embed openPdfEmbedd">Leggi</a>
															<a href="javascript:;" class="flRight closePdfEmbedd" style="display:none">Chiudi</a>
														</div>
														<div class="pdfToOpen" style="display:none">
															<div id="pdf2" class="pdf"></div>
														</div>
													</div>
													<div class="form-group btnWrapper">
																	<div class="btn-align-right">
																		<a type="button" class="btn btn-primary" id="btnProsegui2">conferma e prosegui</a>
																	</div>
																	<br class="clear">
															</div>

					                            </form>
					                        </div>
					                    </div>
					                </div>
								</div>
							</div>
									</div>



						<div class="panel-group panel-step disabled" id="accordionDepStep3" role="tablist" aria-multiselectable="true">
					        <div class="panel panel-default">
					            <div class="panel-heading" role="tab" id="carteStep3">
					                <h4 class="panel-title">
						         <span class="number-step"><span class="number">3</span><i class="icon icon-2x icon icon-spunta"></i></span>
									<a class="" data-toggle="" href="#collapseCarteStep3" aria-expanded="false" aria-controls="collapseCarteStep3">
							         	Documentazione contrattuale <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
							        </a>
							   </h4>
					            </div>
					            <div class="border-panel-collapse">
					            	<div id="collapseCarteStep3" class="panel-collapse collapse stepToggle" role="tabpanel" aria-labelledby="carteStep3">
					                    <div class="panel-body">
					                        <div id="datiInput3">
					                            <form class="formGenerico" role="form">
					                            	<h4>Leggi La documentazione contrattuale</h4>
													<p>er procedere occorre aprire il documento e confermare la tua volontà di sottoscrivere il contratto.
													Ricorda di salvare il documento sul tuo computer.</p>
													<p><strong>Normativa antiriciclaggio</strong></p>
													<div class="pdfEmbedded">
														<div class="marginBottomMini">
															<div class="row">
																<div class="col-sm-12">
																	<a href="javascript:;" onclick="ableinput('#presaVisione3');" class="embed">Leggi</a>
																	<a href="javascript:;" class="flRight closePdfEmbedd" style="display:none">Chiudi</a>
																</div>
															</div>
														</div>
														<div class="pdfToOpen" style="display:none">
															<div id="pdf3" class="pdf"></div>
														</div>
														<div class="form-group">
															<div class="row">	
																<div class="col-sm-12">
																	<div class="checkbox">
						                                                <label id="informative3" class="textWrapper disabledField richiesta-1">
						                                                    <span class="hovfin closeable" data-toggle="tooltip" data-title="Per procedere occorre prendere visione della documentazione informativa"></span>
						                                                    <input type="checkbox" name="" id="presaVisione3" disabled>
						                                                    <span class="text">Ho letto e approvo integralmente il contenuto della normativa antiriciclaggio relativa al deposito titoli.</span>
						                                                </label>
						                                              </div>
																</div>
															</div>
														</div>
													 </div>
													 <p><strong>Lorem ipsum</strong></p>
													 <div class="pdfEmbedded">
														<div class="marginBottomMini">
															<div class="row">
																<div class="col-sm-12">
																	<a href="javascript:;" onclick="ableinput('#presaVisione4');" class="embed">Leggi</a>
																	<a href="javascript:;" class="flRight closePdfEmbedd" style="display:none">Chiudi</a>
																</div>
															</div>
														</div>
														<div class="pdfToOpen" style="display:none">
															<div id="pdf4" class="pdf"></div>
														</div>
														<div class="form-group">
															<div class="row">	
																<div class="col-sm-12">
																	<div class="checkbox">
						                                                <label id="informative4" class="textWrapper disabledField richiesta-1">
						                                                    <span class="hovfin closeable" data-toggle="tooltip" data-title="Per procedere occorre prendere visione della documentazione informativa"></span>
						                                                    <input type="checkbox" name="" id="presaVisione4" disabled>
						                                                    <span class="text">Ho letto e approvo integralmente il contenuto della normativa antiriciclaggio relativa al deposito titoli.</span>
						                                                </label>
						                                              </div>
																</div>
															</div>
														</div>
													 </div>
													 <p>Apponi la tua firma digitale inserendo Il PIN di firma e il Codice OTP che ricevuto via SMS sul tuo cellulare</p>
														<div class="form-group">
															<div class="row">	
																<div class="col-sm-6">
																	<label class="control-label">PIN di firma</label>
																	<input type="text" name="" class="form-control clear-x" placeholder="inserisci PIN di firma">
																</div>
																<div class="col-sm-6">
																	<label class="control-label">Codice OTP<a class="flRight">Rinvia codice OTP</a></label>
																	<input type="text" name="" class="form-control clear-x" placeholder="inserisci il codice OTP">
																</div>
					                            			</div>
					                            		</div>
					                            		<div class="form-group btnWrapper">
																	<div class="btn-align-right">
																		<a type="button" class="btn btn-primary" id="btnProsegui3">prosegui</a>
																	</div>
																	<br class="clear">
															</div>
													</form>
					                        </div>
					                    </div>
					                </div>
								</div>
							</div>
						</div>
						<div class="panel-group panel-step disabled" id="accordionDepStep4" role="tablist" aria-multiselectable="true">
					        <div class="panel panel-default">
					            <div class="panel-heading" role="tab" id="carteStep4">
					                <h4 class="panel-title">
						         <span class="number-step"><span class="number">4</span><i class="icon icon-2x icon icon-spunta"></i></span>
									<a class="" data-toggle="" href="#collapseCarteStep4" aria-expanded="false" aria-controls="collapseCarteStep3">
							         	Clausule vessatorie <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
							        </a>
							   </h4>
					            </div>
					            <div class="border-panel-collapse">
					            	<div id="collapseCarteStep4" class="panel-collapse collapse stepToggle" role="tabpanel" aria-labelledby="carteStep4">
					                    <div class="panel-body">
					                        <div id="datiInput4">
					                            <form class="formGenerico" role="form">
					                            	<h3>Prendi visione delle clausule vessatorie</h3>
													<h4>Clausole vessatorie</h4>
													<div class="pdfEmbedded">
														<div class="marginBottomMini">
															<div class="row">
																<div class="col-sm-12">
																	<a href="javascript:;" onclick="ableinput('#presaVisione5');" class="embed">Leggi</a>
																	<a href="javascript:;" class="flRight closePdfEmbedd" style="display:none">Chiudi</a>
																</div>
															</div>
														</div>
														<div class="pdfToOpen" style="display:none">
															<div id="pdf5" class="pdf"></div>
														</div>
														<div class="form-group">
															<div class="row">	
																<div class="col-sm-12">
																	<div class="checkbox">
						                                                <label id="informative5" class="textWrapper disabledField richiesta-5">
						                                                    <span class="hovfin closeable" data-toggle="tooltip" data-title="Prendi visione della documentazione"></span>
						                                                    <input type="checkbox" name="" id="presaVisione5" disabled>
						                                                    <span class="text">Dichiaro di aver ricevuto tutti i documenti che compongono le condizioi Webank su supporto durevole adeguato al recupero della copia integrale e confrome degli stessi per tutta la durata dei rapporti che il cliente è interessato a concludere, di averli letti attentamente e di averne compreso i contenuti.</span>
						                                                </label>
						                                              </div>
																</div>
															</div>
														</div>
													 </div>
													 <p>Apponi la tua firma digitale inserendo Il PIN di firma e il Codice OTP che ricevuto via SMS sul tuo cellulare</p>
					                            		<div class="form-group">
															<div class="row">	
																<div class="col-sm-6">
																	<label class="control-label">PIN di firma</label>
																	<div class="editable-input"><input type="text" name="" class="form-control clear-x" placeholder="inserisci PIN di firma"><span class="editable-clear-x" style="display: none"><i class="icon icon-close icon-1x"></i></span></div>
																</div>
																<div class="col-sm-6">
																	<label class="control-label">Codice OTP<a class="flRight">Rinvia codice OTP</a></label>
																	<div class="editable-input"><input type="text" name="" class="form-control clear-x" placeholder="inserisci il codice OTP"><span class="editable-clear-x" style="display: none"><i class="icon icon-close icon-1x"></i></span></div>
																</div>
					                            			</div>
					                            		</div>
					                            		<div class="form-group btnWrapper">
																	<div class="btn-align-right">
																		<a type="button" class="btn btn-primary" id="btnProsegui4">prosegui</a>
																	</div>
																	<br class="clear">
															</div>



					                            </form>
					                        </div>
					                    </div>
					                </div>
					            </div>
					            </div>
						     </div>
							
						<div class="panel-group panel-step disabled" id="accordionDepStep5" role="tablist" aria-multiselectable="true">
					        <div class="panel panel-default">
					            <div class="panel-heading" role="tab" id="carteStep5">
					                <h4 class="panel-title">
						         <span class="number-step"><span class="number">5</span><i class="icon icon-2x icon icon-spunta"></i></span>
									<a class="" data-toggle="" href="#collapseCarteStep5" aria-expanded="false" aria-controls="collapseCarteStep4">
							         	Modulo W9 <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
							        </a>
							   </h4>
					            </div>
					            <div class="border-panel-collapse">
					            	<div id="collapseCarteStep5" class="panel-collapse collapse stepToggle" role="tabpanel" aria-labelledby="carteStep5">
					                    <div class="panel-body">
					                        <div id="datiInput5">
					                            <form class="formGenerico" role="form">
					                            	<h3>Leggi il modulo W9</h3>
													<h4>Modulo W9</h4>
													<p>Prendi visione della documentazione contrattuale e di trasparenza. Per procedere occorre aprire i documenti e conferma la tua volontà di sottoscrivere i contratti. Ti consigliamo di salvare i documenti sul tuo computer.</p>
													<h3>Modulo W9 deposito titoli*</h3>

													<div class="pdfEmbedded">
														<div class="marginBottomMini">
															<div class="row">
																<div class="col-sm-12">
																	<a href="javascript:;" onclick="ableinput('#presaVisione6');" class="embed">Leggi</a>
																	<a href="javascript:;" class="flRight closePdfEmbedd" style="display:none">Chiudi</a>
																</div>
															</div>
														</div>
														<div class="pdfToOpen" style="display:none">
															<div id="pdf6" class="pdf"></div>
														</div>
														<div class="form-group">
															<div class="row">	
																<div class="col-sm-12">
																	<div class="checkbox">
						                                                <label id="informative6" class="textWrapper disabledField richiesta-6">
						                                                    <span class="hovfin closeable" data-toggle="tooltip" data-title="Prendi visione della documentazione"></span>
						                                                    <input type="checkbox" name="" id="presaVisione6" disabled>
						                                                    <span class="text">Dichiaro di aver ricevuto tutti i documenti che compongono le condizioi Webank su supporto durevole adeguato al recupero della copia integrale e confrome degli stessi per tutta la durata dei rapporti che il cliente è interessato a concludere, di averli letti attentamente e di averne compreso i contenuti.</span>
						                                                </label>
						                                              </div>
																</div>
															</div>
														</div>
													 </div>
													 <p>Apponi la tua firma digitale inserendo Il PIN di firma e il Codice OTP che ricevuto via SMS sul tuo cellulare</p>
					                            		<div class="form-group">
															<div class="row">	
																<div class="col-sm-6">
																	<label class="control-label">PIN di firma</label>
																	<div class="editable-input"><input type="text" name="" class="form-control clear-x" placeholder="inserisci PIN di firma"><span class="editable-clear-x" style="display: none"><i class="icon icon-close icon-1x"></i></span></div>
																</div>
																<div class="col-sm-6">
																	<label class="control-label">Codice OTP<a class="flRight">Rinvia codice OTP</a></label>
																	<div class="editable-input"><input type="text" name="" class="form-control clear-x" placeholder="inserisci il codice OTP"><span class="editable-clear-x" style="display: none"><i class="icon icon-close icon-1x"></i></span></div>
																</div>
					                            			</div>
					                            		</div>
					                            		<div class="form-group btnWrapper">
																	<div class="btn-align-right">
																		<a type="button" class="btn btn-primary" id="btnProsegui5">prosegui</a>
																	</div>
																	<br class="clear">
															</div>



					                            </form>
					                        </div>
					                    </div>
					                </div>
					            </div>
					            </div>
					     </div>		
								
				




					<div class="modal fade" id="layerPersPol" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
								</div>
								<div class="modal-body">
									<div class="container-fluid">
										<div class="row">
											<div class="col-xs-12">
												<p>
													Le &quot;persone politicamente esposte&quot; (PeP) sono: le persone fisiche residenti sul territorio nazionale, o in altri Stati comunitari o extracomunitari, che occupano o hanno occupato importanti cariche pubbliche nonché i loro familiari diretti o coloro con i quali tali persone intrattengono notoriamente stretti legami, individuate sulla base dei criteri di cui all'<strong>art. 1</strong> dell'<strong>Allegato tecnico</strong> del <strong>D.Lgs. n. 231/07</strong>, del <strong>Provvedimento Banca d'Italia</strong> del <strong>3 aprile 2013</strong>, nonch&eacute; delle disposizioni attuative tempo per tempo vigenti in tema di adeguata verifica della clientela.
												</p>
												<ol><li>Ai sensi dell'art. 1 dell'Allegato Tecnico, per persone fisiche che occupano o hanno occupato importanti cariche pubbliche s'intendono:<ol type="a"><li>i capi di Stato, i capi di Governo, i Ministri e i Vice Ministri o Sottosegretari;</li><li>i parlamentari;</li><li>i membri delle Corti supreme, delle Corti costituzionali e di altri organi giudiziari di alto livello le cui decisioni non sono generalmente soggette a ulteriore appello, salvo in circostanze eccezionali;</li><li>i membri delle Corti dei Conti e dei consigli di amministrazione delle banche centrali;</li><li>gli ambasciatori, gli incaricati d’affari e gli ufficiali di alto livello delle forze armate;</li><li>i membri degli organi di amministrazione, direzione o vigilanza delle imprese possedute dallo Stato.</li></ol></li></ol>
												<p>In nessuna delle categorie sopra specificate rientrano i funzionari di livello medio o inferiore. Le categorie di cui alle lettere da a) a e) comprendono, laddove applicabili, le posizioni a livello europeo ed internazionale.</p>
												<ol start="2"><li>Per familiari diretti s’intendono:<ol type="a"><li>il coniuge;</li><li>i figli e i loro coniugi;</li><li>coloro che nell’ultimo quinquennio hanno convissuto con i soggetti di cui alle precedenti lettere;</li><li>i genitori.</li></ol></li></ol>
												<ol start="3"><li>Ai fini dell’individuazione dei soggetti con i quali le persone di cui al numero 1 intrattengono notoriamente stretti legami si fa riferimento a:<ol type="a"><li>qualsiasi persona fisica che ha notoriamente la titolarità effettiva congiunta di entità giuridiche o qualsiasi altra stretta relazione d’affari con una persona di cui al comma 1;</li><li>qualsiasi persona fisica che sia unica titolare effettiva di entità giuridiche o soggetti giuridici notoriamente creati di fatto a beneficio della persona di cui al comma 1.</li></ol></li></ol>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				<script>
				/*gestione sia mobile che non della selezione tabelle*/
				$('.selectProfilo').bind('change',function(event,index){
					activeteTable(this,event);
				})
				$('.ch-profilo').bind('click',function(event,index){
					activeteTable(this,event);
				})
				function activeteTable(el) {
					var parentTable = $(el).closest('.wrapper-sel').nextAll('.headerContainerNoBootS').eq(0).find('.table-tipoprofilo');
					if(parentTable.length>1)
					{
						parentTable.hide();
						if(el.nodeName=='TD')
						{
							$(el).closest('tr').find('.ch-profilo').removeClass('bgAtt');
							$(el).addClass('bgAtt');
							$(el).closest('table').next('.wrapper-sel').find('.selectProfilo').prop('selectedIndex', $(el).index());
							parentTable.eq($(el).index()).show();
						}
						else {
							$(el).closest('.wrapper-sel').prev('table').find('.ch-profilo').removeClass('bgAtt');
							$(el).closest('.wrapper-sel').prev('table').find('.ch-profilo').eq(el.selectedIndex).addClass('bgAtt');
							parentTable.eq(el.selectedIndex).show();
						}
					}
					else 
					{
			//assegnare la classe off alle colonne non selezionate nel caso di tabella con TAB DEROGA...a solo titolo esemplificativo:
			parentTable.find('td.bgCosti,th,td.empty').addClass('off');
			parentTable.find('th:first-child').removeClass('off');
			if(el.nodeName=='TD')
			{
				$(el).closest('tr').find('.ch-profilo').removeClass('bgAtt');
				$(el).addClass('bgAtt');
				parentTable.find('th').eq($(el).attr('data-col-off')).removeClass('off');
				parentTable.find('td.color' + $(el).attr('data-col-off')).removeClass('off');
				$(el).closest('table').next('.wrapper-sel').find('.selectProfilo').prop('selectedIndex', $(el).index());
			}
			else
			{
				$(el).closest('.wrapper-sel').prev('table').find('.ch-profilo').removeClass('bgAtt');
				$(el).closest('.wrapper-sel').prev('table').find('.ch-profilo').eq(el.selectedIndex).addClass('bgAtt');
				parentTable.find('th').eq($(el).find('option:selected').attr('data-col-off')).removeClass('off');
				parentTable.find('td.color' + $(el).find('option:selected').attr('data-col-off')).removeClass('off');
			}
		}
	}

	</script>
	<!--FUNZIONE DI ESEMPIO PER L ACORREZIONE ERRORI -->
<script type="text/javascript">	
	$(function () {
		
		$("#btnProsegui").click(function () {
			
			// Check giroconto
			var errors = [],
				errorTab = $("#errorTab");
				consensoWrapper =  $("#consensoWrapper");
				inputUSA  =  $("#inputUsa1 input");
			
			if ($("#errorTab").find("input[type=radio]:checked").length === 0) {
				errors.push({ field: $("#errorTab"), text: "Seleziona una delle due opzioni" });
			}
			if ($("#consensoWrapper").find("input[type=radio]:checked").length === 0) {
				errors.push({ field: $("#consensoWrapper"), text: "Se non dai il consenso alle tecniche di comunicazione a distanza, non è possibile procedere all'apertura del deposito titoli." });
			}
			if ($("#inputUsa1").find("input[type=radio]:checked").length === 0) {
				errors.push({ field: $("#inputUsa1"), text: "lorem ipsum" });
			}
			setHasErrors(errors, "#formrichiesta1");
			if (errors.length) {
				
				$(errors[0].field).find('input').trigger('focus');
			}
			else {
				proseguiStep($(this));
				$('.editButton').click(function() {
       				modificaStep($(this));

       			});
			}
			return (!errors.length);
		});

		$("#btnProsegui2").click(function () {
			$('#accordionDepStep2 a[data-toggle]').attr('data-toggle','collapse');
			$('#accordionDepStep1 a[data-toggle]').attr('data-toggle','collapse');
			proseguiStep($(this));
			$('#accordionDepStep1,#accordionDepStep2').find('.panel').removeClass('panel-selected');
			
		})
		$("#btnProsegui3").click(function () {
			$('#accordionDepStep3 a[data-toggle]').attr('data-toggle','collapse');
			proseguiStep($(this));
			$('#accordionDepStep3').find('.panel').removeClass('panel-selected');
			
		})
		$("#btnProsegui4").click(function () {
			$('#accordionDepStep4 a[data-toggle]').attr('data-toggle','collapse');
			proseguiStep($(this));
			$('#accordionDepStep4').find('.panel').removeClass('panel-selected');
			
		})
		$("#btnProsegui5").click(function () {
			$('.boxrichiesta').hide();
			$('#esitoDt').show()
		})
	});
</script>
<script type="text/javascript">
	window.onload = function (){
		
		var docArray = ['/wscmn/doc/doc_conto_corrente.pdf','/wscmn/doc/Numeri_utili.pdf','/wscmn/doc/InformativaFatcaBPM.pdf','/wscmn/doc/InformativaFatcaBPM.pdf','/wscmn/doc/InformativaFatcaBPM.pdf','/wscmn/doc/InformativaFatcaBPM.pdf','/wscmn/doc/InformativaFatcaBPM.pdf','/wscmn/doc/InformativaFatcaBPM.pdf','/wscmn/doc/InformativaFatcaBPM.pdf'];
		var ancoreArray = ['29','','1','1','1','1','1','1','1'];

		pdfObj = [];
		for (i=0; i < docArray.length; i++)
		{
			if(typeof ancoreArray==="undefined"){
				page = 1
			}
			else {
				page = ancoreArray[i]
			}
			
			 pdfObj.push(new PDFObject({ url: docArray[i],  pdfOpenParams : {
			    navpanes : 1,
			    view : "FitH",
			    page: page
				
			} }));
			
			pdfObj[i].embed("pdf" + (i+1));
			firstPDF = pdfObj[0].embed("pdf1");
			if(firstPDF){
				$('.embed').attr('href','javascript:;').addClass('openPdfEmbedd');
				openPdfEmbed();
			} else {
				$('.embed').eq(i).attr('href',docArray[i] + '#page=' + page).removeClass('openPdfEmbedd');
				$('.embed').eq(i).attr('target','_blank')
			}
		}
	
	
	
	};
	
</script>


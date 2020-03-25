<script type="text/javascript" src="/wscmn/js/ret/pdfobject.js"></script>

<!--<h1>Deposito titoli</h1>
<ul class="tabGeneric">
	<li><span class="tabBorder"><span class="tabGradient"><a href="#">Scopri il deposito</a></span></span></li>
	<li class="active"><span class="tabBorder"><span class="tabGradient"><a href="#">Apertura</a></span></span></li>
	
</ul>-->
<div>
<div class="filettoGenericoVerticale">
	<div class="filettoGenericCorner">
		<div class="paddMedium">
			<div class="boxrichiesta">
				<!--PRIMO STEP RICHIESTA -->	
				<div class="steprichiesta on">
					<div class="steprichiestatit" id="steprichiestatit1">
						<img alt="Lorem ipsum dolor" src="/img/ret/str_tit_uno_on.gif" class="first" id="img1">
						<h2 class="richiestaTit">Caratteristiche deposito titoli</h2>
						<span style="display:none" class="icospunta"><img src="/img/ret/ico2inf_spunta.png"></span>
						<!--<span style="display:none"><a id="modificaBtn" onclick="$('#btnProsegui').show();stepRichiesta(this);" class="backstep second modifica" href="javascript:;">modifica</a></span>-->
						<span  style="display:none"><a id="modificaBtn" class="backstep second modifica" href="javascript:;">modifica</a></span>
					</div>
					<div class="formGeneric steprichiestacont">
						<div id="wraprichiesta1" class="stepToggle">
							<form id="formrichiesta1">
									<h3 class="graphTit colorBank">1. SCEGLI IL CONTO CORRENTE D'APPOGGIO</h3>
									<div class="row-fluid">
										<div class="span6">
											<label class="nomefield">Conto corrente:</label>
											<select><option>CC XXXX XXXXXXXXXXXXXXX</option><option>CC YYYY XXXXXXXXXXXXXXX</option></select>
										</div>
									</div>
									<div class="filettoGenericoOrizzontale02"></div>
										<h3 class="graphTit colorBank">2. SCEGLI IL REGIME FISCALE</h3>
										<div class="row-fluid">
											<div class="span12">
												<label ><input type="radio" value="" name="regime" checked><strong>Regime fiscale amministrativo (consigliato)</strong></label>
												<span class="text nopadd">Il cliente che sceglie questo regime delega alla banca il calcolo dell'imposta sostitutiva sulle plusvalenze realizzate (Capital Gain).  Questo regime render&agrave; pi&ugrave; semplice la compilazione dei redditi.
												Il cliente dichiara di essere a conoscenza che la scelta effettuata sul regime fiscale verr&agrave; applicata anche all'operativit&agrave; in fondi Comuni di Investimento.
												</span>
											</div>
										</div>
										<div class="row-fluid">
											<div class="span12">
												<label><input type="radio" value="" name="regime"><span><strong>Regime fiscale dichiarativo</strong> </label>
												<span class="text nopadd">Il cliente che sceglie questo regime delega alla banca il calcolo dell'imposta sostitutiva sulle plusvalenze realizzate (Capital Gain).  Questo regime render&agrave; pi&ugrave; semplice la compilazione dei redditi.
												Il cliente dichiara di essere a conoscenza degli obblighi personali di natura dichiarativa in materia fiscale e solleva qualsiasi responsabilit&agrave; al riguardo.
												L'intermedario non applicher&agrave; nessuna ritenuta sul Capital Gain, il cliente sar&agrave; tenuto al regime ordinario di tassazione e dovr&agrave;, quindi, adempiere agli obblighi impositivi. Scegliendo il regime fiscale dichiarativo, il Cliente rinuncia espressamente all'applicazione del regime fiscale amministrativo sui fondi.
												</span>
											</div>
										</div>
										<div class="filettoGenericoOrizzontale02"></div>
										<h3 class="graphTit colorBank">3. SCEGLI IL PROFILO DI COMMISSIONE</h3>
										<p>Visiona i grafici e scegli un profilo - Lorem Ispum</p>
										<div id="errorTab" class="row-fluid requiredField">
											<table class="activetable activetableColorTab" cellspacing="0" cellpadding="0" border="0" >
												<tr>
													<td id="profFis" class="bgAtt">
														<div class="profFis">
														<a>
															<input type="radio" name="ng_commissioni" value="1" onclick="$('#ProfiloFis').show();$('#ProfiloVar').hide();$('#profVar').removeClass('bgAtt');$('#profFis').addClass('bgAtt');"><span id="ng_commissioni1">PROFILO FISSO</span>
														</a>
														</div>
													</td>
													<td id="profVar">
														<div class="profVar">
														<a>
															<input type="radio" name="ng_commissioni" value="0" onclick="$('#ProfiloVar').show();$('#ProfiloFis').hide();$('#profFis').removeClass('bgAtt');$('#profVar').addClass('bgAtt');"><span id="ng_commissioni2">PROFILO VARIABILE</span>
														</a>
														</div>
													</td>
												</tr>	
											</table>
										</div>
									<table id="ProfiloFis" class="activetable activetableColor" cellspacing="0" cellpadding="0" border="0">
									<tr>
										<td colspan="2" class="bor textLeft col01"><strong>Commissioni mese precedente</strong></td>
										<td class="borLeft">da 0<br>a 500 &euro;</td>
										<td class="borLeft">da 500<br>a 1000 &euro;</td>
										<td class="borLeft">da 1000<br>a 1500 &euro;</td>
										<td class="borLeft">da 1500<br>a 2000 &euro;</td>
										<td class="borLeft">oltre<br>i 2000 &euro;</td>
									</tr>
									<tr>
										<td colspan="2" rowspan="5" class="bor textLeft"><strong>Livello</strong></td>
										<td rowspan="5" class="bgCosti1 bor"><span class="circle">1</span></td>
										<td class="bgCostiPad">&nbsp;</td>
										<td class="bgCostiPad borLeft">&nbsp;</td>
										<td class="bgCostiPad borLeft">&nbsp;</td>
										<td class="bgCostiPad borLeft">&nbsp;</td>
									</tr>
									<tr>
										<td rowspan="4" class="bgCosti2 bor"><span class="circle">2</span></td>
										<td class="bgCostiPad">&nbsp;</td>
										<td class="bgCostiPad borLeft">&nbsp;</td>
										<td class="bgCostiPad borLeft">&nbsp;</td>
									</tr>
									<tr>
										<td rowspan="3" class="bgCosti3 bor"><span class="circle">3</span></td>
										<td class="bgCostiPad">&nbsp;</td>
										<td class="bgCostiPad borLeft">&nbsp;</td>
									</tr>
									<tr>
										<td rowspan="2" class="bgCosti4 bor"><span class="circle">4</span></td>
										<td class="bgCostiPad">&nbsp;</td>
									</tr>
									<tr>
										<td class="bgCosti5 bor"><span class="circle">5</span></td>
									</tr>
									<tr>
										<td class="openercontainer no_rightborder bor"><a alt="Apri" class="opener" onclick="javascript: activetabledetail(this);" href="javascript:;"></a></td>
										<td class="no_leftborder bor textLeft"><a onclick="javascript: activetabledetail(this);" href="javascript:;"><strong>Azioni Italia, Azioni Europa*,<br> Obbligazioni ETF e SEDEX</strong></a></td>
										<td class="bgCosti1 bor fontBig">12 &euro;</td>
										<td class="bgCosti2 bor fontBig">8 &euro;</td>
										<td class="bgCosti3 bor fontBig">6 &euro;</td>
										<td class="bgCosti4 bor fontBig">4 &euro;</td>
										<td class="bgCosti5 bor fontBig">2,75 &euro;</td>
									</tr>
									<tr class="closed">
										<td colspan="7" class="bor textLeft">
											<p class="textLeftPie">
												<strong>Azionario Italia</strong> (MTA - TAH, AIM, ETF, PLUS, azionario Euro TLX)<br>
												<strong>Azionario Europa*</strong> (Germania Xetra, Euronext Francia - Olanda - Belgio, Portogallo, Ibex Spagna)<br><strong>Obbligazionario</strong> (EUROTLX, MOT, ExtraMOT, Hi - MTF, Akros IS, Obbligazioni OTC)<br>
												<strong>Certificati e CW</strong> (Sedex)
											</p>
										</td>
									</tr>
									<tr>
										<td class="openercontainer no_rightborder bor"><a alt="Apri" class="opener" onclick="javascript: activetabledetail(this);" href="javascript:;"></a></td>
										<td class="no_leftborder bor textLeft"><a onclick="javascript: activetabledetail(this);" href="javascript:;"><strong>Azioni USA</strong></a></td>
										<td class="bgCosti1 bor">15,9 $</td>
										<td class="bgCosti2 bor">12,9 $</td>
										<td class="bgCosti3 bor">9,9 $</td>
										<td class="bgCosti4 bor">6,9 $</td>
										<td class="bgCosti5 bor">6,9 $</td>
									</tr>
									<tr class="closed">
										<td colspan="7" class="bor textLeft">
											<p class="textLeftPie">Nasdaq, Nyse</p>
										</td>
									</tr>
									<tr>
										<td class="openercontainer no_rightborder bor"><a alt="Apri" class="opener" onclick="javascript: activetabledetail(this);" href="javascript:;"></a></td>
										<td class="no_leftborder bor textLeft"><a onclick="javascript: activetabledetail(this);" href="javascript:;"><strong>Azioni Londra</strong></a></td>
										<td class="bgCosti1 bor">12,5 &pound;</td>
										<td class="bgCosti2 bor">12,5 &pound;</td>
										<td class="bgCosti3 bor">10 &pound;</td>
										<td class="bgCosti4 bor">10 &pound;</td>
										<td class="bgCosti5 bor">7,5 &pound;</td>
									</tr>
									<tr class="closed">
										<td colspan="7" class="bor textLeft">
											<p class="textLeftPie">London Stock Exchange</p>
										</td>
									</tr>
									<tr>
										<td class="openercontainer no_rightborder bor"><a alt="Apri" class="opener" onclick="javascript: activetabledetail(this);" href="javascript:;"></a></td>
										<td class="no_leftborder bor textLeft"><a onclick="javascript: activetabledetail(this);" href="javascript:;"><strong>Derivati A</strong></a></td>
										<td class="bgCosti1 bor">9 &euro;</td>
										<td class="bgCosti2 bor">5,9 &euro;</td>
										<td class="bgCosti3 bor">5,9 &euro;</td>
										<td class="bgCosti4 bor">3 &euro;</td>
										<td class="bgCosti5 bor">3 &euro;</td>
									</tr>
									<tr class="closed">
										<td colspan="7" class="bor textLeft">
											<p class="textLeftPie">
												<strong>IDEM</strong> (FTSE MIB Future)<br>
												<strong>EUREX</strong> (Dax Future, Bund, Bobl ,Schatz, Buxl, BTP Long - Short -<br>Mid Term Futures, OAT Futures)<br>
												<strong>CME</strong> (Nikkei 225 Dollar based, Energy Futures,<br>5/10/30 Year Treasury Futures, Agricultural Futures (1), Metal Futures)<br>
												<strong>eCBOT</strong> (Metal Futures)<br>
												<strong>LIFFE</strong> (FTSE 100 Index Futures, Long Gilt Futures)<br><br>
												(1) Per gli strumenti Agricultural Futures ? prevista una commissione minima pari a 5,90 Euro per lotto eseguito.</p>
										</td>
									</tr>
									<tr>
										<td class="openercontainer no_rightborder bor"><a alt="Apri" class="opener" onclick="javascript: activetabledetail(this);" href="javascript:;"></a></td>
										<td class="no_leftborder bor textLeft"><a onclick="javascript: activetabledetail(this);" href="javascript:;"><strong>Derivati B</strong></a></td>
										<td class="bgCosti1 bor">5,9 &euro;</td>
										<td class="bgCosti2 bor">3,9 &euro;</td>
										<td class="bgCosti3 bor">3,9 &euro;</td>
										<td class="bgCosti4 bor">3 &euro;</td>
										<td class="bgCosti5 bor">3 &euro;</td>
									</tr>
									<tr class="closed">
										<td colspan="7" class="bor textLeft">
											<p class="textLeftPie">
												<strong>IDEM</strong> (FTSE MIB Options, Opzioni su Azioni)<br>
												<strong>EUREX</strong> (DJ Eurostoxx 50 Futures, DjStoxx50, DJSettoriali, DJTitan30, Option Dax -  Option Dj, EuroStoxx 50 - Bund - Bobl - Schatz)<br>
												<strong>CME</strong> ( Eurodollaro 3 mesi, Futures, E-mini nasdaq100 - E mini S&amp;P500 Futures, Mini Dow Jones Futures, E-MiniS&amp;P MID 400, E-MiniS&amp;P SMCAP 600, Euro/Dollaro FX ? E-mini, Euro/Dollaro FX Futures-Futures su Cambi:British Pound, Canadian Dollar, Australian Dollar, Swiss Franc)<br>
												<strong>LIFFE</strong> (AC40 Futures, AEX Futures)</p>
										</td>
									</tr>
									<tr>
										<td class="openercontainer no_rightborder bor"><a alt="Apri" class="opener" onclick="javascript: activetabledetail(this);" href="javascript:;"></a></td>
										<td class="no_leftborder bor textLeft"><a onclick="javascript: activetabledetail(this);" href="javascript:;"><strong>Derivati C</strong></a></td>
										<td class="bgCosti1 bor">3,9 &euro;</td>
										<td class="bgCosti2 bor">1,9 &euro;</td>
										<td class="bgCosti3 bor">1,9 &euro;</td>
										<td class="bgCosti4 bor">1,9 &euro;</td>
										<td class="bgCosti5 bor">1,9 &euro;</td>
									</tr>
									<tr class="closed">
										<td colspan="7" class="bor textLeft">
											<p class="textLeftPie">
												<strong>IDEM</strong> (MiniFTSE MIB Future, MiniFTSE 100 Future, Stock Future)</p>
										</td>
									</tr>
									<tr>
										<td colspan="7" class="textLeft">* Su ciascun ordine esguito sui mercati azionari europei sar&agrave; applicata una maggiorazione di 9 euro per spese e diritti fissi.</td>
									</tr>
									</table>
									<table id="ProfiloVar" style="display: none;" class="activetable activetableColor" cellspacing="0" cellpadding="0" border="0">
										<tr>
											<td colspan="2" class="bor textLeft col01"><strong>Commissioni mese precedente</strong></td>
											<td class="borLeft">da 0<br>a 500 &euro;</td>
											<td class="borLeft">da 500<br>a 1000 &euro;</td>
											<td class="borLeft">da 1000<br>a 1500 &euro;</td>
											<td class="borLeft">da 1500<br>a 2000 &euro;</td>
											<td class="borLeft">oltre i 2000 &euro;</td>
										</tr>
										<tr>
											<td colspan="2" rowspan="5" class="bor textLeft"><strong>Livello</strong></td>
											<td rowspan="5" class="bgCosti1 bor"><span class="circle">1</span></td>
											<td class="bgCostiPad">&nbsp;</td>
											<td class="bgCostiPad borLeft">&nbsp;</td>
											<td class="bgCostiPad borLeft">&nbsp;</td>
											<td class="bgCostiPad borLeft">&nbsp;</td>
										</tr>
										<tr>
											<td rowspan="4" class="bgCosti2 bor"><span class="circle">2</span></td>
											<td class="bgCostiPad">&nbsp;</td>
											<td class="bgCostiPad borLeft">&nbsp;</td>
											<td class="bgCostiPad borLeft">&nbsp;</td>
										</tr>
										<tr>
											<td rowspan="3" class="bgCosti3 bor"><span class="circle">3</span></td>
											<td class="bgCostiPad">&nbsp;</td>
											<td class="bgCostiPad borLeft">&nbsp;</td>
										</tr>
										<tr>
											<td rowspan="2" class="bgCosti4 bor"><span class="circle">4</span></td>
											<td class="bgCostiPad">&nbsp;</td>
										</tr>
										<tr>
											<td class="bgCosti5 bor"><span class="circle">5</span></td>
										</tr>
										<tr>
											<td class="openercontainer no_rightborder bor"><a alt="Apri" class="opener" onclick="javascript: activetabledetail(this);" href="javascript:;"></a></td>
											<td class="no_leftborder bor textLeft"><a onclick="javascript: activetabledetail(this);" href="javascript:;"><strong>Azioni Italia, Azioni Europa*,<br> Obbligazioni ETF e SEDEX</strong></a></td>
											<td class="bgCosti1 bor fontBig">0,19%<br><span class="fontMin">Min 2,75 &euro;<br>Max 18,9 &euro;</span></td>
											<td class="bgCosti2 bor fontBig">0,17%<br><span class="fontMin">Min 2,75 &euro;<br>Max 12,9 &euro;</span></td>
											<td class="bgCosti3 bor fontBig">0,15%<br><span class="fontMin">Min 2,75 &euro;<br>Max 9,9 &euro;</span></td>
											<td class="bgCosti4 bor fontBig">0,13%<br><span class="fontMin">Min 2,75 &euro;<br>Max 6,9 &euro;</span></td>
											<td class="bgCosti5 bor fontBig">2,75 &euro;<br>&nbsp;<br>&nbsp;</td>
										</tr>
										<tr class="closed">
											<td colspan="7" class="bor textLeft">
												<p class="textLeftPie">
													<strong>Azionario Italia</strong> (MTA - TAH, AIM, ETF, PLUS, azionario Euro TLX)<br>
													<strong>Azionario Europa*</strong> (Germania Xetra, Euronext Francia - Olanda - Belgio, Portogallo, Ibex Spagna)<br><strong>Obbligazionario</strong> (EUROTLX, MOT, ExtraMOT, Hi - MTF, Akros IS, Obbligazioni OTC)<br>
													<strong>Certificati e CW</strong> (Sedex)
												</p>
											</td>
										</tr>
										<tr>
											<td class="openercontainer no_rightborder bor"><a alt="Apri" class="opener" onclick="javascript: activetabledetail(this);" href="javascript:;"></a></td>
											<td class="no_leftborder bor textLeft"><a onclick="javascript: activetabledetail(this);" href="javascript:;"><strong>Azioni USA</strong></a></td>
											<td class="bgCosti1 bor">15,9 $</td>
											<td class="bgCosti2 bor">12,9 $</td>
											<td class="bgCosti3 bor">9,9 $</td>
											<td class="bgCosti4 bor">6,9 $</td>
											<td class="bgCosti5 bor">6,9 $</td>
										</tr>
										<tr class="closed">
											<td colspan="7" class="bor textLeft">
												<p class="textLeftPie">Nasdaq, Nyse</p>
											</td>
										</tr>
										<tr>
											<td class="openercontainer no_rightborder bor"><a alt="Apri" class="opener" onclick="javascript: activetabledetail(this);" href="javascript:;"></a></td>
											<td class="no_leftborder bor textLeft"><a onclick="javascript: activetabledetail(this);" href="javascript:;"><strong>Azioni Londra</strong></a></td>
											<td class="bgCosti1 bor">12,5 &pound;</td>
											<td class="bgCosti2 bor">12,5 &pound;</td>
											<td class="bgCosti3 bor">10 &pound;</td>
											<td class="bgCosti4 bor">10 &pound;</td>
											<td class="bgCosti5 bor">7,5 &pound;</td>
										</tr>
										<tr class="closed">
											<td colspan="7" class="bor textLeft">
												<p class="textLeftPie">London Stock Exchange</p>
											</td>
										</tr>
										<tr>
											<td class="openercontainer no_rightborder bor"><a alt="Apri" class="opener" onclick="javascript: activetabledetail(this);" href="javascript:;"></a></td>
											<td class="no_leftborder bor textLeft"><a onclick="javascript: activetabledetail(this);" href="javascript:;"><strong>Derivati A</strong></a></td>
											<td class="bgCosti1 bor">9 &euro;</td>
											<td class="bgCosti2 bor">5,9 &euro;</td>
											<td class="bgCosti3 bor">5,9 &euro;</td>
											<td class="bgCosti4 bor">3 &euro;</td>
											<td class="bgCosti5 bor">3 &euro;</td>
										</tr>
										<tr class="closed">
											<td colspan="7" class="bor textLeft">
												<p class="textLeftPie">
													<strong>IDEM</strong> (FTSE MIB Future)<br>
													<strong>EUREX</strong> (Dax Future, Bund, Bobl ,Schatz, Buxl, BTP Long - Short -<br>Mid Term Futures, OAT Futures)<br>
													<strong>CME</strong> (Nikkei 225 Dollar based, Energy Futures,<br>5/10/30 Year Treasury Futures, Agricultural Futures (1), Metal Futures)<br>
													<strong>eCBOT</strong> (Metal Futures)<br>
													<strong>LIFFE</strong> (FTSE 100 Index Futures, Long Gilt Futures)<br><br>
													(1) Per gli strumenti Agricultural Futures ? prevista una commissione minima pari a 5,90 Euro per lotto eseguito.</p>
											</td>
										</tr>
										<tr>
											<td class="openercontainer no_rightborder bor"><a alt="Apri" class="opener" onclick="javascript: activetabledetail(this);" href="javascript:;"></a></td>
											<td class="no_leftborder bor textLeft"><a onclick="javascript: activetabledetail(this);" href="javascript:;"><strong>Derivati B</strong></a></td>
											<td class="bgCosti1 bor">5,9 &euro;</td>
											<td class="bgCosti2 bor">3,9 &euro;</td>
											<td class="bgCosti3 bor">3,9 &euro;</td>
											<td class="bgCosti4 bor">3 &euro;</td>
											<td class="bgCosti5 bor">3 &euro;</td>
										</tr>
										<tr class="closed">
											<td colspan="7" class="bor textLeft">
												<p class="textLeftPie">
													<strong>IDEM</strong> (FTSE MIB Options, Opzioni su Azioni)<br>
													<strong>EUREX</strong> (DJ Eurostoxx 50 Futures, DjStoxx50, DJSettoriali, DJTitan30, Option Dax -  Option Dj, EuroStoxx 50 - Bund - Bobl - Schatz)<br>
													<strong>CME</strong> ( Eurodollaro 3 mesi, Futures, E-mini nasdaq100 - E mini S&amp;P500 Futures, Mini Dow Jones Futures, E-MiniS&amp;P MID 400, E-MiniS&amp;P SMCAP 600, Euro/Dollaro FX ? E-mini, Euro/Dollaro FX Futures-Futures su Cambi:British Pound, Canadian Dollar, Australian Dollar, Swiss Franc)<br>
													<strong>LIFFE</strong> (AC40 Futures, AEX Futures)</p>
											</td>
										</tr>
										<tr>
											<td class="openercontainer no_rightborder bor"><a alt="Apri" class="opener" onclick="javascript: activetabledetail(this);" href="javascript:;"></a></td>
											<td class="no_leftborder bor textLeft"><a onclick="javascript: activetabledetail(this);" href="javascript:;"><strong>Derivati C</strong></a></td>
											<td class="bgCosti1 bor">3,9 &euro;</td>
											<td class="bgCosti2 bor">1,9 &euro;</td>
											<td class="bgCosti3 bor">1,9 &euro;</td>
											<td class="bgCosti4 bor">1,9 &euro;</td>
											<td class="bgCosti5 bor">1,9 &euro;</td>
										</tr>
										<tr class="closed">
											<td colspan="7" class="bor textLeft">
												<p class="textLeftPie"><strong>IDEM</strong> (MiniFTSE MIB Future, MiniFTSE 100 Future, Stock Future)</p>
											</td>
										</tr>
										<tr>
											<td colspan="7" class="textLeft">* Su ciascun ordine esguito sui mercati azionari europei sar&agrave; applicata una maggiorazione di 9 euro per spese e diritti fissi.</td>
										</tr>
									</table>
							<p>Per le condizioni economiche complete e le principali condizioni contrattuali fare riferimento al Documento di Sintesi ed ai Fogli Informativi</p>
							<div class="filettoGenericoOrizzontale02"></div>
							<h3 class="graphTit colorBank">4. CONTABILI ESTRATTI CONTO</h3>
							<p>Sono date di default le <strong>contabili e gli estratti conto online</strong>. Il servizio &egrave; gratuito.In caso volessi utilizzare le contabili cartacee dovrai fare esplicita richiesta alla Banca.</p>
							<div class="filettoGenericoOrizzontale02"></div>
							<h3 class="graphTit colorBank">5. AUTORIZZA LA COMUNICAZIONE A DISTANZA</h3>
							<p>Per poter comunicare con te attraverso <strong>tecniche a distanza</strong> quali ad esempio la posta elettronica (email) o il telefono, necessitiamo del tuo consenso. Al riguardo, ti informiamo che l'operativit&agrave; a distanza caratterizza tutti i servizi Webank. Pertanto, in mancanza del tuo consenso, <strong>non potremo procedere all'apertura del deposito titoli.</strong></p>
							<div class="row-fluid tolltipclick requiredField" id="consensoWrapper">
									<div class="span6">
										<label class="radio"><input type="radio" value="" name="consenso"><span>Do il consenso</span></label>
									</div>
									<div class="span6">
										<span class="closed">
											<span id="consensoInfo" class="uniqTooltipText over fixed" onclick="createUniqTooltip(event, this, 'small')">	
												<span class="uniqTooltipPos">
													<label class="radio"><input type="radio" value="" name="consenso"><span>Non do il consenso</span> </label>
													<span class="uniqTooltipInnerHTML">
														<p>Se non dai il consenso non &egrave; possibile procedere con l'apertura</p>
													</span>
												</span>
											</span>
										</span>
									</div>
							</div>
							<div class="filettoGenericoOrizzontale02"></div>
								<h3 class="graphTit colorBank">6. AUTOCERTIFICAZIONE CITTADINI RESIDENTI IN USA</h3>
								<div class="boxesito negativo">
									<div class="middle"><span class="imgCont"></span>
										<div class="text">
											<div class="row-fluid">
												<div class="span12">
													<p><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
												et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p>
													<ul class="listafrec">
														<li><a href="#1" title="#">Lorem ipsum dolor sit amet, consectetuer</a></li>
													</ul>
													<p class="note">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec quis tellus.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="boxesito attenzione">
									<div class="middle"><span class="imgCont"></span>
										<div class="text">
											<div class="row-fluid">
												<div class="span12">
													<p><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
												et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p>
													<ul class="listafrec">
														<li><a href="#1" title="#">Lorem ipsum dolor sit amet, consectetuer</a></li>
													</ul>
													<p class="note">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec quis tellus.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<h2 class="carte margTopSmall">MAURA TERRANOVA</h2>
								

								<p><strong class="flLeft margRightMedium margBottomSmall">Sei una US PERSON?</strong><a class="noborder flLeft" href="javascript:;" data-target="#tooltip1" data-toggle="modal"><img alt="" src="/img/ret/ico2or_help2.gif"></a><br class="clear">Dichiarando di essere US PERSON, alle rendite finanziarie derivanti da operazioni di titoli di emittenti in USA verr&agrave; applicato solo il regime di tassazione americano.In assenza di tale autocertificazione tali rendite saranno sottoposte a tassazione italiana e americana</p>
								<div class="modal fade" id="tooltip1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
											<h2 class="modal-title" id="myModalLabel">Titolo</h2>
										</div>
										<div class="modal-body">
											<div class="container-fluid">
												<div class="row">
													<div class="col-xs-12">
														<h3>Sottotitolo</h3>
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
															debitis voluptas autem dolore ipsam odit iusto voluptate ducimus,
															quis ratione ipsa sunt asperiores eum, esse animi magni sint deserunt vero?</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>




								


								<div class="row-fluid" id="inputUsa1">
									<div class="span6">
										<label class="radio"><input type="radio" value="" name="usa1"><span>Si</span></label>
									</div>
									<div class="span6">
										<label class="radio"><input type="radio" value="" name="usa1"><span>No</span></label>
									</div>
									
								</div>
								<h2 class="carte margTopSmall">EMILIA BURDERI</h2>
								<p><strong class="flLeft margRightMedium margBottomSmall">Sei una US PERSON?</strong><a class="noborder flLeft" href="javascript:;" data-tooltip="Sei una US Person se sei un contribuente degli Stati Uniti (cittadino o residente in U.S.A.)"><img alt="" src="/img/ret/ico2or_help2.gif"></a><br class="clear">Dichiarando di essere US PERSON, alle rendite finanziarie derivanti da operazioni di titoli di emittenti in USA verr&agrave; applicato solo il regime di tassazione americano.In assenza di tale autocertificazione tali rendite saranno sottoposte a tassazione italiana e americana</p>
								<div class="row-fluid">
									<div class="span6">
										<label class="radio"><input type="radio" value="" name="usa2"><span>Si</span></label>
									</div>
									<div class="span6">
										<label class="radio"><input type="radio" value="" name="usa2"><span>No</span></label>
									</div>
									
								</div>
								<h2 class="carte margTopSmall">EDVIGE BURDERI</h2>
								<p><strong class="flLeft margRightMedium margBottomSmall">Sei una US PERSON?</strong><a class="noborder flLeft" href="javascript:;" data-tooltip="Sei una US Person se sei un contribuente degli Stati Uniti (cittadino o residente in U.S.A.)"><img alt="" src="/img/ret/ico2or_help2.gif"></a><br class="clear">Dichiarando di essere US PERSON, alle rendite finanziarie derivanti da operazioni di titoli di emittenti in USA verr&agrave; applicato solo il regime di tassazione americano.In assenza di tale autocertificazione tali rendite saranno sottoposte a tassazione italiana e americana</p>
								<div class="row-fluid">
									<div class="span6">
										<label class="radio"><input type="radio" value="" name="usa3"><span>Si</span></label>
									</div>
									<div class="span6">
										<label class="radio"><input type="radio" value="" name="usa3"><span>No</span></label>
									</div>
								</div>
								<div class="filettoGenericoOrizzontale02"></div>
								<h3 class="graphTit colorBank">7. ADEMPIMENTI NORMATIVA FATCA</h3>
								<p>Con l'entrata in vigore della normativa FATCA (Foreign account tax compliance act) il governo italiano ha sottoscritto con il Governo degli Stati Uniti d'America un accordo, al fine di migliorare la compliance fiscale internazionale, che prevede lo scambio automatico di informazioni fra le amministrazioni tributarie dei rispettivi Paesi.<br>
								A seguito di questo accordo ti chiediamo di <a href="javascript:;" onclick="$('#boxFatca').show();">dichiarare il tuo Paese di residenza fiscale</a>
								</p>
								<div class="boxstepCont" id="boxFatca" style="display:none">	
									<div class="boxstep">
										<div class="middle">
											<div class="text">
												<a href="javascript:;" class="flRight closeBoxAlert"><img src="/img/ico1gr_close_green.gif"></a>
												<h2 class="carte margTopSmall">ALTRI DATI FATCA e CRS</h2>
												<p>Ai fini delle imposte sui redditi si considerano residenti le persone fisiche che per la maggior parte del periodo d'imposta, cio&egrave; 183 giorni all'anno, sono iscritte all'anagrafe della popolazione residente oppure hanno nel territorio dello Stato il proprio domicilio o residenza ai sensi del Codice Civile.
												Basta il verificarsi di una sola di queste condizioni.
												</p>
												<p>Se hai la residenza fiscale anche in un altro paese oltre a quello italiano, puoi indicarlo.</p>
												<p>Le informazioni non saranno utilizzate dalla banca ma sono rilevanti solo ai fini FATCA</p>
												<h2 class="carte margTopSmall">MAURA TERRANOVA</h2>
												<div class="row-fluid">
													<div class="span6 no-desktop">
														<label class="nomefield ico">Paese di residenza fiscale</label>
														<span class="iconahelp" data-tooltip="L'<strong>offerta Webank</strong> &egrave; <strong>rivolta</strong> esclusivamente ai soggetti che hanno <strong>residenza fiscale in Italia</strong>"><img class="help" src="/img/ret/ico2or_help2.gif" ></span><br class="clear">
														<span class="output">ITALIA</span>
													</div>
												</div>
												<!--fatca-->
												<div class="fatcaintestatario" id="fatca1">
													<div class="fatcaFieldWrapper">
														<div class="fatcaField">
															<div class="row-fluid">
																<div class="span6">
																	<label class="nomefield ico">
																		<span><span class="labelCounter">Secondo</span> paese di residenza fiscale</span>
																		<a class="noborder" href="javascript:;" data-tooltip="lorem ipsum dolor"><img alt="" src="/img/ret/ico2or_help2.gif"></a>
																	</label>
																	<select name="residenzaFiscale2_int1" id="selectfactaA_id1">
																		<option>-- seleziona --</option>
																		<option value="238|AFG|N">AFGHANISTAN</option>
																		<option value="237|ALG|S">ALGERIA</option>
																		<option value="235|AND|X">ANDORRA</option>
																		<option value="234|USA|S">STATI UNITI D'AMERICA</option>
																	</select>
																</div>
																<div id='tinA_id1' class="span6">
																	<label class="nomefield">Taxpayer Identification Number (Tin)</label>
																	<input class="tinField" type="text" name="TIN2_int1" maxlength="10" value="" id="TIN_intA_id1" style="text-transform:uppercase">
																	
																</div>
															</div>
														</div>
													</div>
													<div class="fatcaFieldButton">
														<div class="row-fluid">
															<div class="span6">
																<a href="javascript:;" class="fieldButton remove"><span>Elimina <span class="labelCounterMeno">seconda</span> residenza fiscale</span></a>
															</div>
															<div class="span6">
																<a href="javascript:;" class="fieldButton add disabled"><span>Aggiungi <span class="labelCounterPiu">terza</span> residenza fiscale</span></a>
															</div>
														</div>
													</div>
												</div>
												<br>
												<div class="row-fluid">
													<div class="span12">
														<strong>Altro indirizzo di corrispondenza (non sar&agrave; utilizzato dalla banca)</strong>
													</div>
												</div>
												<div class="row-fluid">
													<div class="span6">
														<label class="nomefield">Stato:</label>
														<select><option>lorem </option><option>ipsum</option></select>
													</div>
													<div class="span6">
														<label class="nomefield">Indirizzo:</label>
														<input type="text"/>
													</div>
												</div>
												<div class="row-fluid">
													<div class="span3">
														<label class="nomefield">Provincia:</label>
														<select><option>lorem </option><option>ipsum</option></select>
													</div>
													<div class="span6">
														<label class="nomefield">Comune:</label>
														<select><option>lorem </option><option>ipsum</option></select>
													</div>
													<div class="span3">
														<label class="nomefield">Cap:</label>
														<input type="text">
													</div>
												</div>
												
												<div class="filettoGenericoOrizzontale02"></div>
												
													<h2 class="carte margTopSmall">EMILIA BURDERI</h2>
												<div class="row-fluid">
													<div class="span6 no-desktop">
														<label class="nomefield ico">Paese di residenza fiscale</label>
														<span class="iconahelp"><img class="help" src="/img/ret/ico2or_help2.gif" data-tooltip="L'<strong>offerta Webank</strong> &egrave; <strong>rivolta</strong> esclusivamente ai soggetti che hanno <strong>residenza fiscale in Italia</strong>"></span><br class="clear">
														<span class="output">ITALIA</span>
													</div>
												</div>
												<!--fatca-->
												<div class="fatcaintestatario" id="fatca2">
													<div class="fatcaFieldWrapper">
														<div class="fatcaField">
															<div class="row-fluid">
																<div class="span6">
																	<label class="nomefield ico">
																		<span><span class="labelCounter">Secondo</span> paese di residenza fiscale</span>
																		<a class="noborder" href="javascript:;" data-tooltip="lorem ipsum dolor"><img alt="" src="/img/ret/ico2or_help2.gif"></a>
																	</label>
																	<select name="residenzaFiscale2_int2" id="selectfactaB_id1">
																		<option>-- seleziona --</option>
																		<option value="238|AFG|N">AFGHANISTAN</option>
																		<option value="237|ALG|S">ALGERIA</option>
																		<option value="235|AND|X">ANDORRA</option>
																		<option value="234|USA|S">STATI UNITI D'AMERICA</option>
																	</select>
																</div>
																<div id='tinA_id1' class="span6">
																	<label class="nomefield">Taxpayer Identification Number (Tin)</label>
																	<input class="tinField" type="text" name="TIN2_int2" maxlength="10" value="" id="TIN_intB_id1" style="text-transform:uppercase">
																	
																</div>
															</div>
														</div>
													</div>
													<div class="fatcaFieldButton">
														<div class="row-fluid">
															<div class="span6">
																<a href="javascript:;" class="fieldButton remove"><span>Elimina <span class="labelCounterMeno">seconda</span> residenza fiscale</span></a>
															</div>
															<div class="span6">
																<a href="javascript:;" class="fieldButton add disabled"><span>Aggiungi <span class="labelCounterPiu">terza</span> residenza fiscale</span></a>
															</div>
														</div>
													</div>
												</div>
												<br>
												<div class="row-fluid">
													<div class="span12">
														<strong>Altro indirizzo di corrispondenza (non sar&agrave; utilizzato dalla banca)</strong>
													</div>
												</div>
												<div class="row-fluid">
													<div class="span6">
														<label class="nomefield">Stato:</label>
														<select><option>lorem </option><option>ipsum</option></select>
													</div>
													<div class="span6">
														<label class="nomefield">Indirizzo:</label>
														<input type="text"/>
													</div>
												</div>
												<div class="row-fluid">
													<div class="span3">
														<label class="nomefield">Provincia:</label>
														<select><option>lorem </option><option>ipsum</option></select>
													</div>
													<div class="span6">
														<label class="nomefield">Comune:</label>
														<select><option>lorem </option><option>ipsum</option></select>
													</div>
													<div class="span3">
														<label class="nomefield">Cap:</label>
														<input type="text">
													</div>
												</div>
											
												
												<div class="filettoGenericoOrizzontale02"></div>
												
													<h2 class="carte margTopSmall">EDVIGE BURDERI</h2>
												<div class="row-fluid">
													<div class="span6 no-desktop">
														<label class="nomefield ico">Paese di residenza fiscale</label>
														<span class="iconahelp"><img class="help" src="/img/ret/ico2or_help2.gif" data-tooltip="L'<strong>offerta Webank</strong> &egrave; <strong>rivolta</strong> esclusivamente ai soggetti che hanno <strong>residenza fiscale in Italia</strong>"></span><br class="clear">
														<span class="output">ITALIA</span>
													</div>
												</div>
												<!--fatca-->
												<div class="fatcaintestatario" id="fatca3">
													<div class="fatcaFieldWrapper">
														<div class="fatcaField">
															<div class="row-fluid">
																<div class="span6">
																	<label class="nomefield ico">
																		<span><span class="labelCounter">Secondo</span> paese di residenza fiscale</span>
																		<a class="noborder" href="javascript:;" data-tooltip="lorem ipsum dolor"><img alt="" src="/img/ret/ico2or_help2.gif"></a>
																	</label>
																	<select name="residenzaFiscale2_int3" id="selectfactaC_id1">
																		<option>-- seleziona --</option>
																		<option value="238|AFG|N">AFGHANISTAN</option>
																		<option value="237|ALG|S">ALGERIA</option>
																		<option value="235|AND|X">ANDORRA</option>
																		<option value="234|USA|S">STATI UNITI D'AMERICA</option>
																	</select>
																</div>
																<div id='tinA_id1' class="span6">
																	<label class="nomefield">Taxpayer Identification Number (Tin)</label>
																	<input class="tinField" type="text" name="TIN2_int3" maxlength="10" value="" id="TIN_intC_id1" style="text-transform:uppercase">
																	
																</div>
															</div>
														</div>
													</div>
													<div class="fatcaFieldButton">
														<div class="row-fluid">
															<div class="span6">
																<a href="javascript:;" class="fieldButton remove"><span>Elimina <span class="labelCounterMeno">seconda</span> residenza fiscale</span></a>
															</div>
															<div class="span6">
																<a href="javascript:;" class="fieldButton add disabled"><span>Aggiungi <span class="labelCounterPiu">terza</span> residenza fiscale</span></a>
															</div>
														</div>
													</div>
												</div>
												<br>
												<div class="row-fluid">
													<div class="span12">
														<strong>Altro indirizzo di corrispondenza (non sar&agrave; utilizzato dalla banca)</strong>
													</div>
												</div>
												<div class="row-fluid">
													<div class="span6">
														<label class="nomefield">Stato:</label>
														<select><option>lorem </option><option>ipsum</option></select>
													</div>
													<div class="span6">
														<label class="nomefield">Indirizzo:</label>
														<input type="text"/>
													</div>
												</div>
												<div class="row-fluid">
													<div class="span3">
														<label class="nomefield">Provincia:</label>
														<select><option>lorem </option><option>ipsum</option></select>
													</div>
													<div class="span6">
														<label class="nomefield">Comune:</label>
														<select><option>lorem </option><option>ipsum</option></select>
													</div>
													<div class="span3">
														<label class="nomefield">Cap:</label>
														<input type="text">
													</div>
												</div>
												<div>
													<div class="aButtonconsLeft">
														<span class="btnc"><a class="aButtonClear" href="javascript:;" onclick="$(this).closest('.boxstepCont').hide()"><span>annulla</span></a></span>
													</div>
													<div class="aButtonconsRight">
														<span class="btnc"><a class="aButton" href="javascript:;" id="demoSetErrorBtn"><span>salva</span></a></span>
													</div>
												</div>
											
											
											</div>
										</div>
									</div>
								</div>
								<br class="clear">
								<div class="filettoGenericoOrizzontale02"></div>
								<h3 class="graphTit colorBank">8. COMUNICA UN TUO RECAPITO</h3>
								<p>Questo &grave; il recapito che ci hai dato per la corrispondenza, al quale ti invieremo la documentazione contrattuale (copia cliente) dopo aver aperto il deposito titoli da te richiesto. <strong>Verfificalo bene prima di procedere!</strong> Se vuoi riceverlo ad un indirizzo diverso(per esempio in ufficio) puoi modificarlo*, scrivendo i nuovi dati</p>
								<div class="row-fluid">
									<div class="span6">
										<label class="nomefield">Presso:</label>
										<select><option>lorem </option><option>ipsum</option></select>
									</div>
									<div class="span6">
										<label class="nomefield">Indirizzo:</label>
										<input type="text">
									</div>
								</div>
								<div class="row-fluid">
										<div class="span3">
											<label class="nomefield">Provincia:</label>
											<select><option>lorem </option><option>ipsum</option></select>
										</div>
										<div class="span6">
											<label class="nomefield">Comune:</label>
											<select><option>lorem </option><option>ipsum</option></select>
										</div>
										<div class="span3">
											<label class="nomefield">Cap:</label>
											<input type="text">
										</div>
								</div>
								<p class="note">*La modifica &egrave; valida soltanto per questo caso, ma non implica il cambio dell'indirizzo presente in anagrafe.</p>
								<div class="titform"><h2>Normativa antiriciclaggio</h2></div>
									<div class="boxform formGeneric flLeft">
										<div class="bollfrecsx2">
											<div class="cartimpronta_lista cartimpronta_lista2">
											<img alt="" class="carttit" src="/img/ret/1px.gif">
											<div class="cartcont">
												<p onclick="javascript:ApriCartImpr(this);" onmouseover="javascript:this.style.cursor='pointer'" class="tit" style="cursor: pointer;"><span><strong class="titolo">MAURA TERRANOVA</strong></span><img alt="" class="bot" src="/img/ret/cartimpr_on.gif"></p>
												<div class="esteso" style="display: block;">
													<p><span class="flLeft margRightMedium">Per questa normativa sei tenuto a fornire alla banca alcune informazioni obbligatorie</span><a class="noborder flLeft" href="javascript:;" data-tooltip="lorem ipsum dolor"><img alt="" src="/img/ret/ico2or_help2.gif"></a></p>
													<div class="row-fluid">
														<h2 class="normaAntir">Profilo personale</h2>
													</div>
													<div class="row-fluid">
														<p>Persona politicamente esposta? <strong>Importante:</strong> prima di rispondere leggi la <span class="txthelp" onclick="openPopOverLayer('layeralert2', 'floating', 1)">definzione</span></p>									
															<span class="ttHtmlContent" id="ttHtmlContId">Si intendono Persone Politicamente Esposti i cittadini di stati Comunitari od Extracomunitari che hannno ricoperto cariche politicamente rilevanti, o i loro parenti, ad esempio gli incarichi di : Capi di Stato, capi di Governo, vice Ministri, sottosegretari, parlamentari, membri delle Corti Supreme, delle Corti Costituzionali e di altri OrganiGiudiziari di alto livello, membri delle Corti dei Conti e dei Consigli di Amministrazione delle Banche Centrali, ambasciatori, incaricati di affari e gli Ufficiali di alto livello delle forze armate, membri degli Organi di Amministrazione, direzione o vigilanza delle imprese possedute dallo Stato, Funzionari/Organi titolari di posizioni di alto livello di enti comunitari e internazionali, familiari diretti di PEP e soggetti che notoriamente intrattengono stretti legami con i PEP (D.Lgs. n. 231/2007)</span>				
														<div class="row-fluid">		
															<label class="span2 radio"><input type="radio" name="pol"><span>no</span></label>
															<label class="span2 radio"><input type="radio" name="pol"><span>si</span></label>
														</div>	
													</div>
													<div class="row-fluid">
														<div class="span6 no-desktop">
															<label class="nomefield">Natura e scopo prevalente del rapporto</label>
															<select>
																<option>Seleziona</option>
																<option>Lorem</option>
															</select>
														</div>
													
														<div class="span6 no-desktop">
															<label class="nomefield">Seconda cittadinanza</label>
															<select>
																<option>Seleziona</option>
																<option>Lorem</option>
															</select>
														</div>
													</div>
													<div class="row-fluid">
														<h2 class="normaAntir">Profilo professionale e patrimoniale</h2>
													</div>
													<div class="row-fluid">
														<div class="span6 no-desktop">
															<label class="nomefield">Professione</label>
															<select>
																<option>Seleziona</option>
																<option>Lorem</option>
															</select>
														</div>
													
														<div class="span6 no-desktop">
															<label class="nomefield">Settore dell'attivit&agrave; lavorativa</label>
															<select>
																<option>Seleziona</option>
																<option>Lorem</option>
															</select>
														</div>
													</div>
													<div class="row-fluid">
														<label class="nomefield">Dettaglio settore</label>
														<select>
															<option>Seleziona</option>
															<option>Lorem</option>
														</select>
													</div>
													<div class="row-fluid">
														<div class="span6 no-desktop">
															<label class="nomefield">Stato di svolgimento</label>
															<select>
																<option>Seleziona</option>
																<option>Lorem</option>
															</select>
														</div>
														<div class="span6 no-desktop">
															<label class="nomefield">Provincia di svolgimento</label>
															<select>
																<option>Seleziona</option>
																<option>Lorem</option>
															</select>
														</div>
													</div>
													<div class="row-fluid">
														<div class="span6 no-desktop">
															<label class="nomefield">Reddito annuo netto</label>
															<select>
																<option>Seleziona</option>
																<option>Lorem</option>
															</select>
														</div>
														<div class="span6 no-desktop">
															<label class="nomefield">Dichiarazione origine del reddito</label>
															<select>
																<option>Seleziona</option>
																<option>Lorem</option>
															</select>
														</div>
													 </div>
													
													<div class="row-fluid">
													 <div class="tolltipclick span6 no-desktop">
														<label class="nomefield ico">Origine dei fondi</label>
															<span class="iconahelp">
																<span class="closed">
																<span id="documenti7" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'large')} else {removeUniqTooltip(event, this)}">
																<span class="uniqTooltipPos"><a href="javascript:;"><img src="/img/ret/ico2or_help2.gif" class="help"></a>
																	<span class="uniqTooltipInnerHTML">lorem ipsum dolor sit </span>
																</span>
																</span>
															</span>
															</span>
														
														<select>
															<option>Seleziona</option>
															<option>Lorem</option>
														</select>
													</div>
													</div>
												</div>
											</div>
										</div>
											<div class="cartimpronta_lista cartimpronta_lista2">
												<img alt="" class="carttit" src="/img/ret/1px.gif">
												<div class="cartcont">
													<p onclick="javascript:ApriCartImpr(this);" onmouseover="javascript:this.style.cursor='pointer'" class="tit" style="cursor: pointer;"><span><strong class="titolo">EMILIA BURDERI</strong></span><img alt="" class="bot" src="/img/ret/cartimpr_off.gif"></p>
													<div class="esteso" style="display: none;">
														<p><span class="flLeft margRightMedium">Per questa normativa sei tenuto a fornire alla banca alcune informazioni obbligatorie</span><a class="noborder flLeft" href="javascript:;" data-tooltip="lorem ipsum dolor"><img alt="" src="/img/ret/ico2or_help2.gif"></a></p>
														<div class="row-fluid">
															<h2 class="normaAntir">Profilo personale</h2>
														</div>
														<div class="row-fluid">
															<p>Persona politicamente esposta? <strong>Importante:</strong> prima di rispondere leggi la <span class="txthelp" data-tooltip="#ttHtmlContId2">definzione</span></p>									
																<span class="ttHtmlContent" id="ttHtmlContId2">Si intendono Persone Politicamente Esposti i cittadini di stati Comunitari od Extracomunitari che hannno ricoperto cariche politicamente rilevanti, o i loro parenti, ad esempio gli incarichi di : Capi di Stato, capi di Governo, vice Ministri, sottosegretari, parlamentari, membri delle Corti Supreme, delle Corti Costituzionali e di altri OrganiGiudiziari di alto livello, membri delle Corti dei Conti e dei Consigli di Amministrazione delle Banche Centrali, ambasciatori, incaricati di affari e gli Ufficiali di alto livello delle forze armate, membri degli Organi di Amministrazione, direzione o vigilanza delle imprese possedute dallo Stato, Funzionari/Organi titolari di posizioni di alto livello di enti comunitari e internazionali, familiari diretti di PEP e soggetti che notoriamente intrattengono stretti legami con i PEP (D.Lgs. n. 231/2007)</span>				
															<div class="row-fluid">		
																<label class="span2 radio"><input type="radio" name="pol"><span>no</span></label>
																<label class="span2 radio"><input type="radio" name="pol"><span>si</span></label>
															</div>	
														</div>
														<div class="row-fluid">
															<div class="span6 no-desktop">
																<label class="nomefield">Natura e scopo prevalente del rapporto</label>
																<select>
																	<option>Seleziona</option>
																	<option>Lorem</option>
																</select>
															</div>
														
															<div class="span6 no-desktop">
																<label class="nomefield">Seconda cittadinanza</label>
																<select>
																	<option>Seleziona</option>
																	<option>Lorem</option>
																</select>
															</div>
														</div>
														<div class="row-fluid">
															<h2 class="normaAntir">Profilo professionale e patrimoniale</h2>
														</div>
														<div class="row-fluid">
															<div class="span6 no-desktop">
																<label class="nomefield">Professione</label>
																<select>
																	<option>Seleziona</option>
																	<option>Lorem</option>
																</select>
															</div>
														
															<div class="span6 no-desktop">
																<label class="nomefield">Settore dell'attivit&agrave; lavorativa</label>
																<select>
																	<option>Seleziona</option>
																	<option>Lorem</option>
																</select>
															</div>
														</div>
														<div class="row-fluid">
															<label class="nomefield">Dettaglio settore</label>
															<select>
																<option>Seleziona</option>
																<option>Lorem</option>
															</select>
														</div>
														<div class="row-fluid">
															<div class="span6 no-desktop">
																<label class="nomefield">Stato di svolgimento</label>
																<select>
																	<option>Seleziona</option>
																	<option>Lorem</option>
																</select>
															</div>
															<div class="span6 no-desktop">
																<label class="nomefield">Provincia di svolgimento</label>
																<select>
																	<option>Seleziona</option>
																	<option>Lorem</option>
																</select>
															</div>
														</div>
														<div class="row-fluid">
															<div class="span6 no-desktop">
																<label class="nomefield">Reddito annuo netto</label>
																<select>
																	<option>Seleziona</option>
																	<option>Lorem</option>
																</select>
															</div>
															<div class="span6 no-desktop">
																<label class="nomefield">Dichiarazione origine del reddito</label>
																<select>
																	<option>Seleziona</option>
																	<option>Lorem</option>
																</select>
															</div>
														 </div>
														
														<div class="row-fluid">
														 <div class="tolltipclick span6 no-desktop">
															<label class="nomefield ico">Origine dei fondi</label>
																<span class="iconahelp">
																	<span class="closed">
																	<span id="documenti7" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'large')} else {removeUniqTooltip(event, this)}">
																	<span class="uniqTooltipPos"><a href="javascript:;"><img src="/img/ret/ico2or_help2.gif" class="help"></a>
																		<span class="uniqTooltipInnerHTML">lorem ipsum dolor sit </span>
																	</span>
																	</span>
																</span>
																</span>
															
															<select>
																<option>Seleziona</option>
																<option>Lorem</option>
															</select>
														</div>
														</div>
													</div>
												</div>
											</div>
											<div class="cartimpronta_lista cartimpronta_lista2">
											<img alt="" class="carttit" src="/img/ret/1px.gif">
											<div class="cartcont">
												<p onclick="javascript:ApriCartImpr(this);" onmouseover="javascript:this.style.cursor='pointer'" class="tit" style="cursor: pointer;"><span><strong class="titolo">EDVIGE BURDERI</strong></span><img alt="" class="bot" src="/img/ret/cartimpr_off.gif"></p>
												<div class="esteso" style="display: none;">
													<p><span class="flLeft margRightMedium">Per questa normativa sei tenuto a fornire alla banca alcune informazioni obbligatorie</span><a class="noborder" href="javascript:;" data-tooltip="lorem ipsum dolor"><img alt="" src="/img/ret/ico2or_help2.gif"></a></p>
													<div class="row-fluid">
														<h2 class="normaAntir">Profilo personale</h2>
													</div>
													<div class="row-fluid">
														<p>Persona politicamente esposta? <strong>Importante:</strong> prima di rispondere leggi la <span class="txthelp" data-tooltip="#ttHtmlContId3">definzione</span></p>									
															<span class="ttHtmlContent" id="ttHtmlContId3">Si intendono Persone Politicamente Esposti i cittadini di stati Comunitari od Extracomunitari che hannno ricoperto cariche politicamente rilevanti, o i loro parenti, ad esempio gli incarichi di : Capi di Stato, capi di Governo, vice Ministri, sottosegretari, parlamentari, membri delle Corti Supreme, delle Corti Costituzionali e di altri OrganiGiudiziari di alto livello, membri delle Corti dei Conti e dei Consigli di Amministrazione delle Banche Centrali, ambasciatori, incaricati di affari e gli Ufficiali di alto livello delle forze armate, membri degli Organi di Amministrazione, direzione o vigilanza delle imprese possedute dallo Stato, Funzionari/Organi titolari di posizioni di alto livello di enti comunitari e internazionali, familiari diretti di PEP e soggetti che notoriamente intrattengono stretti legami con i PEP (D.Lgs. n. 231/2007)</span>				
														<div class="row-fluid">		
															<label class="span2 radio"><input type="radio" name="pol"><span>no</span></label>
															<label class="span2 radio"><input type="radio" name="pol"><span>si</span></label>
														</div>	
													</div>
													<div class="row-fluid">
														<div class="span6 no-desktop">
															<label class="nomefield">Natura e scopo prevalente del rapporto</label>
															<select>
																<option>Seleziona</option>
																<option>Lorem</option>
															</select>
														</div>
													
														<div class="span6 no-desktop">
															<label class="nomefield">Seconda cittadinanza</label>
															<select>
																<option>Seleziona</option>
																<option>Lorem</option>
															</select>
														</div>
													</div>
													<div class="row-fluid">
														<h2 class="normaAntir">Profilo professionale e patrimoniale</h2>
													</div>
													<div class="row-fluid">
														<div class="span6 no-desktop">
															<label class="nomefield">Professione</label>
															<select>
																<option>Seleziona</option>
																<option>Lorem</option>
															</select>
														</div>
													
														<div class="span6 no-desktop">
															<label class="nomefield">Settore dell'attivit&agrave; lavorativa</label>
															<select>
																<option>Seleziona</option>
																<option>Lorem</option>
															</select>
														</div>
													</div>
													<div class="row-fluid">
														<label class="nomefield">Dettaglio settore</label>
														<select>
															<option>Seleziona</option>
															<option>Lorem</option>
														</select>
													</div>
													<div class="row-fluid">
														<div class="span6 no-desktop">
															<label class="nomefield">Stato di svolgimento</label>
															<select>
																<option>Seleziona</option>
																<option>Lorem</option>
															</select>
														</div>
														<div class="span6 no-desktop">
															<label class="nomefield">Provincia di svolgimento</label>
															<select>
																<option>Seleziona</option>
																<option>Lorem</option>
															</select>
														</div>
													</div>
													<div class="row-fluid">
														<div class="span6 no-desktop">
															<label class="nomefield">Reddito annuo netto</label>
															<select>
																<option>Seleziona</option>
																<option>Lorem</option>
															</select>
														</div>
														<div class="span6 no-desktop">
															<label class="nomefield">Dichiarazione origine del reddito</label>
															<select>
																<option>Seleziona</option>
																<option>Lorem</option>
															</select>
														</div>
													 </div>
													
													<div class="row-fluid">
													 <div class="tolltipclick span6 no-desktop">
														<label class="nomefield ico">Origine dei fondi</label>
															<span class="iconahelp">
																<span class="closed">
																<span id="documenti7" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'large')} else {removeUniqTooltip(event, this)}">
																<span class="uniqTooltipPos"><a href="javascript:;"><img src="/img/ret/ico2or_help2.gif" class="help"></a>
																	<span class="uniqTooltipInnerHTML">lorem ipsum dolor sit </span>
																</span>
																</span>
															</span>
															</span>
														
														<select>
															<option>Seleziona</option>
															<option>Lorem</option>
														</select>
													</div>
													</div>
												</div>
											</div>
										</div>
										</div>
									</div>
								<br class="clear">
								<div class="btnc aButtoncons" id="btnProsegui"><a href="javascript:;" class="nextstep first aButton flRight"><span>conferma e prosegui</span></a></div>
							</form>
						</div>
					</div>
				</div>
				<!--FINE PRIMO STEP RICHIESTA -->
				<!--SECONDO STEP RICHIESTA -->
				<div class="steprichiesta off" id="steprichiesta2">
					 <div class="steprichiestatit">
						<img src="/img/ret/str_tit_due_off.png" alt="Entra nella Digital Life">
						<h2 class="richiestaTit">Documentazione precontrattuale</h2>
						<span style="display:none" class="icospunta"><img src="/img/ret/ico2inf_spunta.png"></span>
					</div>
					<div class="formGeneric steprichiestacont">
						<div style="display:none" class="stepToggle" id="wraprichiesta2">
							<form id="formrichiesta2">
							<h3 class="graphTit colorBank">LEGGI L'INFORMATIVA PRECONTRATTUALE</h3>
							<p>Ti ricordiamo che &egrave; tuo diritto ricevere copia di tutta la documentazione contrattual, idonea per la stipula e per una ponderata valutazione del contenuto:</p>
							<ul>
								<li>questo diritto pu&ograve; essere sottoposto a termini e condizioni</li>
								<li>l'esercizio di tale diritto non impegna le parti a stipulare il contratto</li>
								<li>Leggi e firma tutte  le informative contrattuali</li>
							</ul>
							<p>Per procedere occorre aprire il documento e conferma la tua volont&agrave; di sottoscrivere il contratto.
							Ricorda di salvare i documenti sul tuo computer</p>
							<div class="row-fluid">
								<h2 class="normaAntir">Documentazione informativa precontrattuale Deposito Titoli (pdf 2119kb)* </h2>
							</div>
							
							
							<div class="pdfEmbedded">
								<div class="row-fluid">
									<a href="javascript:;" onclick="ableinput('#presaVisione');" class="embed">Leggi</a>
									<a href="javascript:;" class="flRight closePdfEmbedd" style="display:none">Chiudi</a>
								</div>
								<div class="pdfToOpen" style="display:none">
									<div id="pdf1" class="pdf"></div>
								</div>
								<div class="row-fluid tolltipclick disabledField">	
									<span class="closed">
										<span id="informative2" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed'&amp;&amp; $(this).find('input').is(':disabled')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}">
											 <span class="uniqTooltipPos">
												<a href="javascript:;" class="hovfincont"><span class="hovfin"></span><input type="checkbox" id="presaVisione" disabled=""></a>
												<span class="uniqTooltipInnerHTML">
													<p>per procedere occorre prendere visione della documentazione informativa</p>
												</span>
											 </span>
										</span>
									</span>
									<span class="text">Dichiaro di aver preso visione della documentazione/informativa precontrattuale che la Banca Popolare di Milano ha messo a mia disposizione</span>
								</div>
							</div>
							<div class="row-fluid">
								<h2 class="normaAntir">Altra documentazione di informativa precontrattuale Deposito titoli facoltativa </h2>
								<p>(Guida Camera di conciliazione della Consob)</p>
							</div>
							<div class="pdfEmbedded">
								<div class="row-fluid">
									<a href="javascript:;" class="embed">Leggi</a>
									<a href="javascript:;" class="flRight closePdfEmbedd" style="display:none">Chiudi</a>
								</div>
								<div class="pdfToOpen" style="display:none">
									<div id="pdf2" class="pdf"></div>
								</div>
							</div>
							<br class="clear">
							<div class="btnc aButtoncons" id="btnProsegui2"><a href="javascript:;" class="nextstep first aButton flRight" onclick="disableForm(this,'wraprichiesta1');disableForm(this,'wraprichiesta2');stepRichiesta(this);$('#modificaBtn,#btnProsegui,#btnProsegui2').hide()"><span>conferma e prosegui</span></a></div>
							</form>
						</div>
					</div>
				</div>
				<!--FINE SECONDO STEP RICHIESTA -->
				<!--TERZO STEP RICHIESTA -->
				<div class="steprichiesta off" id="steprichiesta3">
					 <div class="steprichiestatit">
						<img src="/img/ret/str_tit_tre_off.png" alt="Entra nella Digital Life">
						<h2 class="richiestaTit">Documentazione contrattuale</h2>
						<span style="display:none" class="icospunta"><img src="/img/ret/ico2inf_spunta.png"></span>
					</div>
					<div class="formGeneric steprichiestacont">
						<div class ="stepToggle" style="display:none" id="wraprichiesta3">
							<form id="formrichiesta2">
							<h3 class="graphTit colorBank">LEGGI LA DOCUMENTAZIONE CONTRATTUALE E DI TRASPARENZA</h3>
							<strong>Documentazione contrattuale e di trasparenza</strong>
							<p>Prendi visione della documentazione contrattuale e di trasparenza. Per procedere occorre aprire i documenti e conferma la tua volont&agrave; di sottoscrivere i contratti.Ti consigliamo di salvare i documenti sul tuo computer.</p>
							<div class="row-fluid">
								<h2 class="normaAntir">Normativa antiriciclaggio - adeguata verifica Deposito titoli* </h2>
							</div>
							<div class="pdfEmbedded">
								<div class="row-fluid">
									<a href="javascript:;" onclick="ableinput('#presaVisione3');" class="embed">Leggi</a>
									<a href="javascript:;" class="flRight closePdfEmbedd" style="display:none">Chiudi</a>
								</div>
								<div class="pdfToOpen" style="display:none">
									<div id="pdf3" class="pdf"></div>
								</div>
								<div class="row-fluid tolltipclick disabledField">	
									<span class="closed">
										<span id="informative3" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed'&amp;&amp; $(this).find('input').is(':disabled')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}">
											 <span class="uniqTooltipPos">
												<a href="javascript:;" class="hovfincont"><span class="hovfin"></span><input type="checkbox" id="presaVisione3" disabled=""></a>
												<span class="uniqTooltipInnerHTML">
													<p>per procedere occorre prendere visione della documentazione informativa</p>
												</span>
											 </span>
										</span>
									</span>
									<span class="text">Dichiaro di aver preso visione della documentazione/informativa precontrattuale che la Banca Popolare di Milano ha messo a mia disposizione</span>
								</div>
							</div>
							
							<div class="row-fluid">
								<h2 class="normaAntir">Modulo FATCA Deposito titoli* </h2>
							</div>
							<div class="pdfEmbedded">
								<div class="row-fluid">
									<a href="javascript:;" onclick="ableinput('#presaVisione4');" class="embed">Leggi</a>
									<a href="javascript:;" class="flRight closePdfEmbedd" style="display:none">Chiudi</a>
								</div>
								<div class="pdfToOpen" style="display:none">
									<div id="pdf4" class="pdf"></div>
								</div>
								<div class="row-fluid tolltipclick disabledField">	
									<span class="closed">
										<span id="informative4" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed'&amp;&amp; $(this).find('input').is(':disabled')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}">
											 <span class="uniqTooltipPos">
												<a href="javascript:;" class="hovfincont"><span class="hovfin"></span><input type="checkbox" id="presaVisione4" disabled=""></a>
												<span class="uniqTooltipInnerHTML">
													<p>per procedere occorre prendere visione della documentazione informativa</p>
												</span>
											 </span>
										</span>
									</span>
									<span class="text">Dichiaro di aver preso visione della documentazione/informativa precontrattuale che la Banca Popolare di Milano ha messo a mia disposizione</span>
								</div>
							</div>
							
							<div class="row-fluid">
								<h2 class="normaAntir">Modulo richiesta servizi amministrativi Deposito titoli*</h2>
							</div>
							<div class="pdfEmbedded">
								<div class="row-fluid">
									<a href="javascript:;" onclick="ableinput('#presaVisione5');" class="embed">Leggi</a>
									<a href="javascript:;" class="flRight closePdfEmbedd" style="display:none">Chiudi</a>
								</div>
								<div class="pdfToOpen" style="display:none">
									<div id="pdf5" class="pdf"></div>
								</div>
								<div class="row-fluid tolltipclick disabledField">	
									<span class="closed">
										<span id="informative5" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed'&amp;&amp; $(this).find('input').is(':disabled')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}">
											 <span class="uniqTooltipPos">
												<a href="javascript:;" class="hovfincont"><span class="hovfin"></span><input type="checkbox" id="presaVisione5" disabled=""></a>
												<span class="uniqTooltipInnerHTML">
													<p>per procedere occorre prendere visione della documentazione informativa</p>
												</span>
											 </span>
										</span>
									</span>
									<span class="text">Dichiaro di aver preso visione della documentazione/informativa precontrattuale che la Banca Popolare di Milano ha messo a mia disposizione</span>
								</div>
							</div>
							
							<div class="row-fluid">
								<h2 class="normaAntir">Condizioni generali per le prestazioni del SI Deposito titoli*</h2>
							</div>
							<div class="pdfEmbedded">
								<div class="row-fluid">
									<a href="javascript:;" onclick="ableinput('#presaVisione6');" class="embed">Leggi</a>
									<a href="javascript:;" class="flRight closePdfEmbedd" style="display:none">Chiudi</a>
								</div>
								<div class="pdfToOpen" style="display:none">
									<div id="pdf6" class="pdf"></div>
								</div>
								<div class="row-fluid tolltipclick disabledField">	
									<span class="closed">
										<span id="informative6" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed'&amp;&amp; $(this).find('input').is(':disabled')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}">
											 <span class="uniqTooltipPos">
												<a href="javascript:;" class="hovfincont"><span class="hovfin"></span><input type="checkbox" id="presaVisione6" disabled=""></a>
												<span class="uniqTooltipInnerHTML">
													<p>per procedere occorre prendere visione della documentazione informativa</p>
												</span>
											 </span>
										</span>
									</span>
									<span class="text">Dichiaro di aver preso visione della documentazione/informativa precontrattuale che la Banca Popolare di Milano ha messo a mia disposizione</span>
								</div>
							</div>
							
							<div class="row-fluid">
								<h2 class="normaAntir">Attestazione ricezione documenti*</h2>
							</div>
							<div class="pdfEmbedded">
								<div class="row-fluid">
									<a href="javascript:;" onclick="ableinput('#presaVisione7');" class="embed">Leggi</a>
									<a href="javascript:;" class="flRight closePdfEmbedd" style="display:none">Chiudi</a>
								</div>
								<div class="pdfToOpen" style="display:none">
									<div id="pdf7" class="pdf"></div>
								</div>
								<div class="row-fluid tolltipclick disabledField">	
									<span class="closed">
										<span id="informative7" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed'&amp;&amp; $(this).find('input').is(':disabled')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}">
											 <span class="uniqTooltipPos">
												<a href="javascript:;" class="hovfincont"><span class="hovfin"></span><input type="checkbox" id="presaVisione7" disabled=""></a>
												<span class="uniqTooltipInnerHTML">
													<p>per procedere occorre prendere visione della documentazione informativa</p>
												</span>
											 </span>
										</span>
									</span>
									<span class="text">Dichiaro di aver ricevuto tutti i documenti che compongono le condizioi Webank su supporto durevole adeguato al recupero della copia integrale e confrome degli stessi per tutta la durata dei rapporti che il cliente &egrave; interessato a concludere, di averli letti attentamente e di averne compreso i contenuti.</span>
								</div>
							</div>
							<p>Apponi la tua firma digitale inserendo Il PIN di firma e il Codice OTP che ricevuto via SMS sul tuo cellulare</p>
							<div class="row-fluid">
								<div class="span6">
									<label class="nomefield">PIN di firma</label>
									<input type="text" placeholder="inserisci PIN di firma">
									
								</div>
								<div class="span6">
									<label class="nomefield">Codice OTP <a class="flRight colorBank linkTodisable" href="#">Rinvia codice OTP</a></label>
									<input type="text" placeholder="inserisci il codice OTP">
								</div>
							</div>
							<div class="btnc aButtoncons" id="btnProsegui3"><a href="javascript:;" class="nextstep first aButton flRight" onclick="stepRichiesta(this);disableForm(this,'wraprichiesta3');$('#btnProsegui3').hide();"><span>prosegui</span></a></div>
							</form>
						</div>
					</div>
				</div>
				<!--FINE TERZO STEP RICHIESTA -->
				<!--QUARTO STEP RICHIESTA -->
				<div class="steprichiesta off" id="steprichiesta4">
					 <div class="steprichiestatit">
						<img src="/img/ret/str_tit_quattro_off.png" alt="Entra nella Digital Life">
						<h2 class="richiestaTit">Clausole vessatorie</h2>
						<span style="display:none" class="icospunta"><img src="/img/ret/ico2inf_spunta.png"></span>
					</div>
					<div class="formGeneric steprichiestacont">
						<div class ="stepToggle" style="display:none" id="wraprichiesta4">
							<form id="formrichiesta4">
							<h3 class="graphTit colorBank">LEGGI LE CLAUSOLE VESSATORIE</h3>
							<strong>Clausole vessatorie</strong>
							<p>Prendi visione della documentazione contrattuale e di trasparenza.
							   Per procedere occorre aprire i documenti e conferma la tua volont&agrave; di sottoscrivere i contratti.
								Ti consigliamo di salvare i documenti sul tuo computer.
							</p>
							<div class="row-fluid">
								<h2 class="normaAntir">Clausole vessatorie deposito titoli*</h2>
							</div>
							<div class="pdfEmbedded">
								<div class="row-fluid">
									<a href="javascript:;" onclick="ableinput('#presaVisione8');" class="embed">Leggi</a>
									<a href="javascript:;" class="flRight closePdfEmbedd" style="display:none">Chiudi</a>
								</div>
								<div class="pdfToOpen" style="display:none">
									<div id="pdf8" class="pdf"></div>
								</div>
								<div class="row-fluid tolltipclick disabledField">	
									<span class="closed">
										<span id="informative8" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed'&amp;&amp; $(this).find('input').is(':disabled')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}">
											 <span class="uniqTooltipPos">
												<a href="javascript:;" class="hovfincont"><span class="hovfin"></span><input type="checkbox" id="presaVisione8" disabled=""></a>
												<span class="uniqTooltipInnerHTML">
													<p>per procedere occorre prendere visione della documentazione informativa</p>
												</span>
											 </span>
										</span>
									</span>
									<span class="text">Dichiaro di aver ricevuto tutti i documenti che compongono le condizioi Webank su supporto durevole adeguato al recupero della copia integrale e confrome degli stessi per tutta la durata dei rapporti che il cliente &egrave; interessato a concludere, di averli letti attentamente e di averne compreso i contenuti.</span>
								</div>
							</div>
							<p>Apponi la tua firma digitale inserendo Il PIN di firma e il Codice OTP che ricevuto via SMS sul tuo cellulare</p>
							<div class="row-fluid">
								<div class="span6">
									<label class="nomefield">PIN di firma</label>
									<input type="text" placeholder="inserisci PIN di firma">
									
								</div>
								<div class="span6">
									<label class="nomefield">Codice OTP <a class="flRight colorBank linkTodisable" href="#">Rinvia codice OTP</a></label>
									<input type="text" placeholder="inserisci il codice OTP">
								</div>
							</div>
							<div class="btnc aButtoncons" id="btnProsegui4"><a href="javascript:;" class="nextstep first aButton flRight" onclick="stepRichiesta(this);disableForm(this,'wraprichiesta4');$('#btnProsegui4').hide()"><span>prosegui</span></a></div>
							</form>
						</div>
					</div>
				</div>
				<!--FINE QUARTO STEP RICHIESTA -->
				<!--QUARTO STEP RICHIESTA -->
				<div class="steprichiesta off last" id="steprichiesta5">
					 <div class="steprichiestatit">
						<img src="/img/ret/str_tit_cinque_off.png" alt="Entra nella Digital Life">
						<h2 class="richiestaTit">Modulo W9</h2>
						<span style="display:none" class="icospunta"><img src="/img/ret/ico2inf_spunta.png"></span>
					</div>
					<div class="formGeneric steprichiestacont">
						<div class ="stepToggle" style="display:none" id="wraprichiesta5">
							<form id="formrichiesta5">
							<h3 class="graphTit colorBank">LEGGI IL MODULO W9</h3>
							<strong>Modulo W9</strong>
							<p>Prendi visione della documentazione contrattuale e di trasparenza.
							Per procedere occorre aprire i documenti e conferma la tua volont&agrave; di sottoscrivere i contratti.
							Ti consigliamo di salvare i documenti sul tuo computer.</p>
							<div class="row-fluid">
								<h2 class="normaAntir">Modulo W9 deposito titoli*</h2>
							</div>
							<div class="pdfEmbedded">
								<div class="row-fluid">
									<a href="javascript:;" onclick="ableinput('#presaVisione9');" class="embed">Leggi</a>
									<a href="javascript:;" class="flRight closePdfEmbedd" style="display:none">Chiudi</a>
								</div>
								<div class="pdfToOpen" style="display:none">
									<div id="pdf9" class="pdf"></div>
								</div>
								<div class="row-fluid tolltipclick disabledField">	
									<span class="closed">
										<span id="informative9" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed'&amp;&amp; $(this).find('input').is(':disabled')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}">
											 <span class="uniqTooltipPos">
												<a href="javascript:;" class="hovfincont"><span class="hovfin"></span><input type="checkbox" id="presaVisione9" disabled=""></a>
												<span class="uniqTooltipInnerHTML">
													<p>per procedere occorre prendere visione della documentazione informativa</p>
												</span>
											 </span>
										</span>
									</span>
									<span class="text">Dichiaro di aver ricevuto tutti i documenti che compongono le condizioi Webank su supporto durevole adeguato al recupero della copia integrale e confrome degli stessi per tutta la durata dei rapporti che il cliente &egrave; interessato a concludere, di averli letti attentamente e di averne compreso i contenuti.</span>
								</div>
							</div>
							<p>Apponi la tua firma digitale inserendo Il PIN di firma e il Codice OTP che ricevuto via SMS sul tuo cellulare</p>
							<div class="row-fluid">
								<div class="span6">
									<label class="nomefield">PIN di firma</label>
									<input type="text" placeholder="inserisci PIN di firma">
									
								</div>
								<div class="span6">
									<label class="nomefield">Codice OTP <a class="flRight colorBank linkTodisable" href="#">Rinvia codice OTP</a></label>
									<input type="text" placeholder="inserisci il codice OTP">
								</div>
							</div>
							<div class="btnc aButtoncons" id="btnProsegui4"><a href="javascript:;" class="aButton flRight" onclick="$('.boxrichiesta').hide();$('#esitoDt').show()"><span>prosegui</span></a></div>
							
							</form>
						</div>
					</div>
				</div>
				<!--FINE QUARTO STEP RICHIESTA -->
				<div class="stepbottom"></div>
			</div>
			
			<div class="boxesito positivo" style="display:none" id="esitoDt">
				<div class="middle"><span class="imgCont"></span>
					<div class="text">
						<div class="row-fluid">
							<div class="span8">
								<strong>La richiesta di apertura conto &egrave; stata inviata</strong>
								<ol>
									<li><strong>Stampa e firma la documentazione contrattuale</strong></li>
									<li><strong>Invia la documentazione, insieme alla copia di un documento di identit&agrave; valido all'indirizzo:</strong><br><br>
									Webank,<br>
									c/o Banca Popolare di Milano<br>
									via Massaua 4<br>
									20146 Milano
									</li>
								</ol>
								<p>Se il conto corrente &egrave; cointestato, lo sar&agrave; anche il deposito titoli.
								In questo caso, consideriamo tutte le decisioni legate al deposito titoli congiuntamente da tutti gli intestatari.</p>
								<p>Il deposito titoli sar&agrave; aperto dopo che avremo ricevuto tutta la documentazione contrattuale</p>
							</div>
							<div class="span4">
								<div class="btnc aButtoncons"><a href="javascript:;" class="aButton flRight"><span>stampa tutti i documenti</span></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!--FUNZIONE DI ESEMPIO PER L ACORREZIONE ERRORI -->
<script type="text/javascript">	
	$(function () {
		
		$("#btnProsegui a").click(function () {
			// Check giroconto
			var errors = [],
				errorTab = $("#errorTab");
				consensoWrapper =  $("#consensoWrapper");
				inputUSA  =  $("#inputUsa1 input");
			
			if ($("#errorTab").find("input[type=radio]:checked").length === 0) {
				errors.push({ field: $("#errorTab"), text: "lorem ipsum" });
			}
			if ($("#consensoWrapper").find("input[type=radio]:checked").length === 0) {
				errors.push({ field: $("#consensoWrapper"), text: "lorem ipsum" });
			}
			if ($("#inputUsa1").find("input[type=radio]:checked").length === 0) {
				errors.push({ field: $("#inputUsa1"), text: "lorem ipsum" });
			}
			setHasErrors(errors, "#formrichiesta1");
			if (errors.length) {
				$(errors[0].field).find('input').trigger('focus');
			}
			else {
				
				disableForm(this,'contformrichiesta');
				stepRichiesta(this);
			}
			return (!errors.length);
		});
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
			}
		}
		
	$('#demoSetErrorBtn').bind('click', function() {
		var selectToCheck = $('#fatca1').find("select[id^='selectfacta']");
			selectToCheck.each(function() {
				if($(this).find('option:selected').text()=='ALGERIA')
				{
					alert('corrisponde ALGERIA');
				}
			})
	})
	
	
	};
	
</script>
<style type="text/css">
.pdf {
	width: 100%;
	height: 300px;
}

</style>
<div class="layeralert3 ui-draggable" id="layeralert2" style="display:none">
	<div class="head handle" onmouseover="" style="cursor: move;"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="closePopOverLayer('layeralert2')"></div>
	<div class="body"><div class="overflow" style="height: 297px; overflow-y: auto; width: 100%;">
		<p>Le “persone politicamente esposte” (PeP) sono: le persone fisiche residenti sul territorio nazionale, o in altri Stati comunitari o extracomunitari, che occupano o hanno occupato importanti cariche pubbliche nonché i loro familiari diretti o coloro con i quali tali persone intrattengono notoriamente stretti legami, individuate sulla base dei criteri di cui all’<strong>art. 1</strong> dell’<strong>Allegato tecnico</strong> del <strong>D.Lgs. n. 231/07</strong>, del <strong>Provvedimento Banca d’Italia</strong> del <strong>3 aprile 2013</strong>, nonché delle disposizioni attuative tempo per tempo vigenti in tema di adeguata verifica della clientela.<br><br></p><ol><li>Ai sensi dell’art. 1 dell’Allegato Tecnico, per persone fisiche che occupano o hanno occupato importanti cariche pubbliche s’intendono:<ol type="a"><li>i capi di Stato, i capi di Governo, i Ministri e i Vice Ministri o Sottosegretari;</li><li>i parlamentari;</li><li>i membri delle Corti supreme, delle Corti costituzionali e di altri organi giudiziari di alto livello le cui decisioni non sono generalmente soggette a ulteriore appello, salvo in circostanze eccezionali;</li><li>i membri delle Corti dei Conti e dei consigli di amministrazione delle banche centrali;</li><li>gli ambasciatori, gli incaricati d’affari e gli ufficiali di alto livello delle forze armate;</li><li>i membri degli organi di amministrazione, direzione o vigilanza delle imprese possedute dallo Stato.</li></ol></li></ol>In nessuna delle categorie sopra specificate rientrano i funzionari di livello medio o inferiore. Le categorie di cui alle lettere da a) a e) comprendono, laddove applicabili, le posizioni a livello europeo ed internazionale.<ol start="2"><li>Per familiari diretti s’intendono:<ol type="a"><li>il coniuge;</li><li>i figli e i loro coniugi;</li><li>coloro che nell’ultimo quinquennio hanno convissuto con i soggetti di cui alle precedenti lettere;</li><li>i genitori.</li></ol></li></ol><ol start="3"><li>Ai fini dell’individuazione dei soggetti con i quali le persone di cui al numero 1 intrattengono notoriamente stretti legami si fa riferimento a:<ol type="a"><li>qualsiasi persona fisica che ha notoriamente la titolarità effettiva congiunta di entità giuridiche o qualsiasi altra stretta relazione d’affari con una persona di cui al comma 1;</li><li>qualsiasi persona fisica che sia unica titolare effettiva di entità giuridiche o soggetti giuridici notoriamente creati di fatto a beneficio della persona di cui al comma 1.</li></ol></li></ol><p></p>		
	</div></div>
	<div class="foot"></div>
</div>
<h1>Movimenti</h1>

<form name="Movements">
	<input type="hidden" id="requestIdInPage" name="requestIdInPage" value="1329476625294">

	<!-- CODICE HTML LIBRERIE -->
	<style type="text/css">
		@import url(/wscmn/css/priv_datepicker.css);
	</style>
	<script src="/wscmn/js/priv_datepicker.js" type="text/javascript"></script>
	<script type="text/javascript" >
	var librerie = true,
		pathLibrerie = '/librerie/include/commons/ajax',
		pathMovimenti = '/movimenti',
		cgi_script = '/webankpri',
		today = new Date(),
		sixMonthsAgo = new Date().addMonths(-6),
		dpFilter = sixMonthsAgo.format('yyyymmdd')+'|'+today.format('yyyymmdd'),
		initPeriodo = '',
		initCategory = '';
	
	function clearMov() {
		var url = '/WsClearMovements.do',
			AjaxUrl = (!librerie)? cgi_script + '/banking' + url : pathLibrerie + pathMovimenti + url.replace(/\.do(\?)?/i, '.php$1'),
			parameters = {};
		jqAJAXCall('POST', 'json', AjaxUrl, null, null, parameters)
	}

	// Cancella i movimenti in sessione quando si esce dalla pagina
	$(window).on('unload', clearMov);
	</script>
	
	<table class="text01">
		<tr>
			<td>
				<ul>
					<li>In questa pagina puoi ricercare i <strong>movimenti gi&agrave; <span onmousemove="createUniqTooltip(event, this)" onmouseover="createUniqTooltip(event, this);" onmouseout="removeUniqTooltip(event,this);" class="uniqTooltipText" id="tooltip2">
						<span class="uniqTooltipPos">contabilizzati</span><span class="uniqTooltipInnerHTML">Si tratta dei movimenti gi&agrave; registrati dalla banca</span></span></strong>.</li>
					<li>Automaticamente sono proposti gli <strong>ultimi 15 movimenti</strong>. Per vedere altri movimenti utilizza la <strong>ricerca semplice</strong> o <strong>avanzata</strong>.</li>
					<li>Puoi cercare i movimenti effettuati nell'arco degli <strong>ultimi 6 mesi</strong>.</li>
				</ul>
			</td>
		</tr>
	</table>
	
	<div class="movimentiCont">
		<!--span class="expright"><a href="javascript:;" title="Customer Experience Lab, lascia il tuo parere"></a></span-->
		<span class="expleft"><a href="javascript:;" onclick="openPopGuida('/connect.php?page=tpl_popup_priv_book_guida.php');" title="Scopri come funziona la ricerca movimenti"><br/>Guida alla pagina</a></span>

		<br class="clear" />

		<table class="form01">
			<!-- Select conti -->
			<tr>
				<td class="uno">Conto</td>
				<td class="nopaddrl">
					<select class="grande" size="1" name="contonum" id="boxEsitoMovementsAccSel" onchange="; controlloConto(event, this);">
						<option value="00599 - 0000081080 - EUR" selected="selected" accountid="00599 - 0000081080 - EUR" accountidtoshow="CC 00599 0000081080 EUR">CC 00599 0000081080 EUR</option>
						<option value="00596 - 0000081080 - EUR" accountid="00599 - 0000081080 - EUR" accountidtoshow="CC 00599 0000081080 EUR">DEP 00596 0000081080 EUR</option>
					</select>
				</td>
				<td class="uno right">Saldo contabile</td>
				<td class="right importo" colspan="2"><strong id="saldoCont" class="large"></strong>&nbsp;</td>
			</tr>
			<!-- Dati conto -->
			<tr>
				<td class="uno">Intestato a</td>
				<td class="nopaddrl"><strong id="intest" class="large"></strong></td>
				<td class="uno right">Saldo disponibile</td>
				<td class="right importo">
					<a id="saldiDetail" onmousemove="loadSaldiDetail(event, this)" onmouseover="loadSaldiDetail(event, this)" onmouseout="removeUniqTooltip(event,this);" class="uniqTooltipText" id="liquiditaDep">
						<span class="uniqTooltipPos"><strong id="saldoDisp"></strong></span>
						<span class="uniqTooltipInnerHTML">
							<div class="CCsaldiText" style="display: none; ">
								<span class="CCdataT1"></span>: <strong class="CCsaldoT1"></strong>&nbsp;<br>
								<span class="CCdataT2"></span>: <strong class="CCsaldoT2"></strong>&nbsp;<br>
								<span class="CCdataT3"></span>: <strong class="CCsaldoT3"></strong>&nbsp;
							</div>
							<div class="CCsaldiLoading" style="display: none; ">
								<img src="/img/ret/ico2inf_loading.gif">&nbsp;caricamento in corso...</div>
						</span>
					</a>
					<span id="noSaldoDetail" style="display:none">n.d.</span>														
				</td>
				<td>					
					<span data-tooltip="#ttHtmlContId"><img src="/img/ret/ico1gr_calendariodettagli.gif"></span>
					<span class="ttHtmlContent" id="ttHtmlContId">
							<span>30/08/2013</span>: <strong>750,23</strong>&nbsp;€<br>
							<span>30/08/2013</span>: <strong>750,23</strong>&nbsp;€<br>
							<span>30/08/2013</span>: <strong>750,23</strong>&nbsp;€<br>				
					</span>										
				</td>
			</tr>
		</table>

		<p class="note right">Aggiornato alle hh.mm.ss del dd/mm/yyyy</p>
		
		<!-- Link al grafico dei movimenti -->
		<div class="linktomov"><a href="javascript:;" id="linkGrafMov" title="Grafici, i tuoi movimenti in un colpo d'occhio"></a></div>
		
		<!-- Box di errore compilazione form di ricerca -->
		<div id="errorsSection1" style="display:none;">
			<div class="boxtop"><img src="/img/ret/box_msgtop.jpg" border="0" alt=""></div>
			<div class="boxtxt">
				<p class="box_mess">
					<img src="/img/ret/img_or_form.gif" border="0" alt="" class="dx"/>
					<img src="/img/ret/box_attenzione.jpg" border="0" alt=""/>
					<strong id="error_box"><font color="white"> </font></strong>				
					<br/>
				</p>
				<br/>
				<ul class="alert" id="errorMessages1">
					<li>La data inserita non &egrave; corretta.</li>
					<li>La data iniziale della ricerca non pu&ograve; essere successiva a quella finale.</li>
					<li>Errore caricamento dati</li>
				</ul>
		
				<br class="clear"/>
			</div>
			<div class="boxbottom"><img src="/img/ret/box_msgbottom.jpg" border="0" alt=""></div>
			<br class="clear"/>
		</div>
	
		<!-- Form di ricerca -->
		<table class="form01 ricerca">
			<tr>
				<td class="first">Periodo</td>
				<td class="nopaddrl">
					<select id="period" name="period">
						<option value="15">Ultimi 15 movimenti</option>
						<option value="o">Oggi</option>
						<option value="s">Settimana in corso</option>
						<option value="m">Mese in corso</option>
						<option value="m3">Ultimi 3 mesi</option>
						<option value="m6">Ultimi 6 mesi</option>
					</select>
				</td>
				<td  class="uno">Tipo di movimenti</td>
				<td class="nopaddrl">
					<div class="nobor3">
						<select id="category1" name="category" style="width:150px">
							<option value="">Tutti</option>
							<option value="1">Stipendio/Pensione</option>
							<option value="2">Versamenti</option>
							<option value="3">Bonifici e giroconti</option>
							<option value="4">- Fondi e Sicav</option>
							<option value="5">- Compravendita titoli</option>
							<option value="6">- Cedole e dividendi</option>
							<option value="7">- Spese ed eventi amministrativi</option>
							<option value="8">Totale movimenti in titoli</option>
							<option value="11">Trasferimenti da deposito</option>
							<option value="49">Operatività overnight e prestito titoli</option>
							<option value="-2">Altri accrediti</option>
							<option value="23">Addebito assegni</option>
							<option value="24">Pagamenti</option>
							<option value="25">Bonifici e giroconti</option>
							<option value="26">RID e utenze</option>
							<option value="27">- Fondi e Sicav</option>
							<option value="28">- Compravendita titoli</option>
							<option value="29">- Cedole e dividendi</option>
							<option value="30">- Spese ed eventi amministrativi</option>
							<option value="31">Totale movimenti in titoli</option>
							<option value="32">Addebito carte di credito</option>
							<option value="33">Prelievi</option>
							<option value="34">- Pagamenti</option>
							<option value="35">- Bancomat</option>
							<option value="36">Canone piattaforma trading</option>
							<option value="37">Ricariche</option>
							<option value="38">Mutui e prestiti</option>
							<option value="39">Trasferimenti verso deposito</option>
							<option value="48">Operatività overnight e prestito titoli</option>
							<option value="-1">Altri addebiti</option>
						</select>
					</div>
					<div class="nobor3"><a id="btnSearchMov" href="javascript:;" class="btnevid1" title="Cerca"><img src="/img/ret/btn_left_sm1.gif" alt=""><span>cerca</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a></div></td>
				<td class="search"><div class="alright"><a id="openAdv1" class="openDet" href="javascript:;">Ricerca avanzata</a></div></td>
			 </tr>
			<tr style="display: none;" class="advsearch"> 
				<td colspan="4" class="paddleft"><span class="searchtxt"></span></td>
				<td class="search"><div class="alright"><a id="closeAdv1" class="openDet opened" href="javascript:;">Ricerca semplice</a></div></td>
			</tr>
			<tr style="display: none;" class="advsearch">
				<td colspan="5">
					<table width="100%" cellspacing="0" cellpadding="0" class="advsearchdet">
						<tr>
							<td id="lblDataDa1" class="labeldata">Periodo dal</td>
							<td class="nopaddrl">
								<div class="nobor3">
									<script type="text/javascript">DatePickerControl.createDp ('datepickerfrom1',dpFilter);</script></div></td>
							<td class="impmax">
								<span id="lblDataA1">a</span> <script type="text/javascript">DatePickerControl.createDp ('datepickerto1',dpFilter);</script></td>
							<td class="labeldata paddlf">Categoria</td>
							<td class="nopaddrl" width="420">
								<div class="nobor3"><select id="category2a1" style="width:100px"><option value="tutti">Entrate e uscite</option><option value="entrate">Entrate</option><option value="uscite">Uscite</option></select></div>
								<div class="nobor3">
									<select id="category2b" name="category" style="width:200px">
										<option value="">Tutti</option>
										<option value="1">Stipendio/Pensione</option>
										<option value="2">Versamenti</option>
										<option value="3">Bonifici e giroconti</option>
										<option value="4">- Fondi e Sicav</option>
										<option value="5">- Compravendita titoli</option>
										<option value="6">- Cedole e dividendi</option>
										<option value="7">- Spese ed eventi amministrativi</option>
										<option value="8">Totale movimenti in titoli</option>
										<option value="11">Trasferimenti da deposito</option>
										<option value="49">Operatività overnight e prestito titoli</option>
										<option value="-2">Altri accrediti</option>
										<option value="23">Addebito assegni</option>
										<option value="24">Pagamenti</option>
										<option value="25">Bonifici e giroconti</option>
										<option value="26">RID e utenze</option>
										<option value="27">- Fondi e Sicav</option>
										<option value="28">- Compravendita titoli</option>
										<option value="29">- Cedole e dividendi</option>
										<option value="30">- Spese ed eventi amministrativi</option>
										<option value="31">Totale movimenti in titoli</option>
										<option value="32">Addebito carte di credito</option>
										<option value="33">Prelievi</option>
										<option value="34">- Pagamenti</option>
										<option value="35">- Bancomat</option>
										<option value="36">Canone piattaforma trading</option>
										<option value="37">Ricariche</option>
										<option value="38">Mutui e prestiti</option>
										<option value="39">Trasferimenti verso deposito</option>
										<option value="48">Operatività overnight e prestito titoli</option>
										<option value="-1">Altri addebiti</option>
									</select>
								</div>
							</td>
						 </tr>
						 <tr>
							<td class="labeldata">Da</td>
							<td class="nopaddrl"><input id="minImport1" type="text" style="color: rgb(170, 170, 170);" onblur="if (this.value == '') {this.value='importo minimo'; this.style.color='#aaa';};" onfocus="if (this.value == 'importo minimo') {this.value=''; this.style.color='#515151';};" value="importo minimo" class="importo" name="text3"></td>
							<td class="impmax">a <input id="maxImport1" type="text" style="color: rgb(170, 170, 170);" onblur="if (this.value == '') {this.value='importo massimo'; this.style.color='#aaa';};" onfocus="if (this.value == 'importo massimo') {this.value=''; this.style.color='#515151';};" value="importo massimo" class="importo" name="text3"></td>
							<td colspan="2" class="paddlf">
									<div class="fltright" id="divEsclMovCD1" ><input id="esclMovCD1" type="checkbox" class="nobor3" 
										value="radiobutton" name="radiobutton"><span id="esclMovCDText1" class="txtinput">escludi movimenti 
										tra conto e deposito di risparmio</span></div>
							</td>
						 </tr>
						 <tr>
							<td colspan="5"><span class="separator"></span>
							<div class="alright"><a id="btnAdvSearchMov1" href="javascript:;" title="Cerca" class="btnevid1"><img alt="" src="/img/ret/btn_left_sm1.gif"><span>cerca</span><img alt="" src="/img/ret/btn_right_sm1.gif"></a></div>
							</td>
						 </tr>
		
					</table>
				 </td>
			 </tr>
		 </table>
		 
		<!-- Box nessun risultato -->
		<div id="resultsKO" style="display:none">
			<table cellpadding="0" cellspacing="0" border="0" class="TableF24">
				<tr>
					<td class="TopF24"><img src="/img/ret/f24_top.gif" border="0" hspace="0" alt="" /></td>
				</tr>
				<tr>
					<td class="BoxF24"><img src="/wscmn/img/ret/img_or_ricerca_ko.gif"  border="0" align="left" class="icoF24" alt="" />
						<span id="resultsKOmsg">La ricerca non ha prodotto alcun risultato. Modifica i parametri di ricerca.<span></td>
				</tr>
				<tr>
					<td class="BottomF24"><img src="/img/ret/f24_bottom.gif" border="0" alt="" /></td>
				</tr>
			</table>
		</div>
		
		<!-- Risultati-->
		<div id="resultsOK">
			<!-- Box bottoni interazione con i risultati -->
			<div class="tithelp">
				<div class="helpleft"><span id="numResMsg"></span></div> 
				<div class="resPagflex">
					<div class="resPagRightfixbg"></div>
					<div class="resPagRight flex">
						<div class="pulsantiera">
							<a id="filtermov1" class="filtermov" href="javascript:;"></a><span class="separator"></span>
							<ul id="filtermenu1" class="filtermenu movmenu" style="display:none">
								<li><a href="javascript:;">Mostra solo i movimenti selezionati</a></li>
								<li class="last"><a href="javascript:;">Mostra tutti i movimenti</a></li>
							</ul>
							<a id="zoommov1" class="zoommov" href="javascript:;" title="Vedi i dettagli dei movimenti elencati in pagina"></a><span class="separator"></span>
							<ul id="zoommenu1" class="zoommenu movmenu" style="display:none">
								<li><a href="javascript:;">Apri tutti</a></li>
								<li class="last"><a href="javascript:;">Chiudi tutti</a></li>
							</ul>
							<a class="excelmov" href="#" target="_blank" title="Esporta tutti i movimenti che hai cercato"></a><span class="separator"></span>
							<a class="printmov" href="#" target="_blank" title="Stampa tutti i movimenti che hai cercato"></a>
						</div>
					</div>
					<a href="" class="helpContestuale"></a>
				</div>
			</div>
			<br class="clear"/>
		
			<!-- Tabella risultati -->
			<table id="data-grid-movimenti" cellspacing="0" cellpadding="0" border="0" class="dettTable">
				<thead>
					<tr>
						<th class="sort left" id="th-dataC" width="78"><span></span>DATA<BR/>CONTABILE</th>
						<th class="sort left" id="th-VTa" width="73"><span></span>DATA<BR/>VALUTA</th>
						<th class="sort left" id="th-descB" width="189"><span class="top"></span>DESCRIZIONE</th>
						<th class="sort" id="th-ent" width="106"><span class="top"></span>ENTRATE</th>
						<th class="sort" id="th-usc" width="106"><span class="top"></span>USCITE</th>
						<th id="th-fee" class="nobordlr">PDF</th>
						<th id="th-fee" class="nobordlr"><input id="selTutti" type="checkbox" name="selTutti"/></th>
					</tr>
				</thead>
				<tbody>
				</tbody>
				<tfoot>
					<tr class="cashflow">
						<td class="right" colspan="3">Totale entrate e uscite</td>
						<td id="totMovEnt" class="right posi">0,00</td>
						<td id="totMovUsc" class="right nega">-0,00</td>
						<td colspan="2">&nbsp;</td>
					</tr>
					<tr class="cashflow2">
						<td class="right" colspan="3">Totale entrate e uscite</td>
						<td id="totMovEnt" class="right posi">0,00</td>
						<td id="totMovUsc" class="right nega">-0,00</td>
						<td colspan="2">&nbsp;</td>
					</tr>
					<tr class="totali">
						<td class="right" colspan="3">&nbsp;</td>
						<td id="totMovGen" class="center" colspan="2">-0,00</td>
						<td colspan="2">&nbsp;</td>
					</tr>
				</tfoot>
			</table>
	
			<!-- Box bottoni interazione con i risultati -->
			<div class="resPagflex">
				<div class="resPagRightfixbg ie"></div>
				<div class="resPagRight flex bottom">
					<div class="pulsantiera">
						<a id="filtermov2" class="filtermov" href="javascript:;"></a><span class="separator"></span>
						<ul id="filtermenu2" class="filtermenu movmenu" style="display:none">
							<li><a href="javascript:;">Mostra solo i movimenti selezionati</a></li>
							<li class="last"><a href="javascript:;">Mostra tutti i movimenti</a></li>
						</ul>
						<a id="zoommov2" class="zoommov" href="javascript:;" title="Vedi i dettagli dei movimenti elencati in pagina"></a><span class="separator"></span>
						<ul id="zoommenu2" class="zoommenu movmenu" style="display:none">
							<li><a href="javascript:;">Mostra solo i movimenti selezionati</a></li>
							<li class="last"><a href="javascript:;">Mostra tutti i movimenti</a></li>
						</ul>
						<a class="excelmov" href="#" target="_blank" title="Esporta tutti i movimenti che hai cercato"></a><span class="separator"></span>
						<a class="printmov" href="#" target="_blank" title="Stampa tutti i movimenti che hai cercato"></a>
					</div>
				</div>
			</div>
			
			<br class="clear" />
			
			<div id="bottomSearch" class="selectMov" style="display:block">
				<span class="formseltit">Sono mostrati&nbsp;<strong class="numMov"></strong>&nbsp;di&nbsp;<strong id="totMov"></strong>&nbsp;movimenti</span>
				<table class="form01 nopadd">
					<tr>
						<td class="rappWt">
							<!-- Nuova ricerca -->
							<div class="alright"><a id="btnAdvSearch2" title="Cerca" class="btnevid1" href="#1"><img alt="" src="/img/ret/btn_left_sm1.gif"><span>nuova ricerca</span><img alt="" src="/img/ret/btn_right_sm1.gif"></a></div>

							<!-- Select/bottone mostra altri risultati -->
							<div id="tdSceltaRappMov">
								<div id="sceltaRapporto" class="selectRapp">




									<a href="javascript:;" class="inputOption inputSx">
										<span class="inputDx">
											<span class="input">
												Visualizza altri 50 movimenti precedenti
											</span>
										</span>
									</a>
									<div class="selectorSpacer" style="display: none;"></div>
									<div class="selector" style="display: none;">
									
										<a value="15" href="javascript:;" class="selectorOptions first">
											<strong><span class="strong">AGGIUNGI alla ricerca altri 15</span> movimenti precedenti</strong></a>
										<a value="30" href="javascript:;" class="selectorOptions">
											<strong><span class="strong">AGGIUNGI alla ricerca altri 30</span> movimenti precedenti</strong></a>
										<a value="50" href="javascript:;" class="selectorOptions selected">
											<strong><span class="strong">AGGIUNGI alla ricerca altri 50</span> movimenti precedenti</strong></a>
									</div>
								</div>
								<div class="clear"></div>
								<div id="btnSceltaRappMov" style="display: none;">&nbsp;</div>
							</div>
							<div id="selectRappdisabled" class="selectRappdisabled" style="display:none"></div>
							<div class="clear"></div>
						</td>
					</tr>
				</table>
				<input id="sceltaRapportoVal" type="hidden" class="value" name="rapporto" value="50"/>
				<br />
			</div>	
		</div>
		
		<!-- Box di errore compilazione form di ricerca -->
		<div id="errorsSection2" style="display:none;">
			<div class="boxtop"><img src="/img/ret/box_msgtop.jpg" border="0" alt=""></div>
			<div class="boxtxt">
				<p class="box_mess">
					<img src="/img/ret/img_or_form.gif" border="0" alt="" class="dx"/>
					<img src="/img/ret/box_attenzione.jpg" border="0" alt=""/>
					<strong id="error_box"><font color="white"> </font></strong>				
					<br/>
				</p>
				<br/>
				<ul class="alert" id="errorMessages2">
					<li>La data inserita non &egrave; corretta.</li>
					<li>La data iniziale della ricerca non pu&ograve; essere successiva a quella finale.</li>
					<li>Errore caricamento dati</li>
				</ul>
		
				<br class="clear"/>
			</div>
			<div class="boxbottom"><img src="/img/ret/box_msgbottom.jpg" border="0" alt=""></div>
			<br class="clear"/>
		</div>
		
		<!-- Form di ricerca -->
		<table id="advSearchForm2" class="form01 ricerca" style="display: none;">
			<tr class="advsearch">
				<td colspan="5">
					<table width="100%" cellspacing="0" cellpadding="0" class="advsearchdet">
						<tr>
							<td id="lblDataDa2" class="labeldata">Periodo dal</td>
							<td class="nopaddrl">
								<div class="nobor3">
									<script type="text/javascript">DatePickerControl.createDp ('datepickerfrom2',dpFilter);</script></div></td>
							<td class="impmax">
								<span id="lblDataA2">a</span> <script type="text/javascript">DatePickerControl.createDp ('datepickerto2',dpFilter);</script></td>
							<td class="labeldata paddlf">Categoria</td>
							<td class="nopaddrl" width="420">
								<div class="nobor3"><select id="category2a2" style="width:100px"><option value="tutti">Entrate e uscite</option><option value="entrate">Entrate</option><option value="uscite">Uscite</option></select></div>
								<div class="nobor3">
									<select id="category2b2" name="category" style="width:200px">
										<option value="">Tutti</option>
										<option value="1">Stipendio/Pensione</option>
										<option value="2">Versamenti</option>
										<option value="3">Bonifici e giroconti</option>
										<option value="4">- Fondi e Sicav</option>
										<option value="5">- Compravendita titoli</option>
										<option value="6">- Cedole e dividendi</option>
										<option value="7">- Spese ed eventi amministrativi</option>
										<option value="8">Totale movimenti in titoli</option>
										<option value="11">Trasferimenti da deposito</option>
										<option value="49">Operatività overnight e prestito titoli</option>
										<option value="-2">Altri accrediti</option>
										<option value="23">Addebito assegni</option>
										<option value="24">Pagamenti</option>
										<option value="25">Bonifici e giroconti</option>
										<option value="26">RID e utenze</option>
										<option value="27">- Fondi e Sicav</option>
										<option value="28">- Compravendita titoli</option>
										<option value="29">- Cedole e dividendi</option>
										<option value="30">- Spese ed eventi amministrativi</option>
										<option value="31">Totale movimenti in titoli</option>
										<option value="32">Addebito carte di credito</option>
										<option value="33">Prelievi</option>
										<option value="34">- Pagamenti</option>
										<option value="35">- Bancomat</option>
										<option value="36">Canone piattaforma trading</option>
										<option value="37">Ricariche</option>
										<option value="38">Mutui e prestiti</option>
										<option value="39">Trasferimenti verso deposito</option>
										<option value="48">Operatività overnight e prestito titoli</option>
										<option value="-1">Altri addebiti</option>
									</select>
								</div>
							</td>
						 </tr>
						 
						 <tr>
							<td class="labeldata">Da</td>
							<td class="nopaddrl"><input id="minImport2" type="text" style="color: rgb(170, 170, 170);" onblur="if (this.value == '') {this.value='importo minimo'; this.style.color='#aaa';};" onfocus="if (this.value == 'importo minimo') {this.value=''; this.style.color='#515151';};" value="importo minimo" class="importo" name="text3"></td>
							<td class="impmax">a <input id="maxImport2" type="text" style="color: rgb(170, 170, 170);" onblur="if (this.value == '') {this.value='importo massimo'; this.style.color='#aaa';};" onfocus="if (this.value == 'importo massimo') {this.value=''; this.style.color='#515151';};" value="importo massimo" class="importo" name="text3"></td>
							<td colspan="2" class="paddlf">
									<div class="fltright" id="divEsclMovCD2"><input id="esclMovCD2" type="checkbox" class="nobor3" value="radiobutton" 
										name="radiobutton"><span id="esclMovCDText2" class="txtinput">escludi movimenti tra conto e deposito 
										di risparmio</span></div>
							</td>
						 </tr>
						 <tr>
							<td colspan="5"><span class="separator"></span>
								<div class="alright"><a id="btnAdvSearchMov2" href="javascript:;" title="Cerca" class="btnevid1"><img alt="" src="/img/ret/btn_left_sm1.gif"><span>cerca</span><img alt="" src="/img/ret/btn_right_sm1.gif"></a></div>
							</td>
						 </tr>
		
					</table>
				 </td>
			 </tr>
		 </table>	
		
		<br/>
		<table class="condiz2Mov">
			<tbody>
				<tr>
					<td><a id="btnMSmoneyMov" class="formmsmon" href="javascript:;" title="Formato MS Money" target="_blank">Formato MS Money</a>
						<a id="btnStampaPaginaMov" class="print" href="javascript:;" title="Stampa pagina">Stampa pagina</a></td>
				</tr>
			</tbody>
		</table>
	</div>
	
	<!-- |FINE| CODICE HTML LIBRERIE -->
</form>

<br />

<!-- OVERLAYER PIU' RISULTATI-->
<div class="layerMovimentiGrafici" id="layergrafici" style="display: none;">
	<div class="layerTop"><img src="/wscmn/img/ret/tit_layer_movimenti.gif" /><img src="/wscmn/img/ico1gr_closelayer.gif" alt="chiudi" class="closelayer" onclick="closePopOverLayer('layergrafici')"/></div>
	<div class="layerbody">
		<a href="javascript:;" class="slidelayerleft"></a>
		<a href="javascript:;" class="slidelayerright"></a>
		<div class="layerboxgrafici">
			<div class="layerboxgraficitop"><span></span><a class="helpContestuale" href="javascript:;"></a></div>
			<div class="layerboxgraficimdl">
				<div class="mdlleft"><span>Totale entrate:</span><br class="clear" /><span class="posi">XX.XXX.XXX,XX &euro;</span><br class="clear"/>
					<div class="graficospko" title="Non sono presenti movimenti in entrata" alt="Non sono presenti movimenti in entrata"></div>
					<div id="graficosp1" class="graficosp"></div>
					<div class="legendaspCont">
						<a href="javascript:;" class="slideup"></a>
						<div class="legendasp">
							<div>
								<ul>
								</ul>
							</div>
						</div>
						<a href="javascript:;" class="slidedown"></a>
					</div>
				</div>
				<div class="mdlcenter down"><span>Differenza</span><br class="clear" /><span class="differenza">-XX.XXX.XXX,XX &euro;</span></div>
				<div class="mdlright"><span>Totale uscite:</span><br class="clear" /><span class="nega">-XX.XXX.XXX,XX &euro;</span>
					<br class="clear">
					<div class="graficospko" title="Non sono presenti movimenti in uscita" alt="Non sono presenti movimenti in uscita"></div>
					<div id="graficosp2" class="graficosp"></div>
					<div class="legendaspCont">
						<a href="javascript:;" class="slideup"></a>
						<div class="legendasp">
							<div>
								<ul>
								</ul>
							</div>
						</div>
						<a href="javascript:;" class="slidedown"></a>
					</div>
				</div>
				<br class="clear"/>
				<div class="filettomdl"><img src="/wscmn/img/str_filetto_overlmov.gif" /></div>
				<br class="clear"/>
				<img src="/wscmn/img/tit_andamento_saldo.gif" alt="andamento saldo contabile" class="titololegenda">
				<ul class="legendabottom">
					<li><img src="/wscmn/img/ret/ico1gr_legendamov_18a018.gif" alt=""/><span>Entrata</span></li>
					<li><img src="/wscmn/img/ret/ico1gr_legendamov_004800.gif" alt=""/><span title="Sono tutte le entrate contabilizzate nella giornata indicata">Pi&ugrave; entrate</span></li>
					<li><img src="/wscmn/img/ret/ico1gr_legendamov_d82818.gif" alt=""/><span>Uscita</span></li>
					<li><img src="/wscmn/img/ret/ico1gr_legendamov_800000.gif" alt=""/><span title="Sono tutte le uscite contabilizzate nella giornata indicata">Pi&ugrave; uscite</span></li>
					<li><img src="/wscmn/img/ret/ico1gr_legendamov_27d3ed.gif" alt=""/><span>Saldo contabile</span></li>
				</ul>
				<div id="chartmov"></div>
			</div>
			<div class="layerboxgraficibottom"></div>
		</div>
	</div>
	<div class="layerfoot"></div>
</div>
<!-- FINE  OVERLAYER PIU' RISULTATI-->

<script src="/wscmn/js/amcharts/amcharts.js?b=<%= revision %>" type="text/javascript"></script>
<script src="/wscmn/js/movimenti.js?a=1" type="text/javascript"></script>
<h1>Elenco trasferimenti</h1>

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
				</ul>
			</td>
		</tr>
	</table>
	
	<div class="movimentiCont">
		<div class="borderFormRounded searchFilter">
			<div class="formGeneric">
				<form>
					<div class="row-fluid">
						<div class="span6">
							<label class="nomefield">Lorem ipsum</label>
								<select class="withIco">
									<option>lorem</option>
									<option>lorem</option>
									<option>lorem</option>
								</select>
							<a href="#" title="Lorem ipsum" class="flRight"><img src="/img/ico1gr_preferito.gif" alt="Lorem ipsum"></a>
						</div>

						<div class="span6">
							<label class="nomefield">Lorem ipsum</label>
							<a href="#1">000000</a>
						</div>
					</div>
					<div id="ricSempl">
						<div class="row-fluid">
							<div class="span6">
								<label class="nomefield">Lorem ipsum</label>
								<select>
									<option>lorem</option>
									<option>lorem</option>
									<option>lorem</option>
								</select>						
							</div>
							<div class="span6">
								<label class="nomefield">Lorem ipsum</label>
								<select>
									<option>lorem</option>
									<option>lorem</option>
									<option>lorem</option>
								</select>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span12">
								<a href="javascript:;" onclick="$('#ricSempl').hide();$('#ricAvanz').show();" title="Ricerca avanzata">Ricerca avanzata</a> 
							</div>					
						</div>
					</div>
					<div id="ricAvanz" style="display:none">
						<div class="row-fluid">
							<div class="span6">
								<label class="nomefield">Lorem ipsum</label>
								<div class="row-fluid">	
									<div class="span1">
										<label id="dataDal">dal</label>
									</div>
									<div class="span4">
										<input type="text" value="10/02/2013" size="15" maxlength="10" class="withIco hasDatepicker" name="queryDateFrom" id="dat1"><img class="ui-datepicker-trigger" src="/img/btn_pickdate_priv.gif" alt="..." title="...">
									</div>
									<div class="span2">&nbsp;</div>
									<div class="span1">
										<label id="dataDal">al</label>
									</div>
									<div class="span4">	
										<input type="text" value="12/03/2013" size="15" maxlength="10" class="withIco hasDatepicker" name="queryDateTo" id="dat2"><img class="ui-datepicker-trigger" src="/img/btn_pickdate_priv.gif" alt="..." title="...">
									</div>	
								</div>
							</div>
							<div class="span6">
								<label class="nomefield">Lorem ipsum</label>
								<select>
									<option>lorem</option>
									<option>lorem</option>
									<option>lorem</option>
								</select>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span6">
								<label class="nomefield">Lorem ipsum</label>
								<div class="row-fluid">	
									<div class="span1">
										<label id="dataDal">da</label>
									</div>
									<div class="span4">
										<input type="text" value="" size="15" class="" placeholder="Importo minimo">
									</div>
									<div class="span2">&nbsp;</div>
									<div class="span1">
										<label id="dataDal">a</label>
									</div>
									<div class="span4">	
										<input type="text" value="" size="15" class="" placeholder="Importo massimo">
									</div>	
								</div>
							</div>					
						</div>	
						<div class="row-fluid">
							<div class="span12">
								<a href="javascript:;" onclick="$('#ricAvanz').hide();$('#ricSempl').show();"><img title="Indietro" alt="Indietro" src="/img/ret/ico1gr_back_form.gif"></a>
							</div>					
						</div>			
					</div>			
				</form>
				<div class="btnc aButtoncons"><a class="spButton spGreen1" href="javascript:;"><span>lorem ipsum</span></a></div>
			</div>
		</div>

		<br class="clear" /><br />

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
<!-- FINE  OVERLAYER PIU' RISULTATI--->

<script src="/wscmn/js/amcharts/amcharts.js?b=<%= revision %>" type="text/javascript"></script>
<script src="/wscmn/js/movimenti.js?a=1" type="text/javascript"></script>
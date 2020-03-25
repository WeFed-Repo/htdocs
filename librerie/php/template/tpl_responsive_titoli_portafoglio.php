<?php if ($bank == "webank") { ?>
<script type="text/javascript">
	/* CREAZIONE - Codice per creare delle select fittizie stilizzate uguale ad as is */
	addEvent(window, 'load', function() {
		createSelectRapp('sceltaRapporto', 'sceltaRapportoVal', sceltaRapportoFunc);
		createSelectRapp('sceltaSottoRapporto', 'sceltaSottoRapportoVal', sceltaSottoRapportoFunc);
	});

	function sceltaRapportoFunc (option) {
		// Testo selezione: option.text
		// Valore selezione: option.value
		// alert('Hai selezionato: ' + option.text + ' (' + option.value + ')')
	}

	function sceltaSottoRapportoFunc (option) {
		// Testo selezione: option.text
		// Valore selezione: option.value
		// alert('Hai selezionato: ' + option.text + ' (' + option.value + ')')
	}
	/* |FINE| CREAZIONE - Codice per creare delle select fittizie stilizzate */
</script>
<script>
	//inizializzazione dei tab-accordion
	//TRASFORMA IL TAB DI CONTENUTO IN ACCORDION SU MOBILE
	//possono coesistere più gruppo di tab/accordion in pagina
	//parametri: id contenitore e incice tab che deve essere aperto al load

	$(function(){
		resizeTab('secondTab',0);
	});
</script>


<script>
//esempio di loading su oggetto -- è sufficiente applicare la classe loading all'oggetto per poi toglierla quando arrivano i dati
$(function(){
	$('#testLoading').click(function() {
		$('#tablePortafoglioWT').addClass('loading');
		setTimeout(function() {$('#tablePortafoglioWT').removeClass('loading')},1000)
	});
	
	$('#main').addClass('wrapper-large');
})
</script>




<h2>Titoli in portafoglio</h2>

<section>
	<form class="formGenerico borderFormRounded output" role="form" id="form02">
		 <!--caso con un solo deposito titoli -->
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-5">
					<label class="control-label-output">Deposito titoli</label>
					<span class="output txthelp" data-toggle="tooltip">1099/1032180/0</span>
					<div class="htmlTooltip">
						MARIO ROSSI
					</div>
				</div>
				<div class="col-xs-8 col-sm-3">
					<label class="control-label-output">Totale liquidit&agrave;</label>
					<span class="output txthelp" data-toggle="tooltip">4.213,46 al gg/mm/aaaa</span>
					<div class="htmlTooltip">
						08/07/2016: <strong><span id="tot_investibile_1">4.213,46</span>&nbsp;€</strong>
						<br>11/07/2016: <strong><span id="tot_investibile_1a">4.213,46</span>&nbsp;€</strong>
						<br>12/07/2016: <strong><span id="tot_investibile_2">4.213,46</span>&nbsp;€</strong>
						<br>13/07/2016: <strong><span id="tot_investibile_3">4.213,46</span>&nbsp;€</strong>
						<br>14/07/2016: <strong><span id="tot_investibile_4">4.213,46</span>&nbsp;€</strong>
					</div>
				</div>
				<div class="col-xs-2 col-sm-2 no-label">
					<a href="#1" class="no-underline btn-icon" data-toggle="modal" data-target="#layerDettSaldi"><i class="icon icon-2x icon-zoom_piu_filled"></i ></a>
				</div>
			</div>
		</div>
	 <!--caso con selettore rapporto -->
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-5">
					<label class="control-label-output">Deposito titoli</label>
					<div id="sceltaRapporto" class="selectRapp">
					<input id="sceltaRapportoVal" type="hidden" class="value" name="rapporto" value="xxxaaaaaa"/>
					<a href="javascript:;" class="inputOption inputSx form-control">
						<span class="inputDx">
							<span class="input">
								xxx/aaaaaa
							</span>
						</span>
					</a>
					<div class="selector" style="display: none;">
						<span class="group">
							<a value="xxxaaaaaa" href="javascript:;" class="selectorOptions selected">
							<strong>xxx/aaaaaa</strong><br/>
							Nome Nome Cognome Cognome1</a>
						</span>
						<span class="group">
							<a value="xxxbbbbbb" href="javascript:;" class="selectorOptions">
							<strong>xxx/bbbbbb</strong><br/>
							Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2</a>
						</span>
						<span class="group">
							<a value="xxxcccccc" href="javascript:;" class="selectorOptions">
							<strong>xxx/cccccc</strong><br/>
							Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
							Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
							Nome Nome Cognome Cognome5</a>
						</span>
					</div>
				</div>

				</div>
				<div class="col-xs-8 col-sm-3">
					<label class="control-label-output">Totale liquidit&agrave;</label>
					<span class="output txthelp" data-toggle="tooltip">4.213,46 al gg/mm/aaaa</span>
					<div class="htmlTooltip">
						08/07/2016: <strong><span id="tot_investibile_1">4.213,46</span>&nbsp;€</strong>
						<br>11/07/2016: <strong><span id="tot_investibile_1a">4.213,46</span>&nbsp;€</strong>
						<br>12/07/2016: <strong><span id="tot_investibile_2">4.213,46</span>&nbsp;€</strong>
						<br>13/07/2016: <strong><span id="tot_investibile_3">4.213,46</span>&nbsp;€</strong>
						<br>14/07/2016: <strong><span id="tot_investibile_4">4.213,46</span>&nbsp;€</strong>
					</div>
				</div>
				<div class="col-xs-2 col-sm-2 no-label">
					<a href="#1" class="no-underline btn-icon"><i class="icon icon-2x icon-zoom_piu_filled"></i ></a>
				</div>
			</div>
		</div>
		
         <!--caso con selettore rapporto -->
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-5">
					<label class="control-label-output">Deposito titoli</label>
					<div id="sceltaSottoRapporto" class="selectRapp">
					<input id="sceltaSottoRapportoVal" type="hidden" class="value" name="sottorapporto" value="xxxaaaaaa"/>
					<a href="javascript:;" class="inputOption inputSx form-control">
						<span class="inputDx">
							<span class="input">
								xxx/aaaaaa
							</span>
						</span>
					</a>
					<div class="selector" style="display: none;">
						<span class="group">
							<a value="xxxaaaaaa" href="javascript:;" class="selectorOptions first selected">
							<strong>xxx/aaaaaa</strong><br/>
							Nome Nome Cognome Cognome1</a>
						</span>
						<span class="group">
							<a value="xxxbbbbbb" href="javascript:;" class="selectorOptions">
							<strong>xxx/bbbbbb - tutti i sottodepositi</strong><br/>
							Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2</a>
							<a value="xxxbbbbbb0" href="javascript:;" class="selectorOptions">
							<strong>xxx/bbbbbb/0</strong><br/>
							Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2</a>
							<a value="xxxbbbbbb1" href="javascript:;" class="selectorOptions">
							<strong>xxx/bbbbbb/1</strong><br/>
							Nome Nome Cognome Cognome1</a>
							<a value="xxxbbbbbb2" href="javascript:;" class="selectorOptions">
							<strong>xxx/bbbbbb/2</strong><br/>
							Nome Nome Cognome Cognome2</a>
						</span>
						<span class="group">
							<a value="xxxcccccc" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc</strong><br/>
								Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
								Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
								Nome Nome Cognome Cognome5</a>
							<a value="xxxcccccc0" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/0</strong><br/>
								Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
								Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
								Nome Nome Cognome Cognome5</a>
							<a value="xxxcccccc1" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/1</strong><br/>
								Nome Nome Cognome Cognome1</a>
							<a value="xxxcccccc2" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/2</strong><br/>
								Nome Nome Cognome Cognome2</a>
							<a value="xxxcccccc3" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/3</strong><br/>
								Nome Nome Cognome Cognome3</a>
							<a value="xxxcccccc4" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/4</strong><br/>
								Nome Nome Cognome Cognome4</a>
							<a value="xxxcccccc5" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/5</strong><br/>
								Nome Nome Cognome Cognome5</a>
						</span>
					</div>
				</div>

				</div>
				<div class="col-xs-8 col-sm-3">
					<label class="control-label-output">Totale liquidit&agrave;</label>
					<span class="output txthelp" data-toggle="tooltip">4.213,46 al gg/mm/aaaa</span>
					<div class="htmlTooltip">
						08/07/2016: <strong><span id="tot_investibile_1">4.213,46</span>&nbsp;€</strong>
						<br>11/07/2016: <strong><span id="tot_investibile_1a">4.213,46</span>&nbsp;€</strong>
						<br>12/07/2016: <strong><span id="tot_investibile_2">4.213,46</span>&nbsp;€</strong>
						<br>13/07/2016: <strong><span id="tot_investibile_3">4.213,46</span>&nbsp;€</strong>
						<br>14/07/2016: <strong><span id="tot_investibile_4">4.213,46</span>&nbsp;€</strong>
					</div>
				</div>
				<div class="col-xs-2 col-sm-2 no-label">
					<a href="#1" class="no-underline btn-icon"><i class="icon icon-2x icon-zoom_piu_filled"></i ></a>
				</div>
			</div>
		</div>




		<div class="form-group">
			<div class="row">
				<div class="col-sm-5">
					<label class="control-label txthelp"  data-toggle="tooltip">Visualizzazione portafoglio</label>
					<div class="htmlTooltip">
						lorem ipsum dolor sit lore ipumo dolor sit 
					</div>
					<select class="form-control">
						<option>standard</option>
					</select>
				</div>
				<div class="col-sm-7 no-label">
					<div class="btn-align-left">
						<a type="button" class="btn btn-primary" href="connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_portafoglio_visualizzazione.php&amp;responsive=y&liv0=3&liv1=0&liv2=0">Gestisci visualizzazione</a>
					</div>
				</div>
			</div>
		</div>
	</form>
</section>
<section>
<div class="row">
	<div class="col-xs-12">
		<p class="note flRight noFloatMobile">
			<span class="flLeft">Ultimo Aggiornamento: 02/08/2016 ore 10:44:24</span> 
			<!--esempio di loading -->
			<a href="#1" class="no-underline btn-icon flLeft padding-l-m" id="testLoading"><i class="icon icon-2x icon-update"></i></a>
		</p>
	</div>
</div>
<!--tab di contenuto -->

<div class="navContSecondLev" id="secondTab">
	<div class=" outerTab">
		<ul class="tabWrapper tabflex hidden-xs">
			<li class=""><a href="#heading1b">Totale portafoglio</a></li>
			<li class=""><a href="#heading2b">Azioni Italia</a></li>
			<li class=""><a href="#theading3b">Azioni estero</a></li>
			<li class=""><a href="#theading4b">Obbligazioni</a></li>
			<li class=""><a href="#theading5b">Derivati</a></li>
			<li class=""><a href="#theading6b">CV/Certificates</a></li>
			<li class=""><a href="#theading7b">ETF</a></li>
			<li class=""><a href="#theading8b">Marginazione</a></li>
		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-group panel-fill" id="accordion2" role="tablist" aria-multiselectable="true">
		<div class="panel panel-default">
			<div class="panel-heading visible-xs" role="tab" id="heading1b">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion2" href="#collapse1b" aria-expanded="false" aria-controls="collapse1b" class="collapsed">Totale portafoglio<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
				</h4>
			</div>
			<div id="collapse1b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1b">
				<div class="panel-body">
					<div class="tab-wrap">
						
					<table cellspacing="0" cellpadding="0" border="0" id="tablePortafoglioWT" data-sortable="true" data-sort-order="desc" data-sort-name="Titolo" data-toggle="table" class="sortableTable fix-OuterTable">
					    <thead>
					        <tr>
					            <th class="center" data-field="icona"></th>
					            <th class="center" data-field="accordion"></th>
					            <th class="left no-border-left" data-field="Titolo" data-sortable="true">Titolo</th>
					            <th class="left" data-field="Mercato" data-sortable="false">Mercato<select class="form-control"><option>Tutti</option><option>Euro - MOT</option></select></th>
					            <th class="right" data-field="qtaPort" data-sortable="true" data-sorter="fixQuant">Q.t&agrave; in portaf.</th>
					            <th class="right fixedLarge" data-field="prezzoCarico" data-sortable="true" data-sorter="fixQuant">Prz. medio carico</th>
					            <th class="right" data-field="ultimoPrezzoOra" data-sortable="false">Ult. prz. ora</th>
					            <th class="right" data-field="controvalEuro" data-sortable="true"  data-sorter="fixQuant">Controval. Eur</th>
					            <th class="right fixedLarge" data-field="varPerc" data-sorter="fixQuant" data-sortable="true">Var.%</th>
					            
					        </tr>
					    </thead>
							<tbody>

							<tr class="dispari">
								<td class="right">
					            	<!-- ICONA OPERATIVA MEECCANISMO UGUALE NON MODIFICATO: CAMBIATO SOLO HTML E CSS e si apre in overlayer-->
									<!--
									I parametri da passare alla funziona multiLinks() sono:
										- id del LAYER MENU, vedi sotto
										- 'left, right'
										- this, lasciare cos�
										- array delle querystring da passare ai link:
											* se si passa null, il link sar� disattivo
											* se si passa una querystring, sar� accodata all'URL del link
											* se si passa 'javascript:...', verr� eseguita la funzione javascript al click
								-->
					            	<div class="linkTooltip" data-toggle="modal">
										<a title="scegli l'operazione da effettuare" id="link1" class="linkVai no-underline btn-icon" onclick="multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', '']);"><i class="icon icon-2x icon-ico_azioni02A"></i></a>						
									</div>
								</td>
					            <td class="center td-accordion"></td>
					            <td class="left no-border-left">A2A</td>
					            <td class="left">MTA</td>
					            <td class="right">1.000</td>
					            <!--<td class="right">2.000</td>-->
					            <td class="right">8,84</td>
					            
					            <td class="right">17,69 <br>16:48:50</td>
					            <td class="right">17.690</td>
					            <td class="right posi">2,02 %</td>
					            
					        </tr>
							<tr class="pari">
								 <td class="right">
					            	<!-- ICONA OPERATIVA MEECCANISMO UGUALE NON MODIFICATO: CAMBIATO SOLO HTML E CSS e si apre in overlayer-->
									<!--
									I parametri da passare alla funziona multiLinks() sono:
										- id del LAYER MENU, vedi sotto
										- 'left, right'
										- this, lasciare cos�
										- array delle querystring da passare ai link:
											* se si passa null, il link sar� disattivo
											* se si passa una querystring, sar� accodata all'URL del link
											* se si passa 'javascript:...', verr� eseguita la funzione javascript al click
								-->
					            	<div class="linkTooltip" data-toggle="modal">
										<a title="scegli l'operazione da effettuare" id="link1" class="linkVai no-underline btn-icon" onclick="multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', '']);"><i class="icon icon-2x icon-ico_azioni02A"></i></a>						
									</div>

					            	

					            </td>
					            <td class="center td-accordion"><a data-toggle="collapse" href="#collapserow1" aria-expanded="false" aria-controls="collapse" href="#1" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i></a></td>
					            <td class="left no-border-left"><a href="#">BTP 01.02.06/01.08.2021 3,75%</a></td>
					            <td class="left">MTA</td>
					            <td class="right">5</td>
					            <!--<td class="right">1</td>-->
					            <td class="right">9,8394</td>
					            
					            <td class="right">17,69 <br>16:48:50</td>
					            <td class="right">17.690</td>
					            <td class="right nega">-0,02 %</td>
					            
					        </tr>
					    	<tr class="dispari">
					    		<td class="right">
					            	<!-- ICONA OPERATIVA MEECCANISMO UGUALE NON MODIFICATO: CAMBIATO SOLO HTML E CSS e si apre in overlayer-->
									<!--
									I parametri da passare alla funziona multiLinks() sono:
										- id del LAYER MENU, vedi sotto
										- 'left, right'
										- this, lasciare cos�
										- array delle querystring da passare ai link:
											* se si passa null, il link sar� disattivo
											* se si passa una querystring, sar� accodata all'URL del link
											* se si passa 'javascript:...', verr� eseguita la funzione javascript al click
								-->
					            	<div class="linkTooltip" data-toggle="modal">
										<a title="scegli l'operazione da effettuare" id="link1" class="linkVai no-underline btn-icon" onclick="multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', '']);"><i class="icon icon-2x icon-ico_azioni02A"></i></a>						
									</div>

					            	

					            </td>
					            <td class="center td-accordion"><a data-toggle="collapse" href="#collapserow2" aria-expanded="false" aria-controls="collapse" href="#1" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></a></td>
					            <td class="left no-border-left"><a href="#">BTP 01.02.06/01.08.2021 3,75%</a></td>
					            <td class="left">MTA</td>
					            <td class="right">10</td>
					            <!--<td class="right">100</td>-->
					            <td class="right">10,8394</td>
					            
					            <td class="right">17,69 <br>16:48:50</td>
					            <td class="right">17.690</td>
					            <td class="right nega">-1,03 %</td>
					            
					        </tr>
					    </tbody>
					    	<tfoot>
							<!--eventuale totale-->
							<tr class="totali">
								<td class="bgWhite brdWhite"></td>
								<td colspan="7"><strong>Totale</strong></td>
							    <td class="right nega">-3,4 %</td>
							</tr>


							<!--righe dei dettagli -->
							<tr id="collapserow1" class="collapse" aria-expanded="false">
								<td colspan="9">
									<div class="wrapperSubTable">
										<table cellpadding="0" cellspacing="0" border="0" class="subTable fix-InnerTable">
											<thead>
												<tr>
													<th class="left">Titolo</th>
													<th>Mercato</th>
													<th>Ult. Prz.<br> Ora</th>
													<th>Controval. EUR</th>
													<th>Utili/Perdite EUR <br>Var %</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><a href="#">AUSTRIA 13/18 1,15% 19/10</a></td>
													<td>EuroTLX</td>
													<td class="right">102,34<br>03/06/2016</td>
													<td class="right">1.023,4</td>
													<td class="nega right">-27,3<br>-2,6%</td>
													<td style="">
														<div class="linkTooltip"><i class="icon icon-2x icon-ico_azioni02A disabled" data-toggle="tooltip" data-title="Questa funzione non è disponibile per il profilo &quot;Consultare&quot;" aria-describedby="tooltip703962"></i></div>
														
														
														
													</td>
												</tr>
												
											</tbody>
										</table>
									</div>
								</td>
							</tr>
							<tr id="collapserow2" class="collapse" aria-expanded="false">
								<td colspan="9">
									<table cellpadding="0" cellspacing="0" border="0" data-toggle="table" class="subTable fix-InnerTable">
										<thead>
											<tr>
												<th class="left">Titolo</th>
												<th>Mercato</th>
												<th>Ult. Prz.<br> Ora</th>
												<th>Controval. EUR</th>
												<th>Utili/Perdite EUR <br>Var %</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><a href="#">AUSTRIA 13/18 1,15% 19/10</a></td>
												<td>EuroTLX</td>
												<td class="right">102,34<br>03/06/2016</td>
												<td class="right">1.023,4</td>
												<td class="nega right">-27,3<br>-2,6%</td>
												<td>
													<div class="linkTooltip" data-toggle="modal">
														<a title="scegli l'operazione da effettuare" id="link1" class="linkVai no-underline btn-icon" onclick="multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', '']);"><i class="icon icon-2x icon-ico_azioni02A"></i></a>						
													</div>
												</td>
											</tr>
											
										</tbody>
									</table>

								</td>
							</tr>
							</tfoot>
					  </tbody>


					</table>
					<div class="form-group">
					    <div class="row">
					      <div class="col-xs-12">
					        <div class="btn-align-right">
					          <a type="button" class="btn btn-primary">esporta in excel</a>
					          <a type="button" class="btn btn-primary">stampa</a>
					        </div>
					      </div>
					    </div>
					</div>
					<ul class="note">
						<li>Per i titoli in divisa diversa dall'Euro, il &quot;Prezzo di carico&quot; e il &quot;Prezzo di chiusura&quot; sono espressi nella rispettiva valuta, mentre il &quot;Controvalore di carico&quot; e quello attuale sono espressi in Euro.</li>
						<li>Il &quot;Prezzo medio di carico&quot; e gli &quot;Utili/Perdite&quot; sono dati finanziari non validi ai fini fiscali per il calcolo del capital gain in quanto contengono, ad esempio, i dividendi per le azioni e il rateo per i titoli obbligazionari.</li>
						<li>Per conoscere il &quot;Prezzo fiscale&quot; delle posizioni in portafoglio accedi al dettaglio cliccando sull'icona operativa a fianco di ciascun titolo.</li>
					</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading visible-xs" role="tab" id="heading2b">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion2" href="#collapse2b" aria-expanded="false" aria-controls="collapse2b" class="collapsed">Azioni Italia<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
				</h4>
			</div>
			<div id="collapse2b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2b">
				<div class="panel-body">
					<div class="tab-wrap">
						<p>contenuto 2 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading visible-xs" role=" tab"="" id="heading3b">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion2" href="#collapse3b" aria-expanded="false" aria-controls="collapse3b" class="collapsed">Azioni estero<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
				</h4>
			</div>
			<div id="collapse3b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3b">
				<div class="panel-body">
					<div class="tab-wrap">
						<p>contenuto 3 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading visible-xs" role=" tab"="" id="heading4b">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion2" href="#collapse4b" aria-expanded="false" aria-controls="collapse4b" class="collapsed">Obbligazioni<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
				</h4>
			</div>
			<div id="collapse4b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4b">
				<div class="panel-body">
					<div class="tab-wrap">
						<p>contenuto 4 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading visible-xs" role=" tab"="" id="heading5b">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion2" href="#collapse5b" aria-expanded="false" aria-controls="collapse5b" class="collapsed">Derivati<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
				</h4>
			</div>
			<div id="collapse5b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5b">
				<div class="panel-body">
					<div class="tab-wrap">
						<p>contenuto 4 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>
<div class="form-group">
    <div class="row">
      <div class="col-xs-12">
        <div class="btn-align-right">
          <a type="button" class="btn btn-primary">lorem ipsum</a>
          <a type="button" class="btn btn-primary">lorem ipsum</a>
        </div>
      </div>
    </div>
</div>


</section>


<!--overlayer fiscalit&agrave; -->
<div class="modal fade slide-right" id="fiscalita" tabindex="-1" role="dialog" aria-labelledby="">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close close-top btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="myModalLabel">Prezzo fiscale</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<section>
								<form class="formGenerico borderFormRounded output" role="form" id="">
								 <!--caso con un solo deposito titoli -->
								<div class="form-group">
									<div class="row">
										<div class="col-xs-12 col-sm-12">
											<label class="control-label-output">Deposito titoli</label>
											<span class="output txthelp" data-toggle="tooltip" data-original-title="" title="" data-title="
						MARIO ROSSI
					">1099/617013/1</span>
										</div>
									</div>
								</div>
							</form>
							</section>
							<section>
							<h4>Titolo</h4>
							<table cellpadding="0" cellspacing="0" border="0">
								<tr>
									<td>Descrizione</td>
									<td>A2A</td>
								</tr>
								<tr>
									<td>Codice Isin</td>
									<td>IT0001233417</td>
								</tr>
								<tr>
									<td>Mercato</td>
									<td>MTA</td>
								</tr>
							</table>
							<h4>Fiscalit&agrave;</h4>
							<table cellpadding="0" cellspacing="0" border="0">
								<tr>
									<td>Prezzo fiscale</td>
									<td>//</td>
								</tr>
								<tr>
									<td>Cambio fiscale</td>
									<td>//</td>
								</tr>
								<tr>
									<td>Data ultima valorizzazione</td>
									<td>//</td>
								</tr>
							</table>
							</section>
							<section>
								<div class="form-group">
								    <div class="row">
								      <div class="col-xs-12">
								        <div class="btn-align-right">
								         <a type="button" class="btn btn-primary">stampa</a>
								        </div>
								      </div>
								    </div>
								</div>
							</section>
							<a class="close close-right btn-icon" data-dismiss="modal" data-target="#iconaOperativaMenu1_html" data-toggle="modal" aria-label="Close"><i class="icon icon-arrow_left"></i></a>
								
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<!--overlayer fiscalit&agrave; -->

<!--overlayer tabella saldi -->
<div class="modal fade" id="layerDettSaldi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="myModalLabel">Saldo</h2>
			</div>
			<div class="modal-body">
				<section>

<p>In questa pagina &egrave; mostrato il calcolo del <strong>saldo disponibile</strong> del tuo conto corrente.</p>

<p>Rispetto al saldo contabile, il saldo disponibile tiene conto dell’eventuale <strong>fido</strong> e di <strong>operazioni</strong> di banking, trading e investimenti effettuate, <strong>ma non ancora contabilizzate.</strong></p>
</section>

<section>
	<h4>Conto CC 01099 0000049199 EUR<br> Intestato a IOLE TOLVE</h4>
	<table cellspacing="0" cellpadding="0" border="0" id="saldoContTable">
		<tbody>
			<tr class="total">
				<td class="left fix3Col"><strong>Saldo Contabile</strong></td>
				<td class="center bgkWhite"><strong>&euro; 4.213,46</strong></td>
			</tr>
		</tbody>
	</table>
<table cellspacing="0" cellpadding="0" border="0"  id="table1" class="fixed">
	<thead>
		<tr>
			<th class="left fix3Col bgkWhite brdWhite" data-field="primo">&nbsp;</th>
			<th class="center" data-field="secondo">al 01/07/2016</th>
			<th class="center" data-field="terzo">al 01/07/2016</th>
			<th class="center" data-field="quarto">al 01/07/2016</th>
			<th class="right" data-field="quinto">al 01/07/2016</th>	
		</tr>
	</thead>
	<tbody>	
		<tr class="total">
			<td class="left">
				<span class="txthelp"><strong class="closeable" data-title="Per &quot;movimenti non contabilizzati &quot; si intendono le operazioni in accredito (<strong>preavvisi</strong>) o in addebito (<strong>impegni</strong>) già effettuate sul conto, ma non ancora registrate." data-toggle="tooltip">Movimenti non contabilizzati</strong></span>
			</td>
			<td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
			<td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
			<td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
			<td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
		</tr>
		<tr class="total merged">
	       <td class="right"><strong>Totale impegni banking</strong></td>
	       <td class="bgkWhite center posi">&euro; 0,00</td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	    </tr>
	    <tr class="merged">
	       <td class="right text-small">operazioni sul sito</td>
	       <td class="bgkWhite center posi">&euro; 0,00</td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	    </tr>
	     <tr class="merged">
	       <td class="right text-small">operazioni con la carta di debito</td>
	       <td class="bgkWhite center posi">&euro; 0,00</td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	    </tr>
	    <tr class="merged">
	       <td class="right text-small"><span class="txthelp closeable" data-title="Nelle &quot;altre operazioni&quot; sono comprese, in particolare:
<ul><li>operazioni presso agenzie territoriali</li><li>operazioni tramite lo &quot;Sportello telefonico&quot;</li><li>operazioni tramite sportelli Self Service BPM</li></ul>" data-toggle="tooltip">altre operazioni</span></td>
	       <td class="bgkWhite center posi">&euro; 0,00</td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	    </tr>
	    <tr class="total merged">
	       <td class="right"><span class="txthelp closeable" data-title="Le operazioni non contabilizzate di trading e investimenti sono distinte in <strong>impegni</strong> e <strong>preavvisi</strong>.<br><ul>
<li>Gli <strong>impegni</strong> sono movimenti in addebito (es. ordini di acquisto di titoli) e incidono sul saldo disponibile già al momento dell’inserimento online dell’ordine.</li>
<li>I <strong>preavvisi</strong> sono movimenti in accredito (es. ordini di vendita di titoli) e incidono sul saldo disponibile soltanto al momento delle loro contabilizzazione effettiva.</li>
</ul>" data-toggle="tooltip"><strong>Totale impegni trading</strong></span></td>
	       <td class="bgkWhite center posi">&euro; 0,00</td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	    </tr>
	     <tr class="merged">
	       <td class="right text-small">liquidit&agrave; impegnata per ordini immessi e non ancora eseguiti</td>
	       <td class="bgkWhite center nega">&euro; 0,00</td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	    </tr>
	     <tr class="merged">
	       <td class="right text-small">liquidit&agrave; impegnata per margine di garanzia overnight</td>
	       <td class="bgkWhite center nega">&euro; 0,00</td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	    </tr>
	    <tr class="merged">
	       <td class="right text-small">P&L potenziale impegnato per margine di garanzia overnight</td>
	       <td class="bgkWhite center nega">&euro; 0,00</td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	    </tr>
	     <tr class="merged">
	       <td class="right text-small"><span class="txthelp closeable" data-title="Le operazioni &quot;marginate&quot; o in leva impegnano una disponibilit&agrave; inferiore rispetto a quanto occorrerebbe per impostare un’operazione marginata. Il controvalore degli impegni per operazioni marginate costituisce la liquidità bloccata per operazioni intraday." data-toggle="tooltip">liquidit&agrave; impegnata per operativit&agrave; intraday</span></td>
	       <td class="bgkWhite center nega">&euro; 0,00</td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	    </tr>
	    <tr>
	       <td class="right text-small">Compravendita/acquisto</td>
	       <td class="bgkWhite right nega">&euro; 0,00</td>
	       <td class="bgkWhite right nega">&euro; 0,00</td>
	       <td class="bgkWhite right nega">&euro; 0,00</td>
	       <td class="bgkWhite right nega">&euro; 0,00</td>
	    </tr>
	     <tr class="total" >
	       <td class="right"><span class="txthelp closeable" data-toggle="tooltip" data-title="Le operazioni non contabilizzate di trading e investimenti sono distinte in <strong>impegni</strong> e <strong>preavvisi</strong>.<br>
<ul>
<li>Gli <strong>impegni</strong> sono movimenti in addebito (es. ordini di acquisto di titoli) e incidono sul saldo disponibile già al momento dell’inserimento online dell’ordine.</li>
<li>I <strong>preavvisi</strong> sono movimenti in accredito (es. ordini di vendita di titoli) e incidono sul saldo disponibile soltanto al momento delle loro contabilizzazione effettiva.</li>
</ul>"><strong>Totale preavvisi trading</strong></span></td>
	       <td class="bgkWhite right posi">&euro; 0,00</td>
	       <td class="bgkWhite right posi">&euro; 0,00</td>
	        <td class="bgkWhite right posi">&euro; 0,00</td>
	        <td class="bgkWhite right posi">&euro; 0,00</td>
	    </tr>
	     <tr>
	       <td class="right text-small">Compravendita/acquisto</td>
	       <td class="bgkWhite right posi">&euro; 0,00</td>
	       <td class="bgkWhite right posi">&euro; 0,00</td>
	       <td class="bgkWhite right posi">&euro; 0,00</td>
	       <td class="bgkWhite right posi">&euro; 0,00</td>
	    </tr>
	     <tr class="total merged">
	       <td class="right"><span class="txthelp closeable" data-toggle="tooltip" data-title="Le operazioni non contabilizzate di trading e investimenti sono distinte in <strong>impegni</strong> e <strong>preavvisi</strong>.<br>
<ul>
<li>Gli <strong>impegni</strong> sono movimenti in addebito (es. ordini di acquisto di titoli) e incidono sul saldo disponibile già al momento dell’inserimento online dell’ordine.</li>
<li>I <strong>preavvisi</strong> sono movimenti in accredito (es. ordini di vendita di titoli) e incidono sul saldo disponibile soltanto al momento delle loro contabilizzazione effettiva.</li>
</ul>"<strong>Totale impegni fondi</strong></span></td>
	       <td class="bgkWhite center posi">&euro; 0,00</td>
	       <td class="bgkWhite right posi"></td>
	       <td class="bgkWhite right posi"></td>
	        <td class="bgkWhite right posi"></td>
	    </tr>
	     <tr class="total merged">
	       <td class="right"><span class="txthelp closeable" data-toggle="tooltip" data-title="Le operazioni non contabilizzate di trading e investimenti sono distinte in <strong>impegni</strong> e <strong>preavvisi</strong>.<br>
<ul>
<li>Gli <strong>impegni</strong> sono movimenti in addebito (es. ordini di acquisto di titoli) e incidono sul saldo disponibile già al momento dell’inserimento online dell’ordine.</li>
<li>I <strong>preavvisi</strong> sono movimenti in accredito (es. ordini di vendita di titoli) e incidono sul saldo disponibile soltanto al momento delle loro contabilizzazione effettiva.</li>
</ul>"<strong>Totale preavvisi fondi</strong></span></td>
	       <td class="bgkWhite center posi">&euro; 0,00</td>
	       <td class="bgkWhite right posi"></td>
	       <td class="bgkWhite right posi"></td>
	        <td class="bgkWhite right posi"></td>
	    </tr>
	</tbody>
</table>
<table cellspacing="0" cellpadding="0" border="0"  id="table2" class="fixed">
	<thead>
		<tr>
			<th class="left fix3Col bgkWhite brdWhite" data-field="primo">&nbsp;</th>
			<th class="center" data-field="secondo">al 01/07/2016</th>
			<th class="center" data-field="terzo">al 01/07/2016</th>
			<th class="center" data-field="quarto">al 01/07/2016</th>
			<th class="right" data-field="quinto">al 01/07/2016</th>	
		</tr>

	</thead>
	<tbody>	
		<tr class="total">
			<td class="left">
				<strong>Saldo disponibile</strong>
			</td>
			<td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
			<td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
			<td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
			<td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
		</tr>		
	</tbody>
</table>
<h4>Operativit&agrave; overnight</h4>
<table cellspacing="0" cellpadding="0" border="0" id="">
		<tbody>
			<tr class="total">
				<td class="left fix3Col"><strong>Liquidit&agrave; impegnata per vendita short</strong></td>
				<td class="center bgkWhite"><strong>&euro; 4.213,46</strong></td>
			</tr>
			<tr class="total">
				<td class="left fix3Col"><strong>Importo accreditato per operativit&agrave; long overnight</strong></td>
				<td class="center bgkWhite"><strong>&euro; 4.213,46</strong></td>
			</tr>
		</tbody>
</table>

</section>
			</div>
		</div>
	</div>
</div>

<!-- LAYER MENU -->
<!--
	NON COPIARE IN SVILUPPO!!!
	PARTE DA LASCIARE SOLO PER LE LIBRERIE.
	Le diverse icone operative mostrano lo stesso layer per visualizzare il menu. 
	Se bisogna fare due menu diversi si metteranno due div. 
	Quindi, un div per ogni tipo di menu e NON per ogni icona operativa.
-->

<!--overlayer icona operativa -->
<div class="sezioneLinks2 modal fade" id="iconaOperativaMenu1_html" tabindex="-1" role="dialog" aria-labelledby="">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
				<div class="modal-header">
					<a class="close close-top btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
					<h2 class="modal-title" id="myModalLabel">BTP 01.02.06/01.08.2021 3,75%</h2>
				</div>
				
				<div class="body">
					<ul class="azioni">
							<li class="linkOn"><a title="C/V" href="link1.htm"><span>C/V</span></a></li>
							<li class="linkOff"><span title="C/V">C/V</span></li>
							<li class="linkOn"><a title="Book" href="javascript:openPopUp('medium', '')"><span>Book</span></a></li>
							<li class="linkOff"><span title="Book">Book</span></li>
							<li class="linkOn"><a title="Ordine Condizionato" href="link3.htm"><span>Ordine Cond.</span></a></li>
							<li class="linkOff"><span title="Ordine Condizionato">Ordine Cond.</span></li>
							<li class="linkOn"><a title="Analisi Tecnica" href="link4.htm"><span>Analisi Tecnica</span></a></li>
							<li class="linkOff"><span title="Analisi Tecnica">Analisi Tecnica</span></li>
							<li class="linkOn"><a title="Alert" href="link5.htm"><span>Alert</span></a></li>
							<li class="linkOff"><span title="Alert">Alert</span></li>
							<li class="linkOn"><a title="Carry-on" href="/connect.php?page=str_interna_priv.php&tpl=/wetrade/tpl_priv_lib_wt_carry.php&liv1=TR&tr2=0&tr3=0"><span>Carry-on</span></a></li>
							<li class="linkOff"><span title="Carry-on">Carry-on</span></li>
							<li class="linkOn"><a title="Vendi" href="link6.htm"><span>Vendi</span></a></li>
							<li class="linkOff"><span title="Vendi">Vendi</span></li>
							<li class="linkOn"><a title="Vendi" href=""><span>Visualizza/Vendi</span></a></li>
							<li class="linkOff"><span title="Vendi">Visualizza/Vendi</span></li>
							<li class="linkOn last"><a title="Dettaglio fiscale" href="#" class="close-left" data-dismiss="modal" data-toggle="modal" data-target="#fiscalita"><span>Fiscalità</span></a></li>
							<li class="linkOff last"><span title="Dettaglio fiscale">Prezzo fiscale</span></li>
						</ul>
						<div class="clear"></div>
				</div>
			
		</div>
	</div>
</div>



<script>
	$(function(){
       var $table1 = $('#table1');
	   var $table2 = $('#table2');
       $table1.bootstrapTable();
       $table2.bootstrapTable();
                  $('.merged').each(function()
                  {          
                      for(i=1; i<=$('.merged').length; i++)
                      {
                          if(i==$(this).attr('data-index'))
                            {
                                  $table1.bootstrapTable('mergeCells', {
                                      index: i,
                                      field: 'secondo',
                                      colspan: 4
                            }).bootstrapTable(
                                {
                                    onPostBody : initTooltip()

                         });
                     }
                  }
			})
        })
 
</script>

<script>

//SCRIPT PER LA GESTIONE DELLE RIGHE ESPANDIBILI
//appende e rimuove righe dettaglio
$('#tablePortafoglioWT .collapse').on('show.bs.collapse', function () {
  idToOpen = $(this).attr('id');
  $(this).insertAfter($("a[href='#" + idToOpen +"']").closest('tr'));
})
$('#tablePortafoglioWT .collapse').on('hidden.bs.collapse', function () {
  $(this).appendTo('#tablePortafoglioWT tfoot');
  
})
//al sorting le nascondo
$('#tablePortafoglioWT').bootstrapTable({
    onSort: function () {
        $('#tablePortafoglioWT .collapse').appendTo('#tablePortafoglioWT tfoot').removeClass('in').attr('aria-expanded','false');
   		$('#tablePortafoglioWT').delegate( "a[data-toggle=\"collapse\"]", "click", function() {$(this).toggleClass('collapsed')})
   		
   	},
   
 });


</script>

<?php }
if ($bank == "bpm") {?>
<section>
	<h2>Situazione in portafoglio</h2>
</section>
<section>
	<form class="formGenerico borderFormRounded output" role="form" id="form02">
		<div class="form-group">
			<div class="row">
				<div class="col-sm-6">
					<label class="control-label-output">Deposito titoli</label>
					<select class="form-control">
						<option>37/123213213 Rossi Paola</option>
					</select>
				</div>
			</div>
		</div>
	</form>
</section>
<section>
	<div class="navContFirstLev outerTab">
	<div class="innerTab">
		<ul class="tabmedium">
			<li class="on"><a href="/connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_investimenti_portafoglio.php&liv0=4&liv1=0&liv2=0&liv3=0&responsive=y#">titoli</a></li>
			<li><a href="/connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_investimenti_portafoglio_b.php&liv0=4&liv1=0&liv2=0&liv3=0&responsive=y#">fondi e sicav</a></li>
			<li><a href="/connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_investimenti_portafoglio_c.php&liv0=4&liv1=0&liv2=0&liv3=0&responsive=y#">totale portafoglio</a></li>
		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-nofill">
		<div class="tithelp">
			<h4>Dettaglio portafoglio titoli</h4>
			<div class="flRight"><a href="#1" class="no-underline btn-icon" data-target="#helpPortafoglio" data-toggle="modal"><i class="icon icon-info_fill icon-2x"></i></a><br class="clear"></div>
		</div>
		<table cellspacing="0" cellpadding="0" border="0" id="tb-portafoglio-bpm" data-sortable="true" data-sort-order="desc" data-sort-name="titolo" data-toggle="table" class="sortableTable">
			<thead>
				 <tr>
		            <th class="center" data-field="icocv" data-sortable="false"></th>
		            <th class="left" data-field="titolo" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Titolo</th>
		            <th class="left" data-field="mkt" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Mkt</th>
		            <th class="right" data-field="Qta" data-sortable="false">Q.t&agrave;</th>
		    		<th class="right" data-field="prezzoCarico" data-sortable="false">Prezzo di carico</th>
		    		<th class="right" data-field="ctvCarico" data-sortable="false">Ctv di carico</th>
		    		<th class="right" data-field="prezzoUltimo" data-sortable="false">Prezzo ultimo</th>
		    		<th class="right" data-field="ctvAttuale" data-sortable="false">Ctv attuale</th>
		    		<th class="right" data-field="plusMin" data-sortable="false">Plus/Minus Assol. %</th>
		    		<th class="center" data-field="icodett" data-sortable="false"></th>
		    </thead>
		    <tbody>
		     	<tr class="dispari">
		     		<td><a class="no-underline btn-icon"><i class="icon icon-small-compra_vendi"></i><i class="icon icon-big-compra_vendi"></i></a></td>
		     		<td><a href="#">BIMI 27NV16 10%</a></td>
		     		<td>OBBL</td>
		     		<td>25.000,00</td>
		     		<td>99,4577</td>
		     		<td>24.864,43</td>
		     		<td>96,276<br>12/08/2016</td>
		     		<td>7.214,34</td>
		     		<td class="nega right">-1.064,02<br>-13,49%</td>
		     		<td><a class="no-underline btn-icon" href="/connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_dettaglio_portafoglio.php&liv0=4&liv1=0&liv2=0&liv3=0&responsive=y#"><i class="icon icon-2x icon-zoom_piu_filled flLeft"></i></a></td>
		     	</tr>
		     	<tr class="pari">
		     		<td><a class="no-underline btn-icon"><i class="icon icon-small-compra_vendi"></i><i class="icon icon-big-compra_vendi"></i></a></td>
		     		<td><a href="#">BIMI 27NV16 10%</a></td>
		     		<td>OBBL</td>
		     		<td>25.000,00</td>
		     		<td>99,4577</td>
		     		<td>24.864,43</td>
		     		<td>96,276<br>12/08/2016</td>
		     		<td>7.214,34</td>
		     		<td class="posi right">1.064,02<br>-13,49%</td>
		     		<td><a class="no-underline btn-icon"><i class="icon icon-2x icon-zoom_piu_filled flLeft"></i></a></td>
		     	</tr>
		     </tbody>
		     <tfoot class="totali">
		     		<td colspan="5"><strong>Totale</strong></td>
		     		<td class="right">83.445,48</td>
		     		<td class="right"></td>
		     		<td>44.153,86</td>
		     		<td class="right nega">-3.029,52<br>-3,63%	</td>
		     		<td class="bgWhite brdWhite"></td>
		     </tfoot>
		</table>
		<div class="form-group">
		    <div class="row">
		      <div class="col-xs-12">
		        <div class="btn-align-right">
		          <a type="button" class="btn btn-primary">esporta in excel</a>
		          <a type="button" class="btn btn-primary">stampa</a>
		        </div>
		      </div>
		    </div>
		</div>
		<ul class="note">
			<li>Per i titoli in una divisa diversa dall'Euro, il <strong>prezzo di carico</strong> e il <strong>prezzo di chiusura</strong> sono espressi nella <strong>rispettiva valuta</strong>, mentre il <strong>controvalore di carico</strong> e quello <strong>attuale</strong> sono espressi in <strong>Euro.</strong></li>
			<li><strong>Il prezzo medio di carico</strong> e la <strong>plus minus</strong> sono dati finanziari non validi ai fini fiscali per il calcolo del <strong>capital gain</strong>, perch&egrave; contengono per esempio i dividendi per le azioni e il rateo mantello per i titoli obbligazionari.</li>
			<li>Per c<strong>onoscere la posizione fiscale</strong> aggiornata e il dettaglio delle singole operazioni <strong>rivolgiti</strong> alla tua <strong>agenzia.</strong></li>
			<li>Il prezzo fiscale, utilizzato per calcolare plus e minus, &grave; riportato nel dettaglio del titolo presente in portafoglio. Per accedere al dettaglio, clicca sull'icona <a class="no-underline btn-icon"><i class="icon icon-2x icon-zoom_piu_filled "></i></a>  presente nella tabella.</li>
			<li>(#) Attenzione: per questo titolo non sono disponibili tutte le informazioni.</li>
		</ul>
	</div>
</div>
</section>

<!-- modal help portafoglio BPM-->
<div class="modal fade" id="helpPortafoglio" tabindex="-1" role="dialog" aria-labelledby="helpPortafoglio">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="helpPortafoglio">Dettaglio portafoglio titoli</h2>
			</div>
			<div class="modal-body">
				<p>
					A questo punto &egrave; riportato l'elenco dei titoli, di cui di seguito ti indichiamo il dettaglio dei contenuti. Ricorda che hai a disposizione tre tipi di visualizzazione di mappa di dettaglio deposito: la prima mostra i dati dei titoli; la seconda mostra i dati dei fondi/sicav e la terza mostra il totale del portafoglio.
				</p>
				<ul>
				 	<li><strong>Deposito:</strong> &egrave; il numero di deposito nel quale sono depositati i titoli posseduti.</li>
				 	<li><strong>Lorem ipsum:</strong> &egrave; lorem ipsum dolor sit</li>
				 	<li><strong>Lorem ipsum:</strong> &egrave; lorem ipsum dolor sit</li>
				 	<li><strong>Lorem ipsum:</strong> &egrave; lorem ipsum dolor sit</li>
				</ul>
				<div class="testoIcona">
					<a class="no-underline btn-icon"><i class="icon icon-2x icon-zoom_piu_filled flLeft"></i></a>
					<div class="leftTesto">
						<p>Questo simbolo ti consente di visualizzare una mappa analitica contenente informazioni dettagliate sul titolo cliccando sulla relativa lente di ingrandimento.</p>		
					<hr>
					</div>
				</div>
				<div class="testoIcona">
					<a class="no-underline btn-icon"><i class="icon icon-2x icon-test flLeft"></i></a>
					<div class="leftTesto">
						<p>Questo simbolo ti segnala le posizioni aperte, quelle per cui hai delle movimentazioni in corso (eseguiti odierni).</p>		
					<hr>
					</div>
				</div>
				<div class="testoIcona">
					<a class="no-underline btn-icon"><i class="icon icon-2x icon-test flLeft"></i></a>
					<div class="leftTesto">
						<p>Questo simbolo ti consente di accedere direttamente alla mappa di inserimento dell'ordine C/V e di effettuare operazioni compravendita. </p>		
					<hr>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
}?>
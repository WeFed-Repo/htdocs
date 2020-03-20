<h2>Italia</h2>
<div class="row">
	<div class="col-xs-12">
		<p class="note flRight noFloatMobile">
			<span class="flLeft">Ultimo Aggiornamento: 02/08/2016 ore 10:44:24</span> 
			<a href="#1" class="no-underline btn-icon flLeft padding-l-m" id="testLoading"><i class="icon icon-2x icon-update"></i></a>
		</p>
	</div>
</div>

<!-- sezione grafico interattivo -->
<section>
	
	<!-- selettore grafico -->
	<script type="text/javascript">
		
		$(function(){
			// Esempio di inizializzazione del selettore
			$("#selectorIndex").selAdv({
				callback: function(){
					// Esempio di callback sulla selezione (prende il valore dell'input)
					console.log("Valore input selettore indice = " + $(this).val());
				}
			});
		});
	</script>
	<div class="sel-adv loading" id="selectorIndex">
		<input type="hidden" name="indice">
		<div class="sel-adv-voice" data-value="ita"  data-selected="true">
			<img src="/common/fe/img/ico_flagItal.png" class="flag" /><span class="label">FTSE MIB:</span> <span class="dato dato-negativo">-39,128</span> <span class="dato dato-integrativo">(21.147,65)</span>
		</div>
		<div class="sel-adv-voice" data-value="por">
			<img src="/common/fe/img/ico_flagPort.png"  class="flag"/><span class="label">PSI 20:</span> <span class="dato dato-positivo">119,128</span> <span class="dato dato-integrativo">(11.147,65)</span>
		</div>
		<div class="sel-adv-voice" data-value="spa">
			<img src="/common/fe/img/ico_flagSpai.png"  class="flag"/><span class="label">IBEX 35:</span> <span class="dato dato-positivo">119,128</span> <span class="dato dato-integrativo">(33.147,65)</span>
		</div>
		<div class="sel-adv-voice" data-value="bel">
			<img src="/common/fe/img/ico_flagBelg.png"  class="flag"/><span class="label">BEL 20:</span> <span class="dato dato-positivo">119,128</span> <span class="dato dato-integrativo">(23.147,65)</span>
		</div>
		<div class="sel-adv-voice" data-value="fra">
			<img src="/common/fe/img/ico_flagFran.png"  class="flag"/><span class="label">CAC40:</span> <span class="dato dato-negativo">-119,128</span> <span class="dato dato-integrativo">(23.147,65)</span>
		</div>
		<div class="sel-adv-voice" data-value="ger">
			<img src="/common/fe/img/ico_flagGerm.png"  class="flag"/><span class="label">DAX 30:</span> <span class="dato dato-positivo">119,128</span> <span class="dato dato-integrativo">(1.147,65)</span>
		</div>
		<div class="sel-adv-voice" data-value="kiu">
			<img src="/common/fe/img/ico_flagKiun.png"  class="flag"/><span class="label">FTSE 100:</span> <span class="dato">0</span> <span class="dato dato-integrativo">(23.147,65)</span>
		</div>
		<div class="sel-adv-voice" data-value="net">
			<img src="/common/fe/img/ico_flagNeth.png"  class="flag"/><span class="label">AEX 25:</span> <span class="dato dato-positivo">119,128</span> <span class="dato dato-integrativo">(52.147,65)</span>
		</div>
		<div class="sel-adv-voice" data-value="usa">
			<img src="/common/fe/img/ico_flagUsa.png"  class="flag"/><span class="label">DOW JONES:</span> <span class="dato dato-positivo">119,128</span> <span class="dato dato-integrativo">(42.147,65)</span>
		</div>
	</div>
	<!-- fine selettore grafico -->

	<!-- Placeholder grafico -->
	<div style="background: #eee;color:#ddd;font-size:20px; text-transform:uppercase;height:200px;line-height:200px;border:dashed 1px #ccc;text-align:center">Placeholder grafico</div>
	<!-- fine placeholder grafico -->

</section>
<!-- fine sezione grafico interattivo -->


<div>
	<div id="IdUltimiPrezzi" class="borderFormRounded formGenerico align-center boxEvid">
		<ul class="row marginBottomNone" style="list-style:none">
				<li class="col-sm-3 pad_0">
					<label class="control-label-output">Prz. Apertura:</label> 
					<span class="output" id="idPzApe">19.188,06</span>
				</li>
				<li class="col-sm-3 pad_0">
					<label class="control-label-output">Prz. Min/Max:</label> 
					<span class="output"><span id="idPzMin">19.233,4</span>/<span id="idPzMax">19.325,94</span></span>
				</li>
				<li class="col-sm-3 pad_0">
					<label class="control-label-output">Prz. rif.:</label> 
					<span class="output" id="idPzRif">19.121,26</span>
				</li>
				<li class="col-sm-3 pad_0">
					<label class="control-label-output">Stato:</label>
					<span class="output" id="idStato">CONTINUA</span></li>
			</ul>
		</div>
		
<div class="navContSecondLev" id="secondTab">
	<div class=" outerTab">
		<div class="flLeft">
			<ul class="tabWrapper tabflex hidden-xs">
				<li class=""><a href="#heading1b">Paniere</a></li>
				<li class=""><a href="#heading2b">Paniere in push</a></li>
				<li class=""><a href="#theading3b">Trend</a></li>
				<li class=""><a href="#theading4b">Migliori</a></li>
				<li class=""><a href="#theading5b">Peggiori</a></li>
				<li class=""><a href="#theading6b">Titoli caldi long</a></li>
				<li class=""><a href="#theading7b">Titoli caldi short</a></li>
			</ul>
		</div>
		<a href="#1" class="no-underline btn-icon flRight"><i class="icon icon-info_fill icon-2x"></i></a>
	</div>
	<div class="separator"></div>
	<div class="panel-group panel-fill" id="accordion2" role="tablist" aria-multiselectable="true">
		<div class="panel panel-default">
			<div class="panel-heading visible-xs" role=" tab"="" id="heading1b">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion2" href="#collapse1b" aria-expanded="false" aria-controls="collapse1b" class="collapsed">Paniere<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
				</h4>
			</div>
			<div id="collapse1b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1b">
				<div class="panel-body">
					<div class="tab-wrap">
						<div class="row">
							<div class="col-xs-12">
									<div id="glossarioWrap" class="loading mobile-all">
									<div class="glossarioSX">
										<div id="glossario">
										    <ul class="ben">

												<li class="first on"><a>A</a></li>
												<li class="off">B</li>
												<li class="off">C</li>
												<li class="off">D</li>
												<li class="off">E</li>
												<li class="off">F</li>
												<li class="off">G</li>
									 			<li class="off">H</li>
												<li class="off">I</li>
												<li class="off">J</li>
												<li class="off">K</li>
												<li class="off">L</li>
												<li class="off">M</li>
												<li class="off">N</li>
												<li class="off">O</li>
												<li class="off">P</li>
												<li class="off">Q</li>
												<li class="off">R</li>
												<li class="off">S</li>
												<li class="off">T</li>
												<li class="off">U</li>
												<li class="off">V</li>
												<li class="off">W</li>
												<li class="off">X</li>
												<li class="off">Y</li>
												<li class="off">Z</li>
												<li class="tutti on" id="Tutti"><a href="javascript:;" onclick="">Tutti</a></li>   


											</ul>
									  	</div>
									</div>
									<div class="glossarioDX">
										<table id="tb-indici" cellspacing="0" cellpadding="0" border="0" class="sortableTable" data-unique-id="id">
										     <thead>
										        <tr>
										        	<th data-field="ico" data-sortable="false"></th>
										            <th data-field="id" data-visible="true" data-sortable="true" class="center">Simbolo</th>
										            <th data-field="titolo" data-sortable="true">Titolo</th>
										            <th data-field="ultimoPrezzo" data-sortable="true" data-sorter="fixQuant">Ultimo prezzo</th>
										            <th data-field="variazione" data-sortable="true">Variazione</th>
										            <th data-field="prezzoMinimo" data-sortable="true" data-sorter="fixQuant">Prezzo minimo</th>
										            <th data-field="prezzoMax" data-sortable="true" data-sorter="fixQuant">Prezzo massimo</th>
										            <th data-field="ora" data-sortable="true">Ora</th>
										        </tr>
										     </thead>
										    <tbody>
										    	<tr id="tr-indici-0">
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
													<td class="" >US</td>
													<td class=""><a href="#">6</a></td>
													<td class="">2,024</td>
													<td class=""><span class="posi">0,99%</span></td>
													<td class="">2,03</td>
													<td class="">2,054</td>
													<td class="">16:58:45</td>
													
												</tr>
												<tr id="tr-indici-1">
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
													<td>ATL</td>
													<td><a href="#">ATLANTIA</a></td>
													<td>22,31</td>
													<td><span class="posi">1,43%</span></td>
													<td>22,27</td>
													<td>22,7</td>
													<td>16:59:34</td>
													
												</tr>
												<tr id="tr-indici-2">
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
													<td>AZM</td>
													<td><a href="#">AZIMUT HOLDING</a></td>
													<td>15,87</td>
													<td><span class="posi">0,57%</span></td>
													<td>15,81</td>
													<td>15,98</td>
													<td>16:59:29</td>
													
												</tr>
												<tr id="tr-indici-3">
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
													<td>BMED</td>
													<td><a href="#">BCA MEDIOLANUM ORD</a></td>
													<td>6,845</td>
													<td><span class="posi">0,66%</span></td>
													<td>6,85</td>
													<td>6,94</td>
													<td>16:54:35</td>
													

												</tr>
												<tr id="tr-indici-4">
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
													<td>BPE</td>
													<td><a href="#">BPER BANCA</a></td>
													<td>5,11</td>
													<td><span class="posi">0,68%</span></td>
													<td>nd</td>
													<td>5,94</td>
													<td>16:54:36</td>
													

												</tr>
											</tbody>
										</table>
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
										<!--overlayer fiscalit&agrave; -->

								<!--overlayer fiscalit&agrave; -->
								<script>

									/* Esempio di automazione del glossario */

									var bsTable;

									var showLetterData = function() {

										bsTable.bootstrapTable("destroy").find("tbody").empty();


										var letter = "Tutti";
										if ($(this).is("a")) {
											 $("#glossario .ben li.on").removeClass("on");
											letter = $(this).parents("li").addClass("on").attr("data-letter");
										}
										if (letter == "Tutti") {
											bsTable.bootstrapTable({"data": bsTableData})
										}
										else
										{
											// Filtra i dati della lettera
											var bsFilteredData = $.map(bsTableData,function(row){
												console.log(row.id.split("")[0].toLowerCase() == letter);
												if (row.id.split("")[0].toLowerCase() == letter) return row;
											})

											bsTable.bootstrapTable({"data": bsFilteredData})
										}

									}

									/* Inizializzazione */
									$(function(){

										// Estrae tutti i dati dalla tabella
										bsTable = $("#tb-indici").bootstrapTable();

										// Estrae i dati as-is dalla tabella 
										bsTableData = bsTable.bootstrapTable("getData");
										
										showLetterData();

										/* Crea le lettere lettere del glossario */
										var glBen = $("#glossario .ben").empty();
										var bsTableLetters = $.unique($.map(bsTableData,function(obj){
											return (obj.id.split("")[0].toLowerCase());
										}));

										var lettercode, letterclass;
										/* Inizializza il glossario */
										$.each(("ABCDEFGHIJKLMNOPQRSTUVXYZ").split(""),function(i,v){

											lettercode = v;
											liclass = "off";
											if ($.inArray(v.toLowerCase(),bsTableLetters)>=0) {
												lettercode = $("<a>").html(v).click(showLetterData);
												liclass = "";
											}
											glBen.append($("<li>").addClass(liclass).attr("data-letter",v.toLowerCase()).append(lettercode));
										});
										glBen.append($("<li>").addClass("on").attr("data-letter","Tutti").append($("<a>").html("Tutti").click(showLetterData)));

										/* Sblocca l'interfaccia */
										$("#glossarioWrap").removeClass("loading");
								        });
									</script>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading visible-xs" role=" tab"="" id="heading2b">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion2" href="#collapse2b" aria-expanded="false" aria-controls="collapse2b" class="collapsed">Paniere in push<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
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
					<a data-toggle="collapse" data-parent="#accordion2" href="#collapse3b" aria-expanded="false" aria-controls="collapse3b" class="collapsed">Trend<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
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
					<a data-toggle="collapse" data-parent="#accordion2" href="#collapse4b" aria-expanded="false" aria-controls="collapse4b" class="collapsed">Migliori<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
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
					<a data-toggle="collapse" data-parent="#accordion2" href="#collapse5b" aria-expanded="false" aria-controls="collapse5b" class="collapsed">Peggiori<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
				</h4>
			</div>
			<div id="collapse5b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5b">
				<div class="panel-body">
					<div class="tab-wrap">
						<p>contenuto 5 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading visible-xs" role=" tab"="" id="heading6b">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion2" href="#collapse5b" aria-expanded="false" aria-controls="collapse6b" class="collapsed">Peggiori<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
				</h4>
			</div>
			<div id="collapse6b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6b">
				<div class="panel-body">
					<div class="tab-wrap">
						<div class="row">
							<div class="col-xs-12">
								<label class="control-label">Periodo</label>
								<div class="row">
									<div class="col-xs-6 col-sm-3">
										<div class="formGenerico">
											<div class="radio inline">
												<label class="textWrapper"><input type="radio" name="periodo" value="Giornaliero"><span class="text">Giornaliero</span></label>
											</div>
										</div>
									</div>
									<div class="col-xs-6 col-sm-3">
										<div class="formGenerico">
											<div class="radio inline">
												<label class="textWrapper"><input type="radio" name="periodo" value="Settimanale"><span class="text">Settimanale</span></label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12">
								<iframe scrolling="no" frameborder="0" height="620" src="iframe.php" class="resp-iframe"></iframe>
							</div>
						</div>
						<!-- ESEMPIO TRADERMADE -->

						<!-- FINE ESEMPIO TRADERMADE -->
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading visible-xs" role=" tab"="" id="heading7b">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion2" href="#collapse7b" aria-expanded="false" aria-controls="collapse7b" class="collapsed">Peggiori<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
				</h4>
			</div>
			<div id="collapse7b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7b">
				<div class="panel-body">
					<div class="tab-wrap">
						<p>contenuto 7 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<p class="note">(*) Quotazioni ritardate</p>
<div class="testoIcona emphasis">
	<i class="icon icon-2x icon-arrow_emphasis flLeft"></i>
	<div class="leftTesto">
		<p><strong>Attenzione</strong>: le quotazioni dei mercati esteri sono ritardate di 15 minuti (20 minuti per Nyse, Nikkei e FTSE). Desideri le quotazioni in tempo reale sui mercati di tuo interesse? <a href="#">Vai alla relativa pagina di attivazione</a></p>		
	</div>	
</div>
<div class="testoIcona emphasis">
	<i class="icon icon-2x icon-arrow_emphasis flLeft"></i>
	<div class="leftTesto">
		<p><strong>NYSE Disclaimer</strong>: As your agreement for the receipt and use of market data provides, the securities markets reserve all rights to the market data that they make available; do not to guarantee that data; and shall not be liable for any loss due either to their negligence or to any cause beyond their reasonable control.</p>		
	</div>	
</div>
<script>
//inizializzazione dei tab-accordion
//TRASFORMA IL TAB DI CONTENUTO IN ACCORDION SU MOBILE
//possono coesistere più gruppo di tab/accordion in pagina
//parametri: id contenitore e incice tab ch edeve essere aperto al load

$(function(){
	resizeTab('secondTab',0);
});


</script>






</div>

<h2>Generica</h2>
<section>
	<h4>Inserisci i parametri di ricerca</h4>
	<div id="cercaSel">
		<form class="formGenerico borderFormRounded" role="form" id="form02">
			<div class="form-group">			
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<label class="control-label">Ricerca per</label>					
						<select name="" class="form-control" id="tooltipOnSelect">
                    		<option>seleziona</option>
							<option>ISIN</option>
							<option>simbolo</option>
							<option>descrizione</option>
						</select>
					</div>
					<div class="col-xs-12 col-sm-4">
						<label class="control-label">Titolo</label>
						<input type="text" name="titolo" value="" class="form-control clear-x" autocomplete="off" placeholder="ISIN, simbolo, descrizione">
					</div>
					
					<div class="col-xs-12 col-sm-4">
						<label class="control-label">Mercato</label>
						<select class="form-control">
							<option>tutti</option>
							<option>lorem</option>
						</select>
					</div>
					</div>
					
					
					<div class="row">
					<div class="col-xs-12 col-sm-12 no-label">
						<div class="btn-align-right">
							<a type="button" class="btn btn-primary" href="javascript:;" id="cercaBtn">Cerca</a>
						</div>
					</div>
					
				</div>
			</div>
		</form>
	</div>

	<div id="cercaRisp" style="display:none">
		<form class="formGenerico borderFormRounded" role="form" id="form02">
			<div class="form-group">			
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<label class="control-label-output">Ricerca per</label>					
						<span class="output">Descrizione</span>
					</div>
					<div class="col-xs-12 col-sm-4">
						<label class="control-label-output">Titolo</label>
						<span class="output">Fiat</span>
					</div>
					<div class="col-xs-12 col-sm-4">
						<label class="control-label-output">Mercato</label>
						<span class="output">Tutti</span>
					</div>
				</div>	
				<div class="row">	
					<div class="col-xs-12 col-sm-12 no-label">						
						<div class="btn-align-right">
				          <a type="button" class="btn btn-primary" href="javascript:;" onclick="$('#cercaRisp').hide();$('#cercaSel').show();">nuova ricerca</a>
				          <a type="button" class="btn btn-primary" href="javascript:;" onclick="$('#cercaRisp').hide();$('#cercaSel').show();">modifica ricerca</a>
				        </div>
					</div>
					
				</div>
			</div>
		</form>
		
		<h4>Risultati della ricerca</h4>
		<table id="tableResult" cellspacing="0" cellpadding="0" border="0" data-sortable="true" data-sort-order="asc" data-sort-name="desc"  class="sortableTable" data-pagination="true" data-page-size="10">
			  <thead>
		        <tr>
		        	<th class="center" data-formatter="setIconaOperativa" data-sortable="false">&nbsp;</th>
		        	<th class="left" data-field="desc" data-sortable="true">Descrizione</th>
		        	<th class="left" data-field="simbolo" data-sortable="true">Simbolo</th>
		        	<th class="left" data-field="isin" data-sortable="true">Codice ISIN</th>
		        	<th class="left" data-field="descMercato" data-sortable="true">Mercato</th>
		        	<th class="center" data-field="prezzoRif" data-formatter="setPrezzoData"  data-sortable="true">Prezzo rif.<br>Data</th>
		        </tr>
		      </thead>
		</table>
		<script>
			$('#cercaBtn').click(function(){
				$('#cercaRisp').show();
				$('#cercaSel').hide();
				$('#tableResult').bootstrapTable({data: dataRicerca.vetTitoli});
			})
			
			var dataRicerca = {"isEsito":"true","codEsito":100,"vetTitoli":[{"prezzoRif":6.2,"descMercato":"Francoforte (XETRA)","stockCode":"912436","typeMercato":"B","desc":"FIAT CHRYSLER AUTOMOBILES - ORDINARY SHARES","isThMarket":false,"simbolo":"2FI","codMercato":"EQXET","prezzoRifTimeStamp":1477519200000,"dataPrezzoRif":"27\/10\/2016","codBorsa":"FR","isin":"NL0010877643"},{"prezzoRif":6.54,"descMercato":"NYSE (Dow Jones Industrial Average)","stockCode":"910298","typeMercato":"B","desc":"FIAT CHRYSLER AUTOMOBILES - ORDINARY SHARES","isThMarket":false,"simbolo":"FCAU","codMercato":"EQNY","prezzoRifTimeStamp":1477432800000,"dataPrezzoRif":"26\/10\/2016","codBorsa":"NY","isin":"NL0010877643"},{"prezzoRif":5.895,"descMercato":"AZIONI FTMIB","stockCode":"910312","typeMercato":"B","desc":"FIAT CHRYSLER AUTOMOBILES - ORDINARY SHARES EURO","isThMarket":false,"simbolo":"FCA","codMercato":"EQCON","prezzoRifTimeStamp":0,"dataPrezzoRif":"n.d.","codBorsa":"MI","isin":"NL0010877643"},{"prezzoRif":5.755,"descMercato":"After Hours","stockCode":"910312","typeMercato":"B","desc":"FIAT CHRYSLER AUTOMOBILES - ORDINARY SHARES EURO","isThMarket":true,"simbolo":"FCA","codMercato":"EQTAH","prezzoRifTimeStamp":1477432800000,"dataPrezzoRif":"26\/10\/2016","codBorsa":"MI","isin":"NL0010877643"},{"prezzoRif":"n.d.","descMercato":"NO FTMIB SHARES","stockCode":"2553","typeMercato":"B","desc":"FIAT PRIVILEGIATE","isThMarket":false,"simbolo":"IT0001976411","codMercato":"EQCON","prezzoRifTimeStamp":0,"dataPrezzoRif":"n.d.","codBorsa":"MI","isin":"IT0001976411"}],"msgEsito":" "}
			function setPrezzoData(value, row, index, options) {
				return '<span data-value="' + row.prezzoRif +'">' + row.prezzoRif + '<br>' + row.dataPrezzoRif + '</span>';
			}
			function setIconaOperativa(value, row, index, options) {
				return '<div class="linkTooltip" data-toggle="modal"><a title="scegli l\'operazione da effettuare\' id="" class="linkVai no-underline btn-icon"><i class="icon icon-2x icon-ico_azioni02A"></i></a></div>';
			}
		</script>
		<!--
		<table cellspacing="0" cellpadding="0" border="0" data-sortable="true" data-sort-order="desc" data-sort-name="Descrizione" data-toggle="table" class="sortableTable" data-pagination="true" data-page-size="10">
		    <thead>
		        <tr>
		            <th class="left" data-field="Descrizione" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Descrizione</th>
		            <th class="left" data-field="Simbolo"  data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Simbolo</th>
		            <th class="right" data-field="Codice_ISIN"  data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Codice ISIN</th>
		            <th class="right" data-field="Mercato"  data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Mercato</th>
		            <th class="right" data-field="Prezzo_rif"  data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Prezzo rif.<br>Data</th>
		            <th class="right">&nbsp;</th>
		        </tr>
		    </thead>
		    <tbody>
		        <tr class="dispari">
		            <td class="left min-width"><a href="#">FIAT CHRYSLER AUTOMOBILES - ORDINARY SHARES</a></td>
		            <td class="left">2FI</td>
		            <td class="left">NL0010877643</td>
		            <td class="left">Francoforte (XETRA)</td>
		            <td class="center">5,71<br>02/08/2016</td>
		            <td class="center">
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
							
						<div class="linkTooltip" data-toggle="modal">
							<a title="scegli l'operazione da effettuare" id="link1" class="linkVai no-underline btn-icon" onclick="multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', '']);"><i class="icon icon-2x icon-ico_azioni02A"></i></a>						
						</div>
						<!--overlayer icona operativa 
						<div class="sezioneLinks2 modal fade" id="iconaOperativaMenu1_html" tabindex="-1" role="dialog" aria-labelledby="">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
										<div class="modal-header">
											<a class="close close-top btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
											<h2 class="modal-title" id="myModalLabel">Fiat chrysler automobiles - ordinary shares</h2>
										</div>
										
										<div class="body">
											<ul class="azioni">
													<li class="linkOn"><a title="C/V" href="link1.htm"><span>C/V</span></a></li>
													<li class="linkOff"><span title="C/V">C/V</span></li>
													<hr>
													<li class="linkOn"><a title="Book" href="link2.htm"><span>Book</span></a></li>
													<li class="linkOff"><span title="Book">Book</span></li>
													<hr>
													<li class="linkOn"><a title="Ordine Condizionato" href="link3.htm"><span>Ordine Cond.</span></a></li>
													<li class="linkOff"><span title="Ordine Condizionato">Ordine Cond.</span></li>
													<hr>
													<li class="linkOn"><a title="Analisi Tecnica" href="link4.htm"><span>Analisi Tecnica</span></a></li>
													<li class="linkOff"><span title="Analisi Tecnica">Analisi Tecnica</span></li>
													<hr>
													<li class="linkOn"><a title="Alert" href="link5.htm"><span>Alert</span></a></li>
													<li class="linkOff"><span title="Alert">Alert</span></li>
													<hr>
													<li class="linkOn"><a title="Carry-on" href="/connect.php?page=str_interna_priv.php&tpl=/wetrade/tpl_priv_lib_wt_carry.php&liv1=TR&tr2=0&tr3=0"><span>Carry-on</span></a></li>
													<li class="linkOff"><span title="Carry-on">Carry-on</span></li>
													<hr>
													<li class="linkOn"><a title="Vendi" href="link6.htm"><span>Vendi</span></a></li>
													<li class="linkOff"><span title="Vendi">Vendi</span></li>
													<hr>
													<li class="linkOn"><a title="Vendi" href="/connect.php?page=str_interna_priv.php&tpl=/wetrade/tpl_priv_lib_wt_titoli_in_portafoglio.php&liv1=TR&tr2=0&tr3=0"><span>Visualizza/Vendi</span></a></li>
													<li class="linkOff"><span title="Vendi">Visualizza/Vendi</span></li>
													<hr>
													<li class="linkOn"><a title="Dettaglio fiscale" href="#1" class="close-left" data-dismiss="modal" data-toggle="modal" data-target="#fiscalita"><span>Fiscalità</span></a></li>
													<li class="linkOff"><span title="Dettaglio fiscale">Apre un secondo overlayer Fiscalità </span></li>
												</ul>
												<div class="clear"></div>
										</div>
									
								</div>
							</div>
						</div>
						<!--overlayer fiscalità 
						<div class="modal fade slide-right" id="fiscalita" tabindex="-1" role="dialog" aria-labelledby="">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<a class="close close-top btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
										<h2 class="modal-title" id="myModalLabel">Titolo</h2>
									</div>
									<div class="modal-body">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-12">
													<h3>Sottotitolo</h3>
													<p>lorem</p>
													<a class="close close-right btn-icon" data-dismiss="modal" data-target="#iconaOperativaMenu1_html" data-toggle="modal" aria-label="Close"><i class="icon icon-arrow_left"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
						<!--overlayer fiscalità 
		            </td>
		        </tr>
		        <tr class="pari">
		            <td class="left min-width"><a href="#">FIAT CHRYSLER AUTOMOBILES - ORDINARY SHARES</a></td>
		            <td class="left">FCAU</td>
		            <td class="left">NL0010877643</td>
		            <td class="left">NYSE (Dow Jones Industrial Average)</td>
		            <td class="center">6,81<br>19/08/2016</td>
		            <td class="center">
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
							
						<div class="linkTooltip" data-toggle="modal">
							<a title="scegli l'operazione da effettuare" id="link1" class="linkVai no-underline btn-icon" onclick="multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', '']);"><i class="icon icon-2x icon-ico_azioni02A"></i></a>						
						</div>
						<!--overlayer icona operativa 
						
		            </td>
		        </tr>
		       	<tr class="dispari">
		            <td class="left min-width"><a href="#">FIAT PRIVILEGIATEz</a></td>
		            <td class="left">IT0001976411</td>
		            <td class="left">IT0001976411</td>
		            <td class="left">NO FTMIB SHARES</td>
		            <td class="center">n.d.<br>n.d.</td>
		            <td class="center">
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
							
						<div class="linkTooltip" data-toggle="modal">
							<a title="scegli l'operazione da effettuare" id="link1" class="linkVai no-underline btn-icon" onclick="multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', '']);"><i class="icon icon-2x icon-ico_azioni02A"></i></a>						
						</div>
						
		            </td>
		        </tr>
		    </tbody>
		</table>-->
	</div>
</section>



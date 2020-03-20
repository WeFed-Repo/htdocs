<!--LE FUNZIONALITA' QUI EMULATE SONO SOLO A TITOLO ESEMPLIFICATIVO PRENDERE LE FUNZIONI GIA' PRESENTI IN SVILUPPO -->

<script type="text/javascript">
//inizializzazione datepicker
$(function() {
    $("#datepickerTool").mask("99/99/9999");
    $("#datepickerTool").datepicker({
        beforeShowDay: highlightDays,
        //beforeShowDay: noHolidays,  //si applica se si vuole che i fine sttimana e festivi non siano delezionabili
        minDate: new Date(new Date().getFullYear(), 0, 1),
        maxDate: new Date(new Date().getFullYear() +19, 11, 31),
        showOtherMonths: true,
        showOn: "button",
        prevText: "<i class=\"icon icon-arrow_left\" title=\"mese precedente\"></i>",
        nextText: "<i class=\"icon icon-arrow_right\" title=\"mese successivo\"></i>",
        buttonImage: "/img/ret/pixel_trasp.gif",
        buttonImageOnly: true,
        beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
        onClose: function() {
            $('#datePickerWrapper').modal('hide');
        }
    });
    appendDatePickerIcon('datepickerTool');

});
</script>
<script type="text/javascript">
	/* Inizializzazioni */
	$(function(){
		/* Emulazione interattivita' in pagina*/
		$("#ricercaSwitch").click(function(){
			var rSem = $("#ricercaSemplice"),
			rAva= $("#ricercaAvanzata"),
			rSwi = $(this);
			if (rSwi.hasClass("avanzata")) {
				rSwi.removeClass("avanzata").html("ricerca avanzata");
				rAva.hide();
				rSem.show();
			}
			else
			{
				rSwi.addClass("avanzata").html("ricerca semplice");
				rAva.show();
				rSem.hide();
			}
		});
		$("#ricercaSwitch2").click(function(){
			$('#ricercaSwitch').trigger('click');
			$("html, body").animate({scrollTop: $('#ricercaAncora').eq(0).offset().top})
		});
	})
</script>
<h2>Scegliere i certificates</h2>
<section>
	<div class="row">
		<div class="col-xs-6">
			<h4>Ricerca</h4>
		</div>
		<div class="col-xs-6 align-right">
			<a href="javascript:;" id="ricercaSwitch">ricerca avanzata</a>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<form class="formGenerico borderFormRounded searchFilter noMarginBottom" role="form">
				<div id="ricercaSemplice">
					<div class="form-group">
						<div class="row">
							<div class="col-sm-3 col-xs-12">
								<label class="control-label">Categoria</label>
								<select class="form-control">
									<option>Covered warrant</option>
									<option>Strutturati - Esotici</option>
								</select>
							</div>
							<div class="col-sm-3 col-xs-12">
								<label class="control-label">Tipologia</label>
								<select class="form-control">
									<option>CW con valore nominale</option>
									<option>CAP</option>
									<option>Corridor</option>
									<option>Plain Vanilla</option>
								</select>
							</div>	
							<div class="col-sm-3 col-xs-12">
								<label class="control-label">Emittente</label>
								<select class="form-control">
									<option>Banca Akros</option>
									<option>Banca Imi</option>
									<option>Banca Monte Paschi di Siena</option>
									<option>BNP Paribas Issuance</option>
									<option>Commerzbank</option>
									<option>Natixis structured issuance</option>
									<option>Societe generale</option>
									<option>Societe generale issuer</option>
									<option>Unicredit Bank</option>
									<option>Vontobel financial products GM</option>
								</select>
							</div>
							<div class="col-sm-3 col-xs-12 no-label">
								<div class="form-inline">
		                            <div class="input-group">
		                                <input type="text" id="datepickerTool" placeholder="gg/mm/aaaa" class="form-control clear-x">
		                                <div class="input-group-addon date"><i class="icon icon-calendar_filled"></i ></div>
				       	 			</div>
								</div>
							</div>
							
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-xs-12">
								<div class="btn-align-center">
									<a type="button" class="btn btn-primary" id="">Cerca</a>
								</div>
							</div>								
						</div>
					</div>
				</div>
				<div id="ricercaAvanzata" style="display:none">
					<div class="form-group">			
						<div class="row">				
							<div class="col-xs-12 col-sm-6">
								<label class="control-label">Categoria</label>
						<select class="form-control params" data-option="categoriaSearch" name="categoria" id="categoria" onchange="if($('#categoria').val()!='ALL'){
								$('#idTdTipologia').show()
							}else{$('#idTdTipologia').hide()}">

									<option selected="selected" value="ALL">Tutti</option>
							
									<option value="30">Covered warrant</option>
							
									<option value="31">Strutturati - Esotici</option>
								
								</select>
							</div>
							<div class="col-xs-12 col-sm-6" id="idTdTipologia" style="display: none;">
								<label class="control-label">Tipologia</label>
								<select class="form-control params" data-option="tipologiaSearch" name="tipologia" id="tipologia">
									<option selected="selected" value="ALL">Tutti</option>			
								</select>
							</div>
						</div>
					</div>
					<div class="form-group">			
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<label class="control-label">Emittente</label>
								<select class="form-control params" data-option="emittenteSearch" name="emittente" id="emittente">
									<option selected="selected" value="ALL">Tutti</option>
							
										<option value="14605">BANCA AKROS                   </option>
							
										<option value="4041">BANCA IMI                     </option>
							
										<option value="20">BANCA MONTE PASCHI SIENA      </option>
							
										<option value="12225">BNP PARIBAS ISSUANCE          </option>
							
										<option value="474">COMMERZBANK                   </option>
							
										<option value="17840">NATIXIS STRUCTURED ISSUANCE   </option>
							
										<option value="1013">SOCIETE GENERALE              </option>
							
										<option value="17750">SOCIETE GENERALE ISSUER       </option>
							
										<option value="5833">UNICREDIT BANK                </option>
							
										<option value="13765">VONTOBEL FINANCIAL PRODUCTS GM</option>
								
								</select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">				
							<div class="col-xs-12 col-sm-6">
								<label class="control-label">Categoria sottostante</label>
								<select class="form-control params" data-option="catSottostanteSearch" name="catSottostante" id="catSottostante" onchange="if($('#catSottostante').val()!='ALL'){
									$('#idTdSottostante').show()
									}else{$('#idTdSottostante').hide()}">
									<option selected="selected" value="ALL">Tutti</option>
							
										<option value="2">Azione italiana</option>
							
										<option value="9">Future su commodities</option>
							
										<option value="5">Commodities</option>
							
										<option value="6">Azione estera</option>
							
										<option value="1">Paniere</option>
							
										<option value="12">Tassi di interesse</option>
							
										<option value="8">Valute</option>
								
								</select>
							</div>
							<div class="col-xs-12 col-sm-6" style="display: none;" id="idTdSottostante">
								<label class="control-label">Sottostante</label>
								<select class="form-control params" data-option="sottostanteSearch" data-isoptional="true" name="sottostante" id="sottostante" onclick="RicercaTrading.closeBoxErrorInput(['idTdStrikeInput','idTdStrikeValInput']);">
									<option selected="selected" value="ALL">Tutti</option>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">				
							<div class="col-xs-12">
								<a data-toggle="collapse" href="#collapse1b" aria-expanded="false" aria-controls="collapse1b" class="no-underline btn-icon collapsed">Parametri opzionali <i class="icon icon-row_expand"></i><i class="icon icon-row_contract"></i></a>
							</div>			
						</div>
					</div>		
					<div id="collapse1b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1b">
						<div class="form-group">
							<div class="row">
								<div class="col-sm-4">
									<label class="control-label">Codice Isin</label>
									<div class="editable-input"><input type="text" name="isinCode" id="isinCode" class="form-control clear-x params" data-option="isinSearch" data-isoptional="true"><span class="editable-clear-x" style="display: none"><i class="icon icon-close icon-1x"></i></span></div>
								</div>
								<div class="col-sm-8">
									<label class="control-label">Scadenza</label>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-inline">
												  <div class="input-group">
												     <div class="input-group-addon first">Dal</div>
												     <div class="editable-input"><input type="text" id="datepickerTool1" placeholder="gg/mm/aaaa" class="form-control clear-x params hasDatepicker" data-option="idCellDataScadenzaDa" data-isoptional="true" name="dataScadenzaDa"><span class="editable-clear-x" style="display: none"><i class="icon icon-close icon-1x"></i></span></div> 
												     <div class="input-group-addon date"><i class="icon icon-calendar"></i><img class="ui-datepicker-trigger" src="/img/ret/pixel_trasp.gif" alt="..." title="..."></div>
												  </div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-inline">
												  <div class="input-group">
												     <div class="input-group-addon first">Al</div>
												     <div class="editable-input"><input type="text" id="datepickerTool3" placeholder="gg/mm/aaaa" class="form-control clear-x params hasDatepicker" data-option="idCellDataScadenzaA" data-isoptional="true" name="dataScadenzaAl"><span class="editable-clear-x" style="display: none"><i class="icon icon-close icon-1x"></i></span></div> 
												     <div class="input-group-addon date"><i class="icon icon-calendar"></i><img class="ui-datepicker-trigger" src="/img/ret/pixel_trasp.gif" alt="..." title="..."></div>
												  </div>
											</div> 
										</div>  
									</div>
								</div>									
							</div>
						</div>
						<div class="form-group">
							<div class="row">									
								<div class="col-sm-8">
									<label class="control-label">Strike price</label>
									<div class="row">							
										<div class="col-sm-6">
											<div class="form-inline">
											  <div class="form-group">
												  <div class="input-group">
												     <div class="input-group-addon first">Da</div>
												     <div class="editable-input"><input type="text" placeholder="" class="form-control clear-x params" data-option="idCellStrikePriceDa" data-isoptional="true" name="strikePriceDa" id="strikePriceDa"><span class="editable-clear-x" style="display: none"><i class="icon icon-close icon-1x"></i></span></div>
												  </div>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-inline">
											 <div class="form-group">
												  <div class="input-group">
												     <div class="input-group-addon first">A</div>
												     <div class="editable-input"><input type="text" placeholder="" class="form-control clear-x params" data-option="idCellStrikePriceA" name="strikePriceA" id="strikePriceA"><span class="editable-clear-x" style="display: none"><i class="icon icon-close icon-1x"></i></span></div>
												  </div>
												</div>
											</div> 
										</div>  
									</div>
								</div>
							</div>
						</div>
					</div>					
					<div class="clearfix"></div>
					<div class="form-group">
						<div class="row">
							<div class="col-xs-12">
								<div class="btn-align-right">
									<a type="button" class="btn btn-primary" href="javascript:RicercaTradingCwCertificates.ricercaCwCertificates('search','resCW')">cerca</a>
						        </div>
						    </div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
<section>
	<p>Gli investments certificates ti permettono di scegliere la protezione dai ribassi del mercato ed il tipo di esposizione desiderata nei confronti dello stesso. Per capire come utilizzare correttamente gli investments certificates è consigliabile studiarne le caratteristiche e il funzionamento.<br>
	<strong>Clicca sul grafico del certificato per visualizzare le caratteristiche principali dello strumento oppure sul nome per accedere alla sezione di compravendita.</strong></p>
</section>
<section>
	<div class="navContSecondLev" id="secondTab">
	<div class=" outerTab">
		<ul class="tabWrapper tabsmall hidden-xs">
			<li class="on"><a href="#heading1b">protezione capitale</a></li>
			<li class=""><a href="#heading2b">parziale protezione capitale</a></li>
			<li class=""><a href="#theading3b">no protezione capitale</a></li>
		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-group panel-fill" id="accordion2" role="tablist" aria-multiselectable="true">
		<div class="panel panel-default">
			<div class="panel-heading visible-xs" role=" tab" id="heading1b">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion2" href="#collapse1b" aria-expanded="true" aria-controls="collapse1b" class="">protezione capitale<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
				</h4>
			</div>
			<div id="collapse1b" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1b" style="height: auto;">
				<div class="panel-body">
					<div class="tab-wrap">
						<table cellspacing="0" cellpadding="0" border="0" data-toggle="table">
							 <thead>
						        <tr>
						           <th class="left">Tipologia</th>
						           <th class="left">Caratteristiche</th>
						           <th class="left">Obiettivo investimento</th>
						           <th class="left">Rischio</th>
						         </tr>
						      </thead>
						      <tbody>
						      		<tr>
						      			<td>
						      				<a href="#">Double Win</a>
						      			</td>
						      			<td>
						      				<a href="" data-toggle="modal" data-target="#layerScegliereCerticates">
											<img alt="" src="/img/ret/cert_double_win.png"></a>
						      			</td>
						      			<td><p>
						      				Possibilit&agrave; di rendimenti positivi anche nel caso di performance negativa del sottostante
						      			</p>
						      			</td>
						      			<td>
						      				<img alt="" src="/img/ret/cert_lim_unl_5.gif">
						      			</td>
						      		</tr>
						      		<tr>
						      			<td>
						      				<a href="#">Equity Protection</a>
						      			</td>
						      			<td>
						      				<a href="" data-toggle="modal" data-target="#layerScegliereCerticates">
											<img alt="" src="/img/ret/cert_equity_protection.png">
											</a>
						      			</td>
						      			<td><p>
						      				Trarre profitto da rialzi del sottostante, con protezione
						      			</p>
						      			</td>
						      			<td>
						      				<img alt="" src="/img/ret/cert_lim_unl_4.gif">
						      			</td>
						      		</tr>
						      		<tr>
						      			<td>
						      				<a href="#">Butterfly</a>
						      			</td>
						      			<td>
						      				<a href="" data-toggle="modal" data-target="#layerScegliereCerticates">
											<img alt="" src="/img/ret/cert_butterfly.png">
											</a>
						      			</td>
						      			<td><p>
						      				Trarre profitto dal rialzo e dal ribasso del sottostante, proteggendo il 100% del capitale investito
						      			</p>
						      			</td>
						      			<td>
						      				<img alt="" src="/img/ret/cert_lim_unl_5.gif">
						      			</td>
						      		</tr>
						      		<tr>
						      			<td>
						      				<a href="#">Airbag</a>
						      			</td>
						      			<td>
						      				<a href="" data-toggle="modal" data-target="#layerScegliereCerticates">
											<img alt="" src="/img/ret/cert_airbug.png">
											</a>
						      			</td>
						      			<td><p>
						      				Trarre profitto dal rialzo del sottostante,annullando o ammortizzando i ribassi ricorrendo taluni presupposti
						      			</p>
						      			</td>
						      			<td>
						      				<img alt="" src="/img/ret/cert_lim_unl_4.gif">
						      			</td>
						      		</tr>
						      		<tr>
						      			<td>
						      				<a href="#">Relative Value</a>
						      			</td>
						      			<td>
						      				<a href="" data-toggle="modal" data-target="#layerScegliereCerticates">
											<img alt="" src="/img/ret/cert_relative_value.png">
											</a>
						      			</td>
						      			<td><p>
						      				Scommettere sul rialzo del rapporto o del differenziale tra un asset Long e un asset Short
						      			</p>
						      			</td>
						      			<td>
						      				<img alt="" src="/img/ret/cert_lim_unl_5.gif">
						      			</td>
						      		</tr>
						      </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading visible-xs" role=" tab" id="heading2b">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion2" href="#collapse2b" aria-expanded="true" aria-controls="collapse2b" class="">parziale protezione capitale<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
				</h4>
			</div>
			<div id="collapse1c" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2b" style="height: auto;">
				<div class="panel-body">
					<div class="tab-wrap">
						<table cellspacing="0" cellpadding="0" border="0" data-toggle="table">
							  <thead>
						        <tr>
						           <th class="left">Tipologia</th>
						           <th class="left">Caratteristiche</th>
						           <th class="left">Obiettivo investimento</th>
						           <th class="left">Rischio</th>
						         </tr>
						      </thead>
						      <tbody>
						      		<tr>
						      			<td>
						      				<a href="#">Cash collect</a>
						      			</td>
						      			<td>
						      				<a href="" data-toggle="modal" data-target="#layerScegliereCerticates">
											<img alt="" src="/img/ret/cert_cash_collect.png"></a>
						      			</td>
						      			<td><p>
						      				Trarre profitti cedolari anche con ribassi	limitati del sottostante
						      			</p>
						      			</td>
						      			<td>
						      				<img alt="" src="/img/ret/cert_lim_unl_3.gif">
						      			</td>
						      		</tr>
						      		<tr>
						      			<td>
						      				<a href="#">Express</a>
						      			</td>
						      			<td>
						      				<a href="" data-toggle="modal" data-target="#layerScegliereCerticates">
											<img alt="" src="/img/ret/cert_express.png">
											</a>
						      			</td>
						      			<td><p>
						      				Trarre profitto dalla stabilità , moderato rialzo o moderato ribasso del sottostante
						      			</p>
						      			</td>
						      			<td>
						      				<img alt="" src="/img/ret/cert_lim_unl_3.gif">
						      			</td>
						      		</tr>
						      		<tr>
						      			<td>
						      				<a href="#">Twin Win</a>
						      			</td>
						      			<td>
						      				<a href="" data-toggle="modal" data-target="#layerScegliereCerticates">
											<img alt="" src="/img/ret/cert_twin_win.png">
											</a>
						      			</td>
						      			<td><p>
						      				Trarre profitto sia da rialzi che da ribassi del sottostante
						      			</p>
						      			</td>
						      			<td>
						      				<img alt="" src="/img/ret/cert_lim_unl_3.gif">
						      			</td>
						      		</tr>
						      		<tr>
						      			<td>
						      				<a href="#">Bonus</a>
						      			</td>
						      			<td>
						      				<a href="" data-toggle="modal" data-target="#layerScegliereCerticates">
											<img alt="" src="/img/ret/cert_bonus.png">
											</a>
						      			</td>
						      			<td><p>
						      				Trarre profitto dal rialzo o moderato ribasso del sottostante, con possibilità  di ricevere bonus o, se maggiore, la performance del sottostante
						      			</p>
						      			</td>
						      			<td>
						      				<img alt="" src="/img/ret/cert_lim_unl_3.gif">
						      			</td>
						      		</tr>
						      		<tr>
						      			<td>
						      				<a href="#">Discount</a>
						      			</td>
						      			<td>
						      				<a href="" data-toggle="modal" data-target="#layerScegliereCerticates">
											<img alt="" src="/img/ret/cert_discount.png">
											</a>
						      			</td>
						      			<td><p>
						      				Trarre profitto dal rialzo a breve-medio termine del sottostante in anticipo rispetto all'investimento del	singolo indice o titolo
						      			</p>
						      			</td>
						      			<td>
						      				<img alt="" src="/img/ret/cert_lim_unl_3.gif">
						      			</td>
						      		</tr>
						      </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading visible-xs" role=" tab" id="heading2c">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion2" href="#collapse2c" aria-expanded="true" aria-controls="collapse2c" class="">no protezione capitale<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
				</h4>
			</div>
			<div id="collapse2c" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2c" style="height: auto;">
				<div class="panel-body">
					<div class="tab-wrap">
						<table cellspacing="0" cellpadding="0" border="0" data-toggle="table">
							  <thead>
						        <tr>
						           <th class="left">Tipologia</th>
						           <th class="left">Caratteristiche</th>
						           <th class="left">Obiettivo investimento</th>
						           <th class="left">Rischio</th>
						         </tr>
						      </thead>
						      <tbody>
						      		<tr>
						      			<td>
						      				<a href="#">Benchmark</a>
						      			</td>
						      			<td>
						      				<a href="" data-toggle="modal" data-target="#layerScegliereCerticates">
											<img alt="" src="/img/ret/cert_benckmark.png"></a>
						      			</td>
						      			<td><p>
						      				Trarre profitto dai rialzi del sottostante
						      			</p>
						      			</td>
						      			<td>
						      				<img alt="" src="/img/ret/cert_lim_unl_2.gif">
						      			</td>
						      		</tr>
						      		<tr>
						      			<td>
						      				<a href="#">Direzionali</a>
						      			</td>
						      			<td>
						      				<a href="" data-toggle="modal" data-target="#layerScegliereCerticates">
											<img alt="" src="/img/ret/cert_direzionali.png">
											</a>
						      			</td>
						      			<td><p>
						      				Trarre profitto da rialzi o ribassi del sottostante
						      			</p>
						      			</td>
						      			<td>
						      				<img alt="" src="/img/ret/cert_lim_unl_2.gif">
						      			</td>
						      		</tr>
						      		<tr>
						      			<td>
						      				<a href="#">Outperformance con Cap</a>
						      			</td>
						      			<td>
						      				<a href="" data-toggle="modal" data-target="#layerScegliereCerticates">
											<img alt="" src="/img/ret/cert_outperformance_con_cap.png">
											</a>
						      			</td>
						      			<td><p>
						      				Trarre profitto dal rialzo a breve-medio termine del sottostante, con possibilità  di raddoppiare il proprio guadagno
						      			</p>
						      			</td>
						      			<td>
						      				<img alt="" src="/img/ret/cert_lim_unl_1.gif">
						      			</td>
						      		</tr>
						      		<tr>
						      			<td>
						      				<a href="#">Outperformance senza Cap</a>
						      			</td>
						      			<td>
						      				<a href="" data-toggle="modal" data-target="#layerScegliereCerticates">
											<img alt="" src="/img/ret/cert_bonus.png">
											</a>
						      			</td>
						      			<td><p>
						      				Trarre profitto dal rialzo a breve-medio termine del sottostante, con possibilità  di amplificare il proprio guadagno
						      			</p>
						      			</td>
						      			<td>
						      				<img alt="" src="/img/ret/cert_lim_unl_1.gif">
						      			</td>
						      		</tr>
						      		
						      </tbody>
						</table>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<p class="note">Propriet&agrave; e fonte dei dati: Acepi.</p>
	<section>
		<div class="testoIcona emphasis">
			<i class="icon icon-2x icon-arrow_emphasis flLeft"></i>
			<div class="leftTesto">
					<p><strong>Attenzione:</strong> le quotazioni dei mercati esteri sono ritardate di 15 minuti (20 minuti per Nyse, Nikkei e FTSE). Desideri le quotazioni in tempo reale sui mercati di tuo interesse? <a href="#">Vai alla relativa pagina di attivazione</a></p>		
			</div>
		</div>
		<div class="testoIcona emphasis">
			<i class="icon icon-2x icon-arrow_emphasis flLeft"></i>
			<div class="leftTesto">
				<strong>In questa pagina puoi:</strong><br>
					<ul>
						<li>ricercare un covered warrant del mercato azionario italiano di cui conosci il codice ISIN</li>
						<li>consultare in sintesi le ultime notizie dei principali mercati finanziari e accedere alla sezione dove puoi trovarne il dettaglio</li>
						<li>effettuare una ricerca mirata in base all'emittente, alla categoria del sottostante, al tipo di operazione, alla scadenza e alla fascia di strike price del covered warrant ricercato.</li>
					</ul>
			</div>
		</div>
	</section>
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



</section>
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

<h2>Orari di negoziazione e regolamento</h2>
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
	<h3>Gli orari di negoziazione e regolamento</h3>
	<img src="/img/ret/mcw.gif" alt="">
</section>
<section>
	<h3>Trading day orari di negoziazione</h3>
	<p>08:00 - 09:05    Apertura    Inserimento e cancellazione ordini<br>
	09:05 - 17:30    Continua    Negoziazione Continua</p>
	<p>
		Gli ordini sono eseguiti secondo le priorit&agrave; temporali e di prezzo;<br>I prezzi sono espressi in euro e devono essere multipli di valori (tick) stabiliti per ogni strumento 
		finanziario, come da tabella seguente:
	</p>
	<table>
		<thead>
			<tr>
				<th class="left">Prezzo delle proposte di negoziazione inserite (&euro;)</th>
				<th class="right">Variazione minima</th>
			</tr>
		</thead>
		<tbody>
			<tr class="dispari">
				<td class="left">Inferiore o uguale a 0,003</td>
				<td class="right">0,0001</td>
			</tr>
			<tr class="pari">
				<td class="left">0,0031 - 0,3</td>
				<td class="right">0,0005</td>
			</tr>
			<tr class="dispari">
				<td class="left">0,3 - 1,5</td>
				<td class="right">0,0001</td>
			</tr>
		</tbody>
	</table>
	<p>
		Possono essere immessi esclusivamente ordini per quantitativi pari ai lotti minimi;<br>
		Possono essere inseriti sia SENZA LIMITE DI PREZZO (parametro Esegui Comunuque) sia con LIMITE di PREZZO. Durante la fase di negoziazione Continua le proposte senza 
		limite di prezzo sono eseguibili ai migliori livelli di prezzo presenti sul lato opposto del book e sono cancellati per la parte eventualmente ineseguita; gli ordini senza limite di 
		prezzo in fase Continua sono immessi con parametro ECO (Esegui Comunque) e devono essere accompagnati dal parametro di quantità EEC (Esegui e Cancella) o TON 
		(Tutto o Niente);<br>
		Regolamento delle operazioni: i contratti di compravendita avente ad oggetto titoli azionari sono liquidati il terzo giorno di borsa aperta successivo alla stipula;<br>
		Possono essere immessi ordini solo sia validi fino a chiusura;<br>
		I titoli appartenenti al Mercato dei Covered Warrant sono negoziati tramite un sistema di negoziazione che provvede ad incrociare elettronicamente ed automaticamente 
		le proposte di negoziazione sui titoli.
	</p>
</section>
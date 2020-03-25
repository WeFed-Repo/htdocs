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


<h2>Migliori e peggiori CW</h2>
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
	<div class="navContSecondLev" id="secondTab">
	<div class=" outerTab">
		<ul class="tabWrapper tabsmall hidden-xs">
			<li class=""><a href="#heading1b">Migliori</a></li>
			<li class=""><a href="#heading2b">Peggiori</a></li>
		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-group panel-fill" id="accordion2" role="tablist" aria-multiselectable="true">
		<div class="panel panel-default">
			<div class="panel-heading visible-xs" role=" tab"="" id="heading1b">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion2" href="#collapse1b" aria-expanded="false" aria-controls="collapse1b" class="collapsed">Migliori<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
				</h4>
			</div>
			<div id="collapse1b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1b">
				<div class="panel-body">
					<div class="tab-wrap">
						<table cellpadding="0" cellspacing="0">
							<thead>
								<tr>
									<th class="center"></th>
									<th>Simb.</th>
									<th>Titolo</th>
									<th>Ult.Prezzo</th>
									<th>Var.%</th>
									<th>Prezzo Min.</th>
									<th>Prezzo Max.</th>
									<th>Ora</th>
									
								</tr>
							</thead>
							<tbody>
								<tr class="dispari">
									<td>
										<div class="linkTooltip" data-toggle="modal">
											<a title="scegli l'operazione da effettuare" id="link1" class="linkVai no-underline btn-icon" onclick="multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', '']);"><i class="icon icon-2x icon-ico_azioni02A"></i></a>						
										</div>
									</td>
									<td>UI976F</td>
									<td><a href="javascript:RicercaTrading.loadSchedaProdotto('MI|CW|889415')">UCFTMIB0,0001SLP2100</a></td>
									<td>n.d.</td>
									<td>n.d.</td>
									<td>n.d.</td>
									<td>n.d.</td>
									<td>n.d.</td>
									
								</tr>
								<tr class="pari">
									<td>
										<div class="linkTooltip" data-toggle="modal">
											<a title="scegli l'operazione da effettuare" id="link1" class="linkVai no-underline btn-icon" onclick="multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', '']);"><i class="icon icon-2x icon-ico_azioni02A"></i></a>						
										</div>
									</td>
									<td>UI976F</td>
									<td><a href="javascript:RicercaTrading.loadSchedaProdotto('MI|CW|889415')">UCFTMIB0,0001SLP24000A151217 COVERED PUT WARRANT 2015-15.12.</a></td>
									<td>n.d.</td>
									<td>n.d.</td>
									<td>n.d.</td>
									<td>n.d.</td>
									<td>n.d.</td>
									
								</tr>
								<tr class="dispari">
									<td>
										<div class="linkTooltip" data-toggle="modal">
											<a title="scegli l'operazione da effettuare" id="link1" class="linkVai no-underline btn-icon" onclick="multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', '']);"><i class="icon icon-2x icon-ico_azioni02A"></i></a>						
										</div>
									</td>
									<td>UI976F</td>
									<td><a href="javascript:RicercaTrading.loadSchedaProdotto('MI|CW|889415')">UCFTMIB0,0001SLP2100</a></td>
									<td>n.d.</td>
									<td>n.d.</td>
									<td>n.d.</td>
									<td>n.d.</td>
									<td>n.d.</td>
									
								</tr>
								<tr class="pari">
									<td>
										<div class="linkTooltip" data-toggle="modal">
											<a title="scegli l'operazione da effettuare" id="link1" class="linkVai no-underline btn-icon" onclick="multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', '']);"><i class="icon icon-2x icon-ico_azioni02A"></i></a>						
										</div>
									</td>
									<td>UI976F</td>
									<td><a href="javascript:RicercaTrading.loadSchedaProdotto('MI|CW|889415')">UCFTMIB0,0001SLP24000A151217 COVERED PUT WARRANT 2015-15.12.</a></td>
									<td>n.d.</td>
									<td>n.d.</td>
									<td>n.d.</td>
									<td>n.d.</td>
									<td>n.d.</td>
									
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading visible-xs" role=" tab"="" id="heading2b">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion2" href="#collapse2b" aria-expanded="false" aria-controls="collapse2b" class="collapsed">Peggiori<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
				</h4>
			</div>
			<div id="collapse2b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2b">
				<div class="panel-body">
					<div class="tab-wrap">
						<table cellpadding="0" cellspacing="0">
							<thead>
								<tr>
									<th class="center"></th>
									<th>Simb.</th>
									<th>Titolo</th>
									<th>Ult.Prezzo</th>
									<th>Var.%</th>
									<th>Prezzo Min.</th>
									<th>Prezzo Max.</th>
									<th>Ora</th>
								</tr>
							</thead>
							<tbody>
								<tr class="dispari">
									<td>
										<div class="linkTooltip" data-toggle="modal">
											<a title="scegli l'operazione da effettuare" id="link1" class="linkVai no-underline btn-icon" onclick="multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', '']);"><i class="icon icon-2x icon-ico_azioni02A"></i></a>						
										</div>
									</td>
									<td>UI976F</td>
									<td><a href="javascript:RicercaTrading.loadSchedaProdotto('MI|CW|889415')">UCFTMIB0,0001SLP2100</a></td>
									<td>n.d.</td>
									<td>n.d.</td>
									<td>n.d.</td>
									<td>n.d.</td>
									<td>n.d.</td>
									
								</tr>
								<tr class="pari">
									<td>
										<div class="linkTooltip" data-toggle="modal">
											<a title="scegli l'operazione da effettuare" id="link1" class="linkVai no-underline btn-icon" onclick="multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', '']);"><i class="icon icon-2x icon-ico_azioni02A"></i></a>						
										</div>
									</td>
									<td>UI976F</td>
									<td><a href="javascript:RicercaTrading.loadSchedaProdotto('MI|CW|889415')">UCFTMIB0,0001SLP24000A151217 COVERED PUT WARRANT 2015-15.12.</a></td>
									<td>n.d.</td>
									<td>n.d.</td>
									<td>n.d.</td>
									<td>n.d.</td>
									<td>n.d.</td>
									
								</tr>
								<tr class="dispari">
									<td>
										<div class="linkTooltip" data-toggle="modal">
											<a title="scegli l'operazione da effettuare" id="link1" class="linkVai no-underline btn-icon" onclick="multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', '']);"><i class="icon icon-2x icon-ico_azioni02A"></i></a>						
										</div>
									</td>
									<td>UI976F</td>
									<td><a href="javascript:RicercaTrading.loadSchedaProdotto('MI|CW|889415')">UCFTMIB0,0001SLP2100</a></td>
									<td>n.d.</td>
									<td>n.d.</td>
									<td>n.d.</td>
									<td>n.d.</td>
									<td>n.d.</td>
									
								</tr>
								<tr class="pari">
									<td>
										<div class="linkTooltip" data-toggle="modal">
											<a title="scegli l'operazione da effettuare" id="link1" class="linkVai no-underline btn-icon" onclick="multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', '']);"><i class="icon icon-2x icon-ico_azioni02A"></i></a>						
										</div>
									</td>
									<td>UI976F</td>
									<td><a href="javascript:RicercaTrading.loadSchedaProdotto('MI|CW|889415')">UCFTMIB0,0001SLP24000A151217 COVERED PUT WARRANT 2015-15.12.</a></td>
									<td>n.d.</td>
									<td>n.d.</td>
									<td>n.d.</td>
									<td>n.d.</td>
									<td>n.d.</td>
									
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
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


</section>
<section>
	<h3>Tutto su sedex</h3>
	<ul class="documenti">
		<li><a href="#" class="btn-icon"><i class="icon icon-pdf_circle_filled"></i><span>La Brochure di SeDeX</span></a></li>
		<li><a href="#" class="btn-icon"><i class="icon icon-excel_filled"></i><span>Elenco Indici Sottostanti</span></a></li>
		<li><a href="#" class="btn-icon"><i class="icon icon-excel_filled"></i><span>Elenco Basket Sottostanti </span></a></li>
	</ul>
</section>
<section>
	<p class="note">Propriet&agrave; e fonte dei dati: Borsa Italiana.</p>
	<div class="testoIcona emphasis">
		<i class="icon icon-2x icon-arrow_emphasis flLeft"></i>
		<div class="leftTesto">
			<p><strong>Attenzione:</strong> le quotazioni dei mercati esteri sono ritardate di 15 minuti (20 minuti per Nyse, Nikkei e FTSE). Desideri le quotazioni in tempo reale sui mercati di tuo interesse? <a href="#">Vai alla relativa pagina di attivazione</a></p>		
		</div>	
	</div>
</section>
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
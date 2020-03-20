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
<h2>Mercato SEDEX e tipi di CW</h2>
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
	<h3>Il mercato Sedex</h3>
	<p>SEDEX &egrave; il mercato regolamentato telematico di Borsa Italiana dove è possibile negoziare certificates e covered warrant, nel loro insieme denominati securitised derivatives. I securitised derivatives sono strumenti derivati, ovvero strumenti finanziari il cui prezzo dipende dall'andamento di un'altra attività denominata sottostante (ad esempio, azioni, indici, commodity, tassi d'interesse o tassi di cambio) e le cui caratteristiche contrattuali, trattandosi di strumenti finanziari cartolarizzati, sono incorporate in un titolo negoziabile emesso generalmente da un'istituzione finanziaria.</p>
	<h3>La segmentazione del mercato</h3>
	<p>Su SEDEX sono negoziati sia securitised derivatives caratterizzati dalla presenza del cosiddetto effetto leva (leverage securitised derivatives) sia securitised derivatives che rispondono a logiche d'investimento a mediolungo termine (investment securitised derivatives).</p>
	<h3>Covered warrant plain vanilla</h3>
	<p>I covered warrant plain vanilla rappresentano la categoria pi&ugrave; semplice di covered warrant, in quanto incorporano unicamente una facoltà di acquisto (covered warrant call) o di vendita (covered warrant put).
	<a href="#" data-toggle="modal" data-target="#layerApprofondimenti1">approfondisci</a>
	</p>
	<h3>Strutturati esotici</h3>
	<p>Sono covered warrant la cui componente principale &egrave; rappresentata da combinazioni di opzioni call e/o put, e/o da una o pi&ugrave; opzioni esotiche. Per opzioni esotiche si intendono quegli strumenti finanziari derivati molto eterogenei tra loro, aventi payoff più complessi rispetto alle opzioni plain vanilla.
	<a href="#" data-toggle="modal" data-target="#layerApprofondimenti1">approfondisci</a></p>
</section>
<section>

<div class="navContSecondLev" id="secondTab">
	<div class=" outerTab">
		<ul class="tabWrapper tabsmall hidden-xs">
			<li class=""><a href="#heading1b">plain vanilla call</a></li>
			<li class=""><a href="#heading2b">plain vanilla put</a></li>
			<li class=""><a href="#theading3b">digitali</a></li>
			<li class=""><a href="#theading4b">sui tassi</a></li>
			<li class=""><a href="#theading5b">rainbow</a></li>
			
		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-group panel-fill" id="accordion2" role="tablist" aria-multiselectable="true">
		<div class="panel panel-default">
			<div class="panel-heading visible-xs" role=" tab"="" id="heading1b">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion2" href="#collapse1b" aria-expanded="false" aria-controls="collapse1b" class="collapsed">plain vanilla call<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
				</h4>
			</div>
			<div id="collapse1b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1b">
				<div class="panel-body">
					<div class="tab-wrap">
						<h4>Covered Warrant Plain Vanilla Call:</h4>
						<p>Conferiscono la facoltà al portatore di acquistare, alla la data di scadenza (o entro la data di scadenza), un certo quantitativo dell'attività sottostante ad un prezzo prestabilito (strike price), ovvero, nel caso di strumenti per i quali è prevista una liquidazione monetaria (cash delivery), di incassare una somma di denaro determinata come differenza tra il prezzo di liquidazione dell'attività sottostante e lo strike price.</p>
						<div class="box-generico">
							<div class="row">
								<div class="col-sm-4">
									<img src="/img/ret/cw_plain_call.png" title="Covered Warrant Plain Vanilla Call">
								</div>
								<div class="col-sm-8">
									<p>Entro la data di scadenza il portatore pu&ograve;:</p>
									<ul>
										<li>acquistare un certo quantitativo dell'attivit&agrave; sottostante a un prezzo stabilito (strike price)</li>
										<li>incassare una somma di denaro pari alla differenza tra il prezzo di liquidazione dell'attivit&agrave; sottostante e lo strike price</li>
									</ul>
								</div>
							</div>
						</div>
						<p>Legenda:<br>
						<img alt="" src="/img/ret/cw_lettera_s.png"> <span>Strike price</span> <br>
						<img alt="" src="/img/ret/cw_lettera_a.png"> <span>prezzo di liquidazione dell'attività sottostante</span></p>
						<p>Esempio:<br>
						Se lo strike price &egrave; fissato a 5 euro e, alla data di scadenza, il prezzo di liquidazione dell'attivit&agrave; sottostante &egrave; 6,5 euro il portatore pu&ograve;:<br> Acquistare a 5 euro o incassare <img alt="" src="/img/ret/cw_lettera_s.png"> - <img alt="" src="/img/ret/cw_lettera_a.png"> = 1,5</p>
						<p class="note">Propriet&egrave; e fonte dei dati: Borsa Italiana.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading visible-xs" role=" tab"="" id="heading2b">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion2" href="#collapse2b" aria-expanded="false" aria-controls="collapse2b" class="collapsed">plain vanilla put<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
				</h4>
			</div>
			<div id="collapse2b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2b">
				<div class="panel-body">
					<div class="tab-wrap">
						<h4>Covered Warrant Plain Vanilla Put:</h4>
						<p>Conferiscono la facolt&agrave; al portatore di vendere, alla la data di scadenza (o entro la data di scadenza), un certo quantitativo dell'attivit&agrave; sottostante ad un prezzo prestabilito (strike price), ovvero, nel caso di strumenti per i quali è prevista una liquidazione monetaria (cash delivery), di incassare una somma di denaro determinata come differenza tra lo strike price sottostante e il prezzo di liquidazione dell'attivit&agrave;.</p>
						<div class="box-generico">
							<div class="row">
								<div class="col-sm-4">
									<img src="/img/ret/cw_plain_put.png" title="Covered Warrant Plain Vanilla Put">
								</div>
								<div class="col-sm-8">
									<p>Entro la data di scadenza il portatore pu&ograve;:</p>
									<ul>
										<li>vendere un certo quantitativo dell'attivit&agrave; sottostante a un prezzo stabilito (strike price)</li>
										<li>incassare una somma di denaro pari alla differenza tra il prezzo di liquidazione dell'attivit&agrave; sottostante e lo strike price</li>
									</ul>
								</div>
							</div>
						</div>
						<p>Legenda:<br>
						<img alt="" src="/img/ret/cw_lettera_s.png"> <span>Strike price</span> <br>
						<img alt="" src="/img/ret/cw_lettera_a.png"> <span>prezzo di liquidazione dell'attivit&agrave; sottostante</span></p>
						<p>Esempio:<br>
						Se lo strike price &egrave; fissato a 5 euro e, alla data di scadenza, il prezzo di liquidazione dell'attivit&agrave; sottostante &egrave; 6,5 euro il portatore pu&ograve;:<br> vendere a 5 euro o incassare <img alt="" src="/img/ret/cw_lettera_s.png"> - <img alt="" src="/img/ret/cw_lettera_a.png"> = 1,5</p>
						<p class="note">Propriet&egrave; e fonte dei dati: Borsa Italiana.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading visible-xs" role=" tab"="" id="heading3b">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion2" href="#collapse3b" aria-expanded="false" aria-controls="collapse3b" class="collapsed">digitali<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
				</h4>
			</div>
			<div id="collapse3b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3b">
				<div class="panel-body">
						<div class="tab-wrap">
						<h4>Digitali opzioni call e put:</h4>
						<p>Pagano un importo fisso e predeterminato (chiamato rebate) quando scadono in-the-money. Come le call (put) plain vanilla, quando a scadenza il sottostante è inferiore (superiore) allo strike si estinguono senza valore, mentre se è maggiore (minore) rimborsano un rebate, il cui ammontare è predefinito e indipendente dall'ampiezza della differenza tra sottostante e strike. Sono strumenti adatti ad investitori con aspettative direzionali sul sottostante (rialziste per i call o ribassiste per i put).</p>
						<div class="box-generico">
							<div class="row">
								<div class="col-sm-4">
									<img src="/img/ret/cw_digitali.png" title="Digitali opzioni call e put" class="img-resp">
								</div>
								<div class="col-sm-8">
									<p>Incorporano opzioni call e put che pagano un importo fisso e predeterminato quando scadono in-the-money</p>
								</div>
							</div>
						</div>
						<p>Rivolti a:<br>
						Investitori con aspettative direzionali sul sottostante (rialziste per Call o ribassiste per le Put)</p>
						<p class="note">Propriet&egrave; e fonte dei dati: Borsa Italiana.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading visible-xs" role=" tab"="" id="heading4b">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion2" href="#collapse4b" aria-expanded="false" aria-controls="collapse4b" class="collapsed">sui tassi<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
				</h4>
			</div>
			<div id="collapse4b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4b">
				<div class="panel-body">
					<div class="tab-wrap">
						<h4>Sui tassi:</h4>
						<p>Strumenti costituiti da combinazioni di opzioni call o put che permettono all'investitore di neutralizzare la propria esposizione rispetto all'andamento dei tassi di interesse sia a breve che a lungo termine (ad esempio tasso Euribor o tasso Swap); in particolare possono essere utilizzati per coperture a fronte di passività (ad esempio mutui) indicizzate a un tasso variabile.</p>
						<div class="box-generico">
							<div class="row">
								<div class="col-sm-4">
									<img src="/img/ret/cw_sui_tassi.png" title="Sui tassi" class="img-resp">
								</div>
								<div class="col-sm-8">
									<p>Incorporano opzioni call e put che pagano un importo fisso e predeterminato quando scadono in-the-money</p>
								</div>
							</div>
						</div>
						<p>Rivolti a:<br>
						Investitori che vogliono assicurarsi coperture a fronte di passività (per esempio mutui) indicizzate ad un tasso variabile</p>
						<p class="note">Propriet&egrave; e fonte dei dati: Borsa Italiana.</p>
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
						<h4>Rainbow:</h4>
						<p>covered warrant il cui sottostante &egrave; costituito da due o pi &ugrave; asset. Questo tipo di prodotto consente di puntare sull'eventualit&egrave; che la performance realizzata da una delle attività finanziarie risulti a scadenza maggiore di quella realizzata dalle altre. Il prezzo dei rainbow &egrave; influenzato oltre che dalla volatilit&agrave; dei sottostanti anche dalla loro correlazione.</p>
						<div class="box-generico">
							<div class="row">
								<div class="col-sm-4">
									<img src="/img/ret/cw_rainbow.png" title="Sui tassi" class="img-resp">
								</div>
								<div class="col-sm-8">
									<p>Si basano su un sottostante costituito da due o più asset.</p>
								</div>
							</div>
						</div>
						<p>Rivolti a:<br>
						Investitori che puntano sull'eventualit&agrave; che la performance realizzata da una delle attività finanziarie risulti a scadenza maggiore di quella realizzata dalle altre</p>
						<p class="note">Propriet&egrave; e fonte dei dati: Borsa Italiana.</p>
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
	<div class="testoIcona emphasis">
		<i class="icon icon-2x icon-arrow_emphasis flLeft"></i>
		<div class="leftTesto">
			<p><strong>Attenzione:</strong> le quotazioni dei mercati esteri sono ritardate di 15 minuti (20 minuti per Nyse, Nikkei e FTSE). Desideri le quotazioni in tempo reale sui mercati di tuo interesse? <a href="#">Vai alla relativa pagina di attivazione</a></p>		
		</div>	
	</div>
</section>
<div class="modal fade" id="layerApprofondimenti1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header"> <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
            </div>   
            <div class="modal-body">
				<div class="row">
					<div class="col-sm-12">
						<div class="box-generico-border pad_bottom_0 pad_top_0">
							<h4 class="align-center marginBottomNone">Digitali</h4>										
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="pad_bottom_10 pad_top_0">
							<h4 class="align-center lineBottom">Il Funzionamento</h4>
							<div class="box-generico-text">
								<p>Incorporano azioni call e put che pagano un importo fisso e predeterminato quando scadono in-the-money</p>
							</div>
							<div class="imgWrapperResponsive">
								<img src="/img/ret/cw_digitali.png" alt="">
							</div>							
						</div>
					</div>
					<div class="col-sm-6">
						<div class="pad_bottom_10 pad_top_0">
							<h4 class="align-center lineBottom ">Rivolti a:</h4>
							<div class="box-generico-text">
								<p>Investitori con aspettative direzionali sul sottostante (rialziste per Call o ribassiste per le Put)</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="box-generico-border pad_bottom_0 pad_top_0">
							<h4 class="align-center marginBottomNone">Sui Tassi</h4>								
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="pad_bottom_10 pad_top_0">
							<h4 class="align-center lineBottom">Il Funzionamento</h4>
							<div class="box-generico-text">
								<p>Combinano opzioni call o put che permettono all'investitore di neutralizzare la propria esposizione rispetto all'andamento dei tassi d'interesse (es. Euribor o Swap)</p>
							</div>
							<div class="imgWrapperResponsive">
								<img src="/img/ret/cw_sui_tassi.png" alt="">
							</div>							
						</div>
					</div>
					<div class="col-sm-6">
						<div class="pad_bottom_10 pad_top_0">
							<h4 class="align-center lineBottom ">Rivolti a:</h4>
							<div class="box-generico-text">
								<p>Investitori che vogliono assicurarsi coperture a fronte di passività (per esempio mutui) indicizzate ad un tasso variabile</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="box-generico-border pad_bottom_0 pad_top_0">
							<h4 class="align-center marginBottomNone">Rainbow</h4>								
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="pad_bottom_10 pad_top_0">
							<h4 class="align-center lineBottom">Il Funzionamento</h4>
							<div class="box-generico-text">
								<p>Si basano su un sottostante costituito da due o più asset</p>
							</div>
							<div class="imgWrapperResponsive">
								<img src="/img/ret/cw_rainbow.png" alt="">
							</div>							
						</div>
					</div>
					<div class="col-sm-6">
						<div class="pad_bottom_10 pad_top_0">
							<h4 class="align-center lineBottom ">Rivolti a:</h4>
							<div class="box-generico-text">
								<p>Investitori che puntano sull'eventualità che la performance realizzata da una delle attività finanziarie risulti a scadenza maggiore di quella realizzata dalle altre</p>
							</div>
						</div>
					</div>
				</div>

           </div>
        </div>
    </div>
</div>
<div class="modal fade" id="layerApprofondimenti2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header"> <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
            </div>   
            <div class="modal-body">
           </div>
        </div>
    </div>
</div>


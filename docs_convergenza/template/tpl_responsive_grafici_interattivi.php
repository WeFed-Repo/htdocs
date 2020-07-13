<h2>Grafici interattivi</h2>
<section>
<ul>
	<li>I<strong> grafici interattivi</strong> ti permettono di <strong>confrontare</strong> fino a 5 titoli.</li>
	<li>Per visualizzare il grafico inserisci i parametri di ricerca ("Indice" o "Titolo") dei titoli che vuoi confrontare.</li>
</ul>
</section>
<section>
	<section class="boxesitoWrap">
	<div class="boxesito attenzione">
		<div class="text">
			<div class="row">
				<div class="col-sm-12">
					<p><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
				et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p>
				</div>
			</div>
		</div>
	</div>
	</section>
	<div class="tithelp">
	   <div class="flRight"><a href="#1" class="no-underline btn-icon"><i class="icon icon-info_fill icon-2x"></i></a>
	        <br class="clear">
	    </div>
	    <br class="clear">
	</div>
	<form class="formGenerico borderFormRounded" role="form" id="form01">
		<div id="sezioneConfronta" style="display:none">
			<div class="form-group">
				<div class="row">
					<div class="col-sm-4 compLegend">
						<label class="control-label">Visualizza</label>
						<span class="check checkVerde"></span><span>FTSE MIB</span>
					</div>
					<div class="col-sm-8">
						<div class="compLegend">
							<label class="control-label">Confronta con</label>
							<span class="check checkBlue"></span><span>FTSE MIB</span>
							<span class="check checkOrange"></span><span>FTSE MIB</span>
							<span class="check checkLightBlue"></span><span>FTSE MIB</span>
							<span class="check checkRed"></span><span>FTSE MIB</span>
					</div>
					</div>
				</div>
			</div>
		
			<div class="form-group btnWrapper" id="btnConfronta">
				<div class="btn-align-right">
					<a type="button" class="btn btn-primary"  id="btnAggiungi">aggiungi per confronto</a>
				</div>
				<div class="btn-align-right">
					<a type="button" class="btn btn-default" id="">elimina</a>
				</div>
				
				<br class="clear">
			</div>
			<script>
			    var parHidden = true;
			    $('#btnAggiungi').click(function(){
			    	$('#sezioneAggiungi').toggle();
			    	parHidden = !parHidden;
			    	if(parHidden){
			    		$('#btnAggiungi').html('aggiungi per confronto')
			    	}
			    	else{
			    		$('#btnAggiungi').html('chiudi')
			    	}
			    	
			    }) 
			</script>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-sm-12">
 				<label class="control-label">Ricerca per</label>
				 	<div class="form-group">
						<div class="row">
								<div class="col-xs-12 col-sm-12">
									<div class="row">
										<div class="col-xs-4 col-sm-2 mww-dom-component webank-component-radioButton">
											<div class="radio inline">
												<label class="textWrapper">
													<input type="radio" name="searchType" value="indice">
													<span class="text">Indice</span>
												</label>	
											</div>
										</div>	
										<div class="col-xs-8 col-sm-4 wrapper-obscurate mww-dom-component webank-component-combobox">
											<select class="form-control" id="select">
												<option value="FTSE MIB">FTSE MIB</option>
												<option value="FTSE Italia Mid Cap">FTSE Italia Mid Cap</option>
												<option value="FTSE Italia Star">FTSE Italia Star</option>
												<option value="FTSE Italia All Share">FTSE Italia All Share</option>
												<option value="Dow Jones Ind">Dow Jones Ind</option>
												<option value="Nasdaq100">Nasdaq100</option>
												<option value="S&amp;P 500">S&amp;P 500</option>
												<option value="Nasdaq Comp">Nasdaq Comp</option>
												<option value="Dax30">Dax30</option><option value="DAX100">DAX100</option>
												<option value="Euro Stoxx 50">Euro Stoxx 50</option>
												<option value="MDax">MDax</option> 
												<option value="Cac40">Cac40</option><option value="Sbf80">Sbf80</option><option value="Sbf120">Sbf120</option>
												<option value="Aex25">Aex25</option>        		    <option value="Bel20">Bel20</option>
												<option value="Ibex35">Ibex35</option>        		    <option value="PSI20">PSI20</option>
												<option value="Ftse100">Ftse100</option>        		    <option value="Nikkei225">Nikkei225</option>        		    <option value="AIM">AIM</option>
											</select>
											<div class="element-obscurate" style="width: 100%; height: 100%; z-index: 1;" hidden="">
											</div>
										</div>
									</div>
								</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-xs-12 col-sm-12">
					 			<div class="row">
					 				<div class="col-xs-4 col-sm-2 mww-dom-component webank-component-radioButton">
									 <div class="radio inline"><label class="textWrapper marginTopLarge">
									 <input type="radio" name="searchType" value="titolo">
									 <span class="text">Titolo</span></label>
									 </div>
									 </div>
									 <div class="col-xs-8 col-sm-7 wrapper-obscurate">
									 <div class="mww-dom-component webank-component-composite-inserimentoOrdineSimpleSearch">
									 <div class="form-group mww-dom-component webank-component-overlay">
									 <div class="row">
									 <div class="col-xs-12 col-sm-7 mww-dom-component webank-component-input">
									 <label class="control-label mww-status-hidden" hidden="" title="" data-toggle="tooltip" data-html="true" data-trigger="focus" data-original-title="Puoi effettuare la ricerca inserendo alternativamente la descrizione, il simbolo o il codice ISIN del titolo.<br><br><strong>Codice Isin</strong>: &amp;egrave il codice alfanumerico internazionale identificativo del titolo. E' formato da 12 caratteri, i primi due richiamano il Paese di emissione del titolo.<br><br><strong>Descrizione</strong>: riporta per intero il nome dello strumento finanziario (es. BPM).<br><br><strong>Simbolo</strong>: codice di identificazione di un titolo, il pi&amp;ugrave; delle volte composto dall'abbreviazione del nome della societ&amp;agrave;. Per esempio, &quot;AMZN&quot; &amp;egrave; il simbolo di AMAZON.">Titolo</label>			<div>		<div class="editable-input">		<input class="form-control clear-x" type="text" placeholder="ISIN, simbolo o descrizione">				 			<span class="editable-clear-x" style="display: none;">				<i class="icon icon-close icon-1x"></i>			</span>			</div>	</div>			</div>		<div class="col-xs-12 col-sm-5 mww-dom-component webank-component-combobox">			<label class="control-label mww-status-hidden">Mercato</label>			<select class="form-control" id="select">    		    <option class="mww-status-highlighted" value="0">Azioni</option>        		    <option value="1">MTA</option>        		    <option value="2">BIT GEM</option>        		    <option value="3">AIM</option>        		    <option value="4">AEX25</option>        		    <option class="mww-status-highlighted" value="5">Obbligazioni</option>        		    <option value="6">MOT</option>        		    <option value="7">EuroTLX</option>        		    <option value="8">Hi-MTF</option>        		    <option value="9">EuroMOT</option>        		    <option value="10">ExtraMOT</option>        		    <option value="11">OTC</option>        		    <option class="mww-status-highlighted" value="12">SD/Certificates</option>        		    <option value="13">SEDEX</option>        		    <option value="14">EuroTLX</option>        		    <option value="15">AIM</option>        		    <option class="mww-status-highlighted" value="16">ETF-ETC</option>        		    <option value="17">ETFPlus</option>        		    <option class="mww-status-highlighted" value="18">Derivati</option>        		    <option value="19">IDEM</option>        		    <option class="mww-status-highlighted" value="20">Risparmio gestito</option>        		    <option value="21">Fondi/Sicav</option>    </select>		</div>		<div class="col-sm-4 col-xs-12 no-label" hidden="">			<div class="btn-align-left mww-dom-component webank-component-button">				<a class="btn btn-primary" type="button" title="Cerca">	Cerca</a>				<a>Ricerca evoluta</a>			</div>		</div>	</div>			<div class="row" hidden="">			Titolo <strong></strong> 			<span>|</span> 			Mercato <strong></strong>			<span>|</span>			<a>cerca altro titolo</a>			<div class="mww-status-hidden mww-dom-component webank-component-combobox"><select class="form-control" id="select"></select></div>		</div>		<div hidden="" class="mww-dom-component webank-component-button"><a class="btn btn-primary" type="button" data-toggle="modal" data-target="#searchResult">	undefined</a></div>	<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" id="searchResult">	<div class="modal-dialog modal-lg" role="document">		<div></div>		<div class="modal-content">			<div class="modal-header">				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i></a>				<h2 class="modal-title">Risultati della ricerca</h2>			</div>			<div class="modal-body"></div>			<div class="mww-confirmButtonWrapper modal-footer">			<div class="form-group">				<div class="btn-align-left mww-dom-component webank-component-button" hidden="">					<a class="btn btn-default" type="button" title="annulla">	annulla</a>				</div>				<div class="btn-align-right mww-dom-component webank-component-button">					 <a class="btn btn-primary btn-disabled" type="button" title="conferma" disabled="disabled">	conferma</a>				</div>							</div>			</div>		</div>	</div></div></div></div>												<div class="element-obscurate" style="width: 100%; height: 100%; z-index: 1;"></div>					                         </div>					                         
									 <div class="col-sm-3 col-xs-12 no-label">																								<div class="btn-align-left mww-dom-component webank-component-button">													<a class="btn btn-primary" type="button" title="aggiungi">	aggiungi</a></div>											</div>				                   		</div>				                   					                    </div>				                  </div>				            </div>				        
									</div>				   	
  								</div>
					  </div>


	
    </form>
</section>
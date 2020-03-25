<script type="text/javascript">
/* CREAZIONE - Codice per creare delle select fittizie stilizzate uguale ad as is */
addEvent(window, 'load', function() {
    createSelectRapp('sceltaRapporto', 'sceltaSottoRapportoVal', sceltaSottoRapportoFunc);
});

function sceltaSottoRapportoFunc(option) {
    // Testo selezione: option.text
    // Valore selezione: option.value
    // alert('Hai selezionato: ' + option.text + ' (' + option.value + ')')
}
/* |FINE| CREAZIONE - Codice per creare delle select fittizie stilizzate */
</script>
<h2>Analisi TraderMade</h2>
<div class="navContFirstLev outerTab">
	<div class="innerTab">
		<ul class="tabmedium">
			<li class="on"><a href="connect.php?page=strutt_priv.php&tpl=tpl_responsive_analisi_traderMade.php&liv0=3&liv1=3&liv2=0&liv3=0&responsive=y">analisi tecnica <br>TraderMade</a></li>
			<li><a href="connect.php?page=strutt_priv.php&tpl=tpl_responsive_guida_traderMade.php&liv0=3&liv1=3&liv2=0&liv3=0&responsive=y">guida alla sezione<br> TraderMade</a></li>
			<li><a href="connect.php?page=strutt_priv.php&tpl=tpl_responsive_glossario_traderMade.php&liv0=3&liv1=3&liv2=0&liv3=0&responsive=y">glossario di analisi<br> tecnica</a></li>
			<li><a href="connect.php?page=strutt_priv.php&tpl=tpl_responsive_guidac_traderMade.php&liv0=3&liv1=3&liv2=0&liv3=0&responsive=y">guida ai titoli<br> caldi</a></li>
		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-nofill">
		<section>
				 <form class="formGenerico borderFormRounded" role="form" id="form01">
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
				</form>
		</section>

		<section>
			
				<div class="formGenerico borderFormRounded">
				<div class="box-generico">
				<div class="row">
					<div class="col-sm-2">
						<img border="0" src="/img/ret/LogoTraderMade.gif">
					</div>
					<div class="col-sm-10">
						<h3>TraderMade Research</h3>
						<p>presente da oltre 20 anni nei mercati internazionali ha come principale attivit&agrave; l'elaborazione e la fornitura di ricerca finanziaria: i suoi servizi sono utilizzati nelle dealing room e nelle tesorerie delle principali banche, istituzioni finanziarie e aziende a livello mondiale.</p>
					</div>
				</div>
			</div>
			</div>
		</section>
		<section>
			 <div class="row">
			        <div class="col-sm-6">
						<div class="tithelp">
						    <h4>Paniere</h4>
						    <div class="flRight"><a href="javascript:;" class="no-underline btn-icon"><i class="icon icon-info_fill icon-2x" data-toggle="tooltip" data-title="lorem ipsum dolor sit"></i></a>
						        <br class="clear">
						    </div>
						    <br class="clear">
						</div>
						<form class="formGenerico borderFormRounded" role="form" id="form01">
							<div class="form-group">
						        <div class="row">
						            <div class="col-sm-12">
						                	<select class="form-control" id="selectOperatore">
				                        		<option value="">Scegli</option> 
												<optgroup label="Italia"> 
													<option value="0#SPMIB">FTSE MIB</option> 
													<option value="0#MIDEX">FTSE Italia Mid Cap</option> 
													<option value="0#MCONT-A-B">FTSE Italia All Share</option>	
												</optgroup>	
												<optgroup label="USA">
													<option value="0#NAS100">NASDAQ100</option> 
													<option value="0#DJI">DOW30</option> 
												</optgroup>
												<optgroup label="Euro">
													<option value="0#XET100">DAX100</option> 
													<option value="0#CAC40">CAC40</option> 
													<option value="0#FTSE">FTSE100</option> 
													<option value="0#IBEX35">IBEX35</option> 
													<option value="0#AEX">AEX25</option> 
													<option value="0#BEL20">BEL20</option>
													<option value="0#PSI20">PSI20</option> 
												</optgroup>
				                   			</select>
						            </div>
						           
						        </div>
					    	</div>
					    	<div class="form-group">
					    	<div class="row">
			                    <div class="col-xs-6 col-sm-4">
			                        <div class="radio inline">
			                            <label class="textWrapper">
			                                <input type="radio" name="" id="">
			                                <span class="text" name="IntervalloTemporale">breve</span>
			                            </label>
			                        </div>
			                    </div>
			                    <div class="col-xs-6 col-sm-4">
			                        <div class="radio inline">
			                            <label class="textWrapper">
			                                <input type="radio" name="" id="">
			                                <span class="text" name="IntervalloTemporale">lungo</span>
			                            </label>
			                        </div>
			                    </div>
			                    <div class="col-xs-12 col-sm-4">
			                        <div class="form-group">
						                <div class="btn-align-right">
						                    <a type="button" class="btn btn-primary btn-minw" id="">vai</a>
						                </div>
						                <br class="clear">
						            </div>
			                    </div>
			                 </div>
			                </div>
			               
						</form>
					</div>
					 <div class="col-sm-6">
						<div class="tithelp">
						    <h4>Titoli caldi</h4>
						    <div class="flRight"><a href="javascript:;" class="no-underline btn-icon"><i class="icon icon-info_fill icon-2x" data-toggle="tooltip" data-title="lorem ipsum dolor sit"></i></a>
						        <br class="clear">
						    </div>
						    <br class="clear">
						</div>
						<form class="formGenerico borderFormRounded" role="form" id="form01">
							<div class="form-group">
						        <div class="row">
						            <div class="col-sm-12">
						               <select class="form-control" id="selectOperatore">
				                        		<option value="">Scegli</option> 
												<option value="CALDI_ITALIA">ITALIA Long</option>
												<option value="CALDI_SHORT">ITALIA Short</option>
												<option value="CALDI_USA">USA</option>
												<option value="CALDI_EURO">EURO</option>
				                   		</select>
						            </div>
						           
						        </div>
					    	</div>
					    	<div class="form-group">
					    	<div class="row">
			                    <div class="col-xs-6 col-sm-4">
			                        <div class="radio inline">
			                            <label class="textWrapper">
			                                <input type="radio" name="" id="">
			                                <span class="text" name="periodo">giornaliero</span>
			                            </label>
			                        </div>
			                    </div>
			                    <div class="col-xs-6 col-sm-4">
			                        <div class="radio inline">
			                            <label class="textWrapper">
			                                <input type="radio" name="" id="">
			                                <span class="text" name="periodo">settimanale</span>
			                            </label>
			                        </div>
			                    </div>
			                    <div class="col-xs-12 col-sm-4">
			                        <div class="form-group">
						                <div class="btn-align-right">
						                    <a type="button" class="btn btn-primary btn-minw" id="">vai</a>
						                </div>
						                <br class="clear">
						            </div>
			                    </div>
			                 </div>
			                </div>
						</form>
					</div>
			 </div>
			 <div class="row">
			        <div class="col-sm-6">
						<div class="tithelp">
						    <h4>Indici</h4>
						    <div class="flRight"><a href="javascript:;" class="no-underline btn-icon"><i class="icon icon-info_fill icon-2x" data-toggle="tooltip" data-title="lorem ipsum dolor sit"></i></a>
						        <br class="clear">
						    </div>
						    <br class="clear">
						</div>
						<form class="formGenerico borderFormRounded" role="form" id="">
							<div class="form-group">
						        <div class="row">
						            <div class="col-sm-12">
						               
							                <select class="form-control" id="">
				                        		<option value="">Scegli</option> 
												<option value="TRCA000MIB30">FTSE MIB</option>
												<option value="TRCA00NAS100">NASDAQ 100</option>
												<option value="TRCA00DOWJ30">Dow Jones 30</option>
												<option value="TRCA000SP500">Standard&amp;Poors 500</option>
												<option value="TRCA000CAC40">CAC 40</option>
												<option value="TRCA000DAX30">DAX 30</option>
												<option value="TRCA0FTSE100">FTSE 100</option>
												<option value="TRCA00EURO50">EuroStoxx 50</option>
												<option value="TRCA00NIK225">Nikkei 225</option>
												<option value="TRCA00SMIZUR">SMI 30</option>
				                   			</select>
						            </div>
						           
						        </div>
					    	</div>
					    	<div class="form-group">
					    	<div class="row">
			                    <div class="col-xs-6 col-sm-4">
			                        <div class="radio inline">
			                            <label class="textWrapper">
			                                <input type="radio" name="" id="">
			                                <span class="text" name="IntervalloTemporale">breve</span>
			                            </label>
			                        </div>
			                    </div>
			                    <div class="col-xs-6 col-sm-4">
			                        <div class="radio inline">
			                            <label class="textWrapper">
			                                <input type="radio" name="" id="">
			                                <span class="text" name="IntervalloTemporale">lungo</span>
			                            </label>
			                        </div>
			                    </div>
			                    <div class="col-xs-12 col-sm-4">
			                        <div class="form-group">
						                <div class="btn-align-right">
						                    <a type="button" class="btn btn-primary btn-minw" id="">vai</a>
						                </div>
						                <br class="clear">
						            </div>
			                    </div>
			                 </div>
			                </div>
			               
						</form>
					</div>
					 <div class="col-sm-6">
						<div class="tithelp">
						    <h4>Portafoglio tecnico TMR</h4>
						    <div class="flRight"><a href="javascript:;" class="no-underline btn-icon"><i class="icon icon-info_fill icon-2x" data-toggle="tooltip" data-title="lorem ipsum dolor sit"></i></a>
						        <br class="clear">
						    </div>
						    <br class="clear">
						</div>
						<form class="formGenerico borderFormRounded" role="form" id="form01">
							<div class="form-group">
					    	<div class="row">
			                    <div class="col-xs-6 col-sm-11">
			                        <div class="radio inline">
			                            <span class="text">Portafoglio Titoli ITALIA</span>
			                        </div>
			                    </div>
			                    <div class="col-xs-6 col-sm-1">
			                       <div class="checkbox">
					                    <label class="textWrapper">
					                        <input type="checkbox" name="" id="">
					                        <span class="text"></span>
					                    </label>
					                </div>
			                    </div>
			                 </div>
			                 <div class="row">
			                   <div class="col-xs-12 col-sm-12">
			                        <div class="form-group">
						                <div class="btn-align-right">
						                    <a type="button" class="btn btn-primary btn-minw" id="">vai</a>
						                </div>
						                <br class="clear">
						            </div>
			                    </div>
			                   </div>
			                </div>
					    </form>
					</div>
			 </div>
			  <div class="row">
			        <div class="col-sm-6">
						<div class="tithelp">
						    <h4>Special report</h4>
						    <div class="flRight"><a href="javascript:;" class="no-underline btn-icon"><i class="icon icon-info_fill icon-2x" data-toggle="tooltip" data-title="lorem ipsum dolor sit"></i></a>
						        <br class="clear">
						    </div>
						    <br class="clear">
						</div>
						<form class="formGenerico borderFormRounded" role="form" id="">
							<div class="form-group">
						        <div class="row">
						            <div class="col-sm-12">
						               
							                <select class="form-control" id="">
				                        			<option value="">Scegli</option> 
													<option value="LENTE">Sotto la lente</option> 
													<option value="EUROSTOXX50">Eurostoxx50</option> 
													<option value="BANCARIO">Bancario</option> 
													<option value="NUOVO">Comparto tecnologico</option> 
													<option value="SETTORE">Analisi settoriale</option>
				                   			</select>
						            </div>
						           
						        </div>
						     </div>
						     <div class="form-group">
						      <div class="row">
			                   <div class="col-xs-12 col-sm-12">
			                        <div class="form-group">
						                <div class="btn-align-right">
						                    <a type="button" class="btn btn-primary btn-minw" id="">vai</a>
						                </div>
						                <br class="clear">
						            </div>
			                    </div>
			                   </div>
			                   </div>
					    </form>
					</div>
					 <div class="col-sm-6">
						<div class="tithelp">
						    <h4>Notizie intraday</h4>
						</div>
					<section class="boxesitoWrap">
					<div class="boxesito attenzione">
						<div class="text">
							<div class="row">
								<div class="col-sm-12">
									<p>Non esistono notizie</p>
									<a href="javascript:;" class="flRight">Vedi tutte</a>
								</div>
							</div>
						</div>
					</div>
				</section>
					</div>
			 </div>
		</section>
	</div>
</div>
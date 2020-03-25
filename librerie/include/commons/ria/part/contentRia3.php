<div id="contentRia3" class="tab-content contentRia formGenerico">
    <div id="tabVincoli" class="navContSecondLev">
        <div class="outerTab">
            <ul class="tabWrapper tabsmall hidden-xs">
                <li id="tabVinc1"><a href="#!">Linee attive</a></li>
				<?php if ($permettiDispositive) { ?>
                <li id="tabVinc2"><a href="#!">Apri nuova linea</a></li>
				<?php } ?>
            </ul>
        </div>
        <div class="separator"></div>
	    <div class="panel-group panel-fill panel-group-ria" role="tablist" aria-multiselectable="true">
	        <div class="panel panel-default">
	            <div id="contentVinc1" class="panel-collapse collapse" role="tabpanel">
	                <div class="panel-body">
	                    <div class="tab-wrap">
							<section>
				                <div id="accordionLVNote" class="panel-group panel-group-ria panel-group-collapse" role="tablist" aria-multiselectable="false">
				                    <div class="panel panel-default panel-accordion">
				                        <div class="panel-heading" role="tab" id="headingLVNote">
				                            <h4 class="panel-title">
				                                <a class="collapsed" data-toggle="collapse" href="#collapseLVNote" aria-expanded="false" aria-controls="collapseLVNote">
				                                  Deposito<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
				                                </a>
				                            </h4>
				                        </div>
				                        <div id="collapseLVNote" class="panel-collapse collapse collapse-bottom" role="tabpanel" aria-labelledby="headingLVNote">
				                            <div class="panel-body panel-body-accordion">
												<div class="panel-wrap">
													<p>
														<strong>Tassazione</strong>
														<br> Gli interessi netti indicati in pagina sono stati calcolati in base al D.L. 66/2014 convertito nella Legge n. 89/2014, che prevede una ritenuta:</p>
													<ul>
														<li>del 20% sugli interessi maturati al 30/06/2014;</li>
														<li>del 26% sugli interessi maturati dal 01/07/2014.</li>
													</ul>
													<p>
														I vincoli attivati dal 1 luglio 2014 saranno tassati al 26%.
														<br> Sui <strong>i vincoli attivati prima del 1 luglio 2014</strong> gli interessi netti verranno rettificati sulla base delle modifiche introdotte dalla nuova normativa.
														<br>
														<br>Gli interessi sono espressi per approssimazione.
														<br>
														<br>
														<strong>Imposta di bollo</strong>
														<br> Sulle somme vincolate in conto corrente &egrave; prevista l'applicazione dell'imposta di bollo proporzionale pari allo 0,20% annuo calcolata sul saldo degli importi vincolati alla data di produzione dell'estratto conto in proporzione al periodo rendicontato.</p>
												</div>
				                            </div>
				                        </div>
				                    </div>
				                </div>
							</section>

							<!-- Fine box note -->
							<section>
                                <h4 class="strongTitle bottomSmall">Informazioni generali</h4>
								<div class="row">
									<div class="col-sm-12 col-md-5">
										<div class="form-output-aligned">
											<span class="control-label">Totale investito</span>
											<span class="output"><span id="totaleInvestito"></span> <span class="valuta"></span></span>
										</div>
									</div>
									<div class="separator-output-aligned visible-sm-block"></div>
									<div class="col-sm-12 col-md-offset-1 col-md-6">
										<div class="form-output-aligned">
											<span class="control-label">Interessi netti al <span id="dataRendimento"></span></span>
											<span class="output"><span id="totaleRendimento"></span> <span class="valuta"></span></span>
										</div>
									</div>
								</div>
							</section>

							<section>
								<h4 class="strongTitle">Dettaglio linee vincolate</h4>
								<form class="formGenerico borderFormRounded searchFilter" role="form" id="form08">
									<div class="form-group">
										<div class="row">
											<div class="col-sm-4">
												<label class="control-label">Apertura</label>
									            <div class="form-inline">
									                <div class="input-group">
									                    <input type="text" id="scadenzaLvDa" placeholder="gg/mm/aaaa" value="" class="form-control clear-x"><a class="input-group-addon date btn-icon" href="#!"><i class="icon icon-calendar_filled"></i></a>
									                </div>
									            </div>
											</div>
											<div class="col-sm-4">
												<label class="control-label">Scadenza</label>
									            <div class="form-inline">
									                <div class="input-group">
									                    <input type="text" id="scadenzaLvA" placeholder="gg/mm/aaaa" value="" class="form-control clear-x"><a class="input-group-addon date btn-icon" href="#!"><i class="icon icon-calendar_filled"></i></a>
									                </div>
									            </div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-4">
												<label class="control-label">Vincolo</label>
												<select class="form-control" name="mesi" id="mesiLVfiltro">
													<option value="">- - -</option>
												</select>
											</div>
											<div class="col-sm-4">
												<label class="control-label">Tasso</label>
												<select class="form-control" name="percentuale" id="tassoLVfiltro">
													<option value="">- - -</option>
												</select>
											</div>
											<div class="col-sm-4">
		                                        <div class="btnWrapper bottomZero">
		                                            <div class="btn-full">
		                                                <a type="button" href="#!" class="btn btn-primary" title="Imposta" id="filtraLV">Filtra</a>
		                                            </div>
		                                        </div>
											</div>
										</div>
									</div>
								</form>

                            	<div class="separator-ria separator-medium"></div>

                                <table id="tabellaLV" cellspacing="0" cellpadding="0" border="0" data-toggle="table">
                                    <thead>
                                        <tr>
											<th class="right">N.</th>
											<th class="left">Nome</th>
											<th class="right">Tasso<br>lordo</th>
											<th class="right">Durata</th>
											<th class="center"><span class="lighText">Apertura</span><br>Scadenza</th>
											<th class="right"><span class="lighText">Importo iniziale</span><br>Importo finale</th>
											<th class="center">Svincola</th>
                                        </tr>
                                    </thead>
                                    <tbody id="bodyTableLV"></tbody>
									<tfoot id="footTableLV"></tfoot>
                                </table>
                            </section>
                            
                            <section>
                                <div class="form-group btnWrapper">
                                    <div class="btn-align-left">
                                        <a type="button" class="btn btn-primary" href="#!" title="Esporta in Excel" id="boxExcelLV">Esporta in Excel</a>
                                    </div>
                                    <div class="btn-align-right">
                                        <a type="button" class="btn btn-primary" href="#!" title="Aumenta il tuo rendimento" id="aumentaRendimento">Aumenta il tuo rendimento</a>
										<?php  if ($permettiDispositive) {  ?>
                                        <a type="button" class="btn btn-primary" href="#!" title="Apri nuova linea" id="apriLineaVincolata">Apri nuova linea</a>
										<?php  } else {  ?>
                                        <a type="button" class="btn btn-disabled" href="#!" title="Questa funzione non &egrave; disponibile nel profilo &quot;Consultare&quot;.">Apri nuova linea</a>
										<?php } ?>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </section>
						</div>
					</div>
				</div>
				<?php  if ($permettiDispositive) {  ?>
		        <div id="contentVinc2" class="panel-collapse collapse" role="tabpanel">
	                <div class="panel-body">
	                    <div class="tab-wrap">
							<!-- Box note -->
							<section>
				                <div id="accordionLVNote2" class="panel-group panel-group-ria panel-group-collapse" role="tablist" aria-multiselectable="false">
				                    <div class="panel panel-default panel-accordion">
				                        <div class="panel-heading" role="tab" id="headingLVNote">
				                            <h4 class="panel-title">
				                                <a class="collapsed" data-toggle="collapse" href="#collapseLVNote2" aria-expanded="false" aria-controls="collapseLVNote2">
				                                  Deposito<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
				                                </a>
				                            </h4>
				                        </div>
				                        <div id="collapseLVNote2" class="panel-collapse collapse collapse-bottom" role="tabpanel" aria-labelledby="headingLVNote">
				                            <div class="panel-body panel-body-accordion">
												<div class="panel-wrap">
													<p>
														<strong>Tassazione</strong>
														<br> Gli interessi netti indicati in pagina sono stati calcolati in base al D.L. 66/2014 convertito nella Legge n. 89/2014, che prevede una ritenuta:</p>
													<ul>
														<li>del 20% sugli interessi maturati al 30/06/2014;</li>
														<li>del 26% sugli interessi maturati dal 01/07/2014.</li>
													</ul>
													<p>
														I vincoli attivati dal 1 luglio 2014 saranno tassati al 26%.
														<br> Sui <strong>i vincoli attivati prima del 1 luglio 2014</strong> gli interessi netti verranno rettificati sulla base delle modifiche introdotte dalla nuova normativa.
														<br>
														<br>Gli interessi sono espressi per approssimazione.
														<br>
														<br>
														<strong>Imposta di bollo</strong>
														<br> Sulle somme vincolate in conto corrente &egrave; prevista l'applicazione dell'imposta di bollo proporzionale pari allo 0,20% annuo calcolata sul saldo degli importi vincolati alla data di produzione dell'estratto conto in proporzione al periodo rendicontato.</p>
												</div>
				                            </div>
				                        </div>
				                    </div>
				                </div>
							</section>
							<!-- Fine box note -->

							<section>
								<div class="boxDispDep box-ria">
									<div class="row">
										<div class="col-sm-9">
											<h4 class="strongTitle output-aligned">
												Disponibilit&agrave; deposito
												<span class="output"><span id="massimoLV" class="dispImp"></span> <span class="valuta"></span></span>
											</h4>
										</div>
										<div class="col-sm-3">
                                            <div class="btn-full">
												<button id="btnDispDep" class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseDispDep" aria-expanded="false" aria-controls="collapseDispDep">Aumenta</button>
                                            </div>
										</div>
									</div>
									<div class="collapse" id="collapseDispDep">
										<div class="wrapDispDep">
											<div class="separator-ria separator-small"></div>
											<label for="" class="control-label">Versa sul deposito &euro;</label>
											<div class="row">
												<div class="col-sm-3">
													<input type="text" class="form-control clear-x" id="importoCDLV">
												</div>
												<div class="col-sm-9">
													<div class="row">
														<div class="col-sm-3">
															<button class="btn btn-primary" type="button" id="aggiungiCDLV">Esegui</button>
														</div>
														<div class="col-sm-9">
															<div class="form-output-aligned">
																<span class="control-label">Il deposito diventa</span>
																<span class="output"><span id="diventaCDLV" class="dispDepVal dispImp"></span> <span class="valuta"></span></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
			                
							<div class="sparator-ria"></div>

			                <section>
			                    <h4 class="strongTitle">Apri una o pi&ugrave; linee vincolate</h4>
			                    <p>Decidi la <strong>durata</strong> dell'investimento.
			                    	Potrai <strong>svincolare</strong>, anche parzialmente,
									la linea <strong>prima</strong> della sua <strong>scadenza</strong>:
									i <strong>soldi saranno riaccreditati sul deposito</strong>.<br>
									<strong>Attenzione</strong>: in questo caso ti saranno corrisposti gli interessi
									ai <strong>tassi</strong> del <strong>deposito</strong> libero (non a quelli della linea).</p>
								
								<div id="importoNuovaLVwrap" class="form-group bottomZero">
									<div class="row">
										<div class="col-sm-3 requiredField">
											<label for="importoNuovaLV" class="control-label">Vincola <span class="valuta"></span></label>
											<input name="importoNuovaLV" type="text" id="importoNuovaLV" class="form-control clear-x"/>
										</div>
										<div class="col-sm-9">
							                <!-- div per visualizzazione errori campi form -->
				                            <section class="boxesitoWrap boxesitoForm" id="errorDiv5">
				                                <div class="boxesito negativo">
				                                    <div class="text">
				                                        <div id="errorContent5">
				                                        </div>
				                                    </div>
				                                </div>
				                            </section>
										</div>
									</div>
								</div>


			                    <div id="boxTabLineeVincolate" class="row">
			                    </div>
			                </section>

			                <section class="sectionEM">
			                	<div class="separator-ria separator-medium"></div>
								<h4 class="strongTitle strongTitleEM">Promozione ExtraMoney</h4>
								<p class="introEM">Oggi portare <strong>nuova liquidit&agrave; in Webank</strong>
									&egrave; ancora pi&ugrave; conveniente.<br>
									Con la linea vincolata ExtraMoney puoi ottenere
									il <strong><span class="percentualeEMtext">3,00</span>% lordo annuo</strong>.
									Verifica subito la tua <strong>disponibilit&agrave; ExtraMoney</strong>
									e apri una nuova linea vincolata.<br>
									Hai tempo fino al <strong>31 gennaio 2014</strong> per portare nuova liquidit&agrave;
									e approfittare della promozione.</p>

								<div id="contentExtraMoney" class="boxExtraMoney" style="display:none;">
									<div class="boxBaseContent">
										<div id="boxExtraMoney" class="row">
											<div id="boxExtraMoneyText" class="col-sm-6 col-md-7">
												<div class="wrapEM">
													<h4 class="promozioneEM"><span class="promozioneEM1">PROMOZIONE</span><span class="promozioneEM2">EXTRAMONEY</span></h4>
													<p class="ExtraMoneyText">
														Puoi aprire una linea vincolata a <strong class="mesiEM"></strong> mesi e
														ottenere l'<strong class="percentualeEMtext"></strong>% lordo annuo
														su tutta la durata.
													</p>
													<a id="extraMoneyLink" title="Come funziona" href="#!" class="btn btn-em">Come funziona</a>
													<p class="note">Messaggio pubblicitario con finalit&agrave; promozionale</p>
												</div>
												<div id="bolloEM"></div>
											</div>
											<div id="boxExtraMoneyInner" class="col-sm-6 col-md-5">
												<div class="wrapEM">
													<div class="labelSaldoEM">Disponibilit&agrave; ExtraMoney</div>
													<div class="saldoEM"><span id="saldoEM"></span> <span class="valuta"></span></div>
													<hr class="sepEM1">
													<div class="infoEM">
														<div class="vincoloEM">Vincolo<br>a<span class="mesiEM"></span> mesi</div>
														<div id="parcentualeEM" class="infoValEM"><span class="percentEM">%</span></div>
													</div>
													<div class="tassoEM">Tasso valido fino al <span id="scadenzaEM"></span></div>
													<hr class="sepEM2">
													<div class="importoEM requiredField"><input type="text" class="inputManualeForm" id="importoNuovaEM" name="importoNuovaEM"></div>
													<div class="infoEM">
														<div class="interessiEM">Interessi netti</div>
														<div class="guadagniEM infoValEM">
															<span id="guadagnoEMint"></span>,<span id="guadagnoEMdec" class="decimaliEM"></span> <span class="valuta"></span>
														</div>
													</div>
													<hr class="sepEM3">
													<div class="nuovaEMBox">
														<a id="nuovaEM" title="Apri ora" class="btn" href="#!">Apri nuova linea</a>
													</div>
												</div>
												<a id="helpEM" title="Clicca per vedere come &egrave; calcolata la disponibilit&agrave; ExtraMoney" href="#!"><i class="icon icon-help_filled"></i></a>
											</div>
										</div>
									</div>
								</div>
			                </section>
			        	</div>
		        	</div>
	        	</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>

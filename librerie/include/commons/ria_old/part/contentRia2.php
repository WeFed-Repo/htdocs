    <div id="contentRia2" class="contentRia">
            <div class="tabContainer2">
                <div id="tabTrasf1" class="tabRiaOn">
					<div class="tabRiaCont" id="caric5">Singolo</div>
				</div>

                <div id="tabTrasf2" class="tabRia">
					<div class="tabRiaCont" id="caric6">Periodici</div>
				</div>

                <div id="tabTrasf3" class="tabRia">
					<div class="tabRiaCont" id="caric7">A soglia</div>
				 </div>

                <div class="clear"></div>
            </div>

            <div id="lineTrasf">&nbsp;</div>

            <!-- <div id="sfumaturaTrasf" class="sfumatura2lvl">&nbsp;</div>-->

            <div id="contentTrasf1" class="contentRia2lvl">
                <!-- manuali -->
                <div class="trasfManualiR2">
                    <!-- div per visualizzazione errori campi form -->
                    <div id="errorDiv2">
                        <div class="errorDiv" >
                            <div class="boxtop"><img src="/img/ret/box_msgtop.jpg" class="border" /></div>

                            <div class="boxtxt">
                                <div class="box_mess">
                                    <img src="/img/ret/img_or_alertria.gif" alt="" class="dx" >
                                    <span class="attenzione">ATTENZIONE</span><br>

									<ul class="alert">
										<span id="errorContent2"></span>
									</ul>
                                </div>
                            </div>
                            <div class="clear"></div>

                            <div class="boxbottom"><img src="/img/ret/box_msgbottom.jpg" class="border" /></div>
                        </div>
                    </div>

                    <div>
                        <ul class="lista">
                            <li class="first">Il trasferimento da <?php echo $contoLabelShortSingLow ?> a deposito (e viceversa) &egrave; <strong>velocissimo</strong>: si aggiornano immediatamente il <strong>saldo contabile</strong> e il <strong>saldo disponibile</strong>.</li>					 
                        </ul>
                    </div>
					<div class="row-fluid">
						<div class="left span7">
							<div class="boxWhiteOut" id="boxOutCD">
								<div class="boxWhiteCont" id="boxContCD">
									<div class="boxWhiteMain" id="boxMainCD">
										<div class="tit">Versa sul deposito</div>
										<div class="disponibilita">Disponibilit&agrave; per il trasferimento: <a class="importo" id="massimoImpCDLink"></a>&nbsp;<span class="valuta"></span></div>


										<div class="inserimento" id="etichettaCDversamenti">
											<input name="dataCDversamenti" type="hidden" id="dataCDversamenti"/>
											<span class="label">Indica l'importo</span>
											<input class="input" name="importo" type="text" id="importoCDversamenti" data-error="" />
											<span class="arrw"><a href="javascript:;" id="aggiungiCDversamenti"><img src="/wscmn/img/ret/ria_button_arrow.gif" title="Esegui" /></a></span>
											<div class="clear"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="span1">&nbsp;</div>
						<div id="boxMonete" class="right moneteDiv span4"><div id="moneteDiv"></div></div>
						<div class="clear"></div>
					</div>
					<div class="row-fluid">
						<div class="left left2 span7">
							<div class="boxWhiteOut" id="boxOutCC">
								<div class="boxWhiteCont" id="boxContCC">
									<div class="boxWhiteMain" id="boxMainCC">
										<div class="tit">Versa sul <?php echo $contoLabelLongSingLow ?></div>
										<div class="disponibilita">Disponibilit&agrave; per il trasferimento: <a class="importo" id="massimoImpCCLink"></a>&nbsp;<span class="valuta"></span></div>
										<div class="clear"></div>
											
										<div class="inserimento" id="etichettaCCversamenti">
											<input name="dataCCversamenti" type="hidden" id="dataCCversamenti"/>
											<span class="label">Indica l'importo</span>
												<input class="input" name="importo" type="text" id="importoCCversamenti" data-error=""/>
											<span class="arrw"><a href="javascript:;" id="aggiungiCCversamenti"><img src="/wscmn/img/ret/ria_button_arrow.gif" title="Esegui" /></a></span>
											<div class="clear"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="span1">&nbsp;</div>
						<div class="right right2 span4">
							<div class="legendaBlack">
								Il C/C diventa
								<div class="importo"><span id="diventaCCTr"></span> <span class="valuta"></span></div>
							</div>
							<div class="lineSep"></div>
							<div class="legendaOlive">Il Dep. diventa
								<div class="importo"><span id="diventaCDTr"></span> <span class="valuta"></span></div>
							</div>
						</div>
						<div class="clear"></div>
					</div>
                </div>

                <div class="clear"></div>
                <!-- fine manuali -->
            </div>

            <div id="contentTrasf2" class="contentRia2lvl">
                    <div class="trasferimentiRicorrenti" id="contentTrasfRicorr1">
                        <div>
                            <div class="tit">Trasferimenti periodici inseriti</div>

                            <div id="divTrasfRic">
                                <table class="tab17 tab17nob" cellpadding="0" cellspacing="0" id="tabellaTrasfRic">
                                    <tbody id="bodyTableTS">
                                        <tr>
                                            <th class="uno">Importo</th>
                                            <th >Periodicit&agrave;</th>
                                            <th >Dal</th>
                                            <th >Scadenza ordine</th>
                                            <th class="ultimo">Gestione</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="clear"></div>

                            <div class="invio"><a href="javascript:;" class="btnevid1" title="CREA NUOVO TRASFERIMENTO RICORRENTE" id="nuovoTrasf"><img src="/img/ret/btn_left_sm1.gif" alt=""><span>Imposta nuovo trasferimento periodico</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a></div>
                            <div class="clear"></div>
							
							<br/>
							<p class="note">
								<strong>Annullamento trasferimento periodico</strong><br/>
								Se la richiesta &egrave; inserita entro le ore 20:00 avr&agrave; effetto dal primo giorno lavorativo successivo.
								Altrimenti, dal secondo.
							</p>

                            <div id="titAndamento" class="tit" style="display:none">Andamento deposito</div>

                            <div id="graficoStoricoTRicDiv" class="graficoStoricoTRicDiv" style="display:none"></div>

                            <div class="andamentoMedio" id="LabelGraficoStoricoTRicDiv"><input id="checkAndamentoMedioStoricoTRic" type="checkbox" name="checkAndamentoMedioStoricoTRic" ><img src="/wscmn/img/ret/ria_andamentoMedio.gif" alt=" " />Andamento medio del C/C nell'anno scorso</div>
                            <div class="clear"></div>
                        </div>
                    </div>

                    <div class="nuovoTrasferimentiRicorrenti" id="contentTrasfRicorr2">
                        <div>
                            <!-- div per visualizzazione errori campi form -->
                            <div id="errorDiv3">
                                <div class="errorDiv" >
                                    <div class="boxtop"><img src="/img/ret/box_msgtop.jpg" class="border" /></div>

                                    <div class="boxtxt">
                                        <div class="box_mess">
                                            <img src="/img/ret/img_or_alertria.gif" alt="" class="dx" >
                                            <span class="attenzione">ATTENZIONE</span><br>

											<ul class="alert">
												<span id="errorContent3"></span>
											</ul>
                                        </div>
                                    </div>
									<div class="clear"></div>
									
                                    <div class="boxbottom"><img src="/img/ret/box_msgbottom.jpg" class="border" /></div>
                                </div>

                            </div>

								<form id="ricorrentiForm" >
									<span class="tit">Imposta trasferimento periodico verso il deposito</span>
									<div class="formGeneric">
											<div class="nuovoTrasBox">
												<div class="row-fluid">
													<div class="span6">
														<label for="importoTRf" id="labelImportoTR" class="nomefield">Importo:</label>
														<input type="text" name="importo" id="importoTRf" data-error="">
													</div>
													<div class="span6">
														<label for="aPartireDaTRf" id="labelApartireDaTR" class="nomefield">A partire da:</label>
														<input type="text" name="aPartire" id="aPartireDaTRf"  data-error="">
													</div>
												</div>	
													<div class="row-fluid">
														<div class="span6">
															<label class="nomefield">Frequenza:</label>
															<select name="frequenza" id="frequenzaTRf" ></select>
														</div>
														<div class="span6">
															<label class="nomefield">Scadenza:</label>
															<div id="scadenzeLabeleRadio row-fluid">
																<div class="span4">
																	<label for="scadenza"><input type="radio" id="revoca" name="scadenzaTRf" value="a revoca" class="radio">Su richiesta</label>
																</div>
																<div class="span3">
																	<label for="scadenza" id="labelNumeroTR"><input type="radio" id="dopoN" name="scadenzaTRf" value="dopo" class="radio">Dopo N. </label>
																</div>
																<div class="span5"><input type="text" name="numero" id="numeroTRf" class="numero" maxlength="4"> Versamenti</div>
																
															</div>
															<span class="scadenza"><span id="scadenzaTRfLAB"></span></span>
														</div>
													</div>
												
											</div>
									</div>
									<div class="clear"></div>
							<br/>
								<span id="titGraficoProiezioneTRic" class="tit">Come aumenter&agrave; il tuo deposito?</span>

                                <div id="graficoProiezioneTRicDiv" class="graficoProiezioneTRicDiv"></div>

                                <div id="LegendaGraficoProiezioneTRicDiv">
									<span class="legenda" ><img src="/img/ret/ria_legendaOlivaGrande.gif" alt=" " /> Aumento previsto del deposito</span>
									<span class="legenda"><img src="/img/ret/ria_legendaGreenGrande.gif" alt=" " /> Trasferimento  periodico</span>
                                    <span class="legenda" id="spanCheckAndamentoMedioProiezioneTRic"><input type="checkbox" id="checkAndamentoMedioProiezioneTRic" name="checkAndamentoMedioProiezioneTRic" ><img src="/wscmn/img/ret/ria_andamentoMedio.gif" alt=" " />Andamento medio del C/C nell'anno scorso</span>
                                </div>
								
								<p class="note">Il grafico si riferisce ai soli trasferimenti periodici e non ad altre
										tipologie di trasferimenti (per esempio, singolo  o a soglia).</p>
								
								<div class="clear"></div>
								
                                <div class="imposta"><a href="javascript:;" class="btnevid1" title="Imposta" id="ImpostaTrasRicorrente"><img src="/img/ret/btn_left_sm1.gif" alt=""><span >Procedi</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a></div>

                                <div class="clear"></div>
                            </form>
								
							<div class="clear"></div> 
                        </div>
                    </div>
            </div>

            <div id="contentTrasf3" class="contentRia2lvl">
                    <div id="errorDiv4">
                        <div class="errorDiv" >
                            <div class="boxtop"><img src="/img/ret/box_msgtop.jpg" class="border" /></div>

                            <div class="boxtxt">
                                <div class="box_mess">
                                    <img src="/img/ret/img_or_alertria.gif" alt="" class="dx" >
                                    <span class="attenzione">ATTENZIONE</span><br>

									<ul class="alert">
										<span id="errorContent4"></span>
									</ul>
                                </div>
                            </div>
                            <div class="clear"></div>

                            <div class="boxbottom"><img src="/img/ret/box_msgbottom.jpg" class="border" /></div>
                        </div>
                    </div>

                    <div class="sogliaCC">
                        <div class="row-fluid">
							<div class="span9">
								<span class="tit">Imposta soglia su <?php echo $contoLabelLongSingLow ?></span>
								<br class="clear">
								<ul class="lista">
									<li class="first">Impostando una soglia sul <?php echo $contoLabelShortSingLow ?> puoi tenere <strong>sotto controllo</strong> la tua liquidit&agrave;.
										Automaticamente il deposito sar&agrave; alimentato e/o il tuo <?php echo $contoLabelLongSingLow ?> ripianato.</li>
							 
									<?php  if (!$isWebank) {  ?>
									<li id="testoModificaSoglia" class="other">Ti ricordiamo che sul <?php echo $contoLabelLongSingLow ?> &egrave; prevista una <strong>soglia minima di 500 <span class="valuta"></span></strong>.
										Questa soglia <strong>non &egrave; eliminabile</strong>, pu&ograve; soltanto essere scelto un importo pi&ugrave; alto, cliccando sul bottone &quot;modifica&quot;.</li>
									<?php  }  ?>
								</ul>
							</div>
							<div class="span3">
								<div class="oltre">Oltre i <span id="massimoCD"></span> <span class="valuta"></span> nel C/C trasferisci nel Dep.</div>
								<div id="boxFrecce"><div id="frecceDiv"></div></div>
								<div class="sotto">Sotto i <span id="minimoCD"></span> <span class="valuta"></span> nel C/C trasferisci dal Dep.</div>
							</div>
						</div>
						<div class="clearLeft"></div>
						
						<br/>
						
                        <div class="boxGreyOut">
                            <div class="boxGreyMain">
								<div id="soglieBox">
									<div class="left">
										<div id ="labelSogliaMin" class="labelSoglia">Soglia minima</div>
										<div class="importoOutput" id="importoMinOutput"></div>
										<span class="uniqTooltipText importo static over">
											<span class="uniqTooltipPos">
												<input type="text" id="importoMin" maxlength="8" />&nbsp;<img id="stepperMin" src="/img/ret/frecce.gif" usemap="#mapMin1" class="stepper">
												<map id="mapMin1" name="mapMin1">
													<area shape="rect" coords="0,0,9,5" href="javascript:;" alt="Aumenta di 100" title="Aumenta di 100" id="aumentaMin">
													<area shape="rect" coords="0,9,9,14" href="javascript:;" alt="Diminuisci di 100" title="Diminuisci di 100" id="riduciMin">
												</map>
												<map id="mapMin2" name="mapMin2">
													<area shape="rect" coords="0,0,9,5" href="javascript:;" alt="Aumenta di 100" title="Aumenta di 100" id="aumentaMin2">
												</map>
											</span>
											<span id="tooltipImportoMin" class="uniqTooltipInnerHTML">
												Tooltip valore MIN.
											</span>
										</span>
										<div class="labelAction"><a href="javascript:;" id="sogliaMinOn" class="checkbox">imposta soglia</a><a href="javascript:;" id="sogliaMinOff" class="checkbox">elimina soglia</a></div>
									</div>

									<div class="right">
										<div id ="labelSogliaMax" class="labelSoglia">Soglia massima</div>
										<div class="importoOutput" id="importoMaxOutput"></div>
										<span class="uniqTooltipText importo static over">
											<span class="uniqTooltipPos">
												<input type="text" id="importoMax" maxlength="8"/>&nbsp;<img id="stepperMax" src="/img/ret/frecce.gif" usemap="#mapMax1" class="stepper">
												<map id="mapMax1" name="mapMax1">
													<area shape="rect" coords="0,0,9,5" href="javascript:;" alt="Aumenta di 100" title="Aumenta di 100" id="aumentaMax">
													<area shape="rect" coords="0,9,9,14" href="javascript:;" alt="Diminuisci di 100" title="Diminuisci di 100" id="riduciMax">
												</map>
												<map id="mapMax2" name="mapMax2">
													<area shape="rect" coords="0,0,9,5" href="javascript:;" alt="Aumenta di 100" title="Aumenta di 100" id="aumentaMax2">
												</map>
											</span>
											<span id="tooltipImportoMax" class="uniqTooltipInnerHTML">
												Tooltip valore MAX.
											</span>
										</span>
										<div class="labelAction"><a href="javascript:;" id="sogliaMaxOn" class="checkbox">imposta soglia</a><a href="javascript:;" id="sogliaMaxOff" class="checkbox">elimina soglia</a></div>
									</div>
									<div class="clear"></div>
								</div>

                                <div class="avviso" style="display: none;">Vuoi essere avvisato se la soglia minima viene raggiunta?<input type="checkbox" name="avvisoEmail" id="avvisoEmail" class="checkbox" >Con email<span id="abilitaSMS"><input type="checkbox" name="avvisoSMS" id="avvisoSMS" class="checkbox" >Con SMS</span></div>
                            </div>

                        </div>

						<div class="clear"></div>
                        <div class="imposta">
							<a href="javascript:;" class="btnevid1" title="modifica<?php if ($isWebank) { ?> soglie<?php } ?>" id="ModificaTrasASoglia"><img src="/img/ret/btn_left_sm1.gif" alt=""><span >modifica<?php if ($isWebank) {  ?> soglie<?php } ?>></span><img src="/img/ret/btn_right_sm1.gif" alt=""></a>
							<a href="javascript:;" class="btnevid1" title="elimina soglie" id="EliminaTrasASoglia"><img src="/img/ret/btn_left_sm1.gif" alt=""><span >elimina soglie</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a>
							<a href="javascript:;" class="btnevid1" title="salva" id="ImpostaTrasASoglia"><img src="/img/ret/btn_left_sm1.gif" alt=""><span >salva</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a>
							<div class="clear"></div>
						</div>
 
                        <div id="boxGraficoProiezioneSoglia" class="left" style="display:none">
                            <div id="graficoProiezioneSogliaDiv" class="graficoProiezioneSogliaDiv">Sostistuiscimi con il flash di andamento con deposito</div>

                            <div class="andamentoMedio" id="LegendGraficoProiezioneSogliaDiv"><img src="/wscmn/img/ret/ria_andamentoMedio.gif" alt=" " />Andamento medio del C/C<input id="checkAndamentoMedioSoglia" type="checkbox" name="checkAndamentoMedioSoglia" /><img src="/img/ret/ria_andamentoMedioCD.gif" alt=" " />Andamento medio del Dep.</div>
                        </div>
                   </div>
            </div>

            <div class="clear"></div>
			<?php if ($isWebank) { ?>
			<div class="disclaimer">
				Il &quot;deposito&quot; &egrave; lo strumento che ti consente di accantonare 
				somme di denaro e avere un rendimento maggiore senza vincoli.
			</div>
			<?php } ?>
    </div>

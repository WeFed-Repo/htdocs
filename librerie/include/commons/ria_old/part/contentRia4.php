    <div id="contentRia4" class="tab-content tab-content-on contentRia" style="display:none;">
        <div>
            <!--<div id="sfumaturaTrasf" class="sfumatura2lvl">&nbsp;</div>-->
            <div id="stepsPiano" >
                <div>
                    <div class="wizard">
                        <div id="stepPiano1" class="onStep step">
                            <span>1</span> Scegli obiettivi
                        </div>

                        <div id="stepPiano2" class="step">
                            <span>2</span> Scegli strumento di risparmio
                        </div>

                        <div id="stepPiano3" class="step">
                            <span>3</span> Aumenta la redditivit&agrave;
                        </div>

                        <div id="stepPiano4" class="lastStep step">
                            <span>4</span> Imposta il piano
                        </div>

                        <div class="clear"></div>
                    </div><br/>
                </div>
            </div>

            <div id="contentPiano1" >
                <div>
                    <!-- div per visualizzazione errori campi form -->
                    <div id="errorDiv6">
                        <div class="errorDiv" >
                            <div class="boxtop"><img src="/img/ret/box_msgtop.jpg" class="border" /></div>
                            <div class="boxtxt">
                                <p class="box_mess">
                                    <img src="/img/ret/img_or_alertria.gif" alt="" class="dx" >
                                    <span class="attenzione">ATTENZIONE</span><br>
	                                
	                                <ul class="alert">
	                                    <span id="errorContent6" >
	                                    </span>
	                                </ul>
                                </p>
                            </div>

                            <br class="clear">

                            <div class="boxbottom"><img src="/img/ret/box_msgbottom.jpg" class="border" /></div>
                        </div>
                    </div>

                    <span class="tit">Scegli gli obiettivi</span>

                    <div class="wizard">
                        <div class="testo">Un nuovo computer? Una vacanza? Una nuova auto? <br/>Questo strumento ti permette di creare un piano di risparmio personalizzato per raggiungere  i tuoi obiettivi nel tempo da te prefissato.
                        </div>

                        <div class="clear"></div>

                        <div class="boxStep1">
                            <div class="left"><strong>Definisci i desideri</strong><br /><br /><label for="cosaCP1" id="labelCosaCP1">Cosa vuoi comprare?</label><br /><br /><label for="costoCP1" id="labelCostoCP1">Quanto costa?</label></div>
                            <div class="left long"><br /><br /><input name="cosaCP1" type="text" id="cosaCP1"/><br /><br /><input name="costoCP" type="text" id="costoCP1" maxlength="8"/><br /><br />
                                <a href="javascript:;" class="btnevid1" title="Aggiungi" id="aggiungiObiettivo1"><img src="/img/ret/btn_left_sm1.gif" alt=""><span >Aggiungi alla lista</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a>
                            </div>

                            <div class="right"><strong>Lista dei desideri</strong><br />
                                <div id="stringaObiettivi" class="hidden"></div>

                                <div id="obiettiviCP1" class="scrollTable">
                                </div>
                            </div>

                            <div class="clear"></div>
                        </div>

                        <div class="clear"></div>

                        <br />

                        <a id="pianoAvantiStep1" href="javascript:;" class="btnevid1" title="Avanti"><img src="/img/ret/btn_left_sm1.gif" alt=""><span >Prosegui</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a>

                        <div class="clear"></div>
                    </div>
                </div>
            </div>

            <div id="contentPiano2" >
                <div>
                    <!-- div per visualizzazione errori campi form -->
                    <div id="errorDiv7">
                        <div class="errorDiv" >
                            <div class="boxtop"><img src="/img/ret/box_msgtop.jpg" class="border" /></div>

                            <div class="boxtxt">
                                <p class="box_mess">
                                    <img src="/img/ret/img_or_alertria.gif" alt="" class="dx" >

                                    <span class="attenzione">ATTENZIONE</span><br>

									<ul class="alert">
										<span id="errorContent7" >
										</span>
									</ul>
                                </p>
                            </div>

                            <br class="clear">

                            <div class="boxbottom"><img src="/img/ret/box_msgbottom.jpg" class="border" /></div>
                        </div>
                    </div>

                    <br class="clear">

                    <span class="tit">Scegli strumento di risparmio</span>

                    <div class="wizard">
                        <div class="boxSaldo">
                            <div class="borderLeft">
                                <div class="borderRight">
                                    <div class="borderBottom">
                                        <div class="tl">
                                            <div class="tr">
                                                <div class="bl">
                                                    <div id="contentAccordionPiano1" class="brContent">
                                                        <div>
                                                            <div class="brHead_left"><input type="radio" name="strumento" id="accordionPianoRadio1" />Usa il trasferimento periodico</div>

                                                            <div class="brHead_puls" id="accordionPianoPuls1">&nbsp; </div><div class="clear"></div>

                                                            <div class="BoxWizard" id="labelTrasferimentoRicorr">Quanti soldi sei disposto a mettere da parte ogni mese?</div>

                                                            <div class="BoxWizardInput"><input name="importoTrasferimentoPiano" type="text" id="importoTrasferimentoPiano"/>&nbsp;&nbsp;<span class="valuta"></span></div>

                                                            <div class="clear"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="boxSaldo">
                            <div class="borderLeft">
                                <div class="borderRight">
                                    <div class="borderBottom">
                                        <div class="tl">
                                            <div class="tr">
                                                <div class="bl">
                                                    <div id="contentAccordionPiano2" class="brContent">
                                                        <div>

                                                            <div class="brHead_left"><input type="radio" name="strumento" id="accordionPianoRadio2" />Usa il trasferimento a soglia</div>

                                                            <div class="brHead_puls" id="accordionPianoPuls2"> </div><div class="clear"></div>

                                                            <div class="BoxWizard" id="labelSogliaMassima">Quanti soldi vuoi tenere al massimo sul <?php echo $contoLabelLongSingLow ?>?</div>

                                                            <div class="BoxWizardInput"><input name="sogliaTrasferimentoPiano" type="text" id="sogliaTrasferimentoPiano"/></div>

                                                            <div class="clear"></div><br />

																Impostando una soglia di <strong><span id="testoSogliaCP"></span> <span class="valuta"></span></strong> e analizzando i tuoi dati di <?php echo $contoLabelLongSingLow ?>, risulta che ogni mese riuscirai a mettere da parte in media <strong><span id="testoGuadagnoSogliaCP"></span> <span class="valuta"></span></strong>														
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="clear"></div>

                        <br />

                        <a id="pianoAvantiStep2" href="javascript:;" class="btnevid1" title="Prosegui"><img src="/img/ret/btn_left_sm1.gif" alt=""><span >Prosegui</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a>

                        <div class="clear"></div>
                    </div>
                </div>
            </div>

            <div id="contentPiano3" >
                <div>
                    <!-- div per visualizzazione errori campi form -->
                    <div id="errorDiv8">
                        <div class="errorDiv" >
                            <div class="boxtop"><img src="/img/ret/box_msgtop.jpg" class="border" /></div>

                            <div class="boxtxt">
                                <p class="box_mess">
                                    <img src="/img/ret/img_or_alertria.gif" alt="" class="dx" >
                                    <span class="attenzione">ATTENZIONE</span><br>

									<ul class="alert">
										<span id="errorContent8" >
										</span>
									</ul>
                                </p>
                            </div>

                            <br class="clear">

                            <div class="boxbottom"><img src="/img/ret/box_msgbottom.jpg" class="border" /></div>
                        </div>
                    </div>

                    <span class="tit">Aumenta la redditivit&agrave;</span>

                    <div class="wizard">

                        <div class="testo3">Se vuoi, puoi <strong>realizzare prima</strong> i tuoi desideri. Come? Aprendo una <strong>linea vincolata</strong>, che ti permette di aumentare il rendimento deli tuoi risparmi.</div>

                        <div class="testo3"><strong class="testo"><strong>Vuoi aprire una <span title="Puoi aprire una linea vincolata, investendo l'importo che preferisci. L'importo investito viene prelevato dal deposito base. Puoi decidere di svincolare l'importo in ogni momento senza penali; l'importo verr&agrave; considerato come mai vincolato" >linea vincolata</span>?</strong> Si <input type="radio" name="vincolata" id="vincolataCPSI" value="si" class="radio"/> No <input type="radio" name="vincolata" value="no" id="vincolataCPNO" class="radio" checked="checked"/></strong></div>

                        <div class="clear"></div>

                        <div class="vincolataBox" id="VincolataBoxCP">
                            <div>
                                <form id="creaPainoLVForm">
                                    <div class="boxGreyOut">
                                        <span class="importo" ><label for="importoLVcp" id="labelImportoLVCP" >Quanto vuoi investire?</label>&nbsp;&nbsp;<input name="importoLVcp" type="text" id="importoLVcp" class="inputManualeForm"/>&nbsp;<span class="valuta"></span></span>
									(Disponibilit&agrave; massima per l'investimento: <span id="massimoLV2"></span> <span class="valuta"></span>)
                                    </div>

                                    <div id="boxTabLineeVincolatecp"></div>
                                </form>
                            </div>
                        </div>

                        <div class="clear"></div>

                        <a id="pianoAvantiStep3" href="javascript:;" class="btnevid1" title="Prosegui"><img src="/img/ret/btn_left_sm1.gif" alt=""><span >Prosegui</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a>

                        <div class="clear"></div>
                    </div>
                </div>
            </div>

            <div id="contentPiano4" >
                <div>
                    <div class="wizard">
                        <div class="testo"><span class="tit">Piano</span></div>

                        <div class="testo">Questo &egrave; il piano che hai creato; il grafico ti mostra quando potrai raggiungere i tuoi desideri. <br/>E' ancora possibile modificare i criteri che hai definito e procedere all'attivazione del piano.</div>

                        <div id="graficoPianoProiezioneDiv" class="graficoPianoProiezioneDiv"></div>

                        <div class="legenda"><img src="/img/ret/ria_legendaStep4.gif" alt="">Risparmio previsto (margine cd + svincoli - trasferimenti automatici gi&agrave; impostati)</div>

                        <div class="testo"><span class="tit">Criteri</span></div>

                        <!-- div per visualizzazione errori campi form -->

                        <div id="errorDiv9">
                            <div class="errorDiv" >
                                <div class="boxtop"><img src="/img/ret/box_msgtop.jpg" class="border" /></div>

                                <div class="boxtxt">
                                    <p class="box_mess">
                                        <img src="/img/ret/img_or_alertria.gif" alt="" class="dx" >
                                        <span class="attenzione">ATTENZIONE</span><br>
										<ul class="alert">
											<span id="errorContent9" >
											</span>
										</ul>
                                    </p>
                                </div>

                                <br class="clear">

                                <div class="boxbottom"><img src="/img/ret/box_msgbottom.jpg" class="border" /></div>
                            </div>
                        </div>

                        <div class="boxStep4">
                            <div class="obiettivi"><strong>I tuoi obiettivi</strong><br />
                                <div id="obiettiviCP2" class="scrollTable">
                                </div>
                            </div>

                            <div class="clear"></div>

                            <div class="left"><strong>Aggiungi obiettivo</strong><br /><br /><label for="cosaCP2" id="labelCosaCP2">Cosa vuoi comprare?</label><br /><br /><label for="costoCP2" id="labelCostoCP2">Quanto costa?</label></div>

                            <div class="left4"><br /><br /><input name="cosaCP2" type="text" id="cosaCP2" maxlength="8"/><br /><br /><input name="costoCP2" type="text" id="costoCP2"/><br /><br />
                                <a href="javascript:;" class="btnevid1" title="Aggiungi" id="aggiungiObiettivo2"><img src="/img/ret/btn_left_sm1.gif" alt=""><span >Aggiungi</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a>
                            </div>

                            <div class="clear"></div>
                        </div>

                        <div class="boxStep4_2">
                            <h3>Strumenti di risparmio</h3>

                            <div class="tabContainer2">
                                <div id="tabRisparmio1" class="tabRia">
                                    <div class="tabRiaLeft"></div>

                                    <div class="tabRiaCont">Utilizza trasferimento</div>

                                    <div class="tabRiaRight"></div>
                                </div>

                                <div id="tabRisparmio2" class="tabRia">
                                    <div class="tabRiaLeft"></div>

                                    <div class="tabRiaCont">Utilizza soglia</div>

                                    <div class="tabRiaRight"></div>
                                </div>

                                <div class="clear"></div>
                            </div>

                            <div id="contentRisparmio1" class="boxBase">
                                <div>
                                    <div class="boxBaseBorLeft">
                                        <div class="boxBaseBorRight">
                                            <div class="boxBaseBorBottom">
                                                <div class="boxBaseTopRight">
                                                    <div class="boxBaseBottomLeft">
                                                        <div class="boxBaseBottomRight">
                                                            <!-- Box Utilizza trasferimento -->

                                                            <div class="contenuto">
                                                                <div class="left">
                                                                    <label for="importoTrasf" id="labelImportoTrasf">Trasf.</label>

                                                                    <select name="trasferimento" id="frequenzaTrasf">
                                                                    </select><br />

                                                                    <input type="text" name="importoTrasf" id="importoTrasf" /><br />

                                                                    <div id="track2"  style="width:90px; height:9px;" class="track">
                                                                        <div class="track-left"></div>

                                                                        <div id="handle2" style="width:22px; height:16px;">
                                                                            <img src="/img/ret/slider-images-handle.png" class="track-img" alt=""/>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="right">
                                                                    <label for="previsioneTrasf" id="labelPrevisioneTrasf">Data di raggiungimento</label><br />
                                                                    <input type="text" name="previsioneTrasf" id="previsioneTrasf" class="exception"/><br />

                                                                    <div id="track3"  style="width:90px; height:9px;" class="track">
                                                                        <div class="track-left"></div>

                                                                        <div id="handle3" style="width:22px; height:16px;">
                                                                            <img src="/img/ret/slider-images-handle.png" class="track-img" alt=""/>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="clear"></div>
                                                            </div>
                                                            <!-- /Box Utilizza trasferimento -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="contentRisparmio2" class="boxBase">
                                <div>
                                    <div class="boxBaseBorLeft">
                                        <div class="boxBaseBorRight">
                                            <div class="boxBaseBorBottom">
                                                <div class="boxBaseTopRight">
                                                    <div class="boxBaseBottomLeft">
                                                        <div class="boxBaseBottomRight">
                                                            <!-- Box Utilizza trasferimento -->
                                                            <div class="contenuto">
                                                                <div class="left">
                                                                    <label for="importoSoglia" id="labelImportoSoglia">Soglia max di C/C</label><br />

                                                                    <input type="text" name="importoSoglia" id="importoSoglia" /><br />

                                                                    <div id="track4"  style="width:90px; height:9px;" class="track">
                                                                        <div class="track-left"></div>
                                                                        <div id="handle4" style="width:22px; height:16px;">
                                                                            <img src="/img/ret/slider-images-handle.png" class="track-img" alt=""/>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="right">
                                                                    <label for="previsioneSoglia" id="labelPrevisioneSoglia">Data di raggiungimento</label><br />

                                                                    <input type="text" name="previsioneSoglia" id="previsioneSoglia" />
                                                                    <div id="track5"  style="width:90px; height:9px;" class="track">
                                                                        <div class="track-left"></div>
                                                                        <div id="handle5" style="width:22px; height:16px;">
                                                                            <img src="/img/ret/slider-images-handle.png" class="track-img" alt=""/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </div>
                                                            <!-- /Box Utilizza trasferimento -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="clear"></div>

                            <div class="boxBase">
                                <div class="boxBaseBorLeft">
                                    <div class="boxBaseBorRight">
                                        <div class="boxBaseBorBottom">
                                            <div class="boxBaseTopLeft">
                                                <div class="boxBaseTopRight">
                                                    <div class="boxBaseBottomLeft">
                                                        <div class="boxBaseBottomRight">
                                                            <div class="boxBaseContent">
                                                                <div class="contenuto">
                                                                    <h3>Vuoi maggiore redditivit&agrave; per il tuo<br/> risparmio?</h3>

                                                                    <input type="checkbox" name="lineaVincolataRiep" id="lineaVincolataRiep" class="checkbox"/> <label for="lineaVincolataRiep" id="labelLineaVincolataRiep">Vincola il denaro del deposito</label><br/>
                                                                    <input type="text" name="lineaVincolataRiepImporto" id="lineaVincolataRiepImporto" class="text"/>

                                                                    <select name="lineaVincolataRiepDurata" id="lineaVincolataRiepDurata" class="cl100">
                                                                    </select>
                                                                    <div class="clear"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="clear"></div>

                        <a id="pianoAvantiStep4" href="javascript:;" class="btnevid1" title="Attiva piano"><img src="/img/ret/btn_left_sm1.gif" alt=""><span >Attiva piano</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a>

                        <div class="clear"></div>
                    </div>
                </div>
            </div>

            <div id="contentPiano5" >
                <div>
                    <div class="pianiRisparmio">
                        <span class="tit">Il tuo piano di risparmio</span>

                        <div class="boxPiani">
                            <div class="left">
                                <div class="piano" id="nomePianoRP"></div>
                            </div>

                            <div class="right">
                                <h3>Lista desideri</h3>

                                <div id="listaDesideriRP" class="scrollTable">
                                </div>
                            </div>
                        </div>

                        <div class="clear"></div>

                        <div class="testo">Verifica l'andamento del piano&nbsp;<strong id="nomePianoRP2"></strong>&nbsp;che hai creato il <span id="dataPianoRP"></span></div>

                        <div id="divRitardo" class="ritardo"><img id="imgRitardo" src="/img/ret/ria_verificaPianoLegRitardo.gif" alt=" " /><span id="ritardoPianoRP">SEI IN RITARDO DI 100 <span class="valuta"></span> RISPETTO ALLA TUA PIANIFICAZIONE</span></div>

                        <div id="graficoPianoSalvatoDiv" class="graficoPianoSalvatoDiv"></div>

                        <span class="legenda"><img src="/img/ret/ria_risparmioPrevisto.gif" alt=" " />Risparmio previsto</span><span class="legenda"><img src="/img/ret/ria_andamentoMedioCDPianifica.gif" alt=" " />Andamento del Dep.</span><span class="legenda"><input type="checkbox" id="checkAndamentoMedioRiepilogoPiano" name="checkAndamentoMedioRiepilogoPiano" ><img src="/img/ret/ria_andamentoMedio.gif" alt=" " />Andamento medio del C/C</span>

                        <div class="clear"></div><br/>

                        <a href="javascript:;" class="btnevid1" title="Procedi nella creazione del piano" id="creaNuovoPiano"><img src="/img/ret/btn_left_sm1.gif" alt=""><span >Crea un nuovo piano</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a>

                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php  if ($permettiDispositive) {  ?>
<!----- TRASFERIMENTI VELOCI ----->
<!-- popup trasferimento CD conferma -->
<div class="conferma layeralert2" id="lbConferma1" style="display: none;">
	<div class="head handle">
		<img src="/img/ret/layeralert_x.gif" alt="chiudi">
	</div>
	<div class="body corpo">
		<div class="tithelp wt">	
			<div class="helpleft"><h2 class="titTable">TRASFERIMENTO SINGOLO</h2></div>
			<br class="clear">
		</div>
        <div class="clear"></div><br />
        <div class="confermaContent" id="confermaContent1">
			Stai per effettuare un trasferimento dal <?php echo $contoLabelLongSingLow ?> al deposito<br/>
			
			<?php  if ($isWebank) {  ?>
			Ti invitiamo a lasciare, sul <?php echo $contoLabelLongSingLow ?>,
			<strong>la liquidit&agrave; sufficiente per coprire le spese</strong>
			(imposta di bollo, addebiti carta di credito, etc..)<br/>
			<?php  }  ?>
			<br/>
			
            <div class="box">
                <strong>Importo: <span id="importoDaVersareCD"></span> <span class="valuta"></span><br/>
				Data di accredito: <span id="dataCD"></span></strong>			
            </div>
            <hr class="lineSep" />
            <a id="annullaCD1" href="javascript:;" class="btnevid2 left" title="annulla"><img src="/img/ret/btn_left_sm2.gif" alt=""><span >annulla</span><img src="/img/ret/btn_right_sm2.gif" alt=""></a>
            <a id="disponiCD1" href="javascript:;" class="btnevid1" title="Disponi"><img src="/img/ret/btn_left_sm1.gif" alt=""><span >conferma</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a>
            <div id="disponiW1" class="rightDispW"><img src="/img/ret/ico2inf_loading.gif" alt="">&nbsp;Caricamento in corso</div>
        </div>
        <!--Div per la response delle dispositive in popup  -->
        <div id="confermaResponse1" class="responseDivPopUp">
            <div>
                <div class="boxtop"><img src="/img/ret/box_msgtop.jpg"  class="border"></div>
                <div class="boxtxt">
                    <p class="box_mess">
                        <span class="confirmHead">
                            <img src="/wscmn/img/ico2inf_ok.gif">
                            <span class="ok">OPERAZIONE ESEGUITA CORRETTAMENTE</span>
                        </span>
                        <span class="errorHead">
                            <img src="/img/ret/img_or_alertria.gif" class="dx">
                            <span class="attenzione">ATTENZIONE</span>
                        </span>
                        <br/><strong class="messageResponse">
                        </strong>
                    </p>
                </div>
                <br class="clear">
                <div class="boxbottom"><img src="/img/ret/box_msgbottom.jpg" class="border"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
	<div class="foot"></div>
</div>
<!-- /popup trasferimento CD conferma -->

<!-- popup trasferimento CC conferma -->
<div class="conferma layeralert2" id="lbConferma2" style="display: none;">
	<div class="head handle">
		<img src="/img/ret/layeralert_x.gif" alt="chiudi">
	</div>
	<div class="body corpo">
		<div class="tithelp wt">	
			<div class="helpleft"><h2 class="titTable">TRASFERIMENTO SINGOLO</h2></div>
			<br class="clear">
		</div>
        <div class="clear"></div><br />
        <div class="confermaContent" id="confermaContent2">
			Stai per effettuare un trasferimento dal deposito al <?php echo $contoLabelLongSingLow ?><br/><br/>
            <div class="box">
                <strong>Importo: <span id="importoDaVersareCC"></span> <span class="valuta"></span><br/>
				Data di accredito: <span id="dataCC"></span></strong>
            </div>
            <hr class="lineSep" />
            <a id="annullaCC2" href="javascript:;" class="btnevid2 left" title="annulla"><img src="/img/ret/btn_left_sm2.gif" alt=""><span >annulla</span><img src="/img/ret/btn_right_sm2.gif" alt=""></a>
            <a id="disponiCC2" href="javascript:;" class="btnevid1" title="conferma"><img src="/img/ret/btn_left_sm1.gif" alt=""><span >conferma</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a>
            <div id="disponiW2" class="rightDispW"><img src="/img/ret/ico2inf_loading.gif" alt="">&nbsp;Caricamento in corso</div>
        </div>
        <!--Div per la response delle dispositive in popup  -->
        <div id="confermaResponse2" class="responseDivPopUp">
            <div class="boxtop"><img src="/img/ret/box_msgtop.jpg"  class="border"></div>
            <div class="boxtxt">
                <p class="box_mess">
                    <span class="confirmHead">
                        <img src="/wscmn/img/ico2inf_ok.gif">
                        <span class="ok">OPERAZIONE ESEGUITA CORRETTAMENTE</span>
                    </span>
                    <span class="errorHead">
                        <img src="/img/ret/img_or_alertria.gif" class="dx">
                        <span class="attenzione">ATTENZIONE</span>
                    </span>
                    <br/><strong class="messageResponse">
                    </strong>
                </p>
            </div>
            <br class="clear">
            <div class="boxbottom"><img src="/img/ret/box_msgbottom.jpg" class="border"></div>
        </div>
        <div class="clear"></div>
    </div>
	<div class="foot"></div>
</div>
<!-- /popup trasferimento CC conferma -->

	<?php  if ($isWebank) {  ?>
<!-- popup trasferimento CDER conferma -->
<div class="conferma layeralert2" id="lbConferma1a" style="display: none;">
	<div class="head handle">
		<img src="/img/ret/layeralert_x.gif" alt="chiudi">
	</div>
	<div class="body corpo">
		<div class="tithelp wt">	
			<div class="helpleft"><h2 class="titTable">TRASFERIMENTO SINGOLO</h2></div>
			<br class="clear">
		</div>
        <div class="clear"></div><br />
        <div class="confermaContent" id="confermaContent1a">
			Stai per effettuare un trasferimento dal <?php echo $contoLabelLongSingLow ?> alla liquidit&agrave; derivati<br/>
			
			Ti invitiamo a lasciare, sul <?php echo $contoLabelLongSingLow ?>,
			<strong>la liquidit&agrave; sufficiente per coprire le spese</strong>
			(imposta di bollo, addebiti carta di credito, etc..)<br/>
			<br/>
			
            <div class="box">
                <strong>Importo: <span id="importoDaVersareCDER"></span> <span class="valuta"></span><br/>
				Data di accredito: <span id="dataCDER"></span></strong>			
            </div>
            <hr class="lineSep" />
            <a id="annullaCDER1" href="javascript:;" class="btnevid2 left" title="annulla"><img src="/img/ret/btn_left_sm2.gif" alt=""><span >annulla</span><img src="/img/ret/btn_right_sm2.gif" alt=""></a>
            <a id="disponiCDER1" href="javascript:;" class="btnevid1" title="Disponi"><img src="/img/ret/btn_left_sm1.gif" alt=""><span >conferma</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a>
            <div id="disponiW1a" class="rightDispW"><img src="/img/ret/ico2inf_loading.gif" alt="">&nbsp;Caricamento in corso</div>
        </div>
        <!--Div per la response delle dispositive in popup  -->
        <div id="confermaResponse1a" class="responseDivPopUp">
            <div>
                <div class="boxtop"><img src="/img/ret/box_msgtop.jpg"  class="border"></div>
                <div class="boxtxt">
                    <p class="box_mess">
                        <span class="confirmHead">
                            <img src="/wscmn/img/ico2inf_ok.gif">
                            <span class="ok">OPERAZIONE ESEGUITA CORRETTAMENTE</span>
                        </span>
                        <span class="errorHead">
                            <img src="/img/ret/img_or_alertria.gif" class="dx">
                            <span class="attenzione">ATTENZIONE</span>
                        </span>
                        <br/><strong class="messageResponse">
                        </strong>
                    </p>
                </div>
                <br class="clear">
                <div class="boxbottom"><img src="/img/ret/box_msgbottom.jpg" class="border"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
	<div class="foot"></div>
</div>
<!-- /popup trasferimento CDER conferma -->

<!-- popup trasferimento CC2 conferma -->	
<div class="conferma layeralert2" id="lbConferma2a" style="display: none;">
	<div class="head handle">
		<img src="/img/ret/layeralert_x.gif" alt="chiudi">
	</div>
	<div class="body corpo">
		<div class="tithelp wt">	
			<div class="helpleft"><h2 class="titTable">TRASFERIMENTO SINGOLO</h2></div>
			<br class="clear">
		</div>
        <div class="clear"></div><br />
        <div class="confermaContent" id="confermaContent2a">
			Stai per effettuare un trasferimento dalla liquidit&agrave; derivati al <?php echo $contoLabelLongSingLow ?><br/><br/>
			
            <div class="box">
                <strong>Importo: <span id="importoDaVersareCC2"></span> <span class="valuta"></span><br/>
				Data di accredito: <span id="dataCC2"></span></strong>
            </div>
            <hr class="lineSep" />
            <a id="annullaCC2a" href="javascript:;" class="btnevid2 left" title="annulla"><img src="/img/ret/btn_left_sm2.gif" alt=""><span >annulla</span><img src="/img/ret/btn_right_sm2.gif" alt=""></a>
            <a id="disponiCC2a" href="javascript:;" class="btnevid1" title="conferma"><img src="/img/ret/btn_left_sm1.gif" alt=""><span >conferma</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a>
            <div id="disponiW2a" class="rightDispW"><img src="/img/ret/ico2inf_loading.gif" alt="">&nbsp;Caricamento in corso</div>
        </div>
        <!--Div per la response delle dispositive in popup  -->
        <div id="confermaResponse2a" class="responseDivPopUp">
            <div class="boxtop"><img src="/img/ret/box_msgtop.jpg"  class="border"></div>
            <div class="boxtxt">
                <p class="box_mess">
                    <span class="confirmHead">
                        <img src="/wscmn/img/ico2inf_ok.gif">
                        <span class="ok">OPERAZIONE ESEGUITA CORRETTAMENTE</span>
                    </span>
                    <span class="errorHead">
                        <img src="/img/ret/img_or_alertria.gif" class="dx">
                        <span class="attenzione">ATTENZIONE</span>
                    </span>
                    <br/><strong class="messageResponse">
                    </strong>
                </p>
            </div>
            <br class="clear">
            <div class="boxbottom"><img src="/img/ret/box_msgbottom.jpg" class="border"></div>
        </div>
        <div class="clear"></div>
    </div>
	<div class="foot"></div>
</div>
<!-- /popup trasferimento CC2 conferma -->
	<?php  }  ?>
<!----- |FINE| TRASFERIMENTI VELOCI ----->

<!----- TRASFERIMENTI PERIODICI ----->
<!-- popup elimina trasferimento periodico conferma -->
<div class="conferma layeralert2" id="lbConferma3" style="display: none;">
	<div class="head handle">
		<img src="/img/ret/layeralert_x.gif" alt="chiudi">
	</div>
	<div class="body corpo">
		<div class="tithelp wt">	
			<div class="helpleft"><h2 class="titTable">ELIMINA TRASFERIMENTO PERIODICO</h2></div>
			<br class="clear">
		</div>
        <div class="clear"></div><br />
        <div class="confermaContent" id="confermaContent3">
			Stai per eliminare un trasferimento periodico dal <?php echo $contoLabelLongSingLow ?> al deposito.<br/><br/>
            <div class="box">
                <div class="left">
                    <strong>Importo: <span id="importoDaEliminare"></span> <span class="valuta"></span><br/>
					A partire da: <span id="aPartireDa"></span></strong>
                </div>
                <div class="left">
                    <strong>Frequenza: <span id="frequenza"></span><br/>
					Scadenza: <span id="scadenza"></span></strong>
                </div>
            </div>
            <hr class="lineSep" />
            <a id="annulla3" href="javascript:;" class="btnevid2 left" title="annulla"><img src="/img/ret/btn_left_sm2.gif" alt=""><span >annulla</span><img src="/img/ret/btn_right_sm2.gif" alt=""></a>
            <a id="disponi3" href="javascript:;" class="btnevid1" title="conferma"><img src="/img/ret/btn_left_sm1.gif" alt=""><span >conferma</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a>
            <div id="disponiW3" class="rightDispW"><img src="/img/ret/ico2inf_loading.gif" alt="">&nbsp;Caricamento in corso</div>
        </div>
        <!--Div per la response delle dispositive in popup  -->
        <div id="confermaResponse3" class="responseDivPopUp">
            <div class="boxtop"><img src="/img/ret/box_msgtop.jpg"  class="border"></div>
            <div class="boxtxt">
                <p class="box_mess">
                    <span class="confirmHead">
                        <img src="/wscmn/img/ico2inf_ok.gif">
                        <span class="ok">OPERAZIONE ESEGUITA CORRETTAMENTE</span>
                    </span>
                    <span class="errorHead">
                        <img src="/img/ret/img_or_alertria.gif" class="dx">
                        <span class="attenzione">ATTENZIONE</span>
                    </span>
                    <br/><strong class="messageResponse">
                    </strong>
                </p>
            </div>
            <br class="clear">
            <div class="boxbottom"><img src="/img/ret/box_msgbottom.jpg" class="border"></div>
        </div>
        <div class="clear"></div>
    </div>
	<div class="foot"></div>
</div>
<!-- /popup elimina trasferimento periodico conferma -->
<!-- popup conferma nuovo trasferimento periodico -->
<div class="conferma layeralert2" id="lbConferma4" style="display: none;">
	<div class="head handle">
		<img src="/img/ret/layeralert_x.gif" alt="chiudi">
	</div>
	<div class="body corpo">
		<div class="tithelp wt">	
			<div class="helpleft"><h2 class="titTable">TRASFERIMENTO PERIODICO</h2></div>
			<br class="clear">
		</div>
        <div class="clear"></div><br />
        <div class="confermaContent" id="confermaContent4">
			Stai per disporre un trasferimento periodico dal <?php echo $contoLabelLongSingLow ?> al deposito.<br/><br/>
            <div class="box">
                <div class="left">
                    <strong>Importo: <span id="importoTR"></span> <span class="valuta"></span><br/>
					A partire da: <span id="aPartireDaTR"></span></strong>
                </div>
                <div class="left">
                    <strong>Frequenza: <span id="frequenzaTR"></span><br/>
					Scadenza: <span id="scadenzaTR"></span></strong>
                </div>
            </div>
            <hr class="lineSep" />
            <a id="annulla4" href="javascript:;" class="btnevid2 left" title="annulla"><img src="/img/ret/btn_left_sm2.gif" alt=""><span >annulla</span><img src="/img/ret/btn_right_sm2.gif" alt=""></a>
            <a id="disponi4" href="javascript:;" class="btnevid1" title="conferma"><img src="/img/ret/btn_left_sm1.gif" alt=""><span >conferma</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a>
            <div id="disponiW4" class="rightDispW"><img src="/img/ret/ico2inf_loading.gif" alt="">&nbsp;Caricamento in corso</div>
        </div>
        <!--Div per la response delle dispositive in popup  -->
        <div id="confermaResponse4" class="responseDivPopUp">
            <div class="boxtop"><img src="/img/ret/box_msgtop.jpg"  class="border"></div>
            <div class="boxtxt">
                <p class="box_mess">
                    <span class="confirmHead">
                        <img src="/wscmn/img/ico2inf_ok.gif">
                        <span class="ok">OPERAZIONE ESEGUITA CORRETTAMENTE</span>
                    </span>
                    <span class="errorHead">
                        <img src="/img/ret/img_or_alertria.gif" class="dx">
                        <span class="attenzione">ATTENZIONE</span>
                    </span>
                    <br/><strong class="messageResponse">
                    </strong>
                </p>
            </div>
            <br class="clear">
            <div class="boxbottom"><img src="/img/ret/box_msgbottom.jpg" class="border"></div>
        </div>
        <div class="clear"></div>
    </div>
	<div class="foot"></div>
</div>
<!-- /popup conferma nuovo trasferimento periodico -->
<!----- |FINE| TRASFERIMENTI PERIODICI ----->


<!----- TRASFERIMENTI A SOGLIA ----->
<!-- popup elimina trasferimento a soglia -->
<div class="conferma layeralert2" id="lbConferma12" style="display: none;">
	<div class="head handle">
		<img src="/img/ret/layeralert_x.gif" alt="chiudi">
	</div>
	<div class="body corpo">
		<div class="tithelp wt">	
			<div class="helpleft"><h2 class="titTable">ELIMINAZIONE SOGLIE SUL <?php echo strtoupper($contoLabelLongSingLow) ?></h2></div>
			<br class="clear">
		</div>
        <div class="clear"></div><br />
        <div class="confermaContent" id="confermaContent12">
			Stai per eliminare le soglie precedentemente impostate.

			<div class="box">
				<div class="left">
					<strong>Soglia Minima: <span id="importoMinEL"></span><span id="importoMinEuroEL">&nbsp;<span class="valuta"></span></span></strong>
				</div>
				<div class="left">
					<strong>Soglia Massima: <span id="importoMaxEL"></span><span id="importoMaxEuroEL">&nbsp;<span class="valuta"></span></span></strong><br/>
				</div>
			</div>
            <hr class="lineSep" />
            <a id="annulla12" href="javascript:;" class="btnevid2 left" title="annulla"><img src="/img/ret/btn_left_sm2.gif" alt=""><span >annulla</span><img src="/img/ret/btn_right_sm2.gif" alt=""></a>
            <a id="disponi12" href="javascript:;" class="btnevid1" title="conferma"><img src="/img/ret/btn_left_sm1.gif" alt=""><span >conferma</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a>
            <div id="disponiW12" class="rightDispW"><img src="/img/ret/ico2inf_loading.gif" alt="">&nbsp;Caricamento in corso</div>
        </div>
        <!--Div per la response delle dispositive in popup  -->
        <div id="confermaResponse12" class="responseDivPopUp">
            <div class="boxtop"><img src="/img/ret/box_msgtop.jpg"  class="border"></div>
            <div class="boxtxt">
                <p class="box_mess">
                    <span class="confirmHead">
                        <img src="/wscmn/img/ico2inf_ok.gif">
                        <span class="ok">OPERAZIONE ESEGUITA CORRETTAMENTE</span>
                    </span>
                    <span class="errorHead">
                        <img src="/img/ret/img_or_alertria.gif" class="dx">
                        <span class="attenzione">ATTENZIONE</span>
                    </span>
                    <br/><strong class="messageResponse">
                    </strong>
                </p>
            </div>
            <br class="clear">
            <div class="boxbottom"><img src="/img/ret/box_msgbottom.jpg" class="border"></div>
        </div>
        <div class="clear"></div>
    </div>
	<div class="foot"></div>
</div>
<!-- /popup elimina trasferimento a soglia -->

<!-- popup conferma trasferimento a soglia -->
<div class="conferma layeralert2" id="lbConferma5" style="display: none;">
	<div class="head handle">
		<img src="/img/ret/layeralert_x.gif" alt="chiudi">
	</div>
	<div class="body corpo">
		<div class="tithelp wt">	
			<div class="helpleft"><h2 class="titTable">IMPOSTAZIONE SOGLIE SUL <?php echo strtoupper($contoLabelLongSingLow) ?></h2></div>
			<br class="clear">
		</div>
        <div class="clear"></div><br />
        <div class="confermaContent" id="confermaContent5">
            <div id="entrambeTXT">
				Stai per modificare le soglie sul <?php echo $contoLabelLongSingLow ?>.<br/>
				Le nuove soglie sono indicate di seguito.<br/>
				L'importo trasferito in base alla soglia sar&agrave; arrotondato all'euro.<br/>
                <div class="box">
                    <div class="left">
                        <strong>Soglia Minima: <span id="importoMinLB"></span><span id="importoMinEuroLB">&nbsp;<span class="valuta"></span></span></strong>
                    </div>
                    <div class="left">
                        <strong>Soglia Massima: <span id="importoMaxLB"></span><span id="importoMaxEuroLB">&nbsp;<span class="valuta"></span></span></strong><br/>
                    </div>
                </div>
            </div>
            <hr class="lineSep" />
            <a id="annulla5" href="javascript:;" class="btnevid2 left" title="annulla"><img src="/img/ret/btn_left_sm2.gif" alt=""><span >annulla</span><img src="/img/ret/btn_right_sm2.gif" alt=""></a>
            <a id="disponi5" href="javascript:;" class="btnevid1" title="conferma"><img src="/img/ret/btn_left_sm1.gif" alt=""><span >conferma</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a>
            <div id="disponiW5" class="rightDispW"><img src="/img/ret/ico2inf_loading.gif" alt="">&nbsp;Caricamento in corso</div>
        </div>
        <!--Div per la response delle dispositive in popup  -->
        <div id="confermaResponse5" class="responseDivPopUp">
            <div class="boxtop"><img src="/img/ret/box_msgtop.jpg"  class="border"></div>
            <div class="boxtxt">
                <p class="box_mess">
                    <span class="confirmHead">
                        <img src="/wscmn/img/ico2inf_ok.gif">
                        <span class="ok">OPERAZIONE ESEGUITA CORRETTAMENTE</span>
                    </span>
                    <span class="errorHead">
                        <img src="/img/ret/img_or_alertria.gif" class="dx">
                        <span class="attenzione">ATTENZIONE</span>
                    </span>
                    <br/><strong class="messageResponse">
                    </strong>
                </p>
            </div>
            <br class="clear">
            <div class="boxbottom"><img src="/img/ret/box_msgbottom.jpg" class="border"></div>
        </div>
        <div class="clear"></div>
    </div>
	<div class="foot"></div>
</div>
<!-- /popup conferma trasferimento a soglia -->
<!----- |FINE| TRASFERIMENTI A SOGLIA ----->

	<?php  if ($isWebank) {  ?>
<!----- LINEE VINCOLATE ----->
<!-- popup conferma elimina linea vincolata -->
<div class="conferma layeralert2" id="lbConferma6" style="display: none;">
	<div class="head handle">
		<img src="/img/ret/layeralert_x.gif" alt="chiudi">
	</div>
	<div class="body corpo">
		<div class="tithelp wt">	
			<div class="helpleft"><h2 class="titTable">SVINCOLO ANTICIPATO</h2></div>
			<br class="clear">
		</div>
        <div class="clear"></div><br />
        <div class="clear"></div>
        <div class="confermaContent" id="confermaContent6">
			<div id="boxRetentionLV"></div>
			<p><strong>Stai per svincolare questa linea</strong>, l'importo sar&agrave; riaccreditato sul deposito libero.</p>
			<div class="boxinfo warning">
				<div class="top"></div>
				<div class="clear"></div>
				<div class="middle">
					<span class="imgCont"></span>
					<p>Ti ricordiamo che, <strong>svincolando ora la linea</strong>, gli interessi maturati saranno liquidati
					<strong>ai tassi del  deposito libero</strong> (non a quelli della linea).</p>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
				<div class="bottom"></div>
        		<div class="clear"></div>
			</div>
			<div class="clear"></div>
            <div class="box box6">
                <div class="left">
                    <strong>Data apertura: <span id="dataALV6"></span></strong>
                </div>
                <div class="left">
                    <strong>Data chiusura: <span id="dataSLV6"></span></strong>
                </div>
				<div class="clear"></div>
                <div class="full">
                    <strong>Nome: <span id="descLV6"></span></strong>
                </div>
				<div class="clear"></div>
                <div class="left">
                    <strong>Importo da svincolare: <span id="valoreVincolatoLV6"></span> <span class="valuta"></span></strong>
                </div>
                <div class="left">
                    <strong>Numero: <span id="numLV6"></span></strong>
                </div>
				<div class="clear"></div>
                <div class="full">
                    <strong>Vuoi svincolare solo una parte?</strong> <input class="parteLV" type="text" id="parteLV" />
                </div>
            </div>
            <hr class="lineSep" />
            <a id="annulla6" href="javascript:;" class="btnevid2 left" title="annulla"><img src="/img/ret/btn_left_sm2.gif" alt=""><span >annulla</span><img src="/img/ret/btn_right_sm2.gif" alt=""></a>
            <a id="disponi6" href="javascript:;" class="btnevid1" title="Disponi"><img src="/img/ret/btn_left_sm1.gif" alt=""><span >conferma</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a>
            <div id="disponiW6" class="rightDispW"><img src="/img/ret/ico2inf_loading.gif" alt="">&nbsp;Caricamento in corso</div>
        </div>
        <div class="clear"></div>
        <!--Div per la response delle dispositive in popup  -->
        <div id="confermaResponse6" class="responseDivPopUp">
            <div class="boxtop"><img src="/img/ret/box_msgtop.jpg"  class="border"></div>
            <div class="boxtxt">
                <p class="box_mess">
                    <span class="confirmHead">
                        <img src="/wscmn/img/ico2inf_ok.gif">
                        <span class="ok">OPERAZIONE ESEGUITA CORRETTAMENTE</span>
                    </span>
                    <span class="errorHead">
                        <img src="/img/ret/img_or_alertria.gif" class="dx">
                        <span class="attenzione">ATTENZIONE</span>
                    </span>
                    <br/><strong class="messageResponse">
                    </strong>
                </p>
            </div>
            <br class="clear">
            <div class="boxbottom"><img src="/img/ret/box_msgbottom.jpg" class="border"></div>
        </div>
        <div class="clear"></div>
    </div>
	<div class="foot"></div>
</div>
<!-- /popup conferma elimina linea vincolata -->

<!-- popup conferma nuova linea vincolata -->
<div class="conferma layeralert2" id="lbConferma7" style="display: none;">
	<div class="head handle">
		<img src="/img/ret/layeralert_x.gif" alt="chiudi">
	</div>
	<div class="body corpo">
		<div class="tithelp wt">	
			<div class="helpleft"><h2 class="titTable">IMPOSTA LINEA VINCOLATA</h2></div>
			<br class="clear">
		</div>
        <div class="clear"></div><br />
        <div class="clear"></div>
        <div class="confermaContent" id="confermaContent7">
			Stai per impostare la linea vincolata indicata sotto.<br/>
			
			<ul class="lista">
				<li class="first">L'importo che investi viene prelevato dal tuo <strong>deposito libero</strong>.</li>
				<li class="other">Il giorno lavorativo  successivo alla scadenza della
				linea, l'importo &egrave; <strong>riaccreditato automaticamente sul
				deposito stesso</strong>. Un giorno dopo sono corrisposti i
				relativi interessi.</li>
			</ul>
			
            <div class="box box7">
                <div class="left">
                    <strong>Data di creazione: <span id="dataCreazioneLV"></span><br/>
					Tasso: <span id="tassoLV"></span> &#37;<br/>
					Importo: <span id="valoreVincolatoLV"></span> <span class="valuta"></span></strong><br/>
					<strong id="lblNonSvinc1" style="display:none">Svincolabile: NO</strong>
                </div>
                <div class="left">
                    <strong>Data di scadenza: <span id="dataScadenzaLV"></span><br/>
					Durata: <span id="durataLV"></span>&nbsp;mesi<br/>
					Importo finale: <span id="valoreFinaleLV"></span> <span class="valuta"></span></strong>
                </div>
				<div class="clear"></div>
			</div>
            <div class="box boxDesc">
                <div class="descLVlabel"><strong>Nome linea vincolata</strong><br/>(opzionale)</div>
				<div class="descLVtext"></div>
				<div id="inputX7" class="descLVinput">
					<div class="inputcont Inactive">
						<input type="text" maxlength="20" value="- nessuna descrizione -">
						<a href="javascript:;" title=""></a><br/>
					</div>
				</div>
				<div class="descLVmess">Massimo 20 caratteri</div>
				<div class="clear"></div>
            </div>
			<hr class="lineSep" />
            <a id="annulla7" href="javascript:;" class="btnevid2 left" title="annulla"><img src="/img/ret/btn_left_sm2.gif" alt=""><span >annulla</span><img src="/img/ret/btn_right_sm2.gif" alt=""></a>
            <a id="disponi7" href="javascript:;" class="btnevid1" title="Disponi"><img src="/img/ret/btn_left_sm1.gif" alt=""><span >conferma</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a>
            <div id="disponiW7" class="rightDispW"><img src="/img/ret/ico2inf_loading.gif" alt="">&nbsp;Caricamento in corso</div>
			<div class="clear"></div>
        </div>
        <div class="clear"></div>
        <!--Div per la response delle dispositive in popup  -->
        <div id="confermaResponse7" class="responseDivPopUp">
            <div class="boxtop"><img src="/img/ret/box_msgtop.jpg"  class="border"></div>
            <div class="boxtxt">
                <p class="box_mess">
                    <span class="confirmHead">
                        <img src="/wscmn/img/ico2inf_ok.gif">
                        <span class="ok">OPERAZIONE ESEGUITA CORRETTAMENTE</span>
                    </span>
                    <span class="errorHead">
                        <img src="/img/ret/img_or_alertria.gif" class="dx">
                        <span class="attenzione">ATTENZIONE</span>
                    </span>
                    <br/><strong class="messageResponse"></strong>
                </p>
            </div>
            <br class="clear">
            <div class="boxbottom"><img src="/img/ret/box_msgbottom.jpg" class="border"></div>
        </div>
        <div class="clear"></div>
    </div>
	<div class="foot"></div>
</div>
<!-- /popup conferma nuova linea vincolata -->
<!----- |FINE| LINEE VINCOLATE ----->
	<?php  }
  } // Chiudo if ($permettiDispositive)  ?>

  
	<?php  if ($isWebank) {  ?>
<!----- LINEE VINCOLATE ----->
<!-- popup dettagli linea vincolata -->
<div class="conferma layeralert2" id="lbConferma13" style="display: none;">
	<div class="head handle">
		<img src="/img/ret/layeralert_x.gif" alt="chiudi">
	</div>
	<div class="body corpo">
		<div class="tithelp wt">	
			<div class="helpleft"><h2 class="titTable">DETTAGLI LINEA VINCOLATA</h2></div>
			<br class="clear">
		</div>
        <div class="clear"></div><br />
        <div class="clear"></div>
        <div class="confermaContent" id="confermaContent13">	
            <div class="box box13">
                <div class="left">
                    <strong>Numero</strong>: <span id="numeroLV13"></span><br/>
					<strong>Tasso</strong>: <span id="tassoLV13"></span> &#37;<br/>
					<strong>Data apertura</strong>: <span id="dataAperturaLV13"></span><br/>
					<strong>Importo</strong>: <span id="valoreVincolatoLV13"></span> <span class="valuta"></span><br/>
					<span id="lblNonSvinc2"><strong style="display:none">Svincolabile</strong>: NO</span>
                </div>
                <div class="left">
                    <br/>
					Durata: <span id="durataLV13"></span>&nbsp;mesi<br/>
					<strong>Scadenza: <span id="dataScadenzaLV13"></span><br/>
					Importo finale: <span id="valoreFinaleLV13"></span> <span class="valuta"></span></strong>
                </div>
				<div class="clear"></div>
            </div>
            <div class="box boxDesc">
                <div class="descLVlabel"><strong>Nome linea vincolata</strong><br/>(opzionale)</div>
				<div class="descLVtext"></div>
				<div id="inputX13" class="descLVinput">
					<div class="inputcont Inactive">
						<input type="text" maxlength="20" value="- nessuna descrizione -">
						<a href="javascript:;" title=""></a><br/>
					</div>
				</div>
				<div class="descLVmess">Massimo 20 caratteri</div>
				<div class="clear"></div>
            </div>
            <hr class="lineSep" />
            <a id="annulla13" href="javascript:;" class="btnevid2 left" title="annulla"><img src="/img/ret/btn_left_sm2.gif" alt=""><span >annulla</span><img src="/img/ret/btn_right_sm2.gif" alt=""></a>
            <a id="disponi13" href="javascript:;" class="btnevid1" title="salva"><img src="/img/ret/btn_left_sm1.gif" alt=""><span >salva</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a>
            <div id="disponiW13" class="rightDispW"><img src="/img/ret/ico2inf_loading.gif" alt="">&nbsp;Caricamento in corso</div>
        </div>
        <div class="clear"></div>
        <!--Div per la response delle dispositive in popup  -->
        <div id="confermaResponse13" class="responseDivPopUp">
            <div class="boxtop"><img src="/img/ret/box_msgtop.jpg"  class="border"></div>
            <div class="boxtxt">
                <p class="box_mess">
                    <span class="confirmHead">
                        <img src="/wscmn/img/ico2inf_ok.gif">
                        <span class="ok">OPERAZIONE ESEGUITA CORRETTAMENTE</span>
                    </span>
                    <span class="errorHead">
                        <img src="/img/ret/img_or_alertria.gif" class="dx">
                        <span class="attenzione">ATTENZIONE</span>
                    </span>
                    <br/><strong class="messageResponse">
                    </strong>
                </p>
            </div>
            <br class="clear">
            <div class="boxbottom"><img src="/img/ret/box_msgbottom.jpg" class="border"></div>
        </div>
        <div class="clear"></div>
    </div>
	<div class="foot"></div>
</div>
<!-- /popup dettagli linea vincolata -->
<!----- |FINE| LINEE VINCOLATE ----->
	<?php  } ?>
  
  
<?php  if ($permettiCreaPiano) {  ?>
<!----- REALIZZA DESIDERI ----->
<!-- popup conferma nuovo piano risparmio -->
<div class="conferma creaPiano layeralert2" id="lbConferma8" style="display: none;">
	<div class="head handle">
		<img src="/img/ret/layeralert_x.gif" alt="chiudi">
	</div>
	<div class="body corpo">
		<div class="tithelp wt">	
			<div class="helpleft"><h2 class="titTable">ATTIVAZIONE PIANO DI RISPARMIO</h2></div>
			<br class="clear">
		</div>
        <div class="clear"></div><br />
        <div class="clear"></div>
        <div class="confermaContent" id="confermaContent8">
			Per attivare il tuo piano di risparmio, devi impostare un trasferimento <span id="cpTestoLV">e una linea vincolata</span>.

            <div id="cpConfermaSoglia">
				Stai quindi per disporre una soglia di C/C.<br/>
                <div class="box">
                    <strong>Soglia Massima: <span id="importoMaxCP"></span> <span class="valuta"></span></strong>
                </div>
            </div>
            <div id="cpConfermaTR">
				Stai quindi per disporre un trasferimento periodico da <?php echo $contoLabelLongSingLow ?> a deposito.<br/>
                <div class="box box8">
                    <div class="left">
                        <strong>Importo: <span id="importoTR2"></span> <span class="valuta"></span><br/>
						A partire da: <span id="aPartireDaTR2"></span></strong>
                    </div>
                    <div class="left">
                        <strong>Frequenza: <span id="frequenzaTR2"></span><br/>
						Scadenza: <span id="scadenzaTR2"></span></strong>
                    </div>
                </div>
            </div>
            <div id="cpConfermaLV">
				Stai inoltre per aprire la seguente linea vincolata:

                <div class="box box7 box8">
                    <div class="left">
                        <strong>Data di creazione: <span id="dataCreazioneLV2"></span><br/>
						Tasso: <span id="tassoLV2"></span> &#37;<br/>
						Valore vincolato: <span id="valoreVincolatoLV2"></span> <span class="valuta"></span></strong>			
                    </div>
                    <div class="left">
                        <strong>Data di scadenza: <span id="dataScadenzaLV2"></span><br/>
						Durata: <span id="durataLV2"></span>&nbsp;mesi<br/>
						Valore finale: <span id="valoreFinaleLV2"></span> <span class="valuta"></span></strong>
                    </div>
                </div>
            </div>
			Dai un nome al tuo piano di risparmio: <input class="nomePiano" type="text" id="nomePiano" /><br/>
            <hr class="lineSep" />
            <a id="annulla8" href="javascript:;" class="btnevid2 left" title="annulla"><img src="/img/ret/btn_left_sm2.gif" alt=""><span >annulla</span><img src="/img/ret/btn_right_sm2.gif" alt=""></a>
            <a id="disponi8" href="javascript:;" class="btnevid1" title="Disponi"><img src="/img/ret/btn_left_sm1.gif" alt=""><span >conferma</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a>
            <div id="disponiW8" class="rightDispW"><img src="/img/ret/ico2inf_loading.gif" alt="">&nbsp;Caricamento in corso</div>
        </div>
        <div class="clear"></div>
        <!--Div per la response delle dispositive in popup  -->
        <div id="confermaResponse8" class="responseDivPopUp">
            <div class="boxtop"><img src="/img/ret/box_msgtop.jpg"  class="border"></div>
            <div class="boxtxt">
                <p class="box_mess">
                    <span class="confirmHead">
                        <img src="/wscmn/img/ico2inf_ok.gif">
                        <span class="ok">OPERAZIONE ESEGUITA CORRETTAMENTE</span>
                    </span>
                    <span class="errorHead">
                        <img src="/img/ret/img_or_alertria.gif" class="dx">
                        <span class="attenzione">ATTENZIONE</span>
                    </span>
                    <br/><strong class="messageResponse">
                    </strong>
                </p>
            </div>
            <br class="clear">
            <div class="boxbottom"><img src="/img/ret/box_msgbottom.jpg" class="border"></div>
        </div>
        <div class="clear"></div>
    </div>
	<div class="foot"></div>
</div>
<!-- /popup conferma nuovo piano risparmio -->

<!-- popup conferma accesso agli step crea piano -->
<div class="conferma layeralert2" id="lbConferma11" style="display: none;">
	<div class="head handle">
		<img src="/img/ret/layeralert_x.gif" alt="chiudi">
	</div>
	<div class="body corpo">
		<div class="tithelp wt">	
			<div class="helpleft"><h2 class="titTable">CREAZIONE NUOVO PIANO</h2></div>
			<br class="clear">
		</div>
        <div class="clear"></div>
        <div class="confermaContent" id="confermaContent11">
            <strong>ATTENZIONE</strong><br/>
            <div class="box">
			Creando un nuovo piano di risparmio, verr&agrave; annullato  quello attualmente attivo, <br/>insieme ai trasferimenti e alle eventuali linee vincolate che avevi impostato.

            </div>
            <hr class="lineSep" />
            <a id="annulla11" href="javascript:;" class="btnevid2 left" title="annulla"><img src="/img/ret/btn_left_sm2.gif" alt=""><span >annulla</span><img src="/img/ret/btn_right_sm2.gif" alt=""></a>
            <a id="disponi11" href="javascript:;" class="btnevid1" title="Disponi"><img src="/img/ret/btn_left_sm1.gif" alt=""><span >Crea nuovo piano</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a>
        </div>
        <div class="clear"></div>
    </div>
	<div class="foot"></div>
</div>
<!-- /popup conferma accesso agli step crea piano -->
<!----- |FINE| REALIZZA DESIDERI ----->
<?php  }  ?>

<!----- COORDINATE BANCARIE ----->
<!-- popup stampa coordinate PDF -->
<div class="conferma layeralert2" id="lbConferma9" style="display: none;">
	<div class="head handle">
		<img src="/img/ret/layeralert_x.gif" alt="chiudi">
	</div>
	<div class="body corpo">
		<div class="tithelp wt">	
			<div class="helpleft"><h2 class="titTable">Stampa le tue coordinate bancarie</h2></div>
			<br class="clear">
		</div>
        <div class="clear"></div>
        <div class="confermaContent" id="confermaContent9">
            <div class="box">
				Porta le tue coordinate bancarie sempre con te, stampa un documento PDF <br>con i tuoi dati di <?php echo $contoLabelLongSingLow ?>.
            </div>
            <hr class="lineSep" />
            <a id="annulla9" href="javascript:;" class="btnevid2 left" title="annulla"><img src="/img/ret/btn_left_sm2.gif" alt=""><span >annulla</span><img src="/img/ret/btn_right_sm2.gif" alt=""></a>
            <a id="linkStampaCoordinate" href="javascript:;" class="btnevid1" title="Apri PDF" target="_blank"><img src="/img/ret/btn_left_sm1.gif" alt=""><span >Apri PDF</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a>
        </div>
        <div class="clear"></div>
    </div>
	<div class="foot"></div>
</div>
<!-- /popup stampa coordinate PDF -->

<!-- popup invia coordinate -->
<div class="conferma layeralert2" id="lbConferma10" style="display: none;">
	<div class="head handle">
		<img src="/img/ret/layeralert_x.gif" alt="chiudi">
	</div>
	<div class="body corpo">
		<div class="tithelp wt">	
			<div class="helpleft"><h2 class="titTable">Invia coordinate bancarie</h2></div>
			<br class="clear">
		</div>
        <div class="clear"></div>
        <div class="confermaContent" id="confermaContent10">
			Invia ad un indirizzo email le tue coordinate bancarie<br/><br/>
            <div class="right"><label for="emailDest">Email destinatario</label></div><div class="right"><input type="text" id="ICemail" class="coordinate" name="emailDest" /></div><div class="clear"></div>
            <div class="right"><label for="emailConf">conferma email</label></div><div class="right"><input type="text" id="ICemailConf" class="coordinate" name="emailConf" /></div><div class="clear"></div>
            <div class="right"><label for="messaggio">Messaggio</label></div><div class="right"><textarea type="text" id="ICmessaggio" class="coordinate" name="messaggio" ></textarea></div><div class="clear"></div>
            <hr class="lineSep" />
            <a id="annulla10" href="javascript:;" class="btnevid2 left" title="annulla"><img src="/img/ret/btn_left_sm2.gif" alt=""><span >annulla</span><img src="/img/ret/btn_right_sm2.gif" alt=""></a>
            <a id="linkInviaCoordinate" href="javascript:;" class="btnevid1" title="Manda coordinate"><img src="/img/ret/btn_left_sm1.gif" alt=""><span >Manda coordinate</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a>
        </div>
        <div class="clear"></div>
    </div>
	<div class="foot"></div>
</div>
<!-- /popup invia coordinate -->

<!-- invia email -->
<div  id="homeInvioCoorBank" class="layeralert2" style="display: none;"></div>
<!-- /invia email -->
<!----- |FINE| COORDINATE BANCARIE ----->
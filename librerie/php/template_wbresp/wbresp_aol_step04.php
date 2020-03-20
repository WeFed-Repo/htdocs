<?php
	$aoltype = $_GET["aoltype"];
	$aoldec = $_GET["aoldec"];
	if (empty($aoltype))  $aoltype = "default";
	if (empty($aoldec))  $aoldec = "";

	$introtitle = "Scegli la modalit&agrave; di identificazione";
	$intromessage = "Ai sensi della <strong>normativa antiriciclaggio</strong> (d.lgs 231/07) sei tenuto a compiere alcuni adempimenti e a fornire dichiarazioni e informazioni personali.<br>Ti ricordiamo che il rilascio di false informazioni oppure omissioni pu&ograve; comportare conseguenze anche di natura penale.";
	// Messaggi personalizzati
	switch ($aoltype){
		case "mol":
			$introtitle = "Identificazione";
			$intromessage = "La banca deve verificare l'identit&agrave; delle persone che aprono per la prima volta un Conto Webank.<br>Effettuare la procedeura di identificazione &egrave; semplice e non comporta costi: <strong>verr&agrave; fatta dal notaio il giorno della stipula del mutuo</strong>.";
		break;

		case "contomono":
			$introtitle = "Identificazione";
			$intromessage = "Poich&egrave; hai dichiarato di essere gi&agrave; cliente del gruppo BPM, <strong>non dovrai svolgere nessuna procedura d'identificazione</strong>.";
		break;

		case "contocointestato":
			$introtitle = "Identificazione";
			$intromessage = "Poich&egrave; tutti gli intestatari hanno gi&agrave; dichiarato di essere gi&agrave; clienti del gruppo BPM,  <strong>non dovranno svolgere nessuna procedura d'identificazione</strong>";
		break;
	}
?>
<!-- TITOLO -->
<div class="row">
    <div class="col-xs-12">
        <h2><?print $introtitle; ?></h2>
   	</div>
</div>
<!-- TITOLO -->

<!-- Intro -->
<div class="row">
	 <div class="col-xs-12">
		<p><?print $intromessage; ?></p>
	 </div>
</div>

<!-- Fine intro -->
<form id="aolStep4" action="" method="POST" class="validate">

    <?php if($aoltype == "default" || $aoltype == "misti"|| $aoltype == "fuoriorario") { ?>

        <div class="row">
            <div class="col-xs-12 form-section-title">
                <h4>1. Con quale modalit&agrave; vuoi farti riconoscere?</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">

                <?php
                if ($aoltype == "default" || $aoltype == "fuoriorario") {
                    ?>
                    </p>Per completare la tua richiesta di apertura rapporti dovrai identificarti, scegliendo <strong>tra una delle seguenti alternative</strong>:</p>
                    <?php
                }
                else {
                    ?>
                    <p>
                        <strong>MARIO ROSSI</strong><br>
                        <strong>PAOLO ROSSI</strong><br>
                        Avete dichiarato di essere <strong>gi&agrave; clienti</strong> del gruppo BPM, quindi non dovrete procedere all'identificazione.
                    </p>
                    <p>
                        <strong>FEDERICO ROSSI</strong><br>
                        Per completare la richiesta di apertura conto dovrai <strong>identificarti</strong> recandoti presso una <strong>qualsiasi agenzia BPM</strong> o effettuando un <strong>bonifico bancario</strong>.
                    </p>
                    <?php
                }
                ?>
            </div>
        </div>

        <!-- Pannelli per identificazione A DISTANZA -->
        <div class="row">
            <div class="col-xs-12">
                <h4>A distanza</h4>
            </div>
        </div>

    <?php
    if ($aoltype == "default") {
    ?>
        <!-- Identificazione tramite WEBCAM -->
        <div class="row">
            <div class="col-xs-12">

                <div class="fieldwrapped">
                    <div class="radio radio-inline radio-evident">
                        <input type="radio" name="identificazione" val="1" id="dist_webcam"/>
                        <label for="dist_webcam" class="labelTooltip">Certificato firma digitale (Webcam)<span class="infoicon" data-toggle="tooltip" title="Lorem ipsum dolor sit amet."></span></label>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <p><strong>Attivazione del servizio di firma digitale</strong> contestualmente all'apertura dei rapporti.<br>
                                Sono previsti <strong>XX giorni</strong> per la durata del procedimento.</p>
                        </div>
                    </div>
                    <hr>
                    <!-- BOX ALERT -->
                    <div class="boxalert">
                        <div class="boxcont">
                            <p><strong>Servizio garantito nelle seguenti fasce orarie:<br>
                                    LUN-VEN 08:00 - 22:00<br>
                                    SAB, DOM, FES 09:00 - 20:00</strong>
                            </p>
                        </div>
                    </div>
                    <!-- FINE BOX ALERT -->
                    <hr>
                    <!-- Bottoni/radio -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="radio-btnstyle-wrap">
                                <div class="radio radio-inline radio-btnstyle"><input type="radio" name="haconto" value="si" disabled id="haconto_si"><label for="haconto_si">Hai gi&agrave; un conto?</label></div>
                                <div class="radio-btnstyle-cont">
                                    <p><strong>Avrai bisogno di</strong>:</p>
                                    <ul>
                                        <li>Webcam e sistema audio/video</li>
                                        <li>IBAN di un conto corrente a te intestato</li>
                                        <li>Documento d'identità indicato in precedenza</li>
                                        <li>Codice fiscale</li>
                                        <li>Sistema operativo windows</li>
                                        <li>Browser Chrome, Firefox, Explorer e Opera nelle versioni pi&ugrave; recenti</li>
                                        <li>Foglio e penna</li>
                                        <li>Cellulare "in carica"</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="radio-btnstyle-wrap">
                                <div class="radio radio-inline radio-btnstyle"><input type="radio" name="haconto" value="no" disabled id="haconto_no"><label for="haconto_no">Non hai un conto?</label></div>
                                <div class="radio-btnstyle-cont">
                                    <p><strong>Avrai bisogno di</strong>:</p>
                                    <ul>
                                        <li>Webcam e sistema audio/video</li>
                                        <li>Documento d'identità indicato in precedenza
                                        <li>Un secondo documento d'identit&agrave; diverso da quello indicato per primo</li>
                                        <li>Codice fiscale</li>
                                        <li>Sistema operativo windows</li>
                                        <li>Browser Chrome, Firefox, Explorer e Opera nelle versioni più recenti</li>
                                        <li>Foglio e penna</li>
                                        <li>Cellulare "in carica"</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fine Bottoni/radio -->
                </div>

            </div>
        </div>

        <!-- Fine identificazione tramite WEBCAM -->

    <?php
    } elseif ($aoltype == "fuoriorario") {
    ?>


        <?php if ($aoldec == "fomessage") { ?>
        <!-- EMULAZIONE MESSAGGIO FUORI ORARIO ONLOAD-->
        <script type="text/javascript">
            // Inserire
            $(function(){
                var foMsg = $("<div>").addClass("boxalert attenzione").append($("<div>").addClass("boxcont").html(
                    "<p>Il servizio &egrave; garantito solo nelle seguenti fasce orarie.<br><strong>LUN-VEN 08:00 - 22:00<br>SAB, DOM, FES 09:00 - 20:00</strong></p>"
                ));
                loadModal(foMsg,"Attenzione!");
            });
        </script>
        <!-- FINE EMULAZIONE MESSAGGIO FUORI ORARIO ONLOAD -->
        <?php
        }
        ?>

        <!-- Identificazione tramite WEBCAM FUORI ORARIO -->

        <div class="row">
            <div class="col-xs-12">

                <div class="fieldwrapped">
                    <div class="radio radio-inline radio-evident">
                        <input type="radio" name="identificazione" val="1" id="dist_webcam" disabled/>
                        <label for="dist_webcam">Certificato firma digitale (Webcam)</label>
                    </div>
                    <!-- BOX ALERT -->
                    <div class="boxalert">
                        <div class="boxcont">
                            <p><strong>Attenzione!<br></strong>
                                Il servizio &egrave; attivo nelle seguenti fasce orarie.<br>
                                <strong>LUN-VEN 08:00 - 22:00<br>
                                    SAB, DOM, FES 09:00 - 20:00</strong>
                            </p>
                        </div>
                    </div>
                    <!-- Fine Bottoni/radio -->
                </div>
            </div>
        </div>
        <!-- Fine identificazione tramite WEBCAM FUORI ORARIO -->

    <?php
    }
    ?>

        <!-- Identificazione tramite BONIFICO -->
        <div class="row">
            <div class="col-xs-12">

                <div class="fieldwrapped">
                    <div class="radio radio-inline radio-evident">
                        <input type="radio" name="identificazione" val="2" id="dist_bonifico"/>
                        <label for="dist_bonifico">Bonifico</label>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <p>Senza attivazione immediata del servizio di firma digitale.<br>
                                Sono previsti <strong>XX giorni</strong> per la durata del procedimento.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xs-12">
                            <p><strong>Avrai bisogno di</strong>:</p>
                            <ul>
                                <li>IBAN di un conto corrente a te intestato</li>
                                <li>Due documenti d'identit&agrave;</li>
                                <li>Codice fiscale</li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- Fine identificazione tramite BONIFICO -->

        <!-- Fine pannelli per identificazione A DISTANZA -->

        <!-- Pannelli per identificazione DI PERSONA -->
        <div class="row">
            <div class="col-xs-12">
                <h4>Di persona</h4>
            </div>
        </div>
        <!-- Identificazione IN AGENZIA -->
        <div class="row">
            <div class="col-xs-12">
                <div class="fieldwrapped">
                    <div class="radio radio-inline radio-evident">
                        <input type="radio" name="identificazione" val="3" id="dist_agenzia"/>
                        <label for="dist_agenzia">In agenzia</label>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <p><strong>Senza attivazione immediata</strong> del servizio di firma digitale.<br>
                                Sono previsti <strong>XX giorni</strong> per la durata del procedimento.</p>
                            <p>Vuoi sapere qual'&egrave; l'<strong>agenzia BPM pi&ugrave; vicina</strong>? <a href="#" target="_blank">Clicca qui</a>.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xs-12">
                            <p><strong>Avrai bisogno di</strong>:</p>
                            <ul>
                                <li>Documento d'identit&agrave; indicato in precedenza</li>
                                <li>Codice fiscale</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- Fine identificazione IN AGENZIA -->

        <!-- Fine pannelli per identificazione DI PERSONA -->
        <?php
    }
    ?>
    <!-- Pulsanti -->
    <div class="row">
        <div class="col-xs-12">
            <div class="btn-console">
                <a class="btn-whlit btn-whlit-arrowleft fleft uppercase">INDIETRO</a>
                <button type="submit" class="btn-grlit btn-grlit-arrow fright uppercase inlineB">SALVA E PROSEGUI</button>
            </div>
        </div>
    </div>
    <!-- Fine pulsanti -->

</form>

<!-- Overlay seleziona una modalità di riconoscimento -->
<div class="modal fade" id="overlaySelezionaModo" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modalit&agrave; di riconoscimento</h4>
            </div>
            <div class="modal-body">
                Seleziona con quale modalit&agrave; vuoi farti riconoscere.
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<!-- Overlay verifica email completata - fine -->

<!-- SCRIPT -->
<script type="text/javascript" src="/wbresp/js/aol/step4.js"></script>

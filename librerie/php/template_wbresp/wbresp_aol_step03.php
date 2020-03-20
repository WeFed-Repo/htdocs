<!-- TITOLO -->
<div class="row">
    <div class="col-md-12">
        <h2>Personalizzazione conto</h2>
    </div>
</div>
<!-- TITOLO -->
<!-- Elenco features -->
<div class="row">
    <div class="col-md-12">
        <p>Il tuo conto Webank comprende:</p>
        <ul class="spunte">
            <li>
                <span class="spuntato">CONTO CORRENTE E DEPOSITO DI RISPARMIO</span>
                <p>Zero canone e zero commissioni. Ottieni un rendimento pi&ugrave; alto sui tuoi risparmi con le nuove linee vincolate a 3, 6 e 12 mesi.</p>
            </li>
            <li>
                <span class="spuntato">CARTA DI DEBITO</span>
                <p>E' gratuito e lo puoi utilizzare ovunque senza canone per effettuare pagamenti e prelevare gratis in tutta l'area Euro. In qualunque momento puoi modificare online il massimale per soddisfare anche le tue spese pi&ugrave; elevate.</p>
            </li>
            <li>
                <span class="spuntato">SERVIZIO PRELIEVO CARDLESS</span>
                <p>Grazie al servizio prelievo cardless puoi effettuare i tuoi prelievi presso un bancomat BPM, fino ad un massimo di 450 euro al mese, anche senza avere con te la carta.</p>
            </li>
            <li>
                <span class="spuntato">SERVIZIO P2P</span>
                <p>Il serizio che ti consente di trasferire denaro ad un'altra persona utilizzando lo smartphone.</ul>
        </li>
        </ul>
    </div>
</div>
<!-- Fine elenco features -->
<hr>
<!-- Strong authentication -->
<form id="aolStep3" action="" method="POST" class="validate">
    <div class="row">
        <div class="col-sm-12 form-section-title">
            <h4>1. Richiedi lo strumento di strong authentication*</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <p>
                Potra utilizzare l'App certificata per predisporre tutte le dispositive in maggiore sicurezza con un solo tap oppure il token fisico.
                <br> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
            <label>Scegli il dispositivo per la strong authentication*</label>
            <p>Potrai cambiare il dispositivo scelto una volta aperto il conto</p>
            <script type="text/javascript">
            // Controllo per apertura/chiusura elementi inline
            $(function() {

                var dtRCont = $("#dispoTokenRicezione");
                $("input[name=strongdispo]").on("change click", function() {

                    if ($(this).attr("id") == "strongdispo2") dtRCont.show();
                    else dtRCont.hide();

                });
                var radioSd = $("#strongdispo2")
                if (radioSd.is(":checked")) radioSd.trigger("click");

            })
            </script>
            <div class="imageradio">
                <div class="row">
                    <div class="hidden-xs col-sm-2">
                        <img src="/wbresp/img/strong_smartphone.png">
                    </div>
                    <div class="col-xs-12 col-sm-10">
                        <div class="radio radio-inline">
                            <input type="radio" name="strongdispo" id="strongdispo1" value="1" checked>
                            <label for="strongdispo1" class="labelTooltip"><strong>App certificata (consigliato)</strong></label>
                            <span class="infoicon" data-toggle="tooltip" title="Lorem ipsum dolor sit amet."></span>
                        </div>
                        <p>Segliendo l'APP effettuerai la <a class="text-tooltip" href="javascript:;" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas ducimus aperiam quos, laborum doloremque sed enim. Laudantium laborum perferendis, quos.">strong Authetication</a> direttamente sul tuo smartphone. Dovrai scaricare l'App WB e procedere nella fase di attivazione seguendo le istruzioni. </p>
                    </div>
                </div>
                <div class="row">
                    <div class="hidden-xs col-sm-2">
                        <img src="/wbresp/img/strong_token.png">
                    </div>
                    <div class="col-xs-12 col-sm-10">
                        <div class="radio radio-inline">
                            <input type="radio" name="strongdispo" id="strongdispo2" value="2">
                            <label for="strongdispo2" class="labelTooltip"><strong>Token</strong></label>
                            <span class="infoicon" data-toggle="tooltip" title="Lorem ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet."></span>
                        </div>
                        <p>Scegliendo il Token effettuerai la strong Authetication con il dispositivo Token. Potrai scegliere se ricevere il Token direttamente a casa o ritirarlo presso un'agenzia del gruppo BPM.</p>
                        <div id="dispoTokenRicezione" style="display:none">
                            <hr>
                            <p>Scegli come ricevere il token*:</p>
                            <div class="radio radio-inline">
                                <input type="radio" name="strongtokencons" id="strongtokencons1" value="1">
                                <label for="strongdispo2"><strong>Spedizione a casa</strong>
                                    <br> all'indirizzo di residenza se non hai indicato quello di corrispondenza
                                </label>
                            </div>
                            <div class="radio radio-inline">
                                <input type="radio" name="strongtokencons" id="strongtokencons2" value="2">
                                <label for="strongdispo2"><strong>Ritiro presso un'agenzia del gruppo BPM</strong>
                                    <br>
                                    <a href="#">Clicca qui</a> per cercare l'agenzia pi&ugrave; vicina
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Strong authentication -->
    <hr>
    <!-- Prenotazione deposito -->
    <div class="row">
        <div class="col-sm-12 form-section-title">
            <h4>2. Prenota il deposito titoli e servizi di investimento (facoltativo)</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="checkbox check-inline">
                <input type="checkbox" name="strongdeposito" id="strongdeposito" value="1">
                <label for="strongdeposito">Deposito titoli e servizi di investimento</label>
            </div>
            <p>
                Ti permette di fare operazioni di trading e di investire in fondi e Sicav.
                <br> Riceverai online le contabili.
                <br> Potrai sempre richiedere l'invio cartaceo delle contabili facendone richiesta tramite il tuo online banking.
                <br> Potrai richiedere il deposito titoli anche in seguito all'apertura del conto.
                <br>
            </p>
        </div>
    </div>
    <!-- Fine prenotazione deposito -->
    <div class="spacer-no-border">&nbsp;</div>
    <!-- Footnotes -->
    <div class="row">
        <div class="col-sm-12">
            <p class="note">(*) I campi contrassegnati con l'asterisco sono obbligatori</p>
        </div>
    </div>
    <!-- Footnotes -->
    <hr>
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

<!-- SCRIPT -->
<script type="text/javascript" src="/wbresp/js/aol/step3.js"></script>
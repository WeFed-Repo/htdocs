
<h2>Pagamento</h2>

<div class="navContFirstLev outerTab">
    <div class="innerTab">
        <ul class="tabmedium">
            <li class="on"><a href="#">F24</a></li>
            <li><a href="#">F23</a></li>
        </ul>
    </div>
    <div class="separator"></div>
    <div class="panel-nofill">

    <section>
       <ul>
            <li>Puoi prenotare, gratuitamente, il pagamento della delega F24 selezionando il conto corrente di addebito. Effettueremo il pagamento nel giorno da te indicato.</li>
            <li>Puoi iniziare a inserire i pagamenti F24 già da 25 giorni prima la data di scadenza del pagamento e fino al giorno stesso.</li>
            <li>Tieni sotto controllo i tuoi pagamenti: attiva il servizio di Alert Sms.</li>
        </ul>
    </section>

    <section>
            <div class="tithelp">
                <h4>Seleziona dati</h4>
                <div class="flRight"><a href="#1" data-toggle="modal" data-target="#layerGuida" class="no-underline btn-icon"><i class="icon icon-info_fill icon-2x"></i></a><br class="clear"></div>
                <br class="clear">
            </div>

            <form class="formGenerico borderFormRounded" role="form" id="form06">           
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6 ">
                            <label class="control-label">Conto di addebito</label> <span class="output" id="IbanId_ord"> IT79A0558401799000000081080</span>
                        </div>
                        <div class="col-sm-6 ">
                            <label class="control-label">Contribuente</label> <span class="output" id="IbanId_ord"> FONSO ROBERTO</span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6 ">
                            <label class="control-label">Tipologia delega</label> 
                            <select class="form-control" name="nazioneBonifico">
                                <option value="">F24</option>                            
                            </select>
                        </div>                   
                    </div>
                </div>



            </form>
            <div class="btnWrapper">
                <div class="btn-align-right">
                    <a type="button" class="btn btn-primary" id="conferma"  href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_f24.php&responsive=y&liv0=1&liv1=1&liv2=7&liv3=0">conferma</a>
                </div>
                <br class="clear">
            </div>
    </section>

    <section class="boxesitoWrap">
        <div class="boxesito attenzione">
            <i class="icon icon-alert_caution icon-2x"></i>
            <div class="text">
                <div class="row">
                    <div class="col-sm-12 tithelp">
                        <p>La quietanza è in un nuovo formato elettronico, valido dal punto di vista legale e opponibile a terzi (<span class="control-label txthelp" data-toggle="tooltip" data-original-title="<img alt='' src='/wscmn/img/img_str_responsive2.jpg' class='img-responsive'>">esempio</span>), come previsto dall'Agenzia delle Entrate.<br><br>La quietanza cartacea non sarà più inviata a mezzo posta.</p>
                    </div>                
                </div>
            </div>
        </div>
    </section>
    </div>
</div>    



<!--OVERLAYER GUIDA -->
<div class="modal fade" id="layerGuida" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header"> <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="myModalLabel">Guida</h2> </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                         <!-- accordion guida -->
                        <div class="panel-group" id="accordionGuida" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                  <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordionGuida" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      I MODELLI F24<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                    <strong>F24 ORDINARIO</strong><br>
                                    <strong>Il modello F24 ordinario</strong> è utilizzato da tutti i contribuenti, titolari e non titolari di partita Iva, per il versamento di <strong>tributi, contributi e premi</strong> come:
                                    <ul>
                                        <li>imposte sui redditi e ritenute alla fonte</li>
                                        <li>Imu, Iva, Irap</li>
                                        <li>addizionale regionale o comunale all'Irpef</li>
                                        <li>contributi e premi Inps, Inail, Inpgi</li>
                                        <li>interessi in caso di pagamento rateale.</li>
                                    </ul>    

                                    Va utilizzato inoltre per pagare tutte le somme dovute (compresi interessi e sanzioni) in caso di:
                                    <ul>
                                        <li>liquidazione e controllo formale della dichiarazione/li>
                                        <li>avviso di accertamento, di irrogazione sanzioni, di accertamento con adesione (concordato)</li>
                                        <li>conciliazione giudiziale</li>
                                        <li>ravvedimento.</li>
                                    </ul> 

                                    <strong>F24 SEMPLIFICATO</strong><br>
                                    E' un nuovo  <strong>modello di pagamento unificato</strong>, pensato per agevolare i contribuenti che devono effettuare versamenti a favore dell'Erario, delle Regioni e degli Enti locali (come ad esempio l'Imu).
                                    <br><br>
                                    <strong>F24 ACCISE</strong><br>
                                    Questo modello contiene una sezione da utilizzare per il <strong>versamento delle accise </strong>, dei tributi dei Monopoli e di altre somme non ammesse a compensazione. L'accisa è un'imposta sulla fabbricazione e vendita di prodotti di consumo (per esempio, benzina).
                                    <br><br>
                                    <strong>F24 ELEMENTI IDENTIFICATIVI</strong><br>
                                    Noto anche come <strong>"F24 IVA immatricolazione auto UE"</strong>, è utilizzato dai  <strong>rivenditori di autoveicoli</strong> di provenienza comunitaria. Va compilato anche per versamenti per i quali sono necessarie informazioni non riportabili nel modello F24 ordinario.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                  <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionGuida" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      IL MODELLO F23<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        Il <strong>modello F23</strong> è utilizzato per il versamento di <strong>imposte, tasse e sanzioni</strong>. In particolare per:
                                    <ul>
                                        <li>imposte di registro, ipotecarie e catastali (per esempio, compravendita d'immobili)</li>
                                        <li>imposte sulle successioni e donazioni</li>
                                        <li>sanzioni inflitte da autorità giudiziarie e amministrative (per esempio, diritti di cancelleria e segreteria giudiziaria, multe e contravvenzioni, ecc.)</li>
                                        <li>tasse erariali e demaniali (per esempio, concessioni dei beni del demanio marittimo, militare, ecc.).</li>
                                    </ul> 

                                    </div>
                                </div>
                            </div>
                            
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading3">
                                  <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionGuida" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                      INSERIMENTO E TEMPISTICHE<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                    <div class="panel-body">
                                    <ul>
                                        <li>La prenotazione del pagamento F24 e F23 può essere inserita già da 25 giorni prima la data di scadenza del pagamento e fino al giorno stesso.</li>
                                        <li>Per le prenotazioni inserite anticipatamente, la data valuta della delega è la stessa della data di scadenza.</li>
                                        <li>Possono essere annullate le disposizioni che si trovano nello stato "prenotato".</li>
                                    </ul> 
                                    </div>
                                </div>
                            </div>
                            
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading4">
                                  <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionGuida" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                      QUIETANZA E RICEVUTA DI PAGAMENTO<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                                    <div class="panel-body">
                                        Puoi verificare il buon esito della prenotazione di pagamento dalla pagina "esito disposizioni".<br><br>
                                        Una volta effettuato il pagamento, la disposizione passa allo stato "eseguito" o "eseguito SBF". Sul sito, puoi trovare la ricevuta di pagamento:
                                        <ul>
                                            <li>deleghe F24: nell'area "ricerca quietanza F24" puoi trovare, entro 4 giorni lavorativi dalla data di pagamento, la quietanza in formato pdf, valida ai fini fiscali,</li>
                                            <li>deleghe F23: le ricevute di pagamento sono disponibili entro 3 giorni lavorativi dalla data di pagamento, all'interno dell'area "esito disposizioni".</li>
                                        </ul>
                                        Ti ricordiamo che la quietanza o ricevuta di pagamento cartacea non sarà più inviata a mezzo posta. Puoi stampare oppure salvare sul tuo pc tutte le tue ricevute di pagamento.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading5">
                                  <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionGuida" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                      NOTE PER LA COMPILAZIONE<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                                    <div class="panel-body">
                                        Se modifichi i dati anagrafici del contribuente, se è nato all'estero, all'interno del campo "Provincia" seleziona la voce "EE".<br><br>
                                        Nella compilazione del modello <strong>F24 Accise</strong> se devi inserire "codice ufficio" e "codice atto" sia nella sezione "Erario" che nella sezione "Accise/monopoli e altri versamenti non ammessi a compensazione", dovrai compilare <strong>2 modelli distinti</strong>.<br><br>
                                        Per essere aggiornato sulle scadenze, consulta lo scadenziario fiscale sul sito dell'Agenzia delle Entrate.
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





<!--funzione solo esemplificativa per mostrare ocome visualizzare overlayer-->
<script type="text/javascript">
 $('#selectOperatore').bind('change', function(){
   if($(this).val()!='Vodafone'){
        $('#selectOperatoriLayer').modal('show');
    }
 })


 $("#conferma").on("click" , function(){
    $("#parteDue").show();
    $("span").removeClass("editable-clear-x");
    $("i").removeClass("icon icon-close icon-1x");
 });
</script>
<div class="modal fade" id="selectOperatoriLayer" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header"> <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a></div>
            <div class="modal-body"> 
                <strong>ATTENZIONE</strong>
                <p>
                    Se selezioni questo operatore puoi attivare soltanto gli Sms del Programma Sicurezza, non tutti gli altri del servizio Alert SMS.
                </p>
               <div class="testoIcona emphasis">
                <i class="icon icon-2x icon-arrow_emphasis flLeft"></i>
                    <div class="leftTesto">
                       <p>Se vorrai usufruire di Alert SMS aggiuntivi dovrai certificare un cellulare con uno dei seguenti operatori:</p> 
                       <ul>
                            <li>Wind</li>
                            <li>Vodafone</li>
                            <li>Tre</li>
                            <li>Tim</li>
                            <li>Poste Mobile</li>
                            <li>Coop Voce</li>
                       </ul>       
                    </div>  
                </div>
            </div>
            <div class="modal-footer">
                <div class="form-group">
                    <div class="btn-align-right">
                        <a type="button" class="btn btn-primary btn-minw" id="" data-dismiss="modal">Ok</a>
                    </div>
                    <br class="clear"> </div>
            </div>
        </div>
    </div>
</div>

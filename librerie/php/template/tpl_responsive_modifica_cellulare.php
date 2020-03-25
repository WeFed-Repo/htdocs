
<h2>Cellulare</h2>

<section>
    <p>L'inserimento del numero di cellulare &egrave; obbligatorio e ti permette automaticamente di aderire all'iniziativa gratuita <a href="#" onclick="javascript:window.open('connect.php?page=template/tpl_responsive_popup.php','main','width=450,height=445,top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=yes')">Programma Sicurezza</a> per ricevere gli 
    <span class="txthelp" data-title="Nelle disposizioni online sono compresi:<ul><li>bonifici</li><li>ricarica carte prepagate</li><li>ricariche cellulari</li><li>modifica massimali bancomat</li><li>attiva utilizzo bancomat all'estero</li><li>ricarica ATM</li><li>Bollo auto</li></ul>" data-toggle="tooltip">Alert SMS sulle disposizioni on line tipo 1.</span> </p>
    <p>In questa pagina puoi modificare il numero di cellulare e il gestore telefonico che hai inserito in precedenza.</p>
</section>

<section>
    <h3>Come procedere</h3>
    <p>l tuo numero di cellulare certificato attuale è: 339*****87</p>
    <ul>
        <li>Se cambi soltanto il gestore telefonico, ti sarà richiesta la password di II livello.</li>
        <li>Se invece devi inserire un nuovo numero telefonico, occorre certificarlo inserendo i codici che riceverai via SMS:
            <ol>
                <li>un <strong>codice di autenticazione</strong> al numero di cellulare che &egrave; attualmente certificato.</li>
                <li>un <strong>codice di controllo</strong> al tuo nuovo numero di cellulare.</li>
            </ol>
        </li>
    </ul>
    <p><strong>Devi inserirli entrambi per certificare il nuovo numero:</strong> tieni dunque sotto controllo e accesi tutti e due i cellulari</p>
</section>

<section>
       
        <form class="formGenerico borderFormRounded form-bottom" role="form" id="form06" novalidate="novalidate">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <label class="control-label txthelp" data-toggle="tooltip" data-title="lorem ipsum dolor sit">Numero di cellulare:</label>
                    <div class="requiredField">
                        <div class="row">
                            <div class="col-xs-4 pad_right_0">
                                <div class="form-group">
                                    <input  id="pref_inter" name="pref_inter" type="tel" maxlength="5" class="form-control numPref" value="0039" data-toggle="tooltip" data-title="lorem ipsum dolor sit">
                                </div>
                            </div>
                             <div class="col-xs-offset-4">
                                <div class="form-group">
                                    <input  id="numeroTel" name="numeroTel" type="tel" maxlength="10" class="form-control clear-x" data-toggle="tooltip" data-title="lorem ipsum dolor sit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    $.mask.definitions['Z'] = "[0]";
                    $.mask.definitions['N'] = "[0-9]";
                    $('#pref_inter').mask("ZZNN?N",{placeholder:""});
                    $('#numeroTel').mask('NNNNNNNNNN',{placeholder:""});
                </script>

                <div class="col-xs-12 col-sm-6">
                    <div class="form-group">
                        <div class="requiredField">
                            <label class="control-label">Operatore:</label>
                            <select class="form-control" id="selectOperatore">
                                <option>--Seleziona operatore--</option>
                                <option>Vodafone</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="parteDue" style="display:none">
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group">
                        <div class="requiredField">
                            <label class="control-label">Autenticazione (inviato sul vecchio numero):</label>
                            <input type="text" class="form-control clear-x">
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group">
                        <div class="requiredField">
                            <label class="control-label">Codice di controllo (inviato sul nuovo numero):</label>
                            <input type="text" class="form-control ">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <script type="text/javascript">
            // Funzione esempio di test su "conferma"
            firsterr = false;
            testForm =function () {
                if(!firsterr){
                    setHasError('#numeroTel','Messaggio errore generalizzato'); 
                    firsterr = true;
                } else {
                    $('#autenticazione,#codice').show();$('#numeroCell,#selectOperatore').attr('disabled','disabled');
                }
            }
        </script>
        <div class="btnWrapper">
            <div class="btn-align-right">
                <a type="button" class="btn btn-primary" id="conferma" onclick="testForm()">conferma</a>
            </div>
            <br class="clear">
        </div>
</section>

   <hr/>

<section>
    <p class="note">Il numero non sar&agrave; utilizzato a scopi promozionali, ma soltanto per il Programma Sicurezza.<br>
    I dati inseriti saranno immessi nella banca dati elettronica dell'azienda nel rispetto del D. Lgs 30 giugno 2003 n.196 &quot;Codice in materia di protezione dei dati personali&quot;</p>
</section>

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

<?php
$mono = (isset($_GET['mono']) && $_GET['mono'] == "true");
$numInt = $mono? 1 : 3;
?>
<script type="text/javascript">mono = "<?php print $mono; ?>";</script>
<div class="row">
    <div class="col-md-12">
        <h2>Apri un conto in Webank</h2></div>
</div>
<div class="row">
    <div class="col-md-12">
        <p>
            Conferma ora il tuo <strong>numero di cellulare</strong> e
            <strong>l'indirizzo email</strong>.
            <br> In questo modo potrai ricevere <strong>pi&ugrave; velocemente</strong> via sms e email i codici di <strong>accesso al tuo nuovo conto</strong>, senza aspettare i tempi della spedizione postale. In alternativa, ti invieremo i codici di accesso per posta.
        </p>
        <p>
            <strong>Webank tutela la tua sicurezza:</strong> per questo motivo
            <strong>&egrave; necessario indicare e confermare dei recapiti
        	che appartengono solo a te</strong>.
            <br> Se non vuoi farlo ora, <strong>dovrai farlo necessariamente
        	al primo accesso al conto</strong>. Assicurati d'avere a disposizione il cellulare e l'email: ti invieremo un <strong>codice di controllo</strong> per confermare i tuoi dati.
        </p>
    </div>
</div>

<!-- BOX ALERT -->
<div class="boxalert">
    <div class="boxcont">
        <p>Ti ricordiamo che per usufruire dei servizi di
            <strong>Firma Digitale Remota</strong> sar&agrave; obbligatorio certificare i propri recapiti email e cellulare.
        </p>
    </div>
</div>
<!-- FINE BOX ALERT -->

<hr>

<div class="row">
    <div class="col-sm-12 form-section-title">
        3. Tecniche di comunicazione a distanza
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <p>
            L'<strong>operativit&agrave; a distanza</strong> caratterizza tutti i servizi offerti da Webank.
            <br> Per poter comunicare con te per <strong>email</strong> o per
            <strong>telefono</strong> necessitiamo del tuo <strong>consenso</strong>.
            <br> In caso contrario, saremo impossibilitati a procedere all'apertura del conto.
            <br>
            <br> Con il tuo consenso, inoltre, dichiari e garantisci che il tuo computer (o altro sistema informatico) permette la stampa, il salvataggio in formato elettronico (supporto durevole) per il reucupero della copia integrale e conforme di tutti i documenti inviati o messi a disposizione da Werbank per tutta la durata dei rapporti.
        </p>
    </div>
</div>

<form id="formConsenso" action="">
    <div class="row">
        <div class="col-sm-6 form-group">
            <div class="radio radio-inline">
                <input type="radio" name="consDoc" id="acconsento1a" value="si">
                <label for="acconsento1a">Acconsento</label>
            </div>
        </div>
        <div class="col-sm-6 form-group">
            <div class="radio radio-inline">
                <input type="radio" name="consDoc" id="acconsento1b" value="no" >
                <label for="acconsento1b">Non acconsento</label>
            </div>
        </div>
    </div>
</form>

<div class="spacer-no-border hidden-xs">&nbsp;</div>

<?php if (!$mono): ?>
<!-- INTESTAZIONE GRUPPO ACCORDION -->
<div class="panel-group accordion-group" id="accordion" role="tablist" aria-multiselectable="true">
<!-- FINE - INTESTAZIONE GRUPPO ACCORDION -->
<?php endif; ?>

<?php for ($i = 1; $i <= $numInt; ++$i): ?>

    <?php if (!$mono): ?>
    <!-- INTESTAZIONE ACCORDION -->
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading_int<?php echo $i; ?>">
            <h4 class="panel-title">
                <a href="#!" class="collapsed" role="button" data-toggle="collapse" data-target="#collapse_int<?php echo $i; ?>" aria-expanded="false" aria-controls="collapse_int<?php echo $i; ?>">
                    Verifica email e cellulare MARIO ROSSI
                </a>
            </h4>
            <p>
                Verifica indirizzo email e cellulare del primo intestatario
            </p>
        </div>
        <div id="collapse_int<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_int<?php echo $i; ?>">
            <div id="panel_int<?php echo $i; ?>" class="panel-body">
    <!-- FINE - INTESTAZIONE ACCORDION -->
    <?php endif; ?>

                <div id="boxVerCell_int<?php echo $i; ?>" class="boxVer">
                    <h4>Verifica numero di cellulare</h4>
                    <p>
                        <strong>1</strong>. Richiedi l'<strong>invio del codice
                        di controllo</strong> (OTP) sul tuo numero di cellulare. Se il numero o l'operatore non corrispondono modificali cliccando sull'icona.
                    </p>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label class="labelIco">Intestatario</label>
                            <span class="output">Mario Rossi</span>
                        </div>
                    </div>
                    <div class="spacer-no-border hidden-xs">&nbsp;</div>
                    <div id="outputCell_int<?php echo $i; ?>" class="row">
                        <div class="col-sm-6 form-group">
                            <label class="labelIco">Numero di cellulare</label>
                            <a href="#!" class="icomod modCell" title="Modifica"></a>
                            <span class="output">0039 123456789</span>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label class="labelIco">Operatore</label>
                            <a href="#!" class="icomod modCell" title="Modifica"></a>
                            <span class="output">Operatore 1</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <?php if (!$mono): ?>
                            <button type="button" class="btn-whlit btn-whlit-arrowleft fleft uppercase completaDopoCell">COMPLETA PI&Ugrave; TARDI</button>
                            <?php endif; ?>&nbsp;
                        </div>
                        <div class="col-sm-6">
                            <button type="button" class="btn-grlit btn-grlit-arrow fright uppercase inlineB sendOtp">INVIA CODICE OTP VIA SMS</button>
                        </div>
                    </div>
                    <div class="spacer-no-border hidden-xs">&nbsp;</div>
                    <p>
                        <strong>2</strong>. Verifica il tuo numero di cellulare <strong>inserendo
                        il codice di controllo</strong> (OTP) che ti abbiamo inviato per SMS.
                    </p>
                    <form id="formVerificaOTPCell_int<?php echo $i; ?>" action="">
                        <div class="row">
                            <div class="col-sm-6 from-group otpenabled">
                                <label for="otpCell_int<?php echo $i; ?>">Codice OTP</label>
                                <input type="text" id="otpCell_int<?php echo $i; ?>" name="otpCell_int<?php echo $i; ?>" class="textinput form-control" placeholder="Inserisci codice OTP">
                                <div class="nota"><a href="#!" id="lnkRecuperaOtpCell_int<?php echo $i; ?>">Rinvia codice OTP</a></div>
                            </div>
                            <div class="col-sm-6">
                                <button type="button" id="btnVerificaOtpCell_int<?php echo $i; ?>" class="btn-grlit btn-grlit-arrow fright uppercase disabled inlineB verOtp">VERIFICA E PROSEGUI</button>
                            </div>
                        </div>
                    </form>
                </div>
                <hr>
                <div id="boxVerEmail_int<?php echo $i; ?>" class="boxVer">
                    <h4>Verifica email</h4>
                    <p>
                        <strong>1</strong>. Richiedi l'<strong>invio del codice
                    	di controllo</strong> (OTP) via email. Se l'indirizzo email non corrisponde modificalo cliccando sull'icona.
                    </p>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label class="labelIco">Intestatario</label>
                            <span class="output">Mario Rossi</span>
                        </div>
                    </div>
                    <div class="spacer-no-border hidden-xs">&nbsp;</div>
                    <div id="outputEmail_int<?php echo $i; ?>" class="row">
                        <div class="col-sm-6 form-group">
                            <label class="labelIco">Email</label>
                            <a href="#!" class="icomod modEmail" title="Modifica"></a>
                            <span class="output">test@webank.it</span>
                        </div>
                        <div class="col-sm-6 form-group">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <?php if (!$mono): ?>
                            <button type="button" class="btn-whlit btn-whlit-arrowleft fleft uppercase completaDopoEmail">COMPLETA PI&Ugrave; TARDI</button>
                        <?php endif; ?>&nbsp;
                        </div>
                        <div class="col-sm-6">
                            <button type="button" class="btn-grlit btn-grlit-arrow fright uppercase inlineB sendOtp">INVIA CODICE OTP VIA EMAIL</button>
                        </div>
                    </div>
                    <div class="spacer-no-border hidden-xs">&nbsp;</div>
                    <p>
                        <strong>2</strong>. Verifica l'indirizzo di posta elettronica <strong>inserendo
                    	il codice di controllo</strong> (OTP) che ti abbiamo inviato per email.
                    </p>
                    <form id="formVerificaOTPEmail_int<?php echo $i; ?>" action="">
                        <div class="row">
                            <div class="col-sm-6 from-group otpenabled">
                                <label for="otpEmail_int<?php echo $i; ?>">Codice OTP</label>
                                <input type="text" id="otpEmail_int<?php echo $i; ?>" name="otpEmail_int<?php echo $i; ?>" class="textinput form-control" placeholder="Inserisci codice OTP">
                                <div class="nota"><a href="#!" id="lnkRecuperaOtpEmail_int<?php echo $i; ?>">Rinvia codice OTP</a></div>
                            </div>
                            <div class="col-sm-6">
                                <button type="button" id="btnVerificaOtpEmail_int<?php echo $i; ?>" class="btn-grlit btn-grlit-arrow fright uppercase disabled inlineB verOtp">VERIFICA E PROSEGUI</button>
                            </div>
                        </div>
                    </form>
                </div>

    <?php if (!$mono): ?>
    <!-- CHIUSURA ACCORDION -->
            </div>
        </div>
    </div>
    <!-- FINE - CHIUSURA ACCORDION -->
    <?php endif; ?>
<?php endfor; ?>

<?php if (!$mono): ?>
<!-- CHIUSURA GRUPPO ACCORDION -->
</div>
<!-- FINE - CHIUSURA GRUPPO ACCORDION -->
<?php endif; ?>


<form id="aolStep2" action="#" method="POST">
    <div class="row">
        <div class="col-sm-12">
            <p class="note">(*) I campi contrassegnati con l'asterisco sono obbligatori</p>
        </div>
    </div>
    <hr>
    <!-- Pulsanti -->
    <div class="row">
        <div class="col-xs-12">
            <div class="btn-console">
                <button type="button" class="btn-whlit btn-whlit-arrowleft fleft uppercase">INDIETRO</button>
                <button type="submit" id="submitStep1" class="btn-grlit btn-grlit-arrow fright uppercase inlineB">SALVA E PROSEGUI</button>
            </div>
        </div>
    </div>
    <!-- Fine pulsanti -->
</form>

<!-- Overlay consenso negato -->
<div class="modal fade" id="overlayConsensoNegato" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Consenso negato</h4>
            </div>
            <div class="modal-body">
                Se non dai il consenso alle tecniche di comunicazione a distanza non &grave; possibile procedere.
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-sm-6">
                        <button type="button" class="btn-whlit btn-whlit-arrowleft fleft uppercase" data-toggle="modal" data-target="#overlayConsensoNegato">ANNULLA</button>
                    </div>
                    <div class="col-sm-6">
                        <button type="submit" id="btnConsensoOK" class="btn-grlit btn-grlit-arrow fright uppercase inlineB">ACCONSENTO</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Overlay consenso negato - fine -->

<!-- Overlay modifica cell -->
<div class="modal fade" id="overlayModCell" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modifica Cellulare</h4>
            </div>
            <div class="modal-body">
                <form id="formModCell" action="">
                	<p>Hai deciso di modificare il numero di cellulare o l'operatore
                		dell'intestatario. Inserisci nuovi dati nei campi e salva
                		le modifiche per procedere.</p>
				    <div class="spacer-no-border hidden-xs">&nbsp;</div>
				    <div class="row">
				        <div class="col-md-6 form-group input-tel">
				            <label for="num_tel">Numero di cellulare*</label>
				            <div class="input input-inline clearfix">
				                <input type="tel" maxlength="4" name="prefisso_mod" id="prefisso_mod" value="0039" class="textinput form-control numPref ignore">
				                <input type="tel" maxlength="10" name="num_mod" id="num_mod" value="" class="textinput form-control numCell ignore" placeholder="Numero appartenente solo a te">
				                <input type="tel" name="tel" id="tel_mod" class="hidden-input">
				            </div>
				        </div>
				        <div class="col-md-6 form-group">
				            <label for="operatore">Operatore*</label>
				            <select name="operatore" id="operatore" class="form-control">
				                <option value="" selected>Scegli un operatore dalla lista</option>
				                <option value="Operatore 1">Operatore 1</option>
				                <option value="Operatore 2">Operatore 2</option>
				                <option value="Operatore 3">Operatore 3</option>
				            </select>
				        </div>
				    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-sm-6">
                        <button type="button" id="resetModCell" class="btn-whlit btn-whlit-arrowleft fleft uppercase">ANNULLA MODIFICHE</button>
                    </div>
                    <div class="col-sm-6">
                        <button type="button" id="submitModCell" class="btn-grlit btn-grlit-arrow fright uppercase inlineB">SALVA MODIFICHE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Overlay modifica cell - fine -->

<!-- Overlay modifica email -->
<div class="modal fade" id="overlayModEmail" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modifica indirizzo email</h4>
            </div>
            <div class="modal-body">
                <form id="formModEmail" action="">
                	<p>Hai deciso di modificare l'indirizzo email
                		dell'intestatario. Inserisci nuovi dati nei campi e salva
                		le modifiche per procedere.</p>
				    <div class="spacer-no-border hidden-xs">&nbsp;</div>
				    <div class="row">
				        <div class="col-md-6 form-group">
				            <label for="mail">Email*</label>
				            <input type="email" required placeholder="Indirizzo email appartenente solo a te" name="mail" id="mail" value="" class="textinput form-control">
				        </div>
				    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-sm-6">
                        <button type="button" id="resetModEmail" class="btn-whlit btn-whlit-arrowleft fleft uppercase">ANNULLA MODIFICHE</button>
                    </div>
                    <div class="col-sm-6">
                        <button type="submit" id="submitModEmail" class="btn-grlit btn-grlit-arrow fright uppercase inlineB">SALVA MODIFICHE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Overlay modifica email - fine -->

<!-- Overlay verifica dopo cell -->
<div class="modal fade" id="overlayVerificaDopoCell" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Completa verifica pi&ugrave; tardi</h4>
            </div>
            <div class="modal-body">
                Hai deciso di non confermare ora il tuo numero di cellulare.<br>
                Per motivi di sicurezza al primo accesso al conto dovrai
                <strong>obbligatoriamente confermare il tuo numero
                di cellulare</strong>.<br>
                <br>
                Dopo l'apertura del conto, ti invieremo i codici di accesso per posta.
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-sm-6">
                        <button type="button" class="btn-whlit btn-whlit-arrowleft fleft uppercase skipVerifica">SALTA VERIFICA E PROSEGUI</button>
                    </div>
                    <div class="col-sm-6">
                        <button type="submit" class="btn-grlit btn-grlit-arrow fright uppercase inlineB tornaVer">TORNA ALLA VERIFICA</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Overlay verifica dopo cell - fine -->

<!-- Overlay verifica dopo email -->
<div class="modal fade" id="overlayVerificaDopoEmail" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Completa verifica pi&ugrave; tardi</h4>
            </div>
            <div class="modal-body">
                Hai deciso di non confermare ora il tuo indirizzo email.<br>
                Per motivi di sicurezza al primo accesso al conto dovrai
                <strong>obbligatoriamente confermare il tuo indirizzo email</strong>.<br>
                <br>
                Dopo l'apertura del conto, ti invieremo i codici di accesso per posta.
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-sm-6">
                        <button type="button" class="btn-whlit btn-whlit-arrowleft fleft uppercase skipVerifica">SALTA VERIFICA E PROSEGUI</button>
                    </div>
                    <div class="col-sm-6">
                        <button type="submit" class="btn-grlit btn-grlit-arrow fright uppercase inlineB tornaVer">TORNA ALLA VERIFICA</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Overlay verifica dopo email - fine -->

<!-- Overlay verifica dopo cell -->
<div class="modal fade" id="overlayVerificaDopo" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Completa verifica pi&ugrave; tardi</h4>
            </div>
            <div class="modal-body">
                Hai deciso di non confermare ora il tuo numero di cellulare e la tua email.<br>
                Per motivi di sicurezza al primo accesso al conto dovrai
                <strong>obbligatoriamente confermare il tuo numero di cellulare e la tua email</strong>.<br>
                <br>
                Dopo l'apertura del conto, ti invieremo i codici di accesso per posta.
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-sm-6">
                        <button type="button" class="btn-whlit btn-whlit-arrowleft fleft uppercase skipVerifica">SALTA VERIFICA E PROSEGUI</button>
                    </div>
                    <div class="col-sm-6">
                        <button type="submit" class="btn-grlit btn-grlit-arrow fright uppercase inlineB tornaVer">TORNA ALLA VERIFICA</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Overlay verifica dopo cell - fine -->

<!-- Overlay verifica cell completata -->
<div class="modal fade" id="overlayVerificaCellOK" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Verifica cellulare completata</h4>
            </div>
            <div class="modal-body">
                La verifica del cellulare &egrave; stata completata con successo.
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<!-- Overlay verifica cell completata - fine -->

<!-- Overlay verifica email completata -->
<div class="modal fade" id="overlayVerificaEmailOK" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Verifica email completata</h4>
            </div>
            <div class="modal-body">
                La verifica dell'indirizzo email &egrave; stata completata con successo.
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<!-- Overlay verifica email completata - fine -->

<!-- SCRIPT -->
<script type="text/javascript">
    var step3Url = "http://libreriewebankbranch.webank.local/connect.php?page=strutt_wbresp.php&tpl=wbresp_aol_step03.php&subnav=aol&promo=aol",
        <?php if (!$mono): ?>
        userVerified = [false, true, false];
        <?php else: ?>
        userVerified = [false];
        <?php endif; ?>
</script>
<script type="text/javascript" src="/wbresp/js/aol/certificazione.js"></script>
<script type="text/javascript" src="/wbresp/js/aol/step2.js"></script>
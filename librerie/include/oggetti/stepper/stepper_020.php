<script type="text/javascript">
$(function() {

    /* */
    $('.editButton').click(function() {
        modificaStep($(this));

    });
    $("#btnInvio2").click(function() {
        proseguiStep($(this));
        $('#datiInput,#datiInput2').hide();
        $('#datiOutput,#datiOutput2').show();
    });

    $('#btnInvioLastStep').click(function() {
        proseguiStep($(this));
        $('#datiInput3').hide();
        $('#datiOutput3').show();
    });

    //esempio di errore
    $("#radioWrapper").find("input[type=radio]").removeAttr('checked');
    $("#btnInvio").click(function() {
        // Check giroconto
        var errors = [],
            check1 = $("#contratto2")

        if (!check1.is(':checked')) {
            errors.push({
                field: check1,
                text: "Per proseguire occorre prendere visione del Documento di Sintesi e dell'Informativa precontrattuale aprendo il relativo pdf."
            });
        }

        setHasErrors(errors, "#form01");
        if (errors.length) {
            $(errors[0].field).trigger('focus');
        } else {
            proseguiStep($(this));

        }
        return (!errors.length);
    });
});
</script>
<!--BOX ACCORDION NUMERATO -->
<div class="panel-nofill">
    <div class="panel-group panel-step unclosable" id="accordionCarteStep1" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default panel-selected">
            <div class="panel-heading" role="tab" id="carteStep1">
                <h4 class="panel-title">
             <span class="number-step"><span class="number">1</span><i class="icon icon-2x icon icon-spunta"></i></span>
                <a class="" data-toggle="" href="#collapseCarteStep1" aria-expanded="true" aria-controls="collapseCarteStep1">
                    Lorem ipsum <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i><i class="icon icon-edit_fill editButton"></i>
                 </a>
           </h4>
            </div>
            <div class="border-panel-collapse">
                <div id="collapseCarteStep1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="carteStep1">
                    <div class="panel-body">
                        <div id="datiInput">
                            <p>Procedi con la richiesta e segui le istruzioni: riceverai il bancomat e il Pin al tuo indirizzo di spedizione.</p>
                            <form class="formGenerico" role="form" id="form01">
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="control-label-output">Lorem ipsum</label>
                                                <span class="output">Lorem</span>
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="control-label">Lorem ipsum</label>
                                                <div class="form-inline">
                                                    <div class="input-group">
                                                        <select class="form-control" name="" id="">
                                                            <option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR" accountidtoshow="CC 01077 0000049477 EUR">CC 01077 0000049477 EUR</option>
                                                            <option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR" accountidtoshow="CC 01077 0000049477 EUR">CC 01077 0000049477 EUR</option>
                                                        </select>
                                                        <div class="input-group-addon">
                                                            <a class="no-underline btn-icon" data-toggle="modal" data-target="#starAlert1">
                                                                <i class="icon icon-star_fill" title="icon-star_fill"></i>
                                                                <!--<i class="icon icon-star" title="icon-star"></i>-->
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="control-label-output">Lorem ipsum</label>
                                                <span class="output">Lorem</span>
                                            </div>
                                            <div class="col-sm-6">
                                                <span class="output">
                                                <a data-toggle="modal" data-target="#massimali">Vedi dettagli</a>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" id="indirizzosped">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="control-label-output">Lorem ipsum</label>
                                                <span class="output">Lorem</span>
                                            </div>
                                            <div class="col-sm-6">
                                                <span class="output">
                                                <a href="javascript:;" onclick="$('#indirizzosped').hide();$('#indirizzomod').show();">modifica indirizzo</a>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="indirizzomod" style="display:none" class="borderFormRounded">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <label class="control-label-output">Indirizzo di spedizione</label>
                                                    <span class="output">L'indirizzo che indicherai sarà utilizzato solo per questa spedizione.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <label class="control-label-output">destinatario</label>
                                                    <span class="output">Marco rossi</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label class="control-label-output">presso</label>
                                                    <input type="text" name="" class="form-control clear-x">
                                                </div>
                                                <div class="col-sm-6 requiredField">
                                                    <label class="control-label-output">indirizzo</label>
                                                    <input type="text" name="" class="form-control clear-x" placeholder="Es. Viale Monte Bianco, 4">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-4 requiredField">
                                                    <label class="control-label-output">Provincia</label>
                                                    <select name="" class="form-control" id="">
                                                        <option>Seleziona la provincia</option>
                                                        <option>lorem</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4 requiredField">
                                                    <label class="control-label-output">Comune</label>
                                                    <select name="" class="form-control" id="">
                                                        <option>Seleziona il comune</option>
                                                        <option>lorem</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4 requiredField">
                                                    <label class="control-label-output">Cap</label>
                                                    <select name="" class="form-control" id="">
                                                        <option>Cap</option>
                                                        <option>lorem</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <span class="output flRight">
                                                    <a href="javascript:;" onclick="$('#indirizzosped').show();$('#indirizzomod').hide();">annulla modifica</a>
                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label class="control-label">Modalit&agrave; di consegna</label>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="radio inline">
                                                            <label class="textWrapper">
                                                                <input type="radio" name="modalitaConsegna" id="" checked onclick="$('#spedizioneHidden').hide()">
                                                                <span class="text">Posta raccomandata consegna gratuita in 6/7 giorni lavorativi</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="radio inline">
                                                            <label class="textWrapper">
                                                                <input type="radio" name="modalitaConsegna" id="" onclick="$('#spedizioneHidden').show()">
                                                                <span class="text">Corriere espresso consegna gratuita in 2/3 giorni lavorativi</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="spedizioneHidden" class="form-group" style="display:none;">
                                        <div class="row">
                                            <div class="col-sm-6 requiredField">
                                                <label class="control-label txthelp" data-toggle="tooltip" data-title="Il recapito può servire al corriere per contattarti in caso di contrattempi sulla consegna.">Lorem ipsum*</label>
                                                <input type="text" name="" class="form-control clear-x">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label class="control-label">lorem</label>
                                                <input type="text" name="" class="form-control clear-x" placeholder="facoltativo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12 requiredField">
                                                <label class="control-label">lorem</label>
                                                <div class="checkbox">
                                                    <label id="richiesta1" class="textWrapper disabledField richiesta-1">
                                                        <span class="hovfin" data-toggle="tooltip" data-title="Prima di procedere, occorre prendere visione dell'informativa precontrattuale, aprendo il relativo Pdf, salvandolo e/o stampandolo in modo da poterlo conservare."></span>
                                                        <input type="checkbox" name="" id="contratto2" disabled>
                                                        <span class="text">Dichiaro di aver preso visione del<a href="#!" target="_blank" onclick="enableInput('#richiesta1');"> Documento di Sintesi e dell'Informativa precontrattuale</a> dopo averli stampati e/o salvati su supporto durevole. Puoi prendere visione anche del <a href="#!" target="_blank">foglio informativo.</a></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p>n caso di conclusione del contratto puoi recedere senza penali e senza spese entro 14 giorni dalla ricezione della conferma di accettazione della tua richiesta. Per maggiori dettagli leggi l'<a href="#">informativa sui contratti a distanza.</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group btnWrapper">
                                        <div class="btn-align-center">
                                            <a type="button" class="btn btn-primary proseguiButton" id="btnInvio">prosegui</a>
                                            <a type="button" class="btn btn-primary editButton" id="btnModifica">modifica</a>
                                            <br class="clear">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="datiOutput" style="display:none">
                            <form class="formGenerico" role="form" id="form01">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="control-label-output">Lorem ipsum</label>
                                            <span class="output">Lorem</span>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="control-label-output">Lorem ipsum</label>
                                            <span class="output">Lorem</span>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="control-label-output">Lorem ipsum</label>
                                            <span class="output">Lorem</span>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="control-label-output">Lorem ipsum</label>
                                            <span class="output">Lorem</span>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="control-label-output">Lorem ipsum</label>
                                            <span class="output">Lorem</span>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="control-label-output">Lorem ipsum</label>
                                            <span class="output">Lorem</span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-group panel-step disabled" id="accordionCarteStep2" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="carteStep2">
                <h4 class="panel-title">
             <span class="number-step"><span class="number">2</span><i class="icon icon-2x icon icon-spunta"></i></span>
                <a class="" data-toggle="" href="#collapseCarteStep2" aria-expanded="false" aria-controls="collapseCarteStep2">
                    Lorem ipsum <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
                </a>
           </h4>
            </div>
            <div class="border-panel-collapse">
                <div id="collapseCarteStep2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="carteStep2">
                    <div class="panel-body">
                        <div id="datiInput2">
                            <form class="formGenerico" role="form">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p>Prima di firmare prendi visione del modulo di richiesta della carta Bancomat. Per firmare digitalmente inserisci il tuo codice di firma e <span data-toggle="tooltip" data-title="Per sicurezza, ti invieremo un Sms con un codice di controllo al numero 335*****54: dovrai inserirlo online per concludere l'operazione.">tieni a portata di mano il tuo cellulare</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12 requiredField">
                                            <div class="checkbox">
                                                <label id="richiesta2a" class="textWrapper disabledField">
                                                    <span class="hovfin" data-toggle="tooltip" data-title="Prima di procedere, occorre prendere visione dell'informativa precontrattuale, aprendo il relativo Pdf, salvandolo e/o stampandolo in modo da poterlo conservare."></span>
                                                    <input type="checkbox" name="" id="contratto" disabled>
                                                    <span class="text">Ho letto e firmo le <a href="#!" target="_blank" onclick="enableInput('#richiesta2a');enableInput('#richiesta2b')";>&quot;norme generali del contratto&quot;</a></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12 requiredField">
                                            <div class="checkbox">
                                                <label id="richiesta2b" class="textWrapper disabledField">
                                                    <span class="hovfin" data-toggle="tooltip" data-title="Prima di procedere, occorre prendere visione dell'informativa precontrattuale, aprendo il relativo Pdf, salvandolo e/o stampandolo in modo da poterlo conservare."></span>
                                                    <input type="checkbox" name="" id="contratto3" disabled>
                                                    <span class="text">Lorem ipsum dolor &quot;sit lorem&quot;</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group borderFormRounded">
                                    <div class="row">
                                        <div class="col-sm-3 hidden-xs">
                                            <img src="/img/ret/logo_digitallife.png" class="logo">
                                        </div>
                                        <div class="col-sm-9 col-xs-12">
                                            <p>Per firmare inserisci il Codice di Firma e il Codice di controllo che ti abbiamo inviato via SMS.</p>
                                            <div class="col-sm-6  requiredField">
                                                <label class="control-label"><span class="txthelp" data-toggle="tooltip" data-title="Inserisci il Codice di Firma che hai scelto quando hai attivato la firma digitale. Se non lo ricordi, lo trovi nel PDF che ti abbiamo inviato alla tua email">Codice firma</span></label>
                                                <input maxlength="" id="" value="" type="text" name="" class="form-control clear-x">
                                            </div>
                                            <div class="col-sm-6  requiredField">
                                                <label class="control-label">Lorem</label>
                                                <input maxlength="" id="" value="" type="text" name="" class="form-control clear-x">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group btnWrapper">
                                    <div class="btn-align-center">
                                        <a type="button" class="btn btn-primary proseguiButton" id="btnInvio2">prosegui</a>
                                        <br class="clear">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="datiOutput2" style="display:none">
                            Contratto di richiesta Carta Jeans firmato digitalmente
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-group panel-step disabled" id="accordionCarteStep3" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="carteStep3">
                <h4 class="panel-title">
             <span class="number-step"><span class="number">3</span><i class="icon icon-2x icon icon-spunta"></i></span>
                <a class="" data-toggle="" href="#collapseCarteStep3" aria-expanded="false" aria-controls="collapseCarteStep3">
                    Lorem ipsum <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
                </a>
              </h4>
            </div>
            <div class="border-panel-collapse">
                <div id="collapseCarteStep3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="carteStep3">
                    <div class="panel-body">
                        <div id="datiInput3">
                            <h4>Password II livello</h4>
                            <form class="formGenerico bgPin32 borderFormRounded" role="form">
                                <div class="form-group noMarginBottom">
                                    <div class="row">
                                        <div class="pincode">
                                            <div class="col-sm-8 pintxt">
                                                <p class="pin_testo">Inserisci la <strong class="negativo">PRIMA</strong> e <strong class="negativo">TERZA</strong> cifra del codice <strong class="negativo">12</strong> della tua <strong>Carta Servizi Telematici</strong></p>
                                            </div>
                                            <div class="col-sm-4 paddform">
                                                <div class="form-inline">
                                                    <div class="input-group margBottSmall">
                                                        <input type="number" class="form-control" maxlength="1">
                                                        <span>*</span>
                                                        <input type="number" class="form-control" maxlength="1">
                                                        <span>*</span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="form-inline" style="text-align:center">
                                                    <div class="input-group">
                                                        <span class="note">1</span>
                                                        <span class="note">2</span>
                                                        <span class="note">3</span>
                                                        <span class="note">4</span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="form-group btnWrapper">
                                <div class="btn-align-right">
                                    <a type="button" id="AnnullaPin" class="btn btn-default clearPin">annulla</a>
                                    <a type="button" class="btn btn-primary proseguiButton" id="btnInvioLastStep" href="#">invia la richiesta</a>
                                    <br class="clear">
                                </div>
                                <br class="clear">
                            </div>
                        </div>
                        <div id="datiOutput3" style="display:none">
                            <div class="boxesito positivo">
                                <i class="icon icon-2x icon icon-spunta"></i>
                                <div class="text">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <p><strong>Lorem ipsum dolor sit amet adipiscig</strong>
                                                <br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi <a href="#">sint occaecati cupiditate non provident</a>, similiq</p>
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
<div class="modal fade" id="starAlert1" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body"> Vuoi impostare il conto <strong>CC 01077 0000049477 EUR </strong> come preferito? </div>
            <div class="modal-footer">
                <div class="form-group">
                    <div class="btn-align-left">
                        <button type="button" class="btn btn-default" data-dismiss="modal">annulla</button>
                    </div>
                    <div class="btn-align-right">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">conferma</button>
                    </div>
                    <br class="clear"> </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="massimali" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i></a>
                <h2 class="modal-title" id="myModalLabel">Dettagli massimali</h2>
            </div>
            <div class="modal-body">
                <table cellspacing="0" cellpadding="0" border="0" class="dettTable">
                    <thead>
                        <tr>
                            <th>Tipologia</th>
                            <th>Al giorno</th>
                            <th>Al mese</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="txthelp" data-toggle="tooltip" data-title="Per &quot;Max utilizzo carta&quot; si intende la cifra totale che puoi spendere con il bancomat, ovvero la somma dei vari tipi di utilizzo (prelievo e pagamenti). ESEMPIO. Se il tuo massimale mensile &egrave; di 2000 &euro;, prelevando 1200 &euro;, ti restano 800 &euro; per i tuoi pagamenti.">Max utilizzo carta</span></td>
                            <td>1500 &euro;</td>
                            <td>2000 &euro;</td>
                        </tr>
                        <tr>
                            <td>Max prelievo circuito Bancomat</td>
                            <td>500 &euro;</td>
                            <td>1500 &euro;</td>
                        </tr>
                        <tr>
                            <td>Max prelievo circuito Cirrus (tra Italia ed estero)</td>
                            <td>250 &euro;</td>
                            <td>1000 &euro;</td>
                        </tr>
                        <tr>
                            <td>Max pagamento circuito PagoBancomat</td>
                            <td>1000 &euro;</td>
                            <td>1000 &euro;</td>
                        </tr>
                        <tr>
                            <td>Max pagamento circuito Maestro (tra Italia ed estero)</td>
                            <td>500 &euro;</td>
                            <td>1000 &euro;</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
 $(function(){
     var inputCausale = $("#causale");
    

     inputCausale.on('keydown keyup',function(event){
         var valueInputCausale =  inputCausale.val();
         var regEspr = /^\d|\/+$/; 
         if (!(regEspr.test(valueInputCausale.charAt(valueInputCausale.length-1)))){
             inputCausale.val(valueInputCausale.substring(0,valueInputCausale.length-1));
         }

     })
    
     
 })
 

 var appendDatePickerIcon2 = function(idElement) {
    var icoDate = $("#" + idElement).datepicker().next('.ui-datepicker-trigger'),
        AddOnDate = $("#" + idElement).datepicker().closest('.editable-input').siblings('.input-group-addon.date');
        icoDate.appendTo(AddOnDate);
       //se non è android
       if (!/android/i.test(navigator.userAgent)) {
            $("#" + idElement).mask("99/99/9999");
        }
       //se è android
       else {
            var inputDate = $("#" + idElement);
            inputDate.attr('maxlength',10)
            inputDate.on('keypress',function(){
                var valueInputDate =  inputDate.val();
                if (valueInputDate.length==2) {
                    inputDate.val(valueInputDate+ '/');
                }
                else if(valueInputDate.length==5) {
                     inputDate.val(valueInputDate+ '/');
                }
        })
       }
    
};

</script>
<style>

</style>
<section>
    <h2>CBILL e PagoPA</h2>
    <p>Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.</p>
	<div class="bgcbill">
		<img src="/wscmn/fe/img/loghi_cbill.gif" />	
	</div>
</section>

<section>
    <h4>Dati per il pagamento</h4>
    <form class="formGenerico borderFormRounded" role="form" id="formCBill" autocomple="off">

        <div class="form-group">
            <div class="row">
                <div class="col-sm-6 ">
                    <label for="" class="control-label">Conto di addebito*</label>
					<span class="output" id="IbanId_ord">IT79A0558401799000000081080</span>
                    
                </div>
                <div class="col-sm-6">
                    <label class="control-label" id="dataacc">Saldo disponibile al 05/08/2015</label> <span class="output" id="balanceValue" value="4.604,07"><strong><a href="#">4.604,07 &euro;</a></strong></span> </div>
            </div>
        </div>
		<div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <label class="control-label" id="dataacc">Pagamento a favore di:</label>
                            <div class="form-inline">
                            <div class="input-group">
                                <input type="text" class="form-control" id="testo1"> </div>
                        </div>
                </div>
                <div class="col-sm-6">
                    <label class="control-label" id="dataacc"><a href="javascript:;" data-toggle="modal" data-target="#layerCodice">Codice identificativo/Avviso di pagamento*</a></label>
                            <div class="form-inline">
                            <div class="input-group">
                                <input type="text" class="form-control" id="testo2"> </div>
                        </div>
                </div>
                <!--OVERLAYER SEPA -->
<div class="modal fade" id="layerCodice" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header"> <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="myModalLabel">Codice identificativo/ avviso di pagamento</h2> </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <p><p>Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.</p></p>
                        <img src="/wscmn/fe/img/cbill_overlay.png" alt="Cbill" class="img-resp" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <label class="control-label" id="importo">Importo</label>
                    <div class="form-inline">
                        <div class="requiredField">
                            <div class="input-group" id="italyCurrency">
                                <input maxlength="10"  value="" type="number" name="importo" class="form-control clear-x" id="testo3">
                                <div class="input-group-addon">EUR</div>
                            </div>
                        </div>
                        <div style="display:none" id="foreignCurrency">
                            <div class="input-group">
                                <input maxlength="10" id="importo2" value="" type="number" name="importo" class="form-control clear-x">
                                <div class="input-group-btn">
                                    <select name="divisa" id="divisaSelect">
                                        <option cambio="7.4363" value="DKK">CORONA DANESE</option>
                                        <option cambio="8.7036" value="NOK">CORONA NORVEGESE</option>
                                        <option cambio="9.1841" value="SEK">CORONA SVEDESE</option>
                                        <option cambio="1.4433" value="AUD">DOLLARO AUSTRALIANO</option>
                                        <option cambio="1.3751" value="CAD">DOLLARO CANADESE</option>
                                        <option cambio="8.578" value="HKD">DOLLARO HONG KONG</option>
                                        <option cambio="1.6279" value="NZD">DOLLARO NUOVA ZELANDA</option>
                                        <option cambio="1.0" value="EUR" selected="selected">EURO</option>
                                        <option cambio="1.0406" value="CHF">FRANCO SVIZZERO</option>
                                        <option cambio="13.4921" value="ZAR">RAND SUD AFRICA E NAMIBIA</option>
                                        <option cambio="0.7085" value="GBP">STERLINA INGLESE</option>
                                        <option cambio="1.115" value="USD">USA DOLLARI</option>
                                        <option cambio="138.084" value="JPY">YEN</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                            <label class="control-label" id="dataacc">Data esecuzione</label>
                            <div class="form-inline">
                                <div class="input-group">
                                    <input type="text" id="datepickerEse" placeholder="gg/mm/aaaa"  value="22/05/2017"class="form-control clear-x"> <a class="input-group-addon date btn-icon" href="#"><i class="icon icon-calendar_filled"></i></a> </div>
                            </div>
                        </div>
            </div>
        </div>
        
    </form>
</section>

<section>
    <div class="form-group btnWrapper">
        <div class="stepBtn">Step <strong> 1 </strong> di 2</div>
        <div class="btn-align-right">
            <a type="button" class="btn btn-primary" id="btnInvio" href="#">prosegui</a>
        </div>
        <div class="clear"></div>
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
                        <br class="clear">
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    //inizializzazione datepicker
    $(function() {
        //$("#datepickerTool").mask("99/99/9999");
        $("#datepickerEse").datepicker({
            showOtherMonths: true,
            beforeShowDay: highlightDays,
            showOn: "button",
            onSelect: function(){$(this).next('.editable-clear-x').show()},
            prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
            nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
            buttonImage: "/img/ret/pixel_trasp.gif",
            buttonImageOnly: true,
            beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
            onClose: function() {
                $('#datePickerWrapper').modal('hide');
            }
        })
        appendDatePickerIcon('datepickerEse');
    });
</script>
<!--esempio di gestione errore -->

<!--OVERLAYER SEPA -->
<div class="modal fade" id="layerSepa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header"> <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="myModalLabel">Cos'&egrave; l'area sepa?</h2> </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                         <p> La <strong>Sepa</strong>, ovvero la <strong>Single Euro Payments Area</strong> (Area Unica dei Pagamenti in Euro), &egrave; l'area in cui i cittadini, le imprese e le pubbliche amministrazioni possono <strong>effettuare e ricevere pagamenti in euro</strong>, sia all'interno dei confini nazionali che fra i Paesi che ne fanno parte, alle <strong>stesse condizioni</strong> previste nel proprio Paese.
                          </p>
                        <h3>I paesi dell'area sepa</h3>
                        <p>Paesi dell'Unione Europea</p>
                        <div class="col-sm-3 col-xs-6"> <strong>Austria</strong>
                            <br> <strong>Belgio</strong>
                            <br> <strong>Bulgaria</strong>
                            <br> <strong>Cipro</strong>
                            <br> <strong>Croazia</strong>
                            <br> <strong>Danimarca</strong>
                            <br> <strong>Estonia</strong>
                            <br> </div>
                        <div class="col-sm-3 col-xs-6"> <strong>Finlandia</strong>
                            <br> <strong>Francia</strong>
                            <br> <strong>Germania</strong>
                            <br> <strong>Grecia</strong>
                            <br> <strong>Irlanda</strong>
                            <br> <strong>Italia</strong>
                            <br> <strong>Lettonia</strong>
                            <br> </div>
                        <div class="col-sm-3 col-xs-6"> <strong>Lituania</strong>
                            <br> <strong>Lussemburgo</strong>
                            <br> <strong>Malta</strong>
                            <br> <strong>Paesi Bassi</strong>
                            <br> <strong>Polonia</strong>
                            <br> <strong>Portogallo</strong>
                            <br> <strong>Regno Unito</strong>
                            <br> </div>
                        <div class="col-sm-3 col-xs-6"> <strong>Repubblica Ceca</strong>
                            <br> <strong>Repubblica Slovacca</strong>
                            <br> <strong>Romania</strong>
                            <br> <strong>Slovenia</strong>
                            <br> <strong>Spagna</strong>
                            <br> <strong>Svezia</strong>
                            <br> <strong>Ungheria</strong>
                            <br> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript"> 
    $(function () {
        
        $("#btnInvio").click(function () {

            // Check giroconto
            var errors = [],
                alerts = [],
                testo1 = $("#testo1");
                testo2 = $("#testo2");
                testo3 = $("#testo3");
            if (testo1.val() === '' && alerts.length===0) {

                errors.push({ field: testo1, text: "lorem ipsum" })
                setHasErrors(errors, "#formCBill");
            }
            if (testo3.val() === ''  && alerts.length===0) {

                errors.push({ field: testo3, text: "lorem ipsum3" })
                setHasErrors(errors, "#formCBill");
            }
            if (testo2.val() === ''  && errors.length===0) {

                alerts.push({ field: testo2, text: "lorem ipsum2" })
                setHasErrors(alerts, "#formCBill",'has-alert');
            }
            if (errors.length) {
                $(errors[0].field).trigger('focus');
            }
            if (alerts.length) {
                $(alerts[0].field).trigger('focus');
            }
            return (!errors.length);
            return (!alerts.length);
        });
    });
</script>
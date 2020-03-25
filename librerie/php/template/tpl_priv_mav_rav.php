<!-- Testo introduttivo -->
<section>
    <h2>MAV</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique magnam ut fugit sequi quas, facilis veniam vitae at recusandae nostrum.</p>
    <ul>
        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, iusto.</li>
        <li>Lorem ipsum dolor sit.</li>
        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea odio, corporis. <strong>Consectetur accusamus</strong> cupiditate, at, vitae esse, eum cumque est quo atque exercitationem possimus temporibus expedita neque aliquam. Sint, a.</li>
    </ul>
</section>
<!-- Fine testo introduttivo -->

<section>
    <h4>Dati Mav</h4>
    <form class="formGenerico borderFormRounded" role="form" id="formMavRav" autocomple="off">
        
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6 ">
                    <label for="" class="control-label">Conto di addebito*</label>
                    <div class="form-inline">
                        <div class="input-group">
                            <select class="form-control" name="" id="">
                                <option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR" accountidtoshow="CC 01077 0000049477 EUR">CC 01077 0000049477 EUR</option>
                                <option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR" accountidtoshow="CC 01077 0000049477 EUR">CC 01077 0000049477 EUR</option>
                            </select>
                            <div class="input-group-addon">
                                <a class="btn-icon" data-toggle="modal" data-target="#starAlert1" data-animation="false"> <i class="icon icon-star_fill" title="icon-star_fill"></i>
                                    <!--<i class="icon icon-star" title="icon-star"></i>-->
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 ">
                    <label class="control-label">Iban ordinante</label> <span class="output" id="IbanId_ord">IT79A0558401799000000081080</span> 
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-7">
                            <label class="control-label" id="dataacc">Data esecuzione*</label>
                            <div class="form-inline">
                                <div class="input-group">
                                    <input type="text" id="dataEsecuzione" placeholder="gg/mm/aaaa" class="form-control clear-x"> <a class="input-group-addon date btn-icon" href="#"><i class="icon icon-calendar_filled"></i></a> 
                                </div>
                            </div>
                            <script type="text/javascript">
                                //inizializzazione datepicker
                                $(function() {
                                      $("#dataEsecuzione").datepicker({
                                        showOtherMonths: true,
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
                                    appendDatePickerIcon('dataEsecuzione');
                                });
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="control-label" id="dataacc">Saldo disponibile al 05/08/2015</label> <span class="output" id="balanceValue" value="4.604,07"><strong><a href="#">4.604,07 &euro;</a></strong></span> 
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <label class="control-label" id="importo">Importo*</label>
                    <div class="form-inline">
                        <div class="requiredField">
                            <div class="input-group" id="italyCurrency">
                                <input maxlength="10" id="importoField" value="" type="number" name="importo" class="form-control clear-x">
                                <div class="input-group-addon">EUR</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    
                    <label class="control-label">Codice Mav</label>
                    <div class="form-inline">
                        <div class="input-group">
                             <input type="text" name="codicemav" maxlength="30" value="" class="form-control clear-x" autocomplete="off"> 
                             <div class="input-group-addon"><a href="#1" class="no-underline btn-icon" data-toggle="modal" data-target="#layermav"><i class="icon icon-info_fill"></i ></a></div>
                        </div>
                    </div>
                    <div class="modal fade" id="layermav" tabindex="-1" role="dialog" aria-labelledby="immaginemav">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                               <div class="modal-header">
                                    <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                
                                </div>

                               <div class="modal-body">
                                    <img class='img100' src='/wscmn/img/bolletta_mav.gif'>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="control-label" id="note">Note</label>
                    <input type="text" name="note" maxlength="140" value="" class="form-control clear-x" autocomplete="off"> 
                </div>
            </div>
        </div>
    </form>
</section>

<section>
    <div class="form-group btnWrapper">
        <div class="stepBtn">Step <strong> 1 </strong> di 2</div>
        <div class="btn-align-right">
            <a type="button" class="btn btn-primary" id="btnInvio" href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_bonifico_step2.php&liv0=1&liv1=1&liv2=0&liv3=0&responsive=y">prosegui</a>
        </div>
        <div class="clear"></div>
    </div>
</section>
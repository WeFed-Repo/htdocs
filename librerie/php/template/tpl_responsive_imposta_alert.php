<h2>Imposta alert</h2>


<section>
    <ul>
        <li>
            In questa pagina puoi impostare alert automatici (<strong>SMS</strong> e <strong>EMAIL</strong>) che ti avvisano quando si verificano determinati eventi che selezioni online. Per esempio, quando ricevi lo stipendio o quando fai sul sito una operazione.
        </li>
        <li>
            <strong>Per alcuni Sms è previsto un costo; gli alert via email sono invece gratuiti.</strong>
        </li>
    </ul>
    <p><a href="#" class="btn-icon" data-toggle="modal" data-target="#layerSepa">Costi Sms</a><br/><a href="#" class="btn-icon">Dettagli</a></p>
</section>

<section>
    <form class="formGenerico borderFormRounded output" role="form" id="form04">
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                        <label class="control-label">N di cellulare</label>
                        <span class="output">339*****99</span>
                </div>
                <div class="col-sm-6">
                        <label class="control-label">Operatore:</label>
                        <span class="output">Wind</span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                        <label class="control-label">Indirizzo e-mail:</label>
                        <span class="output">pippoplutopaperino@paperopoli.com</span>
                </div>
            </div>
        </div>
    </form>
</section>



<section>
    <p>&Egrave; possibile modificare il proprio numero telefonico ed il proprio indirizzo mail nell'apposita 
    sezione <a href="#" class="btn-icon">Modifica recapiti.</a></p>
<!-- NAVIGATION -->

<div class="navContFirstLev outerTab">
    <div class="innerTab">
        <ul class="tabsmall">
            <li class="on"><a href="#">Conto</a></li>
            <li class=""><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_imposta_alert_deposito.php&responsive=y&liv0=0&liv1=1&liv2=0&liv3=1#">Deposito</a></li>
            <li class=""><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_imposta_alert_bancomat.php&responsive=y&liv0=0&liv1=1&liv2=0&liv3=1#">Bancomat</a></li>
            <li class=""><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_imposta_alert_trading.php&responsive=y&liv0=0&liv1=1&liv2=0&liv3=1#">Trading</a></li>
            <li class=""><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_imposta_alert_titoli_indici.php&responsive=y&liv0=0&liv1=1&liv2=0&liv3=1#">Titoli e indici</a></li>
            <li class=""><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_imposta_alert_fondi_sicav.php&responsive=y&liv0=0&liv1=1&liv2=0&liv3=1#">Fondi e sicav</a></li>
            <li class=""><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_imposta_alert_sicurezza.php&responsive=y&liv0=0&liv1=1&liv2=0&liv3=1#">Sicurezza</a></li>
        </ul>
    </div>
    <div class="separator"></div>
    <div class="panel-nofill">
</section>


<section>
    <h4>Conto sul quale attivare gli alert</h4>
    <form class="formGenerico borderFormRounded" role="form" id="" autocomple="off">
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6 ">
                    <label for="" class="control-label">Conto corrente</label>
                    <div class="form-inline">
                        <div class="input-group">
                            <select class="form-control" name="" id="">
                                <option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR" accountidtoshow="CC 01077 0000049477 EUR">CC 01077 0000049477 EUR</option>
                                <option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR" accountidtoshow="CC 01077 0000049477 EUR">CC 01077 0000049477 EUR</option>
                            </select>
                            <div class="input-group-addon">
                            <a class="btn-icon" data-toggle="modal" data-target="#starAlert1" data-animation="false"> 
                            <i class="icon icon-star_fill" title="icon-star_fill"></i>
                                 
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
</section>
    

<section>
<!-- -----------------TABELLA SALDO  --------------------   -->
<div class="headerContainerNoBootS">
    <div class="tableContainerNoBootS">
<h4>Definisci gli alert del saldo</h4>
<table id="tableSmsAlert_1">
    <thead>
        <tr>
            <th class="left" style="width:50%">Tipologia</th>
            <th class="center wTd10">Sms</th>
            <th class="center wTd10">Email (Gratis)</th>
            <th class="center wTd10">Push (Gratis)</th>
        </tr>
    </thead>
    <tbody>
        <tr  class="dispari">
            <td>
               <span>
                    <a href="#1" class="btn-icon flLeft hideIcoAlert" id="controlSwitchIcon_1" >
                        <i class="icon icon-2x icon-row_expand" id="switchIcon_1"></i>
                    </a> 
                </span>
                <div class="lenghtTdAlert">
                    Saldo
                </div>
            </td>
            <td class="center"> 
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                        <span class="text">0,26&euro;</span>
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
        </tr>
        <tr  class="dispari nascondi" id="control_1">
            <td class="borderTopNo  pad_top_0 altezzaAlertSaldo">
            <!--SALDO -->
            <div class="row">
                <div class="col-sm-3">
                    <div class="radio marginTopMedium">
                        <label class="textWrapper">
                            <input type="radio" name="saldo" id="settimanale" value="settimanale">
                            <span class="text">Settimanale</span>
                        </label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="radio marginTopMedium" >
                        <label class="textWrapper">
                            <input type="radio" name="saldo" id="giornaliero" value="giornaliero">
                            <span class="text">Giornaliero</span>
                        </label>    
                    </div>
                </div>
                <div class="col-sm-3 orarioAlert" id="hideDay">
                <span id="giorno">
                    <label class="control-label">Giorno</label>
                        <select class="form-control">
                            <option>luned&igrave;</option>
                            <option>marted&igrave;</option>
                            <option>mercoled&igrave;</option>
                            <option>gioved&igrave;</option>
                            <option>venerd&igrave;</option>
                            <option>sabato</option>
                            <option>domenica</option>
                        </select>
                </span>     
                </div>
                <div class="col-sm-3  orarioAlert" id="hideHours">
                    <span id="orario">  
                        <label class="control-label">Orario</label>
                        <select class="form-control">
                            <option>6:00</option>
                            <option>7:00</option>
                            <option>8:00</option>
                            <option>9:00</option>
                            <option>10:00</option>
                            <option>11:00</option>
                            <option>12:00</option>
                            <option>13:00</option>
                            <option>14:00</option>
                            <option>15:00</option>
                            <option>16:00</option>
                            <option>17:00</option>
                            <option>18:00</option>
                            <option>19:00</option>
                            <option>20:00</option>
                            <option>21:00</option>
                            <option>22:00</option>
                        </select>
                    </span>
                </div>
            </div>
                <!--END SALDO -->
            </td>
            <td class="borderTopNo"></td>
            <td class="borderTopNo"></td>
            <td class="borderTopNo"></td>
        </tr>
        <tr class="pari">
            <td>
                Saldo contabile negativo
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                        <span class="text">Gratis</span>
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
        </tr>
        <tr class="dispari">
            <td>
                <span>
                    <a href="#1" class="btn-icon flLeft hideIcoAlert" id="controlSwitchIcon_2" >
                       <i class="icon icon-2x icon-row_expand" id="switchIcon_2"></i>
                    </a>
                </span>
                <div class="lenghtTdAlert">
                    Saldo contabile inferiore a
                </div>    
            </td>
            <td class="center"> 
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                        <span class="text">0,26&euro;</span>
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
        </tr>
        <tr class="dispari nascondi" id="control_2">
            <td class="borderTopNo">
                <!-- -->
                    <div class="floating-box sizeInputAlert">
                        <input type="text" class="form-control clear-x">
                    </div>
                    <div class="floating-box">
                     ,00   
                    </div>
                <!-- -->
            </td>
            <td class="borderTopNo"> </td>
            <td class="borderTopNo"></td>
            <td class="borderTopNo"></td>
        </tr>
        <tr class="pari">
            <td>
                Saldo disponibile negativo
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                        <span class="text">Gratis</span>
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
        </tr>
        <tr class="dispari">
            <td>
               <span> 
                <a href="#1" class="btn-icon flLeft hideIcoAlert" id="controlSwitchIcon_3" >
                    <i class="icon icon-2x icon-row_expand" id="switchIcon_3"></i>
                </a>     
                </span>
                <div class="lenghtTdAlert">
                    Saldo disponibile inferiore a
                </div>
            </td>
            <td class="center"> 
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                        <span class="text">0,26&euro;</span>
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
        </tr>
        <tr  class="dispari nascondi" id="control_3">
            <td class="borderTopNo">
                <!-- -->
                    <div class="floating-box sizeInputAlert">
                        <input type="text" class="form-control clear-x">
                    </div>
                    <div class="floating-box">
                     ,00   
                    </div>
                <!-- -->
            </td>
            <td class="borderTopNo"></td>
            <td class="borderTopNo"></td>
            <td class="borderTopNo"></td>
        </tr>
    </tbody>
</table>
</div>
    </div>
</section>    
<!-- --------------------END TABELLA SALDO ------------------------------>


<!-- GESTIONE DELLA SOTTOTABELLA SEZIONE SALDO  -->
    <script type="text/javascript">
<!-- Apertura e chiusura sottotabelle-->
        $(function() {
            $('#controlSwitchIcon_1').click(function() {
                $('#control_1').toggle();
                if($('#control_1').is(":visible")){
                    
                    $('#switchIcon_1').removeClass('icon-row_expand');
                    $('#switchIcon_1').addClass('icon-row_contract');
  
                }else{
                    $('#switchIcon_1').removeClass('icon-row_contract');
                    $('#switchIcon_1').addClass('icon-row_expand');
                }
            });


            $('#controlSwitchIcon_2').click(function() {
                $('#control_2').toggle();
                if($('#control_2').is(":visible")){
                    
                    $('#switchIcon_2').removeClass('icon-row_expand');
                    $('#switchIcon_2').addClass('icon-row_contract');
  
                }else{
                    $('#switchIcon_2').removeClass('icon-row_contract');
                    $('#switchIcon_2').addClass('icon-row_expand');
                }
            });


            $('#controlSwitchIcon_3').click(function() {
                $('#control_3').toggle();
                if($('#control_3').is(":visible")){
                    
                    $('#switchIcon_3').removeClass('icon-row_expand');
                    $('#switchIcon_3').addClass('icon-row_contract');
  
                }else{
                    $('#switchIcon_3').removeClass('icon-row_contract');
                    $('#switchIcon_3').addClass('icon-row_expand');
                }
                
            });

        });
    </script>



<script type="text/javascript">
//VALUTA SE SI HA selezionato SALDO settimanale oppure giornaliero  


    $("#giorno").hide();
    $("#orario").hide();
$('input[name="saldo"]').on('click' , function(){

    if( $(this).val() === "settimanale"){
        $("#giorno").show();
        $("#orario").show();
        $("#hideDay").css("display","block");
        $("#hideDay").addClass("orarioAlert");
    }

    else if( $(this).val() === "giornaliero"){
        $("#orario").show();
        $("#giorno").hide();
        $("#hideDay").css("display","none");
    }
    });

</script>

<!-- ---------------- END GESTIONE DELLA SOTTOTABELLA SEZIONE SALDO ------------------- -->









<!-- -------------- TABELLA ACCREDITI/ADDEBITI ----------- -->
<section>
<div class="headerContainerNoBootS">
    <div class="tableContainerNoBootS">
<h4>Definisci gli alert degli accrediti/addebiti</h4>
<table id="tableSmsAlert_1">
    <thead>
        <tr>
            <th class="left" style="width:50%">Tipologia</th>
            <th class="center wTd10">Sms</th>
            <th class="center wTd10">Email (Gratis)</th>
            <th class="center wTd10">Push (Gratis)</th>
        </tr>
    </thead>
    <tbody>
        <tr class="pari">
            <td>
                Accredito stipendio
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                        <span class="text">0,26&euro;</span>
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
        </tr>
        <tr class="dispari">
            <td>
                <span>
                    <a href="#1" class="btn-icon flLeft hideIcoAlert" id="controlSwitchIcon_4">
                       <i class="icon icon-2x icon-row_expand" id="switchIcon_4"></i>
                    </a>
                </span>
                <div class="lenghtTdAlert">
                    Accrediti superiori a
                </div>    
            </td>
            <td class="center"> 
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                        <span class="text">0,26&euro;</span>
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
        </tr>
        <tr class="dispari nascondi" id="control_4">
            <td class="borderTopNo">
                <!-- -->
                    <div class="floating-box sizeInputAlert">
                        <input type="text" class="form-control clear-x">
                    </div>
                    <div class="floating-box">
                     ,00   
                    </div>
                <!-- -->
            </td>
            <td class="borderTopNo"> </td>
            <td class="borderTopNo"></td>
            <td class="borderTopNo"></td>
        </tr>
        <tr class="dispari">
            <td>
               <span> 
                <a href="#1" class="btn-icon flLeft hideIcoAlert" id="controlSwitchIcon_5" >
                    <i class="icon icon-2x icon-row_expand" id="switchIcon_5"></i>
                </a>     
                </span>
                <div class="lenghtTdAlert">
                    Addebiti superiori a
                </div>
            </td>
            <td class="center"> 
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                        <span class="text">0,26&euro;</span>
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
        </tr>
        <tr  class="dispari nascondi" id="control_5">
            <td class="borderTopNo">
                <!-- -->
                    <div class="floating-box sizeInputAlert">
                        <input type="text" class="form-control clear-x">
                    </div>
                    <div class="floating-box">
                     ,00   
                    </div>
                <!-- -->
            </td>
            <td class="borderTopNo"></td>
            <td class="borderTopNo"></td>
            <td class="borderTopNo"></td>
        </tr>
        <tr class="pari">
            <td>
                Addebiti direct debit
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                        <span class="text">0,26&euro;</span>
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
        </tr>
    </tbody>
</table>
</div>
    </div>
</section>
<!-- END TABELLA ACCREDITI/ADDEBITI -->




<!-- GESTIONE DELLA SOTTOTABELLA SEZIONE ACCREDITI/ADDEBITI  -->
    <script type="text/javascript">
 //Apertura e chiusura sottotabelle 
        $(function() {
            $('#controlSwitchIcon_4').click(function() {
                $('#control_4').toggle();
                if($('#control_4').is(":visible")){
                    
                    $('#switchIcon_4').removeClass('icon-row_expand');
                    $('#switchIcon_4').addClass('icon-row_contract');
  
                }else{
                    $('#switchIcon_4').removeClass('icon-row_contract');
                    $('#switchIcon_4').addClass('icon-row_expand');
                }
            });


            $('#controlSwitchIcon_5').click(function() {
                $('#control_5').toggle();
                if($('#control_5').is(":visible")){
                    
                    $('#switchIcon_5').removeClass('icon-row_expand');
                    $('#switchIcon_5').addClass('icon-row_contract');
                }else{
                    $('#switchIcon_5').removeClass('icon-row_contract');
                    $('#switchIcon_5').addClass('icon-row_expand');
                }
            });

        });

    </script>


<!-- END GESTIONE DELLA SOTTOTABELLA ACCREDITI/ADDEBITI -->






<!-- ******************* Tabella 3 F24 ********************* -->
<section>
<div class="headerContainerNoBootS">
    <div class="tableContainerNoBootS">
<h4>Definisci gli alert dell' F24 (Questi alert si attivano automaticamente su tutti i conti correnti) </h4>
<table>
    <thead>
        <tr>
            <th class="left" style="width:50%">Tipologia</th>
            <th class="center wTd10">Sms</th>
            <th class="center wTd10">Email (Gratis)</th>
            <th class="center wTd10">Push (Gratis)</th>
        </tr>
    </thead>
    <tbody>
        <tr class="dispari">
            <td class="left">
                Prenotazione F24
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                        <span class="text">Gratis</span>
                    </label>
                </div>
            </td>
            <td class="center">
                <input type="checkbox">
            </td>
            <td class="center">
                <input type="checkbox">
            </td>
        </tr>
        <tr class="pari">
            <td>Annullamento F24</td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                        <span class="text">0,26&euro;</span>
                    </label>
                </div>
            </td>
            <td class="center">
                <input type="checkbox">
            </td>
            <td class="center">
                <input type="checkbox">
            </td>
        </tr>
        <tr class="dispari">
            <td>
                    F24 eseguito/non eseguito
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                        <span class="text">0,26&euro;</span>
                    </label>
                </div>  
            </td>
            <td class="center">
                <input type="checkbox">
            </td>
            <td class="center">
                <input type="checkbox">
            </td>
        </tr>
    </tbody>
</table>
</div>
</div>
</section>

<!-- ******************** END Tabella 3 - F24 ******************** -->





<!-- ******************* Tabella 4 F23 ********************* -->
<section>
<div class="headerContainerNoBootS">
    <div class="tableContainerNoBootS">
<h4>Definisci gli alert dell' F23 (Questi alert si attivano automaticamente su tutti i conti correnti) </h4>
<table>
    <thead>
        <tr>
            <th class="left" style="width:50%">Tipologia</th>
            <th class="center wTd10">Sms</th>
            <th class="center wTd10">Email (Gratis)</th>
            <th class="center wTd10">Push (Gratis)</th>
        </tr>
    </thead>
    <tbody>
        <tr class="dispari">
            <td>
                Prenotazione F23
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                        <span class="text">Gratis</span>
                    </label>
                </div>
            </td>
            <td class="center">
                <input type="checkbox">
            </td>
            <td class="center">
                <input type="checkbox">
            </td>
        </tr>
        <tr class="pari">
            <td>Annullamento F23</td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                        <span class="text">0,26&euro;</span>
                    </label>
                </div>
            </td>
            <td class="center">
                <input type="checkbox">
            </td>
            <td class="center">
                <input type="checkbox">
            </td>
        </tr>
        <tr class="dispari">
            <td>
                    F24 eseguito/non eseguito
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                        <span class="text">0,26&euro;</span>
                    </label>
                </div>  
            </td>
            <td class="center">
                <input type="checkbox">
            </td>
            <td class="center">
                <input type="checkbox">
            </td>
        </tr>
    </tbody>
</table>
</div>
</div>
</section>

<!-- ******************** END Tabella 4- F23 ******************** -->




<section>
    <div class="form-group btnWrapper">
        <div class="btn-align-right">
            <a type="button" class="btn btn-primary" id="">salva impostazioni</a>
        </div>
        <br class="clear">
    </div>
</section>


    </div> <!-- END panel-nofill -->
</div> <!-- END navContFirstLev outerTab -->



<!-- OVERLAYER COSTI SMS -->

 <div class="modal fade" id="layerSepa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close">
                    <i class="icon icon-alert_error_fill icon-2x"></i >
                </a>
                <h2 class="modal-title" id="myModalLabel"></h2>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                        <section>
                            <p>
                                Il costo degli SMS inviati <strong>dal cliente verso la banca</strong> varia in funzione del proprio piano tariffario, ad eccezione dei clienti <strong>TIM</strong> per i quali gli SMS inviati alla banca sono <strong>gratuiti.</strong>
                                Il <strong>costo</strong> degli SMS inviati <strong>dalla banca al cliente</strong> varia sia in funzione dell'operatore telefonico sia relativamente alla <strong>tipologia del messaggio</strong> richiesto.
                                Nella tabella di seguito il dettaglio di tali costi, che vengono addebitati direttamente dall'operatore sul <strong>credito telefonico.</strong>
                                I prezzi sono iva inclusa
                            </p>
                            </section>



                        <section>

                            <div class="headerContainerNoBootS">
                                <div class="tableContainerNoBootS">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>Servizio</th>
                                            <th>Wind</th>
                                            <th>Vodafone</th>
                                            <th>Tre</th>
                                            <th>Tim</th>
                                            <th>Poste Mobile</th>
                                            <th>Coop Voce</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td colspan="7" class="center"><h4>Sms a richiesta</h4></td> 
                                        </tr>
                                        <tr class="dispari">
                                            <td class="">Saldo conto corrente o deposito</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                        </tr>
                                        <tr class="pari">
                                            <td class="">Ultimi 4 movimenti conto corrente o deposito</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                        </tr>
                                        <tr class="dispari">
                                            <td class="">Controvalore portafoglio titoli</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                        </tr>
                                        <tr class="pari">
                                            <td class="">Ricerca titolo</td>
                                            <td class="">0</td>
                                            <td class="">0</td>
                                            <td class="">0</td>
                                            <td class="">0</td>
                                            <td class="">0</td>
                                            <td class="">0</td>
                                        </tr>
                                        <tr class="dispari">
                                            <td class="">Quotazione titoli</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                        </tr>
                                        <tr class="pari">
                                            <td class="">Indici di borsa</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                        </tr>
                                        <tr class="dispari">
                                            <td class="">Messaggi inviati</td>
                                            <td class="">0,124€</td>
                                            <td class="">s.p.t.*</td>
                                            <td class="">0,124€</td>
                                            <td class="">0</td>
                                            <td class="">0,124€</td>
                                            <td class="">0,124€</td>
                                        </tr>
                                         <tr class="">
                                            <td colspan="7" class="center"><h4>Sms automatici</h4></td>
                                        </tr>
                                        <tr class="dispari">
                                            <td class="">Saldo</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                        </tr>
                                        <tr class="pari">
                                            <td class="">Quotazione titolo</td>
                                            <td class="">0,15€</td>
                                            <td class="">0,16€</td>
                                            <td class="">0,16€</td>
                                            <td class="">0,15€</td>
                                            <td class="">0,15€</td>
                                            <td class="">0,15€</td>
                                        </tr>
                                        <tr class="dispari">
                                            <td class="">Controvalore portafoglio titoli</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                        </tr>
                                        <tr class="pari">
                                            <td class="">Saldo contabile negativo</td>
                                            <td class="">0</td>
                                            <td class="">0</td>
                                            <td class="">0</td>
                                            <td class="">0</td>
                                            <td class="">0</td>
                                            <td class="">0</td>
                                        </tr>
                                        <tr class="dispari">
                                            <td class="">Saldo disponibile negativo</td>
                                            <td class="">0</td>
                                            <td class="">0</td>
                                            <td class="">0</td>
                                            <td class="">0</td>
                                            <td class="">0</td>
                                            <td class="">0</td>
                                        </tr>
                                        <tr class="pari">
                                            <td class="">Saldo contabile inferiore alla soglia impostata</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                        </tr>
                                        <tr class="dispari">
                                            <td class="">Saldo disponibile inferiore alla soglia impostata</td>
                                            <td class="">0,25€</td><td class="">0,26€</td><td class="">0,26€</td>
                                            <td class="">0,25€</td><td class="">0,25€</td><td class="">0,25€</td>
                                        </tr>
                                         <tr class="pari">
                                            <td class="">Accredito stipendio</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                        </tr>
                                        <tr class="dispari">
                                            <td class="">Accredito superiore alla soglia impostata</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                        </tr>
                                        <tr class="pari">
                                            <td class="">Addebito superiore alla soglia impostata</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                        </tr>
                                        <tr class="dispari">
                                            <td class="">Trasferimento da c/c a deposito superiore alla soglia
                                             impostata</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                        </tr>
                                        <tr class="pari">
                                            <td class="">Trasferimento da deposito a c/c superiore alla soglia 
                                            impostata</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                        </tr>
                                        <tr class="dispari">
                                            <td class="">Addebito diretto Sepa</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                        </tr>
                                        <tr class="pari">
                                            <td class="">
                                                Trasferimento da c/c per superamento soglia massima
                                            </td>
                                            <td class="">0,25€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                        </tr>
                                        <tr class="dispari">
                                            <td class="">Trasferimento a c/c per superamento soglia minima</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                        </tr>
                                        <tr class="pari">
                                            <td class="">Prenotazioni F24</td>
                                            <td class="">0</td>
                                            <td class="">0</td>
                                            <td class="">0</td>
                                            <td class="">0</td>
                                            <td class="">0</td>
                                            <td class="">0</td>
                                        </tr>
                                        <tr class="dispari">
                                            <td class="">F24 eseguito/non eseguito</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                        </tr>
                                        <tr class="pari">
                                            <td class="">Annullamento F24</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                        </tr>
                                        <tr class="dispari">
                                            <td class="">Prenotazioni F23</td>
                                            <td class="">0</td>
                                            <td class="">0</td>
                                            <td class="">0</td>
                                            <td class="">0</td>
                                            <td class="">0</td>
                                            <td class="">0</td>
                                        </tr>
                                        <tr class="pari">
                                            <td class="">F23 eseguito/non eseguito</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                        </tr>
                                        <tr class="dispari">
                                            <td class="">Annullamento F23</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                        </tr>
                                        <tr class="pari">
                                            <td class="">Prelievi</td>
                                            <td class="">0,15€</td>
                                            <td class="">0,16€</td>
                                            <td class="">0,16€</td>
                                            <td class="">0,15€</td>
                                            <td class="">0,15€</td>
                                            <td class="">0,15€</td>
                                        </tr>
                                        <tr class="dispari">
                                            <td class="">Pagamenti</td>
                                            <td class="">0,15€</td>
                                            <td class="">0,16€</td>
                                            <td class="">0,16€</td>
                                            <td class="">0,15€</td>
                                            <td class="">0,15€</td>
                                            <td class="">0,15€</td>
                                        </tr>
                                        <tr class="pari">
                                            <td class="">Eseguiti di Borsa totali</td>
                                            <td class="">0,15€</td>
                                            <td class="">0,16€</td>
                                            <td class="">0,16€</td>
                                            <td class="">0,15€</td>
                                            <td class="">0,15€</td>
                                            <td class="">0,15€</td>
                                        </tr>
                                        <tr class="dispari">
                                            <td class="">Eseguiti di Borsa parziali</td>
                                            <td class="">0,15€</td>
                                            <td class="">0,16€</td>
                                            <td class="">0,16€</td>
                                            <td class="">0,15€</td>
                                            <td class="">0,15€</td>
                                            <td class="">0,15€</td>
                                        </tr>
                                        <tr class="pari">
                                            <td class="">Superamento soglia impostata sui titoli di borsa</td>
                                            <td class="">0,15€</td>
                                            <td class="">0,16€</td>
                                            <td class="">0,16€</td>
                                            <td class="">0,15€</td>
                                            <td class="">0,15€</td>
                                            <td class="">0,15€</td>
                                        </tr>
                                        <tr class="dispari">
                                            <td class="">Superamento soglia impostata su indici di borsa</td>
                                            <td class="">0,15€</td>
                                            <td class="">0,16€</td>
                                            <td class="">0,16€</td>
                                            <td class="">0,15€</td>
                                            <td class="">0,15€</td>
                                            <td class="">0,15€</td>
                                        </tr>
                                        <tr class="pari">
                                            <td class="">Quotazione indice periodico</td>
                                            <td class="">0,15€</td>
                                            <td class="">0,16€</td>
                                            <td class="">0,16€</td>
                                            <td class="">0,15€</td>
                                            <td class="">0,15€</td>
                                            <td class="">0,15€</td>
                                        </tr>
                                        <tr class="dispari">
                                            <td class="">Blocco utente</td>
                                            <td class="">0,15€</td>
                                            <td class="">0,16€</td>
                                            <td class="">0,16€</td>
                                            <td class="">0,15€</td>
                                            <td class="">0,15€</td>
                                            <td class="">0,15€</td>
                                        </tr>
                                        <tr class="pari">
                                            <td class="">Inserimento ordini di borsa condizionati</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                        </tr>
                                        <tr class="dispari">
                                            <td class="">Alert di mercato</td>
                                            <td class="">0,15€</td>
                                            <td class="">0,16€</td>
                                            <td class="">0,16€</td>
                                            <td class="">0,15€</td>
                                            <td class="">0,15€</td>
                                            <td class="">0,15€</td>
                                        </tr>
                                        <tr class="pari">
                                            <td class="">Accesso al sito</td>
                                            <td class="">0,15€</td>
                                            <td class="">0,16€</td>
                                            <td class="">0,16€</td>
                                            <td class="">0,15€</td>
                                            <td class="">0,15€</td>
                                            <td class="">0,15€</td>
                                        </tr>
                                        <tr class="dispari">
                                            <td class="">Val. quota/NAV e variazioni%</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                        </tr>
                                        <tr class="pari">
                                            <td class="">Superamento soglia impostata su Fondi</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                        </tr>
                                        <tr class="dispari">
                                            <td class="">Superamento soglia impostata su variaz ultimo giorno Fondi</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                        </tr>
                                        <tr class="pari">
                                            <td class="">Superamento soglia impostata su variaz ultimo anno Fondi</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,26€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                            <td class="">0,25€</td>
                                        </tr>
                                        <tr class="dispari">
                                            <td class=""> 
                                            <span class="txthelp"><strong class="closeable" data-title="
                                                        Nelle disposizioni online sono compresi:
                                                        <ul>
                                                        <li>bonifici</li>
                                                        <li>ricarica carte prepagate</li>
                                                        <li>ricariche cellulari</li>
                                                        <li>modifica massimali bancomat</li>
                                                        <li>attiva utilizzo bancomat all'estero</li>
                                                        <li>Ricarica ATM</li>
                                                        <li>Bollo auto</li>
                                                        </ul>" data-toggle="tooltip" data-original-title="" title="">
                                                        Disposizioni online tipo 1</strong></span>
                                            </td>
                                            <td colspan="6" class="center">Gratis per sempre</td>
                                        </tr>
                                        <tr class="pari">
                                            <td class="">
                                                <span class="txthelp"><strong class="closeable" data-title="
                                                        Nelle disposizioni online sono compresi:
                                                        <ul>
                                                        <li>giroconto</li>
                                                        <li>bollettini postali</li>
                                                        <li>RiBa</li>
                                                        <li>Mav</li>
                                                        <li>Rav</li>
                                                        </ul>" data-toggle="tooltip" data-original-title="" title="">
                                                        Disposizioni online tipo 2</strong></span>
                                            </td>

                                            <td class="">0</td>
                                            <td class="">0</td>
                                            <td class="">0</td>
                                            <td class="">0</td>
                                            <td class="">0</td>
                                            <td class="">0</td>
                                        </tr>
                                        </tbody>
                                     </table>
                                       <p class="note"> *Secondo piano tariffario</p>
                                </div>
                            </div>

                        </section>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!--END  OVERLAYER COSTI SMS -->




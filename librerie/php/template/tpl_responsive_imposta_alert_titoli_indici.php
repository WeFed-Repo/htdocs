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
            <li class=""><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_imposta_alert.php&responsive=y&liv0=0&liv1=1&liv2=0&liv3=1#">Conto</a></li>
            <li class=""><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_imposta_alert_deposito.php&responsive=y&liv0=0&liv1=1&liv2=0&liv3=1#">Deposito</a></li>
            <li class=""><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_imposta_alert_bancomat.php&responsive=y&liv0=0&liv1=1&liv2=0&liv3=1#">Bancomat</a></li>
            <li class=""><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_imposta_alert_trading.php&responsive=y&liv0=0&liv1=1&liv2=0&liv3=1#">Trading</a></li>
            <li class="on"><a href="#">Titoli e indici</a></li>
            <li class=""><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_imposta_alert_fondi_sicav.php&responsive=y&liv0=0&liv1=1&liv2=0&liv3=1#">Fondi e sicav</a></li>
            <li class=""><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_imposta_alert_sicurezza.php&responsive=y&liv0=0&liv1=1&liv2=0&liv3=1#">Sicurezza</a></li>
        </ul>
    </div>
    <div class="separator"></div>
    <div class="panel-nofill">
</section>


<!-- SCELTA OPERAZIONE  -->
<section>
<h4>Visualizza alert sulle quotazioni titoli e indici</h4>
<div class="form-group btnWrapper">
    <div class="btn-align-left">
        <a type="button" class="btn btn-primary" id=""  href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_imposta_alert_titoli_1.php&responsive=y&liv0=0&liv1=1&liv2=0&liv3=1#">aggiungi alert per titolo</a>
    </div>
    <div class="btn-align-left">
        <a type="button" class="btn btn-primary" id="" href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_imposta_alert_indici_1.php&responsive=y&liv0=0&liv1=1&liv2=0&liv3=1#">aggiungi alert per indice</a>
    </div>
    <br class="clear">
</div>
</section>
<!-- END SCELTA OPERAZIONE  -->





<!-- TABELLA TITOLI -->
<h4>Definisci gli alert dei titoli</h4>
<div class="headerContainerNoBootS">
    <div class="tableContainerNoBootS">
    <table class="activetable">
    <thead>
        <tr>
            <th>
                
            </th>
            <th class="alertLenght_300px">
                Quotazioni titoli
            </th>
            <th class="alertLenght_220px">
                Periodicit&agrave; invio
            </th>
            <th class="alertLenght_200px">
                Invio alert <br/> 
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                        <span class="text" style="margin-left: -6px;  margin-right: 20px;">Sms</span>
                    </label>

                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                        <span class="text" style="margin-left: -6px;">Email</span>
                    </label>
                </div>
            </th>
            <th class="alertLenght_100px">
                Elimina
            </th>
        </tr>
    </thead>
    <tbody>
        <tr  class="headerrow">
           <td class="openercontainer no_rightborder">
               
               <a alt="Apri" class="cambia" onclick="javascript: activetabledetail(this);" href="javascript:;"> 
                     <i class="icon icon-2x icon-row_expand" id="test1"></i>
               </a>
           </td>
            <td>
                <a href="#1" class="btn-icon">A2A</a>
            </td>
            <td colspan="2">settimanale - Martedì Ore 1</td>
            <td  class="center"> 
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
        </tr>
        <tr class="closed">
            <td></td>
            <td>simbolo A2A</td>
            <td>Ultima Quotazione 1,229</td>
            <td>Mercato MTA</td>
            <td>Divisa EUR</td>
        </tr>
    </tbody>
    </table>
    </div>
</div>

<!-- END TABELLA TITOLI -->







<!-- TAbella INDICI -->

<h4>Definisci gli alert dei titoli</h4>
<div class="headerContainerNoBootS">
    <div class="tableContainerNoBootS">
    <table class="activetableIndici">
    <thead>
        <tr>
            <th>
                
            </th>
            <th class="alertLenght_300px">
                Quotazioni indici
            </th>
            <th class="alertLenght_220px">
                Periodicit&agrave; invio
            </th>
            <th class="alertLenght_200px">
                Invio alert <br/> 
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                        <span class="text" style="margin-left: -6px;  margin-right: 20px;">Sms</span>
                    </label>

                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                        <span class="text" style="margin-left: -6px;">Email</span>
                    </label>
                </div>
            </th>
            <th class="alertLenght_100px">
                Elimina
            </th>
        </tr>
    </thead>
    <tbody>
        <tr  class="headerrow">
           <td class="openercontainer no_rightborder">
               
               <a alt="Apri" class="cambia" onclick="javascript: activetabledetailIndici(this);" href="javascript:;"> 
                     <i class="icon icon-2x icon-row_expand" id="testIndice"></i>
               </a>
           </td>
            <td>
                NASDAQ 100
            </td>
            <td colspan="2">settimanale -Lunedì Ore 1</td>
            <td  class="center"> 
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
        </tr>
        <tr class="closed">
            <td></td>
            <td></td>
            <td>Ultima Quotazione 4512,541</td>
            <td>Mercato EQNQ</td>
            <td></td>
        </tr>
    </tbody>
    </table>
    </div>
</div>

<!-- END TABELLA INDICI-->




<div class="form-group btnWrapper">

    <div class="btn-align-right">
        <a type="button" class="btn btn-default">elimina selezionato</a>
    </div>
    <div class="btn-align-right">
        <a type="button" class="btn btn-primary" id="">salva impostazioni</a>
    </div>
    <br class="clear">
</div>




    </div>  <!-- END panel-nofill -->
</div>  <!-- END navContFirstLev outerTab -->








<script type="text/javascript">
/* TABELLA AD ESPANSIONE Azioni */
function activetabledetail (button, rowHeadingClass)
{
    var rigaorigine = $(button).parent().parent();
    var tuttelerighe = $('.activetable tr');
    $('.activetable').find('.openercontainer').parent().addClass('headerrow');
    
    if(rigaorigine.attr('class') !==undefined){var rigaorigineClass = rigaorigine.attr('class')}
    else {var rigaorigineClass = ' '};
    
    
    if ($(rigaorigine).hasClass('opened')) 
    {
        $(rigaorigine).nextUntil('.headerrow').attr('class','closed');
        $(rigaorigine).removeClass('opened');
         $("#test1").removeClass("icon-row_contract").addClass("icon-row_expand");
    } 
    else 
        {
            $(rigaorigine).nextUntil("tr:visible").attr('class','detailrow');
            $(rigaorigine).addClass('opened');
            $("#test1").removeClass("icon-row_expand").addClass("icon-row_contract");

        }   
}
/* FINE TABELLA AD ESPANSIONE Azioni */



/* TABELLA AD ESPANSIONE Indici */

function activetabledetailIndici (button, rowHeadingClass)
{
    var rigaorigine = $(button).parent().parent();
    var tuttelerighe = $('.activetableIndici tr');
        $('.activetableIndici').find('.openercontainer').parent().addClass('headerrow');
 
    if(rigaorigine.attr('class') !==undefined){
        var rigaorigineClass = rigaorigine.attr('class');
    }else {
        var rigaorigineClass = ' ';
    };
    
 
    if ($(rigaorigine).hasClass('opened')) 
    {
        $(rigaorigine).nextUntil('.headerrow').attr('class','closed');
        $(rigaorigine).removeClass('opened');
         $("#testIndice").removeClass("icon-row_contract").addClass("icon-row_expand");
         console.log("ddd");
    } 
    else 
        {
            $(rigaorigine).nextUntil("tr:visible").attr('class','detailrow');
            $(rigaorigine).addClass('opened');
            $("#testIndice").removeClass("icon-row_expand").addClass("icon-row_contract");
                console.log("vvv");
        }   
}

/* FINE TABELLA AD ESPANSIONE Indici */


</script>




<!--style>
    /* Tabella interattiva */
.activetable tr.closed {display: none;}
.activetableIndici tr.closed {display: none;}




.alertLenght_300px{
    min-width: 300px;
}

.alertLenght_220px{
    min-width: 220px;
}

.alertLenght_200px{
   min-width: 200px;
}

.alertLenght_100px{
    min-width: 100px;
}



@media screen and (max-width: 767px) {

    .alertLenght_300px{
        min-width: 200px;
    }

    .alertLenght_220px{
        min-width: 180px;
    }

    .alertLenght_200px{
       min-width: 150px;
    }

    .alertLenght_100px{
        min-width: 90px;
    }

}
</style-->




<!-- titolo e stepper oggetti già esistenti-->
<section>
	<div class="titolo">
		<h1>
			<div class="row">
				<div class="col-sm-8">
					<span>Bonifico ordinario/veloce</span>
				</div>
                <?php 
					if ($site == "youweb") 
				
					{
				?>
                <div class="col-sm-4">	
			 		<div class="pager pull-right">
						<div class="circle">1</div>
						<div class="circle current_page">2</div>
						<div class="circle">3</div>
                        <div class="circle">4</div>
					</div>
				</div>
                <?php
					}
				?>
			</div>
		</h1>
	</div>
</section>
<!-- BOX DI SCELTA BONIFICO
servono tre classi: available, active, not-available-->
<section>
  <div class="row flex-desktop box-type-wrapper has-bottom-tip"> <!-- la classe has-bottom-tip appenderla solo se c'è il tip di suggerimento-->
        <div class="col-xs-12 col-sm-4 ">
            <div class="box-type available">
                 <div class="box-type-header">
                     <div class="ordinario">
                         <h3>Ordinario</h3>
                         <span>Scelgo la data…</span>
                </div>
                 </div>
                 <div class="box-type-body">
                   		<div class="row">
						    <div class="col-xs-6 col-sm-12 col-lg-6 field-space noPaddingRight">
                                <label class="control-label" for="causale">Data esecuzione</label>
                                <div class="form-field">
                                    <div class="datepicker-inline">
                                        <input type="text" name="dataesecuzione" id="dataesecuzione" maxlength="10" class="form-control datepicker">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-12 col-lg-6 field-space">
                                <label class="control-label" for="causale">Data accredito</label>
                                <div>
                                    <a href="#" class="text-link"><strong>Tempi di esecuzione</strong></a>
                                </div>
                            </div>
                        </div>
                   
                    
                        <div class="row">
                            <div class="col-xs-6 col-sm-12 col-lg-6 field-space">
                                <label class="control-label" for="causale">Commissione</label>
                                <div class="form-field">
                                   <span class="field-output">0,51 EUR</span>
                                </div>
                            </div>
                        </div>
                    
                 </div>
                 <div class="box-type-footer">SCEGLI</div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="box-type not-available">
                <div class="box-type-header"> 
                     <div class="urgente">
                        <h3>Urgente</h3>
                        <span>Ho fretta.</span>
                    </div>
                 </div>
                 <div class="box-type-body"><p><strong>NON DISPONIBILE</strong><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p></div>
                 
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="box-type available">
                 <div class="box-type-header">
                    <div class="istantaneo">
                         <h3>Istantaneo</h3>
                         <span>Ho molta fretta!</span>
                    </div>
                 </div>
                 <div class="box-type-body">
                    <div class="row">
                        <div class="col-xs-6 col-sm-12 col-lg-6 field-space noPaddingRight">
                            <label class="control-label" for="causale">Data esecuzione</label>
                            <div class="form-field">
                                <span class="field-output">15/04/2021</span>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-12 col-lg-6 field-space">
                            <label class="control-label" for="causale">Data accredito</label>
                            <div class="form-field">
                                <span class="field-output">10 SECONDI</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-12 col-lg-6 field-space">
                            <label class="control-label" for="causale">Commissione</label>
                            <div class="form-field">
                                <span class="field-output">1,00 EUR</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-type-footer">SCEGLI</div>
                <!--elemento tip -->
               
                <div class="tip bottom">
                    <div class="tip-arrow"></div>
                    <div class="tip-text w-align-right">Scegli il bonifico istantaneo, è conveniente!</div>
                </div>
               
            </div>
        </div>
   </div>                
</section>
<section>
    <!--bottoniera speciale con ancora a elemento sottostante -->
    <div class="form-group btn-wrapper-text-in" id="anchorPoint">
        <div class="row">
            <div class="col-xs-6 col-sm-3">
                <a type="button" href="#" class="btn btn-default" title="prosegui" id="btnInvio">Indietro</a>
            </div>
            <div class="col-xs-6 col-sm-3 col-sm-push-6">
                <a type="button" href="#" class="btn btn-primary flRight" title="prosegui" id="btnInvio">Prosegui</a>
            </div>
            <div class="col-xs-12 col-sm-6 col-sm-pull-3 align-center">
                 <p><strong>Quale tipo di bonifico scegliere?</strong></p>
                 <p><span>Scorri per avere più informazioni</span></p>
                 <a id="goToAnchorPoint" href="javascript:;" class="no-underline"><i class="icon icon-arrow_down icon-2x" title="icon-arrow_down"></i></a>
            </div>       
        </div>
        <script type="text/javascript">
            var ancora =  $("#anchorPoint")
            $("#goToAnchorPoint").on("click", function(){setElementonView(ancora)});
        </script>
    </div>
 </section>
 
    
    <!--tabella confronto bonifici -->
    <section>
    
        <table class="table-mobile-estesa" id="tableConfrontaBonifici">
            <!-- intestazione di tabella con contenuti alternativi desktop/mobile-->
            <thead class="visible-xs">
                <tr>
                    <th rowspan="2" colspan="2">Ordinario</th>
                    <th colspan="2" class="no-border-bottom">Veloce</th>
                    <th colspan="2" class="no-border-bottom">Veloce</th>
                </tr>
                <tr>
                    <th colspan="2">Urgente</th>
                    <th colspan="2">Istantaneo</th>
                </tr>
                
            </thead>
            <thead class="hidden-xs">
                <tr>
                    <th rowspan="2" class="empty"></th> 
                    <th rowspan="2">Ordinario</th>
                    <th colspan="2">Veloce</th>
                </tr>
                <tr>
                    <th width="25%">Urgente</th>
                    <th width="25%">Istantaneo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="label-row">Dove posso inviare il bonifico?</td>
                    <td class="align-center"><a href="#" class="text-link">Area SEPA ed extra SEPA</a></td>
                    <td class="align-center">Solo area <a href="#" class="text-link">SEPA</a></td>
                    <td class="align-center">Solo area <a href="#" class="text-link">SEPA</a> (l’iban del beneficiario deve essere abilitato alla ricezione dei bonifici istantanei)</td>
                </tr>
                <tr>
                    <td class="label-row">Quando viene accreditato l’importo sul conto del beneficiario?</td>
                    <td class="align-center">
                        <span class="line-text-table"><a href="#" class="text-link">SEPA:</a><strong> Entro il giorno lavorativo successivo</strong> (con valuta euro)</span>
                        <a href="#" class="text-link">Extra SEPA:</a><strong> Da 2 a 7 giorni lavorativi</strong> a seconda del paese di destinazione</td>
                    <td class="align-center"><strong>In giornata</strong><br><span class="font-table-small">(Solo area <a href="#" class="text-link">SEPA</a>)</span></td>
                    <td class="align-center"><strong>Entro 10 secondi</strong><br><span class="font-table-small">(Solo area <a href="#" class="text-link">SEPA</a>)</span></td>
                </tr>
                <tr>
                    <td class="label-row">Quando posso inserire il bonifico?</td>
                    <td class="align-center"><strong>Tutti i giorni</strong><br>a qualsiasi ora</td>
                    <td class="align-center"><strong>Solo i giorni feriali</strong><br>dalle 08:00 alle 15:30</td>
                    <td class="align-center"><strong>Tutti i giorni</strong><br>a qualsiasi ora</td>
                </tr>
                <tr>
                    <td class="label-row">Quale importo posso trasferire?</td>
                    <td class="align-center">Fino a un massimodi 50.000 € a operazione<br><a href="#" class="text-link font-table-small">(salvo tuoi massimali giornalieri/mensili)</a></td>
                    <td class="align-center">Fino a un massimodi 50.000 € a operazione<br><a href="#" class="text-link font-table-small">(salvo tuoi massimali giornalieri/mensili)</a></td>
                    <td class="align-center">Fino a un massimodi 15.000 € a operazione<br><a href="#" class="text-link font-table-small">(salvo tuoi massimali giornalieri/mensili)</a></td>
                </tr>
                <tr>
                    <td class="label-row">Il bonifico è revocabile?</td>
                    <td class="align-center">S&igrave;<br><a href="#" class="text-link font-table-small">Dettagli</a></td>
                    <td class="align-center">S&igrave;<br><a href="#" class="text-link font-table-small">Dettagli</a></td>
                    <td class="align-center">No<br><a href="#" class="text-link font-table-small">Dettagli</a></td>
                </tr>
                <tr>
                    <td class="label-row">Quanto costa?</td>
                    <td class="align-center">
                        <span class="line-text-table"><a href="#" class="text-link">SEPA:</a>(in valuta Euro eccetto<a href="#" class="text-link">i paesi extra Reg CE 924):</a><br>
                            <strong>min 0,00€ - max 0,50€</strong>
                        </span>
                        <a href="#" class="text-link">ExtraSEPA:</a>+ <a href="#" class="text-link">SEPA</a> in valuta estera + <a href="#" class="text-link">i paesi extra Reg CE 924):</a><br>
                        *<strong>commissioni</strong> da 15,50 a 20€ <span class="font-table-small">(in base al paese di destinazione)</span> + lo 0,2% dell'importo trasferito (min 3,50€)
                        
                        <strong>Da 2 a 7 giorni lavorativi</strong> a seconda del paese di destinazione</td>
                    <td class="align-center">Solo area <a href="#" class="text-link">SEPA</a><br>
                    *<strong>commissioni</strong> min 1,50€ - max 5,16€ + *<strong>spese</strong> fino allo 0,1% dell'importo trasferito  <span class="font-table-small">(dipende dal conto di destinazione)</span></td>
                    <td class="align-center">Solo area <a href="#" class="text-link">SEPA</a><br>
                    *<strong>commissioni</strong> min 1,50€ - max 5,16€ + *<strong>spese</strong> fino allo 0,1% dell'importo trasferito <span class="font-table-small">(dipende dal conto di destinazione)</span></td>
                </tr>
            </tbody>
        </table>
   
<section>





<script type="text/javascript">

//trasformazione della tabella su mobile da esternalizzare a regime di tpl in funzioni convergenza
var params = {
    "id" : "tableConfrontaBonifici",
    //numero delle tabelle da agiungere
    "numbersOfClone": 2,
    "mobileResolution": 767,
    "cellSpacMobile" :15
}
var setMobileMultipleTable = function(params) {
    var tableId = params.id,
        tabelObj = $("#"+ tableId),
        rows = tabelObj.find("tbody tr");
        tabelObj.wrap('<div class="table-estesa-wrapper">');
        rows.each(function(index,el) {
           var htmlcellToClone = $(el).find(".label-row").text();
            for(i=1;i<=params.numbersOfClone;i++) {
                $('<td class="label-row visible-xs">' + htmlcellToClone +'</td>').insertBefore($(el).find("td:not('.label-row')").eq(i))
            }
        });
        $(window).on("resize",function(){
            resizeMobMultTable(tabelObj,params.mobileResolution, params.numbersOfClone,params.cellSpacMobile);
        })
        resizeMobMultTable(tabelObj,params.mobileResolution, params.numbersOfClone, params.cellSpacMobile);
    
}
var resizeMobMultTable = function(tableEl,mobileRes,nC,cellSpac) {
    if ($(window).width()< mobileRes) {
        tableEl.css({
            "width": 100 * (nC+1) - (nC)*cellSpac +'%'
        })
        tableEl.find("th").css({
            "width": 100/(nC+1) + '%'
        })
    }
    else {
        tableEl.removeAttr( 'style' );
        tableEl.find("th").removeAttr( 'style' );
    }
}

setMobileMultipleTable(params);


// emulazione Inizializzazione datepicker
$(function(){
    
    $("#dataesecuzione").datepicker().datepicker("setDate",new Date());
    
   //funzione di select da esternalizzare a regime di tpl in funzioni convergenza
    var toggleSelected= function(el,classToappend) {
       $(el).each(function(index) {
            $(this).on("click", function(){
                $(el).removeClass(classToappend);
                $(this).addClass(classToappend);
        })
        })
    }
    toggleSelected('.box-type.available',"selected");

});
</script>
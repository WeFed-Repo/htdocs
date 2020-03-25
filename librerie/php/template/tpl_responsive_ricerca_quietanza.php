<h2>Ricerca quietanza F24</h2>
<section>
	<p>Puoi ricercare le quietanze delle <strong>deleghe F24</strong> in stato "eseguito" inserite dal 18/07/2015.<br>
La quietanza é disponibile entro 4 giorni lavorativi dalla data di pagamento della delega.<br>
Le ricevute di pagamento delle <strong>deleghe F23</strong> sono disponibili in "esito disposizioni".</p>
<p><strong>Arco temporale della ricerca:</strong> periodo massimo di 18 mesi.</p>
</section>



<section>	
	<div class="tithelp">
        <h4>Inserisci i parametri di ricerca</h4>
        <br class="clear">
    </div>

	<form class="formGenerico borderFormRounded" role="form" id="">           
        <div class="form-group">
            <div class="row">					
				<div class="col-sm-6 col-xs-12">
					 <label class="control-label">Conto di addebito</label> <span class="output">CC 01099 0000081500 EUR</span>
				</div> 			
				<div class="col-sm-3 col-xs-12">
					<label class="control-label">Periodo dal</label>
					<div class="form-inline">
						<div class="form-group">
						  <div class="input-group">
							 <input type="text" id="datepickerToolFrom" placeholder="gg/mm/aaaa"  class="form-control clear-x"> 
							 <div class="input-group-addon date"><i class="icon icon-calendar"></i ></div>
						  </div>
						</div>
					</div> 
				</div>  
				<div class="col-sm-3 col-xs-12">
					<label class="control-label">Al</label>
					<div class="form-inline">
						 <div class="form-group">
						  <div class="input-group">
							 <input type="text" id="datepickerToolTo" placeholder="gg/mm/aaaa"  class="form-control clear-x"> 
							 <div class="input-group-addon date"><i class="icon icon-calendar"></i ></div>
						  </div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<div class="form-group">		
			<div class="row">		
				<div class="col-xs-12 no-label">
					<div class="btn-align-left flRight">
						<a type="button" class="btn btn-primary no-margin-right" id="">Cerca</a>
					</div>
				</div>	
			</div>
		</div>
	</form>

</section>				



<section class="boxesitoWrap">
    <div class="boxesito attenzione">
        <i class="icon icon-alert_caution icon-2x"></i>
        <div class="text">
            <div class="row">
                <div class="col-sm-12">
                    <p>NON ESISTONO DISPOSIZIONI CORRISPONDENTI AI PARAMETRI SELEZIONATI.</p>
                </div>                
            </div>
        </div>
    </div>
</section>



<script type="text/javascript">
$(function() {

//inizializzazione datepicker
	
	$("#datepickerToolFrom").mask("99/99/9999");
	$("#datepickerToolFrom").datepicker({
	minDate: 1,
	showOtherMonths: true,
	showOn: "button",
	prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
	nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
	buttonImage: "/img/ret/pixel_trasp.gif",
	buttonImageOnly:true,
	beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
    onClose: function(){
    	$('#datePickerWrapper1').modal('hide');
    }
    });
   appendDatePickerIcon('datepickerToolFrom');

   $("#datepickerToolTo").mask("99/99/9999");
	$("#datepickerToolTo").datepicker({
	minDate: 1,
	showOtherMonths: true,
	showOn: "button",
	prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
	nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
	buttonImage: "/img/ret/pixel_trasp.gif",
	buttonImageOnly:true,
	beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
    onClose: function(){
    	$('#datePickerWrapper2').modal('hide');
    }
    });
   appendDatePickerIcon('datepickerToolTo');


});   
</script>


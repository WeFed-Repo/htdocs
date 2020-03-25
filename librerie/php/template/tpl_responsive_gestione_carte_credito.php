<script type="text/javascript">	
//inizializzazione datepicker

$(function () {
	
	$("#datepickerTool1").mask("99/99/9999");
	$("#datepickerTool1").datepicker({
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
   appendDatePickerIcon('datepickerTool1');
    
	});

$(function () {
	
	$("#datepickerTool3").mask("99/99/9999");
	$("#datepickerTool3").datepicker({
	minDate: 1,
	showOtherMonths: true,
	showOn: "button",
	prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
	nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
	buttonImage: "/img/ret/pixel_trasp.gif",
	buttonImageOnly:true,
	beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
    onClose: function(){
    	$('#datePickerWrapper3').modal('hide');
    }
    });
   appendDatePickerIcon('datepickerTool3');
    
	});

//END inizializzazione datepicker

//Function per nascondere e visualizzare i radio 

$(function(){

	$('#radio_2').hide();
	$('#radioPeriodo').hide();
	
	$('input[name="tipoRichiesta"]').on('click' , function(){
		if($(this).val() === "primaLinea"){
			$('#radio_2').show();
		}else{
			$('#radio_2').hide();
		}
	});

	$('input[name="modificaPlafond"]').on('click' , function(){
		if($(this).val() === "temporanea"){
			$('#radioPeriodo').show();
		}else{
			$('#radioPeriodo').hide();
		}
	});

});


//Cattura importo richiesto e valuta in quale pagina andare

$(function(){

	$("#prosegui").on('click', function(){

		var importo = $("#importoField").val();

		var urlMinore = "connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_carte_credito_step_2.php&responsive=y&liv0=2&liv1=2&liv2=1";

		var urlMaggiore = "connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_carte_credito_step_4.php&responsive=y&liv0=2&liv1=2&liv2=1";

		var secondaLinea = $("form input[type='radio']:checked").val();



		if( (importo < 1500) || (secondaLinea =="secondaLinea")){
			$(location).attr("href" , urlMinore);
		}else{
			$(location).attr("href" , urlMaggiore);
		}

	});
});


</script>

<h2>Gestione carte di credito</h2>
<section>
<div class="navContFirstLev outerTab">
	<div class="innerTab">
		<ul class="tabmedium">
			<li class="on"><a href="#">plafond - linea di credito</a></li>
			<li><a href="connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_carta_sicurezza.php&liv0=2&liv1=0&liv2=1&liv3=0&responsive=y">sicurezza<br> ed estinzione</a></li>
			<li><a href="connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_carte_credito_paga_rate.php&responsive=y&liv0=2&liv1=2&liv2=1#">Paga a rate</a></li>
			<li><a href="connect.php?page=strutt_priv.php&tpl=tpl_responsive_carte_saldo_movimenti.php&responsive=y&liv0=2&liv1=2&liv2=1#">Saldo e movimenti</a></li>
		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-nofill">
</section>	
	<section>
		<p>
			In questa pagina puoi:
		</p>
		<ul>
			<li>
				richiedere di modificare fino a 7.800 € il <strong>plafond</strong> della tua carta di credito, ovvero il <strong>limite massimo di spesa;</strong>
			</li>
			<li>
				<strong>richiedere</strong> una <a href="#" data-toggle="modal" data-target="#layerSepa">seconda linea</a> di credito (con pagamento rateale).
			</li>
		</ul>
		<p>
			La modifica plafond può essere a <strong>tempo indeterminato o temporanea,</strong> cioè valida soltanto per il periodo che definisci. Alla scadenza, il plafond tornerà automaticamente all'importo precedente. <br/>
 			In caso di <strong>approvazione,</strong> la modifica plafond o l'attivazione della seconda linea di credito avverrà dopo due giorni lavorativi.
 		</p>
	</section>

<!-- -->
<section>
    <form class="formGenerico borderFormRounded" role="form" id="formTest">
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6 ">
                    <label class="control-label">Numero carta di credito*</label> 
                    <span class="output" id="IbanId_ord">*** *** *** *591</span> 
                </div>
                <div class="col-sm-6 ">
                    <label class="control-label">Conto di addebito</label> 
                    <span class="output" id="IbanId_ord">01099 - 0000083023 - EUR</span> 
                </div>
            </div>
        </div>
        <!-- RADIO -->
        <div class="form-group">
			<div class="row">
				<div class="col-sm-12">
				<label for="" class="control-label">Richiesta</label>
            		<div class="row">
						<div class="col-sm-6 radio">
							<label class="radio-inline">
								<input type="radio" name="tipoRichiesta" value="primaLinea" >
								<span>modifica plafond prima linea</span>
	                    	</label>
                		</div>
                		<div class="col-sm-5 radio">
							<label class="radio-inline">
								<input type="radio" name="tipoRichiesta" value="secondaLinea" >
								<span>attivazione seconda linea di credito (pagamento rateale)</span>
	                    	</label>
                		</div>
            		</div>
        		</div>
    		</div>
		</div>
		<!-- END RADIO -->
		<!-- RADIO 2 -->
        <div class="form-group" id="radio_2">
			<div class="row">
				<div class="col-sm-6">
				<label for="" class="control-label">Tipo di modifica plafond</label>
            		<div class="row">
						<div class="col-sm-7 radio">
							<label class="radio-inline">
								<input type="radio" name="modificaPlafond" value="indeterminato">
								<span>a tempo indeterminato</span>
	                    	</label>
                		</div>
                		<div class="col-sm-5 radio">
							<label class="radio-inline">
								<input type="radio" name="modificaPlafond" value="temporanea" >
								<span>temporanea</span>
	                    	</label>
                		</div>
            		</div>
        		</div>
				<div class="col-sm-6" id="radioPeriodo">
				<label class="control-label">Periodo* (massimo 3 mesi)</label>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-inline">
							  <div class="form-group">
								  <div class="input-group">
								     <div class="input-group-addon first">Dal</div>
								     <input type="text" id="datepickerTool1" placeholder="gg/mm/aaaa"  class="form-control clear-x"> 
								     <div class="input-group-addon date"><i class="icon icon-calendar"></i ></div>
								  </div>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-inline">
							 <div class="form-group">
								  <div class="input-group">
								     <div class="input-group-addon first">Al</div>
								     <input type="text" id="datepickerTool3" placeholder="gg/mm/aaaa"  class="form-control clear-x"> 
								     <div class="input-group-addon date"><i class="icon icon-calendar"></i ></div>
								  </div>
								</div>
							</div> 
						</div>  
					</div>
				</div>
    		</div>
		</div>
		<!-- END RADIO 2 -->
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <label class="control-label" id="importo">Nuovo importo richiesto*</label>
                    <div class="form-inline">
                        <div class="requiredField">
                            <div class="input-group" id="italyCurrency">
                                <input maxlength="10" id="importoField" value="" type="number" name="importo" class="form-control clear-x">
                                <div class="input-group-addon">EUR</div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="col-sm-6 ">
                   	<label class="control-label" id="note">Note (facoltativo)</label>
                    <input type="text" name="causale" maxlength="140" value="" class="form-control clear-x"> 
    			</div>
            </div>
        </div>
    </form>

<div class="form-group btnWrapper">
	<div class="stepBtn">Step <strong> 1 </strong> di 2</div>
	
	<div class="btn-align-right">
		<a type="button" class="btn btn-primary" id="prosegui">Prosegui</a>
	</div>
	<br class="clear">
</div>

<p class="note">
	I campi contrassegnati da un asterisco (*) sono obbligatori.
</p>

</section>


	
	</div>
</div>




<!-- OVERLAYER-->


<div class="modal fade" id="layerSepa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="myModalLabel">Seconda linea di credito</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<p>
								<strong>La seconda linea di credito</strong> &egrave; una <strong>disponibilit&agrave;</strong> di denaro 
								<strong>aggiuntiva</strong> rispetto a quella della prima linea e pu&ograve; essere utilizzata quando serve. La seconda linea di credito pu&ograve; essere rimborsata <strong>solo a rate</strong> e l'importo della rata si aggiunge a quanto eventualmente speso con la prima linea. 
							</p>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END OVERLAYER-->



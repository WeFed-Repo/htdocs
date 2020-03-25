<!-- Titolo di pagina (opzionale) -->
<h2>Appuntamento in agenzia</h2>
<!-- Fine titolo di pagina -->

<!-- alert deposito -->
<div id="appuWarning">
	<!-- Box esito -->
	<div class="row">
		<div class="col-xs-12">
			<section class="boxesitoWrap">
					<div class="boxesito attenzione">
						<i class="icon icon-alert_caution icon-2x"></i>
						<div class="text">
							<div class="row">
								<div class="col-xs-12">
									<p><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
								et quas molestias excepturi sint occaecati <a href="#">cupiditate non provident</a>, simili.</p>
								</div>
							</div>
						</div>
					</div>
				</section>
		</div>
	</div>
	<!-- Fine box esito -->
	<!-- Pulsanti -->
	<div class="row">
		<div class="col-xs-12">
			<div class="form-group btnWrapper">
				<div class="btn-align-left">
					<a type="button" class="btn btn-default" href="#">Lorem</a>
				</div>
				<div class="btn-align-right">
					<a type="button" class="btn btn-primary" href="javascript:;" onclick="$('#appuWarning').hide();$('#appuForm').fadeIn()">Ipsum</a>
				</div>
				<br class="clear">
			</div>	
		</div>
	</div>
	<!-- Fine pulsanti -->
</div>
<!-- fine alert deposito -->


<!-- Form registrazione appuntamento -->
<div id="appuForm" style="display:none">
	<!-- Sezione informativa -->
	<section>
		<p class="operatori">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
	</section>
	<!-- Fine sezione informativa -->

	<!-- Form raccolta dati -->
	<form class="formGenerico borderFormRounded" method="post" action="" id="tbxCallMeBack" role="form">
	<script type="text/javascript">	

		$(function () {

		// Emulazione inizializzazioni
		// Datepicker Giorno 1
		$("#contattoGiorno1").mask("99/99/9999");
			$("#contattoGiorno1").datepicker({
			beforeShowDay: highlightDays,
			//beforeShowDay: noHolidays,  //si applica se si vuole che i fine sttimana e festivi non siano delezionabili
			minDate: 0,
			showOtherMonths: true,
			showOn: "button",
			prevText: "<i class=\"icon icon-arrow_left\" title=\"mese precedente\"></i>",
			nextText: "<i class=\"icon icon-arrow_right\" title=\"mese successivo\"></i>",
			buttonImage: "/img/ret/pixel_trasp.gif",
			buttonImageOnly:true,
			beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
		    onClose: function(){
		    	$('#datePickerWrapper').modal('hide');
		    }
		    })
		    appendDatePickerIcon('contattoGiorno1');

		// Datepicker Giorno 2
		$("#contattoGiorno2").mask("99/99/9999");
			$("#contattoGiorno2").datepicker({
			beforeShowDay: highlightDays,
			//beforeShowDay: noHolidays,  //si applica se si vuole che i fine sttimana e festivi non siano delezionabili
			minDate: 0,
			showOtherMonths: true,
			showOn: "button",
			prevText: "<i class=\"icon icon-arrow_left\" title=\"mese precedente\"></i>",
			nextText: "<i class=\"icon icon-arrow_right\" title=\"mese successivo\"></i>",
			buttonImage: "/img/ret/pixel_trasp.gif",
			buttonImageOnly:true,
			beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
		    onClose: function(){
		    	$('#datePickerWrapper').modal('hide');
		    }
		    })
		    appendDatePickerIcon('contattoGiorno2');


		
		// Esempio di esito
		$("#inviaAppuntamento").click(function(){
				
				$("#appuForm").addClass("loading");

				setTimeout(function(){
					$("#appuForm").removeClass("loading").hide();
					$("#esitoAppuntamento").fadeIn();

				},3000)

			})


		});


		

	</script>

	<!-- Modalita' preferita di contatto -->
	<section>
	<div class="row">
		<div class="col-xs-12">
			<label class="control-label">Modalit&agrave; preferita di contatto</label>
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div class="radio">
						<label class="textWrapper">
							<input type="radio" name="modocontatto" value="telefono">
		      				<span class="text">Telefono: <strong>000 000 0000</strong></span>
		    			</label>
					</div>
				</div>
				<div class="col-sm-8 col-xs-12">
					<div class="radio">
						<label class="textWrapper">
							<input type="radio" name="modocontatto" value="email">
		      				<span class="text">E-mail: <strong title="lorem.ipsum@lorem.ips">lorem.ipsum@lorem.ips</strong></span>
		    			</label>
					</div>
				</div>
			</div>
			
			

		</div>
	</div>
	<!-- Fine modalita' preferita di contatto -->
		<div class="row">
			<!-- Giorno per il contatto -->
			<div class="col-sm-6 col-xs-12">
				<label class="control-label">Giorno</label>
				<div class="form-inline">
       	 			<div class="input-group">
       	 				<input type="text" id="contattoGiorno1" placeholder="gg/mm/aaaa"  class="form-control clear-x"> 
       	 				<div class="input-group-addon date"><i class="icon icon-calendar_filled"></i ></div>
       	 			</div>
				</div>
			</div>
			<!-- Fine giorno per il contatto -->
			<!-- Fascia oraria -->
			<div class="col-sm-6 col-xs-12">
				<label class="control-label">Fascia oraria</label>
				<select class="form-control" name="fascia"><option selected="selected" value="uno">09.00 - 10.00</option><option value="due">10.00 - 11.00</option><option value="tre">11.00 - 12.00</option></select>
			</div>
			<!-- Fine fascia oraria -->
		</div>
	</section>

	<section>
			<p>Indicare un'eventuale data alternativa:</p>

			<div class="row">
				<!-- Giorno per il contatto -->
				<div class="col-sm-6 col-xs-12">
					<label class="control-label">Giorno</label>
					<div class="form-inline">
	       	 			<div class="input-group">
	       	 				<input type="text" id="contattoGiorno2" placeholder="gg/mm/aaaa"  class="form-control clear-x"> 
	       	 				<div class="input-group-addon date"><i class="icon icon-calendar_filled"></i ></div>
	       	 			</div>
					</div>
				</div>
				<!-- Fine giorno per il contatto -->
				<!-- Fascia oraria -->
				<div class="col-sm-6 col-xs-12">
					<label class="control-label">Fascia oraria</label>
					<select class="form-control" name="fascia2"><option selected="selected" value="uno">09.00 - 10.00</option><option value="due">10.00 - 11.00</option><option value="tre">11.00 - 12.00</option></select>
				</div>
				<!-- Fine fascia oraria -->
			</div>
	</section>

	<section>
		<p>Lorem ipsum dolor sit amet</p>
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12">
		   	 		<label  class="control-label">Agenzia</label>
		   	 		<div class="form-inline">
		   	 			<div class="input-group">
							<input type="text" id="appuntamentoAg" class="form-control clear-x">
							<script type="text/javascript">
								// Autocomplete agenzia
								$("#appuntamentoAg").autoComplete(["Agenzia 221 - Milano Lambrate","Agenzia 223 - Milano P. Genova"], {
									selectable: false,
									clearable: true
								});
								$("#appuntamentoAg").autocomplete().data("ui-autocomplete")._renderItem = stylingResults;
								
							</script>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12">
					<label  class="control-label-output">Argomento</label>
					<span class="output">Lorem ipsum dolor</span>
				</div>
			</div>
		</div>
	</section>


	<!-- Alert -->
	<section>
		<div class="row">
			<div class="col-xs-12">
				<section class="boxesitoWrap">
						<div class="boxesito attenzione">
							<i class="icon icon-alert_caution icon-2x"></i>
							<div class="text">
								<div class="row">
									<div class="col-xs-12">
										<p><strong>Lorem ipsum dolor sit amet adipiscig!</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
									</div>
								</div>
							</div>
						</div>
					</section>
			</div>
		</div>
	</section>
	<!-- Fine alert -->
	</form>
	<!-- Fine form raccolta dati -->
	<!-- Pulsanti -->
	<div class="row">
		<div class="col-xs-12">
			<div class="form-group btnWrapper">
				<div class="btn-align-right">
					<a type="button" class="btn btn-primary" href="javascript:;" id="inviaAppuntamento">Lorem</a>
				</div>
				<br class="clear">
			</div>	
		</div>
	</div>
	<!-- Fine pulsanti -->
</div>
<!-- Fine form registrazione appuntamento -->
<section class="boxesitoWrap"  id="esitoAppuntamento" style="display:none">
	<div class="boxesito positivo">
		<i class="icon icon-alert_ok icon-2x"></i>
		<div class="text">
			<div class="row">
				<div class="col-xs-12">
					<p><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
					et quas molestias excepturi <a href="#">sint occaecati cupiditate non provident</a>, similiq</p>
				</div>
			</div>
		</div>
	</div>
</section>

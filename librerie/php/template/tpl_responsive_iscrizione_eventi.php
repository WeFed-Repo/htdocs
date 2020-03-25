<script type="text/javascript">	
//inizializzazione datepicker
$(function () {
	$("#datepickerNasc").mask("99/99/9999");
	$("#datepickerNasc").datepicker({
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
    appendDatePickerIcon('datepickerNasc');

 });
</script>
<h2>In programma</h2>
<section>
	<div class="testoIcona">
		<i class="icon icon-2x icon-imieidati_mobile flLeft"></i>
		<div class="leftTesto">
			<h4>Tutto sul money management</h4>
			<p><strong>Relatore: Domenico Dall'Olio</strong></p>
			<p>Fino al 17 gennaio<br>
			Milano</p>
		</div>	
	</div>
</section>
<form class="formGenerico" role="form" id="form01">

	<section>
		<div class="borderFormRounded">
			<div class="form-group">
			    <div class="row">
			   	 	<div class="col-sm-6">
			   	 		<label class="control-label">Nome</label>
			   	 		<input type="text" name="" class="form-control clear-x">
			   	 	</div>
			   	 	<div class="col-sm-6">
			   	 		<label class="control-label">Cognome</label>
			   	 		<input type="text" name="" class="form-control clear-x">
			   	 	</div>
			   	</div>
			</div>
			<div class="form-group">
			    <div class="row">
			   	 	<div class="col-sm-6">
			   	 		<label class="control-label">Data di nascita</label>
			   	 		<div class="form-inline">
		       	 			<div class="input-group">
		       	 				<input type="text" id="datepickerNasc" placeholder="gg/mm/aaaa"  class="form-control clear-x" value="17/01/2017"> 
		       	 				<div class="input-group-addon date"><i class="icon icon-calendar_filled"></i ></div>
		       	 			</div>
						</div>
			   	 	</div>
			   	 	<div class="col-sm-6">
			   	 		<label class="control-label">Sesso</label>
			   	 		<input type="text" name="" class="form-control clear-x" value="FEMMINA">
			   	 	</div>
			   	</div>
			</div>
			<div class="form-group">
			    <div class="row">
			   	 	<div class="col-sm-6">
			   	 		<label class="control-label">Codice fiscale</label>
			   	 		<input type="text" name="" class="form-control clear-x">
			   	 	</div>
			   	 	<div class="col-sm-6">
			   	 		<div class="row">
			   	 			<div class="col-sm-8">
			   	 				<label class="control-label">Via/Piazza</label>
			   	 				<input type="text" name="" class="form-control clear-x">
			   	 			</div>
			   	 			<div class="col-sm-4">
			   	 				<label class="control-label">N. civico</label>
			   	 				<input type="text" name="" class="form-control clear-x">
			   	 			</div>
			   	 		</div>
			   	 	</div>
			   	 </div>
			</div>
			<div class="form-group">
			    <div class="row">
					<div class="col-sm-6">
			   	 		<div class="row">
			   	 			<div class="col-sm-4">
			   	 				<label class="control-label">Provincia</label>
			   	 				<select class="form-control">
			   	 					<option>MI</option>
			   	 					<option>PV</option>
			   	 				</select>
			   	 			</div>
			   	 			<div class="col-sm-6">
			   	 				<label class="control-label">Cap</label>
			   	 				<input type="text" name="" class="form-control clear-x">
			   	 			</div>
			   	 		</div>
			   	 	</div>
			   	 	<div class="col-sm-6">
			   	 		<label class="control-label">Comune</label>
			   	 		<select class="form-control">
			   	 			<option>Milano</option>
			   	 			<option>Pavia</option>
			   	 		</select>
			   	 	</div>
			   	 </div>
			</div>
			<div class="form-group">
			    <div class="row">
					<div class="col-sm-6">
						<label class="control-label">Cellulare*</label>
						<div class="row">
			   	 			<div class="col-sm-4">
								<input type="text" name="" class="form-control clear-x">
							</div>
							<div class="col-sm-8">
								<input type="text" name="" class="form-control clear-x">
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<label class="control-label">Telefono</label>
						<div class="row">
			   	 			<div class="col-sm-4">
								<input type="text" name="" class="form-control clear-x">
							</div>
							<div class="col-sm-8">
								<input type="text" name="" class="form-control clear-x">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
			    <div class="row">
					<div class="col-sm-6">
						<label class="control-label">Email*</label>
						<input type="text" name="" class="form-control clear-x" value="CONDES@CONDES.IT">
					</div>
					<div class="col-sm-6">
						<label class="control-label">Qual &egrave; il tuo broker principale?*</label>
						<select class="form-control">
			   	 			<option>--seleziona--</option>
			   	 			<option>Webank</option>
			   	 			<option>Fineco</option>
			   	 			<option>Sella</option>
			   	 		</select>
					</div>
				</div>
			</div>
			<div class="form-group">
			    <div class="row">
					<div class="col-sm-6">
						<label class="control-label">Quante operazioni fai al mese?*</label>
						<select class="form-control">
							<option>--seleziona--</option>
			   	 			<option>nessuna</option>
			   	 			<option>1-10</option>
			   	 			<option>Olter 500</option>
			   	 		</select>
					</div>
					<div class="col-sm-6">
						<label class="control-label">A quale sessione vuoi partecipare?*</label>
						<select class="form-control">
							<option>--seleziona--</option>
			   	 			<option>tutte</option>
			   	 		</select>
					</div>
				</div>
			</div>
			<div class="form-group">
			    <div class="row">
					<div class="col-sm-6">
						<label class="control-label">In quale modalità vuoi seguire l'evento?*</label>
						<div class="radio inline">
		   					 <label class="textWrapper">
		     					 <input type="radio" name="" id="" checked>
		      					 <span class="text">Dal vivo</span>
		    				</label>
		     			</div>
					</div>
				</div>
			</div>
		</div>
		<p class="note">I campi contrassegnati da un asterisco (*) sono obbligatori.</p>
	</section>

<section>
	<div class="borderFormRounded">
		<div class="form-group">
		    <div class="row">
		    	<div class="col-sm-12">
			   	 	<h4>Informativa sul trattamento dei dati personali</h4>
			   	 	<div class="textWrapper">
						<p>
							<i class="icon icon-file_pdf"></i>
							<span class="text"><a target="_blank" href="/wbx/res/doc/Informativa_Privacy_Partecipa.pdf">Informativa sul trattamento dei dati personali e consenso privacy </a></span>
						</p>
					</div>
				</div>
		    </div>
		
		   
		    <div class="row">
		    	<div class="col-sm-12">
			   	 	<p>Ai sensi dell'art. 23 e presa visione dell'informativa ex art. 13, del D. Lgs. 196/2003</p>
					
					<div class="row">
						<div class="col-xs-6 col-sm-3">
							<div class="radio inline">
		       					 <label class="textWrapper">
		         					 <input type="radio" name="autorizzazioneInfo" id="">
		          					  <span class="text">autorizzo</span>
		        				</label>
     						</div>
						</div>
						<div class="col-xs-6 col-sm-3">
							<div class="radio inline">
		       					 <label class="textWrapper">
		         					 <input type="radio" name="autorizzazioneInfo" id="">
		          					  <span class="text">non autorizzo</span>
		        				</label>
     						</div>
						</div>
					</div>
					<p>il trattamento dei miei dati personali per l'invio, da parte della Banca, di comunicazioni concernenti l'offerta di prodotti o servizi del Gruppo BPM e per elaborazioni di studi e di ricerche di mercato.</p>
			   </div>
		    </div>
			<div class="row">
		    	<div class="col-sm-12">
			   	 	<label class="control-label"></label>
					<div class="row">
						<div class="col-xs-6 col-sm-3">
							<div class="radio inline">
		       					 <label class="textWrapper">
		         					 <input type="radio" name="autorizzazioneInfo2" id="">
		          					  <span class="text">autorizzo</span>
		        				</label>
     						</div>
						</div>
						<div class="col-xs-6 col-sm-3">
							<div class="radio inline">
		       					 <label class="textWrapper">
		         					 <input type="radio" name="autorizzazioneInfo2" id="">
		          					  <span class="text">non autorizzo</span>
		        				</label>
     						</div>
						</div>
					</div>
			   </div>
		    </div>
		</div>
		<div class="form-group">
			 <div class="row">
		    	<div class="col-sm-12">
			   	 	<h4>Informativa evento</h4>
			   	 	<p>Per procedere occorre prendere visione del documento informativo.</p>
			   	 	<div class="textWrapper">
						<p>
							<i class="icon icon-file_pdf"></i>
							<span class="text"><a target="_blank" href="javascript:;" id="openPdf">Documento Informativo Evento</a></span>
						</p>
					</div>
				 </div>
			</div>
			

			<div class="row">
				<div class="col-sm-12 requiredField">
                    <div class="checkbox">
                        <label id="informative2" class="textWrapper disabledField richiesta-1">
                            <span class="hovfin"></span>
                            <input type="checkbox" name="" id="informativeCheck2" disabled="">
                            <span class="text">Dichiaro di avere letto attentamente il documento informativo reso disponibile e di accettarne il contenuto.</span>
                        </label>
                      </div>
                  </div>
            </div>
            <script>
                 $('#openPdf').click(function(event){
                    	enableInput('#informative2');
                        window.open('/wbx/res/doc/Liberatoria_Eventi.pdf');
                        return false;
                  })
                 $('#informativeCheck2').click(function(event){
                   		$(this).is(':checked') ? $('#btnProseguiOn').show() : $('#btnProseguiOn').hide()
                   		$(this).is(':checked') ? $('#btnProseguiOff').hide() : $('#btnProseguiOff').show()
                    })
            </script>
		</div>
	</div>
	<div class="form-group btnWrapper">
		<div class="btn-align-left">
			<a type="button" class="btn btn-default">annulla</a>
		</div>
		<div id="btnProseguiOff" class="btn-align-right">
			<a type="button" class="btn btn-disabled" id="">prosegui</a>
		</div>
		<div id="btnProseguiOn" class="btn-align-right" style="display:none">
			<a type="button" class="btn btn btn-primary" id="">prosegui</a>
		</div>
		<br class="clear">
	</div>
</section>
</form>
<script type="text/javascript" src="/wscmn/js/ui.datepicker-it.js"></script>
<!--
<style type="text/css">
		@import url(/wscmn/css/priv_calendar.css);
</style>
-->
<div class="navContFirstLev outerTab">
	<div class="innerTab">
		<ul class="tabmedium">
			<li class="on"><a href="#">nuovo bollettino</a></li>
			<li><a href="connect.php?page=strutt_priv.php&tpl=tpl_responsive_bollettini_postali_inseriti.php&liv0=1&liv1=1&liv2=2&liv3=0&responsive=y">bollettini inseriti</a></li>
		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-nofill">
		<ul>
			<li>Il bollettino postale &egrave; soggetto a una commissione di 1,75 € e alle spese postali.</li>
			<li>Inserendo come data di pagamento la data di oggi, il bollettino sarà pagato in tempo reale e la ricevuta di pagamento sarà immediatamente disponibile.</li>
			<li>Puoi prenotare il pagamento di un bollettino, indicando una data di pagamento successiva (quella in cui vuoi che avvenga effettivamente il pagamento).</li>
			<li>Una volta che il bollettino &egrave; stato pagato alla pagina “bollettini inseriti” trovi la ricevuta di pagamento.</li>
		</ul>
		<section>
			<h4>Scegli il tipo di bollettino</h4>
			<form class="formGenerico borderFormRounded" role="form">
				<div class="form-group">
					<div class="row">
			 			<div class="col-sm-6">
			 				<label class="control-label-output">Conto di addebito</label>
			 				<span class="output">CC 01099 0000049199 EUR</span>
			 			</div>
			 			<div class="col-xs-4 requiredField">
				   	 		<label class="control-label">Data esecuzione*</label>
				   	 		 <div class="form-inline">
	                                <div class="input-group">
	                                    <input type="text" id="datepickerTool" placeholder="gg/mm/aaaa" class="form-control clear-x"> <a class="input-group-addon date btn-icon" href="#"><i class="icon icon-calendar_filled"></i></a> 
	                                </div>
	                          </div>
				   	 	</div>
			 		</div>
			 	</div>
			 	<div class="form-group">
				    <div class="row">
				   	 	<div class="col-xs-6 requiredField">
				   	 		<label class="control-label">Saldo disponibile al 01/06/2016</label>
				   	 		<a href="#">4.200,45 &euro;</a>
				   	 	</div>
				   	 	<div class="col-xs-6 requiredField">
				   	 		<label class="control-label">Tipo bollettino*</label>
				   	 		
				   	 		<div class="radio">
		       					 <label class="textWrapper">
				         			<input type="radio" name="tipoBol" id="">
				          			<span class="text">Lorem ipsum dolor sit amet</span>
				        		</label>
	     					</div>
							<div class="radio">
		       					 <label class="textWrapper">
				         			<input type="radio" name="tipoBol" id="">
				          			<span class="text">Lorem ipsum dolor sit amet</span>
				        		</label>
	     					</div>

				   	 	</div>
				   	</div>
				</div>
			</form>
		</section>
		<section>
			<h4>Inserisci i dati</h4>
			<form class="formGenerico borderFormRounded" role="form">
				<div class="form-group">
					<div class="row">
			 			<div class="col-xs-6 requiredField">
	   	 					<label class="control-label">C/C postale di accredito*</label>
	   	 					<input type="text" name="" class="form-control clear-x">
	   	 				</div>
	   	 				<div class="col-xs-6 requiredField">
	   	 					<label class="control-label">Intestato a *</label>
	   	 					<input type="text" name="" class="form-control clear-x">
	   	 				</div>
			 		</div>
			 	</div>
			 	<div class="form-group">
					<div class="row">
						<div class="col-xs-6">
							<div class="row">
								<div class="col-xs-6 requiredField">
									<label class="control-label">Importo*</label>
									<div class="form-inline">
										 <div class="form-group">
											  <div class="input-group">
											     <input type="text" class="form-control clear-x">
											     <div class="input-group-addon date">EUR</div>
											  </div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-6 requiredField">
							<label class="control-label">Causale*</label>
							<input type="text" name="" class="form-control clear-x">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-xs-6">
							<label class="control-label">Eseguito da*</label>
							<input type="text" placeholder="LOREM IPSUM" name="" class="form-control clear-x">
						</div>
						<div class="col-xs-6">
							<label class="control-label">Indirizzo di residenza*</label>
							<input type="text" placeholder="LOREM IPSUM" name="" class="form-control clear-x">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-xs-6">
							<label class="control-label">Localit&agrave;*</label>
							<input type="text" placeholder="LOCALIT&Agrave;" name="" class="form-control clear-x">
						</div>
						<div class="col-xs-6">
							<div class="row">
								<div class="col-xs-6">
									<label class="control-label">Provincia*</label>
									<select class="form-control"><option>lorem ipsum</option></select>
								</div>
								<div class="col-xs-6">
									<label class="control-label">Cap*</label>
									<select class="form-control"><option>MI</option></select>
								</div>
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
		</section>
	
	</div>
</div>
<script type="text/javascript">
    //inizializzazione datepicker
    $(function() {
        //$("#datepickerTool").mask("99/99/9999");
        $("#datepickerTool").datepicker({
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
        appendDatePickerIcon('datepickerTool');
    });
</script>
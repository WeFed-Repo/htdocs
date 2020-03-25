<h2>Versa in ogni sportello</h2>

<section>
	<ul>
		<li>
			In questa area puoi creare un bollettino bancario freccia in formato PDF (se non hai Acrobat Reader, scaricalo gratuitamente) che ti permette di effettuare versamenti di contante sul tuo Conto Webank presso qualsiasi istituto di credito.
		</li>
		<li>
			Al momento del versamento ti potrebbero essere richiesti un documento di identità e il tuo codice fiscale.			
		</li>
	</ul>
</section>



<!--TEXT_050 -->
<section>
	<h3>Come versare contante</h3>
	<p>Recati presso uno sportello BPM abilitato e segui le seguenti istruzioni:</p>
	<div class="row">
		<div class="col-xs-12">
			<div class="titNumber small">
				<span class="number">1</span>
				<p>Compila</p>
			</div>
		</div>
		<div class="col-xs-12">
			<div class="titNumber small">
				<span class="number">2</span>
				<p>Stampa</p>
			</div>
		</div>
		<div class="col-xs-12">
			<div class="titNumber small">
				<span class="number">3</span>
				<p>Vai in qualsiasi agenzia d'Italia</p>
			</div>
		</div>
		<div class="col-xs-12">
			<div class="titNumber small">
				<span class="number">4</span>
				<p>Controlla l'accredito sul tuo conto Webank</p>
			</div>
		</div>
	</div>
</section>





<!-- -->
<section>
	<div class="box-generico-border">
		<div class="box-generico-text box-generico-doubleTitle">
			<div class="row">
				<div class="col-sm-12">
				<h4>Condizioni</h4>
					<p>
						Chiedi sempre alla banca, presso la quale effettui il versamento, l'ammontare delle commissioni applicate, le commissioni infatti variano da banca a banca
					</p>
					<p> 
						<strong> In quanto tempo?</strong><br/>
						
						Dopo circa 3 giorni lavorativi potrai vedere il versamento effettuato nell'elenco movimenti del tuo Conto Webank. L'importo versato verr&agrave; accreditato mediamente nell'arco di 3/4 giorni lavorativi.
					</p>	
				</div>
			</div>
		</div>
	</div>			
</section>






<!-- FORM 03 -->
<section>
<div class="tithelp">
	<h4>Inserimento dati</h4>
	<div class="flRight">
		<a href="#1" data-toggle="modal" data-target="#layerSepa" class="no-underline btn-icon">
			<i class="icon icon-info_fill icon-2x"></i >
		</a>
		<br class="clear">
	</div>

</div>
<form class="formGenerico borderFormRounded" role="form" id="form01">
	
	<div class="form-group">		
		<div class="row">
			<div class="col-sm-6">
				<label class="control-label">Numero conto corrente*</span> 
					<div class="form-inline">		 
					  	<div class="input-group">
          					<select class="form-control" name="" id="">
								<option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR" accountidtoshow="CC 01077 0000049477 EUR">CC 01077 0000049477 EUR</option>
								<option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR" accountidtoshow="CC 01077 0000049477 EUR">CC 01077 0000049477 EUR</option>
						 	</select>
         				 	<div class="input-group-addon">
         				 		<a class="no-underline btn-icon" data-toggle="modal" data-target="#starAlert1">
         				 			<i class="icon icon-star_fill" title="icon-star_fill"></i>
         				 		</a>
         				 	</div>
        			  	</div>
        			</div>
			</div>
			<div class="col-sm-6">
			</div>
		</div>
	</div>

	<div class="form-group">
		 <div class="row">
		 	<div class="col-sm-6">
		 		<label class="control-label">Intestatario</label>
		 		<span class="output">Mario Bianchi</span>
		 	</div>
		 	<div class="col-sm-6">
		 	 	<label class="control-label">Causale versamento</label>
				<span class="output">Versamento</span>
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
                            <input maxlength="7" id="importoField" value="" type="number" name="importo" class="form-control clear-x">
                            <div class="input-group-addon">EUR</div>
                        </div>
                    </div>
                </div>
		 	</div>
		 	<div class="col-sm-6">
		 	 	<label class="control-label">Data versamento*</label>
				 <!-- Start DataPicher-->
				<div class="row">
                    <div class="col-sm-8">
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
                            <!-- End DataPicher-->
                     <!--div class="col-sm-4">
                     	<a href="#" class="btn-icon" data-toggle="modal" data-target="#layerSepa"> 
                     		<i class="icon icon-idea_assist"></i>
                     		info
                     	</a> 
                     </div-->
                </div>
        
		 	</div>
		 </div>
	</div>	

	<div class="form-group">
		 <div class="row">
		 	<div class="col-sm-12">
		 		<label class="control-label">Note</label>
		 		<textarea class="form-control" rows="3"></textarea>
		 	</div>
		 
		 </div>
	</div>	

	



<div class="form-group btnWrapper">
<div class="stepBtn">Step <strong> 1 </strong> di 2</div>
	<div class="btn-align-right">
		<a type="button" class="btn btn-primary" id="btnInvio" href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_versa_in_ogni_sportello_step_2.php&responsive=y&liv0=1&liv1=2&liv2=1&liv3=0">prosegui</a>
	</div>
		
	<br class="clear">
</div>



</form>
</section>




<!-- Overlayer 10-->
<div class="modal fade" id="layerSepa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<p>
								Nel campo "data versamento" &egrave; visualizzato il giorno successivo alla compilazione del bollettino. 
								La data non &egrave; vincolante. Puoi inserire una data diversa, purch&egrave; sempre successiva a quella inizialmente presente in pagina.
							 </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Overlayer-->

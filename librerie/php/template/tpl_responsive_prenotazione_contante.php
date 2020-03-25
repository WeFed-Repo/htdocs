<h2>Prenotazione contante</h2>

<!-- NAV_020 -->
<div class="navContFirstLev outerTab">
	<div class="innerTab">
		<ul class="tabmedium">
			<li class="on"><a href="#">nuova prenotazione</a></li>
			<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_prenotazione_contante_annulla_prenotazione.php&responsive=y&liv0=1&liv1=2&liv2=2&liv3=1">annulla prenotazione</a></li>
		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-nofill">
	
<section>
	<ul>
		<li>
			Puoi prenotare online somme <strong>superiori a 2500&euro;</strong> e ritirarle nel
			 <span class="txthelp"><strong data-title="Informati sulle date e gli orari di apertura dell'agenzia in occasione di eventuali festivit&agrave; locali" data-toggle="tooltip"> giorno e nell'ora </strong></span>che stabilisci in qualunque agenzia del Gruppo Bipiemme. Per il ritiro del contante, devi presentarti in agenzia con l'<strong>esatto assegno</strong> "non trasferibile" che hai indicato nella tabella sotto.
		</li>
		<li>
			Per ritirare somme fino a 2500&euro; <strong>non serve prenotare:</strong> vai <span class="txthelp">
			<strong data-title="Chiama prima l'agenzia per verificare la disponibilit&agrave; della somma prenotata" data-toggle="tooltip">direttamente in agenzia con l'assegno.</strong></span>
		</li>
	</ul>
	<p>Prima di inserire la prenotazione, <a href="#" class="btn-icon" data-toggle="modal" data-target="#layerSepa">leggi tutto quello che devi sapere.</a></p>
</section>






<!-- FORM 03 -->
<section>

<form class="formGenerico borderFormRounded" role="form" id="form01">
	
	<div class="form-group">
	<div class="row">
		<div class="col-sm-6">
			<h3>Inserimento dati</h3>
		</div>
		<div class="col-sm-6">
		</div>
	</div>
		<div class="row">
			<div class="col-sm-6">
				<label class="control-label">Intestatario</label>
		 		<span class="output">Mario Bianchi</span>
			</div>
			<div class="col-sm-6">
				<label class="control-label">Numero conto corrente</span> 
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
		</div>
	</div>


	<div class="form-group">
		<div class="row">
			<div class="col-sm-6">
				<label class="control-label">Numero assegno bancario</label>
	 			<select class="form-control"><option>123456789</option><option>987654321</option><option>543216789</option></select>
			</div>
			<div class="col-sm-6"> 
		 		<label class="control-label" id="importo">Importo</label>
                <div class="form-inline">
                    <div class="requiredField">
                        <div class="input-group" id="italyCurrency">
                            <div class="editable-input">
                            	<input maxlength="7" id="importoField" value="" type="number" name="importo" class="form-control clear-x">
                            	<span class="editable-clear-x" style="display: none"><i class="icon icon-close icon-1x"></i></span>
                            </div>
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
				<label class="control-label">Causale</label>
		 		<span class="output">Prelievo con assegno bancario</span>
			</div>
			<div class="col-sm-6">
			</div>
		</div>
	</div>

	<div class="form-group">
	<div class="row">
		<div class="col-sm-6">
			<h3>Agenzia per il ritiro del contante</h3>
		</div>
		<div class="col-sm-6">
		</div>
	</div>
		<div class="row">
			<div class="col-sm-6">
				<label class="control-label">Banca</label>
	 			<select class="form-control"><option>Banca Popolare di Milano</option><option>Banca Popolare di Mantova</option></select>
			</div>
			<div class="col-sm-6">
				
				<div class="row">
					<div class="col-xs-7">
						<label class="control-label">Numero agenzia o CAB</label>
						<input maxlength="" id="" value="" type="text" name="" class="form-control clear-x">
					</div>
					<div class="col-xs-5">
						<a href="#"  class="btn-icon" data-toggle="modal" data-target="#layerCAB"> 
							<br/>
                     		<i class="icon icon-idea_assist"></i>
                     			cerca 
                     	</a>
					</div>
				</div>

			</div>
		</div>
	</div>





    <div class="form-group btnWrapper">
    	<div class="stepBtn">Step <strong> 1 </strong> di 3</div>
        <div class="btn-align-right">
            <a type="button" class="btn btn-primary" id="btnInvio" 
            href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_prenotazione_contante_step_2.php&responsive=y&liv0=1&liv1=2&liv2=2&liv3=0#">
            prosegui</a> 	
        </div>
        <div class="clear"></div>
    </div>

</form>
</section>


<!-- END Form  -->



	</div><!-- panel-nofill-->
</div> <!--navContFirstLev outerTab -->







<!-- Overlayer_10-->

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
							<h4>Quanto costa il servizio?</h4>
							<p><strong>Nulla,</strong> la prenotazione di contante non ha commissioni.</p>

							<h4>Quante prenotazioni si possono fare?</h4>
							<p>Puoi inserire <strong>una prenotazione</strong> al giorno.</p>


							<div class="testoIcona">
								<i class="icon icon-2x icon-alert_caution flLeft"></i>
								<div class="leftTesto">
									<p>Per ritirare somme fino a 2500&euro; non serve prenotare: vai direttamente in agenzia con l'assegno.</p>		
								</div>	
							</div>


							<h4>Cosa devo fare per ritirare il contante?</h4>
							<p>Vai in un'agenzia del Gruppo Bipiemme con l'assegno "non trasferibile" dell'esatto importo che hai indicato. </p>

							<h4>Quando posso ritirare il contante?</h4>
							<ul>
								<li>prima delle ore 12: dal pomeriggio del giorno successivo alla data di prenotazione</li>
								<li>dopo le ore 12: dal secondo giorno successivo alla data di prenotazione</li>
								<li>per le somme superiori ai 30.000,00&euro;, ti sar&agrave; comunicato il giorno del ritiro.</li>
							</ul>	
							<h4>Cosa succede se non ritiro la somma il giorno stabilito?</h4>
							<p>La somma viene riaccreditata sul conto corrente il giorno dopo (5 giorni dopo se la somma supera i 30.000,00&euro;). La prenotazione scade e l'assegno che avevi selezionato torna disponibile.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- End Overlayer_10-->




<!-- Overlayer_10-->
<!-- CERCA CAB-->

<div class="modal fade" id="layerCAB" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							
							
							<form class="formGenerico borderFormRounded" role="form" id="formSearch">
							<p>Seleziona il comune</p>
							    <div class="form-group">
							        <div class="row">
							            <div class="col-sm-8">
							                <input type="text" id="ricLiberaAutocomplete" class="form-control clear-x">
							            </div>
							            <div class="col-sm-4">
							                <a type="button" class="btn btn-primary" href="#" id="cercaAgency">cerca agenzia</a>
							            </div>
							        </div>
							    </div>
							    </div>
							</form>
							<!-- TABELLA -->

									<div style="display:none" id="tableCity">

									<h4>Tabella con ordinamento e paginazione</h4>
									 <table id="tableOrdered" cellspacing="0" cellpadding="0" border="0" class="sortableTable">
									     <thead>
									        <tr>
									            <th data-field="cap" data-sortable="true" class="hidden-xs">
													Cap
													<span>
														<i class="icon icon-2x icon-accordion_up"></i>
														<i class="icon icon-2x icon-accordion_down"></i>
													</span>
												</th>
									            <th data-field="indirizzo" data-sortable="true" class="hidden-xs">
													indirizzo
													<span>
														<i class="icon icon-2x icon-accordion_up"></i>
														<i class="icon icon-2x icon-accordion_down"></i>
													</span>
												</th>
									            <th data-field="agenzia" data-sortable="true">
													N.agenzia
													<span>
														<i class="icon icon-2x icon-accordion_up"></i>
														<i class="icon icon-2x icon-accordion_down"></i>
													</span>
												</th>
									            <th data-field="cab" data-sortable="true" class="right">
													Cab
													<span>
														<i class="icon icon-2x icon-accordion_up"></i>
														<i class="icon icon-2x icon-accordion_down"></i>
													</span>
												</th>
									            <th data-field="ico2" data-sortable="false" class="center">Inserisci</th>
									        </tr>
									     </thead>
									</table>

									</div>

							<!-- END TABELLA  -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- End Overlayer_10-->




<!-- Javascript x Tabella in Overlayer  -->



<script>

$("#cercaAgency").on('click',function(){
	$("#formSearch").hide();
	$("#tableCity").show();

});



    var $tableOrdered = $('#tableOrdered');
    $(function () {
        var data = [
	{
		"cap": 22121,
		"indirizzo": "via Roma",
		"agenzia": 00015,
		"cab": 01654,
		"ico2": "<a href=\"#1\"class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-trend_down\"></i ></a>"
	
	},
	{
		"cap": 21123,
		"indirizzo": "via Lombardia",
		"agenzia": 00023,
		"cab": 01675,
		"ico2": "<a href=\"#1\"class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-trend_down\"></i ></a>"
	},
	{
		"cap": 12928,
		"indirizzo": "piazzale Bacone",
		"agenzia": 00019,
		"cab": 01693,
		"ico2": "<a href=\"#1\"class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-trend_down\"></i ></a>"
	},
	{
		"cap": 22331,
		"indirizzo": "via Spontini",
		"agenzia": 00022,
		"cab": 01683,
		"ico2": "<a href=\"#1\"class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-trend_down\"></i ></a>"
	},
	{
		"cap": 33221,
		"indirizzo": "via Donatello",
		"agenzia": 00033,
		"cab": 01622,
		"ico2": "<a href=\"#1\"class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-trend_down\"></i ></a>"
	}
	
	];
	// Moltiplico i dati per averne di pi?
	var dataTmp = $.extend(true, {}, data);

	//for (var i = 0; i < 5; ++i) { $.merge(data, $.extend(true, {}, dataTmp)); alert("");  }
    arrayKey = ['ico1','ico2','cap']; 
    $tableOrdered.bootstrapTable({
            data: data,
            sortable: true,
            sortName: "cap",
            sortOrder: "desc",
            pagination : "true",
            pageSize: 15,
            pageList: [15, 30, 60, 'tutti'],
			 rowStyle: function(row, index) {
				if(index % 2 == 0)
				{
					return {
						classes: 'dispari'
					}
				}
				else {
					return {
						classes: 'pari'
					}
				}
			   },
            detailView:  isSmallDevice, //se sono su  mobile innesco il meccanismo per costruire riga accordion
			detailFormatter:"detailFormatterAccordion" //costruisce la riga di dettaglio su mobile
		});
	//definisco le colonne da nascondere su mobile
  	//per ciascuna colonna appendo la classe che la nasconde su mobile
	fixCols();
   });
function detailFormatterAccordion(index, row) {
        
        var html = [];
        $.each(row, function (key, value) {
           
            if(key=='cap' || key=='ico1' || key=='ico2' || key=='indirizzo')
            {
            	html.push('<p class="noMarginBottom"><strong>' + key + ':</strong>' + '</p>' + '<p>' + value + '</p>');
        	}
        });
        return html.join('');
    }
$(window).resize(function() {
  $tableOrdered.bootstrapTable('refreshOptions', {
         detailView:  isSmallDevice,
         detailFormatter:"detailFormatterAccordion"
    });
 });



</script>



<!-- END Javascript x Tabella in Overlayer -->
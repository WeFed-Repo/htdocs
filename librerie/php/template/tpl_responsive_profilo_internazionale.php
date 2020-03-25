<script type="text/javascript">	
					//inizializzazione datepicker
					$(function () {
						$("#datepickerAttivazione").mask("99/99/9999");
						$("#datepickerAttivazione").datepicker({
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
					    	$('#datepickerAttivazione').modal('hide');
					    }
					   
					    })
					    $("#datepickerScadenza").datepicker({
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
					    	$('#datepickerScadenza').modal('hide');
					    }
					   
					    })
					    $("#datepickerAttivazione,#datepickerScadenza").datepicker('disable');
					    
					    appendDatePickerIcon('datepickerAttivazione');
					    appendDatePickerIcon('datepickerScadenza');

					    //gestione radio selected
					    $('input[name=\'profiloScelto\']').click(function() {
					    	$('input[name=\'profiloScelto\']').closest('.form-group').removeClass('selected');
					    	$(this).closest('.form-group').addClass('selected');
					    	if( $(this).val() == 'W'){
					    		$("#datepickerAttivazione,#datepickerScadenza").datepicker('enable');
					    		$('.icon-calendar_filled').removeClass('disabled');
					    	}
					    	else
					    	{
					    		$("#datepickerAttivazione,#datepickerScadenza").datepicker('disable');
					    		$('.icon-calendar_filled').addClass('disabled');
					    	}
					    }) 
					   
					});
					</script>
<h2>Profilo internazionale</h2>
<section>
<div class="navContFirstLev outerTab">
	<div class="innerTab">
		<ul class="tabmedium">
			<li><a href="connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_banco_saldo_mov.php&liv0=2&liv1=0&liv2=1&liv3=0&responsive=y">saldo e <br>movimenti</a></li>
			<li><a href="connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_banco_extra_max.php&liv0=2&liv1=0&liv2=1&liv3=0&responsive=y">extraPrelievo<br> e Massimali</a></li>
			<li class="on"><a href="connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_profilo_internazionale.php&liv0=2&liv1=0&liv2=1&liv3=0&responsive=y">profilo<br> internazionale</a></li>
			<li><a href="connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_banco_sicurezza.php&liv0=2&liv1=0&liv2=1&liv3=0&responsive=y">sicurezza<br> ed estinzione</a></li>
			<li><a href="connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_stato_pratica.php&liv0=2&liv1=0&liv2=1&liv3=0&responsive=y">stato pratica</a></li>
		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-nofill">
		<section>
			<div class="box-generico">
				<div class="row">
					<div class="col-sm-3">
						<img src="/wscmn/fe/img/profilo_internazionale.png" class="img-resp">
					</div>
					<div class="col-sm-9">
						<h3>Parti per un paese extraeuropeo?</h3>
						<h4>Mantieni sicura la tua carta di debito: decidi tu dove e quando pu&ograve; essere utilizzata.</h4>
						<p>
							Con <strong>GeoBLOCK</strong>, il servizio di <strong>prevenzioni frodi</strong>, puoi abilitare l'utilizzo della carta secondo due diversi profili: <strong>Europa e Mondo</strong>.
							Il profilo assegnato automaticamente &egrave; Europa. Se devi partire per un Paese extraeuropeo, attiva il profilo &quot;Mondo &quot; <strong>solo per il periodo di permanenza all'estero</strong>. Al termine del tuo soggiorno la tua carta torner&agrave; ad avere, in automatico, il profilo Europa. In questo modo aumenterai la sicurezza.
						</p>
						<a href="#" data-toggle="modal" data-target="#tempiAttivazione">Tempi di attivazione profilo internazionale</a>
					</div>
				</div>
			</div>
			
			<div class="modal fade" id="tempiAttivazione" tabindex="-1" role="dialog" aria-labelledby="tempiAttivazione">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i></a>
							<h2 class="modal-title" id="tempiAttivazione">Tempi di attivazione</h2>
						</div>
						<div class="modal-body">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12">
										<p>Ecco le tempistiche per modificare il profilo internazionale da Europa a Mondo e viceversa:</p>
										<table cellpadding="0" cellspacing="0" data-toggle="table">
											<thead>
												<tr>
													<th>Data della richiesta</th>
													<th>Attivazione del nuovo profilo</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Dal luned&igrave; al sabato <strong>entro le ore 14.00</strong></td>
													<td>Il giorno stesso entro le ore 21.30</td>
												</tr>
												<tr>
													<td>
														<ul>
															<li>Dal luned&igrave; al sabato <strong>dopo le ore 14.00</strong></li>
															<li><strong>Domenica</strong> e <strong>festivi</strong></li>
														</ul>
													</td>
													<td>Il 1&deg; giorno lavorativo successivo alla richiesta, entro le ore 21.30</td>
												</tr>	
											</tbody>
										</table>
										<p>RICORDA: impostando il profilo Mondo solo per il periodo di permanenza all'estero, al tuo rientro la tua carta di debito torner&agrave; ad avere, in automatico, il profilo Europa.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
		</section>
			<form>
				<div class="formGenerico borderFormRounded" role="form" id="form01">
					<div class="form-group">
		    			<div class="row">
		    				<div class="col-sm-6 requiredField">
		   	 					<label class="control-label">Numero carta e conto corrente</label>
		   	 					<select name="" class="form-control">
									<option>Carta *173 --- 01099 - 0000086803 - EUR</option>
									<option>Carta *174 --- 01099 - 0000085969 - EUR</option>
		   	 					</select>
		   	 				</div>
		   	 				<div class="col-sm-6">
		   	 					<label class="control-label-output">Profilo attuale</label>
		   	 					<span class="output">Europa</span>
		   	 				</div>
		   	 			</div>
		   	 		</div>
				</div>
				<div class="tithelp">
					<h4>Profilo internazionale</h4>
				</div>
				<div class="formGenerico pad_0 borderFormRounded" role="form" id="form02">
					<div class="form-group paddMedium pad_bottom_0 selected">
						<div class="row">
		    				<div class="col-sm-3">
		    					<div class="radio inline">
			       					 <label class="textWrapper">
			         					 <input type="radio" name="profiloScelto" id="" checked value="E">
			          					 <span class="text">Profilo Europa:</span>
			        				</label>
     							</div>
		    				</div>
		    				<div class="col-sm-9">
		    					<p>Puoi utilizzare la tua carta nei Paesi indicati nell'elenco. Lascia impostato questo profilo per garantirti una <strong>maggior sicurezza</strong>.
		    					 Se devi recarti in un Paese non compreso nell'elenco, ricordati di attivare il profilo &quot;Mondo&quot;</p>
		    					 <p><strong>Paesi compresi nel profilo Europa:</strong> Albania, Andorra, Antartide, Armenia, Austria, Azerbaijan, Bielorussia, Belgio, Bosnia Erzegovina, Bulgaria, Cipro, Croazia, Danimarca, Estonia, Finlandia, Francia, Georgia, Germania, Gibilterra, Gran Bretagna, Grecia, Groenlandia, Guadalupe, Irlanda, Islanda, Israele, Italia, Kazakistan, Kyrgyzstan, Lettonia, Liechtenstein, Lituania, Lussemburgo, Macedonia, Malta, Martinica, Moldavia, Principato di Monaco, Olanda, Norvegia, Polonia, Portogallo, Rep. Ceca, Romania, Russia, San Marino, Serbia - Montenegro - Kosovo, Slovacchia, Slovenia, Spagna, Svezia, Svizzera, Stato della Città del Vaticano, Tajikistan, Turchia, Turkmenistan, Ucraina, Ungheria.</p>
		    				</div>
		    			</div>
					</div>
					

					<div class="form-group paddMedium">
						<div class="row">
		    				<div class="col-sm-3">
		    					<div class="radio inline">
			       					 <label class="textWrapper">
			         					 <input type="radio" name="profiloScelto" id="" value="W">
			          					 <span class="text">Profilo Mondo:</span>
			        				</label>
     							</div>
		    				</div>
		    				<div class="col-sm-9">
		    					<p>
		    						puoi prelevare e effettuare pagamenti in tutto il mondo. Ti consigliamo di inserire la data di scadenza del profilo oltre la quale la tua carta torner&agrave; ad avere il profilo Europa. Attivando il profilo &quot;Mondo&quot; solo per il periodo di permanenza all'estero potrai prevenire il rischio di frodi. L'attivazione di questo profilo pu&ograve; essere temporanea o definitiva.
		    					</p>
	    						<div class="row">
		    						<div class="col-sm-6">
			    						<label class="control-label">Data di attivazione</label>
			    						<div class="form-inline">
						       	 			<div class="input-group">
						       	 				<input type="text" id="datepickerAttivazione" placeholder="gg/mm/aaaa"  class="form-control clear-x"> 
						       	 				<div class="input-group-addon date"><i class="icon icon-calendar_filled disabled"></i></div>
						       	 			</div>
										</div>
									</div>
									<div class="col-sm-6">
			    						<label class="control-label">Data di scadenza</label>
			    						<div class="form-inline">
						       	 			<div class="input-group">
						       	 				<input type="text" id="datepickerScadenza" placeholder="gg/mm/aaaa"  class="form-control clear-x"> 
						       	 				<div class="input-group-addon date"><i class="icon icon-calendar_filled disabled"></i></div>
						       	 			</div>
										</div>
									</div>
								</div>
							</div>
		    			</div>
					</div>
				<div class="form-group btnWrapper paddMedium">
					<div class="btn-align-right">
						<a type="button" class="btn btn-primary" id="" data-target="#modificaProfiloOver" data-toggle="modal">modifica</a>
					</div>
					<br class="clear">
				</div>
				</div>
			</form>
			
			<div class="modal fade" id="modificaProfiloOver" tabindex="-1" role="dialog" aria-labelledby="profiloMondo">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i></a>
							<h2 class="modal-title" id="profiloMondo">Profilo mondo</h2>
						</div>
						<div class="modal-body">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12">
										<p>Per mantenere sicuro l'utilizzo della tua carta e prevenire il rischio di frodi, ti consigliamo di impostare il profilo Mondo <strong>esclusivamente per il periodo di permanenza all'estero</strong>.
Non inserendo la data di scadenza, il profilo rimarrà attivo fino a tua diversa comunicazione.</p>
									<p>Sei sicuro di non voler inserire la data di scadenza?</p>
									</div>
								</div>
							</div>
							<div class="form-group btnWrapper">
								<div class="btn-align-left">
									<a type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close">annulla</a>
								</div>
								<div class="btn-align-right">
									<a type="button" class="btn btn-primary" id="" title="procedi">procedi</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
</section>
<section>
	<div class="panel-group" id="accordionMassimali" role="tablist" aria-multiselectable="true">
		<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="headingMassimali">
				 <h4 class="panel-title">
					  <a data-toggle="collapse" href="#profiliAttivati" aria-expanded="false" aria-controls="profiliAttivati" class="collapsed">
					     PROFILI ATTIVATI<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
					  </a>
				 </h4>
			</div>
			<div id="profiliAttivati" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingMassimali" aria-expanded="false" style="height: 0px;">
				 <div class="panel-body">
				 	<p>Di seguito puoi vedere le tue richieste di cambio profilo internazionale.</p>
				 	<table cellpadding="0" cellspacing="0" data-toggle="table">
				 		<thead>
				 			<tr>
				 				<th class="left">Profilo internazionale</th>
				 				<th class="center">Data attivazione</th>
				 				<th class="center">Data scadenza</th>
				 			</tr>
				 		</thead>
				 		<tbody>
				 			<tr>
								<td>Mondo</td>
								<td>25/10/2016</td>
								<td>28/10/2016</td>
							</tr>
							<tr>
								<td>Europa</td>
								<td>28/07/2016</td>
								<td></td>
							</tr>
				 		</tbody>
				 	</table>
				 </div>
			</div>
		</div>
	</div>
</section>
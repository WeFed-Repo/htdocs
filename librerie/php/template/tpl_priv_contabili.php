<script type="text/javascript">	
//inizializzazione datepicker

$(function () {
	
	$("#datepickerToolDa").mask("99/99/9999");
	$("#datepickerToolDa").datepicker({
	showOtherMonths: true,
	showOn: "button",
	prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
	nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
	buttonImage: "/img/ret/pixel_trasp.gif",
	buttonImageOnly:true,
	beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
   	onClose: function(){
    	$('#datePickerWrapper').modal('hide');
    }
    })
    appendDatePickerIcon('datepickerToolDa');
   
   $("#datepickerToolA").mask("99/99/9999");
	$("#datepickerToolA").datepicker({
	showOtherMonths: true,
	showOn: "button",
	prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
	nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
	buttonImage: "/img/ret/pixel_trasp.gif",
	buttonImageOnly:true,
	beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
   	onClose: function(){
    	$('#datePickerWrapper').modal('hide');
    }
    })
   appendDatePickerIcon('datepickerToolA');

   });

</script>

<h2>Estratto conto e contabili</h2>
<div class="navContFirstLev outerTab">
	<div class="innerTab">
		<ul class="tabbig">
			<li class="on"><a href="/connect.php?page=strutt_priv.php&tpl=tpl_priv_contabili.php&responsive=y&liv0=1&liv1=0&liv2=0&liv3=3#">archivio documenti</a></li>
			<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_priv_contabili_cartella.php&responsive=y&liv0=1&liv1=0&liv2=0&liv3=3#">cartelle personali</a></li>
			<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_priv_contabili_gestione_serivizio.php&responsive=y&liv0=1&liv1=0&liv2=0&liv3=3#">gestione servizio</a></li>
			<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_priv_contabili_info_servizio.php&responsive=y&liv0=1&liv1=0&liv2=0&liv3=3#">info servizio</a></li>
		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-nofill">
		<section>
			<ul>
				<li>Nella tabella sotto, sono presenti i <a href="#">documenti bancari</a> disponibili online relativi al 2016. </li>
				<li>Per visualizzare gli altri documenti utilizza la <strong> ricerca avanzata</strong>.</li>
				<li>I documenti prodotti dopo l'eventuale <strong> disattivazione</strong> del servizio saranno inviati in formato cartaceo.</li>
			</ul>
			<h4>Documenti 2016 <a href="#"><span class="newDoc" data-toggle="modal" data-target="#nuoviDoc">NEW</span></a></h4>
			<table cellspacing="0" cellpadding="0" data-toggle="table">
				<thead>
					<tr>
						<th>Tipo documento</th>
						<th class="right">Tutti i documenti</th>
						<th class="right">Documenti non letti</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Estratti conto/deposito</td>
						<td><div class="loading-small flRight"></div></td>
						<td><div>0</div></td>
					</tr>
					<tr>
						<td>Contabili</td>
						<td><div><a href="/connect.php?page=strutt_priv.php&tpl=tpl_priv_contabili_ricerca.php&responsive=y&liv0=1&liv1=0&liv2=0&liv3=3#">24</a></div></td>
						<td><div><a href="#">19</a></div></td>
					</tr>
					<tr>
						<td>Documenti di sintesi/informativi</td>
						<td><div>0</div></td>
						<td><div>0</div></td>
					</tr>
				</tbody>
			</table>
		</section>
		<section>
			<div class="form-group">
				<div class="row">
					<div class="col-sm-12">
						<a href="#" class="link-inline">Ultimo estratto conto</a>
						<a href="#" class="link-inline">Ultime 10 contabili - 2016</a>
						<a href="#" class="link-inline">Tutti i documenti non letti - 2016</a>
					</div>
				</div>
			</div>
			<h3>Ricerca avanzata</h3>
				<div class="tithelp">
					<h4>Inserisci i parametri di ricerca (sono esclusi i conti estinti)</h4>
					<div class="flRight"><a href="#1" class="no-underline btn-icon" data-toggle="modal" data-target="#helpRicerca"><i class="icon icon-info_fill icon-2x"></i></a><br class="clear"></div>
					<br class="clear">
				</div>
				<form class="formGenerico borderFormRounded" role="form" id="">
					<div class="form-group">
		    			<div class="row">
		   	 				<div class="col-sm-6 requiredField">
								<label class="control-label">Rapporto</label>
								<select class="form-control">
									<option>Solo conti correnti</option>
									<option>CC 01099 0000049199 EUR</option>
								</select>
		   	 				</div>
		   	 			</div>
		   	 		</div>
		   	 		
		   	 		<div class="form-group">
		    			<div class="row">
		   	 				<div class="col-sm-6 requiredField">
								<label class="control-label">Categoria documenti</label>
								<select class="form-control" id="selectCategoria">
									<option>Tutti</option>
									<option value="CC 01099 0000049199 EUR">CC 01099 0000049199 EUR</option>
								</select>
		   	 				</div>
		   	 				<div class="col-sm-6 requiredField" style="display:none" id="tipoDoc">
								<label class="control-label">Tipo documento</label>
								<select class="form-control">
									<option>Lorem ipsum dolor</option>
									<option>Lorem ipsum dolor</option>
								</select>
		   	 				</div>
		   	 			</div>
		   	 		</div>
		   	 		<div class="form-group">
		    			<div class="row">
		   	 				<div class="col-sm-6 requiredField">
								<label class="control-label">Stato</label>
								<select class="form-control" id="selectCategoria">
									<option>Tutti</option>
									<option>Letto</option>
									<option>Non letto</option>
								</select>
		   	 				</div>
		   	 				<div class="col-sm-6">
								<label class="control-label">Periodo</label>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-inline">
										 <div class="form-group">
											  <div class="input-group">
											     <div class="input-group-addon first">Dal</div>
											     <input type="text" id="datepickerToolDa" placeholder="gg/mm/aaaa"  class="form-control clear-x"> 
											     <div class="input-group-addon date"><i class="icon icon-calendar_filled"></i ></div>
											  </div>
											</div>
										</div> 
									</div>  
									<div class="col-sm-6">
									<div class="form-inline">
									  <div class="form-group">
										  <div class="input-group">
										     <div class="input-group-addon first">Al</div>
										     <input type="text" id="datepickerToolA" placeholder="gg/mm/aaaa"  class="form-control clear-x"> 
										     <div class="input-group-addon date"><i class="icon icon-calendar_filled"></i ></div>
										  </div>
										</div>
									</div>
									</div>
								</div>		
							</div>
		   	 			</div>
		   	 		</div>
		   	 		<div class="form-group btnWrapper">
						<div class="btn-align-right">
							<a type="button" class="btn btn-primary" id="">ricerca</a>
						</div>
						<br class="clear">
					</div>
		   	 		<script>
		   	 			$('#selectCategoria').bind('change', function() {
		   	 				if($(this).val()!== 'Tutti')
		   	 				{
		   	 				  $('#tipoDoc').show();
		   	 				}
		   	 				else{
		   	 				   $('#tipoDoc').hide();
		   	 				}
		   	 			})
		   	 		</script>
				</form>
		</section>
	</div>
</div>
<!--overlayer nuovi documenti -->
<div class="modal fade slide-right" id="nuoviDoc" tabindex="-1" role="dialog" aria-labelledby="nuoviDocumenti">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close close-top btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="nuoviDocumenti">Hai a disposizione i nuovi documenti sotto elencati:</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<section>
								<ul>
									<li>1099-00000000085969 - Estratto conto corrente</li>
									<li>00000000086803 - Documento di sintesi del conto e correlati</li>
									<li>1099-00000000085969 - Documento di sintesi del conto e correlati</li>
									<li>1096-00000000086803 - Documento di sintesi del conto e correlati</li>
								</ul>
							</section>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--overlayer ricerca avanzata -->
<div class="modal fade slide-right" id="helpRicerca" tabindex="-1" role="dialog" aria-labelledby="ricercaAvanzata">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close close-top btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="ricercaAvanzata">Ricerca avanzata</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<section>
								<p>&Egrave; possibile effettuare una ricerca avanzata, scegliendo tra cinque filtri avanzati e tre sottofiltri.</p>
								<p><strong>Rapporto:</strong> la voce indica il rapporto (conto corrente o deposito titoli) abilitato al servizio di home banking. La sigla &quot;DT&quot; esprime un rapporto di deposito titoli; la sigla &quot;CC&quot;  un rapporto di conto corrente.</p> 
								<p><strong>Categoria documenti:</strong> la voce indica la categoria di appartenenza dei documenti che si vogliono ricercare.</p> 
								<p><strong>Tipo documento:</strong> la voce indica la tipologia di documenti visualizzabili in base alla categoria di documenti scelti.</p> 
       							<p><strong>Stato:</strong> letto o non letto. Identifica i documenti che sono o non sono stati aperti.</p>
								<p><strong>Periodo:</strong> indica l'intervallo temporale entro cui effettuare la ricerca. &Egrave; possibile selezionare il mese e l'anno di inizio/fine ricerca <strong>(soltanto anno per anno)</strong>.</p> 
								<p>Inoltre, in base alla categoria scelta, &egrave; possibile compilare alcuni campi previsti per raffinare ulteriormente la ricerca.</p> 
							</section>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<h2>Bonifico Periodico</h2>
<div class="navContFirstLev outerTab">
	<div class="innerTab">
		<ul class="tabmedium">
			<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_bonifico_periodico.php&responsive=y&liv0=1&liv1=1&liv2=0&liv3=1">inserimento nuovo</a></li>
			<li  class="on"><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_ordini_dett.php&responsive=y&liv0=1&liv1=1&liv2=0&liv3=1">gestione ordini</a></li>
		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-nofill">
		<section>
			<h3>Dettaglio</h3>
			<div class="tithelp">
				<p class="flLeft">Ordine bonifico periodico n. 80053<br>Stato ordine: Attivo</p>
				<div class="flRight">
					<a href="#1" class="no-underline btn-icon" title="modifica"><i class="icon icon-edit_fill icon-2x"></i></a>
					<a href="#1" class="no-underline btn-icon" title="sospendi"><i class="icon icon-play icon-2x"></i></a>
					<a href="#1" class="no-underline btn-icon" title="annulla"><i class="icon icon-alert_error_fill icon-2x"></i></a>
				</div>
				<br class="clear">
			</div>
			<form class="formGenerico borderFormRounded output" role="form" id="form02">
				<div class="form-group">
					<div class="row">
					 	<div class="col-sm-6">
							<label class="control-label-output">Conto di addebito</label>
							<span class="output">00000 0000085608 EUR</span>
						</div>
						<div class="col-sm-6">
							<label class="control-label-output">IBAN Ordinante</label>
							<span class="output">IT23F0558401600000000085608</span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
					 	<div class="col-sm-6">
							<label class="control-label-output">Importo rata</label>
							<span class="output">20 &euro; </span>
						</div>
						<div class="col-sm-6">
							<label class="control-label-output">Data esecuzione primo bonifico</label>
							<span class="output">28/09/2016</span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
					 	<div class="col-sm-6">
							<label class="control-label-output">Causale</label>
							<span class="output">lorem</span>
						</div>
						<div class="col-sm-6">
							<label class="control-label-output">Frequenza bonifici</label>
							<span class="output">Trimestrale</span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
					 	<div class="col-sm-6">
							<label class="control-label-output">Scadenza ordine</label>
							<span class="output">Su richiesta</span>
						</div>
						<div class="col-sm-6">
							<label class="control-label-output">Nome beneficiario</label>
							<span class="output">Bettera Marco - Artigiano Edile</span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
					 	<div class="col-sm-6">
							<label class="control-label-output">Indirizzo</label>
							<span class="output">lorem</span>
						</div>
						<div class="col-sm-6">
							<label class="control-label-output">CAP</label>
							<span class="output">41234</span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
					 	<div class="col-sm-6">
							<label class="control-label-output">Località</label>
							<span class="output">lorem</span>
						</div>
						<div class="col-sm-6">
							<label class="control-label-output">Provincia</label>
							<span class="output">AG</span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
					 	<div class="col-sm-6">
							<label class="control-label-output">IBAN Beneficiario</label>
							<span class="output">IT24T0324452910000000040256</span>
						</div>
						<div class="col-sm-6">
							<label class="control-label-output">Banca</label>
							<span class="output">BANCA DI VALLE CAMONICA S.P.A.</span>
						</div>
					</div>
				</div>
			</form>
		</section>
		<section>
			<h3>Il tuo bonifico periodico</h3>
			<p>Nella tabella sono indicati i <strong>singoli pagamenti</strong> previsti dal tuo ordine di bonifico periodico.</p>
			<!--tabella in tab di contenuto -->

			<div class="navContSecondLev" id="tabBonificoPeriodico">
			<div class=" outerTab">
				<ul class="tabWrapper tabsmall hidden-xs">
					<li class=""><a href="#prossimiBonifici">Prossimi bonifici</a></li>
					<li class=""><a href="#storico">Storico</a></li>
				</ul>
			</div>
			<div class="separator noMarginBottom"></div>
			<div class="panel-group panel-fill" id="accordion2" role="tablist" aria-multiselectable="true">
			<div class="panel panel-default">
				<div class="panel-heading visible-xs" role=" tab"="" id="prossimiBonifici">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion2" href="#collapsePb" aria-expanded="false" aria-controls="collapsePb" class="collapsed">Prossimi bonifici<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
					</h4>
				</div>
				<div id="collapsePb" class="panel-collapse collapse" role="tabpanel" aria-labelledby="prossimiBonifici">
					<div class="panel-body">
						<div class="tab-wrap">
							<div class="flRight">
								<a href="#1" class="no-underline btn-icon" title="sospendi"><i class="icon icon-pause icon-2x"></i></a>
								<a href="#1" class="no-underline btn-icon" title="riattiva"><i class="icon icon-play icon-2x"></i></a>
								<a href="#1" class="no-underline btn-icon" title="annulla"><i class="icon icon-alert_error_fill icon-2x"></i></a>
							</div>
							<table id="tb-attuali" cellspacing="0" cellpadding="0" border="0" class="sortableTable">
								<thead>
									<tr>
										<th data-field="check" data-sortable="false" class="center"></th>
										<th data-field="rata" data-sortable="true" class="sortableTh sortedTh center">Rata</th>
										<th data-field="data" data-sortable="true" class="sortableTh center" data-sorter="fixDate">Data esecuzione</th>
										<th data-field="importo" data-sortable="true" class="sortableTh right" data-sorter="fixQuant">Importo</th>
										<th data-field="stato" data-sortable="true" class="sortableTh">Stato</th>
									</tr>
								</thead>
							</table>
							<script type="text/javascript">
								var $tableAttuali = $('#tb-attuali');
								var dataAttuali = [
								{
								"check":"<input type='checkbox' data-status='ATTIVA_DA_ESEGUIRE' value='2' name='cRate'/>"

								,"rata":"2"
								,"data":"28/12/2016"
								,"importo":"0,22"
								,"stato":"attiva "
								},

								{
								"check":"<input type='checkbox' data-status='ATTIVA_DA_ESEGUIRE' value='3' name='cRate'/>"

								,"rata":"3"
								,"data":"28/03/2017"
								,"importo":"0,22"
								,"stato":"attiva "
								},

								{
								"check":"<input type='checkbox' data-status='ATTIVA_DA_ESEGUIRE' value='4' name='cRate'/>"

								,"rata":"4"
								,"data":"28/06/2017"
								,"importo":"0,22"
								,"stato":"attiva "
								},

								{
								"check":"<input type='checkbox' data-status='ATTIVA_DA_ESEGUIRE' value='5' name='cRate'/>"

								,"rata":"5"
								,"data":"28/09/2017"
								,"importo":"0,22"
								,"stato":"attiva "
								},

								{
								"check":"<input type='checkbox' data-status='ATTIVA_DA_ESEGUIRE' value='6' name='cRate'/>"

								,"rata":"6"
								,"data":"28/12/2017"
								,"importo":"0,22"
								,"stato":"attiva "
								},

								{
								"check":"<input type='checkbox' data-status='ATTIVA_DA_ESEGUIRE' value='7' name='cRate'/>"

								,"rata":"7"
								,"data":"28/03/2018"
								,"importo":"0,22"
								,"stato":"attiva "
								},

								{
								"check":"<input type='checkbox' data-status='ATTIVA_DA_ESEGUIRE' value='8' name='cRate'/>"

								,"rata":"8"
								,"data":"28/06/2018"
								,"importo":"0,22"
								,"stato":"attiva "
								},

								{
								"check":"<input type='checkbox' data-status='ATTIVA_DA_ESEGUIRE' value='9' name='cRate'/>"

								,"rata":"9"
								,"data":"28/09/2018"
								,"importo":"0,22"
								,"stato":"attiva "
								},

								{
								"check":"<input type='checkbox' data-status='ATTIVA_DA_ESEGUIRE' value='10' name='cRate'/>"

								,"rata":"10"
								,"data":"28/12/2018"
								,"importo":"0,22"
								,"stato":"attiva "
								},

								{
								"check":"<input type='checkbox' data-status='ATTIVA_DA_ESEGUIRE' value='11' name='cRate'/>"

								,"rata":"11"
								,"data":"28/03/2019"
								,"importo":"0,22"
								,"stato":"attiva "
								},

								{
								"check":"<input type='checkbox' data-status='ATTIVA_DA_ESEGUIRE' value='12' name='cRate'/>"

								,"rata":"12"
								,"data":"28/06/2019"
								,"importo":"0,22"
								,"stato":"attiva "
								},

								{
								"check":"<input type='checkbox' data-status='ATTIVA_DA_ESEGUIRE' value='13' name='cRate'/>"

								,"rata":"13"
								,"data":"30/09/2019"
								,"importo":"0,22"
								,"stato":"attiva "
								},

								{
								"check":"<input type='checkbox' data-status='ATTIVA_DA_ESEGUIRE' value='14' name='cRate'/>"

								,"rata":"14"
								,"data":"30/12/2019"
								,"importo":"0,22"
								,"stato":"attiva "
								},

								{
								"check":"<input type='checkbox' data-status='ATTIVA_DA_ESEGUIRE' value='15' name='cRate'/>"

								,"rata":"15"
								,"data":"30/03/2020"
								,"importo":"0,22"
								,"stato":"attiva "
								},

								{
								"check":"<input type='checkbox' data-status='ATTIVA_DA_ESEGUIRE' value='16' name='cRate'/>"

								,"rata":"16"
								,"data":"29/06/2020"
								,"importo":"0,22"
								,"stato":"attiva "
								},

								{
								"check":"<input type='checkbox' data-status='ATTIVA_DA_ESEGUIRE' value='17' name='cRate'/>"

								,"rata":"17"
								,"data":"28/09/2020"
								,"importo":"0,22"
								,"stato":"attiva "
								},

								{
								"check":"<input type='checkbox' data-status='ATTIVA_DA_ESEGUIRE' value='18' name='cRate'/>"

								,"rata":"18"
								,"data":"28/12/2020"
								,"importo":"0,22"
								,"stato":"attiva "
								},

								{
								"check":"<input type='checkbox' data-status='ATTIVA_DA_ESEGUIRE' value='19' name='cRate'/>"

								,"rata":"19"
								,"data":"29/03/2021"
								,"importo":"0,22"
								,"stato":"attiva "
								},

								{
								"check":"<input type='checkbox' data-status='ATTIVA_DA_ESEGUIRE' value='20' name='cRate'/>"

								,"rata":"20"
								,"data":"28/06/2021"
								,"importo":"0,22"
								,"stato":"attiva "
								},

								{
								"check":"<input type='checkbox' data-status='ATTIVA_DA_ESEGUIRE' value='21' name='cRate'/>"

								,"rata":"21"
								,"data":"28/09/2021"
								,"importo":"0,22"
								,"stato":"attiva "
								},

								{
								"check":"<input type='checkbox' data-status='ATTIVA_DA_ESEGUIRE' value='22' name='cRate'/>"

								,"rata":"22"
								,"data":"28/12/2021"
								,"importo":"0,22"
								,"stato":"attiva "
								},

								{
								"check":"<input type='checkbox' data-status='ATTIVA_DA_ESEGUIRE' value='23' name='cRate'/>"

								,"rata":"23"
								,"data":"28/03/2022"
								,"importo":"0,22"
								,"stato":"attiva "
								},

								{
								"check":"<input type='checkbox' data-status='ATTIVA_DA_ESEGUIRE' value='24' name='cRate'/>"

								,"rata":"24"
								,"data":"28/06/2022"
								,"importo":"0,22"
								,"stato":"attiva "
								},

								{
								"check":"<input type='checkbox' data-status='ATTIVA_DA_ESEGUIRE' value='25' name='cRate'/>"

								,"rata":"25"
								,"data":"28/09/2022"
								,"importo":"0,22"
								,"stato":"attiva "
								},

								{
								"check":"<input type='checkbox' data-status='ATTIVA_DA_ESEGUIRE' value='26' name='cRate'/>"

								,"rata":"26"
								,"data":"28/12/2022"
								,"importo":"0,22"
								,"stato":"attiva "
								},

								{
								"check":"<input type='checkbox' data-status='ATTIVA_DA_ESEGUIRE' value='27' name='cRate'/>"

								,"rata":"27"
								,"data":"28/03/2023"
								,"importo":"0,22"
								,"stato":"attiva "
								},

								{
								"check":"<input type='checkbox' data-status='ATTIVA_DA_ESEGUIRE' value='28' name='cRate'/>"

								,"rata":"28"
								,"data":"28/06/2023"
								,"importo":"0,22"
								,"stato":"attiva "
								},

								{
								"check":"<input type='checkbox' data-status='ATTIVA_DA_ESEGUIRE' value='29' name='cRate'/>"

								,"rata":"29"
								,"data":"28/09/2023"
								,"importo":"0,22"
								,"stato":"attiva "
								},

								{
								"check":"<input type='checkbox' data-status='ATTIVA_DA_ESEGUIRE' value='30' name='cRate'/>"

								,"rata":"30"
								,"data":"28/12/2023"
								,"importo":"0,22"
								,"stato":"attiva "
								}

								];

								 $tableAttuali.bootstrapTable({
								 	data: dataAttuali,
            						sortable: true,
            						sortName: "rata",
						            sortOrder: "asc",
						            pagination : true,
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
								   }
								 })

						</script>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading visible-xs" role=" tab"="" id="storico">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion2" href="#collapsestorico" aria-expanded="false" aria-controls="collapsestorico" class="collapsed">Storico<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
					</h4>
				</div>
				<div id="collapsestorico" class="panel-collapse collapse" role="tabpanel" aria-labelledby="storico">
					<div class="panel-body">
						<div class="tab-wrap">
							<table id="tb-storico" cellspacing="0" cellpadding="0" border="0" class="sortableTable">
							<thead>
								<tr>
									<th data-field="srata" data-sortable="true" class="center sortableTh sortedTh">Rata</th>
									<th ata-field="sdata" data-sortable="true" class="sortableTh" data-sorter="fixDate">Data esecuzione</th>
									<th data-field="simporto" class="right sortableTh" data-sortable="true" data-sorter="fixQuant">Importo</th>
									<th data-field="sstato" data-sortable="true" class="sortableTh">Stato</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>

						<script type="text/javascript">
						var $tableStorico = $('#tb-storico');
						var dataStorico = [

						{"srata":"1"
						,"sdata":"28/09/2016"
						,"simporto":"0,22"
						,"sstato":"annullata"
						}

						];


						//Crea la tabella ordinabile e paginabile
						$(function () {
							$tableStorico.bootstrapTable({
								 	data: dataStorico,
            						sortable: true,
            						sortName: "srata",
						            sortOrder: "asc",
						            pagination : true,
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
								   }
								 })
						

						});
						</script>



						</div>
					</div>
				</div>
			</div>
		
		
	</div>
</div>
<div class="form-group">
    <div class="row">
      <div class="col-xs-12">
        <div class="btn-align-right">
          <a type="button" class="btn btn-primary">gestione ordini</a>
           <a type="button" class="btn btn-primary">nuovo bonifico periodico</a>
        </div>
      </div>
    </div>
</div>
<script>
//inizializzazione dei tab-accordion
//TRASFORMA IL TAB DI CONTENUTO IN ACCORDION SU MOBILE
//possono coesistere più gruppo di tab/accordion in pagina
//parametri: id contenitore e incice tab ch edeve essere aperto al load

$(function(){
	resizeTab('tabBonificoPeriodico',0);
});


</script>



		</section>
	</div>
</div>
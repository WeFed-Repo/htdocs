
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
			<p>I documenti sotto elencati possono essere:</p>
				<ul>
					<li>salvati sul tuo pc</li>
					<li>stampati</li>
					<li>copiati nelle tue cartelle personali</li>
				</ul>
			<h4>Riepilogo criteri di ricerca</h4>
			<form class="formGenerico borderFormRounded output" role="form" id="form02">
				<div class="form-group">
					<div class="row">
					 	<div class="col-sm-12">
							<label class="control-label-output">Rapporto</label>
							<span class="output">Tutti</span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
					 	<div class="col-sm-6">
							<label class="control-label-output">Categoria Documento</label>
							<span class="output">Tutti</span>
						</div>
						<div class="col-sm-6">
							<label class="control-label-output">Tipo Documento</label>
							<span class="output">Tutti</span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
					 	<div class="col-sm-6">
							<label class="control-label-output">Stato</label>
							<span class="output">Tutti</span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
					 	<div class="col-sm-6">
							<label class="control-label-output">Periodo da</label>
							<span class="output">01/2016</span>
						</div>
						<div class="col-sm-6">
							<label class="control-label-output">a</label>
							<span class="output">11/2016</span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
					 	<div class="col-sm-6">
							<label class="control-label-output">Importo da</label>
							<span class="output">Tutti</span>
						</div>
						<div class="col-sm-6">
							<label class="control-label-output">a</label>
							<span class="output">Tutti</span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
					 	<div class="col-sm-6">
							<label class="control-label-output">N. doc. trovati</label>
							<span class="output">24</span>
						</div>
						
					</div>
				</div>
			
			</form>
		</section>
		
		<section>
			<div class="row">
				<div class="col-sm-12">
					<div class="flRight pulsantiera">
						<a onclick"javascript:;" class="no-underline btn-icon" title="Stampa Documento"><i class="icon icon-2x icon-print_ria_filled"></i></a>
						<a onclick"javascript:;" class="no-underline btn-icon" title="Download"><i class="icon icon-2x icon-download"></i></a>
					</div>
				</div>
			</div>
			<table id="tableDocumenti" data-toggle="table" cellspacing="0" cellpadding="0" border="0" class="sortableTable" data-sort-name="nomeDoc" data-sort-order="asc" data-select-item-name="idDocumento">
			     <thead>
			        <tr>
			            <th data-field="pdfDoc" class="center"></th>
			            <th data-field="nomeDoc" data-sortable="true" class="left">Nome documento</th>
			            <th data-field="data" data-sortable="true" class="center" data-sorter="fixDate">Data</th>
			          	<th data-field="rapporto" data-sortable="true" class="center">Rapporto</th>
			          	<th data-field="importo" data-sortable="false" class="right">Importo<br>(euro)</th>
			          	<th data-field="dett" data-sortable="false" class="center">Dett</th>
			          	<th data-field="stato" data-sortable="true" class="center">Stato</th>
			            <th data-field="check" data-sortable="false" class="center nodet"><input type="checkbox" id="selectAll"></th>
			        </tr>
			     </thead>
			     <tbody>
			     	<tr class="dispari">
			     		<td><a class="no-underline btn-icon" href="#" target="_blank" title="Certificazione interessi mutui"><i class="icon icon-pdf_circle_filled"></i></a></td>
			     		<td><a href="#">Certificazione interessi mutui</a></td>
			     		<td>28/01/2016</td>
			     		<td>4397</td>
			     		<td>4397,45 &euro;</td>
			     		<td>
			     			<span class="closeable" data-toggle="tooltip" data-title="lorem ispum dolor">
				     			<a class="btn-icon" title="Certificazione interessi mutui">
				     				<i class="icon icon-big-zoom_more"></i>
				     				<i class="icon icon-small-zoom_more"></i>
				     			</a>
				     		</span>

			     		</td>
			     		<td>New</td>
			     		<td><input data-index="0" name="idDocumento" type="checkbox" value="180000044204"></td>
			     	</tr>
			     	<tr class="pari">
			     		<td><a class="no-underline btn-icon" href="#" target="_blank" title="Certificazione interessi mutui"><i class="icon icon-pdf_circle_filled"></i></a></td>
			     		<td><a href="#">Certificazione interessi mutui</a></td>
			     		<td>01/02/2016</td>
			     		<td>4397</td>
			     		<td>4397,46 &euro;</td>
			     		<td>
			     			<span class="closeable" data-toggle="tooltip" data-title="lorem ispum dolor">
				     			<a class="btn-icon" title="Certificazione interessi mutui">
				     				<i class="icon icon-big-zoom_more"></i>
				     				<i class="icon icon-small-zoom_more"></i>
				     			</a>
				     		</span>

			     		</td>
			     		<td>New</td>
			     		<td><input data-index="0" name="idDocumento" type="checkbox" value="180000044205"></td>
			     	</tr>
			     	<tr class="dispari">
			     		<td><a class="no-underline btn-icon" href="#" target="_blank" title="Certificazione interessi mutui"><i class="icon icon-pdf_circle_filled"></i></a></td>
			     		<td><a href="#">Certificazione interessi mutui</a></td>
			     		<td>07/02/2016</td>
			     		<td>4397</td>
			     		<td>5397,45 &euro;</td>
			     		<td>
			     			<span class="closeable" data-toggle="tooltip" data-title="lorem ispum dolor">
				     			<a class="btn-icon" title="Certificazione interessi mutui">
				     				<i class="icon icon-big-zoom_more"></i>
				     				<i class="icon icon-small-zoom_more"></i>
				     			</a>
				     		</span>

			     		</td>
			     		<td>Letto</td>
			     		<td><input data-index="0" name="idDocumento" type="checkbox" value="180000044206"></td>
			     	</tr>
			     </tbody>
			</table>
			<div class="form-group formGenerico">
				<div class="row">
					<div class="col-sm-3">
			   	 		<label class="control-label">copia doc. selezionati in</label>
			   	 		<select name="" class="form-control">
							<option>-crea cartella personale</option>
							<option>lorem ipsum</option>
			   	 		</select>
   	 				</div>
   	 				<div class="col-sm-3">
						<div class="btn-align-left no-label">
							<a type="button" class="btn btn-primary" id="creaCartella">Ok</a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 no-label">
						<div class="btn-align-right">
	          				<a type="button" class="btn btn-primary">effettua nuova ricerca</a>
	       				</div>
	       			</div>
				</div>
			</div>
		</section>
	</div>
</div>
<script>

//funzioni che partono dopo aver costruito la tabella
$('#tableDocumenti').on('post-body.bs.table', function () {
    var inputCheck = $('input[name="idDocumento"]');
    $('#selectAll').click(function(){
 		$(this).is(':checked')  ? inputCheck.prop('checked',true) : inputCheck.prop('checked',false) 
 	});
 	$('.pulsantiera .icon,#creaCartella').click(function(el){
 		 ////usare stesse funzioni in produzione MA invece di alert fare aprire un TOOLTIP
 		el = $(this);
 		
 		if($('input[name="idDocumento"]:checked').length==0)
 		{
 			el.attr('data-toggle','tooltip').attr('data-title','Selezionare almeno un elemento');
 			initTooltip();
 			el.tooltip('show');
 		}
 		else {
 			el.attr('data-toggle','');
 			//fare le chiamate del caso
 		}
 	})
});
$('#tableDocumenti').on('check.bs.table', function () {
	$("[data-toggle='tooltip']").tooltip('hide');
})
</script>
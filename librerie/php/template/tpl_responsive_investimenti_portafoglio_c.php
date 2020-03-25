
<script>
$(function () {
var data = 
{
	"esitoCall" : "true",
	"msgEsitoCall" : "_",
	"codEsitoCall" : "-1",
	"dati" : [{"titolo":"Titoli","controvaloreDiCarico":"83.445,47","controvaloreAttuale":"44.153,86","plusMinusAssoluta":"-3.029,52","plusMinusPerc":"-3,63"},{"titolo":"Fondi/Sicav","controvaloreDiCarico":"19.832,29","controvaloreAttuale":"19.787,42","plusMinusAssoluta":"-44,87","plusMinusPerc":"-0,23"},{"titolo":"Totale","controvaloreDiCarico":"103.277,76","controvaloreAttuale":"63.941,28","plusMinusAssoluta":"-3.074,39","plusMinusPerc":"-2,98"}],
	"isChart" : "true",
	"msgChartEsito" : "null",
	"datiChart" : "M=435.32324&O=32371.09&OE=9611.77&AI=21523.096759999997&AE=0.0&AL=0.0",
	"isQuotazione" : "false"
}

 $('#tb-portafoglio-bpm3').bootstrapTable({
       data: data.dati
 })
 $('#idChartPortafoglio').html('<img src="'+cgi_script +'/FMP/chartPortafoglio.do?'+data.datiChart+'" border="0"></img>');
})
</script>
<?php if ($bank == "bpm") { ?>
<section>
	<h2>Situazione in portafoglio</h2>
</section>
<section>
	<form class="formGenerico borderFormRounded output" role="form" id="form02">
		<div class="form-group">
			<div class="row">
				<div class="col-sm-6">
					<label class="control-label-output">Deposito titoli</label>
					<select class="form-control">
						<option>37/123213213 Rossi Paola</option>
					</select>
				</div>
			</div>
		</div>
	</form>
</section>
<section>
	<div class="navContFirstLev outerTab">
	<div class="innerTab">
		<ul class="tabmedium">
			<li><a href="/connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_investimenti_portafoglio.php&liv0=4&liv1=0&liv2=0&liv3=0&responsive=y#">titoli</a></li>
			<li><a href="#">fondi e sicav</a></li>
			<li  class="on"><a href="#">totale portafoglio</a></li>
		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-nofill">
		<div class="tithelp">
			<h4>Dettaglio portafoglio</h4>
			<div class="flRight"><a href="#1" class="no-underline btn-icon" data-target="#helpPortafoglio" data-toggle="modal"><i class="icon icon-info_fill icon-2x"></i></a><br class="clear"></div>
		</div>
		<table cellspacing="0" cellpadding="0" border="0" id="tb-portafoglio-bpm3">
			<thead>
				 <tr>
		            <th class="left"  data-field="titolo"></th>
		            <th class="right"  data-field="controvaloreDiCarico">Controvalore di carico</th>
		            <th class="right" data-field="controvaloreAttuale">Controvalore Attuale</th>
		    		<th class="right" data-field="plusMinusAssoluta">Plus/Minus Assoluta</th>
		    		<th class="right" data-field="plusMinusPerc">Plus/Minus%</th>
		    </thead>
		   
		</table>
		<div class="form-group">
		    <div class="row">
		      <div class="col-xs-12">
		        <div class="btn-align-right">
		          <a type="button" class="btn btn-primary">esporta in excel</a>
		          <a type="button" class="btn btn-primary">stampa</a>
		        </div>
		      </div>
		    </div>
		</div>
	</div>
</div>
<div id="idChartPortafoglio"></div>
</section>
<?php }
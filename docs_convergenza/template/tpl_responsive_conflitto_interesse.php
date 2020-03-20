<h2>Conflitto di interesse</h2>
<section>
	<p>
		In questa pagina sono elencati gli strumenti finanziari, negoziabili online, per i quali <strong>la banca &egrave; in conflitto di interesse</strong>, con indicazione specifica della <strong>natura</strong> e della <strong>fonte</strong> del conflitto.
	</p>
	<form class="formGenerico borderFormRounded output" role="form" id="form02">
		<div class="form-group">
			<div class="row">
				<div class="col-sm-4">
					<label class="control-label">Tipologia strumento</label>
					<select name="" class="form-control">
			              <option>Lorem ipsum</option>
			              <option>Lorem ipsum</option>
			              <option>Lorem ipsum</option>
                	</select>
				</div>
				<div class="col-sm-4">
					<label class="control-label">Codice conflitto</label>
					<select name="" class="form-control">
			              <option>Lorem ipsum</option>
			              <option>Lorem ipsum</option>
			              <option>Lorem ipsum</option>
                	</select>
				</div>
				<div class="col-sm-4">
					<label class="control-label">mercato</label>
					<select name="" class="form-control">
			              <option>Lorem ipsum</option>
			              <option>Lorem ipsum</option>
			              <option>Lorem ipsum</option>
                	</select>
				</div>
			</div>
		</div>
		<div class="form-group btnWrapper">
            <div class="btn-align-center">
                <a type="button" class="btn btn-primary" id="">cerca</a>
                <br class="clear">
            </div>
        </div>
	</form>
	<a href="#1" class="no-underline btn-icon flRight" data-toggle="modal" data-target="#layerLegenda"><i class="icon icon-info_fill icon-2x"></i></a>
	<table id="tableConflittiInt" cellspacing="0" cellpadding="0" border="0">
	      <thead>
	        <tr>
	            <th data-field="titolo" class="left" rowspan="2">Titolo</th>
	            <th data-field="desc" class="left">Descrizione</th>
	            <th data-field="codice" class="center" rowspan="2">Codice</th>
	            <th data-field="mercato" class="center">mercato</th>
	        </tr>
	     </thead>
	     <tbody>
	     	<tr class="dispari">
	     		<td>BAMI</td>
	     		<td>BANCO BPM SPA</td>
	     		<td class="center"><span class="txthelp closeable" data-title="<strong>Titolo del tooltip</strong><br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." data-toggle="tooltip">131</span></td>
	     		<td class="center">MTA</td>
	     	</tr>
	     </tbody>
	</table>
	<div>
        <div class="btn-align-right">
         	<a type="button" class="btn btn-primary">stampa</a>
        </div>
      </div>
</section>
<script>
    var $tableConflitti = $('#tableConflittiInt');
    $(function () {
		$tableConflitti.bootstrapTable({
              pagination : "true",
              pageSize: 15,
              pageList: [15, 30, 60, 'tutti'],
            });
     });
</script>
<div class="modal fade" id="layerLegenda" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header"> <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
            </div>   
               <div class="modal-body">
	               <table cellspacing="0" cellpadding="0" border="0">
				      <thead>
				        <tr>
				            <th colspan="2">Tipo di conflitto</th>
				         </tr>
				     </thead>
				     <tbody>
				     	<tr class="dispari">
				     		<td>131</td>
				     		<td>PRODOTTI FINANZIARI EMESSI DALLA BANCA O DA SOCIET&Agrave; DEL GRUPPO</td>
				     	</tr>
				     	<tr class="pari">
				     		<td>D131</td>
				     		<td>PRODOTTI FINANZIARI EMESSI DALLA BANCA O DA SOCIETÀ DEL GRUPPO</td>
				     	</tr>
				     </tbody>
					</table>
            </div>
        </div>
    </div>
</div>

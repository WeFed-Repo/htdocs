<script type="text/javascript">
$(function() {
	    $( "#altri" ).dialog({
	      autoOpen: false,
	      width:600,
	      modal:true
	    });
		$('#vediDettaglioAltri').click(function(){
    		$( "#altri" ).dialog("open");
		})
		$('#closeAltri').click(function(){
    		$( "#altri" ).dialog("close");
		})
    })
</script>

<img src="/HT/IMAGES/i_dettaglio.gif" id="vediDettaglioAltri" style="width:15px" title="Dettaglio" alt="Dettaglio">

<div id="altri">
	<div class="col-xs-12 clearfix">
		<div class="innerBoxSkyBlue inner margin10 w-auto clearfix">
			<div class="xs-col-12 clearfix">
				<h1 class="boxTitle txt_center">
					ALTRI RAPPORTI
				</h1>
				<div class="form-group col-xs-12">
					<div class="table-responsive tabSelezioneCarte" style="display: block;">
						<table class="table table-striped dataTable no-footer">
						<thead>
							<tr class="hover">
								<th width="20%">Tipo Rapporto</th>
								<th width="5%">Numero</th>
								<th width="45%">Filiale</th>
								<th width="30%">Intestazione</th>
							</tr>
						</thead>
							
						<tr>
							<td>
								YouCall
							</td>
							<td>
								25263001
							</td>
							<td style="text-align:right">
								MILANO - 0000
							</td>
							<td style="text-align:right">
								 COGNOME NOME
							</td>
						</tr>
					
						<tr>
							<td>
								YouWeb
							</td>
							<td>
								25264001
							</td>
							<td style="text-align:right">
								MILANO - 0000
							</td>
							<td style="text-align:right">
								 COGNOME NOME
							</td>
						</tr>
					
						<tr>
							<td>
								Capital Gain
							</td>
							<td>
								15865341
							</td>
							<td style="text-align:right">
								MILANO - 0000
							</td>
							<td style="text-align:right">
								 NOME COGNOME
							</td>
						</tr>
						</table>
					</div>
					<div class="pull-right margin-bottom20 margin-top10">
						<input type="button" name="" id="closeAltri" class="btn" value="Chiudi">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
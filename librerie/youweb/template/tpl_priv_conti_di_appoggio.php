<div class="visible-print-block"> 
	<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
	<div class="pull-right">
		10/03/2017	
	</div>
</div>

<script>
	$(document).ready(function(e) {
	  	if (isMobile()) 
			$("#CCBF").cardBoxTable({
				colTitleIdx: 3,
				colsAction: [true,true,false,false,false,false,false],
				colActionPos: "top-right",
				show: function() {
					$('.table-responsive').addClass('cardbox-background');
					$(this).find('.col-xs-7 span').css('width','100%')
												  .css('overflow-wrap','break-word')
								                  .css('word-wrap','break-word');
					$(this).find('img').css('width','20px').css('height','20px');
					$(this).find('img').css('width','20px').css('height','20px');
				},
			});
	});
</script>
<div class="riquadro clearfix">
	<div class="clearfix">
<style>
.imgSrv{
	float: none;
}
</style>


		<h1>
			<div class="hidden-print hidden-xxs flag contiAppoggio">&nbsp;</div>
			<span>Conti di appoggio</span>
		</h1>

		<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: conti di appoggio&pagCont=testo02')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>

		<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
		  <div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header clearfix">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				</div>
				<div class="modal-body">
				</div>
			</div>
		  </div>
		</div>

		<div class="col-xs-12 hidden-xs hidden-print">
			<div class="contentPagina">
				In questa sezione viene visualizzata la lista dei conti di appoggio del tuo conto deposito. Puoi modificare in autonomia i dati di un conto già censito cliccando sul pulsante a forma di matita (modifica) o inserirne uno nuovo direttamente tramite il pulsante "aggiungi nuovo conto".
			</div>
		</div>
	</div>
	
	<div class="section clearfix">
		<form id="listaContiAppoggio" method="post" action="/WEBHT/cd/listaContiAppoggio.do" class="form-horizontal"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="32d4a420453aeaebe366e301792684da"></div>
			<h3 class="titleSection">
				Rapporto selezionato
			</h3>

			<div class="selezioneCC tabellaSelezioneCC">
				<div class="CCselezionato clearfix">
			<!-- C'è anche la sezione saldo -->
			
			
			<!-- C'è solo la sezione intestatario -->
			
					<div class="col-sm-6 col-xs-12">
						<span class="col-xs-4" id="labelIntestatario">
							Intestato a:
						</span>
						<span class="col-xs-6" id="intestazione">
									Cognome Nome 		
								
								</span>
						<span class="col-xs-4" id="conto">Conto deposito </span>
						<span class="col-xs-6" id="numero">00000000</span>
					</div>
					<div class="col-sm-6 col-xs-12">
						<span class="col-xs-4 hidden-xs" id="conto">
							&nbsp;
						</span>
						<span class="col-xs-6 hidden-xs" id="conto">
							&nbsp;
						</span>
						<span class="col-xs-4">
							Filiale:
						</span>
						<span class="col-xs-6" id="agenzia">MILANO&nbsp;-&nbsp; 
										
										
											2070
										
									</span>
					</div>
				</div>
	
				<div class="tabSelezioneCC" style="display: none;">
					<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
						<div id="DataTables_Table_10_wrapper" class="dataTables_wrapper no-footer">
							<table class="table table-responsive table-striped dataTable no-footer" id="DataTables_Table_10" role="grid">
							<tbody>
								<tr role="row" class="odd">
									<td class="hidden sorting_1">&nbsp;<input type="hidden" name="codContoCorrente" value="001|0000|207000000000"></td>
									<td headers="tipoRapporto">Conto deposito</td>
									<td headers="ccRapporto">00000000</td>
									<td headers="filialeRapporto" class="hidden-xs">MILANO&nbsp;-&nbsp; 0000</td>
									<td headers="intestazioneRapporto">Cognome Nome</td>
									<td headers="divisaSaldoDisponibile" class="hidden"></td>
									<td headers="divisaSaldoContabile" class="hidden"></td>
									<td class="hidden">&nbsp;</td>
								</tr>
							</tbody>
							<thead>
								<tr class="hover" role="row"><th class="hidden sorting_asc" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-sort="ascending" aria-label="&amp;nbsp;: ordinamento decrescente">&nbsp;</th><th headers="tipoRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Tipo rapporto: ordinamento crescente">Tipo rapporto</th><th headers="ccRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Numero: ordinamento crescente">Numero</th><th headers="filialeRapporto" class="hidden-xs sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Filiale: ordinamento crescente">Filiale</th><th headers="intestazioneRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Intestazione: ordinamento crescente">Intestazione</th><th headers="divisaSaldoDisponibile" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th><th headers="divisaSaldoContabile" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th><th class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="&amp;nbsp;: ordinamento crescente">&nbsp;</th></tr>
							</thead>
							</table>
						</div>
					</div>
				</div>
			</div>
<!-- .selezioneCC.tabellaSelezioneCC -->
<script type="text/javascript">

$(document).ready(function(){

    //se il conto è gia stato selezionato devo popolarlo via javascript, il default non va bene
    
     
	 var submitOnClick = false;
	 var str = $('#intestazione').text();
	if($.trim(str).length>26){
		$('#intestazione').removeClass('col-xs-6');
		$('#intestazione').addClass('col-xs-10');
		$('#labelIntestatario').addClass('hide');
	}
	 
	
	    submitOnClick = true;
	
	
	//se i rapporti sono maggiori di 8 deve essere fatta la paginazione	
	
		
			CCselectionInit(submitOnClick, false, false);
		
		
	
})

</script>
		</form>
	</div>
	
	<div class="col-xs-12 col-sm-12">	
		
		<button class="btn btn-primary pull-right" onclick="$('#formGestContoAppoggio').submit()" style="margin-top: 10px;">
			Aggiungi <span class="hidden-xs">nuovo conto</span>
		</button>
	</div>
	
	<div class="section clearfix">
		<form id="formGestContoAppoggio" method="post" action="/WEBHT/cd/modificaContoAppoggio.do" class="form-horizontal"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="32d4a420453aeaebe366e301792684da"></div> 	
			<input type="hidden" name="azioneBen" value="inserisci"> 
			<input type="hidden" name="codContoCorrente" value="001|2070|207000000000">
			<input type="hidden" name="iban" value="">
			<!--           OPERA          -->















	



	<div class="selezioneCC">
		 <div class="table-responsive tabSelezioneCarte clear-paddingImportant" style="display: block;">
			<div id="CCBF_wrapper" class="dataTables_wrapper no-footer">
				<table id="CCBF" class="table table-striped dataTable no-footer" role="grid">
				<colgroup>
					<col width="3%">
					<col width="3%">
					<col width="10%">
					<col width="16%">
					<col width="24%">
					<col width="20%">
					<col width="24%">
				</colgroup>
				<thead>
					<tr class="hover" role="row">
						<th style="width: 5px;" class="hidden-print sorting_disabled" rowspan="1" colspan="1">&nbsp; </th>
						<th style="width: 6px;" class="hidden-print sorting_disabled" rowspan="1" colspan="1">&nbsp; </th>
						<th class="text sorting_disabled" title="Conto deposito" rowspan="1" colspan="1" style="width: 73px;">Conto deposito</th>
						<th class="text sorting_disabled" title="colonna.nick" rowspan="1" colspan="1" style="width: 130px;">Nickname</th>
						<th class="text sorting_disabled" title="Intestatario" rowspan="1" colspan="1" style="width: 205px;">Intestatario</th>
						<th class="text sorting_disabled" title="Coordinate conto" rowspan="1" colspan="1" style="width: 173px;">Coordinate conto</th>
						<th class="text sorting_disabled" title="Banca" rowspan="1" colspan="1" style="width: 206px;">Banca</th>
					</tr>
				</thead>
				<tbody>
					<tr role="row" class="odd">
						<td class="oCenter hidden-print"><a href="javascript:submitForm('formGestContoAppoggio','azioneBen','modifica','codContoCorrente','001|2070|207000000000','iban','IT92N0503420400000000000000')"><img src="/HT/fe/img/i_modifica.gif" width="20
" height="20
" title="modifica beneficiario" alt="modifica beneficiario"></a></td>
						<td class="oCenter hidden-print"><a href="javascript:submitForm('formGestContoAppoggio','azioneBen','elimina','codContoCorrente','001|2070|207000000000','iban','IT92N0503420400000000000000')"><img src="/HT/fe/img/i_cancella.png" width="20
" height="20
" title="elimina beneficiario" alt="elimina beneficiario"></a></td>
						<td class="oCenter">000000000000</td>
						<td class="oLeft">NOME COGNOME</td>
						<td class="oLeft">NOME COGNOME</td>
						<td class="oCenter"><b>IBAN:</b> IT00N0000000000000000000000</td>
						<td class="oLeft">BANCO BPM S.P.A.</td>
					</tr>
					<tr role="row" class="odd">
						<td class="oCenter hidden-print"><a href="javascript:submitForm('formGestContoAppoggio','azioneBen','modifica','codContoCorrente','001|2070|207000000000','iban','IT92N0503420400000000000000')"><img src="/HT/fe/img/i_modifica.gif" width="20
" height="20
" title="modifica beneficiario" alt="modifica beneficiario"></a></td>
						<td class="oCenter hidden-print"><a href="javascript:submitForm('formGestContoAppoggio','azioneBen','elimina','codContoCorrente','001|2070|207000000000','iban','IT92N0503420400000000000000')"><img src="/HT/fe/img/i_cancella.png" width="20
" height="20
" title="elimina beneficiario" alt="elimina beneficiario"></a></td>
						<td class="oCenter">000000000000</td>
						<td class="oLeft">NOME COGNOME</td>
						<td class="oLeft">NOME COGNOME</td>
						<td class="oCenter"><b>IBAN:</b> IT00N0000000000000000000000</td>
						<td class="oLeft">BANCO BPM S.P.A.</td>
					</tr>
					<tr role="row" class="odd">
						<td class="oCenter hidden-print"><a href="javascript:submitForm('formGestContoAppoggio','azioneBen','modifica','codContoCorrente','001|2070|207000000000','iban','IT92N0503420400000000000000')"><img src="/HT/fe/img/i_modifica.gif" width="20
" height="20
" title="modifica beneficiario" alt="modifica beneficiario"></a></td>
						<td class="oCenter hidden-print"><a href="javascript:submitForm('formGestContoAppoggio','azioneBen','elimina','codContoCorrente','001|2070|207000000000','iban','IT92N0503420400000000000000')"><img src="/HT/fe/img/i_cancella.png" width="20
" height="20
" title="elimina beneficiario" alt="elimina beneficiario"></a></td>
						<td class="oCenter">000000000000</td>
						<td class="oLeft">NOME COGNOME</td>
						<td class="oLeft">NOME COGNOME</td>
						<td class="oCenter"><b>IBAN:</b> IT00N0000000000000000000000</td>
						<td class="oLeft">BANCO BPM S.P.A.</td>
					</tr>
					<tr role="row" class="odd">
						<td class="oCenter hidden-print"><a href="javascript:submitForm('formGestContoAppoggio','azioneBen','modifica','codContoCorrente','001|2070|207000000000','iban','IT92N0503420400000000000000')"><img src="/HT/fe/img/i_modifica.gif" width="20
" height="20
" title="modifica beneficiario" alt="modifica beneficiario"></a></td>
						<td class="oCenter hidden-print"><a href="javascript:submitForm('formGestContoAppoggio','azioneBen','elimina','codContoCorrente','001|2070|207000000000','iban','IT92N0503420400000000000000')"><img src="/HT/fe/img/i_cancella.png" width="20
" height="20
" title="elimina beneficiario" alt="elimina beneficiario"></a></td>
						<td class="oCenter">000000000000</td>
						<td class="oLeft">NOME COGNOME</td>
						<td class="oLeft">NOME COGNOME</td>
						<td class="oCenter"><b>IBAN:</b> IT00N0000000000000000000000</td>
						<td class="oLeft">BANCO BPM S.P.A.</td>
					</tr>
					<tr role="row" class="odd">
						<td class="oCenter hidden-print"><a href="javascript:submitForm('formGestContoAppoggio','azioneBen','modifica','codContoCorrente','001|2070|207000000000','iban','IT92N0503420400000000000000')"><img src="/HT/fe/img/i_modifica.gif" width="20
" height="20
" title="modifica beneficiario" alt="modifica beneficiario"></a></td>
						<td class="oCenter hidden-print"><a href="javascript:submitForm('formGestContoAppoggio','azioneBen','elimina','codContoCorrente','001|2070|207000000000','iban','IT92N0503420400000000000000')"><img src="/HT/fe/img/i_cancella.png" width="20
" height="20
" title="elimina beneficiario" alt="elimina beneficiario"></a></td>
						<td class="oCenter">000000000000</td>
						<td class="oLeft">NOME COGNOME</td>
						<td class="oLeft">NOME COGNOME</td>
						<td class="oCenter"><b>IBAN:</b> IT00N0000000000000000000000</td>
						<td class="oLeft">BANCO BPM S.P.A.</td>
					</tr>
					<tr role="row" class="odd">
						<td class="oCenter hidden-print"><a href="javascript:submitForm('formGestContoAppoggio','azioneBen','modifica','codContoCorrente','001|2070|207000000000','iban','IT92N0503420400000000000000')"><img src="/HT/fe/img/i_modifica.gif" width="20
" height="20
" title="modifica beneficiario" alt="modifica beneficiario"></a></td>
						<td class="oCenter hidden-print"><a href="javascript:submitForm('formGestContoAppoggio','azioneBen','elimina','codContoCorrente','001|2070|207000000000','iban','IT92N0503420400000000000000')"><img src="/HT/fe/img/i_cancella.png" width="20
" height="20
" title="elimina beneficiario" alt="elimina beneficiario"></a></td>
						<td class="oCenter">000000000000</td>
						<td class="oLeft">NOME COGNOME</td>
						<td class="oLeft">NOME COGNOME</td>
						<td class="oCenter"><b>IBAN:</b> IT00N0000000000000000000000</td>
						<td class="oLeft">BANCO BPM S.P.A.</td>
					</tr>
					<tr role="row" class="odd">
						<td class="oCenter hidden-print"><a href="javascript:submitForm('formGestContoAppoggio','azioneBen','modifica','codContoCorrente','001|2070|207000000000','iban','IT92N0503420400000000000000')"><img src="/HT/fe/img/i_modifica.gif" width="20
" height="20
" title="modifica beneficiario" alt="modifica beneficiario"></a></td>
						<td class="oCenter hidden-print"><a href="javascript:submitForm('formGestContoAppoggio','azioneBen','elimina','codContoCorrente','001|2070|207000000000','iban','IT92N0503420400000000000000')"><img src="/HT/fe/img/i_cancella.png" width="20
" height="20
" title="elimina beneficiario" alt="elimina beneficiario"></a></td>
						<td class="oCenter">000000000000</td>
						<td class="oLeft">NOME COGNOME</td>
						<td class="oLeft">NOME COGNOME</td>
						<td class="oCenter"><b>IBAN:</b> IT00N0000000000000000000000</td>
						<td class="oLeft">BANCO BPM S.P.A.</td>
					</tr>
					<tr role="row" class="odd">
						<td class="oCenter hidden-print"><a href="javascript:submitForm('formGestContoAppoggio','azioneBen','modifica','codContoCorrente','001|2070|207000000000','iban','IT92N0503420400000000000000')"><img src="/HT/fe/img/i_modifica.gif" width="20
" height="20
" title="modifica beneficiario" alt="modifica beneficiario"></a></td>
						<td class="oCenter hidden-print"><a href="javascript:submitForm('formGestContoAppoggio','azioneBen','elimina','codContoCorrente','001|2070|207000000000','iban','IT92N0503420400000000000000')"><img src="/HT/fe/img/i_cancella.png" width="20
" height="20
" title="elimina beneficiario" alt="elimina beneficiario"></a></td>
						<td class="oCenter">000000000000</td>
						<td class="oLeft">NOME COGNOME</td>
						<td class="oLeft">NOME COGNOME</td>
						<td class="oCenter"><b>IBAN:</b> IT00N0000000000000000000000</td>
						<td class="oLeft">BANCO BPM S.P.A.</td>
					</tr>
					<tr role="row" class="odd">
						<td class="oCenter hidden-print"><a href="javascript:submitForm('formGestContoAppoggio','azioneBen','modifica','codContoCorrente','001|2070|207000000000','iban','IT92N0503420400000000000000')"><img src="/HT/fe/img/i_modifica.gif" width="20
" height="20
" title="modifica beneficiario" alt="modifica beneficiario"></a></td>
						<td class="oCenter hidden-print"><a href="javascript:submitForm('formGestContoAppoggio','azioneBen','elimina','codContoCorrente','001|2070|207000000000','iban','IT92N0503420400000000000000')"><img src="/HT/fe/img/i_cancella.png" width="20
" height="20
" title="elimina beneficiario" alt="elimina beneficiario"></a></td>
						<td class="oCenter">000000000000</td>
						<td class="oLeft">NOME COGNOME</td>
						<td class="oLeft">NOME COGNOME</td>
						<td class="oCenter"><b>IBAN:</b> IT00N0000000000000000000000</td>
						<td class="oLeft">BANCO BPM S.P.A.</td>
					</tr>
				</tbody>
				</table>
			</div>
		</div>
	</div>

<!--           /OPERA           -->
		</form>
	</div>
</div>
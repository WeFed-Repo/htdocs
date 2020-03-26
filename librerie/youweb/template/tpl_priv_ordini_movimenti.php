
					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage" />
						<div class="pull-right">
							  
							<fmt:formatDate type="date" value="${now}" pattern="${fmtdate}" />	
						</div>
					</div>
	 				<div class="riquadro clearfix"> 				  
						



	













<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag portafoglio">&nbsp;</div>
			
			
		
		
			
		
		
			
				
 					<span>Ordini e movimenti</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>

<!--[if gte IE 8]>
<style>
.jqGridTOLDiv {
	display: block;
}
.jqGridTOLDiv .ui-jqgrid-bdiv {
	margin-top: auto;
}
</style>
<![endif]-->
						
						



<form id="formInvestimenti" method="post" action="/WEBHT/investimenti/ordiniMovimenti.do">
	
	
	



  



<div class="section clearfix">
	


<script type="text/javascript">	
$(function(){
	var submitOnClick = false;

    submitOnClick = true;


	CCselectionInit(submitOnClick, false, false);

	var str = $('#intestazione').text();
	if($.trim(str).length>26){
		$('#intestazione').removeClass('col-xs-4');
		$('#intestazione').addClass('col-xs-8');
		$('#labelIntestatario').addClass('hide');
	}
});
function isDossierInformativo() {return false;}
</script>

	
		
	
	
	<h3 class="titleSection">








		
			Seleziona Dossier
		
		
		

</h3>


	
	
	<div class="selezioneCC tabellaSelezioneCC">
		<div class="cartaSelezionata clearfix">
			<div class="col-xs-12">
				<span class="col-sm-2 col-xs-12 clear-paddingImportant" id="labelIntestatario">
					Intestazione:
				</span> 
				<span id="intestazione"	class="col-xs-6 clear-paddingImportant"> 
					Tallo Mauro Luca
				</span>
				<div class="col-xs-6 clear-paddingImportant">
					<span class="col-sm-4 col-xs-12 clear-paddingImportant"> 
						Filiale
				  	</span> 
				  	<span id="filiale" class="col-sm-6 col-xs-12 clear-paddingImportant">
						SEDE DI LODI - 2001
					</span> 
					<span class="col-sm-4 col-xs-12 clear-paddingImportant"> C/C </span> 
					<span class="col-sm-6 col-xs-12 bold clear-paddingImportant"> 
						00174456
 
						 
					</span>
				</div>
				<div class="col-xs-6 clear-paddingImportant">
					<span class="col-sm-4 col-xs-12 clear-paddingImportant">
						Dossier </span> 
						<span id="numero" class="col-sm-6 col-xs-12 clear-paddingImportant bold">
							000000106440 
						</span> 
						<span class="col-sm-4 col-xs-12 clear-paddingImportant"> 
							Saldo al
						</span> 
						<span class=" col-sm-6 col-xs-12 clear-paddingImportant">
					 		<select class="form-control" class="form-control wauto">
								
									<option value="24/05/2017">
										24/05/2017&nbsp;&nbsp;&nbsp;&nbsp;999.999.861.414,96&nbsp;&euro;
									</option>
								
									<option value="25/05/2017">
										25/05/2017&nbsp;&nbsp;&nbsp;&nbsp;999.999.861.414,96&nbsp;&euro;
									</option>
								
									<option value="26/05/2017">
										26/05/2017&nbsp;&nbsp;&nbsp;&nbsp;999.999.861.414,96&nbsp;&euro;
									</option>
								
									<option value="29/05/2017">
										29/05/2017&nbsp;&nbsp;&nbsp;&nbsp;999.999.861.414,96&nbsp;&euro;
									</option>
								
									<option value="30/05/2017">
										30/05/2017&nbsp;&nbsp;&nbsp;&nbsp;999.999.861.414,96&nbsp;&euro;
									</option>
								
							</select> 
						</span>
				</div>
			</div>
			
				<a href="javascript:void(0);" class="btnSelezioneCC">
					<img src="/HT/IMAGES/nGrafica/ico-select.png" id="btnSelezioneRapporto" title="Seleziona" alt="Seleziona" />
				</a>
			
		</div>

	<div class="table-responsive tabSelezioneCC" style="display: none;">
			<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
				<table class="table table-striped dataTable no-footer" id="DataTables_Table_10" role="grid">
			
					<thead>
						<tr>
							<th class="hidden" >&nbsp;</th>
							<th>Dossier</th>
							<th>Filiale</th>
							<th>Intestazione</th>
							<th>C/C</th>
						</tr>
					</thead>
					<tbody>
						
							<tr>
								
									
										
											<td class="hidden" ><input type="radio" name="chiaveDossier" value="007|2001|000000106440" checked="checked" onclick="submit()" id="chiaveDossier" /></td>
										
										
									
								
								
								<td>000000106440</td>
								<td>SEDE DI LODI - 2001</td>
								<td>TALLO MAURO LUCA</td>
								<td>00174456
</td>
							</tr>
						
							<tr>
								
									
										
											<td class="hidden" ><input type="radio" name="chiaveDossier" value="007|2001|000008318876" onclick="submit()" id="chiaveDossier" /></td>
										
										
									
								
								
								<td>000008318876</td>
								<td>SEDE DI LODI - 2001</td>
								<td>TALLO MAURO LUCA TALLO GIUSEPPINA</td>
								<td>00003610
</td>
							</tr>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</form>

						



 <div class="section clearfix">

 	





<div id="I_ORD" class="jqGridTOLDiv">
	<table id="I_ORD_Table" class="jqGridTOLTable"></table>
	
	<form id="formOrdiniDossier" method="post" action="/template/investimenti/ordiniDossierJson.php" class="divForm formHeaderGrid form-horizontal">
		<input type="hidden" name="chiaveDossier" value="007|2001|000000106440" />
		<input type="hidden" name="macroStato" value="SSSS" id="macroStato" />
	
				
		<div class="bs-example">
	<div class="form-group">
	<div class="form-field-input col-xs-6">
	<label class="control-label">Periodo(gg/mm/aaaa) </label> 
	<div class="form-field">Dal 
	<input type="text" name="dtDataDa" size="10" value="24/05/2014" id="dtDataDa" class="form-control datepicker    wauto " />
	<span class="margin-left5">Al </span>
	<input type="text" name="dtDataA" size="10" value="29/05/2017" id="dtDataA" class="form-control datepicker    wauto " />
	</div>
	</div>
	<div class="form-field-input col-xs-4">
	<label class="control-label">Stato ordini</label>
	<div>
	<input type="checkbox" id="ckTutti" value="S" onclick="checkboxOrdini(this);" class="middle"/>Tutti
	<input type="checkbox" id="ckInCorso" value="S" onclick="checkboxOrdini(this);" class="middle"/>In Corso
	<input type="checkbox" id="ckIneseguiti" value="S" onclick="checkboxOrdini(this);" class="middle"/>Revocati
	</div>
	<div>	
	<input type="checkbox" id="ckEseguiti" value="S" onclick="checkboxOrdini(this);" class="middle"/>Eseguiti
	<input type="checkbox" id="ckSoloIneseguiti" value="S" onclick="checkboxOrdini(this);" class="middle"/>Ineseguiti
	</div>
	</div>
	<div class="form-field-input col-xs-2"><input class="btn button" type="button" value="Ricerca" title="Ricerca" onclick="ricarica(this);" /></div>
	</div>
</div>

		
	
		<div class="clearfix"></div>
	</form>
</div>
<script>
	$(document).ready(function() {
		$('.datepicker').datepicker({
		buttonImage: '/HT/fe/img/calendar.png',
		 minDate: '-3Y' });
		startGrid('#I_ORD', { 
caption:"Visualizza Ordini",
height:'150',
colModel:[
{name:'datiJqGrid.id',jsonmap:'datiJqGrid.id',key:true, hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloTot',jsonmap:'datiJqGrid.titoloTot', hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloGTot',jsonmap:'datiJqGrid.titoloGTot', hidden:true, hidedlg:true},
{name:'act',jsonmap:'act',label:' ', width:20, align:'center',sortable:false,hidedlg:true},
{name:'numeroOrdine',jsonmap:'numeroOrdine',label:"Numero Ordine nascosto",title:"Numero Ordine nascosto",width:50,align:'Center',hidden:true,hidedlg:true},
{name:'numeroOrdineRidotto',jsonmap:'numeroOrdineRidotto',label:"Numero Ordine",title:"Numero Ordine",width:100,align:'Left',formatter:linkFmt,formatoptions:{funzioneJS:'goToPage',urlLink:'/template/investimenti/dettaglioOrdineDossier.php',numeroOrdine:'numeroOrdine',metodoDettaglio:'metodoDettaglio'},unformat:linkUnFmt},
{name:'titolo.denominazione',jsonmap:'titolo.denominazione',push:'N',label:"Descrizione  ",title:"Descrizione  ",width:100,align:'Left',formatter:linkFmt,formatoptions:{funzioneJS:'openDettaglioTitolo',urlLink:'/investimenti/dettaglioTitolo.do',isin:'titolo.isin',codMercatoInfo:'titolo.codMercatoInfo',tipoConvertito:'titolo.tipoConvertito'},unformat:linkUnFmt},
{name:'descCausale',jsonmap:'descCausale',label:"Causale",title:"Causale",width:70,align:'Left'},
{name:'quantita',jsonmap:'quantita',label:"Quantità",title:"Quantità",width:125,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D3'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'dataOrdine',jsonmap:'dataOrdine',label:"Data Ordine",title:"Data Ordine",width:100,align:'Right',formatter:'date',formatoptions:{srcformat:'d/m/Y H:i',newformat:'d/m/Y'},sorttype:'date'},
{name:'prezzoLimite',jsonmap:'prezzoLimite',label:"Prezzo",title:"Prezzo",width:70,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'titolo.anagrafica.divisaTrattazione',jsonmap:'titolo.anagrafica.divisaTrattazione',label:"Div.",title:"Div.",width:40,align:'Left'},
{name:'descStato',jsonmap:'descStato',label:"Stato",title:"Stato",width:100,align:'Left'},
{name:'metodoDettaglio',jsonmap:'metodoDettaglio',label:"null",title:"tipo servizio dettaglio",width:50,align:'Left',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency',hidden:true,hidedlg:true},
{name:'titolo.isin',jsonmap:'titolo.isin',push:'N',label:"isin",title:"isin",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'titolo.codMercatoInfo',jsonmap:'titolo.codMercatoInfo',push:'N',label:"codMercatoInfo",title:"codMercatoInfo",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'titolo.tipoConvertito',jsonmap:'titolo.tipoConvertito',push:'N',label:"tipoConvertito",title:"tipoConvertito",width:50,align:'Left',hidden:true,hidedlg:true}
],
opzioniTabella:[
{label:'Personalizza',funcOptions:{funzioneJS:opzioni}},
{label:'Esporta in Excel',funcOptions:{funzioneJS:esportaGrigliaExcel}},
{testDisplay:hidePopUpFunction,label:'Pop-up',funcOptions:{funzioneJS:apriPopupGriglia}},
{label:'Stampa',funcOptions:{funzioneJS:Stampa}},
{testDisplay:hidePopUpFunction,label:'Help',funcOptions:{funzioneJS:helpTabella}}
],
opzioniRiga:[
{label:"Revoca",funcOptions:{funzioneJS:InvestimentiRevoca,urlLink:'/investimenti/revocaOrdineDossier.do',numeroOrdine:'numeroOrdine'}},
{testDisplay:isDettaglioTol,label:"Dettaglio Ordine",funcOptions:{funzioneJS:goToPage,urlLink:'/investimenti/dettaglioOrdineDossier.do',numeroOrdine:'numeroOrdine',metodoDettaglio:'metodoDettaglio'}}
]
});

		
		$('#formOrdiniDossier').show();
		
		$("#ckInCorso").prop('checked', $("#macroStato").val().substr(0, 1) === 'S');
		$("#ckIneseguiti").prop('checked', $("#macroStato").val().substr(1, 1) === 'S');
		$("#ckEseguiti").prop('checked', $("#macroStato").val().substr(2, 1) === 'S');
		$("#ckSoloIneseguiti").prop('checked', $("#macroStato").val().substr(3, 1) === 'S');
		
		if($("#macroStato").val() === 'SSSS') {
			$("#ckTutti").prop('checked', true);		
		} else {
			$("#ckTutti").prop('checked', false);		
		}
	});

	
	function checkboxOrdini(clicked) {
		
		if(clicked.id === 'ckTutti') {
			if($("#ckTutti").prop('checked')) {
				$("#ckInCorso").prop('checked', true);
				$("#ckIneseguiti").prop('checked', true);
				$("#ckEseguiti").prop('checked', true);
				$("#ckSoloIneseguiti").prop('checked', true);
				$("#macroStato").val('SSSS');
			} else {
				$("#ckInCorso").prop('checked', false);
				$("#ckIneseguiti").prop('checked', false);
				$("#ckEseguiti").prop('checked', false);
				$("#ckSoloIneseguiti").prop('checked', false);
				$("#macroStato").val('NNNN');
			}
		} else {
			var ckInCorso = $("#ckInCorso").prop('checked');
			var ckIneseguiti = $("#ckIneseguiti").prop('checked');
			var ckEseguiti = $("#ckEseguiti").prop('checked');
			var ckSoloIneseguiti = $("#ckSoloIneseguiti").prop('checked');
			
			if(ckInCorso && ckIneseguiti && ckEseguiti && ckSoloIneseguiti) {
				$("#ckTutti").prop('checked', true);
			} else {
				$("#ckTutti").prop('checked', false);
			}
			
			var macroStato = '';
			macroStato += (ckInCorso) ? 'S' : 'N';
			macroStato += (ckIneseguiti) ? 'S' : 'N';
			macroStato += (ckEseguiti) ? 'S' : 'N';
			macroStato += (ckSoloIneseguiti) ? 'S' : 'N';
			$("#macroStato").val(macroStato);
		}
	}
</script>



<script>
function helpTabellaI_ORD() {

	
	var idHelp = 0;
	 	
		idHelp = 432;
	
	OpenHelp(getPathContext() + '/help/page.do?id=' + idHelp);

}
</script>






<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header clearfix">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
			
		</div>
    </div>
  </div>
</div>


</div>

<div class="section clearfix">

	





<div id="I_MOVDOS" class="jqGridTOLDiv">
	<table id="I_MOVDOS_Table" class="jqGridTOLTable"></table>

	<form id="formMovimentiDossier" method="post" action="/template/investimenti/movimentiDossierJson.php" class="divForm formHeaderGrid form-horizontal">
		<input type="hidden" name="chiaveDossier" value="007|2001|000000106440" />
		<div class="bs-example">
			<div class="form-group">
				<div class="form-field-input ">
				<div class="form-field col-xs-12">
					<label class="control-label">Periodo (gg/mm/aaaa) </label>
					<div class="form-field">
						<div class="col-xs-6">
							Dal 
							<input type="text" name="dtDataDa" size="10" value="24/05/2014" id="dtMovDataDa" class="form-control datepicker wauto" />
							<span class="margin-left5">Al </span>
							<input type="text" name="dtDataA" size="10" value="24/05/2017" id="dtMovDataA" class="form-control datepicker wauto" />
							<input class="button btn" type="button" value="Ricerca" title="Ricerca" onclick="ricarica(this);" />
						</div>				
					</div>
					</div>					
				</div>
			</div>
		</div>
	</form>
</div>
<script>
	$(document)
			.ready(
					function() {
						$('.datepicker').datepicker({
							minDate : '-3Y'
						});
						startGrid('#I_MOVDOS', { 
caption:"Movimenti Dossier",
height:'auto',
rowNum:20,
colModel:[
{name:'datiJqGrid.id',jsonmap:'datiJqGrid.id',key:true, hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloTot',jsonmap:'datiJqGrid.titoloTot', hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloGTot',jsonmap:'datiJqGrid.titoloGTot', hidden:true, hidedlg:true},
{name:'titolo.denominazione',jsonmap:'titolo.denominazione',push:'N',label:"Descrizione Titolo",title:"Descrizione Titolo",width:160,align:'Left',formatter:linkFmt,formatoptions:{funzioneJS:'openDettaglioTitolo',urlLink:'/investimenti/dettaglioTitolo.do',isin:'titolo.isin',codMercatoInfo:'titolo.codMercatoInfo',tipoConvertito:'titolo.tipoConvertito'},unformat:linkUnFmt},
{name:'descCausale',jsonmap:'descCausale',label:"Causale",title:"Causale ",width:100,align:'Center'},
{name:'dataOrdine',jsonmap:'dataOrdine',label:"Data e ora inserimento",title:"Data e ora inserimento",width:100,align:'Center',formatter:'date',formatoptions:{srcformat:'d/m/Y H:i',newformat:'d/m/Y H:i'},sorttype:'date'},
{name:'dataValuta',jsonmap:'dataValuta',label:"Data Valuta",title:"Data Valuta",width:80,align:'Center',formatter:'date',formatoptions:{srcformat:'d/m/Y H:i',newformat:'d/m/Y'},sorttype:'date'},
{name:'quantita',jsonmap:'quantita',label:"Quantità",title:"Quantità",width:80,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'DX'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'divisa',jsonmap:'divisa',label:"Divisa",title:"Divisa",width:70,align:'Center'},
{name:'prezzo',jsonmap:'prezzo',label:"Prezzo",title:"Prezzo",width:70,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'importo',jsonmap:'importo',label:"Controvalore Euro",title:"Controvalore Euro",width:110,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},classes:'importo',unformat:decimalUnFmt,sorttype:'currency'},
{name:'descStato',jsonmap:'descStato',label:"Stato",title:"Stato",width:80,align:'Center'},
{name:'numeroOrdine',jsonmap:'numeroOrdine',label:"Numero Ordine",title:"Numero Ordine",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'numeroOrdineRidotto',jsonmap:'numeroOrdineRidotto',label:"Num. Ord.",title:"Numero Ordine",width:110,align:'Left',formatter:linkFmt,formatoptions:{funzioneJS:'goToPage',urlLink:'/investimenti/dettaglioOrdineDossier.do',numeroOrdine:'numeroOrdine',metodoDettaglio:'metodoDettaglio'},unformat:linkUnFmt},
{name:'titolo.isin',jsonmap:'titolo.isin',push:'N',label:"null",title:"isin",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'titolo.codMercatoInfo',jsonmap:'titolo.codMercatoInfo',push:'N',label:"null",title:"codMercatoInfo",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'titolo.tipoConvertito',jsonmap:'titolo.tipoConvertito',push:'N',label:"null",title:"tipoConvertito",width:50,align:'Left',hidden:true,hidedlg:true}
],
opzioniTabella:[
{label:'Personalizza',funcOptions:{funzioneJS:opzioni}},
{testDisplay:hidePopUpFunction,label:'Pop-up',funcOptions:{funzioneJS:apriPopupGriglia}},
{label:'Stampa',funcOptions:{funzioneJS:Stampa}},
{testDisplay:hidePopUpFunction,label:'Help',funcOptions:{funzioneJS:helpTabella}}
],
opzioniRiga:[
]
});

						$('#formMovimentiDossier').show();
					});
</script>


<script>
function helpTabellaI_MOVDOS() {

	
	var idHelp = 0;
	 	
		idHelp = 409;
	
	OpenHelp(getPathContext() + '/help/page.do?id=' + idHelp);

}
</script>






<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header clearfix">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
			
		</div>
    </div>
  </div>
</div>


</div>


	 				</div>	
	 				<div class="toldisclaimer col-xs-12">
						<span>Fonte dati: Borsa Italiana</span>
						 
					</div>			

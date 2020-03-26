					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage" />
						<div class="pull-right">
							  
							25/05/2017	
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
		
				
				<div class="hidden-print hidden-xxs flag investimenti">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
				
 					<span>Ordini</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>









	



<form id="fondiOrdiniElencoFrom" method="post" action="/WEBHT/investimenti/fondiOrdiniElenco.do" class="divForm formHeaderGrid"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="105229f55c33470afc072042100c63d8" /></div>
	
	
	



  



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
					Amtau Ooclruall
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
								
									<option value="25/05/2017">
										25/05/2017&nbsp;&nbsp;&nbsp;&nbsp;999.999.854.502,96&nbsp;&euro;
									</option>
								
									<option value="26/05/2017">
										26/05/2017&nbsp;&nbsp;&nbsp;&nbsp;999.999.854.502,96&nbsp;&euro;
									</option>
								
									<option value="29/05/2017">
										29/05/2017&nbsp;&nbsp;&nbsp;&nbsp;999.999.854.502,96&nbsp;&euro;
									</option>
								
									<option value="30/05/2017">
										30/05/2017&nbsp;&nbsp;&nbsp;&nbsp;999.999.854.502,96&nbsp;&euro;
									</option>
								
									<option value="31/05/2017">
										31/05/2017&nbsp;&nbsp;&nbsp;&nbsp;999.999.854.502,96&nbsp;&euro;
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
								<td>AMTAU OOCLRUALL </td>
								<td>00174456
</td>
							</tr>
						
							<tr>
								
									
										
											<td class="hidden" ><input type="radio" name="chiaveDossier" value="007|2001|000008318876" onclick="submit()" id="chiaveDossier" /></td>
										
										
									
								
								
								<td>000008318876</td>
								<td>SEDE DI LODI - 2001</td>
								<td>CNOLL LISAROUAOGALPL APU UITT EAM</td>
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
	<div id="fcElOrdini" class="jqGridTOLDiv">
		<table id="fcElOrdiniTable" class="jqGridTOLTable"></table>
		<form id="fondiOrdiniElencoFrom" method="post" action="/WEBHT/investimenti/fondiOrdiniElenco.do" class="divForm formHeaderGrid"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="105229f55c33470afc072042100c63d8" /></div>
			<input type="hidden" name="chiaveDossier" value="007|2001|000000106440" />	
			<div class="divForm bs-example ">
					<div class="form-group clearfix">
						<div class="form-field-input col-xs-12">
							
							<label for="giornoDa" class="control-label">Periodo (gg/mm/aaaa) </label>
							<div class="form-field">
								Dal 
								<input type="text" name="dataInizio" size="10" value="29/03/2017" id="dtDataDa" class="form-control wauto datepickerOrdini datepicker" />
						
								Al 
								<input type="text" name="dataFine" size="10" value="28/05/2017" id="dtDataA" class="form-control wauto  datepickerOrdini  datepicker" />
								<input class="button btn" type="button" value="Ricerca" title="Ricerca" onclick="ricarica(this);" />
							</div>
						</div>
						
					</div>
			</div>
		</form>
	</div>
</div>
</div>
<script type="text/javascript">
	function isFondoDettaglioPresente(rowData) {
		if (rowData['numeroAppropriatezza'] > 0)
			return true;
		else
			return false;
	}

	$(document)
			.ready(
					function() {
						$('.datepickerOrdini').datepicker({
						buttonImage: '/HT/IMAGES/nGrafica/calendar.png',
							minDate : '-8Y',
							maxDate : '+1M'
						});
						startGrid('#fcElOrdini', { 
url: '/template/investimenti/fondiOrdiniElencoJson.php',
caption:"Visualizza ordini",
height:'200',
colModel:[
{name:'datiJqGrid.id',jsonmap:'datiJqGrid.id',key:true, hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloTot',jsonmap:'datiJqGrid.titoloTot', hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloGTot',jsonmap:'datiJqGrid.titoloGTot', hidden:true, hidedlg:true},
{name:'act',jsonmap:'act',label:' ', width:30, align:'center',sortable:false,hidedlg:true},
{name:'descrizioneFondo',jsonmap:'descrizioneFondo',label:"Fondo",title:"Fondo",width:200,align:'Left'},
{name:'codiceCausale',jsonmap:'codiceCausale',label:"Causale",title:"Causale",width:50,align:'Center'},
{name:'dataDocumento',jsonmap:'dataDocumento',label:"Data Ordine",title:"Data Ordine",width:50,align:'Center',formatter:'date',formatoptions:{srcformat:'d/m/Y H:i',newformat:'d/m/Y'},sorttype:'date'},
{name:'statoMovimento',jsonmap:'statoMovimento',label:"Esito",title:"Esito",width:50,align:'Center'},
{name:'importoOperazione',jsonmap:'importoOperazione',label:"Euro",title:"Euro",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D3'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quantitaQuota',jsonmap:'quantitaQuota',label:"Quote",title:"Quote",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D3'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'valoreQuota',jsonmap:'valoreQuota',label:"Val. quota",title:"Val. quota",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D3'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'numeroDeposito',jsonmap:'numeroDeposito',push:'N',label:"Dossier",title:"Dossier",width:60,align:'Center'},
{name:'numeroAppropriatezza',jsonmap:'numeroAppropriatezza',label:"numeroAppropriatezza",title:"numeroAppropriatezza",width:50,align:'Left',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency',hidden:true,hidedlg:true},
{name:'codSocGest',jsonmap:'codSocGest',label:"codSocGest",title:"codSocGest",width:50,align:'Left',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency',hidden:true,hidedlg:true},
{name:'codiceIsin',jsonmap:'codiceIsin',label:"null",title:"null",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'collocabile',jsonmap:'collocabile',push:'N',label:"null",title:"null",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'ordineAnnullabile',jsonmap:'ordineAnnullabile',push:'N',label:"null",title:"null",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'numeroRegProc',jsonmap:'numeroRegProc',label:"null",title:"null",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'numeroAppropriatezza',jsonmap:'numeroAppropriatezza',label:"null",title:"null",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'codAreaFinanza',jsonmap:'codAreaFinanza',push:'N',label:"Codice Area Finanza",title:"Codice Area Finanza",width:5,align:'Left',hidden:true,hidedlg:true}
],
opzioniTabella:[
{label:'Esporta in Excel',funcOptions:{funzioneJS:esportaGrigliaExcel}}
],
opzioniRiga:[
{testDisplay:isFondoDettaglioPresente,label:"Dettaglio ordine",funcOptions:{funzioneJS:goToPage,urlLink:'/investimenti/fondiOrdineDettaglio.do',numeroAppropriatezza:'numeroAppropriatezza'}},
{testDisplay:isOrdineFondoAnnullabile,label:"Annulla ordine",funcOptions:{funzioneJS:goToPage,urlLink:'/investimenti/fondiOrdineDettaglio.do',numeroAppropriatezza:'numeroAppropriatezza',numeroRegProc:'numeroRegProc',annulla:'S'}},
{testDisplay:isFondo,label:"Dettaglio fondo",funcOptions:{funzioneJS:goToPage,urlLink:'/investimenti/fondiDettaglioFondo.do',codAreaFinanza:'codAreaFinanza',buttonIndietro:'buttonIndietro'}},
{testDisplay:isFondo,label:"Aggiungi a preferiti",funcOptions:{funzioneJS:openAjaxDialog,urlLink:'/investimenti/fondiPreferitiAggiungiForm.do',codAreaFinanza:'codAreaFinanza',width:'350',height:'150',title:'Aggiungi a preferiti'}},
{testDisplay:disableButton,label:"Confronta Fondo",funcOptions:{funzioneJS:goToPage,urlLink:'/investimenti/fondiConfrontoFondi.do',codiceIsin:'codiceIsin'}}
]
});

					});
</script>



<script>
function helpTabellafcElOrdini() {

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
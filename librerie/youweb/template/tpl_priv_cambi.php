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
		
				
				<div class="hidden-print hidden-xxs flag investimentiCambi">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
				
 					<span>Cambi</span>
 					
				
				
				
				
					
				
			
			
			
		
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
						
						
						





<div class="section clearfix">

<div id="I_CAMBI" class="jqGridTOLDiv nosort" >
<div id="I_CAMBIPager"></div>
	<table id="I_CAMBITable" class="jqGridTOLTable"></table>
	<form id="formCambi" method="post" action="/template/investimenti/cambiJson.php" class="divForm formHeaderGrid"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="105229f55c33470afc072042100c63d8" /></div>
	<div class="bs-example clearfix">
	<div class="">
	<div class=" col-xs-6 col-sm-4">
		<label>Seleziona la valuta di cambio</label>
		<select name="tipoCambio" onchange="ricarica(this)" id="tipoCambio" class="form-control wauto"><option value="1">Euro</option>
			<option value="2">Dollaro</option>
			<!--<option value="0">Tutti i cambi</option>--></select></div></div>
	</div>
	</form>
</div></div>
<script>	
$(document).ready(function() {
	startGrid('#I_CAMBI', { 
url: '/template/investimenti/cambiJson.php',
caption:"Cambi",
height:'auto',
rowNum:20,
colModel:[
{name:'datiJqGrid.id',jsonmap:'datiJqGrid.id',key:true, hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloTot',jsonmap:'datiJqGrid.titoloTot', hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloGTot',jsonmap:'datiJqGrid.titoloGTot', hidden:true, hidedlg:true},
{name:'codice',jsonmap:'codice',label:"Cod.",title:"Codice del titolo",width:51,align:'Left',hidden:true,hidedlg:true},
{name:'denominazione',jsonmap:'denominazione',label:"Cross",title:"Cambio",width:50,align:'Left'},
{name:'descrizioneLunga',jsonmap:'descrizioneLunga',label:"Descrizione",title:"Descrizione",width:250,align:'Left',classes:'uppercase'},
{name:'trend',jsonmap:'trend',label:"Tr.",title:"Trend",width:20,align:'Center',hidden:true},
{name:'chiusuraPrecedente',jsonmap:'chiusuraPrecedente',label:"Chiusura",title:"Chiusura precedente",width:60,align:'Right',classes:'S',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'dataOra',jsonmap:'dataOra',label:"Data",title:"Data",width:50,align:'Center',formatter:'date',formatoptions:{srcformat:'d/m/Y H:i',newformat:'d/m/Y'},sorttype:'date'},
{name:'bid',jsonmap:'bid',label:"P. di Acquisto",title:"Prezzo di Acquisto",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'ask',jsonmap:'ask',label:"P. di Vendita",title:"Prezzo di Vendita",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'dataOra',jsonmap:'dataOra',label:"Ora",title:"Ora",width:40,align:'Center',formatter:'date',formatoptions:{srcformat:'d/m/Y H:i',newformat:'H:i'},sorttype:'date'}
],
opzioniTabella:[
],
opzioniRiga:[
]
});

// 	$('#formCambi').slideToggle(50, function() {
// 		adattaDimensioniGriglie(document.documentElement.clientWidth);
// 		$('#I_CAMBI .bottoneFiltro').hide();
// 	});
});
</script>

<script>
function helpTabellaI_CAMBI() {

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
	 				<div class="toldisclaimer col-xs-12">
						<span>Fonte dati: Borsa Italiana</span>
						 
					</div>			

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
				<div class="hidden-print hidden-xxs flag investimentiIndici">&nbsp;</div>
 					<span>Indici</span>
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

 	






<div id="I_INDICIEU" class="jqGridTOLDiv" >
	<table id="I_INDICIEUTable" class="jqGridTOLTable"></table>
</div>
<script>	
$(document).ready(function() {
	startGrid('#I_INDICIEU', { 
url: './template/investimenti/indiciEuropeiJson.php',
caption:"Indici Europei",
height:'auto',
colModel:[
{name:'datiJqGrid.id',jsonmap:'datiJqGrid.id',key:true, hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloTot',jsonmap:'datiJqGrid.titoloTot', hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloGTot',jsonmap:'datiJqGrid.titoloGTot', hidden:true, hidedlg:true},
{name:'act',jsonmap:'act',label:' ', width:50, align:'center',sortable:false,hidedlg:true},
{name:'denominazione',jsonmap:'denominazione',label:"Indice",title:"Indice",width:190,align:'Left',classes:'uppercase',formatter:linkFmt,formatoptions:{funzioneJS:'openElencoTitoliIndice',urlLink:'/investimenti/titoliIndiceForm.do',mercato:'mercato',chain:'chain',codice:'codice'},unformat:linkUnFmt},
{name:'last',jsonmap:'last',label:"P. di Mercato",title:"P. di Mercato",width:70,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'lastVarPerc',jsonmap:'lastVarPerc',label:"Var%",title:"Variazione percentuale sull'ultimo prezzo del giorno precedente",width:40,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},classes:'importo',unformat:decimalUnFmt,sorttype:'currency'},
{name:'ora',jsonmap:'ora',label:"Ora",title:"Ora",width:60,align:'Center',formatter:'date',formatoptions:{srcformat:'d/m/Y H:i',newformat:'H:i'},sorttype:'date'},
{name:'apertura',jsonmap:'apertura',label:"Apert.",title:"Prezzo di apertura",width:60,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'min',jsonmap:'min',label:"Min",title:"Minimo del giorno",width:60,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'max',jsonmap:'max',label:"Max ",title:"Massimo del giorno",width:60,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'mercato',jsonmap:'mercato',label:"Mercato",title:"Mercato",width:50,align:'Left',hidden:true},
{name:'prezzoRiferimento',jsonmap:'prezzoRiferimento',label:"Pr. Rif.",title:"Prezzo di riferimento",width:60,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'chain',jsonmap:'chain',label:"chain",title:"chain",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'codice',jsonmap:'codice',label:"Cod.",title:"Codice indice",width:51,align:'Left',hidden:true,hidedlg:true}
],
opzioniTabella:[
{testDisplay:hidePopUpFunction,label:'Pop-up',funcOptions:{funzioneJS:apriPopupGriglia}}
],
opzioniRiga:[
{label:"Titoli dell'indice",funcOptions:{funzioneJS:openElencoTitoliIndice,urlLink:'/investimenti/titoliIndiceForm.do',mercato:'mercato',chain:'chain',codice:'codice'}},
{label:"Grafico Indice",funcOptions:{funzioneJS:openPopupDaTabellatore,urlLink:'/template/investimenti/graficoForm.php',codMercatoInfo:'mercato',simbolo:'codice',contesto:'popUpPage',tipoGrafico:'index',width:'800',height:'450'}}
]
});

	var popIndexEu = 'N';
	if(popIndexEu === 'S'){
		$('#I_INDICIEU .bottoneStrumenti').hide();
		$('#I_INDICIEU').addClass('section clearfix');
	}
});
</script>

<script>
function helpTabellaI_INDICIEU() {

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

	






<div id="I_INDICIMO" class="jqGridTOLDiv" >
	<table id="I_INDICIMOTable" class="jqGridTOLTable"></table>
</div>
<script>	
$(document).ready(function() {
	startGrid('#I_INDICIMO', { 
url: './template/investimenti/indiciMondialiJson.php',
caption:"Indici Mondiali",
height:'auto',
colModel:[
{name:'datiJqGrid.id',jsonmap:'datiJqGrid.id',key:true, hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloTot',jsonmap:'datiJqGrid.titoloTot', hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloGTot',jsonmap:'datiJqGrid.titoloGTot', hidden:true, hidedlg:true},
{name:'act',jsonmap:'act',label:' ', width:50, align:'center',sortable:false,hidedlg:true},
{name:'codice',jsonmap:'codice',label:"Cod.",title:"Codice indice",width:51,align:'Left',hidden:true,hidedlg:true},
{name:'denominazione',jsonmap:'denominazione',label:"Indice",title:"Indice",width:190,align:'Left',classes:'uppercase',formatter:linkFmt,formatoptions:{funzioneJS:'openElencoTitoliIndice',urlLink:'/investimenti/titoliIndiceForm.do',mercato:'mercato',chain:'chain',codice:'codice'},unformat:linkUnFmt},
{name:'last',jsonmap:'last',label:"P. di Mercato",title:"P. di Mercato",width:70,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'lastVarPerc',jsonmap:'lastVarPerc',label:"Var%",title:"Variazione percentuale sull'ultimo prezzo del giorno precedente",width:40,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},classes:'importo',unformat:decimalUnFmt,sorttype:'currency'},
{name:'ora',jsonmap:'ora',label:"Ora",title:"Ora",width:60,align:'Center',formatter:'date',formatoptions:{srcformat:'d/m/Y H:i',newformat:'H:i'},sorttype:'date'},
{name:'apertura',jsonmap:'apertura',label:"Apert.",title:"Prezzo di apertura",width:60,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'min',jsonmap:'min',label:"Min",title:"Minimo del giorno",width:60,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'max',jsonmap:'max',label:"Max ",title:"Massimo del giorno",width:60,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'mercato',jsonmap:'mercato',label:"Mercato",title:"Mercato",width:50,align:'Left',hidden:true},
{name:'prezzoRiferimento',jsonmap:'prezzoRiferimento',label:"Pr. Rif.",title:"Prezzo di riferimento",width:60,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},unformat:decimalUnFmt,sorttype:'currency'}
],
opzioniTabella:[
{testDisplay:hidePopUpFunction,label:'Pop-up',funcOptions:{funzioneJS:apriPopupGriglia}}
],
opzioniRiga:[
{label:"Grafico Indice",funcOptions:{funzioneJS:openPopupDaTabellatore,urlLink:'/investimenti/graficoForm.do',codMercatoInfo:'mercato',simbolo:'codice',contesto:'popUpPage',tipoGrafico:'index',width:'800',height:'450'}}
]
});

	var popIndexMo = 'N';
	if(popIndexMo === 'S'){
		$('#I_INDICIMO .bottoneStrumenti').hide();
		$('#I_INDICIMO').addClass('section clearfix');
	}
});
</script>


<script>
function helpTabellaI_INDICIMO() {

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
	 				
					
					


					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							<fmt:formatdate type="date" value="${now}" pattern="${fmtdate}">	
						</fmt:formatdate></div>
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
			
			
		
		
			
		
		
			
		
			
				
 					<span>Elenco titoli dell'indice</span>
 					
				
				
				
				
					
				
			
			
			
		
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

<div id="I_RICERCA" class="jqGridTOLDiv nosort" >
	<table id="I_RICERCA_Table" class="jqGridTOLTable"></table>
	<div id="I_RICERCAPager"></div>
</div>
</div>
<script>
$(document).ready(function() {
	startGrid('#I_RICERCA', { 
url: '/template/tpl_priv_titoliIndice.json',
caption:"Risultato Ricerca",
height:'auto',
rowNum:20,
colModel:[
{name:'datiJqGrid.id',jsonmap:'datiJqGrid.id',key:true, hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloTot',jsonmap:'datiJqGrid.titoloTot', hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloGTot',jsonmap:'datiJqGrid.titoloGTot', hidden:true, hidedlg:true},
{name:'act',jsonmap:'act',label:' ', width:50, align:'center',sortable:false,hidedlg:true},
{name:'simbolo',jsonmap:'simbolo',label:"Cod.",title:"Codice del titolo",width:51,align:'Left',hidden:true},
{name:'denominazione',jsonmap:'denominazione',label:"Titolo",title:"Titolo",width:80,align:'Left',classes:'uppercase',formatter:linkFmt,formatoptions:{funzioneJS:'openDetTitRicerca',urlLink:'/investimenti/dettaglioTitolo.do',isin:'isin',codMercatoInfo:'codMercatoInfo',symbol:'simbolo',tipoConvertito:'tipoConvertito'},unformat:linkUnFmt},
{name:'anagrafica.divisaTrattazione',jsonmap:'anagrafica.divisaTrattazione',label:"Div.",title:"Divisa",width:40,align:'Left'},
{name:'quotazione.last',jsonmap:'quotazione.last',label:"P. di Mercato",title:"P. di Mercato",width:70,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.variazionePercentuale',jsonmap:'quotazione.variazionePercentuale',label:"Var%",title:"Variazione percentuale sull'ultimo prezzo del giorno precedente",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},classes:'importo',unformat:decimalUnFmt,sorttype:'currency'},
{name:'isin',jsonmap:'isin',label:"ISIN",title:"isin",width:120,align:'Left'},
{name:'descMercato',jsonmap:'descMercato',label:"Mercato",title:"Mercato",width:70,align:'Center'},
{name:'codMercatoInfo',jsonmap:'codMercatoInfo',label:"Piazza",title:"Mercato sul quale si è operato",width:40,align:'Left',hidden:true,hidedlg:true},
{name:'quotazione.dataQuotazionePrecedente',jsonmap:'quotazione.dataQuotazionePrecedente',label:"Data Pr. Uff.",title:"Data Prezzo Ufficiale",width:80,align:'Right',formatter:'date',formatoptions:{srcformat:'d/m/Y H:i',newformat:'d/m/Y'},sorttype:'date'},
{name:'tipoConvertito',jsonmap:'tipoConvertito',label:"null",title:"null",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'codiceIsin',jsonmap:'isin',label:"null",title:"null",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'quotazione.ritardata',jsonmap:'quotazione.ritardata',label:"Rit.",title:"Ritardata",width:40,align:'Center'},
{name:'quotazione.descrizioneFase',jsonmap:'quotazione.descrizioneFase',label:"Fase",title:"Fase",width:70,align:'Left'},
{name:'quotazione.trend',jsonmap:'quotazione.trend',label:"Tr.",title:"Trend",width:40,align:'Center',formatter:trendFmt,sortable:false},
{name:'quotazione.ora',jsonmap:'quotazione.ora',label:"Ora",title:"Ora",width:50,align:'Center',formatter:'date',formatoptions:{srcformat:'d/m/Y H:i',newformat:'H:i'},sorttype:'date'},
{name:'quotazione.quantitaTotale',jsonmap:'quotazione.quantitaTotale',label:"Volumi",title:"Volumi trattati",width:80,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.apertura',jsonmap:'quotazione.apertura',label:"Apert.",title:"Prezzo di apertura",width:70,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.variazionePercApertura',jsonmap:'quotazione.variazionePercApertura',label:"Var. Perc. Ape.",title:"Variazione percentuale apertura",width:60,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},classes:'importo',unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.prezzoChiusuraPrecedente',jsonmap:'quotazione.prezzoChiusuraPrecedente',label:"Ult. Chius.",title:"Ultima Chiusura",width:70,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.massimoGiorno',jsonmap:'quotazione.massimoGiorno',label:"Max ",title:"Massimo del giorno",width:70,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.minimoGiorno',jsonmap:'quotazione.minimoGiorno',label:"Min",title:"Minimo del giorno",width:70,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.bid',jsonmap:'quotazione.bid',label:"P. di Acquisto",title:"Prezzo di Acquisto",width:80,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.quantitaBid',jsonmap:'quotazione.quantitaBid',label:"Q.tà Miglior Acquisto",title:"Quantità miglior offerta in acquisto",width:80,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.ask',jsonmap:'quotazione.ask',label:"P. di Vendita",title:"Prezzo di Vendita",width:80,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.quantitaAsk',jsonmap:'quotazione.quantitaAsk',label:"Q.tà Miglior Vendita",title:"Quantità miglior offerta in vendita",width:80,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'anagrafica.lottoMinimo',jsonmap:'anagrafica.lottoMinimo',label:"Lotto min",title:"Lotto minimo",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.prezzoUfficiale',jsonmap:'quotazione.prezzoUfficiale',label:"Ult. Pr. Uff.",title:"Ultimo Prezzo Ufficiale",width:80,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.prezzoRiferimento',jsonmap:'quotazione.prezzoRiferimento',label:"Pr. Rif. Prec.",title:"Prezzo di riferimento",width:80,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.prezzoRiferimentoOdierno',jsonmap:'quotazione.prezzoRiferimentoOdierno',label:"Pr. Rif. Odier.",title:"Prezzo Riferimento Odierno",width:80,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'}
],
opzioniTabella:[
{label:'Personalizza',funcOptions:{funzioneJS:opzioni}},
{testDisplay:hidePopUpFunction,label:'Help',funcOptions:{funzioneJS:helpTabella}}
],
opzioniRiga:[
{testDisplay:isAutorizzatoTol,label:"Compra Vendi",funcOptions:{funzioneJS:goToPage,urlLink:'/investimenti/compraVendiTitolo.do',isin:'isin',codMercatoInfo:'codMercatoInfo',codAreaFinanza:'codAreaFinanza'}},
{testDisplay:isAutorizzatoTol,label:"Book 5 livelli",funcOptions:{funzioneJS:openTitoloPopupDaTabellatore,isin:'isin',codMercatoInfo:'codMercatoInfo'}},
{testDisplay:isFondoSO,label:"Sottoscrivi",funcOptions:{funzioneJS:goToPage,urlLink:'/investimenti/fondiSottoscrizioneFondo.do',codAreaFinanza:'codAreaFinanza'}},
{testDisplay:isAutorizzatoTol,label:"Dettaglio Titolo",funcOptions:{funzioneJS:openDetTitRicerca,urlLink:'/investimenti/dettaglioTitolo.do',isin:'isin',codMercatoInfo:'codMercatoInfo',symbol:'simbolo',tipoConvertito:'tipoConvertito'}},
{testDisplay:isAutorizzatoTol,label:"Aggiungi a Preferiti",funcOptions:{funzioneJS:openAjaxDialog,urlLink:'/investimenti/titoliElencoPreferitiAggiungi.do',isin:'isin',codMercatoInfo:'codMercatoInfo',height:'200',width:'400',title:'Aggiungi a preferiti'}},
{testDisplay:isAutorizzatoTol,label:"Agg.a Portafoglio Simulato",funcOptions:{funzioneJS:openAjaxDialog,urlLink:'/investimenti/titoliPortafoglioSimulatoAggiungi.do',isin:'isin',codMercatoInfo:'codMercatoInfo',denominazione:'denominazione',prezzoCarico:'quotazione.last',title:'Aggiungi a Portafoglio Simulato'}},
{testDisplay:isFondo,label:"Rimborso",funcOptions:{funzioneJS:goToPage,urlLink:'/investimenti/fondiRimborsoFondo.do',codAreaFinanza:'codAreaFinanza',sottodeposito:'sottodeposito'}},
{testDisplay:isFondoSW,label:"Switch",funcOptions:{funzioneJS:goToPage,urlLink:'/investimenti/fondiSwitchFondo.do',codAreaFinanza:'codAreaFinanza',sottodeposito:'sottodeposito'}},
{testDisplay:isFondo,label:"Dettaglio fondo",funcOptions:{funzioneJS:goToPage,urlLink:'/investimenti/fondiDettaglioFondo.do',codAreaFinanza:'codAreaFinanza',buttonIndietro:'buttonIndietro'}},
{testDisplay:isFondo,label:"Aggiungi a preferiti",funcOptions:{funzioneJS:openAjaxDialog,urlLink:'/investimenti/fondiPreferitiAggiungiForm.do',codAreaFinanza:'codAreaFinanza',width:'350',height:'150',title:'Aggiungi a preferiti'}},
{testDisplay:disableButton,label:"Agg. a Portafoglio Simulato",funcOptions:{funzioneJS:openAjaxDialog,urlLink:'/investimenti/fondiPortafoglioSimulatoAggiungiForm.do',codiceIsin:'codiceIsin',width:'400',height:'400',title:'Aggiungi a portafoglio simulato'}}
]
});

	$('[value="Filtro"]').hide();
});
</script>

<script>
function helpTabella() {

	
		
	
	var idHelp = 0;
	 	
		idHelp = 430;
	
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
	 				<div class="toldisclaimer col-xs-12">
						<span>Fonte dati: Borsa Italiana</span>
						 
					</div>			
	 				
					
					

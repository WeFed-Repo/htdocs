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
		
				
				<div class="hidden-print hidden-xxs flag portafoglioSimulato">&nbsp;</div>
				
 					<span>Portafoglio simulato</span>
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

<form id="simuFormSub" method="post" action="/WEBHT/investimenti/titoliPreferiti.do">
	<input type="hidden" name="codLista" id="codListSub"/>
</form>

<div id="I_TITSIMU" class="jqGridTOLDiv nosort" >
<!-- 	FORM GESTIONE LISTE -->
	<form id="simuForm" method="post" action="/template/investimenti/titoliSimulatiJson.php" class="form-horizontal divForm formHeaderGrid">
		<div class="bs-example">
			<div class="form-group">
				<div class="form-field-input col-xs-12">
					<input type="hidden" name="tipoRapportoSimulato" value="SIMU" />
					<label class="control-label" for="PTF_SEL">Lista</label>
					<div class="form-field">
						<div class="col-xs-4">
						<select name="codLista" onchange="ricaricaSimulati(this)" id="codLista" class="form-control"><option value="239618:9" selected="selected">ARRETUSCA</option>
							
								<option value="239599:9">ARRIBA</option>
							
								<option value="240798:9">Risky</option>
							
								<option value="239598:9">239598:9</option></select></div>
						<div class="col-xs-6">	
						<input class="btn button" type="button" value="Nuova" title="Crea una lista" onclick="creaSelezione(9);" /> 
						<input class="btn button" type="button" value="Rinomina" title="Rinomina una lista" onclick="rinominaSelezione();" /> 
						<input class="btn button" type="button" value="Elimina" title="Elimina lista" onclick="eliminaSelezione();" />
					</div>
					</div>
				</div>
			</div>
		</div>
	</form>

	<table id="I_TITSIMU_Table" class="jqGridTOLTable"></table>
</div>
<script>
	$(document).ready(function() {
		startGrid('#I_TITSIMU', { 
caption:"Titoli Simulati",
height:'auto',
colModel:[
{name:'datiJqGrid.id',jsonmap:'datiJqGrid.id',key:true, hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloTot',jsonmap:'datiJqGrid.titoloTot', hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloGTot',jsonmap:'datiJqGrid.titoloGTot', hidden:true, hidedlg:true},
{name:'act',jsonmap:'act',label:' ', width:30, align:'center',sortable:false,hidedlg:true},
{name:'simbolo',jsonmap:'titolo.simbolo',push:'N',label:"Cod.",title:"Codice del titolo",width:51,align:'Left',hidden:true},
{name:'titolo.denominazione',jsonmap:'titolo.denominazione',label:"Descrizione Titolo",title:"Descrizione Titolo",width:120,align:'Left',classes:'uppercase',formatter:linkFmt,formatoptions:{funzioneJS:'goToPage',urlLink:'/investimenti/dettaglioTitolo.do',isin:'titolo.isin',codMercatoInfo:'titolo.codMercatoInfo',simbolo:'titolo.simbolo'},unformat:linkUnFmt},
{name:'codMercatoInfo',jsonmap:'titolo.descMercato',push:'N',label:"Mercato",title:"Mercato",width:70,align:'Center'},
{name:'titolo.codMercatoInfo',jsonmap:'titolo.codMercatoInfo',label:"Piazza",title:"Piazza",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'quantita',jsonmap:'quantita',label:"Quantit&agrave; in carico",title:"Quantit&agrave; in carico",width:80,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'prezzoCarico',jsonmap:'prezzoCarico',push:'N',label:"Prezzo medio di carico",title:"Prezzo medio di carico",width:80,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'LAST',jsonmap:'titolo.quotazione.last',push:'S',label:"P.di Mercato",title:"P.di Mercato",width:80,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'VAR_PERC',jsonmap:'titolo.quotazione.variazionePercentuale',push:'S',label:"Var. %",title:"Var. %",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},classes:'importo',unformat:decimalUnFmt,sorttype:'currency'},
{name:'TRDDIR_CAH',jsonmap:'titolo.quotazione.trend',push:'S',label:"Tr.",title:"Trend",width:40,align:'Center',formatter:trendFmt,sortable:false},
{name:'controvaloreCaricoEuro',jsonmap:'controvaloreCaricoEuro',label:"Valore di carico",title:"Valore di carico",width:80,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'controvaloreMercatoEuro',jsonmap:'controvaloreMercatoEuro',label:"Valore di mercato",title:"Valore di mercato",width:70,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'uplEuro',jsonmap:'uplEuro',label:"Var. euro",title:"Var. euro",width:80,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},classes:'importo',unformat:decimalUnFmt,sorttype:'currency'},
{name:'titolo.isin',jsonmap:'titolo.isin',label:"ISIN",title:"ISIN",width:120,align:'Left'},
{name:'uplPerc',jsonmap:'uplPerc',label:"Var% Utile/Perdita",title:"Guadagno o perdita potenziale in % sul valore di carico (Unrealized Profit and Loss)",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},classes:'importo',unformat:decimalUnFmt,sorttype:'currency'},
{name:'titolo.anagrafica.divisaTrattazione',jsonmap:'titolo.anagrafica.divisaTrattazione',label:"Div.",title:"Divisa Trattazione",width:50,align:'Center'},
{name:'titolo.quotazione.dataQuotazionePrecedente',jsonmap:'titolo.quotazione.dataQuotazionePrecedente',label:"Data Pr. Uff.",title:"Data Prezzo Ufficiale",width:80,align:'Center',formatter:'date',formatoptions:{srcformat:'d/m/Y H:i',newformat:'d/m/Y'},sorttype:'date'},
{name:'titolo.quotazione.ritardata',jsonmap:'titolo.quotazione.ritardata',label:"Rit.",title:"Ritardata",width:40,align:'Center'},
{name:'DESC_FASE',jsonmap:'titolo.quotazione.descrizioneFase',push:'S',label:"Fase",title:"Fase",width:80,align:'Left'},
{name:'TIMELAST_STR',jsonmap:'titolo.quotazione.ora',push:'S',label:"Ora",title:"Ora",width:55,align:'Left',formatter:dateFmt,formatoptions:{ltformat:'d/m/Y H:i',srcformat:'d/m/Y H:i',newformat:'H:i'},sorttype:'date'},
{name:'QTOT',jsonmap:'titolo.quotazione.quantitaTotale',push:'S',label:"Volumi",title:"Volumi trattati",width:65,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'titolo.quotazione.apertura',jsonmap:'titolo.quotazione.apertura',label:"Apert.",title:"Prezzo di apertura",width:80,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'titolo.quotazione.prezzoChiusuraPrecedente',jsonmap:'titolo.quotazione.prezzoChiusuraPrecedente',label:"Ult. Chius.",title:"Ultima Chiusura",width:80,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'titolo.quotazione.variazionePercApertura',jsonmap:'titolo.quotazione.variazionePercApertura',label:"Var. Perc. Ape.",title:"Variazione percentuale apertura",width:60,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'cambio',jsonmap:'cambio',label:"Cambio",title:"Cambio",width:70,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'HIGH_1_CAH',jsonmap:'titolo.quotazione.massimoGiorno',push:'S',label:"Max ",title:"Massimo del giorno",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'LOW_1_CAH',jsonmap:'titolo.quotazione.minimoGiorno',push:'S',label:"Min",title:"Minimo del giorno",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'BID_CAH',jsonmap:'titolo.quotazione.bid',push:'S',label:"P. di Acquisto",title:"Prezzo di Acquisto",width:80,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'BIDSIZE_CAH',jsonmap:'titolo.quotazione.quantitaBid',push:'S',label:"Q.t&agrave; Miglior Acquisto",title:"Quantità miglior offerta in acquisto",width:80,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'ASK_CAH',jsonmap:'titolo.quotazione.ask',push:'S',label:"P. di Vendita",title:"Prezzo di Vendita",width:80,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'ASKSIZE_CAH',jsonmap:'titolo.quotazione.quantitaAsk',push:'S',label:"Q.t&agrave Miglior Vendita",title:"Quantità miglior offerta in vendita",width:70,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'titolo.anagrafica.lottoMinimo',jsonmap:'titolo.anagrafica.lottoMinimo',label:"Lotto min",title:"Lotto minimo",width:55,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'titolo.quotazione.prezzoUfficiale',jsonmap:'titolo.quotazione.prezzoUfficiale',label:"Ult. Pr. Uff.",title:"Ultima Chiusura",width:80,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'titolo.quotazione.prezzoRiferimento',jsonmap:'titolo.quotazione.prezzoRiferimento',label:"Pr. Rif. Prec.",title:"Prezzo di riferimento",width:80,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'titolo.quotazione.prezzoRiferimentoOdierno',jsonmap:'titolo.quotazione.prezzoRiferimentoOdierno',label:"Pr. Rif. Odier.",title:"Prezzo Riferimento Odierno",width:80,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'idMovimento',jsonmap:'idMovimento',label:"null",title:"null",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'idPortafoglio',jsonmap:'idPortafoglio',label:"null",title:"null",width:50,align:'Left',hidden:true,hidedlg:true}
],
opzioniTabella:[
{label:'Personalizza',funcOptions:{funzioneJS:opzioni}},
{label:'Esporta in Excel',funcOptions:{funzioneJS:esportaGrigliaExcel}},
{testDisplay:hidePopUpFunction,label:'Pop-up',funcOptions:{funzioneJS:apriPopupGriglia}},
{label:'Stampa',funcOptions:{funzioneJS:Stampa}},
{testDisplay:hidePopUpFunction,label:'Help',funcOptions:{funzioneJS:helpTabella}}
],
opzioniRiga:[
{label:"Compra Vendi Simulato",funcOptions:{funzioneJS:openAjaxDialog,urlLink:'/template/investimenti/compraVendiSimulato.php',title:'Compra Vendi Simulato',idMovimento:'idMovimento',idRapportoSimulato:'idPortafoglio'}},
{label:"Dettaglio Titolo",funcOptions:{funzioneJS:openDettaglioDaSimulato,isin:'titolo.isin',codMercatoInfo:'titolo.codMercatoInfo',simbolo:'titolo.simbolo'}},
{label:"Book 5 livelli",funcOptions:{funzioneJS:openTitoloPopupSimulato,isin:'titolo.isin',codMercatoInfo:'titolo.codMercatoInfo'}},
{label:"Aggiungi a Preferiti",funcOptions:{funzioneJS:openAjaxDialog,urlLink:'/template/investimenti/titoliElencoPreferitiAggiungi.php',isin:'titolo.isin',title:'Aggiungi a preferiti',codMercatoInfo:'titolo.codMercatoInfo',width:'400'}},
{label:"Cancella",funcOptions:{funzioneJS:openAjaxDialog,urlLink:'/template/investimenti/eliminaSimulato.php',idMovimento:'idMovimento',idRapportoSimulato:'idPortafoglio',denominazione:'titolo.denominazione',title:'Elimina titolo'}},
{label:"Modifica",funcOptions:{funzioneJS:openAjaxDialog,urlLink:'/template/investimenti/modificaSimulato.php',idMovimento:'idMovimento',idRapportoSimulato:'idPortafoglio',title:'Modifica titolo simulato'}}
]
});

		
		
		
			setInterval(titoliSimulatiPush, '60000');
		
		
	});
	
	function ricaricaSimulati(x){
		
		
		
			ricarica(x);
		
		
	}
	function titoliSimulatiPush(){
		ricaricaGriglia('I_TITSIMU_Table');
	}
	
	function creaSelezione(tipoRapporto){
		openAjaxDialog('/template/modale_investim_nuova_lista.php', 'tipoRapportoSimulato', tipoRapporto, 'dialogName', 'dialogSelezione', 'title', 'Crea nuova lista', 'width' ,600);
	}
	
	function rinominaSelezione(){
		openAjaxDialog('/template/modale_investim_rinomina_lista.php', 'codLista', $('#codLista').val(), 'dialogName', 'dialogSelezione', 'title', 'Rinomina una lista', 'width' ,600);
	}
	
	function eliminaSelezione(){
		if(confirm('Sicuro di voler eliminare la lista '+ $('#codLista option:selected').text() + '?')) {
			openAjaxDialog('/template/modale_investim_elimina_lista.php', 'codLista', $('#codLista').val(), 'dialogName', 'dialogSelezione', 'title', 'Elimina lista', 'width' ,600);
		}
	}
</script>

<script>
function helpTabellaI_TITSIMU() {

	
		
	
	var idHelp = 0;
	 	
		idHelp = 417;
	
	OpenHelp('/template/modale.php?pagTit=Help: titoli preferiti&pagCont=testo02');

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

</div>


	 				</div>	
	 				<div class="toldisclaimer col-xs-12">
						<span>Fonte dati: Borsa Italiana</span>
						 
					</div>
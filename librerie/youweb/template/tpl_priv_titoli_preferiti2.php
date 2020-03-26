<div class="visible-print-block"> 
	<img src="/HT/fe/img/logo_youweb.pngg" title="Torna all'homepage" alt="Torna all'homepage" />
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
		
				
				<div class="hidden-print hidden-xxs flag titoliPreferiti">&nbsp;</div>
 					<span>Titoli</span>
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

<div id="I_TITPREF" class="jqGridTOLDiv nosort" >
<!-- 	FORM GESTIONE LISTE -->
	<form id="simuForm" method="post" action="/template/tpl_priv_titoliSimulatiJson.json" class="form-horizontal divForm formHeaderGrid">
		<div class="bs-example">
			<div class="form-group">
				<div class="form-field-input col-xs-12">
					<input type="hidden" name="tipoRapportoSimulato" value="PREF" />
					<label class="control-label" for="PTF_SEL">Lista</label>
					<div class="form-field">
						<div class="col-xs-4">
						<select name="codLista" onchange="ricaricaSimulati(this)" id="codLista" class="form-control"><option value="2356:1" selected="selected">Collaudo</option>
							
								<option value="2336:1">jnk</option>
							
								<option value="2576:1">test</option>
							
								<option value="2580:1">test espresso</option></select></div>
						<div class="col-xs-6">	
						<input class="btn button" type="button" value="Nuova" title="Crea una lista" onclick="creaSelezione(1);" /> 
						<input class="btn button" type="button" value="Rinomina" title="Rinomina una lista" onclick="rinominaSelezione();" /> 
						<input class="btn button" type="button" value="Elimina" title="Elimina lista" onclick="eliminaSelezione();" />
					</div>
					</div>
				</div>
			</div>
		</div>
	</form>

	<table id="I_TITPREF_Table" class="jqGridTOLTable"></table>
</div>
<script>
	$(document).ready(function() {
		startGrid('#I_TITPREF', { 
caption:"Titoli Preferiti",
height:'auto',
colModel:[
{name:'datiJqGrid.id',jsonmap:'datiJqGrid.id',key:true, hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloTot',jsonmap:'datiJqGrid.titoloTot', hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloGTot',jsonmap:'datiJqGrid.titoloGTot', hidden:true, hidedlg:true},
{name:'act',jsonmap:'act',label:' ', width:30, align:'center',sortable:false,hidedlg:true},
{name:'simbolo',jsonmap:'titolo.simbolo',push:'N',label:"Cod.",title:"Codice del titolo",width:50,align:'Left',classes:'uppercase'},
{name:'titolo.denominazione',jsonmap:'titolo.denominazione',push:'N',label:"Titolo",title:"Descrizione titolo",width:130,align:'Left',classes:'uppercase',formatter:linkFmt,formatoptions:{funzioneJS:'goToPage',urlLink:'/investimenti/dettaglioTitolo.do',isin:'titolo.isin',codMercatoInfo:'titolo.codMercatoInfo',simbolo:'titolo.simbolo'},unformat:linkUnFmt},
{name:'codMercatoInfo',jsonmap:'titolo.codMercatoInfo',push:'S',label:"Piazza",title:"Piazza",width:40,align:'Left',hidden:true,hidedlg:true},
{name:'LAST',jsonmap:'titolo.quotazione.last',push:'S',label:"P. di Mercato",title:"Ultimo prezzo disponibile, espresso nella divisa di negoziazione. ",width:70,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'VAR_PERC',jsonmap:'titolo.quotazione.variazionePercentuale',push:'S',label:"Var%",title:"Variazione percentuale sull'ultimo prezzo del giorno precedente",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},classes:'importo',unformat:decimalUnFmt,sorttype:'currency'},
{name:'TRDDIR_CAH',jsonmap:'titolo.quotazione.trend',push:'S',label:"Tr.",title:"Trend",width:40,align:'Center',formatter:trendFmt,sortable:false},
{name:'TIMELAST_STR',jsonmap:'titolo.quotazione.ora',push:'S',label:"Ora",title:"Ora",width:50,align:'Right',formatter:dateFmt,formatoptions:{ltformat:'d/m/Y H:i',srcformat:'d/m/Y H:i',newformat:'H:i'},sorttype:'date'},
{name:'titolo.anagrafica.divisaTrattazione',jsonmap:'titolo.anagrafica.divisaTrattazione',label:"Div.",title:"Divisa Trattazione",width:40,align:'Center'},
{name:'isin',jsonmap:'titolo.isin',push:'N',label:"ISIN",title:"ISIN",width:120,align:'Left'},
{name:'DESC_FASE',jsonmap:'titolo.quotazione.descrizioneFase',push:'S',label:"Fase",title:"Fase",width:70,align:'Left'},
{name:'ritardo',jsonmap:'titolo.quotazione.ritardata',push:'N',label:"Rit.",title:"Ritardata",width:40,align:'Center'},
{name:'QTOT',jsonmap:'titolo.quotazione.quantitaTotale',push:'S',label:"Volumi",title:"Volumi trattati",width:85,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'titolo.quotazione.apertura',jsonmap:'titolo.quotazione.apertura',label:"Apert.",title:"Prezzo di apertura",width:70,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'HIGH_1_CAH',jsonmap:'titolo.quotazione.massimoGiorno',push:'S',label:"Max",title:"Massimo del giorno",width:70,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'LOW_1_CAH',jsonmap:'titolo.quotazione.minimoGiorno',push:'S',label:"Min",title:"Minimo del giorno",width:70,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'idMovimento',jsonmap:'idMovimento',label:"Id Movimento",title:"Id Movimento",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'idPortafoglio',jsonmap:'idPortafoglio',label:"id Portafoglio",title:"id Portafoglio",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'BID_CAH',jsonmap:'titolo.quotazione.bid',push:'S',label:"P. di Acquisto",title:"Prezzo di Acquisto",width:75,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'BIDSIZE_CAH',jsonmap:'titolo.quotazione.quantitaBid',push:'S',label:"Q.tà Miglior Acquisto",title:"Quantità miglior offerta in acquisto",width:75,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'ASK_CAH',jsonmap:'titolo.quotazione.ask',push:'S',label:"P. di Vendita",title:"Prezzo di Vendita",width:75,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'ASKSIZE_CAH',jsonmap:'titolo.quotazione.quantitaAsk',push:'S',label:"Q.tà Miglior Vendita",title:"Quantità miglior offerta in vendita",width:75,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'titolo.quotazione.prezzoRiferimento',jsonmap:'titolo.quotazione.prezzoRiferimento',label:"Pr. Rif. Prec.",title:"Prezzo di riferimento",width:70,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'}
],
opzioniTabella:[
{label:'Personalizza',funcOptions:{funzioneJS:opzioni}},
{label:'Esporta in Excel',funcOptions:{funzioneJS:esportaGrigliaExcel}},
{testDisplay:hidePopUpFunction,label:'Pop-up',funcOptions:{funzioneJS:apriPopupGriglia}},
{label:'Stampa',funcOptions:{funzioneJS:Stampa_tuoProtafoglio}},
{testDisplay:hidePopUpFunction,label:'Help',funcOptions:{funzioneJS:helpTabella}}
],
opzioniRiga:[
{label:"Compra Vendi",funcOptions:{funzioneJS:goToPage,urlLink:'/strutt_priv_new.php?pag=gestione_ordini_step1&lev1=investimenti&wdg=15|16|02',isin:'isin',codMercatoInfo:'codMercatoInfo',simbolo:'simbolo'}},
{label:"Dettaglio Titolo",funcOptions:{funzioneJS:goToPage,urlLink:'/strutt_priv_new.php?pag=dettaglio_titolo&lev1=investimenti&wdg=15|16|02',isin:'isin',codMercatoInfo:'codMercatoInfo',simbolo:'simbolo'}},
{label:"Book 5 livelli",funcOptions:{funzioneJS:openTitoloPopupDaTabellatore,isin:'isin',codMercatoInfo:'codMercatoInfo'}},
{label:"Cancella",funcOptions:{funzioneJS:openAjaxDialog,urlLink:'/template/investimenti/eliminaSimulato.php',idMovimento:'idMovimento',idRapportoSimulato:'idPortafoglio',denominazione:'titolo.denominazione',title:'Elimina titolo'}},
{label:"Agg. a Portafoglio Simulato",funcOptions:{funzioneJS:openAjaxDialog,urlLink:'/template/modale_investim_aggiungi_portaf_simulato.php',isin:'isin',codMercatoInfo:'codMercatoInfo',denominazione:'denominazione',title:'Aggiungi a Portafoglio Simulato'}}
]
});

		
		
			//setTimeout('startStreamGrid("https://collpush.intranet.servizi","I_TITPREF_Table","KlXybFb8KRO5LDjzLDj4KiWyLw%3D%3D")', 2000);
		
		
		
	});
	
	function ricaricaSimulati(x){
		
		
			$("#codListSub").val($('#codLista').val());
			$("#simuFormSub").submit();
		
		
		
	}
	function titoliSimulatiPush(){
		ricaricaGriglia('I_TITPREF_Table');
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
function helpTabellaI_TITPREF() {

	
		
	
	var idHelp = 0;
	 	
		idHelp = 408;
	
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
</div>	
<div class="toldisclaimer col-xs-12">
	<span>Fonte dati: Borsa Italiana</span>
	 
</div>
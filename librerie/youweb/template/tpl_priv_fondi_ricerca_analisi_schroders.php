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
			
			
		
		
			
		
		
			
		
			
				
 					<span>Ricerca e analisi</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>

	








	


	<div class="section clearfix">
		<h3 class="titleSection">Societ&agrave; in primo piano</h3>
		<div class="bs-example">
			
			
			









<div class="clearfix">
	
		
		
		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				







		<div class="contentPagina">
			<img style="margin-bottom: 10pt; float: left; margin-right: 15pt; border: 0px;" title="Schroeders" src="/HT/IMAGES/CONTENUTI/Schroeders.png" alt="Schroeders" width="200" height="125" />
<p><strong>Schroder</strong>&nbsp; &egrave; una societ&agrave; fondata nel 1804 e quotata alla Borsa Valori di Londra dal 1959. Schroders &egrave; oggi uno dei principali gruppi finanziari internazionali indipendenti, specializzato esclusivamente nella gestione di capitali.</p>
<p>I servizi di gestione sono offerti dal Gruppo tramite Schroder Investment Management Limited (&ldquo;SIM&rdquo;) che, con un patrimonio gestito di circa 413,7 miliardi di euro al 30/06/2016, si posiziona tra i leader del settore a livello mondiale.</p>
<p>Schroders ha oltre&nbsp;430 gestori e analisti&nbsp;e pi&ugrave; di&nbsp;3.800 collaboratori&nbsp;operanti in 37 uffici situati in tutto il mondo</p>
		</div>



			</div>
		
	
</div>
		</div>
	</div>
	





<script type="text/javascript">
/**
 * Funzione JQGrid di selezione riga del grafico
 */
window.customBeforeSelectRow = function (rowid, e, grid) {
	if ($(e.target).is(":button")) return false; // se ha cliccato sul menu blocco la generazione del grafico
	
	var arraySelected = $(grid).jqGrid('getGridParam','selarrrow');
	/* Controllo che il massimo degli strumenti selezionati sia 2 */
	if ($.inArray(rowid, arraySelected)==-1) {
		if (arraySelected.length>=2) {
			// Apro dialog di avviso al cliente
			$('#dialog-messaggio').dialog('open');
			return false;
		}
	}
	return true;
}

window.customSelectRow = function (rowid, status, e, grid) {
	var arraySelected = $(grid).jqGrid('getGridParam','selarrrow');
	// creo un array dei fondi selezionati dal cliente
	var fndArray = new Array();
	$(arraySelected).each(function(i, el){
		var rowData = grid.jqGrid('getRowData', el);
	    fndArray.push(rowData.codAreaFinanza);
	});
	
	if (fndArray.length>0) drawChart(fndArray);
	else emptyChart();
}

window.drawChart = function (fndArray) {
	var grafici = ["PERF_LINE","PERF_BAR"];
	var getData = "";
	$(fndArray).each(function (i, e){
		if (getData!="") getData+="&";
			getData += "instrumentList"+"=" + e;
	});

	// svuoto i grafici	
	emptyChart();
	$.each(grafici, function(id, graph) {
 		$('<iframe>', {
			id: id,
			style: "width:100%;height:300px;",
			frameborder: 0,
			src: "/WEBHT/investimenti/fondiGrafico.do" + "?chartType="+graph+"&codeType=BO&"+getData
		}).appendTo("#graficiPagina");
	});
}

window.emptyChart = function() {
	// svuoto la sezione grafici
	$("#graficiPagina").empty();
}
</script>

	
	<div id="dialog-messaggio" style="display: none;">
		<div class="col-xs-12 col-sm-12 margin-top10">&Egrave; possibile selezionare al massimo due strumenti. Deselezionare uno dei due strumenti prima di procedere.</div>
		<div class="actions" style="margin-top: 30px; text-align: center;">
			<input type="submit" value="Conferma" alt="Conferma" onclick="$('#dialog-messaggio').dialog('close');" class="btn" />
		</div>
	</div>

	
	
	<div class="section clearfix">
	<div id="I_FND_RIC" class="jqGridTOLDiv" >
		<table id="I_FND_RIC_Table" class="jqGridTOLTable"></table>
		<div id="I_FND_RICPager"></div>
	</div></div>
	<script>
	$(function() {
		startGrid('#I_FND_RIC', { 
multiselect: true,
url: '/template/investimenti/societaInPrimoPianoJson.php?',
caption:"Ricerca Fondi",
height:'auto',
rowNum:10,
colModel:[
{name:'datiJqGrid.id',jsonmap:'datiJqGrid.id',key:true, hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloTot',jsonmap:'datiJqGrid.titoloTot', hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloGTot',jsonmap:'datiJqGrid.titoloGTot', hidden:true, hidedlg:true},
{name:'act',jsonmap:'act',label:' ', width:15, align:'center',sortable:false,hidedlg:true},
{name:'descrizione',jsonmap:'descrizione',push:'N',label:"Descrizione",title:"Descrizione",width:145,align:'Left'},
{name:'descSocGestione',jsonmap:'descSocGestione',push:'N',label:"Società",title:"Società",width:80,align:'Left'},
{name:'descCategoria',jsonmap:'descCategoria',push:'N',label:"Categoria",title:"Categoria",width:50,align:'Left'},
{name:'nav',jsonmap:'nav',push:'N',label:"Prezzo / NAV",title:"Prezzo/NAV",width:30,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'dataNav',jsonmap:'dataNav',push:'N',label:"Data Prezzo",title:"Data Prezzo",width:40,align:'Center',formatter:'date',formatoptions:{srcformat:'d/m/Y H:i',newformat:'d/m/Y'},sorttype:'date'},
{name:'rating',jsonmap:'rating',push:'N',label:"Rating",title:"Rating",width:25,align:'Center'},
{name:'codDivisa',jsonmap:'codDivisa',push:'N',label:"Divisa",title:"Divisa",width:25,align:'Center'},
{name:'descProventi',jsonmap:'descProventi',push:'N',label:"Proventi",title:"Proventi",width:35,align:'Center'},
{name:'volatilita1Y',jsonmap:'volatilita1Y',push:'N',label:"Vol 1Y %",title:"Vol 1Y",width:20,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'commissioneOnline',jsonmap:'commissioneOnline',push:'N',label:"Commis Online",title:"Commissione Online",width:30,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'isin',jsonmap:'isin',push:'N',label:"Isin",title:"Isin",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'codAreaFinanza',jsonmap:'codAreaFinanza',push:'N',label:"Codice Area Finanza",title:"Codice Area Finanza",width:50,align:'Left',hidden:true,hidedlg:true}
],
opzioniTabella:[
],
opzioniRiga:[
{label:"Sottoscrivi",funcOptions:{funzioneJS:goToPage,urlLink:'	/investimenti/fondiSottoscrizioneFondo.do',codiceIsin:'codiceIsin',codAreaFinanza:'codAreaFinanza'}},
{testDisplay:isFondo,label:"Dettaglio fondo",funcOptions:{funzioneJS:goToPage,urlLink:'/investimenti/fondiDettaglioFondo.do',codAreaFinanza:'codAreaFinanza',buttonIndietro:'buttonIndietro'}},
{label:"Confronto",funcOptions:{funzioneJS:fndConfronto,fondoInput:'codAreaFinanza'}},
{testDisplay:isFondo,label:"Aggiungi a preferiti",funcOptions:{funzioneJS:openAjaxDialog,urlLink:'/investimenti/fondiPreferitiAggiungiForm.do',codAreaFinanza:'codAreaFinanza',width:'350',height:'150',title:'Aggiungi a preferiti'}},
{label:"Report Pdf",funcOptions:{funzioneJS:goToPage,urlLink:'	/investimenti/fondiReportPdfServlet',codAreaFinanza:'codAreaFinanza'}}
]
});

		$(".jqGridTOLDiv .context-buttons").css({display: "none"});
		$("#dialog-messaggio").dialog({
			modal : true,
			autoOpen : false
		});
	});
	</script>
	<div id="graficiPagina"></div>

</div>





<div class="riquadro clearfix">
	<div class="col-xs-12 col-sm-12 clear-padding" style="padding: 8px;">
		<p style="font-size:0.8em">I dati e le notizie pubblicati hanno carattere puramente informativo non sono da intendersi quali raccomandazioni personalizzate e non costituiscono sollecitazione al pubblico risparmio, n&egrave; attivit&agrave; di promozione o di consulenza in materia di strumenti finanziari e/o di servizi di investimento. Non costituiscono, pertanto, consulenza o parere della Banca sul merito di una particolare operazione o strategia di investimento con riguardo al profilo del singolo Cliente. Eventuali decisioni relative a investimenti e disinvestimenti sono assunte dall'investitore in piena autonomia.<br/> Laddove non diversamente indicato performance ed indicatori sono calcolati in euro. <br/> Gli indicatori di volatilit&agrave; / rendimento sono calcolati da Deus Technology.<br/> I rendimenti utilizzati per la ricerca sono storici e non garantiscono analoghi risultati nel futuro. I rendimenti vanno inoltre valutati confrontandoli con i parametri di mercato. Il valore delle quote / azioni dei fondi / comparti e i relativi rendimenti sono da considerarsi al lordo dell'imposizione fiscale. I rendimenti dei fondi / comparti a distribuzione sono calcolati ipotizzando il reinvestimento dei dividendi. I rendimenti storici dei fondi / comparti non costituiscono l'unico parametro di valutazione. <br/> Prima dell'adesione leggere il prospetto informativo disponibile nell'area riservata del nostro sito nonch&egrave; sul sito internet dell'offerente le quote/azioni dei Fondi/Sicav. <br/></p>
		<div class="col-xs-6 col-sm-6 margin-top10 margin-bottom10">
			<span><strong>Dati forniti da:</strong></span>
			<img src="/HT/IMAGES/FONDICOMUNI/telekurs.png" width="160px">
		</div>
		<div class="col-xs-6 col-sm-6 margin-top10 margin-bottom10">
			<div class="col-xs-12 col-sm-12" style="text-align: right;">
				<span><strong>Dati elaborati da:</strong></span>
				<img src="/HT/IMAGES/FONDICOMUNI/deus.png" width="160px">
			</div>
		</div>
	</div>
</div>
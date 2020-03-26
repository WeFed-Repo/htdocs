<div class="visible-print-block"> 
	<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage" />
	<div class="pull-right">
		  
		26/05/2017	
	</div>
</div>
					

<script type="text/javascript">
$(function() {
	$(".btnSelezioneOpen").click(function(){espandiRicerca();});
	$(".btnSelezioneClose").click(function(){comprimiRicerca();});
	comprimiRicerca();
});

window.espandiRicerca = function() {
	$(".btnSelezioneOpen").addClass("hidden");
	$(".btnSelezioneClose").removeClass("hidden");
	$(".ricercaTestuale").addClass("hidden");
	$(".ricerca").removeClass("hidden");
}
window.comprimiRicerca = function() {
	$(".btnSelezioneClose").addClass("hidden");
	$(".btnSelezioneOpen").removeClass("hidden");
	$(".ricercaTestuale").removeClass("hidden");
	$(".ricerca").addClass("hidden");
}
</script>
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
		<div class="context-buttons">
			<a href="#" title="nascondi parametri di ricerca" class="btnSelezioneClose pull-right hidden" role="button" aria-pressed="true"> </a>
			<a href="#" title="mostra criteri ricerca" class="btnSelezioneOpen pull-right" role="button" aria-pressed="false"> </a>
		</div>
		<h3 class="titleSection">Parametri ricerca</h3>
		
		<form id="fondiRicercaForm" method="post" action="/WEBHT/investimenti/fondiRicercaParametriRisultato.do" class="form-horizontal">
			




	
		<div class="bs-example ricercaTestuale hidden">
			<div class="form-group clearfix col-sm-12 col-xs-12 margin-top10">
				Criteri:
				
				
 				
 				
				
				
				
				
				
				
					<strong>Tutti</strong>
				
			</div>
		</div>
	

		<div class="bs-example ricerca">
			<div class="form-group clearfix col-sm-12 col-xs-12 margin-top10">
				


<script type="text/javascript">
$(function() {
	$("input[name='descrizione']").attr('placeholder', 'Descrizione/ISIN');
});
</script>
				<div class="col-sm-12 col-xs-12 padding0">
					<div class="col-sm-8 col-xs-12">
						<input type="text" name="descrizione" maxlength="30" size="16" value="" class="form-control">
					</div>
					<div class="col-sm-4 col-xs-12">
 						<select name="proventi" class="form-control"><option value="" selected="selected">Proventi/cedola</option>
 						
							<option value="1">Cumulative</option>
						
							<option value="2">Distributive</option></select>
					</div>
				</div>
				<div class="col-sm-12 col-xs-12 margin-top10 padding0">
					<div class="col-sm-8 col-xs-12">
						<select name="sgr" class="form-control"><option value="" selected="selected">Soc. di gestione</option>
 						
							<option value="DTI-00025">Aletti Gestielle Sgr</option>
						
							<option value="DTI-00110">BlackRock Global Funds SICAV</option>
						
							<option value="DTI-00282">Gestielle Investment SICAV</option>
						
							<option value="DTI-00332">Invesco Funds SICAV</option>
						
							<option value="DTI-00346">JPMorgan Funds SICAV</option>
						
							<option value="DTI-01120">JPMorgan Investment Funds SICAV</option>
						
							<option value="DTI-00489">Pictet SICAV</option>
						
							<option value="DTI-00546">Schroder International Selection Fund SICAV</option></select>
					</div>
					<div class="col-sm-4 col-xs-12">
						<select name="rating" class="form-control"><option value="" selected="selected">Rating</option>
 						
							<option value="1">Basso</option>
						
							<option value="2">Medio</option>
						
							<option value="3">Buono</option>
						
							<option value="4">Ottimo</option>
						
							<option value="5">Eccellente</option></select>
					</div>
				</div>
				<div class="col-sm-12 col-xs-12 margin-top10 padding0">
					<div class="col-sm-8 col-xs-12">
						<select name="categoria" class="form-control"><option value="" selected="selected">Categoria</option>
 						
							<option value="ASSOG-18">Azionari altre specializzazioni</option>
						
							<option value="ASSOG-17">Azionari altri settori</option>
						
							<option value="ASSOG-4">Azionari America</option>
						
							<option value="ASSOG-2">Azionari area euro</option>
						
							<option value="ASSOG-11">Azionari beni di consumo</option>
						
							<option value="ASSOG-9">Azionari energia e materie prime</option>
						
							<option value="ASSOG-3">Azionari Europa</option>
						
							<option value="ASSOG-13">Azionari finanza</option>
						
							<option value="ASSOG-14">Azionari informatica</option>
						
							<option value="ASSOG-8">Azionari internazionali</option>
						
							<option value="ASSOG-5">Azionari Pacifico</option>
						
							<option value="ASSOG-7">Azionari paese</option>
						
							<option value="ASSOG-6">Azionari paesi emergenti</option>
						
							<option value="ASSOG-12">Azionari salute</option>
						
							<option value="ASSOG-16">Azionari servizi di pubblica utilita</option>
						
							<option value="ASSOG-20">Bilanciati</option>
						
							<option value="ASSOG-21">Bilanciati obbligazionari</option>
						
							<option value="ASSOG-42">Flessibili</option>
						
							<option value="ASSOG-38">Fondi di mercato monetario euro</option>
						
							<option value="ASSOG-35">Obbligazionari altre specializzazioni</option>
						
							<option value="ASSOG-27">Obbligazionari dollaro gov.med./lungo termine</option>
						
							<option value="ASSOG-26">Obbligazionari dollaro governat.breve termine</option>
						
							<option value="ASSOG-29">Obbligazionari dollaro high yield</option>
						
							<option value="ASSOG-24">Obbligazionari euro corp.investment grade</option>
						
							<option value="ASSOG-23">Obbligazionari euro govern.med./lungo termine</option>
						
							<option value="ASSOG-22">Obbligazionari euro governativi breve termine</option>
						
							<option value="ASSOG-25">Obbligazionari euro high yield</option>
						
							<option value="ASSOG-37">Obbligazionari flessibili</option>
						
							<option value="ASSOG-31">Obbligazionari internazionali corp.invt grade</option>
						
							<option value="ASSOG-30">Obbligazionari internazionali governativi</option>
						
							<option value="ASSOG-32">Obbligazionari internazionali high yield</option>
						
							<option value="ASSOG-34">Obbligazionari paesi emergenti</option></select>
					</div>
					<div class="col-sm-4 col-xs-12">
						<select name="divisa" class="form-control"><option value="" selected="selected">Divisa</option>
 						
							<option value="EUR">Euro</option></select>
					</div>
				</div>
				<div class="col-sm-12 col-xs-12 margin-top10 ricercaAvanzata padding0">
					<div class="col-sm-8 col-xs-12">
						<select name="volatilita1Y" class="form-control"><option value="" selected="selected">Volatilit&agrave 1Y</option>
 						
							<option value="0|2">Rischio Minimo</option>
						
							<option value="2|5">Rischio Basso</option>
						
							<option value="5|10">Rischio Moderato</option>
						
							<option value="10|20">Rischio Alto</option>
						
							<option value="20|*">Rischio Molto Alto</option></select>
					</div>
					<div class="col-sm-4 col-xs-12">
						<select name="rischio" class="form-control"><option value="" selected="selected">Rischio</option>
 						
							<option value="1|2">Prudenti</option>
						
							<option value="3|4">Bilanciati</option>
						
							<option value="5|6">Aggressivi</option></select>
					</div>
				</div>
			</div> 
			<div class="pull-right" style="padding-right: 20px">
				
				<a href="/WEBHT/investimenti/fondiRicerca.do" class="button btn btn-primary">Indietro</a>
				<input type="submit" name="conferma" value="Cerca" class="btn btn-primary" alt="Cerca" />
			</div> 
		</div>
		</form>
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
			style: "height:300px;",
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

	
	
	
	<div id="I_FND_RIC" class="jqGridTOLDiv" >
		<table id="I_FND_RIC_Table" class="jqGridTOLTable"></table>
		<div id="I_FND_RICPager"></div>
	</div>
	
	<script>
	$(document).ready(function() {
		startGrid('#I_FND_RIC', { 

url: '/template/investimenti/fondiRicercaParametriRisultatoJson.php?proventi=&sgr=&rating=&categoria=&divisa=&rischio=&conferma=Cerca&volatilita1Y=&descrizione=',
caption:"Ricerca Fondi",
height:'auto',
width:'1000px',
colModel:[
{name:'datiJqGrid.id',jsonmap:'datiJqGrid.id',key:true, hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloTot',jsonmap:'datiJqGrid.titoloTot', hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloGTot',jsonmap:'datiJqGrid.titoloGTot', hidden:true, hidedlg:true},
{name:'act',jsonmap:'act',label:' ', width:15, align:'center',sortable:false,hidedlg:true},
{name:'descrizione',jsonmap:'descrizione',push:'N',label:"Descrizione",title:"Descrizione",width:145,align:'Left'},
{name:'descSocGestione',jsonmap:'descSocGestione',push:'N',label:"Societ&agrave;",title:"Societ&agrave;",width:80,align:'Left'},
{name:'descCategoria',jsonmap:'descCategoria',push:'N',label:"Categoria",title:"Categoria",width:50,align:'Left'},
{name:'nav',jsonmap:'nav',push:'N',label:"Prezzo / NAV",title:"Prezzo/NAV",width:70,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'dataNav',jsonmap:'dataNav',push:'N',label:"Data Prezzo",title:"Data Prezzo",width:50,align:'Center',formatter:'date',formatoptions:{srcformat:'d/m/Y H:i',newformat:'d/m/Y'},sorttype:'date'},
{name:'rating',jsonmap:'rating',push:'N',label:"Rating",title:"Rating",width:40,align:'Center'},
{name:'codDivisa',jsonmap:'codDivisa',push:'N',label:"Divisa",title:"Divisa",width:40,align:'Center'},
{name:'descProventi',jsonmap:'descProventi',push:'N',label:"Proventi",title:"Proventi",width:60,align:'Center'},
{name:'volatilita1Y',jsonmap:'volatilita1Y',push:'N',label:"Vol 1Y %",title:"Vol 1Y",width:30,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'commissioneOnline',jsonmap:'commissioneOnline',push:'N',label:"Commis Online",title:"Commissione Online",width:60,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'isin',jsonmap:'isin',push:'N',label:"Isin",title:"Isin",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'codAreaFinanza',jsonmap:'codAreaFinanza',push:'N',label:"Codice Area Finanza",title:"Codice Area Finanza",width:50,align:'Left',hidden:true,hidedlg:true}
],
opzioniTabella:[
],
opzioniRiga:[
{label:"Sottoscrivi",funcOptions:{funzioneJS:goToPage,urlLink:'	/investimenti/fondiSottoscrizioneFondo.do',codiceIsin:'codiceIsin',codAreaFinanza:'codAreaFinanza'}},
{testDisplay:isFondo,label:"Dettaglio fondo",funcOptions:{funzioneJS:goToPage,urlLink:'/investimenti/fondiDettaglioFondo.do',codAreaFinanza:'codAreaFinanza'}},
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
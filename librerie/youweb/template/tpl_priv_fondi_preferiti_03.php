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
			
			
		
		
			
		
		
			
		
			
				
 					<span>Fondi</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>









	










<div class="section clearfix">
	<div id="fcElPrefer" class="jqGridTOLDiv">
		<table id="fcElPreferTable" class="jqGridTOLTable"></table>
		<form id="fondiPreferitiForm" method="post" action="/WEBHT/investimenti/fondiPreferitiElenco.do" class="divForm formHeaderGrid form-horizontal">
			<div class="bs-example">
				<div class="form-group">
					<div class="form-field-input col-xs-12">
						
							<label class="control-label" for="idPortafoglio">Lista</label>
						
						<div class="form-field">
							
								<div class="col-xs-12 col-sm-4">
									<select name="idPortafoglio" onchange="ricarica(this);" id="idPortafoglio" class="form-control"><option value="240538">prova</option></select>
								</div>
							
							<div class="col-xs-12 col-sm-8">	
								<input class="btn button" type="button" value="Nuova" title="Crea una lista" onclick="creaSelezione();" />
								
									<input class="btn button" type="button" value="Rinomina" title="Rinomina una lista" onclick="rinominaSelezione();" /> 
									<input class="btn button" type="button" value="Elimina" title="Elimina lista" onclick="eliminaSelezione();" />
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<br />
<script type="text/javascript">
function generateReport() {
	var grid=$('.jqGridTOLTable');
	var rowData = grid.jqGrid('getRowData');
	if (rowData.length>0) {
		var fondi=new Array();
		fondi.push('/investimenti/fondiReportPdfServlet');
		$(rowData).each(function (i,e){
			fondi.push('codAreaFinanza');
			fondi.push(e.codAreaFinanza);
			if (i>9) {
				return false;
			}			
		});
		console.log(fondi);
		goToPage.apply(this, fondi); //('/investimenti/fondiReportPdfServlet', 'codAreaFinanza', '${codAreaFinanza}');
	}
}
	function rimuoviFondoDallaListaPreferiti(page) 
	{
		var url = page;
		if (page.indexOf(getPathContext()) == -1 && page.indexOf("http") == -1)
			url = getPathContext() + url;
		url = url + '?';
		for ( var i = 1; i < arguments.length; i += 2) {
			url += '&'
			url += arguments[i] + '='
			url += escape(arguments[i + 1]);
		}
		$.get(url, function() {
			ricaricaGriglia('fcElPreferTable');
		});
	}
	function creaSelezione()
	{
		openAjaxDialog('/investimenti/fondiPreferitiCreaSelezione.do', 'dialogName', 'dialogSelezione', 'title', 'Crea nuova lista', 'width' ,600);
	}
	function eliminaSelezione()
	{
		if(confirm('Sicuro di voler eliminare la lista '+ $('#idPortafoglio option:selected').text() + '?')) 
		{
			openAjaxDialog('/investimenti/fondiPreferitiEliminaSelezione.do', 'idPortafoglio', $('#idPortafoglio').val(), 'dialogName', 'dialogSelezione', 'title', 'Elimina lista', 'width' ,600);
		}
	}
	function rinominaSelezione()
	{
		openAjaxDialog('/investimenti/fondiPreferitiRinominaSelezione.do', 'idPortafoglio', $('#idPortafoglio').val(), 'dialogName', 'dialogSelezione', 'title', 'Rinomina una lista', 'width' ,600);
	}
	$(document).ready(function() 
	{
		startGrid('#fcElPrefer', { 
url: '/template/investimenti/fondiPreferitiElencoJson.php',
caption:"Fondi preferiti",
height:'200',
colModel:[
{name:'datiJqGrid.id',jsonmap:'datiJqGrid.id',key:true, hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloTot',jsonmap:'datiJqGrid.titoloTot', hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloGTot',jsonmap:'datiJqGrid.titoloGTot', hidden:true, hidedlg:true},
{name:'act',jsonmap:'act',label:' ', width:30, align:'center',sortable:false,hidedlg:true},
{name:'nomeFondo',jsonmap:'nomeFondo',label:"Nome fondo",title:"Nome fondo",width:200,align:'Left'},
{name:'categoria',jsonmap:'categoria',label:"Categoria",title:"Categoria",width:50,align:'Center'},
{name:'rendimento',jsonmap:'rendimento',push:'N',label:"Rendimento YTD",title:"Rendimento YTD",width:50,align:'Center',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'livelloRischio',jsonmap:'livelloRischio',push:'N',label:"Rischio",title:"Rischio",width:45,align:'Center'},
{name:'divisa',jsonmap:'divisa',push:'N',label:"Valuta",title:"Valuta",width:25,align:'Left'},
{name:'ultimoPrezzo',jsonmap:'ultimoPrezzo',push:'N',label:"Valore quota <br>ultima",title:"Valore quota <br>ultima",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D3'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'prezzoQuotPrec',jsonmap:'prezzoQuotPrec',label:"Valore quota <br>precedente",title:"Valore quota <br>precedente",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D3'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'variazioneAssoluta',jsonmap:'variazioneAssoluta',push:'N',label:"Variazione <br>assoluta",title:"Variazione <br>assoluta",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D3'},classes:'importo',unformat:decimalUnFmt,sorttype:'currency',hidden:true,hidedlg:true},
{name:'variazionePercentuale',jsonmap:'variazionePercentuale',label:"Variazione <br>%",title:"Variazione <br>%",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D3'},classes:'importo',unformat:decimalUnFmt,sorttype:'currency'},
{name:'codiceIsin',jsonmap:'codiceIsin',label:"null",title:"null",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'idMovimento',jsonmap:'idMovimento',label:"null",title:"null",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'idPortafoglio',jsonmap:'idPortafoglio',label:"null",title:"null",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'collocabile',jsonmap:'collocabile',push:'N',label:"null",title:"null",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'codAreaFinanza',jsonmap:'codAreaFinanza',push:'N',label:"codice area Finanza",title:"codice area Finanza",width:50,align:'Left',hidden:true,hidedlg:true}
],
opzioniTabella:[
{label:'Esporta in Excel',funcOptions:{funzioneJS:esportaGrigliaExcel}}
],
opzioniRiga:[
{testDisplay:isFondoSO,label:"Sottoscrivi",funcOptions:{funzioneJS:goToPage,urlLink:'/investimenti/fondiSottoscrizioneFondo.do',codAreaFinanza:'codAreaFinanza'}},
{testDisplay:isFondo,label:"Dettaglio fondo",funcOptions:{funzioneJS:goToPage,urlLink:'/investimenti/fondiDettaglioFondo.do',codAreaFinanza:'codAreaFinanza',buttonIndietro:'buttonIndietro'}},
{label:"Confronto",funcOptions:{funzioneJS:fndConfronto,fondoInput:'codAreaFinanza'}},
{label:"Cancella",funcOptions:{funzioneJS:rimuoviFondoDallaListaPreferiti,urlLink:'/investimenti/fondiPreferitiElencoRimuovi.do',idMovimento:'idMovimento'}},
{label:"Report pdf",funcOptions:{funzioneJS:goToPage,urlLink:'/investimenti/fondoDownloadReport.do',codAreaFinanza:'codAreaFinanza'}}
]
});

		
		$('#fcElPrefer .bottoni').prepend('<button class="btnPdf button" style="margin-right: 5px;" id="btnDownloadPdf10Fondi" />');
		$("#dialog-warning-nessunFondo").dialog({
			title:'Attenzione',
			modal: true,
			autoOpen: false,
			resizable: false,
			close: function () {$('#dialog-warning-nessunFondo').dialog('close');}
		});
		$('#btnDownloadPdf10Fondi').click(function()
		{
			if ($('#fcElPrefer_1').length) {generateReport();}
			else {$("#dialog-warning-nessunFondo").dialog('open');}
		});
	});

</script>

<script>
function helpTabellafcElPrefer() {

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
<div id="dialog-warning-nessunFondo" style="display:none;">
	<div class="ui-dialog-content bs-example form-horizontal margin-top20">
		<div class="form-group col-xs-12">
			<div class="form-field-resume clearfix">
				Aggiungi fondi all'elenco dei preferiti per il download del report
			</div>
		</div>
	</div>
	<div>
		<div class="pull-right margin-top10 margin-right10">
			
			<input type="button" name="" value="Chiudi" onclick="$('#dialog-warning-nessunFondo').dialog('close');" class="btn" />
		</div>
	</div>
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
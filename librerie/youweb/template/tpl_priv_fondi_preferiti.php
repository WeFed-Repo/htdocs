					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							16/03/2017	
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
	<div id="fcElPrefer" class="jqGridTOLDiv"><h3 class="titleSection">Fondi preferiti<span class="rounded_corner">&nbsp;</span></h3><div class="context-buttons pull-right clearfix "><span class="bottoni_intestazione_tabella"></span><span class="rounded_corner">&nbsp;</span><span class="bottoni"><button class="btnPdf button" style="margin-right: 5px;" id="btnDownloadPdf10Fondi"></button><button class="btnTools button bottoneStrumenti ui-widget-header"></button><button value="" class="btnRefresh button"></button></span></div><div class="tappo"></div><form id="fondiPreferitiForm" method="post" action="/WEBHT/investimenti/fondiPreferitiElenco.do" class="divForm formHeaderGrid form-horizontal">
			<div class="bs-example">
				<div class="form-group">
					<div class="form-field-input col-xs-12">
						
						<div class="form-field">
							
							<div class="col-xs-6">	
								<input class="btn button" type="button" value="Nuova" title="Crea una lista" onclick="creaSelezione();">
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
		<div class="ui-jqgrid ui-widget ui-widget-content ui-corner-all" id="gbox_fcElPreferTable" dir="ltr" style="width: 916px;"><!--div class="ui-widget-overlay jqgrid-overlay" id="lui_fcElPreferTable"></div--><div class="loading ui-state-default ui-state-active" id="load_fcElPreferTable" style="display: none;">Caricamento...</div><div class="ui-jqgrid-view" id="gview_fcElPreferTable" style="width: 916px;"><div class="ui-jqgrid-titlebar ui-widget-header ui-corner-top ui-helper-clearfix" style="display: none;"><span class="ui-jqgrid-title">false</span></div><div class="ui-state-default ui-jqgrid-hdiv" style="width: 916px;"><div class="ui-jqgrid-hbox"><table class="ui-jqgrid-htable" style="width:898px" role="grid" aria-labelledby="gbox_fcElPreferTable" cellspacing="0" cellpadding="0" border="0"><thead><tr class="ui-jqgrid-labels" role="rowheader"><th id="fcElPreferTable_datiJqGrid.id" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" title="datiJqGrid.id" style="width: 150px; display: none;"><div id="jqgh_fcElPreferTable_datiJqGrid.id" class="ui-jqgrid-sortable">datiJqGrid.id<span class="s-ico" style=""><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="fcElPreferTable_datiJqGrid.titoloTot" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" title="datiJqGrid.titoloTot" style="width: 150px; display: none;"><div id="jqgh_fcElPreferTable_datiJqGrid.titoloTot" class="ui-jqgrid-sortable">datiJqGrid.titoloTot<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="fcElPreferTable_datiJqGrid.titoloGTot" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" title="datiJqGrid.titoloGTot" style="width: 150px; display: none;"><div id="jqgh_fcElPreferTable_datiJqGrid.titoloGTot" class="ui-jqgrid-sortable">datiJqGrid.titoloGTot<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="fcElPreferTable_act" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" title=" " style="width: 49px;"><div id="jqgh_fcElPreferTable_act" class="ui-jqgrid-sortable"> <span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="fcElPreferTable_nomeFondo" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oLeft" title="Nome fondo" style="width: 327px;"><div id="jqgh_fcElPreferTable_nomeFondo" class="ui-jqgrid-sortable">Nome fondo<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="fcElPreferTable_categoria" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" title="Categoria" style="width: 82px;"><div id="jqgh_fcElPreferTable_categoria" class="ui-jqgrid-sortable">Categoria<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="fcElPreferTable_rendimento" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" title="Rendimento YTD" style="width: 82px;"><div id="jqgh_fcElPreferTable_rendimento" class="ui-jqgrid-sortable">Rendimento YTD<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="fcElPreferTable_livelloRischio" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" title="Rischio" style="width: 73px;"><div id="jqgh_fcElPreferTable_livelloRischio" class="ui-jqgrid-sortable">Rischio<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="fcElPreferTable_divisa" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oLeft" title="Valuta" style="width: 41px;"><div id="jqgh_fcElPreferTable_divisa" class="ui-jqgrid-sortable">Valuta<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="fcElPreferTable_ultimoPrezzo" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Valore quota <br>ultima" style="width: 82px;"><div id="jqgh_fcElPreferTable_ultimoPrezzo" class="ui-jqgrid-sortable">Valore quota <br>ultima<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="fcElPreferTable_prezzoQuotPrec" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Valore quota <br>precedente" style="width: 82px;"><div id="jqgh_fcElPreferTable_prezzoQuotPrec" class="ui-jqgrid-sortable">Valore quota <br>precedente<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="fcElPreferTable_variazioneAssoluta" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Variazione <br>assoluta" style="width: 50px; display: none;"><div id="jqgh_fcElPreferTable_variazioneAssoluta" class="ui-jqgrid-sortable">Variazione <br>assoluta<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="fcElPreferTable_variazionePercentuale" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Variazione <br>%" style="width: 80px;"><div id="jqgh_fcElPreferTable_variazionePercentuale" class="ui-jqgrid-sortable">Variazione <br>%<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="fcElPreferTable_codiceIsin" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oLeft" title="null" style="width: 50px; display: none;"><div id="jqgh_fcElPreferTable_codiceIsin" class="ui-jqgrid-sortable">null<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="fcElPreferTable_idMovimento" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oLeft" title="null" style="width: 50px; display: none;"><div id="jqgh_fcElPreferTable_idMovimento" class="ui-jqgrid-sortable">null<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="fcElPreferTable_idPortafoglio" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oLeft" title="null" style="width: 50px; display: none;"><div id="jqgh_fcElPreferTable_idPortafoglio" class="ui-jqgrid-sortable">null<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="fcElPreferTable_collocabile" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oLeft" title="null" style="width: 50px; display: none;"><div id="jqgh_fcElPreferTable_collocabile" class="ui-jqgrid-sortable">null<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="fcElPreferTable_codAreaFinanza" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oLeft" title="codice area Finanza" style="width: 50px; display: none;"><div id="jqgh_fcElPreferTable_codAreaFinanza" class="ui-jqgrid-sortable">codice area Finanza<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th></tr></thead></table></div></div><div class="ui-jqgrid-bdiv" style="height: 200px; width: 916px;"><div style="position:relative;"><div></div><table id="fcElPreferTable" class="jqGridTOLTable ui-jqgrid-btable" tabindex="1" cellspacing="0" cellpadding="0" border="0" role="grid" aria-multiselectable="false" aria-labelledby="gbox_fcElPreferTable" style="width: 898px;"><tbody><tr class="jqgfirstrow" role="row" style="height:auto"><td role="gridcell" style="height:0px;width:150px;display:none;"></td><td role="gridcell" style="height:0px;width:150px;display:none;"></td><td role="gridcell" style="height:0px;width:150px;display:none;"></td><td role="gridcell" style="height:0px;width:49px;"></td><td role="gridcell" style="height:0px;width:327px;"></td><td role="gridcell" style="height:0px;width:82px;"></td><td role="gridcell" style="height:0px;width:82px;"></td><td role="gridcell" style="height:0px;width:73px;"></td><td role="gridcell" style="height:0px;width:41px;"></td><td role="gridcell" style="height:0px;width:82px;"></td><td role="gridcell" style="height:0px;width:82px;"></td><td role="gridcell" style="height:0px;width:50px;display:none;"></td><td role="gridcell" style="height:0px;width:80px;"></td><td role="gridcell" style="height:0px;width:50px;display:none;"></td><td role="gridcell" style="height:0px;width:50px;display:none;"></td><td role="gridcell" style="height:0px;width:50px;display:none;"></td><td role="gridcell" style="height:0px;width:50px;display:none;"></td><td role="gridcell" style="height:0px;width:50px;display:none;"></td></tr></tbody></table></div><div class="ui-state-highlight ui-corner-all gridMsg" id="fcElPreferDivWarning" style="top: 85.5px; left: 343px;"><span class="ui-icon ui-icon-info"></span><strong>Attenzione:</strong> <span class="msg">Nessuna lista presente.</span></div></div></div><div class="ui-jqgrid-resize-mark" id="rs_mfcElPreferTable">&nbsp;</div></div>
		
	<ul class="ulGridOptions ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all"><li class="ui-menu-item"><a href="#" class="ui-corner-all">Esporta in Excel</a></li></ul></div>
</div>
<br>
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
url: '../investimenti/fondiPreferitiElencoJson.do',
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
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
			
		</div>
    </div>
  </div>
</div>
</div>







<div class="riquadro clearfix">
	<div class="col-xs-12 col-sm-12 clear-padding" style="padding: 8px;">
		<p style="font-size:0.8em">I dati e le notizie pubblicati hanno carattere puramente informativo non sono da intendersi quali raccomandazioni personalizzate e non costituiscono sollecitazione al pubblico risparmio, nè attività di promozione o di consulenza in materia di strumenti finanziari e/o di servizi di investimento. Non costituiscono, pertanto, consulenza o parere della Banca sul merito di una particolare operazione o strategia di investimento con riguardo al profilo del singolo Cliente. Eventuali decisioni relative a investimenti e disinvestimenti sono assunte dall'investitore in piena autonomia.<br> Laddove non diversamente indicato performance ed indicatori sono calcolati in euro. <br> Gli indicatori di volatilità / rendimento sono calcolati da Deus Technology.<br> I rendimenti utilizzati per la ricerca sono storici e non garantiscono analoghi risultati nel futuro. I rendimenti vanno inoltre valutati confrontandoli con i parametri di mercato. Il valore delle quote / azioni dei fondi / comparti e i relativi rendimenti sono da considerarsi al lordo dell'imposizione fiscale. I rendimenti dei fondi / comparti a distribuzione sono calcolati ipotizzando il reinvestimento dei dividendi. I rendimenti storici dei fondi / comparti non costituiscono l'unico parametro di valutazione. <br> Prima dell'adesione leggere il prospetto informativo disponibile nell'area riservata del nostro sito nonchè sul sito internet dell'offerente le quote/azioni dei Fondi/Sicav. <br></p>
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
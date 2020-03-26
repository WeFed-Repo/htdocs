<script type="text/javascript" src="/HT/fe/js/script/funzioniInvestimenti.js?v=161229"></script> 
<div class="visible-print-block"> 
	<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
	<div class="pull-right">29/06/2017	</div></div>
	<div class="riquadro clearfix">
	<div class="clearfix">
			<style>
			.imgSrv{
				float: none;
			}
			</style>
			<h1><div class="hidden-print hidden-xxs flag portafoglio">&nbsp;</div>
					<span>Portafoglio fondi</span>
		 	</h1>
	</div>
		<form id="formInvestimenti" method="post" action="/WEBHT/investimenti/portafoglioFondi.do">
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
				<h3 class="titleSection">Seleziona Dossier</h3>
				<div class="selezioneCC tabellaSelezioneCC">
					<div class="cartaSelezionata clearfix">
						<div class="col-xs-12">
							<span class="col-sm-2 col-xs-12 clear-paddingImportant" id="labelIntestatario">
								Intestazione:
							</span> 
							<span id="intestazione" class="col-xs-6 clear-paddingImportant"> 
								Lacoo Lmt Uaaulr
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
								 		<select class="form-control">
											
												<option value="          ">
													          &nbsp;&nbsp;&nbsp;&nbsp;0,00&nbsp;&euro;
												</option>
											
												<option value="          ">
													          &nbsp;&nbsp;&nbsp;&nbsp;0,00&nbsp;&euro;
												</option>
											
												<option value="          ">
													          &nbsp;&nbsp;&nbsp;&nbsp;0,00&nbsp;&euro;
												</option>
											
												<option value="          ">
													          &nbsp;&nbsp;&nbsp;&nbsp;0,00&nbsp;&euro;
												</option>
											
												<option value="          ">
													          &nbsp;&nbsp;&nbsp;&nbsp;0,00&nbsp;&euro;
												</option>
											
										</select> 
									</span>
							</div>
						</div>
						
							<a href="javascript:void(0);" class="btnSelezioneCC">
								<img src="/HT/IMAGES/nGrafica/ico-select.png" id="btnSelezioneRapporto" title="Seleziona" alt="Seleziona">
							</a>
						
					</div>
					<div class="table-responsive tabSelezioneCC" style="display: none;">
						<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
							<div id="DataTables_Table_10_wrapper" class="dataTables_wrapper no-footer">
								<table class="table table-striped dataTable no-footer" id="DataTables_Table_10" role="grid">
									<thead>
										<tr role="row"><th class="hidden sorting_asc" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-sort="ascending" aria-label="&amp;nbsp;: ordinamento decrescente" style="width: 0px;">&nbsp;</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Dossier: ordinamento crescente" style="width: 0px;">Dossier</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Filiale: ordinamento crescente" style="width: 0px;">Filiale</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Intestazione: ordinamento crescente" style="width: 0px;">Intestazione</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="C/C: ordinamento crescente" style="width: 0px;">C/C</th></tr>
									</thead>
									<tbody>
										<tr role="row" class="odd">
											<td class="hidden sorting_1"><input type="radio" name="chiaveDossier" value="007|2001|000000106440" checked="checked" onclick="submit()" id="chiaveDossier"></td>
											<td>000000106440</td>
											<td>SEDE DI LODI - 2001</td>
											<td>LACOO LMT UAAULR</td>
											<td>00174456</td>
											</tr>
											<tr role="row" class="even">
											<td class="hidden sorting_1"><input type="radio" name="chiaveDossier" value="007|2001|000008318876" onclick="submit()" id="chiaveDossier"></td>
											<td>000008318876</td>
											<td>SEDE DI LODI - 2001</td>
											<td>L GLLM AELOPRNPOST UCITIUUAOL AAA</td>
											<td>00003610</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>

<div class="section clearfix"> 
	<div id="fcPtf" class="jqGridTOLDiv nosort"> 
		<table id="fcPtf_Table" class="jqGridTOLTable"></table> 
	</div> 
	<div id="titoliPrefRest" class="visible-xs" style="margin:5px"> </div> 
	<script> 

$(document).ready(function() { 

var NumberFormatter =function(number){ 

this.value = number; 

this.maximumFractionDigits = 2; 

this.minimumFractionDigits = 2; 

this.digitsNumber = 2; 

this.currency = false; 



}; 

NumberFormatter.prototype.isNegativo = function(){ 

if(this.value < 0){ 

return true; 

}else{ 

return false; 

} 

} 

NumberFormatter.prototype.setDigitsNumber = function(digitsNumber){ 

this.digitsNumber = digitsNumber; 

} 

NumberFormatter.prototype.format = function(){ 

if(this.value === 0){ 

return "0,00"; 

} 

if(this.value != null && this.value != ''){ 

return this.value.toFixed(this.digitsNumber).replace('.', ','); 

} 

} 

startGrid('#fcPtf', { 

url: '/template/investimenti/portafoglioFondiPicJson.php',

caption:"Elenco situazione Fondi e Sicav",

height:'auto',

width:'auto',

colModel:[

{name:'datiJqGrid.id',jsonmap:'datiJqGrid.id',key:true, hidden:true, hidedlg:true},

{name:'datiJqGrid.titoloTot',jsonmap:'datiJqGrid.titoloTot', hidden:true, hidedlg:true},

{name:'datiJqGrid.titoloGTot',jsonmap:'datiJqGrid.titoloGTot', hidden:true, hidedlg:true},

{name:'act',jsonmap:'act',label:' ',  align:'center',sortable:false,hidedlg:true},

{name:'quotazione.descrizione',jsonmap:'quotazione.descrizione',push:'N',label:"Nome Fondo",title:"Nome Fondo",align:'Left',formatter:setPirBadgeDes,width:300
},

{name:'pir',jsonmap:'pir',push:'N',label:"Pir",title:"Pir",align:'Center',formatter:setPirBadge, classes: 'no-padding'},

{name:'quotazione.codDivisa',jsonmap:'quotazione.codDivisa',push:'N',label:"Divisa",title:"Divisa",align:'Center'},

{name:'quantita',jsonmap:'quantita',push:'N',label:"Q.ta",title:"Quantità",align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D3'},unformat:decimalUnFmt,sorttype:'currency'},

{name:'prezzoMedioDiCarico',jsonmap:'prezzoMedioDiCarico',push:'N',label:"Prezzo di carico",title:"Prezzo di carico",align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},

{name:'quotazione.nav',jsonmap:'quotazione.nav',push:'N',label:"Valore quota ultima",title:"Valore quota ultima",align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D3'},unformat:decimalUnFmt,sorttype:'currency'},

{name:'quotazione.navPrecedente',jsonmap:'quotazione.navPrecedente',push:'N',label:"Valore quota precedente",title:"Valore quota precedente",align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D3'},unformat:decimalUnFmt,sorttype:'currency'},

{name:'quotazione.isin',jsonmap:'quotazione.isin',push:'N',label:"ISIN",title:"ISIN",align:'Center',hidden:true},

{name:'quotazione.proventiYTD',jsonmap:'quotazione.proventiYTD',push:'N',label:"Rendimento YTD",title:"Rendimento YTD",align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},unformat:decimalUnFmt,sorttype:'currency'},

{name:'controvalore',jsonmap:'controvalore',push:'N',label:"Controvalore",title:"Controvalore",align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},unformat:decimalUnFmt,sorttype:'currency'},

{name:'quotazione.variazioneNav',jsonmap:'quotazione.variazioneNav',push:'N',label:"Variazione %",title:"Variazione %",align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},classes:'importo',unformat:decimalUnFmt,sorttype:'currency'},

{name:'quotazione.dataNav',jsonmap:'quotazione.dataNav',push:'N',label:"Data NAV",title:"Data NAV",align:'Left',formatter:'date',formatoptions:{srcformat:'d/m/Y H:i',newformat:'d/m/Y'},sorttype:'date',hidden:true},

{name:'quotazione.rating',jsonmap:'quotazione.rating',push:'N',label:"Rating Deus",title:"Rating Deus",align:'Center',hidden:true},

{name:'quotazione.descCategoria',jsonmap:'quotazione.descCategoria',push:'N',label:"Categoria",title:"Categoria",align:'Left',hidden:true},

{name:'quotazione.codAreaFinanza',jsonmap:'quotazione.codAreaFinanza',push:'N',label:"Cod Area Finanza",title:"Cod Area Finanza",align:'Left',hidden:true,hidedlg:true},

{name:'quotazione.collocabile',jsonmap:'quotazione.collocabile',push:'N',label:"Collocabile",title:"Collocabile",align:'Left',hidden:true,hidedlg:true},

{name:'quotazione.switchable',jsonmap:'quotazione.switchable',push:'N',label:"Switchable",title:"Switchable",align:'Left',hidden:true,hidedlg:true},

{name:'fondoPac',jsonmap:'fondoPac',push:'N',label:"Fondo PAC",title:"Fondo PAC",align:'Left',hidden:true,hidedlg:true},



{name:'codAreaFinanza',jsonmap:'codAreaFinanza',push:'N',label:"codAreaFinanza",title:"null",align:'Left',hidden:true,hidedlg:true},

{name:'dataMediaFiscale',jsonmap:'dataMediaFiscale',push:'N',label:"dataMediaFiscale",title:"null",align:'Left',formatter:'date',formatoptions:{srcformat:'d/m/Y H:i',newformat:'d/m/Y'},sorttype:'date',hidden:true,hidedlg:true},

{name:'divisa',jsonmap:'divisa',push:'N',label:"divisa",title:"null",align:'Left',hidden:true,hidedlg:true},

{name:'prezzoFiscale',jsonmap:'prezzoFiscale',push:'N',label:"prezzoFiscale",title:"null",align:'Left',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency',hidden:true,hidedlg:true},

{name:'cambioMedioFiscale',jsonmap:'cambioMedioFiscale',push:'N',label:"cambioMedioFiscale",title:"null",align:'Left',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},unformat:decimalUnFmt,sorttype:'currency',hidden:true,hidedlg:true}

],

opzioniTabella:[

{label:'',funcOptions:{funzioneJS:opzioni}}

],

opzioniRiga:[

{testDisplay:isFondoSO,label:"Sottoscrivi",funcOptions:{funzioneJS:goToPage,urlLink:'/investimenti/fondiSottoscrizioneFondo.do',codAreaFinanza:'codAreaFinanza'}},

{testDisplay:isFondoSO,label:"Rimborso",funcOptions:{funzioneJS:goToPage,urlLink:'/investimenti/fondiRimborsoFondo.do',codAreaFinanza:'codAreaFinanza',sottodeposito:'sottodeposito'}},

{testDisplay:isFondoSW,label:"Switch",funcOptions:{funzioneJS:goToPage,urlLink:'/investimenti/fondiSwitchFondo.do',codAreaFinanza:'codAreaFinanza',sottodeposito:'sottodeposito'}},

{testDisplay:isFondo,label:"Dettaglio fondo",funcOptions:{funzioneJS:goToPage,urlLink:'/investimenti/fondiDettaglioFondo.do',codAreaFinanza:'codAreaFinanza',buttonIndietro:'buttonIndietro'}},

{testDisplay:isFondo,label:"Aggiungi a preferiti",funcOptions:{funzioneJS:openAjaxDialog,urlLink:'/investimenti/fondiPreferitiAggiungiForm.do',codAreaFinanza:'codAreaFinanza',title:'Aggiungi a preferiti'}},

{label:"Dettaglio Fiscale",funcOptions:{funzioneJS:openAjaxDialog,urlLink:'/investimenti/fondi/dettaglioFiscale.do',width:'600',height:'150',title:'Dettaglio Fiscale',descrizione:'quotazione.descrizione',isin:'quotazione.isin',dataMediaFiscale:'dataMediaFiscale',divisa:'divisa',prezzoFiscale:'prezzoFiscale',cambioMedioFiscale:'cambioMedioFiscale'}}

]

});



}); 

</script> 



<script> 

function helpTabellafcPtf() { 



}


function setPirBadge(cellValue){
	if(cellValue!='')
	{
		return '<span class="badgePir">' + cellValue + '</span>';
	}
	else 
	{
		return '';
	}
	
}
function setPirBadgeDes(cellValue,rowObject,options) {
	
	if(options.pir=='PIR')
	{
		return '<span class="badge">PIR</span>' + cellValue;
	}
	else 
	{
		return cellValue;
	}
}
$(window).on("resize", function () {
    var $grid = $(".ui-jqgrid-htable"),
        newWidth = $grid.closest(".ui-jqgrid").parent().width();
    $grid.jqGrid("setGridWidth", newWidth, true);
});
</script>
</div>



<div class="riquadro clearfix">
	<div class="col-xs-12 col-sm-12 clear-padding" style="padding: 8px;">
		<p style="font-size:0.8em">I dati e le notizie pubblicati hanno carattere puramente informativo non sono da intendersi quali raccomandazioni personalizzate e non costituiscono sollecitazione al pubblico risparmio, n&egrave; attivit&agrave; di promozione o di consulenza in materia di strumenti finanziari e/o di servizi di investimento. Non costituiscono, pertanto, consulenza o parere della Banca sul merito di una particolare operazione o strategia di investimento con riguardo al profilo del singolo Cliente. Eventuali decisioni relative a investimenti e disinvestimenti sono assunte dall'investitore in piena autonomia.<br> Laddove non diversamente indicato performance ed indicatori sono calcolati in euro. <br> Gli indicatori di volatilit&agrave; / rendimento sono calcolati da Deus Technology.<br> I rendimenti utilizzati per la ricerca sono storici e non garantiscono analoghi risultati nel futuro. I rendimenti vanno inoltre valutati confrontandoli con i parametri di mercato. Il valore delle quote / azioni dei fondi / comparti e i relativi rendimenti sono da considerarsi al lordo dell'imposizione fiscale. I rendimenti dei fondi / comparti a distribuzione sono calcolati ipotizzando il reinvestimento dei dividendi. I rendimenti storici dei fondi / comparti non costituiscono l'unico parametro di valutazione. <br> Prima dell'adesione leggere il prospetto informativo disponibile nell'area riservata del nostro sito nonch&egrave; sul sito internet dell'offerente le quote/azioni dei Fondi/Sicav. <br></p>
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
<script type="text/javascript">
$(function(){
	$(".btnRefresh").remove();
});
</script>
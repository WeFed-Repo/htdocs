<div id="mainContent" class="center col-sm-80 col-xs-12">
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
		
				
				<div class="hidden-print hidden-xxs flag ricerca">&nbsp;</div>
			
			
		
		
			
		
		
			
				
 					<span>Dettaglio ordine</span>
 					
				
				
				
				
					
				
			
			
			
		
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
						
						



















<div class="form-horizontal">  
<div class="section clearfix">  

<div class="form-group">  
	<div class="form-field-resume col-xs-4">
		<label class="control-label">Numero ordine</label>
		<span class="resume">IHA1-17-18302</span>
	</div>
	<div class="form-field-resume col-xs-4">
		<label class="control-label">Dossier Titoli</label>
		<span class="resume">2001/000000106440</span>
	</div>
	<div class="form-field-resume col-xs-4">
		<label class="control-label">Operazione</label>
		<span class="resume">ACQUISTO A CONTANTI </span>
	</div>
	<div class="form-field-resume col-xs-4">
		<label class="control-label">Codice Titolo</label>
		<span class="resume">000001233410</span>
	</div>
	<div class="form-field-resume col-xs-4">
		<label class="control-label">Denominazione Titolo</label>
		<span class="resume">A2A</span>
	</div>
	<div class="form-field-resume col-xs-4">
		<label class="control-label">ISIN</label>
		<span class="resume">IT0001233417</span>
	</div>
	<div class="form-field-resume col-xs-4">
		<label class="control-label">Piazza</label>
		<span class="resume">BEST EXECUTION AZ.  </span>
	</div>
	<div class="form-field-resume col-xs-4">
		<label class="control-label">Data/ora Inserimento</label>
		<span class="resume">24/05/2017 10:33</span>
	</div>
	<div class="form-field-resume col-xs-4">
		<label class="control-label">Quantità</label>
		<span class="resume">1</span>
	</div>
	<div class="form-field-resume col-xs-4">
		<label class="control-label">Prezzo limite/base premio</label>
		<span class="resume">PREZZO MERCATO      &nbsp;
		
		</span>
	</div>
	
	<div class="form-field-resume col-xs-4">
		<label class="control-label">Fase</label>
		<span class="resume">Corrente</span>
	</div>
	
	
	<div class="form-field-resume col-xs-4">
		<label class="control-label">Validità</label>
		<span class="resume">Val. per la seduta</span>
	</div>
	<div class="form-field-resume col-xs-4">
		<label class="control-label">Data Inizio Validità ordine</label>
		<span class="resume">24/05/2017</span>
	</div>
	<div class="form-field-resume col-xs-4">
		<label class="control-label">Data fine Validità ordine</label>
		<span class="resume">24/05/2017</span>
	</div>
	<div class="form-field-resume col-xs-4">
		<label class="control-label">c/c di regolamento</label>
		<span class="resume">


	2001/000000174456


		</span>
	</div>
	<div class="form-field-resume col-xs-4">
		<label class="control-label">Stato</label>
		<span class="resume">INVIATO                                      </span>
	</div>

</div></div></div>

<div class="oCenter">
	
	<form id="formCompraVendi" method="post" action="/WEBHT/investimenti/compraVendiTitolo.do" class="pull-right margin-top20">
		<input type="hidden" name="parAcq" value="" id="parAcq">
		<input type="hidden" name="ckConf" value="">
		<input type="hidden" name="isin" value="IT0001233417">
		<input type="hidden" name="codMercatoInfo" value="MTA">
		<input type="hidden" name="codAreaFinanza" value="00001233410">
		<input type="hidden" name="orderFrom" value="pagina">
		<input type="hidden" name="chiaveDossier" value="007|2001|000000106440">
		<input type="hidden" name="selSottRubrica" value="0,0">
		<input type="hidden" name="quantita" value="1">
		<input type="hidden" name="parMercatoOper" value="IT BA">
		<input type="hidden" name="prezzoLimite" value="0,0000">
			
			
				<input type="hidden" name="parPrezzo" value="MER">
			
   			
		
		<input type="hidden" name="parFase" value="">
		
		
		<input class="button btn" type="button" value="Indietro" title="Indietro" onclick="goToPage('/investimenti/ordiniMovimenti.do')">
		<input class="button  btn" type="button" value="Attestazione" title="Attestazione Ordine" onclick="attestazioneOrdine('IHA1    1700001830200000')">
		<input class="button  btn" type="button" value="Cancella" title="Cancella Ordine" onclick="InvestimentiRevoca('/investimenti/revocaOrdineDossier.do','numeroOrdine','IHA1    1700001830200000')">
		
			<input class="button  btn" type="submit" value="Ripeti Ordine" title="Ripeti Ordine">
		
		
	</form>
</div> 
<div class="section clearfix">

<div id="I_DET" class="jqGridTOLDiv nosort">
	<table id="I_DET_Table" class="jqGridTOLTable"></table>
</div></div>
<script>
$(document).ready(function() {
	var mydata={"message":"Nessun elemento trovato","warning":"true"};
	startGrid('#I_DET', { 
datatype: 'local',
data: mydata,
caption:"Eseguiti parziali",
height:'auto',
colModel:[
{name:'datiJqGrid.id',jsonmap:'datiJqGrid.id',key:true, hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloTot',jsonmap:'datiJqGrid.titoloTot', hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloGTot',jsonmap:'datiJqGrid.titoloGTot', hidden:true, hidedlg:true},
{name:'dataEsecuzione',jsonmap:'dataEsecuzione',label:"Data esecuzione",title:"Data esecuzione",width:80,align:'Center',formatter:'date',formatoptions:{srcformat:'d/m/Y H:i',newformat:'d/m/Y H:i'},sorttype:'date'},
{name:'descStato',jsonmap:'descStato',label:"Stato",title:"Stato",width:100,align:'Left'},
{name:'quantita',jsonmap:'quantita',label:"Quantità",title:"Quantità",width:125,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D3'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'prezzo',jsonmap:'prezzo',label:"Prezzo",title:"Prezzo",width:100,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'dataValuta',jsonmap:'dataValuta',label:"Data Valuta",title:"Data Valuta",width:80,align:'Center',formatter:'date',formatoptions:{srcformat:'d/m/Y H:i',newformat:'d/m/Y'},sorttype:'date'},
{name:'controvaloreCaricoEuro',jsonmap:'controvaloreCaricoEuro',label:"Controvalore Eseguito",title:"colonna.controvaloreCaricoEuro",width:100,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},unformat:decimalUnFmt,sorttype:'currency'}
],
opzioniTabella:[
],
opzioniRiga:[
]
});

});
</script>


						
	 				</div>	
	 				<div class="toldisclaimer col-xs-12">
						<span>Fonte dati: Borsa Italiana</span>
						 
					</div>			
	 				
					
					
				</div>
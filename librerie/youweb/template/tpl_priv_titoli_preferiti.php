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

 	









<form id="simuFormSub" method="post" action="/WEBHT/investimenti/titoliPreferiti.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="da6fe0a2c65f399b924b1fb0b4765f06"></div>
	<input type="hidden" name="codLista" id="codListSub">
</form>

<div id="I_TITPREF" class="jqGridTOLDiv nosort"><h3 class="titleSection">Titoli Preferiti<span class="rounded_corner">&nbsp;</span></h3><div class="context-buttons pull-right clearfix "><span class="bottoni_intestazione_tabella"></span><span class="rounded_corner">&nbsp;</span><span class="bottoni"><button class="btnTools button bottoneStrumenti ui-widget-header"></button><button value="" class="btnRefresh button"></button></span></div><div class="tappo"></div><form id="simuForm" method="post" action="/WEBHT/investimenti/titoliSimulatiJson.do" class="form-horizontal divForm formHeaderGrid"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="da6fe0a2c65f399b924b1fb0b4765f06"></div>
		<div class="bs-example">
			<div class="form-group">
				<div class="form-field-input col-xs-12">
					<input type="hidden" name="tipoRapportoSimulato" value="PREF">
					<label class="control-label" for="PTF_SEL">Lista</label>
					<div class="form-field">
						<div class="col-xs-4">
						<select name="codLista" onchange="ricaricaSimulati(this)" id="codLista" class="form-control"></select></div>
						<div class="col-xs-6">	
						<input class="btn button" type="button" value="Nuova" title="Crea una lista" onclick="creaSelezione(1);"> 
						<input class="btn button" type="button" value="Rinomina" title="Rinomina una lista" onclick="rinominaSelezione();"> 
						<input class="btn button" type="button" value="Elimina" title="Elimina lista" onclick="eliminaSelezione();">
					</div>
					</div>
				</div>
			</div>
		</div>
	</form>
<!-- 	FORM GESTIONE LISTE -->
	

	<div class="ui-jqgrid ui-widget ui-widget-content ui-corner-all" id="gbox_I_TITPREF_Table" dir="ltr" style="width: 892px;"><!--div class="ui-widget-overlay jqgrid-overlay" id="lui_I_TITPREF_Table"></div--><div class="loading ui-state-default ui-state-active" id="load_I_TITPREF_Table" style="display: none;">Caricamento...</div><div class="ui-jqgrid-view" id="gview_I_TITPREF_Table" style="width: 892px;"><div class="ui-jqgrid-titlebar ui-widget-header ui-corner-top ui-helper-clearfix" style="display: none;"><span class="ui-jqgrid-title">false</span></div><div class="ui-state-default ui-jqgrid-hdiv" style="width: 892px;"><div class="ui-jqgrid-hbox"><table class="ui-jqgrid-htable" style="width:892px" role="grid" aria-labelledby="gbox_I_TITPREF_Table" cellspacing="0" cellpadding="0" border="0"><thead><tr class="ui-jqgrid-labels" role="rowheader"><th id="I_TITPREF_Table_datiJqGrid.id" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" title="datiJqGrid.id" style="width: 150px; display: none;"><div id="jqgh_I_TITPREF_Table_datiJqGrid.id" class="ui-jqgrid-sortable">datiJqGrid.id<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_TITPREF_Table_datiJqGrid.titoloTot" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" title="datiJqGrid.titoloTot" style="width: 150px; display: none;"><div id="jqgh_I_TITPREF_Table_datiJqGrid.titoloTot" class="ui-jqgrid-sortable">datiJqGrid.titoloTot<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_TITPREF_Table_datiJqGrid.titoloGTot" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" title="datiJqGrid.titoloGTot" style="width: 150px; display: none;"><div id="jqgh_I_TITPREF_Table_datiJqGrid.titoloGTot" class="ui-jqgrid-sortable">datiJqGrid.titoloGTot<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_TITPREF_Table_act" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" title=" " style="width: 37px;"><div id="jqgh_I_TITPREF_Table_act" class="ui-jqgrid-sortable"> <span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_TITPREF_Table_simbolo" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oLeft" title="Codice del titolo" style="width: 62px;"><div id="jqgh_I_TITPREF_Table_simbolo" class="ui-jqgrid-sortable">Cod.<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_TITPREF_Table_titolo.denominazione" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oLeft" title="Descrizione titolo" style="width: 162px;"><div id="jqgh_I_TITPREF_Table_titolo.denominazione" class="ui-jqgrid-sortable">Titolo<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_TITPREF_Table_codMercatoInfo" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oLeft" title="Piazza" style="width: 40px; display: none;"><div id="jqgh_I_TITPREF_Table_codMercatoInfo" class="ui-jqgrid-sortable">Piazza<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_TITPREF_Table_titolo.descMercato" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" title="Mercato" style="width: 62px;"><div id="jqgh_I_TITPREF_Table_titolo.descMercato" class="ui-jqgrid-sortable">Mercato<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_TITPREF_Table_LAST" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Ultimo prezzo disponibile, espresso nella divisa di negoziazione. " style="width: 62px;"><div id="jqgh_I_TITPREF_Table_LAST" class="ui-jqgrid-sortable">P. di Mercato<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_TITPREF_Table_VAR_PERC" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Variazione percentuale sull'ultimo prezzo del giorno precedente" style="width: 50px;"><div id="jqgh_I_TITPREF_Table_VAR_PERC" class="ui-jqgrid-sortable">Var%<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_TITPREF_Table_TRDDIR_CAH" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" title="Trend" style="width: 25px;"><div id="jqgh_I_TITPREF_Table_TRDDIR_CAH" class="ui-jqgrid-sortable">Tr.<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_TITPREF_Table_TIMELAST_STR" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Ora" style="width: 44px;"><div id="jqgh_I_TITPREF_Table_TIMELAST_STR" class="ui-jqgrid-sortable">Ora<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_TITPREF_Table_titolo.anagrafica.divisaTrattazione" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" title="Divisa Trattazione" style="width: 37px;"><div id="jqgh_I_TITPREF_Table_titolo.anagrafica.divisaTrattazione" class="ui-jqgrid-sortable">Div.<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_TITPREF_Table_isin" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oLeft" title="ISIN" style="width: 100px;"><div id="jqgh_I_TITPREF_Table_isin" class="ui-jqgrid-sortable">ISIN<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_TITPREF_Table_DESC_FASE" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oLeft" title="Fase" style="width: 87px;"><div id="jqgh_I_TITPREF_Table_DESC_FASE" class="ui-jqgrid-sortable">Fase<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_TITPREF_Table_ritardo" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" title="Ritardata" style="width: 35px;"><div id="jqgh_I_TITPREF_Table_ritardo" class="ui-jqgrid-sortable">Rit.<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_TITPREF_Table_QTOT" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Volumi trattati" style="width: 70px; display: none;"><div id="jqgh_I_TITPREF_Table_QTOT" class="ui-jqgrid-sortable">Volumi<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_TITPREF_Table_titolo.quotazione.apertura" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Prezzo di apertura" style="width: 62px;"><div id="jqgh_I_TITPREF_Table_titolo.quotazione.apertura" class="ui-jqgrid-sortable">Apert.<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_TITPREF_Table_HIGH_1_CAH" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Massimo del giorno" style="width: 62px;"><div id="jqgh_I_TITPREF_Table_HIGH_1_CAH" class="ui-jqgrid-sortable">Max<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_TITPREF_Table_LOW_1_CAH" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Minimo del giorno" style="width: 64px;"><div id="jqgh_I_TITPREF_Table_LOW_1_CAH" class="ui-jqgrid-sortable">Min<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_TITPREF_Table_idMovimento" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oLeft" title="Id Movimento" style="width: 50px; display: none;"><div id="jqgh_I_TITPREF_Table_idMovimento" class="ui-jqgrid-sortable">Id Movimento<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_TITPREF_Table_idPortafoglio" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oLeft" title="id Portafoglio" style="width: 50px; display: none;"><div id="jqgh_I_TITPREF_Table_idPortafoglio" class="ui-jqgrid-sortable">id Portafoglio<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_TITPREF_Table_BID_CAH" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Prezzo di Acquisto" style="width: 50px; display: none;"><div id="jqgh_I_TITPREF_Table_BID_CAH" class="ui-jqgrid-sortable">P. di Acquisto<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_TITPREF_Table_BIDSIZE_CAH" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Quantità miglior offerta in acquisto" style="width: 60px; display: none;"><div id="jqgh_I_TITPREF_Table_BIDSIZE_CAH" class="ui-jqgrid-sortable">Q.tà Miglior Acquisto<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_TITPREF_Table_ASK_CAH" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Prezzo di Vendita" style="width: 50px; display: none;"><div id="jqgh_I_TITPREF_Table_ASK_CAH" class="ui-jqgrid-sortable">P. di Vendita<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_TITPREF_Table_ASKSIZE_CAH" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Quantità miglior offerta in vendita" style="width: 60px; display: none;"><div id="jqgh_I_TITPREF_Table_ASKSIZE_CAH" class="ui-jqgrid-sortable">Q.tà Miglior Vendita<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_TITPREF_Table_titolo.quotazione.prezzoRiferimento" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Prezzo di riferimento" style="width: 50px; display: none;"><div id="jqgh_I_TITPREF_Table_titolo.quotazione.prezzoRiferimento" class="ui-jqgrid-sortable">Pr. Rif. Prec.<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th></tr></thead></table></div></div><div class="ui-jqgrid-bdiv" style="height: 100px; width: 892px;"><div style="position:relative;"><div></div><table id="I_TITPREF_Table" class="jqGridTOLTable ui-jqgrid-btable" tabindex="1" cellspacing="0" cellpadding="0" border="0" role="grid" aria-multiselectable="false" aria-labelledby="gbox_I_TITPREF_Table" style="width: 892px;"><tbody><tr class="jqgfirstrow" role="row" style="height:auto"><td role="gridcell" style="height:0px;width:150px;display:none;"></td><td role="gridcell" style="height:0px;width:150px;display:none;"></td><td role="gridcell" style="height:0px;width:150px;display:none;"></td><td role="gridcell" style="height:0px;width:37px;"></td><td role="gridcell" style="height:0px;width:62px;"></td><td role="gridcell" style="height:0px;width:162px;"></td><td role="gridcell" style="height:0px;width:40px;display:none;"></td><td role="gridcell" style="height:0px;width:62px;"></td><td role="gridcell" style="height:0px;width:62px;"></td><td role="gridcell" style="height:0px;width:50px;"></td><td role="gridcell" style="height:0px;width:25px;"></td><td role="gridcell" style="height:0px;width:44px;"></td><td role="gridcell" style="height:0px;width:37px;"></td><td role="gridcell" style="height:0px;width:100px;"></td><td role="gridcell" style="height:0px;width:87px;"></td><td role="gridcell" style="height:0px;width:35px;"></td><td role="gridcell" style="height:0px;width:70px;display:none;"></td><td role="gridcell" style="height:0px;width:62px;"></td><td role="gridcell" style="height:0px;width:62px;"></td><td role="gridcell" style="height:0px;width:64px;"></td><td role="gridcell" style="height:0px;width:50px;display:none;"></td><td role="gridcell" style="height:0px;width:50px;display:none;"></td><td role="gridcell" style="height:0px;width:50px;display:none;"></td><td role="gridcell" style="height:0px;width:60px;display:none;"></td><td role="gridcell" style="height:0px;width:50px;display:none;"></td><td role="gridcell" style="height:0px;width:60px;display:none;"></td><td role="gridcell" style="height:0px;width:50px;display:none;"></td></tr></tbody></table></div><div class="ui-state-highlight ui-corner-all gridMsg" id="I_TITPREFDivWarning" style="top: 35.5px; left: 377.5px;"><span class="ui-icon ui-icon-info"></span><strong>Attenzione:</strong> <span class="msg">Titoli non presenti</span></div></div></div><div class="ui-jqgrid-resize-mark" id="rs_mI_TITPREF_Table">&nbsp;</div></div>
<ul class="ulGridOptions ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all"><li class="ui-menu-item"><a href="#" class="ui-corner-all">Personalizza</a></li><li class="ui-menu-item"><a href="#" class="ui-corner-all">Esporta in Excel</a></li><li class="ui-menu-item"><a href="#" class="ui-corner-all">Pop-up</a></li><li class="ui-menu-item"><a href="#" class="ui-corner-all">Stampa</a></li><li class="ui-menu-item"><a href="#" class="ui-corner-all">Help</a></li></ul></div>
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
{name:'titolo.denominazione',jsonmap:'titolo.denominazione',label:"Titolo",title:"Descrizione titolo",width:130,align:'Left',classes:'uppercase',formatter:linkFmt,formatoptions:{funzioneJS:'goToPage',urlLink:'/investimenti/dettaglioTitolo.do',isin:'titolo.isin',codMercatoInfo:'titolo.codMercatoInfo',simbolo:'titolo.simbolo'},unformat:linkUnFmt},
{name:'codMercatoInfo',jsonmap:'titolo.codMercatoInfo',push:'N',label:"Piazza",title:"Piazza",width:40,align:'Left',hidden:true,hidedlg:true},
{name:'titolo.descMercato',jsonmap:'titolo.descMercato',push:'N',label:"Mercato",title:"Mercato",width:50,align:'Center'},
{name:'LAST',jsonmap:'titolo.quotazione.last',push:'S',label:"P. di Mercato",title:"Ultimo prezzo disponibile, espresso nella divisa di negoziazione. ",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'VAR_PERC',jsonmap:'titolo.quotazione.variazionePercentuale',push:'S',label:"Var%",title:"Variazione percentuale sull'ultimo prezzo del giorno precedente",width:40,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},classes:'importo',unformat:decimalUnFmt,sorttype:'currency'},
{name:'TRDDIR_CAH',jsonmap:'titolo.quotazione.trend',push:'S',label:"Tr.",title:"Trend",width:20,align:'Center',formatter:trendFmt,sortable:false},
{name:'TIMELAST_STR',jsonmap:'titolo.quotazione.ora',push:'S',label:"Ora",title:"Ora",width:35,align:'Right',formatter:dateFmt,formatoptions:{ltformat:'d/m/Y H:i',srcformat:'d/m/Y H:i',newformat:'H:i'},sorttype:'date'},
{name:'titolo.anagrafica.divisaTrattazione',jsonmap:'titolo.anagrafica.divisaTrattazione',label:"Div.",title:"Divisa Trattazione",width:30,align:'Center'},
{name:'isin',jsonmap:'titolo.isin',push:'N',label:"ISIN",title:"ISIN",width:80,align:'Left'},
{name:'DESC_FASE',jsonmap:'titolo.quotazione.descrizioneFase',push:'S',label:"Fase",title:"Fase",width:70,align:'Left'},
{name:'ritardo',jsonmap:'titolo.quotazione.ritardata',push:'N',label:"Rit.",title:"Ritardata",width:28,align:'Center'},
{name:'QTOT',jsonmap:'titolo.quotazione.quantitaTotale',push:'S',label:"Volumi",title:"Volumi trattati",width:70,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency',hidden:true},
{name:'titolo.quotazione.apertura',jsonmap:'titolo.quotazione.apertura',label:"Apert.",title:"Prezzo di apertura",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'HIGH_1_CAH',jsonmap:'titolo.quotazione.massimoGiorno',push:'S',label:"Max",title:"Massimo del giorno",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'LOW_1_CAH',jsonmap:'titolo.quotazione.minimoGiorno',push:'S',label:"Min",title:"Minimo del giorno",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'idMovimento',jsonmap:'idMovimento',label:"Id Movimento",title:"Id Movimento",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'idPortafoglio',jsonmap:'idPortafoglio',label:"id Portafoglio",title:"id Portafoglio",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'BID_CAH',jsonmap:'titolo.quotazione.bid',push:'S',label:"P. di Acquisto",title:"Prezzo di Acquisto",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency',hidden:true},
{name:'BIDSIZE_CAH',jsonmap:'titolo.quotazione.quantitaBid',push:'S',label:"Q.tà Miglior Acquisto",title:"Quantità miglior offerta in acquisto",width:60,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency',hidden:true},
{name:'ASK_CAH',jsonmap:'titolo.quotazione.ask',push:'S',label:"P. di Vendita",title:"Prezzo di Vendita",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency',hidden:true},
{name:'ASKSIZE_CAH',jsonmap:'titolo.quotazione.quantitaAsk',push:'S',label:"Q.tà Miglior Vendita",title:"Quantità miglior offerta in vendita",width:60,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency',hidden:true},
{name:'titolo.quotazione.prezzoRiferimento',jsonmap:'titolo.quotazione.prezzoRiferimento',label:"Pr. Rif. Prec.",title:"Prezzo di riferimento",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency',hidden:true}
],
opzioniTabella:[
{label:'Personalizza',funcOptions:{funzioneJS:opzioni}},
{label:'Esporta in Excel',funcOptions:{funzioneJS:esportaGrigliaExcel}},
{testDisplay:hidePopUpFunction,label:'Pop-up',funcOptions:{funzioneJS:apriPopupGriglia}},
{label:'Stampa',funcOptions:{funzioneJS:Stampa}},
{testDisplay:hidePopUpFunction,label:'Help',funcOptions:{funzioneJS:helpTabella}}
],
opzioniRiga:[
{label:"Compra Vendi",funcOptions:{funzioneJS:goToPage,urlLink:'/investimenti/compraVendiTitolo.do',isin:'isin',codMercatoInfo:'codMercatoInfo',simbolo:'simbolo'}},
{label:"Dettaglio Titolo",funcOptions:{funzioneJS:goToPage,urlLink:'/investimenti/dettaglioTitolo.do',isin:'isin',codMercatoInfo:'codMercatoInfo',simbolo:'simbolo'}},
{label:"Book 5 livelli",funcOptions:{funzioneJS:openTitoloPopupDaTabellatore,isin:'isin',codMercatoInfo:'codMercatoInfo'}},
{label:"Cancella",funcOptions:{funzioneJS:openAjaxDialog,urlLink:'/investimenti/eliminaSimulato.do',idMovimento:'idMovimento',idRapportoSimulato:'idPortafoglio',denominazione:'titolo.denominazione',title:'Elimina titolo'}},
{label:"Agg. a Portafoglio Simulato",funcOptions:{funzioneJS:openAjaxDialog,urlLink:'/investimenti/titoliPortafoglioSimulatoAggiungi.do',isin:'isin',codMercatoInfo:'codMercatoInfo',denominazione:'denominazione',title:'Aggiungi a Portafoglio Simulato'}}
]
});

		
		
		
			setInterval(titoliSimulatiPush, '6000000');
		
		
	});
	
	function ricaricaSimulati(x){
		
		
		
			ricarica(x);
		
		
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
	
	OpenHelp(getPathContext() + '/help/page.do?id=' + idHelp);

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



	 				</div>	
	 				<div class="toldisclaimer col-xs-12">
						<span>Fonte dati: Borsa Italiana</span>
						
							 &nbsp;<span>Dati in tempo ritardato di 15 minuti</span>
						 
					</div>			
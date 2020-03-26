					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							<fmt:formatdate type="date" value="${now}" pattern="${fmtdate}">	
						</fmt:formatdate></div>
					</div>
	 				<div class="riquadro clearfix"> 				  
						
						
						
						<!-- DettaglioTitoloBody -->








	







	
	<div class="pager clearfix pull-right">
		<div class="circle_line">&nbsp;</div>
		
			
			
			
				
			
				<div class="circle current_page">&nbsp;</div>
			
		
			
			
			
				<div class="circle ">&nbsp;</div>
			
		
			
			
			
				<div class="circle ">&nbsp;</div>
			
		
	</div><div id="tbs" class="pull-right padding10"><span class="titoloMercatiTrattazione"></span></div>






<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag investimenti">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
				
 					<span>Gestione ordine</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>


<div class="section clearfix">
	<!--
	<div id="I_COMPVEN" class="jqGridTOLDiv nosort"><div class="tappo"></div><form id="formTitolo" method="post" action="/WEBHT/investimenti/titoloInPortafoglioJson.do" class="divForm formHeaderGrid">
		<input type="hidden" name="isin" value="IT0005218380">
		<input type="hidden" name="codMercatoInfo" value="MTA">
		<input type="hidden" name="codAreaFinanza" value="">
	</form>
	<div class="ui-jqgrid ui-widget ui-widget-content ui-corner-all" id="gbox_I_COMPVEN_Table" dir="ltr" style="width: 932px;"><div class="loading ui-state-default ui-state-active" id="load_I_COMPVEN_Table" style="display: none;">Caricamento...</div><div class="ui-jqgrid-view" id="gview_I_COMPVEN_Table" style="width: 932px;"><div class="ui-jqgrid-titlebar ui-widget-header ui-corner-top ui-helper-clearfix" style="display: none;"><span class="ui-jqgrid-title">false</span></div><div class="ui-state-default ui-jqgrid-hdiv" style="width: 932px;"><div class="ui-jqgrid-hbox"><table class="ui-jqgrid-htable" style="width:932px" role="grid" aria-labelledby="gbox_I_COMPVEN_Table" cellspacing="0" cellpadding="0" border="0"><thead><tr class="ui-jqgrid-labels" role="rowheader"><th id="I_COMPVEN_Table_datiJqGrid.id" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" title="datiJqGrid.id" style="width: 150px; display: none;"><div id="jqgh_I_COMPVEN_Table_datiJqGrid.id" class="ui-jqgrid-sortable">datiJqGrid.id<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_datiJqGrid.titoloTot" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" title="datiJqGrid.titoloTot" style="width: 150px; display: none;"><div id="jqgh_I_COMPVEN_Table_datiJqGrid.titoloTot" class="ui-jqgrid-sortable">datiJqGrid.titoloTot<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_datiJqGrid.titoloGTot" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" title="datiJqGrid.titoloGTot" style="width: 150px; display: none;"><div id="jqgh_I_COMPVEN_Table_datiJqGrid.titoloGTot" class="ui-jqgrid-sortable">datiJqGrid.titoloGTot<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_denominazione" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oLeft" title="Titolo" style="width: 240px;"><div id="jqgh_I_COMPVEN_Table_denominazione" class="ui-jqgrid-sortable">Titolo<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_anagrafica.divisaTrattazione" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oLeft" title="Divisa" style="width: 36px;"><div id="jqgh_I_COMPVEN_Table_anagrafica.divisaTrattazione" class="ui-jqgrid-sortable">Div.<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_quantita" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Quantit&agrave;" style="width: 53px;"><div id="jqgh_I_COMPVEN_Table_quantita" class="ui-jqgrid-sortable">Q.t&agrave;<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_prezzoMedioSecco" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Prezzo medio carico" style="width: 89px;"><div id="jqgh_I_COMPVEN_Table_prezzoMedioSecco" class="ui-jqgrid-sortable">P.Medio carico<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_descMercato" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" title="Mercato" style="width: 89px;"><div id="jqgh_I_COMPVEN_Table_descMercato" class="ui-jqgrid-sortable">Mercato<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_controvaloreCaricoEuro" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Controvalore di carico" style="width: 107px;"><div id="jqgh_I_COMPVEN_Table_controvaloreCaricoEuro" class="ui-jqgrid-sortable">Valore di carico<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_controvaloreMercatoEuro" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Controvalore di mercato" style="width: 107px;"><div id="jqgh_I_COMPVEN_Table_controvaloreMercatoEuro" class="ui-jqgrid-sortable">Valore di mercato<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_quotazione.variazionePercentuale" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Variazione percentuale sull'ultimo prezzo del giorno precedente" style="width: 71px;"><div id="jqgh_I_COMPVEN_Table_quotazione.variazionePercentuale" class="ui-jqgrid-sortable">Var.%<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_uplEuro" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight last" title="Guadagno o perdita potenziale (Unrealized Profit and " style="width: 140px;"><div id="jqgh_I_COMPVEN_Table_uplEuro" class="ui-jqgrid-sortable">Var. Euro<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_codAreaFinanza" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oLeft" title="Cod. Area Finanza" style="width: 50px; display: none;"><div id="jqgh_I_COMPVEN_Table_codAreaFinanza" class="ui-jqgrid-sortable">Cod. Area Finanza<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_isin" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oLeft" title="isin" style="width: 85px; display: none;"><div id="jqgh_I_COMPVEN_Table_isin" class="ui-jqgrid-sortable">ISIN<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_sottodeposito" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Rubrica" style="width: 25px; display: none;"><div id="jqgh_I_COMPVEN_Table_sottodeposito" class="ui-jqgrid-sortable">Rub<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_uplPerc" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Guadagno o perdita potenziale in % sul valore di carico (Unrealized Profit and Loss)" style="width: 50px; display: none;"><div id="jqgh_I_COMPVEN_Table_uplPerc" class="ui-jqgrid-sortable">Var% Utile/Perdita<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_codMercatoInfo" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oLeft" title="Mercato sul quale si è operato" style="width: 40px; display: none;"><div id="jqgh_I_COMPVEN_Table_codMercatoInfo" class="ui-jqgrid-sortable">Piazza<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_dataPrezzoMercato" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Data Prezzo Ufficiale" style="width: 50px; display: none;"><div id="jqgh_I_COMPVEN_Table_dataPrezzoMercato" class="ui-jqgrid-sortable">Data Pr. Uff.<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_tipoConvertito" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oLeft" title="null" style="width: 50px; display: none;"><div id="jqgh_I_COMPVEN_Table_tipoConvertito" class="ui-jqgrid-sortable">null<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_codiceIsin" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oLeft" title="null" style="width: 50px; display: none;"><div id="jqgh_I_COMPVEN_Table_codiceIsin" class="ui-jqgrid-sortable">null<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_simbolo" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oLeft" title="Codice del titolo" style="width: 51px; display: none;"><div id="jqgh_I_COMPVEN_Table_simbolo" class="ui-jqgrid-sortable">Cod.<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_quotazione.ritardata" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" title="Ritardata" style="width: 28px; display: none;"><div id="jqgh_I_COMPVEN_Table_quotazione.ritardata" class="ui-jqgrid-sortable">Rit.<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_quotazione.descrizioneFase" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oLeft" title="Fase" style="width: 70px; display: none;"><div id="jqgh_I_COMPVEN_Table_quotazione.descrizioneFase" class="ui-jqgrid-sortable">Fase<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_quotazione.trend" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" title="Trend" style="width: 20px; display: none;"><div id="jqgh_I_COMPVEN_Table_quotazione.trend" class="ui-jqgrid-sortable">Tr.<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_quotazione.ora" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" title="Ora" style="width: 60px; display: none;"><div id="jqgh_I_COMPVEN_Table_quotazione.ora" class="ui-jqgrid-sortable">Ora<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_quotazione.volume" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Volumi trattati" style="width: 65px; display: none;"><div id="jqgh_I_COMPVEN_Table_quotazione.volume" class="ui-jqgrid-sortable">Volumi<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_quotazione.apertura" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Prezzo di apertura" style="width: 60px; display: none;"><div id="jqgh_I_COMPVEN_Table_quotazione.apertura" class="ui-jqgrid-sortable">Apert.<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_quotazione.variazionePercApertura" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Variazione percentuale apertura" style="width: 60px; display: none;"><div id="jqgh_I_COMPVEN_Table_quotazione.variazionePercApertura" class="ui-jqgrid-sortable">Var. Perc. Ape.<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_quotazione.prezzoChiusuraPrecedente" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Chiusura Precedente" style="width: 90px; display: none;"><div id="jqgh_I_COMPVEN_Table_quotazione.prezzoChiusuraPrecedente" class="ui-jqgrid-sortable">Chiusura<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_quotazione.massimoGiorno" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Massimo del giorno" style="width: 60px; display: none;"><div id="jqgh_I_COMPVEN_Table_quotazione.massimoGiorno" class="ui-jqgrid-sortable">Max <span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_quotazione.minimoGiorno" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Minimo del giorno" style="width: 60px; display: none;"><div id="jqgh_I_COMPVEN_Table_quotazione.minimoGiorno" class="ui-jqgrid-sortable">Min<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_quotazione.bid" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Prezzo di Acquisto" style="width: 55px; display: none;"><div id="jqgh_I_COMPVEN_Table_quotazione.bid" class="ui-jqgrid-sortable">P. di Acquisto<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_quotazione.quantitaBid" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Quantit&agrave; miglior offerta in acquisto" style="width: 50px; display: none;"><div id="jqgh_I_COMPVEN_Table_quotazione.quantitaBid" class="ui-jqgrid-sortable">Q.t&agrave; Miglior Acquisto<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_quotazione.ask" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Prezzo di Vendita" style="width: 55px; display: none;"><div id="jqgh_I_COMPVEN_Table_quotazione.ask" class="ui-jqgrid-sortable">P. di Vendita<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_quotazione.quantitaAsk" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Quantit&agrave; miglior offerta in vendita" style="width: 50px; display: none;"><div id="jqgh_I_COMPVEN_Table_quotazione.quantitaAsk" class="ui-jqgrid-sortable">Q.t&agrave; Miglior Vendita<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_anagrafica.lottoMinimo" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Lotto minimo" style="width: 55px; display: none;"><div id="jqgh_I_COMPVEN_Table_anagrafica.lottoMinimo" class="ui-jqgrid-sortable">Lotto min<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_quotazione.prezzoUfficiale" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Chiusura ufficiale" style="width: 60px; display: none;"><div id="jqgh_I_COMPVEN_Table_quotazione.prezzoUfficiale" class="ui-jqgrid-sortable">Pr. Uff. Prec.<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_quotazione.prezzoRiferimento" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Prezzo di riferimento" style="width: 60px; display: none;"><div id="jqgh_I_COMPVEN_Table_quotazione.prezzoRiferimento" class="ui-jqgrid-sortable">Pr. Rif. Prec.<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_quotazione.prezzoChiusuraOdierna" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Chiusura Odierna" style="width: 90px; display: none;"><div id="jqgh_I_COMPVEN_Table_quotazione.prezzoChiusuraOdierna" class="ui-jqgrid-sortable">Chius. Odier.<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_quotazione.prezzoRiferimentoOdierno" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Prezzo Riferimento Odierno" style="width: 90px; display: none;"><div id="jqgh_I_COMPVEN_Table_quotazione.prezzoRiferimentoOdierno" class="ui-jqgrid-sortable">Pr. Rif. Odier.<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_COMPVEN_Table_quotazione.prezzoUfficialeOdierno" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oRight" title="Prezzo Ufficiale Odierno" style="width: 90px; display: none;"><div id="jqgh_I_COMPVEN_Table_quotazione.prezzoUfficialeOdierno" class="ui-jqgrid-sortable">Pr. Uff. Odier.<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th></tr></thead></table></div></div><div class="ui-jqgrid-bdiv" style="height: auto; width: 932px;"><div style="position:relative;"><div></div><table id="I_COMPVEN_Table" class="jqGridTOLTable ui-jqgrid-btable" tabindex="1" cellspacing="0" cellpadding="0" border="0" role="grid" aria-multiselectable="false" aria-labelledby="gbox_I_COMPVEN_Table" style="width: 932px;"><tbody><tr class="jqgfirstrow" role="row" style="height:auto"><td role="gridcell" style="height:0px;width:150px;display:none;"></td><td role="gridcell" style="height:0px;width:150px;display:none;"></td><td role="gridcell" style="height:0px;width:150px;display:none;"></td><td role="gridcell" style="height:0px;width:240px;"></td><td role="gridcell" style="height:0px;width:36px;"></td><td role="gridcell" style="height:0px;width:53px;"></td><td role="gridcell" style="height:0px;width:89px;"></td><td role="gridcell" style="height:0px;width:89px;"></td><td role="gridcell" style="height:0px;width:107px;"></td><td role="gridcell" style="height:0px;width:107px;"></td><td role="gridcell" style="height:0px;width:71px;"></td><td role="gridcell" style="height: 0px; width: 140px;"></td><td role="gridcell" style="height:0px;width:50px;display:none;"></td><td role="gridcell" style="height:0px;width:85px;display:none;"></td><td role="gridcell" style="height:0px;width:25px;display:none;"></td><td role="gridcell" style="height:0px;width:50px;display:none;"></td><td role="gridcell" style="height:0px;width:40px;display:none;"></td><td role="gridcell" style="height:0px;width:50px;display:none;"></td><td role="gridcell" style="height:0px;width:50px;display:none;"></td><td role="gridcell" style="height:0px;width:50px;display:none;"></td><td role="gridcell" style="height:0px;width:51px;display:none;"></td><td role="gridcell" style="height:0px;width:28px;display:none;"></td><td role="gridcell" style="height:0px;width:70px;display:none;"></td><td role="gridcell" style="height:0px;width:20px;display:none;"></td><td role="gridcell" style="height:0px;width:60px;display:none;"></td><td role="gridcell" style="height:0px;width:65px;display:none;"></td><td role="gridcell" style="height:0px;width:60px;display:none;"></td><td role="gridcell" style="height:0px;width:60px;display:none;"></td><td role="gridcell" style="height:0px;width:90px;display:none;"></td><td role="gridcell" style="height:0px;width:60px;display:none;"></td><td role="gridcell" style="height:0px;width:60px;display:none;"></td><td role="gridcell" style="height:0px;width:55px;display:none;"></td><td role="gridcell" style="height:0px;width:50px;display:none;"></td><td role="gridcell" style="height:0px;width:55px;display:none;"></td><td role="gridcell" style="height:0px;width:50px;display:none;"></td><td role="gridcell" style="height:0px;width:55px;display:none;"></td><td role="gridcell" style="height:0px;width:60px;display:none;"></td><td role="gridcell" style="height:0px;width:60px;display:none;"></td><td role="gridcell" style="height:0px;width:90px;display:none;"></td><td role="gridcell" style="height:0px;width:90px;display:none;"></td><td role="gridcell" style="height:0px;width:90px;display:none;"></td></tr><tr id="I_COMPVEN_1" tabindex="-1" role="row" class="ui-widget-content jqgrow ui-row-ltr noBorderBottom"><td role="gridcell" style="display:none;" title="I_COMPVEN_1" aria-describedby="I_COMPVEN_Table_datiJqGrid.id">I_COMPVEN_1</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_COMPVEN_Table_datiJqGrid.titoloTot">&nbsp;</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_COMPVEN_Table_datiJqGrid.titoloGTot">&nbsp;</td><td role="gridcell" style="text-align:Left;" class="uppercase" title="BANCO BPM SPA" aria-describedby="I_COMPVEN_Table_denominazione">BANCO BPM SPA</td><td role="gridcell" style="text-align:Left;" title="EUR" aria-describedby="I_COMPVEN_Table_anagrafica.divisaTrattazione">EUR</td><td role="gridcell" style="text-align:Right;" title="431" aria-describedby="I_COMPVEN_Table_quantita">431</td><td role="gridcell" style="text-align:Right;" title="0,0000" aria-describedby="I_COMPVEN_Table_prezzoMedioSecco">0,0000</td><td role="gridcell" style="text-align:Center;" title="MTA" aria-describedby="I_COMPVEN_Table_descMercato">MTA</td><td role="gridcell" style="text-align:Right;" title="0,00" aria-describedby="I_COMPVEN_Table_controvaloreCaricoEuro">0,00</td><td role="gridcell" style="text-align:Right;" title="1.217,14" aria-describedby="I_COMPVEN_Table_controvaloreMercatoEuro">1.217,14</td><td role="gridcell" style="text-align:Right;" class="importo negativo" title="-0,21" aria-describedby="I_COMPVEN_Table_quotazione.variazionePercentuale">-0,21</td><td role="gridcell" style="text-align:Right;" class="importo positivo" title="1.217,144" aria-describedby="I_COMPVEN_Table_uplEuro">1.217,144</td><td role="gridcell" style="text-align:Left;display:none;" title="00005218380" aria-describedby="I_COMPVEN_Table_codAreaFinanza">00005218380</td><td role="gridcell" style="text-align:Left;display:none;" title="IT0005218380" aria-describedby="I_COMPVEN_Table_isin">IT0005218380</td><td role="gridcell" style="text-align:Right;display:none;" title="1" aria-describedby="I_COMPVEN_Table_sottodeposito">1</td><td role="gridcell" style="text-align:Right;display:none;" class="importo positivo" title="0,00" aria-describedby="I_COMPVEN_Table_uplPerc">0,00</td><td role="gridcell" style="text-align:Left;display:none;" title="MTA" aria-describedby="I_COMPVEN_Table_codMercatoInfo">MTA</td><td role="gridcell" style="text-align:Right;display:none;" title="01/01/2017" aria-describedby="I_COMPVEN_Table_dataPrezzoMercato">01/01/2017</td><td role="gridcell" style="text-align:Left;display:none;" title="2" aria-describedby="I_COMPVEN_Table_tipoConvertito">2</td><td role="gridcell" style="text-align:Left;display:none;" title="IT0005218380" aria-describedby="I_COMPVEN_Table_codiceIsin">IT0005218380</td><td role="gridcell" style="text-align:Left;display:none;" title="BAMI" aria-describedby="I_COMPVEN_Table_simbolo">BAMI</td><td role="gridcell" style="text-align:Center;display:none;" title="0" aria-describedby="I_COMPVEN_Table_quotazione.ritardata">0</td><td role="gridcell" style="text-align:Left;display:none;" title="Continuous Trading" aria-describedby="I_COMPVEN_Table_quotazione.descrizioneFase">Continuous Trading</td><td role="gridcell" style="text-align:Center;display:none;" title="" aria-describedby="I_COMPVEN_Table_quotazione.trend"><img alt="" src="/HT/IMAGES/TOL/b_stabile.gif"></td><td role="gridcell" style="text-align:Center;display:none;" title="13:47" aria-describedby="I_COMPVEN_Table_quotazione.ora">13:47</td><td role="gridcell" style="text-align:Right;display:none;" title="n.d." aria-describedby="I_COMPVEN_Table_quotazione.volume">n.d.</td><td role="gridcell" style="text-align:Right;display:none;" title="2,8220" aria-describedby="I_COMPVEN_Table_quotazione.apertura">2,8220</td><td role="gridcell" style="text-align:Right;display:none;" title="0,07" aria-describedby="I_COMPVEN_Table_quotazione.variazionePercApertura">0,07</td><td role="gridcell" style="text-align:Right;display:none;" title="2,8300" aria-describedby="I_COMPVEN_Table_quotazione.prezzoChiusuraPrecedente">2,8300</td><td role="gridcell" style="text-align:Right;display:none;" title="2,8580" aria-describedby="I_COMPVEN_Table_quotazione.massimoGiorno">2,8580</td><td role="gridcell" style="text-align:Right;display:none;" title="2,7820" aria-describedby="I_COMPVEN_Table_quotazione.minimoGiorno">2,7820</td><td role="gridcell" style="text-align:Right;display:none;" title="2,8240" aria-describedby="I_COMPVEN_Table_quotazione.bid">2,8240</td><td role="gridcell" style="text-align:Right;display:none;" title="2.079" aria-describedby="I_COMPVEN_Table_quotazione.quantitaBid">2.079</td><td role="gridcell" style="text-align:Right;display:none;" title="2,8260" aria-describedby="I_COMPVEN_Table_quotazione.ask">2,8260</td><td role="gridcell" style="text-align:Right;display:none;" title="5.200" aria-describedby="I_COMPVEN_Table_quotazione.quantitaAsk">5.200</td><td role="gridcell" style="text-align:Right;display:none;" title="1" aria-describedby="I_COMPVEN_Table_anagrafica.lottoMinimo">1</td><td role="gridcell" style="text-align:Right;display:none;" title="2,8278" aria-describedby="I_COMPVEN_Table_quotazione.prezzoUfficiale">2,8278</td><td role="gridcell" style="text-align:Right;display:none;" title="2,8300" aria-describedby="I_COMPVEN_Table_quotazione.prezzoRiferimento">2,8300</td><td role="gridcell" style="text-align:Right;display:none;" title="0,0000" aria-describedby="I_COMPVEN_Table_quotazione.prezzoChiusuraOdierna">0,0000</td><td role="gridcell" style="text-align:Right;display:none;" title="n.d." aria-describedby="I_COMPVEN_Table_quotazione.prezzoRiferimentoOdierno">n.d.</td><td role="gridcell" style="text-align:Right;display:none;" title="n.d." aria-describedby="I_COMPVEN_Table_quotazione.prezzoUfficialeOdierno">n.d.</td></tr></tbody></table></div></div></div><div class="ui-jqgrid-resize-mark" id="rs_mI_COMPVEN_Table">&nbsp;</div></div>
	
<ul class="ulGridOptions ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all"><li class="ui-menu-item"><a href="#" class="ui-corner-all">Personalizza</a></li></ul></div>
<script>	
$(document).ready(function(){
	startGrid('#I_COMPVEN', { 
url: '../investimenti/titoloInPortafoglioJson.do',
caption:"Quantit&agrave; titolo in portafoglio",
height:'auto',
colModel:[
{name:'datiJqGrid.id',jsonmap:'datiJqGrid.id',key:true, hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloTot',jsonmap:'datiJqGrid.titoloTot', hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloGTot',jsonmap:'datiJqGrid.titoloGTot', hidden:true, hidedlg:true},
{name:'denominazione',jsonmap:'denominazione',label:"Titolo",title:"Titolo",width:135,align:'Left',classes:'uppercase'},
{name:'anagrafica.divisaTrattazione',jsonmap:'anagrafica.divisaTrattazione',label:"Div.",title:"Divisa",width:20,align:'Left'},
{name:'quantita',jsonmap:'quantita',label:"Q.t&agrave;",title:"Quantit&agrave;",width:30,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'prezzoMedioSecco',jsonmap:'prezzoMedioSecco',label:"P.Medio carico",title:"Prezzo medio carico",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'descMercato',jsonmap:'descMercato',label:"Mercato",title:"Mercato",width:50,align:'Center'},
{name:'controvaloreCaricoEuro',jsonmap:'controvaloreCaricoEuro',label:"Valore di carico",title:"Controvalore di carico",width:60,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'controvaloreMercatoEuro',jsonmap:'controvaloreMercatoEuro',label:"Valore di mercato",title:"Controvalore di mercato",width:60,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.variazionePercentuale',jsonmap:'quotazione.variazionePercentuale',label:"Var.%",title:"Variazione percentuale sull'ultimo prezzo del giorno precedente",width:40,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},classes:'importo',unformat:decimalUnFmt,sorttype:'currency'},
{name:'uplEuro',jsonmap:'uplEuro',label:"Var. Euro",title:"Guadagno o perdita potenziale (Unrealized Profit and ",width:80,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D3'},classes:'importo',unformat:decimalUnFmt,sorttype:'currency'},
{name:'codAreaFinanza',jsonmap:'codAreaFinanza',label:"Cod. Area Finanza",title:"Cod. Area Finanza",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'isin',jsonmap:'isin',label:"ISIN",title:"isin",width:85,align:'Left',hidden:true},
{name:'sottodeposito',jsonmap:'sottodeposito',label:"Rub",title:"Rubrica",width:25,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency',hidden:true},
{name:'uplPerc',jsonmap:'uplPerc',label:"Var% Utile/Perdita",title:"Guadagno o perdita potenziale in % sul valore di carico (Unrealized Profit and Loss)",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},classes:'importo',unformat:decimalUnFmt,sorttype:'currency',hidden:true},
{name:'codMercatoInfo',jsonmap:'codMercatoInfo',label:"Piazza",title:"Mercato sul quale si è operato",width:40,align:'Left',hidden:true,hidedlg:true},
{name:'dataPrezzoMercato',jsonmap:'dataPrezzoMercato',label:"Data Pr. Uff.",title:"Data Prezzo Ufficiale",width:50,align:'Right',formatter:'date',formatoptions:{srcformat:'d/m/Y H:i',newformat:'d/m/Y'},sorttype:'date',hidden:true},
{name:'tipoConvertito',jsonmap:'tipoConvertito',label:"null",title:"null",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'codiceIsin',jsonmap:'isin',label:"null",title:"null",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'simbolo',jsonmap:'simbolo',label:"Cod.",title:"Codice del titolo",width:51,align:'Left',hidden:true},
{name:'quotazione.ritardata',jsonmap:'quotazione.ritardata',label:"Rit.",title:"Ritardata",width:28,align:'Center',hidden:true},
{name:'quotazione.descrizioneFase',jsonmap:'quotazione.descrizioneFase',label:"Fase",title:"Fase",width:70,align:'Left',hidden:true},
{name:'quotazione.trend',jsonmap:'quotazione.trend',label:"Tr.",title:"Trend",width:20,align:'Center',formatter:trendFmt,sortable:false,hidden:true},
{name:'quotazione.ora',jsonmap:'quotazione.ora',label:"Ora",title:"Ora",width:60,align:'Center',formatter:'date',formatoptions:{srcformat:'d/m/Y H:i',newformat:'H:i'},sorttype:'date',hidden:true},
{name:'quotazione.volume',jsonmap:'quotazione.volume',label:"Volumi",title:"Volumi trattati",width:65,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency',hidden:true},
{name:'quotazione.apertura',jsonmap:'quotazione.apertura',label:"Apert.",title:"Prezzo di apertura",width:60,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency',hidden:true},
{name:'quotazione.variazionePercApertura',jsonmap:'quotazione.variazionePercApertura',label:"Var. Perc. Ape.",title:"Variazione percentuale apertura",width:60,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},unformat:decimalUnFmt,sorttype:'currency',hidden:true},
{name:'quotazione.prezzoChiusuraPrecedente',jsonmap:'quotazione.prezzoChiusuraPrecedente',label:"Chiusura",title:"Chiusura Precedente",width:90,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency',hidden:true},
{name:'quotazione.massimoGiorno',jsonmap:'quotazione.massimoGiorno',label:"Max ",title:"Massimo del giorno",width:60,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency',hidden:true},
{name:'quotazione.minimoGiorno',jsonmap:'quotazione.minimoGiorno',label:"Min",title:"Minimo del giorno",width:60,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency',hidden:true},
{name:'quotazione.bid',jsonmap:'quotazione.bid',label:"P. di Acquisto",title:"Prezzo di Acquisto",width:55,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency',hidden:true},
{name:'quotazione.quantitaBid',jsonmap:'quotazione.quantitaBid',label:"Q.t&agrave; Miglior Acquisto",title:"Quantit&agrave; miglior offerta in acquisto",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency',hidden:true},
{name:'quotazione.ask',jsonmap:'quotazione.ask',label:"P. di Vendita",title:"Prezzo di Vendita",width:55,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency',hidden:true},
{name:'quotazione.quantitaAsk',jsonmap:'quotazione.quantitaAsk',label:"Q.t&agrave; Miglior Vendita",title:"Quantit&agrave; miglior offerta in vendita",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency',hidden:true},
{name:'anagrafica.lottoMinimo',jsonmap:'anagrafica.lottoMinimo',label:"Lotto min",title:"Lotto minimo",width:55,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency',hidden:true},
{name:'quotazione.prezzoUfficiale',jsonmap:'quotazione.prezzoUfficiale',label:"Pr. Uff. Prec.",title:"Chiusura ufficiale",width:60,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency',hidden:true},
{name:'quotazione.prezzoRiferimento',jsonmap:'quotazione.prezzoRiferimento',label:"Pr. Rif. Prec.",title:"Prezzo di riferimento",width:60,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency',hidden:true},
{name:'quotazione.prezzoChiusuraOdierna',jsonmap:'quotazione.prezzoChiusuraOdierna',label:"Chius. Odier.",title:"Chiusura Odierna",width:90,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency',hidden:true},
{name:'quotazione.prezzoRiferimentoOdierno',jsonmap:'quotazione.prezzoRiferimentoOdierno',label:"Pr. Rif. Odier.",title:"Prezzo Riferimento Odierno",width:90,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency',hidden:true},
{name:'quotazione.prezzoUfficialeOdierno',jsonmap:'quotazione.prezzoUfficialeOdierno',label:"Pr. Uff. Odier.",title:"Prezzo Ufficiale Odierno",width:90,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency',hidden:true}
],
opzioniTabella:[
{label:'Personalizza',funcOptions:{funzioneJS:opzioni}}
],
opzioniRiga:[
]
});

	$('#I_COMPVEN .bottoneFiltro').hide();
	
	refreshDatoPortafoglio();
	});

function refreshDatoPortafoglio(){
		ricaricaGriglia('I_COMPVEN_Table');					
		setTimeout(refreshDatoPortafoglio, 60000);	
	}
</script>-->

	</div>

<div class="divSinistra col-xs-6">
	<div class="section clearfix">
		
		<h3 class="titleSection">








		
			Ordine
		
		
		
		

</h3>
		<span class="context-buttons pull-right clearfix">
		<span class="bottoni_intestazione_tabella" style="margin-top:-22px;">
			<span class="rounded_corner">&nbsp;</span>
			<span class="bottoni" id="bottoniFormCompraVendi"></span>
			
		</span></span>
		<div class="tappo"></div>
		<div id="compraVendiDiv">
			<!-- FormAcquistoVendita.jsp -->








<script type="text/javascript">
	aModBorsa = [
	
		['BEST EXECUTION DINAM','IT BA','Corrente','','Limitato','LIM','Val. per la seduta','DAY','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BEST EXECUTION DINAM','IT BA','Corrente','','Al Meglio','MER','Val. per la seduta','DAY','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BEST EXECUTION DINAM','IT BA','Corrente','','Limitato','LIM','Val. fino a data','GTD','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Limitato','LIM','Val. per la seduta','DAY','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Limitato','LIM','Val. per la seduta','DAY','Esegui e mantieni sul book','','flagPrezzoStop','M'],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Limitato','LIM','Asta Chiusura','ATC','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Limitato','LIM','Asta Apertura','OPG','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Limitato','LIM','Solo in Asta','GFA','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Al Meglio','MER','Val. per la seduta','DAY','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Al Meglio','MER','Asta Chiusura','ATC','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Al Meglio','MER','Asta Apertura','OPG','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Al Meglio','MER','Solo in Asta','GFA','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Al Meglio','MER','Esegui e cancella','IOC','Esegui e mantieni sul book','','flagPrezzoStop','M'],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Al Meglio','MER','Esegui e cancella','IOC','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Al Meglio','MER','Tutto o niente','FOK','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Al Meglio','MER','Tutto o niente','FOK','Esegui e mantieni sul book','','flagPrezzoStop','M'],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Limitato','LIM','Esegui e cancella','IOC','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Limitato','LIM','Esegui e cancella','IOC','Esegui e mantieni sul book','','flagPrezzoStop','M'],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Limitato','LIM','Tutto o niente','FOK','Esegui e mantieni sul book','','flagPrezzoStop','M'],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Limitato','LIM','Tutto o niente','FOK','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Limitato','LIM','Val. fino a data','GTD','Esegui e mantieni sul book','','flagPrezzoStop','M'],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Limitato','LIM','Val. fino a data','GTD','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Asta Plus','MTL','Val. per la seduta','DAY','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Asta Plus','MTL','Asta Chiusura','ATC','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Asta Plus','MTL','Asta Apertura','OPG','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Asta Plus','MTL','Solo in Asta','GFA','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Asta Plus','MTL','Val. fino a data','GTD','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Limitato','LIM','Negoziazione Asta Chiusura','CPX','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Al Meglio','MER','Negoziazione Asta Chiusura','CPX','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BIT EQ MTF TAH','IT HA','Corrente','','Limitato','LIM','Val. per la seduta','DAY','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BIT EQ MTF TAH','IT HA','Corrente','','Limitato','LIM','Val. per la seduta','DAY','Esegui e mantieni sul book','','flagPrezzoStop','M'],
	
		['BIT EQ MTF TAH','IT HA','Corrente','','Limitato','LIM','Solo in Asta','GFA','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BIT EQ MTF TAH','IT HA','Corrente','','Al Meglio','MER','Val. per la seduta','DAY','Esegui e mantieni sul book','','flagPrezzoStop','M'],
	
		['BIT EQ MTF TAH','IT HA','Corrente','','Al Meglio','MER','Val. per la seduta','DAY','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BIT EQ MTF TAH','IT HA','Corrente','','Al Meglio','MER','Solo in Asta','GFA','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BIT EQ MTF TAH','IT HA','Corrente','','Al Meglio','MER','Esegui e cancella','IOC','Esegui e mantieni sul book','','flagPrezzoStop','M'],
	
		['BIT EQ MTF TAH','IT HA','Corrente','','Al Meglio','MER','Esegui e cancella','IOC','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BIT EQ MTF TAH','IT HA','Corrente','','Al Meglio','MER','Tutto o niente','FOK','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BIT EQ MTF TAH','IT HA','Corrente','','Al Meglio','MER','Tutto o niente','FOK','Esegui e mantieni sul book','','flagPrezzoStop','M'],
	
		['BIT EQ MTF TAH','IT HA','Corrente','','Limitato','LIM','Esegui e cancella','IOC','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BIT EQ MTF TAH','IT HA','Corrente','','Limitato','LIM','Esegui e cancella','IOC','Esegui e mantieni sul book','','flagPrezzoStop','M'],
	
		['BIT EQ MTF TAH','IT HA','Corrente','','Limitato','LIM','Tutto o niente','FOK','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BIT EQ MTF TAH','IT HA','Corrente','','Limitato','LIM','Tutto o niente','FOK','Esegui e mantieni sul book','','flagPrezzoStop','M']
	
	];		
	function popolaPrezzo(oldVal) {
		var selPrezzo = $('#formCompraVendi').find('select[name="parPrezzo"]');
		var selMercato = $('#formCompraVendi').find('select[name="parMercatoOper"]');
		var values = new HashMap();
		selPrezzo.children().remove();
		for(i = 0; i<aModBorsa.length; i++){
			if(aModBorsa[i][1] === selMercato.val() && !values.containsKey(aModBorsa[i][5])){
				values.put(aModBorsa[i][5],aModBorsa[i][4]);
				$('<option>'+values.get(aModBorsa[i][5])+'</option>').attr('value', aModBorsa[i][5]).appendTo(selPrezzo);
			}
		}
		var abilitaPrezzoStop = false;
		for(i = 0; i<aModBorsa.length; i++){
			//mercato fa da chiave  
			if(aModBorsa[i][1] === selMercato.val() && aModBorsa[i][11] === 'M'){
				abilitaPrezzoStop = true;
				break;
			}
		}
		if (abilitaPrezzoStop) {
			$('<option>Condizionato al meglio</option>').attr('value', 'MERCOND').appendTo(selPrezzo);
			$('<option>Condizionato limitato</option>').attr('value', 'LIMCOND').appendTo(selPrezzo);
		}
		if(oldVal != null && oldVal !=""){
			selPrezzo.val(oldVal);
		}
	}

	function popolaFase(){
		
				$('#colFase').children().remove();
				$('#colFase').html('<label class="control-label bold">Corrente</label>');
				$('#colFase').append('<input type="hidden" name="parFase" value="" />');
		
	}

	function popolaQtaVendibile(){
		var selIntestatario = $('#formCompraVendi').find('select[name="selSottRubrica"]');
		var quantita = selIntestatario.val().split(',')[1];
		$('#qtaRubrica').text(quantita);
		
		//se la quantit&agrave; vendibile è 0 nascondo il pulsante vendi
		if($('#qtaRubrica').text() == 0)
			$('#vendiButton').hide();
		else
			$('#vendiButton').show();
	}

	function popolaValidita(oldVal){
		var values = new HashMap();
		var selMercato = $('#formCompraVendi').find('select[name="parMercatoOper"]');
		var selTipoOrdine = $('#formCompraVendi').find('select[name="parPrezzo"]');
		var selValidita = $('#formCompraVendi').find('select[name="parTempo"]');
		selValidita.children().remove();
		
		for(i = 0; i<aModBorsa.length; i++){
			var insertOption=false;
			if (selTipoOrdine.val().indexOf('COND')>=0 && aModBorsa[i][11] == 'M' && selTipoOrdine.val().substr(0,selTipoOrdine.val().indexOf('COND')) == aModBorsa[i][5] ) {
				insertOption=true;
			}  
			//mercato e prezzo fanno da chiave e se non è gi&agrave; presente 
			if(aModBorsa[i][1] === selMercato.val() && (aModBorsa[i][5] === selTipoOrdine.val() || insertOption)  && !values.containsKey(aModBorsa[i][7])) {
				values.put(aModBorsa[i][7],aModBorsa[i][6]);
				$('<option>'+values.get(aModBorsa[i][7])+'</option>').attr('value', aModBorsa[i][7]).appendTo(selValidita);
			}
		}
//		conservo valore precedente in caso di reload form su segnalazione errori
		if(oldVal != null && oldVal !="") {
			if ($(selValidita).find("option[value='"+oldVal+"']").length!=0) {
				selValidita.val(oldVal);
			}
		}
	}
	function compraVendi(azione){
			$('#formCompraVendi').find('input[name="ckConf"]').attr('value','N');
			$('#formCompraVendi').find('input[name="parAcq"]').attr('value',azione);
	}
	
	function onOffSpezzature(){
		 var spez = $('#spezzature');
		 var values = new HashMap();
		 var selMercato = $('#formCompraVendi').find('select[name="parMercatoOper"]');
		 var selPrezzo = $('#formCompraVendi').find('select[name="parPrezzo"]');
		 var selValidita = $('#formCompraVendi').find('select[name="parTempo"]');
		 var selQuantita = $('#formCompraVendi').find('select[name="parMod"]');
		 
		 selQuantita.children().remove();//pulisco la combo parametro quantit&agrave;
		 //popolo combo parametro quantit&agrave; in funzione di mercato,prezzo,validit&agrave;
		 for(i = 0; i<aModBorsa.length; i++){
			 if(aModBorsa[i][1] === selMercato.val() && aModBorsa[i][5] === selPrezzo.val() 
			 	&& aModBorsa[i][7] === selValidita.val() && !values.containsKey(aModBorsa[i][9])){
			 	values.put(aModBorsa[i][9],aModBorsa[i][8]);
				$('<option>'+values.get(aModBorsa[i][9])+'</option>').attr('value', aModBorsa[i][9]).appendTo(selQuantita);
			 }
		 }
		 //se nella combo ho almeno un elemento oltre al primo valore vuoto
     	 if (selQuantita.children().length > 1){
     	 	spez.show();
	     }else{
	     	spez.hide();
	     }
	}
	function onOffPrezzoStop(){
		var selPrezzo = $('#formCompraVendi').find('select[name="parPrezzo"]');
		$('#prezzoLimite').attr('readonly',true);
		$('#trPrezzoStop').hide();
		if (selPrezzo.val()=='MER' || selPrezzo.val()=='MTL') {
			$('#prezzoLimite').val("");
			$('#prezzoStop').val("");
		} else {
			if (selPrezzo.val().indexOf('LIM')>=0) {
				$('#prezzoLimite').attr('readonly',false);
			}
			if (selPrezzo.val().indexOf('COND')>=0) {
				$('#trPrezzoStop').show();
				//$('#prezzoStop').attr('readonly',false);
			}
		}
	}
	function onOffData(){
		 var selData = $('#data');
		 var today = '16/05/2017'; 
		 var selValidita = $('#formCompraVendi').find('select[name="parTempo"]');
		 var divAvviso = $('#notaCPX');
		 if (selValidita.val() === 'CPX'){
	     	
	     	divAvviso.show();
	     } else {
	     	
	     	divAvviso.hide();
	     }
     	 if (selValidita.val() === 'GTT' || selValidita.val() === 'GTD' || selValidita.val() === 'VSD' || selValidita.val() === 'OCD'){
     	 	selData.show();
     	 	$('#parData').prop("disabled",false);
     	 	if (today !='') {
	     	 	if(selValidita.val() === 'GTT' || selValidita.val() === 'GTD' || selValidita.val() === 'VSD'){
	     	 		$('#parData option[value="'+today+'"]').remove();
	     	 	}else{
		     	 	if(($('#parData option[value="'+today+'"]').val()) == undefined ){
		     	 	   var opt = $('<option>'+today+'</option>').attr('value', today, 'checked','true');
		     	 	   $('#parData').prepend(opt);
		     	 	}
	     	 	}
     	 	}
	     }else{
	     	$('#parData').prop("disabled",true);	
	     	selData.hide();
	     }
	    
	}
	//se cambio dossier devo reinvocare la action per ripopolare il form
	function reloadFormMercato(codMercatoInfo){
		$('#formCompraVendi').find('input[name="codMercatoInfo"]').val(codMercatoInfo);
		reloadForm();
	}
	function reloadForm(){
		var url = getPathContext()+'/investimenti/compraVendiTitoloForm.do' ;
		var isin = $('#formCompraVendi').find('input[name="isin"]').val();
		var codMercatoInfo = $('#formCompraVendi').find('input[name="codMercatoInfo"]').val();
		var key = $('#formCompraVendi').find('select[name="chiaveDossier"]').val();
		var codAreaFinanza = $('#formCompraVendi').find('input[name="codAreaFinanza"]').val();
		var urlTotale = getPathContext()+'/investimenti/compraVendiTitolo.do';
		goToPage('/investimenti/compraVendiTitolo.do','isin',isin,'codMercatoInfo',codMercatoInfo,'codAreaFinanza',codAreaFinanza,'chiaveDossier',key);
	}
	
	function popolaDossier(){
		
		
			$('#colChiaveDossier').children().remove();
			$('#colChiaveDossier').append('<label class="bold">0004 - 000000583508</label>');
		
	}

	function switchRadio(radio){
		$('#'+radio).prop('checked', true);
	}
	
	//METODO ASCOLTATORE PER PILOTARE LE INTERAZIONI TRA WIDGETS
	function listener(widget){
		if(widget === 'chiaveDossier'){
			reloadForm();
		} else if(widget === 'selSottRubrica'){//intestatario
			popolaQtaVendibile();
		}  else if(widget === 'parMercatoOper'){ //mercato
			popolaPrezzo();
			onOffPrezzoStop();			
			popolaValidita();
			onOffData();
			onOffSpezzature(); 
		} else if(widget === 'parPrezzo') {//Tipo ordine
			onOffPrezzoStop();
			popolaValidita();
			onOffData();
		}  else if(widget === 'parTempo'){//validit&agrave;
			onOffData();
			//onOffOrdiniCondizionati();
		} 
	}
	function titoloMercatiTrattazione() {
		//Gestione mercati Trattazione
		var strMercati="";
		
		$('<div id="tbs" class="pull-right padding10"><span class="titoloMercatiTrattazione">'+strMercati+'</span>').insertAfter('.pager');	
	}

	$(document).ready(function(){
			popolaDossier();
			titoloMercatiTrattazione();
			popolaQtaVendibile();
			popolaPrezzo('LIM');
			popolaValidita('VSC');
			onOffPrezzoStop();
			onOffSpezzature();
			popolaFase();
			onOffData();
			//onOffOrdiniCondizionati();		
	});
	
</script>


<form id="formCompraVendi" method="post" action="/WEBHT/investimenti/compraVendiTitoloEsegui.do" class="form-horizontal">

<div class="divForm bs-example">
<div class="boxContent form-group">

	<input type="hidden" name="parAcq" value="" id="parAcq">
	<input type="hidden" name="ckConf" value="">
	<input type="hidden" name="isin" value="IT0005218380">
	<input type="hidden" name="codMercatoInfo" value="MTA">
	<input type="hidden" name="codAreaFinanza" value="00005218380">
	<input type="hidden" name="orderFrom" value="pagina">
	

	<!-- 			TITOLO -->	
			<div class="row">
				<div class="col-xs-4"><label class="control-label">Titolo</label></div>
				<div class="col-xs-6"><label class="control-label bold">BANCO BPM</label> </div>
			</div>
			<!-- 			DOSSIER -->
		<div class="row">
				<div class="col-xs-4"><label class="control-label" for="chiaveDossier">Dossier</label></div>
				<div class="col-xs-6" id="colChiaveDossier">
				
				<label class="bold">0004 - 000000583508</label></div>
			</div>
			<!-- 			SALDO AL -->
			<div class="row">
				<div class="col-xs-4"><label class="control-label" for="saldo">Saldo Al</label></div>
				<div class="col-xs-6"><select name="saldo" onchange="listener('saldo')" id="saldo" class="form-control"><option value="16/05/2017">16/05/2017   999.999.978.463,70</option>
<option value="17/05/2017">17/05/2017   999.999.978.463,70</option>
<option value="18/05/2017">18/05/2017   999.999.978.463,70</option>
<option value="19/05/2017">19/05/2017   999.999.978.463,70</option>
<option value="22/05/2017">22/05/2017   999.999.978.463,70</option></select>
				</div>
			</div>
			<!-- 			INTESTATARIO-->
			<div class="row">
				<div class="col-xs-4"><label class="control-label" for="selSottRubrica">Intestatario</label></div>
				<div class="col-xs-6"><select name="selSottRubrica" onchange="listener('selSottRubrica')" id="selSottRubrica" class="bigcombo form-control"><option value="0,0">0 -  DAAICGLSAONOCE I GNGUEATSR</option>
<option value="1,431" selected="selected">1 - AN ILUDGATSECCA</option>
<option value="2,0">2 - GSEIROA OGN</option></select>
				</div>
			</div>	
			<!-- 			Q.t&agrave; max indicative -->
			<div class="row">
				<div class="col-xs-4"><label class="control-label">Q.t&agrave; max indicative</label>&nbsp;</div>
				<div class="col-xs-8">
				<label class="control-label">Acquistabile</label>&nbsp;&nbsp;
				<label class="bold">354107641099</label>&nbsp;|&nbsp;
				<label>Vendibile</label>&nbsp;&nbsp;
				<label class="bold"><span id="qtaRubrica">431</span></label></div>
			</div>	
			<!-- 			QUANTITA-->
			<div class="row">
				<div class="col-xs-4"><label class="control-label">Quantit&agrave;</label></div>
				<div class="col-xs-4"><input type="text" name="quantita" size="10" value="" id="quantita" class="form-control">
				
				</div>
					<div class="col-xs-4"><label>
					(Min. tratt.) 1 
			
					</label></div>
			</div>
			<!-- 			MERCATO -->
			<div class="row">
				<div class="col-xs-4"><label class="control-label" for="parMercatoOper">Mercato</label></div> 
				<div class="col-xs-6">
				<select name="parMercatoOper" onchange="listener('parMercatoOper')" id="parMercatoOper" style="text-transform:capitalize;" class="form-control"><option value="IT BA">BEST EXECUTION DINAM</option>
<option value="IT B1">BORSA ITALIANA MTA</option>
<option value="IT HA">BIT EQ MTF TAH</option></select>
				</div>
			</div>
			<!-- 			TIPO ORDINE -->
			<div class="row">
				<div class="col-xs-4"><label class="control-label" for="parTipoOrdine">Tipo ordine</label></div> 
			<div class="col-xs-6">
			<select name="parPrezzo" onchange="listener('parPrezzo')" id="parPrezzo" class="form-control">

<option value="LIM">Limitato</option><option value="MER">Al Meglio</option></select> 
			</div>
			</div>
			<!-- PREZZO LIMITE -->
			<div class="row" id="trPrezzo">
				<div class="col-xs-4"><label class="control-label" for="parPrezzo">Prezzo limite</label></div>
				<div class="col-xs-4"><input type="text" name="prezzoLimite" size="10" value="" id="prezzoLimite" class="form-control"> 
			
				</div>
				<div class="col-xs-4">
					<label>EUR</label></div>
			</div>
			<!-- VALIDITA -->
			<div class="row" id="trPrezzoStop" style="display: none;">
				<div class="col-xs-4"><label class="control-label" for="parStop">Condizione</label></div>
				<div class="col-xs-4"><input type="text" name="prezzoStop" size="10" value="" id="prezzoStop" class="form-control" title="Esponi al raggiungimento">
				</div>
				 <div class="col-xs-4">
				  EUR
				 </div>
			</div>
		
			<div class="row">
				<div class="col-xs-4"><label class="control-label" for="parTempo">Validit&agrave;</label></div>
				<div class="col-xs-6"><select name="parTempo" onchange="listener('parTempo')" id="parTempo" class="form-control">






<option value="DAY">Val. per la seduta</option><option value="GTD">Val. fino a data</option></select> 
				</div>
			</div>
			<div id="data" class="row" style="display:none">
				<div class="col-xs-4"><label class="control-label" for="parData">Data</label></div>
				<div class="col-xs-6">
				<select name="parData" id="parData" class="form-control" disabled=""><option value="16/05/2017">16/05/2017</option>
<option value="17/05/2017">17/05/2017</option>
<option value="18/05/2017">18/05/2017</option>
<option value="19/05/2017">19/05/2017</option>
<option value="22/05/2017">22/05/2017</option>
<option value="23/05/2017">23/05/2017</option>
<option value="24/05/2017">24/05/2017</option>
<option value="25/05/2017">25/05/2017</option>
<option value="26/05/2017">26/05/2017</option>
<option value="29/05/2017">29/05/2017</option>
<option value="30/05/2017">30/05/2017</option>
<option value="31/05/2017">31/05/2017</option>
<option value="01/06/2017">01/06/2017</option>
<option value="02/06/2017">02/06/2017</option>
<option value="05/06/2017">05/06/2017</option>
<option value="06/06/2017">06/06/2017</option>
<option value="07/06/2017">07/06/2017</option>
<option value="08/06/2017">08/06/2017</option>
<option value="09/06/2017">09/06/2017</option>
<option value="12/06/2017">12/06/2017</option>
<option value="13/06/2017">13/06/2017</option></select> 
				</div>
			</div>
			<div id="spezzature" class="row" style="display:none">
				<div class="col-xs-4"><label class="control-label" for="parMod">Parametro Quantit&agrave;</label></div>
				<div class="col-xs-6"><select name="parMod" id="parMod" class="form-control"><option value="">Esegui e mantieni sul book</option></select>
				</div>
			</div>
				<!-- FASE -->
			<div class="row">	
				<div class="col-xs-4"><label class="control-label" for="parFase">Fase</label></div>
				<div class="col-xs-6" id="colFase"><label class="control-label bold">Corrente</label><input type="hidden" name="parFase" value=""></div>
			</div>
		
	
			<!-- Notifica eseguito/ineseguito -->

			<div class="row">
				<div class="col-xs-7"><label>Notifica eseguito/ineseguito</label>								
				</div>
					<div class="col-xs-5">
						<input class="btn button" type="button" value="Imposta Alert" title="Imposta Alert" onclick="openAjaxDialog('/investimenti/allarmiInvestimenti.do', 'chiaveDossier', '007|0004|000000583508', 'title', 'Allarmi Dossier Eseguiti/Ineseguiti', 'width' , 475, 'height', 200)" style="width: 120px">
					</div>
			</div> 
			
				
				
				<div class="row">
					<div class="col-xs-2">
						<label accesskey="notificaSMS">Via SMS</label>
					</div>	
					<div class="col-xs-9">	
						<label class="control-label bold">******8063</label>
					</div>
					<div class="col-xs-1">
						
					</div>
				</div>
				
			<div class="row">
					<div class="col-xs-2">
						<label accesskey="notificaMail">Via email</label>
					</div>	
					<div class="col-xs-9" style="overflow:hidden;">
						<label class="bold" title="tcinsai.dwtaninedigl@
">	
						tcinsai.dwtaninedigl@

						</label>	
						
					</div>
					<div class="col-xs-1">
						
					</div>
				</div>
				
				
					
						<div class="row">
							<div class="col-xs-2">
								<label accesskey="notificaApp">Via App</label>
							</div>	
							<div class="col-xs-9">
								
									
									<label class="bold">Mac mini di TeamMobile</label>
								
									-
									
									<label class="bold">iPhone di Team Mobile</label>
								
									-
									
									<label class="bold">iPhone 4S Lynx PD</label>
								
									-
									
									<label class="bold">Team?s Mac mini</label>
								
									-
									
									<label class="bold">Mac mini di Silvia</label>
								
									-
									
									<label class="bold">iPhone 4S Lynx PD</label>
								
									-
									
									<label class="bold">iPhone di Marco Colussi</label>
								
									-
									
									<label class="bold">iPhone SfondriniG</label>
								
									-
									
									<label class="bold">Mac mini di TeamMobile</label>
								
									-
									
									<label class="bold">Tablet di </label>
									
							</div>
							<div class="col-xs-1">
								<label><img src="/HT/IMAGES/nGrafica/NNFFSpunta.png" class="icon15" title="Spunta" alt="Spunta"> </label>
							</div>
						</div>
					
				
			
	
	</div>
	






	
	<div id="notaCPX" style="display: none">
		
		<p style="color:red;font-weight:bold;">Attenzione</p>
		
		<ul><li>La fase "Negoziazione asta di chiusura" sar&agrave; attivata<br>solo in presenza di un prezzo di asta di chiusura.</li></ul>
    </div>
	<div id="pulsantiCompraVendi" class="oRight row" style="padding: 4px 5px">
			<input id="compraButton" class="btn button" type="submit" value="Compra" title="Compra" onclick="compraVendi('ACQ')">
			<input id="vendiButton" class="btn button" type="submit" value="Vendi" title="Vendi" onclick="compraVendi('VEN')">
	</div>
</div>	
  		
  
</form>
<!-- /FormAcquistoVendita.jsp -->
		<ul class="ulGridOptions ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all"><li class="ui-menu-item"><a href="#" class="ui-corner-all">Pop-up</a></li><li class="ui-menu-item"><a href="#" class="ui-corner-all">Help</a></li></ul></div>
	</div>
</div>
<div class="divDestra col-xs-6">
	<div class="contentInterno">
		<!--datiQuotazioneLighStream.jsp-->






<form id="formDatiQuotazione" method="post" action="/WEBHT/investimenti/datiQuotazioniJson.do">
	<input type="hidden" name="isin" value="IT0005218380" id="quoteIsin">
	<input type="hidden" name="codMercatoInfo" value="MTA" id="quoteCodMercatoInfo">
	<input type="hidden" name="symbol" value="BAMI" id="quoteSymbol">
</form>





	
	

<script>
function helpTabellaDatiQuotazione() {

	
	var idHelp = 0;
	 	
		idHelp = 428;
	
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

<div class="contentInterno section clearfix" id="datiQuotazione">
	
	<h3 class="titleSection">








		
			Dati quotazione
		
		
		
		

</h3>
		
	<span class="context-buttons pull-right clearfix">
		<span class="bottoni_intestazione_tabella" style="margin-top:-22px;">
			<span class="rounded_corner">&nbsp;</span>
			<span class="bottoni" id="bottoniDatiQuotazione"></span>
		</span>
	</span>
	
	<div class="tappo"></div>
		<table id="datiQuot" style="width:100%">
		    <colgroup> 
		      <col width="22%">
		      <col width="28%">		      
		      <col width="25%">  
		      <col width="25%">
		    </colgroup> 
				<tbody>
				<tr>
					<td colspan="4" style="text-align: center; font-size: large;">
						Titolo: BANCO BPM
					</td>
				</tr>
				<tr class="alter">
					<td>
						Q.t&agrave; Miglior Acquisto
					</td> 
					<td>
						P. di Acquisto
					</td>
					<td>
						P. di Vendita
					</td>
					<td>
						Q.t&agrave; Miglior Vendita
					</td>
				</tr>
				<tr class="alter">
					<td><div data-source="lightstreamer" data-grid="quoteTab" data-item="1" data-field="BIDSIZE_CAH" frmtype="D0" class="bkChanged">2.079</div></td> 
					<td><div data-source="lightstreamer" data-grid="quoteTab" data-item="1" data-field="BID_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("2,8240")'>2,8240</a></div></td> 
					<td><div data-source="lightstreamer" data-grid="quoteTab" data-item="1" data-field="ASK_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("2,8260")'>2,8260</a></div></td> 
					<td><div data-source="lightstreamer" data-grid="quoteTab" data-item="1" data-field="ASKSIZE_CAH" frmtype="D0" class="bkChanged">5.200</div></td> 
				</tr>
			
					<tr>
						<td>
							P. di Mercato
						</td> 
						<td>
							Var %
						</td>
						<td>
							Ora
						</td>
						<td>
							ISIN
						</td>
					</tr>
					<tr>
						<td><div data-source="lightstreamer" data-grid="quoteTab" data-item="1" data-field="LAST" frmtype="D4">2,8240</div></td> 
						<td>
							<div data-source="lightstreamer" data-grid="quoteTab" data-item="1" data-field="VAR_PERC" frmtype="D2" style="width: 50%; float: left; text-align: right">-0,21</div>
							<div style="width: 50%; float:left;">							
								<img src="/HT/IMAGES/TOL/b_stabile.gif" id="quoteTabfreccia" style="float: left; padding-left: 6px; padding-top: 2px;">
							</div>
							<div data-source="lightstreamer" data-grid="quoteTab" data-item="1" data-field="TRDDIR_CAH" frmtype="TREND" style="display:none"></div>
						</td>
						<td><div data-source="lightstreamer" data-grid="quoteTab" data-item="1" data-field="TIMELAST" frmtype="H2">13:47</div></td> 
						<td><div id="ISIN">IT0005218380</div> </td>
					</tr>
					<tr>
						<td colspan="2">
							Fase:
						</td>
						<td colspan="2"><div data-source="lightstreamer" data-grid="quoteTab" data-item="1" data-field="DESC_FASE_CAH" frmtype="T">Continuous Trading</div></td>
					</tr>
				</tbody>
		</table>
		
	<ul class="ulGridOptions ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all"><li class="ui-menu-item"><a href="#" class="ui-corner-all">Help</a></li></ul></div>
<script type="text/javascript"><!--
	//start push
	var codMercatoInfo = $('#quoteCodMercatoInfo').val();
	var symbol = $('#quoteSymbol').val();
	//richiedo le quotazioni senza Lightstreamer come primo step
	invocaQuotazioneJson();
	//connessione Lightstreamer
	startStream("https://collpush.intranet.servizi:443", codMercatoInfo,symbol,"quoteTab",true, "KlXybFb8KRO5LDjzLRp5LzczMA%3D%3D");
	
	$(document).ready(function(){
			
		$('#datiQuot_isin').text($('input[name="isin"]').val());
		var spanBottoni = $('#bottoniDatiQuotazione');
		var opzioni = [
			
			{label:'Help',funcOptions:{funzioneJS: helpTabellaDatiQuotazione}}
			
		];
		
			creaMenuStrumenti('#datiQuotazione', opzioni, spanBottoni, 'Strumenti');
		

	});

	function apriPopupDatiQuotazione() {
		//alert('/investimenti/dettaglioTitoloPopup.do?isin=IT0005218380&codMercatoInfo=MTA')
		//openPopUp('/investimenti/dettaglioTitoloPopup.do?isin=IT0005218380&codMercatoInfo=MTA','Dettaglio Titolo IT0005218380','400','800','0','yes')
		openPopupDaTabellatore('/investimenti/dettaglioTitoloPopup.do','isin','IT0005218380','codMercatoInfo','MTA');
	}
	
	//richiedo le quotazioni senza Lightstreamer come primo step
	function invocaQuotazioneJson(){
		var url = $('#formDatiQuotazione').attr('action');
		var isin = $('input[name="isin"]').val();
		var codMercatoInfo = $('input[name="codMercatoInfo"]').val();
		var symbol = $('input[name="symbol"]').val();
		//invocazione json
		$.getJSON(url, { isin: isin, codMercatoInfo: codMercatoInfo, symbol: symbol}, 
			function(json) {
				settaQuote($('div [data-field="BIDSIZE_CAH"]'),json,'quantitaBid');
				settaQuote($('div [data-field="BID_CAH"]'),json,'bid');
				settaQuote($('div [data-field="ASK_CAH"]'),json,'ask');
				settaQuote($('div [data-field="ASKSIZE_CAH"]'),json,'quantitaAsk');
				settaQuote($('div [data-field="TRDTIM_MIN_CAH"]'),json,'oraMinimo');
				settaQuote($('div [data-field="LOW_1_CAH"]'),json,'minimoGiorno');
				settaQuote($('div [data-field="HIGH_1_CAH"]'),json,'massimoGiorno');
				settaQuote($('div [data-field="TRDTIM_MAX_CAH"]'),json,'oraMassimo');
				settaQuote($('div [data-field="OPEN_PRC"]'),json,'apertura');
				settaQuote($('div [data-field="VAR_PERC_APERTURA"]'),json,'variazionePercApertura');
				settaQuote($('div [data-field="QTOT"]'),json,'quantitaTotale');
				settaQuote($('div [data-field="CONTROVALORE"]'),json,'controvalore');
				settaQuote($('div [data-field="LAST"]'),json,'last');
				settaQuote($('div [data-field="VAR_PERC"]'),json,'variazionePercentuale');
				settaQuote($('div [data-field="TIMELAST"]'),json,'ora');
				$('#ISIN').text(isin);
				settaQuote($('div [data-field="DESC_FASE_CAH"]'),json,'descrizioneFase');
				trendFmtPush(json['trend']);
			});
	}
	
	function settaQuote(elem, json, quotaName){
		var value = json[quotaName]; 
		if(value != null){
			//formattazione ore
			if(quotaName === 'ora'){
				value = $.fmatter.util.DateFormat('d/m/Y H:i', value, 'H:i', $.jgrid.formatter.date)
			}
			if(quotaName === 'oraMinimo' || quotaName === 'oraMassimo'){
				value = $.fmatter.util.DateFormat('d/m/Y H:i', value, 'H:i', $.jgrid.formatter.date)
			}
			//formattazione quantit&agrave;
			if(quotaName === 'quantitaAsk' || quotaName === 'quantitaBid' ||  quotaName === 'volume'){
				value = numberFormat(value,0);
			}
			//formattazione prezzi
			if(quotaName === 'ask' || quotaName === 'bid' || quotaName === 'last' || quotaName === 'minimoGiorno' || quotaName === 'massimoGiorno' || quotaName === 'apertura'){
				value = numberFormat(value,4);
			}
			if(quotaName === 'controvalore'  || quotaName === 'quantitaTotale'){
				value = numberFormat(value,0);
			}
			if(quotaName === 'variazionePercApertura'  || quotaName === 'variazionePercentuale'){
				value = numberFormat(value,2);
			}
			if(quotaName=='note' && value==''){
			  value='n.d.'
			}
			elem.text(value);		
		}else{
			elem.text('n.d');
		}
	}

--></script>	
<!-- FINE datiQuotazione.jsp-->


	</div>
	
	<div class="contentInterno section clearfix">	
		
		<h3 class="titleSection">








		
			Book
		
		
		
		

</h3>
		
		<span class="context-buttons pull-right clearfix">
		<span class="bottoni_intestazione_tabella" style="margin-top:-22px;">
			<span class="rounded_corner">&nbsp;</span>
			<span class="bottoni" id="bottoniBook"></span>
		</span></span>
		<!-- BookLightStream.jsp -->




<form id="formBook" method="post" action="/WEBHT/investimenti/bookJson.do">
	<input type="hidden" name="isin" value="IT0005218380">
	<input type="hidden" name="codMercatoInfo" value="MTA">
	<input type="hidden" name="symbol" value="BAMI">
</form>
<div class="contentInterno">



<div class="tappo"></div>
	<div id="divBook">
	<table cellspacing="0" cellpadding="0">
	<colgroup>
		<col width="9%">
		<col width="20%">
		<col width="19%">
		<col width="2%">
		<col width="19%">
		<col width="20%">
		<col width="9%">
		<col width="2%">
	</colgroup>
	<thead>
		<tr>
			<th colspan="3">Proposte in acquisto</th>
			<th></th>
			<th colspan="3">Proposte in vendita</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="bkSottotitolo">N.prop.</td>
			<td class="bkSottotitolo">Q.t&agrave;</td>
			<td class="bkSottotitolo">Prezzo</td>
			<td class="bkSottotitolo">&nbsp;</td>
			<td class="bkSottotitolo">Prezzo</td>
			<td class="bkSottotitolo">Q.t&agrave;</td>
			<td class="bkSottotitolo">N.prop.</td>
			<td class="bkSottotitolo">&nbsp;</td>
		</tr>
		
		<tr class="odd">
			<td style="background-color: white"></td>
			<td class="bkBestOffer"><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BIDSIZE_CAH" frmtype="D0" class="bkChanged">2.079</div></td>
			
				
					<td class="bkBestOffer">
						<a href="javascript:doSettaLimitePush('BID_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BID_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("2,8240")'>2,8240</a></div>
						</a>
					</td>
					<td class="bkBestOffer"></td>
					<td class="bkBestOffer">
						<a href="javascript:doSettaLimitePush('ASK_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="ASK_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("2,8260")'>2,8260</a></div>
						</a>
					</td>
				
				
			
			<td class="bkBestOffer"><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="ASKSIZE_CAH" frmtype="D0" class="bkChanged">5.200</div></td>
			<td style="background-color: white"></td>
			<td style="background-color: white">&nbsp;</td>
		</tr>
		
		<tr class="even">
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROACQ_1_CAH" frmtype="T" class="bkChanged">5</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BSIZ1_CAH" frmtype="D0" class="bkChanged">6.743</div></td>
			
				
					<td>
						<a href="javascript:doSettaLimitePush('BEST_BID1_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BID1_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("2,8240")'>2,8240</a></div>
						</a>
					</td>
					<td></td>
					<td>
						<a href="javascript:doSettaLimitePush('BEST_ASK1_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASK1_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("2,8260")'>2,8260</a></div>
						</a>
					</td>
				
				
			
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASIZ1_CAH" frmtype="D0" class="bkChanged">23.585</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROVEN_1_CAH" frmtype="T" class="bkChanged">5</div></td>
		</tr>
		<tr class="odd">
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROACQ_2_CAH" frmtype="T" class="bkChanged">17</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BSIZ2_CAH" frmtype="D0" class="bkChanged">47.369</div></td>
			
				
					<td>
						<a href="javascript:doSettaLimitePush('BEST_BID2_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BID2_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("2,8220")'>2,8220</a></div>
						</a>
					</td>
					<td></td>
					<td>
						<a href="javascript:doSettaLimitePush('BEST_ASK2_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASK2_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("2,8280")'>2,8280</a></div>
						</a>
					</td>
				
				
			
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASIZ2_CAH" frmtype="D0" class="bkChanged">24.239</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROVEN_2_CAH" frmtype="T" class="bkChanged">10</div></td>
		</tr>
		<tr class="even">
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROACQ_3_CAH" frmtype="T" class="bkChanged">21</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BSIZ3_CAH" frmtype="D0" class="bkChanged">72.435</div></td>
			
				
					<td>
						<a href="javascript:doSettaLimitePush('BEST_BID3_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BID3_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("2,8200")'>2,8200</a></div>
						</a>
					</td>
					<td></td>
					<td>
						<a href="javascript:doSettaLimitePush('BEST_ASK3_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASK3_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("2,8300")'>2,8300</a></div>
						</a>
					</td>
				
				
			
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASIZ3_CAH" frmtype="D0" class="bkChanged">17.647</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROVEN_3_CAH" frmtype="T" class="bkChanged">9</div></td>
		</tr>
		<tr class="odd">
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROACQ_4_CAH" frmtype="T" class="bkChanged">12</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BSIZ4_CAH" frmtype="D0" class="bkChanged">53.874</div></td>
			
				
					<td>
						<a href="javascript:doSettaLimitePush('BEST_BID4_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BID4_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("2,8180")'>2,8180</a></div>
						</a>
					</td>
					<td></td>
					<td>
						<a href="javascript:doSettaLimitePush('BEST_ASK4_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASK4_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("2,8320")'>2,8320</a></div>
						</a>
					</td>
				
				
			
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASIZ4_CAH" frmtype="D0" class="bkChanged">40.400</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROVEN_4_CAH" frmtype="T" class="bkChanged">13</div></td>
		</tr>
		<tr class="even">
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROACQ_5_CAH" frmtype="T" class="bkChanged">10</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BSIZ5_CAH" frmtype="D0" class="bkChanged">32.952</div></td>
			
				
					<td>
						<a href="javascript:doSettaLimitePush('BEST_BID5_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BID5_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("2,8160")'>2,8160</a></div>
						</a>
					</td>
					<td></td>
					<td>
						<a href="javascript:doSettaLimitePush('BEST_ASK5_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASK5_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("2,8340")'>2,8340</a></div>
						</a>
					</td>
				
				
			
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASIZ5_CAH" frmtype="D0" class="bkChanged">37.363</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROVEN_5_CAH" frmtype="T" class="bkChanged">10</div></td>
		</tr>
		
		</tbody>
	</table>
	<ul class="ulGridOptions ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all"><li class="ui-menu-item"><a href="#" class="ui-corner-all">Pop-up</a></li><li class="ui-menu-item"><a href="#" class="ui-corner-all">Help</a></li></ul></div></div>
<script type="text/javascript"><!--
	var url = $('#formBook').attr('action');
	var isin = $('#formBook').find('input[name="isin"]').val();
	var codMercatoInfo = $('#formBook').find('input[name="codMercatoInfo"]').val();
	var symbol = $('#formBook').find('input[name="symbol"]').val();
	
	
	
	//chiamata LibInvestimenti per recuperare dati iniziali
	$.getJSON(url, { isin: isin, codMercatoInfo: codMercatoInfo, symbol:symbol}, 
			function(json) {
			if(json['error'] != 'true' && json['warning'] != 'true'){
					var righe = json['righe'];
					var den;
					var let;
					for(i = 0; i<righe.length; i++){
						den = righe[i]['denaro'];
						let = righe[i]['lettera'];
						setAndChange($('div [data-field="NPROACQ_'+(i+1)+'_CAH"]'),den.ordini);
						setAndChange($('div [data-field="BEST_BSIZ'+(i+1)+'_CAH"]'),den.quantita);
						setAndChange($('div [data-field="BEST_BID'+(i+1)+'_CAH"]'),den.prezzo,true);
						setAndChange($('div [data-field="BEST_ASK'+(i+1)+'_CAH"]'),let.prezzo,true);
						setAndChange($('div [data-field="BEST_ASIZ'+(i+1)+'_CAH"]'),let.quantita);
						setAndChange($('div [data-field="NPROVEN_'+(i+1)+'_CAH"]'),let.ordini);
					}
					var best = json['miglioreOfferta'];
					if(best != null ){
						setAndChange($('div [data-field="BIDSIZE_CAH"]'),best['denaro'].quantita);
						setAndChange($('div [data-field="BID_CAH"]'),best['denaro'].prezzo,true);
						setAndChange($('div [data-field="ASK_CAH"]'),best['lettera'].prezzo,true);
						setAndChange($('div [data-field="ASKSIZE_CAH"]'),best['lettera'].quantita);
					}
				}
			});
			
	function setAndChange(elem, val, prz){
		val = formatCell(elem.attr('frmType'),val);
 		if(elem.data('oldval') != val) {
			elem.addClass('bkChanged');
		}
		if(prz != null && prz == true){
			
				
					var a = $('<a></a>').attr('href', 'javascript:doSettaLimitePush("'+val+'")');
					a.text(val);
					elem.html(a);
				
				
			
		}else
			elem.text(val);
			
		elem.data('oldval',val);
	}

	//connessione Lightstreamer			
	startStream("https://collpush.intranet.servizi:443", codMercatoInfo,symbol,"bookTab",true, "KlXybFb8KRO5LDjzLRp5LzczMA%3D%3D");


--></script>

	</div>
	
	<div class="contentInterno section clearfix">
		
		<h3 class="titleSection">








		
			Grafico
		
		
		
		

</h3>
			<br>
		





  
  
<script type="text/javascript">
		
		function aggiornaGrafici(symbol, duration, timeFrame, cache){
			var CHART_SERVER_URL =  '/WEBHT/investimenti/graficoJson.do';		   
		    var params = new Array();
		   // params.redir_host = CHART_SERVER_URL;
		    params.out = 'js';
		    params.s = symbol;
		    params.d = duration;
		    params.tf = timeFrame;
		    params.st = 'line';
		    params.stjs ='line';
		    //params.pc = '258025';//verde
		    params.pc = '003d6e';
		    params.l ='top';
		    params.ng = 1;
		    params.dl = 0;
		    params.cache = cache;
		    /* params - FINE*/
		    
			var graphicParam = new Array();
			graphicParam.navigator = 'false';
			graphicParam.line = '1';
			graphicParam.highlight = '1'			
			graphicParam.gridLine = 'true';
			graphicParam.border = 'false';
			graphicParam.yAx = 'true';
			graphicParam.xAx = 'true';
			graphicParam.decimalLabelY = '2';
			graphicParam.singleHeight='180';
			graphicParam.gridXLine = 'true';
			graphicParam.yNoDataMsg = '-100';
					   
		   CHART_SERVER.chartRequest(CHART_SERVER_URL, params, graphicParam, 'iChartA', { 
			  	 onAfterChartRendered: function(chart){
            		
			   			precedente = 2.8300;	
						try{
				   			range = chart.yAxis[0].getExtremes();
				   			//include la linea orizzontale del prz.precedente nel grafico
							if(precedente > range.max){		
								delta = ((precedente-range.min)/100)*5;					
								chart.yAxis[0].setExtremes(range.min,precedente+delta); //più 5% del range 
							} else if(precedente < range.min){
								delta = ((range.max-precedente)/100)*5;
								chart.yAxis[0].setExtremes(precedente-delta,range.max);//meno 5% del range
							}
							//disegna la linea del prz. precedente
				            chart.yAxis[0].addPlotLine({
											            color: "red",
											            width: 1,
											            dashStyle:'dash',
											            value: precedente,
											            zIndex: 1000
				          								});
						}catch(err){
							//console.log(err.message);
						}  

			          
			          $('.linkGrafico').each(function(x){
		        		if ($(this).attr('id')==duration)
		        			$(this).css('font-weight','bold');
		        		else
		        			$(this).css('font-weight','normal');	
		        		});

           		}
		   });
		}

	
		
		
			aggiornaGrafici('MTA.BAMI','1D','1m','S');
		
	
</script><div style="margin-left:10px">
	 
		<a class="linkGrafico" id="1D" href="javascript:aggiornaGrafici('MTA.BAMI','1D','1m','S')" style="font-weight: bold;">Intraday</a>&nbsp;
	
	
	<a class="linkGrafico" id="1M" href="javascript:aggiornaGrafici('MTA.BAMI','1M','1D','S')" style="font-weight: normal;">Storico 1m</a>&nbsp;
	<a class="linkGrafico" id="3M" href="javascript:aggiornaGrafici('MTA.BAMI','3M','1D','S')" style="font-weight: normal;">Storico 3m</a>&nbsp;
	<a class="linkGrafico" id="1Y" href="javascript:aggiornaGrafici('MTA.BAMI','1Y','1D','S')" style="font-weight: normal;">Storico 1anno</a>&nbsp;
	<a class="linkGrafico" id="5Y" href="javascript:aggiornaGrafici('MTA.BAMI','5Y','1D','S')" style="font-weight: normal;">Storico 5anni</a>&nbsp;
	</div>
<div id="iChartA" style="overflow:hidden;width:100%;height:220px;margin-top:8px;" data-highcharts-chart="0"><div class="highcharts-container" id="highcharts-0" style="position: relative; overflow: hidden; width: 452px; height: 220px; text-align: left; line-height: normal; z-index: 0; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif; font-size: 12px;"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="452" height="220"><defs><clipPath id="highcharts-1"><rect fill="none" x="0" y="0" width="406" height="180"></rect></clipPath></defs><rect rx="5" ry="5" fill="#FFFFFF" x="0" y="0" width="452" height="220" stroke-width="0.000001"></rect><rect rx="0" ry="0" fill="#FFFFFF" x="36" y="10" width="406" height="180" stroke-width="0.000001"></rect><g class="highcharts-grid" zIndex="1"><path fill="none" d="M 203.5 10 L 203.5 190" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 288.5 10 L 288.5 190" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 373.5 10 L 373.5 190" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 117.5 10 L 117.5 190" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path></g><g class="highcharts-grid" zIndex="1"><path fill="none" d="M 36 130.5 L 442 130.5" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 36 70.5 L 442 70.5" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 36 10.5 L 442 10.5" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 36 190.5 L 442 190.5" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path></g><g class="highcharts-axis" zIndex="2"><path fill="none" d="M 203.5 190 L 203.5 195" stroke="#C0D0E0" stroke-width="1"></path><path fill="none" d="M 288.5 190 L 288.5 195" stroke="#C0D0E0" stroke-width="1"></path><path fill="none" d="M 373.5 190 L 373.5 195" stroke="#C0D0E0" stroke-width="1"></path><path fill="none" d="M 117.5 190 L 117.5 195" stroke="#C0D0E0" stroke-width="1"></path><path fill="none" d="M 36 190.5 L 442 190.5" stroke="#C0D0E0" stroke-width="1" zIndex="7" visibility="visible"></path></g><g class="highcharts-axis" zIndex="2"><path fill="none" d="M 35.5 10 L 35.5 190" stroke="#C0D0E0" stroke-width="1" zIndex="7" visibility="visible"></path></g><g class="highcharts-series-group" zIndex="3"><g class="highcharts-series" visibility="visible" zIndex="0.1" transform="translate(36,10)" clip-path="url(#highcharts-1)"><path fill="none" d="M 0 96 L 1.4195804195804196 96 L 2.839160839160839 91.2 L 4.258741258741259 91.2 L 5.678321678321678 103.2 L 7.097902097902098 100.8 L 8.517482517482518 100.8 L 9.937062937062937 108 L 11.356643356643357 108 L 12.776223776223777 105.6 L 14.195804195804197 110.4 L 15.615384615384615 108 L 17.034965034965037 108 L 18.454545454545453 110.4 L 19.874125874125873 112.8 L 21.293706293706293 110.4 L 22.713286713286713 108 L 24.132867132867133 112.8 L 25.552447552447553 110.4 L 26.972027972027973 122.4 L 28.391608391608393 134.4 L 29.81118881118881 129.6 L 31.23076923076923 124.8 L 32.65034965034965 120 L 34.069930069930074 122.4 L 35.48951048951049 124.8 L 36.90909090909091 124.8 L 38.32867132867133 122.4 L 39.74825174825175 127.2 L 41.16783216783217 129.6 L 42.58741258741259 129.6 L 44.00699300699301 132 L 45.42657342657343 132 L 46.84615384615385 127.2 L 48.26573426573427 127.2 L 49.68531468531469 122.4 L 51.10489510489511 122.4 L 52.52447552447553 127.2 L 53.94405594405595 122.4 L 55.36363636363637 127.2 L 56.78321678321679 127.2 L 58.2027972027972 134.4 L 59.62237762237762 132 L 61.04195804195804 132 L 62.46153846153846 134.4 L 63.88111888111888 129.6 L 65.3006993006993 136.8 L 66.72027972027972 120 L 68.13986013986015 122.4 L 69.55944055944056 124.8 L 70.97902097902097 122.4 L 72.3986013986014 117.6 L 73.81818181818181 117.6 L 75.23776223776224 112.8 L 76.65734265734265 115.2 L 78.07692307692308 108 L 79.4965034965035 108 L 80.91608391608392 110.4 L 82.33566433566433 110.4 L 83.75524475524476 110.4 L 85.17482517482517 112.8 L 86.5944055944056 110.4 L 88.01398601398601 110.4 L 89.43356643356644 110.4 L 90.85314685314685 110.4 L 92.27272727272727 105.6 L 93.6923076923077 108 L 95.1118881118881 108 L 96.53146853146853 108 L 97.95104895104895 105.6 L 99.37062937062937 105.6 L 100.79020979020979 108 L 102.20979020979021 108 L 103.62937062937063 108 L 105.04895104895105 108 L 106.46853146853147 105.6 L 107.8881118881119 108 L 109.3076923076923 108 L 110.72727272727273 108 L 112.14685314685315 110.4 L 113.56643356643357 105.6 L 114.98601398601399 105.6 L 116.4055944055944 100.8 L 117.82517482517483 103.2 L 119.24475524475524 103.2 L 120.66433566433567 100.8 L 122.08391608391608 93.6 L 123.5034965034965 93.6 L 124.92307692307692 93.6 L 126.34265734265735 93.6 L 127.76223776223776 98.4 L 129.1818181818182 96 L 130.6013986013986 98.4 L 132.020979020979 91.2 L 133.44055944055944 96 L 134.86013986013987 96 L 136.2797202797203 96 L 137.6993006993007 98.4 L 139.11888111888112 100.8 L 140.53846153846155 98.4 L 141.95804195804195 98.4 L 143.37762237762237 93.6 L 144.7972027972028 96 L 146.21678321678323 98.4 L 147.63636363636363 98.4 L 149.05594405594405 96 L 150.47552447552448 98.4 L 151.8951048951049 96 L 153.3146853146853 98.4 L 154.73426573426573 96 L 156.15384615384616 93.6 L 157.5734265734266 96 L 158.993006993007 96 L 160.4125874125874 96 L 161.83216783216784 96 L 163.25174825174824 96 L 164.67132867132867 96 L 166.0909090909091 93.6 L 167.51048951048952 93.6 L 168.93006993006992 91.2 L 170.34965034965035 93.6 L 171.76923076923077 91.2 L 173.1888111888112 91.2 L 174.6083916083916 91.2 L 176.02797202797203 91.2 L 177.44755244755245 88.8 L 178.86713286713288 72 L 180.28671328671328 76.8 L 181.7062937062937 76.8 L 183.12587412587413 74.4 L 184.54545454545453 72 L 185.96503496503496 72 L 187.3846153846154 72 L 188.8041958041958 72 L 190.2237762237762 72 L 191.64335664335664 72 L 193.06293706293707 64.8 L 194.4825174825175 64.8 L 195.9020979020979 50.4 L 197.32167832167832 60 L 198.74125874125875 62.4 L 200.16083916083917 55.2 L 201.58041958041957 52.8 L 203 55.2 L 204.41958041958043 57.6 L 205.83916083916085 55.2 L 207.25874125874125 57.6 L 208.67832167832168 55.2 L 210.0979020979021 55.2 L 211.5174825174825 60 L 212.93706293706293 60 L 214.35664335664336 60 L 215.7762237762238 62.4 L 217.1958041958042 67.2 L 218.6153846153846 67.2 L 220.03496503496504 69.6 L 221.45454545454547 69.6 L 222.87412587412587 72 L 224.2937062937063 74.4 L 225.71328671328672 74.4 L 227.13286713286715 76.8 L 228.55244755244755 79.2 L 229.97202797202797 81.6 L 231.3916083916084 81.6 L 232.8111888111888 67.2 L 234.23076923076923 72 L 235.65034965034965 72 L 237.06993006993008 76.8 L 238.48951048951048 79.2 L 239.9090909090909 76.8 L 241.32867132867133 79.2 L 242.74825174825176 79.2 L 244.16783216783216 74.4 L 245.5874125874126 74.4 L 247.006993006993 81.6 L 248.42657342657344 81.6 L 249.84615384615384 81.6 L 251.26573426573427 81.6 L 252.6853146853147 74.4 L 254.1048951048951 74.4 L 255.52447552447552 74.4 L 256.94405594405595 74.4 L 258.3636363636364 76.8 L 259.7832167832168 79.2 L 261.2027972027972 76.8 L 262.6223776223776 76.8 L 264.041958041958 74.4 L 265.46153846153845 72 L 266.8811188811189 72 L 268.3006993006993 74.4 L 269.72027972027973 74.4 L 271.13986013986016 74.4 L 272.5594405594406 76.8 L 273.97902097902096 74.4 L 275.3986013986014 74.4 L 276.8181818181818 74.4 L 278.23776223776224 74.4 L 279.65734265734267 74.4 L 281.0769230769231 74.4 L 282.4965034965035 69.6 L 283.9160839160839 69.6 L 285.3356643356643 67.2 L 286.75524475524475 67.2 L 288.1748251748252 72 L 289.5944055944056 74.4 L 291.013986013986 69.6 L 292.43356643356645 74.4 L 293.8531468531469 76.8 L 295.27272727272725 76.8 L 296.6923076923077 76.8 L 298.1118881118881 76.8 L 299.53146853146853 79.2 L 300.95104895104896 76.8 L 302.3706293706294 79.2 L 303.7902097902098 79.2 L 305.2097902097902 79.2 L 306.6293706293706 79.2 L 308.04895104895104 81.6 L 309.46853146853147 81.6 L 310.8881118881119 81.6 L 312.3076923076923 81.6 L 313.72727272727275 81.6 L 315.1468531468532 81.6 L 316.56643356643355 81.6 L 317.986013986014 81.6 L 319.4055944055944 86.4 L 320.8251748251748 86.4 L 322.24475524475525 86.4 L 323.6643356643357 86.4 L 325.0839160839161 84 L 326.5034965034965 84 L 327.9230769230769 84 L 329.34265734265733 86.4 L 330.76223776223776 86.4 L 332.1818181818182 86.4 L 333.6013986013986 86.4 L 335.02097902097904 81.6 L 336.44055944055947 81.6 L 337.86013986013984 84 L 339.27972027972027 84 L 340.6993006993007 84 L 342.1188811188811 86.4 L 343.53846153846155 86.4 L 344.958041958042 84 L 346.3776223776224 84 L 347.7972027972028 86.4 L 349.2167832167832 86.4 L 350.6363636363636 86.4 L 352.05594405594405 86.4 L 353.4755244755245 88.8 L 354.8951048951049 88.8 L 356.31468531468533 88.8 L 357.73426573426576 88.8 L 359.15384615384613 88.8 L 360.57342657342656 88.8 L 361.993006993007 91.2 L 363.4125874125874 91.2 L 364.83216783216784 91.2 L 366.25174825174827 88.8 L 367.6713286713287 88.8 L 369.09090909090907 88.8 L 370.5104895104895 88.8 L 371.9300699300699 88.8 L 373.34965034965035 88.8 L 374.7692307692308 88.8 L 376.1888111888112 88.8 L 377.6083916083916 88.8 L 379.02797202797206 88.8 L 380.4475524475524 88.8 L 381.86713286713285 86.4 L 383.2867132867133 88.8 L 384.7062937062937 86.4 L 386.12587412587413 88.8 L 387.54545454545456 88.8 L 388.965034965035 88.8 L 390.38461538461536 88.8 L 391.8041958041958 88.8 L 393.2237762237762 88.8 L 394.64335664335664 88.8 L 396.06293706293707 93.6 L 397.4825174825175 91.2 L 398.9020979020979 91.2 L 400.32167832167835 88.8 L 401.7412587412587 88.8 L 403.16083916083915 88.8 L 404.5804195804196 86.4 L 406 91.2" stroke="#003d6e" stroke-width="1" zIndex="1"></path></g><g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(36,10)" clip-path="none"></g></g><g class="highcharts-axis-labels" zIndex="7"><text x="118.33566433566433" y="204" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="middle"><tspan x="118.33566433566433">10:00</tspan></text><text x="0" y="-9999" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="middle"><tspan x="0">11:00</tspan></text><text x="288.68531468531467" y="204" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="middle"><tspan x="288.68531468531467">12:00</tspan></text><text x="0" y="-9999" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="middle"><tspan x="0">13:00</tspan></text></g><g class="highcharts-axis-labels" zIndex="7"><text x="34" y="188" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;width:183px;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="end"><tspan x="34">2,75</tspan></text><text x="34" y="128.00000000000017" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;width:183px;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="end"><tspan x="34">2,80</tspan></text><text x="34" y="67.99999999999983" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;width:183px;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="end"><tspan x="34">2,85</tspan></text><text x="34" y="8" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;width:183px;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="end"><tspan x="34">2,90</tspan></text></g><g class="highcharts-tooltip" zIndex="8" style="padding:0;white-space:nowrap;" visibility="hidden"><rect rx="5" ry="5" fill="none" x="0" y="0" width="10" height="10" stroke-width="5" fill-opacity="0.85" isShadow="true" stroke="black" stroke-opacity="0.049999999999999996" transform="translate(1, 1)"></rect><rect rx="5" ry="5" fill="none" x="0" y="0" width="10" height="10" stroke-width="3" fill-opacity="0.85" isShadow="true" stroke="black" stroke-opacity="0.09999999999999999" transform="translate(1, 1)"></rect><rect rx="5" ry="5" fill="none" x="0" y="0" width="10" height="10" stroke-width="1" fill-opacity="0.85" isShadow="true" stroke="black" stroke-opacity="0.15" transform="translate(1, 1)"></rect><rect rx="5" ry="5" fill="rgb(255,255,255)" x="0" y="0" width="10" height="10" stroke-width="2" fill-opacity="0.85"></rect><text x="5" y="18" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:12px;color:#333333;fill:#333333;" zIndex="1"></text></g><g class="highcharts-tracker" zIndex="9"><g visibility="visible" zIndex="1" transform="translate(36,10)" clip-path="url(#highcharts-1)"><path fill="none" d="M -10 96 L 0 96 L 1.4195804195804196 96 L 2.839160839160839 91.2 L 4.258741258741259 91.2 L 5.678321678321678 103.2 L 7.097902097902098 100.8 L 8.517482517482518 100.8 L 9.937062937062937 108 L 11.356643356643357 108 L 12.776223776223777 105.6 L 14.195804195804197 110.4 L 15.615384615384615 108 L 17.034965034965037 108 L 18.454545454545453 110.4 L 19.874125874125873 112.8 L 21.293706293706293 110.4 L 22.713286713286713 108 L 24.132867132867133 112.8 L 25.552447552447553 110.4 L 26.972027972027973 122.4 L 28.391608391608393 134.4 L 29.81118881118881 129.6 L 31.23076923076923 124.8 L 32.65034965034965 120 L 34.069930069930074 122.4 L 35.48951048951049 124.8 L 36.90909090909091 124.8 L 38.32867132867133 122.4 L 39.74825174825175 127.2 L 41.16783216783217 129.6 L 42.58741258741259 129.6 L 44.00699300699301 132 L 45.42657342657343 132 L 46.84615384615385 127.2 L 48.26573426573427 127.2 L 49.68531468531469 122.4 L 51.10489510489511 122.4 L 52.52447552447553 127.2 L 53.94405594405595 122.4 L 55.36363636363637 127.2 L 56.78321678321679 127.2 L 58.2027972027972 134.4 L 59.62237762237762 132 L 61.04195804195804 132 L 62.46153846153846 134.4 L 63.88111888111888 129.6 L 65.3006993006993 136.8 L 66.72027972027972 120 L 68.13986013986015 122.4 L 69.55944055944056 124.8 L 70.97902097902097 122.4 L 72.3986013986014 117.6 L 73.81818181818181 117.6 L 75.23776223776224 112.8 L 76.65734265734265 115.2 L 78.07692307692308 108 L 79.4965034965035 108 L 80.91608391608392 110.4 L 82.33566433566433 110.4 L 83.75524475524476 110.4 L 85.17482517482517 112.8 L 86.5944055944056 110.4 L 88.01398601398601 110.4 L 89.43356643356644 110.4 L 90.85314685314685 110.4 L 92.27272727272727 105.6 L 93.6923076923077 108 L 95.1118881118881 108 L 96.53146853146853 108 L 97.95104895104895 105.6 L 99.37062937062937 105.6 L 100.79020979020979 108 L 102.20979020979021 108 L 103.62937062937063 108 L 105.04895104895105 108 L 106.46853146853147 105.6 L 107.8881118881119 108 L 109.3076923076923 108 L 110.72727272727273 108 L 112.14685314685315 110.4 L 113.56643356643357 105.6 L 114.98601398601399 105.6 L 116.4055944055944 100.8 L 117.82517482517483 103.2 L 119.24475524475524 103.2 L 120.66433566433567 100.8 L 122.08391608391608 93.6 L 123.5034965034965 93.6 L 124.92307692307692 93.6 L 126.34265734265735 93.6 L 127.76223776223776 98.4 L 129.1818181818182 96 L 130.6013986013986 98.4 L 132.020979020979 91.2 L 133.44055944055944 96 L 134.86013986013987 96 L 136.2797202797203 96 L 137.6993006993007 98.4 L 139.11888111888112 100.8 L 140.53846153846155 98.4 L 141.95804195804195 98.4 L 143.37762237762237 93.6 L 144.7972027972028 96 L 146.21678321678323 98.4 L 147.63636363636363 98.4 L 149.05594405594405 96 L 150.47552447552448 98.4 L 151.8951048951049 96 L 153.3146853146853 98.4 L 154.73426573426573 96 L 156.15384615384616 93.6 L 157.5734265734266 96 L 158.993006993007 96 L 160.4125874125874 96 L 161.83216783216784 96 L 163.25174825174824 96 L 164.67132867132867 96 L 166.0909090909091 93.6 L 167.51048951048952 93.6 L 168.93006993006992 91.2 L 170.34965034965035 93.6 L 171.76923076923077 91.2 L 173.1888111888112 91.2 L 174.6083916083916 91.2 L 176.02797202797203 91.2 L 177.44755244755245 88.8 L 178.86713286713288 72 L 180.28671328671328 76.8 L 181.7062937062937 76.8 L 183.12587412587413 74.4 L 184.54545454545453 72 L 185.96503496503496 72 L 187.3846153846154 72 L 188.8041958041958 72 L 190.2237762237762 72 L 191.64335664335664 72 L 193.06293706293707 64.8 L 194.4825174825175 64.8 L 195.9020979020979 50.4 L 197.32167832167832 60 L 198.74125874125875 62.4 L 200.16083916083917 55.2 L 201.58041958041957 52.8 L 203 55.2 L 204.41958041958043 57.6 L 205.83916083916085 55.2 L 207.25874125874125 57.6 L 208.67832167832168 55.2 L 210.0979020979021 55.2 L 211.5174825174825 60 L 212.93706293706293 60 L 214.35664335664336 60 L 215.7762237762238 62.4 L 217.1958041958042 67.2 L 218.6153846153846 67.2 L 220.03496503496504 69.6 L 221.45454545454547 69.6 L 222.87412587412587 72 L 224.2937062937063 74.4 L 225.71328671328672 74.4 L 227.13286713286715 76.8 L 228.55244755244755 79.2 L 229.97202797202797 81.6 L 231.3916083916084 81.6 L 232.8111888111888 67.2 L 234.23076923076923 72 L 235.65034965034965 72 L 237.06993006993008 76.8 L 238.48951048951048 79.2 L 239.9090909090909 76.8 L 241.32867132867133 79.2 L 242.74825174825176 79.2 L 244.16783216783216 74.4 L 245.5874125874126 74.4 L 247.006993006993 81.6 L 248.42657342657344 81.6 L 249.84615384615384 81.6 L 251.26573426573427 81.6 L 252.6853146853147 74.4 L 254.1048951048951 74.4 L 255.52447552447552 74.4 L 256.94405594405595 74.4 L 258.3636363636364 76.8 L 259.7832167832168 79.2 L 261.2027972027972 76.8 L 262.6223776223776 76.8 L 264.041958041958 74.4 L 265.46153846153845 72 L 266.8811188811189 72 L 268.3006993006993 74.4 L 269.72027972027973 74.4 L 271.13986013986016 74.4 L 272.5594405594406 76.8 L 273.97902097902096 74.4 L 275.3986013986014 74.4 L 276.8181818181818 74.4 L 278.23776223776224 74.4 L 279.65734265734267 74.4 L 281.0769230769231 74.4 L 282.4965034965035 69.6 L 283.9160839160839 69.6 L 285.3356643356643 67.2 L 286.75524475524475 67.2 L 288.1748251748252 72 L 289.5944055944056 74.4 L 291.013986013986 69.6 L 292.43356643356645 74.4 L 293.8531468531469 76.8 L 295.27272727272725 76.8 L 296.6923076923077 76.8 L 298.1118881118881 76.8 L 299.53146853146853 79.2 L 300.95104895104896 76.8 L 302.3706293706294 79.2 L 303.7902097902098 79.2 L 305.2097902097902 79.2 L 306.6293706293706 79.2 L 308.04895104895104 81.6 L 309.46853146853147 81.6 L 310.8881118881119 81.6 L 312.3076923076923 81.6 L 313.72727272727275 81.6 L 315.1468531468532 81.6 L 316.56643356643355 81.6 L 317.986013986014 81.6 L 319.4055944055944 86.4 L 320.8251748251748 86.4 L 322.24475524475525 86.4 L 323.6643356643357 86.4 L 325.0839160839161 84 L 326.5034965034965 84 L 327.9230769230769 84 L 329.34265734265733 86.4 L 330.76223776223776 86.4 L 332.1818181818182 86.4 L 333.6013986013986 86.4 L 335.02097902097904 81.6 L 336.44055944055947 81.6 L 337.86013986013984 84 L 339.27972027972027 84 L 340.6993006993007 84 L 342.1188811188811 86.4 L 343.53846153846155 86.4 L 344.958041958042 84 L 346.3776223776224 84 L 347.7972027972028 86.4 L 349.2167832167832 86.4 L 350.6363636363636 86.4 L 352.05594405594405 86.4 L 353.4755244755245 88.8 L 354.8951048951049 88.8 L 356.31468531468533 88.8 L 357.73426573426576 88.8 L 359.15384615384613 88.8 L 360.57342657342656 88.8 L 361.993006993007 91.2 L 363.4125874125874 91.2 L 364.83216783216784 91.2 L 366.25174825174827 88.8 L 367.6713286713287 88.8 L 369.09090909090907 88.8 L 370.5104895104895 88.8 L 371.9300699300699 88.8 L 373.34965034965035 88.8 L 374.7692307692308 88.8 L 376.1888111888112 88.8 L 377.6083916083916 88.8 L 379.02797202797206 88.8 L 380.4475524475524 88.8 L 381.86713286713285 86.4 L 383.2867132867133 88.8 L 384.7062937062937 86.4 L 386.12587412587413 88.8 L 387.54545454545456 88.8 L 388.965034965035 88.8 L 390.38461538461536 88.8 L 391.8041958041958 88.8 L 393.2237762237762 88.8 L 394.64335664335664 88.8 L 396.06293706293707 93.6 L 397.4825174825175 91.2 L 398.9020979020979 91.2 L 400.32167832167835 88.8 L 401.7412587412587 88.8 L 403.16083916083915 88.8 L 404.5804195804196 86.4 L 406 91.2 L 416 91.2" isTracker="true" stroke-linejoin="round" visibility="visible" stroke-opacity="0.0001" stroke="rgb(192,192,192)" stroke-width="21" style=""></path></g></g><path fill="none" d="M 36 94.5 L 442 94.5" stroke="red" stroke-width="1" stroke-dasharray="4,3" zIndex="1000"></path></svg></div></div>





	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
	
		//tendina opzioni compra vendi
		var spanBottoni = $('#bottoniFormCompraVendi');
		var opzioni = [
			{label:'Pop-up',funcOptions:{funzioneJS: apriPopupCompraVendi}},
			{label:'Help',funcOptions:{funzioneJS: helpTabellaCompraVendi}}
		];
		creaMenuStrumenti('#compraVendiDiv', opzioni, spanBottoni, 'Strumenti');
			
		//tendina opzioni book
		spanBottoni = $('#bottoniBook');
		opzioni = [
			{label:'Pop-up',funcOptions:{funzioneJS: apriPopupBook}},
			{label:'Help',funcOptions:{funzioneJS: helpTabellaBook}}
		];
		creaMenuStrumenti('#divBook', opzioni, spanBottoni, 'Strumenti');
	});
	function apriPopupCompraVendi() {
		openTitoloPopupDaCompravendi('IT0005218380','MTA');
	}
		
	function apriPopupBook() {
		var url = getPathContext() + '/investimenti/bookForm.do?mostraMercatiTrattazione=true&isin=IT0005218380&codMercatoInfo=MTA';
		window.open(url, 'IT0005218380', 'width=400,height=220,toolbar=0,status=0,menubar=0,scrollbars=0');
	}
</script>



<script>
function helpTabellaCompraVendi() {

	
	var idHelp = 0;
	 	
		idHelp = 870;
	
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




	
	

<script>
function helpTabellaBook() {

	
	var idHelp = 0;
	 	
		idHelp = 414;
	
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
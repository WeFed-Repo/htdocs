	<table class="larghezzaEsterna old-container" cellspacing="0" cellpadding="0" border="0" align="center" height="100%">
		<tbody><tr>
			<td valign="top">
				<title>Pagamento Utenze</title>
				
					<div style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;" onmouseover="parent.tm_middle.clearTimeOut();" onmouseout="parent.tm_middle.layerTimeOut('menu1','onmouseoutDalLayer')" id="menu1"></div>
<div style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;" onmouseover="parent.tm_middle.clearTimeOut();" onmouseout="parent.tm_middle.layerTimeOut('menu2','onmouseoutDalLayer');" id="menu2"></div><form name="form1" method="post" action="./pagamentoUtenze.aspx" id="form1">
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwULLTE2ODI0MTIyNDdkZNca5/i9zTPHyktUmVQzGY5m3Im04vxdOWzRCPoEehgW">
</div>

<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="BD4A8C48">
</div>
					    <div class="container"><div class="old-pageContent new-riquadro">
						<table height="100%" class="larghezzaEsterna" cellspacing="0" cellpadding="0" border="0" align="center">
							<tbody><tr valign="top">
								<td>
									
									<table cellspacing="0" cellpadding="0" border="0" align="center" width="100%">
										
										<tbody><tr>
											<td width="100%" colspan="3" class="right">
												<table class="sfondoTabelle old-table table" cellspacing="0" cellpadding="0" border="0">
													<tbody><tr>
														<td>
															<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
																<tbody><tr class="titoloTabella">
																	
                                                                    <td>
                                                                        <table cellspacing="0" cellpadding="0" border="0">
																            <tbody><tr>
                                                                                <td height="20" class="old-pageTitle page-title"><div class="new-flag"></div><h1>
																	                &nbsp;Utenze
                                                                                </h1></td>
                                                                                <td>
                                                                                    &nbsp;<a class="testoRedSmallBold old-fieldHelp " href="#" onclick="goTMHelp('pagamentoUtenze.aspx','0','19')"><img src="/resources/YouBiz/images/i_help.png" border="0" width="20" height="20"></a>   
																                </td>
																            </tr>
																        </tbody></table>
                                                                    </td>
                                                                    
																</tr>
																<tr>
																	<td height="1" style="height: 5px;">
																		</td>
																</tr>
																<!--SEZIONE ORDINANTE-->
																<tr height="20" class="old-sectionTitle old-section section clearfix" style="padding-left: 0px;"><h3 class="new-titleSection">
																	
																		&nbsp;Dati Ordinante
																</h3></tr>
																<tr>
																	<td height="1" class="old-section section clearfix" style="height: 15px;">
																		</td>
																</tr>
																<tr>
																	<td class="old-section section clearfix">
																		
    <table border="0" class="interno_1">
        <tbody><tr class="">
            
            <td class="testoBlackSmall" nowrap="">
                <span class="testoRedSmallBold">*</span>&nbsp;Ordinante:
                
            </td>
            
            <td style="text-align: left" class="testoBlackSmall">
                
                
                <select style="width:350px" onchange="writeSia(this);GetVal(this);" name="cboAzienda" class="new-form-control">
                    
                    <option value="">seleziona...</option>
                    
                <option value="265302">CONDOMINIO ACLI</option><option value="276843">CONDOMINIO AMENDOLA 2</option><option value="265303">CONDOMINIO BRAMBILLA</option><option value="268164">CONDOMINIO C.A. CRESPI RAPP.TO</option><option value="276838">CONDOMINIO CASA A1</option><option value="275905">CONDOMINIO DELLA COSTA PRIMO</option><option value="265312">CONDOMINIO DON ATTILIO CRESPI </option><option value="276839">CONDOMINIO EDILCOOP DUE CASA A</option><option value="265307">CONDOMINIO ELIANA C RAPPRESENT</option><option value="265308">CONDOMINIO ELIANA D RAPPRESENT</option><option value="265313">CONDOMINIO I GIARDINI RAPPRESE</option><option value="300872">CONDOMINIO IL GELSO</option><option value="265315">CONDOMINIO LA MONTAGNETTA C/O </option><option value="274223">CONDOMINIO LE BETULLE</option><option value="274222">CONDOMINIO MADONNINA</option><option value="274224">CONDOMINIO NIGRITELLA</option><option value="274225">CONDOMINIO PIROVANO</option><option value="265310">CONDOMINIO RESIDENZA DEI TIGLI</option><option value="276841">CONDOMINIO ROCCA 11</option><option value="274227">CONDOMINIO S.ALESSANDRO</option><option value="274226">CONDOMINIO S.MARCO</option><option value="276835">CONDOMINIO SAN GIOVANNI</option><option value="276844">CONDOMINIO VIA BIFFI 1/3</option><option value="265306">CONDOMINIO VIA MARCONI 20 RAPP</option><option value="265316">CONDOMINIO VILLA PALENI RAPPRE</option><option value="265305">CONDOMINIO"DELLA COSTA II"</option><option value="265304">CONDOMINIO"LA TORRE" C/O STUDI</option><option value="276840">CONDOMINIO"PALAZZO MORO"</option><option value="265314">RESIDENCE EMILIA RAPPRESENTATO</option><option value="457876">STUDIO SCARPELLINI SNC DI SCAR</option></select>
            </td>
            
            
	        <td style="width:280px;padding-left:250px;" class="testoBlackSmall">
		        Sia:
	        </td>
	        <td><input type="text" size="10" readonly="" name="txtSia" class="new-form-control"></td>
		                
        </tr>
        <tr class="">
        
            <td class="testoBlackSmall">
                <span class="testoRedSmallBold">*</span>&nbsp;Banca:
                
            </td>
            
            <td style="text-align: left" class="testoBlackSmall">
                
                <select style="width:350px" onchange="writeAbi(this);GetVal(this)" name="cboBanca" class="new-form-control">
                    
                    <option value="">seleziona...</option>
                    
                </select>
            </td>
            
                        
        </tr>
        <tr class="">     
        
            <td class="testoBlackSmall">
                <span class="testoRedSmallBold">*</span>&nbsp;Conto:
                
            </td>
            
            <td style="text-align: left" class="testoBlackSmall">
                
                <select style="width:350px" name="cboConto" onchange="GetVal(this)" class="new-form-control">
                    
                    <option value="">seleziona...</option>
                    
                </select>
            </td>
            <td style="text-align: right" colspan="2">
            
            </td>
        </tr>
        
        
    </tbody></table>
    
    <script language="javascript" type="text/javascript">
        var myForm=eval('document.form1');    
        var intestatario = new Array();
        var rapporto = new Array();
        var banca = new Array();
    
		function writeSia(combo){
		    
		        myForm.txtSia.value=intestatario[combo.selectedIndex].codAzienda;
		    
			refreshBanca(combo);
		}
        
		function writeAbi(combo){
			refreshConto(combo);
		}
		
		function GetVal(obj)
		{
		    ImpoDateStatoAzzFiltri(true);
                    
            
		}

        function doAfterLoaded(alsoFixed){

        var runNow = true;
        

        if(runNow)
        {
	        // valore di default del combo nel caso in cui sia selezionata la option 'seleziona..'
	        intestatario[0]=new infoIntestatario('','');
	        i = 1;
	        
	        //carico tutte le aziende
	        
                intestatario[i] = new infoIntestatario('CONDOMINIO ACLI','BI9GP',265302);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].idAzienda, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO AMENDOLA 2','AE0RN',276843);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].idAzienda, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO BRAMBILLA','BI9GQ',265303);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].idAzienda, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO C.A. CRESPI RAPP.TO','BJMHB',268164);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].idAzienda, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO CASA A1','AD770',276838);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].idAzienda, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO DELLA COSTA PRIMO','806V1',275905);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].idAzienda, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO DON ATTILIO CRESPI ','A135N',265312);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].idAzienda, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO EDILCOOP DUE CASA A','ABTR5',276839);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].idAzienda, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO ELIANA C RAPPRESENT','AZL2Y',265307);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].idAzienda, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO ELIANA D RAPPRESENT','AZL23',265308);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].idAzienda, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO I GIARDINI RAPPRESE','%BACT',265313);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].idAzienda, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO IL GELSO','AIRZR',300872);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].idAzienda, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO LA MONTAGNETTA C/O ','AZL3A',265315);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].idAzienda, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO LE BETULLE','BJ08I',274223);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].idAzienda, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO MADONNINA','BJ08H',274222);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].idAzienda, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO NIGRITELLA','BJ08J',274224);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].idAzienda, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO PIROVANO','BJ08Q',274225);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].idAzienda, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO RESIDENZA DEI TIGLI','AZ630',265310);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].idAzienda, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO ROCCA 11','ACRGY',276841);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].idAzienda, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO S.ALESSANDRO','BJ08S',274227);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].idAzienda, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO S.MARCO','BJ08R',274226);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].idAzienda, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO SAN GIOVANNI','A5CDA',276835);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].idAzienda, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO VIA BIFFI 1/3','A5QT5',276844);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].idAzienda, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO VIA MARCONI 20 RAPP','BI9GY',265306);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].idAzienda, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO VILLA PALENI RAPPRE','%BACW',265316);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].idAzienda, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO"DELLA COSTA II"','2L890',265305);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].idAzienda, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO"LA TORRE" C/O STUDI','BISYC',265304);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].idAzienda, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO"PALAZZO MORO"','AXN28',276840);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].idAzienda, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('RESIDENCE EMILIA RAPPRESENTATO','AXN6D',265314);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].idAzienda, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('STUDIO SCARPELLINI SNC DI SCAR','0571W',457876);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].idAzienda, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
            
            //Riposiziono se unico rag sociale il valore di partenza senza "seleziona.."
            if (myForm.cboAzienda.options.length==2){
               myForm.cboAzienda.selectedIndex=1;
               writeSia(myForm.cboAzienda);
               refreshBanca(myForm.cboAzienda);
               //david 
               GetVal(myForm.cboAzienda);
            }

	        

            //Riposiziono se unica banca il valore di partenza senza "seleziona.."
            /*if (myForm.cboBanca.options.length==2){
                myForm.cboBanca.selectedIndex=1;
                refreshConto(myForm.cboBanca);
            }*/
           

	        
            
            //Riposiziono se unico conto il valore di partenza senza "seleziona.."
            /*if (myForm.cboConto.options.length==2){
                myForm.cboConto.selectedIndex=1;
            }*/
            
	      
                           setValueCombo(myForm.numRows,'50');
                          
            DefaultnumRowsSelect();
            }
        }
        
        function DefaultnumRowsSelect()
        {
            
        }

		function infoIntestatario(ragione_sociale,cod_azienda,idAzienda)
		{
			this.ragioneSociale = ragione_sociale;
			this.codAzienda = cod_azienda;
			this.idAzienda=idAzienda;
		}

		function infoBanca(nome,abi)
		{
			this.nome = nome;
			this.abi = abi;
		}
		
		function infoRapporto(descrizione,idrapporto)
		{
			this.dsRapporto = descrizione;
			this.idRapporto = idrapporto;
		}
		
		function clearCombo(combo){
			var itemsNum = combo.length;
			for (i = itemsNum; i > 0 ; i--){
				combo.options[i] = null;
			}
			combo.selectedIndex=0;
		}

		function setValueCombo(combo,valore)
		{
		    if(combo != null)
		    {
		        for (i = 0; i < combo.length ; i++){
			    if (combo.options[i].value == valore){
				        combo.selectedIndex=i;
				        break;
				    }
    				    
			    }    
		    }
		}
        
		function refreshBanca(combo){
			comboToClear = myForm.cboBanca;
			clearCombo(comboToClear);
			otherComboToClear = myForm.cboConto;
			clearCombo(otherComboToClear);
			
			// valore di default del combo nel caso in cui sia selezionata la option 'seleziona..'
			banca[0]=new infoBanca('','');
			b = 1;
			
			var idAzSel = combo.options[combo.selectedIndex].value;	
			
    		
    		//alert('cambio azienda:' + 'strAbiOld: ' + '');
    		
                
                //controllo l'azienda selezionata
                //alert('azienda:'+idAzSel+'--banca:'+'05034' + 'strAbiOld:' + '');
                if (idAzSel == '265302' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034');
					            var bName = new Option(banca[b].nome, banca[b].abi, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                
                
                //controllo l'azienda selezionata
                //alert('azienda:'+idAzSel+'--banca:'+'05034' + 'strAbiOld:' + '05034');
                if (idAzSel == '276843' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034');
					            var bName = new Option(banca[b].nome, banca[b].abi, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                
                
                //controllo l'azienda selezionata
                //alert('azienda:'+idAzSel+'--banca:'+'05034' + 'strAbiOld:' + '05034');
                if (idAzSel == '265303' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034');
					            var bName = new Option(banca[b].nome, banca[b].abi, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                
                
                //controllo l'azienda selezionata
                //alert('azienda:'+idAzSel+'--banca:'+'05034' + 'strAbiOld:' + '05034');
                if (idAzSel == '268164' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034');
					            var bName = new Option(banca[b].nome, banca[b].abi, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                
                
                //controllo l'azienda selezionata
                //alert('azienda:'+idAzSel+'--banca:'+'05034' + 'strAbiOld:' + '05034');
                if (idAzSel == '276838' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034');
					            var bName = new Option(banca[b].nome, banca[b].abi, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                
                
                //controllo l'azienda selezionata
                //alert('azienda:'+idAzSel+'--banca:'+'05034' + 'strAbiOld:' + '05034');
                if (idAzSel == '275905' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034');
					            var bName = new Option(banca[b].nome, banca[b].abi, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                
                
                //controllo l'azienda selezionata
                //alert('azienda:'+idAzSel+'--banca:'+'05034' + 'strAbiOld:' + '05034');
                if (idAzSel == '265312' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034');
					            var bName = new Option(banca[b].nome, banca[b].abi, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                
                
                //controllo l'azienda selezionata
                //alert('azienda:'+idAzSel+'--banca:'+'05034' + 'strAbiOld:' + '05034');
                if (idAzSel == '276839' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034');
					            var bName = new Option(banca[b].nome, banca[b].abi, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                
                
                //controllo l'azienda selezionata
                //alert('azienda:'+idAzSel+'--banca:'+'05034' + 'strAbiOld:' + '05034');
                if (idAzSel == '265307' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034');
					            var bName = new Option(banca[b].nome, banca[b].abi, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                
                
                //controllo l'azienda selezionata
                //alert('azienda:'+idAzSel+'--banca:'+'05034' + 'strAbiOld:' + '05034');
                if (idAzSel == '265308' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034');
					            var bName = new Option(banca[b].nome, banca[b].abi, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                
                
                //controllo l'azienda selezionata
                //alert('azienda:'+idAzSel+'--banca:'+'05034' + 'strAbiOld:' + '05034');
                if (idAzSel == '265313' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034');
					            var bName = new Option(banca[b].nome, banca[b].abi, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                
                
                //controllo l'azienda selezionata
                //alert('azienda:'+idAzSel+'--banca:'+'05034' + 'strAbiOld:' + '05034');
                if (idAzSel == '300872' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034');
					            var bName = new Option(banca[b].nome, banca[b].abi, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                
                
                //controllo l'azienda selezionata
                //alert('azienda:'+idAzSel+'--banca:'+'05034' + 'strAbiOld:' + '05034');
                if (idAzSel == '265315' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034');
					            var bName = new Option(banca[b].nome, banca[b].abi, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                
                
                //controllo l'azienda selezionata
                //alert('azienda:'+idAzSel+'--banca:'+'05034' + 'strAbiOld:' + '05034');
                if (idAzSel == '274223' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034');
					            var bName = new Option(banca[b].nome, banca[b].abi, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                
                
                //controllo l'azienda selezionata
                //alert('azienda:'+idAzSel+'--banca:'+'05034' + 'strAbiOld:' + '05034');
                if (idAzSel == '274222' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034');
					            var bName = new Option(banca[b].nome, banca[b].abi, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                
                
                //controllo l'azienda selezionata
                //alert('azienda:'+idAzSel+'--banca:'+'05034' + 'strAbiOld:' + '05034');
                if (idAzSel == '274224' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034');
					            var bName = new Option(banca[b].nome, banca[b].abi, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                
                
                //controllo l'azienda selezionata
                //alert('azienda:'+idAzSel+'--banca:'+'05034' + 'strAbiOld:' + '05034');
                if (idAzSel == '274225' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034');
					            var bName = new Option(banca[b].nome, banca[b].abi, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                
                
                //controllo l'azienda selezionata
                //alert('azienda:'+idAzSel+'--banca:'+'05034' + 'strAbiOld:' + '05034');
                if (idAzSel == '265310' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034');
					            var bName = new Option(banca[b].nome, banca[b].abi, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                
                
                //controllo l'azienda selezionata
                //alert('azienda:'+idAzSel+'--banca:'+'05034' + 'strAbiOld:' + '05034');
                if (idAzSel == '276841' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034');
					            var bName = new Option(banca[b].nome, banca[b].abi, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                
                
                //controllo l'azienda selezionata
                //alert('azienda:'+idAzSel+'--banca:'+'05034' + 'strAbiOld:' + '05034');
                if (idAzSel == '274227' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034');
					            var bName = new Option(banca[b].nome, banca[b].abi, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                
                
                //controllo l'azienda selezionata
                //alert('azienda:'+idAzSel+'--banca:'+'05034' + 'strAbiOld:' + '05034');
                if (idAzSel == '274226' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034');
					            var bName = new Option(banca[b].nome, banca[b].abi, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                
                
                //controllo l'azienda selezionata
                //alert('azienda:'+idAzSel+'--banca:'+'05034' + 'strAbiOld:' + '05034');
                if (idAzSel == '276835' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034');
					            var bName = new Option(banca[b].nome, banca[b].abi, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                
                
                //controllo l'azienda selezionata
                //alert('azienda:'+idAzSel+'--banca:'+'05034' + 'strAbiOld:' + '05034');
                if (idAzSel == '276844' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034');
					            var bName = new Option(banca[b].nome, banca[b].abi, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                
                
                //controllo l'azienda selezionata
                //alert('azienda:'+idAzSel+'--banca:'+'05034' + 'strAbiOld:' + '05034');
                if (idAzSel == '265306' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034');
					            var bName = new Option(banca[b].nome, banca[b].abi, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                
                
                //controllo l'azienda selezionata
                //alert('azienda:'+idAzSel+'--banca:'+'05034' + 'strAbiOld:' + '05034');
                if (idAzSel == '265316' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034');
					            var bName = new Option(banca[b].nome, banca[b].abi, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                
                
                //controllo l'azienda selezionata
                //alert('azienda:'+idAzSel+'--banca:'+'05034' + 'strAbiOld:' + '05034');
                if (idAzSel == '265305' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034');
					            var bName = new Option(banca[b].nome, banca[b].abi, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                
                
                //controllo l'azienda selezionata
                //alert('azienda:'+idAzSel+'--banca:'+'05034' + 'strAbiOld:' + '05034');
                if (idAzSel == '265304' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034');
					            var bName = new Option(banca[b].nome, banca[b].abi, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                
                
                //controllo l'azienda selezionata
                //alert('azienda:'+idAzSel+'--banca:'+'05034' + 'strAbiOld:' + '05034');
                if (idAzSel == '276840' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034');
					            var bName = new Option(banca[b].nome, banca[b].abi, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                
                
                //controllo l'azienda selezionata
                //alert('azienda:'+idAzSel+'--banca:'+'05034' + 'strAbiOld:' + '05034');
                if (idAzSel == '265314' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034');
					            var bName = new Option(banca[b].nome, banca[b].abi, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                
                
                //controllo l'azienda selezionata
                //alert('azienda:'+idAzSel+'--banca:'+'05034' + 'strAbiOld:' + '05034');
                if (idAzSel == '457876' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034');
					            var bName = new Option(banca[b].nome, banca[b].abi, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                	
    		
    		if (myForm.cboBanca.options.length==2)
    		{
                myForm.cboBanca.selectedIndex=1;
                refreshConto(myForm.cboBanca);
                if (myForm.cboConto.options.length==2)
                {
                    myForm.cboConto.selectedIndex=1;
                }
            }
		}
		
		function refreshConto(combo){
		
			comboToClear = myForm.cboConto;
			clearCombo(comboToClear);
			combo.options.lenght = 0;
			// valore di default del combo nel caso in cui sia selezionata la option 'seleziona..'
			rapporto[0]=new infoRapporto('','');
			r = 1;
			
			var idAzSel = myForm.cboAzienda.options[myForm.cboAzienda.selectedIndex].value;	
			var idBancaSel = combo.options[combo.selectedIndex].value;
			
    		
                
                //controllo l'azienda selezionata
                if (idAzSel == '265302' ){
                    //controllo la banca
                    if (idBancaSel== '05034' ){
					    rapporto[r] = new infoRapporto('33980 - IT26K0503433980000000003827.',1360824);
					    var rName = new Option(rapporto[r].dsRapporto, rapporto[r].idRapporto, false, false)
					    myForm.cboConto.options[r] = rName;
					    r++;
					}
                }
		    
                
                //controllo l'azienda selezionata
                if (idAzSel == '276843' ){
                    //controllo la banca
                    if (idBancaSel== '05034' ){
					    rapporto[r] = new infoRapporto('33920 - IT03G0503433920000000001521.',1360846);
					    var rName = new Option(rapporto[r].dsRapporto, rapporto[r].idRapporto, false, false)
					    myForm.cboConto.options[r] = rName;
					    r++;
					}
                }
		    
                
                //controllo l'azienda selezionata
                if (idAzSel == '265303' ){
                    //controllo la banca
                    if (idBancaSel== '05034' ){
					    rapporto[r] = new infoRapporto('33980 - IT05W0503433980000000004099.',1360825);
					    var rName = new Option(rapporto[r].dsRapporto, rapporto[r].idRapporto, false, false)
					    myForm.cboConto.options[r] = rName;
					    r++;
					}
                }
		    
                
                //controllo l'azienda selezionata
                if (idAzSel == '268164' ){
                    //controllo la banca
                    if (idBancaSel== '05034' ){
					    rapporto[r] = new infoRapporto('52990 - IT70A0503452990000000006780.',1360837);
					    var rName = new Option(rapporto[r].dsRapporto, rapporto[r].idRapporto, false, false)
					    myForm.cboConto.options[r] = rName;
					    r++;
					}
                }
		    
                
                //controllo l'azienda selezionata
                if (idAzSel == '276838' ){
                    //controllo la banca
                    if (idBancaSel== '05034' ){
					    rapporto[r] = new infoRapporto('33920 - IT79Q0503433920000000002328.',1064747);
					    var rName = new Option(rapporto[r].dsRapporto, rapporto[r].idRapporto, false, false)
					    myForm.cboConto.options[r] = rName;
					    r++;
					}
                }
		    
                
                //controllo l'azienda selezionata
                if (idAzSel == '275905' ){
                    //controllo la banca
                    if (idBancaSel== '05034' ){
					    rapporto[r] = new infoRapporto('33980 - IT46Q0503433980000000005354.',1360844);
					    var rName = new Option(rapporto[r].dsRapporto, rapporto[r].idRapporto, false, false)
					    myForm.cboConto.options[r] = rName;
					    r++;
					}
                }
		    
                
                //controllo l'azienda selezionata
                if (idAzSel == '265312' ){
                    //controllo la banca
                    if (idBancaSel== '05034' ){
					    rapporto[r] = new infoRapporto('33980 - IT54M0503433980000000013652.',1360832);
					    var rName = new Option(rapporto[r].dsRapporto, rapporto[r].idRapporto, false, false)
					    myForm.cboConto.options[r] = rName;
					    r++;
					}
                }
		    
                
                //controllo l'azienda selezionata
                if (idAzSel == '276839' ){
                    //controllo la banca
                    if (idBancaSel== '05034' ){
					    rapporto[r] = new infoRapporto('33920 - IT10Z0503433920000000002375.',1064749);
					    var rName = new Option(rapporto[r].dsRapporto, rapporto[r].idRapporto, false, false)
					    myForm.cboConto.options[r] = rName;
					    r++;
					}
                }
		    
                
                //controllo l'azienda selezionata
                if (idAzSel == '265307' ){
                    //controllo la banca
                    if (idBancaSel== '05034' ){
					    rapporto[r] = new infoRapporto('33980 - IT77F0503433980000000013607.',1360829);
					    var rName = new Option(rapporto[r].dsRapporto, rapporto[r].idRapporto, false, false)
					    myForm.cboConto.options[r] = rName;
					    r++;
					}
                }
		    
                
                //controllo l'azienda selezionata
                if (idAzSel == '265308' ){
                    //controllo la banca
                    if (idBancaSel== '05034' ){
					    rapporto[r] = new infoRapporto('33980 - IT54G0503433980000000013608.',1360830);
					    var rName = new Option(rapporto[r].dsRapporto, rapporto[r].idRapporto, false, false)
					    myForm.cboConto.options[r] = rName;
					    r++;
					}
                }
		    
                
                //controllo l'azienda selezionata
                if (idAzSel == '265313' ){
                    //controllo la banca
                    if (idBancaSel== '05034' ){
					    rapporto[r] = new infoRapporto('33980 - IT25J0503433980000000005325.',1360833);
					    var rName = new Option(rapporto[r].dsRapporto, rapporto[r].idRapporto, false, false)
					    myForm.cboConto.options[r] = rName;
					    r++;
					}
                }
		    
                
                //controllo l'azienda selezionata
                if (idAzSel == '300872' ){
                    //controllo la banca
                    if (idBancaSel== '05034' ){
					    rapporto[r] = new infoRapporto('32800 - IT75W0503432800000000011399.',1360847);
					    var rName = new Option(rapporto[r].dsRapporto, rapporto[r].idRapporto, false, false)
					    myForm.cboConto.options[r] = rName;
					    r++;
					}
                }
		    
                
                //controllo l'azienda selezionata
                if (idAzSel == '265315' ){
                    //controllo la banca
                    if (idBancaSel== '05034' ){
					    rapporto[r] = new infoRapporto('33980 - IT31H0503433980000000013609.',1360835);
					    var rName = new Option(rapporto[r].dsRapporto, rapporto[r].idRapporto, false, false)
					    myForm.cboConto.options[r] = rName;
					    r++;
					}
                }
		    
                
                //controllo l'azienda selezionata
                if (idAzSel == '274223' ){
                    //controllo la banca
                    if (idBancaSel== '05034' ){
					    rapporto[r] = new infoRapporto('52990 - IT75Y0503452990000000002598.',1360839);
					    var rName = new Option(rapporto[r].dsRapporto, rapporto[r].idRapporto, false, false)
					    myForm.cboConto.options[r] = rName;
					    r++;
					}
                }
		    
                
                //controllo l'azienda selezionata
                if (idAzSel == '274222' ){
                    //controllo la banca
                    if (idBancaSel== '05034' ){
					    rapporto[r] = new infoRapporto('52990 - IT56U0503452990000000005950.',1360838);
					    var rName = new Option(rapporto[r].dsRapporto, rapporto[r].idRapporto, false, false)
					    myForm.cboConto.options[r] = rName;
					    r++;
					}
                }
		    
                
                //controllo l'azienda selezionata
                if (idAzSel == '274224' ){
                    //controllo la banca
                    if (idBancaSel== '05034' ){
					    rapporto[r] = new infoRapporto('52990 - IT42G0503452990000000000926.',1360840);
					    var rName = new Option(rapporto[r].dsRapporto, rapporto[r].idRapporto, false, false)
					    myForm.cboConto.options[r] = rName;
					    r++;
					}
                }
		    
                
                //controllo l'azienda selezionata
                if (idAzSel == '274225' ){
                    //controllo la banca
                    if (idBancaSel== '05034' ){
					    rapporto[r] = new infoRapporto('52990 - IT96I0503452990000000006403.',1360841);
					    var rName = new Option(rapporto[r].dsRapporto, rapporto[r].idRapporto, false, false)
					    myForm.cboConto.options[r] = rName;
					    r++;
					}
                }
		    
                
                //controllo l'azienda selezionata
                if (idAzSel == '265310' ){
                    //controllo la banca
                    if (idBancaSel== '05034' ){
					    rapporto[r] = new infoRapporto('33980 - IT16J0503433980000000013635.',1360831);
					    var rName = new Option(rapporto[r].dsRapporto, rapporto[r].idRapporto, false, false)
					    myForm.cboConto.options[r] = rName;
					    r++;
					}
                }
		    
                
                //controllo l'azienda selezionata
                if (idAzSel == '276841' ){
                    //controllo la banca
                    if (idBancaSel== '05034' ){
					    rapporto[r] = new infoRapporto('33920 - IT88V0503433920000000001459.',1360845);
					    var rName = new Option(rapporto[r].dsRapporto, rapporto[r].idRapporto, false, false)
					    myForm.cboConto.options[r] = rName;
					    r++;
					}
                }
		    
                
                //controllo l'azienda selezionata
                if (idAzSel == '274227' ){
                    //controllo la banca
                    if (idBancaSel== '05034' ){
					    rapporto[r] = new infoRapporto('52990 - IT56I0503452990000000003146.',1360843);
					    var rName = new Option(rapporto[r].dsRapporto, rapporto[r].idRapporto, false, false)
					    myForm.cboConto.options[r] = rName;
					    r++;
					}
                }
		    
                
                //controllo l'azienda selezionata
                if (idAzSel == '274226' ){
                    //controllo la banca
                    if (idBancaSel== '05034' ){
					    rapporto[r] = new infoRapporto('52990 - IT98Q0503452990000000002384.',1360842);
					    var rName = new Option(rapporto[r].dsRapporto, rapporto[r].idRapporto, false, false)
					    myForm.cboConto.options[r] = rName;
					    r++;
					}
                }
		    
                
                //controllo l'azienda selezionata
                if (idAzSel == '276835' ){
                    //controllo la banca
                    if (idBancaSel== '05034' ){
					    rapporto[r] = new infoRapporto('33920 - IT83U0503433920000000002156.',1064744);
					    var rName = new Option(rapporto[r].dsRapporto, rapporto[r].idRapporto, false, false)
					    myForm.cboConto.options[r] = rName;
					    r++;
					}
                }
		    
                
                //controllo l'azienda selezionata
                if (idAzSel == '276844' ){
                    //controllo la banca
                    if (idBancaSel== '05034' ){
					    rapporto[r] = new infoRapporto('33920 - IT96F0503433920000000002103.',1064755);
					    var rName = new Option(rapporto[r].dsRapporto, rapporto[r].idRapporto, false, false)
					    myForm.cboConto.options[r] = rName;
					    r++;
					}
                }
		    
                
                //controllo l'azienda selezionata
                if (idAzSel == '265306' ){
                    //controllo la banca
                    if (idBancaSel== '05034' ){
					    rapporto[r] = new infoRapporto('33980 - IT54M0503433980000000004728.',1360828);
					    var rName = new Option(rapporto[r].dsRapporto, rapporto[r].idRapporto, false, false)
					    myForm.cboConto.options[r] = rName;
					    r++;
					}
                }
		    
                
                //controllo l'azienda selezionata
                if (idAzSel == '265316' ){
                    //controllo la banca
                    if (idBancaSel== '05034' ){
					    rapporto[r] = new infoRapporto('33980 - IT88Y0503433980000000013710.',1360836);
					    var rName = new Option(rapporto[r].dsRapporto, rapporto[r].idRapporto, false, false)
					    myForm.cboConto.options[r] = rName;
					    r++;
					}
                }
		    
                
                //controllo l'azienda selezionata
                if (idAzSel == '265305' ){
                    //controllo la banca
                    if (idBancaSel== '05034' ){
					    rapporto[r] = new infoRapporto('33980 - IT70I0503433980000000004831.',1360827);
					    var rName = new Option(rapporto[r].dsRapporto, rapporto[r].idRapporto, false, false)
					    myForm.cboConto.options[r] = rName;
					    r++;
					}
                }
		    
                
                //controllo l'azienda selezionata
                if (idAzSel == '265304' ){
                    //controllo la banca
                    if (idBancaSel== '05034' ){
					    rapporto[r] = new infoRapporto('33980 - IT22Z0503433980000000004688.',1360826);
					    var rName = new Option(rapporto[r].dsRapporto, rapporto[r].idRapporto, false, false)
					    myForm.cboConto.options[r] = rName;
					    r++;
					}
                }
		    
                
                //controllo l'azienda selezionata
                if (idAzSel == '276840' ){
                    //controllo la banca
                    if (idBancaSel== '05034' ){
					    rapporto[r] = new infoRapporto('33920 - IT37T0503433920000000001748.',1064751);
					    var rName = new Option(rapporto[r].dsRapporto, rapporto[r].idRapporto, false, false)
					    myForm.cboConto.options[r] = rName;
					    r++;
					}
                }
		    
                
                //controllo l'azienda selezionata
                if (idAzSel == '265314' ){
                    //controllo la banca
                    if (idBancaSel== '05034' ){
					    rapporto[r] = new infoRapporto('33980 - IT11L0503433980000000005236.',1360834);
					    var rName = new Option(rapporto[r].dsRapporto, rapporto[r].idRapporto, false, false)
					    myForm.cboConto.options[r] = rName;
					    r++;
					}
                }
		    
                
                //controllo l'azienda selezionata
                if (idAzSel == '457876' ){
                    //controllo la banca
                    if (idBancaSel== '05034' ){
					    rapporto[r] = new infoRapporto('33980 - IT98K0503433980000000005441.',2142785);
					    var rName = new Option(rapporto[r].dsRapporto, rapporto[r].idRapporto, false, false)
					    myForm.cboConto.options[r] = rName;
					    r++;
					}
                }
		    

                if (myForm.cboConto.options.length==2)
                {
                    myForm.cboConto.selectedIndex=1;
                }
		}
		
        function setClassRowsXPAge(id){
        
            
                document.getElementById('aRowsXpag50').className = "testoBlackSmallBold";
            
                document.getElementById('aRowsXpag100').className = "testoBlackSmallBold";
            
                document.getElementById('aRowsXpag200').className = "testoBlackSmallBold";
             
            
            /*document.getElementById('aRowsXpag10').className = "testoBlackSmallBold";
            document.getElementById('aRowsXpag20').className = "testoBlackSmallBold";
            document.getElementById('aRowsXpag50').className = "testoBlackSmallBold";
            document.getElementById('aRowsXpag100').className = "testoBlackSmallBold";
            document.getElementById('aRowsXpag200').className = "testoBlackSmallBold";*/
            
            if (id==10){
                //document.getElementById('aRowsXpag10').className = "testoBlackSmallBold";
                document.getElementById('aRowsXpag10').className = "testoRedSmallBold";
            }
            if (id==20){
                //document.getElementById('aRowsXpag20').className = "testoBlackSmallBold";
                document.getElementById('aRowsXpag20').className = "testoRedSmallBold";
            }                
            if (id==50){
                //document.getElementById('aRowsXpag50').className = "testoBlackSmallBold";
                document.getElementById('aRowsXpag50').className = "testoRedSmallBold";
            }                
            if (id==100){
                //document.getElementById('aRowsXpag100').className = "testoBlackSmallBold";
                document.getElementById('aRowsXpag100').className = "testoRedSmallBold";
            }                
            if (id==200){
                //document.getElementById('aRowsXpag200').className = "testoBlackSmallBold";
                document.getElementById('aRowsXpag200').className = "testoRedSmallBold";
            }  
        }
		
		function ReLoad(nItem,valt){
		    myForm.wucHiidenRowsXPage.value=nItem;
		    
		}
		
		function visAvanzate()
		{
		    var myForm=eval('form1');
            var trAvanzate=document.getElementById('RowAvanzate');	
            if(trAvanzate.style.display =='none'){
				trAvanzate.style.display = '';
				myForm.cmdAvanzate.value = '<< Avanzate';
			}
			else{
				trAvanzate.style.display = 'none';
				myForm.cmdAvanzate.value = '>> Avanzate';
			}
		}
		
		doAfterLoaded();

    </script>
																	</td>
																</tr>
																<tr>
																	<td height="1" style="height: 5px;">
																		</td>
																</tr>
																<tr height="20" class="old-sectionTitle old-section section clearfix" style="padding-left: 0px;"><h3 class="new-titleSection">
																	
																		&nbsp;Dati Bollettino
																</h3></tr>
																<tr>
																	<td height="1" class="old-section section clearfix" style="height: 15px;">
																		</td>
																</tr>
																<tr>
																	<td class="old-section section clearfix txt_center">
																		<div id="bubble_tooltip" style="position: absolute;">
																				<span id="bubble_tooltip_content"></span>
																			</div><table width="100%" border="0">
																			<tbody><tr>
																				<td class="testoBlackSmall" style="width: 120px" nowrap="">
																				    <span class="testoRedSmallBold">*</span>
																					Utenza da pagare
																				</td>
																				<td class="testoBlackSmall" style="width: 140px">
																					<select style="width: 280px" id="cboPagUtenza" name="cboPagUtenza" class="new-form-control">
																						<!-- caricato dinamicamente -->
																					<option value="-1#-1">Seleziona...</option><option value="UVBI007#007">ACEA S.p.A.- ROMA</option><option value="UVBI087#087">ACOSET SPA</option><option value="UVBI029#029">ACQUE VERONESI</option><option value="UVBI011#011">AEM - A2A</option><option value="UVBI049#049">AEM COM SRL</option><option value="UVBI012#012">AGS SPA - Peschiera del Garda</option><option value="UVBI004#004">AGSM</option><option value="UVBI013#013">AIMAG</option><option value="UVBI034#034">AMAG SPA</option><option value="UVBI014#014">AMAIE</option><option value="UVBI064#064">AMAT SPA</option><option value="UVBI009#009">AMGA Commerciale</option><option value="UVBI045#045">ASPM COMMERCIALE SRL</option><option value="UVBI051#051">ASPM SERVIZI AMBIENTALI SRL</option><option value="UVBI047#047">ASPM SORESINA SERVIZI S.P.A.</option><option value="UVBI058#058">ATC - AG. TERR. CASA PROV. DI Novara</option><option value="UVBI037#037">AZIENDA ENERGETICA MUNICIPALE</option><option value="UVBI060#060">BLUENERGY</option><option value="UVBI090#090">COMUNE DI BOVOLONE</option><option value="UVBI040#040">COMUNE DI CREMONA</option><option value="UVBI075#075">COMUNE DI LODI - TARSU</option><option value="UVBI041#041">COMUNE DI PIADENA</option><option value="UVBI039#039">COMUNE DI SOSPIRO</option><option value="UVBI042#042">COMUNE MALAGNINO</option><option value="UVBI053#053">CONS. BONIF. COLLINE LIVORNESI</option><option value="UVBI072#072">CONSORZIO BONIFICA EMILIA CENTRALE</option><option value="UVBI062#062">CONSORZIO BONIFICA FIUMI E FOSSI</option><option value="UVBI055#055">CONSORZIO BONIFICA RENANA</option><option value="UVBI081#081">CONTARINA SPA - IGIENE AMBIENTALI</option><option value="UVBI080#080">CONTARINA SPA - SERVIZI INTERATTIVI</option><option value="UVBI017#017">COOP GAS</option><option value="UVBE001#001">ENEL spa / ENEL ENERGIA</option><option value="UVBI063#063">ENERCOM</option><option value="UVBI003#003">ENI - GAS E POWER - SOFID</option><option value="UVBI005#005">ENIA</option><option value="UVBI019#019">EX FIORENTINA GAS</option><option value="UVBI044#044">GAS SALES SRL</option><option value="UVBI068#068">GEAL SPA</option><option value="UVBI008#008">GENOVA ACQUE</option><option value="UVBI054#054">GESTE SRL</option><option value="UVBI020#020">HERA SPA</option><option value="UVBI050#050">ICA</option><option value="UVBI088#088">INDECAST SRL - ACQUA</option><option value="UVBI089#089">INDECAST SRL-RIFIUTI</option><option value="UVBI066#066">IREN EMILIA</option><option value="UVBI065#065">IREN MERCATO</option><option value="UVBI067#067">IREN TIA</option><option value="UVBI043#043">LINEA GROUP SPA</option><option value="UVBI085#085">LINEA PIU CREMA</option><option value="UVBI006#006">META</option><option value="UVBI021#021">METAENERGY</option><option value="UVBI052#052">MISERICORDIA</option><option value="UVBI022#022">NAPOLETANA GAS</option><option value="UVBI038#038">POLIZIA MUNICIPALE CREMONA</option><option value="UVBI086#086">SCS GESTIONI</option><option value="UVBI024#024">SINERGAS</option><option value="UVBI071#071">SOC. ELETTRICA LIPARESE</option><option value="UVBI048#048">SORESINA RETI E IMPIANTI S.P.A</option><option value="UVBI023#023">SORGEA SRL</option><option value="UVBI026#026">SORIS</option><option value="UVBI056#056">SORIT - CONS.BON.VALLI GRANDI</option><option value="UVBI028#028">TEA ACQUE</option><option value="UVBT002#002">TELECOM</option><option value="UVBI046#046">TIDONE GAS ENERGIE SRL</option><option value="UVBI031#031">TIM</option><option value="UVBI057#057">V.E.R.I.T.A.S. (EX VESTA)</option></select>
																				</td>
																				<td style="width:265px">
																					&nbsp;
																				</td>
																				<td class="testoBlackSmall left" colspan="2" nowrap="">
																					<span class="testoRedSmallBold">*</span>
																					Importo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																					<input type="text" id="txt_importo" class="testoBlackSmall new-form-control" style="text-align: right" maxlength="20" size="21" onkeypress="return onlyRealNumbers(event);">
																					EURO
																				</td>
																			</tr>
																			<tr>
																				<td class="testoBlackSmall" style="width: 120px" nowrap="">
																					<span class="testoRedSmallBold">*</span>
																					Codice bolletta
																				</td>
																				<td class="testoBlackSmall" style="width: 140px">
																					<input size="46" maxlength="20" type="text" id="txt_CodBolletta" name="txt_CodBolletta" onkeypress="return onlyIntNumbers(event)" class="new-form-control">
																				</td>
																				<td style="width: 60px">
																					<a class="old-fieldHelp" href="#" onclick="showToolTip(event,'');return false" onmouseout="hideToolTip()" title="Fac-simile">
																						<img src="/resources/YouBiz/images/i_help.png" border="0" height="20" width="20"></a></td>
																				<td class="testoBlackSmall left" nowrap="">
																					
																				</td>
																				<td style="width: 40px" class="left">
																					
																				</td>
																			</tr>
																			
																			<tr>
																				<td class="testoBlackSmall" style="width: 120px" nowrap="">
																					<span class="testoRedSmallBold">*</span>
																					Conto postale
																				</td>
																				<td class="testoBlackSmall" colspan="5">
																					<input size="46" maxlength="20" type="text" id="txt_ContoPostale" name="txt_ContoPostale" onkeypress="return onlyIntNumbers(event)" class="new-form-control">
																				</td>
																			</tr>
																		</tbody></table>
																	</td>
																</tr>
                                                                
																<tr>
																	<td>
																		<table width="100%" border="0">
																			<tbody><tr>
																				<td height="30" class="old-buttons txt_center" id="noSpaceYouBiz" style="height: 10px;">
																					
																					&nbsp;
																					
																				</td>
																			</tr>
																			<tr>
																				<td style="width: 120px" colspan="1">
																					<span class="testoRedSmallBold">&nbsp;&nbsp;*
																						campi obbligatori
																					</span>
																				</td>
																			</tr>
																		</tbody></table>
																	</td>
																</tr>
															</tbody></table>
														</td>
													</tr>
												</tbody></table>
											</td>
										</tr>
										<tr>
											<td class="txt_center">
												
												
                                                <span class="testoRedSmallBold">
                                                    Attenzione! Una volta inserito, il pagamento utenze non può essere annullato.
												</span>
											</td>
										</tr>
									</tbody></table>
								</td>
							</tr>
						</tbody></table>
                        </div><div class="new-buttons"><input type="button" class="btn1" style="cursor: pointer" name="cmdVisualizza" value=" Conferma" onclick="javascript:goRiepilogo();"><input value="Annulla" type="button" onclick="javascript:annulla()" name="cmdAnnulla" class="btn1" style="cursor: Hand"></div></div>
					</form>
					<form name="frmGoConferma" id="frmGoConferma" action="" method="post">
						<input type="hidden" name="idAzienda" value="">
						<input type="hidden" name="idBanca" value="">
						<input type="hidden" name="idConto" value="">
						<input type="hidden" name="Importo" value="">
						<input type="hidden" name="Data" value="">
						<input type="hidden" name="IDUtenza" value="">
						<input type="hidden" name="DescrUtenza" value="">
						<input type="hidden" name="CodiceUtenza" value="">
						<input type="hidden" name="CodBolletta" value="">
						<input type="hidden" name="ContoPostale" value="">
						<input type="hidden" name="Divisa" value="">
						<input type="hidden" name="tm_tipo_operazione" value="">
						<input type="hidden" name="tm_idApplicazione" value="19">
						<input type="hidden" name="tm_idSubApplicazione" value="0">
					</form>
					<form name="frmAnnulla" id="frmAnnulla" action="../../main/serviziMain.aspx" method="post">
					</form>
			</td>
		</tr>
		<tr>
			<td valign="bottom">
				<div class="divFooter">
		            <div class="row footer">
			            <div class="container">
				            <div class="col-xs-4">
					            <div class="assistenza clearfix">
						            <h4>Assistenza Clienti</h4>
						            <div class="clearfix">
							            <a class="ico-assistenza" href="#">&nbsp;</a>
							            <div>
								            Numero verde:&nbsp;<strong>800.607.227</strong><br>
								            Dall'estero:&nbsp;<strong>+39 02.43371097</strong>
							            </div>
						            </div>
						            <div class="clearfix">
							            <a class="ico-gestore" href="#">&nbsp;</a>
							            <div>Per qualsiasi altra esigenza è a tua disposizione<br>
							            il <strong>Gestore</strong> presso la tua filiale di riferimento</div>
						            </div>
					            </div>
				            </div>
				            <div class="col-xs-4">					            
				            </div>
				            <div class="col-xs-4">
					            <div class="footer-logo"> <span>Banco Popolare</span> </div>
				            </div>
				            <div class="col-xs-12 margin-top10 txt_center disclaimer">
					            © 2000-2015&nbsp;-&nbsp;Vietata la riproduzione totale o parziale senza l'autorizzazione scritta dei detentori del copyright
				            </div>
			            </div>
		            </div>
	            </div>
			</td>
		</tr>

	</tbody></table>


<script language="javascript" type="text/javascript">
	LoadUtenza();
	PositionValue();
</script>




    <script type="text/javascript">
        $(function () {
            $("#noSpaceYouBiz").css("height", "10px"); //30/07/2015 Sonia: posso mettere anche 1px ma a video fa una dimensione fissa di circa 10px
        });
    </script>
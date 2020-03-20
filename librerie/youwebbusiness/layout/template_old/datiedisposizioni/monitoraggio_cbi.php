    <table class="larghezzaEsterna old-container" cellspacing="0" cellpadding="0" border="0" align="center" height="100%">
        <tbody><tr>
            <td valign="top">
                    <div style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;" onmouseover="parent.tm_middle.clearTimeOut();" onmouseout="parent.tm_middle.layerTimeOut('menu1','onmouseoutDalLayer')" id="menu1"></div>
<div style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;" onmouseover="parent.tm_middle.clearTimeOut();" onmouseout="parent.tm_middle.layerTimeOut('menu2','onmouseoutDalLayer');" id="menu2"></div><form name="form1" method="post" action="<%=action_filtri%>" id="form1">
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTQ5OTY1MDA3NmRkVD/EsNO7OsLLB7HdH2ggyoIE54i8QhLAGJmFRHEmoX8=">
</div>

<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="036A84E0">
</div>
                    <div class="container"><div class="old-pageContent new-riquadro">
                        <table height="100%" class="larghezzaEsterna" cellspacing="0" cellpadding="0" border="0" align="center">
                            <tbody><tr valign="top">
                                <td>
                                    
                                        <table class="larghezzaInternaPiccola" cellspacing="0" cellpadding="0" style="width:100%;height:100%" border="0" align="center">
                                                                        
                                        <tbody><tr>
                                            <td>
                                                <table width="100%" cellspacing="0" cellpadding="1" bgcolor="#000000">
                                                    <tbody><tr>
                                                        <td>
                                                            <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                                                <tbody><tr>
                                                                    <td height="30" class="titoloFiltri old-pageTitle page-title left"><div class="new-flag"></div><h1>
                                                                        &nbsp;Monitoraggio Flussi CBI
                                                                    </h1></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="titoloFiltri">
                                                                        
                                                                    </td>
                                                                </tr>
                                                                <tr class="sfondofiltri">
                                                                    <td>
                                                                        <table width="100%" cellspacing="1" cellpadding="3" border="0">
                                                                            <tbody><tr class="sfondofiltri">
                                                                                <td class="old-section section clearfix txt_center">
                                                                                    <table width="89%" border="0">
                                                                                        <tbody><tr>
                                                                                            <td class="txt_center">
                                                                                                
    <table border="0" class="interno_1">
        <tbody><tr class="">
            
            <td class="testoBlackSmall" nowrap="">
                <span class="testoRedSmallBold">*</span>&nbsp;Rag. Soc./Intestatario:
                
            </td>
            
            <td style="text-align: left" class="testoBlackSmall">
                

                <select style="width:350px" onchange="writeSia(this);GetVal(this);" name="cboAzienda" class="new-form-control">
                    
                    <option value="">seleziona...</option>
                    
                <option value="806V1">CONDOMINIO DELLA COSTA PRIMO</option><option value="A8AKM">CONDOMINIO VILLA PALENI</option><option value="A8AKZ">CONDOMINIO I GIARDINI RAPPRESENTATO</option><option value="AD770">CONDOMINIO CASA A1</option><option value="AE0RN">CONDOMINIO AMENDOLA 2</option><option value="AIRZR">CONDOMINIO IL GELSO</option><option value="B37E6">CONDOMINIO BOX DELLA COSTA</option><option value="BI9GP">CONDOMINIO ACLI</option><option value="BI9GQ">CONDOMINIO BRAMBILLA</option><option value="BI9GY">CONDOMINIO VIA MARCONI 20</option><option value="BISYC">CONDOMINIO LA TORRE</option><option value="BJ08H">CONDOMINIO MADONNINA</option><option value="BJ08I">CONDOMINIO LE BETULLE</option><option value="BJ08J">CONDOMINIO NIGRITELLA</option><option value="BJ08Q">CONDOMINIO PIROVANO</option><option value="BJ08R">CONDOMINIO S.MARCO</option><option value="BJ08S">CONDOMINIO S.ALESSANDRO</option><option value="BJMHB">CONDOMINIO C.A. CRESPI RAPP.TO P RO</option></select>
            </td>
            
            
	        <td style="width: 200px;text-align: left;padding-left: 50px;" class="testoBlackSmall right">
		        Sia:
	        </td>
	        <td><input type="text" size="10" readonly="" name="txtSia" class="new-form-control"></td>
		                
        </tr>
        <tr class="">
        
            <td class="testoBlackSmall">
                <span class="testoRedSmallBold">*</span>&nbsp;Banca:
                
            </td>
            
            <td style="text-align: left" class="testoBlackSmall">
                
                <select style="width:350px" onchange="writeAbi(this);GetVal(this);" name="cboBanca" class="new-form-control">
                    
                    <option value="">seleziona...</option>
                    
                </select>
            </td>
            
            
            <td style="width:200px;text-align: left;padding-left: 50px;" class="testoBlackSmall">
			    Righe per pagina:
		    </td>
		    <td>
		        <select style="width:100%" name="numRows" class="new-form-control">
		            
		            <option value="50">50</option>
		            
		            <option value="100">100</option>
		            
		            <option value="200">200</option>
		             
		        </select>
		    </td>
		                
        </tr>
        <tr class="">     
                  
            
            <td style="text-align: left" class="testoBlackSmall">
                
            </td>
            <td style="text-align: right" colspan="3">
            
            <input type="button" class="btn1 small" style="CURSOR:pointer" name="cmdAvanzate" value="<< Avanzate" onclick="javascript:visAvanzate();">
            
            
            </td>
        </tr>
        
        
    </tbody></table>
    
    <script language="javascript" type="text/javascript">
        var myForm=eval('document.form1');    
        var intestatario = new Array();
        var rapporto = new Array();
        var banca = new Array();

        function MetaObjFiltroAziende()
        {
            this.idRapporto =myForm.cboBanca.value;
            this.sia = myForm.cboAzienda.value;
        }
    
		function writeSia(combo){
		    
		        myForm.txtSia.value=intestatario[combo.selectedIndex].sia;
		    
			refreshBanca(combo);
		}
        
		function writeAbi(combo){
            //david
			//refreshConto(combo);
		}
		
		function GetVal(obj)
		{
		    ImpoDateStatoAzzFiltri(true);
		}

        function infoIntestatario(ragione_sociale,cod_sia,idAzienda)
		{
			this.ragioneSociale = ragione_sociale;
			this.sia = cod_sia;
			this.idAzienda=idAzienda;
		}

		function infoBanca(nome,abi,idrapporto)
		{
			this.nome = nome;
			this.abi = abi;
            this.idRapporto = idrapporto;
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

        function doAfterLoaded(){
	        // valore di default del combo nel caso in cui sia selezionata la option 'seleziona..'
	        intestatario[0]=new infoIntestatario('','');
	        i = 1;
	        
	        //carico tutte le aziende
	        
                intestatario[i] = new infoIntestatario('CONDOMINIO DELLA COSTA PRIMO','806V1',1199041);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].sia, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO VILLA PALENI','A8AKM',1296039);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].sia, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO I GIARDINI RAPPRESENTATO','A8AKZ',1296042);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].sia, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO CASA A1','AD770',1218284);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].sia, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO AMENDOLA 2','AE0RN',1253570);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].sia, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO IL GELSO','AIRZR',1198034);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].sia, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO BOX DELLA COSTA','B37E6',1379657);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].sia, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO ACLI','BI9GP',1419523);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].sia, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO BRAMBILLA','BI9GQ',1296043);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].sia, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO VIA MARCONI 20','BI9GY',1296040);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].sia, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO LA TORRE','BISYC',1296041);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].sia, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO MADONNINA','BJ08H',1369851);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].sia, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO LE BETULLE','BJ08I',1369853);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].sia, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO NIGRITELLA','BJ08J',1369855);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].sia, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO PIROVANO','BJ08Q',1369857);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].sia, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO S.MARCO','BJ08R',1369852);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].sia, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO S.ALESSANDRO','BJ08S',1369854);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].sia, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
                intestatario[i] = new infoIntestatario('CONDOMINIO C.A. CRESPI RAPP.TO P RO','BJMHB',1369856);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].sia, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
            
            //Riposiziono se unico rag sociale il valore di partenza senza "seleziona.."
            if (myForm.cboAzienda.options.length==2){
               myForm.cboAzienda.selectedIndex=1;
               writeSia(myForm.cboAzienda);
               refreshBanca(myForm.cboAzienda);
            }

	        
                           setValueCombo(myForm.numRows,'50');
                          
            DefaultnumRowsSelect();
        }
        
        function DefaultnumRowsSelect()
        {
            
                setValueCombo(myForm.numRows,'wucSelRighe');
                
        }
        
		function refreshBanca(combo){
			comboToClear = myForm.cboBanca;
			clearCombo(comboToClear);
			
			// valore di default del combo nel caso in cui sia selezionata la option 'seleziona..'
			banca[0]=new infoBanca('','','');
			b = 1;
			
			//var idAzSel = combo.options[combo.selectedIndex].value;
            var idAzSia = combo.options[combo.selectedIndex].value;
			
    		
    		//alert('cambio azienda:' + 'strAbiOld: ' + '');
    		

                if (idAzSia == '806V1' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034','1199041');
					            var bName = new Option(banca[b].nome, banca[b].idRapporto, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                

                if (idAzSia == 'A8AKM' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034','1296039');
					            var bName = new Option(banca[b].nome, banca[b].idRapporto, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                

                if (idAzSia == 'A8AKZ' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034','1296042');
					            var bName = new Option(banca[b].nome, banca[b].idRapporto, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                

                if (idAzSia == 'AD770' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034','1218284');
					            var bName = new Option(banca[b].nome, banca[b].idRapporto, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                

                if (idAzSia == 'AE0RN' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034','1253570');
					            var bName = new Option(banca[b].nome, banca[b].idRapporto, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                

                if (idAzSia == 'AIRZR' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034','1198034');
					            var bName = new Option(banca[b].nome, banca[b].idRapporto, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                

                if (idAzSia == 'B37E6' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034','1379657');
					            var bName = new Option(banca[b].nome, banca[b].idRapporto, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                

                if (idAzSia == 'BI9GP' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034','1419523');
					            var bName = new Option(banca[b].nome, banca[b].idRapporto, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                

                if (idAzSia == 'BI9GQ' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034','1296043');
					            var bName = new Option(banca[b].nome, banca[b].idRapporto, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                

                if (idAzSia == 'BI9GY' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034','1296040');
					            var bName = new Option(banca[b].nome, banca[b].idRapporto, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                

                if (idAzSia == 'BISYC' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034','1296041');
					            var bName = new Option(banca[b].nome, banca[b].idRapporto, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                

                if (idAzSia == 'BJ08H' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034','1369851');
					            var bName = new Option(banca[b].nome, banca[b].idRapporto, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                

                if (idAzSia == 'BJ08I' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034','1369853');
					            var bName = new Option(banca[b].nome, banca[b].idRapporto, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                

                if (idAzSia == 'BJ08J' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034','1369855');
					            var bName = new Option(banca[b].nome, banca[b].idRapporto, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                

                if (idAzSia == 'BJ08Q' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034','1369857');
					            var bName = new Option(banca[b].nome, banca[b].idRapporto, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                

                if (idAzSia == 'BJ08R' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034','1369852');
					            var bName = new Option(banca[b].nome, banca[b].idRapporto, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                

                if (idAzSia == 'BJ08S' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034','1369854');
					            var bName = new Option(banca[b].nome, banca[b].idRapporto, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                

                if (idAzSia == 'BJMHB' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034','1369856');
					            var bName = new Option(banca[b].nome, banca[b].idRapporto, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                	
    		
    		if (myForm.cboBanca.options.length==2)
    		{
                myForm.cboBanca.selectedIndex=1;
                //david
                //refreshConto(myForm.cboBanca);
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
                                                                                    </tbody></table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <table border="0" width="100%">
                                                                                        <tbody><tr style="height: 1px">
                                                                                            <td style="width: 50px; height: 1px">
                                                                                            </td>
                                                                                            <td style="background-image: url(&quot;/resources/05034/it-IT/TMIBBWEBServizi/img/riga-filtro.gif&quot;); height: 1px; visibility: hidden; display: none;">
                                                                                            </td>
                                                                                            <td style="width: 50px; height: 1px">
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody></table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="old-section section clearfix txt_center">
                                                                                    <table border="0" width="720px">
                                                                                        <tbody><tr>
                                                                                            <td class="testoBlackSmall" style="text-align: right; width: 135px; white-space: nowrap">
                                                                                                &nbsp;
                                                                                            </td>
                                                                                            <td class="testoBlackSmall" style="text-align: left; width: 120px; white-space: nowrap">
                                                                                                Da
                                                                                                :
                                                                                            </td>
                                                                                            <td class="testoBlackSmall" style="text-align: left; white-space: nowrap">
                                                                                                A
                                                                                                :
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="testoBlackSmall" style="width: 135px; white-space: nowrap">
                                                                                                Data
                                                                                                :
                                                                                            </td>
                                                                                            <td style="width: 120px;">
                                                                                                <table cellspacing="0">
                                                                                                    <tbody><tr>
                                                                                                        <td>
                                                                                                            <input size="11" maxlength="10" type="text" value="" name="txtDataDa" class="datepicker txtDataDaYBW new-form-control hasDatepicker" onblur="javascript:this.value=checkDate(this.value,dateSyntaxMsg,dateNotValidMsg,dateNotValidYearMsg);" onkeypress="return onlyDate(event)" title="Formato data gg/mm/aaaa" id="dp1569845202845">
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <a class="icon-replace icon-calendar active" onclick="$('.datepicker.txtDataDaYBW').datepicker('show');" href="javascript:void(0);">
                                        <img class="old-fieldCalendar txtDataDaYBW" src="/resources/YouBiz/images/calendar.png" border="0" height="20" width="20" id="dp1569845202846"></a>
                                        <script language="javascript" type="text/javascript">
                                            $(function () { $(".txtDataDaYBW").datepicker();});
                                        </script> 
                                      
                                                                                                            
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                            <td>
                                                                                                <table cellspacing="0">
                                                                                                    <tbody><tr>
                                                                                                        <td>
                                                                                                            <input size="11" maxlength="10" type="text" value="" name="txtDataA" class="datepicker txtDataAYBW new-form-control hasDatepicker" onblur="javascript:this.value=checkDate(this.value,dateSyntaxMsg,dateNotValidMsg,dateNotValidYearMsg);" onkeypress="return onlyDate(event)" title="Formato data gg/mm/aaaa" id="dp1569845202847">
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <a class="icon-replace icon-calendar active" onclick="$('.datepicker.txtDataAYBW').datepicker('show');" href="javascript:void(0);">
                                        <img class="old-fieldCalendar txtDataAYBW" src="/resources/YouBiz/images/calendar.png" border="0" height="20" width="20" id="dp1569845202848"></a>
                                        <script language="javascript" type="text/javascript">
                                            $(function () { $(".txtDataAYBW").datepicker();});
                                        </script> 
                                      
                                                                                                            
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="testoBlackSmall" style="width: 135px; white-space: nowrap">
                                                                                                Stato
                                                                                                :
                                                                                            </td>
                                                                                            <td>
                                                                                                <select style="width: 100px" id="cboEsito" name="cboEsito" class="new-form-control">
                                                                                                    <!-- caricato dinamicamente -->
                                                                                                <option value="">TUTTI</option><option value="0">Inviato</option><option value="1">Scartato</option></select>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody></table>
                                                                                </td>
                                                                            </tr>
                                                                            
                                                                            <tr id="RowAvanzate" style="">
                                                                                <td>
																					<table width="100%" border="0">
                                                                                        <tbody><tr>
																						    <td>
																							    <table border="0" width="100%">
																								    <tbody><tr style="height: 1px">
																									    <td style="width: 50px; height: 1px">
																									    </td>
																									    <td style="background-image: url(&quot;/resources/05034/it-IT/TMIBBWEBServizi/img/riga-filtro.gif&quot;); height: 1px; visibility: hidden; display: none;">
																									    </td>
																									    <td style="width: 50px; height: 1px">
																									    </td>
																								    </tr>
																							    </tbody></table>
																						    </td>
																					    </tr>
                                                                                        <tr>
                                                                                            <td class="old-section section clearfix txt_center">
																								<table border="0" width="720px">                                                                                                    
                                                                                                    <tbody><tr>
                                                                                                        <td class="testoBlackSmall" style="text-align: right; width: 135px; white-space: nowrap">
                                                                                                        &nbsp;
                                                                                                        </td>
                                                                                                        <td class="testoBlackSmall" style="text-align: left; width: 120px; white-space: nowrap">
                                                                                                            Da
                                                                                                            :
                                                                                                        </td>
                                                                                                        <td class="testoBlackSmall" style="text-align: left; white-space: nowrap">
                                                                                                            A
                                                                                                            :
                                                                                                        </td>
																								    </tr>
                                                                                                    <tr>
                                                                                                        <td class="testoBlackSmall" style="width: 135px; white-space: nowrap">
                                                                                                            Data creazione
                                                                                                            :
                                                                                                        </td>
                                                                                                        <td style="width: 120px;">
                                                                                                            <table cellspacing="0">
                                                                                                                <tbody><tr>
                                                                                                                    <td>
                                                                                                                        <input size="11" maxlength="10" type="text" value="" name="txtDataCreazioneFrom" class="datepicker txtDataCreazioneFromYBW new-form-control hasDatepicker" onblur="javascript:this.value=checkDate(this.value,dateSyntaxMsg,dateNotValidMsg,dateNotValidYearMsg);" onkeypress="return onlyDate(event)" title="Formato data gg/mm/aaaa" id="dp1569845202849">
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <a class="icon-replace icon-calendar active" onclick="$('.datepicker.txtDataCreazioneFromYBW').datepicker('show');" href="javascript:void(0);">
                                        <img class="old-fieldCalendar txtDataCreazioneFromYBW" src="/resources/YouBiz/images/calendar.png" border="0" height="20" width="20" id="dp1569845202850"></a>
                                        <script language="javascript" type="text/javascript">
                                            $(function () { $(".txtDataCreazioneFromYBW").datepicker();});
                                        </script> 
                                      
                                                                                                                        
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <table cellspacing="0">
                                                                                                                <tbody><tr>
                                                                                                                    <td>
                                                                                                                        <input size="11" maxlength="10" type="text" value="" name="txtDataCreazioneTo" class="datepicker txtDataCreazioneToYBW new-form-control hasDatepicker" onblur="javascript:this.value=checkDate(this.value,dateSyntaxMsg,dateNotValidMsg,dateNotValidYearMsg);" onkeypress="return onlyDate(event)" title="Formato data gg/mm/aaaa" id="dp1569845202851">
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <a class="icon-replace icon-calendar active" onclick="$('.datepicker.txtDataCreazioneToYBW').datepicker('show');" href="javascript:void(0);">
                                        <img class="old-fieldCalendar txtDataCreazioneToYBW" src="/resources/YouBiz/images/calendar.png" border="0" height="20" width="20" id="dp1569845202852"></a>
                                        <script language="javascript" type="text/javascript">
                                            $(function () { $(".txtDataCreazioneToYBW").datepicker();});
                                        </script> 
                                      
                                                                                                                        
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                        </td>

                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td class="testoBlackSmall" style="width: 135px; white-space: nowrap">
                                                                                                            Tipologia
                                                                                                            :
                                                                                                        </td>
                                                                                                        <td colspan="3">
                                                                                                            <select style="width: 200px" id="cboTipologia" name="cboTipologia" class="new-form-control">
                                                                                                                <!-- caricato dinamicamente -->
                                                                                                            <option value="">TUTTI</option><option value="RH">RH Movimenti e Saldi C/C</option><option value="RP">RP Movimenti e Saldi Portafoglio</option><option value="EC">EC  Estratto Conto Periodico</option><option value="SL">SL Strutture Libere</option><option value="DT">DT Dossier Titoli</option><option value="RA">RA Conti Anticipi</option><option value="EP">EP Esiti Pagamenti</option><option value="IB">IB Esiti Ri.ba</option><option value="IM">IM Esiti M.av</option><option value="IR">IR Esiti R.I.D.</option><option value="BB">BB Esiti Bollettino Bancario</option><option value="A4">A4 Esiti di accettazione/rifiuto</option><option value="Q4">Q4 Esiti di quietanza</option><option value="AV">AV  Avvisatura Effetti</option><option value="AL">AL Esiti Allineamento Archivi</option><option value="CN">CN Conferma di Ricezione</option></select>
                                                                                                        </td>
                                                                                                    </tr>

                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>

                                                                                    </tbody></table>
                                                                                </td>
                                                                            </tr>

                                                                            <script language="javascript" type="text/javascript">
                                                                                visAvanzate();
																			</script>
                                                                            <tr>
                                                                                <td>
                                                                                    <table border="0" width="100%">
                                                                                        <tbody><tr style="height: 1px">
                                                                                            <td style="width: 50px; height: 1px">
                                                                                            </td>
                                                                                            <td style="background-image: url(&quot;/resources/05034/it-IT/TMIBBWEBServizi/img/riga-filtro.gif&quot;); height: 1px; visibility: hidden; display: none;">
                                                                                            </td>
                                                                                            <td style="width: 50px; height: 1px">
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody></table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="sfondofiltri" align="left">
                                                                                <td>
                                                                                    <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                        <tbody><tr>
                                                                                            <td style="width: 120px">
                                                                                                <span class="testoRedSmallBold">&nbsp;&nbsp;*
                                                                                                    campi obbligatori
                                                                                                </span>
                                                                                            </td>
                                                                                            <td height="30" class="old-buttons txt_center">
                                                                                                
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
                                                </tbody></table>
                                            </td>
                                        </tr>
                                    </tbody></table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    &nbsp;
                                </td>
                            </tr>
                        </tbody></table>
                    </div><div class="new-buttons"><input type="button" class="btn1" name="cmdVisualizza" value=" Visualizza" onclick="javascript:goElenco();"></div></div>
                    </form>
                    <form name="frmGoMain" id="frmgoMain" action="../recapitoFlussi/mainRecapitoFlussi.aspx" method="post">
                    <input type="hidden" name="idRapporto" value="">
                    <input type="hidden" name="TipoEsito" value="">
                    <input type="hidden" name="rowsXPage" value="">
                    <input type="hidden" name="dataDa" value="">
                    <input type="hidden" name="dataA" value="">
                    <input type="hidden" name="DataCreazioneFrom" value="">
                    <input type="hidden" name="DataCreazioneTo" value="">
                    <input type="hidden" name="FiltroCodTipologia" value="">
                    <input type="hidden" name="OpenDiv" value="">
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
    LoadTipoEsito();
    PosizionaTipoEsito();
    LoadTipologia();
    PosizionaTipologia();
    ImpostaDivOpenClosed();
    doAfterLoaded();
</script>
    

<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>
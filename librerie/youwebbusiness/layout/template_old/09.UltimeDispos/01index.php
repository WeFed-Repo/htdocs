
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
        <title>Filtro Ultime Disposizioni</title>
                <script src="../common/client/utilityCheck.js" language="javascript"></script>
				<script src="../common/client/tm_calendario.js" language="javascript"></script>
				<script language="javascript" type="text/javascript">
				    
				    function goElenco() {
				        if (!bCtrlCampi()) return;

				        document.frmGoUltimeDispo.idAzienda.value = document.form1.cboAzienda.value;
				        document.frmGoUltimeDispo.idBanca.value = document.form1.cboBanca.value;
				        document.frmGoUltimeDispo.idConto.value = document.form1.cboConto.value;
				        if (document.form1.numRows != null) {
				            document.frmGoUltimeDispo.rowsXPage.value = document.form1.numRows.value;
				        }
				        else {
				            document.frmGoUltimeDispo.rowsXPage.value = 30;
				        }
				        document.frmGoUltimeDispo.dtDa.value = document.form1.txtDataDa.value;
				        document.frmGoUltimeDispo.dtA.value = document.form1.txtDataA.value;

				        document.frmGoUltimeDispo.ImportoDA.value = document.form1.txt_ImpoDa.value;
				        document.frmGoUltimeDispo.ImportoA.value = document.form1.txt_ImpoA.value;
				        document.frmGoUltimeDispo.UltimeOperazioni.value = document.form1.cboUltOperazioni.value;

				        //Gestione cboTipoOperazioni

				        if (document.form1.cboTipoOperazioni.value != "-1") {
				            document.frmGoUltimeDispo.TipoOperazione.value = document.form1.cboTipoOperazioni.value;
				        }
				        else {
				            var result = GetTotalValuecmb(document.form1.cboTipoOperazioni);
				            if (result == "") {
				                alert('Attenzione! Nessuna tipologia di Dispositivi On Line abilitata');
				                return false;
				            }

				            document.frmGoUltimeDispo.TipoOperazione.value = result;
				        }

				        //Gestione cboStatoOperazioni
				        var valueCmb = "";
				        if (document.form1.cboStatoOperazioni.value != "-1") {
				            valueCmb = document.form1.cboStatoOperazioni.value;
				        }
				        document.frmGoUltimeDispo.StatoOperazione.value = valueCmb;

				        var valuectrDiv = "false";
				        if (CtrOpenDiv() == true) {
				            valuectrDiv = "true";
				        }
				        document.frmGoUltimeDispo.OpenDiv.value = valuectrDiv;
				        document.form1.cmdVisualizza.disabled = "disabled";
				        document.frmGoUltimeDispo.submit();
				    }

				    function ImpoDateStatoAzzFiltri(valBott) {
				    }

				    function CtrOpenDiv() {
				        if (document.form1.txt_ImpoDa.value != "") {
				            return true;
				        }
				        if (document.form1.txt_ImpoA.value != "") {
				            return true;
				        }

				        if (document.form1.cboUltOperazioni.value != "10") {
				            return true;
				        }

				        //COMMENTATO PER IL MOMENTO PERCHè UNICA DISPO VISUALIZZABILE è RICARICA TELEFONICA
				        if (document.form1.cboTipoOperazioni.value != "-1") {
				            return true;
				        }

				        if (document.form1.cboStatoOperazioni.value != "-1") {
				            return true;
				        }

				        return false;
				    }

				    function ImpostaDivOpenClosed() {
				        var ValueDiv = '';
				        document.getElementById("RowAvanzate").style.display = 'none';
				        if (ValueDiv == "true") {
				            document.getElementById("RowAvanzate").style.display = '';
				        }
				        //Tieni aperto il div avanzate
				        var bDate = 'False';
				        if (bDate == 'True') {
				            var trAvanzate = document.getElementById('RowAvanzate');
				            trAvanzate.style.display = '';
				        }
				    }

				    function GetTotalValuecmb(combo) {
				        var spl = '###';
				        var str_Val = "";
				        for (i = 0; i < combo.length ; i++) {
				            if (i > 0) {
				                str_Val += combo.options[i].value + spl;
				            }
				        }
				        str_Val = str_Val.substring(0, str_Val.length - spl.length);
				        return str_Val;
				    }

				    function CtrDataInizio(dataInizio) {
				        if ((dataInizio == ''))
				            return true;

				        var anno = dataInizio.substr(6, 4);
				        var mese = dataInizio.substr(3, 2);
				        var giorno = dataInizio.substr(0, 2);
				        var dtFiltro = new Date(anno, mese, giorno);

				        var dtpart = '02/09/2018';
				        var anno_Def = dtpart.substr(6, 4);
				        var mese_Def = dtpart.substr(3, 2);
				        var giorno_Def = dtpart.substr(0, 2);

				        var newDate = new Date(anno_Def, mese_Def, giorno_Def);
				        if (dtFiltro < newDate) {
				            return true;
				        }
				        return false;
				    }

				    function bCtrlCampi() {
				        if (document.form1.cboAzienda.value == "") {
				            alert('Selezionare un intestatario');
				            return false;
				        }

				        if (document.form1.cboBanca.value == "") {
				            alert('Selezionare una banca');
				            return false;
				        }

				        if (document.form1.cboConto.value == "") {
				            alert('Selezionare un conto');
				            return false;
				        }

				        if (document.form1.txtDataDa.value == "") {
				            alert('Inserire il campo Data esecuzione Da');
				            return false;
				        }

				        if (document.form1.txtDataA.value == "") {
				            alert('Inserire il campo Data esecuzione A');
				            return false;
				        }

				        var resValue = "";
				        resValue = checkDate_v1(document.form1.txtDataDa.value, dateSyntaxMsg, dateNotValidMsg, dateNotValidYearMsg);
				        if (resValue != "") {
				            alert(resValue);
				            return false;
				        }

				        resValue = checkDate_v1(document.form1.txtDataA.value, dateSyntaxMsg, dateNotValidMsg, dateNotValidYearMsg);
				        if (resValue != "") {
				            alert(resValue);
				            return false;
				        }

				        if (CtrlDate(document.form1.txtDataDa.value, myForm.txtDataA.value) == false) {
				            alert('La data iniziale deve essere minore o uguale di quella finale.');
				            return false;
				        }

				        if (CtrDataInizio(document.form1.txtDataDa.value) == true) {
				            alert('La data di inizio può essere retrodatata al massimo di 12 mesi rispetto alla data corrente');
				            return false;
				        }

				        if (!CtrlImportoGenerico('Importo : il valore inserito contiene più di due cifre decimali', document.form1.txt_ImpoDa)) return false;
				        if (document.form1.txt_ImpoDa.value == '0') {
				            alert('Importo : Il valore inserito deve essere maggiore di zero');
				            return false;
				        }

				        if (!CtrlImportoGenerico('Importo : il valore inserito contiene più di due cifre decimali', document.form1.txt_ImpoA)) return false;
				        if (document.form1.txt_ImpoA.value == '0') {
				            alert('Importo : Il valore inserito deve essere maggiore di zero');
				            return false;
				        }

				        return true;
				    }

				    function SetImporti() {
				        var nImpoDa = '';
				        var nImpoA = '';
				        if (nImpoDa != "") {
				            myForm.txt_ImpoDa.value = nImpoDa;
				        }
				        if (nImpoA != "") {
				            myForm.txt_ImpoA.value = nImpoA;
				        }
				    }

				    function LoadUltimeOperazioni() {
				        var myForm = eval('document.form1');
				        var arrModulo = 'TUTTE_0,Ultime 10_10,Ultime 50_50,Ultime 100_100';
				        var Modulosplit = arrModulo.split(',');
				        for (i = 0; i < Modulosplit.length ; i++) {
				            subSplit = Modulosplit[i].split('_');
				            iName = new Option(subSplit[0], subSplit[1], false, false);
				            myForm.cboUltOperazioni.options[i] = iName;
				        }
				    }

				    function PosizionaUltimeOperazioni() {
				        var myForm = eval('document.form1');
				        var idtUO = '';
				        if (idtUO != "") {
				            setValueCombo(myForm.cboUltOperazioni, idtUO);
				        }
				    }

				    function PosizionaTipoOperazioni() {
				        var myForm = eval('document.form1');
				        var idtTO = '';
				        if (idtTO != "") {
				            setValueCombo(myForm.cboTipoOperazioni, idtTO);
				        }
				    }

				    function LoadStatoOperazioni() {
				        var myForm = eval('document.form1');
				        var arrModulo = 'TUTTE_-1,In attesa_S1,Revocata_S2,Ineseguita_S3,Eseguita_S4,A scadenza_S6,Da autorizzare_S5';
				        var Modulosplit = arrModulo.split(',');
				        for (i = 0; i < Modulosplit.length ; i++) {
				            subSplit = Modulosplit[i].split('_');
				            iName = new Option(subSplit[0], subSplit[1], false, false);
				            myForm.cboStatoOperazioni.options[i] = iName;
				        }
				    }

				    function PosizionaStatoOperazioni() {
				        var myForm = eval('document.form1');
				        var idtSO = '';
				        if (idtSO != "") {
				            setValueCombo(myForm.cboStatoOperazioni, idtSO);
				        }
				    }

				    var dateSyntaxMsg = 'Il formato della data non è corretto';
				    var dateNotValidYearMsg = 'L\'anno deve essere compreso tra il 1900 e il 2050';
				    var dateNotValidMsg = 'La data inserita non è valida';

				</script>

				<script src="../common/client/tm_calendario.js" language="javascript"></script>
        

<link href="/resources/YouBiz/css-new/essentials.css?v=10" rel="stylesheet" type="text/css">
<link href="/resources/YouBiz/css-new/bootstrap.min.css?v=10" rel="stylesheet" type="text/css">
<link href="/resources/YouBiz/css-new/header-default.css?v=10" rel="stylesheet" type="text/css">
<link href="/resources/YouBiz/css-new/byWeb2014.css?v=10" rel="stylesheet" type="text/css">
<link href="/resources/YouBiz/css-new/byWeb-Business.css?v=10" rel="stylesheet" type="text/css">
<link href="/resources/YouBiz/css-new/print.css?v=10" rel="stylesheet" type="text/css">
<link href="/resources/YouBiz/css/site.css?v=10" rel="stylesheet" type="text/css">
<link href="/resources/YouBiz/css/main.css?v=10" rel="stylesheet" type="text/css">
<link href="/resources/YouBiz/css/jquery-ui.1.11.4.css?v=10" rel="stylesheet" type="text/css">


        
<script src="/resources/YouBiz/js/jquery-1.9.1.min.js?v=10" type="text/javascript"></script>
<script src="/resources/YouBiz/js/jquery-ui.min.js?v=10" type="text/javascript"></script>
<script src="/resources/YouBiz/js/alten-tmibbweb.js?v=10" type="text/javascript"></script>
<script src="/resources/YouBiz/js/calendarTM.js?v=10" type="text/javascript"></script>

		</head>
<body topmargin="0" leftmargin="0" marginwidth="0" marginheight="0">
	<table class="larghezzaEsterna old-container" cellspacing="0" cellpadding="0" border="0" align="center" height="100%">
		<tr>
			<td valign="top">
					<div style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;" onmouseover="parent.tm_middle.clearTimeOut();" onmouseout="parent.tm_middle.layerTimeOut('menu1','onmouseoutDalLayer')" id="menu1"></div>
<div style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;" onmouseover="parent.tm_middle.clearTimeOut();" onmouseout="parent.tm_middle.layerTimeOut('menu2','onmouseoutDalLayer');" id="menu2"></div><form name="form1" method="post" action="&lt;%=action_filtri%>" id="form1">
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTgwMDMwNjkyMQ9kFgJmD2QWAgIDDxBkDxYIZgIBAgICAwIEAgUCBgIHFggQBQVUVVRUSQUCLTFnEAUTUGFnYW1lbnRvIENhbm9uZSBUVgUEQk1DQ2cQBQ1QYWdhbWVudG8gTUFWBQRSRU1WZxAFDVBhZ2FtZW50byBSQVYFBFJFUlZnEAUQUGFnYW1lbnRvIFV0ZW56ZQUSVVZCRSMjI1VWQlQjIyNVVkJJZxAFDkNCSUxMIC0gcGFnb1BBBQRVVkNCZxAFCkJvbGxvIGF1dG8FBFVWQkFnEAUQUGFnYW1lbnRvIE15QmFuawUEQ0NCT2dkZGSdbrj1l2uqJXxJtXke+VaU2cchv+kDSD7/3zg3by5p4Q==" />
</div>

<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="1593D913" />
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAAvey9Z+gg1ntAplhtfYj8vnJUmREAVYu6+ocJ69F3PmOgxidgatMJHFPwlBJWtpbcymroOaXJ0Ehj21Iap4JgvEPNSq3mr0DoCNxxL+izTDh0T5OVZ0pevkWdDQm+D26rcYRfJORqi/h2pEw97fvQb31pJfSix7DPo6U1MqYOTzBd9jPLU0d0aw0U45a8M7p7j2P/DJswvaD7kyQD4TB6uBdYrtCRg3WyeWeV8B7yEvx316VyY/uUBCGl8YN342nxYMAurrvEyfpbEpKiQnWVkd" />
</div>
						<div class="old-pageContent">
							<table height="100%" class="larghezzaEsterna" cellspacing="0" cellpadding="0" border="0" align="center">
								<tr valign="top">
									<td>
									        
                                            <table class="larghezzaInternaPiccola" cellspacing="0" cellpadding="0" style="width:100%;height:100%" border="0" align="center">
                                            
											<tr>
												<td>
													<table width="100%" cellspacing="0" cellpadding="1" bgcolor="#000000" border="0">
														<tr>
															<td>
																<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
																	<tr>
																		<td height="30" class="titoloFiltri old-pageTitle" align="left">
																			&nbsp;Ultime Disposizioni
																		</td>
																	</tr>
																	<tr>
																		<td class="titoloFiltri">
																			<img src="/resources/05034/it-IT/TMIBBWEBServizi/img/riga-titolo-filtro.gif" border="0"></td>
																	</tr>
																	<tr class="sfondofiltri">
																		<td>
																			<table width="100%" cellspacing="1" cellpadding="3" border="0">
																				<tr class="sfondofiltri">
																					<td align="center" class="old-section">
																						<table width="89%" border="0">
																							<tr>
																								<td align="center">
																									
    <table border="0" class="interno_1" class="">
        <tr class="">
            
            <td  class="testoBlackSmall" nowrap>
                <span class="testoRedSmallBold">*</span>&nbsp;Rag. Soc./Intestatario:
                
            </td>
            
            <td style="text-align: left" class="testoBlackSmall">
                
                
                <select style="width:350px" onchange="writeSia(this);GetVal(this);" name="cboAzienda">
                    
                    <option value="">seleziona...</option>
                    
                </select>
            </td>
            
            
	        <td style="width:280px;padding-left:250px;" class="testoBlackSmall">
		        Sia:
	        </td>
	        <td><input type="text" size="10" readonly name="txtSia"/></td>
		                
        </tr>
        <tr class="">
        
            <td  class="testoBlackSmall">
                <span class="testoRedSmallBold">*</span>&nbsp;Banca:
                
            </td>
            
            <td style="text-align: left" class="testoBlackSmall">
                
                <select style="width:350px" onchange="writeAbi(this);GetVal(this)" name="cboBanca">
                    
                    <option value="">seleziona...</option>
                    
                </select>
            </td>
            
            
            <td style="width:350px;padding-left:250px;" class="testoBlackSmall">
			    Righe per pagina:
		    </td>
		    <td>
		                
		        <select style="width:100%" name="numRows">
		            
		            <option value="10">10</option>
		            
		            <option value="20">20</option>
		            
		            <option value="50">50</option>
		             
		            
		        </select>
		        
		    </td>
		                
        </tr>
        <tr class="">     
        
            <td  class="testoBlackSmall">
                <span class="testoRedSmallBold">*</span>&nbsp;Conto:
                
            </td>
            
            <td style="text-align: left" class="testoBlackSmall" >
                
                <select style="width:350px" name="cboConto" onchange="GetVal(this)">
                    
                    <option value="">seleziona...</option>
                    
                </select>
            </td>
            <td style="text-align: right" colspan="2">
            
            <input type="button" class="bottom" style="CURSOR:pointer" name="cmdAvanzate" value=">> Avanzate" onclick="javascript:visAvanzate();" />
            
            </td>
        </tr>
        
        
    </table>
    
    <script language="javascript" type="text/javascript" >
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
	        
                intestatario[i] = new infoIntestatario('AUTOMOBILE CLUB MODENA','AVLC9',106609);
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
            
	      
                           setValueCombo(myForm.numRows,'10');
                          
            DefaultnumRowsSelect();
            }
        }
        
        function DefaultnumRowsSelect()
        {
            
                setValueCombo(myForm.numRows,'wucSelRighe');
                
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
                if (idAzSel == '106609' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034');
					            var bName = new Option(banca[b].nome, banca[b].abi, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                
                
                //controllo l'azienda selezionata
                //alert('azienda:'+idAzSel+'--banca:'+'05034' + 'strAbiOld:' + '05034');
                if (idAzSel == '106609' ){
                    
                    
                            if ('05034' != '05034'){
    					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034');
					            var bName = new Option(banca[b].nome, banca[b].abi, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }                        
                        
                }
                
                
                //controllo l'azienda selezionata
                //alert('azienda:'+idAzSel+'--banca:'+'05034' + 'strAbiOld:' + '05034');
                if (idAzSel == '106609' ){
                    
                    
                            if ('05034' != '05034'){
    					        
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
                if (idAzSel == '106609' ){
                    //controllo la banca
                    if (idBancaSel== '05034' ){
					    rapporto[r] = new infoRapporto('12900 - IT05K0503412900000000047659.',485643);
					    var rName = new Option(rapporto[r].dsRapporto, rapporto[r].idRapporto, false, false)
					    myForm.cboConto.options[r] = rName;
					    r++;
					}
                }
		    
                
                //controllo l'azienda selezionata
                if (idAzSel == '106609' ){
                    //controllo la banca
                    if (idBancaSel== '05034' ){
					    rapporto[r] = new infoRapporto('12900 - IT24E0503412900000000047661.',485645);
					    var rName = new Option(rapporto[r].dsRapporto, rapporto[r].idRapporto, false, false)
					    myForm.cboConto.options[r] = rName;
					    r++;
					}
                }
		    
                
                //controllo l'azienda selezionata
                if (idAzSel == '106609' ){
                    //controllo la banca
                    if (idBancaSel== '05034' ){
					    rapporto[r] = new infoRapporto('12900 - IT28J0503412900000000047658.',485641);
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
        
            
                document.getElementById('aRowsXpag10').className = "testoBlackSmallBold";
            
                document.getElementById('aRowsXpag20').className = "testoBlackSmallBold";
            
                document.getElementById('aRowsXpag50').className = "testoBlackSmallBold";
             
            
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
																						</table>
																					</td>
																				</tr>
																				<tr id="RowAvanzate">
																					<td>
																						<table width="100%" border="0">
																							<tr>
																								<td>
																									<table border="0" width="100%">
																										<tr style="height: 1px">
																											<td style="width: 50px; height: 1px">
																											</td>
																											<td style="background-image: url(/resources/05034/it-IT/TMIBBWEBServizi/img/riga-filtro.gif); height: 1px">
																											</td>
																											<td style="width: 50px; height: 1px">
																											</td>
																										</tr>
																									</table>
																								</td>
																							</tr>
																							<tr>
																								<td align="center" class="old-section">
																									<table border="0" width="720px">
																										<tr>
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
																											<td class="testoBlackSmall" style=" width: 135px; white-space: nowrap">
																												Data esecuzione
																												:
																											</td>
																											<td style="width: 120px;">
																												<table cellspacing="0">
																													<tr>
																														<td>
																															<input size="11" maxlength="10" type="text" value="04/06/2019" name="txtDataDa"
                                                                                                                                class="datepicker txtDataDaYBW"
																																onblur="javascript:this.value=checkDate(this.value,dateSyntaxMsg,dateNotValidMsg,dateNotValidYearMsg);"
																																onkeypress="return onlyDate(event)" title="Formato data gg/mm/aaaa" />
																														</td>
																														<td>
																														    <a class="icon-replace icon-calendar active" onclick="$('.datepicker.txtDataDaYBW').datepicker('show');" href="javascript:void(0);">
                                        <img class="old-fieldCalendar txtDataDaYBW" src="/resources/05034/it-IT/TMIBBWEBServizi/img/icona-calendario.gif"></a>
                                        <script language="javascript" type="text/javascript">
                                            $(function () { $(".txtDataDaYBW").datepicker();});
                                        </script> 
                                      
                                                                                                                            
																														</td>
																													</tr>
																												</table>
																											</td>
																											
																											<td>
																												<table cellspacing="0">
																													<tr>
																														<td>
																															<input size="11" maxlength="10" type="text" value="01/09/2020" name="txtDataA" 
                                                                                                                                class="datepicker txtDataAYBW" 
                                                                                                                                onblur="javascript:this.value=checkDate(this.value,dateSyntaxMsg,dateNotValidMsg,dateNotValidYearMsg);"
																																onkeypress="return onlyDate(event)" title="Formato data gg/mm/aaaa" />
																														</td>
																														<td>
																														    <a class="icon-replace icon-calendar active" onclick="$('.datepicker.txtDataAYBW').datepicker('show');" href="javascript:void(0);">
                                        <img class="old-fieldCalendar txtDataAYBW" src="/resources/05034/it-IT/TMIBBWEBServizi/img/icona-calendario.gif"></a>
                                        <script language="javascript" type="text/javascript">
                                            $(function () { $(".txtDataAYBW").datepicker();});
                                        </script> 
                                      
                                                                                                                            
																														</td>
																													</tr>
																												</table>
																											</td>
																										</tr>
																										<tr>
																											<td class="testoBlackSmall" style=" width: 135px; white-space: nowrap">
																												Importo
																												:
																											</td>
																											<td style="width: 120px;">
																												<input name="txt_ImpoDa" type="text" id="txt_ImpoDa" size="20" style="text-align: right" onkeypress="return onlyRealNumbers(event)" />
																											</td>
																											
																											<td>
																												<input name="txt_ImpoA" type="text" id="txt_ImpoA" size="20" style="text-align: right" onkeypress="return onlyRealNumbers(event)" />
																											</td>
																										</tr>
																									</table>
																								</td>
																							</tr>
																							<tr>
																								<td>
																									<table border="0" width="100%">
																										<tr style="height: 1px">
																											<td style="width: 50px; height: 1px">
																											</td>
																											<td style="background-image: url(/resources/05034/it-IT/TMIBBWEBServizi/img/riga-filtro.gif); height: 1px">
																											</td>
																											<td style="width: 50px; height: 1px">
																											</td>
																										</tr>
																									</table>
																								</td>
																							</tr>
																							<tr>
																								<td align="center" class="old-section">
																									<table border="0" width="720px">
																										<tr>
																											<td class="testoBlackSmall" style=" white-space: nowrap;width:135px">
																												Ultime operazioni
																												:
																											</td>
																											<td colspan="3">
																												<select style="width: 100px" id="cboUltOperazioni" name="cboUltOperazioni">
																													<!-- caricato dinamicamente -->
																												</select>
																											</td>
																										</tr>
																										<tr>
																											<td class="testoBlackSmall" style=" white-space: nowrap">
																												Tipo operazione
																												:
																											</td>
																											<td>
                                                                                                                <select name="cboTipoOperazioni" id="cboTipoOperazioni" class="textbox">
	<option value="-1">TUTTI</option>
	<option value="BMCC">Pagamento Canone TV</option>
	<option value="REMV">Pagamento MAV</option>
	<option value="RERV">Pagamento RAV</option>
	<option value="UVBE###UVBT###UVBI">Pagamento Utenze</option>
	<option value="UVCB">CBILL - pagoPA</option>
	<option value="UVBA">Bollo auto</option>
	<option value="CCBO">Pagamento MyBank</option>

</select>
																											</td>
																											<td class="testoBlackSmall" style="text-align: right; white-space: nowrap">
																												Stato operazione
																												:
																											</td>
																											<td>
																												<select style="width: 140px" id="cboStatoOperazioni" name="cboStatoOperazioni">
																													<!-- caricato dinamicamente -->
																												</select>
																											</td>
																										</tr>
																									</table>
																								</td>
																							</tr>
																						</table>
																					</td>
																				</tr>

																				<script language="javascript" type="text/javascript">
																				    visAvanzate();
																				</script>

																				<tr>
																					<td>
																						<table border="0" width="100%">
																							<tr style="height: 1px">
																								<td style="width: 50px; height: 1px">
																								</td>
																								<td style="background-image: url(/resources/05034/it-IT/TMIBBWEBServizi/img/riga-filtro.gif); height: 1px">
																								</td>
																								<td style="width: 50px; height: 1px">
																								</td>
																							</tr>
																						</table>
																					</td>
																				</tr>
																				<tr class="sfondofiltri" align="left">
																					<td>
																						<table width="100%" cellspacing="0" cellpadding="0" border="0">
																							<tr>
																								<td style="width: 120px">
																									<span class="testoRedSmallBold">&nbsp;&nbsp;*
																										campi obbligatori
																									</span>
																								</td>
																								<td height="30" align="center" class="old-buttons">
																									<input type="button" class="bottom" name="cmdVisualizza" value=" Visualizza"
																										onclick="javascript:goElenco();" />
																								</td>
																							</tr>
																						</table>
																					</td>
																				</tr>
																			</table>
																		</td>
																	</tr>
																</table>
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td>
										&nbsp;</td>
								</tr>
							</table>
						</div>
					</form>
					<form name="frmGoUltimeDispo" id="frmGoUltimeDispo" action="../ultimeDisposizioni/UltimeDisposizioni.aspx"
						method="post">
						<input type="hidden" name="idAzienda" value="" />
						<input type="hidden" name="idBanca" value="" />
						<input type="hidden" name="idConto" value="" />
						<input type="hidden" name="rowsXPage" value="" />
						<input type="hidden" name="dtDa" value="" />
						<input type="hidden" name="dtA" value="" />
						<input type="hidden" name="UltimeOperazioni" value="" />
						<input type="hidden" name="ImportoDA" value="" />
						<input type="hidden" name="ImportoA" value="" />
						<input type="hidden" name="TipoOperazione" value="" />
						<input type="hidden" name="StatoOperazione" value="" />
						<input type="hidden" name="Divisa" value="EUR" />
						<input type="hidden" name="OpenDiv" value="" />
					</form>
			</td>
		</tr>
		

	</table>
</body>

<script language="javascript" type="text/javascript">
    LoadUltimeOperazioni();
    PosizionaUltimeOperazioni();
    PosizionaTipoOperazioni();
    LoadStatoOperazioni();
    PosizionaStatoOperazioni();
    SetImporti();
    ImpostaDivOpenClosed();
    doAfterLoaded();
</script>


    <script type="text/javascript">
        $(function () {
            $("input.btn1.small").css('margin-bottom', 0);
        });
    </script>


</html>

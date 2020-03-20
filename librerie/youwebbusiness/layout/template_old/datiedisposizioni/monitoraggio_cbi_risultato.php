    <table class="larghezzaEsterna old-container" cellspacing="0" cellpadding="0" border="0" align="center" height="100%">
        <tbody><tr>
            <td valign="top">
                <div style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;" onmouseover="parent.tm_middle.clearTimeOut();" onmouseout="parent.tm_middle.layerTimeOut('menu1','onmouseoutDalLayer')" id="menu1"></div>
<div style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;" onmouseover="parent.tm_middle.clearTimeOut();" onmouseout="parent.tm_middle.layerTimeOut('menu2','onmouseoutDalLayer');" id="menu2"></div>
                <form name="frmRecapitoFlussi" id="frmRecapitoFlussi" action="mainRecapitoFlussi.aspx" method="post">
                    <div class="container"><div class="old-pageContent new-riquadro">
                    
<script type="text/javascript">
var debug = false;
var __grid_form = null;
var __grid_form_order_field_id = null;
var __grid_form_order_mode = null;
var __grid_form_order_current_page_id = null;
var __grid_form_order_num_pages = null;

function DebugParameters(ds_name)
{
if (debug && LoadForm(ds_name))
	alert(
	"\r\n__grid_form_order_field_id=" + __grid_form_order_field_id.value +
	"\r\n__grid_form_order_mode = null=" + __grid_form_order_mode.value + 
	"\r\n__grid_form_order_current_page_id=" + __grid_form_order_current_page_id.value +
	"\r\n__grid_form_order_num_pages=" + __grid_form_order_num_pages.value);
}

function LoadForm(table_name){
__grid_form = document.frmRecapitoFlussi;
__grid_form_order_field_id = eval('__grid_form.' + table_name + '__sort_field_name');
__grid_form_order_mode = eval('__grid_form.' + table_name + '__sort_type');
__grid_form_order_current_page_id = eval('__grid_form.' + table_name + '__current_page');
__grid_form_order_num_pages = eval('__grid_form.' + table_name + '__total_pages');
}
function __sortByField(tablename,sort_field_id,sort_mode){
LoadForm(tablename);
__grid_form.target = '_self';
__grid_form_order_field_id.value=sort_field_id;
__grid_form_order_mode.value=sort_mode;
__grid_form_order_current_page_id.value='0';
DebugParameters(form, tablename);
__grid_form.submit();
}

function __sortByField(tablename,sort_field_id,sort_mode){
LoadForm(tablename);
__grid_form.target = '_self';
__grid_form_order_field_id.value=sort_field_id;
__grid_form_order_mode.value=sort_mode;
__grid_form_order_current_page_id.value='0';
DebugParameters(tablename);
__grid_form.submit();
}

function __goToNextPrevPage(tablename,direzione) {
if (isNaN(direzione)){
 alert('Parametro ' + direzione + ' non valido');
 return false;
}
else {
 LoadForm(tablename);
 __grid_form.target = '_self';
 var pagina=__grid_form_order_current_page_id.value ;
 pagina=Number(pagina)+Number(direzione);
 __grid_form_order_current_page_id.value =pagina;
 DebugParameters(tablename);
 __grid_form.submit();
 return true;
}
} 
  
function __goToBegin(tablename){
LoadForm(tablename);
__grid_form.target = '_self';
__grid_form_order_current_page_id.value=0;
DebugParameters(tablename);
__grid_form.submit();
return true;
}  

function __goToEnd(tablename){
	LoadForm(tablename);
__grid_form.target = '_self';
__grid_form_order_current_page_id.value=__grid_form_order_num_pages.value-1;
DebugParameters(tablename);
__grid_form.submit();
return true;
}

function __SetPageNumber(tablename,fielditem,fieldvalue){
LoadForm(tablename);
 if ('' + eval('__grid_form.' + fielditem + '[0]')!='undefined'){
  for (var i=0;i<eval('__grid_form.'+ fielditem).length;i++){
   eval('__grid_form.'+ fielditem)[i].value=fieldvalue;
  }
 }
}

function __goToPageNumber(tablename, fielditem){
LoadForm(tablename);

var valore =null;
if ('' + eval('__grid_form.' + fielditem + '[0]')!='undefined')
	valore = eval('__grid_form.' + fielditem + '[0].value');
else
	valore = eval('__grid_form.' + fielditem + '.value');

if (isNaN(valore)){
 alert('Parametro ' + valore + ' non valido');
 return false;
}
else {
 __grid_form.target = '_self';
 __grid_form_order_current_page_id.value = Number(valore) - 1;
 DebugParameters(tablename);
 __grid_form.submit();
 return true;
}
}  
</script>
                    
<input type="hidden" name="__PL_elencoFlussi_PL____sort_field_name" value="IDRES_RECAPITO_FLUSSI_ELENCO_PAGELIST_COL_DATAULTIMOFLUSSO"> 
<input type="hidden" name="__PL_elencoFlussi_PL____sort_type" value="d">
<input type="hidden" name="__PL_elencoFlussi_PL____current_page" value="0">
<input type="hidden" name="__PL_elencoFlussi_PL____total_pages" value="1">
<input type="hidden" name="__PL_elencoFlussi_PL____rows_per_page" value="50">

                    <table border="0" width="100%" cellspacing="0" cellpadding="0" align="center" class="old-pager" style="width: 100%;">
                        
                        
                        <tbody><tr>
                            <td class="titoloTabella">
                            <table>
                                <tbody><tr>
                                    <td class="old-pageTitle page-title"><div class="new-flag"></div><h1>Monitoraggio Flussi CBI</h1></td>
                                    <td class="td-helpTitle right">
                                        &nbsp;<a class="testoRedSmallBold old-fieldHelp " href="#" onclick="goTMHelp('mainRecapitoFlussi.aspx','0','17')"><img src="/resources/YouBiz/images/i_help.png" border="0" width="20" height="20"></a>
                                    </td>
                                    
                                </tr>                                
                            </tbody></table>
                            <br>
                            </td>
                        </tr>
                        

                        <tr>
                            <td class="txt_center">
                                <table border="0">
                                    <tbody><tr>
                                        <td class="txt_center">
                                            
    <table border="0" class="interno_1">
        <tbody><tr class="">
            
            <td style="text-align: left" class="testoBlackSmall">
                
                    <b>Rag. Soc./Intestatario</b>
                    
                <br style="font-size:smaller">
                

                <select style="width:350px" onchange="writeSia(this);GetVal(this);" name="cboAzienda" class="new-form-control">
                    
                    <option value="">seleziona...</option>
                    
                <option value="806V1">CONDOMINIO DELLA COSTA PRIMO</option><option value="A8AKM">CONDOMINIO VILLA PALENI</option><option value="A8AKZ">CONDOMINIO I GIARDINI RAPPRESENTATO</option><option value="AD770">CONDOMINIO CASA A1</option><option value="AE0RN">CONDOMINIO AMENDOLA 2</option><option value="AIRZR">CONDOMINIO IL GELSO</option><option value="B37E6">CONDOMINIO BOX DELLA COSTA</option><option value="BI9GP">CONDOMINIO ACLI</option><option value="BI9GQ">CONDOMINIO BRAMBILLA</option><option value="BI9GY">CONDOMINIO VIA MARCONI 20</option><option value="BISYC">CONDOMINIO LA TORRE</option><option value="BJ08H">CONDOMINIO MADONNINA</option><option value="BJ08I">CONDOMINIO LE BETULLE</option><option value="BJ08J">CONDOMINIO NIGRITELLA</option><option value="BJ08Q">CONDOMINIO PIROVANO</option><option value="BJ08R">CONDOMINIO S.MARCO</option><option value="BJ08S">CONDOMINIO S.ALESSANDRO</option><option value="BJMHB">CONDOMINIO C.A. CRESPI RAPP.TO P RO</option></select>
            </td>
            
            
            <td style="text-align: left" class="testoBlackSmall">
                
                    <b>Banca</b> 
                    
                    <br style="font-size:smaller">
                
                <select style="width:350px" onchange="writeAbi(this);GetVal(this);" name="cboBanca" class="new-form-control">
                    
                    <option value="">seleziona...</option>
                    
                <option value="1199041">05034 - BANCO BPM</option></select>
            </td>
            
                      
            
            <td style="text-align: left" class="testoBlackSmall">
                
            </td>
            <td style="text-align: right" colspan="3">
            
            </td>
        </tr>
        
        
        <tr>
            <td class="testoBlackSmallBold" colspan="3">
            <input type="hidden" name="wucHiidenRowsXPage" value="">
            
            <!---->
            Righe per pagina:&nbsp; 
            
            
            
            <a id="aRowsXpag50" class="testoRedSmallBold" href="javascript:ReLoad(50,true);setClassRowsXPAge(50);">50</a>&nbsp;
            
            <a id="aRowsXpag100" class="testoBlackSmallBold" href="javascript:ReLoad(100,true);setClassRowsXPAge(100);">100</a>&nbsp;
            
            <a id="aRowsXpag200" class="testoBlackSmallBold" href="javascript:ReLoad(200,true);setClassRowsXPAge(200);">200</a>&nbsp;
                  
            </td>
        </tr>            
        
    </tbody></table>
    
    <script language="javascript" type="text/javascript">
        var myForm=eval('document.frmRecapitoFlussi');    
        var intestatario = new Array();
        var rapporto = new Array();
        var banca = new Array();

        function MetaObjFiltroAziende()
        {
            this.idRapporto =myForm.cboBanca.value;
            this.sia = myForm.cboAzienda.value;
        }
    
		function writeSia(combo){
		    
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
                
                setValueCombo(myForm.cboAzienda,'806V1');
                refreshBanca(myForm.cboAzienda);
                writeSia(myForm.cboAzienda);
                
            
            //Riposiziono se unico rag sociale il valore di partenza senza "seleziona.."
            if (myForm.cboAzienda.options.length==2){
               myForm.cboAzienda.selectedIndex=1;
               writeSia(myForm.cboAzienda);
               refreshBanca(myForm.cboAzienda);
            }

	        
                setValueCombo(myForm.cboBanca,'1199041');
                
                                 setClassRowsXPAge(50);
		            
            DefaultnumRowsSelect();
        }
        
        function DefaultnumRowsSelect()
        {
            
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
		    LoadElenco(true);
		    
		}
		
		function visAvanzate()
		{
		    var myForm=eval('frmRecapitoFlussi');
            var trAvanzate=document.getElementById('');	
            if(trAvanzate.style.display =='none'){
				trAvanzate.style.display = '';
				myForm.cmdAvanzate.value = '';
			}
			else{
				trAvanzate.style.display = 'none';
				myForm.cmdAvanzate.value = '';
			}
		}
		
		doAfterLoaded();

    </script>
                                        </td>
                                        <td>
                                            <img id="imgSearch" class="old-fieldQuickFilter" style="cursor: hand" onclick="javascript:LoadElenco(valot);" src="/resources/YouBiz/images/i_quick-filter.png" border="0" alt="Applica filtro rapido" height="20" width="20">&nbsp;&nbsp;
                                            <a href="javascript:goFiltri();">
                                                <img class="old-fieldFilter" src="/resources/YouBiz/images/i_filter.png" border="0" alt="Filtri" height="20" width="20"></a>&nbsp;&nbsp;
                                        </td>
                                    </tr>
                                </tbody></table>
                            </td>
                            <td valign="bottom" class="right">
                                
                            </td>
                        </tr>
                    </tbody></table>
                    <table width="100%" cellspacing="0" cellpadding="1" border="0" class="interno_2" align="center">
                        <tbody><tr>
                            <td class="txt_center">                            
                                <table class="sfondoTabelle old-section section clearfix" cellspacing="0" cellpadding="1" border="0">
                                    <tbody><tr>
                                        <td>
                                            <table class="sfondoTabelle old-table table" cellspacing="0" cellpadding="0" border="0">
                                                
                                                <tbody><tr>
                                                    <td colspan="6">
                                                        <table border="0" cellspacing="0" class="pl_header_table" width="100%" cellpadding="0">
                                                            
                                                            <tbody><tr>
                                                                
<th colspan="1">
    <table border="0" class="pl_header" cellpadding="1" cellspacing="0">
     <tbody><tr>
      <td nowrap="" colspan="2" valign="top" class="txt_center">
       <b>Tipologia</b>
      </td>
		 </tr>
		 <tr>	
      <td valign="top" class="right">
       <a href="#" onclick="javascript:__sortByField('__PL_elencoFlussi_PL__','IDRES_RECAPITO_FLUSSI_ELENCO_PAGELIST_COL_DESCRIZTIPOLOGIA','a')"><img border="0" src="/resources/YouBiz/images/i_sort_asc-enabled.png" alt="Ordinamento crescente" width="20" class="right"></a>
      </td>
			<td valign="top" class="left">
       <a href="#" onclick="javascript:__sortByField('__PL_elencoFlussi_PL__','IDRES_RECAPITO_FLUSSI_ELENCO_PAGELIST_COL_DESCRIZTIPOLOGIA','d')"><img border="0" src="/resources/YouBiz/images/i_sort_desc-enabled.png" alt="Ordinamento descrescente" width="20" class="left"></a>
      </td>
     </tr>
    </tbody></table>
</th><th colspan="1"></th>
<th colspan="1">
    <table border="0" class="pl_header" cellpadding="0" cellspacing="0">
     <tbody><tr>
      <td nowrap="" valign="top" class="txt_center">
       <b>SIA</b>
      </td>
		 </tr>
		 <tr>	
      <td valign="top" class="right">&nbsp;</td>
		</tr>
	 </tbody></table>
</th><th colspan="1"></th>
<th colspan="1">
    <table border="0" class="pl_header" cellpadding="0" cellspacing="0">
     <tbody><tr>
      <td nowrap="" valign="top" class="txt_center">
       <b>ABI</b>
      </td>
		 </tr>
		 <tr>	
      <td valign="top" class="right">&nbsp;</td>
		</tr>
	 </tbody></table>
</th><th colspan="1"></th>
<th colspan="1">
    <table border="0" class="pl_header" cellpadding="0" cellspacing="0">
     <tbody><tr>
      <td nowrap="" valign="top" class="txt_center">
       <b>Tot.</b>
      </td>
		 </tr>
		 <tr>	
      <td valign="top" class="right">&nbsp;</td>
		</tr>
	 </tbody></table>
</th><th colspan="1"></th>
<th colspan="1">
    <table border="0" class="pl_header" cellpadding="1" cellspacing="0">
     <tbody><tr>
      <td nowrap="" colspan="2" valign="top" class="txt_center">
       <b>Data Ultimo Recapito</b>
      </td>
		 </tr>
		 <tr>
      <td valign="top" class="right">
       <a href="#" onclick="javascript:__sortByField('__PL_elencoFlussi_PL__','IDRES_RECAPITO_FLUSSI_ELENCO_PAGELIST_COL_DATAULTIMOFLUSSO','a')"><img border="0" src="/resources/YouBiz/images/i_sort_asc-enabled.png" alt="Ordinamento crescente" width="20" class="right"></a>
      </td>
			<td valign="top" class="left">
       <img border="0" src="/resources/YouBiz/images/i_sort_desc-disabled.png" width="20" class="left">
      </td>
     </tr>
    </tbody></table>
</th><th colspan="1"></th>
<th colspan="1">
    <table border="0" class="pl_header" cellpadding="1" cellspacing="0">
     <tbody><tr>
      <td nowrap="" colspan="2" valign="top" class="txt_center">
       <b>Esiti Recapiti</b>
      </td>
		 </tr>
		 <tr>	
      <td valign="top" class="right">
       <a href="#" onclick="javascript:__sortByField('__PL_elencoFlussi_PL__','IDRES_RECAPITO_FLUSSI_ELENCO_PAGELIST_COL_ESITORECAPITI','a')"><img border="0" src="/resources/YouBiz/images/i_sort_asc-enabled.png" alt="Ordinamento crescente" width="20" class="right"></a>
      </td>
			<td valign="top" class="left">
       <a href="#" onclick="javascript:__sortByField('__PL_elencoFlussi_PL__','IDRES_RECAPITO_FLUSSI_ELENCO_PAGELIST_COL_ESITORECAPITI','d')"><img border="0" src="/resources/YouBiz/images/i_sort_desc-enabled.png" alt="Ordinamento descrescente" width="20" class="left"></a>
      </td>
     </tr>
    </tbody></table>
</th>
                                                            </tr>
                                                            <tr class="odd"><td class="left">&nbsp;RH - Movimenti e Saldi C/C</td><td class="txt_center"></td><td nowrap="" class="pl_txt txt_center">806V1</td><td class="txt_center"></td><td nowrap="" class="pl_txt txt_center">05034</td><td class="txt_center"></td><td nowrap="" class="pl_txt txt_center"><a class="testolinkbold_nflussi" href="#" onclick="javascript:dettTipoFlussi('1199041','RH');">25</a></td><td class="txt_center"></td><td nowrap="" class="pl_txt txt_center">12/01/2019</td><td class="txt_center"></td><td nowrap="" class="pl_txt txt_center"><img alt="Flussi inoltrati correttamente" src="/resources/05034/it-IT/TMIBBWEBServizi/img/grnbull.gif" align="center"></td></tr><tr class="even"><td class="left">&nbsp;RP - Movimenti e Saldi Portafoglio</td><td class="txt_center"></td><td nowrap="" class="pl_txt txt_center">806V1</td><td class="txt_center"></td><td nowrap="" class="pl_txt txt_center">05034</td><td class="txt_center"></td><td nowrap="" class="pl_txt txt_center"><a class="testolinkbold_nflussi" href="#" onclick="javascript:dettTipoFlussi('1199041','RP');">20</a></td><td class="txt_center"></td><td nowrap="" class="pl_txt txt_center">12/01/2019</td><td class="txt_center"></td><td nowrap="" class="pl_txt txt_center"><img alt="Flussi inoltrati correttamente" src="/resources/05034/it-IT/TMIBBWEBServizi/img/grnbull.gif" align="center"></td></tr><tr class="odd"><td class="left">&nbsp;Q4 - Esiti di quietanza</td><td class="txt_center"></td><td nowrap="" class="pl_txt txt_center">806V1</td><td class="txt_center"></td><td nowrap="" class="pl_txt txt_center">05034</td><td class="txt_center"></td><td nowrap="" class="pl_txt txt_center"><a class="testolinkbold_nflussi" href="#" onclick="javascript:dettTipoFlussi('1199041','Q4');">1</a></td><td class="txt_center"></td><td nowrap="" class="pl_txt txt_center">17/12/2018</td><td class="txt_center"></td><td nowrap="" class="pl_txt txt_center"><img alt="Flussi inoltrati correttamente" src="/resources/05034/it-IT/TMIBBWEBServizi/img/grnbull.gif" align="center"></td></tr>
                                                            
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
                    <input type="hidden" name="idRapporto" value="1199041">
                    <input type="hidden" name="dataDa" value="">
                    <input type="hidden" name="dataA" value="">
                    <input type="hidden" name="TipoEsito" value="">
                    <input type="hidden" name="rowsXPage" value="50">
                    <input type="hidden" name="DataCreazioneFrom" value="">
                    <input type="hidden" name="DataCreazioneTo" value="">
                    <input type="hidden" name="FiltroCodTipologia" value="">
                    <input type="hidden" name="OpenDiv" value="False">
                    <input type="hidden" name="PageSelected" value="-1">
                    </div><div class="new-buttons"></div></div>
                </form>
                <form name="frmElenco" id="frmElenco" method="post" action="mainRecapitoFlussi.aspx">
                    <input type="hidden" name="idRapporto" value="">
                    <input type="hidden" name="dataDa" value="">
                    <input type="hidden" name="dataA" value="">
                     <input type="hidden" name="TipoEsito" value="">
                    <input type="hidden" name="rowsXPage" value="">
                    <input type="hidden" name="PageSelected" value="">
                    <input type="hidden" name="DataCreazioneFrom" value="">
                    <input type="hidden" name="DataCreazioneTo" value="">
                    <input type="hidden" name="FiltroCodTipologia" value="">
                    <input type="hidden" name="OpenDiv" value="">
                </form>
                <form name="frmGoFiltri" id="goFiltri" method="post" action="filtroRecapitoFlussi.aspx" target="_self">
                    <input type="hidden" name="idRapporto" value="">
                    <input type="hidden" name="dataDa" value="">
                    <input type="hidden" name="dataA" value="">
                    <input type="hidden" name="rowsXPage" value="">
                    <input type="hidden" name="TipoEsito" value="">
                    <input type="hidden" name="DataCreazioneFrom" value="">
                    <input type="hidden" name="DataCreazioneTo" value="">
                    <input type="hidden" name="FiltroCodTipologia" value="">
                    <input type="hidden" name="OpenDiv" value="">
                </form>
                <form name="frmDettTipoFlussi" id="frmDettTipoFlussi" method="post" action="dettaglioRecapitoFlussi.aspx">
                    <input type="hidden" name="idRapporto" value="">
                    <input type="hidden" name="tipologia" value="">
                    <input type="hidden" name="dataDa" value="">
                    <input type="hidden" name="dataA" value="">
                    <input type="hidden" name="TipoEsito" value="">
                    <input type="hidden" name="rowsXPage" value="">
                    <input type="hidden" name="DataCreazioneFrom" value="">
                    <input type="hidden" name="DataCreazioneTo" value="">
                    <input type="hidden" name="FiltroCodTipologia" value="">
                    <input type="hidden" name="OpenDiv" value="">
                    <input type="hidden" name="PageSelected" value="-1">
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
    doAfterLoaded();
 </script>
    



    <script type="text/javascript">
        $(function () {
            $(".old-pager").css("width", "100%");
        });
    </script>
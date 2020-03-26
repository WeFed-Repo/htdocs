
/**
 * Funzione di push per singolo titolo, usata nel Book o nel riquadro Quotazioni
 **/
function startStream(hostToUse, codMercatoInfo, symbol, nomeTabella, isPush, tokenMsg){
    var lsClient = new LightstreamerClient(hostToUse, "MFI_ADAPTER");
    if(isPush!=null && isPush==true){
    	lsClient.connectionSharing.enableSharing("pushConnection", "ATTACH", "CREATE");
    	lsClient.connectionOptions.setRetryTimeout(10000);
    	lsClient.connectionOptions.setReconnectTimeout(20000);
    	lsClient.connectionOptions.setConnectTimeout(5000);
    	lsClient.connectionDetails.setUser(tokenMsg);
    } else {
    	lsClient.connectionSharing.enableSharing("pollConnection", "ATTACH", "CREATE");
    	lsClient.connectionOptions.setForcedTransport('HTTP-POLLING');
    	lsClient.connectionOptions.setPollingMillis(1000);
    	lsClient.connectionDetails.setUser(tokenMsg);
    }	
    lsClient.addListener({ onServerError: function(code,msg) {
        alert("Error code: " + code + " message: " + msg);
      }
    });
    lsClient.connect();
     var tabGrid = new StaticGrid(nomeTabella,true);
     tabGrid.setAutoCleanBehavior(true,false);
     tabGrid.addListener({
       onVisualUpdate: function(key,info) {
         if (info == null) {
        	 //cleaning
           return;
         }
         info.forEachChangedField(function(field ,value){
        	 info.setCellStyle(field, "hotStyle", null);
        	 var dom = $('[data-grid="'+nomeTabella+'"][data-field="'+field+'"]')
        	 var formatType = dom.attr('frmType');
        	 info.setCellValue(field,formatCell(formatType,value));
        	
         });
       
    	 /////////GESTIONE IMMAGINE TREND/////////////////
         if(symbol==null){ 
        	 var trendField = info.getChangedFieldValue("VAR_PERC");
        	 if(trendField!=null){	 
        		 if (('' + trendField).indexOf('-') > -1) {			
        			 $('div[data-item="'+key+'"][data-field="VAR_PERC"]').parent().removeClass('positivo');
        			 $('div[data-item="'+key+'"][data-field="VAR_PERC"]').parent().addClass('negativo');
        		 } else {
        			 $('div[data-item="'+key+'"][data-field="VAR_PERC"]').parent().removeClass('negativo');
        			 $('div[data-item="'+key+'"][data-field="VAR_PERC"]').parent().addClass('positivo');
        		 }
        	 }
        	
        	 var imfField = info.getChangedFieldValue("TRDDIR_CAH");
             if(imfField != null){
            	 $('img[name="'+key+'img"]').attr('src',trendFmtImg(imfField));
             }
         } else {
        	 var imfField = info.getChangedFieldValue("TRDDIR");
             if(imfField != null){
            	 $('#'+nomeTabella+'freccia').attr('src',trendFmtPush(imfField));
             }
         }
         /////////////////////////////////////////////////
       }      
      });

     var tabubScription = null;
     if(symbol==null){
    	// console.log("tabGrid.extractItemList() "+tabGrid.extractItemList());
    	tabubScription = new Subscription("MERGE",tabGrid.extractItemList(),tabGrid.extractFieldList());
     } else {
        var str = 'QUOTE.-.'+codMercatoInfo+'.'+symbol+'.0.TYPE';
    	tabubScription = new Subscription("MERGE",str,tabGrid.extractFieldList());	 
     }
     tabubScription.addListener(tabGrid);
     tabubScription.setRequestedSnapshot("yes");
     try{
    	 lsClient.subscribe(tabubScription);
     }catch(e){
     	alert(lsClient.getStatus()+lsClient.getSubscriptions()+e) ;	
     }
}

/*****************************************************************
 *********************GESTIONE PUSH PER JQGRID********************
 *****************************************************************/

function startStreamGrid(hostToUse, nomeTabella, tokenMsg){
	//hashmap per le formattazioni
	var mapFormat = new HashMap();
	//hashmap per associare symbol e rowId
	var mapSymbol2Id = new HashMap();
	 var contList = new Array();
	////////////da gestire in modo dinamico da file di conf////////////
	var mercatiPush = "MTA|ETF|MOT|SEDEX";
	/////////////////////////////////////////////////////////////////// 
	
  	//costruisco array dei symbol per i titoli in portafoglio
  	var strPush = [];var pushIndx = 0;
  	var strPol = [];var polIndx = 0;
  	var dataDim = $('#'+nomeTabella+'').getDataIDs().length;

  	for(i=0; i<dataDim; i++){
  		cdMerc = $('#'+nomeTabella+'').getCol('codMercatoInfo')[i];
  		simbolo = $('#'+nomeTabella+'').getCol('simbolo')[i];
  		dataId = $('#'+nomeTabella+'').getCol('datiJqGrid.id')[i];
  		rit=$('#'+nomeTabella+'').getCol('ritardo')[i];
  		if(rit==null) rit='0';
  		if(cdMerc!="" && simbolo!=""){
  			//if(rit==0){
  				strPush[pushIndx] = 'QUOTE.-.'+cdMerc+'.'+simbolo+'.'+rit+'.TYPE';
  				pushIndx++;
  				mapSymbol2Id.put('QUOTE.-.'+cdMerc+'.'+simbolo+'.'+rit+'.TYPE', dataId);
  			//}
  			//HashMap per associare symbol e rowId
  			
  		}
  	}
  	
  	//costruisco hashmap per FORMATTAZIONE e anche per i PARAMETRI delle quote
  	var model = $('#'+nomeTabella+'').jqGrid('getGridParam', 'colModel');
    var fieldList = new Array();
  	pos = 0;
  	for(i=0; i<model.length; i++){
  		mapFormat.put(model[i].name, [model[i].formatter,model[i].formatoptions]);
  		var indx = model[i].push;
  		if(indx !== null && indx !== '' && indx !== undefined && indx == 'S'){
  		    fieldList[pos] = model[i].name;
  			pos++;
  		}
  	}
  	
  	//////SOTTOSCRIZIONE PER TITOLI PUSH	
  	if(strPush!=null && strPush.length>0){
  		//client push per titoli (MTA ETF MOT SEDEX)

  		var lsPushClient = createClient(hostToUse, "pushGridConnection", true, tokenMsg);
  		lsPushClient.addListener({ onServerError: function(code,msg) {
  	        console.log("Error code: " + code + " message: " + msg);
  	      }
  	    });
  		lsPushClient.connect();
  		
  		//subscription della jQGrid per titoli push
  		var gridPushScription = createSubscription(strPush, fieldList, nomeTabella, mapFormat, mapSymbol2Id);
  		lsPushClient.subscribe(gridPushScription);
  	}
  	//////SOTTOSCRIZIONE PER TITOLI POLL
  	if(strPol!=null && strPol.length>0){
	    //client pop per titoli di mercati diversi da (MTA ETF MOT SEDEX)
	    var lsPolClient = createClient(hostToUse, "popGridConnection", false, tokenMsg);
	    lsPolClient.connect();
	    
	    //subscription della jQGrid per titoli pop
	    var gridPolScription = createSubscription(strPol, fieldList, nomeTabella, mapFormat, mapSymbol2Id);
	    lsPolClient.subscribe(gridPolScription);
  	}
  	
    
}


function createClient(hostToUse, connName, isPush, tokenMsg){
    var client = new LightstreamerClient(hostToUse, "MFI_ADAPTER");
    //console.log("tokenMsg: "+tokenMsg);
    if(isPush!=null && isPush==true){
    	client.connectionSharing.enableSharing(connName, "ATTACH", "CREATE");
    	client.connectionDetails.setUser(tokenMsg);
    } else {
    	client.connectionSharing.enableSharing(connName, "ATTACH", "CREATE");
    	client.connectionOptions.setForcedTransport('HTTP-POLLING');
    	client.connectionOptions.setPollingMillis(3000);
    	client.connectionDetails.setUser(tokenMsg);
    }	
    //client.connect();
    return client;
}

function createSubscription(str, fieldList, nomeTabella, mapFormat, mapSymbol2Id){
	var tabubScription = new Subscription("MERGE",str,fieldList);
    tabubScription.setRequestedSnapshot("yes");
   	var model = $('#'+nomeTabella+'').jqGrid ('getGridParam', 'colModel');
    setInterval(function(){svuotatutto(nomeTabella,model.length,fieldList.length)},1500);

    tabubScription.addListener({
      onItemUpdate: function(obj) {
    	//console.log("OBJ: "+obj.getItemName());
        var idRow = mapSymbol2Id.get(obj.getItemName());
        var rowData = {};
       // $("#"+ idRow).removeClass('ui-widget-content');
        obj.forEachChangedField(function(fName,fPos,val) {
        	//console.log("OBJ2: "+idRow+">>"+fName+">>"+fPos+">>"+val);
    
    		formatByName(mapFormat.get(fName), val,fName,fPos);
    		if((obj.getItemName()).indexOf('.0.TYPE')>0){
    			$('#'+nomeTabella+'').jqGrid('setCell',idRow,fName,val,{'background': '#fff89d'},'');
    		} else {
    			$('#'+nomeTabella+'').jqGrid('setCell',idRow,fName,val,{'background': '#cccccc'},'');
    		}
    		if(fName === 'VAR_PERC') {    			
				if(val >= 0) {	
					$('#'+nomeTabella+'').jqGrid('setCell', idRow, fName, '', {'color':'#289730'});
	        	} else {
	        		$('#'+nomeTabella+'').jqGrid('setCell', idRow, fName, '', {'color':'#b40101'});
	        	}				
			}
        	});
		}      
     });
    return tabubScription;
}


/**
 * Formatta il value in funzione del formatter specificato nella jQGrid
 **/

function formatByName(objFormat,value){
	if(objFormat[1] !== null && objFormat[1] !== undefined ){
		objFormat[1].isLightFormat=true;
		opts=objFormat[1]; 
	} 
	cellval=value;
	eval(objFormat[0]);//eseguo la funzione di formattazione
}

/**
 * formattazione per book e quote
 **/
function formatCell(formatType, value,cellName,pos){

	if(formatType == 'T'){
		return value
	}else if(formatType == 'D4'){
		return decimalFormat(value,4);
	}else if(formatType == 'D0'){
		return decimalFormat(value,0);
	}else if(formatType == 'D2'){
		return decimalFormat(value,2);
	}else if(formatType == 'TREND'){
		 return trendFmtPush(value);
	}else if(formatType == 'H1'){
		 
		 return $.fmatter.util.DateFormat('d/m/Y H:i', value, 'H:i', $.jgrid.formatter.date);
	}else if(formatType == 'H2'){
		
		 return $.fmatter.util.DateFormat('H:i', value, 'H:i', $.jgrid.formatter.date);
	}
	return value;
}

/**
 * formattazione  immagine freccia rossa/verde per quote
 **/
function trendFmtPush(cellvalue) {
	if(cellvalue == '3') {
		$('#quoteTabfreccia').attr('src',"/HT/IMAGES/TOL/b_stabile.gif");
		return "/HT/IMAGES/TOL/b_stabile.gif";
	} else if(cellvalue == '2') {
		$('#quoteTabfreccia').attr('src',"/HT/IMAGES/TOL/b_scende_rossa.gif");
		return "/HT/IMAGES/TOL/b_scende_rossa.gif";
	} else if(cellvalue == '1') {
		$('#quoteTabfreccia').attr('src',"/HT/IMAGES/TOL/b_cresce_verde.gif");
		return "/HT/IMAGES/TOL/b_cresce_verde.gif";
	} else {
		return '&nbsp;';
	}
}

function trendFmtImg(cellvalue) {
	if(cellvalue == '3') {
		return "/HT/IMAGES/TOL/b_stabile.gif";
	} else if(cellvalue == '2') {
		return "/HT/IMAGES/TOL/b_scende_rossa.gif";
	} else if(cellvalue == '1') {
		return "/HT/IMAGES/TOL/b_cresce_verde.gif";
	} else {
		return '&nbsp;';
	}
}

function decimalFormat(val, decimal){
	var frm = $.jgrid.formatter.number;
	frm.decimalPlaces = decimal;
	frm.thousandsSeparator=".";
	frm.decimalSeparator=",";
	return $.fmatter.util.NumberFormat(val,frm);
}



	function svuotatutto(nomeTabella){
		
		var $grid = jQuery('#'+nomeTabella+''), rows = $grid[0].rows, cRows = rows.length,
	    iRow, rowId, row, cellsOfRow;

		for (iRow = 0; iRow < cRows; iRow++) {
		    row = rows[iRow];
		  
		    if ($(row).hasClass("jqgrow")) {
		        cellsOfRow = row.cells;
		     
		        for (iCol = 0; iCol < cellsOfRow.length; iCol++) {
		        	 //console.log("** rows "+iCol+" >>"+$(cellsOfRow[iCol]).text());
		        	 cell = cellsOfRow[iCol];
		        	 $(cellsOfRow[iCol]).css({'background':'repeat-x scroll left top #f5f5f5'});
		        	
		        }
	
		    }
		}	
	}

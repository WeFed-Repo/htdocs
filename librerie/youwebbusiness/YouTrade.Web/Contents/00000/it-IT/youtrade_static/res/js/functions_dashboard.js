/** 
 * Copyright 2015 Enterprise S.p.A. (Rome, Italy).  
 * Use is subject to license terms. All rights reserved. 
 *  
 *  http://www.enterprisespa.it 
 */

var recProcessArr = [];
var processInUso = "";
var subProcessInUso = "";
var margin_ = 0;
var isGestionaleConLista = false;
var disabledNavigation = false;


/* Rileva l'ultimo processo con  lo status == SP/IC/OK */
function detectDefaultProcessSubProc(){
	
	var recProcess = "";
	
	if(recProcessArr.length<=0){return;}
	
	for(i=0;i < recProcessArr.length;i++){
		recProcess = recProcessArr[i].name;
		//se status non attivo esce
		if(recProcess!=""){
			var status = recProcess.substring(27,29);
			var id_ = recProcessArr[i].id;
			if(status=="SP" || status=="IC" || status=="OK"){ 
				if(id_.length==2){
					processInUso = recProcessArr[i].id;//processo
				}else if(id_.length==4){
					subProcessInUso = recProcessArr[i].id;//sotto processo
				}
			}
		}
	};
	changeProcess(processInUso, true);
};

/* cambia il processo */
function changeProcess(idProc, isFirstTime){
	
	processInUso = idProc;
	
	var obj = $("#"+idProc);
	var recProcess = "";
	for(i=0;i<recProcessArr.length;i++){
		if(recProcessArr[i].id == idProc){
			recProcess = recProcessArr[i].name;
		}
	}
	
	//se status non attivo esce
	if(recProcess!="") if(recProcess.substring(27,29)=="NA") return;
		
	var idSubProc = idProc+"01";
	
	//ripulisce le TLL di sotto processo e funzione
	document.forms['formInserimento'].elements["C94510"].value = "";
	document.forms['formInserimento'].elements["C9451F"].value = "";
	//valorizza 9451P - Tll del processo selezionato
	document.forms['formInserimento'].elements["C9451P"].value = recProcess;
	
	//change processo
	changeSubProcess(idSubProc, isFirstTime);
	
}

/* cambia il sotto processo */
function changeSubProcess(idSubProc, isFirstTime){
	subProcessInUso = idSubProc;
	
	var obj = $("#"+idSubProc);
	var recSubProcess = "";
	for(i=0;i<recProcessArr.length;i++){
		if(recProcessArr[i].id == idSubProc){
			recSubProcess = recProcessArr[i].name;
		}
	}
	
	var trackingBox = "#trk"+idSubProc;
	
	trackingInUso = "#contentTrackScrollable" + idSubProc;
	
	//omino runner su status
	//setTrackingRunner();
	
	//ripulisce le TLL di sotto processo e funzione
	document.forms['formInserimento'].elements["C9451F"].value = "";
	//valorizza 9451S - Tll del sotto processo selezionato
	document.forms['formInserimento'].elements["C9451S"].value = recSubProcess;
}

/* Rileva l'ultimo processo/sottoprocesso/funzione tracking a cui impostare l'omino running == SP/IC/OK */
/*function setTrackingRunner(){
	
	var recProcess = "";
	var trackingRunnerID = "";
	
	for(i=0;i<recProcessArr.length;i++){
		recProcess = recProcessArr[i].name;

		if(recProcess!=""){
			var status = recProcess.substring(27,29);
			var id_ = recProcessArr[i].id;
			
			if(id_.length==6 && (id_.substring(0,4) == (subProcessInUso))){
				if(status=="SP" || status=="IC" || status=="OK" || status=="CO"){ 
					trackingRunnerID = "#runner"+id_;
				}
			}
		}
	}
	if(trackingRunnerID != ""){
		$(trackingRunnerID).show();
	}
}*/


function openNavigationItem(column, row, progFunzRecord){
	
//	if(disabledNavigation)return; //progetti funzione con navigation/action disabilitati

	//Riassegno il valore della Tll per non perdere il puntamento al record selezionato 
	if(document.forms["formInserimento"].elements["C9451F"])document.forms["formInserimento"].elements["C9451F"].value = row;
    
	var funzione = "";
	var params = "&CFITEM=N&AFITEM=D"; // questo flag se valorizzato a 'N' identifica che proveniamo da un Navigation Item

	switch(column) {
	    case "swift":
	    	funzione = "06T318";
	    	break;
	    case "comunicazioniDaBanca":
	    	funzione = "06T308";  
	    	break;
	    case "comunicazioniABanca":
	    	funzione = "06T611";  
	    	break;
	    case "scanner":
	    	funzione = "06D319";
	    	break;
	    case "stampa":
	    	//callPrintService("92C001");
	    	return;
	    	break;
	    case "show":
			//funzione = progFunzRecord.substring(0,2) + "V" + progFunzRecord.substring(3,6);
	    	var funzOriginaria = document.forms['formInserimento'].FUNZIONE.value;
	    	funzione = funzOriginaria.substring(0,2) + "P" + funzOriginaria.substring(3,6);
	    	break;
	    default:
	    	alert("Operazione non gestita.");
	        return;
	}
	
	params = params + PAR_BACK + NAV_Y;
	doCallServer('', false, funzione, params);// esegue la submit della form
	
};
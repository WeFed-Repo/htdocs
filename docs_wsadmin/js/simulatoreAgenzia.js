function initialize() {
	with (document.catAg) {
		if (assicState.value == 'true') {
			assicurazioni.disabled = true;
		}
	}
}

function checknumber(x){
var anum=/(^\d+$)|(^\d+\,\d+$)/
if (anum.test(x)){
    return true;
}else{
    return false
}
}
function initPercfinanziamento(){
  var perc = $('#perc').val().split("\|");
  var primacasa = $('#primacasa').val().split("\|");
  for (i=0;i<perc.length;i++){
    if (i==0){
      $('#percFinanziamento').val(perc[i]);
      if ("SI"==primacasa[i]){
    	  $('#bPrimaCasa').attr('checked','checked');
      }
    }else if (i==1){
    	$('#percFinanziamento_int1').val(perc[i]);
        if ("SI"==primacasa[i]){
      	  $('#bPrimaCasa_int1').attr('checked','checked');
        }
    }else if (i==2){
    	$('#percFinanziamento_int2').val(perc[i]);
        if ("SI"==primacasa[i]){
      	  $('#bPrimaCasa_int2').attr('checked','checked');
        }
    }
  }
	
}
function valida(){   

   with (document.catAg) {
	   var fldFinalita = finalita.value;
	   var importoMinimo = 50000;
	   var ltvValue = 0.8;
	if (fldFinalita=='SURO'){
		importoMinimo = 80000;
		ltvValue = 0.8;
	}
	if (valoreimmobile.value==0 || valoreimmobile.value==""){
	    alert("Valorizzare il valore dell'immobile");
	    valoreimmobile.focus();
	    return false;
	}
	if (importomutuo.value==0 || importomutuo.value==""){
	    alert("Valorizzare l'importo del mutuo");
	    importomutuo.focus();
	    return false;
	}
	var tempNum = parseInt(importomutuo.value);
	var maxImporto = parseFloat(valoreimmobile.value)*ltvValue;	
	var maxMutuo = parseInt(Math.round(maxImporto) + '');
	if (tempNum<importoMinimo || tempNum > maxMutuo){
	    alert("L'importo del mutuo dev'essere superiore a " + importoMinimo + " e inferiore a " + maxMutuo + " euro");
	    importomutuo.focus();
	    return false;
	}

	if (durata.value==0 || durata.value==""){
	    alert("Valorizzare la durata del mutuo");
	    durata.focus();
	    return false;
	}
	var durataMinima = 120;
	var durataMassima = 360;
	if (durata.value<durataMinima || durata.value>durataMassima){
	    alert("La durata dev'essere compresa tra " + durataMinima + " e " + durataMassima + " anni");
	    durata.focus();
	    return false;
	}

	if (spread.value!="" && spread.value!=0){
	    if (!checknumber(spread.value)){
		alert("Valorizzare correttamente lo spread");
		spread.focus();
		return false;
	    }
	}	

   }
   return true;
}
function submitForm(azione, codice, finalita, originalFinalita, defaultSubFinalita, originalSubFinalita){
	if (valida()){	
    var perc = "";
    var primacasa = "";
    var valField = $.trim($('#percFinanziamento').val());
    
    if (""!=valField){
      perc = perc + valField;
      primacasa = primacasa + ($('#bPrimaCasa').is(':checked')?"SI":"NO");      
    }
    valField = $.trim($('#percFinanziamento_int1').val());
    if (""!=valField){
      perc = perc + "|"+valField;
      primacasa = primacasa +"|"+ ($('#bPrimaCasa_int1').is(':checked')?"SI":"NO");
      
    }
    valField = $.trim($('#percFinanziamento_int2').val());
    if (""!=valField){
    	perc = perc + "|"+valField;
    	primacasa = primacasa +"|"+ ($('#bPrimaCasa_int2').is(':checked')?"SI":"NO");      
    }
    $('#perc').val(perc);
    $('#primacasa').val(primacasa);
    
		if (azione==0){ // ripristina catalogo
			document.catAg.idCatalogo.value = document.catAg.idCatalogoOld.value;
		}
		if (azione==1){ // pulisci catalogo
			document.catAg.idCatalogoOld.value=document.catAg.idCatalogo.value;
			document.catAg.idCatalogo.value="";
		}
		if (azione==2){ // richiesta comparativo prodotti
			document.catAg.codicemutuo.value="";
		}
		if (azione==3){ // richiesta dettaglio prodotto
			document.catAg.codicemutuo.value=codice;
		}
		if (azione==4){ // aggiornamento simulazione
			document.catAg.step.value = '2';
			document.catAg.action = '/wetools/admin/2l/do/bankingadmin/richiestaMol2.do';
		}	
		if (azione==5){ // cambio finalita' catalogo
			if (codice == finalita) {
				return false;
			}
			document.catAg.finalitaCatalogo.value=finalita;
			document.catAg.idCatalogoOld.value=document.catAg.idCatalogo.value;
			document.catAg.codicemutuo.value="";
			if (originalFinalita == finalita) {
				document.catAg.finalita.value=originalSubFinalita;
				document.catAg.idCatalogo.value=document.catAg.originalIdCatalogo.value;
			}
			else {
				document.catAg.finalita.value=defaultSubFinalita;
				document.catAg.idCatalogo.value="";
			}
		}
		document.catAg.submit();
	}
}
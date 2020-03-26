jQuery(function($){
    $.datepicker.regional['it'] = {
            closeText: 'Chiudi',
            prevText: '&#x3c;Prec',
            nextText: 'Succ&#x3e;',
            currentText: 'Oggi',
            monthNames:
['Gennaio','Febbraio','Marzo','Aprile','Maggio','Giugno','Luglio','Agosto','Settembre','Ottobre','Novembre','Dicembre'],
            monthNamesShort:
['Gen','Feb','Mar','Apr','Mag','Giu','Lug','Ago','Set','Ott','Nov','Dic'],
            dayNames:
['Domenica','Luned&#236','Marted&#236','Mercoled&#236','Gioved&#236','Venerd&#236','Sabato'],
            dayNamesShort: ['Dom','Lun','Mar','Mer','Gio','Ven','Sab'],
            dayNamesMin: ['Do','Lu','Ma','Me','Gi','Ve','Sa'],
            dateFormat: 'dd/mm/yy',
            firstDay: 1,
            isRTL: false};
    $.datepicker.setDefaults($.datepicker.regional['it']); 
});
//Pulisco gli spazi
function trim(s){
	return s.replace( /^\s*/, "" ).replace( /\s*$/, "" );
}

//funzione generica che permette di eseguire il submit di una specifica form
//idForm nome dell'id della form di cui si vuole eseguire il submit
//i nomi dei campi hidden da utilizzare vanno passati come nome valore
//Es. se si vuole fare un submit di una form formEseguiPagina ed assegnare i seguenti valri codiceChiave=123 e codiceChiave2=456
//    si dovrà chiamare la funzione nel seguente modo:
// submitForm('formEseguiPagina','codiceChiave','123','codiceChiave2','456') 
// N.B. si possono passare quanti parametri si vuole sempre la coppia nome valore
function submitForm(idForm) {
	var objForm=document.getElementById(idForm);
	if (objForm!=null) {
		for(var i=1;i<arguments.length;i+=2){
			var obj=objForm[arguments[i]];
			if (obj!=null)
				
				obj.value=arguments[i+1];
		}		
		objForm.submit();
	}
}

function ApriPopup(FileToOpen, W, H, rif, Full) {
	var stFull=(Full=='S'?'1':'0');
	var W=(W==''?'800':W);
	var H=(H==''?'550':H);
	var rif=(rif==''?'POPUP':rif);
	try {
		winpopup=window.open(FileToOpen, rif,"width=" + W + ",height=" + H + ",toolbar="+stFull+",location="+stFull+",status="+stFull+",menubar="+stFull+",resizable=yes,scrollbars=yes");}
	catch (err) {}
	if (winpopup==null) {
		var strMsg="";
		strMsg=strMsg+"ATTENZIONE.\n";
		strMsg=strMsg+"L'apertura di un popup informativo è stata bloccata dal sistema.\n";
		strMsg=strMsg+"Per una completa e corretta navigazione, si consiglia di aggiungere\n";
		strMsg=strMsg+"questo indirizzo ai siti abilitati all'apertura di finestre popup.\n";
		alert(strMsg);}
  else {
		try {		
			winpopup.window.focus();}
		catch (err) {}
		}
	return;
}
            
function validateDate(form, fieldName, descError) {
	try{
		var field = $('input[name='+fieldName+']', form);
		$.datepicker.parseDate('dd/mm/yy', field.val());
	} catch(err) {
		alert(descError);
		return false;
	}
	return true;
}

function checkNum(num) {
	var len = num.length;
		
	var checkOK="0123456789";
	var allValid=true;
	
	for (var i = 0; i < len; i++) {
		ch=num.charAt(i);

		if(checkOK.indexOf(ch)<0)
			return false;
	}
		
	return true;
}
function trimSpaziECaratteri(parola) {	
	var a = 0;
 	var lung = parola.length;

 	while (a < lung) {
 		nChar = parola.charCodeAt(a);
  
		if ((nChar>=48 && nChar<=57) || (nChar>=97 && nChar<=122) || (nChar>=65 && nChar<=90) || nChar==32) { 
		}
		else {
			parola = parola.substring(0,a)+' '+parola.substring(a+1);
			lung = parola.length;
			a--;
			
		}
		a++;
 	}	
 	a = 0;
 	while (a < lung) {
		if (a == 0 && parola.charAt(0) == ' ') {
	 		parola = parola.substring(1);
			lung = parola.length;
			a--;
	 	}
	 	else if (a == lung-1 && parola.charAt(lung-1) == ' ') {
			parola = parola.substring(0,lung-1);
			lung = parola.length;
			a--;
	 	}
	 	else if (parola.charAt(a) == ' ')
	  		if (parola.charAt(a+1) == ' ') {
				parola = parola.substring(0,a) + parola.substring(a+1);
				lung = parola.length;
				a--;
			}
	 	a++;
 	}
 	return parola;
}

function isNum(nn) {
	var len = nn.length;

	for (var i = 0; i < len; i++) {
		if (nn.charAt(i) < '0' || nn.charAt(i) > '9') {
				return false;
		}
	}
	return true;
}

function fillZero(input, lunghezza) {
	var valore = input.value.toUpperCase();	
	var alfabetoCC = "ABCDEFGHIJKLMNOPQRSTUWYXZ0123456789";
	var ccTmp ="";
	for(var i = 0; i < valore.length; i++){
		
		if(alfabetoCC.indexOf(valore.charAt(i))>= 0){
			ccTmp = ccTmp + valore.charAt(i);
		}
	}
	valore = ccTmp;
	if (valore.length <= lunghezza && valore.length > 0 ) {
		for(var i = 1 + valore.length; i<=lunghezza; i++) {
			valore = '0' + valore;
		}
	} else if (valore.length > lunghezza) {
		valore = valore.slice(0,lunghezza);
	}
	input.value = valore;
}

//codice modifica $MOD699$

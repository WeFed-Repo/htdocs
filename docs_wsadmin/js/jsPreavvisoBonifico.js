


function valid_number(numero,min_interi,max_interi,min_decimali,max_decimali) {
  return inner_valid_number(numero,min_interi,max_interi,min_decimali,max_decimali,1);
}


function controlla_se_zero (numero) {
  if (numero==0) return 1
    else return 0;
}

	

function inner_valid_number(numero,min_interi,max_interi,min_decimali,max_decimali,leading_zero) {

  var errore=1;
  if (leading_zero)
    var rex_interi   = "^([1-9][0-9]{"  + (min_interi - 1) + "," + (max_interi - 1) + "}|^0)";
  else
    var rex_interi   = "^[0-9]{"  + (min_interi) + "," + (max_interi) + "}";

        
  var rex_decimali = "(,[0-9]{" + min_decimali + "," + max_decimali + "}){0,1}$";
  
  var rex = "";
    
  if ( max_decimali > 0 ) rex = rex_interi + rex_decimali;
  else                    rex = rex_interi + '$';

  check = new RegExp(rex);

  if (!check.test(numero)) errore = 0;

  return errore;
}


function valid_abi_cab(numero) {

  return inner_valid_number(numero,5,5,0,0,0);
}


function valid_cap(codice) {

  return inner_valid_number(codice,5,5,0,0,0);
}




function valid_account(numero_conto) {

  var errore=1;
  
  var rex   = "^[0-9a-zA-Z]{1,15}$";

  check = new RegExp(rex);

  if (!check.test(numero_conto)) errore = 0;

  return errore;
}



function valid_account_MT(numero_conto) {

  var errore=1;
  
  var rex   = "^[0-9a-zA-Z.//-]{1,20}$";

  check = new RegExp(rex);

  if (!check.test(numero_conto)) errore = 0;

  return errore;
}



function to_number(numero) {
  
  var rex   = /,/gi;

  if (valid_number(numero,1,6,0,5) == 1) {
  	return numero.replace(rex,'.');
  	
  } 
  else
  	return "nan"
}


//funzione principale di convalida
function Validate () {
  var errore = 0;

   data = document.saveForm.giorno.value
	      +'/'+document.saveForm.mese.options[document.saveForm.mese.selectedIndex].value
	      +'/'+document.saveForm.anno.options[document.saveForm.anno.selectedIndex].value

   if ((!checkdate(data)) && (errore == 0)) {
	     error(document.saveForm.giorno,"Il formato della data non e' corretto");
		 errore = 1;
   }

	if ( (!valid_number(document.saveForm.ValoreDisposto2.value,1,9,1,3)) && (errore == 0)) {
		  alert("Il formato dell'importo da trasferire non ? corretto");
	    document.saveForm.ValoreDisposto2.focus();
	    errore = 1;
	}


    document.saveForm.ValoreDisposto.value = document.saveForm.ValoreDisposto2.value;

	if ((!valid_account(document.saveForm.Conto.value)) && (errore == 0) ) {
		  alert("Il codice conto deve essere alfanumerico con eventualmente i caratteri . / -");
	    document.saveForm.Conto.focus();
	    errore = 1;
	}

	if ((!valid_abi_cab(document.saveForm.ABI.value)) && (errore == 0) ) {
		  alert("Il campo ABI deve essere un numero di 5 cifre");
	    document.saveForm.ABI.focus();
	    errore = 1;
	}

	if ((!valid_abi_cab(document.saveForm.CAB.value)) && (errore == 0) ) {
		  alert("Il campo CAB deve essere un numero di 5 cifre");
	    document.saveForm.CAB.focus();
	    errore = 1;
	}

	if ((document.saveForm.giorno.value.length < 2) && (errore == 0) ) {
		  alert("Il campo giorno nella data deve essere un numero di 2 cifre. ");
	    document.saveForm.giorno.focus();
	    errore = 1;
	}

	if ((document.saveForm.BORapportoCliente.value.length != 6) && (errore == 0) ) {
		  alert("Il Codice Conto Destinatario IntesaTrade deve essere alfanumerico di 6 caratteri. ");
	    document.saveForm.BORapportoCliente.focus();
	    errore = 1;
	}

    if (errore == 0) {
	    document.saveForm.submit();
   }
}

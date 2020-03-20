function annoOK(y){
    var anno=(new Date()).getFullYear();
    if (y<=anno && y>=1900){
       return true;
    }
    return false;
}

function PrintPage(){
     window.print();
}

function goHome(){
    document.getElementById("goHome").submit();
}

function goBack(){
    document.getElementById("goBack").submit();
}

function inviaRichiesta(){
    document.getElementById("inviaRichiesta").submit();
}

function checkNum(nn){
	str = new String (nn);
	con = 0;
	for(var k=0; k < str.length; k++){
		var c = nn.charAt(k);
		if ( !(c >= '0'  &&  c <= '9')){
			con ++;
			return false;
		}else{
			if (k == (str.length-1)){ 
				return true;
			}
		}
	}
}

function checkImp(nn){
	if(isEmpty(nn)){ 
		return false;
	}
	str = new String (nn);
	con = 0;
	for(var k=0; k < str.length; k++){
		var c = nn.charAt(k);
		if (!(c >= '0'  &&  c <= '9')){
			con ++;
			return false;
		}else{
			if (k == (str.length-1)){ 
				return true;
			}
		}
	}
}

function checkPlafondS(nn){
	if (isEmpty(nn)){ 
		return false;
	}
	if (nn<500 | nn>7800){ 
		return false;
	}else{
		return true;
	}
}

function checkPlafondR(nn){
	if(isEmpty(nn)){ 
		return false;
	}
	if(nn<500 | nn>7800){
		return false;
	}else{ 
		return true;
	}
}

function isEmpty(s){
	return ((s==null) || (s.length==0))
}


function prosegui_plafond1300(){
	var form= document.getElementById("inviaRichiesta");
	
	//controlli sulla corretta compilazione della form di richiesta cartaimpronta con plafond>1500
	if(form.ultima_assunzione.value!="" && !checkNum(form.ultima_assunzione.value)){
	   alert("L'anno dell'ultima assunzione deve essere composto da numeri");
	   return;
	}else if(form.ultima_assunzione.value!="" && !annoOK(form.ultima_assunzione.value)){
	   alert("L'anno dell'ultima assunzione deve essere compreso tra il 1900 e "+(new Date()).getFullYear());
	   return;
	}else if(form.stato_civile.value==""){
	   alert("Indicare lo stato civile");	   
	   form.stato_civile.focus();
	   return;
	}else if(form.nazionalita.value==""){		
	   alert("Indicare la nazionalit�");
	   form.nazionalita.focus();
	   return;
	}else if(form.n_componenti.value==""){
	   alert("Inserisci il numero dei componenti familiari");
	   form.n_componenti.focus();
	   return;
	}else if(form.n_componenti.value!="" && !checkNum(form.n_componenti.value)){
	   alert("Il numero dei componenti familiari deve essere un numero");
	   form.n_componenti.focus();
	   return;
	}else if(form.n_componenti.value!="" && form.reddito_comp.value==""){
	   alert("Inserisci il numero dei componenti familiari con reddito");
	   form.reddito_comp.focus();
	   return;
	}else if(form.n_componenti.value!="" &&(!checkNum(form.reddito_comp.value) || (form.n_componenti.value<form.reddito_comp.value))){
	   alert("Il numero dei componenti familiari con reddito deve essere un numero\nminore o uguale ai componenti totali");
	   form.reddito_comp.focus();
	   return;
	}else if(form.categoria.options[form.categoria.selectedIndex].value!="non lavoratore"){		  
		if (form.settore.value==""){
	   	   alert("Inserisci il settore dell'attivit�");
	   	   form.settore.focus();
	   	   return;
		}
		if(form.categoria.value==""){
	       alert("Inserire la categoria professionale");
	       form.categoria.focus();
	   	   return;
		}
		if(form.professione.value==""){
	        alert("Indicare la professione");
	        form.professione.focus();
	     	return;
	    }
	    if((form.professione.options[form.professione.selectedIndex].value!="disoccupato")&& (form.professione.options[form.professione.selectedIndex].value!="studente") && (form.professione.options[form.professione.selectedIndex].value!="pensionato") && (form.professione.options[form.professione.selectedIndex].value!="redditiere") && (form.professione.options[form.professione.selectedIndex].value!="casalinga")  ){
        	if(form.lav_dal.value==""){
	       		alert("Inserisci da quanti anni lavori");
	       		form.lav_dal.focus();
	       		return;
	    	}
    		if(form.lav_dal.value!="" && !checkNum(form.lav_dal.value)){
	      		alert("Gli anni di lavoro deve essere un numero");
	      		form.lav_dal.focus();
	       		return;
	    	}
	    }		
		if(form.ultima_assunzione.value==""){
	 	  alert("Inserisci l'anno dell'ultima assunzione");
	 	  return;
		} 
	}	    	  	  	      	    	     	     	 
	 //Informazioni sulla abitazione
	if(!form.prop_imm[0].checked && !form.prop_imm[1].checked){
	   alert("Indicare se si � proprietario di immobili");	   
	   form.prop_imm[0].focus();
	   return;
	}else if(form.sit_abitativa.value==""){
	   alert("Indicare la situazione abitativa");
	   form.sit_abitativa.focus();
	   return;
	}else if(form.tipo_tel.value==""){
	   alert("Indicare il tipo di numero di telefono");
	   form.tipo_tel.focus();
	   return;
	}else if(form.tel.value==""){
	   alert("Inserisci il numero di telefono");
	   form.tel.focus();
	   return;
	}else if(!checkNum(form.tel.value)){
	   alert("Il numero di telefono deve essere composto da soli numeri");
	   form.tel.focus();
	   return;
	}else if(form.var_domicilio.value==""){
	   alert("Inserisci l'anno dell'ultima variazione del domicilio");
	   form.var_domicilio.focus();
	   return;
	}else if(form.var_domicilio.value!="" && !checkNum(form.var_domicilio.value)){
	   alert("L'anno dell'ultima variazione del domicilio deve essere composto da numeri");
	   form.var_domicilio.focus();
	   return;
	}else if(form.var_domicilio.value!="" && !annoOK(form.var_domicilio.value)){
	   alert("L'anno dell'ultima variazione del domicilio deve essere compreso tra il 1900 e "+(new Date()).getFullYear());
	   form.var_domicilio.focus();
	   return;
	}else if(form.carte_pos.value==""){
	   alert("Indicare le carte possedute");
	   form.carte_pos.focus();
	   return;
	}else if(!form.bancomat[0].checked && !form.bancomat[1].checked){
	   alert("Indicare se si possiedono bancomat");
	   form.bancomat[0].focus();
	   return;
	}else if(form.reddito_netto.value==""){
	   alert("Inserisci il reddito netto da lavoro/pensione");
	   form.reddito_netto.focus();
	   return;
	}else if(form.reddito_netto.value!="" && !checkNum(form.reddito_netto.value)){
	   alert("Il reddito netto da lavoro/pensione deve essere composto da numeri");
	   form.reddito_netto.focus();
	   return;
	}else if(!form.accredita_stip[0].checked && !form.accredita_stip[1].checked){
   	   alert("Indicare se si intende accreditare lo stipendio");
   	   form.accredita_stip[0].focus();
   	   return;
	}else if(form.redditi_costanti.value!="" && !checkNum(form.redditi_costanti.value)){
	   alert("Gli altri redditi costanti e certi devono essere composti da numeri");
	   form.redditi_costanti.focus();
	   return;
	}else if(form.prestiti_rateali.value!="" && !checkNum(form.prestiti_rateali.value)){
	   alert("Il valore per i prestiti rateali deve essere composto da numeri");
	   form.prestiti_rateali.focus();
	   return;
	}else if(form.mutui.value!="" && !checkNum(form.mutui.value)){
	   alert("Il valore relativo al mutuo deve essere composto da numeri");
	   form.mutui.focus();
	   return;
	}else if(form.affitto.value!="" && !checkNum(form.affitto.value)){
	   alert("Il valore per l'affitto deve essere composto da numeri");
	   form.affitto.focus();
	   return;
	}else{
		form.submit();
	}
}


function pop_up_helpvp(){
    var s_width=screen.width;
    var s_height=screen.height;
    var url ="";
    url = "http://mail.webank.it/helpBV.nsf/elenco/VPCartimpronta?OpenDocument";
    if(s_width>=1024 && s_height>=768){
       window.open(url,'main','width=250,height=410,top=130,left=760,status=yes,toolbar=yes,menubar=no,resizable=no,scrollbars=yes');
    }else{
       window.open(url,'main','width=250,height=410,top=130,left=530,status=yes,toolbar=yes,menubar=no,resizable=no,scrollbars=yes');
    }
}


function plafondControlli1300(){
	// Inizializzazione array errori
	var errors = [];
	// Acquisizione dei campi
	var form = $("#inviaRichiesta");
	var ultima_assunzione = form.find("input[name=ultima_assunzione]");
	var stato_civile = form.find("select[name=stato_civile]");
	var n_componenti = form.find("input[name=n_componenti]");
	var reddito_comp = form.find("input[name=reddito_comp]");
	var categoria = form.find("select[name=categoria]");
	var settore = form.find("select[name=settore]");
	var professione = form.find("select[name=professione]");
	var prop_imm = form.find("input:radio[name=prop_imm]:checked" ).val();
	var prop_imm_Wrap = $("#prop_imm_ricWrap");
	var sit_abitativa = form.find("select[name=sit_abitativa]");
	var action = form.find("input[name=actionType]").val();

	
	if($("#checkinfo").length){
		if(!$('#toolID').hasClass('closeable')){
			if (!$("#checkinfo").is(':checked')) {
				errors.push({ field: $("#checkinfo"), text: "Seleziona" });
			}
		}else if(!$("#checkinfo").is(':checked')) {
			errors.push({ field: $("#checkinfo"), text: "Prima di procedere, occorre prendere visione dell'informativa, aprendo il relativo pdf" });
		}
	}else if(action.indexOf("inviaRichiesta") == -1){
	
		//controlli sulla corretta compilazione della form di richiesta cartaimpronta con plafond>1300
		if(ultima_assunzione.val()!="" && !checkNum(ultima_assunzione.val())){
			errors.push({ field: $('#ultima_assunzione_label'), text: "L'anno dell'ultima assunzione deve essere composto da numeri"});
		}else if(ultima_assunzione.val()!="" && !annoOK(ultima_assunzione.val())){
			errors.push({ field: $('#ultima_assunzione_label'), text: "L'anno dell'ultima assunzione deve essere compreso tra il 1900 e "+(new Date()).getFullYear()});
		}
			
		//Informazioni anagrafiche
		if(stato_civile.val()==""){
			errors.push({ field: $('#stato_civile_label'), text: "Indicare lo stato civile"});
		}
		
		if(n_componenti.val()==""){
			errors.push({ field: $('#n_componenti_label'), text: "Inserisci il numero dei componenti familiari"});
		}else if (n_componenti.val()!="" && !checkNum(n_componenti.val())){
		   errors.push({ field: $('#n_componenti_label'), text: "Il numero dei componenti familiari deve essere un numero"});
		}if (reddito_comp.val()=="" && !checkNum(reddito_comp.val())){
			errors.push({ field: $('#reddito_comp_label'), text: "Specifica il numero dei componenti familiari con reddito"});
		}else if (n_componenti.val()!="" &&(!checkNum(reddito_comp.val()) || (n_componenti.val()<reddito_comp.val()))){
			errors.push({ field: $('#reddito_comp_label'), text: "Il numero dei componenti familiari con reddito deve essere un numero minore o uguale ai componenti totali"});
		}
		
		//Informazioni sulla professione
		
		if (categoria.val()!="non lavoratore"){		  
			if (settore.val()==""){
		   	   errors.push({ field: $('#settore_label'), text: "Inserisci il settore dell'attivit�"});
			}
			if (categoria.val()==""){
		       errors.push({ field: $('#categoria_label'), text: "Inserire la categoria professionale"});
			}
			if (professione.val()==""){
		        errors.push({ field: $('#professione_label'), text: "Indicare la professione"});
		    }
			if (ultima_assunzione.val()==""){
		 	   errors.push({ field: $('#ultima_assunzione_label'), text: "Inserisci l'anno dell'ultima assunzione"});
			} 
		}	    	  	  	      	    	     	     	 
		
		//Informazioni sulla abitazione
		if (typeof(prop_imm)  === "undefined"){
		   errors.push({ field: $('#prop_imm_label'), text: "Indicare se si � proprietario di immobili"});
		}
		if (sit_abitativa.val()==""){
		   errors.push({ field: $('#sit_abitativa_label'), text: "Indicare la situazione abitativa"});
		}
	}
	
	// Effettuare qui i vari controlli e fare il push dei vari errori
	
	if (errors.length){
		// Visualizzazione degli errori
		setHasErrors(errors, '#inviaRichiesta');
	}else{
		form.submit();
	}
}

//Abilitazione del checkbox
$("#pdfLink").on("click", function(){
	var cb = $("#checkinfo");
	$('#toolID').removeClass('closeable');
	$('#toolID').removeClass('hovfin');
	cb.prop("disabled",false);
});

//attivazione-disattivazione delle combo per settore e professione
function nonLavoratore(){
	var valoreCat = $("#categoria option:selected" ).val();
	var settore = $("#settore");
	var professione = $("#professione");
	var ultima_assunzione = $("#ultima_assunzione");
	
	if(valoreCat == "non lavoratore" || valoreCat == "" || valoreCat == "null"){
		settore.prop( "disabled", true );
		settore.val("");
		professione.prop( "disabled", true );
		professione.val("");
		ultima_assunzione.prop( "disabled", true );
		ultima_assunzione.val("");
	}else{
		settore.prop( "disabled", false );
		professione.prop( "disabled", false );
		ultima_assunzione.prop( "disabled", false );
	}
}

$("#n_componenti").focus(function(){
	$(this).val('');
});

$("#reddito_comp").focus(function(){
	$(this).val('');
});

$("#ultima_assunzione").focus(function(){
	$(this).val('');
});


//controlli
$("#plafond1300").click(plafondControlli1300);

$("#categoria").on("change", nonLavoratore);
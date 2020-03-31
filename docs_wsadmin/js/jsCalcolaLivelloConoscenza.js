
function CalcolaLivelloConoscenza() {
	var livello, r1, r2, r3;
	r1 = getCheckedValue(document.SaveForm.PRispostaAppropriatezza1);
	r2 = getCheckedValue(document.SaveForm.PRispostaAppropriatezza2);
	r3 = getCheckedValue(document.SaveForm.PRispostaAppropriatezza3);
	if (typeof document.SaveForm.PFlagNonRisponde != 'undefined' &&
		document.SaveForm.PFlagNonRisponde.checked == true) {
		livello = 3;
	} else if (r1 == '0') {
		livello = 0;
	} else if (r1 == '1' || (r1=='2' && r2=='0' && r3=='0') ) {
		livello = 1;
	} else if (r1 == '2' && ( r2 == '1' || r3 == '1' )) {
		livello = 2;
	} else {
	livello = -1;
	}	
	document.SaveForm.PLivelloConoscenza.value = livello;
}

function getCheckedValue(radioObj) {
	if(!radioObj)
		return "";
	var radioLength = radioObj.length;
	if(radioLength == undefined)
		if(radioObj.checked)
			return radioObj.value;
		else
			return "";
	for(var i = 0; i < radioLength; i++) {
		if(radioObj[i].checked) {
			return radioObj[i].value;
		}
	}
	return "";
}

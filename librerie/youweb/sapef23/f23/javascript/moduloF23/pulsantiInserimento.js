function moduloF23functionJS(action){ 
	if (!getSubmitted()) {
		mostra_loading_screen();
	   	document.f23MainForm.action = action;
	  	document.f23MainForm.target = 'frCenter';
	   	document.f23MainForm.submit();
	}
}

function annullaF23JS() {
	if (!isAlreadySubmitted()) {
      	if (confirm('Sei sicuro?')) {
      		esci();
      	}
    }
}

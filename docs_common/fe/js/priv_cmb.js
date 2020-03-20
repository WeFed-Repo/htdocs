
/* VARIABILI GLOBALI */
var cmbInit = false,
	cmbDataUrl = (!isLib) ? "" : "/librerie/include/commons/ajax/priv_cmbdata.json" ,
	cmbPostUrl = "";

/* GRUPPO DI FUNZIONI PER INTERATTIVITA' */
/* Funzione refresh per select fasce orarie (in base all'indice) */
cmbGChange = function () {
	cmbF.empty();
	// individua l'indice
	var orari = cmbData[cmbG.find("option:selected").index()].orari;
	$.each(orari,function(i,v){
		cmbF.append($("<option>").attr("value",v).html(v));
	});
}

/* CHECK DATI ED ERRORI (ev. esternalizzabile) */
cmbCheckData = function() {
	/* SOLO EMULAZIONE */
	/* Attualmente vengono messi tutti i campi in errore, ma basta compilarne uno (telefono) affinche' questo non avvenga */

	var errors = [];

	/* Controlli (emulati)*/
	if (cmbPhone.val() === '') {
		errors.push({ field: cmbPhone, text: "Occorre indicare un numero di telefono" });
	}
	/* Fine controlli */

	setHasErrors(errors, "#cmbForm");
	if (errors.length) {
		$(errors[0].field).trigger('focus');
		event.preventDefault();
	}
	return !(errors.length>0);
}

/* POST DATI */
cmbPostData = function () {
	/* Se viene bypassata la funzione */
	if (cmbCheckData()) {
		cmbForm.addClass("loading");
		cmbForm.hide();
		$("#cmbFeedbackOk").show();
	}

}


/*CARICAMENTO */
cmbLoad = function(){

	// Inizializza tutto
	if (!cmbInit)
	{
		// Campi (eventualmente sostituire laddove richiesto)
		cmbPhone = $("#cmbPhone");
		cmbG = $("#cmbGiorno"),
		cmbF = $("#cmbFascia"),
		cmbForm = $("#toolCmbForm"),
		cmbInit = true;

		// Azione sul pulsante
		cmbButton = $("#cmbButton").click(cmbPostData);

	}
	// Mette il form in loading (nasconde i campi con un overlayer)
	cmbForm.addClass("loading");

	// Carica i dati esterni per gli orari
	$.ajax({
		url: cmbDataUrl,
		success: function (data) {
			cmbForm.removeClass("loading");
			// valoregiorno
			cmbData = data;
			// Inizializza i 2 elementi select
			cmbG.empty().on("change",cmbGChange),
			$.each(cmbData,function(i,v){
				cmbG.append($("<option>").attr("value",v.giorno).html(v.valoregiorno));
			});
			cmbG.trigger("change");
		}
	});
}
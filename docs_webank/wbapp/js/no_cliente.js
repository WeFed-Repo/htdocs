// Variabili generiche

// Sviluppo e produzione
postAction = "/webankpub/wb/customerContact.do?";
// Librerie
// postAction = "/librerie/include/commons/ajax/wbapp_nocliente.php";

$(function(){
	$("#wrapper").removeClass("pageloading");
	
	// Inizializza i radio button
	radioClick = function() {
		var rb = $(this);
		var rbw = rb.parents(".radio");
		rbw.find("input[name="+ rb.attr("data-fieldname") +"]").val(rb.attr("data-value"));
		rbw.find(".radiobut").removeClass("checked");
		rb.addClass("checked");
	}
	
	$.each($("div.radio"),function(i,v){
		var rWrap = $(v);
		var radioName = rWrap.find("input[type=radio]").eq(0).attr("name");
		rWrap.prepend($("<input>").attr({"type":"hidden","name":radioName,"id":radioName}));
		$.each(rWrap.find("input[type=radio]"),function(i,v){
			//Replacement ed inizializzazione dell'input
			var rb = $(v);
			var frb = $("<a>").addClass("radiobut").attr({"data-value":rb.attr("value"),"data-fieldname":rb.attr("name")}).click(radioClick);
			rb.parent().prepend(frb);
			if (rb.attr("checked")) frb.trigger("click");
			rb.remove();
		});
		
	});
	
	// Inizializza gli accordion
	$(".btn").click(function(){
		acc = $(this).parents(".accordion");
		if (!acc.hasClass("opened"))
		{
			// chiude tutti gli accordion aperti
			$(".accordion").removeClass("opened");
			acc.addClass("opened");
		}
		
	});
	
	// SUBMIT FORM
	btnSubmit = $("#formsubmit");
	
	// ERRORE GENERICO
	btnGenericError = function() {
		bp.addClass("error");
		bp.find(".button").html("KO");
		bp.find(".msg").html("Si &egrave; verificato un errore.<br>Riprovare pi&ugrave; tardi.")
	}
	
	
	formErrors = function(arrError) {
			$.each(arrError, function(i,v){
				$("#"+v).parents(".fieldwrap").addClass("error");
			});
			bp.removeClass("loading").addClass("error");
			bp.find(".button").html("KO");
			bp.find(".msg").html("I dati inseriti non sono corretti");
			
		};
	
	
	
	btnSubmit.click(function(){
		bp = btnSubmit.parents(".btnconsole");
		/* test del form */
		if (!(bp.hasClass("disabled") || bp.hasClass("confirm")|| bp.hasClass("error") || bp.hasClass("loading"))){
			// Se il bottone non è disabilitato, non e' ok o ko
			
			// Mette il form in loading
			bp.addClass("loading");
			ncForm = $("#ncform");
			
			// Resetta tutti gli errori
			ncForm.find(".error").removeClass("error");
			
			// Controlla la compilazione dei valori immessi ed, eventualmente, mostra un errore
			inputArr = ncForm.serializeArray();
			inputErr = false;
			inputErrFields = new Array();
			$.each(inputArr, function(i,v){
				if (v.value.length <= 0)
				{
					// Controlli incrociati
					if (v.name == "cellulare" || v.name == "telefono") {
						if($("#telefono").val().length<=0 && $("#cellulare").val().length<=0) 
							{
								inputErrFields.push(v.name);
								inputErr = true;
							}
					}
					else
					{
						// Controllo di compilazione
						inputErrFields.push(v.name);
						inputErr = true;
					}
				}
			});
			
			if (inputErr) {
				formErrors(inputErrFields);
			}
			else
			{
				// Esegue la chiamata AJAX
				$.ajax({
					url: postAction,
					dataType: "json",
					data: $("form").eq(0).serialize(),
					success: function(data){
						// Elabora la risposta
						if (data.esito){
							// Identifica l'esito in base agli errori
							if (data.esito == "ko") {
								// Setta gli errori
								formErrors(data.errorfields);
							}
							else
							{
								// Inserimento avvenuto con successo
								bp.removeClass("loading").addClass("confirm");
								bp.find(".button").html("OK");
								bp.find(".msg").html("Dati inviati con successo");
							}
						}
						else
						{
							btnGenericError();
						}
					},
					error: btnGenericError
				});
			}
		}
	});
	
	// Emulazione controlli in linea 
	$("#ncform input[type=text], #ncform select, #ncform a.radiobut").click(function(){
		btnSubmit.parents(".btnconsole").removeClass("disabled error confirm loading");
	});
});
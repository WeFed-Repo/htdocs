//funzione di inizializzazione delle finta select 
//parametri: oggetto per costruire le option + eventuale funzione di callmeback

$.fn.initSelectCustom = function (sourceParams, cmbfunction) {
	//definisco variabili di partenza
	var scWrapper = $(this),
		scName = sourceParams.nameSel,
		scId = sourceParams.idSel,
		dataOptions = sourceParams.dataOptions;
		
    //definisco le variabili semaforo per determinare il tipo di finta select
	//casistica checkbox
	var isTypeCheckbox = function () {
		return scWrapper.hasClass("has-checkbox") === true ? true : false
	}
	//casistica bottone funzionale
	var isTypeBtnFunc = function () {
		return scWrapper.hasClass("has-btn") === true ? true : false
	}

	//componenti per costruzione html
	var classType = isTypeBtnFunc() ? "btn" : "form-control" // se è un bottone funzionale aggiungo classe type altrimenti classe per le select
	scEl = $("<a>")
		.attr("class", "dropdown-toggle select-custom-option-el " + classType)
		.attr("id", "dp" + scId)
		.attr("data-toggle", "dropdown")
		.attr("aria-haspopup", "true") //elemento select a seconda del tip diventa una select o un bottone
		.attr("aria-expanded", "true"),
		inputHidden = $("<input type='hidden' value=''>").attr("name", "inputHidden" + scName), //input hidden da completare con il value se già selected
		optionsWrapperEl = $("<ul class='select-custom-options-wrapper dropdown-menu'>").attr("aria-labelledby", "dp" + scId); //wrapper delle options
		
	//costruzione html
	//cicla creando le options a seconda della tipologia
	$(dataOptions).each(function (index) {
		var selectedIndex,
			isOptionsSelected = function () {
				return (dataOptions[index].selected !== "undefined" && dataOptions[index].selected === true) ? true : false
			}
		//restituisce il valore selected
		if (isOptionsSelected()) {
			selectedIndex = index
		}

		var optionEl = $("<li class='select-custom-option'>").attr("data-value", dataOptions[index].value);
		//se è una voce selezionata appendo la classe apposita

		if (selectedIndex === index) {
			optionEl.addClass("option-selected")
		}
		//select semplice o select multipla con checkbox a seconda dell'attributo presente nella select
		optionsWrapperEl.append(optionEl);

		//se è semplice select stilizzata
		if (!isTypeCheckbox()) {
			var optionText = $("<a class='select-custom-option-el'>");
			optionEl.append(optionText.html(dataOptions[index].text));
		}
		//se è con checkbox
		else {
			var optionText = $("<a class='form-check-inline checkbox select-custom-option-el'><input type='checkbox' id='sccheckbox" + index + "'" + "value=" + dataOptions[index].value + "><label class='select-custom-option-el'></label></a>");
			optionEl.append(optionText).find("label").html(dataOptions[index].text);
		}
	})
	var scDefaultText = scWrapper.attr("data-placeholder") ? scWrapper.attr("data-placeholder") : "Seleziona";

	var selectObj = scEl.html(scDefaultText); //crea la select con il placeholder
	scWrapper.append(selectObj, inputHidden, optionsWrapperEl); //appende al div esterno la select, l'input hidden e ul wrapper della options

	
	//azioni al click sulle voci
	scWrapper.find(".dropdown-menu .select-custom-option").click(function (e) {
		var optionSelected = $(this)
			scIhidden = scWrapper.find("input[type=hidden]").eq(0),
			scVselected = scWrapper.find(".dropdown-toggle");
		// Caso select checkbox
		if (isTypeCheckbox()) {
			var scCheck = scWrapper.find("input[type=checkbox]"),
				scvalCheck = [],
				optionAll = optionSelected.attr("data-value") === "all",
				allSelected = false;
			$('.dropdown-menu.show').on('click', function (e) {
				e.stopPropagation();
			});
			if (!optionAll) {
				optionSelected.find("input[type=checkbox]").prop("checked", !optionSelected.find("input[type=checkbox]").prop("checked"));
			}
			//se viene selezionato tutti...
            else {
				if(optionSelected.find("input[type=checkbox]").prop("checked"))
				{
					scCheck.prop("checked",false);
					allSelected = false;
				} 
				else {
					scCheck.prop("checked",true);
					allSelected = true;
				}
			}
			var scCheckChecked = scWrapper.find("input[type=checkbox]:checked");
			
			//popola la select con le voci selezionate
			$.each(scCheckChecked, function (i, v) {
				if($(v).val() !== "all") scvalCheck.push($(v).val());
			});
			scIhidden.val(scvalCheck.join(","));
		}
		//caso select button funzionale
		else if (isTypeBtnFunc()) {
			scVselected.empty().html(optionSelected.text());
		}
		
		//caso select di default
		else {
			//popola la select con la voce selezionata, popola l'input hidden
			scVselected.empty().html(optionSelected.text());
			scIhidden.val(optionSelected.attr("data-value"));
		}
		// appende la classe selected
		toggleSelected(optionSelected);
	})

	//funzione per il toogle della classe selected
	var toggleSelected = function (elSel) {
		if(!isTypeCheckbox()) {
			scWrapper.find(".select-custom-option").removeClass("option-selected")
			elSel.addClass("option-selected");
		}
		else {
			elSel.toggleClass("option-selected");
		}
	}

	//al load eseguo un eventuale click sul selected per popolare la voce principale
	scWrapper.find(".dropdown-menu .option-selected").click();

	//eventuale funzione di callmeback
	if (cmbfunction) cmbfunction();
}
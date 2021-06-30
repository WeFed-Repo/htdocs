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
	var classType = isTypeBtnFunc() ? "button" : "form-control" // se è un bottone funzionale aggiungo classe type altrimenti classe per le select
	scEl = $("<a>")
		.attr("class", "dropdown-toggle select-custom-option-el " + classType)
		.attr("id", "dp" + scId)
		.attr("data-toggle", "dropdown")
		.attr("aria-haspopup", "true") //elemento select a seconda del tip diventa una select o un bottone
		.attr("aria-expanded", "false")
		.attr("href","javascript:;")
		.attr("role","button"),
		optionElAll = $("<li class='select-custom-option all'>")
		.attr("data-attr-value","all")
		.attr("data-attr-text",sourceParams.labelSelectAll)
		.append($("<a class='form-check-inline checkbox select-custom-option-el dropdown-item' href='javascript:;'><input type='checkbox' value='all' id='scCheckboxAll' class='check-all'><label class='select-custom-option-el'>" + sourceParams.labelSelectAll + "</label></a>")); //elemento options select all
		inputHidden = $("<input type='hidden' value=''>").attr("name", "inputHidden" + scName).attr("id", "inputHidden" + scName), //input hidden da completare con il value se già selected
		optionsWrapperEl = $("<ul class='select-custom-options-wrapper dropdown-menu'>").attr("aria-labelledby", "dp" + scId).attr("role","menu"); //wrapper delle options
		
	//costruzione html
	//se con check prevedere check all come prima voce della tendina di options
    if(isTypeCheckbox() && sourceParams.labelSelectAll){
		optionsWrapperEl.append(optionElAll);
	}
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

		var optionEl = $("<li class='select-custom-option'>").attr("data-attr-value", dataOptions[index].value).attr("data-attr-text", dataOptions[index].text);
		//se è una voce selezionata appendo la classe apposita

		if (selectedIndex === index) {
			optionEl.addClass("option-selected")
		}
		//select semplice o select multipla con checkbox a seconda dell'attributo presente nella select
		optionsWrapperEl.append(optionEl);

		//se è semplice select stilizzata
		if (!isTypeCheckbox()&& !isTypeBtnFunc()) {
			var optionText = $("<a class='select-custom-option-el dropdown-item' href='javascript:;'>");
			optionEl.append(optionText.html(dataOptions[index].text));
		}
		//se è btn
		else if(isTypeBtnFunc()){
			var optionText = $("<a class='select-custom-option-el dropdown-item' href='javascript:;'><span class='text-btn'>" + dataOptions[index].text + "</span><span class='value-btn'>" + dataOptions[index].value +"</span>");
			optionEl.append(optionText);
		}
		//se è con checkbox
		else {
			var optionText = $("<a class='form-check-inline checkbox select-custom-option-el dropdown-item' href='javascript:;'><input type='checkbox' id='sccheckbox" + index + "'" + "value=" + dataOptions[index].value + "><label class='select-custom-option-el'></label></a>");
			optionEl.append(optionText).find("label").html(dataOptions[index].text);
		}
	})
	var scDefaultText = scWrapper.attr("data-attr-placeholder") ? scWrapper.attr("data-attr-placeholder") : "Seleziona";

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
			    scCheckNotAll = scCheck.not(".check-all"),
				scvalCheck = [],
				optionAll = optionSelected.attr("data-attr-value") === "all",
				allSelected = false;
			$('.dropdown-menu.show').on('click', function (e) {
				e.stopPropagation();
			});
			var optionSelectedisChecked = optionSelected.find("input[type=checkbox]").prop("checked");
			if (!optionAll) {
				optionSelected.find("input[type=checkbox]").prop("checked", !optionSelectedisChecked);
			}
			//se viene selezionato tutti...
            else {
				
				if(optionSelected.find("input[type=checkbox]").prop("checked"))
				{
					scCheck.prop("checked",false);
					scWrapper.find(".select-custom-option").removeClass("option-selected");
					allSelected = false;
				} 
				else {
					scCheck.prop("checked",true);
					scWrapper.find(".select-custom-option").addClass("option-selected");
					allSelected = true;
				}
			}
			optionSelectedisChecked ? optionSelected.closest(".select-custom-option").addClass('option-selected') : optionSelected.closest(".select-custom-option").removeClass('option-selected');
			var scCheckChecked = scWrapper.find("input[type=checkbox]:checked");
			
			//popola l'input hidden con le voci selezionate
			$.each(scCheckChecked, function (i, v) {
				if($(v).val() !== "all") scvalCheck.push($(v).val());
			});
			scIhidden.val(scvalCheck.join(","));
			toggleSelected(optionSelected);
			//popola la voce selezionata anche recuperando quanto passato nei parametri
			scvalCheck.length===scCheckNotAll.length ? allSelected=true : allSelected=false;
			if (scIhidden.val() !== "" && !allSelected) {
				
			    scvalCheck.length === 1 ? scVselected.html(scWrapper.find(".option-selected:not(.all)").attr('data-attr-text')) : scVselected.html(scvalCheck.length + " " + sourceParams.textSelectedSome)
			} 
			else if(allSelected) {
				scVselected.html(sourceParams.textSelectedAll);
			}
			else {
                scVselected.html(scDefaultText);
            }
			
			
		}
		//caso select button funzionale
		else if (isTypeBtnFunc()) {
			scVselected.empty().html(optionSelected.find(".select-custom-option-el").html());
			//appendo la classe per la diversa stilizzazione
			scWrapper.addClass("option-is-selected");
			//popolo l'input hidden con un value che è un oggetto dove passo text e il value
			
			valArr = [];
			valArr.push(optionSelected.attr("data-attr-text"),optionSelected.attr("data-attr-value"));
			scIhidden.val(valArr.join(","));
			toggleSelected(optionSelected);
		}
		
		//caso select di default
		else {
			//popola la select con la voce selezionata, popola l'input hidden
			scVselected.empty().html(optionSelected.text());
			scIhidden.val(optionSelected.attr("data-attr-value"));
			toggleSelected(optionSelected);
		}
		
		
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
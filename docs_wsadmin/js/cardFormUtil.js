var globalFlag = false;
var nullValue = 'none';
//the status of overlay box
var isOpen = false;

function verifySingleField(fieldName, fieldLabelName, fieldValue, checkIfItIsNumber) {
	
	var result = false;
	if ($('#'+fieldName).val() == fieldValue || (checkIfItIsNumber && isNaN($('#'+fieldName).val()))) {
		$('#'+fieldLabelName).attr('class', 'labelError');
		result = true;
		if (globalFlag == false) {
			globalFlag = true;
			$('#'+fieldName).trigger('focus');
		}
	}
	else {
		$('#'+fieldLabelName).attr('class', 'label');
	}
	return result;
}	

function valideAndSubmit(formId) {
	
	var noerrors = true;
	globalFlag = false;
	var isCartimpronta = ('IMPRONTA' == $('#tipologia').val());
	var isNotWebank = ('webank' != $('#banca').val());
	var errorMessage = "Errore di valorizzazione. Rivedere i campi evidenziati.";
	
	if (verifySingleField("codice", "codiceLabel", "", false)) {
		noerrors = false;
	}
	if (verifySingleField("banca", "bancaLabel", "", false)) {
		noerrors = false;
	}
	if (verifySingleField("tipologia", "tipologiaLabel", "", false)) {
		noerrors = false;
	}	
	if (verifySingleField("categoria", "categoriaLabel", "", false)) {
		noerrors = false;
	}
	if (verifySingleField("descrHost", "descrHostLabel", "", false)) {
		noerrors = false;
	}
	if (verifySingleField("descrWeb", "descrWebLabel", "", false)) {
		noerrors = false;
	}	
	if (verifySingleField("obskey_mov", "obskey_movLabel", "", false)) {
		noerrors = false;
	}
	if (isNotWebank) {
		if (verifySingleField("obskey_info", "obskey_infoLabel", "", false)) {
			$('#obskey_info').val(nullValue);
		}	
		if (verifySingleField("obskey3_info", "obskey3_infoLabel", "", false)) {
			$('#obskey3_info').val(nullValue);
		}	
	}
	if (isCartimpronta) {
		if (verifySingleField("piedino", "piedinoLabel", "", false)) {
			noerrors = false;
		}			
		if (verifySingleField("giorni_addebito", "giorni_addebitoLabel", "", false)) {
			noerrors = false;
		}			
		if (verifySingleField("obskeyPlafond", "obskeyPlafondLabel", "", false)) {
			$('#obskeyPlafond').val(nullValue);
		}
		if (verifySingleField("actionPlafond", "actionPlafondLabel", "", false)) {
			$('#actionPlafond').val(nullValue);
		}
	}				

	if (noerrors) {
		// submit del form
		$('#'+formId).submit();
	}
	else {
 		alert(errorMessage);
	} 	
}	

function jqAJAXKccsCall(url, successFunc, failureFunc, parameters, type) {
	var jqUrl = (cgi_script + url),
		jqSuccessFunc = function(data) { successFunc(data); },
		jqFailureFunc = function() { failureFunc(); };
		callType = (type === null) ? 'json' : type,

	jqAJAXCall('POST', callType, jqUrl, jqSuccessFunc, jqFailureFunc, parameters);
}

function loadCategorie() {
	var banca = $('#banca').val();
	var tipologia = $('#tipologia').val();
	var parameters = {
			azione: 'categorie',
			banca: banca,
			tipologia: tipologia,
			cf: Math.random()		
		},
		url = '/bankingadmin/kccsManagement.do';
	jqAJAXKccsCall(url, successCallbackCategorie, failureCallbackCategorie, parameters);
}

function successCallbackCategorie(res) {

	if (res.isEsito == true) {
		var catArray = res.catArray;
		var size = (catArray == null) ? 0 : catArray.length;
		var addIdx = 0;
		var inputValue = undefined;
		if ($('#selCategoria').length != 0) {
			inputValue = $('#selCategoria').val();
			addIdx = 1
		} else {
			inputValue = $('#inputCategoria').val();
			addIdx = 0
		}
		var selCategoria = $('#categoria');
		selCategoria.empty();
		var selIndex = 0;
		if ($('#searchPage').length > 0) {
			var firstOption = $('<option value="">Tutte</option>');
			selCategoria.append(firstOption);
		}
		for (var index = 0; index < size; index++) {
			var currentValue = catArray[index].value;
			if (currentValue == inputValue) {
				selIndex = index + addIdx;
			}
			var currentOption = $('<option value="'+currentValue+'">'+currentValue+'</option>');
			selCategoria.append(currentOption);
		}
		selCategoria.prop('selectedIndex', selIndex);
	}else {
		failureCallbackCategorie();
	}
}

function failureCallbackCategorie() {
	alert('errore caricamento categorie');
}

function submitForm(formId, preface, codice, banca, tipologia) {
	if (preface != null) {
		$('#'+ preface + 'codice').val(codice);
		$('#'+ preface + 'banca').val(banca);
		$('#'+ preface + 'tipologia').val(tipologia);
	}
	var eseguiok = true;
	if (preface=="del") {
		var eseguiok=confirm("eliminare il codice " + codice + "?")
	}
	if (eseguiok) {
		$('#' + formId).submit();
	}
}

//function to display the box
function showOverlayBox() {
	//if box is not set to open then don't do anything
	if( isOpen == false ) return;
	$('#newCateg').val('');
	// set the properties of the overlay box, the left and top positions
	$('.overlayBox').css({
		display:'block',
		left:( $(window).width() - $('.overlayBox').width() )/2,
		top:( $(window).height() - $('.overlayBox').height() )/2 -20,
		position:'absolute'
	});
	// set the window background for the overlay. i.e the body becomes darker
	$('.bgCover').css({
		display:'block',
		width: $(window).width(),
		height:$(window).height(),
	});
}

function doOverlayOpen() {
	//set status to open
	isOpen = true;
	var copyCategory = $('#copyCategory');
	var selCategoria = $('#categoria');
	copyCategory.html(selCategoria.html());
	var size = selCategoria.find('option').length;
	copyCategory.attr('size', size);
	copyCategory.attr('disabled', true);
	$('#addButton').attr('disabled', true);
	showOverlayBox();
	$('.bgCover').css({opacity:0}).animate( {opacity:0.5, backgroundColor:'#000'} );
	// dont follow the link : so return false.
	return false;
}

function checkCatValue() {
	var newCat = $('#newCateg').val().trim();
	var copyCategoryOptions = $('#copyCategory').find('option');
	var newState = (newCat.length == 0);
	if (!newState) {
		for (var index = 0; index < copyCategoryOptions.length; index++) {
			if (copyCategoryOptions.eq(index).val() == newCat) {
				newState = true;
				index = copyCategoryOptions.length;
			}
		}
	}
	$('#addButton').attr('disabled', newState);
}

function doOverlayClose() {
	//set status to closed
	isOpen = false;
	$('.overlayBox').css( 'display', 'none' );
	// now animate the background to fade out to opacity 0
	// and then hide it after the animation is complete.
	$('.bgCover').animate( {opacity:0}, null, null, function() { $(this).hide(); } );
}

function doAddCategory() {
	var selCategoria = $('#categoria');
	var currentValue = $('#newCateg').val().trim();
	if (currentValue.length > 0) {
		var currentOption = $('<option value="'+currentValue+'">'+currentValue+'</option>');
		selCategoria.append(currentOption);
		var selIndex = selCategoria.find('option').length - 1;
		selCategoria.prop('selectedIndex', selIndex);
	}
	doOverlayClose();
}

// if window is resized then reposition the overlay box
$(window).bind('resize',showOverlayBox);

// activate when the link with class launchLink is clicked
$('a.launchLink').click( doOverlayOpen );

// close it when closeLink is clicked
$('a.closeLink').click( doOverlayClose );
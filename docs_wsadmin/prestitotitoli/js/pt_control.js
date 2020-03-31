function switchLayer(oldLayer, newLayer, reload) {
	if(oldLayer!=null)
		closePopOverLayer(oldLayer);
	if(newLayer!=null)
		openPopOverLayer(newLayer, 'floating', 1);
	else 
		if(reload)
			location.reload(true);
}

function resetErrors(form) {
	$('#' + form + ' #ErroriValidazione').each(function(index, e) {
		$(e).hide();
	});

	$('#' + form + ' #ErroriValidazione_alert_list').each(function(index, e) {
		$(e).children().each(function(index2, li) {
			$(li).remove();
		});
		
	});

	$('#'+form+' sup').each(function(index, sup) {
		$(sup).remove();
	});
}

function checkForErrors(request, form) {
	resetErrors(form);
	var verifica = request;
	var esito = verifica.esito;
	if(esito=='KO') {
		var label;
		var error_str;

		$(verifica.errors).each(function(i,error) {
			label = error.label;
			error_str = error.error;

			$($(label)).prev().append('<sup>*</sup>');
			$('#' + form + ' #ErroriValidazione_alert_list').each(function(index,e) {
				$(e).append('<li>' + error_str + '</li>');
			});
		});
		
		$('#' + form + ' #ErroriValidazione').each(function(index,e) {
			$(e).show();
		});
		
		return false;
	} else {
		return true;
	}
}

/* VARIABILI GLOBALI */
var appuInit = false;

/* GRUPPO DI FUNZIONI PER INTERATTIVITA' */
appuPostData = function() {
	// Prototipo post dei dati con esito
	$("#toolAppuForm").hide();
	$("#appuFeedbackOk").show();

}

/*CARICAMENTO */
appuLoad = function(){
	// Inizializza tutto
	if (!cmbInit)
	{
		// Inizializzazioni (datepicker)
		appuData1 = $("#appuData1").datepicker({
				beforeShowDay: highlightDays,
				//beforeShowDay: noHolidays,  //si applica se si vuole che i fine sttimana e festivi non siano delezionabili
				minDate: 0,
				showOtherMonths: true,
				showOn: "button",
				prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
				nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
				buttonImage: "/img/ret/pixel_trasp.gif",
				buttonImageOnly:true,
				beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
			    onClose: function(){
			    	$('#datePickerWrapper').modal('hide');
			    }
		    });
		appendDatePickerIcon('appuData1');

		// Inizializzazioni (datepicker)
		appuData1 = $("#appuData2").datepicker({
				beforeShowDay: highlightDays,
				//beforeShowDay: noHolidays,  //si applica se si vuole che i fine sttimana e festivi non siano delezionabili
				minDate: 0,
				showOtherMonths: true,
				showOn: "button",
				prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
				nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
				buttonImage: "/img/ret/pixel_trasp.gif",
				buttonImageOnly:true,
				beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
			    onClose: function(){
			    	$('#datePickerWrapper').modal('hide');
			    }
		    });
		appendDatePickerIcon('appuData2');


		// Azione sul pulsante
		appuButton = $("#appuButton").click(appuPostData);


		appuInit = true;

	
	}


}
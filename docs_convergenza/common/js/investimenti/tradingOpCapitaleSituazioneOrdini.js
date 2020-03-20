

function initializaOpCapitaleSituazioneOrdini(listaDepositi){
	
	//popolaDepositi(listaDepositi);
	
	$("#periodoSelect").empty();
	for(i=1; i<=30; i++){
		if(i==1){
			$("#periodoSelect").append($('<option>').val(i).text(i + " giorno"));
		}
		else{
			$("#periodoSelect").append($('<option>').val(i).text(i + " giorni"));
		}
		
	}
	
	$('#periodoDate').hide();
	
	// Switch periodo 
	$("#switchPeriodo").click(function(){
		$("#periodoSelect, #periodoDate").toggle();
	});
	
	$('#dataA').val('27/11/2017');
	refreshDate("datepickerToolDa");
	refreshDate("datepickerToolA");
	$('#datepickerToolDa,#datepickerToolA').bind('change', function() {
		refreshDate($(this).attr('id'));
	});
	
	$('#datepickerToolDa').val($.datepicker.formatDate('dd/mm/yy', new Date()));
	$('#datepickerToolA').val($.datepicker.formatDate('dd/mm/yy', new Date()));
	
//	$("#datepickerToolDa").mask("99/99/9999");
//	$("#datepickerToolDa").datepicker({
//		minDate: "-30Mm",
//		maxDate : $("#datepickerToolA").val(),
//		defaultDate : $('#dataA').val(),
//		showOtherMonths: true,
//		showOn: "button",
//		prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
//		nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
//		buttonImage: "/img/ret/pixel_trasp.gif",
//		buttonImageOnly:true,
//		beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
//	    onSelect : setMaxDate,
//	    onClose: function(){
//	    	$('#datePickerWrapper').modal('hide');
//	    }
//    });
//    appendDatePickerIcon('datepickerToolDa');
//    
//    if($("#datepickerToolA").datepicker("getDate") - $("#datepickerToolDa").datepicker("getDate") < 0){
//		$("#datepickerToolA").datepicker("setDate", $("#datepickerToolDa").val());
//	}
   
	
	$('#ricerca').click(function() {
		//addClass("loading");
		
		showError(false, null, null);
		$('#ricerca').attr('disabled', 'disabled');
		
		//check error ??
		//TODO
		var inputData = {};
		$.ajax({
			url 	: wrp_script + "/pktrading/OperazioneCapitaleSituazioneOrdiniJson.action",
			dataType : "json",
			data 	: inputData,
			success : function(dataOutJSON, status, jqXHR) { // jqXHR.statusText="OK"; status="success"
				var msg = "Si &egrave; verificato un problema tecnico";
				if (200 == jqXHR.status) {
					var datiOperazioneCapitale 	  = dataOutJSON.data;
					
					
					if (datiOperazioneCapitale == undefined || datiOperazioneCapitale == null || datiOperazioneCapitale == "") {
						showError(true, "E", msg);
						$('#oprCapitale').hide();
					} else 
					{
						if(datiOperazioneCapitale.length == 0){
							msg = "Siamo spiacenti ma si &egrave; presentato un errore:<br>Nessun ordine corrispondente ai parametri di ricerca indicati";	
							showError(true, "W", msg);
						}
						else{
							showError(false, null, null);
							popolaElencoOperazione(datiOperazioneCapitale);
							$('#oprCapitale').show();
							//proseguiModificaToggle();
						}
					}
					
				} else {
					showError(true, "E", msg);
					$('#oprCapitale').hide();
				}
			},
			error : function(jqXHR, status, errorThrown) {
				var msg = "Si &egrave; verificato un problema tecnico";
				showError(true, "E", msg);
				$('#oprCapitale').hide();
			},
			complete : function(jqXHR, status) {
				$('#ricerca').removeAttr('disabled');
			}
		});
	});
	
	$("#opCapitaleSituazioneOrdiniForm").removeClass("loading");	
}

//function setMaxDate(){
//	var dateSelected = $("#datepickerToolDa").datepicker('getDate');
//	var dateSelected = (dateSelected.getDate()) + '/' + (dateSelected.getMonth() +1)  + '/' + dateSelected.getFullYear();
//	$("#datepickerToolA").mask("99/99/9999");
//	$("#datepickerToolA").datepicker({
//		minDate : $("#datepickerToolDa").val(),
//		maxDate : $('#dataA').val(),
//		defaultDate : $('#dataA').val(),
//		showOtherMonths: true,
//		showOn: "button",
//		prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
//		nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
//		buttonImage: "/img/ret/pixel_trasp.gif",
//		buttonImageOnly:true,
//		beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
//	    onClose: function(){
//	    	$('#datePickerWrapper').modal('hide');
//	    }
//    });
//    appendDatePickerIcon('datepickerToolA');
//}


function refreshDate(datePickerID){
	
	$("#"+datePickerID).datepicker('destroy');
	$("#"+datePickerID).mask("99/99/9999");
	var dataMinimo = "-30Mm", dataMassimo = $('#dataA').val();
	if(datePickerID == "datepickerToolDa"){
		dataMinimo = $("#datepickerToolDa").val();
	}
	else if(datePickerID == "datepickerToolA"){
		dataMassimo = $("#datepickerToolA").val();
	}
	$("#"+datePickerID).datepicker({
								minDate : dataMinimo,
								maxDate : dataMassimo,
								defaultDate : $('#dataA').val(),
								showOtherMonths : true,
								showOn : "button",
								prevText : "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
								nextText : "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
								buttonImage : "/img/ret/pixel_trasp.gif",
								buttonImageOnly : true,
								beforeShow : renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
								onClose : function() {
									$('#datePickerWrapper').modal('hide');
								}
							});
	appendDatePickerIcon(datePickerID);
	if($("#datepickerToolA").datepicker("getDate") - $("#datepickerToolDa").datepicker("getDate") < 0){
		$("#datepickerToolA").datepicker("setDate", $("#datepickerToolDa").val());
	}
}


function popolaElencoOperazione(datiOperazioneCapitale){
	var colonneTab = [
									{
										field : 'deposito',
										title : 'Deposito',
										sortable : true,
										'class'	: 'center'
									},
									{
										field : 'mercato',
										title : 'Mercato',
										sortable : true,
										'class'	: 'center'
									},
						{
							field : 'dataONumOrdini',
				//			sortName: 'descrizione-key',
							title : 'Data <br/> N. ordine',
							sortable : true,
							order : 'asc'
						},
						{
							field : 'titolo',
							title : 'Titolo',
							sortable : true,
							'class'	: 'center'
						},
						{
							field : 'operazione',
							title : 'Oper.',
							sortable : true,
							'class'	: 'center'
						},
						{
							field : 'stato',
							title : 'Stato',
							sortable : true,
							'class'	: 'right'
						},
						{
							field : 'prezzo',
							title : 'Prezzo ins.',
							//sortable : true,
							'class'	: 'right'
						},
						{
							field : 'quantitaInsEseg',
							title : 'Q.t&agrave; inserita<br>Q.t&agrave; eseguita',
							//sortable : true,
							'class'	: 'right'
						},
						{
							field : 'funzioni',
							title : 'Funzioni',
							//sortable : true,
							'class'	: 'center'
						}
				];
	
	
	$('#tableOperazione').bootstrapTable({
        data			 : datiOperazioneCapitale
        ,sortOrder		 : "asc",
        sortName		 : "dataONumOrdini",
        pagination 		 : "true",
        paginationVAlign : "top",
        pageSize		 : 15,
        pageList		 : [10, 20, 30, 'tutti'],
        rowStyle		 : function(row, index) {
								if(index % 2 == 0)
								{
									return {
										classes: 'dispari'
									}
								}
								else {
									return {
										classes: 'pari'
									}
								}
							}
	,columns			: colonneTab
	 });		
	
}

function showError(show, tipo, msg) {
	if (!show) {
		$('#erroreForm').hide();
	} else {
		var errorBorderClass = ''
		// , errorIconType = ''
		;
		if ("E" == tipo) {
			errorBorderClass = 'negativo';
			// errorIconType = 'icon icon-alert_error icon-2x';
		} else if ("W" == tipo) {
			errorBorderClass = 'attenzione';
			// errorIconType = 'icon icon-alert_caution icon-2x';
		}
		$("#errorBorder").addClass(errorBorderClass);
		// $("#errorType").attr('class',errorIconType);
		$("#messaggio").html(msg);
		$('#erroreForm').show();
		window.scrollTo(0, 0);
	}
}

//function refreshMinDate() {
//	$("#datepickerToolA").datepicker('destroy');
//		$("#datepickerToolA").mask("99/99/9999");
//		$("#datepickerToolA").datepicker({
//									minDate : $("#datepickerToolDa").val(),
//									maxDate : $('#dataA').val(),
//									defaultDate : $('#dataA').val(),
//									showOtherMonths : true,
//									showOn : "button",
//									prevText : "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
//									nextText : "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
//									buttonImage : "/img/ret/pixel_trasp.gif",
//									buttonImageOnly : true,
//									beforeShow : renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
//									onClose : function() {
//										$('#datePickerWrapper').modal('hide');
//									}
//								});
//				appendDatePickerIcon('datepickerToolA');
//	if($("#datepickerToolA").datepicker("getDate") - $("#datepickerToolDa").datepicker("getDate") < 0){
//		$("#datepickerToolA").datepicker("setDate", $("#datepickerToolDa").val());
//	}
//}
//
//function refreshMaxDate() {
//	$("#datepickerToolDa").datepicker('destroy');
//	$("#datepickerToolDa").mask("99/99/9999");
//	$("#datepickerToolDa").datepicker({
//									minDate : "-30Mm",
//									maxDate : $("#datepickerToolA").val(),
//									defaultDate : $('#dataA').val(),
//									showOtherMonths : true,
//									showOn : "button",
//									prevText : "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
//									nextText : "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
//									buttonImage : "/img/ret/pixel_trasp.gif",
//									buttonImageOnly : true,
//									beforeShow : renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
//									onClose : function() {
//										$('#datePickerWrapper').modal('hide');
//									}
//								});
//	appendDatePickerIcon('datepickerToolDa');
//}


//function popolaDepositi(listaDepositiStr){
//	listaDepositi = $.parseJSON(listaDepositiStr); 
//	if(Object.keys(listaDepositi).length > 1){
//		$('#elencoDepositi').show();
//		$('#deposito').hide();
//		$("#elencoDepositi").empty();
//		$.each(listaDepositi, function(key, value) {
//            $("#elencoDepositi").append($('<option>').val(key).text(value));
//        });
//		
//		$('#deposito').val($('#elencoDepositi :selected').val());
//		$('#deposito').text($('#elencoDepositi :selected').text());
//		
//		$('#elencoDepositi').change(function(){
//			$('#deposito').val($('#elencoDepositi :selected').val());
//			$('#deposito').text($('#elencoDepositi :selected').text());
//		});
//	}
//	else{ 
//		$.each(jsonBean.listaDepositi, function(key, value) {
//			$('#deposito').val(key);
//			$('#deposito').text(value);
//		});
//		$('#deposito').show();
//	}
//}





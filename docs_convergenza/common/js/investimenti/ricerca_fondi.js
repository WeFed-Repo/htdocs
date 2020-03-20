
var fesConf = {};

function initializzaRicerca(inputData){
	$("#fesRicWrap").addClass("loading");
	
	$.ajax({
		url : wrp_script_direct + "/investimenti/RicercaFondiLoad.action"+ "?cf=" + Math.random(),
		dataType : "json",
		data : {},
		success : function(dataOutJSON, status, jqXHR) { 
			var msg = "l'operazione di Ricerca fondi non &egrave; possibile al momento";
			if (200 == jqXHR.status) {
				
//				if ("failure" == dataOutJSON.action) {
//					showError(true, "E", msg);
//				}
//				else {
					showError(false, null, null);
					fesConf = $.parseJSON(dataOutJSON.fesConf);
					//da verificare che fesConf non è vuoto
					fesRicStart();	//priv_fes_ricerca_resp.js
					
					$("#idRFindietro").hide();
					if(fromPage!=undefined && fromPage.indexOf("TopTen")>0){
						$("#idRFindietro").click(function(){
							location.href = fromPage;
						});
						
						$("#idRFindietro").show();
					}
					
//					if($("#fesSearchTable").is(":visible") || $("#erroreForm").is(":visible")){
//						$("#fesRicWrap").removeClass("loading");
//					}
					
					//indietro da confronta
					if($("#tabConfronta").hasClass("on")){
						fesConfShow();
					}
					if($("#fesSearchResults").is(":visible")){	//presente nel fesRicStart() per togliere solo se fa indietro da confronto. Per ricerca, fa tramite fesRicStart()
						$("#fesRicWrap").removeClass("loading");
					}
					
					
//				}
			}
		},
		error : function(jqXHR, status, errorThrown) {
			var msg = "l'operazione di Ricerca fondi non &egrave; possibile al momento";
			showError(true, "E", msg);
			$("#fesRicWrap").removeClass("loading");
//			$("#sezioneReipilogo,#sezioneDatiOrdine,#prosegui,#modifica").hide();
		}
	});
	
	
	
	$("#fromPage").val(inputData.fromPage);
	$("#codSocieta").val(inputData.codSocieta);
	
	
	$("#filtriAvanzatiSwitch").click(function(){
		
		var bt = $(this);
		var fa = $("#filtriAvanzati");
		if (bt.hasClass("opened"))
		{
			bt.removeClass("opened");
			fa.slideUp(300).delay(300);
		}
		else
		{
			bt.addClass("opened");
			fa.slideDown(300).delay(300);
		}	
	});	
	
	
}

//nasconde/visualizza sezione di errore/warning/successo
//show = true/false; tipo="E"(error)/"W"(warning)/"S"(success)
function showError(show, tipo, msg) {
	if (!show) {
		$('#erroreForm').hide();
	} else {
		var errorBorderClass = '';
		if ("E" == tipo) {
			errorBorderClass = 'negativo';
		} else if ("W" == tipo) {
			errorBorderClass = 'attenzione';
		}
		$("#errorBorder").addClass(errorBorderClass);
		$("#messaggio").html(msg);
		$('#erroreForm').show();
		window.scrollTo(0, 0);
	}
}

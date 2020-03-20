
var bean = {}, listaWL = {}, unicaListaWL={}, datiJson = {};
var struts2ContestoIcoOpr = "investywb";

function initializzaIconaOpr(data){
	$("#idElencoIconaOpr").addClass("loading");
	bean = {};datiJson = {}
	datiJson = $.parseJSON(data.datiJson);
	
	$("#errorBox").hide();
	if(datiJson.esito == "KO"){
		$("#idMsgErrText").html(datiJson.message);
		$("#errorBox").show();
		return;
	}
	
	bean = $.parseJSON(datiJson.bean);
	
//	$("#idCompra").attr("href", "javascript:document.location.href=wrp_script + '/wbOnetoone/2l/action/investimenti/BuyFundSelect.action?codInt=" + bean.codiceInterno + "&codIsin=" + bean.codiceIsin +"&divisa=" + bean.valuta + "&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto'");
	$("#idCompra").attr("href", "javascript:document.location.href=wrp_script + '/wbOnetoone/2l/action/"+ struts2ContestoIcoOpr + "/AcquistoFondo.action?codInt=" + bean.codiceInterno + "&codIsin=" + bean.codiceIsin +"&divisa=" + bean.valuta + "&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto_new'");
	$("#idCompra").parent().addClass("linkOn");
	
	if(datiJson.isSell){
//		$("#idVendi").attr("href", "javascript:document.location.href=wrp_script + '/wbOnetoone/2l/action/investimenti/SellFundSelect.action?codiceInterno=" + bean.codiceInterno + "&codIsin=" + bean.codiceIsin + "&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_vendita'");
		$("#idVendi").attr("href", "javascript:document.location.href=wrp_script + '/wbOnetoone/2l/action/"+ struts2ContestoIcoOpr + "/VenditaFondo.action?codiceInterno=" + bean.codiceInterno + "&codIsin=" + bean.codiceIsin + "&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_vendita_new'");
		$("#idVendi").parent().addClass("linkOn");
	}
	else{
		$("#idVendi").attr("href", "javascript:");
		$("#idVendi").parent().addClass("linkOff");
	}
	
	if(datiJson.isSwi){
//		$("#idSwitch").attr("href", "javascript:document.location.href=wrp_script + '/wbOnetoone/2l/action/investimenti/SwitchFundSelect.action?codiceInterno=" + bean.codiceInterno + "&codIsin=" + bean.codiceIsin + "&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_switch'");
		$("#idSwitch").attr("href", "javascript:document.location.href=wrp_script + '/wbOnetoone/2l/action/"+ struts2ContestoIcoOpr + "/SwitchFondo.action?codiceInterno=" + bean.codiceInterno + "&codIsin=" + bean.codiceIsin + "&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_switch_new'");
		$("#idSwitch").parent().addClass("linkOn");
	}
	else{
		$("#idSwitch").attr("href", "javascript:");
		$("#idSwitch").parent().addClass("linkOff");
	}
	
	if(datiJson.obs != "wl"){
		$("#idTestoWL").text("Aggiungi a watchlist");
		$("#idWL").attr("title", "Aggiungi a watchlist");
		$("#idWL").attr("data-toggle","modal");
		$("#idWL").parent().addClass("linkOn");
		$("#idWL").click(function(){
			$("#icoOpeModal").modal("hide");
			$("#addToWlSelectConfirm").hide();	
			$('#addToWlSelectForm').show();
			$("body").prepend($("#addToWl").modal("show"));
		});
	}
	else if(datiJson.obs == "wl"){
		$("#idTestoWL").text("Rimuovi da watchlist");
		$("#idWL").attr("title", "Rimuovi da watchlist");
		$("#idWL").parent().addClass("linkOn");
		
		$("#idWL").click(function(){
//			$("#wlSingolo").val();
			rimuoviDaWatchlist(bean.codiceIsin);
		});
	}
	
	if(datiJson.obs != "alert"){
		$("#idAlert").attr("href", "javascript:document.location.href=wrp_script + '/wbOnetoone/2l/jsp/FMP/resp/alert/impostaAlertFondiSicav.action?isin=" + bean.codiceIsin + "&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_sf_alert'");
		$("#idAlert").parent().addClass("linkOn");
	}
	else{
		$("#idTestoAlert").text("Rimuovi da Alert");
		$("#idAlert").attr("href", "javascript:");
		$("#idAlert").attr("title", "Rimuovi da Alert");
		$("#idAlert").attr("onclick", "rimuoviAlert(this);");
		$("#idAlert").attr("data-idAlert", datiJson.alertId);
		$("#idAlert").parent().addClass("linkOn");
	}
	
	showWatchList_IcoOpr(datiJson);
	
	if(typeof datiFondiSitPac !== "undefined" ){	//Sit PAC nuovo ha datiFondi come []; altrimenti, presente
		showVerPAC_IcoOpr();
	}
	
	
	
	
//	if(datiJson.listaWL != undefined){
//		$("#wlSelectModal").empty();
//		listaWL = {};
//		listaWL = $.parseJSON(datiJson.listaWL);
//		$.each(listaWL, function(key, value) {
//			$("#wlSelectModal").append($('<option>').val(value.idWatchListFund).text(value.nameWatchListFund));
//		});
//		$("#wlSingoloModal").hide();
//		$('#wlSelectModal').show();
//		$('#wlSelectModal').val($('#wlSelectModal :selected').val());
//		$("#wlSingoloModal").val($('#wlSelectModal :selected').val());
//		$("#wlSingoloModal").text($('#wlSelectModal :selected').text());
//		$("#wlSelectModal").change(function(){
//			$("#wlSingoloModal").val($('#wlSelectModal :selected').val());
//			$("#wlSingoloModal").text($('#wlSelectModal :selected').text());
//			$('#aggiungiWL').show();
//		});
//	}
//	else if(datiJson.unicaListaWL != undefined){
//		unicaListaWL = {};
//		unicaListaWL = $.parseJSON(datiJson.unicaListaWL);
//		$("#wlSelectModal").hide();
//		$("#wlSingoloModal").text(unicaListaWL.nameWatchListFund);
//		$("#wlSingoloModal").val(unicaListaWL.idWatchListFund);
//		$("#wlSingoloModal").show();
//	}
//	
	$('.btn-annulla').click(function() {
		$("#addToWl").modal("hide");
	});
	$('#addToWlBtn').click(function() {
		addToWL_IcoOpr($("#wlSingoloModal").val(), $("#wlSingoloModal").text(), bean.codiceInterno,"", "InsertFundIntoWLJson.action");
	});
	
	$("#idElencoIconaOpr").removeClass("loading");
	$("#idElencoIconaOpr").show();
}

function showWatchList_IcoOpr(datiJson){
	if(datiJson.listaWL != undefined){
		$("#wlSelectModal").empty();
		listaWL = {};
		listaWL = $.parseJSON(datiJson.listaWL);
		$.each(listaWL, function(key, value) {
			$("#wlSelectModal").append($('<option>').val(value.idWatchListFund).text(value.nameWatchListFund));
		});
		$("#wlSingoloModal").hide();
		$('#wlSelectModal').show();
//		$('#wlSelect').val(wl==null ? 1 : wl);
		$('#wlSelectModal').val($('#wlSelectModal :selected').val());
		$("#wlSingoloModal").val($('#wlSelectModal :selected').val());
		$("#wlSingoloModal").text($('#wlSelectModal :selected').text());
		$("#wlSelectModal").change(function(){
			$("#wlSingoloModal").val($('#wlSelectModal :selected').val());
			$("#wlSingoloModal").text($('#wlSelectModal :selected').text());
			$('#aggiungiWL').show();
		});
	}
	else if(datiJson.unicaListaWL != undefined){
		unicaListaWL = {};
		unicaListaWL = $.parseJSON(datiJson.unicaListaWL);
		$("#wlSelectModal").hide();
		$("#wlSingoloModal").text(unicaListaWL.nameWatchListFund);
		$("#wlSingoloModal").val(unicaListaWL.idWatchListFund);
		$("#wlSingoloModal").show();
	}
	
}

function showVerPAC_IcoOpr(){
	$("#idVerPac, #idDettPac").attr("href", "javascript:");
	$("#idVerPac, #idDettPac").parent().addClass("linkOff");
	$("#idVerPac, #idDettPac").parent().hide();
	
	//disposiz_situazionePac.js
	if(idxVerPac != -1){
		$("#idWL, #idAlert").parent().hide();
		$("#idWL, #idAlert").parent().addClass("linkOff");	//#idCompra, #idVendi, #idSwitch, 
		$("#idVerPac, #idDettPac").parent().show();
		$("#idDettPac").parent().removeClass("linkOff").addClass("linkOn");
		if(datiFondiSitPac[idxVerPac].hrefVersaPac != ""){
			$("#idVerPac").attr("href", "javascript:document.location.href=wrp_script + '/wbOnetoone/2l/action/"+ struts2ContestoIcoOpr + "/" + datiFondiSitPac[idxVerPac].hrefVersaPac +"'");
			$("#idVerPac").parent().removeClass("linkOff").addClass("linkOn");
		}
		
		//TODO - Modal con dettaglio
//		$("#idDettPac").attr("href", "javascript:document.location.href=wrp_script + '/wbOnetoone/2l/action/investimenti/" + datiFondiSitPac[idxVerPac].hrefVersaPac +"'");
		
//		$("#idDettPac").click(function() { showDettaglioPacModal(); });	//disposiz_situazionePac.js
//		$("#idDettPac").parent().removeClass("linkOff").addClass("linkOn");
		
	}
	
}

function addToWL_IcoOpr(idWL, nomeWL, codiceInterno, isin, action){
	var messaggioErroreGenerico = "Si &egrave; verificato un errore di connessione";
	
	$.ajax({
		url		: wrp_script_direct + "/investimenti/" + action + "?cf=" + Math.random(),
		dataType	: "json",
		data		: {
			"idWL" 			: idWL,
			"nomeWL"		: nomeWL,
			"codiceInterno"	: codiceInterno,
			"messaggio"		: escape(messaggioErroreGenerico),
			"isin"			: isin
		},
		success	: function(dataOutJSON, status, jqXHR) { 
			
			if (200 == jqXHR.status) {
				if(dataOutJSON.data.action == "success") {  
					okMsg = dataOutJSON.data.messaggio;
//					loadWatchlistHomePage(idWL);
					
				} else if(dataOutJSON.data.action == "error"){
					setWlMessaggio_IcoOpr("negativo", dataOutJSON.data.messaggio);
				} else {
						setWlMessaggio_IcoOpr("negativo", dataOutJSON.data.messaggio);
				}
			} else {
				setWlMessaggio_IcoOpr("negativo", messaggioErroreGenerico);
			}
			
		},
		error : function(jqXHR, status, errorThrown) {
			setWlMessaggio_IcoOpr("negativo", messaggioErroreGenerico);
		},
		complete : function(jqXHR, status) {
//			$("#fullPageWl").removeClass("loading");
			
			if($("#messaggioWlMod").is(":visible")==false) {
				setWlMessaggio_IcoOpr("positivo", okMsg);
			}
		}
	});
}

function setWlMessaggio_IcoOpr(tipo, msg){
	$("#messaggioWlMod .boxesito").removeClass("positivo negativo attenzione").addClass(tipo);
	$(".messaggioTesto").find("p").html(msg);
//	$(".messaggioTesto").text(msg);
	$("#addToWlSelectConfirm").show();
	$('#addToWlSelectForm').hide();
}

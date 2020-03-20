
var elencoSicavJson = {}
titleCompra ="Questa funzione &egrave; disponibile solo accedendo con il profilo 'Consultare e disporre'. Utilizza il link in alto a destra"
;

function loadInfoSocietaGestione(){
	
	$.ajax({
		url : wrp_script_direct + "/investimenti/NostraOffertaPerCaseDiGestione.action",
		dataType : "json",
		data : {},
		success : function(dataOutJSON, status, jqXHR) { 
						var msg = "Si &egrave; verificato un errore di connessione";
						if (200 == jqXHR.status) {
							if(dataOutJSON.action == "SUCCESS") {   
								elencoSicavJson = dataOutJSON.sicavs;
								
								var divSocietaGestioneLogoVal ='';
								$.each(dataOutJSON.sicavs, function(index, sicav) {
									divSocietaGestioneLogoVal = divSocietaGestioneLogo.replace('valore',   index);
									divSocietaGestioneLogoVal = divSocietaGestioneLogoVal.replace('titolo',   sicav.nome);
									divSocietaGestioneLogoVal = divSocietaGestioneLogoVal.replace('immagine', sicav.thumb);
									$('#listFondi').append(divSocietaGestioneLogoVal);
								});
								
								gestioneModal(dataOutJSON.isInformativo);
								
							}
							else if(dataOutJSON.action == "failure"){
								showError(true, "E", dataOutJSON.errorMessage!=undefined && dataOutJSON.errorMessage!="" ? dataOutJSON.errorMessage : msg);
							}
						}
						else {
							showError(true, "E", dataOutJSON.errorMessage!=undefined && dataOutJSON.errorMessage!="" ? dataOutJSON.errorMessage : msg);
						}
		},
		error : function(jqXHR, status, errorThrown) {
			var msg = "Si &egrave; verificato un errore di connessione";
			showError(true, "E", msg);
		},
		complete : function(jqXHR, status) {
			$("#fullPageDiv").removeClass("loading");
		}
	});
}

function gestioneModal(isInformativo){
	resizeTab('secondTab2',0);
    //al click vado a popolare l'overlayer relativo alla sicav selezionata
    $('.selector-box').each(function(index){ //TODO - check se ok da commentare
        $(this).click(function(index) {
           /*definisco i vari componenti */
           var indexSelected = this.getAttribute("data-value"); //$('input[name=selectBoxes]').val();
           var sicavJson =  elencoSicavJson[indexSelected];
           
           
           
           var divDettaglioSicavModalPreVal = divDettaglioSicavModalPre	.replace('idx',		 		 indexSelected)
																		.replace('sicav_nome',		 sicavJson.nome)
           																.replace('sicav_descrizione',sicavJson.descrizione) 
           																.replace('sicav_profilo',	 sicavJson.profilo) 
           																.replace('sicav_link',		 sicavJson.link);
           
           var divSicavDocumentoVal ='';
		   $.each(sicavJson.documenti, function(index, documento) {
				divSicavDocumentoVal += divSicavDocumento.replace('doc_path', documento.path)
														 .replace('doc_nome', documento.nome);
		   });
		   
           var divDettaglioSicavModalPostVal = divDettaglioSicavModalPost.replace('sicav_nome',		 sicavJson.nome);
           
           var divTotale = divDettaglioSicavModalPreVal + divSicavDocumentoVal + divDettaglioSicavModalPostVal;
           
		   $("#detailSicavWrapper").empty();
           $("#detailSicavWrapper").append(divTotale);
           
           if(isInformativo){
        	   $("#btnInvio").attr('title', titleCompra);
        	   $("#btnInvio").attr('href', "");
           }
           else{
        	   $("#btnInvio").attr('title', "");
//        	   $("#btnInvio").attr('href', "javascript:callJSP('/wbOnetoone/2l/jsp/FMP/fida/ricerca.action',null,'codSocieta="+sicavJson.codGruppo + "&OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta');");
        	   $("#btnInvio").attr('href', "javascript:callJSP('/wbOnetoone/2l/action/investimenti/RicercaFondi.action',null,'codSocieta="+sicavJson.codGruppo + "&OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta');");
           }
           
           var wrapOuterSelected = $("#detailSicavWrapper").find('.detailSicav[data-detail-index=' + indexSelected +']'),
                h2DetSelected =    wrapOuterSelected.find('h2').html(),
                tabFDetSelected =  wrapOuterSelected.find('.contentInfo').html(),
                tabSDetSelected =  wrapOuterSelected.find('.contentDoc').html(),
                btnDetSelected =   wrapOuterSelected.find('.footerBtn').html(),
                h2Overl = $('#layerSicav h2'),
                wrapOverl = $('#layerSicav .tab-wrap'),
                footOverl = $('#layerSicav .modal-footer');
            /*popolo l'overlayer */
            h2Overl.html(h2DetSelected);
            wrapOverl.eq(0).html(tabFDetSelected);
            wrapOverl.eq(1).html(tabSDetSelected);
            footOverl.html(btnDetSelected);
            /*apro l'overlayer */
            $('#layerSicav').modal('show');
            $('#layerSicav').on('hidden.bs.modal', function (e) {
                /*svuoto l'overlayer */
                $(h2Overl).empty();
                $(wrapOverl).empty();
                $(footOverl).empty();
                $(this).find('.tabWrapper li:first-child a').trigger('click');
                /*deseleziono*/
                $('input[name=selectBoxes]').val('');
                $('.selector-box').removeClass('selected');
            });
                
       });
    });
 
}

var divSocietaGestioneLogo = " 																		\
							<div class=\"col-sm-2 col-xs-4 align-center\">							\
                    			<div class=\"selector-box\" data-value=\"valore\" title=\"titolo\"> \
                    				<img src=\"immagine\" class=\"img-resp\">						\
                    			</div>																\
                    		</div>																	\
                    		";

var divDettaglioSicavModalPre = " 														\
								<div class=\"detailSicav\" data-detail-index=\"idx\">	\
							 		<div class=\"wrapperToappend\">						\
							 	 		<h2>sicav_nome</h2>								\
	            						<div class=\"contentInfo\">						\
	                 						<p>sicav_descrizione sicav_profilo</p>		\
	                 						Fonte: sicav_link							\
	            						</div>											\
	            						<div class=\"contentDoc\">						\
	                						<ul class=\"documenti\">					\
								";

var divDettaglioSicavModalPost = "														\
			                				</ul>										\
	            						</div>											\
	            						<div class=\"footerBtn\">						\
	                						<div class=\"btn-align-center\">			\
	                    						<a type=\"button\" class=\"btn btn-primary\" id=\"btnInvio\" href=\"\" title=\"\" >\
	                    						Compra un fondo di sicav_nome			\
	                    						</a>									\
	                    						<br class=\"clear\">					\
	                						</div>										\
	            						</div>											\
	        						</div>												\
	    						</div>													\
							 ";

var divSicavDocumento = "    																												\
						<li>																												\
							<a href=\"javascript:;\" class=\"btn-icon\" onclick=\"javascript:window.open(doc_path);\" class=\"colorBank\">	\
								<i class=\"icon icon icon-pdf_circle_filled\"></i> 															\
								<span>doc_nome</span>																						\
							</a>																											\
						</li>																												\
						";



	    
							
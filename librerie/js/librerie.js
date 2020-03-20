/* OVERLAY */
lib = function(){

	var openOverlay = function (olContent){
		
		if (typeof lib.overlay == "undefined") {
			// Crea e predispone l'overlay 
			lib.overlay = $("<div>").attr("id","libOverlay");
			overlayClose = $("<a>").attr("class","overClose").html("<i class='icon icon-close'></i>").click(function(){ lib.overlay.fadeOut(100) });
			lib.overlayPopup = $("<div>").attr("class","overlayPopup").append(overlayClose);
			$("body").prepend(lib.overlay.append(lib.overlayPopup));
		}

		// Distrugge e ricrea il contenuto
		lib.overlay.find(".overlayCont").remove();
		lib.overlayPopup.append($("<div>").addClass("overlayCont").empty().append(olContent));
		lib.overlay.show();
		lib.overlayPopup.css({"margin-left": - lib.overlayPopup.width()/2 + "px", "margin-top": - lib.overlayPopup.height()/2 + "px"});
		return lib.overlay;
	},

	init = function(){
		/* INSERIRE QUI EVENTUALI INIZIALIZZAZIONI */

		// Sostituzioni per Mobile
		
	}();

	return {openOverlay:openOverlay}

}();

/* Funzioni estese per informazioni */
// funzione "salva"
var libObjSaveHtml = function() {
	tinymce.triggerSave();
	var btn = $(this);
	var low = btn.parents(".libObjWrap");
	var objPath = low.attr("data-path");
	low.find(".libObjEditHtml").addClass("loading");
	$.ajax({
		url: "/librerie/php/librerie_salva_oggetto.php",
		data: {
			"path": objPath,
			"html": low.find("textarea").val()
		},
		success: function(data) {
			alert(data.msg)
		}

	})
}

// Inizializzazioni
$(function(){

	
	$(".libObjInfo").click(function(){
		var low = $(this).parents(".libObjWrap");
		// Recupera la descrizione dell'oggetto HTML via AJAX
		var lod = low.find(".libObjDetail").addClass("loading").slideDown();
		
		$.ajax({
			url: low.attr("data-path") + "descrizione.html",
			dataType : "html",
			success: function (data) {
			lod.empty().append(
				$("<div>").addClass("libText").append(data)
				).removeClass("loading")
			}
		})

	});

	$(".libObjEdit").click(function(){

		var low = $(this).parents(".libObjWrap");
		
		// Recupera il file di testo (se presente)

		// Crea la textarea
		var objTa = $("<textarea>");
		var objCta = $("<a>").addClass("btnSave").html("salva").click(libObjSaveHtml);
		var objHtmlEditor = low.find(".libObjEditHtml");
		objHtmlEditor.slideDown().addClass("loading").append(objTa,objCta);
		tinymce.init({
  			selector: 'textarea'}
  		)
		objHtmlEditor.removeClass("loading");
	});

});


$(function(){
	/* funzioni di inizializzazione librerie */
	$("div[iconid=7]").delay(1000).trigger("click");
});
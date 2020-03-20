// Rende gli overlay sensibili al click
function makeFocusable(overlay) {
    overlay = jqc(overlay);
    // Prototipizza l'oggetto in modo che si possa passare anche solo l'ID
    var overlay = $(overlay);
    // L'evento viene istanziato come propriet� dell'oggetto, solo se necessario
    if (!overlay.mF) {
        overlay.mF = overlay.on("click", function() {
            nzi = getNextHighestZindex();
            if (this.style.zIndex < (nzi - 1))
                this.style.zIndex = nzi;
        });
    }
}


/* TOOLBOX SENZA CAMBIO HTML */
$(function() {
    // Se e' presente la toolbox...
    if ($("#toolbtns").length) {
            // INIZIALIZZAZIONE DEI BOTTONI RELATIVI AI VARI TOOL
            var toolInitOffset = $("#toolbtns").offset();
            toolInitPos = { "left": toolInitOffset.left + $("#toolbtns").width() - 300 + "px", "top": toolInitOffset.top + 108 + "px" };
            // Al click sui vari pulsanti con data-toolid impostato...
            $("#toolbtns *[data-toolid]").click(function() {
                var tbnt = $(this);
                var tId = tbnt.attr("data-toolid");
                // Chiudi tutti i tool aperti e rimuove la selezione dalla toolbar
                $(".tool, #virtAss").hide();
                $("#toolbtns .toolbtn a").removeClass("selected");
                tbnt.addClass("selected");
                var tool = $("#" + tId);
                // A seconda del tool si comporta in un modo diverso
                if (tId == "virtAss") {
                    vaOpen();
                } else {
                    if (tId == "tool2") $("#cmbData").trigger("change");
                    $("body").prepend(tool);
                    tool.draggable({ "handle": ".handle" }).css(toolInitPos).show();
                }
                tool.find(".close,.vaChiudi").click(function() {
                    $("#toolbtns .toolbtn a").removeClass("selected");
                });
            });
    }
});

/* VECCHIA CLOSE TOOLS */
function closetools() {
    $(".tool").hide();
    $(".ui-menu.agenzia").hide();
}
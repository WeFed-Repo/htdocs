<!-- FUNZIONI EMULATE DI ATTIVAZIONE DELL'ICONA OPERATIVA -->
<script>

    var attivaIconaOperativa = function(wrapper){
        chiudiIconeOper();
        var icoGroup = (typeof wrapper== "string")? $(wrapper +" .btn-icon-operativa"): $(".btn-icon-operativa");
        icoGroup.not(".btn-disabled").click(apriBoxOperativita);
    }

    var chiudiIconeOper = function(){
        event.stopPropagation();
        $(".icoope-overlay").remove();
        
    }

    var apriBoxOperativita = function(){
        var icoBtn = $(this);
        
        // Determina il posizionamento in base alle coordinate dell'icona stessa
        var olpos = icoBtn.position();
        
        chiudiIconeOper();
        var icoOpeOl = $("<div>").addClass("icoope-overlay"),
            icoOpeOlClose = $("<span>").addClass("close").click(chiudiIconeOper);
            icoFunctions = $("<div>").addClass("icoope-functions loading");
        icoOpeOl.append(icoOpeOlClose,icoFunctions);

        // A seconda di dove lo si va ad invocare, si aggancia in maniera diversa;
        var icoBtnParent = (icoBtn.parents(".bootstrap-table").length>0)? icoBtn.parents(".bootstrap-table") : icoBtn.parents(".modal-dialog");
        if (icoBtnParent.length==0) icoBtnParent = icoBtn.parents("table").parent();

        // Attenzione! Nelle modale l'offset e' diverso perchè il layer viene applicato "a monte" per "sbordare" dalla modale stessa.
        if (icoBtnParent.hasClass("modal-dialog")) {
            var modalOffset = icoBtnParent.find(".modal-body").position();
            var modalLeftScroller = icoBtnParent.find(".headerContainerNoBootS");
            if (modalLeftScroller.length>0) {
                var cumulativeOffset = modalLeftScroller.position();
                olpos.top += cumulativeOffset.top;
                olpos.left += cumulativeOffset.left;
            }
            olpos.top += modalOffset.top;
            olpos.left += modalOffset.left;
        }
        
        icoBtnParent.prepend(icoOpeOl.css({
            top: olpos.top + 30 + "px",
            left: olpos.left + "px"
        }));

        // Esempio dato raccolto 
        console.log("ES: dato input = ISIN: " + icoBtn.attr("data-isin"));

        // Chiamata al codice dell'icona operativa
        // Emulazione del ritardo
        setTimeout(function(){
            $.ajax({
                url: "/include/ajax/inv_icona_operativa.php",
                data: {
                    isin: icoBtn.attr("data-isin")
                },
                dataType: "html",
                success: function(data){
                    icoFunctions.empty().append(data).removeClass("loading");
                },
                error: function(){
                    icoFunctions.append("Error")
                }
            })
        },500
        )
    }

    $(attivaIconaOperativa);
    $(window).resize(chiudiIconeOper)
</script>
<!-- FINE FUNZIONI -->


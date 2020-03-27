<!-- FUNZIONI EMULATE DI ATTIVAZIONE DELL'ICONA OPERATIVA -->
<script>
    var attivaIconaOperativa = function(){
        $(".btn-icon-operativa").click(apriBoxOperativita);
    }

    var chiudiIconeOper = function(){
        event.stopPropagation();
        $(".icoope-overlay").remove();
        
    }

    var apriBoxOperativita = function(){
        var icoBtn = $(this);
        chiudiIconeOper();
        var icoOpeOl = $("<div>").addClass("icoope-overlay"),
            icoOpeOlClose = $("<span>").addClass("close").click(chiudiIconeOper);

        icoOpeOl.append(icoOpeOlClose);
        icoBtn.prepend(icoOpeOl);
        console.log("ES: dato input = ISIN: " + icoBtn.attr("data-isin"));
    }

    $(attivaIconaOperativa);
</script>
<!-- FINE FUNZIONI -->


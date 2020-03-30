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
            icoFunctions = $("<div>").addClass("icoope-functions loading");
        icoOpeOl.append(icoOpeOlClose,icoFunctions);
        icoBtn.prepend(icoOpeOl);
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
</script>
<!-- FINE FUNZIONI -->


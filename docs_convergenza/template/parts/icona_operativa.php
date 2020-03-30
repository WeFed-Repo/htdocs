<!-- FUNZIONI EMULATE DI ATTIVAZIONE DELL'ICONA OPERATIVA -->
<script>

    var attivaIconaOperativa = function(){
        chiudiIconeOper();
        $(".btn-icon-operativa").click(apriBoxOperativita);
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
        icoBtn.parents(".bootstrap-table").prepend(icoOpeOl.css({
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


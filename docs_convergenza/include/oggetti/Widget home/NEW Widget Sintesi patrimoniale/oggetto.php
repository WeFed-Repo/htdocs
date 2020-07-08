<div class="dbwidget loading" id="dbsintesi">
    <div class="titlebar">
        <h2>Sintesi patrimoniale</h2>
       	<a class="minibtn reload" id="dbsintesiReload" title="Ricarica"><span class="icon icon-aggiorna"></span></a>
    </div>

	<!-- Dati dinamici -->
    <div class="datioutput"></div>

	 <!-- Console "fondo" -->
    <div class="bottom-console">
        <a class="cta" href="#" title="Posizione patrimoniale">Posizione patrimoniale</a>
    </div>
    <!-- Fine console "fondo" -->

    <script type="text/javascript">
    $(function(){
        
        // Funzione di caricamento dei dati (post dell'id del "rapporto/conto/prodotto")
        dbsintesiCaricaDati = function(){
            var wId = $("#dbsintesi").addClass("loading");
            var dataUrl = "/include/oggetti/Widget home/NEW Widget Sintesi patrimoniale/dati_esempio.php";
           

            $.ajax({
                url: dataUrl,
                dataType: "html",
                success: function(data) {
                    wId.find(".datioutput").empty().html(data)
                    // Inseririe qui eventuali funzioni di plotting dei grafici e/o inizializzazioni

                    wId.removeClass("loading");
                },
                error: function() {
                    wId.removeClass("loading").find(".datioutput").empty().append(
                        $("<div>").addClass("msg-errore").html("<strong>Attenzione!</strong><br> Si &egrave; verificato un errore nel recupero dei dati.")
                    )
                }

            })
        };

        dbsintesiCaricaDati();
        
        $("#dbsintesi .minibtn.reload").click(dbsintesiCaricaDati);

    });
    </script>


 </div>
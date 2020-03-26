<div class="dbwidget loading" id="dbtitoli">
    <div class="titlebar">
        <h2>Titoli preferiti</h2>
       	<a class="minibtn reload" id="dbtitoliReload" title="Ricarica"><span class="icon icon-aggiorna"></span></a>
    </div>

	<!-- Dati dinamici -->
    <div class="datioutput"></div>
	 <!-- Console "fondo" -->
    <div class="bottom-console">
        <a class="cta" href="#" title="Titoli preferiti">Titoli preferiti</a>
    </div>
    <!-- Fine console "fondo" -->

    <script type="text/javascript">
    $(function(){
        
        // Funzione di caricamento dei dati (post dell'id del "rapporto/conto/prodotto")
        dbtitoliCaricaDati = function(){
            var wId = $("#dbtitoli").addClass("loading");
            var dataUrl = "/include/oggetti/Widget home/NEW Widget Titoli preferiti/dati_esempio.php";
           

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
        dbtitoliCaricaDati();
        $("#dbtitoli .minibtn.reload").click(dbtitoliCaricaDati);
    });
    </script>


 </div>
<div class="dbwidget loading" id="dbconto">
    <div class="titlebar">
        <h2>Riepilogo conto</h2>
    </div>

    <!-- Selettore rapporto -->
    <div class="dropdown selector" id="dbcontoselrapp">
        <input type="hidden" id="dbcontorappid" value="1"/>  
        <div class="selector-btn selector-el" data-toggle="dropdown">
            <span class="normale">Nome Cognome</span>
            <span class="evidente">Nome prodotto - 0123451</span>
        </div>
        <div class="dropdown-menu selector-els">
            <a  class="selector-el selected" data-idel="1">
                <span class="normale">Nome Cognome</span>
                <span class="evidente">Nome prodotto - 0123451</span>
            </a>
            <a class="selector-el" data-idel="2">
                <span class="normale">Nome2 Cognome2</span>
                <span class="evidente">Libretto risparmio - 6543212</span>
            </a>
            <a class="selector-el" data-idel="3">
                <span class="normale">Nome3 Cognome3</span>
                <span class="evidente">Nome prodotto3 - 6543213</span>
            </a>
            <a class="selector-el" data-idel="4">
               <span class="normale">Nome4 Cognome4</span>
                <span class="evidente">Nome prodotto4 - 6543214</span>
            </a>
        </div>
    </div>
    <!-- Fine selettore rapporto -->

	<!-- Dati dinamici -->
    <div class="datioutput"></div>

	 <!-- Console "fondo" -->
    <div class="bottom-console">
        <a class="cta" href="#" title="Saldo e movimenti">Saldo e movimenti</a>
    </div>
    <!-- Fine console "fondo" -->

    <script type="text/javascript">
    $(function(){
        
        // Funzione di caricamento dei dati (post dell'id del "rapporto/conto/prodotto")
        dbcontoCaricaDati = function(){
            var wId = $("#dbconto").addClass("loading");
            var dataUrl = "/include/oggetti/Widget home/NEW Widget Conto/dati_esempio.php";
           
            $.ajax({
                url: dataUrl,
                dataType: "html",
                data: {
                    rappid: $("#dbcontorappid").val()
                },
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
        dbcontoCaricaDati();

        $("#dbcontorappid").on("change",dbcontoCaricaDati);
       
    });
    </script>


 </div>
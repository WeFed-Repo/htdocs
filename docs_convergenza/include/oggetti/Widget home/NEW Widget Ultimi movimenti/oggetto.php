<div class="dbwidget loading" id="dbmovimenti">
    <div class="titlebar">
        <h2>Ultimi movimenti</h2>
        <div class="titlebar-console">
            <input type="hidden" id="dbmovimentivista" value="tabella"/>
            <a class="icon icon-listato_portafoglio switch-tabella selected" data-vista="tabella"></a>
            <a class="icon icon-grafico_portafoglio switch-grafico" data-vista="grafico"></a>
        </div>
    </div>
    <!-- Selettore rapporto -->
    <div class="dropdown selector" id="umselrapp">
        <input type="hidden" id="dbmovimentirappid" value="1"/>  
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
                <span class="evidente">Nome prodotto2 - 6543212</span>
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
    
    <!-- Elenco dinamico (default) -->
    <div class="datioutput"></div>
    
    <!-- Console "fondo" -->
    <div class="bottom-console">
        <a class="cta" href="#" title="Saldo e moviementi">Saldo e movimenti</a>
    </div>
    <!-- Fine console "fondo" -->

    <script type="text/javascript">
    $(function(){
        
        // Funzione di caricamento dei dati (post dell'id del "rapporto/conto/prodotto")
        dbmovimentiCaricaDati = function(){
            var wId = $("#dbmovimenti").addClass("loading");
            var dataUrl = "/include/oggetti/Widget home/NEW Widget Ultimi movimenti/dati_esempio.php";
            // Chiamata ai dati (es: Json) - i dati spediti sono, naturalmente, indicativi
            var vista = $("#dbmovimentivista").val()


            $.ajax({
                url: dataUrl,
                data: {
                    "rapp": $("#dbmovimentirappid").val(),
                    "vista": vista
                },
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

        dbmovimentiCaricaDati();

        $("#dbmovimenti .titlebar-console a.icon").click(dbmovimentiCaricaDati);

        $("#dbmovimentirappid").on("change",dbmovimentiCaricaDati);

    });
    </script>

</div>
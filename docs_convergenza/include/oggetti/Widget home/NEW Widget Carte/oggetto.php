<div class="dbwidget loading" id="dbcarte">
    <div class="titlebar">
        <h2>Riepilogo carte</h2>
    </div>

    <!-- Selettore rapporto -->
    <div class="dropdown selector" id="dbcarteselrapp">
        <input type="hidden" id="dbcarterappid" value="1"/>  
        <div class="selector-btn selector-el" data-toggle="dropdown">
            <span class="normale">Nome Cognome</span>
            <span class="evidente">KD*3451</span>
        </div>
        <div class="dropdown-menu selector-els">
            <a  class="selector-el selected" data-idel="1">
                <span class="normale">Nome Cognome</span>
                <span class="evidente">KD*3451</span>
            </a>
            <a class="selector-el" data-idel="2">
                <span class="normale">Nome2 Cognome2</span>
                <span class="evidente">Youcard - 6543212</span>
            </a>
            <a class="selector-el" data-idel="3">
                <span class="normale">Nome3 Cognome3</span>
                <span class="evidente">Bancomat - 6543213</span>
            </a>
             <a class="selector-el" data-idel="4">
                <span class="normale">Nome4 Cognome4</span>
                <span class="evidente">Bancomat - 6543219</span>
            </a>
             <a class="selector-el" data-idel="5">
                <span class="normale">Nome5 Cognome5</span>
                <span class="evidente">Bancomat - 6543222</span>
            </a>
        </div>
    </div>
    <!-- Fine selettore rapporto -->

	<!-- Dati dinamici -->
    <div class="datioutput"></div>

	 <!-- Console "fondo" -->
    <div class="bottom-console">
        <a class="cta" href="#" title="Dettaglio carta">Dettaglio carta</a>
    </div>
    <!-- Fine console "fondo" -->

    <script type="text/javascript">
    $(function(){
        
        // Funzione di caricamento dei dati (post dell'id del "rapporto/conto/prodotto")
        dbcarteCaricaDati = function(){
            var wId = $("#dbcarte").addClass("loading");
            var dataUrl = "/include/oggetti/Widget home/NEW Widget Carte/dati_esempio.php";
           
            $.ajax({
                url: dataUrl,
                dataType: "html",
                data: {
                    rappid: $("#dbcarterappid").val()
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
        dbcarteCaricaDati();
        $("#dbcarterappid").on("change",dbcarteCaricaDati);
       
    });
    </script>


 </div>
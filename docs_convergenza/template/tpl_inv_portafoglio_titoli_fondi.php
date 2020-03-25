<h2>Portafoglio titoli e fondi</h2>
<!-- SELETTORE DEPOSITO -->
<?php include ("./parts/selettore_deposito.php"); ?>
<!-- FINE SELETTORE DEPOSITO -->

<!-- FUNZIONI PER EMULAZIONE -->
<script type="text/javascript">
// Funzione di caricamento dei dati (emulazione)
var loadTableData = function(){
    $("#pageData").addClass("loading");
    setTimeout(function(){
        $("#pageData").removeClass("loading");
    }, 1000);
}
    
$(function(){
    loadTableData();

    // Esempio interattivita' elementi
    $("#selectStrumentiFinanziari").change(loadTableData);
    $("#refreshBtn").click(loadTableData);
});

</script>
<!-- FINE FUNZIONI PER EMULAZIONE -->

<!-- WRAPPER DEI RISULTATI DI PAGINA -->
<div id="pageData" class="loading">
    <!-- FORM CON SELETTORI PER COLONNE E STRUMENTI -->
    <form class="formGenerico noMarginBottom">
        <div class="row">
            <div class="col-sm-6">
                <!-- SELECT MULTIFUNZIONE -->

                <!-- FINE SELECT MULTIFUNZIONE -->
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="control-label">Strumenti finanziari</label>
                    <select class="form-control" id="selectStrumentiFinanziari">
                        <option selected value="Tutti gli strumenti">Tutti gli strumenti</option>
                        <option value="Azioni">Azioni</option>
                        <option value="Obbligazioni">Obbligazioni</option>
                        <option value="Derivati">Derivati</option>
                        <option value="CW e Certificates">CW e Certificates</option>
                        <option value="ETF">ETF</option>
                        <option alue="Marginazione">Marginazione</option>
                        <option value="Fondi">Fondi</option>
                    </select>
                </div>
            </div>
        </div>
    </form>

    <!-- FINE CON SELETTORI PER COLONNE E STRUMENTI -->
    <!-- BLOCCO AGGIORNAMENTI -->
    <div class="row">
        <div class="col-xs-12">
            <p class="note flRight noFloatMobile">
                <span class="flLeft">Ultimo Aggiornamento: 02/08/2016 ore 10:44:24</span> 
                <!--esempio di loading -->
                <a href="#1" class="no-underline btn-icon flLeft padding-l-m" id="refreshBtn"><i class="icon icon-2x icon-update"></i></a>
            </p>
        </div>
    </div>
    <!-- FINE BLOCCO AGGIORNAMENTI -->
    <section>
        <!-- TABELLA -->
    
        TABELLA PERSONALIZZATA
    
        <!-- FINE TABELLA -->

        <!-- PULSANTIERA SOTTO TABELLA -->
        
        <!-- FINE PULSANTIERA SOTTO TABELLA -->
    
    </section>
</div>
<!-- FINE WRAPPER DEI RISULTATI DI PAGINA -->

<!-- LISTA CON DETTAGLI -->
<section>
    <ul>
        <li>Per i titoli in divisa diversa dall'Euro, il "Prezzo di carico" e il "Prezzo di chiusura" sono espressi nella rispettiva valuta, mentre il "Controvalore di carico" e quello attuale sono espressi in Euro.</li>
        <li>Il "Prezzo medio di carico" e gli "Utili/Perdite" sono dati finanziari non validi ai fini fiscali per il calcolo del capital gain in quanto contengono, ad esempio, i dividendi per le azioni e il rateo per i titoli obbligazionari.</li>
        <li>Per conoscere il "Prezzo fiscale" delle posizioni in portafoglio accedi al dettaglio cliccando sull'icona operativa a fianco di ciascun titolo.</li>
    </ul>
</section>
<!-- FINE LISTA CON DETTAGLI -->


<!-- NOTE ESPANDIBILI -->
<section id="noteEtf">
    <div class="collapse-par">
        <div class="collapse-par-title collapsed" data-toggle="collapse" data-target="#collapseNoteEtf">Note fiscali sulla negoziazione degli ETF</div>
        <div class="collapse collapse-par-collapse" id="collapseNoteEtf">
            <p>Dal possesso di ETF (Exchange Traded Fund) si possono generare sia redditi di capitale, sia redditi diversi.</p>
            <p><strong>Redditi di capitale</strong></br>
            L'E.T.F. riconosce agli investitori i dividendi incassati a fronte delle azioni detenute in portafoglio, nonché i proventi del loro reinvestimento e quelli derivanti dalle operazioni di "prestito titoli" (ovvero dividendi).
            La normativa fiscale stabilisce che la differenza tra il ricavo e il costo sostenuto è oggetto di imponibilità fiscale, con la precisazione che il reddito di capitale è determinato dal differenziale positivo tra il NAV dell'operazione di vendita/rimborso e il NAV dell'operazione di acquisto/sottoscrizione, denominato Delta NAV. La sigla NAV è acronimo di Net Asset Value, e corrisponde al patrimonio netto del fondo diviso per il numero di quote in circolazione. Quando l'E.T.F. è acquistato e venduto nello stesso giorno, il suo Delta NAV sarà nullo.
            Nel caso in cui la posizione del cliente si sia formata sulla base di molteplici acquisti, effettuati a prezzi differenti, verrà utilizzato come prezzo NAV di acquisto un valore medio ponderato sulle quantità (calcolato sulla base dei valori lordi delle quote dei giorni in cui sono stati effettuati gli acquisti, ponderati sulle quantità).
            Sui redditi di capitale (proventi periodici e Delta NAV positivo) si applica una ritenuta del 12,50%, a titolo d'imposta per i percipienti persone fisiche e a titolo d'acconto nei confronti delle Società di capitali.
            </p>
            <p><strong>
            Redditi diversi</strong><br>
            L'eventuale reddito diverso è pari alla differenza tra prezzo di vendita e prezzo di acquisto meno il Delta NAV riferito alle medesime date di vendita e di acquisto. Le plus/minusvalenze come sopra determinate entreranno mensilmente a far parte del conteggio dell'imposta sostitutiva sui capital gain di cui al D. Lgs. 461/97 (Regime amministrato o gestito per le sole persone fisiche).</p>
        </div>
    </div>
</section>
<!-- FINE NOTE ESPANDIBILI -->
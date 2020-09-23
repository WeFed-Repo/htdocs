<!-- DIV QUESTIONARIO -->
<script type="text/javascript">
        // Esempio di automazione per la gestione degli errori
        var setError = function() {
            var errorBlock = $('#esempioerrore');
            errorBlock.show();
            $([document.documentElement, document.body]).animate({
                scrollTop: errorBlock.offset().top - 15 
            }, 500);
        }
        </script>
<div class="quest">
    <form action="#">
            <!-- DOMANDA -->
            <p>Benvenuto nel questionario.<br>
            Ti chiediamo di rispondere a queste poche domande per aiutarci a migliorare il nostro servizio. Potremmo collegare le risposte al tuo nominativo e, eventualmente, contattarti nel caso sia necessario un approfondimento.
            <br>Grazie per il tempo che ci dedicherai!</p>
            <!-- BLOCCO ERRORE -->
            <div class="errore" id="esempioerrore" style="display:none">
                <strong>Attenzione!</strong><br>
                Per proseguire occorre selezionare una risposta!
            </div>
            <!-- FINE BLOCCO ERRORE -->
            <p class="question">Quale delle seguenti affermazioni  descrive meglio il tuo percorso per arrivare a questo form di richiesta?</p>
            <div class="cbr-wrapper">
                <label class="cbr"><input type="radio" name="ans-1" value="1"><span class="text">Lorem ispsum dolor sit Lorem ispsum dolor sit Lorem ispsum dolor sit Lorem ispsum dolor sit Lorem ispsum dolor sit Lorem ispsum dolor sit</span></label>
                <label class="cbr"><input type="radio" name="ans-1" value="2"><span class="text">Lorem ispsum dolor sit Lorem ispsum dolor sit Lorem ispsum dolor sit Lorem ispsum dolor sit Lorem ispsum dolor sit Lorem ispsum dolor sit</span></label>
                <label class="cbr"><input type="radio" name="ans-1" value="3"><span class="text">Lorem ispsum dolor sit Lorem ispsum dolor sit Lorem ispsum dolor sit Lorem ispsum dolor sit Lorem ispsum dolor sit Lorem ispsum dolor sit</span></label>
                <label class="cbr"><input type="radio" name="ans-1" value="4"><span class="text">Lorem ispsum dolor sit Lorem ispsum dolor sit Lorem ispsum dolor sit Lorem ispsum dolor sit Lorem ispsum dolor sit Lorem ispsum dolor sit</span></label>
            </div>
            <!-- / DOMANDA -->
    </form>
</div>
<!-- / DIV QUESTIONARIO -->
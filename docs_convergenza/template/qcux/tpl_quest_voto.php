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
            <p class="question">Quanto &egrave; stato semplice ottenere il supporto necessario a risolvere il tuo problema?</p>
            <div class="cbr-wrapper voto">
                <label class="cbr"><input type="radio" name="ans-1" value="1"><span class="text">1</span><span class="milestone">Per nulla semplice</span></label>
                <label class="cbr"><input type="radio" name="ans-1" value="2"><span class="text">2</span></label>
                <label class="cbr"><input type="radio" name="ans-1" value="3"><span class="text">3</span></label>
                <label class="cbr"><input type="radio" name="ans-1" value="4"><span class="text">4</span></label>
                <label class="cbr"><input type="radio" name="ans-1" value="5"><span class="text">5</span></label>
                <label class="cbr"><input type="radio" name="ans-1" value="6"><span class="text">6</span></label>
                <label class="cbr"><input type="radio" name="ans-1" value="7"><span class="text">7</span></label>
                <label class="cbr"><input type="radio" name="ans-1" value="8"><span class="text">8</span></label>
                <label class="cbr"><input type="radio" name="ans-1" value="9"><span class="text">9</span></label>
                <label class="cbr"><input type="radio" name="ans-1" value="10"><span class="text">10</span><span class="milestone">Estremamente semplice</span></label>
            </div>
            <!-- / DOMANDA -->
    </form>
</div>
<!-- / DIV QUESTIONARIO -->
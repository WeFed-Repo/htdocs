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
            <!-- BLOCCO ERRORE -->
            <div class="errore" id="esempioerrore" style="display:none">
                <strong>Attenzione!</strong><br>
                E' necessario inserire un commento!
            </div>
            <!-- FINE BLOCCO ERRORE -->
            <p class="question">Quali sono gli aspetti maggiormente critici o particolarmente positivi della tua esperienza di adesione online al conto Webank?</p>
            <div class="textarea-wrapper">
                <span class="countercont">Massimo <span class="ccount"></span> caratteri</span>
                <textarea name="text" cols="30" rows="5" maxlength="300"></textarea>
            </div>
            <script type="text/javascript">
            // Esempio di inizializzazione della textarea
            var taCount = function(ta) {
                var maxlength = ta.attr("maxlength");
                ta.parents(".textarea-wrapper").find(".ccount").html(
                    maxlength - ta.val().length
                );
            }

            $(function(){
                $.each($(".textarea-wrapper textarea"),function(){
                    var ta = $(this);
                    taCount(ta);
                    ta.on("keyup change",function(){taCount(ta)});
                });
            });

            /*FUNZIONE PER IMPEDIRE L'INSERIMENTO DI CARATTERI SPECIALI: CONSENTITE LETTERE/NUMERI/SPAZIO/ACCENTI */
	        var ciRegexNote = /[a-zA-Z0-9/\s\.\,\?\'\!\:\(\)\-\%\u00C0-\u00F6\u00F8-\u00FF]+/, 
		    fieldNote = $("textarea");
		    fieldNote.on('keypress', function (event) {
		    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    		if (!ciRegexNote.test(key)) {
       		event.preventDefault();
       		return false;
    	}
	    });
            </script>
			<!-- / DOMANDA -->
    </form>
</div>
<!-- / DIV QUESTIONARIO -->

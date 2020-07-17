<!-- TITOLO DI PAGINA -->
<section>
    <div class="titolo">
            <h1>
                <div class="row">
                    <div class="col-sm-8">
                        <span>Acquisto ed emissione polizza<br><span>FIRMA DELLA DOCUMENTAZIONE CONTRATTUALE</span></span>
                    </div>
                    <div class="col-sm-4">	
                        <div class="pager pull-right">
                            <div class="circle current_page">1</div>
                            <div class="circle current_page">2</div>
                            <div class="circle">3</div>
                        </div>
                    </div>
                    
                </div>
            </h1>
    </div>
</section>

<section>
    <h3 class="titleSection titleForm">Il pagamento della polizza è andato a buon fine.</h3>
    <p>Per finalizzare l'emissione della polizza prosegui con la presa visione e la sottoscrizione della documentazione contrattuale</p>
    <p><a target="_blank" href="https://www.google.it" onclick="$('.tooltip-masked').remove(); $('#pwdInput').attr('disabled', false)"><i class="icon icon-file_pdf_fill fLeft btnLink" title="
    Nome_documento"></i> <span class="fLeft colorVerde paddingLeftSmall">
    Nome_documento</span></a>
</section>

<section>
    <h3 class="titleSection titleForm">SOTTOSCRIZIONE CONDIZIONI GENERALI</h3>
    <p>In approvazione  del contenuto e delle condizioni riportate nella documentazione contrattuale, appongo la mia firma.</p>
    <!--NUOVO OGGETTO DI FEEDBACK-->
    <section>
        <div class="row">
            <div class="col-sm-12">
                <div class="esito-inline">
                    <i class="icon iconBig icon-alert_ok flLeft"></i>
                	<span class="esito-text">Clausule generali del contratto firmate a distanza</span>
                </div>		
            </div>
		</div>
    </section>
    <!--NUOVO OGGETTO DI FEEDBACK-->
		
   
    <div class="row" id="condGen">
        <div class="col-xs-12 col-sm-4">
            <p>(Inserisci la Password usa e getta/OTP generata dal tuo dispositivo di sicurezza).</p>
        </div>
        <div class="col-xs-12 col-sm-4 form-field-input has-feedback">
            <span data-toggle="tooltip" class="tooltip-masked input-text" data-title="Aprire il documento pdf per procedere alla firma"></span>
            <input type="text" disabled id="pwdInput" value="" name="" autocomplete="off" class="form-control">
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="btn-align-right">
                <div>
                    <a type="button" class="btn btn-primary" title="acquista polizza" id="firma">firma</a>
                </div>
            </div>
        </div>
    </div>
    <div id="condSpec" style="display:none">
        <h3 class="titleSection titleForm">SOTTOSCRIZIONE CLAUSOLE VESSATORIE</h3>
        <p>In approvazione esplicita delle clausole vessatorie clausola 1, clausola 2, clausola3, appongo la mia firma.</p>
        <section id="messaggioFirma2" style="display:none">
            <div class="row">
                <div class="col-sm-12">
                    <div class="messagePanel success hidden-print bgBoxBonif bgBoxSucc messageFirma">
                        <div class="row">
                            <div class="col-xs-12 linHeighVert"><i class="icon iconBig icon-alert_ok"></i><span>Clausole Vessatorie del contratto firmate a distanza</span>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <p></p>
                                    </div>
                                </div>
                            </div>					
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="btn-align-right">
                <div>
                    <a type="button" class="btn btn-primary" title="acquista polizza" id="prosegui">prosegui</a>
                </div>
          </div>
        </section>
        <div class="row" id="condGenFirma">
            <div class="col-xs-12 col-sm-4">
            <p>(Inserisci la Password usa e getta/OTP generata dal tuo dispositivo di sicurezza).</p>
            </div>
            <div class="col-xs-12 col-sm-4 form-field-input">
                <input id="pwdInput2" type="text" value="" name="" autocomplete="off" class="form-control">
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="btn-align-right">
                    <div>
                        <a type="button" class="btn btn-primary" title="acquista polizza" id="firma2">firma</a>
                    </div>
                </div>
            </div>
        </div>
        <section id="messaggioFirma3" style="display:none">
            <div class="row">
                <div class="col-sm-12">
                    <div class="messagePanel success hidden-print bgBoxBonif bgBoxError messageFirma">
                        <div class="row">
                            <div class="col-xs-12 linHeighVert"><i class="icon iconBig icon-alert_ok"></i><span>PASSWORD NON VALIDA</span>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <p>Attendi 30 secondi prima di generarne una nuova</p>
                                    </div>
                                </div>
                            </div>					
                        </div>
                        
                    </div>
                </div>
            </div>
         </section>
         
    </div>

<script>
    $("#firma").on("click", function() {
        if($("#pwdInput").val().length > 0) {
            $("#messaggioFirma,#condSpec").show();
            $("#condGen").hide();
        }
    })
    $("#firma2").on("click", function() {
        //ESEMPIO DI OK OTP IL CASO CAMPO VUOTO E' SOLO UN ESEMPIO
        if($("#pwdInput2").val().length > 0) {
            $("#condGenFirma,#messaggioFirma3").hide();
            $("#messaggioFirma2").show();
        }
        //ESEMPIO DI FALLIMENTO OTP IL CASO CAMPO VUOTO E' SOLO UN ESEMPIO
        else {
            $("#messaggioFirma3").show();
            
        }
    })
</script>

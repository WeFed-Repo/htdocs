<!-- Titolo_001 -->
<section>
    <div class="row">
	    <div class="col-sm-12">
            <div class="list-icon-wrapper to-right">
                <div class="text-with-icon">
                    <a href="#">
                        <span class="icon icon-trash_filled" title="icon-trash_filled"></span>
                        <span class="no-mobile-label">Rifiuta pratica</span>
                    </a>
                </div>
                <div class="text-with-icon">
                    <a href="#">
                        <span class="icon icon-numeroverde_desktop" title="icon-numeroverde_desktop"></span>
                        <span class="no-mobile-label">Contatti</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Titolo -->
    <h1>
        <div class="row">
            <div class="col-sm-8">
                <span>NOME_PRATICA_UNIVOCO</span>
            </div>
        </div>
    </h1>
    <!-- Fine titolo -->
    <p>Prendi visione della documentazione e apponi le firme o le spunte dove richiesto.</p>
<section> 

<!-- NEW -->
<div class="row">
	<div class="col-sm-6">
        <div class="titleIndexContainer">Documento <span>1</span> di <span>4</span></div>
    </div>
    <div class="col-sm-6">
        <div class="documentTitleContainer">"NOME_DOCUMENTO_1_DA_VISIONARE"</div>
    </div>
</div>

<!-- Box wrapper pdf -->
<section>
   <div id="pdfCont" class="pdf-container loading"></div>
    <script>
        // Inizializzazione del PDF
        var pdfdoc = $("#pdfCont").pdf({url:"./statici/documento_prova.pdf"});
    </script>
    
</section>
<!-- Fine box pdf -->
<form id="firmeForm">
<!-- NEW -->
<section>
    <div class="row mobile-reverse">
        <div class="col-sm-11" id="checkDoc">
            <!-- Confirmation -->
            <div class="accept-wrapper">
                <i class="icon css-square" title="css-square" onclick="pdfdoc.goto('#ancora');$('.accept-wrapper').hide();$('.accept-wrapper.accepted').show();"></i>
                <!-- link con esempio ancora -->
                <span class="text">Ho preso visione del documento <strong>"NOME_DOCUMENTO_1_DA_VISIONARE" (click per test ancoraggio pdf)</strong></span>
                <!-- fine link con esempio ancora -->
            </div>
            <div class="accept-wrapper accepted" style="display:none">                
                <i class="icon icon-spunta" title="icon-spunta"></i>
                <span class="text">Ho preso visione del documento <strong>"NOME_DOCUMENTO_1_DA_VISIONARE"</strong></span>
            </div>           	           
        </div>
        <div class="col-sm-1">
             <!-- Icon with text -->
            <div class="text-with-icon ellips">
                <span class="glyph glyph-uread_pdf" title="glyph-uread_pdf"></span>                
                <a href="#" class="hidden-xs">PDF</a>
                <a href="#" class="visible-xs ellips">NOME_DOCUMENTO_3_DA_VISIONARE_E_FIRMARE</a>                
            </div>
        </div>
    </div>
</section>

<!-- Signature 1-->  
<section>         
    <div class="esito-inline">
        <i class="icon iconBig icon-alert_ok flLeft"></i>
        <p class="esito-text"><i><strong>FIRMA 1&nbsp; &nbsp;&nbsp;Firmato digitalmente</strong></i></p>
    </div>
</section>
<!-- Fine signature 1-->

<!-- Signature 2 -->  
<section>         
    <div class="esito-inline">
        <i class="icon iconBig icon-alert_ok flLeft"></i>
        <p class="esito-text"><i><strong>FIRMA 2&nbsp; &nbsp;&nbsp;Firmato digitalmente</strong></i></p>
    </div>
</section>
<!-- Fine signature 2-->

<!-- Blocco firma -->
<section>

    <div class="titleIndexContainer">Firma <span>3</span> di <span>3</span></div>

    <div class="formWrapper">
        <div class="form-group">
            <div class="form-field-input">
                <label class="control-label">Inserisci la Password che usi per accedere al sito</label>
                <div class="row">
                    <div class="col-xs-12 col-sm-3 no-label" style="position:relatve;">
                        <input type="text" id="txtPassword" value="" name="" autocomplete="off" class="form-control">
                        <span class="toggle_pwd icon icon-show" style="position:absolute;right:30px; top:15px"></span>
                        <span class="toggle_pwd icon icon-hide hidden" style="position:absolute;right:30px; top:15px"></span>
                    </div>
                    <div class="col-xs-12 col-sm-9 no-label">
                        <a type="button" href="#" class="btn btn-primary  btn-inline btn-no-label" title="Firma">Firma</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fine blocco firma -->

<section>
    <!-- Testo_010 -->
    <!-- Bottone_002 --> 
    <div class="form-group btnWrapper clearfix"> 
        <!-- Testo introduttivo per i bottoni -->
        <p class="note to-right">Cliccando "Prosegui" non potrai più modificare i passaggi precedenti</p>    
  		<!-- Fine testo introduttivo per i bottoni -->
        <div class="btn-align-right">
  		 	<div>
                <a type="button" href="#" class="btn btn-default disabled" title="prosegui">riprendi dopo</a>
                <a type="button" href="#" class="btn btn-default">riprendi dopo</a>
  				<a type="button" href="#" class="btn btn-primary" title="prosegui" id="btnProsegui">prosegui</a>
  			</div>
        </div>
    </div>
</section>
</form>
<script>
     /*FUNZIONE DI ESEMPIO PER LA GESTIONE ERRORI */
     $(function () {
		$("#btnProsegui").click(function () {
            var errors = [],
                fieldpwd = $('#txtPassword'),
                fieldpv = $('#checkDoc')
            if(!(fieldpv.find('.accept-wrapper:visible').hasClass('accepted'))) {
                errors.push({ field: fieldpv, text: "Seleziona per proseguire" });
            }
            if (fieldpwd.val() === "") {
                errors.push({ field: fieldpwd, text: "Firma per proseguire" });
            }
            setHasErrors(errors, "#firmeForm");
			if (errors.length) {
				$(errors[0].field).find('input').trigger('focus');
			}
			
			return (!errors.length);
        })
    })
    </script>

<script>
    $(function () {
        $(".toggle_pwd").click(function () {
            $(".toggle_pwd").toggleClass("hidden ");
            var type = ($("#txtPassword").attr("type")=="password") ? "text" : "password";
            $("#txtPassword").attr("type", type);
        });
    });
</script>

<style>
    /* Iframe PDF with title and Document Index*/
    #pdf{
        height: 500px;
        width: 100%;
        display:block;
    }

    #pdfFrame {
        height: 100%;
        width: 100%;
        display:block;
    }

    @media only screen and (max-width: 770px) {
        #pdf, #pdfFrame{
            display:none;
        }
    }
</style>

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
    <style>
        .pdf-container, .pdf-container iframe {height:500px;width:100%;border:0 none;}
    </style>
    <div id="pdfCont" class="pdf-container loading"></div>
    <!-- <div id="pdf"></div> -->
    <script>
    // Gestione pdf
    $.fn.extend({
        pdf: function(par){
            var pdfCont = $(this).empty();
            var pdfIframe = $("<iframe>").attr({"src": par.url, "type": "application/pdf"});
            pdfCont.append(pdfIframe);
            pdfCont["goto"] = function(anchor) {
                $("#pdfCont").pdf({url: pdfIframe.attr("src").split("#")[0] + anchor});
            }
            return pdfCont.removeClass("loading");
        }
    });

    // Inizializzazione del PDF
    var pdfdoc = $("#pdfCont").pdf({url:"./statici/documento_prova.pdf"});
    </script>

</section>
<!-- Fine box pdf -->

<!-- NEW -->
<section>
    <div class="row mobile-reverse">
        <div class="col-sm-11">
            <!-- Confirmation -->
            <div class="accept-wrapper">
                <i class="icon css-square" title="css-square" onclick="pdfdoc.goto('#ancora');"></i>
                <!-- link con esempio ancora -->
                <span class="text">Ho preso visione del documento <strong>"NOME_DOCUMENTO_1_DA_VISIONARE" (click per test ancoraggio pdf)</strong></span>
                <!-- fine link con esempio ancora -->
            </div>
            <div class="accept-wrapper accepted">                
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
                        <span class="toggle_pwd icon icon-alert_ok" style="position:absolute;right:30px; top:15px"></span>
                        <span class="toggle_pwd icon icon-alert_error hidden" style="position:absolute;right:30px; top:15px"></span>
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
  				<a type="button" href="#" class="btn btn-primary" title="prosegui">prosegui</a>
  			</div>
        </div>
    </div>
</section>

<script>
    $(function () {
        $(".toggle_pwd").click(function () {
            $(".toggle_pwd").toggleClass("hidden ");
            var type = ($("#txtPassword").attr("type")=="password") ? "text" : "password";
            $("#txtPassword").attr("type", type);
        });
    });
</script>
<?php

/*
<script src="/common/fe/assets/pdfobject_VV2021.js"></script>
<script>
    function clipPDF(PDFlink,PDFanchor) {
    
        var target = document.getElementById("pdf");
        
        if (window.document.documentMode) {
            // ## Do IE stuff ##

            if(PDFanchor == false){
                var OPPFocus = "";
            }else{
                var OPPFocus = "#nameddest=" + PDFanchor;
            }

            // # INIT
            var newFrame = document.createElement("iframe");
            newFrame.setAttribute("id", "pdfFrame");
            newFrame.setAttribute("src", PDFlink + OPPFocus);
            newFrame.setAttribute("type", "application/pdf");
            target.appendChild(newFrame);

            // ATTENTION: For Anchor Effect in IE
            //IE11 Iframe reload not working, so after removing old iframe, we create a new iframe with the updated SRC
            
            //IE11 not support [.remove()]
          
            // APPEND new Iframe
            
        }else{
            // ## Do Modern Browsers stuff ##
            var options = {
                pdfOpenParams: {
                    navpanes: 0,
                    toolbar: 0,
                    statusbar: 0,
                    pagemode: "thumbs",
                },
            };
            if(PDFanchor == false){
                var OPPFocus = "";
            }else{
                var OPPFocus = "#" + PDFanchor;
            }
            var myPDF = PDFObject.embed(PDFlink + OPPFocus, "#pdf", options);
        }
    }
    // window.onload = clipPDF("./statici/PDF_named_destinations.pdf", false);
</script>	
*/
?>

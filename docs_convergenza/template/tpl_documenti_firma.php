<style>
    /* Titolo Area
    .titolo {
        margin-bottom: 50px;
    } */
    
    /* Iframe PDF with title and Document Index*/
    #pdf{
        height: 500px;
        width: 100%;
    }

    #pdfFrame {
        height: 100%;
        width: 100%;
    }

    /* Titoletto con index container */
    .titleIndexContainer {
        text-align: left;
        font-size: 14px;
        font-weight: 600;
        padding: 0px;
        margin-bottom: 10px;
    }

    .titleIndexContainer span {
        font-size: 18px;
    }

    /* Titolo di documento sulla destra */
    .documentTitleContainer {
        padding-bottom: 5px;
        font-size: 16px;
        font-weight: normal;
        text-align: right;
        margin:0px;
    }

    /* Acceptance element*/
    .accept-wrapper {
        position: relative; 
        margin: 3px 0 15px;
    }

    .accept-wrapper .icon {
        position: absolute;
        z-index: 1;
        top: 0px;
        left: 0px;
        display: block;
        width: 20px;
        height: 20px;
        color: #0e977f;
        cursor: pointer;
    }

    .accept-wrapper .text {
        padding-left: 30px;
    }

    .accept-wrapper.accepted .text {
        font-weight: bold;
    }

    i.css-square {
        height: 20px;
        width: 20px;
        border: 2px solid #0e977f;
        display: inline-block;
    }
    
    /* Text-with-Icon Element, wrapper and right float*/
    .list-icon-wrapper.to-right .text-with-icon {
        float: right;
        margin-right: 14px;
    }

    .list-icon-wrapper.to-right .text-with-icon:first-child {
        margin-right: 0px;
    }

    .text-with-icon {
        position: relative;
    }

    .text-with-icon .glyph {
        position: absolute;
        z-index: 1;
        top: 0px;
        left: 0px;
        display: block;
        font-size: 24px;
    }

    .text-with-icon .icon {
        position: absolute;
        z-index: 1;
        top: 0px;
        left: 0px;
        display: block;
        font-size: 18px;
        color: #0e977f;
    }

    .text-with-icon a {
        font-size: 16px;
        text-decoration: underline;
        color: #0e977f;
        padding-left: 24px;
    }


    /* Note */
    p.note.to-right{
        text-align: right;
    }
</style>

<!-- Titolo_001 -->
<section>
    <div class="row">
	    <div class="col-sm-12">
            <div class="list-icon-wrapper to-right">
                <div class="text-with-icon">
                    <i class="icon icon-trash_filled" title="icon-trash_filled"></i>
                    <a href="#">Rifiuta pratica</a>
                </div>
                <div class="text-with-icon">
                    <i class="icon icon-numeroverde_desktop" title="icon-numeroverde_desktop"></i>
                    <a href="#">Contatti</a>
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
    <div id="pdf"></div>
</section>
<!-- Fine box pdf -->

<!-- NEW -->
<section>
    <div class="row">
        <div class="col-sm-11">
            <!-- Confirmation -->
            <div class="accept-wrapper">
                <i class="icon css-square" title="css-square"></i>
                <span class="text">Ho preso visione del documento <strong>"NOME_DOCUMENTO_1_DA_VISIONARE"</strong></span>
            </div>
            <div class="accept-wrapper accepted">                
                <i class="icon icon-spunta" title="icon-spunta"></i>
                <span class="text">Ho preso visione del documento <strong>"NOME_DOCUMENTO_1_DA_VISIONARE"</strong></span>
            </div>           	           
        </div>
        <div class="col-sm-1">
             <!-- Icon with text -->
            <div class="text-with-icon">
                <span class="glyph glyph-uread_pdf" title="glyph-uread_pdf"></span>
                <a href="#">PDF</a>
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
                    <div class="col-xs-12 col-sm-3 no-label">
                        <input type="text" id="" value="" name="" autocomplete="off" class="form-control"> 
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

    window.onload = function() {
        /*With IE only <IFRAME> work with Open PDF Params and Only with In-Link Params
        IMPORTANT: Use only Named Destinations, NOT anchors or bookmarks for IE
        add anchors for all modern browsers */
        var target = document.getElementById("pdf");
        var newFrame = document.createElement("iframe");
        newFrame.setAttribute("id", "pdfFrame");
        newFrame.setAttribute("src", "./statici/PDF_named_destinations.pdf");
        newFrame.setAttribute("type", "application/pdf");
        target.appendChild(newFrame);
    }
</script>


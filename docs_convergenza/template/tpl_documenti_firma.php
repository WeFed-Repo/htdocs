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

    .documentIndexContainer {
        text-align: left;
    }

    .documentIndexContainer p {
        font-size: 14px;
        font-weight: 600;
        padding: 0px;
    }

    .documentIndexContainer span {
        font-size: 18px;
    }

    .documentTitleContainer {
        padding-bottom: 5px;
    }
    .documentTitleContainer h2 {
        font-size: 16px;
        font-weight: normal;
        text-align: right;
        margin:0px;
    }

    /* Acceptance element*/
    .accept-wrapper {
        position: relative; 
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

    .accept-wrapper p {
        padding-left: 30px;
    }

    .accept-wrapper span {
        font-weight: bold;
    }

    .accept-wrapper.accepted p {
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

    /* Signature Area */
    .signature-wrapper .esito-inline {
        margin: 40px 0px;
    }

    .signature-wrapper .icon {
        font-size: 24px;
        margin-top: 5px;
    }
    .signature-wrapper .esito-inline p {
        font-weight: bold;
    }

    .signature-wrapper .esito-inline span {
        font-style: italic;
        margin-left: 10px;
        font-size: 15px;
    }

    .signature-wrapper .note {
        padding-top: 15px;
        padding-bottom: 10px;
    }

    .signature-wrapper .btn-inline.no-label {
        margin-top: 8px;
    }

    .signature-wrapper .btn-inline.no-label a {
        margin: 0px;
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
    <div class="titolo">
        <h1>
            <div class="row">
                <div class="col-sm-8">
                    <span>NOME_PRATICA_UNIVOCO</span>
                </div>
            </div>
        </h1>
        <p>Prendi visione della documentazione e apponi le firme o le spunte dove richiesto.</p>  
    </div>
<section> 

<!-- NEW -->
<div class="row">
	<div class="col-sm-6">
        <!--<section>-->
            <div class="documentIndexContainer">
                <p>Documento
                    <span>1</span>
                    di
                    <span>4</span>
                </p>
            </div>
        <!--</section>-->
	</div>
    <div class="col-sm-6">
        <!--<section>-->
            <div class="documentTitleContainer">
                <h2>“NOME_DOCUMENTO_1_DA_VISIONARE”</h2>
            </div>
        <!--</section>-->
    </div>
</div>


<section>
    <div id="pdf"></div>
</section>

<!-- NEW -->
<section>
    <div class="row">
        <div class="col-sm-11">
            <!-- Confirmation -->
            <div class="accept-wrapper">
                <i class="icon css-square" title="css-square"></i>
                <p>Ho preso visione del documento <span>“NOME_DOCUMENTO_1_DA_VISIONARE”</span></p>
            </div>
            <div class="accept-wrapper accepted">                
                <i class="icon icon-spunta" title="icon-spunta"></i>
                <p>Ho preso visione del documento <span>“NOME_DOCUMENTO_1_DA_VISIONARE”</span></p>
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

<!-- Signature Area -->  
<section>         
    <div class="signature-wrapper">
        <!-- Signature Confirmation -->
        <!-- Esito inline Box 033 -->
        <div class="signature-notifications">
            <div class="esito-inline">
                <i class="icon iconBig icon-alert_ok flLeft"></i>
                <p class="esito-text">FIRMA 1 <span>Firmato digitalmente</span></p>
            </div>
            <div class="esito-inline">
                <i class="icon iconBig icon-alert_ok flLeft"></i>
                <p class="esito-text">FIRMA 2 <span>Firmato digitalmente</span></p>
            </div>
        </div>
        <!-- Signature Box-->
        <div id="signature-area">
            <div class="documentIndexContainer">
                <p>Firma
                    <span>1</span>
                    di
                    <span>3</span>
                </p>
            </div>
            <div class="formWrapper">
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <p class="note">Inserisci la Password che usi per accedere al sito</p>
                        </div>
                        <div class="form-field-input col-xs-12 col-sm-3">
                            <!-- <label class="control-label">Inserisci la Password che usi per accedere al sito</label> -->
                            <input type="text" id="" value="" name="" autocomplete="off" tabindex="1" class="form-control"> 
                        </div>
                        <div class="form-field-input col-xs-12 col-sm-9 btn-inline no-label">
                            <a type="button" href="#" class="btn btn-primary btn-gen-pwd" title="Firma">Firma</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <!-- Testo_010 -->
    <!-- Bottone_002 --> 
    <div class="form-group btnWrapper clearfix"> 
        <p class="note to-right">Cliccando “Prosegui” non potrai più modificare i passaggi precedenti</p>    
  		<div class="btn-align-right">
  		 	<div>
                <a type="button" href="#" class="btn btn-default">riprendi dopo</a>
  				<a type="button" href="#" class="btn btn-primary" title="prosegui">prosegui</a>
  			</div>
        </div>
    </div>
</section>

<section>
    <!-- Testo_010 -->
    <!-- Bottone_002 --> 
    <div class="form-group btnWrapper clearfix"> 
        <p class="note to-right">Cliccando “Concludi” non potrai più modificare i passaggi precedenti</p>    
  		<div class="btn-align-right">
  		 	<div>
                <a type="button" href="#" class="btn btn-default">riprendi dopo</a>
  				<a type="button" href="#" class="btn btn-primary" title="concludi">concludi</a>
  			</div>
        </div>
    </div>
</section>

<section>
    <!-- Testo_010 -->
    <!-- Bottone_002 --> 
    <div class="form-group btnWrapper clearfix"> 
        <p class="note to-right">Cliccando “Concludi” non potrai più modificare i passaggi precedenti</p>    
  		<div class="btn-align-right">
  		 	<div>
                <a type="button" href="#" class="btn btn-default disabled" title="prosegui">riprendi dopo</a>
  				<a type="button" href="#" class="btn btn-primary" title="concludi">concludi</a>
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


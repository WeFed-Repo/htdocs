<style>
    #pdf{
        height: 500px;
        width: 100%;
    }
    #pdfFrame{
        height: 100%;
        width: 100%;
    }

    .documentIndexContainer{
        text-align: left;
    }

    .documentIndexContainer p{
        font-size: 14px;
        font-weight: 600;
        padding: 0px;
    }
    .documentIndexContainer span{
        font-size: 18px;
    }

    .documentTitleContainer{
        padding-bottom: 5px;
    }
    .documentTitleContainer h2{
        font-size: 16px;
        font-weight: normal;
        text-align: right;
        margin:0px;
    }

    .accept-wrapper{
        position: relative; 
    }

    .accept-wrapper .icon{
        position: absolute;
        z-index: 1;
        top: 0px;
        left: 0px;
        display: block;
        width: 20px;
        height: 20px;
    }

    .accept-wrapper p{
        padding-left: 30px;
    }

    .accept-wrapper span{
        font-weight: bold;
    }

    i.css-square{
        height: 20px;
        width: 20px;
        border: 2px solid #0e977f;
        display:inline-block;
    }

    .accept-wrapper.accepted p{
        font-weight: bold;
    }

    .icon-with-text{
        position: relative;
        float:right;
    }

    .icon-with-text .glyph{
        position: absolute;
        z-index: 1;
        top: 0px;
        left: 0px;
        display: block;
    }

    .icon-with-text .icon{
        position: absolute;
        z-index: 1;
        top: 0px;
        left: 0px;
        display: block;
        font-size: 18px;
        color: #0e977f;
    }

    .icon-with-text a{
        font-size: 16px;
        text-decoration: underline;
        color: #0e977f;
        padding-left: 24px;
        padding-right: 14px;
    }

    /* Corretto?? */
    p.note{
        text-align: right;
    }
</style>

<!-- Form_110 -->
<style>
	.has-feedback input[type="radio"] {
    	margin-top:0;
	}
	.informativa label.has-feedback { width:100%}
</style>

<!-- Titolo_001 -->
<section>
    <div class="row">
	    <div class="col-sm-12">
            <div class="icon-list-wrapper">
                <div class="icon-with-text">
                    <i class="icon icon-trash_filled" title="icon-trash_filled"></i>
                    <a href="#">Rifiuta pratica</a>
                </div>
                <div class="icon-with-text">
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
    </div>
<section>

<p>Prendi visione della documentazione e apponi le firme o le spunte dove richiesto.</p>    

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
            <div class="icon-with-text">
                <span class="glyph glyph-uread_pdf" title="glyph-uread_pdf"></span>
                <a href="#">PDF</a>
            </div>
        </div>
    </div>
</section>

<section>
    <!-- Testo_010 -->
    <p class="note">Cliccando “Prosegui” non potrai più modificare i passaggi precedenti</p>
    <!-- Bottone_002 --> 
    <div class="form-group btnWrapper clearfix">     
  		<div class="btn-align-right">
  		 	<div>
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

<!-- Form_110 -->
<script>
bloccoDoc = $(".informativa");
bloccoDoc.each(function(index){
	var openedLink = 0,
	el = $(this);
	el.find("a.doc:not(.opened)").on("click", function(){
		el.addClass("opened");
		openedLink++
		if(openedLink === el.find("a.doc").length)
		{
			el.find(".tooltip-masked").remove();
			el.find("input").attr("disabled", false);
		}
})
})
</script> 


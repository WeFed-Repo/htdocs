<section>
    <!-- Titolo_001 -->
    <div class="titolo">
        <h1>
            <div class="row">
                <div class="col-sm-8">
                    <span>NOME_PRATICA_UNIVOCO</span>
                </div>
            </div>
        </h1>  
    </div>
    <p>Sottoscrizione completata</p>
<section> 

<section>
    <div class="row">
        <div class="col-sm-12">                   
            <p><strong>Grazie!</strong> Hai completato l’accettazione di tutti i documenti che trovi qui di seguito riepilogati.</p>
        </div>
    </div>
</section>

<!-- NEW -->
<section>
    <div class="row">
	    <div class="col-sm-12">
            <div class="list-icon-wrapper not-inline">
                <h3>RIEPILOGO DOCUMENTI</h3>
                <!-- Casistica Image -->
                <div class="text-with-icon ellips">
                    <span class="image image-uread_pdf" title="image-uread_pdf"></span>
                    <a href="#">Nome_Documento_1_Da_Visionare</a>
                </div>
                <!-- Casistica Glifo -->
                <div class="text-with-icon ellips">
                    <span class="glyph glyph-uread_pdf" title="glyph-uread_pdf"></span>
                    <a href="#">Nome_Documento_2_Da_Firmare</a>
                </div>
                <div class="text-with-icon ellips">
                    <span class="glyph glyph-uread_pdf" title="glyph-uread_pdf"></span>
                    <a href="#">Nome_Documento_3_Da_Visionare_e_Firmare</a>
                </div>
                <div class="text-with-icon ellips">
                    <span class="glyph glyph-uread_pdf" title="glyph-uread_pdf"></span>
                    <a href="#">Nome_Documento_4_Da_Firmare</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <!-- Testo_010 -->
    <!-- Bottone_002 --> 
    <div class="form-group btnWrapper clearfix">     
  		<div class="btn-align-right">
  		 	<div>
  				<a type="button" href="#" class="btn btn-primary" title="prosegui">vai a contratti e proposte</a>
  			</div>
        </div>
    </div>
</section>

<!-- add to body overflow-y: hidden; -->
<div id="maurizio" style="z-index:0.8; position:fixed;top:62px; left:0px; width:100%;height:calc(100% - 62px); background-color:blue; opacity:0.8;">
    <div style="margin:20px; background-color:red; height:calc(100% - 100px); overflow: scroll;">
        <!-- <div style="margin:10px 0px;height:1200px; background-color:orange;"></div> -->
        <div class="pdf-container loading" data-url="./statici/documento_prova.pdf"></div>
    </div>
    <div style="margin:20px; background-color:green; height: 40px;">
    </div>
</div>

<script type="text/javascript">
    $(function(){$("body").append($("#maurizio"))})
</script>
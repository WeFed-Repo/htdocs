<style>   

     /* # Text-with-Icon Element, wrapper and right float # */
    /* ## List Container ## */
    .list-icon-wrapper {
        margin-bottom: 30px;
    }

    .list-icon-wrapper.not-inline .text-with-icon{
        margin-bottom: 6px;
    }

    /* ## Text with icon Element ## */
    .text-with-icon {
        position: relative;
        width: fit-content;
    }

    .text-with-icon .linker {
        text-decoration: none;
        padding-left: 0px;
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

    .text-with-icon .image {
        position: absolute;
        z-index: 1;
        top: 0px;
        left: 0px;
        width: 20px;
        height: 20px;
        display: block;
        background-repeat: no-repeat;
        background-size: contain;
        background-color: lightgray;
    }

    /* Change Positions */
    .text-with-icon.right-icon .text, .text-with-icon.right-icon .sub-text{
        padding-left: 0px;
        padding-right: 24px;
    }

    .text-with-icon.right-icon .image, .text-with-icon.right-icon .glyph, .text-with-icon.right-icon .icon{
        right: 0px;
        left: auto;
    }

    /* Text-with-Icon Element right float*/
    .list-icon-wrapper.to-right, .list-icon-wrapper.to-right .text-with-icon {
        float: right;
    }
    .list-icon-wrapper.to-right .text-with-icon {
        margin-right: 14px;
    }

    /* Change Texts */
    .text-with-icon a {
        font-size: 16px;
        text-decoration: underline;
        color: #0e977f;
        padding-left: 24px;
    }

    .text-with-icon .text {
        font-size: 16px;
        font-weight: bold;
        text-decoration: none;
        padding-left: 24px;
        color: black;
    }

    /* ## Declinazione All Link ## */
    .text-with-icon .underline {
        text-decoration: underline;
    }

    .text-with-icon .sub-text {
        font-size: 12px;
        font-weight: normal;
        text-decoration: none;
        padding-left: 24px;
        color: black;
        display: block;
    }

    .text-with-icon.ellips{
        width: 100%;
        text-overflow: ellipsis;
        display: block;
        overflow: hidden;
    }

    @media only screen and (max-width: 770px) {
        .form-group.btnWrapper .btn-align-right {
            float: none;
            text-align: center;
        }
    }
    

</style>

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
            <!-- Box_005 -->
            <div class="box-feedback-bordered success hidden-print">
                <div>
                    <h3>Grazie!</h3>
                    <p>Hai completato l’accettazione di tutti i documenti che trovi qui di seguito riepilogati.</p>
                </div>
            </div>
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
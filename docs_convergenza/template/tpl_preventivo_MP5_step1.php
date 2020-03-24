<!-- TITOLO DI PAGINA -->
<section>
    <div class="titolo">
            <h1>
                <div class="row">

                    
                    <div class="col-sm-8">
                        <span>Richiedi il preventivo<br>Consensi privacy</span></span>
                    </div>
                    <div class="col-sm-4">	
                        <div class="pager pull-right">
                            <div class="circle current_page">1</div>
                            <div class="circle ">2</div>
                            <div class="circle ">3</div>
                            <div class="circle ">4</div>
                        </div>
                    </div>
                    
                </div>
            </h1>
    </div>
</section>
<!-- TITOLO DI PAGINA -->

<!--BOX DI ATTENZIONE-->
<section id="error-box" style="display:none">
		<div class="row">
			<div class="col-sm-12">
				<div class="messagePanel alert hidden-print">
					<div>
						<h3>ATTENZIONE</h3>
					</div>
					<p id="text-error"></p>
				</div>
			</div>
		</div>
</section>
<section>
    <div class="row"> 
        <div class="col-sm-12 col-xs-12">  
            <span class="icon-wrapper-assic_auto flLeft">
                <i class="icon icon-assic_casa_generica fontSize70"></i>               
            </span>   
            <h3 class="flLeft noUppercase mt-20 marginLeftLarge">MULTIPROTEZIONE 5 - ABITAZIONE</h3>
        </div>
    </div>
</section>
<section>
<p>Tenuto conto dell'<a href="www.google.it" class="text-underline" onclick="setOpenDoc()" target="_blank">Informativa ai sensi del Regolamento EU 2016/679</a> il cliente presta il consenso al:</p>
<div class="formWrapper">
        <p>trattamento dei propri dati personali, anche sensibili, per finalit&agrave; assicurative (consenso indispensabile ai fini della creazione del preventivo)</p>
        <div class="form-group">
             <div class="row">
                    <div class="form-field-input col-xs-2">
                        <label>
                            <input type="radio" name="consenso-dati-ass" value="Y" checked id="consenso-dati-ass" >
                            S&igrave;
                        </label>
                    </div>
                    <div class="form-field-input col-xs-2">
                        <label>
                            <input type="radio" name="consenso-dati-ass" value="N">
                            No
                        </label>
                    </div>
             </div>
        </div>
        <p>trattamento dei propri dati personali, anche sensibili, per finalità commerciali (opzionale)</p>
        <div class="form-group">
             <div class="row">
                    <div class="form-field-input col-xs-2">
                        <label>
                            <input type="radio" name="consenso-dati-comm" value="Y">
                            S&igrave;
                        </label>
                    </div>
                    <div class="form-field-input col-xs-2">
                        <label>
                            <input type="radio" name="consenso-dati-comm" value="N" checked>
                            No
                        </label>
                    </div>
             </div>
        </div>
        <p>Per proseguire devi prima aprire e leggere l'informativa qui sopra.</p>
        
</div>
</section>
<!-- BOTTONE USATO IN STEP DISPOSITIVE-->
<script>
var issetOpenDoc = false;
var setOpenDoc = function() {
    return issetOpenDoc = true
}
var checkConsensi = function () {
    if(issetOpenDoc && !$("#consenso-dati-ass").is(":checked")) {
        $("#error-box").show().find("p").text("Per proseguire è necessario dare il consenso al trattamento dei dati per le finalità assicurative.");
    }
    else if (!issetOpenDoc && $("#consenso-dati-ass").is(":checked")) {
        $("#error-box").show().find("p").text("Per proseguire è necessario aprire e leggere l'informativa");
    }
    else if (!issetOpenDoc && !$("#consenso-dati-ass").is(":checked")) {
        $("#error-box").show().find("p").text("Per proseguire è necessario dare il consenso al trattamento dei dati per le finalità assicurative e aprire e leggere l'informativa");
    }
    else {
        $("#error-box").hide().find("p").text("");
        window.open("/template/strutt_youweb.php?tpl=tpl_preventivo_MP5_step2.php&amp;html=vr&amp;liv1=assicurazioni&amp;liv2=scheda_mp5&amp;liv3=preventivatore&amp;liv4=preventivo_consensi");
    }
}
</script>
<section>
  <div class="form-group btnWrapper clearfix">
     <div class="btn-align-right">
  		 	<div>
				<a type="button" href="#" class="btn btn-primary" title="prosegui" onclick="checkConsensi()">prosegui</a>
  			</div>
      </div>
   </div>
</section>


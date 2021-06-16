<!-- Sezione introduttiva -->
<section>
	<div class="titolo"><h1><span>Gestione della privacy</span></h1></div>
    <p>
    In questa pagina puoi visualizzare e modificare i <strong>consensi espressi in materia di privacy</strong> e scegliere <strong>dove ricevere le eventuali comunicazioni commerciali</strong> (queste impostazioni non riguardano le comunicazioni operative che continuerai a ricevere come di consuetudine).<br>
    <br>
    Trovi tutte le informazioni utili sulla protezione dei Dati Personali nella <a href="#">sezione Privacy del sito istituzionale</a>.
    </p>
</section>
<!-- Fine sezione introduttiva -->

<!-- Tab di selezione dei contenuti -->
<div class="section outerWrapperTab no-backgr">
	<div class="row">
		<div class="col-xs-12">
			<div class="innerWrapperTab">
				<ul>
					<li><a href="/template/strutt_<?php print $site; ?>.php?tpl=tpl_privacy_commerciali.php&html=vr"  title="" role="button">Comunicazioni commerciali</a></li>
					<li class="on"><a href="/template/strutt_<?php print $site; ?>.php?tpl=tpl_privacy_consensi.php&html=vr" role="button">Consensi privacy</a></li>
				</ul>
			</div>
			<div class="separator"></div>
		</div>
	</div>
</div>
<!-- Fine tab di selezione dei contenuti -->

<!-- Testo introduttivo -->
<h3 class="titleSection titleForm">I tuoi consensi</h3>
<p>Di seguito sono visualizzate le preferenze da te espresse in merito ai consensi sul trattamento dei dati personali.</p>

<!-- Fine testo introduttivo -->

<!-- Gestione dei consensi -->
<script>

    // Esempio di funzione per setting radio
    var setOutputVal = function(el){
      var radio = $(el);
      radio.parents(".form-group").find(".consensi-output label").html(radio.val()==="y"?"Dato il consenso": "Negato il consenso")
    }

    // Esempio di automazione
    $(function(){

        // Emulazione modifica consensi
        $(".modifica-consensi").click(function(){
            $(".modifica-consensi").css({"visibility": "hidden"});
            $("#salva").show();

            // Trasforma i campi output in input
            $("#formConsensiPrivacy *[class^='consensi-']").toggle();
            
        });

        // Emulazione salvataggio consensi
        $("#salva").click(function(){
            $(this).hide();
            $(".modifica-consensi").css({"visibility": "visible"});
             // Trasforma i campi input in output
             $("#formConsensiPrivacy *[class^='consensi-']").toggle();
        });

    });
</script>

<!-- Pulsantiera TOP -->
<section>
  <div class="form-group btnWrapper clearfix">
      <div class="btn-align-right">
          <div>
            <a type="button" class="btn btn-primary modifica-consensi" title="Modifica consensi">Modifica consensi</a>
          </div>
      </div>
  </div>
</section>
<!-- Fine pulsantiera TOP -->

<!-- Gruppo consensi -->
<div class="formGenerico  borderFormRounded" id="formConsensiPrivacy">
    <?php for($i=0;$i<5; $i++) { ?>
        <?php if ($i>0) { ?><hr /><?php } ?>
        <p><strong>Consenso per lorem ipsum dolorlorem ipsum dolorlorem ipsum dolorlorem ipsum dolorlorem ipsum dolorlorem ipsum dolorlorem ipsum dolorlorem ipsum dolorlorem ipsum dolorlorem ipsum dolorlorem ipsum dolorlorem ipsum dolorlorem ipsum dolorlorem ipsum dolor</strong></p> 
        <!-- Blocchi dei consensi -->
        <div class="form-group">
             <div class="row">
              <!-- Modifica dei consensi -->
              <div class="consensi-input" style="display:none">
                <div class="form-field-input noMarginBottom col-sm-3 col-xs-6">
                    <label>
                      <input type="radio" name="radioCons<?php print $i; ?>" value="y" checked onclick="setOutputVal(this);">
                      Do il consenso
                    </label>
                </div>
                <div class="form-field-input noMarginBottom col-sm-3 col-xs-6">
                  <label>
                      <input type="radio" name="radioCons<?php print $i; ?>" value="n" onclick="setOutputVal(this);">
                      Nego il consenso
                    </label>
                </div>
              </div>
              <div class="consensi-output">
                <div class="form-field-input noMarginBottom col-sm-12 col-xs-12">
                   <label class="force-radio-height" id="radVal<?php print $i; ?>">Dato il consenso</label>
                </div>
              </div>
              <!-- Fine modifica dei consensi -->
            </div>
        </div>
    <?php } ?>
    
</div>

<!-- Fine gruppo consensi -->

<!-- Testo finale -->
<p>
Ti ricordiamo che, se il conto è cointestato, consideriamo tutte le decisioni prese congiuntamente da tutti gli interessati.
</p>
<!-- Fine testo finale -->

<!-- Pulsantiera BOTTOM -->
<section>
  <div class="form-group btnWrapper clearfix">
      <div class="btn-align-right">
          <div>
            <a type="button" class="btn btn-primary modifica-consensi" title="Modifica consensi">Modifica consensi</a>
            <a type="button" class="btn btn-primary" id="salva" title="Salva" style="display:none;">Salva</a>
          </div>
      </div>
  </div>
</section>
<!-- Fine pulsantiera TOP -->



<!-- Fine gestione dei consensi -->
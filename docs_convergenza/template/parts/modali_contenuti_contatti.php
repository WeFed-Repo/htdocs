<?php 
// Acquisizione del tipo di modale ed erogazione del contenuto 
$mtype = $_POST["tipocontatto"]; 

if ($mtype =="cc") {
?>
<!-- modale contact center -->
<div class="modal-body">
          <p>Hai dubbi sulla tua pratica? <br>Contattaci per ricevere il nostro supporto.</p>
          <h2 class="paddingBottomSmall noMargin"><strong>Banco Bpm - Credito Bergamasco</strong></h2>
          <h4 class="titleSection"><strong>MILANO - Agenzia 04080</strong> CAB 01636 - ABI 05034</h4>
          <div class="row">
              <div class="col-xs-12 col-sm-6">
                <div class="testoIconasmall">
                    <i class="icon icon-contatti flLeft" title=""></i>
                    <div class="leftTesto">
                        <h4 class="marginBottom5px"><strong>Contatti </strong></h4>
                        <p class="noPadding noMargin">Tel <a class="no-underline" href="tel:02724051">02724051</a></p>
                        <p class="noPadding">Fax 0458254882</p>
                    </div>	
                </div>
              </div>
              <div class="col-xs-12 col-sm-6">
                <div class="testoIconasmall">
                <i class="icon icon-dove_siamo flLeft" title=""></i>
                    <div class="leftTesto">
                        <h4 class="marginBottom5px"><strong>Dove siamo </strong></h4>
                        <p class="paddingBottomSmall">Piazza Missori, 4</p>
                        <a href="#" class="text-link"><strong>Prendi appuntamento</strong></a>
                    </div>	
                </div>
              </div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-6">
                <div class="testoIconasmall">
                    <i class="icon icon-orari flLeft" title=""></i>
                    <div class="leftTesto">
                        <h4 class="marginBottom5px"><strong>Orari</strong></h4>
                        <p class="noPadding noMargin">dal lunedì al venerdì</p>
                        <p class="noPadding noMargin">09.30 - 13.20</p>
                        <p class="noPadding">14.30 - 15.30 (solo consulenza)</p>
                    </div>	
                </div>
              </div>
             
          </div>
      </div>
     <div class="modal-footer">
       	<div class="align-right">
			  <input type="button" name="chiudi" value="Chiudi" data-dismiss="modal" class="btn  btn-primary" alt="Chiudi">
		  </div>
		</div>
    </div>
<?php
}
else
{
?>
<!-- modale contatti filiale e gestore-->
    <div class="modal-body">
        <p>Hai dubbi sulla tua pratica? <br>Contattaci per ricevere il nostro supporto.</p>
        <h4 class="titleSection"><strong>Contact center</strong></h4>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
            <div class="testoIconasmall">
                <i class="icon icon-contatti flLeft" title=""></i>
                <div class="leftTesto">
                    <h4 class="marginBottom5px"><strong>Contatti </strong></h4>
                    <p class="noPadding noMargin">
                        <span>Dall'Italia: </span>
                        <a class="no-underline text-link" href="tel:800 024 024">
                            <strong>800 024 024</strong>
                        </a>
                    </p>
                    <p class="noMargin paddingBottomSmall">
                        <span>Dall'estero: </span>
                        <a class="no-underline" href="tel:+390243371234">
                        +39 02 43 37 12 34
                        </a>
                    </p>
                    <a href="javascript:;" class="text-link" data-dismiss="modal" data-toggle="modal" data-target="#modaleCallMeBack"><strong>Prenota una chiamata</strong></a>
                </div>	
            </div>
            </div>
            <div class="col-xs-12 col-sm-6">
            <div class="testoIconasmall">
                <i class="icon icon-orari flLeft" title=""></i>
                <div class="leftTesto">
                    <h4 class="marginBottom5px"><strong>Orari</strong></h4>
                    <p class="noPadding noMargin">dal lunedì al venerdì</p>
                    <p class="noPadding noMargin">09.30 - 13.20</p>
                    <p class="noPadding">14.30 - 15.30 (solo consulenza)</p>
                </div>	
            </div>
            </div>
        </div>

    </div>
    <div class="modal-footer">
    <div class="align-right">
            <input type="button" name="chiudi" value="Chiudi" data-dismiss="modal" class="btn  btn-primary" alt="Chiudi">
        </div>
    </div>
    </div>
<?php
}
?>
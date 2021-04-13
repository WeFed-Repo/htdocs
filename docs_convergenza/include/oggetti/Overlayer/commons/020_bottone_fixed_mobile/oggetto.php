<!- IN MOBILE QUESTA MODALE HA L'ELEMENTO BUTTON FIXED -classe modal-footer-fixed-->
<!-- Modal -->
<?php 
      if ($site == "youweb") 
      {
        ?>
<a href="javascript:;" class="" data-toggle="modal" data-target="#modaleBtnFixed">Apri modale con bottone fixed</a>
<div id="modaleBtnFixed" class="modal fade modal-footer-fixed" role="dialog">
  <div class="modal-dialog">
	<div class="modal-content">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h1 class="modal-title">Contatta la tua filiale</h1>
      </div>
      <div class="modal-body">
          <h2 class="titleSection"><strong>Banco Bpm - Credito Bergamasco</strong></h2>
          <h4 class="titleSection"><strong>MILANO - Agenzia 04080</strong> CAB 01636 - ABI 05034</h4>
          <div class="row">
              <div class="col-xs-12 col-sm-6">
                <div class="testoIconasmall">
                    <i class="icon icon-contatti flLeft" title=""></i>
                    <div class="leftTesto">
                        <h4 class="marginBottom5px"><strong>Contatti </strong></h4>
                        <p class="noPadding noMargin">Tel 02724051</p>
                        <p class="noPadding">Fax 0458254882</p>
                    </div>	
                </div>
              </div>
              <div class="col-xs-12 col-sm-6">
                <div class="testoIconasmall">
                <i class="icon icon-dove_siamo flLeft" title=""></i>
                    <div class="leftTesto">
                        <h4 class="marginBottom5px"><strong>Dove siamo </strong></h4>
                        <p class="noPadding">Piazza Missori, 4</p>
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
              <div class="col-xs-12 col-sm-6">
                <div class="testoIconasmall">
                     <i class="icon icon-servizi flLeft" title=""></i>
                    <div class="leftTesto">
                        <h4 class="marginBottom5px"><strong>Servizi</strong></h4>
                        <p class="noPadding noMargin">Bancomat S&Igrave;</p>
                        <p class="noPadding">ATM con versamento S&Igrave;</p>
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
	</div>
</div>
<?php
					}
	    ?>	

<?php 
      if ($site == "webank") 
      {
        ?>
        <p>CASISTICA NON CONTEPLATA</p>
<?php
					}
	    ?>	
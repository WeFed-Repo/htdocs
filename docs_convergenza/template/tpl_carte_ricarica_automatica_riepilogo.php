<h2>Ricarica</h2>
<!-- Tab tipo ricarica -->
<div class="section outerWrapperTab no-backgr clearfix">
	<div class="row">
		<div class="col-xs-12">
			<div class="innerWrapperTab">
				<ul>
					<li><a href="/template/strutt_<?php print $site; ?>.php?tpl=tpl_carte_ricarica_manuale.php&html=vr&liv1=carte&liv2=ricariche&liv3=ricarica" title="Ricarica manuale" role="button">Manuale</a></li>
					<li class="on"><a href="/template/strutt_<?php print $site; ?>.php?tpl=tpl_carte_ricarica_automatica.php&html=vr&liv1=carte&liv2=ricariche&liv3=ricarica" title="Ricarica automatica" role="button">Automatica</a></li>
				</ul>
			</div>
			<div class="separator"></div>
		</div>
	</div>
</div>

<!-- Fine tab tipo ricarica -->
<br class="clear">

<section>
<!-- Form selezione carta -->
<form method="POST" action="#">
	<h3 class="titleSection titleForm">Riepilogo ricarica automatica</h3>
	<div class="formWrapper"> 
		
		<!-- RIEPILOGO DATI -->
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
			      	<div class="row">
			            <span class="col-xs-6" id=""><label class="control-label">Tipo di ricarica</label></span>
			            <span class="col-xs-6 alignRight" id=""><span class="resume">Ricarica in tempo reale</span></span>
			        </div>
		       	</div>
		    </div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
			      	<div class="row">
			            <span class="col-xs-6" id=""><label class="control-label">Conto di addebito</label></span>
			            <span class="col-xs-6 alignRight" id=""><span class="resume">000000000/321/1</span></span>
			        </div>
		       	</div>
		       	<div class="col-sm-6 col-xs-12">
			      	<div class="row">
			            <span class="col-xs-6" id=""><label class="control-label">Saldo del conto</label></span>
			            <span class="col-xs-6 alignRight" id=""><span class="resume">999.999.999,99 EUR</span></span>
			        </div>
		       	</div>
		    </div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
			      	<div class="row">
			            <span class="col-xs-6" id=""><label class="control-label">Intestazione carta</label></span>
			            <span class="col-xs-6 alignRight" id=""><span class="resume">Mario Rossi Verdi Bianchi</span></span>
			        </div>
		       	</div>
		       	<div class="col-sm-6 col-xs-12">
			      	<div class="row">
			            <span class="col-xs-6" id=""><label class="control-label">Numero carta</label></span>
			            <span class="col-xs-6 alignRight" id=""><span class="resume">0000000000000</span></span>
			        </div>
		       	</div>
		    </div>
		</div>
		
		<?php
		if ($site==="webank") {
		?>
			
		<!-- OTP -->
		<hr>
		<section>
			<h4>Autorizzazione richiesta</h4>
			<?php include ("parts/form_otp.php"); ?>

		</section>
		<!-- OTP -->

		<?php
		}
		?>


	</div>
</form>
<!-- Fine form selezione carta -->

<!-- Pulsantiera -->
<!-- Esempio di esito -->
<div id="modaleEsito" class="modal fade" role="dialog">
  <div class="modal-dialog">
	<div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title">Ricarica lorem ipsum dolor</h2>
      </div>
      <div class="modal-body">
	    <section>
			<div class="row">
				<div class="col-sm-12">
					<div class="messagePanel success hidden-print">
						<div>
							<h3>Ricarica inserita lorem dolor</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque imperdiet ex id erat pretium, et accumsan eros pharetra. In vitae dolor condimentum, fringilla nunc vitae, molestie sem. Nulla maximus fermentum</p>
						</div>
						
					</div>
				</div>
			</div>
		</section>
      </div>
      <div class="modal-footer">
       	<div class="align-right">
			<a type="button" class="btn  btn-primary" alt="ok" href="/template/strutt_webank.php?tpl=tpl_carte_ricarica_automatica_modifica.php&html=vr&liv1=carte&liv2=ricariche&liv3=ricarica&liv4=ricarica_automatica_preimp.">ok</a>
		</div>
		</div>
    </div>
	</div>
</div>


<!-- Fine esempio di esito -->
<div class="form-group btnWrapper">
	<?php if($site==="webank") {?> <div class="stepBtn">Step <strong>2</strong> di 2</div><?php } ?>
   <div class="btn-align-right">
      <a type="button" href="/template/strutt_<?php print $site; ?>.php?tpl=tpl_carte_ricarica_automatica.php&html=vr&liv1=carte&liv2=ricariche&liv3=ricarica" class="btn btn-primary" title="Esegui ricarica">Modifica</a>
      <a type="button" class="btn btn-primary" title="Conferma" data-toggle="modal" data-target="#modaleEsito">Conferma</a>
  </div>
  <br class="clear">
</div>
<!-- Fine pulsantiera -->
</section>
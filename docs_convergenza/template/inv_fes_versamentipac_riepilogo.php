<?php if ($site == "youweb") { ?>
<!-- Paginatore YouWeb -->
<div class="pager clearfix pull-right">
	<div class="circle current_page">1</div>
	<div class="circle current_page">2</div>
	<div class="circle current_page">3</div>
</div>
<!-- Fine paginatore YouWeb -->
<?php } ?>
<h2>Versamenti aggiuntivi PAC: riepilogo</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sunt <strong>quibusdam quaerat voluptatum</strong> inventore, laborum nisi facilis libero, quasi iste.
<section>

	<div class="formGenerico borderFormRounded output">
		<section>
			<!-- Deposito -->
			<div class="form-group">
				<div class="row">
					<div class="col-xs-12">
						<label class="control-label-output">Deposito titoli</label>
						<span class="output">1999/654654 - tutti i sottodepositi - Mario Rossi, Virginia Verdi, Marco Bianchetti Pezzali Pippo</span>
					</div>
				</div>
			</div>
		</section>
		<hr>
		
		<!-- Dati Fondo -->
		<section>
		<h4>DFondo</h4>
		<!-- Deposito -->
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Nome fondo</label>
					<span class="output">Deutsche China High Income Bonds LDH Dis</span>
				</div>
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Titpologia strumento</label>
					<span class="output">Fondo</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Numero contratto PAC</label>
					<span class="output">1234567890123123</span>
				</div>
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Investimento totale</label>
					<span class="output">999.999 EUR</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Importo rata</label>
					<span class="output">10,00</span>
				</div>
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Rate versate</label>
					<span class="output">99</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Rate residue</label>
					<span class="output">101</span>
				</div>
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Numero versamenti aggiuntivi</label>
					<span class="output">99</span>
				</div>
			</div>
		</div>

		</section>
		<!-- Fine dati SICAV/Fondo -->

		<hr>

		
		<!-- OTP -->
		<section>
			<h4>Autorizzazione richiesta</h4>
			<?php include ("parts/form_otp.php"); ?>

		</section>
		<!-- OTP -->

		<p class="note">La banca &egrave; sollevata lorem ipsum dolor sit amet, consectetur adipisicing elitlorem ipsum dolor sit amet, consectetur adipisicing elit. Alias nam dolorum iusto, et rem optio.</p>

	</div>	

	
	

	<!-- Pulsantiera -->
	<div class="form-group btnWrapper">
		<?php if($site == "webank") { ?>
		<div class="stepBtn">Step <strong> 3 </strong> di 3</div>
		<?php } ?>
		<div class="btn-align-left">
	        <a type="button" class="btn btn-default" href="#">Modifica</a>
	    </div>
	    <div class="btn-align-right">
	        <a type="button" class="btn btn-primary" id="btnInvio" href="/template/strutt_<?php print $site; ?>.php?html=mi&tpl=inv_fes_versamentipac_esito.php&liv1=investimenti&liv2=fondi_e_sicav&liv3=compravendita&liv4=versamenti_aggiuntivi_pac#">Invia ordine</a>
	    </div>

	</div>
	<!-- Fine pulsantiera -->
	<br class="clear">
</section>
<!-- Fine modalita' di acquisto -->













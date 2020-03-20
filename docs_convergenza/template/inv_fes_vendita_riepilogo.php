<?php if ($site == "youweb") { ?>
<!-- Paginatore YouWeb -->
<div class="pager clearfix pull-right">
	<div class="circle current_page">1</div>
	<div class="circle current_page">2</div>
	<div class="circle current_page">3</div>
</div>
<!-- Fine paginatore YouWeb -->
<?php } ?>
<h2>Vendita: riepilogo ordine</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sunt <strong>quibusdam quaerat voluptatum</strong> inventore, laborum nisi facilis libero, quasi iste.
<section>

	<div class="formGenerico borderFormRounded output">
		<section>
			<!-- Deposito -->
			<div class="form-group">
				<div class="row">
					<div class="col-xs-12">
						<label class="control-label-output">Deposito titoli</label>
						<span class="output">1999/654654/0 - Mario Rossi, Virginia Verdi, Marco Bianchetti Pezzali Pippo</span>
					</div>
				</div>
			</div>
		</section>
		<hr>
		
		<!-- Dati SICAV/Fondo -->
		<section>
		<h4>Sicav/Fondo da vendere</h4>
		<!-- Deposito -->
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Modalit&agrave; di acquisto</label>
					<span class="output">Deutsche China High Income Bonds LDH Dis</span>
				</div>
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Numero quote</label>
					<span class="output">999,99</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Data lavorazione</label>
					<span class="output">11/11/2020</span>
				</div>
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Importo</label>
					<span class="output">999,99</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Data veluta</label>
					<span class="output">11/11/2020</span>
				</div>
			</div>
		</div>
		
		</section>
		<!-- Fine dati SICAV/Fondo -->

		<hr>

		
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
	        <a type="button" class="btn btn-primary" id="btnInvio" href="/template/strutt_<?php print $site; ?>.php?html=mi&tpl=inv_fes_vendita_esito.php&liv1=investimenti&liv2=fondi_e_sicav&liv3=compravendita&liv4=vendita">Invia ordine</a>
	    </div>

	</div>
	<!-- Fine pulsantiera -->
	<br class="clear">
</section>
<!-- Fine modalita' di acquisto -->













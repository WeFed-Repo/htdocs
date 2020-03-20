<?php if ($site == "youweb") { ?>
<!-- Paginatore YouWeb -->
<div class="pager clearfix pull-right">
	<div class="circle current_page">1</div>
	<div class="circle current_page">2</div>
	<div class="circle current_page">3</div>
</div>
<!-- Fine paginatore YouWeb -->
<?php } ?>
<h2>Acquisto: riepilogo ordine</h2>
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
		
		<!-- Dati SICAV/Fondo -->
		<section>
		<h4>Dati SICAV/Fondo</h4>
		<!-- Deposito -->
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Nome fondo</label>
					<span class="output">Deutsche China High Income Bonds LDH Dis</span>
				</div>
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Valore quota / NAV. del 09/11/18</label>
					<span class="output">98,66 EUR</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Categoria Assogestioni</label>
					<span class="output">Obb. Paesi Emergenti</span>
				</div>
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Commissioni di gestione</label>
					<span class="output">1,10%</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Diritti fissi</label>
					<span class="output">10,00</span>
				</div>
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Periodicità distribuzione proventi</label>
					<span class="output">Annuale</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Società di gestione</label>
					<span class="output">Deutsche Asset Management S.A.</span>
				</div>
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Commissioni di gestione</label>
					<span class="output">1,10%</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Commissioni d'ingresso</label>
					<span class="output"><del>1,00 %</del> <strong>GRATIS</strong></span>
				</div>
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Commissioni di uscita</label>
					<span class="output">Zero</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Diritti fissi stacco dividendo</label>
					<span class="output">1,50 EUR</span>
				</div>
			</div>
		</div>

		</section>
		<!-- Fine dati SICAV/Fondo -->

		<hr>


		<!-- Dettagli ordine -->
		<section>
		<h4>Dettagli ordine</h4>
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Modalit&agrave; di acquisto</label>
					<span class="output">Piano di accumulo (PAC)</span>
				</div>
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Importo rata</label>
					<span class="output">100 EUR</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Versamento iniziale</label>
					<span class="output">1.200 EUR</span>
				</div>
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Destinazione proventi</label>
					<span class="output">Accredito sul conto corrente</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Piano di investimento</label>
					<span class="output">Mensile</span>
				</div>
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Rate piano</label>
					<span class="output">60 versamenti</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Investimento totale</label>
					<span class="output">7.200 EUR​</span>
				</div>
			</div>
		</div>
		</section>
		<!-- Fine dettagli ordine -->

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
	        <a type="button" class="btn btn-primary" id="btnInvio" href="/template/strutt_<?php print $site; ?>.php?html=mi&tpl=inv_fes_acquisto_esito.php&liv1=investimenti&liv2=fondi_e_sicav&liv3=compravendita&liv4=acquisto#">Invia ordine</a>
	    </div>

	</div>
	<!-- Fine pulsantiera -->
	<br class="clear">
</section>
<!-- Fine modalita' di acquisto -->













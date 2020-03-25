<h2 id="id_label">Portafoglio</h2>
<section>
<h3></h3>
<!-- Titolo -->
<div class="row">
	<div class="col-xs-12">
		<!-- Deposito -->
		
		<!-- Fine deposito -->

		<!-- Funzione apertura modale info -->
		<script type="text/javascript">
			$(function(){

				$("#infoDett").click(function(){
					if(typeof infoDettModal == "undefined") {
						infoDettBody = $("<div>").addClass("loading");
						infoDettModal = getModal({
						id:"infoDettModal",
				        titolo:"Dettagli",
				        body: infoDettBody
				        });
					}
					infoDettModal.modal("show");
					$.ajax({
						url: "/librerie/include/commons/ajax/lorem.html",
						dataType: "html",
						success: function(data) {
							setTimeout(function(){
								infoDettBody.empty().html(data).removeClass("loading");	
							},1000)
						}
					});
				});

			});
		</script>
		<!-- Fine funzione apertura modale info -->

		<!-- Titolo -->
		<div class="tithelp">
			<h4>Dettaglio Fondo/Sicav</h4>
			<!-- Icona Info -->
			<div class="flRight"><a href="#" class="no-underline btn-icon" id="infoDett"><i class="icon icon-info_fill icon-2x"></i></a><br class="clear"></div>
			<!-- Fine icona Info -->
			<br class="clear">
		</div>
		<!-- Fine titolo -->
		
		<!-- Output -->
		<form class="formGenerico borderFormRounded output" role="form">
			<!-- Deposito -->
			<section>
				<div class="form-group">
					 <div class="row">
					 	<div class="col-sm-12">
							<label class="control-label-output">Deposito</label>
							<span class="output">1099/535379/0</span>
						</div>
					</div>
				</div>
				<!-- Fine deposito -->
				<div class="row">
				 	<div class="col-sm-12">
				 		<hr>
					</div>
				</div>
			</section>
			<!-- Anagrafica -->
			<section>
			<h3>Anagrafica</h3>
			<div class="form-group">
				<!-- UNICA RIGA CON CAMPO-->
				 <div class="row">
				 	<div class="col-sm-6">
						<label class="control-label-output">Codice ISIN</label>
						<span class="output">IT0001415873</span>
					</div>
					<div class="col-sm-6">
						<label class="control-label-output">Nome</label>
						<span class="output">FDO ANIMA EMERGE CUM</span>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
				 	<div class="col-sm-6">
						<label class="control-label-output">Codice BPM</label>
						<span class="output">1415875</span>
					</div>
					<div class="col-sm-6">
						<label class="control-label-output">Categoria</label>
						<span class="output">Fondi Sicav</span>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
				 	<div class="col-sm-6">
						<label class="control-label-output">Comparto</label>
						<span class="output">Az. Euro.</span>
					</div>
					<div class="col-sm-6">
						<label class="control-label-output">Mercato</label>
						<span class="output">Non quotato</span>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
				 	<div class="col-sm-6">
						<label class="control-label-output">Divisa di trattazione</label>
						<span class="output">EUR</span>
					</div>
				</div>
			</div>
				
			<div class="row">
			 	<div class="col-sm-12">
			 		<hr>
				</div>
			</div>
			</section>
			<!-- Operativita' odierna -->
			<section>
			<h3>Operativit&agrave; odierna</h3>
			<div class="form-group">
				<div class="row">
				 	<div class="col-sm-6">
						<label class="control-label-output">Eseguiti</label>
						<span class="output">0</span>
					</div>
					<div class="col-sm-6">
						<label class="control-label-output">Quantit&agrave; aggiornata</label>
						<span class="output">1.109,777</span>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
				 	<div class="col-sm-6">
						<label class="control-label-output">Ordini in essere</label>
						<span class="output">0</span>
					</div>
				</div>
			</div>
			
			<div class="row">
			 	<div class="col-sm-12">
			 		<hr>
				</div>
			</div>
			</section>
			<!-- Fiscalita' -->
			<section>
			<h3>Fiscalit&agrave;</h3>
			<div class="form-group">
				<div class="row">
				 	<div class="col-sm-6">
						<label class="control-label-output">Prezzo fiscale EUR</label>
						<span class="output">10,061885</span>
					</div>
					<div class="col-sm-6">
						<label class="control-label-output">Data ultima valorizzazione</label>
						<span class="output">15.01.2016</span>
					</div>
				</div>
			</div>
			</section>
			<!-- fine anagrafica -->
		</form>
		<!-- Fine output -->
		<!-- Pulsantiera -->
		<div class="form-group btnWrapper">
			<div class="btn-align-left">
				<a type="button" class="btn btn-default" href="javascript:history.back()">Indietro</a>
			</div>
			<div class="btn-align-right">
				<a type="button" class="btn btn-primary" id="" href="javascript:window.print();">Stampa</a>
				<a type="button" class="btn btn-primary" id="" href="javascript:situazioneOrdini();" title="Vai a situazione ordini">Vai a situazione ordini</a>
			</div>
			<br class="clear">
		</div>


		<!-- Fine pulsantiera -->

	</div>
</div>

<!-- OUTPUT DETTAGLIO -->
<script>

function situazioneOrdini(){
	var searchAction ='/2l/do/FMP/situazioneOrdiniFund.do';
	var navParam = '?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_situaz_ordini&';
	var hrefValue = cgi_protocol + cgi_host + cgi_script +  '/wbOnetoone' + searchAction + navParam;
	top.document.location.href = hrefValue;
}
</script>

</section>

<!-- VECCHIA PAGINA -->

	
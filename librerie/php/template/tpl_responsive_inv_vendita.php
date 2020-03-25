<h2>Vendita</h2>
<!-- Box avvertimento/errore -->
<section class="boxesitoWrap">
	<div class="boxesito negativo">
		<i class="icon icon-alert_error icon-2x"></i>
		<div class="text">
			<div class="row">
				<div class="col-sm-12">
					<p><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
				et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p>
			</div>
		</div>
	</div>
</div></section>
<!-- fine box avvertimento/errore -->

<script type="text/javascript">

// Esempio interattivita' di base del form
$(function(){

	// Select fondo
	$("#selFondo").change(function(){
		var v = $(this).val();
		$("#dettaglioPac,#dettaglioMultiPac,#selQuoteImp").hide();
		// a seconda del valore (o di altro parametro esplicitato mostra una parte diversa della select)
		switch (v) {

			/* Esempio singolo PIC/PAC*/
			case "1":
				$("#dettaglioPac").show();
				$("#selQuoteImp").show();
			break;

			/* Esempio multiplo PIC/PAC*/
			case "2":
				$("#dettaglioMultiPac").show();
			break;

		}

	});

	// Eventuale valore iniziale della "Select" -> Es: provenienza da selezione "forzata" tipo scheda fondo
	// Rimuovere questo blocco se la funzione e' generica ed il fondo va scelto
	$("#selFondo").val("1").trigger("change");


	// Radio selezione multipla (verificare eventuali eventi)
	$("input[type=radio][name=multiSel]").click(function(){
		// Inserire qui eventuali inizializzazioni
		$("#selQuoteImp").show();
	});


	// Selezione quote/campo in base alla select
	$("#nQuote").change(function(){
		$("#selQuoteImp .nQuote").hide();
		switch ($(this).val()) {

			// Tutte 
			case "1":
				$("#selQuoteImp .selTutte").show();
			break;  

			// Importo 
			case "2":
				$("#selQuoteImp .selImporto").show();
			break; 

			// Quote 
			case "3":
				$("#selQuoteImp .selQuote").show();
			break; 
		}
	});

});

</script>


<form>
<!-- Dati di riepilogo -->
<section>
	<div class="tithelp">
		<h4>Seleziona il fondo o sicav da vendere</h4>
		<div class="flRight"><a href="javascript:;" class="no-underline btn-icon closeable" data-toggle="tooltip" data-title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit libero obcaecati repellat ipsam. Molestiae ea amet reprehenderit error similique, maxime ipsa. Voluptate maxime est consectetur, laborum ipsam, sint ducimus placeat."><i class="icon icon-info_fill icon-2x"></i></a><br class="clear"></div>
		<br class="clear">
	</div>
	<div class="formGenerico borderFormRounded">
		<div class="form-group">
		   <div class="row">
		 		<div class="col-sm-12">
		 			<label class="control-label-output">Tipologia strumento</label>
		 			<span class="output">Sicav</span>
		 		</div>	
			</div>
		</div>
		<div class="form-group">
		   <div class="row">
		 		<div class="col-sm-6">
		 			<label class="control-label">Deposito</label>
		 			<select class="form-control">		
						<option value="1099/535379/0">1099/535379/0 C/C 01099 - 0000072608 - EUR</option>
						<option value="1099/535379/1">1099/535379/1 C/C 01099 - 0000072608 - EUR</option>
						<option value="1099/535379/2">1099/535379/2 C/C 01099 - 0000072608 - EUR</option>
						<option value="1099/570641/0">1099/570641/0 C/C 01099 - 0000078689 - EUR</option>
						<option value="1099/570641/1">1099/570641/1 C/C 01099 - 0000078689 - EUR</option>
						<option value="1099/570641/2">1099/570641/2 C/C 01099 - 0000078689 - EUR</option>
					</select>
		 		</div>	
		 		<div class="col-sm-6">
		 			<label class="control-label">Fondo/Sicav</label>
		 			<select class="form-control" id="selFondo">
		 				<option selected value="">Seleziona...</option>		
						<option value="1">Anima Emergenti A EUR</option>
						<option value="2">Anima Valore Globale A EUR</option>
					</select>
		 		</div>
			</div>
		</div>
		<div class="form-group">
		   <div class="row">
		 		<div class="col-sm-6">
		 			<label class="control-label-output txthelp closeable" data-toggle="tooltip" data-title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores animi quis enim, molestias voluptatum distinctio veniam maxime sequi recusandae ex.">Valore quota/N.A.V. del 10/01/2017</label>
		 			<span class="output">102,76 USD </span>
		 		</div>
		 		<div class="col-sm-6">
		 			<span class="output"><a type="button" class="btn btn-primary" href="#">apri la scheda fondo/sicav</a></span>
		 		</div>
			</div>
		</div>
		<!-- Selettore multiplo -->
		<div id="dettaglioMultiPac" style="display:none">
			<div class="form-group">
			   <div class="row">
			 		<div class="col-sm-12">
						<label class="control-label">Scegli quali quote vuoi vendere</label>
						<div class="borderFormRounded">
							
							<!-- Gruppo radio 1 -->
							<div class="radiogroup dispari">
								<div class="form-group">
									<div class="row">
										<div class="col-xs-12">
											<div class="radio inline bigtext">
												<label class="textWrapper">
								 					  <input type="radio" name="multiSel" id="" val="1">
								  					  <span class="text">quote provenienti da PAC n. <strong>10007103</strong></span>
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
								   <div class="row">
								 		<div class="col-sm-6">
								 			<label class="control-label-output">N. quote/azioni nel portafoglio selezionato</label>
								 			<span class="output">573,769</span>
								 		</div>	
								 		<div class="col-sm-6">
								 			<label class="control-label-output">Controvalore</label>
								 			<span class="output">6680,97 EUR</span>
								 		</div>	
									</div>
								</div>
								<div class="form-group">
								   <div class="row">
								 		<div class="col-xs-6">
								 			<label class="control-label-output">Importo rata</label>
								 			<span class="output">100</span>
								 		</div>	
								 		<div class="col-xs-6">
								 			<label class="control-label-output">Rate residue</label>
								 			<span class="output">2</span>
								 		</div>	
									</div>
								</div>
							</div>
							<!-- Fine gruppo radio 1 -->
							
							

							<!-- Gruppo radio 2 -->
							<div class="radiogroup pari">
								<div class="form-group">
									<div class="row">
										<div class="col-xs-12">
											<div class="radio inline bigtext">
												<label class="textWrapper">
								 					  <input type="radio" name="multiSel" id="" val="2">
								  					  <span class="text">quote provenienti da PAC n. <strong>2132133</strong></span>
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
								   <div class="row">
								 		<div class="col-sm-6">
								 			<label class="control-label-output">N. quote/azioni nel portafoglio selezionato</label>
								 			<span class="output">57,769</span>
								 		</div>	
								 		<div class="col-sm-6">
								 			<label class="control-label-output">Controvalore</label>
								 			<span class="output">668,97 EUR</span>
								 		</div>	
									</div>
								</div>
								<div class="form-group">
								   <div class="row">
								 		<div class="col-xs-6">
								 			<label class="control-label-output">Importo rata</label>
								 			<span class="output">50</span>
								 		</div>	
								 		<div class="col-xs-6">
								 			<label class="control-label-output">Rate residue</label>
								 			<span class="output">2</span>
								 		</div>	
									</div>
								</div>
							</div>
							<!-- Fine gruppo radio 2 -->

							

							<!-- Gruppo radio 3 -->
							<div class="radiogroup dispari">
								<div class="form-group">
									<div class="row">
										<div class="col-xs-12">
											<div class="radio inline bigtext">
												<label class="textWrapper">
								 					  <input type="radio" name="multiSel" id="" val="3">
								  					  <span class="text">quote provenienti da PAC n. <strong>421412421</strong></span>
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
								   <div class="row">
								 		<div class="col-sm-6">
								 			<label class="control-label-output">N. quote/azioni nel portafoglio selezionato</label>
								 			<span class="output">1573,769</span>
								 		</div>	
								 		<div class="col-sm-6">
								 			<label class="control-label-output">Controvalore</label>
								 			<span class="output">6690,97 EUR</span>
								 		</div>	
									</div>
								</div>
								<div class="form-group">
								   <div class="row">
								 		<div class="col-xs-6">
								 			<label class="control-label-output">Importo rata</label>
								 			<span class="output">100</span>
								 		</div>	
								 		<div class="col-xs-6">
								 			<label class="control-label-output">Rate residue</label>
								 			<span class="output">2</span>
								 		</div>	
									</div>
								</div>
							</div>
							<!-- Fine gruppo radio 2 -->

						</div>
			 		</div>
				</div>
			</div>
		</div>
		<!-- Fine selettore multiplo -->

		<!-- Blocco riepilogo ed acquisizione quote senza selezione PAC -->
		<div id="dettaglioPac" style="display:none">
			<!-- esempio di form replicabile -->
			<div class="form-group">
			   <div class="row">
			 		<div class="col-sm-6">
			 			<label class="control-label-output">N. quote/azioni nel portafoglio selezionato</label>
			 			<span class="output">573,769</span>
			 		</div>	
			 		<div class="col-sm-6">
			 			<label class="control-label-output">Controvalore</label>
			 			<span class="output">6680,97 EUR</span>
			 		</div>	
				</div>
			</div>
			<div class="form-group">
			   <div class="row">
			 		<div class="col-xs-6">
			 			<label class="control-label-output">Importo rata</label>
			 			<span class="output">100</span>
			 		</div>	
			 		<div class="col-xs-6">
			 			<label class="control-label-output">Rate residue</label>
			 			<span class="output">2</span>
			 		</div>	
				</div> 
			</div>
		</div>

		<!-- Blocco di selezione quote/importo uguale per tutti -->
		<div id="selQuoteImp" style="display:none">
			<div class="form-group">
			   <div class="row">
			 		<div class="col-sm-6">
			 			<label class="control-label">Quante quote vuoi vendere?</label>
			 			<select class="form-control" id="nQuote">		
							<option value="0">--seleziona--</option>
							<option value="1">Tutte le quote nel deposito selezionato</option>
							<option value="2">Importo</option>
							<option value="3">Numero di quote</option>
						</select>
			 		</div>	
					<!-- Blocco sensibile alla selezione delle quote in vendita -->
			 		
			 		<!-- Tutte le quote: Estinzione PAC -->
			 		<div class="col-sm-6 nQuote selTutte" id="" style="display:none">
			 			<label class="control-label">Vuoi anche estinguere il PAC?</label>
			 			<div class="row">
							<div class="col-xs-12 col-sm-3">
								<div class="radio inline">
					 				<label class="textWrapper"><input type="radio" id="" val="Si" name="estPAC"><span class="text">S&igrave;</span></label>
								</div>
							</div>
			 				<div class="col-xs-12  col-sm-9">
								<div class="radio inline">
									<label class="textWrapper"><input type="radio" id="" val="No" name="estPAC"><span class="text">No</span></label>
								</div>
							</div>
						</div>
			 		</div>	
					<!-- Fine estinzione PAC -->
					
					<!-- Importo -->
			 		<div class="col-sm-6 nQuote selImporto" style="display:none">
			 			<label class="control-label">Importo</label>
						<div class="form-inline">
							<div class="input-group" >
								<div class="editable-input">
									<input maxlength="10" class="form-control clear-x" value="" type="text">
								</div>
								<div class="input-group-addon">EUR</div>
							</div>
						</div>
			 			<p class="note dettaglicampo">corrispondenti a <strong id="">1710,421</strong> quote</p>
			 		</div>	
					<!-- Fine importo -->

					<!-- Importo -->
			 		<div class="col-sm-6 nQuote selQuote" style="display:none">
			 			<label class="control-label">Numero di quote</label>
						<input maxlength="10" class="form-control clear-x" value="" type="text">
						<p class="note dettaglicampo">corrispondenti a <strong id="">410,421</strong> EUR</p>
			 		</div>	
					<!-- Fine importo -->

			 		<!-- Fine blocco sensibile alla selezione delle quote in vendita -->
				</div>
			</div>
		</div>
		<!-- Fine blocco riepilogo ed acquisizione quote senza selezione PAC-->
	</div>	

	<!-- Pulsantiera dell'intero blocco -->
	<div class="form-group btnWrapper">
		<div class="btn-align-right">
			<a type="button" class="btn btn-primary" id="" href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_inv_vendita_step2.php&responsive=y&liv0=4&liv1=2&liv2=5&liv3=1">Prosegui</a>
		</div>
		<br class="clear">
	</div>
	<!-- Fine pulsantiera -->

</section>
</form>

<!-- Box avvertimento/errore -->
<section class="boxesitoWrap">
	<div class="boxesito attenzione">
		<i class="icon icon-alert_caution icon-2x"></i>
		<div class="text">
			<div class="row">
				<div class="col-sm-12">
					<p>Nel deposito titoli selezionato non sono presenti fondi o sicav</p>
			</div>
		</div>
	</div>
</div>
</section>
<!-- fine box avvertimento/errore -->

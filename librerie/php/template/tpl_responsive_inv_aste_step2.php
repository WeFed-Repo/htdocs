<h2>Aste e titoli di stato</h2>
<p>Conferma i dati per prenotare il Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, consequatur.</p>
<script type="text/javascript">

$(function(){

	$("#formPrenotaProsegui").click(function(){

		resetHasErrors("#formPrenotaRiepilogo");

		// Check degli errori e validazione (da integrare con eventuali aggiuntive)
		var errorMatrix = [];
		if(!$("#checkIncentivi").is(":checked")) {
			errorMatrix.push({"field":"#checkIncentivi","text":"&Egrave; necessario prendere visione."});
		}

		if (errorMatrix.length>0) 
		{
			setHasErrors(errorMatrix,"#formPrenotaRiepilogo");
		}
		else
		{
			location.href = "/connect.php?page=strutt_priv.php&tpl=tpl_responsive_inv_aste_step3.php&responsive=y&liv0=4&liv1=3&liv2=0&liv3=1";
		}

	});

});

</script>
<section>
	<form class="formGenerico borderFormRounded output" id="formPrenotaRiepilogo">

		<!-- Dati di riepilogo -->
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12">
					<label class="control-label">Deposito</label>
					<span class="output">00012098-0129039930-12090 </span>
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="row">
				<div class="col-xs-12">
					<label class="control-label">Titolo</label>
					<span class="output">BIPIEMME 2025 1.5% </span>
				</div>
				
			</div>
		</div>

		<div class="form-group">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<label class="control-label">Divisa</label>
					<span class="output">EUR</span>
				</div>
				<div class="col-sm-6 col-xs-12">
					<label class="control-label">Commissioni</label>
					<span class="output">99,99%</span>
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<label class="control-label">Mercato di trattazione</label>
					<span class="output">MOT</span>
				</div>
				<div class="col-sm-6 col-xs-12">
					<label class="control-label">Scadenza titolo</label>
					<span class="output">02/12/2025</span>
				</div>
			</div>
		</div>




		<div class="form-group">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<label class="control-label">Titolo</label>
					<span class="output">BIPIEMME 2025 1.5% </span>
				</div>
				<div class="col-sm-6 col-xs-12">
					<label class="control-label">Divisa</label>
					<span class="output">EUR</span>
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<label class="control-label">Data inizio prenotazione</label>
					<span class="output">26/07/2018</span>
				</div>
				<div class="col-sm-6 col-xs-12">
					<label class="control-label">Data fine prenotazione</label>
					<span class="output">28/12/2018</span>
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<label class="control-label">Quantit&agrave;</label>
					<span class="output">1000000</span>
				</div>
			</div>
		</div>
	<!-- fine dati di riepilogo -->
	
	<!-- Separatore -->
	<div class="row">
		<div class="col-xs-12">
			<hr>
		</div>
	</div>
	<!-- Fine separatore -->


	<!-- MIFID -->
	<section>

		<h4>Informativa costi, oneri e incentivi</h4>

		<div class="form-group">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<label class="control-label">Strumento finanziario</label>
					<span class="output">Lorem ipsum dolor</span>
				</div>
				<div class="col-sm-6 col-xs-12">
					<label class="control-label">Controvalore dell'operazione</label>
					<span class="output">999.999.999,99 EUR</span>
				</div>
			</div>
		</div>

		
		<h4>Legenda</h4>
		<p>I costi e oneri di seguito riportati rappresentano le commissioni massime applicabili e non tengono conto di eventuali sconti concordati.</p>
		<ul>
			<li><strong>Costi per Prodotto:	</strong>&nbsp; tutti i costi e gli oneri associati alla realizzazione e gestione degli strumenti finanziari.</li>
			<li><strong>Costi per Servizio:	</strong>&nbsp; tutti i costi e gli oneri connessi applicati dalla Banca relativi ai servizi di investimento e/o servizi accessori prestati al cliente.</li>
			<li><strong>Incentivi: </strong>&nbsp; retrocessione che la Banca percepisce dalle Societ&agrave; prodotto sotto forma di quota parte dei costi sostenuti dal cliente o come prestazioni non monetarie.</li>
		</ul>
		<section>
			<div class="headerContainerNoBootS">
		        <div class="tableContainerNoBootS">
		            <table class="riepilogo">
		                <thead>
		                    <tr>
		                        <th class="left intestazione">Lorem ipsum dolor sit</th>
		                        <th class="right">Valore €</th>
		                        <th class="right">Valore %</th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <tr>
		                        <th class="left">Costo del ipsum dolor sit</th>
		                        <th class="right">99.999,00 €</th>
		                        <th class="right">99,99 %</th>
		                    </tr>
		                    <tr class="dispari">
		                        <td class="left">Lorem ipsum dolor sit</td>
		                        <td class="right">99.999,00 €</td>
		                        <td class="right">99,99 %</td>
		                    </tr>
		                      <tr class="pari">
		                        <td class="left">Lorem ipsum dolor sit</td>
		                        <td class="right">99.999,00 €</td>
		                        <td class="right">99,99 %</td>
		                    </tr>
		                      <tr class="dispari">
		                        <td class="left">Lorem ipsum dolor sit</td>
		                        <td class="right">99.999,00 €</td>
		                       <td class="right">99,99 %</td>
		                    </tr>
		                      <tr class="pari">
		                        <td class="left">Lorem ipsum dolor sit</td>
		                        <td class="right">99.999,00 €</td>
		                       <td class="right">99,99 %</td>
		                    </tr>
		                    <tr>
		                        <th class="left">Costo del ipsum dolor sit</th>
		                        <th class="right">99.999,00 €</th>
		                        <th class="right">99,99 %
		                    </th></tr>
		                    <tr class="dispari">
		                        <td class="left">Lorem ipsum dolor sit</td>
		                        <td class="right">99.999,00 €</td>
		                        <td class="right">99,99 %</td>
		                    </tr>
		                      <tr class="pari">
		                        <td class="left">Lorem ipsum dolor sit</td>
		                        <td class="right">99.999,00 €</td>
		                        <td class="right">99,99 %</td>
		                    </tr>
		                      <tr class="dispari">
		                        <td class="left">Lorem ipsum dolor sit</td>
		                        <td class="right">99.999,00 €</td>
		                        <td class="right">99,99 %</td>
		                    </tr>
		                      <tr class="pari">
		                        <td class="left">Lorem ipsum dolor sit</td>
		                        <td class="right">99.999,00 €</td>
		                        <td class="right">99,99 %</td>
		                    </tr>
		                </tbody>
		                <tfoot>
		                    <tr class="totali">
		                       <td class="left">Totale</td>
		                       <td class="right">99.999,00 €</td>
		                       <td class="right">100,00 %</td>
		                    </tr>
		                </tfoot>
		             </table>
		        </div>
		    </div>
		 </section>
         
         <section>
         <h4>Impatto dei costi sul rendimento</h4>
         <p>
			La tabella rappresenta un'illustrazione dell'effetto dei costi sul rendimento degli strumenti, in ipotesi di rendimento zero. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim modi, assumenda, maxime, esse delectus deleniti odio ad perspiciatis repudiandae reprehenderit eveniet!
		 </p>
         
         <div class="headerContainerNoBootS">
	        <div class="tableContainerNoBootS">
	            <table class="riepilogo">
	                <thead>
	                    <tr>
	                        <th class="left intestazione">Controvalore lordo investito</th>
	                        <th class="right">Valore €</th>
	                        <th class="right">Valore %</th>
	                    </tr>
	                </thead>
	                
	                <tbody>
	                    <tr>
	                        <th class="left">Costo del ipsum dolor sit</th>
	                        <th class="right">99.999,00 €</th>
	                        <th class="right">99,99 %</th>
	                    </tr>
	                    <tr class="dispari">
	                        <td class="left">Lorem ipsum dolor sit</td>
	                        <td class="right">99.999,00 €</td>
	                        <td class="right">99,99 %</td>
	                    </tr>
	                      <tr class="pari">
	                        <td class="left">Lorem ipsum dolor sit</td>
	                        <td class="right">99.999,00 €</td>
	                        <td class="right">99,99 %</td>
	                    </tr>
	                      <tr class="dispari">
	                        <td class="left">Lorem ipsum dolor sit</td>
	                        <td class="right">99.999,00 €</td>
	                       <td class="right">99,99 %</td>
	                    </tr>
	                </tbody>

	                <tfoot>
	                    <tr class="totali">
	                       <td class="left">Totale</td>
	                       <td class="right">99.999,00 €</td>
	                       <td class="right">100,00 %</td>
	                    </tr>
	                </tfoot>
	             </table>
	        </div>
	    </div>
       	</section>

		<section>
			<!-- MESSAGGIO DI ATTENZIONE -->

			<div class="boxesito attenzione">
				<div class="text">
					<p><strong>Avvertenze sull''operazione che stai effettuando</strong><br>
					Ti preghiamo di prenderne visione. Potrai a tua scelta decidere di annullare l'operazione o procedere con l'immissione dell'ordine. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit consectetur, voluptates harum alias, vero libero facere dicta natus molestias dolor neque eos aperiam amet. Tenetur eius, quasi voluptas velit explicabo.</p>
				</div>
			</div>

			<!-- FINE MESSAGGIO DI ATTENZIONE -->


			<!-- CHECK PRESA VISIONE -->
			<div class="form-group">	 
			  	 <div class="row">
					<div class="col-sm-12">
						<div class="checkbox inline">
							<label class="textWrapper">
			 					  <input type="checkbox" name="" id="checkIncentivi" val="1">
			  					  <span class="text">Dichiaro di avere preso visione delle informazioni relative ai Costi, Oneri e Incentivi in relazione alla presente operazione di investimento. </span>
							</label>
						</div>
					</div>
				</div>
			</div>
			<!-- FINE CHECK PRESA VISIONE -->			
		</section>
		
	</section>
	<!-- FINE MIFID -->

</form>


<section>
	<!-- Pulsanti -->
	<div class="form-group btnWrapper">
		<div class="stepBtn">Step <strong> 2 </strong> di 2</div>
		<div class="btn-align-left">
			<a type="button" class="btn btn-default" href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_inv_aste_step1.php&responsive=y&liv0=4&liv1=3&liv2=0&liv3=1">indietro</a>
		</div>
		<div class="btn-align-right">
			<a type="button" class="btn btn-default" href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_inv_aste.php&responsive=y&liv0=4&liv1=3&liv2=0&liv3=1">annulla</a>
			<a type="button" class="btn btn-primary" id="formPrenotaProsegui">prosegui</a>
		</div>
		<br class="clear">
	</div>
	<!-- Fine pulsanti -->
</section>
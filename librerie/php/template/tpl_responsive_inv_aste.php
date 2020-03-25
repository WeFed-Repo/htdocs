<script type="text/javascript">
/* Url della chiamata al glossario */
var glossarioUrl = "/librerie/include/commons/ajax/fes_glossario.php";
</script>

<h2>Aste titoli di stato</h2>
<section>
	<h3>Cosa sono</h3>
	<p>
		I Titoli di Stato sono obbligazioni emesse e garantite dallo Stato italiano e si distinguono in titoli a breve termine 
		(<a href="javascript:;" data-glossario="BOT"><strong>BOT</strong></a> e 
		<a href="javascript:;" data-glossario="BOT"><strong>CTZ</strong></a>) ed a medio e lungo termine 
		(<a href="javascript:;" data-glossario="CTZ"><strong>CCT</strong></a>, 
		<a href="javascript:;" data-glossario="BTP"><strong>BTP</strong></a> e 
		<a href="javascript:;" data-glossario="BTP€i"><strong>BTP€i</strong></a>), a seconda della data di rimborso del capitale.          
	</p>
</section>

<section>
	<h3>I vantaggi</h3>
	<ul>
		<li><strong>miglior trattamento fiscale</strong> (12,5% rispetto al 20%)</li>
		<li><strong>rendimenti indipendenti dalle oscillazioni del mercato</strong> azionario.</li>
	</ul>
</section>

<section>

	<div class="modal fade" id="layerCommissioni" tabindex="-1" role="dialog" aria-labelledby="layerCommissioniLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
					<h2 class="modal-title" id="layerCommissioniLabel">Commissioni applicate</h2>
				</div>
				<div class="modal-body">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12">
								<section>
									<h4 class="tabcartleft">Aste BOT</h4>
									<div class="headerContainerNoBootS">
										<div class="tableContainerNoBootS">
											<table>
												<thead>
													<tr> 
														<th class="left">Vita residua dei titoli</th>
														<th class="right">Commissione applicata*</th>
													</tr>
												</thead>
												<tbody>
													<tr> 
														<td>Fino ad 80 giorni</td> 
														<td class="right">0,3 ‰</td>  
													</tr>
													<tr class="pari"> 
														<td>Da 81 a 140 giorni</td>
														<td class="right">0,5 ‰</td> 
													</tr>
													<tr > 
														<td>Da 141 a 270 giorni</td> 
														<td class="right">1 ‰</td>  
													</tr>
													<tr class="pari"> 
														<td>Oltre i 271 giorni</td> 
														<td class="right">1,5 ‰</td>  
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<p class="note">*Senza massimo n&egrave; minimo</p>
								</section>

								<section>
									<h4>Sottoscrizione BTP, BTP&euro;i, CCT e CTZ</h4>
									<div class="headerContainerNoBootS">
										<div class="tableContainerNoBootS">
											<table>
												<thead>
													<tr> 
														<th class="left">Vita residua dei titoli</th>
														<th class="right">Commissione applicata*</th>
													</tr>
												</thead>
												<tbody>
													<tr> 
														<td>BTP e BTP&euro;i</td> 
														<td class="right">0,3 ‰</td>  
													</tr>
													<tr class="pari"> 
														<td>CCT</td>
														<td class="right">0,5 ‰</td> 
													</tr>
													<tr > 
														<td>CTZ</td> 
														<td class="right">1 ‰</td>  
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<p class="note">*Senza massimo n&egrave; minimo</p>
								</section>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<h3>I costi</h3>
	<p>I titoli di stato possono essere <a href="javascript:;" data-glossario="Titoli negoziati in asta"><strong>negoziati in asta</strong></a> con dei <strong>vantaggi commissionali</strong> rispetto alla negoziazione sul mercato secondario.</p>

	<div class="form-group btnWrapper">
		<div class="btn-align-right">
			<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#layerCommissioni" title="Verifica le commissioni">Verifica le commissioni</a>
		</div>
		<br class="clear">
	</div>

</section>   

<!-- Tabella aste -->
<section>
	<div class="tithelp">
		<h4>Aste titoli di stato</h4>
		<div class="flRight"><a href="javascript:;" data-glossario="Lorem ipsum dolor sit" class="no-underline btn-icon"><i class="icon icon-info_fill icon-2x inited" data-toggle="tooltip" data-title="lorem ipsum dolor sit" data-original-title="" title=""></i></a>
			<br class="clear">
		</div>
		<br class="clear">
	</div>
	
	<div class="headerContainerNoBootS">
		<div class="tableContainerNoBootS">
			<table cellpadding="0" cellspacing="0">
				<thead>
					<tr>  
						<th>Titolo</th>
						<th>Scadenza</th>
						<th>Tasso</th>
						<th>Divisa</th>
						<th>Data inizio prenotazione</th>
						<th>Data fine prenotazione</th>  
						<th>Adesione</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>BIPIEMME 2025 1.5%  </td>
						<td class="center">02/12/2025</td>
						<td class="center">VARIABILE</td>
						<td class="center">EUR</td>
						<td class="center">26/07/2018</td>
						<td class="center">28/12/2018<br>ore:  19:00</td> 
						<td class="center"><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_inv_aste_step1.php&responsive=y&liv0=4&liv1=3&liv2=0&liv3=1" title="Prenota">Prenota</a></td>
					</tr>
					<tr class="dispari">   
						<td >BOT 14.02.2019 365GG</td>
						<td class="center">14/02/2019</td>
						<td class="center">ZERO<br>COUPON</td>
						<td class="center">EUR</td>
						<td class="center">11/06/2018</td>
						<td class="center">28/12/2018<br>ore:  19:00</td> 
						<td class="center"><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_inv_aste_step1.php&responsive=y&liv0=4&liv1=3&liv2=0&liv3=1" title="Prenota">Prenota</a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

</section>
<!-- Fine tabella -->

<!-- Eventuale box comunicazione -->
<section class="boxesitoWrap">
	<div class="boxesito attenzione">
		<div class="text">
			<div class="row">
				<div class="col-xs-12">
					<p>Al momento non ci sono aste sui Titoli di Stato.</p>
				</div>
				
			</div>
		</div>
	</div>
</section>

<!-- Fine eventuale box comunicazione -->


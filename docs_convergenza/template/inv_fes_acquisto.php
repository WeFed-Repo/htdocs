<?php if ($site == "youweb") { ?>
<!-- Paginatore YouWeb -->
<div class="pager clearfix pull-right">
	<div class="circle current_page">1</div>
	<div class="circle ">2</div>
	<div class="circle ">3</div>
</div>
<!-- Fine paginatore YouWeb -->
<?php } ?>
<h2>Acquisto</h2>

<!-- Selettore deposito -->
<h4>Deposito titoli</h4>
<section>
	<?php include("parts/selettore_deposito.php") ?>
</section>
<!-- Fine selettore deposito -->


<!-- Riepilogo dati fondo -->
<h4>Dati SICAV/Fondo da acquistare</h4>
<section>
	<div class="formGenerico borderFormRounded output">
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12">
					<label class="control-label-output">Fondo/Sicav</label>
					<!-- Esempio di modale con dettaglio -->
					<div class="modal fade" id="modalFondo" tabindex="-1" role="dialog" aria-labelledby="modalFondoLabel">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
									<h2 class="modal-title" id="modalFondoLabel">Deutsche lorem ipsum dolor sit amet</h2>
								</div>
								<div class="modal-body">
									<div class="container-fluid">
										<div class="row">
											<div class="col-xs-12">
												<p>Dati del fondo</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


					<!-- Fine esempio di modale con dettaglio -->
					<div class="spsel spsel-hasicon output">
						<input type="hidden" name="fondo" val="12308091283091">
						<div class="spsel-option spsel-selected">
							<a class="spsel-addel btn-icon" data-toggle="modal" data-target="#modalFondo"><i class="icon icon-info"></i></a>
							<span class="spsel-option-el">Deutsche lorem ipsum dolor sit amet consectetur</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Valore quota/NAV al GG/MM/AAAA</label>
					<span class="output">999.999.999,99 EUR</span>
				</div>
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Societ&agrave; di gestione</label>
					<span class="output">Lorem ipsum dolor sit amet consectetur</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Categoria assogestioni</label>
					<span class="output">Obbligazionari lorem ipsum dolor</span>
				</div>
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Commissione di ingresso</label>
					<span class="output"><del>1,00%</del> <strong>GRATIS</strong></span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Commissioni di gestione</label>
					<span class="output">1,10%</span>
				</div>
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Commissione di uscita</label>
					<span class="output"><del>1,00%</del> <strong>ZERO</strong></span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output txthelp" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, atque!">Diritti fissi</label>
					<span class="output">99,99</span>
				</div>
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output txthelp" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, atque!">Diritti fissi stacco dividendo</label>
					<span class="output">11,11 EUR</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12">
					<label class="control-label-output">Periodicit&agrave; distribuzione proventi</label>
					<span class="output">Annuale</span>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Fine riepilogo dati fondo -->

<!-- Modalita' di acquisto -->
<h4>Modalit&agrave; di acquisto</h4>
<section>
	<!-- Esempio di blocco interattivo -->
	<script type="text/javascript">
		$(function(){

			$("*[name=picpac]").change(function(){
				$("#casoPic,#casoPac").hide();
				if($(this).val()=="pic") {
					$("#casoPic").show();
				}
				else
				{
					$("#casoPac").show();
				}
			});


		});
	</script>
	
	<!-- Fine esempio blocco interattivo -->
	<div class="formGenerico borderFormRounded output">
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-6 nolabel">
					<div class="radio inline">
                        <label class="textWrapper">
                            <input type="radio" name="picpac" id="" value="pic" checked>
                            <span class="text">Unico acquisto (PIC)</span>
                        </label>
                    </div>
				</div>
				<div class="col-xs-12 col-sm-6 nolabel">
					<div class="radio inline">
                        <label class="textWrapper">
                            <input type="radio" name="picpac" id="" value="pac">
                            <span class="text">Piano di accumulo (PAC)</span>
                        </label>
                    </div>
				</div>
			</div>
		</div>
		
		<style>
			.output-riepilogo {background:#eee; padding:15px; border-radius:15px;}
		</style>
		
		<!-- Caso PIC -->
		<div id="casoPic">

			<!-- Oggetto input riepilogo -->
			<div class="form-group">
				<div class="output-riepilogo">
					<div class="row">
						<div class="col-xs-12 col-sm-6 nolabel">
	                        <label class="control-label-output">Minimo prima sottoscrizione</label>
							<span class="output">500,00&euro;</span>
						</div>
						<div class="col-xs-12 col-sm-6 nolabel">
			                <label class="control-label-output">Minimo sottoscrizioni successive</label>
							<span class="output">500,00&euro;</span>
	        			</div>
					</div>
				</div>
			</div>
			
			<!-- fine oggetto input riepilogo -->
			<div class="form-group">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<label class="control-label">Importo</label>
						<div class="form-inline">
					 	  	<div class="input-group">
						     	<input type="text"  class="form-control clear-x"> 
						     	<div class="input-group-addon">EUR</div>
						  	</div>
						</div> 
					</div>
				</div>
			</div>
			
			<div class="form-group">
				<div class="row">
					<div class="col-xs-12">
						<label class="control-label">Destinazione proventi</label>
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="radio inline">
									<label class="textWrapper">
			                            <input type="radio">
			                            <span class="text">Investimento nel fondo</span>
			                        </label>
			                    </div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="radio inline">
									<label class="textWrapper">
			                            <input type="radio">
		                            	<span class="text">Accredito sul conto corrente</span>
			                        </label>
			                    </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-xs-12">
						<p class="note">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit veniam reiciendis distinctio excepturi. Reiciendis perspiciatis sunt aperiam rem, quas nisi illum asperiores vel. Ea ipsam excepturi, qui maiores quia modi deserunt quisquam distinctio in animi, aliquid amet, quibusdam quidem ad nisi. Incidunt aperiam minima perspiciatis, dicta neque laboriosam temporibus cumque?</p>
					</div>
				</div>
			</div>


		</div>
		<!-- Fine caso PIC -->
		

		<!-- Caso PAC -->
		<div id="casoPac" style="display:none">

			<!-- Oggetto input riepilogo -->
			<div class="form-group">
				<div class="output-riepilogo">
					<div class="row">
						<div class="col-xs-12 col-sm-6 nolabel">
	                        <label class="control-label-output">Importo minimo rata</label>
							<span class="output">500,00&euro;</span>
						</div>
						<div class="col-xs-12 col-sm-6 nolabel">
			                <label class="control-label-output">Versamento minimo iniziale</label>
							<span class="output">500,00&euro;</span>
	        			</div>
					</div>
				</div>
			</div>
			<!-- fine oggetto input riepilogo -->
			
			<div class="form-group">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<label class="control-label txthelp" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat reiciendis commodi repudiandae aliquid, est voluptate assumenda impedit dignissimos nisi nam.">Periodicit&agrave;</label>
						<select class="form-control">
                            <option>seleziona</option>
                            <option>lorem ipsum</option>
                        </select>
					</div>
					<div class="col-xs-12 col-sm-6">
						<label class="control-label txthelp" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat reiciendis commodi repudiandae aliquid, est voluptate assumenda impedit dignissimos nisi nam.">Durata del piano</label>
						<select class="form-control">
                            <option>10 anni</option>
                            <option>lorem ipsum</option>
                        </select>
					</div>
				</div>
			</div>
			
			<script type="text/javascript">
			$(function(){

				// Inizializzazione degli spinner
				setSpinner({
			        idInput: '#spinnerRata'
			    });	

			    setSpinner({
			        idInput: '#spinnerVersamenti'
			    });	

			});
			</script>
			<div class="form-group">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<label class="control-label txthelp" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat reiciendis commodi repudiandae aliquid, est voluptate assumenda impedit dignissimos nisi nam.">Importo rata</label>
						<input id="spinnerRata" type="text" name="spinnerRata" class="form-control spinner">
					</div>
					<div class="col-xs-12 col-sm-6">
						<label class="control-label txthelp" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat reiciendis commodi repudiandae aliquid, est voluptate assumenda impedit dignissimos nisi nam.">N. versamenti iniziali</label>
						<input id="spinnerVersamenti" type="text" name="spinnerVersamenti" class="form-control spinner">
					</div>
				</div>
			</div>
			

			<div class="form-group">
				<div class="row">
					<div class="col-xs-12 col-sm-6 nolabel">
                        <label class="control-label-output txthelp" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat reiciendis commodi repudiandae aliquid, est voluptate assumenda impedit dignissimos nisi nam.">Investimento iniziale</label>
						<span class="output">1.200,00 &euro;</span>
					</div>
					<div class="col-xs-12 col-sm-6 nolabel">
		                <label class="control-label-output txthelp" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat reiciendis commodi repudiandae aliquid, est voluptate assumenda impedit dignissimos nisi nam.">Investimento totale</label>
						<span class="output">7.200,00&euro;</span>
        			</div>
				</div>
			</div>


			<div class="form-group">
				<div class="row">
					<div class="col-xs-12">
						<label class="control-label">Destinazione proventi</label>
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="radio inline">
									<label class="textWrapper">
			                            <input type="radio">
			                            <span class="text">Investimento nel fondo</span>
			                        </label>
			                    </div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="radio inline">
									<label class="textWrapper">
			                            <input type="radio">
		                            	<span class="text">Accredito sul conto corrente</span>
			                        </label>
			                    </div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-xs-12">
						<p class="note">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit veniam reiciendis distinctio excepturi. Reiciendis perspiciatis sunt aperiam rem, quas nisi illum asperiores vel. Ea ipsam excepturi, qui maiores quia modi deserunt quisquam distinctio in animi, aliquid amet, quibusdam quidem ad nisi. Incidunt aperiam minima perspiciatis, dicta neque laboriosam temporibus cumque?</p>
					</div>
				</div>
			</div>

			<!-- Polizza -->
			<hr>

			<div class="promoBox">
				<div class="row">
					<div class="col-xs-12">
						<!-- VISUAL PER DESKTOP TABLET FLOTTANTE -->
						<img src="/common/fe/img/logo_promo_Eurizon.gif" class="imgVisual hidden-xs">
						<!-- FINE VISUAL PER DESKTOP TABLET FLOTTANTE -->
						<!-- VISUAL PER SMARTPHONE -->
						<img src="/common/fe/img/logo_promo_Eurizon.gif" class="imgVisual small hidden-xl hidden-lg hidden-md hidden-sm">
						<!-- FINE VISUAL PER SMARTPHONE -->
						<h3>
							Polizza assicurativa gratuita Infortuni e malattia
						</h3>
						<p>
							Si tratta di una <strong>copertura assicurativa collettiva gratuita Infortuni e Malattia di Intesa Sanpaolo Assicura S.p.A.</strong> che garantisce il completamento del Piano di Accumulo programmato, nei casi e nelle condizioni e limiti della Polizza Collettiva.
						</p>
						<p>
							L'adesione alla polizza è subordinata alla sottoscrizione di un PAC (Piano di Accumulo) nei fondi di Eurizon Capital Sgr.
						</p>
						<div class="textWrapper form-group">
		                    <i class="icon icon-file_pdf"></i>
		                    <span class="text"><a href="#">Polizza di assicurazione collettiva</a></span>
		                </div>
						<a href="javascript:;" id="link0" class="colorBank linkPdf"></a>
						<p>Le garanzie <strong>coprono il primo sottoscrittore</strong> delle quote dal 181° giorno successivo al primo versamento nei seguenti casi:</p>
						<ul>
							<li>morte da infortunio (età compresa tra 18 e 75 anni)</li>
							<li>invalidità permanente da infortunio - rischio volo (da 18 a 75 anni)</li>
							<li>invalidità permanente da malattia (da 18 a 60 anni)</li>
							<li>diaria da infortunio o malattia (da 18 a 75 anni).</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="col-sm-12">
			                <label class="control-label">Desideri aderire alla Polizza Collettiva gratuita offerta da Eurizon Capital S.p.A.?</label>
			                <div class="row">
			                    <div class="col-xs-6 col-sm-3">
			                        <div class="radio inline">
			                            <label class="textWrapper">
			                                <input type="radio" name="" id="">
			                                <span class="text">Sì</span>
			                            </label>
			                        </div>
			                    </div>
			                    <div class="col-xs-6 col-sm-3">
			                        <div class="radio inline">
			                            <label class="textWrapper">
			                                <input type="radio" name="" id="">
			                                <span class="text">No</span>
			                            </label>
			                        </div>
			                    </div>
				                   
				            </div>
						</div>
					</div>
				</div>

				<!-- SEZIONE NON VISIBILE -->
				<hr>
				<div class="row">
					<div class="col-xs-12">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui laudantium incidunt ullam, quidem exercitationem beatae dolorum perferendis ipsa molestias nisi.</p>
	                </div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="textWrapper">
		                    <i class="icon icon-file_pdf"></i>
		                    <span class="text"><a href="javascript:;">Documento Lorem ipsum dolor sit amet</a></span>
		                </div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="checkbox inline">
	                        <label class="textWrapper">
	                            <input type="checkbox" name="" id="">
	                            <span class="text">Dichiaro di aver preso visione  e di accettare le condizioni contrattuali indicate</span>
	                        </label>
	                    </div>
				    </div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui laudantium incidunt ullam, quidem exercitationem beatae dolorum perferendis ipsa molestias nisi.</p>
	                </div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="textWrapper">
		                    <i class="icon icon-file_pdf"></i>
		                    <span class="text"><a href="javascript:;">Documento Lorem ipsum dolor sit amet</a></span>
		                </div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="checkbox inline">
	                        <label class="textWrapper">
	                            <input type="checkbox" name="" id="">
	                            <span class="text">Dichiaro di aver preso visione  e di accettare le condizioni contrattuali indicate</span>
	                        </label>
	                    </div>
				    </div>
				</div>
			</div>
			<!-- Fine polizza -->

		</div>
		<!-- Fine caso PAC -->


	</div>

	<!-- Pulsantiera -->
	<div class="form-group btnWrapper">
		<?php if($site == "webank") { ?>
		<div class="stepBtn">Step <strong> 1 </strong> di 3</div>
		<?php } ?>
	    <div class="btn-align-right">
	        <a type="button" class="btn btn-primary" id="btnInvio" href="/template/strutt_<?php print $site; ?>.php?html=mi&tpl=inv_fes_acquisto_adever.php&liv1=investimenti&liv2=fondi_e_sicav&liv3=compravendita&liv4=acquisto#">prosegui</a>
	    </div>

	</div>
	<!-- Fine pulsantiera -->
	<br class="clear">
</section>
<!-- Fine modalita' di acquisto -->




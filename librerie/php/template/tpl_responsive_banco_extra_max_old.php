<h2>ExtraPrelievo e massimali</h2>
<section>
<div class="navContFirstLev outerTab">
	<div class="innerTab">
		<ul class="tabmedium">
			<li><a href="connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_banco_saldo_mov.php&liv0=2&liv1=0&liv2=1&liv3=0&responsive=y">saldo e <br>movimenti</a></li>
			<li class="on"><a href="connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_banco_extra_max.php&liv0=2&liv1=0&liv2=1&liv3=0&responsive=y">extraPrelievo<br> e Massimali</a></li>
			<li><a href="#">profilo<br> internazionale</a></li>
			<li><a href="connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_banco_sicurezza.php&liv0=2&liv1=0&liv2=1&liv3=0&responsive=y">sicurezza<br> ed estinzione</a></li>
			<li><a href="connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_stato_pratica.php&liv0=2&liv1=0&liv2=1&liv3=0&responsive=y">stato pratica</a></li>
		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-nofill">
		<section>
				<p>In questa pagina puoi:</p>
				<ul>
					<li>attivare l'opzione <strong>EXTRAPRELIEVO</strong>.</li>
					<li>
						visualizzare e <string>modificare i</strong>
						<span class="txthelp">
							<strong class="closeable" data-title="Per i &quot;Massimali&quot; si intendono i limiti massimi di spesa, giornalieri e mensili " data-toggle="tooltip">massimali</strong>
						</span>del tuo bancomat
					</li>
			    </ul>
			    <div class="tithelp">
			    	<h4>Conto corrente e numero carta</h4>
			    </div>
			    <form class="formGenerico borderFormRounded output" role="form" id="form04">
				<!--RIGA DIVISA IN TRE CAMPI -->
					<div class="form-group">
						<div class="row">
							<div class="col-sm-6">
									<label class="control-label">Conto corrente</label>
									<span class="output">01099 - 0000083023 - EUR</span>
							</div>
							<div class="col-sm-4">
									<label class="control-label">Carta n&deg;</label>
									<span class="output">*166</span>
							</div>
						</div>
					</div>
				</form>
				<div class="box-generico-border">
					<h4 class="align-center">Etraprelievo</h4>
					<div class="box-generico-text">
						Vuoi prelevare un'elevata somma di denaro presso un unico sportello bancomat? <br>
						Attiva l'opzione <strong>ExtraPrelievo</strong>: per un periodo di 2 giorni lavorativi potrai prelevare fino a <strong>4.000 &euro;</strong>, che si aggiungono al tuo massimale standard.<br>
						Presso gli sportelli bancomat del Gruppo Bipiemme puoi prelevare in <strong>tagli da 500 &euro;</strong> (negli altri bancomat, <strong>max 250 &euro;</strong>).
						Tra un prelievo e l'altro occorre attendere qualche minuto.<br>
						ExtraPrelievo sar&agrave; attivo dalle ore 10 del primo giorno lavorativo successivo alla richiesta online, puoi attivarlo <span class="txthelp"><span class="closeable" data-title="Lorem ipsum dolor sit" data-toggle="tooltip">solo 1 volta in un mese solare.</span></span><br>
		<a href="#" data-toggle="modal" data-target="#layerSepa"><span>Tempi di attivazione</span></a>
					</div>
				</div>
				<div class="boxesito attenzione">
					<i class="icon icon-alert_caution icon-2x"></i>
					<div class="text">
						<div class="row">
							<div class="col-sm-10">
								<p><strong>Hai gi&agrave; attivato ExtraPrelievo nel mese di giugno. Nel prossimo mese potrai fare una nuova richiesta di attivazione.</strong></p>
							</div>
						</div>
					</div>
				</div>
		</section>
		<section>
				<div class="modal fade" id="layerMassimali" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
								<h2 class="modal-title" id="myModalLabel">Massimali</h2>
							</div>
							<div class="modal-body" id="modalLoading">
							</div>
						</div>
					</div>
				</div>
				
				<div class="panel-group" id="accordionMassimali" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingMassimali">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" href="#collapseMassimali" aria-expanded="false" aria-controls="collapseMassimali" class="collapsed">
					          I TUOI MASSIMALI<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
					        </a>
					      </h4>
					    </div>
					    <div id="collapseMassimali" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingMassimali" aria-expanded="false" style="height: 0px;">
					      <div class="panel-body">
					      	<div id="tabellaComparazione" class="comparazioneFocus">
								<table cellspacing="0" cellpadding="0" border="0" id="massimaliTable" class="fixed"  class="fixed" >
									<thead>
										<tr>
											<th width="50%" class="fix1Col align-left" data-field="tipologiaColonna">Tipologia</th>
											<th width="10%" class="fixedLarge" id="bancomatTitle" data-field="bancomatTitle"><span class="scrollabled-minl-col">Al giorno</span><span class="scrollabled-minl-col">Al mese</span></th>
											<th width="10%" class="fixedLarge selected" data-field="cartaOneTitle"><span class="scrollabled-minl-col">Al giorno</span><span class="scrollabled-minl-col">Al mese</span></th>
											<th width="10%" class="fixedLarge" data-field="cartaGoldTitle"><span class="scrollabled-minl-col">Al giorno</span><span class="scrollabled-minl-col">Al mese</span></th>
											<th width="10%" class="fixedLarge" data-field="cartaJeansTitle"><span class="scrollabled-minl-col">Al giorno</span><span class="scrollabled-minl-col">Al mese</span></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><span class="txthelp closeable" data-toggle="tooltip" data-title="lorem ipsum">Max utilizzo carte</span></td>
											<td><span class="scrollabled-minl-col">1500 &euro;</span><span class="scrollabled-minl-col">2000 &euro;</span></td>
											<td class="selected"><span class="scrollabled-minl-col">2000 &euro;</span><span class="scrollabled-minl-col">4000 &euro;</span></td>
											<td><span class="scrollabled-minl-col">2000 &euro;</span><span class="scrollabled-minl-col">6000 &euro;</span></td>
											<td><span class="scrollabled-minl-col">2000 &euro;</span><span class="scrollabled-minl-col">7750 &euro;</span></td>
										</tr>
										<tr>
											<td>Max prelievo circuito Bancomat</td>
											<td><span class="scrollabled-minl-col">500 &euro;</span><span class="scrollabled-minl-col">1500 &euro;</span></td>
											<td class="selected"><span class="scrollabled-minl-col">750 &euro;</span><span class="scrollabled-minl-col">3500 &euro;</span></td>
											<td><span class="scrollabled-minl-col">750&euro;</span><span class="scrollabled-minl-col">5000 &euro;</span></td>
											<td><span class="scrollabled-minl-col">750 &euro;</span><span class="scrollabled-minl-col">5000 &euro;</span></td>
										</tr>
										<tr>
											<td>Max prelievo circuito Cirrus (tra Italia ed estero)</td>
											<td><span class="scrollabled-minl-col">250 &euro;</span><span class="scrollabled-minl-col">1000 &euro;</span></td>
											<td class="selected"><span class="scrollabled-minl-col">250 &euro;</span><span class="scrollabled-minl-col">1500 &euro;</span></td>
											<td><span class="scrollabled-minl-col">250&euro;</span><span class="scrollabled-minl-col">1500 &euro;</span></td>
											<td><span class="scrollabled-minl-col">250 &euro;</span><span class="scrollabled-minl-col">1500 &euro;</span></td>
										</tr>
										<tr>
											<td>Max pagamento circuito PagoBancomat</td>
											<td><span class="scrollabled-minl-col">1000 &euro;</span><span class="scrollabled-minl-col">1000 &euro;</span></td>
											<td class="selected"><span class="scrollabled-minl-col">1250 &euro;</span><span class="scrollabled-minl-col">1250 &euro;</span></td>
											<td><span class="scrollabled-minl-col">1250&euro;</span><span class="scrollabled-minl-col">1250 &euro;</span></td>
											<td><span class="scrollabled-minl-col">1250 &euro;</span><span class="scrollabled-minl-col">1250 &euro;</span></td>
										</tr>
										<tr>
											<td>Max pagamento circuito Maestro (tra Italia ed estero)</td>
											<td><span class="scrollabled-minl-col">500 &euro;</span><span class="scrollabled-minl-col">1000 &euro;</span></td>
											<td class="selected"><span class="scrollabled-minl-col">500 &euro;</span><span class="scrollabled-minl-col">1250 &euro;</span></td>
											<td><span class="scrollabled-minl-col">500&euro;</span><span class="scrollabled-minl-col">1250 &euro;</span></td>
											<td><span class="scrollabled-minl-col">500 &euro;</span><span class="scrollabled-minl-col">1500 &euro;</span></td>
										</tr>
										<tr>
											<td>&nbsp;</td>
											<td class="align-center"><input type="radio" name="massimali"></td>
											<td class="align-center selected"><input type="radio" name="massimali"></td>
											<td class="align-center"><input type="radio" name="massimali"></td>
											<td class="align-center"><input type="radio" name="massimali"></td>
										</tr>
									</tbody>
								</table>
								 <div class="form-group btnWrapper">
							        <div class="stepBtn"><p><span class="txthelp"><strong class="closeable" data-title="lorem ipsum" data-toggle="tooltip">Pagamenti con Fast Pay:</strong></span> &egrave; previsto un unico massimale di 100 &euro; al mese.</p></div>
							        <div class="btn-align-right">
							            <a type="button" class="btn btn-primary" id="btnInvio" href="/connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_bonifico_step2.php&amp;liv0=1&amp;liv1=1&amp;liv2=0&amp;liv3=0&amp;responsive=y">prosegui</a>
							        </div>
							        <div class="clear"></div>
							    </div>

								
							</div>
							</div>
					    </div>
				  	</div>
				</div>
		</section>
	</div>
</div>
</section>
<script>
	$(function () {
       var $table = $('#massimaliTable'),
       		bootstrapped = false;
       $('#accordionMassimali').on('shown.bs.collapse', function () {
       		setFocusCol();
       	});
       	 $('#accordionMassimali .collapse').on('show.bs.collapse', function () {
       		if(!bootstrapped)
	       		{
	       		$table.bootstrapTable('destroy').bootstrapTable(
		       	{	
		       		onPostBody: function() {
		        		bootstrapped = true;}
		        	}
	        	);
        	}
		});
     
       	 function setFocusCol() 
       	 {
       	 var trScroll = $('table .fixedLarge'),
   			scrollPosition= $('th.selected').index() -1, //di quante colonne si deve spostare
   			scrollStep = trScroll.innerWidth() * scrollPosition;
   			$('.fixed-table-body').animate({scrollLeft: scrollStep+20}, 300).animate({scrollLeft: scrollStep}, 400);
   			initTooltip();
       	 }
     });	
</script>







<!-- OVERLAYER -->

<div class="modal fade" id="layerSepa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="myModalLabel">Tempi di attivazione ExtraPrelievo</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">

	<!-- ## NUOVA GRAFICA ## NUOVA GRAFICA ## NUOVA GRAFICA ## NUOVA GRAFICA ## -->
			
<!-- LINEA UNO -->

		<p class="epSubTitle"> <strong>GIORNI LAVORATIVI </strong></p>
		
		<hr class="hrUno">
		<section>
			<h3 class="epSemiB">Se richiedi l'attivazione entro le ore 21:30</h3>
		
			<div class="epContainerBox">
				
				<div class="epBoxL">
					<span class="epWatchL">
						<i class="icon icon-19 epWatchIcon epColorWithe"></i>
					</span>
					<span class="epContainerTextWatchL">
						<p class="epTextWatchL">
							<strong>Richiesta</strong>
							<br/>alle ore 19:00 di marted&igrave;
						</p>
					</span>
				</div>

				<div class="epBoxC" >
					<i class="icon icon-bg_arrow_right epIconC"></i>
				</div>

				<div class="epBoxR">
					<span class="epArrowIconContainer">
						<i class="icon  icon-arrow_bottom_box epArrowIcon"></i>
					</span>
					<span class="epWatchR">
						<i class="icon icon-ore_10 epWatchIcon"></i >
					</span>
					<span class="epContainerTextWatchR">
						<p class="epTextWatchR">
							<strong>Attivato</strong>
							<br/>alle ore 10:00 di mercoled&igrave;
						</p>						
					</span>

				</div>

			</div>
		
			<p class="pad_top_10">
				ExtraPrelievo sar&agrave; attivo dalle ore 10:00 del primo giorno lavorativo successivo
			</p>	
		</section>

<!-- END LINEA UNO-->

<!-- ## ## ## ## ## ## ## ## ## ## ## ## ## ## ## ## ## ## -->

<!-- LINEA DUE -->

		<section>
			<h3 class="epSemiB">Se richiedi l'attivazione dopo le ore 21:30</h3>
		
			<div class="epContainerBox">
				
				<div class="epBoxL">
					<span class="epWatchL">
						<i class="icon icon-ore_21_35 epWatchIcon epColorWithe"></i>
					</span>
					<span class="epContainerTextWatchL">
						<p class="epTextWatchL">
							<strong>Richiesta</strong>
							<br/>alle ore 21:35 di marted&igrave;
						</p>
					</span>
				</div>

				<div class="epBoxC" >
					<i class="icon icon-bg_arrow_right epIconC"></i>
				</div>

				<div class="epBoxR">
					<span class="epArrowIconContainer">
						<i class="icon icon-arrow_bottom_box epArrowIcon"></i>
					</span>
					<span class="epWatchR">
						<i class="icon icon-ore_10 epWatchIcon" ></i >
					</span>
					<span class="epContainerTextWatchR">
						<p class="epTextWatchR">
							<strong>Attivato</strong>
							<br/>alle ore 10:00 di gioved&igrave;
						</p>						
					</span>
				</div>

			</div>
		
			<p class="pad_top_10">
				ExtraPrelievo sar&agrave; attivo dalle ore 10:00 del secondo giorno lavorativo successivo
			</p>
				<hr class="hrDue"/>
		</section>	

<!-- END LINEA DUE-->
		
<!-- ## ## ## ## ## ## ## ## ## ## ## ## ## ## ## ## ## ## -->

<!-- LINEA TRE -->
		
			<p class="epSubTitle"> <strong>GIORNI PREFESTIVI </strong></p>
		
		<hr class="hrUno">

		<section>
			<h3 class="epSemiB">Se richiedi l'attivazione in giorni prefestivi</h3>
		
			<div class="epContainerBox">
				
				<div class="epBoxL">
					<span class="epWatchL">
						<i class="icon icon-19 epWatchIcon epColorWithe"></i>
					</span>
					<span class="epContainerTextWatchL">
						<p class="epTextWatchL">
							<strong>Richiesta</strong>
							<br/>alle ore 19:00 di sabato
						</p>
					</span>
				</div>

				<div class="epBoxC" >
					<i class="icon icon-bg_arrow_right epIconC"></i>
				</div>

				<div class="epBoxR">
					<span class="epArrowIconContainer">
						<i class="icon icon-arrow_bottom_box epArrowIcon"></i>
					</span>
					<span class="epWatchR">
						<i class="icon icon-ore_10 epWatchIcon" ></i >
					</span>
					<span class="epContainerTextWatchR">
						<p class="epTextWatchR">
							<strong>Attivato</strong>
							<br/>alle ore 10:00 di marted&igrave;
						</p>						
					</span>
				</div>

			</div>
		
				<hr class="hrDue marginTopMedium"/>


<h4>
	Scadenza
</h4>
<p>
	ExtraPrelievo scade automaticamente al termine del secondo giorno lavorativo successivo alla richiesta.
</p>

<h4>
	Importante
</h4>
<p>
	Quando richiedi ExtraPrelievo, il sistema calcoler&agrave; automaticamente data e orario di attivazione/disattivazione, che saranno indicati nelle pagine del sito.
</p>
</section>



<!-- END LINEA TRE -->





		

						
	<!-- ## END NUOVA GRAFICA ## END NUOVA GRAFICA ##END NUOVA GRAFICA ##  -->





						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- END OVERLAYER -->
<!-- Richiesta -->
<h2>Gestione prelievo Cardless</h2>
<div class="navfrontPage outerTab">
	<div class="innerTab">
		<ul class="newLabel">
			<li class="on"><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_prel_cardless_richiesta.php&responsive=y&liv0=1&liv1=2&liv2=3&liv3=1">Richiesta</a></li>
			<li class=""><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_prel_cardless_massimali.php&responsive=y&liv0=1&liv1=2&liv2=3&liv3=1">Massimali</a></li>
			<li class=""><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_prel_cardless_elenco.php&responsive=y&liv0=1&liv1=2&liv2=3&liv3=1">Elenco</a></li>
			<li class=""><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_prel_cardless_disattivazione.php&responsive=y&liv0=1&liv1=2&liv2=3&liv3=1">Disattivazione</a></li>
		</ul>
	</div>
	<div class="separator" style="min-width: 603px;"></div>
</div>
<!-- Blocco dei contenuti -->
<div class="tabindent">
	
	<!--Esempio errore -->
	<section class="boxesitoWrap">
		<div class="boxesito negativo">
			<div class="text">
				<p>Ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p>
			</div>
		</div>
	</section>
	<!-- Fine esempio errore -->

	<section>
		<div class="tithelp">
		    <h4>Inserisci i dati</h4>
		</div>
		<div class="formGenerico borderFormRounded">
			<div class="form-group">
		        <div class="row">
		            <div class="col-sm-6">
		                <label class="control-label">Seleziona il conto corrente di addebito</label>
		               	<select class="form-control">
	                      <option value="  CC 01077 0000049477 EUR">&nbsp; CC 01077 0000049477 EUR</option>
	                      <option value="  CC 01077 0000049488 EUR">&nbsp; CC 01077 0000049488 EUR</option>
	                    </select>
		            </div>
		            <div class="col-sm-6">
		                <label class="control-label">Saldo disponibile</label>
		          		 <span class="output">1.200,00 &euro;</span>
		            </div>
		        </div>
		    </div>
		    <div class="form-group">
		        <div class="row">
		            <div class="col-sm-6">
		                 <label class="control-label">Residuo mensile</label>
		          		 <span class="output">600,00 &euro;</span>		               
		            </div>
		            <div class="col-sm-6">
		                 <label class="control-label">Residuo giornaliero</label>
		          		 <span class="output">600,00 &euro;</span>
		            </div>
		        </div>
		    </div>
		    <br class="clear">
		    <hr>
		      <div class="form-group">
		        <div class="row">
		            <div class="col-sm-6">
		                <label class="control-label">Importo da prelevare</label>
	          			<select class="form-control" id="selectimporto" onchange="">
                      		<option value="100" selected>100 &euro;</option>
                     	 	<option value="200">200 &euro;</option>
                     	  	<option value="300">300 &euro;</option>
                     	   	<option value="400">400 &euro;</option>
                     	    <option value="500">500 &euro;</option>
                     	</select>		               
		            </div>
		        </div>
		    </div>
		</div>
		
		<!-- STEPPER -->
		<script type="text/javascript">
			// Simulazione per interazione

			$(function(){

				// Attivazione "prosegui"
				$("#selectimporto").change(function(){
					$('#btnprosegui').removeClass('btn-disabled')
				});


				// Esempio di "prosegui"
				$('#btnprosegui').click(function(){
					if(!$(this).hasClass("btn-disabled")) {
						// Vai al link "successivo"
						location.href="http://libreriewebank.webank.local/connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_prel_cardless_richiesta_step_2.php&responsive=y&liv0=1&liv1=2&liv2=3&liv3=1&fdeb=true#";
					}
				});


			})


		</script>

		<div class="form-group btnWrapper">
			<div class="stepBtn">Step <strong> 1 </strong> di 2</div>
			<div class="btn-align-right">
				<a type="button" class="btn btn-primary btn-disabled" id="btnprosegui">prosegui</a>
			</div>
			<br class="clear">
		</div>

		<!-- FINE STEPPER -->


	</section>
</div>
<!-- Fine blocco dei contenuti -->


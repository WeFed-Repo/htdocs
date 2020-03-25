<!-- Richiesta -->
<h2>Gestione prelievo Cardless</h2>
<div class="navfrontPage outerTab">
	<div class="innerTab">
		<ul class="newLabel">
			<li class="on"><a href="#">Richiesta</a></li>
			<li class=""><a href="#">Massimali</a></li>
			<li class=""><a href="#">Elenco</a></li>
			<li class=""><a href="#">Disattivazione</a></li>
		</ul>
	</div>
	<div class="separator" style="min-width: 603px;"></div>
</div>
<!-- Blocco dei contenuti -->
<div class="tabindent">
	<h3>Richiedi un prelievo Cardless</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi atque non odio doloribus earum id dicta laudantium possimus praesentium consequuntur itaque et illo, obcaecati, quo placeat rerum ducimus distinctio veritatis!
	<section>
		<div class="tithelp">
		    <h4>Riepilogo prelievo</h4>
		</div>
		<div class="formGenerico borderFormRounded">
			<div class="form-group">
		        <div class="row">
		            <div class="col-sm-4">
		                <label class="control-label">Conto corrente di addebito</label>
		            	<span class="output">CC 01077 0000049477 EUR</span>
	                </div>
		            <div class="col-sm-4">
		                <label class="control-label">Saldo disponibile</label>
		          		 <span class="output">1.200,00 &euro;</span>
		            </div>
		              <div class="col-sm-4">
		                <label class="control-label">Importo da prelevare</label>
		          		 <span class="output">200,00 &euro;</span>
		            </div>
		        </div>
		    </div>
		    <!-- ESEMPIO BOX AUTORIZZAZIONE (ES: PIN 2) -->
 		    <div id="boxauth" style="display:none">
				<div class="row">
					<div class="col-xs-12">
						<div class="formGenerico bgPin32 borderFormRounded" role="form">
							    <div class="form-group noMarginBottom">
							        <div class="row">           
							            <div class="pincode">           
							                    <div class="col-sm-8 pintxt">
							                        <p class="pin_testo">Inserisci la <strong class="negativo">PRIMA</strong> e <strong class="negativo">TERZA</strong> cifra del codice <strong class="negativo">12</strong> della tua <strong>Carta Servizi Telematici</strong></p>
							                    </div>
							                    <div class="col-sm-4 paddform">                     
							                        <div class="form-inline">
							                            <div class="input-group margBottSmall">                
							                                <input type="number" class="form-control" maxlength="1">                           
							                                <span>*</span>                     
							                                <input type="number" class="form-control" maxlength="1"> 
							                                <span>*</span>
							                                <div class="clearfix"></div>         
							                            </div>
							                        </div>                      
							                        <div class="form-inline" style="text-align:center">
							                            <div class="input-group"> 
							                                <span class="note">1</span>
							                                <span class="note">2</span>
							                                <span class="note">3</span>
							                                <span class="note">4</span>   
							                                <div class="clearfix"></div>  
							                            </div>     
							                        </div>
							                    </div>  
							                    <div class="clearfix"></div>         
							                </div>
							                     
							        </div>
							    </div>  
							</div>
					</div>
				</div>
			</div>
			<!-- FINE BOX AUTORIZZAZIONE -->

		</div>
		
		<!-- STEPPER -->
		<script type="text/javascript">

			// Simulazione per interazione
			$(function(){

				// Esempio di "esegui prelievo"
				$('#btnesegui').click(function(){
				
					// Attiva il box di conferma con la raccolta del codice ecc...
					$("#boxauth").show();
					$("#btnesegui").hide();
					$("#btnconferma").show();

				});


			});

		</script>

		<div class="form-group btnWrapper">
			<div class="stepBtn">Step <strong>2</strong> di 2</div>
			<div class="btn-align-right">
				<a type="button" class="btn btn-primary" id="btnesegui">esegui prelievo</a>
				<a type="button" class="btn btn-primary" id="btnconferma" style="display:none" href="http://libreriewebank.webank.local/connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_prel_cardless_in_corso.php&responsive=y&liv0=1&liv1=2&liv2=3&liv3=1&fdeb=true#">conferma</a>
			</div>
			<br class="clear">
		</div>

		<!-- FINE STEPPER -->


	</section>
</div>
<!-- Fine blocco dei contenuti -->


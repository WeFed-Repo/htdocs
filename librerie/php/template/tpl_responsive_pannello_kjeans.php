<h2>Carta Kjeans</h2>
<div class="navContFirstLev outerTab">
	<div class="innerTab">
		<ul class="tabmedium">
			<!--<li><a href="connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_attivazione_kjeans.php&liv0=2&liv1=3&liv2=1&liv3=0&responsive=y&fdeb=<?php print $fdeb;?>">attivazione</a></li>-->
			<li><a href="connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_ricariche_kjeans.php&liv0=2&liv1=2&liv2=1&liv3=0&responsive=y">ricarica</a></li>
			<li><a href="connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_saldo_kjeans.php&liv0=2&liv1=2&liv2=1&liv3=0&responsive=y">saldo e movimenti</a></li>
			<li><a href="connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_rimborso_kjeans.php&liv0=2&liv1=2&liv2=1&liv3=0&responsive=y">rimborso</a></li>
			<li><a href="connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_stato_pratica_kjeans.php&liv0=2&liv1=2&liv2=1&liv3=0&responsive=y">stato pratica</a></li>
			<li class="on"><a href="connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_pannello_kjeans.php&liv0=2&liv1=2&liv2=1&liv3=0&responsive=y">Pannello di controllo</a></li>
		</ul>
	</div>
	<div class="separator"></div>

	<div class="panel-nofill loading" id="pannelloconf">
		<script type="text/javascript" src="/wscmn/js/ui.datepicker-it.js"></script>

		<script type="text/javascript"> 

			// Variabili della pagina 
			var fattoModifiche = false;

			// Funzione per caricamento dei dati dinamici rispetto alla carta selezionata 
			var dataRefresh = function () {

				// Inizializzazione slider
				$("#sliderMensile").sliderPlus({
					max: 3000,
					min: 200,
					step: 50,
					value:1500,
					spinners: true,
					change: function(){
							fattoModifiche = true;
							$("#btnProseguiLimiti").removeClass("btn-disabled")
					}
				});
				// Inizializzazione slider
				$("#sliderNegFis").sliderPlus({
					max: 3000,
					min: 1000,
					step: 50,
					value:1500,
					spinners: true,
					change: function(){
							fattoModifiche = true;
							$("#btnProseguiLimiti").removeClass("btn-disabled")
					}
				});
				// Inizializzazione slider
				$("#sliderInternet").sliderPlus({
					max: 1500,
					min: 200,
					step: 50,
					value:1000,
					spinners: true,
					change: function(){
							fattoModifiche = true;
							$("#btnProseguiLimiti").removeClass("btn-disabled")
					}
				});
				// Inizializzazione slider
				$("#sliderATM").sliderPlus({
					max:2000,
					min: 500,
					step: 50,
					value:1000,
					spinners: true,
					change: function(){
							fattoModifiche = true;
							$("#btnProseguiLimiti").removeClass("btn-disabled")
					}
				});
				/* Esempio errore */
				$("#btnProseguiLimiti").click(function(){
					if (!$(this).hasClass("btn-disabled")) {

						/* Inserisce l'errore */
						$("#collapseLimitiErrori").show();

						/* Scrolla fino all'errore */
						 $('html, body').animate({
					        scrollTop: $("#modificaLimiti").offset().top
					    });

					}
				});

				// Chiusura della modale di default "annulla"
				$("#btAnnullaNo").click(function(){
					$("#layerModifiche").modal("hide");

				});

				
				/* Pulsante Tre stati + inizializzazione di default */
				var websafeAbilita = $('#websafeAbilita').buttonGroup({    	
					    	change: function (e, value) {
					    		fattoModifiche = true;
					    		
					    		// Nasconde tutti i contenuti e disabilita il pulsante "conferma" che verrà poi abilitato in "corso d'opera"
					    		$("#btnProseguiWebsafe").addClass("btn-disabled");
					    		$(".webSafeSel").hide();
					    		/* Mostra un contenitore diverso a seconda della selezione */
					    		switch (value) {
					    			
					    			// Caso "abilita"
					    			case "1":
					    				$("#websafeAbilitato").show();
					    				$("#btnProseguiWebsafe").removeClass("btn-disabled");

					    			break;

					    			// Caso "disabilita"
					    			case "2":
					    				// Mostra il messaggio
					    				$("#websafeDisabilita").show();
					    				$("#btnProseguiWebsafe").removeClass("btn-disabled");

					    			break;

									// Caso "personalizza"
					    			case "3":

					    				// Se la selezione e' coerente (aggiungere i controlli necessari su date e/o altro) abilita il pulsante
										$("#websafePersonalizza").show();

					    			break;

					    		}

					    		
					    	}
					    });
					    websafeAbilita.buttonGroup("setValue", "1");

				/* Inizializzazione dei datepicker */
				/* DAL */
				$("#dataDaWs").mask("99/99/9999");
			    $("#dataDaWs").datepicker({
			        minDate: 1,
			        showOtherMonths: true,
			        showOn: "button",
			        prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
			        nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
			        buttonImage: "/img/ret/pixel_trasp.gif",
			        buttonImageOnly: true,
			        beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
			        onClose: function() {
			            $('#datePickerWrapper').modal('hide');
			        }
			    })
			    appendDatePickerIcon('dataDaWs');

			    /* AL */
				$("#dataAWs").mask("99/99/9999");
			    $("#dataAWs").datepicker({
			        minDate: 1,
			        showOtherMonths: true,
			        showOn: "button",
			        prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
			        nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
			        buttonImage: "/img/ret/pixel_trasp.gif",
			        buttonImageOnly: true,
			        beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
			        onClose: function() {
			            $('#datePickerWrapper').modal('hide');
			        }
			    })
			    appendDatePickerIcon('dataAWs');

				$("#pannelloconf").removeClass("loading");

			}

			// Esempio sblocco e inizializzazione
			$(function(){

				setTimeout(dataRefresh,500);
				
				/* LIMITI */
				// Inizializzazione bottoni "modifica" e "annulla"
				$("#modificaLimitiBtn").click(function(){$("#modificaLimiti").show(); fattoModifiche = false; $("#modificaLimitiBtnWrap").hide()})
				$("#annullaLimitiBtn").click(function(){
					if (fattoModifiche) {
						$("#layerModifiche").modal("show");
						$("#btAnnullaSi").unbind().click(function(){
							$("#modificaLimiti").hide(); 
							$("#modificaLimitiBtnWrap").show()
							$("#layerModifiche").modal("hide");
						});

					}
					else
					{
						$("#modificaLimiti").hide(); $("#modificaLimitiBtnWrap").show()
					}
				});	
				
				/* WEBSAFE */
				// Inizializzazione bottoni "modifica"  e "annulla"
				$("#modificaWebsafeBtn").click(function(){$("#modificaWebsafe").show(); fattoModifiche = false; $("#modificaWebsafeBtnWrap").hide()});
				$("#annullaWebsafeBtn").click(function(){

					if (fattoModifiche) {
						$("#layerModifiche").modal("show");
						$("#btAnnullaSi").unbind().click(function(){
							$("#modificaWebsafe").hide(); $("#modificaWebsafeBtnWrap").show();
							$("#layerModifiche").modal("hide");
						});
					}
					else
					{
						$("#modificaWebsafe").hide(); $("#modificaWebsafeBtnWrap").show()
					}
				})

				
				/* SUl "change" dei vari campi abilita il pulsante "modifica" */
				$("#numWS, #oraWS, #importoWS, #dataDaWs, #dataAWs").on("click change",function(){
					fattoModifiche = true;
				  	$("#btnProseguiWebsafe").removeClass("btn-disabled");
				});

				/* CAMBIO PIN*/
				// Inizializzazione bottoni "modifica" e "annulla"
				$("#modificaPinBtn").click(function(){$("#modificaPin").show(); fattoModifiche = false; $("#modificaPinBtnWrap").hide()})
				$("#annullaPinBtn").click(function(){


					if (fattoModifiche) {
						$("#layerModifiche").modal("show");
						$("#btAnnullaSi").unbind().click(function(){
							$("#modificaPin").hide(); $("#modificaPinBtnWrap").show()
							$("#layerModifiche").modal("hide");
						});
					}
					else
					{
						$("#modificaPin").hide(); $("#modificaPinBtnWrap").show()
					}

				})


				// Esempio check errore su radio button
				$("#btnProseguiWebsafe").click(function(){
					if(!$(this).hasClass("btn-disabled")) {
						setHasError($("input[name=abilitazioni]:checked"),"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, esse.")
					}
				});


				// Pin
				$("#pinVecchio, #pinNuovo, #pinRipeti").on("keyup",function(){
					// Esempio di controllo incrociato su pie' campi
					if($("#pinVecchio").val().length>0 && $("#pinNuovo").val().length>0 && $("#pinRipeti").val().length>0) {
						$("#btnProseguiPin").removeClass("btn-disabled");
					}
					else {
						$("#btnProseguiPin").addClass("btn-disabled");
					}
					 
				});

				// Esempio di esito (positivo) PIN
				$("#btnProseguiPin").click(function(){

					// Assembla l'esito (e' possibile anche assemblare i vari nodi del dom) 
					var esitoPin = '<div class="boxesito positivo"><div class="text"><div class="row"><div class="col-xs-12"><p>Cambio pin Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, cum.</p></div></div></div>'

					if (typeof modalCP == "undefined") {}
					// Crea la modale 
					modalCP =  getModal({
				        id:"cambiaPinModale",
				        titolo:"Cambio pin",
				        body: $("<div>").attr("id","cambiaPinEsito")
				        });
					$("#cambiaPinEsito").html(esitoPin);
					modalCP.modal("show");
				});


			});

			



			function changeRadio(option){
				// Nasconde tutti
				$('#numRow, #importoRow, #dateRow, #oreRow').hide();
				

				// Disabilita il pulsante
				$("#btnProseguiWebsafe").addClass("btn-disabled");	
					
				// Rimuove gli errori
				resetHasErrors("#websafePersonalizza");

				if(option == 'numWS') {
				   $('#numRow').show();
				   }
				   if(option == 'impWS') {
				   $('#importoRow').show();
				   }
				   if(option == 'dateWS') {
				   $('#dateRow').show();
				   }
				   if(option == 'orelWS') {
				   $('#oreRow').show();
				   }
				   $("#btnProseguiWS").removeClass("btn-disabled");
			   }
			</script>



			<!-- SELEZIONA CARTA / INTRODUZIONE-->
			<section>
			   <h4>Lorem ipsum</h4>
			   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo delectus voluptates id vitae commodi ipsa illum ducimus. Provident, odit, dolorem.</p>
			   <div class="formGenerico borderFormRounded">
			      <div class="form-group">
			         <div class="row">
			         	<div class="col-sm-6">
			               <label class="control-label">Seleziona la tua carta Kje@ns</label>
			               <div class="form-inline">
			                  <div class="input-group" id="idCarta" name ="idCarta">
			                  <select class="form-control">
			                  		<option selected val="000001">Kje@ns - **** **** *223</option>
									<option val="00002">Kje@ns - **** **** *226</option>
									<option val="00003">Kje@ns - **** **** *227</option>
									<option val="00004">Kje@ns - **** **** *228</option>
			                  </select>

							  <!-- Qualora vi fosse una sola carta è possibile utilizzare un campo hidden cn lo stesso nome o id -->

			                  </div>
			               </div>
			            </div>
			            <div class="col-sm-6">
			               <label class="control-label">Intestato a:</label>
			               <div class="form-inline">
			                  <div class="input-group" id="intestatario">
			                  	<span class="output">Mario Giuseppe Rossellini</input>
			                  </div>
			               </div>
			            </div>
			            
			       	</div>
			      </div>
			   </div>
			</section>

			<!-- Richiesta di conferma "generica" per annullamento -->

			<div class="modal fade" id="layerModifiche" tabindex="-1" role="dialog" aria-labelledby="layerModificheLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
							<h2 class="modal-title" id="layerModificheLabel">Attenzione</h2>
						</div>
						<div class="modal-body">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12">
										<p>Se abbandoni la pagina le modifiche non salvate andranno perse.</p>
										<p>Vuoi abbandonare?</p>
										<!-- Pulsantiera -->
										<div class="form-group btnWrapper">
   									    	<div class="btn-align-right">
										        
										        <a type="button" class="btn btn-default" id="btAnnullaNo">No</a>
										        <a type="button" id="btAnnullaSi" class="btn btn-primary">S&igrave;</a>
										    </div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<!-- Pannello multiform -->

			<section>
				<div class="borderFormRounded multiform-panel-wrap" id="mfpanel">
				  
				  <!-- Limiti di utilizzo -->
				  <div class="multiform-panel">
				  	
					<!-- MODALE LIMITI DI UTILIZZO -->
					<div class="modal fade" id="layerLimiti" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
									<h2 class="modal-title" id="myModalLabel">Limiti di utilizzo</h2>
								</div>
								<div class="modal-body">
									<div class="container-fluid">
										<div class="row">
											<div class="col-xs-12">
												<h3>Lorem ipsum</h3>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
													debitis voluptas autem dolore ipsam odit iusto voluptate ducimus,
													quis ratione ipsa sunt asperiores eum, esse animi magni sint deserunt vero?</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- FINE MODALE -->

				  	<div class="multiform-panel-header">
						<h4>Limiti di utilizzo</h4>
						<a data-toggle="modal" data-target="#layerLimiti" class="no-underline btn-icon"><i class="icon icon-info_fill icon-2x"></i></a>
				    </div>
				    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam officia nam iusto, suscipit ab dolorum.</p>
				    <div class="formGenerico">
					    <div class="form-group">
							<!--RIGA DIVISA IN QUATTRO CAMPI -->
							<div class="row">
							 	<div class="col-sm-3 col-xs-12">	
									<label class="control-label-output">Complesso mensile</label>
									<span class="output">1.500 &euro;</span>
								</div>
								<div class="col-sm-3 col-xs-12">	
									<label class="control-label-output">Giornaliero negozi fisici</label>
									<span class="output">1.400 &euro;</span>
								</div>	
								<div class="col-sm-3 col-xs-12">	
									<label class="control-label-output">Complesso internet</label>
									<span class="output">1.500 &euro;</span>
								</div>
								<div class="col-sm-3 col-xs-12">	
									<label class="control-label-output">Complesso per prelievi ATM</label>
									<span class="output">1.600 &euro;</span>
								</div>				
							</div>
						</div>
					</div>
				    <!-- Pulsante modifica -->
				    <div class="form-group btnWrapper" id="modificaLimitiBtnWrap">
		                <div class="btn-align-right">
		                    <a type="button" class="btn btn-primary" id="modificaLimitiBtn" title="Modifica">Modifica</a>
		                </div>
		                <br class="clear">
		            </div>
		            <!-- / pulsante modifica -->
				    <div id="modificaLimiti" style="display:none">
				    		<hr>
					        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, in ex ipsum ut aperiam quis impedit, blanditiis error praesentium voluptatibus.</p> 
							<!-- ERRORE -->
							<section class="boxesitoWrap" id="collapseLimitiErrori" style="display:none">
								<div class="boxesito negativo">
									<div class="text">
										<h4>Attenzione</h4>
										<ul>
											<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, illum.</li>
											<li>Folor sit amet, consectetur adipisicing elit. Similique, illum.</li>
											<li>Ipsum dolor sit amet, consectetur adipisicing elit. Similique, illum.</li>
										</ul>
									</div>
								</div>
							</section>
							<!-- FINE ERRORE -->

							<form class="formGenerico preventivatore" role="form" method="post" action="GestioneKjeans.action">
						      <!-- Valori da implementare in caso di modifica ai massimali -->
						      <!-- complessivo mensile -->
						      <input type="hidden" name="massimaleTotMensile" id="massimaleTotMensile">
						      <!-- giornaliero negozi fisici -->
						      <input type="hidden" name="massimaleTotGiornalieroPos" id="massimaleTotGiornalieroPos">
						      <!-- giornaliero internet -->
						      <input type="hidden" name="massimaleTotGiornalieroWeb" id="massimaleTotGiornalieroWeb">
						      <!-- giornaliero per prelievi ATM -->
						      <input type="hidden" name="massimaleTotGiornalieroAtm" id="massimaleTotGiornalieroAtm">
						      <div class="row">
						         <div class="col-xs-12">
						            <div class="form-group">
						               <label class="control-label">Complesso mensile</label>
						               <div id="sliderMensile" class="slider-box sliderWithTicks sliderNoMidTicks">
						                  <div class="slider-wrap">
						                     <div class="slider-trail trail-bg">
						                        <div class="ui-slider-handle">
						                           <div class="sliderText" id="massimaleTotMensileMod"></div>
						                        </div>
						                     </div>
						                     <div class="sliderTicks"></div>
						                  </div>
						               </div>
						               <select class="form-control slider-alt"></select>
						            </div>
						         </div>
						    </div>
						    <div class="row">
						         <div class="col-xs-12">
						            <div class="form-group">
						               <label class="control-label">Giornaliero negozi fisici</label>
						               <div id="sliderNegFis" class="slider-box sliderWithTicks sliderNoMidTicks">
						                  <div class="slider-wrap">
						                     <div class="slider-trail trail-bg">
						                        <div class="ui-slider-handle">
						                           <div class="sliderText" id="massimaleTotGiornalieroPosMod"></div>
						                        </div>
						                     </div>
						                     <div class="sliderTicks"></div>
						                  </div>
						               </div>
						               <select class="form-control slider-alt"></select>
						            </div>
						         </div>
						      </div>
						      <div class="row">
						         <div class="col-xs-12">
						            <div class="form-group">
						               <label class="control-label">Complesso internet</label>
						               <div id="sliderInternet" class="slider-box sliderWithTicks sliderNoMidTicks">
						                  <div class="slider-wrap">
						                     <div class="slider-trail trail-bg">
						                        <div class="ui-slider-handle">
						                           <div class="sliderText" id="massimaleTotGiornalieroWebMod"></div>
						                        </div>
						                     </div>
						                     <div class="sliderTicks"></div>
						                  </div>
						               </div>
						               <select class="form-control slider-alt"></select>
						            </div>
						         </div>
						     </div>
						    <div class="row">
						         <div class="col-xs-12">
						            <div class="form-group">
						               <label class="control-label">Complesso per prelievi ATM</label>
						               <div id="sliderATM" class="slider-box sliderWithTicks sliderNoMidTicks">
						                  <div class="slider-wrap">
						                     <div class="slider-trail trail-bg">
						                        <div class="ui-slider-handle">
						                           <div class="sliderText" id="massimaleTotGiornalieroAtmMod"></div>
						                        </div>
						                     </div>
						                     <div class="sliderTicks"></div>
						                  </div>
						               </div>
						               <select class="form-control slider-alt"></select>
						            </div>
						         </div>
						      </div>
						      <div class="form-group">
						         <div class="row">
						         	<div class="col-xs-12">
							            <div class="btn-align-right">
							            	<a type="button" class="btn btn-default" id="annullaLimitiBtn" title="Annulla">Annulla</a>
							               <a type="button" class="btn btn-primary btn-disabled" title="Prosegui" id="btnProseguiLimiti">Prosegui</a>
							            </div>
							        </div>
						         </div>
						      </div>
						   </form>

					    
					    </div>
					</div>

					
					<div class="multiform-panel">
					  	<div class="multiform-panel-header">
							<h4>Websafe</h4>
							<a href="#1" class="no-underline btn-icon"><i class="icon icon-info_fill icon-2x"></i></a>
					    </div>
					    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad illo nobis mollitia. Ex nemo quae vero, rem, magnam numquam repudiandae. Labore laborum officia corporis sint voluptatem est, odio quidem libero.</p>
						<!-- output stato websafe -->
						<p id="webSafeStatus" class="strong">
							La carta risulta lorem ipsum dolor sit amet consectetur adipiscing.
						</strong>
						 <!-- Pulsante modifica -->
					    <div class="form-group btnWrapper" id="modificaWebsafeBtnWrap">
			                <div class="btn-align-right">
			                    <a type="button" class="btn btn-primary" id="modificaWebsafeBtn" title="Modifica">Modifica</a>
			                </div>
			                <br class="clear">
			            </div>
			            <!-- / pulsante modifica -->
						<!-- fine output stato websafe -->
						<div id="modificaWebsafe" style="display:none">
							<hr>
					           <form  class="formGenerico" action="">
								
								<!-- SELETTORE -->
							    <div class="form-group">
							        <div id="websafeAbilita" class="hidden-xs btn-group btn-group-justified" role="group" >
									  <a href="#!" type="button" class="btn" role="button" data-value="1">Abilita permanentemente</a>
									  <a href="#!" type="button" class="btn" role="button" data-value="2">Disabilita permanentemente</a>
									  <a href="#!" type="button" class="btn" role="button" data-value="3">Abilita personalizzato</a>
									</div>
							        <select name="websafe" class="visible-xs form-control btn-group-select"></select>
								</div>
								<!-- FINE SELETTORE -->
								
								<!-- Blocco WS abilitato -->
								<div id="websafeAbilitato" class="webSafeSel"  style="display:none">
									<p><strong>Abilitato</strong> ipsum dolor sit amet, consectetur adipisicing elit. Eligendi aut accusantium et amet rerum rem ipsa quod. Aspernatur voluptates non ratione officia dolor magni modi sint adipisci, deleniti est iste, ut praesentium hic et, minus, facilis accusantium reprehenderit nemo quia?</p>
								</div>
								<!-- Fine blocco WS abilitato -->


								<!-- Blocco WS disabilitato -->
								<div id="websafeDisabilita" class="webSafeSel"  style="display:none">
									<p><strong>Non abilitato</strong> ipsum dolor sit amet, consectetur adipisicing elit. Eligendi aut accusantium et amet rerum rem ipsa quod. Aspernatur voluptates non ratione officia dolor magni modi sint adipisci, deleniti est iste, ut praesentium hic et, minus, facilis accusantium reprehenderit nemo quia?</p>
								</div>
								<!-- Fine blocco WS disabilitato -->

								<!-- Blocco WS personalizzato -->
								<div id="websafePersonalizza" class="webSafeSel" style="display:none">
									
							            
							            <!-- Specifico periodo -->
							            <div class="form-group">
								            <div class="row">
												<div class="col-sm-6">
									               	<div class="radio inline">
									               		<label class="textWrapper" onclick="changeRadio('dateWS')">
										         			<input type="radio" name="abilitazioni" value="false">
										          			<span class="text">Abilita ad effettuare acquisti su internet in uno specifico periodo (Lorem ipsum dolor sit amet)</span>
										        		</label>
													</div>
												</div>	
								               <div class="col-sm-6" id="dateRow" style="display:none">
													<div class="form-group" >
											            <div class="row">
											               <div class="col-sm-6">
											                  <label class="control-label">Dal</label>
											                  <div class="input-group">
											                     <input class="form-control clear-x" type="text" name="" id="dataDaWs" placeholder="gg/mm/aaaa"/>
											                     <div class="input-group-addon date"><i class="icon icon-calendar"></i></div>
											                  </div>
											               </div>
											               <div class="col-sm-6">
											                  <label class="control-label">Al</label>
											                  <div class="input-group">
											                     <input class="form-control clear-x" type="text" name="" id="dataAWs" placeholder="gg/mm/aaaa"/>
											                     <div class="input-group-addon date"><i class="icon icon-calendar"></i></div>
											                  </div>
											               </div>
											            </div>
											         </div>
								               </div>
								            </div>
							           </div>
									
										<!-- Numero di ore -->

									 <div class="form-group">
							            <div class="row">
							            	 <div class="col-sm-6">
								               	<div class="radio inline">
								               		<label class="textWrapper" onclick="changeRadio('orelWS')">
									         			<input type="radio" name="abilitazioni" value="false">
									          			<span class="text">Abilita ad effettuare acquisti su internet per un numero di ore (Lorem ipsum dolor sit amet)</span>
									        		</label>
												</div>
											</div>	
							               <div class="col-sm-3" id="oreRow" style="display:none">
							               
							               	 <label class="control-label">Numero di ore</label>
							                  <input class="form-control clear-x" id="oraWS" name="" type="text">
							    
							               </div>

							            </div>
									</div>
										<!-- Importo massimo -->
									 <div class="form-group">
										<div class="row">
											<div class="col-sm-6">
												<div class="radio inline">
								               		<label class="textWrapper" onclick="changeRadio('impWS')">
									         			 <input type="radio" name="abilitazioni" value="false">
								                  	<span class="text">Abilita ad effettuare acquisti su internet per un importo massimo di euro a singola operazione (Lorem ipsum dolor sit)</span>
								                  </label>
												</div>
							               </div>
				 						   <div class="col-sm-3" id="importoRow"  style="display:none">
							               	 <label class="control-label">Importo</label>
							                  <!-- TO FIX IMPORTO -->
							                  <input class="form-control clear-x" id="importoWS" name="" type="text">
							               </div>
							            </div>
									</div>

										<!-- Numero di acquisti -->
									<div class="form-group">
											<div class="row">
											   <div class="col-sm-6">
									               	<div class="radio inline">
									               		<label class="textWrapper" onclick="changeRadio('numWS')">
										         			<input type="radio" name="abilitazioni" value="false">
										          			<span class="text">Abilita per un numero di acquisti (Lorem ipsum dolor sit)</span>
										        		</label>
													</div>
												</div>	
								               <div class="col-sm-3" id="numRow" style="display:none">
									                  <label class="control-label">Numero di acquisti</label>
									                  <!-- TO FIX IMPORTO -->
									                  <input class="form-control clear-x" id="numWS" name="" type="text">
								               </div>
								             </div>
								         </div>
									
								</div>
								<!-- Fine blocco WS personalizzato -->
								 
								<div class="form-group">
						            <div class="row">
						      	   		<div class="col-xs-12">
							               <div class="btn-align-right">
							               	<a type="button" class="btn btn-default" id="annullaWebsafeBtn" title="Annulla">Annulla</a>
							                  <a type="button" class="btn btn-primary btn-disabled" title="Conferma" id="btnProseguiWebsafe">Prosegui</a>
							               </div>
							            </div>
							        </div>
						         </div>
						      </form>

					       </div>
					    </div>

					<!-- cambio pin -->
					<div class="multiform-panel">
					  	<div class="multiform-panel-header">
							<h4>Cambio pin</h4>
							<a href="#1" class="no-underline btn-icon"><i class="icon icon-info_fill icon-2x"></i></a>
					    </div>
					    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad illo nobis mollitia. Ex nemo quae vero, rem, magnam numquam repudiandae. Labore laborum officia corporis sint voluptatem est, odio quidem libero.</p>
						 <!-- Pulsante modifica -->
					    <div class="form-group btnWrapper" id="modificaPinBtnWrap">
			                <div class="btn-align-right">
			                    <a type="button" class="btn btn-primary" id="modificaPinBtn">modifica</a>
			                </div>
			                <br class="clear">
			            </div>
			            <!-- / pulsante modifica -->
						<!-- fine output stato websafe -->
						<div id="modificaPin" style="display:none">
							<hr>
					           <form  class="formGenerico" action="">
						         <div class="form-group">
						            <div class="row">
						               <div class="col-sm-4">
						                 	<label class="control-label">Vecchio PIN</label>
                      						<input type="text" class="form-control clear-x" id="pinVecchio">
						               </div>
						                  <div class="col-sm-4">
						                 	<label class="control-label">Nuovo PIN</label>
                      						<input type="text" class="form-control clear-x" id="pinNuovo">
						               </div>
						                  <div class="col-sm-4">
						                 	<label class="control-label">Ripeti nuovo PIN</label>
                      						<input type="text" class="form-control clear-x" id="pinRipeti">
						               </div>
						            </div>
						         </div>
						          <div class="form-group">
						         <div class="row">
						         	<div class="col-xs-12">
							         	<div class="btn-align-right">
							            	<a type="button" class="btn btn-default" id="annullaPinBtn" title="Annulla">Annulla</a>
							               <a type="button" class="btn btn-primary btn-disabled" title="Prosegui" id="btnProseguiPin">Prosegui</a>
							            </div>
							        </div>
						         </div>
						      </div>
						      </form>

					       </div>
					    </div>


					</div>
				</div>

			</section>

	</div>
</div>		


	
	

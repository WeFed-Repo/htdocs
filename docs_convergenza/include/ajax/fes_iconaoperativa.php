<?php
if ($_GET["from"] == "wl") {
?>
<ul class="azioni">
	<li class="linkOn" onmouseout="azioneOut(this)" onmouseover="azioneOver(this);"><a href="http://libreriewebank.wefed.local/connect.php?page=strutt_priv.php&tpl=tpl_responsive_inv_acquisto.php&responsive=y&liv0=4&liv1=2&liv2=6&liv3=3" onclick="javascript:;" title="Compra"><span>Compra</span></a></li>
	<li class="linkOn" onmouseout="azioneOut(this)" onmouseover="azioneOver(this);"><a href="javascript:;" onclick="javascript:;" title="Vendi"><span>Vendi</span></a></li>
	<li class="linkOn" onmouseout="azioneOut(this)" onmouseover="azioneOver(this);"><a href="javascript:;" onclick="javascript:;" title="Switch"><span>Switch</span></a></li>
	<li class="linkOn" onmouseout="azioneOut(this)" onmouseover="azioneOver(this);"><a href="javascript:;" onclick="javascript:;" title="Alert"><span>Alert</span></a></li>
	<li class="linkOn" onmouseout="azioneOut(this)" onmouseover="azioneOver(this);"><a href="javascript:;" onclick="rimuoviDaWatchlist(this)" data-isin="FA<?php print rand(11111,99999);?>" title="Rimuovi da watchlist"><span>Rimuovi da watchlist</span></a></li>
</ul>
<?php
}
else
{
?>
<div class="bodySx">
	<div class="bodyDx fes">
		<div class="bodyCenter">
			<ul class="azioni">
				<li class="linkOn" onmouseout="azioneOut(this)" onmouseover="azioneOver(this);"><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_inv_acquisto.php&responsive=y&liv0=4&liv1=2&liv2=6&liv3=3" onclick="javascript:;" title="Compra"><span>Compra</span></a></li>
				<li class="linkOn" onmouseout="azioneOut(this)" onmouseover="azioneOver(this);"><a href="javascript:;" onclick="javascript:;" title="Vendi"><span>Vendi</span></a></li>
				<li class="linkOn" onmouseout="azioneOut(this)" onmouseover="azioneOver(this);"><a href="javascript:;" onclick="javascript:;" title="Switch"><span>Switch</span></a></li>
				<?php 

				if ($_GET["from"] == "alert") {
				?>
				<li class="linkOn" onmouseout="azioneOut(this)" onmouseover="azioneOver(this);"><a href="javascript:;" onclick="javascript:;" title="Rimuovi da Alert"><span>Rimuovi da Alert</span></a></li>
				<?php
				}
				else
				{ 
				?>
				<li class="linkOn" onmouseout="azioneOut(this)" onmouseover="azioneOver(this);"><a href="javascript:;" onclick="javascript:;" title="Alert"><span>Alert</span></a></li>
				<?php
				} 

				if ($_GET["from"] =="wl") {
				?>
				<li class="linkOn" onmouseout="azioneOut(this)" onmouseover="azioneOver(this);"><a href="javascript:;" onclick="javascript:;" title="Rimuovi da watchlist"><span>Rimuovi da watchlist</span></a></li>
				<?php 
				}
				else
				{
				?>
				

				<script type="text/javascript">

				var wlAggiungi = function() {
					
					$("#layerWl .modal-content").removeClass("loading");
					$("#wlSelect").show();
					$("#wlSelectEsito").hide();

					// Chiusura
					$("#icoOpeModal").modal("hide");

					// Apertura dell'overlayer di aggiunta
					$("body").prepend($("#layerWl").modal("show"));

				}

				// Inserisci il fondo (di cui qui arriva l'isin ma e' possibile prevedere altro) nella Watchlist scelta (guardare il "data" spedito alla chiamata) 
				var inserisciInWl = function (isin) {

					$("#layerWl .modal-content").addClass("loading");
					$.ajax({
						url :"/include/ajax/fes_wl_add.php",
						method: "POST",
						data: {
							isin: isin,
							watchlist: $("#watchlist").val()
						},
						dataType: "json",
						success: function(data) {
							$("#wlSelect").hide();
							$("#wlSelectEsito").show();
							$("#boxEsito").removeClass("positivo negativo")
							if(data.esito =="ok") {
								$("#boxEsito").addClass("positivo").find("p").html("Inserimento avvenuto con successo.")
							}
							else
							{
								$("#boxEsito").addClass("negativo").find("p").html("<strong>Si &egrave; verificato un errore durante l'inserimento:</strong><br>problema di Lorem ipsum dolor sit amet.")
							}
							$("#layerWl .modal-content").removeClass("loading");
						},
						error: function (err) {
							alert("Si sono verificati errori. Riprovare piu' tardi.");
							$("#layerWl").modal("hide");
						}
					})
			
				}

				</script>
				<!-- OVERLAY WATCHLIST -->
				<div class="modal fade" id="layerWl" tabindex="-1" role="dialog" aria-labelledby="layerWlLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h2 class="modal-title" id="layerWlLabel">Aggiungi a watchlist</h2>
							</div>
							<div class="modal-body">
								<div class="container-fluid">
									<div class="row">
										<div class="col-xs-12">
											<div id="wlSelect">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
											   	debitis voluptas autem dolore ipsam odit iusto voluptate ducimus</p>
											   
											   	<div class="form-group">
									                <div class="requiredField">
									                    <label class="control-label">Seleziona watchlist</label>
									                    <select class="form-control" id="watchlist">
									                        <option value="1" selected>Watchlist 1</option>
									                        <option value="2">Watchlist 2</option>
									                    </select>
									                </div>
									            </div>
												<div class="form-group btnWrapper">
									                <div class="btn-align-left">
									                    <a type="button" class="btn btn-default" data-dismiss="modal" >annulla</a>
									                </div>
									                <div class="btn-align-right">
									                    <a type="button" class="btn btn-primary" onclick="inserisciInWl('ISIN019238093218')">inserisci</a>
									                </div>
									                <br class="clear">
									            </div>

											</div>

											<div id="wlSelectEsito" style="display:none">
													<div class="boxesito" id="boxEsito">
														<div class="text">
															<div class="row">
																<div class="col-xs-12">
																	<p></p>
																</div>
															</div>
														</div>
													</div>

													<div class="form-group btnWrapper">
										                <div class="btn-align-right">
										                    <a type="button" class="btn btn-primary"  data-dismiss="modal">chiudi</a>
										                </div>
										                <br class="clear">
										            </div>
											</div>

										</div> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- FINE OVERLAY WATCHLIST -->
				<li class="linkOn" onmouseout="azioneOut(this)" onmouseover="azioneOver(this);"><a href="javascript:;" onclick="wlAggiungi();" title="Aggiungi a watchlist"><span>Aggiungi a watchlist</span></a></li>
				<?php 
				}
				?>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
</div>

<?php
}
?>

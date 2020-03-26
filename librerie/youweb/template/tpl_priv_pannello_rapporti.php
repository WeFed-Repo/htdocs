<div class="visible-print-block"> 
	<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage" />
	<div class="pull-right">10/04/2017</div>
</div>

<div class="riquadro clearfix">
	<div class="clearfix">
<style>
.imgSrv{float: none;}
</style>
		<h1>
			<div class="hidden-print hidden-xxs flag pannelloRapporti">&nbsp;</div>
			<span>Pannello rapporti</span>
		</h1>
		<div class="col-xs-12 hidden-xs hidden-print">
		</div>
	</div>
	
	<div class="section clearfix"> 
		<div class="row">
			<!-- INIZIO BOX GESTIONE RAPPORTI  -->
			<div class="col-sm-6">
				<div class="innerBoxWhite clearfix">
					<div>	
						<h1 class="boxTitle txt_center">
							Gestione Rapporti
						</h1>
						<div>
							<div class="clearfix" style="margin-top:20px">
								
								Il tuo YouWeb ti consente di gestire i rapporti a te intestati, cointestati o in delega. Riepiloghiamo di seguito la situazione in essere sul tuo profilo:
							</div>
							
							<!-- RAPPORTI NON ABILITATI -->
							<div style="height:28px; margin-bottom:3px;">
								Rapporti non abilitati ai canali online
								
									
										<div style="height:20px; float:right;margin-top:3px">
											<img src="/HT/fe/img/i_dettaglio_off.gif" style="width:15px" title="Nessun dettaglio" alt="Nessun dettaglio" />
										</div>
									
									
								
								<div style="height:20px; float:right">
									<span class="riquadroNumero">
										<b>0 </b>
									</span>
								</div>
							</div>
							
							<!-- RAPPORTI INFORMATIVI -->
							<div style="height:28px; margin-bottom:3px;">
								Rapporti solo INFORMATIVI
								<div style="float:right">
								
									
										<div style="height:20px; float:right;margin-top:3px">
											<img src="/HT/fe/img/i_dettaglio_off.gif" style="width:15px" title="Nessun dettaglio" alt="Nessun dettaglio" />
										</div>
									
									
								
									<div style="height:20px;float:right">
										<span class="riquadroNumero">
											<b>0</b>
										</span>
									</div>
								</div>
							</div>
							
							<!-- RAPPORTI DISPOSITIVI -->
							<div style="height:28px; margin-bottom:3px;">
								Rapporti DISPOSITIVI
								<div style="float:right">
			 						<div style="height:20px;float:left">
									<span class="riquadroNumero">
										<b>3</b>
									</span>
								</div>
								
									
									
										<div style="height:20px; float:right;margin-top:3px;cursor:pointer"><img src="/HT/fe/img/i_dettaglio.gif" id="vediDettaglioDispo" style="width:15px" title="Dettaglio" alt="Dettaglio" /></div>
									
								
								</div>
							</div>
							
							<!-- ALTRI RAPPORTI (Non modificabili) -->
							<div style="height:28px; margin-bottom:3px;">
								Altri rapporti (non modificabili)
								<div style="float:right">
			 						<div style="height:20px;float:left">
									<span class="riquadroNumero">
										<b>3</b>
									</span>
								</div>
								
									
									
										<div style="height:20px; float:right;margin-top:3px;cursor:pointer">
											<img src="/HT/fe/img/i_dettaglio.gif" id="vediDettaglioAltri" style="width:15px" title="Dettaglio" alt="Dettaglio" />
										</div>
									
								
								</div>
							</div>
						</div>
					</div>
					<input class="btn btn-innerBox"  type="button" name="" value="Modifica" onclick="goToModificaRapporti()">
				</div>
			</div> <!-- FINE BOX GESTIONE RAPPORTI  -->
			
			
			
			<!--  BOX POSTA PERSONALE  -->
			<div class="col-sm-6" >
				<div class="innerBoxWhite clearfix">
					<div>
						<h1 class="boxTitle txt_center">
							
							Basta Carta
						</h1>
						<div>
							<div class="clearfix" style="margin-top:20px">
								
								Questa sezione ti consente di gestire, per i rapporti collegati ai canali online, la ricezione di documenti in formato elettronico.<br/><br/>Riepiloghiamo di seguito la situazione in essere sul tuo profilo:
							</div>
						</div>
						
						<!-- CARTACEI -->
						<div style="height:28px; margin-bottom:3px;">
							Rapporti che ricevono il <b>cartaceo</b>.
							<div style="float:right">
								
									
										<div style="height:20px; float:right;margin-top:3px"><img src="/HT/fe/img/i_dettaglio_off.gif" style="width:15px" title="Nessun dettaglio" alt="Nessun dettaglio" /></div>
									
									
								
								<div style="height:20px;float:left">
									<span class="riquadroNumero">
										<b>0</b>
									</span>
								</div>
							</div>
						</div>
						
						<!-- NON CARTACEI -->
						<div style="height:28px; margin-bottom:3px;">
							Rapporti con i <b>documenti smaterializzati</b>
							<div style="float:right">
								
									
									
										<div style="height:20px; float:right;margin-top:3px;cursor:pointer">
											<img src="/HT/fe/img/i_dettaglio.gif" id="vediDettaglioDigitali" style="width:15px" title="Dettaglio" alt="Dettaglio" />
										</div>
									
								
								<div style="height:20px;float:left">
									<span class="riquadroNumero">
										<b>6</b>
									</span>
								</div>
							</div>
						</div>
					</div> 
					<input type="button" name="" value="Modifica" onclick="goToModificaPostaPersonale()" class="btn btn-innerBox ">
				</div>		 
			</div><!-- FINE BOX POSTA PERSONALE  -->

		</div>
		

			<!-- INIZIO TABELLA TIPO RAPPORTO -->
			<div class="col-xs-12">
				<div class="innerBoxWhite  clearfix inner">
				<hr class="hrSeparatore"/>
						<h1 class="boxTitle txt_center">
							
							Gestione Massimali
						</h1>
						<div class="col-xs-12 clear-padding padding-top10 padding-bottom10">
							Questa sezione riepiloga i massimali giornalieri e mensili per la disposizione bonifici sui vari rapporti collegati ai canali online e, ove possibile, ti consente di modificarli.
						</div>
						
						<!-- TABELLA MASSIMALI -->
						<div class="table-responsive tabSelezioneCarte">
							<table class="table table-striped dataTable no-footer">
								<colgroup>
									<col width="52%">
									<col width="17%">
									<col width="16%">
									<col width="15%">
								</colgroup>
								<thead>
									<tr class="hover">
										<th style="width: 0px;" class="oLeft">Rapporto</th>
										<th style="width: 0px;" class="oLeft">Filiale</th>
										<th class="clear-padding-leftImportant oRight" style="width: 0px;">Massimale giornaliero</th>
										<th style="width: 0px;" class="oRight">Massimale mensile</th>
									</tr>
								</thead>
									
										<tr>
											<td>
												Conto deposito n. 00000000 intestato a COGNOME NOME
											</td>
											<td>
												MILANO - 0000
											</td>
											<td style="text-align:right">
												500.000
											</td>
											<td style="text-align:right">
												500.000
											</td>
										</tr>
									
										<tr>
											<td>
												Conto corrente n. 00000000 intestato a COGNOME NOME
											</td>
											<td>
												MILANO - 0000
											</td>
											<td style="text-align:right">
												50.000
											</td>
											<td style="text-align:right">
												250.000
											</td>
										</tr>
									
							</table>
						</div>
						
						<!-- BOTTONE MODIFICA -->
						<div class="col-xs-12 clear-padding oRight margin-bottom5">
							
								
									<input type="button" name="" value="Modifica" onclick="goToModificaMassimali()" class="btn floatr">
								
								
							
							
						</div>
				</div>
			</div>
			
	</div>
	
	
	<!-- SEZIONE POP-UP -->
	
	<!-- POP-UP RAPPORTI INFORMATIVI -->
	<div id="inf">
		<div class="col-xs-12 clearfix">
			<div class="innerBoxSkyBlue inner margin10  clearfix">
				<div class="xs-col-12 clearfix">
					<h1 class="boxTitle txt_center">
						RAPPORTI INFORMATIVI
					</h1>
					<div class="form-group col-xs-12">
						<div class="table-responsive tabSelezioneCarte" style="display: block;">
							<table class="table table-striped dataTable no-footer">
								<thead>
									<tr class="hover">
										<th width="15%">Tipo Rapporto</th>
										<th width="10%">Numero</th>
										<th width="35%">Filiale</th>
										<th width="40%">Intestazione</th>
									</tr>
								</thead>
								
							</table>
						</div>
						<div class="pull-right margin-bottom20 margin-top10">
							<input type="button" id="closeInf" name="" class="btn" value="Chiudi">
							<input type="button" name="" value="Modifica" class="btn" onclick="goToModificaRapporti()">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- POP-UP RAPPORTI DISPOSITIVI -->
	<div id="dis">
		<div class="col-xs-12 clearfix">
			<div class="innerBoxSkyBlue inner margin10 w-auto clearfix">
				<div class="xs-col-12 clearfix">
					<h1 class="boxTitle txt_center">
						RAPPORTI DISPOSITIVI
					</h1>
					<div class="form-group col-xs-12">
						<div class="table-responsive tabSelezioneCarte" style="display: block;">
								<table class="table table-striped dataTable no-footer">
									<thead>
										<tr class="hover">
											<th width="20%">Tipo Rapporto</th>
											<th width="5%">Numero</th>
											<th width="35%">Filiale</th>
											<th width="40%">Intestazione</th>
										</tr>
									</thead>
									
										<tr>
											<td>
												YouCard
											</td>
											<td>
												*0000
											</td>
											<td style="text-align:right">
												
												MILANO - 0000
											</td>
											<td style="text-align:right">
												 COGNOME NOME
											</td>
										</tr>
									
										<tr>
											<td>
												Conto deposito
											</td>
											<td>
												00000000
											</td>
											<td style="text-align:right">
												
												MILANO - 0000
											</td>
											<td style="text-align:right">
												 COGNOME NOME
											</td>
										</tr>
									
										<tr>
											<td>
												Conto corrente
											</td>
											<td>
												00000000
											</td>
											<td style="text-align:right">
												
												MILANO - 0000
											</td>
											<td style="text-align:right">
												 COGNOME NOME
											</td>
										</tr>
									
								</table>
						</div>
						<div class="pull-right margin-bottom20 margin-top10">
							<input type="button" id="closeDis" name="" class="btn" value="Chiudi">
							<input type="button" name="" value="Modifica" class="btn" onclick="goToModificaRapporti()">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- POP-UP RAPPORTI NON ABILITATI/SGANCIATI -->
	<div id="sganciati">
		<div class="col-xs-12 clearfix">
			<div class="innerBoxSkyBlue inner margin10 w-auto clearfix">
				<div class="xs-col-12 clearfix">
					<h1 class="boxTitle txt_center">
						RAPPORTI NON ABILITATI
					</h1>
					<div class="form-group col-xs-12">
						<div class="table-responsive tabSelezioneCarte" style="display: block;">
								<table class="table table-striped dataTable no-footer">
									<thead>
										<tr class="hover">
											<th width="20%">Tipo Rapporto</th>
											<th width="5%">Numero</th>
											<th width="35%">Filiale</th>
											<th width="40%">Intestazione</th>
										</tr>
									</thead>
									
								</table>
						</div>
						<div class="pull-right margin-bottom20 margin-top10">
							<input type="button" name="" id="closeSganciati" class="btn" value="Chiudi">
							<input type="button" name="" value="Modifica" class="btn" onclick="goToModificaRapporti()">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- POP-UP ALTRI RAPPORTI -->
	<div id="altri">
		<?php virtual ("/template/dialogCont_tabella01.php") ;?>
	</div>

	<!-- POP-UP DOCUMENTI SMATERIALIZZATI -->
	<div id="bastaCarta">
		<?php virtual ("/template/dialogCont_tabella02.php") ;?>
	</div>
	
	<!-- POP-UP RAPPORTI CARTACEI -->
	<div id="carta">
		<?php virtual ("/template/dialogCont_tabella03.php") ;?>
	</div>
</div>

<script>
	$(document).ready(function(){
		var height = 0, width = 0;
		
		$('.innerBoxWhite').each(function(index){
			if(!$(this).hasClass('inner')){
				if($(this).height()>height){
					height = $(this).height() + 32;
				}
			}
		});
		$('.innerBoxWhite').each(function(){
			if(!$(this).hasClass('inner')){
					$(this).height(height);
			}
		});
	});

    function goToModificaRapporti(){
    	window.location.href = "/WEBHT/cc/pannelloRapportiModifica.do";
    }
    function goToModificaPostaPersonale(){
    	window.location.href = "/WEBHT/cc/pannelloRapportiModificaPosta.do";
    }
    function goToModificaMassimali(){
    	window.location.href = "/WEBHT/cc/pannelloRapportiModificaMassimali.do";
    }
	$(function() {
	    $( "#inf" ).dialog({
	      autoOpen: false,
	      width:600,
	      modal:true
	    });
		$('#vediDettaglioInfo').click(function(){
    		$( "#inf" ).dialog("open");
		})
		$('#closeInf').click(function(){
    		$( "#inf" ).dialog("close");
		})
    })
	$(function() {
	    $( "#dis" ).dialog({
	      autoOpen: false,
	      width:600,
	      modal:true
	    });
		$('#vediDettaglioDispo').click(function(){
    		$( "#dis" ).dialog("open");
		})
		$('#closeDis').click(function(){
    		$( "#dis" ).dialog("close");
		})
    })
	$(function() {
	    $( "#sganciati" ).dialog({
	      autoOpen: false,
	      width:600,
	      modal:true
	    });
		$('#vediDettaglioSgancio').click(function(){
    		$( "#sganciati" ).dialog("open");
		})
		$('#closeSganciati').click(function(){
    		$( "#sganciati" ).dialog("close");
		})
    })
    $(function() {
	    $( "#altri" ).dialog({
	      autoOpen: false,
	      width:600,
	      modal:true
	    });
		$('#vediDettaglioAltri').click(function(){
    		$( "#altri" ).dialog("open");
		})
		$('#closeAltri').click(function(){
    		$( "#altri" ).dialog("close");
		})
    })
   
	$(function() {
	    $( "#bastaCarta" ).dialog({
	      autoOpen: false,
	      width:600,
	      modal:true
		});
		$('#vediDettaglioDigitali').click(function(){
    		$( "#bastaCarta" ).dialog("open");
		})
		$('#closeBastacarta').click(function(){
    		$( "#bastaCarta" ).dialog("close");
		})
    })
    
	$(function() {
	    $( "#carta" ).dialog({
	      autoOpen: false,
	      width:600,
	      modal:true
	    });
		$('#vediDettaglioCartacei').click(function(){
    		$( "#carta" ).dialog("open");
			
		})
		$('#closeCarta').click(function(){
    		$( "#carta" ).dialog("close");
		})
    })
</script>
				
				
	<div class="visible-print-block"> 
		<img src="/HT/fe/img/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
		<div class="pull-right">
			  
			16/05/2017	
		</div>
	</div>
					
					
					
					



<div class="riquadro clearfix">
 





<style>
.imgSrv{
	float: none;
}
</style>


	<h1>			
		<div class="hidden-print hidden-xxs flag pannelloControlloAlert">&nbsp;</div>
		<span>Pannello Alert</span>
 	</h1>
	
		
			
		
		
		





<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: riepilogo allarmi&amp;pagCont=testo01')" class="general-help help-icon hidden-xs"><img src="/HT/fe/img/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>






<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header clearfix">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
			
		</div>
    </div>
  </div>
</div>



		
	
	




<div class="section clearfix">
			<h3 class="titleSection">
			










		
			Canali di ricezione allarmi
		
		
		

</h3>
	<div class="DettInf">
		<table class="table allarmi">
			<colgroup>
				<col width="30%" align="right">
				<col width="35%" align="right">
				<col width="35%" align="left">
			</colgroup>
			<thead>
				<tr>
					<th>Numero di telefono</th>
					<th>Indirizzo Email</th>
					<th>Dispositivi abilitati alle Notifiche</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="oCenter">
						<img src="/HT/fe/img/NNFFPhone.gif" title="Telefono" alt="Telefono">******1800</td>
					<td class="oCenter">
						<img src="/HT/fe/img/NNFFBusta.gif" title="Email" alt="Email">
						
							
								mauroluca.tallo@bancopopolare.it
							
							 
						
					</td>
					<td class="oLeft">
						
							
								
									<img src="/HT/fe/img/NNFFMobile.gif" height="15" width="20" title="Telefono" alt="Telefono"> Aifonseis <br>
								
									<img src="/HT/fe/img/NNFFMobile.gif" height="15" width="20" title="Telefono" alt="Telefono"> iPad di Stefano <br>
								
									<img src="/HT/fe/img/NNFFMobile.gif" height="15" width="20" title="Telefono" alt="Telefono"> Team?s Mac mini <br>
								
									<img src="/HT/fe/img/NNFFMobile.gif" height="15" width="20" title="Telefono" alt="Telefono"> iPhone di Stefano <br>
								
									<img src="/HT/fe/img/NNFFMobile.gif" height="15" width="20" title="Telefono" alt="Telefono"> Smartphone di  <br>
								
									<img src="/HT/fe/img/NNFFMobile.gif" height="15" width="20" title="Telefono" alt="Telefono"> SiPhone <br>
								
									<img src="/HT/fe/img/NNFFMobile.gif" height="15" width="20" title="Telefono" alt="Telefono"> Lynx?s Mac mini <br>
								
							
								
						
					</td>
				</tr>
			</tbody>
		</table>
	</div></div>


	
	
		
	



<div class="section clearfix">
			<h3 class="titleSection">
			










		
			Allarmi Predefiniti
		
		
		

</h3>
<div class="DettInf">
	<table class="table allarmi">
		<colgroup>
			<col width="79%">
			<col width="7%">
			<col width="7%">
			<col width="7%">
		</colgroup>
		<thead>
		<tr>
			<th>Descrizione del messaggio di allarme</th>
			<th style="text-align:center">Sms</th>
			<th style="text-align:center">E-mail</th>
			<th style="text-align:center">App</th>
		</tr>
		</thead>
		
		<tbody>
			<tr>
				<td>
					Il servizio di "Notifica di non eseguito" ti consente di ricevere un avviso tramite e-mail in caso di mancata esecuzione di un pagamento
				</td>
				<td></td>
				<td style="text-align:center">
					Auto
				</td>
				<td></td>
			</tr>
		</tbody>
	</table>
</div></div>
	
	
		
	


<style type="text/css">
	.alertStrong{
		font-weight: 600;
	}	
</style>



	<form id="formAllarmiBonifici" method="post" action="/WEBHT/sm/bonifici.do">

		
		
<div class="section clearfix">
	<h3 class="titleSection">
		 Info Bonifico
	</h3>

		

		<div class="DettInf">
				<script>
				$(function() {
				var widthDevice = (window.innerWidth > 0) ? window.innerWidth : screen.width;  
				
				function gestisciRowSpan(idTable){
					$(idTable).find('.cardbox-border:not(:first-child) label.col-xs-5 strong').each(function() {
						var htmlRowSpan = $(this).html(),
							thisRow  = $(this).closest('.row'),
							nextRowLabel = thisRow.next('.row').find('.col-xs-5 strong').html();
							if(htmlRowSpan == '&nbsp;') {
								$(this).html(nextRowLabel);
								thisRow.next('.row').hide();
							}
					})
				}
				function gestisciTitle(idTable){
				var rowTitle = $(idTable).find('.cardbox-border'); 
				rowTitle.each(function() {
				if($(this).find('input[type=image]').length>0) {
				$(this).addClass('title');
				$(this).find('.col-xs-5').hide();
				$(this).find('.col-xs-7').css('width','100%');
				}
				})
				}
				

				if (widthDevice<992) {

				$("#tableAllBonifico").cardBoxTable({   //deve diventare verticale già a 991px
					colTitleIdx: 5
				});

				$("#tableAllDossier").cardBoxTable({   //deve diventare verticale già a 991px
					colTitleIdx: 5
				});
				$("#tableAllIndici").cardBoxTable({   //deve diventare verticale già a 991px
					colTitleIdx: 5
				});
				$("#tableAllTitoli").cardBoxTable({   //deve diventare verticale già a 991px
					colTitleIdx: 6,
					defaultLabel: ['&nbsp;','&nbsp;','Descrizione del messaggio di allarme','Sms','E-mail']

				});
				$("#tableAllRicarica").cardBoxTable({   //deve diventare verticale già a 991px
					colTitleIdx: 6,
					show: function() {
						gestisciRowSpan('#allRicarica');
					}
				});
				$("#tableAllCarte").cardBoxTable({   //deve diventare verticale già a 991px
					colTitleIdx: 5,
					show: function() {
						gestisciRowSpan('#allCarte');
					}
				});
					$("#tableAllConto").cardBoxTable({   //deve diventare verticale già a 991px
					colTitleIdx: 6,
					show: function() {
					gestisciTitle('#allConto');
					}
				});
				
				}});
				

				</script>
				


		<div id="allBonifico">
		<table class="table allarmi" id="tableAllBonifico">
				<colgroup>
					<col width="12%">
					<col width="67%">
					<col width="7%">
					<col width="7%">
					<col width="7%">
				</colgroup>
				<thead>
					<tr>
						<th colspan="2">Descrizione del messaggio di allarme </th>
						<th style="text-align:center">Sms</th>
						<th style="text-align:center">E-mail</th>
						<th style="text-align:center">App</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<input type="image" name="modifica" src="/HT/fe/img/icon_edit.png" onclick="javascript:setFormParameters('formBonifici')" class="imgSrv" title="Modifica allarmi" alt="modifica">
							<input type="image" name="cancella" src="/HT/fe/img/icon_delete.png" onclick="javascript:setFormParameters('formBonifici')" class="imgSrv" title="Cancella allarmi" alt="cancella"> 
						</td>
						<td colspan="4" class="alertStrong">
							Bonifici
						</td>
					</tr>
					<tr>
						<td>
								&nbsp;
						</td>

						<td>
							L'avviso per l'inserimento di bonifici risulta attivo per un importo maggiore a 15 Euro
						</td>
						<td style="text-align:center">
							<img src="/HT/fe/img/NNFFSpunta.png" title="Spunta" alt="Spunta">
						</td>
						<td style="text-align:center">
							<img src="/HT/fe/img/NNFFSpunta.png" title="Spunta" alt="Spunta">
						</td>
						<td style="text-align:center">
							&nbsp;
						</td>
					</tr>
				</tbody>
		</table>
	
		</div>
		</div></div>

			<input type="hidden" name="chiaveDossier" id="chiaveDossier">
				<div class="pull-right margin-top10">
					<div class="actions">
						<input type="submit" name="modifica" value="Aggiungi allarme" class="btn btn-primary" title="Aggiungi allarme">
					</div>
				</div>

	</form>


<form id="formAllarmiRicarica" method="post" action="/WEBHT/sm/ricarica.do">
	<div class="section clearfix">
		<h3 class="titleSection">
			Info Ricarica
		</h3>
		<div class="DettInf">
			<div id="allRicarica">
				<table class="table allarmi" id="tableAllRicarica">
					<colgroup>
						<col width="12%">
						<col width="67%">
						<col width="7%">
						<col width="7%">
						<col width="7%">
					</colgroup>
					<thead>
						<tr>
							<th colspan="2">Descrizione del messaggio di allarme</th>
							<th style="text-align:center">Sms</th>
							<th style="text-align:center">E-mail</th>
							<th style="text-align:center">App</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
							<input type="image" name="modifica" src="/HT/fe/img/icon_edit.png" onclick="javascript:setFormParameters('formRicarica')" class="imgSrv" title="Modifica allarmi" alt="modifica"> 
							<input type="image" name="cancella" src="/HT/fe/img/icon_delete.png" onclick="javascript:setFormParameters('formRicarica')" class="imgSrv" title="Cancella allarmi" alt="cancella">
							</td>
							<td colspan="4" class="alertStrong">
								Ricariche
							</td>
						</tr>
						<tr>
							<td>
								&nbsp;
							</td>
							<td>
								L'avviso per l'inserimento di ricariche cellulare risulta attivo per un importo minore a 5 Euro 
							</td>
							<td style="text-align:center">
								<img src="/HT/fe/img/NNFFSpunta.png" title="Spunta" alt="Spunta">
							</td>
							<td style="text-align:center">
								<img src="/HT/fe/img/NNFFSpunta.png" title="Spunta" alt="Spunta">
							</td>
							<td style="text-align:center">
								<img src="/HT/fe/img/NNFFSpunta.png" title="Spunta" alt="Spunta">	
							</td>
						</tr>
						<tr>
							<td>
								&nbsp;
							</td>
							<td>
								L'avviso per l'inserimento di ricariche carte ricaricabili risulta attivo per un importo maggiore a 82 Euro 
							</td>
							<td style="text-align:center">
									
							</td>
							<td style="text-align:center">
								<img src="/HT/fe/img/NNFFSpunta.png" title="Spunta" alt="Spunta">
							</td>
							<td style="text-align:center">
									
							</td>
						</tr>	
					</tbody>
				</table>
			</div>
		</div>
	</div>

				<input type="hidden" name="chiaveDossier" id="chiaveDossier">
				<div class="pull-right margin-top10">
					<div class="actions">
						<input type="submit" name="modifica" value="Aggiungi allarme" class="btn btn-primary" title="Aggiungi allarme">
					</div>
				</div>
</form>	


	
	





<form id="formInfoCarte" method="post" action="/WEBHT/sm/carte.do">
	<div class="section clearfix">
		<h3 class="titleSection">
		 	Info Carte
		</h3>
		<div class="DettInf">
			<div id="allCarte">
				<table class="table allarmi" id="tableAllCarte">
					<colgroup>
						<col width="12%">
						<col width="67%">
						<col width="7%">
						<col width="7%">
						<col width="7%">
					</colgroup>
					<thead>
						<tr>
							<th colspan="2">&nbsp;Descrizione del messaggio di allarme</th>
							<th style="text-align:center">Sms</th>
							<th style="text-align:center">E-mail</th>
							<th style="text-align:center">App</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
							<input type="image" name="modifica" src="/HT/fe/img/icon_edit.png" onclick="javascript:setFormParameters('formCarteDebitoAllarmi')" class="imgSrv" title="Modifica allarmi" alt="modifica operazione"> 
									
							<input type="image" name="cancella" src="/HT/fe/img/icon_delete.png" onclick="javascript:setFormParameters('formCarteDebitoAllarmi')" class="imgSrv" title="Cancella allarmi" alt="cancella operazione">
							</td>
							<td colspan="4" class="alertStrong">
								Carte
							</td>
						</tr>
						<tr>
							<td rowspan="6">
								&nbsp;
							</td>
							<td>
								<p>
									K2 White n&deg;&nbsp;*2585 &nbsp; Intestata a:&nbsp;TALLO MAURO LUCA
								</p>
							</td>
							<td style="text-align:center">
								Auto
							</td>
							<td style="text-align:center">
								&nbsp;
							</td>
							<td style="text-align:center">
								 &nbsp;
							</td>
						</tr>
						<tr>
							<td>
								<p>
									YouCard n&deg;&nbsp;*6534 &nbsp; Intestata a:&nbsp;TALLO MAURO LUCA
								</p>
							</td>
							<td style="text-align:center">
								&nbsp;
							</td>
							<td style="text-align:center">
								&nbsp;
							</td>
							<td style="text-align:center">
								<img src="/HT/fe/img/NNFFSpunta.png" title="Spunta" alt="Spunta">
							 	&nbsp;
							</td>		
						</tr>
						<tr>
							<td>
								<p>
									K2 Black n&deg;&nbsp;*2144 &nbsp; Intestata a:&nbsp;TALLO MAURO LUCA
								</p>
							</td>
							<td style="text-align:center">
								Auto
							</td>
							<td style="text-align:center">
								&nbsp;
							</td>
							<td style="text-align:center">
								<img src="/HT/fe/img/NNFFSpunta.png" title="Spunta" alt="Spunta">
							 	&nbsp;
							</td>
						</tr>
						<tr>
						
						<td>
							<p>
								Bancomat
							  	n&deg;&nbsp;*0897
								&nbsp;
								Intestata a:&nbsp;TALLO MAURO LUCA
							</p>
						</td>
						<td style="text-align:center">
							<img src="/HT/fe/img/NNFFSpunta.png" title="Spunta" alt="Spunta">
						</td>
						<td style="text-align:center">

						</td>
						<td style="text-align:center">
							<img src="/HT/fe/img/NNFFSpunta.png" title="Spunta" alt="Spunta">
							 &nbsp;
						</td>
						
					</tr>
					
					<tr>
						
						<td>
							<p>
								Bancomat
							  	n&deg;&nbsp;*8636
								&nbsp;
								Intestata a:&nbsp;TALLO MAURO LUCA
							</p>
						</td>
						
						<td style="text-align:center">
							<img src="/HT/fe/img/NNFFSpunta.png" title="Spunta" alt="Spunta">
						</td>
						<td style="text-align:center">

						</td>
						<td style="text-align:center">
							 &nbsp;
						</td>
						
					</tr>
					
					<tr>
						
						<td>
							<p>
								Bancomat
							  	
								n&deg;&nbsp;*3423
								&nbsp;
								Intestata a:&nbsp;TALLO MAURO LUCA
							</p>
						</td>
						
						<td style="text-align:center">
							<img src="/HT/fe/img/NNFFSpunta.png" title="Spunta" alt="Spunta">
						</td>
						<td style="text-align:center">
						</td>
						<td style="text-align:center">
							 &nbsp;
						</td>
						
					</tr>
					
				</tbody>					
			</table></div>
	 	</div></div>
	 	
	 		<div class="pull-right margin-top10">
			<div class="actions">
				 
				<input type="submit" name="modifica" value="Aggiungi allarme" class="btn btn-primary" alt="Aggiungi allarme">  	
			</div></div>
			
	</form>
	<br>


		
	






  <form id="formContoAllarmi" method="post" action="/WEBHT/sm/conto.do">
<div class="section clearfix">
	<h3 class="titleSection">
		Allarmi di Conto
	</h3>
	<div class="DettInf">
		<div id="allConto">
		<table class="table allarmi" id="tableAllConto">
			<colgroup>
				<col width="12%">
				<col width="67%">
				<col width="7%">
				<col width="7%">
				<col width="7%">
			</colgroup>
			<thead>
			<tr>
				<th colspan="3">Descrizione del messaggio di allarme</th>
				<th style="text-align:center">Sms</th>
				<th style="text-align:center">E-mail</th>
				<th style="text-align:center">App</th>
			</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<input type="image" name="modifica" src="/HT/fe/img/icon_edit.png" onclick="javascript:setFormParameters('formContoAllarmi','chiaveRiepilogoConto','001|2001|200100003610')" class="imgSrv" title="Modifica allarme" alt="modifica operazione"> 
										
						<input type="image" name="cancella" src="/HT/fe/img/icon_delete.png" onclick="javascript:setFormParameters('formContoAllarmi','chiaveRiepilogoConto','001|2001|200100003610')" class="imgSrv" title="Cancella allarmi" alt="cancella operazione">
					</td>
						
					<td style="border-bottom: 0px; font-weight: bold;" colspan="5">
						<p>
		                    Conto corrente
				         	00003610
							Filiale:&nbsp;SEDE DI LODI&nbsp;-&nbsp;
							2001
		         			Intestato a:&nbsp;TALLO MAURO LUCA
						</p>
					</td>							
				</tr>							

				<tr>
					<td style="border-bottom: 0px;">
					
					</td>
					<td colspan="2">
						<p>
							Movimento per Accredito Bonifico/Stipendio/Pensione per un importo maggiore a 10,00 Euro 
						</p>
					</td>							
					<td style="text-align:center">
						<img src="/HT/fe/img/NNFFSpunta.png" title="Spunta" alt="Spunta">
					</td>
					<td style="text-align:center">
						&nbsp;
					</td>
					<td style="text-align:center">
						&nbsp;
					</td>
				</tr>							
				<tr>
					<td style="border-bottom: 0px;">
					
					</td>
					<td colspan="2">
						<p>
							Attivazione domiciliazioni
						</p>
					</td>							
					<td style="text-align:center">
							
					</td>
					<td style="text-align:center">
						Auto
					</td>
					<td style="text-align:center">
							
					</td>
				</tr>							
				<tr>
					<td>
						
					</td>
					<td colspan="2">
						<p>
							Domiciliazioni mancato pagamento
						</p>
					</td>							
					<td style="text-align:center">
							
					</td>
					<td style="text-align:center">
						Auto
					</td>
					<td style="text-align:center">
							
					</td>
				</tr>							
				<tr>
					<td>
						<input type="image" name="modifica" src="/HT/fe/img/icon_edit.png" onclick="javascript:setFormParameters('formContoAllarmi','chiaveRiepilogoConto','001|2001|200100174456')" class="imgSrv" title="Modifica allarme" alt="modifica operazione"> 
						<input type="image" name="cancella" src="/HT/fe/img/icon_delete.png" onclick="javascript:setFormParameters('')" class="imgSrv" title="Cancella allarmi" alt="cancella"> 
					</td>
						
					<td style="border-bottom: 0px; font-weight: bold;" colspan="5">
						<p>
		                	Conto corrente
				        	00174456
							Filiale:&nbsp;SEDE DI LODI&nbsp;-&nbsp;
							2001
		         			Intestato a:&nbsp;TALLO MAURO LUCA
						</p>
					</td>							
				</tr>							

				<tr>
					<td>
						
					</td>
					<td colspan="2">
						<p>
							Attivazione domiciliazioni
					</td>							
					<td style="text-align:center">
							
					</td>
					<td style="text-align:center">
						Auto
					</td>
					<td style="text-align:center">
							
					</td>
				</tr>							
				<tr>	
					<td>
					
					</td>
					<td colspan="2">
						<p>
							Domiciliazioni mancato pagamento
						</p>
					</td>							
					<td style="text-align:center">
							
					</td>
					<td style="text-align:center">
						Auto
					</td>
					<td style="text-align:center">
							
					</td>
				</tr>							

			</tbody>
		</table></div>
	</div></div>

	
	
		<input type="hidden" name="chiave" id="chiaveRiepilogoConto">
			<div class="pull-right  margin-top10">
		<div class="actions">
			
			<input type="submit" name="modifica" value="Aggiungi allarme" class="btn btn-primary" title="Aggiungi allarme" alt="nuovo">
		</div></div>
		
  </form>
	<br>
	


	
	






	
	
	
	
	
	<form id="formAllarmiDossier" method="post" action="/WEBHT/sm/dossier.do">
<div class="section clearfix">

			<h3 class="titleSection">
		Allarmi Dossier

</h3>
		<div class="DettInf">
			<div id="allDossier">
			<table class="table allarmi" id="tableAllDossier">
				<colgroup>
					<col width="12%">
					<col width="67%">
					<col width="7%">
					<col width="7%">
					<col width="7%">
				</colgroup>
				<thead>
				<tr>
				
					<th colspan="2">Descrizione del messaggio di allarme</th>
					<th style="text-align:center">Sms</th>
					<th style="text-align:center">E-mail</th>
					<th style="text-align:center">App</th>
				</tr>
				</thead>
				
				<tbody>
						<tr> 
							<td>
								<input type="image" name="modifica" src="/HT/fe/img/icon_edit.png" onclick="javascript:setFormParameters('formAllarmiDossier','chiaveDossier','007|2001|000000106440')" class="imgSrv" title="Modifica allarmi" alt="modifica">								
								<input type="image" name="cancella" src="/HT/fe/img/icon_delete.png" onclick="javascript:setFormParameters('formAllarmiDossier','chiaveDossier','007|2001|000000106440')" class="imgSrv" title="Cancella allarmi" alt="cancella"> 
							</td>
							<td colspan="4" class="alertStrong">
								Dossier
							</td>
						</tr>
						<tr>
							<td>
								&nbsp;
							</td>

							<td>000000106440 - Eseguiti Ineseguiti di borsa</td>
							<td style="text-align:center">
								
							</td>
							<td style="text-align:center">
								<img src="/HT/fe/img/NNFFSpunta.png" title="Spunta" alt="Spunta">
							</td>
							<td style="text-align:center">
								
							</td>
						</tr>
						<tr>
							<td>
								&nbsp;
							</td>

							<td>000000106440 - Valore totale Dossier a fine giornata (invio h. 8.30)</td>
							<td style="text-align:center">
								<img src="/HT/fe/img/NNFFSpunta.png" title="Spunta" alt="Spunta">
							</td>
							<td style="text-align:center">
								<img src="/HT/fe/img/NNFFSpunta.png" title="Spunta" alt="Spunta">
							</td>
							<td style="text-align:center">
								<img src="/HT/fe/img/NNFFSpunta.png" title="Spunta" alt="Spunta">
							</td>
						</tr>
				</tbody>
			</table></div>
		</div></div>
				
			<input type="hidden" name="chiaveDossier" id="chiaveDossier">
				<div class="pull-right margin-top10">
			<div class="actions">
				
			<input type="submit" name="modifica" value="Aggiungi allarme" class="btn btn-primary" title="Aggiungi allarme">
			</div></div>
	</form>
	<br>
	

	
	





<form id="formIndiciCambiAllarmi" method="post" action="/WEBHT/sm/indiciCambi.do">
<div class="section clearfix">
			<h3 class="titleSection">
				Allarmi Cambi e Indici
			</h3>
	<div class="DettInf">	
		<div id="allIndici">
		<table class="table allarmi" id="tableAllIndici">
			<colgroup>
					<col width="12%">
					<col width="67%">
					<col width="7%">
					<col width="7%">
					<col width="7%">
				</colgroup>
		<thead>
			<tr>
				<th colspan="2">Descrizione del messaggio di allarme</th>
				<th style="text-align:center">Sms</th>
				<th style="text-align:center">E-mail</th>
				<th style="text-align:center">App</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td >
					<input type="image" name="modifica" src="/HT/fe/img/icon_edit.png" onclick="javascript:setFormParameters('formIndiciCambiAllarmi')" class="imgSrv" alt="modifica operazione"> 
					<input type="image" name="cancella" src="/HT/fe/img/icon_delete.png" onclick="javascript:setFormParameters('formIndiciCambiAllarmi')" class="imgSrv" alt="cancella operazione"> 	
				</td>
				<td colspan="4" class="alertStrong">
					Cambi e indici
				</td>
			</tr>
			<tr>
				<td>
					
				</td>
				<td>Borsa italiana: ore 9.05,a frequenza giornaliera</td>						
				<td style="text-align:center">
							
				</td>
						
				<td style="text-align:center">
							
					<img src="/HT/fe/img/NNFFSpunta.png" title="Spunta" alt="Spunta">
							
				</td>	
											
				<td style="text-align:center">
							
				</td>						
			</tr>	
			<tr>
				<td>
					
				</td>
				<td>Borsa italiana: ore 17.30,a frequenza giornaliera</td>						
				<td style="text-align:center">
					<img src="/HT/fe/img/NNFFSpunta.png" title="Spunta" alt="Spunta">
				</td>
						
				<td style="text-align:center">
							
					<img src="/HT/fe/img/NNFFSpunta.png" title="Spunta" alt="Spunta">
							
				</td>	
											
				<td style="text-align:center">
							
				</td>						
			</tr>									
				

			
		</tbody>
		</table></div>
		</div></div>
		
			<div class="pull-right  margin-top10">
			<div class="actions">
				 
				<input type="submit" name="modifica" value="Aggiungi allarme" class="btn btn-primary" alt="Aggiungi allarme">
			</div></div>
			
	</form>


	
	





	
	<form id="formAllarmiTitoli" method="post" action="/WEBHT/sm/titoli.do">
			<div class="section clearfix">
			
			<h3 class="titleSection">
				Allarmi Titoli
			</h3>
	<div class="DettInf">
		<div id="allTitoli">
		<table class="table allarmi" id="tableAllTitoli">
		<colgroup>
			<col width="12%">
			<col width="67%">
			<col width="7%">
			<col width="7%">
			<col width="7%">
		</colgroup>
		
		<thead>
			<tr>			
				<th colspan="2" class="riepilogoIntestazioneLeft">Descrizione del messaggio di allarme</th>
				<th style="text-align:center">Sms</th>
				<th style="text-align:center">E-mail</th>
				<th style="text-align:center">App</th>
			</tr>
		</thead>
		<tbody>
			<!-- Ciclo Esterno -->
			<tr>
				<td >
					<input type="image" name="elemento" src="/HT/fe/img/icon_edit.png" onclick="javascript:setFormParameters('formAllarmiTitoli','chiaveRiepilogoTitoli','46|IT0001233417|true')" class="imgSrv" title="Modifica allarmi" alt="modifica operazione"> 
					<input type="image" name="cancella" src="/HT/fe/img/icon_delete.png" onclick="javascript:setFormParameters('formAllarmiTitoli','chiaveRiepilogoTitoli','46|IT0001233417|true')" class="imgSrv" title="Cancella allarmi" alt="cancella operazione"> 							
				</td>
				<td colspan="4" class="alertStrong">
					BI - Azioni Italia -- 4AIM SICAF AZ.EUR
				</td>	
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>	
				<td>
					Valore titolo a frequenza giornaliera alla apertura
				</td>							
				<td style="text-align:center">		
					<img src="/HT/fe/img/NNFFSpunta.png" title="Spunta" alt="Spunta">
				</td>							
				<td style="text-align:center">
					<img src="/HT/fe/img/NNFFSpunta.png" title="Spunta" alt="Spunta">							
				</td>	
				<td style="text-align:center">
					<img src="/HT/fe/img/NNFFSpunta.png" title="Spunta" alt="Spunta">
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>	
				<td>
					Valore titolo a frequenza giornaliera alla chiusura
				</td>							
				<td style="text-align:center">		
					<img src="/HT/fe/img/NNFFSpunta.png" title="Spunta" alt="Spunta">
				</td>							
				<td style="text-align:center">
							
				</td>	
				<td style="text-align:center">
					<img src="/HT/fe/img/NNFFSpunta.png" title="Spunta" alt="Spunta">
				</td>
			</tr>
			
				

				
				
			
			<!-- Chiusura ciclo esterno-->
			</tbody>
		</table>
		<input type="hidden" name="chiave" id="chiaveRiepilogoTitoli">
	</div></div>
	
</div>
	
		<div class="pull-right margin-top10">
		<div class="actions">	
			<input type="submit" name="view" value="Aggiungi allarme" class="btn btn-primary" title="Aggiungi allarme" alt="nuovo">
		</div></div>
		
	</form>


	
	



<!-- This Page Is Valid XHTML 1.0 Transitional --> 


	
	




	

</div>
<script type="text/javascript">

//uguale a submitForm in funzioniHT, ma non fa il submit via JS 
//risolve un bug con gli "input type=image" in ie9
function setFormParameters(idForm) {
	var objForm=document.getElementById(idForm);
	if (objForm!=null) {
		for(var i=1;i<arguments.length;i+=2){
			var obj=objForm[arguments[i]];
			if (obj!=null) {				
				obj.value=arguments[i+1];
			}
		}
	}
}

</script>
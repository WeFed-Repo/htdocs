					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							16/03/2017	
						</div>
					</div>
					
					
					
					



<!-- This Page Is Valid XHTML 1.0 Transitional -->
<form id="formContoAllarmi" method="post" action="/WEBHT/sm/conto.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="7b04613eeb827929266bc339aa6319ef"></div>
	<div class="riquadro clearfix">
		








	



		
		
		
		



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag pannelloControllo">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
			
				
				
 					<span>Allarmi di Conto</span>
 					
				
			
			
		
	</h1>
	
	


		






 <script type="text/javascript">
	 
			$(document).ready(function(){
		/* cartaSelectionInit(); */
		$('.tabSelezioneCarte table').on('mouseenter', 'tr', function() { $(this).addClass('hover'); });
		$('.tabSelezioneCarte table').on('mouseleave', 'tr', function() { $(this).removeClass('hover'); });
			$('.btnSelezioneCC').click(function(){
		
		var that = $(this);
		if (!that.hasClass('open'))
			$('.tabSelezioneCarte').slideDown(200);
		else
			$('.tabSelezioneCarte').slideUp(300);
			
		that.toggleClass('open');
		
		//$('.cartaSelezionata').fadeOut(200, function(){$('.tabSelezioneCarte').slideDown(300);});
		//$('.tabSelezioneCC').slideDown(200);
	});
	
	$('.tabSelezioneCarte table tbody').on('click', 'tr', function(){
		$('input[type="radio"]', $(this).parent()).removeAttr('checked');
		$('input[type="radio"]', this).attr("checked", "checked");
		$('input[type="radio"]', this).closest("form").submit();
	});
	
		
		});
	
</script> 








<div class="section clearfix">
	<h3 class="titleSection">
		
			
		
		
		
		








		
			Seleziona rapporto
		
		
		
		


	</h3>

	

	<div class="selezioneCC tabellaSelezioneCC">
		<div class="CCselezionato clearfix">
			<div class="col-xs-12">
				<span class="col-xs-4" id="labelIntestatario">
					Intestato a:
				</span>
				<span class="col-xs-6" id="intestazione">
					SADITDGAENA DVCIE
				</span>
			</div>
			<div class="col-xs-6">
				 <span class="col-xs-4">Tipo rapporto </span>
				 <span class="col-xs-6" id="tipoCarta">
					 Conto corrente
				 </span>
				 
				 <span class="col-xs-4">
				 	Filiale 
				 </span>
				 <span class="col-xs-6" id="filiale"> 
				 	VERONA AG. 3
					&nbsp;-&nbsp;
					
			         	
			         	0004
		         	
				</span>
			</div>
			<div class="col-xs-6">
				 <span class="col-xs-4">Numero </span>
				 <span class="col-xs-6" id="numero"> 00001585 </span>
			</div>
			
				<a title="selezione rapporto" href="javascript:void(0);" class="btnSelezioneCC">
				<img src="/HT/IMAGES/nGrafica/ico-select.png" id="btnSelezioneRapporto" title="Seleziona" alt="Seleziona">
				</a>
			
		</div>
		<div class="table-responsive tabSelezioneCarte" style="display: none;">
			<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer"><table class="table dataTable no-footer" id="DataTables_Table_0" role="grid">
			    
			    <tbody>
				
					
							
				
					
							
				
					
							
				
					
							
				
					
							
				
			    <tr role="row" class="odd">
				      	
				      		<td class="hidden" style="text-align: center">
				      				<input type="radio" name="codContoCorrente" value="001|0004|000400001585" checked="checked" onclick="submit();" id="codContoCorrente">
				      		</td>
				      	    	
			         	
			         	<td>
			         		Conto corrente
			         	</td>
			         	<td>00001585</td> 
			         	<td>
			         		VERONA AG. 3&nbsp;-&nbsp; 
			         		
					         	
					         	0004
				         	
			         	 </td>
			         	<td>SADITDGAENA DVCIE</td>
					</tr><tr role="row" class="even">
				      	
				      		<td class="hidden" style="text-align: center">
				      				<input type="radio" name="codContoCorrente" value="001|0004|000400002700" onclick="submit();" id="codContoCorrente">
				      		</td>
				      	    	
			         	
			         	<td>
			         		Conto corrente
			         	</td>
			         	<td>00002700</td> 
			         	<td>
			         		VERONA AG. 3&nbsp;-&nbsp; 
			         		
					         	
					         	0004
				         	
			         	 </td>
			         	<td>SE AAGIN.TADOLCTT UDC</td>
					</tr><tr role="row" class="odd">
				      	
				      		<td class="hidden" style="text-align: center">
				      				<input type="radio" name="codContoCorrente" value="001|0004|000400585163" onclick="submit();" id="codContoCorrente">
				      		</td>
				      	    	
			         	
			         	<td>
			         		Conto corrente
			         	</td>
			         	<td>00585163</td> 
			         	<td>
			         		VERONA AG. 3&nbsp;-&nbsp; 
			         		
					         	
					         	0004
				         	
			         	 </td>
			         	<td>TOANNC EAOLGARGI IGAUSCEDS </td>
					</tr><tr role="row" class="even">
				      	
				      		<td class="hidden" style="text-align: center">
				      				<input type="radio" name="codContoCorrente" value="001|0001|000100167285" onclick="submit();" id="codContoCorrente">
				      		</td>
				      	    	
			         	
			         	<td>
			         		Conto deposito
			         	</td>
			         	<td>00167285</td> 
			         	<td>
			         		SEDE DI VERONA&nbsp;-&nbsp; 
			         		
					         	
					         	0001
				         	
			         	 </td>
			         	<td>UGA ICADELSACNT</td>
					</tr><tr role="row" class="odd">
				      	
				      		<td class="hidden" style="text-align: center">
				      				<input type="radio" name="codContoCorrente" value="001|0898|089800115895" onclick="submit();" id="codContoCorrente">
				      		</td>
				      	    	
			         	
			         	<td>
			         		YouCard
			         	</td>
			         	<td>*1650</td> 
			         	<td>
			         		VERONA AG. 3&nbsp;-&nbsp; 
			         		
					         	0004
					         	
				         	
			         	 </td>
			         	<td>NDGUAECSCAATI L</td>
					</tr></tbody>
			    <thead>
			    <tr role="row"><th class="hidden sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">&nbsp;</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">Tipo rapporto</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">Numero</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">Filiale</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">Intestazione</th></tr>
			    </thead>
			</table></div>
		</div>
	</div>
</div>




		<div class="section clearfix">
		
			<h3 class="titleSection">
				
				








		
			Impostazione Allarmi
		
		
		
		


			</h3>
			
			<table class="tabellaBlu table allarmi">
				<colgroup>
					<col width="40%">
					<col width="40%">
					<col width="7%">
					<col width="7%">
					<col width="7%">
				</colgroup>
				<tbody>
					<tr>
						<th colspan="2">Descrizione del messaggio di allarme
						</th>
						<th style="text-align: center" data-th="Sms">Sms
						</th>
						<th style="text-align: center" data-th="Sms">E-mail
						</th>
						<th style="text-align: center" data-th="App">App
						</th>
					</tr>
					<tr>
						<td>Ricevere il saldo con frequenza
					
						</td>
						<td><select name="freq.scadenza" id="freq.scadenza" class="form-control"><option value="FG">GIORNALIERA</option>
								<option value="FS">SETTIMANALE</option>
								<option value="FM">MENSILE</option></select></td>
						<td style="text-align: center" data-td="Sms"><input type="checkbox" name="freq.flagSMS" value="on" class="sfondoForm">
						</td>
						<td style="text-align: center" data-td="Email"><input type="checkbox" name="freq.flagEMAIL" value="on" class="sfondoForm">
						</td>
						<td style="text-align: center" data-td="App"><input type="checkbox" name="freq.flagAPP" value="on" class="sfondoForm">
						</td>
					</tr>
		
					<tr>
						
						<td colspan="5" style="border-bottom:0">
						<div><label><strong>Ricevere il saldo quando il valore</strong></label></div>
						<div class="col-xs-5">Scende al di sotto di</div>
						<div class="col-xs-6" style="padding: 0">Supera</div>
						</td>
					</tr>
					<tr>
						<td colspan="2">
						<div class="col-xs-6"><input type="text" name="valore.valoreInf" value="0,00" id="valore.valoreInf" class="form-control"></div>
						<div class="col-xs-6"><input type="text" name="valore.valoreSup" value="999.999,00" id="valore.valoreSup" class="form-control"></div>
						</td>
						<td style="text-align: center" data-td="Sms"><input type="checkbox" name="valore.flagSMS" value="on" class="sfondoForm">
						</td>
						<td style="text-align: center" data-td="Email"><input type="checkbox" name="valore.flagEMAIL" value="on" class="sfondoForm">
						</td>
						<td style="text-align: center" data-td="App"><input type="checkbox" name="valore.flagAPP" value="on" class="sfondoForm">
						</td>
					</tr>
					<tr>
						<td colspan="5" style="border-bottom: 0">
							<div><label><strong>Movimenti particolari </strong></label>	</div>
						<div class="col-xs-5">Causale</div>					
						<div class="col-xs-6" style="padding: 0">Importo maggiore di</div>					
					</td></tr>
					
						<tr>
							<td colspan="2" style="border-bottom: 0">
							<div class="col-xs-6"><select name="movimenti[0].idCausale" id="movimenti" style="width: 270px;" class="form-control"><option value="000" selected="selected">Selezionare</option>
									
										<option value="C01">Accredito Bonifico/Stipendio/Pensione</option>
									
										<option value="C02">Accredito Cedole/Dividendi/Premi</option>
									
										<option value="C03">Accredito Assegni</option>
									
										<option value="D01">Addebito Bonifico/Disposizione</option>
									
										<option value="D03">Addebito Pagamento Autostrade</option>
									
										<option value="D04">Addebito Spesa Carte Di Credito</option>
									
										<option value="D05">Addebito Premio Assicurazione</option>
									
										<option value="D06">Addebito Rata Finanziamento/Mutuo</option>
									
										<option value="D07">Addebito Canone Leasing</option>
									
										<option value="D08">Addebito Utenze</option>
									
										<option value="D10">Addebito Pagamenti Diversi</option>
									
										<option value="D11">Addebito Assegni</option>
									
										<option value="X01">Sottoscrizione/Rimborso Fondi Gestielle</option>
									
										<option value="X02">Acquisto/Vendita Titoli</option></select></div>
							
						<div class="col-xs-6">	<input type="text" name="movimenti[0].importo" value="0,00" class="form-control"></div></td>
							<td style="text-align: center" data-td="Sms"><input type="checkbox" name="movimenti[0].flagSMS" value="on" class="sfondoForm">
							</td>
							<td style="text-align: center" data-td="Email"><input type="checkbox" name="movimenti[0].flagEMAIL" value="on" class="sfondoForm">
							</td>
							<td style="text-align: center" data-td="App"><input type="checkbox" name="movimenti[0].flagAPP" value="on" class="sfondoForm">
							</td>
						</tr>
					
						<tr>
							<td colspan="2" style="border-bottom: 0">
							<div class="col-xs-6"><select name="movimenti[1].idCausale" id="movimenti" style="width: 270px;" class="form-control"><option value="000" selected="selected">Selezionare</option>
									
										<option value="C01">Accredito Bonifico/Stipendio/Pensione</option>
									
										<option value="C02">Accredito Cedole/Dividendi/Premi</option>
									
										<option value="C03">Accredito Assegni</option>
									
										<option value="D01">Addebito Bonifico/Disposizione</option>
									
										<option value="D03">Addebito Pagamento Autostrade</option>
									
										<option value="D04">Addebito Spesa Carte Di Credito</option>
									
										<option value="D05">Addebito Premio Assicurazione</option>
									
										<option value="D06">Addebito Rata Finanziamento/Mutuo</option>
									
										<option value="D07">Addebito Canone Leasing</option>
									
										<option value="D08">Addebito Utenze</option>
									
										<option value="D10">Addebito Pagamenti Diversi</option>
									
										<option value="D11">Addebito Assegni</option>
									
										<option value="X01">Sottoscrizione/Rimborso Fondi Gestielle</option>
									
										<option value="X02">Acquisto/Vendita Titoli</option></select></div>
							
						<div class="col-xs-6">	<input type="text" name="movimenti[1].importo" value="0,00" class="form-control"></div></td>
							<td style="text-align: center" data-td="Sms"><input type="checkbox" name="movimenti[1].flagSMS" value="on" class="sfondoForm">
							</td>
							<td style="text-align: center" data-td="Email"><input type="checkbox" name="movimenti[1].flagEMAIL" value="on" class="sfondoForm">
							</td>
							<td style="text-align: center"  data-td="App"><input type="checkbox" name="movimenti[1].flagAPP" value="on" class="sfondoForm">
							</td>
						</tr>
					
						<tr>
							<td colspan="2" style="border-bottom: 0">
							<div class="col-xs-6"><select name="movimenti[2].idCausale" id="movimenti" style="width: 270px;" class="form-control"><option value="000" selected="selected">Selezionare</option>
									
										<option value="C01">Accredito Bonifico/Stipendio/Pensione</option>
									
										<option value="C02">Accredito Cedole/Dividendi/Premi</option>
									
										<option value="C03">Accredito Assegni</option>
									
										<option value="D01">Addebito Bonifico/Disposizione</option>
									
										<option value="D03">Addebito Pagamento Autostrade</option>
									
										<option value="D04">Addebito Spesa Carte Di Credito</option>
									
										<option value="D05">Addebito Premio Assicurazione</option>
									
										<option value="D06">Addebito Rata Finanziamento/Mutuo</option>
									
										<option value="D07">Addebito Canone Leasing</option>
									
										<option value="D08">Addebito Utenze</option>
									
										<option value="D10">Addebito Pagamenti Diversi</option>
									
										<option value="D11">Addebito Assegni</option>
									
										<option value="X01">Sottoscrizione/Rimborso Fondi Gestielle</option>
									
										<option value="X02">Acquisto/Vendita Titoli</option></select></div>
							
						<div class="col-xs-6">	<input type="text" name="movimenti[2].importo" value="0,00" class="form-control"></div></td>
							<td style="text-align: center" data-td="Sms"><input type="checkbox" name="movimenti[2].flagSMS" value="on" class="sfondoForm">
							</td>
							<td style="text-align: center" data-td="Email"><input type="checkbox" name="movimenti[2].flagEMAIL" value="on" class="sfondoForm">
							</td>
							<td style="text-align: center" data-td="App"><input type="checkbox" name="movimenti[2].flagAPP" value="on" class="sfondoForm">
							</td>
						</tr>
					
						<tr>
							<td colspan="2" style="border-bottom: 0">
							<div class="col-xs-6"><select name="movimenti[3].idCausale" id="movimenti" style="width: 270px;" class="form-control"><option value="000" selected="selected">Selezionare</option>
									
										<option value="C01">Accredito Bonifico/Stipendio/Pensione</option>
									
										<option value="C02">Accredito Cedole/Dividendi/Premi</option>
									
										<option value="C03">Accredito Assegni</option>
									
										<option value="D01">Addebito Bonifico/Disposizione</option>
									
										<option value="D03">Addebito Pagamento Autostrade</option>
									
										<option value="D04">Addebito Spesa Carte Di Credito</option>
									
										<option value="D05">Addebito Premio Assicurazione</option>
									
										<option value="D06">Addebito Rata Finanziamento/Mutuo</option>
									
										<option value="D07">Addebito Canone Leasing</option>
									
										<option value="D08">Addebito Utenze</option>
									
										<option value="D10">Addebito Pagamenti Diversi</option>
									
										<option value="D11">Addebito Assegni</option>
									
										<option value="X01">Sottoscrizione/Rimborso Fondi Gestielle</option>
									
										<option value="X02">Acquisto/Vendita Titoli</option></select></div>
							
						<div class="col-xs-6">	<input type="text" name="movimenti[3].importo" value="0,00" class="form-control"></div></td>
							<td style="text-align: center" data-td="Sms"><input type="checkbox" name="movimenti[3].flagSMS" value="on" class="sfondoForm">
							</td>
							<td style="text-align: center" data-td="Email"><input type="checkbox" name="movimenti[3].flagEMAIL" value="on" class="sfondoForm">
							</td>
							<td style="text-align: center" data-td="App"><input type="checkbox" name="movimenti[3].flagAPP" value="on" class="sfondoForm">
							</td>
						</tr>
					
					<tr>
						<td colspan="2" style="border-top:1px solid  #e8e8e8">Attivazione nuova domiciliazione
					
						</td>
						<td style="text-align: center" data-td="Sms"><input type="checkbox" name="allarmeAttivazioneDomiciliazioni.sms" value="on" class="sfondoForm">
						</td>
						<td style="text-align: center" data-td="Email">
								
								
									Auto
								
							</td>
						<td style="text-align: center" data-td="App"><input type="checkbox" name="allarmeAttivazioneDomiciliazioni.app" value="on" class="sfondoForm">
						</td>
					</tr>
					<tr>
						<td colspan="2">Mancato pagamento domiciliazione per disponibilità insufficiente
					
						</td>
						<td style="text-align: center" data-td="Sms"><input type="checkbox" name="allarmeDomiciliazioniMancatoPagamento.sms" value="on" class="sfondoForm">
						</td>
						<td style="text-align: center" data-td="Email">
								
								
									Auto
								
							</td>
						<td style="text-align: center" data-td="App"><input type="checkbox" name="allarmeDomiciliazioniMancatoPagamento.app" value="on" class="sfondoForm">
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	
	
	<div class="pull-right margin-bottom20">
		<div class="actions">
			<input type="submit" name="annulla" value="Annulla" class="btn btn-primary" alt="Annulla">
			<input type="submit" name="conferma" value="Conferma" class="btn btn-primary execute" alt="Conferma">
		</div>
	</div>
</form>
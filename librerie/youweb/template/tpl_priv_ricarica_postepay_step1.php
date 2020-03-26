
					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							29/06/2017	
						</div>
					</div>
					
					
					
					





<script type="text/javascript" src="/HT/JS/combobox.js"></script>

<!-- FORM -->
<form id="formPostePay" method="post" action="/WEBHT/postePay/ricarica/riepilogoDati.do" class="form-horizontal">

<!-- RIQUADRO CONTENENTE L'INTERA PAGINA ECCETTO MANLEVA E BOTTONE AVANTI -->
	<div class="riquadro clearfix">
		
		<!-- TITOLO PRINCIPALE E PROGRESSIVO NAVIGAZIONE -->
		
		
		
		
		




	
	<div class="pager clearfix pull-right">
		<div class="circle_line">&nbsp;</div>
		
			
			
			
				
			
				<div class="circle current_page">&nbsp;</div>
			
		
			
			
			
				<div class="circle ">&nbsp;</div>
			
		
			
			
			
				<div class="circle ">&nbsp;</div>
			
		
	</div>






<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag PH[titolo.principale.flag]">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
			
				
				
 					<span>Ricarica Postepay</span>
 					
				
 					
 					
 						<span class="hidden-xs">:&nbsp; Compilazione</span>
 					
				
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>
		
		<!-- BANDA DINAMICA MESSAGGI DI ERRORE -->
		








	


		
		<!-- SEZIONE SELEZIONE RAPPORTO -->
		<div class="section clearfix">
			<h3 class="titleSection">
				Selezione Rapporto
			</h3>
			




  






	
	
		
	








<div class="selezioneCC tabellaSelezioneCC">

	
		<div class="CCselezionato clearfix">
			<!-- C'è anche la sezione saldo -->
			
				<div class="col-sm-6 col-xs-12">
				
					<span class="col-xs-4 col-xs-4" id="labelIntestatario">
						Intestato a:
					</span>
					<span class="col-xs-6" id="intestazione">
 								Trllaaucma Uloo 		
							
							</span>
					<span class="col-xs-4" id="conto">Conto corrente 
									
										
											
											
												

											
										
									
									
								</span>
				    <span class="col-xs-6" id="numero">00174456</span>
				    <span class="col-xs-4">
				    	Filiale:
				    </span>
				    <span class="col-xs-6" id="agenzia">SEDE DI LODI&nbsp;-&nbsp; 
									
									
										2001
									
								</span>
				</div>
				<div class="col-xs-12 col-sm-6" id="numeri">
					<span id="disponibile"> 
						
						Saldo disponibile:
						
						
						
							
								<strong>
														999.915.389,29
														EUR
													</strong>
							
							
						
						<!-- Multivaluta Visualizza -->
						
						<!-- Multivaluta Visualizza fine -->
					</span>
					<span id="contabile"> 
						Saldo contabile: 
						
							
								<strong>
														999.922.214,93
														EUR
													</strong>
							
							
						
					</span>
					
						<span id="affidamento"> 
							Affidamento: 
							
								
									<strong>
															10.000,00
															EUR
														</strong>
								
								
							
						</span>
					
					
					
				</div>
			
			
			<!-- C'è solo la sezione intestatario -->
			
			
			
				<a id="selezionaCC" class="btnSelezioneCC" href="javascript:void(0);" title="seleziona rapporto" role="button" aria-pressed="false">
					<img src="/HT/IMAGES/nGrafica/ico-select.png" id="btnSelezioneRapporto">
				</a>
			
		</div>
	
	<div class="tabSelezioneCC" style="display: none;">
		<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
			<div id="DataTables_Table_10_wrapper" class="dataTables_wrapper no-footer"><table class="table table-responsive table-striped dataTable no-footer" id="DataTables_Table_10" role="grid">
				<tbody>
					
						
					
						
					
						
					
				<tr role="row" class="odd">
						
							
							
								
									
									
										
											
											
												<td class="hidden sorting_1" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|2001|200100174456" checked="checked">
												</td>
											
										
									
								
							
						

						

							<td headers="tipoRapporto">Conto corrente 
									
										
											
											
												

											
										
									
									
								</td>
							<td headers="ccRapporto">00174456</td>
							<td headers="filialeRapporto" class="hidden-xs">SEDE DI LODI&nbsp;-&nbsp; 
									
									
										2001
									
								</td>
							<td headers="intestazioneRapporto">
 								Trllaaucma Uloo 		
							
							</td>
							<td headers="divisaSaldoDisponibile" class="hidden">
								EUR
							</td>
							<td headers="divisaSaldoContabile" class="hidden">
								EUR
							</td>
							
							
							
								
									
									
										
										
											
												
													
														<td headers="affidamento" class=" hidden oRight">
															10.000,00
															EUR
														</td>
														<td headers="divisaSaldoAffidamento" class="hidden">
															EUR
														</td>
													
												
											
											
												
													<td headers="saldoIstantaneo" class="hidden oRight">
														999.922.214,93
														<span>EUR</span>
													</td>
												
												
											
											
												
													<td headers="saldoDisponibile" class="oRight  hidden-xxs">
														999.915.389,29
														<span class="hidden-xs">EUR</span>
													</td>
												
												
											
										
									
								
								
								<!-- Multivaluta -->
								
								<!-- Multivaluta fine -->
							
							<td class="hidden">&nbsp;</td>
						</tr><tr role="row" class="even">
						
							
							
								
									
									
										
											
											
												<td class="hidden sorting_1" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|2001|200100003610">
												</td>
											
										
									
								
							
						

						

							<td headers="tipoRapporto">Conto corrente 
									
										
											
											
												

											
										
									
									
								</td>
							<td headers="ccRapporto">00003610</td>
							<td headers="filialeRapporto" class="hidden-xs">SEDE DI LODI&nbsp;-&nbsp; 
									
									
										2001
									
								</td>
							<td headers="intestazioneRapporto">
 								Rta Uloacalomlu 		
							
							</td>
							<td headers="divisaSaldoDisponibile" class="hidden">
								EUR
							</td>
							<td headers="divisaSaldoContabile" class="hidden">
								EUR
							</td>
							
							
							
								
									
									
										
										
											
												
													
														<td headers="affidamento" class=" hidden oRight">
															0,00
															EUR
														</td>
														<td headers="divisaSaldoAffidamento" class="hidden">
															EUR
														</td>
													
												
											
											
												
													<td headers="saldoIstantaneo" class="hidden oRight">
														1.000.000.817,00
														<span>EUR</span>
													</td>
												
												
											
											
												
													<td headers="saldoDisponibile" class="oRight  hidden-xxs">
														999.988.712,26
														<span class="hidden-xs">EUR</span>
													</td>
												
												
											
										
									
								
								
								<!-- Multivaluta -->
								
								<!-- Multivaluta fine -->
							
							<td class="hidden">&nbsp;</td>
						</tr><tr role="row" class="odd">
						
							
							
								
									
									
										
											
											
												<td class="hidden sorting_1" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|1896|189600000933">
												</td>
											
										
									
								
							
						

						

							<td headers="tipoRapporto">K2 Black 
									
										
											
											
												

											
										
									
									
								</td>
							<td headers="ccRapporto">*2144</td>
							<td headers="filialeRapporto" class="hidden-xs">SEDE DI LODI&nbsp;-&nbsp; 
									
										2001
									
									
								</td>
							<td headers="intestazioneRapporto">
 								Lallmaoout R Uca 		
							
							</td>
							<td headers="divisaSaldoDisponibile" class="hidden">
								EUR
							</td>
							<td headers="divisaSaldoContabile" class="hidden">
								EUR
							</td>
							
							
							
								
									
									
										
										
											
												
													
														<td headers="affidamento" class=" hidden oRight">
															0,00
															EUR
														</td>
														<td headers="divisaSaldoAffidamento" class="hidden">
															EUR
														</td>
													
												
											
											
												
												
													<td headers="saldoIstantaneo" class="hidden negativo oRight">
														-113.874,44
														<span>EUR</span>
													</td>
												
											
											
												
												
													<td headers="saldoDisponibile" class="negativo oRight  hidden-xxs">
														-113.874,44
														<span class="hidden-xs">EUR</span>
													</td>
												
											
										
									
								
								
								<!-- Multivaluta -->
								
								<!-- Multivaluta fine -->
							
							<td class="hidden">&nbsp;</td>
						</tr></tbody>
					<thead>
						<tr class="hover" role="row"><th class="hidden sorting_asc" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-sort="ascending" aria-label="&amp;nbsp;: ordinamento decrescente">&nbsp;</th><th headers="tipoRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Tipo rapporto: ordinamento crescente">Tipo rapporto</th><th headers="ccRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Numero: ordinamento crescente">Numero</th><th headers="filialeRapporto" class="hidden-xs sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Filiale: ordinamento crescente">Filiale</th><th headers="intestazioneRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Intestazione: ordinamento crescente">Intestazione</th><th headers="divisaSaldoDisponibile" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th><th headers="divisaSaldoContabile" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th><th headers="affidamento" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Affidamento: ordinamento crescente">Affidamento</th><th headers="divisaSaldoAffidamento" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th><th headers="saldoIstantaneo" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Saldo Contabile: ordinamento crescente">Saldo Contabile</th><th headers="saldoDisponibile" class="hidden-xxs sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="
									
										Saldo Disponibile
									
									
								: ordinamento crescente">
									
										Saldo Disponibile
									
									
								</th><th class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="&amp;nbsp;: ordinamento crescente">&nbsp;</th></tr>
					</thead>
			</table></div>
		</div>
	</div>
</div>
<!-- .selezioneCC.tabellaSelezioneCC -->
<script type="text/javascript">

$(document).ready(function(){

    //se il conto è gia stato selezionato devo popolarlo via javascript, il default non va bene
    
	var tr = $("input[name='codContoCorrente']:checked").closest('tr');			
			//popolo con i dati nella riga
			contoSelezionato = initContoSelezionato(tr);
			
			popolaSelezioneCC(contoSelezionato);
     
     
	 var submitOnClick = false;
	 var str = $('#intestazione').text();
	if($.trim(str).length>26){
		$('#intestazione').removeClass('col-xs-6');
		$('#intestazione').addClass('col-xs-10');
		$('#labelIntestatario').addClass('hide');
	}
	 
	
	
	//se i rapporti sono maggiori di 8 deve essere fatta la paginazione	
	
		
			CCselectionInit(submitOnClick, false, false);
		
		
	
})

</script>
		</div>	
		
		<!-- SEZIONE INSERISCI DATI -->
		<div class="section clearfix">
			<h3 class="titleSection">
				Inserisci dati
			</h3>
			
			
			
			





<div class="bs-example">
	<div class="form-group auto">
	
	    <!-- elenco opzioni beneficiari -->
		<div class="form-field-input col-sm-4">
			<label class="control-label" for="tendinaOpzioniBeneficiari">
				Beneficiario
			</label>
			<div class="form-field">
				<select name="codBeneficiario" id="tendinaOpzioniBeneficiari" class="form-control  isMobile">
				<option value="nuovo beneficiario">Nuovo beneficiario</option>
				<option value="28">GHY</option>
				<option value="30">NAR</option>
				<option value="21">POSTEPAY3</option>
				<option value="23">PROVA</option>
				<option value="61">QWERTY</option>
				<option value="22">RICKYANGEL</option></select>
			</div>
		</div>
		
		<!-- nome beneficiario -->
		<div class="form-field-input col-sm-4" id="nomeBeneficiarioField">
			<label class="control-label" for="nomeBeneficiario">
				Nome beneficiario:
			</label>
			<div class="form-field">
				<div class="col-xs-10">
					<input type="text" name="nomeBeneficiario" maxlength="35" size="30" value="" onblur="formattaStr(this, 35)" id="nomeBeneficiario" class="form-control">
				</div>			
				<div class="col-xs-2">
					<input type="button" value="&nbsp;" id="btnBeneficiario" title="Aggiungi/Modifica beneficiario" class="btnAggiungiBeneficiario">
				</div>
			</div>
		</div>
		
		<!-- nickname beneficiario -->
		<div class="form-field-input col-xs-12 col-sm-4 nickname" id="nicknameBen" style="display:none;">
			<label class="control-label">Nickname:</label>
			<div class="form-field">
				<input type="text" name="nickname" maxlength="20" size="30" value="" class="form-control">
			</div>
		</div>
		<div class="col-xs-12" style="display:none">
			<input type="checkbox" name="memorizza" value="on" id="memorizza">
		</div>

	</div>
</div>





		</div>
		
		<!-- DATI RICARICA -->
		<div class="section clearfix">
			<h3 class="titleSection">
				Dati ricarica
			</h3>
			





	<style>
		.campoImporto{
			width:auto;
			text-align:right;
		}
	</style>




	<div class="bs-example">
		
		<!-- RIGA 1 -->
		<div class="form-group">
				
			<!-- NUMERO CARTA -->
			<div class="form-field-input col-sm-4">
				<label class="control-label" for="numeroCarta">
					Numero carta da ricaricare
				</label>
				<div class="form-field">
					<input type="text" name="codiceUtenza" value="" id="numeroCarta" class="form-control">
				</div>
			</div>
			
			<!-- CODICE FISCALE TITOLARE -->
			<div class="form-field-input col-sm-4">
				<label class="control-label" for="codFiscaleTitolare">
					Codice fiscale titolare carta
				</label>
				<div class="form-field">
					<input type="text" name="codiceFiscaleTitolare" value="" id="codFiscaleTitolare" class="form-control">
				</div>
			</div>
				
		</div>
		
		<!-- RIGA 2 -->
		<div class="form-group">
				
			<!-- IMPORTO  -->
			<div class="form-field-input col-sm-4">
				<label class="control-label" for="importoInt">
					Importo
				</label>
				<div class="form-field">
					<input type="text" name="importoInt" maxlength="6" size="6" value="" id="importoInt" class="form-control campoImporto">
					<span>,</span>
					<input type="text" name="importoDec" maxlength="2" size="2" value="00" id="importoDec" style="display:inline" class="form-control campoImporto">&nbsp;EUR
				</div>
			</div>
			
			<!-- CAUSALE -->
			<div class="form-field-input col-sm-4 col-xs-12">
				<label class="control-label" for="causale">
					Causale
				</label>
				<div class="form-field">
					<textarea name="causale" cols="35" rows="4" onblur="upperCase(this)" id="causale" class="form-control"></textarea>
				</div>
			</div>
				
		</div>
		
	</div>
	

		</div>
		
	</div>
	
	<!-- MANLEVA -->
	<p class="small margin-left10 margin-top10">La Banca &egrave; sollevata da ogni responsabilit&agrave; derivante da un' eventuale errata digitazione dei dati obbligatori inseriti.</p>
	
	<!-- BOTTONE AVANTI -->
	<div class="pull-right margin-bottom20">
		<input type="submit" name="riepilogaDatiInseriti" value="Avanti" class="btn btn-primary">
	</div>
	
</form>

<script type="text/javascript">
	var listaBeneficiari = [
		
	   		['39','POSTEPAY',
	   		'POSTEPAY','4030359000001368',
	   		'ZZZZNE80A15H501S']
		    
		    	
		    	
		    
		
	];
	
	function statoBtnBeneficiario(classeSelezionato, classeNonSelezionato){
		this.selezionato = classeSelezionato;
		this.nonSelezionato = classeNonSelezionato
	} 
	
	const classiBtnBeneficiario = {aggiunta:new statoBtnBeneficiario("addchecked","btnAggiungiBeneficiario"), aggiornamento:new statoBtnBeneficiario("editchecked","btnEditCheck")}; 
	
	function findBeneficiario(codiceBeneficiario) {
		var beneficiario;
		$(listaBeneficiari).each(function(index, el) {
			if (codiceBeneficiario == el[0]) {
				console.log('beneficiario found');
				beneficiario = el;
				return false;//si interrompe lo scorrimento della lista beneficiari
			}		
		});
		return beneficiario;
	}
	
	function popolaDatiBeneficiario(beneficiario) {
		var datiBeneficiario;
		if (beneficiario==undefined) {
			datiBeneficiario = ["", "", "", ""];
		} else{
			datiBeneficiario = beneficiario.slice(1);
		}
		$('input[name=nickname]').val(datiBeneficiario[0]);
		$('input[name=nomeBeneficiario]').val(datiBeneficiario[1]);
		$('input[name=codiceUtenza]').val(datiBeneficiario[2]);
		$('input[name=codiceFiscaleTitolare]').val(datiBeneficiario[3]);
	}
	
	function handleBeneficiari(){
		var codiceBeneficiario = $('#tendinaOpzioniBeneficiari option:selected').val();
		var beneficiario = findBeneficiario(codiceBeneficiario);
		$('#btnBeneficiario').removeClass(classiBtnBeneficiario.aggiunta.selezionato).removeClass(classiBtnBeneficiario.aggiornamento.selezionato);
		if (isNuovoBeneficiario()) {
			$('#btnBeneficiario').removeClass(classiBtnBeneficiario.aggiornamento.nonSelezionato).addClass(classiBtnBeneficiario.aggiunta.nonSelezionato);
			$('#nicknameBen').hide();
			enableBeneficiariFields();
		} else {
			$('#btnBeneficiario').removeClass(classiBtnBeneficiario.aggiunta.nonSelezionato).addClass(classiBtnBeneficiario.aggiornamento.nonSelezionato);
			disableBeneficiariFields();
		}
		popolaDatiBeneficiario(beneficiario);			
	}
	
	
	
	function aggiungiBeneficiarioClicEvento() {
		var $this = $(this);
		var codBeneficiario = $('#tendinaOpzioniBeneficiari option:selected').val();
		var classe;
		
		$('#memorizza').click();
		if(isNuovoBeneficiario())
		{
			classe = classiBtnBeneficiario.aggiunta;
			if($this.hasClass(classe.selezionato))
			{
				$('#nicknameBen').hide();
				$this.removeClass(classe.selezionato);
			}
			else
			{
				$this.addClass(classe.selezionato);
				$('#nicknameBen').show();
			}
		}
		else
		{
			classe = classiBtnBeneficiario.aggiornamento;
			if($this.hasClass(classe.selezionato))
			{
				popolaDatiBeneficiario(findBeneficiario(codBeneficiario));
				disableBeneficiariFields();
			}
			else
			{
				$('#nicknameBen').show();
				enableBeneficiariFields();
			}
			$this.toggleClass(classe.selezionato).toggleClass(classe.nonSelezionato);
		}
		
	}
	
	function isNuovoBeneficiario() {
		var codBeneficiario = $('#tendinaOpzioniBeneficiari option:selected').val();
		console.log("codice attuale : " + codBeneficiario);
		return ((codBeneficiario == "") || (codBeneficiario == "nuovo beneficiario"));
	}

	function disableBeneficiariFields() {
		$('#nicknameBen').show();
		$('input[name=nickname]').attr('readonly', true);
		$('input[name=nomeBeneficiario]').attr('readonly', true);
		$('input[name=codiceUtenza]').attr('readonly', true);
		$('input[name=codiceFiscaleTitolare]').attr('readonly', true);		
	}	


	function enableBeneficiariFields() {
		$('input[name=nickname]').attr('readonly', false);
		$('input[name=nomeBeneficiario]').attr('readonly', false);
		$('input[name=codiceUtenza]').attr('readonly', false);
		$('input[name=codiceFiscaleTitolare]').attr('readonly', false);
	}
	
	function eMemorizza() {
		if (($('input[type=checkbox]').attr('checked') == undefined) && isNuovoBeneficiario()) {
			enableBeneficiariFields();
		} else if ($('input[type=checkbox]').attr('checked') == 'checked') {
			enableBeneficiariFields();
			$('#nicknameBen').show();
			if (!isNuovoBeneficiario()) {
				$('#btnBeneficiario').removeAttr('class')
							.addClass('btnEditCheck')
							.addClass('editchecked');
			}else {
				$('#btnBeneficiario').addClass('addchecked');
			}	
		} else {
			disableBeneficiariFields();
		}
	}
	
	function inizializzaSezioneBeneficiari(){
		var statoCheckBox = $('input[type=checkbox]').attr('checked');
		var btnBeneficiario = $('#btnBeneficiario');
		var classe;
		if(statoCheckBox == true || statoCheckBox == 'checked')
		{
			
			if(!isNuovoBeneficiario())
			{
				btnBeneficiario.removeClass();
				classe = classiBtnBeneficiario.aggiornamento;
			}
			else
			{
				classe = classiBtnBeneficiario.aggiunta;
			}
			btnBeneficiario.addClass(classe.selezionato);
			$('#nicknameBen').show();	
		}
		else
		{
			if(!isNuovoBeneficiario())
			{
				btnBeneficiario.removeClass().addClass(classiBtnBeneficiario.aggiornamento.nonSelezionato);
				disableBeneficiariFields();
			}
		}
	}
	
	
	$(document).ready(function (){
		console.log(listaBeneficiari);
		$('#tendinaOpzioniBeneficiari').combobox();
		$('#tendinaOpzioniBeneficiari').bind("combobox-select", handleBeneficiari);
		$('#btnBeneficiario').on('click', aggiungiBeneficiarioClicEvento);
		inizializzaSezioneBeneficiari();
	})
	
</script>
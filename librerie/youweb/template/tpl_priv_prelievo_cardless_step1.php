					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							29/06/2017	
						</div>
					</div>
					
					
					
					






<script type="text/javascript">
	$(document).ready(function() 
	{
		$('.accordion').each(function(i, div) 
		{
			$(div).accordion({
				active: 0, //tutti aperti di default, poi il cliente può decidere di chiuderli
				animated: ($.browser.msie && parseInt($.browser.version) <= 6) ? false : 'slide',
				heightStyle: "content",
				collapsible: true
			});
		});
		
		$("#comune").autocomplete({
			source: getPathContext() + '/cd/searchComuni.do',
			minLength: 3,
			select:function(event, ui)
			{
				var prov_cap = ui.item.desc.split("|");
				$("#provincia").attr("value", prov_cap[0]);
				$("#cap").attr("value", prov_cap[1]);
			}
		});
		
				
	});
	var popolaEmail = function(email) 
	{
		$('#email').val(email); 
		$('#dialogEmail').dialog('close');
	}
	function popolaEmailCopia(email) 
	{
		$('#email').val(email); 
		$('#dialogEmail').dialog('close');
	}	
	function modificaMail()
	{
		var urlAjax = getPathContext()+ '/serviziPerTe/modificaContatto.do?popup=true'
		$('#contatti').ajaxDialog('dialogEmail', urlAjax, { title:'Modifica contatti' }, true);
		if ($('#email').val()=='')
			$('#email').val("Inserisci e-mail");
	}
	function modificaIndirizzo() 
	{
		var value = $('#nazioneSelect').val();
		// italia
		if (value == '') 
		{ 
			$('#provincia').removeClass('readonly');
			$('#provincia').removeAttr('readonly');
		}	
		$('#indirizzo').removeClass('readonly');
		$('#indirizzo').removeAttr('readonly');
		$('#comune').removeClass('readonly');
		$('#comune').removeAttr('readonly');
		$('#cap').removeClass('readonly');		
		$('#cap').removeAttr('readonly');
		$('#nazioneText').hide();		
		$('#nazioneSelect').show();
		$('#aggiornamentoCorrispondenza').val('true');
		$('#btnModificaIndirizzo').hide();
	}
	function checkNazione() 
	{
		var value = $('#nazioneSelect').val();
		$('#comune').val('');
		$('#cap').val('');
		$('#indirizzo').val('');
		// diverso da italia
		if (value != '') 
		{			
			$('#provincia').val('');
			$('#provincia').attr('disabled', 'disabled');
			$('#provincia').css('background-color', '#C0C0C0');
		}
		else 
		{
			$('#provincia').removeAttr('disabled');
			$('#provincia').css('background-color', '');
		}
	}
</script>


<div class="riquadro clearfix">
	
	
	
	




	
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
		
				
				<div class="hidden-print hidden-xxs flag prelievoCardless">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
				
 					<span>Prelievo Cardless</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				







		<div class="contentPagina">
			<p style="text-align: center;"><img src="/HT/IMAGES/CONTENUTI/CARDLESS/step1.gif" alt=""></p>
		</div>



			</div>
		
	
</div>
	








	


	
	<form id="formSelezioneRapporto" method="post" action="/WEBHT/carte/prelievoCardlessSelezioneRapporto.do">
		<div class="section clearfix">
			<h3 class="titleSection">Conto d'appoggio</h3>
			
			 
			




  






	
	
		
	








<div class="selezioneCC tabellaSelezioneCC">

	
		<div class="CCselezionato clearfix">
			<!-- C'è anche la sezione saldo -->
			
			
			<!-- C'è solo la sezione intestatario -->
			
				<div class="col-sm-6 col-xs-12">
					<span class="col-xs-4" id="labelIntestatario">
						Intestato a:
					</span>
					<span class="col-xs-6" id="intestazione">
 								As Eagohneodlzzrs 		
							
							</span>
					<span class="col-xs-4" id="conto">Conto corrente 
									
										
											
											
												

											
										
									
									
								</span>
				    <span class="col-xs-6" id="numero">00007925</span>
					
				</div>
				<div class="col-sm-6 col-xs-12">
					<span class="col-xs-4 hidden-xs" id="conto">
						&nbsp;
					</span>
					<span class="col-xs-6 hidden-xs" id="conto">
						&nbsp;
					</span>
					<span class="col-xs-4">
				    	Filiale:
				    </span>
				    <span class="col-xs-6" id="agenzia">VENEZIA AG. 11&nbsp;-&nbsp; 
									
									
										0732
									
								</span>
				</div>
			
			
			
				<a id="selezionaCC" class="btnSelezioneCC" href="javascript:void(0);" title="seleziona rapporto" role="button" aria-pressed="false">
					<img src="/HT/IMAGES/nGrafica/ico-select.png" id="btnSelezioneRapporto">
				</a>
			
		</div>
	
	<div class="tabSelezioneCC" style="display: none;">
		<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
			<div id="DataTables_Table_10_wrapper" class="dataTables_wrapper no-footer"><table class="table table-responsive table-striped dataTable no-footer" id="DataTables_Table_10" role="grid">
				<tbody>
					
						
					
						
					
						
					
						
					
						
					
				<tr role="row" class="odd">
						
							
							
								
									
									
										
											
												<td class="hidden sorting_1" style="text-align: center">
													<input type="radio" name="codContoCorrente" value="001|0732|073200007925" checked="checked">
												</td>
												<td class="hidden" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|0732|073200007925" checked="checked" onclick="submit();">
												</td>
											
											
										
									
								
							
						

						

							<td headers="tipoRapporto">Conto corrente 
									
										
											
											
												

											
										
									
									
								</td>
							<td headers="ccRapporto">00007925</td>
							<td headers="filialeRapporto" class="hidden-xs">VENEZIA AG. 11&nbsp;-&nbsp; 
									
									
										0732
									
								</td>
							<td headers="intestazioneRapporto">
 								As Eagohneodlzzrs 		
							
							</td>
							<td headers="divisaSaldoDisponibile" class="hidden">
								
							</td>
							<td headers="divisaSaldoContabile" class="hidden">
								
							</td>
							
							
							
							<td class="hidden">&nbsp;</td>
						</tr><tr role="row" class="even">
						
							
							
								
									
									
										
											
												<td class="hidden sorting_1" style="text-align: center">
													<input type="radio" name="codContoCorrente" value="001|0732|073200007937">
												</td>
												<td class="hidden" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|0732|073200007937" onclick="submit();">
												</td>
											
											
										
									
								
							
						

						

							<td headers="tipoRapporto">Conto corrente 
									
										
											
											
												

											
										
									
									
								</td>
							<td headers="ccRapporto">00007937</td>
							<td headers="filialeRapporto" class="hidden-xs">VENEZIA AG. 11&nbsp;-&nbsp; 
									
									
										0732
									
								</td>
							<td headers="intestazioneRapporto">
 								Ezglzhaesoaodn Rs 		
							
							</td>
							<td headers="divisaSaldoDisponibile" class="hidden">
								
							</td>
							<td headers="divisaSaldoContabile" class="hidden">
								
							</td>
							
							
							
							<td class="hidden">&nbsp;</td>
						</tr><tr role="row" class="odd">
						
							
							
								
									
									
										
											
												<td class="hidden sorting_1" style="text-align: center">
													<input type="radio" name="codContoCorrente" value="001|0732|073200007965">
												</td>
												<td class="hidden" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|0732|073200007965" onclick="submit();">
												</td>
											
											
										
									
								
							
						

						

							<td headers="tipoRapporto">Conto corrente 
									
										
											
											
												

											
										
									
									
								</td>
							<td headers="ccRapporto">00007965</td>
							<td headers="filialeRapporto" class="hidden-xs">VENEZIA AG. 11&nbsp;-&nbsp; 
									
									
										0732
									
								</td>
							<td headers="intestazioneRapporto">
 								Ndhgaslezsz Eoaro 		
							
							</td>
							<td headers="divisaSaldoDisponibile" class="hidden">
								
							</td>
							<td headers="divisaSaldoContabile" class="hidden">
								
							</td>
							
							
							
							<td class="hidden">&nbsp;</td>
						</tr><tr role="row" class="even">
						
							
							
								
									
									
										
											
												<td class="hidden sorting_1" style="text-align: center">
													<input type="radio" name="codContoCorrente" value="001|0732|073200007977">
												</td>
												<td class="hidden" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|0732|073200007977" onclick="submit();">
												</td>
											
											
										
									
								
							
						

						

							<td headers="tipoRapporto">Conto corrente 
									
										
											
											
												

											
										
									
									
								</td>
							<td headers="ccRapporto">00007977</td>
							<td headers="filialeRapporto" class="hidden-xs">VENEZIA AG. 11&nbsp;-&nbsp; 
									
									
										0732
									
								</td>
							<td headers="intestazioneRapporto">
 								Zdosez Rnoalgsaeh 		
							
							</td>
							<td headers="divisaSaldoDisponibile" class="hidden">
								
							</td>
							<td headers="divisaSaldoContabile" class="hidden">
								
							</td>
							
							
							
							<td class="hidden">&nbsp;</td>
						</tr><tr role="row" class="odd">
						
							
							
								
									
									
										
											
												<td class="hidden sorting_1" style="text-align: center">
													<input type="radio" name="codContoCorrente" value="001|0732|073200007123">
												</td>
												<td class="hidden" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|0732|073200007123" onclick="submit();">
												</td>
											
											
										
									
								
							
						

						

							<td headers="tipoRapporto">Conto corrente 
									
										
											
											
												

											
										
									
									
								</td>
							<td headers="ccRapporto">00007123</td>
							<td headers="filialeRapporto" class="hidden-xs">VENEZIA AG. 11&nbsp;-&nbsp; 
									
									
										0732
									
								</td>
							<td headers="intestazioneRapporto">
 								Onagisnndmoi Sizvs A Lelahriezo 		
							
							</td>
							<td headers="divisaSaldoDisponibile" class="hidden">
								
							</td>
							<td headers="divisaSaldoContabile" class="hidden">
								
							</td>
							
							
							
							<td class="hidden">&nbsp;</td>
						</tr></tbody>
					<thead>
						<tr class="hover" role="row"><th class="hidden sorting_asc" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-sort="ascending" aria-label="&amp;nbsp;: ordinamento decrescente">&nbsp;</th><th class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="&amp;nbsp;: ordinamento crescente">&nbsp;</th><th headers="tipoRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Tipo rapporto: ordinamento crescente">Tipo rapporto</th><th headers="ccRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Numero: ordinamento crescente">Numero</th><th headers="filialeRapporto" class="hidden-xs sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Filiale: ordinamento crescente">Filiale</th><th headers="intestazioneRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Intestazione: ordinamento crescente">Intestazione</th><th headers="divisaSaldoDisponibile" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th><th headers="divisaSaldoContabile" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th><th class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="&amp;nbsp;: ordinamento crescente">&nbsp;</th></tr>
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
	 
	
	    submitOnClick = true;
	
	
	//se i rapporti sono maggiori di 8 deve essere fatta la paginazione	
	
		
			CCselectionInit(submitOnClick, false, false);
		
		
	
})

</script>
		</div>
	</form>
	



	




	<form id="formVerificaFirma" method="post" action="/WEBHT/carte/prelievoCardlessVerificaFirma.do">
		<input type="hidden" name="aggiornamentoCorrispondenza" value="false" id="aggiornamentoCorrispondenza">
		<div class="section clearfix">
			<h3 class="titleSection">Intestatario servizio</h3>
			<div class="accordion ui-accordion ui-widget ui-helper-reset" role="tablist">
				<h3 class="intestazione ui-accordion-header ui-state-default ui-accordion-header-active ui-state-active ui-corner-top ui-accordion-icons" role="tab" id="ui-id-2" aria-controls="ui-id-3" aria-selected="true" aria-expanded="true" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-s"></span><a href="#">SGO AENZZREHODSLA</a></h3>
				<div class="bs-example form-horizontal ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active" id="ui-id-3" aria-labelledby="ui-id-2" role="tabpanel" aria-hidden="false" style="display: block;">
				

					<div class="form-group">
						<div class="col-xs-12 clear-padding">
						  	<strong>Contatti:</strong>
						</div>
						<div class="col-sm-5 col-xs-12 clear-padding">
						  	<label class="control-label" for="indirizzoEmail">
						  		Indirizzo e-mail di SGO AENZZREHODSLA
						  	</label>
						</div>
					 	<div class=" col-sm-7 col-xs-12 clear-padding">
							<div class="form-field">
					  			<div class="col-xs-11 floatl">
						  			<strong><input type="text" name="indirizzoEmail" value="OSANDROSILVIA@ALICE.IT" readonly="readonly" id="email" style="border:0px;background-color:transparent;width:100%" class=""></strong>
					  			</div>
					  			<div class="col-xs-1">
		    						<input type="button" name="contatti floatl" value="&nbsp;" onclick="modificaMail();" id="contatti" class="btnEdit">
		    					</div>
		    				</div>
						</div>
					
							<div class="col-sm-5 col-xs-12 clear-padding">
							  	<label class="control-label" for="indirizzoEmail">
							  		Contatto telefonico di SGO AENZZREHODSLA
							  	</label>
							</div>
						 	<div class="col-sm-7 col-xs-12 clear-padding">
								<div class="form-field">
									<label><strong>3281751525</strong></label>
			    				</div>
							</div>
						
					</div>

					<!-- END MODIFICA -->



				</div>
			</div>
		</div>
		
		<div class="section clearfix padding-bottom10">
			<div class="col-xs-12" style="padding-left: 0;">
				<div class="col-sm-6" style="padding-left: 0;">
				<h3 class="titleSection">Indirizzo di corrispondenza</h3>
				<input type="button" name="contatti pull-right" value="&nbsp;" onclick="modificaIndirizzo();" id="contatti" class="btnEdit">
				</div>
			</div>
			<div class="bs-example"> 
				<div class="form-group">
					<div class="form-field-input col-sm-4 col-xs-12">
						<label for="indirizzo">Indirizzo</label>
						<div class="form-field">
							<input type="text" name="corrispondenza.indirizzo" maxlength="35" size="65" value="SAN MARCP 2922/A" readonly="readonly" id="indirizzo" class="readonly form-control">
						</div>
					</div>
					<div class="form-field-input col-sm-4 col-xs-12">
			  			<label for="comune">Comune</label>
						<div class="form-field">
							<input type="text" name="corrispondenza.comune" maxlength="30" size="30" value="VENEZIA" readonly="readonly" id="comune" class="readonly form-control ui-autocomplete-input" autocomplete="off">
						</div>
					</div>
					<div class="form-field-input col-sm-4 col-xs-12">
					  	<label for="provincia">Provincia</label>
						<div class="form-field">
							<input type="text" name="corrispondenza.provincia" maxlength="2" size="2" value="VE" readonly="readonly" id="provincia" class="readonly form-control">
						</div>
					</div>
					<div class="form-field-input col-sm-4 col-xs-12">
						<label for="cap">CAP</label>
						<div class="form-field">
							<input type="text" name="corrispondenza.cap" maxlength="5" size="5" value="30124" readonly="readonly" id="cap" class="readonly form-control">
						</div>
					</div>
					<div class="form-field-input col-sm-4 col-xs-12">
					  	<label for="nazione">Nazione</label>
						<div class="form-field">
						
						  
							<span id="nazioneText">ITALIA</span>
						  
						  
						
						</div>
						<div class="form-field">
							<select name="corrispondenza.nazione" onchange="checkNazione()" id="nazioneSelect" style="display:none;" class="form-control"><option value="">ITALIA</option>
								
									<option value="676">ABU DHABI</option>
								
									<option value="905">AFGHANISTAN</option>
								
									<option value="846">AFRICA DEL SUD OVEST - NAMIBIA</option>
								
									<option value="833">AFRICA FRANCESE</option>
								
									<option value="801">AFRICA SPAGNOLA</option>
								
									<option value="677">AJMAN</option>
								
									<option value="658">ALBANIA</option>
								
									<option value="803">ALGERIA</option>
								
									<option value="712">AMERICA BRITANNICA</option>
								
									<option value="955">AMERICAN SAMOA</option>
								
									<option value="639">ANDORRA</option>
								
									<option value="849">ANGOLA</option>
								
									<option value="744">ANTARTIDE</option>
								
									<option value="739">ANTIGUA</option>
								
									<option value="908">ARABIA SAUDITA</option>
								
									<option value="737">ARGENTINA</option>
								
									<option value="781">ARMENIA</option>
								
									<option value="641">ARUBA</option>
								
									<option value="666">ASCENSION</option>
								
									<option value="950">AUSTRALIA</option>
								
									<option value="628">AUSTRIA</option>
								
									<option value="780">AZERBAIGIAN</option>
								
									<option value="815">AZZORRE ISOLE</option>
								
									<option value="728">BAHAMA</option>
								
									<option value="940">BAHREIN</option>
								
									<option value="943">BANGLADESH</option>
								
									<option value="718">BARBADOS</option>
								
									<option value="602">BELGIO</option>
								
									<option value="704">BELIZE</option>
								
									<option value="822">BENIN</option>
								
									<option value="729">BERMUDA</option>
								
									<option value="918">BHUTAN</option>
								
									<option value="764">BIELORUSSIA</option>
								
									<option value="734">BOLIVIA</option>
								
									<option value="784">BONAIRE SAINT EUSTATIUS AND SABA</option>
								
									<option value="694">BOSNIA ERZEGOVINA</option>
								
									<option value="841">BOTSWANA</option>
								
									<option value="732">BRASILE</option>
								
									<option value="944">BRUNEI</option>
								
									<option value="657">BULGARIA</option>
								
									<option value="810">BURKINA FASO</option>
								
									<option value="830">BURUNDI</option>
								
									<option value="924">CAMBOGIA (CAMPUCEA)</option>
								
									<option value="824">CAMERUN</option>
								
									<option value="612">CAMPIONE D'ITALIA</option>
								
									<option value="702">CANADA</option>
								
									<option value="709">CAYMAN</option>
								
									<option value="654">CECOSLOVACCHIA</option>
								
									<option value="669">CHAFARINAS</option>
								
									<option value="812">CIAD</option>
								
									<option value="733">CILE</option>
								
									<option value="939">CIPRO</option>
								
									<option value="636">CITTA DEL VATICANO</option>
								
									<option value="662">CLIPPERTON</option>
								
									<option value="725">COLOMBIA</option>
								
									<option value="858">COMORE</option>
								
									<option value="829">CONGO REPUBBLICA DEMOCRATICA</option>
								
									<option value="828">CONGO REPUBBLICA POPOLARE</option>
								
									<option value="933">COREA DEL NORD</option>
								
									<option value="934">COREA DEL SUD</option>
								
									<option value="819">COSTA D'AVORIO</option>
								
									<option value="716">COSTARICA</option>
								
									<option value="761">CROAZIA</option>
								
									<option value="719">CUBA</option>
								
									<option value="785">CURACAO</option>
								
									<option value="609">DANIMARCA</option>
								
									<option value="708">DOMINICA</option>
								
									<option value="678">DUBAI</option>
								
									<option value="730">ECUADOR</option>
								
									<option value="806">EGITTO</option>
								
									<option value="714">EL SALVADOR</option>
								
									<option value="848">ERITREA</option>
								
									<option value="690">ESTONIA</option>
								
									<option value="832">ETIOPIA</option>
								
									<option value="615">FALKLAND</option>
								
									<option value="929">FILIPPINE</option>
								
									<option value="625">FINLANDIA</option>
								
									<option value="601">FRANCIA</option>
								
									<option value="679">FUIJAYRAH</option>
								
									<option value="827">GABON</option>
								
									<option value="814">GAMBIA</option>
								
									<option value="699">GAZA (TERRITORIO DI)</option>
								
									<option value="767">GEORGIA</option>
								
									<option value="820">GHANA</option>
								
									<option value="741">GIAMAICA</option>
								
									<option value="935">GIAPPONE</option>
								
									<option value="611">GIBILTERRA</option>
								
									<option value="859">GIBUTI</option>
								
									<option value="907">GIORDANIA</option>
								
									<option value="667">GOUGH</option>
								
									<option value="632">GRECIA</option>
								
									<option value="705">GRENADA</option>
								
									<option value="703">GROENLANDIA</option>
								
									<option value="643">GUADALUPA</option>
								
									<option value="626">GUAM</option>
								
									<option value="711">GUATEMALA</option>
								
									<option value="740">GUAYANA FRANCESE</option>
								
									<option value="617">GUERNSEY C.I.</option>
								
									<option value="816">GUINEA</option>
								
									<option value="851">GUINEA BISSAU</option>
								
									<option value="826">GUINEA EQUATORIALE</option>
								
									<option value="727">GUYANA</option>
								
									<option value="720">HAITI</option>
								
									<option value="713">HONDURAS</option>
								
									<option value="945">HONG KONG</option>
								
									<option value="916">INDIA</option>
								
									<option value="927">INDONESIA</option>
								
									<option value="904">IRAN</option>
								
									<option value="903">IRAQ</option>
								
									<option value="608">IRLANDA</option>
								
									<option value="621">ISLANDA</option>
								
									<option value="619">ISOLA DI MAN</option>
								
									<option value="613">ISOLE CANARIE</option>
								
									<option value="622">ISOLE CAROLINE</option>
								
									<option value="685">ISOLE CHAGOS</option>
								
									<option value="850">ISOLE DEL CAPO VERDE</option>
								
									<option value="620">ISOLE FAEROER</option>
								
									<option value="960">ISOLE FIGI</option>
								
									<option value="646">ISOLE MARSHALL</option>
								
									<option value="742">ISOLE VERGINI BRITANNICHE</option>
								
									<option value="971">ISOLE WAKE</option>
								
									<option value="906">ISRAELE</option>
								
									<option value="618">JERSEY</option>
								
									<option value="659">JUGOSLAVIA</option>
								
									<option value="769">KAZAKISTAN</option>
								
									<option value="835">KENYA</option>
								
									<option value="782">KIRGHIZISTAN</option>
								
									<option value="966">KIRIBATI</option>
								
									<option value="909">KUWAIT</option>
								
									<option value="921">LAOS</option>
								
									<option value="831">LESOTHO</option>
								
									<option value="691">LETTONIA</option>
								
									<option value="901">LIBANO</option>
								
									<option value="818">LIBERIA</option>
								
									<option value="805">LIBIA</option>
								
									<option value="637">LIECHTENSTEIN</option>
								
									<option value="692">LITUANIA</option>
								
									<option value="603">LUSSEMBURGO</option>
								
									<option value="930">MACAO</option>
								
									<option value="695">MACEDONIA</option>
								
									<option value="840">MADAGASCAR</option>
								
									<option value="674">MADEIRA</option>
								
									<option value="839">MALAWI</option>
								
									<option value="925">MALAYSIA</option>
								
									<option value="928">MALDIVE</option>
								
									<option value="809">MALI</option>
								
									<option value="631">MALTA</option>
								
									<option value="648">MARIANNE (ISOLE)</option>
								
									<option value="802">MAROCCO</option>
								
									<option value="642">MARTINICA</option>
								
									<option value="808">MAURITANIA</option>
								
									<option value="844">MAURIZIO</option>
								
									<option value="665">MAYOTTE</option>
								
									<option value="670">MELILLA</option>
								
									<option value="710">MESSICO</option>
								
									<option value="644">MICRONESIA</option>
								
									<option value="634">MIDWAY ISLANDS</option>
								
									<option value="765">MOLDAVIA</option>
								
									<option value="638">MONACO</option>
								
									<option value="931">MONGOLIA</option>
								
									<option value="698">MONTENEGRO</option>
								
									<option value="635">MONTSERRAT</option>
								
									<option value="852">MOZAMBICO</option>
								
									<option value="919">MYANMAR</option>
								
									<option value="961">NAURU</option>
								
									<option value="937">NEPAL</option>
								
									<option value="715">NICARAGUA</option>
								
									<option value="811">NIGER</option>
								
									<option value="823">NIGERIA</option>
								
									<option value="633">NIUE - SAVAGE</option>
								
									<option value="623">NORVEGIA</option>
								
									<option value="684">NUOVA CALEDONIA</option>
								
									<option value="951">NUOVA ZELANDA</option>
								
									<option value="952">OCEANIA BRITANNICA</option>
								
									<option value="958">OCEANIA DEGLI STATI UNITI</option>
								
									<option value="953">OCEANIA FRANCESE</option>
								
									<option value="956">OCEANIA NEOZELANDESE</option>
								
									<option value="912">OMAN</option>
								
									<option value="604">PAESI BASSI O OLANDA</option>
								
									<option value="915">PAKISTAN</option>
								
									<option value="279">PALESTINA, TERRITORI AUTONOMI</option>
								
									<option value="717">PANAMA</option>
								
									<option value="963">PAPUA E NUOVA GUINEA</option>
								
									<option value="735">PARAGUAY</option>
								
									<option value="671">PENON DE ALHUCEMAS</option>
								
									<option value="672">PENON DE VELEZ DE LA GOMERA</option>
								
									<option value="731">PERU'</option>
								
									<option value="653">POLONIA</option>
								
									<option value="629">PORTOGALLO</option>
								
									<option value="649">PORTORICO</option>
								
									<option value="941">QATAR</option>
								
									<option value="680">RAS EL KHAIMAN</option>
								
									<option value="607">REGNO UNITO</option>
								
									<option value="651">REPUBBLICA CECA</option>
								
									<option value="825">REPUBBLICA CENTRAFRICANA</option>
								
									<option value="775">REPUBBLICA DEL KOSOVO</option>
								
									<option value="645">REPUBBLICA DI PALAU</option>
								
									<option value="606">REPUBBLICA DI SAN MARINO</option>
								
									<option value="721">REPUBBLICA DOMINICANA</option>
								
									<option value="605">REPUBBLICA FED.DI GERMANIA</option>
								
									<option value="932">REPUBBLICA POPOLARE CINESE</option>
								
									<option value="843">REPUBBLICA SUDAFRICANA</option>
								
									<option value="656">ROMANIA</option>
								
									<option value="845">RUANDA</option>
								
									<option value="762">RUSSIA</option>
								
									<option value="860">S.ELENA</option>
								
									<option value="614">SAHARA OCCIDENTALE</option>
								
									<option value="706">SAINT LUCIA</option>
								
									<option value="707">SAINT VINCENT E GRENADINE</option>
								
									<option value="964">SALOMONE</option>
								
									<option value="954">SAMOA OCCIDENTALE</option>
								
									<option value="853">SAO TOME' E PRINCIPE</option>
								
									<option value="854">SEICELLE</option>
								
									<option value="813">SENEGAL</option>
								
									<option value="697">SERBIA</option>
								
									<option value="681">SHARJAH</option>
								
									<option value="817">SIERRA LEONE</option>
								
									<option value="926">SINGAPORE</option>
								
									<option value="783">SINT MAARTEN (DUTCH PART)</option>
								
									<option value="902">SIRIA</option>
								
									<option value="652">SLOVACCHIA</option>
								
									<option value="693">SLOVENIA</option>
								
									<option value="834">SOMALIA</option>
								
									<option value="630">SPAGNA</option>
								
									<option value="917">SRI LANKA</option>
								
									<option value="616">ST. KITTS E NEVIS</option>
								
									<option value="661">ST. MARTIN SETTENTRIONALE</option>
								
									<option value="683">ST. PIERRE E MIQUELON</option>
								
									<option value="701">STATI UNITI D'AMERICA</option>
								
									<option value="807">SUDAN</option>
								
									<option value="738">SURINAME</option>
								
									<option value="624">SVEZIA</option>
								
									<option value="627">SVIZZERA</option>
								
									<option value="847">SWAZILAND - NGWANE</option>
								
									<option value="772">TAGIKISTAN</option>
								
									<option value="936">TAIWAN</option>
								
									<option value="837">TANZANIA</option>
								
									<option value="861">TERRIT.BRIT.OCC.</option>
								
									<option value="743">TERRITORI FRANCESI DEL SUD</option>
								
									<option value="920">THAILANDIA</option>
								
									<option value="946">TIMOR</option>
								
									<option value="821">TOGO</option>
								
									<option value="675">TOKELAU</option>
								
									<option value="962">TONGA</option>
								
									<option value="723">TRINIDAD E TOBAGO</option>
								
									<option value="668">TRISTAN DE CUNHA</option>
								
									<option value="804">TUNISIA</option>
								
									<option value="938">TURCHIA</option>
								
									<option value="777">TURKMENISTAN</option>
								
									<option value="640">TURKS E CAICOS</option>
								
									<option value="965">TUVALU</option>
								
									<option value="763">UCRAINA</option>
								
									<option value="836">UGANDA</option>
								
									<option value="682">UMM AL QAIWAIN</option>
								
									<option value="655">UNGHERIA</option>
								
									<option value="736">URUGUAY</option>
								
									<option value="771">UZBEKISTAN</option>
								
									<option value="957">VANUATU</option>
								
									<option value="726">VENEZUELA</option>
								
									<option value="660">VERGINI AMERICANE (ISOLE)</option>
								
									<option value="922">VIETNAM</option>
								
									<option value="647">WALLIS E FUTUNA</option>
								
									<option value="913">YEMEN</option>
								
									<option value="838">ZAMBIA</option>
								
									<option value="842">ZIMBABWE</option></select>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="padding-top10 padding-bottom20">
			<div class="col-xs-12 margin-bottom10">
				<span>
					<strong>
					   	<input type="checkbox" name="presaVisioneDocumenti" value="on" id="presaVisioneDocumenti">
				  		Dichiaro di aver preso visione della documentazione presente nel box "Documenti" posto alla sinistra di questa sezione.
				  	</strong>
			  	</span>
			</div>
		</div>
	</form>
</div>
<form id="formAnnulla" method="post" action="/WEBHT/carte/prelievoCardless.do"></form>
<div class="pull-right">
	<input type="button" name="annulla" tabindex="3" value="Annulla" onclick="$('#formAnnulla').submit();" class="btn btn-primary">		
	<input type="button" name="avanti" tabindex="2" value="Avanti" onclick="$('#formVerificaFirma').submit();" class="btn btn-primary">
</div>
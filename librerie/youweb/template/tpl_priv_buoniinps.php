					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							15/03/2017	
						</div>
					</div>
					
					
					
					





<script>
		$(document).ready(function(){
			$(".dropDown").change(function(e){
				var pre=$(this).data('previous');
				var newVal=$(this).val();
				
				$('#keyVal').val(pre);
				$('#updateVal').val(newVal);
				$('#btnReplaceTaglio').click();
			});
			
			$(".dropDown").on("focus",function(){  
    			 $(this).data('previous',$(this).val());
			});
		});

		function btnUpdateAddVoucherClick(p){
			if(p=='x')
				$('#quantitaText').val(1);
			else{
				if(checkInput()){
					var att=parseInt($('#quantitaText').val());
					var newValue=att+p;
					$('#quantitaText').val(newValue);
				}
				else
					$('#quantitaText').val(1);
			}
		}
		
		function resetInput(){
			$('#dropDownTaglio').prop('selectedIndex', 0);
			$('#quantitaText').attr('value',1);	
		}
		
		function resetInputWithHide(){
			$('#dropDownTaglio').prop('selectedIndex', 0);
			$('#quantitaText').attr('value',1);
			$('#divAggiungi').hide();
		}
		
		function aggiungiVoucher(){
			if($('#divAggiungi').is(':hidden'))
				$('#divAggiungi').show();
			else{
				var input=$('#quantitaText').val();
			
				if(checkInput() && input>0)   
					$('#btnAdd').click();
				else  
			   		alert("Insert a correct number"); 
			}	
		}
		
		function btnUpdateListVoucherClick(q,taglio){
			$('#keyVal').val(taglio);
			$('#updateVal').val(q);
			$('#btnUpdate').click();
		}
		function btnDeleteClick(taglio){
			$('#keyVal').val(taglio);
			$('#btnDelete').click();
		}
		function txtQuantTextChange(q,taglio){
			$('#keyVal').val(taglio);
			$('#updateVal').val(q);
			$('#btnReplace').click();
		
		}
		function checkInput(){
			var input=$('#quantitaText').val();
			var ckeck=isNaN(input);
			return !ckeck;
		}
		
</script>
	
<form id="formBuoniInps" method="post" action="/WEBHT/pagamenti/buoniInps.do" class="form-horizontal"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="009a69e58dea5925cea9beca8d22b201"></div>
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
		
			
			
				<div class="hidden-print hidden-xxs flag info">&nbsp;</div>
			
		
		
			
		
		
			
		
			
				
 					<span>Voucher Inps</span>
 					
				
 					
 					<span class="hidden-xs">:&nbsp; compilazione</span>
				
				
				
				
					
				
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>
		








	


		







		<div class="section">
			<h3 class="titleSection">
				Selezione Rapporto
			</h3>
			




  






	
	
		
	








<div class="selezioneCC tabellaSelezioneCC">

	
		<div class="CCselezionato clearfix">
			<!-- C'è anche la sezione saldo -->
			
				<div class="col-sm-6 col-xs-12">
				
					<span class="col-xs-4 col-xs-4 hide" id="labelIntestatario">
						Intestato a:
					</span>
					<span class="col-xs-10" id="intestazione">
 								Oes Nalgiocdgtus Gr Iaeaanc 		
							
							</span>
					<span class="col-xs-4" id="conto">Conto corrente 
									
										
											
											
												

											
										
									
									
								</span>
				    <span class="col-xs-6" id="numero">00585163</span>
				    <span class="col-xs-4">
				    	Filiale:
				    </span>
				    <span class="col-xs-6" id="agenzia">VERONA AG. 3&nbsp;-&nbsp; 
									
									
										0004
									
								</span>
				</div>
				<div class="col-xs-12 col-sm-6" id="numeri">
					<span id="disponibile"> 
						
						Saldo disponibile:
						
						
						
							
								<strong>
														99.999.988.859,58
														EUR
													</strong>
							
							
						
						<!-- Multivaluta Visualizza -->
						
						<!-- Multivaluta Visualizza fine -->
					</span>
					<span id="contabile"> 
						Saldo contabile: 
						
							
								<strong>
														99.999.996.137,57
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
						
							
							
								
									
									
										
											
											
												<td class="hidden sorting_1" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|0004|000400585163" checked="checked">
												</td>
											
										
									
								
							
						

						

							<td headers="tipoRapporto">Conto corrente 
									
										
											
											
												

											
										
									
									
								</td>
							<td headers="ccRapporto">00585163</td>
							<td headers="filialeRapporto" class="hidden-xs">VERONA AG. 3&nbsp;-&nbsp; 
									
									
										0004
									
								</td>
							<td headers="intestazioneRapporto">
 								Oes Nalgiocdgtus Gr Iaeaanc 		
							
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
														99.999.996.137,57
														<span>EUR</span>
													</td>
												
												
											
											
												
													<td headers="saldoDisponibile" class="oRight  hidden-xxs">
														99.999.988.859,58
														<span class="hidden-xs">EUR</span>
													</td>
												
												
											
										
									
								
								
								<!-- Multivaluta -->
								
								<!-- Multivaluta fine -->
							
							<td class="hidden">&nbsp;</td>
						</tr><tr role="row" class="even">
						
							
							
								
									
									
										
											
											
												<td class="hidden sorting_1" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|0004|000400002700">
												</td>
											
										
									
								
							
						

						

							<td headers="tipoRapporto">Conto corrente 
									
										
											
											
												

											
										
									
									
								</td>
							<td headers="ccRapporto">00002700</td>
							<td headers="filialeRapporto" class="hidden-xs">VERONA AG. 3&nbsp;-&nbsp; 
									
									
										0004
									
								</td>
							<td headers="intestazioneRapporto">
 								Didugt L. Caetntaosca 		
							
							</td>
							<td headers="divisaSaldoDisponibile" class="hidden">
								
							</td>
							<td headers="divisaSaldoContabile" class="hidden">
								
							</td>
							
							
							
								
									
									
										
											<td align="center">Non disponibile</td>
											<td class="hidden"></td>
											<td class="hidden"></td>
											<td class="hidden"></td>
										
										
									
								
								
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
	
		
		<div class="section clearfix">
			<h3 class="titleSection">
				<b> Inserisci Quantit&agrave; e Taglio </b>
			</h3>
			
			<div class="bs-example">
				<div class="form-group clearfix">
					<!-- <div class="container"> -->
						<!-- CAMPI DI AGGIORNAMENTO/CANCELLAZIONE -->
						<input type="hidden" name="key" value="0" id="keyVal">
						<input type="hidden" name="updateVal" value="0" id="updateVal">
						
						<!-- SEZIONE ELENCO VOUCHER -->	
							
						
						
						
	
						<!-- SEZIONE AGGIUNTA NUOVO VOUCHER -->
						
							<div class="row margin-top10" id="divAggiungi">	
								<div class=" floatl margin-top5 clear-padding col-sm-1"> 
							 		Quantit&agrave;:
						 		</div>
						 		
						 		<div class="floatl margin-bottom10 clear-padding col-sm-5">
								 	<span class="vincola_box" onclick="btnUpdateAddVoucherClick('x')">X</span>
							        <input type="text" name="quantita" value="1" id="quantitaText" class="floatl form-control wauto vincola margin-top-xs-0">        
							        <span class="vincola_box" onclick="btnUpdateAddVoucherClick(1)">1</span>
							        <span class="vincola_box" onclick="btnUpdateAddVoucherClick(5)">5</span>
							        <span class="vincola_box" onclick="btnUpdateAddVoucherClick(10)">10</span>
							        <span class="vincola_box hidden-xs" onclick="btnUpdateAddVoucherClick(50)">50</span>
						        </div>
						        
						        <div class="floatl margin-top5 margin-top-xs-10 clear-padding col-sm-1">
						        	Taglio:
						        </div>
						        
						        <div class="floatl margin-top5 clear-padding col-sm-2">
							        <select name="taglio" id="dropDownTaglio" style="width:100px" class="form-control">
							        	<option value="0" selected="selected">0</option>
										<option value="10">10</option>
										<option value="20">20</option>
										<option value="30">30</option>
										<option value="40">40</option>
										<option value="50">50</option>
										<option value="60">60</option>
										<option value="70">70</option>
										<option value="80">80</option>
										<option value="90">90</option>
										<option value="100">100</option>
										<option value="110">110</option>
										<option value="120">120</option>
										<option value="130">130</option>
										<option value="140">140</option>
										<option value="150">150</option>
										<option value="160">160</option>
										<option value="170">170</option>
										<option value="180">180</option>
										<option value="190">190</option>
										<option value="200">200</option>
										<option value="210">210</option>
										<option value="220">220</option>
										<option value="230">230</option>
										<option value="240">240</option>
										<option value="250">250</option>
										<option value="260">260</option>
										<option value="270">270</option>
										<option value="280">280</option>
										<option value="290">290</option>
										<option value="300">300</option>
										<option value="310">310</option>
										<option value="320">320</option>
										<option value="330">330</option>
										<option value="340">340</option>
										<option value="350">350</option>
										<option value="360">360</option>
										<option value="370">370</option>
										<option value="380">380</option>
										<option value="390">390</option>
										<option value="400">400</option>
										<option value="410">410</option>
										<option value="420">420</option>
										<option value="430">430</option>
										<option value="440">440</option>
										<option value="450">450</option>
										<option value="460">460</option>
										<option value="470">470</option>
										<option value="480">480</option>
										<option value="490">490</option>
										<option value="500">500</option>
										</select> 
						        </div>
						       
			<div class="floatl margin-top5 margin-top-xs-10 margin-left-xs-10 clear-padding col-sm-1">
			
			
			
				<span onclick="resetInput()">
					<a href="#">
			 			<img src="/HT/fe/img/i_cancella.png">								 
					</a>
				</span>
				
			</div>
							</div>
						<!-- </div> -->  
					
					<div class="row margin-top10">  
						<div class="floatl margin-top5  col-xs-12"> 
							<span onclick="aggiungiVoucher()">
								
								<a href="#" style="text-decoration: none;">
								<!--img src="/HT/IMAGES/i_plus.gif"-->&nbsp;
								<span class="vincola_box vincola_boxSingle">+</span> 
								</a>
								<a href="#">
									Aggiungi un altro Voucher	
								</a>
							</span>
							
						</div>
					</div>
				</div>
			</div>	
			
		</div>		
	</div>
		
	
	
	
	<!-- SEZIONE SUBMIT -->
	<div class="pull-right margin-bottom20">
		<input type="submit" name="addVoucher" value="Submit" id="btnAdd" class="visibility: hidden">
		<input type="submit" name="updateVoucher" value="Submit" id="btnUpdate" class="visibility: hidden">
		<input type="submit" name="replaceValue" value="Submit" id="btnReplace" class="visibility: hidden">
		<input type="submit" name="deleteVoucher" value="Submit" id="btnDelete" class="visibility: hidden">
		<input type="submit" name="replaceTaglio" value="Submit" id="btnReplaceTaglio" class="visibility: hidden">
		
		<input type="submit" name="annulla" value="Annulla" class="btn btn-primary" alt="Annulla">
		<input type="submit" name="avanti" value="Avanti" class="btn btn-primary" alt="Avanti">
	</div>
</form>
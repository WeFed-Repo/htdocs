<style>
#titoliPrefRest .col-xs-12 .col-xs-6:last-child {
    padding-left: 4px;
}

#titoliPrefRest .col-xs-12 .col-xs-6:first-child {
    padding-right: 4px;
}
</style>

<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage" />
						<div class="pull-right">
							  
							<fmt:formatDate type="date" value="${now}" pattern="${fmtdate}" />	
						</div>
					</div>
<div class="riquadro clearfix"> 				  
						
						
						



<form id="formInvestimenti" method="post" action="/WEBHT/investimenti/titoliDossier.do">
	
	
	



  



<div class="section clearfix">
	


<script type="text/javascript">	
$(function(){
	var submitOnClick = false;

    submitOnClick = true;


	CCselectionInit(submitOnClick, false, false);

	var str = $('#intestazione').text();
	if($.trim(str).length>26){
		$('#intestazione').removeClass('col-xs-4');
		$('#intestazione').addClass('col-xs-8');
		$('#labelIntestatario').addClass('hide');
	}
});
function isDossierInformativo() {return false;}
</script>

	
		
	
	
	<h3 class="titleSection">








		
			Seleziona Dossier
		
		
		

</h3>


	
	
	<div class="selezioneCC tabellaSelezioneCC">
		<div class="cartaSelezionata clearfix">
			<div class="col-xs-12">
				<span class="col-sm-2 col-xs-12 clear-paddingImportant" id="labelIntestatario">
					Intestazione:
				</span> 
				<span id="intestazione"	class="col-xs-6 clear-paddingImportant"> 
					Tallo Mauro Luca
				</span>
				<div class="col-xs-6 clear-paddingImportant">
					<span class="col-sm-4 col-xs-12 clear-paddingImportant"> 
						Filiale
				  	</span> 
				  	<span id="filiale" class="col-sm-6 col-xs-12 clear-paddingImportant">
						SEDE DI LODI - 2001
					</span> 
					<span class="col-sm-4 col-xs-12 clear-paddingImportant"> C/C </span> 
					<span class="col-sm-6 col-xs-12 bold clear-paddingImportant"> 
						00174456
 
						 
					</span>
				</div>
				<div class="col-xs-6 clear-paddingImportant">
					<span class="col-sm-4 col-xs-12 clear-paddingImportant">
						Dossier </span> 
						<span id="numero" class="col-sm-6 col-xs-12 clear-paddingImportant bold">
							000000106440 
						</span> 
						<span class="col-sm-4 col-xs-12 clear-paddingImportant"> 
							Saldo al
						</span> 
						<span class=" col-sm-6 col-xs-12 clear-paddingImportant">
					 		<select class="form-control" class="form-control wauto">
								
									<option value="23/05/2017">
										23/05/2017&nbsp;&nbsp;&nbsp;&nbsp;999.999.861.415,24&nbsp;&euro;
									</option>
								
									<option value="24/05/2017">
										24/05/2017&nbsp;&nbsp;&nbsp;&nbsp;999.999.861.415,24&nbsp;&euro;
									</option>
								
									<option value="25/05/2017">
										25/05/2017&nbsp;&nbsp;&nbsp;&nbsp;999.999.861.415,24&nbsp;&euro;
									</option>
								
									<option value="26/05/2017">
										26/05/2017&nbsp;&nbsp;&nbsp;&nbsp;999.999.861.415,24&nbsp;&euro;
									</option>
								
									<option value="29/05/2017">
										29/05/2017&nbsp;&nbsp;&nbsp;&nbsp;999.999.861.415,24&nbsp;&euro;
									</option>
								
							</select> 
						</span>
				</div>
			</div>
			
				<a href="javascript:void(0);" class="btnSelezioneCC">
					<img src="/HT/IMAGES/nGrafica/ico-select.png" id="btnSelezioneRapporto" title="Seleziona" alt="Seleziona" />
				</a>
			
		</div>

	<div class="table-responsive tabSelezioneCC" style="display: none;">
			<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
				<table class="table table-striped dataTable no-footer" id="DataTables_Table_10" role="grid">
			
					<thead>
						<tr>
							<th class="hidden" >&nbsp;</th>
							<th>Dossier</th>
							<th>Filiale</th>
							<th>Intestazione</th>
							<th>C/C</th>
						</tr>
					</thead>
					<tbody>
						
							<tr>
								
									
										
											<td class="hidden" ><input type="radio" name="chiaveDossier" value="007|2001|000000106440" checked="checked" onclick="submit()" id="chiaveDossier" /></td>
										
										
									
								
								
								<td>000000106440</td>
								<td>SEDE DI LODI - 2001</td>
								<td>TALLO MAURO LUCA</td>
								<td>00174456
</td>
							</tr>
						
							<tr>
								
									
										
											<td class="hidden" ><input type="radio" name="chiaveDossier" value="007|2001|000008318876" onclick="submit()" id="chiaveDossier" /></td>
										
										
									
								
								
								<td>000008318876</td>
								<td>SEDE DI LODI - 2001</td>
								<td>TALLO MAURO LUCA TALLO GIUSEPPINA</td>
								<td>00003610
</td>
							</tr>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</form>



<div id="I_TITDOS" class="jqGridTOLDiv nosort">
	<div id="titoliPrefRest" class="visible-xs" style="margin:5px"><div class="col-xs-12" style="display: block;">
            <h3 id="denominazione">GENERALI ASS. var % n.d.</h3>
            <div class="listaTitoli">
                        <div class="col-xs-6">
                                   <div id="quantita" class="clearfix">
                                               <label class="col-xs-4">Quantità:</label>
                                               <span class="col-xs-8">550,00</span>
                                   </div>
                                   <div id="last" class="clearfix">
                                               <label class="col-xs-4">Mercato:</label>
                                               <span class="col-xs-8">15,03</span>
                                   </div>
                                   <div id="controvaloreMercatoEuro" class="clearfix">
                                               <label class="col-xs-4">Controvalore:</label>
                                               <span class="col-xs-8">8.266,50</span>
                                   </div>
                        </div>
                        <div class="col-xs-6">
                                   <div id="uplPerc" class="clearfix">
                                               <label class="col-xs-4">Upl %:</label>
                                               <span class="col-xs-8 negativo">-14,14</span>
                                   </div>
                                   <div id="prezzoMedioSecco" class="clearfix">
                                               <label class="col-xs-4">P. carico:</label>
                                               <span class="col-xs-8">17,51</span>
                                   </div>
                                   <div id="uplEuro" class="clearfix">
                                               <label class="col-xs-4">Upl €:</label>
                                               <span class="col-xs-8 negativo">-1.361,71</span>
                                   </div>
            
                        </div>
            </div>
</div><div class="col-xs-12 boxtotale" style="display: block;">
            <h3 id="denominazione">TOTALE AZIONI ITALIA:</h3>
            <div class="listaTitoli">
                        <div class="col-xs-6">
                                   
                                   <div id="last" class="clearfix"><label class="col-xs-8">Totale carico</label><span class="col-xs-4 ">9.628,21</span></div>
                                   <div id="controvaloreMercatoEuro" class="clearfix"><label class="col-xs-8">Totale mercato</label><span class="col-xs-4 ">8.266,50</span></div>
                        </div>
                        <div class="col-xs-6">
                                   <div id="uplPerc" class="clearfix">
                                               <label class="col-xs-4">Upl %:</label>
                                               <span class="col-xs-8 negativo">-14,14</span>
                                   </div>
                                   
                                   <div id="uplEuro" class="clearfix">
                                               <label class="col-xs-4">Upl €:</label>
                                               <span class="col-xs-8 negativo">-1.361,71</span>
                                   </div>
            
                        </div>
            </div>
</div><div class="col-xs-12" style="display: block;">
            <h3 id="denominazione">BAY.MOTOREN WERKE AG ST var % -0.1089</h3>
            <div class="listaTitoli">
                        <div class="col-xs-6">
                                   <div id="quantita" class="clearfix">
                                               <label class="col-xs-4">Quantità:</label>
                                               <span class="col-xs-8">100,00</span>
                                   </div>
                                   <div id="last" class="clearfix">
                                               <label class="col-xs-4">Mercato:</label>
                                               <span class="col-xs-8">82,56</span>
                                   </div>
                                   <div id="controvaloreMercatoEuro" class="clearfix">
                                               <label class="col-xs-4">Controvalore:</label>
                                               <span class="col-xs-8">8.256,00</span>
                                   </div>
                        </div>
                        <div class="col-xs-6">
                                   <div id="uplPerc" class="clearfix">
                                               <label class="col-xs-4">Upl %:</label>
                                               <span class="col-xs-8 negativo">-7,89</span>
                                   </div>
                                   <div id="prezzoMedioSecco" class="clearfix">
                                               <label class="col-xs-4">P. carico:</label>
                                               <span class="col-xs-8">89,63</span>
                                   </div>
                                   <div id="uplEuro" class="clearfix">
                                               <label class="col-xs-4">Upl €:</label>
                                               <span class="col-xs-8 negativo">-707,00</span>
                                   </div>
            
                        </div>
            </div>
</div><div class="col-xs-12" style="display: block;">
            <h3 id="denominazione">BOUYGUES var % -0.1292</h3>
            <div class="listaTitoli">
                        <div class="col-xs-6">
                                   <div id="quantita" class="clearfix">
                                               <label class="col-xs-4">Quantità:</label>
                                               <span class="col-xs-8">300,00</span>
                                   </div>
                                   <div id="last" class="clearfix">
                                               <label class="col-xs-4">Mercato:</label>
                                               <span class="col-xs-8">38,64</span>
                                   </div>
                                   <div id="controvaloreMercatoEuro" class="clearfix">
                                               <label class="col-xs-4">Controvalore:</label>
                                               <span class="col-xs-8">11.592,00</span>
                                   </div>
                        </div>
                        <div class="col-xs-6">
                                   <div id="uplPerc" class="clearfix">
                                               <label class="col-xs-4">Upl %:</label>
                                               <span class="col-xs-8">38,70</span>
                                   </div>
                                   <div id="prezzoMedioSecco" class="clearfix">
                                               <label class="col-xs-4">P. carico:</label>
                                               <span class="col-xs-8">27,86</span>
                                   </div>
                                   <div id="uplEuro" class="clearfix">
                                               <label class="col-xs-4">Upl €:</label>
                                               <span class="col-xs-8">3.234,46</span>
                                   </div>
            
                        </div>
            </div>
</div><div class="col-xs-12" style="display: block;">
            <h3 id="denominazione">ENGIE var % -0.5069</h3>
            <div class="listaTitoli">
                        <div class="col-xs-6">
                                   <div id="quantita" class="clearfix">
                                               <label class="col-xs-4">Quantità:</label>
                                               <span class="col-xs-8">400,00</span>
                                   </div>
                                   <div id="last" class="clearfix">
                                               <label class="col-xs-4">Mercato:</label>
                                               <span class="col-xs-8">14,72</span>
                                   </div>
                                   <div id="controvaloreMercatoEuro" class="clearfix">
                                               <label class="col-xs-4">Controvalore:</label>
                                               <span class="col-xs-8">5.888,00</span>
                                   </div>
                        </div>
                        <div class="col-xs-6">
                                   <div id="uplPerc" class="clearfix">
                                               <label class="col-xs-4">Upl %:</label>
                                               <span class="col-xs-8 negativo">-11,99</span>
                                   </div>
                                   <div id="prezzoMedioSecco" class="clearfix">
                                               <label class="col-xs-4">P. carico:</label>
                                               <span class="col-xs-8">16,73</span>
                                   </div>
                                   <div id="uplEuro" class="clearfix">
                                               <label class="col-xs-4">Upl €:</label>
                                               <span class="col-xs-8 negativo">-802,30</span>
                                   </div>
            
                        </div>
            </div>
</div><div class="col-xs-12" style="display: block;">
            <h3 id="denominazione">ETFS LONG GBP SHORT EUR var % 0.0742</h3>
            <div class="listaTitoli">
                        <div class="col-xs-6">
                                   <div id="quantita" class="clearfix">
                                               <label class="col-xs-4">Quantità:</label>
                                               <span class="col-xs-8">450,00</span>
                                   </div>
                                    <div id="last" class="clearfix">
                                               <label class="col-xs-4">Mercato:</label>
                                               <span class="col-xs-8">47,18</span>
                                   </div>
                                   <div id="controvaloreMercatoEuro" class="clearfix">
                                               <label class="col-xs-4">Controvalore:</label>
                                               <span class="col-xs-8">21.231,00</span>
                                   </div>
                        </div>
                        <div class="col-xs-6">
                                   <div id="uplPerc" class="clearfix">
                                               <label class="col-xs-4">Upl %:</label>
                                               <span class="col-xs-8 negativo">-7,64</span>
                                   </div>
                                   <div id="prezzoMedioSecco" class="clearfix">
                                               <label class="col-xs-4">P. carico:</label>
                                               <span class="col-xs-8">51,08</span>
                                   </div>
                                   <div id="uplEuro" class="clearfix">
                                               <label class="col-xs-4">Upl €:</label>
                                               <span class="col-xs-8 negativo">-1.756,50</span>
                                   </div>
            
                        </div>
            </div>
</div><div class="col-xs-12 boxtotale" style="display: block;">
            <h3 id="denominazione">TOTALE AZIONI ESTERO (€):</h3>
            <div class="listaTitoli">
                        <div class="col-xs-6">
                                   
                                   <div id="last" class="clearfix"><label class="col-xs-8">Totale carico</label><span class="col-xs-4 ">46.998,34</span></div>
                                   <div id="controvaloreMercatoEuro" class="clearfix"><label class="col-xs-8">Totale mercato</label><span class="col-xs-4 ">46.967,00</span></div>
                        </div>
                        <div class="col-xs-6">
                                   <div id="uplPerc" class="clearfix">
                                               <label class="col-xs-4">Upl %:</label>
                                               <span class="col-xs-8 negativo">-0,07</span>
                                   </div>
                                   
                                   <div id="uplEuro" class="clearfix">
                                               <label class="col-xs-4">Upl €:</label>
                                               <span class="col-xs-8 negativo">-31,34</span>
                                   </div>
            
                        </div>
            </div>
</div><div class="col-xs-12" style="display: block;">
            <h3 id="denominazione">BTP-1NV23         9% var % -0.2042</h3>
            <div class="listaTitoli">
                        <div class="col-xs-6">
                                   <div id="quantita" class="clearfix">
                                               <label class="col-xs-4">Quantità:</label>
                                               <span class="col-xs-8">329,12</span>
                                   </div>
                                   <div id="last" class="clearfix">
                                               <label class="col-xs-4">Mercato:</label>
                                               <span class="col-xs-8">146,61</span>
                                   </div>
                                   <div id="controvaloreMercatoEuro" class="clearfix">
                                               <label class="col-xs-4">Controvalore:</label>
                                               <span class="col-xs-8">482,52</span>
                                   </div>
                        </div>
                        <div class="col-xs-6">
                                   <div id="uplPerc" class="clearfix">
                                               <label class="col-xs-4">Upl %:</label>
                                               <span class="col-xs-8">9,98</span>
                                   </div>
                                   <div id="prezzoMedioSecco" class="clearfix">
                                               <label class="col-xs-4">P. carico:</label>
                                               <span class="col-xs-8">133,30</span>
                                   </div>
                                   <div id="uplEuro" class="clearfix">
                                               <label class="col-xs-4">Upl €:</label>
                                               <span class="col-xs-8">43,79</span>
                                   </div>
            
                        </div>
            </div>
</div><div class="col-xs-12" style="display: block;">
            <h3 id="denominazione">MEDIOBANCA TF 5,75% AP23 LT2 EUR var % -0.0859</h3>
            <div class="listaTitoli">
                        <div class="col-xs-6">
                                   <div id="quantita" class="clearfix">
                                               <label class="col-xs-4">Quantità:</label>
                                               <span class="col-xs-8">33.000,00</span>
                                   </div>
                                   <div id="last" class="clearfix">
                                               <label class="col-xs-4">Mercato:</label>
                                               <span class="col-xs-8">116,31</span>
                                   </div>
                                   <div id="controvaloreMercatoEuro" class="clearfix">
                                               <label class="col-xs-4">Controvalore:</label>
                                               <span class="col-xs-8">38.382,30</span>
                                   </div>
                        </div>
                        <div class="col-xs-6">
                                   <div id="uplPerc" class="clearfix">
                                               <label class="col-xs-4">Upl %:</label>
                                               <span class="col-xs-8">0,37</span>
                                   </div>
                                   <div id="prezzoMedioSecco" class="clearfix">
                                               <label class="col-xs-4">P. carico:</label>
                                               <span class="col-xs-8">115,88</span>
                                   </div>
                                    <div id="uplEuro" class="clearfix">
                                               <label class="col-xs-4">Upl €:</label>
                                               <span class="col-xs-8">143,31</span>
                                   </div>
            
                        </div>
            </div>
</div><div class="col-xs-12 boxtotale" style="display: block;">
            <h3 id="denominazione">TOTALE OBBLIGAZIONI ITALIA:</h3>
            <div class="listaTitoli">
                        <div class="col-xs-6">
                                   
                                   <div id="last" class="clearfix"><label class="col-xs-8">Totale carico</label><span class="col-xs-4 ">38.677,72</span></div>
                                   <div id="controvaloreMercatoEuro" class="clearfix"><label class="col-xs-8">Totale mercato</label><span class="col-xs-4 ">38.864,82</span></div>
                        </div>
                        <div class="col-xs-6">
                                   <div id="uplPerc" class="clearfix">
                                               <label class="col-xs-4">Upl %:</label>
                                               <span class="col-xs-8">0,48</span>
                                   </div>
                                   
                                   <div id="uplEuro" class="clearfix">
                                               <label class="col-xs-4">Upl €:</label>
                                               <span class="col-xs-8">187,10</span>
                                   </div>
            
                        </div>
            </div>
</div><div class="col-xs-12" style="display: block;">
            <h3 id="denominazione">BEI TF 10% GN18 BRL var % -0.767</h3>
            <div class="listaTitoli">
                        <div class="col-xs-6">
                                   <div id="quantita" class="clearfix">
                                               <label class="col-xs-4">Quantità:</label>
                                               <span class="col-xs-8">80.000,00</span>
                                   </div>
                                   <div id="last" class="clearfix">
                                               <label class="col-xs-4">Mercato:</label>
                                               <span class="col-xs-8">102,21</span>
                                   </div>
                                   <div id="controvaloreMercatoEuro" class="clearfix">
                                               <label class="col-xs-4">Controvalore:</label>
                                               <span class="col-xs-8">81.768,00</span>
                                   </div>
                        </div>
                        <div class="col-xs-6">
                                   <div id="uplPerc" class="clearfix">
                                               <label class="col-xs-4">Upl %:</label>
                                               <span class="col-xs-8">0,42</span>
                                   </div>
                                   <div id="prezzoMedioSecco" class="clearfix">
                                               <label class="col-xs-4">P. carico:</label>
                                               <span class="col-xs-8">101,78</span>
                                   </div>
                                   <div id="uplEuro" class="clearfix">
                                               <label class="col-xs-4">Upl €:</label>
                                               <span class="col-xs-8">342,28</span>
                                   </div>
            
                        </div>
            </div>
</div><div class="col-xs-12" style="display: block;">
            <h3 id="denominazione">BEI TF 10,5% DC17 BRL var % -0.0318</h3>
            <div class="listaTitoli">
                        <div class="col-xs-6">
                                   <div id="quantita" class="clearfix">
                                               <label class="col-xs-4">Quantità:</label>
                                               <span class="col-xs-8">90.000,00</span>
                                   </div>
                                   <div id="last" class="clearfix">
                                               <label class="col-xs-4">Mercato:</label>
                                               <span class="col-xs-8">100,70</span>
                                   </div>
                                   <div id="controvaloreMercatoEuro" class="clearfix">
                                               <label class="col-xs-4">Controvalore:</label>
                                               <span class="col-xs-8">90.630,00</span>
                                   </div>
                        </div>
                        <div class="col-xs-6">
                                   <div id="uplPerc" class="clearfix">
                                               <label class="col-xs-4">Upl %:</label>
                                               <span class="col-xs-8">3,37</span>
                                   </div>
                                    <div id="prezzoMedioSecco" class="clearfix">
                                               <label class="col-xs-4">P. carico:</label>
                                               <span class="col-xs-8">97,42</span>
                                   </div>
                                   <div id="uplEuro" class="clearfix">
                                               <label class="col-xs-4">Upl €:</label>
                                               <span class="col-xs-8">2.955,09</span>
                                   </div>
            
                        </div>
            </div>
</div><div class="col-xs-12" style="display: block;">
            <h3 id="denominazione">BEI TF 2,75% NV23 SEK var % -0.0444</h3>
            <div class="listaTitoli">
                        <div class="col-xs-6">
                                   <div id="quantita" class="clearfix">
                                               <label class="col-xs-4">Quantità:</label>
                                               <span class="col-xs-8">1.720.000,00</span>
                                   </div>
                                   <div id="last" class="clearfix">
                                               <label class="col-xs-4">Mercato:</label>
                                               <span class="col-xs-8">112,66</span>
                                   </div>
                                   <div id="controvaloreMercatoEuro" class="clearfix">
                                               <label class="col-xs-4">Controvalore:</label>
                                               <span class="col-xs-8">203.174,88</span>
                                   </div>
                        </div>
                        <div class="col-xs-6">
                                   <div id="uplPerc" class="clearfix">
                                               <label class="col-xs-4">Upl %:</label>
                                               <span class="col-xs-8">5,28</span>
                                   </div>
                                   <div id="prezzoMedioSecco" class="clearfix">
                                               <label class="col-xs-4">P. carico:</label>
                                               <span class="col-xs-8">100,96</span>
                                   </div>
                                   <div id="uplEuro" class="clearfix">
                                               <label class="col-xs-4">Upl €:</label>
                                               <span class="col-xs-8">10.185,78</span>
                                   </div>
            
                        </div>
            </div>
</div><div class="col-xs-12" style="display: block;">
            <h3 id="denominazione">BEI TF 7,5% ST20 ZAR var % -0.0298</h3>
            <div class="listaTitoli">
                        <div class="col-xs-6">
                                   <div id="quantita" class="clearfix">
                                               <label class="col-xs-4">Quantità:</label>
                                               <span class="col-xs-8">200.000,00</span>
                                   </div>
                                   <div id="last" class="clearfix">
                                               <label class="col-xs-4">Mercato:</label>
                                               <span class="col-xs-8">100,80</span>
                                   </div>
                                   <div id="controvaloreMercatoEuro" class="clearfix">
                                               <label class="col-xs-4">Controvalore:</label>
                                               <span class="col-xs-8">13.038,16</span>
                                   </div>
                        </div>
                        <div class="col-xs-6">
                                   <div id="uplPerc" class="clearfix">
                                               <label class="col-xs-4">Upl %:</label>
                                               <span class="col-xs-8 negativo">-14,27</span>
                                   </div>
                                   <div id="prezzoMedioSecco" class="clearfix">
                                               <label class="col-xs-4">P. carico:</label>
                                               <span class="col-xs-8">98,70</span>
                                   </div>
                                   <div id="uplEuro" class="clearfix">
                                               <label class="col-xs-4">Upl €:</label>
                                               <span class="col-xs-8 negativo">-2.170,55</span>
                                   </div>
            
                        </div>
            </div>
</div><div class="col-xs-12" style="display: block;">
            <h3 id="denominazione">BEI TF 8,5% ST24 ZAR var % 0.3004</h3>
            <div class="listaTitoli">
                        <div class="col-xs-6">
                                   <div id="quantita" class="clearfix">
                                               <label class="col-xs-4">Quantità:</label>
                                               <span class="col-xs-8">420.000,00</span>
                                   </div>
                                   <div id="last" class="clearfix">
                                               <label class="col-xs-4">Mercato:</label>
                                               <span class="col-xs-8">103,50</span>
                                   </div>
                                   <div id="controvaloreMercatoEuro" class="clearfix">
                                               <label class="col-xs-4">Controvalore:</label>
                                               <span class="col-xs-8">28.113,54</span>
                                   </div>
                        </div>
                        <div class="col-xs-6">
                                   <div id="uplPerc" class="clearfix">
                                               <label class="col-xs-4">Upl %:</label>
                                               <span class="col-xs-8 negativo">-2,46</span>
                                   </div>
                                   <div id="prezzoMedioSecco" class="clearfix">
                                               <label class="col-xs-4">P. carico:</label>
                                               <span class="col-xs-8">100,95</span>
                                   </div>
                                   <div id="uplEuro" class="clearfix">
                                               <label class="col-xs-4">Upl €:</label>
                                               <span class="col-xs-8 negativo">-708,73</span>
                                   </div>
            
                        </div>
            </div>
</div><div class="col-xs-12" style="display: block;">
            <h3 id="denominazione">EUROPEAN UNION OT18 EUR 2,375 var % 0</h3>
            <div class="listaTitoli">
                        <div class="col-xs-6">
                                   <div id="quantita" class="clearfix">
                                               <label class="col-xs-4">Quantità:</label>
                                               <span class="col-xs-8">27.000,00</span>
                                   </div>
                                   <div id="last" class="clearfix">
                                               <label class="col-xs-4">Mercato:</label>
                                               <span class="col-xs-8">104,40</span>
                                   </div>
                                   <div id="controvaloreMercatoEuro" class="clearfix">
                                               <label class="col-xs-4">Controvalore:</label>
                                               <span class="col-xs-8">28.189,08</span>
                                   </div>
                        </div>
                        <div class="col-xs-6">
                                   <div id="uplPerc" class="clearfix">
                                               <label class="col-xs-4">Upl %:</label>
                                               <span class="col-xs-8">4,66</span>
                                   </div>
                                   <div id="prezzoMedioSecco" class="clearfix">
                                               <label class="col-xs-4">P. carico:</label>
                                               <span class="col-xs-8">99,76</span>
                                   </div>
                                   <div id="uplEuro" class="clearfix">
                                               <label class="col-xs-4">Upl €:</label>
                                               <span class="col-xs-8">1.254,70</span>
                                   </div>
            
                        </div>
            </div>
</div><div class="col-xs-12 boxtotale" style="display: block;">
            <h3 id="denominazione">TOTALE OBBLIGAZIONI ESTERO (€):</h3>
            <div class="listaTitoli">
                        <div class="col-xs-6">
                                   
                                   <div id="last" class="clearfix"><label class="col-xs-8">Totale carico</label><span class="col-xs-4 ">433.055,10</span></div>
                                   <div id="controvaloreMercatoEuro" class="clearfix"><label class="col-xs-8">Totale mercato</label><span class="col-xs-4 ">444.913,67</span></div>
                        </div>
                        <div class="col-xs-6">
                                   <div id="uplPerc" class="clearfix">
                                               <label class="col-xs-4">Upl %:</label>
                                               <span class="col-xs-8">2,74</span>
                                   </div>
                                   
                                   <div id="uplEuro" class="clearfix">
                                               <label class="col-xs-4">Upl €:</label>
                                               <span class="col-xs-8">11.858,57</span>
                                   </div>
            
                        </div>
            </div>
</div><div class="col-xs-12" style="display: block;">
            <h3 id="denominazione">ANIMA OBBLIGAZIONARIO HIGH YIELD CLASSE AD DIS CUMULATIVO var % 0.0422</h3>
            <div class="listaTitoli">
                        <div class="col-xs-6">
                                   <div id="quantita" class="clearfix">
                                               <label class="col-xs-4">Quantità:</label>
                                               <span class="col-xs-8">1.392,12</span>
                                   </div>
                                   <div id="last" class="clearfix">
                                               <label class="col-xs-4">Mercato:</label>
                                               <span class="col-xs-8">21,35</span>
                                   </div>
                                   <div id="controvaloreMercatoEuro" class="clearfix">
                                               <label class="col-xs-4">Controvalore:</label>
                                               <span class="col-xs-8">29.720,35</span>
                                   </div>
                        </div>
                        <div class="col-xs-6">
                                   <div id="uplPerc" class="clearfix">
                                               <label class="col-xs-4">Upl %:</label>
                                               <span class="col-xs-8">0,00</span>
                                   </div>
                                   <div id="prezzoMedioSecco" class="clearfix">
                                               <label class="col-xs-4">P. carico:</label>
                                               <span class="col-xs-8">0,00</span>
                                   </div>
                                   <div id="uplEuro" class="clearfix">
                                               <label class="col-xs-4">Upl €:</label>
                                               <span class="col-xs-8">29.720,35</span>
                                   </div>
            
                        </div>
            </div>
</div><div class="col-xs-12" style="display: block;">
            <h3 id="denominazione">ANIMA SFORZESCO-FCO CL A ACC CUMULATIVO var % -0.0316</h3>
            <div class="listaTitoli">
                        <div class="col-xs-6">
                                   <div id="quantita" class="clearfix">
                                               <label class="col-xs-4">Quantità:</label>
                                               <span class="col-xs-8">1.622,39</span>
                                   </div>
                                   <div id="last" class="clearfix">
                                               <label class="col-xs-4">Mercato:</label>
                                               <span class="col-xs-8">12,65</span>
                                   </div>
                                   <div id="controvaloreMercatoEuro" class="clearfix">
                                               <label class="col-xs-4">Controvalore:</label>
                                               <span class="col-xs-8">20.515,16</span>
                                   </div>
                        </div>
                        <div class="col-xs-6">
                                   <div id="uplPerc" class="clearfix">
                                               <label class="col-xs-4">Upl %:</label>
                                               <span class="col-xs-8">0,00</span>
                                   </div>
                                   <div id="prezzoMedioSecco" class="clearfix">
                                               <label class="col-xs-4">P. carico:</label>
                                               <span class="col-xs-8">0,00</span>
                                   </div>
                                   <div id="uplEuro" class="clearfix">
                                               <label class="col-xs-4">Upl €:</label>
                                               <span class="col-xs-8">20.515,16</span>
                                   </div>
            
                        </div>
            </div>
</div><div class="col-xs-12" style="display: block;">
            <h3 id="denominazione">ANIMA VISCONTEO-FCO CL A ACC CUMULATIVO var % 0.0237</h3>
            <div class="listaTitoli">
                        <div class="col-xs-6">
                                   <div id="quantita" class="clearfix">
                                               <label class="col-xs-4">Quantità:</label>
                                               <span class="col-xs-8">1.139,80</span>
                                   </div>
                                   <div id="last" class="clearfix">
                                               <label class="col-xs-4">Mercato:</label>
                                               <span class="col-xs-8">46,42</span>
                                   </div>
                                   <div id="controvaloreMercatoEuro" class="clearfix">
                                               <label class="col-xs-4">Controvalore:</label>
                                               <span class="col-xs-8">52.905,86</span>
                                   </div>
                        </div>
                        <div class="col-xs-6">
                                   <div id="uplPerc" class="clearfix">
                                               <label class="col-xs-4">Upl %:</label>
                                               <span class="col-xs-8">0,00</span>
                                   </div>
                                   <div id="prezzoMedioSecco" class="clearfix">
                                               <label class="col-xs-4">P. carico:</label>
                                               <span class="col-xs-8">0,00</span>
                                   </div>
                                   <div id="uplEuro" class="clearfix">
                                               <label class="col-xs-4">Upl €:</label>
                                               <span class="col-xs-8">52.905,86</span>
                                   </div>
            
                        </div>
            </div>
</div><div class="col-xs-12" style="display: block;">
            <h3 id="denominazione">ANIMA VISCONTEO-FCO CL A ACC CUMULATIVO var % 0.0237</h3>
            <div class="listaTitoli">
                        <div class="col-xs-6">
                                   <div id="quantita" class="clearfix">
                                               <label class="col-xs-4">Quantità:</label>
                                               <span class="col-xs-8">551,28</span>
                                   </div>
                                   <div id="last" class="clearfix">
                                               <label class="col-xs-4">Mercato:</label>
                                               <span class="col-xs-8">46,42</span>
                                   </div>
                                   <div id="controvaloreMercatoEuro" class="clearfix">
                                               <label class="col-xs-4">Controvalore:</label>
                                               <span class="col-xs-8">25.588,86</span>
                                   </div>
                        </div>
                        <div class="col-xs-6">
                                   <div id="uplPerc" class="clearfix">
                                               <label class="col-xs-4">Upl %:</label>
                                               <span class="col-xs-8">0,00</span>
                                   </div>
                                   <div id="prezzoMedioSecco" class="clearfix">
                                               <label class="col-xs-4">P. carico:</label>
                                               <span class="col-xs-8">0,00</span>
                                   </div>
                                   <div id="uplEuro" class="clearfix">
                                               <label class="col-xs-4">Upl €:</label>
                                               <span class="col-xs-8">25.588,86</span>
                                   </div>
            
                        </div>
            </div>
</div></div>

</div>
 <div id="titoliPrefRest" class="visible-xs" style="margin:5px">

</div>
<div id="orig" class="col-xs-12" style="display:none">
	<h3 id="denominazione"></h3>
	<div class="listaTitoli">
		<div class="col-xs-6">
			<div id="quantita" class="clearfix">
				<label  class="col-xs-4">Quantità:</label>
				<span class="col-xs-8"></span>
			</div>
			<div id="last"  class="clearfix">
				<label  class="col-xs-4">Mercato:</label>
				<span class="col-xs-8"></span>
			</div>
			<div id="controvaloreMercatoEuro"  class="clearfix">
				<label  class="col-xs-4">Controvalore:</label>
				<span class="col-xs-8"></span>
			</div>
		</div>
		<div class="col-xs-6">
			<div id="uplPerc"   class="clearfix">
				<label  class="col-xs-4">Upl %:</label>
				<span class="col-xs-8"></span>
			</div>
			<div id="prezzoMedioSecco"  class="clearfix">
				<label  class="col-xs-4">P. carico:</label>
				<span class="col-xs-8"></span>
			</div>
			<div id="uplEuro"  class="clearfix">
				<label  class="col-xs-4">Upl &euro;:</label>
				<span class="col-xs-8"></span>
			</div>
	
		</div>
	</div>
</div> 	
<script>
$(document).ready(function() {

	var NumberFormatter  =function(number){
		this.value = number;
		this.maximumFractionDigits = 2;
		this.minimumFractionDigits = 2;
		this.digitsNumber = 2;
		this.currency = false;
		
	};
	
	NumberFormatter.prototype.isNegativo = function(){
		if(this.value < 0){
			return true;
		}else{
			return false;
		}
	}
	
	NumberFormatter.prototype.setDigitsNumber = function(digitsNumber){
		this.digitsNumber = digitsNumber;
	}
		
	NumberFormatter.prototype.format = function(){
		if(this.value === 0){
			return "0,00";
		}
		if(this.value != null && this.value != ''){
			return	this.value.toFixed(this.digitsNumber).replace('.', ',');
		}
	}


	if(isMobile()){
		function titoliResponsive(){
			$.ajax({
				method: "POST",
		   		url: getPathContext()+"/investimenti/titoliDossierJson.do",
		   		dataType: "json",
				complete: function(response) {
						var result = response.responseJSON.rows;
						$("#titoliPrefRest").empty();
						for(i=0; i < result.length; i++){
						
							var denominazione = result[i].denominazione;
							if("undefined".indexOf(denominazione) > -1){
								continue;
							}
							var elmnt = document.getElementById("orig");
							var cln = elmnt.cloneNode(true);
							var variazionePercentuale = result[i].quotazione.variazionePercentuale;
							if("undefined".indexOf(variazionePercentuale) > -1){
								variazionePercentuale = "n.d.";
							}
							$(cln).removeAttr('id').show();
							$(cln).find('#denominazione').text(denominazione + " var % " + variazionePercentuale);
		
							var quantita = new NumberFormatter(result[i].quantita);
							if(quantita.isNegativo()){
								$(cln).find('#quantita > span').addClass('negativo');					
							}
							$(cln).find('#quantita > span').text(quantita.format());
		
							var last = new NumberFormatter(result[i].quotazione.last);
							last.setDigitsNumber(4);
					
							if(last.isNegativo()){
								$(cln).find('#last > span').addClass('negativo');
							}
							$(cln).find('#last > span').text(last.format());
		
							var controvaloreMercatoEuro = new NumberFormatter(result[i].controvaloreMercatoEuro);
							if(controvaloreMercatoEuro.isNegativo()){
								$(cln).find('#controvaloreMercatoEuro > span').addClass('negativo');
							}
							$(cln).find('#controvaloreMercatoEuro > span').text( controvaloreMercatoEuro.format());
		
							var uplPerc = new NumberFormatter(result[i].uplPerc);
							if(uplPerc.isNegativo()){
								$(cln).find('#uplPerc > span').addClass('negativo');
							}
							$(cln).find('#uplPerc > span').text(uplPerc.format());
							
							var prezzoMedioSecco = new NumberFormatter(result[i].prezzoMedioSecco);
							prezzoMedioSecco.setDigitsNumber(2);
							$(cln).find('#prezzoMedioSecco > span').text(prezzoMedioSecco.format());
							
							var uplEuro = new NumberFormatter(result[i].uplEuro);
							uplEuro.setDigitsNumber(3);
							if(uplEuro.isNegativo()){
								$(cln).find('#uplEuro > span').addClass('negativo');
							}
							$(cln).find('#uplEuro > span').text(uplEuro.format());
				
							
							$("#titoliPrefRest").append(cln);
							$("#titoliPrefRest").closest('.section').css('background', '#fff');
			
						
							
						}
		   		}
		  	});
	  		setTimeout(function(){
	  			titoliResponsive()
	  		}, 60000);
	  	}
	  	titoliResponsive();
  	}else{  	
  	
		startGrid('#I_TITDOS', { 
url: '/template/investimenti/titoliDossier.php',
caption:"Portafoglio titoli e fondi",
height:'auto',
colModel:[
{name:'datiJqGrid.id',jsonmap:'datiJqGrid.id',key:true, hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloTot',jsonmap:'datiJqGrid.titoloTot', hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloGTot',jsonmap:'datiJqGrid.titoloGTot', hidden:true, hidedlg:true},
{name:'act',jsonmap:'act',label:' ', width:50, align:'center',sortable:false,hidedlg:true},
{name:'denominazione',jsonmap:'denominazione',label:"Titolo",title:"Titolo",width:170,align:'Left',classes:'uppercase',formatter:linkFmt,formatoptions:{funzioneJS:'openDettaglioTitolo',urlLink:'/investimenti/dettaglioTitolo.do',isin:'isin',codMercatoInfo:'codMercatoInfo',symbol:'simbolo',tipoConvertito:'tipoConvertito'},unformat:linkUnFmt},
{name:'sottodeposito',jsonmap:'sottodeposito',label:"Rub",title:"Rubrica",width:42,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'anagrafica.divisaTrattazione',jsonmap:'anagrafica.divisaTrattazione',label:"Div.",title:"Divisa",width:40,align:'Left'},
{name:'quantita',jsonmap:'quantita',label:"Q.tà",title:"Quantità",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'DX'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'prezzoMedioSecco',jsonmap:'prezzoMedioSecco',label:"P.Medio carico",title:"Prezzo medio carico",width:70,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'cambioMedio',jsonmap:'cambioMedio',label:"Cambio Medio",title:"Cambio Medio",width:70,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'descMercato',jsonmap:'descMercato',label:"Mercato",title:"Mercato",width:70,align:'Center'},
{name:'quotazione.last',jsonmap:'quotazione.last',label:"P. di Mercato",title:"Ultimo prezzo disponibile, espresso nella divisa di negoziazione. ",width:70,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'nav',jsonmap:'nav',push:'N',label:"NAV",title:"NAV",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.variazionePercentuale',jsonmap:'quotazione.variazionePercentuale',label:"Var.%",title:"Variazione percentuale sull'ultimo prezzo del giorno precedente",width:55,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},classes:'importo',unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.trend',jsonmap:'quotazione.trend',label:"Tr.",title:"Trend",width:40,align:'Center',formatter:trendFmt,sortable:false},
{name:'controvaloreCaricoEuro',jsonmap:'controvaloreCaricoEuro',label:"Valore di carico",title:"Controvalore di carico",width:70,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'controvaloreMercatoEuro',jsonmap:'controvaloreMercatoEuro',label:"Valore di mercato",title:"Controvalore di mercato",width:70,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'uplEuro',jsonmap:'uplEuro',push:'N',label:"Var. Euro",title:"Guadagno o perdita potenziale (Unrealized Profit and ",width:70,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},classes:'importo',unformat:decimalUnFmt,sorttype:'currency'},
{name:'codAreaFinanza',jsonmap:'codAreaFinanza',label:"Cod. Area Finanza",title:"Cod. Area Finanza",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'isin',jsonmap:'isin',label:"ISIN",title:"isin",width:120,align:'Left'},
{name:'uplPerc',jsonmap:'uplPerc',label:"Var% Utile/Perdita",title:"Guadagno o perdita potenziale in % sul valore di carico (Unrealized Profit and Loss)",width:100,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},classes:'importo',unformat:decimalUnFmt,sorttype:'currency'},
{name:'codMercatoInfo',jsonmap:'codMercatoInfo',label:"Piazza",title:"Mercato sul quale si è operato",width:40,align:'Left',hidden:true,hidedlg:true},
{name:'dataPrezzoMercato',jsonmap:'dataPrezzoMercato',label:"Data Pr. Uff.",title:"Data Prezzo Ufficiale",width:65,align:'Center',formatter:'date',formatoptions:{srcformat:'d/m/Y H:i',newformat:'d/m/Y'},sorttype:'date'},
{name:'tipoConvertito',jsonmap:'tipoConvertito',label:"null",title:"null",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'simbolo',jsonmap:'simbolo',label:"Cod.",title:"Codice del titolo",width:70,align:'Left'},
{name:'quotazione.ritardata',jsonmap:'quotazione.ritardata',label:"Rit.",title:"Ritardata",width:40,align:'Center'},
{name:'quotazione.descrizioneFase',jsonmap:'quotazione.descrizioneFase',label:"Fase",title:"Fase",width:70,align:'Left'},
{name:'quotazione.ora',jsonmap:'quotazione.ora',label:"Ora",title:"Ora",width:60,align:'Center',formatter:'date',formatoptions:{srcformat:'d/m/Y H:i',newformat:'H:i'},sorttype:'date'},
{name:'quotazione.quantitaTotale',jsonmap:'quotazione.quantitaTotale',label:"Volumi",title:"Volumi trattati",width:65,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.apertura',jsonmap:'quotazione.apertura',label:"Apert.",title:"Prezzo di apertura",width:55,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.variazionePercApertura',jsonmap:'quotazione.variazionePercApertura',label:"Var. Perc. Ape.",title:"Variazione percentuale apertura",width:60,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.prezzoChiusuraPrecedente',jsonmap:'quotazione.prezzoChiusuraPrecedente',label:"Ult. Chius.",title:"Ultima Chiusura",width:55,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.massimoGiorno',jsonmap:'quotazione.massimoGiorno',label:"Max ",title:"Massimo del giorno",width:55,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.minimoGiorno',jsonmap:'quotazione.minimoGiorno',label:"Min",title:"Minimo del giorno",width:55,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.bid',jsonmap:'quotazione.bid',label:"P. di Acquisto",title:"Prezzo di Acquisto",width:80,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.quantitaBid',jsonmap:'quotazione.quantitaBid',label:"Q.tà Miglior Acquisto",title:"Quantità miglior offerta in acquisto",width:90,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.ask',jsonmap:'quotazione.ask',label:"P. di Vendita",title:"Prezzo di Vendita",width:80,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.quantitaAsk',jsonmap:'quotazione.quantitaAsk',label:"Q.tà Miglior Vendita",title:"Quantità miglior offerta in vendita",width:90,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'anagrafica.lottoMinimo',jsonmap:'anagrafica.lottoMinimo',label:"Lotto min",title:"Lotto minimo",width:55,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.prezzoUfficiale',jsonmap:'quotazione.prezzoUfficiale',label:"Ult. Pr. Uff.",title:"Chiusura",width:80,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.prezzoRiferimento',jsonmap:'quotazione.prezzoRiferimento',label:"Pr. Rif. Prec.",title:"Prezzo di riferimento",width:80,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.prezzoRiferimentoOdierno',jsonmap:'quotazione.prezzoRiferimentoOdierno',label:"Pr. Rif. Odier.",title:"Prezzo Riferimento Odierno",width:80,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'collocabile',jsonmap:'collocabile',push:'N',label:"collocabile",title:"null",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'switchable',jsonmap:'switchable',push:'N',label:"null",title:"null",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'proventiYTD',jsonmap:'proventiYTD',push:'N',label:"Rendimento YTD %",title:"Rendimento YTD %",width:100,align:'Left',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'rating',jsonmap:'rating',push:'N',label:"Rating Deus",title:"Rating Deus",width:60,align:'Center',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'categoria',jsonmap:'categoria',push:'N',label:"Categoria",title:"Categoria",width:60,align:'Left'}
],
opzioniTabella:[
{label:'Personalizza',funcOptions:{funzioneJS:opzioni}},
{label:'Esporta in Excel',funcOptions:{funzioneJS:esportaGrigliaExcel}},
{testDisplay:hidePopUpFunction,label:'Pop-up',funcOptions:{funzioneJS:apriPopupGriglia}},
{label:'Stampa',funcOptions:{funzioneJS:Stampa_tuoProtafoglio}},
{testDisplay:hidePopUpFunction,label:'Help',funcOptions:{funzioneJS:helpTabella}}
],
opzioniRiga:[
{testDisplay:isAutorizzatoTol,label:"Compra Vendi",funcOptions:{funzioneJS:goToPage,urlLink:'/investimenti/compraVendiTitolo.do',isin:'isin',codMercatoInfo:'codMercatoInfo',codAreaFinanza:'codAreaFinanza'}},
{testDisplay:isAutorizzatoTol,label:"Book 5 livelli",funcOptions:{funzioneJS:openTitoloPopupDaTabellatore,isin:'isin',codMercatoInfo:'codMercatoInfo'}},
{testDisplay:isFondoSO,label:"Sottoscrivi",funcOptions:{funzioneJS:goToPage,urlLink:'/investimenti/fondiSottoscrizioneFondo.do',codAreaFinanza:'codAreaFinanza'}},
{testDisplay:isAutorizzatoTol,label:"Dettaglio titolo",funcOptions:{funzioneJS:goToPage,urlLink:'/investimenti/dettaglioTitolo.do',isin:'isin',codMercatoInfo:'codMercatoInfo',simbolo:'simbolo',tipoConvertito:'tipoConvertito'}},
{testDisplay:isAutorizzatoTol,label:"Aggiungi a Preferiti",funcOptions:{funzioneJS:openAjaxDialog,urlLink:'/investimenti/titoliElencoPreferitiAggiungi.do',isin:'isin',codMercatoInfo:'codMercatoInfo',height:'200',width:'400',title:'Aggiungi a preferiti'}},
{testDisplay:isAutorizzatoTol,label:"Agg.a Portafoglio Simulato",funcOptions:{funzioneJS:openAjaxDialog,urlLink:'/investimenti/titoliPortafoglioSimulatoAggiungi.do',isin:'isin',codMercatoInfo:'codMercatoInfo',denominazione:'denominazione',prezzoCarico:'quotazione.last',title:'Aggiungi a Portafoglio Simulato'}},
{testDisplay:isFondo,label:"Rimborso",funcOptions:{funzioneJS:goToPage,urlLink:'/investimenti/fondiRimborsoFondo.do',codAreaFinanza:'codAreaFinanza',sottodeposito:'sottodeposito'}},
{testDisplay:isFondoSW,label:"Switch",funcOptions:{funzioneJS:goToPage,urlLink:'/investimenti/fondiSwitchFondo.do',codAreaFinanza:'codAreaFinanza',sottodeposito:'sottodeposito'}},
{testDisplay:isFondo,label:"Dettaglio fondo",funcOptions:{funzioneJS:goToPage,urlLink:'/investimenti/fondiDettaglioFondo.do',codAreaFinanza:'codAreaFinanza',buttonIndietro:'buttonIndietro'}},
{testDisplay:isFondo,label:"Aggiungi a preferiti",funcOptions:{funzioneJS:openAjaxDialog,urlLink:'/investimenti/fondiPreferitiAggiungiForm.do',codAreaFinanza:'codAreaFinanza',width:'350',height:'150',title:'Aggiungi a preferiti'}},
{testDisplay:disableButton,label:"Agg. a Portafoglio Simulato",funcOptions:{funzioneJS:openAjaxDialog,urlLink:'/investimenti/fondiPortafoglioSimulatoAggiungiForm.do',codiceIsin:'codiceIsin',width:'400',height:'400',title:'Aggiungi a portafoglio simulato'}}
]
});


		setInterval(titoliDossierPush, '60000');
  	
	}  	
});

	
	function titoliDossierPush(){
		ricaricaGriglia('I_TITDOS_Table');
	}
	
	
</script>

<script>
function helpTabellaI_TITDOS() {

	
		
	
	var idHelp = 0;
	 	
		idHelp = 422;
	
	OpenHelp(getPathContext() + '/help/page.do?id=' + idHelp);

}
</script>

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













</div>

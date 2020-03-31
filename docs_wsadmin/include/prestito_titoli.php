<h3>Prestito titoli</h3>			
	<div class="wtcontent">	
		<table class="inputtable" cellspacing="0" cellpadding="0">
			<tbody>
				<tr>
					<th colspan="2">Inserisci i parametri di ricerca</th>

				</tr>
				<tr>
					<td>
						<fieldset>
							<label>MERCATO</label>
								<select name="market" onchange="javascript:setMarket_desc(this);">
								<option value="" selected>Tutti i mercati</option>
								
										<option value="011" >MTA</option>

								
										<option value="012" >MOT</option>
								
										<option value="018" >OTC</option>
								
										<option value="018" >AKIS</option>
								
										<option value="020" >MTA-TAH</option>
								
										<option value="026" >BEL</option>
								
										<option value="036" >ETLX</option>

								
										<option value="053" >IBEX</option>
								
										<option value="059" >SBF</option>
								
										<option value="078" >AEX</option>
								
										<option value="144" >XETRA</option>
								
										<option value="000" >Fuori Mercato</option>
								
								</select>

						</fieldset>
						<fieldset>
							<label>DESCRIZIONE</label>
							<input type="text" name="description" size="40" value=""/>
						</fieldset>
						<fieldset>
							<label>TIPO</label>
							<select name="type">

								
									<option value="999999-999999-999999" 
									selected>Tutti i tipi</option>
								
									<option value="1-1-1" 
									>OBBLIGAZIONI - OBBL.ITALIA</option>
								
									<option value="1-2-1" 
									>OBBLIGAZIONI - OBBL.DOMEST. ESTERO</option>
								
									<option value="1-3-1" 
									>OBBLIGAZIONI - OBBL.EUROMERCATO</option>
								
									<option value="1-5-1" 
									>OBBLIGAZIONI - TITOLI DI STATO ITA</option>
								
									<option value="1-8-2" 
									>OBBLIGAZIONI - TIT.STATO ITALIA V.E</option>

								
									<option value="2-1-1" 
									>AZIONI ITALIANE</option>
								
									<option value="2-2-1" 
									>AZIONI ESTERE</option>
								
									<option value="4-4-1" 
									>ETF - ITALIANI - EURO</option>
								
									<option value="4-5-1" 
									>ETF - ITALIANI - DIVISA</option>
								
									<option value="4-6-1" 
									>ETF-ARMONIZZATI ESTE - EURO</option>
								
									<option value="4-7-1" 
									>ETF-ARMONIZZATI ESTE - DIVISA</option>

								
									<option value="4-8-1" 
									>ETF NON ARMONIZ ESTE - EURO</option>
								
									<option value="4-9-1" 
									>ETF NON ARMONIZ ESTE - DIVISA</option>
								
							</select>
						</fieldset>
					</td>
					<td>
						<fieldset>
							<label>ISIN</label>

							<input type="text" name="isin" size="20" maxlength=12 value=""/>
						</fieldset>
						<fieldset>
							<label>CONTROVALORE</label>
							da 
							<input type="text" name="ctv_int" size="10" maxlength=20 value="0"/>,
							<input type="text" name="ctv_dec" size="2" maxlength=2 value="00"/>
							 a 
							<input type="text" name="ctv_int_max" size="10" maxlength=20 value="0"/>,
							<input type="text" name="ctv_dec_max" size="2" maxlength=2 value="00"/>

						</fieldset>
					</td>
				</tr>
			</tbody>
		</table>
		<div class="buttonpanel">
			<a class="button" href="javascript:cerca();">CERCA</a>
			<a class="button" href="javascript:esporta();">ESPORTA</a>

		</div>		
		<br class="clear" />
		
		<div class="divtabellalist">
			<table border="0" class="tabellalist">
				<tbody><tr>
					<!--td class="off first"><a href="javascript:cercaBond(false)" onclick="selectTab(this,'contenuto',0);" title="">AZIONI</a></td>																			
					<td class="on"><a href="javascript:cercaBond(true)" onclick="selectTab(this,'contenuto',0);" title="">OBBLIGAZIONI</a></td>
					<td class="end"></td-->
					<td class="off first"><a href="javascript:;" onclick="selectTab(this,'contenuto',0);" title="">AZIONI</a></td>																			
					<td class="on"><a href="javascript:;" onclick="selectTab(this,'contenuto',1);" title="">OBBLIGAZIONI</a></td>
					<td class="end"></td>

				</tr>
			</tbody></table>
			
			<table border="0" class="tabellalist">
				<tbody>
				<tr>
					<td class="on first"><a href="javascript:cercaPerData('2012-02-14')" onclick="selectTab(this,'contenuto',0);" title="">14/02/2012</a></td>
					<td class="off "><a href="javascript:cercaPerData('2012-02-15')" onclick="selectTab(this,'contenuto',1);" title="">15/02/2012</a></td>
					<td class="off "><a href="javascript:cercaPerData('2012-02-16')" onclick="selectTab(this,'contenuto',2);" title="">16/02/2012</a></td>
				</tr>
				</tbody>
			</table>
		</div>
		
		<div style="display: block;" id="contenuto0">
			<table id="tb-prestito" class="sortable resulttable resulttablec multiLiv" cellspacing="0" cellpadding="0">
				<thead>
					<tr>
						<th width="10">&nbsp;</th>	
						<th class="sort" id="th-desc" sort="default" width="220" colspan="2">DESCRIZIONE</th>
						<th class="sort" id="th-isin" sort="default" >ISIN</th>
						<th>PRZ</th>				
						<th>TEL-QUEL</th>				
						<th>MKT</th>
						<th class="sort" id="th-monte" sort="number">MONTE</th>
						<th class="sort" id="th-ctv" sort="number">CTV</th>
						<th class="sort" id="th-qtaPrest" sort="number">Q.T&Agrave;<br/>PRESTATA</th>
						<th class="sort" id="th-qtaDisp" sort="number">Q.T&Agrave;<br/>DISP</th>
						<th>&nbsp;</th>
						<th width="90">TIPO</th>
					</tr>
				</thead>
				<tbody>
					<tr class="espandibile grigio">									
						<td class="colonnaespansione" width="10" ><a href="javascript:;" class="espansione" onclick="switchDetailRows(this);"></a></td>				
						<td colspan="12" class="primoLivello">primo gruppo</td>
					</tr>
					<tr class="dettaglioespandibile">	
						<td class="spazioSecondo" width="10">&nbsp;</td>	
						<td class="secondoLivello" colspan="12"><strong>12345 Riccardo Rossi</strong></td>
					</tr>	
					<tr class="dettaglioespandibile">									
						<td class="spazio">&nbsp;</td>	
						<td class="spazio" width="10">&nbsp;</td>
						<td class=""><input type="checkbox" value="">A2A SPA 2003/2013 4,875% 30/10  EURO</td>
						<td><a href="" class="pdfLInk">pdf link</a></td>
						<td title="Data ultimo prezzo: 09/02/2012">102,66</td>
						<td title="Data ultimo prezzo: 15/02/2012">104,09852</td>
						<td>MOT</td>
						<td>30.000</td>
						<td>30.798</td>
						<td>0</td>
						<td>30.000</td>
						<td>
							<div style="float:left; background-color:green; width:100px;">&nbsp;</div>
							<div style="float:left; background-color:red; width:0px;">&nbsp;</div>
						</td>
						<td>OBBLIGAZIONI</td>
					</tr>	
					<tr class="dettaglioespandibile">									
						<td class="spazio">&nbsp;</td>	
						<td class="spazio" width="10">&nbsp;</td>
						<td class=""><input type="checkbox" value="">A2A SPA 2003/2013 4,875% 30/10  EURO</td>
						<td>XS0179091425</td>
						<td title="Data ultimo prezzo: 09/02/2012">102,66</td>
						<td title="Data ultimo prezzo: 15/02/2012">104,09852</td>
						<td>MOT</td>
						<td>30.000</td>
						<td>30.798</td>
						<td>0</td>
						<td>30.000</td>
						<td>
							<div style="float:left; background-color:green; width:100px;">&nbsp;</div>
							<div style="float:left; background-color:red; width:0px;">&nbsp;</div>
						</td>
						<td>OBBLIGAZIONI</td>
					</tr>	
					<tr class="dettaglioespandibile">	
						<td class="spazioSecondo" width="10">&nbsp;</td>	
						<td class="secondoLivello" colspan="12"><strong>12345 Riccardo Bianchi</strong></td>
					</tr>		
					<tr class="dettaglioespandibile">									
						<td class="spazio">&nbsp;</td>	
						<td class="spazio" width="10">&nbsp;</td>
						<td class=""><input type="checkbox" value="">A2A SPA 2003/2013 4,875% 30/10  EURO</td>
						<td>XS0179091425</td>
						<td title="Data ultimo prezzo: 09/02/2012">102,66</td>
						<td title="Data ultimo prezzo: 15/02/2012">104,09852</td>
						<td>MOT</td>
						<td>30.000</td>
						<td>30.798</td>
						<td>0</td>
						<td>30.000</td>
						<td>
							<div style="float:left; background-color:green; width:100px;">&nbsp;</div>
							<div style="float:left; background-color:red; width:0px;">&nbsp;</div>
						</td>
						<td>OBBLIGAZIONI</td>
					</tr>	
					<tr class="dettaglioespandibile">									
						<td class="spazio">&nbsp;</td>	
						<td class="spazio" width="10">&nbsp;</td>
						<td class=""><input type="checkbox" value="">A2A SPA 2003/2013 4,875% 30/10  EURO</td>
						<td>XS0179091425</td>
						<td title="Data ultimo prezzo: 09/02/2012">102,66</td>
						<td title="Data ultimo prezzo: 15/02/2012">104,09852</td>
						<td>MOT</td>
						<td>30.000</td>
						<td>30.798</td>
						<td>0</td>
						<td>30.000</td>
						<td>
							<div style="float:left; background-color:green; width:100px;">&nbsp;</div>
							<div style="float:left; background-color:red; width:0px;">&nbsp;</div>
						</td>
						<td>OBBLIGAZIONI</td>
					</tr>	
					
					
					
					
						<tr class="espandibile grigio">									
						<td class="colonnaespansione" width="10" ><a href="javascript:;" class="espansione" onclick="switchDetailRows(this);"></a></td>				
						<td colspan="12" class="primoLivello">secondo gruppo</td>
					</tr>
					<tr class="dettaglioespandibile">	
						<td class="spazioSecondo" width="10">&nbsp;</td>	
						<td class="secondoLivello" colspan="12"><strong>12345 Riccardo Rossi</strong></td>
					</tr>	
					<tr class="dettaglioespandibile">									
						<td class="spazio">&nbsp;</td>	
						<td class="spazio" width="10">&nbsp;</td>
						<td class=""><input type="checkbox" value="">A2A SPA 2003/2013 4,875% 30/10  EURO</td>
						<td>XS0179091425</td>
						<td title="Data ultimo prezzo: 09/02/2012">102,66</td>
						<td title="Data ultimo prezzo: 15/02/2012">104,09852</td>
						<td>MOT</td>
						<td>30.000</td>
						<td>30.798</td>
						<td>0</td>
						<td>30.000</td>
						<td>
							<div style="float:left; background-color:green; width:100px;">&nbsp;</div>
							<div style="float:left; background-color:red; width:0px;">&nbsp;</div>
						</td>
						<td>OBBLIGAZIONI</td>
					</tr>	
					<tr class="dettaglioespandibile">									
						<td class="spazio">&nbsp;</td>	
						<td class="spazio" width="10">&nbsp;</td>
						<td class=""><input type="checkbox" value="">A2A SPA 2003/2013 4,875% 30/10  EURO</td>
						<td>XS0179091425</td>
						<td title="Data ultimo prezzo: 09/02/2012">102,66</td>
						<td title="Data ultimo prezzo: 15/02/2012">104,09852</td>
						<td>MOT</td>
						<td>30.000</td>
						<td>30.798</td>
						<td>0</td>
						<td>30.000</td>
						<td>
							<div style="float:left; background-color:green; width:100px;">&nbsp;</div>
							<div style="float:left; background-color:red; width:0px;">&nbsp;</div>
						</td>
						<td>OBBLIGAZIONI</td>
					</tr>	
					<tr class="dettaglioespandibile">	
						<td class="spazioSecondo" width="10">&nbsp;</td>	
						<td class="secondoLivello" colspan="12"><strong>12345 Riccardo Bianchi</strong></td>
					</tr>		
					<tr class="dettaglioespandibile">									
						<td class="spazio">&nbsp;</td>	
						<td class="spazio" width="10">&nbsp;</td>
						<td class=""><input type="checkbox" value="">A2A SPA 2003/2013 4,875% 30/10  EURO</td>
						<td>XS0179091425</td>
						<td title="Data ultimo prezzo: 09/02/2012">102,66</td>
						<td title="Data ultimo prezzo: 15/02/2012">104,09852</td>
						<td>MOT</td>
						<td>30.000</td>
						<td>30.798</td>
						<td>0</td>
						<td>30.000</td>
						<td>
							<div style="float:left; background-color:green; width:100px;">&nbsp;</div>
							<div style="float:left; background-color:red; width:0px;">&nbsp;</div>
						</td>
						<td>OBBLIGAZIONI</td>
					</tr>	
					<tr class="dettaglioespandibile">									
						<td class="spazio">&nbsp;</td>	
						<td class="spazio" width="10">&nbsp;</td>
						<td class=""><input type="checkbox" value="">A2A SPA 2003/2013 4,875% 30/10  EURO</td>
						<td>XS0179091425</td>
						<td title="Data ultimo prezzo: 09/02/2012">102,66</td>
						<td title="Data ultimo prezzo: 15/02/2012">104,09852</td>
						<td>MOT</td>
						<td>30.000</td>
						<td>30.798</td>
						<td>0</td>
						<td>30.000</td>
						<td>
							<div style="float:left; background-color:green; width:100px;">&nbsp;</div>
							<div style="float:left; background-color:red; width:0px;">&nbsp;</div>
						</td>
						<td>OBBLIGAZIONI</td>
					</tr>	
				</tbody>
			</table>
		</div>
		<div style="display: none;" id="contenuto1">
		contenuto 02
		</div>
		
		<div style="display: none;" id="contenuto2">
		contenuto 03
		</div>
		<!--
		<table id="tb-prestito" class="sortable resulttable resulttablec" cellspacing="0" cellpadding="0">
			<thead>
				<tr>
					<th width="10">&nbsp;</th>	
					<th class="sort" id="th-desc" sort="default" width="220" colspan="2">DESCRIZIONE</th>
					<th class="sort" id="th-isin" sort="default" >ISIN</th>
					<th>PRZ</th>				
					<th>TEL-QUEL</th>				
					<th>MKT</th>
					<th class="sort" id="th-monte" sort="number">MONTE</th>
					<th class="sort" id="th-ctv" sort="number">CTV</th>
					<th class="sort" id="th-qtaPrest" sort="number">Q.T&Agrave;<br/>PRESTATA</th>
					<th class="sort" id="th-qtaDisp" sort="number">Q.T&Agrave;<br/>DISP</th>
					<th>&nbsp;</th>
					<th width="90">TIPO</th>
				</tr>
			</thead>
			<tbody>
				<!--<tr class="espandibile grigio">									
					<td class="colonnaespansione lastr" width="10"><a href="javascript:;" class="espansione" onclick="switchDetailRows(this);"></a></td>		
					<td class="col-desc" width="220">A2A SPA 2003/2013 4,875% 30/10 EURO</td>
					<td class="col-isin">XS0179091425</td>
					<td>&nbsp;</td>				
					<td>&nbsp;</td>				 
					<td>&nbsp;</td>
					<td class="col-monte">54.000</td>
					<td class="col-ctv">55.472,4</td>
					<td class="col-qtaPrest">0</td>
					<td class="col-qtaDisp">54.000</td>
					<td>
						<div style="float:left; background-color:green; width:100px;">&nbsp;</div>
						<div style="float:left; background-color:red; width:0px;">&nbsp;</div>
					</td>
					<td >OBBLIGAZIONI</td>										
				</tr>
				<tr class="espandibile grigio">									
					<td class="colonnaespansione noBorderRight" width="10" ><a href="javascript:;" class="espansione" onclick="switchDetailRows(this);"></a></td>				
					<td colspan="12" class="noBorderLeft noBorderRight">primo gruppo</td>
				</tr>
				<tr class="dettaglioespandibile">	
					<td class="noBorderRight noBorderBottom"  width="10">&nbsp;</td>	
					<td class="noBorderLeft noBorderRight" colspan="2"><strong>12345 Riccardo Rossi</strong></td>
					<td class="noBorderLeft noBorderRight" colspan="10"></td>
				</tr>				
				<tr class="dettaglioespandibile">									
					<td class="noBorderRight noBorderTop" rowspan="2" colspan=""></td>	
					<td class="noBorderLeft noBorderRight" width="10"><input type="checkbox" value=""></td>
					<td class="noBorderLeft" >A2A SPA 2003/2013 4,875% 30/10  EURO</td>
					<td>XS0179091425</td>
					<td title="Data ultimo prezzo: 09/02/2012">102,66</td>
					<td title="Data ultimo prezzo: 15/02/2012">104,09852</td>
					<td>MOT</td>
					<td>30.000</td>
					<td>30.798</td>
					<td>0</td>
					<td>30.000</td>
					<td>
						<div style="float:left; background-color:green; width:100px;">&nbsp;</div>
						<div style="float:left; background-color:red; width:0px;">&nbsp;</div>
					</td>
					<td>OBBLIGAZIONI</td>
				</tr>		
				<tr class="dettaglioespandibile">				
					<td class="noBorderLeft noBorderRight" width="10"><input type="checkbox" value=""></td>			
					<td class="noBorderLeft">A2A SPA 2003/2013 4,875% 30/10  EURO</td>
					<td>XS0179091425</td>
					<td title="Data ultimo prezzo: 09/02/2012">102,81</td>
					<td title="Data ultimo prezzo: 15/02/2012">104,24852</td>				
					<td>ETLX</td>
					<td>24.000</td>
					<td>24.674,4</td>
					<td>0</td>
					<td>24.000</td>
					<td>
						<div style="float:left; background-color:green; width:100px;">&nbsp;</div>
						<div style="float:left; background-color:red; width:0px;">&nbsp;</div>
					</td>
					<td>OBBLIGAZIONI</td>
				</tr>
				<tr class="dettaglioespandibile">	
					<td class="noBorderRight noBorderBottom"  width="10">&nbsp;</td>	
					<td class="noBorderLeft noBorderRight" colspan="12">12345 Riccardo Bianchi</td>
				</tr>					
			<tr class="dettaglioespandibile">									
					<td class="noBorderRight noBorderTop" rowspan="2" colspan="">&nbsp;</td>	
					<td class="noBorderLeft noBorderRight" width="10"><input type="checkbox" value=""></td>
					<td class="noBorderLeft" >A2A SPA 2003/2013 4,875% 30/10  EURO</td>
					<td>XS0179091425</td>
					<td title="Data ultimo prezzo: 09/02/2012">102,66</td>
					<td title="Data ultimo prezzo: 15/02/2012">104,09852</td>
					<td>MOT</td>
					<td>30.000</td>
					<td>30.798</td>
					<td>0</td>
					<td>30.000</td>
					<td>
						<div style="float:left; background-color:green; width:100px;">&nbsp;</div>
						<div style="float:left; background-color:red; width:0px;">&nbsp;</div>
					</td>
					<td>OBBLIGAZIONI</td>
				</tr>		
				<tr class="dettaglioespandibile">				
					<td class="noBorderLeft noBorderRight" width="10"><input type="checkbox" value=""></td>			
					<td class="noBorderLeft">A2A SPA 2003/2013 4,875% 30/10  EURO</td>
					<td>XS0179091425</td>
					<td title="Data ultimo prezzo: 09/02/2012">102,81</td>
					<td title="Data ultimo prezzo: 15/02/2012">104,24852</td>				
					<td>ETLX</td>
					<td>24.000</td>
					<td>24.674,4</td>
					<td>0</td>
					<td>24.000</td>
					<td>
						<div style="float:left; background-color:green; width:100px;">&nbsp;</div>
						<div style="float:left; background-color:red; width:0px;">&nbsp;</div>
					</td>
					<td>OBBLIGAZIONI</td>
				</tr>
				<tr class="espandibile grigio">									
					<td class="colonnaespansione " width="10"><a href="javascript:;" class="espansione" onclick="switchDetailRows(this);"></a></td>				
					<td colspan="12">secondo gruppo</td>
				</tr>
				<tr class="dettaglioespandibile">	
					<td class=""  width="10">&nbsp;</td>	
					<td colspan="12">12345 Mario Rossi</td>
					
				</tr>				
				<tr class="dettaglioespandibile">									
					<td class="" rowspan="2" colspan="">&nbsp;</td>	
					<td class="" width="10"><input type="checkbox" value=""></td>
					<td >A2A SPA 2003/2013 4,875% 30/10  EURO</td>
					<td>XS0179091425</td>
					<td title="Data ultimo prezzo: 09/02/2012">102,66</td>
					<td title="Data ultimo prezzo: 15/02/2012">104,09852</td>
					<td>MOT</td>
					<td>30.000</td>
					<td>30.798</td>
					<td>0</td>
					<td>30.000</td>
					<td>
						<div style="float:left; background-color:green; width:100px;">&nbsp;</div>
						<div style="float:left; background-color:red; width:0px;">&nbsp;</div>
					</td>
					<td>OBBLIGAZIONI</td>
				</tr>		
				<tr class="dettaglioespandibile">				
					<td class="" width="10"><input type="checkbox" value=""></td>	
					<td>A2A SPA 2003/2013 4,875% 30/10  EURO</td>
					<td>XS0179091425</td>
					<td title="Data ultimo prezzo: 09/02/2012">102,81</td>
					<td title="Data ultimo prezzo: 15/02/2012">104,24852</td>				
					<td>ETLX</td>
					<td>24.000</td>
					<td>24.674,4</td>
					<td>0</td>
					<td>24.000</td>
					<td>
						<div style="float:left; background-color:green; width:100px;">&nbsp;</div>
						<div style="float:left; background-color:red; width:0px;">&nbsp;</div>
					</td>
					<td>OBBLIGAZIONI</td>
				</tr>
				<tr class="dettaglioespandibile">	
					<td class=""  width="10">&nbsp;</td>	
					<td colspan="12">12345 Mario Bianchi</td>
					
				</tr>				
				<tr class="dettaglioespandibile">									
					<td class="" rowspan="2" colspan="">&nbsp;</td>	
					<td class="" width="10"><input type="checkbox" value=""></td>
					<td >A2A SPA 2003/2013 4,875% 30/10  EURO</td>
					<td>XS0179091425</td>
					<td title="Data ultimo prezzo: 09/02/2012">102,66</td>
					<td title="Data ultimo prezzo: 15/02/2012">104,09852</td>
					<td>MOT</td>
					<td>30.000</td>
					<td>30.798</td>
					<td>0</td>
					<td>30.000</td>
					<td>
						<div style="float:left; background-color:green; width:100px;">&nbsp;</div>
						<div style="float:left; background-color:red; width:0px;">&nbsp;</div>
					</td>
					<td>OBBLIGAZIONI</td>
				</tr>		
				<tr class="dettaglioespandibile">				
					<td class="" width="10"><input type="checkbox" value=""></td>			
					<td>A2A SPA 2003/2013 4,875% 30/10  EURO</td>
					<td>XS0179091425</td>
					<td title="Data ultimo prezzo: 09/02/2012">102,81</td>
					<td title="Data ultimo prezzo: 15/02/2012">104,24852</td>				
					<td>ETLX</td>
					<td>24.000</td>
					<td>24.674,4</td>
					<td>0</td>
					<td>24.000</td>
					<td>
						<div style="float:left; background-color:green; width:100px;">&nbsp;</div>
						<div style="float:left; background-color:red; width:0px;">&nbsp;</div>
					</td>
					<td>OBBLIGAZIONI</td>
				</tr>
				<!--
				<tr class="dettaglioespandibile">									
					<td class="lastr"  rowspan="3">&nbsp;</td>	
					<td class="lastr" rowspan="3">&nbsp;</td>						
					<td colspan="11">12345 Mario Bianchi</td>
				</tr>
				<tr class="dettaglioespandibile">									
					<td>A2A SPA 2009/2016 4,50% 02/11 EURO</td>
					<td>XS0463509959</td>
					<td title="Data ultimo prezzo: 09/02/2012">100,18</td>													
					<td title="Data ultimo prezzo: 15/02/2012">101,47098</td>				
					<td>MOT</td>
					<td>300.000</td>
					<td>300.540</td>
					<td>0</td>
					<td>300.000</td>
					<td>
						<div style="float:left; background-color:green; width:100px;">&nbsp;</div>
						<div style="float:left; background-color:red; width:0px;">&nbsp;</div>
					</td>
					<td >OBBLIGAZIONI</td>
				</tr>		
				<tr class="dettaglioespandibile">				
										
					<td>A2A SPA 2009/2016 4,50% 02/11 EURO</td>
					<td>XS0463509959</td>
					<td title="Data ultimo prezzo: 09/02/2012">100,17</td>
					<td title="Data ultimo prezzo: 15/02/2012">101,46098</td>				
					<td>ETLX</td>
					<td>200.000</td>
					<td>200.340</td>
					<td>0</td>
					<td>200.000</td>
					<td>
						<div style="float:left; background-color:green; width:100px;">&nbsp;</div>
						<div style="float:left; background-color:red; width:0px;">&nbsp;</div>
					</td>
					<td >OBBLIGAZIONI</td>
				</tr>
				<!--<tr class="espandibile grigio">									
					<td class="colonnaespansione lastr" width="10"><a href="javascript:;" class="espansione" onclick="switchDetailRows(this);"></a></td>		
					<td class="col-desc" width="220">A2A SPA 2002/2012 4,643% 30/10 EURO</td>
					<td class="col-isin">XS0154091432</td>
					<td>&nbsp;</td>				
					<td>&nbsp;</td>				 
					<td>&nbsp;</td>
					<td class="col-monte">37.000</td>
					<td class="col-ctv">39.472,4</td>
					<td class="col-qtaPrest">0</td>
					<td class="col-qtaDisp">40.000</td>
					<td>
						<div style="float:left; background-color:green; width:90px;">&nbsp;</div>
						<div style="float:left; background-color:red; width:10px;">&nbsp;</div>
					</td>
					<td >OBBLIGAZIONI</td>										
				</tr>
				<tr class="dettaglioespandibile">									
					<td class="lastr">&nbsp;</td>					
					<td>A2A SPA 2003/2013 4,875% 30/10  EURO</td>
					<td>XS0179091425</td>
					<td title="Data ultimo prezzo: 09/02/2012">102,66</td>
					<td title="Data ultimo prezzo: 15/02/2012">104,09852</td>
					<td>MOT</td>
					<td>30.000</td>
					<td>30.798</td>
					<td>0</td>
					<td>30.000</td>
					<td>
						<div style="float:left; background-color:green; width:80px;">&nbsp;</div>
						<div style="float:left; background-color:red; width:20px;">&nbsp;</div>
					</td>
					<td>OBBLIGAZIONI</td>
				</tr>		
				<tr class="dettaglioespandibile">				
					<td class="lastr">&nbsp;</td>					
					<td>A2A SPA 2003/2013 4,875% 30/10  EURO</td>
					<td>XS0179091425</td>
					<td title="Data ultimo prezzo: 09/02/2012">102,81</td>
					<td title="Data ultimo prezzo: 15/02/2012">104,24852</td>				
					<td>ETLX</td>
					<td>24.000</td>
					<td>24.674,4</td>
					<td>0</td>
					<td>24.000</td>
					<td>
						<div style="float:left; background-color:green; width:85px;">&nbsp;</div>
						<div style="float:left; background-color:red; width:15px;">&nbsp;</div>
					</td>
					<td>OBBLIGAZIONI</td>
				</tr>
				<tr class="dettaglioespandibile">									
					<td class="lastr">&nbsp;</td>					
					<td>A2A SPA 2009/2016 4,50% 02/11 EURO</td>
					<td>XS0463509959</td>
					<td title="Data ultimo prezzo: 09/02/2012">100,18</td>													
					<td title="Data ultimo prezzo: 15/02/2012">101,47098</td>				
					<td>MOT</td>
					<td>300.000</td>
					<td>300.540</td>
					<td>0</td>
					<td>300.000</td>
					<td>
						<div style="float:left; background-color:green; width:95px;">&nbsp;</div>
						<div style="float:left; background-color:red; width:5px;">&nbsp;</div>
					</td>
					<td >OBBLIGAZIONI</td>
				</tr>		
				<tr class="dettaglioespandibile">				
					<td class="lastr">&nbsp;</td>					
					<td>A2A SPA 2009/2016 4,50% 02/11 EURO</td>
					<td>XS0463509959</td>
					<td title="Data ultimo prezzo: 09/02/2012">100,17</td>
					<td title="Data ultimo prezzo: 15/02/2012">101,46098</td>				
					<td>ETLX</td>
					<td>200.000</td>
					<td>200.340</td>
					<td>0</td>
					<td>200.000</td>
					<td>
						<div style="float:left; background-color:green; width:90px;">&nbsp;</div>
						<div style="float:left; background-color:red; width:10px;">&nbsp;</div>
					</td>
					<td >OBBLIGAZIONI</td>
				</tr>
			</tbody>
		</table>-->
	
		<br />
	</div>

<script src="/wscmn/js/table_orderer.js" type="text/javascript"></script>
<script type="text/javascript">
var prestitoTB = null;

// Crea la tabella ordinabile e paginabile
document.observe("dom:loaded", function () {
	prestitoTB = new TableOrderer('prestito', {});
	prestitoTB.orderTable('desc', 'asc');
});
</script>
<h3>Gestione credenziali</h3>			

		<table cellspacing="0" cellpadding="0" class="inputtable">	
			<tr>
				<th colspan="2">RICERCA CLIENTE <a class="legright" onclick="openPopupLeg('/popup_legenda.php#data_nascita');" href="javascript:;">Legenda</a></th>			
			</tr>
			<tr>
				<td>
					<fieldset>
						<label>User ID</label>
						<input type="text" size="50" id="searchUserid" disabled="">
					</fieldset>
				</td>
				<td>
					<fieldset>
						<label>Cognome e Nome</label>
						<input type="text" size="50" id="searchNome" disabled="">
					</fieldset>
				</td>
			</tr>
			<tr>
				<td>
					<fieldset>
						<label>Codice Fiscale</label>
						<input type="text" size="50" id="searchCF" disabled="">
					</fieldset>
				</td>	
				<td>
					<fieldset>
						<label>NDG</label>
						<input type="text" size="50" id="searchNDG" disabled="">
					</fieldset>
				</td>	
			</tr>
			<td>
					<fieldset>
						<label>Codice Agenzia</label>
						<input type="text" size="50" id="searchAgenzia" disabled=""><br class="clear" />
						<label>Numero Conto</label>
						<input type="text" size="50" id="searchCC" disabled="">
					</fieldset>
			</td>
			<td>&nbsp;</td>	
		</table>
		<div id="buttonReset" class="buttonpanel">
			<a href="javascript:reset()" class="button">Reset</a>
		</div>
			
		<br class="clear" />
		
		<div class="divtabellalist">
			<table border="0" class="tabellalist">
				<tr>
					<td class="on first"><a title="Lorem ipsum" onclick="selectTab(this,'tabAlert',0);" href="javascript:;">lorem ipsum lorem</a></td>																			
					<td class="off"><a onclick="selectTab(this,'tabAlert',1);" href="javascript:;" title="Lorem ipsum">lorem ipsum lorem</a></td>
					<td class="end"></td>

				</tr>
			</table>
		</div>
		<div id="tabAlert0">
		<table cellspacing="0" cellpadding="0" class="inputtable">	
	<tbody><tr>
		<th colspan="2">ALTRE INFO</th>
	</tr>
	<tr>
		<td>
			<fieldset>
				<label>Operatore</label>
				<select name="searchOperatore" id="searchOperatore" disabled="">
					<option value="-Seleziona-" selected="selected">-Seleziona-</option>
							
					<option value="POSTE">POSTE</option>
							
					<option value="TRE">TRE</option>
							
					<option value="WIND">WIND</option>
							
					<option value="VODAF">VODAF</option>
							
					<option value="TIM">TIM</option>
							
					<option value="BT">BT</option>
							
					<option value="UNO">UNO</option>
							
					<option value="COOP">COOP</option>
							
					<option value="MTV">MTV</option>
							
					<option value="FASTWEB">FASTWEB</option>
							
					<option value="DAILY">DAILY</option>
							
					<option value="TELEPASS">TELEPASS</option>
							
					<option value="AMOBILE">AMOBILE</option>
							
					<option value="CONAD">CONAD</option>
							
					<option value="TEST">TEST</option>
							
					<option value="ALTRO">ALTRO</option>
							
				</select>
				<br>
				<label>Cellulare</label>
				<input type="text" size="40" id="searchCellulare" disabled="">
			</fieldset>
		</td>
		<td>
			<fieldset>
				<label>Email</label>
				<input type="text" size="50" id="searchEmail" disabled="">
			</fieldset>
		</td>		
	</tr>
	<tr>
		<td>
			<fieldset>
				<label>Conti</label>
				<input type="text" size="100%" id="resultAgenzia" disabled="">
			</fieldset>
		</td>
	</tr>
</tbody></table>
		
		<div style="display: block;" id="buttonReset" class="buttonpanel">
			<a href="javascript:reset()" class="button">Reset</a>
		</div>
		
		<table cellspacing="0" cellpadding="0" class="inputtable">	
	<tbody><tr>
		<th colspan="2">DATI LOGIN</th>
	</tr>
	<tr>
		<td id="cli_cert" class="coloreverde">
			<fieldset disabled="disabled">
				<label>Cliente Certificato</label>
				<input type="text" size="50" id="clicert">
 				
			</fieldset>
		</td>
		<td id="stato_otppa" class="colorerosso">
			<fieldset disabled="disabled">
				<label>Stato Otp Pa</label>
				<input type="text" size="50" id="statootppa">
			</fieldset>
		</td>
	</tr>
	<tr>
		<td id="stato_pwd1" class="coloreverde">	
			<fieldset disabled="disabled">
				<label>Password I° Livello</label>
				<input type="text" size="50" id="statopwd1">
			</fieldset>
		</td>	
		<td id="stato_pwd2" class="coloreverde">
			<fieldset disabled="disabled">
				<label>Password II° Livello</label>
				<input type="text" size="50" id="statopwd2">
			</fieldset>
		</td>
	</tr>
	<tr>
		<td id="stato_data_nascita" class="coloreverde">	
			<fieldset disabled="disabled">
				<label>Data di Nascita</label>
				<input type="text" size="50" id="statodatanascita">
			</fieldset>				
		</td>
		<td id="stato_excl_cert" class="coloreverde">	
			<fieldset disabled="disabled">
				<label>Esclusione certificazione PA</label>
				<input type="text" size="50" id="statoexclcert">
			</fieldset>				
		</td>										
	</tr>
	<tr>
		<td id="pin32_comm" class="coloreverde">	
			<fieldset disabled="disabled">
				<label>Comunità Pin32</label>
				<input type="text" size="50" id="statopin32comm">
			</fieldset>				
		</td>										
	</tr>
</tbody></table>
		
		</div>
		<div style="display: none;" id="tabAlert1">
		<table class="resulttable resulttablec" cellspacing="0" cellpadding="0">
			<tr>
				<th width="10">&nbsp;</th>				
				<th width="220">DESCRIZIONE</th>
				<th>ISIN</th>
				<th>PRZ</th>				
				<th>TEL-QUEL</th>				
				<th>MKT</th>
				<th>MONTE</th>
				<th>CTV</th>
				<th>Q.T&Agrave;<br/>PRESTATA</th>
				<th>Q.T&Agrave;<br/>DISP</th>
				<th>&nbsp;</th>
				<th width="90">TIPO</th>
			</tr>
			<tr class="espandibile grigio">									
				<td class="colonnaespansione lastr" width="10"><a href="javascript:;" class="espansione" onclick="switchDetailRows(this);"></a></td>		
				<td width="220">A2A SPA 2003/2013 4,875% 30/10 EURO</td>
				<td>XS0179091425</td>
				<td>&nbsp;</td>				
				<td>&nbsp;</td>				 
				<td>&nbsp;</td>
				<td>54.000</td>
				<td>55.472,4</td>
				<td>0</td>
				<td>54.000</td>
				<td>
					<div style="float:left; background-color:green; width:100px;">&nbsp;</div>
					<div style="float:left; background-color:red; width:0px;">&nbsp;</div>
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
					<div style="float:left; background-color:green; width:100px;">&nbsp;</div>
					<div style="float:left; background-color:red; width:0px;">&nbsp;</div>
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
					<div style="float:left; background-color:green; width:100px;">&nbsp;</div>
					<div style="float:left; background-color:red; width:0px;">&nbsp;</div>
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
					<div style="float:left; background-color:green; width:100px;">&nbsp;</div>
					<div style="float:left; background-color:red; width:0px;">&nbsp;</div>
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
					<div style="float:left; background-color:green; width:100px;">&nbsp;</div>
					<div style="float:left; background-color:red; width:0px;">&nbsp;</div>
				</td>
				<td >OBBLIGAZIONI</td>
			</tr>
			<tr class="espandibile grigio">									
				<td class="colonnaespansione lastr" width="10"><a href="javascript:;" class="espansione" onclick="switchDetailRows(this);"></a></td>		
				<td width="220">A2A SPA 2003/2013 4,875% 30/10 EURO</td>
				<td>XS0179091425</td>
				<td>&nbsp;</td>				
				<td>&nbsp;</td>				 
				<td>&nbsp;</td>
				<td>54.000</td>
				<td>55.472,4</td>
				<td>0</td>
				<td>54.000</td>
				<td>
					<div style="float:left; background-color:green; width:100px;">&nbsp;</div>
					<div style="float:left; background-color:red; width:0px;">&nbsp;</div>
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
					<div style="float:left; background-color:green; width:100px;">&nbsp;</div>
					<div style="float:left; background-color:red; width:0px;">&nbsp;</div>
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
					<div style="float:left; background-color:green; width:100px;">&nbsp;</div>
					<div style="float:left; background-color:red; width:0px;">&nbsp;</div>
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
					<div style="float:left; background-color:green; width:100px;">&nbsp;</div>
					<div style="float:left; background-color:red; width:0px;">&nbsp;</div>
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
					<div style="float:left; background-color:green; width:100px;">&nbsp;</div>
					<div style="float:left; background-color:red; width:0px;">&nbsp;</div>
				</td>
				<td >OBBLIGAZIONI</td>
			</tr>
		</table>
		
		</div>
		<br />


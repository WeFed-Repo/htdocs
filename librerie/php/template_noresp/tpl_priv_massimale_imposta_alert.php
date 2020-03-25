<h1>Imposta alert</h1>
<p>Con questa tipologia di servizio, puoi attivare un <b>alert</b>, ovvero un avviso automatico via 
		Sms che ti inviamo nel momento in cui si verificano determinati eventi che hai selezionato online.
		Per esempio, nel caso di saldo negativo del conto o quando effettui sul sito una disposizione.
</p>
<ul class="listafrec">
			<li><a href="#">Costi Sms</a></li>
			<li><a href="#">Dettagli servizio</a></li>
		</ul>
<table class="form01">
			<tbody>
				<tr>
					<td nowrap="nowrap"><div>N° di cellulare: <b>1111111111</b></div></td>
					<td nowrap="nowrap"><div>Operatore: <b>Tim</b></div></td>
					<td nowrap="nowrap">
						<a title="modifica numero" class="btnevid1" href="">
							<img alt="" src="/img/ret/btn_left_sm1.gif"/><span>modifica numero telefono</span><img alt="" src="/img/ret/btn_right_sm1.gif"/>
						</a>
					</td>
				</tr>
			</tbody>
</table>

<div class="divtabellatabs">
		<table cellspacing="0" cellpadding="0" border="0" class="tabellatabs">
			<tr>
				<td class="offinizio"></td>
					<td id="tab1" class="off"><a  title="Conto">Conto</a></td><td class="off2"> </td>
					<td id="tab2" class="off" ><a  href="javascript:void(0);" title="Deposito">Deposito</a></td><td class="off2">&nbsp;</td>
					<td id="tab3" class="off" ><a   href="javascript:void(0);" title="Carte">Carte</a></td><td class="off2">&nbsp;</td>
					<td id="tab4" class="off"><a  href="javascript:void(0);" title="F24">F24</a></td><td class="off2">&nbsp;</td>
					<td id="tab5" class="off"><a href="javascript:void(0);" title="Portafoglio">Portafoglio</a></td><td class="off2">&nbsp;</td>
					<td id="tab6" class="off"><a  href="javascript:void(0);" title="Quotazione titoli">Quotazione titoli</a></td><td class="off2b">&nbsp;</td>
					<td id="tab7" class="on" isselected="true"><a href="javascript:void(0);" title="Sicurezza">Sicurezza</a></td><td class="on2">&nbsp;</td>
				</tr>
		</table>
		<div class="divtabellacont">
			<div style="display: block;" id="tabAlert7">
				<form onsubmit="return false;" action="" name="smsSicurezzaForm" id="smsSicurezzaForm">
							<table class="form04">
								
									<tr class="titolo"> 
										<td nowrap="nowrap" class="txtl top">SICUREZZA ON LINE</td>
										<td class="top"> </td>
										<td class="top"> </td>
										<td class="top"> </td>
										<td width="97" class="left">Costo</td>
										<td width="49" class="left">Attiva</td>
									</tr>
									<tr class="bianco">
										<td class="txtl" colspan="4">
											<!--NUOVO TOOLTIP-->
											<span id="tooltip1" class="uniqTooltipText" onmouseout="removeUniqTooltip(event,this);" onmouseover="createUniqTooltip(event, this);" onmousemove="createUniqTooltip(event, this)">
												<span class="uniqTooltipPos">Blocco utente</span>
													<span class="uniqTooltipInnerHTML">
														Un alert ti avvisa quando la tua utenza &eacute; stata <b>bloccata per motivi di sicurezza
													</span>
											</span>
										<!--fine NUOVO TOOLTIP--> 
										</td>
										<td class="right">0,15 &euro;</td>
										<td class="center">
											<input type="hidden" name="bloccoUtenteID" id="bloccoUtenteID" value="0"/>
											<input type="checkbox" name="bloccoUtenteIsActive" id="bloccoUtenteIsActive"/>
										</td>
									</tr>
									<tr>
										<td class="txtl" colspan="4">
												<!--NUOVO TOOLTIP-->
											<span id="tooltip2" class="uniqTooltipText" onmouseout="removeUniqTooltip(event,this);" onmouseover="createUniqTooltip(event, this);" onmousemove="createUniqTooltip(event, this)">
												<span class="uniqTooltipPos">Accesso al sito</span>
													<span class="uniqTooltipInnerHTML">
														Un alert ti avvisa ogniqualvolta <strong>accedi al sito</strong>.
													</span>
											</span>
										<!--fine NUOVO TOOLTIP--> 
										</td>
										<td class="right">0,15 &euro;</td>
										<td class="center">
											<input type="hidden" name="accessoSitoID" id="accessoSitoID" value="0"/>
											<input type="checkbox" name="accessoSitoIsActive" id="accessoSitoIsActive"/>
										</td>
									</tr>
									<tr class="bianco"> 
										<td class="txtl" colspan="4">
												<!--NUOVO TOOLTIP-->
											<span id="tooltip3" class="uniqTooltipText" onmouseout="removeUniqTooltip(event,this);" onmouseover="createUniqTooltip(event, this);" onmousemove="createUniqTooltip(event, this)">
												<span class="uniqTooltipPos">Disposizioni online tipo 1</span>
													<span class="uniqTooltipInnerHTML">
														Nelle disposizioni online sono comprese:<br/>- bonifici<br/>- ricarica carte prepagate<br/>- ricariche cellulari
													</span>
											</span>
										<!--fine NUOVO TOOLTIP--> 
										</td>
										<td class="right">Gratis per sempre</td>
										<td class="center">
											<input type="hidden" name="dispOnlineTipo1ID" id="dispOnlineTipo1ID" value="2129304"/>
											<input type="checkbox" checked="true" disabled="true"/>
											<input type="hidden" value="on" name="dispOnlineTipo1IsActive" id="dispOnlineTipo1IsActive"/>
										</td>
									</tr>
									<tr> 
										<td class="txtl" colspan="4">
											<a href="#2"><span class="uniqTooltipPos"><strong>Disposizioni di tipo due</strong></span>
											<span class="uniqTooltipInnerHTML">
								
												Nelle disposizioni online sono comprese:
												<ul>
													<li>lorem ipsum</li>
													<li>lorem ipsum</li>
													<li>lorem ipsum</li>
													<li>cambio massimale carte bancomat</li>
												</ul>
								
							</span>
						</span></a>
										</td>
										<td class="right">Gratis</td>
										<td class="center">
											<input type="hidden" name="dispOnlineTipo2ID" id="dispOnlineTipo2ID" value="0"/>
											<input type="checkbox" name="dispOnlineTipo2IsActive" id="dispOnlineTipo2IsActive"/>											
										</td>
									</tr>
								
							</table>
						</form>
						
						<div class="fooform" id="smsSicurezzaFormLoading">	
							<div class="fooformrightb" id="smsSicurezzaFormDisplay">
								<div><a title="salva impostazioni" class="btnformright" onclick=""><img alt="" src="/img/ret/btn_left_ar.gif"/><span>salva impostazioni</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a></div>
								<br class="clear"/>
							</div>							
							<br class="clear"/>
						</div>
						
				</div>
			</div>		
			<img class="chiusura" alt="" src="/wscmn/img/str_tab_chiusura.gif"/>
		</div>
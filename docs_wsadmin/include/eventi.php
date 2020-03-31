<form action="/wetools/admin/2l/do/admin/event.do?tabId=WeT_Pri_Eve&obsKey=WeT_Pri_Eve_Att&genere_evento=&status=online&tipo_evento=mail_template_23" method="post" id="saveMembersForm" name="saveMembersForm" enctype="multipart/form-data">
	<input type="hidden" id="method2" name="method" value="" />
	<div style="position:relative; left:0px; width:auto; text-align: left;">
		<span  style="display: none;" >Errore: impossibile spostare gli utenti selezionati come registrati, aumenta il numero di utenti massimi e/o i posti riservati.</span>
		<table cellspacing="0" cellpadding="0" class="inputtable">
			<tr>
				<td>
					<select onchange="javascript:changeFilterOfMembers();" id="selectPartecipante" name="selectPartecipante">
						<option value="Y"  selected="selected"  >Utenti registrati</option>
						<option value="N"  >Utenti in stand by</option>
						<option value="Z"  >Utenti rimossi</option>
						<option value="T"  >Tutti gli utenti</option>
					</select>
				</td>		
				<td>		
					<select onchange="javascript:changeFilterOfMembers();" id="selectMemberType" name="selectMemberType">
						<option value="Public"  >Utenti pubblici</option>
						<option value="Private"  >Utenti privati</option>
						<option value="All"  selected="selected"  >Tutti gli utenti</option>
					</select>
				</td>	
				<td>	
					<a onclick="javascript:openPopOverLayer('checkAlert','floating','1');" href="javascript:;" style="text-decoration:none">
						<img src="/img/ico1gr_excel.gif" title="Esporta in formato excel" border="0" />
					</a>	
					<a onclick="javascript:disableMembersSelected();" href="javascript:;" style="text-decoration:none">
						<img src="/img/ico1gr_mov-su-cc.gif" title="Sposta in <<Utenti in stand by>>" border="0" />
					</a>
					<a onclick="javascript:deleteMembersSelected();"  href="javascript:;" style="text-decoration:none">
						<img src="/img/ico1gr_revoca.gif" title="Sposta in <<Utenti rimossi>>" border="0" />
					</a>
				</td>
				<td>
					<input id="save_excel" name="save_excel" type="file"  style="margin-left:5px;margin-right:5px;float:left" onchange="javascript:controlla_estensione(this);" />
					<a onclick="javascript:;" id="img_save_excel" >
						<img src="/img/ico2or_excel.gif" title="Importa file in formato excel" border="0" style="float:left" />
					</a>
				</td>	
				<td>	
					<input type="text" id="searchString" name="searchString" style="width: 200px;margin-left:5px" value="" />
					<input type="button" onclick="javascript:searchOnMembers();" value="cerca utente" style="width:100px;" />
					<a onclick="javascript:sendReminderMembersSelected();" href="javascript:;" style="text-decoration:none">
						<img src="/img/ico2or_lampaon.gif" title="Invia mail di reminder" border="0" />
					</a>
					<a onclick="javascript:sendThankMembersSelected();" href="javascript:;" style="text-decoration:none">
						<img src="/img/ico1gr_autorizzo.gif" title="Invia mail di ringraziamento" border="0" />
					</a>
					<a onclick="javascript:sendModifyMembersSelected();" href="javascript:;" style="text-decoration:none">
						<img src="/img/ico1gr_modifica.gif" title="Invia mail di modifica evento" border="0" />
					</a>
					<a onclick="javascript:sendConfirmMembersSelected();" href="javascript:;" style="text-decoration:none">
						<img src="/img/ico1gr_seleziona.gif" title="Re-invia mail di conferma iscrizione" border="0" />
					</a>			
				</td>
			</tr>
		</table>
	</div>
</form>

<table class="inputtable">		
		<tr id="filterMenu">
				<th style="max-height: 20px;">
					<table class="selAll">
						<tbody><tr>
							<td style="padding:0;border:0">Seleziona</td>
							<td style="padding:0 0 0 5px;border:0">
								<input id="checkBoxAllMembers" onclick="javascript:onClickAll();" style="margin: 1px;" type="checkbox">
							</td>
						</tr>
					</tbody></table>
				</th>
				<th>Nome</th>
				<th>Cognome</th>
				<th>Data di nascita</th>
				<th>Sesso</th>
				<th>Email</th>
				<th style="min-width: 110px;">Data iscrizione
					<img id="image_IscrizioneFilter" src="/img/str_paginaz_filter.gif" title="filtro" style="cursor: pointer; display: inline;" onclick="showFilterOnSelect(this)" onmouseover="showFilterOnBlur(this)" height="20" width="20">
					<ul id="filterDataIscrizione" style="border:solid 1px #ccc; list-style-type: none; background-color: transparent; position: absolute; z-index: 300; overflow: auto; display: none; top: 500.4px; left: 628px; height: 80px; padding: 0; margin: 0pt; width: 160px;">
						<li class="monthlySearching" style="padding:3px 1px 3px 1px; margin:0; border-bottom-style: solid; border-top-style: solid; border-width: 1px 0 1px 0; border-color: #8AB10B; background-color:#DCE7B5; color:black; font-size: 13px">mag 2014</li>
						<li onmouseover="onMouseOverFilterList(this)" onmouseout="onMouseOutFilterList(this)" style="padding:3px 1px 3px 1px; margin:0; border-bottom-style: solid; border-width: 1px 0 1px 0; border-color: #ccc; background-color:#fff;">29/05/2014</li>
						<li onmouseover="onMouseOverFilterList(this)" onmouseout="onMouseOutFilterList(this)" style="padding: 3px 1px; margin: 0pt; border-bottom: 1px solid white; border-width: 1px 0pt; border-color:#ccc; background-color: #fff;">22/05/2014</li>
						<li onmouseover="onMouseOverFilterList(this)" onmouseout="onMouseOutFilterList(this)" style="padding:3px 1px 3px 1px; margin:0; border-bottom-style: solid; border-width: 1px 0 1px 0; border-color:#ccc; background-color: #fff;">21/05/2014</li>
						<li onmouseover="onMouseOverFilterList(this)" onmouseout="onMouseOutFilterList(this)" style="padding: 3px 1px; margin: 0pt; border-bottom: 1px solid white; border-width: 1px 0pt; border-color: white; border-color:#ccc; background-color: #fff;">20/05/2014</li>
						<li onmouseover="onMouseOverFilterList(this)" onmouseout="onMouseOutFilterList(this)" style="padding:3px 1px 3px 1px; margin:0; border-bottom-style: solid; border-width: 1px 0 1px 0; border-color:#ccc; background-color: #fff;">02/05/2014</li>
						<li class="monthlySearching" style="padding:3px 1px 3px 1px; margin:0; border-bottom-style: solid; border-top-style: solid; border-width: 1px 0 1px 0;border-color: #8AB10B; background-color:#DCE7B5; color:black; font-size: 13px">apr 2014</li>
						<li onmouseover="onMouseOverFilterList(this)" onmouseout="onMouseOutFilterList(this)" style="padding: 3px 1px; margin: 0pt; border-bottom: 1px solid white; border-width: 1px 0pt;border-color:#ccc; background-color: #fff;">23/04/2014</li>
						<li onmouseover="onMouseOverFilterList(this)" onmouseout="onMouseOutFilterList(this)" style="padding: 3px 1px; margin: 0pt; border-bottom: 1px solid white; border-width: 1px 0pt;border-color:#ccc; background-color: #fff;">22/04/2014</li>
						<li onmouseover="onMouseOverFilterList(this)" onmouseout="onMouseOutFilterList(this)" style="padding: 3px 1px; margin: 0pt; border: 0pt none; border-color:#ccc; background-color: #fff;">Tutti</li>
					</ul>
				</th>
				<th>Identificativo</th>
				<th style="min-width: 90px;">Correntista
					<img id="image_CorrentistaFilter" src="/img/str_paginaz_filter.gif" title="filtro" style="cursor: pointer; display: inline;" onclick="showFilterOnSelect(this)" onmouseover="showFilterOnBlur(this)" height="20" width="20">
						<ul id="filterCorrentista" style="border-width: 0pt 0pt 2px; list-style-type: none; background-color: transparent; position: absolute; z-index: 300; overflow: auto; display: none; height: 61px; padding: 2px 0pt; margin: 0pt; border:1px solid #8AB10B;">
							<li onmouseover="onMouseOverFilterList(this)" onmouseout="onMouseOutFilterList(this)" style="padding:3px 1px 3px 1px; margin:0; border-bottom-style: solid; border-width: 1px 0 1px 0;;border-color:#ccc; background-color: #fff;">N</li>
							<li onmouseover="onMouseOverFilterList(this)" onmouseout="onMouseOutFilterList(this)" style="padding:3px 1px 3px 1px; margin:0; border-bottom-style: solid; border-width: 1px 0 1px 0;;border-color:#ccc; background-color: #fff;">Y</li>
							<li onmouseover="onMouseOverFilterList(this)" onmouseout="onMouseOutFilterList(this)" style="padding:3px 1px 3px 1px; margin:0;;border-color:#ccc; background-color: #fff;">Tutti</li>
						</ul>
				</th>
				<th>Indirizzo</th>
				<th>Provincia</th>
				<th>Comune</th>
				<th>Cap</th>
				<th>Cellulare</th>
				<th>Telefono</th>
				<th>Categoria</th>
				<th>Mail remind inviate</th>
				<th>Mail Ringraziamento inviate</th>
					
						<th>Qual è il tuo broker principale?</th>
					
						<th>Qual è il tuo broker secondario?</th>
					
						<th>Quali programmi professionali di analisi tecnica utilizzi?</th>
					
						<th>Quante operazioni fai al mese?</th>
					
						<th>Quali servizi informativi o applicativi di information provider utilizzi?</th>
					
						<th>Su quali strumenti finanziari operi?</th>
					
						<th>Utilizzi trading system?</th>
					
						<th>A quale sessione vuoi partecipare?</th>
					
						<th>consenso1</th>
					
						<th>consenso2</th>

			</tr>

				<tr>
					<td>
						<div class="colored Y">
							<input name="mail_template_23_58694" id="mail_template_23_58694" onclick="javascript:setMemberChecked('mail_template_23_58694');" type="checkbox">
						</div>
					</td>
					<td>alessandro</td>
					<td>re</td>
					<td>27/08/1988</td>
					<td>maschio</td>
					<td>linda.dogliani@webank.it</td>
					<td class="ColumnDataIscrizione">29/05/2014</td>
					<td>rexlsn88m27E514I</td>
					<td class="ColumnCorrentista">N</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>335-1670119</td>
					<td></td>
					<td>fisico</td>
					<td>0</td>
					<td>0</td>
					
					
							<td>Onlinesim</td>
					
							<td>nessuno</td>
					
							<td>nessuno</td>
					
							<td>21-50</td>
					
							<td>nessuno</td>
					
							<td>nessuno</td>
					
							<td>no</td>
					
							<td>Mattina e Pomeriggio</td>
					
							<td>no</td>
					
							<td>yes</td>
					
				</tr>

				<tr>
					<td>
						<div class="colored Y">
							<input name="mail_template_23_18176" id="mail_template_23_18176" onclick="javascript:setMemberChecked('mail_template_23_18176');" type="checkbox">
						</div>
					</td>
					<td>FRIGGA</td>
					<td>HOENIG</td>
					<td>28/11/1967</td>
					<td>femmina</td>
					<td>NOSSWITZ@HOTMAIL.IT</td>
					<td class="ColumnDataIscrizione">02/05/2014</td>
					<td>HNGFGG67S68Z112F</td>
					<td class="ColumnCorrentista">Y</td>
					<td>VIA ANTONIO GRAMSCI, 5</td>
					<td>MI</td>
					<td>OZZERO</td>
					<td>20080</td>
					<td>322-444444444</td>
					<td></td>
					<td>fisico</td>
					<td>3</td>
					<td>6</td>
					
					
							<td>Directa</td>
					
							<td>nessuno</td>
					
							<td>nessuno</td>
					
							<td>11-20</td>
					
							<td>nessuno</td>
					
							<td>nessuno</td>
					
							<td>no</td>
					
							<td>Tutte</td>
					
							<td>yes</td>
					
							<td>no</td>
					
				</tr>

				<tr>
					<td>
						<div class="colored Y">
							<input name="mail_template_23_58685" id="mail_template_23_58685" onclick="javascript:setMemberChecked('mail_template_23_58685');" type="checkbox">
						</div>
					</td>
					<td>tlm</td>
					<td>cst</td>
					<td>11/06/1964</td>
					<td>maschio</td>
					<td>paol@paolo.it</td>
					<td class="ColumnDataIscrizione">21/05/2014</td>
					<td>CSTTLM64H11F205C</td>
					<td class="ColumnCorrentista">Y</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>320-1234567</td>
					<td></td>
					<td>fisico</td>
					<td>2</td>
					<td>0</td>
					
					
							<td>Webank</td>
					
							<td>nessuno</td>
					
							<td>nessuno</td>
					
							<td>Nessuna</td>
					
							<td>nessuno</td>
					
							<td>nessuno</td>
					
							<td>no</td>
					
							<td>Tutte</td>
					
							<td>yes</td>
					
							<td>yes</td>
					
				</tr>

				<tr>
					<td>
						<div class="colored Y">
							<input name="mail_template_23_18174" id="mail_template_23_18174" onclick="javascript:setMemberChecked('mail_template_23_18174');" type="checkbox">
						</div>
					</td>
					<td>lionel</td>
					<td>messi</td>
					<td>08/08/1983</td>
					<td>maschio</td>
					<td>lionel@gmail.com</td>
					<td class="ColumnDataIscrizione">23/04/2014</td>
					<td>MSSLNL83M08Z600I</td>
					<td class="ColumnCorrentista">N</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>320-1213456</td>
					<td></td>
					<td>fisico</td>
					<td>15</td>
					<td>16</td>
					
					
							<td>Nessuno</td>
					
							<td>nessuno</td>
					
							<td>nessuno</td>
					
							<td>Nessuna</td>
					
							<td>nessuno</td>
					
							<td>nessuno</td>
					
							<td>no</td>
					
							<td>Tutte</td>
					
							<td>yes</td>
					
							<td>no</td>
					
				</tr>

				<tr>
					<td>
						<div class="colored Y">
							<input name="mail_template_23_18175" id="mail_template_23_18175" onclick="javascript:setMemberChecked('mail_template_23_18175');" type="checkbox">
						</div>
					</td>
					<td>franco</td>
					<td>ciccio</td>
					<td>01/01/1980</td>
					<td>maschio</td>
					<td>bereketeab@euris.it</td>
					<td class="ColumnDataIscrizione">23/04/2014</td>
					<td>CCCFNC80A01F205E</td>
					<td class="ColumnCorrentista">N</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>320-1213456</td>
					<td></td>
					<td>fisico</td>
					<td>15</td>
					<td>11</td>
					
					
							<td>Nessuno</td>
					
							<td>nessuno</td>
					
							<td>nessuno</td>
					
							<td>Nessuna</td>
					
							<td>nessuno</td>
					
							<td>nessuno</td>
					
							<td>no</td>
					
							<td>Tutte</td>
					
							<td>yes</td>
					
							<td>no</td>
					
				</tr>

				<tr>
					<td>
						<div class="colored Y">
							<input name="mail_template_23_58693" id="mail_template_23_58693" onclick="javascript:setMemberChecked('mail_template_23_58693');" type="checkbox">
						</div>
					</td>
					<td>mario</td>
					<td>de leo</td>
					<td>03/05/1976</td>
					<td>maschio</td>
					<td>linda.dogliani@webank.it</td>
					<td class="ColumnDataIscrizione">29/05/2014</td>
					<td>DLEMRA76E03C352B</td>
					<td class="ColumnCorrentista">N</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>335-1670119</td>
					<td></td>
					<td>fisico</td>
					<td>0</td>
					<td>0</td>
					
					
							<td>Sella</td>
					
							<td>nessuno</td>
					
							<td>nessuno</td>
					
							<td>1-10</td>
					
							<td>nessuno</td>
					
							<td>nessuno</td>
					
							<td>no</td>
					
							<td>Pomeriggio</td>
					
							<td>no</td>
					
							<td>yes</td>
					
				</tr>

				<tr>
					<td>
						<div class="colored Y">
							<input name="mail_template_23_18173" id="mail_template_23_18173" onclick="javascript:setMemberChecked('mail_template_23_18173');" type="checkbox">
						</div>
					</td>
					<td>bkt</td>
					<td>ycb</td>
					<td>13/10/1979</td>
					<td>maschio</td>
					<td>bereketeab@euris.it</td>
					<td class="ColumnDataIscrizione">22/04/2014</td>
					<td>ycbbkt79r13z368r</td>
					<td class="ColumnCorrentista">N</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>320-1213456</td>
					<td></td>
					<td>fisico</td>
					<td>11</td>
					<td>12</td>
					
					
							<td>Nessuno</td>
					
							<td>nessuno</td>
					
							<td>nessuno</td>
					
							<td>Nessuna</td>
					
							<td>nessuno</td>
					
							<td>nessuno</td>
					
							<td>no</td>
					
							<td>Tutte</td>
					
							<td>yes</td>
					
							<td>yes</td>
					
				</tr>

				<tr>
					<td>
						<div class="colored Y">
							<input name="mail_template_23_58683" id="mail_template_23_58683" onclick="javascript:setMemberChecked('mail_template_23_58683');" type="checkbox">
						</div>
					</td>
					<td>paolo</td>
					<td>tiano</td>
					<td>15/08/1973</td>
					<td>maschio</td>
					<td>ppp@paolo.it</td>
					<td class="ColumnDataIscrizione">20/05/2014</td>
					<td>TNIPLA73M15F205K</td>
					<td class="ColumnCorrentista">N</td>
					<td>123, 123</td>
					<td>AG</td>
					<td>AGRIGENTO</td>
					<td>12312</td>
					<td>123-1231223</td>
					<td></td>
					<td>fisico</td>
					<td>0</td>
					<td>1</td>
					
					
							<td>Webank</td>
					
							<td>nessuno</td>
					
							<td>nessuno</td>
					
							<td>Nessuna</td>
					
							<td>nessuno</td>
					
							<td>nessuno</td>
					
							<td>no</td>
					
							<td>Tutte</td>
					
							<td>yes</td>
					
							<td>yes</td>
					
				</tr>

				<tr>
					<td>
						<div class="colored Y">
							<input name="mail_template_23_58689" id="mail_template_23_58689" onclick="javascript:setMemberChecked('mail_template_23_58689');" type="checkbox">
						</div>
					</td>
					<td>franca</td>
					<td>carlini</td>
					<td>16/10/1944</td>
					<td>femmina</td>
					<td>linda.dogliani@webank.it</td>
					<td class="ColumnDataIscrizione">22/05/2014</td>
					<td>crlfnc44R56A851O</td>
					<td class="ColumnCorrentista">N</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>335-1670119</td>
					<td></td>
					<td>fisico</td>
					<td>0</td>
					<td>0</td>
					
					
							<td>Fineco</td>
					
							<td>nessuno</td>
					
							<td>nessuno</td>
					
							<td>21-50</td>
					
							<td>nessuno</td>
					
							<td>nessuno</td>
					
							<td>no</td>
					
							<td>Mattina</td>
					
							<td>no</td>
					
							<td>yes</td>
					
				</tr>

				<tr>
					<td colspan="28">
						<table>
							<tbody><tr>

								<td>
									<a style="cursor: pointer;" onclick="javascript:goToPage('1');">
										
											<b>1</b>
										
									</a>
								</td>

							</tr>
						</tbody></table>
					</td>
				</tr>

			<tr class="invia">
				<td colspan="28">
					<input onclick="javascript:history.back();" value="Indietro" type="button">
				</td>
			</tr>
	</table>
<div class="layeralert2" id="checkAlert" style="display:none">
       <div class="head handle" style="cursor: move; background: #000"></div>
       <div class="body">
             <div class="boxesito negativo">
                    <div class="middle"><span class="imgCont"></span>
                           <div class="text">
                                  <div class="row-fluid">
                                        <div class="span10">
                                               <p><strong>ERRORE</strong></p>
                                               <p id="checkAlert_msgError"></p>
                                        </div>
                                        <div class="span2">
                                               <div class="aButtoncons formCenteredBtn txtAlRight">
                                                      <a href="javascript:;" class="aButton" onclick="closePopOverLayer('checkAlert'); return false;"><span>chiudi</span></a>
                                               </div>
                                        </div>
                                  </div>
                           </div>
                    </div>
             </div>
       </div>
       <div class="footer"></div>
</div>


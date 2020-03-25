<?php virtual("/librerie/include/commons/titoli/tit_black_priv_004.html"); ?>
<div class="box5">
<?php virtual("/librerie/include/commons/navigazione/nav_black_priv_005.html"); ?>
<div style="visibility: visible;" id="box5ctntab1"> 
<div id="contcont">
<ul class="lista">
<br/>
<li>Nella tabella sotto, sono presenti i <a class="tipo3" href="/webankpri/wbOnetoone/3l/do/wbOnetoone/schedaProdotto.do?BV_UseBVCookie=Yes&amp;cf=0.06729046146699336COL=yes&amp;OBSCNT=TAB&amp;tabId=nav_priv_wbx_sportello&amp;OBSKEY=nav_priv_wbx_col_ABIL&amp;OBSKEY3=nav_priv_wbx_i_doc_che_puoi_ricevere"><b>documenti bancari</b></a> disponibili online relativi al 2009.</li>
<li>Per visualizzare gli altri documenti utilizza la <b> ricerca avanzata</b>.</li>
<li>I documenti prodotti dopo l'eventuale <b> disattivazione</b> del servizio saranno inviati in formato cartaceo.</li>
</ul>

             	  
        <?php virtual("/librerie/include/commons/tabelle/tab_black_priv_100.php"); ?>
        <br clear="all"/>       
<br/>

<div class="ricerca"><br/>
<img title="Ricerca avanzata" alt="Ricerca avanzata" src="/img/ret/ricerca_avanzata.gif"/></div>
<br/>
<div class="tithelp">
	<div class="helpleft">Inserisci i parametri di ricerca (sono esclusi i conti estinti)</div>
	<div align="right" class="BvTableHeaderHelp">	        
	<a title="help" href="javascript:top.pop_up_int('/webankpri/common/ExternalHelp.jsp?cf=0.285712954558607&amp;key=WFA_TestoA4_Ricerca_avanzata');"><img src="/img/ret/help.gif"/></a> 
	<a title="help" href="javascript:top.pop_up_int('/webankpri/common/ExternalHelp.jsp?cf=0.285712954558607&amp;key=WFA_TestoA4_Ricerca_avanzata');">help </a> 	
	</div>
<br class="clear"/></div>

<!-- div class="tithelp">
<div class="helpleft">Inserisci i parametri di ricerca (sono esclusi i conti estinti)</div>
					<div class="helpright">
						<a href="javascript:parent.frames[0].pop_up_int('Help/help_bonifico.html');" title="help">help </a> 
						<a href="javascript:parent.frames[0].pop_up_int('Help/help_bonifico.html');" title="help"><img src="/img/ret/help.gif"></a>
					</div>
<br clear="all" />
</div-->

<form name="DATI" method="post">
		<input type="hidden" value="Yes" name="keep"/>
		<input type="hidden" value="1" name="pagina"/> 
		<input type="hidden" value="N" name="tipoRicerca"/>
		<input type="hidden" value="WsSearchDocumentsAction1" name="nomeRicerca"/> 
		<input type="hidden" value="DD" name="tipoOrdinamento"/> 
		<input type="hidden" name="cartellaSelezionata"/>
		<input type="hidden" name="nomeCartella"/>

	<table width="100%" border="0" class="form01">

		<tbody><tr style="display: none;">
			<td/>
			<td><input type="text" id="mod" name="modello"/></td>
			<td/>
			<td><input type="text" name="text2"/></td>
		</tr>

		<tr>
			<td>Rapporto</td>
			<td colspan="3"><select class="tipoc" size="1" name="numeroRapporto">
				<option value="">-- seleziona --</option>
				
					<option value="0599-00000000083613">
						
									CC 
										
						0599-00000000083613</option>
					
				
				<option value="Solo i depositi titoli">Solo i depositi titoli</option>
				<option value="Solo conti correnti">Solo conti correnti</option>
				<option value="Tutti">Tutti</option>
			</select></td>
		</tr>
		<tr>
			<td width="100" class="tipoc">Categoria documenti</td>
			<td width="140"><select onchange="javascript:caricaTipiDoc(selectedIndex-1, -1)" id="list1" class="tipoc" size="1" name="categoria">
				<option value="">-- seleziona --</option>
	
	
				
				<option value="ESTRATTI C/C">Estratti Conto Corrente</option>
				
				<option value="ESTRATTO CT">Estratti deposito Titoli</option>
				
				<option value="DOC. DI SINTESI">Documento di sintesi</option>
				
				<option value="TITOLI">Titoli</option>
				
				<option value="ENTRATE">Accrediti</option>
				
				<option value="USCITE">Addebiti</option>
				
				<option value="PAGAMENTI">Pagamenti RIBA/Portafoglio</option>
				
				<option value="INCASSI">Incassi</option>
				
	<option value="">Tutte le categorie</option>
			</select></td>
			
	
			<td width="80">Tipo documento</td>
	
			<td><select onchange="cambiaTipoDoc(selectedIndex-1)" id="list2" class="tipoc" size="1" name="tipoDiDocumento">
				
				<option value="">-- seleziona una categoria --</option>
			</select></td>
		</tr>
 
		
		<tr>
			<td class="tipoc">Stato</td>
			<td colspan="3"><select class="tipoc" size="1" name="statoDocumenti">
				<option value="">-- seleziona --</option>
				<option value="L">Letto</option>
				<option value="N">Non
				letto</option>
				<option value="T">Tutti</option>
			</select></td>
			<input type="hidden" value="" name="cartella"/>
		</tr>
		 
		
		<tr>
			<td>Periodo</td>
			<td colspan="3">anno: <select class="tipoc" size="1" name="anno">
				<option selected="" value="2009">2009</option>
				
				<option value="2008">2008</option>
				
				<option value="2007">2007</option>
				
				<option value="2006">2006</option>
				
				<option value="2005">2005</option>
				
				<option value="2004">2004</option>
				
			</select>  mese: da  <select class="tipoc" size="1" name="dalMM">
				<option selected="" value="">-- seleziona --</option>
				
				<option value="01">Gennaio</option>
				
				<option value="02">Febbraio</option>
				
				<option value="03">Marzo</option>
				
				<option value="04">Aprile</option>
				
				<option value="05">Maggio</option>
				
				<option value="06">Giugno</option>
				
				<option value="07">Luglio</option>
				
				<option value="08">Agosto</option>
				
				<option value="09">Settembre</option>
				
				<option value="10">Ottobre</option>
				
				<option value="11">Novembre</option>
				
				<option value="12">Dicembre</option>
				
			</select>  mese: a  <select class="tipoc" size="1" name="alMM">
				<option selected="" value="">-- seleziona --</option>
				
				<option value="01">Gennaio</option>
				
				<option value="02">Febbraio</option>
				
				<option value="03">Marzo</option>
				
				<option value="04">Aprile</option>
				
				<option value="05">Maggio</option>
				
				<option value="06">Giugno</option>
				
				<option value="07">Luglio</option>
				
				<option value="08">Agosto</option>
				
				<option value="09">Settembre</option>
				
				<option value="10">Ottobre</option>
				
				<option value="11">Novembre</option>
				
				<option value="12">Dicembre</option>
				
			</select></td>
		</tr>
		<tr style="display: none;" id="imp">
			<td>Importo</td>
	
			<td colspan="3">da  
				<input disabled="disabled" value="" name="importoDa" id="impda" size="15" maxlength="15"/> a   
				<input disabled="disabled" value="" name="importoA" id="impa" size="15" maxlength="15"/>
			</td>
		</tr>
		<tr style="display: none;" id="tr1">
			<td><span id="d1">descr 1</span></td>
			<td colspan="3">
				<input value="" id="desc1" name="desc1" size="15" maxlength="15"/>
			</td>
		</tr>

		<tr style="display: none;" id="tr2"> 
			<td align="left" class="tipoc">
			<span id="d2">descr 2</span></td>
			<td colspan="3">
				<input value="" id="desc2" name="desc2" size="15" maxlength="15"/>
				
			</td>
		</tr>
				</tbody></table>
				
					<div class="fooform">
						<div class="fooformtop"/>
						<div class="fooformleft">
							<div class="text">
							<span class="basso">I parametri indicati negli ultimi due campi editabili sono applicabili ai documenti prodotti<br/>dopo il 23/7/2008.</span>
							</div>
						</div>
						<div class="fooformright">
							<a onclick="javascript:EseguiRicerca();" class="btnformright" href="#">
								<img alt="" src="/img/ret/btn_left_ar.gif"/>
								<span>ricerca</span>
								<img alt="" src="/img/ret/btn_right_ar.gif"/>
							</a>
							<br clear="all"/>
						</div>
						<br clear="all"/>
					</div>


</form>
</div>
</div>
</div>
<iframe style="visibility: hidden;z-index:1999;" id="ifr" src="/img/ret/pixel_trasp.gif" frameborder="3" height="10" scrolling="no" width="10"></iframe> 	

<h2>Alert di mercato attivi</h2>
<section>
	<p>Nella tabella sotto sono elencati gli <strong>alert di mercato che hai impostato.</strong></p>
	<form class="formGenerico borderFormRounded output" role="form">
		<!--RIGA DIVISA IN TRE CAMPI -->
		<div class="form-group">
			<div class="row">
				<div class="col-xs-6 col-sm-3">
					<label class="control-label">canale di notifica</label>
					<span class="output">nessuno</span>
				</div>
				<div class="col-xs-6 col-sm-3 no-label-small">
					<div class="btn-align-left">
						<a type="button" class="btn btn-primary" id="">modifica</a>
						<br class="clear">
					</div>
				</div>
				<div class="col-xs-12 col-sm-3">
					<label class="control-label">email</label>
					<span class="output">camaro@tiscalinet.it</span>
				</div>
				<div class="col-xs-12 col-sm-3">
					<label class="control-label">cellulare</label>
					<span class="output">335*****90</span>
				</div>
			</div>
		</div>
	</form>

	<h4>Segnali di mercato attivi</h4>
		<table cellspacing="0" cellpadding="0" border="0"  data-toggle="table" id="table1" data-sortable="true" data-sort-order="asc" data-sort-name="Titolo" class="sortableTable">
		    <thead>
		        <tr>
		        	<th data-sortable="false" class="center"></th>
		            <th data-sortable="true" data-field="Titolo" class="left">Titolo/Indice</th>
		            <th data-sortable="true" data-field="Mercato" class="left">Mercato</th>
		            <th data-sortable="true" data-field="UltimaQuot" class="right" data-sorter="fixQuant">Ultima quotazione</th>
		            <th data-sortable="true" data-field="DataUltimaQuot" data-sorter="fixDate"  class="center">Data - Ora <br>ult. quotaz</th>
		            <th data-sortable="false" data-field="Condizione"  class="center">Condizione</th>
					<th data-sortable="true" data-field="Scadenza" data-sorter="fixDate"  class="center">Scadenza</th>
		            <th data-sortable="true" data-field="Stato" class="left">Stato</th>
		            <th data-sortable="false" class="center"></th>
		            
				</tr>
		    </thead>
			<tbody>
				<tr class="dispari">
					<td>
						<div class="linkTooltip" data-toggle="modal">
							<a title="scegli l'operazione da effettuare" id="link1" class="linkVai no-underline btn-icon" onclick="multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', '']);"><i class="icon icon-2x icon-ico_azioni02A"></i></a>						
						</div>
					</td>
					<td><a href="#">ABITARE IN AZ. ORDINARIE EUR</a></td>
					<td>MTA</td>
					<td>334,0</td>
					<td>19/07/2017<br>10:37:00</td>
					<td><=10,0<br>>=15,0</td>
					<td>18/08/2017</td>
					<td>In attesa</td>
					<td>
						<a href="#1" class="no-underline btn-icon" title="Cancella"><i class="icon icon-chiudi_table" data-target="#annullaOrdine" data-toggle="modal"></i></a>
					</td>
					
				</tr>
				<tr class="pari">
					<td>
						<div class="linkTooltip" data-toggle="modal">
							<a title="scegli l'operazione da effettuare" id="link1" class="linkVai no-underline btn-icon" onclick="multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', '']);"><i class="icon icon-2x icon-ico_azioni02A"></i></a>						
						</div>
					</td>
					<td><a href="#">ACSM-AGAM SPA</a></td>
					<td>MTA</td>
					<td>1,97</td>
					<td>21/07/2017<br>14:49:00</td>
					<td><=10,0<br>>=15,0</td>
					<td>18/08/2017</td>
					<td class="nega">Cancellato</td>
					<td></td>
					
				</tr>
			</tbody>
		</table>
		
</section>
<!--overlayer icona operativa -->
<div class="sezioneLinks2 modal fade" id="iconaOperativaMenu1_html" tabindex="-1" role="dialog" aria-labelledby="">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
				<div class="modal-header">
					<a class="close close-top btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
					<h2 class="modal-title" id="myModalLabel">BTP 01.02.06/01.08.2021 3,75%</h2>
				</div>
				
				<div class="body">
					<ul class="azioni">
							<li class="linkOn"><a title="C/V" href="link1.htm"><span>C/V</span></a></li>
							<li class="linkOff"><span title="C/V">C/V</span></li>
							<li class="linkOn"><a title="Book" href="javascript:openPopUp('medium', '')"><span>Book</span></a></li>
							<li class="linkOff"><span title="Book">Book</span></li>
							<li class="linkOn"><a title="Ordine Condizionato" href="link3.htm"><span>Ordine Cond.</span></a></li>
							<li class="linkOff"><span title="Ordine Condizionato">Ordine Cond.</span></li>
							<li class="linkOn"><a title="Analisi Tecnica" href="link4.htm"><span>Analisi Tecnica</span></a></li>
							<li class="linkOff"><span title="Analisi Tecnica">Analisi Tecnica</span></li>
							<li class="linkOn"><a title="Alert" href="link5.htm"><span>Alert</span></a></li>
							<li class="linkOff"><span title="Alert">Alert</span></li>
							<li class="linkOn"><a title="Carry-on" href="/connect.php?page=str_interna_priv.php&tpl=/wetrade/tpl_priv_lib_wt_carry.php&liv1=TR&tr2=0&tr3=0"><span>Carry-on</span></a></li>
							<li class="linkOff"><span title="Carry-on">Carry-on</span></li>
							<li class="linkOn"><a title="Vendi" href="link6.htm"><span>Vendi</span></a></li>
							<li class="linkOff"><span title="Vendi">Vendi</span></li>
							<li class="linkOn"><a title="Vendi" href=""><span>Visualizza/Vendi</span></a></li>
							<li class="linkOff"><span title="Vendi">Visualizza/Vendi</span></li>
							<li class="linkOn last"><a title="Dettaglio fiscale" href="#" class="close-left" data-dismiss="modal" data-toggle="modal" data-target="#fiscalita"><span>Fiscalità</span></a></li>
							<li class="linkOff last"><span title="Dettaglio fiscale">Prezzo fiscale</span></li>
						</ul>
						<div class="clear"></div>
				</div>
			
		</div>
	</div>
</div>

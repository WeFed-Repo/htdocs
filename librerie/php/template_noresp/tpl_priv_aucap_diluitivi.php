<h1>Lorem ipsum dolor</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, repellat recusandae rem tempore aperiam corporis blanditiis illum dignissimos eveniet quibusdam error, explicabo doloribus magni eaque repellendus sequi labore beatae perspiciatis.</p>
<div id="testaprenota">
	<div class="tab1 tabnew"><p>Lorem ipsum dolor: <strong>11.32109%  23/10/2011</strong></p></div>
</div>
<div id="prenota">
		<div id="internopre">
			<!-- Tabella di output -->
			<table class="form01 out">
				<tr> 
					<td class="uno">1 Piccolo_SX</td>
					<td><a href="#1" class="lnkbold">Testo di output</a></td>
					<td class="uno">1 Piccolo_DX</td>
					<td><strong>Testo di output</strong></td>
				</tr>
				<tr> 
					<td class="uno">2 Medio_SX</td>
					<td><strong>Testo di output</strong></td>
					<td class="uno">2 Medio_DX</td>
					<td><strong>Testo di output</strong></td>
				</tr>
				<tr> 
					<td class="uno">3 Grande_SX</td>
					<td><strong>Testo di output</strong></td>
					<td class="uno">3 Grande_DX</td>
					<td><strong>Testo di output</strong></td>
				</tr>
				<tr> 
					<td class="uno">3 Es. input (readonly)</td>
					<td><strong>Testo di output</strong></td>
					<td class="uno">3 Es. input (readonly)</td>
					<td><strong>Testo di output</strong></td>
				</tr>	

				<!-- RIGA PER AUCAP DILUITIVI -->
<script type="text/javascript">
/* Inizializzazione delle automazioni del form */
$(function(){

	var dataRol = $("#dataRolling"),
		dataAcc = $("#dataAccounting"),
		dettRol = $("#dettagliRolling"),
		dettAcc = $("#dettagliAccounting");


	// Radio button 
	$("input[name=modoadesione]").click(function(){

		if($(this).val()=="rolling") {
			//Selezione "rolling"
			dataRol.show();
			dataAcc.hide();
			dettRol.show();
			dettAcc.hide();
		}
		else
		{
			// Seleziona accounting
			dataRol.hide();
			dataAcc.show();
			dettRol.hide();
			dettAcc.show();
		}

		// Abilita il pulsante
		$("#btnAderisciDisabled").hide();
		$("#btnAderisci").show();

	});

});

</script>				
				<tr> 
					<td class="uno">Periodo trattazione diritti</td>
					<td>dal <strong>22/11/2016</strong> al <strong>23/12/2017</strong></td>
					<td class="uno">Data valuta</td>
					<td>
						<div id="dataRolling" style="display:none"><strong>11/12/2017</strong></div>
						<div id="dataAccounting" style="display:none">
							<span class="iconahelp" data-tooltip="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim"><img src="/img/ret/lampa_off.gif" class="lampa"></span>
					</div>
					</td>
				</tr>
				<!-- FINE RIGA PER AUCAP DILUITIVI -->

				</table>
			<br class="clear" />
			<!-- Fine elemento tabella -->

			<p>Scegli la modalità di adesione (seleziona per scoprirne i dettagli)</p>
			<!-- Radio buttons -->
			<form class="formGeneric">
				<div class="row-fluid">
					<div class="span2">
						<label><input type="radio" name="modoadesione" value="rolling"><strong>Rolling</strong></label>
					</div>
					<div class="span2">	
						<label><input type="radio" name="modoadesione" value="accounting"><strong>Accounting</strong></label>
					</div>
				</div>
			</form>
			<!-- Fine radio buttons -->

			<!-- Dettagli rolling/accounting -->
			<div id="dettagliRolling" style="display:none">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur molestiae qui tempore sequi ab veniam, similique deserunt deleniti illo sapiente, amet atque, quae laborum iure impedit. Rerum eaque nostrum tempore doloribus necessitatibus ab quasi commodi obcaecati, quas iure dolorum, placeat, enim aliquid officiis animi assumenda nesciunt. Distinctio alias neque asperiores.
			</div>
			<div id="dettagliAccounting" style="display:none">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga asperiores earum neque ab ipsa quos sit eveniet nemo, eius officia id, obcaecati voluptate consequatur necessitatibus itaque reiciendis facere unde, perspiciatis.
			</div>

			<!-- Pulsantiera di chiusura -->
			<br class="clear">
			<div class="fooformtop margTopMedium"><a href="#">Mostra dettagli</a>&nbsp;&nbsp;&nbsp;<a href="#">Calcolatore</a></div>
			<div class="fooformrightc">
				<div>
					<div class="bottdis" id="btnAderisciDisabled"><img alt="" src="/img/ret/btndis_left.gif"><span title="Lorem ipsum">Aderisci</span><img alt="" src="/img/ret/btndis_right.gif"></div>
					<a id="btnAderisci" style="display:none" title="Lorem ipsum" class="btnformright" href="#1"><img alt="" src="/img/ret/btn_left_ar.gif"/><span>Aderisci</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a>
				</div>
			<br class="clear"/>
			</div><br class="clear"/>
			<!-- Fine pulsante -->

	</div><br class="clear"/>
</div>





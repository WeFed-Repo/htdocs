<!-- TOOL CALL ME BACK -->
	<div class="tool" id="tool2">
		<div class="toolhead" title="Lorem ipsum dolor sit amet consectetur adipiscing elit. Summa cum laude.">
			<span class="tooltit handle"></span><img src="/WB/fe/img/xtool2.gif" onclick="closetools()" class="close" alt="Chiudi" title="Chiudi"/>
		</div>

		<div class="toolmiddle loading" id="formtbxCallMeBack">
			<form class="formoperatori" method="post" action="" id="cmbForm">
				<p class="operatori"><strong>Gli operatori del Customer Care ti richiamano quando vuoi tu.</strong></p>
				<p><label>Tel.</label>
				<span class="alRgFields"><input type="text" size="4" maxlength="4" onclick="this.focus()"/><input type="text" maxlength="16" size="16" style="" onclick="this.focus()" /></span>
				</p>
				<p><label>Giorno</label>
				<span class="alRgFields"><select class="txtgiorno" name="giorno"><option selected="selected" value="uno">12/07/2007 - gio.</option><option value="due">13/07/2007 - ven.</option><option value="tre">16/07/2007 - lun.</option></select></span>					
				</p>
				<p><label>Fascia oraria</label>
				<span class="alRgFields"><select class="txtfascia" name="fascia"><option selected="selected" value="uno">09.00 - 10.00</option><option value="due">10.00 - 11.00</option><option value="tre">11.00 - 12.00</option></select></span>					
				</p>
				<p><label><strong>Argomento</strong></label><br/>
					<input type="radio" value="1" class="rd" name="canale"/> 
					<span class="rdtxt">sportello e carte</span><br class="clear"/>
					<input type="radio" value="2" class="rd" name="canale"/> 
					<span class="rdtxt">trading</span><br class="clear"/>
					<input type="radio" value="3" class="rd" name="canale"/> 
					<span class="rdtxt">altro</span><br class="clear"/>
				</p>
				<p class="pswchiamata"><label><strong>Password chiamata</strong></label><br/>
					<input type="text" class="txtpswchiamata" maxlength="12" size="14" value="" id="password" name="password" onclick="this.focus()"/><br/>
					<span>(solo per info sul conto o sul deposito titoli)</span>
				</p>					
				<a href="javascript:void(0);" class="btnformright posiz" title="Invia" id="btnCmbInvia"><span>Invia</span></a>
			
			</form>
			<div id="cmbFb" stule="display:none">
				<!-- ESEMPIO ESITI -->

					<!-- NEGATIVO -->
					<div class="boxesito negativo">
						<div class="text">
							<p><strong>Esito negativo</strong><br>Negativo at vero eos et accusamus et iusto odio.</p>
						</div>
					</div>
					<!-- FINE ESITO NEGATIVO -->

					<!-- POSITIVO -->
					<div class="boxesito positivo">
						<div class="text">
							<p><strong>Esito positivo</strong><br>Positivo at vero eos et accusamus et iusto odio.</p>
						</div>
					</div>
					<!-- FINE ESITO POSITIVO -->

					<!-- POSITIVO -->
					<div class="boxesito attenzione">
						<div class="text">
							<p><strong>Esito "attenzione"</strong><br>Attenzione at vero eos et accusamus et iusto odio.</p>
						</div>
					</div>
					<!-- FINE ESITO POSITIVO -->

				<!-- FINE ESEMPIO ESITI -->
			</div>
		</div>
	</div>
	<!-- ESEMPIO INTERATTIVITA' CMB -->	
	<script type="text/javascript">

		$(function(){
			
			// Esempio di inizializzazione

			$("#toolCmbBtn").click(function(){
				// Simulazione chiamata di inizializzazione del form (ed eventuale "reset");
				$("#formtbxCallMeBack").addClass("loading")
				$("#cmbFb").hide();
				$("#cmbForm").show();
				setTimeout(function(){$("#formtbxCallMeBack").removeClass("loading")},1000);
			});
		
			$("#btnCmbInvia").click(function(){

				$("#formtbxCallMeBack").addClass("loading");
				// Nasconde il form
				$("#cmbForm").hide();
				// Mostra i risultati
				$("#cmbFb").show();
				setTimeout(function(){$("#formtbxCallMeBack").removeClass("loading")},1000);

			});




		})
	</script>
	<!-- FINE ESEMPIO INTERATTIVITA' CMB -->
	<!-- FINE CALL ME BACK -->
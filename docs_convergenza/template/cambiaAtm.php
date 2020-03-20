
<div id="gridBody">
<div class="contentFull">
	<script type="text/javascript">
		$(document).ready(function(){
			cartaSelectionInit(false);
	 });

	cercaAtmPopUp = function(current) {
		var formCambiaAtm = $(current).closest('form');
		if (formCambiaAtm!=undefined) {
			var flgCercaAtm = formCambiaAtm.find('input[name="flgCercaAtm"]');
			if (flgCercaAtm!=undefined) {
				flgCercaAtm.val(1);
			}
			formCambiaAtm.submit();
		}
		
	}
	</script>
<div class="riquadro clearfix col-sm-12" id="popup">
<section>
	<div class="titolo">
		<h1>
			<div class="row">
				<div class="col-sm-8">
					<span>Prelievo Cardless</span>
				</div>
			</div>
		</h1>
	</div>
</section>
<p class="hidden-xs hidden-print"></p>
<form id="prelievoCardlessForm" method="post" action="/WEBHT/carte/prelievoCardless/cambiaAtmLocalita.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="f0edad603cc474b6e8b92d7943cddc22"></div>
		<div class="section clearfix intestazioneSelezioneCC">
			<h3 class="titleSection titleForm labelIntestazioneSelezioneCC">
				Cerca
			</h3>
				<div class="formWrapper">
					<div class="form-group">
						<div class="row">
							<div class="form-field-input col-sm-5 col-xs-6">
								<label class="control-label" for="sceltaAtmProvincia"> Provincia: </label>
								<div class="form-field">
									<select name="provinciaId" onchange="this.form.submit()" id="sceltaAtm" style="width:40%" class="form-control wauto">	 <option value="-1">Seleziona</option>
										<option value="AG">Agrigento</option>
										<option value="AL">Alessandria</option>
										<option value="AO">Aosta</option>
										<option value="AR">Arezzo</option>
										<option value="AT">Asti</option>
										<option value="AV">Avellino</option>
										<option value="BA">Bari</option>
										<option value="BG">Bergamo</option>
										<option value="BI">Biella</option>
										<option value="BL">Belluno</option>
										<option value="BN">Benevento</option>
										<option value="BO">Bologna</option>
										<option value="BS">Brescia</option>
										<option value="BT">Barletta-Andria-Trani</option>
										<option value="CB">Campobasso</option>
										<option value="CE">Caserta</option>
										<option value="CL">Caltanissetta</option>
										<option value="CN">Cuneo</option>
										<option value="CO">Como</option>
										<option value="CR">Cremona</option>
										<option value="CT">Catania</option>
										<option value="EN">Enna</option>
										<option value="FC">Forli'/Cesena</option>
										<option value="FE">Ferrara</option>
										<option value="FG">Foggia</option>
										<option value="FI">Firenze</option>
										<option value="FR">Frosinone</option>
										<option value="GE">Genova</option>
										<option value="GR">Grosseto</option>
										<option value="IM">Imperia</option>
										<option value="IS">Isernia</option>
										<option value="LC">Lecco</option>
										<option value="LI">Livorno</option>
										<option value="LO">Lodi</option>
										<option value="LT">Latina</option>
										<option value="LU">Lucca</option>
										<option value="MB">Monza-Brianza</option>
										<option value="ME">Messina</option>
										<option value="MI">Milano</option>
										<option value="MN">Mantova</option>
										<option value="MO">Modena</option>
										<option value="MS">Massa Carrara</option>
										<option value="NA">Napoli</option>
										<option value="NO">Novara</option>
										<option value="OT">Olbia-Tempio</option>
										<option value="PA">Palermo</option>
										<option value="PC">Piacenza</option>
										<option value="PD">Padova</option>
										<option value="PE">Pescara</option>
										<option value="PG">Perugia</option>
										<option value="PI">Pisa</option>
										<option value="PN">Pordenone</option>
										<option value="PO">Prato</option>
										<option value="PR">Parma</option>
										<option value="PT">Pistoia</option>
										<option value="PU">Pesaro Urbino</option>
										<option value="PV">Pavia</option>
										<option value="PZ">Potenza</option>
										<option value="RA">Ravenna</option>
										<option value="RE">Reggio Emilia</option>
										<option value="RG">Ragusa</option>
										<option value="RM">Roma</option>
										<option value="RN">Rimini</option>
										<option value="RO">Rovigo</option>
										<option value="SA">Salerno</option>
										<option value="SI">Siena</option>
										<option value="SP">La Spezia</option>
										<option value="SR">Siracusa</option>
										<option value="SV">Savona</option>
										<option value="TN">Trento</option>
										<option value="TO">Torino</option>
										<option value="TP">Trapani</option>
										<option value="TR">Terni</option>
										<option value="TS">Trieste</option>
										<option value="TV">Treviso</option>
										<option value="UD">Udine</option>
										<option value="VA">Varese</option>
										<option value="VB">Verbano-Cusio-Ossola</option>
										<option value="VC">Vercelli</option>
										<option value="VE">Venezia</option>
										<option value="VI">Vicenza</option>
										<option value="VR">Verona</option>
									</select>
								</div>
							</div>
							<div class="form-field-input col-sm-3 col-xs-6">
								<label class="control-label" for="sceltaAtmLocalita"> Località </label>
								<div class="form-field">
									<select name="localitaId" id="sceltaAtm" style="width:40%" class="form-control wauto"><option value="-1">Seleziona</option></select>
								</div>
							</div>
							<div class="form-field-input col-sm-4 col-xs-12">
								<input type="hidden" name="flgCercaAtm" value="0">
								<a href="#" class="btn btn-link paddingTopMedium" onclick="cercaAtmPopUp(this);" id="cambiaAtm">Cerca
									<i class="icon icon-arrow_right" title="icon-freccia_dx"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			
		</div>
		
	</form>
</div> 
</div>
</div>
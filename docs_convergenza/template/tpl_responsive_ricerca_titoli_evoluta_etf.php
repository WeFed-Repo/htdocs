<style>
.mww-status-hidden {display:none!important}
</style>
<h2>RICERCA</h2>

<!-- CASO INPUT-->
<div class="borderFormRounded">
	<div class="form-group">
		<div class="row">
			<div class="col-xs-12">
				<a class="toggleRicercaRapida no-underline btn-icon btn-icon-text collapsed float-right"><i class="icon icon-zoom_big"></i>Ricerca avanzata</a>
			</div>
		</div>
		<form class="formGenerico searchFilter noMarginBottom" role="form">
				<div class="row">
					<div class="col-sm-3 col-xs-12">
						<label class="control-label">Titolo</label>
						<span class="output mww-status-hidden"></span>
					<div>
					<div class="editable-input">
						<input class="form-control clear-x" type="text" placeholder="ISIN, simbolo, descrizione">
						<span class="editable-clear-x" style="display: none;">
							<i class="icon icon-close icon-1x"></i>
						</span>
					</div>	
						</div>
					</div>
					<div class="col-sm-3 col-xs-12 mww-dom-component webank-component-combobox">
						<label class="control-label">Mercato</label>
						<span class="output mww-status-hidden"></span>
						<select class="form-control" id="select">
							<option class="mww-status-highlighted" value="0">SD/Certificates</option>
							<option value="1">SEDEX</option>
							<option value="2">EuroTLX</option>
						</select>
					</div>
					<div class="col-sm-2 col-xs-12 no-label mww-dom-component webank-component-button">
						<a class="btn btn-primary btn-block" type="button" title="Cerca">Cerca</a>
					</div>
					<div class="col-sm-3 col-xs-12 no-label-output mww-status-hidden mww-dom-component webank-component-button">
						<a class="btn btn-primary btn-block" type="button" title="nuova ricerca">	nuova ricerca</a>
					</div>
					<div class="col-sm-3 col-xs-12 no-label-output mww-status-hidden mww-dom-component webank-component-button">
						<a class="btn btn-primary btn-block" type="button" title="modifica ricerca">	modifica ricerca</a>
					</div>
				</div>
		</form>
</div>
</div>


<!-- CASO  OUTPUT-->

<div class="borderFormRounded">
	<div class="form-group">
		<div class="row">
			<div class="col-xs-12">
				<a class="toggleRicercaRapida no-underline btn-icon btn-icon-text collapsed float-right"><i class="icon icon-zoom_big"></i>Ricerca avanzata</a>
			</div>
		</div>
		<form class="formGenerico searchFilter noMarginBottom" role="form">
				<div class="row">
					<div class="col-sm-3 col-xs-12">
						<label class="control-label">Titolo</label>
						<span class="output">Fiat</span>
					<div>
					<div class="editable-input mww-status-hidden">
						<input class="form-control clear-x" type="text" placeholder="ISIN, simbolo, descrizione">
						<span class="editable-clear-x" style="display: none;">
							<i class="icon icon-close icon-1x"></i>
						</span>
					</div>	
						</div>
					</div>
					<div class="col-sm-3 col-xs-12 mww-dom-component webank-component-combobox">
						<label class="control-label">Mercato</label>
						<span class="output">Lorem</span>
						<select class="form-control mww-status-hidden" id="select">
							<option class="mww-status-highlighted" value="0">SD/Certificates</option>
							<option value="1">SEDEX</option>
							<option value="2">EuroTLX</option>
						</select>
					</div>
					<div class="col-sm-2 col-xs-12 no-label mww-dom-component webank-component-button mww-status-hidden">
						<a class="btn btn-primary btn-block" type="button" title="Cerca">Cerca</a>
					</div>
					<div class="col-sm-3 col-xs-12 no-label-output mww-dom-component webank-component-button">
						<a class="btn btn-primary btn-block" type="button" title="nuova ricerca">	nuova ricerca</a>
					</div>
					<div class="col-sm-3 col-xs-12 no-label-output mww-dom-component webank-component-button">
						<a class="btn btn-primary btn-block" type="button" title="modifica ricerca">	modifica ricerca</a>
					</div>
				</div>
		</form>
</div>
</div>







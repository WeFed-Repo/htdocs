<section>
	<form id="formPannelloControllo" method="post" action="/WEBHT/cartaConto/pannelloControlloModifica.do" class="formPannelloControllo">
		<div class="titolo">
			<div class="row">
				<div class="col-sm-8">
					<h3 class="titleSection titleForm">Limiti di utilizzo 
						<a href="javascript:OpenHelp('/WEBHT/help/page.do?id=1564#Addebito')" class="general-help help-icon hidden-xs"><i class="icon icon-info_fill icon-2x"></i></a>
					</h3>
				</div>
				<div class="col-sm-4">
					<a id="btnRicerca" href="javascript:mostraDivModifica('Massimali')" role="button" aria-pressed="false" class="btn-align-right" ><i class="icon icon-edit_fill ico-title"></i></a>
				</div>
			</div>
		</div>
		<div class="form-group" id="datiMassimali">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<div class="row">
						<div class="col-xs-6">
							<label class="control-label">Complessivo mensile</label>
						</div>
						<div class="col-xs-6">
							<span class="resume">3.000,00  EUR</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-6">
							<label class="control-label">Giornaliero internet</label>
						</div>
						<div class="col-xs-6">
							<span class="resume">3.000,00  EUR</span>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12">
					<div class="row">
						<div class="col-xs-6">
							<label class="control-label">Giornaliero negozi fisici</label>
						</div>
						<div class="col-xs-6">
							<span class="resume">3.000,00  EUR</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-6">
							<label class="control-label">Giornaliero per prelievi da ATM</label>
						</div>
						<div class="col-xs-6">
							<span class="resume">1.500,00  EUR</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="boxContent" style="display: none;" id="inputMassimali">
			<div class="form-group">
				<div class="row">
					<div class="form-group col-sm-6 col-xs-12 rapporto">
						<div>
							<label for="massimaleTotMensile">Complessivo mensile </label>
						</div>
						<div>
							<div class="sliderContainer form-field-input rapportoSliderRow">
					    		<div>
					    		<div class="valSel inputSliderValue">2.200 EUR</div>

								<a href="#" class="meno" onclick="return sottrai(this)">
									<i class="icon icon-spinner_less"></i>
									<i class="icon icon-meno colorVer"></i><span>50</span>
								</a>
									<a href="#" class="piu" onclick="return somma(this)">
									<i class="icon icon-spinner_more"></i>
									<i class="icon icon-piu colorVer"></i><span>50</span>
								</a>
								<div id="slider_massimaleTotMensile" class="slider"></div>
								<span class="min">0</span> <i class="icon icon-spinner_more"></i>
								<span class="max">
									5.000 
								</span> 
							
								<input type="text" name="massimaleTotMensile" value="3000" id="massimaleTotMensile" style="display:none;">
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-xs-12 rapporto">
						<label for="massimaleTotGiornalieroPos" class="control-label no-bold">Giornaliero negozi fisici</label>
						 <div class="sliderContainer form-field-input rapportoSliderRow">
								<div>
									<div class="valSel inputSliderValue"></div>
										<a href="#" class="meno" onclick="return sottrai(this)">
											<i class="icon icon-spinner_less"></i>
											<i class="icon icon-meno colorVer"></i><span>50</span>
										</a>
										<a href="#" class="piu" onclick="return somma(this)">
											<i class="icon icon-spinner_more"></i>
											<i class="icon icon-piu colorVer"></i><span>50</span>
										</a>
										<div id="slider_massimaleTotGiornalieroPos" class="slider"></div>
										<span class="min">0</span> <span class="max">5.000</span> 
										<input type="text" name="massimaleTotGiornalieroPos" value="3000" id="massimaleTotGiornalieroPos" style="display:none;" />
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-xs-12 rapporto">
						<label for="massimaleTotGiornalieroWeb">Giornaliero internet</label>
						<div class="sliderContainer form-field-input rapportoSliderRow">
							<div>
								<div class="valSel inputSliderValue"></div>
								<a href="#" class="meno" onclick="return sottrai(this)">
									<i class="icon icon-spinner_less"></i>
									<i class="icon icon-meno colorVer"></i><span>50</span>
								</a>
								<a href="#" class="piu" onclick="return somma(this)">
									<i class="icon icon-spinner_more"></i>
									<i class="icon icon-piu colorVer"></i><span>50</span>
								</a>
								<div id="slider_massimaleTotGiornalieroWeb" class="slider"></div>
								<span class="min">0</span> 
								<span class="max">
									5.000 
								</span> 
								<input type="text" name="massimaleTotGiornalieroWeb" value="3000" id="massimaleTotGiornalieroWeb" style="display:none;" />
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-xs-12 rapporto">
						<label for="massimaleTotGiornalieroAtm">Giornaliero per prelievi da ATM</label>
						<div class="sliderContainer form-field-input rapportoSliderRow">
							<div>
							<div class="valSel inputSliderValue"></div>
								
								<a href="#" class="meno" onclick="return sottrai(this)">
									<i class="icon icon-meno colorVer"></i><span>50</span>
								</a>
								<div id="slider_massimaleTotGiornalieroAtm" class="slider"></div>
								<a href="#" class="piu" onclick="return somma(this)">
										<i class="icon icon-piu colorVer"></i><span>50</span>
								</a>
								<span class="min">0</span> 
								<span class="max">
									3.000 
								</span> 
								<input type="text" name="massimaleTotGiornalieroAtm" value="1500" id="massimaleTotGiornalieroAtm" style="display:none;" />
							</div>
							</div>
					</div>
				</div>
					
			</div>
			<div class="alignRight btnWrapper">
			<a type="input"  href="javascript:nascondiDivModifica('Massimali')" class="btn btn-default">Annulla</a>
			<input type="submit" value="Conferma" class="btn btn-primary disabled execute" alt="Conferma"  disabled/>
		
		</div>
		</div>			
		
	</form>
</section>


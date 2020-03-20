<section>
	<form id="formPannelloControllo" method="post" action="/WEBHT/cartaConto/pannelloControlloModifica.do" class="formPannelloControllo">
		<input type="hidden" name="codContoCorrente" value="001|0898|089800349214" />

		<script>
		$(document).ready(function (){
			var tipoGeosafe = 'MONDO';
			$('#img'+tipoGeosafe).attr('src','/HT/fe/img/geosafe'+tipoGeosafe+'.png');
			$('.labelGeosafe').find('[for="geosafe'+tipoGeosafe+'"]').removeAttr('style');
			
			$('input[name="geosafe"]').click(function(){
				disabilitaRadio();
				var tipoGeosafe = $(this).attr('value');
				$('#img'+tipoGeosafe).attr('src','/HT/fe/img/geosafe'+tipoGeosafe+'.png');
				$('#label'+tipoGeosafe).removeAttr('style');
				
			});
			
			
		});
		function disabilitaRadio() {
			$('.imgGeosafe').find('span').each(function () {
				$(this).css('color','#888888');
			});
			$('.imgGeosafe').find('div img').each(function (){
				var urlImg=$(this).attr('src');
				if (urlImg.indexOf('Off')<0)
					$(this).attr('src',urlImg.substring(0,urlImg.length-4)+'_Off.png');
			});
		}

		</script>
		<div class="titolo">
			<div class="row">
				<div class="col-sm-8">
					<h3 class="titleSection titleForm">GeoSafe
						<a href="javascript:OpenHelp('/WEBHT/help/page.do?id=1567#Addebito')" class="no-underline btn-icon hidden-xs">
							<i class="icon icon-info_fill icon-2x"></i>
						</a>
					</h3>
				</div>
				<div class="col-sm-4">
					<a id="btnRicerca" href="javascript:mostraDivModifica('Geosafe')" role="button" aria-pressed="false" class="btn-align-right" ><i class="icon icon-edit_fill ico-title"></i></a>
				</div>
			</div>
		</div>
		<input type="hidden" name="formModificata" value="Geosafe" />
		<div id="datiGeosafe">
			<div class="form-group clearfix">
				 <div class="row">
		                <div class="col-xs-12">
							<p>La carta &egrave; abilitata in tutto il mondo - fino al 26/03/2019</p>
						</div>
				</div>
			</div>
			<hr class="hrSeparator">
		</div>

		<div class="divForm boxContent" id="inputGeosafe" style="display: none;">
			<p>Abilita la carta per gli utilizzi:</p>
			<div class="imgGeosafe row">
				<div class="col-sm-4 col-xs-12">
					<div class="row">
						<div class="col-xs-12 pull-left">
							<input type="radio" name="geosafe" value="ITA" id="geosafeITA" class="sfondoForm hidden-xs" />
						</div>
						<label for="geosafeITA" class="col-xs-10 col-xs-offset-1">
							<img src="/HT/fe/img/geosafeITA_Off.png" id="imgITA" title="Italia" alt="Italia" />
						</label>
						<span id="labelITA" class="col-xs-12">Solo in Italia</span>
					</div>
				</div>
				<div class="col-sm-4 col-xs-12">
					<div class="row">
						<div class="col-xs-12 pull-left">
							<input type="radio" name="geosafe" value="EU" id="geosafeEU" style="vertical-align: top;" class="sfondoForm hidden-xs" />
						</div>
						<label for="geosafeEU" class="col-xs-10 col-xs-offset-1">
							<img src="/HT/fe/img/geosafeEU_Off.png" id="imgEU" title="Europa" alt="Europa" />
						</label>
						<span id="labelEU" class="col-xs-12">In Europa <br /> (abilitazione valida per 3 mesi)</span>
					</div>
				</div>
				<div class="col-sm-4 col-xs-12">
					<div class="row">
						<div class="col-xs-12 pull-left">
							<input type="radio" name="geosafe" value="MONDO" checked="checked" id="geosafeMONDO" style="vertical-align: top;" class="sfondoForm hidden-xs" />&nbsp;&nbsp;
						</div>
						<label for="geosafeMONDO" class="col-xs-10 col-xs-offset-1">
							<img src="/HT/fe/img/geosafeMONDO_Off.png" id="imgMONDO" title="Mondo" alt="Mondo" />
						</label>
						<span id="labelMONDO" class="col-xs-12">In tutto il mondo <br /> (abilitazione valida per 1 mese)</span>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-xs-12">
					<p>La possibilità di pagare su internet &egrave; indipendente dall'abilitazione definita all'interno della sezione GeoSafe. </p>
				</div>
			</div>
			<div class="otpCheck">
				
			</div>
			<div class="alignRight btnWrapper">
				<a type="input"  href="javascript:nascondiDivModifica('Geosafe')" class="btn btn-default">Annulla</a>
				<input type="submit" value="Conferma" class="btn btn-primary execute disabled" alt="Conferma" disabled />
			</div>
			<hr class="hrSeparator">
			
		</div>
	</form>
</section>
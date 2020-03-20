<section>
	<form id="formPannelloControllo" method="post" action="/WEBHT/cartaConto/pannelloControlloModifica.do" class="formPannelloControllo">
		<input type="hidden" name="codContoCorrente" value="001|0898|089800349214">
		<script type="text/javascript">
			function disabilitaInputFunc() {
				$('#tableFormWebsafe input:text').attr('disabled', 'disabled');
				$('.calendarioDefault').datepicker('disable'); 
			}
			function maxOperazioniFunc() {
				$('#tableFormWebsafe input:text').attr('disabled', 'disabled');
				$('.calendarioDefault').datepicker('disable'); 
				$('#maxOperazioni').removeAttr('disabled');
				$('#maxOperazioni').focus();
			}
			function maxImportoFunc() {
				$('#tableFormWebsafe input:text').attr('disabled', 'disabled');
				$('.calendarioDefault').datepicker('disable'); 
				$('#maxImporto').removeAttr('disabled');
				$('#maxImporto').focus();
			}
			function dataOraAttivitaFunc() {
				$('#tableFormWebsafe input:text').attr('disabled', 'disabled');
				$('.calendarioDefault').removeAttr('disabled');
				$('.calendarioDefault').datepicker('enable');
				$('#dataInizioAttivita').focus();
			}
			function maxOreAttivitaFunc() {
				$('#tableFormWebsafe input:text').attr('disabled', 'disabled');
				$('.calendarioDefault').datepicker('disable'); 
				$('#maxOreAttivita').removeAttr('disabled');
				$('#maxOreAttivita').focus();
			}
			
			$(document).ready(function() {
					$('.calendarioDefault').datepicker({
					minDate: new Date(),
					maxDate: '+1Y',
					buttonImage: 'common/fe/img/pixel_trasp.gif',
					beforeShowDay: noWeekendsOrHolidays
				});
			});
		</script>
		<input type="hidden" name="plafondMaxCarta" value="10000">

		<div class="titolo">
			<div class="row">
				<div class="col-sm-8">
					<h3 class="titleSection titleForm">WebSafe
						<a href="javascript:OpenHelp('/WEBHT/help/page.do?id=1565#Addebito')" class="no-underline btn-icon hidden-xs">
							<i class="icon icon-info_fill icon-2x"></i>
						</a>
					</h3>
				</div>
				<div class="col-sm-4">
					<a id="btnRicerca" href="javascript:mostraDivModifica('Websafe')" role="button" aria-pressed="false" class="btn-align-right" ><i class="icon icon-edit_fill ico-title"></i></a>
				</div>
			</div>
		</div>
		<div class="form-group" style="" id="datiWebsafe">
              <div class="row">
                <div class="col-xs-12">
                   <p>La carta &egrave; attiva in modo permanente ad effettuare acquisti su internet. </p>
              	</div>
              </div>
              <hr class="hrSeparator">
         </div>
		<div id="inputWebsafe" style="display: none">
			<div class="form-group">
	             <div class="row">
	               <div class="col-xs-12">
	                  <label>
	                    <input type="radio" name="flagServiziWebsafe" value="0" checked="checked" onclick="disabilitaInputFunc()" id="flagServiziAbilita" class="sfondoForm">Abilita permanentemente ad effettuare acquisti su internet. 
	                  </label>
	               </div>
	             </div>
        		<div class="row">
	               <div class="col-xs-12">
	                  <label>
	                    <input type="radio" name="flagServiziWebsafe" value="1" onclick="disabilitaInputFunc()" id="flagServiziDisabilita" class="sfondoForm">Disabilita permanentemente ad effettuare acquisti su internet.. 
	                  </label>
	               </div>
	             </div>
        		<div class="row">
	               <div class="col-xs-12">
	                  <label>
	                   <input type="radio" name="flagServiziWebsafe" value="2" onclick="maxOperazioniFunc()" id="flagServiziMaxOp" class="sfondoForm">Abilita per n. <input type="text" name="maxOperazioniWebsafe" maxlength="8" size="8" value="" disabled="disabled" id="maxOperazioni" class="form-control wauto"> acquisti su internet.
	                  </label>
	               </div>
	             </div>
	             <div class="row">
	               <div class="col-xs-12">
	                  <label>
	                   <input type="radio" name="flagServiziWebsafe" value="3" onclick="maxImportoFunc()" id="flagServiziMaxImporto" class="sfondoForm"> Abilita ad effettuare acquisti su internet per un importo massimo di <input type="text" name="maxImportoWebsafe" maxlength="8" size="8" value="" disabled="disabled" id="maxImporto" class="form-control wauto"> Euro.
	                  </label>
	               </div>
	             </div>
	             <div class="row">
	               <div class="col-xs-12">
	                  <label>
	                   <input type="radio" name="flagServiziWebsafe" value="4" onclick="dataOraAttivitaFunc()" id="flagServiziDataAtt" class="sfondoForm"> Abilita ad effettuare acquisti su internet dal 
	                   <span class="date-pos">
	                   <input type="text" name="dataOraInizioAttivitaWebsafe" maxlength="10" size="9" value="" id="dataInizioAttivita" class="calendarioDefault form-control wauto">  <a class="input-group-addon date btn-icon" href="#"><i class="icon icon-calendar_filled"></i></a>
	               		</span>
						 al 
						 <span class="date-pos">
						 <input type="text" name="dataOraFineAttivitaWebsafe" maxlength="10" size="9" value="" id="dataFineAttivita" class="calendarioDefault form-control wauto"><a class="input-group-addon date btn-icon" href="#"><i class="icon icon-calendar_filled"></i></a>
						</span>
	                  </label>
	               </div>
	             </div>
	             <div class="row">
	               <div class="col-xs-12">
	                  <label>
	                   <input type="radio" name="flagServiziWebsafe" value="5" onclick="maxOreAttivitaFunc()" id="flagServiziMaxOre" class="sfondoForm"> Abilita ad effettuare acquisti su internet per <input type="text" name="maxOreAttivitaWebsafe" maxlength="2" size="5" value="" id="maxOreAttivita" class="form-control wauto" disabled="disabled"> ore.
	                  </label>
	               </div>
	             </div>
        	</div>
			<div class="alignRight btnWrapper">
				<a type="input"  href="javascript:nascondiDivModifica('Websafe')" class="btn btn-default">Annulla</a>
				<input type="submit" value="conferma"  href="verificaCommissioni();"  class="btn btn-primary execute disabled"  disabled />
			</div>
			 <hr class="hrSeparator">
		</div>
			
	</form>
</section>



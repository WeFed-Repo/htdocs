	<div class="visible-print-block"> 
		<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
		<div class="pull-right">
			22/05/2017	
		</div>
	</div>
					
					
					
					










<script type="text/javascript">
	$(document).ready(function()
	{
		/*PRENDO L'INPUT CHECKED E NE CAMBIO IL BACKGROUND*/
		var element = $('input[name="dispositivoSicurezza"]:checked');
		/*SE HO UN ELEMENTO SELEZIONATO*/
		if (element)
			modificaCss(element);
		/*AGGIUNGO TRIGGER ONCHANGE*/
		$('input[name="dispositivoSicurezza"]').change(function () {
			modificaCss(this);
		});
	});
	
	function modificaCss(selectedElement)
	{
		/*AGGIUNGO IL BACKGROUND ALL'ELEMENTO SELEZIONATO*/
		$(selectedElement).parents('.box-riepilogo').css('background','#E5F2EF');
		/*PRENDO IL VALORE DELL'ELEMENTO SELEZIONATO*/
		var selectedValue = $(selectedElement).attr('value');
		/*MODIFICO IL BACKGROUND DELL'ELEMENTO NON SELEZIONATO */
		$('input[name="dispositivoSicurezza"]').each(function(){
			if ($(this).attr('value')!=selectedValue)
				$(this).parents('.box-riepilogo').css('background','');
		});
	}
</script>

<form id="formRichiediDispositivoSicurezza" method="post" action="/WEBHT/serviziPerTe/sostituzioneDispositivoSicurezzaCompilazione.do">
	<div class="riquadro clearfix">
		
		
	
		
		
		




	
	<div class="pager clearfix pull-right">
		<div class="circle_line">&nbsp;</div>
		
			
			
			
				
			
				<div class="circle current_page">&nbsp;</div>
			
		
			
			
			
				<div class="circle ">&nbsp;</div>
			
		
			
			
			
				<div class="circle ">&nbsp;</div>
			
		
			
			
			
				<div class="circle ">&nbsp;</div>
			
		
	</div>






<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
			
			
				<div class="hidden-print hidden-xxs flag info">&nbsp;</div>
			
		
		
			
		
		
			
			
			
				...
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>
		








	


	
		
	<div class="col-xs-12 col-sm-6">
		<div class="innerBoxWhite">
			<div class="box-riepilogo alt1 dispositivoSicurezza" style="height:auto;">
				<div>
					<h1 class="boxTitle txt_center">
						<input type="radio" name="dispositivoSicurezza" value="OTPW" checked="checked">						
						Formato Card
					</h1>
				</div>
				<div>
					<table style="width: 100%;">
						<tbody><tr><td>L'innovativo formato carta di credito: un dispositivo sottile da tenere sempre nel portafoglio </td></tr>
						<tr>
							<td>
								<div class="col-xs-6">
									<div class="col-xs-8" style="padding-top: 5px;">
										<div style="margin-top:3px;">Attivazione:</div>
										<div style="margin-top:3px;">Spese di spedizione:</div>
									</div>
									<div class="col-xs-4" style="padding-top: 5px;">
										<div style="margin-top:3px;"><b>0,00 €</b></div>
										<div style="margin-top:3px;"><b>0,00 €</b></div>
									</div>
								</div>
								<div class="col-xs-6">
									<img src="/HT/fe/img/OTPW.png" style=" margin-bottom:-3px" alt="Token di sicurezza">
								</div>
							</td>
						</tr>
						<tr>
							<td>Il dispositivo viene rilasciato in comodato d'uso e deve essere restituito alla cessazione del contratto. In caso di mancata restituzione potranno essere applicati dei costi come previsto dal contratto</td>
						</tr>
					</tbody></table>
				</div>
			</div>
		</div>
	</div>
		
	<div class="col-xs-12 col-sm-6">
		<div class="innerBoxWhite">
<div class="box-riepilogo alt1 dispositivoSicurezza" style="height: auto; ">
				<div>
					<h1 class="boxTitle txt_center">
						<input type="radio" name="dispositivoSicurezza" value="OTPWT" checked="checked">						
						Formato Token 13123
					</h1>
				</div>
				<div>
					<table style="width: 100%;">
						<tbody>
						<tr>
							<td>Il classico formato token: un comodo portachiavi da tenere sempre in tasca.</td>
						</tr>
						<tr>
							<td>
								<div class="col-xs-6">
									<div class="col-xs-8" style="padding-top: 5px;">
										<div style="margin-top:3px;">Attivazione:</div>
										<div style="margin-top:3px;">Spese di spedizione:</div>
									</div>
									<div class="col-xs-4" style="padding-top: 5px;">
										<div style="margin-top:3px;"><b>0,00 €</b></div>
										<div style="margin-top:3px;"><b>0,00 €</b></div>
									</div>
								</div>
								<div class="col-xs-6">
									<img src="/HT/fe/img/OTPWT.png" style="margin-bottom:-3px" alt="Token di sicurezza">
								</div>
							</td>
						</tr>
						<tr>
							<td>Il dispositivo viene rilasciato in comodato d'uso e deve essere restituito alla cessazione del contratto. In caso di mancata restituzione potranno essere applicati dei costi come previsto dal contratto</td>
						</tr>
					</tbody></table>
				</div>
			</div>
		</div>
	</div>
		
</div>
	<div class="actions pull-right ">
		
		<input type="submit" name="esito" value="Richiedi Subito" id="conferma" class="button  btn btn-primary" alt="Richiedi Subito">
	</div>
</form>
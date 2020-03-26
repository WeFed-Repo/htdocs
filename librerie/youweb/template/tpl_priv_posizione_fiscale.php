					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							10/03/2017	
						</div>
					</div>
					
					
					
					





<script type="text/javascript">
	$(document).ready(function()
	{
		var adesso = new Date();
		var anno = adesso.getFullYear();
		var dataMinima = new Date(anno-4,0,1);
		var dataMassima = new Date(anno,11,31);
		$('.datepicker').datepicker({ minDate: dataMinima, buttonImage: '/HT/IMAGES/nGrafica/calendar.png', maxDate: dataMassima});
	});
</script>





<div class="riquadro clear">
	
	









<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag posizioneFiscale">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
				
 					<span>Posizione fiscale</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>
	








	



	<div class="section clearfix">
		<h3 class="titleSection">
			Posizione fiscale
		</h3>
		<div class="bs-example form-horizontal">
			<div class="form-group" style="margin-top:10px">
				<div class="col-xs-12 clearfix">
					
					<div>
						Di seguito il totale <b>minusvalenze da recuperare</b> e la <b>posizione fiscale divisa per anno</b> nel quale si è generata.<br><br>La minusvalenza è determinata come differenza fra il prezzo di vendita al netto delle commissioni e il prezzo di acquisto comprensivo di commissioni.<br>L'ordine cronologico di contabilizzazione di plusvalenze e minusvalenze è determinato dalla valuta di regolamento (pagamento in conto) dell'operazione di vendita. Esempio, un'operazione eseguita lunedì sul mercato USA (liquidazione a tre giorni) a livello fiscale si considera insieme ad un'operazione eseguita martedì sul mercato italiano MTA (liquidazione a due giorni), perché entrambe si liquidano giovedì.
					</div>
				</div>
			</div>
			<div class="form-group" style="margin-top:20px">
				<div class="col-xs-12 clearfix">
					Presta attenzione alla scadenza delle tue minusvalenze; è possibile compensarle con le plusvalenze, ma solo se realizzate successivamente o nello stesso giorno di regolamento. Esempio, se oggi vendo un titolo realizzando una minusvalenza, la potrò compensare con una plusvalenza che realizzerò oggi stesso oppure da oggi in avanti.
				</div>
			</div>
			<div class="form-group  margin-top20">
				<div class="col-sm-6 clearfix clear-padding-left">
					<table class="table table-striped dataTable no-footer">
						<colgroup>
							<col width="30%">
							<col width="30%">
							<col width="40%">
						</colgroup>
						<thead>
							<tr>
								<th>Anno</th>
								<th>Scadenza</th>
								<th class="oRight">Totale €</th>
							</tr>
						</thead>
						<tbody>
							
								<tr>
									<td class="oCenter">2017</td>
									<td class="oCenter">31/12/2021</td>
									<td class="oRight" style="padding-right: 25px;">0,00</td>	
								</tr>
							
								<tr>
									<td class="oCenter">2016</td>
									<td class="oCenter">31/12/2020</td>
									<td class="oRight" style="padding-right: 25px;">0,00</td>	
								</tr>
							
								<tr>
									<td class="oCenter">2015</td>
									<td class="oCenter">31/12/2019</td>
									<td class="oRight" style="padding-right: 25px;">0,00</td>	
								</tr>
							
								<tr>
									<td class="oCenter">2014</td>
									<td class="oCenter">31/12/2018</td>
									<td class="oRight" style="padding-right: 25px;">0,00</td>	
								</tr>
							
								<tr>
									<td class="oCenter">2013</td>
									<td class="oCenter">31/12/2017</td>
									<td class="oRight" style="padding-right: 25px;">0,00</td>	
								</tr>
							
						</tbody>
					</table>
				</div>
				<div class="col-sm-6 clearfix clear-padding-left">
					<div class="innerBoxWhite w-auto clearfix">
						<h1 class="boxTitle txt_center">
							TOTALE MINUS DA RECUPERARE
						</h1>
						<div class="col-xs-12 clearfix margin-top10" style="text-align: center;">
							Nome Cognome:&nbsp;&nbsp;WWWWWW00W00W000W
						</div>
						<div class="col-xs-12 clearfix margin-top10" style="text-align: center;">
							<div style="border: 1px solid #f5f5f5; width: 30%; margin-left: 35%;">
								<div class="txt16" style="width: 100%; padding-right: 30px; text-align: right;">
									<b>0,00 €</b>
								</div>
							</div>								
						</div>
						<div class="col-xs-12 clearfix margin-top10" style="text-align: center;">
							Posizione aggiornata al:&nbsp;<strong>09/03/2017</strong>
						</div>
						<div class="col-xs-12 clearfix margin-top10" style="text-align: center; margin-bottom: 10px;">
							Ultimo mese consolidato:&nbsp;<strong>gennaio 2017</strong> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



<form id="formMovimenti" method="post" action="/WEBHT/investimenti/posizioneFiscaleMovimenti.do">
	<div style="display:none">
		<input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="da6fe0a2c65f399b924b1fb0b4765f06">
	</div>
	<div class="section clearfix">
		<h3 class="titleSection">
			Ricerca per periodo
		</h3>
		<div class="bs-example form-horizontal">
			<div class="form-group">
				<div class="form-field-input col-xs-12">
					<div class="form-field-input col-xs-12 clear-padding">
						Data valuta operazioni&nbsp;dal 
						&nbsp;
						<input type="text" name="dataInizio" size="12" value="01/01/2017" id="dataInizio" style="width:100px;" class="datepicker margin-left10 form-control hasDatepicker">
							<img class="ui-datepicker-trigger" src="/HT/fe/img/calendar.png" alt="Calendario" title="Calendario">
						&nbsp;
						al
						&nbsp;
						<input type="text" name="dataFine" size="12" value="10/03/2017" id="dataFine" style="width:100px;" class="datepicker margin-left10 form-control hasDatepicker"><img class="ui-datepicker-trigger" src="/HT/fe/img/calendar.png" alt="Calendario" title="Calendario">
						&nbsp;
						gg/mm/aaaa
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

</div>


<div class="pull-right margin-bottom20">
	<input type="button" name="posizioneFiscaleMovimenti" value="Ricerca" onclick="$('#formMovimenti').submit();" class="btn btn-primary " alt="Ricerca">	
</div>
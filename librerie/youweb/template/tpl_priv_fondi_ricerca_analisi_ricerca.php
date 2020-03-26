<div class="visible-print-block"> 
	<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage" />
	<div class="pull-right">
		  
		26/05/2017	
	</div>
</div>
<div class="riquadro clearfix">











<div class="clearfix">







<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag investimenti">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
				
 					<span>Ricerca e analisi</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>









	



<script type="text/javascript">
$(function() {
	$(".btnSelezioneOpen").click(function(){espandiRicerca();});
	$(".btnSelezioneClose").click(function(){comprimiRicerca();});
});

window.espandiRicerca = function() {
	$(".btnSelezioneOpen").addClass("hidden");
	$(".btnSelezioneClose").removeClass("hidden");
	$(".ricercaAvanzata").removeClass("hidden");
}
window.comprimiRicerca = function() {
	$(".btnSelezioneClose").addClass("hidden");
	$(".btnSelezioneOpen").removeClass("hidden");
	$(".ricercaAvanzata").addClass("hidden");
}
</script>
	
<div class="section clearfix">
	<div class="context-buttons">
		<a href="#" title="nascondi parametri di ricerca" class="btnSelezioneClose pull-right" role="button" aria-pressed="true"> </a>
		<a href="#" title="mostra criteri ricerca" class="btnSelezioneOpen pull-right hidden" role="button" aria-pressed="false"> </a>
	</div>
	<h3 class="titleSection">Parametri ricerca</h3>
	
	<form id="fondiRicercaForm" method="post" action="/WEBHT/investimenti/fondiRicercaParametriRisultato.do" class="form-horizontal">
		




	
		<div class="bs-example ricercaTestuale hidden">
			<div class="form-group clearfix col-sm-12 col-xs-12 margin-top10">
				Criteri:
				
				
 				
 				
				
				
				
				
				
				
					<strong>Tutti</strong>
				
			</div>
		</div>
	

		<div class="bs-example ricerca">
			<div class="form-group clearfix col-sm-12 col-xs-12 margin-top10">
				


<script type="text/javascript">
$(function() {
	$("input[name='descrizione']").attr('placeholder', 'Descrizione/ISIN');
});
</script>
				<div class="col-sm-12 col-xs-12 padding0">
					<div class="col-sm-6 col-xs-12">
						<input type="text" name="descrizione" maxlength="30" size="16" value="" class="form-control">
					</div>
					<div class="col-sm-6 col-xs-12">
						<select name="proventi" class="form-control"><option value="" selected="selected">Tipologia di strumento</option>
 						
							<option value="1">Lorem</option>
						
							<option value="2">Lorem</option>
							<option value="2">Lorem</option>
						</select>
 						<!--<select name="proventi" class="form-control"><option value="" selected="selected">Proventi/cedola</option>
 						
							<option value="1">Cumulative</option>
						
							<option value="2">Distributive</option></select>-->
					</div>
				</div>
				<div class="col-sm-12 col-xs-12 margin-top10 padding0">
					<div class="col-sm-6 col-xs-12">
						<select name="sgr" class="form-control"><option value="" selected="selected">Soc. di gestione</option>
 						
							<option value="DTI-00025">Aletti Gestielle Sgr</option>
						
							<option value="DTI-00110">BlackRock Global Funds SICAV</option>
						
							<option value="DTI-00282">Gestielle Investment SICAV</option>
						
							<option value="DTI-00332">Invesco Funds SICAV</option>
						
							<option value="DTI-00346">JPMorgan Funds SICAV</option>
						
							<option value="DTI-01120">JPMorgan Investment Funds SICAV</option>
						
							<option value="DTI-00489">Pictet SICAV</option>
						
							<option value="DTI-00546">Schroder International Selection Fund SICAV</option></select>
					</div>
					<div class="col-sm-6 col-xs-12">
						<select name="proventi" class="form-control">
							<option value="" selected="selected">Proventi/cedola</option>
 							<option value="1">Cumulative</option>
							<option value="2">Distributive</option>
						</select>
						
					</div>
				</div>
				<div class="col-sm-12 col-xs-12 margin-top10 padding0">
					<div class="col-sm-6 col-xs-12">
						<select name="categoria" class="form-control"><option value="" selected="selected">Categoria</option>
 						
							<option value="ASSOG-18">Azionari altre specializzazioni</option>
						
							<option value="ASSOG-17">Azionari altri settori</option>
						
							<option value="ASSOG-4">Azionari America</option>
						
							<option value="ASSOG-2">Azionari area euro</option>
						
							<option value="ASSOG-11">Azionari beni di consumo</option>
						
							<option value="ASSOG-9">Azionari energia e materie prime</option>
						
							<option value="ASSOG-3">Azionari Europa</option>
						
							<option value="ASSOG-13">Azionari finanza</option>
						
							<option value="ASSOG-14">Azionari informatica</option>
						
							<option value="ASSOG-8">Azionari internazionali</option>
						
							<option value="ASSOG-5">Azionari Pacifico</option>
						
							<option value="ASSOG-7">Azionari paese</option>
						
							<option value="ASSOG-6">Azionari paesi emergenti</option>
						
							<option value="ASSOG-12">Azionari salute</option>
						
							<option value="ASSOG-16">Azionari servizi di pubblica utilita</option>
						
							<option value="ASSOG-20">Bilanciati</option>
						
							<option value="ASSOG-21">Bilanciati obbligazionari</option>
						
							<option value="ASSOG-42">Flessibili</option>
						
							<option value="ASSOG-38">Fondi di mercato monetario euro</option>
						
							<option value="ASSOG-35">Obbligazionari altre specializzazioni</option>
						
							<option value="ASSOG-27">Obbligazionari dollaro gov.med./lungo termine</option>
						
							<option value="ASSOG-26">Obbligazionari dollaro governat.breve termine</option>
						
							<option value="ASSOG-29">Obbligazionari dollaro high yield</option>
						
							<option value="ASSOG-24">Obbligazionari euro corp.investment grade</option>
						
							<option value="ASSOG-23">Obbligazionari euro govern.med./lungo termine</option>
						
							<option value="ASSOG-22">Obbligazionari euro governativi breve termine</option>
						
							<option value="ASSOG-25">Obbligazionari euro high yield</option>
						
							<option value="ASSOG-37">Obbligazionari flessibili</option>
						
							<option value="ASSOG-31">Obbligazionari internazionali corp.invt grade</option>
						
							<option value="ASSOG-30">Obbligazionari internazionali governativi</option>
						
							<option value="ASSOG-32">Obbligazionari internazionali high yield</option>
						
							<option value="ASSOG-34">Obbligazionari paesi emergenti</option></select>
					</div>
					<div class="col-sm-6 col-xs-12">
						<select name="rating" class="form-control"><option value="" selected="selected">Rating</option>
 						
							<option value="1">Basso</option>
						
							<option value="2">Medio</option>
						
							<option value="3">Buono</option>
						
							<option value="4">Ottimo</option>
						
							<option value="5">Eccellente</option></select>
						
					</div>
				</div>
				<div class="col-sm-12 col-xs-12 margin-top10 ricercaAvanzata padding0">
					<div class="col-sm-6 col-xs-12">
						<select name="volatilita1Y" class="form-control"><option value="" selected="selected">Volatilit&agrave 1Y</option>
 						
							<option value="0|2">Rischio Minimo</option>
						
							<option value="2|5">Rischio Basso</option>
						
							<option value="5|10">Rischio Moderato</option>
						
							<option value="10|20">Rischio Alto</option>
						
							<option value="20|*">Rischio Molto Alto</option></select>
					</div>
					<div class="col-sm-6 col-xs-12">
						<select name="divisa" class="form-control"><option value="" selected="selected">Divisa</option>
 						
							<option value="EUR">Euro</option></select>
						
					</div>
				</div>
				<div class="col-sm-12 col-xs-12 margin-top10 ricercaAvanzata padding0">
					<div class="col-sm-6 col-xs-12">
						<select name="rischio" class="form-control"><option value="" selected="selected">Rischio</option>
 						
							<option value="1|2">Prudenti</option>
						
							<option value="3|4">Bilanciati</option>
						
							<option value="5|6">Aggressivi</option></select>
					</div>
				</div>
			</div> 
			<div class="pull-right" style="padding-right: 20px">
				
				<a href="/WEBHT/investimenti/fondiRicerca.do" class="button btn btn-primary">Indietro</a>
				<input type="submit" name="conferma" value="Cerca" class="btn btn-primary" alt="Cerca" />
			</div> 
		</div>
	</form>
</div>






<div class="section clearfix">
	<h3 class="titleSection">Societ&agrave; in primo piano</h3>
	<div class="bs-example">
		<div class="form-group clearfix col-sm-12 col-xs-12 margin-top10">
		
			<div class="col-sm-4 col-xs-12">
			<!-- index da 0, count da 1 -->
				<div class="riquadro clearfix content col-xs-12 imgBtn" style="margin-bottom:10px;" onClick="location.href='/WEBHT/investimenti/societaInPrimoPiano.do?sgr=DTI-00025&indexContent=1'" style="margin-bottom:0px;">
					<div class="col-xs-12">
						<img src="/HT/fe/img/DTI-00025.png" height="125" class="center-block img-responsive" />
					</div>
				</div>
			</div>
		
			<div class="col-sm-4 col-xs-12">
			<!-- index da 0, count da 1 -->
				<div class="riquadro clearfix content col-xs-12 imgBtn" style="margin-bottom:10px;" onClick="location.href='/WEBHT/investimenti/societaInPrimoPiano.do?sgr=DTI-00110&indexContent=2'" style="margin-bottom:0px;">
					<div class="col-xs-12">
						<img src="/HT/fe/img/DTI-00110.png" height="125" class="center-block img-responsive" />
					</div>
				</div>
			</div>
		
			<div class="col-sm-4 col-xs-12">
			<!-- index da 0, count da 1 -->
				<div class="riquadro clearfix content col-xs-12 imgBtn" style="margin-bottom:10px;" onClick="location.href='/WEBHT/investimenti/societaInPrimoPiano.do?sgr=DTI-00546&indexContent=3'" style="margin-bottom:0px;">
					<div class="col-xs-12">
						<img src="/HT/fe/img/DTI-00546.png" height="125" class="center-block img-responsive" />
					</div>
				</div>
			</div>
		
			<div class="col-sm-4 col-xs-12">
			<!-- index da 0, count da 1 -->
				<div class="riquadro clearfix content col-xs-12 imgBtn" style="margin-bottom:10px;" onClick="location.href='/WEBHT/investimenti/societaInPrimoPiano.do?sgr=DTI-00332&indexContent=4'" style="margin-bottom:0px;">
					<div class="col-xs-12">
						<img src="/HT/fe/img/DTI-00332.png" height="125" class="center-block img-responsive" />
					</div>
				</div>
			</div>
		
			<div class="col-sm-4 col-xs-12">
			<!-- index da 0, count da 1 -->
				<div class="riquadro clearfix content col-xs-12 imgBtn" style="margin-bottom:10px;" onClick="location.href='/WEBHT/investimenti/societaInPrimoPiano.do?sgr=DTI-00346&indexContent=5'" style="margin-bottom:0px;">
					<div class="col-xs-12">
						<img src="/HT/fe/img/DTI-00346.png" height="125" class="center-block img-responsive" />
					</div>
				</div>
			</div>
		
			<div class="col-sm-4 col-xs-12">
			<!-- index da 0, count da 1 -->
				<div class="riquadro clearfix content col-xs-12 imgBtn" style="margin-bottom:10px;" onClick="location.href='/WEBHT/investimenti/societaInPrimoPiano.do?sgr=DTI-00489&indexContent=6'" style="margin-bottom:0px;">
					<div class="col-xs-12">
						<img src="/HT/fe/img/DTI-00489.png" height="125" class="center-block img-responsive" />
					</div>
				</div>
			</div>
		
		</div>
	</div>
</div>
</div>
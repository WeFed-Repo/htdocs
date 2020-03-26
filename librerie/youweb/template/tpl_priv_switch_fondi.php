<div class="breadcrumb">
	
		<span>Investimenti</span>
	
		<span>Fondi</span>

</div>
<div class="visible-print-block"> 
	<img src="/HT/fe/img/logo_bancobpm@2x.png" title="Torna all'homepage" alt="Torna all'homepage">
	<div class="pull-right">
		  
		15/02/2018	
	</div>
</div>
<style>
	
	@media (min-width:990px){
		.fondoDestinazionePadding {
			padding-bottom: 22px;
		}
	}
	
</style>

<form id="fondiSwitchForm" method="post" action="/WEBHT/investimenti/fondiSwitchNormativa.do" class="form-horizontal">
<div class="riquadro clearfix">
	<div class="pager clearfix pull-right">
		<div class="circle_line">&nbsp;</div>
		
			
			
			
				
			
				<div class="circle current_page">&nbsp;</div>
			
		
			
			
			
				<div class="circle ">&nbsp;</div>
			
		
			
			
			
				<div class="circle ">&nbsp;</div>
			
		
			
			
			
				<div class="circle ">&nbsp;</div>
			
		
	</div>






<div style="margin-right:120px" class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag investimenti">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
			
				
				
 					<span>Switch</span>
 					
				
			
			
		
	</h1>
	
	


		
	
	
	
		
		
		
	
</div>
		







	


		
<script language="Javascript" type="text/javascript">
	function totSwitch(idform)	
	{
		if (document.getElementById('opzioneSwitchTot').checked){
		
				var quoteTot ='0.000000';
				var quotaInt;
				var	quotaDec;
				
				var strSplit = quoteTot.split(".");					
				//alert('strSplit: ' + strSplit);
				if (strSplit.length == 1){
					//solo la parte intera
					quotaInt = strSplit[0];
					quotaDec = '000';
				}
				else{
					quotaInt = strSplit[0];
					quotaDec = strSplit[1];
				}
				
				document.getElementById('numeroQuoteSwitchInt').value = quotaInt; 	
				document.getElementById('numeroQuoteSwitchDec').value = quotaDec; 							
				document.getElementById('numeroQuoteSwitchInt').disabled = true;
				document.getElementById('numeroQuoteSwitchDec').disabled = true;
				ricaricaValori(idform);
			}
			else{
				ricaricaValori(idform);
				document.getElementById('numeroQuoteSwitchInt').disabled = false;
				document.getElementById('numeroQuoteSwitchDec').disabled = false;								
				document.getElementById('numeroQuoteSwitchInt').value = "";
				document.getElementById('numeroQuoteSwitchDec').value = "";
				
			}
		}
	

	//se non ci sono i decimali li pongo a 0
	function ricaricaValori(idform)
	{		
		if (document.getElementById('numeroQuoteSwitchInt').value!="" && document.getElementById('numeroQuoteSwitchDec').value=="")
		{
			document.getElementById('numeroQuoteSwitchDec').value=0;
			
		}				
	}

	function abilita(){
		
		document.getElementById('numeroQuoteSwitchInt').disabled = false;
 		document.getElementById('numeroQuoteSwitchDec').disabled = false;
		return true;
	}	
	
	function isDistribProventi(codAreaFin)	{
		if($('#'+codAreaFin.value).data('distribution') == true)	{
			$('#distribuzioneProventi').show();
		}	else	{
			$('#distribuzioneProventi').hide();
		}
	} 
</script>
		

		



<div class="divForm section clearfix">
	<div class="selezioneCC"> 
	
	
	<h3 class="titleSection">









		

			Dossier selezionato
		
		
		
		

</h3>
	
		<div class="bs-example">	
			<div class="form-group">			
			    <div>
				    <div class="form-field-resume col-sm-4">
				    	<label class="control-label">Dossier</label>
				    	<span class="resume">000000553157</span>
				    </div>				
				     <div class="form-field-resume col-sm-4">    	 
				        <label class="control-label">Filiale</label>
				        <span class="resume">ARCORE - 0537</span>
				     </div>
				     <div class="form-field-resume col-sm-4">		        
						<label class="control-label">Intestazione</label>
						<span class="resume">ROSSETTI STEFANO, FERRABOSCHI DANIELA</span>		                
					</div>					
				</div> 
			</div>
		</div>
	</div>
</div>


		<div class="OUT2ColDiff section clearfix">
				
			
			<h3 class="titleSection">









		

			Dati fondo
		
		
		
		

 </h3>
			<div class="bs-example">
				<div class="form-group">
					<div class="form-field-resume col-sm-6">
						<label class="control-label">Fondo di rimborso</label>
						<span class="resume">ANIMA EMERG MKTS CLASSE A CUMULATIVO (ISIN:IT0001415873)</span>			
					
						<label class="control-label">Conto corrente di appoggio</label>
						<span class="resume">000000005544</span>
			
						<label class="control-label">Saldo disponibile sul c/c (in Euro)</label>
						<span class="resume">+ 168.461,85 <input type="hidden" name="saldoDispo" value="168461.85"></span>
					</div>
					<div class="form-field-resume col-sm-6">
						<label class="control-label">Quote fondo presenti in dossier</label>
						<span class="resume">0,000 <input type="hidden" name="quotaFondoTot" value="0.000000"></span>
				
						<label class="control-label">Controvalore in Euro</label>
						<span class="resume">0,000 <input type="hidden" name="controVal" value="0.000"></span>
		
						<label class="control-label">Ultima quota/NAV</label>
						<span class="resume">12.304</span>
					</div>
				</div>
			</div>
		</div>
		
		<div class="divForm section clearfix">
			<input type="hidden" name="selezione" value="" id="selezione">
			
			<h3 class="titleSection">









		

			Switch
		
		
		
		

</h3> 
			<div class="bs-example">
				<div class="col-xs-12" style="margin-top:10px;">
      				<div class="row">
         				 <div class="col-sm-5">				
							<input type="radio" name="contrattoSelezionato" id="1" value="1"  data-num-quote="0.000000" data-quantita-euro="0.000" data-switch-euro="T" data-tipo="U">
							N.ro 0,000 ( 0,000 €)
							</div>	
							<div class="col-sm-7">
								Saldo da acquisto singolo (PIC)
												 - ROSSETTI STEFANO, FERRABOSCHI DANIELA
							
								
							</div>	
						
						<input type="hidden" name="opzioneSwitchEuro" value="" id="opzioneSwitchEuro">
					</div>
					
					<div class="form-field-input col-xs-12">
						<div class="form-field-input col-xs-12 col-sm-4">
							<label for="numeroQuoteSwitchInt">Switch N. Quote</label>
							<input type="text" name="numeroQuoteSwitchInt" size="8" value="" id="numeroQuoteSwitchInt" style="width:44%; float: left; text-align: right" class="form-control">
							 &nbsp; , &nbsp;
							<input type="text" name="numeroQuoteSwitchDec" maxlength="3" size="3" value="" id="numeroQuoteSwitchDec" style="width:20%;text-align: right" class="form-control">
							
							<div id="euroSwitch" style="display: none;">
								<label for="euroSwitch">Swich Eur</label>
								<input type="text" name="euroSwitchInt" size="8" value="" id="euroSwitchInt" style="width:50%;float: left; text-align: right" class="form-control">
								 &nbsp; , &nbsp;
								<input type="text" name="euroSwitchDec" maxlength="3" size="3" value="" id="euroSwitchDec" style="width:20%;text-align: right" class="form-control">
							</div>
						</div>
						
						<div class="form-field-input col-xs-12 col-sm-8">
							<label for="fondoDest" class="fondoDestinazionePadding">al Fondo di destinazione</label>
							<select name="codAreaFinanzaSwitch" size="1" onclick="isDistribProventi(this);" id="fondoDest" class="form-control"><option value=""></option>
								
									<option value="04906712" id="04906712" data-cpn="ALL" data-distribution="true">
										FONDO ANIMA TRAGUARDO 2018 ALTO POTENZIALE CUMULATIVO
									</option>
								
									<option value="04980241" id="04980241" data-cpn="ALL" data-distribution="true">
										ANIMA SELECTION CLASSE AD DIS CUMULATIVO
									</option>
								
									<option value="05138570" id="05138570" data-cpn="ALL" data-distribution="true">
										ANIMA BLUEBAY REDD.EMERG.CL.AD PARTEC 2016 -DIS.CUMULATIVO
									</option>
								
									<option value="04203531" id="04203531" data-cpn="NOVALUE" data-distribution="false">
										ANIMA PACIFICO-FCO CL A CUMULATIVO
									</option>
								
									<option value="01015921" id="01015921" data-cpn="NOVALUE" data-distribution="false">
										ANIMA PIANETA CLASSE A CUMULATIVO
									</option>
								
									<option value="05163080" id="05163080" data-cpn="ALL" data-distribution="true">
										ANIMA INIZIATIVA ITALIA CL. AD CUMULATIVO
									</option>
								
									<option value="05044560" id="05044560" data-cpn="NOVALUE" data-distribution="false">
										ANIMA RISERVA DOLLARO CLASSE A CAP CUMULATIVO
									</option>
								
									<option value="04874250" id="04874250" data-cpn="NOVALUE" data-distribution="false">
										ANIMA RIS EM A QUOTA DI PARTEC.2013-31.12.2050 -CUMULATIVO
									</option>
								
									<option value="04874231" id="04874231" data-cpn="NOVALUE" data-distribution="false">
										ANIMA RISERVA GLOBALE CLASSE A CUMULATIVO
									</option>
								
									<option value="05221890" id="05221890" data-cpn="ALL" data-distribution="true">
										ANIMA PIANETA ADD QUOTA DI PART.-AD-2017-31.12.50 CUMULATIVO
									</option>
								
									<option value="05186040" id="05186040" data-cpn="NOVALUE" data-distribution="false">
										ANIMA IN.ITALIA CL.A PARTECIP 2016-2050-ACCUMULAZI CUMULATIV
									</option>
								
									<option value="05221990" id="05221990" data-cpn="ALL" data-distribution="true">
										ANIMA AMER ADD QUOTA DI PARTECIPAZIONE -AD- 2017-31.12.50 CU
									</option>
								
									<option value="05221950" id="05221950" data-cpn="ALL" data-distribution="true">
										ANIMA PACIFICO ADD QUOTA DI PART.-AD-2017-31.12.5 CUMULTIVO
									</option>
								
									<option value="05159000" id="05159000" data-cpn="ALL" data-distribution="true">
										ANIMA VIS PL AD QUOTA DI PART.2016-DISTRIBUZIONE-CUMULATIVO
									</option>
								
									<option value="05158941" id="05158941" data-cpn="ALL" data-distribution="true">
										ANIMA SFORZESCO PLUS CLASSE AD
									</option>
								
									<option value="05158881" id="05158881" data-cpn="ALL" data-distribution="true">
										ANIMA REDDITO FLESSIBILE CL.AD
									</option>
								
									<option value="05186060" id="05186060" data-cpn="NOVALUE" data-distribution="false">
										ANIMA RUSS MA A QUOTA DI PART.2016-2050-ACCUMULAZ CUMULATIVO
									</option>
								
									<option value="05186120" id="05186120" data-cpn="NOVALUE" data-distribution="false">
										ANIMA BLUEBAY REDD.EMERG. CL.A CUMULATIVA
									</option>
								
									<option value="05221750" id="05221750" data-cpn="ALL" data-distribution="true">
										ANIMA ITALIA CLASSE AD DIS CUMULATIVO
									</option>
								
									<option value="05221770" id="05221770" data-cpn="ALL" data-distribution="true">
										ANIMA EMERGENTI CLASSE AD DIS CUMULATIVO
									</option>
								
									<option value="05158901" id="05158901" data-cpn="NOVALUE" data-distribution="false">
										ANIMA SFORZESCO PLUS CLASSE A
									</option>
								
									<option value="05158960" id="05158960" data-cpn="NOVALUE" data-distribution="false">
										ANIMA VIS PL A QUOTA DI PART.2016-ACCUMULAZIONE-CUMULATIVO
									</option>
								
									<option value="01415281" id="01415281" data-cpn="NOVALUE" data-distribution="false">
										ANIMA EUROPA CLASSE A CUMULATIVO
									</option>
								
									<option value="01415341" id="01415341" data-cpn="NOVALUE" data-distribution="false">
										ANIMA LIQUIDITA EURO CLASSE I CUMULATIVO
									</option>
								
									<option value="01040091" id="01040091" data-cpn="NOVALUE" data-distribution="false">
										ANIMA AMERICA CL.A CUMULATIVO
									</option>
								
									<option value="01415891" id="01415891" data-cpn="NOVALUE" data-distribution="false">
										ANIMA OBBLIGAZIONARIO EURO CLASSE A CUMULATIVO
									</option>
								
									<option value="04786392" id="04786392" data-cpn="ALL" data-distribution="true">
										FONDO ANIMA TRICOLORE CUMULATIVO CLASSE AD
									</option>
								
									<option value="04851922" id="04851922" data-cpn="NOVALUE" data-distribution="false">
										FONDO ANIMA LIQUIDITA' CLASSE A CUMULATIVO
									</option>
								
									<option value="05222010" id="05222010" data-cpn="ALL" data-distribution="true">
										ANIMA CAPITALE PIU OBBLIGAZ QUOTA DI PART -AD- 2017-31.12.50
									</option>
								
									<option value="05138610" id="05138610" data-cpn="ALL" data-distribution="true">
										ANIMA GLOBAL MACRO DIVERSIFIED CLASSE AD DIS CUMULATIVO
									</option>
								
									<option value="05221790" id="05221790" data-cpn="ALL" data-distribution="true">
										ANIMA CAPITALE PIU 15 ADD-QUOTA PART.D-2017-31.12.50 CUM
									</option>
								
									<option value="04350660" id="04350660" data-cpn="NOVALUE" data-distribution="false">
										ANIMA CT P OB A QUOTA DI PARTEC.2008-31.12.2050 -CUMULATIVO
									</option>
								
									<option value="04350691" id="04350691" data-cpn="NOVALUE" data-distribution="false">
										FONDO ANIMA CAPITALE PIU' 15 CUMULATIVO CLASSE A
									</option>
								
									<option value="04350720" id="04350720" data-cpn="NOVALUE" data-distribution="false">
										ANIMA CAP P30 A QUOTA DI PART.2008-31.12.2050-CUMULATIVO
									</option>
								
									<option value="04350810" id="04350810" data-cpn="NOVALUE" data-distribution="false">
										ANIMA C PI 70 A QUOTA DI PARTEC.2008-31.12.2050 -CUMULATIVO
									</option>
								
									<option value="05202020" id="05202020" data-cpn="NOVALUE" data-distribution="false">
										ANIMA GLOBAL MACRO DIVERSIFIED CLASSE A CAP CUMULATIVO
									</option>
								
									<option value="05221850" id="05221850" data-cpn="ALL" data-distribution="true">
										ANIMA CAPITALE PIU 30 CLASSE AD DIS CUMULATIVO
									</option>
								
									<option value="05221810" id="05221810" data-cpn="ALL" data-distribution="true">
										ANIMA ALTO POTENZIALE GL ADD - QUOTA PART. AD- 2017-31.12.50
									</option>
								
									<option value="04896951" id="04896951" data-cpn="ALL" data-distribution="true">
										ANIMA OBBLIGAZIONARIO HIGH YIELD CLASSE AD DIS CUMULATIVO
									</option>
								
									<option value="05221930" id="05221930" data-cpn="ALL" data-distribution="true">
										ANIMA FONDO TRADING ADD QUOTE DI PARTECIP. AD- 2017-31.12.50
									</option>
								
									<option value="05086170" id="05086170" data-cpn="ALL" data-distribution="true">
										ANIMA VISCON AD QUOTA DI PARTEC.2014-31.12.2050-DIS CUMULATI
									</option>
								
									<option value="05086190" id="05086190" data-cpn="ALL" data-distribution="true">
										ANIMA SFORZESCO-CLASSE AD PARTEC.2014-31.12.2050-DIST CUMULA
									</option>
								
									<option value="05044760" id="05044760" data-cpn="NOVALUE" data-distribution="false">
										ANIMA RISERVA DOLLARO CLASSE I CAP CUMULATIVO
									</option>
								
									<option value="03098141" id="03098141" data-cpn="NOVALUE" data-distribution="false">
										ANIMA INIZIATIVA EUROPA CLASSE A CUMULATIVO
									</option>
								
									<option value="04895781" id="04895781" data-cpn="NOVALUE" data-distribution="false">
										ANIMA C P OBB N QUOTA DI PARTECIPAZIONE 2013-31.12.2050 -ACC
									</option>
								
									<option value="04895821" id="04895821" data-cpn="NOVALUE" data-distribution="false">
										ANIMA C PI 30 N QUOTA DI PARTECIPAZIONE 2013-31.12.2050 -ACC
									</option>
								
									<option value="04895901" id="04895901" data-cpn="NOVALUE" data-distribution="false">
										ANIMA C PI 70 N QUOTA DI PARTECIPAZIONE 2013-31.12.2050 -ACC
									</option>
								
									<option value="05221730" id="05221730" data-cpn="ALL" data-distribution="true">
										ANIMA CAPITALE PIU 70 CLASSE AD DIS CUMULATIVO
									</option>
								
									<option value="00380580" id="00380580" data-cpn="NOVALUE" data-distribution="false">
										ANIMA ALTO POTENZIALE GLOBALE-FCO CL A ACC CUMULTIVO
									</option>
								
									<option value="00382200" id="00382200" data-cpn="NOVALUE" data-distribution="false">
										ANIMA OBBLIGAZIONARIO HIGH YIELD CLASSE A CAP  CUMULATIVO
									</option>
								
									<option value="00386020" id="00386020" data-cpn="NOVALUE" data-distribution="false">
										ANIMA VALORE GLOBALE-FCO CL A ACC CUMULATIVO
									</option>
								
									<option value="05002700" id="05002700" data-cpn="ALL" data-distribution="true">
										ANIMA OBBLIGAZIONARIO CORPORATE CLASSE AD DIS  CUMULATIVO
									</option>
								
									<option value="05002720" id="05002720" data-cpn="ALL" data-distribution="true">
										ANIMA OBBLIGAZIONARIO EMERGENTE CLASSE AD DIS CUMULATIVO
									</option>
								
									<option value="00388261" id="00388261" data-cpn="NOVALUE" data-distribution="false">
										ANIMA SALVADANAIO CLASSE A-PORTATORE-CUMULATIVO
									</option>
								
									<option value="05002630" id="05002630" data-cpn="NOVALUE" data-distribution="false">
										ANIMA RISPARMIO CLASSE A CAP  CUMULATIVO
									</option>
								
									<option value="01040131" id="01040131" data-cpn="ALL" data-distribution="true">
										ANIMA RISPARMIO CLASSE AD DIS CUMULATIVO
									</option>
								
									<option value="00380720" id="00380720" data-cpn="NOVALUE" data-distribution="false">
										ANIMA SFORZESCO-FCO CL A ACC CUMULATIVO
									</option>
								
									<option value="00388440" id="00388440" data-cpn="NOVALUE" data-distribution="false">
										ANIMA FD TRADING CUMULATIVO
									</option>
								
									<option value="00380700" id="00380700" data-cpn="NOVALUE" data-distribution="false">
										ANIMA VISCONTEO-FCO CL A ACC CUMULATIVO
									</option>
								
									<option value="01223090" id="01223090" data-cpn="NOVALUE" data-distribution="false">
										ANIMA CORPORATE BOND EUROPE-CUMULATIVO
									</option>
								
									<option value="01040051" id="01040051" data-cpn="NOVALUE" data-distribution="false">
										ANIMA ITALIA CL.A CUMULATIVO
									</option>
								
									<option value="05221970" id="05221970" data-cpn="ALL" data-distribution="true">
										ANIMA OBBLIGAZIONARIO EURO QUOTA DI PART.-AD- 2017-31.12.50
									</option>
								
									<option value="05221870" id="05221870" data-cpn="ALL" data-distribution="true">
										ANIMA VALORE GLOBALE CLASSE AD DIS CUMULATIVO
									</option>
								
									<option value="03825510" id="03825510" data-cpn="NOVALUE" data-distribution="false">
										ANIMA OBB EM A QUOTA DI PARTEC.2005-31.12.2050 -CUMULATIVO
									</option>
								
									<option value="05221910" id="05221910" data-cpn="ALL" data-distribution="true">
										ANIMA EU ADD QUOTA DI PART.-AD-2017-31.12.50 DIST CUMULATIVO
									</option>
								
									<option value="05221830" id="05221830" data-cpn="ALL" data-distribution="true">
										ANIMA INIZIATIVA EUROPA CLASSE AD DIS CUMULATIVO
									</option>
								
									<option value="05186080" id="05186080" data-cpn="NOVALUE" data-distribution="false">
										ANIMA TRICOLORE CLASSE A CAP  PT CUMULATIVO
									</option>
								
									<option value="05186100" id="05186100" data-cpn="NOVALUE" data-distribution="false">
										ANIMA SELECTION CL.A PARTEC.2016-2050-ACCUMULAZI CUMULATIVO
									</option>
								
									<option value="05158841" id="05158841" data-cpn="NOVALUE" data-distribution="false">
										ANIMA REDDITO FLESSIBILE CL. A PARTEC 2016 -ACCUMULAZIONE-
									</option>
								
									<option value="04980281" id="04980281" data-cpn="ALL" data-distribution="true">
										ANIMA RUSSELL MULTI-ASSET CLASSE AD DIS CUMULATIVO
									</option>
								
									<option value="05275190" id="05275190" data-cpn="NOVALUE" data-distribution="false">
										ANIMA HIGH YIELD BT CLASSE A 3-PORTATORE CUMULATIVO
									</option>
								
									<option value="05275210" id="05275210" data-cpn="ALL" data-distribution="true">
										ANIMA HIGH YIELD BT CL.-AD- PORTATORE CUMULATIVO
									</option>
								
									<option value="05222010" id="05222010" data-cpn="ALL" data-distribution="true">
										ANIMA CAPITALE PIU OBBLIGAZ QUOTA DI PART -AD- 2017-31.12.50
									</option>
								
									<option value="04350660" id="04350660" data-cpn="NOVALUE" data-distribution="false">
										ANIMA CT P OB A QUOTA DI PARTEC.2008-31.12.2050 -CUMULATIVO
									</option>
								
									<option value="04350720" id="04350720" data-cpn="NOVALUE" data-distribution="false">
										ANIMA CAP P30 A QUOTA DI PART.2008-31.12.2050-CUMULATIVO
									</option>
								
									<option value="05202020" id="05202020" data-cpn="NOVALUE" data-distribution="false">
										ANIMA GLOBAL MACRO DIVERSIFIED CLASSE A CAP CUMULATIVO
									</option>
								
									<option value="04896951" id="04896951" data-cpn="ALL" data-distribution="true">
										ANIMA OBBLIGAZIONARIO HIGH YIELD CLASSE AD DIS CUMULATIVO
									</option>
								
									<option value="05086170" id="05086170" data-cpn="ALL" data-distribution="true">
										ANIMA VISCON AD QUOTA DI PARTEC.2014-31.12.2050-DIS CUMULATI
									</option>
								
									<option value="05044760" id="05044760" data-cpn="NOVALUE" data-distribution="false">
										ANIMA RISERVA DOLLARO CLASSE I CAP CUMULATIVO
									</option>
								
									<option value="04895781" id="04895781" data-cpn="NOVALUE" data-distribution="false">
										ANIMA C P OBB N QUOTA DI PARTECIPAZIONE 2013-31.12.2050 -ACC
									</option>
								
									<option value="04895901" id="04895901" data-cpn="NOVALUE" data-distribution="false">
										ANIMA C PI 70 N QUOTA DI PARTECIPAZIONE 2013-31.12.2050 -ACC
									</option>
								
									<option value="00380580" id="00380580" data-cpn="NOVALUE" data-distribution="false">
										ANIMA ALTO POTENZIALE GLOBALE-FCO CL A ACC CUMULTIVO
									</option>
								
									<option value="00386020" id="00386020" data-cpn="NOVALUE" data-distribution="false">
										ANIMA VALORE GLOBALE-FCO CL A ACC CUMULATIVO
									</option>
								
									<option value="05002720" id="05002720" data-cpn="ALL" data-distribution="true">
										ANIMA OBBLIGAZIONARIO EMERGENTE CLASSE AD DIS CUMULATIVO
									</option>
								
									<option value="01040131" id="01040131" data-cpn="ALL" data-distribution="true">
										ANIMA RISPARMIO CLASSE AD DIS CUMULATIVO
									</option>
								
									<option value="00388440" id="00388440" data-cpn="NOVALUE" data-distribution="false">
										ANIMA FD TRADING CUMULATIVO
									</option>
								
									<option value="01223090" id="01223090" data-cpn="NOVALUE" data-distribution="false">
										ANIMA CORPORATE BOND EUROPE-CUMULATIVO
									</option>
								
									<option value="05221970" id="05221970" data-cpn="ALL" data-distribution="true">
										ANIMA OBBLIGAZIONARIO EURO QUOTA DI PART.-AD- 2017-31.12.50
									</option>
								
									<option value="03825510" id="03825510" data-cpn="NOVALUE" data-distribution="false">
										ANIMA OBB EM A QUOTA DI PARTEC.2005-31.12.2050 -CUMULATIVO
									</option>
								
									<option value="05186080" id="05186080" data-cpn="NOVALUE" data-distribution="false">
										ANIMA TRICOLORE CLASSE A CAP  PT CUMULATIVO
									</option>
								
									<option value="04980281" id="04980281" data-cpn="ALL" data-distribution="true">
										ANIMA RUSSELL MULTI-ASSET CLASSE AD DIS CUMULATIVO
									</option>
								
									<option value="05138570" id="05138570" data-cpn="ALL" data-distribution="true">
										ANIMA BLUEBAY REDD.EMERG.CL.AD PARTEC 2016 -DIS.CUMULATIVO
									</option>
								
									<option value="01015921" id="01015921" data-cpn="NOVALUE" data-distribution="false">
										ANIMA PIANETA CLASSE A CUMULATIVO
									</option>
								
									<option value="05044560" id="05044560" data-cpn="NOVALUE" data-distribution="false">
										ANIMA RISERVA DOLLARO CLASSE A CAP CUMULATIVO
									</option>
								
									<option value="05158901" id="05158901" data-cpn="NOVALUE" data-distribution="false">
										ANIMA SFORZESCO PLUS CLASSE A
									</option>
								
									<option value="05221730" id="05221730" data-cpn="ALL" data-distribution="true">
										ANIMA CAPITALE PIU 70 CLASSE AD DIS CUMULATIVO
									</option>
								
									<option value="01415281" id="01415281" data-cpn="NOVALUE" data-distribution="false">
										ANIMA EUROPA CLASSE A CUMULATIVO
									</option>
								
									<option value="05275190" id="05275190" data-cpn="NOVALUE" data-distribution="false">
										ANIMA HIGH YIELD BT CLASSE A 3-PORTATORE CUMULATIVO
									</option>
								
									<option value="01415341" id="01415341" data-cpn="NOVALUE" data-distribution="false">
										ANIMA LIQUIDITA EURO CLASSE I CUMULATIVO
									</option>
								
									<option value="01040091" id="01040091" data-cpn="NOVALUE" data-distribution="false">
										ANIMA AMERICA CL.A CUMULATIVO
									</option>
								
									<option value="01415891" id="01415891" data-cpn="NOVALUE" data-distribution="false">
										ANIMA OBBLIGAZIONARIO EURO CLASSE A CUMULATIVO
									</option>
								
									<option value="04786392" id="04786392" data-cpn="ALL" data-distribution="true">
										FONDO ANIMA TRICOLORE CUMULATIVO CLASSE AD
									</option>
								
									<option value="04851922" id="04851922" data-cpn="NOVALUE" data-distribution="false">
										FONDO ANIMA LIQUIDITA' CLASSE A CUMULATIVO
									</option>
								
									<option value="05138610" id="05138610" data-cpn="ALL" data-distribution="true">
										ANIMA GLOBAL MACRO DIVERSIFIED CLASSE AD DIS CUMULATIVO
									</option>
								
									<option value="05221790" id="05221790" data-cpn="ALL" data-distribution="true">
										ANIMA CAPITALE PIU 15 ADD-QUOTA PART.D-2017-31.12.50 CUM
									</option>
								
									<option value="04350691" id="04350691" data-cpn="NOVALUE" data-distribution="false">
										FONDO ANIMA CAPITALE PIU' 15 CUMULATIVO CLASSE A
									</option>
								
									<option value="04350810" id="04350810" data-cpn="NOVALUE" data-distribution="false">
										ANIMA C PI 70 A QUOTA DI PARTEC.2008-31.12.2050 -CUMULATIVO
									</option>
								
									<option value="05221850" id="05221850" data-cpn="ALL" data-distribution="true">
										ANIMA CAPITALE PIU 30 CLASSE AD DIS CUMULATIVO
									</option>
								
									<option value="05221810" id="05221810" data-cpn="ALL" data-distribution="true">
										ANIMA ALTO POTENZIALE GL ADD - QUOTA PART. AD- 2017-31.12.50
									</option>
								
									<option value="05221930" id="05221930" data-cpn="ALL" data-distribution="true">
										ANIMA FONDO TRADING ADD QUOTE DI PARTECIP. AD- 2017-31.12.50
									</option>
								
									<option value="05086190" id="05086190" data-cpn="ALL" data-distribution="true">
										ANIMA SFORZESCO-CLASSE AD PARTEC.2014-31.12.2050-DIST CUMULA
									</option>
								
									<option value="03098141" id="03098141" data-cpn="NOVALUE" data-distribution="false">
										ANIMA INIZIATIVA EUROPA CLASSE A CUMULATIVO
									</option>
								
									<option value="04895821" id="04895821" data-cpn="NOVALUE" data-distribution="false">
										ANIMA C PI 30 N QUOTA DI PARTECIPAZIONE 2013-31.12.2050 -ACC
									</option>
								
									<option value="00382200" id="00382200" data-cpn="NOVALUE" data-distribution="false">
										ANIMA OBBLIGAZIONARIO HIGH YIELD CLASSE A CAP  CUMULATIVO
									</option>
								
									<option value="05002700" id="05002700" data-cpn="ALL" data-distribution="true">
										ANIMA OBBLIGAZIONARIO CORPORATE CLASSE AD DIS  CUMULATIVO
									</option>
								
									<option value="00388261" id="00388261" data-cpn="NOVALUE" data-distribution="false">
										ANIMA SALVADANAIO CLASSE A-PORTATORE-CUMULATIVO
									</option>
								
									<option value="05002630" id="05002630" data-cpn="NOVALUE" data-distribution="false">
										ANIMA RISPARMIO CLASSE A CAP  CUMULATIVO
									</option>
								
									<option value="00380720" id="00380720" data-cpn="NOVALUE" data-distribution="false">
										ANIMA SFORZESCO-FCO CL A ACC CUMULATIVO
									</option>
								
									<option value="00380700" id="00380700" data-cpn="NOVALUE" data-distribution="false">
										ANIMA VISCONTEO-FCO CL A ACC CUMULATIVO
									</option>
								
									<option value="01040051" id="01040051" data-cpn="NOVALUE" data-distribution="false">
										ANIMA ITALIA CL.A CUMULATIVO
									</option>
								
									<option value="05221870" id="05221870" data-cpn="ALL" data-distribution="true">
										ANIMA VALORE GLOBALE CLASSE AD DIS CUMULATIVO
									</option>
								
									<option value="05221910" id="05221910" data-cpn="ALL" data-distribution="true">
										ANIMA EU ADD QUOTA DI PART.-AD-2017-31.12.50 DIST CUMULATIVO
									</option>
								
									<option value="05221830" id="05221830" data-cpn="ALL" data-distribution="true">
										ANIMA INIZIATIVA EUROPA CLASSE AD DIS CUMULATIVO
									</option>
								
									<option value="05186100" id="05186100" data-cpn="NOVALUE" data-distribution="false">
										ANIMA SELECTION CL.A PARTEC.2016-2050-ACCUMULAZI CUMULATIVO
									</option>
								
									<option value="05158841" id="05158841" data-cpn="NOVALUE" data-distribution="false">
										ANIMA REDDITO FLESSIBILE CL. A PARTEC 2016 -ACCUMULAZIONE-
									</option>
								
									<option value="04980241" id="04980241" data-cpn="ALL" data-distribution="true">
										ANIMA SELECTION CLASSE AD DIS CUMULATIVO
									</option>
								
									<option value="04203531" id="04203531" data-cpn="NOVALUE" data-distribution="false">
										ANIMA PACIFICO-FCO CL A CUMULATIVO
									</option>
								
									<option value="05163080" id="05163080" data-cpn="ALL" data-distribution="true">
										ANIMA INIZIATIVA ITALIA CL. AD CUMULATIVO
									</option>
								
									<option value="04874250" id="04874250" data-cpn="NOVALUE" data-distribution="false">
										ANIMA RIS EM A QUOTA DI PARTEC.2013-31.12.2050 -CUMULATIVO
									</option>
								
									<option value="04874231" id="04874231" data-cpn="NOVALUE" data-distribution="false">
										ANIMA RISERVA GLOBALE CLASSE A CUMULATIVO
									</option>
								
									<option value="05221890" id="05221890" data-cpn="ALL" data-distribution="true">
										ANIMA PIANETA ADD QUOTA DI PART.-AD-2017-31.12.50 CUMULATIVO
									</option>
								
									<option value="05186040" id="05186040" data-cpn="NOVALUE" data-distribution="false">
										ANIMA IN.ITALIA CL.A PARTECIP 2016-2050-ACCUMULAZI CUMULATIV
									</option>
								
									<option value="05221990" id="05221990" data-cpn="ALL" data-distribution="true">
										ANIMA AMER ADD QUOTA DI PARTECIPAZIONE -AD- 2017-31.12.50 CU
									</option>
								
									<option value="05221950" id="05221950" data-cpn="ALL" data-distribution="true">
										ANIMA PACIFICO ADD QUOTA DI PART.-AD-2017-31.12.5 CUMULTIVO
									</option>
								
									<option value="04906712" id="04906712" data-cpn="ALL" data-distribution="true">
										FONDO ANIMA TRAGUARDO 2018 ALTO POTENZIALE CUMULATIVO
									</option>
								
									<option value="05159000" id="05159000" data-cpn="ALL" data-distribution="true">
										ANIMA VIS PL AD QUOTA DI PART.2016-DISTRIBUZIONE-CUMULATIVO
									</option>
								
									<option value="05158941" id="05158941" data-cpn="ALL" data-distribution="true">
										ANIMA SFORZESCO PLUS CLASSE AD
									</option>
								
									<option value="05158881" id="05158881" data-cpn="ALL" data-distribution="true">
										ANIMA REDDITO FLESSIBILE CL.AD
									</option>
								
									<option value="05186060" id="05186060" data-cpn="NOVALUE" data-distribution="false">
										ANIMA RUSS MA A QUOTA DI PART.2016-2050-ACCUMULAZ CUMULATIVO
									</option>
								
									<option value="05186120" id="05186120" data-cpn="NOVALUE" data-distribution="false">
										ANIMA BLUEBAY REDD.EMERG. CL.A CUMULATIVA
									</option>
								
									<option value="05275210" id="05275210" data-cpn="ALL" data-distribution="true">
										ANIMA HIGH YIELD BT CL.-AD- PORTATORE CUMULATIVO
									</option>
								
									<option value="05221770" id="05221770" data-cpn="ALL" data-distribution="true">
										ANIMA EMERGENTI CLASSE AD DIS CUMULATIVO
									</option>
								
									<option value="05158960" id="05158960" data-cpn="NOVALUE" data-distribution="false">
										ANIMA VIS PL A QUOTA DI PART.2016-ACCUMULAZIONE-CUMULATIVO
									</option>
								
									<option value="05221750" id="05221750" data-cpn="ALL" data-distribution="true">
										ANIMA ITALIA CLASSE AD DIS CUMULATIVO
									</option></select>
						</div>
					</div>
					<input type="hidden" name="selezioneSwIn" value="" id="selezioneSwIn">
					<div class="form-field-input col-xs-12 col-sm-12" id="distribuzioneProventi" style="display: none;">
						<div  style="margin-top: 20px;">
							<div class="col-xs-12 col-sm-12">
								<label for="modalitaDistribuzioneProventi"><b>Scegli la modalità di distribuzione dei proventi:</b></label>
							</div>
							<div class="col-xs-12 col-sm-6">
								<input type="radio" name="modalitaDistribuzioneProventi" value="accredito" id="accredito" class="control-label"> Accredito in conto
							</div>
							<div class="col-xs-12 col-sm-6">
								<input type="radio" name="modalitaDistribuzioneProventi" value="reinvestimento" id="reinvestimento"  class="control-label"> Reinvestimento nel fondo/comparto
								
								
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		
		<div id="estinzionePAC" style="display: none;">
			<input type="hidden" name="openEstinzione" value="false" id="openEstinzione">
			<div class="divForm section clearfix">
				
				<h3 class="titleSection">









		

			Estinzione PAC
		
		
		
		

</h3> 
				<div class="bs-example">
					
					<input type="hidden" name="messageEstinzione" value="Vuoi anche estinguere il PAC n.{0}?" id="messageEstinzione">
					<p id="paramEstinzione" style="float:left"></p>
					<div>
						<label style="float:left; margin-top: 8px; margin-left: 20px; margin-right: 5px;"> SI</label>
						<input type="radio" name="estinzionePAC" value="Y" id="estinzionePACbutton" style="float:left; margin-top:10px;" class="control-label">
					</div>
					<div>
						<label style="float:left; margin-top: 8px; margin-left: 20px; margin-right: 5px;"> NO</label>
						<input type="radio" name="estinzionePAC" value="N" id="estinzionePACbutton" style="float:left; margin-top:10px;" class="control-label">
					</div>	
				</div>
			</div>
		</div>
	</div>
	<div class="actions pull-right">
		<input type="button" name="" value="Indietro" onclick="document.location.href = getPathContext() + '/investimenti/portafoglioFondi.do';" class="btn btn-primary">
		<input type="submit" name="conferma" value="Avanti" class="button btn btn-primary">
	</div>
</form>

<script>
/* selezione del radio button */
$(document).ready(function() {
	$('#distribuzioneProventi').hide();
	$('#estinzionePAC').hide();
	$('#euroSwitch').hide();
	
	var selezioneSwIn = $('#'+$('#selezioneSwIn').val());
	selezioneSwIn.attr('selected', true);
	if($('#'+selezioneSwIn.val()).data('distribution') == true)	{
		$('#distribuzioneProventi').show();
		if($('#'+selezioneSwIn.val()).data('cpn') == "PAG")	{
			$('#accredito').prop("checked", true);
   			$('#reinvestimento').attr('disabled', true);
		}
	}

	$('#'+$('#selezione').val()).attr('checked', true);
	if($('#opzioneSwitchEuro').val() == "T")	{
		$('#euroSwitch').show();
	}
	if($('#openEstinzione').val() == 'true')	{
		$('#estinzionePAC').show();
		$('#paramEstinzione').text($('#messageEstinzione').val().replace("{0}",$('#numContratto' + $('#selezione').val()).val()));
	}
}); 

/* sezione estinzione e switch per importo*/
$(document).ready(function() {
	$("input:radio").click(function() {
		var name = $(this).attr("name");
		if( name == "contrattoSelezionato")	{
			var numeroQuoteSwitchInt = $('#numeroQuoteSwitchInt').val("");
			var numeroQuoteSwitchDec = $('#numeroQuoteSwitchDec').val("");
			var euroSwitchInt = $('#euroSwitchInt').val("");
			var euroSwitchDec = $('#euroSwitchDec').val("");

			$('#estinzionePAC').hide();
			$('#estinzionePACbutton:checked').prop('checked', false)
			$('#euroSwitch').hide();
			
			var i = $(this).attr("value");
			var numQuote = $(this).data('numQuote');
			var importoEuro = $(this).data('quantitaEuro');
			var switchEuro = $(this).data('switchEuro');
			var tipo = $(this).data('tipo');
			$('#opzioneSwitchEuro').val(switchEuro);
			$('#openEstinzione').val(false);
			
			
			if(tipo == "U")	{
				/* caso PIC */
				if(switchEuro == "T")	{
					$('#euroSwitch').show();
				}
			}	else	{
				/* caso PAC */
				if(switchEuro == "T")	{
					$('#euroSwitch').show();
					
					$("input:text").live('change', function() {
				 		var id = $(this).attr("id");
				 		
				        if(id == "euroSwitchInt") {
					        $('#numeroQuoteSwitchInt').val("");
				        	$('#numeroQuoteSwitchDec').val("");
			        	
				        	euroSwitchInt = $(this).val();
				        	euroSwitchDec = $('#euroSwitchDec').val();
				        	if(parseFloat(euroSwitchInt)+parseFloat("0." + euroSwitchDec) == parseFloat(importoEuro))	{
					        	$('#estinzionePAC').show();
					        	$('#openEstinzione').val(true);
					        	$('#paramEstinzione').text($('#messageEstinzione').val().replace("{0}",$('#numContratto' + i).val()));
					        } 
				        }
				       
				    });
					
					$("input:text").live('change', function() {
				 		var id = $(this).attr("id");
				 		
				 		if(id == "euroSwitchDec") {
					 		$('#numeroQuoteSwitchInt').val("");
				        	$('#numeroQuoteSwitchDec').val("");
			        	
				 			euroSwitchDec = $(this).val();
				 			euroSwitchInt = $('#euroSwitchInt').val();
				        	if(parseFloat(euroSwitchInt)+parseFloat("0." + euroSwitchDec) == parseFloat(importoEuro))	{
					        	$('#estinzionePAC').show();
					        	$('#openEstinzione').val(true);
					        	$('#paramEstinzione').text($('#messageEstinzione').val().replace("{0}",$('#numContratto' + i).val()));
					        }  
				        }  
				    });
				}
				
				$("input:text").live('change', function() {
			 		var id = $(this).attr("id");
			 		
			        if(id == "numeroQuoteSwitchInt") {
			        	$('#euroSwitchInt').val("");
						$('#euroSwitchDec').val("");
			        	
			        	numeroQuoteSwitchInt = $(this).val();
			        	numeroQuoteSwitchDec = $('#numeroQuoteSwitchDec').val();
			        	if(parseFloat(numeroQuoteSwitchInt)+parseFloat("0." + numeroQuoteSwitchDec) == parseFloat(numQuote))	{
				        	$('#estinzionePAC').show();
				        	$('#openEstinzione').val(true);
				        	$('#paramEstinzione').text($('#messageEstinzione').val().replace("{0}",$('#numContratto' + i).val()));
				        } 
			        }
			       
			    });
				
				$("input:text").live('change', function() {
			 		var id = $(this).attr("id");
			 		
			 		if(id == "numeroQuoteSwitchDec") {
			 			$('#euroSwitchInt').val("");
						$('#euroSwitchDec').val("");
			        	
			        	numeroQuoteSwitchDec = $(this).val();
			        	numeroQuoteSwitchInt = $('#numeroQuoteSwitchInt').val();
			        	if(parseFloat(numeroQuoteSwitchInt)+parseFloat("0." + numeroQuoteSwitchDec) == parseFloat(numQuote))	{
				        	$('#estinzionePAC').show();
				        	$('#openEstinzione').val(true);
				        	$('#paramEstinzione').text($('#messageEstinzione').val().replace("{0}",$('#numContratto' + i).val()));
				        }  
			        }
			        
			    });
			}
		}
	});
});
</script>

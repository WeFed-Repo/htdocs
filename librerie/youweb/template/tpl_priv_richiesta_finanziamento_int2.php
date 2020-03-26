
						


						
						<div class="visible-print-block"> 
							<img src="/HT/fe/img/logo_youweb.png" title="Torna all'homepage" alt="Torna all'homepage">
							<div class="pull-right">
								  
								12/06/2017	
							</div>
						</div>
						

						

						
						






<script type="text/javascript">
	var defaultImporto = '0,00';
	function defaultImportoAffitto(){$('#impAff').val(defaultImporto);$('#impAff').css("color", "gray");$('#impAff').css("font-style", "italic");}
	function defaultStipendio(){$('#stip').val(defaultImporto);$('#stip').css("color", "gray");$('#stip').css("font-style", "italic");}
	function defaultRedditiDiversi(){$('#redDiv').val(defaultImporto);$('#redDiv').css("color", "gray");$('#redDiv').css("font-style", "italic");}
	function defaultAltreSpese(){$('#altrSpes').val(defaultImporto);$('#altrSpes').css("color", "gray");$('#altrSpes').css("font-style", "italic");}
	$(document).ready(function()
	{	
		/*IMPOSTO I VALORI DI DEFAULT CHE SPARISCONO AL CLICK SUL CAMPO*/
		if ($('#impAff').val()=='' || $('#impAff').val()==defaultImporto){defaultImportoAffitto();}
		$("#impAff").focus(function(){if ($(this).val() == defaultImporto){$(this).css('color', '#003F6E');$(this).css('font-style', 'normal');$(this).val('');}});
		$("#impAff").blur(function(){if ($(this).val() == ""){$(this).css("color", "gray");$(this).css("font-style", "italic");$(this).val(defaultImporto);}});
		if ($('#stip').val()=='' || $('#stip').val()==defaultImporto){defaultStipendio();}
		$("#stip").focus(function(){if ($(this).val() == defaultImporto){$(this).css('color', '#003F6E');$(this).css('font-style', 'normal');$(this).val('');}});
		$("#stip").blur(function(){if ($(this).val() == ""){$(this).css("color", "gray");$(this).css("font-style", "italic");$(this).val(defaultImporto);}});
		if ($('#redDiv').val()=='' || $('#redDiv').val()==defaultImporto){defaultRedditiDiversi();}
		$("#redDiv").focus(function(){if ($(this).val() == defaultImporto){$(this).css('color', '#003F6E');$(this).css('font-style', 'normal');$(this).val('');}});
		$("#redDiv").blur(function(){if ($(this).val() == ""){$(this).css("color", "gray");$(this).css("font-style", "italic");$(this).val(defaultImporto);}});
		if ($('#altrSpes').val()=='' || $('#altrSpes').val()==defaultImporto){defaultAltreSpese();}
		$("#altrSpes").focus(function(){if ($(this).val() == defaultImporto){$(this).css('color', '#003F6E');$(this).css('font-style', 'normal');$(this).val('');}});
		$("#altrSpes").blur(function(){if ($(this).val() == ""){$(this).css("color", "gray");$(this).css("font-style", "italic");$(this).val(defaultImporto);}});
		selSituazioneAbitativa();
		selProfessione(true, false);
	});
	function svuotaValoriDefault() 
	{ 
		if ($('#impAff').val()==defaultImporto){$('#impAff').val('');}
		if ($('#stip').val()==defaultImporto){$('#stip').val('');}
		if ($('#redDiv').val()==defaultImporto){$('#redDiv').val('');}
		if ($('#altrSpes').val()==defaultImporto){$('#altrSpes').val('');}
	}
	function selSituazioneAbitativa()
	{
		var valore = $('#sitAbit').val();
		/*IN CASO DI SELEZIONE AFFITTO ATTIVO IL CAMPO IMPORTO AFFITTO, ALTRIMENTI LO DISATTIVO*/
		if (valore=='02')
			$('#impAff').prop("disabled", false);
		else
		{
			$('#impAff').prop("disabled", true);
			defaultImportoAffitto();
		}
	}
	function selProfessione(onloadPagina, cambioProfessione)
	{
		var valore = $('#prof').val();
		/*IN CASO DI SELEZIONE VUOTA, DISOCCUPATO, PENSIONATO O CASALINGA DISATTIVO TIPO CONTRATTO LAVORO E SETTORE ATTIVITA, PRESELEZIONANDO IL VALORE DI DEFAULT*/
		if (valore=='' || valore=='110' || valore=='003' || valore=='002')
		{
			$('#tipoContrLav').prop("disabled", true);
			$('#settAttivita').prop("disabled", true);
			if (cambioProfessione)
			{
				$('#tipoContrLav').val("6");
				$('#settAttivita').val("09");
			}
			/*IN CASO DI SELEZIONE VUOTA, DISOCCUPATO O CASALINGA DISATTIVO ANCHE ANNO INIZIO ATTIVITA LAVORATIVA, CESSIONE DEL QUINTO, ACCREDITO STIPENDIO E STIPENDIO PRESELEZIONANDO IL VALORE DI DEFAULT*/
			if (valore=='' || valore=='110' || valore=='002')
			{
				$('#annoIniLav').prop("disabled", true);
				$('#cessQui').prop("disabled", true);
				$('#accrStip').prop("disabled", true);
				$('#stip').prop("disabled", true);
				if (cambioProfessione)
				{
					$("#annoIniLav option:last").attr("selected", "selected");
					$('#cessQui').val("N");
					$('#accrStip').val("N");
				}
			}
			/*IN CASO DI PENSIONATO DEVO RIATTIVARE I CAMPI EVENTUALMENTE DISATTIVATI DISATTIVANDO IL VALORE DI DEFAULT*/
			else
			{
				$('#annoIniLav').prop("disabled", false);
				$('#cessQui').prop("disabled", false);
				$('#accrStip').prop("disabled", false);
				$('#stip').prop("disabled", false);
				if (cambioProfessione)
					$('#annoIniLav').prop("selectedIndex", 0);
			}
		}	
		else
		{
			$('#annoIniLav').prop("disabled", false);
			$('#tipoContrLav').prop("disabled", false);
			$('#settAttivita').prop("disabled", false);
			$('#cessQui').prop("disabled", false);
			$('#accrStip').prop("disabled", false);
			$('#stip').prop("disabled", false);
			if (cambioProfessione)
			{
				$('#annoIniLav').prop("selectedIndex", 0);
				$('#tipoContrLav').prop("selectedIndex", 0);
				$('#settAttivita').prop("selectedIndex", 0);
			}
		}
		if (cambioProfessione) 
			defaultStipendio();
	}
</script>

<form id="formRichiestaFinanziamento" method="post" action="/WEBHT/finanziamento/richiestaFinanziamentoDocumenti.do" class="form-horizontal">
	<div class="riquadro clearfix">
		
		









<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag richiestaFinanziamento">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
				
 					<span>Richiesta finanziamento</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				







		<div class="contentPagina">
			<p style="text-align: center;"><img src="/HT/IMAGES/CONTENUTI/ricFin_approfondimenti.png" alt=""></p>
		</div>



			</div>
		
	
</div>
		








	


		<div class="section clearfix">
			<h3 class="titleSection">Situazione abitativa</h3>
			<div class="bs-example"> 
				<div class="form-group">
					<div class="form-field-input col-sm-4 col-xs-12">
						<label for="propImm">Sei proprietario di immobili?</label>
						<div class="form-field">
							<select name="proprietarioImmobili" id="propImm" class="form-control"><option value="">Seleziona...</option>
								<option value="S">Si</option>
								<option value="N">No</option></select>
						</div>
					</div>
					<div class="form-field-input col-sm-4 col-xs-12">
						<label for="sitAbit">Situazione abitativa</label>
						<div class="form-field">
							<select name="situazioneAbitativa" onchange="selSituazioneAbitativa();" id="sitAbit" class="form-control"><option value="">Seleziona...</option>
								
									<option value="01">PROPRIETA'</option>
								
									<option value="02">AFFITTO</option>
								
									<option value="03">GRATUITO C/O FAMILIARI</option>
								
									<option value="04">GRATUITO C/O ALTRI</option>
								
									<option value="05">USOFRUTTO</option>
								
									<option value="09">DATO NON CONOSCIUTO</option></select>
						</div>
					</div>
					<div class="form-field-input col-sm-4 col-xs-12">
			  			<label for="impAff">Importo affitto al mese (euro)</label>
						<div class="form-field">
							<input type="text" name="importoAffitto" value="" id="impAff" style="width: 200px; color: rgb(128, 128, 128); font-style: italic;" class="form-control oRight" disabled="">
						</div>
					</div>
					<div class="form-field-input col-sm-4 col-xs-12">
						<label for="anzAbi">Anzianit&agrave; abitativa (anni)</label>
						<div class="form-field">
							<select name="anzianitaAbitativa" id="anzAbi" class="form-control"><option value="">Seleziona...</option>
								
									<option value="0">0</option>
								
									<option value="1">1</option>
								
									<option value="2">2</option>
								
									<option value="3">3</option>
								
									<option value="4">4</option>
								
									<option value="5">5</option>
								
									<option value="6">6</option>
								
									<option value="7">7</option>
								
									<option value="8">8</option>
								
									<option value="9">9</option>
								
									<option value="10">10</option>
								
									<option value="11">11</option>
								
									<option value="12">12</option>
								
									<option value="13">13</option>
								
									<option value="14">14</option>
								
									<option value="15">15</option>
								
									<option value="16">16</option>
								
									<option value="17">17</option>
								
									<option value="18">18</option>
								
									<option value="19">19</option>
								
									<option value="20">20</option>
								
									<option value="21">21</option>
								
									<option value="22">22</option>
								
									<option value="23">23</option>
								
									<option value="24">24</option>
								
									<option value="25">25</option>
								
									<option value="26">26</option>
								
									<option value="27">27</option>
								
									<option value="28">28</option>
								
									<option value="29">29</option>
								
									<option value="30">30</option>
								
									<option value="31">31</option>
								
									<option value="32">32</option>
								
									<option value="33">33</option>
								
									<option value="34">34</option>
								
									<option value="35">35</option>
								
									<option value="36">36</option>
								
									<option value="37">37</option>
								
									<option value="38">38</option>
								
									<option value="39">39</option>
								
									<option value="40">40</option>
								
									<option value="41">41</option>
								
									<option value="42">42</option>
								
									<option value="43">43</option>
								
									<option value="44">44</option>
								
									<option value="45">45</option>
								
									<option value="46">46</option>
								
									<option value="47">47</option>
								
									<option value="48">48</option>
								
									<option value="49">49</option>
								
									<option value="50">50</option>
								
									<option value="51">51</option>
								
									<option value="52">52</option>
								
									<option value="53">53</option>
								
									<option value="54">54</option>
								
									<option value="55">55</option>
								
									<option value="56">56</option>
								
									<option value="57">57</option>
								
									<option value="58">58</option>
								
									<option value="59">59</option>
								
									<option value="60">60</option>
								
									<option value="61">61</option>
								
									<option value="62">62</option>
								
									<option value="63">63</option>
								
									<option value="64">64</option>
								
									<option value="65">65</option>
								
									<option value="66">66</option>
								
									<option value="67">67</option>
								
									<option value="68">68</option>
								
									<option value="69">69</option>
								
									<option value="70">70</option>
								
									<option value="71">71</option>
								
									<option value="72">72</option>
								
									<option value="73">73</option>
								
									<option value="74">74</option>
								
									<option value="75">75</option>
								
									<option value="76">76</option>
								
									<option value="77">77</option>
								
									<option value="78">78</option>
								
									<option value="79">79</option>
								
									<option value="80">80</option>
								
									<option value="81">81</option>
								
									<option value="82">82</option>
								
									<option value="83">83</option>
								
									<option value="84">84</option>
								
									<option value="85">85</option>
								
									<option value="86">86</option>
								
									<option value="87">87</option>
								
									<option value="88">88</option>
								
									<option value="89">89</option>
								
									<option value="90">90</option>
								
									<option value="91">91</option>
								
									<option value="92">92</option>
								
									<option value="93">93</option>
								
									<option value="94">94</option>
								
									<option value="95">95</option>
								
									<option value="96">96</option>
								
									<option value="97">97</option>
								
									<option value="98">98</option>
								
									<option value="99">99</option>
								
									<option value="100">100</option></select>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section clearfix">
			<h3 class="titleSection">Situazione lavorativa e patrimoniale</h3>
			<div class="bs-example"> 
				<div class="form-group">
					<div class="form-field-input col-sm-4 col-xs-12">
						<label for="prof">Professione</label>
						<div class="form-field">
							<select name="professione" onchange="selProfessione(false, true);" id="prof" class="form-control"><option value="">Seleziona...</option>
								
									<option value="082">AGENTE ASSICURAZIONE</option>
								
									<option value="083">AGENTE/RAPPR.COMMERCIO</option>
								
									<option value="145">ALTRO LAVORATORE IN PROPRIO</option>
								
									<option value="140">ARTIGIANO</option>
								
									<option value="138">ARTISTA E PROFESS. SPORTIVO</option>
								
									<option value="135">AUTOTRASPORTATORE</option>
								
									<option value="065">AVVOCATO/NOTAIO/INGEGNERE/ARCHIT/MEDICO</option>
								
									<option value="002">CASALINGA</option>
								
									<option value="092">COLDIRETTI E SIMILI</option>
								
									<option value="143">COLLABORATORE DOMESTICO</option>
								
									<option value="055">COMMERCIALISTA</option>
								
									<option value="141">COMMERCIANTE/PUBBLICO ESERCENTE</option>
								
									<option value="085">CONSULENTE AZIENDALE</option>
								
									<option value="005">DIRIGENTE/FUNZIONARIO</option>
								
									<option value="110">DISOCCUPATO/STUDENTE/MILITARE LEVA</option>
								
									<option value="022">DOCENTE UNIVERSITARIO/MAGISTRATO</option>
								
									<option value="070">GEOMETRA/RAGIONIERE/PERITO/CONS.FINANZ</option>
								
									<option value="126">IMPIEGATO</option>
								
									<option value="023">INSEGNANTE DI RUOLO</option>
								
									<option value="144">LAVORATORE A DOMICILIO</option>
								
									<option value="125">MEDICO OSPEDALIERO</option>
								
									<option value="132">NON GRADUATO</option>
								
									<option value="127">OPERAIO SPEC/PARAMEDICO/CUOCO/COMMESSO</option>
								
									<option value="128">OPERAIO/GUARDIA/BIDELLO/PORTIERE/CAMION</option>
								
									<option value="003">PENSIONATO</option>
								
									<option value="001">REDDITIERE</option>
								
									<option value="129">REQ.RED. NON RISPETTATI</option>
								
									<option value="142">SOCIO DI SOCIETA'</option>
								
									<option value="131">SOTTUFFICIALE</option>
								
									<option value="130">UFFICIALE</option>
								
									<option value="133">VIGILE DEL FUOCO/VIGILE URBANO</option></select>
						</div>
					</div>
					<div class="form-field-input col-sm-4 col-xs-12">
						<label for="annoIniLav">Anno inizio attivit&agrave; lavorativa/pensione</label>
						<div class="form-field">
							<select name="annoInizioAttivitaLavorativa" id="annoIniLav" class="form-control" disabled=""><option value="">Seleziona...</option>
								
								
									<option value="1950">1950</option>
								
									<option value="1951">1951</option>
								
									<option value="1952">1952</option>
								
									<option value="1953">1953</option>
								
									<option value="1954">1954</option>
								
									<option value="1955">1955</option>
								
									<option value="1956">1956</option>
								
									<option value="1957">1957</option>
								
									<option value="1958">1958</option>
								
									<option value="1959">1959</option>
								
									<option value="1960">1960</option>
								
									<option value="1961">1961</option>
								
									<option value="1962">1962</option>
								
									<option value="1963">1963</option>
								
									<option value="1964">1964</option>
								
									<option value="1965">1965</option>
								
									<option value="1966">1966</option>
								
									<option value="1967">1967</option>
								
									<option value="1968">1968</option>
								
									<option value="1969">1969</option>
								
									<option value="1970">1970</option>
								
									<option value="1971">1971</option>
								
									<option value="1972">1972</option>
								
									<option value="1973">1973</option>
								
									<option value="1974">1974</option>
								
									<option value="1975">1975</option>
								
									<option value="1976">1976</option>
								
									<option value="1977">1977</option>
								
									<option value="1978">1978</option>
								
									<option value="1979">1979</option>
								
									<option value="1980">1980</option>
								
									<option value="1981">1981</option>
								
									<option value="1982">1982</option>
								
									<option value="1983">1983</option>
								
									<option value="1984">1984</option>
								
									<option value="1985">1985</option>
								
									<option value="1986">1986</option>
								
									<option value="1987">1987</option>
								
									<option value="1988">1988</option>
								
									<option value="1989">1989</option>
								
									<option value="1990">1990</option>
								
									<option value="1991">1991</option>
								
									<option value="1992">1992</option>
								
									<option value="1993">1993</option>
								
									<option value="1994">1994</option>
								
									<option value="1995">1995</option>
								
									<option value="1996">1996</option>
								
									<option value="1997">1997</option>
								
									<option value="1998">1998</option>
								
									<option value="1999">1999</option>
								
									<option value="2000">2000</option>
								
									<option value="2001">2001</option>
								
									<option value="2002">2002</option>
								
									<option value="2003">2003</option>
								
									<option value="2004">2004</option>
								
									<option value="2005">2005</option>
								
									<option value="2006">2006</option>
								
									<option value="2007">2007</option>
								
									<option value="2008">2008</option>
								
									<option value="2009">2009</option>
								
									<option value="2010">2010</option>
								
									<option value="2011">2011</option>
								
									<option value="2012">2012</option>
								
									<option value="2013">2013</option>
								
									<option value="2014">2014</option>
								
									<option value="2015">2015</option>
								
									<option value="2016">2016</option>
								
									<option value="2017">2017</option></select>
						</div>
					</div>
					<div class="form-field-input col-sm-4 col-xs-12">
						<label for="tipoContrLav">Tipo contratto lavoro</label>
						<div class="form-field">
							<select name="tipoContrattoLavoro" id="tipoContrLav" class="form-control" disabled=""><option value="">Seleziona...</option>
								
									<option value="1">LAVORO AUTONOMO</option>
								
									<option value="2">LAVORO DIPENDENTE A TEMPO INDETEMINATO</option>
								
									<option value="3">LAVORO DETERMINATO 30/36 MESI</option>
								
									<option value="4">LAVORO DETERMINATO &lt; 30/36 MESI</option>
								
									<option value="5">CONTRATTI DI LAVORO PARTICOLARI</option>
								
									<option value="6">SENZA OCCUPAZIONE</option></select>
						</div>
					</div>
					<div class="form-field-input col-sm-4 col-xs-12">
						<label for="cessQui">Hai la cessione del quinto?</label>
						<div class="form-field">
							<select name="cessioneQuinto" id="cessQui" class="form-control" disabled=""><option value="S">Si</option>
								<option value="N" selected="selected">No</option></select>
						</div>
					</div>
					<div class="form-field-input col-sm-4 col-xs-12">
						<label for="accrStip">Hai accreditato lo stipendio/pensione sul conto?</label>
						<div class="form-field">
							<select name="accreditoStipendio" id="accrStip" class="form-control" disabled=""><option value="S">Si</option>
								<option value="N" selected="selected">No</option></select>
						</div>
					</div>
					<div class="form-field-input col-sm-4 col-xs-12">
						<label for="settAttivita">Settore attivit&agrave;</label>
						<div class="form-field">
							<select name="settoreAttivitaLavorativa" id="settAttivita" class="form-control" disabled=""><option value="">Seleziona...</option>
								
									<option value="01">COMMERCIO</option>
								
									<option value="02">INDUSTRIA PRIVATA</option>
								
									<option value="03">SERVIZI PRIVATI</option>
								
									<option value="04">AGRICOLTURA</option>
								
									<option value="05">AZIENDE PUBBLICHE</option>
								
									<option value="06">ENTI LOCALI</option>
								
									<option value="09">DATO NON CONOSCIUTO</option></select>
						</div>
					</div>
					<div class="form-field-input col-sm-4 col-xs-12">
			  			<label for="stip">Stipendio/pensione (euro)</label>
						<div class="form-field">
							<input type="text" name="stipendio" value="" id="stip" style="width: 200px; color: rgb(128, 128, 128); font-style: italic;" class="form-control oRight" disabled="">
						</div>
					</div>
					<div class="form-field-input col-sm-4 col-xs-12">
			  			<label for="redDiv">Redditi diversi (euro)</label>
						<div class="form-field">
							<input type="text" name="redditiDiversi" value="" id="redDiv" style="width: 200px; color: rgb(128, 128, 128); font-style: italic;" class="form-control oRight">
						</div>
					</div>
					<div class="form-field-input col-sm-4 col-xs-12">
			  			<label for="altrSpes">Altre spese mensili</label>
						<div class="form-field">
							<input type="text" name="altreSpese" value="" id="altrSpes" style="width: 200px; color: rgb(128, 128, 128); font-style: italic;" class="form-control oRight">
						</div>
					</div>
					<div class="form-field-input col-sm-4 col-xs-12">
						<label for="carCred">Carte di credito</label>
						<div class="form-field">
							<select name="carteCredito" id="carCred" class="form-control"><option value="">Seleziona...</option>
								
									<option value="01">AMERICAN EXPRESS/DINERS</option>
								
									<option value="02">ALTRE CARTE</option>
								
									<option value="03">A.E./DINERS/ + ALTRE</option>
								
									<option value="09">DATO NON CON.</option>
								
									<option value="99">NESSUNA</option></select>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section clearfix">
			<h3 class="titleSection">Situazione famigliare</h3>
			<div class="bs-example"> 
				<div class="form-group">
					<div class="form-field-input col-sm-4 col-xs-12">
						<label for="statoCiv">Stato civile</label>
						<div class="form-field">
							<select name="statoCivile" id="statoCiv" class="form-control"><option value="">Seleziona...</option>
								
									<option value="C" selected="selected">CONIUGATO/A</option>
								
									<option value="D">DIVORZIATO/A</option>
								
									<option value="N">CELIBE/NUBILE</option>
								
									<option value="S">SEPARATO/A</option>
								
									<option value="V">VEDOVO/A</option></select>
						</div>
					</div>
					<div class="form-field-input col-sm-4 col-xs-12">
						<label for="regPatr">Regime patrimoniale</label>
						<div class="form-field">
							<select name="regimePatrimoniale" id="regPatr" class="form-control"><option value="">Seleziona...</option>
								
									<option value="C">COMUNIONE</option>
								
									<option value="S" selected="selected">SEPARAZIONE</option></select>
						</div>
					</div>
					<div class="form-field-input col-sm-4 col-xs-12">
						<label for="numCompNuclFam">Numero componenti nucleo famigliare</label>
						<div class="form-field">
							<select name="numeroComponentiNucleoFamiliare" id="numCompNuclFam" class="form-control"><option value="">Seleziona...</option>
								
									<option value="1">1</option>
								
									<option value="2">2</option>
								
									<option value="3">3</option>
								
									<option value="4">4</option>
								
									<option value="5">5</option>
								
									<option value="6">6</option>
								
									<option value="7">7</option>
								
									<option value="8">8</option>
								
									<option value="9">9</option>
								
									<option value="10">10</option>
								
									<option value="11">11</option>
								
									<option value="12">12</option>
								
									<option value="13">13</option>
								
									<option value="14">14</option>
								
									<option value="15">15</option></select>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="pull-right">
		
		<input type="button" name="" value="Indietro" onclick="$('#formIndietro').submit();" class="btn btn-primary" alt="Indietro">
		
		<input type="submit" name="documenti" value="Avanti" onclick="svuotaValoriDefault();" id="btnAvanti" class="btn btn-primary" alt="Avanti">
	</div>
</form>

<form id="formIndietro" method="post" action="/WEBHT/finanziamento/richiestaFinanziamentoDocumenti.do">
	<input type="hidden" name="indietro" value="indietro">
</form>

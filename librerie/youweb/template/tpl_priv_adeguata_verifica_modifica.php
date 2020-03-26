
						
						



 
<div class="breadcrumb" >
	
	
		<span>Conti e Depositi</span>
	
		<span>Adeguata Verifica</span>
	
</div>

						 
						<div class="visible-print-block"> 
							<img src="/HT/fe/img/logo_youweb.png" title="Torna all'homepage" alt="Torna all'homepage" />
							<div class="pull-right">
								  
								23/06/2017	
							</div>
						</div>
						

						

						
						







<script type="text/javascript"
	src="/HT/JS/combobox.js"></script>

<style>

.ui-widget.ui-widget-content.ui-combobox-input.form-control.ui-autocomplete-input {
	width: 90% !important;
}

.ui-combobox button{
	background: none !important
}


</style>




<div class="riquadro clearfix">
	




	
	<div class="pager clearfix pull-right">
		<div class="circle_line" >&nbsp;</div>
		
			
			
			
				
			
				<div  class="circle current_page" >&nbsp;</div>
			
		
			
			
			
				<div  class="circle " >&nbsp;</div>
			
		
			
			
			
				<div  class="circle " >&nbsp;</div>
			
		
	</div>






<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag adeguataVerifica">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
				
 					<span>Questionario di adeguata verifica</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
		
			
		
		
		





<a href="javascript:OpenHelp('/WEBHT/help/page.do?id=687')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line" /></a>






<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header clearfix">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
			
		</div>
    </div>
  </div>
</div>



		
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>
	








	


	
	<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaRiepilogo.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="e12ba37169aefbd38dda2923e1ffa075" /></div>
		<div class="section clearfix">
			<div class="form-group clearfix">
				<div class="col-xs-12 margin-bottom10">
					<div class="contentPagina">Gentile <i>Mauro Luca Tallo</i>, <br>
						rispondi subito alle domande conoscitive sotto riportate. Si tratta di domande che ci consentiranno di conoscerti meglio previste dalla normativa della Banca d'Italia.
					</div>
				</div>
			</div>
			<h3 class="titleSection">
				Informazioni personali
			</h3>
			<span class="rounded_corner">&nbsp;</span>
			<div class="form-group clearfix">
				<div class="col-xs-12">
					<label class="control-label">
						<strong>Titolare effettivo:</strong>
					</label>
				</div>
				<div class="col-xs-12">
					<div class="form-group col-sm-6 col-xs-12">
						<label class="control-label">
							Il rapporto &egrave; aperto per conto dell'intestatario/i?
						</label>
					</div>
					<div class="col-sm-6 col-xs-12">
						<div class="col-xs-1 clear-padding text-center">
							<input type="radio" name="titolareEffettivoRapporto" value="true" checked="checked" id="titolareEffettivoRapportoSi" class="sfondoForm" />
						</div>
						<div class="col-xs-2 clear-padding">
							<label for="titolareEffettivoRapportoSi">S&igrave;</label>
						</div>
						<div class="col-xs-1 clear-padding text-center">
							<input type="radio" name="titolareEffettivoRapporto" value="false" id="titolareEffettivoRapportoNo" class="sfondoForm" />
						</div>
						<div class="col-xs-8 clear-padding">
							<label for="titolareEffettivoRapportoNo">No, il rapporto verr&agrave; utilizzato principalmente da un'altra persona non intestataria</label>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group  col-xs-12">
				<label class="control-label">
					<strong>Alcune domande per conoscerti meglio:</strong>
				</label>
			</div>
				<div class="form-group col-xs-12">
					<div class="col-sm-5 col-xs-12">
						<label class="control-label" for="professione">
							Professione (attivit&agrave; principale)
						</label>
					</div>
					<div class="col-sm-7 col-xs-12">
						<select name="professione" onchange="checkProfessione()" id="professione" class="form-control"><option value="-">-</option>
							
								<option value="01" id="">Imprenditore</option>
							
								<option value="02" id="">Lavoratore autonomo</option>
							
								<option value="04" selected="selected" id="">Lavoratore dipendente</option>
							
								<option value="03" id="">Libero professionista</option>
							
								<option value="06" id="">Non occupato</option>
							
								<option value="05" id="">Pensionato</option>
							
								<option value="07" id="">Soggetto apicale</option></select>
					</div>
				</div>
				<div class="form-group col-xs-12">
					<div class="col-sm-5 col-xs-12">
						<label class="control-label" for="provenienzaFondi">	
							Provenienza dei fondi
						</label>
					</div>
					<div class="col-sm-7 col-xs-12">
						<select name="codProvenienzaFondi" id="provenienzaFondi" class="form-control"><option value="0">-</option>
							
								<option value="01" selected="selected">Vincita</option>
							
								<option value="02">Lascito</option>
							
								<option value="03">Vendita beni immobili</option>
							
								<option value="04">Vendita beni mobili</option>
							
								<option value="05">Da altro conto</option>
							
								<option value="06">Reddito da lavoro dipendente</option>
							
								<option value="07">Reddito da lavoro autonomo</option>
							
								<option value="08">Risparmio</option>
							
								<option value="11">Operazioni in titoli</option></select>
					</div>
				</div>
				<div class="form-group col-xs-12">
					<div class="col-sm-5 col-xs-12">
						<label class="control-label" for="attEconomica">
							Attivit&agrave; economica
						</label>
					</div>
					<div class="col-sm-7 col-xs-12">
						<div class="col-xs-12 clear-padding">
							<select name="codAttivitaEconomica" id="attEconomica0" class="form-control"><option value="">-</option>
								
									<option value="771">agenzie viaggio e intermediari dei trasporti</option>
								
									<option value="660">alberghi e pubblici esercizi</option>
								
									<option value="014">allevamento, caccia, silvicoltura e pesca</option>
								
									<option value="993">altri agenti, mediatori e consulenti non ancora classificati (es. agenti sportivi)</option>
								
									<option value="984">altri servizi personali non altrove classificati (servizi delle pompe funebri, di cremazione, di agenzie matrim., ecc.)</option>
								
									<option value="732">autotrasportatori di contante, titoli e valori c/ terzi</option>
								
									<option value="829" selected="selected">bancari</option>
								
									<option value="463">carpenteria e costruzioni in legno, lavori in legno per edilizia</option>
								
									<option value="010">coltivazione prodotti agricoli e olio</option>
								
									<option value="619">commercio altri prodotti non alimentari</option>
								
									<option value="649">commercio antiquariato e oggetti d&#039;arte</option>
								
									<option value="654">commercio armi e munizioni</option>
								
									<option value="600">commercio combustibili, minerali, prodotti chimici e carburanti</option>
								
									<option value="613">commercio legname e materiale da costruzione</option>
								
									<option value="653">commercio libri, giornali, cancelleria</option>
								
									<option value="614">commercio macchine, attrezzature, veicoli</option>
								
									<option value="620">commercio materiale di recupero</option>
								
									<option value="611">commercio materie prime agricole, animali vivi</option>
								
									<option value="615">commercio mobili, elettrodomestici, tv, casalinghi e ferramenta</option>
								
									<option value="621">commercio orologi, gioielleria, argenteria</option>
								
									<option value="617">commercio prodotti alimentari, bevande, tabacco</option>
								
									<option value="618">commercio prodotti farmaceutici, cosmetici, profumi</option>
								
									<option value="616">commercio prodotti tessili, abbigliamento, calzature</option>
								
									<option value="500">edilizia, opere pubbliche e demolizione immobili</option>
								
									<option value="005">forze dell ordine/forze armate</option>
								
									<option value="493">prodotti cinematografia e fotografia</option>
								
									<option value="473">prodotti stampa ed editoria</option>
								
									<option value="430">prodotti tessili, pelle, pellicce, abbigliamento</option>
								
									<option value="460">produzione biancheria per la casa e arredamento</option>
								
									<option value="450">produzione calzature</option>
								
									<option value="410">produzione di prodotti alimentari e prodotti a base di tabacco</option>
								
									<option value="494">produzione giocattoli e articoli sportivi</option>
								
									<option value="491">produzione gioielli e oreficeria</option>
								
									<option value="490">produzione legno, sughero</option>
								
									<option value="320">produzione macchine agricole e industriali</option>
								
									<option value="330">produzione macchine per ufficio, elaboratori, strumenti di precisione, ottica, orologi</option>
								
									<option value="340">produzione materiale elettrico</option>
								
									<option value="230">produzione materiali da costruzione, vetro, ceramica, produzione, estrazione e ricerca di sali</option>
								
									<option value="210">produzione metalli</option>
								
									<option value="350">produzione mezzi di trasporto</option>
								
									<option value="467">produzione mobili in legno e giunco, materassi</option>
								
									<option value="495">produzione penne, timbri e prodotti di cancelleria</option>
								
									<option value="250">produzione prodotti chimici, farmaceutici, vernici, fibre artificiali e sintetiche</option>
								
									<option value="110">produzione prodotti energetici (carbone, petrolio, energia elettrica, gas, raccolta, depurazione e distribuzione acqua)</option>
								
									<option value="480">produzione prodotti in gomma, plastica e pneumatici</option>
								
									<option value="492">produzione strumenti musicali</option>
								
									<option value="440">produzione tappeti, tappezzerie</option>
								
									<option value="012">produzione vino</option>
								
									<option value="470">produzione, trasformazione carta e cartone</option>
								
									<option value="832">professioni amministrativo/contabili (commercialisti, ragionieri, periti commerciali, amm.condominio, revisori, ecc)</option>
								
									<option value="990">professioni giuridico/legali (avvocati, notai)</option>
								
									<option value="992">professioni in discipline religiose e teologiche</option>
								
									<option value="971">professioni sportive e artistiche</option>
								
									<option value="991">professioni tecnico/scientifiche (architetti, ingegneri, chimici, biologi, agronomi, periti, geometri, ecc.)</option>
								
									<option value="001">pubblica amministrazione e magistrati</option>
								
									<option value="671">riparazione auto, moto e biciclette</option>
								
									<option value="672">riparazione calzature, articoli cuoio, elettrodomestici</option>
								
									<option value="972">sale corse, case da gioco</option>
								
									<option value="760">servizi connessi ai trasporti (gestione porti, autostrade, stazioni di servizio, controllo e pesatura merci)</option>
								
									<option value="630">servizi degli intermediari del commercio (agenti, rappresentanti e agenzie di mediazione del commercio)</option>
								
									<option value="790">servizi delle comunicazioni e professioni linguistiche, letterarie (giornalisti, scrittori, ecc.)</option>
								
									<option value="834">servizi di affari immobiliari (agenti immobiliari)</option>
								
									<option value="831">servizi di consulenza tributaria, del lavoro, direzionale, organizzativa, tecnica, ecc.</option>
								
									<option value="773">servizi di custodia e deposito</option>
								
									<option value="731">servizi di custodia valori</option>
								
									<option value="981">servizi di lavanderia e tintoria</option>
								
									<option value="840">servizi di noleggio e locazione</option>
								
									<option value="833">servizi di pubblicita</option>
								
									<option value="940">servizi di ricerca e sviluppo</option>
								
									<option value="920">servizi disinfezione, pulizia e nettezza urbana</option>
								
									<option value="710">servizi ferroviari, tram, metro, autobus di linea</option>
								
									<option value="830">servizi finanziari e assicurativi (consul. finanz. e assic., prom. finanz. , agenti finanz., broker, mediat. cred. ecc.)</option>
								
									<option value="930">servizi insegnamento</option>
								
									<option value="960">servizi istituzioni sociali, delle associazioni professionali e delle organizzazioni economiche e sindacali</option>
								
									<option value="982">servizi parrucchieri barbieri e istituti di bellezza</option>
								
									<option value="724">servizi per oleodotto e gasdotto</option>
								
									<option value="970">servizi ricreativi e culturali(discoteche, circhi, luna park, ecc.)</option>
								
									<option value="950">servizi sanitari destinabili alla vendita</option>
								
									<option value="983">servizi studi fotografici</option>
								
									<option value="722">servizi trasporti di persone e merci</option>
								
									<option value="740">servizi trasporti marittimi, cabotaggio, aerei</option></select>
							  <input type="hidden" name="descAttivitaEconomica" value="bancari" id="descAttEconomica0" /> 

						</div>
						<div class="col-xs-12 clear-padding">
							(per i pensionati indicare l'atttivit&agrave; precedentemente svolta)
						</div>
					</div>
				</div>
				<div class="form-group col-xs-12">
					<div class="col-sm-5 col-xs-12">
						<label class="control-label" for="nazione">
							Nazione in cui viene svolta principalmente l'attivit&agrave; lavorativa
						</label>
					</div>
					<div class="col-sm-7 col-xs-12">
						<select name="nazioneAttivitaLavorativa" onchange="checkNazione(0)" id="nazione" class="form-control"><option value="238">Abu Dhabi</option>
							
								<option value="002">Afghanistan</option>
							
								<option value="239">Ajman (Emirati Arabi Uniti)</option>
							
								<option value="292">Aland Isole</option>
							
								<option value="087">Albania</option>
							
								<option value="003">Algeria</option>
							
								<option value="252">Americane Del Pacifico - Isole</option>
							
								<option value="004">Andorra</option>
							
								<option value="133">Angola</option>
							
								<option value="209">Anguilla</option>
							
								<option value="180">Antartide</option>
							
								<option value="197">Antigua E Barbuda</option>
							
								<option value="251">Antille Olandesi</option>
							
								<option value="005">Arabia Saudita</option>
							
								<option value="006">Argentina</option>
							
								<option value="266">Armenia</option>
							
								<option value="212">Aruba</option>
							
								<option value="227">Ascensione - Isole</option>
							
								<option value="007">Australia</option>
							
								<option value="008">Austria</option>
							
								<option value="268">Azerbaigian</option>
							
								<option value="234">Azzorre - Isole</option>
							
								<option value="160">Bahamas - Isole</option>
							
								<option value="169">Bahrein - Isole</option>
							
								<option value="130">Bangladesh</option>
							
								<option value="118">Barbados - Isole</option>
							
								<option value="009">Belgio</option>
							
								<option value="198">Belize</option>
							
								<option value="158">Benin</option>
							
								<option value="207">Bermuda - Isole</option>
							
								<option value="097">Bhutan</option>
							
								<option value="264">Bielorussia</option>
							
								<option value="010">Bolivia</option>
							
								<option value="274">Bosnia Erzegovina</option>
							
								<option value="098">Botswana</option>
							
								<option value="280">Bouvet Islands</option>
							
								<option value="011">Brasile</option>
							
								<option value="012">Bulgaria</option>
							
								<option value="142">Burkina Faso (Ex Alto Volta)</option>
							
								<option value="025">Burundi</option>
							
								<option value="135">Cambogia</option>
							
								<option value="119">Camerun</option>
							
								<option value="139">Campione D Italia</option>
							
								<option value="013">Canada</option>
							
								<option value="100">Canarie - Isole</option>
							
								<option value="188">Capo Verde - Isole</option>
							
								<option value="256">Caroline - Isole</option>
							
								<option value="211">Cayman - Isole</option>
							
								<option value="143">Centrafricana Repubblica</option>
							
								<option value="246">Ceuta (Dip. Spagn. D Africa)</option>
							
								<option value="230">Chafarinas - Isole</option>
							
								<option value="255">Chagos - Isole</option>
							
								<option value="282">Christmas Islands</option>
							
								<option value="144">Ciad</option>
							
								<option value="015">Cile</option>
							
								<option value="016">Cina Repubblica Popolare</option>
							
								<option value="101">Cipro Repubblica</option>
							
								<option value="093">Citta Del Vaticano</option>
							
								<option value="223">Clipperton</option>
							
								<option value="281">Cocos (Keeling) Islands</option>
							
								<option value="017">Colombia</option>
							
								<option value="176">Comore - Isole</option>
							
								<option value="145">Congo</option>
							
								<option value="018">Congo Rep. Dem.</option>
							
								<option value="237">Cook - Isole</option>
							
								<option value="074">Corea Del Nord</option>
							
								<option value="084">Corea Del Sud (Repubblica Di)</option>
							
								<option value="146">Costa D Avorio</option>
							
								<option value="019">Costa Rica</option>
							
								<option value="261">Croazia</option>
							
								<option value="020">Cuba</option>
							
								<option value="021">Danimarca</option>
							
								<option value="175">Dip.Brit. D Oceania (Pitcairn)</option>
							
								<option value="192">Dominica</option>
							
								<option value="063">Dominicana Repubblica</option>
							
								<option value="240">Dubay</option>
							
								<option value="024">Ecuador</option>
							
								<option value="023">Egitto</option>
							
								<option value="064">El Salvador Repubblica</option>
							
								<option value="277">Eritrea</option>
							
								<option value="257">Estonia</option>
							
								<option value="026">Etiopia</option>
							
								<option value="204">Faer Oer - Faeroerne Foroyar</option>
							
								<option value="190">Falkland O Malvine - Isole</option>
							
								<option value="161">Figi</option>
							
								<option value="027">Filippine - Isole</option>
							
								<option value="028">Finlandia</option>
							
								<option value="029">Francia</option>
							
								<option value="241">Fujayrah</option>
							
								<option value="157">Gabon</option>
							
								<option value="164">Gambia Repubblica</option>
							
								<option value="267">Georgia</option>
							
								<option value="094">Germania Repubblica Federale</option>
							
								<option value="112">Ghana</option>
							
								<option value="082">Giamaica</option>
							
								<option value="088">Giappone</option>
							
								<option value="102">Gibilterra</option>
							
								<option value="113">Gibuti Repubblica</option>
							
								<option value="122">Giordania</option>
							
								<option value="228">Gough (Sant Elena)</option>
							
								<option value="032">Grecia</option>
							
								<option value="156">Grenada</option>
							
								<option value="200">Groenlandia</option>
							
								<option value="214">Guadalupa Indipendente</option>
							
								<option value="154">Guam</option>
							
								<option value="033">Guatemala</option>
							
								<option value="123">Guayana Francese</option>
							
								<option value="201">Guernsey - Isola</option>
							
								<option value="185">Guinea Bissau Repubblica</option>
							
								<option value="167">Guinea Equatoriale</option>
							
								<option value="137">Guinea Repubblica Popolare</option>
							
								<option value="159">Guyana</option>
							
								<option value="034">Haiti</option>
							
								<option value="284">Heard E Mcdonald Islands</option>
							
								<option value="035">Honduras</option>
							
								<option value="103">Hong Kong</option>
							
								<option value="114">India</option>
							
								<option value="129">Indonesia</option>
							
								<option value="039">Iran</option>
							
								<option value="038">Iraq</option>
							
								<option value="040">Irlanda Repubblica Democratica</option>
							
								<option value="041">Islanda</option>
							
								<option value="182">Israele</option>
							
								<option value="086" selected="selected">Italia</option>
							
								<option value="202">Jersey - Isola</option>
							
								<option value="269">Kazakistan</option>
							
								<option value="116">Kenya</option>
							
								<option value="270">Kirghizistan</option>
							
								<option value="194">Kiribati Repubblica</option>
							
								<option value="291">Kosovo</option>
							
								<option value="126">Kuwait</option>
							
								<option value="136">Laos</option>
							
								<option value="089">Lesotho</option>
							
								<option value="258">Lettonia</option>
							
								<option value="095">Libano</option>
							
								<option value="044">Liberia</option>
							
								<option value="045">Libia</option>
							
								<option value="090">Liechtenstein</option>
							
								<option value="259">Lituania</option>
							
								<option value="092">Lussemburgo</option>
							
								<option value="059">Macao</option>
							
								<option value="278">Macedonia</option>
							
								<option value="104">Madagascar Repubblica</option>
							
								<option value="235">Madeira</option>
							
								<option value="056">Malawi Repubblica</option>
							
								<option value="106">Malaysia</option>
							
								<option value="127">Maldive - Isole</option>
							
								<option value="149">Mali Repubblica</option>
							
								<option value="105">Malta</option>
							
								<option value="203">Man-Isola</option>
							
								<option value="219">Marianne - Isole</option>
							
								<option value="107">Marocco</option>
							
								<option value="217">Marshall - Isole</option>
							
								<option value="213">Martinica - Isola</option>
							
								<option value="141">Mauritania</option>
							
								<option value="128">Maurizio - Isole</option>
							
								<option value="226">Mayotte - Isole</option>
							
								<option value="231">Melilla (Dip. Spagn. D Africa)</option>
							
								<option value="046">Messico</option>
							
								<option value="177">Midway - Isole</option>
							
								<option value="265">Moldavia</option>
							
								<option value="110">Mongolia</option>
							
								<option value="290">Montenegro</option>
							
								<option value="208">Montserrat</option>
							
								<option value="134">Mozambico</option>
							
								<option value="206">Namibia - Africa Del Sud Ovest</option>
							
								<option value="109">Nauru</option>
							
								<option value="125">Negara Brunei Darussalam</option>
							
								<option value="115">Nepal</option>
							
								<option value="047">Nicaragua</option>
							
								<option value="150">Niger</option>
							
								<option value="117">Nigeria Repubblica</option>
							
								<option value="205">Niue O Savage</option>
							
								<option value="285">Norfolk Islands</option>
							
								<option value="048">Norvegia</option>
							
								<option value="253">Nuova Caledonia</option>
							
								<option value="049">Nuova Zelanda</option>
							
								<option value="050">Paesi Bassi - Olanda</option>
							
								<option value="036">Pakistan</option>
							
								<option value="216">Palau Repubblica</option>
							
								<option value="279">Palestina</option>
							
								<option value="051">Panama</option>
							
								<option value="186">Papua Nuova Guinea</option>
							
								<option value="052">Paraguay</option>
							
								<option value="232">Penon De Alhucemas - Isole</option>
							
								<option value="233">Penon De Velez De La Gomera</option>
							
								<option value="053">Peru</option>
							
								<option value="225">Polinesia Francese</option>
							
								<option value="054">Polonia</option>
							
								<option value="055">Portogallo</option>
							
								<option value="091">Principato Di Monaco</option>
							
								<option value="220">Puerto Rico</option>
							
								<option value="168">Qatar</option>
							
								<option value="242">Ras Al Khaimah</option>
							
								<option value="031">Regno Unito Di Gran Bretagna I</option>
							
								<option value="275">Repubblica Ceca</option>
							
								<option value="078">Repubblica Sudafricana</option>
							
								<option value="247">Riunione - Isola(Dip. Franc. D</option>
							
								<option value="061">Romania</option>
							
								<option value="151">Ruanda</option>
							
								<option value="262">Russia (Federazione Di)</option>
							
								<option value="166">Sahara Occidentale</option>
							
								<option value="293">Saint Barthelemy</option>
							
								<option value="195">Saint Christopher - Nevis</option>
							
								<option value="199">Saint Lucia</option>
							
								<option value="222">Saint Martin</option>
							
								<option value="248">Saint Pierre E Miquelon</option>
							
								<option value="196">Saint Vincent E Grenadine</option>
							
								<option value="191">Salomone - Isole</option>
							
								<option value="148">Samoa Americane</option>
							
								<option value="131">Samoa Occidentali</option>
							
								<option value="037">San Marino</option>
							
								<option value="254">Sant Elena</option>
							
								<option value="187">Sao Tome E Principe</option>
							
								<option value="189">Seicelle - Isole</option>
							
								<option value="152">Senegal</option>
							
								<option value="289">Serbia</option>
							
								<option value="243">Sharjah</option>
							
								<option value="153">Sierra Leone</option>
							
								<option value="147">Singapore</option>
							
								<option value="065">Siria</option>
							
								<option value="276">Slovacchia</option>
							
								<option value="260">Slovenia</option>
							
								<option value="066">Somalia</option>
							
								<option value="283">South Georgia E South Sandwich</option>
							
								<option value="067">Spagna</option>
							
								<option value="085">Sri Lanka/Ceylon</option>
							
								<option value="215">Stati Federati Di Micronesia</option>
							
								<option value="069">Stati Uniti D America</option>
							
								<option value="070">Sudan Repubblica Democratica</option>
							
								<option value="163">Sultanato Di Oman</option>
							
								<option value="124">Suriname</option>
							
								<option value="286">Svalbard E Jan Mayen Islands</option>
							
								<option value="068">Svezia</option>
							
								<option value="071">Svizzera</option>
							
								<option value="138">Swaziland</option>
							
								<option value="272">Tagikistan</option>
							
								<option value="022">Taiwan</option>
							
								<option value="057">Tanzania</option>
							
								<option value="183">Terr Antartico Francese</option>
							
								<option value="245">Territ.Britan.Oceano Ind.</option>
							
								<option value="072">Thailandia</option>
							
								<option value="287">Timor - Leste</option>
							
								<option value="155">Togo Repubblica</option>
							
								<option value="162">Tonga</option>
							
								<option value="120">Trinidad E Tobago Repubblica</option>
							
								<option value="229">Tristan Da Cunha</option>
							
								<option value="075">Tunisia</option>
							
								<option value="076">Turchia</option>
							
								<option value="273">Turkmenistan</option>
							
								<option value="210">Turks E Caicos</option>
							
								<option value="193">Tuvalu - Isole</option>
							
								<option value="263">Ucraina</option>
							
								<option value="132">Uganda</option>
							
								<option value="244">Umm Al Qaiwain</option>
							
								<option value="077">Ungheria</option>
							
								<option value="083">Union Of Myanmar (Ex Birmania)</option>
							
								<option value="236">Unione Tokelau - Isole</option>
							
								<option value="080">Uruguay</option>
							
								<option value="271">Uzbekistan</option>
							
								<option value="121">Vanuatu</option>
							
								<option value="081">Venezuela</option>
							
								<option value="221">Vergini - Isole Americane</option>
							
								<option value="249">Vergini - Isole Britanniche</option>
							
								<option value="062">Viet Nam Repubblica Socialista</option>
							
								<option value="178">Wake - Isola</option>
							
								<option value="218">Wallis E Futuna - Isole</option>
							
								<option value="042">Yemen Repubblica Araba</option>
							
								<option value="058">Zambia</option>
							
								<option value="073">Zimbabwe</option></select>
					</div>
				</div>
				<div class="form-group col-xs-12">
					<div class="col-sm-5 col-xs-12">
						<label class="control-label" for="provincia">
							Provincia in cui viene svolta principalmente l'attivit&agrave; lavorativa
						</label>
					</div>
					<div class="col-sm-7 col-xs-12">
						<select name="provinciaAttivitaLavorativa" id="provincia" class="form-control"><option value="">&nbsp;</option>
							
								<option value="AG">Agrigento</option>
							
								<option value="AL">Alessandria</option>
							
								<option value="AN">Ancona</option>
							
								<option value="AO">Aosta</option>
							
								<option value="AR">Arezzo</option>
							
								<option value="AP">Ascoli Piceno</option>
							
								<option value="AT">Asti</option>
							
								<option value="AV">Avellino</option>
							
								<option value="BA">Bari</option>
							
								<option value="BT">Barletta-Andria-Trani</option>
							
								<option value="BL">Belluno</option>
							
								<option value="BN">Benevento</option>
							
								<option value="BG">Bergamo</option>
							
								<option value="BI">Biella</option>
							
								<option value="BO">Bologna</option>
							
								<option value="BZ">Bolzano</option>
							
								<option value="BS">Brescia</option>
							
								<option value="BR">Brindisi</option>
							
								<option value="CA">Cagliari</option>
							
								<option value="CL">Caltanissetta</option>
							
								<option value="CB">Campobasso</option>
							
								<option value="CI">Carbonia Iglesias</option>
							
								<option value="CE">Caserta</option>
							
								<option value="CT">Catania</option>
							
								<option value="CZ">Catanzaro</option>
							
								<option value="CH">Chieti</option>
							
								<option value="CO">Como</option>
							
								<option value="CS">Cosenza</option>
							
								<option value="CR">Cremona</option>
							
								<option value="KR">Crotone</option>
							
								<option value="CN">Cuneo</option>
							
								<option value="EN">Enna</option>
							
								<option value="FM">Fermo</option>
							
								<option value="FE">Ferrara</option>
							
								<option value="FI">Firenze</option>
							
								<option value="FG">Foggia</option>
							
								<option value="FC">Forli&#039;/Cesena</option>
							
								<option value="FR">Frosinone</option>
							
								<option value="GE">Genova</option>
							
								<option value="GO">Gorizia</option>
							
								<option value="GR">Grosseto</option>
							
								<option value="IM">Imperia</option>
							
								<option value="IS">Isernia</option>
							
								<option value="AQ">L&#039;Aquila</option>
							
								<option value="SP">La Spezia</option>
							
								<option value="LT">Latina</option>
							
								<option value="LE">Lecce</option>
							
								<option value="LC">Lecco</option>
							
								<option value="LI">Livorno</option>
							
								<option value="LO" selected="selected">Lodi</option>
							
								<option value="LU">Lucca</option>
							
								<option value="MC">Macerata</option>
							
								<option value="MN">Mantova</option>
							
								<option value="MS">Massa Carrara</option>
							
								<option value="MT">Matera</option>
							
								<option value="VS">Medio Campidano</option>
							
								<option value="ME">Messina</option>
							
								<option value="MI">Milano</option>
							
								<option value="MO">Modena</option>
							
								<option value="MB">Monza-Brianza</option>
							
								<option value="NA">Napoli</option>
							
								<option value="NO">Novara</option>
							
								<option value="NU">Nuoro</option>
							
								<option value="OG">Ogliastra</option>
							
								<option value="OT">Olbia-Tempio</option>
							
								<option value="OR">Oristano</option>
							
								<option value="PD">Padova</option>
							
								<option value="PA">Palermo</option>
							
								<option value="PR">Parma</option>
							
								<option value="PV">Pavia</option>
							
								<option value="PG">Perugia</option>
							
								<option value="PU">Pesaro Urbino</option>
							
								<option value="PE">Pescara</option>
							
								<option value="PC">Piacenza</option>
							
								<option value="PI">Pisa</option>
							
								<option value="PT">Pistoia</option>
							
								<option value="PN">Pordenone</option>
							
								<option value="PZ">Potenza</option>
							
								<option value="PO">Prato</option>
							
								<option value="RG">Ragusa</option>
							
								<option value="RA">Ravenna</option>
							
								<option value="RC">Reggio Calabria</option>
							
								<option value="RE">Reggio Emilia</option>
							
								<option value="RI">Rieti</option>
							
								<option value="RN">Rimini</option>
							
								<option value="RM">Roma</option>
							
								<option value="RO">Rovigo</option>
							
								<option value="SA">Salerno</option>
							
								<option value="SS">Sassari</option>
							
								<option value="SV">Savona</option>
							
								<option value="SI">Siena</option>
							
								<option value="SR">Siracusa</option>
							
								<option value="SO">Sondrio</option>
							
								<option value="TA">Taranto</option>
							
								<option value="TE">Teramo</option>
							
								<option value="TR">Terni</option>
							
								<option value="TO">Torino</option>
							
								<option value="TP">Trapani</option>
							
								<option value="TN">Trento</option>
							
								<option value="TV">Treviso</option>
							
								<option value="TS">Trieste</option>
							
								<option value="UD">Udine</option>
							
								<option value="VA">Varese</option>
							
								<option value="VE">Venezia</option>
							
								<option value="VB">Verbano-Cusio-Ossola</option>
							
								<option value="VC">Vercelli</option>
							
								<option value="VR">Verona</option>
							
								<option value="VV">Vibo Valentia</option>
							
								<option value="VI">Vicenza</option>
							
								<option value="VT">Viterbo</option></select>
					</div>
					</div>
				<div class="form-group col-xs-12">
					<div class="col-sm-5 col-xs-12">
						<label class="control-label" for="nazioneRapporti">
							Principale stato estero con il quale intrattieni rapporti economici
						</label>
					</div>
					<div class="col-sm-7 col-xs-12">
						<select name="codNazioneRapporti" id="nazioneRapporti" class="form-control"><option value="">Nessuno</option>
							
								<option value="238">Abu Dhabi</option>
							
								<option value="002">Afghanistan</option>
							
								<option value="239">Ajman (Emirati Arabi Uniti)</option>
							
								<option value="292">Aland Isole</option>
							
								<option value="087">Albania</option>
							
								<option value="003">Algeria</option>
							
								<option value="252">Americane Del Pacifico - Isole</option>
							
								<option value="004">Andorra</option>
							
								<option value="133">Angola</option>
							
								<option value="209">Anguilla</option>
							
								<option value="180">Antartide</option>
							
								<option value="197">Antigua E Barbuda</option>
							
								<option value="251">Antille Olandesi</option>
							
								<option value="005">Arabia Saudita</option>
							
								<option value="006">Argentina</option>
							
								<option value="266">Armenia</option>
							
								<option value="212">Aruba</option>
							
								<option value="227">Ascensione - Isole</option>
							
								<option value="007">Australia</option>
							
								<option value="008">Austria</option>
							
								<option value="268">Azerbaigian</option>
							
								<option value="234">Azzorre - Isole</option>
							
								<option value="160">Bahamas - Isole</option>
							
								<option value="169">Bahrein - Isole</option>
							
								<option value="130">Bangladesh</option>
							
								<option value="118">Barbados - Isole</option>
							
								<option value="009">Belgio</option>
							
								<option value="198">Belize</option>
							
								<option value="158">Benin</option>
							
								<option value="207">Bermuda - Isole</option>
							
								<option value="097">Bhutan</option>
							
								<option value="264">Bielorussia</option>
							
								<option value="010">Bolivia</option>
							
								<option value="274">Bosnia Erzegovina</option>
							
								<option value="098">Botswana</option>
							
								<option value="280">Bouvet Islands</option>
							
								<option value="011">Brasile</option>
							
								<option value="012">Bulgaria</option>
							
								<option value="142">Burkina Faso (Ex Alto Volta)</option>
							
								<option value="025">Burundi</option>
							
								<option value="135">Cambogia</option>
							
								<option value="119">Camerun</option>
							
								<option value="139">Campione D Italia</option>
							
								<option value="013">Canada</option>
							
								<option value="100">Canarie - Isole</option>
							
								<option value="188">Capo Verde - Isole</option>
							
								<option value="256">Caroline - Isole</option>
							
								<option value="211">Cayman - Isole</option>
							
								<option value="143">Centrafricana Repubblica</option>
							
								<option value="246">Ceuta (Dip. Spagn. D Africa)</option>
							
								<option value="230">Chafarinas - Isole</option>
							
								<option value="255">Chagos - Isole</option>
							
								<option value="282">Christmas Islands</option>
							
								<option value="144">Ciad</option>
							
								<option value="015">Cile</option>
							
								<option value="016">Cina Repubblica Popolare</option>
							
								<option value="101">Cipro Repubblica</option>
							
								<option value="093">Citta Del Vaticano</option>
							
								<option value="223">Clipperton</option>
							
								<option value="281">Cocos (Keeling) Islands</option>
							
								<option value="017">Colombia</option>
							
								<option value="176">Comore - Isole</option>
							
								<option value="145">Congo</option>
							
								<option value="018">Congo Rep. Dem.</option>
							
								<option value="237">Cook - Isole</option>
							
								<option value="074">Corea Del Nord</option>
							
								<option value="084">Corea Del Sud (Repubblica Di)</option>
							
								<option value="146">Costa D Avorio</option>
							
								<option value="019">Costa Rica</option>
							
								<option value="261">Croazia</option>
							
								<option value="020">Cuba</option>
							
								<option value="021">Danimarca</option>
							
								<option value="175">Dip.Brit. D Oceania (Pitcairn)</option>
							
								<option value="192">Dominica</option>
							
								<option value="063">Dominicana Repubblica</option>
							
								<option value="240">Dubay</option>
							
								<option value="024">Ecuador</option>
							
								<option value="023">Egitto</option>
							
								<option value="064">El Salvador Repubblica</option>
							
								<option value="277">Eritrea</option>
							
								<option value="257">Estonia</option>
							
								<option value="026">Etiopia</option>
							
								<option value="204">Faer Oer - Faeroerne Foroyar</option>
							
								<option value="190">Falkland O Malvine - Isole</option>
							
								<option value="161">Figi</option>
							
								<option value="027">Filippine - Isole</option>
							
								<option value="028">Finlandia</option>
							
								<option value="029">Francia</option>
							
								<option value="241">Fujayrah</option>
							
								<option value="157">Gabon</option>
							
								<option value="164">Gambia Repubblica</option>
							
								<option value="267">Georgia</option>
							
								<option value="094">Germania Repubblica Federale</option>
							
								<option value="112">Ghana</option>
							
								<option value="082">Giamaica</option>
							
								<option value="088">Giappone</option>
							
								<option value="102">Gibilterra</option>
							
								<option value="113">Gibuti Repubblica</option>
							
								<option value="122">Giordania</option>
							
								<option value="228">Gough (Sant Elena)</option>
							
								<option value="032">Grecia</option>
							
								<option value="156">Grenada</option>
							
								<option value="200">Groenlandia</option>
							
								<option value="214">Guadalupa Indipendente</option>
							
								<option value="154">Guam</option>
							
								<option value="033">Guatemala</option>
							
								<option value="123">Guayana Francese</option>
							
								<option value="201">Guernsey - Isola</option>
							
								<option value="185">Guinea Bissau Repubblica</option>
							
								<option value="167">Guinea Equatoriale</option>
							
								<option value="137">Guinea Repubblica Popolare</option>
							
								<option value="159">Guyana</option>
							
								<option value="034">Haiti</option>
							
								<option value="284">Heard E Mcdonald Islands</option>
							
								<option value="035">Honduras</option>
							
								<option value="103">Hong Kong</option>
							
								<option value="114">India</option>
							
								<option value="129">Indonesia</option>
							
								<option value="039">Iran</option>
							
								<option value="038">Iraq</option>
							
								<option value="040">Irlanda Repubblica Democratica</option>
							
								<option value="041">Islanda</option>
							
								<option value="182">Israele</option>
							
								<option value="086">Italia</option>
							
								<option value="202">Jersey - Isola</option>
							
								<option value="269">Kazakistan</option>
							
								<option value="116">Kenya</option>
							
								<option value="270">Kirghizistan</option>
							
								<option value="194">Kiribati Repubblica</option>
							
								<option value="291">Kosovo</option>
							
								<option value="126">Kuwait</option>
							
								<option value="136">Laos</option>
							
								<option value="089">Lesotho</option>
							
								<option value="258">Lettonia</option>
							
								<option value="095">Libano</option>
							
								<option value="044">Liberia</option>
							
								<option value="045">Libia</option>
							
								<option value="090">Liechtenstein</option>
							
								<option value="259">Lituania</option>
							
								<option value="092">Lussemburgo</option>
							
								<option value="059">Macao</option>
							
								<option value="278">Macedonia</option>
							
								<option value="104">Madagascar Repubblica</option>
							
								<option value="235">Madeira</option>
							
								<option value="056">Malawi Repubblica</option>
							
								<option value="106">Malaysia</option>
							
								<option value="127">Maldive - Isole</option>
							
								<option value="149">Mali Repubblica</option>
							
								<option value="105">Malta</option>
							
								<option value="203">Man-Isola</option>
							
								<option value="219">Marianne - Isole</option>
							
								<option value="107">Marocco</option>
							
								<option value="217">Marshall - Isole</option>
							
								<option value="213">Martinica - Isola</option>
							
								<option value="141">Mauritania</option>
							
								<option value="128">Maurizio - Isole</option>
							
								<option value="226">Mayotte - Isole</option>
							
								<option value="231">Melilla (Dip. Spagn. D Africa)</option>
							
								<option value="046">Messico</option>
							
								<option value="177">Midway - Isole</option>
							
								<option value="265">Moldavia</option>
							
								<option value="110">Mongolia</option>
							
								<option value="290">Montenegro</option>
							
								<option value="208">Montserrat</option>
							
								<option value="134">Mozambico</option>
							
								<option value="206">Namibia - Africa Del Sud Ovest</option>
							
								<option value="109">Nauru</option>
							
								<option value="125">Negara Brunei Darussalam</option>
							
								<option value="115">Nepal</option>
							
								<option value="047">Nicaragua</option>
							
								<option value="150">Niger</option>
							
								<option value="117">Nigeria Repubblica</option>
							
								<option value="205">Niue O Savage</option>
							
								<option value="285">Norfolk Islands</option>
							
								<option value="048">Norvegia</option>
							
								<option value="253">Nuova Caledonia</option>
							
								<option value="049">Nuova Zelanda</option>
							
								<option value="050">Paesi Bassi - Olanda</option>
							
								<option value="036">Pakistan</option>
							
								<option value="216">Palau Repubblica</option>
							
								<option value="279">Palestina</option>
							
								<option value="051">Panama</option>
							
								<option value="186">Papua Nuova Guinea</option>
							
								<option value="052">Paraguay</option>
							
								<option value="232">Penon De Alhucemas - Isole</option>
							
								<option value="233">Penon De Velez De La Gomera</option>
							
								<option value="053">Peru</option>
							
								<option value="225">Polinesia Francese</option>
							
								<option value="054">Polonia</option>
							
								<option value="055">Portogallo</option>
							
								<option value="091">Principato Di Monaco</option>
							
								<option value="220">Puerto Rico</option>
							
								<option value="168">Qatar</option>
							
								<option value="242">Ras Al Khaimah</option>
							
								<option value="031">Regno Unito Di Gran Bretagna I</option>
							
								<option value="275">Repubblica Ceca</option>
							
								<option value="078">Repubblica Sudafricana</option>
							
								<option value="247">Riunione - Isola(Dip. Franc. D</option>
							
								<option value="061">Romania</option>
							
								<option value="151">Ruanda</option>
							
								<option value="262">Russia (Federazione Di)</option>
							
								<option value="166">Sahara Occidentale</option>
							
								<option value="293">Saint Barthelemy</option>
							
								<option value="195">Saint Christopher - Nevis</option>
							
								<option value="199">Saint Lucia</option>
							
								<option value="222">Saint Martin</option>
							
								<option value="248">Saint Pierre E Miquelon</option>
							
								<option value="196">Saint Vincent E Grenadine</option>
							
								<option value="191">Salomone - Isole</option>
							
								<option value="148">Samoa Americane</option>
							
								<option value="131">Samoa Occidentali</option>
							
								<option value="037">San Marino</option>
							
								<option value="254">Sant Elena</option>
							
								<option value="187">Sao Tome E Principe</option>
							
								<option value="189">Seicelle - Isole</option>
							
								<option value="152">Senegal</option>
							
								<option value="289">Serbia</option>
							
								<option value="243">Sharjah</option>
							
								<option value="153">Sierra Leone</option>
							
								<option value="147">Singapore</option>
							
								<option value="065">Siria</option>
							
								<option value="276">Slovacchia</option>
							
								<option value="260">Slovenia</option>
							
								<option value="066">Somalia</option>
							
								<option value="283">South Georgia E South Sandwich</option>
							
								<option value="067">Spagna</option>
							
								<option value="085">Sri Lanka/Ceylon</option>
							
								<option value="215">Stati Federati Di Micronesia</option>
							
								<option value="069">Stati Uniti D America</option>
							
								<option value="070">Sudan Repubblica Democratica</option>
							
								<option value="163">Sultanato Di Oman</option>
							
								<option value="124">Suriname</option>
							
								<option value="286">Svalbard E Jan Mayen Islands</option>
							
								<option value="068">Svezia</option>
							
								<option value="071">Svizzera</option>
							
								<option value="138">Swaziland</option>
							
								<option value="272">Tagikistan</option>
							
								<option value="022">Taiwan</option>
							
								<option value="057">Tanzania</option>
							
								<option value="183">Terr Antartico Francese</option>
							
								<option value="245">Territ.Britan.Oceano Ind.</option>
							
								<option value="072">Thailandia</option>
							
								<option value="287">Timor - Leste</option>
							
								<option value="155">Togo Repubblica</option>
							
								<option value="162">Tonga</option>
							
								<option value="120">Trinidad E Tobago Repubblica</option>
							
								<option value="229">Tristan Da Cunha</option>
							
								<option value="075">Tunisia</option>
							
								<option value="076">Turchia</option>
							
								<option value="273">Turkmenistan</option>
							
								<option value="210">Turks E Caicos</option>
							
								<option value="193">Tuvalu - Isole</option>
							
								<option value="263">Ucraina</option>
							
								<option value="132">Uganda</option>
							
								<option value="244">Umm Al Qaiwain</option>
							
								<option value="077">Ungheria</option>
							
								<option value="083">Union Of Myanmar (Ex Birmania)</option>
							
								<option value="236">Unione Tokelau - Isole</option>
							
								<option value="080">Uruguay</option>
							
								<option value="271">Uzbekistan</option>
							
								<option value="121">Vanuatu</option>
							
								<option value="081">Venezuela</option>
							
								<option value="221">Vergini - Isole Americane</option>
							
								<option value="249">Vergini - Isole Britanniche</option>
							
								<option value="062">Viet Nam Repubblica Socialista</option>
							
								<option value="178">Wake - Isola</option>
							
								<option value="218">Wallis E Futuna - Isole</option>
							
								<option value="042">Yemen Repubblica Araba</option>
							
								<option value="058">Zambia</option>
							
								<option value="073">Zimbabwe</option></select>
					</div>
				</div>
			</div>

		<div class="section clearfix">
			<h3 class="titleSection">
				Utilizzo dei tuoi rapporti
			</h3>
			<span class="rounded_corner">&nbsp;</span>
			
				<div class="accordion">
					<h3 class="intestazione">
						<a href="#">Qual è il principale utilizzo che fai dei tuoi DEPOSITI TITOLI (Filiale 2001) ?</a>
					</h3>
					<div class="form-group clearfix">
						<div class="col-xs-12">
							
								<div class="col-sm-3 col-xs-6">
									<div class="form-field-input col-xs-1 clear-padding">
										<input type="radio" name="valoreSpecificoRapporto[0].rispostaSelezionata" value="01" id="principaleUtilizzoRapporto10" class="sfondoForm" />
									</div>
									<div class="form-field-input col-xs-11 clear-padding  padding-left-xs-10">
										<label>
											Risparmio
										</label>
									</div>
								</div>
							
								<div class="col-sm-3 col-xs-6">
									<div class="form-field-input col-xs-1 clear-padding">
										<input type="radio" name="valoreSpecificoRapporto[0].rispostaSelezionata" value="02" id="principaleUtilizzoRapporto10" class="sfondoForm" />
									</div>
									<div class="form-field-input col-xs-11 clear-padding  padding-left-xs-10">
										<label>
											Finanziamento
										</label>
									</div>
								</div>
							
								<div class="col-sm-3 col-xs-6">
									<div class="form-field-input col-xs-1 clear-padding">
										<input type="radio" name="valoreSpecificoRapporto[0].rispostaSelezionata" value="03" checked="checked" id="principaleUtilizzoRapporto10" class="sfondoForm" />
									</div>
									<div class="form-field-input col-xs-11 clear-padding  padding-left-xs-10">
										<label>
											Investimento
										</label>
									</div>
								</div>
							
								<div class="col-sm-3 col-xs-6">
									<div class="form-field-input col-xs-1 clear-padding">
										<input type="radio" name="valoreSpecificoRapporto[0].rispostaSelezionata" value="04" id="principaleUtilizzoRapporto10" class="sfondoForm" />
									</div>
									<div class="form-field-input col-xs-11 clear-padding  padding-left-xs-10">
										<label>
											Servizi vari
										</label>
									</div>
								</div>
							
						</div>
					</div>
				</div>
			
		</div>

	</form>
</div>
<form id="formLista" method="post" action="/WEBHT/av/adeguataVerificaLista.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="e12ba37169aefbd38dda2923e1ffa075" /></div></form>
<div class="pull-right margin-bottom20">
	
		
		<input type="button" name="" value="Annulla" onclick="$('#formLista').submit()" class="btn btn-primary" alt="Annulla" />
	
	<input type="button" name="avanti" tabindex="2" value="Avanti" onclick="$('#formAdeguataVerifica').submit()" class="btn btn-primary" />
</div>

<script type="text/javascript">
	$(document).ready(function() {		
		$('.accordion').each(function(i, div) {	
			$(div).accordion({
				
					active: 0, //tutti aperti in caso di errore				
					animated: ($.browser.msie && parseInt($.browser.version) <= 6) ? false : 'slide',
					heightStyle: "content",
					collapsible: false
			});		
			
			$('#attEconomica' + i).combobox({
				idHiddenInput: 'descAttEconomica' + i
			});
		});
		$("#attEconomica0").combobox();
		checkProfessione();
	});
	
	function checkNazione() {
		var value = $('#nazione').val();
		if (value != '086') { // diverso da italia
			$('#provincia').val('');
			$('#provincia').attr('disabled', 'disabled');
			$('#provincia').css('background-color', '#C0C0C0');
		} else {
			$('#provincia').removeAttr('disabled');
			$('#provincia').css('background-color', '');
		}
	}

	function checkNazioneCorrispondenza() {
		var value = $('#nazioneSelect').val();

		$('#comuneCorrispondenza').val('');
		$('#capCorrispondenza').val('');
		$('#indirizzoCorrispondenza').val('');

		if (value != '') { // diverso da italia			
			$('#provinciaCorrispondenza').val('');
			$('#provinciaCorrispondenza').attr('disabled', 'disabled');
			$('#provinciaCorrispondenza').css('background-color', '#C0C0C0');
		} else {
			$('#provinciaCorrispondenza').removeAttr('disabled');
			$('#provinciaCorrispondenza').css('background-color', '');
		}
	}
	
	//Se la professione corrisponde a PENSIONATO o NON OCCUPATO vengono inibiti i successivi 3 campi	
	function checkProfessione() {
		var value = $('#professione').val();
		if (value == '05' || value == '06') 
		{
			$('#provincia').val('');
			$('#provincia').attr('disabled', 'disabled');
			$('#provincia').css('background-color', '#C0C0C0');
			$('#nazione').val('086');
			$('#nazione').attr('disabled', 'disabled');
			$('#nazione').css('background-color', '#C0C0C0');
			$('#nazioneRapporti').val('');
			$('#nazioneRapporti').attr('disabled', 'disabled');
			$('#nazioneRapporti').css('background-color', '#C0C0C0');
			if (value=='06')
			{
				$('#attEconomica0').val('');
				$('#attEconomica0').combobox('disable');
			}
			else
			{
			
				$('#attEconomica0').combobox('enable');
			}
		}
		else 
		{
			$('#attEconomica0').combobox('enable');
			$('#nazione').removeAttr('disabled');
			$('#nazione').css('background-color', '');	 
			$('#nazioneRapporti').removeAttr('disabled');
			$('#nazioneRapporti').css('background-color', '');			
			checkNazione();
		}
	}
/* 	
	(function( $ ) {
		$.widget( "ui.comdfbobox", {
			options: {
				idHiddenInput: ''
			},
		
			_create: function() {
				var self = this,
					defValue = 'Digita qui per cercare tra le opzioni...',
					select = this.element.hide(),
					selected = select.children( ":selected" ),
					hiddenInput = $('#' + this.options.idHiddenInput),
					inputName = hiddenInput.attr('name'),
					inputValue = hiddenInput.val();
				if(inputValue == '') {
					if(selected.val()) {
						inputValue = selected.text();
					} else {
						inputValue = defValue;
					}
				}
				hiddenInput.remove();
				var input = this.input = $( "<input>" )
					.attr('name', inputName)
					.focus(function() {
						if(defValue == $(this).val()) {
							$(this).val('');
							$(this).removeClass('default');
						}
					})
					.insertAfter( select )
					.val( inputValue )
					.addClass( defValue == inputValue ? 'default' : '' )
					.attr('style', 'width: 450px')
					.autocomplete({
						delay: 0,
						minLength: 0,
						source: function( request, response ) {
							var matcher = new RegExp( $.ui.autocomplete.escapeRegex(request.term), "i" );
							response( select.children( "option" ).map(function() {
								var text = $( this ).text();
								if ( this.value && ( !request.term || matcher.test(text) ) )
									return {
										label: text.replace(
											new RegExp(
												"(?![^&;]+;)(?!<[^<>]*)(" +
												$.ui.autocomplete.escapeRegex(request.term) +
												")(?![^<>]*>)(?![^&;]+;)", "gi"
											), "<strong>$1</strong>" ),
										value: text,
										option: this
									};
							}) );
						},
						select: function( event, ui ) {
							ui.item.option.selected = true;
							self._trigger( "selected", event, {
								item: ui.item.option
							});
						},
						change: function( event, ui ) {
							if ( !ui.item ) {
								var matcher = new RegExp( "^" + $.ui.autocomplete.escapeRegex( $(this).val() ) + "$", "i" ),
									valid = false;
								select.children( "option" ).each(function() {
									if ( $( this ).text().match( matcher ) ) {
										this.selected = valid = true;
										return false;
									}
								});
								if ( !valid ) {
									// remove invalid value, as it didn't match anything
									$( this ).val( "" );
									select.val( "" );
									input.data( "autocomplete" ).term = "";
									return false;
								}
							}
						}
					})
					.addClass( "ui-widget ui-widget-content ui-corner-left form-control" );

			
				$[ "ui" ][ "autocomplete" ].prototype["_renderItem"] = function( ul, item) {
					return $( "<li></li>" ) 
					  .data( "item.autocomplete", item )
					  .append( $( "<a></a>" ).html( item.label ) )
					  .appendTo( ul );
				};

				this.button = $( "<button type='button'>&nbsp;</button>" )
					.attr( "tabIndex", -1 )
					.attr( "title", "Show All Items" )
					.insertAfter( input )
					.button({
						icons: {
							primary: "ui-icon-triangle-1-s"
						},
						text: false
					})
					.removeClass( "ui-corner-all" )
					.addClass( "ui-button-icon btnAutoComplete form-control" )
					.click(function() {
						// close if already visible
						if ( input.autocomplete( "widget" ).is( ":visible" ) ) {
							input.autocomplete( "close" );
							return;
						}

						// pass empty string as value to search for, displaying all results
						input.autocomplete( "search", "" );
						input.focus();
					});
					$(this.input).width($('#provenienzaFondi').parent().width()-11-$(this.button).width());
			},
			
			disable: function() {
				this.input.attr('disabled', 'disabled');
				this.input.val('');
				this.input.addClass('disabled');	
				this.input.autocomplete('disable');
				this.button.button('disable');
			},
			
			enable: function() {
				this.input.removeAttr('disabled');
				this.input.removeClass('disabled');	
				this.input.autocomplete('enable');
				this.button.button('enable');			
			},

			destroy: function() {
				this.input.remove();
				this.button.remove();
				this.element.show();
				$.Widget.prototype.destroy.call( this );
			}
		});
	})( jQuery ); */

</script>

<h2>Trading base</h2>
<div class="navContFirstLev outerTab">
	<div class="innerTab">
		<ul class="tabbig">
			<li class="on"><a href="#">ricerca semplice</a></li>
			<li><a href="connect.php?page=strutt_priv.php&tpl=tpl_responsive_compravendita_bpm2.php&responsive=y&liv0=3&liv1=1&liv2=0" >ricerca avanzata</a></li>
		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-nofill">
		<section>
			<div class="tithelp">
				<h4>Ricerca titoli</h4>
				<div class="flRight"><a href="#1" class="no-underline btn-icon" data-toggle="modal" data-target="#modificaProfiloOver"><i class="icon icon-info_fill icon-2x"></i></a><br class="clear"></div>
				<br class="clear">
			</div>
			<form class="formGenerico borderFormRounded" role="form" id="form01">
				<div class="form-group">
					<div class="row">
						<label class="control-label">Ricerca per</label>
						<div class="col-xs-6 requiredField">
							<select name="" class="form-control" id="tooltipOnSelect">
								<option>descrizione</option>
								<option>codice ISIN</option>
								<option>codice banca</option>
								<option>Codice Radiocor</option>
							</select>
						</div>
						<div class="col-xs-6">
							<input type="text" name="" class="form-control clear-x">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-xs-6">
							<label class="control-label">Mercato</label>
							<div class="form-inline">
								<div class="input-group">
									<input maxlength="" id="" value="" type="text" name="" class="form-control clear-x">
									<div class="input-group-addon"><a href="#1" class="no-underline btn-icon" data-toggle="modal" data-target="#tipoMercato"><i class="icon icon-info_fill"></i></a></div>
								</div>
							</div>
						</div>
						<div class="col-xs-6 no-label">
							<div class="marginTopMini">
								<a href="#" data-target="#orariMercato" data-toggle="modal">Orari</a>
							</div>
						</div>
					</div>
				</div>
			</form>
			<div class="form-group">
			    <div class="row">
			      <div class="col-xs-12">
			        <div class="btn-align-right">
			          <a type="button" class="btn btn-primary" href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_compravendita_bpm3.php&responsive=y&liv0=3&liv1=1&liv2=0">ricerca</a>
			        </div>
			      </div>
			    </div>
			</div>
		</section>
		<section>
	<div class="testoIcona emphasis">
		<i class="icon icon-2x icon-arrow_emphasis flLeft"></i>
		<div class="leftTesto">
			<p>Per il Mercato telematico Azionario, Covered Warrant diurno e After Hours, occorre inserire almeno tre caratteri della descrizione del titolo che si intende conpravendere, mentre, per le Obbligazioni occorre inserire almeno un carattere. In questo caso il sistema mostra tutti i titoli che iniziano o che contengono le lettere inserite.</p>		
		</div>	
	</div>
	<div class="testoIcona emphasis">
		<i class="icon icon-2x icon-arrow_emphasis flLeft"></i>
		<div class="leftTesto">
			<p>Ti ricordiamo di fare attenzione a non inserire sigle quando effettui la ricerca di un titolo per descrizione. Per esempio, se vuoi ricercare le azioni ordinarie della Banca Popolare di Milano inserisci &quot;pop&quot; o &quot;milano&quot; e non &quot;BPM&quot;.</p>		
		</div>	
	</div>
	</section>
	</div>
</div>
<div class="modal fade" id="modificaProfiloOver" tabindex="-1" role="dialog" aria-labelledby="modificaProfilo">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i></a>
				<h2 class="modal-title" id="modificaProfilo">Ricerca titolo</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<p>Ti forniamo alcune note operative per la ricerca di un titolo da compravendere:</p>
							<ul>
								<li>selezionare il <strong>Mercato</strong> di interesse (campo obbligatorio)</li>
								<li>per il Mercato Telematico Azionario, Obbligazionario/Titoli di Stato, Covered Warrant diurno e After Hours,occorre inserire almeno <strong>tre caratteri</strong> della descrizione del titolo che si intende compravendere. In questo caso il sistema mostra tutti i titoli che iniziano o che contengono le lettere inserite.</li>
								<li>in alternativa alla ricerca per descrizione, indicare il codice ISIN o il codice BPM (se noto).</li>
							</ul>
							<p>N.B: Gli orari relativi alle varie fasi di mercato sono diversi a seconda del titolo oggetto di compravendita. 
							Ti consigliamo di consultare l'help relativo agli <a href="#">orari dei mercati</a></p>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="tipoMercato" tabindex="-1" role="dialog" aria-labelledby="tipoMercato">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i></a>
				<h2 class="modal-title" id="tipoMercato">Descrizione mercati</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<p>Di seguito si riporta una breve descrizione dei mercati su cui &egrave; possibile operare tramite il servizio di internet banking.</p>
							<h3>1) Mercati italiani</h3>
							<p>Il <strong>Mercato Telematico Azionario (MTA)</strong> &egrave; il comparto in cui si negoziano azioni (azioni ordinarie, azioni privilegiate, azioni di risparmio), obbligazioni convertibili, warrant, diritti d'opzione e certificati rappresentativi di quote 
							di fondi mobiliari e immobiliari chiusi quotati in Borsa.</p>
							<p>Il <strong>Mercato Telematico Azionario (MTA)</strong> si suddivide in:</p>
							<ul>
								<li><strong>Blue Chips</strong>, il segmento che comprende i titoli delle societ&agrave; con capitalizzazione superiore a 800 milioni di euro;</li>
								<li><strong>Segmento Titoli con Alti Requisiti (STAR)</strong>, il segmento rivolto alle aziende con capitalizzazione inferiore a 800 milioni di euro operanti nei settori  pi&ugrave; tradizionali dell'economia;
								<li><strong>Segmento di Borsa Ordinario</strong>, suddiviso a sua volta in due classi di negoziazione sulla base della frequenza degli scambi del controvalore medio giornaliero negoziato nel semestre precedente.</li>
								<li><strong>MTA International</strong>, il segmento dedicato ad azioni di emittenti di diritto estero gi&agrave; negoziate in altri mercati regolamentati dell'area euro da pi&ugrave; di 18 mesi, scelti in base alla capitalizzazione borsistica e alla liquidit&agrave;.</li>
							</ul>
							<p>Il <strong>Mercato Telematico Fondi (MTF)</strong>, &egrave; il segmento del Mercato Telematico Azionario (MTA) dedicato alla quotazione di ETF(Exchange-Traded Fund), 
							Fondi e Sicav. &Egrave; suddiviso in 2 classi:</p>
							<ul>
								<li>Classe 1 - Exchange-Traded Fund (ETF), Fondi Aperti Indicizzati e Sicav Indicizzate </li>
								<li>Classe 2 - Fondi Chiusi Mobiliari e Fondi Chiusi Immobiliari </li>
							</ul>
							<p>Il <strong>Nuovo Mercato (NM)</strong>, &egrave; il mercato dedicato alle imprese nazionali ed estere ad alto potenziale di crescita, operanti sia in settori innovativi che tradizionali, purch&eacute; caratterizzate da innovazione di prodotto, servizio o processo. Il crescente interesse per tali societ&agrave; ha indotto Borsa Italiana ad ampliare il range di strumenti ammessi a quotazione sul Nuovo Mercato includendo, oltre alle azioni, i diritti di opzione, i warrant e le obbligazioni convertibili.</p>
							<p>Il <strong>Mercato Expandi</strong> &egrave; il mercato dedicato alle piccole imprese operanti in settori tradizionali con posizioni consolidate nei mercati di riferimento, che presentano un track record di risultati economico-finanziari positivi. Con il Mercato Expandi, gli emittenti di piccole dimensioni possono trovare un ambiente di mercato - diverso da quello di Borsa (Star e Segmento di Borsa Ordinario) e Nuovo Mercato - caratterizzato da requisiti di ammissione pi&ugrave; semplici e da un processo di quotazione pi&ugrave; agile.</p> 
							<p>Il <strong>Mercato After Hours</strong>, &egrave; il mercato in cui si negoziano, in orari successivi alla chiusura del Mercato diurno, titoli che presentano i requisiti di liquidit&agrave; stabiliti dalla Borsa.</p>
							<p>Il <strong>Mercato After Hours Covered Warrant</strong> &egrave; il mercato in cui si negoziano i Covered Warrant in orari successivi alla chiusura. 
							<p>Il <strong>Mercato Telematico delle Obbligazioni</strong> e Titoli di Stato (MOT) &egrave; il mercato su cui vengono negoziati Titoli di Stato e obbligazioni non convertibili.</p>
							<p><strong>EuroTLX</strong> &egrave; il Sistema Multilaterale di Negoziazione (Multilateral Trading Facility - MTF) gestito da <strong>TLX S.p.A.</strong> Con il servizio di internet banking &egrave; possibile negoziare le azioni europee e americane trattate su questo circuito.</p>
							<p>Il <strong>Mercato Telematico delle Euro-obbligazioni, Obbligazioni di emittenti esteri e Asset backed securities (EuroMot)</strong> &egrave; il comparto della Borsa Italiana S.p.A. in cui si negoziano, in quantitativi minimi (lotto minimo) o loro multipli, eurobbligazioni, obbligazioni di emittenti esteri e asset backed securities. </p>
							<h3>2) MERCATI ESTERI</h3>
							<p>Il <strong>CAC 40</strong> &egrave; l'indice che raggruppa i 40 titoli a maggiore capitalizzazione quotati sulla Borsa di Parigi.</p>  
							<p>Lo <strong>XETRA - DAX 30</strong>  &egrave; l'indice che raggruppa le blue-chips quotate sulla borsa di Francoforte.</p>
							<p>L'<strong>AEX</strong> &egrave; il principale indice della Borsa olandese e comprende i 25  titoli a maggiore capitalizzazione. </p>
							<p>Il <strong>Dow Jones Industrial Average</strong>, il pi&ugrave; antico tra gli Indici del <strong>Mercato Nyse</strong>, raggruppa 30 tra le societ&agrave; 
							maggiormente rappresentative dei rispettivi settori industriali.</p>
							<p>Il <strong>Nasdaq 100</strong> &egrave; l'indice che raggruppa le societ&agrave; a pi&ugrave; alta capitalizzazione presenti sul Mercato Nasdaq.</p>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
<script>

$(function() {
    $('#tableOrari').bootstrapTable('mergeCells', {
       index: 0,
       field: 'mercato',
       rowspan: 5
    });
    $('#tableOrari').bootstrapTable('mergeCells', {
       index: 5,
       field: 'mercato',
       rowspan: 2
    });
    $('#tableOrari').bootstrapTable('mergeCells', {
       index: 7,
       field: 'mercato',
       rowspan: 2
    });
    $('#tableOrari2').bootstrapTable('mergeCells', {
       index: 0,
       field: 'mercato',
       rowspan: 2
    });
});
</script>
<div class="modal fade" id="orariMercato" tabindex="-1" role="dialog" aria-labelledby="orariMercato">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i></a>
				<h2 class="modal-title" id="orariMercato">Orari del mercato</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<p>Ti ricordiamo che gli orari di negoziazione dei mercati (Italia, Estero, Serali) sono i seguenti :</p>
							<table cellpadding="0" cellspacing="0" data-toggle="table" id="tableOrari">
								<thead>
									<tr>
										<th data-field="mercato">Mercato Italia</th>
										<th>Tipo Titolo</th>
										<th>Apertura</th>
										<th>Continua</th>
										<th>Asta di chiusura</th>
									</tr>
								</thead>
								<tboby>
									<tr>
										<td>Azionario Telematico (MTA) e Nuovo Mercato (MTAX) </td>
										<td>Blue Chip:</td>
										<td>8:00-9:00</td>
										<td>9:05-17:25</td>
										<td>17:25-17:30</td>
									</tr>
									<tr>
										<td></td>
										<td>Star:</td>
										<td>8:00-9:00</td>
										<td>9:05-17:25</td>
										<td>17:25-17:30</td>
									</tr>
									<tr>
										<td></td>
										<td>Segmento ordinario - Classe 1:</td>
										<td>8:00-9:00</td>
										<td>9:05-17:25</td>
										<td>17:25-17:30</td>
									</tr>
									<tr>
										<td></td>
										<td>Segmento ordinario - Classe 2:</td>
										<td>8:00-9:00</td>
										<td>9:05-17:25</td>
										<td>17:25-17:30</td>
									</tr>
									<tr>
										<td></td>
										<td> MTA International:</td>
										<td>8:00-9:00</td>
										<td>9:05-17:25</td>
										<td>17:25-17:30</td>
									</tr>
									<tr>
										<td>Expandi</td>
										<td>Classe 1:</td>
										<td>8:00-10:55</td>
										<td>11:00-16:25</td>
										<td>16:25-16:30</td>
									</tr>
									<tr>
										<td></td>
										<td>Classe 2:</td>
										<td>8:00-10:55</td>
										<td>-</td>
										<td>11:00-16.30</td>
									</tr>
									<tr>
										<td>Fondi Telematico (MTF)</td>
										<td>Classe 2: Fondi Chiusi </td>
										<td>8:00-10:55</td>
										<td>-</td>
										<td>-</td>
									</tr>
									<tr>
										<td></td>
										<td>Classe 3: Investment Companies</td>
										<td>-</td>
										<td>-</td>
										<td>-</td>
									</tr>
									<tr>
										<td>Covered Warrant Telematico</td>
										<td>Covered Warrant:</td>
										<td>-</td>
										<td>9:05 - 17:25</td>
										<td>-</td>
									</tr>
								</tbody>
							</table>
							<table cellpadding="0" cellspacing="0" data-toggle="table" id="tableOrari2">
								<thead>
									<tr>
										<th data-field="mercato">Mercato Italia</th>
										<th>Tipo Titolo</th>
										<th>Asta di Apertura</th>
										<th>Continua</th>
									</tr>
								</thead>
								<tboby>
									<tr>
										<td>Obbligazioni e Titoli di Stato</td>
										<td>Btp, Cct, Ctz, Bot:</td>
										<td>08:00-09:30</td>
										<td>09:40-17:30</td>
									</tr>
									<tr>
										<td></td>
										<td>Obbligazioni denominate in euro e in valuta diversa dall'euro:</td>
										<td>08:00-10:00</td>
										<td>10:10-17:30</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>

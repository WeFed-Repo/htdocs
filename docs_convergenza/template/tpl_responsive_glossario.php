<h2>Glossario</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi aut quaerat nobis praesentium provident voluptas atque. Saepe dolorem animi eum aperiam labore ut numquam. Illum accusamus dignissimos laudantium libero ullam.</p>

<script type="text/javascript">
	// Esempio glossario dinamico in base ai contenuti
	var gloLetters = ("ABCDEFGHIJKLMNOPQRSTUVWXYZ").split("");
	var gloLetterShow = function () {
			$("#glossario .glossarioSX li").removeClass("on");
			var letter = $(this).attr("data-letter");
			if (letter == "tutti"){
				$(".lettera").show();
			}
			else
			{
				$("#glossario .glossarioDX .lettera").hide();
				$("#lettera"+letter).show();
			}
			$(this).parents("li").addClass("on");

		}
	$(function(){

		/* Inizializzazione glossario */
		var gloList = $("<ul>").addClass("ben");

		$.each(gloLetters,function(i,v){
			var letter = $("<li>");
			if ($("#lettera"+v).length>0) {
				var letterlink = $("<a>").attr("data-letter",v).html(v).click(gloLetterShow);
				letter.append(letterlink);
			}
			else
			{
				letter.html(v);
				letter.addClass("off");
			}
			gloList.append(letter);
		});
		// Appende il "tutti"
		gloList.append($("<li>").append($("<a>").attr("data-letter","tutti").html("Tutti").click(gloLetterShow)));

		// Attiva la prima lettera disponibile tramite trigger
		$("#glossario .glossarioSX").empty().append(gloList);
		//$("#glossario .glossarioSX a").eq(0).trigger("click")
		$("#glossario").removeClass("loading");

	});
</script>

<?php
$data = array();
$data['A'] = array(

	array("title"=>"A revoca o cancellazione",
	"text"=>"GOOD TILL CANCELLED<BR>Tipo di contratto di compravendita di titoli, attraverso un intermediario, che perde validit&agrave; al momento della sua esecuzione o dell'annullamento da parte del cliente.",),


	array("title"=>"A rischio",
	"text"=>"AT RISK<BR>Connessa all'esercizio di un'attivit&agrave;, ad un titolo o ad un credito, indica l'eventualit&agrave; di un effetto contrario ad un certo andamento ipotizzato che si traduce in una perdita o in un mancato guadagno.",),


	array("title"=>"A vista",
	"text"=>"AT SIGHT<BR>Un titolo &egrave; pagabile at sight se &egrave; sufficiente la sua presentazione al debitore per poter ricevere il denaro oggetto della prestazione.",),


	array("title"=>"Aaa",
	"text"=>"AAA<BR>American Accountant Association. Associazione americana per la contabilit&agrave;.",),


	array("title"=>"Abbandonare il premio",
	"text"=>"ABANDON THE CALL/PUT PREMIUM <BR>Scioglimento di un contratto di acquisto o vendita di titoli a premio call o put da parte di un investitore.",),


	array("title"=>"Accantonamento",
	"text"=>"PROVISION<BR>Posta passiva del bilancio destinata a coprire perdite o oneri certi e specifici, allorch&eacute; indeterminati quanto all'ammontare o al tempo.",),


	array("title"=>"Accelerazione degli utili",
	"text"=>"EARNINGS MOMENTUM<BR>Indica l'aumento di valore degli utili nel corso del tempo relativo ad ogni azione. Ha come conseguenza l'aumento di prezzo del titolo.",),


	array("title"=>"Accertamento di imposta",
	"text"=>"TAX ASSESSMENT<BR>Atto o procedimento con cui l'autorit&agrave; fiscale determina la base imponibile ai fine della liquidazione del debito d'imposta.",),


	array("title"=>"Accesso remoto",
	"text"=>"REMOTE ACCESS<BR>Possibilit&agrave; offerta a un operatore di accedere direttamente a un sistema di pagamento situato in una localit&agrave; diversa da quella in cui l'operatore stesso &egrave; fisicamente presente.",),


	array("title"=>"Accettazione bancaria",
	"text"=>"BANKER'S ACCEPTANCE<BR>Cambiale tratta messa in circolazione da parte del traente per reperire fondi sul mercato finanziario. L'intervento della banca come accettante serve a garantire l'acquirente della cambiale della solvibilit&agrave; dell'emittente.",),


	array("title"=>"Accodamento",
	"text"=>"QUEUING<BR>Prassi relativa alla regolazione di un pagamento, che viene sospesa in attesa del rientro della posizione debitoria del partecipante.",),


	array("title"=>"Acconto sul dividendo",
	"text"=>"INTERIM DIVIDEND<BR>E' la possibilit&agrave;, contemplata dal codice civile, di anticipare agli azionisti un dividendo sugli utili previsti dell'esercizio, rispetto alla normale distribuzione annuale.",),


	array("title"=>"Accordo di collocamento",
	"text"=>"SELECTED DEALER AGREEMENT<BR>In un'operazione di collocamento di titoli presso il pubblico, &egrave; l'accordo tra banche che stabilisce le condizioni dell'operazione e la spartizione delle quote.",),


	array("title"=>"Accordo di sottoscrizione",
	"text"=>"UNDERWRITING AGREEMENT<BR>Contratto che viene sottoscritto fra la societ&agrave; che emette nuovi titoli e la banca d'investimento che guida il consorzio di collocamento. In esso sono indicate le condizioni generali dell'emissione.",),


	array("title"=>"Accordo fra sottoscrittori",
	"text"=>"AGREEMENT AMONG UNDERWRITERS<BR>Accordo che stabilisce le condizioni di un'operazione di collocamento di titoli di nuova emissione tra la societ&agrave; di emissione e la banca d'investimento.",),


	array("title"=>"Accordo generale di finanziamento",
	"text"=>"GENERAL AGREEMENT TO BORROW (GAB)<BR>Intercorre tra i paesi del gruppo dei dieci e il Fondo Monetario Internazionale ed attiene ad un finanziamento nella valuta nazionale da parte dei paesi a favore del Fondo.",),


	array("title"=>"Accumulazione",
	"text"=>"ACCUMULATION<BR>Si riferisce agli utili non distribuiti come dividendi e aggiunti ai mezzi propri della societ&agrave;.",),


	array("title"=>"Acid test",
	"text"=>"ACID TEST<BR>Indicatore di bilancio. Si ricava dal rapporto tra il totale di cassa, i crediti a breve, i titoli liquidabili immediatamente e il totale delle passivit&agrave; correnti, viene utilizzato per determinare la capacit&agrave; di un'impresa di pagare i propri debiti.",),


	array("title"=>"Acquisizione con indebitamento",
	"text"=>"LEVERAGE BUYOUT<BR>Acquisto di un'azienda finanziato in gran parte ricorrendo a capitale di prestito. Il debito viene solitamente rimborsato con i futuri utili e/o con la vendita di parte dell'attivo patrimoniale.",),


	array("title"=>"Acquisti con margine",
	"text"=>"BUYING ON MARGIN<BR>E' l'acquisto di titoli da parte di un soggetto, garantito da titoli di sua propriet&agrave;. Questi vengono depositati dal proprietario presso un intermediario, anche in quantit&agrave; corrispondente soltanto ad una parte dell'ammontare dell'operazione, e adeguati periodicamente alle condizioni di mercato.",),


	array("title"=>"Acquisto a termine",
	"text"=>"BUYING FORWARD <BR>Contratto di acquisto di un bene, frequentemente valuta, in cui la firma viene rinviata a data futura, in modo che l'acquirente entri in possesso del suddetto bene solamente alla scadenza e alle condizioni stabilite alla stipula del contratto.",),


	array("title"=>"Acquisto di chiusura",
	"text"=>"CLOSING PURCHASE <BR>Acquisto di uno strumento derivato (future od option) avente le stesse caratteristiche di un altro venduto al fine di annullare gli impegni e gli obblighi in corso (relativi a quest'ultimo).",),


	array("title"=>"Ad intensita' di capitale",
	"text"=>"CAPITAL INTENSIVE<BR>Imprese in cui si utilizzano per la maggior parte immobilizzazioni per lo svolgimento del processo produttivo, e nelle quali il ruolo e l'importanza della mano d'opera risulta secondario.",),


	array("title"=>"Adeguatezza patrimoniale",
	"text"=>"CAPITAL ADEQUACY <BR>Capacit&agrave; di un'impresa nel saper affrontare momenti gestionali sfavorevoli, come perdite operative o svalutazioni nelle immobilizzazioni, mediante i mezzi propri.",),


	array("title"=>"Adr",
	"text"=>"ADR<BR>American depositary receipts. Ricevute di deposito di titoli azionari esteri quotati a Wall Street. Permettono ai loro possessori di avvalersi di tutti i diritti dell'azionista, pur non ricevendo materialmente il titolo, in particolare la riscossione di dividendi e l'ottenimento di eventuali capital gains.",),


	array("title"=>"Aggiotaggio",
	"text"=>"AGIOTAGE<BR>E' un'operazione proibita dalla legge n. 157/1992 con la quale si provoca artificiosamente un rialzo o un ribasso delle quotazioni con la divulgazione di notizie false e tendenziose.",),


	array("title"=>"Aggiudicazione",
	"text"=>"ALLOTMENT<BR>La quota di titoli, facenti parte di un'emissione, che viene attribuita a un soggetto che ha aderito alla sottoscrizione.",),


	array("title"=>"Aibd",
	"text"=>"AIBD<BR>Association of International Bond Dealers. Associazione composta da circa cinquecento dealers di trenta differenti nazioni, esperti in obbligazioni, il cui fine &egrave; quello di discutere le procedure di funzionamento del mercato secondario.",),


	array("title"=>"Al meglio",
	"text"=>"AT BEST<BR>E' l'ordine di acquistare o di vendere un bene di investimento sul mercato alle migliori condizioni possibili nel momento in cui viene dato l'ordine.",),


	array("title"=>"Al portatore",
	"text"=>"BEARER<BR>Dicesi di un titolo che garantisce la piena titolarit&agrave; a chi lo possiede.",),


	array("title"=>"Alfa",
	"text"=>"ALPHA<BR>Rendimento di un titolo espresso sotto forma di coefficiente. Non dipende dall'andamento del titolo sul mercato.",),


	array("title"=>"Aliquota di imposta",
	"text"=>"TAX RATE <BR>Valore percentuale da applicare alla base imponibile per determinare l'imposta o la tassa dovuta.",),


	array("title"=>"Alla pari",
	"text"=>"AT PAR<BR>Relativo ad un'opzione, indica che il prezzo di mercato del bene o del valore mobiliare sottostante &egrave; uguale al prezzo di esercizio del diritto di compravendita.",),


	array("title"=>"Allentamento monetario",
	"text"=>"EASY MONEY<BR>Azione di politica economica che tende ad aumentare la liquidit&agrave; del sistema economico.",),


	array("title"=>"Amex",
	"text"=>"AMERICAN STOCK EXCHANGE<BR>E' la seconda borsa valori statunitense, in essa vengono scambiati principalmente titoli di piccole e medie societ&agrave;.",),


	array("title"=>"Amministratore delegato, presidente",
	"text"=>"CHIEF EXECUTIVE OFFICER<BR>Soggetto a capo della struttura esecutiva di un'impresa, grazie alla sua appartenenza al consiglio d'amministrazione o della delega ricevuta da quest'ultimo.",),


	array("title"=>"Ammortamento",
	"text"=>"AMORTIZATION<BR>Ripartizione del costo di un investimento pluriennale lungo tutto il periodo di utilizzo. Con ammortamento si definisce anche il rimborso di un prestito obbligazionario da parte dell'emittente, nel rispetto di tempi e delle condizioni previste dal regolamento di emissione del prestito.",),


	array("title"=>"Ammortamento a quote costanti",
	"text"=>"STRAIGHT LINE DEPRECATION<BR>Procedimento di ripartizione dei costi pluriennali mediante quote annue costanti.",),


	array("title"=>"Ammortamento accelerato",
	"text"=>"ACCELERATED DEPRECIATION<BR>Pratica contabile che permette di distribuire il costo di un'immobilizzazione in un periodo di tempo pi&ugrave; breve di quello abituale, per ottenere vantaggi fiscali.",),


	array("title"=>"Analisi costi benefici",
	"text"=>"COST BENEFIT ANALYSIS<BR>Metodo impiegato per valutare la convenienza economica di una determinata scelta operativa.",),


	array("title"=>"Analisi degli scenari",
	"text"=>"SCENARIO ANALYSIS<BR>Analisi di valutazione prospettica di un istituto di credito. Ipotizza la redditivit&agrave; attesa in relazione alle differenti situazioni prospettate.",),


	array("title"=>"Analisi di portafoglio",
	"text"=>"PORTFOLIO ANALYSIS<BR>Valutazione del complesso di attivit&agrave; e passivit&agrave; finanziarie detenute da un operatore, allo scopo di ottimizzarne la configurazione rischio-rendimento in funzione delle preferenze del titolare.",),


	array("title"=>"Analisi di sensitivita'",
	"text"=>"SENSITIVITY ANALYSIS<BR>Studia il rapporto che intercorre tra le grandezze economiche e le variabili aziendali, individuando cos&igrave; la relazione tra le due variabili.",),


	array("title"=>"Alla pari (2)",
	"text"=>"AT THE MONEY<BR>Un'opzione si dice at the money nel caso in cui il prezzo di mercato del bene oggetto del contratto &egrave; uguale al prezzo di esercizio del diritto (il premio &egrave; pagato in anticipo). Esercitando l'opzione at the money, teoricamente, si ha la perdita del premio che equivale, in termini di risultato, all'abbandono a scadenza.",),


);
$data['B'] = array(

	array("title"=>"Back office",
	"text"=>"BACK OFFICE<BR>In una societ&agrave; finanziaria, il reparto che si interessa degli adempimenti informativi, contabili e amministrativi relativi alle operazioni effettuate dal proprio reparto operativo.",),


	array("title"=>"Backtesting",
	"text"=>"BACKTESTING<BR>Metodo per testare la validit&agrave; dei modelli VaR. E' in genere effettuato comparando le stime ottenute con il VaR con i risultati effettivamente o teoricamente realizzati nelle giornate di trading",),


	array("title"=>"Banca",
	"text"=>"BANK<BR>Istituzione finanziaria che espleta una o pi&ugrave; funzioni relative a depositi, investimenti, prestiti e altri servizi finanziari nei confronti della clientela. Si distingue tra commercial bank, che impiega le somme avute in deposito soprattutto in prestiti, e investment bank che utilizza gli stessi fondi operando nelle negoziazioni in titoli, per proprio conto o per conto dei clienti.",),


	array("title"=>"Banca agente",
	"text"=>"AGENT BANK<BR>Banca nominata da un consorzio di istituzioni creditizie per tutelare gli interessi dello stesso in operazioni comuni.",),


	array("title"=>"Banca al dettaglio",
	"text"=>"RETAIL BANKING<BR>Tradizionale attivit&agrave; bancaria la cui principale caratteristica &egrave; l'avere una clientela vasta ed eterogenea e svolgere principalmente un elevato numero di operazioni il cui ammontare unitario &egrave; medio-piccolo.",),


	array("title"=>"Banca all'ingrosso",
	"text"=>"WHOLESALE BANKING<BR>Banca che opera prevalentemente con operatori istituzionali, svolgendo operazioni creditizie di elevato ammontare. Si contrappone alla banca retail.",),


	array("title"=>"Banca capofila",
	"text"=>"LEAD BANK<BR>Banca con funzioni di coordinamento di un gruppo di istituzioni finanziarie, che partecipano a un prestito sindacato o a un consorzio di collocamento di un'emissione di titoli.",),


	array("title"=>"Banca centrale",
	"text"=>"CENTRAL BANK<BR>Istituzione finanziaria pubblica avente una serie di funzioni legate alla politica monetaria di una nazione, tra cui l'emissione della cartamoneta, la regolamentazione delle condizioni monetarie e di esercizio del credito, la gestione, pi&ugrave; o meno stretta, della propria divisa nei rapporti con quelle estere.",),


	array("title"=>"Banca commerciale",
	"text"=>"COMMERCIAL BANK <BR>Si tratta di un ente creditizio sostanzialmente analogo alle aziende di credito italiane contemplato dalla legislazione americana. Pu&ograve; compiere operazioni di finanziamento, come per esempio contrarre depositi alla clientela, ma non le &egrave; consentito investire in titoli, pur offrendo altri servizi che sono assimilabili a quelli di una banca al dettaglio.",),


	array("title"=>"Banca d'investimento",
	"text"=>"INVESTMENT BANK<BR>Le banche d'investimento agiscono come intermediari fra le societ&agrave; emittenti di titoli e gli investitori. Le loro attivit&agrave; principali sono la sottoscrizione ed il collocamento di titoli, il trading sui titoli di propriet&agrave; e la consulenza alla propria clientela. Il capitale d una banca di investimento viene investito in operazioni che tendenzialmente frutteranno rendimenti elevati..",),


	array("title"=>"Banca dei regolamenti internazionali (bri)",
	"text"=>"BANK FOR INTERNATIONAL SETTLEMENTS (BIS)<BR>Organismo internazionale con sede a Basilea, fondato nel 1930 in attuazione dell'Accordo dell'Aja dai governi di Belgio, Francia, Germania, Italia e Regno Unito. Le sue funzioni riguardano l'assistenza finanziaria alle istituzioni monetarie nazionali e la promozione di regole di carattere generale che riguardano il sistema bancario mondiale.",),


	array("title"=>"Banca di riferimento",
	"text"=>"REFERENCE BANK<BR>In un prestito consorziale, banca i cui tassi vengono presi come riferimento per fissare il tasso di interesse del prestito.",),


	array("title"=>"Banca di risparmio",
	"text"=>"THRIFT INSTITUTION<BR>Istituzione bancaria esistente negli Stati Uniti assimilabile per le sue caratteristiche alle casse di risparmio italiane. La loro principale funzione consiste nella raccolta e incentivazione del risparmio privato, nella concessione di prestiti al consumo nonch&eacute; nell'erogare mutui ipotecari per l'acquisto della casa.",),


	array("title"=>"Banca elettronica",
	"text"=>"ELECTRONIC BANKING<BR>Metodo di pagamento in cui le somme vengono trasferite tramite ordini dati elettronicamente, in assenza di una effettiva movimentazione di fondi.",),


	array("title"=>"Banca europea per gli investimenti (bei)",
	"text"=>"EUROPEAN INVESTMENT BANK (EIB)<BR>Organismo finanziario fondato nel 1957 con il compito di contribuire finanziariamente allo sviluppo regionale equilibrato dell'Unione Europea attraverso la concessione di prestiti per la realizzazione di progetti di investimento.",),


	array("title"=>"Banca full service",
	"text"=>"FULL SERVICE BANK <BR>Ente creditizio in gradi di offriere alla propria clientela tutti i servizi tipici di organismi bancari: dalla custodia dei titoli alla remunerazione dei depositi ed al trasferimento di fondi.",),


	array("title"=>"Banca internazionale per la ricostruzione e lo sviluppo",
	"text"=>"INTERNATIONAL BANK FOR RECONTRUCTION AND DEVELOPMENT<BR>Detta anche World Bank. Istituzione creditizia intergovernativa istituita nel 1945 unitamente all'IMF. Attualmente il suo obiettivo &egrave; sostenere lo sviluppo economico mondiale. La banca finanzia la propria attivit&agrave; mediante la contribuzione dei paesi membri e l'emissione di prestiti obbligazionari.",),


	array("title"=>"Banca mondiale",
	"text"=>"WORLD BANK<BR>Vedi International Bank for Reconstruction and Development",),


	array("title"=>"Banca universale",
	"text"=>"UNIVERSAL BANK<BR>Istituto di credito abilitato ad eseguire simultaneamente l'attivit&agrave; di intermediazione creditizia e in valori mobiliari, nonch&eacute; quella di assunzione di partecipazioni industriali.",),


	array("title"=>"Bancabilita'",
	"text"=>"BANKABILITY<BR>Termine usato per indicare la sussistenza di tutti gli elementi che rendono un titolo valido per l'incasso, lo sconto o qualsiasi altra forma di accredito presso una banca: integrit&agrave;, scadenza, bont&agrave; delle firme, ecc.",),


	array("title"=>"Banconota",
	"text"=>"BANK NOTE<BR> Strumento di pagamento a corso legale creato dall'istituto di emissione di un paese.",),


	array("title"=>"Bandiera",
	"text"=>"FLAG<BR> In analisi tecnica, &egrave; la configurazione grafica in cui il prezzo del bene oscilla diverse volte tra due livelli di supporto e resistenza oppure tra due linee di tendenza.",),


	array("title"=>"Base",
	"text"=>"BASIS <BR>Nel mercato dei futures, indica la differenza tra il prezzo di un titolo a pronti e il prezzo del future sullo stesso titolo.",),


	array("title"=>"Base imponibile",
	"text"=>"TAX BASE<BR>Il valore o grandezza di riferimento ai fini della definizione dell'imposizione fiscale.",),


	array("title"=>"Base monetaria",
	"text"=>"MONETARY BASE<BR>Termine usato per indicare l'insieme delle riserve della banca centrale e della valuta in circolazione in una nazione che sta alla base del processo di moltiplicazione del credito e dei depositi.",),


	array("title"=>"Base post-tassazione",
	"text"=>"AFTERTAX BASIS<BR>Metodo che deve essere utilizzato per confrontare il rendimento ottenibile da investimenti sottoposti a discipline fiscali differenti.",),


	array("title"=>"Bce",
	"text"=>"ECB<BR>Banca centrale europea, ad essa &egrave; affidato il compito di stabilire la politica monetaria dei paesi aderenti all'Unione Monetaria Europea (EMU).",),


	array("title"=>"Bene economico",
	"text"=>"GOOD<BR>Qualsiasi oggetto destinato a soddisfare un bisogno, disponibile in forma limitata. Vedi consumer goods.",),


	array("title"=>"Benefici dell'interscambio",
	"text"=>"GAIN FROM TRADE<BR>Possibilit&agrave; di riallocazione di risorse attraverso la partecipazione al sistema di commercio internazionale.",),


	array("title"=>"Beneficiario",
	"text"=>"PAYEE<BR>In un'operazione di pagamento &egrave; il destinatario finale della somma di denaro trasferita.",),


	array("title"=>"Beni di consumo",
	"text"=>"CONSUMER GOODS<BR>Beni che soddisfano direttamente un bisogno, in contrapposizione ai beni strumentali.",),


	array("title"=>"Beni di consumo durevoli",
	"text"=>"CONSUMER DURABLES<BR>Beni che non esauriscono la loro utilit&agrave; in un solo atto di consumo, ma soddisfano un determinato bisogno per un periodo di tempo relativamente lungo.",),


	array("title"=>"Beni di consumo non durevoli",
	"text"=>"NON-DURABLE GOODS<BR>Beni di consumo che esauriscono la loro utilit&agrave; all'atto del loro impiego.",),


	array("title"=>"Bibor",
	"text"=>"BIBOR<BR>E' il tasso d'interesse di riferimento dei depositi interbancari espressi in franchi belga, sigla di bruxelles inter bank offered rate.",),


	array("title"=>"Bilancia commerciale",
	"text"=>"TRADE BALANCE<BR>Nell'ambito della Bilancia dei Pagamenti di una nazione, sezione che registra all'attivo tutti gli introiti che derivano dalle esportazioni, ed al passivo tutti gli esborsi relativi alle importazioni.",),


	array("title"=>"Bilancia dei pagamenti",
	"text"=>"BALANCE OF PAYMENTS<BR>Documento di contabilit&agrave; economica in cui sono annotate le transazioni che hanno avuto luogo fra una nazione e tutto il resto del mondo. E' costituita da una bilancia della partite correnti, da una bilancia dei movimenti dei capitali e da una bilancia dei movimenti monetari. In ognuna di queste sezioni sono rispettivamente annotati il saldo delle importazioni e delle esportazioni, il saldo delle transazioni finanziarie ed il regolamento delle transazioni reali.",),


	array("title"=>"Bilancio",
	"text"=>"FINANCIAL STATEMENT <BR>Documento che riassume la struttura e l'attivit&agrave; gestionale di una societ&agrave;. Si suddivide in tre parti: stato patrimoniale, conto economico e nota integrativa. Nello stato patrimoniale sono riportati in modo analitico le attivit&agrave;, le passivit&agrave; e i mezzi propri, mentre nel conto economico &egrave; indicato il risultato dell'attivit&agrave; di esercizio, derivata dalla comparazione tra costi e ricavi dello stesso. La nota integrativa riassume i criteri di valutazione utilizzati.",),


	array("title"=>"Bilancio annuale",
	"text"=>"ANNUAL REPORT <BR>Documento pubblicato annualmente da tutte le societ&agrave; per azioni. E' suddiviso in Relazione sulla gestione, Stato Patrimoniale, Conto Economico e Nota Integrativa.CADUTA<BR></B>DIP<BR>Caso in cui i prezzi di un titolo, per un breve intervallo di tempo, non proseguono l'andamento rialzista, ma scendono in misura pi&ugrave; o meno evidente.",),


);
$data['C'] = array(

	array("title"=>"Calendar spread",
	"text"=>"CALENDAR SPREAD<BR>E' un'operazione di vendita e di acquisto contemporaneamente di differenti strumenti derivati, di carattere strettamente speculativo.",),


	array("title"=>"Call",
	"text"=>"CALL<BR>Viene definita opzione Call il tipo di contratto che d&agrave; al compratore il diritto, ma non l'obbligo, di acquistare a condizioni fissate precedentemente alla data di scadenza o entro tale data, una certa quantit&agrave; di titoli. Viene chiamata Call anche l'opzione implicita, concessa all'emittente di un titolo a reddito fisso, di rimborsare lo stesso prima della scadenza, secondo le condizioni di mercato. Il termine Call viene anche utilizzato per identificare la richiesta di rimborso immediato avanzata dal finanziatore nei confronti del debitore, nel caso in cui quest'ultimo non abbia tenuto fede agli impegni contrattuali. Call si riferisce, infine, anche alla richiesta fatta dall'intermediario al cliente riguardante la necessit&agrave; di integrare il capitale depositato come margine (Margin) in virt&ugrave; dei cambiamenti avvenuti nei prezzi di mercato.",),


	array("title"=>"Cambi semiflessibili",
	"text"=>"DIRTY FLOATING<BR>Denominazione non tecnica per definire un regime di fluttuazione dei tassi di cambio delle divise in cui le autorit&agrave; monetarie dei diversi Paesi intervengono per guidare l'andamento delle quotazioni.",),


	array("title"=>"Cambiale tratta",
	"text"=>"BILL OF EXCHANGE<BR>Titolo di credito all'ordine con cui un soggetto (traente) ordina incondizionatamente a un altro soggetto (trattario) di pagare una certa somma a un terzo (beneficiario) a vista a una determinata data futura.",),


	array("title"=>"Cambio a termine",
	"text"=>"FORWARD EXCHANGE RATE<BR>Rapporto di cambio di due divise per consegna differita.",),


	array("title"=>"Cambio fisso",
	"text"=>"FIXED EXCHANGE RATE<BR>In un regime di cambi fissi, le banche centrali sono pronte ad acquistare e vendere le loro valute ad un prezzo fisso in termini di altre valute. I principali paesi hanno operato in un sistema di cambi fissi dalla fine della seconda guerra mondiale fino al 1973.",),


	array("title"=>"Campione",
	"text"=>"SAMPLE<BR>Uno o pi&ugrave; individui rappresentativi di una popolazione e destinati a fornire un'informazione sulla popolazione medesima.",),


	array("title"=>"Cancellazione",
	"text"=>"CHARGE OFF <BR>Eliminazione di determinate voci di bilancio non pi&ugrave; fedeli alla situazione di un'impresa.",),


	array("title"=>"Cancellazione dal listino",
	"text"=>"DELISTING<BR>Cancellazione dal listino di borsa di una societ&agrave; per evidente mancanza delle condizioni essenziali alla quotazione di una societ&agrave; in borsa.",),


	array("title"=>"Canone di locazione",
	"text"=>"RENT<BR>Prestazione dovuta dal conduttore come corrispettivo del godimento della cosa locata.",),


	array("title"=>"Cap",
	"text"=>"CAP<BR>Clausola di contratto riguardante i mercati finanziari e dei mutui. Sancisce che il tasso d'interesse variabile di cui sar&agrave; caricato il beneficiario di un finanziamento non potr&agrave; superare un valore massimo fissato (tetto) nel momento dell'accensione dello stesso. Per usufruire di questo beneficio, il debitore paga una commissione aggiuntiva. In un prestito obbligazionario a tasso variabile di tipo Cap e Floor, il Cap &egrave; la soglia massima che pu&ograve; raggiungere il tasso d'interesse e il Floor la soglia minima.",),


	array("title"=>"Capacit&agrave;' ottimale",
	"text"=>"OPTIMUM CAPACITY<BR>Livello di produzione che ne minimizza il costo unitario.",),


	array("title"=>"Caparra",
	"text"=>"DOWN PAYMENT<BR>Quantit&agrave; di denaro consegnata da una delle parti di un contratto al momento della sua conclusione. Restituita o imputata alla prestazione dovuta in caso di adempimento, dovr&agrave; invece essere trattenuta in caso di inadempienza.",),


	array("title"=>"Capitale",
	"text"=>"CAPITAL<BR>Insieme dei beni economici a disposizione di diritto e di fatto del soggetto aziendale. In finanza, &egrave; costituito dal denaro e dai crediti di cui dispone una societ&agrave; per fronteggiare il rischio derivante dall'esercizio dell'attivit&agrave;.",),


	array("title"=>"Capitale azionario",
	"text"=>"CAPITAL STOCK<BR>Il capitale sociale rappresentato dalle azioni.",),


	array("title"=>"Capitale circolante",
	"text"=>"WORKING CAPITAL<BR>E' dato da: liquidit&agrave; immediate, disponibilit&agrave; a vista, liquidit&agrave; differite, disponibilit&agrave; non liquide (scorte). Rappresenta il volume dei fondi disponibili per finanziare la rotazione corrente dei fattori produttivi.",),


	array("title"=>"Capitale di rischio",
	"text"=>"RISK CAPITAL<BR>Mezzi impiegati al momento dell'istituzione di una societ&agrave; e successivamente attraverso l'attivit&agrave; di autofinanziamento.",),


	array("title"=>"Capitale netto",
	"text"=>"NET WORTH<BR>E' dato dalla differenza tra attivit&agrave; e passivit&agrave; di un'impresa e rappresenta la ricchezza di competenza dei possessori delle quote rappresentative del capitale. Chiamato anche net assets.",),


	array("title"=>"Capitale non ancora versato",
	"text"=>"UNCALLED CAPITAL<BR>Parte del capitale sociale sottoscritto che gli azionisti non sono ancora stati chiamati a versare. In Italia non pu&ograve; essere superiore a 7/10.",),


	array("title"=>"Capitale proprio",
	"text"=>"OWN CAPITAL<BR>Conferimenti iniziali apportati dal titolare o dai soci di un'attivit&agrave;, insieme agli utili non distribuiti decurtati delle eventuali perdite.",),


	array("title"=>"Capitale versato",
	"text"=>"PAID UP CAPITAL<BR>Parte del capitale sottoscritto effettivamente versato dagli azionisti.",),


	array("title"=>"Capitalizzare",
	"text"=>"CAPITALIZE<BR>Procedura contabile che consente di iscrivere un bene d'investimento preso in locazione tra i beni in possesso e il mutuo contratto per la locazione nelle passivit&agrave;. In matematica finanziaria, &egrave; la procedura che permette di trasferire nel futuro una somma disponibile in un dato momento grazie all'applicazione di un tasso d'interesse.",),


	array("title"=>"Capitalizzazione",
	"text"=>"CAPITALIZATION<BR>Riferito ad una societ&agrave; quotata in borsa e al suo valore derivato in un dato istante, &egrave; il prodotto della quotazione di borsa di quella societ&agrave; per il numero delle azioni esistenti.",),


	array("title"=>"Capm",
	"text"=>"CAPITAL ASSET PRICING MODEL<BR>Modello teorico di determinazione e valutazione del rendimento di un investimento, che pone in relazione la rischiosit&agrave; dell'investimento stesso con il risultato reddituale che se ne pu&ograve; ottenere.",),


	array("title"=>"Carta commerciale",
	"text"=>"COMMERCIAL PAPER <BR>Strumento negoziabile di mercato monetario, privo di garanzie reali, che viene emesso da imprese di alta qualit&agrave;, normalmente utilizzato per la copertura del fabbisogno di capitale circolante in durate generalmente incluse tra la settimana e dieci mesi.",),


	array("title"=>"Cartello",
	"text"=>"CARTEL<BR>Accordo tra imprese appartenenti allo stesso settore di attivit&agrave;, finalizzato a stabilire determinate condizioni di prezzo o di condotta, al fine di eliminare situazioni di concorrenza sleale.",),


	array("title"=>"Cash flow operativo",
	"text"=>"OPERATING CASH FLOW<BR>Attivit&agrave; monetaria relativa ad un determinato periodo d'impresa dato dall'utile netto pi&ugrave; gli ammortamenti.",),


	array("title"=>"Cassa di risparmio",
	"text"=>"SAVING BANK <BR>Istituzione creditizia la cui attivit&agrave; prevalente &egrave; costituita dalla raccolta di depositi a titolo di risparmio e dal loro conveniente collocamento.",),


	array("title"=>"Cassetta di sicurezza",
	"text"=>"SAFE DEPOSIT BOX<BR>Contenitore situato in locali blindati di una banca, dato in locazione da quest'ultima a un cliente affinch&eacute; esso possa custodirvi documenti e oggetti di valore con garanzia di segretezza e di integrit&agrave;.",),


	array("title"=>"Cause di risoluzione",
	"text"=>"EVENTS OF DEFAULT<BR>Sono le cause di risoluzione di un loan agreement (come il mancato rimborso di una rata capitali o interessi, cambiamenti nell'assetto societario del prenditore, ecc.), che oltre a risolvere il contratto obbligano il prenditore a rimborsare in anticipo gli importi ricevuti.",),


	array("title"=>"Cbot",
	"text"=>"CBOT<BR>E' la Borsa a termine di Chicago, letteralmente Chicago Board of Trade.",),


	array("title"=>"Cedola",
	"text"=>"COUPON<BR>Appendice cartacea annessa ad un titolo che consente la riscossione periodica degli interessi o dei dividendi della societ&agrave; di emissione.",),


	array("title"=>"Cedola alla pari",
	"text"=>"FULL COUPON BOND<BR>Titolo obbligazionario avente una cedola percentuale molto prossima ai rendimenti di mercato, il cui prezzo &egrave; quindi vicino al valore nominale (at par).",),


	array("title"=>"Certificato di deposito",
	"text"=>"CERTIFICATE OF DEPOSIT <BR>Emesso da un istituto di credito, &egrave; un titolo di credito che viene scontato sulla base del tasso di rendimento.",),


	array("title"=>"Certificato di mercato monetario",
	"text"=>"MONEY MARKET CERTIFICATE<BR>Certificato di deposito non negoziabile, con taglio minimo $ 10.000 e con interesse massimo non superiore a quello sui buoni del tesoro a sei mesi. Vengono emessi negli Stati Uniti da banche e casse di risparmio a fronte di depositi vincolati a sei mesi.",),


	array("title"=>"Certificato di partecipazione",
	"text"=>"PARTICIPATION LOAN <BR>Finanziamento effettuato da un gruppo di istituti di credito nei confronti di un unico soggetto.",),


	array("title"=>"Certificato di titoli a custodia",
	"text"=>"DEPOSITARY RECEIPT<BR>Titolo di credito negoziabile, rappresentativo di un dato numero di titoli azionari detenuti a custodia, &egrave; solitamente emesso da una banca",),


	array("title"=>"Chartista",
	"text"=>"CHARTIST<BR>Esperto nell'interpretazione e nell'analisi dei grafici rappresentativi dell'andamento di grandezze economiche.",),


	array("title"=>"Chiamata a margine",
	"text"=>"MARGIN CALL<BR>Relativo ad una transazione, &egrave; un versamento ulteriore richiesto ad un operatore di borsa a fronte di una maggiore esposizione.DATA DELL'OPERAZIONE <BR></B>DATE OF TRADE <BR>Giorno di esecuzione di una data operazione.",),


	array("title"=>"Caparra (2)",
	"text"=>"EARNEST MONEY<BR>Somma data in garanzia dell'esecuzione di un contratto che viene trattenuta nel caso di mancato adempimento.",),


);
$data['D'] = array(

	array("title"=>"Data di consegna",
	"text"=>"DELIVERY DATE<BR>Il giorno nel quale un contratto future deve essere eseguito. E' il giorno in cui il venditore deve consegnare i beni sottostanti al contratto future. Nel mercato dei cambi, il giorno in cui deve avvenire la consegna di un ammontare prefissato in divisa estera a un cambio fissato precedentemente.",),


	array("title"=>"Data di emissione",
	"text"=>"ISSUE DATE<BR>E' la data in cui viene emesso un prestito obbligazionario, a partire dalla quale iniziano a decorrere gli interessi sul titolo.",),


	array("title"=>"Data di inizio",
	"text"=>"DATED DATE<BR>E' il giorno dal quale si inizia a calcolare il rateo d'interesse su obbligazioni di nuova emissione.",),


	array("title"=>"Data di scadenza",
	"text"=>"DATE OF MATURITY<BR>Giorno in cui va estinto un debito, tramite il pagamento di capitale e interessi.",),


	array("title"=>"Data ex dividendo",
	"text"=>"EX DIVIDEND DATE<BR>Giorno nel quale un titolo viene quotato ex dividendo, non contenendo pi&ugrave; il diritto alla riscossione del dividendo. Negli Stati Uniti l'Ex dividend date &egrave; generalmente fissato in un girono che &egrave; circa tre settimane antecedente all'effettivo pagamento del dividendo.",),


	array("title"=>"Data spezzata",
	"text"=>"ODD DATE<BR>Nel mercato dei cambi, data di scadenza di un'operazione qualsiasi che non corrisponde a una delle scadenze comuni, trattate normalmente. Per esempio un periodo di 40 giorni, intermedio alle scadenze classiche di un mese e due mesi.",),


	array("title"=>"Data valuta",
	"text"=>"VALUE DATE<BR>Data di riferimento per il calcolo degli interessi.",),


	array("title"=>"Dax",
	"text"=>"DAX<BR>E' l'indice delle blue chips della Borsa di Francoforte. Si calcola su un paniere dei 30 titoli a maggiore capitalizzazione.",),


	array("title"=>"Dealer",
	"text"=>"DEALER<BR>Individuo o societ&agrave; che in nome e per conto proprio opera sul mercato finanziario fornendo quotazioni e impegnandosi a rispettare le applicazioni delle contropartite.",),


	array("title"=>"Debito",
	"text"=>"DEBT<BR>Obbligazione di pagamento che ha un soggetto nei confronti di un altro.",),


	array("title"=>"Debito a breve termine",
	"text"=>"SHORT TERM DEBT<BR>Finanziamenti aziendali che verranno rimborsati entro un anno dalla chiusura dell'esercizio. Nel bilancio rientrano nella voce delle passivit&agrave; correnti.",),


	array("title"=>"Debito ad autorimborso",
	"text"=>"SELF SUPPORTING DEBT<BR>Titolo obbligazionario che assicura il pagamento delle cedole e il rimborso finale del capitale tramite i proventi dall'attivit&agrave; economica che ha finanziato. Un esempio &egrave; dato dal pagamento periodico delle cedole di un titolo con proventi dell'esercizio di un'opera pubblica costruita per mezzo dei fondi derivanti dall'emissione del titolo stesso.",),


	array("title"=>"Debito esterno",
	"text"=>"EXTERNAL DEBT<BR>Debito di un paese verso il resto del mondo.",),


	array("title"=>"Debito non garantito",
	"text"=>"UNSECURED DEBT<BR>Debito non assistito da alcuna garanzia specifica.",),


	array("title"=>"Debito privilegiato",
	"text"=>"SENIOR DEBT<BR>Debito che in caso di liquidazione della societ&agrave; concorre alla ripartizione dell'attivo netto in via prioritaria. Ad esempio prestiti assistiti da garanzia ipotecaria.",),


	array("title"=>"Debito pro capite",
	"text"=>"PER CAPITA DEBT<BR>E' l'ammontare totale del debito emesso da un'autorit&agrave; pubblica diviso per la popolazione residente.",),


	array("title"=>"Debito pubblico",
	"text"=>"PUBLIC DEBT<BR>Insieme delle passivit&agrave; assunte dalle amministrazioni pubbliche.",),


	array("title"=>"Debito subordinato",
	"text"=>"SUBORDINATED DEBT<BR>Debito che in caso di liquidazione di un'impresa concorre alla distribuzione del patrimonio netto in via subordinata rispetto agli altri.",),


	array("title"=>"Declassamento",
	"text"=>"DOWNGRADING<BR>Revisione, in senso negativo, operata da una societ&agrave; di rating del grado di affidabilit&agrave; creditizia attribuito a un mutuatario, ad una societ&agrave; o ad un titolo.",),


	array("title"=>"Deficit di bilancio",
	"text"=>"DEFICIT NET WORTH <BR>Si verifica quando il passivo di bilancio supera l'attivo.",),


	array("title"=>"Deficit federale",
	"text"=>"FEDERAL DEFICIT<BR>Il deficit dell'autorit&agrave; federale statunitense, che viene solitamente soddisfatto tramite l'emissione di titoli a breve, medio e lungo termine.",),


	array("title"=>"Deflatore",
	"text"=>"DEFLATOR<BR>Indice della variazione dei prezzi che permette di separare la componente di crescita di un aggregato economico dovuta a fattori reali dalla componente dovuta invece a fattori monetari.",),


	array("title"=>"Deflazione",
	"text"=>"DEFLATION<BR>Indica il fenomeno inverso rispetto all'inflazione. E' la tendenza dei prezzi a diminuire.",),


	array("title"=>"Delta",
	"text"=>"DELTA<BR>Nelle opzioni, si tratta del fattore numerico che misura la variazione di prezzo dell'opzione causata da una variazione unitaria dello strumento sottostante. Se ad esempio un'opzione possiede un delta di 0,5 ed il prezzo del sottostante vale 10 lire, quello dell'opzione salir&agrave; di 5 lire.",),


	array("title"=>"Denaro",
	"text"=>"BID<BR>E' il prezzo che un operatore di mercato &egrave; disponibile a pagare per comprare una divisa, un titolo, uno strumento finanziario.",),


	array("title"=>"Denaro e lettera",
	"text"=>"BID AND ASKED<BR>Quotazione completa di un operatore (market maker), composta da un prezzo di acquisto e un prezzo di vendita. la differenza tra i due prezzi &egrave; definita \"spread\".",),


	array("title"=>"Depositario",
	"text"=>"DEPOSITARY<BR>Si intende un'istituzione finanziaria che, attraverso il pagamento di una commissione, esegue le operazioni di custodia di titoli appartenenti a un diverso soggetto.",),


	array("title"=>"Deposito",
	"text"=>"DEPOSIT<BR>Capitale che un ente creditizio mette a disposizione e per il quale viene corrisposto un interesse. Il deposito pu&ograve; essere anche rappresentato da un generico bene dato in consegna ad un soggetto o da titoli gestiti da un intermediario di Borsa.",),


	array("title"=>"Deposito a vista",
	"text"=>"SIGHT DEPOSIT<BR>Deposito convertibile in danaro senza termine di preavviso e liberamente trasferibile mediante assegno, giroconto o analogo ordine di pagamento.",),


	array("title"=>"Deposito derivato",
	"text"=>"DERIVATIVE DEPOSIT<BR>Deposito generato da un prestito bancario.",),


	array("title"=>"Deposito fiduciario",
	"text"=>"FIDUCIARY DEPOSIT<BR>Fondi collocati in gestione fiduciaria presso una banca, la quale provvede a investirli a sua discrezione, ma per conto e a rischio del depositante.",),


	array("title"=>"Deposito forward forward",
	"text"=>"FORWARD FORWARD DEPOSIT<BR>Contratto di deposito a termine negoziato per una data futura. E' un sistema per coprire un fabbisogno futuro alle condizioni attuali, permettendo quindi di ridurre dal rischio di tasso di interesse.",),


	array("title"=>"Deposito indicizzato",
	"text"=>"MARKET INDEX DEPOSIT<BR>Strumento di mercato monetario (certificato di deposito o deposito vincolato) il cui rendimento &egrave; legato all'andamento di un indice economico o finanziario predeterminato.",),


	array("title"=>"Deposito intebancario",
	"text"=>"INTERBANK DEPOSIT<BR>Conto aperto da una banca a un altro istituto di credito.",),


	array("title"=>"Deposito overnight",
	"text"=>"OVERNIGHT DEPOSIT<BR>Deposito interbancario con scadenza a ventiquattro ore e regolamentato nel giorno stesso.",),


	array("title"=>"Deposito tom next",
	"text"=>"TOM NEXT DEPOSIT<BR>Deposito interbancario con scadenza a ventiquattro ore, ma con regolamento il giorno successivo",),


	array("title"=>"Deposito vincolato",
	"text"=>"TIME DEPOSIT<BR>Deposito bancario in cui il cliente &egrave; obbligato a dare un preavviso alla banca per effettuare dei prelievi.",),


	array("title"=>"Deprezzamento",
	"text"=>"DEPRECIATION <BR>Con deprezzamento si intende la perdita di valore di una moneta nei confronti di un'altra alla quale &egrave; legata da un rapporto di cambio flessibile.",),


	array("title"=>"Deregulation",
	"text"=>"DEREGULATION<BR>Processo di riduzione dei vincoli legali all'esercizio di una determinata attivit&agrave;, effettuata allo scopo di ottenere una maggior efficienza del mercato.",),


	array("title"=>"Derivati lineari",
	"text"=>"LINEAR DERIVATIVES<BR>Strumenti derivati i cui valori cambiano proporzionalmente ai cambiamenti dell'attivvit&agrave; sottostante. Esempi comuni sono i futures, i forwards e gli swaps. Tra i non lineari troviamo le opzioni, i cui prezzi cambiano in modo non lineare con quelli dell'attivit&agrave; sottostante.",),


	array("title"=>"Desk",
	"text"=>"DESK Postazione operativa di una qualsiasi istituzione finanziaria, dalla quale vengono inviati gli ordini di compravendita su un determinato gruppo di beni di investimento (titoli, materie prime, valute, ecc.).",),


	array("title"=>"Destagionalizzazione",
	"text"=>"SAESONAL ADJUSTMENT<BR>Procedimento statistico con cui si depura una serie storica dall'influsso di fattori periodici, al fine di evidenziare l'andamento tendenziale del fenomeno osservato.",),


	array("title"=>"Dichiarazione di cessazione",
	"text"=>"TERMINATION STATEMENT <BR>Dichiarazione rilasciata da un istituto di credito nella quale si attesta che un prestito &egrave; stato totalmente rimborsato, e perci&ograve; le garanzie prestate dal debitore possono essere liberate.",),


	array("title"=>"Differenze salariali",
	"text"=>"WAGE DIFFERENTIAL<BR>Disparit&agrave; nei livelli retributivi medi fra differenti categorie di lavoratori.",),


	array("title"=>"Differenziale a termine",
	"text"=>"FORWARD DIFFERENTIAL<BR>Scarto positivo (premio) o negativo (sconto) tra quotazione a termine e quella a pronti, di uno strumento finanziario.",),


	array("title"=>"Differenziale di emissione",
	"text"=>"UNDERWRITING SPREAD<BR>Margine di guadagno delle banche di investimento sull'operazione di collocamento di titoli di nuova emissione, rappresentato dalla differenza tra il prezzo garantito agli investitori e quello che la societ&agrave; emittente offre alle banche stesse.",),


	array("title"=>"Differenziale di rendimento",
	"text"=>"YIELD SPREAD<BR>Scarto di regola espresso in termini percentuali o in punti base, fra i rendimenti di due strumenti finanziari comparabili.",),


	array("title"=>"Differenziale di rendimento non coperto",
	"text"=>"UNCOVERED YIELD RATE DIFFERENTIAL<BR>Scarto fra il rendimento di differenti strumenti che non tiene dello sconto o premio della quotazione a pronti rispetto a quella a termine.",),

);
$data['E'] = array(

	array("title"=>"Easd",
	"text"=>"EASD<BR>European Association of Securities Dealers. Ha il compito di creare un mercato azionario efficiente all'interno dell'Unione Europea.",),


	array("title"=>"Easdaq",
	"text"=>"EASDAQ<BR>Letteralmente \"European Association of Securities Dealers Automated Quatations\". Attiva dal 1999, e una borsa europea che riprende il modello del Nasdaq americano, distaccandosene tuttavia per la modalita di trasmissione degli ordini.",),


	array("title"=>"Econometria",
	"text"=>"ECONOMETRICS <BR>Ramo della scienza economica che si interessa della formulazione, identificazione e stima di modelli matematici che possano rappresentare un fenomeno economico e permettere di effettuare previsioni sul futuro andamento dello stesso.",),


	array("title"=>"Economia del benessere",
	"text"=>"WELFARE ECONOMICS<BR>Branca dell'economia politica che si occupa di individuare l'ottimo sociale, sulla base di criteri di efficienza allocativa e di equita.",),


	array("title"=>"Economia dell'offerta",
	"text"=>"SUPPLY SIDE ECONOMY<BR>Approccio di politica economica basato su provvedimenti diretti a stimolare l'attivita economica attraverso incentivi fiscali sul versante della produzione.",),


	array("title"=>"Economia sommersa",
	"text"=>"BLACK ECONOMY<BR>Insieme delle attivita economiche che sfuggono alle rilevazioni ufficiali.",),


	array("title"=>"Ecu",
	"text"=>"EUROPEAN CURRENCY UNIT<BR>Unita monetaria di conto costituita dagli stati membri della Comunita Economica Europea nel 1979. Il valore dell'ecu e pari alla media ponderata delle quotazioni delle divise facenti parte del paniere di riferimento, con pesi che rispecchiano la dimensione e l'importanza economica dei differenti Stati membri. Ora sostituita dall'Euro.",),


	array("title"=>"Effetto annuncio",
	"text"=>"ANNOUNCEMENT EFFECT<BR>Indica l'effetto prodotto sui mercati finanziari o su singoli titoli dalla comunicazione di notizie riguardanti la situazione economica di un paese, le strategie e gli obiettivi della politica economica, ma anche esiti e previsioni su singole societa quotate in borsa.",),


	array("title"=>"Effetto di contagio",
	"text"=>"CONTAGION EFFECT<BR>Fenomeno per cui una situazione di difficolta a livello di singola societa si propaga ad altre unita del gruppo.",),


	array("title"=>"Effetto di prezzo",
	"text"=>"PRICE EFFECT<BR>Variazione nella domanda di un bene indotta da una variazione di prezzo del bene medesimo.",),


	array("title"=>"Effetto di sostituzione",
	"text"=>"SUBSTITUTION EFFECT<BR>Effetto prodotto sulla quantita acquistata di un bene dalla variazione di prezzo del bene stesso, assumendo come costante il reddito.",),


	array("title"=>"Efficienza del mercato",
	"text"=>"MARKET EFFICIENCY<BR>Insieme delle caratteristiche (quali l'assenza di vincoli legali e di fatto alla concorrenza, la trasparenza e la facile accessibilita delle informazioni) che rendono minimi i costi di transazione.",),


	array("title"=>"Elaborazione automatica dei dati",
	"text"=>"ELETRONIC DATA PROCESSING (EDP)<BR>Insieme delle operazioni di trattamento logico-aritmetico di dati alfanumerici effettuata da elaboratori elettronici.",),


	array("title"=>"Emissione",
	"text"=>"ISSUE<BR>Operazione finanziaria, da parte di una societa o di un ente, che consiste nell'offerta di titoli azionari rappresentativi della societa (in genere in concomitanza ad una delibera di aumento del capitale) o di titoli obbligazionari destinati al pubblico dei risparmiatori.",),


	array("title"=>"Emissione di azioni gratuite",
	"text"=>"SCRIP ISSUE<BR>Emissione di azioni assegnate gratuitamente ai soci, in proporzione al numero di azioni detenute, in seguito alla capitalizzazione di riserve, di altri accantonamenti o di plusvalenze.",),


	array("title"=>"Emittente",
	"text"=>"ISSUER<BR>Soggetto, societa, governo o ente sovranazionale, il quale offre i propri titoli azionari o obbligazionari ai sottoscrittori, e che si rende garante degli obblighi relativi alla particolare categoria di titoli.",),


	array("title"=>"Entrata di capitale",
	"text"=>"EQUITY INCOME<BR>Differenza tra il reddito operativo netto e gli interessi passivi.",),


	array("title"=>"Eps - earnings per share",
	"text"=>"EPS<BR>Esprime il     rapporto fra l'utile netto di una societ&agrave;     ed il numero delle azioni ordinarie",),


	array("title"=>"Equity kicker",
	"text"=>"EQUITY KICKER<BR>Nel settore delle operazioni di finanziamento immobiliare, e l'offerta di una partecipazione ai mezzi propri di un'operazione che prevede l'assunzione di debito, con il beneficio di un flusso di cassa positivo alla fine dell'investimento.",),


	array("title"=>"Erosione fiscale",
	"text"=>"TAX EROSION<BR>Riduzione della base imponibile che sarebbe in linea di principio soggetta a tributo a causa di varie forme di agevolazione ed esenzione, di inadeguatezze nel metodo di accertamento o di regimi fiscali sostitutivi.",),


	array("title"=>"Errore sistematico di ponderazione",
	"text"=>"WEIGHT BIAS<BR>Errore sistematico dovuto all'impiego di coefficienti di ponderazione viziati da una qualsiasi distorsione.",),


	array("title"=>"Esclusione",
	"text"=>"EXCLUSION<BR>Riguarda quei redditi che vanno indicati nella dichiarazione fiscale ma che partecipano solamente in parte al computo della stessa. Per esempio le societa americane possono escludere l'80% dei dividendi ricevuti da altre societa.",),


	array("title"=>"Esegui o cancella",
	"text"=>"FILL OR KILL<BR>Ordine riferito ad un intermediario di acquistare o vendere, che perde di validita nel caso non venga eseguito in tempo reale.",),


	array("title"=>"Eseguire",
	"text"=>"FILL<BR>Nelle contrattazioni in titoli indica il momento nel quale l'ordine ricevuto dall'intermediario e stato in effetti interamente eseguito.",),


	array("title"=>"Esposizione",
	"text"=>"EXPOSURE<BR>Indica la rischiosita relativa ad un credito concesso ad un beneficiario.",),


	array("title"=>"Esposizione giornaliera",
	"text"=>"DAYLIGHT EXPOSURE<BR>Esposizione massima giornaliera al rischio di cambio di un'istituzione finanziaria.",),


	array("title"=>"Esposizione in divisa",
	"text"=>"CROSS CURRENCY EXPOSURE<BR>Esecuzione di operazioni di finanziamento o di prestito denominate in una certa divisa, controbilanciate da operazioni di senso inverso ma in un'altra valuta.",),


	array("title"=>"Esposizione infragiornaliera",
	"text"=>"INTRADAY EXPOSURE<BR>Esposizione creditoria con durata inferiore a un giorno. Misura il rischio cui si viene a trovare un operatore nel corso della giornata.",),


	array("title"=>"Estensione",
	"text"=>"DATING <BR>Per quanto riguarda le operazioni commerciali, il prolungamento della durata di un credito commerciale a breve termine, per esempio da un mese a due mesi. Per quanto riguarda le operazioni bancarie, l'intervallo di tempo che passa tra l'emissione di un finanziamento a tempo determinato e l'istante in cui si estingue l'operazione.",),


	array("title"=>"Estratto conto",
	"text"=>"ACCOUNT STATEMENT <BR>Documento riepilogativo dei movimenti avvenuti su un conto in un certo periodo di tempo.",),


	array("title"=>"Eurobbligazioni",
	"text"=>"EUROBOND<BR>Sono obbligazioni a medio-lungo termine emesse in un Paese diverso da quello dell'emittente, in una valuta estera, collocate sul mercato finanziario europeo da consorzi di banche. Generalmente esenti da ritenute alla fonte.",),


	array("title"=>"Euroclear",
	"text"=>"EUROCLEAR<BR>Sistema elettronico utilizzato per la custodia dei titoli, e il regolamento delle operazioni effettuate su di essi.",),


	array("title"=>"Eurodollaro",
	"text"=>"EURODOLLAR <BR>Certificati di deposito denominati in dollari USA, emessi al di fuori degli Stati Uniti, sostanzialmente nei piu importanti centri finanziari del mondo.",),


	array("title"=>"Euronota",
	"text"=>"EURONOTE<BR>Termine usato per una varieta di titoli a breve termine, emessi a sconto in serie continua sul mercato delle eurovalute.",),


	array("title"=>"Eurovalute",
	"text"=>"EUROCURRENCY <BR>Valute che usufruiscono di una particolare liberta di contrattazione al di fuori del paese di origine. La maggior parte delle contrattazioni in eurovalute e svolta in eurodollari.",),


	array("title"=>"Ex cedola",
	"text"=>"EX COUPON<BR>Indica un titolo azionario privo di cedola che puo essere quotato solo come titolo a sconto.",),


	array("title"=>"Ex diritti",
	"text"=>"EX RIGHTS<BR>E' un titolo azionario privato del diritto di opzione relatiovo all'emissione di azioni di nuova emissione, diritto che, passato il giorno ex rights viene contrattato a parte rispetto all'azione.",),


	array("title"=>"Ex dividendo",
	"text"=>"EX DIVIDEND<BR>Relativo ad un titolo azionario, indica che il dividendo e gia stato conferito al beneficiario di competenza.",),


	array("title"=>"Ex warrant",
	"text"=>"EX WARRANTS<BR>Titolo privo del diritto al possesso del warrant connesso.F.R.A.<BR></B>FORWARD RATE AGREEMENT<BR>Contratto di deposito attraverso il quale due controparti fissano un tasso d'interesse su un deposito in una determinata valuta e per un determinato arco temporale, con l'impegno di liquidare alla data convenuta la differenza fra il tasso concordato e il tasso corrente di riferimento. Ha lo scopo di fornire una copertura contro il rischio di oscillazioni dei tassi di interesse.",),


);
$data['F'] = array(

	array("title"=>"Fabbisogno di capitale",
	"text"=>"CAPITAL REQUIREMENTS<BR>La somma dei fondi necessari a permettere il normale svolgimento delle normali operazioni di gestione di una societ&agrave;. E' formata da una quota a lungo termine atta a finanziare gli impianti di produzione, ed la restante a breve termine, il cosiddetto working capital, necessario al regolare andamento delle operazioni correnti di gestione. <BR>Alcuni intermediari finanziari, con il termine \"fabbisogno di capitale\", indicano la dotazione minima di capitale prescritta a fronte di varie tipologie di rischio.",),


	array("title"=>"Facilitazione di aggiustamento strutturale",
	"text"=>"STRUCTURAL ADJUSTMENT FACILITY<BR>Finanziamento concesso a condizioni favorevoli dalla Banca mondiale a favore di Paesi in via di sviluppo.",),


	array("title"=>"Factoring",
	"text"=>"FACTORING<BR>Tipo di finanziamento aziendale che prevede la cessione di crediti commerciali ad un societ&agrave; finanziaria specializzata \"factor\", che assume l'incarico della riscossione degli stessi, eventualmente garantendone il buon fine.",),


	array("title"=>"Fare mercato",
	"text"=>"MAKE MARKET<BR>Operare offrendo quotazioni operative di acquisto e vendita di alcuni d'investimento, contribuendo in questo modo ad accrescere le loro liquidit&agrave; nonch&eacute; le possibilit&agrave; operative del mercato. Il soggetto che mette in atto queste procedure viene definito dealer.",),


	array("title"=>"Fattura petrolifera",
	"text"=>"OIL BILL<BR>Termine giornalistico, indicante il valore complessivo dei prodotti petroliferi importati da un paese.",),


	array("title"=>"Fatturato",
	"text"=>"TURNOVER <BR>Somma, facente riferimento ad un determinato periodo, dei ricavi provenienti dalla vendita di beni e servizi di una societ&agrave;. Si distingue in netto o lordo tenendo conto nel calcolo degli stessi dovranno essere valutati anche elementi come gli sconti ed i resi.",),


	array("title"=>"Fed",
	"text"=>"FED<BR>Federal Reserve System, la Riserva Federale americana. E' la banca centrale degli Stati Uniti, autorizzata dal Congresso a emettere moneta e attuare la politica monetaria, determinando la disponibilit&agrave; di moneta in circolazione e fissando il livello dei tassi d'interesse.",),


	array("title"=>"Fibor",
	"text"=>"FIBOR <BR>Frankfurt Interbank Offered Rate. Tasso d'interesse al quale le grandi banche tedesche sono disposte a concedere depositi in marchi sul mercato interbancario.",),


	array("title"=>"Fideiussione",
	"text"=>"GUARANTEE<BR>Garanzia personale prestata da un soggetto a un creditore consistente nell'impegno ad assolvere l'obbligazione contratta dal debitore principale in caso di inadempienza di quest'ultimo.",),


	array("title"=>"Fiduciante",
	"text"=>"GRANTOR<BR>Colui che vende l'option.",),


	array("title"=>"Fiduciario",
	"text"=>"FIDUCIARY<BR>Soggetto che opera per conto di un altro nell'amministrare un complesso di beni. La legge stabilisce che il fiduciario debba agire ogni volta per l'ottenimento del pi&ugrave; alto beneficio per il fiduciante, e garantire in ogni caso i suoi interessi.",),


	array("title"=>"Fifo",
	"text"=>"FIFO <BR>First in first out. Criterio di valutazione dei flussi di magazzino, con il quale i suppone che le unit&agrave; entrate siano state le prime ad uscire. Le rimanenze sono quindi valutate ai prezzi pi&ugrave; recenti.",),


	array("title"=>"Filiali straniere",
	"text"=>"FOREIGN BRANCHES<BR>Filiali di banche estere che operano nel territorio nazionale. Secondo particolari accordi tra le autorit&agrave; governative, tutte le banche operanti sul territorio di un altro Stato sono soggette alle normative e alle leggi di quest'ultimo.",),


	array("title"=>"Finanza aziendale",
	"text"=>"CORPORATE FINANCE<BR>Insieme dei principi, dei metodi e delle procedure concernenti la gestione dei mezzi finanziari di un'impresa.",),


	array("title"=>"Finanziamento a breve",
	"text"=>"COMMERCIAL LOAN <BR>Prestito a breve scadenza (da uno a tre mesi) concesso per coprire esigenze di capitale circolante, cio&egrave; di quei fondi che vengono utilizzati per la copertura finanziaria delle usuali operazioni di gestione. Il costo &egrave; solitamente indicizzato al Prime Rate.",),


	array("title"=>"Finanziamento a tasso variabile",
	"text"=>"VARIABLE RATE LOAN <BR>Forma di prestito personale o commerciale in cui l'interesse da corrispondere viene determinato sulla base di un indice di riferimento.",),


	array("title"=>"Finanziamento a vista",
	"text"=>"DEMAND LOAN<BR>Prestito privo di scadenza e rimborsabile in un qualsiasi momento.",),


	array("title"=>"Finanziamento con mezzi propri",
	"text"=>"EQUITY FINANCING <BR>Incremento del capitale di rischio di una societ&agrave; ottenuto tramite l'emissione di nuovi titoli azionari sia di tipo ordinario che privilegiato.",),


	array("title"=>"Finanziamento diretto",
	"text"=>"DIRECT FINANCE<BR>E' la raccolta dei fondi da parte delle unit&agrave; in disavanzo, direttamente presso le unit&agrave; eccedentarie, senza l'intermediazione di istituzioni finanziarie.",),


	array("title"=>"Finanziamento parallelo",
	"text"=>"PARALLEL LOAN <BR>Sistema di finanziamento internazionale incrociato in base al quale la casa madre effettua un finanziamento in valuta a una o pi&ugrave; societ&agrave; del gruppo residenti in paesi esteri.",),


	array("title"=>"Finanziamento su merci",
	"text"=>"WAREHOUSE FINANCING<BR>Finanziamento garantito da un titolo rappresentativo di merci custodite presso un magazzino generale.",),


	array("title"=>"Finanziamento su scorte",
	"text"=>"FLOOR PLANNING<BR>Finanziamento bancario che utilizza come garanzia la presenza di scorte nell'impresa, che una volta vendute permetteranno il rimborso del debito contratto.",),


	array("title"=>"Fine per fine",
	"text"=>"END TO END<BR>Nel mercato dei cambi, indica le operazioni eseguite fra due giorni finali di due mesi differenti.",),


	array("title"=>"Fissato bollato",
	"text"=>"CONTRACT NOTE<BR>Foglietto bollato o modulo sostitutivo soggetto a bollo, mediante il quale viene pagata la tassa sul trasferimento dei valori mobiliari e che rappresenta la documentazione dell'avvenuta esecuzione dei contratti di Borsa.",),


	array("title"=>"Fissazione",
	"text"=>"FIXATION<BR>Stabilire il prezzo attuale o futuro di un certo bene d'investimento. Nel fixing delle valute, per esempio, viene stabilito in modo univoco un prezzo di equilibrio momentaneo tra domanda e offerta di valuta estera.",),


	array("title"=>"Fixing dell'oro",
	"text"=>"GOLD FIXING<BR>Definizione del prezzo dell'oro che avviene due volte al giorno, alle 10.30 e alle 15.30 secondo l'ora di Greenwich presso le borse di Londra, Parigi e Zurigo. Per estensione, momento della rilevazione delle quotazioni dei titoli a trattazione continua.",),


	array("title"=>"Floor",
	"text"=>"FLOOR<BR>In un prestito a tasso di interesse variabile, soglia minima fissata per l'oscillazione del tasso stesso. Un floor di tasso d'interesse pu&ograve; essere connesso a un Cap, un'opzione la quale prevede che un tasso d'interesse variabile non possa salire oltre un livello massimo: combinando le due operazioni si limita l'oscillazione del tasso d'interesse sul finanziamento.",),


	array("title"=>"Floor di tasso di interesse",
	"text"=>"INTEREST RATE FLOOR <BR>Contratto assimilabile a un'assicurazione, in virt&ugrave; del quale, contro la corresponsione di un premio commisurato all'ammontare nominale sottostante, il datore del premio ha il diritto di ricevere la differenza (se positiva) fra il tasso fisso predeterminato e il tasso variabile di riferimento.",),


	array("title"=>"Flottante",
	"text"=>"FLOAT<BR>Quantit&agrave; di titoli azionari di una societ&agrave; accessibili al grande pubblico che &egrave; quindi soggetta a contrattazioni giornaliere.",),


	array("title"=>"Flusso di cassa",
	"text"=>"CASH FLOW<BR>I flussi di cassa rappresentano le movimentazioni monetarie relative a una certa operazione finanziaria. Per le banche sono rappresentati soprattutto dai prestiti erogati e dai depositi ricevuti, mentre nelle operazioni di finanziamento i flussi di cassa sono quelli mediante i quali si procede in un primo momento all'erogazione della somma, e man mano che ci si approssima all'estinzione del rimborso delle quote di interessi e di capitale. In analisi di bilancio, il cash flow &egrave; il reddito netto a cui va sommato il totale degli ammortamenti ed eventualmente degli accantonamenti. Il \"cash flow statement\" &egrave; invece il documento che raffigura le movimentazioni di cassa dovute a una specifica attivit&agrave;.",),


	array("title"=>"Flusso di cassa scontato",
	"text"=>"DISCOUNTED CASH FLOW<BR>Valore attuale di un flusso di cassa futuro, misurato mediante l'utilizzo di un tasso d'interesse fissato precedentemente.",),


	array("title"=>"Fmi",
	"text"=>"IMF<BR>Fondo monetario internazionale. Organizzazione internazionale fondata nel 1945 con lo scopo di assicurare il rispetto delle norme degli accordi di Bretton Woods e il perseguimento delle sue finalit&agrave;. Attualmente si occupa della promozione della cooperazione monetaria internazionale e fornire assistenza finanziaria ai paesi in difficolt&agrave;.",),


	array("title"=>"Fondi",
	"text"=>"FUNDS<BR>Indica genericamente il denaro immediatamente a disposizione per l'utilizzo. Nel mercato dei cambi, indica la quotazione del dollaro canadese.",),


);
$data['G'] = array(

	array("title"=>"Gap dinamico",
	"text"=>"DYNAMIC GAP<BR>Nella gestione di un portafoglio, metodo che fa riferimento all'influenza dell'andamento futuro dei tassi di interesse.",),


	array("title"=>"Gapping",
	"text"=>"GAPPING<BR>Metodo di analisi gestionale fondato sull'attribuzione alle grandezze economiche di scadenze differenti, cos&igrave; da far variare la loro valutazione complessiva ad ogni variazione dei valori del mercato. Nell'analisi tecnica, indica l'intervallo di prezzi dove non ci sono quotazioni effettive.",),


	array("title"=>"Garanzia",
	"text"=>"COLLATERAL<BR>Diritto di un creditore di rivalersi su un determinato bene a garanzia dell'adempimento dell'obbligazione da parte del debitore.",),


	array("title"=>"Garanzia di buona esecuzione",
	"text"=>"PERFORMANCE BOND<BR>Fideiussione rilasciata a un'impresa aggiudicataria di una gara d'appalto, con la quale viene garantito l'assolvimento degli impegni assunti con la firma del contratto.",),


	array("title"=>"Garanzia finanziaria",
	"text"=>"FINANCIAL GUARANTEE <BR>Titolo obbligazionario che viene emesso a garanzia dei pagamenti cedolari e di capitale provenienti da un titolo esistente. Nell'eventualit&agrave; di insolvenza dell'emittente del titolo primitivo, il possessore risulter&agrave; beneficiario dei pagamenti del titolo di indennizzo.",),


	array("title"=>"Garanzia in oro",
	"text"=>"GOLD BACKING<BR>Garanzia aurea, costituita di norma sotto forma di pegno, tipicamente a fronte di un prestito internazionale.",),


	array("title"=>"Gatt",
	"text"=>"GATT<BR>General Agreement on Tariffs and Trade. Accordo internazionale che si prefigge di promuovere lo sviluppo del commercio internazionale eliminando gradualmente i vincoli doganali e amministrativi posti agli scambi.",),


	array("title"=>"Gestione del rischio",
	"text"=>"RISK MANAGEMENT<BR>Individuazione delle componenti di rischiosit&agrave; in un investimento al fine di ridurle o annullarle.",),


	array("title"=>"Gestione delle passivita'",
	"text"=>"LIABILITY MANAGEMENT<BR>Attivit&agrave; di gestione dei finanziamenti di un'impresa. Nelle aziende di credito, inizialmente orientata al funzionamento della tesoreria, &egrave; divenuta poi gestione dei rischi finanziari e di mercato. Correlata alla gestione delle attivit&agrave;, consente infatti di combinare il perseguimento degli obiettivi di natura finanziaria con quelli di natura reddituale e di ottimizzare il rapporto tra rischio e rendimento.",),


	array("title"=>"Gestione di tesoreria",
	"text"=>"CASH MANAGEMENT<BR>Parte della gestione finanziaria che ha l'obiettivo di ottimizzare il flusso di disponibilit&agrave; liquide di un'azienda. Ha lo scopo di non mantenere mai somme inutilizzate.",),


	array("title"=>"Gestione passiva",
	"text"=>"PASSIVE MANAGMENT<BR>Fa riferimento a un tipo di gestione di un portafoglio di attivit&agrave; finanziarie impostata sul mantenimento del portafoglio stesso in vista di conseguire determinati obiettivi di remunerativit&agrave; in un arco temporale di medio-lungo periodo.",),


	array("title"=>"Giacenza media",
	"text"=>"AVERAGE EQUITY<BR>E' utilizzata dagli operatori di borsa per definire i parametri di copertura (margin) dei singoli conti, e viene stabilita per mezzo del calcolo giornaliero della giacenza e della valutazione dei portafogli di titoli trattati dai clienti mark to market.",),


	array("title"=>"Gilt",
	"text"=>"GILT<BR>I gilt sono titoli di Stato emessi dal tesoro britannico, denominati in sterline e assistiti da totale garanzia governativa, con scadenze a breve, medio e lungo termine.",),


	array("title"=>"Giorni valuta",
	"text"=>"COLLECTION PERIOD<BR>Tempo che intercorre tra la presentazione di un titolo di credito per il pagamento e il giorno nel quale i fondi corrispondenti diventano materialmente disponibili.",),


	array("title"=>"Girata",
	"text"=>"ASSIGNMENT<BR>Trasferimento, ad altro soggetto, del diritto di propriet&agrave; di titoli, diritti o interessi di vario genere. Viene definito assignor colui che trasferisce il diritto, mentre viene definito assignee chi riceve tale diritto.",),


	array("title"=>"Girata in bianco",
	"text"=>"BLANK ENDORSEMENT<BR>E' il trasferimento di un titolo da un soggetto ad un altro non identificato, che si attua firmando il titolo senza indicare il nome del beneficiario.",),


	array("title"=>"Global bond",
	"text"=>"GLOBAL BOND <BR>Prestito obbligazionario collocato contemporaneamente sulle principali piazze finanziarie internazionali.",),


	array("title"=>"Globalizzazione",
	"text"=>"GLOBALISATION <BR>Processo di crescente integrazione a carattere internazionale dei mercati economici e finanziari.",),


	array("title"=>"Gold standard",
	"text"=>"GOLD STANDARD<BR>Sistema monetario di cambi fissi determinati dalla parit&agrave; di ciascuna moneta rispetto all'oro. In questo sistema, ogni divisa si pu&ograve; convertire in un predeterminato ammontare d'oro dietro la presentazione dei biglietti di banca presso la Banca centrale.",),


	array("title"=>"Golden share",
	"text"=>"GOLDEN SHARE<BR>Clausola che permette al governo di intercedere negli affari di una societ&agrave; privatizzata. Un esempio tipico di golden share &egrave; la limitazione delle azioni che possono essere possedute da un singolo investitore.",),


	array("title"=>"Gruppo di sottoscrizione a fermo",
	"text"=>"UNDERWRITING GROUP<BR>Il gruppo di banche di investimento e societ&agrave; finanziarie che partecipano alla sottoscrizione e al collocamento dei titoli di nuova emissione, che assume l'impegno di sottoscrivere a fermo la totalit&agrave; dei titoli emessi o la parte non collocata preso investitori terzi entro un certo termine.",),


	array("title"=>"Guadagno in conto capitale",
	"text"=>"CAPITAL GAIN<BR>Guadagno proveniente dalla differenza tra il prezzo di acquisto e quello di vendita di un determinato bene o investimento.HEDGE FUND<BR></B>HEDGE FUND<BR>Traduzione letterale di \"fondi di copertura\". Si tratta di fondi di investimento che impegnano alcuni strumenti di copertura al fine di ottenere il miglior risultato possibile in termini di rapporto rischio/rendimento. Sono in genere localizzati in alcuni centri off-shore o negli Stati Uniti, e riescono ad assumere posizioni anche finanziandosi con elevati indebitamenti.",),


	array("title"=>"Girata (2)",
	"text"=>"ENDORSEMENT<BR>Trasferimento del possesso di un titolo da un soggetto a un altro eseguito tramite l'apposizione di una firma sul retro del titolo medesimo.",),


);
$data['H'] = array(


	array("title"=>"Horizontal spread",
	"text"=>"HORIZONTAL SPREAD<BR>Strategia speculativa del mercato dei contratti a premio. Consiste nell'assunzione di due posizioni contrapposte con scadenze diverse.",),


	array("title"=>"Host bond",
	"text"=>"HOST BOND<BR>E' un'eurobbligazione a cui &egrave; unito un warrant.I.V.A.<BR></B>VALUE ADDED TAX (VAT)<BR>Imposta indiretta sui beni e servizi commisurato al valore aggiunto che si genera in ciascuna fase del processo produttivo o distributivo.",),


	array("title"=>"Hkibor",
	"text"=>"HKIBOR<BR>Hong Kong Interbank Offered Rate. Tasso di riferimento per le operazioni di prestito internazionali.",),


);
$data['I'] = array(

	array("title"=>"Icon",
	"text"=>"ICON<BR>Sigla di Indexed Currency Option Note, &egrave; un titolo di credito con opzione di valuta.",),


	array("title"=>"Ida",
	"text"=>"IDA<BR>Vedi International Development Association",),


	array("title"=>"Idem",
	"text"=>"IDEM<BR>Mercato Italiano degli strumenti derivati, organizzato e gestito dalla Borsa Italiana S.p.A.",),


	array("title"=>"Immobilizzazioni",
	"text"=>"CAPITAL ASSET<BR>Investimento a lungo termine attuato da un'impresa che ha intenzione di usufruirne durante pi&ugrave; processi produttivi.",),


	array("title"=>"Immobilizzazioni materiali",
	"text"=>"TANGIBLE FIXED ASSET<BR>Elementi dell'attivo patrimoniale di un'azienda costituiti dai beni strumentali destinati a essere utilizzati durevolmente nello svolgimento dell'attivit&agrave; della medesima, consistenti tipicamente in terreni e fabbricati, impianti tecnici e macchinari, attrezzature, mobili e arredi, mezzi di trasporto.",),


	array("title"=>"Immobilizzazioni produttive",
	"text"=>"EARNING ASSETS <BR>Ogni investimento aziendale che produce un flusso di reddito, di interessi o di commissioni.",),


	array("title"=>"Impegno collaterale di secondo grado",
	"text"=>"CONTINGENT LIABILITY<BR>Garanzia fornita da un soggetto sul titolo di credito di un altro soggetto che &egrave; l'obbligato principale e che avr&agrave; effetto unicamente in caso di inadempienza da parte di quest'ultimo. Si intende anche l'obbligazione eventuale, che sorge al sopravvenire di una determinata condizione.",),


	array("title"=>"Impegno di sottoscrizione a fermo",
	"text"=>"UNDERWRITING COMMITMENT<BR>Impegno assunto da un'istituzione o da un consorzio di sottoscrivere la totalit&agrave; di una nuova emissione obbligazionaria, ovvero la parte di essa che non trova collocamento sul mercato a conclusione dell'operazione di lancio.",),


	array("title"=>"Impegno fermo",
	"text"=>"FIRM COMMITMENT<BR>Impegno da parte di un istituto di credito ad acquistare l'intera tranche di azioni di nuova emissione per collocarle in un secondo momento sul mercato.",),


	array("title"=>"Imposizione posticipata",
	"text"=>"TAX DEFERED <BR>Investimento in cui l'aumento di valore e i proventi generati dallo stesso saranno sottoposti a tassazione solamente nell'attimo in cui verranno effettivamente ottenuti.",),


	array("title"=>"Impossibilitato a consegnare",
	"text"=>"FAIL TO DELIVER <BR>Viene cos&igrave; definito un intermediario in titoli che non riesce a consegnare i titoli che ha venduto ad un altro intermediario, e che pertanto si trova nella condizione di non poter pretendere il pagamento degli stessi.",),


	array("title"=>"Impossibilitato a ricevere",
	"text"=>"FAIL TO RECEIVE<BR>Condizione di un intermediario che agisce per conto di un investitore e che pu&ograve; rifiutare il pagamento di una tranche di titoli per non averli ricevuti dal venditore.",),


	array("title"=>"Imposta in conto capitale",
	"text"=>"CAPITAL TAX<BR>Prelievo tributario percepito dalle amministrazioni pubbliche in maniera non periodica.",),


	array("title"=>"Imposta progressiva",
	"text"=>"PROGRESSIVE TAX<BR>Sistema fiscale in base al quale l'imposta &egrave; applicata con aliquote crescenti al crescere della base imponibile.",),


	array("title"=>"Imposta sul monte salari",
	"text"=>"PAYROLL TAX<BR>Prelievo fiscale commisurato alla somma dei salari e stipendi, equivale alla somma versata dal datore di lavoro a titolo di contributi sociali.",),


	array("title"=>"Impresa a capitale pubblico",
	"text"=>"STATE-OWNED ENTERPRICE<BR>Impresa di cui lo Stato ha il controllo diretto o indiretto in virt&ugrave; della detenzione di una quota maggioritaria di capitale.",),


	array("title"=>"Impresa sottocapitalizzata",
	"text"=>"UNDERCAPITALIZE ENTERPRICE<BR>Impresa che rispetto ai parametri normali per il proprio settore di attivit&agrave; dispone di una scarsa base di capitale, con corrispondente eccessivo ricorso a capitale di terzi.",),


	array("title"=>"Imprese di pubblica utilita'",
	"text"=>"PUBLIC UTILITIES<BR>Aziende che producono in regime di monopolio beni e servizi essenziali per la collettivit&agrave;.",),


	array("title"=>"In chiusura",
	"text"=>"AT THE CLOSE<BR>Espressione usata nel linguaggio borsistico per indicare l'ordine dato all'intermediario di eseguire un acquisto o una vendita di titoli durante gli ultimi trenta secondi di contrattazione. si tratta di un ordine, date le sue peculiarit&agrave;, per il quale l'intermediario non pu&ograve; garantire l'esecuzione.",),


	array("title"=>"In the money",
	"text"=>"IN THE MONEY<BR>Relativo ad un'opzione call o put, indica che il prezzo di mercato &egrave; superiore ovvero inferiore allo strike price.",),


	array("title"=>"Incasso",
	"text"=>"COLLECTION <BR>Atto con cui viene presentato un titolo di credito al debitore per l'esecuzione del pagamento.",),


	array("title"=>"Incoerenza delle politiche",
	"text"=>"POLICY MISMATCH<BR>Situazione di discordanza fra gli orientamenti della politica monetaria e della politica fiscale all'interno di un singolo paese.",),


	array("title"=>"Indebitamento limite",
	"text"=>"DEBT LIMIT<BR>Il massimo ammontare di indebitamento contraibile da un governo, fissato da specifiche leggi di spesa.",),


	array("title"=>"Indebitamento netto",
	"text"=>"NET BORROWED <BR>Corrisponde alla differenza per difetto fra il risparmio lordo e l'investimento lordo.",),


	array("title"=>"Indennita' di disoccupazione",
	"text"=>"UNEMPLOYMENT BENEFITS<BR>Trasferimenti correnti a favore di disoccupati erogati dallo Stato o da enti di previdenza sociale.",),


	array("title"=>"Indexed currency option note",
	"text"=>"INDEXED CURRENCY OPTION NOTE <BR>Vedi: ICON",),


	array("title"=>"Indicatore anticipatore",
	"text"=>"LEADING INDICATOR<BR>Si riferisce a un indice statistico di un fenomeno economico che mostra un andamento che anticipa quello dell'attivit&agrave; economica aggregata. Per esempio il livello dei prezzi del mercato azionario, il quale grazie alle aspettative degli investitori ha la tendenza a crescere prima del Prodotto nazionale lordo.",),


	array("title"=>"Indice azionario",
	"text"=>"STOCK INDEX<BR>Rappresentazione numerica delle variazioni di valore di un portafoglio predefinito di titoli.",),


	array("title"=>"Indice dei prezzi al consumo",
	"text"=>"CONSUMER PRICE INDEX (CPI)<BR>Indice statistico che misura la variazione dei prezzi di un determinato paniere di beni di consumo e servizi in un determinato arco temporale.",),


	array("title"=>"Indice dei prezzi all'ingrosso",
	"text"=>"WHOLESALE PRICE INDEX<BR>Indice statistico che rileva l'andamento dei prezzi all'ingrosso di un determinato paniere di beni.",),


	array("title"=>"Indice dei prezzi alla produzione",
	"text"=>"PRODUCER PRICE INDEX <BR>E' un indice calcolato su un paniere di beni che vengono utilizzati solitamente nei processi produttivi e viene calcolato per monitorare l'inflazione.",),


	array("title"=>"Indice dei prezzi di paasche",
	"text"=>"PAASCHE PRICE INDEX<BR>Numero indice utilizzato per misurare la variazione media dei prezzi di un paniere di beni in un determinato arco di tempo.",),


	array("title"=>"Indice di liquidita'",
	"text"=>"LIQUIDITY RATIO<BR>Rapporto fra attivit&agrave; disponibili e passivit&agrave; a breve. Esprime la capacit&agrave; di un'azienda a far fronte tempestivamente ed economicamente ai propri impegni monetari.",),


	array("title"=>"Indice di sharpe",
	"text"=>"SHARPE INDEX<BR>Indice inventato dal premio nobel William Sharpe, misura il rapporto rendimento/rischio di un'attivit&agrave; finanziaria.",),


	array("title"=>"Indice dow jones",
	"text"=>"DOW JONES INDEX<BR>Primo indice per importanza della borsa statunitense, &egrave; rappresentativo del valore degli scambi e dell'andamento delle contrattazioni borsistiche del giorno.",),


	array("title"=>"Indice nikkei",
	"text"=>"NIKKEI INDEX<BR>E' l'indice statistico dei 225 titoli pi&ugrave; importanti quotati alla Borsa di Tokyo e descrive l'andamento della Borsa nipponica.",),


	array("title"=>"Indice s&p",
	"text"=>"INDEX STANDARD AND POOR'S<BR>Indice statistico che delinea l'andamento di un paniere di titoli quotati presso le Borse degli Stati Uniti. Tra i pi&ugrave; conosciuti ci sono lo S&P 100, lo S&P 500 e lo S&P mid-cap che &egrave; composto dai titoli delle societ&agrave; di media capitalizzazione.",),


	array("title"=>"Indici di bilancio",
	"text"=>"BALANCE SHEET RATIOS<BR>Rapporti aritmetici fra determinate poste o aggregati del bilancio di un'impresa che permettono di fornire un'indicazione sintetica delle condizioni strutturali e funzionali dell'azienda.",),


	array("title"=>"Indici finanziari",
	"text"=>"FINANCIAL RATIO<BR>Rapporti aritmetici fra varie pote o aggregati di bilancio, con lo scopo di porre in evidenza le relazioni esistenti tra le stesse.",),


	array("title"=>"Indicizzato",
	"text"=>"FLOATER<BR>Si dice di un titolo il cui tasso di interesse dipende da un parametro predefinito che condiziona i suoi rendimenti.",),


	array("title"=>"Indicizzazione del salario",
	"text"=>"WAGE INDEXATION<BR>Metodo di calcolo della retribuzione in relazione all'andamento di un parametro di riferimento. In Italia &egrave; la \"scala mobile\", e indicizza i salari al fenomeno dell'inflazione.",),


	array("title"=>"Inflazione",
	"text"=>"INFLATION<BR>Fenomeno per cui le variazioni del livello dei prezzi modificano il potere di acquisto delle attivit&agrave; espresse in termini nominali. Statisticamente viene misurata da un indice che fa riferimento ad un paniere di beni predefiniti.",),


	array("title"=>"Influenza rilevante",
	"text"=>"SIGNIFICANT INFLUENCE<BR>Influenza esercitata da un'impresa che possiede il 20% delle azioni di un'altra.",),


	array("title"=>"Innovazione finanziaria",
	"text"=>"FINANCIAL INNOVATION <BR>Processo di trasformazione delle tecniche, delle istituzioni e degli strumenti del mercato dei capitali.",),


	array("title"=>"Insider trading",
	"text"=>"INSIDER TRADING<BR>Utilizzo di informazioni riservate per il compimento di operazioni speculative sul mercato mobiliare.",),


	array("title"=>"Insolvenza",
	"text"=>"DEFAULT<BR>Mancata esecuzione di una prestazione, alla scadenza, o secondo le clausole convenute. KENNEDY ROUND<BR></B>KENNEDY ROUND<BR>Negoziazioni avviate nel 1967 allo scopo di ridurre il livello delle tariffe doganali sui prodotti industriali.",),


	array("title"=>"Icb",
	"text"=>"ICB<BR>Sigla di International Competitive Bidding, rappresenta una gara di appalto aperta ai fornitori dei Paesi membri della Banca Mondiale, di Svizzera e Taiwan.",),


);
$data['K'] = array(


	array("title"=>"Kurtosis",
	"text"=>"KURTOSIS<BR>Caratterizza la relativa concentrazione dei valori della distribuzione intorno alla media (peakedness) o la loro dispersione (flatness) in comparazione ad una distribuzione normale.LANCIO DI UN PRESTITO <BR></B>FLOATATION <BR>Insieme delle operazioni connesse all'emissione e al collocamento di un prestito obbligazionario.",),


);
$data['L'] = array(


	array("title"=>"Largo flottante",
	"text"=>"PUBLICY HELD<BR>E' una societ&agrave; con un azionariato altamente frazionato e tale da non permettere a nessun soggetto di avere un controllo dominante sulla societ&agrave;.",),


	array("title"=>"Lavoratori dipendenti",
	"text"=>"WAGE AND SALARY EARNERS<BR>Lavoratori che prestano la loro opera alle dipendenze di un datore di lavoro privato o pubblico, ricevendo una retribuzione sotto forma di salario, stipendio, provvigione, cottimo o pagamento in natura.",),


	array("title"=>"Lay off",
	"text"=>"LAY OFF<BR>Prassi che consiste nell'acquisto di titoli non sottoscritti dagli azionisti. E' un operazione eseguita dalle banche di investimento che assistono un'emissione di titoli azionari per aumento di capitale e viene effettuata per circoscriverne la rischiosit&agrave;.",),


	array("title"=>"Lease back",
	"text"=>"LEASE BACK<BR>Operazione di finanziamento di un'impresa, la quale cede la propriet&agrave; di proprie immobilizzazioni a una societ&agrave; di leasing, stipulando contestualmente un contratto di leasing con quest'ultima, sulle stesse immobilizzazioni.",),


	array("title"=>"Leasing operativo",
	"text"=>"OPERATING LEASING <BR>Genere di locazione finanziaria attuata direttamente dal produttore del bene strumentale. Il canone di locazione comprende di norma anche il servizio di manutenzione e assistenza.",),


	array("title"=>"Leptocurtosi",
	"text"=>"LEPTOKURTOSIS<BR>Propriet&agrave; di una distribuzione di avere un numero di osservazioni che si posizionano lontano dalla media in quantit&agrave; superiore a quello predetto dalla distribuzione normale standardizzata.",),


	array("title"=>"Lettera",
	"text"=>"ASK <BR>Rappresenta il prezzo di offerta di uno strumento finanziario.",),


	array("title"=>"Lettera d'investimento",
	"text"=>"INVESTMENT LETTER<BR>Accordo attraverso il quale l'acquirente in titoli di nuova emissione si impegna a detenerli in portafoglio senza collocarli sul mercato, come garanzia del proprio impegno all'investimento nella societ&agrave; a medio lungo termine.",),


	array("title"=>"Lettera di credito",
	"text"=>"LETTER OF CREDIT<BR>Documento rilasciato da una banca a un proprio cliente, che conferisce a quest'ultimo il diritto di disporre di un certo ammontare di fondi presso una o pi&ugrave; banche corrispondenti estere.",),


	array("title"=>"Leva finanziaria",
	"text"=>"LEVERAGE<BR>Denominazione americana di Gearing ratio.",),


	array("title"=>"Leva operativa",
	"text"=>"OPERATING LEVERAGE <BR>Indicatore di struttura della gestione operativa di un'impresa, dato dal rapporto fra i costi fissi e il valore della produzione, con riferimento a uno specifico investimento o a un insieme di attivit&agrave;.",),


	array("title"=>"Liberati",
	"text"=>"FREED UP<BR>Vengono cos&igrave; definiti i sottoscrittori di titoli di nuova emissione non pi&ugrave; legati da norme contrattuali a rispettare il prezzo di contrattazione stabilito nell'accordo di sottoscrizione, e che perci&ograve; possono effettuare compravendite dei titoli stessi ai prezzi correnti di mercato.",),


	array("title"=>"Libero scambio",
	"text"=>"FREE TRADE<BR>Condizione in cui il commercio tra due o pi&ugrave; nazioni avviene senza restrizioni di qualsiasi tipo.",),


	array("title"=>"Libid",
	"text"=>"LIBID<BR>E' il tasso di interesse al quale le banche inglesi assumono depositi in divisa sul mercato interbancario internazionale. Sigla di London Interbank Bid Rate.",),


	array("title"=>"Libor",
	"text"=>"LIBOR<BR>London interbank offered rate. E' il tasso d'interesse al quale le banche primarie offrono depositi in eurodollari a 3 e 6 mesi ad altre banche primarie sulla piazza di Londra. Il Libor &egrave; utilizzato dalla maggior parte delle banche italiane come parametro per fissare i tassi di interesse su varie operazioni finanziarie, sia in lire sia in valute estere.",),


	array("title"=>"Libro",
	"text"=>"BOOK<BR>Nel campo degli investimenti, il totale degli acquisti e delle vendite di uno o pi&ugrave; beni, gestito solitamente in modo unitario. In contabilit&agrave;, i libri di un'impresa ovvero l'insieme dei documenti in cui vengono registrate tutte le operazioni gestionali. Si usa anche per definire una proposta d'ordine su un mercato telematico continuo.",),


	array("title"=>"Licenza",
	"text"=>"CHARTER<BR>Autorizzazione pubblica che permette l'esercizio di una specifica attivit&agrave; economica, come le autorizzazioni di esercizio dell'attivit&agrave; bancaria concesse a una casa madre o alle relative agenzie.",),


	array("title"=>"Liffe",
	"text"=>"LIFFE<BR>Sigla di London International Financial Futures Exchange. E' il mercato londinese del financial futures ed &egrave; la piazza europea pi&ugrave; importante.",),


	array("title"=>"Lifo",
	"text"=>"LAST IN FIRST OUT<BR>Pratica di rilevazione contabile delle scorte di magazzino, dove si ipotizza convenzionalmente che gli ultimi prodotti a essere entrati in magazzino siano anche i primi a essere venduti. Di conseguenza si contabilizzano le scorte ai prezzi pi&ugrave; remoti.",),


	array("title"=>"Limean",
	"text"=>"LIMEAN<BR>Tasso d'interesse su eurodivise ottenuto dalla media aritmetica tra il LIBOR e il LIBID.",),


	array("title"=>"Limite di contrattazione",
	"text"=>"TRADING LIMIT<BR>Il numero massimo di contratti che possono essere negoziati durante una sessione presso le Borse valori che sono specializzate in strumenti derivati. Con questo termine si indica anche la massima oscillazione di prezzo che un contratto future pu&ograve; avere durante la stessa giornata di quotazione, oltre il quale interviene l'autorit&agrave; di Borsa che ordina la sospensione delle contrattazioni.",),


	array("title"=>"Limite di oscillazione",
	"text"=>"DAILY TRADING LIMIT<BR>Oscillazione massima del prezzo di un titolo nel corso di una giornata di contrattazione. E' fissato dalle autorit&agrave; di Borsa.",),


	array("title"=>"Limite di posizione",
	"text"=>"POSITION LIMIT<BR>E' il numero massimo di contratti di una stessa categoria, all'interno degli strumenti derivati, che un medesimo soggetto pu&ograve; possedere. Il position limit varia da Borsa a Borsa.",),


	array("title"=>"Limite legale di fido",
	"text"=>"LEGAL LENDING LIMIT<BR>E' il limite che per legge non pu&ograve; essere oltrepassato nella concessione di credito a un solo soggetto, che viene solitamente espresso come una percentuale sul totale degli impieghi.",),


	array("title"=>"Linea di credito",
	"text"=>"LINE OF CREDIT<BR>Impegno formale a concedere un finanziamento, definendone gli ammontari massimi e la durata. Le linee di credito sono generalmente valide fino a revoca e non comportano spese specifiche per il loro mantenimento.",),


	array("title"=>"Linea di tendenza",
	"text"=>"TRENDLINE<BR>La linea che identifica in un grafico la tendenza del prezzo di un titolo. Questa linea pu&ograve; essere ascendente o discendente a seconda dell'andamento del titolo.",),


	array("title"=>"Liquidabilita'",
	"text"=>"MARKETABILITY<BR>Capacit&agrave; di un titolo di essere facilmente venduto senza alcun sacrificio in termini di prezzo.",),


	array("title"=>"Liquidazione",
	"text"=>"UNWINDING<BR>Riferito a una posizione, estinzione mediante un'operazione di segno contrario.",),


	array("title"=>"Listino ufficiale",
	"text"=>"OFFICIAL LIST<BR>Documento in cui sono riportate le quotazioni dei valori mobiliari trattati nel mercato ufficiale.",),


	array("title"=>"Locazione",
	"text"=>"LEASE<BR>Contratto tramite il quale il proprietario di un determinato bene lo concede in utilizzo a un altro soggetto dietro il pagamento di un canone.",),


	array("title"=>"Locazione finanziaria",
	"text"=>"FINANCIAL LEASE <BR>Genere di leasing, o locazione finanziaria, dove la societ&agrave; finanziaria si impegna unicamente a fornire la costruzione finanziaria dell'operazione, mentre restano a completo carico del cliente gli oneri assicurativi, di manutenzione e gestione del bene in oggetto.",),


	array("title"=>"Lock up",
	"text"=>"LOCK UP<BR>Accordo tramite il quale colui che offre parte della propria partecipazione al pubblico, si impegna nei confronti dei coordinatori dell'offerta a non effettuare operazioni di vendita per un determinato periodo di tempo, senza il preventivo consenso dei coordinatori.",),


	array("title"=>"Lotto",
	"text"=>"LOT<BR>Insieme di titoli trattati unitamente sul mercato.",),


	array("title"=>"Lungo termine",
	"text"=>"LONG TERM<BR>Se riferito a un'obbligazione, indica una scadenza superiore ai sette anni, mentre se riferito alle normali operazioni bancarie, indica scadenze superiori ai tre anni.M1<BR></B>M1<BR>Aggregato monetario pi&ugrave; liquido, rientrano in questa categoria banconote, depositi a vista e traveler's cheque.",),


	array("title"=>"Lettera (2)",
	"text"=>"OFFER<BR>Vedi Bid",),


	array("title"=>"Libor (2)",
	"text"=>"LONDON INTERBANKOFFERED RATE<BR>Vedi LIBOR.",),


	array("title"=>"Lifo (2)",
	"text"=>"LIFO<BR>Vedi Last in First Out.",),


	array("title"=>"Limite di oscillazione (2)",
	"text"=>"FLUCTUATION LIMIT <BR>E' il pi&ugrave; ampio intervallo di prezzo che pu&ograve; raggiungere la quotazione di un titolo nel corso di una giornata di contrattazione. Questo limite viene stabilito dalle autorit&agrave; di Borsa specialmente per i contratti future, le cui oscillazioni di prezzo possono essere di notevole entit&agrave;.",),


	array("title"=>"Libid (2)",
	"text"=>"LONDON INTERBANK BID RATE (LIBID)<BR>Vedi: LIBID.",),


	array("title"=>"Locazione finanziaria (2)",
	"text"=>"LEASING<BR>Contratto con cui una parte, mediante il pagamento di un canone, ottiene dall'atra parte la disponibilit&agrave; di un bene, con la facolt&agrave; di acquistarne la propriet&agrave; al termine del periodo contrattuale contro il pagamento di un prezzo prestabilito.",),


	array("title"=>"Limean (2)",
	"text"=>"LONDON INTERBANK MEDIAN AVERAGE RATE<BR>Vedi LIMEAN.",),


);
$data['M'] = array(


	array("title"=>"M3",
	"text"=>"M3<BR>Terzo aggregato monetario, dato da M2 pi&ugrave; i pronti contro termine di grande controvalore, le quote di fondi monetari in possesso di investitori istituzionali, e i depositi vincolati di grande dimensione.",),


	array("title"=>"Macchinari",
	"text"=>"MACHINERY<BR>Componente della spesa in investimenti fissi.",),


	array("title"=>"Macroeconomia",
	"text"=>"MACROECONOMICS<BR>Ramo della scienza economica che analizza le relazioni esistenti fra le grandezze economiche (reddito, consumi, investimenti, risparmio, quantit&agrave; di moneta, occupazione, ecc.).",),


	array("title"=>"Magazzino (1)",
	"text"=>"STOCK<BR>Scorte possedute da un'azienda.",),


	array("title"=>"Magazzino (2)",
	"text"=>"WAREHOUSE<BR>E' il luogo dove vengono conservati o custoditi beni.",),


	array("title"=>"Maggiori paesi industriali",
	"text"=>"MAJOR INDUSTRIAL COUNTRIES<BR>G8, Gruppo degli otto paesi con il prodotto nazionale lordo pi&ugrave; elevato: Stati Uniti, Giappone, Germania, Francia, Regno Unito, Italia, Canada, Russia.",),


	array("title"=>"Management buyin",
	"text"=>"MANAGEMENT BUYIN<BR>Assunzione di un pacchetto di maggioranza di una societ&agrave; effettuata dai dirigenti di un'altra societ&agrave;, mediante un finanziamento esterno.",),


	array("title"=>"Management buyout",
	"text"=>"MANAGEMENT BUYOUT<BR>Assunzione di un pacchetto di maggioranza di una societ&agrave; effettuata dai suoi stessi dirigenti, mediante un finanziamento esterno.",),


	array("title"=>"Margine",
	"text"=>"MARGIN<BR>Percentuale del controvalore di titoli acquistati o venduti allo scoperto, che un intermediario deve mantenere in forma facilmente liquidabile, a garanzia delle possibili variazioni di prezzo.",),


	array("title"=>"Margine di contribuzione",
	"text"=>"CONTRIBUTION MARGIN<BR>In contabilit&agrave; industriale indica quanto un prodotto, una linea di prodotti o un segmento di mercato contribuisce alla copertura dei costi fissi aziendali.",),


	array("title"=>"Margine di sicurezza",
	"text"=>"CUSHION<BR>Margine prudenziale che viene considerato idoneo, per esempio un determinato livello massimo del rapporto tra indebitamento e mezzi propri. Per i titoli convertibili o redimibili anticipatamente, l'intervallo di tempo che va dall'emissione al momento in cui si pu&ograve; esercitare tali diritti.",),


	array("title"=>"Margine di variazione",
	"text"=>"VARIATION MARGIN<BR>Deposito cauzionale aggiuntivo richiesto agli operatori che hanno subito durante la seduta di borsa una variazione sfavorevole di prezzo.",),


	array("title"=>"Margine lordo",
	"text"=>"GROSS MARGIN<BR>Per le banche rappresenta la differenza tra il ricavo dagli impieghi e dalle commissioni e il costo dovuto ai depositi e alle spese operative.",),


	array("title"=>"Margine netto",
	"text"=>"COVERED MARGIN <BR>E' il differenziale di tasso di interesse tra due strumenti finanziari denominati in due divise differenti, valutato al netto del costo della copertura della posizione in data futura.",),


	array("title"=>"Margine netto di interesse",
	"text"=>"NET INTEREST MARGIN<BR>E' dato dalla differenza tra i ricavi e costi espressi in percentuale rispettivamente del totale degli impieghi e della somma fra capitale e depositi.",),


	array("title"=>"Margine operativo",
	"text"=>"OPERATING MARGIN<BR>Indicatore di redditivit&agrave; aziendale, &egrave; dato dal rapporto fra l'utile operativo e il valore delle vendite nel periodo considerato.",),


	array("title"=>"Market maker",
	"text"=>"MARKET MAKER Operatore che su base continuativa quota prezzi di acquisto o di vendita relativamente a determinati strumenti finanziari e si rende controparte ai valori quotati.",),


	array("title"=>"Marketing",
	"text"=>"MARKETING<BR>Insieme delle attivit&agrave; di un impresa atte a valutare il mercato di sbocco per i propri prodotti.",),


	array("title"=>"Massimale di tasso di interesse",
	"text"=>"INTEREST RATE CEILING<BR>Limite superiore imposto dalle autorit&agrave; alla remunerazione di determinati strumenti finanziari.",),


	array("title"=>"Massimi ascendenti",
	"text"=>"
	  ASCENDING TOPS<BR>Formazione di picchi di prezzo successivi, ciascuno dei quali &egrave; posto a un livello superiore rispetto a quello precedente. <BR><B><BR>MASSIMI DISCENDENTI",),
	array("title"=>"Massimo","text"=>"PEAK <BR>Punto in cui culmina la fase ascendente di una determinata attivit&agrave; economica.",),array("title"=>"Massimo impegno","text"=>"BEST EFFORT<BR>Nelle operazioni di emissione, clausola che obbliga i partecipanti al sindacato di collocamento a esercitare il massimo impegno per collocare sul mercato i titoli emessi, senza per&ograve; costringerli a comprare quelli che eventualmente non dovessero essere assorbiti dal mercato.",),array("title"=>"Materie prime","text"=>"COMMODITY<BR>Prodotti allo stato grezzo che sono trattati sui mercati finanziari. Possono essere oro, petrolio, cereali, succhi d'arancia e quant'altro.",),array("title"=>"Matif","text"=>"MATIF<BR>Sigla di \"march&eacute; &agrave; terme d'instruments financiers\" &egrave; il mercato a termine francese.",),array("title"=>"Media mobile","text"=>"MOVING AVERAGE<BR>Media aritmetica semplice o ponderata di n elementi consecutivi di una serie temporale. E' uno strumento utilizzato in analisi tecnica che essendo rappresentata da una funzione continua, permette di individuare con maggiore chiarezza segnali di acquisto o di vendita.",),array("title"=>"Media ponderata","text"=>"WEIGHTED AVERAGE <BR>Media calcolata attribuendo ai differenti coefficienti pesi diversi in relazione all'importanza loro attribuita.",),array("title"=>"Mediare al rialzo","text"=>"AVERAGE UP<BR>Tecnica operativa che prevede l'acquisto di quantit&agrave; variabili di titoli man mano che il prezzo dello stesso sale, con l'obiettivo finale di avere un prezzo medio inferiore a quello di mercato.",),array("title"=>"Mediare al ribasso","text"=>"AVERAGE DOWN<BR>L'acquisto di pacchetti del medesimo titolo in momenti successivi, quando il prezzo dello stesso diminuisce gradatamente, con lo scopo finale di avere un prezzo medio dei titoli inferiore a quello del primo acquisto.",),array("title"=>"Mercati emergenti","text"=>"EMERGING MARKETS<BR>Vedi Paesi in via di sviluppo",),array("title"=>"Mercato","text"=>"MARKET<BR>E' il luogo dove si incontrano domanda e offerta di uno o pi&ugrave; beni o servizi, determinandone il prezzo.",),array("title"=>"Mercato a pronti","text"=>"CASH MARKET<BR>Mercato in cui tutte le operazioni di acquisto e vendita si concludono con l'effettiva consegna del bene oggetto della transazione e con regolamento in danaro a brevissimo termine.",),array("title"=>"Mercato azionario","text"=>"EQUITY MARKET <BR>Definito anche stock market, &egrave; il mercato dove si effettuano le contrattazioni relative ai titoli azionari scambiati.",),array("title"=>"Mercato concorrenziale","text"=>"FREE AND OPEN MARKET<BR>Mercato nel quale il prezzo viene determinato dall'incontro tra la domanda e l'offerta, senza che vi partecipino soggetti aventi obiettivi differenti da quello della massimizzazione del profitto.",),array("title"=>"Mercato contante","text"=>"SPOT MARKET<BR>Insieme delle negoziazioni per consegna immediata o entro il termine stabilito per la consegna a pronti.",),array("title"=>"Mercato dei cambi","text"=>"FOREIGN EXCHANGE MARKET<BR>Insieme delle contrattazioni a pronti e a termine aventi per oggetto divise e banconote estere.",),array("title"=>"Mercato dei capitali","text"=>"CAPITAL MARKET<BR>Cos&igrave; definito il mercato finanziario in senso stretto, nel quale vengono trattati capitali e titoli rappresentativi di capitale, a cui partecipano societ&agrave;, autorit&agrave; pubbliche ed enti sovranazionali, in grado di offrire agli investitori un'ampia possibilit&agrave; di scelta.",),array("title"=>"Mercato del dopo borsa","text"=>"AFTER-HOURS MARKET<BR>Contrattazioni in valori mobiliari compiute successivamente alla chiusura ufficiale di borsa.",),array("title"=>"Mercato del termine","text"=>"FORWARD MARKET <BR>Insieme delle negoziazioni con consegna differita.",),array("title"=>"Mercato efficiente","text"=>"EFFICIENT MARKET <BR>Si definisce efficiente un mercato nel quale le valutazioni espresse nei prezzi dei titoli rispecchiano tutte le informazioni pubblicamente accessibili.",),array("title"=>"Mercato europeo","text"=>"EUROMARKET<BR>Mercato internazionale, di carattere prevalentemente bancario, in cui sono trattati i depositi in eurodivise, le eurobbligazioni, i cambi e i crediti consorziati.",),array("title"=>"Mercato finanziario","text"=>"FINANCIAL MARKET<BR>Mercato in cui si scambiano capitale e credito, dove le principali componenti sono: il mercato monetario (riguardante gli scambi a breve termine), il capital market (riguardante gli scambi a medio e lungo termine), il mercato azionario e quello dei cambi.",),array("title"=>"Mercato grigio","text"=>"GREY MARKET<BR>Mercato non ufficiale, nel quale vengono contrattati titoli di prossima emissione. Le contrattazioni solitamente avvengono nel periodo che vadalla data di annuncio a quella del collocamento sul mercato ufficiale.",),array("title"=>"Mercato illiquido","text"=>"NARROW MARKET<BR>Mercato finanziario caratterizzato da un basso volume di contrattazione e di strumenti negoziati.",),array("title"=>"Mercato interno","text"=>"DOMESTIC MARKET<BR>Insieme delle contrattazioni aventi luogo nell'ambito del territorio economico di un paese.",),array("title"=>"Mercato monetario","text"=>"MONEY MARKET<BR>Componente del mercato finanziario, che comprende l'insieme delle negoziazioni degli strumenti di credito a breve termine.",),array("title"=>"Mercato non regolamentato","text"=>"OVER THE COUNTER MARKET (OTC)<BR>Insieme delle operazioni in titoli compiute al di fuori delle borse valori ufficiali.",),array("title"=>"Mercato piatto","text"=>"FLAT MARKET<BR>Mercato che non presenta oscillazioni rilevanti dei prezzi.",),array("title"=>"Mercato primario","text"=>"PRIMARY MARKET<BR>E' il mercato dove si contrattano titoli di nuova emissione.NAFTA<BR></B>NAFTA<BR>Sigla di North America Free Trade Agreement. Accordo siglato nel 1989 fra Stati Uniti e Canada e successivamente (1994) esteso al Messico, con lo scopo di ridurre le barriere al commercio fra le nazioni aderenti.",),

	array("title"=>"M2",
	"text"=>"M2<BR>E' il secondo aggregato monetario, dato dalla somma di M1, depositi vincolati e a tempo determinato, investimenti in fondi monetari di soggetti fisici, depositi e pronti contro termine in overnight.",),


);
$data['N'] = array(


	array("title"=>"Notes",
	"text"=>"NOTES<BR>Strumenti finanziari a breve- medio termine emessi da una societ&agrave; commerciale o da un ente pubblico e con interesse scontato anticipatamente.",),


	array("title"=>"Nuova emissione",
	"text"=>"NEW ISSUE<BR>Titoli per la prima volta offerti al pubblico, azioni o obbligazioni, solitamente sottoscritti da banche di investimento che si occupano successivamente del collocamento presso gli investitori al dettaglio.",),


	array("title"=>"Nuovo mercato",
	"text"=>"NUOVO MERCATO<BR>Sezione del MTA che si rivolge a quelle imprese e societ&agrave; operanti in settori innovativi caratterizzati da un certo fabbisogno finanziario legato a progetti o programmi di sviluppo. Costituito nel giugno 1999, &egrave; gestito e organizzato dalla Borsa Italiana S.p.A.",),


	array("title"=>"Nybor",
	"text"=>"NYBOR<BR>New York Interbank Offered Rate. Tasso di interesse al quale le maggiori banche operanti sulla piazza finanziaria di New York sono disposte a mutuare fondi ad altre banche di primaria importanza. Meno importane del LIBOR come tasso di riferimento.",),


	array("title"=>"Nairu",
	"text"=>"NAIRU<BR>Non accelerating inflation rate of unemployment. Livello di disoccupazione al di sotto del quale si determinerebbe un'accelerazione della dinamica dei prezzi.",),


	array("title"=>"Nasdaq",
	"text"=>"NASDAQ<BR>Acronimo di National Association of Securities Dealeres Automated Quotations. Si tratta di un sistema suddiviso in 9 sottoindici (N100, assicurazioni, bancari, Internet etc.). di quotazione telematica dei titoli non trattati nelle Borse valori organizzate, ma facenti riferimento ad un apposito mercato chiamato over the counter.",),


	array("title"=>"Nicchia",
	"text"=>"NICHE<BR>Segmento di mercato dalle dimensioni ridotte in cui un'impresa &egrave; per&ograve; riuscita a raggiungere una quota di mercato dominante, come pu&ograve; essere ad esempio, nel settore delle autovetture, la nicchia facente riferimento alle automobili di gran lusso.",),


	array("title"=>"Non rinnovabile",
	"text"=>"NON-REFUNDABLE<BR>E' un prestito obbligazionario in cui &egrave; presente una clausola che impedisce all'emittente il rinnovo.",),


	array("title"=>"Norme antitrust",
	"text"=>"ANTITRUST LAWS<BR>Leggi atte a evitare eventuali situazioni di monopolio o oligopolio industriale che possano nuocere al funzionamento del libero mercato.",),


	array("title"=>"Note di contratto a capitale proprio",
	"text"=>"EQUITY CONTRACT NOTES<BR>Sono titoli obbligazionari che vengono emessi da una societ&agrave; finanziaria o bancaria resi convertibili in titoli azionari specificati a un prezzo prefissato e a una data futura.",),


	array("title"=>"Note di obbligazioni a capitale proprio",
	"text"=>"EQUITY COMMITMENT NOTES<BR>Sono titoli obbligazionari che vengono emessi da una societ&agrave; finanziaria o bancaria che vanno rimborsati dalla societ&agrave; stessa in un periodo di tempo anteriore alla scadenza, tramite proventi derivanti dall'emissione di nuove azioni.",),


	array("title"=>"Note indicizzate",
	"text"=>"FLOATING RATE NOTE<BR>Titolo a medio termine il cui tasso d'interesse viene solitamente fissato ogni sei mesi sulla base dell'andamento di un determinato tasso (es. LIBOR) maggiorato di uno spread fisso.",),


	array("title"=>"Note issuance facility",
	"text"=>"NOTE ISSUANCE FACILITY (NIF)<BR>Linea di credito a medio termine, emessa da una o pi&ugrave; banche a favore di un mutuatario che avvia un programma di emissioni ripetute di strumenti a breve.",),


);
$data['O'] = array(


	array("title"=>"Obbligazione",
	"text"=>"BOND<BR>Strumento finanziario delle societ&agrave; per azioni, &egrave; un titolo di credito emesso in un'operazione di finanziamento a favore del pubblico dei risparmiatori. E' costituito da un documento destinato alla circolazione che incorpora diritti di credito di uguale valore verso la societ&agrave; emittente.",),


	array("title"=>"Obbligazione a doppia valuta",
	"text"=>"DUAL CURRENCY BOND <BR>Obbligazione internazionale emessa in una data valuta e con cedole e valore di rimborso in una valuta differente.",),


	array("title"=>"Obbligazione a garanzia generica",
	"text"=>"GENERAL OBLIGATION BOND<BR>Obbligazione emessa da un'autorit&agrave; pubblica garantito dal patrimonio e dalla solvibilit&agrave; dell'emittente.",),


	array("title"=>"Obbligazione a tasso di interesse variabile",
	"text"=>"FLOATING RATE BOND <BR>Obbligazione a tasso d'interesse variabile, generalmente rideterminato ogni tre o sei mesi, emessa a medio e lungo termine.",),


	array("title"=>"Obbligazione convertibile",
	"text"=>"CONVERTIBLE BOND<BR>E' un'obbligazione che conferisce al suo titolare la facolt&agrave; di convertire il titolo in azioni della stessa societ&agrave; che ha effettuato l'operazione di emissione o di altra societ&agrave;.",),


	array("title"=>"Obbligazione droplock",
	"text"=>"DROPLOCK BOND<BR>Titolo obbligazionario a tasso variabile che viene trasformato in tasso fisso nel momento in cui il tasso di riferimento scende al di sotto di un livello fissato precedentemente.",),


	array("title"=>"Obbligazione estera",
	"text"=>"FOREIGN BOND<BR>Obbligazione emessa da societ&agrave; non residenti sul mercato nazionale e denominata in moneta del paese di emissione.",),


	array("title"=>"Obbligazione internazionale",
	"text"=>"INTERNATIONAL BOND<BR>Obbligazione collocata e trattata in mercati diversi da quello del paese in cui ha sede l'emittente.",),


	array("title"=>"Obbligazione ipotecaria",
	"text"=>"MORTGAGE BOND<BR>Titolo obbligazionario assistito da ipoteca su uno o pi&ugrave; immobili della societ&agrave; emittente.",),


	array("title"=>"Obbligazione non riscattabile",
	"text"=>"NON-CALLABLE BOND<BR>E' un'obbligazione privo della clausola che attribuisce all'emittente la facolt&agrave; di rimborso anticipato.",),


	array("title"=>"Obbligazione yankee",
	"text"=>"YANKEE BOND<BR>Obbligazioni denominate in dollari, emesse sul mercato americano da non residenti. Sono titoli a cedola fissa, o variabile solitamente pagabile semestralmente.",),


	array("title"=>"Obbligazioni - aaa",
	"text"=>"AAA - RATED BONDS<BR>Titoli a cui &egrave; stato conferita la valutazione rating di massima solvibilit&agrave;.",),


	array("title"=>"Obbligazioni ad azzeramento",
	"text"=>"RESET BOND<BR>Obbligazioni con cedola variabile a discrezione dell'emittente, in modo che il prezzo del titolo diventi uguale al valore nominale.",),


	array("title"=>"Obbligazioni bull and bear",
	"text"=>"BULL AND BEAR BONDS<BR>Riguarda un'emissione di titoli indicizzati. Per una met&agrave; dei titoli (Bull) il rimborso avviene al valore nominale corretto in funzione diretta dell'andamento, in un preciso intervallo di tempo, di un determinato indice generale di titoli azionari, mentre per l'altra met&agrave; dei titoli (Bear) il rimborso avviene in funzione inversa dello stesso indice prescelto. Il sottoscrittore pu&ograve; scegliere indifferentemente la quota Bull o quella Bear, oppure sottoscrivere entrambe.",),


	array("title"=>"Obbligazioni del tesoro",
	"text"=>"TREASURY BOND<BR>Titoli del debito pubblico a lungo termine, emessi dal Tesoro degli Stati Uniti.",),


	array("title"=>"Obbligazioni lyon",
	"text"=>"LYONS<BR>Tipo particolare di obbligazioni a capitalizzazione integrale degli interessi, convertibili in qualsiasi momento in azioni ordinarie della societ&agrave; emittente, esercitabile sia dal detentore che dall'emittente.",),

	array("title"=>"Obbligazioni samurai",
	"text"=>"SAMURAI BONDS<BR>Obbligazioni denominate in yen emesse sul mercato interno giapponese da mutuatari esteri.<BR><B><BR>OBBLIGO DI AZZERAMENTO",),

	array("title"=>"Occupazione totale","text"=>"OCCUPIED POPULATION<BR>Aggregato comprendente tutte le persone che esercitano un'attivit&agrave; produttiva.",),array("title"=>"O.b.v.","text"=>"ON BALANCE VOLUME<BR>E' un indicatore utilizzato in analisi tecnica per individuare se un titolo sta attraversando una fase rialzista o ribassista.",),array("title"=>"Ocse","text"=>"OECD<BR>Sigla di Organization for Economic Co-operation and Development, Organizzazione per la cooperazione e lo sviluppo economico. E' un organismo internazionale con sede a Parigi fondato nel 1961. Ha lo scopo di favorire lo sviluppo economico dei paesi membri, accrescere il livello di occupazione, promuovere lo sviluppo degli scambi internazionali. Ne fanno parte Australia, Austria, Belgio, Canada, Danimarca, Finlandia, Francia, Germania, Giappone, Grecia, Irlanda, Islanda, Italia, Lussemburgo, Messico, Norvegia, Nuova Zelanda, Paesi Bassi, Portogallo, Regno Unito, Repubblica Ceca, Spagna, Stati Uniti, Svezia, Svizzera e Turchia.P.M.V.<BR></B>PRIVATE MARKET VALUE <BR>E' il valore complessivo di un'azienda che si ottiene valutando ciascuna delle divisioni come se fossero entit&agrave; singole, dotate di un titolo azionario indipendente.",),

);
$data['P'] = array(


	array("title"=>"Pac",
	"text"=>"PERIODIC PAYMENT PLAN<BR>Piano di accumulo del capitale. E' una forma di sottoscrizione di quote di fondi comuni che prevede dei pagamenti periodici, e la possibilit&agrave; di richiedere il rimborso delle quote maturate, dopo un determinato periodo di tempo.",),


	array("title"=>"Paese in via di sviluppo",
	"text"=>"LESS DEVELOPED COUNTRY<BR>Secondo le classificazioni dell'IMF fanno parte di questa categoria tutti quei paesi non ancora industrializzati o in via di industrializzazione.",),


	array("title"=>"Paesi di recente industrializzazione",
	"text"=>"NEW INDUSTRIALIZED ECONOMIES (NIEs)<BR>Generalmente ci si riferisce al gruppo di paesi asiatici che a partire dagli anni settanta hanno realizzato un notevole sviluppo industriale, in particolare Corea del Sud, Hong Kong, Singapore e Taiwan.",),


	array("title"=>"Pagamento al terminale pos",
	"text"=>"POINT OF SALE PAYMENT (POS)<BR>Sistema di pagamento elettronico, che permette di regolare gli acquisti facendo accreditare il conto corrente del venditore e addebitare quello del compratore.",),


	array("title"=>"Pagamento alla consegna",
	"text"=>"CASH ON DELIVERY<BR>Clausola riguardante le contrattazioni in titoli, o altri beni di investimento, secondo la quale il controvalore della vendita deve essere corrisposto al momento della consegna materiale dei titoli.",),


	array("title"=>"Pagamento contro pagamento",
	"text"=>"PAYMENT VERSUS PAYMENT (pvp) <BR>In un sistema per il regolamento di operazioni in cambi, &egrave; un meccanismo attraverso il quale il trasferimento di valuta avviene solo dietro contestuale trasferimento della valuta di contropartita.",),


	array("title"=>"Pagamento in contanti",
	"text"=>"RECEIVE VERSUS PAYMENT<BR>Nelle contrattazioni in titoli, clausola attraverso la quale l'intermediario &egrave; obbligato ad accettare in pagamento per i titoli venduti unicamente denaro contante, e a consegnare i titoli solo nello stesso momento della ricezione del pagamento.",),


	array("title"=>"Paghero'",
	"text"=>"DEBENTURE<BR>Promessa di pagamento priva di garanzia se non il buon nome del beneficiario del prestito. E' anche un'obbligazione assistita da garanzia reale sulla totalit&agrave; o su parte del patrimonio dell'emittente. Detto anche Promissory Note",),


	array("title"=>"Pan europei",
	"text"=>"PAN EUROPEAN<BR>Termine utilizzato per fare riferimento ai paesi aderenti all'Unione Europea.",),


	array("title"=>"Paradiso fiscale",
	"text"=>"TAX HEAVEN<BR>Paese il cui sistema retributivo prevede oneri fiscali nulli o particolarmente favorevoli per determinate categorie di redditi come ad esempio Bahamas, il Principato di Monaco etc. .",),


	array("title"=>"Parere contabile",
	"text"=>"ACCOUNTANT'S OPINION<BR>Documento elaborato ad opera di una societ&agrave; di revisione dopo aver esaminato le risultanze contabili e la tenuta delle scritture di una societ&agrave;, sul quale vengono riportate le principali conclusioni riferite alla correttezza dei principi contabili impiegati.",),


	array("title"=>"Parita' del potere di acquisto",
	"text"=>"PURCHASING POWER PARITY <BR>Teoria economica in base alla quale il prezzo di uno stesso bene in due diverse nazioni espresso nella stessa valuta dev'essere identico.",),


	array("title"=>"Parita' di conversione",
	"text"=>"CONVERSION PARITY<BR>Equivalenza fra il valore dell'azione di compendio e il valore teorico dell'obbligazione convertibile.",),


	array("title"=>"Partecipazione di minoranza",
	"text"=>"MINORITY INTEREST<BR>Partecipazione azionaria inferiore al 50%, o comunque non sufficiente a esercitare il controllo sulla societ&agrave;.",),


	array("title"=>"Partecipazioni",
	"text"=>"PARTICIPATING INTERESTS<BR>Posta dell'attivo patrimoniale di un'azienda che registra il valore dei diritti al capitale di altre imprese.",),


	array("title"=>"Partire prima",
	"text"=>"GOING AHEAD<BR>Operazione non consentita dalle regole dove un intermediario in titoli svolge un operazione prima per il proprio conto e solo in seguito per il cliente, allo scopo di incamerare un differenziale di prezzo.",),


	array("title"=>"Partite visibili",
	"text"=>"VISIBLE TRADE<BR>Transazioni commerciali con l'estero aventi per oggetto beni materiali.",),


	array("title"=>"Passivita'",
	"text"=>"LIABILITY<BR>Rientrano in questa categoria i debiti commerciali, i finanziamenti a lungo termine, i prestiti obbligazionari, ecc.",),


	array("title"=>"Passivita' correnti",
	"text"=>"CURRENT LIABILITY<BR>Finanziamenti che contrae una societ&agrave; per la gestione corrente. Ne fanno parte i debiti commerciali, gli scoperti di conto corrente, ecc.",),


	array("title"=>"Payout dei dividendi",
	"text"=>"DIVIDEND PAYOUT RATIO<BR>Si tratta del rapporto tra il totale dei dividendi che vengono distribuiti e l'utile di esercizio. Un rapporto elevato viene generalmente considerato sintomo di maturit&agrave; gestionale dell'impresa.",),


	array("title"=>"Penale per rimborso anticipato",
	"text"=>"EARLY WITHDRAWAL PENALITY<BR>Il costo sostenuto dal possessore di uno strumento monetario nel momento in cui avanza la richiesta di rimborso anticipato.",),


	array("title"=>"Penuria",
	"text"=>"SHORTAGE<BR>Insufficiente disponibilit&agrave; di un bene, di un fattore produttivo o di mezzi di pagamento, rispetto alle condizioni normali di offerta.",),


	array("title"=>"Percentuale di copertura",
	"text"=>"ASSET COVERAGE<BR>Rapporto tra le attivit&agrave; nette di un'azienda e uno o pi&ugrave; elementi delle passivit&agrave; o dei mezzi propri.",),


	array("title"=>"Percentuale di fido",
	"text"=>"LOAN TO VALUE RATIO<BR>Rapporto tra ammontare del credito concesso e valore del bene offerto in garanzia. E' utilizzato per valutare l'esposizione creditizia e per rivedere i termini dell'affidamento.",),


	array("title"=>"Perdere il mercato",
	"text"=>"MISSING THE MARKET<BR>Situazione in cui un intermediario non esegue, per negligenza, una contrattazione di Borsa, arrecando un danno di dimensioni variabili al cliente.",),


	array("title"=>"Perdita",
	"text"=>"LOSS<BR>Risultato di un'operazione dove i costi sono stati superiori ai ricavi.",),


	array("title"=>"Perdita in conto capitale",
	"text"=>"CAPITAL LOSS<BR>Differenza negativa tra il prezzo di acquisto di un'attivit&agrave; e il suo prezzo corrente a un'epoca posteriore.",),


	array("title"=>"Perdita su crediti",
	"text"=>"CREDIT LOSS<BR>Perdita subita da un ente che ha concesso un finanziamento nel caso in cui il prestito non venga rimborsato.",),


	array("title"=>"Perequazione",
	"text"=>"SMOOTING<BR>Procedimento statistico mediante il quale una successione di osservazioni che presenta una certa irregolarit&agrave; viene sostituita con una con un andamento pi&ugrave; regolare.",),


	array("title"=>"Periodo di rientro",
	"text"=>"PAYBACK PERIOD<BR>Intervallo di tempo necessario perch&eacute; le uscite di cassa originate da un determinato investimento siano eguagliate da flussi monetari in entrata imputabili all'investimento medesimo.",),


	array("title"=>"Periodo di sottoscrizione",
	"text"=>"SUBSCRIPTION PERIOD<BR>Durata di un'operazione di sottoscrizione di titoli sul mercato primario.",),


	array("title"=>"Periodo di tolleranza",
	"text"=>"GRACE PERIOD<BR>Periodo di tempo intercorrente fra l'erogazione dei fondi e l'inizio dei rimborsi.",),


	array("title"=>"Persuasione morale",
	"text"=>"MORAL SUASION<BR>E' un'azione esortativa compiuta da un'autorit&agrave; nei confronti di determinate categorie di soggetti, al fine di orientarne il comportamento.",),


	array("title"=>"Pianificazione finanziaria",
	"text"=>"FINANCIAL PLANNING <BR>L'operazione di identificazione del fabbisogno \"finanziario futuro\" di un soggetto e l'approntamento di tutte quelle operazioni necessarie alla sua copertura. Nel settore degli investimenti personali, si pu&ograve; definire in questo modo la pianificazione di un programma di investimenti capace di corrispondere alle future esigenze del soggetto stesso, come potrebbe essere una pensione integrativa. Nell'ambito bancario invece, la programmazione delle dinamiche riguardanti le grandezze pi&ugrave; importanti dell'ente creditizio, come per esempio l'incremento degli impieghi e dei depositi, come pure di tutti quegli investimenti utili al raggiungimento degli obiettivi prefissati.",),


	array("title"=>"Piano di diffusione del capitale azionario ai dipendenti",
	"text"=>"EMPLOYEE OWNERSHIP PLAN (ESOP)<BR>Metodo di diffusione dell'azionariato e di incentivazione dei dipendenti che prevede di offrire loro, a condizioni privilegiate, azioni o anche opzioni d'acquisto di azioni della societ&agrave;.",),


	array("title"=>"Piano di divisione dei profitti",
	"text"=>"PROFIT SHARING PLAN<BR>Piano aziendale che prevede la possibilit&agrave; di una remunerazione dei lavoratori in funzione del risultato economico realizzato dall'azienda.",),


	array("title"=>"Piatto",
	"text"=>"FLAT<BR>Nell'emissione di obbligazioni a cedola indicizzata indica il caso in cui i titoli offrono uno spread nullo rispetto al parametro di indicizzazione.",),


	array("title"=>"Pil",
	"text"=>"GDP<BR>Gross domestic product, prodotto interno lordo. E' il valore complessivo della produzione di beni e servizi delle unit&agrave; operanti nel territorio economico di un determinato paese durante il periodo considerato, diminuito dei consumi intermedi.",),


	array("title"=>"Piramide finanziaria",
	"text"=>"FINANCIAL PYRAMID <BR>Metodologia gestionale di patrimonio, che consiste nell'investire una parte decrescente dello stesso in titoli a pi&ugrave; alto rischio.",),


	array("title"=>"Piu' lontano/vicino",
	"text"=>"FARTHER OUT/IN<BR>Nel mercato degli strumenti derivati, termine utilizzato in riferimento ai mesi di scadenza degli stessi.",),


	array("title"=>"Plafond",
	"text"=>"PLAFOND<BR>Limite di fido, credito, scoperto di cassa, rischio, ecc.",),


	array("title"=>"Policy maker",
	"text"=>"POLICY MAKER<BR>Termine utilizzato per indicare l'autorit&agrave; cui compete la formulazione e l'attuazione della politica economica.",),


	array("title"=>"Politica di beggar my neighbour",
	"text"=>"BEGGAR MY NEIGHBOUR POLICY<BR>Politiche economiche destinate a migliorare le condizioni economiche interne a danno di paesi esteri. Tipicamente politiche protezionistiche o di svalutazioni competitive.",),


	array("title"=>"Politica di pulizia bilancio",
	"text"=>"WINDOW DRESSING<BR>Operazione effettuata prima della chiusura dell'esercizio allo scopo di migliorare artificialmente le posizioni di bilancio.",),


);
$data['Q'] = array(


	array("title"=>"Quota qualificante",
	"text"=>"QUALIFYING SHARE<BR>Frazione del capitale sociale che attribuisce al possessore il diritto di nomina del direttore generale.",),


	array("title"=>"Quotazione",
	"text"=>"FIXING<BR>Quotazione ufficiali di titoli oggetto di trattazione continua.",),


	array("title"=>"Quotazione certo per incerto",
	"text"=>"VOLUME QUOTATION<BR>Quotazione del tasso di cambio in base al quale questo &egrave; espresso in numero di unit&agrave; della valuta estera considerata per una unit&agrave; di moneta nazionale.",),


	array("title"=>"Quoziente di tesoreria",
	"text"=>"CASH RATIO<BR>Rapporto tra contante e beni agevolmente convertibili in denaro e le passivit&agrave; correnti. E' un indicatore della liquidit&agrave; immediata di un'azienda.",),


	array("title"=>"Quoziente q",
	"text"=>"Q RATIO<BR>Detta anche Q di Tobin, economista che individu&ograve; questo rapporto. E' ottenuta come rapporto fra il valore di mercato del capitale aumentato delle passivit&agrave; nette e il costo di sostituzione delle immobilizzazioni ed &egrave; un indicatore della convenienza di un investimento.RAGIONI DI SCAMBIO<BR></B>TERMS OF TRADE<BR>Rapporto in cui vengono scambiati due beni, &egrave; il prezzo di un bene in termini dell'altro.",),


	array("title"=>"Qualita' degli investimenti",
	"text"=>"ASSET QUALITY<BR>Termine impiegato con riferimento a titoli obbligazionari di alta qualit&agrave; e valore.",),


	array("title"=>"Quota di mercato",
	"text"=>"MARKET SHARE<BR>Rappresenta la misura in cui l'impresa &egrave; riuscita a dominare il mercato di riferimento.",),


	array("title"=>"Quota parte",
	"text"=>"UNIT<BR>Titolo rilasciato da un fondo comune di investimento a fronte del diritto del partecipante al patrimonio del fondo stesso.",),


);
$data['R'] = array(


	array("title"=>"Rapporto del capitale circolante",
	"text"=>"WORKING CAPITAL RATIO<BR>Vedi current ratio.",),


	array("title"=>"Rapporto di capitale corretto",
	"text"=>"ADJUSTED CAPITAL RATIO <BR>Viene utilizzato per valutare l'adeguatezza del capitale esistente a fronte degli investimenti. Si calcola come rapporto fra il capitale e il totale degli investimenti.",),


	array("title"=>"Rapporto di conversione",
	"text"=>"CONVERSION RATIO <BR>Coefficiente che indica il quantitativo di azioni che verranno ricevute a seguito della conversione di un titolo obbligazionario convertibile o di quella di un titolo azionario convertibile.",),


	array("title"=>"Rapporto di copertura",
	"text"=>"COVERAGE RATIO<BR>Rapporto fra le riserve per i rischi su crediti e il totale degli impieghi in sofferenza. Viene utilizzato per valutare in che termini la banca pu&ograve; sostenere le perdite dei finanziamenti originati dell'esercizio dell'attivit&agrave; di credito.",),


	array("title"=>"Rapporto di copertura del debito",
	"text"=>"DEBT SERVICE RATIO<BR>Rapporto tra il reddito societario netto e oneri per interessi e rimborsi in conto capitale.",),


	array("title"=>"Rapporto di credito",
	"text"=>"QUALIFYING RATIO<BR>E' un rapporto utilizzato nelle analisi di credito personale. E' ottenuto dividendo le spese per l'abitazione e le tasse per il reddito lordo di un individuo.",),


	array("title"=>"Rapporto di distribuzione",
	"text"=>"PAYOUT RATIO<BR>Rapporto fra totale dei dividenti e utile complessivo.",),


	array("title"=>"Rapporto di indebitamento",
	"text"=>"GEARING RATIO<BR>Indice di bilancio attraverso il quale viene misurata l'incidenza del capitale di prestito sul patrimonio di un'impresa. E' formulato dal rapporto tra le varie componenti del debito societario ed i mezzi propri.",),


	array("title"=>"Rapporto di liquidita' a breve",
	"text"=>"CURRENT RATIO<BR>Rapporto tra attivit&agrave; e passivit&agrave; correnti, utilizzato per valutare quando un'impresa &egrave; in grado di finanziare il proprio fabbisogno a breve termine per mezzo degli incassi provenienti dalla gestione.",),


	array("title"=>"Rapporto di scoperto",
	"text"=>"SHORT SALE RATIO<BR>Rapporto fra i titoli che sono stati venduti allo scoperto e il totale delle operazioni eseguite. E' un indicatore delle aspettative degli operatori nel breve periodo.",),


	array("title"=>"Rapporto fatturato attivo",
	"text"=>"SALES TO ASSETS RATIO<BR>Indicatore di efficienza che fornisce una misura del grado di intensit&agrave; con cui &egrave; utilizzato il capitale investito di un'azienda. E' dato dal rapporto fra il fatturato e la consistenza dell'attivo in un determinato periodo di riferimento.",),


	array("title"=>"Rapporto passivita'/capitale proprio",
	"text"=>"DEBT/EQUITY RATIO<BR>Indice della struttura dei finanziamenti, &egrave; rappresentato dal rapporto tra il totale delle passivit&agrave; e i mezzi propri.",),


	array("title"=>"Rapporto prezzo/utile",
	"text"=>"PRICE EARNINGS RATIO<BR>Rapporto che serve ad indicare quante volte il prezzo di un titolo copre gli utili che sono o saranno conseguiti da una societ&agrave;.",),


	array("title"=>"Rapporto utili/prezzo",
	"text"=>"EARNINGS/PRICE RATIO (E/P)<BR>Con riferimento ad un titolo azionario &egrave; il rapporto tra l'utile per azione e il prezzo corrente del titolo. Detto anche Earnings Yield, rendimento degli utili, poich&eacute; pu&ograve; essere utilizzato per comparare tra di loro investimenti differenti.",),


	array("title"=>"Rate",
	"text"=>"INSTALMENTS<BR>Sono le rate di rimborso di un prestito.",),


	array("title"=>"Rateo d'interesse",
	"text"=>"ACCRUED INTEREST<BR>E' l'interesse maturato ma non ancora riscosso.",),


	array("title"=>"Rating del credito",
	"text"=>"CREDIT RATING<BR>Giudizio e analisi sulla idoneit&agrave; da parte di un soggetto di rimborsare e adempiere alle obbligazioni contratte nel presente e nel passato.",),


	array("title"=>"Rating delle obbligazioni",
	"text"=>"BOND RATING<BR>Valutazione che specifiche societ&agrave; di analisi danno a un'obbligazione, quindi un giudizio sulla capacit&agrave; dell'emittente di assolvere i propri impegni di pagamento derivanti dall'aver emesso le suddette obbligazioni. i rating generalmente variano tra aaa (valore massimo) a ddd (valore minimo).",),


	array("title"=>"Reale",
	"text"=>"REAL<BR>Termine impiegato per riferirsi a modifiche di grandezze economiche al netto delle variazioni del livello generale dei prezzi.",),


	array("title"=>"Recessione",
	"text"=>"RECESSION<BR>Fase del ciclo economico caratterizzata da una contrazione dell'attivit&agrave; produttiva .",),


	array("title"=>"Redditivita'",
	"text"=>"PROFITABILITY<BR>Attitudine di un investimento o di un'azienda a produrre reddito.",),


	array("title"=>"Redditivita' del capitale al valore di mercato",
	"text"=>"RETURN ON MARKET VALUE (ROM)<BR>E' dato dal rapporto fra l'utile netto di un'impresa e il valore medio della capitalizzazione di borsa dell'impresa stessa nel periodo considerato.",),


	array("title"=>"Reddito",
	"text"=>"INCOME<BR>Flusso di beni (espresso solitamente in forma monetaria) acquisiti da un soggetto economico in un certo periodo di temporale quale corrispettivo per prestazioni di lavoro o di altro tipo.",),


	array("title"=>"Reddito da capitale",
	"text"=>"INVESTMENT INCOME <BR>Proventi generati dagli investimenti, per quanto riguarda i titoli rientrano in questa categoria dividendi, cedole, capital gain, premi di opzioni.",),


	array("title"=>"Reddito disponibile delle famiglie",
	"text"=>"PERSONAL DISPOSABLE INCOME<BR>Aggregato dei redditi da lavoro e da capitale percepiti dal settore delle famiglie al netto dei trasferimenti verso altri settori.",),


	array("title"=>"Reddito imponibile",
	"text"=>"TAXABLE INCOME<BR>Ammontare di reddito al quale &egrave; applicata l'aliquota d'imposta.",),


	array("title"=>"Reddito netto",
	"text"=>"NET INCOME<BR>Risultato netto di gestione. E' dato dalla differenza fra totale dei ricavi e totale dei costi.",),


	array("title"=>"Reddito operativo",
	"text"=>"EARNED INCOME<BR>E' il reddito ottenuto nella produzione e nello scambio di beni e servizi.",),


	array("title"=>"Reddito pro capite",
	"text"=>"PER CAPITA INCOME<BR>E' dato dal reddito nazionale diviso la popolazione residente, rappresenta un indicatore dello sviluppo economico di un paese.",),


	array("title"=>"Regolamento",
	"text"=>"SETTLEMENT<BR>Estinzione delle obbligazioni delle controparti di una transazione.",),


	array("title"=>"Regolamento per cassa",
	"text"=>"CASH SETTLEMENT<BR>Processo di estinzione degli obblighi finanziari utilizzato in diversi mercati di strumenti derivati. Consiste nella liquidazione della differenza tra il prezzo al quale il contratto era stato stipulato e la quotazione corrente del sottostante.",),


	array("title"=>"Regressione",
	"text"=>"REGRESSION <BR>Metodo statistico che stima le relazioni esistenti fra pi&ugrave; variabili economiche.",),


	array("title"=>"Rendimenti decrescenti",
	"text"=>"DIMINISHING RETURNS<BR>Fenomeno per l'impiego di quantit&agrave; incrementali di fattori produttivi determina aumenti meno che proporzionali del prodotto.",),


	array("title"=>"Rendimenti di scala",
	"text"=>"RETURNS TO SCALE<BR>Variazione della produzione in rapporto alle variazioni di specifici fattori produttivi. I rendimenti di scala possono essere sia crescenti che decrescenti o costanti, legati come sono alla proporzione in cui cresce la produzione al variare dei rapporti.",),


	array("title"=>"Rendimento",
	"text"=>"RATE OF RETURN<BR>Viene cos&igrave; definito il rapporto fra il reddito che viene generato da un investimento e la corrispondente somma investita, espresso come percentuale del capitale impiegato.",),


	array("title"=>"Rendimento a scadenza",
	"text"=>"YIELD TO MATURITY<BR>Il rendimento di un'obbligazione acquistata ai prezzi di mercato e detenuta fino alla scadenza.",),


	array("title"=>"Rendimento atteso",
	"text"=>"EXPECTED RETURN <BR>Rendimento che, operando sulla base di tutte le informazioni disponibili nel momento della previsione, ci si attende dall'investimento di un titolo, di un bene, di una materia prima.",),


	array("title"=>"Rendimento degli investimenti",
	"text"=>"RETURN ON ASSET (ROA)<BR>In analisi di bilancio indica il rendimento percentuale conseguito dagli investimenti aziendali. E' dato dal rapporto tra l'utile netto al totale delle attivit&agrave;.",),


	array("title"=>"Rendimento dei mezzi propri",
	"text"=>"RETURN ON EQUITY (ROE)<BR>Indice di redditivit&agrave; del capitale proprio ottenuto dividendo l'utile netto di una societ&agrave; per il patrimonio netto aziendale.",),


	array("title"=>"Rendimento del capitale investito",
	"text"=>"RETURN ON INVESTMENT (ROI)<BR>Indice percentuale che permette una valutazione sintetica della redditivit&agrave; del capitale investito in una impresa. Si calcola attraverso un rapporto tra il reddito operativo ed il capitale investito totale.",),


	array("title"=>"Rendimento effettivo",
	"text"=>"ACTUAL YIELD<BR>E' il rendimento di un titolo obbligazionario calcolato tenendo conto della differenza fra valore nominale e prezzo di mercato e del futuro incasso delle cedole.",),


	array("title"=>"Rendimento immediato",
	"text"=>"CURRENT YIELD<BR>Parte di reddito di un titolo derivante soltanto dalle cedole, ad esempio dagli interessi per i titoli obbligazionari. Viene calcolato come rapporto tra cedola annuale e prezzo del titolo.",),


	array("title"=>"Rendimento lordo",
	"text"=>"GROSS YIELD<BR>Reddito, espresso in termini di saggio percentuale annuo, ottenibile da un investimento finanziario, al lordo dei costi di finanziamento e di gestione dello stesso.S&P 500<BR></B>S&P 500<BR>Uno degli indici della Borsa di New York, &egrave; calcolato sui 500 titoli a maggiore capitalizzazione.",),


	array("title"=>"Raider",
	"text"=>"RAIDER<BR>Soggetto (individuale o societario) il cui intento &egrave; quello di raggiungere il controllo di una societ&agrave; sostituendosi al management della stessa. Pu&ograve; gi&agrave; essere in possesso dei fondi necessari al rastrellamento dei titoli necessari, oppure finanziarsi grazie all'emissione di Junk Bond.",),


	array("title"=>"Random walk",
	"text"=>"RANDOM WALK<BR>E' un processo statistico caratterizzato dall'indipendenza di ogni osservazione di un serie storica da quelle che la precedono.",),


	array("title"=>"Rapporto capitalizzazione/obbligazioni",
	"text"=>"BOND RATIO<BR>Si utilizza per definire in che misura una societ&agrave; sia finanziata da emissioni di debito a lungo termine e si calcola dividendo l'ammontare totale delle obbligazioni che saranno ancora in vita tra un anno e lo stesso valore sommato dei mezzi propri.",),


);
$data['S'] = array(


	array("title"=>"Saldo disponibile",
	"text"=>"AVAILABLE BALANCE <BR>Il saldo di un conto corrente di fatto disponibile per il cliente. E' rappresentato dalla somma presente nel conto alla quale si devono sommare i depositi non ancora accreditati.",),


	array("title"=>"Saldo giornaliero",
	"text"=>"DAILY BALANCING<BR>Compensazione di tutte le operazioni monetarie eseguite nel corso della giornata.",),


	array("title"=>"Saldo minimo di compensazione",
	"text"=>"COMPENSATING BALANCE <BR>Saldo minimo che un debitore &egrave; obbligato a tenere sul conto di finanziamento ottenuto, per compensare la banca delle spese di mantenimento del suddetto conto.",),


	array("title"=>"Salvataggio",
	"text"=>"BAILOUT<BR>Intervento effettuato da istituzioni bancarie o di carattere pubblico in soccorso di un'azienda privata per evitarne il fallimento tramite iniezioni di liquidit&agrave;, concessione di prestiti agevolati o esenzione fiscale.",),


	array("title"=>"Scadenza",
	"text"=>"EXPIRATION<BR>Momento dell'annullamento della validit&agrave; di un credito o di un titolo. In relazione ad uno strumento derivato, &egrave; l'ultimo giorno utile per esercitare i diritti derivanti dal possesso del titolo.",),


	array("title"=>"Scadenze combacianti",
	"text"=>"MATCHED MATURITIES<BR>Per un portafoglio di attivit&agrave; e passivit&agrave; sensibili ai tassi d'interesse, &egrave; la caratteristica di avere scadenze combacianti, in modo da bilanciare gli effetti positivi e negativi delle variazioni di prezzo.",),


	array("title"=>"Scalata",
	"text"=>"BUYOUT<BR>Acquisizione di una percentuale di azioni di una societ&agrave; sufficiente a detenerne il controllo, realizzata tramite un'offerta pubblica d'acquisto o la negoziazione diretta con gli azionisti di riferimento. Detta anche Take Over.",),


	array("title"=>"Scalping",
	"text"=>"SCALPING<BR>Strategia di negoziazione mirata a realizzare ogni opportunit&agrave; di guadagno nel brevissimo periodo lucrando anche i minimi differenziali che si creano nel contesto di un mercato volatile.",),


	array("title"=>"Scarico",
	"text"=>"UNLOADING<BR>Vendita di titoli o di altri beni di investimento eseguita per ridurre le perdite in caso di ribasso dei prezzi, oppure per abbassare drasticamente le scorte di tali beni con ricavo di contante per utilizzi diversi.",),


	array("title"=>"Scarpa verde",
	"text"=>"GREEN SHOE<BR>Accordo preso dall'emittente con il sindacato di collocamento secondo il quale, nell'eventualit&agrave; di una domanda elevata da parte degli investitori, chi ha emesso il titolo autorizzer&agrave; un incremento del quantitativo collocato.",),


	array("title"=>"Scarto dal pil potenziale",
	"text"=>"OUTPUT GAP<BR>Scarto fra il PIL effettivo e quello potenziale in un determinato periodo.",),


	array("title"=>"Scarto di garanzia",
	"text"=>"HAIRCUT<BR>Differenza fra il valore attribuito ai beni costituiti in pegno in un'operazione di anticipazione garantita e l'ammontare del credito accordato.",),


	array("title"=>"Scarto quadratico medio",
	"text"=>"STANDARD DEVIATION<BR>Radice quadrata della varianza, ossia della sommatoria degli scarti rispetto alla media al quadrato. Misura la dispersione di una variabile intorno al suo valore medio.",),


	array("title"=>"Scompenso di liquidita'",
	"text"=>"LIQUIDITY GAP<BR>Situazione finanziaria caratterizzata da un'insufficienza di mezzi liquidi per fra fronte agli impegni correnti.",),


	array("title"=>"Sconto",
	"text"=>"DISCOUNT<BR>In caso di emissione di Buoni del Tesoro, si intende la differenza tra il prezzo e il valore nominale. Pi&ugrave; in generale, la differenza di prezzo tra due titoli paragonabili, come un'azione ordinaria e un'azione di risparmio. Nel settore cambi, la diminuzione di valore che va applicata al cambio spot per poter definire il cambio a termine, dovuto al differenziale negativo dei tassi d'interesse delle due divise. Infine, a livello commerciale, la detrazione dell'interesse anticipato dall'ammontare di un credito commerciale attuata per l'erogazione immediata della somma che sar&agrave; disponibile alla scadenza.",),


	array("title"=>"Scoperto",
	"text"=>"OVERDRAFT<BR>Tipo di apertura di credito in conto corrente. Pu&ograve; rappresentare una modalit&agrave; di finanziamento aziendale.",),


	array("title"=>"Scorporazione",
	"text"=>"SPIN-OFF<BR>Successiva alla creazione di una nuova entit&agrave; giuridica, &egrave; l'operazione di assegnazione di parte dei titoli dell'azienda originaria.",),


	array("title"=>"Scorporo delle cedole",
	"text"=>"COUPON STRIPPING<BR>Serve a indicare una tecnica di gestione dei titoli a reddito fisso gi&agrave; esistenti che sfrutta caratteristiche e vantaggi degli zero coupon. Le cedole vengono separate dai titoli: sia cedole che titoli divengono cos&igrave; del tutto simili agli zero coupon.",),


	array("title"=>"Scorte cuscinetto",
	"text"=>"BUFFER STOCKS<BR>Giacenze di prodotti detenute allo scopo di smorzare l'impatto delle oscillazioni di prezzo.",),


	array("title"=>"Securitization",
	"text"=>"SECURITIZATION<BR>Processo di sostituzione dei tradizionali prestiti bancari, con forme di finanziamento rappresentate da titoli negoziabili. E' una delle cause della disintermediazione bancaria su scala mondiale.",),


	array("title"=>"Sede legale",
	"text"=>"REGISTERED OFFICE<BR>Di una societ&agrave;, luogo in cui dall'atto costitutivo e dal registro delle imprese essa risulta avere il centro della propria attivit&agrave;.",),


	array("title"=>"Segmentazione del mercato",
	"text"=>"MARKET SEGMENTATION<BR>Situazione di imperfetto equilibrio in cui i corsi di strumenti finanziari comparabili differiscono fra i vari comparti del mercato.",),


	array("title"=>"Semestrale",
	"text"=>"INTERIM RESULTS<BR>Prospetto che segue la stessa struttura del bilancio di esercizio e che le societ&agrave; quotate sono tenute a pubblicare.",),


	array("title"=>"Sempreverde",
	"text"=>"EVERGREEN <BR>Particolare forma di prestito con la quale una banca mette a disposizione del proprio cliente una linea di credito per una durata non predeterminata.",),


	array("title"=>"Sentimento",
	"text"=>"SENTIMENT<BR>Condizione emotiva degli investitori che influenza l'andamento dei prezzi e dei volumi delle contrattazioni.",),


	array("title"=>"Senza scopo di lucro",
	"text"=>"NOT FOR PROFIT<BR>Fondazione o associazione la cui attivit&agrave; consiste essenzialmente nel fornire servizi non destinabili alla vendita.",),


	array("title"=>"Serie storica",
	"text"=>"TIME SERIES<BR>Successione di dati statistici che rilevano l'intensit&agrave; o la frequenza di una variabile in riferimento a modalit&agrave; di tempo.",),


	array("title"=>"Servizi di sportello",
	"text"=>"FRONT OFFICE<BR>In una banca, settore preposto all'esecuzione delle varie operazioni a diretto contatto con la clientela.",),


	array("title"=>"Servizio del debito",
	"text"=>"DEBT SERVICE<BR>Ammontare dei pagamenti per interesse e quote di capitale in scadenza.",),


	array("title"=>"Settore",
	"text"=>"SECTOR<BR>Insieme di societ&agrave; raggruppabili in una medesima categoria per il tipo di attivit&agrave; svolta.",),


	array("title"=>"Settore chiave",
	"text"=>"KEY INDUSTRY<BR>Settore di primaria importanza per attivit&agrave; economica di una nazione.",),


	array("title"=>"Shock dal lato dell'offerta<br>supply shock",
	"text"=>"Fattore perturbativo del mercato proveniente dalle fonti di approvvigionamento di un dato prodotto.",),


	array("title"=>"Shock petrolifero",
	"text"=>"OIL SHOCK<BR>Fase di forte inflazione collegata a un rincaro dei prezzi del petrolio. Importanti le crisi dovute a uno shock petrolifero del 1973 e del 1979.",),


	array("title"=>"Sicav",
	"text"=>"OPEN ENDED INVESTMENT COMPANY<BR>Societ&agrave; d'investimento a capitale variabile. Organismo assimilabile a un Fondo comune di investimento, con la differenza che l'investitore assume la figura di socio con la possibilit&agrave; di influire, mediante l'esercizio del diritto di voto, sulla politica gestionale della societ&agrave;.",),


	array("title"=>"Sindacato di distribuzione",
	"text"=>"DISTRIBUTING SYNDACATE<BR>Insieme di istituzioni finanziarie che hanno l'obiettivo di collocare presso gli investitori una determinata quantit&agrave; di titoli, solitamente di nuova emissione.",),


	array("title"=>"Sindacato di emissione",
	"text"=>"ISSUING SYNDICATE<BR>Accordo con il quale due o pi&ugrave; istituzioni si propongono di collocare presso il pubblico o presso determinati investitori istituzionali i titoli azionari o obbligazionari emessi da una societ&agrave;.",),


	array("title"=>"Sistema della federal reserve",
	"text"=>"FEDERAL RESERVE SYSTEM<BR>Vedi Fed",),


	array("title"=>"Sistema di bretton woods",
	"text"=>"BRETTON WOODS SYSTEM<BR>Insieme di accordi economico-finanziari presi da pi&ugrave; di 40 Paesi nel corso di una conferenza tenutasi nel 1944 a Bretton Woods, nella quale, tra l'altro, furono creati il Fondo Monetario Internazionale e la Banca Mondiale.",),


	array("title"=>"Sistema di indicatori di allarmi",
	"text"=>"EARLY WARNING SYSTEM<BR>Meccanismo che, attraverso il controllo sistematico di determinati parametri, permette di segnalare una situazione critica.TASSA SUL GUADAGNO IN CONTO CAPITALE<BR></B>CAPITAL GAIN TAX<BR>Imposta sui guadagni in conto capitale ricavati dall'investimento in titoli. Non ne fanno parte, per definizione, i profitti derivanti dalla riscossione dei dividendi.",),


	array("title"=>"Fondi comuni a scadenza",
	"text"=>"UNIT INVESTMENT TRUST<BR>Tipo di fondo comune di investimento il cui patrimonio viene investito interamente in titoli obbligazionari, titoli di Stato e certificati ipotecari. I possessori delle quote del fondo partecipano agli incrementi di capitale e alla maturazione degli interessi in proporzione alle quote possedute. La caratteristica di questo fondo &egrave; quella di acquisire un portafoglio di titoli che non viene movimentato fino a quando tutti i titoli non giungono a scadenza. Solo alla scadenza ai possessori delle quote verr&agrave; restituito il capitale.",),


	array("title"=>"Salario minimo contrattuale",
	"text"=>"WAGE RATE<BR>Retribuzione di base spettante ai lavoratori dipendenti di una certa categoria professionale e di un certo settore secondo i parametri fissati dai contratti collettivi.",),


	array("title"=>"Saldo",
	"text"=>"BALANCE<BR>Somma algebrica delle componenti di segno opposto di un conto. Nelle operazioni bancarie, &egrave; rappresentativo della situazione del titolare di un conto dopo il computo delle spese.",),


	array("title"=>"Saggio di rotazione del capitale",
	"text"=>"CAPITAL TURNOVER<BR>In analisi finanziaria, &egrave; il rapporto tra il fatturato dell'esercizio e i mezzi propri. Viene utilizzato per valutare di quanto il capitale proprio di un'azienda &egrave; in grado di finanziare l'espansione delle attivit&agrave;.",),


	array("title"=>"Sadenze non coincidenti",
	"text"=>"MISMATCH OF MATURITY<BR>Situazione in cui non c'&egrave; corrispondenza temporale tra il lato della provvista e quello degli impieghi.",),

);
$data['T'] = array(


	array("title"=>"Tassi di interesse a breve",
	"text"=>"SHORT TERM INTEREST RATE<BR>Costo percentuale di una somma di denaro espresso su una base inferiore a quella annua.",),


	array("title"=>"Tassi interbancari",
	"text"=>"INTERBANK RATES<BR>Sono i tassi del mercato interbancario degli euro depositi.",),


	array("title"=>"Tasso",
	"text"=>"RATE<BR>Variazione percentuale assoluta o temporale di una determinata grandezza.",),


	array("title"=>"Tasso d'interesse cap",
	"text"=>"INTEREST RATE CAP<BR>Contratto assimilabile a un'assicurazione, in virt&ugrave; del quale, contro la corresponsione di un premio commisurato all'ammontare nominale sottostante, il datore del premio ha il diritto di ricevere dalla controparte la differenza (se positiva) fra il tasso variabile di riferimento e un tasso fisso predeterminato.",),


	array("title"=>"Tasso d'interesse reale",
	"text"=>"REAL INTERST RATE<BR>Differenza tra tasso d'interesse nominale e tasso d'inflazione. Mostra quale sia l'effettivo costo della moneta, al netto della perdita di valore provocata dall'inflazione.",),


	array("title"=>"Tasso d'interesse su depositi",
	"text"=>"DEPOSIT INTEREST RATE<BR>E' la remunerazione percentuale fornita da banche o altri intermediari per il possesso per un determinato periodo di tempo di una somma di denaro.",),


	array("title"=>"Tasso d'interesse su option",
	"text"=>"INTEREST RATE OPTION<BR>Contratto in base al quale il datore del premio, acquisisce la facolt&agrave; di ricevere (call) o consegnare (put) a una data futura un dato ammontare di uno specifico strumento finanziario ad un tasso di interesse predeterminato.",),


	array("title"=>"Tasso di base",
	"text"=>"BASE RATE<BR>Tasso d'interesse utilizzato quale base per la fissazione dei tassi applicati alle varie categorie di crediti.",),


	array("title"=>"Tasso di cambio",
	"text"=>"EXCHANGE RATE<BR>E' il prezzo di una valuta nei confronti di un'altra. Il cambio si pu&ograve; esprimere come numero di unit&agrave; nazionali necessario per acquistare un'unit&agrave; di valuta straniera (che &egrave; la prassi utilizzata in Italia) o come numero di unit&agrave; straniere che si pu&ograve; convertire con un'unit&agrave; nazionale, come nel caso del cambio sterlina-dollaro.",),


	array("title"=>"Tasso di cambio flessibile",
	"text"=>"FLOATING EXCHANGE RATE<BR>Tasso di cambio definito in mercato aperto senza interventi da parte delle autorit&agrave; monetarie centrali.",),


	array("title"=>"Tasso di capitalizzazione",
	"text"=>"CAPITALIZATION RATE<BR>Tasso d'interesse utilizzato per convertire somme disponibili a un dato momento in somme disponibili in date future alle stesse condizioni.",),


	array("title"=>"Tasso di incidenza degli oneri finanziari",
	"text"=>"INCOME GEARING RATIO<BR>Rapporto fra gli esborsi per interessi e il reddito a livello aggregato di settore.",),


	array("title"=>"Tasso di interesse",
	"text"=>"INTEREST RATE<BR>Misura il corrispettivo pagato di un prestito. Solitamente espresso in termini percentuali annui.",),


	array("title"=>"Tasso di interesse a rischio nullo",
	"text"=>"RISK-FREE INTEREST RATE<BR>Saggio di rendimento offerto da attivit&agrave; finanziarie esenti da rischio di credito, tipicamente Titoli di Stato.",),


	array("title"=>"Tasso di interesse di base",
	"text"=>"KEY INTEREST RATE<BR>Tasso di interesse avente una funzione di base di riferimento per il costo del denaro nel segmento di mercato finanziario corrispondente, come il \"prime rate\" o il tasso interbancario \"overnight\".",),


	array("title"=>"Tasso di interesse implicito",
	"text"=>"IMPLICIT INTEREST RATE<BR>E' dato dalla differenza fra quotazione a termine e a quella a pronti di una valuta, espressa in termini percentuali su base annua.",),


	array("title"=>"Tasso di interesse indicizzato",
	"text"=>"FLOATING INTEREST RATE<BR>Tasso d'interesse stabilito sulla base di uno spread, con un tasso di mercato, come il LIBOR, il Prime Rate o il rendimento sui titoli di Stato.",),


	array("title"=>"Tasso di interesse nominale",
	"text"=>"NOMINAL INTEREST RATE<BR>E' il tasso d'interesse fissato nel contratto. Il tasso di interesse reale &egrave; dato dalla differenza tra tassi nominali e tassi di inflazione.",),


	array("title"=>"Tasso di remunerazione dei federal funds",
	"text"=>"FEDERAL FUNDS RATE<BR>E' il tasso di remunerazione dei Federal Funds.",),


	array("title"=>"Tasso di risparmio",
	"text"=>"SAVING RATE<BR>Rapporto fra risparmio e reddito disponibile nel periodo considerato.",),


	array("title"=>"Tasso di sconto",
	"text"=>"DISCOUNT RATE<BR>E' il tasso al quale una banca centrale presta denaro alle aziende di credito",),


	array("title"=>"Tasso di sconto aggiustato",
	"text"=>"RISK ADJUSTED DISCOUNT RATE<BR>Tasso di sconto utilizzato per il calcolo del valore attuale dei flussi di ricavi monetari attesi, depurato del coefficiente di rischio proprio dell'investimento in questione.",),


	array("title"=>"Tasso di sconto bancario",
	"text"=>"BANK DISCOUNT RATE<BR>Tasso d'interesse impiegato dagli istituti bancari per quotare il prezzo di strumenti di mercato monetario a breve scadenza.",),


	array("title"=>"Tasso minimo",
	"text"=>"MINIMUM RATE<BR>Tasso d'interesse minimo garantito al portatore di un'obbligazione.  In caso di minimum lending rate &egrave; il tasso d'interesse minimo praticato sui finanziamenti.",),


	array("title"=>"Tasso misto",
	"text"=>"BLENDED RATE<BR>Tasso d'interesse costituito da due o pi&ugrave; tassi differenti. per esempio, per un'estinzione anticipata con rinnovo del finanziamento, il nuovo blended rate si pu&ograve; calcolare tramite la media tra il tasso primitivo e quello corrente di mercato.",),


	array("title"=>"Tasso offerto",
	"text"=>"LENDING RATE<BR>E' il tasso di interesse applicato dai prestatori nei riguardi dei beneficiari dei prestiti.",),


	array("title"=>"Tasso primario",
	"text"=>"PRIME RATE<BR>E' il tasso di interesse sui finanziamenti a breve termine concesso alla clientela di prim'ordine. In Italia, tasso di interesse attivo minimo di riferimento calcolato dall'ABI.",),


	array("title"=>"Tasso su materie prime",
	"text"=>"COMMODITY RATE<BR>Tasso d'interesse applicato a quelle operazioni di finanziamento che hanno delle materie prime come garanzia.",),


	array("title"=>"Tasso sulle anticipazioni",
	"text"=>"LOMBARD RATE<BR>Tasso d'interesse applicato dalla Bundesbank (Banca centrale tedesca) per le anticipazioni su titoli. Solitamente &egrave; superiore al tasso ufficiale di sconto di qualche punto percentuale.",),


	array("title"=>"Tasso tom next",
	"text"=>"TOM NEXT RATE<BR>Tasso di interesse o di cambio quotato per le transazioni con regolamento nel giorno successivo.",),


	array("title"=>"Tendenza",
	"text"=>"TREND<BR>Andamento del prezzo di un bene di investimento quando questo viene riportato su un grafico. Se i prezzi tendono a salire nel tempo si ha un trend rialzista, viceversa, se la tendenza &egrave; contraria, si &egrave; in presenza di un trend ribassista.",),


	array("title"=>"Teoria di portafoglio",
	"text"=>"PORTFOLIO THEORY<BR>Teoria economica che consente una determinazione analitica dell'allocazione efficiente del capitale disponibile tra le varie categorie di beni, cos&igrave; da permettere di raggiungere un determinato rapporto desiderato tra rischiosit&agrave; e rendimento del portafoglio.",),


	array("title"=>"Teoria quantitativa della moneta",
	"text"=>"QUANTITY THEORY OF MONEY<BR>Teoria economica elaborata da M. Friedman, in base alla quale il livello dei prezzi di un paese &egrave; direttamente legato alla quantit&agrave; di moneta in circolazione e alla velocit&agrave; di circolazione di quest'ultima.",),


	array("title"=>"Termine",
	"text"=>"TERM<BR>Periodo di validit&agrave; di un contratto. Il termine pu&ograve; essere utilizzato per definire la durata di un titolo obbligazionario o la scadenza di un finanziamento.",),


	array("title"=>"Termine secco",
	"text"=>"OUTRIGHT FORWARD <BR>Nel mercato delle divise, indica una transazione a termine senza contestuale operazione inversa a pronti.",),


	array("title"=>"Terzo mercato",
	"text"=>"THIRD MARKET<BR>Si definisce cos&igrave; il mercato non ufficiale in cui vengono trattati titoli non quotati, quelli in attesa di essere quotati, e quei blocchi di titoli quotati per i quali per&ograve; non &egrave; stato possibile trovare una contropartita in Borsa.",),


	array("title"=>"Testamento",
	"text"=>"WILL<BR>Atto formale attraverso il quale un soggetto vivente formula la propria volont&agrave; sulla distribuzione del patrimonio agli eredi dopo il suo decesso.",),


	array("title"=>"Tick",
	"text"=>"TICK<BR>Unit&agrave; minima di variazione delle quotazioni dei titoli.",),


	array("title"=>"Timing di mercato",
	"text"=>"MARKET TIMING<BR>Capacit&agrave; di individuare il momento migliore per effettuare operazioni di compravendita sul mercato.",),


	array("title"=>"Titoli al portatore",
	"text"=>"BEARER BOND<BR>Titoli pagabili al possessore degli stessi, che non vengono registrati nei libri del soggetto che li emette.",),


	array("title"=>"Titoli fungibili",
	"text"=>"FUNGIBLE SECURITIES<BR>Sono titoli che depositati presso una cassa comune, possono essere trasferiti per giro contabile dal venditore al compratore.",),


	array("title"=>"Titoli garantiti",
	"text"=>"ASSET-BACKED SECURITIES<BR>Titoli rappresentativi di debito emessi da banche o finanziarie per conto di societ&agrave; che ne assicurano il pagamento attraverso il cash flow conseguente da crediti commerciali o prestiti di varia natura. La trasformazione dei crediti in titoli negoziabili &egrave; detta securitization.",),


	array("title"=>"Titoli in essere",
	"text"=>"OUTSTANDING SECURITIES<BR>Titoli emessi e non ancora rimborsati presenti sul mercato secondario.",),


	array("title"=>"Titoli scritturali",
	"text"=>"BOOK ENTRY SECURITY<BR>Sono titoli non emessi fisicamente, la cui propriet&agrave; viene rappresentata da specifiche registrazioni contabili su un libro tenuto dallo stesso emittente o da un soggetto da lui scelto.",),


	array("title"=>"Tasse federali straordinarie",
	"text"=>"EXCESS PROFITS TAX <BR>Tasse previste dal sistema fiscale americano che possono essere applicate sui profitti delle imprese in periodi straordinari, come quello di guerra, allo scopo di alimentare i flussi positivi dello Stato.",),


	array("title"=>"Tassazione regressiva",
	"text"=>"REGRESSIVE TAX <BR>Imposta calcolata con aliquote fiscali decrescenti all'aumentare della base imponibile.",),


);
$data['U'] = array(


	array("title"=>"Ultimo giorno di contrattazione",
	"text"=>"LAST TRADING DAY<BR>Ultimo giorno in cui un contratto future puo essere trattato sul mercato. E' l'ultimo giorno disponibile per la chiusura di una posizione, trascorso il quale e altrimenti necessaria la consegna fisica dello strumento sottostante.",),


	array("title"=>"Ultimo prezzo",
	"text"=>"LAST SALE<BR>Relativo ad un'azione di compravendita di un titolo, e l'ultimo prezzo raggiunto nell'intera giornata borsistica. E' anche definito closing salb.",),


	array("title"=>"Utile al lordo delle imposte",
	"text"=>"BEFORE TAX PROFIT<BR>Utile di esercizio non depurato degli oneri fiscali sul reddito ed eventualmente sul patrimonio.",),


	array("title"=>"Utile lordo",
	"text"=>"GROSS PROFIT<BR>Voce del bilancio ottenuta come differenza tra l'importo netto del fatturato e i costi di produzione.",),


	array("title"=>"Utile netto per azione",
	"text"=>"NET INCOME PER SHARE<BR>Utile netto societario",),


	array("title"=>"Utile operativo",
	"text"=>"OPERATING PROFIT<BR>Risultato positivo di gestione derivante dalle operazioni gestionali caratteristiche. E' dato dal fatturato meno il totale delle spese di produzione dei beni venduti.",),


	array("title"=>"Utili ante imposte",
	"text"=>"EARNINGS BEFORE TAXES <BR>E' l'ammontare degli utili di un'impresa prima della tassazione, considerato al netto degli interessi pagati ai possessori di titoli di debito a lungo termine, come le obbligazioni.",),


	array("title"=>"Utili non distribuiti",
	"text"=>"RETAINED EARNINGS<BR>Utili accantonati a riserva, rappresentano una forma di autofinanziamento.",),


	array("title"=>"Utili per azione",
	"text"=>"EARNINGS PER SHARE <BR>Utile oggetto di diritto dell'azionista dato dalla differenza positiva tra i ricavi conseguiti nel corso dell'esercizio ed i costi sopportati nello stesso periodo. Si calcola dividendo l'ammontare degli utili distribuibile secondo delibera dell'assemblea dei soci (fanno eccezione le azioni di risparmio) per il numero dei titoli esistenti.",),


	array("title"=>"Utili per azione diluiti",
	"text"=>"FULLY DILUTED EARNINGS <BR>Pratica di determinazione degli utili per azione che considera insieme ai titoli ordinari anche quelli convertibili in azioni della societa, ipotizzando che tutti gli azionisti abbiano esercitato il loro diritto di conversione dei loro titoli in azioni della societa.",),


	array("title"=>"Utilita'",
	"text"=>"UTILITY<BR>Soddisfazione che un soggetto ritrae dal consumo di una certa quantita di un bene economico.",),


	array("title"=>"Utilizzo del fattore lavoro",
	"text"=>"LABOUR UTILIZATION RATE<BR>Misura relativa dell'effettiva utilizzazione del fattore lavoro rispetto al massimo potenziale.VALIDAZIONE<BR></B>VALIDATION<BR>Controllo della validit&agrave; e della correttezza di dati scientifici attraverso il controllo con dati gi&agrave; noti e attendibili.",),


);
$data['V'] = array(


	array("title"=>"Valido questo mese",
	"text"=>"GOOD THIS MONTH<BR>Ordine impartito all'intermediario in titoli, solitamente avente un limite di prezzo, che resta valido per tutta la durata del mese corrente, che se non &egrave; eseguito viene cancellato.",),


	array("title"=>"Valore aggiunto",
	"text"=>"VALUE ADDED<BR>Maggior valore dei beni e dei servizi prodotti rispetto al valore dei beni e servizi acquistati. A livello di sistema &egrave; dato dalla produzione totale meno i consumi intermedi, equivalente al prodotto interno lordo calcolato al costo dei fattori.",),


	array("title"=>"Valore attuale",
	"text"=>"PRESENT VALUE<BR>Si pu&ograve; cos&igrave; definire la somma di denaro che, in condizioni di equit&agrave;, pu&ograve; oggi essere scambiata con una somma che sar&agrave; invece disponibile in una data futura.",),


	array("title"=>"Valore capitale",
	"text"=>"CAPITAL VALUE<BR>Valore attuale di un flusso di redditi periodici calcolato sulla base di un determinato tasso di interesse.",),


	array("title"=>"Valore contabile",
	"text"=>"BOOK VALUE<BR>Indica il valore a cui un bene o un'attivit&agrave; sono iscritti nel bilancio societario. Secondo la pratica seguita, pu&ograve; essere pari al valore di mercato o pu&ograve; essere dato dalla differenza tra il valore d'acquisto e la somma degli ammortamenti gi&agrave; effettuati. In analisi finanziaria &egrave; il valore netto per titolo degli investimenti (net asset value), ottenuto sottraendo al totale delle attivit&agrave; le immobilizzazioni immateriali, le passivit&agrave; correnti e i titoli azionari privilegiati o a reddito fisso, e dividendo il valore ricavato per il numero di obbligazioni o di azioni, secondo lo scopo della valutazione.",),


	array("title"=>"Valore corretto di mercato",
	"text"=>"FAIR MARKET VALUE <BR>Prezzo di esecuzione di una contrattazione in titoli tra un acquirente e un venditore, ambedue consenzienti e muniti delle stesse informazioni tali da influire sulle loro scelte al riguardo.",),


	array("title"=>"Valore di liquidazione",
	"text"=>"LIQUIDATING VALUE <BR>Valore economico di un'azienda che cessa la propria attivit&agrave;. E' dato dal ricavo ottenibile dalla vendita sul mercato del complesso dei cespiti attivi, al netto delle passivit&agrave; in essere.",),


	array("title"=>"Valore di mercato",
	"text"=>"MARKET VALUE<BR>Prezzo al quale si stima che un'attivit&agrave; finanziaria o reale possa essere venduta.",),


	array("title"=>"Valore intrinseco",
	"text"=>"INTRINSIC VALUE<BR>Di norma facente riferimento ad un contratto di option, il valore intrinseco si calcola con la differenza tra il prezzo del sottostante e il prezzo di esercizio dell'opzione, e costituisce il beneficio che pu&ograve; nel caso derivare dal contratto stesso.",),


	array("title"=>"Valore netto di inventario",
	"text"=>"NET ASSET VALUE<BR>Valore delle quote-parti risultante dai libri del fondo comune o della societ&agrave; di investimento.",),


	array("title"=>"Valore nominale",
	"text"=>"FACE VALUE<BR>Valore facciale di un titolo. Solitamente coincidente con il valore di rimborso.",),


	array("title"=>"Valore residuo",
	"text"=>"RESIDUAL VALUE<BR>Valore di un bene che &egrave; stato interamente ammortizzato lungo il periodo del suo utilizzo.",),


	array("title"=>"Valore temporale",
	"text"=>"TIME VALUE<BR>Nei contratti di option, &egrave; quella parte del prezzo del contratto, che dipende solamente dal tempo mancante alla scadenza. Nelle operazioni di acquisto di titoli azionari con lo scopo di ottenere il controllo della societ&agrave;, il valore temporale del titolo &egrave; la differenza di prezzo dovuta al periodo di tempo che deve trascorrere prima che il titolo venga acquistato.",),


	array("title"=>"Value at risk (var)",
	"text"=>"VALUE AT RISK (VAR)<BR>Ammontare della perdita potenziale che deriverebbe al verificarsi di un certo evento.",),


	array("title"=>"Valuta chiave",
	"text"=>"KEY CURRENCY<BR>Una delle principali valute utilizzate come mezzo di pagamento delle transazioni commerciali internazionali, che per questo motivo viene detenuta in proporzione variabile nelle riserve delle Banche centrali. Sono considerate key currency: il dollaro, lo yen giapponese, il marco tedesco e in misura inferiore la sterlina.",),


	array("title"=>"Valuta compensata",
	"text"=>"GOOD VALUE<BR>Data in cui un determinato importo &egrave; disponibile in un conto e a partire dalla quale il suddetto importo inizia a fruttare interessi.",),


	array("title"=>"Valuta forte",
	"text"=>"STRONG CURRENCY<BR>Divisa straniera privilegiata dagli investitori internazionali per la solidit&agrave; dell'economia del Paese.",),


	array("title"=>"Valutazione",
	"text"=>"RATING<BR>Giudizio di affidabilit&agrave; di un soggetto emittente valori mobiliari sui mercati finanziari internazionali che viene effettuato da agenzie specializzate come Moody's o Standard and Poor's.",),


	array("title"=>"Valutazione ai prezzi di mercato",
	"text"=>"MARK TO MARKET<BR>Principio contabile in base al quale il valore dei cespiti &egrave; sistematicamente aggiustato in funzione dei prezzi di mercato.",),


	array("title"=>"Variabile proxy",
	"text"=>"PROXY VARIABLE<BR>Indicatore statistico che descrive il comportamento di un determinato fenomeno non osservabile direttamente.",),


	array("title"=>"Varianza",
	"text"=>"VARIANCE<BR>E' data dalla sommatoria degli scarti dalla media aritmetica al quadrato.",),


	array("title"=>"Variazione di prezzo",
	"text"=>"PRICE CHANGE<BR>E' la differenza tra il prezzo di un determinato titolo e quello di chiusura del giorno precedente.",),


	array("title"=>"Variazione netta",
	"text"=>"NET CHANGE<BR>Differenza tra la quotazione corrente di un titolo e quella di chiusura del giorno anteriore.",),


	array("title"=>"Velocita' di circolazione della moneta",
	"text"=>"VELOCITY OF CIRCULATION<BR>Espressione impiegata in macroeconomia per indicare il numero medio di volte in cui l'unit&agrave; monetaria viene trasferita in un determinato periodo.",),


	array("title"=>"Vendita",
	"text"=>"SALE<BR>Questo termine indica il contratto di cessione di un bene in seguito al pagamento in denaro del controvalore al prezzo stabilito. Nel bilancio, tale voce, rappresentata generalmente il fatturato aziendale.",),


	array("title"=>"Vendita allo scoperto",
	"text"=>"SELL SHORT<BR>Vendita di titoli in previsione di quotazioni al ribasso effettuata senza avere il possesso degli stessi titoli, per poi riacquistarli quando le quotazioni saranno inferiori.",),


	array("title"=>"Vendita e rilocazione",
	"text"=>"SALE AND LEASEBACK<BR>Vedi Lease-back",),


	array("title"=>"Vendita immediata",
	"text"=>"SELL OFF<BR>Vendita di titoli o altri beni di investimento durante un periodo di ribasso delle quotazioni, per evitare di conseguire perdite ancora maggiori in conto capitale.",),


	array("title"=>"Vendita in incremento",
	"text"=>"SELL PLUS<BR>L'ordine di vendita di un titolo che va eseguito solo se nel momento in cui il prezzo relativo all'ultima transazione &egrave; stato superiore a quello corrente.",),


	array("title"=>"Venditore",
	"text"=>"WRITER<BR>Chi ha venduto opzioni Call o Put.",),


	array("title"=>"Venditore di opzioni",
	"text"=>"OPTION WRITER<BR>Contraente che contro la riscossione del premio si impegna a dare esecuzione al contratto di opzione.",),


	array("title"=>"Vigilanza bancaria",
	"text"=>"BANKING SUPERVISION<BR>Controllo preventivo sul sistema bancario generalmente effettuato dalla banca centrale, al fine di salvaguardare la solidit&agrave; e l'efficienza operativa del sistema stesso. La vigilanza viene inoltre esplicata sulle singole istituzioni creditizie, allo scopo di controllarne la solidit&agrave;, la redditivit&agrave; e, in generale, la correttezza di gestione.",),


	array("title"=>"Vita media",
	"text"=>"AVERAGE LIFE<BR>La vita media di un prestito obbligazionario &egrave; un parametro che serve a valutare adeguatamente il profilo di rischio-rendimento di un particolare investimento obbligazionario.  Riferita ad uno strumento finanziario, misura della scadenza media dei flussi monetari da esso generati in conto interesse e capitale.",),


	array("title"=>"Volatilita'",
	"text"=>"VOLATILITY<BR>Misura statistica della variabilit&agrave; del prezzo di un bene di investimento, viene normalmente associata ad una rilevante imprevedibilit&agrave; dei movimenti del prezzo stesso.",),


	array("title"=>"Volatilita' implicita",
	"text"=>"IMPLIED VOLATILITY<BR>Volatilit&agrave; cui &egrave; soggetta un'opzione, &egrave; solitamente calcolata sulla base del modello di Black and Scholes, che la stima sulla base del prezzo corrente di un'opzione, del pezzo dello strumento sottostante, del prezzo d'esercizio, della durata residua e del livello dei tassi di interesse.",),


	array("title"=>"Volatilita' storica",
	"text"=>"HISTORICAL VOLATILITY<BR>Variabilit&agrave; misurata a posteriori del prezzo o del rendimento di uno strumento finanziario.",),


	array("title"=>"Volume delle contrattazioni",
	"text"=>"TURNOVER<BR>Valore complessivo degli scambi effettuati in una borsa valori o u un singolo titolo nel corso del periodo considerato.WALL STREET<BR></B>WALL STREET<BR>Sede del New York Stock Exchange, &egrave; la prima borsa per importanza degli Stati Uniti. Prende il suo nome dalla famosa strada dove &egrave; situata.",),


);
$data['W'] = array(


	array("title"=>"Warrant",
	"text"=>"WARRANT<BR>Strumento derivato che attribuisce al detentore la facolt&agrave; di acquistare una certa quantit&agrave; di titoli entro una certa data e a condizioni prefissate.",),


	array("title"=>"White knight",
	"text"=>"WHITE KNIGHT<BR>Operatore che interviene in difesa di una societ&agrave;-bersaglio di un'OPA ostile, su richiesta di quest'ultima, per lanciare un'offerta concorrente.ZIG ZAG",),


);
$data['Z'] = array(


	array("title"=>"Zig zag",
	"text"=>"WHIPSAW<BR>Termine utilizzato dagli analisti per definire l'andamento del prezzo di un titolo la cui oscillazione, verso il basso e verso l'alto, denota una elevata variabilit&agrave; delle quotazioni.",),


);
?>

<section>
	<div id="glossario" class="loading">
		<div class="glossarioSX">
		</div>
		<div class="glossarioDX">
			<div class="row">
				<div class="col-xs-12">
					<?php foreach( $data as $letter => $terms ) { $index = 0;?><?php
					?><div id="lettera<?= $letter ?>" class="lettera"><?php
						?><div class="panel-group" id="accordion<?= $letter ?>" role="tablist" aria-multiselectable="true"><?php
							?><?php foreach( $terms as $term ) { ?><?php
								?><div class="panel panel-default"><?php
									?><div class="panel-heading" role="tab" id="heading<?= $letter.$index ?>"><?php
										?><h4 class="panel-title"><?php
											?><a class="collapsed" data-toggle="collapse" href="#collapse<?= $letter.$index ?>" aria-expanded="false" aria-controls="collapse<?= $letter.$index ?>"><?php
												?><?= $term['title'] ?><i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i><?php
											?></a><?php
										?></h4><?php
									?></div><?php
									?><div id="collapse<?= $letter.$index ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?= $letter.$index ?>"><?php
										?><div class="panel-body"><?php
											?><?= $term['text'] ?><?php
											?><?php // falback per mancate chiusure di tags nei dati ---> ?></B></U></STRONG></EM><?php
										?></div><?php
									?></div><?php
								?></div><?php
							?><?php $index++; }
						?></div><?php
					?></div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>

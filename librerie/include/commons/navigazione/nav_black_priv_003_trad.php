<?php
//array con le voci

switch ($tr2) {
		
		//PORTAFOGLIO
		case 0:
			switch ($tr3) 
				{
    			case 0:
					$trLevel3 = "Portafoglio";
					$trLevel4 = "Titoli in portafoglio|Titoli in prestito|Titoli in prestito(demo)|Profit e loss|Avvisi perdite superiori al 50%|Posizione fiscale";
					break;	
				
				case 1:
					$trLevel3 = "Portafoglio virtuale";
					$trLevel4 = "Portafoglio virtuale|Crea nuovo portafoglio";
					break;
				
				case 2:
					$trLevel3 = "Dettaglio liquidit&agrave;";
					$trLevel4 = "Saldo liquidit&agrave; | Trasferimento conto derivati| Trasferimento derivati (demo)";
					break;
				}
				break;
		
		//COMPRAVENDITA
		case 1:
			switch ($tr3) 
				{
    			case 0:
					$trLevel3 = "Ricerca titoli evoluta";
					$trLevel4 = "Azioni|Obbligazioni|Derivati|CW e Certificate|ETF Plus";
					break;	
				
				case 1:
					$trLevel3 = "Compravendita";
					$trLevel4 = "Inserimento ordini|Inserimento ordini condizionati|Operazioni sul capitale|Operazioni sul capitale(insufficienze disponibilità/diritti)|Operazioni sul capitale(solo vendita automatica)|Elenco titoli marginazione intraday|Elenco titoli short overnight|Conflitto d'interessi";
					break;	
					
				case 2:
					$trLevel3 = "Situazione ordini";
					$trLevel4 = "Titoli (ordini) stato|Titoli (ordini) stato (caso no ordini)|Titoli (ordini) storico|Ordini condizionati stato|Ordini condizionati storico|Operazioni sul capitale |Archivio ordini WT";
					break;
					
				}
			break;
		
		//QUOTAZIONI E MERCATI
		case 2:
			switch ($tr3) 
				{
    			case 0:
					$trLevel3 = "Overview sui mercati";
					$trLevel4 = "Indici|Azioni|Obbligazioni|Commodities|Valute";
					break;	
				
				case 1:
					$trLevel3 = "Azioni";
					$trLevel4 = "Panoramica quotazioni mercato azionario|Quotazioni mercato azionario Italia|Quotazioni mercato azionario Europa|Quotazioni mercato azionario America";
					break;	
					
				case 2:
					$trLevel3 = "Obbligazioni";
					$trLevel4 = "Panoramica quotazioni mercato obbligazionario|Quotazioni obbligazioni su MOT|Quotazioni obbligazioni su EuroTLX|Quotazioni obbligazioni su OTC";
					break;	
				
				case 3:
					$trLevel3 = "Derivati";
					$trLevel4 = "Panoramica quotazioni mercati dei derivati|Quotazioni derivati italiani su IDEM|Quotazioni derivati tedeschi su Eurex | Quotazioni derivati americani su CME|Quotazioni derivati americani su ECBOT|Quotazioni derivati europei su LIFFE|Opzioni";
					break;	
				
				case 4:
					$trLevel3 = "CW";
					$trLevel4 = "Migliori e peggiori|Il mercato Sedex e le tipologie di CW|Cosa sono i CW e gli elementi costitutivi|Quando utilizzare i CW|Determinare il valore del CW|Prodotti e attività sottostanti|Orari di negoziazione e regolamento";
					break;	
					
				case 5:
					$trLevel3 = "Certificates";
					$trLevel4 = "Ricerca interattiva|Migliori e peggiori|Il mercato Sedex|Scala dei Certificates|Scegli il tuo Certificates|Orari di negoziazione e regolamento";
					break;	
					
				case 6:
					$trLevel3 = "ETF Plus";
					$trLevel4 = "Quotazioni ETC|Quotazioni ETF";
					break;	
					
				case 7:
					$trLevel3 = "Watchlist";
					$trLevel4 = "Watchlist|Crea nuova watchlist";
					break;	
				
				}
			break;
		
		//ANALISI, STUDI E EDUCATIONAL
		case 3:
			switch ($tr3)
				{
    			case 0:
					$trLevel3 = "Strumenti di analisi";
					$trLevel4 = "Strumenti di analisi ADB|Strumenti di analisi TMR|Grafici Interattivi|News e macro";
					break;	
				case 1:
					$trLevel3 = "Studi e ricerche";
					$trLevel4 = "Studi di analisi tecnica|Studi di analisi fondamentale e macroeconomica";
					break;	
				
				case 2:
					$trLevel3 = "Alerts e notifiche";
					$trLevel4 = "Impostazione alert|Alert attivi|Notifiche ordini|Alert e notifiche attive| Imposta alert e notifiche";
					break;	
				
				case 3:
					$trLevel3 = "Tutorial, eventi formativi";
					$trLevel4 = "Guide al trading|Video tutorial T3|Eventi e corsi di formazione |Eventi e corsi di formazione (eventi scaduti)";
					break;	
				}
			
			break;
		
		//COSTI E ATTIVAZIONE SERVIZI
		case 4:
			switch ($tr3)
				{
    			case 0:
					$trLevel3 = "Costi e attivazione servizi";
					$trLevel4 = "Deposito titoli|Deposito titoli (apri caso nessun conto disp.)|Deposito titoli (apri caso errore)|Commissioni di trading e impostazione del profilo commissionale|Costi informativa, servizi di analisi e relativa attivazione|Costi piattaforma, altri strumenti e relativa attivazione|Attivazione servizi specifici | Attivazione servizi specifici (caso informativa) | Attivazione servizi specifici (caso no poss)";
					break;
					
				case 1:
					$trLevel3 = "Modulistica";
					$trLevel4 = "Modulistica e documentazione contrattuale|Questionario MIFID";
					break;
			    }
			break;
		
		//PIATTAFORME EVOLUTE
		case 5:
			switch ($tr3)
				{
    			case 0:
					$trLevel3 = "Overview e offerta piattaforme";
					$trLevel4 = "Overview piattaforme|Piattaforma T3| Piattaforma T3 (caso t3 non attiva)|Piattaforma T3 no frame |Piattaforma T3 open";
					break;
				
				case 1:
					$trLevel3 = "Altri strumenti";
					$trLevel4 = "eSignal |Visual Trader PRO";
					break;
			    }
			break;
		
		
		}			

//stampa a video del menu

$tr4array = explode("|",$trLevel4);

?>
<div id="menusxc">
	<h1><?php print $trLevel3;?></h1>
	<div class="menusxcontainer"><?php
	for ($a=0; $a<sizeOf($tr4array); $a++)
	{
	?><a href="/connect.php?page=old_str_interna_priv.php&tpl=tpl_priv_tradp.php&liv1=TR&tr2=<?php print($tr2); ?>&tr3=<?php print($tr3); ?>&tr4=<?php print($a); ?>"<?php if ($tr4 == $a) {?> class="selected"<?php }?>><span><?php print ($tr4array[$a]); ?></span></a><?php
	}
	?></div>
</div>
<?php
header("Content-type: text/xml");
$codmutuo = $_POST["codicemutuo"];
$finalita = $_POST["finalita"];

/* Parametri per "spaccare" la simulazione */
$durata = $_POST["durata"];

if ($codmutuo == "") {
?>
<risposta>
	<tabs>
		<tab sel="true" finalita="Acquisto">
			<valore primacasa="SI">Acquisto</valore>
			<nome>Acquisto o ristrutturazione</nome>
			<link>?finalita=Acquisto</link>
		</tab>
		<tab finalita="Surroga">
			<valore primacasa="SI">Surroga</valore>
			<nome>Surroga</nome>
			<link>?finalita=Surroga</link>
		</tab>
	</tabs>
	<mutui>
		<mutuo codicemutuo="PRODOTTO FISSO" rata="686.83" disponibile="y" duratamin="10" duratamax="30" mutuominimo="50000" mutuomassimo="1000000" ltv="80.0">
			<nome>Mutuo fisso</nome>
			<link>/wbx/upload/catalogoMol/scheda_mutuo_fisso_IRS_webank_16_feb_15.pdf</link>
			<indice>IRS per durata  1,150%</indice>
			<spread>2,200%</spread>
			<tasso>3,350%</tasso>
			<taeg>3,431%</taeg>
			<messaggio />
			<incassorata>9.999,99</incassorata>
			<istruttoria>9.999,99</istruttoria>
			<perizia>9.999,99</perizia>
			<imposta>9.999,99</imposta>
			<polizza>9.999,99</polizza>
			<costototcred>9.999,99</costototcred>
			<imptotcons>9.999,99</imptotcons>
		</mutuo>
		<mutuo codicemutuo="MUTUO NUOVO"  <?php print( (floatval($durata) > 10) ? "" : " messaggioGenerico='errore generico'"); ?> rata="235.19" disponibile="n" duratamin="5" duratamax="40" mutuominimo="50000" mutuomassimo="1000000" ltv="90.0">
			<nome>Mutuo nuovo</nome>
			<link>/wbx/upload/catalogoMol/scheda_mutuo_opzione_fisso_webank_16_feb_15.pdf</link>
			<indice>IRS 5 anni  0,287%</indice>
			<spread>2,200%</spread>
			<tasso>2,487%</tasso>
			<taeg>2,544%</taeg>
			<messaggio><![CDATA[La polizza casa utilizzata per la simulazione online prevede la copertura dell'intero valore dell'immobile. Il valore del premio risulta eccessivo rispetto al valore da te preventivato.<br><br>Effettua una nuova simulazione modificando i parametri o verifica in filiale le opzioni di assicurazione del tuo immobile.]]></messaggio>
			<incassorata>9.999,99</incassorata>
			<istruttoria>9.999,99</istruttoria>
			<perizia>9.999,99</perizia>
			<imposta>9.999,99</imposta>
			<polizza>9.999,99</polizza>
			<costototcred>9.999,99</costototcred>
			<imptotcons>9.999,99</imptotcons>
		</mutuo>
		<mutuo codicemutuo="PRODOTTO OPZIONE FISSO" rata="635.19" disponibile="y" duratamin="10" duratamax="30" mutuominimo="50000" mutuomassimo="1000000" ltv="80.0">
			<nome>Mutuo Opzione fisso</nome>
			<link>/wbx/upload/catalogoMol/scheda_mutuo_opzione_fisso_webank_16_feb_15.pdf</link>
			<indice>IRS 5 anni  0,287%</indice>
			<spread>2,200%</spread>
			<tasso>2,487%</tasso>
			<taeg>2,544%</taeg>
			<messaggio />
		</mutuo>
		<mutuo codicemutuo="TASSO VARIABILE" rata="618.54" disponibile="y" duratamin="10" duratamax="30" mutuominimo="50000" mutuomassimo="1000000" ltv="80.0">
			<nome>Mutuo variabile</nome>
			<link>/wbx/upload/catalogoMol/scheda_mutuo_variabile_webank_16_feb_15.pdf</link>
			<indice>EURIBOR 3 MESI  0,100%</indice>
			<spread>2,100%</spread>
			<tasso>2,200%</tasso>
			<taeg>2,250%</taeg>
			<messaggio />
		</mutuo>
		<mutuo codicemutuo="TASSO VARIABILE CON CAP" rata="671.62" disponibile="y" duratamin="10" duratamax="30" mutuominimo="50000" mutuomassimo="1000000" ltv="80.0">
			<nome>Mutuo variabile con CAP</nome>
			<link>/wbx/upload/catalogoMol/scheda_mutuo_variabile_CAP_webank_16_feb_15.pdf</link>
			<indice>EURIBOR 3M  0,100%</indice>
			<spread>3,000%</spread>
			<tasso>3,100%</tasso>
			<taeg>3,173%</taeg>
			<messaggio />
		</mutuo>
	</mutui>
</risposta>
<?php
}
else
{
	/* CODIFICA PRODOTTI */

if ($codmutuo == "PRODOTTO FISSO PROMO"){

        /* CASO GIALLO */
        $mp_herotitle = "";
        $mp_herotext = "";
        $mp_prodname="Mutuo Tasso Fisso Last Minute";
        $mp_prodpayoff="Il mutuo senza sorprese, sempre con la medesima rata.";
	}
else
	{
		if ($codmutuo == "PRODOTTO FISSO") {
        
	        if ($finalita=="Acquisto") {


	        	$mp_herotitle = "Il nostro mutuo non crescer&agrave; mai";
		        $mp_herotext = "Scegli Mutuo Promo Tasso Fisso Last minute. Il mutuo che ti assomiglia.";
		        $mp_prodname="Mutuo Tasso Fisso Last Minute";
		        $mp_prodpayoff="l mutuo senza sorprese, sempre con la medesima rata.";

	        }
	        else
	        {
	            $mp_herotitle = "Insoddisfatto del tuo mutuo?<br>Ecco la soluzione";
	            $mp_herotext = "Porta il tuo mutuo da noi, a condizioni vantaggiose";
	            $mp_prodname="Mutuo Promo Surroga Tasso Fisso";
	            $mp_prodpayoff="Il mutuo a tasso fisso per trasferire il mutuo da noi";
	        }
	    }
   	    else if ($codmutuo == "TASSO VARIABILE FLOOR")
   	    {

 			if ($finalita == "Acquisto") {
	            $mp_herotitle = "Casa da comprare?";
	            $mp_herotext = "Scegli Mutuo You Premium Tasso Variabile,<br> il mutuo che sfrutta le opportunit&agrave; dei tassi di mercato.";
	            $mp_prodname="Mutuo Promo Tasso Variabile";
	            $mp_prodpayoff="Il mutuo che ti permette di sfruttare l'andamento del mercato dei tassi";
	        }
	        else
	        {
	            $mp_herotitle = "Trasferisci il tuo mutuo a condizioni speciali!";
	            $mp_herotext = "Mutuo You Premium Surroga Tasso Variabile:<br> condizioni uniche e nessuna spesa di trasferimento.";
	            $mp_prodname="Mutuo Promo Surroga Tasso Variabile";
	            $mp_prodpayoff="Il mutuo a tasso variabile per trasferire il mutuo da noi";
	        }
   	    }


	    else if ($codmutuo == "PRODOTTO FISSO ESPLICITO")
	    {
	        $mp_herotitle = "Il mio mutuo ha l'armadio pieno e niente da mettere.";
	        $mp_herotext = "Cerchi un mutuo fino a 15 anni? Per avere le migliori condizioni scegli il tasso \"finito\".";
	        $mp_prodname="Mutuo Promo Tasso Fisso Finito";
	        $mp_prodpayoff="Il mutuo con la rata certa gi&agrave; al momento della richiesta.";
	    }

	    else if ($codmutuo == "TASSO VARIABILE OPZIONE")
	    {

	        $mp_herotitle = "Casa da comprare?";
	        $mp_herotext = "Scegli Mutuo You Premium Tasso Variabile, il mutuo che sfrutta le opportunit&agrave; dei tassi di mercato.";
	        $mp_prodname="Mutuo Promo Tasso Variabile con Opzione";
	        $mp_prodpayoff="Il mutuo che ti permette di sfruttare l'andamento del mercato dei tassi";
	    }

	    // Casistiche 4U
	    else if ($codmutuo == "PRODOTTO FISSO 4YOU")
	    {
	        if ($finalita == "Acquisto") {
	        	$mp_herohtml = "<h3>I VANTAGGI DI 4YOU.</h3><p>Lorem ipsum dolor:</p><ul><li>sit amet consectetur</li><li>adipiscing elit 300 &euro; fisse</li><li>Dolor ipsum amet 1 &euro;</li></ul>";
	        	$mp_prodname="MUTUO CASA A TASSO FISSO LAST MINUTE 4YOU PROMO EDITION";
	        	$mp_prodpayoff="Il mutuo senza sorprese, sempre con la medesima rata e con i vantaggi esclusivi delle Partnership 4YOU.";
	    	}
	    	else
	    	{
	    		$mp_herohtml = "<h3>CON 4YOU HAI UN VANTAGGIO IN PI&Ugrave;</h3><p>Solo per te:</p><ul><li>sit amet consectetur</li><li>adipiscing elit 300 &euro; fisse</li><li>Dolor ipsum amet 1 &euro;</li></ul>";
	    		$mp_prodname="MUTUO SURROGA PROMO A TASSO FISSO 4YOU";
	        	$mp_prodpayoff="Il mutuo a tasso fisso per trasferire il mutuo con i vantaggi esclusivi delle partnership 4YOU.";
	    	}

	    }
	    else if ($codmutuo == "TASSO VARIABILE 4YOU")
	    {
	       if ($finalita == "Acquisto") {
	        	$mp_herohtml = "<h3>I VANTAGGI DI 4YOU.</h3><p>Lorem ipsum dolor:</p><ul><li>sit amet consectetur</li><li>adipiscing elit 300 &euro; fisse</li><li>Dolor ipsum amet 1 &euro;</li></ul>";
	        	$mp_prodname="MUTUO CASA A TASSO VARIABILE 4YOU PROMO EDITION";
	        	$mp_prodpayoff="Il mutuo che ti permette di sfruttare i vantaggi esclusivi delle partnership 4YOU  e di adeguare la tua rata ai tassi di mercato.";
	    	}
	    	else
	    	{
	    		$mp_herohtml = "<h3>CON 4YOU HAI UN VANTAGGIO IN PI&Ugrave;</h3><p>Solo per te:</p><ul><li>sit amet consectetur</li><li>adipiscing elit 300 &euro; fisse</li><li>Dolor ipsum amet 1 &euro;</li></ul>";
	    		$mp_prodname="MUTUO SURROGA A TASSO VARIABILE 4YOU";
	        	$mp_prodpayoff="Porta il tuo Mutuo da noi, a condizioni vantaggiose  ed esclusive per le Partnership 4YOU.";
	    	}
	        
	    }
	    // Fine casistiche 4U

	}


?>
<risposta>
   <tabs>
      <tab sel="true" finalita="Acquisto">
         <valore primacasa="SI">Acquisto</valore>
         <nome>Acquisto o ristrutturazione</nome>
         <link>?finalita=Acquisto</link>
      </tab>
      <tab finalita="Surroga">
         <valore primacasa="SI">Surroga</valore>
         <nome>Surroga</nome>
         <link>?finalita=Surroga</link>
      </tab>
   </tabs>
   <mutui>
      <mutuo codicemutuo="<?php print strtoupper($codmutuo); ?>" <?php print( (floatval($durata) > 12) ? "" : " messaggioGenerico='errore generico'"); ?> rata="653.57" disponibile="<?php print( (floatval($durata) > 12) ? "y" : "n"); ?>" duratamin="10" duratamax="30" mutuominimo="50000" mutuomassimo="1000000" ltv="80.0">
        <nome><?php print ($mp_prodname); ?></nome>
        <?php if ($codmutuo != "PRODOTTO FISSO 4YOU" && $codmutuo != "TASSO VARIABILE 4YOU") {
        	?>
				 <descrizione><![CDATA[<h3><?php print($mp_herotitle); ?></h3><p><?php print $mp_herotext; ?></p>]]></descrizione>
        	<?php
        }
        else
        {
			?>
				 <descrizione><![CDATA[<?php print($mp_herohtml); ?>]]></descrizione>
        	<?php
        }?>
        <sottotitolo><![CDATA[<?php print ($mp_prodpayoff); ?>]]></sottotitolo>
        <link>/wbx/upload/catalogoMol/scheda_mutuo_fisso_prefissato_webank_01_dic_15.pdf</link>
        <indice>NON INDICIZZATO  0,000%</indice>
        <spread>2,800%</spread>
        <tasso>2,800%</tasso>
        <taeg>2,865%</taeg>
     	<incassorata>9.999,99</incassorata>
		<istruttoria>9.999,99</istruttoria>
		<perizia>9.999,99</perizia>
		<imposta>9.999,99</imposta>
		<polizza>9.999,99</polizza>
		<costototcred>9.999,99</costototcred>
		<imptotcons>9.999,99</imptotcons>
        <messaggio><![CDATA[La polizza casa utilizzata per la simulazione online prevede la copertura dell'intero valore dell'immobile. Il valore del premio risulta eccessivo rispetto al valore da te preventivato.<br><br>Effettua una nuova simulazione modificando i parametri o verifica in filiale le opzioni di assicurazione del tuo immobile.]]></messaggio>
         <assicurazioni>
            <assicurazione codice="WBM1" attiva="y" obbligatoria="y">
               <nomeprodotto>POLIZZA CASA</nomeprodotto>
               <payoff><![CDATA[TE LA REGALA WEBANK]]></payoff>
               <descrizione><![CDATA[La convenzione ''Incendio e rischi supplementari'' stipulata con UnipolSAI Assicurazioni S.p.A. garantisce l'indennizzo a fronte di danni materiali e diretti agli immobili assicurati, da eventi quali incendio ed ulteriori rischi.La somma assicurata corrisponde al valore di ricostruzione dell'immobile determinato in base alla superficie e alla categoria catastale dell'immobile posto a garanzia, indipendentemente dall'importo del mutuo ancora da restituire.]]></descrizione>
            </assicurazione>
            <assicurazione codice="WBM2" attiva="n" obbligatoria="n">
               <nomeprodotto>VITA</nomeprodotto>
               <payoff><![CDATA[RIMBORSO DEL MUTUO IN CASO DI DECESSO]]></payoff>
               <descrizione><![CDATA[La convenzione stipulata con Bipiemme Vita S.P.A. prevede il rimborso del capitale residuo del mutuo in caso di decesso. Il capitale massimo assicurato  e' di 350.000 euro per singolo intestatario. La copertura operativa in quote proporzionali su tutti gli intestatari, fino al compimento del settantacinquesimo anno di eta'.<br />                <br />                Il premio annuo  pari a 1,6 euro ogni mille euro di mutuo (0,16% del capitale da rimborsare all'inizio di ciascun anno). Per il primo e ultimo anno di mutuo, il premio sara' calcolato sul periodo di effettivo utilizzo.]]></descrizione>
            </assicurazione>
            <assicurazione codice="WBM8" attiva="n" obbligatoria="n">
               <nomeprodotto>MULTIRISCHI</nomeprodotto>
               <payoff><![CDATA[COPERTURA IDEALE A GARANZIA DEL REDDITO]]></payoff>
               <descrizione><![CDATA[<p>Viene garantito il rimborso del debito residuo o il pagamento delle rate, in tutti quei casi in cui il cliente debba far fronte a situazioni difficili. Gli eventi coperti sono l'invalidita' totale permanente, la perdita d'impiego, il ricovero ospedaliero, la malattia grave o invalidita' temporanea.</p><p>Le prestazioni sono differenziate in base alla situazione dei sottoscrittori, in qualita' di lavoratori dipendenti, autonomi o non lavoratori. Il capitale massimo assicurato e' di 350.000 euro per singolo intestatario. La copertura e' operativa in quote proporzionali su tutti gli intestatari.</p><p>La convenzione Multirischi stipulata con Bipiemme Assicurazioni S.P.A.</p><p>Il premio unico pari a 2,50% dell'importo del mutuo, calcolato al momento dell'erogazione.</p>]]></descrizione>
            </assicurazione>
            <assicurazione codice="WBM7" attiva="n" obbligatoria="n">
               <nomeprodotto>VITA + MULTIRISCHI</nomeprodotto>
               <payoff><![CDATA[COPERTURA COMPLETA PER LA TUA SERENITA']]></payoff>
               <descrizione><![CDATA[<p>SCEGLI ENTRAMBE LE COPERTURE ASSICURATIVE</p><p>La convenzione Vita stipulata con Bipiemme Vita S.P.A. prevede il <strong>rimborso del capitale</strong> residuo del mutuo <strong>in caso di decesso</strong>. Il capitale massimo assicurato e' di 350.000 euro per singolo intestatario. La copertura operativa in quote proporzionali su tutti gli intestatari. Il <strong>premio annuo pari a 1,6 euro ogni mille euro di mutuo</strong> (0,16% del capitale da rimborsare all'inizio di ciascun anno). Per il primo e ultimo anno di mutuo, il premio sara' calcolato sul periodo di effettivo utilizzo.</p><p>Viene garantito il rimborso del debito residuo o il pagamento delle rate, in tutti quei casi in cui il cliente debba far fronte a situazioni difficili. Gli eventi coperti sono l'invalidita' totale permanente, la perdita d'impiego, il ricovero ospedaliero, la malattia grave o invalidita' temporanea.</p><p>Le prestazioni sono <strong>differenziate in base alla situazione dei sottoscrittori</strong>, in qualita' di lavoratori dipendenti, autonomi o non lavoratori. Il <strong>capitale massimo</strong> assicurato e' di 350.000 euro per singolo intestatario. La copertura e' operativa in quote proporzionali su tutti gli intestatari.</p><p>La convenzione Multirischi stipulata con Bipiemme Assicurazioni S.P.A.</p><p>Il <strong>premio unico pari a 2,50%</strong> dell'importo del mutuo, calcolato al momento dell'erogazione.</p>]]></descrizione>
            </assicurazione>
         </assicurazioni>
         <pianoammortamento>/webankpub/wb/creaPdfMutui.do</pianoammortamento>
      </mutuo>
   </mutui>
</risposta>

<?php
}
?>
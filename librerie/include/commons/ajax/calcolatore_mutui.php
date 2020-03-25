<?php
header("Content-type: text/xml");
if ($_POST["codicemutuo"] == "") {
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
		<mutuo codicemutuo="MUTUO NUOVO" rata="235.19" disponibile="n" duratamin="5" duratamax="40" mutuominimo="50000" mutuomassimo="1000000" ltv="90.0">
			<nome>Mutuo nuovo</nome>
			<link>/wbx/upload/catalogoMol/scheda_mutuo_opzione_fisso_webank_16_feb_15.pdf</link>
			<indice>IRS 5 anni  0,287%</indice>
			<spread>2,200%</spread>
			<tasso>2,487%</tasso>
			<taeg>2,544%</taeg>
			<messaggio></messaggio>
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
      <mutuo codicemutuo="PRODOTTO FISSO ESPLICITO" rata="653.57" disponibile="y" duratamin="10" duratamax="30" mutuominimo="50000" mutuomassimo="1000000" ltv="80.0">
        <nome>Mutuo fisso prefissato</nome>
        <link>/wbx/upload/catalogoMol/scheda_mutuo_fisso_prefissato_webank_01_dic_15.pdf</link>
        <indice>NON INDICIZZATO  0,000%</indice>
        <spread>2,800%</spread>
        <tasso>2,800%</tasso>
        <taeg>2,865%</taeg>
     	<incassorata>9.999,99</incassorata>
		<istruttoria>9.999,99</istruttoria>
		<polizzafacoltativa>9.999,99</polizzafacoltativa>
		<perizia>9.999,99</perizia>
		<imposta>9.999,99</imposta>
		<polizza>9.999,99</polizza>
		<costototcred>9.999,99</costototcred>
		<imptotcons>9.999,99</imptotcons>
         <messaggio />
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
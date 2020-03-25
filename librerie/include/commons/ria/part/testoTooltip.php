

<script type="text/javascript">
    var autom = {
        graficoContiDiv: {
            type: 'mouseover',
            item_options: {
                halign		: 'left',
                text		: 'Il grafico rappresenta la ripartizione del tuo denaro  tra c/corrente e deposito. L\'importo totale  indicato  è calcolato considerando  i margini utilizzabili.',
                offset		: -40,
                persistent	: true
            }
        },
        importoCD: {
            type: 'mouseover',
            item_options: {
                text		: 'Inserisci qui  l\'importo che vuoi versare nel deposito. Non ti sar&agrave; applicata <strong>alcuna commissione</strong>. La data di valuta  di accredito sar&agrave;  il giorno lavorativo  successivo  al trasferimento..',
                persistent	: true
            }
        },
        importoCC: {
            type: 'mouseover',
            item_options: {
                valign		: 'bottom',
                halign		: 'left',
                text		: 'Inserisci qui l\'importo che vuoi <br />riportare sul c/corrente. Non ti sar&agrave; applicata <strong>alcuna commissione</strong> La data di valuta  di accredito sar&agrave;  il giorno lavorativo  successivo  al trasferimento..',
                persistent	: true
            }
        },
        aggiungiCD:{
            type:'mouseover',
            item_options:{
                halign		: 'left',
                text		: '<strong>Clicca</strong> il pulsante per  proseguire nella richiesta di trasferimento'
            }
        },
        aggiungiCC:{
            type:'mouseover',
            item_options:{
                valign		: 'bottom',
                text		: '<strong>Clicca</strong> il pulsante per  proseguire nella richiesta di trasferimento.'
            }
        },
	
        //step2
        importoCDversamenti: {
            type: 'mouseover',
            item_options: {
                text		: '<strong>Inserisci</strong> qui l\'importo che vuoi versare nel deposito'
            }
        },
        importoCCversamenti: {
            type: 'mouseover',
            item_options: {
                valign		: 'bottom',
                text		: '<strong>Inserisci</strong> qui l\'importo che vuoi riportare nel c/corrente.'
            }
        },

        aggiungiCDversamenti: {
            type: 'mouseover',
            item_options: {
                text		: '<strong>Clicca</strong> il pulsante per  proseguire nella richiesta di trasferimento.'
            }
        },
        aggiungiCCversamenti: {
            type: 'mouseover',
            item_options: {
                text		: '<strong>Clicca</strong> il pulsante per  proseguire nella richiesta di trasferimento.'
            }
        },
        diventaCDTr: {
            type: 'mouseover',
            item_options: {
                valign		: 'bottom',
                text		: '<strong>Osserva queste indicazioni.</strong> Ti mostrano come si modificheranno i tuoi <?php echo $contoLabelShortPlurLow ?> in base al  trasferimento che stai per fare.'
            }
        },
        //step3
        importoTRf:{
            type: 'mouseover',
            item_options: {
                text		: '<strong>Inserisci</strong>  l\'importo che vuoi trasferire periodicamente dal c/corrente al c/ deposito.'
            }
        },
        frequenzaTRf:{
            type: 'mouseover',
            item_options: {
                text		: '<strong>Scegli</strong> la frequenza con cui  vuoi che siano effettuati i trasferimenti.'
            }
        },
        aPartireDaTRf:{
            type: 'mouseover',
            item_options: {
                text		: 'Inserisci la data in cui vuoi che il trasferimento sia accreditato.<br> Usa il formato <strong>gg/mm/aaaa.</strong>'
            }
        },
        revoca:{
            type: 'mouseover',
            item_options: {
                text		: 'Se lasci la scadenza "su richiesta" il trasferimento rimarr&agrave; impostato finché non lo cancellerai. Se scegli "<strong>dopo versamenti N</strong>" devi indicare quanti ne vuoi impostare.'
            }
        },
	
        graficoProiezioneTRicDiv:{
            type: 'mouseover',
            item_options: {
                text		: 'Questo grafico ti mostra di quanto aumenter&agrave; nei prossimi mesi il tuo deposito in base al trasferimento che hai impostato. Spiegare aumento'
            }
        },
	
        //step
	
        graficoStoricoTRicDiv:{
            type: 'mouseover',
            item_options: {
                text		: 'Il grafico ti mostra l\'andamento del deposito negli ultimi mesi. Le porzioni colorate indicano <strong>il contributo di ogni singolo trasferimento periodico</strong> al saldo medio mensile. Guarda i colori nella tabella per vedere le corrispondenze.'
            }
        },
        //step
	
        accordionPianoRadio2:{
            type: 'mouseover',
            item_options: {
                title		: 'Imposta soglia massima',
                text		: 'Quando il saldo del c/corrente superer&agrave; la soglia massima, l\'<strong>eccedenza</strong> sar&agrave; <strong>trasferita automaticamente</strong> sul tuo deposito. <br>Puoi  anche impostare contemporaneamente soglia massima e soglia minima.'
            }
        },

        accordionPianoRadio1:{
            type: 'mouseover',
            item_options: {
                title		: 'Imposta soglia minima',
                text		: 'Quando il saldo del c/corrente scender&agrave; sotto la soglia minima, la <strong>differenza</strong> sar&agrave; a<strong>utomaticamente ripianata,</strong> spostando l\'importo dal tuo c/ deposito a l tuo c/ corrente. <br>Puoi  anche impostare contemporaneamente soglia minima e soglia massima.'
            }
        },
        //step
        importoNuovaLV:{
            type: 'mouseover',
            item_options: {
                text		: 'Indica qui l\'importo che vuoi vincolare.'
            }
        },
	
        boxTabLineeVincolate:{
            type: 'mouseover',
            item_options: {
                text		: '<strong>Clicca</strong> il pulsante in corrispondenza della linea vincolata che vuoi aprire.'
            }
        },
        //step
	
        graficoPianoVincoloDiv:{
            type: 'mouseover',
            item_options: {
                text		: 'Questo è il <strong>piano delle scadenze</strong> delle  tue linee vincolate. Confronta i colori del grafico con  quelli presenti nella tabella qui sotto.'
            }
        },
	
        track1:{
            type: 'mouseover',
            item_options: {
                valign		: 'bottom',
                text		: '<strong>Usa</strong> questa barra a scorrimento per <strong>conoscere</strong> quale sar&agrave; la tua <strong>disponibilit&agrave;</strong> a una certa data  in base alla scadenza delle linee vincolate .'
            }
        },

        cosaCP1:{
            type: 'mouseover',
            item_options: {
                text		: '<strong>Inserisci</strong> il nome di un <strong>oggetto</strong> che vuoi comprare o di un <strong>progetto</strong>  che desideri realizzare (es. moto, vacanza)'
            }
        },
	
        costoCP1:{
            type: 'mouseover',
            item_options: {
                valign		: 'bottom',
                text		: 'Inserisci il valore di questo oggetto o progetto, ( es. 10000)'
            }
        },
        aggiungiObiettivo1:{
            type: 'mouseover',
            item_options: {
                valign		: 'bottom',
                text		: '<strong>Clicca</strong> qui per <strong>aggiungere</strong> l\'oggetto nella lista a destra.'
            }
        },
        obiettiviCP1:{
            type: 'mouseover',
            item_options: {
                text		: '<strong>Clicca</strong> qui se vuoi <strong>eliminare</strong> l\'oggetto dalla lista.'
            }
        },
        importoLVcp:{
            type: 'mouseover',
            item_options: {
                text		: 'Inserisci qui l\'importo che vuoi vincolare.'
            }
        },
	
        boxTabLineeVincolatecp:{
            type: 'mouseover',
            item_options: {
                valign		: 'bottom',
                text		: 'Seleziona la linea vincolata che  vuoi aprire.'
            }
        },
	
        //
        aggiungiObiettivo2:{
            type: 'mouseover',
            item_options: {
                valign		: 'bottom',
                text		: 'Puoi aggiungere o eliminare obiettivi.'
            }
        },
        tabRisparmio2:{
            type: 'mouseover',
            item_options: {
                text		: 'Clicca per scegliere se utilizzare il trasferimento a <strong>soglia</strong> o <strong>periodico</strong>.'
            }
        },
        track2:{
            type: 'mouseover',
            item_options: {
                valign		: 'bottom',
                text		: '<strong>Spostando</strong> il cursore puoi <strong>modificare</strong> l\'importo da trasferire  e la frequenza. La <strong>data di raggiungimento si modificher&agrave;</strong> di conseguenza.'
            }
        },
        track3:{
            type: 'mouseover',
            item_options: {
                valign		: 'bottom',
                text		: '<strong>Spostando</strong> il cursore puoi <strong>modificare</strong> la data in cui raggiungerai tutti gli obiettivi. La <strong>quota da versare</strong> si modificher&agrave; di conseguenza.'
            }
        },
        graficoPianoSalvatoDiv:{
            type: 'mouseover',
            item_options: {
                valign		: 'bottom',
                text		: 'In questo grafico puoi confrontare la curva  di previsione del risparmio  con l\'andamento reale del tuo deposito. <br>In questo modo potrai vedere  a che punto &egrave; il tuo risparmio effettivo rispetto a quello inizialmente previsto, che ti avrebbe assicurato  la realizzazione dei tuoi desideri.'
            }
        }
    }
</script>
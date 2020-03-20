<?php
header("Content-type: text/xml");
if ($_POST["codicemutuo"] == "") {
?>
{
    "tabs": [
        {
            "sel": true,
            "finalita": "Acquisto",
            "nome": "Acquisto",
            "link": "?finalita=Acquisto",
            "valore": {
                "valore": "Acquisto",
                "primaCasa": "SI"
            }
        },
        {
            "sel": false,
            "finalita": "Surroga",
            "nome": "Surroga",
            "link": "?finalita=Surroga",
            "valore": {
                "valore": "Surroga",
                "primaCasa": "SI"
            }
        }
    ],
    "mutui": [
        {
            "codicemutuo": "PRODOTTO FISSO",
            "rata": "584.59",
            "disponibile": "y",
            "duratamin": 10,
            "duratamax": 30,
            "mutuominimo": 50000,
            "mutuomassimo": 1000000,
            "ltv": 80.0,
            "nome": "Mutuo Fisso",
            "link": "/webankpub/common/apriPdfMutui.do?isPdf=true&id=164&cod=05034.47172.11050",
            "indice": "IRS per durata  1,050%",
            "spread": "0,550%",
            "tasso": "1,600%",
            "taeg": "1,639%",
            "incassorata": "0.0",
            "istruttoria": "0,00",
            "perizia": "0,00",
            "imposta": "300,00",
            "polizza": "0,00",
            "costototcred": "20.692,17",
            "imptotcons": "140.692,17",
            "messaggio": "",
            "assicurazioni": null,
            "pianoammortamento": null
        },
        {
            "codicemutuo": "TASSO VARIABILE OPZIONE NEW",
            "rata": "556.65",
            "disponibile": "y",
            "duratamin": 10,
            "duratamax": 30,
            "mutuominimo": 50000,
            "mutuomassimo": 1000000,
            "ltv": 80.0,
            "nome": "Mutuo Variabile con Opzione",
            "link": "/webankpub/common/apriPdfMutui.do?isPdf=true&id=167&cod=05034.47172.11300",
            "indice": "EURIBOR 3 MESI  -0,311%",
            "spread": "1,400%",
            "tasso": "1,089%",
            "taeg": "1,121%",
            "incassorata": "0.0",
            "istruttoria": "0,00",
            "perizia": "0,00",
            "imposta": "300,00",
            "polizza": "0,00",
            "costototcred": "13.957,97",
            "imptotcons": "133.957,97",
            "messaggio": "",
            "assicurazioni": null,
            "pianoammortamento": null
        },
        {
            "codicemutuo": "TASSO VARIABILE NEW",
            "rata": "548.61",
            "disponibile": "y",
            "duratamin": 10,
            "duratamax": 30,
            "mutuominimo": 50000,
            "mutuomassimo": 1000000,
            "ltv": 80.0,
            "nome": "Mutuo Variabile",
            "link": "/webankpub/common/apriPdfMutui.do?isPdf=true&id=168&cod=05034.47172.11250",
            "indice": "EURIBOR 3 MESI  -0,311%",
            "spread": "1,250%",
            "tasso": "0,939%",
            "taeg": "0,970%",
            "incassorata": "0.0",
            "istruttoria": "0,00",
            "perizia": "0,00",
            "imposta": "300,00",
            "polizza": "0,00",
            "costototcred": "12.020,48",
            "imptotcons": "132.020,48",
            "messaggio": "",
            "assicurazioni": null,
            "pianoammortamento": null
        }
    ]
}
<?php
}
else
{
?>
{
    "mutui": [
      {
        "codicemutuo":"PRODOTTO FISSO",
        "rata":686.83,
        "disponibile": true,
        "duratamin":10, 
        "duratamax": 30,
        "mutuominimo": 50000,
        "mutuomassimo": 1000000,
        "ltv":80.0,
        "nome":"Mutuo fisso",
        "link":"/wbx/upload/catalogoMol/scheda_mutuo_fisso_IRS_webank_16_feb_15.pdf",
        "indice":"IRS per durata  1,150%",
        "spread":"2,200%",
        "tasso":"3,350%",
        "taeg":"3,431%",
        "incassorata":"9.999,99",
        "istruttoria":"9.999,99",
        "perizia":"9.999,99",
        "imposta":"9.999,99",
        "polizza":"9.999,99",
        "costototcred":"9.999,99",
        "imptotcons":"9.999,99",
        "pianoammortamento":"/webankpub/wb/creaPdfMutui.do",
        "assicurazioni" : [
			{
			   	"codice":"WBM1",
			   	"attiva":true, 
				"obbligatoria":true,
               	"nomeprodotto": "POLIZZA CASA",
               	"payoff": "TE LA REGALA WEBANK",
               	"descrizione": "La convenzione ''Incendio e rischi supplementari'' stipulata con UnipolSAI Assicurazioni S.p.A. garantisce l'indennizzo a fronte di danni materiali e diretti agli immobili assicurati, da eventi quali incendio ed ulteriori rischi.La somma assicurata corrisponde al valore di ricostruzione dell'immobile determinato in base alla superficie e alla categoria catastale dell'immobile posto a garanzia, indipendentemente dall'importo del mutuo ancora da restituire."
            },
            {
				"nomeprodotto": "VITA",
				"payoff": "RIMBORSO DEL MUTUO IN CASO DI DECESSO",
				"descrizione": "La convenzione stipulata con Bipiemme Vita S.P.A. prevede il rimborso del capitale residuo del mutuo in caso di decesso. Il capitale massimo assicurato  e' di 350.000 euro per singolo intestatario. La copertura operativa in quote proporzionali su tutti gli intestatari, fino al compimento del settantacinquesimo anno di eta'.<br />                <br />                Il premio annuo  pari a 1,6 euro ogni mille euro di mutuo (0,16% del capitale da rimborsare all'inizio di ciascun anno). Per il primo e ultimo anno di mutuo, il premio sara' calcolato sul periodo di effettivo utilizzo.",
				"codice": "WBM2",
				"attiva": false,
				"obbligatoria": false
			},
			{
				"nomeprodotto": "MULTIRISCHI",
				"payoff": "COPERTURA IDEALE A GARANZIA DEL REDDITO",
				"descrizione": "<p>Viene garantito il rimborso del debito residuo o il pagamento delle rate, in tutti quei casi in cui il cliente debba far fronte a situazioni difficili. Gli eventi coperti sono l'invalidita' totale permanente, la perdita d'impiego, il ricovero ospedaliero, la malattia grave o invalidita' temporanea.</p><p>Le prestazioni sono differenziate in base alla situazione dei sottoscrittori, in qualita' di lavoratori dipendenti, autonomi o non lavoratori. Il capitale massimo assicurato e' di 350.000 euro per singolo intestatario. La copertura e' operativa in quote proporzionali su tutti gli intestatari.</p><p>La convenzione Multirischi stipulata con Bipiemme Assicurazioni S.P.A.</p><p>Il premio unico pari a 2,50% dell'importo del mutuo, calcolato al momento dell'erogazione.</p>",
				"codice": "WBM8",
				"attiva": false,
				"obbligatoria": false
			},
			{
				"nomeprodotto": "VITA + MULTIRISCHI",
				"payoff": "COPERTURA COMPLETA PER LA TUA SERENITA'",
				"descrizione": "<p>SCEGLI ENTRAMBE LE COPERTURE ASSICURATIVE</p><p>La convenzione Vita stipulata con Bipiemme Vita S.P.A. prevede il <strong>rimborso del capitale</strong> residuo del mutuo <strong>in caso di decesso</strong>. Il capitale massimo assicurato e' di 350.000 euro per singolo intestatario. La copertura operativa in quote proporzionali su tutti gli intestatari. Il <strong>premio annuo pari a 1,6 euro ogni mille euro di mutuo</strong> (0,16% del capitale da rimborsare all'inizio di ciascun anno). Per il primo e ultimo anno di mutuo, il premio sara' calcolato sul periodo di effettivo utilizzo.</p><p>Viene garantito il rimborso del debito residuo o il pagamento delle rate, in tutti quei casi in cui il cliente debba far fronte a situazioni difficili. Gli eventi coperti sono l'invalidita' totale permanente, la perdita d'impiego, il ricovero ospedaliero, la malattia grave o invalidita' temporanea.</p><p>Le prestazioni sono <strong>differenziate in base alla situazione dei sottoscrittori</strong>, in qualita' di lavoratori dipendenti, autonomi o non lavoratori. Il <strong>capitale massimo</strong> assicurato e' di 350.000 euro per singolo intestatario. La copertura e' operativa in quote proporzionali su tutti gli intestatari.</p><p>La convenzione Multirischi stipulata con Bipiemme Assicurazioni S.P.A.</p><p>Il <strong>premio unico pari a 2,50%</strong> dell'importo del mutuo, calcolato al momento dell'erogazione.</p>",
				"codice": "WBM7",
				"attiva": false,
				"obbligatoria": false
			}
		]
      }
      ]
  }<?php
}
?>
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

    "mutui":
[
{
"codicemutuo":"PRODOTTO FISSO",
"rata":"703.96",
"disponibile":"y",
"duratamin":10,
"duratamax":30,
"mutuominimo":80000,
"mutuomassimo":1000000,
"ltv":70.0,
"nome":"Mutuo Fisso",
"link":"/webankpub/common/apriPdfMutui.do?isPdf=true&id=169&cod=05034.47172.12050",
"indice":"IRS per durata  -0,110%",
"spread":"1,200%",
"tasso":"1,090%",
"taeg":"1,098%",
"incassorata":"0,00",
"istruttoria":"0,00",
"perizia":"0,00",
"imposta":"0,00",
"polizza":"0,00",
"polizzafacoltativa":null,
"costototcred":"4.545,73",
"imptotcons":"84.545,73",
"messaggio":"",
"assicurazioni":null,
"pianoammortamento":null,
"messaggioGenerico":null
},
{
"codicemutuo":"TASSO VARIABILE OPZIONE NEW",
"rata":"704.55",
"disponibile":"y",
"duratamin":10,
"duratamax":30,
"mutuominimo":80000,
"mutuomassimo":1000000,
"ltv":70.0,
"nome":"Mutuo Variabile con Opzione",
"link":"/webankpub/common/apriPdfMutui.do?isPdf=true&id=166&cod=05034.47172.12300",
"indice":"EURIBOR 3 MESI  -0,393%",
"spread":"1,500%",
"tasso":"1,107%",
"taeg":"1,115%",
"incassorata":"0,00",
"istruttoria":"0,00",
"perizia":"0,00",
"imposta":"0,00",
"polizza":"0,00",
"polizzafacoltativa":null,
"costototcred":"4.617,92",
"imptotcons":"84.617,92",
"messaggio":"",
"assicurazioni":null,
"pianoammortamento":null,
"messaggioGenerico":null
},
{
"codicemutuo":"TASSO VARIABILE NEW",
"rata":"699.34",
"disponibile":"n",
"duratamin":10,
"duratamax":30,
"mutuominimo":80000,
"mutuomassimo":1000000,
"ltv":70.0,
"nome":"Mutuo Variabile",
"link":"/webankpub/common/apriPdfMutui.do?isPdf=true&id=165&cod=05034.47172.12250",
"indice":"EURIBOR 3 MESI  -0,393%",
"spread":"1,350%",
"tasso":"0,957%",
"taeg":"0,964%",
"incassorata":"0,00",
"istruttoria":"0,00",
"perizia":"0,00",
"imposta":"0,00",
"polizza":"0,00",
"polizzafacoltativa":null,
"costototcred":"3.982,57",
"imptotcons":"83.982,57",
"messaggio":"La polizza casa utilizzata per la simulazione online prevede la copertura dell'intero valore dell'immobile. Il valore del premio risulta eccessivo rispetto al valore da te preventivato.<br><br>Effettua una nuova simulazione modificando i parametri o verifica in filiale le opzioni di assicurazione del tuo immobile.",
"assicurazioni":null,
"pianoammortamento":null,
"messaggioGenerico":"errore generico"
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
        "disponibile": "n",
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
        "messaggio":"La polizza casa utilizzata per la simulazione online prevede la copertura dell'intero valore dell'immobile. Il valore del premio risulta eccessivo rispetto al valore da te preventivato.<br><br>Effettua una nuova simulazione modificando i parametri o verifica in filiale le opzioni di assicurazione del tuo immobile.",
        "assicurazioni":null,
        "pianoammortamento":null,
        "messaggioGenerico":"errore generico",
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
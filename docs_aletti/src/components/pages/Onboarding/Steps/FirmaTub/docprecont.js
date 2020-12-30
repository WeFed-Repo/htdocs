import React from 'react';

export default (hasdt) => {

    let obj = {
        "accordions": [
            {
                "title": <>Documentazione informativa Privacy</>,
                "files": [
                    {
                        "name": "Informativa Privacy", "id": "AAA-BB-CCC-DDDD"
                    }]
            },
            {
                "title": <>Documentazione informativa precontrattuale del conto corrente</>,
                "files": [
                    { "name": "Foglio Informativo conto corrente ordinario consumatori OFS", "id": "AAA-BB-CCC-DDDD" },
                    { "name": "Foglio Informativo conto corrente ordinario consumatori OFS – servizi accessori", "id": "AAA-BB-CCC-DDDD" },
                    { "name": "Proposta contrattuale conto corrente (proposta fac simile comprensiva delle condizioni generali relative al rapporto Banca-Cliente)", "id": "AAA-BB-CCC-DDDD" },
                    { "name": "Guida pratica al conto corrente", "id": "AAA-BB-CCC-DDDD" },
                    { "name": "ABF in parole semplici", "id": "AAA-BB-CCC-DDDD" },
                    { "name": "Guida all'utilizzo del portale ABF", "id": "AAA-BB-CCC-DDDD" }
                ]
            }


        ]
        ,
        "checkgroup": [
            <><strong>Il cliente dichiara</strong> di aver preso visione della documentazione informativa precontrattuale che Banca Aletti ha consegnato.</>,
            <><strong>Ricezione copia proposta del contratto unitamente a copia di tutti i relativi allegati</strong>.<br />Il cliente dichiara di aver ricevuto una copia di tutti i documenti contrattuali</>
        ]
    };

    if (hasdt) {
        obj["accordions"].push(
            {
                "title": <>Documentazione informativa precontrattuale del Deposito Titoli a custodia ed amministrazione</>,
                "files": [
                    { "name": "Foglio informativo: Servizio di Deposito a Custodia e Amministrazione di Titoli e Strumenti Finanziari", "id": "AAA-BB-CCC-DDDD" },
                    { "name": "Proposta contrattuale deposito titoli a custodia e amministrazione (fac simile)", "id": "AAA-BB-CCC-DDDD" }
                ]
            },
            {
                "title": <>Documentazione informativa precontrattuale sui servizi di investimento</>,
                "files": [
                    { "name": "Informativa preliminare alla clientela", "id": "AAA-BB-CCC-DDDD" },
                    { "name": "Proposta contrattuale servizi di investimento (fac simile)", "id": "AAA-BB-CCC-DDDD" },
                    { "name": "Aletti - Modulo standard per le informazioni da fornire ai depositanti", "id": "AAA-BB-CCC-DDDD" },
                    { "name": "Arbitro per le Controversie Finanziarie (ACF)", "id": "AAA-BB-CCC-DDDD" }
                ]
            }


        )
    }

    return obj;
}
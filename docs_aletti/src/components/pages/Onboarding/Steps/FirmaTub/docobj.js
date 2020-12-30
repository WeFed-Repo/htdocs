import React from 'react';

export default (hasdt) => {

    let obj = {
        "accordions": [
            {
                "title": <>Moduli</>,
                "files": [
                    {
                        "name": "Consenso Privacy",
                        "id": "J620011_000319_OFS_PR",
                        "checkgroup": [
                            <>
                                Il cliente dichiara di aver preso visione dell’informativa sulla protezione dei dati personali e di avere espresso le proprie preferenze nella sezione dedicata ai consensi
                            </>
                        ]
                    },
                    {
                        "name": "Normativa Antiriciclaggio Conto corrente",
                        "id": "J210018_000319_OFS_ADV"
                    }, {
                        "name": "Normativa Antiriciclaggio Deposito titoli a custodia ed amministrazione",
                        "id": "J210018_000319_OFS_ADV",
                        "checkgroup": [
                            <>Il cliente dichiara nella piena consapevolezza della responsabilità civile e penale che
                            comporta il rilascio di dichiarazioni mendaci e non veritiere, di aver preso visione
                            dell’informativa sugli obblighi antiriciclaggio, di cui al D. Lgs. 231/07 e successive integrazione
                            e modifiche, e di aver fornito tutte le informazioni necessarie ed aggiornate di cui è a
                            conoscenza, anche relativamente al titolare effettivo del rapporto/dell'operazione, garantisce
                            che le stesse sono esatte e veritiere e si impegna a comunicarne ogni futura ed eventuale
                            modifica.
                            </>
                        ]
                    }
                    ,
                    {
                        "name": "Modulo FATCA-CRS",
                        "id": "J500200_000319_OFS_FC",
                        "checkgroup": [
                            <>Il cliente, nella piena consapevolezza della responsabilità civile e penale che comporta il
                            rilascio di dichiarazioni mendaci e non veritiere, conferma di avere compreso le motivazioni in
                            relazione alle quali è stata richiesta la compilazione dell’autocertificazione, Inoltre assicura
                            l’esattezza di tutti i dati e di tutti gli elementi da esso forniti nonché la veridicità della eventuale
                            documentazione consegnata. Resta da ultimo inteso che sarà preciso obbligo del cliente
                            comunicare tempestivamente ogni eventuale futura variazione dei dati di cui sopra.
                            </>,
                            <>Il cliente dichiara di approvare specificatamente, ai sensi e per gli effetti degli artt. 1341 e
                            1342, comma 2, c.c., il contenuto della dichiarazione sopra riportata, ed in particolare:
                            la facoltà di recesso dai rapporti e si impegna a tenere indenne il vostro Istituto da eventuali
                            danni conseguenti alle dichiarazioni rese.
                            </>
                        ]
                    }
                ]
            },
            {
                "title": <>Documentazione contrattuale del conto corrente</>,
                "files": [
                    {
                        "name": "Condizioni economiche e contrattuali del conto",
                        "id": "A230010_000319_OFS_CC",
                        "checkgroup": [
                            <>
                                Il cliente ha letto e approvato integralmente il contenuto delle condizioni economiche e contrattuali, contenente il preavviso di revoca alla Centrale d'Allarme Interbancaria (C.A.I.)
                            </>
                        ]
                    }
                ]
            }
        ]

    };

    if (hasdt) {
        obj["accordions"].push(
            {
                "title": <>Documentazione contrattuale del deposito titoli a custodia ed amministrazione</>,
                "files": [
                    {
                        "name": "Condizioni economiche e contrattuali del Deposito Titoli a custodia ed amministrazione",
                        "id": "J700000_000319_OFS_DT",
                        "checkgroup": [
                            <>
                                Il cliente ha letto e approvato integralmente il contenuto delle condizioni economiche e contrattuali del Deposito Titoli a custodia ed amministrazione
                            </>
                        ]
                    }
                ]
            }


        )
    }

    return obj;
}
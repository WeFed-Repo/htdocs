import React from 'react';

export default (hasdt) => {

    let obj = {
        "accordions": [
            {
                "title": <>Clausole vessatorie del conto</>,
                "files": [
                    {
                        "name": "Clausole vessatorie del conto corrente",
                        "id": "A230010_000319_OFS_CC",
                        "checkgroup": [
                            <>
                                Il cliente ha letto e approvato specificatamente le clausole rilevanti ai sensi degli artt. Xxx e xxxx c.c. degli artt. Xxx e xxx c.c.
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
                "title": <>Clausole vessatorie del deposito titoli</>,
                "files": [
                    {
                        "name": "Clausole vessatorie del deposito titoli a custodia ed amministrazione",
                        "id": "J700000_000319_OFS_DT",
                        "checkgroup": [
                            <>
                                Il cliente ha letto e approvato specificatamente le clausole rilevanti ai sensi degli artt. Xxx e xxxx c.c. degli artt. Xxx e xxx c.c.
                            </>
                        ]
                    }
                ]
            }


        )
    }

    return obj;
}
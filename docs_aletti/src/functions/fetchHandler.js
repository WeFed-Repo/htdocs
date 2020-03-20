const fetchHandler = (promise) => {
    return promise
        .then(response => {
            if (response.ok) {
               return response.json()
            } else {
                throw new Error("Errore chiamata");
            }
        }).then(
            /**
             *
             * @param json
             * @param json.esito
             * @param json.esito.codice
             * @param json.results
             * @param json.results.bozze
             * @param json.bozzePromotori
             */
            json => {
                // Rielabora il Json
                if (json && json.esito && (json.esito.code === "200" || json.esito.type === "OK") && json.results) {
                    return json.results;
                } 
                else if (json && json.esito && (json.esito.code === "200" || json.esito.type === "OK") && json.bozzePromotori)
                {
                    return json.bozzePromotori;
                }
                else {
                    throw new Error("Errore parsing dati");
                }
            }
        );
};

export default fetchHandler;
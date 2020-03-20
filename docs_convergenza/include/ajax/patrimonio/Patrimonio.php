<?php
   header("content-type:  application/json; charset=utf-8");
   $conto = $_GET['accountId'];

   // Simula il tempo di esecuzione della chiamata
   // sleep(1);

  if ($conto == '01099 - 0000011111 - EUR') /* (CC + DEP + DER + PAT) */{ ?>{
    "esito": "ok",

    "liquiditaTotale": 600000,
    "liquiditaConto": 500000,
    "liquiditaFido": 100000,

    "depositoTotale": 500000,
    "depositoLibero": 300000,
    "depositoLinee": 200000,
    
    "custodiaTotale": 400000,
    "custodiaTitoli": 250000,
    "custodiaFondi": 100000,
    "custodiaDerivati": 50000,

    "mutui": 300000,
    "patrimonioImmobiliare": 200000,
    "immobiliIns": 500000
}<?php } else if ($conto == '01099 - 0000022222 - EUR') /* (CC + DEP + PAT) */ { ?>{
    "esito": "ok",

    "liquiditaTotale": 600000,
    "liquiditaConto": 500000,
    "liquiditaFido": 100000,

    "depositoTotale": 500000,
    "depositoLibero": 300000,
    "depositoLinee": 200000,

    "mutui": 300000,
    "patrimonioImmobiliare": 200000,
    "immobiliIns": 500000
}<?php } else if ($conto == '01099 - 0000033333 - EUR') /* (CC + DER + PAT) */ { ?>{
    "esito": "ok",

    "liquiditaTotale": 600000,
    "liquiditaConto": 500000,
    "liquiditaFido": 100000,
    
    "custodiaTotale": 400000,
    "custodiaTitoli": 250000,
    "custodiaFondi": 100000,
    "custodiaDerivati": 50000,

    "mutui": 300000,
    "patrimonioImmobiliare": 200000,
    "immobiliIns": 500000
}<?php } else if ($conto == '01099 - 0000044444 - EUR') /* (CC + PAT) */ { ?>{
    "esito": "ok",

    "liquiditaTotale": 600000,
    "liquiditaConto": 500000,
    "liquiditaFido": 100000,

    "mutui": 300000,
    "patrimonioImmobiliare": 200000,
    "immobiliIns": 500000
}<?php } else if ($conto == '01099 - 0000055555 - EUR') /* (CC + DEP + DER) */{ ?>{
    "esito": "ok",

    "liquiditaTotale": 600000,
    "liquiditaConto": 500000,
    "liquiditaFido": 100000,

    "depositoTotale": 500000,
    "depositoLibero": 300000,
    "depositoLinee": 200000,
    
    "custodiaTotale": 400000,
    "custodiaTitoli": 250000,
    "custodiaFondi": 100000,
    "custodiaDerivati": 50000
}<?php } else if ($conto == '01099 - 0000066666 - EUR') /* (CC + DEP) */ { ?>{
    "esito": "ok",

    "liquiditaTotale": 600000,
    "liquiditaConto": 500000,
    "liquiditaFido": 100000,

    "depositoTotale": 500000,
    "depositoLibero": 300000,
    "depositoLinee": 200000
}<?php } else if ($conto == '01099 - 0000077777 - EUR') /* (CC + DER) */ { ?>{
    "esito": "ok",
    
    "liquiditaTotale": 600000,
    "liquiditaConto": 500000,
    "liquiditaFido": 100000,
    
    "custodiaTotale": 400000,
    "custodiaTitoli": 250000,
    "custodiaFondi": 100000,
    "custodiaDerivati": 50000
}<?php } else if ($conto == '01099 - 0000088888 - EUR') /* (CC) */ { ?>{
    "esito": "ok",

    "liquiditaTotale": 600000,
    "liquiditaConto": 500000,
    "liquiditaFido": 100000
}<?php } else /* ALL */ { ?>{
    "esito": "ok",

    "liquiditaTotale": 600000,
    "liquiditaConto": 500000,
    "liquiditaFido": 100000,

    "depositoTotale": 500000,
    "depositoLibero": 300000,
    "depositoLinee": 200000,
    
    "custodiaTotale": 400000,
    "custodiaTitoli": 250000,
    "custodiaFondi": 100000,
    "custodiaDerivati": 50000
}<?php } ?>

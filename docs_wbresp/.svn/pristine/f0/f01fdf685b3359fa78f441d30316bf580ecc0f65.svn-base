<?php
header("Content-type: application/json");
$codmutuo = $_POST["codicemutuo"];
$finalita = $_POST["finalita"];

/* Parametri per "spaccare" la simulazione */
$durata = $_POST["durata"];

if ($codmutuo == "") {
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
        "imptotcons":"9.999,99"
      },
      {
        "codicemutuo":"MUTUO NUOVO",
        "rata":626.83,
        "disponibile": true,
        "duratamin":10, 
        "duratamax": 30,
        "mutuominimo": 50000,
        "mutuomassimo": 1000000,
        "ltv":80.0,
        "nome":"Mutuo nuovo",
        <?php if(floatval($durata) < 12){
        ?>
        "messaggioGenerico":"errore generico",
        "messaggio": "La polizza casa utilizzata per la simulazione online prevede la copertura dell'intero valore dell'immobile. Il valore del premio risulta eccessivo rispetto al valore da te preventivato.<br><br>Effettua una nuova simulazione modificando i parametri o verifica in filiale le opzioni di assicurazione del tuo immobile.",
        <?php
        }?>
        "link":"/wbx/upload/catalogoMol/scheda_mutuo_fisso_IRS_webank_16_feb_15.pdf",
        "indice":"IRS 5 anni  0,287%",
        "spread":"2,200%",
        "tasso":"3,350%",
        "taeg":"3,431%",
        "incassorata":"9.999,99",
        "istruttoria":"9.999,99",
        "perizia":"9.999,99",
        "imposta":"9.999,99",
        "polizza":"9.999,99",
        "costototcred":"9.999,99",
        "imptotcons":"9.999,99"
      }
      
    ]
}

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
          $mp_herotext = "Cerchi un mutuo fino a 15 anni? Per avere le migliori condizioni scegli il tasso \\\"finito\\\".";
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
{
    "mutui": [
      {
        "codicemutuo": "<?php print strtoupper($codmutuo); ?>",
        <?php if (floatval($durata) <= 12) { ?>
          "messaggioGenerico" : "errore generico",
          "messaggio": "La polizza casa utilizzata per la simulazione online prevede la copertura dell'intero valore dell'immobile. Il valore del premio risulta eccessivo rispetto al valore da te preventivato.<br><br>Effettua una nuova simulazione modificando i parametri o verifica in filiale le opzioni di assicurazione del tuo immobile.",
        <?php
        } ?>
        "rata": 584.59,
        "disponibile": <?php print( (floatval($durata) > 12) ? "true" : "false"); ?>,
        "duratamin": 10,
        "duratamax": 30,
        "mutuominimo": 50000,
        "mutuomassimo": 1000000,
        "ltv": 80.0,
        "nome": "<?php print ($mp_prodname); ?>",
        <?php if ($codmutuo != "PRODOTTO FISSO 4YOU" && $codmutuo != "TASSO VARIABILE 4YOU") {
          ?>
           "descrizione": "<h3><?php print($mp_herotitle); ?></h3><p><?php print $mp_herotext; ?></p>",
            <?php
          }
          else
          {
          ?>
          "descrizione": "<?php print($mp_herohtml); ?>",
          <?php
        }?>
        "sottotitolo":"<?php print ($mp_prodpayoff); ?>",
        "link": "/webankpub/common/apriDocumento.do?isPdf=true&id=164",
        "indice": "IRS per durata  1,450%",
        "spread": "0,150%",
        "tasso": "1,600%",
        "taeg": "2,056%",
        "incassorata": "0,00",
        "istruttoria": "0,00",
        "perizia": "0,00",
        "imposta": "300,00",
        "polizza": "0,00",
        "costototcred": "25.929,55",
        "imptotcons": "145.929,55",
        "assicurazioni": [
            {
              "codice": "WBM1",
              "attiva": true,
              "obbligatoria": true,
              "nomeprodotto": "POLIZZA CASA",
              "payoff": "Te la regala Webank",
              "descrizione": "<p><strong>POLIZZA CASA</strong></p><ul class=\"flaglist\"><li>La convenzione ''Incendio e rischi supplementari'' è stipulata con UnipolSAI Assicurazioni S.p.A. </li><li>Garantisce l'indennizzo a fronte di danni materiali e diretti agli immobili assicurati, da eventi quali incendio ed ulteriori rischi.</li><li>La somma assicurata corrisponde al valore di ricostruzione dell'immobile determinato in base alla superficie e alla categoria catastale dell'immobile posto a garanzia, indipendentemente dall'importo del mutuo ancora da restituire.</li></ul><p> </p>"
            },
            {
              "codice": "WBMB",
              "attiva": true,
              "obbligatoria": false,
              "nomeprodotto": "VITA E MULTIRISCHI (CPI MUTUI PRIVATI)",
              "payoff": "Proteggi te e la tua famiglia",
              "descrizione": "La polizza facoltativa che <strong>tutela te e la tua famiglia</strong>.<br />Ti offre una protezione in caso di imprevisti che compromettono la capacità di rimborso del finanziamento. <br /><br />La polizza prevede: <br />&#8226; il <strong>rimborso del capitale residuo</strong> in caso di <strong>Decesso</strong> o di <strong>Invalidità Totale Permanente</strong>;<br />&#8226; il <strong>rimborso delle rate</strong> di mutuo nei casi di <strong>Inabilità Temporanea Totale</strong> e di <strong>Ricovero Ospedaliero.<br /></strong><br />La copertura può essere attivata in quote proporzionali su tutti gli intestatari del mutuo, fino al compimento del 75° anno di età e fino ad un importo massimo di 350.000 euro per ogni assicurato.<br /><br />Il <strong>premio annuale è pari allo 0,39%</strong> del capitale da rimborsare:<br />&#8226; al momento dell'adesione per il primo anno;<br />&#8226; all'inizio di ogni anno per le annualità successive, fino alla scadenza del mutuo.<br /><br />La polizza è stipulata in convenzione con <strong>Bipiemme Vita S.p.A</strong>. e <strong>Bipiemme Assicurazioni S.p.A.</strong>"
            }
          ],
        "pianoammortamento": "/webankpub/wbresp/creaPdfMutui.do"
      }
    ]
}
<?php
}
?>
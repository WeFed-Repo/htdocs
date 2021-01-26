<?php
   header("content-type: application/json; charset=utf-8");
   $orarioSel = $_POST['orarioSel'];
   $alreadyBooked = $_POST['isAlreadyBooked'];
   $annullaFlag = $_POST['annullaFlag'];
   $disservizioFlag = $_POST['disservizioFlag'];
   $fuoriOrario = $_POST['fuoriOrario'];
   $nCellulareCert = $_POST['nCellulareCert'];
?>
<?php //se non ho prenotazioni in corso e non ho ancora scelto l'orario torna i dati per costruire il form di scelta ?>
   <?php if  ($nCellulareCert !=="" && $nCellulareCert!="false" && $alreadyBooked === 'false' &&  $orarioSel === "" && $annullaFlag=== 'false' && $disservizioFlag === "false" && $fuoriOrario !=="true") { ?>
      {
         "esito":"ok",
         "stato" : "disponibile",
         "isAlreadyBooked": "false",
         "fasce_orario_dispo": [
               {
                  "orario" : "ora",
                  "is-dispo" : "true",
                  "ndispo": 10
               },
               {
                  "orario" : "11.00-12.00",
                  "is-dispo" : "true",
                  "ndispo": 3
               },
               {
                  "orario" : "12.00-13.00",
                  "is-dispo" : "true",
                  "ndispo": 3
               },
               {
                  "orario" : "12.00-13.00",
                  "is-dispo" : "true",
                  "ndispo": 3
               },
               {
                  "orario" : "13.00-14.00",
                  "is-dispo" : "false",
                  "ndispo": 0
               },
               {
                  "orario" : "14.00-15.00",
                  "is-dispo" : "true",
                  "ndispo": 3
               },
               {
                  "orario" : "15.00-16.00",
                  "is-dispo" : "false",
                  "ndispo": 0
               },
               {
                  "orario" : "16.00-17.00",
                  "is-dispo" : "true",
                  "ndispo": 10
               },
               {
                  "orario" : "17.00-18.00",
                  "is-dispo" : "true",
                  "ndispo": 10
               },
               {
                  "orario" : "17.00-18.00",
                  "is-dispo" : "true",
                  "ndispo": 10
               },
               {
                  "orario" : "18.00-19.00",
                  "is-dispo" : "true",
                  "ndispo": 10
               },
               {
                  "orario" : "19.00-20.00",
                  "is-dispo" : "true",
                  "ndispo": 10
               },
               {
                  "orario" : "20.00-21.00",
                  "is-dispo" : "true",
                  "ndispo": 10
               },
               {
                  "orario" : "21.00-22.00",
                  "is-dispo" : "true",
                  "ndispo": 10
               }
            
         ],
         "arg" :[
            "argomento uno",
            "argomento due",
            "argomento tre"
         ]
      }
      <?php
      }
   ?>
   <?php //se non ho prenotazioni in corso e ho scelto l'orario torna i dati per la conferma della scelta ?>
   <?php if  ($nCellulareCert!=="" && $nCellulareCert!="false" && $alreadyBooked === 'false' && $orarioSel !== "" && $annullaFlag=== 'false') { ?>
      {
         "esito":"ok",
         "stato" : "prenotato",
         "orarioSel":"<?php print $orarioSel ?>",
         "isAlreadyBooked": "true"
      }

      <?php
      }
   ?>
   
   <?php //se ho prenotazioni in corso torna i dati relativi alla prenotazione attuale ?>
   <?php if  ($nCellulareCert!=="" && $nCellulareCert!="false" && $alreadyBooked === "true" && $annullaFlag === 'false') { ?>
      {
         "esito":"ok",
         "stato" : "occupato",
         "orarioSel":"<?php print $orarioSel ?>",
         "isAlreadyBooked": "true"
      }
      <?php
      }
   ?>
   <?php //se chiedo di annullare ?>
   <?php if  ($annullaFlag === "true") { ?>
      {
         "esito":"ok",
         "stato" : "annullato",
         "orarioSel":"<?php print $orarioSel ?>",
         "isAlreadyBooked": "false"
      }
      <?php
      }
   ?>

<?php //se c'è un disservizio tecnico ?>
   <?php if  ($nCellulareCert!=="" && $nCellulareCert!="false" && $disservizioFlag === 'true' && $alreadyBooked === 'false' ) { ?>
      {
         "esito":"ok",
         "stato" : "disservizio"
       }
      <?php
      }
   ?>
<?php //fuori orario ?>
   <?php if  ($nCellulareCert!=="" && $nCellulareCert!="false" && $fuoriOrario === 'true') { ?>
      {
         "esito":"ok",
         "stato" : "fuoriOrario"
       }
      <?php
      }
   ?>

<?php //se numero non certificato ?>
   <?php if  ($nCellulareCert==="false") { ?>
      {
         "esito":"ok",
         "stato" : "nonCertificato"
       }
      <?php
      }
   ?>
<?php //se numero non certificato ?>
   <?php if  ($nCellulareCert==="") { ?>
      {
         "esito":"ok",
         "stato" : "numeroNd"
       }
      <?php
      }
   ?>


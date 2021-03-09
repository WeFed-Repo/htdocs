<?php
   header("content-type: application/json; charset=utf-8");
   $orarioSel = $_POST['orarioSel'];
   $alreadyBooked = $_POST['isAlreadyBooked'];
   $annullaFlag = $_POST['annullaFlag'];
   $disservizioFlag = $_POST['disservizioFlag'];
   $fuoriOrario = $_POST['fuoriOrario'];
   $nCellulareCert = $_POST['nCellulareCert'];
   $orarioNonDispo = $_POST['orarioNonDispo'];
   $noFasce =  $_POST['noFasce'];
?>
<?php //se non ho prenotazioni in corso e non ho ancora scelto l'orario torna i dati per costruire il form di scelta ?>
   <?php if  ( $noFasce!== 'true' && $nCellulareCert !=="" && $nCellulareCert!="false" && $alreadyBooked === 'false' &&  $orarioSel === "" && $annullaFlag=== 'false' && $disservizioFlag === "false" && $fuoriOrario !=="true") { ?>
      {
         "esito":"ok",
         "stato" : "disponibile",
         "isAlreadyBooked": "false",
         "fasce_orario_dispo": [
               {
                  "orario" : "ora",
                  "isDispo" : "true",
                  "ndispo": 10
               },
               {
                  "orario" : "11.00-12.00",
                  "isDispo" : "true",
                  "ndispo": 3
               },
               {
                  "orario" : "12.00-13.00",
                  "isDispo" : "true",
                  "ndispo": 3
               },
               {
                  "orario" : "12.00-13.00",
                  "isDispo" : "true",
                  "ndispo": 3
               },
               {
                  "orario" : "13.00-14.00",
                  "isDispo" : "false",
                  "ndispo": 0
               },
               {
                  "orario" : "14.00-15.00",
                  "isDispo" : "true",
                  "ndispo": 3
               },
               {
                  "orario" : "15.00-16.00",
                  "isDispo" : "false",
                  "ndispo": 0
               },
               {
                  "orario" : "16.00-17.00",
                  "isDispo" : "true",
                  "ndispo": 10
               },
               {
                  "orario" : "17.00-18.00",
                  "isDispo" : "true",
                  "ndispo": 10
               },
               {
                  "orario" : "17.00-18.00",
                  "isDispo" : "true",
                  "ndispo": 10
               },
               {
                  "orario" : "18.00-19.00",
                  "isDispo" : "true",
                  "ndispo": 10
               },
               {
                  "orario" : "19.00-20.00",
                  "isDispo" : "true",
                  "ndispo": 10
               },
               {
                  "orario" : "20.00-21.00",
                  "isDispo" : "true",
                  "ndispo": 10
               },
               {
                  "orario" : "21.00-22.00",
                  "isDispo" : "true",
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
   <?php //se non ho prenotazioni in corso e ho scelto l'orario e lo slot è ancora disponibile conferma la scelta?>
   <?php if  ($noFasce!== 'true' && $orarioNonDispo !== 'true'&& $nCellulareCert!=="" && $nCellulareCert!="false" && $alreadyBooked === 'false' && $orarioSel !== "" && $annullaFlag=== 'false') { ?>
      {
         "esito":"ok",
         "stato" : "prenotato",
         "orarioSel":"<?php print $orarioSel ?>",
         "isAlreadyBooked": "true"
      }

      <?php
      }
   ?>
   
   <?php //se non ho prenotazioni in corso e ho scelto l'orario e lo slot NON è più disponibile scelta altro orario?>
   <?php if  ($noFasce!== 'true' && $orarioNonDispo === 'true' && $nCellulareCert!=="" && $nCellulareCert!="false" && $alreadyBooked === 'false' && $orarioSel !== "" && $annullaFlag=== 'false') { ?>
      {
         "esito":"ok",
         "stato" : "orarioNd",
         "orarioSel":"<?php print $orarioSel ?>",
         "isAlreadyBooked": "false"
      }

      <?php
      }
   ?>
   
   <?php //se ho prenotazioni in corso torna i dati relativi alla prenotazione attuale ?>
   <?php if  ($noFasce!== 'true' && $orarioNonDispo !== 'true'&& $nCellulareCert!=="" && $nCellulareCert!="false" && $alreadyBooked === "true" && $annullaFlag === 'false') { ?>
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

<?php //se non ho prenotazioni in corso e non ci sono fasce disponbili?>
   <?php if  ($noFasce==="true") { ?>
      {
         "esito":"ok",
         "stato" : "noFasce",
         "isAlreadyBooked": "false"
      }

      <?php
      }
   ?>


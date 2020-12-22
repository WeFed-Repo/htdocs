<?php
   header("content-type: application/json; charset=utf-8");
  
?>
{
     "esito":"ok",
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
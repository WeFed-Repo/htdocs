<?php header('content-type: application/json; charset=utf-8'); ?>
<?php
$method = (isset($_POST['method']))? $_POST['method'] : '';
$accounts = (isset($_POST['accounts']))? $_POST['accounts'] : '';
$conti = ($accounts != null)? explode(',', $accounts) : null;
$conto = ($conti != null)? $conti[0] : '';

If ($method == 'group') :
	If (in_array($conto, array('00599 0000074975 EUR', '00599 0000074976 EUR'))) :
?>
{
   "lineeVincolate": {
      "3":"2000.0",
      "6":"4000.0",
      "12":"1000.0",
      "18":"3000.0"
   }
}
<?php
	 EndIf;
ElseIf ($conto == '00599 0000074971 EUR') :
?>
{
   "posizioneFinanziaria":{
      "depositi":[
         {
            "valore":"<?php echo 'conto: ' . $conto ?>"
         },
         {
            "valore":"<?php echo 'accounts: ' . $accounts ?>"
         }
      ],
      "totale":"0.00",
      "liquidita":{
         "totale":"0.00",
         "contoCorrente":{
            "saldoDisponibile":"0.00",
            "saldoContabile":"0.00",
            "impegniBanking":"0.00",
            "impegniTrading":"0.00",
            "preavvisiTrading":"0.00",
            "impegniFondi":"0.00",
            "preavvisiFondi":"0.00"
         }
      }
   }
}
<?php
ElseIf ($conto == '00599 0000074972 EUR') :
?>
{
   "posizioneFinanziaria":{
      "depositi":[
         {
            "valore":""
         },
         {
            "valore":""
         }
      ],
      "totale":"35740.400",
      "liquidita":{
         "totale":"23340.400",
         "contoCorrente":{
            "saldoDisponibile":"23340.40",
            "saldoContabile":"1000.00",
            "impegniBanking":"22340.00",
            "impegniTrading":"0.00",
            "preavvisiTrading":"0.00",
            "impegniFondi":"0.00",
            "preavvisiFondi":"0.00"
         }
      },
      "portafoglio":{
         "totale":"12400",
         "depositoAmministrato":{
            "totale":"4630.0",
            "azioniItalia":"1000.0",
            "azioniEstero":"2200.0",
            "obbligazioni":"1030.0",
            "cw":"100.0",
            "etf":"100.0",
            "derivati":"100.0",
            "marginate":"100.0"
         },
         "depositoGestito":"2500",
         "PCT":"5270"
      }
   }
}
<?php
ElseIf ($conto == '00599 0000074973 EUR') :
?>
{
   "posizioneFinanziaria":{
      "depositi":[
         {
            "valore":""
         },
         {
            "valore":""
         }
      ],
      "totale":"-10340.400",
      "liquidita":{
         "totale":"-22340.400",
         "contoCorrente":{
            "saldoDisponibile":"-23340.40",
            "saldoContabile":"1000.00",
            "impegniBanking":"0.00",
            "impegniTrading":"1000.00",
            "preavvisiTrading":"0.00",
            "impegniFondi":"0.00",
            "preavvisiFondi":"-1000.00"
         },
         "contoDerivati":{
            "saldoDisponibile":"1230",
            "liqImpegnataIntraday":"1030",
            "marginiDerivati":"200"
         }
      },
      "portafoglio":{
         "totale":"12000",
         "depositoAmministrato":{
            "totale":"4230.0",
            "azioniItalia":"1000.0",
            "azioniEstero":"2200.0",
            "obbligazioni":"1030.0",
            "cw":"0.0",
            "etf":"0.0",
            "derivati":"0.0",
            "marginate":"0.0"
         },
         "depositoGestito":"2500",
         "PCT":"5270"
      }
   }
}
<?php
ElseIf ($conto == '00599 0000074974 EUR') :
?>
{
   "posizioneFinanziaria":{
      "depositi":[
         {
            "valore":""
         },
         {
            "valore":""
         }
      ],
      "totale":"0.0",
      "liquidita":{
         "totale":"0.0",
         "contoCorrente":{
            "saldoDisponibile":"0.00",
            "saldoContabile":"0.00",
            "impegniBanking":"0.00",
            "impegniTrading":"0.00",
            "preavvisiTrading":"0.00",
            "impegniFondi":"0.00",
            "preavvisiFondi":"0.00"
         },
         "lineeVincolate":"0",
         "contoDeposito":"0.000"
      }
   }
}
<?php
ElseIf ($conto == '00599 0000074975 EUR') :
?>
{
   "posizioneFinanziaria":{
      "depositi":[
         {
            "valore":""
         },
         {
            "valore":""
         }
      ],
      "totale":"45065.40",
      "liquidita":{
         "totale":"35440.40",
         "contoCorrente":{
            "saldoDisponibile":"23340.40",
            "saldoContabile":"1000.00",
            "impegniBanking":"18340.00",
            "impegniTrading":"1000.00",
            "preavvisiTrading":"1000.00",
            "impegniFondi":"1000.00",
            "preavvisiFondi":"1000.00"
         },
         "lineeVincolate":"10000.00",
         "contoDeposito":"2100.00"
      },
      "portafoglio":{
         "totale":"9625.00",
         "depositoAmministrato":{
            "totale":"4230.0",
            "azioniItalia":"1000.00",
            "azioniEstero":"2200.00",
            "obbligazioni":"1030.00",
            "cw":"100.00",
            "etf":"0.00",
            "derivati":"0.00",
            "marginate":"0.00"
         },
         "depositoGestito":"25.00",
         "PCT":"5270.00"
      }
   }
}
<?php
ElseIf ($conto == '00599 0000074978 EUR') :
?>
<?php
Else :
?>
{
   "posizioneFinanziaria":{
      "depositi":[
         {
            "valore":""
         },
         {
            "valore":""
         }
      ],
      "totale":"49999.40",
      "liquidita":{
         "totale":"37999.40",
         "contoCorrente":{
            "saldoDisponibile":"-23340.400",
            "saldoContabile":"-1000.00",
            "impegniBanking":"-22340.00",
            "impegniTrading":"-1000.00",
            "preavvisiTrading":"1000.00",
            "impegniFondi":"-1000.00",
            "preavvisiFondi":"1000.00"
         },
         "contoDerivati":{
            "saldoDisponibile":"1000",
            "liqImpegnataIntraday":"100.00",
            "marginiDerivati":"50.00"
         },
         "lineeVincolate":"10000.00",
         "contoDeposito":"2171.00"
      },
      "portafoglio":{
         "totale":"12000",
         "depositoAmministrato":{
            "totale":"4230.00",
            "azioniItalia":"605.00",
            "azioniEstero":"600.00",
            "obbligazioni":"605.00",
            "cw":"605.00",
            "etf":"605.00",
            "derivati":"605.0",
            "marginate":"605.0"
         },
         "depositoGestito":"0.00"
      }
   }
}
<?php
EndIf

/*** JSON COMPLETO ***
{
   "posizioneFinanziaria":{
      "depositi":[
         {
            "valore":""
         },
         {
            "valore":""
         }
      ],
      "totale":"39999.400",
      "liquidita":{
         "totale":"27999.400",
         "contoCorrente":{
            "saldoDisponibile":"23340.400",
            "saldoContabile":"0.00",
            "impegniBanking":"19340.00",
            "impegniTrading":"1000.00",
            "preavvisiTrading":"1000.00",
            "impegniFondi":"1000.00",
            "preavvisiFondi":"1000.00"
         },
         "contoDerivati":{
            "saldoDisponibile":"1000",
            "liqImpegnataIntraday":"600",
            "marginiDerivati":"400"
         },
         "lineeVincolate":"1488",
         "contoDeposito":"2171.000"
      },
      "portafoglio":{
         "totale":"12000",
         "depositoAmministrato":{
            "totale":"4230.0",
            "azioniItalia":"1000.0",
            "azioniEstero":"2200.0",
            "obbligazioni":"1030.0",
            "cw":"0.0",
            "etf":"0.0",
            "derivati":"0.0",
            "marginate":"0.0"
         },
         "depositoGestito":"2500",
         "PCT":"5270"
      }
   }
}
*** |FINE| JSON COMPLETO ***/

/*** JSON SVILUPPO ***
{
    "posizioneFinanziaria":
    {
        "depositi": [
        {
            "valore": ""
        },
        {
            "valore": ""
        }],
        "totale": "19116.05",
        "liquidita":
        {
            "totale": "18113.72",
            "contoCorrente":
            {
                "saldoDisponibile": "18113.720",
                "liqImpegnata": "0.0",
                "liqImpegnataShort": "0.0",
                "liqImpegnataIntraday": "0.0",
                "profitLoss": "0.0",
                "saldoContabile": 18113.720,
                "impegniBanking": "0",
                "impegniTrading": "0",
                "preavvisiTrading": "0",
                "impegniFondi": "0",
                "preavvisiFondi": "0"
            }

            ,
            "lineeVincolate": "0",
            "depositoVincolatoGuadagno": "0.00",
            "contoDeposito": "0.000",
            "contoDepositoContabile": "0.000",
            "contoDepositoGuadagno": "0.00"


                ,
            "contoDerivati":
            {
                "saldoDisponibile": "0.00",
                "liqImpegnataIntraday": "0",
                "marginiDerivati": "0.00"
            }

        }

        ,
        "portafoglio":
        {
            "totale": "1002.33",
            "totaleCarico": "1031.12",
            "totaleProfitLoss": "-28.79",
            "totaleProfitLossPerc": "-2.79",
            "totaleMargMercato": "1002.33",
            "totaleMargCarico": "1031.12",
            "totaleMargMercatoLiqDer": "1002.33",
            "totaleMargPL": "-28.79",
            "totaleMargPLPerc": "-2.79",
            "depositoAmministrato":
            {
                "totale": "1002.333",
                "totaleCarico": "1031.121",
                "totaleProfitLoss": "-28.788",
                "totaleProfitLossPerc": "-2.792",
                "azioniItalia": "25.5",
                "azioniEstero": "976.833",
                "azioniTotale": "1002.33",
                "obbligazioni": "0.0",
                "cw": "0.0",
                "etf": "0.0",
                "derivati": "0.0",
                "marginate": "0.0",
                "azioniItaliaCarico": "33.485",
                "azioniEsteroCarico": "997.636",
                "azioniTotaleCarico": "1031.12",
                "obbligazioniCarico": "0.0",
                "cwCarico": "0.0",
                "etfCarico": "0.0",
                "derivatiCarico": "0.0",
                "marginateCarico": "0.0",
                "azioniItaliaProfitLoss": "-7.985",
                "azioniEsteroProfitLoss": "-20.803",
                "azioniTotaleProfitLoss": "-28.79",
                "obbligazioniProfitLoss": "0.0",
                "cwProfitLoss": "0.0",
                "etfProfitLoss": "0.0",
                "derivatiProfitLoss": "0.0",
                "marginateProfitLoss": "0.0",
                "azioniItaliaProfitLossPerc": "-23.85",
                "azioniEsteroProfitLossPerc": "-2.09",
                "azioniTotaleProfitLossPerc": "-2.79",
                "obbligazioniProfitLossPerc": "0.0",
                "cwProfitLossPerc": "0.0",
                "etfProfitLossPerc": "0.0",
                "derivatiProfitLossPerc": "0.0",
                "marginateProfitLossPerc": "0.0",
                "posizioneMarginate": "0.0",
                "margineInvestitoDerivati": "0.0",
                "margineMercatoDerivati": "0.0"
            },
            "depositoGestito": "0",
            "depositoGestitoCarico": "0",
            "depositoGestitoProfitLoss": "0",
            "depositoGestitoProfitLossPerc": "0",
            "PCT": "0",
            "PCTCarico": "0",
            "PCTProfitLoss": "0.00",
            "PCTProfitLossPerc": "0"
        }

    }
}
*** |FINE| JSON SVILUPPO ***/
?>
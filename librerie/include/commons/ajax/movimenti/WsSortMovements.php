<?php header('content-type: application/json; charset=utf-8'); ?>
<?php
/*
$accounts = (isset($_POST['accounts']))? $_POST['accounts'] : '';
$conti = ($accounts != null)? split(',', $accounts) : null;
$conto = ($conti != null)? $conti[0] : '';

If (in_array($conto, array('00599 0000074975 EUR', '00599 0000074976 EUR'))) :
*/
?>{
    "errore": "",
    "movTab": {
        "lista": [
            {
                "id": "1111111122",
                "dataC": "22/03/2011",
                "VTa": "24/03/2011",
                "descB": "asda asd asd asd asd",
                "hasDescE": true,
                "val": -244200
            },
            {
                "id": "1111111122",
                "dataC": "23/03/2011",
                "VTa": "25/03/2011",
                "descB": "asda asd asd asd asd",
                "hasDescE": true,
                "val": 244200
            },
            {
                "id": "1111111122",
                "dataC": "24/03/2011",
                "VTa": "26/03/2011",
                "descB": "asda asd asd asd asd",
                "hasDescE": false,
                "val": -23200
            },
            {
                "id": "1111111122",
                "dataC": "25/03/2011",
                "VTa": "27/03/2011",
                "descB": "asda asd asd asd asd",
                "hasDescE": true,
                "val": -6400
            },
            {
                "id": "1111111122",
                "dataC": "26/03/2011",
                "VTa": "28/03/2011",
                "descB": "asda asd asd asd asd",
                "hasDescE": true,
                "val": 3300
            },
            {
                "id": "1111111122",
                "dataC": "27/03/2011",
                "VTa": "29/03/2011",
                "descB": "asda asd asd asd asd",
                "hasDescE": false,
                "val": -200
            },
            {
                "id": "1111111122",
                "dataC": "28/03/2011",
                "VTa": "30/03/2011",
                "descB": "asda asd asd asd asd",
                "hasDescE": true,
                "val": 4200
            },
            {
                "id": "1111111122",
                "dataC": "29/03/2011",
                "VTa": "31/03/2011",
                "descB": "asda asd asd asd asd",
                "hasDescE": true,
                "val": 6300
            },
            {
                "id": "1111111122",
                "dataC": "30/03/2011",
                "VTa": "01/04/2011",
                "descB": "asda asd asd asd asd",
                "hasDescE": false,
                "val": 7200
            },
            {
                "id": "1111111122",
                "dataC": "31/03/2011",
                "VTa": "02/04/2011",
                "descB": "asda asd asd asd asd",
                "hasDescE": true,
                "val": 9900
            }
        ],
        "completo": false,
        "saldoC": 22000,
        "saldoD": 2222,
        "intest": "Mario Rossi"
    }
}

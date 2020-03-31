<?php
	$visualizza = $_GET["visualizza"];
?>

{

"id": "wetools",
"name": "Wetools",
"data": {"mode":1, "hidden":1, "primo":1},
"children": [
	{
    "id": "0",
    "name": "Assegnazioni stock purchase",
	"data": {"mode":1, "hidden":1, "secondo":1},
	"children": [
		
		{"id": "sottovoce1",
		 "name": "sottovoce1",
		 "data": {"mode":1, "hidden":1},
					"children": [
					{
					"id": "0sub",
					"name": "Gestione file trattenute",
					"data": {"mode":1, "hidden":0, "terzo":1},
					"children": [	
						{
						"id": "sottosottovoce1",
						"name": "sottosottovoce1",
						"data": {"mode":1, "hidden":1},
							"children": [
								{
									"id": "ultima",
									"name": "ultima",
									"data": {"mode":1, "hidden":1}
								},
								{	
									"id": "ultima2",
									"name": "ultima2",
									"data": {"mode":1, "hidden":1}
								}
							]
					
						}
					]
					},
					
				
					{
						"id": "1sub",
						"name": "Assegnazione",
						"data": {"mode":0, "terzo":1,"hidden":0},
								"children": [	
								{
								"id": "sottosottovoce2",
								"name": "sottosottovoce2",
								"data": {"mode":1, "hidden":1}
									
							
								}
							]
					},	
					
					{
						"id": "2sub",
						"name": "Sottostrumento",
						"data": {"mode":0,"terzo":1},
						"children": 
							[	
								{
								"id": "sottosottovoce3",
								"name": "sottosottovoce3",
								"data": {"mode":1, "hidden":1},
									"children": [
										{
											"id": "ultima5",
											"name": "ultima5",
											"data": {"mode":1, "hidden":1}
										},
										{	
											"id": "ultima6",
											"name": "ultima6",
											"data": {"mode":1, "hidden":1}
										}
									]
							
								}
							]
					
					},
					{
						"id": "Strumento_CUM",
						"name": "Strumento CUM",
						"data": {"mode":0}
					
					},
					{
						"id": "Modifica_dimissionari",
						"name": "Modifica dimissionari",
						"data": {"mode":0}
					
					},
					{
						"id": "Gestione_dati_dipendente",
						"name": "Gestione dati dipendente",
						"data": {"mode":0}
					
					},
					{
						"id": "Residui_Mensili",
						"name": "Residui Mensili",
						"data": {"mode":0}
					
					},
					{
						"id": "Estrazioni_IBM",
						"name": "Estrazioni IBM",
						"data": {"mode":1}
					
					}
					]
					
					}
					]
			},
			
			{
            "id": "1",
            "name": "Calcolo Provvigioni",
			"data": {"mode":1, "hidden":1, "secondo":1},
			"children":[
					{"id": "sottovoce2",
					"name": "sottovoce2",
					"data": {"mode":1, "hidden":1},
						"children": 
						[
						{
						"id": "calcolo_provvigione",
						"name": "Calcolo Provvigione",
						"data": {"mode":1, "hidden":1, "terzo":1}
						
						},
						{
						"id": "gestione_fasce",
						"name": "Gestione Fasce",
						"data": {"mode":1, "hidden":1, "terzo":1}
						
						},
						{
						"id": "gestione_rettifiche",
						"name": "Gestione Rettifiche",
						"data": {"mode":1, "hidden":1, "terzo":1}
						
						},
						{
						"id": "Provvisioni_fisse_inserimento",
						"name": "Provvisioni fisse inserimento",
						"data": {"mode":1, "hidden":1, "terzo":1}
						
						},
						{
						"id": "Ulteriori_compensi",
						"name": "Ulteriori compensi",
						"data": {"mode":1, "hidden":1, "terzo":1}
						
						},
						{
						"id": "Tabella_condizioni_cambio",
						"name": "Tabella condizioni di cambio",
						"data": {"mode":1, "hidden":1, "terzo":1}
						
						},
						{
						"id": "Numero_conti_report",
						"name": "Numero conti report",
						"data": {"mode":1, "hidden":1, "terzo":1}
						
						},
						{
						"id": "Rettifica_profili_report",
						"name": "Rettifica profili report",
						"data": {"mode":1, "hidden":1, "terzo":1}
						
						},
						{
						"id": "Calcolo_netto_report",
						"name": "Calcolo netto report",
						"data": {"mode":1, "hidden":1, "terzo":1}
						
						},
						{
						"id": "Totale_contributi_FIRR_ISC_IM_report",
						"name": "Totale contributi FIRR ISC IM report",
						"data": {"mode":1, "hidden":1, "terzo":1}
						
						}
						]
					
					}
					]
			},
			{
            "id": "2",
            "name": "Derivati",
			"data": {"mode":1, "hidden":1, "secondo":1},
			"children":
					[
					{"id": "sottovoce3",
					"name": "sottovoce3",
					"data": {"mode":1, "hidden":1},
						"children": 
						[
						{
						"id": "d",
						"name": "d",
						"data": {"mode":1, "hidden":1, "terzo":1}
						
						}
						]
					
					}
					]
			}
			
			]
    }
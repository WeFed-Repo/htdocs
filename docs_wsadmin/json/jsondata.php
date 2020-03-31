<?php
	$visualizza = $_GET["visualizza"];
?>
{
"id": "wetools",
"name": "Wetools",
"activegroup": true,
"groups": "WEARC|WEFED NEWTIM IODI IA|WESYSEXT",
"users": "bp770011|bp770022|bp770023",
"children": [
	{
	"id": "node1",
	"name": " nodo 1",
	"activegroup": false,
	"children": [
		<?php if ($visualizza != "ridotta") {?>
		{
		"id": "node11",
		"name": "nodo 1.1",
		"activegroup": false
		},
		<?php } ?>
		{
			"id": "node12",
			"name": "nodo 1.2",
			"activegroup": true,
			"children": [
				{
					"id": "node1 21",
					"name": "nodo 1.2.1",
					"users": "bp770011|bp770022|bp770023",
					"activegroup": true
				},
				{
					"id": "node122",
					"name": "nodo 1.2.2",
					"users": "bp770011|bp770022|bp770023",
					"activegroup": true
				}
			]
		}]
	},
	{
	"id": "node2",
	"name": "nodo 2",
	"activegroup": true
	}
	,
	<?php if ($visualizza != "ridotta") {?>
	{
	"id": "node3",
	"name": " nodo 3",
	"activegroup": true
	}
	,
	<?php
	}
	?>
	{
	"id": "node4",
	"name": "nodo 4",
	"activegroup": true,
	"children": [
				{
					"id": "node1 21",
					"name": "nodo 4.1",
					"activegroup": true,
					"children": [
						{
							"id": "node1 21",
							"name": "nodo 4.1.1",
							"activegroup": true
						}
					]
				}
			]
	}
]
}

<h4>Tabella con ordinamento e paginazione</h4>
 <table id="tableOrdered" cellspacing="0" cellpadding="0" border="0" class="sortableTable">
     <thead>
        <tr>
            <th data-field="descrizione" data-sortable="true" class="hidden-xs">Descrizione</th>
            <th data-field="operativita" data-sortable="true" class="hidden-xs">Operativit&agrave;</th>
            <th data-field="leva" data-sortable="true">Leva<span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span></th>
            <th data-field="coefficiente" data-sortable="true" class="right">Coefficiente</th>
            <th data-field="interesse" data-sortable="true">Interesse</th>
            <th data-field="ico1" data-sortable="false" class="hidden-xs center"></th>
            <th data-field="ico2" data-sortable="false" class="hidden-xs center"></th>
        </tr>
     </thead>
</table>
<script>
    var $tableOrdered = $('#tableOrdered');
    $(function () {
        var data = [
	{
		"descrizione": "LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT",
		"operativita": "Long",
		"leva": 15,
		"coefficiente": 93,
		"interesse": 0.945,
		"ico1": "<a href=\"#1\" class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-pdf_circle_filled\"></i ></a>",
		"ico2": "<a href=\"#1\"class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-pdf_circle_filled\"></i ></a>"
	
	},
	{
		"descrizione": " A LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT",
		"operativita": "Long",
		"leva": 23,
		"coefficiente": 99,
		"interesse": 0.805,
		"ico1": "<a href=\"#1\" class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-pdf_circle_filled\"></i ></a>",
		"ico2": "<a href=\"#1\"class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-pdf_circle_filled\"></i ></a>"
	},
	{
		"descrizione": " B LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT",
		"operativita": "Long",
		"leva": 19,
		"coefficiente": 99,
		"interesse": 0.200,
		"ico1": "<a href=\"#1\" class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-pdf_circle_filled\"></i ></a>",
		"ico2": "<a href=\"#1\"class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-pdf_circle_filled\"></i ></a>"
	},
	{
		"descrizione": " V LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT",
		"operativita": "Short",
		"leva": 99,
		"coefficiente": 99,
		"interesse": 0.400,
		"ico1": "<a href=\"#1\" class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-pdf_circle_filled\"></i ></a>",
		"ico2": "<a href=\"#1\"class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-pdf_circle_filled\"></i ></a>"
	},
	{
		"descrizione": " N LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT",
		"operativita": "Long",
		"leva": 77,
		"coefficiente": 99,
		"interesse": 0.890,
		"ico1": "<a href=\"#1\" class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-pdf_circle_filled\"></i ></a>",
		"ico2": "<a href=\"#1\"class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-pdf_circle_filled\"></i ></a>"
	},
	{
		"descrizione": " Z LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT",
		"operativita": "Short",
		"leva": 34,
		"coefficiente": 99,
		"interesse": 0.900,
		"ico1": "<a href=\"#1\" class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-pdf_circle_filled\"></i ></a>",
		"ico2": "<a href=\"#1\"class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-pdf_circle_filled\"></i ></a>"
	},
	{
		"descrizione": " Z LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT",
		"operativita": "Short",
		"leva": 34,
		"coefficiente": 99,
		"interesse": 0.900,
		"ico1": "<a href=\"#1\" class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-pdf_circle_filled\"></i ></a>",
		"ico2": "<a href=\"#1\"class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-pdf_circle_filled\"></i ></a>"
	},
	{
		"descrizione": " Z LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT",
		"operativita": "Short",
		"leva": 34,
		"coefficiente": 99,
		"interesse": 0.900,
		"ico1": "<a href=\"#1\" class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-pdf_circle_filled\"></i ></a>",
		"ico2": "<a href=\"#1\"class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-pdf_circle_filled\"></i ></a>"
	},
	{
		"descrizione": " Z LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT",
		"operativita": "Short",
		"leva": 34,
		"coefficiente": 99,
		"interesse": 0.900,
		"ico1": "<a href=\"#1\" class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-pdf_circle_filled\"></i ></a>",
		"ico2": "<a href=\"#1\"class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-pdf_circle_filled\"></i ></a>"
	},
	{
		"descrizione": " Z LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT",
		"operativita": "Short",
		"leva": 34,
		"coefficiente": 99,
		"interesse": 0.900,
		"ico1": "<a href=\"#1\" class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-pdf_circle_filled\"></i ></a>",
		"ico2": "<a href=\"#1\"class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-pdf_circle_filled\"></i ></a>"
	},
	{
		"descrizione": " Z LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT",
		"operativita": "Short",
		"leva": 34,
		"coefficiente": 99,
		"interesse": 0.900,
		"ico1": "<a href=\"#1\" class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-pdf_circle_filled\"></i ></a>",
		"ico2": "<a href=\"#1\"class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-pdf_circle_filled\"></i ></a>"
	},
	{
		"descrizione": " Z LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT",
		"operativita": "Short",
		"leva": 34,
		"coefficiente": 99,
		"interesse": 0.900,
		"ico1": "<a href=\"#1\" class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-pdf_circle_filled\"></i ></a>",
		"ico2": "<a href=\"#1\"class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-pdf_circle_filled\"></i ></a>"
	},
	{
		"descrizione": " Z LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT",
		"operativita": "Short",
		"leva": 34,
		"coefficiente": 99,
		"interesse": 0.900,
		"ico1": "<a href=\"#1\" class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-pdf_circle_filled\"></i ></a>",
		"ico2": "<a href=\"#1\"class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-pdf_circle_filled\"></i ></a>"
	},
	{
		"descrizione": " Z LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT",
		"operativita": "Short",
		"leva": 34,
		"coefficiente": 99,
		"interesse": 0.900,
		"ico1": "<a href=\"#1\" class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-pdf_circle_filled\"></i ></a>",
		"ico2": "<a href=\"#1\"class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-pdf_circle_filled\"></i ></a>"
	},
	{
		"descrizione": " Z LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT",
		"operativita": "Short",
		"leva": 34,
		"coefficiente": 99,
		"interesse": 0.900,
		"ico1": "<a href=\"#1\" class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-pdf_circle_filled\"></i ></a>",
		"ico2": "<a href=\"#1\"class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-pdf_circle_filled\"></i ></a>"
	},
	{
		"descrizione": " Z LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT",
		"operativita": "Short",
		"leva": 34,
		"coefficiente": 99,
		"interesse": 0.900,
		"ico1": "<a href=\"#1\" class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-pdf_circle_filled\"></i ></a>",
		"ico2": "<a href=\"#1\"class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-pdf_circle_filled\"></i ></a>"
	}
	
	];
	// Moltiplico i dati per averne di pi�
	var dataTmp = $.extend(true, {}, data);
	for (var i = 0; i < 5; ++i) { $.merge(data, $.extend(true, {}, dataTmp)); }
    arrayKey = ['ico1','ico2','descrizione']; 
    $tableOrdered.bootstrapTable({
            data: data,
            sortable: true,
            sortName: "descrizione",
            sortOrder: "desc",
            pagination : "true",
            pageSize: 15,
            pageList: [15, 30, 60, 'tutti'],
			 rowStyle: function(row, index) {
				if(index % 2 == 0)
				{
					return {
						classes: 'dispari'
					}
				}
				else {
					return {
						classes: 'pari'
					}
				}
			   },
            detailView:  isSmallDevice, //se sono su  mobile innesco il meccanismo per costruire riga accordion
			detailFormatter:"detailFormatterAccordion" //costruisce la riga di dettaglio su mobile
		});
	//definisco le colonne da nascondere su mobile
  	//per ciascuna colonna appendo la classe che la nasconde su mobile
	fixCols();
   });
function detailFormatterAccordion(index, row) {
        
        var html = [];
        $.each(row, function (key, value) {
           
            if(key=='descrizione' || key=='ico1' || key=='ico2' || key=='operativita')
            {
            	html.push('<p class="noMarginBottom"><strong>' + key + ':</strong>' + '</p>' + '<p>' + value + '</p>');
        	}
        });
        return html.join('');
    }
$(window).resize(function() {
  $tableOrdered.bootstrapTable('refreshOptions', {
         detailView:  isSmallDevice,
         detailFormatter:"detailFormatterAccordion"
    });
 });



</script>
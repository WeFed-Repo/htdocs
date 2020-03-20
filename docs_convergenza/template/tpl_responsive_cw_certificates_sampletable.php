<?php /*
<!-- Esempio tabella risultati ricerca CW -->


<h4>Tabella con ordinamento e paginazione</h4>
 <table id="tableOrdered" cellspacing="0" cellpadding="0" border="0" class="sortableTable">
     <thead>
        <tr>
      	    <th class="center">&nbsp;</th>
            <th class="left" data-field="Descrizione" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Descrizione</th>
            <th class="left" data-field="Emittente" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Emittente</th>
            <th class="right" data-field="Categoria_sottostante" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Categoria sottostante (oppure sottostante)</th>
			<th class="right" data-field="Categoria_borsa" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Categoria borsa italiana</th>			           
            <th class="right" data-field="Scadenza" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Scad.</th>
            <th class="right" data-field="Strike_price" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Strike price</th>


            <th data-field="descrizione" data-sortable="true">Descrizione</th>
            <th data-field="operativita" data-sortable="true">Operatività</th>
            <th data-field="leva" data-sortable="true">Leva<span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span></th>
            <th data-field="coefficiente" data-sortable="true" class="right">Coefficiente</th>
            <th data-field="interesse" data-sortable="true">Interesse</th>
            <th data-field="ico1" data-sortable="false" class="center"></th>
            <th data-field="ico2" data-sortable="false" class="center"></th>


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
				   }
	            //detailView:  isSmallDevice, //se sono su  mobile innesco il meccanismo per costruire riga accordion
				//detailFormatter:"detailFormatterAccordion" //costruisce la riga di dettaglio su mobile
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




<!-- Fine esempio tabella risultati ricerca CW -->




*/ ?>
<table cellspacing="0" cellpadding="0" border="0" data-sortable="true" data-sort-order="desc" data-sort-name="Descrizione" data-toggle="table" class="sortableTable" data-pagination="true" data-page-size="10">
				    <thead>
				        <tr>
				        	 <th class="right">&nbsp;</th>
				            <th class="left" data-field="Descrizione" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Descrizione</th>
				            <th class="left" data-field="Emittente" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Emittente</th>
				            <th class="right" data-field="Categoria_sottostante" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Categoria sottostante (oppure sottostante)</th>
							<th class="right" data-field="Categoria_borsa" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Categoria borsa italiana</th>			           
				            <th class="right" data-field="Scadenza" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Scad.</th>
				            <th class="right" data-field="Strike_price" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Strike price</th>
				           
				        </tr>
				    </thead>
				    <tbody>
				        <tr class="dispari">
				        	<td class="center">
				            	<!-- ICONA OPERATIVA MEECCANISMO UGUALE NON MODIFICATO: CAMBIATO SOLO HTML E CSS e si apre in overlayer-->
									<!--
										I parametri da passare alla funziona multiLinks() sono:
											- id del LAYER MENU, vedi sotto
											- 'left, right'
											- this, lasciare cos�
											- array delle querystring da passare ai link:
												* se si passa null, il link sar� disattivo
												* se si passa una querystring, sar� accodata all'URL del link
												* se si passa 'javascript:...', verr� eseguita la funzione javascript al click
									-->
								<div class="linkTooltip" data-toggle="modal">
									<a title="scegli l'operazione da effettuare" id="link1" class="linkVai no-underline btn-icon" onclick="multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', '']);"><i class="icon icon-2x icon-ico_azioni02A"></i></a>						
								</div>
								<!--overlayer icona operativa -->
								<div class="sezioneLinks2 modal fade" id="iconaOperativaMenu1_html" tabindex="-1" role="dialog" aria-labelledby="">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
												<div class="modal-header">
													<a class="close close-top btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
													<h2 class="modal-title" id="myModalLabel">Fiat chrysler automobiles - ordinary shares</h2>
												</div>
												
												<div class="body">
													<ul class="azioni">
															<li class="linkOn"><a title="C/V" href="link1.htm"><span>C/V</span></a></li>
															<li class="linkOff"><span title="C/V">C/V</span></li>
															<hr>
															<li class="linkOn"><a title="Book" href="link2.htm"><span>Book</span></a></li>
															<li class="linkOff"><span title="Book">Book</span></li>
															<hr>
															<li class="linkOn"><a title="Ordine Condizionato" href="link3.htm"><span>Ordine Cond.</span></a></li>
															<li class="linkOff"><span title="Ordine Condizionato">Ordine Cond.</span></li>
															<hr>
															<li class="linkOn"><a title="Analisi Tecnica" href="link4.htm"><span>Analisi Tecnica</span></a></li>
															<li class="linkOff"><span title="Analisi Tecnica">Analisi Tecnica</span></li>
															<hr>
															<li class="linkOn"><a title="Alert" href="link5.htm"><span>Alert</span></a></li>
															<li class="linkOff"><span title="Alert">Alert</span></li>
															<hr>
															<li class="linkOn"><a title="Carry-on" href="/connect.php?page=str_interna_priv.php&tpl=/wetrade/tpl_priv_lib_wt_carry.php&liv1=TR&tr2=0&tr3=0"><span>Carry-on</span></a></li>
															<li class="linkOff"><span title="Carry-on">Carry-on</span></li>
															<hr>
															<li class="linkOn"><a title="Vendi" href="link6.htm"><span>Vendi</span></a></li>
															<li class="linkOff"><span title="Vendi">Vendi</span></li>
															<hr>
															<li class="linkOn"><a title="Vendi" href="/connect.php?page=str_interna_priv.php&tpl=/wetrade/tpl_priv_lib_wt_titoli_in_portafoglio.php&liv1=TR&tr2=0&tr3=0"><span>Visualizza/Vendi</span></a></li>
															<li class="linkOff"><span title="Vendi">Visualizza/Vendi</span></li>
															<hr>
															<li class="linkOn"><a title="Dettaglio fiscale" href="#1" class="close-left" data-dismiss="modal" data-toggle="modal" data-target="#fiscalita"><span>Fiscalità</span></a></li>
															<li class="linkOff"><span title="Dettaglio fiscale">Apre un secondo overlayer Fiscalità </span></li>
														</ul>
														<div class="clear"></div>
												</div>
											
										</div>
									</div>
								</div>
								<!--overlayer fiscalità -->
								<div class="modal fade slide-right" id="fiscalita" tabindex="-1" role="dialog" aria-labelledby="">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<a class="close close-top btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
												<h2 class="modal-title" id="myModalLabel">Titolo</h2>
											</div>
											<div class="modal-body">
												<div class="container-fluid">
													<div class="row">
														<div class="col-xs-12">
															<h3>Sottotitolo</h3>
															<p>lorem</p>
															<a class="close close-right btn-icon" data-dismiss="modal" data-target="#iconaOperativaMenu1_html" data-toggle="modal" aria-label="Close"><i class="icon icon-arrow_left"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
								
				            </td>
				            <td class="left min-width"><a href="#">AKREUR3MCAP3.5P25</a></td>
				            <td class="left">BANCA AKROS</td>
				            <td class="left">EURIBOR 3M</td>
				            <td class="left">euribor cap</td>
				            <td class="right">31/03/2025</td>
				            <td class="right">3,5</td>
				            
				        </tr>
				        <tr class="pari">
				        	<td class="center">
				            	<!-- ICONA OPERATIVA MEECCANISMO UGUALE NON MODIFICATO: CAMBIATO SOLO HTML E CSS e si apre in overlayer-->
									<!--
										I parametri da passare alla funziona multiLinks() sono:
											- id del LAYER MENU, vedi sotto
											- 'left, right'
											- this, lasciare cos�
											- array delle querystring da passare ai link:
												* se si passa null, il link sar� disattivo
												* se si passa una querystring, sar� accodata all'URL del link
												* se si passa 'javascript:...', verr� eseguita la funzione javascript al click
									-->
								<div class="linkTooltip" data-toggle="modal">
									<a title="scegli l'operazione da effettuare" id="link1" class="linkVai no-underline btn-icon" onclick="multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', '']);"><i class="icon icon-2x icon-ico_azioni02A"></i></a>						
								</div>
								
				            </td>
				            <td class="left min-width"><a href="#">AKREUR3MCAP3.5P30</a></td>
				            <td class="left">BANCA AKROS</td>
				            <td class="left">EURIBOR 3M</td>
				            <td class="left">euribor cap</td>
				            <td class="right">31/03/2030</td>
				            <td class="right">3,5</td>
				            
				        </tr>
				         <tr class="dispari">
				         	<td class="center">
				            	<!-- ICONA OPERATIVA MEECCANISMO UGUALE NON MODIFICATO: CAMBIATO SOLO HTML E CSS e si apre in overlayer-->
									<!--
										I parametri da passare alla funziona multiLinks() sono:
											- id del LAYER MENU, vedi sotto
											- 'left, right'
											- this, lasciare cos�
											- array delle querystring da passare ai link:
												* se si passa null, il link sar� disattivo
												* se si passa una querystring, sar� accodata all'URL del link
												* se si passa 'javascript:...', verr� eseguita la funzione javascript al click
									-->
								<div class="linkTooltip" data-toggle="modal">
									<a title="scegli l'operazione da effettuare" id="link1" class="linkVai no-underline btn-icon" onclick="multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', '']);"><i class="icon icon-2x icon-ico_azioni02A"></i></a>						
								</div>
								<!--overlayer icona operativa -->
								<div class="sezioneLinks2 modal fade" id="iconaOperativaMenu1_html" tabindex="-1" role="dialog" aria-labelledby="">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
												<div class="modal-header">
													<a class="close close-top btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
													<h2 class="modal-title" id="myModalLabel">Fiat chrysler automobiles - ordinary shares</h2>
												</div>
												
												<div class="body">
													<ul class="azioni">
															<li class="linkOn"><a title="C/V" href="link1.htm"><span>C/V</span></a></li>
															<li class="linkOff"><span title="C/V">C/V</span></li>
															<hr>
															<li class="linkOn"><a title="Book" href="link2.htm"><span>Book</span></a></li>
															<li class="linkOff"><span title="Book">Book</span></li>
															<hr>
															<li class="linkOn"><a title="Ordine Condizionato" href="link3.htm"><span>Ordine Cond.</span></a></li>
															<li class="linkOff"><span title="Ordine Condizionato">Ordine Cond.</span></li>
															<hr>
															<li class="linkOn"><a title="Analisi Tecnica" href="link4.htm"><span>Analisi Tecnica</span></a></li>
															<li class="linkOff"><span title="Analisi Tecnica">Analisi Tecnica</span></li>
															<hr>
															<li class="linkOn"><a title="Alert" href="link5.htm"><span>Alert</span></a></li>
															<li class="linkOff"><span title="Alert">Alert</span></li>
															<hr>
															<li class="linkOn"><a title="Carry-on" href="/connect.php?page=str_interna_priv.php&tpl=/wetrade/tpl_priv_lib_wt_carry.php&liv1=TR&tr2=0&tr3=0"><span>Carry-on</span></a></li>
															<li class="linkOff"><span title="Carry-on">Carry-on</span></li>
															<hr>
															<li class="linkOn"><a title="Vendi" href="link6.htm"><span>Vendi</span></a></li>
															<li class="linkOff"><span title="Vendi">Vendi</span></li>
															<hr>
															<li class="linkOn"><a title="Vendi" href="/connect.php?page=str_interna_priv.php&tpl=/wetrade/tpl_priv_lib_wt_titoli_in_portafoglio.php&liv1=TR&tr2=0&tr3=0"><span>Visualizza/Vendi</span></a></li>
															<li class="linkOff"><span title="Vendi">Visualizza/Vendi</span></li>
															<hr>
															<li class="linkOn"><a title="Dettaglio fiscale" href="#1" class="close-left" data-dismiss="modal" data-toggle="modal" data-target="#fiscalita"><span>Fiscalità</span></a></li>
															<li class="linkOff"><span title="Dettaglio fiscale">Apre un secondo overlayer Fiscalità </span></li>
														</ul>
														<div class="clear"></div>
												</div>
											
										</div>
									</div>
								</div>
								<!--overlayer fiscalità -->
								<div class="modal fade slide-right" id="fiscalita" tabindex="-1" role="dialog" aria-labelledby="">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<a class="close close-top btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
												<h2 class="modal-title" id="myModalLabel">Titolo</h2>
											</div>
											<div class="modal-body">
												<div class="container-fluid">
													<div class="row">
														<div class="col-xs-12">
															<h3>Sottotitolo</h3>
															<p>lorem</p>
															<a class="close close-right btn-icon" data-dismiss="modal" data-target="#iconaOperativaMenu1_html" data-toggle="modal" aria-label="Close"><i class="icon icon-arrow_left"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
								<!--overlayer fiscalità -->
				            </td>
				            <td class="left min-width"><a href="#">AKREUR3MCAP4.25P25</a></td>
				            <td class="left">BANCA AKROS</td>
				            <td class="left">EURIBOR 3M</td>
				            <td class="left">euribor cap</td>
				            <td class="right">31/03/2025</td>
				            <td class="right">4,25</td>
				            
				        </tr>
				       
				    </tbody>
				</table>

				<p class="note">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates ad natus laboriosam. Ad omnis laboriosam fuga similique beatae voluptates recusandae, ipsa qui odit dolorem! Ratione voluptate consequuntur magni, vel illum.</p>


<style>
@media screen and (max-width: 640px) {
	table.responsive-allscrolled-table {
		overflow-x: auto;
		display: block;
	}
}
</style>

<h1 id="id_label">Esito disposizioni</h1>
<p>
	Puoi <strong>annullare</strong> disposizioni fino alle <strong>ore 19:30</strong> del <strong>giorno precedente</strong> la data di pagamento inserita.
	Gli F23 e gli F24 possono essere annullati finch&eacute; si trovano nello stato &quot;prenotato&quot;.
</p>
<div class="tithelp">
	<div class="helpleft"></div>
	<div class="BvTableHeaderHelp" align="right">
		<a class="hlp" href="javascript:;" onclick="openPopGuida(cgi_script+'/banking/webank/helpStatoDisp.jsp?tabbed=false');" title="help">help</a>
		<a href="javascript:;" onclick="openPopGuida(cgi_script+'/banking/webank/helpStatoDisp.jsp');">
			<img alt="help" src="/img/ret//ico2or_help2.gif">
		</a>
		<br class="clear">
	</div>
	<br class="clear">
</div>
<div class="borderFormRounded searchFilter margBottomLarge">
	<div class="formGeneric">
			<div class="row">
	
				<div class="col-sm-6">
					<label class="nomefield">Tipo disposizione</label>
	
			<select id="optionDispoType" name="queryDispoType" size="1" onchange="aggiornaFiltri();">
			<option value="ALL">Tutte le disposizioni</option>
<option value="BPL">bollettini postali</option>
<option value="ACI">bollo auto</option>
<option value="ATM">abbonamento ATM</option>
<option value="FRE">bollettini Freccia</option>			
<option value="BON">bonifici</option>
<option value="EDI">bonifici ristrutturazione edilizia</option>
<option value="ENE">bonifici risparmio energetico</option>

<option value="BOE">bonifici estero</option>
			
<option value="AOL">acquisti online</option>

<option value="RIB">Riba</option>
			
<option value="MAV">Mav</option>
<option value="RAV">Rav</option>
<option value="CEL">ricariche cellulari/TV</option>
			
<option value="RPR">ricariche prepagate</option>
			
<option value="RCJ">rimborso prepagate</option>
			
<option id="optF24" value="F24">delega F24</option>
				

<option id="optF23" value="F23">delega F23</option>
			
	
		</select>

			</div>
<div class="col-sm-6">
<div class="row">
<div class="col-xs-10">
					<label class="nomefield">Conto corrente</label>

<!-- === org.apache.jsp.banking.accountsListSelect_jsp === { -->
	<select class="grande withIco" size="1" name="idconto" onchange="updateStarStatus(this, 'idconto_star')">

		<option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR" accountidtoshow="CC 01077 0000049477 EUR">
				CC 01077 0000049477 EUR
		</option>
		<option value="01099 - 0000081080 - EUR" selected="selected" accountid="01099 - 0000081080 - EUR" accountidtoshow="CC 01099 0000081080 EUR">
				CC 01099 0000081080 EUR
		</option>
	</select>
<div class="layeralert" id="starAlert1" style="display: none;">
	<div class="head handle" onmouseover="this.style.cursor='move'; $('#starAlert1').dragHandle = new Draggable('starAlert1',{handle: 'handle'}, { scroll: window });"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="javascript: closeAlert('starAlert1'); "></div>
	<div class="body">
		<div class="important">
			<p>Vuoi impostare il conto</p>
			<span><strong id="accountIdToShow_1">CC 01099 0000081080 EUR</strong></span>
			<br><br>
			<p>come preferito?</p>
		</div>
		<br class="clear">
		<a title="Conferma" class="btnformright" href="javascript:setPreferredAccount('01099 - 0000081080 - EUR', 'CC 01099 0000081080 EUR', 'idconto_star');" id="btn_setPreferred"><img alt="" src="/img/ret/btn_left_ar.gif"><span>Conferma</span><img alt="" src="/img/ret/btn_right_ar.gif"></a>
		<a title="Anulla" class="btnformright" href="#1" onclick="javascript: closeAlert('starAlert1');"><img alt="" src="/img/ret/btn_left_ar.gif"><span>Annulla</span><img alt="" src="/img/ret/btn_right_ar.gif"></a>
		<br class="clear">
	</div>
	<div class="foot"></div>
</div>
<div class="layeralert" id="starAlert1Ok" style="display: none;">
	<div class="head handle" onmouseover="this.style.cursor='move'; $('#starAlert1Ok').dragHandle = new Draggable('starAlert1Ok',{handle: 'handle'}, { scroll: window });"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="javascript: closeAlert('starAlert1Ok'); "></div>
	<div class="body">
		<div class="important">
			<p>Il conto</p>
			<span><strong id="accountIdToShow_1ok">CC 01099 0000081080 EUR</strong></span>
			<br><br>
			<p>È impostato come preferito. Da questo momento sarà preselezionato per tutte le operazioni.
				<br>Per impostare un altro conto preferito oppure scegliere o cambiare nickname clicca su "Impostazioni preferenze".
			</p>
		</div>
		<br class="clear">
		<a title="impostazioni preferenze" class="btnformright" href="/webankpri/wbOnetoone/2l/do/bnkg/accountprefs.do?OBSCNT=TAB&amp;tabId=nav_priv_wbx_myhome&amp;OBSKEY=nav_priv_wbx_conto_pref_nickname&amp;OBSKEY3=nav_priv_wbx_conto_pref_nickname&amp;cf=0.7487425312701547"><img alt="" src="/img/ret/btn_left_ar.gif"><span>impostazioni preferenze</span><img alt="" src="/img/ret/btn_right_ar.gif"></a>
		<a title="Chiudi" class="btnformright" href="#1" onclick="javascript: closeAlert('starAlert1Ok');"><img alt="" src="/img/ret/btn_left_ar.gif"><span>Chiudi</span><img alt="" src="/img/ret/btn_right_ar.gif"></a>
		<br class="clear">
	</div>
	<div class="foot"></div>
</div>
<div class="layeralert" id="starAlert1Ko" style="display: none;">
	<div class="head handle" onmouseover="this.style.cursor='move'; $('starAlert1Ko').dragHandle = new Draggable('starAlert1Ko',{handle: 'handle'}, { scroll: window });"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="javascript: closeAlert('starAlert1Ko'); "></div>
	<div class="body">
		<div class="important">

			<p>Per motivi tecnici, le modifiche richieste non sono state eseguite. Ti invitiamo a riprovare. Grazie</p>
		</div>
		<br class="clear">
		<a title="impostazioni preferenze" class="btnformright" href="/webankpri/wbOnetoone/2l/do/bnkg/accountprefs.do?OBSCNT=TAB&amp;tabId=nav_priv_wbx_myhome&amp;OBSKEY=nav_priv_wbx_conto_pref_nickname&amp;OBSKEY3=nav_priv_wbx_conto_pref_nickname&amp;cf=0.7487425312701547"><img alt="" src="/img/ret/btn_left_ar.gif"><span>impostazioni preferenze</span><img alt="" src="/img/ret/btn_right_ar.gif"></a>
		<a title="Chiudi" class="btnformright" href="#1" onclick="javascript: closeAlert('starAlert1Ko');"><img alt="" src="/img/ret/btn_left_ar.gif"><span>Chiudi</span><img alt="" src="/img/ret/btn_right_ar.gif"></a>
		<br class="clear">
	</div>
	<div class="foot"></div>
</div>



<!-- } === org.apache.jsp.banking.accountsListSelect_jsp === -->


				</div>
	<div class="col-xs-2">			
				<a href="javascript:openStarAlert2('01099 - 0000081080 - EUR', 'CC 01099 0000081080 EUR')" title="La stella indica il conto che hai impostato come preferito" class="flRight" id="idconto_star_el"><img src="/img/ico1gr_preferito.gif" alt="Conto preferito" id="idconto_star_img"></a>
	</div>	
</div>	</div>
			</div>
	<div id="codFiscali" class="row" style="display: none;">
				<div class="col-sm-6">
					<label class="nomefield ico">Cod. Fiscale / P.Iva</label>
					<select id="fiscali" name="codFiscPi" size="1" onchange="trovaIntestatario()">
			<option value="PLLFNC67S10A944L" data-intestaz="PALLONI FRANCO">PLLFNC67S10A944L</option>
			
					</select>
				</div>
				<div class="col-sm-6 no-desktop">
					<label class="nomefield">Intestatario</label>
					<span id="intestatario" class="output"></span>
				</div>				
	</div>
	<div class="row">
			<div class="col-sm-6">
				<label class="nomefield">Periodo</label>
				<select id="periodi" name="queryInsertDate" size="1"><option selected="selected" value="PER_ULT_MES">ultimo mese</option><option value="PER_ULT_3_MES">ultimi 3 mesi</option><option value="PER_ULT_6_MES">ultimi 6 mesi</option><option value="PER_ULT_ANN">ultimo anno</option></select>
			</div>
			<div id="importi" class="col-sm-6">
				<label class="nomefield">Importo</label>
				<div class="row">	
					<div class="col-sm-1 col-xs-2">
						<label id="dataDal">da</label>
					</div>
					<div class="col-sm-3 col-xs-8">
						<input maxlength="8" type="text" name="importodaint" id="idImportoDa" value="">
					</div>
					<div class="no-gutter">
						<div class="col-sm-1 col-xs-2"> 
							<strong class="flRight">EUR</strong>
						</div>
					</div>
					<div class="clearfix visible-xs"></div>
					<div class="col-sm-1 col-xs-2">
						<label id="dataDal">a</label>
					</div>
					<div class="col-sm-3 col-xs-8">	
						<input maxlength="8" type="text" name="importoaint" id="idImportoA" value="">
					</div>
					<div class="no-gutter">
						<div class="col-sm-1 col-xs-2"> 
								<strong class="flRight">EUR</strong>
						</div>
					</div>
				</div>
			</div>
	</div>
	<div id="divisa" class="row" style="display: none;">
				<div class="col-sm-6">
					<label class="nomefield">Divisa</label>
					<select name="queryDivisa">
						<option value="EUR">Euro</option>
						<option value="ALL" selected="selected">Tutte</option>
					</select>
				</div>
	</div>				
	<div id="codIud" class="row" style="display: none;">
				<div class="col-sm-6">
					<label class="nomefield ico">Numero Protocollo Telematico (o “Codice IUD”)</label>
					<span class="iconahelp"><a href="javascript:pop_up_int('/webankpri/common/ExternalHelp.jsp?cf=0.16265831587387003&action=openDocument&vista=elenco&key=IUD')"><img class="help" src="/img/ret/ico2or_help2.gif"></a></span>
					<input type="text" name="IUDcode" value="" size="34" maxlength="24">
				</div>
	</div>	
		
	<div class="btnc aButtoncons"><a class="aButton" href="javascript:prosegui();"><span>cerca</span></a></div>

	</div>
</div>

<!--TABELLA DEI MOVIMENTI classe da aggiungere per scrollarla: responsive-allscrolled-table -->
<!--TABELLA DEI MOVIMENTI classe da aggiungere per disporre in verticale: responsive-stacked-table -->
<!--TABELLA DEI MOVIMENTI classe da aggiungere per tenere ferma una colonna passando come parametro il numero della colonna da bloccare colonna: responsive-scrolled-table -->
<!--TABELLA DEI MOVIMENTI classe da aggiungere per trasformarla in accordion: responsive-accordion-table -->
<table id="tb-paniere" cellspacing="0" cellpadding="0" border="0" class="dettTable sortable responsive-accordion-table">
	
    <thead>
		<tr>
			<th class="sort" id="th-descrizione" sort="default" format="URL">DESCRIZIONE</th>
			<th  class="sort" id="th-operativita" sort="operativita" format="operativita">TIPO</th>
			<th class="sort" id="th-leva" sort="number" format="signedPercent">INCREMENTO</th>
			<th class="sort" id="th-coefficiente" sort="number" format="percent">LOREM IPSUM</th>
			<th class="sort" id="th-interesse" sort="number" format="subPercent">LOREM IPSUM</th>
			<th class="sort" id="th-fee" sort="number" format="signedSubPercent">LOREM IPSUM</th>
			<th class="sort nobg" id="th-ico1" sort="default" format="URL">LOREM</th>
			<th class="sort nobg" id="th-ico2" sort="default" format="URL">LOREM</th>
		</tr>
	</thead>
	
	<tbody>
	</tbody>
</table>

<script src="/wscmn/js/table_orderer.js" type="text/javascript"></script>
<script type="text/javascript">
var data = [
	{
		"descrizione": "Ricariche cellulare",
		"url": "http://www.example.org",
		"operativita": "Long",
		"leva": 15,
		"coefficiente": 93,
		"interesse": 0.945,
		"fee": -0.9741,
		"ico1": "<a href=\"#1\" onclick=\"openPopOverLayer('layeralertFolder', 'fixed', 1)\"><img src=\"/img/ret/ico1gr_compravendi.gif\" alt=\"lorem ipsum\"></a>",
		"ico2": "<a href=\"#1\"><img src=\"/img/ret/ico1gr_copia.gif\" alt=\"lorem ipsum\"></a>"
	},
	{
		"descrizione": "Bonifico",
		"url": "http://www.example.org",
		"operativita": "Short",
		"leva": 30,
		"coefficiente": 97,
		"interesse": 0.983,
		"fee": 0.973,
		"ico1": "<a href=\"#1\"><img src=\"/img/ret/ico1gr_compravendi.gif\" alt=\"lorem ipsum\"></a>",
		"ico2": "<a href=\"#1\"><img src=\"/img/ret/ico1gr_copia.gif\" alt=\"lorem ipsum\"></a>"
	},
	{
		"descrizione": "SOLLICITUDIN IN VULPUTATE QUIS",
		"url": "http://www.example.org",
		"operativita": "Short & Long",
		"leva": -45,
		"coefficiente": 99,
		"interesse": 0.985,
		"fee": -0.883,
		"ico1": "<a href=\"#1\"><img src=\"/img/ret/ico1gr_compravendi.gif\" alt=\"lorem ipsum\"></a>",
		"ico2": "<a href=\"#1\"><img src=\"/img/ret/ico1gr_copia.gif\" alt=\"lorem ipsum\"></a>"
	},
	{
		"descrizione": "SUMMA CUM LAUDE",
		"url": "http://www.example.org",
		"operativita": "Short",
		"leva": 80,
		"coefficiente": 96,
		"interesse": 0.996,
		"fee": 0.995,
	},
	{
		"descrizione": "VIVAMUS MALESUADA CONDIMENTUM NUNC",
		"url": "http://www.example.org",
		"operativita": "Short & Long",
		"leva": -93,
		"coefficiente": 96,
		"interesse": 0.973,
		"fee": 0.937,
	},
	{
		"descrizione": "UT VOLUTPAT LECTUS EUISMOD VEL",
		"url": "http://www.example.org",
		"operativita": "Long",
		"leva": 100,
		"coefficiente": 98,
		"interesse": 0.969,
		"fee": -0.978,
	}
];

//Moltiplico i dati per averne di pi
var dataTmp = $.extend(true, {}, data);
for (var i = 0; i < 5; ++i) { $.merge(data, $.extend(true, {}, dataTmp)); }

var paniereTB = null;

// Crea la tabella ordinabile e paginabile
$(function () {
	var loOpe = $('#loOpe');
	paniereTB = new TableOrderer('paniere', {
		data: data,
		cellsClasses: ["first", "center", "center", "center", "center", "center", "center", "center"],
		paginate: true
	});
	paniereTB.orderTable('descrizione', 'asc');
	loOpe.find('.uniqTooltipIco>a').each(function (n, i) {
		var valueToFilter = null;
		i = $(i);
		i.click(function (e) {
			var el = $(e.target);
			if (!el.hasClass('selected')) {
				loOpe.find('.uniqTooltipIco>a.selected').eq(0).removeClass('selected');
				el.addClass('selected');
				switch (n) {
					case 0: paniereTB.delFilter('operativita');
							paniereTB.orderTable('operativita', 'asc');
							break;
					case 1: paniereTB.addFilter('operativita', 'short', true, null);
							paniereTB.orderTable('operativita', 'asc');
							break;
					case 2: paniereTB.addFilter('operativita', 'long', true, null);
							paniereTB.orderTable('operativita', 'asc');
				}
			}
		});
	});
	//loSliderInit(0, 100, 0, sliderSetFilter);
});
function sliderFilter (obj, value, data) {
	return (parseInt(value, 10) >= data);
}

function sliderSetFilter (value) {	
	if (value == 0) { paniereTB.delFilter('leva'); }
	else { paniereTB.addFilter('leva', value, false, sliderFilter); }
}
/*restituisce la larghezza dispositivo */
var viewport = function (){
    var e = window, a = 'inner';
    if (!('innerWidth' in window )) {
        a = 'client';
        e = document.documentElement || document.body;
    }
    return { width : e[ a+'Width' ] , height : e[ a+'Height' ] };
	}

/*FUNZIONE PER RENDERE VERTICALE LA TABELLA */
function addLabelStackTable(){
	$(".responsive-stacked-table").each(function () {
	if(viewport().width < 767 && $('.label-responsive-stacked-table').length==0)
	{
	var ArrayLabelST = $('.responsive-stacked-table').find('thead th');
	$('.responsive-stacked-table td').css('width',$('.responsive-stacked-table').innerWidth());
	ArrayLabelST.each(function(index){
		var arrayLabelStackTable =  $(this).html();
		$('.responsive-stacked-table').find('tbody tr').each(function(){
			$(this).find('td').eq(index).contents().wrap('<span class="content-responsive-stacked-table">');
			$(this).find('td').eq(index).prepend('<span class="label-responsive-stacked-table">' +arrayLabelStackTable+ '</span>');
		})
		$('.label-responsive-stacked-table a').contents().unwrap();
	})
	$('.label-responsive-stacked-table,.content-responsive-stacked-table').css('width',$('.responsive-stacked-table').innerWidth()/2);
	}
	else if (viewport().width < 767 && $('.label-responsive-stacked-table').length!=0)
	{
		$('.responsive-stacked-table td').css('width',$('.responsive-stacked-table').innerWidth());
		$('.label-responsive-stacked-table,.content-responsive-stacked-table').css('width',$('.responsive-stacked-table').innerWidth()/2)
	}
	else if (viewport().width >= 767){
		$('.label-responsive-stacked-table').remove();
		$('.responsive-stacked-table td,.label-responsive-stacked-table,.content-responsive-stacked-table').css('width','auto');
	}
	})
}

/*FUNZIONE PER RENDERE SCROLLABILE LA TABELLA CON COLONNA O COLONNE FISSE */
function scrollTableFidexCol(indexColFix) {
	if(viewport().width < 767)
	{
		
		if($('.responsive-scrolled-table-scroller').length==0)
		{
		
		$('.responsive-scrolled-table').wrap('<div class="responsive-scrolled-table-wrapper"><div class="responsive-scrolled-table-scroller"></div></div>')
		}
		
		$('.responsive-scrolled-table tr').each(function(){
			$(this).find('th,td').eq(indexColFix).addClass('responsive-scrolled-table-sticky-col');
		});
		
		$('.responsive-scrolled-table tr').each(function(){
			
			var altStickCol = $(this).find('.responsive-scrolled-table-sticky-col').eq(0).outerHeight(),
				altFloatCol = $(this).find('.responsive-scrolled-table-sticky-col').next().eq(0).outerHeight();
			
			if(altStickCol>=altFloatCol) 
			{
				$(this).find('td,th').css('height',altStickCol);
				$(this).find('td,th').css('padding-top',0);
				$(this).find('td,th').css('vertical-align','top');
			}
			else{$(this).find('td,th').css('height',altFloatCol);
			$(this).find('td,th').css('padding-top',0);
			$(this).find('td,th').css('vertical-align','top');}
		
		});
	    $('.sortDir').bind('click', function(){return false;})
	}
	else if(viewport().width > 767) {
		$('.dettTable').find('td,th').removeClass('responsive-scrolled-table-sticky-col').css({
		'height':'auto',
		'padding':'5px 8px',
		'vertical-align':'top'
		});
		if($('.responsive-scrolled-table-wrapper').length>0)
		{
			$('.responsive-scrolled-table').unwrap();
			$('.responsive-scrolled-table').unwrap();
		}
	}
}

/*FUNZIONE PER RENDERE IN ACCORDION LA TABELLA */
function accordionTable(nColVisible) {
	if(viewport().width < 767)
	{
	$(".responsive-accordion-table").each(function () {
          var trAcc = $(this).find("tr").not("tr:has(th)"),
              thRows = trAcc.length,
              thHead = [];

          $(this).find("tr:first-child th").each(function () {
              headLines = $(this).text();
              thHead.push(headLines);
          });
		
			trAcc.each(function () {
              for (i = nColVisible-1, l = thHead.length; i < l; i++) {
                  $(this).find("td").eq(i + 1).prepend("<h3>" + thHead[i + 1] + "</h3>");
			 }
			});
		  trAcc.each(function () {
			for (i = 0; i < nColVisible; i++) {
                  $(this).find("td").eq(i).addClass('responsive-accordion-td-visible');
			 }
		  });
		  for (i = 0; i < nColVisible; i++) {
                  $(this).find("th").eq(i).addClass('responsive-accordion-th-visible');
		  }
		 
		 $('.responsive-accordion-td-visible,.responsive-accordion-th-visible').css('width', (viewport().width)/parseInt(nColVisible) +'px')
		
          trAcc.append('<i class="icon-accordion">+</i>');
		  trAcc.css('max-height','30px');
          trAcc.click(function () {
              if ($(this).hasClass("accordion-opened")) {
                  $(this).animate({
                      maxHeight: '30px'
                  }, 200).removeClass("accordion-opened").find(".icon-accordion").text("+");

              } else {
                  $(this).animate({
                      maxHeight: "1000px"
                  }, 400).addClass("accordion-opened").find(".icon-accordion").text("-");
              }
          });
		
      });
	  $('.sortDir').bind('click', function(){return false;})
	  }
}


$(window).bind('resize',function(){
	if($('.responsive-scrolled-table').length>0) {scrollTableFidexCol('0')}
	if($('.responsive-stacked-table').length>0) {addLabelStackTable()}
	if($('.responsive-accordion-table').length>0) {if($('.icon-accordion').length==0) accordionTable('3')}
	})
$(function(){
	if($('.responsive-scrolled-table').length>0) {scrollTableFidexCol('0')}
	if($('.responsive-stacked-table').length>0) {addLabelStackTable()}
	if($('.responsive-accordion-table').length>0) {accordionTable('3')}
	$('.resPagLeft a,.resPagRight a').bind('click',function(){addLabelStackTable();scrollTableFidexCol('0');if($('.responsive-accordion-table').length>0) {accordionTable('3')}})
 })
</script>



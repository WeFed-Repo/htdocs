<h1>CREAZIONE PROFILO - LOREM IPSUM</h1>
<br>
<div class="offStep step">
	<span>1</span> Inserisci i dati
</div>   
<div class="offStep step">
	<span>2</span> Abilita le funzioni
</div>  
<div class="offStep step">
	<span>3</span> Abilita i c/c
</div>
<div class="onStep stop step">
	<span>4</span> Abilita i codici SIA
</div>
<div class="lastStep step">
	<span>5</span>Abilita i rapporti
</div>
<br class="clear" />
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ultricies mi nec nunc cursus et hendrerit urna mollis. Sed commodo gravida erat, non elementum mi eleifend ut. Fusce vehicula magna eget felis iaculis egestas. Nam dapibus sollicitudin volutpat.</p>
<br class="clear">

<div class="tithelp">
	<div class="helpleft paddTopMedium">Lorem ipsum</div>
	<span class="expleft"><a href="javascript:;" onclick="openPopGuida('/connect.php?page=tpl_popup_priv_book_bus_guida.php');" title=""><br>Guida allo step 4</a></span>
</div>
<br class="clear">
<table id="tb-abilitacodici" cellspacing="0" cellpadding="0" border="0" class="dettTable">
	<thead>
		<tr>
			<th id="th-codice" sort="none">Codice SIA</th>
			<th id="th-ragione" sort="none">Ragione sociale</th>
			<th id="th-indirizzo" sort="none">Indirizzo</th>
			<th id="th-cap" sort="none">CAP</th>
			<th id="th-citta" sort="none">Citt&agrave;</th>
			<th id="th-check" sort="none"><input type="checkbox" class='checkAllColInput'></th>
		</tr>
	</thead>
	<tbody>
	</tbody>
</table>
<div>
		<div class="aButtonconsLeft">
			<span class="btnc"><a class="aButtonClear" href="javascript:;"><span>lorem ipsum</span></a></span>
		</div>
		<div class="aButtonconsRight">
			<span class="btnc"><a class="aButton" href="javascript:;" id=""><span>lorem ipsum</span></a></span>
		</div><br>
	</div>
<script src="/wscmn/js/table_orderer.js" type="text/javascript"></script>
<script type="text/javascript">
var data = [
	{
		"codice": "AGN",
		"ragione": "Lorem Ipsum 123456",
		"indirizzo": "via platani 12",
		"cap": "27100",
		"citta": "San Benedetto del Tronto",
		"check": "<input type='checkbox'>"
	},
	{
		"codice": "AGN",
		"ragione": "Lorem Ipsum 123456",
		"indirizzo": "via platani 12",
		"cap": "27100",
		"citta": "San Benedetto del Tronto",
		"check": "<input type='checkbox'>"
	},
	{
		"codice": "AGN",
		"ragione": "Lorem Ipsum 123456",
		"indirizzo": "via platani 12",
		"cap": "27100",
		"citta": "San Benedetto del Tronto",
		"check": "<input type='checkbox'>"
	}
]
// Moltiplico i dati per averne di pi?
var dataTmp = $.extend(true, {}, data);
for (var i = 0; i < 5; ++i) { $.merge(data, $.extend(true, {}, dataTmp)); }

var paniereTB = null;

// Crea la tabella ordinabile e paginabile
$(function () {
	var loOpe = $('#loOpe');
	paniereTB = new TableOrderer('abilitacodici', {
		data: data,
		cellsClasses: ["center", "center", "center", "center","center", "center"],
		paginate: true
	});
	loSliderInit(0, 100, 0, sliderSetFilter);
});

function sliderFilter (obj, value, data) {
	return (parseInt(value, 10) >= data);
}

function sliderSetFilter (value) {	
	if (value == 0) { paniereTB.delFilter('modifica'); }
	else { paniereTB.addFilter('modifica', value, false, sliderFilter); }
}
</script>
<!-- funzione che al check su un chekbox  seleziona tutti i check della stessa colonna-->
<script>
	var selectCheckFunction = function() {
	$('.dettTable th input.checkAllColInput').attr('checked',false) //reset eventuale dei checkbox
	$('.dettTable').each(function(index){
	var checkInTh = $(this).find('th input.checkAllColInput');
	var nRowL = $(this).find('tbody tr').length;
	var nRow =  $(this).find('tbody tr');
	checkInTh.bind('click', function(){
		checkInTh.each(function(index){
		  for(i=0;i<=nRowL;i++)
			{
				if($(this).is(':checked'))
				{
					nRow.eq(i).find('input[type=\'checkbox\']').eq(index).attr('checked','checked');
				}
				else
				{
					nRow.eq(i).find('input[type=\'checkbox\']').eq(index).attr('checked',false);
				}
			}
		})
	})
	})
	}
	$(function(){
		selectCheckFunction();
		$('.resPagLeft a,.resPagRight a').bind('click', function(){
		selectCheckFunction();
	})
	})
	
</script>
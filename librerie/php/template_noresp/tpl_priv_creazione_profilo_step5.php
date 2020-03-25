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
<div class="offStep step">
	<span>4</span> Abilita i codici SIA
</div>
<div class="lastStep onStep stop step">
	<span>5</span>Abilita i rapporti
</div>
<br class="clear" />
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ultricies mi nec nunc cursus et hendrerit urna mollis. Sed commodo gravida erat, non elementum mi eleifend ut. Fusce vehicula magna eget felis iaculis egestas. Nam dapibus sollicitudin volutpat.</p>
<br class="clear">

<div class="tithelp">
	<div class="helpleft paddTopMedium">Lorem ipsum</div>
	<span class="expleft"><a href="javascript:;" onclick="openPopGuida('/connect.php?page=tpl_popup_priv_book_bus_guida.php');" title=""><br>Guida allo step 5</a></span>
</div>
<br class="clear">
<table cellspacing="0" cellpadding="0" border="0" class="dettTable">
	<thead>
		<tr>
			<th>Codice <br>SIA</th>
			<th>Ragione sociale</th>
			<th>Banca</th>
			<th>ABI</th>
			<th>CAB</th>
			<th>Rapporto</th>
			<th>Tipologia</th>
			<th><input type="checkbox" class='checkAllColInput'></th>
		</tr>
	</thead>
	<tbody>
		<tr class="dispari">
			<td rowspan="3">12345</td>
			<td rowspan="3">Fiat</td>
			<td class="center">Intesa san Paolo</td>
			<td>12345</td>
			<td>12345</td>
			<td>123456789012</td>
			<td class="center">Conto corrente</td>
			<td><input type="checkbox"></td>
		</tr>
		<tr class="dispari">
			<td class="center">Banca Popolare di Sondrio</td>
			<td>12345</td>
			<td>12345</td>
			<td>123456789012</td>
			<td class="center">Conto corrente</td>
			<td><input type="checkbox"></td>
		</tr>
		<tr class="dispari">
			<td class="center">Banca Popolare di Sondrio</td>
			<td>12345</td>
			<td>12345</td>
			<td>123456789012</td>
			<td class="center">Conto corrente</td>
			<td><input type="checkbox"></td>
		</tr>
		<tr class="pari">
			<td>12345</td>
			<td class="center">Mondadori</td>
			<td class="center">Intesa san Paolo</td>
			<td>12345</td>
			<td>12345</td>
			<td>123456789012</td>
			<td class="center">Conto corrente</td>
			<td><input type="checkbox"></td>
		</tr>
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
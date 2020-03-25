<!-- funzione che al check su un chekbox  seleziona tutti i check della stessa colonna-->
<script>
	var selectCheckFunction = function() {
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
	})
	
</script>

<h1>CREAZIONE PROFILO - LOREM IPSUM</h1>
<br>
<div class="offStep step">
	<span>1</span> Inserisci i dati
</div>   
<div class="offStep step">
	<span>2</span> Abilita le funzioni
</div>  
<div class="onStep stop step">
	<span>3</span> Abilita i c/c
</div>
<div class="step">
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
	<span class="expleft"><a href="javascript:;" onclick="openPopGuida('/connect.php?page=tpl_popup_priv_book_bus_guida.php');" title=""><br>Guida allo step 3</a></span>
</div>
<br class="clear">

<table cellspacing="0" cellpadding="0" border="0" class="dettTable">
	<tr>
		<th width="40%">Conto corrente</th>
		<th>Intestatario</th>
		<th width="10%"><input type="checkbox" class="checkAllColInput"></th>
	</tr>
	<tr>
		<td class="center">00011-122222233- EUR</td>
		<td>LOREM IPSUM DOLOR SIT</td>
		<td class="center"><input type="checkbox"></td>
	</tr>
	<tr>
		<td class="center">00011-122222233- EUR</td>
		<td>LOREM IPSUM DOLOR SIT</td>
		<td class="center"><input type="checkbox"></td>
	</tr>
	<tr>
		<td class="center">00011-122222233- EUR</td>
		<td>LOREM IPSUM DOLOR SIT</td>
		<td class="center"><input type="checkbox"></td>
	</tr>
	<tr>
		<td class="center">00011-122222233- EUR</td>
		<td>LOREM IPSUM DOLOR SIT</td>
		<td class="center"><input type="checkbox"></td>
	</tr>
	<tr>
		<td class="center">00011-122222233- EUR</td>
		<td>LOREM IPSUM DOLOR SIT</td>
		<td class="center"><input type="checkbox"></td>
	</tr>
	<tr>
		<td class="center">00011-122222233- EUR</td>
		<td>LOREM IPSUM DOLOR SIT</td>
		<td class="center"><input type="checkbox"></td>
	</tr>
</table>

<div class="tithelp">
	<div class="helpleft paddTopMedium">Lorem ipsum</div>
	
</div>
<br class="clear">
<table cellspacing="0" cellpadding="0" border="0" class="dettTable">
	<tr>
		<th width="40%">Dossier titoli</th>
		<th>Intestatario</th>
		<th width="10%"><input type="checkbox" class="checkAllColInput"></th>
	</tr>
	<tr>
		<td class="center">121/120373/0</td>
		<td>COMUNE DI MONZA</td>
		<td class="center"><input type="checkbox"></td>
	</tr>
	<tr>
		<td class="center">121/120373/0</td>
		<td>COMUNE DI MONZA</td>
		<td class="center"><input type="checkbox"></td>
	</tr>
</table>
<div class="tithelp">
	<div class="helpleft paddTopMedium">Lorem ipsum</div>
	
</div>
<br class="clear">
<table cellspacing="0" cellpadding="0" border="0" class="dettTable">
	<tr>
		<th width="40%">Codice tesoreria</th>
		<th>Descrizione tesoreria</th>
		<th width="10%"><input type="checkbox" class="checkAllColInput"></th>
	</tr>
	<tr>
		<td class="center">1514900</td>
		<td>COMUNE DI MONZA</td>
		<td class="center"><input type="checkbox"></td>
	</tr>
	<tr>
		<td class="center">1514900</td>
		<td>COMUNE DI MONZA</td>
		<td class="center"><input type="checkbox"></td>
	</tr>
</table>
<div>
		<div class="aButtonconsLeft">
			<span class="btnc"><a class="aButtonClear" href="javascript:;"><span>lorem ipsum</span></a></span>
		</div>
		<div class="aButtonconsRight">
			<span class="btnc"><a class="aButton" href="javascript:;" id=""><span>lorem ipsum</span></a></span>
		</div><br>
	</div>
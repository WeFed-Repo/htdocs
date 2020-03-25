<h1>Gestione App</h1>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adfgd minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderitd io 
in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
<table cellspacing="0" cellpadding="0" border="0" class="dettTable" id="tableListDeviceAss">
	<tr>
		<th colspan="3" class="txtAlLeft"><input type="checkbox">
			<a href="javascript:;" class="noConnect flRight paddRightMedium"><img src="/img/ret/ico1gr_disconnect_off.png" alt=""/></a>
		</th>
		
	</tr>
	<tr>
		<td class="center" width="5%"><input type="checkbox"></td>
		<td  width="47%">Lorem ipsum</td>
		<td  width="47%">Certificato il 12/12/2014</td>
		
	</tr>
	<tr>
		<td class="center"  width="5%"><input type="checkbox"></td>
		<td width="47%">Lorem ipsum</td>
		<td width="47%">Certificato il 10/12/2014</td>
		
	</tr>
	<tr>
		<td class="center" width="5%"><input type="checkbox"></td>
		<td width="47%">Lorem ipsum</td>
		<td width="47%">Certificato il 01/12/2014</td>
	</tr>
</table>
<div class="boxesito attenzione msgNoRow" style="display:none">
	<div class="middle"><span class="imgCont"></span>
		<div class="text">
			<p><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
			et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p>
		</div>
	</div>
</div>
<script>
//funzione che elimina le righe di una tabella passata come id tramite i checkbox

var	tableConnect = $('#tableListDeviceAss'),
	checkTableTr = tableConnect.find('td input[type=checkbox]'),
	checkTableTh = tableConnect.find('th input[type=checkbox]'),
	noConnectTh =  tableConnect.find('th a.noConnect'),
	checkedTableTr = null;
checkTableTr.click(function () {
	if($(this).is(':checked'))
	{
		$(this).closest('tr').addClass('evident');
		noConnectTh.find('img').attr('src','/img/ret/ico1gr_disconnect_on.png');
	}
	else
	{
		$(this).closest('tr').removeClass('evident');
		checkTableTh.attr('checked',false)
		if(tableConnect.find('td input[type=checkbox]:checked').length==0){
			noConnectTh.find('img').attr('src','/img/ret/ico1gr_disconnect_off.png');
		}
	}
 })
checkTableTh.click(function () {
	if($(this).is(':checked'))
	{
		$(this).closest('table').find('tr').addClass('evident');
		tableConnect.find('.noConnect img').attr('src','/img/ret/ico1gr_disconnect_on.png');
		$(this).closest('table').find('tr').find();
		checkTableTr.attr('checked',true)
	}
	else
	{
		$(this).closest('table').find('tr').removeClass('evident');
		tableConnect.find('tr .noConnect img').attr('src','/img/ret/ico1gr_disconnect_off.png');
		checkTableTr.attr('checked',false)
	}
 })

noConnectTh.click(function () {
	checkedTableTr = tableConnect.find('td input[type=checkbox]:checked');
	checkedTableTr.closest('tr').fadeOut(300, function(){
		checkedTableTr.closest('tr').remove();
		tableConnect.find('tr .noConnect img').attr('src','/img/ret/ico1gr_disconnect_off.png');
	})
	if(checkedTableTr.length==tableConnect.find('tr').length-1) {
		tableConnect.hide();
		$('.msgNoRow').show()
	}
});
 

</script>


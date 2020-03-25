<div id="intslideEventi"></div>
<script type="text/javascript" src="/wscmn/js/ret/priv_widgets.js"></script>
<script type="text/javascript">
	slideEventiInt('intslideEventi','/xml/ret/slideEventi.xml');
</script>
<div class="tabInnerLargeWrap">
	<!--TAB DI NAVIGAZIONE -->
	<div class="tabInnerLarge">
		<ul class="flLeft">
			<li class="on"><a href="javascript:;" data-wrapper="eventiTab1">In programma</a></li>
			<li class="off"><a href="javascript:;" data-wrapper="eventiTab2">Passati</a></li>
		</ul>
	</div>
	<br class="clear"><br>
	
	<div id="eventiTab1">
		<div class="divtabellalist">
			<table border="0" class="tabellalist">
						<tr>
							<td class="on first"><a href="#1" title="Lorem ipsum" data-wrapper="listaEV1">Tutti gli eventi</a></td>
							<td class="off"><a href="#1" title="Lorem ipsum lorem" data-wrapper="listaEV2">Prossimi eventi live</a></td>
							<td class="off"><a href="#1" title="Lorem ipsum lorem" data-wrapper="listaEV3">Prossimi eventi in streaming</a></td>
							<td class="end">&nbsp;</td>
						</tr>
			</table>
		</div>
		<div id="listaEV1" data-url="/librerie/include/commons/ajax/events.php"></div>
		<div id="listaEV2" data-url="/librerie/include/commons/ajax/events.php" style="display:none"></div>
		<div id="listaEV3" data-url="/librerie/include/commons/ajax/events.php" style="display:none"></div>
	</div>
	<div id="eventiTab2"  style="display:none">
		<div id="listaEV4" data-url="/librerie/include/commons/ajax/events.php"  style="display:none"></div>
	</div>
	
	<script src="/wscmn/js/priv_ret_eventi.js" type="text/javascript"></script>
</div>
<!--js per paginazione -->
<script type="text/javascript">
$(initEventPage);
</script>

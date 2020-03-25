<?php 

	for($x==1;$x<30;$x++) {
?>
<tr class="<?php if ($x & 1) print "dis" ;?>pari">
	<td class="center">
		<div class="linkTooltip" data-toggle="modal">
			<a title="scegli l'operazione da effettuare" id="link1" class="linkVai no-underline btn-icon" onclick="multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', '',]);"><i class="icon icon-2x icon-ico_azioni02A"></i></a>						
		</div>
	</td>
	<td class="left"><?php print(999207+$x) ?></td>
	<td class="left"><a href="#" data-value="DAIMLER" title="DAI" >DAIMLER</a></td>
	<td class="left">MTA</td>
	<td class="left"><span class="txthelp"><span data-value="ACQ" data-title="b" data-toggle="tooltip">ACQ</span></span></td>
	<td class="left"><?php $x ?><br><?php $x-1 ?></td>
	<td class="right">1,04%</td>

	<td class="center">22/08/2016<br>20:25:10</td>
	<td class="center">23/08/2016</td>
	<td class="left" id="stato1"><span class="txthelp"><span data-title="inserito" data-toggle="tooltip">INS</span></span></td>
	<td class="center" id="revoca1">
		<a href="#1" class="no-underline btn-icon" title="Per cancellare un ordine inserito"><i class="icon icon-chiudi_table" data-target="#annullaOrdine" data-toggle="modal"></i></a>
	</td>
	<td class="center">
		<a href="javascript:dettaglioOrdineWeBankNew('000039','20190111112108');" class="no-underline btn-icon" title="Per vedere il dettaglio dell'ordine">
			<i class="icon icon-2x icon icon-zoom_piu_filled" data-target="#dettagliOrdine" data-toggle="modal"></i>
		</a>
	</td>
</tr>
<?php
	}
?>
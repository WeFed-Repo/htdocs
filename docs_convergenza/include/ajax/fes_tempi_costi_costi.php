<?php

	virtual ("/core/functions.php");

?>
<!-- Tabella di riepilogo -->
    <div class="row">
    	<div class="col-xs-12">

    		<div class="headerContainerNoBootS">
				<div class="tableContainerNoBootS">

		    		<table border="0" cellspacing="0" cellpadding="0" data-toggle="table" class="valign-middle">
		    		<!-- Header -->
		    		<tr>
					    <th colspan="2">Operazione</th>
					    <th colspan="2">Commissioni</th>
					    <th>Diritti Banca Corrispondente</th>
					</tr>

					<!-- Sottoscrizione -->
					<tr>
					    <td rowspan="6"><strong>Sottoscrizione</strong></td>
					    <td rowspan="2">Azioni Classe AT</td>
					    <td>Obbligazionari</td>
					    <td><strike>Min 4%  Max 5%</strike> <strong class="heavy">ZERO</strong></td>
						<td rowspan="6">€ 10,00 PIC<br><br>
						€ 10 Versamento iniziale PAC + <br>
						€ 1,00 su ogni rata successiva<br>
						<br>
						Stacco cedola:  <strong class="heavy">ZERO</strong></td>
					</tr>
					<tr>
					    <td>Azionari</td>
					    <td><strike>Min 4%  Max 5%</strike> <strong class="heavy">ZERO</strong></td>
					</tr>

					<tr>
					    <td rowspan="3">Azioni Classe CT - CT2</td>
						<td>Obbligazionari</td>
					    <td><strike>Min 4%  Max 5%</strike> <strong class="heavy">ZERO</strong></td>
					</tr>

					<tr>
						<td>Azionari</td>
					    <td><strike>Min 4%  Max 5%</strike> <strong class="heavy">ZERO</strong></td>
					</tr>

					<tr>
						<td>Liquidit&agrave;</td>
					    <td><strike>Min 4%  Max 5%</strike> <strong class="heavy">ZERO</strong></td>
					</tr>

					<tr>

					    <td>Azioni Classe C</td>
					    <td colspan="2"><strike>3%</strike> <strong class="heavy">ZERO</strong></td>

					</tr>
					<!-- fine sottoscrizione -->

					<!-- Switch -->
					<tr class="pari">
						<td><strong>Switch</strong></td>
					    <td>Tutte le classi di azioni</td>
					    <td colspan="2"> <strong class="heavy">ZERO</strong></td>
					    <td> <strong class="heavy">ZERO</strong></td>
					</tr>
					<!-- Fine switch -->


					<!-- Switch -->
					<tr>
						<td><strong>Rimborso</strong></td>
					    <td>Tutte le classi di azioni</td>
					    <td colspan="2"> <strong class="heavy">ZERO</strong></td>
					    <td> <strong class="heavy">ZERO</strong></td>
					</tr>
					<!-- Fine switch -->

					</table>
				</div>
			</div>
    	</div>
    </div>
    <!-- Fine tabella di riepilogo -->

	<?php print randomPar(30); ?>
	<ul>
		<li><?php print randomText(10); ?></li>
		<li><?php print randomText(15); ?></li>
		<li><?php print randomText(8); ?></li>
		<li><?php print randomText(12); ?></li>
	</ul>
	<?php print randomPar(40); ?>

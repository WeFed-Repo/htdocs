<h2>ExtraPrelievo e massimali</h2>
<section>
<div class="navContFirstLev outerTab">
	<div class="innerTab">
		<ul class="tabmedium">
			<li><a href="connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_banco_saldo_mov.php&liv0=2&liv1=1&liv2=1&liv3=0&responsive=y&fdeb=<?php print $fdeb;?>">saldo e <br>movimenti</a></li>
			<li class="on"><a href="connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_banco_extra_max.php&liv0=2&liv1=1&liv2=1&liv3=0&responsive=y&fdeb=<?php print $fdeb;?>">extraPrelievo<br> e Massimali</a></li>
			<li><a href="#">profilo<br> internazionale</a></li>
			<li><a href="connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_banco_sicurezza.php&liv0=2&liv1=0&liv2=1&liv3=0&responsive=y&fdeb=<?php print $fdeb;?>">sicurezza<br> ed estinzione</a></li>
			<li><a href="connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_stato_pratica.php&liv0=2&liv1=0&liv2=1&liv3=0&responsive=y&fdeb=<?php print $fdeb;?>">stato pratica</a></li>
		</ul>
	</div>
	<div class="separator"></div>
</div>
	<div class="panel-nofill">
		<section>
			<p>In questa pagina puoi:</p>
			<ul>
				<li>attivare l'opzione <strong>EXTRAPRELIEVO</strong>.</li>
				<li>
					visualizzare e <strong>modificare i</strong>
					<span class="txthelp">
						<strong class="closeable" data-title="Per i &quot;Massimali&quot; si intendono i limiti massimi di spesa, giornalieri e mensili " data-toggle="tooltip">massimali</strong>
					</span>del tuo bancomat
				</li>
			</ul>
			<div class="tithelp">
				<h4>Seleziona fascia massimali</h4>
			</div>
			<div class="headerContainerNoBootS">
        		<div class="tableContainerNoBootS">
			<table cellspacing="0" cellpadding="0" border="0" id="massimaliTable" class="fixed">
			<thead>
				<tr>
					<th width="40%" class="fix1Col align-center" data-field="tipologiaColonna">Tipologia</th>
					<th width="15%" class="fixedLarge" id="bancomatTitle" data-field="bancomatTitle"><input type="radio" name="massimali"></th>
					<th width="15%" class="fixedLarge selected" data-field="cartaOneTitle"><input type="radio" name="massimali"></th>
					<th width="15%" class="fixedLarge" data-field="cartaGoldTitle"><input type="radio" name="massimali"></th>
					<th width="15%" class="fixedLarge" data-field="cartaJeansTitle"><input type="radio" name="massimali"></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>per prelievi giornalieri</td>
					<td class="right">1.500 &euro;</td>
					<td class="right selected">2.000 &euro;</td>
					<td class="right">2.000 &euro;</td>
					<td class="right">2.000 &euro;</td>
				</tr>
				<tr>
					<td>per prelievi e pagamenti  mensili</td>
					<td class="right">5.000 &euro;</td>
					<td class="right selected">750 &euro;</td>
					<td class="right">750 &euro;</td>
					<td class="right">750 &euro;</td>
				</tr>
			</tbody>
		</table>
	</div>
	</div>
		<div class="form-group btnWrapper">
			<div class="btn-align-right">
				<a type="button" class="btn btn-primary" id="btnInvio" href="/connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_bonifico_step2.php&amp;liv0=1&amp;liv1=1&amp;liv2=0&amp;liv3=0&amp;responsive=y">prosegui</a>
			</div>
			<div class="clear"></div>
		</div>
		</section>
	</div>

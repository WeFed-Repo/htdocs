<h4>Tabella con una colonna o pi&ugrave; colonne fisse </h4>
<table cellspacing="0" cellpadding="0" border="0" id="tableColFixed" class="fixed">
    <thead>
        <tr>
            <th class="left fix1Col" data-field="Descrizione">Descrizione</th>
            <th class="left" data-field="Nome">Nome</th>
            <th class="right" data-field="importo">Importo</th>
            <th class="right" data-field="variazione">Varazione</th>
            <th class="right" data-field="scarto">Scarto</th>
        </tr>
    </thead>
    <tbody>
        <tr class="dispari">
            <td class="left min-width">Lorem ipsum dolor sit amet consectetur</td>
            <td class="left">Dolor ipsum</td>
            <td class="right">3.200,63 &euro;</td>
            <td class="right">99%</td>
            <td class="right">0.983</td>
        </tr>
        <tr class="pari">
            <td class="left">Ipsum dolor sit amet consectetur</td>
            <td class="left">Dolor ipsum</td>
            <td class="right">3.200,63 &euro;</td>
            <td class="right">39%</td>
            <td class="right">0.983</td>
        </tr>
        <tr class="dispari">
            <td class="left">Dolor ipsum dolor sit amet consectetur</td>
            <td class="left">Dolor ipsum</td>
            <td class="right">1.200,63 &euro;</td>
            <td class="right">19%</td>
            <td class="right">0.983</td>
        </tr>
        <tr class="pari">
            <td class="left">Consectetur elit</td>
            <td class="left">Dolor ipsum</td>
            <td class="right">3.200,63 &euro;</td>
            <td class="right">100%</td>
            <td class="right">0.983</td>
        </tr>
        <tr class="dispari">
            <td class="left th-fixed">Lorem ipsum dolor sit amet consectetur</td>
            <td class="left th-fixed">Dolor ipsum</td>
            <td class="right">3.200,63 &euro;</td>
            <td class="right">99%</td>
            <td class="right">0.983</td>
        </tr>
        <tr class="pari">
            <td class="left th-fixed">Lorem ipsum dolor sit amet consectetur</td>
            <td class="left th-fixed">Dolor ipsum</td>
            <td class="right">3.200,63 &euro;</td>
            <td class="right">99%</td>
            <td class="right">0.983</td>
        </tr>
    </tbody>
</table>
<script>
function fixColonna() {
    if (isSmallDevice) {
        $('#tableColFixed').bootstrapTable('destroy').bootstrapTable({
            fixedColumns: true,
            fixedNumber: 1
        })
    }
}
$(function() {
    fixColonna()
});

$(window).resize(function() {
    fixColonna()
});
</script>
<!--<table cellspacing="0" cellpadding="0" border="0" class="responsive scrollabled-table">
	<thead>
		<tr>
			<th class="left">Descrizione</th>
			<th class="left">Nome</th>
			<th class="right">Importo</th>
			<th class="right">Varazione</th>
			<th class="right">Scarto</th>
		</tr>
	</thead>
	<tbody>
		<tr class="dispari">
			<td class="left">Lorem ipsum dolor sit amet consectetur</td>
			<td class="left">Dolor ipsum</td>
			<td class="right">3.200,63 &euro;</td>
			<td class="right">99%</td>
			<td class="right">0.983</td>
		</tr>
		<tr class="pari">
			<td class="left">Ipsum dolor sit amet consectetur</td>
			<td class="left">Dolor ipsum</td>
			<td class="right">3.200,63 &euro;</td>
			<td class="right">39%</td>
			<td class="right">0.983</td>
		</tr>
		<tr class="dispari">
			<td class="left">Dolor ipsum dolor sit amet consectetur</td>
			<td class="left">Dolor ipsum</td>
			<td class="right">1.200,63 &euro;</td>
			<td class="right">19%</td>
			<td class="right">0.983</td>
		</tr>
		<tr class="pari">
			<td class="left">Consectetur elit</td>
			<td class="left">Dolor ipsum</td>
			<td class="right">3.200,63 &euro;</td>
			<td class="right">100%</td>
			<td class="right">0.983</td>
		</tr>
		<tr class="dispari">
			<td class="left">Lorem ipsum dolor sit amet consectetur</td>
			<td class="left">Dolor ipsum</td>
			<td class="right">3.200,63 &euro;</td>
			<td class="right">99%</td>
			<td class="right">0.983</td>
		</tr>
		<tr class="pari">
			<td class="left">Lorem ipsum dolor sit amet consectetur</td>
			<td class="left">Dolor ipsum</td>
			<td class="right">3.200,63 &euro;</td>
			<td class="right">99%</td>
			<td class="right">0.983</td>
		</tr>
	</tbody>
</table>-->

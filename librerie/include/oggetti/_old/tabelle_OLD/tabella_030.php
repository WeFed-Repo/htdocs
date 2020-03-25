<h4>Tabella che si dispone in verticale</h4>
<table cellspacing="0" cellpadding="0" border="0" id="tableVertical">
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
            <td class="left">Lorem ipsum</td>
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
</table>
<script>
function verticalColonna() {
    if (isSmallDevice) {
        $('#tableVertical').bootstrapTable('destroy').bootstrapTable({
            cardView: true,
        })
    }
}
$(function() {
    verticalColonna();
})
$(window).resize(function() {
    verticalColonna()
});
</script>
<!--<table cellspacing="0" cellpadding="0" border="0" class="responsive stacked-table">
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
			<td class="left">Lorem ipsum</td>
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

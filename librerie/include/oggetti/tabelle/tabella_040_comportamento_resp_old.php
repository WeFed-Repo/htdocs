<h4>Tabella che si trasforma in accordion</h4>
<p>Senza rowspan</p>
<!--
<table cellspacing="0" cellpadding="0" border="0" class="responsive accordion-table">
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
-->
<table cellspacing="0" cellpadding="0" border="0" id="tableAccordion">
    <thead>
        <tr>
            <th class="left" data-field="descrizione">Descrizione</th>
            <th class="left" data-field="nome">Nome</th>
            <th class="right" data-field="importo" data-visible="false">Importo</th>
            <th class="right" data-field="variazione" data-visible="false">Varazione</th>
            <th class="right" data-field="scarto" data-visible="false">Scarto</th>
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
function accordionTable() {
    if (isSmallDevice) {
        $('#tableAccordion').bootstrapTable('destroy').bootstrapTable({
            detailView: true,
            detailFormatter: detailFormatter
        })

    } else {
        $('#tableAccordion').bootstrapTable('destroy');
    }
}

function detailFormatter(index, row) {

    var html = [];
    $.each(row, function(key, value) {

        if (key == 'importo' || key == 'variazione' || key == 'scarto') {
            html.push('<p class="noMarginBottom"><strong>' + key + ':</strong>' + '</p>' + '<p>' + value + '</p>');
        }
    });
    return html.join('');
}
$(function() {
    accordionTable();
})
$(window).resize(function() {
    accordionTable()
});
</script>

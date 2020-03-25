<h4>Tabella che scrolla</h4>
<!--<table cellspacing="0" cellpadding="0" border="0" class="responsive allscrollabled-table">-->
<table cellspacing="0" cellpadding="0" border="0" data-toggle="table" id="table1">
    <caption>Conto corrente di addebito: 32381</caption>
    <thead>
        <tr>
            <th class="left" data-field="Tipologia">Tiplogia</th>
            <th class="center" data-field="Iperiodo">Inizio periodo</th>
            <th class="center" data-field="Fperiodo">Fine periodo</th>
            <th class="center" data-field="rapporto">Rapporto</th>
            <th class="right" data-field="giorni">Giorni</th>
            <th class="right" data-field="imponibile">Imponibile</th>
            <th class="right" data-field="importo">Importo</th>
        </tr>
    </thead>
    <tbody>
        <tr class="dispari">
            <td class="left">TITOLI</td>
            <td class="center">12/05/2014</td>
            <td class="center">12/05/2014</td>
            <td class="center">123456789012</td>
            <td class="right">27</td>
            <td class="right">7.234.567,50</td>
            <td class="right bgkWhite">-815,50</td>
        </tr>
        <tr class="spacer">
            <td>&nbsp;</td>
        </tr>
        <tr class="total">
            <td>TOTALE</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="bgkWhite">815,50</td>
        </tr>
    </tbody>
</table>
<script>
var $table1 = $('#table1')
$(function() {
    $table1.bootstrapTable('mergeCells', {
        index: 1,
        field: 'Tipologia',
        colspan: 7
    });
    $table1.bootstrapTable('mergeCells', {
        index: 2,
        field: 'Tipologia',
        colspan: 6
    });
});
</script>
<!--<table cellspacing="0" cellpadding="0" border="0" class="responsive allscrollabled-table">-->
<h4>Conto corrente di addebito: 32381</h4>
<table cellspacing="0" cellpadding="0" border="0" id="table2" data-toggle="table">
    <thead>
        <tr>
            <th class="left" data-field="Tipologia">Tiplogia</th>
            <th class="center" data-field="Iperiodo">Inizio periodo</th>
            <th class="center" data-field="Fperiodo">Fine periodo</th>
            <th class="center" data-field="rapporto">Rapporto</th>
            <th class="right" data-field="giorni">Giorni</th>
            <th class="right" data-field="imponibile">Imponibile</th>
            <th class="right" data-field="importo">Importo</th>
        </tr>
    </thead>
    <tbody>
        <tr class="dispari">
            <td class="left border-right">LINEE VINCOLATE</td>
            <td class="center">12/05/2014</td>
            <td class="center">12/05/2014</td>
            <td class="center">123456789012</td>
            <td class="right">27</td>
            <td class="right">7.234.567,50</td>
            <td class="right">-74</td>
        </tr>
        <tr class="pari">
            <td>&nbsp;</td>
            <td class="center">12/05/2014</td>
            <td class="center">12/05/2014</td>
            <td class="center">123456789012</td>
            <td class="right">27</td>
            <td class="right">7.234.567,50</td>
            <td class="right">-225,20</td>
        </tr>
        <tr class="dispari">
            <td>&nbsp;</td>
            <td class="center">12/05/2014</td>
            <td class="center">12/05/2014</td>
            <td class="center">123456789012</td>
            <td class="right">27</td>
            <td class="right">7.234.567,50</td>
            <td class="right">-300,40</td>
        </tr>
        <tr class="pari">
            <td>&nbsp;</td>
            <td class="center">12/05/2014</td>
            <td class="center">12/05/2014</td>
            <td class="center">123456789012</td>
            <td class="right">27</td>
            <td class="right">7.234.567,50</td>
            <td class="right">-400,50</td>
        </tr>
        <tr class="dispari">
            <td class="left">TITOLI</td>
            <td class="center">12/05/2014</td>
            <td class="center">12/05/2014</td>
            <td class="center">123456789012</td>
            <td class="right">27</td>
            <td class="right">7.234.567,50</td>
            <td class="right">-74</td>
        </tr>
        <tr class="pari">
            <td class="left">RIMBORSO BOLLI TITOLO</td>
            <td class="center">12/05/2014</td>
            <td class="center">12/05/2014</td>
            <td class="center">123456789012</td>
            <td class="right">27</td>
            <td class="right">7.234.567,50</td>
            <td class="right">-74</td>
        </tr>
        <tr class="dispari">
            <td class="left">LOREM IPSUM</td>
            <td class="center">12/05/2014</td>
            <td class="center">12/05/2014</td>
            <td class="center">123456789012</td>
            <td class="right">27</td>
            <td class="right">7.234.567,50</td>
            <td class="right">-74</td>
        </tr>
        <tr class="spacer">
            <td colspan="7">&nbsp;</td>
        </tr>
        <tr class="total">
            <td>TOTALE</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="bgkWhite">815,50</td>
        </tr>
    </tbody>
</table>
<script>
var $table2 = $('#table2')
$(function() {
    $table2.bootstrapTable('mergeCells', {
        index: 0,
        field: 'Tipologia',
        rowspan: 4
    });
    $table2.bootstrapTable('mergeCells', {
        index: 7,
        field: 'Tipologia',
        colspan: 7
    });
    $table2.bootstrapTable('mergeCells', {
        index: 8,
        field: 'Tipologia',
        colspan: 6
    });
});
</script>

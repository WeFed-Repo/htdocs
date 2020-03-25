<h4>Tabella con una o pi&ugrave; colonne fissa</h4>
<!--<table cellspacing="0" cellpadding="0" border="0" class="responsive scrollabled-table">-->
<h4>Conto corrente di addebito: 32381</h4>
<table cellspacing="0" cellpadding="0" border="0" data-toggle="table" id="table1b" class="fixed" data-fixed-columns="true" data-fixed-number="1">
    <thead>
        <tr>
            <th class="left fix1Col" data-field="Tipologia">Tiplogia</th>
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
var $table1b = $('#table1b')
$(function() {
    $table1b.bootstrapTable('mergeCells', {
        index: 1,
        field: 'Tipologia',
        colspan: 7
    });
    $table1b.bootstrapTable('mergeCells', {
        index: 2,
        field: 'Tipologia',
        colspan: 6
    });
});
</script>
<!--<table cellspacing="0" cellpadding="0" border="0" class="responsive allscrollabled-table">-->
<table cellspacing="0" cellpadding="0" border="0" id="table2b" data-toggle="table" class="fixed" data-fixed-columns="true" data-fixed-number="1">
    <thead>
        <tr>
            <th class="left fix1Col" data-field="Tipologia">Tiplogia</th>
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
var $table2b = $('#table2b')
$(function() {
    $table2b.bootstrapTable('mergeCells', {
        index: 0,
        field: 'Tipologia',
        rowspan: 4
    });
    $table2b.bootstrapTable('mergeCells', {
        index: 7,
        field: 'Tipologia',
        colspan: 7
    });
    $table2b.bootstrapTable('mergeCells', {
        index: 8,
        field: 'Tipologia',
        colspan: 6
    });

});
</script>
<!--
<table cellspacing="0" cellpadding="0" border="0" class="responsive stacked-table">
	<caption>Conto corrente di addebito: 32381</caption>
	<thead>
		<tr>
			<th class="left">Tiplogia</th>
			<th class="center">Inizio periodo</th>
			<th class="center">Fine periodo</th>
			<th class="right">Imponibile</th>
			<th class="center">Rapporto</th>
			<th class="right">Giorni</th>
			<th class="right">Importo</th>
		</tr>
	</thead>
	<tbody>
		<tr class="dispari">
			<td class="left border-right" rowspan="4">LINEE VINCOLATE</td>
			<td class="center">12/05/2014</td>
			<td class="center">12/05/2014</td>
			<td class="right">67,50</td>
			<td class="center">123456789012</td>
			<td class="right">3327</td>
			<td class="right">-74,00</td>
		</tr>
		<tr class="pari">
			<td class="center">12/05/2014</td>
			<td class="center">12/05/2014</td>
			<td class="right">7.234.567,50</td>
			<td class="center">156789012</td>
			<td class="right">327</td>
			<td class="right">-225,20</td>
		</tr>
		<tr class="dispari">
			<td class="center">12/05/2014</td>
			<td class="center">12/05/2014</td>
			<td class="right">7.234.567,50</td>
			<td class="center">1236789012</td>
			<td class="right">2227</td>
			<td class="right">-300,40</td>
		</tr>
		<tr class="pari">
			<td class="center">12/05/2014</td>
			<td class="center">12/05/2014</td>
			<td class="right">7.234.567,50</td>
			<td class="center">1234569012</td>
			<td class="right">27</td>
			<td class="right">-400,50</td>
		</tr>
		<tr class="dispari">
			<td class="left">TITOLI</td>
			<td class="center">12/05/2014</td>
			<td class="center">12/05/2014</td>
			<td class="right">234.567,50</td>
			<td class="center">1234567892</td>
			<td class="right">127</td>
			<td class="right">-74,00</td>
		</tr>
		<tr class="pari">
			<td class="left">RIMBORSO BOLLI TITOLO</td>
			<td class="center">12/05/2014</td>
			<td class="center">12/05/2014</td>
			<td class="right">34.567,50</td>
			<td class="center">123456789012</td>
			<td class="right">27</td>
			<td class="right">-74,00</td>
		</tr>
		<tr class="dispari">
			<td class="left">LOREM IPSUM</td>
			<td class="center">12/05/2014</td>
			<td class="center">12/05/2014</td>
			<td class="right">7.234.567,50</td>
			<td class="center">23456789012</td>
			<td class="right">27</td>
			<td class="right">-74,00</td>
		</tr>
		<tr class="spacer">
			<td colspan="7">&nbsp;</td>
		</tr>
		<tr class="total">
	       <th colspan="6">TOTALE</td>
		   <td>-815,50</td>
	    </tr>
	</tbody>
</table>

<table cellspacing="0" cellpadding="0" border="0" class="responsive stacked-table">
	<caption>Conguaglio</caption>
	<thead>	
		<tr>
			<th class="center">Inizio periodo</th>
			<th class="center">Fine periodo</th>
			<th class="right">Giorni</th>
			<th class="right">Importo</th>	
		</tr>
	</thead>
	<tbody>	
		<tr class="dispari">
			<td class="center">12/05/2014</td>
			<td class="center">12/05/2014</td>
			<td class="right">27</td>
			<td class="right">-815,50</td>
		</tr>
		<tr class="pari">
			<td class="center">12/05/2014</td>
			<td class="center">12/05/2014</td>
			<td class="right">27</td>
			<td class="right">-815,50</td>
		</tr>
		<tr class="spacer">
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr class="total">
	       <th colspan="3">TOTALE</td>
		   <td>-1.630.000</td>
	    </tr>
	</tbody>
</table>

<h4>(D) Tabella che si trasforma in accordion</h4>

<table cellspacing="0" cellpadding="0" border="0" class="responsive accordion-table">
	<caption>Conto corrente di addebito: 32381</caption>
	<thead>
		<tr>
			<th class="left">Tiplogia</th>
			<th class="center">Inizio periodo</th>
			<th class="center">Fine periodo</th>
			<th class="center">Rapporto</th>
			<th class="right">Giorni</th>	
			<th class="right">Imponibile</th>		
			<th class="right">Importo</th>	
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
			<td class="right">-815,50</td>
		</tr>
		<tr class="spacer">
			<td colspan="7">&nbsp;</td>
		</tr>
		<tr class="total">
	       <th colspan="6">TOTALE</td>
		   <td>-815,50</td>
	    </tr>
	</tbody>
</table>

<table cellspacing="0" cellpadding="0" border="0" class="responsive accordion-table">
	<caption>Conto corrente di addebito: 32381</caption>
	<thead>
		<tr>
			<th class="left">Tiplogia</th>
			<th class="center">Inizio periodo</th>
			<th class="center">Fine periodo</th>
			<th class="center">Rapporto</th>
			<th class="right">Giorni</th>	
			<th class="right">Imponibile</th>		
			<th class="right">Importo</th>	
		</tr>
	</thead>
	<tbody>
		<tr class="dispari">
			<td class="left border-right" rowspan="4">LINEE VINCOLATE</td>
			<td class="center">12/05/2014</td>
			<td class="center">12/05/2014</td>
			<td class="center">123456789012</td>
			<td class="right">227</td>
			<td class="right">7.234.567,50</td>
			<td class="right">-74</td>
		</tr>
		<tr class="pari">
			<td class="center">12/05/2014</td>
			<td class="center">12/05/2014</td>
			<td class="center">123456789012</td>
			<td class="right">2.227</td>
			<td class="right">7.234.567,50</td>
			<td class="right">-225,20</td>
		</tr>
		<tr class="dispari">
			<td class="center">12/05/2014</td>
			<td class="center">12/05/2014</td>
			<td class="center">123456789012</td>
			<td class="right">227</td>
			<td class="right">7.234.567,50</td>
			<td class="right">-300,40</td>
		</tr>
		<tr class="pari">
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
			<td class="right">227</td>
			<td class="right">7.234.567,50</td>
			<td class="right">-74</td>
		</tr>
		<tr class="dispari">
			<td class="left">LOREM IPSUM</td>
			<td class="center">12/05/2014</td>
			<td class="center">12/05/2014</td>
			<td class="center">123456789012</td>
			<td class="right">3.427</td>
			<td class="right">7.234.567,50</td>
			<td class="right">-74</td>
		</tr>
		<tr class="spacer">
			<td colspan="7">&nbsp;</td>
		</tr>
		<tr class="total">
	       <th colspan="6">TOTALE</td>
		   <td>-10.815,50</td>
	    </tr>
	</tbody>
</table>

<table cellspacing="0" cellpadding="0" border="0" class="responsive accordion-table">
	<caption>Conguaglio</caption>
	<thead>	
		<tr>
			<th class="center">Inizio periodo</th>
			<th class="center">Fine periodo</th>
			<th class="right">Giorni</th>
			<th class="right">Importo</th>	
		</tr>
	</thead>
	<tbody>		
		<tr class="dispari">
			<td class="center">12/05/2014</td>
			<td class="center">12/05/2014</td>
			<td class="right">27</td>
			<td class="right">-815,50</td>
		</tr>
		<tr class="pari">
			<td class="center">12/05/2014</td>
			<td class="center">12/05/2014</td>
			<td class="right">327</td>
			<td class="right">-815,50</td>
		</tr>
		<tr class="spacer">
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr class="total">
	       <th colspan="3">TOTALE</td>
		   <td>-1.631,00</td>
	    </tr>
	</tbody>
</table>
-->

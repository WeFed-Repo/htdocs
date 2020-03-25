<!-- FUNZIONE  DI SELEZIONE DELLA COLONNA-->
<script type="text/javascript">
function selectcol(el) 
	{
	var radiobtn = $('table.activetable th input');
	$(radiobtn).each(function(index) {
	if (radiobtn.eq(index).is(':checked')) {radiobtn.eq(index).parents().eq(0).css('font-weight','bold')} 
	else {radiobtn.eq(index).parents().eq(0).css('font-weight','normal')}
    })
    }
</script>

<h1>Lorem ipsum</h1>
<div class="divtabellalist">
	<table border="0" class="tabellalist">
		<tr>
			<td class="off"><a title="Scopri" href="/connect.php?page=str_interna_priv.php&amp;tpl=wetrade/tpl_priv_lib_wt_deposito_titoli_scopri.php&liv1=TR&tr2=4&tr3=0&tr4=0">Scopri</a></td>
			<td class="on"><a title="Apri" href="/connect.php?page=str_interna_priv.php&amp;tpl=wetrade/tpl_priv_lib_wt_deposito_titoli_apri.php&liv1=TR&tr2=4&tr3=0&tr4=0">Apri</a></td>
			<td class="off"><a title="Chiusura - Trasferimento" href="/connect.php?page=str_interna_priv.php&amp;tpl=wetrade/tpl_priv_lib_wt_deposito_titoli_chiusura.php&liv1=TR&tr2=4&tr3=0&tr4=0">Chiusura - Trasferimento</a></td>
		</tr>
	</table>
</div>
<br>

<div class="boxesito positivo">
	<div class="middle"><span class="imgCont"></span>
	<div class="text"><p class="noPaddbottom"><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus</p>
	<ol>
		<li><strong>Lorem ipsum dolor sit amet adipiscig</strong></li>
		<li><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>Lorem ipsum dolor sit amet adipiscig<br>Lorem ipsum dolor sit amet adipiscig</li>
	</ol>
	<p class="noPaddbottom">Lorem ipsum dolor sit amet adipiscig<br>At vero eos et accusamus</p>
	
	
	</div>
	
	</div>
</div>
<br>
<h3 class="verde">Lorem ipsum</h3>
<div class="linkpdfdim"><a href="#1">lorem ipsum lorem ipsum</a></div> <img class="icopdfdim" src="/img/ret/ico2or_pdf.gif" /><br class="clear" />
<div class="linkpdfdim"><a href="#1">lorem ipsum lorem ipsum</a></div> <img class="icopdfdim" src="/img/ret/ico2or_pdf.gif" /><br class="clear" />



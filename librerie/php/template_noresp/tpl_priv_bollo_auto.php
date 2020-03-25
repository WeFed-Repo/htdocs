<h1>Bollo auto</h1>

<div class="tithelp"><div class="helpleft">lorem ipsum</div><br class="clear"/></div>
<div class="borderFormRounded margBottomLarge">
	<div class="formGeneric">
		<form>
			<div class="row-fluid">
				<div><h2 class="subTitForm">lorem ipsum dolor</h2></div>
			</div>
			<div class="row-fluid">
				<div class="span6"><label class="nomefield">lorem ipsum dolor</label><span class="output">lorem ipsum dolor</span></div>
				<div class="span6"><label class="nomefield">lorem ipsum dolor</label><span class="output">lorem ipsum dolor</span></div>
			</div>
			<div class="row-fluid">
				<div class="span6"><label class="nomefield">lorem ipsum dolor</label><span class="output">XXXXXXXXXXX</span></div>
			</div>
			<div class="row-fluid">
				<div class="span6"><label class="nomefield">lorem ipsum dolor</label><span class="output">XX/XX/XXXX</span></div>
				<div class="span6"><label class="nomefield">lorem ipsum dolor</label><span class="output">lorem ipsum dolor</span></div>
			</div>
			<div class="row-fluid">
				<div><h2 class="subTitForm">lorem ipsum dolor</h2></div>
			</div>
			<div class="row-fluid">
				<div class="span6"><label class="nomefield">lorem ipsum dolor</label><span class="output">lorem ipsum dolor</span></div>
				<div class="span6"><label class="nomefield">lorem ipsum dolor</label><span class="output">lorem ipsum dolor</span></div>
			</div>
		</form>
	</div>
</div>
	<?php
	if ($customer == "ret")
	{
	?>
		<?php include("../librerie/include/commons/form/form_black_001_priv.html"); ?>
	<?php
			}
	 ?>
<br class="clear" />




	<?php
	if ($customer == "ret")
	{
	?>
		<div class="fooform">		
			<div class="fooformtop">Step <strong>2</strong> di 2</div>
			<div class="fooformleft"><div><a id="" class="btnformleft" href="connect.php?page=str_interna_priv.php&tpl=tpl_priv_solidale_sepa_rie_esi.php" title="indietro"><img src="/img/ret/btn_left_bi.gif"><span>prosegui</span><img src="/img/ret/btn_right_bi.gif"></a></div></div>
			<div class="fooformright"><div><a id="" class="btnformright" href="connect.php?page=str_interna_priv.php&tpl=tpl_priv_solidale_sepa_rie_esi.php" title="prosegui"><img src="/img/ret/btn_left_ar.gif"><span>prosegui</span><img src="/img/ret/btn_right_ar.gif"></a></div></div>	
		</div>
	<?php
			} else {
	 ?>
	 		<div class="fooform">		
			<div class="fooformtop">Step <strong>2</strong> di 2</div>
			<div class="fooformleft"><div><a id="" class="btnformleft" href="connect.php?page=str_interna_priv.php&tpl=tpl_priv_solidale_sepa_rie_esi.php" title="indietro"><img src="/img/bus/btn_left_bi.gif"><span>prosegui</span><img src="/img/bus/btn_right_bi.gif"></a></div></div>
			<div class="fooformright"><div><a id="" class="btnformright" href="connect.php?page=str_interna_priv.php&tpl=tpl_priv_solidale_sepa_rie_esi.php" title="prosegui"><img src="/img/bus/btn_left_ar.gif"><span>prosegui</span><img src="/img/bus/btn_right_ar.gif"></a></div></div>	
		</div>
	 	<?php
			}
	 ?>

	

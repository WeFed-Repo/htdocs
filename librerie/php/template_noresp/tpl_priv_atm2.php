<h1>LOREM IPSUM</h1>
<div id="bonificoCont">
<div class="tithelp"><div class="helpleft">lorem ipsum</div><br class="clear"/></div>
<div class="borderFormRounded margBottomLarge">
	<div class="formGeneric">
	<form>
		<div class="row-fluid">
			<div class="span5">
				<label class="nomefield">lorem ipsum dolor</label>
				<span class="output">lorem ipsum dolor sit </span>
			</div>
			<div class="span5">
				<label class="nomefield">lorem ipsum dolor</label>
				<span class="output">lorem ipsum dolor sit </span>
			</div>
			<div class="span2">&nbsp;</span>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span5">
				<label class="nomefield">lorem ipsum dolor</label>
				<span class="output">lorem ipsum dolor sit </span>
			</div>
			<div class="span5">
				<label class="nomefield">lorem ipsum dolor</label>
				<span class="output">lorem ipsum dolor sit </span>
			</div>
			<div class="span2">
			<label class="nomefield">lorem</label>
			<img src="/wscmn/img/ret/logo_atm.gif" />
			</div>
		</div>
		<div class="row-fluid">
			<div class="span5">
				<label class="nomefield">lorem ipsum dolor</label>
				<span class="output">lorem ipsum dolor sit </span>
			</div>
			<div class="span5">&nbsp;</div>
			<div class="span2">&nbsp;</div>
		</div>

	</form>
	</div>
</div>
<br class="clear" />

<p><strong>Inserisci il codice di controllo</strong> che ti abbiamo inviato al numero <strong>348****000</strong></p>
<div class="formGeneric codiceCont">
	<form class="formCentered" autocomplete="off">
		<fieldset class="row">
			<label class="nomefield">Codice di controllo:</label>
			<input type="text">
		</fieldset>
	</form>
</div>

</div>

<div class="fooform">		
		<div class="fooformtop">Step <strong>2</strong> di 2</div>
		<div class="fooformleft"><div><a class="btnformleft" href="javascript:;" title="prosegui"><img src="/img/ret/btn_left_bi.gif"><span>indietro</span><img src="/img/ret/btn_right_bi.gif"></a></div></div>
		<div class="fooformright"><div><a id="proseguiBonifico" class="btnformright" href="javascript:;" title="prosegui"><img src="/img/ret/btn_left_ar.gif"><span>prosegui</span><img src="/img/ret/btn_right_ar.gif"></a></div></div>	
</div>
<br class="clear">
</div>

<script type="text/javascript">	
$('#proseguiBonifico').on('click',function()
{	
	$("#prezzi").show();		
	setLoadingOnObject('prezzi','','');
	$("#prezzi").delay(2000).show(function(){
		unsetLoadingOnObject('prezzi');
	});
})

</script>

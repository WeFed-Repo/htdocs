<?php
	$consultare = false;
?>
<?php
	if ($consultare) {
?>
<script>
	$(document).ready(function() {
	
	setMsgOn({
			wrapper: '#contenuti',
			msgText: 'Per visualizzare la pagina accedi in modalità Consultare e Disporre',
			boxClass: 'attenzione',
			closeable: false,
			addictClass: 'fixedTop'
		});
	
	});
</script>
<?php
	}
?>
<h1>tutte le offerte</h1>
<div class="bannerVetrina">
	<h2 class="vetrinaTit">Lorem ipsum</h2>
	<p>iscriviti alla Newsletter e sarai sempre informato su tutte le novit&agrave; </p>
	<form class="formGeneric">
		<div class="row-fluid ">
			<input id="informativaVetrina" type="checkbox" onclick="openPopOverLayer('layeralertVetrina', 'floating', 1);">
			<span class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et </span>
		</div>
	</form>
</div>
<br class="clear"/><br>
<div class="vetrinaProdWrapper">
	<div class="vetrinaProd">
		<img src="/img/ret/img_vetrina_balzac1.jpg" alt=""/>
		<div class="vetrinaProdtext">
			<div class=" row-fluid">
				<div class="span7">
					<span class="vetrinaProdDescr">Weekend per 2 persone in Sardegna</span>
				</div>
				<div class="span5 txtAlRight">
					<span class="vetrinaProdPrice">100,00 &euro;</span>
				</div>
			</div>
			<div class="row-fluid vetrinaProdDett">
				<div class="span7">
					<span>Permette al tuo bambino di stare a tavola alla giusta altezza</span>
				</div>
				<div class="span5 txtAlRight">
					<span>Lorem ipsum dolor sit <span class="strike">lorem ipusm</span></span>
				</div>
			</div>
		</div>
		<div class="dettagliVetrinaText">
		<div class="innerDettagliVetrinaText">
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
 
<p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
 
The Suite Club
Via tal dei tali  42, 20146 Milano (MI)</p>
</div>

</div>
		<div class="dettagliVetrinaBottom">
			<a class="dettagliVetrinaBtn" href="javascript:;" onclick="showDetailVetrina(this)"></a>
		</div>
	</div>
	<div class="vetrinaProdMenu">
		<span class="scadenza">L'offerta scade il 12/04/2014</span>
		<div class="flRight">	
			<a href="#"><img src="/img/ret/btn_imposta_obiettivo.gif"/></a>
			<a href="#"><img src="/img/ret/btn_acquista.gif"/></a>
		</div>
	</div>
</div>
<div class="vetrinaProdWrapper">
	<div class="vetrinaProd">
		<img src="/img/ret/img_vetrina_balzac2.jpg" alt=""/>
		<div class="vetrinaProdtext">
			<div class=" row-fluid">
				<div class="span7">
					<span class="vetrinaProdDescr">Weekend per 2 persone in Sardegna</span>
				</div>
				<div class="span5 txtAlRight">
					<span class="vetrinaProdPrice">100,00 &euro;</span>
				</div>
			</div>
			<div class="row-fluid vetrinaProdDett">
				<div class="span7">
					<span>Permette al tuo bambino di stare a tavola alla giusta altezza</span>
				</div>
				<div class="span5 txtAlRight">
					<span>Lorem ipsum dolor sit <span class="strike">lorem ipusm</span></span>
				</div>
			</div>
		</div>
		<div class="dettagliVetrinaText">
		<div class="innerDettagliVetrinaText">
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
 
<p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
 
The Suite Club
Via tal dei tali  42, 20146 Milano (MI)</p>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>


</div>

</div>
		<div class="dettagliVetrinaBottom">
			<a class="dettagliVetrinaBtn" href="javascript:;" onclick="showDetailVetrina(this)"></a>
		</div>
	</div>
	<div class="vetrinaProdMenu">
		<span class="scadenza">L'offerta scade il 12/04/2014</span>
		<div class="flRight">	
			<a href="#"><img src="/img/ret/btn_imposta_obiettivo.gif"/></a>
			<a href="#"><img src="/img/ret/btn_acquista.gif"/></a>
		</div>
	</div>
</div>


<div id="layeralertVetrina" class="layeralert3" style="display: none;">
	<div class="head handle" onmouseover="this.style.cursor='move'; $('layeralertVetrina').dragHandle = new Draggable('layeralertVetrina',{handle: 'handle'}, { scroll: window });"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="closePopOverLayer('layeralertVetrina')"/></div>
		<div class="body flLeft">
			<h2 class="vetrinaTit"><span class="flLeft">Informativa e Consensi Privacy</span> <img src="/img/ret/logo_bazak_vetrina.jpg" class="flLeft"/></h2>
			<br class="clear" />
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</p>
			<div class="row-fluid fieldWrap">
				<span><a class="hovfincont" href="javascript:;"><span class="hovfin"></span><input type="checkbox" id="docVetrina"></a></span>
				<span class="text">Lorem ipsum dolor sit amet</span>
			</div>
			<br>
			<div class="paddLeftSmall">
				<a class="flLeft margRightSmall" href="#1"><img src="/img/ret/pdf.gif"></a>
				<span class="textSmall"><a class="underline" href="#1">laboris nisi ut aliquip ex </a></span>
			</div>
			<br class="clear"><br>
			<div class="paddLeftSmall">
				<a class="flLeft margRightSmall" href="#1"><img src="/img/ret/pdf.gif"></a>
				<span class="textSmall"><a class="underline" href="#1">laboris nisi ut aliquip ex </a></span>
			</div>
			<br class="clear"><br>
			<p>Verrai registrato al sito  Bazak.it con i seguenti dati:</p>
			<div class="borderFormRounded">
				<form class="formGeneric">	
					<div class="row-fluid">
						<div class="span4">
							<label class="nomefield">Lorem </label>
							<span class="output">Lorem ipsum dolo</span>
						</div>
						<div class="span4">
							<label class="nomefield">Lorem </label>
							<span class="output">Lorem ipsum dolo</span>
						</div>
						<div class="span4">
							<label class="nomefield">Lorem </label>
							<span class="output">Lorem ipsum dolo</span>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span6">
							<label class="nomefield">Lorem </label>
							<span class="output">Lorem ipsum dolor sit lorem ipsum </span>
						</div>
						<div class="span6">
							<label class="nomefield">Lorem </label>
							<span class="output">Lorem ipsum dolo</span>
						</div>
					</div>
				</form>
			</div>
			<br class="clear"><br>
				<a title="Lorem ipsum" class="btnformleft" href="javascript:;" onclick="closePopOverLayer('layeralertVetrina');$('#informativaVetrina').attr('checked',false).attr('disabled',false);resetErrors('#layeralertVetrina')"><img alt="" src="/img/ret/btn_left_bi.gif"><span>chiudi</span><img alt="" src="/img/ret/btn_right_bi.gif"></a>
				<a title="Lorem ipsum" class="btnformright" href="javascript:;" onclick="if($('#docVetrina').is(':checked')){closePopOverLayer('layeralertVetrina');$('#informativaVetrina').attr('checked','checked').attr('disabled','disabled')} else{setError('#docVetrina','lorem ipsum');$('#docVetrina').focus()}"><img alt="" src="/img/ret/btn_left_ar.gif"><span>lorem</span><img alt="" src="/img/ret/btn_right_ar.gif"></a>
		</div>
		<br class="clear">
	<div class="foot"></div>
</div>
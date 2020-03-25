<!--gestion errore front-end-->
<script type="text/javascript">	
	$(function () {
		$("#demoSetErrorBtn").click(function () {
			// Check giroconto
			var errors = [],
				nomeProfiloText = $("#nomeProfiloId")
				
			if (nomeProfiloText.val() === '') {
				errors.push({ field: nomeProfiloText, text: "Verifica" });
			}
			
			setErrors(errors, "#formCreaProfilo");
			if (errors.length) {
				$(errors[0].field).trigger('focus');
			}
			return (!errors.length);
		});
	});
</script>

<h1>CREAZIONE PROFILO - DATI</h1>
<br>
<div class="onStep stop step">
	<span>1</span> Inserisci i dati
</div>   
<div class="step">
	<span>2</span> Abilita le funzion
</div>  
<div class="step">
	<span>3</span> Abilita i c/c
</div>
<div class="step">
	<span>4</span> Abilita i codici SIA
</div>
<div class="lastStep step">
	<span>5</span>Abilita i rapporti
</div>
<br class="clear" />
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ultricies mi nec nunc cursus et hendrerit urna mollis. Sed commodo gravida erat, non elementum mi eleifend ut. Fusce vehicula magna eget felis iaculis egestas. Nam dapibus sollicitudin volutpat.</p>
<br class="clear">
<div class="formCenteredheader">
<div class="tithelp">
	<div class="helpleft paddTopMedium">Lorem ipsum</div>
	<span class="expleft"><a href="javascript:;" onclick="openPopGuida('/connect.php?page=tpl_popup_priv_book_bus_guida.php');" title=""><br>Guida allo step 1</a></span>
</div>
<br class="clear">
</div>
<div class="formCenteredwrapper">
	<form class="formGeneric formCentered" autocomplete="off" id="formCreaProfilo">
		<div class="row-fluid">
			<div class="span6">
				<label class="nomefield">Nome profilo*(massimo 8 caratteri):</label>
				<input type="text" maxlength="8" id="nomeProfiloId">
			</div>
			<div class="span6">
				<label class="nomefield">Descrizione:</label>
				<textarea rows="3"></textarea>
			</div>
		</div>
		<div>
			<div class="aButtonconsLeft">
				<span class="btnc"><a class="aButtonClear" href="javascript:;"><span>lorem ipsum</span></a></span>
			</div>
			<div class="aButtonconsRight">
				<span class="btnc"><a class="aButton" href="javascript:;" id="demoSetErrorBtn"><span>lorem ipsum</span></a></span>
			</div><br>
		</div>
	</form>
	<br class="clear">
</div>

<h1>Postazioni autorizzate</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi nihil voluptate consectetur eius placeat maxime at, error tenetur itaque, repellendus earum eos ex ipsa, tempore pariatur libero ullam voluptas voluptates? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui saepe harum suscipit aperiam, facere praesentium impedit libero ipsum repellendus natus rerum dolore cumque exercitationem iure non, voluptatem recusandae et voluptatibus.</p>
<!-- Tabella gestione -->
<script type="text/javascript">
$(function(){
	/* Controllo checkbox */
	$("#postAutAll").change(function(){
		var checked = $(this).is(":checked");
		$("input[name=postaut]").attr("checked",checked)
	});
	$("input[name=postaut]").change(function(){
		$("#postAutAll").attr("checked",false)
	});

	/* Innesco overlay conferma */
	$("#demoOverlayBtn").click(function(){

		openPopOverLayer("postAutConferma");

	});	
	$("#postAutConferma .aButtonClear").click(function(){closePopOverLayer("postAutConferma")})

});
</script>

<!-- OVERLAYER CONFERMA -->
<div id="postAutConferma" class="overlayer">
	<a class="close"></a>
	<div class="overlayerCont">
		<h2>Sospendi lorem ipsum</h2>
		<h3>Lorem ipsam perferendis, nemo dolorem autem excepturi.</h3>
		<p class="paddBottomLarge">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero ipsam perferendis, nemo dolorem autem excepturi doloremque quia harum sapiente debitis quibusdam quis nulla illum non fuga quidem, in minus inventore.</p>
		<div class="paddBottomMedium">
			<div class="aButtonconsLeft">
				<span class="btnc"><a class="aButtonClear" href="javascript:;"><span>Annulla</span></a></span>
			</div>
			<div class="aButtonconsRight">
				<span class="btnc"><a class="aButton" href="javascript:;" id="demoSetErrorBtn"><span>Conferma</span></a></span>
			</div>
		</div>
	</div>
</div>
<!-- FINE OVERLAYER CONFERMA -->

<table class="dettTable margBottomLarge" cellpadding="0" cellspacing="0">
	<!-- Heading -->
	<tr>
		<th width="20"><input type="checkbox" name="postautAll" id="postAutAll"></th>
		<th>Postazione</th>
		<th>Data attivazione</span></th>
	</tr>
	<!-- Fine heading -->
	<tr>
		<td><input type="checkbox" name="postaut"></td>
		<td>Lorem</td>
		<td>25/07/2015 alle 18.03</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="postaut"></td>
		<td>Ipsum</td>
		<td>21/09/2015 alle 11.03</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="postaut"></td>
		<td>Dolor amet consectetur</td>
		<td>21/09/2015 alle 11.03</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="postaut"></td>
		<td>Adipiscing elit</td>
		<td>21/09/2015 alle 11.03</td>
	</tr>
</table>
<!-- Fine tabella gestione -->

<div class="aButtoncons">
	<div class="aButtonconsRight">
		<span class="btnc"><a class="aButton" href="javascript:;" id="demoOverlayBtn"><span>lorem ipsum</span></a></span>
	</div>
</div>
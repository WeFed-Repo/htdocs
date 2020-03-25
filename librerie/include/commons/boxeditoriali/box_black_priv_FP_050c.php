<!--
<div class="userinfoc" id="pagePaolo">
	<img src="/img/ret/img_paolo_big2.jpg" class="imgpaolo">
	<div class="chiedi">Paolo pu&ograve; esserti d'aiuto!<br>
		<form autocomplete="off">
			<div class="inputSearch">
				<input type="text" placeholder="fagli una domanda..." id="paoloDomanda" class="txtchiedi">
				<span class="icoSearch"></span>
			</div>
			<a title="chiedi" href="javascript:;" class="buttonchiedi"><img src="/img/ret/str_btchiedi.gif"></a>			
		</form>	
	</div>
</div>
-->

<?php
if ($bank=="bpm") {
?>
<!-- CODICE COMPLEANNO PAOLO -->
<script type="text/javascript">
	// Funzione chiusura (da customizzare con chiamata)
	$(function(){
		// Chiusura del banner
		$("#birthdayPaolo a.close").click(function() {
			$("#birthdayPaolo").fadeOut();
			// ...eventuale codice per memorizzazione chiusura QUI...
		});
	})
</script>
<div id="birthdayPaolo">
	<p><span>Rodrigo Edward Mariapaolo</span>, oggi &egrave; il tuo compleanno. Tanti auguri da BPM!</p>
	<a class="close" href="javascript:;"></a>
</div>
<!-- FINE CODICE COMPLEANNO -->
<?php
}
?>
<form class="formGenerico borderFormRounded" role="form" id="form03">
	<div class="row">
		<div class="col-sm-12">
			<label class="control-label label-paolo">Paolo pu&ograve; esserti d'aiuto!</label>
			<div class="form-inline">
				<div class="input-group">
					<div class="input-group-addon first input-btn input-paolo">
						<img src="/wscmn/fe/img/priv_tool_paolo.png">
					</div>
					<div class="editable-input">
						<input maxlength="" id="paoloDomanda" value="" type="text" name="" class="form-control clear-x" placeholder="fagli una domanda..."><span class="editable-clear-x" style="display: none"><i class="icon icon-close icon-1x"></i></span>
					</div>
					<div class="input-group-addon input-btn">
						<a type="button" class="btn btn-primary btn-minw" id="">Chiedi</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

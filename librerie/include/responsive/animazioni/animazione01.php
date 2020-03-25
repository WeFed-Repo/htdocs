<style style="text/css">
.res-content p, .res-slide p{height:78px;padding:10px;border:1px solid #aaa;}
.res-content p{background-color:#eee;}
#res-esempio{height:100px;margin-bottom:20px;}
#res-slide-1 p{background-color:#ffffee;}
#res-slide-2 p{background-color:#ffeeff;}
#res-slide-3 p{background-color:#eeffff;}
#res-slide-4 p{background-color:#eeffee;}
#res-msg{clear:both;padding:10px;}
</style>

<div id="res-esempio" class="res-container">
	<div class="res-content">
		<p>content</p>
	</div>
	<div id="res-slide-1" class="res-slide">
		<p>Slide sopra</p>
	</div>
	<div id="res-slide-2" class="res-slide">
		<p>Slide sotto</p>
	</div>
	<div id="res-slide-3" class="res-slide">
		<p>Slide sinistra</p>
	</div>
	<div id="res-slide-4" class="res-slide">
		<p>Slide destra</p>
	</div>
</div>

<div class="borderFormRounded searchFilter">
	<div class="formGeneric">
		<form>
			<div>
				<span class="nomefield">Seleziona la slide da visualizzare</span>
				<div class="row-fluid">
					<label class="span3"><input id="cb-slide-1" type="checkbox" name="" value="">Slide sopra</label>
					<label class="span3"><input id="cb-slide-2" type="checkbox" name="" value="">Slide sotto</label>
					<label class="span3"><input id="cb-slide-3" type="checkbox" name="" value="">Slide sinistra</label>
					<label class="span3"><input id="cb-slide-4" type="checkbox" name="" value="">Slide destra</label>
				</div>
			</div>
		</form>
	</div>
</div>

<p id="res-msg">Event: <span id="res-msg-text"></span></p>

<script type="text/javascript">
var resExample = null;
$(function () {
	var $resEsempio = $('#res-esempio'),
		$resSlide1 = $('#res-slide-1'),
		$resSlide2 = $('#res-slide-2'),
		$resMsgText = $('#res-msg-text'),
		duration = 500,
		directionArr = ['top', 'bottom', 'left', 'right'];
	resExample = result({
		container: $resEsempio,
		duration: duration
	});
	$('#cb-slide-1, #cb-slide-2, #cb-slide-3, #cb-slide-4').click(function (e) {
		var $el = $(this),
			slidNum = parseFloat($el.attr('id').replace('cb-slide-', '')),
			$resSlide = $('#res-slide-' + slidNum),
			direction = directionArr[slidNum - 1];
		if (!resExample.isSliding()) {
			if ($el.prop('checked')) {
				resExample.slideIn($resSlide, direction);
			} else {
				resExample.slideOut($resSlide, direction);
			}
		} else {
			e.preventDefault();
		}
	});
	$resEsempio.on('slideinstart slideinstop slideoutstart slideoutstop', function (e) {
		$resMsgText.html(e.slide.attr('id') + ' ' + e.type);
	});
});
</script>
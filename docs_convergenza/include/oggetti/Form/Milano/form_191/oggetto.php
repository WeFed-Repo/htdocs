<form class="formGenerico borderFormRounded preventivatore" role="form">
    <div class="form-group">
        <label class="control-label">Slider con testo sul cursore</label>
	    <div id="prevenSlider2" class="slider-box sliderWithTicks">
            <div class="slider-wrap">
                <div class="slider-trail trail-bg">
                    <div class="ui-slider-handle">
                        <div class="sliderText"></div>
                    </div>
                </div>
				<div class="sliderTicks"></div>
            </div>
	    </div>
	    <select class="form-control slider-alt"></select>
    </div>
</form>

<script>
	$(function () {
		$("#prevenSlider2").sliderPlus({
			min: 1,
			max: 30,
			step: 1,
			value: 1
		});
	});
</script>
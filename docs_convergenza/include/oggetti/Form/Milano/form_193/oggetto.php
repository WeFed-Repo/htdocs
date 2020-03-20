<form class="formGenerico borderFormRounded preventivatore" role="form">
    <div class="form-group">
        <label class="control-label">Slider senza tick intermedie</label>
	    <div id="prevenSlider4" class="slider-box sliderWithTicks sliderNoMidTicks">
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
		$("#prevenSlider4").sliderPlus({
			min: 5,
			max: 40,
			step: 1,
			value: 20
		});
	});
</script>
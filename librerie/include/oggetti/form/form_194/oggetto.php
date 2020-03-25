<form class="formGenerico borderFormRounded preventivatore" role="form">
    <div class="form-group">
        <label class="control-label">Slider con spinners</label>
        <div id="prevenSlider5" class="slider-box sliderWithTicks">
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
		$("#prevenSlider5").sliderPlus({
			min: 10,
			max: 30,
			step: 1,
			value: 14,
			spinners: true
		});
	});
</script>
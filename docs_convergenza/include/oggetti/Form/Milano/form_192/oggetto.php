<form class="formGenerico borderFormRounded preventivatore" role="form">
    <div class="form-group">
        <label class="control-label">Slider con milestone</label>
	    <div id="prevenSlider3" class="slider-box sliderWithTicks">
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
		$("#prevenSlider3").sliderPlus({
			min: 5,
			max: 40,
			step: 1,
			value: 20,
			milestone: 5
		});
	});
</script>
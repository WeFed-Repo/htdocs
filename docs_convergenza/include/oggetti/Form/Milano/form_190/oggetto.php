<form class="formGenerico borderFormRounded preventivatore" role="form">
    <div class="form-group">
        <label class="control-label">Slider con highlight</label>
	    <div id="prevenSlider1" class="slider-box sliderWithTicks">
            <div class="slider-wrap">
                <div class="slider-trail trail-bg">
                    <div class="ui-slider-handle">
                        <div class="slider-cursor"></div>
                    </div>
                </div>
				<div class="sliderTicks sliderTicksHighlight"></div>
            </div>
	    </div>
	    <select class="form-control slider-alt"></select>
    </div>
</form>

<script>
	$(function () {
		$("#prevenSlider1").sliderPlus({
			min: 50000,
			max: 250000,
			step: 50000,
			milestone: 50000,
			value: 50000,
			numberFormat: function (val) {
				return (val / 1000) + '.000';
			}
		});
	});
</script>
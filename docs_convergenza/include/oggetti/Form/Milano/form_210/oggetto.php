<form class="formGenerico borderFormRounded" role="form">
    <div class="form-group">
        <label class="control-label">Slider Range</label>
        <div class="sliderRange">
        	<div id="sampleSliderRange"></div>
		</div>
	</div>
</form>

<script>
	$(function () {

		$("#sampleSliderRange").sliderRange({
				range: true,
				min: Number(-3.33),
				max: Number(5),
				step: 0.01,
				values: [-1.5, 4],
                milestones: 7,
                unit: "%"
		});

	});
</script>
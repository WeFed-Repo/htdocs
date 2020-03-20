<script>
    $(function () {
        var $checkboxTooltipToggle = $("#checkboxTooltipToggle");
        var $checkboxTooltip = $('#checkboxTooltip');

        $checkboxTooltip.tooltip({
            animation: false,
            trigger: "manual",
            title: "Lorem ipsum"
        });

        $checkboxTooltipToggle.click(function (e) {
            console.log("click");
            e.preventDefault();
            if (!$checkboxTooltip.prop('checked')) {
                $checkboxTooltip.tooltip('show');
            }
            return false;
        });
    });
</script>
<div class="formGenerico boxConto">
    <div class="form-group">
        <div class="col-sm-4">
            <a id="checkboxTooltipToggle" class="control-label" href="javascript:">Attiva il tooltip sulla checkbox</a>
        </div>
        <div class="col-sm-4">
            <div class="checkbox inline">
                <label id="checkboxTooltipWrapper" class="textWrapper closeable">
                    <input id="checkboxTooltip" type="checkbox" name="">
                    <span class="text">Lorem ipsum dolor sit amet</span>
                </label>
            </div>
        </div>
    </div>
</div>

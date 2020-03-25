<div class="panel-group" id="accordion3" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
                Collapsible Group Item #1<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
              </a>
            </h4>
        </div>
        <div id="collapseOne3" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
        </div>
    </div>
    <!--- ISTRUZIONI ---
        Aggiungo la classe "disabled" sull'elemento "panel-default" da disabilitare.
    -->
    <div class="panel panel-default disabled">
        <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" href="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo3">
          Collapsible Group Item #2<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
        </a>
      </h4>
        </div>
        <div id="collapseTwo3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
          Collapsible Group Item #3 <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
        </a>
      </h4>
        </div>
        <div id="collapseThree3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-6">
        <form class="formGenerico borderFormRounded preventivatore" role="form">
            <div class="form-group">
                <label id="toggleAccLabel" class="control-label">Attiva/disattiva il secondo elemento dell'accordion</label>
                <div id="toggleAccGroup" class="hidden-xs btn-group btn-group-justified" role="group" aria-labelledby="toggleAccLabel">
                  <a href="#!" type="button" class="btn" role="button" data-value="1">Attivo</a>
                  <a href="#!" type="button" class="btn" role="button" data-value="0">Disattivo</a>
                </div>
                <select name="fumatore" class="visible-xs form-control btn-group-select"></select>
            </div>
        </form>
    </div>
</div>
<script>
    var toggleAccGroup = $('#toggleAccGroup').buttonGroup({
        change: function (e, value) {
            var panelCollapse = $('#collapseTwo3'),
                panelDefault = panelCollapse.closest('.panel-default');
            if (value === '0') {
                panelCollapse.collapse('hide');
                panelDefault.addClass('disabled');
            } else {
                panelDefault.removeClass('disabled');
            }
        }
    });

    // Metodi disponibili
    toggleAccGroup.buttonGroup('setValue', '0');
</script>


<form>
    <div class="">
        <ul id="tabs" class="form-row radio-tabs">
            <li class="form-group radio big radio-tabs-item col-sm-6 col-md-6 pl-0">
                <!-- l'azione scatenata dal radio deve essere azionata al click su tutto il tab, da mettere quindi sull a href-->
                <a class="radio-tabs-link active" href="javascript:;">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" value="facilitata" checked>
                    <label class="form-check-label" for="inlineRadioOptions">Facilitata </label>
                    <p>Delega disposta direttamente dal contribuente sul proprio conto</p>
                </a>
                <button id="viewModalFacilitata" type="button" class="btn-icon-help ml-2" data-bind="click: viewModalFacilitata"></button>
            </li>
            <li class="form-group radio big radio-tabs-item col-sm-6 col-md-6 pr-0">
                <!-- l'azione scatenata dal radio deve essere azionata al click su tutto il tab, da mettere quindi sull a href-->
                <a class="radio-tabs-link" href="javascript:;">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" value="libera">
                    <label class="form-check-label" for="inlineRadioOptions">Libera </label>
                    <p>Tutte le casistiche</p>
                </a>
                <button id="viewModalLibera" type="button" class="btn-icon-help ml-2" data-bind="click: viewModalLibera"></button>
            </li>
        </ul>
    </div>
</form>
<script>
    $(function() {
    initRadioTab()
    })
</script>

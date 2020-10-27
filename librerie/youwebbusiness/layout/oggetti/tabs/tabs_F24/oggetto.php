
        <form>
            <div class="nav-tabs-container">
            <ul id="tabs" class="form-row nav nav-tabs tabsWithRadio" tm-tabs-navigator="">
                    <li class="form-group radio big nav-item col-sm-6 col-md-6 pl-0">
                        <!-- l'azione scatenata dal radio deve essere azionata al click su tutto il tab, da mettere quindi sull a href-->
                        <a class="nav-link active" href="javascript:;">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" value="facilitata">
                        <label class="form-check-label" for="inlineRadioOptions">Facilitata </label>
                        <p>Delega disposta direttamente dal contribuente sul proprio conto</p>
                        </a>
                        <button id="viewModalFacilitata" type="button" class="btn-icon-help ml-2" data-bind="click: viewModalFacilitata"></button>
                    </li>
                    <li class="form-group radio big nav-item col-sm-6 col-md-6 pr-0">
                        <!-- l'azione scatenata dal radio deve essere azionata al click su tutto il tab, da mettere quindi sull a href-->
                        <a class="nav-link" href="javascript:;">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" value="libera">
                        <label class="form-check-label" for="inlineRadioOptions">Libera </label>
                        <p>Tutte le casistiche</p>
                        </a>
                        <button id="viewModalLibera" type="button" class="btn-icon-help ml-2" data-bind="click: viewModalLibera"></button>
                    </li>
                </ul>
            </div>
        </form>

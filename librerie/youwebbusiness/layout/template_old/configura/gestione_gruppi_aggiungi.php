<div id="MainSection" class="container-fluid">

    <div id="b9dcbe7d_2067_4b50_abec_feda68699cf1">

        
        <div class="riquadro clearfix">
            <div class="clearfix">
                <div class="flag riepilogo">&nbsp;</div>
                <h1>Gestione gruppi</h1>
            </div>
            <div class="messagePanel">
            </div>
            <form class="form-horizontal" id="formInserimento" data-bind="with: defaultViewModel" onsubmit="return false;">
                <div class="section clearfix">
                    <h3 class="titleSection">Inserisci dati</h3>
                    <div class="bs-example">
                        <div class="form-group">
                            <div class="form-field-input col-xs-6">
                                <label class="control-label">Nome del gruppo:</label>
                                <div class="form-field">
                                    <input class="form-control" id="nome" type="text" data-bind="textInput : Nome, click: $parent.deactivateSharedEvent " placeholder="obbligatorio">
                                </div>
                            </div>
                            <div class="form-field-input col-xs-6">
                                <label class="control-label">Descrizione del gruppo:</label>
                                <div class="form-field">
                                    
                                    <textarea class="form-control" id="causale" rows="2" cols="50" data-bind="textInput : Descrizione, click: $parent.deactivateSharedEvent" placeholder="opzionale"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-field-input col-xs-12">
                                <label class="control-label">Icona del gruppo:</label>
                                <div class="form-field">
                                        <a class="groups-icon icon-1 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-1'}, click: function(){ Logo('icon-1'); $parent.deactivateSharedEvent();}">&nbsp;</a>
                                        <a class="groups-icon icon-2 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-2'}, click: function(){ Logo('icon-2'); $parent.deactivateSharedEvent();}">&nbsp;</a>
                                        <a class="groups-icon icon-3 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-3'}, click: function(){ Logo('icon-3'); $parent.deactivateSharedEvent();}">&nbsp;</a>
                                        <a class="groups-icon icon-4 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-4'}, click: function(){ Logo('icon-4'); $parent.deactivateSharedEvent();}">&nbsp;</a>
                                        <a class="groups-icon icon-5 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-5'}, click: function(){ Logo('icon-5'); $parent.deactivateSharedEvent();}">&nbsp;</a>
                                        <a class="groups-icon icon-6 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-6'}, click: function(){ Logo('icon-6'); $parent.deactivateSharedEvent();}">&nbsp;</a>
                                        <a class="groups-icon icon-7 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-7'}, click: function(){ Logo('icon-7'); $parent.deactivateSharedEvent();}">&nbsp;</a>
                                        <a class="groups-icon icon-8 select-icon selected" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-8'}, click: function(){ Logo('icon-8'); $parent.deactivateSharedEvent();}">&nbsp;</a>
                                        <a class="groups-icon icon-9 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-9'}, click: function(){ Logo('icon-9'); $parent.deactivateSharedEvent();}">&nbsp;</a>
                                        <a class="groups-icon icon-10 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-10'}, click: function(){ Logo('icon-10'); $parent.deactivateSharedEvent();}">&nbsp;</a>
                                        <a class="groups-icon icon-11 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-11'}, click: function(){ Logo('icon-11'); $parent.deactivateSharedEvent();}">&nbsp;</a>
                                        <a class="groups-icon icon-12 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-12'}, click: function(){ Logo('icon-12'); $parent.deactivateSharedEvent();}">&nbsp;</a>
                                        <a class="groups-icon icon-13 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-13'}, click: function(){ Logo('icon-13'); $parent.deactivateSharedEvent();}">&nbsp;</a>
                                        <a class="groups-icon icon-14 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-14'}, click: function(){ Logo('icon-14'); $parent.deactivateSharedEvent();}">&nbsp;</a>
                                        <a class="groups-icon icon-15 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-15'}, click: function(){ Logo('icon-15'); $parent.deactivateSharedEvent();}">&nbsp;</a>
                                        <a class="groups-icon icon-16 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-16'}, click: function(){ Logo('icon-16'); $parent.deactivateSharedEvent();}">&nbsp;</a>
                                        <a class="groups-icon icon-17 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-17'}, click: function(){ Logo('icon-17'); $parent.deactivateSharedEvent();}">&nbsp;</a>
                                        <a class="groups-icon icon-18 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-18'}, click: function(){ Logo('icon-18'); $parent.deactivateSharedEvent();}">&nbsp;</a>
                                        <a class="groups-icon icon-19 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-19'}, click: function(){ Logo('icon-19'); $parent.deactivateSharedEvent();}">&nbsp;</a>
                                        <a class="groups-icon icon-20 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-20'}, click: function(){ Logo('icon-20'); $parent.deactivateSharedEvent();}">&nbsp;</a>
                                        <a class="groups-icon icon-21 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-21'}, click: function(){ Logo('icon-21'); $parent.deactivateSharedEvent();}">&nbsp;</a>
                                        <a class="groups-icon icon-22 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-22'}, click: function(){ Logo('icon-22'); $parent.deactivateSharedEvent();}">&nbsp;</a>
                                        <a class="groups-icon icon-23 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-23'}, click: function(){ Logo('icon-23'); $parent.deactivateSharedEvent();}">&nbsp;</a>
                                        <a class="groups-icon icon-24 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-24'}, click: function(){ Logo('icon-24'); $parent.deactivateSharedEvent();}">&nbsp;</a>
                                        <a class="groups-icon icon-25 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-25'}, click: function(){ Logo('icon-25'); $parent.deactivateSharedEvent();}">&nbsp;</a>
                                        <a class="groups-icon icon-26 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-26'}, click: function(){ Logo('icon-26'); $parent.deactivateSharedEvent();}">&nbsp;</a>
                                        <a class="groups-icon icon-27 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-27'}, click: function(){ Logo('icon-27'); $parent.deactivateSharedEvent();}">&nbsp;</a>
                                        <a class="groups-icon icon-28 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-28'}, click: function(){ Logo('icon-28'); $parent.deactivateSharedEvent();}">&nbsp;</a>
                                        <a class="groups-icon icon-29 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-29'}, click: function(){ Logo('icon-29'); $parent.deactivateSharedEvent();}">&nbsp;</a>
                                        <a class="groups-icon icon-30 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-30'}, click: function(){ Logo('icon-30'); $parent.deactivateSharedEvent();}">&nbsp;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section clearfix">
                    <h3 class="titleSection">Scegli abilitazioni</h3>
                    <div class="bs-example">
                        <div class="form-group">
                            <div class="form-field-input col-xs-12">
                                <label class="control-label">Abilitazioni:</label>
                                <div class="form-field col-xs-4">
                                    <input name="abilitazioni" value="no" type="radio" checked="checked" data-bind="checked: TemplateGroupId() == '0' ? 'no' : '', click: function(){TemplateGroupId('0'); return true;}"> Nuovo set di abilitazioni
                                </div>
                                <div class="form-field col-xs-8">
                                    <input name="abilitazioni" value="yes" type="radio" data-bind="checked: TemplateGroupId() != '0' ? 'yes' : ''"> Copia abilitazioni da
                                    <select class="form-control with-help" data-bind="value: TemplateGroupId ">
                                        <option value="0">...</option>
                                            <option value="-5">Operatori</option>
                                            <option value="-6">Amministratori</option>
                                            <option value="-7">Addetti</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="pull-right margin-bottom20">
            <button class="btn btn-primary" data-bind="singleClick: function(){ koParentTargetGoTo('/YouBiz.Web/Sicurezza/ElencoGruppi/IndexChunk', $('#b9dcbe7d_2067_4b50_abec_feda68699cf1'), '');}" type="button">Indietro</button>
            
            <button class="btn btn-primary" data-bind="css: {disabled : defaultViewModel.Nome() == null}, singleClick: function(){ koParentTargetGoTo('/YouBiz.Web/Sicurezza/CreateGroup/Save', $('#b9dcbe7d_2067_4b50_abec_feda68699cf1'), 'defaultViewModel');}" type="button">Conferma</button>
        </div>
        <div class="clearfix"></div>

        <script type="text/javascript">
            $(function () {
                var mainDiv = $('#b9dcbe7d_2067_4b50_abec_feda68699cf1');
            });
        </script>
    </div>
<script type="text/javascript">
                                            $(function () { koRegisterViewModel("defaultViewModel",{"TemplateGroupId":0,"Id":null,"IsTemplate":false,"Logo":null,"Nome":null,"Descrizione":null,"NumeroUtenti":0}, true);koUpdateViewModelBinding();}); </script>
</div>
<div id="MainSection" class="container-fluid">


    <div id="bad597ca_6f8e_405a_9294_47a06a77f92d">

        

        <div class="riquadro clearfix">
            <div class="clearfix">
                <div class="flag riepilogo">&nbsp;</div>
                <h1>Gestione gruppi</h1>
            </div>

            <div class="messagePanel"></div>

            <form class="form-horizontal" id="formInserimento">
                <div class="section clearfix">
                    <h3 class="titleSection">Elenco gruppi</h3>
                    <div class="row margin-top20">

                        <div class="col-xs-4">
                            <div class="riquadro clearfix" style="height: 138px;">
                                <div class="group-add">
                                    <a href="javascript:void(0);" class="locator-new-groups"><span class="groups-icon icon-add">&nbsp;</span></a>
                                    <p><a href="javascript:void(0);" class="locator-new-groups">Aggiungi gruppo</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- ko foreach: defaultViewModel.Many -->
                        <div class="col-xs-4" id="group-to-delete">
                            <div class="riquadro clearfix" style="height: 138px;">
                                <!-- ko if: IsTemplate -->
                                <h4 data-bind="text: Nome">Operatori</h4>
                                <!-- /ko -->
                                <!-- ko ifnot: IsTemplate --><!-- /ko -->
                                
                                <div class="group-info">
                                    <a class="groups-icon icon-3" data-bind="css: Logo, click: $parent.ShowDetail" href="javascript:void(0);">&nbsp;</a>
                                    <p>
                                        Descrizione:<br><strong class="descrtm" data-bind="text: Descrizione">Operatore</strong>
                                    </p>
                                    <p>
                                        Utenti: <strong data-bind="text: NumeroUtenti">1</strong>
                                    </p>
                                </div>

                                <!-- ko ifnot: IsTemplate --><!-- /ko -->

                            </div>
                        </div>
                        
                        <div class="col-xs-4" id="group-to-delete">
                            <div class="riquadro clearfix" style="height: 138px;">
                                <!-- ko if: IsTemplate -->
                                <h4 data-bind="text: Nome">Amministratori</h4>
                                <!-- /ko -->
                                <!-- ko ifnot: IsTemplate --><!-- /ko -->
                                
                                <div class="group-info">
                                    <a class="groups-icon icon-1" data-bind="css: Logo, click: $parent.ShowDetail" href="javascript:void(0);">&nbsp;</a>
                                    <p>
                                        Descrizione:<br><strong class="descrtm" data-bind="text: Descrizione">Amministratori</strong>
                                    </p>
                                    <p>
                                        Utenti: <strong data-bind="text: NumeroUtenti">0</strong>
                                    </p>
                                </div>

                                <!-- ko ifnot: IsTemplate --><!-- /ko -->

                            </div>
                        </div>
                        
                        <div class="col-xs-4" id="group-to-delete">
                            <div class="riquadro clearfix" style="height: 138px;">
                                <!-- ko if: IsTemplate -->
                                <h4 data-bind="text: Nome">Addetti</h4>
                                <!-- /ko -->
                                <!-- ko ifnot: IsTemplate --><!-- /ko -->
                                
                                <div class="group-info">
                                    <a class="groups-icon icon-4" data-bind="css: Logo, click: $parent.ShowDetail" href="javascript:void(0);">&nbsp;</a>
                                    <p>
                                        Descrizione:<br><strong class="descrtm" data-bind="text: Descrizione">Addetti</strong>
                                    </p>
                                    <p>
                                        Utenti: <strong data-bind="text: NumeroUtenti">0</strong>
                                    </p>
                                </div>

                                <!-- ko ifnot: IsTemplate --><!-- /ko -->

                            </div>
                        </div>
                        
                        <div class="col-xs-4" id="group-to-delete">
                            <div class="riquadro clearfix" style="height: 138px;">
                                <!-- ko if: IsTemplate --><!-- /ko -->
                                <!-- ko ifnot: IsTemplate -->
                                <h4 data-bind="text: Nome">Alessandro</h4>
                                <!-- /ko -->
                                
                                <div class="group-info">
                                    <a class="groups-icon icon-28" data-bind="css: Logo, click: $parent.ShowDetail" href="javascript:void(0);">&nbsp;</a>
                                    <p>
                                        Descrizione:<br><strong class="descrtm" data-bind="text: Descrizione">alessandro 1</strong>
                                    </p>
                                    <p>
                                        Utenti: <strong data-bind="text: NumeroUtenti">1</strong>
                                    </p>
                                </div>

                                <!-- ko ifnot: IsTemplate -->
                                <!-- ko if: NumeroUtenti() < 1 --><!-- /ko -->
                                <!-- ko if: NumeroUtenti() > 0 -->
                                <div class="group-delete "><a class="icon-replace icon-delete disabled no-action" href="javascript:void(0);">&nbsp;</a></div>
                                <!-- /ko -->
                                <!-- /ko -->

                            </div>
                        </div>
                        
                        <div class="col-xs-4" id="group-to-delete">
                            <div class="riquadro clearfix" style="height: 138px;">
                                <!-- ko if: IsTemplate --><!-- /ko -->
                                <!-- ko ifnot: IsTemplate -->
                                <h4 data-bind="text: Nome">Amministratore</h4>
                                <!-- /ko -->
                                
                                <div class="group-info">
                                    <a class="groups-icon icon-15" data-bind="css: Logo, click: $parent.ShowDetail" href="javascript:void(0);">&nbsp;</a>
                                    <p>
                                        Descrizione:<br><strong class="descrtm" data-bind="text: Descrizione">Amministratore</strong>
                                    </p>
                                    <p>
                                        Utenti: <strong data-bind="text: NumeroUtenti">0</strong>
                                    </p>
                                </div>

                                <!-- ko ifnot: IsTemplate -->
                                <!-- ko if: NumeroUtenti() < 1 -->
                                <div class="group-delete"><a class="icon-replace icon-delete active" data-bind="click: $parent.Delete" href="javascript:void(0);">&nbsp;</a></div>
                                <!-- /ko -->
                                <!-- ko if: NumeroUtenti() > 0 --><!-- /ko -->
                                <!-- /ko -->

                            </div>
                        </div>
                        
                        <div class="col-xs-4" id="group-to-delete">
                            <div class="riquadro clearfix" style="height: 138px;">
                                <!-- ko if: IsTemplate --><!-- /ko -->
                                <!-- ko ifnot: IsTemplate -->
                                <h4 data-bind="text: Nome">AMMINISTRAZIONE</h4>
                                <!-- /ko -->
                                
                                <div class="group-info">
                                    <a class="groups-icon icon-4" data-bind="css: Logo, click: $parent.ShowDetail" href="javascript:void(0);">&nbsp;</a>
                                    <p>
                                        Descrizione:<br><strong class="descrtm" data-bind="text: Descrizione">AMMINISTRAZIONE</strong>
                                    </p>
                                    <p>
                                        Utenti: <strong data-bind="text: NumeroUtenti">1</strong>
                                    </p>
                                </div>

                                <!-- ko ifnot: IsTemplate -->
                                <!-- ko if: NumeroUtenti() < 1 --><!-- /ko -->
                                <!-- ko if: NumeroUtenti() > 0 -->
                                <div class="group-delete "><a class="icon-replace icon-delete disabled no-action" href="javascript:void(0);">&nbsp;</a></div>
                                <!-- /ko -->
                                <!-- /ko -->

                            </div>
                        </div>
                        
                        <div class="col-xs-4" id="group-to-delete">
                            <div class="riquadro clearfix" style="height: 138px;">
                                <!-- ko if: IsTemplate --><!-- /ko -->
                                <!-- ko ifnot: IsTemplate -->
                                <h4 data-bind="text: Nome">davide</h4>
                                <!-- /ko -->
                                
                                <div class="group-info">
                                    <a class="groups-icon icon-16" data-bind="css: Logo, click: $parent.ShowDetail" href="javascript:void(0);">&nbsp;</a>
                                    <p>
                                        Descrizione:<br><strong class="descrtm" data-bind="text: Descrizione">test di prova</strong>
                                    </p>
                                    <p>
                                        Utenti: <strong data-bind="text: NumeroUtenti">0</strong>
                                    </p>
                                </div>

                                <!-- ko ifnot: IsTemplate -->
                                <!-- ko if: NumeroUtenti() < 1 -->
                                <div class="group-delete"><a class="icon-replace icon-delete active" data-bind="click: $parent.Delete" href="javascript:void(0);">&nbsp;</a></div>
                                <!-- /ko -->
                                <!-- ko if: NumeroUtenti() > 0 --><!-- /ko -->
                                <!-- /ko -->

                            </div>
                        </div>
                        
                        <div class="col-xs-4" id="group-to-delete">
                            <div class="riquadro clearfix" style="height: 138px;">
                                <!-- ko if: IsTemplate --><!-- /ko -->
                                <!-- ko ifnot: IsTemplate -->
                                <h4 data-bind="text: Nome">DISPOSITIVO</h4>
                                <!-- /ko -->
                                
                                <div class="group-info">
                                    <a class="groups-icon icon-28" data-bind="css: Logo, click: $parent.ShowDetail" href="javascript:void(0);">&nbsp;</a>
                                    <p>
                                        Descrizione:<br><strong class="descrtm" data-bind="text: Descrizione">gruppo autorizzato a disporre</strong>
                                    </p>
                                    <p>
                                        Utenti: <strong data-bind="text: NumeroUtenti">0</strong>
                                    </p>
                                </div>

                                <!-- ko ifnot: IsTemplate -->
                                <!-- ko if: NumeroUtenti() < 1 -->
                                <div class="group-delete"><a class="icon-replace icon-delete active" data-bind="click: $parent.Delete" href="javascript:void(0);">&nbsp;</a></div>
                                <!-- /ko -->
                                <!-- ko if: NumeroUtenti() > 0 --><!-- /ko -->
                                <!-- /ko -->

                            </div>
                        </div>
                        
                        <div class="col-xs-4" id="group-to-delete">
                            <div class="riquadro clearfix" style="height: 138px;">
                                <!-- ko if: IsTemplate --><!-- /ko -->
                                <!-- ko ifnot: IsTemplate -->
                                <h4 data-bind="text: Nome">dsadsa</h4>
                                <!-- /ko -->
                                
                                <div class="group-info">
                                    <a class="groups-icon icon-28" data-bind="css: Logo, click: $parent.ShowDetail" href="javascript:void(0);">&nbsp;</a>
                                    <p>
                                        Descrizione:<br><strong class="descrtm" data-bind="text: Descrizione">dasdasdas</strong>
                                    </p>
                                    <p>
                                        Utenti: <strong data-bind="text: NumeroUtenti">0</strong>
                                    </p>
                                </div>

                                <!-- ko ifnot: IsTemplate -->
                                <!-- ko if: NumeroUtenti() < 1 -->
                                <div class="group-delete"><a class="icon-replace icon-delete active" data-bind="click: $parent.Delete" href="javascript:void(0);">&nbsp;</a></div>
                                <!-- /ko -->
                                <!-- ko if: NumeroUtenti() > 0 --><!-- /ko -->
                                <!-- /ko -->

                            </div>
                        </div>
                        
                        <div class="col-xs-4" id="group-to-delete">
                            <div class="riquadro clearfix" style="height: 138px;">
                                <!-- ko if: IsTemplate --><!-- /ko -->
                                <!-- ko ifnot: IsTemplate -->
                                <h4 data-bind="text: Nome">evviva</h4>
                                <!-- /ko -->
                                
                                <div class="group-info">
                                    <a class="groups-icon icon-28" data-bind="css: Logo, click: $parent.ShowDetail" href="javascript:void(0);">&nbsp;</a>
                                    <p>
                                        Descrizione:<br><strong class="descrtm" data-bind="text: Descrizione">felice felice felice</strong>
                                    </p>
                                    <p>
                                        Utenti: <strong data-bind="text: NumeroUtenti">0</strong>
                                    </p>
                                </div>

                                <!-- ko ifnot: IsTemplate -->
                                <!-- ko if: NumeroUtenti() < 1 -->
                                <div class="group-delete"><a class="icon-replace icon-delete active" data-bind="click: $parent.Delete" href="javascript:void(0);">&nbsp;</a></div>
                                <!-- /ko -->
                                <!-- ko if: NumeroUtenti() > 0 --><!-- /ko -->
                                <!-- /ko -->

                            </div>
                        </div>
                        
                        <div class="col-xs-4" id="group-to-delete">
                            <div class="riquadro clearfix" style="height: 138px;">
                                <!-- ko if: IsTemplate --><!-- /ko -->
                                <!-- ko ifnot: IsTemplate -->
                                <h4 data-bind="text: Nome">hjb</h4>
                                <!-- /ko -->
                                
                                <div class="group-info">
                                    <a class="groups-icon icon-21" data-bind="css: Logo, click: $parent.ShowDetail" href="javascript:void(0);">&nbsp;</a>
                                    <p>
                                        Descrizione:<br><strong class="descrtm" data-bind="text: Descrizione">jhb</strong>
                                    </p>
                                    <p>
                                        Utenti: <strong data-bind="text: NumeroUtenti">0</strong>
                                    </p>
                                </div>

                                <!-- ko ifnot: IsTemplate -->
                                <!-- ko if: NumeroUtenti() < 1 -->
                                <div class="group-delete"><a class="icon-replace icon-delete active" data-bind="click: $parent.Delete" href="javascript:void(0);">&nbsp;</a></div>
                                <!-- /ko -->
                                <!-- ko if: NumeroUtenti() > 0 --><!-- /ko -->
                                <!-- /ko -->

                            </div>
                        </div>
                        
                        <div class="col-xs-4" id="group-to-delete">
                            <div class="riquadro clearfix" style="height: 138px;">
                                <!-- ko if: IsTemplate --><!-- /ko -->
                                <!-- ko ifnot: IsTemplate -->
                                <h4 data-bind="text: Nome">nuovo prova</h4>
                                <!-- /ko -->
                                
                                <div class="group-info">
                                    <a class="groups-icon icon-25" data-bind="css: Logo, click: $parent.ShowDetail" href="javascript:void(0);">&nbsp;</a>
                                    <p>
                                        Descrizione:<br><strong class="descrtm" data-bind="text: Descrizione">prova</strong>
                                    </p>
                                    <p>
                                        Utenti: <strong data-bind="text: NumeroUtenti">0</strong>
                                    </p>
                                </div>

                                <!-- ko ifnot: IsTemplate -->
                                <!-- ko if: NumeroUtenti() < 1 -->
                                <div class="group-delete"><a class="icon-replace icon-delete active" data-bind="click: $parent.Delete" href="javascript:void(0);">&nbsp;</a></div>
                                <!-- /ko -->
                                <!-- ko if: NumeroUtenti() > 0 --><!-- /ko -->
                                <!-- /ko -->

                            </div>
                        </div>
                        
                        <div class="col-xs-4" id="group-to-delete">
                            <div class="riquadro clearfix" style="height: 138px;">
                                <!-- ko if: IsTemplate --><!-- /ko -->
                                <!-- ko ifnot: IsTemplate -->
                                <h4 data-bind="text: Nome">pipoo</h4>
                                <!-- /ko -->
                                
                                <div class="group-info">
                                    <a class="groups-icon icon-16" data-bind="css: Logo, click: $parent.ShowDetail" href="javascript:void(0);">&nbsp;</a>
                                    <p>
                                        Descrizione:<br><strong class="descrtm" data-bind="text: Descrizione"></strong>
                                    </p>
                                    <p>
                                        Utenti: <strong data-bind="text: NumeroUtenti">0</strong>
                                    </p>
                                </div>

                                <!-- ko ifnot: IsTemplate -->
                                <!-- ko if: NumeroUtenti() < 1 -->
                                <div class="group-delete"><a class="icon-replace icon-delete active" data-bind="click: $parent.Delete" href="javascript:void(0);">&nbsp;</a></div>
                                <!-- /ko -->
                                <!-- ko if: NumeroUtenti() > 0 --><!-- /ko -->
                                <!-- /ko -->

                            </div>
                        </div>
                        
                        <div class="col-xs-4" id="group-to-delete">
                            <div class="riquadro clearfix" style="height: 138px;">
                                <!-- ko if: IsTemplate --><!-- /ko -->
                                <!-- ko ifnot: IsTemplate -->
                                <h4 data-bind="text: Nome">po</h4>
                                <!-- /ko -->
                                
                                <div class="group-info">
                                    <a class="groups-icon icon-20" data-bind="css: Logo, click: $parent.ShowDetail" href="javascript:void(0);">&nbsp;</a>
                                    <p>
                                        Descrizione:<br><strong class="descrtm" data-bind="text: Descrizione">popo</strong>
                                    </p>
                                    <p>
                                        Utenti: <strong data-bind="text: NumeroUtenti">0</strong>
                                    </p>
                                </div>

                                <!-- ko ifnot: IsTemplate -->
                                <!-- ko if: NumeroUtenti() < 1 -->
                                <div class="group-delete"><a class="icon-replace icon-delete active" data-bind="click: $parent.Delete" href="javascript:void(0);">&nbsp;</a></div>
                                <!-- /ko -->
                                <!-- ko if: NumeroUtenti() > 0 --><!-- /ko -->
                                <!-- /ko -->

                            </div>
                        </div>
                        
                        <div class="col-xs-4" id="group-to-delete">
                            <div class="riquadro clearfix" style="height: 138px;">
                                <!-- ko if: IsTemplate --><!-- /ko -->
                                <!-- ko ifnot: IsTemplate -->
                                <h4 data-bind="text: Nome">Provanome</h4>
                                <!-- /ko -->
                                
                                <div class="group-info">
                                    <a class="groups-icon icon-8" data-bind="css: Logo, click: $parent.ShowDetail" href="javascript:void(0);">&nbsp;</a>
                                    <p>
                                        Descrizione:<br><strong class="descrtm" data-bind="text: Descrizione">Provadescrizione</strong>
                                    </p>
                                    <p>
                                        Utenti: <strong data-bind="text: NumeroUtenti">0</strong>
                                    </p>
                                </div>

                                <!-- ko ifnot: IsTemplate -->
                                <!-- ko if: NumeroUtenti() < 1 -->
                                <div class="group-delete"><a class="icon-replace icon-delete active" data-bind="click: $parent.Delete" href="javascript:void(0);">&nbsp;</a></div>
                                <!-- /ko -->
                                <!-- ko if: NumeroUtenti() > 0 --><!-- /ko -->
                                <!-- /ko -->

                            </div>
                        </div>
                        
                        <div class="col-xs-4" id="group-to-delete">
                            <div class="riquadro clearfix" style="height: 138px;">
                                <!-- ko if: IsTemplate --><!-- /ko -->
                                <!-- ko ifnot: IsTemplate -->
                                <h4 data-bind="text: Nome">tester</h4>
                                <!-- /ko -->
                                
                                <div class="group-info">
                                    <a class="groups-icon icon-3" data-bind="css: Logo, click: $parent.ShowDetail" href="javascript:void(0);">&nbsp;</a>
                                    <p>
                                        Descrizione:<br><strong class="descrtm" data-bind="text: Descrizione">babbi</strong>
                                    </p>
                                    <p>
                                        Utenti: <strong data-bind="text: NumeroUtenti">0</strong>
                                    </p>
                                </div>

                                <!-- ko ifnot: IsTemplate -->
                                <!-- ko if: NumeroUtenti() < 1 -->
                                <div class="group-delete"><a class="icon-replace icon-delete active" data-bind="click: $parent.Delete" href="javascript:void(0);">&nbsp;</a></div>
                                <!-- /ko -->
                                <!-- ko if: NumeroUtenti() > 0 --><!-- /ko -->
                                <!-- /ko -->

                            </div>
                        </div>
                        <!-- /ko -->
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript">

    </script>
<script type="text/javascript">
                                            $(function () { koRegisterViewModel("defaultViewModel",{"Many":[{"Id":-5,"IsTemplate":true,"Logo":"icon-3","Nome":"Operatori","Descrizione":"Operatore","NumeroUtenti":1},{"Id":-6,"IsTemplate":true,"Logo":"icon-1","Nome":"Amministratori","Descrizione":"Amministratori","NumeroUtenti":0},{"Id":-7,"IsTemplate":true,"Logo":"icon-4","Nome":"Addetti","Descrizione":"Addetti","NumeroUtenti":0},{"Id":21950,"IsTemplate":false,"Logo":"icon-28","Nome":"Alessandro","Descrizione":"alessandro 1","NumeroUtenti":1},{"Id":17452,"IsTemplate":false,"Logo":"icon-15","Nome":"Amministratore","Descrizione":"Amministratore","NumeroUtenti":0},{"Id":5,"IsTemplate":false,"Logo":"icon-4","Nome":"AMMINISTRAZIONE","Descrizione":"AMMINISTRAZIONE","NumeroUtenti":1},{"Id":21947,"IsTemplate":false,"Logo":"icon-16","Nome":"davide","Descrizione":"test di prova","NumeroUtenti":0},{"Id":21951,"IsTemplate":false,"Logo":"icon-28","Nome":"DISPOSITIVO","Descrizione":"gruppo autorizzato a disporre","NumeroUtenti":0},{"Id":21973,"IsTemplate":false,"Logo":"icon-28","Nome":"dsadsa","Descrizione":"dasdasdas","NumeroUtenti":0},{"Id":21971,"IsTemplate":false,"Logo":"icon-28","Nome":"evviva","Descrizione":"felice felice felice","NumeroUtenti":0},{"Id":21964,"IsTemplate":false,"Logo":"icon-21","Nome":"hjb","Descrizione":"jhb","NumeroUtenti":0},{"Id":21958,"IsTemplate":false,"Logo":"icon-25","Nome":"nuovo prova","Descrizione":"prova","NumeroUtenti":0},{"Id":21945,"IsTemplate":false,"Logo":"icon-16","Nome":"pipoo","Descrizione":"","NumeroUtenti":0},{"Id":21961,"IsTemplate":false,"Logo":"icon-20","Nome":"po","Descrizione":"popo","NumeroUtenti":0},{"Id":21972,"IsTemplate":false,"Logo":"icon-8","Nome":"Provanome","Descrizione":"Provadescrizione","NumeroUtenti":0},{"Id":21949,"IsTemplate":false,"Logo":"icon-3","Nome":"tester","Descrizione":"babbi","NumeroUtenti":0}],"One":{"Id":-5,"IsTemplate":true,"Logo":"icon-3","Nome":"Operatori","Descrizione":"Operatore","NumeroUtenti":1}}, true);
        $(function() {
            var currentDiv = $('#bad597ca_6f8e_405a_9294_47a06a77f92d');
            var generalPanel = $('#msgDisplay', currentDiv);
            var divSelector = generalPanel;

            //Gestione testo in descrizione gruppo 
            $('.descrtm', currentDiv).each(function (index, value) {
                var toret = $(value).text();
                var length = toret.length;
                if (length > 35) {
                    //debugger;
                    var myindexOf = toret.indexOf(' ');
                    var tmpRiga1 = '';
                    var tmpRiga2 = '';
                    if (myindexOf == -1) {
                        tmpRiga1 = toret.substring(0, 20);
                        tmpRiga2 = toret.substring(20, length);
                        $(value).html(tmpRiga1 + '<br/>' + tmpRiga2);
                    } else {
                        var mysplit = toret.split(' ');
                        var num = Math.floor(mysplit.length / 2);

                        $(mysplit).each(function (zindex, zvalue) {
                            if (zindex++ < num) {
                                tmpRiga1 += zvalue + ' ';
                            } else {
                                tmpRiga2 += zvalue + ' ';
                            }
                        });
                        if (tmpRiga2.length > 0) {
                            tmpRiga2 = tmpRiga2.substring(0, tmpRiga2.length - 1);
                        }
                        $(value).html(tmpRiga1 + '<br/>' + tmpRiga2);
                    }
                    $(value).addClass('smallTextForGroups');
                }
            });

            //defaultViewModel.One

            //koRootViewModel.defaultViewModel.One = ko.observable();

        koRootViewModel.Delete = function (selectedGroup) {
            //koRootViewModel.defaultViewModel.One(selectedGroup);
            ko.mapping.fromJS(ko.toJS(selectedGroup), null, koRootViewModel.defaultViewModel.One);
            $(divSelector).dialog('open');
        };

        koRootViewModel.ShowDetail = function (selectedGroup) {
            //spostata qui dentro
            koRootViewModel.defaultViewModel.One = ko.observable();

            koRootViewModel.defaultViewModel.One(selectedGroup);
            koParentTargetGoTo('/YouBiz.Web/Sicurezza/DetailGroup', $('#bad597ca_6f8e_405a_9294_47a06a77f92d'), 'defaultViewModel.One');
        }

        // patch ko

        $('.locator-new-groups', currentDiv).click(function () {
            koParentTargetGoTo('/YouBiz.Web/Sicurezza/CreateGroup', currentDiv);
        });

        $('#popupCloseButton', generalPanel).click(function() {
            $(generalPanel).dialog('close');
        });

        $('#popupConfirmButton', generalPanel).click(function() {
            koParentTargetGoTo('/YouBiz.Web/Sicurezza/DeleteGroup', currentDiv, 'defaultViewModel.One');
            $(generalPanel).dialog('close');
        });

        // devo ritardare o jquery mi toglie dallo scope il div che mi serve come body e il data-bind salta....
        setTimeout(function() {
            $(generalPanel).dialog({
                resizable: true,
                width: 600,
                maxHeight: 600,
                modal: true,
                autoOpen: false,
                open: function(event, ui) {
                    koDeactivateSharedEvent();
                }
            });
        }, 100);


        });

    koUpdateViewModelBinding();}); </script></div>
    <div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front ui-draggable ui-resizable" tabindex="-1" role="dialog" style="position: absolute; height: auto; width: 600px; top: 568px; left: 651.5px; display: block;" aria-describedby="msgDisplay" aria-labelledby="ui-id-4"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-4" class="ui-dialog-title">Elimina gruppo</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div><div id="msgDisplay" class="ui-dialog-content ui-widget-content" style="width: auto; min-height: 110px; max-height: 560px; height: auto;">
            <div class="dialog-content">
                <div class="riquadro">
                    <div class="clearfix">
                        <div class="flag riepilogo">&nbsp;</div>
                        <h1>Elimina gruppo</h1>
                    </div>
                    <p id="text">Sei sicuro di voler eliminare il gruppo selezionato?</p>

                    <div class="section clearfix margin-bottom20" id="info">
                        <h3 class="titleSection">Descrizione gruppo</h3>
                        <div class="bs-example">
                            <div class="form-group" data-bind="with: defaultViewModel.One">
                                <div class="form-field-resume col-xs-4">
                                    <label class="control-label">Nome del gruppo:</label>
                                    <span class="" data-bind="text: Nome">evviva</span>

                                </div>
                                <div class="form-field-resume col-xs-8">
                                    <label class="control-label">Descrizione gruppo:</label>
                                    <span class="" data-bind="text: Descrizione">felice felice felice</span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pull-right margin-top20 clearfix" id="buttons">
                        <button id="popupCloseButton" type="button" class="btn btn-primary">Annulla</button>
                        <button id="popupConfirmButton" type="button" class="btn btn-primary">Elimina</button>
                    </div>
                </div>

            </div>
        </div><div class="ui-resizable-handle ui-resizable-n" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-w" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-sw" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-ne" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-nw" style="z-index: 90;"></div></div>
        <div class="ui-widget-overlay ui-front" style="z-index: 1999;"></div>
<div id="MainSection" class="container-fluid">
<div id="a513cac1_e748_4e63_bfc5_9f1ae267cda8">
                <div id="previousOperation" data-bind="visible: sharedEventHappened" style="display: none;">
                    <div class="riquadro">
                        <div id="successPanel" class="messagePanel success" data-bind="css :{ visible: sharedEventHappened}">
                            <h3 class="titleSection">Esito Operazione</h3>
                            <p>
                                <strong>Operazione eseguita con successo</strong>
                            </p>
                        </div>
                    </div>
                </div>
        <div class="riquadro clearfix">
            <div class="clearfix">
                <div class="flag riepilogo">&nbsp;</div>
                <h1>Gestione gruppi</h1>
            </div>

            <form class="form-horizontal">
                <div class="section clearfix">
                    <h3 class="titleSection">Dettagli gruppo</h3>

                    <div class="bs-example" id="panelDetailView" data-bind="with: defaultViewModel.Gruppo">
                        <div class="form-group">
                            <div class="form-field-resume col-xs-4">
                                <label class="control-label">Nome del gruppo:</label>
                                <span class="resume" data-bind="text: Nome">Provanome</span>
                            </div>
                            <div class="form-field-resume col-xs-8">
                                <label class="control-label">Descrizione del gruppo:</label>
                                <span class="resume" data-bind="text: Descrizione">Provadescrizione</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-field-resume col-xs-4">
                                <label class="control-label">Icona del gruppo:</label>
                                <span class="resume">
                                    <span class="groups-icon icon-8" data-bind="css: Logo ">&nbsp;</span>
                                </span>
                            </div>
                            <div class="form-field-resume col-xs-4">
                                <label class="control-label">Utenti:</label>
                                <span class="resume" data-bind="text: NumeroUtenti">0</span>
                            </div>
                        </div>
                            <div class="form-group txt_right">
                                <button id="panelDetailViewModifyButton" name="modifica" class="btn btn-primary" type="button" data-bind="">Modifica</button>
                            </div>
                    </div>
                        <div class="bs-example" id="panelDetailEdit" data-bind="with: defaultViewModel.Gruppo" style="display: none;">
                            <div class="form-group">
                                <div class="form-field-input col-xs-6">
                                    <label class="control-label">Nome del gruppo:</label>
                                    <div class="form-field">
                                        <input name="nome" class="form-control" id="nome" type="text" data-bind="value: Nome">
                                    </div>
                                </div>
                                <div class="form-field-input col-xs-6">
                                    <label class="control-label">Descrizione del gruppo: </label>
                                    <div class="form-field">
                                        <textarea name="causale" class="form-control" id="causale" rows="2" cols="50" data-default-text="opzionale" data-bind="value: Descrizione"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-field-input col-xs-12">
                                    <label class="control-label">Icona del gruppo:</label>
                                    <div class="form-field">
                                            <a class="groups-icon icon-1 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-1'}, click: function(){ Logo('icon-1');}">&nbsp;</a>
                                            <a class="groups-icon icon-2 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-2'}, click: function(){ Logo('icon-2');}">&nbsp;</a>
                                            <a class="groups-icon icon-3 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-3'}, click: function(){ Logo('icon-3');}">&nbsp;</a>
                                            <a class="groups-icon icon-4 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-4'}, click: function(){ Logo('icon-4');}">&nbsp;</a>
                                            <a class="groups-icon icon-5 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-5'}, click: function(){ Logo('icon-5');}">&nbsp;</a>
                                            <a class="groups-icon icon-6 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-6'}, click: function(){ Logo('icon-6');}">&nbsp;</a>
                                            <a class="groups-icon icon-7 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-7'}, click: function(){ Logo('icon-7');}">&nbsp;</a>
                                            <a class="groups-icon icon-8 select-icon selected" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-8'}, click: function(){ Logo('icon-8');}">&nbsp;</a>
                                            <a class="groups-icon icon-9 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-9'}, click: function(){ Logo('icon-9');}">&nbsp;</a>
                                            <a class="groups-icon icon-10 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-10'}, click: function(){ Logo('icon-10');}">&nbsp;</a>
                                            <a class="groups-icon icon-11 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-11'}, click: function(){ Logo('icon-11');}">&nbsp;</a>
                                            <a class="groups-icon icon-12 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-12'}, click: function(){ Logo('icon-12');}">&nbsp;</a>
                                            <a class="groups-icon icon-13 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-13'}, click: function(){ Logo('icon-13');}">&nbsp;</a>
                                            <a class="groups-icon icon-14 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-14'}, click: function(){ Logo('icon-14');}">&nbsp;</a>
                                            <a class="groups-icon icon-15 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-15'}, click: function(){ Logo('icon-15');}">&nbsp;</a>
                                            <a class="groups-icon icon-16 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-16'}, click: function(){ Logo('icon-16');}">&nbsp;</a>
                                            <a class="groups-icon icon-17 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-17'}, click: function(){ Logo('icon-17');}">&nbsp;</a>
                                            <a class="groups-icon icon-18 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-18'}, click: function(){ Logo('icon-18');}">&nbsp;</a>
                                            <a class="groups-icon icon-19 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-19'}, click: function(){ Logo('icon-19');}">&nbsp;</a>
                                            <a class="groups-icon icon-20 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-20'}, click: function(){ Logo('icon-20');}">&nbsp;</a>
                                            <a class="groups-icon icon-21 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-21'}, click: function(){ Logo('icon-21');}">&nbsp;</a>
                                            <a class="groups-icon icon-22 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-22'}, click: function(){ Logo('icon-22');}">&nbsp;</a>
                                            <a class="groups-icon icon-23 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-23'}, click: function(){ Logo('icon-23');}">&nbsp;</a>
                                            <a class="groups-icon icon-24 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-24'}, click: function(){ Logo('icon-24');}">&nbsp;</a>
                                            <a class="groups-icon icon-25 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-25'}, click: function(){ Logo('icon-25');}">&nbsp;</a>
                                            <a class="groups-icon icon-26 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-26'}, click: function(){ Logo('icon-26');}">&nbsp;</a>
                                            <a class="groups-icon icon-27 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-27'}, click: function(){ Logo('icon-27');}">&nbsp;</a>
                                            <a class="groups-icon icon-28 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-28'}, click: function(){ Logo('icon-28');}">&nbsp;</a>
                                            <a class="groups-icon icon-29 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-29'}, click: function(){ Logo('icon-29');}">&nbsp;</a>
                                            <a class="groups-icon icon-30 select-icon" href="javascript:void(0);" data-bind="css: {selected: Logo() == 'icon-30'}, click: function(){ Logo('icon-30');}">&nbsp;</a>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group txt_right">
                                <button id="panelModifyViewUndoButton" class="btn btn-primary" type="button" data-bind="">Annulla</button>
                                <button id="panelModifyViewModifyButton" class="btn btn-primary" type="button" data-bind="">Conferma</button>
                            </div>
                        </div>

                </div>

                <div class="section clearfix">

                    <h3 class="titleSection">Abilitazioni</h3>

                    <a name="feedback"></a>

                    <div class="bs-example margin-top20">


                            <div class="col-xs-4">
                                <div class="riquadro clearfix" style="height: 151px;">
                                    <h4>Info Conti</h4>
                                    <div class="txt_center">
                                        <p><a class="auth-icon sportello ctrl-auth-panel" href="javascript:void(0);" data-panel="auth-panel-1001000"></a></p>
                                        <p>Il gruppo non è abilitato al menu</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="riquadro clearfix" style="height: 151px;">
                                    <h4>Pagamenti</h4>
                                    <div class="txt_center">
                                        <p><a class="auth-icon pagamenti ctrl-auth-panel" href="javascript:void(0);" data-panel="auth-panel-1004000"></a></p>
                                        <p>Il gruppo è parzialmente abilitato al menu</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="riquadro clearfix" style="height: 151px;">
                                    <h4>Incassi</h4>
                                    <div class="txt_center">
                                        <p><a class="auth-icon incassi ctrl-auth-panel" href="javascript:void(0);" data-panel="auth-panel-1006000"></a></p>
                                        <p>Il gruppo non è abilitato al menu</p>
                                    </div>
                                </div>
                            </div>

    <div class="auth-panel col-xs-12" id="auth-panel-1001000" style="display: none;">
        <div class="top-arrow">
            <div class="col-xs-4 "><span>&nbsp;</span></div>
        </div>
        <div class="row">
            
                <div class="col-xs-12">
                    <p><input class="select-all" functionid="0" type="checkbox">Seleziona tutto</p>
                </div>

                <div class="col-xs-4">
                    <ul class="auth-list noindent">


    

<li>
    <!-- ko with:functionById(1001010) -->
        <input class="chkSel_1001000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1001010" functionidparent="1001000" iscontainer="1">
    <!-- /ko -->
    Saldo e Movimenti C/c
        <ul class="indent" data-idparent="1001010">

    

<li>
    <!-- ko with:functionById(1001011) -->
        <input class="chkSel_1001010 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1001011" functionidparent="1001010" iscontainer="0">
    <!-- /ko -->
    Movimenti C/C On Line
</li>
                       
    

<li>
    <!-- ko with:functionById(1001015) -->
        <input class="chkSel_1001010 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1001015" functionidparent="1001010" iscontainer="0">
    <!-- /ko -->
    Movimenti C/C CBI
</li>
                       
    

<li>
    <!-- ko with:functionById(1001013) -->
        <input class="chkSel_1001010 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1001013" functionidparent="1001010" iscontainer="0">
    <!-- /ko -->
    Saldi C/C On Line
</li>
                       
    

<li>
    <!-- ko with:functionById(1001016) -->
        <input class="chkSel_1001010 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1001016" functionidparent="1001010" iscontainer="0">
    <!-- /ko -->
    Saldi C/C CBI
</li>
                               </ul>
</li>
                                           </ul>
                </div>
                <div class="col-xs-4">
                    <ul class="auth-list noindent">


    

<li>
    <!-- ko with:functionById(1001018) -->
        <input class="chkSel_1001000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1001018" functionidparent="1001000" iscontainer="0">
    <!-- /ko -->
    Finanziamenti Rateali
</li>
                       
    

<li>
    <!-- ko with:functionById(1001020) -->
        <input class="chkSel_1001000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1001020" functionidparent="1001000" iscontainer="1">
    <!-- /ko -->
    Portafoglio
        <ul class="indent" data-idparent="1001020">

    

<li>
    <!-- ko with:functionById(1001021) -->
        <input class="chkSel_1001020 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1001021" functionidparent="1001020" iscontainer="0">
    <!-- /ko -->
    Movimenti Portafoglio
</li>
                       
    

<li>
    <!-- ko with:functionById(1001022) -->
        <input class="chkSel_1001020 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1001022" functionidparent="1001020" iscontainer="0">
    <!-- /ko -->
    Saldi Portafoglio
</li>
                               </ul>
</li>
                       
    

<li>
    <!-- ko with:functionById(1001030) -->
        <input class="chkSel_1001000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1001030" functionidparent="1001000" iscontainer="0">
    <!-- /ko -->
    Conti Anticipi
</li>
                                           </ul>
                </div>
                <div class="col-xs-4">
                    <ul class="auth-list noindent">


    

<li>
    <!-- ko with:functionById(1001040) -->
        <input class="chkSel_1001000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1001040" functionidparent="1001000" iscontainer="0">
    <!-- /ko -->
    Dossier Titoli
</li>
                       
    

<li>
    <!-- ko with:functionById(1001051) -->
        <input class="chkSel_1001000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1001051" functionidparent="1001000" iscontainer="0">
    <!-- /ko -->
    Domiciliazioni
</li>
                       
    

<li>
    <!-- ko with:functionById(1001060) -->
        <input class="chkSel_1001000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1001060" functionidparent="1001000" iscontainer="0">
    <!-- /ko -->
    Situazione Assegni
</li>
                       
    

<li>
    <!-- ko with:functionById(1001070) -->
        <input class="chkSel_1001000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1001070" functionidparent="1001000" iscontainer="0">
    <!-- /ko -->
    Estratto Conto Periodico
</li>
                       
    

<li>
    <!-- ko with:functionById(1001080) -->
        <input class="chkSel_1001000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1001080" functionidparent="1001000" iscontainer="0">
    <!-- /ko -->
    Stampa Movimenti Periodici C/c
</li>
                                           </ul>
                </div>
            
                <div class="col-xs-12">
                    <div class="pull-right">
                        <button class="btn btn-primary btn-undo-function-change" type="button" data-bind="" data-panel="auth-panel-1001000">Annulla</button>
                        <button class="btn btn-primary btn-commit-function-change" type="button" data-bind="" data-panel="auth-panel-1001000">Conferma</button>
                    </div>
                </div>
        </div>
        
        

    </div>
    <div class="auth-panel col-xs-12 panel-visible" id="auth-panel-1004000" style="display: block;">
        <div class="top-arrow">
            <div class="col-xs-4 col-xs-offset-4"><span>&nbsp;</span></div>
        </div>
        <div class="row">
            
                <div class="col-xs-12">
                    <p><input class="select-all" functionid="0" type="checkbox">Seleziona tutto</p>
                </div>

                <div class="col-xs-4">
                    <ul class="auth-list noindent">


    

<li>
    <!-- ko with:functionById(1004023) -->
        <input class="chkSel_1004000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1004023" functionidparent="1004000" iscontainer="0">
    <!-- /ko -->
    Bonifico Singolo
</li>
                       
    

<li>
    <!-- ko with:functionById(1004022) -->
        <input class="chkSel_1004000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1004022" functionidparent="1004000" iscontainer="0">
    <!-- /ko -->
    Bonifico per detrazioni
</li>
                       
    

<li>
    <!-- ko with:functionById(1004010) -->
        <input class="chkSel_1004000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1004010" functionidparent="1004000" iscontainer="0">
    <!-- /ko -->
    Bonifici
</li>
                       
    

<li>
    <!-- ko with:functionById(1004020) -->
        <input class="chkSel_1004000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1004020" functionidparent="1004000" iscontainer="0">
    <!-- /ko -->
    Bonifici Italia
</li>
                       
    

<li>
    <!-- ko with:functionById(1004030) -->
        <input class="chkSel_1004000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1004030" functionidparent="1004000" iscontainer="0">
    <!-- /ko -->
    Stipendi
</li>
                       
    

<li>
    <!-- ko with:functionById(1004040) -->
        <input class="chkSel_1004000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1004040" functionidparent="1004000" iscontainer="0">
    <!-- /ko -->
    Stipendi Italia
</li>
                       
    

<li>
    <!-- ko with:functionById(1004070) -->
        <input class="chkSel_1004000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1004070" functionidparent="1004000" iscontainer="0">
    <!-- /ko -->
    Pagamento Riba
</li>
                       
    

<li>
    <!-- ko with:functionById(1004080) -->
        <input class="chkSel_1004000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1004080" functionidparent="1004000" iscontainer="0">
    <!-- /ko -->
    Pagamento Riba Manuale
</li>
                       
    

<li>
    <!-- ko with:functionById(1004090) -->
        <input class="chkSel_1004000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1004090" functionidparent="1004000" iscontainer="0">
    <!-- /ko -->
    Deleghe F24
</li>
                       
    

<li>
    <!-- ko with:functionById(1004100) -->
        <input class="chkSel_1004000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1004100" functionidparent="1004000" iscontainer="0">
    <!-- /ko -->
    F24 Elementi Identificativi
</li>
                                           </ul>
                </div>
                <div class="col-xs-4">
                    <ul class="auth-list noindent">


    

<li>
    <!-- ko with:functionById(1004101) -->
        <input class="chkSel_1004000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1004101" functionidparent="1004000" iscontainer="0">
    <!-- /ko -->
    Modulo F23
</li>
                       
    

<li>
    <!-- ko with:functionById(1004102) -->
        <input class="chkSel_1004000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1004102" functionidparent="1004000" iscontainer="0">
    <!-- /ko -->
    Riepilogo F23
</li>
                       
    

<li>
    <!-- ko with:functionById(1004110) -->
        <input class="chkSel_1004000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1004110" functionidparent="1004000" iscontainer="0">
    <!-- /ko -->
    Quietanze F24
</li>
                       
    

<li>
    <!-- ko with:functionById(1004120) -->
        <input class="chkSel_1004000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1004120" functionidparent="1004000" iscontainer="0">
    <!-- /ko -->
    Richiedi Assegni Circolari
</li>
                       
    

<li>
    <!-- ko with:functionById(1004130) -->
        <input class="chkSel_1004000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1004130" functionidparent="1004000" iscontainer="0">
    <!-- /ko -->
    Richiedi Assegni di Quietanza
</li>
                       
    

<li>
    <!-- ko with:functionById(1004140) -->
        <input class="chkSel_1004000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1004140" functionidparent="1004000" iscontainer="0">
    <!-- /ko -->
    Bollettini Bancari
</li>
                       
    

<li>
    <!-- ko with:functionById(1004150) -->
        <input class="chkSel_1004000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1004150" functionidparent="1004000" iscontainer="0">
    <!-- /ko -->
    Bollettini Postali
</li>
                       
    

<li>
    <!-- ko with:functionById(1004160) -->
        <input class="chkSel_1004000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1004160" functionidparent="1004000" iscontainer="0">
    <!-- /ko -->
    Mav/Rav
</li>
                       
    

<li>
    <!-- ko with:functionById(1004170) -->
        <input class="chkSel_1004000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1004170" functionidparent="1004000" iscontainer="0">
    <!-- /ko -->
    Utenze
</li>
                       
    

<li>
    <!-- ko with:functionById(1004180) -->
        <input class="chkSel_1004000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1004180" functionidparent="1004000" iscontainer="0">
    <!-- /ko -->
    Ricariche Telefoniche
</li>
                                           </ul>
                </div>
                <div class="col-xs-4">
                    <ul class="auth-list noindent">


    

<li>
    <!-- ko with:functionById(1004115) -->
        <input class="chkSel_1004000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1004115" functionidparent="1004000" iscontainer="0">
    <!-- /ko -->
    CBILL - pagoPA
</li>
                       
    

<li>
    <!-- ko with:functionById(1004210) -->
        <input class="chkSel_1004000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1004210" functionidparent="1004000" iscontainer="0">
    <!-- /ko -->
    Bollo Auto
</li>
                       
    

<li>
    <!-- ko with:functionById(1004200) -->
        <input class="chkSel_1004000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1004200" functionidparent="1004000" iscontainer="1">
    <!-- /ko -->
    Esiti Pagamenti
        <ul class="indent" data-idparent="1004200">

    

<li>
    <!-- ko with:functionById(1004201) -->
        <input class="chkSel_1004200 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1004201" functionidparent="1004200" iscontainer="0">
    <!-- /ko -->
    Bonifici Italia - Richiesta Assegni
</li>
                       
    

<li>
    <!-- ko with:functionById(1004202) -->
        <input class="chkSel_1004200 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1004202" functionidparent="1004200" iscontainer="0">
    <!-- /ko -->
    Stipendi Italia
</li>
                       
    

<li>
    <!-- ko with:functionById(1004203) -->
        <input class="chkSel_1004200 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1004203" functionidparent="1004200" iscontainer="0">
    <!-- /ko -->
    Deleghe F24
</li>
                       
    

<li>
    <!-- ko with:functionById(1004204) -->
        <input class="chkSel_1004200 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1004204" functionidparent="1004200" iscontainer="1">
    <!-- /ko -->
    Altri Pagamenti
        <ul class="indent" data-idparent="1004204">

    

<li>
    <!-- ko with:functionById(2002311) -->
        <input class="chkSel_1004204 auth-sel" type="checkbox" data-bind="checked: Active" functionid="2002311" functionidparent="1004204" iscontainer="0">
    <!-- /ko -->
    Esiti Bonifici
</li>
                       
    

<li>
    <!-- ko with:functionById(2002312) -->
        <input class="chkSel_1004204 auth-sel" type="checkbox" data-bind="checked: Active" functionid="2002312" functionidparent="1004204" iscontainer="0">
    <!-- /ko -->
    Esiti Stipendi
</li>
                       
    

<li>
    <!-- ko with:functionById(2002318) -->
        <input class="chkSel_1004204 auth-sel" type="checkbox" data-bind="checked: Active" functionid="2002318" functionidparent="1004204" iscontainer="0">
    <!-- /ko -->
    Esiti Bollettini Bancari
</li>
                       
    

<li>
    <!-- ko with:functionById(2002319) -->
        <input class="chkSel_1004204 auth-sel" type="checkbox" data-bind="checked: Active" functionid="2002319" functionidparent="1004204" iscontainer="0">
    <!-- /ko -->
    Esiti Pagamenti
</li>
                               </ul>
</li>
                               </ul>
</li>
                                           </ul>
                </div>
            
                <div class="col-xs-12">
                    <div class="pull-right">
                        <button class="btn btn-primary btn-undo-function-change" type="button" data-bind="" data-panel="auth-panel-1004000">Annulla</button>
                        <button class="btn btn-primary btn-commit-function-change" type="button" data-bind="" data-panel="auth-panel-1004000">Conferma</button>
                    </div>
                </div>
        </div>
        
        

    </div>
    <div class="auth-panel col-xs-12" id="auth-panel-1006000" style="display: none;">
        <div class="top-arrow">
            <div class="col-xs-4 col-xs-offset-8"><span>&nbsp;</span></div>
        </div>
        <div class="row">
            
                <div class="col-xs-12">
                    <p><input class="select-all" functionid="0" type="checkbox">Seleziona tutto</p>
                </div>

                <div class="col-xs-4">
                    <ul class="auth-list noindent">


    

<li>
    <!-- ko with:functionById(1006010) -->
        <input class="chkSel_1006000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1006010" functionidparent="1006000" iscontainer="0">
    <!-- /ko -->
    Riba
</li>
                       
    

<li>
    <!-- ko with:functionById(1006020) -->
        <input class="chkSel_1006000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1006020" functionidparent="1006000" iscontainer="0">
    <!-- /ko -->
    Mav
</li>
                       
    

<li>
    <!-- ko with:functionById(1006030) -->
        <input class="chkSel_1006000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1006030" functionidparent="1006000" iscontainer="0">
    <!-- /ko -->
    Sdd
</li>
                       
    

<li>
    <!-- ko with:functionById(1006050) -->
        <input class="chkSel_1006000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1006050" functionidparent="1006000" iscontainer="0">
    <!-- /ko -->
    Varia Coordinate Rid
</li>
                                           </ul>
                </div>
                <div class="col-xs-4">
                    <ul class="auth-list noindent">


    

<li>
    <!-- ko with:functionById(1006090) -->
        <input class="chkSel_1006000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1006090" functionidparent="1006000" iscontainer="1">
    <!-- /ko -->
    Seda
        <ul class="indent" data-idparent="1006090">

    

<li>
    <!-- ko with:functionById(1006110) -->
        <input class="chkSel_1006090 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1006110" functionidparent="1006090" iscontainer="0">
    <!-- /ko -->
    Rendiconto
</li>
                       
    

<li>
    <!-- ko with:functionById(1006120) -->
        <input class="chkSel_1006090 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1006120" functionidparent="1006090" iscontainer="0">
    <!-- /ko -->
    Richiesta Dettaglio Rendiconto
</li>
                               </ul>
</li>
                       
    

<li>
    <!-- ko with:functionById(1006140) -->
        <input class="chkSel_1006000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1006140" functionidparent="1006000" iscontainer="0">
    <!-- /ko -->
    Allineamento Iban
</li>
                                           </ul>
                </div>
                <div class="col-xs-4">
                    <ul class="auth-list noindent">


    

<li>
    <!-- ko with:functionById(1006150) -->
        <input class="chkSel_1006000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1006150" functionidparent="1006000" iscontainer="1">
    <!-- /ko -->
    Esiti Incassi
        <ul class="indent" data-idparent="1006150">

    

<li>
    <!-- ko with:functionById(1006151) -->
        <input class="chkSel_1006150 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1006151" functionidparent="1006150" iscontainer="0">
    <!-- /ko -->
    Riba - Rid - Mav
</li>
                       
    

<li>
    <!-- ko with:functionById(1006152) -->
        <input class="chkSel_1006150 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1006152" functionidparent="1006150" iscontainer="0">
    <!-- /ko -->
    Sdd
</li>
                       
    

<li>
    <!-- ko with:functionById(1006153) -->
        <input class="chkSel_1006150 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1006153" functionidparent="1006150" iscontainer="0">
    <!-- /ko -->
    Bollettini Bancari
</li>
                       
    

<li>
    <!-- ko with:functionById(1006154) -->
        <input class="chkSel_1006150 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1006154" functionidparent="1006150" iscontainer="0">
    <!-- /ko -->
    Allineamento Rid
</li>
                       
    

<li>
    <!-- ko with:functionById(1006156) -->
        <input class="chkSel_1006150 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1006156" functionidparent="1006150" iscontainer="0">
    <!-- /ko -->
    Allineamento Iban
</li>
                       
    

<li>
    <!-- ko with:functionById(1006157) -->
        <input class="chkSel_1006150 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1006157" functionidparent="1006150" iscontainer="0">
    <!-- /ko -->
    Beneficiario
</li>
                               </ul>
</li>
                                           </ul>
                </div>
            
                <div class="col-xs-12">
                    <div class="pull-right">
                        <button class="btn btn-primary btn-undo-function-change" type="button" data-bind="" data-panel="auth-panel-1006000">Annulla</button>
                        <button class="btn btn-primary btn-commit-function-change" type="button" data-bind="" data-panel="auth-panel-1006000">Conferma</button>
                    </div>
                </div>
        </div>
        
        

    </div>
                            <div class="col-xs-4">
                                <div class="riquadro clearfix" style="height: 151px;">
                                    <h4>Carte</h4>
                                    <div class="txt_center">
                                        <p><a class="auth-icon carte ctrl-auth-panel" href="javascript:void(0);" data-panel="auth-panel-1007150"></a></p>
                                        <p>Il gruppo non è abilitato al menu</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="riquadro clearfix" style="height: 151px;">
                                    <h4>Estero</h4>
                                    <div class="txt_center">
                                        <p><a class="auth-icon estero ctrl-auth-panel" href="javascript:void(0);" data-panel="auth-panel-1010000"></a></p>
                                        <p>Il gruppo è parzialmente abilitato al menu</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="riquadro clearfix" style="height: 151px;">
                                    <h4>Documenti e Fatture</h4>
                                    <div class="txt_center">
                                        <p><a class="auth-icon documenti ctrl-auth-panel" href="javascript:void(0);" data-panel="auth-panel-1007000"></a></p>
                                        <p>Il gruppo non è abilitato al menu</p>
                                    </div>
                                </div>
                            </div>

    <div class="auth-panel col-xs-12" id="auth-panel-1007150" style="display: none;">
        <div class="top-arrow">
            <div class="col-xs-4 "><span>&nbsp;</span></div>
        </div>
        <div class="row">
            
                <div class="col-xs-12">
                    <p><input class="select-all" functionid="0" type="checkbox">Seleziona tutto</p>
                </div>

                <div class="col-xs-4">
                    <ul class="auth-list noindent">


    

<li>
    <!-- ko with:functionById(1008000) -->
        <input class="chkSel_1007150 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1008000" functionidparent="1007150" iscontainer="1">
    <!-- /ko -->
    Carte Business
        <ul class="indent" data-idparent="1008000">

    

<li>
    <!-- ko with:functionById(1008010) -->
        <input class="chkSel_1008000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1008010" functionidparent="1008000" iscontainer="1">
    <!-- /ko -->
    Gestione Carte
        <ul class="indent" data-idparent="1008010">

    

<li>
    <!-- ko with:functionById(2120) -->
        <input class="chkSel_1008010 auth-sel" type="checkbox" data-bind="checked: Active" functionid="2120" functionidparent="1008010" iscontainer="0">
    <!-- /ko -->
    Movimenti Carte
</li>
                       
    

<li>
    <!-- ko with:functionById(2130) -->
        <input class="chkSel_1008010 auth-sel" type="checkbox" data-bind="checked: Active" functionid="2130" functionidparent="1008010" iscontainer="0">
    <!-- /ko -->
    Ricarica Carte
</li>
                       
    

<li>
    <!-- ko with:functionById(2140) -->
        <input class="chkSel_1008010 auth-sel" type="checkbox" data-bind="checked: Active" functionid="2140" functionidparent="1008010" iscontainer="0">
    <!-- /ko -->
    Scarica Carte
</li>
                       
    

<li>
    <!-- ko with:functionById(2200) -->
        <input class="chkSel_1008010 auth-sel" type="checkbox" data-bind="checked: Active" functionid="2200" functionidparent="1008010" iscontainer="0">
    <!-- /ko -->
    Attiva Carte
</li>
                       
    

<li>
    <!-- ko with:functionById(2160) -->
        <input class="chkSel_1008010 auth-sel" type="checkbox" data-bind="checked: Active" functionid="2160" functionidparent="1008010" iscontainer="0">
    <!-- /ko -->
    Blocco/Sblocco Carte
</li>
                       
    

<li>
    <!-- ko with:functionById(2210) -->
        <input class="chkSel_1008010 auth-sel" type="checkbox" data-bind="checked: Active" functionid="2210" functionidparent="1008010" iscontainer="0">
    <!-- /ko -->
    Estinzione Carte
</li>
                       
    

<li>
    <!-- ko with:functionById(2170) -->
        <input class="chkSel_1008010 auth-sel" type="checkbox" data-bind="checked: Active" functionid="2170" functionidparent="1008010" iscontainer="0">
    <!-- /ko -->
    Pannello di Controllo
</li>
                       
    

<li>
    <!-- ko with:functionById(2190) -->
        <input class="chkSel_1008010 auth-sel" type="checkbox" data-bind="checked: Active" functionid="2190" functionidparent="1008010" iscontainer="0">
    <!-- /ko -->
    Modifica Carte
</li>
                       
    

<li>
    <!-- ko with:functionById(2150) -->
        <input class="chkSel_1008010 auth-sel" type="checkbox" data-bind="checked: Active" functionid="2150" functionidparent="1008010" iscontainer="0">
    <!-- /ko -->
    Ricarica Automatica
</li>
                               </ul>
</li>
                       
    

<li>
    <!-- ko with:functionById(1008020) -->
        <input class="chkSel_1008000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1008020" functionidparent="1008000" iscontainer="1">
    <!-- /ko -->
    Gestione Intestatari
        <ul class="indent" data-idparent="1008020">

    

<li>
    <!-- ko with:functionById(2230) -->
        <input class="chkSel_1008020 auth-sel" type="checkbox" data-bind="checked: Active" functionid="2230" functionidparent="1008020" iscontainer="0">
    <!-- /ko -->
    Edit Intestatari
</li>
                               </ul>
</li>
                       
    

<li>
    <!-- ko with:functionById(1008030) -->
        <input class="chkSel_1008000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1008030" functionidparent="1008000" iscontainer="0">
    <!-- /ko -->
    Gestione Posizione
</li>
                               </ul>
</li>
                                           </ul>
                </div>
                <div class="col-xs-4">
                    <ul class="auth-list noindent">

                    </ul>
                </div>
                <div class="col-xs-4">
                    <ul class="auth-list noindent">

                    </ul>
                </div>
            
                <div class="col-xs-12">
                    <div class="pull-right">
                        <button class="btn btn-primary btn-undo-function-change" type="button" data-bind="" data-panel="auth-panel-1007150">Annulla</button>
                        <button class="btn btn-primary btn-commit-function-change" type="button" data-bind="" data-panel="auth-panel-1007150">Conferma</button>
                    </div>
                </div>
        </div>
        
        

    </div>
    <div class="auth-panel col-xs-12" id="auth-panel-1010000" style="display: none;">
        <div class="top-arrow">
            <div class="col-xs-4 col-xs-offset-4"><span>&nbsp;</span></div>
        </div>
        <div class="row">
            
                <div class="col-xs-12">
                    <p><input class="select-all" functionid="0" type="checkbox">Seleziona tutto</p>
                </div>

                <div class="col-xs-4">
                    <ul class="auth-list noindent">


    

<li>
    <!-- ko with:functionById(1010010) -->
        <input class="chkSel_1010000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1010010" functionidparent="1010000" iscontainer="1">
    <!-- /ko -->
    YouWorld/YouLounge
</li>
                                           </ul>
                </div>
                <div class="col-xs-4">
                    <ul class="auth-list noindent">


    

<li>
    <!-- ko with:functionById(1009040) -->
        <input class="chkSel_1010000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1009040" functionidparent="1010000" iscontainer="0">
    <!-- /ko -->
    YouTrade Finance
</li>
                                           </ul>
                </div>
                <div class="col-xs-4">
                    <ul class="auth-list noindent">


    

<li>
    <!-- ko with:functionById(1002170) -->
        <input class="chkSel_1010000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1002170" functionidparent="1010000" iscontainer="0">
    <!-- /ko -->
    Listino Cambi
</li>
                                           </ul>
                </div>
            
                <div class="col-xs-12">
                    <div class="pull-right">
                        <button class="btn btn-primary btn-undo-function-change" type="button" data-bind="" data-panel="auth-panel-1010000">Annulla</button>
                        <button class="btn btn-primary btn-commit-function-change" type="button" data-bind="" data-panel="auth-panel-1010000">Conferma</button>
                    </div>
                </div>
        </div>
        
        

    </div>
    <div class="auth-panel col-xs-12" id="auth-panel-1007000" style="display: none;">
        <div class="top-arrow">
            <div class="col-xs-4 col-xs-offset-8"><span>&nbsp;</span></div>
        </div>
        <div class="row">
            
                <div class="col-xs-12">
                    <p><input class="select-all" functionid="0" type="checkbox">Seleziona tutto</p>
                </div>

                <div class="col-xs-4">
                    <ul class="auth-list noindent">


    

<li>
    <!-- ko with:functionById(1007010) -->
        <input class="chkSel_1007000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1007010" functionidparent="1007000" iscontainer="1">
    <!-- /ko -->
    Documenti On Line
        <ul class="indent" data-idparent="1007010">

    

<li>
    <!-- ko with:functionById(1007020) -->
        <input class="chkSel_1007010 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1007020" functionidparent="1007010" iscontainer="0">
    <!-- /ko -->
    In Arrivo
</li>
                       
    

<li>
    <!-- ko with:functionById(1007030) -->
        <input class="chkSel_1007010 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1007030" functionidparent="1007010" iscontainer="0">
    <!-- /ko -->
    Archivio Storico
</li>
                       
    

<li>
    <!-- ko with:functionById(1007040) -->
        <input class="chkSel_1007010 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1007040" functionidparent="1007010" iscontainer="0">
    <!-- /ko -->
    Configurazione
</li>
                               </ul>
</li>
                                           </ul>
                </div>
                <div class="col-xs-4">
                    <ul class="auth-list noindent">


    

<li>
    <!-- ko with:functionById(1010020) -->
        <input class="chkSel_1007000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1010020" functionidparent="1007000" iscontainer="1">
    <!-- /ko -->
    YouInvoice
        <ul class="indent" data-idparent="1010020">

    

<li>
    <!-- ko with:functionById(1010021) -->
        <input class="chkSel_1010020 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1010021" functionidparent="1010020" iscontainer="0">
    <!-- /ko -->
    Accedi
</li>
                       
    

<li>
    <!-- ko with:functionById(1010022) -->
        <input class="chkSel_1010020 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1010022" functionidparent="1010020" iscontainer="0">
    <!-- /ko -->
    Attiva
</li>
                       
    

<li>
    <!-- ko with:functionById(1010023) -->
        <input class="chkSel_1010020 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1010023" functionidparent="1010020" iscontainer="0">
    <!-- /ko -->
    Configura
</li>
                               </ul>
</li>
                                           </ul>
                </div>
                <div class="col-xs-4">
                    <ul class="auth-list noindent">


    

<li>
    <!-- ko with:functionById(1007090) -->
        <input class="chkSel_1007000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1007090" functionidparent="1007000" iscontainer="1">
    <!-- /ko -->
    Documenti Addebito/Accredito
        <ul class="indent" data-idparent="1007090">

    

<li>
    <!-- ko with:functionById(17) -->
        <input class="chkSel_1007090 auth-sel" type="checkbox" data-bind="checked: Active" functionid="17" functionidparent="1007090" iscontainer="0">
    <!-- /ko -->
    Scarico Fatture
</li>
                       
    

<li>
    <!-- ko with:functionById(18) -->
        <input class="chkSel_1007090 auth-sel" type="checkbox" data-bind="checked: Active" functionid="18" functionidparent="1007090" iscontainer="0">
    <!-- /ko -->
    Dettaglio Fattura
</li>
                               </ul>
</li>
                       
    

<li>
    <!-- ko with:functionById(1007050) -->
        <input class="chkSel_1007000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1007050" functionidparent="1007000" iscontainer="0">
    <!-- /ko -->
    Contratti e Proposte
</li>
                       
    

<li>
    <!-- ko with:functionById(1007051) -->
        <input class="chkSel_1007000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1007051" functionidparent="1007000" iscontainer="0">
    <!-- /ko -->
    Modulistica
</li>
                                           </ul>
                </div>
            
                <div class="col-xs-12">
                    <div class="pull-right">
                        <button class="btn btn-primary btn-undo-function-change" type="button" data-bind="" data-panel="auth-panel-1007000">Annulla</button>
                        <button class="btn btn-primary btn-commit-function-change" type="button" data-bind="" data-panel="auth-panel-1007000">Conferma</button>
                    </div>
                </div>
        </div>
        
        

    </div>
                            <div class="col-xs-4">
                                <div class="riquadro clearfix" style="height: 151px;">
                                    <h4>Anagrafiche</h4>
                                    <div class="txt_center">
                                        <p><a class="auth-icon anagrafiche ctrl-auth-panel" href="javascript:void(0);" data-panel="auth-panel-1003000"></a></p>
                                        <p>Il gruppo non è abilitato al menu</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="riquadro clearfix" style="height: 151px;">
                                    <h4>Dati e Disposizioni</h4>
                                    <div class="txt_center">
                                        <p><a class="auth-icon dati-e-disposizioni ctrl-auth-panel" href="javascript:void(0);" data-panel="auth-panel-1002000"></a></p>
                                        <p>Il gruppo non è abilitato al menu</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="riquadro clearfix" style="height: 151px;">
                                    <h4>Configura</h4>
                                    <div class="txt_center">
                                        <p><a class="auth-icon configura ctrl-auth-panel" href="javascript:void(0);" data-panel="auth-panel-1005000"></a></p>
                                        <p>Il gruppo è parzialmente abilitato al menu</p>
                                    </div>
                                </div>
                            </div>
                        
    <div class="auth-panel col-xs-12" id="auth-panel-1003000" style="display: none;">
        <div class="top-arrow">
            <div class="col-xs-4 "><span>&nbsp;</span></div>
        </div>
        <div class="row">
            
                <div class="col-xs-12">
                    <p><input class="select-all" functionid="0" type="checkbox">Seleziona tutto</p>
                </div>

                <div class="col-xs-4">
                    <ul class="auth-list noindent">


    

<li>
    <!-- ko with:functionById(1003010) -->
        <input class="chkSel_1003000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1003010" functionidparent="1003000" iscontainer="0">
    <!-- /ko -->
    Clienti
</li>
                       
    

<li>
    <!-- ko with:functionById(1003020) -->
        <input class="chkSel_1003000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1003020" functionidparent="1003000" iscontainer="0">
    <!-- /ko -->
    Fornitori
</li>
                                           </ul>
                </div>
                <div class="col-xs-4">
                    <ul class="auth-list noindent">


    

<li>
    <!-- ko with:functionById(1003040) -->
        <input class="chkSel_1003000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1003040" functionidparent="1003000" iscontainer="0">
    <!-- /ko -->
    Dipendenti
</li>
                       
    

<li>
    <!-- ko with:functionById(1003070) -->
        <input class="chkSel_1003000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1003070" functionidparent="1003000" iscontainer="0">
    <!-- /ko -->
    Importa Anagrafiche
</li>
                                           </ul>
                </div>
                <div class="col-xs-4">
                    <ul class="auth-list noindent">


    

<li>
    <!-- ko with:functionById(1003080) -->
        <input class="chkSel_1003000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1003080" functionidparent="1003000" iscontainer="0">
    <!-- /ko -->
    Cancella Anagrafiche
</li>
                       
    

<li>
    <!-- ko with:functionById(1003090) -->
        <input class="chkSel_1003000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1003090" functionidparent="1003000" iscontainer="0">
    <!-- /ko -->
    Tracciati Anagrafiche
</li>
                                           </ul>
                </div>
            
                <div class="col-xs-12">
                    <div class="pull-right">
                        <button class="btn btn-primary btn-undo-function-change" type="button" data-bind="" data-panel="auth-panel-1003000">Annulla</button>
                        <button class="btn btn-primary btn-commit-function-change" type="button" data-bind="" data-panel="auth-panel-1003000">Conferma</button>
                    </div>
                </div>
        </div>
        
        

    </div>
    <div class="auth-panel col-xs-12" id="auth-panel-1002000" style="display: none;">
        <div class="top-arrow">
            <div class="col-xs-4 col-xs-offset-4"><span>&nbsp;</span></div>
        </div>
        <div class="row">
            
                <div class="col-xs-12">
                    <p><input class="select-all" functionid="0" type="checkbox">Seleziona tutto</p>
                </div>

                <div class="col-xs-4">
                    <ul class="auth-list noindent">


    

<li>
    <!-- ko with:functionById(1002005) -->
        <input class="chkSel_1002000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1002005" functionidparent="1002000" iscontainer="1">
    <!-- /ko -->
    Gestione Disposizioni
        <ul class="indent" data-idparent="1002005">

    

<li>
    <!-- ko with:functionById(1002010) -->
        <input class="chkSel_1002005 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1002010" functionidparent="1002005" iscontainer="0">
    <!-- /ko -->
    Ultime Disposizioni
</li>
                       
    

<li>
    <!-- ko with:functionById(1002020) -->
        <input class="chkSel_1002005 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1002020" functionidparent="1002005" iscontainer="1">
    <!-- /ko -->
    Gestione Distinte
        <ul class="indent" data-idparent="1002020">

    

<li>
    <!-- ko with:functionById(1002021) -->
        <input class="chkSel_1002020 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1002021" functionidparent="1002020" iscontainer="0">
    <!-- /ko -->
    Elenco Distinte
</li>
                       
    

<li>
    <!-- ko with:functionById(1002022) -->
        <input class="chkSel_1002020 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1002022" functionidparent="1002020" iscontainer="0">
    <!-- /ko -->
    Creazione Distinte
</li>
                               </ul>
</li>
                               </ul>
</li>
                                           </ul>
                </div>
                <div class="col-xs-4">
                    <ul class="auth-list noindent">


    

<li>
    <!-- ko with:functionById(1002030) -->
        <input class="chkSel_1002000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1002030" functionidparent="1002000" iscontainer="1">
    <!-- /ko -->
    Gestione Dati
        <ul class="indent" data-idparent="1002030">

    

<li>
    <!-- ko with:functionById(1002040) -->
        <input class="chkSel_1002030 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1002040" functionidparent="1002030" iscontainer="1">
    <!-- /ko -->
    Importa Disposizioni
        <ul class="indent" data-idparent="1002040">

    

<li>
    <!-- ko with:functionById(1002041) -->
        <input class="chkSel_1002040 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1002041" functionidparent="1002040" iscontainer="0">
    <!-- /ko -->
    Distinte
</li>
                       
    

<li>
    <!-- ko with:functionById(1002043) -->
        <input class="chkSel_1002040 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1002043" functionidparent="1002040" iscontainer="0">
    <!-- /ko -->
    Allineamento IBAN
</li>
                       
    

<li>
    <!-- ko with:functionById(1002044) -->
        <input class="chkSel_1002040 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1002044" functionidparent="1002040" iscontainer="0">
    <!-- /ko -->
    Incassi Estero
</li>
                       
    

<li>
    <!-- ko with:functionById(1002046) -->
        <input class="chkSel_1002040 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1002046" functionidparent="1002040" iscontainer="0">
    <!-- /ko -->
    Strutture Libere
</li>
                               </ul>
</li>
                       
    

<li>
    <!-- ko with:functionById(1002050) -->
        <input class="chkSel_1002030 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1002050" functionidparent="1002030" iscontainer="0">
    <!-- /ko -->
    Importa/Assegna Conto
</li>
                       
    

<li>
    <!-- ko with:functionById(1002060) -->
        <input class="chkSel_1002030 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1002060" functionidparent="1002030" iscontainer="0">
    <!-- /ko -->
    Log Importazioni
</li>
                       
    

<li>
    <!-- ko with:functionById(1002070) -->
        <input class="chkSel_1002030 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1002070" functionidparent="1002030" iscontainer="1">
    <!-- /ko -->
    Estrai Dati Informativi
        <ul class="indent" data-idparent="1002070">

    

<li>
    <!-- ko with:functionById(1002072) -->
        <input class="chkSel_1002070 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1002072" functionidparent="1002070" iscontainer="0">
    <!-- /ko -->
    Esiti Allineamento Rid
</li>
                       
    

<li>
    <!-- ko with:functionById(1002074) -->
        <input class="chkSel_1002070 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1002074" functionidparent="1002070" iscontainer="0">
    <!-- /ko -->
    Esiti Allineamento Iban
</li>
                       
    

<li>
    <!-- ko with:functionById(1002071) -->
        <input class="chkSel_1002070 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1002071" functionidparent="1002070" iscontainer="0">
    <!-- /ko -->
    Altri Dati Informativi
</li>
                               </ul>
</li>
                               </ul>
</li>
                                           </ul>
                </div>
                <div class="col-xs-4">
                    <ul class="auth-list noindent">


    

<li>
    <!-- ko with:functionById(1002150) -->
        <input class="chkSel_1002000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1002150" functionidparent="1002000" iscontainer="0">
    <!-- /ko -->
    Strutture Libere
</li>
                                           </ul>
                </div>
            
                <div class="col-xs-12">
                    <div class="pull-right">
                        <button class="btn btn-primary btn-undo-function-change" type="button" data-bind="" data-panel="auth-panel-1002000">Annulla</button>
                        <button class="btn btn-primary btn-commit-function-change" type="button" data-bind="" data-panel="auth-panel-1002000">Conferma</button>
                    </div>
                </div>
        </div>
        
        

    </div>
    <div class="auth-panel col-xs-12" id="auth-panel-1005000" style="display: none;">
        <div class="top-arrow">
            <div class="col-xs-4 col-xs-offset-8"><span>&nbsp;</span></div>
        </div>
        <div class="row">
            
                <div class="col-xs-12">
                    <p><input class="select-all" functionid="0" type="checkbox">Seleziona tutto</p>
                </div>

                <div class="col-xs-4">
                    <ul class="auth-list noindent">


    

<li>
    <!-- ko with:functionById(1005010) -->
        <input class="chkSel_1005000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1005010" functionidparent="1005000" iscontainer="0">
    <!-- /ko -->
    Home Page
</li>
                                           </ul>
                </div>
                <div class="col-xs-4">
                    <ul class="auth-list noindent">


    

<li>
    <!-- ko with:functionById(1005020) -->
        <input class="chkSel_1005000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1005020" functionidparent="1005000" iscontainer="1">
    <!-- /ko -->
    Sicurezza
        <ul class="indent" data-idparent="1005020">

    

<li>
    <!-- ko with:functionById(1005025) -->
        <input class="chkSel_1005020 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1005025" functionidparent="1005020" iscontainer="0">
    <!-- /ko -->
    Info Sicurezza
</li>
                       
    

<li>
    <!-- ko with:functionById(1005030) -->
        <input class="chkSel_1005020 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1005030" functionidparent="1005020" iscontainer="0">
    <!-- /ko -->
    Cambia Password
</li>
                       
    

<li>
    <!-- ko with:functionById(1005035) -->
        <input class="chkSel_1005020 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1005035" functionidparent="1005020" iscontainer="0">
    <!-- /ko -->
    Gestione Contatti
</li>
                       
    

<li>
    <!-- ko with:functionById(1005040) -->
        <input class="chkSel_1005020 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1005040" functionidparent="1005020" iscontainer="0">
    <!-- /ko -->
    Gestione Dispositivi
</li>
                       
    

<li>
    <!-- ko with:functionById(1005050) -->
        <input class="chkSel_1005020 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1005050" functionidparent="1005020" iscontainer="0">
    <!-- /ko -->
    Info Accessi
</li>
                       
    

<li>
    <!-- ko with:functionById(1005060) -->
        <input class="chkSel_1005020 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1005060" functionidparent="1005020" iscontainer="0">
    <!-- /ko -->
    Info Bonifico
</li>
                               </ul>
</li>
                                           </ul>
                </div>
                <div class="col-xs-4">
                    <ul class="auth-list noindent">


    

<li>
    <!-- ko with:functionById(1005070) -->
        <input class="chkSel_1005000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1005070" functionidparent="1005000" iscontainer="1">
    <!-- /ko -->
    Postazione
        <ul class="indent" data-idparent="1005070">

    

<li>
    <!-- ko with:functionById(1005080) -->
        <input class="chkSel_1005070 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1005080" functionidparent="1005070" iscontainer="0">
    <!-- /ko -->
    Aziende
</li>
                       
    

<li>
    <!-- ko with:functionById(1005090) -->
        <input class="chkSel_1005070 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1005090" functionidparent="1005070" iscontainer="0">
    <!-- /ko -->
    Banche
</li>
                       
    

<li>
    <!-- ko with:functionById(1005100) -->
        <input class="chkSel_1005070 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1005100" functionidparent="1005070" iscontainer="0">
    <!-- /ko -->
    Conti
</li>
                               </ul>
</li>
                       
    

<li>
    <!-- ko with:functionById(1005110) -->
        <input class="chkSel_1005000 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1005110" functionidparent="1005000" iscontainer="1">
    <!-- /ko -->
    Profilatura Utenti
        <ul class="indent" data-idparent="1005110">

    

<li>
    <!-- ko with:functionById(1005120) -->
        <input class="chkSel_1005110 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1005120" functionidparent="1005110" iscontainer="0">
    <!-- /ko -->
    Gestione Gruppi
</li>
                       
    

<li>
    <!-- ko with:functionById(1005130) -->
        <input class="chkSel_1005110 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1005130" functionidparent="1005110" iscontainer="0">
    <!-- /ko -->
    Creazione Utenti
</li>
                       
    

<li>
    <!-- ko with:functionById(1005140) -->
        <input class="chkSel_1005110 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1005140" functionidparent="1005110" iscontainer="0">
    <!-- /ko -->
    Elenco Utenti
</li>
                       
    

<li>
    <!-- ko with:functionById(1005150) -->
        <input class="chkSel_1005110 auth-sel" type="checkbox" data-bind="checked: Active" functionid="1005150" functionidparent="1005110" iscontainer="0">
    <!-- /ko -->
    Gestione Iter Autorizzativo
</li>
                               </ul>
</li>
                                           </ul>
                </div>
            
                <div class="col-xs-12">
                    <div class="pull-right">
                        <button class="btn btn-primary btn-undo-function-change" type="button" data-bind="" data-panel="auth-panel-1005000">Annulla</button>
                        <button class="btn btn-primary btn-commit-function-change" type="button" data-bind="" data-panel="auth-panel-1005000">Conferma</button>
                    </div>
                </div>
        </div>
        
        

    </div>

                    </div>
                </div>

            </form>
        </div>
        <div class="pull-right margin-bottom20">
            <button class="btn btn-primary" id="goToUtentiButton" type="button">Gestione Utenti</button>
            <button class="btn btn-primary" id="goToGruppiButton" type="button" data-bind="">Gestione Gruppi</button>

        </div>
        <div class="clearfix"></div>
<script type="text/javascript">
                                            $(function () { koRegisterViewModel("defaultViewModel",{"Gruppo":{"Id":21972,"IsTemplate":false,"Logo":"icon-8","Nome":"Provanome","Descrizione":"Provadescrizione","NumeroUtenti":0},"Funzioni":[{"IdFunzione":1001000,"IdFunzioneParent":0,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":1,"Nome":"Info Conti","Logo":"sportello"},{"IdFunzione":1001010,"IdFunzioneParent":1001000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Saldo e Movimenti C/c","Logo":"icon-saldo"},{"IdFunzione":1001011,"IdFunzioneParent":1001010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Movimenti C/C On Line","Logo":"icon-movOnline"},{"IdFunzione":1001015,"IdFunzioneParent":1001010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Movimenti C/C CBI","Logo":"icon-movCBI"},{"IdFunzione":1001013,"IdFunzioneParent":1001010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Saldi C/C On Line","Logo":"icon-saldoOnline"},{"IdFunzione":1001016,"IdFunzioneParent":1001010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Saldi C/C CBI","Logo":"icon-saldoCBI"},{"IdFunzione":1001018,"IdFunzioneParent":1001000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Finanziamenti Rateali","Logo":null},{"IdFunzione":1001020,"IdFunzioneParent":1001000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Portafoglio","Logo":null},{"IdFunzione":1001021,"IdFunzioneParent":1001020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Movimenti Portafoglio","Logo":"icon-movPortafoglio"},{"IdFunzione":1001022,"IdFunzioneParent":1001020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Saldi Portafoglio","Logo":"icon-saldoPortafoglio"},{"IdFunzione":1001030,"IdFunzioneParent":1001000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Conti Anticipi","Logo":null},{"IdFunzione":1001040,"IdFunzioneParent":1001000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Dossier Titoli","Logo":null},{"IdFunzione":1001051,"IdFunzioneParent":1001000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Domiciliazioni","Logo":null},{"IdFunzione":1001060,"IdFunzioneParent":1001000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Situazione Assegni","Logo":null},{"IdFunzione":1001070,"IdFunzioneParent":1001000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Estratto Conto Periodico","Logo":null},{"IdFunzione":1001080,"IdFunzioneParent":1001000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Stampa Movimenti Periodici C/c","Logo":null},{"IdFunzione":1004000,"IdFunzioneParent":0,"Enabled":true,"Active":true,"IsContainer":true,"IsMenuItem":true,"Livello":1,"Nome":"Pagamenti","Logo":"pagamenti"},{"IdFunzione":1004023,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Bonifico Singolo","Logo":null},{"IdFunzione":1004022,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Bonifico per detrazioni","Logo":null},{"IdFunzione":1004010,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Bonifici","Logo":"icon-bonifici"},{"IdFunzione":1004020,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":2,"Nome":"Bonifici Italia","Logo":null},{"IdFunzione":1004030,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Stipendi","Logo":null},{"IdFunzione":1004040,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":2,"Nome":"Stipendi Italia","Logo":null},{"IdFunzione":1004070,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Pagamento Riba","Logo":null},{"IdFunzione":1004080,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Pagamento Riba Manuale","Logo":null},{"IdFunzione":1004090,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Deleghe F24","Logo":"icon-f24"},{"IdFunzione":1004100,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"F24 Elementi Identificativi","Logo":null},{"IdFunzione":1004101,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Modulo F23","Logo":null},{"IdFunzione":1004102,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Riepilogo F23","Logo":null},{"IdFunzione":1004110,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Quietanze F24","Logo":null},{"IdFunzione":1004120,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Richiedi Assegni Circolari","Logo":null},{"IdFunzione":1004130,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Richiedi Assegni di Quietanza","Logo":null},{"IdFunzione":1004140,"IdFunzioneParent":1004000,"Enabled":true,"Active":true,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Bollettini Bancari","Logo":null},{"IdFunzione":1004150,"IdFunzioneParent":1004000,"Enabled":true,"Active":true,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Bollettini Postali","Logo":null},{"IdFunzione":1004160,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Mav/Rav","Logo":null},{"IdFunzione":1004170,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Utenze","Logo":null},{"IdFunzione":1004180,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Ricariche Telefoniche","Logo":null},{"IdFunzione":1004115,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"CBILL - pagoPA","Logo":null},{"IdFunzione":1004210,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Bollo Auto","Logo":null},{"IdFunzione":1004200,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Esiti Pagamenti","Logo":"icon-esitiAltriPagamenti"},{"IdFunzione":1004201,"IdFunzioneParent":1004200,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Bonifici Italia - Richiesta Assegni","Logo":"icon-esitiBonifici"},{"IdFunzione":1004202,"IdFunzioneParent":1004200,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Stipendi Italia","Logo":"icon-esitiStipendi"},{"IdFunzione":1004203,"IdFunzioneParent":1004200,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Deleghe F24","Logo":"icon-esitiF24"},{"IdFunzione":1004204,"IdFunzioneParent":1004200,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":3,"Nome":"Altri Pagamenti","Logo":"icon-esitiAltri"},{"IdFunzione":2002311,"IdFunzioneParent":1004204,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Esiti Bonifici","Logo":null},{"IdFunzione":2002312,"IdFunzioneParent":1004204,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Esiti Stipendi","Logo":null},{"IdFunzione":2002318,"IdFunzioneParent":1004204,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Esiti Bollettini Bancari","Logo":null},{"IdFunzione":2002319,"IdFunzioneParent":1004204,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Esiti Pagamenti","Logo":null},{"IdFunzione":1006000,"IdFunzioneParent":0,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":1,"Nome":"Incassi","Logo":"incassi"},{"IdFunzione":1006010,"IdFunzioneParent":1006000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Riba","Logo":null},{"IdFunzione":1006020,"IdFunzioneParent":1006000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Mav","Logo":null},{"IdFunzione":1006030,"IdFunzioneParent":1006000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Sdd","Logo":null},{"IdFunzione":1006050,"IdFunzioneParent":1006000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Varia Coordinate Rid","Logo":null},{"IdFunzione":1006090,"IdFunzioneParent":1006000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Seda","Logo":null},{"IdFunzione":1006110,"IdFunzioneParent":1006090,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Rendiconto","Logo":null},{"IdFunzione":1006120,"IdFunzioneParent":1006090,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Richiesta Dettaglio Rendiconto","Logo":null},{"IdFunzione":1006140,"IdFunzioneParent":1006000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Allineamento Iban","Logo":null},{"IdFunzione":1006150,"IdFunzioneParent":1006000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Esiti Incassi","Logo":"icon-esitiIncassi"},{"IdFunzione":1006151,"IdFunzioneParent":1006150,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Riba - Rid - Mav","Logo":"icon-esitiRiba"},{"IdFunzione":1006152,"IdFunzioneParent":1006150,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Sdd","Logo":"icon-esitiDirectDebit"},{"IdFunzione":1006153,"IdFunzioneParent":1006150,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Bollettini Bancari","Logo":"icon-esitiBollettiniBancari"},{"IdFunzione":1006154,"IdFunzioneParent":1006150,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Allineamento Rid","Logo":"icon-esitiAllineamentoArchivi"},{"IdFunzione":1006156,"IdFunzioneParent":1006150,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Allineamento Iban","Logo":"icon-esitiAllineamentoIban"},{"IdFunzione":1006157,"IdFunzioneParent":1006150,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Beneficiario","Logo":"icon-esitiBeneficiario"},{"IdFunzione":1007150,"IdFunzioneParent":0,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":1,"Nome":"Carte","Logo":"carte"},{"IdFunzione":1008000,"IdFunzioneParent":1007150,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Carte Business","Logo":null},{"IdFunzione":1008010,"IdFunzioneParent":1008000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":3,"Nome":"Gestione Carte","Logo":null},{"IdFunzione":2120,"IdFunzioneParent":1008010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Movimenti Carte","Logo":null},{"IdFunzione":2130,"IdFunzioneParent":1008010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Ricarica Carte","Logo":null},{"IdFunzione":2140,"IdFunzioneParent":1008010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Scarica Carte","Logo":null},{"IdFunzione":2200,"IdFunzioneParent":1008010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Attiva Carte","Logo":null},{"IdFunzione":2160,"IdFunzioneParent":1008010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Blocco/Sblocco Carte","Logo":null},{"IdFunzione":2210,"IdFunzioneParent":1008010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Estinzione Carte","Logo":null},{"IdFunzione":2170,"IdFunzioneParent":1008010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Pannello di Controllo","Logo":null},{"IdFunzione":2190,"IdFunzioneParent":1008010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Modifica Carte","Logo":null},{"IdFunzione":2150,"IdFunzioneParent":1008010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Ricarica Automatica","Logo":null},{"IdFunzione":1008020,"IdFunzioneParent":1008000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":3,"Nome":"Gestione Intestatari","Logo":null},{"IdFunzione":2230,"IdFunzioneParent":1008020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Edit Intestatari","Logo":null},{"IdFunzione":1008030,"IdFunzioneParent":1008000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Gestione Posizione","Logo":null},{"IdFunzione":1010000,"IdFunzioneParent":0,"Enabled":true,"Active":true,"IsContainer":true,"IsMenuItem":true,"Livello":1,"Nome":"Estero","Logo":"estero"},{"IdFunzione":1010010,"IdFunzioneParent":1010000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"YouWorld/YouLounge","Logo":null},{"IdFunzione":1007000,"IdFunzioneParent":0,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":1,"Nome":"Documenti e Fatture","Logo":"documenti"},{"IdFunzione":1007010,"IdFunzioneParent":1007000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Documenti On Line","Logo":null},{"IdFunzione":1007020,"IdFunzioneParent":1007010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"In Arrivo","Logo":"icon-documentiInArrivo"},{"IdFunzione":1007030,"IdFunzioneParent":1007010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Archivio Storico","Logo":null},{"IdFunzione":1007040,"IdFunzioneParent":1007010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Configurazione","Logo":null},{"IdFunzione":1010020,"IdFunzioneParent":1007000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"YouInvoice","Logo":null},{"IdFunzione":1010021,"IdFunzioneParent":1010020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Accedi","Logo":null},{"IdFunzione":1010022,"IdFunzioneParent":1010020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Attiva","Logo":null},{"IdFunzione":1010023,"IdFunzioneParent":1010020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":3,"Nome":"Configura","Logo":null},{"IdFunzione":1007090,"IdFunzioneParent":1007000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Documenti Addebito/Accredito","Logo":"icon-fattureYBW"},{"IdFunzione":17,"IdFunzioneParent":1007090,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":3,"Nome":"Scarico Fatture","Logo":null},{"IdFunzione":18,"IdFunzioneParent":1007090,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":3,"Nome":"Dettaglio Fattura","Logo":null},{"IdFunzione":1007050,"IdFunzioneParent":1007000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Contratti e Proposte","Logo":null},{"IdFunzione":1007051,"IdFunzioneParent":1007000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Modulistica","Logo":null},{"IdFunzione":1009040,"IdFunzioneParent":1010000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"YouTrade Finance","Logo":null},{"IdFunzione":1003000,"IdFunzioneParent":0,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":1,"Nome":"Anagrafiche","Logo":"anagrafiche"},{"IdFunzione":1003010,"IdFunzioneParent":1003000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Clienti","Logo":null},{"IdFunzione":1003020,"IdFunzioneParent":1003000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Fornitori","Logo":null},{"IdFunzione":1003040,"IdFunzioneParent":1003000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Dipendenti","Logo":null},{"IdFunzione":1003070,"IdFunzioneParent":1003000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Importa Anagrafiche","Logo":null},{"IdFunzione":1003080,"IdFunzioneParent":1003000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Cancella Anagrafiche","Logo":null},{"IdFunzione":1003090,"IdFunzioneParent":1003000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Tracciati Anagrafiche","Logo":null},{"IdFunzione":1002000,"IdFunzioneParent":0,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":1,"Nome":"Dati e Disposizioni","Logo":"dati-e-disposizioni"},{"IdFunzione":1002005,"IdFunzioneParent":1002000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Gestione Disposizioni","Logo":null},{"IdFunzione":1002010,"IdFunzioneParent":1002005,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Ultime Disposizioni","Logo":null},{"IdFunzione":1002020,"IdFunzioneParent":1002005,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":3,"Nome":"Gestione Distinte","Logo":null},{"IdFunzione":1002021,"IdFunzioneParent":1002020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Elenco Distinte","Logo":"icon-elencoDistinte"},{"IdFunzione":1002022,"IdFunzioneParent":1002020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Creazione Distinte","Logo":"icon-creaDistinte"},{"IdFunzione":1002030,"IdFunzioneParent":1002000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Gestione Dati","Logo":null},{"IdFunzione":1002040,"IdFunzioneParent":1002030,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":3,"Nome":"Importa Disposizioni","Logo":null},{"IdFunzione":1002041,"IdFunzioneParent":1002040,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Distinte","Logo":"icon-importaDistinte"},{"IdFunzione":1002043,"IdFunzioneParent":1002040,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Allineamento IBAN","Logo":"icon-importaAllineamentoIban"},{"IdFunzione":1002044,"IdFunzioneParent":1002040,"Enabled":false,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Incassi Estero","Logo":"icon-importaIncassiEstero"},{"IdFunzione":1002046,"IdFunzioneParent":1002040,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Strutture Libere","Logo":"icon-importaStruttureLibere"},{"IdFunzione":1002050,"IdFunzioneParent":1002030,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Importa/Assegna Conto","Logo":null},{"IdFunzione":1002060,"IdFunzioneParent":1002030,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Log Importazioni","Logo":null},{"IdFunzione":1002070,"IdFunzioneParent":1002030,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":3,"Nome":"Estrai Dati Informativi","Logo":null},{"IdFunzione":1002072,"IdFunzioneParent":1002070,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Esiti Allineamento Rid","Logo":"icon-estraiEsitiAllineamentoArchivi"},{"IdFunzione":1002074,"IdFunzioneParent":1002070,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Esiti Allineamento Iban","Logo":"icon-estraiEsitiAllineamentoIban"},{"IdFunzione":1002071,"IdFunzioneParent":1002070,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Altri Dati Informativi","Logo":"icon-estraiInformative"},{"IdFunzione":1002150,"IdFunzioneParent":1002000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Strutture Libere","Logo":null},{"IdFunzione":1002170,"IdFunzioneParent":1010000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Listino Cambi","Logo":null},{"IdFunzione":1005000,"IdFunzioneParent":0,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":1,"Nome":"Configura","Logo":"configura"},{"IdFunzione":1005010,"IdFunzioneParent":1005000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Home Page","Logo":null},{"IdFunzione":1005020,"IdFunzioneParent":1005000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Sicurezza","Logo":null},{"IdFunzione":1005025,"IdFunzioneParent":1005020,"Enabled":true,"Active":true,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Info Sicurezza","Logo":null},{"IdFunzione":1005030,"IdFunzioneParent":1005020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Cambia Password","Logo":null},{"IdFunzione":1005035,"IdFunzioneParent":1005020,"Enabled":true,"Active":true,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Gestione Contatti","Logo":null},{"IdFunzione":1005040,"IdFunzioneParent":1005020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Gestione Dispositivi","Logo":null},{"IdFunzione":1005050,"IdFunzioneParent":1005020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Info Accessi","Logo":null},{"IdFunzione":1005060,"IdFunzioneParent":1005020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Info Bonifico","Logo":null},{"IdFunzione":1005070,"IdFunzioneParent":1005000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Postazione","Logo":null},{"IdFunzione":1005080,"IdFunzioneParent":1005070,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Aziende","Logo":null},{"IdFunzione":1005090,"IdFunzioneParent":1005070,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Banche","Logo":null},{"IdFunzione":1005100,"IdFunzioneParent":1005070,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Conti","Logo":null},{"IdFunzione":1005110,"IdFunzioneParent":1005000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Profilatura Utenti","Logo":null},{"IdFunzione":1005120,"IdFunzioneParent":1005110,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Gestione Gruppi","Logo":null},{"IdFunzione":1005130,"IdFunzioneParent":1005110,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Creazione Utenti","Logo":null},{"IdFunzione":1005140,"IdFunzioneParent":1005110,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Elenco Utenti","Logo":null},{"IdFunzione":1005150,"IdFunzioneParent":1005110,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Gestione Iter Autorizzativo","Logo":null},{"IdFunzione":1005015,"IdFunzioneParent":1005000,"Enabled":true,"Active":true,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Tutorial","Logo":null}]}, true);
            koBackup('defaultViewModel');

            koRootViewModel.functionById = function (functionId) {
                var toRet = null;
                var iterationCount = 0;
                functionId = '' + functionId;
                var currentModel = koRootViewModel.defaultViewModel;

                //if (!currentModel._hashFunzioni) {
                //    debugger;
                //    currentModel._hashFunzioni = new Hashtable();
                //    $.each(currentModel.Funzioni(), function (index, item) {
                //        currentModel._hashFunzioni.put('' + item.IdFunzione(), item);
                //    });
                //}
                //return currentModel._hashFunzioni.get(functionId);

                $.each(currentModel.Funzioni(), function (index, item) {
                    iterationCount++;
                    if ('' + item.IdFunzione() == functionId) {
                        toRet = item;
                        return false;
                    }
                    return true;
                });
                // Logger.debugMessage('FunctionById: ' + functionId + ' - ' + iterationCount + ' iterations');
                return toRet;
            };
        koUpdateViewModelBinding();}); </script>
    <script type="text/javascript">
    $(function () {
        var currentDiv = $('#a513cac1_e748_4e63_bfc5_9f1ae267cda8');

        //var treeObject = [{"Item":{"IdFunzione":1001000,"IdFunzioneParent":0,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":1,"Nome":"Info Conti","Logo":"sportello"},"Childs":[{"Item":{"IdFunzione":1001010,"IdFunzioneParent":1001000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Saldo e Movimenti C/c","Logo":"icon-saldo"},"Childs":[{"Item":{"IdFunzione":1001011,"IdFunzioneParent":1001010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Movimenti C/C On Line","Logo":"icon-movOnline"},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1001015,"IdFunzioneParent":1001010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Movimenti C/C CBI","Logo":"icon-movCBI"},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1001013,"IdFunzioneParent":1001010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Saldi C/C On Line","Logo":"icon-saldoOnline"},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1001016,"IdFunzioneParent":1001010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Saldi C/C CBI","Logo":"icon-saldoCBI"},"Childs":[],"ChildCount":0,"ItemsCount":1}],"ChildCount":4,"ItemsCount":5},{"Item":{"IdFunzione":1001018,"IdFunzioneParent":1001000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Finanziamenti Rateali","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1001020,"IdFunzioneParent":1001000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Portafoglio","Logo":null},"Childs":[{"Item":{"IdFunzione":1001021,"IdFunzioneParent":1001020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Movimenti Portafoglio","Logo":"icon-movPortafoglio"},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1001022,"IdFunzioneParent":1001020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Saldi Portafoglio","Logo":"icon-saldoPortafoglio"},"Childs":[],"ChildCount":0,"ItemsCount":1}],"ChildCount":2,"ItemsCount":3},{"Item":{"IdFunzione":1001030,"IdFunzioneParent":1001000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Conti Anticipi","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1001040,"IdFunzioneParent":1001000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Dossier Titoli","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1001051,"IdFunzioneParent":1001000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Domiciliazioni","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1001060,"IdFunzioneParent":1001000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Situazione Assegni","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1001070,"IdFunzioneParent":1001000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Estratto Conto Periodico","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1001080,"IdFunzioneParent":1001000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Stampa Movimenti Periodici C/c","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1}],"ChildCount":15,"ItemsCount":16},{"Item":{"IdFunzione":1004000,"IdFunzioneParent":0,"Enabled":true,"Active":true,"IsContainer":true,"IsMenuItem":true,"Livello":1,"Nome":"Pagamenti","Logo":"pagamenti"},"Childs":[{"Item":{"IdFunzione":1004023,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Bonifico Singolo","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1004022,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Bonifico per detrazioni","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1004010,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Bonifici","Logo":"icon-bonifici"},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1004020,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":2,"Nome":"Bonifici Italia","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1004030,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Stipendi","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1004040,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":2,"Nome":"Stipendi Italia","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1004070,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Pagamento Riba","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1004080,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Pagamento Riba Manuale","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1004090,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Deleghe F24","Logo":"icon-f24"},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1004100,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"F24 Elementi Identificativi","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1004101,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Modulo F23","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1004102,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Riepilogo F23","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1004110,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Quietanze F24","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1004120,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Richiedi Assegni Circolari","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1004130,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Richiedi Assegni di Quietanza","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1004140,"IdFunzioneParent":1004000,"Enabled":true,"Active":true,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Bollettini Bancari","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1004150,"IdFunzioneParent":1004000,"Enabled":true,"Active":true,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Bollettini Postali","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1004160,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Mav/Rav","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1004170,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Utenze","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1004180,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Ricariche Telefoniche","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1004115,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"CBILL - pagoPA","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1004210,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Bollo Auto","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1004200,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Esiti Pagamenti","Logo":"icon-esitiAltriPagamenti"},"Childs":[{"Item":{"IdFunzione":1004201,"IdFunzioneParent":1004200,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Bonifici Italia - Richiesta Assegni","Logo":"icon-esitiBonifici"},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1004202,"IdFunzioneParent":1004200,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Stipendi Italia","Logo":"icon-esitiStipendi"},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1004203,"IdFunzioneParent":1004200,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Deleghe F24","Logo":"icon-esitiF24"},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1004204,"IdFunzioneParent":1004200,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":3,"Nome":"Altri Pagamenti","Logo":"icon-esitiAltri"},"Childs":[{"Item":{"IdFunzione":2002311,"IdFunzioneParent":1004204,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Esiti Bonifici","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":2002312,"IdFunzioneParent":1004204,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Esiti Stipendi","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":2002318,"IdFunzioneParent":1004204,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Esiti Bollettini Bancari","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":2002319,"IdFunzioneParent":1004204,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Esiti Pagamenti","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1}],"ChildCount":4,"ItemsCount":5}],"ChildCount":8,"ItemsCount":9}],"ChildCount":31,"ItemsCount":32},{"Item":{"IdFunzione":1006000,"IdFunzioneParent":0,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":1,"Nome":"Incassi","Logo":"incassi"},"Childs":[{"Item":{"IdFunzione":1006010,"IdFunzioneParent":1006000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Riba","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1006020,"IdFunzioneParent":1006000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Mav","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1006030,"IdFunzioneParent":1006000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Sdd","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1006050,"IdFunzioneParent":1006000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Varia Coordinate Rid","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1006090,"IdFunzioneParent":1006000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Seda","Logo":null},"Childs":[{"Item":{"IdFunzione":1006110,"IdFunzioneParent":1006090,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Rendiconto","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1006120,"IdFunzioneParent":1006090,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Richiesta Dettaglio Rendiconto","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1}],"ChildCount":2,"ItemsCount":3},{"Item":{"IdFunzione":1006140,"IdFunzioneParent":1006000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Allineamento Iban","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1006150,"IdFunzioneParent":1006000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Esiti Incassi","Logo":"icon-esitiIncassi"},"Childs":[{"Item":{"IdFunzione":1006151,"IdFunzioneParent":1006150,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Riba - Rid - Mav","Logo":"icon-esitiRiba"},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1006152,"IdFunzioneParent":1006150,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Sdd","Logo":"icon-esitiDirectDebit"},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1006153,"IdFunzioneParent":1006150,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Bollettini Bancari","Logo":"icon-esitiBollettiniBancari"},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1006154,"IdFunzioneParent":1006150,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Allineamento Rid","Logo":"icon-esitiAllineamentoArchivi"},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1006156,"IdFunzioneParent":1006150,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Allineamento Iban","Logo":"icon-esitiAllineamentoIban"},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1006157,"IdFunzioneParent":1006150,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Beneficiario","Logo":"icon-esitiBeneficiario"},"Childs":[],"ChildCount":0,"ItemsCount":1}],"ChildCount":6,"ItemsCount":7}],"ChildCount":15,"ItemsCount":16},{"Item":{"IdFunzione":1007150,"IdFunzioneParent":0,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":1,"Nome":"Carte","Logo":"carte"},"Childs":[{"Item":{"IdFunzione":1008000,"IdFunzioneParent":1007150,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Carte Business","Logo":null},"Childs":[{"Item":{"IdFunzione":1008010,"IdFunzioneParent":1008000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":3,"Nome":"Gestione Carte","Logo":null},"Childs":[{"Item":{"IdFunzione":2120,"IdFunzioneParent":1008010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Movimenti Carte","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":2130,"IdFunzioneParent":1008010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Ricarica Carte","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":2140,"IdFunzioneParent":1008010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Scarica Carte","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":2200,"IdFunzioneParent":1008010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Attiva Carte","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":2160,"IdFunzioneParent":1008010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Blocco/Sblocco Carte","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":2210,"IdFunzioneParent":1008010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Estinzione Carte","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":2170,"IdFunzioneParent":1008010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Pannello di Controllo","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":2190,"IdFunzioneParent":1008010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Modifica Carte","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":2150,"IdFunzioneParent":1008010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Ricarica Automatica","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1}],"ChildCount":9,"ItemsCount":10},{"Item":{"IdFunzione":1008020,"IdFunzioneParent":1008000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":3,"Nome":"Gestione Intestatari","Logo":null},"Childs":[{"Item":{"IdFunzione":2230,"IdFunzioneParent":1008020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Edit Intestatari","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1}],"ChildCount":1,"ItemsCount":2},{"Item":{"IdFunzione":1008030,"IdFunzioneParent":1008000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Gestione Posizione","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1}],"ChildCount":13,"ItemsCount":14}],"ChildCount":14,"ItemsCount":15},{"Item":{"IdFunzione":1010000,"IdFunzioneParent":0,"Enabled":true,"Active":true,"IsContainer":true,"IsMenuItem":true,"Livello":1,"Nome":"Estero","Logo":"estero"},"Childs":[{"Item":{"IdFunzione":1010010,"IdFunzioneParent":1010000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"YouWorld/YouLounge","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1009040,"IdFunzioneParent":1010000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"YouTrade Finance","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1002170,"IdFunzioneParent":1010000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Listino Cambi","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1}],"ChildCount":3,"ItemsCount":4},{"Item":{"IdFunzione":1007000,"IdFunzioneParent":0,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":1,"Nome":"Documenti e Fatture","Logo":"documenti"},"Childs":[{"Item":{"IdFunzione":1007010,"IdFunzioneParent":1007000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Documenti On Line","Logo":null},"Childs":[{"Item":{"IdFunzione":1007020,"IdFunzioneParent":1007010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"In Arrivo","Logo":"icon-documentiInArrivo"},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1007030,"IdFunzioneParent":1007010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Archivio Storico","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1007040,"IdFunzioneParent":1007010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Configurazione","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1}],"ChildCount":3,"ItemsCount":4},{"Item":{"IdFunzione":1010020,"IdFunzioneParent":1007000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"YouInvoice","Logo":null},"Childs":[{"Item":{"IdFunzione":1010021,"IdFunzioneParent":1010020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Accedi","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1010022,"IdFunzioneParent":1010020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Attiva","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1010023,"IdFunzioneParent":1010020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":3,"Nome":"Configura","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1}],"ChildCount":3,"ItemsCount":4},{"Item":{"IdFunzione":1007090,"IdFunzioneParent":1007000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Documenti Addebito/Accredito","Logo":"icon-fattureYBW"},"Childs":[{"Item":{"IdFunzione":17,"IdFunzioneParent":1007090,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":3,"Nome":"Scarico Fatture","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":18,"IdFunzioneParent":1007090,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":3,"Nome":"Dettaglio Fattura","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1}],"ChildCount":2,"ItemsCount":3},{"Item":{"IdFunzione":1007050,"IdFunzioneParent":1007000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Contratti e Proposte","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1007051,"IdFunzioneParent":1007000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Modulistica","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1}],"ChildCount":13,"ItemsCount":14},{"Item":{"IdFunzione":1003000,"IdFunzioneParent":0,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":1,"Nome":"Anagrafiche","Logo":"anagrafiche"},"Childs":[{"Item":{"IdFunzione":1003010,"IdFunzioneParent":1003000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Clienti","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1003020,"IdFunzioneParent":1003000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Fornitori","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1003040,"IdFunzioneParent":1003000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Dipendenti","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1003070,"IdFunzioneParent":1003000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Importa Anagrafiche","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1003080,"IdFunzioneParent":1003000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Cancella Anagrafiche","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1003090,"IdFunzioneParent":1003000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Tracciati Anagrafiche","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1}],"ChildCount":6,"ItemsCount":7},{"Item":{"IdFunzione":1002000,"IdFunzioneParent":0,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":1,"Nome":"Dati e Disposizioni","Logo":"dati-e-disposizioni"},"Childs":[{"Item":{"IdFunzione":1002005,"IdFunzioneParent":1002000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Gestione Disposizioni","Logo":null},"Childs":[{"Item":{"IdFunzione":1002010,"IdFunzioneParent":1002005,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Ultime Disposizioni","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1002020,"IdFunzioneParent":1002005,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":3,"Nome":"Gestione Distinte","Logo":null},"Childs":[{"Item":{"IdFunzione":1002021,"IdFunzioneParent":1002020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Elenco Distinte","Logo":"icon-elencoDistinte"},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1002022,"IdFunzioneParent":1002020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Creazione Distinte","Logo":"icon-creaDistinte"},"Childs":[],"ChildCount":0,"ItemsCount":1}],"ChildCount":2,"ItemsCount":3}],"ChildCount":4,"ItemsCount":5},{"Item":{"IdFunzione":1002030,"IdFunzioneParent":1002000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Gestione Dati","Logo":null},"Childs":[{"Item":{"IdFunzione":1002040,"IdFunzioneParent":1002030,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":3,"Nome":"Importa Disposizioni","Logo":null},"Childs":[{"Item":{"IdFunzione":1002041,"IdFunzioneParent":1002040,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Distinte","Logo":"icon-importaDistinte"},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1002043,"IdFunzioneParent":1002040,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Allineamento IBAN","Logo":"icon-importaAllineamentoIban"},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1002044,"IdFunzioneParent":1002040,"Enabled":false,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Incassi Estero","Logo":"icon-importaIncassiEstero"},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1002046,"IdFunzioneParent":1002040,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Strutture Libere","Logo":"icon-importaStruttureLibere"},"Childs":[],"ChildCount":0,"ItemsCount":1}],"ChildCount":4,"ItemsCount":5},{"Item":{"IdFunzione":1002050,"IdFunzioneParent":1002030,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Importa/Assegna Conto","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1002060,"IdFunzioneParent":1002030,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Log Importazioni","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1002070,"IdFunzioneParent":1002030,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":3,"Nome":"Estrai Dati Informativi","Logo":null},"Childs":[{"Item":{"IdFunzione":1002072,"IdFunzioneParent":1002070,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Esiti Allineamento Rid","Logo":"icon-estraiEsitiAllineamentoArchivi"},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1002074,"IdFunzioneParent":1002070,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Esiti Allineamento Iban","Logo":"icon-estraiEsitiAllineamentoIban"},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1002071,"IdFunzioneParent":1002070,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Altri Dati Informativi","Logo":"icon-estraiInformative"},"Childs":[],"ChildCount":0,"ItemsCount":1}],"ChildCount":3,"ItemsCount":4}],"ChildCount":11,"ItemsCount":12},{"Item":{"IdFunzione":1002150,"IdFunzioneParent":1002000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Strutture Libere","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1}],"ChildCount":18,"ItemsCount":19},{"Item":{"IdFunzione":1005000,"IdFunzioneParent":0,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":1,"Nome":"Configura","Logo":"configura"},"Childs":[{"Item":{"IdFunzione":1005010,"IdFunzioneParent":1005000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Home Page","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1005020,"IdFunzioneParent":1005000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Sicurezza","Logo":null},"Childs":[{"Item":{"IdFunzione":1005025,"IdFunzioneParent":1005020,"Enabled":true,"Active":true,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Info Sicurezza","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1005030,"IdFunzioneParent":1005020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Cambia Password","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1005035,"IdFunzioneParent":1005020,"Enabled":true,"Active":true,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Gestione Contatti","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1005040,"IdFunzioneParent":1005020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Gestione Dispositivi","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1005050,"IdFunzioneParent":1005020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Info Accessi","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1005060,"IdFunzioneParent":1005020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Info Bonifico","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1}],"ChildCount":6,"ItemsCount":7},{"Item":{"IdFunzione":1005070,"IdFunzioneParent":1005000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Postazione","Logo":null},"Childs":[{"Item":{"IdFunzione":1005080,"IdFunzioneParent":1005070,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Aziende","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1005090,"IdFunzioneParent":1005070,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Banche","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1005100,"IdFunzioneParent":1005070,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Conti","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1}],"ChildCount":3,"ItemsCount":4},{"Item":{"IdFunzione":1005110,"IdFunzioneParent":1005000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Profilatura Utenti","Logo":null},"Childs":[{"Item":{"IdFunzione":1005120,"IdFunzioneParent":1005110,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Gestione Gruppi","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1005130,"IdFunzioneParent":1005110,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Creazione Utenti","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1005140,"IdFunzioneParent":1005110,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Elenco Utenti","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1},{"Item":{"IdFunzione":1005150,"IdFunzioneParent":1005110,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Gestione Iter Autorizzativo","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1}],"ChildCount":4,"ItemsCount":5},{"Item":{"IdFunzione":1005015,"IdFunzioneParent":1005000,"Enabled":true,"Active":true,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Tutorial","Logo":null},"Childs":[],"ChildCount":0,"ItemsCount":1}],"ChildCount":18,"ItemsCount":19}];
        var modelToJson = {"Gruppo":{"Id":21972,"IsTemplate":false,"Logo":"icon-8","Nome":"Provanome","Descrizione":"Provadescrizione","NumeroUtenti":0},"Funzioni":[{"IdFunzione":1001000,"IdFunzioneParent":0,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":1,"Nome":"Info Conti","Logo":"sportello"},{"IdFunzione":1001010,"IdFunzioneParent":1001000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Saldo e Movimenti C/c","Logo":"icon-saldo"},{"IdFunzione":1001011,"IdFunzioneParent":1001010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Movimenti C/C On Line","Logo":"icon-movOnline"},{"IdFunzione":1001015,"IdFunzioneParent":1001010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Movimenti C/C CBI","Logo":"icon-movCBI"},{"IdFunzione":1001013,"IdFunzioneParent":1001010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Saldi C/C On Line","Logo":"icon-saldoOnline"},{"IdFunzione":1001016,"IdFunzioneParent":1001010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Saldi C/C CBI","Logo":"icon-saldoCBI"},{"IdFunzione":1001018,"IdFunzioneParent":1001000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Finanziamenti Rateali","Logo":null},{"IdFunzione":1001020,"IdFunzioneParent":1001000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Portafoglio","Logo":null},{"IdFunzione":1001021,"IdFunzioneParent":1001020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Movimenti Portafoglio","Logo":"icon-movPortafoglio"},{"IdFunzione":1001022,"IdFunzioneParent":1001020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Saldi Portafoglio","Logo":"icon-saldoPortafoglio"},{"IdFunzione":1001030,"IdFunzioneParent":1001000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Conti Anticipi","Logo":null},{"IdFunzione":1001040,"IdFunzioneParent":1001000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Dossier Titoli","Logo":null},{"IdFunzione":1001051,"IdFunzioneParent":1001000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Domiciliazioni","Logo":null},{"IdFunzione":1001060,"IdFunzioneParent":1001000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Situazione Assegni","Logo":null},{"IdFunzione":1001070,"IdFunzioneParent":1001000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Estratto Conto Periodico","Logo":null},{"IdFunzione":1001080,"IdFunzioneParent":1001000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Stampa Movimenti Periodici C/c","Logo":null},{"IdFunzione":1004000,"IdFunzioneParent":0,"Enabled":true,"Active":true,"IsContainer":true,"IsMenuItem":true,"Livello":1,"Nome":"Pagamenti","Logo":"pagamenti"},{"IdFunzione":1004023,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Bonifico Singolo","Logo":null},{"IdFunzione":1004022,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Bonifico per detrazioni","Logo":null},{"IdFunzione":1004010,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Bonifici","Logo":"icon-bonifici"},{"IdFunzione":1004020,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":2,"Nome":"Bonifici Italia","Logo":null},{"IdFunzione":1004030,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Stipendi","Logo":null},{"IdFunzione":1004040,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":2,"Nome":"Stipendi Italia","Logo":null},{"IdFunzione":1004070,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Pagamento Riba","Logo":null},{"IdFunzione":1004080,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Pagamento Riba Manuale","Logo":null},{"IdFunzione":1004090,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Deleghe F24","Logo":"icon-f24"},{"IdFunzione":1004100,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"F24 Elementi Identificativi","Logo":null},{"IdFunzione":1004101,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Modulo F23","Logo":null},{"IdFunzione":1004102,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Riepilogo F23","Logo":null},{"IdFunzione":1004110,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Quietanze F24","Logo":null},{"IdFunzione":1004120,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Richiedi Assegni Circolari","Logo":null},{"IdFunzione":1004130,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Richiedi Assegni di Quietanza","Logo":null},{"IdFunzione":1004140,"IdFunzioneParent":1004000,"Enabled":true,"Active":true,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Bollettini Bancari","Logo":null},{"IdFunzione":1004150,"IdFunzioneParent":1004000,"Enabled":true,"Active":true,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Bollettini Postali","Logo":null},{"IdFunzione":1004160,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Mav/Rav","Logo":null},{"IdFunzione":1004170,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Utenze","Logo":null},{"IdFunzione":1004180,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Ricariche Telefoniche","Logo":null},{"IdFunzione":1004115,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"CBILL - pagoPA","Logo":null},{"IdFunzione":1004210,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Bollo Auto","Logo":null},{"IdFunzione":1004200,"IdFunzioneParent":1004000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Esiti Pagamenti","Logo":"icon-esitiAltriPagamenti"},{"IdFunzione":1004201,"IdFunzioneParent":1004200,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Bonifici Italia - Richiesta Assegni","Logo":"icon-esitiBonifici"},{"IdFunzione":1004202,"IdFunzioneParent":1004200,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Stipendi Italia","Logo":"icon-esitiStipendi"},{"IdFunzione":1004203,"IdFunzioneParent":1004200,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Deleghe F24","Logo":"icon-esitiF24"},{"IdFunzione":1004204,"IdFunzioneParent":1004200,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":3,"Nome":"Altri Pagamenti","Logo":"icon-esitiAltri"},{"IdFunzione":2002311,"IdFunzioneParent":1004204,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Esiti Bonifici","Logo":null},{"IdFunzione":2002312,"IdFunzioneParent":1004204,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Esiti Stipendi","Logo":null},{"IdFunzione":2002318,"IdFunzioneParent":1004204,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Esiti Bollettini Bancari","Logo":null},{"IdFunzione":2002319,"IdFunzioneParent":1004204,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Esiti Pagamenti","Logo":null},{"IdFunzione":1006000,"IdFunzioneParent":0,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":1,"Nome":"Incassi","Logo":"incassi"},{"IdFunzione":1006010,"IdFunzioneParent":1006000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Riba","Logo":null},{"IdFunzione":1006020,"IdFunzioneParent":1006000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Mav","Logo":null},{"IdFunzione":1006030,"IdFunzioneParent":1006000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Sdd","Logo":null},{"IdFunzione":1006050,"IdFunzioneParent":1006000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Varia Coordinate Rid","Logo":null},{"IdFunzione":1006090,"IdFunzioneParent":1006000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Seda","Logo":null},{"IdFunzione":1006110,"IdFunzioneParent":1006090,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Rendiconto","Logo":null},{"IdFunzione":1006120,"IdFunzioneParent":1006090,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Richiesta Dettaglio Rendiconto","Logo":null},{"IdFunzione":1006140,"IdFunzioneParent":1006000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Allineamento Iban","Logo":null},{"IdFunzione":1006150,"IdFunzioneParent":1006000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Esiti Incassi","Logo":"icon-esitiIncassi"},{"IdFunzione":1006151,"IdFunzioneParent":1006150,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Riba - Rid - Mav","Logo":"icon-esitiRiba"},{"IdFunzione":1006152,"IdFunzioneParent":1006150,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Sdd","Logo":"icon-esitiDirectDebit"},{"IdFunzione":1006153,"IdFunzioneParent":1006150,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Bollettini Bancari","Logo":"icon-esitiBollettiniBancari"},{"IdFunzione":1006154,"IdFunzioneParent":1006150,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Allineamento Rid","Logo":"icon-esitiAllineamentoArchivi"},{"IdFunzione":1006156,"IdFunzioneParent":1006150,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Allineamento Iban","Logo":"icon-esitiAllineamentoIban"},{"IdFunzione":1006157,"IdFunzioneParent":1006150,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Beneficiario","Logo":"icon-esitiBeneficiario"},{"IdFunzione":1007150,"IdFunzioneParent":0,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":1,"Nome":"Carte","Logo":"carte"},{"IdFunzione":1008000,"IdFunzioneParent":1007150,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Carte Business","Logo":null},{"IdFunzione":1008010,"IdFunzioneParent":1008000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":3,"Nome":"Gestione Carte","Logo":null},{"IdFunzione":2120,"IdFunzioneParent":1008010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Movimenti Carte","Logo":null},{"IdFunzione":2130,"IdFunzioneParent":1008010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Ricarica Carte","Logo":null},{"IdFunzione":2140,"IdFunzioneParent":1008010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Scarica Carte","Logo":null},{"IdFunzione":2200,"IdFunzioneParent":1008010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Attiva Carte","Logo":null},{"IdFunzione":2160,"IdFunzioneParent":1008010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Blocco/Sblocco Carte","Logo":null},{"IdFunzione":2210,"IdFunzioneParent":1008010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Estinzione Carte","Logo":null},{"IdFunzione":2170,"IdFunzioneParent":1008010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Pannello di Controllo","Logo":null},{"IdFunzione":2190,"IdFunzioneParent":1008010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Modifica Carte","Logo":null},{"IdFunzione":2150,"IdFunzioneParent":1008010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Ricarica Automatica","Logo":null},{"IdFunzione":1008020,"IdFunzioneParent":1008000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":3,"Nome":"Gestione Intestatari","Logo":null},{"IdFunzione":2230,"IdFunzioneParent":1008020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":4,"Nome":"Edit Intestatari","Logo":null},{"IdFunzione":1008030,"IdFunzioneParent":1008000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Gestione Posizione","Logo":null},{"IdFunzione":1010000,"IdFunzioneParent":0,"Enabled":true,"Active":true,"IsContainer":true,"IsMenuItem":true,"Livello":1,"Nome":"Estero","Logo":"estero"},{"IdFunzione":1010010,"IdFunzioneParent":1010000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"YouWorld/YouLounge","Logo":null},{"IdFunzione":1007000,"IdFunzioneParent":0,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":1,"Nome":"Documenti e Fatture","Logo":"documenti"},{"IdFunzione":1007010,"IdFunzioneParent":1007000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Documenti On Line","Logo":null},{"IdFunzione":1007020,"IdFunzioneParent":1007010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"In Arrivo","Logo":"icon-documentiInArrivo"},{"IdFunzione":1007030,"IdFunzioneParent":1007010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Archivio Storico","Logo":null},{"IdFunzione":1007040,"IdFunzioneParent":1007010,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Configurazione","Logo":null},{"IdFunzione":1010020,"IdFunzioneParent":1007000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"YouInvoice","Logo":null},{"IdFunzione":1010021,"IdFunzioneParent":1010020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Accedi","Logo":null},{"IdFunzione":1010022,"IdFunzioneParent":1010020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Attiva","Logo":null},{"IdFunzione":1010023,"IdFunzioneParent":1010020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":3,"Nome":"Configura","Logo":null},{"IdFunzione":1007090,"IdFunzioneParent":1007000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Documenti Addebito/Accredito","Logo":"icon-fattureYBW"},{"IdFunzione":17,"IdFunzioneParent":1007090,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":3,"Nome":"Scarico Fatture","Logo":null},{"IdFunzione":18,"IdFunzioneParent":1007090,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":false,"Livello":3,"Nome":"Dettaglio Fattura","Logo":null},{"IdFunzione":1007050,"IdFunzioneParent":1007000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Contratti e Proposte","Logo":null},{"IdFunzione":1007051,"IdFunzioneParent":1007000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Modulistica","Logo":null},{"IdFunzione":1009040,"IdFunzioneParent":1010000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"YouTrade Finance","Logo":null},{"IdFunzione":1003000,"IdFunzioneParent":0,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":1,"Nome":"Anagrafiche","Logo":"anagrafiche"},{"IdFunzione":1003010,"IdFunzioneParent":1003000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Clienti","Logo":null},{"IdFunzione":1003020,"IdFunzioneParent":1003000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Fornitori","Logo":null},{"IdFunzione":1003040,"IdFunzioneParent":1003000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Dipendenti","Logo":null},{"IdFunzione":1003070,"IdFunzioneParent":1003000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Importa Anagrafiche","Logo":null},{"IdFunzione":1003080,"IdFunzioneParent":1003000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Cancella Anagrafiche","Logo":null},{"IdFunzione":1003090,"IdFunzioneParent":1003000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Tracciati Anagrafiche","Logo":null},{"IdFunzione":1002000,"IdFunzioneParent":0,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":1,"Nome":"Dati e Disposizioni","Logo":"dati-e-disposizioni"},{"IdFunzione":1002005,"IdFunzioneParent":1002000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Gestione Disposizioni","Logo":null},{"IdFunzione":1002010,"IdFunzioneParent":1002005,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Ultime Disposizioni","Logo":null},{"IdFunzione":1002020,"IdFunzioneParent":1002005,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":3,"Nome":"Gestione Distinte","Logo":null},{"IdFunzione":1002021,"IdFunzioneParent":1002020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Elenco Distinte","Logo":"icon-elencoDistinte"},{"IdFunzione":1002022,"IdFunzioneParent":1002020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Creazione Distinte","Logo":"icon-creaDistinte"},{"IdFunzione":1002030,"IdFunzioneParent":1002000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Gestione Dati","Logo":null},{"IdFunzione":1002040,"IdFunzioneParent":1002030,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":3,"Nome":"Importa Disposizioni","Logo":null},{"IdFunzione":1002041,"IdFunzioneParent":1002040,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Distinte","Logo":"icon-importaDistinte"},{"IdFunzione":1002043,"IdFunzioneParent":1002040,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Allineamento IBAN","Logo":"icon-importaAllineamentoIban"},{"IdFunzione":1002044,"IdFunzioneParent":1002040,"Enabled":false,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Incassi Estero","Logo":"icon-importaIncassiEstero"},{"IdFunzione":1002046,"IdFunzioneParent":1002040,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Strutture Libere","Logo":"icon-importaStruttureLibere"},{"IdFunzione":1002050,"IdFunzioneParent":1002030,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Importa/Assegna Conto","Logo":null},{"IdFunzione":1002060,"IdFunzioneParent":1002030,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Log Importazioni","Logo":null},{"IdFunzione":1002070,"IdFunzioneParent":1002030,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":3,"Nome":"Estrai Dati Informativi","Logo":null},{"IdFunzione":1002072,"IdFunzioneParent":1002070,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Esiti Allineamento Rid","Logo":"icon-estraiEsitiAllineamentoArchivi"},{"IdFunzione":1002074,"IdFunzioneParent":1002070,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Esiti Allineamento Iban","Logo":"icon-estraiEsitiAllineamentoIban"},{"IdFunzione":1002071,"IdFunzioneParent":1002070,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Altri Dati Informativi","Logo":"icon-estraiInformative"},{"IdFunzione":1002150,"IdFunzioneParent":1002000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Strutture Libere","Logo":null},{"IdFunzione":1002170,"IdFunzioneParent":1010000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Listino Cambi","Logo":null},{"IdFunzione":1005000,"IdFunzioneParent":0,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":1,"Nome":"Configura","Logo":"configura"},{"IdFunzione":1005010,"IdFunzioneParent":1005000,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Home Page","Logo":null},{"IdFunzione":1005020,"IdFunzioneParent":1005000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Sicurezza","Logo":null},{"IdFunzione":1005025,"IdFunzioneParent":1005020,"Enabled":true,"Active":true,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Info Sicurezza","Logo":null},{"IdFunzione":1005030,"IdFunzioneParent":1005020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Cambia Password","Logo":null},{"IdFunzione":1005035,"IdFunzioneParent":1005020,"Enabled":true,"Active":true,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Gestione Contatti","Logo":null},{"IdFunzione":1005040,"IdFunzioneParent":1005020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Gestione Dispositivi","Logo":null},{"IdFunzione":1005050,"IdFunzioneParent":1005020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Info Accessi","Logo":null},{"IdFunzione":1005060,"IdFunzioneParent":1005020,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Info Bonifico","Logo":null},{"IdFunzione":1005070,"IdFunzioneParent":1005000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Postazione","Logo":null},{"IdFunzione":1005080,"IdFunzioneParent":1005070,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Aziende","Logo":null},{"IdFunzione":1005090,"IdFunzioneParent":1005070,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Banche","Logo":null},{"IdFunzione":1005100,"IdFunzioneParent":1005070,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Conti","Logo":null},{"IdFunzione":1005110,"IdFunzioneParent":1005000,"Enabled":true,"Active":false,"IsContainer":true,"IsMenuItem":true,"Livello":2,"Nome":"Profilatura Utenti","Logo":null},{"IdFunzione":1005120,"IdFunzioneParent":1005110,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Gestione Gruppi","Logo":null},{"IdFunzione":1005130,"IdFunzioneParent":1005110,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Creazione Utenti","Logo":null},{"IdFunzione":1005140,"IdFunzioneParent":1005110,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Elenco Utenti","Logo":null},{"IdFunzione":1005150,"IdFunzioneParent":1005110,"Enabled":true,"Active":false,"IsContainer":false,"IsMenuItem":true,"Livello":3,"Nome":"Gestione Iter Autorizzativo","Logo":null},{"IdFunzione":1005015,"IdFunzioneParent":1005000,"Enabled":true,"Active":true,"IsContainer":false,"IsMenuItem":true,"Livello":2,"Nome":"Tutorial","Logo":null}]};

                    koActivateSharedEvent();

        $('#panelDetailEdit', currentDiv).hide();

        $('#panelDetailViewModifyButton', currentDiv).click(function () {
            koDeactivateSharedEvent();
            togglePanel();
            $('#panelDetailView', currentDiv).hide();
            $('#panelDetailEdit', currentDiv).show();
        });

        $('#panelModifyViewUndoButton', currentDiv).click(function () {
            restoreData();
            $('#panelDetailEdit', currentDiv).hide();
            $('#panelDetailView', currentDiv).show();
        });

        $('#panelModifyViewModifyButton', currentDiv).click(function () {
            koTargetGoTo('/YouBiz.Web/Sicurezza/EditGroup/UpdateDetails', currentDiv.parent(), 'defaultViewModel');
        });

        $('.btn-undo-function-change', currentDiv).click(function () {
            var tgt = $(this).data('panel');
            if (tgt) {
                togglePanel('#' + tgt);
            }
        });

        $('.btn-commit-function-change', currentDiv).click(function () {
            getValue();
            communicationLoadTarget('/YouBiz.Web/Sicurezza/EditGroup/UpdateFunctions', currentDiv.parent(), modelToJson);
        });

        $('#goToGruppiButton', currentDiv).click(function () {
            koTargetGoTo('/YouBiz.Web/Sicurezza/ElencoGruppi/IndexChunk', currentDiv.parent());
        });

            
        $('#goToUtentiButton', currentDiv).click(function () {
            navigateFormByParam({ urlmenu: '/youbiz.web/Integration/Home/IndexTM/12' });
        });
        

        //David ********************************************************************************************************************

        //funzione chiamata dalla getValue()
        function setParameter(childsValue) {
            var childsIdFunzioneParent = childsValue.IdFunzioneParent;
            var childsIdFunzione = childsValue.IdFunzione;
            $('.chkSel_'+childsIdFunzioneParent, currentDiv.parent()).each(function( chkSelIndex, chkSelValue ) {
                var jItem = $(chkSelValue);
                var functionid = jItem.attr('functionid');
                var checked = jItem[0].checked;
                //debugger;
                if (childsIdFunzione == functionid) {
                    childsValue.Active = checked;
                }
            });
        }
        
        //prende i valori delle check e li passa alla chiamata per save
        function getValue() {
            $(modelToJson.Funzioni).each(function(index, value) {
                setParameter(value);
            });
        }

        //eventi seleziona deseleziona a cascata dall'alto verso in basso padre e figli - evento padre
        $(document).on('change' , '.auth-list.noindent input[type="checkbox"]' , function() {
            
            var jChecked = $(this);
            var functionid = jChecked.attr('functionid');
            var isContainer = jChecked.attr('iscontainer');

            var checked = jChecked[0].checked;
            //inizio ciclo;
            //ciclo su check di 1 livello;
            $('.chkSel_'+functionid, currentDiv.parent()).each(function( index1, value1 ) {
                //debugger;
                if (isContainer == "0") {
                    checked = false;
                }
                $(value1)[0].checked = checked;
                var functionid2 = $(value1).attr('functionid');
                //ciclo su check di 2 livello;
                $('.chkSel_'+functionid2, currentDiv.parent()).each(function( index2, value2 ) {
                    $(value2)[0].checked = checked;
                    var functionid3 = $(value2).attr('functionid');
                    //ciclo su check di 3 livello;
                    $('.chkSel_'+functionid3, currentDiv.parent()).each(function( index3, value3 ) {
                        $(value3)[0].checked = checked;
                        var functionid4 = $(value3).attr('functionid');
                        //ciclo su check di 4 livello;
                        $('.chkSel_' + functionid4, currentDiv.parent()).each(function(index4, value4) {
                            $(value4)[0].checked = checked;
                        });
                    });
                });
            });
            //fine ciclo;
        });

        //eventi seleziona deseleziona a cascata dal basso verso in alto padre e figli - evento figli che selezionano il padre
        $(document).on('change', '.indent input[type="checkbox"]', function () {

            //debugger;
            var jCheckedIndent = $(this);
            var functionidParent = jCheckedIndent.attr('functionidparent');
            var checked = jCheckedIndent[0].checked;
            
            //ciclo livello superiore
            $('.auth-sel', currentDiv.parent()).each(function(index1, value1) {
                var jParentChecked = $(value1);
                var parentfunctionid = jParentChecked.attr('functionid');
                var parentfunctionidParent = jParentChecked.attr('functionidparent'); 
                
                var isContainer = jParentChecked.attr('iscontainer');

                //debugger;
                if (parentfunctionid == functionidParent) {
                    //ciclo su tutti i figli per vedere se almeno uno è ceccato
                    var check = checked;
                    $('.chkSel_' + parentfunctionid, currentDiv.parent()).each(function(indexfigli, valuefigli) {
                        //debugger;
                        var jCheckedFigli = $(valuefigli);
                        var checkedFigli = jCheckedFigli[0].checked;
                        if (checkedFigli == true) {
                            check = true;
                            return false;
                        }
                    });
                    
                    if (isContainer == "0") {
                        check = true;
                    }
                    $(value1)[0].checked = check;

                    $('.auth-sel', currentDiv.parent()).each(function(indexp, valuep) {
                        //debugger;
                        var jvaluepChecked = $(valuep);
                        var valuepfunctionid = jvaluepChecked.attr('functionid');
                        if (valuepfunctionid == parentfunctionidParent) {
                            $('.chkSel_' + valuepfunctionid, currentDiv.parent()).each(function(indexfigli, valuefigli) {
                                var jCheckedFigli = $(valuefigli);
                                var checkedFigli = jCheckedFigli[0].checked;
                                if (checkedFigli == true) {
                                    check = true;                                    
                                    return false;
                                }
                            });
                            
                            jvaluepChecked[0].checked= check;
                            return false;    
                        }
                    });
                }
            });
        });
       
        //David ********************************************************************************************************************

        var isReflectedEvent = false;
        function restoreData() {
            isReflectedEvent = true;
            try {
                $('.select-all', currentDiv).prop('checked', false);
                $('.select-all', currentDiv).attr('checked', false);
                koRestore('defaultViewModel');

                // $('.auth-sel', currentDiv).unbind();
                //$('.auth-sel', currentDiv).on('click', function () {

                //    if (!isReflectedEvent) {
                //        var me = $(this);
                //        var isChecked = me.prop('checked');
                //        changeChilds(me.parent(), isChecked);
                //    }
                //});

                $('.auth-sel', currentDiv).data('events', function () {

                    if (!isReflectedEvent) {
                        var me = $(this);
                        var isChecked = me.prop('checked');
                        changeChilds(me.parent(), isChecked);
                    }
                });

            } catch (err) {

            }
            isReflectedEvent = false;
        }

        //$('.auth-sel', currentDiv).on('click', function () {
        //    debugger;
        //    if (!isReflectedEvent) {
        //        var me = $(this);
        //        var isChecked = me.prop('checked');
        //        changeChilds(me.parent(), isChecked);
        //    }
        //});

        // funzione per i contenitori base di apertura e chiusura

        /* open close sliders */
        $('.ctrl-auth-panel', currentDiv).on('click', function () {
            koDeactivateSharedEvent();
            var tgt = $(this).data('panel');
            if (tgt) {
                togglePanel('#' + tgt);
            }
        });

        function togglePanel(selector) {

            // selector undefined means close all ...
            var panelToToggle = $(selector, currentDiv);

            if (selector === undefined || panelToToggle.hasClass('auth-panel')) {

                var closePanelMtd = function (tgtPanel) {
                    $(tgtPanel).slideUp(300).removeClass('panel-visible');
                };

                var openPanelMtd = function (tgtPanel, withDelay) {
                    var delayMillis = withDelay ? 300 : 0;
                    $(tgtPanel).delay(delayMillis).slideDown(400).addClass('panel-visible');
                };

                if (selector === undefined || !panelToToggle.hasClass('panel-visible')) {
                    // toggle allOther opened panels
                    var allVisiblePanel = $('.panel-visible', currentDiv);

                    $.each(allVisiblePanel, function (index, item) {
                        closePanelMtd(item);
                    });

                    restoreData();
                    if (selector !== undefined) {
                        if (allVisiblePanel.length > 0) {
                            openPanelMtd(panelToToggle, true);
                        } else {
                            openPanelMtd(panelToToggle, false);
                        }
                    }

                } else {
                    restoreData();
                    closePanelMtd(panelToToggle);
                }
            }
        }
        /* open close sliders */

        $('.select-all', currentDiv).on('click', function () {
            if (!isReflectedEvent) {
                var me = $(this);
                var isChecked = me.prop('checked');
                var containerPanel = me.parentsUntil('.auth-panel');
                changeChilds(containerPanel, isChecked);
            }
        });

        function changeChilds(parentControl, isChecked) {
            // prevengo gli effetti ping pong
            var previousReflectedEvent = isReflectedEvent;
            isReflectedEvent = true;
            try {
                // debugger;
                $.each($('ul input.auth-sel', parentControl), function (index, item) {
                    var koElement = ko.dataFor(item);
                    if (koElement && koElement.Active) {
                        koElement.Active(isChecked);
                    }
                    //var id = $(item).attr('functionid');
                    //if (id) {
                    //    koRootViewModel.functionById(id).Active(isCheckd);
                    //}
                });
            } catch (e) {

            }
            isReflectedEvent = previousReflectedEvent;
        }
    });
</script>

</div>

</div>
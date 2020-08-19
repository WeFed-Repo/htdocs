<?php

//Se si riscontrano problemi nell'allineamento del casi "anchor + immagine" o "anchor + icona", aggiungere all'immagine la classe .float-left

?>

<div class="p-3">

<div class="row w-100 pt-4">
    <h3>Anchor</h3>
</div>
<div class="row w-100"
    style="background:#eee; border:dashed 1px #ccc; padding-left: 16px; padding-right: 16px; padding-top:32px; padding-bottom:32px;">

    <div class="col-3">
        <a href="javascript:void(0);">anchor semplice</a>
    </div>

    <div class="col-3">
        <a>anchor no href</a>
    </div>

    <div class="col-3">
        <a href="javascript:void(0);">
            <img class="icon icon-autorizza"
                src="./fe/img/icon/icon-5_2.svg" />
            anchor semplice + image
        </a>
    </div>

    <div class="col-3">
        <a href="javascript:void(0);">
            <i class="icon icon-ico_gestione_contatti"></i>
            anchor semplice + icona
        </a>
    </div>

    <div class="col-12"><hr /></div>

    <div class="col-3">
        <a href="javascript:void(0);" disabled>anchor semplice disabilitato (attributo)</a>
    </div>

    <div class="col-3">
        <a disabled>anchor semplice disabilitato (attributo, no href)</a>
    </div>

    <div class="col-3">
        <a href="javascript:void(0);" class="disabled">anchor semplice disabilitato (classe)</a>
    </div>

    <div class="col-3">
        <a class="disabled">anchor semplice disabilitato (classe, no href)</a>
    </div>

    <div class="col-12"><hr /></div>

    <div class="col-12">
        <a href="javascript:void(0);" title="solo icona">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Next</span>
        </a>
        solo icona
    </div>

    <div class="col-3">
        <a href="javascript:void(0);" disabled >
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Next</span>
        </a href="javascript:void(0);">
        solo icona disabilitato (attributo)
    </div>

    <div class="col-3">
        <a disabled >
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Next</span>
        </a href="javascript:void(0);">
        solo icona disabilitato (attributo, no href)
    </div>

    <div class="col-3">
        <a href="javascript:void(0);" class="disabled">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Next</span>
        </a>
        solo icona disabilitato (classe)
    </div>

    <div class="col-3">
        <a class="disabled">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Next</span>
        </a>
        solo icona disabilitato (classe, no href)
    </div>

</div>

<div class="row w-100 pt-4">
    <h3>Button (anchor senza href)</h3>
</div>
<div class="row w-100"
    style="background:#eee; border:dashed 1px #ccc; padding-left: 16px; padding-right: 16px; padding-top:32px; padding-bottom:32px;">



    <div class="col-4">
      <button class="read-mode btn btn-white btn-w-md form-group mb-0 w-100" data-write-mode>
        <img src="./fe/img/icon/icon-22.svg">
        Modifica
      </button>
    </div>


    <div class="col-4">
        <a class="btn btn-primary w-100">button primary semplice</a>
    </div>

    <div class="col-4">
        <a class="btn btn-primary w-100">
            <img class="icon icon-autorizza"
                src="./fe/img/icon/icon-5_3.svg" />
                button primary + image
        </a>
    </div>

    <div class="col-4">
        <a class="btn btn-primary w-100">
            <i class="icon icon-ico_gestione_contatti"></i>
            button primary + icona
        </a>
    </div>

    <div class="col-4">
        <a class="btn btn-primary w-100 disabled">button primary disabilitato (classe)</a>
    </div>

    <div class="col-8"></div>

    <div class="col-4">
        <a class="btn btn-white w-100">button white semplice</a>
    </div>

    <div class="col-4">
        <a class="btn btn-white w-100">
            <img class="icon icon-autorizza"
                src="./fe/img/icon/icon-5_2.svg" />
                button white + image
        </a>
    </div>

    <div class="col-4">
        <a class="btn btn-white w-100">
        <i class="icon icon-ico_gestione_contatti"></i>
            button white + icona
        </a>
    </div>

</div>

<div class="row w-100 pt-4">
    <h3>Button</h3>
</div>
<div class="row w-100"
    style="background:#eee; border:dashed 1px #ccc; padding-left: 16px; padding-right: 16px; padding-top:32px; padding-bottom:32px;">

    <div class="col-4">
        <button class="btn btn-primary w-100">button primary semplice</button>
    </div>

    <div class="col-4">
        <button class="btn btn-primary w-100">
            <img class="icon icon-autorizza"
                src="./fe/img/icon/icon-5_3.svg" />
                button primary + image
        </button>
    </div>

    <div class="col-4">
        <button class="btn btn-primary w-100">
            <i class="icon icon-ico_gestione_contatti"></i>
            button primary + icona
        </button>
    </div>

    <div class="col-4">
        <button class="btn btn-primary w-100 disabled">button primary disabilitato
            (classe)</button>
    </div>

    <div class="col-8"></div>

    <div class="col-4">
        <button class="btn btn-white w-100">button white semplice</button>
    </div>

    <div class="col-4">
        <button class="btn btn-white w-100">
            <img class="icon icon-autorizza"
                src="./fe/img/icon/icon-5_2.svg" />
                button white + image
        </button>
    </div>

    <div class="col-4">
        <button class="btn btn-white w-100">
        <i class="icon icon-ico_gestione_contatti"></i>
            button white + icona
        </button>
    </div>

</div>

<div class="row w-100 pt-4">
    <h3>Form group</h3>
</div>
<div class="row w-100"
    style="background:#eee; border:dashed 1px #ccc; padding-left: 16px; padding-right: 16px; padding-top:32px; padding-bottom:32px;">

    <div class="col-4">
        <label>Label uno</label>
        <div class="input-group">
            <input type="text" class="form-control" data-bind="value: CoordinateBanca.CAB">
            <div class="input-group-append">
                <a class="input-group-text" tm-data-modal-cab="">
                    <img
                        src="./fe/img/icon/icon-23.svg" />
                </a>
            </div>
        </div>
    </div>
    <div class="col-4">
        <label>Label due</label>
        <div class="input-group">
            <input type="text" class="form-control" data-bind="value: CoordinateBanca.ABI">
            <div class="input-group-append">
                <a class="input-group-text" tm-data-modal-abi="">
                    <i class="icon icon-riepilogo_conto_iban"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row w-100 pt-4">
    <h3>Generic</h3>
</div>
<div class="row w-100"
    style="background:#eee; border:dashed 1px #ccc; padding-left: 16px; padding-right: 16px; padding-top:32px; padding-bottom:32px;">

    <div class="col-4">
        <button type="button" class="btn-icon-help" tm-data-modal-help="" title="help"></button>
    </div>
</div>

<div class="row w-100 pt-4">
    <h3>Tab</h3>
</div>
<div class="row w-100" id="tabSection"
    style="background:#eee; border:dashed 1px #ccc; padding-left: 16px; padding-right: 16px; padding-top:32px; padding-bottom:32px;">
    <div class="no-margin-section">
        <ul tm-tabs-navigator class="nav nav-tabs"></ul>
    </div>
</div>


<div class="row w-100 pt-4">
    <h3>Tabella</h3>
</div>
<div class="row w-100"
    style="background:#eee; border:dashed 1px #ccc; padding-left: 16px; padding-right: 16px; padding-top:32px; padding-bottom:32px;">
    <script id="tableAnagraficaTemplate" type="text/x-jsrender">
      
    </script>

    <script id="tableAnagraficaCardTemplate" type="text/x-jsrender">
        <div class="mobile-data-block">
            <div class="row">
                <div class="col">
                    <h3><span class="output output-title"><a style="cursor:pointer" tm-anagrafica-link>{{:row.Cognome}}</a></span></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-4 output-inline">
                    <label class="control-label">Codice Cliente</label>
                </div>
                <div class="col-8 text-right">
                    <span class="output">{{:row.CodEsterna}}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-4 output-inline">
                    <label class="control-label">Indriizzo</label>
                </div>
                <div class="col-8 text-right">
                    <span class="output">{{:row.IndirizzoResidenza.IndirizzoAna}}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-4 output-inline">
                    <label class="control-label">Comune</label>
                </div>
                <div class="col-8 text-right">
                    <span class="output">{{comuneProvincia:row.IndirizzoResidenza.Comune row.IndirizzoResidenza.Provincia}}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-4 output-inline">
                    <label class="control-label">Disposizione default</label>
                </div>
                <div class="col-8 text-right">
                    <span class="output">{{:row.DefDisposizione}}</span>
                </div>
            </div>

        </div>
    </script>

    <div class="w-100 mobile-form">
        <section id="tableSection">
            <div class="bordered pt-md-0 pt-lg-0">
                <table id="tableAnagrafica" cellspacing="0" cellpadding="0" border="0"
                    class="table table-striped table-stretched" data-pagination="true"
                    data-sort-name="Cognome" data-sort-order="asc">
                    <thead>
                        <tr>
                            <th data-field="Cognome" class="center" data-sortable="true">Ragione
                                Sociale</th>
                            <th data-field="CodEsterna" class="center" data-sortable="true">
                                Codice Cliente</th>
                            <th data-field="IndirizzoResidenza.indirizzo" class="center"
                                data-sortable="true">Indirizzo</th>
                            <th data-field="IndirizzoResidenza.comune" class="center"
                                data-sortable="true">Comune</th>
                            <th data-field="DefDisposizione" data-sortable="true"
                                class="center">Disposizione default</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </section>
    </div>
    </div>
    </div>

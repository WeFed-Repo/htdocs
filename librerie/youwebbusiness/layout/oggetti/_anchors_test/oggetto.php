<?php 

//Se si riscontrano problemi nell'allineamento del casi "anchor + immagine" o "anchor + icona", aggiungere all'immagine la classe .float-left

?>

<!--
<link rel="stylesheet" href="./test_anchors/StaticContents/ybw/00000/it-IT/skins/skin1/assets/awesome/css/font-awesome.min.css" />
<link rel="stylesheet" href="./test_anchors/StaticContents/ybw/00000/it-IT/skins/skin1/assets/awesome/css/awesome-bootstrap-checkbox.min.css" />
<link rel="stylesheet" href="./test_anchors/StaticContents/ybw/00000/it-IT/skins/skin1/assets/awesome/css/awesome-bootstrap-checkbox-styles.min.css" />
<link rel="stylesheet" href="./test_anchors/StaticContents/ybw/00000/it-IT/skins/skin1/assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="./test_anchors/StaticContents/ybw/00000/it-IT/skins/skin1/assets/bootstrap-table/css/bootstrap-table.css">
<link rel="stylesheet" href="./test_anchors/StaticContents/ybw/00000/it-IT/skins/skin1/css/priv_base.css">
<link rel="stylesheet" href="./test_anchors/StaticContents/ybw/00000/it-IT/skins/skin1/css/priv_generic.css">
-->
<link rel="stylesheet" href="./test_anchors/StaticContents/ybw/00000/it-IT/skins/skin1/css/tm.bstable.css">

<script src="./test_anchors/StaticContents/ybw/00000/it-IT/skins/skin1/assets/jquery/js/jquery.min.js"></script>
<script src="./test_anchors/StaticContents/ybw/00000/it-IT/skins/skin1/assets/jquery-ui/js/jquery-ui.min.js"></script>
<script src="./test_anchors/StaticContents/ybw/00000/it-IT/skins/skin1/js/script.js"></script>
<script src="./test_anchors/StaticContents/ybw/00000/it-IT/skins/skin1/js/init.js"></script>
<script src="./test_anchors/StaticContents/ybw/00000/it-IT/skins/skin1/js/initLayout.js"></script>
<script src="./test_anchors/Contents/00000/it-IT/js/jsrender.min.js"></script>
<script src="./test_anchors/Contents/00000/it-IT/js/_sdk_utils.js"></script>
<script src="./test_anchors/Contents/00000/it-IT/js/radio.min.js"></script>
<script src="./test_anchors/Contents/00000/it-IT/js/_sdk_utils_pubsub.js"></script>
<script src="./test_anchors/StaticContents/ybw/00000/it-IT/skins/skin1/js/_sdk_utils_viewport.js"></script>
<script src="./test_anchors/StaticContents/ybw/00000/it-IT/skins/skin1/assets/popper/js/popper.min.js"></script>
<script src="./test_anchors/StaticContents/ybw/00000/it-IT/skins/skin1/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="./test_anchors/StaticContents/ybw/00000/it-IT/skins/skin1/assets/bootstrap-table/js/bootstrap-table.js"></script>
<script src="./test_anchors/StaticContents/ybw/00000/it-IT/skins/skin1/js/tm.bstable.js"></script>

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
                src="./test_anchors/StaticContents/ybw/00000/it-IT/skins/skin1/img/icon/configurazione.svg" />
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
        <a class="btn btn-primary w-100">button primary semplice</a>
    </div>

    <div class="col-4">
        <a class="btn btn-primary w-100">
            <img class="icon icon-autorizza"
                src="./test_anchors/StaticContents/ybw/00000/it-IT/skins/skin1/img/icon/configurazione.svg" />
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
                src="./test_anchors/StaticContents/ybw/00000/it-IT/skins/skin1/img/icon/configurazione.svg" />
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
                src="./test_anchors/StaticContents/ybw/00000/it-IT/skins/skin1/img/icon/configurazione.svg" />
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
                src="./test_anchors/StaticContents/ybw/00000/it-IT/skins/skin1/img/icon/configurazione.svg" />
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
                        src="./test_anchors/StaticContents/ybw/00000/it-IT/skins/skin1/img/icon/checked.svg" />
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
        <script id="navigatorLink" type="text/x-jsrender">
            {{for links}}
            <li class="nav-item" id="{{:id}}">
                <a class="nav-link {{if isActive}}active{{/if}}{{if isDisabled}}disabled{{/if}}" {{if !isDisabled}} tm-navigation-url="{{:url}}" {{/if}}>{{:text}}</a>
            </li>
            {{/for}}
        </script>
    </div>
</div>


<div class="row w-100 pt-4">
    <h3>Tabella</h3>
</div>
<div class="row w-100"
    style="background:#eee; border:dashed 1px #ccc; padding-left: 16px; padding-right: 16px; padding-top:32px; padding-bottom:32px;">
    <script id="tableAnagraficaTemplate" type="text/x-jsrender">
        <tr data-index="{{:index}}">
            <td class="left"><a style="cursor:pointer" tm-anagrafica-link>{{:row.Cognome}}</a></td>
            <td class="center">{{:row.CodEsterna}}</td>
            <td class="center">{{:row.IndirizzoResidenza.IndirizzoAna}}</td>
            <td class="center">{{comuneProvincia:row.IndirizzoResidenza.Comune row.IndirizzoResidenza.Provincia}}</td>
            <td class="center">{{:row.DefDisposizione}}</td>

        </tr>
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

<!-- Fine spazio dei contenuti -->

<script type="text/javascript">

  $(function () {

      // TAB - context
      var $tabContext = $('div#tabSection');
      var $navigator = $('[tm-tabs-navigator]', $tabContext);
      var $navigatorLinkTemplate = $('#navigatorLink', $tabContext);

      sdk.utils.pubsub.register('navigatorPanel.showTabs', function (param) {

          param = param && param.links ? param.links : [];

          $.templates($navigatorLinkTemplate);
          $($navigator).append($($navigatorLinkTemplate).render({ links: param }));

          var onClick = function (event) {
              var $el = $(this);
              location.href = $el.attr('tm-navigation-url');

              $el.closest('ul').children('li').children('a').removeClass('active');
              $el.addClass('active');
          };

          $('a[tm-navigation-url]', $tabContext).each(function (index, item) {
              item = $(item);

              if ($.trim(item.attr('tm-navigation-url')) != '') {
                  item.on('click', onClick);
              }

          });

          sdk.utils.pubsub.send('navigatorPanel.onClick', $('a[tm-navigation-url]', $tabContext));
      });

      sdk.utils.pubsub.send('navigatorPanel.showTabs', {
          links: [
              {
                  text: 'Test 1',
                  id: 'test1',
                  url: 'javascript:void(0);',
                  isActive: true
              },
              {
                  text: 'Test 2',
                  id: 'test2',
                  url: 'javascript:void(0);'
              },
              {
                  text: 'Test 3',
                  id: 'test3',
                  url: 'javascript:void(0);'
              },
              {
                  text: 'Test 4 - disabled',
                  id: 'test4',
                  url: 'javascript:void(0);',
                  isDisabled: true
              }
          ]
      });

      // TABLE - contesto
      var $tableContext = $('section#tableSection');

      var dataSource = { "start": 0, "length": 50, "recordsTotal": 13, "recordsFiltered": 13, "data": [{ "Identifier": { "Crypted": "1" }, "Cognome": "Batman srl", "Nome": "", "CodEsterna": "BT_0000004058397", "DefDisposizione": "Ri.Ba.", "Email": null, "IndirizzoResidenza": { "CAP": "63036", "Comune": "Pagliare del Tronto", "IndirizzoAna": null, "Localita": "Pagliare del Tronto", "Nazione": "", "Provincia": "AP", "TpeIndirizzo": null, "NroIndirizzo": null, "DesProvincia": null, "GestoreTel": null, "PrefissoTel": null, "NumeroTel": null }, "Certificazione": 1 }, { "Identifier": { "Crypted": "2" }, "Cognome": "Rogima Marmi srl", "Nome": "", "CodEsterna": "CL_19", "DefDisposizione": "Ri.Ba.", "Email": null, "IndirizzoResidenza": { "CAP": "20079", "Comune": "Tivoli", "IndirizzoAna": null, "Localita": "Tivoli", "Nazione": "", "Provincia": "RM", "TpeIndirizzo": null, "NroIndirizzo": null, "DesProvincia": null, "GestoreTel": null, "PrefissoTel": null, "NumeroTel": null }, "Certificazione": 0 }, { "Identifier": { "Crypted": "3" }, "Cognome": "Scamo srl", "Nome": "", "CodEsterna": "CL_20", "DefDisposizione": "Ri.Ba.", "Email": null, "IndirizzoResidenza": { "CAP": "20079", "Comune": "Tivoli", "IndirizzoAna": null, "Localita": "Tivoli", "Nazione": "", "Provincia": "RM", "TpeIndirizzo": null, "NroIndirizzo": null, "DesProvincia": null, "GestoreTel": null, "PrefissoTel": null, "NumeroTel": null }, "Certificazione": 0 }, { "Identifier": { "Crypted": "4" }, "Cognome": "Sergio Guarda spa", "Nome": "", "CodEsterna": "CL_9", "DefDisposizione": "Ri.Ba.", "Email": null, "IndirizzoResidenza": { "CAP": "64020", "Comune": "Colleranesco di Giulianuova", "IndirizzoAna": null, "Localita": "Colleranesco di Giulianuova", "Nazione": "", "Provincia": "TE", "TpeIndirizzo": null, "NroIndirizzo": null, "DesProvincia": null, "GestoreTel": null, "PrefissoTel": null, "NumeroTel": null }, "Certificazione": 0 }, { "Identifier": { "Crypted": "5" }, "Cognome": "Severa Marmi s.a.s. di Severa Antonio", "Nome": "", "CodEsterna": "CL_1", "DefDisposizione": "Ri.Ba.", "Email": null, "IndirizzoResidenza": { "CAP": "03014", "Comune": "Fiuggi", "IndirizzoAna": null, "Localita": "Fiuggi", "Nazione": "", "Provincia": "FR", "TpeIndirizzo": null, "NroIndirizzo": null, "DesProvincia": null, "GestoreTel": null, "PrefissoTel": null, "NumeroTel": null }, "Certificazione": 0 }, { "Identifier": { "Crypted": "6" }, "Cognome": "Simeg srl", "Nome": "", "CodEsterna": "CL_16", "DefDisposizione": "Ri.Ba.", "Email": null, "IndirizzoResidenza": { "CAP": "62027", "Comune": "S.Severino Marche", "IndirizzoAna": null, "Localita": "S.Severino Marche", "Nazione": "", "Provincia": "AP", "TpeIndirizzo": null, "NroIndirizzo": null, "DesProvincia": null, "GestoreTel": null, "PrefissoTel": null, "NumeroTel": null }, "Certificazione": 0 }, { "Identifier": { "Crypted": "7" }, "Cognome": "Simplon Marmi & Graniti srl", "Nome": "", "CodEsterna": "CL_1147138", "DefDisposizione": "Ri.Ba.", "Email": null, "IndirizzoResidenza": { "CAP": "28845", "Comune": "Domodossola", "IndirizzoAna": null, "Localita": "Domodossola", "Nazione": "", "Provincia": "VB", "TpeIndirizzo": null, "NroIndirizzo": null, "DesProvincia": null, "GestoreTel": null, "PrefissoTel": null, "NumeroTel": null }, "Certificazione": 0 }, { "Identifier": { "Crypted": "8" }, "Cognome": "Sitem srl", "Nome": "", "CodEsterna": "CL_18", "DefDisposizione": "Ri.Ba.", "Email": null, "IndirizzoResidenza": { "CAP": "53040", "Comune": "Rapolano Terme", "IndirizzoAna": null, "Localita": "Rapolano Terme", "Nazione": "", "Provincia": "SI", "TpeIndirizzo": null, "NroIndirizzo": null, "DesProvincia": null, "GestoreTel": null, "PrefissoTel": null, "NumeroTel": null }, "Certificazione": 0 }, { "Identifier": { "Crypted": "9" }, "Cognome": "Travertini Caucci spa", "Nome": "", "CodEsterna": "1", "DefDisposizione": "DA DEFINIRE", "Email": null, "IndirizzoResidenza": { "CAP": "00192", "Comune": "Roma", "IndirizzoAna": null, "Localita": "Roma", "Nazione": "", "Provincia": "RM", "TpeIndirizzo": null, "NroIndirizzo": null, "DesProvincia": null, "GestoreTel": null, "PrefissoTel": null, "NumeroTel": null }, "Certificazione": 0 }, { "Identifier": { "Crypted": "10" }, "Cognome": "Travertini e Affini D.M.O. s.a.s. di A.M.Dante & C.", "Nome": "", "CodEsterna": "CL_14", "DefDisposizione": "Ri.Ba.", "Email": null, "IndirizzoResidenza": { "CAP": "00029", "Comune": "Vicovaro", "IndirizzoAna": null, "Localita": "Vicovaro", "Nazione": "", "Provincia": "RM", "TpeIndirizzo": null, "NroIndirizzo": null, "DesProvincia": null, "GestoreTel": null, "PrefissoTel": null, "NumeroTel": null }, "Certificazione": 0 }, { "Identifier": { "Crypted": "11" }, "Cognome": "Travertini e Affini Dante Massimo di Maugliani Franca", "Nome": "", "CodEsterna": "CL_11", "DefDisposizione": "Ri.Ba.", "Email": null, "IndirizzoResidenza": { "CAP": "00029", "Comune": "Vicovaro", "IndirizzoAna": null, "Localita": "Vicovaro", "Nazione": "", "Provincia": "RM", "TpeIndirizzo": null, "NroIndirizzo": null, "DesProvincia": null, "GestoreTel": null, "PrefissoTel": null, "NumeroTel": null }, "Certificazione": 0 }, { "Identifier": { "Crypted": "12" }, "Cognome": "Valentini Danilo", "Nome": "", "CodEsterna": "CL_0000003853049", "DefDisposizione": "Ri.Ba.", "Email": null, "IndirizzoResidenza": { "CAP": "03043", "Comune": "Cassino", "IndirizzoAna": null, "Localita": "Cassino", "Nazione": "", "Provincia": "FR", "TpeIndirizzo": null, "NroIndirizzo": null, "DesProvincia": null, "GestoreTel": null, "PrefissoTel": null, "NumeroTel": null }, "Certificazione": 0 }, { "Identifier": { "Crypted": "13" }, "Cognome": "Zapparrata Marmi srl", "Nome": "", "CodEsterna": "CL_0000005330313", "DefDisposizione": "Ri.Ba.", "Email": null, "IndirizzoResidenza": { "CAP": "97013", "Comune": "Comiso", "IndirizzoAna": null, "Localita": "Comiso", "Nazione": "", "Provincia": "RG", "TpeIndirizzo": null, "NroIndirizzo": null, "DesProvincia": null, "GestoreTel": null, "PrefissoTel": null, "NumeroTel": null }, "Certificazione": 0 }] };

      // formatters
      $.views.converters('comuneProvincia', function (comune, provincia) {

          var text = comune;

          if (provincia != undefined && provincia.trim() != '') {
              text += ' (' + provincia + ')';
          }

          return text;
      });

      // table
      var table = $('#tableAnagrafica', $tableContext).bstable({
          data: dataSource.data,
          pageSize: 5,
          bstShowPageSize: true,
          bstRenderRow: function (index, row) {
              $.templates('#tableAnagraficaTemplate');
              return $('#tableAnagraficaTemplate').render({ index: index, row: row });
          },
          bstRenderCard: function (index, row) {
              $.templates('#tableAnagraficaCardTemplate');
              return $('#tableAnagraficaCardTemplate').render({ index: index, row: row });
          },
          bstEventRow: function (trElement, data) {
              $('a[tm-anagrafica-link]', trElement).click(data, function (event) {
                  console.log(event);
              });
          },
          bstActionLink: [
              {
                  id: 'NEW',
                  icon: './test_anchors/StaticContents/ybw/00000/it-IT/skins/skin1/img/icon/user.png',
                  text: 'Nuova anagrafica',
                  click: function () {
                      console.log('creazione nuova anagrafica');
                  },
                  isAllwaysVisible: true
              }
          ],
          bstNoRetrieve: false,
          bstBreakpointChange: sdk.utils.viewport.breakpoint.medium
      });

  });

</script>

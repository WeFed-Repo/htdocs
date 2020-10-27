<div class="wrapper-f24">
    <div class="bordered mb-3 wrapper-f">
        <!--SEZIONE AGENZIE ENTRATE TOP TUTTA EX NOVO -->
        <div class="row wrapper-f-header">
            <div class="col-md-5 col-12">
                <img class="" src="./fe/img/logo_agenzia_entrate.png" title="Agenzia delle entrate" />
            </div>
            <div class="col-md-7 col-12 mb-3 d-flex justify-content-end">
                <p class="text-right">
                    <span>Mod.</span><span class="color-light-green">F24</span><br>
                    Attenzione: dopo ogni spedizione verificare che la delega risulti accettata dalla banca incaricata del pagamento consultando la sezione esiti pagamenti
                </p>
            </div>
        </div>
        <hr>
        <!--SEZIONE TAB SCELTA MODALITA TUTTA EX NOVO -->
        <div class="row justify-content-center">
            <h4>Modalità di inserimento delega:</h4>
        </div>
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
        <!--SEZIONE SELETTORE -->
        <div tm-selector-f24="">
          <p style="border:2px solid orange;margin-top:10px;text-align-center; padding:30px;font-weight:bold"> 
            SEZIONE SELETTORE AS IS SVILUPPO.
            Per una corretta visualizzazione a 680px (limite tablet ) occorrre togliere la classe "no-margin-section" sul div class="no-margin-section d-block d-lg-none".
            </p>
        </div>

        <!--SEZIONE CONTRIBUENTE -->
        <!--MODIFICARE LE CLASSI DI TUTTE LE COLONNE PER ASSICURARE VISIBILITA' FINO A 680px -->
        <!--MODIFICARE HTML DEI TITOLI  E INSERIRLI IN TAG FORM  -->
        <form class="form-grid" novalidate="">
            <!-- Codice fiscale-->
            <div class="form-row">
                <div class="form-group col-12">
                    <h4>Contribuente</h4>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group pr-0 col-sm-6 col-md-6 col-lg-2 col-xl-3">
                    <label>Codice fiscale *</label>
                    <div class="input-group ">
                        <input type="text" class="form-control" maxlength="16" data-bind="toUpperCase: Disposizione.Native.Contribuente.Anagrafica.CodiceFiscale,enable: Additional.ActiveArea()==='libera'">
                        <div class="input-group-append" data-bind="visible: Additional.ActiveArea() === 'libera'" style="display: none;">
                            <a class="input-group-text" tm-data-modal-abi="" data-bind="click: openModalContribuente">
                                <img src="./fe/img/icon/search.svg">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="form-group pr-0 col-sm-6 col-md-6 col-lg-5 col-xl-4">
                    <label>Cognome, denominazione, o ragione sociale *</label>
                    <input class="form-control" id="denominazioneContribuente" type="text" data-bind="value: Disposizione.Native.Contribuente.Anagrafica.CognomeDenRagSoc,enable: Additional.IsContribuenteEditable()">
                </div>

                <div class="form-group pr-0 col-sm-6 col-md-6 col-lg-2 col-xl-2">
                    <label>Nome</label>
                    <input type="text" class="form-control" maxlength="16" data-bind="value: Disposizione.Native.Contribuente.Anagrafica.Nome,enable: Additional.IsContribuenteEditable()" >
                </div>

                <div class="form-group pr-0 my-auto col-sm-6 col-md-6 col-lg-3 col-xl-3 pt-4">
                    <div class="form-check mb-0 checkbox">
                        <input class="form-check-input" type="checkbox" data-bind="checked: Disposizione.Native.Contribuente.AnnoImpostaNoAnnoSolare,enable: Additional.IsContribuenteEditable()">
                        <label class="form-check-label">Barrare in caso di anno di imposta non coincidente con anno solare</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
            
                <div class="form-group pr-0 col-sm-6 col-md-3 col-lg-2 col-xl-2">
                    <label>Data di nascita</label>
                    <div class="input-group datepicker">
                        <input tm-date="from" filter-type="datetime" range-start="" type="text" class="form-control hasDatepicker" tm-type="datepicker" data-datepicker="" autocomplete="off" data-bind="tm-dateText2: Disposizione.Native.Contribuente.Anagrafica.DataNascita,enable: Additional.IsContribuenteEditable()" id="dp1603435673352"><button type="button" class="ui-datepicker-trigger"></button>
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <img src="./fe/img/icon/calendario.svg">
                            </span>
                        </div>
                    </div>
                </div>

                <div class="form-group pr-0 col-sm-2 col-md-1 col-lg-1 col-xl-1">
                    <label>Sesso</label>
                    <select class="form-control min-w-s" data-bind="options: Domain.Sessi, optionsValue: 'key', optionsText: 'value', optionsCaption: '', value: Disposizione.Native.Contribuente.Anagrafica.Sesso,enable: Additional.IsContribuenteEditable()" id="selectSesso"><option value=""></option><option value="M">M</option><option value="F">F</option></select>
                </div>

                <div class="form-group pr-0 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label>Comune (o Stato estero) di nascita</label>
                    <input type="text" class="form-control" data-bind="value : Disposizione.Native.Contribuente.Anagrafica.NascitaComune,enable: Additional.IsContribuenteEditable()" id="comuneContribuente" >
                </div>

                <div class="form-group pr-0 col-sm-6 col-md-4 col-lg-2 col-xl-2">
                    <label>Provincia</label>
                    <input type="text" class="form-control" id="provinciaContribuente" maxlength="2" data-bind="codiceProvinciaF24: Disposizione.Native.Contribuente.Anagrafica.NascitaProvincia,enable: Additional.IsContribuenteEditable()">
                </div>
            </div>

            <!-- Domicilio fiscale -->
            <div class="form-row mt-3">
                <div class="form-group col-12">
                    <h4>Domicilio fiscale</h4>
                </div>
            </div>
            

            <div class="form-row">
                <div class="form-group pr-0 col-sm-6 col-md-4 col-lg-2 col-xl-3">
                    <label>Comune *</label>
                    <input type="text" class="form-control" data-bind="value : Disposizione.Native.Contribuente.Anagrafica.Comune,enable: Additional.IsContribuenteEditable()">
                </div>
                <div class="form-group pr-0 col-sm-6 col-md-3 col-lg-2 col-xl-2">
                    <label>Provincia *</label>
                    <input type="text" maxlength="2" class="form-control" data-bind="codiceProvinciaF24 : Disposizione.Native.Contribuente.Anagrafica.Provincia,enable: Additional.IsContribuenteEditable()">
                </div>
                <div class="form-group pr-0 col-sm-12 col-md-5 col-lg-5 col-xl-4">
                    <label>Via e numero civico *</label>
                    <input type="text" class="form-control" data-bind="value : Disposizione.Native.Contribuente.Anagrafica.Indirizzo,enable: Additional.IsContribuenteEditable()">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group pr-0 col-sm-12 col-md-4 col-lg-2 col-xl-3 my-auto">
                    <label class="control-label">
                        <span>
                            Codice fiscale del coobbligato, erede, genitore, tutore o curatore fallimentare
                        </span>
                    </label>
                </div>
                <div class="form-group pr-0 col-sm-12 col-md-5 col-lg-4 col-xl-4 my-auto">
                    <input type="text" maxlength="16" class="form-control" data-bind="toUpperCase : Disposizione.Native.Contribuente.CodiceFiscaleSecondo,enable: Additional.IsContribuenteEditable()">
                </div>
                <div class="form-group pr-0 col-sm-12 col-md-3 col-lg-3 col-xl-2">
                    <label>Codice identificativo</label>
                    <div class="input-group pb-4 mb-2">
                        <input class="form-control " type="text" maxlength="2" data-bind="value : Disposizione.Native.Contribuente.CodiceIdentificativo,enable: Additional.IsContribuenteEditable()">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-6 col-md-4 col-lg-6 col-xl-3">
                    <div class="form-check checkbox">
                        <input class="form-check-input" type="checkbox" data-bind="checked: Additional.CheckAddAnagrafica,enable: Additional.IsContribuenteEditable()">
                        <label class="form-check-label">Aggiungi alla rubrica</label>
                    </div>
                </div>
                <div class="form-group col-sm-6 col-md-5 col-lg-3 col-xl-4" data-bind="visible:  Additional.CheckAddAnagrafica" style="display: none;">
                    <div class="d-flex justify-content-between">
                        <label>
                            Codice anagrafica cliente
                        </label>
                        <img class="helper-label-icon d-flex" src="/youbiz.4.ux/StaticContents/ybw/00000/it-IT/skins/skin1/img/icon/help_2.svg" style="cursor:pointer;" data-bind="click: viewModalCodiceAnagrafica">
                    </div>
                    <input type="text" class="form-control" data-bind="value : Additional.CodiceAnagraficaCliente" disabled="">

                </div>
            </div>
        </form>
    </div>

    <!--SEZIONE ESTREMI DEL VERSAMENTO -->
    <!--CAMBIARE CLASSE PER I BORDI E RIMUOVERE DIV DI CLASS CARD ALL'INTERNO -->
    <!--MODIFICARE HTML DEI TITOLI E INSERIRLI IN FORM  -->
    <!--MODIFICARE LE CLASSI DELLE COLONNE DEI CAMPI PER ASSICURARE VISIBILITA' FINO A 680px -->
    <div class="bordered mb-3" data-bind="visible: Additional.ActiveArea() === 'libera'" style="">
        <form class="form-grid" novalidate="">
            <div class="form-row">
                <div class="form-group col-12">
                    <h4>Estremi del versamento</h4>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group pr-0 col-sm-6">
                    <label></label>
                    <div class="form-check radio">
                        <input class="form-check-input" type="radio" id="titolareAzienda" name="v" data-bind="value: 3, checked: Disposizione.Native.EstremiVersamento.TitolarePagamento,enable: Additional.Control.IsEstremiVersamentiEnabled()" value="3">
                        <label class="form-check-label" for="titolareAzienda">
                            Addebito su conto attestato all'azienda mittente
                        </label>
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label></label>
                    <div class="form-check radio">
                        <input class="form-check-input" type="radio" id="titolareContribuente" name="radioTitolare" data-bind="value: 2, checked: Disposizione.Native.EstremiVersamento.TitolarePagamento,enable: Additional.Control.IsEstremiVersamentiEnabled()" value="2">
                        <label class="form-check-label" for="titolareContribuente">
                            Addebito su conto intestato al contribuente
                        </label>
                    </div>
                    </div>
            </div>
            <div class="form-row" data-bind="visible: Disposizione.Native.EstremiVersamento.TitolarePagamento()==3">
                <div class="form-group pr-0 col-sm-6">
                    <label class="control-label">Banca *</label>
                    <select class="form-control" data-bind="options: Domain.Banche, optionsText: 'value', optionsValue: 'id', enable: Disposizione.Native.EstremiVersamento.TitolarePagamento()==3 &amp;&amp; Additional.Control.IsEstremiVersamentiEnabled(),value: Additional.RiceventeAbiLibera"><option value="-1"></option><option value="05696">05696 - Banca Popolare di Sondrio</option><option value="01005">01005 - BANCA NAZIONALE DEL LAVORO SPA</option><option value="05034">05034 - BANCO BPM S.P.A.</option><option value="01030">01030 - BANCA MONTE DEI PASCHI DI SIENA S.P.A.</option><option value="05035">05035 - VENETO BANCA S.P.A.</option><option value="06225">06225 - CASSA DI RISPARMIO DEL VENETO</option><option value="02008">02008 - UNICREDIT SPA</option><option value="03069">03069 - INTESA SANPAOLO SPA</option></select>
                </div>
                <div class="form-group col-sm-6">
                    <label class="control-label">C/C *</label>
                    <select class="form-control" data-bind="options: Domain.Conti, optionsText: 'value', optionsValue: 'id', enable: Disposizione.Native.EstremiVersamento.TitolarePagamento() == 3, value : Additional.IdRapportoLibera.Hash"><option value="-1"></option><option value="6B72F964499D7BF2B3893982E9B420CF533C5749E6C7F5BCA386DEC3455B88BE">000000001722_bis1</option><option value="7D0613292A37315394F09B5E7D9B94F52DED7DA86EAB3BB52D13559E136EC3F4">000000012648_</option><option value="3B884B35E1E8BD8EFB4F5D1B5ED68A20DBF2951A5E680C557B9F55C4B2A2C50E">000000012648_alias123</option><option value="3753ADDFAE8171328F0679E50E5B990D250F0D23C2E33D3A49783BB03AD45AA1">000000036186_prova</option><option value="848587767DF20DDEA42E867839CD8E2DA61681A8731618B65B77845042E660A1">000000122822_prova</option><option value="24D7E6A67FEC1281D1274295EF87F072F098C724438B2AB5215C8D9D83F62ZZZ">02400 - 000000000999</option><option value="476740FC6208429253BA040492E926BDA2D4DE73DBBAEA21BA9463EF755A7733">11239 - 000004512804</option><option value="B79A97823F1E6E45C9957E2CAC206FF948752D53B573FF6D4B8D47FC9B4C1A39">11701 - 000000000626</option><option value="0B43B2D200F9E5FB46F0A971476D2794F6BC9567C22B03435C6FBAE65ECC3588">11701 - 000000386065</option><option value="2559995672243BF47591477D53B955B17DF2DBC033B44F652FDFD8F60A5EFF38">11701 - 000000503116</option><option value="90B3BCF5390C4293EE4158BFB07FDD3692546FA4A873F5C9842D34A46C86A623">11701 - 000000598345</option><option value="973237997A6DBC2E8C21F0C4AF087B8E813309AE69AA2BFFEC7924610B0664EA">11701 - 000000624926</option><option value="FA80C863336BE93B4B670A3532775584E4EEAD905EFD45D7892BE8F81159E116">11701 - 000000815942</option><option value="3E2A217C2151FA4CEB070C9BA0CF8F065C777C824B6A4BDCD8A5AFAF68BFD35D">11702 - 000000031944</option><option value="E283219D9F80CCB4D6DA244B5BC87751A9134B3A55DD3C9746364922B38C7271">11702 - 000000036832</option><option value="466B12B71C9C5ABF73FAEB38AFD987424EF7F141DD954462B74200D8ABADBBE3">11702 - 000000060316</option><option value="F6F3F7D5E7A45B477C2DEC9647ED74BFDBE3BD30891B74CF67436B6834C9762F">11702 - 000000122821</option><option value="D41C6034A4145761B312943EC294F54CB9335BFE428DF4806CDDE6DB0F10FA0B">11703 - 189570559739</option><option value="20513B1683D56101F712213A8DBFEC3739DCCA22257F40AE709F7A9E43EE743C">11707 - 000009467559</option><option value="066B26ABBF16740FC7E3A9EF5AF5A8484E2B26B5B090D15DF557C3FC9E37C4E4">11707 - 000010540248</option><option value="B6B9982113DA53D6F8A91C623457A5585F77D55F607C0FF9F4757253D051FD7E">11737 - 615220757482</option><option value="24C3746FA4D6E824F676FC7BABF6A3AA163A88F04213F982D59B9111031D97A8">11737 - 625015224868</option><option value="24D7E6A67FEC1281D1274295EF87F072F098C724438B2AB5215C8D9D83F6238D">11751 - 000000000342</option><option value="5A880F0F671BB86DF8A9CD5867263F2453CB63FE10DF767CA886826BFB44E3DD">11751 - 000000365990</option><option value="8EB14B2614387E34CB27A2E21CAAE8B45B3F3F0D5AFA63117962F71791D92E34">18465 - 100000001579</option><option value="24D7E6A67FEC1281D1274295EF87F072F098C724438B2AB5215C8D9D83F62WWW">65730 - 000000000888</option><option value="14EC44636FC0D9536D11B58D1C07DF5CB2CE95590D8AC069CBE59F6B595F5651">CONSORZIO_PLUS 1</option></select>
                </div>
            </div>
            <div class="form-row" data-bind="visible: Disposizione.Native.EstremiVersamento.TitolarePagamento()==2">
                <div class="form-group pr-0 col-sm-3 col-md-2">
                    <label>ABI *</label>
                    <div class="input-group ">
                        <input class="form-control " type="text" maxlength="5" data-bind="enable:(Disposizione.Native.EstremiVersamento.TitolarePagamento()=== 2 &amp;&amp; Additional.Control.IsEstremiVersamentiEnabled()), value: Disposizione.Native.EstremiVersamento.RiceventeAbiContribuente" disabled="">
                        <div class="input-group-append">
                            <a class="input-group-text" tm-data-modal-abi="" data-bind="click: associaABI">
                                <img src="./fe/img/icon/search.svg">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="form-group pr-0 col-sm-3 col-md-2">
                    <label>CAB *</label>
                    <div class="input-group">
                        <input type="text" maxlength="5" class="form-control" data-bind="enable: (Disposizione.Native.EstremiVersamento.TitolarePagamento()== 2), value: Disposizione.Native.EstremiVersamento.RiceventeCabContribuente" disabled="">
                        <div class="input-group-append">
                            <a class="input-group-text" tm-data-modal-cab="" data-bind="click: associaCAB">
                                <img src="./fe/img/icon/checkmark.svg">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="form-group pr-0 col-sm-3 col-md-3">
                    <label>C/C *</label>
                    <input type="text" class="form-control" maxlength="12" data-bind="enable: (Disposizione.Native.EstremiVersamento.TitolarePagamento()== 2) ,  value: Disposizione.Native.EstremiVersamento.RiceventeNumeroContoContribuente" disabled="">
                </div>
                <div class="form-group col-sm-3 col-md-2 my-auto">
                    <a href="javascript:;" data-bind="click: viewModalConosciIban">Conosci l'IBAN?</a>
                </div>
            </div>
            <div class="form-row">
                <div class="pr-0 form-group col-sm-6">
                    <div class="form-check  radio">
                        <input class="form-check-input" type="radio" id="add" name="radioInvio" data-bind="value: 1, checked: Disposizione.Native.EstremiVersamento.InvioAttestazione" value="1">
                        <label class="form-check-label" for="add">Invio attestazione titolare C/C addebito</label>
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <div class="form-check  radio">
                        <input class="form-check-input" type="radio" id="deb" name="radioInvio" data-bind="value: 2, checked: Disposizione.Native.EstremiVersamento.InvioAttestazione" value="2">
                        <label class="form-check-label" for="deb">
                            Invio attestazione destinatario di stampa (accordi banca)
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-row" data-bind="if: Disposizione.Native.EstremiVersamento.InvioAttestazione()==2">
                <div class="pr-0 form-group col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <label>Ragione sociale *</label>
                    <input type="text" class="form-control" data-bind="textInput: Disposizione.Native.EstremiVersamento.Anagrafica.CognomeDenRagSoc">
                </div>
                <div class="pr-0 form-group col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <label>Indirizzo *</label>
                    <input type="text" class="form-control" data-bind="textInput: Disposizione.Native.EstremiVersamento.Anagrafica.Indirizzo">
                </div>
                <div class="pr-0 form-group col-sm-2 col-md-2 col-lg-2 col-xl-1">
                    <label>CAP *</label>
                    <input type="text" class="form-control" data-bind="textInput: Disposizione.Native.EstremiVersamento.Anagrafica.Cap">
                </div>
                <div class="pr-0 form-group col-sm-8 col-md-8 col-lg-8 col-xl-3">
                    <label>Comune *</label>
                    <input type="text" class="form-control" data-bind="textInput: Disposizione.Native.EstremiVersamento.Anagrafica.Comune">
                </div>
                <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2">
                    <label>Provincia *</label>
                    <input type="text" class="form-control" maxlength="2" data-bind="codiceProvinciaF24: Disposizione.Native.EstremiVersamento.Anagrafica.Provincia">
                </div>
            </div>
        </form>
    </div>

<!-- ACCORDION ERARIO-->
<!-- togliere la classe border-top al div card-body e modificare le classi delle colonne per visualizzare anche a 680px e per incolonanre i totali-->
<!-- modificare il titolo della sezione da h2 a h4-->
    <div class="accordion bordered-style">
        <div class="card collapser mb-3">
            <div class="card-header d-flex justify-content-between align-items-center hide collapsed" tm-erario-accordion-header="" data-toggle="collapse">
                <h4 class="mb-0">Sezione Erario</h4>
                <div class="d-flex justify-content-end">
                    <p data-bind="visible: Additional.IsSezErarioPopulated()" class="mr-3 mb-0" style="display: none;">
                        <img src="/youbiz.4.ux/StaticContents/ybw/00000/it-IT/skins/skin1/img/icon/checkmark.svg">
                        Sezione compilata
                    </p>
                    <span class="card-header-icon"></span>
                </div>
            </div>
            <div class="collapse" aria-labelledby="headingOne" data-parent="#accordion" tm-erario-accordion-body="" style="">
                <div class="card-body">
                    <form class="form-grid" novalidate="">
                        <div class="form-row">
                            <div class="form-group pr-0 col-sm-12 col-md-2 my-auto">
                                <h4>Imposte dirette - IVA</h4>
                                <h6>Ritenute alla fonte altri tributi ed interessi</h6>
                            </div>
                            <div class="form-group col-sm-12 col-md-10">
                                <!-- HEADER ROW -->
                                <div class="form-row mt-2">
                                    <div class="form-group col-sm-2">
                                        <label>Codice tributo</label>
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <label>Rateaz. Reg. prov. mm</label>
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <label>Anno</label>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label>Importi a debito versati (A)</label>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label>Importi a credito compensati (B)</label>
                                    </div>
                                </div>
                                <!--  ROWS -->
                                <div data-bind="foreach: Disposizione.Native.Erario.Sezione">
                                    <div class="form-row">
                                        <div class="form-group pr-0 col-sm-2">
                                            <div class="input-group ">
                                                <input class="form-control " type="text" maxlength="4" data-bind="codiceTributo: CodiceTributo">
                                                <div class="input-group-append">
                                                    <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaErarioCodTributo.bind($data,[$index()])">
                                                        <img src="./fe/img/icon/search.svg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group pr-0 col-sm-2">
                                            <input type="text" class="form-control" maxlength="4" data-bind="value: RiferimentoTributo">
                                        </div>
                                        <div class="form-group pr-0 col-sm-2">
                                            <input type="text" class="form-control" maxlength="4" data-bind="value : AnnoTributo">
                                        </div>
                                        <div class="form-group pr-0 col-sm-3">
                                            <input type="text" class="form-control text-right" data-bind="formatImporto: Debito">
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <input type="text" class="form-control text-right" data-bind="formatImporto: Credito">

                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group pr-0 col-sm-2">
                                            <div class="input-group">
                                                <input class="form-control " type="text" maxlength="4" data-bind="codiceTributo: CodiceTributo">
                                                <div class="input-group-append """>
                                                    <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaErarioCodTributo.bind($data,[$index()])">
                                                        <img src="./fe/img/icon/search.svg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group pr-0 col-sm-2">
                                            <input type="text" class="form-control" maxlength="4" data-bind="value: RiferimentoTributo">
                                        </div>
                                        <div class="form-group pr-0 col-sm-2">
                                            <input type="text" class="form-control" maxlength="4" data-bind="value : AnnoTributo">
                                        </div>
                                        <div class="form-group pr-0 col-sm-3">
                                            <input type="text" class="form-control text-right" data-bind="formatImporto: Debito">
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <input type="text" class="form-control text-right" data-bind="formatImporto: Credito">
                                        </div>
                                    </div>
                                
                                    <div class="form-row">
                                        <div class="form-group pr-0 col-sm-2">
                                            <div class="input-group ">
                                                <input class="form-control " type="text" maxlength="4" data-bind="codiceTributo: CodiceTributo">
                                                <div class="input-group-append """>
                                                    <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaErarioCodTributo.bind($data,[$index()])">
                                                        <img src="./fe/img/icon/search.svg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group pr-0 col-sm-2">
                                            <input type="text" class="form-control" maxlength="4" data-bind="value: RiferimentoTributo">
                                        </div>
                                        <div class="form-group pr-0 col-sm-2">
                                            <input type="text" class="form-control" maxlength="4" data-bind="value : AnnoTributo">
                                        </div>
                                        <div class="form-group pr-0 col-sm-3">
                                            <input type="text" class="form-control text-right" data-bind="formatImporto: Debito">
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <input type="text" class="form-control text-right" data-bind="formatImporto: Credito">
                                        </div>
                                    </div>
                                
                                    <div class="form-row">
                                        <div class="form-group pr-0 col-sm-2">
                                            <div class="input-group ">
                                                <input class="form-control " type="text" maxlength="4" data-bind="codiceTributo: CodiceTributo">
                                                <div class="input-group-append">
                                                    <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaErarioCodTributo.bind($data,[$index()])">
                                                        <img src="./fe/img/icon/search.svg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group pr-0 col-sm-2">
                                            <input type="text" class="form-control" maxlength="4" data-bind="value: RiferimentoTributo">
                                        </div>
                                        <div class="form-group pr-0 col-sm-2">
                                            <input type="text" class="form-control" maxlength="4" data-bind="value : AnnoTributo">
                                        </div>
                                        <div class="form-group pr-0 col-sm-3">
                                            <input type="text" class="form-control text-right" data-bind="formatImporto: Debito">
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <input type="text" class="form-control text-right" data-bind="formatImporto: Credito">

                                        </div>
                                    </div>
                                
                                    <div class="form-row">
                                        <div class="form-group pr-0 col-sm-2">
                                            <div class="input-group ">
                                                <input class="form-control " type="text" maxlength="4" data-bind="codiceTributo: CodiceTributo">
                                                <div class="input-group-append">
                                                    <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaErarioCodTributo.bind($data,[$index()])">
                                                        <img src="./fe/img/icon/search.svg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group pr-0 col-sm-2">
                                            <input type="text" class="form-control" maxlength="4" data-bind="value: RiferimentoTributo">
                                        </div>
                                        <div class="form-group pr-0 col-sm-2">
                                            <input type="text" class="form-control" maxlength="4" data-bind="value : AnnoTributo">
                                        </div>
                                        <div class="form-group pr-0 col-sm-3">
                                            <input type="text" class="form-control text-right" data-bind="formatImporto: Debito">
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <input type="text" class="form-control text-right" data-bind="formatImporto: Credito">

                                        </div>
                                    </div>
                                
                                    <div class="form-row">
                                        <div class="form-group pr-0 col-sm-2">
                                            <div class="input-group ">
                                                <input class="form-control " type="text" maxlength="4" data-bind="codiceTributo: CodiceTributo">
                                                <div class="input-group-append">
                                                    <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaErarioCodTributo.bind($data,[$index()])">
                                                        <img src="./fe/img/icon/search.svg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group pr-0 col-sm-2">
                                            <input type="text" class="form-control" maxlength="4" data-bind="value: RiferimentoTributo">
                                        </div>
                                        <div class="form-group pr-0 col-sm-2">
                                            <input type="text" class="form-control" maxlength="4" data-bind="value : AnnoTributo">
                                        </div>
                                        <div class="form-group pr-0 col-sm-3">
                                            <input type="text" class="form-control text-right" data-bind="formatImporto: Debito">
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <input type="text" class="form-control text-right" data-bind="formatImporto: Credito">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-12 col-md-2 my-auto"></div>
                            <div class="form-group col-sm-12 col-md-10">
                                <!-- HEADER ROW -->
                                <div class="form-row mt-2">
                                    <div class="form-group col-sm-1"></div>
                                    <div class="form-group col-sm-2">
                                        <label>Ufficio</label>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label>Codice atto</label>
                                    </div>
                                    <div class="form-group col-sm-3 text-center">
                                        <label><strong>TOTALE A</strong></label>
                                    </div>
                                    <div class="form-group col-sm-3 text-center">
                                        <label><strong>TOTALE B</strong></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-12 col-md-2 my-auto"></div>
                            <div class="form-group col-sm-12 col-md-10">
                                <!-- HEADER ROW -->
                                <div class="form-row">
                                    <div class="form-group col-sm-1"></div>
                                    <div class="form-group pr-0 col-sm-2">
                                        <div class="input-group ">
                                            <input class="form-control " type="text" maxlength="3" data-bind="value: Disposizione.Native.Erario.CodiceUfficio">
                                            <div class="input-group-append">
                                                <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaErarioUfficio">
                                                    <img src="./fe/img/icon/search.svg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group pr-0 col-sm-3">
                                        <input type="text" class="form-control" maxlength="11" data-bind="value: Disposizione.Native.Erario.CodiceAtto">
                                    </div>
                                    <div class="form-group pr-0 col-sm-3 text-center">
                                    <input type="text" class="form-control text-right" data-bind="formatImporto: Disposizione.Native.Erario.Totali.Debito" disabled="">
                                    </div>
                                    <div class="form-group col-sm-3 text-center">
                                    <input type="text" class="form-control text-right" data-bind="formatImporto: Disposizione.Native.Erario.Totali.Credito" disabled="">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-12 col-md-2 my-auto"></div>
                            <div class="form-group col-sm-12 col-md-10">
                            <div class="form-row d-flex align-items-center">
                                <div class="form-group col-sm-3"></div>
                                <div class="form-group col-sm-3 text-right">
                                    <label><strong>SALDO [A-B] +/-</strong></label>
                                </div>
                                <div class="form-group pr-0 col-sm-1">
                                    <input type="text" class="form-control text-right" data-bind="value: Disposizione.Native.Erario.Totali.Segno" disabled="">
                                </div>
                                <div class="form-group col-sm-5">
                                    <input type="text" class="form-control text-right" data-bind="tm-importoAbsText: Disposizione.Native.Erario.Totali.Saldo" disabled="">
                                </div>
                            </div>
                            </div>
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- ACCORDION INPS-->
<!-- togliere la classe border-top al div card-body e modificare le classi delle colonne per visualizzare anche a 680px-->
<!-- modificare il titolo della sezione da h2 a h4-->
    <div class="accordion bordered-style">
        <div class="card collapser mb-3">
            <div class="card-header d-flex justify-content-between align-items-center hide collapsed" tm-inps-accordion-header="" data-toggle="collapse">
                <h4 class="mb-0">Sezione Inps</h4>
                <div class="d-flex justify-content-end">
                    <p data-bind="visible: Additional.IsSezInpsPopulated()" class="mr-3 mb-0" style="display: none;">
                        <img src="/youbiz.4.ux/StaticContents/ybw/00000/it-IT/skins/skin1/img/icon/checkmark.svg">
                        Sezione compilata
                    </p>
                    <span class="card-header-icon"></span>
                </div>
            </div>
            <div class="collapse" aria-labelledby="headingOne" data-parent="#accordion" tm-inps-accordion-body="" style="">
                <div class="card-body">
                    <form class="form-grid" novalidate="">
                        <div data-bind="foreach: Disposizione.Native.Inps.Sezione">
                            <div class="form-row">
                                <div class="form-group col-sm-12 col-md-12 col-lg-8 col-xl-8">
                                    <div class="form-row">
                                        <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <label>Codice sede</label>
                                        </div>
                                        <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <label>Causale contributo</label>
                                        </div>
                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4 text-center">
                                            <span class="text-center">
                                                <span class="text-center">Matr./Codice </span>

                                                <span class="text-center">INPS Fil. azienda</span>
                                            </span>
                                        </div>
                                        <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
                                            <label>Periodo da</label>
                                        </div>
                                        <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
                                            <label>Periodo a</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <div class="input-group ">
                                                <input class="form-control" type="text" maxlength="4" data-bind="textInput : CodiceSede">
                                                <div class="input-group-append">
                                                    <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaInpsCodSede.bind($data,[$index()])">
                                                        <img src="./fe/img/icon/search.svg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <div class="input-group">
                                                <input class="form-control " type="text" maxlength="4" data-bind="textInput : CausaleContributo">
                                                <div class="input-group-append">
                                                    <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaInpsCausContrib.bind($data,[$index()])">
                                                        <img src="./fe/img/icon/search.svg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group pr-0 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <input type="text" class="form-control" maxlength="22" data-bind="value : MatricolaInps">
                                        </div>
                                        <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <input type="text" class="form-control" maxlength="7" data-bind="value : PeriodoInizio">
                                        </div>
                                        <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <input type="text" class="form-control" maxlength="7" data-bind="value : PeriodoFine">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    <div class="form-row d-flex justify-content-end">
                                        <div class="form-group col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                                <label>Importi a debito versati (C)</label>
                                            </div>
                                        <div class="form-group col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                            <label>Importi a credito compensati (D)</label>
                                        </div>
                                    </div>
                                    <div class="form-row d-flex justify-content-end">
                                        <div class="form-group pr-0 col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                            <input type="text" class="form-control text-right" data-bind="formatImporto: Debito">

                                        </div>
                                        <div class="form-group col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                            <input type="text" class="form-control text-right" data-bind="formatImporto: Credito">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-12 col-md-12 col-lg-8 col-xl-8">
                                    <div class="form-row">
                                        <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <label>Codice sede</label>
                                        </div>
                                        <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <label>Causale contributo</label>
                                        </div>
                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4 text-center">
                                            <span class="text-center">
                                                <span class="text-center">Matr./Codice </span>

                                                <span class="text-center">INPS Fil. azienda</span>
                                            </span>
                                        </div>
                                        <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
                                            <label>Periodo da</label>
                                        </div>
                                        <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
                                            <label>Periodo a</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <div class="input-group ">
                                                <input class="form-control" type="text" maxlength="4" data-bind="textInput : CodiceSede">
                                                <div class="input-group-append">
                                                    <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaInpsCodSede.bind($data,[$index()])">
                                                        <img src="./fe/img/icon/search.svg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <div class="input-group">
                                                <input class="form-control " type="text" maxlength="4" data-bind="textInput : CausaleContributo">
                                                <div class="input-group-append">
                                                    <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaInpsCausContrib.bind($data,[$index()])">
                                                        <img src="./fe/img/icon/search.svg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group pr-0 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <input type="text" class="form-control" maxlength="22" data-bind="value : MatricolaInps">
                                        </div>
                                        <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <input type="text" class="form-control" maxlength="7" data-bind="value : PeriodoInizio">
                                        </div>
                                        <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <input type="text" class="form-control" maxlength="7" data-bind="value : PeriodoFine">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    <div class="form-row d-flex justify-content-end">
                                        <div class="form-group col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                                <label>Importi a debito versati (C)</label>
                                            </div>
                                        <div class="form-group col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                            <label>Importi a credito compensati (D)</label>
                                        </div>
                                    </div>
                                    <div class="form-row d-flex justify-content-end">
                                        <div class="form-group pr-0 col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                            <input type="text" class="form-control text-right" data-bind="formatImporto: Debito">

                                        </div>
                                        <div class="form-group col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                            <input type="text" class="form-control text-right" data-bind="formatImporto: Credito">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-12 col-md-12 col-lg-8 col-xl-8">
                                    <div class="form-row">
                                        <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <label>Codice sede</label>
                                        </div>
                                        <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <label>Causale contributo</label>
                                        </div>
                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4 text-center">
                                            <span class="text-center">
                                                <span class="text-center">Matr./Codice </span>

                                                <span class="text-center">INPS Fil. azienda</span>
                                            </span>
                                        </div>
                                        <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
                                            <label>Periodo da</label>
                                        </div>
                                        <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
                                            <label>Periodo a</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <div class="input-group ">
                                                <input class="form-control" type="text" maxlength="4" data-bind="textInput : CodiceSede">
                                                <div class="input-group-append">
                                                    <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaInpsCodSede.bind($data,[$index()])">
                                                        <img src="./fe/img/icon/search.svg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <div class="input-group">
                                                <input class="form-control " type="text" maxlength="4" data-bind="textInput : CausaleContributo">
                                                <div class="input-group-append">
                                                    <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaInpsCausContrib.bind($data,[$index()])">
                                                        <img src="./fe/img/icon/search.svg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group pr-0 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <input type="text" class="form-control" maxlength="22" data-bind="value : MatricolaInps">
                                        </div>
                                        <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <input type="text" class="form-control" maxlength="7" data-bind="value : PeriodoInizio">
                                        </div>
                                        <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <input type="text" class="form-control" maxlength="7" data-bind="value : PeriodoFine">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    <div class="form-row d-flex justify-content-end">
                                        <div class="form-group col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                                <label>Importi a debito versati (C)</label>
                                            </div>
                                        <div class="form-group col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                            <label>Importi a credito compensati (D)</label>
                                        </div>
                                    </div>
                                    <div class="form-row d-flex justify-content-end">
                                        <div class="form-group pr-0 col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                            <input type="text" class="form-control text-right" data-bind="formatImporto: Debito">

                                        </div>
                                        <div class="form-group col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                            <input type="text" class="form-control text-right" data-bind="formatImporto: Credito">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-12 col-md-12 col-lg-8 col-xl-8">
                                    <div class="form-row">
                                        <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <label>Codice sede</label>
                                        </div>
                                        <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <label>Causale contributo</label>
                                        </div>
                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4 text-center">
                                            <span class="text-center">
                                                <span class="text-center">Matr./Codice </span>

                                                <span class="text-center">INPS Fil. azienda</span>
                                            </span>
                                        </div>
                                        <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
                                            <label>Periodo da</label>
                                        </div>
                                        <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
                                            <label>Periodo a</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <div class="input-group ">
                                                <input class="form-control" type="text" maxlength="4" data-bind="textInput : CodiceSede">
                                                <div class="input-group-append">
                                                    <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaInpsCodSede.bind($data,[$index()])">
                                                        <img src="./fe/img/icon/search.svg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <div class="input-group">
                                                <input class="form-control " type="text" maxlength="4" data-bind="textInput : CausaleContributo">
                                                <div class="input-group-append">
                                                    <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaInpsCausContrib.bind($data,[$index()])">
                                                        <img src="./fe/img/icon/search.svg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group pr-0 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <input type="text" class="form-control" maxlength="22" data-bind="value : MatricolaInps">
                                        </div>
                                        <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <input type="text" class="form-control" maxlength="7" data-bind="value : PeriodoInizio">
                                        </div>
                                        <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <input type="text" class="form-control" maxlength="7" data-bind="value : PeriodoFine">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    <div class="form-row d-flex justify-content-end">
                                        <div class="form-group col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                                <label>Importi a debito versati (C)</label>
                                            </div>
                                        <div class="form-group col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                            <label>Importi a credito compensati (D)</label>
                                        </div>
                                    </div>
                                    <div class="form-row d-flex justify-content-end">
                                        <div class="form-group pr-0 col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                            <input type="text" class="form-control text-right" data-bind="formatImporto: Debito">

                                        </div>
                                        <div class="form-group col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                            <input type="text" class="form-control text-right" data-bind="formatImporto: Credito">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row pt-5 d-flex justify-content-end align-items-center">
                                <div class="form-group col-sm-3 col-md-3 col-lg-2 col-xl-2 text-center">
                                    <label><strong>TOTALE C</strong></label>
                                </div>
                                <div class="form-group col-sm-3 col-md-3 col-lg-2 col-xl-2 text-center">
                                    <label><strong>TOTALE D</strong></label>
                                </div>
                            </div>
                            <div class="form-row d-flex justify-content-end align-items-center">
                                <div class="form-group pr-0 col-sm-3 col-md-3 col-lg-2 col-xl-2">
                                    <input type="text" class="form-control text-right" data-bind="formatImporto: Disposizione.Native.Inps.Totali.Debito" disabled="">
                                </div>
                                <div class="form-group col-sm-3 col-md-3 col-lg-2 col-xl-2">
                                    <input type="text" class="form-control text-right" data-bind="formatImporto: Disposizione.Native.Inps.Totali.Credito" disabled="">
                                </div>
                            </div>
                            <div class="form-row d-flex justify-content-end align-items-center">
                                <div class="form-group col-sm-3 text-right">
                                    <label><strong>SALDO [C-D] +/-</strong></label>
                                </div>
                                <div class="form-group pr-0 col-sm-1">
                                    <input type="text" class="form-control text-right" data-bind="value: Disposizione.Native.Inps.Totali.Segno" disabled="">
                                </div>
                                <div class="form-group col-sm-4">
                                    <input type="text" class="form-control text-right" data-bind="tm-importoAbsText: Disposizione.Native.Inps.Totali.Saldo" disabled="">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>






    <!-- ACCORDION SEZIONE REGIONI-->
<!-- togliere la classe border-top al div card-body e modificare le classi delle colonne per visualizzare anche a 680px-->
<!-- modificare il titolo della sezione da h2 a h4-->
    <div class="accordion bordered-style">
            <div class="card collapser mb-3">
                <div class="card-header d-flex justify-content-between align-items-center collapsed hide" tm-regione-accordion-header="" data-toggle="collapse">
                    <h4 class="mb-0">Sezione Regioni</h4>
                    <div class="d-flex justify-content-end">
                        <p data-bind="visible: Additional.IsSezRegionePopulated()" class="mr-3 mb-0" style="display: none;">
                            <img src="/youbiz.4.ux/StaticContents/ybw/00000/it-IT/skins/skin1/img/icon/checkmark.svg">
                            Sezione compilata
                        </p>
                        <span class="card-header-icon"></span>
                    </div>
                </div>
                <div class="collapse" aria-labelledby="headingOne" data-parent="#accordion" tm-regione-accordion-body="" style="">
                    <div class="card-body">
                        <form class="form-grid" novalidate="">

                            <!-- HEADER ROW 2 -->
                            <div class="form-row mt-2">
                                <div class="form-group col-sm-2 ">
                                    <label>Codice regione</label>
                                </div>
                                <div class="form-group col-sm-2 ">
                                    <label>Codice tributo</label>
                                </div>
                                <div class="form-group col-sm-2 ">
                                    <label>Rateazione mm</label>
                                </div>
                                <div class="form-group col-sm-2 ">
                                    <label>Anno di riferimento</label>
                                </div>
                                <div class="form-group col-sm-2">
                                    <label>Importi a debito versati (E)</label>
                                </div>
                                <div class="form-group col-sm-2">
                                    <label>Importi a credito compensati(F)</label>
                                </div>
                            </div>

                            <div data-bind="foreach: Disposizione.Native.Regione.Sezione">
                                <div class="form-row">
                                    <div class="form-group pr-0 col-sm-2">
                                        <div class="input-group ">
                                            <input class="form-control " type="text" maxlength="2" data-bind="codiceRegione: CodiceRegione">
                                            <div class="input-group-append">
                                                <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaRegioneCodRegione.bind($data,[$index()])">
                                                    <img src="./fe/img/icon/search.svg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group pr-0 col-sm-2">
                                        <div class="input-group ">
                                            <input class="form-control " type="text" maxlength="4" data-bind="codiceTributo: CodiceTributo">
                                            <div class="input-group-append">
                                                <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaRegioneCodTributo.bind($data,[$index()])">
                                                    <img src="./fe/img/icon/search.svg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group pr-0 col-sm-2">
                                        <input type="text" class="form-control" maxlength="4" data-bind="value : Rateazione">
                                    </div>
                                    <div class="form-group pr-0 col-sm-2">
                                        <input type="text" class="form-control" maxlength="4" data-bind="value : AnnoRiferimento">
                                    </div>
                                    <div class="form-group pr-0 col-sm-2">
                                        <input type="text" class="form-control text-right" data-bind="formatImporto: Debito">
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <input type="text" class="form-control text-right" data-bind="formatImporto: Credito">
                                    </div>
                                </div>
                            
                                <div class="form-row">
                                    <div class="form-group pr-0 col-sm-2">
                                        <div class="input-group ">
                                            <input class="form-control " type="text" maxlength="2" data-bind="codiceRegione: CodiceRegione">
                                            <div class="input-group-append">
                                                <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaRegioneCodRegione.bind($data,[$index()])">
                                                    <img src="./fe/img/icon/search.svg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group pr-0 col-sm-2">
                                        <div class="input-group ">
                                            <input class="form-control " type="text" maxlength="4" data-bind="codiceTributo: CodiceTributo">
                                            <div class="input-group-append">
                                                <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaRegioneCodTributo.bind($data,[$index()])">
                                                    <img src="./fe/img/icon/search.svg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group pr-0 col-sm-2">
                                        <input type="text" class="form-control" maxlength="4" data-bind="value : Rateazione">
                                    </div>
                                    <div class="form-group pr-0 col-sm-2">
                                        <input type="text" class="form-control" maxlength="4" data-bind="value : AnnoRiferimento">
                                    </div>
                                    <div class="form-group pr-0 col-sm-2">
                                        <input type="text" class="form-control text-right" data-bind="formatImporto: Debito">
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <input type="text" class="form-control text-right" data-bind="formatImporto: Credito">
                                    </div>
                                </div>
                            
                                <div class="form-row">
                                    <div class="form-group pr-0 col-sm-2">
                                        <div class="input-group ">
                                            <input class="form-control " type="text" maxlength="2" data-bind="codiceRegione: CodiceRegione">
                                            <div class="input-group-append">
                                                <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaRegioneCodRegione.bind($data,[$index()])">
                                                    <img src="./fe/img/icon/search.svg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group pr-0 col-sm-2">
                                        <div class="input-group ">
                                            <input class="form-control " type="text" maxlength="4" data-bind="codiceTributo: CodiceTributo">
                                            <div class="input-group-append">
                                                <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaRegioneCodTributo.bind($data,[$index()])">
                                                    <img src="./fe/img/icon/search.svg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group pr-0 col-sm-2">
                                        <input type="text" class="form-control" maxlength="4" data-bind="value : Rateazione">
                                    </div>
                                    <div class="form-group pr-0 col-sm-2">
                                        <input type="text" class="form-control" maxlength="4" data-bind="value : AnnoRiferimento">
                                    </div>
                                    <div class="form-group pr-0 col-sm-2">
                                        <input type="text" class="form-control text-right" data-bind="formatImporto: Debito">
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <input type="text" class="form-control text-right" data-bind="formatImporto: Credito">
                                    </div>
                                </div>
                            
                                <div class="form-row">
                                    <div class="form-group pr-0 col-sm-2">
                                        <div class="input-group ">
                                            <input class="form-control " type="text" maxlength="2" data-bind="codiceRegione: CodiceRegione">
                                            <div class="input-group-append">
                                                <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaRegioneCodRegione.bind($data,[$index()])">
                                                    <img src="./fe/img/icon/search.svg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group pr-0 col-sm-2">
                                        <div class="input-group ">
                                            <input class="form-control " type="text" maxlength="4" data-bind="codiceTributo: CodiceTributo">
                                            <div class="input-group-append">
                                                <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaRegioneCodTributo.bind($data,[$index()])">
                                                    <img src="./fe/img/icon/search.svg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group pr-0 col-sm-2">
                                        <input type="text" class="form-control" maxlength="4" data-bind="value : Rateazione">
                                    </div>
                                    <div class="form-group pr-0 col-sm-2">
                                        <input type="text" class="form-control" maxlength="4" data-bind="value : AnnoRiferimento">
                                    </div>
                                    <div class="form-group pr-0 col-sm-2">
                                        <input type="text" class="form-control text-right" data-bind="formatImporto: Debito">
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <input type="text" class="form-control text-right" data-bind="formatImporto: Credito">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row d-flex justify-content-end align-items-center">
                                <div class="form-group col-sm-2 text-center">
                                    <label><strong>TOTALE E</strong></label>
                                </div>
                                <div class="form-group col-sm-2 text-center">
                                    <label><strong>TOTALE F</strong></label>
                                </div>
                            </div>

                            <div class="form-row d-flex justify-content-end align-items-center">
                                <div class="form-group pr-0 col-sm-2">
                                    <input type="text" class="form-control text-right" data-bind="formatImporto: Disposizione.Native.Regione.Totali.Debito" disabled="">
                                </div>
                                <div class="form-group col-sm-2">
                                    <input type="text" class="form-control text-right" data-bind="formatImporto: Disposizione.Native.Regione.Totali.Credito" disabled="">
                                </div>
                            </div>

                            <div class="form-row d-flex justify-content-end align-items-center">
                                <div class="form-group col-sm-3 text-right">
                                    <label><strong>SALDO [E-F] +/-</strong></label>
                                </div>
                                <div class="form-group pr-0 col-sm-1">
                                    <input type="text" class="form-control text-right" data-bind="textInput: Disposizione.Native.Regione.Totali.Segno" disabled="">
                                </div>
                                <div class="form-group col-sm-4">
                                    <input type="text" class="form-control text-right" data-bind="tm-importoAbsText: Disposizione.Native.Regione.Totali.Saldo" disabled="">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>

<!-- ACCORDION IMU E TRIBUTI LOCALI-->
<!-- togliere la classe border-top al div card-body e modificare le classi delle colonne per visualizzare anche a 680px-->
<!-- modificare il titolo della sezione da h2 a h4-->
<!-- modificare larghezze e dispozione colonne per visualizzazione tu tablet-->
    <div class="accordion bordered-style">
        <div class="card collapser mb-3">
            <div class="card-header d-flex justify-content-between align-items-center hide collapsed" tm-imu-accordion-header="" data-toggle="collapse">
                <h4 class="mb-0">Sezione IMU ed altri tributi locali</h4>
                <div class="d-flex justify-content-end">
                    <p data-bind="visible: Additional.IsSezIMUPopulated()" class="mr-3 mb-0" style="display: none;">
                        <img src="/youbiz.4.ux/StaticContents/ybw/00000/it-IT/skins/skin1/img/icon/checkmark.svg">
                        Sezione compilata
                    </p>
                    <span class="card-header-icon"></span>
                </div>
            </div>
            <div class="collapse" aria-labelledby="headingOne" data-parent="#accordion" tm-imu-accordion-body="" style="">
                <div class="card-body">
                    <form class="form-grid" novalidate="">
                        <!-- HEADER ROW  -->
                        <div data-bind="foreach: Disposizione.Native.Imu.Sezione">
                            <div class="form-row">
                                <div class="form-group col-sm-12 col-md-12 col-lg-8 col-xl-8">
                                    <div class="form-row">
                                        <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <label>Codice <br>ente/comune</label>
                                        </div>
                                        <div class="form-group p-0 col-sm-3 col-md-3 col-lg-4 col-xl-4">
                                            <div class="form-row">
                                                <div class="form-group pr-0 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center align-items-center">
                                                    <label>Ravv.</label>
                                                </div>
                                                <div class="form-group pr-0 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center ">
                                                    <label>Immob.<br> varianti</label>
                                                </div>
                                                <div class="form-group pr-0 col-sm-3 col-md-3 col-lg-3 col-xl-2 text-center">
                                                    <label>Acc.</label>
                                                </div>
                                                <div class="form-group col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">
                                                    <label>Saldo</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-1 col-md-1 col-lg-1 col-xl-1">
                                            <label>Num. immobili</label>
                                        </div>
                                        <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <label>Codice trib</label>
                                        </div>
                                        <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <label>Rateazione </label>
                                        </div>
                                        <div class="form-group col-sm-2 col-md-2 col-lg-1 col-xl-1">
                                            <label>Anno rif.</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <div class="input-group ">
                                                <input class="form-control" maxlength="4" type="text" data-bind="textInput : CodiceEnteComune">
                                                <div class="input-group-append">
                                                    <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaIMUCodEnteComune.bind($data,[$index()])">
                                                        <img src="./fe/img/icon/search.svg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-3 col-md-3 col-lg-4 col-xl-4">
                                            <div class="form-row">
                                                <div class="form-group p-0 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">
                                                    <div class="form-check  checkbox">
                                                        <input name="inlineRadioOptions" class="form-check-input" type="checkbox" data-bind="checked: Ravvedimento,attr: { &quot;id&quot;: &quot;Ravvedimento&quot;+$index()}" id="Ravvedimento0">
                                                        <label class="form-check-label" data-bind="attr:{ &quot;for&quot;: &quot;Ravvedimento&quot;+$index()}" for="Ravvedimento0"></label>
                                                    </div>
                                                </div>
                                                <div class="form-group p-0 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center ">
                                                    <div class="form-check  checkbox">
                                                        <input name="inlineRadioOptions" class="form-check-input " type="checkbox" data-bind="checked: ImmobiliVariati,attr: { &quot;id&quot;: &quot;ImmobiliVariati&quot;+$index()}" id="ImmobiliVariati0">
                                                        <label class="form-check-label" data-bind="attr:{ &quot;for&quot;: &quot;ImmobiliVariati&quot;+$index()}" for="ImmobiliVariati0"></label>
                                                    </div>
                                                </div>
                                                <div class="form-group p-0 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center ">
                                                    <div class="form-check  checkbox">
                                                        <input name="inlineRadioOptions" class="form-check-input" type="checkbox" data-bind="checked: Acconto,attr: { &quot;id&quot;: &quot;Acconto&quot;+$index()}" id="Acconto0">
                                                        <label class="form-check-label" data-bind="attr:{ &quot;for&quot;: &quot;Acconto&quot;+$index()}" for="Acconto0"></label>
                                                    </div>
                                                </div>
                                                <div class="form-group  p-0 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">
                                                    <div class="form-check  checkbox">
                                                        <input name="inlineRadioOptions" class="form-check-input" type="checkbox" data-bind="checked: Saldo,attr: { &quot;id&quot;: &quot;Saldo&quot;+$index()}" id="Saldo0">
                                                        <label class="form-check-label" data-bind="attr:{ &quot;for&quot;: &quot;Saldo&quot;+$index()}" for="Saldo0"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group pr-0 col-sm-1 col-md-1 col-lg-1 col-xl-1">
                                            <input type="text" class="form-control" maxlength="3" data-bind="numeroImmobili: NumeroImmobili">
                                        </div>
                                        <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <div class="input-group">
                                                <input class="form-control  " type="text" maxlength="4" data-bind="codiceTributo: CodiceTributo">
                                                <div class="input-group-append">
                                                    <a class="input-group-text" tm-data-modal-abi="" data-bind="click:  $root.AssociaIMUCodTributo.bind($data,[$index()])">
                                                        <img src="./fe/img/icon/search.svg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <input class="form-control " type="text" maxlength="4" data-bind="value : Rateazione">
                                        </div>
                                        <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-1 col-xl-1">
                                            <input class="form-control " type="text" maxlength="4" data-bind="value :AnnoRiferimento">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    <div class="form-row d-flex justify-content-end">
                                        <div class="form-group col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                            <label>Importi a debito versati (G)</label>
                                        </div>
                                        <div class="form-group col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                            <label>Importi a credito compensati (H)</label>
                                        </div>
                                    </div>
                                    
                                    <div data-bind="foreach: Disposizione.Native.Imu.Sezione">
                                            <div class="form-row d-flex justify-content-end">
                                            <div class="form-group pr-0 col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                                <input class="form-control text-right" type="text" data-bind="formatImporto: Debito">
                                            </div>
                                            <div class="form-group col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                                <input class="form-control text-right" type="text" data-bind="formatImporto: Credito">
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-12 col-md-12 col-lg-8 col-xl-8">
                                    <div class="form-row pt-5 display-tablet">
                                        <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                                <label>Codice <br>ente/comune</label>
                                        </div>
                                        <div class="form-group p-0 col-sm-3 col-md-3 col-lg-4 col-xl-4">
                                            <div class="form-row">
                                                <div class="form-group pr-0 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center align-items-center">
                                                    <label>Ravv.</label>
                                                </div>
                                                <div class="form-group pr-0 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center ">
                                                    <label>Immob.<br> varianti</label>
                                                </div>
                                                <div class="form-group pr-0 col-sm-3 col-md-3 col-lg-3 col-xl-2 text-center">
                                                    <label>Acc.</label>
                                                </div>
                                                <div class="form-group col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">
                                                    <label>Saldo</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-1 col-md-1 col-lg-1 col-xl-1">
                                            <label>Num. immobili</label>
                                        </div>
                                        <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <label>Codice trib</label>
                                        </div>
                                        <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <label>Rateazione </label>
                                        </div>
                                        <div class="form-group col-sm-2 col-md-2 col-lg-1 col-xl-1">
                                            <label>Anno rif.</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                            <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                                <div class="input-group ">
                                                    <input class="form-control" maxlength="4" type="text" data-bind="textInput : CodiceEnteComune">
                                                    <div class="input-group-append">
                                                        <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaIMUCodEnteComune.bind($data,[$index()])">
                                                            <img src="./fe/img/icon/search.svg">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-3 col-md-3 col-lg-4 col-xl-4">
                                                <div class="form-row">
                                                    <div class="form-group p-0 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">
                                                        <div class="form-check  checkbox">
                                                            <input name="inlineRadioOptions" class="form-check-input" type="checkbox" data-bind="checked: Ravvedimento,attr: { &quot;id&quot;: &quot;Ravvedimento&quot;+$index()}" id="Ravvedimento0">
                                                            <label class="form-check-label" data-bind="attr:{ &quot;for&quot;: &quot;Ravvedimento&quot;+$index()}" for="Ravvedimento0"></label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group p-0 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center ">
                                                        <div class="form-check  checkbox">
                                                            <input name="inlineRadioOptions" class="form-check-input " type="checkbox" data-bind="checked: ImmobiliVariati,attr: { &quot;id&quot;: &quot;ImmobiliVariati&quot;+$index()}" id="ImmobiliVariati0">
                                                            <label class="form-check-label" data-bind="attr:{ &quot;for&quot;: &quot;ImmobiliVariati&quot;+$index()}" for="ImmobiliVariati0"></label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group p-0 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center ">
                                                        <div class="form-check  checkbox">
                                                            <input name="inlineRadioOptions" class="form-check-input" type="checkbox" data-bind="checked: Acconto,attr: { &quot;id&quot;: &quot;Acconto&quot;+$index()}" id="Acconto0">
                                                            <label class="form-check-label" data-bind="attr:{ &quot;for&quot;: &quot;Acconto&quot;+$index()}" for="Acconto0"></label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group  p-0 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">
                                                        <div class="form-check  checkbox">
                                                            <input name="inlineRadioOptions" class="form-check-input" type="checkbox" data-bind="checked: Saldo,attr: { &quot;id&quot;: &quot;Saldo&quot;+$index()}" id="Saldo0">
                                                            <label class="form-check-label" data-bind="attr:{ &quot;for&quot;: &quot;Saldo&quot;+$index()}" for="Saldo0"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group pr-0 col-sm-1 col-md-1 col-lg-1 col-xl-1">
                                                <input type="text" class="form-control" maxlength="3" data-bind="numeroImmobili: NumeroImmobili">
                                            </div>
                                            <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                                <div class="input-group">
                                                    <input class="form-control  " type="text" maxlength="4" data-bind="codiceTributo: CodiceTributo">
                                                    <div class="input-group-append">
                                                        <a class="input-group-text" tm-data-modal-abi="" data-bind="click:  $root.AssociaIMUCodTributo.bind($data,[$index()])">
                                                            <img src="./fe/img/icon/search.svg">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                                <input class="form-control " type="text" maxlength="4" data-bind="value : Rateazione">
                                            </div>
                                            <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-1 col-xl-1">
                                                <input class="form-control " type="text" maxlength="4" data-bind="value :AnnoRiferimento">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    <div data-bind="foreach: Disposizione.Native.Imu.Sezione">
                                            <div class="form-row d-flex justify-content-end display-tablet">
                                            <div class="form-group col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                                <label>Importi a debito versati (G)</label>
                                            </div>
                                            <div class="form-group col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                                <label>Importi a credito compensati (H)</label>
                                            </div>
                                        </div>
                                        <div class="form-row d-flex justify-content-end">
                                                <div class="form-group pr-0 col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                                    <input class="form-control text-right" type="text" data-bind="formatImporto: Debito">
                                                </div>
                                                <div class="form-group col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                                    <input class="form-control text-right" type="text" data-bind="formatImporto: Credito">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-12 col-md-12 col-lg-8 col-xl-8">
                                    <div class="form-row pt-5 display-tablet">
                                        <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <label>Codice <br>ente/comune</label>
                                        </div>
                                        <div class="form-group p-0 col-sm-3 col-md-3 col-lg-4 col-xl-4">
                                            <div class="form-row">
                                                <div class="form-group pr-0 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center align-items-center">
                                                    <label>Ravv.</label>
                                                </div>
                                                <div class="form-group pr-0 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center ">
                                                    <label>Immob.<br> varianti</label>
                                                </div>
                                                <div class="form-group pr-0 col-sm-3 col-md-3 col-lg-3 col-xl-2 text-center">
                                                    <label>Acc.</label>
                                                </div>
                                                <div class="form-group col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">
                                                    <label>Saldo</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-1 col-md-1 col-lg-1 col-xl-1">
                                            <label>Num. immobili</label>
                                        </div>
                                        <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <label>Codice trib</label>
                                        </div>
                                        <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <label>Rateazione </label>
                                        </div>
                                        <div class="form-group col-sm-2 col-md-2 col-lg-1 col-xl-1">
                                            <label>Anno rif.</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <div class="input-group ">
                                                <input class="form-control" maxlength="4" type="text" data-bind="textInput : CodiceEnteComune">
                                                <div class="input-group-append">
                                                    <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaIMUCodEnteComune.bind($data,[$index()])">
                                                        <img src="./fe/img/icon/search.svg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-3 col-md-3 col-lg-4 col-xl-4">
                                            <div class="form-row">
                                                <div class="form-group p-0 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">
                                                    <div class="form-check  checkbox">
                                                        <input name="inlineRadioOptions" class="form-check-input" type="checkbox" data-bind="checked: Ravvedimento,attr: { &quot;id&quot;: &quot;Ravvedimento&quot;+$index()}" id="Ravvedimento0">
                                                        <label class="form-check-label" data-bind="attr:{ &quot;for&quot;: &quot;Ravvedimento&quot;+$index()}" for="Ravvedimento0"></label>
                                                    </div>
                                                </div>
                                                <div class="form-group p-0 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center ">
                                                    <div class="form-check  checkbox">
                                                        <input name="inlineRadioOptions" class="form-check-input " type="checkbox" data-bind="checked: ImmobiliVariati,attr: { &quot;id&quot;: &quot;ImmobiliVariati&quot;+$index()}" id="ImmobiliVariati0">
                                                        <label class="form-check-label" data-bind="attr:{ &quot;for&quot;: &quot;ImmobiliVariati&quot;+$index()}" for="ImmobiliVariati0"></label>
                                                    </div>
                                                </div>
                                                <div class="form-group p-0 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center ">
                                                    <div class="form-check  checkbox">
                                                        <input name="inlineRadioOptions" class="form-check-input" type="checkbox" data-bind="checked: Acconto,attr: { &quot;id&quot;: &quot;Acconto&quot;+$index()}" id="Acconto0">
                                                        <label class="form-check-label" data-bind="attr:{ &quot;for&quot;: &quot;Acconto&quot;+$index()}" for="Acconto0"></label>
                                                    </div>
                                                </div>
                                                <div class="form-group  p-0 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">
                                                    <div class="form-check  checkbox">
                                                        <input name="inlineRadioOptions" class="form-check-input" type="checkbox" data-bind="checked: Saldo,attr: { &quot;id&quot;: &quot;Saldo&quot;+$index()}" id="Saldo0">
                                                        <label class="form-check-label" data-bind="attr:{ &quot;for&quot;: &quot;Saldo&quot;+$index()}" for="Saldo0"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group pr-0 col-sm-1 col-md-1 col-lg-1 col-xl-1">
                                            <input type="text" class="form-control" maxlength="3" data-bind="numeroImmobili: NumeroImmobili">
                                        </div>
                                        <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <div class="input-group">
                                                <input class="form-control  " type="text" maxlength="4" data-bind="codiceTributo: CodiceTributo">
                                                <div class="input-group-append">
                                                    <a class="input-group-text" tm-data-modal-abi="" data-bind="click:  $root.AssociaIMUCodTributo.bind($data,[$index()])">
                                                        <img src="./fe/img/icon/search.svg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <input class="form-control " type="text" maxlength="4" data-bind="value : Rateazione">
                                        </div>
                                        <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-1 col-xl-1">
                                            <input class="form-control " type="text" maxlength="4" data-bind="value :AnnoRiferimento">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    <div data-bind="foreach: Disposizione.Native.Imu.Sezione">
                                            <div class="form-row d-flex justify-content-end display-tablet">
                                        <div class="form-group col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                            <label>Importi a debito versati (G)</label>
                                        </div>
                                        <div class="form-group col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                            <label>Importi a credito compensati (H)</label>
                                        </div>
                                    </div>

                                    <div class="form-row d-flex justify-content-end">
                                            <div class="form-group pr-0 col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                                <input class="form-control text-right" type="text" data-bind="formatImporto: Debito">
                                            </div>
                                            <div class="form-group col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                                <input class="form-control text-right" type="text" data-bind="formatImporto: Credito">
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-12 col-md-12 col-lg-8 col-xl-8">
                                    <div class="form-row pt-5 display-tablet">
                                        <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <label>Codice <br>ente/comune</label>
                                        </div>
                                        <div class="form-group p-0 col-sm-3 col-md-3 col-lg-4 col-xl-4">
                                            <div class="form-row">
                                                <div class="form-group pr-0 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center align-items-center">
                                                    <label>Ravv.</label>
                                                </div>
                                                <div class="form-group pr-0 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center ">
                                                    <label>Immob.<br> varianti</label>
                                                </div>
                                                <div class="form-group pr-0 col-sm-3 col-md-3 col-lg-3 col-xl-2 text-center">
                                                    <label>Acc.</label>
                                                </div>
                                                <div class="form-group col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">
                                                    <label>Saldo</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-1 col-md-1 col-lg-1 col-xl-1">
                                            <label>Num. immobili</label>
                                        </div>
                                        <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <label>Codice trib</label>
                                        </div>
                                        <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <label>Rateazione </label>
                                        </div>
                                        <div class="form-group col-sm-2 col-md-2 col-lg-1 col-xl-1">
                                            <label>Anno rif.</label>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <div class="input-group ">
                                                <input class="form-control" maxlength="4" type="text" data-bind="textInput : CodiceEnteComune">
                                                <div class="input-group-append">
                                                    <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaIMUCodEnteComune.bind($data,[$index()])">
                                                        <img src="./fe/img/icon/search.svg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-3 col-md-3 col-lg-4 col-xl-4">
                                            <div class="form-row">
                                                <div class="form-group p-0 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">
                                                    <div class="form-check  checkbox">
                                                        <input name="inlineRadioOptions" class="form-check-input" type="checkbox" data-bind="checked: Ravvedimento,attr: { &quot;id&quot;: &quot;Ravvedimento&quot;+$index()}" id="Ravvedimento0">
                                                        <label class="form-check-label" data-bind="attr:{ &quot;for&quot;: &quot;Ravvedimento&quot;+$index()}" for="Ravvedimento0"></label>
                                                    </div>
                                                </div>
                                                <div class="form-group p-0 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center ">
                                                    <div class="form-check  checkbox">
                                                        <input name="inlineRadioOptions" class="form-check-input " type="checkbox" data-bind="checked: ImmobiliVariati,attr: { &quot;id&quot;: &quot;ImmobiliVariati&quot;+$index()}" id="ImmobiliVariati0">
                                                        <label class="form-check-label" data-bind="attr:{ &quot;for&quot;: &quot;ImmobiliVariati&quot;+$index()}" for="ImmobiliVariati0"></label>
                                                    </div>
                                                </div>
                                                <div class="form-group p-0 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center ">
                                                    <div class="form-check  checkbox">
                                                        <input name="inlineRadioOptions" class="form-check-input" type="checkbox" data-bind="checked: Acconto,attr: { &quot;id&quot;: &quot;Acconto&quot;+$index()}" id="Acconto0">
                                                        <label class="form-check-label" data-bind="attr:{ &quot;for&quot;: &quot;Acconto&quot;+$index()}" for="Acconto0"></label>
                                                    </div>
                                                </div>
                                                <div class="form-group  p-0 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">
                                                    <div class="form-check  checkbox">
                                                        <input name="inlineRadioOptions" class="form-check-input" type="checkbox" data-bind="checked: Saldo,attr: { &quot;id&quot;: &quot;Saldo&quot;+$index()}" id="Saldo0">
                                                        <label class="form-check-label" data-bind="attr:{ &quot;for&quot;: &quot;Saldo&quot;+$index()}" for="Saldo0"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group pr-0 col-sm-1 col-md-1 col-lg-1 col-xl-1">
                                            <input type="text" class="form-control" maxlength="3" data-bind="numeroImmobili: NumeroImmobili">
                                        </div>
                                        <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <div class="input-group">
                                                <input class="form-control  " type="text" maxlength="4" data-bind="codiceTributo: CodiceTributo">
                                                <div class="input-group-append">
                                                    <a class="input-group-text" tm-data-modal-abi="" data-bind="click:  $root.AssociaIMUCodTributo.bind($data,[$index()])">
                                                        <img src="./fe/img/icon/search.svg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                            <input class="form-control " type="text" maxlength="4" data-bind="value : Rateazione">
                                        </div>
                                        <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-1 col-xl-1">
                                            <input class="form-control " type="text" maxlength="4" data-bind="value :AnnoRiferimento">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    
                                    
                                    <div data-bind="foreach: Disposizione.Native.Imu.Sezione">
                                            <div class="form-row d-flex justify-content-end display-tablet">
                                        <div class="form-group col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                            <label>Importi a debito versati (G)</label>
                                        </div>
                                        <div class="form-group col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                            <label>Importi a credito compensati (H)</label>
                                        </div>
                                    </div>

                                    <div class="form-row d-flex justify-content-end">
                                            <div class="form-group pr-0 col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                                <input class="form-control text-right" type="text" data-bind="formatImporto: Debito">
                                            </div>
                                            <div class="form-group col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                                <input class="form-control text-right" type="text" data-bind="formatImporto: Credito">
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row pt-5 pr-0 d-flex justify-content-end align-items-center">
                            <div class="form-group col-sm-3 col-md-3 col-lg-2 col-xl-2">
                                <label>Detrazione</label>
                            </div>
                            <div class="form-group pr-0 col-sm-3 col-md-3 col-lg-2 col-xl-2">
                                <label>Identificativo operazione</label>
                            </div>
                            <div class="form-group pr-0 col-sm-3 col-md-3 col-lg-2 col-xl-2 text-center">
                                <label><strong>TOTALE G</strong></label>
                            </div>
                            <div class="form-group col-sm-3 col-md-3 col-lg-2 col-xl-2 text-center">
                                <label><strong>TOTALE H</strong></label>
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-end align-items-center">
                            <div class="form-group pr-0 col-sm-3 col-md-3 col-lg-2 col-xl-2">
                                <input type="text" class="form-control" maxlength="15" data-bind="formatImporto: Disposizione.Native.Imu.Detrazione">
                            </div>
                            <div class="form-group pr-0 col-sm-3 col-md-3 col-lg-2 col-xl-2">
                                <input type="text" class="form-control" maxlength="18" data-bind="textInput: Disposizione.Native.Imu.IdentificativoOperazione">
                            </div>
                            <div class="form-group pr-0 col-sm-3 col-md-3 col-lg-2 col-xl-2">
                                <input type="text" class="form-control text-right" data-bind="formatImporto: Disposizione.Native.Imu.Totali.Debito" disabled="">
                            </div>
                            <div class="form-group col-sm-3 col-md-3 col-lg-2 col-xl-2">
                                <input type="text" class="form-control text-right" data-bind="formatImporto: Disposizione.Native.Imu.Totali.Credito" disabled="">
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-end align-items-center">
                                <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                </div>
                                <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2 text-right">
                                    <label><strong>SALDO [G-H] +/-</strong></label>
                                </div>
                                <div class="form-group pr-0 col-sm-1 col-md-1 col-lg-1 col-xl-1">
                                    <input type="text" class="form-control  text-right" data-bind="textInput:  Disposizione.Native.Imu.Totali.Segno" disabled="">
                                </div>
                                <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                    <input type="text" class="form-control text-right" data-bind="tm-importoAbsText:  Disposizione.Native.Imu.Totali.Saldo" disabled="">
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



<!--SEZIONE ALTRI ENTI -->
<!-- togliere la classe border-top al div card-body e modificare le classi delle colonne per visualizzare anche a 680px-->
<!-- modificare il titolo della sezione da h2 a h4-->
<!-- modificare larghezze e dispozione colonne per visualizzazione tu tablet-->
    <div class="accordion bordered-style">
        <div class="card collapser mb-3">
            <div class="card-header d-flex justify-content-between align-items-center hide collapsed" data-bind="click: onOpenAltriEnti" tm-altrienti-accordion-header="" data-toggle="collapse">
                <h4 class="mb-0">Sezione Altri Enti Previdenziali ed Assicurativi</h4>
                <div class="d-flex justify-content-end">
                    <p data-bind="visible: (Additional.IsSezAltriEntiPopulated() || Additional.IsSezInailPopulated())" class="mr-3 mb-0" style="display: none;">
                        <img src="/youbiz.4.ux/StaticContents/ybw/00000/it-IT/skins/skin1/img/icon/checkmark.svg">
                        Sezione compilata
                    </p>
                    <span class="card-header-icon" data-bind="click: onOpenAltriEnti"></span>
                </div>
            </div>
            <div class="collapse" aria-labelledby="headingOne" data-parent="#accordion" tm-altrienti-accordion-body="" style="">
                <div class="card-body">
                <form class="form-grid" novalidate="">
                        <div class="form-row">
                            <div class="form-group pr-0 col-sm-4 col-md-4 col-lg-1 col-xl-1">
                                <label>Ente <br> &nbsp;</label>               
                                    <div class="input-group ">
                                    <input class="form-control" disabled="" data-bind="value:'INAIL'" type="text">
                            </div>
                             </div>
                            <div class="form-group col-sm-12 col-md-12 col-lg-11 col-xl-11" data-bind="foreach: Disposizione.Native.AltriEnti.Sezione">
                                <div class="form-row">
                                    <div class="form-group min-w-f col-sm-1 col-md-1 col-lg-2 col-xl-2">
                                        <label>Codice sede</label>
                                    </div>
                                    <div class="form-group min-w-f col-sm-1 col-md-1 col-lg-2 col-xl-2">
                                        <label>Codice ditta</label>
                                    </div>
                                    <div class="form-group col-sm-2 col-md-2 col-lg-1 col-xl-1">
                                        <label>c.c</label>
                                    </div>
                                    <div class="form-group max-w-f col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                        <label>N. riferimento</label>
                                    </div>
                                    <div class="form-group max-w-f pr-0 col-sm-2 col-md-2 col-lg-1 col-xl-1">
                                        <label>Causale</label>
                                    </div>
                                    <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                        <label>Importi a debito versati (I)</label>
                                    </div>
                                    <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                        <label>Importi a credito compensati (L)</label>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group min-w-f pr-0 col-sm-1 col-md-1 col-lg-2 col-xl-2">
                                        <div class="input-group ">
                                            <input class="form-control " type="text" maxlength="5" data-bind="codiceSede: CodiceSede">
                                            <div class="input-group-append">
                                                <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaInailSede.bind($data,[$index()])">
                                                    <img src="./fe/img/icon/search.svg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group min-w-f  pr-0 col-sm-1 col-md-1 col-lg-2 col-xl-2">
                                       <input class="form-control" type="text" maxlength="8" data-bind="value: CodiceDitta"> 
                                    </div>
                                    <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-1 col-xl-1">
                                        <input type="text" class="form-control" maxlength="2" data-bind="value: CodiceControllo">
                                    </div>
                                    <div class="form-group max-w-f pr-0 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                        <input class="form-control" type="text" maxlength="6" data-bind="value: NumeroRiferimento">
                                    </div>
                                    <div class="form-group max-w-f pr-0 col-sm-2 col-md-2 col-lg-1 col-xl-1">
                                        <input class="form-control " type="text" maxlength="1" data-bind="value: Causale">
                                    </div>
                                    <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                        <input class="form-control text-right" type="text" data-bind="formatImporto: Debito">
                                    </div>
                                    <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                        <input class="form-control text-right" type="text" data-bind="formatImporto: Credito">
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>

                        
                        <div class="form-row">
                            <div class="form-group col-sm-1">
                            </div>
                            <div class="form-group col-sm-11">
                                <div class="form-row d-flex justify-content-end align-items-center">
                                    <div class="form-group col-sm-2 text-center">
                                        <label><strong>TOTALE I</strong></label>
                                    </div>
                                    <div class="form-group col-sm-2 text-center">
                                        <label><strong>TOTALE L</strong></label>
                                    </div>
                                </div>

                                <div class="form-row d-flex justify-content-end align-items-center">
                                    <div class="form-group pr-0 col-sm-2">
                                        <input type="text" class="form-control text-right" data-bind="formatImporto: Disposizione.Native.Inail.Totali.Debito" disabled="">
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <input type="text" class="form-control text-right" data-bind="formatImporto: Disposizione.Native.Inail.Totali.Credito" disabled="">
                                    </div>
                                </div>

                                <div class="form-row d-flex justify-content-end align-items-center">
                                    <div class="form-group col-sm-3 text-right">
                                        <label><strong>SALDO [I-L] +/-</strong></label>
                                    </div>
                                    <div class="form-group  pr-0 col-sm-1">
                                        <input type="text" class="form-control  text-right" data-bind="textInput: Disposizione.Native.Inail.Totali.Segno" disabled="">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <input type="text" class="form-control text-right" data-bind="tm-importoAbsText: Disposizione.Native.Inail.Totali.Saldo" disabled="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <hr class="col-sm-11">
                    </div>
                    <form class="form-grid" novalidate="">
                        <div class="form-row">
                            <div class="form-group pr-0 col-sm-4 col-md-4 col-lg-1 col-xl-1">
                                <label>Codice <br> ente</label>               
                                    <div class="input-group ">
                                        <input class="form-control " type="text" maxlength="4" data-bind="textInput : Disposizione.Native.AltriEnti.CodiceEnte">
                                        <div class="input-group-append">
                                            <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaCodiceEnte">
                                                <img src="./fe/img/icon/search.svg">
                                            </a>
                                        </div>
                                    </div>
                             </div>
                            <div class="form-group col-sm-12 col-md-12 col-lg-11 col-xl-11" data-bind="foreach: Disposizione.Native.AltriEnti.Sezione">
                                <div class="form-row">
                                    <div class="form-group min-w-f col-sm-1 col-md-1 col-lg-2 col-xl-2">
                                        <label>Codice sede</label>
                                    </div>
                                    <div class="form-group min-w-f col-sm-1 col-md-1 col-lg-2 col-xl-2">
                                        <label>Causale contributo</label>
                                    </div>
                                    <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                        <label>Codice posizione</label>
                                    </div>
                                    <div class="form-group max-w-f col-sm-2 col-md-2 col-lg-1 col-xl-1">
                                        <label>Da mm/aaaa</label>
                                    </div>
                                    <div class="form-group max-w-f pr-0 col-sm-2 col-md-2 col-lg-1 col-xl-1">
                                        <label>A mm/aaaa</label>
                                    </div>
                                    <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                        <label>Importi a debito versati (M)</label>
                                    </div>
                                    <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                        <label>Importi a credito compensati (N)</label>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group min-w-f pr-0 col-sm-1 col-md-1 col-lg-2 col-xl-2">
                                        <div class="input-group ">
                                            <input class="form-control " type="text" maxlength="5" data-bind="textInput : CodiceSede">
                                            <div class="input-group-append">
                                                <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaCodiceSede.bind($data,[$index()])">
                                                    <img src="./fe/img/icon/search.svg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group min-w-f  pr-0 col-sm-1 col-md-1 col-lg-2 col-xl-2">
                                        <div class="input-group ">
                                            <input class="form-control " type="text" maxlength="4" data-bind="textInput : Causale">
                                            <div class="input-group-append">
                                                <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaCodiceContributo.bind($data,[$index()])">
                                                    <img src="./fe/img/icon/search.svg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                        <input class="form-control" type="text" maxlength="9" data-bind="value : CodicePosizione">
                                    </div>
                                    <div class="form-group max-w-f pr-0 col-sm-2 col-md-2 col-lg-1 col-xl-1">
                                        <input class="form-control " type="text" maxlength="7" data-bind="value : PeriodoInizio">
                                    </div>
                                    <div class="form-group max-w-f pr-0 col-sm-2 col-md-2 col-lg-1 col-xl-1">
                                        <input class="form-control " type="text" maxlength="7" data-bind="value : PeriodoFine">
                                    </div>
                                    <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                        <input class="form-control text-right" type="text" data-bind="formatImporto: Debito">
                                    </div>
                                    <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                        <input class="form-control text-right" type="text" data-bind="formatImporto: Credito">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group min-w-f pr-0 col-sm-1 col-md-1 col-lg-2 col-xl-2">
                                        <div class="input-group ">
                                            <input class="form-control " type="text" maxlength="5" data-bind="textInput : CodiceSede">
                                            <div class="input-group-append">
                                                <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaCodiceSede.bind($data,[$index()])">
                                                    <img src="./fe/img/icon/search.svg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group min-w-f  pr-0 col-sm-1 col-md-1 col-lg-2 col-xl-2">
                                        <div class="input-group ">
                                            <input class="form-control " type="text" maxlength="4" data-bind="textInput : Causale">
                                            <div class="input-group-append">
                                                <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaCodiceContributo.bind($data,[$index()])">
                                                    <img src="./fe/img/icon/search.svg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                        <input class="form-control" type="text" maxlength="9" data-bind="value : CodicePosizione">
                                    </div>
                                    <div class="form-group max-w-f pr-0 col-sm-2 col-md-2 col-lg-1 col-xl-1">
                                        <input class="form-control " type="text" maxlength="7" data-bind="value : PeriodoInizio">
                                    </div>
                                    <div class="form-group max-w-f pr-0 col-sm-2 col-md-2 col-lg-1 col-xl-1">
                                        <input class="form-control " type="text" maxlength="7" data-bind="value : PeriodoFine">
                                    </div>
                                    <div class="form-group pr-0 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                        <input class="form-control text-right" type="text" data-bind="formatImporto: Debito">
                                    </div>
                                    <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                        <input class="form-control text-right" type="text" data-bind="formatImporto: Credito">
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group pr-0 col-sm-4 col-md-4 col-lg-1 col-xl-1">
                            </div>
                            <div class="form-group col-sm-12 col-md-12 col-lg-11 col-xl-11">
                                <div class="form-row d-flex justify-content-end align-items-center">
                                    <div class="form-group col-sm-2 text-center">
                                        <label><strong>TOTALE M</strong></label>
                                    </div>
                                    <div class="form-group col-sm-2 text-center">
                                        <label><strong>TOTALE N</strong></label>
                                    </div>
                                </div>
                                <div class="form-row d-flex justify-content-end align-items-center">
                                    <div class="form-group pr-0 col-sm-2">
                                        <input type="text" class="form-control text-right" data-bind="formatImporto: Disposizione.Native.AltriEnti.Totali.Debito" disabled="">
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <input type="text" class="form-control text-right" data-bind="formatImporto: Disposizione.Native.AltriEnti.Totali.Credito" disabled="">
                                    </div>
                                </div>
                                <div class="form-row d-flex justify-content-end align-items-center">
                                    <div class="form-group col-sm-3 text-right">
                                        <label><strong>SALDO [M-N] +/-</strong></label>
                                    </div>
                                    <div class="form-group pr-0 col-sm-1">
                                        <input type="text" class="form-control text-right" data-bind="textInput : Disposizione.Native.AltriEnti.Totali.Segno" disabled="">
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <input type="text" class="form-control text-right" data-bind="tm-importoAbsText: Disposizione.Native.AltriEnti.Totali.Saldo" disabled="">
                                    </div>
                                </div>
                            </div>
                        </div>     
                    </form>

                </div>
            </div>
        </div>
    </div>

 <!--SEZIONE ACCISE -->   
    <div class="accordion bordered-style">
        <div class="card collapser mb-3">
            <div class="card-header d-flex justify-content-between align-items-center hide collapsed" data-bind="click: onOpenAccise" tm-accise-accordion-header="" data-toggle="collapse">
                <h2 class="mb-0">Sezione Accise/Monopoli ed Altri Versamenti Non Ammessi in Compensazione</h2>
                <div class="d-flex justify-content-end">
                    <p data-bind="visible: Additional.IsSezAccisePopulated()" class="mr-3 mb-0" style="display: none;">
                        <img src="/youbiz.4.ux/StaticContents/ybw/00000/it-IT/skins/skin1/img/icon/checkmark.svg">
                        Sezione compilata
                    </p>
                    <span class="card-header-icon"></span>
                </div>
            </div>
            <div class="collapse" aria-labelledby="headingOne" data-parent="#accordion" tm-accise-accordion-body="" style="">
                <div class="card-body border-top">
                <form class="form-grid" novalidate="">
                        <!-- HEADER ROW  -->
                        <div class="form-row mt-2">

                            <div class="form-group col-sm-1">
                                <label>Ente</label>
                            </div>
                            <div class="form-group col-sm-1">
                                <label>Prov.</label>
                            </div>
                            <div class="form-group col-sm-2">
                                <label>Codice</label>
                            </div>
                            <div class="form-group col-sm-3 text-center ">
                                <label>Codice identificativo</label>
                            </div>
                            <div class="form-group col-sm-1">
                                <label>Rateazione</label>
                            </div>
                            <div class="form-group col-sm-2 text-center">
                                <label>Mese/anno di riferimento</label>
                            </div>
                            <div class="form-group col-sm-2">
                                <label>Importi a debito versati (O)</label>
                            </div>

                        </div>

                        <div data-bind="foreach: Disposizione.Native.Accise.Sezione">
                            <div class="form-row">
                                <div class="form-group pr-0 col-sm-1">
                                    <input class="form-control " type="text" maxlength="2" data-bind="textInput: CodiceEnte">
                                </div>
                                <div class="form-group pr-0 col-sm-1">
                                    <div class="input-group ">
                                        <input class="form-control " type="text" maxlength="2" data-bind="codiceProvinciaF24: CodiceProvincia">
                                        <div class="input-group-append">
                                            <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaAcciseCodProvincia.bind($data,[$index()])">
                                                <img src="./fe/img/icon/search.svg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group pr-0 col-sm-2">
                                    <div class="input-group ">
                                        <input class="form-control " type="text" maxlength="4" data-bind="codiceTributo: CodiceTributo">
                                        <div class="input-group-append">
                                            <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaAcciseCodTributo.bind($data,[$index()])" )="">
                                                <img src="./fe/img/icon/search.svg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group pr-0 col-sm-3">
                                    <input class="form-control " type="text" maxlength="14" data-bind="textInput: CodiceIdentificativo">
                                </div>
                                <div class="form-group pr-0 col-sm-1">
                                    <input class="form-control " type="text" maxlength="4" data-bind="value: Rateazione">
                                </div>
                                <div class="form-group col-sm-2">
                                    <div class="form-row">
                                        <div class="form-group pr-0 col-sm-6">
                                            <input class="form-control " type="text" maxlength="2" data-bind="value: RiferimentoMese">
                                        </div>
                                        <div class="form-group pr-0 col-sm-6">
                                            <input class="form-control " type="text" maxlength="4" data-bind="value: RiferimentoAnno">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-2">
                                    <input class="form-control text-right" type="text" data-bind="formatImporto: Debito">
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group pr-0 col-sm-1">
                                    <input class="form-control " type="text" maxlength="2" data-bind="textInput: CodiceEnte">
                                </div>
                                <div class="form-group pr-0 col-sm-1">
                                    <div class="input-group ">
                                        <input class="form-control " type="text" maxlength="2" data-bind="codiceProvinciaF24: CodiceProvincia">
                                        <div class="input-group-append">
                                            <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaAcciseCodProvincia.bind($data,[$index()])">
                                                <img src="./fe/img/icon/search.svg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group pr-0 col-sm-2">
                                    <div class="input-group ">
                                        <input class="form-control " type="text" maxlength="4" data-bind="codiceTributo: CodiceTributo">
                                        <div class="input-group-append">
                                            <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaAcciseCodTributo.bind($data,[$index()])" )="">
                                                <img src="./fe/img/icon/search.svg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group pr-0 col-sm-3">
                                    <input class="form-control " type="text" maxlength="14" data-bind="textInput: CodiceIdentificativo">
                                </div>
                                <div class="form-group pr-0 col-sm-1">
                                    <input class="form-control " type="text" maxlength="4" data-bind="value: Rateazione">
                                </div>
                                <div class="form-group col-sm-2">
                                    <div class="form-row">
                                        <div class="form-group pr-0 col-sm-6">
                                            <input class="form-control " type="text" maxlength="2" data-bind="value: RiferimentoMese">
                                        </div>
                                        <div class="form-group pr-0 col-sm-6">
                                            <input class="form-control " type="text" maxlength="4" data-bind="value: RiferimentoAnno">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-2">
                                    <input class="form-control text-right" type="text" data-bind="formatImporto: Debito">
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group pr-0 col-sm-1">
                                    <input class="form-control " type="text" maxlength="2" data-bind="textInput: CodiceEnte">
                                </div>
                                <div class="form-group pr-0 col-sm-1">
                                    <div class="input-group ">
                                        <input class="form-control " type="text" maxlength="2" data-bind="codiceProvinciaF24: CodiceProvincia">
                                        <div class="input-group-append">
                                            <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaAcciseCodProvincia.bind($data,[$index()])">
                                                <img src="./fe/img/icon/search.svg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group pr-0 col-sm-2">
                                    <div class="input-group ">
                                        <input class="form-control " type="text" maxlength="4" data-bind="codiceTributo: CodiceTributo">
                                        <div class="input-group-append">
                                            <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaAcciseCodTributo.bind($data,[$index()])" )="">
                                                <img src="./fe/img/icon/search.svg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group pr-0 col-sm-3">
                                    <input class="form-control " type="text" maxlength="14" data-bind="textInput: CodiceIdentificativo">
                                </div>
                                <div class="form-group pr-0 col-sm-1">
                                    <input class="form-control " type="text" maxlength="4" data-bind="value: Rateazione">
                                </div>
                                <div class="form-group col-sm-2">
                                    <div class="form-row">
                                        <div class="form-group pr-0 col-sm-6">
                                            <input class="form-control " type="text" maxlength="2" data-bind="value: RiferimentoMese">
                                        </div>
                                        <div class="form-group pr-0 col-sm-6">
                                            <input class="form-control " type="text" maxlength="4" data-bind="value: RiferimentoAnno">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-2">
                                    <input class="form-control text-right" type="text" data-bind="formatImporto: Debito">
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group pr-0 col-sm-1">
                                    <input class="form-control " type="text" maxlength="2" data-bind="textInput: CodiceEnte">
                                </div>
                                <div class="form-group pr-0 col-sm-1">
                                    <div class="input-group ">
                                        <input class="form-control " type="text" maxlength="2" data-bind="codiceProvinciaF24: CodiceProvincia">
                                        <div class="input-group-append">
                                            <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaAcciseCodProvincia.bind($data,[$index()])">
                                                <img src="./fe/img/icon/search.svg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group pr-0 col-sm-2">
                                    <div class="input-group ">
                                        <input class="form-control " type="text" maxlength="4" data-bind="codiceTributo: CodiceTributo">
                                        <div class="input-group-append">
                                            <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaAcciseCodTributo.bind($data,[$index()])" )="">
                                                <img src="./fe/img/icon/search.svg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group pr-0 col-sm-3">
                                    <input class="form-control " type="text" maxlength="14" data-bind="textInput: CodiceIdentificativo">
                                </div>
                                <div class="form-group pr-0 col-sm-1">
                                    <input class="form-control " type="text" maxlength="4" data-bind="value: Rateazione">
                                </div>
                                <div class="form-group col-sm-2">
                                    <div class="form-row">
                                        <div class="form-group pr-0 col-sm-6">
                                            <input class="form-control " type="text" maxlength="2" data-bind="value: RiferimentoMese">
                                        </div>
                                        <div class="form-group pr-0 col-sm-6">
                                            <input class="form-control " type="text" maxlength="4" data-bind="value: RiferimentoAnno">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-2">
                                    <input class="form-control text-right" type="text" data-bind="formatImporto: Debito">
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="form-group pr-0 col-sm-1">
                                    <input class="form-control " type="text" maxlength="2" data-bind="textInput: CodiceEnte">
                                </div>
                                <div class="form-group pr-0 col-sm-1">
                                    <div class="input-group ">
                                        <input class="form-control " type="text" maxlength="2" data-bind="codiceProvinciaF24: CodiceProvincia">
                                        <div class="input-group-append">
                                            <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaAcciseCodProvincia.bind($data,[$index()])">
                                                <img src="./fe/img/icon/search.svg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group pr-0 col-sm-2">
                                    <div class="input-group ">
                                        <input class="form-control " type="text" maxlength="4" data-bind="codiceTributo: CodiceTributo">
                                        <div class="input-group-append">
                                            <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaAcciseCodTributo.bind($data,[$index()])" )="">
                                                <img src="./fe/img/icon/search.svg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group pr-0 col-sm-3">
                                    <input class="form-control " type="text" maxlength="14" data-bind="textInput: CodiceIdentificativo">
                                </div>
                                <div class="form-group pr-0 col-sm-1">
                                    <input class="form-control " type="text" maxlength="4" data-bind="value: Rateazione">
                                </div>
                                <div class="form-group col-sm-2">
                                    <div class="form-row">
                                        <div class="form-group pr-0 col-sm-6">
                                            <input class="form-control " type="text" maxlength="2" data-bind="value: RiferimentoMese">
                                        </div>
                                        <div class="form-group pr-0 col-sm-6">
                                            <input class="form-control " type="text" maxlength="4" data-bind="value: RiferimentoAnno">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-2">
                                    <input class="form-control text-right" type="text" data-bind="formatImporto: Debito">
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group pr-0 col-sm-1">
                                    <input class="form-control " type="text" maxlength="2" data-bind="textInput: CodiceEnte">
                                </div>
                                <div class="form-group pr-0 col-sm-1">
                                    <div class="input-group ">
                                        <input class="form-control " type="text" maxlength="2" data-bind="codiceProvinciaF24: CodiceProvincia">
                                        <div class="input-group-append">
                                            <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaAcciseCodProvincia.bind($data,[$index()])">
                                                <img src="./fe/img/icon/search.svg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group pr-0 col-sm-2">
                                    <div class="input-group ">
                                        <input class="form-control " type="text" maxlength="4" data-bind="codiceTributo: CodiceTributo">
                                        <div class="input-group-append">
                                            <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaAcciseCodTributo.bind($data,[$index()])" )="">
                                                <img src="./fe/img/icon/search.svg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group pr-0 col-sm-3">
                                    <input class="form-control " type="text" maxlength="14" data-bind="textInput: CodiceIdentificativo">
                                </div>
                                <div class="form-group pr-0 col-sm-1">
                                    <input class="form-control " type="text" maxlength="4" data-bind="value: Rateazione">
                                </div>
                                <div class="form-group col-sm-2">
                                    <div class="form-row">
                                        <div class="form-group pr-0 col-sm-6">
                                            <input class="form-control " type="text" maxlength="2" data-bind="value: RiferimentoMese">
                                        </div>
                                        <div class="form-group pr-0 col-sm-6">
                                            <input class="form-control " type="text" maxlength="4" data-bind="value: RiferimentoAnno">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-2">
                                    <input class="form-control text-right" type="text" data-bind="formatImporto: Debito">
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group pr-0 col-sm-1">
                                    <input class="form-control " type="text" maxlength="2" data-bind="textInput: CodiceEnte">
                                </div>
                                <div class="form-group pr-0 col-sm-1">
                                    <div class="input-group ">
                                        <input class="form-control " type="text" maxlength="2" data-bind="codiceProvinciaF24: CodiceProvincia">
                                        <div class="input-group-append">
                                            <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaAcciseCodProvincia.bind($data,[$index()])">
                                                <img src="./fe/img/icon/search.svg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group pr-0 col-sm-2">
                                    <div class="input-group ">
                                        <input class="form-control " type="text" maxlength="4" data-bind="codiceTributo: CodiceTributo">
                                        <div class="input-group-append">
                                            <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaAcciseCodTributo.bind($data,[$index()])" )="">
                                                <img src="./fe/img/icon/search.svg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group pr-0 col-sm-3">
                                    <input class="form-control " type="text" maxlength="14" data-bind="textInput: CodiceIdentificativo">
                                </div>
                                <div class="form-group pr-0 col-sm-1">
                                    <input class="form-control " type="text" maxlength="4" data-bind="value: Rateazione">
                                </div>
                                <div class="form-group col-sm-2">
                                    <div class="form-row">
                                        <div class="form-group pr-0 col-sm-6">
                                            <input class="form-control " type="text" maxlength="2" data-bind="value: RiferimentoMese">
                                        </div>
                                        <div class="form-group pr-0 col-sm-6">
                                            <input class="form-control " type="text" maxlength="4" data-bind="value: RiferimentoAnno">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-2">
                                    <input class="form-control text-right" type="text" data-bind="formatImporto: Debito">
                                </div>

                            </div>
     
                        </div>

                        <div class="form-row d-flex justify-content-start align-items-center">
                            <div class="form-group pr-0 col-sm-3">
                                <label>Ufficio</label>
                                <div class="input-group ">
                                    <input type="text" class="form-control" maxlength="3" data-bind="textInput: Disposizione.Native.Accise.CodiceUfficio">
                                    <div class="input-group-append">
                                        <a class="input-group-text" tm-data-modal-abi="" data-bind="click: $root.AssociaAcciseUfficio" )="">
                                            <img src="./fe/img/icon/search.svg">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-sm-3">
                                <label>Codice atto</label>
                                <input type="text" class="form-control" maxlength="11" data-bind="textInput: Disposizione.Native.Accise.CodiceAtto">
                            </div>
                            <div class="form-group col-sm-2 text-right">
                            </div>
                            <div class="form-group col-sm-2 text-right mt-2">
                                <label><strong>TOTALE O</strong></label>
                            </div>
                            <div class="form-group col-sm-2 mt-3">
                                <input type="text" class="form-control text-right" data-bind="tm-importoAbsText: Disposizione.Native.Accise.Totali.Debito" disabled="">
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-start align-items-center">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<form class="form-grid" novalidate="">
        <div class="form-row d-flex justify-content-start align-items-center">

            <div class="form-group col-6 col-md-4">
                <div class="form-check mt-4 checkbox">
                    <input name="inlineRadioOptions" class="form-check-input text-right" id="check1" type="checkbox" data-bind="checked: Disposizione.Native.Saldo.FlagFirmatario">
                    <label class="form-check-label" for="check1">Barrare in caso di versamento da parte di erede, genitore, tutore o curatore fallimentare</label>
                </div>
            </div>
            <div class="form-group pr-0 col-6 col-md-2">
                <label>(Data pag.) *</label>
                <div class="input-group datepicker">
                    <input tm-date="from" filter-type="datetime" tm-date-pag="" range-start="" type="text" class="form-control hasDatepicker" tm-type="datepicker" data-datepicker="" autocomplete="off" data-bind="tm-dateText2: Disposizione.Native.Saldo.DataPagamento" id="dp1603797877668"><button type="button" class="ui-datepicker-trigger"></button>
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <img src="./fe/img/icon/calendario.svg">
                        </span>
                    </div>
                </div>
            </div>
            <div class="form-group col-12 col-md-6">
                <label><strong>Saldo finale + (EUR)</strong></label>
                <input type="text" class="form-control text-right" data-bind="formatImporto: Disposizione.Native.Saldo.SaldoDelega" disabled="">
            </div>
        </div>
    </form>




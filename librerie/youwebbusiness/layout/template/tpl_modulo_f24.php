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

    <div tm-selector-f24="">
    <!--SEZIONE SELETTORE -->
           <p style="border:2px solid orange;margin-top:10px;text-align-center; padding:30px;font-weight:bold"> 
           SEZIONE SELETTORE AS IS SVILUPPO.
           Per una corretta visualizzazione a 680px (limite tablet ) occorrre togliere la classe "no-margin-section" sul div class="no-margin-section d-block d-lg-none".

           </p>
    <!--SEZIONE SELETTORE -->
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
                <div class="form-group col-sm-6 col-md-6 col-lg-2 col-xl-3">
                    <label>Codice fiscale *</label>
                    <div class="input-group ">
                        <input type="text" class="form-control" maxlength="16" data-bind="toUpperCase: Disposizione.Native.Contribuente.Anagrafica.CodiceFiscale,enable: Additional.ActiveArea()==='libera'" disabled="">
                        <div class="input-group-append" data-bind="visible: Additional.ActiveArea() === 'libera'" style="display: none;">
                            <a class="input-group-text" tm-data-modal-abi="" data-bind="click: openModalContribuente">
                                <img src="/youbiz.4.ux/StaticContents/ybw/00000/it-IT/skins/skin1/img/icon/search.svg">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="form-group col-sm-6 col-md-6 col-lg-5 col-xl-4">
                    <label>Cognome, denominazione, o ragione sociale *</label>
                    <input class="form-control" id="denominazioneContribuente" type="text" data-bind="value: Disposizione.Native.Contribuente.Anagrafica.CognomeDenRagSoc,enable: Additional.IsContribuenteEditable()" disabled="">
                </div>

                <div class="form-group col-sm-6 col-md-6 col-lg-2 col-xl-2">
                    <label>Nome</label>
                    <input type="text" class="form-control" maxlength="16" data-bind="value: Disposizione.Native.Contribuente.Anagrafica.Nome,enable: Additional.IsContribuenteEditable()" disabled="">
                </div>

                <div class="form-group my-auto col-sm-6 col-md-6 col-lg-3 col-xl-3 pt-4">
                    <div class="form-check mb-0 checkbox">
                        <input class="form-check-input" type="checkbox" data-bind="checked: Disposizione.Native.Contribuente.AnnoImpostaNoAnnoSolare,enable: Additional.IsContribuenteEditable()" disabled="">
                        <label class="form-check-label">Barrare in caso di anno di imposta non coincidente con anno solare</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
            
                <div class="form-group col-sm-6 col-md-3 col-lg-2 col-xl-2">
                    <label>Data di nascita</label>
                    <div class="input-group datepicker">
                        <input tm-date="from" filter-type="datetime" range-start="" type="text" class="form-control hasDatepicker" tm-type="datepicker" data-datepicker="" autocomplete="off" data-bind="tm-dateText2: Disposizione.Native.Contribuente.Anagrafica.DataNascita,enable: Additional.IsContribuenteEditable()" id="dp1603435673352" disabled=""><button type="button" class="ui-datepicker-trigger"></button>
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <img src="/youbiz.4.ux/StaticContents/ybw/00000/it-IT/skins/skin1/img/icon/calendario.svg">
                            </span>
                        </div>
                    </div>
                </div>

                <div class="form-group col-sm-2 col-md-1 col-lg-1 col-xl-1">
                    <label>Sesso</label>
                    <select class="form-control min-w-s" data-bind="options: Domain.Sessi, optionsValue: 'key', optionsText: 'value', optionsCaption: '', value: Disposizione.Native.Contribuente.Anagrafica.Sesso,enable: Additional.IsContribuenteEditable()" id="selectSesso" disabled=""><option value=""></option><option value="M">M</option><option value="F">F</option></select>
                </div>

                <div class="form-group col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label>Comune (o Stato estero) di nascita</label>
                    <input type="text" class="form-control" data-bind="value : Disposizione.Native.Contribuente.Anagrafica.NascitaComune,enable: Additional.IsContribuenteEditable()" id="comuneContribuente" disabled="">
                </div>

                <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
                    <label>Provincia</label>
                    <input type="text" class="form-control" id="provinciaContribuente" maxlength="2" data-bind="codiceProvinciaF24: Disposizione.Native.Contribuente.Anagrafica.NascitaProvincia,enable: Additional.IsContribuenteEditable()" disabled="">
                </div>
            </div>

            <!-- Domicilio fiscale -->
            <div class="form-row mt-3">
                <div class="form-group col-12">
                    <h4>Domicilio fiscale</h4>
                </div>
            </div>
           

            <div class="form-row">
                <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-3">
                    <label>Comune *</label>
                    <input type="text" class="form-control" data-bind="value : Disposizione.Native.Contribuente.Anagrafica.Comune,enable: Additional.IsContribuenteEditable()" disabled="">
                </div>
                <div class="form-group col-sm-6 col-md-3 col-lg-2 col-xl-2">
                    <label>Provincia *</label>
                    <input type="text" maxlength="2" class="form-control" data-bind="codiceProvinciaF24 : Disposizione.Native.Contribuente.Anagrafica.Provincia,enable: Additional.IsContribuenteEditable()" disabled="">
                </div>
                <div class="form-group col-sm-12 col-md-5 col-lg-5 col-xl-4">
                    <label>Via e numero civico *</label>
                    <input type="text" class="form-control" data-bind="value : Disposizione.Native.Contribuente.Anagrafica.Indirizzo,enable: Additional.IsContribuenteEditable()" disabled="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-12 col-md-4 col-lg-2 col-xl-3 my-auto">
                    <label class="control-label">
                        <span>
                            Codice fiscale del coobbligato, erede, genitore, tutore o curatore fallimentare
                        </span>
                    </label>
                </div>
                <div class="form-group col-sm-12 col-md-5 col-lg-4 col-xl-4 my-auto">
                    <input type="text" maxlength="16" class="form-control" data-bind="toUpperCase : Disposizione.Native.Contribuente.CodiceFiscaleSecondo,enable: Additional.IsContribuenteEditable()" disabled="">
                </div>
                <div class="form-group col-sm-12 col-md-3 col-lg-3 col-xl-2">
                    <label>Codice identificativo</label>
                    <div class="input-group pb-4 mb-2">
                        <input class="form-control " type="text" maxlength="2" data-bind="value : Disposizione.Native.Contribuente.CodiceIdentificativo,enable: Additional.IsContribuenteEditable()" disabled="">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-6 col-md-4 col-lg-6 col-xl-3">
                    <div class="form-check checkbox">
                        <input class="form-check-input" type="checkbox" data-bind="checked: Additional.CheckAddAnagrafica,enable: Additional.IsContribuenteEditable()" disabled="">
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
 <!--MODIFICARE LE CLASSI DELLE COLONNE PER ASSICURARE VISIBILITA' FINO A 680px -->
<div class="bordered" data-bind="visible: Additional.ActiveArea() === 'libera'" style="">
        <form class="form-grid" novalidate="">
            <div class="form-row">
                <div class="form-group col-12">
                    <h4>Estremi del versamento</h4>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label></label>
                    <div class="form-check  radio">
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
                <div class="form-group col-sm-6">
                    <label class="control-label">Banca *</label>
                    <select class="form-control" data-bind="options: Domain.Banche, optionsText: 'value', optionsValue: 'id', enable: Disposizione.Native.EstremiVersamento.TitolarePagamento()==3 &amp;&amp; Additional.Control.IsEstremiVersamentiEnabled(),value: Additional.RiceventeAbiLibera"><option value="-1"></option><option value="05696">05696 - Banca Popolare di Sondrio</option><option value="01005">01005 - BANCA NAZIONALE DEL LAVORO SPA</option><option value="05034">05034 - BANCO BPM S.P.A.</option><option value="01030">01030 - BANCA MONTE DEI PASCHI DI SIENA S.P.A.</option><option value="05035">05035 - VENETO BANCA S.P.A.</option><option value="06225">06225 - CASSA DI RISPARMIO DEL VENETO</option><option value="02008">02008 - UNICREDIT SPA</option><option value="03069">03069 - INTESA SANPAOLO SPA</option></select>
                </div>
                <div class="form-group col-sm-6">
                    <label class="control-label">C/C *</label>
                    <select class="form-control" data-bind="options: Domain.Conti, optionsText: 'value', optionsValue: 'id', enable: Disposizione.Native.EstremiVersamento.TitolarePagamento() == 3, value : Additional.IdRapportoLibera.Hash"><option value="-1"></option><option value="6B72F964499D7BF2B3893982E9B420CF533C5749E6C7F5BCA386DEC3455B88BE">000000001722_bis1</option><option value="7D0613292A37315394F09B5E7D9B94F52DED7DA86EAB3BB52D13559E136EC3F4">000000012648_</option><option value="3B884B35E1E8BD8EFB4F5D1B5ED68A20DBF2951A5E680C557B9F55C4B2A2C50E">000000012648_alias123</option><option value="3753ADDFAE8171328F0679E50E5B990D250F0D23C2E33D3A49783BB03AD45AA1">000000036186_prova</option><option value="848587767DF20DDEA42E867839CD8E2DA61681A8731618B65B77845042E660A1">000000122822_prova</option><option value="24D7E6A67FEC1281D1274295EF87F072F098C724438B2AB5215C8D9D83F62ZZZ">02400 - 000000000999</option><option value="476740FC6208429253BA040492E926BDA2D4DE73DBBAEA21BA9463EF755A7733">11239 - 000004512804</option><option value="B79A97823F1E6E45C9957E2CAC206FF948752D53B573FF6D4B8D47FC9B4C1A39">11701 - 000000000626</option><option value="0B43B2D200F9E5FB46F0A971476D2794F6BC9567C22B03435C6FBAE65ECC3588">11701 - 000000386065</option><option value="2559995672243BF47591477D53B955B17DF2DBC033B44F652FDFD8F60A5EFF38">11701 - 000000503116</option><option value="90B3BCF5390C4293EE4158BFB07FDD3692546FA4A873F5C9842D34A46C86A623">11701 - 000000598345</option><option value="973237997A6DBC2E8C21F0C4AF087B8E813309AE69AA2BFFEC7924610B0664EA">11701 - 000000624926</option><option value="FA80C863336BE93B4B670A3532775584E4EEAD905EFD45D7892BE8F81159E116">11701 - 000000815942</option><option value="3E2A217C2151FA4CEB070C9BA0CF8F065C777C824B6A4BDCD8A5AFAF68BFD35D">11702 - 000000031944</option><option value="E283219D9F80CCB4D6DA244B5BC87751A9134B3A55DD3C9746364922B38C7271">11702 - 000000036832</option><option value="466B12B71C9C5ABF73FAEB38AFD987424EF7F141DD954462B74200D8ABADBBE3">11702 - 000000060316</option><option value="F6F3F7D5E7A45B477C2DEC9647ED74BFDBE3BD30891B74CF67436B6834C9762F">11702 - 000000122821</option><option value="D41C6034A4145761B312943EC294F54CB9335BFE428DF4806CDDE6DB0F10FA0B">11703 - 189570559739</option><option value="20513B1683D56101F712213A8DBFEC3739DCCA22257F40AE709F7A9E43EE743C">11707 - 000009467559</option><option value="066B26ABBF16740FC7E3A9EF5AF5A8484E2B26B5B090D15DF557C3FC9E37C4E4">11707 - 000010540248</option><option value="B6B9982113DA53D6F8A91C623457A5585F77D55F607C0FF9F4757253D051FD7E">11737 - 615220757482</option><option value="24C3746FA4D6E824F676FC7BABF6A3AA163A88F04213F982D59B9111031D97A8">11737 - 625015224868</option><option value="24D7E6A67FEC1281D1274295EF87F072F098C724438B2AB5215C8D9D83F6238D">11751 - 000000000342</option><option value="5A880F0F671BB86DF8A9CD5867263F2453CB63FE10DF767CA886826BFB44E3DD">11751 - 000000365990</option><option value="8EB14B2614387E34CB27A2E21CAAE8B45B3F3F0D5AFA63117962F71791D92E34">18465 - 100000001579</option><option value="24D7E6A67FEC1281D1274295EF87F072F098C724438B2AB5215C8D9D83F62WWW">65730 - 000000000888</option><option value="14EC44636FC0D9536D11B58D1C07DF5CB2CE95590D8AC069CBE59F6B595F5651">CONSORZIO_PLUS 1</option></select>
                </div>
            </div>
                <div class="form-row" data-bind="visible: Disposizione.Native.EstremiVersamento.TitolarePagamento()==2">
                    <div class="form-group col-sm-3 col-md-2">
                        <label>ABI *</label>
                        <div class="input-group ">
                            <input class="form-control " type="text" maxlength="5" data-bind="enable:(Disposizione.Native.EstremiVersamento.TitolarePagamento()=== 2 &amp;&amp; Additional.Control.IsEstremiVersamentiEnabled()), value: Disposizione.Native.EstremiVersamento.RiceventeAbiContribuente" disabled="">
                            <div class="input-group-append">
                                <a class="input-group-text" tm-data-modal-abi="" data-bind="click: associaABI">
                                    <img src="/youbiz.4.ux/StaticContents/ybw/00000/it-IT/skins/skin1/img/icon/search.svg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-sm-3 col-md-2">
                        <label>CAB *</label>
                        <div class="input-group">
                            <input type="text" maxlength="5" class="form-control" data-bind="enable: (Disposizione.Native.EstremiVersamento.TitolarePagamento()== 2), value: Disposizione.Native.EstremiVersamento.RiceventeCabContribuente" disabled="">
                            <div class="input-group-append">
                                <a class="input-group-text" tm-data-modal-cab="" data-bind="click: associaCAB">
                                    <img src="/youbiz.4.ux/StaticContents/ybw/00000/it-IT/skins/skin1/img/icon/checked.svg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-sm-3 col-md-3">
                        <label>C/C *</label>
                        <input type="text" class="form-control" maxlength="12" data-bind="enable: (Disposizione.Native.EstremiVersamento.TitolarePagamento()== 2) ,  value: Disposizione.Native.EstremiVersamento.RiceventeNumeroContoContribuente" disabled="">
                    </div>
                    <div class="form-group col-sm-3 col-md-2 my-auto">
                        <a href="javascript:;" data-bind="click: viewModalConosciIban">Conosci l'IBAN?</a>
                    </div>
                </div>

                    <div class="form-row">
                        <div class="form-group col-sm-6">
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
                        <div class="form-group col-sm-6 col-md-6 col-lg-6 col-xl-3">
                            <label>Ragione sociale *</label>
                            <input type="text" class="form-control" data-bind="textInput: Disposizione.Native.EstremiVersamento.Anagrafica.CognomeDenRagSoc">
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6 col-xl-3">
                            <label>Indirizzo *</label>
                            <input type="text" class="form-control" data-bind="textInput: Disposizione.Native.EstremiVersamento.Anagrafica.Indirizzo">
                        </div>
                        <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-1">
                            <label>CAP *</label>
                            <input type="text" class="form-control" data-bind="textInput: Disposizione.Native.EstremiVersamento.Anagrafica.Cap">
                        </div>
                        <div class="form-group col-sm-8 col-md-8 col-lg-8 col-xl-3">
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









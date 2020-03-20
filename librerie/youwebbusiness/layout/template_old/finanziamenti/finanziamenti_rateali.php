<div id="mainSection">
    <div id="ed99fd46250f4bbaaa9594efe10f483c_1">
        <script type="text/javascript">
        function ListenChange() {
            var ctx = '#2836de7af6f149a3816bd968d5cfbda6_19';
            //Reset pannello errore
            $("#messagePanelAlertSubList", ctx).hide();
            $("#messagePanelAlertSubList", ctx).html('');
            $('#searc-datada').val("");
            $('#searc-dataa').val("");

            //Set Tab
            $('#ulSezioni > li').each(function(index) {
                $(this).removeClass('tab-current');
                if (index == 0) {
                    $(this).addClass('tab-current');
                }
            });

            //Chiamata area dettagli
            areaDettagli($('#areaDettagli'), '/Youbiz.Sdk.Web/Financing/Default/GetDettaglio', ctx);

            //Rendo visibile l'area finanziamento
            $('#AreaFinanziamento').show();
            //Nascondo l'area ammortamento e/o preammortamento
            $('#areaAmmortamento').hide();

        }

        function ListenDatePick(paramDataDa, paramDataA) {
            sdk.utils.log.debugMessage("Financing: active DatePick");
            $('#searc-datada').datepick({
                regional: 'it',
                trigger: "#cal1",
                minDate: paramDataDa,
                maxDate: paramDataA,
                beforeShow: function() {
                    $('#ui-datepicker-div').addClass("calendar-box ybb-calendar");
                }
            });
            $('#searc-dataa').datepick({
                regional: 'it',
                trigger: "#cal2",
                minDate: paramDataDa,
                maxDate: paramDataA,
                beforeShow: function() {
                    $('#ui-datepicker-div').addClass("calendar-box ybb-calendar");
                }
            });

            SetDefaultData(paramDataDa, paramDataA);

        }


        $(function() {
            // $('#AreaFinanziamento').hide();
        });
        </script>
        <div id="2836de7af6f149a3816bd968d5cfbda6_19">
            <div class="riquadro clearfix">
                <div class="clearfix">
                    <div class="flag infoBonifico">&nbsp;</div>
                    <h1>Finanziamenti Rateali</h1>
                </div>
                <div id="messagePanelAlertSubList" style="display: none;"></div>
                <div class="section clearfix">
                    <h3 class="titleSection">Elenco Finanziamenti</h3>
                    <div id="2836de7af6f149a3816bd968d5cfbda6_19">
                        <div class="tabellaSelezioneCC">
                            <div id="panelMessageRapporti" class="CCselezionato clearfix" style="min-height: 80px; padding-top: 30px; display: none;">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 msgInfo">
                                    <span class="col-md-6">Seleziona Finanziamento</span>
                                    <a id="SelettoreRapportiIcon" href="#" class="btnSelezioneCC icon-replace icon-arrowdown active"></a>
                                </div>
                            </div>
                            <div id="selezioneRapportoSingolo" class="CCselezionato clearfix" style="display: block;">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <span class="col-md-3 ">Intestato a&nbsp;</span>
                                    <span id="intestazione" class="col-md-8 intestazione">SAR.MAR. SPA</span>
                                    <span class="col-md-3">Tipo&nbsp;</span>
                                    <span id="tipo" class="col-md-8 CAB">MUTUO CASA 900059332</span>
                                    <input name="Key" id="Key" type="hidden" value="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                                    <span class="col-md-5 ">Importo Accordato&nbsp;</span>
                                    <span id="importo" class="col-md-5 contabile">134.000,00 EUR</span>
                                    <span class="col-md-7">Rate residue&nbsp;</span>
                                    <span id="residuo" class="col-md-3 disponibile">43</span>
                                </div>
                                <a id="SelettoreRapportiIconSelect" href="#" class="btnSelezioneCC icon-replace icon-arrowdown active open"></a>
                            </div>
                            <div class="table-responsive tabSelezioneCC" style="display: block;">
                                <!--tabSelezioneRapporto-->
                                <div class="dataTables_wrapper">
                                    <div id="itemSelectorTable_wrapper" class="dataTables_wrapper no-footer clearfix">
                                        <table id="itemSelectorTable" class="table table-striped no-footer dataTable" role="grid" aria-describedby="itemSelectorTable_info">
                                            <tbody>
                                                <tr tmindex="0" role="row" class="odd">
                                                    <td class="hidden"></td>
                                                    <td class="sorting_1">SAR.MAR. SPA </td>
                                                    <td class="sorting_2"> MUTUO CASA </td>
                                                    <td class="sorting_3">900059329 </td>
                                                    <td class="sorting_3">43</td>
                                                    <td>145.500,00 €</td>
                                                </tr>
                                                <tr tmindex="1" role="row" class="even">
                                                    <td class="hidden"></td>
                                                    <td class="sorting_1">SAR.MAR. SPA </td>
                                                    <td class="sorting_2"> MUTUO CASA </td>
                                                    <td class="sorting_3">900059330 </td>
                                                    <td class="sorting_3">43</td>
                                                    <td>145.500,00 €</td>
                                                </tr>
                                                <tr tmindex="2" role="row" class="odd">
                                                    <td class="hidden"></td>
                                                    <td class="sorting_1">SAR.MAR. SPA </td>
                                                    <td class="sorting_2"> MUTUO CASA </td>
                                                    <td class="sorting_3">900059331 </td>
                                                    <td class="sorting_3">43</td>
                                                    <td>133.500,00 €</td>
                                                </tr>
                                                <tr tmindex="3" role="row" class="even selectedRow">
                                                    <td class="hidden"></td>
                                                    <td class="sorting_1">SAR.MAR. SPA </td>
                                                    <td class="sorting_2"> MUTUO CASA </td>
                                                    <td class="sorting_3">900059332 </td>
                                                    <td class="sorting_3">43</td>
                                                    <td>134.000,00 €</td>
                                                </tr>
                                                <tr tmindex="4" role="row" class="odd">
                                                    <td class="hidden"></td>
                                                    <td class="sorting_1">SAR.MAR. SPA </td>
                                                    <td class="sorting_2"> MUTUO CASA </td>
                                                    <td class="sorting_3">900059333 </td>
                                                    <td class="sorting_3">43</td>
                                                    <td>97.000,00 €</td>
                                                </tr>
                                                <tr tmindex="5" role="row" class="even">
                                                    <td class="hidden"></td>
                                                    <td class="sorting_1">SAR.MAR. SPA </td>
                                                    <td class="sorting_2"> MUTUO CASA </td>
                                                    <td class="sorting_3">900059334 </td>
                                                    <td class="sorting_3">43</td>
                                                    <td>133.500,00 €</td>
                                                </tr>
                                                <tr tmindex="6" role="row" class="odd">
                                                    <td class="hidden"></td>
                                                    <td class="sorting_1">SAR.MAR. SPA </td>
                                                    <td class="sorting_2"> MUTUO CASA </td>
                                                    <td class="sorting_3">900059335 </td>
                                                    <td class="sorting_3">43</td>
                                                    <td>134.000,00 €</td>
                                                </tr>
                                                <tr tmindex="7" role="row" class="even">
                                                    <td class="hidden"></td>
                                                    <td class="sorting_1">SAR.MAR. SPA </td>
                                                    <td class="sorting_2"> MUTUO CASA </td>
                                                    <td class="sorting_3">900059336 </td>
                                                    <td class="sorting_3">43</td>
                                                    <td>98.500,00 €</td>
                                                </tr>
                                            </tbody>
                                            <thead>
                                                <tr role="row" class="">
                                                    <th class="hidden sorting" tabindex="0" aria-controls="itemSelectorTable" rowspan="1" colspan="1" aria-label="&amp;nbsp;: ordinamento crescente" style="width: 0px;">&nbsp;</th>
                                                    <th class="sorting_asc" tabindex="0" aria-controls="itemSelectorTable" rowspan="1" colspan="1" aria-label="Intestazione: ordinamento decrescente" style="width: 0px;" aria-sort="ascending">Intestazione</th>
                                                    <th class="sorting_asc" tabindex="0" aria-controls="itemSelectorTable" rowspan="1" colspan="1" aria-label="Tipo: ordinamento crescente" style="width: 0px;">Tipo</th>
                                                    <th class="sorting_asc" tabindex="0" aria-controls="itemSelectorTable" rowspan="1" colspan="1" aria-label="Finanziamento n.: ordinamento crescente" style="width: 0px;">Finanziamento n.</th>
                                                    <th class="sorting_asc" tabindex="0" aria-controls="itemSelectorTable" rowspan="1" colspan="1" aria-label="Rate residue: ordinamento crescente" style="width: 0px;">Rate residue</th>
                                                    <th class="sorting" tabindex="0" aria-controls="itemSelectorTable" rowspan="1" colspan="1" aria-label="Importo accordato: ordinamento crescente" style="width: 0px;">Importo accordato</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                        $(function() {

                            pagedRapporti();

                            $('#itemSelectorTable_wrapper').addClass('clearfix'); //Correzione bug firefox: aggiunta della classe clearfix per riposizionare la tabella in modo corretto 

                            function pagedRapporti() {
                                sdk.utils.log.debugMessage("Financing: load list");
                                var items = [{ "Finanziamento": { "Key": { "Crypted": "6uSC+1Cse80KOKSB/nIMs6W9zXg3MxRpvK0aqDSj+ZxClyIk+rEkYuBpqi0ELtM7cmBFUvEEpDPRDtm6+8cQuhfTcDyvY/m2mMb2CCZ1GJIvGlxAJ07eMmoSZbUkpSAFBPoOAUSL9NLWWobTJFlnZQ==" }, "Rapporto": { "Categoria": 52, "Codice": "000000059329", "Filiale": 2, "Tipo": 45 }, "CcRegolamento": null, "DataStipula": "2010-10-20T22:00:00Z", "DataErogazione": null, "DataDecorrenzaTasso": null, "DataScadenzaUltimaRata": null, "DataScadenzaProssimaRata": "2019-12-30T23:00:00Z", "ImportoErogato": 145500.0, "DebitoResiduo": 109385.7, "Spese": 0.0, "Mora": 0.0, "Tasso": 0.0, "NumRatePreAmmortamento": 1, "NumRateAmmortamento": 60, "NumRateResiduePreAmmortamento": 0, "NumRateResidueAmmortamento": 43, "Intestatario": "SAR.MAR. SPA", "NdgIntestatario": null, "NumDelibera": "900059329", "DescTipologia": "MUTUO CASA", "Tipologia": null, "CodConvenzione": "", "DescConvenzione": "", "Note": "MUTUO CASA", "Stato": "TOTALMENTE EROGATO", "FlagPrestitoPersonale": "0", "Divisa": "EUR", "PeriodicitaPreAmmortamento": null, "PeriodicitaAmmortamento": null, "FlagRateTerminate": null, "IntestatarioCcRegolamento": null, "DescFiliale": null }, "Rapporto": { "Id": "011143180", "IdAzienda": "13", "CodiceIban": "                           ", "CodiceAbi": "05034", "CodiceCab": null, "CodiceFiliale": "0002", "NumeroRapporto": "000000059329", "CodiceDivisa": null, "Descrizione": "SAR.MAR. SPA", "DescrizioneAzienda": "SAR.MAR. SPA", "DescrizioneIntestatario": "SAR.MAR. SPA", "DescrizioneRapporto": "MUTUO CASA FONDIARIO                    ", "DescrizionePersonalizzata": null, "DescrizioneIstituto": null, "CategoriaGruppo": "1050", "Categoria": "0052", "TipoRapporto": "045", "Particolare": "                                                  ", "Identifier": { "Crypt": "eUGs5tazGJDJZpn19rzggLC42bEjzs0V0AbjfTh86CIesVgdRrP3OL2ronk32vIa", "Hash": "AAB8A59D9FBE9A7A6A9EF407F652DCA149D48B6184411EED0FF73D9760454FAC" }, "Status": 0 } }, { "Finanziamento": { "Key": { "Crypted": "BWBTRSrmxzZfsBmpwiK7eqEwwFNZVzVWC1TvsG+Jqp+NQqDfLinxLgVZ/Y38IxLMkW4eorqbt/3IpkVI7CXJ7ZQEExN4BWXFNzodXpoOKZnXoAdNy1V9je5k1mOtx/K6UXv09yzVNa7XmN8Ue8CpSg==" }, "Rapporto": { "Categoria": 52, "Codice": "000000059330", "Filiale": 2, "Tipo": 45 }, "CcRegolamento": null, "DataStipula": "2010-10-20T22:00:00Z", "DataErogazione": null, "DataDecorrenzaTasso": null, "DataScadenzaUltimaRata": null, "DataScadenzaProssimaRata": "2019-12-30T23:00:00Z", "ImportoErogato": 145500.0, "DebitoResiduo": 109385.7, "Spese": 0.0, "Mora": 0.0, "Tasso": 0.0, "NumRatePreAmmortamento": 1, "NumRateAmmortamento": 60, "NumRateResiduePreAmmortamento": 0, "NumRateResidueAmmortamento": 43, "Intestatario": "SAR.MAR. SPA", "NdgIntestatario": null, "NumDelibera": "900059330", "DescTipologia": "MUTUO CASA", "Tipologia": null, "CodConvenzione": "", "DescConvenzione": "", "Note": "MUTUO CASA", "Stato": "TOTALMENTE EROGATO", "FlagPrestitoPersonale": "0", "Divisa": "EUR", "PeriodicitaPreAmmortamento": null, "PeriodicitaAmmortamento": null, "FlagRateTerminate": null, "IntestatarioCcRegolamento": null, "DescFiliale": null }, "Rapporto": { "Id": "011143180", "IdAzienda": "13", "CodiceIban": "                           ", "CodiceAbi": "05034", "CodiceCab": null, "CodiceFiliale": "0002", "NumeroRapporto": "000000059330", "CodiceDivisa": null, "Descrizione": "SAR.MAR. SPA", "DescrizioneAzienda": "SAR.MAR. SPA", "DescrizioneIntestatario": "SAR.MAR. SPA", "DescrizioneRapporto": "MUTUO CASA FONDIARIO                    ", "DescrizionePersonalizzata": null, "DescrizioneIstituto": null, "CategoriaGruppo": "1050", "Categoria": "0052", "TipoRapporto": "045", "Particolare": "                                                  ", "Identifier": { "Crypt": "BwSBId88fxaTCq8AI0R+3uDIiuRGr3Yjd+Nx2zXHvD5JLZxZa3XMLIvRO0W3AiXq", "Hash": "AAB8A59D9FBE9A7A6A9EF407F652DCA149D48B6184411EED0FF73D9760454FAC" }, "Status": 0 } }, { "Finanziamento": { "Key": { "Crypted": "lxdJrxiZA46Et7sTGfUKWZTI75j/vaYW2Em9MOxorkmNzsNKOQ21e8N94I2bnW0q6W23c6IJ4fnQbnxpZYe2Z3/jQVY/G1qq3wllR6MzEf+RQUbT47VgkKKVjLrA3x3dk7q0+BzeBzT0Dd00E7EbTQ==" }, "Rapporto": { "Categoria": 52, "Codice": "000000059331", "Filiale": 2, "Tipo": 45 }, "CcRegolamento": null, "DataStipula": "2010-10-20T22:00:00Z", "DataErogazione": null, "DataDecorrenzaTasso": null, "DataScadenzaUltimaRata": null, "DataScadenzaProssimaRata": "2019-12-30T23:00:00Z", "ImportoErogato": 133500.0, "DebitoResiduo": 100364.23, "Spese": 0.0, "Mora": 0.0, "Tasso": 0.0, "NumRatePreAmmortamento": 1, "NumRateAmmortamento": 60, "NumRateResiduePreAmmortamento": 0, "NumRateResidueAmmortamento": 43, "Intestatario": "SAR.MAR. SPA", "NdgIntestatario": null, "NumDelibera": "900059331", "DescTipologia": "MUTUO CASA", "Tipologia": null, "CodConvenzione": "", "DescConvenzione": "", "Note": "MUTUO CASA", "Stato": "TOTALMENTE EROGATO", "FlagPrestitoPersonale": "0", "Divisa": "EUR", "PeriodicitaPreAmmortamento": null, "PeriodicitaAmmortamento": null, "FlagRateTerminate": null, "IntestatarioCcRegolamento": null, "DescFiliale": null }, "Rapporto": { "Id": "011143180", "IdAzienda": "13", "CodiceIban": "                           ", "CodiceAbi": "05034", "CodiceCab": null, "CodiceFiliale": "0002", "NumeroRapporto": "000000059331", "CodiceDivisa": null, "Descrizione": "SAR.MAR. SPA", "DescrizioneAzienda": "SAR.MAR. SPA", "DescrizioneIntestatario": "SAR.MAR. SPA", "DescrizioneRapporto": "MUTUO CASA FONDIARIO                    ", "DescrizionePersonalizzata": null, "DescrizioneIstituto": null, "CategoriaGruppo": "1050", "Categoria": "0052", "TipoRapporto": "045", "Particolare": "                                                  ", "Identifier": { "Crypt": "yC62Qcz8HZI/RkR4Qx7uthXDzRSBEn0ltNaTfjEXpEr7AmxYU1jiV/yiEBRE7a5P", "Hash": "AAB8A59D9FBE9A7A6A9EF407F652DCA149D48B6184411EED0FF73D9760454FAC" }, "Status": 0 } }, { "Finanziamento": { "Key": { "Crypted": "ZVAYNCRkmE3DdF64VExVZwd7nnuUVYzY4646cIR/COs8QyKADMWTI16C4+SC09pRf8mq4yJ69tyrd6khYXjymnPRxl+zW+kks3McvhzonKCOLipmy5KyTqQzHgDCTr4ADZUUQfvsUMbMLYJm39DiVw==" }, "Rapporto": { "Categoria": 52, "Codice": "000000059332", "Filiale": 2, "Tipo": 45 }, "CcRegolamento": null, "DataStipula": "2010-10-20T22:00:00Z", "DataErogazione": null, "DataDecorrenzaTasso": null, "DataScadenzaUltimaRata": null, "DataScadenzaProssimaRata": "2019-12-30T23:00:00Z", "ImportoErogato": 134000.0, "DebitoResiduo": 100740.09, "Spese": 0.0, "Mora": 0.0, "Tasso": 0.0, "NumRatePreAmmortamento": 1, "NumRateAmmortamento": 60, "NumRateResiduePreAmmortamento": 0, "NumRateResidueAmmortamento": 43, "Intestatario": "SAR.MAR. SPA", "NdgIntestatario": null, "NumDelibera": "900059332", "DescTipologia": "MUTUO CASA", "Tipologia": null, "CodConvenzione": "", "DescConvenzione": "", "Note": "MUTUO CASA", "Stato": "TOTALMENTE EROGATO", "FlagPrestitoPersonale": "0", "Divisa": "EUR", "PeriodicitaPreAmmortamento": null, "PeriodicitaAmmortamento": null, "FlagRateTerminate": null, "IntestatarioCcRegolamento": null, "DescFiliale": null }, "Rapporto": { "Id": "011143180", "IdAzienda": "13", "CodiceIban": "                           ", "CodiceAbi": "05034", "CodiceCab": null, "CodiceFiliale": "0002", "NumeroRapporto": "000000059332", "CodiceDivisa": null, "Descrizione": "SAR.MAR. SPA", "DescrizioneAzienda": "SAR.MAR. SPA", "DescrizioneIntestatario": "SAR.MAR. SPA", "DescrizioneRapporto": "MUTUO CASA FONDIARIO                    ", "DescrizionePersonalizzata": null, "DescrizioneIstituto": null, "CategoriaGruppo": "1050", "Categoria": "0052", "TipoRapporto": "045", "Particolare": "                                                  ", "Identifier": { "Crypt": "bEUTWT4kt7LdjueGnt36u3LpQSaayb+Ye0h0PXr/cbwyi+E2ddg0DgFWRN1jAPke", "Hash": "AAB8A59D9FBE9A7A6A9EF407F652DCA149D48B6184411EED0FF73D9760454FAC" }, "Status": 0 } }, { "Finanziamento": { "Key": { "Crypted": "W4B1PumlGSbfX21OLmjOKOxAISZvzCvpHoMTkUrAxgMYWsyP0oTDwOjb2ZTLPYAwS3VhgBM5I0UZMU9Qn6HzEoCxNP9cARFWXPrH2Fx81zYkece2jjt6Ecvy2+cHQnJUleVvsWMqxOAbsCT9QikvQA==" }, "Rapporto": { "Categoria": 52, "Codice": "000000059333", "Filiale": 2, "Tipo": 45 }, "CcRegolamento": null, "DataStipula": "2010-10-20T22:00:00Z", "DataErogazione": null, "DataDecorrenzaTasso": null, "DataScadenzaUltimaRata": null, "DataScadenzaProssimaRata": "2019-12-30T23:00:00Z", "ImportoErogato": 97000.0, "DebitoResiduo": 72923.8, "Spese": 0.0, "Mora": 0.0, "Tasso": 0.0, "NumRatePreAmmortamento": 1, "NumRateAmmortamento": 60, "NumRateResiduePreAmmortamento": 0, "NumRateResidueAmmortamento": 43, "Intestatario": "SAR.MAR. SPA", "NdgIntestatario": null, "NumDelibera": "900059333", "DescTipologia": "MUTUO CASA", "Tipologia": null, "CodConvenzione": "", "DescConvenzione": "", "Note": "MUTUO CASA", "Stato": "TOTALMENTE EROGATO", "FlagPrestitoPersonale": "0", "Divisa": "EUR", "PeriodicitaPreAmmortamento": null, "PeriodicitaAmmortamento": null, "FlagRateTerminate": null, "IntestatarioCcRegolamento": null, "DescFiliale": null }, "Rapporto": { "Id": "011143180", "IdAzienda": "13", "CodiceIban": "                           ", "CodiceAbi": "05034", "CodiceCab": null, "CodiceFiliale": "0002", "NumeroRapporto": "000000059333", "CodiceDivisa": null, "Descrizione": "SAR.MAR. SPA", "DescrizioneAzienda": "SAR.MAR. SPA", "DescrizioneIntestatario": "SAR.MAR. SPA", "DescrizioneRapporto": "MUTUO CASA FONDIARIO                    ", "DescrizionePersonalizzata": null, "DescrizioneIstituto": null, "CategoriaGruppo": "1050", "Categoria": "0052", "TipoRapporto": "045", "Particolare": "                                                  ", "Identifier": { "Crypt": "6SOdE0JCTciqtRluG5OqFBVnjifoOvQm7WI9ciUaPdNNj5e+wYSYxUhUfeR4AQHe", "Hash": "AAB8A59D9FBE9A7A6A9EF407F652DCA149D48B6184411EED0FF73D9760454FAC" }, "Status": 0 } }, { "Finanziamento": { "Key": { "Crypted": "jvp8UKxejcrFDRthIxvlWFu56IS361nNYLew0gTzfLx/aoVsd2m52muQtHfsXFrBFSBjzdNl+/Um/Rl7n/k5TArZOGJuG0Kgu1cGzI8h0XS5Pm8oms7SJK9h7wEYVOGkOyYANElGt00NUTo/kkeU8w==" }, "Rapporto": { "Categoria": 52, "Codice": "000000059334", "Filiale": 2, "Tipo": 45 }, "CcRegolamento": null, "DataStipula": "2010-10-20T22:00:00Z", "DataErogazione": null, "DataDecorrenzaTasso": null, "DataScadenzaUltimaRata": null, "DataScadenzaProssimaRata": "2019-12-30T23:00:00Z", "ImportoErogato": 133500.0, "DebitoResiduo": 100364.23, "Spese": 0.0, "Mora": 0.0, "Tasso": 0.0, "NumRatePreAmmortamento": 1, "NumRateAmmortamento": 60, "NumRateResiduePreAmmortamento": 0, "NumRateResidueAmmortamento": 43, "Intestatario": "SAR.MAR. SPA", "NdgIntestatario": null, "NumDelibera": "900059334", "DescTipologia": "MUTUO CASA", "Tipologia": null, "CodConvenzione": "", "DescConvenzione": "", "Note": "MUTUO CASA", "Stato": "TOTALMENTE EROGATO", "FlagPrestitoPersonale": "0", "Divisa": "EUR", "PeriodicitaPreAmmortamento": null, "PeriodicitaAmmortamento": null, "FlagRateTerminate": null, "IntestatarioCcRegolamento": null, "DescFiliale": null }, "Rapporto": { "Id": "011143180", "IdAzienda": "13", "CodiceIban": "                           ", "CodiceAbi": "05034", "CodiceCab": null, "CodiceFiliale": "0002", "NumeroRapporto": "000000059334", "CodiceDivisa": null, "Descrizione": "SAR.MAR. SPA", "DescrizioneAzienda": "SAR.MAR. SPA", "DescrizioneIntestatario": "SAR.MAR. SPA", "DescrizioneRapporto": "MUTUO CASA FONDIARIO                    ", "DescrizionePersonalizzata": null, "DescrizioneIstituto": null, "CategoriaGruppo": "1050", "Categoria": "0052", "TipoRapporto": "045", "Particolare": "                                                  ", "Identifier": { "Crypt": "Rxolvpg5xXmSsWfvrmx7t8wr9Cn+ZyjFHHvHpV+KAK2jIkKYiz0t2pqmNMMCOI9i", "Hash": "AAB8A59D9FBE9A7A6A9EF407F652DCA149D48B6184411EED0FF73D9760454FAC" }, "Status": 0 } }, { "Finanziamento": { "Key": { "Crypted": "7EAusDpRwwEnDck8jbgyhO9+4ydHw0DqfkCmRLgIaM6hpSZ0woqi09Jz/lOYhiOzxp4210L9cO8zLZ/h67x7nXv3ez+kYewfuC2Ou9BfTzq4ZXTxAVAS1CMnRKNx0LW9KjRxaoy4tKMyuagOMBZlHA==" }, "Rapporto": { "Categoria": 52, "Codice": "000000059335", "Filiale": 2, "Tipo": 45 }, "CcRegolamento": null, "DataStipula": "2010-10-20T22:00:00Z", "DataErogazione": null, "DataDecorrenzaTasso": null, "DataScadenzaUltimaRata": null, "DataScadenzaProssimaRata": "2019-12-30T23:00:00Z", "ImportoErogato": 134000.0, "DebitoResiduo": 100740.09, "Spese": 0.0, "Mora": 0.0, "Tasso": 0.0, "NumRatePreAmmortamento": 1, "NumRateAmmortamento": 60, "NumRateResiduePreAmmortamento": 0, "NumRateResidueAmmortamento": 43, "Intestatario": "SAR.MAR. SPA", "NdgIntestatario": null, "NumDelibera": "900059335", "DescTipologia": "MUTUO CASA", "Tipologia": null, "CodConvenzione": "", "DescConvenzione": "", "Note": "MUTUO CASA", "Stato": "TOTALMENTE EROGATO", "FlagPrestitoPersonale": "0", "Divisa": "EUR", "PeriodicitaPreAmmortamento": null, "PeriodicitaAmmortamento": null, "FlagRateTerminate": null, "IntestatarioCcRegolamento": null, "DescFiliale": null }, "Rapporto": { "Id": "011143180", "IdAzienda": "13", "CodiceIban": "                           ", "CodiceAbi": "05034", "CodiceCab": null, "CodiceFiliale": "0002", "NumeroRapporto": "000000059335", "CodiceDivisa": null, "Descrizione": "SAR.MAR. SPA", "DescrizioneAzienda": "SAR.MAR. SPA", "DescrizioneIntestatario": "SAR.MAR. SPA", "DescrizioneRapporto": "MUTUO CASA FONDIARIO                    ", "DescrizionePersonalizzata": null, "DescrizioneIstituto": null, "CategoriaGruppo": "1050", "Categoria": "0052", "TipoRapporto": "045", "Particolare": "                                                  ", "Identifier": { "Crypt": "X7/cNJYgFNNUIh6Uu+3sJP3YsNPWdR2aDhhCu7WYDAIeSD274T1bGEMzoqgyjjVQ", "Hash": "AAB8A59D9FBE9A7A6A9EF407F652DCA149D48B6184411EED0FF73D9760454FAC" }, "Status": 0 } }, { "Finanziamento": { "Key": { "Crypted": "k3XR1u+NZK+7DK9tfsV9CLpGQNZpjPp2Rmn8tRD7dpti7jXSScegzI1GtVhNbxBLSjsZ0XRHP2XLIC71V5c7GVcnJp+Q3bzYnyERGbFWgyeyx5J5OmdxbWE5hqWOeKEqIFLrG8ZqMRN3pLELucU1Ow==" }, "Rapporto": { "Categoria": 52, "Codice": "000000059336", "Filiale": 2, "Tipo": 45 }, "CcRegolamento": null, "DataStipula": "2010-10-20T22:00:00Z", "DataErogazione": null, "DataDecorrenzaTasso": null, "DataScadenzaUltimaRata": null, "DataScadenzaProssimaRata": "2019-12-30T23:00:00Z", "ImportoErogato": 98500.0, "DebitoResiduo": 74051.52, "Spese": 0.0, "Mora": 0.0, "Tasso": 0.0, "NumRatePreAmmortamento": 1, "NumRateAmmortamento": 60, "NumRateResiduePreAmmortamento": 0, "NumRateResidueAmmortamento": 43, "Intestatario": "SAR.MAR. SPA", "NdgIntestatario": null, "NumDelibera": "900059336", "DescTipologia": "MUTUO CASA", "Tipologia": null, "CodConvenzione": "", "DescConvenzione": "", "Note": "MUTUO CASA", "Stato": "TOTALMENTE EROGATO", "FlagPrestitoPersonale": "0", "Divisa": "EUR", "PeriodicitaPreAmmortamento": null, "PeriodicitaAmmortamento": null, "FlagRateTerminate": null, "IntestatarioCcRegolamento": null, "DescFiliale": null }, "Rapporto": { "Id": "011143180", "IdAzienda": "13", "CodiceIban": "                           ", "CodiceAbi": "05034", "CodiceCab": null, "CodiceFiliale": "0002", "NumeroRapporto": "000000059336", "CodiceDivisa": null, "Descrizione": "SAR.MAR. SPA", "DescrizioneAzienda": "SAR.MAR. SPA", "DescrizioneIntestatario": "SAR.MAR. SPA", "DescrizioneRapporto": "MUTUO CASA FONDIARIO                    ", "DescrizionePersonalizzata": null, "DescrizioneIstituto": null, "CategoriaGruppo": "1050", "Categoria": "0052", "TipoRapporto": "045", "Particolare": "                                                  ", "Identifier": { "Crypt": "/2RFWduOo36rwWK1T3z9BFSNJC9uxNrYx1aU8hrjvuO6S5najhl2NZIRiY2IKatE", "Hash": "AAB8A59D9FBE9A7A6A9EF407F652DCA149D48B6184411EED0FF73D9760454FAC" }, "Status": 0 } }, { "Finanziamento": { "Key": { "Crypted": "HvYvZK3atqauCsPcepotf0AlJaBDFTlwQG+UwB+aR9DjhC0VW6lRp020xH8xva9zEmvQQiX/bTxIcfuuIFe/Hmzm3osu7jsvsGNrP6pP8joLZxd6siLgU7mjLLaXlE9Qqn+uCgaEEJF9ZEBwQuALNg==" }, "Rapporto": { "Categoria": 52, "Codice": "000000059337", "Filiale": 2, "Tipo": 45 }, "CcRegolamento": null, "DataStipula": "2010-10-20T22:00:00Z", "DataErogazione": null, "DataDecorrenzaTasso": null, "DataScadenzaUltimaRata": null, "DataScadenzaProssimaRata": "2019-12-30T23:00:00Z", "ImportoErogato": 145500.0, "DebitoResiduo": 109385.7, "Spese": 0.0, "Mora": 0.0, "Tasso": 0.0, "NumRatePreAmmortamento": 1, "NumRateAmmortamento": 60, "NumRateResiduePreAmmortamento": 0, "NumRateResidueAmmortamento": 43, "Intestatario": "SAR.MAR. SPA", "NdgIntestatario": null, "NumDelibera": "900059337", "DescTipologia": "MUTUO CASA", "Tipologia": null, "CodConvenzione": "", "DescConvenzione": "", "Note": "MUTUO CASA", "Stato": "TOTALMENTE EROGATO", "FlagPrestitoPersonale": "0", "Divisa": "EUR", "PeriodicitaPreAmmortamento": null, "PeriodicitaAmmortamento": null, "FlagRateTerminate": null, "IntestatarioCcRegolamento": null, "DescFiliale": null }, "Rapporto": { "Id": "011143180", "IdAzienda": "13", "CodiceIban": "                           ", "CodiceAbi": "05034", "CodiceCab": null, "CodiceFiliale": "0002", "NumeroRapporto": "000000059337", "CodiceDivisa": null, "Descrizione": "SAR.MAR. SPA", "DescrizioneAzienda": "SAR.MAR. SPA", "DescrizioneIntestatario": "SAR.MAR. SPA", "DescrizioneRapporto": "MUTUO CASA FONDIARIO                    ", "DescrizionePersonalizzata": null, "DescrizioneIstituto": null, "CategoriaGruppo": "1050", "Categoria": "0052", "TipoRapporto": "045", "Particolare": "                                                  ", "Identifier": { "Crypt": "IcmDN/g1wOtRawku/TkertcDSLr3Y9Vg1ZtqPDJaaEcfY2ZfIgkvq5v7kvpJFmcu", "Hash": "AAB8A59D9FBE9A7A6A9EF407F652DCA149D48B6184411EED0FF73D9760454FAC" }, "Status": 0 } }, { "Finanziamento": { "Key": { "Crypted": "2kIyv8Ug8uFkqbP2lhvIRpJs6rFooBTwO6t8jCjLGPJQoJFIOmfDEOhucI8BDiN3BoaCCzU+U45cix2WsbSbqkWa/Zonel9md12o1M0MUMxbSphPOdUnT5CJ6RTpHVlyeib2aaU5jxKMEszHmB0Ijg==" }, "Rapporto": { "Categoria": 52, "Codice": "000000059338", "Filiale": 2, "Tipo": 45 }, "CcRegolamento": null, "DataStipula": "2010-10-20T22:00:00Z", "DataErogazione": null, "DataDecorrenzaTasso": null, "DataScadenzaUltimaRata": null, "DataScadenzaProssimaRata": "2019-12-30T23:00:00Z", "ImportoErogato": 145500.0, "DebitoResiduo": 109385.7, "Spese": 0.0, "Mora": 0.0, "Tasso": 0.0, "NumRatePreAmmortamento": 1, "NumRateAmmortamento": 60, "NumRateResiduePreAmmortamento": 0, "NumRateResidueAmmortamento": 43, "Intestatario": "SAR.MAR. SPA", "NdgIntestatario": null, "NumDelibera": "900059338", "DescTipologia": "MUTUO CASA", "Tipologia": null, "CodConvenzione": "", "DescConvenzione": "", "Note": "MUTUO CASA", "Stato": "TOTALMENTE EROGATO", "FlagPrestitoPersonale": "0", "Divisa": "EUR", "PeriodicitaPreAmmortamento": null, "PeriodicitaAmmortamento": null, "FlagRateTerminate": null, "IntestatarioCcRegolamento": null, "DescFiliale": null }, "Rapporto": { "Id": "011143180", "IdAzienda": "13", "CodiceIban": "                           ", "CodiceAbi": "05034", "CodiceCab": null, "CodiceFiliale": "0002", "NumeroRapporto": "000000059338", "CodiceDivisa": null, "Descrizione": "SAR.MAR. SPA", "DescrizioneAzienda": "SAR.MAR. SPA", "DescrizioneIntestatario": "SAR.MAR. SPA", "DescrizioneRapporto": "MUTUO CASA FONDIARIO                    ", "DescrizionePersonalizzata": null, "DescrizioneIstituto": null, "CategoriaGruppo": "1050", "Categoria": "0052", "TipoRapporto": "045", "Particolare": "                                                  ", "Identifier": { "Crypt": "StrwWsif9B4JlXOd3sKprD7LBV6Z19X7rcDgAbWOHXlkctPk6R1dRDctLQU9m1fi", "Hash": "AAB8A59D9FBE9A7A6A9EF407F652DCA149D48B6184411EED0FF73D9760454FAC" }, "Status": 0 } }, { "Finanziamento": { "Key": { "Crypted": "Vqk58N+qU+W9VyJ2VH2hpn+hbi700hTKw60lDKBZFqHAwqjdUUf3Gkeyohy7bBbYhvI2pxirLrC3vOD1q6OH6af+Q6BMpWuTJ5D2dyQnrZEyHHlOXItI2AcNLth9CGBBFXT+w1r/RZx2qbl/HQgqCg==" }, "Rapporto": { "Categoria": 52, "Codice": "000000059339", "Filiale": 2, "Tipo": 45 }, "CcRegolamento": null, "DataStipula": "2010-10-20T22:00:00Z", "DataErogazione": null, "DataDecorrenzaTasso": null, "DataScadenzaUltimaRata": null, "DataScadenzaProssimaRata": "2019-12-30T23:00:00Z", "ImportoErogato": 133500.0, "DebitoResiduo": 100364.23, "Spese": 0.0, "Mora": 0.0, "Tasso": 0.0, "NumRatePreAmmortamento": 1, "NumRateAmmortamento": 60, "NumRateResiduePreAmmortamento": 0, "NumRateResidueAmmortamento": 43, "Intestatario": "SAR.MAR. SPA", "NdgIntestatario": null, "NumDelibera": "900059339", "DescTipologia": "MUTUO CASA", "Tipologia": null, "CodConvenzione": "", "DescConvenzione": "", "Note": "MUTUO CASA", "Stato": "TOTALMENTE EROGATO", "FlagPrestitoPersonale": "0", "Divisa": "EUR", "PeriodicitaPreAmmortamento": null, "PeriodicitaAmmortamento": null, "FlagRateTerminate": null, "IntestatarioCcRegolamento": null, "DescFiliale": null }, "Rapporto": { "Id": "011143180", "IdAzienda": "13", "CodiceIban": "                           ", "CodiceAbi": "05034", "CodiceCab": null, "CodiceFiliale": "0002", "NumeroRapporto": "000000059339", "CodiceDivisa": null, "Descrizione": "SAR.MAR. SPA", "DescrizioneAzienda": "SAR.MAR. SPA", "DescrizioneIntestatario": "SAR.MAR. SPA", "DescrizioneRapporto": "MUTUO CASA FONDIARIO                    ", "DescrizionePersonalizzata": null, "DescrizioneIstituto": null, "CategoriaGruppo": "1050", "Categoria": "0052", "TipoRapporto": "045", "Particolare": "                                                  ", "Identifier": { "Crypt": "3htLFnm2O48pf5Xl1+xd+1EiTNO2w66juZxyUlGvYRpcDPkUt/UG67/pA4CKwLdU", "Hash": "AAB8A59D9FBE9A7A6A9EF407F652DCA149D48B6184411EED0FF73D9760454FAC" }, "Status": 0 } }, { "Finanziamento": { "Key": { "Crypted": "E2l/KUORX10OemIltTUi3m7NJBinKVCGzVe2WqpbOwS1+KZgRWU/fXo1i74NbKVrDWfYzPXy9tYdIgGmiyZQOVISmYa9F+5jk4muR2gbWYE9j9yR+I75xrJRKkCK7/mhXw+oP6htw4DBEwl8R70f1g==" }, "Rapporto": { "Categoria": 52, "Codice": "000000059340", "Filiale": 2, "Tipo": 45 }, "CcRegolamento": null, "DataStipula": "2010-10-20T22:00:00Z", "DataErogazione": null, "DataDecorrenzaTasso": null, "DataScadenzaUltimaRata": null, "DataScadenzaProssimaRata": "2019-12-30T23:00:00Z", "ImportoErogato": 134000.0, "DebitoResiduo": 100740.09, "Spese": 0.0, "Mora": 0.0, "Tasso": 0.0, "NumRatePreAmmortamento": 1, "NumRateAmmortamento": 60, "NumRateResiduePreAmmortamento": 0, "NumRateResidueAmmortamento": 43, "Intestatario": "SAR.MAR. SPA", "NdgIntestatario": null, "NumDelibera": "900059340", "DescTipologia": "MUTUO CASA", "Tipologia": null, "CodConvenzione": "", "DescConvenzione": "", "Note": "MUTUO CASA", "Stato": "TOTALMENTE EROGATO", "FlagPrestitoPersonale": "0", "Divisa": "EUR", "PeriodicitaPreAmmortamento": null, "PeriodicitaAmmortamento": null, "FlagRateTerminate": null, "IntestatarioCcRegolamento": null, "DescFiliale": null }, "Rapporto": { "Id": "011143180", "IdAzienda": "13", "CodiceIban": "                           ", "CodiceAbi": "05034", "CodiceCab": null, "CodiceFiliale": "0002", "NumeroRapporto": "000000059340", "CodiceDivisa": null, "Descrizione": "SAR.MAR. SPA", "DescrizioneAzienda": "SAR.MAR. SPA", "DescrizioneIntestatario": "SAR.MAR. SPA", "DescrizioneRapporto": "MUTUO CASA FONDIARIO                    ", "DescrizionePersonalizzata": null, "DescrizioneIstituto": null, "CategoriaGruppo": "1050", "Categoria": "0052", "TipoRapporto": "045", "Particolare": "                                                  ", "Identifier": { "Crypt": "08QXXe4e9uereEmLDHbBKn+BUsTiir7ZujptxlgM2OuuSH5I+MLIBunbPLtON1um", "Hash": "AAB8A59D9FBE9A7A6A9EF407F652DCA149D48B6184411EED0FF73D9760454FAC" }, "Status": 0 } }, { "Finanziamento": { "Key": { "Crypted": "eIS9kH/XFEyAvyxXMu729SUHlgIRAUN2Ox52Zd/MapXSYJZY0/4EJKy6ZllYgGbSVrrIVt3PQOLv5ynPP0Yyr7/CKwwcYw8Oha/7cYX9cyWIFpE5B9KtJgOC6omR8IyemeXYdswxKykQvrgN5CRZRg==" }, "Rapporto": { "Categoria": 52, "Codice": "000000059341", "Filiale": 2, "Tipo": 45 }, "CcRegolamento": null, "DataStipula": "2010-10-20T22:00:00Z", "DataErogazione": null, "DataDecorrenzaTasso": null, "DataScadenzaUltimaRata": null, "DataScadenzaProssimaRata": "2019-12-30T23:00:00Z", "ImportoErogato": 97000.0, "DebitoResiduo": 72923.8, "Spese": 0.0, "Mora": 0.0, "Tasso": 0.0, "NumRatePreAmmortamento": 1, "NumRateAmmortamento": 60, "NumRateResiduePreAmmortamento": 0, "NumRateResidueAmmortamento": 43, "Intestatario": "SAR.MAR. SPA", "NdgIntestatario": null, "NumDelibera": "900059341", "DescTipologia": "MUTUO CASA", "Tipologia": null, "CodConvenzione": "", "DescConvenzione": "", "Note": "MUTUO CASA", "Stato": "TOTALMENTE EROGATO", "FlagPrestitoPersonale": "0", "Divisa": "EUR", "PeriodicitaPreAmmortamento": null, "PeriodicitaAmmortamento": null, "FlagRateTerminate": null, "IntestatarioCcRegolamento": null, "DescFiliale": null }, "Rapporto": { "Id": "011143180", "IdAzienda": "13", "CodiceIban": "                           ", "CodiceAbi": "05034", "CodiceCab": null, "CodiceFiliale": "0002", "NumeroRapporto": "000000059341", "CodiceDivisa": null, "Descrizione": "SAR.MAR. SPA", "DescrizioneAzienda": "SAR.MAR. SPA", "DescrizioneIntestatario": "SAR.MAR. SPA", "DescrizioneRapporto": "MUTUO CASA FONDIARIO                    ", "DescrizionePersonalizzata": null, "DescrizioneIstituto": null, "CategoriaGruppo": "1050", "Categoria": "0052", "TipoRapporto": "045", "Particolare": "                                                  ", "Identifier": { "Crypt": "/M33t8bNKI6SgEjEYsB2PM9eIh23L2FB8EIx8EgKP2oK3NbBLeOx7UptIRtlBHH4", "Hash": "AAB8A59D9FBE9A7A6A9EF407F652DCA149D48B6184411EED0FF73D9760454FAC" }, "Status": 0 } }, { "Finanziamento": { "Key": { "Crypted": "k7nco4VcIQ0bHkybGvGCnx/1Pb4dMVGgeSXS6MdpQ1mJbEKV7MLdirqeUKgVAh1ztYeR4z4nQkAnuZgZy1G4bV4aBoMUe9PW/iKlSY2EvwiGPdu40+ZvjDFtQ2UQ1Arl10wBvXIb9BTMzlj0rHqixw==" }, "Rapporto": { "Categoria": 52, "Codice": "000000059342", "Filiale": 2, "Tipo": 45 }, "CcRegolamento": null, "DataStipula": "2010-10-20T22:00:00Z", "DataErogazione": null, "DataDecorrenzaTasso": null, "DataScadenzaUltimaRata": null, "DataScadenzaProssimaRata": "2019-12-30T23:00:00Z", "ImportoErogato": 133500.0, "DebitoResiduo": 100364.23, "Spese": 0.0, "Mora": 0.0, "Tasso": 0.0, "NumRatePreAmmortamento": 1, "NumRateAmmortamento": 60, "NumRateResiduePreAmmortamento": 0, "NumRateResidueAmmortamento": 43, "Intestatario": "SAR.MAR. SPA", "NdgIntestatario": null, "NumDelibera": "900059342", "DescTipologia": "MUTUO CASA", "Tipologia": null, "CodConvenzione": "", "DescConvenzione": "", "Note": "MUTUO CASA", "Stato": "TOTALMENTE EROGATO", "FlagPrestitoPersonale": "0", "Divisa": "EUR", "PeriodicitaPreAmmortamento": null, "PeriodicitaAmmortamento": null, "FlagRateTerminate": null, "IntestatarioCcRegolamento": null, "DescFiliale": null }, "Rapporto": { "Id": "011143180", "IdAzienda": "13", "CodiceIban": "                           ", "CodiceAbi": "05034", "CodiceCab": null, "CodiceFiliale": "0002", "NumeroRapporto": "000000059342", "CodiceDivisa": null, "Descrizione": "SAR.MAR. SPA", "DescrizioneAzienda": "SAR.MAR. SPA", "DescrizioneIntestatario": "SAR.MAR. SPA", "DescrizioneRapporto": "MUTUO CASA FONDIARIO                    ", "DescrizionePersonalizzata": null, "DescrizioneIstituto": null, "CategoriaGruppo": "1050", "Categoria": "0052", "TipoRapporto": "045", "Particolare": "                                                  ", "Identifier": { "Crypt": "MfRITFhmY5rwEocxkamDxFasTu2vYLKL6O9zrtiKT6s8r/pfaXtj42MME+SrQaLM", "Hash": "AAB8A59D9FBE9A7A6A9EF407F652DCA149D48B6184411EED0FF73D9760454FAC" }, "Status": 0 } }, { "Finanziamento": { "Key": { "Crypted": "iAm3gpdhQpQz2ILAE8DsNe9g8gpmA9Ht+akZjLqmrZ8HWNZsI4yXMocjjtrSfIAEq95E5UJORcNCVItzJFdyaY7mR05uRX6lFHOVQZOZuwuas/dngvAs0TYCND9YeMWnbwN90Lx4s/MMvtW83W409w==" }, "Rapporto": { "Categoria": 52, "Codice": "000000059343", "Filiale": 2, "Tipo": 45 }, "CcRegolamento": null, "DataStipula": "2010-10-20T22:00:00Z", "DataErogazione": null, "DataDecorrenzaTasso": null, "DataScadenzaUltimaRata": null, "DataScadenzaProssimaRata": "2019-12-30T23:00:00Z", "ImportoErogato": 134000.0, "DebitoResiduo": 100740.09, "Spese": 0.0, "Mora": 0.0, "Tasso": 0.0, "NumRatePreAmmortamento": 1, "NumRateAmmortamento": 60, "NumRateResiduePreAmmortamento": 0, "NumRateResidueAmmortamento": 43, "Intestatario": "SAR.MAR. SPA", "NdgIntestatario": null, "NumDelibera": "900059343", "DescTipologia": "MUTUO CASA", "Tipologia": null, "CodConvenzione": "", "DescConvenzione": "", "Note": "MUTUO CASA", "Stato": "TOTALMENTE EROGATO", "FlagPrestitoPersonale": "0", "Divisa": "EUR", "PeriodicitaPreAmmortamento": null, "PeriodicitaAmmortamento": null, "FlagRateTerminate": null, "IntestatarioCcRegolamento": null, "DescFiliale": null }, "Rapporto": { "Id": "011143180", "IdAzienda": "13", "CodiceIban": "                           ", "CodiceAbi": "05034", "CodiceCab": null, "CodiceFiliale": "0002", "NumeroRapporto": "000000059343", "CodiceDivisa": null, "Descrizione": "SAR.MAR. SPA", "DescrizioneAzienda": "SAR.MAR. SPA", "DescrizioneIntestatario": "SAR.MAR. SPA", "DescrizioneRapporto": "MUTUO CASA FONDIARIO                    ", "DescrizionePersonalizzata": null, "DescrizioneIstituto": null, "CategoriaGruppo": "1050", "Categoria": "0052", "TipoRapporto": "045", "Particolare": "                                                  ", "Identifier": { "Crypt": "aImeLKcM9SBHkss/6mOT1Ud0z82r8xrrBATyiQAoYkI51dIMOAil6YMiqRmKxTjL", "Hash": "AAB8A59D9FBE9A7A6A9EF407F652DCA149D48B6184411EED0FF73D9760454FAC" }, "Status": 0 } }, { "Finanziamento": { "Key": { "Crypted": "89rR+Pu3kTkBSCD5wuJmqFblqYNwrpw4vYgZJevgpu/v0s24wU6LKSHLs7yV0TYuSMeCUEnPhx+1PzcPuVMGvTMHQN5beFfAfC5nDscGbK1f17gmEck6CX8hmSIZPa9ek4JoKaWhAQlDWdYOLumedQ==" }, "Rapporto": { "Categoria": 52, "Codice": "000000059344", "Filiale": 2, "Tipo": 45 }, "CcRegolamento": null, "DataStipula": "2010-10-20T22:00:00Z", "DataErogazione": null, "DataDecorrenzaTasso": null, "DataScadenzaUltimaRata": null, "DataScadenzaProssimaRata": "2019-12-30T23:00:00Z", "ImportoErogato": 98500.0, "DebitoResiduo": 74051.52, "Spese": 0.0, "Mora": 0.0, "Tasso": 0.0, "NumRatePreAmmortamento": 1, "NumRateAmmortamento": 60, "NumRateResiduePreAmmortamento": 0, "NumRateResidueAmmortamento": 43, "Intestatario": "SAR.MAR. SPA", "NdgIntestatario": null, "NumDelibera": "900059344", "DescTipologia": "MUTUO CASA", "Tipologia": null, "CodConvenzione": "", "DescConvenzione": "", "Note": "MUTUO CASA", "Stato": "TOTALMENTE EROGATO", "FlagPrestitoPersonale": "0", "Divisa": "EUR", "PeriodicitaPreAmmortamento": null, "PeriodicitaAmmortamento": null, "FlagRateTerminate": null, "IntestatarioCcRegolamento": null, "DescFiliale": null }, "Rapporto": { "Id": "011143180", "IdAzienda": "13", "CodiceIban": "                           ", "CodiceAbi": "05034", "CodiceCab": null, "CodiceFiliale": "0002", "NumeroRapporto": "000000059344", "CodiceDivisa": null, "Descrizione": "SAR.MAR. SPA", "DescrizioneAzienda": "SAR.MAR. SPA", "DescrizioneIntestatario": "SAR.MAR. SPA", "DescrizioneRapporto": "MUTUO CASA FONDIARIO                    ", "DescrizionePersonalizzata": null, "DescrizioneIstituto": null, "CategoriaGruppo": "1050", "Categoria": "0052", "TipoRapporto": "045", "Particolare": "                                                  ", "Identifier": { "Crypt": "vO92lBC9K6C08YWPkRMUTXAgfbvvOhn0F29yDsJWNf4Cw5Y19oJBdftsCQlJkFwU", "Hash": "AAB8A59D9FBE9A7A6A9EF407F652DCA149D48B6184411EED0FF73D9760454FAC" }, "Status": 0 } }];
                                var noRecord = 'Non ci sono Finanziamenti';
                                var selectedId = '';

                                var numElementForNotPagination = 8;
                                var ctx = '#2836de7af6f149a3816bd968d5cfbda6_19';

                                //***********************************************
                                $('.btnSelezioneCC', ctx).click(function() {
                                    var that = $(this);
                                    if (!that.hasClass('open'))
                                        $('.tabSelezioneCC', ctx).slideDown(200);
                                    else
                                        $('.tabSelezioneCC', ctx).slideUp(300);

                                    that.toggleClass('open');
                                });

                                $('.tabSelezioneCC', ctx).hide();

                                var numElem = items.length;
                                if (numElem <= 1) {
                                    $('.btnSelezioneCC', ctx).removeClass('active');
                                    $('.btnSelezioneCC', ctx).addClass('hidden');
                                    $('#SelettoreRapportiIcon', ctx).addClass('hidden');
                                }

                                $('#selezioneRapportoSingolo').hide();
                                $('#panelMessageRapporti').show();
                                //***********************************************


                                var param = {
                                    dataSource: items,
                                    rowCreator: function(parameter) {
                                        if (parameter) {
                                            var finanziamento = parameter.Finanziamento;
                                            if (finanziamento) {

                                                var saldoDisp = function(finanztmp, divisatmp) {
                                                    if (finanztmp) {
                                                        return sdk.utils.text.formatAmmountDecimal(finanztmp) + ' ' + sdk.utils.text.getCurrencySign(divisatmp);
                                                    }
                                                    return "&nbsp;";
                                                };
                                                var numRateResidue = function(finanztmp) {
                                                    if (finanztmp) {
                                                        var rateResidueAmmortamento = finanztmp.NumRateResidueAmmortamento == null ? '0' : finanztmp.NumRateResidueAmmortamento;
                                                        var rateResiduePreAmmortamento = finanztmp.NumRateResiduePreAmmortamento == null ? '0' : finanztmp.NumRateResiduePreAmmortamento;
                                                        var residuo = parseInt(rateResidueAmmortamento) + parseInt(rateResiduePreAmmortamento);
                                                        return residuo;
                                                    }
                                                    return "&nbsp;";
                                                };

                                                return '<tr>' +
                                                    '<td class="hidden"></td> ' +
                                                    '<td>' + (finanziamento.Intestatario || '') + ' </td> ' +
                                                    '<td> ' + (finanziamento.DescTipologia || '') + ' </td> ' +
                                                    '<td>' + (finanziamento.NumDelibera || '') + ' </td> ' +
                                                    '<td>' + numRateResidue(finanziamento) + '</td> ' +
                                                    '<td>' + saldoDisp(finanziamento.ImportoErogato, finanziamento.Divisa) + '</td> ' +
                                                    '</tr>';
                                            }
                                        }
                                        return '';
                                    },
                                    updateAccount: function(rapportoSelezionato) {
                                        return aggiornaIntestazione(rapportoSelezionato);
                                    },
                                    initialItemSelector: function(index, item) {
                                        if (selectedId == '') {
                                            return false;
                                        } else {
                                            if (item.Rapporto != null) {
                                                if (item.Rapporto != null) {
                                                    if (selectedId == item.Rapporto.Id) {
                                                        return true;
                                                    }
                                                }
                                            }
                                        }
                                        return false;
                                    },
                                    selectFirst: true,
                                    minElementForNotPagination: numElementForNotPagination,
                                    resNoRecord: noRecord,
                                    columOrder: [
                                        [1, "asc"],
                                        [2, "asc"],
                                        [3, "asc"],
                                        [4, "asc"]
                                    ]

                                };

                                function dataDisplay(datatmp) {
                                    if (datatmp) {
                                        return sdk.utils.text.formatDateTime(datatmp, 'DD/MM/YYYY');
                                    }
                                    return "&nbsp;";
                                }

                                function saldoDisplay(saldotmp) {
                                    if (saldotmp) {
                                        return sdk.utils.text.formatAmmountDecimal(saldotmp); // + ' ' + GetCurrencySign(saldotmp.CodiceDivisa);
                                    }
                                    return "0,00";
                                }


                                function aggiornaIntestazione(rapportoSelezionato) {
                                    var ctxRapportoSel = ctx;
                                    if (rapportoSelezionato) {
                                        sdk.utils.log.debugMessage("Financing: select rapporto finanziamento");
                                        var localFinanziamento = rapportoSelezionato.Finanziamento;

                                        if (localFinanziamento) {
                                            $('#intestazione', ctxRapportoSel).html((localFinanziamento.Intestatario == null ? '' : localFinanziamento.Intestatario));
                                            $('#importo', ctxRapportoSel).html((localFinanziamento.ImportoErogato == null ? '' : saldoDisplay(localFinanziamento.ImportoErogato)) + " " + (localFinanziamento.Divisa == null ? '' : localFinanziamento.Divisa));
                                            $('#tipo', ctxRapportoSel).html((localFinanziamento.DescTipologia == null ? '' : localFinanziamento.DescTipologia) + " " + (localFinanziamento.NumDelibera == null ? '' : localFinanziamento.NumDelibera));

                                            var rateResidueAmmortamento = localFinanziamento.NumRateResidueAmmortamento == null ? '0' : localFinanziamento.NumRateResidueAmmortamento;
                                            var rateResiduePreAmmortamento = localFinanziamento.NumRateResiduePreAmmortamento == null ? '0' : localFinanziamento.NumRateResiduePreAmmortamento;
                                            var residuo = parseInt(rateResidueAmmortamento) + parseInt(rateResiduePreAmmortamento);
                                            $('#residuo').html(residuo);

                                            //Inizio Gestione visibilità aree
                                            $('#selezioneRapportoSingolo').show();
                                            $('#panelMessageRapporti').hide();
                                            //Fine Gestione visibilità aree
                                            //Inizio Gestione change chiama la ListenChange che si trova nella pagina che ospita questo codice
                                            $('#Key').html((localFinanziamento.Key.Crypted == null ? '' : localFinanziamento.Key.Crypted));
                                            try {
                                                ListenChange();
                                            } catch (err) {
                                                sdk.utils.log.errorMessage("Finanziamenti: ListenChange not found!");
                                            }
                                            //Fine Gestione change chiama la ListenChange che si trova nella pagina che ospita questo codice
                                        }

                                    } else {
                                        $('#intestazione', ctxRapportoSel).html('');
                                        $('#importo', ctxRapportoSel).html('');
                                        $('#tipo', ctxRapportoSel).html('');
                                        $('#resiudo', ctxRapportoSel).html('');

                                    }
                                    // chiudo la dataTable dopo aver selezionato un elemento ed aggiornato l'intestazione
                                    $('.btnSelezioneCC', ctx).removeClass('open');
                                    $('.tabSelezioneCC', ctx).slideUp(300);
                                }

                                $('#itemSelectorTable', ctx).itemSelectorPage({ param: param });
                            }


                        });
                        </script>
                    </div>
                </div>


                
                <div id="AreaFinanziamento" class="section" style="display: block;">
                    <div class="white-block">
                        <div class="col-xs-6">
                            <div class="white-block">&nbsp;</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="tabs tabs-style-topline">
                                <nav>
                                    <ul id="ulSezioni">
                                        <li id="1" class="tabsfin-style-border tab-current" data-callcont="areaDettagli"><a href="#" style="text-decoration: none">Dettagli</a></li>
                                        <li id="2" class="tabsfin-style-border" data-callcont="areaAmmortamento"><a href="#" style="text-decoration: none">Ammortamento</a></li>
                                        <li id="3" class="tabsfin-style-border" data-callcont="areaPreammortamento"><a href="#" style="text-decoration: none">Pre Ammortamento</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                   
                    <!-- DETTAGLI -->
                    <div class="section" id="areaDettagli" style="display: block;">
                    

                    <div class="row">
                
                        <div class="col-xs-6 white-block" id="subArea-contoAppoggio">
                            <div class="col-xs-12">
                                <div class="text-center">
                                    <h1>
                                        Conto di appoggio
                                    </h1>
                                </div>
                            </div>
                            
                            <div class="col-xs-12">
                                <div class="col-xs-5">
                                    Conto di addebito
                                </div>
                                <div class="col-xs-7">
                                    <label class="control-label" id="dettagli-contoAppoggio-conto" style="padding:0">000000036186</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="col-xs-5">
                                    Filiale
                                </div>
                                <div class="col-xs-7">
                                    <label class="control-label" id="dettagli-contoAppoggio-filiale" style="padding:0">VERONA AG. 1</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="col-xs-5">
                                    Intestato a
                                </div>
                                <div class="col-xs-7">
                                    <label class="control-label" id="dettagli-contoAppoggio-intestato" style="padding:0">GE.CO.VE. SRL</label>
                                </div>
                            </div>
                            
                        </div>
                
                        <div class="col-xs-6 white-block" id="subArea-pianiAmmortamento">
                            <div class="col-xs-12">
                                <div class="text-center">
                                    <h1>
                                        Piano di Ammortamento
                                    </h1>
                                </div>
                            </div>
                
                            <div class="col-xs-12">
                                <div class="col-xs-5">
                                    Periodo
                                </div>
                                <div class="col-xs-7">
                                    <label class="control-label" id="dettagli-pianiAmmortimento-periodo" style="padding:0">SEMESTRALE</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="col-xs-5">
                                    Numero rate
                                </div>
                                <div class="col-xs-7">
                                    <label class="control-label" id="dettagli-pianiAmmortimento-numerorate" style="padding:0">60</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="col-xs-5">
                                    Rate residue
                                </div>
                                <div class="col-xs-7">
                                    <label class="control-label" id="dettagli-pianiAmmortimento-rateresidue" style="padding:0">43</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="col-xs-5">
                                    Numero Delibera
                                </div>
                                <div class="col-xs-7">
                                    <label class="control-label" id="dettagli-pianiAmmortimento-numerodelibera" style="padding:0">900059333</label>
                                </div>
                            </div>
                
                        </div>
                
                    </div>
                    <div class="row">
                
                        <div class="col-xs-6 white-block" id="subArea-rifTemporali">
                            <div class="col-xs-12">
                                <div class="text-center">
                                    <h1>
                                        Riferimenti Temporali
                                    </h1>
                                </div>
                            </div>
                
                            <div class="col-xs-12">
                                <div class="col-xs-5">
                                    Data stipula
                                </div>
                                <div class="col-xs-7">
                                    <label class="control-label" id="dettagli-riferimentiTemporali-datastipula" style="padding:0">21/10/2010</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="col-xs-5">
                                    Scadenza prossima rata
                                </div>
                                <div class="col-xs-7">
                                    <label class="control-label" id="dettagli-riferimentiTemporali-scadproxrata" style="padding:0">31/12/2019</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="col-xs-5">
                                    Data erogazione
                                </div>
                                <div class="col-xs-7">
                                    <label class="control-label" id="dettagli-riferimentiTemporali-dataerogazione" style="padding:0">21/10/2010</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="col-xs-5">
                                    Scadenza ultima rata
                                </div>
                                <div class="col-xs-7">
                                    <label class="control-label" id="dettagli-riferimentiTemporali-scadultimarata" style="padding:0">31/12/2040</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="col-xs-5">
                                    Data decorrenza tasso
                                </div>
                                <div class="col-xs-7">
                                    <label class="control-label" id="dettagli-riferimentiTemporali-datadecctasso" style="padding:0">01/09/2019</label>
                                </div>
                            </div>
                
                        </div>
                
                        <div class="col-xs-6 white-block" id="subArea-impoCondizioni">
                            <div class="col-xs-12">
                                <div class="text-center">
                                    <h1>
                                        Importo e Condizioni
                                    </h1>
                                </div>
                            </div>
                
                            <div class="col-xs-12">
                                <div class="col-xs-5">
                                    Importo accordato
                                </div>
                                <div class="col-xs-7">
                                    <label class="control-label" id="dettagli-importoCondizioni-importoaccordato" style="padding:0">97.000,00 EUR</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="col-xs-5">
                                    Spese
                                </div>
                                <div class="col-xs-7">
                                    <label class="control-label" id="dettagli-importoCondizioni-spese" style="padding:0">1,00 EUR</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="col-xs-5">
                                    Debito residuo
                                </div>
                                <div class="col-xs-7">
                                    <label class="control-label" id="dettagli-importoCondizioni-debitoresiduo" style="padding:0">72.923,80 EUR</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="col-xs-5">
                                    Importo di mora
                                </div>
                                <div class="col-xs-7">
                                    <label class="control-label" id="dettagli-importoCondizioni-importodimora" style="padding:0">0,00 EUR</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="col-xs-5">
                                    Tasso in vigore
                                </div>
                                <div class="col-xs-7">
                                    <label class="control-label" id="dettagli-importoCondizioni-tassoinvigore" style="padding:0">0,590%</label>
                                </div>
                            </div>
                
                        </div>
                
                    </div>
                    <div class="row">
                
                        <div class="col-xs-6 white-block" id="subArea-pianoPreAmmortamento">
                            <div class="col-xs-12">
                                <div class="text-center">
                                    <h1>
                                        Piano di preammortamento
                                    </h1>
                                </div>
                            </div>
                
                            <div class="col-xs-12">
                                <div class="col-xs-5">
                                    Periodo
                                </div>
                                <div class="col-xs-7">
                                    <label class="control-label" id="dettagli-pianiPreAmmortimento-periodo" style="padding:0">SEMESTRALE</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="col-xs-5">
                                    Numero rate
                                </div>
                                <div class="col-xs-7">
                                    <label class="control-label" id="dettagli-pianiPreAmmortimento-numerorate" style="padding:0">1</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="col-xs-5">
                                    Rate residue
                                </div>
                                <div class="col-xs-7">
                                    <label class="control-label" id="dettagli-pianiPreAmmortimento-rateresidue" style="padding:0">0</label>
                                </div>
                            </div>
                
                        </div>
                
                    </div>
                
                
                                </div>

                    <!-- FINE DETTAGLI -->


                    <!-- AMMORTAMENTO -->
                    <div class="section clearfix" id="areaAmmortamento" style="display: none;">
                    <h3 class="titleSection">Parametri di ricerca</h3>
                    <div class="col-xs-10">
                        


    <div class="bs-example form-horizontal">
        <div class="form-group">
            
            <div class="form-field-input col-xs-3">
                <label class="control-label">Tipo rata</label>
                <div class="form-field">
                    <select id="TipoRata" name="TipoRata" class="form-control" style="height:27px">
                        <option value="">Tutte</option>
                        <option value="Pagata">Pagata</option>
                        <option value="Scaduta">Scaduta</option>
                        <option value="DaPagare">Da Pagare</option>
                        <option value="ParzialmentePagata">Parzialmente pagata</option>
                    </select>
                </div>
            </div>
            
            
            <div class="col-xs-6">
                
                <div class="form-field-input col-xs-6">
                    <label class="control-label">Periodo dal</label>
                    <div class="form-field">
                        <div class="col-xs-9">
                            <input name="searc-datada" class="form-control hasDatepicker" id="searc-datada" type="text" maxlength="10" style="height:26px">
                        </div>
                        <div class="col-xs-3">
                            <a class="icon-replace icon-calendar active col-xs-1" href="javascript:void(0);" id="cal1">cal1</a>
                        </div>
                    </div>
                </div>
                <div class="form-field-input col-xs-6">
                    <label class="control-label">al</label>
                    <div class="form-field">
                        <div class="col-xs-9">
                            <input name="searc-dataa" class="form-control hasDatepicker" id="searc-dataa" type="text" maxlength="10" style="height:26px">
                        </div>
                        <div class="col-xs-3">
                            <a class="icon-replace icon-calendar active col-xs-1" href="javascript:void(0);" id="cal2">cal2</a>
                        </div>
                    </div>
                </div>

            </div>

                
        </div>
        <script type="text/javascript">
            $(function () {
                
            });
        </script>
    </div>


    



                    </div>
                    <div class="col-xs-12 section clearfix">

                    </div>
                    <div class="pull-right margin-bottom20">
                        <button class="btn btn-primary" id="btnSearchAmmortamento" type="button" style="display: inline-block;">Ricerca</button>
                        <button class="btn btn-primary" id="btnSearchPreAmmortamento" type="button" style="display: none;">Ricerca</button>
                    </div>

                    <div class="section clearfix" id="titleList">
                        <h3 class="titleSection resultList finanziamenti">Piano di Ammortamento</h3>
                    </div>

                    <div class="">
                        <!--tabSelezione-->
                        <div class="dataTables_wrapper">
                            <div id="tableAmmortamento_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="tableAmmortamento_length"><label></label></div><table id="tableAmmortamento" class="table table-striped no-footer dataTable" role="grid" aria-describedby="tableAmmortamento_info">
                                <tbody><tr tmindex="0" role="row" class="odd"><td class="hidden"></td> <td style="text-align:center">1 </td> <td style="text-align:center">30/06/2011</td> <td style="text-align:center">2.242,23  </td> <td style="text-align:center">1.180,66 </td> <td style="text-align:center">1.059,32 </td> <td style="text-align:center">Pagata</td> </tr><tr tmindex="1" role="row" class="even"><td class="hidden"></td> <td style="text-align:center">2 </td> <td style="text-align:center">31/12/2011</td> <td style="text-align:center">2.336,35  </td> <td style="text-align:center">1.108,00 </td> <td style="text-align:center">1.226,10 </td> <td style="text-align:center">Pagata</td> </tr><tr tmindex="2" role="row" class="odd"><td class="hidden"></td> <td style="text-align:center">3 </td> <td style="text-align:center">30/06/2012</td> <td style="text-align:center">2.089,92  </td> <td style="text-align:center">1.129,30 </td> <td style="text-align:center">958,37 </td> <td style="text-align:center">Pagata</td> </tr><tr tmindex="3" role="row" class="even"><td class="hidden"></td> <td style="text-align:center">4 </td> <td style="text-align:center">31/12/2012</td> <td style="text-align:center">1.931,75  </td> <td style="text-align:center">1.288,87 </td> <td style="text-align:center">640,63 </td> <td style="text-align:center">Pagata</td> </tr><tr tmindex="4" role="row" class="odd"><td class="hidden"></td> <td style="text-align:center">5 </td> <td style="text-align:center">30/06/2013</td> <td style="text-align:center">1.953,53  </td> <td style="text-align:center">1.393,80 </td> <td style="text-align:center">557,48 </td> <td style="text-align:center">Pagata</td> </tr><tr tmindex="5" role="row" class="even"><td class="hidden"></td> <td style="text-align:center">6 </td> <td style="text-align:center">31/12/2013</td> <td style="text-align:center">1.956,24  </td> <td style="text-align:center">1.397,71 </td> <td style="text-align:center">556,28 </td> <td style="text-align:center">Pagata</td> </tr><tr tmindex="6" role="row" class="odd"><td class="hidden"></td> <td style="text-align:center">7 </td> <td style="text-align:center">30/06/2014</td> <td style="text-align:center">1.980,54  </td> <td style="text-align:center">1.394,30 </td> <td style="text-align:center">583,99 </td> <td style="text-align:center">Pagata</td> </tr><tr tmindex="7" role="row" class="even"><td class="hidden"></td> <td style="text-align:center">8 </td> <td style="text-align:center">31/12/2014</td> <td style="text-align:center">1.917,72  </td> <td style="text-align:center">1.406,43 </td> <td style="text-align:center">509,04 </td> <td style="text-align:center">Pagata</td> </tr></tbody>
                                <thead><tr role="row" class=""><th style="width: 0px;" class="hidden sorting_disabled" rowspan="1" colspan="1">&nbsp;</th><th style="width: 114px;" class="sorting_disabled" rowspan="1" colspan="1">Numero rata</th><th style="width: 91px;" class="sorting_disabled" rowspan="1" colspan="1">Scadenza</th><th style="width: 74px;" class="sorting_disabled" rowspan="1" colspan="1">Importo</th><th style="width: 118px;" class="sorting_disabled" rowspan="1" colspan="1">Quota capitale</th><th style="width: 118px;" class="sorting_disabled" rowspan="1" colspan="1">Quota interessi</th><th style="width: 118px;" class="sorting_disabled" rowspan="1" colspan="1">Stato</th></tr></thead>
                            </table><div class="dataTables_paginate paging_simple_numbers" id="tableAmmortamento_paginate"><a class="paginate_button previous disabled" aria-controls="tableAmmortamento" data-dt-idx="0" tabindex="0" id="tableAmmortamento_previous">Prec.</a><span><a class="paginate_button current" aria-controls="tableAmmortamento" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="tableAmmortamento" data-dt-idx="2" tabindex="0">2</a><a class="paginate_button " aria-controls="tableAmmortamento" data-dt-idx="3" tabindex="0">3</a><a class="paginate_button " aria-controls="tableAmmortamento" data-dt-idx="4" tabindex="0">4</a><a class="paginate_button " aria-controls="tableAmmortamento" data-dt-idx="5" tabindex="0">5</a><span class="ellipsis">…</span><a class="paginate_button " aria-controls="tableAmmortamento" data-dt-idx="6" tabindex="0">8</a></span><a class="paginate_button next" aria-controls="tableAmmortamento" data-dt-idx="7" tabindex="0" id="tableAmmortamento_next">Succ.</a></div></div>
                        </div>
                    </div>
                </div>
                    <!-- FINE AMMORTAMENTO -->


                    <!-- PREAMMORTAMENTO -->
                    <div class="section clearfix" id="areaPreammortamento" style="display: none;">
                    <h3 class="titleSection">Parametri di ricerca</h3>
                    <div class="col-xs-10">
                        


    <div class="bs-example form-horizontal">
        <div class="form-group">
            
            <div class="form-field-input col-xs-3">
                <label class="control-label">Tipo rata</label>
                <div class="form-field">
                    <select id="TipoRata" name="TipoRata" class="form-control" style="height:27px">
                        <option value="">Tutte</option>
                        <option value="Pagata">Pagata</option>
                        <option value="Scaduta">Scaduta</option>
                        <option value="DaPagare">Da Pagare</option>
                        <option value="ParzialmentePagata">Parzialmente pagata</option>
                    </select>
                </div>
            </div>
            
            
            <div class="col-xs-6">
                
                <div class="form-field-input col-xs-6">
                    <label class="control-label">Periodo dal</label>
                    <div class="form-field">
                        <div class="col-xs-9">
                            <input name="searc-datada" class="form-control hasDatepicker" id="searc-datada" type="text" maxlength="10" style="height:26px">
                        </div>
                        <div class="col-xs-3">
                            <a class="icon-replace icon-calendar active col-xs-1" href="javascript:void(0);" id="cal1">cal1</a>
                        </div>
                    </div>
                </div>
                <div class="form-field-input col-xs-6">
                    <label class="control-label">al</label>
                    <div class="form-field">
                        <div class="col-xs-9">
                            <input name="searc-dataa" class="form-control hasDatepicker" id="searc-dataa" type="text" maxlength="10" style="height:26px">
                        </div>
                        <div class="col-xs-3">
                            <a class="icon-replace icon-calendar active col-xs-1" href="javascript:void(0);" id="cal2">cal2</a>
                        </div>
                    </div>
                </div>

            </div>

                
        </div>
        <script type="text/javascript">
            $(function () {
                
            });
        </script>
    </div>


    



                    </div>
                    <div class="col-xs-12 section clearfix">

                    </div>
                    <div class="pull-right margin-bottom20">
                        <button class="btn btn-primary" id="btnSearchAmmortamento" type="button" style="display: none;">Ricerca</button>
                        <button class="btn btn-primary" id="btnSearchPreAmmortamento" type="button" style="display: inline-block;">Ricerca</button>
                    </div>

                    <div class="section clearfix" id="titleList">
                        <h3 class="titleSection resultList finanziamenti">Piano di Preammortamento</h3>
                    </div>

                    <div class="">
                        <!--tabSelezione-->
                        <div class="dataTables_wrapper">
                            <div id="tableAmmortamento_wrapper" class="dataTables_wrapper no-footer"><table id="tableAmmortamento" class="table table-striped no-footer dataTable" role="grid" aria-describedby="tableAmmortamento_info">
                                <tbody><tr tmindex="0" role="row" class="odd"><td class="hidden"></td> <td style="text-align:center">1 </td> <td style="text-align:center">31/12/2010</td> <td style="text-align:center">382,94  </td> <td style="text-align:center">0,04 </td> <td style="text-align:center">378,94 </td> <td style="text-align:center">Pagata</td> </tr></tbody>
                                <thead><tr role="row" class=""><th style="width: 0px;" class="hidden sorting_disabled" rowspan="1" colspan="1">&nbsp;</th><th style="width: 114px;" class="sorting_disabled" rowspan="1" colspan="1">Numero rata</th><th style="width: 91px;" class="sorting_disabled" rowspan="1" colspan="1">Scadenza</th><th style="width: 74px;" class="sorting_disabled" rowspan="1" colspan="1">Importo</th><th style="width: 118px;" class="sorting_disabled" rowspan="1" colspan="1">Quota capitale</th><th style="width: 118px;" class="sorting_disabled" rowspan="1" colspan="1">Quota interessi</th><th style="width: 118px;" class="sorting_disabled" rowspan="1" colspan="1">Stato</th></tr></thead>
                            </table></div>
                        </div>
                    </div>
                </div>
                    <!-- FINE PREAMMORTAMENTO -->




            </div>

            <div id="areaPrint">
                <div class="pull-right margin-bottom20">
                    <button class="btn btn-primary actionFinancingdett" id="btnPrintDettaglio" type="button" style="display: inline-block;">STAMPA</button>
                    <div class="pull-right actionFinancingamm" id="btnPrintAmmortamento" value="ESPORTA" style="display: none;">
                        <div class="tm-print">
                            <div class="btn-group pull-right actionFinancingamm">
                                <button type="button" class="dropdown-toggle btn btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> ESPORTA <span class="caret" style="margin-left: 12px;"></span> </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="link-button pdf-0" title="documenti pdf" style="padding: 10px; padding-right: 30px; padding-top: 5px; padding-bottom: 5px; font-size: 14px; font-family: Helvetica, Arial, sans-serif; font-weight: bold;">
                                            <div class="icon icon-pdf-x"></div> <span style="margin-left: 12px;">PDF</span> </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="print-popup"></div>
                        </div>
                    </div>
                    <div class="pull-right actionFinancingpreamm" id="btnPrintPreAmmortamento" value="ESPORTA" style="display: none;">
                        <div class="tm-print">
                            <div class="btn-group pull-right actionFinancingpreamm">
                                <button type="button" class="dropdown-toggle btn btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> ESPORTA <span class="caret" style="margin-left: 12px;"></span> </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="link-button pdf-0" title="documenti pdf" style="padding: 10px; padding-right: 30px; padding-top: 5px; padding-bottom: 5px; font-size: 14px; font-family: Helvetica, Arial, sans-serif; font-weight: bold;">
                                            <div class="icon icon-pdf-x"></div> <span style="margin-left: 12px;">PDF</span> </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="print-popup"></div>
                        </div>
                    </div>
                </div>
            </div>

            <script type="text/javascript">
            $(function() {

                var ctx = '#2836de7af6f149a3816bd968d5cfbda6_19';

                $('#areaDettagli').show();
                $('#areaAmmortamento').hide();
                $('#areaPreammortamento').hide();


                $('#ulSezioni > li').click(function() {

                    $("#ulSezioni > li").removeClass("tab-current");
                    var idarea = $(this).addClass("tab-current").attr("data-callcont");
                    $("#areaDettagli, #areaAmmortamento, #areaPreammortamento").hide();
                    $("#" + idarea).show();
                    $("#areaPrint").show();
                    $("#btnPrintDettaglio").toggle(idarea==="areaDettagli");
                    $("#btnPrintAmmortamento").toggle(idarea!=="areaDettagli");
                    
                    
                    

                });


                $('#btnSearchAmmortamento').click(function() {
                    sdk.utils.log.debugMessage("Financing: click button search Ammortamento");
                    areaAmmPreAmm($('#areaAmmortamento'), 2, '/Youbiz.Sdk.Web/Financing/Default', ctx);
                });
                $('#btnSearchPreAmmortamento').click(function() {
                    sdk.utils.log.debugMessage("Financing: click button search PreAmmortamento");
                    areaAmmPreAmm($('#areaAmmortamento'), 3, '/Youbiz.Sdk.Web/Financing/Default', ctx);
                });

                //SEZIONE STAMPA
                $('.btn.btn-primary.actionFinancingdett').click(function() {
                    sdk.utils.log.debugMessage("Financing: click button stampa dettaglio");
                    var searchKey = $('#Key').text();
                    var request = { "NumeroRate": null, "DataDa": null, "DataA": null, "Stato": null, "Key": { "Crypted": searchKey } };
                    sdk.utils.navigateFormForExport('/Youbiz.Sdk.Web/Financing/Default/StampaDettaglio', { 'parameters': request });
                });
                //SEZIONE STAMPA

            });
            </script>
        </div>
    </div>
</div>
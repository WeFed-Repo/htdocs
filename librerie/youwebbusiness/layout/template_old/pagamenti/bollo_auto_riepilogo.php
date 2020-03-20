<div id="MainSection">

<style type="text/css">
    .white-block {
        margin: 10px 0;
    }

        .white-block > div {
            background-color: white;
        }

    .text-center > h1 {
        width: 100%;
        text-transform: uppercase;
        font-size: 1.2em;/*per ridurre il font del titolo dei box*/
    }
</style>

    <div id="450756978d944b3d8e62a19cd880d131_2">
        <div class="riquadro clearfix">

            <div class="pager clearfix pull-right">
                <div class="circle_line">&nbsp;</div>
                <div class="circle current_page">&nbsp;</div>
                <div class="circle current_page">&nbsp;</div>
                <div class="circle ">&nbsp;</div>
            </div>

            <div class="clearfix">
                <div class="flag bolloAuto">&nbsp;</div>
                <h1>Bollo Auto: riepilogo</h1>
            </div>

            <div id="messagePanelAlert">
                









            </div>

            <div data-bind="with: DisposizioneSct">
                <div class="section">
                    <div class="row">
                        <div class="col-xs-6 white-block">
                            <div class="col-xs-12">
                                <div class="text-center">
                                    <h1>
                                        Ordinante
                                    </h1>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="col-xs-4">
                                    Intestato a
                                </div>
                                <div class="col-xs-8">
                                    <label class="control-label" style="padding:0">GESCO S.R.L.</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="col-xs-4">
                                    Iban
                                </div>
                                <div class="col-xs-8">
                                    <label class="control-label" style="padding:0">IT72Y0503411702000000060316</label>
                                </div>
                            </div>
                        </div>

                            <div class="col-xs-6 white-block">
                                <div class="col-xs-12">
                                    <div class="text-center">
                                        <h1>
                                            DATI BOLLO
                                        </h1>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="col-xs-4">
                                        Targa
                                    </div>
                                    <div class="col-xs-8">
                                        <label class="control-label" style="padding:0">CY592WD</label>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="col-xs-4">
                                        Validità mesi
                                    </div>
                                    <div class="col-xs-8">
                                        <label class="control-label" style="padding:0">12</label>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="col-xs-4">
                                        Id. Pagamento
                                    </div>
                                    <div class="col-xs-8">
                                        <label class="control-label" style="padding:0">00010428775</label>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="col-xs-4">
                                        Numero bolletta
                                    </div>
                                    <div class="col-xs-8">
                                        <label class="control-label" style="padding:0">96000000003596706</label>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="col-xs-4">
                                        Importo
                                    </div>
                                    <div class="col-xs-8">
                                        <label class="control-label" style="padding:0"> 151,16</label>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="col-xs-4">
                                        Commissioni
                                    </div>
                                    <div class="col-xs-8">
                                        <label class="control-label" style="padding:0"> 1,87</label>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="col-xs-4">
                                        Totale
                                    </div>
                                    <div class="col-xs-8">
                                        <label class="control-label" style="padding:0"> 153,03</label>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="col-xs-4">
                                        Info. Aggiuntive
                                    </div>
                                    <div class="col-xs-8">
                                        <label class="control-label" style="padding:0">CAUSALE VERSAMENTO	/RFB/96000000003596706/TXT/CY592WD-SET2019/AGO2020-VVINMR61P66H449X-EC TOSCANA-E. 151,16 (DI CUI SAN 2,09 INT 0,02) -  </label>
                                    </div>
                                </div>



                            </div>
                    </div>
                </div>
            </div>


            <div class="section clearfix">
                <h3 class="titleSection">Conferma richiesta</h3>
                <div class="bs-example form-horizontal">
                    <div class="form-group">
                        <div class="col-xs-12">

                            <div class="col-xs-6">
                                Per proseguire con la disposizione, è necessario inserire la password usa e getta riportata sul display del dispositivo di Sicurezza.
                            </div>
                            <div class="col-xs-2">
                                &nbsp;
                            </div>
                            <div class="col-md-5" style="background-color: #f7fcf7; padding-top: 2px;">
                                <span class="col-md-4"><img class="col-md-12" src="/YouBiz.Web/Contents/00000/it-IT/Images/pp/dispositivo_3.gif?v=107" style="width: 110px; height: 43px"></span>
                                <div class="col-md-6" style="padding-top: 8px"><input type="password" class="col-md-12 form-control" id="field-otp" maxlength="6" readonly="readonly" style="cursor: pointer; margin-left: 20px; width: 70px;"></div>
                                <div class="col-md-2"></div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="pull-right margin-bottom20">
            <button class="btn btn-primary" id="btnIndietro" type="button">Indietro</button>
            <button class="btn btn-primary execute" id="btnConferma" type="button">Avanti</button>
        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            var jPanel = $('#450756978d944b3d8e62a19cd880d131_2');
            $('#btnIndietro', jPanel).click(
                function () {
                    koParentTargetGoTo('/YouBiz.Web/BolloAuto/BolloAuto/DataEntry', jPanel);
                });
        });
    </script>
<script type="text/javascript">
                                            $(function () { koRegisterViewModel("bolloautoDataEntry",{"BolloAutoDetail":{"Identifier":null,"BolloAutoId":null,"Categoria":"","ClasseEuro":"","CodiceFiscale":"","CodiceRiduzione":"","CodiceUtenza":"CY592WD","CodiceOperazione":"            ","DataEsecuzione":null,"DataImmatricolazione":null,"DataOraStornabilita":null,"DataInizioValidita":null,"DataOraPagamento":"2019-10-14T16:54:26.753+02:00","Esplicativo":"","IdFastBank":"00008328762","ImportoBollo":151.16,"ImportoCommissioni":1.87,"ImportoInteressi":0.0,"ImportoSanzioni":0.0,"ImportoTotale":153.03,"Memo1":"","Memo2":"","Memo3":"","MesiValidita":12,"Modello":"","NumeroVersamento":"","Peso":"","PesoUnita":"","Portata":"","PortataUnita":"","Potenza":"","RegioneResidenza":"","Sanzioni":false,"Scadenza":null,"TipoAlimentazione":"","UsoVeicolo":"","StatoOperazione":0,"ArrRegioni":null},"BolloAutoDetailCbill":{"Identifer":"00010428775","BillNumber":"96000000003596706","PaymentPeriod":"N/A","ExpireDate":null,"BillerFeeAmount":0.0,"Status":"","InfoCustomer":"","InfoNumber":1,"InfoArea":"CAUSALE VERSAMENTO\t/RFB/96000000003596706/TXT/CY592WD-SET2019/AGO2020-VVINMR61P66H449X-EC TOSCANA-E. 151,16 (DI CUI SAN 2,09 INT 0,02)"},"Rapporto":{"Rapporto":{"Rapporto":{"IdAzienda":"9","Identificativo":"937293","CodiceIban":"IT72Y0503411702000000060316","CodiceAbi":"05034","CodiceCab":"11702","CodiceSwift":"BAPPIT21002","CodiceFiliale":"0002","NumeroRapporto":"000200060316","CodiceDivisa":"EUR","Descrizione":"GESCO SRL","DescrizionePersonalizzata":"GESCO SRL","DescrizioneBanca":null,"DescrizioneFiliale":null,"Tipologia":null,"Identifier":{"Crypt":"ZQxZNJAUeVZWghaW8VGIQMb2Jd+sVBSAsdojAfg+5fZW3oGw3ZUmpjZf/9D2U8bL","Hash":"69167F84DB961AD49C597144057C95FE6654D122FE1300033B699E21AAB7D116"},"RapportoAzienda":null},"SaldoContabile":null,"SaldoLiquido":null,"SaldoDisponibile":null,"SaldoIstantaneo":null,"Identifier":{"Crypt":"ZQxZNJAUeVZWghaW8VGIQMb2Jd+sVBSAsdojAfg+5fZW3oGw3ZUmpjZf/9D2U8bL","Hash":"69167F84DB961AD49C597144057C95FE6654D122FE1300033B699E21AAB7D116"}},"Azienda":{"IdAzienda":9,"CodiceAzienda":"100000005","RagioneSociale":"GESCO S.R.L.","CodiceSia":"AYL8W","CodiceCuc":"0796681G","StatoAzienda":1}},"Bollo":{"Id":null,"Description":null},"Payment":{"DueDate":"2019-10-14T00:00:00+02:00","ValueDate":"2019-10-14T00:00:00+02:00","GrandTotal":0.0,"ChargeAmmount":0.0,"TranCode":null},"BolloAuto":{"Regione":{"IdRegione":"17","Description":"Toscana","Sel":false},"TipoVeicolo":1,"NumeroTargaVeicolo":"CY592WD"}}, true);koUpdateViewModelBinding();}); </script><script type="text/javascript">
    $(function () {
        var jPanel = $('#450756978d944b3d8e62a19cd880d131_2');
        var valueToSubmit = $('#field-otp', jPanel);
        initPinpad({inputPanelName: 'field-otp',settings: {"SecureType":2,"ApplicationPath":"/YouBiz.Web","WorkflowHandlerUri":"","WorkflowHandlerChunkUri":"","CartMode":"38,0,21,10"}});
        $('#btnConferma', jPanel).click(
            function () {
                communicationLoadTargetOnParent('/YouBiz.Web/BolloAuto/BolloAuto/PayBill', jPanel, { pinpadCode: valueToSubmit[0].value });
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        var jPanel = $('#450756978d944b3d8e62a19cd880d131_2');

    });
</script>













</div>
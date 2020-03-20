<?php 
    if ($site == "youweb") 
    {
        ?>        
<section>
    <div class="titButton titButtonIco">
        <i class="icon icon-alert_caution"></i ><h3 class="flLeft">N. 2130321323 - Mutuo Tasso Fisso Finito</h3>
        <div class="btn-align-right">
            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#layerDettaglio">piano di rimborso</a>
        </div>
    </div>
    <form class="formGenerico forcedBorderFormRounded output skin-colonne" role="form">
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <label class="control-label-output">Intestazione</label>
                    <span class="output">Mario Rossi</span>
                </div>
                <div class="col-sm-6">
                    <label class="control-label-output">Conto</label>
                    <span class="output">22/446655</span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <label class="control-label-output">Importo erogato</label>
                    <span class="output">200.000,00 &euro;</span>
                </div>
                <div class="col-sm-6">
                    <label class="control-label-output">Rate totali</label>
                    <span class="output">360</span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <label class="control-label-output">Tasso iniziale</label>
                    <span class="output">1,789%</span>
                </div>
                <div class="col-sm-6">
                    <label class="control-label-output">Data erogazione</label>
                    <span class="output">02/07/1977</span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <label class="control-label-output">Debito residuo</label>
                    <span class="output">85.4234,45 &euro;</span>
                </div>
                <div class="col-sm-6">
                    <label class="control-label-output">Rate residue</label>
                    <span class="output">150</span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <label class="control-label-output">Prossima rata</label>
                    <span class="output">20/05/2019</span>
                </div>
                <div class="col-sm-6">
                    <label class="control-label-output">Periodicit&agrave; rata</label>
                    <span class="output">MENSILE</span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <label class="control-label-output">Tasso attuale</label>
                    <span class="output">1,789%</span>
                </div>
                <div class="col-sm-6">
                    <label class="control-label-output">Decorrenza tasso</label>
                    <span class="output">02/07/1977</span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <label class="control-label-output">Tasso di mora</label>
                    <span class="output">Maggiorazione lorem ipsum dolor sit</span>
                </div>
                <div class="col-sm-6">
                    <label class="control-label-output">Spese incasso rata</label>
                    <span class="output">2,00 &euro;</span>
                </div>
            </div>
        </div>
    </form>
</section>

<div class="modal fade" id="layerDettaglio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog  modal-lg finanziamento" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i></a>
                <h2 class="modal-title" id="myModalLabel">Piano di rimborso</h2>
                <div class="info-print">
                    <div class="row">
                        <div class="col-sm-2">
                            <img src="/HT/fe/img/logo_bancobpm@2x.png" class="logo_you" alt="Logo Banco BPM">
                            <img src="/WB/fe/img/logo_print.gif" class="logo_we" alt="Stampa">
                        </div>
                        <div class="col-sm-8">
                            <p>Mario Rossi, Nome Cognome</p>
                            <p>N. 597656789</p>
                            <p>Mutuo Tasso Fisso Finito</p>
                            <p>Prospetto generato in data: 00.00.2019</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <a href="#" class="flRight" onclick="window.print()"><i class="icon icon-print_ria_filled"></i></a>
                    <div class="table-scroll">
                        <table id="tableVertical">
                            <thead>
                                <tr>
                                    <th class="left">N. Rata</th>
                                    <th class="left">Scadenza</th>
                                    <th class="right">Importo</th>
                                    <th class="right">Quota capitale</th>
                                    <th class="right">Quota interessi</th>
                                    <th class="right">Spese incasso</th>
                                    <th class="right">Stato</th>
                                    <th class="right">Debito residuo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="dispari">
                                    <td class="left">0</td>
                                    <td class="left">30/10/2019</td>
                                    <td class="right">3.200,63 €</td>
                                    <td class="right">2.200,63 €</td>
                                    <td class="right">22,00</td>
                                    <td class="right">2,00 &euro;</td>
                                    <td class="left">pagato</td>
                                    <td class="right">120.200,63 €</td>
                                </tr>
                                <tr class="pari">
                                    <td class="left">0</td>
                                    <td class="left">30/10/2019</td>
                                    <td class="right">3.200,63 €</td>
                                    <td class="right">2.200,63 €</td>
                                    <td class="right">22,00</td>
                                    <td class="right">2,00 &euro;</td>
                                    <td class="left">pagato</td>
                                    <td class="right">2.200,63 €</td>
                                </tr>
                                <tr class="dispari">
                                    <td class="left">0</td>
                                    <td class="left">30/10/2019</td>
                                    <td class="right">3.200,63 €</td>
                                    <td class="right">2.200,63 €</td>
                                    <td class="right">22,00</td>
                                    <td class="right">2,00 &euro;</td>
                                    <td class="left">pagato</td>
                                    <td class="right">120.200,63 €</td>
                                </tr>
                                <tr class="pari">
                                    <td class="left">0</td>
                                    <td class="left">30/10/2019</td>
                                    <td class="right">3.200,63 €</td>
                                    <td class="right">2.200,63 €</td>
                                    <td class="right">22,00</td>
                                    <td class="right">2,00 &euro;</td>
                                    <td class="left">pagato</td>
                                    <td class="right">2.200,63 €</td>
                                </tr>
                                <tr class="dispari">
                                    <td class="left">0</td>
                                    <td class="left">30/10/2019</td>
                                    <td class="right">3.200,63 €</td>
                                    <td class="right">2.200,63 €</td>
                                    <td class="right">22,00</td>
                                    <td class="right">2,00 &euro;</td>
                                    <td class="left">pagato</td>
                                    <td class="right">120.200,63 €</td>
                                </tr>
                                <tr class="pari">
                                    <td class="left">0</td>
                                    <td class="left">30/10/2019</td>
                                    <td class="right">3.200,63 €</td>
                                    <td class="right">2.200,63 €</td>
                                    <td class="right">22,00</td>
                                    <td class="right">2,00 &euro;</td>
                                    <td class="left">pagato</td>
                                    <td class="right">2.200,63 €</td>
                                </tr>
                                <tr class="dispari">
                                    <td class="left">0</td>
                                    <td class="left">30/10/2019</td>
                                    <td class="right">3.200,63 €</td>
                                    <td class="right">2.200,63 €</td>
                                    <td class="right">22,00</td>
                                    <td class="right">2,00 &euro;</td>
                                    <td class="left">pagato</td>
                                    <td class="right">120.200,63 €</td>
                                </tr>
                                <tr class="pari">
                                    <td class="left">0</td>
                                    <td class="left">30/10/2019</td>
                                    <td class="right">3.200,63 €</td>
                                    <td class="right">2.200,63 €</td>
                                    <td class="right">22,00</td>
                                    <td class="right">2,00 &euro;</td>
                                    <td class="left">pagato</td>
                                    <td class="right">2.200,63 €</td>
                                </tr>
                                <tr class="dispari">
                                    <td class="left">0</td>
                                    <td class="left">30/10/2019</td>
                                    <td class="right">3.200,63 €</td>
                                    <td class="right">2.200,63 €</td>
                                    <td class="right">22,00</td>
                                    <td class="right">2,00 &euro;</td>
                                    <td class="left">pagato</td>
                                    <td class="right">120.200,63 €</td>
                                </tr>
                                <tr class="pari">
                                    <td class="left">0</td>
                                    <td class="left">30/10/2019</td>
                                    <td class="right">3.200,63 €</td>
                                    <td class="right">2.200,63 €</td>
                                    <td class="right">22,00</td>
                                    <td class="right">2,00 &euro;</td>
                                    <td class="left">pagato</td>
                                    <td class="right">2.200,63 €</td>
                                </tr>
                                <tr class="dispari">
                                    <td class="left">0</td>
                                    <td class="left">30/10/2019</td>
                                    <td class="right">3.200,63 €</td>
                                    <td class="right">2.200,63 €</td>
                                    <td class="right">22,00</td>
                                    <td class="right">2,00 &euro;</td>
                                    <td class="left">pagato</td>
                                    <td class="right">120.200,63 €</td>
                                </tr>
                                <tr class="pari">
                                    <td class="left">0</td>
                                    <td class="left">30/10/2019</td>
                                    <td class="right">3.200,63 €</td>
                                    <td class="right">2.200,63 €</td>
                                    <td class="right">22,00</td>
                                    <td class="right">2,00 &euro;</td>
                                    <td class="left">pagato</td>
                                    <td class="right">2.200,63 €</td>
                                </tr>
                                <tr class="dispari">
                                    <td class="left">0</td>
                                    <td class="left">30/10/2019</td>
                                    <td class="right">3.200,63 €</td>
                                    <td class="right">2.200,63 €</td>
                                    <td class="right">22,00</td>
                                    <td class="right">2,00 &euro;</td>
                                    <td class="left">pagato</td>
                                    <td class="right">120.200,63 €</td>
                                </tr>
                                <tr class="pari">
                                    <td class="left">0</td>
                                    <td class="left">30/10/2019</td>
                                    <td class="right">3.200,63 €</td>
                                    <td class="right">2.200,63 €</td>
                                    <td class="right">22,00</td>
                                    <td class="right">2,00 &euro;</td>
                                    <td class="left">pagato</td>
                                    <td class="right">2.200,63 €</td>
                                </tr>
                                <tr class="dispari">
                                    <td class="left">0</td>
                                    <td class="left">30/10/2019</td>
                                    <td class="right">3.200,63 €</td>
                                    <td class="right">2.200,63 €</td>
                                    <td class="right">22,00</td>
                                    <td class="right">2,00 &euro;</td>
                                    <td class="left">pagato</td>
                                    <td class="right">120.200,63 €</td>
                                </tr>
                                <tr class="pari">
                                    <td class="left">0</td>
                                    <td class="left">30/10/2019</td>
                                    <td class="right">3.200,63 €</td>
                                    <td class="right">2.200,63 €</td>
                                    <td class="right">22,00</td>
                                    <td class="right">2,00 &euro;</td>
                                    <td class="left">pagato</td>
                                    <td class="right">2.200,63 €</td>
                                </tr>
                                <tr class="dispari">
                                    <td class="left">0</td>
                                    <td class="left">30/10/2019</td>
                                    <td class="right">3.200,63 €</td>
                                    <td class="right">2.200,63 €</td>
                                    <td class="right">22,00</td>
                                    <td class="right">2,00 &euro;</td>
                                    <td class="left">pagato</td>
                                    <td class="right">120.200,63 €</td>
                                </tr>
                                <tr class="pari">
                                    <td class="left">0</td>
                                    <td class="left">30/10/2019</td>
                                    <td class="right">3.200,63 €</td>
                                    <td class="right">2.200,63 €</td>
                                    <td class="right">22,00</td>
                                    <td class="right">2,00 &euro;</td>
                                    <td class="left">pagato</td>
                                    <td class="right">2.200,63 €</td>
                                </tr>
                                <tr class="dispari">
                                    <td class="left">0</td>
                                    <td class="left">30/10/2019</td>
                                    <td class="right">3.200,63 €</td>
                                    <td class="right">2.200,63 €</td>
                                    <td class="right">22,00</td>
                                    <td class="right">2,00 &euro;</td>
                                    <td class="left">pagato</td>
                                    <td class="right">120.200,63 €</td>
                                </tr>
                                <tr class="pari">
                                    <td class="left">0</td>
                                    <td class="left">30/10/2019</td>
                                    <td class="right">3.200,63 €</td>
                                    <td class="right">2.200,63 €</td>
                                    <td class="right">22,00</td>
                                    <td class="right">2,00 &euro;</td>
                                    <td class="left">pagato</td>
                                    <td class="right">2.200,63 €</td>
                                </tr>
                                <tr class="dispari">
                                    <td class="left">0</td>
                                    <td class="left">30/10/2019</td>
                                    <td class="right">3.200,63 €</td>
                                    <td class="right">2.200,63 €</td>
                                    <td class="right">22,00</td>
                                    <td class="right">2,00 &euro;</td>
                                    <td class="left">pagato</td>
                                    <td class="right">120.200,63 €</td>
                                </tr>
                                <tr class="pari">
                                    <td class="left">0</td>
                                    <td class="left">30/10/2019</td>
                                    <td class="right">3.200,63 €</td>
                                    <td class="right">2.200,63 €</td>
                                    <td class="right">22,00</td>
                                    <td class="right">2,00 &euro;</td>
                                    <td class="left">pagato</td>
                                    <td class="right">2.200,63 €</td>
                                </tr>
                                <tr class="dispari">
                                    <td class="left">0</td>
                                    <td class="left">30/10/2019</td>
                                    <td class="right">3.200,63 €</td>
                                    <td class="right">2.200,63 €</td>
                                    <td class="right">22,00</td>
                                    <td class="right">2,00 &euro;</td>
                                    <td class="left">pagato</td>
                                    <td class="right">120.200,63 €</td>
                                </tr>
                                <tr class="pari">
                                    <td class="left">0</td>
                                    <td class="left">30/10/2019</td>
                                    <td class="right">3.200,63 €</td>
                                    <td class="right">2.200,63 €</td>
                                    <td class="right">22,00</td>
                                    <td class="right">2,00 &euro;</td>
                                    <td class="left">pagato</td>
                                    <td class="right">2.200,63 €</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="left" colspan="2">Totale</th>
                                    <th class="right">20.000.000,23</th>
                                    <th class="right">20.000</th>
                                    <th class="right">20.000</th>
                                    <th class="right">200</th>
                                    <th class="right"></th>
                                    <th class="right">20.000</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <script>
                function verticalColonna() {
                    if (isSmallDevice) {
                        $('#tableVertical').bootstrapTable('destroy').bootstrapTable({
                            cardView: true
                        })
                    }
                }

                $(function () {
                    findSmartDevice();
                    verticalColonna();
                });
                $(window).resize(function () {
                    findSmartDevice();
                    verticalColonna()
                });
            </script>

        </div>
    </div>
</div>
<?php
}?> 

<?php 
    if ($site == "webank") 
    {
        ?>
        PER WEBANK CASISTICA NON CONTEPLATA
<?php
}?> 
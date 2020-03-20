<div id="MainSection">
                            




<div class="row" id="6fa26857_a014_4184_819e_6d0cbb83ba49">
    <div class="riquadro clearfix">
        <div class="pager clearfix pull-right">
            <div class="circle_line">&nbsp;</div>
            <div class="circle current_page">&nbsp;</div>
            <div class="circle ">&nbsp;</div>
        </div>
        <div class="clearfix">
            <div class="flag riepilogo">&nbsp;</div>
            <h1>Esiti Incassi</h1>
        </div>
        <div class="messagePanel">
        </div>
        
        <div class="section clearfix">
            <h3 class="titleSection">Tipologie</h3>
            <div class="row margin-top20">
                
                        <div class="row">

                        <div class="col-xs-4">
                            <div class="riquadro clearfix">
                                <h4>Riba - Rid - Mav</h4>

                                <div class="group-info" style="white-space: nowrap;">
                                        <a href="#" class="nav-dynamic box-icon icon-esitiRiba" title="Riba - Rid - Mav" nav-location="/Anchise2.Web/IncassiRiba/SearchEsitiIncassoRiba" nav-parameters="" nav-method="post" nav-target="_self"></a>
                                    <p style="display: table; white-space: normal;">
                                        Descrizione:<br>

                                        
                                        <strong>Esiti Riba - Rid - Mav</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="riquadro clearfix">
                                <h4>Sdd</h4>

                                <div class="group-info" style="white-space: nowrap;">
                                        <a href="#" class="nav-dynamic box-icon icon-esitiDirectDebit" title="Sdd" nav-location="/Anchise2.Web/Sdd/SearchEsiti" nav-parameters="" nav-method="post" nav-target="_self"></a>
                                    <p style="display: table; white-space: normal;">
                                        Descrizione:<br>

                                        
                                        <strong>Esiti Sepa Direct Debit</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="riquadro clearfix">
                                <h4>Bollettini Bancari</h4>

                                <div class="group-info" style="white-space: nowrap;">
                                        <a href="#" class="nav-dynamic box-icon icon-esitiBollettiniBancari" title="Bollettini Bancari" nav-location="/youbiz.web/Integration/Home/IndexAnchise/26" nav-parameters="" nav-method="post" nav-target="_self"></a>
                                    <p style="display: table; white-space: normal;">
                                        Descrizione:<br>

                                        
                                        <strong>Esiti Bollettini Bancari</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                           </div><div class="row">
                        <div class="col-xs-4">
                            <div class="riquadro clearfix">
                                <h4>Allineamento Rid</h4>

                                <div class="group-info" style="white-space: nowrap;">
                                        <a href="#" class="nav-dynamic box-icon icon-esitiAllineamentoArchivi" title="Allineamento Rid" nav-location="/youbiz.web/Integration/Home/IndexAnchise/85" nav-parameters="" nav-method="post" nav-target="_self"></a>
                                    <p style="display: table; white-space: normal;">
                                        Descrizione:<br>

                                        
                                        <strong>Esiti Allineamento Rid</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="riquadro clearfix">
                                <h4>Allineamento Seda</h4>

                                <div class="group-info" style="white-space: nowrap;">
                                        <a href="#" class="nav-dynamic box-icon icon-esitiAllineamentoSeda" title="Allineamento Seda" nav-location="/Anchise2.Web/Seda/SearchEsitiAllineamento/Index" nav-parameters="" nav-method="post" nav-target="_self"></a>
                                    <p style="display: table; white-space: normal;">
                                        Descrizione:<br>

                                        
                                        <strong>Esiti Allineamento Seda</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="riquadro clearfix">
                                <h4>Allineamento Iban</h4>

                                <div class="group-info" style="white-space: nowrap;">
                                        <a href="#" class="nav-dynamic box-icon icon-esitiAllineamentoIban" title="Allineamento Iban" nav-location="/youbiz.web/Integration/Home/IndexAnchise/519" nav-parameters="" nav-method="post" nav-target="_self"></a>
                                    <p style="display: table; white-space: normal;">
                                        Descrizione:<br>

                                        
                                        <strong>Esiti Allineamento Iban</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                           </div><div class="row">
                        <div class="col-xs-4">
                            <div class="riquadro clearfix">
                                <h4>Beneficiario</h4>

                                <div class="group-info" style="white-space: nowrap;">
                                        <a href="#" class="nav-dynamic box-icon icon-esitiBeneficiario" title="Beneficiario" nav-location="/Anchise2.Web/BonificoSct/EsitoBeneficiario" nav-parameters="" nav-method="post" nav-target="_self"></a>
                                    <p style="display: table; white-space: normal;">
                                        Descrizione:<br>

                                        
                                        <strong>Esiti al Beneficiario</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                                            </div>
            </div>
        </div>
        
    </div>
    <div class="pull-right margin-bottom20">
        <!--<button type="button" class="btn btn-primary" onclick="">Accedi</button>-->
    </div>
    <div class="clearfix"></div>

</div>

<script type="text/javascript">
    $(function () {

        $.each($('.nav-dynamic', '#6fa26857_a014_4184_819e_6d0cbb83ba49'), function (index, item) {
            var jItem = $(item);
            var location = jItem.attr('nav-location');
            // solo se location (url) è valorizzato aggancio l'evento di click
            if (location) {
                jItem.click(function () {
                    navigateForm(this);
                });
            }
        });

        // metodo che permette di adeguare l'altezza del riquadro a quello di dimensione massima a seguito della presenza o meno di un sottotitolo (contenuto nella proprietà Content)
        var maxHeight = 0;
        $.each($('.heightSelect', '#6fa26857_a014_4184_819e_6d0cbb83ba49'), function (index, item) {
            var thisObj = $(item);
            if (thisObj.height() > maxHeight) {
                maxHeight = thisObj.height();
            }
        });

        $('.heightSelect', '#6fa26857_a014_4184_819e_6d0cbb83ba49').height(maxHeight);

    });

</script>




                        </div>
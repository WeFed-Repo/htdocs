<div id="MainSection">
                            




<div class="row" id="58d0fc0f_da64_4d9f_bd29_fff510456190">
    <div class="riquadro clearfix">
        <div class="pager clearfix pull-right">
            <div class="circle_line">&nbsp;</div>
            <div class="circle current_page">&nbsp;</div>
            <div class="circle ">&nbsp;</div>
        </div>
        <div class="clearfix">
            <div class="flag riepilogo">&nbsp;</div>
            <h1>Esiti Pagamenti</h1>
        </div>
        <div class="messagePanel">
        </div>
        
        <div class="section clearfix">
            <h3 class="titleSection">Tipologie</h3>
            <div class="row margin-top20">
                
                        <div class="row">

                        <div class="col-xs-4">
                            <div class="riquadro clearfix">
                                <h4>Bonifici Italia - Richiesta Assegni</h4>

                                <div class="group-info" style="white-space: nowrap;">
                                        <a href="#" class="nav-dynamic box-icon icon-esitiBonifici" title="Bonifici Italia - Richiesta Assegni" nav-location="/youbiz.web/Integration/Home/IndexAnchise/135" nav-parameters="" nav-method="post" nav-target="_self"></a>
                                    <p style="display: table; white-space: normal;">
                                        Descrizione:<br>

                                        
                                        <strong>Esiti Bonifici Italia e Richieste Assegni Circolari e di Quietanza</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="riquadro clearfix">
                                <h4>Stipendi Italia</h4>

                                <div class="group-info" style="white-space: nowrap;">
                                        <a href="#" class="nav-dynamic box-icon icon-esitiStipendi" title="Stipendi Italia" nav-location="/youbiz.web/Integration/Home/IndexAnchise/134" nav-parameters="" nav-method="post" nav-target="_self"></a>
                                    <p style="display: table; white-space: normal;">
                                        Descrizione:<br>

                                        
                                        <strong>Esiti Stipendi Italia</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="riquadro clearfix">
                                <h4>Deleghe F24</h4>

                                <div class="group-info" style="white-space: nowrap;">
                                        <a href="#" class="nav-dynamic box-icon icon-esitiF24" title="Deleghe F24" nav-location="/youbiz.web/Integration/Home/IndexIBBWEB/40" nav-parameters="" nav-method="post" nav-target="_self"></a>
                                    <p style="display: table; white-space: normal;">
                                        Descrizione:<br>

                                        
                                        <strong>Esiti Deleghe</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                           </div><div class="row">
                        <div class="col-xs-4">
                            <div class="riquadro clearfix">
                                <h4>Altri Pagamenti</h4>

                                <div class="group-info" style="white-space: nowrap;">
                                        <a href="#" class="nav-dynamic box-icon icon-esitiAltri" title="Altri Pagamenti" nav-location="/youbiz.web/Integration/Home/IndexAnchise/2310" nav-parameters="" nav-method="post" nav-target="_self"></a>
                                    <p style="display: table; white-space: normal;">
                                        Descrizione:<br>

                                        
                                        <strong>Esiti Bonifici, Stipendi, Bonifici Estero, Pagamento Riba, Bollettini Bancari</strong>
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

        $.each($('.nav-dynamic', '#58d0fc0f_da64_4d9f_bd29_fff510456190'), function (index, item) {
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
        $.each($('.heightSelect', '#58d0fc0f_da64_4d9f_bd29_fff510456190'), function (index, item) {
            var thisObj = $(item);
            if (thisObj.height() > maxHeight) {
                maxHeight = thisObj.height();
            }
        });

        $('.heightSelect', '#58d0fc0f_da64_4d9f_bd29_fff510456190').height(maxHeight);

    });

</script>




                        </div>
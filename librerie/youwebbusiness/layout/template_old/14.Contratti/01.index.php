<div id="MainSection">
    <div id="a4b802a8f99d43138872292592cb57ef_2" class="search">

        <div class="riquadro clearfix">
            <div class="flag contratti">&nbsp;</div>
            <div class="clearfix pageTitle">
    <div class="flag">&nbsp;</div>
    <h1>Contratti e Proposte</h1>
</div>


            

                <div class="paging">
                    <span class="spacer">&nbsp;</span>
                    
                    
                    
                </div>
                <div class="paging">
                    <table class="table table-striped dataTable" role="grid">

                        <thead>
                            <tr role="row">
                                        <th>Data richiesta</th>



        
    



   
    
                                        <th>N.Pratica</th>



        
    



   
    
                                        <th>Descrizione</th>



        
    



   
    
                                        <th>Intestazione</th>



        
    



   
    
                                        <th>Stato</th>



        
    



   
    
                                        <th>Proposta</th>



        
    



   
    
                                        <th>Accettazione</th>



        
    



   
    
                            </tr>
                        </thead>

                    </table>
                </div>
                <div class="paging">
                                        <div class="dataTables_paginate">
                    </div>

                </div>

            

        </div>
    </div>
<script type="text/javascript">
                                            $(function () { koRegisterViewModel("praticheFilter",{"Azienda":{"Identifier":{"Crypt":"tMSMYldlU7/GkPEHv00qKJ1Wy2iDCS9LLBOO8r0eA/bhodNH0AgVUeMPHc9V7Bvb","Hash":"5B7B0B054CF7996A15AE0FE8E0D792D6FEA18BB536AEA08E0CF6EAF1248BCEDB"},"IdAzienda":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","StatoAzienda":1},"TipoPratica":null,"DataRichiesta":{"From":null,"To":null},"IdentifierString":null,"StartIndex":0,"Size":10,"SortColumn":"DATA_INSERIMENTO","IsSortAscending":false}, true);
    var root = koRootViewModel.praticheFilter;
    root.GoToIndex = function(indexItem) {
                     koRootViewModel.praticheFilter.StartIndex(indexItem);

        

        koParentTargetGoTo('/YouBiz.Web/Documents/Pratiche/PageGoTo', $('#a4b802a8f99d43138872292592cb57ef_2'));

    };


                                    koUpdateViewModelBinding();}); </script><script type="text/javascript">
    $(function () {
        var currentDiv = $('#a4b802a8f99d43138872292592cb57ef_2');

        $('.btn.btn-link', currentDiv).click(function () {
            var jFunctionButton = $(this);
            var identity = jFunctionButton.closest('tr').data('identity');
            var param = { Crypted: identity };
            communicationLoadTarget('/YouBiz.Web/Documents/Conferma', currentDiv, param);
        });


        //.pdf.proposta
        $('.link-icon-table.proposta', currentDiv).click(function () {
            var jFunctionButton = $(this);
            var identity = jFunctionButton.closest('tr').data('identity');
            var url = '/YouBiz.Web/Documents/Download/DownloadProposta';
            download(identity, url);
        });

        //.pdf.accettazione
        $('.link-icon-table.accettazione', currentDiv).click(function () {
            var jFunctionButton = $(this);
            var identity = jFunctionButton.closest('tr').data('identity');
            var url = '/YouBiz.Web/Documents/Download/DownloadAccettazione';
            download(identity, url);
        });

        function download(identity, url) {
            var param = {
                target: '_new',
                urlmenu: url,
                parameters: { Crypted: identity },
                behavior: 'download'
            };
            exportData(param);

        }

        function exportData(destinationParameter) {

            var currentLocation = {
                methodMenu: 'post',
                target: '_self',
                urlmenu: '#',
                parameters: '',
                behavior: ''

            }

            $.extend(currentLocation, destinationParameter);

            //se form non esiste lo creo
            if ($('#______frmnavigate______').length == 0) {
                $(":root").append('<form id="______frmnavigate______" name="______frmnavigate______"></form>');
            }
            var form = $('#______frmnavigate______');
            form.empty();
            form.attr('method', htmlEncode(currentLocation.methodMenu));
            form.attr('action', htmlEncode(currentLocation.urlmenu));
            form.attr('target', htmlEncode(currentLocation.target));

            var json = $.toJSON(currentLocation.parameters);
            form.append('<input type="hidden" name="requestbehavior" value="' + currentLocation.behavior + '" />');
            form.append('<input type="hidden" name="contenttype" value="application/json" />');
            var field = $('<input type="hidden" name="content" />');
            field.val(json);
            form.append(field);

            form.submit();
        }



    });
</script>


</div>
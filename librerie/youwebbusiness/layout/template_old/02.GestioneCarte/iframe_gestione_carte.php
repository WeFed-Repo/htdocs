
<head>
<style>
        
        .btnPPClass{
        border-color: rgb(53, 119, 69);
        border-radius: 2px;
        border-style: solid;
        border-width:1px;
        background-color: rgb(53, 119, 69);
        color: rgb(255, 255, 255);
        cursor: pointer;
        margin-bottom: 6.5px;
        margin-top: 6.5px;
        vertical-align: middle;
        font-family: Helvetica,Arial,sans-serif;
        font-size: 13px;
        font-style: normal;
        }
        
        .tablePPClass{
            padding:10px;
            border-spacing:10px;
            border-collapse: separate;
        }
    </style>
<style>
        html, body {
            height: 100%;
            font-family: Verdana, Arial, Helvetica, Sans-Serif;
            font-size: 10px;
        }
    
        tr img { display: block; }	
        .styDivInline { display: block; }
        .styDivNone { display: none; }
</style>
<script type="text/javascript">
        
			function NewWindowHelp(strOpzioni,strUrl,strNome,larghezza,altezza)
			{
				var	sinistra;
				var	sopra;
				if(window.screenX)
				{
					sinistra	= (window.outerWidth/2)+window.screenX-(larghezza/2);
					sopra		= (window.outerHeight/2)+window.screenY-(altezza/2);
				}
				else
				{
					sinistra	= (screen.availWidth/2)-(larghezza/2);
					sopra		= (screen.availHeight/2)-(altezza/2);
				}			
				if (window.top.frames['tm_top'].openWindow!=null)
				{
					window.top.frames['tm_top'].openWindow.close();
					window.top.frames['tm_top'].openWindow=null;
					finestra=null;
				}		
				var	finestra = window.open(strUrl,strNome,strOpzioni+',screenX='+sinistra+',left='+sinistra+',screenY='+sopra+',top='+sopra) ;
				window.top.frames['tm_top'].openWindow=finestra;
			}		

		function goTMHelp(page,progr,idApp){
			NewWindowHelp('height=240,width=440,toolbar=no,scrollbars=yes,status=no,menubar=no,personalbar=no,titlebar=no','/TMIBBWEBServizi/05034/common/helpmanager.aspx?tmhelppage='+escape(page)+'&tmhelppagepr='+progr+'&tmhelpapp='+idApp,'popUphelp',440,240);
			//window.top.frames['tm_top'].framehelp.location='/TMIBBWEBServizi/05034/common/helpmanager.aspx?tmhelppage='+escape(page)+'&tmhelppagepr='+progr+'&tmhelpapp='+idApp;
		}

        function onlyImportoNumbers(evento) {

            if (window.event || !evento.which) // IE o NE?
            {
                tasto = evento.keyCode; // per IE
            } else if (evento) // netscape
            {
                tasto = evento.which;
            }

            // gestione caso tasto backspace e tab
            if (tasto == 8 || tasto == 9) {
                return true;
            }

            if (tasto < 48 || tasto > 57) {
                return false;
//            if (tasto != 46)//ammessa solo il punto
//            {
//                return false;
//            }
            }
            return true;
        }

        $(function() {
            
            var mainPanel = $('#riepilogoMainPanel');
            var communication = $('#connectionPanel', mainPanel).anchisecommunication({ dialogClass: "communication-dialog", delay: 1500, width: 'auto', height: 150, connect: { errorHandler: serverErrorHandler } });
            var riepilogoListPanel = $('#riepilogoListPanel', mainPanel);
            
            var popup = $('#pop', mainPanel).dialog({
                    modal: true,
                    autoOpen: false,
                    closeOnEscape: true,
                    dialogClass: 'popup-dialog',
                    //draggable: false,
                    resizable: false,
                    width: 'auto',
                    minWidth: 500
                }
            );

            var jListAziende = [{"Id":556227,"IdPostazione":409731,"CodiceSia":"S7355","CodiceAzienda":"800096465","Descrizione":"VALASSIS SRL","IsEnabled":true}];
            var jListPosizioni = [{"Abi":"05034","NdgRapporto":"020204370","NdgDescrizione":"VALASSIS SRL","ServSt":"0903","Iban":"                           ","FilialeRapporto":"0352","Rapporto":"000003001395","IntestazioneRapporto":"POSIZ. PREPAGATA SANTAMARIA             ","CodiceRapporto":"050340352000003001395-0","CodicePostazione":"8075276","CodiceAzienda":"800096465"}];
            
            var centriDiCosto = [];
            // creato auto Event
            $("#selAzienda", mainPanel).change(function() {
                PopulateListPosizione($(this).val());
            });
            // creato auto Event
            $("#selPosizione", mainPanel).change(function() {
                PopulateListCentroDiCosto($(this).val());
            });
            $("#selStato", mainPanel).change(function() {
                $("#hiddenStato", mainPanel).val($(this).val());
            });

            
                $('#btnVisualizza').click(function() { visualizzaClick(); });
            

            $('#cartaPanel', mainPanel).hide();

            var jRiepilogoFilterToggler = $('#riepilogoFilterToggler', mainPanel);
            jRiepilogoFilterToggler.click(function() { toggleFilter($(this)); });

            // popolo lista aziende e selezion
            PopulateListAziende();

            // devo attendere la prima valorizzazione
            var jEmptyFormValues = formToJsonFlat($("#input_form", mainPanel));
            var jSkipKeys = ['Piazzatura.CodiceAzienda', 'Piazzatura.Posizione', 'Paging.SortColumn', 'Paging.SortAscending', 'Paging.Index'];

            // var areEquals = compareObjects(formToJsonFlat($("#input_form", mainPanel)), jEmptyFormValues, jSkipKeys);
            // lancia la ricerca di default         
            // effettuaRicerca();

            // ----------------------------------------------------------
            // definizione 
            // ----------------------------------------------------------      
            function setPathMenu(arrobj) {
                window.top.frames["tm_top"].SetDescrPercorsoMenu(arrobj);
            }

            function serverErrorHandler(a, b, xhr) {
                // metterlo in un popup
                $('#riepilogoListPanel', mainPanel).html(xhr.responseText);
            }

            function submitSearch() {
                setPathMenu(['Carte', 'Riepilogo']);
                $('#eventDispatcher', riepilogoListPanel).unbind('fromControl', eventsFromControls);
                riepilogoListPanel.html('');
                communication.anchisecommunication('connectjson',
                    {
                        url: 'partial/ListaCarte.aspx',
                        callMode: 'ajax',
                        resultType: 'html',
                        data: formToJson($("#input_form", mainPanel)),
                        //successHandler: function(htmlChunk) {//TODO INSERIMENTO ALERT POPUP
                        successHandler: function(htmlChunk, jsonObject, jsonObjectError) {
                            if (jsonObject) {
                                
                                showMessagePanel(jsonObjectError.Error, true, false, mainPanel);
                                
                            } else {
                                $('#eventDispatcher', riepilogoListPanel).unbind('fromControl', eventsFromControls);
                                riepilogoListPanel.html(htmlChunk);
                                $('#eventDispatcher', riepilogoListPanel).bind('fromControl', eventsFromControls);
                            }
                            // attivaFunzioniCarte();
                        }
                    }
                );
            }

            function eventsFromControls(event, eventParam) {

                //02/02/2016: Sonia e Laura per gestione esiti operazione con messagPanel e non con popup
                $('#youBizMessagePanel', mainPanel).removeClass("visible");
                $('#youBizMessagePanel', mainPanel).addClass("hidden");
                //02/02/2016: Sonia e Laura per gestione esiti operazione con messagPanel e non con popup

                if (eventParam) {
                    // ricevuto richiesta di cambio sort
                    if (eventParam.sort) {
                        setPagingInfo();
                        setSortInfo(eventParam.sort.columnIndex, eventParam.sort.order);
                        submitSearch();
                        return;
                    }

                    // ricevuto richiesta di paginazione
                    if (eventParam.paging) {
                        setPagingInfo(eventParam.paging.pageNumber);
                        submitSearch();
                        return;
                    }

                    if (eventParam.hideMe) {
                        setPathMenu(['Carte', 'Riepilogo']);

                        toggleList(true);
                        if (eventParam.hideMe.changed == true) {
                            submitSearch();
                        }
                        return;
                    }

                    if (eventParam.showPopup) {
                        showPopup(eventParam.showPopup.text || '', eventParam.showPopup.isAlert || false, eventParam.showPopup.handler || $.noop);
                        return;
                    }

                    if (eventParam.showMessagePanel) {
                        showMessagePanel(eventParam.showMessagePanel.testo || '', eventParam.showMessagePanel.isError || false, 
                            eventParam.showMessagePanel.isAlert || false, eventParam.showMessagePanel.ctx || $.noop);
                        return;
                    }

                    if (eventParam.showEditPopup) {
                    }

                    if (eventParam.exportLocalForm) {
                        var theForm = $('#downloadFrameForm');
                        theForm.attr('action', eventParam.exportLocalForm.action);
                        $('#data', theForm).val(htmlEncode($.toJSON(formToJson($("#input_form", mainPanel)))));
                        $('#format', theForm).val(eventParam.exportLocalForm.mode);
                        theForm.submit();

                        return;
                    }

                    if (eventParam.exportGenericData) {
                        var theForm = $('#downloadFrameForm');
                        theForm.attr('action', eventParam.exportGenericData.action);
                        $('#data', theForm).val(htmlEncode($.toJSON(eventParam.exportGenericData.data)));
                        $('#format', theForm).val(eventParam.exportGenericData.mode);
                        theForm.submit();

                        return;
                    }

                    if (eventParam.submitAction) {
                        communication.anchisecommunication('connectjson', eventParam.submitAction.connectParam);
                        // communication.anchisecommunication('connectjson', FixSuccessAndFailHandlers(eventParam.submitAction.connectParam));
                        return;
                    }

                    if (eventParam.listItemAction) {
                        var dataAction = eventParam.listItemAction['data-action'];
                        var dataCardName = eventParam.listItemAction['data-cardname'];
                        var piazzatura = eventParam.listItemAction['piazzatura'];
                        switch (dataAction) {
                            case 'Prepaid':                                
                                redirectForm();
                            break;
                        case 'Dettaglio':
                            // setPathMenu(['Carte','Riepilogo','Dettaglio']);
                            setPathMenu(['Carte', 'Pannello di controllo']);
                            communication.anchisecommunication('connectjson',
                            {
                                url: 'partial/DettaglioCarta.aspx?msg=' + piazzatura.hasMessagePanel,
                                resultType: 'html',
                                data: piazzatura,
                                successHandler: function(htmlChunk) {
                                    var contentPanel = $('#cartaPanelContent', mainPanel);
                                    $('#evtDispatcher', contentPanel).unbind('fromControl', eventsFromControls);
                                    contentPanel.html(htmlChunk);
                                    $('#evtDispatcher', contentPanel).bind('fromControl', eventsFromControls);
                                    toggleList(false);
                                }
                            });
                            break;
                        case 'Attiva':
                            showPopup(' Vuoi procedere con l\'attivazione della carta: <br /><b>' + dataCardName + '</b> ?', false, function() {
                                communication.anchisecommunication('connectjson',
                                {
                                    url: '/TMIBBWEBServizi/ws/carte/Carte.asmx/AttivaCarta',
                                    resultType: 'json',
                                    data: { Piazzatura: piazzatura },
                                    successHandler: function (textData, isJson, jsonObject) {
                                        
                                        if (isJson && jsonObject && jsonObject.Success) {
                                            
                                            showMessagePanel('Operazione avvenuta con successo', false, false, mainPanel);
                                            
                                            submitSearch();
                                        } else
                                        
                                            
                                        showMessagePanel('Errore ' + jsonObject.TecDescrErr, true, false, mainPanel);
                                        
                                        
                                    }
                                });
                            });
                            break;
                        case 'Riattiva':
                            showPopup(' Vuoi procedere con la riattivazione della carta: <br /><b>' + dataCardName + '</b> ?', false, function() {
                                communication.anchisecommunication('connectjson',
                                {
                                    url: '/TMIBBWEBServizi/ws/carte/Carte.asmx/SbloccaCarta',
                                    resultType: 'json',
                                    data: { Piazzatura: piazzatura },
                                    successHandler: function(textData, isJson, jsonObject) {
                                        if (isJson && jsonObject && jsonObject.Success) {
                                            
                                                showMessagePanel('Operazione avvenuta con successo', false, false, mainPanel);
                                            
                                            submitSearch();
                                        } else
                                            
                                                showMessagePanel('Errore ' + jsonObject.TecDescrErr, true, false, mainPanel);
                                            
                                    }
                                });
                            });
                            break;

                        case 'Sospendi':
                            showPopup(' Vuoi procedere con la sospensione della carta: <br /><b>' + dataCardName + '</b> ?', false, function() {
                                communication.anchisecommunication('connectjson',
                                {
                                    url: '/TMIBBWEBServizi/ws/carte/Carte.asmx/BloccaCarta',
                                    resultType: 'json',
                                    data: { Piazzatura: piazzatura },
                                    successHandler: function(textData, isJson, jsonObject) {
                                        if (isJson && jsonObject && jsonObject.Success) {
                                            
                                                showMessagePanel('Operazione avvenuta con successo' , false, false, mainPanel);
                                            
                                            submitSearch();
                                        } else
                                            
                                                showMessagePanel('Errore ' + jsonObject.TecDescrErr, true, false, mainPanel);
                                            
                                    }
                                });
                            });
                            break;

                        case 'Estinzione':
                            showPopup(' Vuoi procedere con l\'estinzione della carta: <br /><b>' + dataCardName + '</b> ?', false, function() {
                                communication.anchisecommunication('connectjson',
                                {
                                    url: '/TMIBBWEBServizi/ws/carte/Carte.asmx/EstinzioneCarta',
                                    resultType: 'json',
                                    data: { Piazzatura: piazzatura },
                                    successHandler: function(textData, isJson, jsonObject) {
                                        if (isJson && jsonObject && jsonObject.Success) {
                                            
                                                showMessagePanel('Operazione avvenuta con successo', false, false, mainPanel);
                                            
                                            submitSearch();
                                        } else
                                            
                                                showMessagePanel('Errore ' + jsonObject.TecDescrErr, true, false, mainPanel);
                                            
                                    }
                                });
                            });
                            break;

                        case 'Storno':
                            showPopup(' Vuoi procedere con lo storno dell\'estinzione della carta: <br /><b>' + dataCardName + '</b> ?', false, function() {
                                communication.anchisecommunication('connectjson',
                                {
                                    url: '/TMIBBWEBServizi/ws/carte/Carte.asmx/StornoEstinzioneCarta',
                                    resultType: 'json',
                                    data: { Piazzatura: piazzatura },
                                    successHandler: function(textData, isJson, jsonObject) {
                                        if (isJson && jsonObject && jsonObject.Success) {
                                            
                                                showMessagePanel('Operazione avvenuta con successo', false, false, mainPanel);
                                            
                                            submitSearch();
                                        } else
                                            
                                                showMessagePanel('Errore ' + jsonObject.TecDescrErr, true, false, mainPanel);
                                            
                                    }
                                });
                            });
                            break;

                        case 'Ricarica':
                            // setPathMenu(['Carte','Riepilogo','Ricarica']);
                            setPathMenu(['Carte', 'Ricarica']);
                            communication.anchisecommunication('connectjson',
                            {
                                url: 'partial/RicaricaCarta.aspx',
                                resultType: 'html',
                                data: piazzatura,
                                successHandler: function(htmlChunk) {
                                    var contentPanel = $('#cartaPanelContent', mainPanel);
                                    $('#evtDispatcher', contentPanel).unbind('fromControl', eventsFromControls);
                                    contentPanel.html(htmlChunk);
                                    $('#evtDispatcher', contentPanel).bind('fromControl', eventsFromControls);
                                    toggleList(false);
                                }
                            });
                            break;

                        case 'Scarica':
                            // setPathMenu(['Carte','Riepilogo','Scarica']);
                            setPathMenu(['Carte', 'Scarica']);
                            communication.anchisecommunication('connectjson',
                            {
                                url: 'partial/ScaricaCarta.aspx',
                                resultType: 'html',
                                data: piazzatura,
                                successHandler: function(htmlChunk) {
                                    var contentPanel = $('#cartaPanelContent', mainPanel);
                                    $('#evtDispatcher', contentPanel).unbind('fromControl', eventsFromControls);
                                    contentPanel.html(htmlChunk);
                                    $('#evtDispatcher', contentPanel).bind('fromControl', eventsFromControls);
                                    toggleList(false);
                                }
                            });
                            break;

                        case 'RicaricaAutomatica':
                            // setPathMenu(['Carte','Riepilogo','Ricarica Automatica']);
                            setPathMenu(['Carte', 'Ricarica Automatica']);
                            communication.anchisecommunication('connectjson',
                            {
                                url: 'partial/RicaricaAutomatica.aspx',
                                resultType: 'html',
                                data: piazzatura,
                                successHandler: function(htmlChunk) {
                                    var contentPanel = $('#cartaPanelContent', mainPanel);
                                    $('#evtDispatcher', contentPanel).unbind('fromControl', eventsFromControls);
                                    contentPanel.html(htmlChunk);
                                    $('#evtDispatcher', contentPanel).bind('fromControl', eventsFromControls);
                                    toggleList(false);
                                }
                            });
                            break;

                        case 'Movimenti':
                            //setPathMenu(['Carte','Riepilogo','Movimenti']);
                            setPathMenu(['Carte', 'Movimenti']);
                            communication.anchisecommunication('connectjson',
                            {
                                url: 'partial/ContainerMovimenti.aspx',
                                resultType: 'html',
                                //data: piazzatura,
                                data: piazzatura, //formToJson($("#input_form", mainPanel)),
                                successHandler: function(htmlChunk) {
                                    var contentPanel = $('#cartaPanelContent', mainPanel);
                                    $('#evtDispatcher', contentPanel).unbind('fromControl', eventsFromControls);
                                    contentPanel.html(htmlChunk);
                                    $('#evtDispatcher', contentPanel).bind('fromControl', eventsFromControls);
                                    toggleList(false);
                                }
                            });
                            break;

                        case 'PannelloControllo':
                            communication.anchisecommunication('connectjson',
                            {
                                url: 'partial/ConfigPosizione.aspx',
                                resultType: 'html',
                                data: piazzatura,
                                successHandler: function(htmlChunk) {
                                    var contentPanel = $('#cartaPanelContent', mainPanel);
                                    $('#evtDispatcher', contentPanel).unbind('fromControl', eventsFromControls);
                                    contentPanel.html(htmlChunk);
                                    $('#evtDispatcher', contentPanel).bind('fromControl', eventsFromControls);
                                    toggleList(false);
                                }
                            });
                            break;

                        //TODO DA TOGLIERE
                        default:
                            alert('action: ' + dataAction + ' not implemented');
                            break;
                        }
                        return;
                    }
                    alert('event does not run');
                }
            }

            //David: inserito il 28/04/2017
            function redirectForm() {
                if ($('#______frmnavigate______').length == 0) {
                    $(":root").append('<form id="______frmnavigate______" name="______frmnavigate______"></form>');
                }
                var form = $('#______frmnavigate______');
                form.empty();
                form.attr('method', htmlEncode("post"));
                form.attr('action', htmlEncode("/Youbiz.Sdk.Web/Carte/PrepaidControl"));
                form.attr('target', htmlEncode("_top"));
                form.submit();
            }
            //David: inserito il 28/04/2017


            // handle events for search form
            // ------------------------------------------------------------------------------
            function visualizzaClick() {

                //02/02/2016: Sonia e Laura per gestione esiti operazione con messagePanel e non con popup
                $('#youBizMessagePanel', mainPanel).removeClass("visible");
                $('#youBizMessagePanel', mainPanel).addClass("hidden");
                //02/02/2016: Sonia e Laura per gestione esiti operazione con messagePanel e non con popup

                setSortInfo(1, 'asc');
                setPagingInfo();
                submitSearch();
            }

            function FixSuccessAndFailHandlers(connectionParam) {
                var oldSuccess = connectionParam.successHandler;

                var newSuccess = function(text, isJson, jsonObject) {
                    if (isJson && jsonObject.CodErr) {
                        
                            showMessagePanel(jsonObject.DescrErr + "<br/>" + jsonObject.TecDescrErr, true, false, mainPanel);
                        
                        return;
                    }
                    oldSuccess(text, isJson, jsonObject);
                };
                connectionParam.successHandler = newSuccess;
                connectionParam.errorHandler = wsError;
                return connectionParam;
            }

            function wsError(a, b, c, d, e, f) {
                
                    showMessagePanel(f, true, false, mainPanel);
                
            }

            function setSortInfo(colIndex, order) {
                colIndex = colIndex || 1;
                $('#SortColumnIndex', mainPanel).val(colIndex);

                var value = order && order === 'asc' ? 'true' : 'false';
                $('#SortOrder', mainPanel).val(value);
            }

            function setPagingInfo(pageNumber) {
                if (pageNumber === undefined || isNaN(pageNumber) || pageNumber < 1) {
                    pageNumber = 1;
                }
                pageNumber--;

                var itemsPerPage = $('#selPagingItemsPerPage', mainPanel).val();
                if (itemsPerPage === undefined || isNaN(itemsPerPage)) {
                    itemsPerPage = 50;
                }

                if (typeof itemsPerPage === 'string') {
                    itemsPerPage = parseInt(itemsPerPage);
                }

                var index = pageNumber * itemsPerPage;
                $('#ItemIndex', mainPanel).val(index);
            }

// ------------------------------------------------------------------------------
            
            function toggleFilter(toggler) {
                if (jEmptyFormValues) {
                    var checkValue = false;
                    // se sono sull'evento del click
                    if (toggler) {
                        checkValue = !toggler.hasClass('collapsed');
                    } else {
                        // mi hanno richiamato applicativamente
                        checkValue = jRiepilogoFilterToggler.hasClass('collapsed');
                    }

                    if (checkValue && !compareObjects(formToJsonFlat($("#input_form", mainPanel)), jEmptyFormValues, jSkipKeys)) {
                        // valuta campi
                        var message = 'Intestatario: pippo' + '\r\n' + 'importo da: 13.67';
                        $('#alertFiltriSet', mainPanel).html('<div title="' + message + '"><i class="glyphicon glyphicon-filter"></i> &nbsp; Filtri impostati</div>');
                        $('#alertFiltriSet', mainPanel).html('<i class="glyphicon glyphicon-filter"></i> &nbsp; Filtri impostati');
                        //
                        // $('#alertFiltriSet', mainPanel).text('Filtri impostati');
                    } else {
                        //$('#alertFiltriSet', mainPanel).text('');
                        $('#alertFiltriSet', mainPanel).html('');
                    }
                }
            }

            function PopulateListAziende() {
                // verifica is array

                if (jListAziende != undefined) {
                    var listAziende = $("#selAzienda", mainPanel);

                    listAziende.empty();
                    if (jListAziende.length > 0) {
                        $.each(jListAziende, function(key, value) {
                            // var selection = key == itemToSelect ? ' selected="selected" ' : '';
                            var selection = '';
                            listAziende.append('<option value="' + htmlEncode(value.CodiceAzienda) + '" ' + selection + '>' + htmlEncode(value.Descrizione) + '</option>');
                        });
                    } else {
                        listAziende.append('<option value="">' + htmlEncode('Non ci sono aziende attive') + '</option>');
                    }
                    listAziende.prop("selectedIndex", 0);
                    listAziende.change();
                }
            }

            function PopulateListPosizione(codiceAz) {
                // verifica is array
                EnableFunzioneDebitoAttiva(null);
                if (jListPosizioni != undefined) {
                    var listPosizione = $("#selPosizione", mainPanel);
                    listPosizione.empty();
                    $.each(jListPosizioni, function(key, value) {
                        if (value.CodiceAzienda == codiceAz) {
                            listPosizione.append("<option value=" + htmlEncode(value.CodiceRapporto) + ">" + htmlEncode(value.IntestazioneRapporto) + "</option>");
                            EnableFunzioneDebitoAttiva(value.CodiceRapporto);
                        }
                    });
                    listPosizione.prop("selectedIndex", 0);
                    listPosizione.change();
                }
            }

            //David: inserito il 28/04/2017
            function EnableFunzioneDebitoAttiva(codRapp) {
                $("#celFDebAttivaLabel").show();
                $("#celFDebAttivaCtrl").show();
                $("#selTipo").prop('disabled', false);
                if (codRapp != null) {
                    if (codRapp.indexOf("-0") > -1) {
                        $("#selTipo").prop('disabled', true);
                        $("#celFDebAttivaLabel").hide();
                        $("#celFDebAttivaCtrl").hide();
                    }    
                }                
            }
            //David: inserito il 28/04/2017

            function PopulateListCentroDiCosto(idPosizione) {
                
                var foundCentroDiCosto = centriDiCosto[idPosizione];
                var listCentriDiCosto = $("#selCentroDiCosto", mainPanel);
                listCentriDiCosto.empty();
                if (foundCentroDiCosto) {
                    listCentriDiCosto.append('<option value="">Selezionare centro di costo ...</option>');
                    $.each(foundCentroDiCosto, function(index, item) {
                        listCentriDiCosto.append('<option value="' + htmlEncode(item.Id) + '" >' + htmlEncode(item.Id + ' - ' + item.Descrizione) + '</option>');
                    });
                } else {
                    listCentriDiCosto.append('<option value="">' + htmlEncode('Caricamento in corso ...') + '</option>');
                    var filter = formToJson($("#input_form", mainPanel));
                    var piazzatura = filter.Piazzatura;
                    communication.anchisecommunication('connectjson',
                    {
                        url: '/TMIBBWEBServizi/ws/carte/Carte.asmx/GetCentriDiCosto',
                        resultType: 'json',
                        data: { Piazzatura: piazzatura },
                        successHandler: function(txtData, isJson, jsonObject) {
                            if (isJson && jsonObject.Piazzatura && jsonObject.CentriDiCosto) {
                                centriDiCosto[jsonObject.Piazzatura.Posizione] = jsonObject.CentriDiCosto;
                                PopulateListCentroDiCosto(idPosizione);
                            }
                        }
                    });
                }
            }

            //02/02/2016 Sonia e Laura: gestione del messaggi di esito tramite pannello
            function showMessagePanel(testo, isError, isAlert, ctx) {
                
                ctx = ctx || $('#riepilogoMainPanel');
                
                $('#youBizMessagePanel > p > strong', ctx).text(testo);
                
                if (isError) {
                    $('#youBizMessagePanel', ctx).removeClass('success').removeClass('alert').addClass("error");
                    $('#youBizMessagePanel > h3', ctx).text('Attenzione');
                }
                else if (isAlert) {
                    $('#youBizMessagePanel', ctx).removeClass('success').removeClass('error').addClass("alert");
                    $('#youBizMessagePanel > h3', ctx).text('Attenzione');
                }
                else {
                    $('#youBizMessagePanel', ctx).removeClass('error').removeClass('alert').addClass("success");
                    $('#youBizMessagePanel > h3', ctx).text('Esito operazione');
                }

                $('#youBizMessagePanel', ctx).removeClass("hidden");
                $('#youBizMessagePanel', ctx).addClass("visible");
            }

            function showPopup(testo, isAlert, actionHandler) {
                actionHandler = actionHandler || $.noop;

                var btnClose = { text: "Ok", style: "background-color: #357745;", click: function() { $(this).dialog('close'); } };
                var btnAnnulla = { text: "Annulla", style: "background-color: #357745;", click: function() { $(this).dialog('close'); } };
                var btnOk = {
                    text: "Ok",
                    style: "background-color: #357745;",
                    click: function() {
                        actionHandler();
                        $(this).dialog('close');
                    }
                };

                var buttons = [];

                if (isAlert != undefined && isAlert == false) {
                    buttons = [btnAnnulla, btnOk];
                } else {
                    buttons = [btnClose];
                }
                
                
                    popup.html("</br>"+testo);
                

                popup.dialog('option', { 'buttons': buttons, 'title': 'Info' });
                popup.dialog('open');
            }

            function toggleList(showList) {
                if (showList) {
                    $('#cartaPanel', mainPanel).hide();
                    $('#riepilogoPanel', mainPanel).show();
                } else {
                    $('#riepilogoPanel', mainPanel).hide();
                    $('#cartaPanel', mainPanel).show();
                }
            }
        });
</script>
    




    
    
    <style>
        
        .bottom {
            background: #7ea889;
        }
    </style>
  </head>  


    <div style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;" onmouseover="parent.tm_middle.clearTimeOut();" onmouseout="parent.tm_middle.layerTimeOut('menu1','onmouseoutDalLayer')" id="menu1"></div>
<div style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;" onmouseover="parent.tm_middle.clearTimeOut();" onmouseout="parent.tm_middle.layerTimeOut('menu2','onmouseoutDalLayer');" id="menu2"></div>
    
<table style="width: 100%; height: 100%">
 <tbody>
  <tr>
   <td valign="top">
<table style="width: 100%; height: 100%">
 <tbody>
  <tr>
   <td valign="top">
     <div class="old-pageTitle page-title"><div class="new-flag"> <h1>Gestione Carte</h1></div></div>
     
    <div class="container"><div class="old-pageContent new-riquadro">
    <div style="width:100%;margin:auto;padding-top:10px;" id="riepilogoMainPanel">
     
     

    <iframe name="downloadFrame" style="visibility: hidden; display: none; width: 0px; height: 0px;"></iframe>
    <form name="downloadFrameForm" id="downloadFrameForm" action="#" method="POST" target="downloadFrame">
     <input type="hidden" id="data" name="data" value="">
     <input type="hidden" id="format" name="format" value="">
    </form>

     <div id="riepilogoPanel">
        <form action="#" id="input_form">
         <input type="hidden" name="Paging.SortColumn" id="SortColumnIndex" value="1">
         <input type="hidden" name="Paging.SortAscending" id="SortOrder" value="true">
         <input type="hidden" name="Paging.Index" id="ItemIndex" value="0">
         
            <div id="riepilogoFilterPanel">
<!-- from function -->
<div class="panel-group vnt-filter" id="accordion" style="background-color: rgb(247, 252, 247);">
 <div class="panel vnt-filter" id="youBizWhiteBackground" style="background-color: rgb(255, 255, 255);">

 
     
     
        <br>
        <div id="youBizMessagePanel" class="messagePanel hidden" style="display: block; margin-bottom: 0; margin-top: 0;">
            <h3 class="titleSection"></h3>
            <p style="margin-top: 10px">
                <strong></strong>
            </p>
        </div>
     

  <div class="section" style="margin-top: 0px; padding-bottom: 0px;">
   <table class="testoBlackSmall" style="width:100%; margin: auto">
    <tbody>
     <tr>
      <td style="width:20%; padding-left:5px;">Rag. Soc./Intestatario:&nbsp;</td>
      <td style="width:25%"><select style="width: 200px" class="new-form-control" id="selAzienda" name="Piazzatura.CodiceAzienda"><option value="800096465">VALASSIS SRL</option></select></td>
      <td style="width:20%; padding-left:30px">Posizione:&nbsp;</td>
      <td style="width:25%"><select style="width: 200px" class="new-form-control" id="selPosizione" name="Piazzatura.Posizione"><option value="050340352000003001395-0">POSIZ. PREPAGATA SANTAMARIA             </option></select></td>
      <td style="width:10%; text-align: right"><div data-toggle="collapse" class="ybw-icon-expand ybw-icon-expand-up-down" data-parent="#accordion" href="#collapseOne" id="riepilogoFilterToggler"></div></td>
     </tr>
    </tbody>
   </table>
  </div>
  
 </div>

<div id="collapseOne" class="panel-collapse section collapse in" style="margin-top: 0px; padding-bottom: 0px; height: auto;">
  <div class="panel vnt-filter section" style="margin-top: 0px; padding-bottom: 0px; background-color: rgb(247, 252, 247);">
   <table class="testoBlackSmall" style="width:100%; margin: auto; ">
    <thead>
     <tr>
      <th></th>
      <th></th>
      
      <th></th>
      <th></th>
      <th></th>
     </tr>
    </thead>
    <tbody>
    <tr>
     <td style="width: 20%; padding-left: 5px">Centro di costo:&nbsp;</td>
     <td style="width: 25%;"><select style="width: 100%" class="new-form-control" id="selCentroDiCosto" name="CentroDiCosto"><option value="">Selezionare centro di costo ...</option><option value="CC001">CC001 - CENTRO DI COSTO 1</option><option value="CC002">CC002 - CENTRO DI COSTO 2</option><option value="CC003">CC003 - CENTRO DI COSTO 3</option><option value="CC004">CC004 - CENTRO DI COSTO 4</option><option value="CC005">CC005 - CENTRO DI COSTO 5</option><option value="CC006">CC006 - CENTRO DI COSTO 6</option><option value="CC007">CC007 - CENTRO DI COSTO 7</option><option value="CC008">CC008 - CENTRO DI COSTO 8</option><option value="CC009">CC009 - CENTRO DI COSTO 9</option></select></td>
     
     <td style="width: 20%; padding-left: 30px">Stato:&nbsp;</td>
     <td style="width: 25%;"><select style="width: 130px" id="selStato" name="dummyStato" class="new-form-control">
          <option selected="selected" value="">Tutti gli stati</option>  
          <option value="2">Da Attivare</option>  
          <option value="3">Attiva</option>  
          <option value="4">Bloccata</option> 
          <option value="5">Sospesa</option> 
          <option value="6">In Estinzione</option> 
          <option value="7">Estinta</option> 
         </select> 
      <input type="hidden" id="hiddenStato" name="Stato" value=""> 
     </td>
     <td style="width: 10%;">&nbsp;</td>
    </tr>
    <tr style="height: 35px;">
     <td style="width: 20%; padding-left: 5px">Saldo prepagata da:&nbsp;</td>
     
     <td style="width: 25%;">
      <table style="width: 100%;">
       <tbody>
        <tr>
         <td style="width: 44%; text-align: left;"><input style="width: 100%; text-align: right;" type="text" id="fieldSaldoFrom" name="Saldo.From" onkeypress="return onlyImportoNumbers(event)" class="new-form-control"></td>
         <td style="width: 5%; white-space: nowrap; text-align: left;">,00€&nbsp;</td>
         <td style="width: 2%; white-space: nowrap; text-align: right;">a&nbsp;</td>
         <td style="width: 44%; white-space: nowrap; text-align: right;"><input style="width: 100%; text-align: right;" type="text" id="fieldSaldoTo" name="Saldo.To" onkeypress="return onlyImportoNumbers(event)" class="new-form-control"></td>
         <td style="width: 5%; white-space: nowrap; text-align: right;">,00 €</td>
        </tr>
       </tbody>
      </table>
     </td>
     
     <td id="celFDebAttivaLabel" style="width: 20%; padding-left: 30px; display: none;">Funzione debito attiva:&nbsp;</td>
     <td id="celFDebAttivaCtrl" style="width: 25%; display: none;">
         <select style="width: 130px" id="selTipo" name="Tipo" class="new-form-control" disabled="">
          <option selected="selected" value="">Tutti</option>  
          <option value="1">NO</option>  
          <option value="2">SI</option> 
         </select>
     </td>
     <td style="width: 10%;">&nbsp;</td>
    </tr>
    <tr style="height: 35px;">
     <td style="width: 20%; padding-left: 5px" nowrap="">Cognome intestatario carta:&nbsp;</td>
     <td style="width: 25%;"><input style="width: 100%" class="new-form-control" type="text" id="fieldIntestatario" name="Cognome"></td>
      
     <td style="width: 20%; padding-left: 30px">Righe per pagina:&nbsp;</td>
     <td style="width: 25%;">
         <select class="new-form-control" id="selPagingItemsPerPage" name="Paging.Count">
          <option value="10">10</option> 
          <option selected="selected" value="50">50</option> 
          <option value="100">100</option> 
         </select> 
     </td>
     <td style="width: 10%;">&nbsp;</td>
    </tr>
    <tr>
        <td style="width: 20%; padding-left: 5px" nowrap="">Nome intestatario carta:&nbsp;</td>
        <td style="width: 25%;"><input style="width: 100%" class="new-form-control" type="text" id="fieldIntestatarioNome" name="Nome"></td>
        <td style="width: 10%;">&nbsp;</td>
    </tr>
    </tbody>
   </table>

  </div> 
  
 </div>
   
 <div class="panel vnt-filter section old-buttons" style="text-align: center; margin-top: 0px; padding-bottom: 0px; background-color: rgb(247, 252, 247);">
  
 </div>
  <span class="testoRedSmallBold" id="alertFiltriSet"></span>
  <div class="vnt-filter" style="background-color: rgb(247, 252, 247);"></div>
</div>
            </div>
        </form>
        <div id="riepilogoListPanel">

<div id="carteListResult">
    
<div id="eventDispatcher"></div>

<div class="button-set">
 <i id="exportPdf" class="vnt-icon vnt-icon-export-Pdf">&nbsp;</i>
 <i id="exportExcel1" class="vnt-icon vnt-icon-export-Excel">&nbsp;</i>
 <i id="exportExcel2" class="vnt-icon vnt-icon-export-Excel97">&nbsp;</i>
</div>
<div style="clear: both"></div>


<table id="Table1" class="vnt-result-tbl old-table" style="">

 <thead>
  <tr>
   <th data-value="0"><span>Numero Carta</span><i class="vnt-icon vnt-icon-asc "></i><i class="vnt-icon vnt-icon-desc "></i></th>
   <th data-value="1"><span>Intestatario Carta</span><i class="vnt-icon vnt-icon-asc selected"></i><i class="vnt-icon vnt-icon-desc "></i></th>
   <th data-value="2"><span>Disponibilità Prepagata</span><i class="vnt-icon vnt-icon-asc "></i><i class="vnt-icon vnt-icon-desc "></i></th>
   <th data-value="3"><span>Nickname</span><i class="vnt-icon vnt-icon-asc "></i><i class="vnt-icon vnt-icon-desc "></i></th>
   <th data-value="7"><span>Centro di Costo</span><i class="vnt-icon vnt-icon-asc "></i><i class="vnt-icon vnt-icon-desc "></i></th>
   <th data-value="4"><span>Stato Carta</span><i class="vnt-icon vnt-icon-asc "></i><i class="vnt-icon vnt-icon-desc "></i></th>
   <th data-value="5"><span>Tipo Carta</span><i class="vnt-icon vnt-icon-asc "></i><i class="vnt-icon vnt-icon-desc "></i></th>
   <th data-value="6" style="width: 70px;">
    
   </th>
 </tr>
</thead>
<tfoot>
 <tr>
  <td colspan="8">
   <table class="paer old-pager" style="width: 100%">
  <tbody>
   <tr>
    <td style="width: 50%; font-size: 13px; font-weight: bold" id="Td1">Totale: 1</td>
    <td style="width: 10%" nowrap="" align="right">
     <table>
      <tbody>
       <tr>
        <td><i class="vnt-icon vnt-icon-pager-first vnt-hidden" title="Prima pagina"></i></td>
        <td><i class="vnt-icon vnt-icon-pager-prev vnt-hidden" title="Pagina precente"></i></td>
        <td><input id="carteListResult_PaginaRichiesta" maxlength="4" align="right" value="1" size="4" type="text">&nbsp;/&nbsp;1</td>
        <td>&nbsp;<a id="vaiA" title="Vai" href="#">Vai</a>&nbsp;</td>
        <td><i class="vnt-icon vnt-icon-pager-next vnt-hidden" title="Pagina successiva"></i></td>
        <td><i class="vnt-icon vnt-icon-pager-last vnt-hidden" title="Ultima pagina"></i></td>
       </tr>
      </tbody>
     </table>
    </td>
   </tr>
  </tbody>
 </table>
  </td>
 </tr>
</tfoot>

<tbody>

<tr class="even">
 <td>*6462</td>
 <td class="left">SANTAMARIA ALESSANDRO</td>
 <td class="right" style="float: none;">406,22&nbsp;EUR</td>
 <td></td>
 <td title="CENTRO DI COSTO 1">CC001</td>
 <td>Attiva</td>
 <td>Prepagata</td>
 <td>
   <div role="button-action" data-card="{&quot;CodiceAzienda&quot;:&quot;800096465&quot;,&quot;Posizione&quot;:&quot;050340352000003001395-0&quot;,&quot;IdCarta&quot;:&quot;zrS0n4zLHlNml3iwCkGP96hyxZ8tsuWa&quot;,&quot;Abi&quot;:&quot;05034&quot;}" data-cardname="*6462">
 <div class="listContentWrapper" style="text-align: left; ">
  <div class="listContentItem">
   <div class="dropdown">
    <button id="youBizButtonColor" class=" btn-white btn-xs dropdown-toggle btn-carte bottom" type="button" data-toggle="dropdown" title="azioni collegate a questa carta" style="height: 22px;">Opera&nbsp;<span class="caret"></span></button>
    <ul class="dropdown-menu menu-carte " role="menu" aria-labelledby="dropdownMenu2" style="left: -90px; background-color: rgb(227, 238, 227);">
     
     
     <li role="presentation" class=""><a role="menuitem" tabindex="-1" href="#" type-action="aspx" data-action="Movimenti">Movimenti</a></li>
     <li role="presentation" class="divider"></li>
     
     <li role="presentation" class=""><a role="menuitem" tabindex="-1" href="#" type-action="aspx" data-action="Ricarica">Ricarica</a></li>
     <li role="presentation" class=""><a role="menuitem" tabindex="-1" href="#" type-action="aspx" data-action="Scarica">Scarica</a></li>
     
     
     
    
     <li role="presentation" class=""><a role="menuitem" tabindex="-1" href="#" type-action="ajax" data-action="Sospendi">Sospendi/Riattiva</a></li>
     <li role="presentation" class=""><a role="menuitem" tabindex="-1" href="#" type-action="ajax" data-action="Estinzione">Estingui/Annulla</a></li>
     <li role="presentation" class="divider"></li>
     
     
        
     
     <li role="presentation" class=""><a role="menuitem" tabindex="-1" href="#" type-action="aspx" data-action="RicaricaAutomatica">Ricarica Automatica</a></li>
        
        
     
        <li role="presentation" class=""><a role="menuitem" tabindex="-1" href="#" type-action="aspx" data-action="Prepaid">Cartimpronta Prepaid Control</a></li>
     
        

    </ul>
   </div>
  </div>
 </div>
</div>
</td>
</tr>
<tr class="odd">
 <td>*6462</td>
 <td class="left">SANTAMARIA ALESSANDRO</td>
 <td class="right" style="float: none;">406,22&nbsp;EUR</td>
 <td></td>
 <td title="CENTRO DI COSTO 1">CC001</td>
 <td>Attiva</td>
 <td>Prepagata</td>
 <td>
   <div role="button-action" data-card="{&quot;CodiceAzienda&quot;:&quot;800096465&quot;,&quot;Posizione&quot;:&quot;050340352000003001395-0&quot;,&quot;IdCarta&quot;:&quot;zrS0n4zLHlNml3iwCkGP96hyxZ8tsuWa&quot;,&quot;Abi&quot;:&quot;05034&quot;}" data-cardname="*6462">
 <div class="listContentWrapper" style="text-align: left; ">
  <div class="listContentItem">
   <div class="dropdown">
    <button id="youBizButtonColor" class=" btn-white btn-xs dropdown-toggle btn-carte bottom" type="button" data-toggle="dropdown" title="azioni collegate a questa carta" style="height: 22px;">Opera&nbsp;<span class="caret"></span></button>
    <ul class="dropdown-menu menu-carte " role="menu" aria-labelledby="dropdownMenu2" style="left: -90px; background-color: rgb(227, 238, 227);">
     
     
     <li role="presentation" class=""><a role="menuitem" tabindex="-1" href="#" type-action="aspx" data-action="Movimenti">Movimenti</a></li>
     <li role="presentation" class="divider"></li>
     
     <li role="presentation" class=""><a role="menuitem" tabindex="-1" href="#" type-action="aspx" data-action="Ricarica">Ricarica</a></li>
     <li role="presentation" class=""><a role="menuitem" tabindex="-1" href="#" type-action="aspx" data-action="Scarica">Scarica</a></li>
     
     
     
    
     <li role="presentation" class=""><a role="menuitem" tabindex="-1" href="#" type-action="ajax" data-action="Sospendi">Sospendi/Riattiva</a></li>
     <li role="presentation" class=""><a role="menuitem" tabindex="-1" href="#" type-action="ajax" data-action="Estinzione">Estingui/Annulla</a></li>
     <li role="presentation" class="divider"></li>
     
     
        
     
     <li role="presentation" class=""><a role="menuitem" tabindex="-1" href="#" type-action="aspx" data-action="RicaricaAutomatica">Ricarica Automatica</a></li>
        
        
     
        <li role="presentation" class=""><a role="menuitem" tabindex="-1" href="#" type-action="aspx" data-action="Prepaid">Cartimpronta Prepaid Control</a></li>
     
        

    </ul>
   </div>
  </div>
 </div>
</div>
</td>
</tr>
</tbody>
</table>


</div>




    
</div>
      </div>
 
     <div id="cartaPanel" class="row" style="display: none;">
      <div id="cartaPanelContent" class="row"></div>
      <div id="cartaPanelFunction" class="row"></div>
     </div>

    </div>
    </div><div class="new-buttons"><input style="margin: 0 auto;" id="btnVisualizza" type="button" class="btn1" value="Visualizza"></div></div> 
   </td>
     
  </tr>
 </tbody>
</table>
 
    





    <script type="text/javascript">
        $(function () {
            $(".section").css("margin-top", "0");
            $(".section").css("padding-bottom", "0");
            $(".vnt-filter").css('background-color', '#f7fcf7');
            $("#youBizWhiteBackground.vnt-filter").css('background-color', 'white');

            $(".popup-dialog .ui-widget-header").css("background-color", "#357745");
        });
    </script>
<div class="ui-dialog ui-widget ui-widget-content ui-corner-all communication-dialog ui-draggable" tabindex="-1" role="dialog" aria-labelledby="ui-id-1" style="outline: 0px; z-index: 1002; height: auto; width: auto; top: 342px; left: 729.5px; display: none;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix"><span id="ui-id-1" class="ui-dialog-title">&nbsp;</span><a href="#" class="ui-dialog-titlebar-close ui-corner-all" role="button"><span class="ui-icon ui-icon-closethick">close</span></a></div><div id="connectionPanel" style="width: auto; height: 143px; display: block; opacity: 0; min-height: 0px;" class="ui-dialog-content ui-widget-content" scrolltop="0" scrollleft="0"><img src="/TMIBBWEBServizi/Common/Client/Contents/style/site/site.1.0.0/images/attesa.gif" style="margin: auto;"></div></div><div class="ui-dialog ui-widget ui-widget-content ui-corner-all popup-dialog ui-draggable" tabindex="-1" role="dialog" aria-labelledby="ui-id-2" style="display: none; outline: 0px; z-index: 1000;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix" style="background-color: rgb(53, 119, 69);"><span id="ui-id-2" class="ui-dialog-title">&nbsp;</span><a href="#" class="ui-dialog-titlebar-close ui-corner-all" role="button"><span class="ui-icon ui-icon-closethick">close</span></a></div><div id="pop" class="ui-dialog-content ui-widget-content"></div></div></body>




    <script type="text/javascript">
        $(function () {
            $(".section").css("margin-top", "0");
            $(".section").css("padding-bottom", "0");
            $(".vnt-filter").css('background-color', '#f7fcf7');
            $("#youBizWhiteBackground.vnt-filter").css('background-color', 'white');

            $(".popup-dialog .ui-widget-header").css("background-color", "#357745");
        });
    </script>

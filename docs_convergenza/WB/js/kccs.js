	var movimentiTB = null, 
		startNumMov = 50, 
		totNumMov = 0,
		nullValue = 'n.d.',
		movimentiFunction = (function () {
			"use strict";
			var genContainer = $('#resultsOK'),
				zoomMenuMsgs = [
					'Apri tutti',
					'Chiudi tutti'
				],
				zoomMenuTimeout = null,
				zoomMenuItems = { "1": [], "2": [] },
				zoomMenuLastItem = 0,
				expandableMovs = [],
				// Methods
				updateZoomMenu,
				styleMenuItems,
				initAll,
				initElHandlers,
				preventClick;
			preventClick = function (e) {
				e.preventDefault();
				e.stopPropagation(); 
			};
			updateZoomMenu = function () {
				var zoomMovTooltip, closedMovs;
				zoomMenuLastItem = 0;
				expandableMovs.length = 0;
				movimentiTB.tbody.find('tr.data').each(function () {
					var tr = $(this);
					if (tr.find('.desc').length) {
						expandableMovs.push(tr);
					}				
				});
				// Controllo se ci sono movimenti espandibili
				if (expandableMovs.length > 0) {
					closedMovs = 0;
					$.each(expandableMovs, function () {
						if (!$(this).hasClass('master')) {
							closedMovs += 1;
						}
					});
					// Se almeno un movimento espandibile è chiuso, attivo "apri tutti"
					if (closedMovs > 0) {
						zoomMenuLastItem = 1;
					}
					// Se almeno un movimento espandibile è aperto, attivo "chiudi tutti"
					if ((expandableMovs.length - closedMovs) > 0) {
						zoomMenuLastItem = (zoomMenuLastItem === 1)? 2 : 3;
					}
				}
				zoomMovTooltip = (zoomMenuLastItem !== 0)? '' : 'non ci sono movimenti espandibili';
				genContainer.find('.zoommovb').not('.off').attr('title', zoomMovTooltip);
				styleMenuItems(zoomMenuItems, zoomMenuLastItem);
			};
			styleMenuItems = function (menuItems, menuLastItem) {
				// Attivo/disattivo le voci del menu
				switch (menuLastItem) {
					case 0: // Nessun movimento espandibile
						menuItems["1"].eq(0).removeClass('last').hide();
						menuItems["2"].eq(0).removeClass('last').hide();
						menuItems["1"].eq(1).removeClass('last').hide();
						menuItems["2"].eq(1).removeClass('last').hide();
						break;
					case 1: // Apri tutti
						menuItems["1"].eq(0).addClass('last').show();
						menuItems["2"].eq(0).addClass('last').show();
						menuItems["1"].eq(1).removeClass('last').hide();
						menuItems["2"].eq(1).removeClass('last').hide();
						break;
					case 2: // Apri tutti e chiudi tutti
						menuItems["1"].eq(0).removeClass('last').show();
						menuItems["2"].eq(0).removeClass('last').show();
						menuItems["1"].eq(1).addClass('last').show();
						menuItems["2"].eq(1).addClass('last').show();
						break;
					case 3: // Chiudi tutti
						menuItems["1"].eq(0).removeClass('last').hide();
						menuItems["2"].eq(0).removeClass('last').hide();
						menuItems["1"].eq(1).addClass('last').show();
						menuItems["2"].eq(1).addClass('last').show();
						break;
				}
			};
			initAll = function () {
				zoomMenuItems["1"] = $('#zoommenu1').find('li');
				zoomMenuItems["2"] = $('#zoommenu2').find('li');
				// Imposto le label delle scelte
				zoomMenuItems["1"].eq(0).find('a:first').html(zoomMenuMsgs[0]);
				zoomMenuItems["2"].eq(0).find('a:first').html(zoomMenuMsgs[0]);
				zoomMenuItems["1"].eq(1).find('a:first').html(zoomMenuMsgs[1]);
				zoomMenuItems["2"].eq(1).find('a:first').html(zoomMenuMsgs[1]);
				initElHandlers();
			};
			initElHandlers = function () {
				genContainer.find('.zoommovb').not('.off').each(function (index, item) {
					item = $(item);
					var zoommenu = $('#zoommenu' + (index + 1));
					item.mouseover(function () {
						if (zoomMenuLastItem === 0) {
							return;
						}
						if (!zoommenu.is(':visible')) {
							if (zoomMenuTimeout !== null) {
								clearTimeout(zoomMenuTimeout);
								zoomMenuTimeout = null;
							}
							zoommenu.show();
							item.addClass('active');
						}
					}).mouseout(function () {
						if (zoomMenuLastItem === 0) {
							return;
						}
						if (zoommenu.is(':visible')) {
							if (zoomMenuTimeout === null) {
								var hideZoomMenu = function () {
									zoomMenuTimeout = null;
									zoommenu.hide();
									item.removeClass('active');
								};
								zoomMenuTimeout = setTimeout(hideZoomMenu, 200);
							}
						}
					});
				});
				genContainer.find('.zoommenu').each(function (index, item) {
					item = $(item);
					var zoommov = $('#zoommov' + (index + 1));
					item.mouseover(function () {
						if (zoomMenuTimeout !== null) {
							clearTimeout(zoomMenuTimeout);
							zoomMenuTimeout = null;
						}
						zoommov.addClass('active');
					}).mouseout(function () {
						if (zoomMenuTimeout === null) {
							var hideZoomMenu = function () {
								zoomMenuTimeout = null;
								item.hide();
								zoommov.removeClass('active');
							};
							zoomMenuTimeout = setTimeout(hideZoomMenu, 200);
						}
					});
				});
				genContainer.find('.zoommenu a').each(function (index, item) {
					item = $(item);
					var num = (index < 2)? 1 : 2,
						zoommenu = $('#zoommenu' + num),
						zoommov = $('#zoommov' + num);
					item.click(function (e) {
						var data;
						preventClick(e);
						if (item.hasClass('inactive')) {
							return;
						}
						else {
							if ($.inArray(index, [0, 2]) !== -1) { // Apri
								data = movimentiTB.getCachedData();
								movimentiTB.tbody.find('tr.data').each(function (index, tr) {
									tr = $(tr);
									if (tr.find('.desc').length) {
										expandMov(tr, data[index], false);
									}
								});
							} else { // Chiudi
								closeAllMov();
							}
							if (zoomMenuTimeout !== null) {
								clearTimeout(zoomMenuTimeout);
								zoomMenuTimeout = null;
							}
							zoommenu.hide();
							zoommov.removeClass('active');
							updateZoomMenu();
						}
					});
				});
			};
			return {
				"updateZoomMenu": updateZoomMenu,
				"initAll": initAll
			};
		}());
		
	$(function () {
		var aggiungiMov = $('#aggiungiMov');
		movimentiFunction.initAll();
		if (aggiungiMov.length) {
			aggiungiMov.click(function () {
				var currNumMov = movimentiTB.getPageCount() + 15;
				if (totNumMov > currNumMov) {
					$('#resultsOK .TxtRisultatiMsg').show().find('.numRisultatiMsg').html('Stai visualizzando ' + currNumMov + ' movimenti di ' + totNumMov);
				} else {
					currNumMov = totNumMov;
					$('#resultsOK .TxtRisultatiMsg').hide();
				}
				movimentiTB.setPageCount(currNumMov);
			});
		}
	});
	
	function format_descrizione (v, obj) {
		var isExpandable = ($.trim(obj.CAPPuntoVendita) !== '' || $.trim(obj.cittaPuntoVendita) !== '' || $.trim(obj.statoPuntoVendita) !== '');
		v = (obj.nomePuntoVendita === '')? obj.descrizioneTransazione : obj.nomePuntoVendita;
		return (!v)? '' : (isExpandable)? '<span class="desc">' + v + '</span>' : v;
	}
	
	function format_importoValutaAddebito (v, obj) {
		if (obj.segnoImportoMovimentoInValuta === '-') {
			v = obj.segnoImportoMovimentoInValuta + v;
		}
		return (!v)? '' : v;
	}
	
	function format_importoMovimento (v, obj) {
		if (v && obj.valutaMovimento !== '&euro;') {
			v += ' ' + obj.valutaMovimento;
			if (obj.segnoImportoMovimento === '-') {
				v = obj.segnoImportoMovimento + v;
			}
		} else {
			v = '-';
		}
		return v;
	}

	function sort_descrizione (objA, objB) {
		var vA = (objA.nomePuntoVendita === '')? objA.descrizioneTransazione : objA.nomePuntoVendita,
			vB = (objB.nomePuntoVendita === '')? objB.descrizioneTransazione : objB.nomePuntoVendita;
		return (vA == vB)? 0 : (vA > vB)? 1 : -1;
	}

	function sort_dataMovimento (objA, objB) {
		var dataArrA = objA.dataMovimento.split('/'),
			dataArrB = objB.dataMovimento.split('/'),
			vA = parseFloat(dataArrA[2] + dataArrA[1] + dataArrA[0] + objA.oraMovimento.replace(':', '')),
			vB = parseFloat(dataArrB[2] + dataArrB[1] + dataArrB[0] + objB.oraMovimento.replace(':', ''));
		return (vA == vB)? 0 : (vA > vB)? 1 : -1;
	}
	
	function sort_importoValutaAddebito (objA, objB) {
		var vA = parseFloat(objA.segnoImportoMovimentoInValuta + objA.importoTransazioneInValutaAddebito.replace('.', '').replace(',', '.')),
			vB = parseFloat(objB.segnoImportoMovimentoInValuta + objB.importoTransazioneInValutaAddebito.replace('.', '').replace(',', '.'));
		return (vA == vB)? 0 : (vA > vB)? 1 : -1;
	}
	
	function getElementFromField(selectedIndex, id) {
		if ($('#' + id).val() !== "") {
			var elementArray = $('#' + id).val().split(separator);
			return elementArray[selectedIndex];
		}
	}
	
	function callServiceMov() {
		var codiceFunzione = "";
		$("#resultsOK").show();
		var selectedIndex = getIndexCarte();
		var criptedCard = getElementFromField(selectedIndex, 'sCarte');
		if ($('#idUltMov').is(':checked')) {
			codiceFunzione = "U";
			$('#ultimiMovDesc').show();
			$('#estrattoContoDesc').hide();
		}
		else {
			codiceFunzione = "B";
			$('#ultimiMovDesc').hide();
			$('#estrattoContoDesc').show();
		}
		
//		loadUltimiMovimenti(decryptCard(criptedCard), codiceFunzione);
	}
	
	function callServiceDet() {
		$('#idUltMov').attr('checked', 'checked');
		$("#resultsKO").hide();
		var selectedIndex = getIndexCarte();
		var conto = getElementFromField(selectedIndex, 'sConti');
		$("#conto").find("span").text(conto);
		var criptedCard = getElementFromField(selectedIndex, 'sCarte');
		loadDettaglioCartaSaldo(decryptCard(criptedCard));
	}
	
	function jqAJAXKccsCall(url, successFunc, failureFunc, parameters, type) {
		var jqUrl = (url),
			jqSuccessFunc = function(data) { successFunc(data); },
			jqFailureFunc = function() { failureFunc(); };
			callType = (type === null) ? 'json' : type,

		jqAJAXCall('POST', callType, jqUrl, jqSuccessFunc, jqFailureFunc, parameters);
	}

	function loadUltimiMovimenti(numeroCarta, codiceFunzione) {
		var relazioneCarta = $('#relazCarta').val(),
			periodoEstrattoConto = "",
			flagPagamentoRistampa = "?",
			tipoPagamento = $('#tipoPagamento').val(),
			parameters = {
				callType: 'ultimiMovimenti',
				numeroCarta: numeroCarta,
				relazioneCarta : relazioneCarta,
				periodoEstrattoConto : periodoEstrattoConto,
				flagPagamentoRistampa : flagPagamentoRistampa,
				codiceFunzione : codiceFunzione,
				tipoPagamento : tipoPagamento,
				cf: Math.random()
			},
			url = '/carte/callKccs.action';
		setLoadingOnObject(cursorIdContainerMov);
		jqAJAXKccsCall(url, successCallbackUltimiMovimenti, failureCallbackFieldsUltimiMovimenti, parameters);
	}
	
	function expandMov (tr, obj, single) {
		var nextTr = tr.next(), detail = '', citta, cap, stato;
		if (tr.find('.desc').length) {
			if (nextTr.hasClass('detail')) {
				if (single) {
					tr.removeClass('master').removeClass('card');
					nextTr.remove();
				}
			} else {
				citta = $.trim(obj.cittaPuntoVendita);
				cap = $.trim(obj.CAPPuntoVendita);
				stato = $.trim(obj.statoPuntoVendita);
				if (citta !== '') {
					detail += citta;
				}
				if (cap !== '' && cap !== '00000') {
					detail += (detail === '')? cap : ' ' + cap;
				}
				if (stato !== '') {
					detail += (detail === '')? stato : ' - ' + stato;
				}
				tr.addClass('master').addClass('card');
				tr.after($('<tr>', { "class": "detail card" }).append($('<td>', { "colspan": "4" }).html('Dettaglio: ' + detail)));
			}
		}
	}
	
	function closeAllMov () {
		movimentiTB.tbody.find('tr.master').removeClass('master').addClass('card');
		movimentiTB.tbody.find('tr.detail').remove();
	}
	
	function successCallbackUltimiMovimenti(res) {
		unsetLoadingOnObject(cursorIdContainerMov);
		totNumMov = (!res.jsonObjRes.dettaglioMovimento) ? 0 : res.jsonObjRes.jsonObjRes.dettaglioMovimento.length;
//		var vismode = !( (res.jsonObjRes.isEsito == 'false') || (totNumMov === 0) ),
		var vismode = false;
		if (res.jsonObjRes.isEsito == 'true') {
			vismode = true;
		}
		var	numMov = ($('#idUltEst').prop('checked'))? 10000 : startNumMov,
			data,
			excelBtnArr = $('#resultsOK .excelmovlast').not('.off'),
			excelBtnOffArr = $('#resultsOK .excelmovlast.off'),
			zoomBtnArr = $('#resultsOK .zoommovb').not('.off'),
			zoomBtnOffArr = $('#resultsOK .zoommovb.off'),
			tSpese = 0, tPagam = 0, tRendi = 0, dtInAd = "";
		data = totNumMov? res.jsonObjRes.dettaglioMovimento : [];
		if (!movimentiTB) {
			movimentiTB = new TableOrderer('movimenti', {
				"data": data,
				"cellsClasses": ['right', 'left', 'right', 'right'],
				"pageCount": numMov,
				"paginate": false,
				"msgs": { "emptyResults": "Nessun movimento presente" },
				"classTrOver": "evident"
			});
			movimentiTB.trClick(function (tr, obj) {
				expandMov(tr, obj, true);
				movimentiFunction.updateZoomMenu();
			});
			movimentiTB.thClick(function () {
				movimentiFunction.updateZoomMenu();
			});
		} else {
			movimentiTB.setPageCount(numMov);
			movimentiTB.updateData(data);
		}
		if (totNumMov) {
			movimentiTB.orderTable('dataMovimento', 'desc');
			movimentiFunction.updateZoomMenu();
			if (!$('#idUltEst').prop('checked') && totNumMov > startNumMov) {
				$('#resultsOK .TxtRisultatiMsg').show().find('.numRisultatiMsg').html('Stai visualizzando ' + startNumMov + ' movimenti di ' + totNumMov);
			} else {
				$('#resultsOK .TxtRisultatiMsg').hide();
			}
			tSpese = res.jsonObjRes.intestazioneEC.totaleSpese;
			tPagam = res.jsonObjRes.intestazioneEC.totalePagamenti;
			tRendi = res.jsonObjRes.intestazioneEC.periodoRendicontazione;
			dtInAd = res.jsonObjRes.intestazioneEC.dataInizioAddebito;
			$('#btnStampaPaginaMov').closest('.condiz2Mov').show();
			excelBtnArr.show();
			excelBtnOffArr.hide();
			zoomBtnArr.show();
			zoomBtnOffArr.hide();
		} else {
			$('#btnStampaPaginaMov').closest('.condiz2Mov').hide();
			excelBtnArr.hide();
			excelBtnOffArr.show();
			zoomBtnArr.hide();
			zoomBtnOffArr.show();
			$('#resultsOK .TxtRisultatiMsg').hide();
		}
		$('#totMovEnt').html(tSpese);
		$('#totSpese').val(tSpese);
		if ($('#idUltMov').is(':checked')) {
			$('#tr_totPagEnt').hide();
			$('#periodoEC').val('Mese in corso');
		} else {
			//$('#tr_totPagEnt').show();
			$('#totPagEnt').html(tPagam);
			$('#periodoEC').val(tRendi);
		}
		$('#dataAddebitoSpese').html(dtInAd);
		resultCalledService(vismode, true);
		
	}
	
	function failureCallbackFieldsUltimiMovimenti() {
		unsetLoadingOnObject(cursorIdContainerMov);
		resultCalledService(false, true);
	}
	
	function resultCalledService(truorfols, isServiceMov) {
		if (truorfols) {
			$("#btnStampaPaginaMov").show();
			$("#resultsKO").hide();
			if (!isServiceMov) {
				$("#resultsOK").show();
			}
		}
		else {
			$("#btnStampaPaginaMov").hide();
			if (!isServiceMov) {
				$("#resultsOK").hide();
				$("#messaggioSegnalazione").html(errorMsgDet);
				$('#tb-movimenti tbody').empty().append($('<tr><td colspan="4" style="padding:5px!important;">' + $("#resultsKO").html() + '</td></tr>'));
				$("#resultsKO").show();
				$("#limiteSpesa").find('.output').html(nullValue);
				$('#totaleSpese span').html(nullValue);
				$('#residuo span').html(nullValue);
				$("#intestazione span").html(nullValue);
			} else {
				$("#messaggioSegnalazione").html(errorMsgDet);
				$('#tb-movimenti tbody').empty().append($('<tr><td colspan="4" style="padding:5px!important;">' + $("#resultsKO").html() + '</td></tr>'));
			}
		}
	}	
	
	function decryptCard(inputCard) {
		var outputCard = inputCard;
		var length = (inputCard === null) ? 0 : inputCard.length;
		if (length > 0) {
			outputCard = "";
			for (var index = 0; index < length; index++) {
				var currentVal = parseInt(inputCard.charAt(index), 10) - 1;
				if (currentVal < 0) {
					currentVal = 9;
				}
				outputCard += ('' + currentVal);
			}
		}
		return outputCard;
	}
	
	function getIndexCarte() {
		return ($("#selCarte option").length > 0) ? $("#selCarte").prop("selectedIndex") : 0;
	}
	
	function loadDettaglioCartaSaldo(number) {
		var parameters = {
				callType: 'dettaglioCarta',
				numeroCarta: number,
				cf: Math.random()		
			},
			url = '/carte/callKccs.action';
		setLoadingOnObject(cursorIdContainerDett);
		jqAJAXKccsCall(url, successCallbackDettaglioCartaSaldo, failureCallbackFieldsDettaglioCartaSaldo, parameters);
	}
	
	function successCallbackDettaglioCartaSaldo(res) {
		unsetLoadingOnObject(cursorIdContainerDett);
		if(res.jsonObjRes.isEsito == 'true') {
			$("#limiteSpesa").find('.output').html(formatValuta(res.jsonObjRes.datiCarta.limiteSpesaMensile, true));
			$('#totaleSpese span').html(formatValuta(res.jsonObjRes.datiCarta.saldoContabile, false));
			$('#residuo span').html(formatValuta(res.jsonObjRes.datiCarta.disponibilita, false));
			
			$('#relazCarta').val(res.jsonObjRes.datiCliente.relazioneClienteConto);
			$('#descTipoPagamento').val(res.jsonObjRes.datiCarta.descTipoPagamento);
			$('#accountId').val($("#conto").find("span").html());
			var cliente = res.jsonObjRes.datiCliente.nome + ' ' + res.jsonObjRes.datiCliente.cognome;
			$("#intestazione").find("span").text(cliente);			
			$('#dispResidua').val(formatValuta(res.jsonObjRes.datiCarta.disponibilita, false));
			$('#tipoPagamento').val(res.jsonObjRes.datiCarta.tipoPagamento);
			callServiceMov();
		}else {
			resultCalledService(false, false);
		}
	}
	
	function formatValuta(valuta, hideDec) {
		
		if (hideDec) {
			var pos = valuta.indexOf(',');
			if (pos > -1) {
				valuta = valuta.substring(0, pos);
			}
		}
		return (valuta + ' &euro;');
	}
	
	function failureCallbackFieldsDettaglioCartaSaldo() {
		unsetLoadingOnObject(cursorIdContainerDett);
		resultCalledService(false, false);
	}	
	
	function loadDettaglioCartaRetry() {
		var card = $('#tempCryptCard').val();
		loadDettaglioCartaSaldo(card);
	}
	
	function loadDettaglioCarta(number, link) {
		$('#tempCryptCard').val(number);
		var parameters = {
				callType: 'dettaglioCarta',
				numeroCarta: decryptCard(number),
				urlVariazione: link,
				cf: Math.random()		
			},
			url = '/carte/callKccs.action';
		setLoadingOnObject(cursorIdContainerDett);
		jqAJAXKccsCall(url, successCallbackDettaglioCarta, failureCallbackFieldsDettaglioCarta, parameters);
	}

	function criptNumeroCarta(numCarta) {
		var criptCard = '';
		for(var i = 0; i < numCarta.length-3; i++){
			var currentChar = (numCarta.charAt(i) == '-') ? ' ' : '*';
			criptCard += currentChar;			
		}
		return criptCard + numCarta.substring(numCarta.length-3);
	}
	
	function successCallbackDettaglioCarta(res) {
		unsetLoadingOnObject(cursorIdContainerDett);
		if(res.jsonObjRes.isEsito == 'true'){
			$('#numCartaCredito').html(criptNumeroCarta(res.jsonObjRes.datiCarta.numeroCarta));
			var titolare = res.jsonObjRes.datiCliente.nome +" "+ res.jsonObjRes.datiCliente.cognome;
			$('#titolare').html(titolare);
			$('#dataEmissione').html(res.jsonObjRes.datiCarta.dataEmissioneCarta);
			$('#dataScadenza').html(res.jsonObjRes.datiCarta.dataScadenzaCarta);
			$('#tipoPagamento').html(res.jsonObjRes.datiCarta.descTipoPagamento);			
			if(res.jsonObjRes.datiCarta.tipoPagamento != 'F'){//Se non "A saldo"
				$('#rigaRata').show();
				$('#rigaPlafond').attr('class', 'pari');
				$('#importoRata').html(formatValuta(res.jsonObjRes.datiCarta.importoRata, false));
			}else{
				$('#rigaRata').hide();
				$('#rigaPlafond').attr('class', 'dispari');
			}	
			var linkModificaPlafond = res.jsonObjRes.datiCarta.variazionePlafond;
			if(linkModificaPlafond!=null && linkModificaPlafond!="")
			{
				linkModificaPlafond += "&cartaSelected=" + criptNumeroCarta(res.jsonObjRes.datiCarta.numeroCarta);
				$('#limSpesaMensile').html(formatValuta(res.jsonObjRes.datiCarta.limiteSpesaMensile, true)+"<span class=\"margLeftMedium\">"+
						"<a href="+linkModificaPlafond+" id=\"linkModificaPlatfond\"><img src=\"/img/ret/ico1gr_modifica.gif\"></a></span>");
			}
			else
			{
				$('#limSpesaMensile').html(formatValuta(res.jsonObjRes.datiCarta.limiteSpesaMensile, true));
			}
			
			openPopOverLayer('layeralert1', 'floating', 2);
		}
		else {
			openPopOverLayer('layeralertWar', 'floating', 2);
		}		
	}
	
	function failureCallbackFieldsDettaglioCarta() {
		unsetLoadingOnObject(cursorIdContainerDett);
		openPopOverLayer('layeralertWar', 'floating', 2);
	}
	
	function matchUserCards() {
		var parameters = {
				callType: 'matchCards',
				cf: Math.random()		
			},
			url = '/carte/callKccs.action';
		jqAJAXKccsCall(url, callbackMatchCards, callbackMatchCards, parameters);
	}
	
	function callbackMatchCards(res) {
		
		var result = res.jsonObjRes.isEsito;
		var msg = res.jsonObjRes.msgEsito;
	}
	
	function initializeCards() {
		var carte = $("#selCarte");
		carte.empty();
		$("#messaggioSegnalazione").empty();
		if (dati.length === 0) {
			resultCalledService(false, false);
		} else if(dati.length == 1) {
			carte.replaceWith("<span class='output'>"+getAsLongCardNumber(dati[0].carta)+"</span>");
			callServiceDet();
		} else {
			for (i = 0 ; i < dati.length; i++) {
				var optionTag = (selCN == dati[i].carta) ? '<option selected="selected">' : '<option>';
				optionTag += (getAsLongCardNumber(dati[i].carta) + '</option>');
				carte.append(optionTag);
			}
			callServiceDet();
		}
	}
	
	function getAsLongCardNumber(cardNumber) {
		var longCardNumber = cardNumber;
		if (longCardNumber.length == 4) {
			longCardNumber = '*** *** *** ' + longCardNumber;
		}
		return longCardNumber;
	}

	function doInfoCardAddebito() {
		var selectedIndex = getIndexCarte();
		var ggAddebito = getElementFromField(selectedIndex, 'sGgAddebito');
		var linkGgAddebito = $('#sPopupCardAddebito').val() + ggAddebito;
		cstPopup(linkGgAddebito,'Date di addebito',350,600);
	}
	
	function downloadExcel() {
		var codiceFunzione = "";
		var selectedIndex = getIndexCarte();
		var criptedCard = getElementFromField(selectedIndex, 'sCarte');
		if ($('#idUltMov').is(':checked')) {
			codiceFunzione = "U";	
		}
		else {
			codiceFunzione = "B";		
		}
		var relazioneCarta = $('#relazCarta').val();
		$('#numeroCarta').val(decryptCard(criptedCard));
		$('#relazioneCarta').val(relazioneCarta);
		$('#codiceFunzione').val(codiceFunzione);
		$('#intestatario').val($("#intestazione").find("span").text());
		$('#downloadExcelForm').submit();
		setTimeout(function () { resetFormFields(); }, 500);		
	}

	function resetFormFields() {
		$('#numeroCarta').val("");
	}
	
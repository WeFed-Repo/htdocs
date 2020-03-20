

function openEsitiPopUp(url, titolo, larghezza, altezza)
{
    var sinistra = 0;
    var sopra = 0;
    var popupStampa;
    if (titolo=='Dettaglio Esiti') {
      if(window.screenX) {
        sinistra = (window.outerWidth/2)+window.screenX-(larghezza/2);
        sopra = (window.outerHeight/2)+window.screenY-(altezza/2);
      } else {
        // Per Internet Explorer
        sinistra = (screen.availWidth/2)-(larghezza/2);
        sopra = (screen.availHeight/2)-(altezza/2);
      }
      parametri = "height="+altezza+",width="+larghezza+",resizable=yes,scrollbars=no,screenX="+sinistra+",left="+sinistra+",screenY="+sopra+",top="+sopra+",dependent=yes";
      var popupStampa = window.open(url, "DettaglioEsito", parametri);
           
    }
    if(titolo=='Stampa') {
      if(window.screenX) {
        sinistra = (window.outerWidth/2)+window.screenX-(larghezza/2);
        sopra = (window.outerHeight/2)+window.screenY-(altezza/2);
      } else {
        // Per Internet Explorer
        sinistra = (screen.availWidth/2)-(larghezza/2);
        sopra = (screen.availHeight/2)-(altezza/2);
      }
      parametri = "height="+altezza+",width="+larghezza+",resizable=yes,scrollbars=no,screenX="+sinistra+",left="+sinistra+",screenY="+sopra+",top="+sopra+",dependent=yes";
      popupStampa = window.open(url, "Stampa", parametri);
    }
}

/*
 *
 * Utilizzata per la paginazione
 */
function submit(action) {
    if (document.masterform['pagesize'].value!='') action = action+ "&checkIncassiSottodistintePageSize="+document.masterform['pagesize'].value;
    document.forms['masterform'].action = action; 
    document.forms['masterform'].submit();          
}

function getFirstItemForPage(requestedPage)
{
        var requestedPageNumber = ((requestedPage == undefined) || (isNaN(requestedPage))) ? 1 : requestedPage;
        var esitiPageSize = (stringIsEmpty(document.masterform['pagesize'].value)) ? getQueryParam('checkIncassiSottodistintePageSize') : document.masterform['pagesize'].value;
        var first_item = ((esitiPageSize * ( requestedPageNumber - 1)));
        if ((!first_item) || (isNaN(first_item))) {
            first_item = 0;
        }
        return first_item;
}

function navigaPerPagina() {
	
	var valueChanged = document.masterform['checkChangeValue'].value;
	if ( valueChanged == 1){
		var valueConfirm = confirm("Attenzione, le modifiche effettuate non verranno salvate. Si desidera procedere?");
		if (valueConfirm === false){
			return false;
		}
	}
	
    var current = location.search;
    // pagina alla quale vuole andare utente
    var p = document.masterform['pagina'].value;
    if (stringIsEmpty(p)) {
        return;
    } else if (p == 0) {
        p = 1;
        document.masterform['pagina'].value = '1';
    }
    else
    {                                               
        var numRecord = document.masterform['numrecord'].value;
        var numRecordPerPagine = document.masterform['pagesize'].value;
        var maxNumPagine = 0;
        if(numRecordPerPagine > 0)
        {
            if ((numRecord % numRecordPerPagine) == 0)
                maxNumPagine = numRecord/numRecordPerPagine;
            else
                maxNumPagine = Math.ceil(numRecord/numRecordPerPagine); 
        }
        if ((p > maxNumPagine) && (maxNumPagine > 1))
        {
            p = maxNumPagine;
            document.masterform['pagina'].value = maxNumPagine;
        }
    }
    // inserimento in querystring
    var dtPageParam = document.masterform['nomeCampoPagina'].value;
    var dtpageQs = getQsForParam(dtPageParam);
    var newDtPageQs = dtPageParam+'='+p;
    if (dtpageQs) {
      current = current.replace(dtpageQs, newDtPageQs);
    } else {
      current += '&'+newDtPageQs;
    }
    // offset
    var first_item = getFirstItemForPage(p);
    var offsetParam = 'checkIncassiSottodistinteOffset';
    var offsetQs = getQsForParam(offsetParam);
    var newOffsetQs = offsetParam+'='+first_item;
    if (offsetQs) {
      current = current.replace(offsetQs, newOffsetQs);
    } else {
      current += '&'+newOffsetQs;
    }
    var url = location.protocol + "//" + location.host + '/ibbweb2/incassi/ricCheckDistinta.action'; //location.pathname;
    var queryString = ( (current) ? ((current.indexOf('?') === 0) ? current : '?'+current) : '');
    location.href = url + queryString;
}

    function onlyRealNumbers(evento){   
        if(window.event || !evento.which) // IE o NE?
        {
            tasto = evento.keyCode; // per IE
        }
        else if(evento) // netscape
        {
            tasto = evento.which;
        }
        
        // gestione caso tasto backspace e tab
        if (tasto == 8 || tasto == 9 )
        {
            return true;
        }   

        if ((tasto < 48 || tasto > 57) && tasto != 13)
        {
            return false;
        }   

        if( tasto == 13  )//premuto invio
        {
            //navigaPerPagina();
            //occorre eseguire una chiamata alla submit opportunamente modificata   
            return false;
        }
        return true;  
    }

    function goToPage(valorePagina) {
    	
    	var valueChanged = document.masterform['checkChangeValue'].value;
    	if ( valueChanged == 1){
    		var valueConfirm = confirm("Attenzione, le modifiche effettuate non verranno salvate. Si desidera procedere?");
    		if (valueConfirm === false){
    			return false;
    		}
    	}
    	
    	var dtSortParam = document.masterform['dtSort'].value;
        var query;
        var p = valorePagina;
        //log.warn('gotToPage(): '+p);
        //document.getElementById('link').value = '${action}'+'.action';
        var link = p;
        //link=link.substring(link.indexOf('(')+2,link.indexOf(')')-1);
        var url;
        var pos = link.indexOf('?');

        if(pos >= 0) {
            query = link.substring(pos+1);
            url = link.substring(0, pos);
        } else {
            query = "";
            url = link;
        }
        
        var keyValuePairs = [];
        var requestedPageParam = document.masterform['nomeCampoPagina'].value;
        //"<%= new org.displaytag.util.ParamEncoder("esiti").encodeParameterName(org.displaytag.tags.TableTagParameters.PARAMETER_PAGE) %>";
        var requestedPageNumber = 1;
        
        //var p;
        if(query) {
            var qParams = query.split("&");
            var j = 0;
            for(var i=0; i < qParams.length; i++) {
            	if ( (qParams[i].indexOf('prev_iban_') == -1) &&
            		 (qParams[i].indexOf('orig_iban_') == -1) &&	
            		 (qParams[i].indexOf('iban_') == -1) &&	
            		 (qParams[i].indexOf('max_ds_') == -1)    &&
            		 (qParams[i].indexOf('min_ds_') == -1)    && 
            		 (qParams[i].indexOf('orig_tipoSequenzaIncasso_') == -1) &&
            		 (qParams[i].indexOf('prev_tipoSequenzaIncasso_') == -1) &&
            		 (qParams[i].indexOf('tipoSequenzaIncasso_') == -1) &&
            		 (qParams[i].indexOf('dae_') == -1) &&
            		 (qParams[i].indexOf('ds_') == -1) &&
            		 (qParams[i].indexOf('orig_ds_') == -1) &&
            		 (qParams[i].indexOf('orig_tipoIncasso_') == -1) &&
            		 (qParams[i].indexOf('prev_tipoIncasso_') == -1) &&
            		 (qParams[i].indexOf('tipoIncasso_') == -1) &&
            		 (qParams[i].indexOf('orig_ibanCreditore_') == -1 ) &&
            		 (qParams[i].indexOf('prev_ibanCreditore_') == -1 ) &&
            		 (qParams[i].indexOf('ibanCreditore_') == -1) && 
            		 (qParams[i].indexOf('num_sottodistinta_') == -1) ){
            		
            		keyValuePairs[j] = qParams[i];
            		j++;
            	}
            	
                //log.debug('keyValuePairs:   '+keyValuePairs[i]);
                /*
                if (keyValuePairs[i].substring(keyValuePairs[i].length-4)=="-p=1") {
                    keyValuePairs[i] = keyValuePairs[i].substring(0,keyValuePairs[i].length-4)+'-p='+p;
                } 
                if (keyValuePairs[i].substring(keyValuePairs[i].length-3)=="-p=") {
                    keyValuePairs[i] = keyValuePairs[i].substring(0,keyValuePairs[i].length-3)+'-p='+p;
                }
                if (keyValuePairs[i].indexOf(requestedPageParam) === 0) {
                    p = keyValuePairs[i].substring(keyValuePairs[i].indexOf('=')+1);
                }
                */
            }
        }

        var first_item = getFirstItemForPage(p);
        document.forms[0].elements['first_item_count'].value = first_item;
        var eoElement = document.forms[0].elements['checkIncassiSottodistinteOffset'];
        eoElement.value = first_item;
        tmp = '';
        // --- offset
        var _offset = false;
        var _dtSorted = false;
        for(var i=0; i < keyValuePairs.length ; i++) {
            //log.warn(' ===== '+keyValuePairs[i]);
            if (/=$/.test(keyValuePairs[i])) {
                log.info('Skipping empty var "'+keyValuePairs[i]+'"');
            } else if (keyValuePairs[i].indexOf('tipodispo=') == 0){
                log.info('Skipping tipodispo var "'+keyValuePairs[i]+'"');
            } else if (keyValuePairs[i].indexOf('fromFilter=') == 0){
                log.info('Skipping fromFilter var "'+keyValuePairs[i]+'"');
            } else {
                tmp += keyValuePairs[i]+'&';
            }
            if (keyValuePairs[i].indexOf('checkIncassiSottodistinteOffset') === 0) {
                _offset = true;
            }
            if (keyValuePairs[i].indexOf(dtSortParam+'=') === 0) {
                _dtSorted = true;
            }
        }
        if (!_offset) {
            tmp += 'checkIncassiSottodistinteOffset='+first_item+'&';
        }
        if (!_dtSorted) {
            tmp += 'fromFilter=true&';
        }
        // --- tipo dispo
        /*
        if (document.forms[0].elements['tipodispo'] != null) {
          var tipodispo = document.forms[0].elements['tipodispo'].value;
          tmp += 'tipodispo='+tipodispo+'&';
        }
        */
        tmp = tmp.substring(0,tmp.length -1 );
        //log.warn('tmp: '+tmp);
        
        //document.forms['masterform'].action = url+'?'+tmp; 
        //document.forms['masterform'].submit();
        location.href = url+'?'+tmp;
    }

    function setItemPage(number, action)
    {   
        document.masterform.pagesize.value=number;
        submit(action);
    }
    
    function setColorItem()
    {
        if(is_ie4up)
         {
            document.all['item_10'].className = 'testoBlackSmallBold';
            document.all['item_20'].className = 'testoBlackSmallBold';
            document.all['item_50'].className = 'testoBlackSmallBold';
            document.all['item_100'].className = 'testoBlackSmallBold';
            document.all['item_'+document.masterform.max_items_number.value].className = 'testoRedSmallBold';
        }
        else
        {
            document.links['item_10'].className = 'testoBlackSmallBold';
            document.links['item_20'].className = 'testoBlackSmallBold';
            document.links['item_50'].className = 'testoBlackSmallBold';
            document.links['item_100'].className = 'testoBlackSmallBold';
            document.links['item_'+document.masterform.max_items_number.value].className = 'testoRedSmallBold';
        }
    }
    
 function fincaturaTitolo(){
    var k=0;    
    var all = document.getElementsByTagName('*');   
    for(i=0; i<all.length; i++ )
    if (all[i].className=="sottoTitoloTabella fincaturaTabella")    
    {
    newnode=document.createElement("img");
    newnode.setAttribute('src',"../static/images/pager/fincatura-viola.gif");
    newnode.setAttribute('name',"dynamic");
    newnode.setAttribute('id',"dynamic"+k);
    all[i].appendChild(newnode);
    k++; 
    }
}
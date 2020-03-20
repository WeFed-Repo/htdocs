(function ($) {

    $.fn.customWrapping = function (cols) {
        this.filter('textarea').each(function () {
       		hookTextArea($(this), cols);
        });

        return this;
    };
    
    var FULL_NEWLINE = "\r\n"
    var NEWLINE = "\n"
    	
    function hookTextArea($el, cols) {
    	
    	//alert($el.attr("id"));
    	//alert($el.is('textarea'));
    	
        if (typeof (cols) == 'undefined') {
            cols = parseInt($el.attr('cols'), 10);
        }

        $el.prop('cols', cols + 1);
        $el.prop('wrap', 'off');

        wordWrapTextArea($el, cols);

        var isWrapping = false
        var runOnInput = function (e) {  

            if (e.type == 'propertychange' && e.originalEvent.propertyName != 'value') return;
            if (isWrapping) return;

            isWrapping = true;
            try {
                //aggiunge attributo
                if($(this).val()!=""){
                    var attr = $(this).attr('name').substring(1,6);
                    $("#A"+attr).val("D");
                }
                wordWrapTextArea($el, cols);
            } finally {
                isWrapping = false;
            }
        };

        if ($el.get(0).attachEvent && navigator.appVersion.indexOf('MSIE 8.0') >= 0) 
            $el.on('propertychange', runOnInput);
        else 
            $el.on('input', runOnInput);
    }

    function wordWrapTextArea($el, cols) {
    	   	
        var saveCaret = getCaretPosition($el.get(0))

        var text = $el.val();
        
        text = wordWrap(text, cols);
        
        if(isYouTrade != 'S'){
        	$el.val(text.toUpperCase())
        }else{
        $el.val(text)
        }

        setCaretPosition($el.get(0), saveCaret);
        
    	//controlla crt digitati, se troppe righe taglia ed avverte utente
    	checkRowsAndDelete($el,text,cols); 
        
    }
    
    function wordWrap(text, cols) {
        if (cols < 1) return text;

        text.replace(FULL_NEWLINE, NEWLINE);

        var sb = [];
        var next;
        for (var i = 0; i < text.length; i = next) {
            var eol = text.indexOf(NEWLINE, i);
            if (eol == -1)
                next = eol = text.length;
            else
                next = eol + NEWLINE.length;

            if (eol > i) {
                do {
                    var len = eol - i;
                    if (len > cols) len = breakLine(text, i, cols);
                    sb.push(text.substr(i, len));
                    sb.push(NEWLINE);

                    i += len;
                    //while (i < eol && Char.IsWhiteSpace(text[i])) i++;
                    if (i < eol && isCharWhiteSpace(text[i])) i++;
                } while (eol > i);
            }
            else {
                sb.push(NEWLINE);
            }
        }

        return sb.join('');
    }

    function breakLine(text, pos, max) {
        var i = max;
        while (i >= 0 && !isCharWhiteSpace(text[pos + i])) i--;
        if (i < 0) return max;
        while (i >= 0 && isCharWhiteSpace(text[pos + i])) i--;
        return i + 1;
    }

    function isCharWhiteSpace(char) {
        return /\s/.test(char);
    }

    //http://blog.vishalon.net/index.php/javascript-getting-and-setting-caret-position-in-textarea/
    function getCaretPosition(ctrl) {
        var caretPos = 0;	
        if(navigator.userAgent.indexOf("Firefox")!=-1){ //Firefox
        	caretPos = ctrl.selectionStart;
        }
        else if (document.selection && navigator.appVersion.indexOf('MSIE 8.0') >= 0) { // IE8 Support
            //try {
            //    ctrl.focus();
            //} catch (ex) {}
            //var Sel = document.selection.createRange();
            //Sel.moveStart('character', -ctrl.value.length);
            //caretPos = Sel.text.length;
            caretPos = getCaretPositionIE8(ctrl);
        }
            // Firefox support
        else if (ctrl.selectionStart || ctrl.selectionStart == '0')
            caretPos = ctrl.selectionStart;
        return (caretPos);
    }
    //http://davidshariff.com/blog/textarea-caret-position-in-ie/
    function getCaretPositionIE8(el) {

        var start = 0,
        range = el.createTextRange(),
        range2 = document.selection.createRange().duplicate(),
        // get the opaque string
        range2Bookmark = range2.getBookmark();

        // move the current range to the duplicate range
        range.moveToBookmark(range2Bookmark);

        // counts how many units moved (range calculated as before char and after char, loop count is the position)
        while (range.moveStart('character', -1) !== 0) {
            start++;
        }

        return start;

    }

    function setCaretPosition(ctrl, pos) {
        if (ctrl.setSelectionRange){
            try {
                ctrl.focus();
                
                if(navigator.userAgent.indexOf("Firefox")!=-1){ //Firefox
                	openTextareaBoxFirefox(ctrl);//bug firefox se textarea chiusa
                	ctrl.setSelectionRange(pos, pos);
                }else{
                	ctrl.setSelectionRange(pos, pos);
                }
            } catch (ex) {}
        }
        else if (ctrl.createTextRange) {
            var range = ctrl.createTextRange();
            range.collapse(true);
            range.moveEnd('character', pos);
            range.moveStart('character', pos);
            range.select();
        }
    }
    
    function checkRowsAndDelete($el,val,cols){
    	
    	var maxRowTotTextareaGroup = 1123;
    	
    	var dimTx = giveMeTextareaDimensions($el.attr("id"));
    	var maxRows = dimTx[0][1][0];
        
    	var totParz, currRowsToSet, otherRows = 0;
    	
    	var txtID = $el.attr("id");
    	
    	if(maxRows=="")return false;
    	
    	val = val.replace(FULL_NEWLINE, NEWLINE);
    	
    	var numberOfLineBreaks;
    	var enteredTextEncoded = encodeURI(val);
    	var linebreaks = (enteredTextEncoded.match(/%0A/g));
    	(linebreaks != null) ? numberOfLineBreaks = linebreaks.length : numberOfLineBreaks = 0;
    	
        //CONTROLLO PARZIALE RIGHE TEXTAREA CORRENTE  
    	if(numberOfLineBreaks > maxRows){ //cut value
    		
            var newVal = "";
            var arrValues = val.split(NEWLINE);
	        $.each(arrValues, function (intIndex, objValue) {
	        	
	        	if(maxRows <= intIndex){
	        		return false;
	        	}
	        	newVal = newVal + objValue + NEWLINE;
	        });
            $el.val(newVal);
            
            if(isTextareaGroupToCheck(txtID)){
	    		//Valorizza CONTATORE Righe Singolo Messaggio Corrente
	    		var txtIDCount = "";
	    		switch(txtID) {
		    	    case "C96110":
		    	    	txtIDCount = "#C45AR0";
		    	        break;
		    	    case "C96140":
		    	    	txtIDCount = "#C46AR0";
		    	        break;
		    	    case "C96120":
		    	    	txtIDCount = "#C47AR0";
		    	        break;
		    	    case "C96240":
		    	    	txtIDCount = "#C49GR0";
		    	        break;
		    	    case "C96250":
		    	    	txtIDCount = "#C49HR0";
		    	        break;    
		    	    default:
		    	    	break;
	    		}  
	        	if($(txtIDCount).length > 0) {
	        		var currRows = getRows($("#"+txtID),aForm.elements[txtID].value);
	        		$(txtIDCount).val(currRows + "/" + maxRows);	
	        	}
			}
            
            alert("Attenzione. \nE\' stato superato il numero massimo di righe previste ("+maxRows+") nell\'area di Testo.");
        	
            numberOfLineBreaks = getRows($el,aForm.elements[txtID].value);
            
    	}
	        	
    	//SK66038 - CONTROLLI PER UN GRUPPO DI TEXAREA DEFINITO e VALORIZZA CAMPI CONTATORI
    	//Controlla il numero di righe totali digitate nel gruppo di textarea
    	if(isTextareaGroupToCheck(txtID)){
    		var aForm = document.forms['formInserimento'];
        	if(aForm.elements['C96110']) totParz = getRows($("#C96110"),aForm.elements['C96110'].value);
        	if(aForm.elements['C96140']) totParz = totParz + getRows($("#C96140"),aForm.elements['C96140'].value);
        	if(aForm.elements['C96120']) totParz = totParz + getRows($("#C96120"),aForm.elements['C96120'].value);
        	if(aForm.elements['C96240']) totParz = totParz + getRows($("#C96240"),aForm.elements['C96240'].value);
        	if(aForm.elements['C96250']) totParz = totParz + getRows($("#C96250"),aForm.elements['C96250'].value);
        
	    	if(totParz > maxRowTotTextareaGroup ){ //cut value
	            var newVal = "";
	            var arrValues = val.split(NEWLINE);
	            otherRows = totParz - numberOfLineBreaks;
	            currRowsToSet = maxRowTotTextareaGroup - otherRows;
		        $.each(arrValues, function (intIndex, objValue) {
		        	if(currRowsToSet <= intIndex){
		        		return false;
		        	}
		        	newVal = newVal + objValue + NEWLINE;
	        });
	            $el.val(newVal);
	    	}
    	
	    	//VALORIZZA CAMPI CONTATORI
	    	if(isTextareaGroupToCheck(txtID)){
	        
	    		//CONTATORE Righe Singolo Messaggio Corrente
	    		var txtIDCount = "";
	    		switch(txtID) {
		    	    case "C96110":
		    	    	txtIDCount = "#C45AR0";
		    	        break;
		    	    case "C96140":
		    	    	txtIDCount = "#C46AR0";
		    	        break;
		    	    case "C96120":
		    	    	txtIDCount = "#C47AR0";
		    	        break;
		    	    case "C96240":
		    	    	txtIDCount = "#C49GR0";
		    	        break;
		    	    case "C96250":
		    	    	txtIDCount = "#C49HR0";
		    	        break;    
		    	    default:
		    	    	break;
	    		}  
	    		
	        	if($(txtIDCount).length > 0) {
	        		var currRows = getRows($("#"+txtID),aForm.elements[txtID].value);
	        		$(txtIDCount).val(currRows + "/" + maxRows);	
	        	}
            
	        	//CONTATORE Righe Totali Msg 
	   			var str = '';
	   			if(totParz > maxRowTotTextareaGroup){
	   				str = maxRowTotTextareaGroup + "/" + maxRowTotTextareaGroup;	
	   			}else{
	   				str = totParz + "/" + maxRowTotTextareaGroup;
	   			}
	        	if($("#COUNTTOT_C96110").length > 0) $("#COUNTTOT_C96110").val(str);
	        	if($("#COUNTTOT_C96140").length > 0) $("#COUNTTOT_C96140").val(str);
	        	if($("#COUNTTOT_C96120").length > 0) $("#COUNTTOT_C96120").val(str);
	        	if($("#COUNTTOT_C96240").length > 0) $("#COUNTTOT_C96240").val(str);
	        	if($("#COUNTTOT_C96250").length > 0) $("#COUNTTOT_C96250").val(str);
	        }
    	}
    	
    	if(isTextareaGroupToCheck(txtID)){
    		if(totParz > maxRowTotTextareaGroup ){
    			alert("Attenzione. \nE\' stato superato il numero massimo di righe previste ("+maxRowTotTextareaGroup+") di tutte le aree di Testo.");
    		}
    	}
    }
    
    
    function isTextareaGroupToCheck(id){
    	if(id=='C96110'||id=='C96140'||id=='C96120'||id=='C96240'||id=='C96250'){
    	return true;
    	}else{
    		return false;
    	}
    }

	 function getRows($el,val){
    	val = val.replace(FULL_NEWLINE, NEWLINE);
    	var numberOfLineBreaks;
    	var enteredTextEncoded = encodeURI(val);
    	var linebreaks = (enteredTextEncoded.match(/%0A/g));
    	(linebreaks != null) ? numberOfLineBreaks = linebreaks.length : numberOfLineBreaks = 0;
    	return numberOfLineBreaks;
    }

    function openTextareaBoxFirefox(ctrl){
		var legendObject = getLegendContenitoreID(ctrl);// Cattura l'oggetto legend relativo alla sezione dell'oggetto obj
	    var divContenitore = legendObject.replace("legend", "");// Cattura l'oggetto div contenitore relativo al campo obj
	    $("#div" + divContenitore).show(); // apre il div in cui e' presente il campo obbligatorio
    }
})(jQuery);



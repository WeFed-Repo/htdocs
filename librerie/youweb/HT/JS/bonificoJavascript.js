



$(document).ready(function(){
	formInserimento = $("#formInserimento");
	if ($("#beneficiario").length) {
		//se il form è gia popolato devo mantenere lo stato del checkbox e i dati del beneficiairo
		if (!isNuovoBeneficiario($("#beneficiario"))){
	 		changeDatiBeneficiario($("#beneficiario"));
	 		
	 		if($('#memorizza').attr('checked')){				
				$('#beneficiari').addClass('editchecked');
				abilitaModificaIntestatario(formInserimento);
			}else{
				$('#beneficiari').removeClass('btnAggiungiBeneficiario ').addClass('btnEditCheck');
				disabilitaModificaIntestatario(formInserimento);
			}
	     }

		// click event su Pulsante/checkbox aggiungi/modifica beneficiario
		$("#beneficiari").click(function(e){
			return clickBeneficiari(e);		
		});
		
		
		// inizializzo i beneficiari
		clickBeneficiari(undefined);
	} //chiude if
		$("#dialogIban").on("openDialog", function(){
			$("#formCalcoloIban #abi").attr("value",coordinateTrovaAbiCab.abi);
			$("#formCalcoloIban #cab").attr("value", coordinateTrovaAbiCab.cab);
			delete coordinateTrovaAbiCab.abi;
			delete coordinateTrovaAbiCab.cab;
		})
});

// click event su Pulsante/checkbox aggiungi/modifica beneficiario
window.clickBeneficiari = function(event){
	var beneficiari = $("#beneficiari");
	
	//toggle del checkbox
	if (event!=undefined) {
		event.preventDefault();
		$('#memorizza').attr("checked", !$('#memorizza').attr("checked"));
	}
	
	// ACCESSIBILITY ROLE
	$(beneficiari).attr("role", "button");
	//se attivo il flag aggiungi\modifica
	if($('#memorizza').attr('checked')){
		$(beneficiari).attr("aria-pressed", "true");
		
		$('.nickname').show();
		//se si tratta di un nuovo beneficiario
		if(isNuovoBeneficiario($("#beneficiario"))){
			$(beneficiari).addClass('addchecked');
		}else{
			//modifica esistente
			$(beneficiari).removeClass('btnAggiungiBeneficiario').addClass('btnEditCheck').addClass('editchecked');
			abilitaModificaIntestatario(formInserimento);
		}
	}else{
		//disattivo il flag
		$(beneficiari).attr("aria-pressed", "false");
		//caso aggiungi
		if(isNuovoBeneficiario($("#beneficiario"))){
			$(beneficiari).removeClass('addchecked');
			$('.nickname').hide();
		}else{
			//caso modifica
			$(beneficiari).removeClass('editchecked').addClass('btnEditCheck').removeClass('btnAggiungiBeneficiario');;
			//disabilito campi in input e resetto ai valori impostati
			disabilitaModificaIntestatario(formInserimento);
			var codice = $('#beneficiario').val();
			compilaBeneficiario(codice, valorizzaDatiBeneficiario);
		}
	}
}

function visualizzaNickname(sel){

	if($(sel).attr('checked')){
		$('.nickname').show();
	}else{
		$('.nickname').hide();
	}
}

function Trim(str) { 
	return str.replace(/\s+$|^\s+/g,""); 
}

function initPopupJavascript() {
	$('#trovaAbiCab').ajaxDialog('dialogAbiCab', '../pagamenti/abiCab.do?popup=true', { title: 'Ricerca abi e cab'});	
	$('#calcolaIban').ajaxDialog('dialogIban', '../pagamenti/calcoloIBAN.do?popup=true', { title: 'Calcolo IBAN'});	
}

var coordinateTrovaAbiCab;




function abiCab(abi,cab) {
	coordinateTrovaAbiCab = new Object();
	coordinateTrovaAbiCab.abi = abi;
	coordinateTrovaAbiCab.cab = cab;
	//valorizzaAbiCab(abi,cab);
	$('#calcolaIban').click();
	$('#dialogAbiCab').dialog('close');
	
}

function inserisciIban(iban) {
	$('#iban').val(iban);
	$('#dialogIban').dialog('close');
}

function testABI() {
	return null;
}

function checkEnabled(){
	if($('#formInserimento').find('input:checked[name="bonificoVersoNazione"]').attr('value') == 2){
		$('#trovaAbiCab').attr('disabled', true);
		$('#calcolaIban').attr('disabled', true);			
	}else{
		$('#trovaAbiCab').removeAttr('disabled');
		$('#calcolaIban').removeAttr('disabled');
	}
}

function valorizzaDatiBeneficiarioSepa(beneficiario){
	formInserimento=document.getElementById("formInserimento");
	if(formInserimento.nickname)
		formInserimento.nickname.value = unescapeXml(beneficiario[1]);
	formInserimento.nomeBeneficiario.value = unescapeXml(beneficiario[2]);
	var checkedValue = beneficiario[15];
	$(formInserimento).find('[name="bonificoVersoNazione"]').each(function(){
		if($(this).attr('value') == checkedValue){
			$(this).trigger('click');
			checkEnabled();
		}
	});
	if (beneficiario[16].length > 0){
		// coordinate IBAN
		formInserimento.iban.value = beneficiario[16];
	}
	$('#btnIban').trigger("beneficiariEvent", ["enable"]);
}

function valorizzaDatiBeneficiario(beneficiario) {
	formInserimento = document.getElementById("formInserimento");
	if(formInserimento.indirizzo == null){
		valorizzaDatiBeneficiarioSepa(beneficiario);
		return;
	}
}

function changeComboBeneficiario() {
	formInserimento=document.getElementById("formInserimento");
	formInserimento.codBeneficiario.value = "";
}

function valorizzaAbiCab(abi,cab) {
	formInserimento=document.getElementById("formInserimento");
	formInserimento.abi.value = abi;
	formInserimento.cab.value = cab;
}	

function unescapeXml(stringa){

	//la lista dei beneficiari viene popolata con c:out avente escapeXml a true
	//per evitare che i caratteri strani < > " ' & creino problemi nell'array
	//della lista dei beneficiari.
	//Quando li visualizzo pero' devo ritrasformare i caratteri codificati 
	// in html code nel relativo simbolo  

	stringa = stringa.replace(/&#039;/g,"'");

	stringa = stringa.replace(/&#060;/g,"<");
	stringa = stringa.replace(/&lt;/g,"<");

	stringa = stringa.replace(/&#062;/g,">");
	stringa = stringa.replace(/&gt;/g,">");

	stringa = stringa.replace(/&#038;/g,"&");
	stringa = stringa.replace(/&amp;/g,"&");

	stringa = stringa.replace(/&#034;/g,'"');
	stringa = stringa.replace(/&quot;/g,'"');

	return stringa;
}

function valorizzaIban(iPaese, iCheck, iCin, iAbi, iCab, iConto){
	formInserimento=document.getElementById("formInserimento");
	if(formInserimento.abi == null){
		formInserimento.iban.value = iPaese + iCheck + iCin + iAbi + iCab + iConto;
	}else{
		formInserimento.abi.value = iAbi;
		formInserimento.cab.value = iCab;
		formInserimento.conto.value = iConto;
		formInserimento.checkDigit.value = iCheck;
		formInserimento.cin.value = iCin;
		formInserimento.codPaese.value = iPaese;
		formInserimento.visPaese.value = iPaese;
	}
	//testABI();
}

window.changeDatiBeneficiario = function (sel) {
	formInserimento = document.getElementById("formInserimento");
	if (!isNuovoBeneficiario($(sel).parent())) { // SELEZIONO BENEFICIARIO ESISTENTE
		$('.nickname').show();
		// disabilito la checkbox di inserimento/modifica beneficiario
		$('#beneficiari').removeClass('btnAggiungiBeneficiario').removeClass('addchecked').addClass('btnEditCheck').removeClass('editchecked');
		// disabilito i campi di input di inserimento/modifica beneficiario
		disabilitaModificaIntestatario(formInserimento);
		// imposto i dati del beneficiario selezionato
		compilaBeneficiario($(sel).val(), valorizzaDatiBeneficiario);
	} else {
	    //SELEZIONO NUOVO BENEFICIARIO
	  	$('#beneficiari').removeClass('btnEditCheck').removeClass('editchecked').addClass('btnAggiungiBeneficiario')
	    $('#memorizza').attr("checked", false);
	  	$('.nickname').hide();
		resetDatiBeneficiario(formInserimento);
	}
}

window.compilaBeneficiario = function (codice, callback) {
	$.each(listaBeneficiari, function(i, beneficiario) {
		if (beneficiario[0]==codice) { // beneficiario selezionato dal cliente
			//valorizzaDatiBeneficiario(beneficiario);
			callback(beneficiario);
			return false; // break loop
		}
	});
}

/**
 * Disabilita la modifica dei campi di inserimento/modifica beneficiario
 */
window.disabilitaModificaIntestatario = function (formElement) {
	$(formElement).find('input[name="iban"]').attr("readonly", true);
	$(formElement).find('input[name="nomeBeneficiario"]').attr("readonly", true);
	$(formElement).find('input[name="nickname"]').attr("readonly", true);
}

/**
 * Abilita la modifica dei campi di inserimento/modifica beneficiario
 */
window.abilitaModificaIntestatario = function (formElement) {
	$(formElement).find('input[name="iban"]').attr("readonly", false);
	$(formElement).find('input[name="nomeBeneficiario"]').attr("readonly", false);
	$(formElement).find('input[name="nickname"]').attr("readonly", false);
}

/**
 * Svuota i campi di input del beneficiario e ne abilita 
 * la visualizzazione
 */
window.resetDatiBeneficiario = function (formElement) {
	abilitaModificaIntestatario(formElement);
	$(formElement).find('input[name="iban"]').val("");
	$(formElement).find('input[name="nomeBeneficiario"]').val("");
	$(formElement).find('input[name="nickname"]').val("");
}

window.isNuovoBeneficiario = function (element) {
	if (element!=undefined 
		&& $(element).find("option:selected").attr("id")=="nuovoBen") {
		return true;
	}
	return false;
}

oldValue = "";
window.bpComboBox = function (callbackSelection) {
	// CREO LA COMBOBOX
   $.widget( "ui.combobox", {
      version: "@VERSION",

      widgetEventPrefix: "combobox",

      uiCombo: null,
      uiInput: null,
      _wasOpen: false,

      _create: function() {

         var self = this,
             select = this.element.hide(),
             input, wrapper;

         input = this.uiInput =
                  $( "<input />" )
                      .insertAfter(select)
                      .addClass("ui-widget ui-widget-content  ui-combobox-input form-control")
                      .val(select.children(':selected').text())
                      .attr('tabindex', select.attr( 'tabindex'))
                      .attr('aria-autocomplete', 'inline')
                      .css('width', '82%');
         wrapper = this.uiCombo = 
            input.wrap( '<span>' )
               .parent()
               .addClass( 'ui-combobox' )
               .insertAfter( select );
               
         input
          .autocomplete({
             delay: 0,
             minLength: 0,

             appendTo: wrapper,
             source: $.proxy( this, "_linkSelectList" ),
             select: function(event, ui) {
               $(this).attr('title', ui.item.value);
           }
          }).focusin(function() {
          	oldValue = $(this).val();
          	$(this).val("");
          }).focusout(function() {
          	$(this).val(oldValue);
          });
          
         $( "<button>" )
            .attr( "tabIndex", -1 )
            .attr( "type", "button" )
            .attr("aria-label", 'Seleziona beneficiario')
            .insertAfter( input )
            .button({
               icons: {
                  primary: "ui-icon-triangle-1-s"
               },
               text: false})
            .removeClass("ui-corner-all")
            .addClass("ui-button-icon ui-combobox-button dropdown-arrow");

         // Our items have HTML tags.  The default rendering uses text()
         // to set the content of the <a> tag.  We need html().
         input.data( "ui-autocomplete" )._renderItem = function( ul, item ) {
                ul.attr('role','listbox')
			 	 .attr('aria-expanded','true');
               
               return $( "<li>" )
                           .attr('class', item.option.className)
                           .attr('role', 'option')
                           .append( $( "<a>" ).html( item.label ) )
                           .appendTo( ul );

		};
         this._on( this._events );
      },

      _linkSelectList: function( request, response ) {
         var matcher = new RegExp( $.ui.autocomplete.escapeRegex(request.term), 'i' );
         response( this.element.children('option:not([style*="display: none"])').map(function() {  
			var text = $( this ).text();
			var value = $(this).attr('value');
			var id = $(this).attr('id');

			if ( this.value && ( !request.term || matcher.test(text) ) ) {
				var optionData = {
				    label: text,
				    value: text,
				    id:id,
				    option: this
				};
				if (request.term) {
					optionData.label = text.replace(
						new RegExp(
						   "(?![^&;]+;)(?!<[^<>]*)(" +
						   $.ui.autocomplete.escapeRegex(request.term) +
						   ")(?![^<>]*>)(?![^&;]+;)", "gi"),
						   "<strong>$1</strong>");
				}
				return optionData;
			}})
		);
	},

      _events: {
         "autocompletechange input" : function(event, ui) {
            var $el = $(event.currentTarget);
            var changedOption = ui.item ? ui.item.option : null;
            if ( !ui.item ) {
               var matcher = new RegExp( "^" + $.ui.autocomplete.escapeRegex( $el.val() ) + "$", "i" ),
               valid = false,
               matchContains = null,
               iContains = 0,
               iSelectCtr = -1,
               iSelected = -1,
               optContains = null;
               if (this.options.autofillsinglematch) {
                  matchContains = new RegExp($.ui.autocomplete.escapeRegex($el.val()), "i");
               }

               this.element.children( "option" ).each(function() {
                     var t = $(this).text();
                     if ( t.match( matcher ) ) {
                        this.selected = valid = true;
                        return false;
                     }
                     if (matchContains) {
                        // look for items containing the value
                        iSelectCtr++;
                        if (t.match(matchContains)) {
                           iContains++;
                           optContains = $(this);
                           iSelected = iSelectCtr;
                        }
                     }
                });

                if ( !valid ) {
                   // autofill option:  if there is just one match, then select the matched option
                   if (iContains == 1) {
                      changedOption = optContains[0];
                      changedOption.selected = true;
                      var t2 = optContains.text();
                      $el.val(t2);
                      $el.data('ui-autocomplete').term = t2;
                      this.element.prop('selectedIndex', iSelected);
                     
                   } else {
                      // remove invalid value, as it didn't match anything
                      $el.val( '' );
                      // Internally, term must change before another search is performed
                      // if the same search is performed again, the menu won't be shown
                      // because the value didn't actually change via a keyboard event
                      $el.data( 'ui-autocomplete' ).term = '';

                      this.element.prop('selectedIndex', -1);
                   }
                }
            }

            this._trigger( "change", event, {
                  item: changedOption
                });
         },

         "autocompleteselect input": function( event, ui ) {
            ui.item.option.selected = true;
			oldValue = $(ui.item.option).text();
			callbackSelection(ui.item.option);
            this._trigger( "select", event, {
                  item: ui.item.option
               });
         },

         "autocompleteopen input": function ( event, ui ) {
            this.uiCombo.children('.ui-autocomplete')
               .outerWidth(this.uiCombo.outerWidth(true));
         },

         "mousedown .ui-combobox-button" : function ( event ) {
            this._wasOpen = this.uiInput.autocomplete("widget").is(":visible");
         },

		// click sul triangolo che apre la combobox 
         "click .ui-combobox-button" : function( event ) {
            this.uiInput.focus();
            // close if already visible
            if (this._wasOpen)
               return;
            // pass empty string as value to search for, displaying all results
            this.uiInput.autocomplete("search", "");
         }
      },

      value: function ( newVal ) {
         var select = this.element,
             valid = false,
             selected;

         if ( !arguments.length ) {
            selected = select.children( ":selected" );
            return selected.length > 0 ? selected.val() : null;
         }

         select.prop('selectedIndex', -1);
         select.children('option').each(function() {
               if ( this.value == newVal ) {
                  this.selected = valid = true;
                  return false;
               }
            });

         if ( valid ) {
            this.uiInput.val(select.children(':selected').text());
            this.uiInput.attr('title', select.children(':selected').text())
         } else {
            this.uiInput.val( "" );
            this.element.prop('selectedIndex', -1);
         }

      },

      _destroy: function () {
         this.element.show();
         this.uiCombo.replaceWith( this.element );
      },

      widget: function () {
         return this.uiCombo;
      },

      _getCreateEventData: function() {
         return {
            select: this.element,
            combo: this.uiCombo,
            input: this.uiInput
         };
      }
    });
    // VISUALIZZO LA COMBOBOX
    if(!isMobile()){
    	$( "#beneficiario" ).combobox();
    }
    
}

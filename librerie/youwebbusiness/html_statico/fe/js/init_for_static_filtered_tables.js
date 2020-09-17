// ATTIVATORE DEI FILTRI AL CLICK

let $table;
let tableData;

$(function () {
    $('[data-filter]').on('click', function () {
        filtraElementi($(this))
	});
	
});

function defaultonPostBodyTB(e) {
	e.tableStyle()
	e.tableCreateMobileVr()
	e.addClass('table-initialized')
}

function filtraElementi($t) {

    $table.bootstrapTable('destroy').bootstrapTable({ data: tableData });

    // classe del bottone attivo
    const s = 'is-selected'
    // salva lo stato iniziale
    const initStateOn = $t.hasClass(s);
    // se NON sono un checkbox, rimuovo la classe "is-selected"
    // da tutti gli elementi eccetto me stesso
    $('[data-filter]').not(this).each(function () {
        $(this).removeClass(s);
        dataFilterStatus($t.data('filter-on'), false);
        dataFilterStatus($t.data('filter-off'), true);
    })
    // se lo stato è on rimetto o tolgo la classe selezionata all'elemento corrente
    if (!initStateOn) $t.addClass(s);
    // attivo/disattivo e mostro/nascondo gli elementi interni ed esterni al bottone
    // come da istruzione dei data attributes "data-filter-on" e "data-filter-off"
    dataFilterStatus($t.data('filter-on'), initStateOn);
    dataFilterStatus($t.data('filter-off'), !initStateOn);
    // Lancio il filtro sulle righe della tabella
    dataFilterActions($t.data('filter-val'), initStateOn);
    // Ridisegna l'HTML delle checkbox e dei radiobuttons
    redrawCheckBoxes();
}

// resetta tutti i filtri
function filtraElementiReset() {
    const s = 'is-selected'
    $table.bootstrapTable('destroy').bootstrapTable({ data: tableData });
    $('[data-filter]').each(function () {
        $(this).removeClass(s)
        $(this).removeAttr('disabled');
        //console.log( $(this).hasClass(s) );
    })
    $('[data-filter="label_desc"]').show();
    $('[data-filter="submit_confirm"]').hide();
}

// Determina il comportamento dell'attributo "data-filter-var"
function dataFilterActions(str, disable) {
    str = str ? str.trim() : ''
    if (disable) {
        filterTab()
    } else {
        let a = str.trim().split(' ')
        // se il valore è vuoto, lancio la funzione di filtro vuota (restituisce tutti i valori)
        if (a[0] == '') {
            filterTab()
        } else {
            let t = []
            a.forEach(function (v) {
                t.push(v)
            })
            filterTab(t)
        }
    }
}

// Comportamento del filtro dei valori del json
function filterTab(action) {
    if (!action) {
        $table.bootstrapTable('filterBy', {})
    } else {
        action.forEach(function (key, i) {
            let obj = {};
            obj[key] = true;
            $table.bootstrapTable('filterBy', obj)
        })
    }
}

// Determina il comportamento degli attributi "data-filter-on" e "data-filter-off"
function dataFilterStatus(str, disable) {
    if (!!str) {
        let a = str.trim().split(' ')
        a.forEach(function (v) {
            const isBtn = v.startsWith("btn_")
            const isCol = v.startsWith("col_")
            if (isCol) {
                $table.bootstrapTable(
                    (disable ? 'hideColumn' : 'showColumn'),
                    (v.replace('col_', ''))
                );
            } else {
                const $e = $('[data-filter="' + v + '"]')
                $e.each(function () {
                    if (disable) {
                        if (isBtn) {
                            $e.attr('disabled', true)
                        } else {
                            $e.hide()
                        }
                    } else {
                        if (isBtn) {
                            $e.removeAttr('disabled')
                        } else {
                            $e.show()
                        }
                    }
                });
            }
        })
    }
}

function showConfirmAlert(alert) {
    $(alert).show();
    setTimeout(function () {
        hideConfirmAlert(alert)
    }, 3000);
}

function hideConfirmAlert(alert) {
    filtraElementiReset();
    $(alert).fadeOut('fast');
}

// Ridisegna l'HTML delle checkbox e dei radiobuttons
function redrawCheckBoxes($t) {
	$t = $t === undefined ? $table : $t
    $t.find('input[type="checkbox"]').each(function (i) {
        $(this)
            .attr('id', 'chkbx_' + i)
            .wrap('<div data-filter="check_row" class="form-check checkbox mb-0">')
            .after('<label class="form-check-label" for="chkbx_' + i + '"></label>')
    });
    $t.find('input[type="radio"]').each(function (i) {
        $(this)
            .attr('id', 'chkbx_' + i)
            .wrap('<div data-filter="check_row" class="form-check radio mb-0">')
            .after('<label class="form-check-label" for="chkbx_' + i + '"></label>')
	});
	
}

// Inizializzatore di default delle TABELLE FILTRATE
/* NOTE: 
"data-filter" è l'identificativo (tipo id ma non univoco) del campo.
"data-filter-on" mostra gli elementi elencati quando l'elemento cliccato è ATTIVO
"data-filter-off" nasconde gli elementi elencati quando l'elemento cliccato è ATTIVO
"data-filter-var" indica la logica di filtro delle righe della tabella
*/
(function($) {
	$.fn.bootstrapTableFiltered = function(tbdata) {
		$table = this; // popolo la variabile globale.
		tableData = tbdata; // popolo la variabile globale.
		$table.bootstrapTable('destroy').bootstrapTable({
            data : tbdata,
            sortable: true,
            sortOrder: "desc",
            checkboxHeader: true,
            onPostBody: function(e,t) {
                $('.bootstrap-table').each(function(){
                    defaultonPostBodyTB( $(this) )
                    redrawCheckBoxes();
                    addCheckboxesToMobile();
                });
            },
        }).addClass('table-filtered');
		// ridisegna il mobile
		$table.tableCreateMobileVr();
		// crea i checkbox 
		tableAttr = $table.data('table-mobilized-desktop');
		$mobileWrapper = $('[data-table-mobilized-mobile="'+tableAttr+'"]');
		$mobileWrapper.find('.mobile-data-block').each(function(){
			// crea i check in mobile 
			//var i = $(this).index()
			//$(this).prepend('<input data-index="'+i+'" name="btSelectItemMobile" type="checkbox" id="chkbx_'+i+'" />');
			//$(this).prepend('<input data-index="'+i+'" name="btSelectItemMobile" type="radio" id="chkbx_'+i+'" />');
		})
		redrawCheckBoxes( $mobileWrapper );
		// nasconde gli eventuali elementi vuoti
		$tableMobile = $('[data-table-mobilized-mobile="'+$(this).data('table-mobilized-desktop')+'"]')
		$tableMobile.find('.mobile-data-block').each(function(){
			if ( $(this).find('.output:contains(Nessun elemento trovato)').length > 0 ) $(this).hide();
		})
    };
});
function stateOver(item) {
    var tmp = $(item).find("img");
    if ($(tmp).hasClass('selected')) {
        return null;
    }
    $(tmp).css("margin-top", "-65px");
}

function stateOut(item) {
    var tmp = $(item).find("img");
    if ($(tmp).hasClass('selected')) {
        return null;
    }
    $(tmp).css("margin-top", "-5px");
}

function stateSelected(item) {
    //debugger;
    $(item).find("input").prop('checked', true);
    // nascondi gli input di targa e numero di telaio
    $(".scrittatarga").hide();
    $(".scrittatelaio").hide();

    // deseleziona tutti i tipoVeicolo
    $(".labelAutomezzo").each(function (index, element) {
        $(element).find("img").removeClass("selected");
        $(element).find(".tipoAutomezzo").removeClass("gestoreAttivo");
        stateOut($(element));
    });

    // seleziona il tipoVeicolo cliccato
    var divAutomezzo = $(item).find(".tipoAutomezzo");
    $(divAutomezzo).addClass("gestoreAttivo");
    var tmp = $(item).find("img");
    $(tmp).addClass("selected");
    $(tmp).css("margin-top", "-125px");

    var rev = $('input[name=codTipoVeicolo]:checked').val();



    if (rev != undefined) {
        if (rev != "RP") {
            $(".scrittatarga").show();
            $("input[name='targa']").removeClass("telaio");
            $("input[name='targa']").addClass("targa");
        } else {
            $(".scrittatelaio").show();
            $("input[name='targa']").removeClass("targa");
            $("input[name='targa']").addClass("telaio");
        }
        $("input[name='targa']").show();
        if (!isMobile()) $("input[name='targa']").focus();
    }
}

function isMobile() {
    var breakpoint = getBreakpoint();
    if (breakpoint == 'mobile') {
        return true;
    }
    return false;
}

function getBreakpoint() {
    var value = window.getComputedStyle(document.querySelector('body'), ':after').getPropertyValue('content');
    value = value.replace(/\"/g, '');
    value = value.replace(/\'/g, '');
    return value;
};
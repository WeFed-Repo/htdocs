/* VECCHIO GRUPPO DI FUNZIONI */
function getIFrameDocument(aID) {
    var rv = null;
    if (document.getElementById(aID).contentDocument) {
        rv = document.getElementById(aID).contentDocument;
    } else {
        rv = document.frames[aID].document;
    }
    return rv;
}

if (typeof addEvent !== "function") {
    function addEvent(o, n, h) {
        o = jqc(o);
        $(o).on(n, h);
    }
}

function resettaScroll() {
    window.scrollTo(0, 0);
    setSize(700, 550);
}

// noinspection JSUnusedGlobalSymbols
function calcHeightIframe(optWidth) {
    try {
        setPrincipale(getIFrameDocument('funzione'));
    } catch (es) {
    }
    calcHeight(optWidth);
    scroll(0, 0);
}

function calcHeight(optWidth) {
    var the_height;
    var the_width;
    var ifr = document.getElementById('funzione');
    try {
        var bd = getIFrameDocument('funzione').body;
        var win = document.getElementById('funzione').contentWindow;

        addEvent(win, 'unload', resettaScroll);
        the_height = bd.scrollHeight;
        the_width = bd.scrollWidth;

        try {
            if (the_width < bd.parentNode.scrollWidth) {
                the_width = bd.parentNode.scrollWidth;
            }
            if (the_height < bd.parentNode.scrollHeight) {
                the_height = bd.parentNode.scrollHeight;
            }
        } catch (es) {

        }
    } catch (es) {
        //the_height = 3000;
        //the_width = 1000;
        //ifr.scrolling= "auto";
        the_height = 500;
        the_width = 700;
        ifr.scrolling = "auto";
    }
    the_height = the_height < 400 ? 400 : the_height;
    the_width = the_width < 700 ? 700 : the_width;

    if (optWidth) the_width = optWidth;

    setSize(the_width, the_height);
}

function setSize(the_width, the_height) {
    var ifr = $('#funzione');
    //setta la struttura dell'oggetto
    var contenuti = $('#contenuti');

    if (the_width > contenuti.width()) {
        var delta = the_width - contenuti.width();

        //toglie il bg dal body
        document.body.style.backgroundImage = 'none';
        //allarga i contenitori
        $('#content').css("width", 861 + delta + 'px');
        //riposiziona toolbox
        $('#fixedtools').css("marginLeft", 878 + delta + 'px');

        //allargamento consequenziale del menu di primo e secondo livello
        if (delta > 4) {
            var closeDiv1 = $('<div>').addClass("closer");
            var closeDiv2 = $('<div>').addClass("closer");
            $('#menufirst').css("width", 761 + delta + 'px').css("backgroundImage", 'url(/img/ret/str_menulevel1_bg_large.gif)').append(closeDiv1);
            $('#menusecond').css("width", 761 + delta + 'px').css("backgroundImage", 'url(/img/ret/str_menulevel2_bg_large.gif)').append(closeDiv2);
        }
    }
    var newBr = $('<br>').addClass("clear");
    ifr.parent().append(newBr);
    ifr.css({ "height": the_height + 50 + 'px', "width": the_width + "px" });
}

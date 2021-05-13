/* Piccolo framework */
function getParent(element, selector) {
    if (!element) { return element };
    element.matches(selector) || (element = (element.nodeName.toLowerCase() === 'html' ? false : getParent(element.parentNode, selector)));
    return element;
}

/* Inizializzazioni automazioni */
window.addEventListener('load', function (event) {
    // Inizializzazione accordion (cambia classe al parent)
    var acctoggle = document.querySelectorAll(".accordion-toggle"), x;
    for (x = 0; x < acctoggle.length; x++) {
        // Inizializza uno per uno tutti gli accordion
        acctoggle[x].addEventListener("click", function () {
            var acc = getParent(this, ".accordion");
            if (acc.className.indexOf("opened") >= 0) {
                // Aperto - lo chiude
                acc.classList.remove("opened");
            }
            else {
                // Chiuso - lo apre
                acc.classList.add("opened");
            }
        });
    }
});

window.addEventListener('scroll', function (event) {
    // Inizializzazione freccetta a scorrimento
    var btnback = document.getElementById("back");
    if (window.scrollY >= 1) {
        // Cambia classe alla freccetta
        btnback.classList.add("fixed");
    }
    else {
        btnback.classList.remove("fixed");
    }
});

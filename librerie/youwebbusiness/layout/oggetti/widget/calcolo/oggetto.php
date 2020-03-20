<!-- per avere cambiare il colore ad una voce, usare la classe .item--higlighted --> 

<ul class="c-calcolo c-calcolo--oneline" id="prestitoResult">
    <li class="item" id="calcolo-spese">
        <span class="key">Spese</span>
        <span class="output"><span class="value">450</span>&euro;</span>
        <img class="icon" src="./fe/img/icon/spese.svg">
    </li>
    <li class="item" id="calcoloTag">
        <span class="key" >TAN</span>
        <span class="output"><span class="value">5,10</span>%</span>
        <img class="icon" src="./fe/img/icon/tan.svg">
        <button type="button" class="btn-icon-info" data-modal-open="tan"></button>
    </li>
    <li class="item" id="calcolo-taeg">
        <span class="key">TAEG</span>
        <span class="output"><span class="value">4,00</span>%</span>
        <img class="icon" src="./fe/img/icon/taeg.svg">
        <button type="button" class="btn-icon-info" data-modal-open="taeg"></button>
    </li>
    <li class="item" id="calcolo-rate">
        <span class="key">Rate</span>
        <span class="output"><span class="value">12</span></span>
        <img class="icon" src="./fe/img/icon/rate_mensili.svg">
    </li>
    <li class="item item--higlighted" id="calcolo-totale">
        <span class="key">La tua rata:</span>
        <span class="output"><span class="value">2500</span>&euro;</span>
        <img class="icon" src="./fe/img/icon/la_tua_rata.svg">
    </li>
</ul>
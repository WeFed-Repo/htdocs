/* Inizializzazione controlli di un questionario in stile "gaming" */
var questError = function (wrapel,message) {
	var fbError = $("<div>").addClass("boxalert errore").hide();
	fbError.append($("<div>").addClass("boxcont").append($("<p>").html(message)));
	wrapel.empty().append(fbError.fadeIn(1000));
};

var questRemoveError = function(el) {
	if (el) {
		var erbox = $(this).parents("section").find(".boxalert");
		erbox.remove();	
	}
}

var questRadioCheck = function(name) {
	return ($("input[type=radio][name="+name+"]:checked").length>0) ? true : false;
}

/* Spinners */
$(function(){
    var spinnerPlusMin = function(){
        var spinbtn = $(this),
            spin = spinbtn.parents(".spinner");
        var spinEl = {
            input : spin.find("input[name="+spin.attr("data-input-name") + "]"),
            fakeinput : spin.find("span.valore"),
            min: spin.attr("data-min"),
            max: spin.attr("data-max")
        }
        var spinVal = parseFloat(spinEl.input.val());
        if (spinbtn.hasClass("min")) {
            /* Caso "meno" */
            if(spinVal > spinEl.min) spinVal = spinVal - 1;
        }
        else
        {
            /* Caso "piu'" */
            if(spinVal < spinEl.max)  spinVal = spinVal + 1;
        }
        spinEl.input.val(spinVal);
        spinEl.fakeinput.html(spinVal);
    };

    $.each($(".spinner"),function(k,v){
        var spWrap = $(this);
        var spInp = spWrap.find("input");
        // Crea quanto serve per lo spinner
        var fakeInp = $("<span>").addClass("valore").html(spInp.val()),
            plusminmin = $("<a>").addClass("plusmin min").click(spinnerPlusMin),
            plusminplus = $("<a>").addClass("plusmin").click(spinnerPlusMin);
        spWrap.append(plusminmin,fakeInp,plusminplus)
    });
})
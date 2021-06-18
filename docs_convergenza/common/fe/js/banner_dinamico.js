/* Banner dinamico */
var dynBannerCont = $("#dynBanner");

var setBanner = function() {
    $.ajax({
        url: "/common/fe/html/banner_dinamico.html?rel=" + Math.random(),
        dataType: "html",
        success : function(code){
            dynBannerCont.html(code).removeClass("loading");
        },
        error: function(){
            dynBannerCont.remove();
        }

    });
}

//Avvia il replacement del banner
setBanner();
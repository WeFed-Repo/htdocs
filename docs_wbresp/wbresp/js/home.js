// Carousel
loadHomeVisual = function(){

	//myCarousel
	var homeCarWrap = $("#homeCarousel").empty();
	var homeCar = $("<div>").addClass("carousel slide").attr({"id":"myCarousel","data-ride":"carousel"});
	// URL della promo
	var urlCarousel = "/wbresp/html/home_carousel_20201001.html";

	// Carica l'html
	$.ajax({

		url: urlCarousel,
		dataType: "html",
		cache: false,
		success: function(data){
		
			// Wrapper ed oggetti associati
			var carWrap = $("<div>").addClass("carousel-inner").html(data);
			var carInd = $("<ol>").addClass("carousel-indicators");
			$.each(carWrap.find(".item"),function(i,v){
				var carIndLi = $("<li>").attr({"data-target":"#myCarousel","data-slide-to":i});
				if ($(v).hasClass("active")) carIndLi.addClass("active");
				carInd.append(carIndLi);
			});
			homeCar.empty().append(carInd,carWrap);

			var carContVar = [
				{"align":"left", "dir":"prev", "direction":"Previous"},
				{"align":"right", "dir":"next", "direction" : "Next"}
			]
			$.each(carContVar,function(i,v){
				var carCont = $("<a>").addClass( v.align +" carousel-control").attr({"href":"#!","role":"button","data-slide":v.dir,"data-target":"#myCarousel"});
				carCont.append(
					$("<span>").addClass("glyphicon glyphicon-chevron-" + v.align).attr({"aria-hidden":"true"}),
					$("<span>").addClass("sr-only").html(v.direction)
				);
				homeCar.append(carCont);
			});
			homeCarWrap.append(homeCar);
			homeCarWrap.removeClass("loading");

		},
		error: function() {
			// alert("Attenzione: errore nel caricamento del visual '" + urlCarousel + "'");
		}
	});
}

// Promo (fascione centrale)
loadHomePromo = function(){
	// Url della promo
	homePromoUrl = "/wbresp/html/home_promo_20160126.html";
	// Carica l'html
	$.ajax({
		url: homePromoUrl,
		dataType: "html",
		success: function(data){
			$("#homePromo").removeClass("loading").html(data);
		},
		error: function() {
			// alert("Attenzione: errore nel caricamento della promo '" + homePromoUrl + "'");
		}
	});
	
}


// Cellette magazine rotanti
loadHomeMagazine = function() {
	// Url della promo
	homeMagazineUrl = "/wbresp/html/home_magazine_20160223.html";
	// Carica l'html
	$.ajax({
		url: homeMagazineUrl,
		dataType: "html",
		success: function(data){

			// Definisce la funzione di calcolo altezza 
			checkHomeMagazineBlockHeight = function () {
			    maxH = 0;
			    $(".slideBody").each(function (index) {
			        $(this).height('auto');
			    });
			    $(".slideBody").each(function (index) {
			        if ($(this).height() > maxH) {
			            maxH = $(this).height() + 20;
			        }
			    });
			    $(".slideBody").each(function (index) {
			        $(this).height(maxH);
			    });
			}

			var magSpace = $("#homeMagazineCarousel");
			magSpace.removeClass("loading").html(data);
			magSpace.find(".magazineHome").fadeIn(500);
			
			// Inizializzazione del carousel
			$('.carousel-showmanymoveone .item').each(function () {

		        var itemToClone = $(this);
		        for (var i = 1; i < 4; i++) {
		            itemToClone = itemToClone.next();
		            // wrap around if at end of item collection
		            if (!itemToClone.length) {
		                itemToClone = $(this).siblings(':first');
		            }
		            // grab item, clone, add marker class, add to collection
		            itemToClone.children(':first-child').clone().addClass("cloneditem-" + (i)).appendTo($(this));
		        }
		        
		    });
			checkHomeMagazineBlockHeight();

		    window.onResize = function() {

		    	$('#carousel123').carousel({
			        interval: false,
			        pause: true
			    });
			    
		    	checkHomeMagazineBlockHeight();	
		    }
		    
		},
		error: function() {
			// alert("Attenzione: errore nel caricamento del carousel magazine '" + homeMagazineUrl + "'");
		}
	});	

}

// Funzioni onload
loadHomeVisual();
loadHomePromo();
loadHomeMagazine();
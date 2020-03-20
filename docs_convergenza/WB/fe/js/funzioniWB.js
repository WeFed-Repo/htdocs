var initNewsTrFPCarouselPlus = function () {
    var newsBx = $("#carouselPlusinfoTr"),
        newsBxWrappwer = '<div class="carouselPlusPages">',
        url = (isLib) ? "/librerie/include/commons/ajax/trading/marketInsight.php" : wrp_script + "/FMP/RssMarketInsight.do?campi=title%2CpubDate%2Cdescription%2Clink";
    $.ajax(url, {
        "success": function (data) {
            var indexNews = 0,
                j = 0, i,
                dataLengthDiv = Math.ceil(data.news.length / 5);
            newsBx.empty();
            newsBx.addClass('carouselPlus').attr('data-vertical', true).attr('data-loop', true).attr('data-interval', 8000).append(newsBxWrappwer);
            $('<div class="carouselPlusNav">').insertAfter(newsBx.find('.carouselPlusPages'));
            for (i = 0; i < dataLengthDiv; i++) {
                newsBx.find('.carouselPlusPages').append('<div class="carouselPlusPage"><div class="carouselPlusPageWrap"></div></div>');
                newsBx.find('.carouselPlusNav').append('<div class="carouselPlusBtn"></div>');
            }

            $.each(data.news, function (index, item) {
                var textItem = $('<div class="text"/>'),
                    title = item.title.replace(/<[^>]+>/g, ""),
                    description = item.description.replace(/<[^>]+>/g, "");
                // noinspection JSUnresolvedVariable
                textItem.append("<span class=\"data\">" + item.pubDate + "</span><br class=\"clear\" />");
                textItem.append("<a href=\"" + item.link + "\" target=\"_blank\"><span class=\"title\">" + title + "</span><span class=\"desc\">" + description + "</span></a>");

                /*for (i=0;i<textItem.length;i++) {

                   console.log(indexNews % 5);
                   if (indexNews < 5) {
                       newsBx.find('.carouselPlusPageWrap').eq(0).append(textItem.eq(i));

                   }
                   if (indexNews >= 5 && indexNews< 10) {
                       newsBx.find('.carouselPlusPageWrap').eq(1).append(textItem.eq(i));

                   }
                   if (indexNews >= 10 && indexNews< 15) {
                       newsBx.find('.carouselPlusPageWrap').eq(2).append(textItem.eq(i));
                   }

                   indexNews++;
               }*/
                for (i = 0; i < textItem.length; i++) {
                    newsBx.find('.carouselPlusPageWrap').eq(j).append(textItem.eq(i));
                    indexNews++;
                    if (indexNews % 5 === 0) {
                        j++;
                    }
                }
            });

            initCarouselPlus();

            // Aggiunge gli ultimi item
            /*if (newsSlideBxObj !== null) {
               
               newsBx.append(newsSlideBxObj);
               
            }*/
            // Se ci sono più di due pagine mette lo slider
        },
        "error": function () {
            newsBx.html('<div class="nonews"><p>Errore caricamento news</p></div>');
        }
    });
};

/*** FINE CHAT EGAIN ***/
/* Attivazione link gia' visitati */
// noinspection JSUnusedGlobalSymbols
var setVisitedLink = function (aelement) {
    var visitedimg;
    //Se necessario gli mette la classe visited
    if (aelement.className.indexOf("visited") < 0) {
        aelement.className = aelement.className + " visited";
    }

    //Se non c'è già l'immagine (ovvero ci ha già cliccato)
    // noinspection JSUnresolvedVariable
    if (aelement.parentNode.parentNode.className) {
        if (!aelement.parentNode.getElementsByTagName("IMG").length && aelement.parentNode.parentNode.className === "documentlist") {
            visitedimg = document.createElement("img");
            visitedimg.className = "visitedImg";
            visitedimg.src = "/img/img_or_visited.gif";
            aelement.parentNode.appendChild(visitedimg);
        }
    }
};

var calcoloPasqua = function (year) {
    var a = year % 19;
    var b = Math.floor(year / 100);
    var c = year % 100;
    var d = Math.floor(b / 4);
    var e = b % 4;
    var f = Math.floor((b + 8) / 25);
    var g = Math.floor((b - f + 1) / 3);
    var h = (19 * a + b - d - g + 15) % 30;
    var i = Math.floor(c / 4);
    var j = c % 4;
    var k = (32 + 2 * e + 2 * i - h - j) % 7;
    var m = Math.floor((a + 11 * h + 22 * k) / 451);
    var month = Math.floor((h + k - 7 * m + 114) / 31) - 1;
    var day = ((h + k - 7 * m + 114) % 31) + 1;
    var easter = new Date(year, month, day);
    var dayOffset = 1; //
    var millisecondOffset = dayOffset * 24 * 60 * 60 * 1000;
    easter.setTime(easter.getTime() + millisecondOffset);

    return easter.getTime();
};

var noWeekendsOrHolidays = function (date) {
    var i, today, year, easter, natDays,
        noWeekend = $.datepicker.noWeekends(date);

    if (noWeekend[0]) {
        natDays = [
            [1, 1], [6, 1], [25, 4], [1, 5], [2, 6], [15, 8], [1, 11], [8, 12], [25, 12], [26, 12]
        ];

        today = new Date();
        year = today.getFullYear();
        easter = new Date(calcoloPasqua(year));

        if (today > easter) {
            easter = new Date(calcoloPasqua(year + 1));
            natDays.push([easter.getDate(), easter.getMonth() + 1]);
        } else {
            natDays.push([easter.getDate(), easter.getMonth() + 1]);
        }

        for (i = 0; i < natDays.length; i++) {
            if (date.getMonth() === natDays[i][1] - 1
                && date.getDate() === natDays[i][0]) {
                return [false, ''];
            }
        }

        return [true, ''];
    } else {
        return noWeekend;
    }
};

function openProfile() {
    $('#companyProfile1').show();
    $('.CDtrepunti').hide();
    $('.toggleProfileA').hide();
    $('.toggleProfileB').show();
}

function closeProfile() {
    $('#companyProfile1').hide();
    $('.CDtrepunti').show();
    $('.toggleProfileA').show();
    $('.toggleProfileB').hide();
}

/* jshint strict:false */
/* globals $, cgi_script, librerie, initCarouselPlus, activateTab */

/*  SLIDER FP => WIDGET_030_SLIDER ASSICURAZIONI */
$(function() {
	var assiXml = (!librerie) ? cgi_script_direct + "/wbOnetoone/resp/wbblack/jsp/assicurazioniFlashConfig.jsp" : "/librerie/include/commons/ajax/slider_assicurazioni.xml",
		$widgetAssicurazioni = $('#widgetAssicurazioni'),
		$tabList = $widgetAssicurazioni.find('.innerTab ul'),
		$contentGroup = $widgetAssicurazioni.find('.innerContFirstLev'),
    	createNavFpPage, createFpSlider, initSliders;

    initSliders = function () {
    	initCarouselPlus();
	    $('#widgetAssicurazioni .innerTab li').on('click', function() {
	        var tab = $(this).find('a'),
	            content = $(tab.attr('href')),
	            carouselPlus = content.find('.carouselPlus');
	        if (carouselPlus.length) {
	            carouselPlus.css('visibility', 'hidden').carouselPlus().css('visibility', 'visible');
	        }
	    });
	};

	createNavFpPage = function ($fileData) {
		var titleHtml = '<h4 class="strongTitle">' + $fileData.find("titolo")[0].textContent + '</h4>',
			textHtml = $fileData.find("testo")[0].textContent,
			noteHtml = $fileData.find("note")[0].textContent,
			$dettaglioUrl = $fileData.find("dettaglioUrl"),
			$preventivoUrl = $fileData.find("preventivoUrl"),
			$offertaUrl = $fileData.find("offertaUrl"),
			$filePath = $fileData.find("filePath"),
			dettaglioHtml = '',
			preventivoHtml = '',
			offertaHtml = '';
		if ($dettaglioUrl.length) {
			dettaglioHtml = '<a href="' + $dettaglioUrl[0].textContent + '" class="btn btn-primary">Approfondisci</a>';
		}
		if ($preventivoUrl.length) {
			preventivoHtml = '<a href="' + $preventivoUrl[0].textContent + '" class="btn btn-primary">Fai il preventivo</a>';
		}
		if ($offertaUrl.length) {
			offertaHtml = '<a href="' + $offertaUrl[0].textContent + '" class="btn">Scopri la promozione</a>';
		}
		return '<div class="navFpPage">' +
			'<div class="navFpVisual" style="background-image: url(\'' + $.trim($filePath[0].textContent) + '\');">' +
				'<div class="navFpVisualContent">' +
					offertaHtml +
				'</div>' +
			'</div>' +
			'<div class="navFpBox">' +
				titleHtml +
				'<div class="navFpTxt">' + textHtml + '</div>' +
				'<div class="navFpNote">' + noteHtml + '</div>' +
				'<div class="navFpBtns">' + dettaglioHtml + preventivoHtml + '</div>' +
			'</div>' +
		'</div>';
	};

	createFpSlider = function ($filesData) {
		var carouselPlusPages = '',
			carouselPlusBtns = '';
		$.each($filesData, function(fileDataInd, fileData) {
			var $filesData = $(fileData),
				navFpPage = createNavFpPage($filesData),
				carouselPlusBtn = $filesData.find('titolo')[0].textContent;
			carouselPlusPages += '<div class="carouselPlusPage">' +
				navFpPage +
			'</div>';
			carouselPlusBtns += '<div class="carouselPlusBtn">' + carouselPlusBtn + '</div>';
		});
		return '<div class="carouselPlus">' +
			'<div class="carouselPlusPages">' +
				carouselPlusPages +
			'</div>' +
			'<div class="carouselPlusNav">' +
				'<div class="carouselPlusBtnTop"><i class="icon icon-cursore-menu-down"></i></div>' +
				carouselPlusBtns +
			'</div>' +
		'</div>';
	};

    $.ajax({
        url: assiXml + "?rand=" + Math.random(),
        dataType: "xml",
        success: function(data) {
        	var isOneSelected = false;
            $.each($(data).find("tab"), function(tabDataInd, tabData) {
            	var $tab = $('<li>'),
            		$tabLink = $('<a href="#tab' + tabDataInd + '"></a>'),
            		$tabData = $(tabData),
            		$filesData = $tabData.find("file"),
            		isSelected, navFpPages, tabContent, tabContentStyle = '';
            	isSelected = ($tabData.attr('selezionato') === '1');
            	$tabLink.html($tabData.find("label")[0].textContent);
            	if (isSelected) {
            		$tab.addClass('on');
            		tabContentStyle = ' style="display: block"';
            		isOneSelected = true;
            	}
        		$tabList.append($tab.append($tabLink));
        		if ($filesData.length > 1) {
        			navFpPages = createFpSlider($filesData);
        		} else {
        			navFpPages = createNavFpPage($filesData);
        		}
				tabContent = '<div class="tab-content" id="tab' + tabDataInd + '"' + tabContentStyle + '>' +
					'<div class="navFpWrap">' +
						navFpPages +
					'</div>' +
				'</div>';
				$contentGroup.append(tabContent);
            });
            if (!isOneSelected) {
            	$($tabList.find('li')[0]).addClass('on');
            	$($contentGroup.find('div.tab-content')[0]).css("display"," block");
            }
            $widgetAssicurazioni.removeClass('disableJs').show();
            activateTab();
            initSliders();
        },
        error: function () {
        	$('#boxesitoAssicurazioni').show();
        }
    });
});

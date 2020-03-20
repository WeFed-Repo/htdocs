
var srcImgFull = '';
var srcImgEmpty = '';

function initPinpad(initParam) {
    var getDefaultParam = function () {
        return {
            usePinPadText: false,// Se impostata a true possibilità di inserire il valore nella text direttamente senza panellino codici
            usePinPadOld: false,// Se impostata a true visualizza la pinpad stile vecchia! Di Default visualizza la pinpad stile nuovo
            settings: null,// Oggetto contenente: esempio(ApplicationPath: "/YouBiz.Web", CartMode: "32,0,17,10,", SecureType: 2, WorkflowHandlerChunkUri: "", WorkflowHandlerUri: "")
            divContainer: null,// Div dove verrà esploso il codice html della pinpad
            pinpadDisclaimer: '',//Se impostato stampa il valore a sinistra dell'icona dell'OTP
            pathTokenImg: null,//Path di dove si trova il tipo di immagine dell'OPT
            sizeTokenImg: null, // Esempio({ 'width': 110, 'height': 43}),
            inputPanelName: null,
            inputJPanel: null,
            regional: 'it-IT' //Default Current Preferences Language
        };
    }

    var ppParam = $.extend({}, getDefaultParam(), initParam);
    ppParam.inputJPanel = $("#" + ppParam.inputPanelName);
    ppParam.inputJPanel.attr("maxlength", "6").attr("readonly", true).css("cursor", "pointer").addClass("form-control").css("margin-left", "20px").width(60);


    if (!ppParam.usePinPadText) {
        if (ppParam.usePinPadOld) {
            openPinpadOld(ppParam);
        } else {
            ppParam.inputJPanel.focus(function() {
                openPinpadNew(ppParam);
            });
        }
    } else {
        openPinpadText(ppParam);
    }
    


}

function openPinpadText(executionParam) {
    sdk.utils.log.debugMessage('tm.pinpad.js - openPinpadText ');
    executionParam.inputJPanel.removeAttr("readonly").removeAttr("cursor");
    executionParam.inputJPanel.attr("value", "");
    if (executionParam.inputJPanel.attr("tm_isCreated") == "1") {
        //
    } else {
        executionParam.inputJPanel.attr("tm_isCreated", "1");
    }
}

function openPinpadNew(executionParam) {
    sdk.utils.log.debugMessage('tm.pinpad.js - openPinpadNew ');
    executionParam.url = '_wk/PinPad';
    executionParam.urlImgCancella = 'Contents/00000/' + executionParam.regional + '/images/pp/imgPPGeneric2.jpg';


    executionParam.inputJPanel.attr("value", "");
    if (executionParam.inputJPanel.attr("tm_isCreated") == "1") {
        //
    }
    else {
        executionParam.inputJPanel.attr("tm_isCreated", "1");

        var strName = "tm_divPP_" + executionParam.inputPanelName;
        var strFieldName = executionParam.inputPanelName;
        var strImgCancella = executionParam.settings.ApplicationPath + "/" + executionParam.urlImgCancella;
        var imgUrl = executionParam.settings.ApplicationPath + "/" + executionParam.url + '?d=' + $.now();
        var authInput = '<div id="' + strName + '"><table> \
                            <tr> \
                                <td align="left"> \
                                    <table style="border-collapse: separate !important; border-spacing: 10px !important;padding: 1px !important;"> \
                                        <tr> \
                                            <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -0px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-250px\');" onMouseOut="javascript:$(this).css(\'left\',\'-0px\');" onMouseDown="javascript:var cntrlJQuery=$(\'#\' +\'' + strFieldName + '\');var newValue= \'\' + cntrlJQuery.attr(\'value\') + \'0\'; cntrlJQuery.attr(\'value\', newValue);if (newValue.length >= 6) $(\'[data-toggle=\\\'popover\\\']\').popover(\'hide\');" src="' + imgUrl + '" /></div></td> \
                                            <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -25px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-275px\');" onMouseOut="javascript:$(this).css(\'left\',\'-25px\');" onMouseDown="javascript:var cntrlJQuery=$(\'#\' +\'' + strFieldName + '\');var newValue= \'\' + cntrlJQuery.attr(\'value\') + \'1\'; cntrlJQuery.attr(\'value\', newValue);if (newValue.length >= 6) $(\'[data-toggle=\\\'popover\\\']\').popover(\'hide\');" src="' + imgUrl + '" /></div></td> \
                                            <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -50px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-300px\');" onMouseOut="javascript:$(this).css(\'left\',\'-50px\');" onMouseDown="javascript:var cntrlJQuery=$(\'#\' +\'' + strFieldName + '\');var newValue= \'\' + cntrlJQuery.attr(\'value\') + \'2\'; cntrlJQuery.attr(\'value\', newValue);if (newValue.length >= 6) $(\'[data-toggle=\\\'popover\\\']\').popover(\'hide\');" src="' + imgUrl + '" /></div></td> \
                                        </tr> \
                                        <tr> \
                                            <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -75px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-325px\');" onMouseOut="javascript:$(this).css(\'left\',\'-75px\');" onMouseDown="javascript:var cntrlJQuery=$(\'#\' +\'' + strFieldName + '\');var newValue= \'\' + cntrlJQuery.attr(\'value\') + \'3\'; cntrlJQuery.attr(\'value\', newValue);if (newValue.length >= 6) $(\'[data-toggle=\\\'popover\\\']\').popover(\'hide\');" src="' + imgUrl + '" /></div></td> \
                                            <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -100px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-350px\');" onMouseOut="javascript:$(this).css(\'left\',\'-100px\');" onMouseDown="javascript:var cntrlJQuery=$(\'#\' +\'' + strFieldName + '\');var newValue= \'\' + cntrlJQuery.attr(\'value\') + \'4\'; cntrlJQuery.attr(\'value\', newValue);if (newValue.length >= 6) $(\'[data-toggle=\\\'popover\\\']\').popover(\'hide\');" src="' + imgUrl + '" /></div></td> \
                                            <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -125px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-375px\');" onMouseOut="javascript:$(this).css(\'left\',\'-125px\');" onMouseDown="javascript:var cntrlJQuery=$(\'#\' +\'' + strFieldName + '\');var newValue= \'\' + cntrlJQuery.attr(\'value\') + \'5\'; cntrlJQuery.attr(\'value\', newValue);if (newValue.length >= 6) $(\'[data-toggle=\\\'popover\\\']\').popover(\'hide\');" src="' + imgUrl + '" /></div></td> \
                                        </tr> \
                                        <tr> \
                                            <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -150px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-400px\');" onMouseOut="javascript:$(this).css(\'left\',\'-150px\');" onMouseDown="javascript:var cntrlJQuery=$(\'#\' +\'' + strFieldName + '\');var newValue= \'\' + cntrlJQuery.attr(\'value\') + \'6\'; cntrlJQuery.attr(\'value\', newValue);if (newValue.length >= 6) $(\'[data-toggle=\\\'popover\\\']\').popover(\'hide\');" src="' + imgUrl + '" /></div></td> \
                                            <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -175px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-425px\');" onMouseOut="javascript:$(this).css(\'left\',\'-175px\');" onMouseDown="javascript:var cntrlJQuery=$(\'#\' +\'' + strFieldName + '\');var newValue= \'\' + cntrlJQuery.attr(\'value\') + \'7\'; cntrlJQuery.attr(\'value\', newValue);if (newValue.length >= 6) $(\'[data-toggle=\\\'popover\\\']\').popover(\'hide\');" src="' + imgUrl + '" /></div></td> \
                                            <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -200px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-450px\');" onMouseOut="javascript:$(this).css(\'left\',\'-200px\');" onMouseDown="javascript:var cntrlJQuery=$(\'#\' +\'' + strFieldName + '\');var newValue= \'\' + cntrlJQuery.attr(\'value\') + \'8\'; cntrlJQuery.attr(\'value\', newValue);if (newValue.length >= 6) $(\'[data-toggle=\\\'popover\\\']\').popover(\'hide\');" src="' + imgUrl + '" /></div></td> \
                                        </tr> \
                                        <tr> \
                                            <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -0px;position: absolute; display: block; top: 0; width: 150px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-25px\');" onMouseOut="javascript:$(this).css(\'left\',\'-0px\');" onMouseDown="javascript:cntrlJQuery=$(\'#\' +\'' + strFieldName + '\').attr(\'value\', \'\');" src="' + strImgCancella + '" /></div></td> \
                                            <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -225px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-475px\');" onMouseOut="javascript:$(this).css(\'left\',\'-225px\');" onMouseDown="javascript:var cntrlJQuery=$(\'#\' +\'' + strFieldName + '\');var newValue= \'\' + cntrlJQuery.attr(\'value\') + \'9\'; cntrlJQuery.attr(\'value\', newValue);if (newValue.length >= 6) $(\'[data-toggle=\\\'popover\\\']\').popover(\'hide\');" src="' + imgUrl + '" /></div></td> \
                                            <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -75px;position: absolute; display: block; top: 0; width: 150px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-100px\');" onMouseOut="javascript:$(this).css(\'left\',\'-75px\');" onMouseDown="javascript:$(\'[data-toggle=\\\'popover\\\']\').popover(\'hide\');" src="' + strImgCancella + '" /></div></td> \
                                        </tr> \
                                    </table> \
                                </td> \
                            </tr> \
                        </table></div>';
        //cntrlJQuery.after(authInput);

        executionParam.inputJPanel.attr("data-toggle", "popover").attr("data-placement", "bottom");
        executionParam.inputJPanel.popover({
            content: authInput,
            html: true
        });
    }


}


function openPinpadOld(executionParam) {
    //debugger;
    sdk.utils.log.debugMessage('tm.pinpad.js - openPinpadOld ');
    executionParam.url = '/_wk/PinPad/GetOldPinpad';
    executionParam.urlImg = '/Contents/00000/' + executionParam.regional + '/images/Pinpad/';
    executionParam.nameImgCancella = 'CANCELLA.bmp';
    executionParam.nameImgCancellaDown = 'CANCELLA-down.bmp';
    executionParam.nameImgCancellaOver = 'CANCELLA-over.bmp';
    executionParam.nameImgFull = 'PIN-full.bmp';
    executionParam.nameImgEmpty = 'PIN-empty.bmp';

    var url = executionParam.settings.ApplicationPath + executionParam.url;
    var urlImg = executionParam.settings.ApplicationPath + executionParam.urlImg;
    srcImgFull = executionParam.settings.ApplicationPath + executionParam.urlImg + '' + executionParam.nameImgFull;
    srcImgEmpty = executionParam.settings.ApplicationPath + executionParam.urlImg + executionParam.nameImgEmpty;
    //debugger;

    var imgToken = this._GetImgToken(executionParam);
    //var textValueInfo = _GetValueTextInfo(executionParam);


    executionParam.inputJPanel.attr("value", "");
    if (executionParam.inputJPanel.attr("tm_isCreated") == "1") {
        //
    }
    else {
        executionParam.inputJPanel.attr("tm_isCreated", "1");

        var strName = "tm_divPP_" + executionParam.inputPanelName;
        var strFieldName = executionParam.inputPanelName;
        Cancella(strFieldName);
        var imgSource = url + '?d=' + $.now();

        var authInput = '<div id="' + strName + '"> \
                <table class="sfondoTabelle" style="width: 100%;" border="0" cellspacing="0" cellpadding="0" align="left">\
                                 <tbody cellpadding="0" cellspacing="0">\
                                   <tr class="col-xs-12" valign="middle">\
									 <td class="col-xs-4" style="vertical-align:middle"><span>' + executionParam.pinpadDisclaimer + '</span></td>\
									 <td class="col-xs-2" style="vertical-align:middle"><div align="center">' + imgToken + '</div></td>\
									 <td class="col-xs-5" style="vertical-align:middle">\
									   <table width="100%" align="center" style="background-color: rgb(216, 233, 216);" border="0">\
										 <tbody>\
										   <tr>\
											 <td valign="top">\
											   <table border="0" cellspacing="2" cellpadding="2" style="border-spacing: 4px; border-collapse: separate">\
												 <tbody>\
												   <tr>\
													 <td class="txt_center" align="center" valign="middle"><div style="width: 40px;height: 32px;position: relative; overflow: hidden"><img id="img0" style="left: -0px;  position: absolute; display: block; top: 0; cursor: hand; width: 1200px; height: 32px;" onMouseOver="javascript:$(this).css(\'left\',\'-400px\');" onMouseUp="javascript:$(this).css(\'left\',\'-400px\');" onMouseOut="javascript:$(this).css(\'left\',\'-0px\');" onMouseDown="javascript:Click(\'0\',\'' + strFieldName + '\');$(this).css(\'left\',\'-800px\');" src="' + imgSource + '" /></div></td> \
                                                     <td class="txt_center" align="center" valign="middle"><div style="width: 40px;height: 32px;position: relative; overflow: hidden"><img id="img1" style="left: -40px; position: absolute; display: block; top: 0; cursor: hand; width: 1200px; height: 32px;" onMouseOver="javascript:$(this).css(\'left\',\'-440px\');" onMouseUp="javascript:$(this).css(\'left\',\'-440px\');" onMouseOut="javascript:$(this).css(\'left\',\'-40px\');" onMouseDown="javascript:Click(\'1\',\'' + strFieldName + '\');$(this).css(\'left\',\'-840px\');" src="' + imgSource + '" /></div></td> \
                                                     <td class="txt_center" align="center" valign="middle"><div style="width: 40px;height: 32px;position: relative; overflow: hidden"><img id="img2" style="left: -80px; position: absolute; display: block; top: 0; cursor: hand; width: 1200px; height: 32px;" onMouseOver="javascript:$(this).css(\'left\',\'-480px\');" onMouseUp="javascript:$(this).css(\'left\',\'-480px\');" onMouseOut="javascript:$(this).css(\'left\',\'-80px\');" onMouseDown="javascript:Click(\'2\',\'' + strFieldName + '\');$(this).css(\'left\',\'-880px\');" src="' + imgSource + '" /></div></td> \
                                                     <td class="txt_center" align="center" valign="middle"><div style="width: 40px;height: 32px;position: relative; overflow: hidden"><img id="img3" style="left: -120px;position: absolute; display: block; top: 0; cursor: hand; width: 1200px; height: 32px;" onMouseOver="javascript:$(this).css(\'left\',\'-520px\');" onMouseUp="javascript:$(this).css(\'left\',\'-520px\');" onMouseOut="javascript:$(this).css(\'left\',\'-120px\');" onMouseDown="javascript:Click(\'3\',\'' + strFieldName + '\');$(this).css(\'left\',\'-920px\');" src="' + imgSource + '" /></div></td> \
                                                   </tr> \
                                                   <tr> \
                                                     <td class="txt_center" align="center" valign="middle"><div style="width: 40px;height: 32px;position: relative; overflow: hidden"><img id="img4" style="left: -160px;position: absolute; display: block; top: 0; cursor: hand; width: 1200px; height: 32px;" onMouseOver="javascript:$(this).css(\'left\',\'-560px\');" onMouseUp="javascript:$(this).css(\'left\',\'-560px\');" onMouseOut="javascript:$(this).css(\'left\',\'-160px\');" onMouseDown="javascript:Click(\'4\',\'' + strFieldName + '\');$(this).css(\'left\',\'-960px\');" src="' + imgSource + '" /></div></td> \
                                                     <td class="txt_center" align="center" valign="middle"><div style="width: 40px;height: 32px;position: relative; overflow: hidden"><img id="img5" style="left: -200px;position: absolute; display: block; top: 0; cursor: hand; width: 1200px; height: 32px;" onMouseOver="javascript:$(this).css(\'left\',\'-600px\');" onMouseUp="javascript:$(this).css(\'left\',\'-600px\');" onMouseOut="javascript:$(this).css(\'left\',\'-200px\');" onMouseDown="javascript:Click(\'5\',\'' + strFieldName + '\');$(this).css(\'left\',\'-1000px\');" src="' + imgSource + '" /></div></td> \
                                                     <td class="txt_center" align="center" valign="middle"><div style="width: 40px;height: 32px;position: relative; overflow: hidden"><img id="img6" style="left: -240px;position: absolute; display: block; top: 0; cursor: hand; width: 1200px; height: 32px;" onMouseOver="javascript:$(this).css(\'left\',\'-640px\');" onMouseUp="javascript:$(this).css(\'left\',\'-640px\');" onMouseOut="javascript:$(this).css(\'left\',\'-240px\');" onMouseDown="javascript:Click(\'6\',\'' + strFieldName + '\');$(this).css(\'left\',\'-1040px\');" src="' + imgSource + '" /></div></td> \
                                                     <td class="txt_center" align="center" valign="middle"><div style="width: 40px;height: 32px;position: relative; overflow: hidden"><img id="img7" style="left: -280px;position: absolute; display: block; top: 0; cursor: hand; width: 1200px; height: 32px;" onMouseOver="javascript:$(this).css(\'left\',\'-680px\');" onMouseUp="javascript:$(this).css(\'left\',\'-680px\');" onMouseOut="javascript:$(this).css(\'left\',\'-280px\');" onMouseDown="javascript:Click(\'7\',\'' + strFieldName + '\');$(this).css(\'left\',\'-1080px\');" src="' + imgSource + '" /></div></td> \
                                                   </tr> \
                                                   <tr> \
                                                     <td class="txt_center" align="center" valign="middle"><div style="width: 40px;height: 32px;position: relative; overflow: hidden"><img id="img8" style="left: -320px;position: absolute; display: block; top: 0; cursor: hand; width: 1200px; height: 32px;" onMouseOver="javascript:$(this).css(\'left\',\'-720px\');" onMouseUp="javascript:$(this).css(\'left\',\'-720px\');" onMouseOut="javascript:$(this).css(\'left\',\'-320px\');" onMouseDown="javascript:Click(\'8\',\'' + strFieldName + '\');$(this).css(\'left\',\'-1120px\');" src="' + imgSource + '" /></div></td> \
                                                     <td class="txt_center" align="center" valign="middle"><div style="width: 40px;height: 32px;position: relative; overflow: hidden"><img id="img9" style="left: -360px;position: absolute; display: block; top: 0; cursor: hand; width: 1200px; height: 32px;" onMouseOver="javascript:$(this).css(\'left\',\'-760px\');" onMouseUp="javascript:$(this).css(\'left\',\'-760px\');" onMouseOut="javascript:$(this).css(\'left\',\'-360px\');" onMouseDown="javascript:Click(\'9\',\'' + strFieldName + '\');$(this).css(\'left\',\'-1160px\');" src="' + imgSource + '" /></div></td> \
                                                     <td class="txt_center" align="center" valign="middle" colspan="2"><div style="width: 90px;height: 32px; position: relative; overflow: hidden"><img style="position: absolute; display: block; cursor: hand; height: 32px; width: 90px" src="' + urlImg + executionParam.nameImgCancella + '"  onMouseOver="this.src=\'' + urlImg + executionParam.nameImgCancellaOver + '\'" onMouseUp="this.src=\'' + urlImg + executionParam.nameImgCancellaOver + '\'" onMouseOut="this.src=\'' + urlImg + executionParam.nameImgCancella + '\'" onMouseDown="this.src=\'' + urlImg + executionParam.nameImgCancellaDown + '\'" onClick="javascript:Cancella(\'' + strFieldName + '\');" /></div></td> \
                                                  </tr>\
												 </tbody>\
											   </table>\
											 </td>\
										     <td class="txt_center" valign="top">\
										       <table border="0" cellspacing="2" cellpadding="2" style="width: 197px">\
									             <tbody>\
									               <tr height="32">\
								                     <td style="vertical-align:middle">PIN:&nbsp;</td>\
								                     <td style="vertical-align:middle"><img id="imgPin0" src="' + srcImgEmpty + '">&nbsp;<img id="imgPin1" src="' + srcImgEmpty + '">&nbsp;<img id="imgPin2" src="' + srcImgEmpty + '">&nbsp;<img id="imgPin3" src="' + srcImgEmpty + '">&nbsp;<img id="imgPin4" src="' + srcImgEmpty + '">&nbsp;<img id="imgPin5" src="' + srcImgEmpty + '">&nbsp;</td>\
							                       </tr>\
							                       <tr height="32"><td>&nbsp;</td></tr>\
						                           <tr height="32">\
													 <td class="testoBlackNormalBold right">&nbsp;</td>\
 													 <td class="txt_center" valign="center" colspan="3"></td>\
												   </tr>\
											     </tbody>\
											   </table>\
											 </td>\
										   </tr>\
									     </tbody>\
									   </table>\
									 </td>\
								   </tr>\
								   <tr></tr>\
								 </tbody>\
							   </table>\
                             </div>';

        executionParam.divContainer.append(authInput);
    }



}


var contClick = 0;

var _GetImgToken = function (executionParamInternal) {
    var imgToken = '<img src="' + executionParamInternal.pathTokenImg + '" border="0" >';
    try {
        if (executionParamInternal.sizeTokenImg) {
            var imdJquery = $('<img>');
            imdJquery.attr('src', executionParamInternal.pathTokenImg);
            if (executionParamInternal.sizeTokenImg.width && executionParamInternal.sizeTokenImg.height) {
                imdJquery.css('width', executionParamInternal.sizeTokenImg.width);
                imdJquery.css('height', executionParamInternal.sizeTokenImg.height);
            } else {
                if (executionParamInternal.sizeTokenImg.width) {
                    imdJquery.concat('width', executionParamInternal.sizeTokenImg.width);
                } else {
                    if (executionParamInternal.sizeTokenImg.height) {
                        imdJquery.css('height', executionParamInternal.sizeTokenImg.height);
                    }
                }
            }
            imgToken = imdJquery[0].outerHTML;
        }
    } catch (e) {
        sdk.utils.log.debugMessage('tm.pinpad - error in GetTagImgToken: ' + e);
    }
    return imgToken;
}

function Click(idButton, strFieldName) {
    var cntrlJQuery = $('#' + strFieldName);
    if (cntrlJQuery.attr('value').length < 6) {
        var newValue = cntrlJQuery.attr('value') + idButton;
        cntrlJQuery.attr('value', newValue);
    }
    if (contClick < 6) {
        showImagePinFull(contClick);
        contClick++;
    }
}

function showImagePinFull(id) {
    var imgToChange = "imgPin" + id;
    var cntrlJQuery = $('#' + imgToChange);
    cntrlJQuery.attr('src', srcImgFull);

}

function showImagePinEmpty(id) {
    var imgToChange = "imgPin" + id;
    var cntrlJQuery = $('#' + imgToChange);
    cntrlJQuery.attr('src', srcImgEmpty);
}

function Cancella(strFieldName) {
    var cntrlJQuery = $('#' + strFieldName);
    cntrlJQuery.attr('value', '');
    contClick = 0;
    for (i = 0; i < 6; i++) {
        showImagePinEmpty(i);
    }
}


//var _CreateTextInfo = function (executionParamInternal) {
//    return '';
//}

//var _GetValueTextInfo = function (executionParamInternal) {
//    if (executionParamInternal.valueTextInfo != '') {
//        return executionParamInternal.valueTextInfo;
//    }
//    return'';
//}

//function ShowHelpPinpad(containerId, popupInfo) {
//    if (popupInfo != '') {
//        $('#' + containerId).attr("data-toggle", "popover").attr("data-placement", "bottom");
//        $('#' + containerId).popover({
//            content: popupInfo,
//            html: true
//        });
//    }
//}


//$(".icon-replace.icon-help.active.link").click(function () {
//    //debugger;
//    var idContainer = $(this).attr('data-idContainer');
//    var valueInfo = $(this).attr('data-valueInfo');

//    $('#' + idContainer).attr("data-toggle", "popover").attr("data-placement", "bottom");
//    $('#' + idContainer).popover({
//        content: valueInfo,
//        html: true
//    });
//    $(this).focus();


//<td style="vertical-align:middle"><a class="icon-replace icon-help active link" onclick="javascript:void(0)" data-idContainer="' + executionParam.divContainer[0].id + '" data-valueInfo="' + textValueInfo + '" href="#">Help</a></td>\


//});



//function ImgHover(idButton) {
//    var img = $('#img' + idButton);
//    //img.css("left", "-400px");
//    var calculatedLeft = -400 - 40 * parseInt(idbutton);
//    img.css("left", calculatedLeft + "px");
//    //$('msgbox123').innerText = "calculatedLeft";
//}



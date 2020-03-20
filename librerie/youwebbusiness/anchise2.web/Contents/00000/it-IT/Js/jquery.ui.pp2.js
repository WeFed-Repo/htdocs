var srcImgFull = '';
var srcImgEmpty = '';

var PinPad;
(function (PinPad) {

    var contClick = 0;
    var getImgPin = function (name, id) {
        return name + "imgPin" + id;
    }
    var click = function click(idButton, strFieldName) {

        var cntrlJQuery = $('#' + strFieldName);
        if (cntrlJQuery.attr('value').length < 6) {
            var newValue = cntrlJQuery.attr('value') + idButton;
            cntrlJQuery.attr('value', newValue);
        }
        if (contClick < 6) {
            showImagePinFull(strFieldName, contClick);
            contClick++;
        }
    }

    var showImagePinFull = function showImagePinFull(strFieldName, id) {
        var imgToChange = getImgPin(strFieldName, id);
        var cntrlJQuery = $('#' + imgToChange);
        cntrlJQuery.attr('src', srcImgFull);

    }

    var showImagePinEmpty = function showImagePinEmpty(strFieldName, id) {
        var imgToChange = getImgPin(strFieldName, id);
        var cntrlJQuery = $('#' + imgToChange);
        cntrlJQuery.attr('src', srcImgEmpty);
    }

    var cancella = function cancella(strFieldName) {
        var cntrlJQuery = $('#' + strFieldName);
        cntrlJQuery.attr('value', '');
        contClick = 0;
        for (i = 0; i < 6; i++) {
            showImagePinEmpty(strFieldName, i);
        }
    }

    var showInfo = function showInfo(containerId, popupInfo) {
        $('#' + containerId).attr("data-toggle", "popover").attr("data-placement", "bottom");
        $('#' + containerId).popover({
            content: popupInfo,
            html: true
        });
    }

    PinPad.Click = click;
    PinPad.Cancella = cancella;
    PinPad.ShowInfo = showInfo;
})(PinPad || (PinPad = {}));

function initPinpad(initParam) {
    var getDefaultParam = function () {
        return {
            divContainer: null,
            pinpadDisclaimer: null,
            pathTokenImg: null,
            pathImgInfo: null,
            inputPanelName: null,
            inputJPanel: null,

            url: '/Anchise2.Web/_wk/PinPad/GetOldPinpad',
            urlImg: '/Anchise2.Web/Contents/00000/it-IT/images/Pinpad/',
            nameImgCancella: 'CANCELLA.bmp',
            nameImgCancellaDown: 'CANCELLA-down.bmp',
            nameImgCancellaOver: 'CANCELLA-over.bmp',
            nameImgFull: 'PIN-full.bmp',
            nameImgEmpty: 'PIN-empty.bmp',

            idApplication: null,
            idSubApplication: null,
            idUsoSecurity: null,

        };

    }

    var ppParam = $.extend({}, getDefaultParam(), initParam);
    ppParam.inputJPanel = $("#" + ppParam.inputPanelName);

    // fix grafico
    ppParam.inputJPanel.attr("maxlength", "6").attr("readonly", true).css("cursor", "pointer").addClass("form-control").css("margin-left", "20px").width(60);

    openPinpad(ppParam);

    function openPinpad(executionParam) {
        
        var getImgPin = function (id) {
            return executionParam.inputPanelName + "imgPin" + id;
        };

        var istruzioni = executionParam.pinpadDisclaimer;
        var imgOtpUrl = executionParam.pathTokenImg;
        srcImgFull = executionParam.urlImg + '' + executionParam.nameImgFull;
        srcImgEmpty = executionParam.urlImg + executionParam.nameImgEmpty;
        var imgInfo = executionParam.pathImgInfo;


        var idApplicazione = executionParam.idApplication;
        var idSubApplicazione = executionParam.idSubApplication;
        var idUsoSecurity = executionParam.idUsoSecurity;

        executionParam.inputJPanel.attr("value", "");

        var strName = "tm_divPP_" + executionParam.inputPanelName;
        var strFieldName = executionParam.inputPanelName;
        PinPad.Cancella(strFieldName);
        var imgSource = executionParam.url + '?tm_idApplicazione=' + idApplicazione + '&tm_idSubApplicazione=' + idSubApplicazione + '&tm_id_usosecurity_operazione_otp=' + idUsoSecurity + '&d=' + $.now();

        var authInput = '<div id="' + strName + '"> \
                <table class="sfondoTabelle" style="width: 100%;" border="0" cellspacing="0" cellpadding="0" align="left">\
                                 <tbody cellpadding="0" cellspacing="0">\
                                   <tr class="col-xs-12" valign="middle">\
                                     <td class="col-xs-4" style="vertical-align:middle"><span>' + istruzioni + '</span></td>\
                                     <td class="col-xs-2" style="vertical-align:middle"><div align="center"><img src="' + imgOtpUrl + '" border="0"></div></td>\
                                     <td style="vertical-align:middle">PIN:&nbsp;<span id="msgbox123"></span></td>\
                                     <td class="col-xs-5" style="vertical-align:middle">\
                                       <table width="100%" align="center" style="background-color: rgb(216, 233, 216);" border="0">\
                                         <tbody>\
                                           <tr>\
                                             <td valign="top">\
                                               <table border="0" cellspacing="2" cellpadding="2" style="border-spacing: 4px; border-collapse: separate">\
                                                 <tbody>\
                                                   <tr>\
                                                     <td class="txt_center" align="center" valign="middle"><div style="width: 40px;height: 32px;position: relative; overflow: hidden"><img id="img0" style="left: -0px;  position: absolute; display: block; top: 0; cursor: hand; width: 1200px; height: 32px;" onMouseOver="javascript:$(this).css(\'left\',\'-400px\');" onMouseUp="javascript:$(this).css(\'left\',\'-400px\');" onMouseOut="javascript:$(this).css(\'left\',\'-0px\');" onMouseDown="javascript:PinPad.Click(\'0\',\'' + strFieldName + '\');$(this).css(\'left\',\'-800px\');" src="' + imgSource + '" /></div></td> \
                                                     <td class="txt_center" align="center" valign="middle"><div style="width: 40px;height: 32px;position: relative; overflow: hidden"><img id="img1" style="left: -40px; position: absolute; display: block; top: 0; cursor: hand; width: 1200px; height: 32px;" onMouseOver="javascript:$(this).css(\'left\',\'-440px\');" onMouseUp="javascript:$(this).css(\'left\',\'-440px\');" onMouseOut="javascript:$(this).css(\'left\',\'-40px\');" onMouseDown="javascript:PinPad.Click(\'1\',\'' + strFieldName + '\');$(this).css(\'left\',\'-840px\');" src="' + imgSource + '" /></div></td> \
                                                     <td class="txt_center" align="center" valign="middle"><div style="width: 40px;height: 32px;position: relative; overflow: hidden"><img id="img2" style="left: -80px; position: absolute; display: block; top: 0; cursor: hand; width: 1200px; height: 32px;" onMouseOver="javascript:$(this).css(\'left\',\'-480px\');" onMouseUp="javascript:$(this).css(\'left\',\'-480px\');" onMouseOut="javascript:$(this).css(\'left\',\'-80px\');" onMouseDown="javascript:PinPad.Click(\'2\',\'' + strFieldName + '\');$(this).css(\'left\',\'-880px\');" src="' + imgSource + '" /></div></td> \
                                                     <td class="txt_center" align="center" valign="middle"><div style="width: 40px;height: 32px;position: relative; overflow: hidden"><img id="img3" style="left: -120px;position: absolute; display: block; top: 0; cursor: hand; width: 1200px; height: 32px;" onMouseOver="javascript:$(this).css(\'left\',\'-520px\');" onMouseUp="javascript:$(this).css(\'left\',\'-520px\');" onMouseOut="javascript:$(this).css(\'left\',\'-120px\');" onMouseDown="javascript:PinPad.Click(\'3\',\'' + strFieldName + '\');$(this).css(\'left\',\'-920px\');" src="' + imgSource + '" /></div></td> \
                                                   </tr> \
                                                   <tr> \
                                                     <td class="txt_center" align="center" valign="middle"><div style="width: 40px;height: 32px;position: relative; overflow: hidden"><img id="img4" style="left: -160px;position: absolute; display: block; top: 0; cursor: hand; width: 1200px; height: 32px;" onMouseOver="javascript:$(this).css(\'left\',\'-560px\');" onMouseUp="javascript:$(this).css(\'left\',\'-560px\');" onMouseOut="javascript:$(this).css(\'left\',\'-160px\');" onMouseDown="javascript:PinPad.Click(\'4\',\'' + strFieldName + '\');$(this).css(\'left\',\'-960px\');" src="' + imgSource + '" /></div></td> \
                                                     <td class="txt_center" align="center" valign="middle"><div style="width: 40px;height: 32px;position: relative; overflow: hidden"><img id="img5" style="left: -200px;position: absolute; display: block; top: 0; cursor: hand; width: 1200px; height: 32px;" onMouseOver="javascript:$(this).css(\'left\',\'-600px\');" onMouseUp="javascript:$(this).css(\'left\',\'-600px\');" onMouseOut="javascript:$(this).css(\'left\',\'-200px\');" onMouseDown="javascript:PinPad.Click(\'5\',\'' + strFieldName + '\');$(this).css(\'left\',\'-1000px\');" src="' + imgSource + '" /></div></td> \
                                                     <td class="txt_center" align="center" valign="middle"><div style="width: 40px;height: 32px;position: relative; overflow: hidden"><img id="img6" style="left: -240px;position: absolute; display: block; top: 0; cursor: hand; width: 1200px; height: 32px;" onMouseOver="javascript:$(this).css(\'left\',\'-640px\');" onMouseUp="javascript:$(this).css(\'left\',\'-640px\');" onMouseOut="javascript:$(this).css(\'left\',\'-240px\');" onMouseDown="javascript:PinPad.Click(\'6\',\'' + strFieldName + '\');$(this).css(\'left\',\'-1040px\');" src="' + imgSource + '" /></div></td> \
                                                     <td class="txt_center" align="center" valign="middle"><div style="width: 40px;height: 32px;position: relative; overflow: hidden"><img id="img7" style="left: -280px;position: absolute; display: block; top: 0; cursor: hand; width: 1200px; height: 32px;" onMouseOver="javascript:$(this).css(\'left\',\'-680px\');" onMouseUp="javascript:$(this).css(\'left\',\'-680px\');" onMouseOut="javascript:$(this).css(\'left\',\'-280px\');" onMouseDown="javascript:PinPad.Click(\'7\',\'' + strFieldName + '\');$(this).css(\'left\',\'-1080px\');" src="' + imgSource + '" /></div></td> \
                                                   </tr> \
                                                   <tr> \
                                                     <td class="txt_center" align="center" valign="middle"><div style="width: 40px;height: 32px;position: relative; overflow: hidden"><img id="img8" style="left: -320px;position: absolute; display: block; top: 0; cursor: hand; width: 1200px; height: 32px;" onMouseOver="javascript:$(this).css(\'left\',\'-720px\');" onMouseUp="javascript:$(this).css(\'left\',\'-720px\');" onMouseOut="javascript:$(this).css(\'left\',\'-320px\');" onMouseDown="javascript:PinPad.Click(\'8\',\'' + strFieldName + '\');$(this).css(\'left\',\'-1120px\');" src="' + imgSource + '" /></div></td> \
                                                     <td class="txt_center" align="center" valign="middle"><div style="width: 40px;height: 32px;position: relative; overflow: hidden"><img id="img9" style="left: -360px;position: absolute; display: block; top: 0; cursor: hand; width: 1200px; height: 32px;" onMouseOver="javascript:$(this).css(\'left\',\'-760px\');" onMouseUp="javascript:$(this).css(\'left\',\'-760px\');" onMouseOut="javascript:$(this).css(\'left\',\'-360px\');" onMouseDown="javascript:PinPad.Click(\'9\',\'' + strFieldName + '\');$(this).css(\'left\',\'-1160px\');" src="' + imgSource + '" /></div></td> \
                                                     <td class="txt_center" align="center" valign="middle" colspan="2"><div style="width: 90px;height: 32px; position: relative; overflow: hidden"><img style="position: absolute; display: block; cursor: hand; height: 32px; width: 90px" src="' + executionParam.urlImg + executionParam.nameImgCancella + '"  onMouseOver="this.src=\'' + executionParam.urlImg + executionParam.nameImgCancellaOver + '\'" onMouseUp="this.src=\'' + executionParam.urlImg + executionParam.nameImgCancellaOver + '\'" onMouseOut="this.src=\'' + executionParam.urlImg + executionParam.nameImgCancella + '\'" onMouseDown="this.src=\'' + executionParam.urlImg + executionParam.nameImgCancellaDown + '\'" onClick="javascript:PinPad.Cancella(\'' + strFieldName + '\');" /></div></td> \
                                                  </tr>\
                                                 </tbody>\
                                               </table>\
                                             </td>\
                                             <td class="txt_center" valign="top">\
                                               <table border="0" cellspacing="2" cellpadding="2" style="width: 197px">\
                                                 <tbody>\
                                                   <tr height="32">\
                                                     <td style="vertical-align:middle">PIN:&nbsp;</td>\
                                                     <td style="vertical-align:middle"><img id="' + getImgPin(0) + '" src="' + srcImgEmpty + '">&nbsp;<img id="' + getImgPin(1) + '" src="' + srcImgEmpty + '">&nbsp;<img id="' + getImgPin(2) + '" src="' + srcImgEmpty + '">&nbsp;<img id="' + getImgPin(3) + '" src="' + srcImgEmpty + '">&nbsp;<img id="' + getImgPin(4) + '" src="' + srcImgEmpty + '">&nbsp;<img id="' + getImgPin(5) + '" src="' + srcImgEmpty + '">&nbsp;</td>\
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
                                     <td style="vertical-align:middle"><a class="icon-replace icon-help active link" onclick="javascript:PinPad.ShowInfo(\'' + executionParam.divContainer[0].id + '\',\'' + '' + '\')" href="#">Help</a></td>\
                                   </tr>\
                                   <tr></tr>\
                                 </tbody>\
                               </table>\
                             </div>';

        executionParam.divContainer.html(authInput);
    }
}

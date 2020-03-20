
// function setPP(idName, idApp, idSubApp, idUsoSec) {
function initPinpad(initParam) {
    
    var getDefaultParam = function () {
        return {
            inputPanelName: null,
            inputJPanel: null,

            url: '/Anchise2.Web/_wk/PinPad',
            urlImgCancella: '/Anchise2.Web/Contents/00000/it-IT/images/pp/imgPPGeneric2.jpg',

            idApplication: null,
            idSubApplication: null,
            idUsoSecurity: null,

    };
    }

    var ppParam = $.extend({}, getDefaultParam(), initParam);
    ppParam.inputJPanel = $("#" + ppParam.inputPanelName);

    // fix grafico
    ppParam.inputJPanel.attr("maxlength", "6").attr("readonly", true).css("cursor", "pointer").addClass("form-control").css("margin-left", "20px").width(60);

    ppParam.inputJPanel.focus(function () {
        openPinpad(ppParam);
    });

    function openPinpad(executionParam) {
        var idApplicazione = executionParam.idApplication;
        var idSubApplicazione = executionParam.idSubApplication;
        var idUsoSecurity = executionParam.idUsoSecurity;

        executionParam.inputJPanel.attr("value", "");
        if (executionParam.inputJPanel.attr("tm_isCreated") == "1") {
            //
        }
        else {
            executionParam.inputJPanel.attr("tm_isCreated", "1");

            var strName = "tm_divPP_" + executionParam.inputPanelName;
            var strFieldName = executionParam.inputPanelName;
            var strImgCancella = executionParam.urlImgCancella;
            var imgUrl = executionParam.url + '?tm_idApplicazione=' + idApplicazione + '&tm_idSubApplicazione=' + idSubApplicazione + '&tm_id_usosecurity_operazione_otp=' + idUsoSecurity + '&d=' + $.now();
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
}

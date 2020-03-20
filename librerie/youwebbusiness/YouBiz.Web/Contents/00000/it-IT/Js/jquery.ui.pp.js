
function setPP(idName, idApp, idSubApp, idUsoSec) {
    //Example:<input type="password" id="pinField" /> ;setPP("pinField", 28, 0, 15);
    var objJQuery = $("#" + idName);
    objJQuery.attr("tm_idApp", idApp).attr("tm_idSubApp", idSubApp).attr("tm_idUsoSec", idUsoSec).attr("maxlength", "6").attr("readonly", true).css("cursor", "pointer").addClass("form-control").css("margin-left","20px").width(60);
    objJQuery.focus(function () {
        openPP(objJQuery, idName)
    });
    function openPP(cntrlJQuery, idName) {
        var urlImgPP ='/YouBiz.web/Sicurezza/ImgPP'
        var urlImgCancella = '/YouBiz.Web/Contents/00000/it-IT/images/pp/imgPPGeneric2.jpg';
        var idApplicazione = cntrlJQuery.attr("tm_idApp");
        var idSubApplicazione = cntrlJQuery.attr("tm_idSubApp");
        var idUsoSecurity = cntrlJQuery.attr("tm_idUsoSec");
        cntrlJQuery.attr("value", "");
        if (cntrlJQuery.attr("tm_isCreated") == "1") {
            //
        }
        else {
            cntrlJQuery.attr("tm_isCreated", "1");
            var strName = "tm_divPP_" + idName;
            var strSrcImgPP = urlImgPP + '?tm_idApplicazione=' + idApplicazione + '&tm_idSubApplicazione=' + idSubApplicazione + '&tm_id_usosecurity_operazione_otp=' + idUsoSecurity + '&d=' + $.now();
            var authInput = '<div id="' + strName + '"><table> \
                            <tr> \
                                <td align="left"> \
                                    <table style="border-collapse: separate !important; border-spacing: 10px !important;padding: 1px !important;"> \
                                        <tr> \
                                            <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -0px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-250px\');" onMouseOut="javascript:$(this).css(\'left\',\'-0px\');" onMouseDown="javascript:var cntrlJQuery=$(\'#\' +\'' + idName + '\');var newValue= \'\' + cntrlJQuery.attr(\'value\') + \'0\'; cntrlJQuery.attr(\'value\', newValue);if (newValue.length >= 6) $(\'[data-toggle=\\\'popover\\\']\').popover(\'hide\');" src="' + strSrcImgPP + '" /></div></td> \
                                            <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -25px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-275px\');" onMouseOut="javascript:$(this).css(\'left\',\'-25px\');" onMouseDown="javascript:var cntrlJQuery=$(\'#\' +\'' + idName + '\');var newValue= \'\' + cntrlJQuery.attr(\'value\') + \'1\'; cntrlJQuery.attr(\'value\', newValue);if (newValue.length >= 6) $(\'[data-toggle=\\\'popover\\\']\').popover(\'hide\');" src="' + strSrcImgPP + '" /></div></td> \
                                            <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -50px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-300px\');" onMouseOut="javascript:$(this).css(\'left\',\'-50px\');" onMouseDown="javascript:var cntrlJQuery=$(\'#\' +\'' + idName + '\');var newValue= \'\' + cntrlJQuery.attr(\'value\') + \'2\'; cntrlJQuery.attr(\'value\', newValue);if (newValue.length >= 6) $(\'[data-toggle=\\\'popover\\\']\').popover(\'hide\');" src="' + strSrcImgPP + '" /></div></td> \
                                        </tr> \
                                        <tr> \
                                            <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -75px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-325px\');" onMouseOut="javascript:$(this).css(\'left\',\'-75px\');" onMouseDown="javascript:var cntrlJQuery=$(\'#\' +\'' + idName + '\');var newValue= \'\' + cntrlJQuery.attr(\'value\') + \'3\'; cntrlJQuery.attr(\'value\', newValue);if (newValue.length >= 6) $(\'[data-toggle=\\\'popover\\\']\').popover(\'hide\');" src="' + strSrcImgPP + '" /></div></td> \
                                            <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -100px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-350px\');" onMouseOut="javascript:$(this).css(\'left\',\'-100px\');" onMouseDown="javascript:var cntrlJQuery=$(\'#\' +\'' + idName + '\');var newValue= \'\' + cntrlJQuery.attr(\'value\') + \'4\'; cntrlJQuery.attr(\'value\', newValue);if (newValue.length >= 6) $(\'[data-toggle=\\\'popover\\\']\').popover(\'hide\');" src="' + strSrcImgPP + '" /></div></td> \
                                            <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -125px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-375px\');" onMouseOut="javascript:$(this).css(\'left\',\'-125px\');" onMouseDown="javascript:var cntrlJQuery=$(\'#\' +\'' + idName + '\');var newValue= \'\' + cntrlJQuery.attr(\'value\') + \'5\'; cntrlJQuery.attr(\'value\', newValue);if (newValue.length >= 6) $(\'[data-toggle=\\\'popover\\\']\').popover(\'hide\');" src="' + strSrcImgPP + '" /></div></td> \
                                        </tr> \
                                        <tr> \
                                            <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -150px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-400px\');" onMouseOut="javascript:$(this).css(\'left\',\'-150px\');" onMouseDown="javascript:var cntrlJQuery=$(\'#\' +\'' + idName + '\');var newValue= \'\' + cntrlJQuery.attr(\'value\') + \'6\'; cntrlJQuery.attr(\'value\', newValue);if (newValue.length >= 6) $(\'[data-toggle=\\\'popover\\\']\').popover(\'hide\');" src="' + strSrcImgPP + '" /></div></td> \
                                            <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -175px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-425px\');" onMouseOut="javascript:$(this).css(\'left\',\'-175px\');" onMouseDown="javascript:var cntrlJQuery=$(\'#\' +\'' + idName + '\');var newValue= \'\' + cntrlJQuery.attr(\'value\') + \'7\'; cntrlJQuery.attr(\'value\', newValue);if (newValue.length >= 6) $(\'[data-toggle=\\\'popover\\\']\').popover(\'hide\');" src="' + strSrcImgPP + '" /></div></td> \
                                            <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -200px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-450px\');" onMouseOut="javascript:$(this).css(\'left\',\'-200px\');" onMouseDown="javascript:var cntrlJQuery=$(\'#\' +\'' + idName + '\');var newValue= \'\' + cntrlJQuery.attr(\'value\') + \'8\'; cntrlJQuery.attr(\'value\', newValue);if (newValue.length >= 6) $(\'[data-toggle=\\\'popover\\\']\').popover(\'hide\');" src="' + strSrcImgPP + '" /></div></td> \
                                        </tr> \
                                        <tr> \
                                            <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -0px;position: absolute; display: block; top: 0; width: 150px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-25px\');" onMouseOut="javascript:$(this).css(\'left\',\'-0px\');" onMouseDown="javascript:cntrlJQuery=$(\'#\' +\'' + idName + '\').attr(\'value\', \'\');" src="' + urlImgCancella + '" /></div></td> \
                                            <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -225px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-475px\');" onMouseOut="javascript:$(this).css(\'left\',\'-225px\');" onMouseDown="javascript:var cntrlJQuery=$(\'#\' +\'' + idName + '\');var newValue= \'\' + cntrlJQuery.attr(\'value\') + \'9\'; cntrlJQuery.attr(\'value\', newValue);if (newValue.length >= 6) $(\'[data-toggle=\\\'popover\\\']\').popover(\'hide\');" src="' + strSrcImgPP + '" /></div></td> \
                                            <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -75px;position: absolute; display: block; top: 0; width: 150px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-100px\');" onMouseOut="javascript:$(this).css(\'left\',\'-75px\');" onMouseDown="javascript:$(\'[data-toggle=\\\'popover\\\']\').popover(\'hide\');" src="' + urlImgCancella + '" /></div></td> \
                                        </tr> \
                                    </table> \
                                </td> \
                            </tr> \
                        </table></div>';
            //cntrlJQuery.after(authInput);
            objJQuery.attr("data-toggle", "popover").attr("data-placement", "bottom");
            cntrlJQuery.popover({
                content: authInput,
                html: true
            });
        }
    }
}

function setPP(idName, idApp, idSubApp, idUsoSec) {
    //Example:<input type="password" id="pinField" /> ;setPP("pinField", 28, 0, 15);
    var objJQuery = $("#" + idName);
    objJQuery.attr("tm_idApp", idApp).attr("tm_idSubApp", idSubApp).attr("tm_idUsoSec", idUsoSec).attr("maxlength", "6").attr("readonly", true).css("cursor", "pointer").addClass("form-control").css("margin-left","20px").width(60);
    objJQuery.focus(function () {
        openPP(objJQuery, idName)

    });
    function openPP(cntrlJQuery, idName) {
        var urlImgPP ='/YouBiz.web/Sicurezza/ImgPP'
        var urlImgCancella = '/YouBiz.Web/Contents/00000/it-IT/images/pp/imgPPGeneric.jpg';
        var idApplicazione = cntrlJQuery.attr("tm_idApp");
        var idSubApplicazione = cntrlJQuery.attr("tm_idSubApp");
        var idUsoSecurity = cntrlJQuery.attr("tm_idUsoSec");
        cntrlJQuery.attr("value", "");
        function _setVis(cntrlJQuery) {
            var posx = cntrlJQuery.position().left + cntrlJQuery.width()+35;
            var posy = cntrlJQuery.position().top;
            $("#tm_divPP_" + idName).css("top", posy).css("left", posx).css("visibility", "visible").css("display", "");
        }
        function _ppClick(ix) {
            var newValue = '' + cntrlJQuery.attr("value") + ix;
            cntrlJQuery.attr("value", newValue);
            if (newValue.length >= 6) closePP();
        }
        function closePP() {
            $("#tm_divPP_" + idName).css("visibility", "hidden").css("display", "none");
        }
        function _ppCancella() {
            cntrlJQuery.attr("value", "");
            //closePP();
        }
        function _ppOK() {
            closePP();
        }
        if (cntrlJQuery.attr("tm_isCreated") == "1") {
            _setVis(cntrlJQuery);
        }
        else {
            cntrlJQuery.attr("tm_isCreated", "1");
            var strName = "tm_divPP_" + idName;
            var strSrcImgPP = urlImgPP + '?tm_idApplicazione=' + idApplicazione + '&tm_idSubApplicazione=' + idSubApplicazione + '&tm_id_usosecurity_operazione_otp=' + idUsoSecurity + '&d=' + $.now();
            var authInput = '<div id="' + strName  + '" class="ybb-pp" style="z-index:1000; POSITION: absolute;display:hidden;visibility:none;"><table cellspacing="2" cellpadding="2" width="100%" class="ui-widget"> \
                                <tr> \
                                    <td align="left"> \
                                        <table style="border-collapse: separate !important; border-spacing: 2px !important;padding: 2px !important;"> \
                                            <tr> \
                                                <td align="center" valign="middle"><div class="_ppdivImg"><img id="_ppimg0" class="_ppimgpp" src="' + strSrcImgPP + '" /></div></td> \
                                                <td align="center" valign="middle"><div class="_ppdivImg"><img id="_ppimg1" class="_ppimgpp" src="' + strSrcImgPP + '" /></div></td> \
                                                <td align="center" valign="middle"><div class="_ppdivImg"><img id="_ppimg2" class="_ppimgpp" src="' + strSrcImgPP + '" /></div></td> \
                                            </tr> \
                                            <tr> \
                                                <td align="center" valign="middle"><div class="_ppdivImg"><img id="_ppimg3" class="_ppimgpp" src="' + strSrcImgPP + '" /></div></td> \
                                                <td align="center" valign="middle"><div class="_ppdivImg"><img id="_ppimg4" class="_ppimgpp" src="' + strSrcImgPP + '" /></div></td> \
                                                <td align="center" valign="middle"><div class="_ppdivImg"><img id="_ppimg5" class="_ppimgpp" src="' + strSrcImgPP + '" /></div></td> \
                                            </tr> \
                                            <tr> \
                                                <td align="center" valign="middle"><div class="_ppdivImg"><img id="_ppimg6" class="_ppimgpp" src="' + strSrcImgPP + '" /></div></td> \
                                                <td align="center" valign="middle"><div class="_ppdivImg"><img id="_ppimg7" class="_ppimgpp" src="' + strSrcImgPP + '" /></div></td> \
                                                <td align="center" valign="middle"><div class="_ppdivImg"><img id="_ppimg8" class="_ppimgpp" src="' + strSrcImgPP + '" /></div></td> \
                                            </tr> \
                                            <tr> \
                                                <td align="center" valign="middle"><div class="_ppdivImgCancella" id="_ppdivImgcancella"><img id="_ppimgC" class="_ppimgCancella" src="' + urlImgCancella + '" border="0"></div></td> \
                                                <td align="center" valign="middle"><div class="_ppdivImg"><img id="_ppimg9" class="_ppimgpp" src="' + strSrcImgPP + '" /></div></td> \
                                                <td align="center" valign="middle"><div class="_ppdivImgOK" id="_ppdivImgOK"><img id="_ppimgOK" class="_ppimgOK" src="' + urlImgCancella + '" border="0"></div></td> \
                                            </tr> \
                                        </table> \
                                    </td> \
                                </tr> \
                            </table></div>';
            cntrlJQuery.after(authInput);
            var divContext = $("#" + strName);
            $("._ppimgpp", divContext).css({ "position": "absolute", "display": "block", "top": "0", "width": "800px", "height": "32px", "cursor": "pointer" });
            $("._ppimgCancella", divContext).css({ "position": "absolute", "display": "block", "top": "0", "width": "240px", "height": "32px" });
            $("._ppimgOK", divContext).css({ "position": "absolute", "display": "block", "top": "0", "width": "240px", "height": "32px" });
            $("._ppdivImg", divContext).css({ "width": "40px", "height": "32px", "position": "relative", "overflow": "hidden" });
            $("._ppdivImgCancella", divContext).css({ "width": "40px", "height": "32px", "position": "relative", "overflow": "hidden" });
            $("._ppdivImgOK", divContext).css({ "width": "40px", "height": "32px", "position": "relative", "overflow": "hidden" });
            

            $("#_ppimg0", divContext).hover(function () { $("#_ppimg0", divContext).css("left", "-400px"); }, function () { $("#_ppimg0", divContext).css("left", "-0px"); }).css("left", "-0px").mousedown(function () { _ppClick(0); });
            $("#_ppimg1", divContext).hover(function () { $("#_ppimg1", divContext).css("left", "-440px"); }, function () { $("#_ppimg1", divContext).css("left", "-40px"); }).css("left", "-40px").mousedown(function () { _ppClick(1); });
            $("#_ppimg2", divContext).hover(function () { $("#_ppimg2", divContext).css("left", "-480px"); }, function () { $("#_ppimg2", divContext).css("left", "-80px"); }).css("left", "-80px").mousedown(function () { _ppClick(2); });
            $("#_ppimg3", divContext).hover(function () { $("#_ppimg3", divContext).css("left", "-520px"); }, function () { $("#_ppimg3", divContext).css("left", "-120px"); }).css("left", "-120px").mousedown(function () { _ppClick(3); });
            $("#_ppimg4", divContext).hover(function () { $("#_ppimg4", divContext).css("left", "-560px"); }, function () { $("#_ppimg4", divContext).css("left", "-160px"); }).css("left", "-160px").mousedown(function () { _ppClick(4); });
            $("#_ppimg5", divContext).hover(function () { $("#_ppimg5", divContext).css("left", "-600px"); }, function () { $("#_ppimg5", divContext).css("left", "-200px"); }).css("left", "-200px").mousedown(function () { _ppClick(5); });
            $("#_ppimg6", divContext).hover(function () { $("#_ppimg6", divContext).css("left", "-640px"); }, function () { $("#_ppimg6", divContext).css("left", "-240px"); }).css("left", "-240px").mousedown(function () { _ppClick(6); });
            $("#_ppimg7", divContext).hover(function () { $("#_ppimg7", divContext).css("left", "-680px"); }, function () { $("#_ppimg7", divContext).css("left", "-280px"); }).css("left", "-280px").mousedown(function () { _ppClick(7); });
            $("#_ppimg8", divContext).hover(function () { $("#_ppimg8", divContext).css("left", "-720px"); }, function () { $("#_ppimg8", divContext).css("left", "-320px"); }).css("left", "-320px").mousedown(function () { _ppClick(8); });
            $("#_ppimg9", divContext).hover(function () { $("#_ppimg9", divContext).css("left", "-760px"); }, function () { $("#_ppimg9", divContext).css("left", "-360px"); }).css("left", "-360px").mousedown(function () { _ppClick(9); });
            $("#_ppimgC", divContext).css({ "left": "-0px", "cursor": "pointer" }).hover(function () { $("#_ppimgC", divContext).css("left", "-40px"); }, function () { $("#_ppimgC", divContext).css("left", "-0px"); }).click(function () { _ppCancella(); })
            $("#_ppimgOK", divContext).css({ "left": "-120px", "cursor": "pointer" }).hover(function () { $("#_ppimgOK", divContext).css("left", "-160px"); }, function () { $("#_ppimgOK", divContext).css("left", "-120px"); }).click(function () { _ppOK(); })
            _setVis(cntrlJQuery);
        }
    }
}

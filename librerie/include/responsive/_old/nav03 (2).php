<style>

br.clear{display:block;margin:0;padding:0;height:0;line-height:0;clear:both;font-size:0}
/*navigazione pagina e navigazione tab in contenuti */
#contenuti *{box-sizing: border-box;}
.navContenuti{overflow-x:auto;overflow-y:hidden;width:100%}
.navContenuti ul li, .navContenutiSeclev ul li{position:relative;top:1px;background-color:#ebebeb;display:table;*display:inline;*zoom:1;border:1px solid #ccc;border-bottom:0;border-radius:6px 6px 0 0;text-align:center;height:100%;float:left;margin-right:1px;width:13%;max-width:95px}
.navContenuti ul li{min-height:30px;}
.navContenuti ul li.on,.navContenutiSeclev ul li.on{background-color:#fff;border-color:#7c7c7c;position:relative;top:1px;z-index:2}
.navContenuti ul li a,.navContenutiSeclev ul li a{display:table-cell;color:#707173;text-decoration:none;vertical-align:middle}
.navContenuti ul li.on a{font-weight:bold;color:#232323}
.innerTab{min-width:600px;min-height:31px}
.outerTab{width:100%;}
.navContenuti .separator, .navContenutiSeclev .separator{height:1px;border-bottom:1px solid #7c7c7c;width:100%;position:relative;z-index:1;}
.navContenutiSeclev ul li i.fa{display:none}
.navContenutiSeclev ul{height:25px;}
.navContenutiSeclev ul li a{height:100%;}
.navContenutiSeclev li{background-color:#ebebeb;width:15%;float:left}
.tabContent{width:100%}
.divtabellacont{clear:left;border:1px solid #ccc;border-top:0;padding:15px 6px}
.navContenutiSeclev ul li.on{border-color:#ccc}
.navContenutiSeclev .separator{border-color:#ccc}

/* tabella form04 in alert */
.form04{width:100%;}
.form04 tr:first-child{border-top: 1px solid #8C8C8C;}
.form04 .innerTable tr{border-top:0}
table.form04 tr.titolo{background-color:#D3D3D3;}
table.form04 tr.titolo td{padding:10px;font-weight:bold}
table.form04 .verde{color:#6F8F0A;display:block}
table.form04 tr td{padding:4px}
table.form04 tr{background-color:#efefef;border-top:1px solid #CCC}
table.form04 tr.bianco{background-color:#FFF}
table.form04 tr.titolo td.left{text-align:center}
table.form04 tr td.left, table.form04 tr td.right, table.form04 tr td.center{border-left: 1px solid #CCC;text-align: left;font-weight: bold}
table.form04 tr td.center{text-align:center}
.form04.resizable input{max-width:100px}
span.disabled{opacity:0.4;font-weight:normal}

/* form converiti a nuovo*/
.tithelp{width:100%}
.helpleft{color:#6F8F0A;font-weight:bold;float:left; margin-bottom:5px}

/*FORM GENERICO */
/*form in box con angoli arrotondati*/
.borderFormRounded{width:100%;border:1px solid #CCCCCC;border-radius:10px;padding:10px;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;margin-bottom:10px}
.formGeneric label.nomefield{padding-bottom:3px;font-weight:bold;display:block}
.formGeneric .row input[type="text"],.formGeneric .row-fluid input[type="text"],.formGeneric  .row-fluid input[type="number"],.formGeneric .row-fluid input[type="password"],.formGeneric .row-fluid input[type="tel"],.formGeneric .row-fluid select,.formGeneric .row-fluid  textarea, .formGeneric .row select{width:100%;}
.formGeneric input[type="text"],.formGeneric input[type="number"],.formGeneric input[type="password"],.formGeneric input[type="tel"],.formGeneric  select,.formGeneric  textarea{background:none;padding:3px 0 4px 4px;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;border:solid 1px #BBBBBB;background-color:#fff;background-image:linear-gradient(to top, #fff, #f3f3f3); background-image:-moz-linear-gradient(bottom, #fff, #f3f3f3);background-image:-o-linear-gradient(bottom, #fff, #f3f3f3);background-image:-ms-linear-gradient(bottom, #fff, #f3f3f3);box-shadow:0 1px 1px rgba(0,0,0,0.1), inset 0 1px #fff;-webkit-box-shadow:0 2px #f4f4f4, inset 0 1px #fff;-moz-box-shadow:0 2px #F4F4F4, inset 0 1px #fff;}
.formGeneric .row-fluid input.disabled[type="text"],.formGeneric .row-fluid input.disabled[type="number"],.formGeneric .row-fluid input.disabled[type="password"],.formGeneric .row-fluid input.disabled[type="tel"],.formGeneric  .row-fluid select.disabled,.formGeneric .row-fluid  textarea.disabled{box-shadow:0 2px #f4f4f4;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-shadow: 0 2px #f4f4f4;-webkit-box-shadow: 0 2px #f4f4f4;border: solid 1px #e1e1e1;background-image:none}
.preferito .fa-2x{font-size:15px;margin-top:13px}
.preferito .fa-star{color:#ffdd21}
.preferito .off .fa-star{color:#6F8F0A}
.preferito .fa-lg.fa-star{color:#fff}

/* FORM CENTRATI IN PARTE PRIVATA*/
.formCenteredwrapper,.formCenteredwrapper2 {width:52%;border:1px solid #CCCCCC;border-radius:10px;margin:0 auto;margin-bottom:10px;}
.formCenteredwrapper .formCentered,.formCenteredwrapper2 .formCentered{background:#fff;border-radius:10px;width:100%;padding:10px 10px 10px 10px;max-width:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;margin-bottom:0}

/*bottoniera form */
.aButtonconsRight{text-align:right;margin:1em 0}
./* Bottoni nuovi */
.aButtoncons{text-align:center;margin: 0 0 15px;clear:left;width:100%}
.aButton{background-color:#666;border:solid 1px #333;text-align:center;margin:0;display:inline-block;min-width:60px; padding:0 10px;text-decoration:none !important;border-radius:10px;cursor:pointer;box-shadow: inset 0 1px rgba(255,255,255,.5);color:#fff!important;text-decoration:none;font-family: arial, serif;line-height:24px!important;padding-bottom:0!important;background-repeat:repeat-x\9;background-image:url(/img/ret/abutt_bg.gif)\9;border-top:none\9;}
.aButton:hover,.aButton:hover span{color:#fff!important;}
.aButton span{text-align:center;color:#fff;text-decoration:none;text-transform:uppercase;text-shadow: 0 1px 1px rgba(0,0,0,.5);cursor:pointer}
.aBigButtoncons {margin-top:10px;background: transparent url(/wscmn/img/ret/acco_bg_bigbutt.gif) no-repeat center top;text-align:center; padding-bottom:10px}
.aButton.buttDis{cursor:default;background-image:none; background-color:#dfdfdf;border:solid 1px #ddd}
.aButton.buttDis span {cursor:default;text-shadow:0 1px 1px rgba(0, 0, 0, 0.1)}
.aButton {border:solid 1px #a6c34a;background-image:-moz-linear-gradient(bottom, #a8c44e, #8ab10b 70%, #7c9e11);/* background-image:-webkit-linear-gradient(bottom, #a8c44e, #8ab10b 70%, #7c9e11); */background-image:-ms-linear-gradient(bottom, #a8c44e, #8ab10b 70%, #7c9e11);background-image:linear-gradient(to top, #a8c44e, #8ab10b 70%, #7c9e11)}

/* Tooltip */
#ttBox {display:block;position:absolute;z-index:10000;float:left;max-width:20em; box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;clear:left}
#ttClose {background: url("/wscmn/img/ret/ico1gr_tooltip_close.gif") repeat scroll 0 0 transparent;display:block;float: right;height: 20px;margin: -11px -8px 0 0;width:18px}
#ttBox #ttCont{background-color:#FFFFFF;border: 6px solid #CECECE;border-radius: 7px 7px 7px 7px;box-shadow: 0 3px 1px rgba(0, 0, 0, 0.1);color: #000000;float: left;font-size: 0.8em;padding: 0;}
#ttBox #ttCont #ttContText {padding:0.5em 1em 0.5em 0.5em;float:none}
#ttBox .arrow {clear:left;margin:0 auto;background: transparent url(/wscmn/img/responsive/tt_arrow.png) no-repeat center bottom;height:0.5em;float:left;*float:none;width:100%;*width:20px;}
#ttBox .arrow.top {background-position: center top}
#ttBox.error #ttCont{color:#a00;border:solid 5px #c00}
#ttBox.error .arrow {background-image: url(/wscmn/img/responsive/tt_arrow_error.png)}
.positionTooltip{position:relative;float:left;width:100%}


/* MEDIA QUERY*/

/* smartphone */
@media screen and (min-width:320px) and (max-width:600px) {
#contenuti{font-size:13px}
.navContenutiSeclev .separator{display:none}
.navContenutiSeclev li{width:100%}
.navContenutiSeclev ul{display:none}
.navContenutiSeclev h2{width:100%;display:table;margin-bottom:2px;height:30px;background-color:#ebebeb;border-top:1px solid #ccc;border-bottom:1px solid #ccc;}
.divtabellacont{border:0;padding:0}
.navContenutiSeclev h2 a{color:#707173;display:table-cell;color:#707173;text-decoration:none;vertical-align:middle;height:25px;width:100%;padding-left:1em}
.tabContent{padding:1em}
.navContenutiSeclev h2.on{background-color:#dce7b5;}
.added{text-align:left;font-weight:normal}
table.form04 tr td.center{text-align:left}
table.form04 .verde{color:#6F8F0A;display:inline-block}
/* query per tabella form04 */
table, thead, tbody, th, td, tr {display: block;}
table.form04 tr.titRespTab td{display:inline-block;padding-left:6px;font-weight:bold}
/* Hide table headers (but not display: none;, for accessibility) */
table .hidden{position:absolute!important;top:-9999px;left:-9999px}
table.form04 tr td{border:none;border-bottom: 1px solid #eee;position: relative;padding-left: 50%}
table.form04 tr .added {position: absolute;top: 6px;left: 6px;width: 45%;padding-right: 10px;padding-left:0;white-space: nowrap}
table.form04 tr{background-color:#fff;}
table.form04 tr.titRespTab{background-color:#efefef;}
table.form04 tr.titRespTab{border:1px solid #ccc;border-bottom:0;border-top:0}
table.form04 tr td.left,table.form04 tr td.center{border-right:1px solid #ccc;border-bottom:1px solid #ccc;}
.navContenutiSeclev h2 i.fa-chevron-down{display:block;color:#ccc}
.navContenutiSeclev h2 i.fa-chevron-up{display:none;color:#6F8F0A}
.navContenutiSeclev h2 i.fa{font-size:1.5em;padding-right:1em;line-height:1.5em}
.titRespTab td:first-child{width:45%}
.titRespTab td.txtrFirst{width:10%}
.elTitleForm{left:5%}
.wrapperSelect{float:right;width:50%}
.wrapperSelect select:first-child{margin-right:1em}
.beforeTable{padding:0}
.aButtonconsRight{text-align:center}
.titleGroupAccordion{margin-top:1.5em;background-color:#999;padding:1em;font-weight:bold;color:#fff}
.linkTitle.elTitleForm{max-width:50%}
.txt2{width:auto!important}
}
@media screen and (min-width:320px) and (max-width:359px) {
.wrapperSelect{float:right;width:42%}
}
/*REGOLE MEDIA QUERY RELATIVE AI FORM*/
/* PHONE */
@media (max-width: 479px) {
.row-fluid  .phone, .row-fluid  .no-tablet,.row-fluid  .no-desktop,.phone [class*="span"], .no-tablet [class*="span"],.no-desktop [class*="span"]{padding-bottom:10px;display:block;width:100%;margin-left:0;margin-right:0;padding-left:0;padding-right:0;clear:both;-moz-box-sizing: border-box;box-sizing: border-box;-webkit-box-sizing: border-box;}
.paddPhone,.no-paddTablet,.no-paddDesktop{padding-bottom:10px}
.formGeneric input.withIco[type="text"],.formGeneric input.withIco[type="tel"],.formGeneric select.withIco{width:91%}
.formGeneric .span12 input.withIco[type="text"],.formGeneric .span12 input.withIco[type="tel"],.formGeneric .span12 select.withIco,.formGeneric label.nomefield.ico, .formGeneric legend.ico,.formGeneric span.text{width:91%}
.formCenteredwrapper,.formCenteredwrapper2{width:100%;border:0;margin-bottom:20px}
.formCenteredwrapper .formCentered,.formCenteredwrapper2 .formCentered{padding:0;}
.preferito .fa-2x{margin-top:16px}


}
/* TABLET */
@media (min-width: 480px) and (max-width: 767px) {
.no-desktop,.row-fluid  .tablet, .row-fluid  .no-phone,.row-fluid  .no-desktop, .tablet [class*="span"], .no-phone [class*="span"],.no-desktop [class*="span"]{padding-bottom:10px;display:block;width:100%;margin-left:0;clear:both;-moz-box-sizing: border-box;box-sizing: border-box;-webkit-box-sizing: border-box;}
.paddTablet,.no-paddDesktop,.no-paddPhone{padding-bottom:10px}
.formGeneric  input.withIco[type="text"],.formGeneric  input.withIco[type="tel"],.formGeneric  select.withIco{width:95%;float:left}
.hiddenPhone{display:none;}
.formCenteredwrapper,.formCenteredwrapper2{width:100%}
}


/* DESKTOP */
@media (min-width: 768px) {
.row-desktop  .desktop, .row-fluid  .no-phone, .row-fluid  .no-tablet, .desktop [class*="span"], .no-phone [class*="span"],.no-tablet[class*="span"]{display:block;width:100%;margin-left:0;clear:both;-moz-box-sizing: border-box;box-sizing: border-box;-webkit-box-sizing: border-box;}
.paddDesktop,.no-paddPhone,.no-paddTablet{padding-bottom:10px}
.formGeneric .row-fluid input.withIco[type="text"],.formGeneric .row-fluid input.withIco[type="tel"],.formGeneric .row-fluid select.withIco{width:94%}
.formGeneric.formCentered .row-fluid input.withIco[type="text"],.formGeneric.formCentered .row-fluid input.withIco[type="tel"],.formGeneric.formCentered .row-fluid select.withIco{width:93%}
.formGeneric .row-fluid .span6 input.withIco[type="text"],.formGeneric .row-fluid .span6 input.withIco[type="tel"],.formGeneric .row-fluid .span6 select.withIco{width:92%}
.formGeneric .row-fluid .span6 .span10 input.withIco[type="text"],.formGeneric .row-fluid .span6 .span10  input.withIco[type="tel"],.formGeneric .row-fluid .span6  .span10 select.withIco{width:90%}
.formGeneric .row-fluid .span6 .span6  input.withIco[type="text"],.formGeneric .row-fluid .span6 .span6  input.withIco[type="tel"],.formGeneric .row-fluid .span6  .span6 select.withIco{width:86%}
.formGeneric .row-fluid .span6 .span4  input.withIco[type="text"],.formGeneric .row-fluid .span6 .span4  input.withIco[type="tel"],.formGeneric .row-fluid .span6  .span4 select.withIco,.formGeneric .row-fluid .span4 .span6  input.withIco[type="text"],.formGeneric .row-fluid .span4 .span6  input.withIco[type="tel"],.formGeneric .row-fluid .span4  .span6 select.withIco{width:76%}
.formGeneric .span4 input.withIco[type="text"],.formGeneric  .span4 input.withIco[type="tel"],.formGeneric   .span4 select.withIco{width:88.965241930492%}
.formCenteredwrapper .formGeneric .span4 input.withIco[type="text"],.formCenteredwrapper  .formGeneric  .span4 input.withIco[type="tel"],.formCenteredwrapper  .formGeneric   .span4 select.withIco{width:76%}
.formGeneric .row-fluid .span12 input.withIco[type="text"],.formGeneric .row-fluid .span12 input.withIco[type="tel"],.formGeneric .row-fluid .span12 select.withIco{width:97.142857142857%}
}
button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
  -webkit-appearance: button;
  cursor: pointer;
}
button[disabled],
html input[disabled] {
  cursor: default;
}
button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0;
}
input {
  line-height: normal;
}
input[type="checkbox"],
input[type="radio"] {
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 0;
}
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  height: auto;
}
input[type="search"] {
  -webkit-appearance: textfield;
  -moz-box-sizing: content-box;
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
}
input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}
fieldset {
  border: 1px solid #c0c0c0;
  margin: 0 2px;
  padding: 0.35em 0.625em 0.75em;
}
legend {
  border: 0;
  padding: 0;
}
textarea {
  overflow: auto;
}
optgroup {
  font-weight: bold;
}
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
*:before,
*:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
input,
button,
select,
textarea {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

figure {
  margin: 0;
}
img {
  vertical-align: middle;
}
.img-responsive {
  display: block;
  max-width: 100%;
  height: auto;
}
.img-rounded {
  border-radius: 6px;
}
.img-thumbnail {
  padding: 4px;
  line-height: 1.42857143;
  background-color: #ffffff;
  border: 1px solid #dddddd;
  border-radius: 4px;
  -webkit-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  display: inline-block;
  max-width: 100%;
  height: auto;
}
.img-circle {
  border-radius: 50%;
}
hr {
  margin-top: 20px;
  margin-bottom: 20px;
  border: 0;
  border-top: 1px solid #eeeeee;
}
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  margin: -1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto;
}
[role="button"] {
  cursor: pointer;
}
.container {
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px;
}
@media (min-width: 768px) {
  .container {
    width: 750px;
  }
}
@media (min-width: 992px) {
  .container {
    width: 970px;
  }
}
@media (min-width: 1200px) {
  .container {
    width: 1170px;
  }
}
.container-fluid {
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px;
}
.row {
  margin-left: -15px;
  margin-right: -15px;
}
.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
  position: relative;
  min-height: 1px;
  padding-left: 15px;
  padding-right: 15px;
}
.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
  float: left;
}
.col-xs-12 {
  width: 100%;
}
.col-xs-11 {
  width: 91.66666667%;
}
.col-xs-10 {
  width: 83.33333333%;
}
.col-xs-9 {
  width: 75%;
}
.col-xs-8 {
  width: 66.66666667%;
}
.col-xs-7 {
  width: 58.33333333%;
}
.col-xs-6 {
  width: 50%;
}
.col-xs-5 {
  width: 41.66666667%;
}
.col-xs-4 {
  width: 33.33333333%;
}
.col-xs-3 {
  width: 25%;
}
.col-xs-2 {
  width: 16.66666667%;
}
.col-xs-1 {
  width: 8.33333333%;
}
.col-xs-pull-12 {
  right: 100%;
}
.col-xs-pull-11 {
  right: 91.66666667%;
}
.col-xs-pull-10 {
  right: 83.33333333%;
}
.col-xs-pull-9 {
  right: 75%;
}
.col-xs-pull-8 {
  right: 66.66666667%;
}
.col-xs-pull-7 {
  right: 58.33333333%;
}
.col-xs-pull-6 {
  right: 50%;
}
.col-xs-pull-5 {
  right: 41.66666667%;
}
.col-xs-pull-4 {
  right: 33.33333333%;
}
.col-xs-pull-3 {
  right: 25%;
}
.col-xs-pull-2 {
  right: 16.66666667%;
}
.col-xs-pull-1 {
  right: 8.33333333%;
}
.col-xs-pull-0 {
  right: auto;
}
.col-xs-push-12 {
  left: 100%;
}
.col-xs-push-11 {
  left: 91.66666667%;
}
.col-xs-push-10 {
  left: 83.33333333%;
}
.col-xs-push-9 {
  left: 75%;
}
.col-xs-push-8 {
  left: 66.66666667%;
}
.col-xs-push-7 {
  left: 58.33333333%;
}
.col-xs-push-6 {
  left: 50%;
}
.col-xs-push-5 {
  left: 41.66666667%;
}
.col-xs-push-4 {
  left: 33.33333333%;
}
.col-xs-push-3 {
  left: 25%;
}
.col-xs-push-2 {
  left: 16.66666667%;
}
.col-xs-push-1 {
  left: 8.33333333%;
}
.col-xs-push-0 {
  left: auto;
}
.col-xs-offset-12 {
  margin-left: 100%;
}
.col-xs-offset-11 {
  margin-left: 91.66666667%;
}
.col-xs-offset-10 {
  margin-left: 83.33333333%;
}
.col-xs-offset-9 {
  margin-left: 75%;
}
.col-xs-offset-8 {
  margin-left: 66.66666667%;
}
.col-xs-offset-7 {
  margin-left: 58.33333333%;
}
.col-xs-offset-6 {
  margin-left: 50%;
}
.col-xs-offset-5 {
  margin-left: 41.66666667%;
}
.col-xs-offset-4 {
  margin-left: 33.33333333%;
}
.col-xs-offset-3 {
  margin-left: 25%;
}
.col-xs-offset-2 {
  margin-left: 16.66666667%;
}
.col-xs-offset-1 {
  margin-left: 8.33333333%;
}
.col-xs-offset-0 {
  margin-left: 0%;
}
@media (min-width: 768px) {
  .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
    float: left;
  }
  .col-sm-12 {
    width: 100%;
  }
  .col-sm-11 {
    width: 91.66666667%;
  }
  .col-sm-10 {
    width: 83.33333333%;
  }
  .col-sm-9 {
    width: 75%;
  }
  .col-sm-8 {
    width: 66.66666667%;
  }
  .col-sm-7 {
    width: 58.33333333%;
  }
  .col-sm-6 {
    width: 50%;
  }
  .col-sm-5 {
    width: 41.66666667%;
  }
  .col-sm-4 {
    width: 33.33333333%;
  }
  .col-sm-3 {
    width: 25%;
  }
  .col-sm-2 {
    width: 16.66666667%;
  }
  .col-sm-1 {
    width: 8.33333333%;
  }
  .col-sm-pull-12 {
    right: 100%;
  }
  .col-sm-pull-11 {
    right: 91.66666667%;
  }
  .col-sm-pull-10 {
    right: 83.33333333%;
  }
  .col-sm-pull-9 {
    right: 75%;
  }
  .col-sm-pull-8 {
    right: 66.66666667%;
  }
  .col-sm-pull-7 {
    right: 58.33333333%;
  }
  .col-sm-pull-6 {
    right: 50%;
  }
  .col-sm-pull-5 {
    right: 41.66666667%;
  }
  .col-sm-pull-4 {
    right: 33.33333333%;
  }
  .col-sm-pull-3 {
    right: 25%;
  }
  .col-sm-pull-2 {
    right: 16.66666667%;
  }
  .col-sm-pull-1 {
    right: 8.33333333%;
  }
  .col-sm-pull-0 {
    right: auto;
  }
  .col-sm-push-12 {
    left: 100%;
  }
  .col-sm-push-11 {
    left: 91.66666667%;
  }
  .col-sm-push-10 {
    left: 83.33333333%;
  }
  .col-sm-push-9 {
    left: 75%;
  }
  .col-sm-push-8 {
    left: 66.66666667%;
  }
  .col-sm-push-7 {
    left: 58.33333333%;
  }
  .col-sm-push-6 {
    left: 50%;
  }
  .col-sm-push-5 {
    left: 41.66666667%;
  }
  .col-sm-push-4 {
    left: 33.33333333%;
  }
  .col-sm-push-3 {
    left: 25%;
  }
  .col-sm-push-2 {
    left: 16.66666667%;
  }
  .col-sm-push-1 {
    left: 8.33333333%;
  }
  .col-sm-push-0 {
    left: auto;
  }
  .col-sm-offset-12 {
    margin-left: 100%;
  }
  .col-sm-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-sm-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-sm-offset-9 {
    margin-left: 75%;
  }
  .col-sm-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-sm-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-sm-offset-6 {
    margin-left: 50%;
  }
  .col-sm-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-sm-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-sm-offset-3 {
    margin-left: 25%;
  }
  .col-sm-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-sm-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-sm-offset-0 {
    margin-left: 0%;
  }
}
@media (min-width: 992px) {
  .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
    float: left;
  }
  .col-md-12 {
    width: 100%;
  }
  .col-md-11 {
    width: 91.66666667%;
  }
  .col-md-10 {
    width: 83.33333333%;
  }
  .col-md-9 {
    width: 75%;
  }
  .col-md-8 {
    width: 66.66666667%;
  }
  .col-md-7 {
    width: 58.33333333%;
  }
  .col-md-6 {
    width: 50%;
  }
  .col-md-5 {
    width: 41.66666667%;
  }
  .col-md-4 {
    width: 33.33333333%;
  }
  .col-md-3 {
    width: 25%;
  }
  .col-md-2 {
    width: 16.66666667%;
  }
  .col-md-1 {
    width: 8.33333333%;
  }
  .col-md-pull-12 {
    right: 100%;
  }
  .col-md-pull-11 {
    right: 91.66666667%;
  }
  .col-md-pull-10 {
    right: 83.33333333%;
  }
  .col-md-pull-9 {
    right: 75%;
  }
  .col-md-pull-8 {
    right: 66.66666667%;
  }
  .col-md-pull-7 {
    right: 58.33333333%;
  }
  .col-md-pull-6 {
    right: 50%;
  }
  .col-md-pull-5 {
    right: 41.66666667%;
  }
  .col-md-pull-4 {
    right: 33.33333333%;
  }
  .col-md-pull-3 {
    right: 25%;
  }
  .col-md-pull-2 {
    right: 16.66666667%;
  }
  .col-md-pull-1 {
    right: 8.33333333%;
  }
  .col-md-pull-0 {
    right: auto;
  }
  .col-md-push-12 {
    left: 100%;
  }
  .col-md-push-11 {
    left: 91.66666667%;
  }
  .col-md-push-10 {
    left: 83.33333333%;
  }
  .col-md-push-9 {
    left: 75%;
  }
  .col-md-push-8 {
    left: 66.66666667%;
  }
  .col-md-push-7 {
    left: 58.33333333%;
  }
  .col-md-push-6 {
    left: 50%;
  }
  .col-md-push-5 {
    left: 41.66666667%;
  }
  .col-md-push-4 {
    left: 33.33333333%;
  }
  .col-md-push-3 {
    left: 25%;
  }
  .col-md-push-2 {
    left: 16.66666667%;
  }
  .col-md-push-1 {
    left: 8.33333333%;
  }
  .col-md-push-0 {
    left: auto;
  }
  .col-md-offset-12 {
    margin-left: 100%;
  }
  .col-md-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-md-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-md-offset-9 {
    margin-left: 75%;
  }
  .col-md-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-md-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-md-offset-6 {
    margin-left: 50%;
  }
  .col-md-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-md-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-md-offset-3 {
    margin-left: 25%;
  }
  .col-md-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-md-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-md-offset-0 {
    margin-left: 0%;
  }
}
@media (min-width: 1200px) {
  .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {
    float: left;
  }
  .col-lg-12 {
    width: 100%;
  }
  .col-lg-11 {
    width: 91.66666667%;
  }
  .col-lg-10 {
    width: 83.33333333%;
  }
  .col-lg-9 {
    width: 75%;
  }
  .col-lg-8 {
    width: 66.66666667%;
  }
  .col-lg-7 {
    width: 58.33333333%;
  }
  .col-lg-6 {
    width: 50%;
  }
  .col-lg-5 {
    width: 41.66666667%;
  }
  .col-lg-4 {
    width: 33.33333333%;
  }
  .col-lg-3 {
    width: 25%;
  }
  .col-lg-2 {
    width: 16.66666667%;
  }
  .col-lg-1 {
    width: 8.33333333%;
  }
  .col-lg-pull-12 {
    right: 100%;
  }
  .col-lg-pull-11 {
    right: 91.66666667%;
  }
  .col-lg-pull-10 {
    right: 83.33333333%;
  }
  .col-lg-pull-9 {
    right: 75%;
  }
  .col-lg-pull-8 {
    right: 66.66666667%;
  }
  .col-lg-pull-7 {
    right: 58.33333333%;
  }
  .col-lg-pull-6 {
    right: 50%;
  }
  .col-lg-pull-5 {
    right: 41.66666667%;
  }
  .col-lg-pull-4 {
    right: 33.33333333%;
  }
  .col-lg-pull-3 {
    right: 25%;
  }
  .col-lg-pull-2 {
    right: 16.66666667%;
  }
  .col-lg-pull-1 {
    right: 8.33333333%;
  }
  .col-lg-pull-0 {
    right: auto;
  }
  .col-lg-push-12 {
    left: 100%;
  }
  .col-lg-push-11 {
    left: 91.66666667%;
  }
  .col-lg-push-10 {
    left: 83.33333333%;
  }
  .col-lg-push-9 {
    left: 75%;
  }
  .col-lg-push-8 {
    left: 66.66666667%;
  }
  .col-lg-push-7 {
    left: 58.33333333%;
  }
  .col-lg-push-6 {
    left: 50%;
  }
  .col-lg-push-5 {
    left: 41.66666667%;
  }
  .col-lg-push-4 {
    left: 33.33333333%;
  }
  .col-lg-push-3 {
    left: 25%;
  }
  .col-lg-push-2 {
    left: 16.66666667%;
  }
  .col-lg-push-1 {
    left: 8.33333333%;
  }
  .col-lg-push-0 {
    left: auto;
  }
  .col-lg-offset-12 {
    margin-left: 100%;
  }
  .col-lg-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-lg-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-lg-offset-9 {
    margin-left: 75%;
  }
  .col-lg-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-lg-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-lg-offset-6 {
    margin-left: 50%;
  }
  .col-lg-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-lg-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-lg-offset-3 {
    margin-left: 25%;
  }
  .col-lg-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-lg-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-lg-offset-0 {
    margin-left: 0%;
  }
}
.clearfix:before,
.clearfix:after,
.container:before,
.container:after,
.container-fluid:before,
.container-fluid:after,
.row:before,
.row:after {
  content: " ";
  display: table;
}
.clearfix:after,
.container:after,
.container-fluid:after,
.row:after {
  clear: both;
}
.center-block {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.pull-right {
  float: right !important;
}
.pull-left {
  float: left !important;
}
.hide {
  display: none !important;
}
.show {
  display: block !important;
}
.invisible {
  visibility: hidden;
}
.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.affix {
  position: fixed;
}
.row [class^=col-] {padding-top: 5px;padding-bottom: 5px}
@media (max-width: 640px) 
{ 

</style>

<script>
	var viewport = function (){
    var e = window, a = 'inner';
    if (!('innerWidth' in window )) {
        a = 'client';
        e = document.documentElement || document.body;
    }
    return { width : e[ a+'Width' ] , height : e[ a+'Height' ] };
	}
	
	
	
	var selectTab =  function() {
		if(viewport().width<= 600) {
		 $('.navContenutiSeclev h2[data-tab]').bind('click', function(index) {
		    var indexTab = $('.navContenutiSeclev h2[data-tab]').index(this);
		   $('.tabContent').not($(this).next()).hide();
		   $('.navContenutiSeclev h2[data-tab]').not(this).removeClass('on');
		   $('.navContenutiSeclev h2[data-tab]').not(this).find('.fa-chevron-down').show();
		   $('.navContenutiSeclev h2[data-tab]').not(this).find('.fa-chevron-up').hide();
		   if($(this).hasClass('on'))
			{
				$(this).closest('.navContenutiSeclev').find('.tabContent').eq(indexTab).hide();
				$(this).removeClass('on');
				$(this).find('.fa-chevron-down').show();
				$(this).find('.fa-chevron-up').hide();
			}
			else
			{
				$(this).closest('.navContenutiSeclev').find('.tabContent').eq(indexTab).show();
				$(this).addClass('on');
				$(this).find('.fa-chevron-down').hide();
				$(this).find('.fa-chevron-up').show();
			}
			
		 })
	  }
		 else {
			$('.navContenutiSeclev li[data-tab]').bind('click', function(index) {
			var indexTab = $('.navContenutiSeclev li[data-tab]').index(this);
				$('.navContenutiSeclev li[data-tab]').removeClass('on');
				$(this).addClass('on');
				$(this).closest('.navContenutiSeclev').find('.tabContent').hide();
				$(this).closest('.navContenutiSeclev').find('.tabContent').eq(indexTab).show();
			})
		 }
	}
	var replaceHtml = function(fromThis, toThat) {
		$(fromThis).replaceWith(function() {
				var replacement = $('<' + toThat + '>').html($(this).html());
				for (var i = 0; i < this.attributes.length; i++) {
					replacement.attr(this.attributes[i].name, this.attributes[i].value);
				}
				return replacement;
		});
	
		if ($(fromThis).length>0) {
				replace(fromThis, toThat);
			}
	}
	
	
	var resizeTab = function() {
		var tabWrapper =  $('.navContenutiSeclev'),
			tabUl = $('.navContenutiSeclev ul'),
			tabLi = $('.navContenutiSeclev li'),
			tabContent = $('.divtabellacont .tabContent')
			
		if(viewport().width <= 600)
		{
			tabContent.each(function(index) {
				tabLi.eq(index).insertBefore(tabContent.eq(index)); //appendo l'html come accordion
				replaceHtml('.navContenutiSeclev li','h2'); //trasformo l'html sostituendo gli li con gli h2
				if(tabWrapper.find('h2').eq(index).hasClass('on'))
				{
					tabWrapper.find('h2').eq(index).find('.fa-chevron-up').show(); 
					tabWrapper.find('h2').eq(index).find('.fa-chevron-down').hide();
				}
				else
				{
					tabWrapper.find('h2').eq(index).find('.fa-chevron-up').hide(); 
					tabWrapper.find('h2').eq(index).find('.fa-chevron-down').show();
				}
			});
			$('.navContenutiSeclev ul').html('');
		}
		else
		{	
			var accordionTab = $('.divtabellacont h2');
			accordionTab.each(function(index) {
				tabUl.append(accordionTab);
			})
			replaceHtml('.navContenutiSeclev h2','li'); 
			$('.navContenutiSeclev li[data-tab]').find('.fa-chevron-down,.fa-chevron-up').hide(); 
		}
	}
	//resize tabelle
	var addRule = function(sheet, selector, styles) {
    if (sheet.insertRule) return sheet.insertRule(selector + " {" + styles + "}", sheet.cssRules.length);
    if (sheet.addRule) return sheet.addRule(selector, styles);
	};
	var resizeTabelle = function() {
	var TabellaToRes = $('.resizable,.resizableb'),
		elToTitle = $('.elTitle'),
		elToTitleFormInput = '',
		elToTitleTr = '',
		elToTitleTrIn = '',
		elToTitleTrInWr = '',
		elToTitleTdIn = '',
		TrList = $('.resizable').find('tr').not('.titolo,.subtitolo');
		elRow = TabellaToRes.find('.titolo .elRow,.subtitolo .elRow'),
		elRowTo =  TabellaToRes.find('tr').not('.titRespTab');
	
	if(viewport().width <= 600 && $('.resizable').length>0 && $('.added').length==0)
		 
		{
			elToTitle.each(function(index) {
				elToTitleTr = $(this).closest('tr');
				elToTitleFormInput = $(this).siblings('.elTitleForm');
				$(this).removeClass('elTitle').insertBefore(elToTitleTr).wrap( "<tr class='titRespTab'></tr>" ).after(elToTitleFormInput);
			})
			
			/*elRow.each(function(x) {
				label = $(this).html();
				TrList.each(function(y) {
				TabellaToRes.find('tr').not('.titRespTab,.titolo,.subtitolo').eq(y).find('td').not('.hidden,.tdTable').eq(x).prepend('<span class="added">' +label +'</span>');
			  })
			})*/
			elRow.each(function(x) {
				label = $(this).html();
				$('.datiForm').find('td').not('.hidden,inTable').eq(x).prepend('<span class="added">' + label +'</span>');
			 })
			
			
			innerTable = $('.innerTable').find('select.primo').clone();
			innerTable2 = $('.innerTable').find('select.secondo').clone();
			$('.beforeTable').each(function(index) {
				$('.beforeTable').eq(index).after(innerTable2.eq(index));
				$('.beforeTable').eq(index).after(innerTable.eq(index));
				$('.beforeTable').eq(index).siblings('select').wrapAll('<td class="wrapperSelect"></td>')
			})
			$('.beforeTable').prev('td').addClass('txtrFirst');
			
			$('.titleGroup').each(function(index) {
				$(this).clone().addClass('titleGroupAccordion').insertBefore($(this).closest('tr.hidden')); 
			})
			var linkTitleCl = $('.linkTitle').clone();
			$('.linkTitle').closest('.titolo,.subtitolo').next('.titRespTab').append(linkTitleCl.addClass('elTitleForm'));
			
		}
	 else if(viewport().width > 600)
		{
			elToTitleTdIn = $('.titRespTab');
			elToTitleTdIn.each(function(index) {
				elToTitleTrIn = $(this).next('tr');
				elToTitleTrInWr = $(this).find('td').addClass('elTitle').unwrap( "<tr class='titRespTab'></tr>" );
				elToTitleTrIn.prepend(elToTitleTrInWr);
			})
			$()
			$('.elTitleForm').removeClass('elTitle'); 
			$('.added').remove();
			$('.wrapperSelect,.titleGroupAccordion,.linkTitle.elTitleForm').remove();
		}
	}

	
	
	
	$(window).bind('resize',function(){selectTab();resizeTab();resizeTabelle()})
	$(function(){
		resizeTab();
		selectTab();
		resizeTabelle();
	});
	
	
	
	
</script>
<br>
<div class="borderFormRounded margBottomLarge">
	<div class="formGeneric">
		<form>
			<div>
				<span class="nomefield">lorem ipsum dolor</span>
				<div class="row">
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-3">
								<label><input type="radio" value="" name="name1" checked="" onclick="$('#selectCount').attr('disabled','true');$('#noEstero').show();$('#Estero').hide()">Italia</label>
							</div>
							<div class="col-xs-6 col-sm-3">
								<label class="flLeft"><input type="radio" value="" name="name1" onclick="$('#selectCount').removeAttr('disabled');$('#noEstero').hide();$('#Estero').show()"><span class="flLeft">Altri paesi</span><span class="iconahelp flLeft"></span></label>
							</div>
							<div class="col-xs-6">
								<select disabled="" id="selectCount">
									<option>Seleziona paese</option> 
									<optgroup label="Paesi SEPA">
										<option>Lorem ipsum</option>
									</optgroup>
									<optgroup label="Altri paesi">
										<option>Lorem ipsum</option>
									</optgroup>
								</select>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<a href="#" data-tooltip="loren ipsum dolor sit lorem ipum dolor">commissioni per questo tipo di bonifico</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="row">
						<div class="col-xs-10">
							<label class="nomefield">lorem ipsum dolor*</label>
							<select>
								<option>lorem ipsum</option>
								<option>lorem ipsum</option>
							</select>
						</div>
						<div class="col-xs-2">
							<a href="#" class="flRight"><img src="/img/ico1gr_preferito.gif"></a>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<label class="nomefield">lorem ipsum dolor</label>
					<span class="output">lorem ipsum dolor sit </span>
				</div>
			</div>
			
			<div class="row-fluid">
				<div class="span6">
					<div class="row-fluid">
						<div class="span4">
							<label class="nomefield">lorem*</label>
							<input type="text">
						</div>
						<div class="span8" id="noEstero">
							<label class="nomefield">&nbsp;</label>
							<span class="text">EUR</span>
						</div>
						<div class="span8" id="Estero" style="display:none">
							<label class="nomefield">Divisa*</label>
							<select><option>EUR -EURO</option></select>
						</div>
					</div>
				</div>
				<div class="span6">
					<label class="nomefield">lorem ipsum dolor</label>
					<div class="row-fluid">
						<div class="span3">
							<span class="output">1.000.000€</span>
						</div>
						<div class="span9"><a href="#">modifica</a></div>
					</div>
				</div>
			</div>
			<!--
			<div class="row-fluid">
				<div class="span6">
					<div class="row-fluid">
						<div class="span4">
							<label class="nomefield">lorem*</label>
							<input type="text">
						</div>
						<div class="span8">
							<label class="nomefield">lorem ipsum</label>
							<select><option>lorem ipsum</option><option>lorem ipsum</option><option>NOK - CORONA NORVEGESE</option></select>
						</div>
					</div>
				</div>
				<div class="span6">
					<label class="nomefield">lorem ipsum dolor</label>
					<div class="row-fluid">
						<div class="span3">
							<span class="output">1.000.000€</span>
						</div>
						<div class="span9"><a href="#">modifica</a></div>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<label class="nomefield ico">Lorem ipsum*</label>
					<span class="iconahelp" data-tooltip="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim"><img src="/img/ret/ico2or_help2.gif" class="help"></span>
					<div class="row-fluid">
						<div class="span4">
							<input type="text" class="withIco hasDatepicker" id="datepicker" placeholder="gg/mm/aaaa" value="22/11/2013"><img class="ui-datepicker-trigger" src="/img/btn_pickdate_priv.gif" alt="..." title="...">
					    </div>
					</div>
				</div>
				<div class="span6">
					<label class="nomefield">Lorem ipsum dolor</label>
					<span class="output"><a href="#">1.000.000€</a></span>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<label class="nomefield ico">Lorem ipsum*</label>
					<input type="text">
				</div>
			</div>-->
		</form>
	</div>
</div>
<br><br>
<div class="navContenuti outerTab">
	<div class="innerTab">
		<ul>
			<li class="on"><a href="#">lorem ipsum</a></li>
			<li><a href="#">lorem</a></li>
			<li><a href="#">lorem ipsum lorem ipsum</a></li>
			<li><a href="#">lorem ipsum</a></li>
			<li><a href="#">lorem ipsum</a></li>
			<li><a href="#">lorem ipsum</a></li>
			<li><a href="#">lorem ipsum</a></li>
		</ul>
	</div>
	<div class="separator"></div>
</div>
<br><br>
<!--TAB DI SECONDO LIVELLO CONTENUTI-->

<div class="navContenutiSeclev">
	<ul>
		<li data-tab="tabAlert1" class="on"><a href="javascript:;">Tab 1</a><i class="fa fa-chevron-down"></i><i class="fa fa-chevron-up"></i></li>
		<li data-tab="tabAlert2"><a href="javascript:;">Tab 2</a><i class="fa fa-chevron-down"></i><i class="fa fa-chevron-up"></i></li>
		<li data-tab="tabAlert3"><a href="javascript:;">Tab 3</a><i class="fa fa-chevron-down"></i><i class="fa fa-chevron-up"></i></li>
	</ul>
	<div class="separator"></div>
	<div class="divtabellacont">
		<div id="tabAlert1" class="tabContent">
			<div class="tithelp">
			<div class="helpleft">Conto sul quale attivare gli alert</div>	
			<br class="clear">
		</div>
		
			<div class="formCenteredwrapper">
				<form class="formGeneric formCentered" autocomplete="off">
					<div class="row-fluid">
						<div class="span11">
							<label class="nomefield">Conto corrente</label>
							<select class="" size="1" name="accounts" id="accounts" onchange="$('#accounts_star_el').find('span.fa-stack').toggleClass('off')">

		<option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR" accountidtoshow="CC 01077 0000049477 EUR">
				CC 01077 0000049477 EUR
  </option>
		<option value="01099 - 0000081080 - EUR" selected="selected" accountid="01099 - 0000081080 - EUR" accountidtoshow="CC 01099 0000081080 EUR">
				CC 01099 0000081080 EUR
		</option>
	</select>
						</div>
						<div class="span1">
							<a href="javascript:openStarAlert2('01099 - 0000081080 - EUR', 'CC 01099 0000081080 EUR')" title="La stella indica il conto che hai impostato come preferito" class="preferito" id="accounts_star_el" >
							
								<span class="fa-stack fa-2x">
									<i class="fa fa-stack-2x fa-square" alt="Conto preferito"></i>
									<i class="fa fa-stack-1x fa-lg fa-star" alt="Conto preferito"></i>
									<i class="fa fa-stack-1x  fa-star" alt="Conto preferito" id="accounts_star_img"></i>
								</span>
							</a>
						</div>
					</div>
				</form>
			</div>
			<table class="form04 resizable">
				<tr class="titolo hidden"> 
					<td class="txtl top titleGroup">SALDO</td>
					<td class="top">&nbsp;</td>
					<td class="top">&nbsp;</td>
					<td class="top">&nbsp;</td>
					<td class="left elRow" width="70px">Sms 1</td>
					<td class="left elRow" width="">Email <span class="verde">(gratis)</span></td>
					<td class="left elRow" width="">Push <span class="verde">(gratis)</span></td>
				</tr>
				<tr class="datiForm"> 
					<td class="txtr elTitle">Saldo</td>
					<td class="elTitleForm beforeTable" width="120">
						<input id="saldoSendPeriod" name="saldoSendPeriod" type="radio" value="7" onchange="$('#saldoSendDay').removeAttr('disabled');"> settimanale<br>
						<input id="saldoSendPeriod" name="saldoSendPeriod" type="radio" value="1" onchange="$('#saldoSendDay').attr('disabled', true);"> giornaliero
					</td>	
					<td colspan="2" class="hidden">
						<table class="innerTable">
							<tr> 
								<td class="txtr nobordtop hidden">Giorno:</td>
			
								<td class="nobordtop hidden">
								<select id="saldoSendDay" name="saldoSendDay" class="primo">
									<option value="2"> luned&igrave; </option>
									<option value="3"> marted&igrave;</option>
									<option value="4"> mercoled&igrave; </option>
									<option value="5"> gioved&igrave; </option>
									<option value="6"> venerdì </option>
									<option value="7"> sabato </option>
									<option value="1"> domenica </option>
								</select></td>
								<td class="txtr nobordtop hidden">Orario:</td>
								<td class="nobordtop hidden"><select id="saldoSendHour" name="saldoSendHour" class="secondo">
									<option value="6"> 6:00 </option>
									<option value="7"> 7:00 </option>
									<option value="8"> 8:00 </option>
									<option value="9"> 9:00 </option>
									<option value="10"> 10:00 </option>
									<option value="11"> 11:00 </option>
									<option value="12"> 12:00 </option>
									<option value="13"> 13:00 </option>
									<option value="14"> 14:00 </option>
									<option value="15"> 15:00 </option>
									<option value="16"> 16:00 </option>
									<option value="17"> 17:00 </option>
									<option value="18"> 18:00 </option>
									<option value="19"> 19:00 </option>
									<option value="20"> 20:00 </option>
									<option value="21"> 21:00 </option>
									<option value="22"> 22:00 </option>
								</select></td>
							</tr>
						</table>
					</td>
					<td class="left">
						<input id="saldoID" name="saldoID" type="hidden" value="0"> 
						<input id="saldoIsActiveSms" name="saldoIsActiveSms" type="checkbox" class="nobor3">
						<span class="bk">0,25 &euro;</span>
						<br class="clear">
					</td>
					<td class="center">
						<input id="saldoIsActiveEmail" name="saldoIsActiveEmail" type="checkbox">
					</td>
					<td class="center">
						<input id="saldoIsActivePush" name="saldoIsActivePush" type="checkbox">
					</td>
				</tr>
				<tr class="bianco"> 
					<td colspan="3" class="txtl elTitle">Saldo contabile negativo</td>
					<td class="hidden">&nbsp;</td>
					<td class="left">
						<input id="saldoContabileNegativoID" name="saldoContabileNegativoID" type="hidden" value="11433013">
						<input id="saldoContabileNegativoIsActiveSms" type="checkbox" name="saldoContabileNegativoIsActiveSms" class="nobor3">
						<span class="bk">Gratis</span>
						<br class="clear">
					</td>
					<td class="center">
						<input id="saldoContabileNegativoIsActiveEmail" name="saldoContabileNegativoIsActiveEmail" type="checkbox">
					</td>
					<td class="center">
						<input id="saldoContabileNegativoIsActivePush" name="saldoContabileNegativoIsActivePush" type="checkbox">
					</td>
				</tr>
				<tr> 
					<td colspan="3" class="txtl elTitle">Saldo contabile inferiore a</td>
					<td class="elTitleForm"><input id="saldoContabileThreshold" name="saldoContabileThreshold" type="text" class="importo">,00&euro;</td>
					
					<td class="left">
						<input id="saldoContabileThresholdID" name="saldoContabileThresholdID" type="hidden" value="0">
						<input id="saldoContabileThresholdIsActiveSms" class="nobor3" name="saldoContabileThresholdIsActiveSms" type="checkbox"> 
						<span class="bk">0,25 &euro;</span>
						<br class="clear">
					</td>
					<td class="center">
						<span class="disabled">Disponibile a breve</span>
					</td>
					<td class="center">
						<input id="saldoContabileThresholdIsActivePush" name="saldoContabileThresholdIsActivePush" type="checkbox">
					</td>
				</tr>	
				<tr class="bianco"> 
					<td colspan="3" class="txtl elTitle">Saldo disponibile negativo</td>
					<td class="hidden">&nbsp;</td>
					<td class="left">
						<input id="margineUtilizzabileNegativoID" name="margineUtilizzabileNegativoID" type="hidden" value="0">
						<input id="margineUtilizzabileNegativoIsActiveSms" class="nobor3" name="margineUtilizzabileNegativoIsActiveSms" type="checkbox">
						<span class="bk">Gratis</span>
						<br class="clear">
					</td>
					<td class="center">
						<input id="margineUtilizzabileNegativoIsActiveEmail" name="margineUtilizzabileNegativoIsActiveEmail" type="checkbox">
					</td>
					<td class="center">
						<input id="margineUtilizzabileNegativoIsActivePush" name="margineUtilizzabileNegativoIsActivePush" type="checkbox">
					</td>
				</tr>
				<tr> 
					<td colspan="3" class="txtl elTitle">Saldo disponibile inferiore a </td>
					<td class="elTitleForm"><input id="margineUtilizzabileThreshold" name="margineUtilizzabileThreshold" type="text" class="importo">,00&euro;</td>
					<td class="left">
						<input id="margineUtilizzabileThresholdID" name="margineUtilizzabileThresholdID" type="hidden" value="0">
						<input id="margineUtilizzabileThresholdIsActiveSms" class="nobor3" name="margineUtilizzabileThresholdIsActiveSms" type="checkbox"> 
						<span class="bk">0,25 &euro;</span>
						<br class="clear">
					</td>
					<td class="center">
						<input id="margineUtilizzabileThresholdIsActiveEmail" name="margineUtilizzabileThresholdIsActiveEmail" type="checkbox">
					</td>
					<td class="center">
						<input id="margineUtilizzabileThresholdIsActivePush" name="margineUtilizzabileThresholdIsActivePush" type="checkbox">
					</td>
				</tr>
				<tr class="bianco">
					<td colspan="3" class="txtl elTitle" ><span><span class="txthelp" data-tooltip="Un alert ti avvisa quando la tua utenza è stata">Blocco utente</span> </span></td>
					<td class="elTitleForm"><input id="margineUtilizzabileThreshold" name="margineUtilizzabileThreshold" type="text" class="importo">,00&euro;</td>
					<td class="left">
						<input id="margineUtilizzabileThresholdID" name="margineUtilizzabileThresholdID" type="hidden" value="0">
						<input id="margineUtilizzabileThresholdIsActiveSms" class="nobor3" name="margineUtilizzabileThresholdIsActiveSms" type="checkbox"> 
						<span class="bk">0,25 &euro;</span>
						<br class="clear">
					</td>
					<td class="center">
						<input id="margineUtilizzabileThresholdIsActiveEmail" name="margineUtilizzabileThresholdIsActiveEmail" type="checkbox">
					</td>
					<td class="center">
						<input id="margineUtilizzabileThresholdIsActivePush" name="margineUtilizzabileThresholdIsActivePush" type="checkbox">
					</td>
				</tr>
				
				<tr class="titolo hidden"> 
					<td class="txtl titleGroup" colspan="3">ACCREDITI/ADDEBITI</td>
					<td> </td>
					<td class="left2 elRow">Sms 2</td>
					<td class="left2 elRow">Email <span class="verde">(gratis)</span></td>
					<td class="left elRow" width="">Push <span class="verde">(gratis)</span></td>
				</tr>
				<tr class="bianco datiForm"> 
					<td colspan="3" class="txtl elTitle">Accredito stipendio</td>
					<td class="hidden">&nbsp;</td>
					<td class="left">
						<input id="accreditoStipendioID" name="accreditoStipendioID" type="hidden" value="0">
						<input id="accreditoStipendioIsActiveSms" class="nobor3" name="accreditoStipendioIsActiveSms" type="checkbox">
						<span class="bk">0,25 &euro;</span>
						<br class="clear">
					</td>
					<td class="center">
						<input id="accreditoStipendioIsActiveEmail" name="accreditoStipendioIsActiveEmail" type="checkbox">
					</td>
					<td class="center">
						<input id="accreditoStipendioIsActivePush" name="accreditoStipendioIsActivePush" type="checkbox">
					</td>
				</tr>
				<tr> 
					<td colspan="3" class="txtl elTitle">Accrediti superiori a </td>
					<td class="elTitleForm"><input id="accreditiSuperioriThreshold" name="accreditiSuperioriThreshold" type="text" class="importo">,00&euro;</td>
					<td class="left">
						<input id="accreditiSuperioriThresholdID" name="accreditiSuperioriThresholdID" type="hidden" value="0">
						<input id="accreditiSuperioriThresholdIsActiveSms" name="accreditiSuperioriThresholdIsActiveSms" type="checkbox" onchange="if (this.checked){ checkForConflicts(16, $('#accounts')[0].options[$('#accounts').selectedIndex].val()); };">
						<span class="bk">0,25 &euro;</span>
						<br class="clear">
					</td>
					<td class="center">
						<input id="accreditiSuperioriThresholdIsActiveEmail" name="accreditiSuperioriThresholdIsActiveEmail" type="checkbox">
					</td>
					<td class="center">
						<input id="accreditiSuperioriThresholdIsActivePush" name="accreditiSuperioriThresholdIsActivePush" type="checkbox">
					</td>
				</tr>
				<tr class="bianco"> 
					<td colspan="3" class="txtl elTitle">Addebiti superiori a </td>
					<td class="elTitleForm"><input id="addebitiSuperioriThreshold" name="addebitiSuperioriThreshold" type="text" class="importo">,00&euro;</td>
					<td class="left">
						<input id="addebitiSuperioriThresholdID" name="addebitiSuperioriThresholdID" type="hidden" value="0">
						<input id="addebitiSuperioriThresholdIsActiveSms" name="addebitiSuperioriThresholdIsActiveSms" class="nobor3" type="checkbox" onchange="if (this.checked){ checkForConflicts(17, $('#accounts')[0].options[$('#accounts').selectedIndex].val()); };">
						<span class="bk">0,25 &euro;</span>
						<br class="clear">
					</td>
					<td class="center">
						
						<input id="addebitiSuperioriThresholdIsActiveEmail" name="addebitiSuperioriThresholdIsActiveEmail" type="checkbox">
					</td>
					<td class="center">
						<input id="addebitiSuperioriThresholdIsActivePush" name="addebitiSuperioriThresholdIsActivePush" type="checkbox">
					</td>
				</tr>
				<tr> 
					<td colspan="3" class="txtl elTitle">Addebiti direct debit </td>
					<td class="hidden">&nbsp;</td>
					<td class="left">
						<input id="addebitiSddID" name="addebitiSddID" type="hidden" value="0">
						<input id="addebitiSddIsActiveSms" name="addebitiSddIsActiveSms" class="nobor3" type="checkbox" onchange="if (this.checked){ checkForConflicts(65, $('#accounts')[0].options[$('#accounts').selectedIndex].val()); };">
						<span class="bk">0,25 &euro;</span>
						<br class="clear">
					</td>
					<td class="center">
						<input id="addebitiSddIsActiveEmail" name="addebitiSddIsActiveEmail" type="checkbox">
					</td>
					<td class="center">
						<input id="addebitiSddIsActivePush" name="addebitiSddIsActivePush" type="checkbox">
					</td>
				</tr>
				<tr class="titolo classf24 hidden"> 
					<td class="txtl titleGroup" colspan="3">F24 <span>(Questi alert si attivano automaticamente su tutti i conti correnti)</span></td>
					<td> </td>
					<td class="left2 elRow">Sms 3</td>
					<td class="left2 elRow">Email <span class="verde">(gratis)</span></td>
					<td class="left elRow" width="">Push <span class="verde">(gratis)</span></td>
				</tr>
				<tr class="classf24 datiForm"> 
					<td colspan="3" class="txtl elTitle">Prenotazione F24</td>
					<td class="hidden">&nbsp;</td>
					<td class="left">
						<input id="prenotazioneF24ID" name="prenotazioneF24ID" type="hidden" value="10617511">
						<input id="prenotazioneF24IsActiveSms" class="nobor3" name="prenotazioneF24IsActiveSms" type="checkbox">
						<span class="bk">Gratis</span>
						<br class="clear">
					</td>
					<td class="center">
						<input id="prenotazioneF24IsActiveEmail" name="prenotazioneF24IsActiveEmail" type="checkbox">
					</td>
					<td class="center">
						<input id="prenotazioneF24IsActivePush" name="prenotazioneF24IsActivePush" type="checkbox">
					</td>
				</tr>
				<tr class="bianco classf24">  
					<td colspan="3" class="txtl elTitle">Annullamento F24</td>
					<td class="hidden">&nbsp;</td>
					<td class="left">
						<input id="annullamentoF24ID" name="annullamentoF24ID" type="hidden" value="10677254">
						<input id="annullamentoF24IsActiveSms" class="nobor3" name="annullamentoF24IsActiveSms" type="checkbox">
						<span class="bk">0,25 &euro;</span>
						<br class="clear">
					</td>
					<td class="center">
						<input id="annullamentoF24IsActiveEmail" name="annullamentoF24IsActiveEmail" type="checkbox">
					</td>
					<td class="center">
						<input id="annullamentoF24IsActivePush" name="annullamentoF24IsActivePush" type="checkbox">
					</td>
				</tr>
				<tr class="classf24"> 
					<td colspan="3" class="txtl elTitle">F24 eseguito/non eseguito</td>
					<td class="hidden">&nbsp;</td>
					<td class="left">
						<input id="eseguitoNonEseguitoF24ID" name="eseguitoNonEseguitoF24ID" type="hidden" value="10641396">
						<input id="eseguitoNonEseguitoF24IsActiveSms" class="nobor3" name="eseguitoNonEseguitoF24IsActiveSms" type="checkbox">
						<span class="bk">0,25 &euro;</span>
						<br class="clear">
					</td>
					<td class="center">
						<input id="eseguitoNonEseguitoF24IsActiveEmail" name="eseguitoNonEseguitoF24IsActiveEmail" type="checkbox">
					</td>
					<td class="center">
						<input id="eseguitoNonEseguitoF24IsActivePush" name="eseguitoNonEseguitoF24IsActivePush" type="checkbox">
					</td>
				</tr>
				<tr class="titolo classf24 hidden"> 
					<td class="txtl titleGroup" colspan="3">F23 <span>(Questi alert si attivano automaticamente su tutti i conti correnti)</span></td>
					<td> </td>
					<td class="left2 elRow">Sms 4</td>
					<td class="left2 elRow">Email <span class="verde">(gratis)</span></td>
					<td class="left elRow" width="">Push <span class="verde">(gratis)</span></td>
				</tr>
				<tr class="classf24 datiForm"> 
					<td colspan="3" class="txtl elTitle">Prenotazione F23</td>
					<td class="hidden">&nbsp;</td>
					<td class="left">
						<input id="prenotazioneF23ID" name="prenotazioneF23ID" type="hidden" value="0">
						<input id="prenotazioneF23IsActiveSms" class="nobor3" name="prenotazioneF23IsActiveSms" type="checkbox">
						<span class="bk">Gratis</span>
						<br class="clear">
					</td>
					<td class="center">
						<input id="prenotazioneF23IsActiveEmail" name="prenotazioneF23IsActiveEmail" type="checkbox">
					</td>
				
					<td class="center">
					
						<input id="prenotazioneF23IsActivePush" name="prenotazioneF23IsActivePush" type="checkbox">
					
					</td>
					
				</tr>
				
				<tr class="bianco classf24">  
					<td colspan="3" class="txtl elTitle">Annullamento F23</td>
					<td class="hidden">&nbsp;</td>
					<td class="left">
						<input id="annullamentoF23ID" name="annullamentoF23ID" type="hidden" value="0">
						<input id="annullamentoF23IsActiveSms" class="nobor3" name="annullamentoF23IsActiveSms" type="checkbox">
						<span class="bk">0,25 &euro;</span>
						<br class="clear">
					</td>
					<td class="center">
						<input id="annullamentoF23IsActiveEmail" name="annullamentoF23IsActiveEmail" type="checkbox">
					</td>
					<td class="center">
						<input id="annullamentoF23IsActivePush" name="annullamentoF23IsActivePush" type="checkbox">
					</td>
				</tr>
				
				<tr class="classf24"> 
					<td colspan="3" class="txtl elTitle">F23 eseguito/non eseguito</td>
					<td class="hidden">&nbsp;</td>
					<td class="left">
						<input id="eseguitoNonEseguitoF23ID" name="eseguitoNonEseguitoF23ID" type="hidden" value="0">
						<input id="eseguitoNonEseguitoF23IsActiveSms" class="nobor3" name="eseguitoNonEseguitoF23IsActiveSms" type="checkbox">
						<span class="bk">0,25 &euro;</span>
						<br class="clear">
					</td>
					<td class="center">
						<input id="eseguitoNonEseguitoF23IsActiveEmail" name="eseguitoNonEseguitoF23IsActiveEmail" type="checkbox">
					</td>
					<td class="center">
						<input id="eseguitoNonEseguitoF23IsActivePush" name="eseguitoNonEseguitoF23IsActivePush" type="checkbox">
					</td>
					
				</tr>
			</table>
			<div class="aButtonconsRight">
				<span class="btnc"><a class="aButton" href="javascript:;" id="demoSetErrorBtn"><span>lorem ipsum</span></a></span>
			</div>
		</div>
		<div id="tabAlert2" style="display:none" class="tabContent">
		<table class="form04 resizable">
				<tr class="titolo hidden"> 
					<td class="txtl titleGroup" colspan="3">NOTIFICHE ORDINI</td>
					<td> </td>
					<td class="left2 elRow">Sms 5</td>
					<td class="left2 elRow">Email <span class="verde">(gratis)</span></td>
				</tr>
				<tr class="datiForm"> 
					<td colspan="3" class="txtl elTitle">Notifica ordini inseriti</td>
					<td class="hidden">&nbsp;</td>
					<td class="left">
						<input id="inseritiID" name="inseritiID" type="hidden" value="0">
						<span class="disabled">Non disponibile</span>
						<br class="clear">
					</td>
					<td class="center">
						<input id="inseritiIsActiveEmail" name="inseritiIsActiveEmail" type="checkbox">
					</td>
				</tr>
				<tr class="titolo hidden"> 
					<td class="txtl titleGroup" colspan="3">CONTROVALORE PORTAFOGLIO</td>
					<td> </td>
					<td class="left2 elRow">Sms 6</td>
					<td class="left2 elRow">Email <span class="verde">(gratis)</span></td>
				</tr>	
				<tr class="datiForm"> 
					<td class="txtr elTitle">Saldo</td>
					<td class="elTitleForm beforeTable" width="120">
						<input id="controvaloreSendPeriod" name="controvaloreSendPeriod" type="radio" value="7" onchange="Field.enable('controvaloreSendDay');"> settimanale<br>
						<input id="controvaloreSendPeriod" name="controvaloreSendPeriod" type="radio" value="1" onchange="Field.disable('controvaloreSendDay');"> giornaliero
					</td>	
						<td colspan="2" class="hidden">
							<table class="innerTable">
								<tbody><tr> 
									<td class="txtr nobordtop hidden">Giorno:</td>
				
									<td class="nobordtop inTable">
									<select id="controvaloreSendDay" name="controvaloreSendDay" class="primo">
										<option value="2"> luned&igrave; </option>
										<option value="3"> marted&igrave; </option>
										<option value="4"> mercoled&igrave; </option>
										<option value="5"> gioved&igrave; </option>
										<option value="6"> venerd&igrave; </option>
										<option value="7"> sabato </option>
										<option value="1"> domenica </option>
									</select></td>
									<td class="txtr nobordtop hidden">Orario:</td>
									<td class="nobordtop inTable">
									 <select id="controvaloreSendHour" name="controvaloreSendHour" class="secondo">
										<option value="8"> 8:00 </option>
										<option value="9"> 9:00 </option>
										<option value="10"> 10:00 </option>
										<option value="11"> 11:00 </option>
										<option value="12"> 12:00 </option>
										<option value="13"> 13:00 </option>
										<option value="14"> 14:00 </option>
										<option value="15"> 15:00 </option>
										<option value="16"> 16:00 </option>
										<option value="17"> 17:00 </option>
										<option value="18"> 18:00 </option>
										<option value="19"> 19:00 </option>
										<option value="20"> 20:00 </option>
										<option value="21"> 21:00 </option>
										<option value="22"> 22:00 </option>
									</select></td>
								</tr>
						</tbody></table>
						</td>
						<td class="left">
							<input id="controvaloreID" name="controvaloreID" type="hidden" value="0"> 
							<input id="controvaloreIsActiveSms" name="controvaloreIsActiveSms" type="checkbox" class="nobor3">
							<span class="bk">0,25 &euro;</span>
							<br class="clear">
						</td>
						<td class="center">
							<input id="controvaloreIsActiveEmail" name="controvaloreIsActiveEmail" type="checkbox">
						</td>
				</tr>
				<tr class="titolo hidden"> 
					<td class="txtl titleGroup" colspan="3">ALERT DI MERCATO <span class="datpic">(Questi alert si attivano automaticamente su tutti i depositi titoli)</span></td>
					<td class="linkTitle">
						<a title="vedi alert di mercato attivi" class="btnevid1" href="/webankpri/wbOnetoone/2l/do/wbOnetoone/sms/avvisiMercato/smsAlertAttivi.do?OBSCNT=FNZ_NAV&amp;tabId=nav_priv_wbx_trading_wt&amp;OBSKEY=nav_priv_wbx_alert%20attivi_wt">
						<span>VEDI ALERT DI MERCATO ATTIVI</span></a>
					</td>
					<td class="left2 elRow">Sms 7</td>
					<td class="left2 elRow">E-mail 7 <span class="verde">(gratis)</span></td>
				</tr>
				<tr class="datiForm">  
					<td colspan="3" class="txtl elTitle">Notifica alert di mercato</td>
					<td class="hidden">&nbsp;</td>
					<td class="left">
						<input id="alertMercatoID" name="alertMercatoID" type="hidden" value="0">
						<input id="alertMercatoIsActiveSms" class="nobor3" name="alertMercatoIsActiveSms" type="checkbox">
						<span class="bk">0,15 &euro;</span>
						<br class="clear">
					</td>
					<td class="center">
						<input id="alertMercatoIsActiveEmail" name="alertMercatoIsActiveEmail" type="checkbox">
					</td>
				</tr>
			</table>
		</div>
		<div id="tabAlert3" style="display:none" class="tabContent">
			tab3
		</div>
	</div>
</div>
<br></br>
<!--<table class="form04 resizable">
		<tr class="titolo">
			<td class="txtl top" colspan="4">CONTO</td>
			<td class="right top nobord"><a title="Modifica" href="javascript:callJSP('/wbOnetoone/2l/do/wbOnetoone/sms/alertAutomatici.do',null,'&OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_myhome&OBSKEY=nav_priv_wbx_imposta_alert&tab=1');"><span>Modifica alert</span> <img alt="Modifica" src="/img/ret/ico1gr_modifica.gif"></a></td>
		</tr>
		<tr class="subtitolo hidden">
			<td class="left nobord titleGroup"> SALDO</td>
			<td class="center nobord elRow">Sms sono io</td>
			<td class="center nobord elRow">Email</td>
			<td class="center nobord elRow">Push</td>
			<td class="left nobord elRow">Conto corrente</td>
		</tr>
		<tr class="bianco">
			<td width="350" class="txt2 elTitle">Saldo contabile negativo</td>
			<td class="txt2 center nobord">
				<img alt="" src="/wscmn/img/ico2inf_ok.gif"></td>
				<td class="txt2 center nobord"><img alt="" src="/wscmn/img/ico2inf_ko.gif"></td>
				<td class="txt2 center nobord"><img alt="" src="/wscmn/img/ico2inf_ko.gif"></td>
				<td width="200" class="txt2 left"><strong>CC 01099 0000081080 EUR</strong></td>
		</tr>
</table>-->
<br>
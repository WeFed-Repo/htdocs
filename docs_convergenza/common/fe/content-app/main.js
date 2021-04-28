(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["main"],{

/***/ "+liS":
/*!************************************************************!*\
  !*** ./src/app/content-app/components/form/form.module.ts ***!
  \************************************************************/
/*! exports provided: Form */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "Form", function() { return Form; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "fXoL");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/common */ "ofXK");
/* harmony import */ var _select_select_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./select/select.component */ "Xn7H");


// Componenti del form


var Form = /** @class */ (function () {
    function Form() {
    }
    Form.ɵmod = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdefineNgModule"]({ type: Form });
    Form.ɵinj = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdefineInjector"]({ factory: function Form_Factory(t) { return new (t || Form)(); }, imports: [[
                _angular_common__WEBPACK_IMPORTED_MODULE_1__["CommonModule"]
            ]] });
    return Form;
}());

(function () { (typeof ngJitMode === "undefined" || ngJitMode) && _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵsetNgModuleScope"](Form, { declarations: [_select_select_component__WEBPACK_IMPORTED_MODULE_2__["Select"]], imports: [_angular_common__WEBPACK_IMPORTED_MODULE_1__["CommonModule"]], exports: [_select_select_component__WEBPACK_IMPORTED_MODULE_2__["Select"]] }); })();
/*@__PURE__*/ (function () { _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵsetClassMetadata"](Form, [{
        type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["NgModule"],
        args: [{
                imports: [
                    _angular_common__WEBPACK_IMPORTED_MODULE_1__["CommonModule"]
                ],
                declarations: [
                    _select_select_component__WEBPACK_IMPORTED_MODULE_2__["Select"]
                ],
                exports: [
                    _select_select_component__WEBPACK_IMPORTED_MODULE_2__["Select"]
                ]
            }]
    }], null, null); })();


/***/ }),

/***/ 0:
/*!***************************!*\
  !*** multi ./src/main.ts ***!
  \***************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! D:\WeFed-Repo\htdocs\content-app\src\main.ts */"zUnb");


/***/ }),

/***/ "5vyl":
/*!************************************************!*\
  !*** ./src/app/content-app/core/globalVars.js ***!
  \************************************************/
/*! exports provided: GlobalVars */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "GlobalVars", function() { return GlobalVars; });
// Inizializzazione funzionale "locale"
var ambiente = function () {
  var ambiente = "local";
  if (location.href.indexOf("wefed.local") > 0 || location.href.indexOf("webank.local") > 0) ambiente = "lib";
  return ambiente;
}();

var GlobalVars = {
  amb: ambiente,
  apibaseurl: {
    "local": "/assets/json",
    "lib": "/common/fe/content-app/assets/json",
    "prod": "/pathdiproduzione"
  }[ambiente]
};

/***/ }),

/***/ "6rt4":
/*!******************************************************************!*\
  !*** ./src/app/content-app/components/tabs/tab/tab.component.ts ***!
  \******************************************************************/
/*! exports provided: TabComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "TabComponent", function() { return TabComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "fXoL");


var _c0 = ["*"];
var TabComponent = /** @class */ (function () {
    function TabComponent() {
        this.active = false;
    }
    TabComponent.prototype.ngOnInit = function () {
    };
    TabComponent.ɵfac = function TabComponent_Factory(t) { return new (t || TabComponent)(); };
    TabComponent.ɵcmp = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdefineComponent"]({ type: TabComponent, selectors: [["tab"]], inputs: { tabTitle: "tabTitle", active: "active" }, ngContentSelectors: _c0, decls: 2, vars: 1, consts: [["role", "tablist", 1, "panel-group", "panel-fill", 3, "hidden"]], template: function TabComponent_Template(rf, ctx) { if (rf & 1) {
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵprojectionDef"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "div", 0);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵprojection"](1);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
        } if (rf & 2) {
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("hidden", !ctx.active);
        } }, encapsulation: 2 });
    return TabComponent;
}());

/*@__PURE__*/ (function () { _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵsetClassMetadata"](TabComponent, [{
        type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"],
        args: [{
                selector: 'tab',
                templateUrl: './tab.component.html'
            }]
    }], function () { return []; }, { tabTitle: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"]
        }], active: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"]
        }] }); })();


/***/ }),

/***/ "AytR":
/*!*****************************************!*\
  !*** ./src/environments/environment.ts ***!
  \*****************************************/
/*! exports provided: environment */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "environment", function() { return environment; });
// This file can be replaced during build by using the `fileReplacements` array.
// `ng build --prod` replaces `environment.ts` with `environment.prod.ts`.
// The list of file replacements can be found in `angular.json`.
var environment = {
    production: false
};
/*
 * For easier debugging in development mode, you can import the following file
 * to ignore zone related error stack frames such as `zone.run`, `zoneDelegate.invokeTask`.
 *
 * This import should be commented out in production mode because it will have a negative impact
 * on performance if an error is thrown.
 */
// import 'zone.js/dist/zone-error';  // Included with Angular CLI.


/***/ }),

/***/ "E75U":
/*!**************************************************************!*\
  !*** ./src/app/content-app/pages/pmodello/pmodello.model.ts ***!
  \**************************************************************/
/*! exports provided: Pmodello */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "Pmodello", function() { return Pmodello; });
var Pmodello = /** @class */ (function () {
    function Pmodello(description, active, pintro, dataFromService) {
        this.description = description;
        this.active = active;
        this.pintro = pintro;
        this.dataFromService = dataFromService;
    }
    return Pmodello;
}());



/***/ }),

/***/ "GqBo":
/*!*********************************************************************!*\
  !*** ./src/app/content-app/components/boxLink/boxLink.component.ts ***!
  \*********************************************************************/
/*! exports provided: BoxLinkComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "BoxLinkComponent", function() { return BoxLinkComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "fXoL");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/common */ "ofXK");



function BoxLinkComponent_h3_1_Template(rf, ctx) { if (rf & 1) {
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "h3", 3);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](1);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
} if (rf & 2) {
    var ctx_r0 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵnextContext"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](1);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtextInterpolate"](ctx_r0.titleBox);
} }
var BoxLinkComponent = /** @class */ (function () {
    function BoxLinkComponent() {
    }
    // Inizializzazione
    BoxLinkComponent.prototype.ngOnInit = function () {
    };
    BoxLinkComponent.ɵfac = function BoxLinkComponent_Factory(t) { return new (t || BoxLinkComponent)(); };
    BoxLinkComponent.ɵcmp = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdefineComponent"]({ type: BoxLinkComponent, selectors: [["box-link"]], inputs: { titleBox: "titleBox", textBox: "textBox", linkBox: "linkBox", gotoBox: "gotoBox", backgroundBox: "backgroundBox" }, decls: 6, vars: 5, consts: [[3, "ngClass"], ["class", "titleSection titleForm noMargin", 4, "ngIf"], [1, "noMargin"], [1, "titleSection", "titleForm", "noMargin"]], template: function BoxLinkComponent_Template(rf, ctx) { if (rf & 1) {
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "div", 0);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](1, BoxLinkComponent_h3_1_Template, 2, 1, "h3", 1);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](2, "p", 2);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](3);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](4, "a");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](5);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
        } if (rf & 2) {
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngClass", ctx.backgroundBox === true ? "borderFormRounded boxEvident" : "borderFormRounded");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](1);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngIf", ctx.titleBox);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](2);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtextInterpolate"](ctx.textBox);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](1);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵattribute"]("href", ctx.gotoBox, _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵsanitizeUrl"]);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](1);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtextInterpolate"](ctx.linkBox);
        } }, directives: [_angular_common__WEBPACK_IMPORTED_MODULE_1__["NgClass"], _angular_common__WEBPACK_IMPORTED_MODULE_1__["NgIf"]], encapsulation: 2 });
    return BoxLinkComponent;
}());

/*@__PURE__*/ (function () { _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵsetClassMetadata"](BoxLinkComponent, [{
        type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"],
        args: [{
                selector: 'box-link',
                templateUrl: './boxLink.component.html'
            }]
    }], function () { return []; }, { titleBox: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"]
        }], textBox: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"]
        }], linkBox: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"]
        }], gotoBox: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"]
        }], backgroundBox: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"]
        }] }); })();


/***/ }),

/***/ "UXNY":
/*!******************************************************!*\
  !*** ./src/app/content-app/content-app.component.ts ***!
  \******************************************************/
/*! exports provided: ContentAppComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ContentAppComponent", function() { return ContentAppComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "fXoL");
/* harmony import */ var _pages_pmodello_carrello_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./pages/pmodello/carrello.service */ "lM4W");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "ofXK");
/* harmony import */ var _pages_pmodello_carrello_carrello_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./pages/pmodello/carrello/carrello.component */ "vklR");
/* harmony import */ var _pages_overview_overview_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./pages/overview/overview.component */ "xbXj");
/* harmony import */ var _pages_topselection_topselection_component__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./pages/topselection/topselection.component */ "bUez");
/* harmony import */ var _pages_pmodello_pmodello_component__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./pages/pmodello/pmodello.component */ "gemC");








function ContentAppComponent_carrello_14_Template(rf, ctx) { if (rf & 1) {
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](0, "carrello");
} }
function ContentAppComponent_overview_16_Template(rf, ctx) { if (rf & 1) {
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](0, "overview", 9);
} if (rf & 2) {
    var ctx_r1 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵnextContext"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("navto", ctx_r1.naviga)("setloading", ctx_r1.setloading);
} }
function ContentAppComponent_top_selection_17_Template(rf, ctx) { if (rf & 1) {
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](0, "top-selection", 10);
} if (rf & 2) {
    var ctx_r2 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵnextContext"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("setloading", ctx_r2.setloading);
} }
function ContentAppComponent_pmodello_18_Template(rf, ctx) { if (rf & 1) {
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](0, "pmodello", 10);
} if (rf & 2) {
    var ctx_r3 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵnextContext"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("setloading", ctx_r3.setloading);
} }
var _c0 = function (a0) { return { "selected": a0 }; };
var ContentAppComponent = /** @class */ (function () {
    function ContentAppComponent(carrelloService) {
        var _this = this;
        this.carrelloService = carrelloService;
        // Contenuto di default
        this.contenuto = "overview";
        // Funzioni locali
        this.naviga = function (cont) {
            _this.contenuto = cont;
        };
        this.setloading = function (state) {
            state = (typeof state !== "undefined" && state === false) ? false : true;
            _this.loadingclass = (state) ? "loading" : "";
            return (state);
        };
        // Variabili "stato"
        this.loadingclass = "loading";
    }
    // Inizializzazione
    ContentAppComponent.prototype.ngOnInit = function () {
        this.naviga(this.contenuto);
        this.setloading(false);
        this.carrelloService.isCarrelloVisible;
    };
    ContentAppComponent.ɵfac = function ContentAppComponent_Factory(t) { return new (t || ContentAppComponent)(_angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdirectiveInject"](_pages_pmodello_carrello_service__WEBPACK_IMPORTED_MODULE_1__["CarrelloService"])); };
    ContentAppComponent.ɵcmp = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdefineComponent"]({ type: ContentAppComponent, selectors: [["content-app"]], inputs: { contenuto: "contenuto" }, decls: 19, vars: 16, consts: [["id", "leftmenu", 1, "col-sm-12", "col-md-2"], [3, "ngClass"], ["title", "Overview", 3, "click"], ["title", "Top Selection", 3, "click"], ["title", "Portafoglio modello", 3, "click"], [4, "ngIf"], ["id", "contenuti", 1, "contenuti", "col-sm-12", "col-md-10"], [3, "navto", "setloading", 4, "ngIf"], [3, "setloading", 4, "ngIf"], [3, "navto", "setloading"], [3, "setloading"]], template: function ContentAppComponent_Template(rf, ctx) { if (rf & 1) {
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "div");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](1, "div", 0);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](2, "h2");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](3, "Soluzioni guidate");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](4, "ul");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](5, "li", 1);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](6, "a", 2);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵlistener"]("click", function ContentAppComponent_Template_a_click_6_listener() { return ctx.naviga("overview"); });
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](7, "Overview");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](8, "li", 1);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](9, "a", 3);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵlistener"]("click", function ContentAppComponent_Template_a_click_9_listener() { return ctx.naviga("topselection"); });
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](10, "Top Selection");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](11, "li", 1);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](12, "a", 4);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵlistener"]("click", function ContentAppComponent_Template_a_click_12_listener() { return ctx.naviga("pmodello"); });
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](13, "Portafoglio modello");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](14, ContentAppComponent_carrello_14_Template, 1, 0, "carrello", 5);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](15, "div", 6);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](16, ContentAppComponent_overview_16_Template, 1, 2, "overview", 7);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](17, ContentAppComponent_top_selection_17_Template, 1, 1, "top-selection", 8);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](18, ContentAppComponent_pmodello_18_Template, 1, 1, "pmodello", 8);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
        } if (rf & 2) {
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵclassMapInterpolate1"]("content-app ", ctx.loadingclass, "");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](5);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngClass", _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵpureFunction1"](10, _c0, ctx.contenuto === "overview"));
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](3);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngClass", _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵpureFunction1"](12, _c0, ctx.contenuto === "topselection"));
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](3);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngClass", _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵpureFunction1"](14, _c0, ctx.contenuto === "pmodello"));
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](3);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngIf", ctx.carrelloService.isCarrelloVisible);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](2);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngIf", ctx.contenuto === "overview");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](1);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngIf", ctx.contenuto === "topselection");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](1);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngIf", ctx.contenuto === "pmodello");
        } }, directives: [_angular_common__WEBPACK_IMPORTED_MODULE_2__["NgClass"], _angular_common__WEBPACK_IMPORTED_MODULE_2__["NgIf"], _pages_pmodello_carrello_carrello_component__WEBPACK_IMPORTED_MODULE_3__["Carrello"], _pages_overview_overview_component__WEBPACK_IMPORTED_MODULE_4__["Overview"], _pages_topselection_topselection_component__WEBPACK_IMPORTED_MODULE_5__["TopSelection"], _pages_pmodello_pmodello_component__WEBPACK_IMPORTED_MODULE_6__["PModello"]], styles: ["\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJjb250ZW50LWFwcC5jb21wb25lbnQuY3NzIn0= */"] });
    return ContentAppComponent;
}());

/*@__PURE__*/ (function () { _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵsetClassMetadata"](ContentAppComponent, [{
        type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"],
        args: [{
                selector: 'content-app',
                templateUrl: './content-app.component.html',
                styleUrls: ['./content-app.component.css']
            }]
    }], function () { return [{ type: _pages_pmodello_carrello_service__WEBPACK_IMPORTED_MODULE_1__["CarrelloService"] }]; }, { contenuto: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"]
        }] }); })();


/***/ }),

/***/ "Xn7H":
/*!************************************************************************!*\
  !*** ./src/app/content-app/components/form/select/select.component.ts ***!
  \************************************************************************/
/*! exports provided: Select */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "Select", function() { return Select; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "fXoL");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/common */ "ofXK");



function Select_label_1_Template(rf, ctx) { if (rf & 1) {
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "label", 4);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](1);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
} if (rf & 2) {
    var ctx_r0 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵnextContext"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](1);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtextInterpolate"](ctx_r0.label);
} }
function Select_option_3_Template(rf, ctx) { if (rf & 1) {
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "option", 5);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](1);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
} if (rf & 2) {
    var option_r2 = ctx.$implicit;
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵpropertyInterpolate"]("value", option_r2.value);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](1);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtextInterpolate"](option_r2.text);
} }
var Select = /** @class */ (function () {
    function Select() {
        // Variabili locali
        this.seloptions = [];
        // Output
        this.newvalue = new _angular_core__WEBPACK_IMPORTED_MODULE_0__["EventEmitter"]();
    }
    //Interattivita'
    Select.prototype.onChange = function (e) {
        this.newvalue.emit(e.target.value);
    };
    Select.prototype.ngOnInit = function () {
        // Costruisce i valori della select inserendo anche il placeholder in testa
        this.seloptions.push({ value: "", text: (this.placeholder) ? this.placeholder : "Seleziona..." });
        this.seloptions = this.seloptions.concat(this.options);
    };
    Select.ɵfac = function Select_Factory(t) { return new (t || Select)(); };
    Select.ɵcmp = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdefineComponent"]({ type: Select, selectors: [["form-select"]], inputs: { label: "label", placeholder: "placeholder", options: "options", value: "value", error: "error" }, outputs: { newvalue: "newvalue" }, decls: 4, vars: 2, consts: [[1, "form-group"], ["class", "control-label", 4, "ngIf"], [1, "form-control", 3, "change"], [3, "value", 4, "ngFor", "ngForOf"], [1, "control-label"], [3, "value"]], template: function Select_Template(rf, ctx) { if (rf & 1) {
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "div", 0);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](1, Select_label_1_Template, 2, 1, "label", 1);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](2, "select", 2);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵlistener"]("change", function Select_Template_select_change_2_listener($event) { return ctx.onChange($event); });
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](3, Select_option_3_Template, 2, 2, "option", 3);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
        } if (rf & 2) {
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](1);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngIf", ctx.label);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](2);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngForOf", ctx.seloptions);
        } }, directives: [_angular_common__WEBPACK_IMPORTED_MODULE_1__["NgIf"], _angular_common__WEBPACK_IMPORTED_MODULE_1__["NgForOf"]], encapsulation: 2 });
    return Select;
}());

/*@__PURE__*/ (function () { _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵsetClassMetadata"](Select, [{
        type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"],
        args: [{
                selector: 'form-select',
                templateUrl: './select.component.html'
            }]
    }], null, { label: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"]
        }], placeholder: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"]
        }], options: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"]
        }], value: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"]
        }], error: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"]
        }], newvalue: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Output"]
        }] }); })();


/***/ }),

/***/ "ZAI4":
/*!*******************************!*\
  !*** ./src/app/app.module.ts ***!
  \*******************************/
/*! exports provided: AppModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AppModule", function() { return AppModule; });
/* harmony import */ var _angular_platform_browser__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/platform-browser */ "jhN1");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "fXoL");
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common/http */ "tk/3");
/* harmony import */ var _angular_elements__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/elements */ "Dti6");
/* harmony import */ var _content_app_content_app_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./content-app/content-app.component */ "UXNY");
/* harmony import */ var _content_app_pages_overview_overview_component__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./content-app/pages/overview/overview.component */ "xbXj");
/* harmony import */ var _content_app_pages_topselection_topselection_component__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./content-app/pages/topselection/topselection.component */ "bUez");
/* harmony import */ var _content_app_pages_pmodello_pmodello_component__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./content-app/pages/pmodello/pmodello.component */ "gemC");
/* harmony import */ var _content_app_pages_pmodello_comPortafoglioTable_comPortafoglioTable_component__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./content-app/pages/pmodello/comPortafoglioTable/comPortafoglioTable.component */ "oLoQ");
/* harmony import */ var _content_app_components_pagecomponents_module__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./content-app/components/pagecomponents.module */ "fGEc");
/* harmony import */ var _content_app_pages_pmodello_carrello_carrello_component__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ./content-app/pages/pmodello/carrello/carrello.component */ "vklR");





// Viste e pagine (diverranno moduli)



// Componenti contestuali

// Modulo con oggetti di pagina



var AppModule = /** @class */ (function () {
    function AppModule(injector) {
        this.injector = injector;
        var el = Object(_angular_elements__WEBPACK_IMPORTED_MODULE_3__["createCustomElement"])(_content_app_content_app_component__WEBPACK_IMPORTED_MODULE_4__["ContentAppComponent"], { injector: injector });
        customElements.define('content-app', el);
    }
    AppModule.prototype.ngDoBootstrap = function () { };
    AppModule.ɵmod = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵdefineNgModule"]({ type: AppModule });
    AppModule.ɵinj = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵdefineInjector"]({ factory: function AppModule_Factory(t) { return new (t || AppModule)(_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵinject"](_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injector"])); }, providers: [], imports: [[
                _angular_platform_browser__WEBPACK_IMPORTED_MODULE_0__["BrowserModule"],
                // Componenti funzionali
                _angular_common_http__WEBPACK_IMPORTED_MODULE_2__["HttpClientModule"],
                // Componenti di pagina
                _content_app_components_pagecomponents_module__WEBPACK_IMPORTED_MODULE_9__["PageComponents"]
            ]] });
    return AppModule;
}());

(function () { (typeof ngJitMode === "undefined" || ngJitMode) && _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵsetNgModuleScope"](AppModule, { declarations: [
        // Componente principale
        _content_app_content_app_component__WEBPACK_IMPORTED_MODULE_4__["ContentAppComponent"],
        // Sottocomponenti
        _content_app_pages_overview_overview_component__WEBPACK_IMPORTED_MODULE_5__["Overview"], _content_app_pages_topselection_topselection_component__WEBPACK_IMPORTED_MODULE_6__["TopSelection"], _content_app_pages_pmodello_pmodello_component__WEBPACK_IMPORTED_MODULE_7__["PModello"],
        //contenuti dei sottocomponenti
        _content_app_pages_pmodello_comPortafoglioTable_comPortafoglioTable_component__WEBPACK_IMPORTED_MODULE_8__["comPortafoglioTable"],
        _content_app_pages_pmodello_carrello_carrello_component__WEBPACK_IMPORTED_MODULE_10__["Carrello"]], imports: [_angular_platform_browser__WEBPACK_IMPORTED_MODULE_0__["BrowserModule"],
        // Componenti funzionali
        _angular_common_http__WEBPACK_IMPORTED_MODULE_2__["HttpClientModule"],
        // Componenti di pagina
        _content_app_components_pagecomponents_module__WEBPACK_IMPORTED_MODULE_9__["PageComponents"]] }); })();
/*@__PURE__*/ (function () { _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵsetClassMetadata"](AppModule, [{
        type: _angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"],
        args: [{
                declarations: [
                    // Componente principale
                    _content_app_content_app_component__WEBPACK_IMPORTED_MODULE_4__["ContentAppComponent"],
                    // Sottocomponenti
                    _content_app_pages_overview_overview_component__WEBPACK_IMPORTED_MODULE_5__["Overview"], _content_app_pages_topselection_topselection_component__WEBPACK_IMPORTED_MODULE_6__["TopSelection"], _content_app_pages_pmodello_pmodello_component__WEBPACK_IMPORTED_MODULE_7__["PModello"],
                    //contenuti dei sottocomponenti
                    _content_app_pages_pmodello_comPortafoglioTable_comPortafoglioTable_component__WEBPACK_IMPORTED_MODULE_8__["comPortafoglioTable"],
                    _content_app_pages_pmodello_carrello_carrello_component__WEBPACK_IMPORTED_MODULE_10__["Carrello"]
                ],
                imports: [
                    _angular_platform_browser__WEBPACK_IMPORTED_MODULE_0__["BrowserModule"],
                    // Componenti funzionali
                    _angular_common_http__WEBPACK_IMPORTED_MODULE_2__["HttpClientModule"],
                    // Componenti di pagina
                    _content_app_components_pagecomponents_module__WEBPACK_IMPORTED_MODULE_9__["PageComponents"]
                ],
                providers: []
            }]
    }], function () { return [{ type: _angular_core__WEBPACK_IMPORTED_MODULE_1__["Injector"] }]; }, null); })();


/***/ }),

/***/ "aEq+":
/*!***************************************************************!*\
  !*** ./src/app/content-app/components/tabs/tabs.component.ts ***!
  \***************************************************************/
/*! exports provided: TabsComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "TabsComponent", function() { return TabsComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "fXoL");
/* harmony import */ var _tab_tab_component__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./tab/tab.component */ "6rt4");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "ofXK");




function TabsComponent_li_3_Template(rf, ctx) { if (rf & 1) {
    var _r3 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵgetCurrentView"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "li", 5);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵlistener"]("click", function TabsComponent_li_3_Template_li_click_0_listener() { _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵrestoreView"](_r3); var tab_r1 = ctx.$implicit; var ctx_r2 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵnextContext"](); return ctx_r2.selectTab(tab_r1); });
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](1, "a");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](2);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
} if (rf & 2) {
    var tab_r1 = ctx.$implicit;
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵclassProp"]("on", tab_r1.active);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](2);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtextInterpolate"](tab_r1.tabTitle);
} }
var _c0 = ["*"];
var TabsComponent = /** @class */ (function () {
    function TabsComponent() {
    }
    TabsComponent.prototype.ngAfterContentInit = function () {
        var activeTabs = this.tabsList.filter(function (tab) { return tab.active; });
        if (activeTabs.length === 0) {
            this.selectTab(this.tabsList.first);
        }
    };
    TabsComponent.prototype.selectTab = function (tab) {
        this.tabsList.toArray().forEach(function (tab) { return tab.active = false; });
        tab.active = true;
    };
    TabsComponent.ɵfac = function TabsComponent_Factory(t) { return new (t || TabsComponent)(); };
    TabsComponent.ɵcmp = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdefineComponent"]({ type: TabsComponent, selectors: [["tabs"]], contentQueries: function TabsComponent_ContentQueries(rf, ctx, dirIndex) { if (rf & 1) {
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵcontentQuery"](dirIndex, _tab_tab_component__WEBPACK_IMPORTED_MODULE_1__["TabComponent"], false);
        } if (rf & 2) {
            var _t = void 0;
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵqueryRefresh"](_t = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵloadQuery"]()) && (ctx.tabsList = _t);
        } }, ngContentSelectors: _c0, decls: 6, vars: 1, consts: [[1, "navContSecondLev"], [1, "outerTab"], [1, "tabWrapper", "tabsmall"], [3, "on", "click", 4, "ngFor", "ngForOf"], [1, "separator"], [3, "click"]], template: function TabsComponent_Template(rf, ctx) { if (rf & 1) {
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵprojectionDef"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "div", 0);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](1, "div", 1);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](2, "ul", 2);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](3, TabsComponent_li_3_Template, 3, 3, "li", 3);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](4, "div", 4);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵprojection"](5);
        } if (rf & 2) {
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](3);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngForOf", ctx.tabsList);
        } }, directives: [_angular_common__WEBPACK_IMPORTED_MODULE_2__["NgForOf"]], encapsulation: 2 });
    return TabsComponent;
}());

/*@__PURE__*/ (function () { _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵsetClassMetadata"](TabsComponent, [{
        type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"],
        args: [{
                selector: 'tabs',
                templateUrl: './tabs.component.html'
            }]
    }], null, { tabsList: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["ContentChildren"],
            args: [_tab_tab_component__WEBPACK_IMPORTED_MODULE_1__["TabComponent"]]
        }] }); })();


/***/ }),

/***/ "bUez":
/*!**************************************************************************!*\
  !*** ./src/app/content-app/pages/topselection/topselection.component.ts ***!
  \**************************************************************************/
/*! exports provided: TopSelection */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "TopSelection", function() { return TopSelection; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "fXoL");
/* harmony import */ var _core_globalVars_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../core/globalVars.js */ "5vyl");
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common/http */ "tk/3");
/* harmony import */ var _components_boxLink_boxLink_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../components/boxLink/boxLink.component */ "GqBo");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/common */ "ofXK");
/* harmony import */ var _components_disclaimer_disclaimer_component__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../components/disclaimer/disclaimer.component */ "xR47");
/* harmony import */ var _components_form_select_select_component__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../components/form/select/select.component */ "Xn7H");

// import {ElencoFondi} from './elencofondi/elencofondi';
// Variabili e funzioni globali







function TopSelection_div_29_div_1_Template(rf, ctx) { if (rf & 1) {
    var _r8 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵgetCurrentView"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "div");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](1, "div", 14);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵlistener"]("click", function TopSelection_div_29_div_1_Template_div_click_1_listener() { _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵrestoreView"](_r8); var fondo_r5 = ctx.$implicit; var ctx_r7 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵnextContext"](2); return ctx_r7.selectFund(fondo_r5); });
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](2);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](3, "div", 15);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](4, "div", 16);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
} if (rf & 2) {
    var fondo_r5 = ctx.$implicit;
    var ind_r6 = ctx.index;
    var ctx_r4 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵnextContext"](2);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵclassMap"]("fondo fpos" + (ind_r6 + 1) + " " + (ctx_r4.selectedFund && ctx_r4.selectedFund.Isin == fondo_r5.Isin ? "selected" : ""));
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](2);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtextInterpolate"](fondo_r5.Name);
} }
function TopSelection_div_29_Template(rf, ctx) { if (rf & 1) {
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "div", 12);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](1, TopSelection_div_29_div_1_Template, 5, 3, "div", 13);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
} if (rf & 2) {
    var ctx_r0 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵnextContext"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](1);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngForOf", ctx_r0.top10fondi);
} }
function TopSelection_ng_template_30_Template(rf, ctx) { if (rf & 1) {
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "div", 17);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](1, "Al momento non \u00C8 possibile visualizzare i dati.");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
} }
var _c0 = function () { return { "text": "Ultimo anno", "value": "1" }; };
var _c1 = function () { return { "text": "Ultimi 3 anni", "value": "3" }; };
var _c2 = function () { return { "text": "Ultimi 5 anni", "value": "5" }; };
var _c3 = function (a0, a1, a2) { return [a0, a1, a2]; };
function TopSelection_section_35_Template(rf, ctx) { if (rf & 1) {
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "section");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](1, "div", 18);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](2, "div", 0);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](3, "div", 19);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](4, "h3");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](5);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](6, "div", 20);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](7, "div", 21);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](8, "a", 22);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](9, "Compra");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](10, "p");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](11, "Parte descrittiva generale del fondo selezionato descrittiva generale del fondo selezionato descrittiva generale del fondo selezionato descrittiva generale del fondo selezionato descrittiva generale del fondo selezionato descrittiva generale del fondo selezionato descrittiva generale del fondo selezionato descrittiva generale del fondo selezionato descrittiva generale del fondo selezionato descrittiva generale del fondo selezionato descrittiva generale del fondo selezionato descrittiva generale del fondo selezionato descrittiva generale del fondo selezionato descrittiva generale del fondo selezionato descrittiva generale del fondo selezionato descrittiva generale del fondo selezionato descrittiva generale del fondo selezionato ");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](12, "h4");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](13, "Andamento grafico");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](14, "div", 23);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](15, "div", 0);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](16, "div", 5);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](17, "form-select", 24);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](18, "table", 25);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](19, "tbody");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](20, "tr");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](21, "td", 26);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](22, "Rendimento");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](23, "td", 27);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](24, " 6,91 % ");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](25, "tr");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](26, "td");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](27, "Rendimento 2021");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](28, "td", 27);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](29, " 0,83 % ");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](30, "tr");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](31, "td");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](32, "Rendimento 2020");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](33, "td", 27);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](34, " 0,12 % ");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](35, "tr");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](36, "td");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](37, "Rendimento 2019");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](38, "td", 27);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](39, " 8,36 % ");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](40, "tr");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](41, "td");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](42, "Valore Quota / Nav");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](43, "td", 27);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](44, " 163,370 Eur ");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](45, "tr");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](46, "td");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](47, "Indice di Sharpe");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](48, "td", 27);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](49, " 3,61 ");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](50, "tr");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](51, "td");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](52, "Volatilit\u00E0");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](53, "td", 27);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](54, " 2,14 % ");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](55, "tr");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](56, "td");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](57, "Data");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](58, "td", 27);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](59, " 21/04/2021 ");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](60, "tr");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](61, "td");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](62, "Categoria Assogestioni");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](63, "td", 27);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](64, " Bilanciati Obbligazionari ");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](65, "div", 1);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](66, " GRAFICO ");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](67, "ul", 2);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](68, "li");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](69, "a", 3);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](70, "i", 4);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](71, "span");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](72, "Scheda fondo");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](73, "li");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](74, "a", 3);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](75, "i", 4);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](76, "span");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](77, "Informazioni chiave per l'investitore (KIID) AT0000743562");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](78, "li");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](79, "a", 3);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](80, "i", 4);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](81, "span");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](82, "Modulo di sottoscrizione AT0000743562");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](83, "hr");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
} if (rf & 2) {
    var ctx_r3 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵnextContext"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](5);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtextInterpolate"](ctx_r3.selectedFund.Name);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](12);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("options", _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵpureFunction3"](5, _c3, _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵpureFunction0"](2, _c0), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵpureFunction0"](3, _c1), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵpureFunction0"](4, _c2)));
} }
var TopSelection = /** @class */ (function () {
    function TopSelection(httpClient) {
        this.httpClient = httpClient;
        // Variabili di configurazione
        this.tsUrl = _core_globalVars_js__WEBPACK_IMPORTED_MODULE_1__["GlobalVars"].apibaseurl + "/top_selection.json";
        this.top10fondi = [];
        // Variabili locali
        this.selectedFund = null;
    }
    // Lettura dei dati
    TopSelection.prototype.updateData = function () {
        var _this = this;
        this.httpClient.get(this.tsUrl).subscribe(function (data) {
            // Controllo e manipolazione dei dati
            _this.top10fondi = data && data.fondi;
            // Rimuove il loading
            _this.setloading(false);
        });
    };
    // Dettagli di un fondo
    TopSelection.prototype.selectFund = function (fondo) {
        this.selectedFund = fondo;
        console.log((this.selectedFund));
    };
    // Inizializzazione
    TopSelection.prototype.ngOnInit = function () {
        console.log("top selection");
    };
    TopSelection.prototype.ngAfterViewInit = function () {
        this.updateData();
    };
    ;
    TopSelection.ɵfac = function TopSelection_Factory(t) { return new (t || TopSelection)(_angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdirectiveInject"](_angular_common_http__WEBPACK_IMPORTED_MODULE_2__["HttpClient"])); };
    TopSelection.ɵcmp = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdefineComponent"]({ type: TopSelection, selectors: [["top-selection"]], inputs: { setloading: "setloading" }, decls: 37, vars: 11, consts: [[1, "row"], [1, "col-sm-8"], [1, "documenti"], ["href", "#", 1, "btn-icon"], [1, "icon", "icon", "icon-pdf_circle_filled"], [1, "col-sm-4"], [3, "backgroundBox", "textBox", "linkBox", "gotoBox"], [3, "titleBox", "textBox", "linkBox", "gotoBox"], ["class", "grafico-top10", 4, "ngIf", "ngIfElse"], ["graficoErrore", ""], [1, "note"], [4, "ngIf"], [1, "grafico-top10"], [3, "class", 4, "ngFor", "ngForOf"], [1, "fondo-label", 3, "click"], [1, "fondo-dot"], [1, "fondo-index"], [1, "placeholder-errore"], [1, "dettagli-fondo"], [1, "col-sm-10"], [1, "col-sm-2"], [1, "btn-align-right"], ["type", "button", "title", "Compra", "href", "###FUNZIONECOMPRA###", 1, "btn", "btn-primary", "fleft"], [1, "borderFormRounded"], ["label", "Periodo", "placeholder", "Seleziona un valore...", 3, "options"], [1, "pf-tbstat-table"], [2, "width", "60%"], [1, "right"]], template: function TopSelection_Template(rf, ctx) { if (rf & 1) {
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "h2");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](1, "Top Selection");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](2, "div", 0);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](3, "div", 1);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](4, "p");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](5, " \u00C8 la soluzione guidata che ti offre una ");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](6, "strong");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](7, "selezione dei Fondi e comparti di SICAV collocati da Webank con il migliore rapporto rischio/rendimento");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](8, ", sulla base di un ");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](9, "strong");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](10, "monitoraggio trimestrale");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](11, ". ");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](12, "br");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](13, " Uno strumento semplice ed intuitivo, supportato da ");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](14, "strong");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](15, "un rigoroso processo di selezione");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](16, " dei fondi basato su ");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](17, "strong");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](18, "analisi quantitative e qualitative");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](19, " relative al loro livello di rischio/rendimento, con particolare attenzione alla filosofia di gestione e alle performance nel tempo.");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](20, "ul", 2);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](21, "li");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](22, "a", 3);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](23, "i", 4);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](24, "span");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](25, "Guida alla Top Selection");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](26, "div", 5);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](27, "box-link", 6);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](28, "box-link", 7);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](29, TopSelection_div_29_Template, 2, 1, "div", 8);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](30, TopSelection_ng_template_30_Template, 2, 0, "ng-template", null, 9, _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplateRefExtractor"]);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](32, "p", 10);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](33, "I fondi sono riportati nell\u2019immagine in modo esemplificativo in funzione delle caratteristiche rischio/rendimento.");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](34, "hr");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](35, TopSelection_section_35_Template, 84, 9, "section", 11);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](36, "disclaimer");
        } if (rf & 2) {
            var _r1 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵreference"](31);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](27);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("backgroundBox", true)("textBox", "Vuoi investire in pi\u00F9 fondi?")("linkBox", "vai al portafoglio modello")("gotoBox", "#");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](1);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("titleBox", "Alert")("textBox", "Ricevi aggiornamenti email sulla Top selection")("linkBox", "attiva alert")("gotoBox", "#");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](1);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngIf", ctx.top10fondi.length > 0)("ngIfElse", _r1);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](6);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngIf", ctx.selectedFund);
        } }, directives: [_components_boxLink_boxLink_component__WEBPACK_IMPORTED_MODULE_3__["BoxLinkComponent"], _angular_common__WEBPACK_IMPORTED_MODULE_4__["NgIf"], _components_disclaimer_disclaimer_component__WEBPACK_IMPORTED_MODULE_5__["Disclaimer"], _angular_common__WEBPACK_IMPORTED_MODULE_4__["NgForOf"], _components_form_select_select_component__WEBPACK_IMPORTED_MODULE_6__["Select"]], encapsulation: 2 });
    return TopSelection;
}());

/*@__PURE__*/ (function () { _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵsetClassMetadata"](TopSelection, [{
        type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"],
        args: [{
                selector: 'top-selection',
                templateUrl: './topselection.component.html'
            }]
    }], function () { return [{ type: _angular_common_http__WEBPACK_IMPORTED_MODULE_2__["HttpClient"] }]; }, { setloading: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"]
        }] }); })();


/***/ }),

/***/ "bVPO":
/*!****************************************************************!*\
  !*** ./src/app/content-app/pages/pmodello/pmodello.service.ts ***!
  \****************************************************************/
/*! exports provided: PmodelloService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "PmodelloService", function() { return PmodelloService; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "fXoL");
/* harmony import */ var _pmodello_model__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./pmodello.model */ "E75U");
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common/http */ "tk/3");
/* harmony import */ var _core_globalVars_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../core/globalVars.js */ "5vyl");
//servizio dove caricare i dati dei poratfogli modello



// Variabili e funzioni globali



//servizio per ora con dati statici da costruire a seguito delle chiamate
//valori recuperati da collaudo
var aValori = {};
aValori['valori11'] = [{ "idaa": "11", "idac": "246", "value": 25 }, { "idaa": "11", "idac": "247", "value": 20 }, { "idaa": "11", "idac": "248", "value": 35 }, { "idaa": "11", "idac": "404", "value": 20 }];
aValori['valori12'] = [{ "idaa": "12", "idac": "38", "value": 0 }, { "idaa": "12", "idac": "70", "value": 0 }, { "idaa": "12", "idac": "256", "value": 7 }, { "idaa": "12", "idac": "65", "value": 12 }, { "idaa": "12", "idac": "251", "value": 7 }, { "idaa": "12", "idac": "252", "value": 10 }, { "idaa": "12", "idac": "253", "value": 20 }, { "idaa": "12", "idac": "254", "value": 12 }, { "idaa": "12", "idac": "250", "value": 20 }];
var PmodelloService = /** @class */ (function () {
    function PmodelloService(httpClient) {
        this.httpClient = httpClient;
        this.pmodelli = [
            new _pmodello_model__WEBPACK_IMPORTED_MODULE_1__["Pmodello"]("Difensivo", true, "E\u2019 un <strong>portafoglio che si pone l\u2019obiettivo di difendere il capitale a fronte di rendimenti contenuti</strong> cercando di mantenersi al riparo dalle oscillazioni di mercato. Questo portafoglio \u00E8 caratterizzato totalmente dall\u2019investimento in <strong>fondi obbligazionari e flessibili prudenti</strong>, non \u00E8 previsto l'investimento azionario. I singoli fondi che compongono il portafoglio possono avere profili di rischio e caratteristiche diversi <strong>(orizzonte temporale minimo 1 anno)</strong>.", aValori['valori11']),
            new _pmodello_model__WEBPACK_IMPORTED_MODULE_1__["Pmodello"]("Prudente", false, "E\u2019 un <strong>portafoglio che si pone l\u2019obiettivo di minimizzare il rischio e cerca di offrire prospettive di rivalutazione del capitale investito</strong> sempre in relazione ai rendimenti di mercato mantenendo molto basso il livello di rischio dato dalle oscillazioni delle quotazioni. Questo portafoglio \u00E8 caratterizzato da un <strong>investimento prevalentemente in fondi obbligazionari e flessibili prudenti</strong> con una piccola parte investita in fondi azionari. I singoli fondi che compongono il portafoglio possono avere profili di rischio e caratteristiche diversi <strong>(orizzonte temporale minimo 2 anni)</strong>.", aValori['valori12'])
        ];
        //funzione di chiamata per recuperare i fondi suggeriti get con parametri
        this.pmsUrl = _core_globalVars_js__WEBPACK_IMPORTED_MODULE_3__["GlobalVars"].apibaseurl + "/fondi_suggeriti.json";
        //funzioni generiche per scorrere i children
        this.getArrayListV = function (ArrayList, valueToCheck) {
            var valToSend = "";
            ArrayList.forEach(function (element) {
                if (element.nativeElement.id === valueToCheck) {
                    valToSend = element.nativeElement.value;
                }
            });
            return valToSend;
        };
        this.getArrayListH = function (ArrayList, valueToCheck) {
            var valToSend = "";
            ArrayList.forEach(function (element) {
                if (element.nativeElement.id === valueToCheck) {
                    valToSend = element.nativeElement.innerHTML;
                }
            });
            return valToSend;
        };
        //costanti per aperture pagine
        this.cgi_protocol = window.location.protocol + "//";
        this.cgi_host = window.location.hostname;
        this.wrp_script = '/WEBEXT/wrapped/goToInvest';
        this.obs = "OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto_new&";
    }
    //costruiamo un array che mi restituisca una copia
    PmodelloService.prototype.returnPmodelArray = function () {
        return this.pmodelli.slice();
    };
    PmodelloService.prototype.callFondiSuggeriti = function (params) {
        var httpParams = new _angular_common_http__WEBPACK_IMPORTED_MODULE_2__["HttpParams"]();
        Object.keys(params).forEach(function (key) {
            httpParams = httpParams.append(key.toString(), params[key]);
        });
        return this.httpClient.get(this.pmsUrl, {
            params: httpParams
        });
    };
    PmodelloService.prototype.apriPdfFondo = function (codiceFida) {
        {
            var action = "/wbOnetoone/2l/action/investywb/RicercaFondi.action?" + this.obs;
            var param = "codicefida=" + codiceFida + "&fondo=true";
            top.document.location.href = this.cgi_protocol + this.cgi_host + this.wrp_script + action + param + "&cf=" + Math.random();
        }
    };
    PmodelloService.ɵfac = function PmodelloService_Factory(t) { return new (t || PmodelloService)(_angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵinject"](_angular_common_http__WEBPACK_IMPORTED_MODULE_2__["HttpClient"])); };
    PmodelloService.ɵprov = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdefineInjectable"]({ token: PmodelloService, factory: PmodelloService.ɵfac, providedIn: 'root' });
    return PmodelloService;
}());

/*@__PURE__*/ (function () { _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵsetClassMetadata"](PmodelloService, [{
        type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Injectable"],
        args: [{
                providedIn: 'root'
            }]
    }], function () { return [{ type: _angular_common_http__WEBPACK_IMPORTED_MODULE_2__["HttpClient"] }]; }, null); })();


/***/ }),

/***/ "fGEc":
/*!*****************************************************************!*\
  !*** ./src/app/content-app/components/pagecomponents.module.ts ***!
  \*****************************************************************/
/*! exports provided: PageComponents */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "PageComponents", function() { return PageComponents; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "fXoL");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/common */ "ofXK");
/* harmony import */ var _boxLink_boxLink_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./boxLink/boxLink.component */ "GqBo");
/* harmony import */ var _table_simpleTable_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./table/simpleTable.component */ "iLV5");
/* harmony import */ var _tabs_tabs_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./tabs/tabs.component */ "aEq+");
/* harmony import */ var _tabs_tab_tab_component__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./tabs/tab/tab.component */ "6rt4");
/* harmony import */ var _disclaimer_disclaimer_component__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./disclaimer/disclaimer.component */ "xR47");
/* harmony import */ var _form_form_module__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./form/form.module */ "+liS");


// Importazione dei componenti "oggetto"





// Importazione di moduli features


var PageComponents = /** @class */ (function () {
    function PageComponents() {
    }
    PageComponents.ɵmod = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdefineNgModule"]({ type: PageComponents });
    PageComponents.ɵinj = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdefineInjector"]({ factory: function PageComponents_Factory(t) { return new (t || PageComponents)(); }, imports: [[
                _angular_common__WEBPACK_IMPORTED_MODULE_1__["CommonModule"]
            ], _form_form_module__WEBPACK_IMPORTED_MODULE_7__["Form"]] });
    return PageComponents;
}());

(function () { (typeof ngJitMode === "undefined" || ngJitMode) && _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵsetNgModuleScope"](PageComponents, { declarations: [_disclaimer_disclaimer_component__WEBPACK_IMPORTED_MODULE_6__["Disclaimer"],
        _tabs_tabs_component__WEBPACK_IMPORTED_MODULE_4__["TabsComponent"], _tabs_tab_tab_component__WEBPACK_IMPORTED_MODULE_5__["TabComponent"], _boxLink_boxLink_component__WEBPACK_IMPORTED_MODULE_2__["BoxLinkComponent"], _table_simpleTable_component__WEBPACK_IMPORTED_MODULE_3__["SimpleTableComponent"]], imports: [_angular_common__WEBPACK_IMPORTED_MODULE_1__["CommonModule"]], exports: [_disclaimer_disclaimer_component__WEBPACK_IMPORTED_MODULE_6__["Disclaimer"],
        _tabs_tabs_component__WEBPACK_IMPORTED_MODULE_4__["TabsComponent"], _tabs_tab_tab_component__WEBPACK_IMPORTED_MODULE_5__["TabComponent"], _boxLink_boxLink_component__WEBPACK_IMPORTED_MODULE_2__["BoxLinkComponent"], _table_simpleTable_component__WEBPACK_IMPORTED_MODULE_3__["SimpleTableComponent"],
        _form_form_module__WEBPACK_IMPORTED_MODULE_7__["Form"]] }); })();
/*@__PURE__*/ (function () { _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵsetClassMetadata"](PageComponents, [{
        type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["NgModule"],
        args: [{
                imports: [
                    _angular_common__WEBPACK_IMPORTED_MODULE_1__["CommonModule"]
                ],
                declarations: [
                    _disclaimer_disclaimer_component__WEBPACK_IMPORTED_MODULE_6__["Disclaimer"],
                    _tabs_tabs_component__WEBPACK_IMPORTED_MODULE_4__["TabsComponent"], _tabs_tab_tab_component__WEBPACK_IMPORTED_MODULE_5__["TabComponent"], _boxLink_boxLink_component__WEBPACK_IMPORTED_MODULE_2__["BoxLinkComponent"], _table_simpleTable_component__WEBPACK_IMPORTED_MODULE_3__["SimpleTableComponent"],
                ],
                exports: [
                    _disclaimer_disclaimer_component__WEBPACK_IMPORTED_MODULE_6__["Disclaimer"],
                    _tabs_tabs_component__WEBPACK_IMPORTED_MODULE_4__["TabsComponent"], _tabs_tab_tab_component__WEBPACK_IMPORTED_MODULE_5__["TabComponent"], _boxLink_boxLink_component__WEBPACK_IMPORTED_MODULE_2__["BoxLinkComponent"], _table_simpleTable_component__WEBPACK_IMPORTED_MODULE_3__["SimpleTableComponent"],
                    _form_form_module__WEBPACK_IMPORTED_MODULE_7__["Form"]
                ]
            }]
    }], null, null); })();


/***/ }),

/***/ "gemC":
/*!******************************************************************!*\
  !*** ./src/app/content-app/pages/pmodello/pmodello.component.ts ***!
  \******************************************************************/
/*! exports provided: PModello */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "PModello", function() { return PModello; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "fXoL");
/* harmony import */ var _pmodello_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./pmodello.service */ "bVPO");
/* harmony import */ var _carrello_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./carrello.service */ "lM4W");
/* harmony import */ var _components_boxLink_boxLink_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../components/boxLink/boxLink.component */ "GqBo");
/* harmony import */ var _components_tabs_tabs_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../components/tabs/tabs.component */ "aEq+");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/common */ "ofXK");
/* harmony import */ var _components_tabs_tab_tab_component__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../components/tabs/tab/tab.component */ "6rt4");
/* harmony import */ var _comPortafoglioTable_comPortafoglioTable_component__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./comPortafoglioTable/comPortafoglioTable.component */ "oLoQ");
/* harmony import */ var _components_table_simpleTable_component__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ../../components/table/simpleTable.component */ "iLV5");










var _c0 = ["modaleFondiSuggeriti"];
var _c1 = ["modaleFondiSuggeritiContent"];
var _c2 = ["radiobtnCell"];
var _c3 = ["descCell"];
var _c4 = ["impMinCell"];
var _c5 = ["composizionePort"];
var _c6 = ["closebuttonModal"];
var _c7 = ["descriptionSel"];
var _c8 = ["importoSel"];
var _c9 = ["radioFondo"];
function PModello_tab_38_Template(rf, ctx) { if (rf & 1) {
    var _r19 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵgetCurrentView"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "tab", 33);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](1, "comPortafoglioTable", 34);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵlistener"]("handleFondiSuggeriti", function PModello_tab_38_Template_comPortafoglioTable_handleFondiSuggeriti_1_listener($event) { _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵrestoreView"](_r19); var ctx_r18 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵnextContext"](); return ctx_r18.handleFondiSuggeriti($event); })("handlecalcolaPerc", function PModello_tab_38_Template_comPortafoglioTable_handlecalcolaPerc_1_listener($event) { _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵrestoreView"](_r19); var ctx_r20 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵnextContext"](); return ctx_r20.handlecalcolaPerc($event); })("handleaddCart", function PModello_tab_38_Template_comPortafoglioTable_handleaddCart_1_listener($event) { _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵrestoreView"](_r19); var ctx_r21 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵnextContext"](); return ctx_r21.handleaddCart($event); });
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
} if (rf & 2) {
    var i_r17 = ctx.index;
    var ctx_r1 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵnextContext"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("tabTitle", ctx_r1.pModelli[i_r17].description)("active", ctx_r1.pModelli[i_r17].active);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](1);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("textIntro", ctx_r1.pModelli[i_r17].pintro)("DataFromService", ctx_r1.pModelli[i_r17].dataFromService)("headingsCol", ctx_r1.headingsColTablePm)("rowData", ctx_r1.rowsDataTablePm[i_r17])("cellClassName", ctx_r1.cellClassNameTablePm)("isBtnupDateCarVisible", ctx_r1.isBtnupDateCarVisible[i_r17])("isBtnaddCarVisible", ctx_r1.isBtnaddCarVisible[i_r17]);
} }
function PModello_div_65_Template(rf, ctx) { if (rf & 1) {
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "div");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](1, "simple-table", 35);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
} if (rf & 2) {
    var ctx_r5 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵnextContext"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](1);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("headingsCol", ctx_r5.headingsColTabellaSugg)("rowData", ctx_r5.rowDataTabellaSugg)("colsTemplate", ctx_r5.colsTemplateTabellaSugg)("cellClassName", ctx_r5.cellClassNameTabellaSugg)("rowClassName", ctx_r5.rowClassNameTabellaSugg);
} }
function PModello_ng_template_66_Template(rf, ctx) { if (rf & 1) {
    var _r27 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵgetCurrentView"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "label", 36);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](1, "input", 37, 38);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵlistener"]("click", function PModello_ng_template_66_Template_input_click_1_listener($event) { _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵrestoreView"](_r27); var data_r22 = ctx.data; var i_r23 = ctx.id; var ctx_r26 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵnextContext"](); return ctx_r26.setBtnSalva($event, data_r22.pdf, data_r22.impMin, i_r23); });
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](3, "span", 39);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](4);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
} if (rf & 2) {
    var data_r22 = ctx.data;
    var i_r23 = ctx.id;
    var ctx_r7 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵnextContext"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](1);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵpropertyInterpolate1"]("id", "rb", i_r23 + 1, "");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵpropertyInterpolate"]("value", data_r22.value);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵattribute"]("checked", data_r22.value === ctx_r7.t ? "" : null);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](3);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtextInterpolate"](i_r23 + 1);
} }
function PModello_ng_template_68_Template(rf, ctx) { if (rf & 1) {
    var _r31 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵgetCurrentView"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "span");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](1, "a", 40, 41);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵlistener"]("click", function PModello_ng_template_68_Template_a_click_1_listener() { _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵrestoreView"](_r31); var data_r28 = ctx.data; var ctx_r30 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵnextContext"](); return ctx_r30.apriPdfFondo(data_r28.pdf); });
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](3);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
} if (rf & 2) {
    var data_r28 = ctx.data;
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](1);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵpropertyInterpolate1"]("id", "name-", data_r28.value, "");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](2);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtextInterpolate"](data_r28.description);
} }
function PModello_ng_template_70_a_0_Template(rf, ctx) { if (rf & 1) {
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "a", 45);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](1, "i", 46);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
} }
function PModello_ng_template_70_Template(rf, ctx) { if (rf & 1) {
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](0, PModello_ng_template_70_a_0_Template, 2, 0, "a", 42);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](1, "span", 43, 44);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](3);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
} if (rf & 2) {
    var data_r32 = ctx.data;
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngIf", data_r32.warning === "y");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](1);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵpropertyInterpolate1"]("id", "minp-", data_r32.value, "");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](2);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtextInterpolate1"]("", data_r32.impMin, " ");
} }
function PModello_span_73_Template(rf, ctx) { if (rf & 1) {
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "span");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](1, "i", 47);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](2, " Vedi altri fondi");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
} }
function PModello_ng_template_74_Template(rf, ctx) { if (rf & 1) {
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "span");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](1, "i", 48);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](2, " Nascondi");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
} }
function PModello_a_82_Template(rf, ctx) { if (rf & 1) {
    var _r36 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵgetCurrentView"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "a", 49);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵlistener"]("click", function PModello_a_82_Template_a_click_0_listener() { _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵrestoreView"](_r36); var ctx_r35 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵnextContext"](); return ctx_r35.setCarrValue(ctx_r35.idaaSelected, ctx_r35.idacSelected, false); });
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](1, "Rimuovi");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
} }
var PModello = /** @class */ (function () {
    //inietto il servizio
    function PModello(pmodelloService, carrelloService) {
        var _this = this;
        this.pmodelloService = pmodelloService;
        this.carrelloService = carrelloService;
        //gestione numero index righe da mostrare nella tabella dei suggeriti
        this.onlySomeRow = true;
        //variabile di semaforo per la renderizzazione della tabella
        this.isRenderingReady = false;
        //stato dei bottoni del carrello:
        this.isBtnaddCarVisible = [false, false];
        this.isBtnupDateCarVisible = [false, false];
        //funzioni per costruire le tabelle di atterraggio
        this.getArrayValori = function (index, minI, maxI) {
            var ArrayValori = [];
            for (var i = minI; i <= maxI; i++) {
                ArrayValori.push(Number([
                    _this.pmodelloService.returnPmodelArray()[index].dataFromService[i].value
                ]));
            }
            return ArrayValori;
        };
        this.getArrayIdac = function (index, minI, maxI) {
            var ArrayIdac = [];
            for (var i = minI; i <= maxI; i++) {
                ArrayIdac.push(Number([
                    _this.pmodelloService.returnPmodelArray()[index].dataFromService[i].idac
                ]));
            }
            return ArrayIdac;
        };
        //elementi per le tabella  di atterraggio
        //instestazioni di colonna
        this.headingsColTablePm = [
            { title: 'Macro Asset Class', class: "center" },
            { title: 'Peso', class: "center" },
            { title: 'Asset Class', class: "center" },
            { title: 'Peso', class: "center" },
            { title: 'Importo da investire', class: "center", id: 'importi' },
            { title: 'Fondo', class: "center" },
            { title: '', class: "center" }
        ];
        //dati per le righe di tutte le tabelle rowspan costruiti tramite span in html
        //ogni array è una tabella per ogni tab
        this.rowsDataTablePm = {
            //prima tabella
            0: [
                {
                    MacroAssetClass: 'Monetario',
                    Peso: this.getArrayValori(0, 0, 0).reduce(function (previous, next) {
                        return previous + next;
                    }),
                    AssetClass: ['Liquidita'],
                    Pesi: this.getArrayValori(0, 0, 0),
                    Importo: this.getArrayIdac(0, 0, 0),
                    Fondo: this.getArrayIdac(0, 0, 0),
                    btnId: { idac: this.getArrayIdac(0, 0, 0), labelOv: 'SIC' }
                },
                {
                    MacroAssetClass: 'Obbligazionario	',
                    Peso: this.getArrayValori(0, 1, 3).reduce(function (previous, next) {
                        return previous + next;
                    }),
                    AssetClass: ['Obbligazionario Governativo', 'Obbligazionario Globale', 'Obbligazionario Corporate'],
                    Pesi: this.getArrayValori(0, 1, 3),
                    Importo: this.getArrayIdac(0, 1, 3),
                    Fondo: this.getArrayIdac(0, 1, 3),
                    btnId: { idac: this.getArrayIdac(0, 1, 3), labelOv: 'SIC' }
                }
            ],
            1: [
                {
                    MacroAssetClass: 'Azionario',
                    Peso: this.getArrayValori(1, 0, 2).reduce(function (previous, next) {
                        return previous + next;
                    }),
                    AssetClass: ['Azionario Europa', 'Azionari America', 'Azionario Globale'],
                    Pesi: this.getArrayValori(1, 0, 2),
                    Importo: this.getArrayIdac(1, 0, 2),
                    Fondo: this.getArrayIdac(1, 0, 2),
                    btnId: { idac: this.getArrayIdac(1, 0, 2), labelOv: 'PRU' }
                },
                {
                    MacroAssetClass: 'Obbligazionario	',
                    Peso: this.getArrayValori(1, 3, 7).reduce(function (previous, next) {
                        return previous + next;
                    }),
                    AssetClass: ['Obbligazionario Emergenti', 'Obbligazionario High Yield', 'Obbligazionario Governativo', 'Obbligazionario Globale', 'Obbligazionario Corporate'],
                    Pesi: this.getArrayValori(1, 3, 7),
                    Importo: this.getArrayIdac(1, 3, 7),
                    Fondo: this.getArrayIdac(1, 3, 7),
                    btnId: { idac: this.getArrayIdac(1, 3, 7), labelOv: 'PRU' }
                },
                {
                    MacroAssetClass: 'Monetario',
                    Peso: this.getArrayValori(1, 8, 8).reduce(function (previous, next) {
                        return previous + next;
                    }),
                    AssetClass: ['Liquidita'],
                    Pesi: this.getArrayValori(1, 8, 8),
                    Importo: this.getArrayIdac(1, 8, 8),
                    Fondo: this.getArrayIdac(1, 8, 8),
                    btnId: { idac: this.getArrayIdac(1, 8, 8), labelOv: 'PRU' }
                },
            ],
        };
        //array di classi per le celle delle tabelle di atterraggio
        this.cellClassNameTablePm = [
            'left', 'right', 'left', 'right', 'right', 'left', 'center'
        ];
        //elementi per la tabella dei suggeriti
        //intestazioni colonne
        this.headingsColTabellaSugg = [
            { title: '', class: "center" },
            { title: 'Nome', class: "center" },
            { title: 'Importo minimo prima sottoscrizione', class: "center" }
        ];
        //schema di dati delle celle tabella suggeriti da popolare con la chiamata
        this.rowDataTabellaSugg = [
            {
                RadioCell: '',
                Nome: '',
                Importo: ''
            }
        ];
        //classi celle tabella suggeriti
        this.cellClassNameTabellaSugg = [
            'left', 'left', 'right'
        ];
        //classi right tabella suggeriti
        this.rowClassNameTabellaSugg = [];
        this.colsTemplateTabellaSugg = [];
        //prepare i campi per il successivo ed eventuale carrello
        this.pfIsinFields = [];
        this.pfPercFields = [];
    }
    PModello.prototype.numFormatMigliaia = function (nStr) {
        nStr += '';
        var x = nStr.split('.');
        var x1 = x[0];
        var x2 = x.length > 1 ? ',' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + '.' + '$2');
        }
        return x1 + x2;
    };
    PModello.prototype.returnSelector = function (el) {
        var selector = this.composizionePort.nativeElement.querySelector(el);
        return selector;
    };
    PModello.prototype.returnSelectors = function (el) {
        var selector = this.composizionePort.nativeElement.querySelectorAll(el);
        return selector;
    };
    //funzione calcola percentuale
    PModello.prototype.calcolaPercentuale = function (params) {
        var _this = this;
        var newValue, valori = params.valori, importo = params.c;
        valori.forEach(function (value) {
            var valueField = "#val" + value.idaa + "-" + value.idac, hField = "#hval" + value.idaa + "-" + value.idac, hFieldmin = "#hmin" + value.idaa + "-" + value.idac;
            if (_this.returnSelector("#totinv" + value.idaa) != "") {
                newValue = importo * (value.value / 100);
                _this.returnSelector(valueField).innerHTML = _this.numFormatMigliaia(parseInt(newValue).toString());
                _this.returnSelector(hField).value = parseInt(newValue);
                if (parseFloat(_this.returnSelector(hFieldmin).value) > parseFloat(newValue)) {
                    _this.returnSelector(valueField).innerHTML = '<i data-toggle="tooltip" data-title="L’importo minimo della prima sottoscrizione è superiore all’importo da investire per il fondo selezionato. Scegli un altro fondo per questa asset class o modifica l’importo da investire." class="icon icon-alert_outline no-rendering-position" title=""></i>' + _this.returnSelector(valueField).innerHTML;
                }
            }
            else {
                _this.returnSelector(valueField).innerHTML = "0";
                _this.returnSelector(hField).value = "0";
            }
        });
    };
    PModello.prototype.handlecalcolaPerc = function (params) {
        this.calcolaPercentuale(params);
    };
    //funzione di chiamata fondi suggeriti
    PModello.prototype.handleFondiSuggeriti = function (params) {
        var _this = this;
        //setto il tipo di portafoglio da includere nel testo della modale
        switch (params.aa) {
            case '11':
                this.typePortafoglio = 'difensivo',
                    this.indexValori = 0;
                break;
            case '12':
                this.typePortafoglio = 'prudente',
                    this.indexValori = 1;
                break;
            default:
        }
        //setto il loading alla modale
        this.modaleFondiSuggeritiContent.nativeElement.classList.add('loading');
        //funzione di chiamata iniettata dal servizio
        //parametri in post da passare: id, idaa, idac, importoToSend, isinToSend
        params.t === '' ? this.isRadioChecked = false : this.isRadioChecked = true;
        params.t === '' ? this.isRoleModifica = false : this.isRoleModifica = true;
        this.pmodelloService.callFondiSuggeriti(params).subscribe(function (data) {
            if (data['fondiSuggeriti']) {
                _this.modaleFondiSuggeritiContent.nativeElement.classList.remove('loading');
                _this.rowDataTabellaSugg = data['fondiSuggeriti'];
                //aggiungo la la classe hidden all'array delle classi di riga
                _this.onlySomeRow = true;
                //nascondo le righe oltre la terza
                _this.getTrTableSuggRow();
                //semaforo di rendering
                _this.isRenderingReady = true;
                _this.idaaSelected = params.aa;
                _this.idacSelected = params.ac;
                _this.t = params.t;
            }
        });
    };
    //funzione per popolare l'array delle classi dinamiche di riga della tabella
    PModello.prototype.getTrTableSuggRow = function () {
        var _this = this;
        this.rowClassNameTabellaSugg = [];
        this.rowDataTabellaSugg.forEach(function (element, index) {
            if (_this.onlySomeRow) {
                var classToAdd = (index < 3 || index === _this.indexRowVis) ? '' : 'hidden';
                _this.rowClassNameTabellaSugg.push(classToAdd);
            }
            else {
                _this.rowClassNameTabellaSugg.push("");
            }
        });
    };
    //funzione chiamata dal carrello
    PModello.prototype.apriPdfFondo = function (codiceFida) {
        this.pmodelloService.apriPdfFondo(codiceFida);
    };
    //toogle row table
    PModello.prototype.toggleRow = function () {
        this.onlySomeRow = !this.onlySomeRow;
        this.getTrTableSuggRow();
    };
    //funzione per abilitare il salva alla selezione del radio btn
    PModello.prototype.setBtnSalva = function (el, dataPdf, impMin, i) {
        this.indexRowVis = i;
        this.isRadioChecked = true;
        this.valuesToSave = {
            'value': el.target.value,
            'descrToFullfill': this.pmodelloService.getArrayListH(this.descriptionSelList, 'name-' + el.target.value),
            'impToFullfill': this.pmodelloService.getArrayListH(this.impSelList, 'minp-' + el.target.value),
            'pdfToFullfill': dataPdf,
            'impMin': impMin
        };
    };
    PModello.prototype.setCarrValue = function (idaa, idac, toSave) {
        var _this = this;
        //se sto salvando
        var descSel = this.returnSelector("#txt" + idaa + "-" + idac), isinSel = this.returnSelector("#hisin" + idaa + "-" + idac), hminSel = this.returnSelector("#hmin" + idaa + "-" + idac), btnSel = this.returnSelector("#btn" + idaa + "-" + idac), c = this.returnSelector("#totinv" + idaa);
        if (toSave === true) {
            descSel.innerHTML = this.valuesToSave['descrToFullfill'];
            descSel.addEventListener('click', function () { return _this.apriPdfFondo(_this.valuesToSave['pdfToFullfill']); });
            isinSel.value = this.valuesToSave['value'];
            hminSel.value = this.valuesToSave['impMin'];
            btnSel.setAttribute('class', 'btn btn-defalut btn-small');
            btnSel.innerHTML = "cambia fondo";
        }
        else {
            descSel.innerHTML = '';
            isinSel.value = '';
            hminSel.value = '';
            btnSel.setAttribute('class', 'btn btn-primary btn-small');
            btnSel.innerHTML = "seleziona fondo";
            this.indexRowVis = "";
        }
        var valori = this.pmodelloService.returnPmodelArray()[this.indexValori].dataFromService;
        c = c.value.replace(/[^0-9]/g, '');
        this.calcolaPercentuale({ valori: valori, c: c });
        this.pfIsinFields = this.returnSelectors(".pf-isin-" + idaa);
        this.pfPercFields = this.returnSelectors(".pf-perc-" + idaa);
        this.enableCart(idaa, false);
        this.closebutton.nativeElement.click();
    };
    PModello.prototype.enableCart = function (aa, forceUpd) {
        if (!forceUpd) {
            var vis_1 = false;
            this.pfIsinFields.forEach(function (element) {
                if (element.value !== '') {
                    vis_1 = (vis_1 || true);
                }
            });
            if (vis_1) {
                !this.isBtnupDateCarVisible[this.indexValori] ? this.isBtnaddCarVisible[this.indexValori] = true : this.isBtnaddCarVisible[this.indexValori] = false;
            }
            else {
                this.isBtnupDateCarVisible[this.indexValori] = false;
                this.isBtnaddCarVisible[this.indexValori] = false;
            }
        }
        else {
            this.isBtnaddCarVisible[this.indexValori] = false;
            this.isBtnupDateCarVisible[this.indexValori] = true;
        }
    };
    PModello.prototype.handleaddCart = function (aa) {
        var _this = this;
        var numFondi = 0;
        this.pfIsinFields.forEach(function (element) {
            if (element.value !== '')
                numFondi++;
        });
        var cart = {
            'profilo': this.typePortafoglio,
            'numFondi': numFondi,
            'quantita': this.returnSelector("#totinv" + aa).value !== '' ? Number(this.returnSelector("#totinv" + aa).value) : 0,
            'fondi': null
        };
        cart.fondi = new Array(numFondi);
        var fondi = {};
        this.pfIsinFields.forEach(function (element, i) {
            if (element.value !== '') {
                cart.fondi[i] = Object.create(fondi, {
                    isin: {
                        value: element.value
                    },
                    percentuale: {
                        value: _this.pfPercFields[i].value
                    }
                });
                numFondi++;
            }
        });
        this.carrelloService.callCarrello(cart);
    };
    // Inizializzazione
    PModello.prototype.ngOnInit = function () {
        this.setloading();
        this.pModelli = this.pmodelloService.returnPmodelArray();
        this.colsTemplateTabellaSugg.push(this.radiobtnCell, this.descCell, this.impMinCell);
        ttInit();
    };
    PModello.prototype.ngAfterViewInit = function () {
        this.setloading(false);
    };
    ;
    PModello.ɵfac = function PModello_Factory(t) { return new (t || PModello)(_angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdirectiveInject"](_pmodello_service__WEBPACK_IMPORTED_MODULE_1__["PmodelloService"]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdirectiveInject"](_carrello_service__WEBPACK_IMPORTED_MODULE_2__["CarrelloService"])); };
    PModello.ɵcmp = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdefineComponent"]({ type: PModello, selectors: [["pmodello"]], viewQuery: function PModello_Query(rf, ctx) { if (rf & 1) {
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵviewQuery"](_c0, true);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵviewQuery"](_c1, true);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵstaticViewQuery"](_c2, true);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵstaticViewQuery"](_c3, true);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵstaticViewQuery"](_c4, true);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵstaticViewQuery"](_c5, true);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵviewQuery"](_c6, true);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵviewQuery"](_c7, true);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵviewQuery"](_c8, true);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵviewQuery"](_c9, true);
        } if (rf & 2) {
            var _t = void 0;
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵqueryRefresh"](_t = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵloadQuery"]()) && (ctx.modaleFondiSuggeriti = _t.first);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵqueryRefresh"](_t = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵloadQuery"]()) && (ctx.modaleFondiSuggeritiContent = _t.first);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵqueryRefresh"](_t = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵloadQuery"]()) && (ctx.radiobtnCell = _t.first);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵqueryRefresh"](_t = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵloadQuery"]()) && (ctx.descCell = _t.first);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵqueryRefresh"](_t = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵloadQuery"]()) && (ctx.impMinCell = _t.first);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵqueryRefresh"](_t = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵloadQuery"]()) && (ctx.composizionePort = _t.first);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵqueryRefresh"](_t = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵloadQuery"]()) && (ctx.closebutton = _t.first);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵqueryRefresh"](_t = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵloadQuery"]()) && (ctx.descriptionSelList = _t);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵqueryRefresh"](_t = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵloadQuery"]()) && (ctx.impSelList = _t);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵqueryRefresh"](_t = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵloadQuery"]()) && (ctx.radioFondoList = _t);
        } }, inputs: { setloading: "setloading" }, decls: 86, vars: 15, consts: [["composizionePort", ""], [1, "row"], [1, "col-sm-8"], [1, "col-sm-4"], [3, "backgroundBox", "textBox", "linkBox", "gotoBox"], [3, "titleBox", "textBox", "linkBox", "gotoBox"], [3, "tabTitle", "active", 4, "ngFor", "ngForOf"], ["id", "modaleFondiSuggeriti", "role", "dialog", 1, "modal", "fade"], ["modaleFondiSuggeriti", ""], [1, "modal-dialog"], [1, "modal-content"], [1, "modal-header"], ["type", "button", "data-dismiss", "modal", 1, "close"], ["closebuttonModal", ""], [1, "modal-title"], [1, "modal-body"], ["id", "lef-cont", 1, "formGenerico"], ["modaleFondiSuggeritiContent", ""], [4, "ngIf"], ["radiobtnCell", ""], ["descCell", ""], ["impMinCell", ""], [3, "click"], [4, "ngIf", "ngIfElse"], ["hideRow", ""], [1, "modal-footer"], [1, "form-group", "btnWrapper"], [1, "btn-align-left"], ["type", "button", "data-dismiss", "modal", 1, "btn", "btn-default"], [1, "btn-align-right"], ["type", "button", "class", "btn btn-primary", 3, "click", 4, "ngIf"], ["type", "button", "id", "", "ng-disabled", "!isRadioChecked", 3, "ngClass", "click"], [1, "clear"], [3, "tabTitle", "active"], [3, "textIntro", "DataFromService", "headingsCol", "rowData", "cellClassName", "isBtnupDateCarVisible", "isBtnaddCarVisible", "handleFondiSuggeriti", "handlecalcolaPerc", "handleaddCart"], [3, "headingsCol", "rowData", "colsTemplate", "cellClassName", "rowClassName"], [1, "textWrapper"], ["type", "radio", "name", "", "name", "idxfondo", 3, "id", "value", "click"], ["radioFondo", ""], [1, "text"], [3, "id", "click"], ["descriptionSel", ""], ["class", "btn-icon", 4, "ngIf"], [3, "id"], ["importoSel", ""], [1, "btn-icon"], ["data-toggle", "tooltip", "data-title", "L\u2019importo minimo della prima sottoscrizione \u00E8 superiore all\u2019importo da investire per il fondo selezionato. Scegli un altro fondo per questa asset class o modifica l\u2019importo da investire.", "title", "", 1, "icon", "icon-alert_outline", "no-rendering-position"], [1, "icon", "icon-f-row_expand"], [1, "icon", "icon-f-row_contract"], ["type", "button", 1, "btn", "btn-primary", 3, "click"]], template: function PModello_Template(rf, ctx) { if (rf & 1) {
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "div", null, 0);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](2, "h2");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](3, "Portafoglio modello");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](4, "div", 1);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](5, "div", 2);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](6, "p");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](7, "\u00C8 la soluzione guidata che ");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](8, "strong");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](9, "ti supporta nella costruzione del tuo portafoglio");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](10, " in modo semplice e intuitivo:");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](11, "ul");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](12, "li");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](13, "strong");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](14, "scegli uno dei 5 Portafogli Modello");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](15, " (difensivo, prudente, moderato, attivo, dinamico);");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](16, "li");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](17, "strong");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](18, "seleziona uno o pi\u00F9 Fondi e comparti di SICAV");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](19, " associati a ciascun portafoglio modello.");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](20, "p");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](21, "I ");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](22, "strong");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](23, "Portafogli Modello");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](24, " sono ripartiti ");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](25, "strong");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](26, "per macro asset");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](27, " class (azionario, obbligazionario e monetario) e ");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](28, "strong");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](29, "aree geografiche");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](30, " (Europa, USA, Giappone, Paesi emergenti, etc.) con livelli di rischio differenziati, sulla base di ");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](31, "strong");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](32, "analisi quantitative e qualitative aggiornate mensilmente");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](33, " e in funzione dell\u2019andamento dei mercati finanziari. ");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](34, "div", 3);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](35, "box-link", 4);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](36, "box-link", 5);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](37, "tabs");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](38, PModello_tab_38_Template, 2, 9, "tab", 6);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](39, "div", 7, 8);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](41, "div", 9);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](42, "div", 10);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](43, "div", 11);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](44, "button", 12, 13);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](46, "\u00D7");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](47, "h1", 14);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](48);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](49, "div", 15);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](50, "div", 16, 17);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](52, "p");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](53, "Questi sono i ");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](54, "strong");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](55, "migliori tre");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](56, " fondi corrispondenti al profilo di investimento selezionato.");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](57, "br");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](58, " Puoi ");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](59, "strong");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](60, "aggiungerne uno");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](61, " al portafoglio o ");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](62, "strong");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](63, "visualizzarne altri");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](64, " disponibili per questa categoria.");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](65, PModello_div_65_Template, 2, 5, "div", 18);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](66, PModello_ng_template_66_Template, 5, 4, "ng-template", null, 19, _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplateRefExtractor"]);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](68, PModello_ng_template_68_Template, 4, 2, "ng-template", null, 20, _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplateRefExtractor"]);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](70, PModello_ng_template_70_Template, 4, 3, "ng-template", null, 21, _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplateRefExtractor"]);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](72, "a", 22);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵlistener"]("click", function PModello_Template_a_click_72_listener() { return ctx.toggleRow(); });
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](73, PModello_span_73_Template, 3, 0, "span", 23);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](74, PModello_ng_template_74_Template, 3, 0, "ng-template", null, 24, _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplateRefExtractor"]);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](76, "div", 25);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](77, "div", 26);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](78, "div", 27);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](79, "a", 28);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](80, "chiudi");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](81, "div", 29);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](82, PModello_a_82_Template, 2, 0, "a", 30);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](83, "a", 31);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵlistener"]("click", function PModello_Template_a_click_83_listener() { return ctx.setCarrValue(ctx.idaaSelected, ctx.idacSelected, true); });
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](84, "Salva");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](85, "br", 32);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
        } if (rf & 2) {
            var _r13 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵreference"](75);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](35);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("backgroundBox", true)("textBox", "Vuoi investire in pi\u00F9 fondi?")("linkBox", "vai al portafoglio modello")("gotoBox", "#");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](1);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("titleBox", "Alert")("textBox", "Ricevi aggiornamenti email sulla Top selection")("linkBox", "attiva alert")("gotoBox", "#");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](2);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngForOf", ctx.pModelli);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](10);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtextInterpolate1"]("Fondi selezionati per l'asset class Liquidit\u00E0 del portafoglio ", ctx.typePortafoglio, ".");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](17);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngIf", ctx.isRenderingReady);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](8);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngIf", ctx.onlySomeRow)("ngIfElse", _r13);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](9);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngIf", ctx.isRoleModifica);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](1);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngClass", !ctx.isRadioChecked ? "btn btn-disabled" : "btn btn-primary");
        } }, directives: [_components_boxLink_boxLink_component__WEBPACK_IMPORTED_MODULE_3__["BoxLinkComponent"], _components_tabs_tabs_component__WEBPACK_IMPORTED_MODULE_4__["TabsComponent"], _angular_common__WEBPACK_IMPORTED_MODULE_5__["NgForOf"], _angular_common__WEBPACK_IMPORTED_MODULE_5__["NgIf"], _angular_common__WEBPACK_IMPORTED_MODULE_5__["NgClass"], _components_tabs_tab_tab_component__WEBPACK_IMPORTED_MODULE_6__["TabComponent"], _comPortafoglioTable_comPortafoglioTable_component__WEBPACK_IMPORTED_MODULE_7__["comPortafoglioTable"], _components_table_simpleTable_component__WEBPACK_IMPORTED_MODULE_8__["SimpleTableComponent"]], encapsulation: 2 });
    return PModello;
}());

/*@__PURE__*/ (function () { _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵsetClassMetadata"](PModello, [{
        type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"],
        args: [{
                selector: 'pmodello',
                templateUrl: './pmodello.component.html',
            }]
    }], function () { return [{ type: _pmodello_service__WEBPACK_IMPORTED_MODULE_1__["PmodelloService"] }, { type: _carrello_service__WEBPACK_IMPORTED_MODULE_2__["CarrelloService"] }]; }, { setloading: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"]
        }], modaleFondiSuggeriti: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["ViewChild"],
            args: ["modaleFondiSuggeriti"]
        }], modaleFondiSuggeritiContent: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["ViewChild"],
            args: ["modaleFondiSuggeritiContent"]
        }], radiobtnCell: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["ViewChild"],
            args: ['radiobtnCell', { static: true }]
        }], descCell: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["ViewChild"],
            args: ['descCell', { static: true }]
        }], impMinCell: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["ViewChild"],
            args: ['impMinCell', { static: true }]
        }], composizionePort: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["ViewChild"],
            args: ['composizionePort', { static: true }]
        }], closebutton: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["ViewChild"],
            args: ['closebuttonModal']
        }], descriptionSelList: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["ViewChildren"],
            args: ["descriptionSel"]
        }], impSelList: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["ViewChildren"],
            args: ["importoSel"]
        }], radioFondoList: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["ViewChildren"],
            args: ["radioFondo"]
        }] }); })();


/***/ }),

/***/ "iLV5":
/*!***********************************************************************!*\
  !*** ./src/app/content-app/components/table/simpleTable.component.ts ***!
  \***********************************************************************/
/*! exports provided: SimpleTableComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "SimpleTableComponent", function() { return SimpleTableComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "fXoL");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/common */ "ofXK");



var _c0 = function (a0) { return { data: a0 }; };
function SimpleTableComponent_th_5_Template(rf, ctx) { if (rf & 1) {
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "th", 3);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementContainerStart"](1, 4);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](2);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementContainerEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
} if (rf & 2) {
    var col_r2 = ctx.$implicit;
    var ctx_r0 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵnextContext"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngClass", col_r2.class);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](1);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngTemplateOutlet", ctx_r0.colsThTemplate)("ngTemplateOutletContext", _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵpureFunction1"](4, _c0, col_r2));
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](1);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtextInterpolate1"](" ", col_r2.title, " ");
} }
var _c1 = function (a0, a1, a2) { return { data: a0, id: a1, row: a2 }; };
function SimpleTableComponent_tr_7_td_2_Template(rf, ctx) { if (rf & 1) {
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "td", 7);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementContainer"](1, 4);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
} if (rf & 2) {
    var colTemplate_r8 = ctx.$implicit;
    var j_r9 = ctx.index;
    var ctx_r10 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵnextContext"]();
    var el_r4 = ctx_r10.$implicit;
    var i_r5 = ctx_r10.index;
    var _r6 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵreference"](1);
    var ctx_r7 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵnextContext"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngClass", ctx_r7.isObject(el_r4[ctx_r7.columnssref[j_r9]]) ? "pad_0 " + ctx_r7.classTdSimpleTable[j_r9] : ctx_r7.classTdSimpleTable[j_r9])("headers", ctx_r7.headers[j_r9]);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](1);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngTemplateOutlet", colTemplate_r8)("ngTemplateOutletContext", _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵpureFunction3"](4, _c1, el_r4, i_r5, _r6));
} }
function SimpleTableComponent_tr_7_Template(rf, ctx) { if (rf & 1) {
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "tr", 3, 5);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](2, SimpleTableComponent_tr_7_td_2_Template, 2, 8, "td", 6);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
} if (rf & 2) {
    var i_r5 = ctx.index;
    var ctx_r1 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵnextContext"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngClass", i_r5 % 2 == 1 ? "pari " + ctx_r1.classTrSimpleTable[i_r5] : ctx_r1.classTrSimpleTable[i_r5]);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](2);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngForOf", ctx_r1.colsTemplate);
} }
var SimpleTableComponent = /** @class */ (function () {
    function SimpleTableComponent() {
        this.columnssref = [];
        this.classTdSimpleTable = [];
        this.classTrSimpleTable = [];
        this.headers = [];
    }
    SimpleTableComponent.prototype.isObject = function (val) {
        return typeof val === 'object';
    };
    SimpleTableComponent.prototype.ngOnInit = function () {
        var _this = this;
        if (this.rowData[0]) {
            this.columnssref = Object.keys(this.rowData[0]);
            this.columnssref.forEach(function (element, index) {
                _this.headers.push(element);
            });
        }
        if (this.cellClassName) {
            this.cellClassName.forEach(function (element) {
                _this.classTdSimpleTable.push(element);
            });
        }
    };
    SimpleTableComponent.prototype.ngOnChanges = function () {
        var _this = this;
        if (this.rowClassName) {
            this.classTrSimpleTable = [];
            this.rowClassName.forEach(function (element) {
                _this.classTrSimpleTable.push(element);
            });
        }
    };
    SimpleTableComponent.prototype.ngAfterViewChecked = function () {
        initTooltip();
    };
    ;
    SimpleTableComponent.ɵfac = function SimpleTableComponent_Factory(t) { return new (t || SimpleTableComponent)(); };
    SimpleTableComponent.ɵcmp = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdefineComponent"]({ type: SimpleTableComponent, selectors: [["simple-table"]], inputs: { headingsCol: "headingsCol", rowData: "rowData", cellClassName: "cellClassName", rowClassName: "rowClassName", colsTemplate: "colsTemplate", colsThTemplate: "colsThTemplate" }, features: [_angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵNgOnChangesFeature"]], decls: 8, vars: 2, consts: [[1, "headerContainerNoBootS"], [1, "tableContainerNoBootS"], [3, "ngClass", 4, "ngFor", "ngForOf"], [3, "ngClass"], [3, "ngTemplateOutlet", "ngTemplateOutletContext"], ["row", ""], [3, "ngClass", "headers", 4, "ngFor", "ngForOf"], [3, "ngClass", "headers"]], template: function SimpleTableComponent_Template(rf, ctx) { if (rf & 1) {
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "div", 0);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](1, "div", 1);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](2, "table");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](3, "thead");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](4, "tr");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](5, SimpleTableComponent_th_5_Template, 3, 6, "th", 2);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](6, "tbody");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](7, SimpleTableComponent_tr_7_Template, 3, 2, "tr", 2);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
        } if (rf & 2) {
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](5);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngForOf", ctx.headingsCol);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](2);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngForOf", ctx.rowData);
        } }, directives: [_angular_common__WEBPACK_IMPORTED_MODULE_1__["NgForOf"], _angular_common__WEBPACK_IMPORTED_MODULE_1__["NgClass"], _angular_common__WEBPACK_IMPORTED_MODULE_1__["NgTemplateOutlet"]], encapsulation: 2 });
    return SimpleTableComponent;
}());

/*@__PURE__*/ (function () { _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵsetClassMetadata"](SimpleTableComponent, [{
        type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"],
        args: [{
                selector: '<simple-table>',
                templateUrl: './simpleTable.component.html'
            }]
    }], null, { headingsCol: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"]
        }], rowData: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"]
        }], cellClassName: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"]
        }], rowClassName: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"]
        }], colsTemplate: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"]
        }], colsThTemplate: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"]
        }] }); })();


/***/ }),

/***/ "lM4W":
/*!****************************************************************!*\
  !*** ./src/app/content-app/pages/pmodello/carrello.service.ts ***!
  \****************************************************************/
/*! exports provided: CarrelloService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "CarrelloService", function() { return CarrelloService; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "fXoL");
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/common/http */ "tk/3");
//servizio per gestire il carrello



//servizio per ora con dati statici da costruire a seguito delle chiamate
//valori recuperati da collaudo
var CarrelloService = /** @class */ (function () {
    function CarrelloService(httpClient) {
        this.httpClient = httpClient;
        //componente carrello
        this.callbackprocess = true;
        this.isCarrelloVisible = false;
    }
    CarrelloService.prototype.callCarrello = function (cart) {
        console.log(cart);
        //varie chiamate al carrello
        /*callbackprocess = true;
        top.setCarrello(carr, callbackSet);
        callbacktimeout = window.setTimeout(waitForCallback, 30000);*/
        //this.isCarrelloVisible = true
    };
    CarrelloService.ɵfac = function CarrelloService_Factory(t) { return new (t || CarrelloService)(_angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵinject"](_angular_common_http__WEBPACK_IMPORTED_MODULE_1__["HttpClient"])); };
    CarrelloService.ɵprov = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdefineInjectable"]({ token: CarrelloService, factory: CarrelloService.ɵfac, providedIn: 'root' });
    return CarrelloService;
}());

/*@__PURE__*/ (function () { _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵsetClassMetadata"](CarrelloService, [{
        type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Injectable"],
        args: [{
                providedIn: 'root'
            }]
    }], function () { return [{ type: _angular_common_http__WEBPACK_IMPORTED_MODULE_1__["HttpClient"] }]; }, null); })();


/***/ }),

/***/ "oLoQ":
/*!*************************************************************************************************!*\
  !*** ./src/app/content-app/pages/pmodello/comPortafoglioTable/comPortafoglioTable.component.ts ***!
  \*************************************************************************************************/
/*! exports provided: comPortafoglioTable */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "comPortafoglioTable", function() { return comPortafoglioTable; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "fXoL");
/* harmony import */ var _pmodello_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../pmodello.service */ "bVPO");
/* harmony import */ var _components_table_simpleTable_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../components/table/simpleTable.component */ "iLV5");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/common */ "ofXK");





var _c0 = ["MacroAssetClass"];
var _c1 = ["Peso"];
var _c2 = ["AssetClass"];
var _c3 = ["Pesi"];
var _c4 = ["Importo"];
var _c5 = ["Fondo"];
var _c6 = ["btnId"];
var _c7 = ["importi"];
var _c8 = ["importoValue"];
var _c9 = ["isinValue"];
function comPortafoglioTable_ng_template_3_input_0_Template(rf, ctx) { if (rf & 1) {
    var _r22 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵgetCurrentView"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "input", 13, 14);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵlistener"]("keyup", function comPortafoglioTable_ng_template_3_input_0_Template_input_keyup_0_listener($event) { _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵrestoreView"](_r22); var ctx_r21 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵnextContext"](2); return ctx_r21.calcImporti($event, ctx_r21.DataFromService); });
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
} if (rf & 2) {
    var ctx_r19 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵnextContext"](2);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵpropertyInterpolate1"]("name", "totinv", ctx_r19.DataFromService[0].idaa, "");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵpropertyInterpolate1"]("id", "totinv", ctx_r19.DataFromService[0].idaa, "");
} }
function comPortafoglioTable_ng_template_3_Template(rf, ctx) { if (rf & 1) {
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](0, comPortafoglioTable_ng_template_3_input_0_Template, 2, 2, "input", 12);
} if (rf & 2) {
    var data_r18 = ctx.data;
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngIf", data_r18.id === "importi");
} }
function comPortafoglioTable_ng_template_5_Template(rf, ctx) { if (rf & 1) {
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](0);
} if (rf & 2) {
    var data_r23 = ctx.data;
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtextInterpolate1"](" ", data_r23.MacroAssetClass, " ");
} }
function comPortafoglioTable_ng_template_7_Template(rf, ctx) { if (rf & 1) {
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](0);
} if (rf & 2) {
    var data_r24 = ctx.data;
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtextInterpolate1"](" ", data_r24.Peso, "% ");
} }
function comPortafoglioTable_ng_template_9_div_0_Template(rf, ctx) { if (rf & 1) {
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "div", 16);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](1, "span", 17);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](2);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
} if (rf & 2) {
    var el_r27 = ctx.$implicit;
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](2);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtextInterpolate1"](" ", el_r27, " ");
} }
function comPortafoglioTable_ng_template_9_Template(rf, ctx) { if (rf & 1) {
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](0, comPortafoglioTable_ng_template_9_div_0_Template, 3, 1, "div", 15);
} if (rf & 2) {
    var data_r25 = ctx.data;
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngForOf", data_r25.AssetClass);
} }
function comPortafoglioTable_ng_template_11_div_0_Template(rf, ctx) { if (rf & 1) {
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "div", 16);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](1, "span", 17);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](2);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](3, "input", 18);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
} if (rf & 2) {
    var el_r30 = ctx.$implicit;
    var ctx_r29 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵnextContext"](2);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](2);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtextInterpolate1"](" ", el_r30, "% ");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](1);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵclassMapInterpolate1"]("pf-perc-", ctx_r29.DataFromService[0].idaa, "");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵpropertyInterpolate"]("value", el_r30);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵpropertyInterpolate2"]("id", "hperc", ctx_r29.DataFromService[0].idaa, "-", el_r30, "");
} }
function comPortafoglioTable_ng_template_11_Template(rf, ctx) { if (rf & 1) {
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](0, comPortafoglioTable_ng_template_11_div_0_Template, 4, 7, "div", 15);
} if (rf & 2) {
    var data_r28 = ctx.data;
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngForOf", data_r28.Pesi);
} }
function comPortafoglioTable_ng_template_13_div_0_Template(rf, ctx) { if (rf & 1) {
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "div", 16);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](1, "span", 17);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](2, "span", 19);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](3, "0");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](4, "input", 20, 21);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](6, "input", 20);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
} if (rf & 2) {
    var el_r33 = ctx.$implicit;
    var ctx_r32 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵnextContext"](2);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](2);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵpropertyInterpolate2"]("id", "val", ctx_r32.DataFromService[0].idaa, "-", el_r33, "");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](2);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵpropertyInterpolate2"]("id", "hval", ctx_r32.DataFromService[0].idaa, "-", el_r33, "");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](2);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵpropertyInterpolate2"]("id", "hmin", ctx_r32.DataFromService[0].idaa, "-", el_r33, "");
} }
function comPortafoglioTable_ng_template_13_Template(rf, ctx) { if (rf & 1) {
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](0, comPortafoglioTable_ng_template_13_div_0_Template, 7, 6, "div", 15);
} if (rf & 2) {
    var data_r31 = ctx.data;
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngForOf", data_r31.Importo);
} }
function comPortafoglioTable_ng_template_15_div_0_Template(rf, ctx) { if (rf & 1) {
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "div", 16);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](1, "span", 17);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](2, "a", 19);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](3, "input", 20, 22);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
} if (rf & 2) {
    var el_r38 = ctx.$implicit;
    var ctx_r37 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵnextContext"](2);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](2);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵpropertyInterpolate2"]("id", "txt", ctx_r37.DataFromService[0].idaa, "-", el_r38, "");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](1);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵclassMapInterpolate1"]("pf-isin-", ctx_r37.DataFromService[0].idaa, "");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵpropertyInterpolate2"]("id", "hisin", ctx_r37.DataFromService[0].idaa, "-", el_r38, "");
} }
function comPortafoglioTable_ng_template_15_Template(rf, ctx) { if (rf & 1) {
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](0, comPortafoglioTable_ng_template_15_div_0_Template, 5, 7, "div", 15);
} if (rf & 2) {
    var data_r36 = ctx.data;
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngForOf", data_r36.Fondo);
} }
function comPortafoglioTable_ng_template_17_div_0_Template(rf, ctx) { if (rf & 1) {
    var _r45 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵgetCurrentView"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "div", 16);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](1, "span", 17);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](2, "a", 23);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵlistener"]("click", function comPortafoglioTable_ng_template_17_div_0_Template_a_click_2_listener($event) { _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵrestoreView"](_r45); var el_r42 = ctx.$implicit; var data_r40 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵnextContext"]().data; var ctx_r43 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵnextContext"](); return ctx_r43.setFondiSuggeriti($event, data_r40.btnId.labelOv, ctx_r43.DataFromService[0].idaa, el_r42); });
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](3, "Seleziona Fondo");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
} if (rf & 2) {
    var el_r42 = ctx.$implicit;
    var ctx_r41 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵnextContext"](2);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](2);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵpropertyInterpolate2"]("id", "btn", ctx_r41.DataFromService[0].idaa, "-", el_r42, "");
} }
function comPortafoglioTable_ng_template_17_Template(rf, ctx) { if (rf & 1) {
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](0, comPortafoglioTable_ng_template_17_div_0_Template, 4, 2, "div", 15);
} if (rf & 2) {
    var data_r40 = ctx.data;
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngForOf", data_r40.btnId.idac);
} }
function comPortafoglioTable_div_20_Template(rf, ctx) { if (rf & 1) {
    var _r47 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵgetCurrentView"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "div", 24);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](1, "a", 25);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵlistener"]("click", function comPortafoglioTable_div_20_Template_a_click_1_listener() { _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵrestoreView"](_r47); var ctx_r46 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵnextContext"](); return ctx_r46.addToCart(ctx_r46.DataFromService[0].idaa); });
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](2, "aggiungi al carrello");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
} if (rf & 2) {
    var ctx_r16 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵnextContext"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵpropertyInterpolate1"]("id", "addcar", ctx_r16.DataFromService[0].idaa, "");
} }
function comPortafoglioTable_div_21_Template(rf, ctx) { if (rf & 1) {
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "div", 24);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](1, "a", 26);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](2, "aggiorna il carrello");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](3, "a", 26);
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](4, "vedi il carrello");
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
} if (rf & 2) {
    var ctx_r17 = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵnextContext"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵpropertyInterpolate1"]("id", "updcar", ctx_r17.DataFromService[0].idaa, "");
} }
var comPortafoglioTable = /** @class */ (function () {
    function comPortafoglioTable(pmodelloService) {
        this.pmodelloService = pmodelloService;
        this.handleFondiSuggeriti = new _angular_core__WEBPACK_IMPORTED_MODULE_0__["EventEmitter"]();
        this.handlecalcolaPerc = new _angular_core__WEBPACK_IMPORTED_MODULE_0__["EventEmitter"]();
        this.handleaddCart = new _angular_core__WEBPACK_IMPORTED_MODULE_0__["EventEmitter"]();
        this.colsTemplate = [];
    }
    //funzione esterna chiamata da js incluso
    comPortafoglioTable.prototype.calcImporti = function (e, valori) {
        var c = e.target.value.replace(/[^0-9]/g, '');
        e.target.value = c;
        var objToPass = {
            valori: valori,
            c: c
        };
        this.handlecalcolaPerc.emit(objToPass);
    };
    comPortafoglioTable.prototype.setFondiSuggeriti = function (ev, id, idaa, idac) {
        var importoToSend, isinToSend;
        //recupero importo e isni da mandare alla chiamata in post per recuperare i fondi suggeriti        
        importoToSend = this.pmodelloService.getArrayListV(this.importiList, 'hval' + idaa + '-' + idac);
        isinToSend = this.pmodelloService.getArrayListV(this.isinList, 'hisin' + idaa + '-' + idac);
        var objToPass = {
            p: id,
            aa: idaa,
            ac: idac,
            t: isinToSend,
            i: importoToSend
        };
        this.handleFondiSuggeriti.emit(objToPass);
    };
    comPortafoglioTable.prototype.addToCart = function (postfix) {
        this.handleaddCart.emit(postfix);
    };
    // Inizializzazione
    comPortafoglioTable.prototype.ngOnInit = function () {
        this.colsThTemplate = this.importi;
        this.colsTemplate.push(this.MacroAssetClass, this.Peso, this.AssetClass, this.Pesi, this.Importo, this.Fondo, this.btnId);
    };
    comPortafoglioTable.ɵfac = function comPortafoglioTable_Factory(t) { return new (t || comPortafoglioTable)(_angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdirectiveInject"](_pmodello_service__WEBPACK_IMPORTED_MODULE_1__["PmodelloService"])); };
    comPortafoglioTable.ɵcmp = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdefineComponent"]({ type: comPortafoglioTable, selectors: [["comPortafoglioTable"]], viewQuery: function comPortafoglioTable_Query(rf, ctx) { if (rf & 1) {
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵstaticViewQuery"](_c0, true);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵstaticViewQuery"](_c1, true);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵstaticViewQuery"](_c2, true);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵstaticViewQuery"](_c3, true);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵstaticViewQuery"](_c4, true);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵstaticViewQuery"](_c5, true);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵstaticViewQuery"](_c6, true);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵstaticViewQuery"](_c7, true);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵviewQuery"](_c8, true);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵviewQuery"](_c9, true);
        } if (rf & 2) {
            var _t = void 0;
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵqueryRefresh"](_t = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵloadQuery"]()) && (ctx.MacroAssetClass = _t.first);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵqueryRefresh"](_t = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵloadQuery"]()) && (ctx.Peso = _t.first);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵqueryRefresh"](_t = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵloadQuery"]()) && (ctx.AssetClass = _t.first);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵqueryRefresh"](_t = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵloadQuery"]()) && (ctx.Pesi = _t.first);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵqueryRefresh"](_t = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵloadQuery"]()) && (ctx.Importo = _t.first);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵqueryRefresh"](_t = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵloadQuery"]()) && (ctx.Fondo = _t.first);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵqueryRefresh"](_t = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵloadQuery"]()) && (ctx.btnId = _t.first);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵqueryRefresh"](_t = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵloadQuery"]()) && (ctx.importi = _t.first);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵqueryRefresh"](_t = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵloadQuery"]()) && (ctx.importiList = _t);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵqueryRefresh"](_t = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵloadQuery"]()) && (ctx.isinList = _t);
        } }, inputs: { textIntro: "textIntro", headingsCol: "headingsCol", cellClassName: "cellClassName", rowData: "rowData", DataFromService: "DataFromService", valueInput: "valueInput", isBtnaddCarVisible: "isBtnaddCarVisible", isBtnupDateCarVisible: "isBtnupDateCarVisible" }, outputs: { handleFondiSuggeriti: "handleFondiSuggeriti", handlecalcolaPerc: "handlecalcolaPerc", handleaddCart: "handleaddCart" }, decls: 22, vars: 8, consts: [[3, "innerHTML"], [3, "headingsCol", "rowData", "cellClassName", "colsTemplate", "colsThTemplate"], ["importi", ""], ["MacroAssetClass", ""], ["Peso", ""], ["AssetClass", ""], ["Pesi", ""], ["Importo", ""], ["Fondo", ""], ["btnId", ""], [1, "form-group", "btnWrapper"], ["class", "btn-align-right", 3, "id", 4, "ngIf"], ["class", "form-control", "type", "text", "maxlength", "10", "size", "9", 3, "name", "id", "keyup", 4, "ngIf"], ["type", "text", "maxlength", "10", "size", "9", 1, "form-control", 3, "name", "id", "keyup"], ["inputImporto", ""], ["class", "block-table", 4, "ngFor", "ngForOf"], [1, "block-table"], [1, "block-cell-table"], ["type", "hidden", 3, "value", "id"], [3, "id"], ["type", "hidden", "value", "", 3, "id"], ["importoValue", ""], ["isinValue", ""], ["type", "button", "data-toggle", "modal", "data-target", "#modaleFondiSuggeriti", 1, "btn", "btn-primary", "btn-small", 3, "id", "click"], [1, "btn-align-right", 3, "id"], ["type", "button", 1, "btn", "btn-primary", 3, "click"], ["type", "button", "id", "", 1, "btn", "btn-primary"]], template: function comPortafoglioTable_Template(rf, ctx) { if (rf & 1) {
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "div");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](1, "p", 0);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](2, "simple-table", 1);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](3, comPortafoglioTable_ng_template_3_Template, 1, 1, "ng-template", null, 2, _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplateRefExtractor"]);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](5, comPortafoglioTable_ng_template_5_Template, 1, 1, "ng-template", null, 3, _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplateRefExtractor"]);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](7, comPortafoglioTable_ng_template_7_Template, 1, 1, "ng-template", null, 4, _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplateRefExtractor"]);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](9, comPortafoglioTable_ng_template_9_Template, 1, 1, "ng-template", null, 5, _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplateRefExtractor"]);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](11, comPortafoglioTable_ng_template_11_Template, 1, 1, "ng-template", null, 6, _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplateRefExtractor"]);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](13, comPortafoglioTable_ng_template_13_Template, 1, 1, "ng-template", null, 7, _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplateRefExtractor"]);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](15, comPortafoglioTable_ng_template_15_Template, 1, 1, "ng-template", null, 8, _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplateRefExtractor"]);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](17, comPortafoglioTable_ng_template_17_Template, 1, 1, "ng-template", null, 9, _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplateRefExtractor"]);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](19, "div", 10);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](20, comPortafoglioTable_div_20_Template, 3, 1, "div", 11);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](21, comPortafoglioTable_div_21_Template, 5, 1, "div", 11);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
        } if (rf & 2) {
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](1);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("innerHTML", ctx.textIntro, _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵsanitizeHtml"]);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](1);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("headingsCol", ctx.headingsCol)("rowData", ctx.rowData)("cellClassName", ctx.cellClassName)("colsTemplate", ctx.colsTemplate)("colsThTemplate", ctx.colsThTemplate);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](18);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngIf", ctx.isBtnaddCarVisible);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](1);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngIf", ctx.isBtnupDateCarVisible);
        } }, directives: [_components_table_simpleTable_component__WEBPACK_IMPORTED_MODULE_2__["SimpleTableComponent"], _angular_common__WEBPACK_IMPORTED_MODULE_3__["NgIf"], _angular_common__WEBPACK_IMPORTED_MODULE_3__["NgForOf"]], encapsulation: 2 });
    return comPortafoglioTable;
}());

/*@__PURE__*/ (function () { _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵsetClassMetadata"](comPortafoglioTable, [{
        type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"],
        args: [{
                selector: 'comPortafoglioTable',
                templateUrl: 'comPortafoglioTable.component.html',
            }]
    }], function () { return [{ type: _pmodello_service__WEBPACK_IMPORTED_MODULE_1__["PmodelloService"] }]; }, { textIntro: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"]
        }], headingsCol: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"]
        }], cellClassName: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"]
        }], rowData: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"]
        }], DataFromService: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"]
        }], valueInput: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"]
        }], isBtnaddCarVisible: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"]
        }], isBtnupDateCarVisible: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"]
        }], handleFondiSuggeriti: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Output"]
        }], handlecalcolaPerc: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Output"]
        }], handleaddCart: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Output"]
        }], importiList: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["ViewChildren"],
            args: ["importoValue"]
        }], isinList: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["ViewChildren"],
            args: ["isinValue"]
        }], MacroAssetClass: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["ViewChild"],
            args: ['MacroAssetClass', { static: true }]
        }], Peso: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["ViewChild"],
            args: ['Peso', { static: true }]
        }], AssetClass: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["ViewChild"],
            args: ['AssetClass', { static: true }]
        }], Pesi: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["ViewChild"],
            args: ['Pesi', { static: true }]
        }], Importo: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["ViewChild"],
            args: ['Importo', { static: true }]
        }], Fondo: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["ViewChild"],
            args: ['Fondo', { static: true }]
        }], btnId: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["ViewChild"],
            args: ['btnId', { static: true }]
        }], importi: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["ViewChild"],
            args: ['importi', { static: true }]
        }] }); })();


/***/ }),

/***/ "vklR":
/*!***************************************************************************!*\
  !*** ./src/app/content-app/pages/pmodello/carrello/carrello.component.ts ***!
  \***************************************************************************/
/*! exports provided: Carrello */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "Carrello", function() { return Carrello; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "fXoL");


var Carrello = /** @class */ (function () {
    function Carrello() {
    }
    // Inizializzazione
    Carrello.prototype.ngOnInit = function () {
    };
    Carrello.ɵfac = function Carrello_Factory(t) { return new (t || Carrello)(); };
    Carrello.ɵcmp = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdefineComponent"]({ type: Carrello, selectors: [["carrello"]], decls: 2, vars: 0, template: function Carrello_Template(rf, ctx) { if (rf & 1) {
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "p");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](1, "carrello");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
        } }, encapsulation: 2 });
    return Carrello;
}());

/*@__PURE__*/ (function () { _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵsetClassMetadata"](Carrello, [{
        type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"],
        args: [{
                selector: 'carrello',
                templateUrl: 'carrello.component.html',
            }]
    }], function () { return []; }, null); })();


/***/ }),

/***/ "xR47":
/*!***************************************************************************!*\
  !*** ./src/app/content-app/components/disclaimer/disclaimer.component.ts ***!
  \***************************************************************************/
/*! exports provided: Disclaimer */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "Disclaimer", function() { return Disclaimer; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "fXoL");


var Disclaimer = /** @class */ (function () {
    function Disclaimer() {
    }
    Disclaimer.ɵfac = function Disclaimer_Factory(t) { return new (t || Disclaimer)(); };
    Disclaimer.ɵcmp = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdefineComponent"]({ type: Disclaimer, selectors: [["disclaimer"]], decls: 15, vars: 0, consts: [[1, "disclaimer"], [1, "note"]], template: function Disclaimer_Template(rf, ctx) { if (rf & 1) {
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "div", 0);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](1, "p", 1);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](2, "strong");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](3, "NOTA LEGALE");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](4, "br");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](5, " Le soluzioni guidate ");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](6, "strong");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](7, "non costituiscono una raccomandazione o un consiglio personalizzato di investire");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](8, " nei singoli fondi comuni d\u2019investimento e/o comparti di Sicav in quanto servono solo per aiutare il Cliente ad orientarsi rispetto ai profili oggettivi di rischio/rendimento indicati nei singoli prospetti informativi. Il Cliente deve valutare autonomamente se un profilo oggettivo di investimento \u00E8 affine alle proprie esigenze soggettive di investimento. I singoli fondi comuni d\u2019investimento e/o comparti di Sicav inclusi nei Portafogli Modello sono coerenti con il singolo profilo di investimento, ma potrebbero non essere adeguati alla situazione finanziaria, agli obiettivi di investimento e alla conoscenza ed esperienza di un potenziale investitore. Il Cliente, inoltre, deve considerare che i singoli fondi comuni d\u2019investimento e/o comparti di Sicav che compongono i Portafogli Modello possono avere caratteristiche e profili di rischio diversi, facilmente individuabili dalla lettura del KIID (Key Investor Information Document) che resta la prima fonte di informazioni per il sottoscrittore. In ogni caso ");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](9, "strong");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](10, "Portafogli Modello non sono vincolanti, non sono personalizzati, e rappresentano una mera esemplificazione");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](11, " di come poter effettuare investimenti in pi\u00F9 fondi. Ciascun investimento resta nella totale disponibilit\u00E0 del Cliente il quale deve anche avere cura nel tempo di seguirne l\u2019andamento in modo autonomo rispetto al portafoglio. ");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](12, "strong");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](13, "Prima dell'adesione occorre sempre leggere attentamente la documentazione d\u2019offerta");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](14, " disponibile sul sito. I rendimenti passati non sono indicativi di quelli futuri. Tutti i dati e le informazioni presenti su questa pagina sono di titolarit\u00E0 o nella piena disponibilit\u00E0 di BPM e/o di FIDA e qualsiasi riproduzione, diffusione, comunicazione o utilizzo dei medesimi \u00E8 vietata fuori dalle finalit\u00E0 private per cui sono forniti. ");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
        } }, encapsulation: 2 });
    return Disclaimer;
}());

/*@__PURE__*/ (function () { _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵsetClassMetadata"](Disclaimer, [{
        type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"],
        args: [{
                selector: '<disclaimer>',
                templateUrl: './disclaimer.component.html'
            }]
    }], null, null); })();


/***/ }),

/***/ "xbXj":
/*!******************************************************************!*\
  !*** ./src/app/content-app/pages/overview/overview.component.ts ***!
  \******************************************************************/
/*! exports provided: Overview */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "Overview", function() { return Overview; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "fXoL");


var Overview = /** @class */ (function () {
    function Overview() {
    }
    // Inizializzazione
    Overview.prototype.ngOnInit = function () {
        this.setloading();
        console.log("overview");
    };
    // Fase post inizializzazione
    Overview.prototype.ngAfterViewInit = function () {
        this.setloading(false);
    };
    Overview.ɵfac = function Overview_Factory(t) { return new (t || Overview)(); };
    Overview.ɵcmp = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdefineComponent"]({ type: Overview, selectors: [["overview"]], inputs: { navto: "navto", setloading: "setloading" }, decls: 100, vars: 0, consts: [[1, "row"], [1, "col-xs-12"], [1, "testoIcona"], [1, "glyph", "glyph-top_selection", "flLeft", "layered"], [1, "path1"], [1, "path2"], [1, "path3"], [1, "path4"], [1, "path5"], [1, "path6"], [1, "path7"], [1, "path8"], [1, "path9"], [1, "path10"], [1, "path11"], [1, "path12"], [1, "path13"], [1, "leftTesto", "glifiLeftText"], [1, "form-group", "btnWrapper"], [1, "btn-align-left"], ["href", "xxxyyyy.pdf", "title", "Visualizza la guida"], [1, "btn-align-right"], ["type", "button", "title", "Vai alla top selection", 1, "btn", "btn-primary", 3, "click"], [1, "clear"], [1, "glyph", "glyph-portafoglio_modello", "flLeft", "layered"], ["type", "button", "title", "Vai al portafoglio modello", 1, "btn", "btn-primary"], [1, "row", "banner-inv"], [1, "col-xs-3", "col-sm-2", "inv-left"], [1, "col-xs-9", "col-sm-10", "no-gutter", "inv-right"], ["type", "button", "href", "#", 1, "btn", "btn-primary"]], template: function Overview_Template(rf, ctx) { if (rf & 1) {
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "div");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](1, "h2");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](2, "Overview");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](3, "section");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](4, "h3");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](5, "Semplifica il tuo modo di investire");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](6, "p");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](7, "Le migliori soluzioni d'investimento ");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](8, "strong");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](9, "in pochi click. Potrai investire e costruire il tuo portafoglio in autonomia, orientandoti facilmente nell'universo degli oltre 3.000 Fondi e Sicav.");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](10, "section");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](11, "div", 0);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](12, "div", 1);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](13, "h4");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](14, "Top Selection");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](15, "div", 2);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](16, "span", 3);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](17, "span", 4);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](18, "span", 5);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](19, "span", 6);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](20, "span", 7);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](21, "span", 8);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](22, "span", 9);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](23, "span", 10);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](24, "span", 11);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](25, "span", 12);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](26, "span", 13);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](27, "span", 14);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](28, "span", 15);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](29, "span", 16);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](30, "div", 17);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](31, "p");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](32, "La soluzione semplice e immediata per investire in un solo fondo selezionato tra i migliori disponibili, senza rinunciare alla diversificazione che proprio i fondi e le Sicav ti offrono.");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](33, "ol");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](34, "li");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](35, "Scopri la nostra TOP SELECTION");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](36, "li");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](37, "Scegli il fondo in cui investire");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](38, "li");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](39, "Sottoscrivi il fondo in un click");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](40, "div", 18);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](41, "div", 19);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](42, "a", 20);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](43, "Guida alla Top Selection");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](44, "div", 21);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](45, "a", 22);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵlistener"]("click", function Overview_Template_a_click_45_listener() { return ctx.navto("topselection"); });
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](46, "Vai alla top selection");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](47, "br", 23);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](48, "section");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](49, "div", 0);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](50, "div", 1);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](51, "h4");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](52, "Portafoglio modello");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](53, "div", 2);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](54, "span", 24);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](55, "span", 4);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](56, "span", 5);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](57, "span", 6);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](58, "span", 7);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](59, "span", 8);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](60, "span", 9);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](61, "span", 10);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](62, "span", 11);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](63, "span", 12);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](64, "span", 13);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](65, "span", 14);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](66, "span", 15);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](67, "span", 16);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](68, "div", 17);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](69, "p");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](70, "Soluzioni intuitive e facili per costruire il tuo portafoglio e diversificarlo in massima autonomia partendo da Portafogli Modello pensati per diversi profili di investimento.");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](71, "ol");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](72, "li");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](73, "Seleziona il PORTAFOGLIO MODELLO che preferisci");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](74, "li");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](75, "Scopri la composizione del portafoglio scelto");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](76, "li");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](77, "Scegli e sottoscrivi i singoli fondi da inserire in portafoglio");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](78, "div", 18);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](79, "div", 19);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](80, "a", 20);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](81, "Guida ai Portafogli Modello");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](82, "div", 21);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](83, "a", 25);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](84, "Vai al portafoglio modello");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](85, "br", 23);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](86, "section");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](87, "div", 26);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](88, "div", 27);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](89, "div", 28);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](90, "p");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](91, "Ti potrebbe interessare anche...");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](92, "div", 18);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](93, "div", 21);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](94, "a", 29);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](95, "Soluzioni self");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](96, "div", 21);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](97, "a", 29);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtext"](98, "Piani di accumulo");
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](99, "br", 23);
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
            _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();
        } }, encapsulation: 2 });
    return Overview;
}());

/*@__PURE__*/ (function () { _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵsetClassMetadata"](Overview, [{
        type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"],
        args: [{
                selector: 'overview',
                templateUrl: './overview.component.html'
            }]
    }], function () { return []; }, { navto: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"]
        }], setloading: [{
            type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"]
        }] }); })();


/***/ }),

/***/ "zUnb":
/*!*********************!*\
  !*** ./src/main.ts ***!
  \*********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "fXoL");
/* harmony import */ var _environments_environment__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./environments/environment */ "AytR");
/* harmony import */ var _app_app_module__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./app/app.module */ "ZAI4");
/* harmony import */ var _angular_platform_browser__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/platform-browser */ "jhN1");




if (_environments_environment__WEBPACK_IMPORTED_MODULE_1__["environment"].production) {
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["enableProdMode"])();
}
_angular_platform_browser__WEBPACK_IMPORTED_MODULE_3__["platformBrowser"]().bootstrapModule(_app_app_module__WEBPACK_IMPORTED_MODULE_2__["AppModule"])
    .catch(function (err) { return console.error(err); });


/***/ }),

/***/ "zn8P":
/*!******************************************************!*\
  !*** ./$$_lazy_route_resource lazy namespace object ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function webpackEmptyAsyncContext(req) {
	// Here Promise.resolve().then() is used instead of new Promise() to prevent
	// uncaught exception popping up in devtools
	return Promise.resolve().then(function() {
		var e = new Error("Cannot find module '" + req + "'");
		e.code = 'MODULE_NOT_FOUND';
		throw e;
	});
}
webpackEmptyAsyncContext.keys = function() { return []; };
webpackEmptyAsyncContext.resolve = webpackEmptyAsyncContext;
module.exports = webpackEmptyAsyncContext;
webpackEmptyAsyncContext.id = "zn8P";

/***/ })

},[[0,"runtime","vendor"]]]);
//# sourceMappingURL=main.js.map
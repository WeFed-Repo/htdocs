(window.webpackJsonp=window.webpackJsonp||[]).push([[1],{0:function(n,o,t){n.exports=t("zUnb")},zUnb:function(n,o,t){"use strict";t.r(o);var e=t("fXoL"),i=t("jhN1"),c=t("Dti6"),l=t("ofXK"),r=function(){function n(){}return n.prototype.ngOnInit=function(){console.log("overview")},n.\u0275fac=function(o){return new(o||n)},n.\u0275cmp=e.yb({type:n,selectors:[["overview"]],decls:3,vars:0,template:function(n,o){1&n&&(e.Hb(0,"div"),e.Hb(1,"h2"),e.Qb(2,"Overview"),e.Gb(),e.Gb())},encapsulation:2}),n}(),b=function(){function n(){}return n.prototype.ngOnInit=function(){console.log("top selection")},n.\u0275fac=function(o){return new(o||n)},n.\u0275cmp=e.yb({type:n,selectors:[["top-selection"]],decls:2,vars:0,template:function(n,o){1&n&&(e.Hb(0,"h2"),e.Qb(1,"Top Selection"),e.Gb())},encapsulation:2}),n}(),u=function(){function n(){}return n.prototype.ngOnInit=function(){console.log("pmodello")},n.\u0275fac=function(o){return new(o||n)},n.\u0275cmp=e.yb({type:n,selectors:[["pmodello"]],decls:3,vars:0,template:function(n,o){1&n&&(e.Hb(0,"div"),e.Hb(1,"h2"),e.Qb(2,"Portafoglio modello"),e.Gb(),e.Gb())},encapsulation:2}),n}();function s(n,o){1&n&&e.Fb(0,"overview")}function a(n,o){1&n&&e.Fb(0,"top-selection")}function p(n,o){1&n&&e.Fb(0,"pmodello")}var f=function(n){return{selected:n}},v=function(){function n(){this.contenuto="overview",this.loadingclass="loading"}return n.prototype.naviga=function(n){this.loadingclass="loading",this.contenuto=n,this.loadingclass=""},n.prototype.ngOnInit=function(){this.naviga(this.contenuto)},n.\u0275fac=function(o){return new(o||n)},n.\u0275cmp=e.yb({type:n,selectors:[["content-app"]],inputs:{contenuto:"contenuto"},decls:21,vars:16,consts:[["id","leftmenu",1,"col-sm-12","col-md-2"],[3,"ngClass"],["title","Overview",3,"click"],["title","Top Selection",3,"click"],["title","Portafoglio modello",3,"click"],["id","contenuti",1,"contenuti","col-sm-12","col-md-10"],[4,"ngIf"]],template:function(n,o){1&n&&(e.Hb(0,"div"),e.Hb(1,"div",0),e.Hb(2,"h2"),e.Qb(3,"Soluzioni guidate"),e.Gb(),e.Hb(4,"ul"),e.Hb(5,"li",1),e.Hb(6,"a",2),e.Lb("click",function(){return o.naviga("overview")}),e.Qb(7,"Overview"),e.Gb(),e.Gb(),e.Hb(8,"li",1),e.Hb(9,"a",3),e.Lb("click",function(){return o.naviga("topselection")}),e.Qb(10,"Top Selection"),e.Gb(),e.Gb(),e.Hb(11,"li",1),e.Hb(12,"a",4),e.Lb("click",function(){return o.naviga("pmodello")}),e.Qb(13,"Portafoglio modello"),e.Gb(),e.Gb(),e.Gb(),e.Gb(),e.Hb(14,"div",5),e.Qb(15," Contenuto richiesto: "),e.Hb(16,"strong"),e.Qb(17),e.Gb(),e.Pb(18,s,1,0,"overview",6),e.Pb(19,a,1,0,"top-selection",6),e.Pb(20,p,1,0,"pmodello",6),e.Gb(),e.Gb()),2&n&&(e.xb("content-app ",o.loadingclass,""),e.wb(5),e.Mb("ngClass",e.Nb(10,f,"overview"===o.contenuto)),e.wb(3),e.Mb("ngClass",e.Nb(12,f,"topselection"===o.contenuto)),e.wb(3),e.Mb("ngClass",e.Nb(14,f,"pmodello"===o.contenuto)),e.wb(6),e.Rb(o.contenuto),e.wb(1),e.Mb("ngIf","overview"===o.contenuto),e.wb(1),e.Mb("ngIf","topselection"===o.contenuto),e.wb(1),e.Mb("ngIf","pmodello"===o.contenuto))},directives:[l.c,l.d,r,b,u],styles:[""]}),n}(),d=function(){function n(n){this.injector=n;var o=Object(c.a)(v,{injector:n});customElements.define("content-app",o)}return n.prototype.ngDoBootstrap=function(){},n.\u0275mod=e.Cb({type:n}),n.\u0275inj=e.Bb({factory:function(o){return new(o||n)(e.Ib(e.s))},providers:[],imports:[[i.a]]}),n}();i.b().bootstrapModule(d).catch(function(n){return console.error(n)})},zn8P:function(n,o){function t(n){return Promise.resolve().then(function(){var o=new Error("Cannot find module '"+n+"'");throw o.code="MODULE_NOT_FOUND",o})}t.keys=function(){return[]},t.resolve=t,n.exports=t,t.id="zn8P"}},[[0,0,5]]]);
//# sourceMappingURL=main.js.map
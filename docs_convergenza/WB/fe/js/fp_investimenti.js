$(function () {
    var tickerImgArr = [
        '<li><img src="/WB/fe/img/logo_sliderfp1.gif" alt ="Anima"></li>',
        '<li><img src="/WB/fe/img/logo_sliderfp2.gif" alt ="J.P.Morgan"></li>',
//      '<li><img src="/WB/fe/img/logo_sliderfp30.gif" alt ="J.P.Morgan Inv"></li>',
        '<li><img src="/WB/fe/img/logo_sliderfp3.gif" alt ="Epsilon"></li>',
        '<li><img src="/WB/fe/img/logo_sliderfp4.gif" alt ="Schroders"></li>',
        '<li><img src="/WB/fe/img/logo_sliderfp5.gif" alt ="TMLux"></li>',
        '<li><img src="/WB/fe/img/logo_sliderfp6.gif" alt ="M&amp;G"></li>',
        '<li><img src="/WB/fe/img/logo_sliderfp7.gif" alt ="Carmignac"></li>',
//        '<li><img src="/WB/fe/img/logo_sliderfp28.gif" alt ="Carmignac Sicav"></li>',
        '<li><img src="/WB/fe/img/logo_sliderfp8.gif" alt ="Templeton"></li>',
        '<li><img src="/WB/fe/img/logo_sliderfp9.gif" alt ="BlackRock"></li>',
        '<li><img src="/WB/fe/img/logo_sliderfp10.gif" alt ="JuliusBar"></li>',
//      '<li><img src="/WB/fe/img/logo_sliderfp11.gif" alt ="anima"></li>',
        '<li><img src="/WB/fe/img/logo_sliderfp12.gif" alt ="Eurizon"></li>',
        '<li><img src="/WB/fe/img/logo_sliderfp13.gif" alt ="DWS"></li>',
        '<li><img src="/WB/fe/img/logo_sliderfp14.gif" alt ="Pictet"></li>',
        '<li><img src="/WB/fe/img/logo_sliderfp15.gif" alt ="Allianz"></li>',
        '<li><img src="/WB/fe/img/logo_sliderfp16.gif" alt ="Pimco"></li>',
        '<li><img src="/WB/fe/img/logo_sliderfp17.gif" alt ="Fidelity"></li>',
        '<li><img src="/WB/fe/img/logo_sliderfp18.gif" alt ="MorganStanley"></li>',
        '<li><img src="/WB/fe/img/logo_sliderfp19.gif" alt ="Invesco"></li>',
        '<li><img src="/WB/fe/img/logo_sliderfp20.gif" alt ="Janus Capital Group"></li>',
        '<li><img src="/WB/fe/img/logo_sliderfp21.gif" alt ="Legg Mason"></li>',
        '<li><img src="/WB/fe/img/logo_sliderfp22.gif" alt ="Lombard Odierd"></li>',
        '<li><img src="/WB/fe/img/logo_sliderfp23.gif" alt ="HSBC"></li>',
        '<li><img src="/WB/fe/img/logo_sliderfp24.gif" alt ="Amundi"></li>',
        '<li><img src="/WB/fe/img/logo_sliderfp25.gif" alt ="NN Investment partners"></li>',
        '<li><img src="/WB/fe/img/logo_sliderfp26.gif" alt ="Raiffeisen capital management"></li>',
        '<li><img src="/WB/fe/img/logo_sliderfp27.gif" alt ="Algebris Investments"></li>'
//      ,'<li><img src="/WB/fe/img/logo_sliderfp29.gif" alt ="Etica"></li>'
    ];
    $('#ticker-content').html(tickerImgArr.join('')).webTicker({
        height: '32px',
        startEmpty: false,
        hoverpause: false
    });
});

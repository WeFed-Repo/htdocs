<style type="text/css">
	#prodottiWebank{margin:10px 0;}
	#listaProdotti{padding:5px 20px;border:1px solid #ccc;border-radius:5px 5px 0 0;}
	.boxProdotto{position:relative;float:left;height:110px;width:135px;margin-left:21px;}
	.boxProdotto:first-child{margin-left:0;}
	.boxProdotto .boxText{height:15px;}
	.boxProdotto .boxImage{height:60px;margin:5px 0;border:5px solid #eee;background-color:#fff;}
	#boxImage1{background:url(/img/ret/ico1gr_bancomat.png) no-repeat 22px 9px;}
	#boxImage2{background:url(/img/ret/ico1gr_cartajeans.png) no-repeat 22px 9px;}
	#boxImage3{background:url(/img/ret/ico1gr_cartaimprontaone.png) no-repeat 22px 9px;}
	#boxImage4{background:url(/img/ret/ico1gr_trading_pec.gif) no-repeat 38px 9px;}
	.boxProdotto .boxIcoOK{display:none;position:absolute;top:64px;left:108px;width:21px;height:19px;background:url(/img/ret/ico2inf_spunta.gif) no-repeat 0 0;}
	.boxProdotto .boxLink{height:15px;text-align:right;}
	#statoRichiesta{padding:5px 10px;border:1px solid #ccc;border-top:0 none;background-color:#eee;border-radius:0 0 33px 0;}
	#testoRichiesta{float:left;width:150px;height:20px;line-height:20px;}
	#statoRichiesta #progressoRichiesta{float:left;width:200px;height:10px;margin:5px 10px;}
	#okRichiesta{float:left;width:20px;height:20px;background:url(/wscmn/img/ico2inf_ok.gif) no-repeat 2px 3px;}
	#completaRichiesta{float:right;margin-right:20px;}
	.res-wrapper{position:relative;padding:10px;border:1px solid #ccc;border-radius:5px 5px 33px 0;height:131px;background-color:#fff;}
	.prodAcquistato .boxText, .prodAcquistato .boxLink{visibility:hidden;}
	.prodAcquistato .boxIcoOK{display:block;}
	.prodPrenotato .boxImage{border-color:#aaa;}
	.slideBack{position:absolute;top:125px;left:600px;display:block;width:20px;height:20px;border-radius: 50%;background:#8ab10b url(/wscmn/img/ret/responsive/btn_back@1x.png) no-repeat 0 0;color: #fff;text-decoration: none;text-align: center;}
</style>
<div id="prodottiWebank" class="res-container">
	<div id="richiestaProdotti" class="res-content">
		<div id="listaProdotti" class="clearfix">
			<div id="boxProdotto1" class="boxProdotto formGeneric">
				<div class="boxText">
					<input id="cbxProd1" type="checkbox" class="nobor3" value="" name="">
					<span>Bancomat</span>
					<br class="clear">
				</div>
				<div id="boxImage1" class="boxImage"></div>
				<div class="boxIcoOK"></div>
				<div class="boxLink">
					<a href="javascript:;">Dettagli</a>
				</div>
			</div>
			<div id="boxProdotto2" class="boxProdotto">
				<div class="boxText">
					<input id="cbxProd2" type="checkbox" class="nobor3" value="" name="">
					<span>Carta Je@ns</span>
					<br class="clear">
				</div>
				<div id="boxImage2" class="boxImage"></div>
				<div class="boxIcoOK"></div>
				<div class="boxLink">
					<a href="javascript:;">Dettagli</a>
				</div>
			</div>
			<div id="boxProdotto3" class="boxProdotto">
				<div class="boxText">
					<input id="cbxProd3" type="checkbox" class="nobor3" value="" name="">
					<span>Cartimpronta ONE</span>
					<br class="clear">
				</div>
				<div id="boxImage3" class="boxImage"></div>
				<div class="boxIcoOK"></div>
				<div class="boxLink">
					<a href="javascript:;">Dettagli</a>
				</div>
			</div>
			<div id="boxProdotto4" class="boxProdotto prodAcquistato">
				<div class="boxText">
					<input id="cbxProd4" type="checkbox" class="nobor3" value="" name="">
					<span>Deposito titoli</span>
					<br class="clear">
				</div>
				<div id="boxImage4" class="boxImage"></div>
				<div class="boxIcoOK"></div>
				<div class="boxLink">
					<a href="javascript:;">Dettagli</a>
				</div>
			</div>
		</div>
		<div id="statoRichiesta" class="clearfix">
			<p id="testoRichiesta">Quanto &egrave; completo il tuo conto</p>
			<div id="progressoRichiesta"></div>
			<div id="okRichiesta" style="display:none;"></div>
			<a id="completaRichiesta" href="javascript:;" class="btnformright"><img src="/img/ret/btn_left_ar.gif" alt="" /><span>completa la richiesta</span><img src="/img/ret/btn_right_ar.gif" alt="" /></a>
		</div>
	</div>
	<div id="dettaglioProdotto1" class="res-slide dettaglioProdotto">
		<div class="res-wrapper">
			<h3 class="verde">Bancomat internazionale</h3>
			<ul>
				<li>Lo utilizzi ovunque, in Italia e all'estero e <strong>prelevi gratis presso tutti gli sportelli</strong> bancomat
					di tutte le banche in area Euro.</li>
				<li>Puoi  attivare un servizio di alert per <strong>ricevere un SMS</strong> dopo ogni acquisto.
					Inoltre, con il servizio di <strong>prevenzione frodi GeoBLOCK</strong> sei tu a decidere dove e quando pu&ograve; essere utilizzato
					il tuo bancomat all'estero aumentandone così la sicurezza.</li>
				<li>Con <strong>l'opzione ExtraPrelievo</strong>: per un periodo di 2 giorni lavorativi ti permette di prelevare presso gli sportelli bancomat
					fino a un totale di 4000 &euro;, che si aggiungono al tuo consueto massimale.</li>
			</ul>
			<a href="javascript:;" class="slideBack"></a>
		</div>
	</div>
	<div id="dettaglioProdotto2" class="res-slide dettaglioProdotto">
		<div class="res-wrapper">
			<h3 class="verde">Carta ricaricabile CartaJe@ns</h3>
			<ul>
				<li>puoi utilizzarla presso tutti gli esercizi commerciali convenzionati con il <strong>circuito MasterCard</strong>,
					in Italia e all'estero e <strong>acquistare on line</strong> in tutta tranquillit&agrave;, sui siti che dispongono di questo circuito.</li>
				<li><strong>prelevare presso</strong> tutti gli sportelli bancomat abilitati al circuito MasterCard, in Italia e all'estero.</li>
				<li><strong>puoi ricaricarla</strong> on line su questo sito e presso gli sportelli bancomat delle banche aderenti al circuito QuiMultibanca,
					oppure al telefono e presso ricevitorie Sisal autorizzate.</li>
			</ul>
			<a href="javascript:;" class="slideBack"></a>
		</div>
	</div>
	<div id="dettaglioProdotto3" class="res-slide dettaglioProdotto">
		<div class="res-wrapper">
			<h3 class="verde">Carta di credito Cartimpronta</h3>
			<ul>
				<li>Canone <strong>gratuito</strong>, <strong>zero commissioni</strong> sugli acquisiti in area Euro
					su circuito MasterCard e Visa e <strong>zero spese di bollo</strong>
					(con le altre carte potresti pagare 1,81 &euro; per ogni invio di rendiconto spese)</li>
				<li><strong>Sconti</strong>, <strong>convenzioni</strong> e coperture assicurative gratuite offerte da Cartimpronta e MasterCard.</li>
				<li><strong>Ricevi</strong> sul cellulare <strong>un sms</strong> che <strong>ti avvisa</strong> delle operazioni di pagamento e ti informa sul saldo;
					gli acquisti che fai online sono protetti da usi fraudolenti mediante l'ulteriore chiave di protezione
					(MasterCard Secure Code e Verified by Visa).</li>
			</ul>
			<a href="javascript:;" class="slideBack"></a>
		</div>
	</div>
	<div id="dettaglioProdotto4" class="res-slide dettaglioProdotto">
		<div class="res-wrapper">
			<h3 class="verde">Deposito titoli</h3>
			<ul>
				<li><strong>piattaforme innovative</strong>, velocissime, affidabili, dalle prestazioni sorprendenti:
					<strong>Web</strong>, facile da usare anche da chi non ha mai fatto trading;
					<strong>T3</strong>, la più potente per il trading e completamente personalizzabile;
					<strong>T3 Open</strong>, il trading automatico configurabile con qualsiasi trading system.</li>
				<li><strong>funzioni evolute</strong>, per amplificare le opportunit&agrave; e avere tutto sotto controllo:
					marginazione,effetto leva, ordini condizionati, prestito titoli, informativa finanziaria.</li>
				<li><strong>commissioni degressive</strong>, che scendono al crescere degli ordini fino a 3 &euro; e profili su misura
					grazie alla possibilit&agrave; di scegliera tra commissioni fisse o variabili.</li>
			</ul>
			<a href="javascript:;" class="slideBack"></a>
		</div>
	</div>
</div>
<script type="text/javascript">
var resRichiesta = null;
$(function() {
	var progressoRichiesta = $("#progressoRichiesta");
	progressoRichiesta.progressbar();
	$('#listaProdotti .boxText .nobor3').each(function () {
		var el = $(this);
		el.click(function () {
			var val = progressoRichiesta.progressbar('value');
			if (el.prop('checked')) {
				$(this).closest('.boxProdotto').addClass('prodPrenotato');
				val += 25;
			} else {
				$(this).closest('.boxProdotto').removeClass('prodPrenotato');
				val -= 25;
			}
			progressoRichiesta.progressbar('value', val);
			if (val === 100) {
				$('#okRichiesta').show();
			} else {
				$('#okRichiesta').hide();
			}
		});
	});
	resRichiesta = result({
		container: $("#prodottiWebank"),
		duration: 500
	});
	$('#listaProdotti .boxLink>a').click(function () {
		var index = $(this).closest('.boxProdotto').attr('id').replace('boxProdotto', '');
		resRichiesta.slideIn($("#dettaglioProdotto" + index), 'top');
	});
	$('.dettaglioProdotto a').click(function () {
		resRichiesta.slideOut($(this).closest('.dettaglioProdotto'), 'top');
	});
});
</script>
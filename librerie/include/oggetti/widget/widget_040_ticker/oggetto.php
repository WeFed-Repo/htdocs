<div class="ticker">
	<div class="ticker-wrap">
		<ul id="ticker-content"></ul>
	</div>
</div>

<!-- WEB TICKER - https://maze.digital/webticker/ -->
<script src="/wscmn/fe/js/jquery.webticker.min.js?r=<?php echo $random ?>"></script>
<script>
	var tickerImgArr = [
		    '<li><img src="/wscmn/img/ret/logo_sliderfp1.gif" alt ="anima"></li>',
		    '<li><img src="/wscmn/img/ret/logo_sliderfp2.gif" alt ="anima"></li>',
		    '<li><img src="/wscmn/img/ret/logo_sliderfp3.gif" alt ="anima"></li>',
		    '<li><img src="/wscmn/img/ret/logo_sliderfp4.gif" alt ="anima"></li>',
		    '<li><img src="/wscmn/img/ret/logo_sliderfp5.gif" alt ="anima"></li>',
		    '<li><img src="/wscmn/img/ret/logo_sliderfp6.gif" alt ="anima"></li>',
		    '<li><img src="/wscmn/img/ret/logo_sliderfp7.gif" alt ="anima"></li>',
		    '<li><img src="/wscmn/img/ret/logo_sliderfp8.gif" alt ="anima"></li>',
		    '<li><img src="/wscmn/img/ret/logo_sliderfp9.gif" alt ="anima"></li>',
		    '<li><img src="/wscmn/img/ret/logo_sliderfp10.gif" alt ="anima"></li>',
		    '<li><img src="/wscmn/img/ret/logo_sliderfp11.gif" alt ="anima"></li>',
		    '<li><img src="/wscmn/img/ret/logo_sliderfp12.gif" alt ="anima"></li>',
		    '<li><img src="/wscmn/img/ret/logo_sliderfp13.gif" alt ="anima"></li>',
		    '<li><img src="/wscmn/img/ret/logo_sliderfp14.gif" alt ="anima"></li>',
		    '<li><img src="/wscmn/img/ret/logo_sliderfp15.gif" alt ="allianz"></li>',
		    '<li><img src="/wscmn/img/ret/logo_sliderfp16.gif" alt ="pimco"></li>',
		    '<li><img src="/wscmn/img/ret/logo_sliderfp17.gif" alt ="fidelity"></li>',
		    '<li><img src="/wscmn/img/ret/logo_sliderfp18.gif" alt ="morgan stanley"></li>',
		    '<li><img src="/wscmn/img/ret/logo_sliderfp19.gif" alt ="invesco"></li>',
		    '<li><img src="/wscmn/img/ret/logo_sliderfp20.gif" alt ="Janus Capital Group"></li>',
		    '<li><img src="/wscmn/img/ret/logo_sliderfp21.gif" alt ="Legg Mason"></li>',
		    '<li><img src="/wscmn/img/ret/logo_sliderfp22.gif" alt ="Lombard Odierd"></li>',
		    '<li><img src="/wscmn/img/ret/logo_sliderfp23.gif" alt ="HSBC"></li>',
		    '<li><img src="/wscmn/img/ret/logo_sliderfp24.gif" alt ="Amundi"></li>',
		    '<li><img src="/wscmn/img/ret/logo_sliderfp25.gif" alt ="NN Investment partners"></li>',
		    '<li><img src="/wscmn/img/ret/logo_sliderfp26.gif" alt ="Raiffeisen capital management"></li>',
		    '<li><img src="/wscmn/img/ret/logo_sliderfp27.gif" alt ="Algebris Investments"></li>'
		];
	$('#ticker-content').html(tickerImgArr.join('')).webTicker({
		height: '32px',
		startEmpty: false,
		hoverpause: false
	});
</script>

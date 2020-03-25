<!-- FUNZIONI PER EMULAZIONE *** NO SVILUPPO -->
<script type="text/javascript">
	
	function resetFeedBackForm ()
	{
		if (originalcontentChiamare)
		{
			$('chiediEspertoChiamare').innerHTML = originalcontentChiamare;
			$('chiediEspertoScrivi').innerHTML = originalcontentScrivi;
		}
	}
	
	function waitAndFeedBack (requesttype)
	{
		//check contenuto campi di testo
		var FormError = false;
		
		if (requesttype == 'chiediEspertoChiamare')
		{
			if ($('telPrefisso').value == '')
			{ 
				$('telPrefisso').className = 'prefisso error';
				FormError = true;
			}
			else
			{
				$('telPrefisso').className = 'prefisso';
			}
			
			if ($('telTelnumber').value == '')
			{ 
				$('telTelnumber').className = 'telnumber error';
				FormError = true;
			}
			else
			{
				$('telTelnumber').className = 'telnumber';
			}
			
		}
		else
		{
			var checktarea = $(requesttype).getElementsByTagName('TEXTAREA')[0];
			if (checktarea.value == '' || checktarea.value == '- Scrivi il messaggio -')
			{
				checktarea.className = 'error';
				FormError = true;
			}
			else
			{
				checktarea.className = '';
			}
		}
		
		
		if (!FormError)
		{
			//set loading
			originalcontentChiamare = $('chiediEspertoChiamare').innerHTML;
			originalcontentScrivi = $('chiediEspertoScrivi').innerHTML;
			$(requesttype).innerHTML = '<div class=\"message\"><p>Caricamento in corso...</p><img src=\"/img/ret/loading.gif\"></div>'
			if (requesttype == 'chiediEspertoChiamare')
			{
				outmessage = function() 
					{
						$(requesttype).innerHTML = '<form id="chiediespertoform01"><p><strong>Grazie per averci contattato!<br><br>Sarai contattato il giorno</strong><br>gg / mm / aaaa<br><br><strong>Nella fascia oraria</strong><br>hh:mm - hh:mm</p></form><div class="fooform"><div class="fooformright"><div><a title="Lorem ipsum" class="btnformright" href="javascript:;" onclick="javascript:boxChiediEspertoClose();resetFeedBackForm();"><img alt="" src="/img/ret/btn_left_ar.gif"/><span>chiudi</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a></div><br class="clear"/></div></div>'
					}
			}
			else
			{
				outmessage = function() 
					{
						$(requesttype).innerHTML = '<form id="chiediespertoform01"><p><strong>Grazie per averci contattato!</strong><br><br>Risponderemo al più presto alla tua segnalazione.</p></form><div class="fooform"><div class="fooformright"><div><a title="Lorem ipsum" class="btnformright" href="javascript:;" onclick="javascript:boxChiediEspertoClose();resetFeedBackForm();"><img alt="" src="/img/ret/btn_left_ar.gif"/><span>chiudi</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a></div><br class="clear"/></div></div>'
					}
			}
			//messaggio finale
			window.setTimeout(outmessage,3000);
		}
	}
	
</script>
<br/>
<script>
	function openDemo() {
			var newwindow = window.open( '/swf/demo.html','DEMO_OTC','scrollbars=no,resizable=yes,width=550,height=455,status=no,location=no,toolbar=no');
		}
</script>
<div id="azionifla">testo</div>
<script language="javascript" type="text/javascript">
	var so = new SWFObject("/wscmn/swf/bestexecution<?php if ($bank=='webank') {?>_wb<?php } ?>.swf", "azionifla", "700", "300", "8");
	so.addParam("wmode", "opaque");
	so.addParam("FlashVars", "myURL=http://www.webank.it");
	so.addParam("allowScriptAccess", "sameDomain");
	so.write("azionifla");
</script>
		<div id="BvTablePage">
              <div class="bollfrecsxb">		  
<div class="cartimpronta_lista"><img alt="" class="carttit" src="/img/ret/1px.gif"/><div class="cartcont"><p  onclick="javascript:ApriCartImpr(this);" onmouseover="javascript:this.style.cursor='pointer'" class="tit"><span><strong class="titolo">LOREM IPSUM</strong><br /><strong>Lorem ipsum dolor sit amet</strong></span><img alt="" class="bot" src="/img/ret/cartimpr_off.gif" /></p><br class="clear" /><div class="esteso"><p>Lorem ipsum dolor sit amet, <b>consectetuer adipiscing elit.</b> Curabitur erat eros, porta id, <a href="#">nonummy sed</a>, porttitor sed, libero.</p> <ul><li>Lorem ipsum dolor sit amet</li><li>Lorem ipsum dolor sit amet</li><li>Lorem ipsum dolor sit amet</li></ul><p>Phasellus fermentum metus ac augue. Curabitur id enim. Duis dolor. In hac habitasse platea dictumst. Vivamus aliquet quam at justo. Nulla eleifend erat nec felis. Sed est. Suspendisse consequat. Curabitur vitae libero. Nulla tristique. Maecenas at leo commodo massa scelerisque aliquam. Integer leo lorem, volutpat id, volutpat sed, vestibulum non, purus. Nulla tortor tellus, euismod a, vulputate vitae, dapibus eget, justo. Curabitur tempor dolor ut massa. Praesent aliquet dui id arcu. Morbi sem dolor, varius id, gravida a, consectetuer non, felis. Duis lobortis. Nunc ornare. Proin nisi sem, semper sit amet, dapibus quis, bibendum ac, sem.</p></div></div><br /><br class="clear"/></div>
<div class="cartimpronta_lista"><img alt="" class="carttit" src="/img/ret/1px.gif"/><div class="cartcont"><p  onclick="javascript:ApriCartImpr(this);" onmouseover="javascript:this.style.cursor='pointer'" class="tit"><span><strong class="titolo">LOREM IPSUM</strong><br /><strong>Lorem ipsum dolor sit amet</strong></span><img alt="" class="bot" src="/img/ret/cartimpr_off.gif" /></p><br class="clear" /><div class="esteso"><p>Lorem ipsum dolor sit amet, <b>consectetuer adipiscing elit.</b> <span class="tooltip"><a href="#1">Vestibulum aliquam dui vitae risus.<span><span><span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vestibulum placerat. Nullam nec justo eget turpis pharetra rhoncus.</span></span></span></a></span>, porta id, <a href="#">nonummy sed</a>, porttitor sed, libero.</p> <ul><li>Lorem ipsum dolor sit amet</li><li>Lorem ipsum dolor sit amet</li><li>Lorem ipsum dolor sit amet</li></ul><p>Phasellus fermentum metus ac augue. Curabitur id enim. Duis dolor. In hac habitasse platea dictumst. Vivamus aliquet quam at justo. Nulla eleifend erat nec felis. Sed est. Suspendisse consequat. Curabitur vitae libero. Nulla tristique. Maecenas at leo commodo massa scelerisque aliquam. Integer leo lorem, volutpat id, volutpat sed, vestibulum non, purus. Nulla tortor tellus, euismod a, vulputate vitae, dapibus eget, justo. Curabitur tempor dolor ut massa. Praesent aliquet dui id arcu. Morbi sem dolor, varius id, gravida a, consectetuer non, felis. Duis lobortis. Nunc ornare. Proin nisi sem, semper sit amet, dapibus quis, bibendum ac, sem.</p></div></div><br /><br class="clear"/></div>
<div class="cartimpronta_lista"><img alt="" class="carttit" src="/img/ret/1px.gif"/><div class="cartcont"><p  onclick="javascript:ApriCartImpr(this);" onmouseover="javascript:this.style.cursor='pointer'" class="tit"><span><strong class="titolo">LOREM IPSUM</strong><br /><strong>Lorem ipsum dolor sit amet</strong></span><img alt="" class="bot" src="/img/ret/cartimpr_off.gif" /></p><br class="clear" /><div class="esteso"><p>Lorem ipsum dolor sit amet, <b>consectetuer adipiscing elit.</b> Curabitur erat eros, porta id, <a href="#">nonummy sed</a>, porttitor sed, libero.</p> <ul><li>Lorem ipsum dolor sit amet</li><li>Lorem ipsum dolor sit amet</li><li>Lorem ipsum dolor sit amet</li></ul><p>Phasellus fermentum metus ac augue. Curabitur id enim. Duis dolor. In hac habitasse platea dictumst. Vivamus aliquet quam at justo. Nulla eleifend erat nec felis. Sed est. Suspendisse consequat. Curabitur vitae libero. Nulla tristique. Maecenas at leo commodo massa scelerisque aliquam. Integer leo lorem, volutpat id, volutpat sed, vestibulum non, purus. Nulla tortor tellus, euismod a, vulputate vitae, dapibus eget, justo. Curabitur tempor dolor ut massa. Praesent aliquet dui id arcu. Morbi sem dolor, varius id, gravida a, consectetuer non, felis. Duis lobortis. Nunc ornare. Proin nisi sem, semper sit amet, dapibus quis, bibendum ac, sem.</p></div></div><br /><br class="clear"/></div><br class="clear"/>
			<ul class="listafrec">
				<li><a title="#" href="#1">Lorem ipsum dolor sit amet, consectetuer</a></li>
				<li><a title="#" href="#1">Lorem ipsum dolor sit amet, consectetuer</a> (Lorem ipsum)</li>
				<li><a title="#" href="#1">Lorem ipsum dolor sit amet, consectetuer</a></li>
			</ul>
			  </div>
			  <div class="bollfrecdxc">
			  <p class="dxtitolo">Lorem ipsum</p>
				<ul class="listafrec">
					<li><a title="#" href="#1">Lorem ipsum dolor</a> (<span>xxxxx</span>)</li>
					<li><a title="#" href="#1">Lorem ipsum dolor sit amet, ipsum consectetuer</a> (<span>xxx</span>)</li>
					<li><a title="#" href="#1">Lorem ipsum dolor sit</a> (<span>xxxx</span>)</li>
					<li><a title="#" href="#1">Lorem ipsum dolor sit amet</a> (<span>xx</span>)</li>
				</ul>
				<img alt="" src="/wscmn/img/ret/str_bgbotobblig.gif"/>
			  </div>
			  <div class="cancella"></div>
			  <br />
			  
		</div>
<br /><br />

<?php virtual("/librerie/include/commons/boxeditoriali/box_black_priv_172.php"); ?>
<iframe style="visibility: hidden;z-index:1999;" id="ifr" src="/img/ret/pixel_trasp.gif" frameborder="3" height="10" scrolling="no" width="10"></iframe> 	
<script type="text/javascript">
$(document).ready(function() {
openPopOverLayer('layeralertprestiti', 'floating', 5)
})
</script>

<div class="layeralert3" id="layeralertprestiti" style="display: none;">
	<div class="head handle" onmouseover="this.style.cursor='move'; $('layeralertprestiti').dragHandle = new Draggable('layeralertprestiti',{handle: 'handle'}, { scroll: window });"></div>
		<div class="body">	
			<div class="boxrichiesta">
				<div class="steprichiesta on">
					<div class="steprichiestatit">
						<img alt="disclaimer 1" src="/img/ret/str_tit_uno_on.gif">
						<h2 class="richiestaTit">DISCLAIMER 1</h2>
						<span style="display:none" class="icospunta"><img src="/img/ret/ico2inf_spunta.png"></span>
					</div>
					<div class="steprichiestacont">
						<div id="content1">
							<p><strong>Lorem ipsum dolor sit amet</strong></p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<div class="fooform">
								<div class="fooformleft">
									<div><a title="lorem ipsum" class="btnformleft" href="javascript:;" onclick="closePopOverLayer('layeralertprestiti');openPopOverLayer('layeralertprestiti2', 'floating', 5)"><img alt="" src="/img/ret/btn_left_bi.gif"><span>non accetto</span><img alt="" src="/img/ret/btn_right_bi.gif"></a></div>	
								</div>
								<div class="fooformright">
									<div><a title="lorem ipsum" id ="btnAvanti" class="btnformright nextstep" href="javascript:;" onclick="stepRichiesta(this,false,'content1')"><img alt="" src="/img/ret/btn_left_ar.gif"><span>accetto</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div>
									<br class="clear">
								</div>
							</div>
						</div>
					</div>
				</div>
				 <div class="steprichiesta off last">
						<div class="steprichiestatit">
							<img alt="disclaimer 2" src="/img/ret/str_tit_due_off.png">
							<h2 class="richiestaTit">DISCLAIMER 2</h2>
							<span class="icospunta" style="display:none"><img src="/img/ret/ico2inf_spunta.png"></span>
						</div>
						<div class="steprichiestacont">
							<div id="content2" style="display:none">
								<p><strong>Lorem ipsum dolor sit amet</strong></p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<div class="fooform">
									<div class="fooformleft">
										<div><a title="lorem ipsum" class="btnformleft" href="javascript:;" onclick="closePopOverLayer('layeralertprestiti');openPopOverLayer('layeralertprestiti2', 'floating', 5)"><img alt="" src="/img/ret/btn_left_bi.gif"><span>non accetto</span><img alt="" src="/img/ret/btn_right_bi.gif"></a></div>	
									</div>
									<div class="fooformright">
										<div><a title="lorem ipsum" class="btnformright" href="javascript:;" onclick="closePopOverLayer('layeralertprestiti');"><img alt="" src="/img/ret/btn_left_ar.gif"><span>accetto</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div>
										<br class="clear">
									</div>
								</div>
							</div>
						</div>
						
				</div>
				 <div class="stepbottom"></div>
			</div>
		</div>
	<div class="foot"></div>
</div>



<div class="layeralert3" id="layeralertprestiti2" style="display: none;">
	<div class="head handle" onmouseover="this.style.cursor='move'; $('layeralertprestiti2').dragHandle = new Draggable('layeralertprestiti2',{handle: 'handle'}, { scroll: window });"></div>
		<div class="body">	
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
			<div class="fooform">
				<div class="fooformleft">
					<div><a title="lorem ipsum" class="btnformleft" href="#1"><img alt="" src="/img/ret/btn_left_bi.gif"><span>non accetto</span><img alt="" src="/img/ret/btn_right_bi.gif"></a></div>	
				</div>
				<div class="fooformright">
					<div><a title="lorem ipsum" class="btnformright" href="javascript:;" onclick="closePopOverLayer('layeralertprestiti2');openPopOverLayer('layeralertprestiti', 'floating', 5);stepRichiesta('#btnAvanti',false,'content1')"><img alt="" src="/img/ret/btn_left_ar.gif"><span>accetto</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div>
					<br class="clear">
				</div>
			</div>
		</div>
	<div class="foot"></div>
</div>

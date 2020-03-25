<!-- ESEMPIO JS AZIONAMENTO OVERLAYER -->
<script>
	window.onload = function()
	{
		openPopOverLayer('layeralert2', 'fixed');
	}
</script>
<!-- /ESEMPIO -->

<!-- ESEMPIO PER L'OVERLAYER -->
<div class="layeralert2" id="layeralert2" style="display: none; top: 125px">
	<div class="head" ></div>
	<div class="body">
		
		<h3 class="verde">Sottotitolo pagina</h3>
		
		<p>
			Lorem ipsum <strong>dolor</strong> sit amet consectetur adipiscing elit. Lorem ipsum <strong>dolor</strong> sit amet consectetur adipiscing elit. Lorem ipsum <strong>dolor</strong> sit amet consectetur adipiscing elit. Lorem ipsum <strong>dolor</strong> sit amet consectetur adipiscing elit. 
		</p>
 
<!-- PARAGRAFI ESPANDIBILI -->
<div class="expandables">
	<div class="expandable">
		<h4><a href="javascript:;" onclick="javascript: expandArgument (this);"><img src="/wscmn/img/ico1gr_indchiuso.gif"></a>Lorem ipsum dolor sit amet</h4>
		<div style="display:none;">
			<h5>Lorem ipsum dolor</h5>
			<p>Lorem dolor amet consectetur adipiscing dolor amet consectetur adipiscing dolor amet consectetur adipiscing dolor amet consectetur adipiscing dolor amet consectetur adipiscing</p>
		</div>
	</div>
	<div class="expandable">
		<h4><a href="javascript:;" onclick="javascript: expandArgument (this);"><img src="/wscmn/img/ico1gr_indchiuso.gif"></a>Lorem ipsum dolor sit amet</h4>
		<div style="display:none;">
			<div class="tithelp">
				<div class="helpleft">Lorem ipsum</div>
				<div align="right" class="BvTableHeaderHelp"><a href="#1"><img src="/img/ret/ico2or_help2.gif" alt="help" /></a><a href="#1" class="hlp">help</a><br class="clear" /></div>
			</div>
			<table class="form01 out">
				<tr> 
					<td ><strong>Testo di output sed diam nonummy nibh euismod tincidunt ut laoret </strong></td>
				</tr>	
			</table>
			<br class="clear">
		</div>
	</div>
	<div class="expandable">
		<h4><a href="javascript:;" onclick="javascript: expandArgument (this);"><img src="/wscmn/img/ico1gr_indchiuso.gif"></a>Lorem ipsum dolor sit amet</h4>
		<div style="display:none;">
			<h5>Lorem ipsum dolor</h5>
			<p><strong>Lorem dolor amet consectetur adipiscing</strong><br>
			Lorem ipsum dolor sit amet consectetur adipiscing elit. Adipiscing amet consectetur. Lorem ipsum dolor sit amet consectetur adipiscing elit. Adipiscing amet consectetur. Lorem ipsum dolor sit amet consectetur adipiscing elit. Adipiscing amet consectetur.</p>
		</div>
	</div>
</div>
	<br class="clear" />
		<a title="Lorem ipsum" class="btnformright" href="javascript:;" onclick="javascript: closePopOverLayer('layeralert2');"><img alt="" src="/img/ret/btn_left_ar.gif"/><span>Lorem</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a>
	<br class="clear" />
		
	</div>
	<div class="foot"></div>
</div>
<!-- /ESEMPIO PER L'OVERLAYER -->

<?php virtual ("/librerie/include/commons/titoli/tit_black_priv_004.html"); ?>
<!-- INIZIO CODICE--> 
<table class="text01">
<tr><td>Suspendisse sem mi, sodales in, <strong>porta et</strong>, consequat a, nisl. Morbi et nulla. Nulla urna. In a justo vitae eros tempor <a href="#1">placerat</a>. Phasellus semper faucibus velit. Proin elit. In hac habitasse platea dictumst. Donec purus. Donec varius egestas orci.
<span class="tooltip"><a href="#1">Vestibulum aliquam dui vitae risus.<span><span><span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vestibulum placerat. Nullam nec justo eget turpis pharetra rhoncus.</span></span></span></a></span>
<br /><br />
</td>
<td><img src="/img/ret/spazio2.gif" alt="" /></td></tr>
</table>
<!-- FINE CODICE-->

<!-- INIZIO CODICE--> 
<div class="divisorio"></div>
<table class="text01">
<tr><td><img src="/img/ret/spazio2.gif" alt="" /></td>
<td><strong class="verde">Titolo paragrafo</strong><br />Suspendisse sem mi, sodales in, porta et, <b>consequat</b> a, nisl. Morbi et nulla. Nulla urna. In a justo vitae eros tempor <a href="#1">placerat</a>. Phasellus semper faucibus velit. Proin elit. In hac habitasse platea dictumst. Donec purus. Donec varius egestas orci.
<span class="tooltip"><a href="#1">Vestibulum aliquam dui vitae risus.<span><span><span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vestibulum placerat. Nullam nec justo eget turpis pharetra rhoncus.</span></span></span></a></span>
<br /><br />
<ul>
	<li>Lorem ipsum dolor</li>
	<li>Lorem ipsum dolor</li>
</ul>
<ul class="listafrec">
	<li><a href="#1" title="#">Lorem ipsum dolor sit amet, consectetuer</a></li>
	<li><a href="#1" title="#">Lorem ipsum dolor sit amet, consectetuer</a></li>
</ul>
</td>
</tr>
</table>
<div class="fooform">
	<div class="fooformtop2"></div>	
	<div class="fooformright">
		<div><a href="#1" class="btnevid1" title="Lorem ipsum"><img src="/img/ret/btn_left_sm1.gif" alt="" /><span>lorem ipsum</span><img src="/img/ret/segnaposto_lev.gif" alt="" /><img src="/img/ret/btn_right_sm1.gif" alt="" /></a></div><div><a href="#1" class="btnevid1" title="Lorem ipsum"><img src="/img/ret/btn_left_sm1.gif" alt="" /><span>lorem ipsum</span><img src="/img/ret/segnaposto_lev.gif" alt="" /><img src="/img/ret/btn_right_sm1.gif" alt="" /></a></div><div><a href="#1" class="btnevid1" title="Lorem ipsum"><img src="/img/ret/btn_left_sm1.gif" alt="" /><span>lorem ipsum</span><img src="/img/ret/segnaposto_lev.gif" alt="" /><img src="/img/ret/btn_right_sm1.gif" alt="" /></a></div>
	<br class="clear"/>
	</div>	
<br class="clear"/>
</div>
<div class="divisorio"></div>
<!-- FINE CODICE-->
<?php virtual ("/librerie/include/commons/navigazione/nav_black_priv_015.html"); ?>
<?php virtual ("/librerie/include/commons/testi/txt_black_priv_011.html"); ?>
<iframe style="visibility: hidden;z-index:1999;" id="ifr" src="/img/ret/pixel_trasp.gif" frameborder="3" height="10" scrolling="no" width="10"></iframe> 	


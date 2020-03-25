<strong>Tooltip statico onfocus</strong>
<ol>
	<li>tipologia di tooltip small
		<span class="uniqTooltipText over static grey noAutoClosed" id="staticTooltip1">
			<span class="uniqTooltipPos"><input id="staticInput1" type="text" name="staticInput1" onfocus="createUniqTooltip(event, this, 'small');" onblur="removeUniqTooltip(event,this);"/></span>
			<span class="uniqTooltipInnerHTML">dimensione in larghezza 200px</span>
		</span>
	</li>
	<br/>
	<li>tipologia di tooltip medium
		<span class="uniqTooltipText over static" id="staticTooltip2">
			<span class="uniqTooltipPos"><input id="staticInput2" type="text" name="staticInput2" onfocus="createUniqTooltip(event, this, 'medium');" onblur="removeUniqTooltip(event,this);"/></span>
			<span class="uniqTooltipInnerHTML">dimensione in larghezza 300px</span>
		</span>
	</li><br/>
	<li>tipologia di tooltip large
		<span class="uniqTooltipText over static" id="staticTooltip3">
			<span class="uniqTooltipPos"><input id="staticInput3" type="text" name="staticInput3" onfocus="createUniqTooltip(event, this, 'large');" onblur="removeUniqTooltip(event,this);"/></span>
			<span class="uniqTooltipInnerHTML">dimensione in larghezza 400px</span>
		</span>
	</li>
</ol>
<!--strong>Tooltip dinamico onmouseover</strong>
<ol>
	<li>tipologia di tooltip 
		<span onmousemove="createUniqTooltip(event, this, 'small')" onmouseover="createUniqTooltip(event, this, 'small');" onmouseout="removeUniqTooltip(event,this);" class="uniqTooltipText" id="tooltip1">
			<span class="uniqTooltipPos">small</span>
			<span class="uniqTooltipInnerHTML">dimensione in larghezza 200px</span>
		</span>
	</li>
	<br/>
	<li>tipologia di tooltip 
		<span onmousemove="createUniqTooltip(event, this, 'medium')" onmouseover="createUniqTooltip(event, this, 'medium');" onmouseout="removeUniqTooltip(event,this);" class="uniqTooltipText" id="tooltip2">
			<span class="uniqTooltipPos">medium</span>
			<span class="uniqTooltipInnerHTML">dimensione in larghezza 300px</span>
		</span>
	</li><br/>
	<li>tipologia di tooltip 
		<span onmousemove="createUniqTooltip(event, this, 'large')" onmouseover="createUniqTooltip(event, this, 'large');" onmouseout="removeUniqTooltip(event,this);" class="uniqTooltipText" id="tooltip3">
			<span class="uniqTooltipPos">large</span>
			<span class="uniqTooltipInnerHTML">dimensione in larghezza 400px</span>
		</span>
	</li>
</ol-->
<strong>Tooltip fisso onclick</strong>
<div class="tolltipclick">
	<ol>
	
	<li><span>tipologia di tooltip</span>
	<span class="closed"><span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="documenti1"><span class="uniqTooltipPos"> <a href="javascript:;"> small</a></span>
	<span class="uniqTooltipInnerHTML">
		<p>dimensione in larghezza 200px</p>
		</span></span></span><br><br>
	</li>
	<li><span>tipologia di tooltip</span>
		<span class="closed"><span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="documenti2"><span class="uniqTooltipPos"> <a href="javascript:;"> medium </a></span>
		<span class="uniqTooltipInnerHTML">
		<p>dimensione in larghezza 300px</p>
		</span></span></span><br><br>
	</li>
	<li><span>tipologia di tooltip</span>
		<span class="closed"><span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'large')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="documenti3"><span class="uniqTooltipPos"> <a href="javascript:;"> large</a></span>
		<span class="uniqTooltipInnerHTML">
		<p>dimensione in larghezza 400px</p>
		</span></span></span><br><br>
	</li>
	</ol>

</div>

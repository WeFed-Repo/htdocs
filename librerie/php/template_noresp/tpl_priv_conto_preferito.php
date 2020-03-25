<!-- LAYER CONTO PREFWERITO -->
<div class="layeralert" id="layeralert" style="display: none;">
	<div class="head handle" onmouseover="this.style.cursor='move'; $('layeralert').dragHandle = new Draggable('layeralert',{handle: 'handle'}, { scroll: window });"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="this.parentNode.parentNode.style.display='none'; javascript: closeAlert('layeralert'); "/></div>
	<div class="body">

	<div class="important">
		<p>Le tue impostazioni sono state salvate</p>
</div><br />
	<br class="clear" />
	<a title="Lorem ipsum" class="btnformright" href="#1" onclick="javascript: closeAlert('layeralert');"><img alt="" src="/img/ret/btn_left_ar.gif"/><span>Chiudi</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a>

	<br class="clear" />
	</div>
	<div class="foot"></div>
</div>
<!-- FINE LAYER CONTO PREFERITO -->

<h1>GESTIONE PREFERENZE</h1>
<p>In questa pagina &egrave; possibile impostare il <strong>preferito</strong> tra i rapporti dello stesso tipo (nel caso siano pi&ugrave; d'uno) e, per tutti 
i rapporti in essere, abbinare al numero identificativo un <strong>nickname</strong> per facilitare il riconoscimento del tipo di rapporto.
</p>
<p>Il nickname pu&ograve; contenere fino ad un massimo di <strong>12 caratteri alfabetici.</strong></p>
<!-- codice form scegli conto preferito-->
<?php virtual ("/librerie/include/commons/form/form_090_priv.php"); ?>
<!-- fine codice form scegli conto preferito-->
<div class="fooform">
	<div class="fooformright">
		<div><a title="Lorem ipsum" class="btnformright" href="#1" onclick="javascript: openAlert('layeralert');"><img alt="" src="/img/ret/btn_left_ar.gif"/><span>salva modifiche</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a></div>
		<br class="clear"/>
	</div>	
	<br class="clear"/>
</div>


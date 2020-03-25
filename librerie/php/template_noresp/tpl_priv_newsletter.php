
<h1>newsletter</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
<div class="tithelp">
	<div class="helpleft">Indirizzo email</div>
</div>
<table class="form01 out">
	<tr>
	<td width="105" class="uno">Email</td>
	<td width="220"><strong>email@mail.com</strong></td>
	<td width="105" class="uno">&nbsp;</td>
	<td width="225"><div><a title="modifica" class="btnevid1" href="#1"><img alt="" src="/img/ret/btn_left_sm1.gif"><span>modifica</span><img alt="" src="/img/ret/btn_right_sm1.gif"></a></div></td>
	</tr>
</table>
<div class="tithelp">
	<div class="helpleft">Elenco newsletter</div>
</div>
<br class="clear" />
<!--elenco newsletter -->
<div class="boxelnews">
<div class="boxelnewstop"></div>
<script type="text/javascript">
function selNewsletter(obj) 
  { 
	 obj =$(obj);
	if(obj.checked)
	 
	 {
	 obj.up(1).addClassName('on');
	 
	 }
    else
	 {
	 obj.up(1).removeClassName('on');
	 }
  }
</script>
<div class="boxelnewsmiddle">
	 <form id="">
		 <div class="boxelnewcont sel off">
			<div class="boxelnewico"> </div>
			<label class="checknews" ><input type="checkbox" onclick="selNewsletter(this)" onmouseover="this.style.cursor = 'pointer'"><span>Tutti i profili</span></label>
		 </div>
		 <div class="boxelnewcont portSic off">
		 <div class="boxelnewico"> </div>
		   <label class="checknews"><input type="checkbox" onclick="selNewsletter(this)" onmouseover="this.style.cursor = 'pointer'"><span>Sicuro</span></label>
		 </div>
		 <div class="boxelnewcont portPr off">
		 <div class="boxelnewico"> </div>
		   <label class="checknews"><input type="checkbox" onclick="selNewsletter(this)" onmouseover="this.style.cursor = 'pointer'"><span>Prudente</span></label>
		 </div>
		  <div class="boxelnewcont portMo off">
		  <div class="boxelnewico"> </div>
		   <label class="checknews"><input type="checkbox" onclick="selNewsletter(this)" onmouseover="this.style.cursor = 'pointer'"><span>Moderato</span></label>
		 </div>
		  <div class="boxelnewcont portBi off">
		  <div class="boxelnewico"> </div>
		   <label class="checknews"><input type="checkbox" onclick="selNewsletter(this)" onmouseover="this.style.cursor = 'pointer'"><span>Bilanciato</span></label>
		 </div>
		  <div class="boxelnewcont portAg off">
		   <div class="boxelnewico"> </div>
		   <label class="checknews"><input type="checkbox" onclick="selNewsletter(this)" onmouseover="this.style.cursor = 'pointer'"><span>Aggressivo</span></label>
		 </div>
	 </form>
</div>
	<div class="boxelnewsbottom">
		<div class="fooform">
			<div class="fooformright">
				<div><a href="javascript:;" class="btnformright" title="lorem ipsum" onclick="openPopOverLayer('layeralert', 'floating', 1)"><img src="/img/ret/btn_left_ar.gif" alt=""><span>salva</span><img src="/img/ret/btn_right_ar.gif" alt=""></a></div>
			<br class="clear">
			</div>	
		<br class="clear">
		</div>
	</div>
</div>

<!--fine elenco newsletter -->

<!-- overlayer salva impostazioni scelta newsletter-->
<div id="layeralert" class="layeralert" style="display:none">
	<div class="head handle" onmouseover="this.style.cursor='move'; $('layeralert').dragHandle = new Draggable('layeralert',{handle: 'handle'}, { scroll: window });"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="closePopOverLayer('layeralert')"/></div>
	<div class="body">
		<p>Le impostazioni sono state salvate</p>
		<a onclick="javascript: closePopOverLayer('layeralert');" href="#1" class="btnformright" title="Lorem ipsum"><img src="/img/ret/btn_left_ar.gif" alt=""><span>chiudi</span><img src="/img/ret/btn_right_ar.gif" alt=""></a>
	</div>
	<div class="foot"></div>
</div>
<!-- fine overlayer salva impostazioni scelta newsletter-->
<script type="text/javascript">
	
		//funzioni per emulazione non utili allo sviluppo
		function inviacontributi()
		{
			var noerrors = true;
			
			//toglie tutti gli errori
			allinputdivs = document.getElementById('inviacontributidx').getElementsByTagName('DIV');
			
			for (i=0; i<allinputdivs.length; i++)
			{
				allinputdivs[i].className = allinputdivs[i].className.replace(' error','');
				
				if (allinputdivs[i].getElementsByTagName('INPUT')[0])
				{
					
					if(allinputdivs[i].getElementsByTagName('INPUT')[0].type != 'checkbox')
					{
						if (allinputdivs[i].getElementsByTagName('INPUT')[0].value == '')
						{
							allinputdivs[i].className =  allinputdivs[i].className + ' error';
							noerrors = false;
						}
					}
					
					else
					{
						if (!allinputdivs[i].getElementsByTagName('INPUT')[0].checked)
						{
							allinputdivs[i].className =  allinputdivs[i].className + ' error';
							noerrors = false;
						}
					}
						
				}
				
				if (allinputdivs[i].getElementsByTagName('TEXTAREA')[0])
				{
					if (allinputdivs[i].getElementsByTagName('TEXTAREA')[0].value == '')
					{
						allinputdivs[i].className =  allinputdivs[i].className + ' error';
						noerrors = false;
					}	
				}
					if (allinputdivs[i].getElementsByTagName('select')[0])
			{
			if (allinputdivs[i].getElementsByTagName('select')[0].selectedIndex == '0')
			
				{
				
				allinputdivs[i].className =  allinputdivs[i].className + ' error';
				noerrors = false;
				}	
			}
			}
			if (noerrors)
			{
				var inseritoHTML = '<img class="titolo" alt="Contributo inserito" src="/img/tit_contributoinserito.gif"/>';
				inseritoHTML = inseritoHTML + '<p><br>Grazie nickname per averci offerto il tuo prezioso contributo.<br><br>La nostra redazione lo valuter&agrave; immediatamente. Ritorna spesso su queste pagine per vedere come i desideri dei nostri clienti si trasformino in progetti concreti.</p>';
				inseritoHTML = inseritoHTML + '<a href="/connect.php?page=str_interna_pub_wb.php&amp;tpl=tpl_pub_partecipa_wb.php" id="inseriscinuovo" class="greenbutton"><span>Inserisci un nuovo contributo</span></a>';
				document.getElementById('inseriscicontributo').innerHTML = inseritoHTML;
			}
		}
	
</script>
<div class="gen" id="inseriscicontributo">
	<img class="titolo" alt="Inserisci il tuo contributo" src="/img/tit_inseriscicontributo.gif"/>
	<form method="post" action="#" id="inviacontributidx">
	<label class="informativa"><span></span>Tutti i campi sono obbligatori</label>
	<div class="fieldcategorialeft">
			<label>Categoria</label>
			<span>Verifica</span>
			<select id="idcategoria"><option>seleziona</option><option>Banking</option><option>Trading</option><option>Investimenti</option><option>Mutui e prestiti</option><option>Mobile</option><option>Sicurezza</option><option>Varie</option></select>
	</div>
	<div class="fieldcontributifull">
		<label>Inserisci il tuo contributo</label>
		<span>Verifica</span>
		<textarea id="idcontributo" onfocus="if(this.value=='Testo del contributo') this.value='';" onblur="if(this.value=='') this.value='Testo del contributo';" onkeyup="if(this.value.length>300) this.value=this.value.substring(0,300);document.getElementById('remainingchar').innerHTML= 300 - this.value.length;">Testo del contributo</textarea>
		<span class="charcounter">Max caratteri: <span id="remainingchar">300</span></span>
	</div>
	
	<div class="fieldcontributifull">
		<label>Nickname</label>
		<span>Verifica</span>
		<input id="idnicknamedx" value="" />
	</div>
			
	<div class="fieldcontributifull">
		<label>E-mail</label>
		<span>Verifica</span>
		<input id="idmaildx" value="" />
	</div>
	<div class="fieldcontributifull">
		<label>Codice</label> <a href="#" class="rightlink">Crea nuovo codice</a>
			<img src="/img/bg_captcha.gif">
	</div>
	
	<div class="fieldcontributifull">
		<label>Inserisci codice*</label>
		<span>Verifica</span>
		<input id="idinsertcod" value="" class ="nopadding"/>
	</div>
	
	
	<div class="fieldconsenso">
		<span><input type="checkbox" name="" value="" /></span>
		<label>Ho preso visione</label>
		<label>dell'<a href="">informativa</a> <span class="verifica">Verifica</span></label>
	</div>	
	
	<a class="greenbutton" href="javascript:;" onclick="javascript: inviacontributi();"><span>Invia</span></a>
	</form>
</div>
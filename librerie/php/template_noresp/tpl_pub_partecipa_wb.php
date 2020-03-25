
<?php 
	virtual ("/librerie/php/str_left_pub_wb.php");
?>
<!--- OGGETTO OVERLAYER -->
<?php
	$overlayertipo = "piaceanche";
	virtual('/librerie/include/commons/boxeditoriali/pub_wb_int_box_006.php');
?>
<!--/OGGETTO OVERLAYER -->

<div id="maincontent">
	<div class="maincontenttopper"></div>

	<!-- titolo -->
		<?php virtual("/librerie/include/commons/titoli/pub_wb_int_tit_003.php"); ?>
	<!--fine  titolo -->

<!-- contenitore contributi -->
<script type="text/javascript">
//funzioni per emulazione non utili allo sviluppo
function inviacontributi()
	{
	var noerrors = true;
	//toglie tutti gli errori
	allinputdivs = document.getElementById('inviacontributi').getElementsByTagName('DIV');
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
		
		parent.location.href = '/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_partecipa_inviato_wb.php';
		}
	}
</script>

		<p>Webank ti d&agrave; la possibilit&agrave; di inviarci suggerimenti, idee, consigli.<br />
			Nella sezione &quot;<b>Idee da realizzare</b>&quot;  trovi alcune delle proposte su cui stiamo lavorando. In &quot;<b>Idee realizzate</b>&quot; vedi i progetti conclusi.</p>
	
	<form id="inviacontributi" action="#" method="post">
		
		<label class="informativa"><span></span>Tutti i campi sono obbligatori</label>
		<div class="fieldcategorialeft">
			<label>Categoria</label>
			<span>Verifica</span>
			<select id="idcategoria"><option>seleziona</option><option>Banking</option><option>Trading</option><option>Investimenti</option><option>Mutui e prestiti</option><option>Mobile</option><option>Sicurezza</option><option>Varie</option></select>
		</div>
		
		<div class="fieldcontributifull">
			<label>Inserisci il tuo contributo</label>
			<span class="charcounter">max caratteri: <span id="remainingchar">300</span></span>
			<span>Verifica</span>
			<textarea id="idcontributo" onfocus="if(this.value=='Testo del contributo') this.value='';" onblur="if(this.value=='') this.value='Testo del contributo';" onkeyup="if(this.value.length>300) this.value=this.value.substring(0,300);document.getElementById('remainingchar').innerHTML= 300 - this.value.length;">Testo del contributo</textarea>
		</div>
		<div class="fieldcontributileft">
			<label>Nickname</label>
			<span>Verifica</span>
			<input id="idnickname" value="" />
		</div>
		<div class="fieldcontributiright">
			<label>Indirizzo e-mail per aggiornamenti sul post</label>
			<span>Verifica</span>
			<input id="idmail" value="" />
		</div>
		
		<!-- inizio captcha -->
		<div class="fieldcaptchaleft">
			<label>Codice</label> <a href="#" class="rightlink">Crea nuovo codice</a>
			<img src="/img/bg_captcha.gif">
		</div>


		<div class="fieldcaptcharight">
			<label>Inserisci codice</label>
			<span>Verifica</span>
			<input type="text">
			<div class="fieldconsenso">
			<div class="fieldconsensoleft">
				<span class="inputerror"><input type="checkbox" name="" value="" /></span><label>Ho preso visione e accetto l'<a href="#1">Informativa</a> sul trattamento dei dati personali</label><br class="clear">
				<span class="verifica"><br>Verifica</span><br class="clear">				
			</div>
			<div class="fieldconsensoright">
				<a href="javascript:;" onclick="javascript: inviacontributi();"><img src="/img/ico1gr_shortinvia.gif" title="Invia" /></a>
			</div>
		</div>
	</div>
<!-- fine inizio captcha -->
</form>

	<!-- contenitore contributi -->	
	<div id="contributi">
	
	<!-- primo elemento -->
		<div class="itemcontainer">
			<div class="itemtitle">
				<span class="left">
					<img src="/img/ico2or_icodarealizzare.gif" class="icostato" />
					<span style="float:left">
						<strong>Alberto</strong> - 22 Febbraio 2009
					</span>
					
					<span class="piaceright">
						<a href="javascript:;" onclick="openPopOverLayer('<?php print $overlayertipo;?>');" title="vota questo suggerimento" class="clspiace" rel="nofollow" ><span>mi piace</span></a>
						<a href="javascript:;" title="visualizza l'elenco di chi ha gradito questo suggerimento" class="clspiace2" onmouseout="hideTooltip(this);" onmouseover="showTooltip(this,event);" rel="nofollow">
							<span class="tooltip">
								<span class="toollarge">
									<strong>Piace a:</strong><br />
									<p class="colonna">Giovanni,<br />Antonio,<br />mmmmmmmmmmmm,<br />Giovanni,<br /> Antonio,<br />Giovanni<br />Antonio<br />Banana39<br />Giovanni,<br /> Antonio,<br/>Giovanni<br />Antonio</p>
									<p class="colonna">Banana39, <br />Giovanni,<br>mmmmmmmmmmmm, <br>Banana39<br />Banana39, <br />Giovanni,<br>Antonio, <br>Banana39<br />Banana39<br />Giovanni,<br />Antonio,</p>
									<br class="clear">... e piance anche ad altri <strong>33</strong> utenti
								</span>
							</span><img src="/img/ico2or_gradimento_notop.gif" class="icostato" alt="gradimento 3" /></a>
						</span>
					</span>
				<span class="right"><a href="#">Espandi</a></span>
			</div>
			<div class="itemtext">
				<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
				</p>
			</div>
		</div>
	<!-- fine primo elemento -->
	
	
	<!-- secondo elemento -->
		<div class="itemcontainer">
			<div class="itemtitle">
				<span class="left">
					<img src="/img/ico2or_icorealizzate.gif" class="icostato" />
					<span style="float:left">
						<strong>mmmmmmmmmmmm</strong> - 22 Febbraio 2010
					</span>
					<span class="piaceright">
						<a href="javascript:;" onclick="openPopOverLayer('<?php print $overlayertipo;?>');" title="vota questo suggerimento" class="clspiace" rel="nofollow" ><span>mi piace</span></a>
						<a href="javascript:;" title="visualizza l'elenco di chi ha gradito questo suggerimento" class="clspiace2" onmouseout="hideTooltip(this);" onmouseover="showTooltip(this,event);" rel="nofollow" >
							<span class="tooltip">
								<span class="toollarge">
									<strong>Piace a:</strong><br />
									<p class="colonna">Giovanni,<br />Antonio,<br />mmmmmmmmmmmm,<br />Giovanni,<br /> Antonio,<br />Giovanni<br />Antonio<br />Banana39<br />Giovanni,<br /> Antonio,<br/>Giovanni<br />Antonio</p>
									<p class="colonna">Banana39, <br />Giovanni,<br>mmmmmmmmmmmm, <br>Banana39<br />Banana39, <br />Giovanni,<br>Antonio, <br>Banana39<br />Banana39<br />Giovanni,<br />Antonio,</p>
									<br class="clear">... e piance anche ad altri <strong>33</strong> utenti
								</span>
							</span><img src="/img/ico2or_gradimento_top.gif" class="icostato" /></a>
					</span>
				</span>
				<span class="right"><a href="#">Espandi</a></span>
			</div>
			<div class="itemtext">
				<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"<br /><br />
					<span class="commevid">
						<strong class="commwb">Webank risponde</strong> - 12/03/2010<br/>
						Gentile <strong>mmmmmmmmmmmm</strong><br />
						prova pubblicazione, prova pubblicazione ,prova pubblicazione, prova pubblicazione, prova pubblicazione,prova pubblicazione ,prova pubblicazione
				</span>
				</p>
			</div>
		</div>
	<!-- fine secondo elemento -->
	
	
	<!-- secondo elemento -->
		<div class="itemcontainer">
			<div class="itemtitle">
				<span class="left">
					<img src="/img/ico2or_icorealizzate.gif" class="icostato" />
					<span style="float:left">
						<strong>mmmmmmmmmmmm</strong> - 22 Febbraio 2010
					</span>
					<span class="piaceright">
						<a href="javascript:;" onclick="openPopOverLayer('<?php print $overlayertipo;?>');" title="vota questo suggerimento" class="clspiace" rel="nofollow" ><span>mi piace</span></a>
						<a href="javascript:;" title="visualizza l'elenco di chi ha gradito questo suggerimento" class="clspiace2" onmouseout="hideTooltip(this);" onmouseover="showTooltip(this,event);" rel="nofollow" >
							<span class="tooltip">
								<span class="toollarge">
									<strong>Piace a:</strong><br />
									<p class="colonna">Giovanni,<br />Antonio,<br />mmmmmmmmmmmm,<br />Giovanni,<br /> Antonio,<br />Giovanni<br />Antonio<br />Banana39<br />Giovanni,<br /> Antonio,<br/>Giovanni<br />Antonio</p>
									<p class="colonna">Banana39, <br />Giovanni,<br>mmmmmmmmmmmm, <br>Banana39<br />Banana39, <br />Giovanni,<br>Antonio, <br>Banana39<br />Banana39<br />Giovanni,<br />Antonio,</p>
									<br class="clear">... e piance anche ad altri <strong>33</strong> utenti
								</span>
							</span><img src="/img/ico2or_gradimento_notop.gif" class="icostato" /></a>
					</span>
				</span>
				<span class="right"><a href="#">Espandi</a></span>
			</div>
			<div class="itemtext">
				<p>"Sed ut perspiciatis"
					
				</p>
			</div>
		</div>
	<!-- fine secondo elemento -->
	
	
	<!-- terzo elemento -->
		<div class="itemcontainer">
			<div class="itemtitle">
				<span class="left"><strong>Sara</strong> - 22 Febbraio 2010</span>
				<span class="right"><a href="#">Espandi</a></span>
			</div>
			<div class="itemtext">
				<p>bdfsgdfggfsdfg  sgdfgdfgdfgsdfggfg<br/>gsdfgfgf</p>
			</div>
		</div>
	<!-- fine terzo elemento -->
	
	<!-- quarto elemento elemento -->
		<div class="itemcontainer">
			<div class="itemtitle">
				<span class="left"><strong>Davide</strong> - 22 Febbraio 2010</span>
				<span class="right"><a href="#">Espandi</a></span>
			</div>
			<div class="itemtext">
				<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
					<br/><br/>
					<span class="commevid">
						<strong class="commwb">Webank risponde</strong> - 15/03/2010<br/>
						Gentile <strong>Davide</strong><br />
						prova pubblicazione, prova pubblicazione ,prova pubblicazione, prova pubblicazione, prova pubblicazione,prova pubblicazione ,prova pubblicazione
					</span>
				</p>
			</div>
		</div>
	<!-- fine quarto elemento -->
	
	<!-- quinto elemento elemento -->
		<div class="itemcontainer">
			<div class="itemtitle">
				<span class="left"><strong>Fabrizio</strong> - 22 Febbraio 2010</span>
				<span class="right"><a href="#">Espandi</a></span>
			</div>
			<div class="itemtext">
				<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, <br/>totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
			</div>
		</div>
	<!-- fine quinto elemento -->
	<br/>
	</div>
<!-- fine contenitore contributi -->
	<div class="filettobutton centered">
		<?php virtual("/librerie/include/commons/navigazione/pub_wb_con_nav_015.php"); ?>
	</div>

	
	</div>
<br/>
	<?php 
	virtual ("/librerie/php/str_right_pub_wb.php");
?>
<!--div class="tooltipcontainer" style="position: absolute; top: 506px; left: 760px; display: block; border:1px solid #ff0000;width:300px; height:200px;z-index:3000">
<span class="tooltip" style="visibility: visible;">
	<span class="toollarge">
		<strong>Piace a 1 utenti:</strong><br />
		<p class="colonna">chiara<br /></p>
		<p class="colonna"></p>
		
			<br class="clear">... e piace anche ad altri <strong>1</strong> utenti
		
	</span>
</span>
</div-->
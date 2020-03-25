<?php
$opened=false;
?>
<!-- INCLUSIONI ESTERNE -->
<script type="text/javascript" src="/wscmn/js/ret/priv_fes_fp_fs.js"></script>
<!-- FINE INCLUSIONI ESTERNE -->
<h1>titolo pagina</h1>
<img src="/img/ret/banner_fp_fs.jpg" alt="" />
<h2 class="titFpFs">societ&agrave; di gestione</h2>
	<p><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</strong></p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<br class="clear"/>
<!-- vetrina fondi e sicav caricata da html esterno diverso tra webank e xxx-->
<script type="text/javascript" src="/wscmn/js/jquery.bxslider.js"></script>
<?php
if ($bank=="webank")
{
?>

	<!-- regole specifiche per il carousel-->
<div id="fesFpFsCarWrapper">
		<div class="boxFpCar">
			<div id="fesFpFsBx">
				<div class="carFpSlide">
					<ul class="elencoSicav">
						<li><a href="javascript:;" data-description="DWS Investments" class="logo"><img src="/wscmn/img/ret/img_or_S-dws.gif"></a></li>
						<li><a href="javascript:;" data-description="JPMorgan Funds" class="logo"><img src="/wscmn/img/ret/img_or_S-JPMorganAM.gif"/></a></li>
						<li><a href="javascript:;" data-description="Franklin Templeton Investments" class="logo"><img  src="/wscmn/img/ret/img_or_S-Franklin.gif"></a></li>
						<li><a href="javascript:;" data-description="M & G Investments" class="logo"><img src="/wscmn/img/ret/img_or_MG.gif"></a></li>
						<li><a href="javascript:;" data-description="Morgan Stanley" class="logo"><img src="/wscmn/img/ret/img_or_S-morganstanley.gif"></a></li>
						<li><a href="javascript:;" data-description="Pictet" class="logo"><img src="/wscmn/img/ret/img_or_S-pictet.gif"></a></li>
						<li><a href="javascript:;" data-description="Pimco" class="logo"><img src="/wscmn/img/ret/img_or_S-pimco.gif"></a></li>
						<li><a href="javascript:;" data-description="Schroeder" class="logo"><img src="/wscmn/img/ret/img_or_S-schroeder.gif"></a></li>
						<li><a href="javascript:;" data-description="Julius Bar Funds" class="logo"><img src="/wscmn/img/ret/img_or_JB.gif"></a></li>
						<li><a href="javascript:;" data-description="Threadneedle" class="logo"><img src="/wscmn/img/ret/img_or_S-threadneedle.gif"></a></li>
						<li><a href="javascript:;" data-description="Allianz Global Investors" class="logo"><img src="/wscmn/img/ret/img_or_S-allianz.gif"></a></li>
						<li><a href="javascript:;" data-description="Anima Asset Management" class="logo"><img src="/wscmn/img/ret/img_or_prima_new.gif"></a></li>
					</ul>
				</div>
				<div class="carFpSlide" style="visibility:hidden">
					<ul class="elencoSicav">
						<li><a href="javascript:;" data-description="Anima" class="logo"><img src="/wscmn/img/ret/img_or_S-anima_new.gif"></a></li>
						<li><a href="javascript:;" data-description="BlackRock" class="logo"><img src="/wscmn/img/ret/img_or_S-Blackrock.gif"></a></li>
						<li><a href="javascript:;" data-description="Fondi Carmignac" class="logo"><img  src="/wscmn/img/ret/img_or_S-carmignac_fondi.gif"></a></li>
						<li><a href="javascript:;" data-description="Sicav Carmignac" class="logo"><img src="/wscmn/img/ret/img_or_S-carmignac_port.gif"></a></li>
						<li><a href="javascript:;" data-description="JPMorgan Investments Funds" class="logo"><img src="/wscmn/img/ret/img_or_S-JPMinv.gif" /></a></li>
						<li><a href="javascript:;" data-description="Epsilon" class="logo"><img src="/wscmn/img/ret/img_or_S-epsilon.gif"></a></li>
						<li><a href="javascript:;" data-description="Etica SGR" class="logo"><img  src="/wscmn/img/ret/img_or_S-etica.gif"></a></li>
						<li><a href="javascript:;" data-description="Eurizon Capital" class="logo"><img src="/wscmn/img/ret/img_or_S-Eurizon.gif"></a></li>
						<li><a href="javascript:;" data-description="Fidelity" class="logo"><img src="/wscmn/img/ret/img_or_S-fidelity.gif"></a></li>
						<li><a href="javascript:;" data-description="Invesco" class="logo"><img src="/wscmn/img/ret/img_or_S-invesco.gif"></a></li>
						<li><a href="javascript:;" data-description="Janus Capital Group" class="logo"><img src="/wscmn/img/ret/img_or_S-janus.gif"></a></li>
						<li><a href="javascript:;" data-description="Legg Mason" class="logo"><img src="/wscmn/img/ret/img_or_S_legg_mason.gif"></a></li>
					</ul>
				</div>
				<div class="carFpSlide" style="visibility:hidden">
					<ul class="elencoSicav">
						<li><a href="javascript:;" data-description="Lombard Odier" class="logo"><img src="/wscmn/img/ret/img_or_S_lombard_odier.gif"></a></li>
						<li><a href="javascript:;" data-description="HSBC" class="logo"><img src="/wscmn/img/ret/img_or_S_hsbc.gif"></a></li>
						<li><a href="javascript:;" data-description="Amundi" class="logo"><img src="/wscmn/img/ret/img_or_S_amundi.gif"></a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="boxFpCarDett" style="display:none">
		<a href="javascript:;" id="closeDett"><img src="/wscmn/img/ico1gr_close_car.png" alt ="chiudi" /></a>
		<span id="slider-prev"></span><span id="slider-next"></span>

		<div class="fesFpFsDettCont">
			<div id="fesFpFsDettBx">
				<div class="carFpSlideDett">
					<h3>Titolo 1 <img src="/img/ret/tt_disp_breve.png" alt="disponibile a breve" class="dispBreve"/></h3>
					<div class="divtabellatabs">
						<table class="tabellatabs" border="0" cellpadding="0" cellspacing="0">
						<tr>
							<td class="oninizio"></td>
							<td class="on" isselected="true"><a title="Lorem ipsum" href="javascript:;" onmouseover="newTabOn(this);" onmouseout="newTabOff(this);" onclick="switchTab('tabAlert','tab', 1, 2); newTabSelected(this);">Info</a></td><td class="on2b"> </td>
							<td class="off"><a title="Lorem ipsum" href="javascript:;" onmouseover="newTabOn(this);" onmouseout="newTabOff(this);" onclick="newTabSelected(this);">Documentazione<br/> legale</a></td><td class="off2"> </td>
						</tr>
						</table>
					</div>
					<div class="divtabellacont">
						<div  class="divtabellacontText" style="display: block;">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec bibendum egestas nisl, quis interdum libero egestas et. 
							Aliquam viverra libero vel risus posuere et lobortis arcu bibendum. Nulla consequat suscipit viverra. vitae ante non nulla euismod posuere. Mauris commodo congue venenatis. Nam id dolor vel sem elementum plac.
							</p>
							<p>Fonte: <a href="#" class="colorBank">lorem ipsum dolor</a></p>
						
						</div>
						<div class="divtabellacontText" style="display: none;">
							<div class="mutuitrasp">
								<ul>
									<li><a href="#" class="colorBank">Allianz Global Investors Fund: Informazione chiave per l'investitore (KIID), Modulo di sottoscrizione e Allegato</a></li>
									<li><a href="#" class="colorBank">Prospetto semplificato Traguardo 2017 Cedola 4 (Informazioni generali, Informazioni specifiche fondo, Modulo di sottoscrizione)</a></li>
									<li><a href="#"  class="colorBank">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec..</a></li>
									<li><a href="#"  class="colorBank">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec..</a></li>
									<li><a href="#"  class="colorBank">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec..</a></li>
								</ul>
							</div>
						</div>
						<div class="btnc aButtoncons"><a class="aButton" href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_fes_faidate_ricerca.php&codSocieta=1"><span>Compra un fondo lorem ipsum</span></a></div>
					</div>
				</div>
				<div class="carFpSlideDett">
					<h3>Titolo 2 <img src="/img/ret/tt_disp_breve.png" alt="disponibile a breve" class="dispBreve"/></h3>
					<div class="divtabellatabs">
						<table class="tabellatabs" border="0" cellpadding="0" cellspacing="0">
						<tr>
							<td class="oninizio"></td>
							<td class="on" isselected="true"><a title="Lorem ipsum" href="javascript:;" onmouseover="newTabOn(this);" onmouseout="newTabOff(this);" onclick="switchTab('tabAlert','tab', 3, 2); newTabSelected(this);">Info</a></td><td class="on2b"> </td>
							<td class="off"><a title="Lorem ipsum" href="javascript:;" onmouseover="newTabOn(this);" onmouseout="newTabOff(this);" onclick="newTabSelected(this);">Documentazione<br/> legale</a></td><td class="off2"> </td>
						</tr>
						</table>
					</div>
					<div class="divtabellacont">
						<div class="divtabellacontText" style="display: block;">
							<p>Lorem ipsum2 dolor sit amet, consectetur adipiscing elit. Donec bibendum egestas nisl, quis interdum libero egestas et. 
							Aliquam viverra libero vel risus posuere et lobortis arcu bibendum. Nulla consequat suscipit viverra. vitae ante non nulla euismod posuere. Mauris commodo congue venenatis. Nam id dolor vel sem elementum plac.
							</p>
							<p>Fonte: <a href="#" class="colorBank">lorem ipsum dolor</a></p>
						
						</div>
						<div class="divtabellacontText" style="display: none;">
							<div class="mutuitrasp">
								<ul>
									<li><a href="#" class="colorBank">Allianz2 Global Investors Fund: Informazione chiave per l'investitore (KIID), Modulo di sottoscrizione e Allegato</a></li>
									<li><a href="#" class="colorBank">Prospetto semplificato Traguardo 2017 Cedola 4 (Informazioni generali, Informazioni specifiche fondo, Modulo di sottoscrizione)</a></li>
									<li><a href="#"  class="colorBank">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec..</a></li>
									<li><a href="#"  class="colorBank">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec..</a></li>
									<li><a href="#"  class="colorBank">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec..</a></li>
								</ul>
							</div>
						</div>
						<div class="btnc aButtoncons"><a class="aButton" href="javascript:;"><span>Compra un fondo lorem ipsum</span></a></div>
					</div>
				</div>
				<div class="carFpSlideDett">dett3</div>
				<div class="carFpSlideDett">dett4</div>
				<div class="carFpSlideDett">dett5</div>
				<div class="carFpSlideDett">dett6</div>
				<div class="carFpSlideDett">dett7</div>
				<div class="carFpSlideDett">dett8</div>
				<div class="carFpSlideDett">dett9</div>
				<div class="carFpSlideDett">dett10</div>
				<div class="carFpSlideDett">dett11</div>
				<div class="carFpSlideDett">dett12</div>
				<div class="carFpSlideDett">dett13</div>
				<div class="carFpSlideDett">dett14</div>
				<div class="carFpSlideDett">dett15</div>
				<div class="carFpSlideDett">dett16</div>
				<div class="carFpSlideDett">dett17</div>
				<div class="carFpSlideDett">dett18</div>
				<div class="carFpSlideDett">dett19</div>
				<div class="carFpSlideDett">dett20</div>
				<div class="carFpSlideDett">dett21</div>
				<div class="carFpSlideDett">dett22</div>
				<div class="carFpSlideDett">dett23</div>
				<div class="carFpSlideDett"></div>
				<div class="carFpSlideDett">dett25</div>
				<div class="carFpSlideDett">dett26</div>
			</div>
		</div>
		</div>
		<br class="clear" />
	</div>

<?php } else	{ ?>
<?php 
	virtual ("/wscmn/html/fes_fp_fs_xxBanking.html");
?>
<?php }	?>	
<!--fine vetrina fondi e sicav caricata da html esterno diverso tra webank e xxx-->
<?php
if ($bank=="webank")
{
?>
<!--<h2 class="titGeneric txtSize20 txtTransformUpper colorDark3 txtAlCenter paddBottomMedium">lorem ipsum dolor sit</h2>
<div class="boxFpCar">
	<h2 class="titGeneric02 colorDark3 txtTransformUpper paddBottomMedium">Loremipsum dolor sit lorem</h2>
	<br class="clear">
	 <div class="row-fluid">
		<div class="flLeft paddRightMedium">
			<img src="/img/ret/ico_top_selection.gif" alt=""/>
		</div>
		<div>
			<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atquexe 
corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpaer
qui officia deserunt mollitia animi, id est laborum et dolfuga.</p>
            <div class="btnc aButtoncons"><a href="javascript:;" class="aButton"><span class="txtTransformLower">Lorem ipsum dolor si</span></a></div>
		</div>
	 </div>
	 <br class="clear">
</div>

<div class="row-fluid">
	<div class="span6">
		<div class="boxFpCar">	
			<h2 class="titGeneric02 colorDark3 txtTransformUpper paddBottomMedium">Loremipsum dolor sit lorem</h2>
			<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atquexe 
corrupti quos dolores </p>
			<div class="btnc aButtoncons"><a href="javascript:;" class="aButton"><span class="txtTransformLower">lorem ipsum</span></a></div>
		</div>
	</div>
		<div class="span6">
		<div class="boxFpCar">	
			<h2 class="titGeneric02 colorDark3 txtTransformUpper paddBottomMedium">Loremipsum dolor sit lorem</h2>
			<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atquexe 
corrupti quos dolores </p>
			<div class="btnc aButtoncons"><a href="javascript:;" class="aButton"><span class="txtTransformLower">lorem ipsum</span></a></div>
		</div>
	</div>
</div>-->
<div class="nostraOffertaTop">
		<div class="nostraOffertaTopText hidden-xs">
			<h2>Semplifica il tuo modo di investire</h2>
			<p>La <strong>soluzione su misura per te</strong>, pensata per farti cogliere le <strong>migliori opportunit&agrave;</strong> di investimento nell'ampia gamma di fondi delle migliori Case di Gestione offerta da Webank.<br>
             <strong>Scopri i servizi esclusivi a tua disposizione:</strong></p>
		</div>
		<div class="nostraOffertaTabber outerFpFsTab">
			<div class="row no-gutter">
				<?php
				if ($opened==true)
				{
				?>
				<div class="col-xs-6  nostraOffertaTab active">
				<?php } else	{ ?>
				<div class="col-xs-6  nostraOffertaTab">
				<?php }	?>		
					<div class="inner">
						<h3>Soluzioni Guidate</h3>
							<div class="iconeTabWrapper">
								<span class="glyph glyph-top_selection"></span>
								<span class="glyph glyph-portafoglio_modello"></span>
							</div>
						<p class="hidden-xs">Orientarti nella scelta dei migliori Fondi e Sicav per costruirti un <strong>portafoglio diversificato o investire in un singolo fondo</strong> diventa pi&ugrave; <strong>semplice</strong> grazie agli strumenti esclusivi a tua disposizione.</p>
						<div class="aButtonconsWrapper">
							<div class="aButtoncons formCenteredBtn">
								<a href="javascript:;" class="aButton"><span>scopri le soluzioni</span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 nostraOffertaTab">
					<div class="inner">
						<h3>Soluzioni Self</h3> 
						 <div class="iconeTabWrapper">
							<span class="glyph glyph-ricerca_confronta"></span>
						</div>
						<p class="hidden-xs"><strong>A tua disposizione i migliori strumenti innovativi</strong> ed <strong>evoluti, informazioni approfondite</strong>, schede di dettaglio sempre aggiornate su Case di Gestione, Fondi e Sicav. Costruisci in piena <strong>autonomia</strong> il tuo portafoglio.</p>
						<div class="aButtonconsWrapper">	
							<div class="aButtoncons formCenteredBtn">
								<a href="javascript:;" class="aButton"><span>scopri le soluzioni</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>

<br class="clear"><br><br><img src="/img/ret/str_imm_ingombro.gif" alt="lorem ipsum" title="lorem ipsum">
<?php } else	{ ?>	
<div class="boxFpCar">
	<h2 class="titGeneric02 colorDark3 txtTransformUpper paddBottomMedium">Loremipsum dolor sit lorem</h2>
	<br class="clear">
	<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atquexe 
	corrupti quos dolores </p>
	<a href="javascript:;" class="aButton flRight"><span class="txtTransformLower">lorem ipsum</span></a>
	<br class="clear">
</div>
<?php }	?>	
<script type="text/javascript">
// Attiva direttamente la scheda fondo
fesFpFsStart();
</script>



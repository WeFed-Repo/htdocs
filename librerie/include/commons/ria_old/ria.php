<script type="text/javascript">
	var sitoBanking = '<?php echo $sitoBanking ?>';
	var urlFpInv = '';
	var isComunita200Mov = false;
	/*** VALORI ***
		BPMBANKING,
		BLBANKING,
		CRABANKING,
		WEBANK,
		MOL,
		INTER,
		ILN,
		BMBANKING,
		WSADMIN;
	*/

<?php 	// Permette le chiamate dispositive
	if ($abilOroCap) {  ?>
		var abilOroCap = true;
<?php 	} else {  ?>
		var abilOroCap = false;
<?php 	}
	//$permettiDispositive = false;
 	// Permette le chiamate dispositive
	if ($permettiDispositive) {  ?>
		var pDis = true;
<?php 	} else {  ?>
		var pDis = false;
<?php 	}

	// Permette di creare un piano risparmio
	if ($permettiCreaPiano) {  ?>
		var pCP = true;
<?php 	} else {  ?>
		var pCP = false;
<?php 	}

	// Definisce se si è in Webank o xxxBanking
	if ($isWebank) {  ?>
		var isWebank = true;
<?php 	} else {  ?>
		var isWebank = false;
<?php 	}  ?>
	var isComunita200Mov = true;
	var rbfLinkObj = {
		'bonifico': 'BON',
		'giroconto': 'GIR',
		'carta': 'CJ'
	};
</script>

<div id="layerBianco" ><img src="/img/ret/ico2inf_loading.gif">caricamento in corso...</div >

<!-- div per visualizzazione errori nel caricamento della RIA -->

<div id="errorDiv0" style="display: none;">
	<div class="errorDiv">
	<div class="boxtop"><img src="/img/ret/box_msgtop.jpg" class="border" /></div>
	<div class="boxtxt">
		<p class="box_mess">
			<img src="/img/ret/img_or_alertria.gif" alt="" class="dx" />
			<span class="attenzione">ATTENZIONE</span><br>
			<ul class="alert">
				<span id="errorContent0"></span>
			</ul>
		</p>
	</div>
    <br class="clear">
	<div class="boxbottom"><img src="/img/ret/box_msgbottom.jpg" class="border" /></div>
	</div>
</div>
<div class="clear"></div>
<div id="selez">
    <table id="ctnboxtable" cellpadding="0" cellspacing="0" style="display: table;">
        <tbody>
            <tr>
                <td class="tdlabel">Stai operando sul <?php echo $contoLabelShortSingLow ?>:</td>
                <td valign="bottom">
                    <div class="txtIbanLf">
                        <select onchange="cambiaConto();" id="selectConti" name="selectConti" class="form-control">
							<option accountidtoshow="CT 01069 0000027152 EUR" accountid="01069 - 0000027152 - EUR" value="01069 - 0000027152 - EUR">CT 01069 0000027152 EUR</option>
							<option accountidtoshow="CT 01069 0000026986 EUR +DER" accountid="01069 - 0000026986 - EUR" value="01069 - 0000026986 - EUR">CT 01069 0000026986 EUR +DER</option>
							<option accountidtoshow="CC 00599 0000089342 EUR" accountid="00599 - 0000089342 - EUR" value="00599 - 0000089342 - EUR">CC 00599 0000089342 EUR</option>
							<option accountidtoshow="CC 00599 0000074978 EUR +DER" accountid="00599 - 0000074978 - EUR" value="00599 - 0000074978 - EUR">CC 00599 0000074978 EUR +DER</option>
							<option accountidtoshow="EMpos0 CC 00599 0000099102 EUR +DEP" accountid="00599 - 0000099102 - EUR" value="00599 - 0000099102 - EUR" selected="selected">EMpos0 CC 00599 0000099102 EUR +DEP</option>
							<option accountidtoshow="EMpos1 CC 00599 0000099112 EUR +DEP" accountid="00599 - 0000099112 - EUR" value="00599 - 0000099112 - EUR">EMpos1 CC 00599 0000099112 EUR +DEP</option>
							<option accountidtoshow="EMsenza0 CC 00599 0000099103 EUR +DEP" accountid="00599 - 0000099103 - EUR" value="00599 - 0000099103 - EUR">EMsenza0 CC 00599 0000099103 EUR +DEP</option>
							<option accountidtoshow="EMsenza1 CC 00599 0000099113 EUR +DEP" accountid="00599 - 0000099113 - EUR" value="00599 - 0000099113 - EUR">EMsenza1 CC 00599 0000099113 EUR +DEP</option>
							<option accountidtoshow="EMsenza2 CC 00599 0000099123 EUR +DEP" accountid="00599 - 0000099123 - EUR" value="00599 - 0000099123 - EUR">EMsenza2 CC 00599 0000099123 EUR +DEP</option>
							<option accountidtoshow="EMsenza3 CC 00599 0000099133 EUR +DEP" accountid="00599 - 0000099133 - EUR" value="00599 - 0000099133 - EUR">EMsenza3 CC 00599 0000099133 EUR +DEP</option>
							<option accountidtoshow="CC 00599 0000081080 EUR +DEP +DER" accountid="00599 - 0000081080 - EUR" value="00599 - 0000081080 - EUR">CC 00599 0000081080 EUR +DEP +DER</option>
						</select>
                        <a href="javascript:openStarAlert2('01099 - 0000072608 - EUR', 'CC 01099 0000072608 EUR +DER')" title="La stella indica il conto che hai impostato come preferito" class="preferito" id="selectConti_star_el"><img src="/img/ico1gr_preferito.gif" alt="Conto preferito" id="selectConti_star_img"></a>
                        <div class="layeralert" id="starAlert2" style="display: none;">
                            <div class="head handle" onmouseover="this.style.cursor='move'; $('starAlert2').dragHandle = new Draggable('starAlert2',{handle: 'handle'}, { scroll: window });"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="javascript: closeAlert('starAlert2'); "></div>
                            <div class="body">
                                <div class="important">
                                    <p>Il conto</p>
                                    <span><strong id="accountIdToShow_2">CC 01099 0000072608 EUR +DER</strong></span>
                                    <br>
                                    <br>
                                    <p>È già impostato come preferito. Per impostare un altro conto preferito oppure scegliere o cambiare nickname clicca su "Impostazioni preferenze".</p>
                                </div>
                                <br class="clear">
                                <a title="impostazioni preferenze" class="btnformright" href="/webankpri/wbOnetoone/2l/do/bnkg/accountprefs.do?OBSCNT=TAB&amp;tabId=nav_priv_wbx_myhome&amp;OBSKEY=nav_priv_wbx_conto_pref_nickname&amp;OBSKEY3=nav_priv_wbx_conto_pref_nickname"><img alt="" src="/img/ret/btn_left_ar.gif"><span>impostazioni preferenze</span><img alt="" src="/img/ret/btn_right_ar.gif"></a>
                                <a title="Chiudi" class="btnformright" href="#1" onclick="javascript: closeAlert('starAlert2');"><img alt="" src="/img/ret/btn_left_ar.gif"><span>Chiudi</span><img alt="" src="/img/ret/btn_right_ar.gif"></a>
                                <br class="clear">
                            </div>
                            <div class="foot"></div>
                        </div>
                        <strong id="contoUnico"></strong>
                    </div>
                    <div class="icoIbanRg">
                        <input type="checkbox" id="nascondi" name="nascondi">&nbsp;
                        <label id="nascondiLabel" for="nascondi">nascondi i dati</label>
                    </div>
                </td>
                <td></td>
            </tr>
<?php
if ($isBpm) {
?>
			<tr>
				<td></td>
				<td colspan="2"><strong>CC 00000 0000055468 EUR</strong>: Vuoi operare su questo conto? <a href="javascript:;" onclick="layerconti('<%=conto_bloccato %>','<%=intestatari %>');"><strong>Leggi</strong></a></td>
			</tr>
			<div style="display: none;" id="layeralertconti" class="layeralert3">
				<div onmouseover="this.style.cursor='move'; $('layeralertconti').dragHandle = new Draggable('layeralertconti',{handle: 'handle'}, { scroll: window });" class="head handle"><img onclick="closePopOverLayer('layeralertconti')" alt="chiudi" src="/img/ret/layeralert_x.gif"></div>
				<div class="body">
					<div class="boxesito attenzione">
						<div class="middle"><span class="imgCont"></span>
							<div class="text">
								<div class="row-fluid" id="contenuto">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="foot"></div>
			</div>
<?php } ?>
			<tr>
				<td colspan="3"><div class="filRiaRapp"></div></td>
			</tr>
			<tr id="showIban" style="display:none;">
				<td>Il tuo IBAN</td>
				<td valign="top">
					<div class="txtIbanLf">	
						<strong id="ibanCCEst"></strong>
					</div>
					<div class="icoIbanRg">			
						<a id="LBlinkDettagliCoordinateEst" href="" title="Dettagli"><img id="" src="/img/ret/ico1gr_dettaglio.gif" alt="Dettagli"></a>
						<a id="LBlinkInviaCoordinateEst" href="javascript:;" title="Invia per email"><img id="" src="/img/ret/ico1gr_mail.gif" alt="Invia per email"></a>
						<a id="LBlinkStampaCoordinateEst" target ="blank" href="javascript:;" title="Stampa"><img id="" src="/img/ret/ico1gr_stampa.gif" alt="Stampa"></a>				
					</div>
				</td>
				<td></td>
			</tr>
		</tbody>
	</table>
	
	<div style="display: none;" id="layeralert03b" class="layeralert3">
		<div onmouseover="this.style.cursor='move'; $('layeralert03b').dragHandle = new Draggable('layeralert03b',{handle: 'handle'}, { scroll: window });" class="head handle"><img onclick="closePopOverLayer('layeralert03b')" alt="chiudi" src="/img/ret/layeralert_x.gif"></div>
		<div class="body">
			<div class="boxesito attenzione">
				<div class="middle"><span class="imgCont"></span>
					<div class="text">
						<div class="row-fluid">
							<div class="span12">
								<p><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
							et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p>
							</div>							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="foot"></div>
	</div>
</div>

<div id="contenuti545" class="clearfix" style="display: none;">
    <div class="tabContainer1">
        <div id="tabRia1" class="tabRiaOn">
			<div class="tabRiaCont" id="caric1">Situazione attuale</div>
		</div>
<?php
	if ($permettiDispositive) {
?>
        <div id="tabRia2" class="tabRia">
			<div class="tabRiaCont" id="caric2">Trasferimenti c/c &lt;&nbsp;&gt; dep</div>
        </div>
<?php
	}

	if ($isWebank) {
?>
        <div id="tabRia3" class="tabRia">
			<div class="tabRiaCont" id="caric3">Linee vincolate</div>
        </div>
<?php 	
		if (!$permettiCreaPiano) {
?>
        <div id="tabRia4" class="tabRia" style="display: none;">
			<div class="tabRiaCont" id="caric4">Realizza desideri</div>
        </div>
<?php
  		}
	}
?>

<?php
	if ($permettiDispositive) {
?>
        <div id="tabRia5" class="tabRia" style="display: none;">
			<div class="tabRiaCont" id="caric8">Trasferimenti  <span class="arrowC"><span class="arrowDl">&#8592;</span><span class="arrowLd">&#8594;</span></span> Risparmio Ben Fatto</div>
		 </div>
<?php
	}
	if ($isBpm) {
?>
		 <div id="tabRia6" class="tabRia">
			<div class="tabRiaCont" id="caric9">Gestione Risparmio Ben Fatto</div>
		 </div>
<?php
	}
?>
        <div class="clear"></div>
    </div>
<?php
	if ($permettiDispositive) {
?>
<div class="tutorial<?php if (!$isWebank) { ?> xxxBank<?php } ?>" style="display:none" id="btnTutorial">
	<a href="javascript:;" onclick="openTutorial();" title="Tutorial"><?php
		if ($isWebank) {
?>Tutorial<?php
		} else {
?><img src="/img/ret/ico1bt_tutorial.gif" /><?php
		}
?></a>
</div>	
<?php
	}
?>
	<!-- situazione attuale -->
	<?php virtual("/librerie/include/commons/ria_old/part/contentRia1.php") ?>
	<!-- /situazione attuale -->

<?php
	if ($permettiDispositive) {
?>
    <!-- trasferimenti -->
	<?php virtual("/librerie/include/commons/ria_old/part/contentRia2.php") ?>
	<!-- /trasferimenti -->
	 
	<!-- trasferimenti vs evo -->
	<?php virtual("/librerie/include/commons/ria_old/part/contentRia5.php") ?>
	<!-- /trasferimenti -->
<?php
	}

	if ($isWebank) {
?>
    <!-- vincolate -->
	<?php virtual("/librerie/include/commons/ria_old/part/contentRia3.php") ?>
    <!-- /vincolate -->
<?php
	} elseif ($isBpm) {
?>
	<!-- gestione evo -->
	<?php virtual("/librerie/include/commons/ria_old/part/contentRia6.php") ?>
	<!-- /gestione evo -->
<?php
	}
	
	if ($permettiCreaPiano) {
?>	
    <!-- pianifica -->
	<?php virtual("/librerie/include/commons/ria_old/part/contentRia4.php") ?>
	<!-- /pianifica -->
<?php
	}
?>
	<div id="progressBar" style="display: none;">
        <div>
			<img src="/img/ret/loading.gif" alt=" " />
		</div>
	</div>
</div>

<!-- popup conferme -->
<?php virtual("/librerie/include/commons/ria_old/part/popUpConferme.php") ?>
<!-- /popup conferme -->

<!-- versione 1 -->
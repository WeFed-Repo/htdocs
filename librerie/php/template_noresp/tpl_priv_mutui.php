<link href="/mol-pol/Stile/webank_3_v1_mutui.css" rel="stylesheet">
<style>
table.label_off,div.SfondoTesto,table.label_on {width:100%}
td.label_txt {width:80%}
</style>
<script>

		var N4 = document.layers?true:false;
		var DOM2 = document.getElementById?true:false;
		var RollerLayer = new Array();
		var RollerLayer2 = new Array();
		var RollerLayer3 = new Array();
		var LastLiv = null;
		var LastLiv2 = null;
		var numtab = 6;

		function Inizia() {
			for (i=1 ; i<numtab ; i++){
				RollerLayer[i]=N4?document.layers["esperto"+i]:DOM2?document.getElementById("esperto"+i).style:document.all["esperto"+i].style;
				RollerLayer2[i]=N4?document.layers["freccia"+i]:DOM2?document.getElementById("freccia"+i).style:document.all["freccia"+i].style;
				RollerLayer3[i]=N4?document.layers["link"+i]:DOM2?document.getElementById("link"+i).style:document.all["link"+i].style;
			}
		}

		function ShowLayer(n) {
			for (i=1 ; i<numtab ; i++) RollerLayer[i].visibility = "hidden";
				RollerLayer[n].visibility="visible";
				LastLiv=n;
		}

		function HideLayer() {
			RollerLayer[LastLiv].visibility = "hidden";
		}

		function ShowLayer2(n) {
			for (i=1 ; i<numtab ; i++) RollerLayer2[i].visibility = "hidden";
			RollerLayer2[n].visibility="visible";
			LastLiv2=n;
		}

		function HideLayer2() {
			RollerLayer2[LastLiv2].visibility = "hidden";
		}

		function FrecciaOn(n) {
			RollerLayer2[n].visibility="visible";
		}
		
		function FrecciaOff(n){
			if (LastLiv2 != n) RollerLayer2[n].visibility = "hidden";
		}
		
		onload=Inizia;
		
		function Label(Tab) {
			for (i=1 ; i<numtab ; i++) {
				document.getElementById('box'+i).className='label_off';
				document.getElementById('link'+i).className='cons_esperto';
			}

			document.getElementById('box'+Tab).className='label_on';
			document.getElementById('link'+Tab).className='cons_esperto_on';
		}

	</script>
					<h1>CONSIGLI DELL'ESPERTO</h1>
					<p>
						Cerchi un mutuo? Ti riconosci in una delle <span class="tipoa">situazioni</span> sotto riportate? Scegline una, potrai 
						individuare il mutuo pi&ugrave; vicino alle tue <span class="tipoa">esigenze</span>&#133;<br><br>
					</p>
	<table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tr valign="top">
		<td width="60%" style="padding:0">
			<table id="box1" class="label_off" onMouseOver="FrecciaOn(1)" onMouseOut="FrecciaOff(1)">
				<tr>
					<td class="label_num"><a href="#" onClick="Label(1); ShowLayer(1); ShowLayer2(1)"><img src="/mol-pol/img/MUTUI/esperto_1.gif" border="0"></a></td>
					<td class="label_txt"><a href="#" id="link1" onClick="Label(1); ShowLayer(1); ShowLayer2(1)" class="cons_esperto">
					Cerco un mutuo a <span class="tipoa2red">rata costante</span> che mi garantisca contro la crescita dei tassi d'interesse sul mercato.</a>
					</td>
					<td class="label_bot"><a href="#" onClick="Label(1); ShowLayer(1); ShowLayer2(1)"><img src="/mol-pol/img/MUTUI/bott.gif" border="0"></a></td>
					<td class="label_arr"><div id="freccia1" class="Freccia_off"><img src="/mol-pol/img/MUTUI/indice_sx.gif" width="14" height="28" border="0"></div></td>
				</tr>
			</table>
		
			<table id="box2" class="label_off" onMouseOver="FrecciaOn(2)" onMouseOut="FrecciaOff(2)">
				<tr>
					<td class="label_num"><a href="#" onClick="Label(2); ShowLayer(2); ShowLayer2(2)"><img src="/mol-pol/img/MUTUI/esperto_2.gif" border="0"></a></td>
					<td class="label_txt"><a href="#" id="link2" onClick="Label(2); ShowLayer(2); ShowLayer2(2)" class="cons_esperto">
					Siamo una <span class="tipoa2red">giovane coppia</span> che deve affrontare tutte le spese per la nuova famiglia: la casa, il matrimonio&#8230;</a></td>
					<td class="label_bot"><a href="#" onClick="Label(2); ShowLayer(2); ShowLayer2(2)"><img src="/mol-pol/img/MUTUI/bott.gif" border="0"></a></td>
					<td class="label_arr"><div id="freccia2" class="Freccia_off"><img src="/mol-pol/img/MUTUI/indice_sx.gif" width="14" height="28" border="0"></div></td>
				</tr>
			</table>
			
			<table id="box3" class="label_off" onMouseOver="FrecciaOn(3)" onMouseOut="FrecciaOff(3)">
				<tr>
					<td class="label_num"><a href="#" onClick="Label(3); ShowLayer(3); ShowLayer2(3)"><img src="/mol-pol/img/MUTUI/esperto_3.gif" border="0"></a></td>
					<td class="label_txt"><a href="#" id="link3" onClick="Label(3); ShowLayer(3); ShowLayer2(3)" class="cons_esperto">
					Desidero la <span class="tipoa2red">massima dilazione</span> di finanziamento possibile, per poter pagare una rata adatta alle mie possibilit&agrave;.</a></td>
					<td class="label_bot"><a href="#" onClick="Label(3); ShowLayer(3); ShowLayer2(3)"><img src="/mol-pol/img/MUTUI/bott.gif" border="0"></a></td>
					<td class="label_arr"><div id="freccia3" class="Freccia_off"><img src="/mol-pol/img/MUTUI/indice_sx.gif" width="14" height="28" border="0"></div></td>
				</tr>
			</table>
		
			<table id="box4" class="label_off" onMouseOver="FrecciaOn(4)" onMouseOut="FrecciaOff(4)">
				<tr>
					<td class="label_num"><a href="#" onClick="Label(4); ShowLayer(4); ShowLayer2(4)"><img src="/mol-pol/img/MUTUI/esperto_4.gif" border="0"></a></td>
					<td class="label_txt"><a href="#" id="link4" onClick="Label(4); ShowLayer(4); ShowLayer2(4)" class="cons_esperto">
					Cerco un mutuo che mi garantisca una gestione duttile, con la possibilit&agrave; in futuro di <span class="tipoa2red">rimborsare anticipatamente</span> tutto o parte del capitale residuo.</a></td>
					<td class="label_bot"><a href="#" onClick="Label(4); ShowLayer(4); ShowLayer2(4)"><img src="/mol-pol/img/MUTUI/bott.gif" border="0"></a></td>
					<td class="label_arr"><div id="freccia4" class="Freccia_off"><img src="/mol-pol/img/MUTUI/indice_sx.gif" width="14" height="28" border="0"></div></td>
				</tr>
			</table>

			<table id="box5" class="label_off" onMouseOver="FrecciaOn(5)" onMouseOut="FrecciaOff(5)">
				<tr>
					<td class="label_num"><a href="#" onClick="Label(5); ShowLayer(5); ShowLayer2(5)"><img src="/mol-pol/img/MUTUI/esperto_5.gif" border="0"></a></td>
					<td class="label_txt"><a href="#" id="link5" onClick="Label(5); ShowLayer(5); ShowLayer2(5)" class="cons_esperto">
					Non ho particolari esigenze di finanziamento, ricerco la <span class="tipoa2red">massima economicit&agrave;</span></a></td>
					<td class="label_bot"><a href="#" onClick="Label(5); ShowLayer(5); ShowLayer2(5)"><img src="/mol-pol/img/MUTUI/bott.gif" border="0"></a></td>
					<td class="label_arr"><div id="freccia5" class="Freccia_off"><img src="/mol-pol/img/MUTUI/indice_sx.gif" width="14" height="28" border="0"></div></td>
				</tr>
			</table>
		</td>
		
		<td width="40%" style="padding:0">
			<div class="SfondoTesto" style="background-image: url(/mol-pol/img/MUTUI/esperto0.gif);background-repeat: no-repeat;">
	
				<div id="esperto1" class="TestataTdSMOn" style="background-image: url(/mol-pol/img/MUTUI/esperto1.gif);background-repeat: no-repeat;">
					<table width="275" height="335"  border="0" cellpadding="10" cellspacing="1">
						<tr>
							<td valign="top" class="tipoc">
								Scegli la soluzione a <span class="tipoa2red">Tasso fisso!</span><br><br>
								In alternativa, puoi optare per il mutuo <span class="tipoa2red">Tasso fisso con opzione cambio tasso</span>, che ti garantisce i benefici della rata costante nel periodo iniziale pi&ugrave; "difficile", i primi 5 anni, a condizioni di maggiore economicit&agrave;.
								Inoltre potrai variare, ogni 5 anni, il mutuo da tasso fisso a variabile e viceversa.<br><br>
								<span class="tipoa2red">Visualizza nel dettaglio il tuo mutuo ideale</span><br><br>
								- <a href="/mutui/MOL/WsSchedaProdotto.do?cf=0.8964858545042707&idProdotto=PMFIRSTAND00&first=yes" id="2" class="tipo4">Tasso fisso</a><br>
								- <a href="/mutui/MOL/WsSchedaProdotto.do?cf=0.8964858545042707&idProdotto=PMOIRSTD5A00&first=yes" id="2" class="tipo4">Tasso fisso con opzione cambio tasso</a><br>
							</td>
						</tr>
					</table>
				</div>

				<div id="esperto2" class="TestataTdSMOn" style="background-image: url(/mol-pol/img/MUTUI/esperto2.gif);background-repeat: no-repeat;">
					<table width="275" height="335"  border="0" cellpadding="10" cellspacing="1">
						<tr> 
							<td valign="top" class="tipoc">
								Puoi scegliere tra tutte le tipologie di mutuo proposte da BPM.<br><br>
								<span class="tipoa2red">Visualizza nel dettaglio il tuo mutuo ideale</span><br><br>
								- <a href="/mutui/MOL/WsSchedaProdotto.do?cf=0.8964858545042707&idProdotto=PMOE3STD5A00&first=yes" id="1" class="tipo4">Tasso variabile con opzione cambio tasso</a> <br>
								- <a href="/mutui/MOL/WsSchedaProdotto.do?cf=0.8964858545042707&idProdotto=PMOIRSTD5A00&first=yes" id="2" class="tipo4">Tasso fisso con opzione cambio tasso</a> <br>
								- <a href="/mutui/MOL/WsSchedaProdotto.do?cf=0.8964858545042707&idProdotto=PMVBCSTAND00&first=yes" id="5" class="tipo4">Euromutuo Classic</a> <br>
								- <a href="/mutui/MOL/WsSchedaProdotto.do?cf=0.8964858545042707&idProdotto=PMFIRSTAND00&first=yes" id="2" class="tipo4">Tasso fisso</a><br>
						</tr>
					</table>
				</div>

				<div id="esperto3" class="TestataTdSMOn" style="background-image: url(/mol-pol/img/MUTUI/esperto3.gif);background-repeat: no-repeat;">
					<table width="275" height="335"  border="0" cellpadding="10" cellspacing="1">
						<tr> 
							<td valign="top" class="tipoc">
								I mutui offerti da BPM prevedono durate fino a 30 anni, non hai che l'imbarazzo della scelta!<br><br>
								Puoi iniziare il mutuo attivando la durata pi&ugrave; lunga e rivedere pi&ugrave; avanti la tua situazione finanziaria eventualmente anticipando il rimborso del mutuo senza alcuna spesa aggiuntiva. <br><br>
								<span class="tipoa2red">Visualizza nel dettaglio il tuo mutuo ideale</span><br><br>
								- <a href="/mutui/MOL/WsSchedaProdotto.do?cf=0.8964858545042707&idProdotto=PMOE3STD5A00&first=yes" id="1" class="tipo4">Tasso variabile con opzione cambio tasso</a> <br>
								- <a href="/mutui/MOL/WsSchedaProdotto.do?cf=0.8964858545042707&idProdotto=PMOIRSTD5A00&first=yes" id="2" class="tipo4">Tasso fisso con opzione cambio tasso</a> <br>
								- <a href="/mutui/MOL/WsSchedaProdotto.do?cf=0.8964858545042707&idProdotto=PMVBCSTAND00&first=yes" id="5" class="tipo4">Euromutuo Classic</a> <br>
								- <a href="/mutui/MOL/WsSchedaProdotto.do?cf=0.8964858545042707&idProdotto=PMFIRSTAND00&first=yes" id="2" class="tipo4">Tasso fisso</a><br>
							</td>
						</tr>
					</table>
				</div>
				
				<div id="esperto4" class="TestataTdSMOn" style="background-image: url(/mol-pol/img/MUTUI/esperto4.gif);background-repeat: no-repeat;">
					<table width="275" height="335"  border="0" cellpadding="10" cellspacing="1">
						<tr>
							<td valign="top" class="tipoc">
								Se finalizzati all'acquisto di abitazione tutti i prodotti offerti non prevedono alcuna penale in caso di estinzione anticipata (totale o parziale) del mutuo.<br><br>
								I mutui ad opzione cambio tasso inoltre ti concedono la massima elasticit&agrave; di gestione.<br><br>
								Dopo il periodo iniziale, ogni 5 anni potrai rinegoziare la formula di rimborso a condizioni predefinite (a tasso fisso o variabile), in base alle tue esigenze del momento.<br><br>
								<span class="tipoa2red">Visualizza nel dettaglio il tuo mutuo ideale</span><br><br>
								- <a href="/mutui/MOL/WsSchedaProdotto.do?cf=0.8964858545042707&idProdotto=PMOE3STD5A00&first=yes" id="1" class="tipo4">Tasso variabile con opzione cambio tasso</a> <br>
								- <a href="/mutui/MOL/WsSchedaProdotto.do?cf=0.8964858545042707&idProdotto=PMOIRSTD5A00&first=yes" id="2" class="tipo4">Tasso fisso con opzione cambio tasso</a> <br>
							</td>
						</tr>
					</table>
				</div>
				
				<div id="esperto5" class="TestataTdSMOn" style="background-image: url(/mol-pol/img/MUTUI/esperto5.gif);background-repeat: no-repeat;">
					<table width="275" height="335"  border="0" cellpadding="10" cellspacing="1">
						<tr>
							<td valign="top" class="tipoc">
								Hai a disposizione un'ampia scelta di prodotti, mutui con formula flessibile, a tasso fisso, variabile o misto con opzione cambio tasso.<br><br>
								Ricorda che tutti i prodotti offerti da questo servizio sono proposti con spese ridotte!<br><br>
								<span class="tipoa2red">Visualizza nel dettaglio il tuo mutuo ideale qui!</span><br><br>
								- <a href="/mutui/MOL/WsSchedaProdotto.do?cf=0.8964858545042707&idProdotto=PMFIRSTAND00&first=yes" id="2" class="tipo4">Tasso fisso</a><br>
								- <a href="/mutui/MOL/WsSchedaProdotto.do?cf=0.8964858545042707&idProdotto=PMOE3STD5A00&first=yes" id="1" class="tipo4">Tasso variabile con opzione cambio tasso</a> <br>
								- <a href="/mutui/MOL/WsSchedaProdotto.do?cf=0.8964858545042707&idProdotto=PMOIRSTD5A00&first=yes" id="1" class="tipo4">Tasso fisso con opzione cambio tasso</a> <br>
								- <a href="/mutui/MOL/WsSchedaProdotto.do?cf=0.8964858545042707&idProdotto=PMVBCSTAND00&first=yes" id="2" class="tipo4">Euromutuo Classic</a> <br>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</td>
	</tr>
</table>


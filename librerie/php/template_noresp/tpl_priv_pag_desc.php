<script type="text/javascript">
/*Comportamenti premianti*/

// Apre-Chiude accordion comportamenti premianti
function ApriAccordion(obj){
	if(obj.className == 'dettagliOff')
	{
		obj.parentNode.getElementsByTagName('table')[0].style.display='block';
		obj.className = 'dettagliOn';
	}
	else
	{
		obj.parentNode.getElementsByTagName('table')[0].style.display='none';
		obj.className = 'dettagliOff';
	}
}
 
// Apre-Chiude menu option ricariche
function showOptions(obj) 
 {
	var menurid = obj.parentNode.getElementsByTagName('ul')[0];
	if(menurid.style.display=='none') {menurid.style.display='block'}
	else {menurid.style.display='none'}
 }
 
// Attribuisce classe hover al menu per la compatibilità ie6
function setClassIe(obj,clAttr) 
{
	obj.onmouseover = function() {this.className = clAttr;}
	obj.onmouseout  = function() {this.className = '';}
	//var vociMenu = document.getElementById('optionsRidvoci').getElementsByTagName('li');
	/*for(i = 0; i< vociMenu.length;i ++) 
	{
	vociMenu[i].onmouseover = function() {this.className = clAttr;}
	vociMenu[i].onmouseout = function() {this.className = '';}
	}*/

}

</script>
<h1>COME AUMENTARE I TUOI GUADAGNI</h1>

<!-- oggetto flash 
<div class="objectarea" id="guarda">
				<script type="text/javascript" defer="defer">		  
					var flashobject = new SWFObject("/wscmn/swf/visual_comp_premianti.swf", "placeholder", "700", "240", "8", "#ffffff");
					flashobject.addParam("quality", "high");		
					flashobject.addParam("wmode", "opaque");
					flashobject.write("guarda");
				</script>
			</div>
 fine oggetto flash -->	
 
<div><img alt="L'iniziativa ExtraTasso &egrave; terminata" src="/img/ret/ban_comp_premianti.gif" /></div>
 
<br/>
<table class="form01">		
	<tr><td >Lorem ipsum dolor lorem ipsum</td>
	<td colspan="3" class="right"> <select class="extra" name="select">
		<option>C/C 00599 - 0000099999 - EUR - MMMMMMMMMMMM</option>
		<option>C/C 00599 - 0000099999 - EUR - MMMMMMMMMMMM</option>
		</select><a class="preferito" title="Lorem ipsum" href="#"><img alt="Lorem ipsum" src="/img/ico1gr_preferito.gif"/></a></td>
	</tr>
	
</table>		


<div id="boxCompPremContainer">
	<div class="boxCompPrem"><span>Settembre</span></div>	
	
	<!--div class="operaz_premi_top">
		<div class="cartimpronta_lista cartimpronta_lista2"><img alt="" class="carttit" src="/img/ret/1px.gif"/>
		<div class="operaz_premi_middle">
		<p onclick="javascript:ApriCartImpr(this);" onmouseover="javascript:this.style.cursor='pointer'" class="tit"><span><strong class="titolo">LOREM IPSUM</strong><br /><strong>Lorem ipsum dolor sit amet</strong></span><img alt="" class="bot" src="/img/ret/cartimpr_off.gif" /></p>
		<br class="clear" />
		<div class="esteso"><p>Lorem ipsum dolor sit amet, <b>consectetuer adipiscing elit.</b> Curabitur erat eros, porta id, <a href="#">nonummy sed</a>, porttitor sed, libero.</p></div>		
		</div>
		<div class="operaz_premi_bottom"></div>		
		<br /><br class="clear"/></div>
	</div-->	
	<div class="verde first">
		<div class="operaz_premi_top"></div>
		<div class="operaz_premi_middle">
			<img alt="" class="tit" src="/img/ret/tt_operaz_04_bi.gif" /> 
			<a onclick="javascript:ApriAccordion(this);" class="dettagliOff">dettagli</a>
			<img alt="" class="rg" src="/img/ret/img_or_operaz_bi.gif" />
			<div id="optionsRid" class="optionsRidwrapper">
				<a href="javascript:;" class="btn_rg" onclick="javascript:showOptions(this);"><img alt="" src="/img/ret/btn_fai_ricarica_rid.gif" /></a><br class="clear"/>
				<ul id="optionsRidvoci" class="optionsRidvoci" style="display:none">
					<li onmouseover ="javascript:setClassIe(this,'hover');"><a href="#">Ricarica cellulare</a></li>
					<li onmouseover ="javascript:setClassIe(this,'hover');"><a href="#">Ricarica digitale terrestre</a></li>
					<li onmouseover ="javascript:setClassIe(this,'hover');"><a href="#">Ricarica Carta Je@ns</a></li>
					<li onmouseover ="javascript:setClassIe(this,'hover');"><a href="#">Ricarica BPM Contante Prepagata</a></li>
				</ul>
			</div>
			<table class="dettHidden"><tr><td><ul>
							<li>Ricariche di cellulari, Carta Je@ns, Carta Bipiemme Contante Prepagata, Mediaset Premium</li>
							<li>Viene presa in considerazione la data dell’operazione effettuata online</li>
							
					</ul></td></tr></table>			
		</div>
		<div class="operaz_premi_bottom"></div>	
	</div>

	
	<div class="verde">
		<div class="operaz_premi_top"></div>
		<div class="operaz_premi_middle">
			<img alt="" class="tit" src="/img/ret/tt_operaz_02_ve.gif" />
			<a onclick="javascript:ApriAccordion(this);" class="dettagliOff">dettagli</a>
			<img src="/img/ret/img_or_operaz_ve.gif" class="rg" alt=""/>
			
			<table class="dettHidden"><tr><td>
						<ul class="elenco">
							<li>Per importo addebitato si intende quanto speso nel mese con il bancomat e quanto addebitato nello stesso mese per l’utilizzo della carta di credito (dunque per spese fatte nel mese precedente)
							<ul class="lista2">
            <li class="lista2">Lorem ipsum dolor sit amet, <strong>consectetuer</strong></li>
            <li class="lista2">Lorem ipsum , consectetuer</li>
            <li class="lista2">Lorem ipsum dolor sit amet, consectetuer</li>
          </ul>

							
							</li>
							<li>Bancomat: sono esclusi i prelievi</li>
							<li>Viene presa in considerazione la data contabile del movimento di addebito, sia per bancomat, sia per Cartimpronta</li>
					</ul>
			</td>
			</tr>
			</table>
		</div>
		<div class="operaz_premi_bottom"></div>
	</div>			
		
	<div class="bianco">
		<div class="operaz_premi_top"></div>
		<div class="operaz_premi_middle">
			<img alt="" class="tit" src="/img/ret/tt_operaz_03_bi.gif" /> 
			<a onclick="javascript:ApriAccordion(this);" class="dettagliOff">dettagli</a>
			<img alt="" class="rg" src="/img/ret/img_or_operaz_bi.gif" />
			<a href="" class="btn_rg"><img alt="" src="/img/ret/btn_fai_compravendita_rid.gif" /></a><br class="clear"/>
			<table class="dettHidden"><tr><td>Viene presa in considerazione la data di esecuzione dell’ordine</td></tr></table>		
		</div>
		<div class="operaz_premi_bottom"></div>	
	</div>	
	

			<div class="bianco">
		<div class="operaz_premi_top"></div>
		<div class="operaz_premi_middle">
			<img alt="" class="tit" src="/img/ret/tt_operaz_01_bi.gif" /> 
			<a onclick="javascript:ApriAccordion(this);" class="dettagliOff">dettagli</a>
			<img alt="" class="rg" src="/img/ret/img_or_operaz_bi.gif" />
			<div id="optionsRidAttiva" class="optionsRidwrapper">
				<a href="javascript:;" class="btn_rg" onclick="javascript:showOptions(this);"><img alt="" src="/img/ret/btn_attiva.gif" /></a><br class="clear"/>
				<ul id="optionsRidAttivavoci" class="optionsRidvoci" style="display:none">
					<li onmouseover ="javascript:setClassIe(this,'hover');"><a href="#">Attiva una domiciliazione</a></li>
					<li onmouseover ="javascript:setClassIe(this,'hover');"><a href="#">Attiva  un deposito titoli</a></li>
					
				</ul>
			</div>
			<table class="dettHidden"><tr><td>Viene presa in considerazione la data di attivazione della domiciliazione o del deposito titoli</td>
			</tr></table>		
		</div>
		<div class="operaz_premi_bottom"></div>	
	</div>	
	

	<div class="boxCompPremBottom">
		
		
	<div class="boxCompPremBottomText">
		<br/><br/><h2>Risultato mese di Maggio: hai centrato solo <span>0</span> obiettivi su <span>4</span><br />Inizia subito a usare Webank, puoi raggiungere l'extra tasso il mese prossimo!
		<a href="">Apri le linee con ExtraTasso Webank</a>
		</h2>
		
		<img src="/img/ret/img_or_comp-ok.jpg" alt="" /><br/><br/>
		</div>
	
	
	</div>
	
	
	
</div>
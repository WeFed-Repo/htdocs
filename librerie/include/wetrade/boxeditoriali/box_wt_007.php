<div id="graficoControvalore">
	<div id="flashcontainerwt"></div>
	<div id="legendaControvalore">
		<div id="titoloControvalore" class="ie6DoubleMarginFix">Grafico relativo al controvalore EUR attuale / alla scadenza</div>
		<div id="label1Controvalore" class="labelControvalore ie6DoubleMarginFix">Legenda:</div>
		<div id="label2Controvalore" class="labelControvalore">
			<span id="box1Controvalore" class="boxControvalore">Azioni Italia</span>
		</div>
		<div id="label3Controvalore" class="labelControvalore">
			<span id="box2Controvalore" class="boxControvalore">Azioni Estere</span>
		</div>
		<div id="label4Controvalore" class="labelControvalore">
			<span id="box1Controvalore" class="boxControvalore">Obbligazioni</span>
		</div>
		<div id="label5Controvalore" class="labelControvalore">
			<span id="box1Controvalore" class="boxControvalore">Derivati</span>
		</div>
		<div id="label6Controvalore" class="labelControvalore">
			<span id="box2Controvalore" class="boxControvalore">Coverred warrant/Certificates</span>
		</div>
		<div id="label7Controvalore" class="labelControvalore">
			<span id="box1Controvalore" class="boxControvalore">ETF</span>
		</div>
		<div id="label8Controvalore" class="labelControvalore">
			<span id="box1Controvalore" class="boxControvalore">Marginazione</span>
		</div>
		
	
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
</div>
<script type="text/javascript" defer="defer">		  
  	var fo = new  SWFObject("/swf/chart/MultiLevelPie.swf", "home_test", "206", "156", "8", "#FFFFFF");
	fo.addParam("quality", "high");		
	fo.addParam("wmode", "transparent");
	fo.addParam('flashvars','dataURL=/swf/chart/graficoWetrade.xml&chartWidth=206&chartHeight=156');
	fo.write("flashcontainerwt");
</script>
				<h1>Acquisto</h1>
				<div class="fooform fooform_tit" id="id_aggiorna" style="/*display:none;*/"></div>
					<br class="clear">
<SCRIPT>


	var codiceSocieta=(161==1 | 161==6);


	function wbScrollTo(obj) {
		var x = $(obj).position();
		
		$('html, body').animate(
			{scrollTop: x.top}
			,500
			,"linear"
			,function(){window.scrollTo(x.left,x.top);}
		);
		
	}


	function checkFields()	{
		
		document.getElementById('erroreFormAnteprima').style.display = 'none';
		document.getElementById('messaggioAnteprimaIndirizzo').style.display = 'none';
		document.getElementById('messaggioAnteprimaComune').style.display = 'none';
		document.getElementById('messaggioAnteprimaProvincia').style.display = 'none';
		document.getElementById('messaggioAnteprimaCAP').style.display = 'none';
		var errors = [];
		
		if ($("#statoCorrLayer").length && $("#statoCorrLayer").val() != '-- seleziona --')	{
			
			
			if(!$('#indirizzoCorrLayer').length || $('#indirizzoCorrLayer').val().trim() == '') {
			
				document.getElementById('erroreFormAnteprima').style.display = '';
				document.getElementById('messaggioAnteprimaIndirizzo').style.display = '';
				document.getElementById('messaggioAnteprimaIndirizzo').innerHTML = "Inserire un indirizzo";
			}
			if(!$('#comuneCorrLayer').length || $('#comuneCorrLayer').val().trim() == '') {
				document.getElementById('erroreFormAnteprima').style.display = '';
				document.getElementById('messaggioAnteprimaComune').style.display = '';
				document.getElementById('messaggioAnteprimaComune').innerHTML = "Inserire un comune";
			}
			if($("#statoCorrLayer").val() == '86') {
				if(!$('#provinciaCorrLayer').length || $('#provinciaCorrLayer').val().trim() == '') {
					document.getElementById('erroreFormAnteprima').style.display = '';
					document.getElementById('messaggioAnteprimaProvincia').style.display = '';
					document.getElementById('messaggioAnteprimaProvincia').innerHTML = "Inserire una provincia";
				}
				if(!$('#capCorrLayer').length || $('#capCorrLayer').val().trim() == '') {
					document.getElementById('erroreFormAnteprima').style.display = '';
				document.getElementById('messaggioAnteprimaCAP').style.display = '';
				document.getElementById('messaggioAnteprimaCAP').innerHTML = "Inserire il CAP";
				}
			}
		}
		
		if (errors.length > 0)	{
			return false;
		}
		
		return true;
	}


	function statoChangeLayer(val,num) {
	
	if(num!=null){
		if(val != '86') {
				$('#provinciaCorrLayerDiv'+num).html('<td id="provinciaCorrLayerDiv'+num+'" ><input type="text" id="provinciaCorrLayer'+num+'" style="width:201px"></td>');
				$('#comuneCorrLayerDiv'+num).html('<td id="comuneCorrLayerDiv'+num+'" ><input type="text" id="comuneCorrLayer'+num+'" style="width:201px"></td>');
				$('#capCorrLayerDiv'+num).html('<td id="capCorrLayerDiv'+num+'" colspan="3"><input type="text" id="capCorrLayer'+num+'" class="medio"></td>');
			} else {
				var provinciaDiv = '';
				provinciaDiv = provinciaDiv + '<select id="provinciaCorrLayer'+num+'" onchange=\'provinciaChangeLayer($("option:selected", this).val(),'+num+')\'>';
				provinciaDiv = provinciaDiv + '<option value="">Seleziona</option>';
									provinciaDiv = provinciaDiv + '<option value="AG">AG</option>';
									provinciaDiv = provinciaDiv + '<option value="AL">AL</option>';
									provinciaDiv = provinciaDiv + '<option value="AN">AN</option>';
									provinciaDiv = provinciaDiv + '<option value="AO">AO</option>';
									provinciaDiv = provinciaDiv + '<option value="AP">AP</option>';
									provinciaDiv = provinciaDiv + '<option value="AQ">AQ</option>';
									provinciaDiv = provinciaDiv + '<option value="AR">AR</option>';
									provinciaDiv = provinciaDiv + '<option value="AT">AT</option>';
									provinciaDiv = provinciaDiv + '<option value="AV">AV</option>';
									provinciaDiv = provinciaDiv + '<option value="BA">BA</option>';
									provinciaDiv = provinciaDiv + '<option value="BG">BG</option>';
									provinciaDiv = provinciaDiv + '<option value="BI">BI</option>';
									provinciaDiv = provinciaDiv + '<option value="BL">BL</option>';
									provinciaDiv = provinciaDiv + '<option value="BN">BN</option>';
									provinciaDiv = provinciaDiv + '<option value="BO">BO</option>';
									provinciaDiv = provinciaDiv + '<option value="BR">BR</option>';
									provinciaDiv = provinciaDiv + '<option value="BS">BS</option>';
									provinciaDiv = provinciaDiv + '<option value="BT">BT</option>';
									provinciaDiv = provinciaDiv + '<option value="BZ">BZ</option>';
									provinciaDiv = provinciaDiv + '<option value="CA">CA</option>';
									provinciaDiv = provinciaDiv + '<option value="CB">CB</option>';
									provinciaDiv = provinciaDiv + '<option value="CE">CE</option>';
									provinciaDiv = provinciaDiv + '<option value="CH">CH</option>';
									provinciaDiv = provinciaDiv + '<option value="CI">CI</option>';
									provinciaDiv = provinciaDiv + '<option value="CL">CL</option>';
									provinciaDiv = provinciaDiv + '<option value="CN">CN</option>';
									provinciaDiv = provinciaDiv + '<option value="CO">CO</option>';
									provinciaDiv = provinciaDiv + '<option value="CR">CR</option>';
									provinciaDiv = provinciaDiv + '<option value="CS">CS</option>';
									provinciaDiv = provinciaDiv + '<option value="CT">CT</option>';
									provinciaDiv = provinciaDiv + '<option value="CZ">CZ</option>';
									provinciaDiv = provinciaDiv + '<option value="EN">EN</option>';
									provinciaDiv = provinciaDiv + '<option value="FC">FC</option>';
									provinciaDiv = provinciaDiv + '<option value="FE">FE</option>';
									provinciaDiv = provinciaDiv + '<option value="FG">FG</option>';
									provinciaDiv = provinciaDiv + '<option value="FI">FI</option>';
									provinciaDiv = provinciaDiv + '<option value="FM">FM</option>';
									provinciaDiv = provinciaDiv + '<option value="FR">FR</option>';
									provinciaDiv = provinciaDiv + '<option value="GE">GE</option>';
									provinciaDiv = provinciaDiv + '<option value="GO">GO</option>';
									provinciaDiv = provinciaDiv + '<option value="GR">GR</option>';
									provinciaDiv = provinciaDiv + '<option value="IM">IM</option>';
									provinciaDiv = provinciaDiv + '<option value="IS">IS</option>';
									provinciaDiv = provinciaDiv + '<option value="KR">KR</option>';
									provinciaDiv = provinciaDiv + '<option value="LC">LC</option>';
									provinciaDiv = provinciaDiv + '<option value="LE">LE</option>';
									provinciaDiv = provinciaDiv + '<option value="LI">LI</option>';
									provinciaDiv = provinciaDiv + '<option value="LO">LO</option>';
									provinciaDiv = provinciaDiv + '<option value="LT">LT</option>';
									provinciaDiv = provinciaDiv + '<option value="LU">LU</option>';
									provinciaDiv = provinciaDiv + '<option value="MB">MB</option>';
									provinciaDiv = provinciaDiv + '<option value="MC">MC</option>';
									provinciaDiv = provinciaDiv + '<option value="ME">ME</option>';
									provinciaDiv = provinciaDiv + '<option value="MI">MI</option>';
									provinciaDiv = provinciaDiv + '<option value="MN">MN</option>';
									provinciaDiv = provinciaDiv + '<option value="MO">MO</option>';
									provinciaDiv = provinciaDiv + '<option value="MS">MS</option>';
									provinciaDiv = provinciaDiv + '<option value="MT">MT</option>';
									provinciaDiv = provinciaDiv + '<option value="NA">NA</option>';
									provinciaDiv = provinciaDiv + '<option value="NO">NO</option>';
									provinciaDiv = provinciaDiv + '<option value="NU">NU</option>';
									provinciaDiv = provinciaDiv + '<option value="OG">OG</option>';
									provinciaDiv = provinciaDiv + '<option value="OR">OR</option>';
									provinciaDiv = provinciaDiv + '<option value="OT">OT</option>';
									provinciaDiv = provinciaDiv + '<option value="PA">PA</option>';
									provinciaDiv = provinciaDiv + '<option value="PC">PC</option>';
									provinciaDiv = provinciaDiv + '<option value="PD">PD</option>';
									provinciaDiv = provinciaDiv + '<option value="PE">PE</option>';
									provinciaDiv = provinciaDiv + '<option value="PG">PG</option>';
									provinciaDiv = provinciaDiv + '<option value="PI">PI</option>';
									provinciaDiv = provinciaDiv + '<option value="PN">PN</option>';
									provinciaDiv = provinciaDiv + '<option value="PO">PO</option>';
									provinciaDiv = provinciaDiv + '<option value="PR">PR</option>';
									provinciaDiv = provinciaDiv + '<option value="PT">PT</option>';
									provinciaDiv = provinciaDiv + '<option value="PU">PU</option>';
									provinciaDiv = provinciaDiv + '<option value="PV">PV</option>';
									provinciaDiv = provinciaDiv + '<option value="PZ">PZ</option>';
									provinciaDiv = provinciaDiv + '<option value="RA">RA</option>';
									provinciaDiv = provinciaDiv + '<option value="RC">RC</option>';
									provinciaDiv = provinciaDiv + '<option value="RE">RE</option>';
									provinciaDiv = provinciaDiv + '<option value="RG">RG</option>';
									provinciaDiv = provinciaDiv + '<option value="RI">RI</option>';
									provinciaDiv = provinciaDiv + '<option value="RM">RM</option>';
									provinciaDiv = provinciaDiv + '<option value="RN">RN</option>';
									provinciaDiv = provinciaDiv + '<option value="RO">RO</option>';
									provinciaDiv = provinciaDiv + '<option value="SA">SA</option>';
									provinciaDiv = provinciaDiv + '<option value="SI">SI</option>';
									provinciaDiv = provinciaDiv + '<option value="SO">SO</option>';
									provinciaDiv = provinciaDiv + '<option value="SP">SP</option>';
									provinciaDiv = provinciaDiv + '<option value="SR">SR</option>';
									provinciaDiv = provinciaDiv + '<option value="SS">SS</option>';
									provinciaDiv = provinciaDiv + '<option value="SV">SV</option>';
									provinciaDiv = provinciaDiv + '<option value="TA">TA</option>';
									provinciaDiv = provinciaDiv + '<option value="TE">TE</option>';
									provinciaDiv = provinciaDiv + '<option value="TN">TN</option>';
									provinciaDiv = provinciaDiv + '<option value="TO">TO</option>';
									provinciaDiv = provinciaDiv + '<option value="TP">TP</option>';
									provinciaDiv = provinciaDiv + '<option value="TR">TR</option>';
									provinciaDiv = provinciaDiv + '<option value="TS">TS</option>';
									provinciaDiv = provinciaDiv + '<option value="TV">TV</option>';
									provinciaDiv = provinciaDiv + '<option value="UD">UD</option>';
									provinciaDiv = provinciaDiv + '<option value="VA">VA</option>';
									provinciaDiv = provinciaDiv + '<option value="VB">VB</option>';
									provinciaDiv = provinciaDiv + '<option value="VC">VC</option>';
									provinciaDiv = provinciaDiv + '<option value="VE">VE</option>';
									provinciaDiv = provinciaDiv + '<option value="VI">VI</option>';
									provinciaDiv = provinciaDiv + '<option value="VR">VR</option>';
									provinciaDiv = provinciaDiv + '<option value="VS">VS</option>';
									provinciaDiv = provinciaDiv + '<option value="VT">VT</option>';
									provinciaDiv = provinciaDiv + '<option value="VV">VV</option>';
								provinciaDiv = provinciaDiv + '</select>';
				$('#provinciaCorrLayerDiv'+num).html(provinciaDiv);
				$('#comuneCorrLayerDiv'+num).html('<select id="comuneCorrLayer'+num+'"><option value=""> --- </option></select>');
				$('#capCorrLayerDiv'+num).html('<select id="capCorrLayer'+num+'"><option value=""> --- </option></select>');
			}
	}else{
			if(val != '86') {
				$('#provinciaCorrLayerDiv').html('<td id="provinciaCorrLayerDiv" ><input type="text" id="provinciaCorrLayer" style="width:201px"></td>');
				$('#comuneCorrLayerDiv').html('<td id="comuneCorrLayerDiv" ><input type="text" id="comuneCorrLayer" style="width:201px"></td>');
				$('#capCorrLayerDiv').html('<td id="capCorrLayerDiv" colspan="3"><input type="text" id="capCorrLayer" class="medio"></td>');
			} else {
				var provinciaDiv = '';
				provinciaDiv = provinciaDiv + '<select id="provinciaCorrLayer" onchange=\'provinciaChangeLayer($("option:selected", this).val(),null)\'>';
				provinciaDiv = provinciaDiv + '<option value="">Seleziona</option>';
									provinciaDiv = provinciaDiv + '<option value="AG">AG</option>';
									provinciaDiv = provinciaDiv + '<option value="AL">AL</option>';
									provinciaDiv = provinciaDiv + '<option value="AN">AN</option>';
									provinciaDiv = provinciaDiv + '<option value="AO">AO</option>';
									provinciaDiv = provinciaDiv + '<option value="AP">AP</option>';
									provinciaDiv = provinciaDiv + '<option value="AQ">AQ</option>';
									provinciaDiv = provinciaDiv + '<option value="AR">AR</option>';
									provinciaDiv = provinciaDiv + '<option value="AT">AT</option>';
									provinciaDiv = provinciaDiv + '<option value="AV">AV</option>';
									provinciaDiv = provinciaDiv + '<option value="BA">BA</option>';
									provinciaDiv = provinciaDiv + '<option value="BG">BG</option>';
									provinciaDiv = provinciaDiv + '<option value="BI">BI</option>';
									provinciaDiv = provinciaDiv + '<option value="BL">BL</option>';
									provinciaDiv = provinciaDiv + '<option value="BN">BN</option>';
									provinciaDiv = provinciaDiv + '<option value="BO">BO</option>';
									provinciaDiv = provinciaDiv + '<option value="BR">BR</option>';
									provinciaDiv = provinciaDiv + '<option value="BS">BS</option>';
									provinciaDiv = provinciaDiv + '<option value="BT">BT</option>';
									provinciaDiv = provinciaDiv + '<option value="BZ">BZ</option>';
									provinciaDiv = provinciaDiv + '<option value="CA">CA</option>';
									provinciaDiv = provinciaDiv + '<option value="CB">CB</option>';
									provinciaDiv = provinciaDiv + '<option value="CE">CE</option>';
									provinciaDiv = provinciaDiv + '<option value="CH">CH</option>';
									provinciaDiv = provinciaDiv + '<option value="CI">CI</option>';
									provinciaDiv = provinciaDiv + '<option value="CL">CL</option>';
									provinciaDiv = provinciaDiv + '<option value="CN">CN</option>';
									provinciaDiv = provinciaDiv + '<option value="CO">CO</option>';
									provinciaDiv = provinciaDiv + '<option value="CR">CR</option>';
									provinciaDiv = provinciaDiv + '<option value="CS">CS</option>';
									provinciaDiv = provinciaDiv + '<option value="CT">CT</option>';
									provinciaDiv = provinciaDiv + '<option value="CZ">CZ</option>';
									provinciaDiv = provinciaDiv + '<option value="EN">EN</option>';
									provinciaDiv = provinciaDiv + '<option value="FC">FC</option>';
									provinciaDiv = provinciaDiv + '<option value="FE">FE</option>';
									provinciaDiv = provinciaDiv + '<option value="FG">FG</option>';
									provinciaDiv = provinciaDiv + '<option value="FI">FI</option>';
									provinciaDiv = provinciaDiv + '<option value="FM">FM</option>';
									provinciaDiv = provinciaDiv + '<option value="FR">FR</option>';
									provinciaDiv = provinciaDiv + '<option value="GE">GE</option>';
									provinciaDiv = provinciaDiv + '<option value="GO">GO</option>';
									provinciaDiv = provinciaDiv + '<option value="GR">GR</option>';
									provinciaDiv = provinciaDiv + '<option value="IM">IM</option>';
									provinciaDiv = provinciaDiv + '<option value="IS">IS</option>';
									provinciaDiv = provinciaDiv + '<option value="KR">KR</option>';
									provinciaDiv = provinciaDiv + '<option value="LC">LC</option>';
									provinciaDiv = provinciaDiv + '<option value="LE">LE</option>';
									provinciaDiv = provinciaDiv + '<option value="LI">LI</option>';
									provinciaDiv = provinciaDiv + '<option value="LO">LO</option>';
									provinciaDiv = provinciaDiv + '<option value="LT">LT</option>';
									provinciaDiv = provinciaDiv + '<option value="LU">LU</option>';
									provinciaDiv = provinciaDiv + '<option value="MB">MB</option>';
									provinciaDiv = provinciaDiv + '<option value="MC">MC</option>';
									provinciaDiv = provinciaDiv + '<option value="ME">ME</option>';
									provinciaDiv = provinciaDiv + '<option value="MI">MI</option>';
									provinciaDiv = provinciaDiv + '<option value="MN">MN</option>';
									provinciaDiv = provinciaDiv + '<option value="MO">MO</option>';
									provinciaDiv = provinciaDiv + '<option value="MS">MS</option>';
									provinciaDiv = provinciaDiv + '<option value="MT">MT</option>';
									provinciaDiv = provinciaDiv + '<option value="NA">NA</option>';
									provinciaDiv = provinciaDiv + '<option value="NO">NO</option>';
									provinciaDiv = provinciaDiv + '<option value="NU">NU</option>';
									provinciaDiv = provinciaDiv + '<option value="OG">OG</option>';
									provinciaDiv = provinciaDiv + '<option value="OR">OR</option>';
									provinciaDiv = provinciaDiv + '<option value="OT">OT</option>';
									provinciaDiv = provinciaDiv + '<option value="PA">PA</option>';
									provinciaDiv = provinciaDiv + '<option value="PC">PC</option>';
									provinciaDiv = provinciaDiv + '<option value="PD">PD</option>';
									provinciaDiv = provinciaDiv + '<option value="PE">PE</option>';
									provinciaDiv = provinciaDiv + '<option value="PG">PG</option>';
									provinciaDiv = provinciaDiv + '<option value="PI">PI</option>';
									provinciaDiv = provinciaDiv + '<option value="PN">PN</option>';
									provinciaDiv = provinciaDiv + '<option value="PO">PO</option>';
									provinciaDiv = provinciaDiv + '<option value="PR">PR</option>';
									provinciaDiv = provinciaDiv + '<option value="PT">PT</option>';
									provinciaDiv = provinciaDiv + '<option value="PU">PU</option>';
									provinciaDiv = provinciaDiv + '<option value="PV">PV</option>';
									provinciaDiv = provinciaDiv + '<option value="PZ">PZ</option>';
									provinciaDiv = provinciaDiv + '<option value="RA">RA</option>';
									provinciaDiv = provinciaDiv + '<option value="RC">RC</option>';
									provinciaDiv = provinciaDiv + '<option value="RE">RE</option>';
									provinciaDiv = provinciaDiv + '<option value="RG">RG</option>';
									provinciaDiv = provinciaDiv + '<option value="RI">RI</option>';
									provinciaDiv = provinciaDiv + '<option value="RM">RM</option>';
									provinciaDiv = provinciaDiv + '<option value="RN">RN</option>';
									provinciaDiv = provinciaDiv + '<option value="RO">RO</option>';
									provinciaDiv = provinciaDiv + '<option value="SA">SA</option>';
									provinciaDiv = provinciaDiv + '<option value="SI">SI</option>';
									provinciaDiv = provinciaDiv + '<option value="SO">SO</option>';
									provinciaDiv = provinciaDiv + '<option value="SP">SP</option>';
									provinciaDiv = provinciaDiv + '<option value="SR">SR</option>';
									provinciaDiv = provinciaDiv + '<option value="SS">SS</option>';
									provinciaDiv = provinciaDiv + '<option value="SV">SV</option>';
									provinciaDiv = provinciaDiv + '<option value="TA">TA</option>';
									provinciaDiv = provinciaDiv + '<option value="TE">TE</option>';
									provinciaDiv = provinciaDiv + '<option value="TN">TN</option>';
									provinciaDiv = provinciaDiv + '<option value="TO">TO</option>';
									provinciaDiv = provinciaDiv + '<option value="TP">TP</option>';
									provinciaDiv = provinciaDiv + '<option value="TR">TR</option>';
									provinciaDiv = provinciaDiv + '<option value="TS">TS</option>';
									provinciaDiv = provinciaDiv + '<option value="TV">TV</option>';
									provinciaDiv = provinciaDiv + '<option value="UD">UD</option>';
									provinciaDiv = provinciaDiv + '<option value="VA">VA</option>';
									provinciaDiv = provinciaDiv + '<option value="VB">VB</option>';
									provinciaDiv = provinciaDiv + '<option value="VC">VC</option>';
									provinciaDiv = provinciaDiv + '<option value="VE">VE</option>';
									provinciaDiv = provinciaDiv + '<option value="VI">VI</option>';
									provinciaDiv = provinciaDiv + '<option value="VR">VR</option>';
									provinciaDiv = provinciaDiv + '<option value="VS">VS</option>';
									provinciaDiv = provinciaDiv + '<option value="VT">VT</option>';
									provinciaDiv = provinciaDiv + '<option value="VV">VV</option>';
								provinciaDiv = provinciaDiv + '</select>';
				$('#provinciaCorrLayerDiv').html(provinciaDiv);
				$('#comuneCorrLayerDiv').html('<select id="comuneCorrLayer"><option value=""> --- </option></select>');
				$('#capCorrLayerDiv').html('<select id="capCorrLayer"><option value=""> --- </option></select>');
			}
		}
	}

	var mappaComuni=new Array();
	function provinciaChangeLayer(val,c) {
	if(c!=null){
		if(val == '') {
				$('#comuneCorrLayerDiv'+c).html('<select id="comuneCorrLayer'+c+'"><option value=""> --- </option></select>');
				$('#capCorrLayerDiv'+c).html('<select id="capCorrLayer'+c+'"><option value=""> --- </option></select>');
			} else {
				var url = cgi_script + '/nsf/ProvinciaChange.do',
				parameters = {
					valore : val
				},
				successFunc = function (esito) {
					if (esito.code == 'ko') {
					} else {
						var comuniDiv = '<select id="comuneCorrLayer'+c+'" onchange=\'comuneChangeLayer($("option:selected", this).val(),'+c+')\'>';
						comuniDiv = comuniDiv + '<option value="">Seleziona il comune</option>';
						for (var i=0 ; i<esito.comuniCap.length ; i++) {
							var comune = esito.comuniCap[i].split("~")[0];
							comuniDiv = comuniDiv + '<option value="' + comune + '">' + comune + '</option>';
						}
						comuniDiv = comuniDiv + '</select>';
						$('#comuneCorrLayerDiv'+c).html(comuniDiv);
						var capDiv = '<select id="capCorrLayer'+c+'">';
						capDiv = capDiv + '<option value=""> --- </option>';
						capDiv = capDiv + '</select>';
						$('#capCorrLayerDiv'+c).html(capDiv);
						for (var i=0 ; i<esito.comuniCap.length ; i++) {
							mappaComuni[i] = esito.comuniCap[i];
						}
						if($("#comuneCorr"+c).length && $("#comuneCorr"+c).val() != '') {
							comuneChangeLayer($("#comuneCorr"+c).val());
							$('#comuneCorrLayer'+c).val($('#comuneCorr'+c).val());
						}
					}
				},
				failureFunc = function () { 
					alert('Errore generico, riprovare piu tardi.')
				};
				jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
			}
	
		}else{
			if(val == '') {
				$('#comuneCorrLayerDiv').html('<select id="comuneCorrLayer"><option value=""> --- </option></select>');
				$('#capCorrLayerDiv').html('<select id="capCorrLayer"><option value=""> --- </option></select>');
			} else {
				var url = cgi_script + '/nsf/ProvinciaChange.do',
				parameters = {
					valore : val
				},
				successFunc = function (esito) {
					if (esito.code == 'ko') {
					} else {
						var comuniDiv = '<select id="comuneCorrLayer" onchange=\'comuneChangeLayer($("option:selected", this).val(),null)\'>';
						comuniDiv = comuniDiv + '<option value="">Seleziona il comune</option>';
						for (var i=0 ; i<esito.comuniCap.length ; i++) {
							var comune = esito.comuniCap[i].split("~")[0];
							comuniDiv = comuniDiv + '<option value="' + comune + '">' + comune + '</option>';
						}
						comuniDiv = comuniDiv + '</select>';
						$('#comuneCorrLayerDiv').html(comuniDiv);
						var capDiv = '<select id="capCorrLayer">';
						capDiv = capDiv + '<option value=""> --- </option>';
						capDiv = capDiv + '</select>';
						$('#capCorrLayerDiv').html(capDiv);
						for (var i=0 ; i<esito.comuniCap.length ; i++) {
							mappaComuni[i] = esito.comuniCap[i];
						}
						if($("#comuneCorr").length && $("#comuneCorr").val() != '') {
							comuneChangeLayer($("#comuneCorr").val());
							$('#comuneCorrLayer').val($('#comuneCorr').val());
						}
					}
				},
				failureFunc = function () { 
					alert('Errore generico, riprovare piu tardi.')
				};
				jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
			}
		}
	}


	function comuneChangeLayer(val,s) {
	
	var numInt  = document.buyFundForm.numIntestatari.value;
	
		var cap1 = 0;
		var cap2 = 0;
		if(s!=null){
			if(val == '') {
				$('#capCorrLayerDiv'+s).html('<select id="capCorrLayer'+s+'"><option value=""> --- </option></select>');
			} else {
				for (var i=0 ; i<mappaComuni.length ; i++) {			
					if (mappaComuni[i].split("~")[0] == val) {
						cap1 = mappaComuni[i].split("~")[1];
						cap2 = mappaComuni[i].split("~")[2];
					}
				}
				
				var capDiv = '<select id="capCorrLayer"+s>';
				if(cap1 != cap2) {
					capDiv = capDiv + '<option value="">Seleziona il CAP</option>';
					for (var i=cap1 ; i<=cap2 ; i++) {
						for (var i=cap1 ; i<=cap2 ; i++) {
							i = '' + i;
							while(i.length < 5) {
								i = '0' + i;
							}
							capDiv = capDiv + '<option value="' + i + '">' + i + '</option>';
						}
					}
					capDiv = capDiv + '</select>';
				} else {
					capDiv = '<td id="capCorrLayerDiv'+s+'" colspan="3"><input type="text" id="capCorrLayer'+s+'" class="medio" value="' + cap1 + '"></td><input id="capCorrLayer'+s+'" type="hidden" value="' + cap1 + '"/>';
				}
				$('#capCorrLayerDiv'+s).html(capDiv);
				if($("#capCorr"+s).length && $("#capCorr"+s).val() != '') {
					$('#capCorrLayer'+s).val($('#capCorr'+s).val());
				}
			}
		}else{
		if(val == '') {
			$('#capCorrLayerDiv').html('<select id="capCorrLayer"><option value=""> --- </option></select>');
		} else {
			for (var i=0 ; i<mappaComuni.length ; i++) {			
				if (mappaComuni[i].split("~")[0] == val) {
					cap1 = mappaComuni[i].split("~")[1];
					cap2 = mappaComuni[i].split("~")[2];
				}
			}
			
			var capDiv = '<select id="capCorrLayer">';
			if(cap1 != cap2) {
				capDiv = capDiv + '<option value="">Seleziona il CAP</option>';
				for (var i=cap1 ; i<=cap2 ; i++) {
					for (var i=cap1 ; i<=cap2 ; i++) {
						i = '' + i;
						while(i.length < 5) {
							i = '0' + i;
						}
						capDiv = capDiv + '<option value="' + i + '">' + i + '</option>';
					}
				}
				capDiv = capDiv + '</select>';
			} else {
				capDiv = '<td id="capCorrLayerDiv" colspan="3"><input type="text" id="capCorrLayer" class="medio" value="' + cap1 + '"></td><input id="capCorrLayer" type="hidden" value="' + cap1 + '"/>';
			}
			$('#capCorrLayerDiv').html(capDiv);
			if($("#capCorr").length && $("#capCorr").val() != '') {
				$('#capCorrLayer').val($('#capCorr').val());
			}
		}
		}
	}
	
	
	
	var depConAss=["NN"];
	
	

	
		
	function requestTmp(){

		var societa = document.buyFundForm.codiceSocietaDiGestione.value;
		var numero_casuale=Math.random();
			
		$('buyFundForm').action = cgi_script+"/FMP/tempistiche.jsp?cf="+numero_casuale+"&idSicav="+societa+"&tipoOp=Acquisto";
		$('buyFundForm').request({			
				onFailure: function() { errorPage();},
				onSuccess: function(t) {$('tempi').innerHTML = t.responseText;obscurateAll(1);openAlert('layeralert3');}
				});
		//}
	}


	function errorPage(){
		$( "layeralert3").innerHTML = "Dato non disponibile";
	}

		
	var xmlHttpNew;
	
	function loadMargine(){
		formInsOrd = this.document.buyFundForm;
		if(6>1){
				var index = formInsOrd.deposito.selectedIndex;
		   		var value = formInsOrd.deposito[index].value;
		}else{
			var value = formInsOrd.deposito.value;
		}
		   		requestMargine(value);

				   		
	}


	function requestMargine(dep){
		var numero_casuale=Math.random();
		createXMLHttpRequestNew();		
		xmlHttpNew.onreadystatechange = function() {handleStateChange();};
		xmlHttpNew.open( 'GET', cgi_script + "/FMP/MargUtilFinance.do?cf="+numero_casuale+"&deposito=" + dep , true );
		xmlHttpNew.send(null);
	}

	function handleStateChange() {	
		if (xmlHttpNew.readyState == 4) {							
				if (xmlHttpNew.status == 200) {
					parseXMLNew( xmlHttpNew.responseXML );
				} else {			
				document.getElementById( "margine").innerHTML = "Dato non disponibile";
				}
		}	
	}

	function parseXMLNew( xml ) {			
		if( xml.getElementsByTagName( "ERR" ).length != 0 )	{			
			document.getElementById( 'margine' ).innerHTML = "Dato non disponibile";
		} else {			
			document.getElementById('margine').innerHTML = xmlHttpNew.responseText;
			document.getElementById('margineOut').innerHTML = '<strong>'+ xmlHttpNew.responseText +'&nbsp;EUR</strong>';
		}
	}
	
	function createXMLHttpRequestNew() {	   
		if (window.XMLHttpRequest) { 
			xmlHttpNew = new XMLHttpRequest();
				if (xmlHttpNew.overrideMimeType) {
					xmlHttpNew.overrideMimeType('text/xml');						
				}
		}
		else if (window.ActiveXObject) {
			try {
				xmlHttpNew = new ActiveXObject("Msxml2.XMLHTTP");
			} catch (e) {
				try {
					xmlHttpNew = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (e) {
					alert( e );
				}
			}
		}
		if (!xmlHttpNew) {
			alert('Giving up :( Cannot create an XMLHTTP instance');
				return false;
		}
		return true;
	}
	
	function disabilitaPac(enable){
		if(document.buyFundForm.PAC.value=="S" ){
    		document.buyFundForm.radiobuttonPic.checked = true;
    		document.buyFundForm.radiobuttonPac.checked = false;
		}

			
		$('periodoPianiEpsilon').style.display = 'none';
		$('periodoPiani').style.display = 'none';
		$('periodoPianiSicav').style.display = 'none';

		$('dirFissi').innerHTML = '12,50 EUR';
		importoMinSuc();
		document.buyFundForm.dirittiFissi.value = '12,50 EUR';
		document.getElementById('importoPic').style.display = '';
		document.getElementById('versamentiPac').style.display = 'none';
		document.getElementById('importoPac').style.display = 'none';
		document.getElementById('pianiPac').style.display = 'none';
		document.getElementById('durataPiano').style.display = 'none';
		$('versamentiPacOutPost').style.display = 'none';
		$('versamentiPacOutPostFirst').style.display = 'none';
	}
	
	function svuotaPac(){
		num_option=document.getElementById('SelectPac').options.length;
		for(a=num_option;a>=0;a--){
			document.getElementById('SelectPac').options[a]=null;
		}
	}
	
	function disabilitaPic(enable){
	
		num_option=document.getElementById('SelectPac').options.length;
		svuotaPac();
		if(document.buyFundForm.PAC.value=="S" ){
			document.buyFundForm.radiobuttonPic.checked = false;
			document.buyFundForm.radiobuttonPac.checked = true;
		}
		if(161 == 3){
			document.getElementById('importoMinSuc').innerHTML = 0.0;
		}else{
			importoMinSuc();
		}
		document.getElementById('importoPac').style.display = '';
		document.getElementById('versamentiPac').style.display = '';
		document.getElementById('importoPic').style.display = 'none';
		document.getElementById('pianiPac').style.display = '';
		document.getElementById('durataPiano').style.display = '';
		$('dirFissi').innerHTML = '20 EUR Versamento iniziale PAC - 2,5 EUR rate successive';
		
		document.buyFundForm.dirittiFissi.value = '20 EUR Versamento iniziale PAC - 2,5 EUR rate successive';
		var cod="";
		var tip="";
		var nota="";
		var notaVersamento="";
		if(161==3 && 19==19){
			var selPac = document.getElementById('SelectPac');		
			var codicePiano = "";
	  			  				var txt = new String('AM009');
	  				var lung = txt.length - 1;
	  				codicePiano = 'AM009';
	  				if(codicePiano.substring(lung)=="M"){
	  				cod = '1200';
	  				tip = 'C';
	  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
					notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
					var desc = '36 versamenti';		
					option = document.createElement("option");		
					option.value = '1200*C*100*36 versamenti*AM009*3*12*100*36';		
					option.appendChild(document.createTextNode(desc));
					selPac.appendChild(option);	
					document.buyFundForm.anticipoRate.value = 'N';
					if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}				
					}
				  				var txt = new String('AM009');
	  				var lung = txt.length - 1;
	  				codicePiano = 'AM009';
	  				if(codicePiano.substring(lung)=="M"){
	  				cod = '1200';
	  				tip = 'E';
	  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
					notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
					var desc = '60 versamenti';		
					option = document.createElement("option");		
					option.value = '1200*E*100*60 versamenti*AM009*5*12*100*60';		
					option.appendChild(document.createTextNode(desc));
					selPac.appendChild(option);	
					document.buyFundForm.anticipoRate.value = 'N';
					if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}				
					}
				  				var txt = new String('AM009');
	  				var lung = txt.length - 1;
	  				codicePiano = 'AM009';
	  				if(codicePiano.substring(lung)=="M"){
	  				cod = '1200';
	  				tip = 'G';
	  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
					notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
					var desc = '120 versamenti';		
					option = document.createElement("option");		
					option.value = '1200*G*100*120 versamenti*AM009*10*12*100*120';		
					option.appendChild(document.createTextNode(desc));
					selPac.appendChild(option);	
					document.buyFundForm.anticipoRate.value = 'N';
					if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}				
					}
				  				var txt = new String('AM009');
	  				var lung = txt.length - 1;
	  				codicePiano = 'AM009';
	  				if(codicePiano.substring(lung)=="M"){
	  				cod = '1200';
	  				tip = 'H';
	  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
					notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
					var desc = '180 versamenti';		
					option = document.createElement("option");		
					option.value = '1200*H*100*180 versamenti*AM009*15*12*100*180';		
					option.appendChild(document.createTextNode(desc));
					selPac.appendChild(option);	
					document.buyFundForm.anticipoRate.value = 'N';
					if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}				
					}
				  				var txt = new String('AM009');
	  				var lung = txt.length - 1;
	  				codicePiano = 'AM009';
	  				if(codicePiano.substring(lung)=="M"){
	  				cod = '1200';
	  				tip = 'I';
	  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
					notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
					var desc = '240 versamenti';		
					option = document.createElement("option");		
					option.value = '1200*I*100*240 versamenti*AM009*20*12*100*240';		
					option.appendChild(document.createTextNode(desc));
					selPac.appendChild(option);	
					document.buyFundForm.anticipoRate.value = 'N';
					if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}				
					}
				  				var txt = new String('AM009');
	  				var lung = txt.length - 1;
	  				codicePiano = 'AM009';
	  				if(codicePiano.substring(lung)=="M"){
	  				cod = '1200';
	  				tip = 'C';
	  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
					notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
					var desc = '36 versamenti';		
					option = document.createElement("option");		
					option.value = '1200*C*100*36 versamenti*AM009*3*12*100*36';		
					option.appendChild(document.createTextNode(desc));
					selPac.appendChild(option);	
					document.buyFundForm.anticipoRate.value = 'N';
					if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}				
					}
				  				var txt = new String('AM009');
	  				var lung = txt.length - 1;
	  				codicePiano = 'AM009';
	  				if(codicePiano.substring(lung)=="M"){
	  				cod = '1200';
	  				tip = 'E';
	  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
					notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
					var desc = '60 versamenti';		
					option = document.createElement("option");		
					option.value = '1200*E*100*60 versamenti*AM009*5*12*100*60';		
					option.appendChild(document.createTextNode(desc));
					selPac.appendChild(option);	
					document.buyFundForm.anticipoRate.value = 'N';
					if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}				
					}
				  				var txt = new String('AM009');
	  				var lung = txt.length - 1;
	  				codicePiano = 'AM009';
	  				if(codicePiano.substring(lung)=="M"){
	  				cod = '1200';
	  				tip = 'G';
	  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
					notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
					var desc = '120 versamenti';		
					option = document.createElement("option");		
					option.value = '1200*G*100*120 versamenti*AM009*10*12*100*120';		
					option.appendChild(document.createTextNode(desc));
					selPac.appendChild(option);	
					document.buyFundForm.anticipoRate.value = 'N';
					if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}				
					}
				  				var txt = new String('AM009');
	  				var lung = txt.length - 1;
	  				codicePiano = 'AM009';
	  				if(codicePiano.substring(lung)=="M"){
	  				cod = '1200';
	  				tip = 'H';
	  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
					notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
					var desc = '180 versamenti';		
					option = document.createElement("option");		
					option.value = '1200*H*100*180 versamenti*AM009*15*12*100*180';		
					option.appendChild(document.createTextNode(desc));
					selPac.appendChild(option);	
					document.buyFundForm.anticipoRate.value = 'N';
					if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}				
					}
				  				var txt = new String('AM009');
	  				var lung = txt.length - 1;
	  				codicePiano = 'AM009';
	  				if(codicePiano.substring(lung)=="M"){
	  				cod = '1200';
	  				tip = 'I';
	  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
					notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
					var desc = '240 versamenti';		
					option = document.createElement("option");		
					option.value = '1200*I*100*240 versamenti*AM009*20*12*100*240';		
					option.appendChild(document.createTextNode(desc));
					selPac.appendChild(option);	
					document.buyFundForm.anticipoRate.value = 'N';
					if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}				
					}
					
		}else if('S'=="S"){		
			var i = document.buyFundForm.SelectPeriodoSicav.selectedIndex;
			document.buyFundForm.descrizionePeriodo.value = document.buyFundForm.SelectPeriodoSicav[i].text;
			
			var selPac = document.getElementById('SelectPac');		
			
	  			  				var txt = new String('AM009');
	  				codicePiano = 'AM009';
	  				
	  				if('161'==178)
  						var valCodPiano =codicePiano.substring(3,4);
  					else
  						var valCodPiano =codicePiano.substring(1,2); 				
  				
	  				if(valCodPiano=="M"){
	  				cod = '1200';
	  				tip = 'C';
	  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
					notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
					var desc = '36 versamenti';		
					option = document.createElement("option");		
					option.value = '1200*C*100*36 versamenti*AM009*3*12*100*36';		
					option.appendChild(document.createTextNode(desc));
					selPac.appendChild(option);	
					document.buyFundForm.anticipoRate.value = 'N';
					if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
					}
				  				var txt = new String('AM009');
	  				codicePiano = 'AM009';
	  				
	  				if('161'==178)
  						var valCodPiano =codicePiano.substring(3,4);
  					else
  						var valCodPiano =codicePiano.substring(1,2); 				
  				
	  				if(valCodPiano=="M"){
	  				cod = '1200';
	  				tip = 'E';
	  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
					notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
					var desc = '60 versamenti';		
					option = document.createElement("option");		
					option.value = '1200*E*100*60 versamenti*AM009*5*12*100*60';		
					option.appendChild(document.createTextNode(desc));
					selPac.appendChild(option);	
					document.buyFundForm.anticipoRate.value = 'N';
					if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
					}
				  				var txt = new String('AM009');
	  				codicePiano = 'AM009';
	  				
	  				if('161'==178)
  						var valCodPiano =codicePiano.substring(3,4);
  					else
  						var valCodPiano =codicePiano.substring(1,2); 				
  				
	  				if(valCodPiano=="M"){
	  				cod = '1200';
	  				tip = 'G';
	  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
					notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
					var desc = '120 versamenti';		
					option = document.createElement("option");		
					option.value = '1200*G*100*120 versamenti*AM009*10*12*100*120';		
					option.appendChild(document.createTextNode(desc));
					selPac.appendChild(option);	
					document.buyFundForm.anticipoRate.value = 'N';
					if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
					}
				  				var txt = new String('AM009');
	  				codicePiano = 'AM009';
	  				
	  				if('161'==178)
  						var valCodPiano =codicePiano.substring(3,4);
  					else
  						var valCodPiano =codicePiano.substring(1,2); 				
  				
	  				if(valCodPiano=="M"){
	  				cod = '1200';
	  				tip = 'H';
	  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
					notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
					var desc = '180 versamenti';		
					option = document.createElement("option");		
					option.value = '1200*H*100*180 versamenti*AM009*15*12*100*180';		
					option.appendChild(document.createTextNode(desc));
					selPac.appendChild(option);	
					document.buyFundForm.anticipoRate.value = 'N';
					if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
					}
				  				var txt = new String('AM009');
	  				codicePiano = 'AM009';
	  				
	  				if('161'==178)
  						var valCodPiano =codicePiano.substring(3,4);
  					else
  						var valCodPiano =codicePiano.substring(1,2); 				
  				
	  				if(valCodPiano=="M"){
	  				cod = '1200';
	  				tip = 'I';
	  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
					notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
					var desc = '240 versamenti';		
					option = document.createElement("option");		
					option.value = '1200*I*100*240 versamenti*AM009*20*12*100*240';		
					option.appendChild(document.createTextNode(desc));
					selPac.appendChild(option);	
					document.buyFundForm.anticipoRate.value = 'N';
					if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
					}
				  				var txt = new String('AM009');
	  				codicePiano = 'AM009';
	  				
	  				if('161'==178)
  						var valCodPiano =codicePiano.substring(3,4);
  					else
  						var valCodPiano =codicePiano.substring(1,2); 				
  				
	  				if(valCodPiano=="M"){
	  				cod = '1200';
	  				tip = 'C';
	  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
					notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
					var desc = '36 versamenti';		
					option = document.createElement("option");		
					option.value = '1200*C*100*36 versamenti*AM009*3*12*100*36';		
					option.appendChild(document.createTextNode(desc));
					selPac.appendChild(option);	
					document.buyFundForm.anticipoRate.value = 'N';
					if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
					}
				  				var txt = new String('AM009');
	  				codicePiano = 'AM009';
	  				
	  				if('161'==178)
  						var valCodPiano =codicePiano.substring(3,4);
  					else
  						var valCodPiano =codicePiano.substring(1,2); 				
  				
	  				if(valCodPiano=="M"){
	  				cod = '1200';
	  				tip = 'E';
	  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
					notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
					var desc = '60 versamenti';		
					option = document.createElement("option");		
					option.value = '1200*E*100*60 versamenti*AM009*5*12*100*60';		
					option.appendChild(document.createTextNode(desc));
					selPac.appendChild(option);	
					document.buyFundForm.anticipoRate.value = 'N';
					if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
					}
				  				var txt = new String('AM009');
	  				codicePiano = 'AM009';
	  				
	  				if('161'==178)
  						var valCodPiano =codicePiano.substring(3,4);
  					else
  						var valCodPiano =codicePiano.substring(1,2); 				
  				
	  				if(valCodPiano=="M"){
	  				cod = '1200';
	  				tip = 'G';
	  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
					notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
					var desc = '120 versamenti';		
					option = document.createElement("option");		
					option.value = '1200*G*100*120 versamenti*AM009*10*12*100*120';		
					option.appendChild(document.createTextNode(desc));
					selPac.appendChild(option);	
					document.buyFundForm.anticipoRate.value = 'N';
					if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
					}
				  				var txt = new String('AM009');
	  				codicePiano = 'AM009';
	  				
	  				if('161'==178)
  						var valCodPiano =codicePiano.substring(3,4);
  					else
  						var valCodPiano =codicePiano.substring(1,2); 				
  				
	  				if(valCodPiano=="M"){
	  				cod = '1200';
	  				tip = 'H';
	  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
					notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
					var desc = '180 versamenti';		
					option = document.createElement("option");		
					option.value = '1200*H*100*180 versamenti*AM009*15*12*100*180';		
					option.appendChild(document.createTextNode(desc));
					selPac.appendChild(option);	
					document.buyFundForm.anticipoRate.value = 'N';
					if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
					}
				  				var txt = new String('AM009');
	  				codicePiano = 'AM009';
	  				
	  				if('161'==178)
  						var valCodPiano =codicePiano.substring(3,4);
  					else
  						var valCodPiano =codicePiano.substring(1,2); 				
  				
	  				if(valCodPiano=="M"){
	  				cod = '1200';
	  				tip = 'I';
	  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
					notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
					var desc = '240 versamenti';		
					option = document.createElement("option");		
					option.value = '1200*I*100*240 versamenti*AM009*20*12*100*240';		
					option.appendChild(document.createTextNode(desc));
					selPac.appendChild(option);	
					document.buyFundForm.anticipoRate.value = 'N';
					if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
					}
						if(161!=114){
								cod=1200;
				document.buyFundForm.sogliaImportoPacSicav.value = cod;
							}else{
				document.buyFundForm.sogliaImportoPacSicav.value = 0;
			}
		}else{

			var selPac = document.getElementById('SelectPac');		
	
	  							nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
					notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
					var desc = '36 versamenti';		
					option = document.createElement("option");		
					option.value = '1200*C*100*36 versamenti*AM009*3*12*100*36';		
					option.appendChild(document.createTextNode(desc));
					selPac.appendChild(option);
					document.buyFundForm.anticipoRate.value = 'N';
					if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
								nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
					notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
					var desc = '60 versamenti';		
					option = document.createElement("option");		
					option.value = '1200*E*100*60 versamenti*AM009*5*12*100*60';		
					option.appendChild(document.createTextNode(desc));
					selPac.appendChild(option);
					document.buyFundForm.anticipoRate.value = 'N';
					if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
								nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
					notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
					var desc = '120 versamenti';		
					option = document.createElement("option");		
					option.value = '1200*G*100*120 versamenti*AM009*10*12*100*120';		
					option.appendChild(document.createTextNode(desc));
					selPac.appendChild(option);
					document.buyFundForm.anticipoRate.value = 'N';
					if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
								nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
					notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
					var desc = '180 versamenti';		
					option = document.createElement("option");		
					option.value = '1200*H*100*180 versamenti*AM009*15*12*100*180';		
					option.appendChild(document.createTextNode(desc));
					selPac.appendChild(option);
					document.buyFundForm.anticipoRate.value = 'N';
					if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
								nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
					notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
					var desc = '240 versamenti';		
					option = document.createElement("option");		
					option.value = '1200*I*100*240 versamenti*AM009*20*12*100*240';		
					option.appendChild(document.createTextNode(desc));
					selPac.appendChild(option);
					document.buyFundForm.anticipoRate.value = 'N';
					if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
								nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
					notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
					var desc = '36 versamenti';		
					option = document.createElement("option");		
					option.value = '1200*C*100*36 versamenti*AM009*3*12*100*36';		
					option.appendChild(document.createTextNode(desc));
					selPac.appendChild(option);
					document.buyFundForm.anticipoRate.value = 'N';
					if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
								nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
					notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
					var desc = '60 versamenti';		
					option = document.createElement("option");		
					option.value = '1200*E*100*60 versamenti*AM009*5*12*100*60';		
					option.appendChild(document.createTextNode(desc));
					selPac.appendChild(option);
					document.buyFundForm.anticipoRate.value = 'N';
					if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
								nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
					notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
					var desc = '120 versamenti';		
					option = document.createElement("option");		
					option.value = '1200*G*100*120 versamenti*AM009*10*12*100*120';		
					option.appendChild(document.createTextNode(desc));
					selPac.appendChild(option);
					document.buyFundForm.anticipoRate.value = 'N';
					if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
								nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
					notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
					var desc = '180 versamenti';		
					option = document.createElement("option");		
					option.value = '1200*H*100*180 versamenti*AM009*15*12*100*180';		
					option.appendChild(document.createTextNode(desc));
					selPac.appendChild(option);
					document.buyFundForm.anticipoRate.value = 'N';
					if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
								nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
					notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
					var desc = '240 versamenti';		
					option = document.createElement("option");		
					option.value = '1200*I*100*240 versamenti*AM009*20*12*100*240';		
					option.appendChild(document.createTextNode(desc));
					selPac.appendChild(option);
					document.buyFundForm.anticipoRate.value = 'N';
					if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
					}
		
		/* $('notaImportoIniziale').innerHTML = "" +nota +""; */ 
		$('#notaImportoIniziale').attr("data-tooltip",nota); 
		/* $('notaNumeroVersamenti').innerHTML = "" + notaVersamento +""; */ 
		$('#notaNumeroVersamenti').attr("data-tooltip",notaVersamento);
		
		if(161 == 3 && 19==19){
			$('periodoPianiEpsilon').style.display = '';
		}

		if('S'=="S"){
			$('periodoPianiSicav').style.display = '';
		}
		if(161 == 1 || 161 == 6){
			$('periodoPiani').style.display = '';
		}
		caricaImporto();
	}
	
	function calcoloImportoDivisa(importo){
			var imp = new Number(importo.value);
			var data = document.buyFundForm.dataCambio.value.replace('.','/');
			var cambio = new Number(document.buyFundForm.cambio.value.replace(',','.'));
			var impSucFin = ((imp/cambio)*1.06).toFixed(0);
			$('outImportoDivisa').innerHTML = " corrispondenti a <strong>" + impSucFin + " EUR</strong> al cambio del <strong>" +data.replace('.','/')+"</strong>" ;
			document.buyFundForm.importoValuta.value = impSucFin;
			document.buyFundForm.importoDivisa.value = imp;
	}
	
	function importoMinSuc(){
	
		 if(false)
			importoMinimoSucValuta();
		else
			importoMinimoSucEuro();
			
		
	}
	
	function importoMinimoSucValuta(){
		if(false){
			var impSucFin = new Number(100.0);
		document.getElementById('importoMinSuc').innerHTML = impSucFin.valueOf()+ " " + 'USD';
		}else{
			var impSucFin = new Number(100.0);
			document.getElementById('importoMinSuc').innerHTML = impSucFin.valueOf() + " EUR";
		}
	}
	
	function importoMinimoSucEuro(){
		if((161 == 125 || 161 == 126)&&(0.0>0)){
		var dirFissi = '12,50 EUR';
		var numDirFissi = new Number(dirFissi.substring(0,2));
		var impSuc = 102.76 * 0.0/100;
		var impSucFin = Math.ceil(impSuc) + numDirFissi;
		document.getElementById('importoMinSuc').innerHTML = impSucFin + " EUR";
		}else{
		var impSucFin = new Number(100.0);
		document.getElementById('importoMinSuc').innerHTML = impSucFin.valueOf()+ " EUR";
		}
	}
	
	function importoMinIni(){
		if(false)
			importoMinimoValuta();
		else
			importoMinimoEuro();
		
	}
	
	function importoMinimoValuta(){
		if(false){
			var impSucFin = new Number(100.0);
			document.getElementById('importoMinIni').innerHTML = impSucFin + " " + 'USD';
			document.getElementById('tooltipdirini').style.display = 'none';
		}else{
			var impSucFin = new Number(100.0);
			document.getElementById('importoMinIni').innerHTML = impSucFin.valueOf()+ " EUR";
			document.getElementById('tooltipdirini').style.display = 'none';
		}
	}	
	
	
	function importoMinimoEuro(){	
		if((161 == 125 || 161 == 126)&&(0.0>0)){
		var dirFissi = '12,50 EUR';
		var numDirFissi = new Number(dirFissi.substring(0,2));
		var impSuc = 102.76;
		var impSucFin = Math.ceil(impSuc) + numDirFissi;
		document.getElementById('importoMinIni').innerHTML = impSucFin + " EUR";
		document.getElementById('tooltipdirini').style.display = '';
		}else{
		var impSucFin = new Number(100.0);
		document.getElementById('importoMinIni').innerHTML = impSucFin.valueOf()+ " EUR";
		document.getElementById('tooltipdirini').style.display = 'none';
		}
	}
	
	function proseguiPIC(){
		var imp = document.buyFundForm.importo;			
		var dec = document.buyFundForm.decimale;
		var impSuc = '100.0';
		if((161 == 125 || 161 == 126)&&(0.0!=0)){
		var nav = 102.76;
		var perc = 0.0;
		impSuc = Math.ceil(nav * perc/100);
		}
		var difImporti = 0;
		difImporti = imp.value - impSuc;
		var avanti = true;
		
		if (imp.value == ''){
				document.getElementById('erroreForm').style.display = '';
				document.getElementById('messaggio').style.display = '';
				document.getElementById('messaggio').innerHTML = "Inserire l&#39;importo";
				imp.value = '';
				avanti = false;
		}else if( isNaN(imp.value)){
			document.getElementById('erroreForm').style.display = '';
			document.getElementById('messaggio').style.display = '';
			document.getElementById('messaggio').innerHTML = "L&#39;importo deve essere un valore numerico";
			avanti = false;
		}else if(dec.value==''){
			document.getElementById('erroreForm').style.display = '';
			document.getElementById('messaggio').style.display = '';
			document.getElementById('messaggio').innerHTML = "Inserire la parte decimale dell&#39;importo";
			avanti = false;
		}else if( isNaN(dec.value)){
			document.getElementById('erroreForm').style.display = '';
			document.getElementById('messaggio').style.display = '';
			document.getElementById('messaggio').innerHTML = "La parte decimale dell&#39;importo deve essere un valore numerico";
			avanti = false;
		}else if( difImporti < 0){
			document.getElementById('erroreForm').style.display = '';
			document.getElementById('messaggio').style.display = '';
			document.getElementById('messaggio').innerHTML = "Il valore dell&#39;importo deve essere uguale o superiore all&#39;importo minimo";
			avanti = false;
		}
		
		
		if(161==144 && '-'=="x"){
			if(document.buyFundForm.cedolaSicav[0].checked){
				document.buyFundForm.reinvestimentoSicav.value = "S";
				$('textCedSicav').innerHTML = "Voglio reinvestirli automaticamente";
			}else if(document.buyFundForm.cedolaSicav[1].checked){
				document.buyFundForm.reinvestimentoSicav.value = "N";
				$('textCedSicav').innerHTML = "Voglio l'accredito della cedola sul C/C";
			}else{
				document.getElementById('erroreForm').style.display = '';
				document.getElementById('messaggio').innerHTML = "E' necessario selezionare la destinazione dei proventi";
				avanti = false;
			}
		}
		if(avanti){			
				$('datiOrdineInput').style.display = 'none';
				$('erroreForm').style.display = 'none';			
				$('avanti').style.display = 'none';
//				$('modifica').style.display = '';
				$('importoPacOut').style.display = 'none';
				$('versamentiPacOut').style.display = 'none';
				$('versamentiPacOutPost').style.display = 'none';
				$('versamentiPacOutPostFirst').style.display = 'none';
				$('modalitaOutPac').style.display = 'none';
				$('importoPicOut').style.display = '';
				$('depositoOut').innerHTML = '<strong>'+document.buyFundForm.deposito.value+'</strong>';
				if(false){
					$('impPicOut').innerHTML = "<strong>"+document.buyFundForm.importo.value+"&nbsp;USD</strong> corrispondenti a <strong>" + document.buyFundForm.importoValuta.value + " EUR</strong> al cambio del <strong>" + document.buyFundForm.dataCambio.value+"</strong>" ;			
				}else
					$('impPicOut').innerHTML = '<strong>'+document.buyFundForm.importo.value+'&nbsp;EUR</strong>';
				$('modalitaOutPic').style.display = '';
				$('datiOrdineOutput').style.display = '';
				if(161==144){
					$('reinvSicav').style.display = '';
				}
				controlloEsenzione();
				anteprimaOrdine();
			
		}
	}
	
	function controlloEsenzione(){
		if(161==6){
			if(document.buyFundForm.esenzione.checked){
				document.buyFundForm.esenzioneEtica.value = document.buyFundForm.esenzione.value;
				$('esenEticaOut').style.display = '';
				document.buyFundForm.esenzioneOut.checked = true;
				document.buyFundForm.esenzioneOut.disabled = true;
			}else{
				document.buyFundForm.esenzioneEtica.value = "";
				$('esenEticaOut').style.display = '';
				document.buyFundForm.esenzioneOut.checked = false;
				document.buyFundForm.esenzioneOut.disabled = true;
			}
		}else{
		$('esenEticaOut').style.display = 'none';
		}
	}
	
	function verificaEpsilon(rataIni,verIni,ratePac){
		
		var importoIniziale = 1000;
		
		var verIniziale = parseFloat(rataIni)*parseFloat(verIni);
		
		var verTotale = parseFloat(rataIni)*parseFloat(ratePac);
		
		var difVerTotali = 0;
		var difImporti = 0;
		
		difImporti = verTotale - importoIniziale;
		difImporti = verIniziale - importoIniziale;
		if(difImporti < 0){
			document.getElementById('messaggio').innerHTML = "Il versamento iniziale deve essere pari ad almeno 1000 &euro;.  Per rispettare l'importo di primo versamento, aumenta il numero di rate o il loro importo.";
			return false;
		}else{
			if(difImporti < 0){
				var numVerNec = 1000/rataIni;
				document.getElementById('messaggio').innerHTML = "Il versamento iniziale deve essere pari ad almeno 1000 &euro;.  Per rispettare l'importo di primo versamento, aumenta il numero di rate o il loro importo.";
				return false;
			}else{
				return true;
			}
		}
		
	}
	
	function verificaEtica(rataIni,verIni,ratePac){
		
		var importoIniziale = $('#SelectPac').find('option:selected').val().split("*")[0];
		
		var verIniziale = parseFloat(rataIni)*parseFloat(verIni);
		
		var verTotale = parseFloat(rataIni)*parseFloat(ratePac);
		
		var difVerTotali = 0;
		var difImporti = 0;
		
		difImporti = verTotale - importoIniziale;
		difImporti = verIniziale - importoIniziale;
		if(difImporti < 0){
			document.getElementById('messaggio').innerHTML = "Il versamento iniziale deve essere pari ad almeno "+importoIniziale+" &euro;. Per rispettare l'importo di primo versamento, aumenta il numero di rate o il loro importo.";
			return false;
		}else{
			if(difImporti < 0){
				var numVerNec = 1000/rataIni;
				document.getElementById('messaggio').innerHTML = "Il versamento iniziale deve essere pari ad almeno "+importoIniziale+" &euro;. Per rispettare l'importo di primo versamento, aumenta il numero di rate o il loro importo.";
				return false;
			}else{
				return true;
			}
		}
		
	}
	
	function verificaSicav(rataIni,verIni,ratePac,impIni){
		var impCarmignac = 0;
		var importoIniziale = 0;
		if(161 == 125 || 161 == 126){
			impCarmignac = 102.76;
			var impSucFin = Math.ceil(impCarmignac);
			importoIniziale = new Number(impSucFin);
		}else
		importoIniziale = new Number(impIni);
		
		var verIniziale = parseFloat(rataIni)*parseFloat(verIni);
		
		var verTotale = parseFloat(rataIni)*parseFloat(ratePac);
		
		var difVerTotali = 0;
		var difImporti = 0;
		
		difImporti = verTotale - importoIniziale;
		difImporti = verIniziale - importoIniziale;
		if(difImporti < 0){
			document.getElementById('messaggio').innerHTML = "Il versamento iniziale deve essere pari ad almeno " +importoIniziale+" &euro;.  Per rispettare l'importo di primo versamento, aumenta il numero di rate o il loro importo.";
			return false;
		}else{
			if(difImporti < 0){
				var numVerNec = 1000/rataIni;
				document.getElementById('messaggio').innerHTML = "Il versamento iniziale deve essere pari ad almeno "+importoIniziale+" &euro;.  Per rispettare l'importo di primo versamento, aumenta il numero di rate o il loro importo.";
				return false;
			}else{
				return true;
			}
		}
		
	}
	
	function proseguiPAC(){
		var rataIni = new Number(document.buyFundForm.rata.value);
		
		var verIni = new Number(document.buyFundForm.numVersamenti.value);
		
      	var index = document.buyFundForm.SelectPac.selectedIndex;	   
		var valore = document.buyFundForm.SelectPac[index].value;	
		var ind = valore.lastIndexOf("*");
		
		var ratePac = new Number(valore.substring(ind+1,valore.length));
		
		var testEpsilon = true;
		var testSicav = true;
		var testEtica = true;
		var verTot = parseFloat(rataIni)*parseFloat(ratePac);
		
		var impSuc = 100.0;
		var difImporti = 0;
		difImporti = verTot - impSuc;
		
		if(161==6 || 161==1){
		testEtica = verificaEtica(rataIni,verIni,ratePac);
		}
		if(161==3){
		testEpsilon = verificaEpsilon(rataIni,verIni,ratePac);
		}
		var importoInizialeSicav = document.buyFundForm.sogliaImportoPacSicav.value;
		
		if('S'=="S"){
		testSicav = verificaSicav(rataIni,verIni,ratePac,importoInizialeSicav);
		}
		
		
		if( difImporti < 0){
		
			document.getElementById('erroreForm').style.display = '';
			document.getElementById('messaggio').style.display = '';
			document.getElementById('messaggio').innerHTML = "Il valore dell&#39;importo deve essere uguale o superiore all&#39;importo minimo";
			
		}else if(!testEpsilon){
			document.getElementById('erroreForm').style.display = '';
			document.getElementById('messaggio').style.display = '';
		}else if(!testSicav){
			document.getElementById('erroreForm').style.display = '';
			document.getElementById('messaggio').style.display = '';
		}else if(!testEtica){
			document.getElementById('erroreForm').style.display = '';
			document.getElementById('messaggio').style.display = '';
		}
		else{			
		
			$('erroreForm').style.display = 'none';			
			$('avanti').style.display = 'none';
//			$('modifica').style.display = '';
			$('modalitaOutPic').style.display = 'none';
			$('datiOrdineInput').style.display = 'none';
			$('importoPicOut').style.display = 'none';
			$('importoPacOut').style.display = '';
			$('versamentiPacOut').style.display = '';
			//if('S'=="S")
			//$('versamentiPacOutPost').style.display = '';
			$('modalitaOutPac').style.display = '';
			
						
			$('depositoOut').innerHTML = '<strong>'+document.buyFundForm.deposito.value+'</strong>';
			$('impRataOut').innerHTML = '<strong>'+document.buyFundForm.rata.value+'&nbsp;EUR</strong>';
			$('numVerIni').innerHTML = '<strong>'+document.buyFundForm.numVersamenti.value+'</strong>';
			if(161==4){
			$('descrPeriodo').innerHTML = '<strong> - '+document.buyFundForm.descrizionePeriodo.value+'</strong>';
			}else if(161==3 && 19==19){			
			var ind = $('SelectPeriodoEpsilon').selectedIndex;
			$('descrPeriodo').innerHTML = '<strong> - '+$('SelectPeriodoEpsilon')[ind].text+'</strong>';
			}else if('S'=="S"){			
			var ind = $('SelectPeriodoSicav').selectedIndex;
			$('descrPeriodo').innerHTML = '<strong> - '+$('SelectPeriodoSicav')[ind].text+'</strong>';
			}else{
			$('descrPeriodo').innerHTML = '';
			}
			$('datiOrdineOutput').style.display = '';
			controlloEsenzione();
			var index = $('SelectPac').selectedIndex;
		   	var durata = $('SelectPac')[index].text;
			$('durataPianoOut').innerHTML = '<strong>'+durata+'</strong>';
			anteprimaOrdine();			
		}
		
		if($('erroreForm').style.display!='none') {
			window.scrollTo(0,0);
		}
		
	}
	
	function confermaFatca(){
	//alert(getDatiFacta());
	//controlloTinFatca();
	//checkFields();
		prosegui();
	}
	
	function prosegui(){
	if(document.buyFundForm.PAC.value=="S"){
		if(document.buyFundForm.radiobuttonPic.checked)
			proseguiPIC();
		else if(document.buyFundForm.radiobuttonPac.checked)
			proseguiPAC();
			}else
			proseguiPIC();
	}
	
	
	var xmlHttp = null;
	function anteprimaOrdine(){
		var rataIni = document.buyFundForm.rata.value;
		var importoRata = document.buyFundForm.rata.value;
		var verIni = document.buyFundForm.numVersamenti.value;
		var ratePac = "";
		var numeroAnniPiano ="";
		var codicePiano = "";
		var importoPacSicav = "";
		var numero_casuale=Math.random();
		
		var decimale = document.buyFundForm.decimale.value;
		var deposito = document.buyFundForm.deposito.value;
		var flagPrivacy = "";
		var codiceFondo = document.buyFundForm.codiceFondo.value;
		var codiceSocietaDiGestione = document.buyFundForm.codiceSocietaDiGestione.value;
		var Fondosicav = document.buyFundForm.Fondosicav.value;
		var PAC = document.buyFundForm.PAC.value;
		var flagReinveastimento ="";
		var categoria = document.buyFundForm.categoria.value;
		var nomeComparto = document.buyFundForm.nomeComparto.value;
		var tipoInvestimento;
		var enableBuyFund = document.buyFundForm.enableBuyFund.value;
		if(codiceSocietaDiGestione==4)
			enableBuyFund="false"
		var codiceFamiglia = document.buyFundForm.codiceFamiglia.value;
		var tipoPiano=document.buyFundForm.tipoPiano.value;
		var periodPiano = "";
		if(document.buyFundForm.PAC.value=="S"){
			if(document.buyFundForm.radiobuttonPic.checked){
				tipoInvestimento = "PIC";
				if(false){
					var importo = document.buyFundForm.importoValuta.value;
				}else
					var importo = document.buyFundForm.importo.value;
			}else if(document.buyFundForm.radiobuttonPac.checked){
				tipoInvestimento = "PAC";
				var importo = rataIni;
				importoPacSicav = document.buyFundForm.importoPacSicav.value;
				var index = document.buyFundForm.SelectPac.selectedIndex;
			   
					var valore = document.buyFundForm.SelectPac[index].value;	
					var ind = valore.lastIndexOf("*");
					var ratePac = valore.substring(ind+1,valore.length);
		
					valore = valore.substring(0,ind);	
					ind = valore.lastIndexOf("*");	
					var rataIni = valore.substring(ind+1,valore.length);
		
					valore = valore.substring(0,ind);	
					ind = valore.lastIndexOf("*");
					var numRateIniziale = valore.substring(ind+1,valore.length);
		
					valore = valore.substring(0,ind);
					ind = valore.lastIndexOf("*");
					numeroAnniPiano = valore.substring(ind+1,valore.length);
		
					valore = valore.substring(0,ind);    
					ind = valore.lastIndexOf("*");
					codicePiano = valore.substring(ind+1,valore.length);
			
					valore = valore.substring(0,ind);    
					ind = valore.lastIndexOf("*");
					descrizionePianoPac = valore.substring(ind+1,valore.length);
					
					valore = valore.substring(0,ind);    
					ind = valore.lastIndexOf("*");
					var impRataSuc = valore.substring(ind+1,valore.length);
					
					valore = valore.substring(0,ind);
					ind = valore.lastIndexOf("*");
					tipoPiano = valore.substring(ind+1,valore.length);
					document.buyFundForm.tipoPiano.value = tipoPiano;
					
					valore = valore.substring(0,ind);
					ind = valore.lastIndexOf("*");
					var sogliaImportoIniPacSicav = valore.substring(ind+1,valore.length);
					
					if(161==4 || 161==1 || 161==6){
						var idPeriodo = returnIdPeriodo();
						codicePiano = codicePiano + idPeriodo;
						ratePac=calcolaNumeroRate();
					}
					if('S'=="S"){
						var indPeriodo = document.buyFundForm.SelectPeriodoSicav.selectedIndex;	   
						periodPiano = document.buyFundForm.SelectPeriodoSicav[indPeriodo].value;
						document.buyFundForm.periodoPiano.value = periodPiano;
					}
					
				}		
		}else{
			if(false){
				var importo = document.buyFundForm.importoValuta.value;
			}else{
				var importo = document.buyFundForm.importo.value;
			}
			tipoInvestimento = "PIC";
		}
		
		
		
		var esenzioneEtica = document.buyFundForm.esenzioneEtica.value;
		descSocietaDiGestione = document.buyFundForm.descrSocietaGestione.value;
		percScontoCom = document.buyFundForm.percScontoCom.value;
		scontoPac = document.buyFundForm.scontoPac.value;
		reinvestimentoSicav = document.buyFundForm.reinvestimentoSicav.value;
		descrizionePeriodo = document.buyFundForm.descrizionePeriodo.value;
		var obbligoCedola = document.buyFundForm.obbligoCedola.value;
		
		// Progetto numero 1304300
		//if (document.buyFundForm.polizza==null)  //Nel caso codice Societï¿œ ï¿œ <>4 <input name="polizza"> non esiste
		//	polizza=''
		//else if (document.buyFundForm.polizza.checked==true)
		//	polizza= document.buyFundForm.polizza.value;
		//else
		
		var polizza=document.buyFundForm.polizza.value;
		var prosegui="OK";
		var datiFatcaRic ="";
		var controlloFatca = document.buyFundForm.controlloFatca.value;
		if(controlloFatca=="true"){
		document.getElementById('erroreFatca').style.display = 'none';
			if(true){
				if(controlloFactaRcs()){
						
						document.getElementById('erroreFormAnteprima').style.display = 'none';
						
						datiFatcaRic = getDatiFacta();
						if(controlloTinFatca())
							prosegui="OK";
						else
							prosegui="KO";
				}else{
					document.getElementById('erroreFormAnteprima').style.display = '';
					prosegui="KO";
				}
			}else{
				if(controlloFacta()){
					document.getElementById('erroreFormAnteprima').style.display = 'none';
					datiFatcaRic = getDatiFacta();
					//alert(getDatiFacta());
					prosegui="OK";
				}else{
					document.getElementById('erroreFormAnteprima').style.display = '';
					prosegui="KO";
				}
			
			}
		}else{
			document.getElementById('erroreFormAnteprima').style.display = 'none';
			prosegui="OK";
		}
		var datiFatca =  datiFatcaRic;
		if(prosegui=="OK"){
		createXMLHttpRequest();		
		xmlHttp.onreadystatechange = function() {handleStateChangeNew();};	
				var act = "/FMP/buyFundPreview.do?cf=";
				xmlHttp.open( 'GET', cgi_script + act +numero_casuale 
			+ "&descSocietaDiGestione="+descSocietaDiGestione
			+ "&importo=" + importo
			+ "&importoRata=" + importoRata
			+ "&deposito=" +deposito
			+ "&decimale=" + decimale
			+ "&codiceFondo=" +codiceFondo
			+ "&flagPrivacy=" + flagPrivacy
			+ "&codiceSocietaDiGestione=" + codiceSocietaDiGestione 
			+ "&Fondosicav=" + Fondosicav 
			+ "&PAC=" + PAC 
			+ "&flagReinveastimento="+flagReinveastimento
			+ "&tipoInvestimento=" +tipoInvestimento
			+ "&numeroRatePiano=" + ratePac
			+ "&numeroRateVersate=" + verIni
			+ "&importoPacSicav=" + importoPacSicav
			+ "&periodoPiano=" + periodPiano
			+ "&codicePiano=" + codicePiano
			+ "&numeroAnniPiano=" + numeroAnniPiano
			+ "&categoria="+categoria
			+ "&nomeComparto="+nomeComparto
			+ "&enableBuyFund=" + enableBuyFund
			+ "&codiceFamiglia=" + codiceFamiglia
			+ "&esenzioneEtica=" + esenzioneEtica
			+ "&percScontoCom=" +percScontoCom
			+ "&scontoPac=" +scontoPac
			+ "&reinvestimentoSicav=" +reinvestimentoSicav
			+ "&descrizionePeriodo=" + descrizionePeriodo
			+ "&tipoPiano=" + tipoPiano
			+ "&obbligoCedola=" + obbligoCedola
			+ "&polizza=" + polizza
			+ "&datiFatca=" + datiFatca
			+ "&controlloFatca=" + controlloFatca
			, true );
		xmlHttp.send(null);
		}
		
	}

	function handleStateChangeNew() {
		if(document.buyFundForm.fatcapreview.value == "KO"){
		document.getElementById('formMessaggi').style.display ='';
		document.getElementById('formMessaggi').innerHTML = "<div style=\" text-align:center\"> <img src=\"/wbx-pri/img/ico_loading.gif\"></div>";
		window.scrollTo(0,0);
		}
		
		if(xmlHttp!=null){
			if (xmlHttp.readyState == 4) {							
				if (xmlHttp.status == 200) {
					parseXML( xmlHttp.responseXML );
				} else {
					document.getElementById('formMessaggi').innerHTML = "Funzione disponibile";					
				}
			}else{
				if(document.buyFundForm.fatcapreview.value == "KO"){
					document.getElementById('formMessaggi').innerHTML = "<div style=\" text-align:center\"> <img src=\"/wbx-pri/img/ico_loading.gif\"></div>";
				}
			}
		}else{
			document.getElementById('formMessaggi').innerHTML = "Funzione non disponibile";
			
		}
	}

	function parseXML( xml ) {
		document.getElementById('erroreCad').innerHTML = '&nbsp;';
		
		if(document.buyFundForm.fatcapreview.value == "KO"){
			document.getElementById('formMessaggi').innerHTML = xmlHttp.responseText;
			document.getElementById('formMessaggi').style.display ='none';
			document.getElementById('erroreFatca').innerHTML ='&nbsp;';
			document.getElementById('erroreFatca').style.display ='none';
			document.getElementById('modifica').style.display = '';
			
		}else{
			
			$("#messaggioErrore").remove();
			$("#messaggioErroreFatca").remove();
			
			document.getElementById('erroreFatca').innerHTML = xmlHttp.responseText;
			document.getElementById('erroreFatca').style.display ='';
			if(document.buyFundForm.messaggioErrore.value =="OK"){
			
			document.getElementById('erroreFatca').style.display ='none';
			document.buyFundForm.fatcapreview.value = "KO";
			}
			document.getElementById('modifica').style.display = '';
			
			
		}
			if(document.buyFundForm.messaggioErrore.value =="Errore"){
			
				if(document.buyFundForm.messaggioErroreFatca.value =="KO"){
				document.getElementById('erroreFatca').innerHTML = xmlHttp.responseText;
				document.getElementById('erroreFatca').style.display ='';
				
				}else{
				
				document.getElementById('formMessaggi').innerHTML ='&nbsp;';
				document.getElementById('formMessaggi').style.display ='none';
				document.getElementById('erroreCad').innerHTML = xmlHttp.responseText;
				document.getElementById('erroreCad').style.display ='';
				document.getElementById('erroreFatca').innerHTML ='&nbsp;';
				document.getElementById('erroreFatca').style.display ='none';
				
				}
			}else if(document.buyFundForm.messaggioErrore.value =="tecnical"){
				document.buyFundForm.action="accountTec.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto&";
				document.buyFundForm.submit();
			}else if(document.buyFundForm.messaggioErrore.value =="OK"){
				
				document.getElementById('erroreFatca').innerHTML ='&nbsp;';
				document.getElementById('erroreFatca').style.display ='none';
				document.getElementById('formMessaggi').innerHTML = xmlHttp.responseText;
				document.getElementById('formMessaggi').style.display ='';				
				document.buyFundForm.controlloFatca.value = document.buyFundForm.fatca.value;
				
				if(document.buyFundForm.fatca.value){
				document.buyFundForm.fatcapreview.value = "OK";
						
				abilitaBtnField();
				addRemoveField();
				ttSet($('body'));			
				}
				if(document.buyFundForm.reinvestimento.value=="S"){
				
				document.getElementById('reinvestimentoOut').style.display ='';
				}
			}
	}
	
	function createXMLHttpRequest() {	   
		if (window.XMLHttpRequest) { 
			xmlHttp = new XMLHttpRequest();
				if (xmlHttp.overrideMimeType) {
					xmlHttp.overrideMimeType('text/xml');						
				}
		}
		else if (window.ActiveXObject) {
			try {
				xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
			} catch (e) {
				try {
					xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (e) {
					alert( e );
				}
			}
		}
		if (!xmlHttp) {
			alert('Giving up :( Cannot create an XMLHTTP instance');
				return false;
		}
		return true;
	}


	function modifica(){
		document.getElementById('avanti').style.display = '';	
		document.getElementById('modifica').style.display = 'none';
		document.getElementById('formMessaggi').style.display = 'none';
		document.getElementById('erroreCad').style.display = 'none';
		document.getElementById('erroreFatca').style.display = 'none';
		$('erroreFormAnteprima').style.display = 'none';
		document.buyFundForm.importo.disabled = false;
		document.buyFundForm.deposito.disabled = false;
		document.buyFundForm.importo.value = '';
		document.buyFundForm.sorifin.value="  ";
		document.buyFundForm.scorap.value=" ";
		if(document.buyFundForm.PAC.value=="S"){
			document.buyFundForm.rata.disabled = false;
			document.buyFundForm.numVersamenti.disabled = false;			
			document.buyFundForm.radiobuttonPic.disabled = false;
			document.buyFundForm.radiobuttonPac.disabled = false;
			if(document.buyFundForm.radiobuttonPac.checked){
				document.buyFundForm.SelectPac.disabled = false;
			}
			/*
			document.getElementById('tickRatePac').useMap='#map3';
			document.getElementById('tickImportoPac').useMap='#map2';
			*/
		
		}
		document.getElementById('datiOrdineInput').style.display = '';
		if(161==6)
		document.buyFundForm.esenzione.checked = false;
		if(161==144 && '-'=="x"){
		document.buyFundForm.cedolaSicav[0].checked = false;
		document.buyFundForm.cedolaSicav[1].checked = false;
		}
		document.getElementById('datiOrdineOutput').style.display = 'none';
		document.buyFundForm.controlloFatca.value="false";
	}

	function load(){
	
		importoMinSuc();
		importoMinIni();
		$('dirFissi').innerHTML = '12,50 EUR';
		document.getElementById('avanti').style.display = '';	
		document.getElementById('modifica').style.display = 'none';
		document.getElementById('formMessaggi').style.display = 'none';
		document.buyFundForm.importo.disabled = false;
		document.buyFundForm.deposito.disabled = false;
				document.buyFundForm.importo.value = '';
				if(document.buyFundForm.PAC.value=="S"){
		disabilitaPac('checked');
		document.buyFundForm.radiobuttonPic.disabled = false;
		document.buyFundForm.radiobuttonPac.disabled = false;
		document.buyFundForm.rata.disabled = false;
			document.buyFundForm.numVersamenti.disabled = false;
		}				
		loadMargine();
	}
	
	function prospetto(id,prodotto){
	var link = cgi_script+ "/common/apriDocumento.do?id=" + id + "&prodotto=" + prodotto; 
			open(link);

			document.buyFundForm.checkProspetto.disabled=false;
	}
	 function openIncentivo(incentivo){		
			open("/doc/"+incentivo);		
		document.buyFundForm.checkIncentivi.disabled=false;	
	}
	
	function conferma(){
		document.buyFundForm.numeroRateVersate.value = parseFloat(document.buyFundForm.numVersamenti.value);
		document.buyFundForm.importoRata.value =  document.buyFundForm.rata.value;
		var ratePac = "";
		var numeroAnniPiano ="";
		var codicePiano = "";
		var descrizionePianoPac="";
		var tipoInvestimento="";
		var rataIni =document.buyFundForm.importoRata.value;
		var nav =document.buyFundForm.NAV.value;
		var dataNAV =document.buyFundForm.dataNAV.value;
		var prosegui="OK";
		var messAnteprima = $('messaggioAnteprima');
		var errorForm = $('erroreFormAnteprima');
		if(document.buyFundForm.messaggiAvvertenze.value=="OK" ){
			if(document.buyFundForm.checkAvvertenze.checked==false){
			prosegui="KO";
			errorForm.style.display = '';
			messAnteprima.style.display = '';
			messAnteprima.innerHTML = "Per proseguire occorre effettuare tutte le dichiarazioni obbligatorie contenute nella sezione 'Informazioni e avvertenze'";
			wbScrollTo('#erroreFormAnteprima');
			return;
			}
		}

		var fondo_s_n = "S";
		
		if(fondo_s_n=="F" && document.getElementById('sorifinsel')!=undefined) {
			
			var scorafin = (document.buyFundForm.sorifin.value.trim()=="" || document.buyFundForm.scorap.value.trim()=="");
			
			 if(scorafin) {
			 
			 	prosegui="KO";
				errorForm.style.display = '';
				messAnteprima.style.display = '';
				messAnteprima.innerHTML = "L'operazione supera i 5000 Euro per proseguire occorre rispondere alle domande relative alla normativa antiriciclaggio";
				wbScrollTo('#erroreFormAnteprima');
				return;
				
			 }
		}


		if(document.buyFundForm.messaggiInducement.value=="OK" ){
			if( document.buyFundForm.checkIncentivi.checked==false){
				prosegui="KO";
				errorForm.style.display = '';
				messAnteprima.style.display = '';
				messAnteprima.innerHTML = "Per proseguire occorre dichiarare di avere preso visione delle informazioni relative agli incentivi";
				wbScrollTo('#erroreFormAnteprima');
				return;
			}
		}

		if(document.buyFundForm.reinvestimento.value!="S"){
			prosegui="OK";
		}else if(document.buyFundForm.flagReinv.value=="" && document.buyFundForm.obbligoCedola.value=="S"){
			if(document.buyFundForm.flagReinveastimento.checked==false){
				prosegui="KO";
				errorForm.style.display = '';
				messAnteprima.style.display = '';
				messAnteprima.innerHTML = "Per proseguire occorre dichiarare la destinazione dei proventi";
				wbScrollTo('#erroreFormAnteprima');
				return;
			}
		}else if(document.buyFundForm.flagReinv.value=="" && document.buyFundForm.obbligoCedola.value=="N"){
			if(document.buyFundForm.flagReinveastimento[0].checked==false && document.buyFundForm.flagReinveastimento[1].checked==false){
				prosegui="KO";
				errorForm.style.display = '';
				messAnteprima.style.display = '';
				messAnteprima.innerHTML = "Per proseguire occorre dichiarare la destinazione dei proventi";
				wbScrollTo('#erroreFormAnteprima');
				return;
			}
		}
		
		if(document.buyFundForm.checkProspetto.disabled){
				prosegui="KO";
				errorForm.style.display = '';
				messAnteprima.style.display = '';
				messAnteprima.innerHTML = "Per proseguire occorre avere preso visione del documento relativo al prospetto informativo";
				wbScrollTo('#erroreFormAnteprima');
				return;
		}else if(document.buyFundForm.checkProspetto.checked==false){
				prosegui="KO";
				errorForm.style.display = '';
				messAnteprima.style.display = '';
				messAnteprima.innerHTML = "Per proseguire occorre dichiarare di avere preso visione dell'intera documentazione informativa";
				wbScrollTo('#erroreFormAnteprima');
				return;
		}		
		
		if(document.buyFundForm.primaSottoscrizione.value=="S"){
			
			if(document.buyFundForm.Fondosicav.value=="F"){
				if(document.buyFundForm.flagPrivacy[0].checked==false && document.buyFundForm.flagPrivacy[1].checked==false){
					prosegui="KO";
					errorForm.style.display = '';
					messAnteprima.style.display = '';
					messAnteprima.innerHTML = "Per proseguire occorre dichiarare di dare o meno il consenso al trattamento dei dati personali";
					wbScrollTo('#erroreFormAnteprima');
					return;
				}
			}
			if (document.buyFundForm.dichiarazioni.checked==false){		
				prosegui="KO";	
				errorForm.style.display = '';
				messAnteprima.style.display = '';
				messAnteprima.innerHTML = "Per proseguire occorre dichiarare di avere preso visione delle dichiarazioni di conferme";
				wbScrollTo('#erroreFormAnteprima');
				return;
			}
		}else if(document.buyFundForm.primaSottoscrizione.value=="N"){
			prosegui="OK";
		}
		

		
		if(prosegui=="OK"){
			var deposito = document.buyFundForm.deposito.value;			
			if(document.buyFundForm.PAC.value=="S"){
				if(document.buyFundForm.radiobuttonPic.checked){
					tipoInvestimento = "PIC";
					if(false)
						var importo = document.buyFundForm.importoValuta.value;
					else
						var importo = document.buyFundForm.importo.value;	
				}else if(document.buyFundForm.radiobuttonPac.checked){
					tipoInvestimento = "PAC";
					var importo = rataIni;
					var index = document.buyFundForm.SelectPac.selectedIndex;
	   
					var valore = document.buyFundForm.SelectPac[index].value;	
					var ind = valore.lastIndexOf("*");
					var ratePac = valore.substring(ind+1,valore.length);
		
					valore = valore.substring(0,ind);	
					ind = valore.lastIndexOf("*");	
					var rataIni = valore.substring(ind+1,valore.length);
		
					valore = valore.substring(0,ind);	
					ind = valore.lastIndexOf("*");
					var numRateIniziale = valore.substring(ind+1,valore.length);
		
					valore = valore.substring(0,ind);
					ind = valore.lastIndexOf("*");
					numeroAnniPiano = valore.substring(ind+1,valore.length);
		
					valore = valore.substring(0,ind);    
					ind = valore.lastIndexOf("*");
					codicePiano = valore.substring(ind+1,valore.length);

					valore = valore.substring(0,ind);    
					ind = valore.lastIndexOf("*");
					descrizionePianoPac = valore.substring(ind+1,valore.length);
					
					valore = valore.substring(0,ind);    
					ind = valore.lastIndexOf("*");
					var impRataSuc = valore.substring(ind+1,valore.length);
					
					valore = valore.substring(0,ind);
					ind = valore.lastIndexOf("*");
					var tipoPiano = valore.substring(ind+1,valore.length);
					
					valore = valore.substring(0,ind);
					ind = valore.lastIndexOf("*");
					var sogliaImportoIniPacSicav = valore.substring(ind+1,valore.length);
					
					if(161==4 || 161==1 || 161==6){
					var idPeriodo = returnIdPeriodo();
					codicePiano = codicePiano + idPeriodo;
					ratePac=calcolaNumeroRate();
					}
					descrizionePeriodo = document.buyFundForm.descrizionePeriodo.value;
					
				}
			}else{
				tipoInvestimento = "PIC";
				if(false)
					var importo = document.buyFundForm.importoValuta.value;	
				else
					var importo = document.buyFundForm.importo.value;	
			}
			var flagReinvestimento ="";

			if(document.buyFundForm.reinvestimento.value=="S"){
			  	if(document.buyFundForm.flagReinv.value=="" && document.buyFundForm.obbligoCedola.value=="N"){
					if(document.buyFundForm.flagReinveastimento[0].checked)
						flagReinvestimento = document.buyFundForm.flagReinveastimento[0].value;
					else if(document.buyFundForm.flagReinveastimento[1].checked)
						flagReinvestimento = document.buyFundForm.flagReinveastimento[1].value;
				}else if(document.buyFundForm.flagReinv.value=="" && document.buyFundForm.obbligoCedola.value=="S"){
					if(document.buyFundForm.flagReinveastimento.checked)
						flagReinvestimento = document.buyFundForm.flagReinveastimento.value;
				}else
					flagReinvestimento = document.buyFundForm.flagReinv.value;
			}
			var categoria = document.buyFundForm.categoria.value;
			var Fondosicav = document.buyFundForm.Fondosicav.value;

			
				document.buyFundForm.action="buyFundConfirm.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto&importo=" + importo +"&deposito=" +deposito +"&tipoInvestimento=" +tipoInvestimento + "&numeroRatePiano=" + ratePac  + "&codicePiano=" + codicePiano + "&numeroAnniPiano=" + numeroAnniPiano +"&descrizionePianoPac="+descrizionePianoPac +"&Fondosicav="+Fondosicav +"&categoria=" + categoria + "&nav=" + nav + "&dataNav=" + dataNAV +"&flagReinveastimento="+flagReinvestimento + "&descrizionePeriodo=" +descrizionePeriodo;
			
			document.buyFundForm.submit();
			
		}
	}


	
	var descrizioneNazioni = new Array();
	var flagnazioni = new Array();
	
	function getDatiFacta(){
		var numInt  = document.buyFundForm.numIntestatari.value;
		var datiFatca ="";
		descrizioneNazioni.length =0;
		flagnazioni.length =0;
		if(numInt>1){
			for(var i=0; i<numInt; i++){
			
				var ndg = $('NDG' + i).value;
				//alert(lettere[i]);
				var numTin = 1;
				if(true){
					numTin = 0;
					var tin ="";
					var codNaz = "";
					var codNazValue = "";
					var codNazIndex = "";
					
					$('#fatca'+i).each(function(){
					var campiTin = $(this).find('.fatcaFieldWrapper .fatcaField');					
					numTin = campiTin.length;
					})
					for(var s=1; s<numTin+1;s++){
					
					var t = s+1;
					var tin_int = "TIN" +t+ "_int" +i;
					var residenzaFiscale = "residenzaFiscale"+t+"_int"+i;
					
						if(tin.length>0){
							if($("[name='"+tin_int+"']").val()=='')
								tin = "noValue" + '*' + tin;
							else
								tin = $("[name='"+tin_int+"']").val() + '*' + tin;
							
							codNazIndex = $("[name='"+residenzaFiscale+"']").find('option:selected').val().indexOf("|");
							
							if(new Number(codNazIndex)>0){
							
							codNazValue = $("[name='"+residenzaFiscale+"']").find('option:selected').val().substring(0,codNazIndex);
								
								if($("[name='"+tin_int+"']").val()=='' || $("[name='"+tin_int+"']").val().indexOf("_")>-1){
									descrizioneNazioni.push($("[name='"+residenzaFiscale+"']").find('option:selected').val().split("|")[1]);
									flagnazioni.push($("[name='"+residenzaFiscale+"']").find('option:selected').val().split("|")[2]);
								}	
							codNaz = codNazValue + '*' + codNaz;
							}else{
							if($("[name='"+residenzaFiscale+"']").find('option:selected').val()=="-- seleziona --" || $("[name='"+residenzaFiscale+"']").find('option:selected').val()=="")
								codNaz = "noValue" + '*' + codNaz;
							else
								codNaz = $("[name='"+residenzaFiscale+"']").find('option:selected').val() + '*' + codNaz;
							}
							
							
						
						}else{
							tin = $("[name='"+tin_int+"']").val();
							if(tin=='')
								tin="noValue";
								
							
								codNazIndex = $("[name='"+residenzaFiscale+"']").find('option:selected').val().indexOf("|");
							if(new Number(codNazIndex)>0){
								
								
								if($("[name='"+tin_int+"']").val()=='' || $("[name='"+tin_int+"']").val().indexOf("_")>-1){	
									descrizioneNazioni.push($("[name='"+residenzaFiscale+"']").find('option:selected').val().split("|")[1]);
									flagnazioni.push($("[name='"+residenzaFiscale+"']").find('option:selected').val().split("|")[2]);
								}
								codNazValue = $("[name='"+residenzaFiscale+"']").find('option:selected').val().substring(0,codNazIndex);
							
								codNaz = codNazValue;
							}else{
								codNaz = $("[name='"+residenzaFiscale+"']").find('option:selected').val();
								
								if(codNaz=="-- seleziona --" || codNaz=="")
									codNaz="noValue";
							}
						}
					
					}
				
				}else{
				var tin =	$('maskedField' + i).value;				
				var codNaz = $('#selectResidenzaFiscale' + i).find('option:selected').val();
					if(codNaz=="-- seleziona --")
					codNaz="noValue";
				
				}
				
				var stato = $('#statoCorrLayer'+ i).find('option:selected').val();
					if(stato=="-- seleziona --")
					stato="noValue";
				var indirizzo=$('indirizzoCorrLayer'+ i).value;
				if(indirizzo=='')
					indirizzo="noValue";
				var provincia=$('provinciaCorrLayer'+ i).value;
				if(provincia=='')
					provincia="noValue";
				var comune=$('comuneCorrLayer'+ i).value;
				if(comune=='')
					comune="noValue";
				var cap=$('capCorrLayer'+ i).value;
				if(cap=='')
					cap="noValue";
					
				if(tin=='')
					tin="noValue";
				if(codNaz=="-- seleziona --" || codNaz=="")
					codNaz="noValue";
				if(datiFatca.length>0){
					datiFatca = datiFatca + "|" +tin + "/" + codNaz + "/" +numTin + "/"+ndg +"/" + stato +"/" + indirizzo + "/" + provincia + "/" + comune +"/" + cap ;	
				}else{
					datiFatca =tin + "/" + codNaz + "/" +numTin + "/"+ndg +"/" + stato +"/" + indirizzo + "/" + provincia + "/" + comune +"/" + cap;	
				}
			}
		}else{
		
		
				var ndg = $('NDG1').value;
				var numTin = 1;
				if(true){
					
					numTin = 0;
					var tin ="";
					var codNaz = "";
					var codNazValue = "";
					var codNazIndex = "";
					$('.fatcaintestatario').each(function(){
					var campiTin = $(this).find('.fatcaFieldWrapper .fatcaField');					
					numTin = campiTin.length;
					})
					for(var i=1; i<numTin+1; i++){
					//alert(i);
						if(tin.length>0){
							if($('TIN_intA_id'+i).value=='')
								tin = "noValue" + '*' + tin;
							else
								tin = $('TIN_intA_id'+i).value + '*' + tin;
							
							codNazIndex = $('#selectfactaA_id'+i).find('option:selected').val().indexOf("|");
							if(new Number(codNazIndex)>0){
								if($('TIN_intA_id'+i).value=='' || $('TIN_intA_id'+i).value.indexOf("_")>-1){
									descrizioneNazioni.push($('#selectfactaA_id'+i).find('option:selected').val().split("|")[1]);
									flagnazioni.push($('#selectfactaA_id'+i).find('option:selected').val().split("|")[2]);
								}
							
							codNazValue = $('#selectfactaA_id'+i).find('option:selected').val().substring(0,codNazIndex);
							
							codNaz = codNazValue + '*' + codNaz;
							}else{
							if($('#selectfactaA_id'+i).find('option:selected').val()=="-- seleziona --" || $('#selectfactaA_id'+i).find('option:selected').val()=="")
								codNaz = "noValue" + '*' + codNaz;
							else
								codNaz = $('#selectfactaA_id'+i).find('option:selected').val() + '*' + codNaz;
							}
						
						}else{
							tin =	$('TIN_intA_id'+i).value;
							if(tin=='')
							tin="noValue";
							//alert(tin);
							codNazIndex = $('#selectfactaA_id'+i).find('option:selected').val().indexOf("|");
							if(new Number(codNazIndex)>0){
							
								if($('TIN_intA_id'+i).value=='' || $('TIN_intA_id'+i).value.indexOf("_")>-1){
									descrizioneNazioni.push($('#selectfactaA_id'+i).find('option:selected').val().split("|")[1]);
									flagnazioni.push($('#selectfactaA_id'+i).find('option:selected').val().split("|")[2]);
								}
							codNazValue = $('#selectfactaA_id'+i).find('option:selected').val().substring(0,codNazIndex);
							
							codNaz = codNazValue;
							}else{
							if(codNaz=="-- seleziona --" || codNaz=="")
								codNaz="noValue";
							else
							codNaz = $('#selectfactaA_id'+i).find('option:selected').val();
							}
							
						}
					}
					//alert(tin);
					
				}else{
					var tin =	$('maskedField1').value;
					var codNaz = $('#selectResidenzaFiscale1').find('option:selected').val();
					var numTin =1;
				}
				if(tin=='')
					tin="noValue";
				
				if(codNaz=="-- seleziona --" || codNaz=="")
					codNaz="noValue";
				var stato = $('#statoCorrLayer').find('option:selected').val();
					if(stato=="-- seleziona --")
					stato="noValue";
				var indirizzo=$('indirizzoCorrLayer').value;
				if(indirizzo=='')
					indirizzo="noValue";
				var provincia=$('provinciaCorrLayer').value;
				if(provincia=='')
					provincia="noValue";
				var comune=$('comuneCorrLayer').value;
				if(comune=='')
					comune="noValue";
				var cap=$('capCorrLayer').value;
				if(cap=='')
					cap="noValue";				
				
				datiFatca = tin + "/" + codNaz + "/"+ndg +"/" + stato +"/" + indirizzo + "/" + provincia + "/" + comune +"/" + cap + "/" + numTin;	
		}
		return datiFatca;
	}

	function controlloTinFatca() {
			
			var mesResidenzaFatca = $('messaggioResidenzaFatca');
			var errorForm = $('erroreFormAnteprima');
			
			var nazioni = new Array();
			nazioni.length = 0;
			for(var i=0; i< flagnazioni.length;i++){
			
				if(	flagnazioni[i] == "S"){
					nazioni.push(descrizioneNazioni[i]);
				}
			
			}
			
			if(nazioni.length>0){
				errorForm.style.display = '';
				mesResidenzaFatca.style.display = '';
				mesResidenzaFatca.innerHTML = "Il Codice Fiscale Estero (TIN) per il Paese/i di Residenza Fiscale " + nazioni + " &egrave; obbligatorio. Verifica e inserisci il TIN.";
				
				return false;
			}
			return true;
	}
	function docFatca(banca){
	
	var id = document.buyFundForm.idDocFacta.value;
	var prodotto = document.buyFundForm.idTypeFacta.value;
			if(banca==1){
			open("/wscmn/doc/InformativaFatcaBPM.pdf");
			document.buyFundForm.checkDocFatca.disabled=false;
			}else if(banca==19){
			var link = cgi_script+ "/common/apriDocumento.do?id=" + id + "&prodotto=" + prodotto; 
			open(link);
			document.buyFundForm.checkDocFatca.disabled=false;
			}
	}
	
	function controlloFactaRcs(){
		var mesCheckDocFatca = $('messaggioCheckDocFatca');
		var mesResidenzaFatca = $('messaggioResidenzaFatca');
		var mesTinFatca = $('messaggioTinFatca');
		var mesCheckDatiFatca = $('messaggioCheckDatiFatca');
		
		mesCheckDocFatca.style.display = 'none';
		mesResidenzaFatca.style.display = 'none';
		mesTinFatca.style.display = 'none';
		mesCheckDatiFatca.style.display = 'none';
		
		var errorForm = $('erroreFormAnteprima');
	
		
		if(!document.buyFundForm.checkDocFatca.checked){
			errorForm.style.display = '';
			mesCheckDocFatca.style.display = '';
			mesCheckDocFatca.innerHTML = "Prendi visione dell'informativa FATCA aprendo il relativo pdf.";
			return false;
			}
			
			if(!document.buyFundForm.checkDatiFatca.checked){
					errorForm.style.display = '';
					mesCheckDatiFatca.style.display = '';
					mesCheckDatiFatca.innerHTML = "Conferma le dichiarazioni rilasciate.";
					
					return false;
		}
		return true;
	}
	function controlloFacta(){
	
		
		var mesCheckDocFatca = $('messaggioCheckDocFatca');
		var mesResidenzaFatca = $('messaggioResidenzaFatca');
		var mesTinFatca = $('messaggioTinFatca');
		var mesCheckDatiFatca = $('messaggioCheckDatiFatca');
		
		mesCheckDocFatca.style.display = 'none';
		mesResidenzaFatca.style.display = 'none';
		mesTinFatca.style.display = 'none';
		mesCheckDatiFatca.style.display = 'none';
		
		var errorForm = $('erroreFormAnteprima');
		
		
				
		var numInt  = document.buyFundForm.numIntestatari.value;
		if(!document.buyFundForm.checkDocFatca.checked){
			errorForm.style.display = '';
			mesCheckDocFatca.style.display = '';
			mesCheckDocFatca.innerHTML = "Prendi visione dell'informativa FATCA aprendo il relativo pdf.";
			return false;
			}
			
		if(numInt>1){
				

				//for(var i=0; i<numInt; i++){
				//	if($('#selectResidenzaFiscale' + i).find('option:selected').text() == '-- seleziona --'){
				//		errorForm.style.display = '';
				//		mesResidenzaFatca.style.display = '';
				//		mesResidenzaFatca.innerHTML = "Seleziona il paese di residenza fiscale";
						//errorForm.scrollTo();
				//		return false;
				//	}
				//}
				
				for(var i=0; i<numInt; i++){
					var regexTin = '^[A-Z0-9]{2}[ \-][A-Z0-9]{7}';
					if($('#selectResidenzaFiscale' + i).find('option:selected').text().indexOf('STATI UNITI') >= 0){
						if($('maskedField' + i).value==''){
							errorForm.style.display = '';
							mesTinFatca.style.display = '';
							mesTinFatca.innerHTML = "Inserisci il Codice Fiscale Estero (TIN).";
							//errorForm.scrollTo();
							return false;
						}else if(!$('maskedField' + i).value.match(regexTin)){
							errorForm.style.display = '';
							mesTinFatca.style.display = '';
							mesTinFatca.innerHTML = "Il Codice Fiscale Estero (TIN) inserito non &egrave; corretto. Verifica e riprova.";
							//errorForm.scrollTo();
							return false;
						}
					}
				}
		}else{
			//if($('#selectResidenzaFiscale1').find('option:selected').text() == '-- seleziona --'){
						
			//			errorForm.style.display = '';
			//			mesResidenzaFatca.style.display = '';
			//			mesResidenzaFatca.innerHTML = "Seleziona il paese di residenza fiscale";
						//errorForm.scrollTo();
			//			return false;
			//		}
			
			var regexTin = '^[A-Z0-9]{2}[ \-][A-Z0-9]{7}';
					if($('#selectResidenzaFiscale1').find('option:selected').text().indexOf('STATI UNITI') >= 0){
						if($('maskedField1').value==''){
							errorForm.style.display = '';
							mesTinFatca.style.display = '';
							mesTinFatca.innerHTML = "Inserisci il Codice Fiscale Estero (TIN).";
							//errorForm.scrollTo();
							return false;
						}else if(!$('maskedField1').value.match(regexTin)){
							errorForm.style.display = '';
							mesTinFatca.style.display = '';
							mesTinFatca.innerHTML = "Il Codice Fiscale Estero (TIN) inserito non &egrave; corretto. Verifica e riprova.";
							//errorForm.scrollTo();
							return false;
						}
					}
		}
		
		if(!document.buyFundForm.checkDatiFatca.checked){
					errorForm.style.display = '';
					mesCheckDatiFatca.style.display = '';
					mesCheckDatiFatca.innerHTML = "Conferma le dichiarazioni rilasciate.";
					
					return false;
		}
		return true;
	
	}
	
	function loadMaskField(val){
	if($('#selectResidenzaFiscale' + val).find('option:selected').text().indexOf('STATI UNITI') >= 0) {
		$('#maskedFieldId' + val).show();
		$.mask.definitions['_'] ='[^\'\']'; //definisco tutti i caratteri alfanumerici e simboli della tastiera
		$('#maskedField'+val).mask("__-_______", {completed: function(){$('#maskedField'+val).val($('#maskedField'+val).val().toUpperCase())} })
		
		$('#maskedField' + val).focus();
	}
	else {
		$('#maskedFieldId' + val).hide();
	}

	}
	
	
	
	
	function investimentoIniziale(rata,verIni) {
		var tot = parseFloat(rata) * parseFloat(verIni);
		document.getElementById('investimentoIniziale').style.display = '';
		document.getElementById('investimentoIniziale').innerHTML = tot;
		document.buyFundForm.importoPacSicav.value = tot;
		$('invIniOut').innerHTML = '<strong>'+tot+'&nbsp;EUR</strong>';
	}
	
	function investimentoTotale (rata,numAnni){
		var tot = parseFloat(rata) * parseFloat(numAnni);
		document.getElementById('investimentoTotale').style.display = '';
		document.getElementById('investimentoTotale').innerHTML = tot;
		$('invTotOut').innerHTML = '<strong>'+tot+'&nbsp;EUR</strong>';
	}
	
	function calcolaNumeroRate(){
		var index = document.buyFundForm.SelectPeriodo.selectedIndex;	   
		
		var valore = document.buyFundForm.SelectPeriodo[index].value;	
		var ind = valore.lastIndexOf("*");
		var descrizionePeriodo = valore.substring(ind+1,valore.length);
		
		valore = valore.substring(0,ind);	
		ind = valore.lastIndexOf("*");	
		var idPeriodo = valore.substring(ind+1,valore.length);
		
		valore = valore.substring(0,ind);	
		ind = valore.lastIndexOf("*");	
		var numeroPeriodi = new Number(valore.substring(ind+1,valore.length));

		document.buyFundForm.descrizionePeriodo.value = descrizionePeriodo;
		
		var numeroAnni = new Number(document.buyFundForm.anniPac.value);
		
		var numPeriodi = numeroPeriodi*numeroAnni;
		
		return numPeriodi;
	}
	
	function returnIdPeriodo(){
		var index = document.buyFundForm.SelectPeriodo.selectedIndex;	   
		
		var valore = document.buyFundForm.SelectPeriodo[index].value;	
		var ind = valore.lastIndexOf("*");
		var descrizionePeriodo = valore.substring(ind+1,valore.length);
		
		
		valore = valore.substring(0,ind);	
		ind = valore.lastIndexOf("*");	
		var idPeriodo = valore.substring(ind+1,valore.length);
		
		valore = valore.substring(0,ind);	
		ind = valore.lastIndexOf("*");	
		var numeroPeriodi = valore.substring(ind+1,valore.length);
			
		return idPeriodo;
	}
	
	function caricaImportoPeriodo(){	
		caricaImporto();
	}
		
	function incimp(object){
	
		var index = document.buyFundForm.SelectPac.selectedIndex;
	   
		var valore = document.buyFundForm.SelectPac[index].value;	
		var ind = valore.lastIndexOf("*");
		var ratePac = valore.substring(ind+1,valore.length);
		valore = valore.substring(0,ind);	
		ind = valore.lastIndexOf("*");	
		var rataIni = valore.substring(ind+1,valore.length);

		valore = valore.substring(0,ind);	
		ind = valore.lastIndexOf("*");
		var numRateIniziale = valore.substring(ind+1,valore.length);
		
		valore = valore.substring(0,ind);
		ind = valore.lastIndexOf("*");
		numeroAnniPiano = valore.substring(ind+1,valore.length);
		
		valore = valore.substring(0,ind);    
		ind = valore.lastIndexOf("*");
		codicePiano = valore.substring(ind+1,valore.length);
			
		valore = valore.substring(0,ind);    
		ind = valore.lastIndexOf("*");
		descrizionePianoPac = valore.substring(ind+1,valore.length);
					
		valore = valore.substring(0,ind);    
		ind = valore.lastIndexOf("*");
		var impRataSuc = valore.substring(ind+1,valore.length);
		
		valore = valore.substring(0,ind);
		ind = valore.lastIndexOf("*");
		var	tipoPiano = valore.substring(ind+1,valore.length);
					
		valore = valore.substring(0,ind);
		ind = valore.lastIndexOf("*");
		var sogliaImportoIniPacSicav = valore.substring(ind+1,valore.length);
					
		document.getElementById('erroreForm').style.display = 'none';
		var rate;
			if(isNaN(object.value)){
			document.getElementById('erroreForm').style.display = '';
			document.getElementById('messaggio').innerHTML = "L&#39;importo deve essere un valore numerico";
	  		}
   			rate = parseFloat(object.value);
   			min = parseFloat(impRataSuc);
   			object.value = rate + min;
   			var verIni = 0;
   			verIni = document.buyFundForm.numVersamenti.value;
   			
   			if(161==4 || 161==1 || 161==6){
				ratePac = calcolaNumeroRate();
			}
   			investimentoIniziale(object.value,verIni);
   			investimentoTotale(object.value,ratePac);
			return;
	}

	function decimp(object){
		var index = document.buyFundForm.SelectPac.selectedIndex;
	   
		var valore = document.buyFundForm.SelectPac[index].value;	
		var ind = valore.lastIndexOf("*");
		var ratePac = valore.substring(ind+1,valore.length);	 
		valore = valore.substring(0,ind);	
		ind = valore.lastIndexOf("*");	
		var rataIni = valore.substring(ind+1,valore.length);
	
		valore = valore.substring(0,ind);	
		ind = valore.lastIndexOf("*");
		var numRateIniziale = valore.substring(ind+1,valore.length);
		
		valore = valore.substring(0,ind);
		ind = valore.lastIndexOf("*");
		numeroAnniPiano = valore.substring(ind+1,valore.length);
		
		valore = valore.substring(0,ind);    
		ind = valore.lastIndexOf("*");
		codicePiano = valore.substring(ind+1,valore.length);
			
		valore = valore.substring(0,ind);    
		ind = valore.lastIndexOf("*");
		descrizionePianoPac = valore.substring(ind+1,valore.length);
					
		valore = valore.substring(0,ind);    
		ind = valore.lastIndexOf("*");
		var impRataSuc = valore.substring(ind+1,valore.length);
		
		valore = valore.substring(0,ind);
		ind = valore.lastIndexOf("*");
		var tipoPiano = valore.substring(ind+1,valore.length);
					
		valore = valore.substring(0,ind);
		ind = valore.lastIndexOf("*");
		var sogliaImportoIniPacSicav = valore.substring(ind+1,valore.length);
		
		document.getElementById('erroreForm').style.display = 'none';
		var rate;
		var min = parseFloat(impRataSuc);
		var importoIniziale= parseFloat(rataIni);
		if(isNaN(object.value)){
			document.getElementById('erroreForm').style.display = '';
			document.getElementById('messaggio').innerHTML = "L&#39;importo deve essere un valore numerico";
	  	}
		else if (parseFloat(object.value) < (parseFloat(importoIniziale)+ parseFloat(min)))
			{
			document.getElementById('erroreForm').style.display = '';
			document.getElementById('messaggio').innerHTML = "L&#39;importo della rata non pu&ograve; essere inferiore a " + rataIni + " Euro";
		}
		else{
		   rate = parseFloat(object.value);
		   
		   object.value = rate - min;
		   var verIni = 0;
   			verIni = document.buyFundForm.numVersamenti.value;
   			
   			if(161==4 || 161==1 || 161==6){
				ratePac = calcolaNumeroRate();
			}
			
   			investimentoIniziale(object.value,verIni);
   			investimentoTotale(object.value,ratePac);
		}
		return;
	}

	function incrate(object){
		var index = document.buyFundForm.SelectPac.selectedIndex;
	  
		var valore = document.buyFundForm.SelectPac[index].value;	
		var ind = valore.lastIndexOf("*");
		var ratePac = valore.substring(ind+1,valore.length);
		
		valore = valore.substring(0,ind);	
		ind = valore.lastIndexOf("*");	
		var rataIni = valore.substring(ind+1,valore.length);
		
		valore = valore.substring(0,ind);	
		ind = valore.lastIndexOf("*");
		var numRateIniziale = valore.substring(ind+1,valore.length);
		
		valore = valore.substring(0,ind);	
		ind = valore.lastIndexOf("*");
		var anniPac = valore.substring(ind+1,valore.length);
		
		document.getElementById('erroreForm').style.display = 'none';
		document.getElementById('messaggio').style.display = 'none';
		
		var rate;
		
		if(161==4){
			document.getElementById('erroreForm').style.display = '';
	      	document.getElementById('messaggio').style.display = '';
			document.getElementById('messaggio').innerHTML = "Il numero di versamenti iniziali non pu&ograve; essere superiore a "+numRateIniziale;
		}else{
			if(isNaN(object.value)){
				document.getElementById('erroreForm').style.display = '';
				document.getElementById('messaggio').innerHTML = "L&#39;importo deve essere un valore numerico";
		  	}else{
				var rateini = parseInt (object.value);		
				var difRate = 0;
				difRate = rateini - parseInt(ratePac);
				if (difRate >= 0 ){
					document.getElementById('erroreForm').style.display = '';
					document.getElementById('messaggio').innerHTML = "La durata del piano prescelta (" + anniPac +" anni) non prevede pi&ugrave; di " + ratePac +" rate";
					rate = parseInt(object.value);
					object.value = rate;
		 		}else{
					rate = parseInt(object.value); 
				    object.value = rate + 1;
				    var numRate = 0;
	   			numRate = document.buyFundForm.rata.value;
	   			investimentoIniziale(numRate,object.value);
				}
				
			}
		}
		return;
	}



	function decrate(object){
		var index = document.buyFundForm.SelectPac.selectedIndex;
	   
		var valore = document.buyFundForm.SelectPac[index].value;	
		var ind = valore.lastIndexOf("*");
		var ratePac = valore.substring(ind+1,valore.length);
		
		valore = valore.substring(0,ind);	
		ind = valore.lastIndexOf("*");	
		var rataIni = valore.substring(ind+1,valore.length);
		
		valore = valore.substring(0,ind);	
		ind = valore.lastIndexOf("*");
		var numRateIniziale = valore.substring(ind+1,valore.length);
		
		document.getElementById('erroreForm').style.display = 'none';
		document.getElementById('messaggio').style.display = 'none';
		
		var rate=0;
		var rateMin =0;
		
		if(161==4){
			document.getElementById('erroreForm').style.display = '';
	      	document.getElementById('messaggio').style.display = '';
			document.getElementById('messaggio').innerHTML = "Il numero di versamenti iniziali non pu&ograve; essere inferiore a "+numRateIniziale;
		}else{
			if(isNaN(object.value)){
				document.getElementById('erroreForm').style.display = '';
				document.getElementById('messaggio').style.display = '';
				document.getElementById('messaggio').innerHTML = "L&#39;importo deve essere un valore numerico";
		  	}else if(object.value==1){
		  		document.getElementById('erroreForm').style.display = '';
		  		document.getElementById('messaggio').style.display = '';
				document.getElementById('messaggio').innerHTML = "Il numero di versamenti iniziali non pu&ograve; essere inferiore a 1";
		  	}else{
		  		rate = parseInt(object.value); 
		  		rateMin = parseInt(numRateIniziale);
		  		if(rate > rateMin){
		     			object.value = rate - 1;
		     			var numRate = 0;
	   			numRate = document.buyFundForm.rata.value;
	   			investimentoIniziale(numRate,object.value);
	      		}else {
	      			document.getElementById('erroreForm').style.display = '';
	      			document.getElementById('messaggio').style.display = '';
					document.getElementById('messaggio').innerHTML = "Il numero di versamenti iniziali non pu&ograve; essere inferiore a "+numRateIniziale;
				}    
			}
		}
		return;
	}

	
	function caricaImporto() {
		document.getElementById('erroreForm').style.display = 'none';
		var index = document.buyFundForm.SelectPac.selectedIndex;
	   
		var valore = document.buyFundForm.SelectPac[index].value;	
		var ind = valore.lastIndexOf("*");
		var ratePac = valore.substring(ind+1,valore.length);	
		
		valore = valore.substring(0,ind);	
		ind = valore.lastIndexOf("*");	
		var rataIni = valore.substring(ind+1,valore.length);		
		document.buyFundForm.rata.value = rataIni;
		
		valore = valore.substring(0,ind);	
		ind = valore.lastIndexOf("*");
		var verIni = valore.substring(ind+1,valore.length);
		
		valore = valore.substring(0,ind);	
		ind = valore.lastIndexOf("*");
		var anniPac = valore.substring(ind+1,valore.length);
		document.buyFundForm.anniPac.value = anniPac;
		
		if(161==4 || 161==1 || 161==6){
		ratePac = calcolaNumeroRate();
		}
		
   		document.buyFundForm.numVersamenti.value = verIni;
   		 
		investimentoIniziale(rataIni,verIni);
   		investimentoTotale(rataIni,ratePac);
	}
	
  				
	function cambiaPianiEpsilon(){
		var index = document.buyFundForm.SelectPeriodoEpsilon.selectedIndex;	   
		var valore = document.buyFundForm.SelectPeriodoEpsilon[index].value;
		
		document.buyFundForm.descrizionePeriodo.value = document.buyFundForm.SelectPeriodoEpsilon[index].text;
		var selPac = document.getElementById('SelectPac');		
		num_option = selPac.options.length;
		for(a=num_option;a>=0;a--){
			selPac.options[a]=null;
		}
		var doc ="";
		var nota="";
		var notaVersamento="";
  		  			var txt = new String('AM009');
  				var lung = txt.length - 1;
  				var codicePiano = 'AM009';
  				if(codicePiano.substring(lung)==valore){
  				doc = '1200';
  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
				notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
				var desc = '36 versamenti';		
				option = document.createElement("option");		
				option.value = '1200*C*100*36 versamenti*AM009*3*12*100*36';		
				option.appendChild(document.createTextNode(desc));
				selPac.appendChild(option);
				document.buyFundForm.anticipoRate.value = 'N';
				if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
				}
		  			var txt = new String('AM009');
  				var lung = txt.length - 1;
  				var codicePiano = 'AM009';
  				if(codicePiano.substring(lung)==valore){
  				doc = '1200';
  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
				notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
				var desc = '60 versamenti';		
				option = document.createElement("option");		
				option.value = '1200*E*100*60 versamenti*AM009*5*12*100*60';		
				option.appendChild(document.createTextNode(desc));
				selPac.appendChild(option);
				document.buyFundForm.anticipoRate.value = 'N';
				if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
				}
		  			var txt = new String('AM009');
  				var lung = txt.length - 1;
  				var codicePiano = 'AM009';
  				if(codicePiano.substring(lung)==valore){
  				doc = '1200';
  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
				notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
				var desc = '120 versamenti';		
				option = document.createElement("option");		
				option.value = '1200*G*100*120 versamenti*AM009*10*12*100*120';		
				option.appendChild(document.createTextNode(desc));
				selPac.appendChild(option);
				document.buyFundForm.anticipoRate.value = 'N';
				if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
				}
		  			var txt = new String('AM009');
  				var lung = txt.length - 1;
  				var codicePiano = 'AM009';
  				if(codicePiano.substring(lung)==valore){
  				doc = '1200';
  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
				notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
				var desc = '180 versamenti';		
				option = document.createElement("option");		
				option.value = '1200*H*100*180 versamenti*AM009*15*12*100*180';		
				option.appendChild(document.createTextNode(desc));
				selPac.appendChild(option);
				document.buyFundForm.anticipoRate.value = 'N';
				if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
				}
		  			var txt = new String('AM009');
  				var lung = txt.length - 1;
  				var codicePiano = 'AM009';
  				if(codicePiano.substring(lung)==valore){
  				doc = '1200';
  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
				notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
				var desc = '240 versamenti';		
				option = document.createElement("option");		
				option.value = '1200*I*100*240 versamenti*AM009*20*12*100*240';		
				option.appendChild(document.createTextNode(desc));
				selPac.appendChild(option);
				document.buyFundForm.anticipoRate.value = 'N';
				if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
				}
		  			var txt = new String('AM009');
  				var lung = txt.length - 1;
  				var codicePiano = 'AM009';
  				if(codicePiano.substring(lung)==valore){
  				doc = '1200';
  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
				notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
				var desc = '36 versamenti';		
				option = document.createElement("option");		
				option.value = '1200*C*100*36 versamenti*AM009*3*12*100*36';		
				option.appendChild(document.createTextNode(desc));
				selPac.appendChild(option);
				document.buyFundForm.anticipoRate.value = 'N';
				if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
				}
		  			var txt = new String('AM009');
  				var lung = txt.length - 1;
  				var codicePiano = 'AM009';
  				if(codicePiano.substring(lung)==valore){
  				doc = '1200';
  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
				notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
				var desc = '60 versamenti';		
				option = document.createElement("option");		
				option.value = '1200*E*100*60 versamenti*AM009*5*12*100*60';		
				option.appendChild(document.createTextNode(desc));
				selPac.appendChild(option);
				document.buyFundForm.anticipoRate.value = 'N';
				if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
				}
		  			var txt = new String('AM009');
  				var lung = txt.length - 1;
  				var codicePiano = 'AM009';
  				if(codicePiano.substring(lung)==valore){
  				doc = '1200';
  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
				notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
				var desc = '120 versamenti';		
				option = document.createElement("option");		
				option.value = '1200*G*100*120 versamenti*AM009*10*12*100*120';		
				option.appendChild(document.createTextNode(desc));
				selPac.appendChild(option);
				document.buyFundForm.anticipoRate.value = 'N';
				if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
				}
		  			var txt = new String('AM009');
  				var lung = txt.length - 1;
  				var codicePiano = 'AM009';
  				if(codicePiano.substring(lung)==valore){
  				doc = '1200';
  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
				notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
				var desc = '180 versamenti';		
				option = document.createElement("option");		
				option.value = '1200*H*100*180 versamenti*AM009*15*12*100*180';		
				option.appendChild(document.createTextNode(desc));
				selPac.appendChild(option);
				document.buyFundForm.anticipoRate.value = 'N';
				if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
				}
		  			var txt = new String('AM009');
  				var lung = txt.length - 1;
  				var codicePiano = 'AM009';
  				if(codicePiano.substring(lung)==valore){
  				doc = '1200';
  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
				notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
				var desc = '240 versamenti';		
				option = document.createElement("option");		
				option.value = '1200*I*100*240 versamenti*AM009*20*12*100*240';		
				option.appendChild(document.createTextNode(desc));
				selPac.appendChild(option);
				document.buyFundForm.anticipoRate.value = 'N';
				if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
				}
				document.buyFundForm.sogliaImportoPacSicav.value = doc;
		/* $('notaImportoIniziale').innerHTML = "" +nota +""; */
		$('#notaImportoIniziale').attr("data-tooltip",nota);

		/* $('notaNumeroVersamenti').innerHTML = "" + notaVersamento +""; */
		$('#notaNumeroVersamenti').attr("data-tooltip",notaVersamento);
		caricaImporto();
	}
	
	function cambiaPianiSicav(){
		var index = document.buyFundForm.SelectPeriodoSicav.selectedIndex;	   
		var valore = document.buyFundForm.SelectPeriodoSicav[index].value;
		
		document.buyFundForm.descrizionePeriodo.value = document.buyFundForm.SelectPeriodoSicav[index].text;
		var selPac = document.getElementById('SelectPac');		
		num_option = selPac.options.length;
		for(a=num_option;a>=0;a--){
			selPac.options[a]=null;
		}		
		var doc ="";
		var nota="";
		var notaVersamento="";
  		  			var txt = new String('AM009');
  				var lung = txt.length - 1;
  				var codicePiano = 'AM009';
  				
  				if('161'==178)
  				var valCodPiano =codicePiano.substring(3,4);
  				else
  				var valCodPiano =codicePiano.substring(1,2);
  				if(valCodPiano==valore){
  				doc = '1200';
  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
				notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
				var desc = '36 versamenti';		
				option = document.createElement("option");		
				option.value = '1200*C*100*36 versamenti*AM009*3*12*100*36';		
				option.appendChild(document.createTextNode(desc));
				selPac.appendChild(option);	
				document.buyFundForm.anticipoRate.value = 'N';
				if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
				}
		  			var txt = new String('AM009');
  				var lung = txt.length - 1;
  				var codicePiano = 'AM009';
  				
  				if('161'==178)
  				var valCodPiano =codicePiano.substring(3,4);
  				else
  				var valCodPiano =codicePiano.substring(1,2);
  				if(valCodPiano==valore){
  				doc = '1200';
  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
				notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
				var desc = '60 versamenti';		
				option = document.createElement("option");		
				option.value = '1200*E*100*60 versamenti*AM009*5*12*100*60';		
				option.appendChild(document.createTextNode(desc));
				selPac.appendChild(option);	
				document.buyFundForm.anticipoRate.value = 'N';
				if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
				}
		  			var txt = new String('AM009');
  				var lung = txt.length - 1;
  				var codicePiano = 'AM009';
  				
  				if('161'==178)
  				var valCodPiano =codicePiano.substring(3,4);
  				else
  				var valCodPiano =codicePiano.substring(1,2);
  				if(valCodPiano==valore){
  				doc = '1200';
  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
				notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
				var desc = '120 versamenti';		
				option = document.createElement("option");		
				option.value = '1200*G*100*120 versamenti*AM009*10*12*100*120';		
				option.appendChild(document.createTextNode(desc));
				selPac.appendChild(option);	
				document.buyFundForm.anticipoRate.value = 'N';
				if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
				}
		  			var txt = new String('AM009');
  				var lung = txt.length - 1;
  				var codicePiano = 'AM009';
  				
  				if('161'==178)
  				var valCodPiano =codicePiano.substring(3,4);
  				else
  				var valCodPiano =codicePiano.substring(1,2);
  				if(valCodPiano==valore){
  				doc = '1200';
  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
				notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
				var desc = '180 versamenti';		
				option = document.createElement("option");		
				option.value = '1200*H*100*180 versamenti*AM009*15*12*100*180';		
				option.appendChild(document.createTextNode(desc));
				selPac.appendChild(option);	
				document.buyFundForm.anticipoRate.value = 'N';
				if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
				}
		  			var txt = new String('AM009');
  				var lung = txt.length - 1;
  				var codicePiano = 'AM009';
  				
  				if('161'==178)
  				var valCodPiano =codicePiano.substring(3,4);
  				else
  				var valCodPiano =codicePiano.substring(1,2);
  				if(valCodPiano==valore){
  				doc = '1200';
  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
				notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
				var desc = '240 versamenti';		
				option = document.createElement("option");		
				option.value = '1200*I*100*240 versamenti*AM009*20*12*100*240';		
				option.appendChild(document.createTextNode(desc));
				selPac.appendChild(option);	
				document.buyFundForm.anticipoRate.value = 'N';
				if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
				}
		  			var txt = new String('AM009');
  				var lung = txt.length - 1;
  				var codicePiano = 'AM009';
  				
  				if('161'==178)
  				var valCodPiano =codicePiano.substring(3,4);
  				else
  				var valCodPiano =codicePiano.substring(1,2);
  				if(valCodPiano==valore){
  				doc = '1200';
  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
				notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
				var desc = '36 versamenti';		
				option = document.createElement("option");		
				option.value = '1200*C*100*36 versamenti*AM009*3*12*100*36';		
				option.appendChild(document.createTextNode(desc));
				selPac.appendChild(option);	
				document.buyFundForm.anticipoRate.value = 'N';
				if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
				}
		  			var txt = new String('AM009');
  				var lung = txt.length - 1;
  				var codicePiano = 'AM009';
  				
  				if('161'==178)
  				var valCodPiano =codicePiano.substring(3,4);
  				else
  				var valCodPiano =codicePiano.substring(1,2);
  				if(valCodPiano==valore){
  				doc = '1200';
  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
				notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
				var desc = '60 versamenti';		
				option = document.createElement("option");		
				option.value = '1200*E*100*60 versamenti*AM009*5*12*100*60';		
				option.appendChild(document.createTextNode(desc));
				selPac.appendChild(option);	
				document.buyFundForm.anticipoRate.value = 'N';
				if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
				}
		  			var txt = new String('AM009');
  				var lung = txt.length - 1;
  				var codicePiano = 'AM009';
  				
  				if('161'==178)
  				var valCodPiano =codicePiano.substring(3,4);
  				else
  				var valCodPiano =codicePiano.substring(1,2);
  				if(valCodPiano==valore){
  				doc = '1200';
  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
				notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
				var desc = '120 versamenti';		
				option = document.createElement("option");		
				option.value = '1200*G*100*120 versamenti*AM009*10*12*100*120';		
				option.appendChild(document.createTextNode(desc));
				selPac.appendChild(option);	
				document.buyFundForm.anticipoRate.value = 'N';
				if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
				}
		  			var txt = new String('AM009');
  				var lung = txt.length - 1;
  				var codicePiano = 'AM009';
  				
  				if('161'==178)
  				var valCodPiano =codicePiano.substring(3,4);
  				else
  				var valCodPiano =codicePiano.substring(1,2);
  				if(valCodPiano==valore){
  				doc = '1200';
  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
				notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
				var desc = '180 versamenti';		
				option = document.createElement("option");		
				option.value = '1200*H*100*180 versamenti*AM009*15*12*100*180';		
				option.appendChild(document.createTextNode(desc));
				selPac.appendChild(option);	
				document.buyFundForm.anticipoRate.value = 'N';
				if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
				}
		  			var txt = new String('AM009');
  				var lung = txt.length - 1;
  				var codicePiano = 'AM009';
  				
  				if('161'==178)
  				var valCodPiano =codicePiano.substring(3,4);
  				else
  				var valCodPiano =codicePiano.substring(1,2);
  				if(valCodPiano==valore){
  				doc = '1200';
  				nota = 'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 100&euro;;';
				notaVersamento = 'Numero di rate da versare subito per raggiungere l&#39;importo minimo del primo versamento pari a 1200&euro;;';
				var desc = '240 versamenti';		
				option = document.createElement("option");		
				option.value = '1200*I*100*240 versamenti*AM009*20*12*100*240';		
				option.appendChild(document.createTextNode(desc));
				selPac.appendChild(option);	
				document.buyFundForm.anticipoRate.value = 'N';
				if('N'=="N"){
					$('versamentiPacOutPost').style.display = '';
					$('versamentiPacOutPostFirst').style.display = '';
					}else if('N'=="S"){
					$('versamentiPacOutPost').style.display = 'none';
					$('versamentiPacOutPostFirst').style.display = 'none';
					}
				}
		


		/* $('notaImportoIniziale').innerHTML = "" +nota +""; */
		$('#notaImportoIniziale').attr("data-tooltip",nota);

		/* $('notaNumeroVersamenti').innerHTML = "" + notaVersamento +""; */
		$('#notaNumeroVersamenti').attr("data-tooltip",notaVersamento);
		


		var ind = document.buyFundForm.SelectPac.selectedIndex;	   
		var valoriOption = document.buyFundForm.SelectPac[index].value;			
		var indice = valoriOption.indexOf("*");
		doc = valoriOption.substring(0,indice);
		document.buyFundForm.sogliaImportoPacSicav.value = doc;	
		caricaImporto();
	}
	
	
	function setScopRapSorifin(htmlsel) {
		
				
		if(htmlsel.getAttribute("id")=="sorifinsel") {
			document.buyFundForm.sorifin.value=htmlsel[htmlsel.selectedIndex].value;
		}
		else if(htmlsel.getAttribute("id")=="scorapsel") {
			document.buyFundForm.scorap.value=htmlsel[htmlsel.selectedIndex].value;
		}
		
		console.log("SORIFIN <" + document.buyFundForm.sorifin.value + "> SCORAP<" + document.buyFundForm.scorap.value + ">");
	
	}
	
	window.onload = load; 
</SCRIPT>

<FORM action="" name="buyFundForm" id="buyFundForm" method="POST">
<input type="hidden" name="codiceFondo" value="MS285"/>
<input type="hidden" name="codiceSocietaDiGestione" value="161"/>
<input type="hidden" name="CODISIN" value="LU0119620416"/>
<input type="hidden" name="Fondosicav" value="S"/>
<input type="hidden" name="PAC" value="S"/>
<input type="hidden" name="anniPac" value="0"/>
<input type="hidden" name="decimale" value='000'/>
<input type="hidden" name="importoRata" value='0'/>
<input type="hidden" name="importoValuta" value='0'/>
<input type="hidden" name="importoDivisa" value='0'/>
<input type="hidden" name="numeroRateVersate" value='0'/>
<input type="hidden" name="divisa" value='USD'/>
<input type="hidden" name="codiceFamiglia" value='-'/>
<input type="hidden" name="nomeComparto" value='MSIF Global Brands A $'/>
<input type="hidden" name="speseIngresso" value="0,58%"/>
<input type="hidden" name="NAV" value="102,76"/>
<input type="hidden" name="dataNAV" value="10/01/2017"/>
<input type="hidden" name="nomeFondo" value="MSIF Global Brands A $"/>
<input type="hidden" name="descrSocietaGestione" value="Morgan Stanley Inv. Mgmt (ACD)"/>
<input type="hidden" name="categoria" value='Azionari Internazionali'/>
<input type="hidden" name="ISOTMIN" value="100.0"/>
<input type="hidden" name="ISOTSUC" value="100.0"/>
<input type="hidden" name="IRESMIN" value="0.0"/>
<input type="hidden" name="speseGestione" value="1,40%"/>
<input type="hidden" name="speseUscita" value="Zero"/>
<input type="hidden" name="dirittiFissi" value="12,50 EUR"/>	
<input type="hidden" name="spesePac" value="20 EUR Versamento iniziale PAC - 2,5 EUR rate successive"/>
<input type="hidden" name="reinvestimento" value="N"/>
<input type="hidden" name="reinvestimentoSicav" value="N"/>
<input type="hidden" name="enableBuyFund" value="true"/>
<input type="hidden" name="esenzioneEtica" value=""/>
<input type="hidden" name="percScontoCom" value="54"/>
<input type="hidden" name="scontoPac" value="0"/>
<input type="hidden" name="descrizionePeriodo" value=""/>
<input type="hidden" name="importoPacSicav" value=""/>
<input type="hidden" name="periodoPiano" value=""/>
<input type="hidden" name="sogliaImportoPacSicav" value=""/>
<input type="hidden" name="tipoPiano" value=""/>
<input type="hidden" name="dirCedola" value="5 EUR"/>
<input type="hidden" name="periodoCedola" value="nessuno"/>
<input type="hidden" name="obbligoCedola" value="N"/>
<input type="hidden" name="cambio" value="1,07"/>
<input type="hidden" name="dataCambio" value="13.01.2017"/>
<input type="hidden" name="enableBuyNoEur" value="false"/>
<input type="hidden" name="controlloFatca" value="false"/>
<input type="hidden" name="polizza" value=" "/>
<input type="hidden" name="scorap" value=" "/>
<input type="hidden" name="sorifin" value="  "/>
<input type="hidden" name="anticipoRate" value="  "/>
<input type="hidden" name="fatcapreview" value="KO"/>


<div id="erroreCad" style="/* display: none;*/"></div>
<div id="erroreForm" >
	<div class="boxtop"><img alt="" src="/img/ret/box_msgtop.jpg" border="0"   /></div>
	<div class="boxtxt"><p class="box_mess"><img class="dx" alt="" src="/img/ret/img_or_adeguatezza.gif" border="0" /><img alt="" src="/img/ret/box_attenzione.jpg" border="0"   /><br />
		<ul class="alert">				
					<li id="messaggio" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, rerum!</li>	
			</ul>
		<br class="clear">
		
	</div>
	<br class="clear">
	<div class="boxbottom"><img alt="" src="/img/ret/box_msgbottom.jpg" border="0"   /></div>
	</div>
<div class="tithelp">

<div class="helpleft">Dati Sicav</div>
<br class="clear"></div>
	<table class="form01">
	<tr> 
		<td class="uno" width="105">Tipologia strumento</td>
		<td colspan="3"><strong>Sicav</strong></td>
	</tr>
	<tr> 
		<td class="uno" width="105">Sicav</td>
		<td width="220"><a href="javascript:document.location.href=cgi_script +'/wbOnetoone/2l/jsp/FMP/fida/ricerca.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto&codiceIsin=LU0119620416&fondo=true'"><strong>MSIF Global Brands A $</strong></a></td>
		<td class="uno" width="115">Valore quota/N.A.V. del 10/01/2017</td>
		<td width="215"><strong>102,76 USD</strong>
			<!-- <span id="tooltip1" class="uniqTooltipText nodotted" onmouseout="removeUniqTooltip(event,this); vedi('lampa1');" onmouseover="createUniqTooltip(event, this); nascondi('lampa1');" onmousemove="createUniqTooltip(event, this)"><span class="uniqTooltipPos"><img class="lampa" id="lampa1" src="/img/ret/lampa_off.gif"></span><span class="uniqTooltipInnerHTML">Il valore quota/N.A.V. riportato non corrisponde a quello effettivo al quale sar&agrave; eseguito l'ordine.</span></span> -->
			<a data-tooltip="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, ex molestiae illo neque eveniet! In labore tempore, quidem voluptatum illo." class="btnico ico-info"></a>
		</td>
	</tr>
	<tr> 
		<td class="uno" width="105">Societ&agrave; di gestione</td>
		<td width="220"><strong>Morgan Stanley Inv. Mgmt (ACD)</strong></td>
		<td class="uno" width="115">Categoria Assogestioni</td>
		<td width="215"><strong>Azionari Internazionali</strong></td>
	</tr>
	<tr> 
		<td class="uno" width="105">Importo minimo prima sottoscrizione (PIC)</td>
		<td width="225"><strong><span id='importoMinIni'></span></strong><span id="tooltipdirini" class="uniqTooltipText nodotted" onmouseout="removeUniqTooltip(event,this); vedi('lampa11');" onmouseover="createUniqTooltip(event, this); nascondi('lampa11');" onmousemove="createUniqTooltip(event, this)"><span class="uniqTooltipPos"><img class="lampa" id="lampa11" src="/img/ret/lampa_off.gif"></span><span class="uniqTooltipInnerHTML">L'importo minimo di sottoscrizione corrisponde al valore di una quota pi&ugrave; i diritti fissi di banca corrispondente.</span></span></td>
		<td class="uno" width="115">Importo minimo sott. successive (PIC)</td>
		<td width="210"><strong><span id='importoMinSuc'></span></strong></td>
	</tr>
	
	<tr> 
		<td class="uno" width="105">Commissioni d'ingresso</td>
		<td width="220"><strong>0,58%</strong></td>		
		<td class="uno" width="115">Commissioni di gestione<a data-tooltip="0,20% nel periodo Collocamento e, dal termine del collocamento:<br>1,50% 1° anno<br>1,40% 2° anno<br>1,30% 3° anno<br>1,20% 4° anno<br>1,05% 5° anno<br>0,90% 6° anno<br>0,75% 7° anno e fino a durata max del Fondo" class="btnico ico-info"></a>
</td>
		<td width="215"><strong>1,40% </td>			
	</tr>
	<tr> 
		<td class="uno" width="105">Commissioni di uscita</td>
		<td width="220"><strong>Zero</strong> </td>
				<td class="uno" width="115">Diritti fissi di banca corrispondente </td></td>
				<td width="215"><strong><span id='dirFissi'></span></strong></td>
	</tr>
</table>
<div class="tithelp">
<div class="helpleft">Dati ordine</div>
<br class="clear"></div>
<div id="datiOrdineInput">
	<table class="form01">
	<tr> 
				<td class="uno" width="105"> Deposito </td>					
				<td width="220">				
				<select name="deposito" id="deposito" onchange="javascript:loadMargine();" class="lungmax">		
										<option value="1099/535379/0">1099/535379/0 C/C 01099 - 0000072608 - EUR</option>
											<option value="1099/535379/1">1099/535379/1 C/C 01099 - 0000072608 - EUR</option>
											<option value="1099/535379/2">1099/535379/2 C/C 01099 - 0000072608 - EUR</option>
											<option value="1099/570641/0">1099/570641/0 C/C 01099 - 0000078689 - EUR</option>
											<option value="1099/570641/1">1099/570641/1 C/C 01099 - 0000078689 - EUR</option>
											<option value="1099/570641/2">1099/570641/2 C/C 01099 - 0000078689 - EUR</option>
									</select>
			</td>
				<td class="uno" width="115">Disponibilit&agrave; attuale:</td>
			<td width="215"><strong><span id=margine></span> &nbsp;EUR</strong></td>
		</tr>
	
		<tr> 
		<td class="uno" width="105">Modalit&agrave; di investimento 
			<a class="btnico ico-info" data-tooltip="<b>Pic</b>. E' la sigla di Piano di investimento di capitale. Con questa opzione acquisti quote di un fondo o azioni di una sicav in <b>un&#39;unica soluzione</b>.<BR/><b>Pac</b>. E' la sigla di Piano di accumulo del capitale. Investi nel fondo o nella sciav tramite <b>versamenti periodici</b>, anche di piccoli importi."></a>
			<!-- <span class="tooltip"><a class="nounderline" onmouseout="vedi('lampa4');" onmouseover="nascondi('lampa4');" href="#1"><img class="lampa" id="lampa4" src="/img/ret/lampa_off.gif"><span><span><span></span></span></span></a></span> -->
		</td>
		<td width="220">	
		<input type="radio" name="radiobuttonPic" value="radiobutton" class="nobor3" onclick="javascript:disabilitaPac(this.checked)"/> <span class="txtinput">unico acquisto (PIC)</span> <br class="clear" />
		<input type="radio" name="radiobuttonPac" value="radiobutton" class="nobor3" onclick="javascript:disabilitaPic(this.checked)"/> <span class="txtinput">piano di accumulo (PAC)</span> <br class="clear" />
		</td>
		<td class="uno" width="115" id="durataPiano">Durata del piano</td>
		<td id="pianiPac" style="/*display: none;*/">
		<SELECT id='SelectPac' name='SelectPac' onchange='javascript:caricaImporto();'>
		</SELECT>
		</td>
	</tr>	
	<tr id="periodoPiani" style="/* display: none; */">
		<td class="uno" width="105"></td>
		<td width="220"></td>
		<td class="uno" width="115">Periodicit&agrave;</td>
		<td><SELECT id='SelectPeriodo' name='SelectPeriodo' onchange='javascript:caricaImportoPeriodo();'>
				<OPTION value='12*M*Mensile' selected>Mensile</OPTION>
				</SELECT></td>
	</tr>
	<tr id="periodoPianiEpsilon" style="/* display: none;*/">
		<td class="uno" width="105"></td>
		<td width="220"></td>
		<td class="uno" width="115">Periodicit&agrave;</td>
		<td>
		<SELECT id='SelectPeriodoEpsilon' name='SelectPeriodoEpsilon' onchange='javascript:cambiaPianiEpsilon();'>
						<OPTION value='M'>Mensile</OPTION>
					</SELECT>
		</td>
	</tr>
	<tr id="periodoPianiSicav" style="/* display: none; */">
		<td class="uno" width="105"></td>
		<td width="220"></td>
		<td class="uno" width="115">Periodicit&agrave;</td>
		<td>
		<SELECT id='SelectPeriodoSicav' name='SelectPeriodoSicav' onchange='javascript:cambiaPianiSicav();'>
						<OPTION value='M'>Mensile</OPTION>
					</SELECT>
		</td>
	</tr>
	
			<tr id="importoPic"> 
		<td class="uno" width="105">Importo</td>
		<td colspan="3"><input size="12" name='importo' type="text" class="importo" value=''/>	<strong>EUR</strong></td>
		</tr>	
	<!-- Importo rata (attuale ) -->					
	<tr id="importoPac" style="/* display: none;*/">
		<td class="uno" width="105">Importo rata<a id="notaImportoIniziale" class="btnico ico-info" data-html="true" data-tooltip=""></a></td>
		<td id="campo3">
			<!--
			<span class="inputmap"><input class="piccolo" name="rata" value="" type="text" readonly="readonly"/> 
			<img id="tickImportoPac" usemap="#map2" src="/img/ret/frecce.gif">
			<span class="tooltip fnd"><a class="nounderline" onmouseout="vedi('lampa6');" onmouseover="nascondi('lampa6');" href="#1"><img class="lampa" id="lampa6" src="/img/ret/lampa_off.gif"><span><span><span id="notaImportoIniziale"></span></span></span></a></span>
			<map name="map2" id="map2">
			<area title="Aumenta importo rata" alt="Aumenta importo rata" href="javascript:incimp(document.buyFundForm.rata);" coords="0,0,9,5" shape="rect">
			<area title="Diminuisci importo rata" alt="Diminuisci importo rata" href="javascript:decimp(document.buyFundForm.rata);" coords="0,9,9,14" shape="rect"></map></span>
			-->
			<!-- Esempio spinner parzialmente riadattato -->
			<span class="spinner">
				<a class="btnspin minus" role="button" title="Diminuisci importo rata" alt="Diminuisci importo rata"  href="javascript:decimp(document.buyFundForm.rata);">-</a>
				<input type="text" name="rata" autocomplete="off" value="100" readonly="readonly">
				<a class="btnspin plus" role="button" title="Aumenta importo rata" alt="Aumenta importo rata" href="javascript:incimp(document.buyFundForm.rata);" >+</a>
			</span>
			<!-- Fine esempio spinner riadattato -->
			<!-- Esempio icona informativa con ID (e contenuto dinamico) -->
			

			<!-- fine esempio icona informativa con ID (e contenuto dinamico) -->

		</td>
		<td class="uno" width="115">Investimento totale (PAC)</td>
		<td width="215"><strong><span id="investimentoTotale"></span>&nbsp;EUR</strong></td>
	</tr>

	<!-- Fine importo rata attuale -->
	<tr id="versamentiPac" style="/*display: none; */">
		<td width="105" class="uno" id="campo01">Numero versamenti iniziali<a id="notaNumeroVersamenti" class="btnico ico-info" data-html="true" data-tooltip=""></a></td>
		<td id="campo3">
			<!-- Spinner --
			<span class="inputmap"><input class="piccolo" name="numVersamenti" value="" type="text" readonly="readonly"/> 
			<img id="tickRatePac" usemap="#map3" src="/img/ret/frecce.gif">
			<span class="tooltip fnd"><a class="nounderline" onmouseout="vedi('lampa7');" onmouseover="nascondi('lampa7');" href="#1"><img class="lampa" id="lampa7" src="/img/ret/lampa_off.gif"><span><span><span id="notaNumeroVersamenti"></span></span></span></a></span>
			<map name="map3" id="map3">
			<area title="Aumenta numero rate" alt="Aumenta numero rate" href="javascript:incrate(document.buyFundForm.numVersamenti);" coords="0,0,9,5" shape="rect">
			<area title="Diminuisci numero rate" alt="Diminuisci numero rate" href="javascript:decrate(document.buyFundForm.numVersamenti);" coords="0,9,9,14" shape="rect"></map></span>
			-- fine spinner -->
			<span class="spinner">
				<a class="btnspin minus" role="button" title="Diminuisci numero rate" alt="Diminuisci numero rate"  href="javascript:decrate(document.buyFundForm.numVersamenti);">-</a>
				<input type="text" name="numVersamenti" autocomplete="off" value="100" readonly="readonly">
				<a class="btnspin plus" role="button" title="Aumenta numero rate" alt="Aumenta numero rate" href="javascript:incrate(document.buyFundForm.numVersamenti);" >+</a>
			</span>
		</td>		
        <td class="uno" width="115">Investimento iniziale (PAC)</td>
		<td width="215"><strong><span id="investimentoIniziale"></span>&nbsp;EUR</strong></td>
	</tr>

	<tr id="versamentiPacOutPostFirst" style="/* display: none;*/"> 
		<td colspan="4">Avvertenza: il versamento iniziale non decurta la durata del PAC (numero versamenti).</td>
	</tr>

	</table>
</div>


<div id="datiOrdineOutput" style="/* display: none;*/ ">
<table class="form01">
	<tr> 
		<td class="uno" width="105"> Deposito </td>					
		<td id="depositoOut" width="220"></td>
		<td class="uno" width="115">Disponibilit&agrave; attuale:</td>
		<td id="margineOut" width="215"></td>
	</tr>
	<tr id="modalitaOutPic"> 
		<td class="uno" width="105">Modalit&agrave; di investimento</td>
		<td width="220"><strong>unico acquisto (PIC)</strong></td>
		<td class="uno" width="115">&nbsp;</td>	
		<td width="215">&nbsp;</td>	
	</tr>
	<tr id="modalitaOutPac"> 
		<td class="uno" width="105">Modalit&agrave; di investimento</td>
		<td width="220"><strong>piano di accumulo (PAC)</strong></td>
		<td class="uno" width="115">Durata del piano</td>
		<td width="215"><span id="durataPianoOut"></span><span id="descrPeriodo"></span></td>		
	</tr>
	
	<tr id="importoPicOut"> 
		<td class="uno" width="105">Importo</td>
		<td width="220" colspan="3" id="impPicOut"></td>
	</tr>	
	<tr id="importoPacOut">
		<td class="uno" width="105">Importo rata</td>
		<td width="220" id="impRataOut"><strong></strong></td>
		<td class="uno" width="115">Investimento totale (PAC)</td>
		<td id="invTotOut" width="215"><strong></strong></td>
	</tr>	
	<tr id="versamentiPacOut">
		<td width="105" class="uno">Numero versamenti iniziali</td>
		<td width="220" id="numVerIni"><strong></strong></td>		
		<td class="uno" width="115">Investimento iniziale (PAC)</td>
		<td id="invIniOut" width="215"><strong></strong></td>
	</tr>

	<tr id="versamentiPacOutPost" style="/* display: none;*/"> 
		<td colspan="4">Avvertenza: il versamento iniziale non decurta la durata del PAC (numero versamenti).</td>
	</tr>
	<tr id="esenEticaOut"> 
		<td colspan="4"><input name="esenzioneOut" value="014" class="nobor3" type="checkbox">Si richiede l&#39;esenzione del contributo, pari allo 0,1% di ciascun importo versato, finalizzato alla realizzazione del Fondo di Garanzia per progetti di microcredito in Italia di cui alla sezione B della Parte I del Prospetto d&#39;Offerta.</td>
	</tr>
	<tr id="reinvSicav" style="/* display: none;*/">	
		<td width="105" class="uno">Destinazione dei proventi</td>
		<td colspan="3"><strong><span id="textCedSicav"></span></strong></td>
	</tr>
	
</table>
</div>					
<br />

	
<div id="avanti" class="fooform">
	<div class="fooformleft">
		<div><a href="javascript:history.back()" class="btnformleft" title="indietro"><img src="/img/ret/btn_left_bi.gif" alt="" /><span>indietro</span><img src="/img/ret/btn_right_bi.gif" alt="" /></a></div>	
	</div>
	<div class="fooformright">
		<div><a href="javascript:prosegui();" class="btnformright" title="prosegui" id="linkSubmit"><img src="/img/ret/btn_left_ar.gif" alt="" /><span>prosegui</span><img src="/img/ret/btn_right_ar.gif" alt="" /></a></div><br class="clear" />
	</div>
	<br class="clear" />
</div>

<!--antiriciclaggio -->
<div class="tithelp">
	<div class="helpleft">INFORMAZIONI E AVVERTENZE</div>
	<br class="clear">
</div>
<table class="form01 form01b">
	 <tbody><tr>	
		<td colspan="4"><strong class="verde">Tempistiche dell'ordine<br></strong>
				Ti ricordiamo che se inserisci un ordine in un giorno lavorativo di borsa aperta prima delle ore 21.00, l'operazione sarà inviata al soggetto incaricato dei pagamenti alle ore 21.00 del giorno stesso; se inserisci l'ordine dopo le ore 21.00, l'operazione sarà inviata al soggetto incaricato dei pagamenti il primo giorno lavorativo successivo di borsa aperta alle ore 21.00.<br>
		Se inserisci un ordine in un giorno non lavorativo o di borsa chiusa, l'operazione sarà inviata al soggetto incaricato dei pagamenti il primo giorno lavorativo successivo di borsa aperta alle ore 21.00.<br><br>
				<div><a title="Tempistiche dell'ordine" class="btnevid1" href="javascript:obscurateAll(1);openAlert('layeralert3');"><img alt="" src="/img/ret/btn_left_sm1.gif"><span>Tempistiche dell'ordine</span><img alt="" src="/img/ret/btn_right_sm1.gif"></a></div></td>
  	</tr>
  
  	 	<tr> 	
		<td colspan="4">
		<strong class="verde">Avvertenze sull'operazione che stai per effettuare<br></strong>
			<p>Prima di procedere nell'operazione di investimento, <strong>ti preghiamo di consultare nuovamente l'"Informativa preliminare relativa ai Servizi ed alle attività di investimento offerti da </strong><strong class="verde">WeBank</strong><strong>"</strong>.<br> 
			<strong>Verifica</strong>, inoltre, <strong>che le informazioni da te fornite a </strong><strong class="verde">WeBank</strong> in merito al tuo livello di esperienza e conoscenza nell'ambito degli investimenti in strumenti finanziari <strong>siano aggiornate</strong>. Tali informazioni sono necessarie per permettere a WeBank di controllare che tu sia in grado di comprendere i rischi che la presente operazione di investimento comporta. Viceversa, verrà fatto affidamento sulle informazioni che hai già fornito.<br>
			<strong>Ti invitiamo, in particolare, a prendere visione delle seguenti avvertenze</strong> relative all'operazione di investimento che intendi effettuare:</p>	
				
				<ul class="small">
								</ul>
				<ul class="small">
										- Ti informiamo che stai per effettuare un'operazione nella quale Webank ha un conflitto di interessi per prodotti o servizi di terzi per i quali la Banca percepisce delle commissioni.<br>
								</ul>
				<ul class="small">
									</ul>
			<div class="nobor3">	
			<input name="checkAvvertenze" class="nobor3" type="checkbox">
			<span class="txtinput txtinputlungo"><strong class="small">nonostante le suddette avvertenze, intendo comunque proseguire nell'operazione di investimento.</strong></span>
			</div>
			<br class="clear">
		</td>
	</tr>
			<tr>
		<td colspan="4"><strong class="verde">Dichiarazione relativa agli incentivi<br></strong>
			<p>Ti segnaliamo che in relazione all'operazione di investimento che stai per concludere abbiamo percepito - percepiremo - un incentivo nella misura specificata di seguito</p>
				<ul class="small">
										- PER IL PRESENTE COLLOCAMENTO LA BANCA PERCEPIRA' DALL'EMITTENTE LE SEGUENTI COMMISSIONI MASSIME:  50,00% DELLE COMMISSIONI DI GESTIONE PERIODICHE PARI A  01,10%                                       <br>
										- PER IL PRESENTE COLLOCAMENTO LA BANCA PERCEPIRA' DALL'EMITTENTE LE SEGUENTI COMMISSIONI MASSIME:  100,0% DELLE COMMISSIONI DI INGRESSO PARI A  03,00%                                                  <br>
								</ul>
			<div class="nobor3">
			<input name="checkIncentivi" class="nobor3" type="checkbox">
			<span class="txtinput txtinputlungo"><strong class="small">Dichiaro di avere preso visione delle informazioni relative agli incentivi percepiti da WeBank in relazione alla presente operazione di investimento.</strong></span>
			</div>
		</td>
	</tr>
	
    	
   		<tr>
			<td colspan="4"><strong class="verde">Informazioni<br></strong>
				<p><strong>Ti ricordiamo che, ai sensi dell'art. 67-duodecies comma 5 del D. Lgs. 206/2005, alle sottoscrizioni tramite tecniche di comunicazione a distanza di quote/azioni di fondi/sicav non si applica il diritto di recesso previsto per un eventuale ripensamento da parte dell'investitore entro 14 giorni dall'avvenuta sottoscrizione delle quote/azioni.</strong></p>
				
		</td></tr>
		<tr>	
			<td colspan="4"><strong class="verde">Prospetto informativo<br></strong>
				<p>Prima di sottoscrivere le azioni della Sicav, <strong>prendi visione attentamente della</strong> relativa <strong>documentazione</strong> (Prospetto semplificato, Modulo di Sottoscrizione e relativo Allegato) dopo averla stampata e/o salvata su supporto duraturo. In particolare fai attenzione al paragrafo “fattori di rischio” contenuto nel Prospetto Semplificato.<br>	
				Ti ricordiamo che nella sezione “Investire in fondi e sicav”&gt;“Società di gestione” sono sempre disponibili i documenti informativi di cui ti raccomandiamo un'attenta lettura.</p>
				<a href="javascript:prospetto('10024','18')"><strong>Documentazione obbligatoria</strong></a><br><br>
				<input name="checkProspetto" class="nobor3" type="checkbox" disabled="Enabled">
				<span class="txtinput txtinputlungo"><strong class="small">Confermo di aver preso visione dell'intera documentazione informativa relativa alla Sicav dopo averla stampata e/o acquisita su supporto duraturo.</strong></span> 
				<br class="clear">
			</td>
  	 	</tr>
   		
   		

		<input name="primaSottoscrizione" type="hidden" value="S">
    	    	<input name="flagPrivacy" type="hidden" value="">
  	 	
		   		    <tr> 
				<td colspan="4"><strong class="verde">Dichiarazioni e prese d'atto<br></strong>
					<div class="texta read">
			        	<ul class="lista">
			        		<li><strong>prendo atto ed accetto che la presente sottoscrizione viene fatta in base e in conformità al vigente Prospetto informativo Semplificato e alla documentazione relativa alla SICAV (modulo di sottoscrizione, Statuto) che dichiaro di aver letto, compreso e di accettare dopo averli stampati e/o acquisiti su supporto duraturo;</strong></li><li>dichiaro di essere  consapevole della possibilità di ricevere copia del prospetto semplificato in forma cartacea; </li><li>dichiaro di  non essere cittadino  e/o residente negli Stati Uniti o in uno dei territori soggetti alla loro giurisdizione (“soggetto statunitense”) e di non fare richiesta di sottoscrizione in qualità di mandatario di un soggetto avente tali requisiti.  Il sottoscrittore si impegna a non trasferire le azioni o i diritti su di esse a “soggetti statunitensi” e ad informare senza ritardo il Soggetto Incaricato del Collocamento, qualora assumessi la  qualifica di soggetto  statunitense;</li><li>relativamente al trattamento dei dati personali dichiaro di aver preso visione dell'Informativa di cui all'art. 13 del Codice Privacy riportata sul retro del modulo di sottoscrizione;</li><li>conferisco mandato al Soggetto Incaricato dei pagamenti (indicato nel Modulo di sottoscrizione), che accetta, affinchê in nome proprio e per conto dell'Intestatario e Cointestatario (i) trasmetta in forma aggregata alla Sicav o al soggetto da essa designato, le richieste di sottoscrizione, conversione e rimborso; (ii) espleti tutte le formalità amministrative connesse all'esecuzione del contratto. Al momento dell'acquisto, le Azioni sono trasferite automaticamente nella proprietà dei Sottoscrittori mediante apposite annotazioni nelle evidenze del Soggetto Incaricato dei pagamenti. Questi tiene un elenco aggiornato dei Sottoscrittori con indicazione del numero delle Azioni sottoscritte per conto di ciascuno di essi. La titolarità in capo al Sottoscrittore è comprovata dalla lettera di conferma. Il mandato può essere revocato in qualsiasi momento, per il tramite dei Soggetti incaricati del collocamento, con comunicazione scritta trasmessa a mezzo raccomandata A/R al Soggetto Incaricato dei pagamenti. In caso di sostituzione il mandato, salva diversa istruzione, si intende conferito al nuovo soggetto incaricato dei pagamenti;</li><li>dichiaro di essere stato informato che alle sottoscrizioni tramite tecniche di comunicazione a distanza di azioni di Sicav non si applica il diritto di recesso previsto per un eventuale ripensamento da parte dell'investitore entro 14 giorni dall'avvenuta sottoscrizione delle azioni;</li><li>che tutta la corrispondenza sarà inviata all'indirizzo di residenza dell'Intestatario o, se diverso al domicilio del rapporto indicato, per il quale l'Intestatario si è impegnato a comunicare tempestivamente eventuali modifiche, e che in ogni caso le comunicazioni inviate all'Intestatario si intendono conosciute anche da parte dei Cointestatari; </li><li>che è vietato utilizzare per la sottoscrizione mezzi di pagamento diversi da quelli indicati per la sottoscrizione a distanza tramite internet. Dichiaro, altresì, che il pagamento del rimborso puì essere effettuato esclusivamente a favore del conto corrente intestato al sottoscrittore richiedente;</li><li>che eventuali eventi di forza maggiore, ivi compresi gli scioperi del personale della Sicav, delle banche che intermediano i pagamenti e dei Soggetti incaricati del collocamento, potrebbero causare ritardi nello svolgimento delle operazioni di sottoscrizione, conversione e rimborso, e ne accetta le conseguenze; </li><li>che la Sicav, l'Agente, la Banca Depositaria ed il Soggetto Incaricato dei Pagamenti nell'esecuzione degli ordini ricevuti dal Soggetti Incaricato del  collocamento che operano con tecniche di comunicazione a distanza, non sono responsabili della regolarità e/o dell'esistenza delle istruzioni impartite dal cliente e sono del tutto estranee ai rapporti discendenti dal contratto che regola la prestazione dei Servizi di collocamento mediante tecniche di comunicazione a distanza;</li><li>che la sottoscrizione e la partecipazione a DWS INVEST è regolata dalla legge lussemburghese ed ogni controversia che dovesse sorgere in relazione alla sottoscrizione delle azioni della Sicav è rimessa alla esclusiva competenza del Foro della città di Lussemburgo, nel Granducato di Lussemburgo, salvo che il sottoscrittore rivesta la qualità di consumatore ai sensi dell'art. 3 del “Codice del consumo”, per il quale resta ferma la competenza del Foro del luogo in cui il consumatore ha la propria residenza o domicilio elettivo; </li><li>che le operazioni di sottoscrizione, conversione e rimborso, sono trattate necessariamente dal Soggetto Incaricato dei Pagamenti collegato al Soggetto Incaricato del collocamento che ha ricevuto la richiesta;</li><li>che l'Intestatario e i Cointestatari hanno uguali diritti e doveri per quanto attiene ai loro rapporti con la Sicav e dichiarano irrevocabilmente di riconoscersi uguali poteri disgiunti anche di disposizione di tutti i diritti ed obblighi derivanti dalla partecipazione alla DWS Invest.</li>
			        	</ul>
					</div><br><br>	
					<div class="nobor3"><input type="checkbox" class="nobor3" name="dichiarazioni">
					<span class="txtinput txtinputlungo"><strong class="small">sulla base delle dichiarazioni e delle conferme di cui sopra, autorizzo WeBank a compiere tutto quanto necessario per eseguire l'operazione di investimento richiesta. Autorizzo, altresì, l'addebito sul conto corrente collegato al deposito titoli precedentemente scelto di quanto necessario per eseguire l'operazione.</strong></span></div> 
				</td>
		    </tr>
		    	    	<tr>
			<td colspan="4"><strong class="verde">Conferma ordine<br></strong>
			<p>Premendo “conferma e invia ordine” <strong>confermi la tua volontà di effettuare l'operazione di investimento</strong> e in particolare:</p>
			<ul class="small">
				<li>confermi l'autorizzazione generale già rilasciata a WeBank di operare in <strong>conflitto di interessi</strong>;</li>
				<li>dichiari di essere debitamente informato circa la natura e le caratteristiche della Sicav e di essere consapevole dei rischi derivanti dal relativo investimento; a tale riguardo dichiari di aver letto, compreso ed accettare quanto previsto nella documentazione relativa alla Sicav (Prospetto Semplificato, Prospetto Completo, Statuto, Modulo di sottoscrizione);</li>
				<li>dichiari di avere <strong>autonomamente valutato le condizioni economiche dell'operazione di investimento</strong> in oggetto e di averle trovate appropriate rispetto alle proprie aspettative di risultato;</li>
				<li>dichiari di essere consapevole che gli ordini di investimento o disinvestimento conferiti in un giorno non lavorativo si considerano pervenuti il primo giorno lavorativo successivo;</li>
				<li>confermi le tue dichiarazioni circa le tue precedenti esperienze ed attuali conoscenze nell'ambito degli investimenti in strumenti finanziari.</li>
			</ul>
			<br>
			L'ordine sarà inviato alla Sicav e verrà effettuato l'addebito sul conto corrente collegato al deposito titoli precedentemente scelto.<br><br>
			</td>
	    </tr>    
   	 	   	 	
	</tbody></table>

	<div style="background-color: #F3F3F3;padding:4px;font-family: Tahoma,tahoma,Arial,sans-serif">
   <div class="verde">Ai sensi della normativa antiriciclaggio (d.lgs 231/07) sei tenuto a compiere alcuni adempimenti e a fornire dichiarazioni e informazioni personali, per operazioni di importo superiore a 5000 Euro.
Ti ricordiamo che il rilascio di false informazioni oppure omissioni può comportare conseguenze anche di natura penale.
   </div>
   <br>
   <div style="float:left;">
	<fieldset>
		<strong>Origine dei fondi</strong>
		<span id="tooltip100" class="uniqTooltipText nodotted" onmouseout="removeUniqTooltip(event,this); vedi('lampa100');" onmouseover="createUniqTooltip(event, this); nascondi('lampa100');" onmousemove="createUniqTooltip(event, this)">
			<span class="uniqTooltipPos">
				<img class="lampa" style="margin-top:-10px;margin-left:-5px" id="lampa100" src="/img/ret/lampa_off.gif">
			</span>
			<span class="uniqTooltipInnerHTML">
			Per 'origine dei fondi' si intende il capitale che impieghi sul <br>
			conto corrente proveniente da fonti anche diverse di lavoro 
			</span>
		</span>
		<br><br>
		<select id="sorifinsel" onclick="javascript:setScopRapSorifin(this);">
			<option value="  " selected="">Seleziona ...</option>
							<option value="01">PENSIONE</option>
							<option value="02">REDDITO DA LAVORO AUTONOMO</option>
							<option value="03">REDDITO DA LAVORO DIPENDENTE</option>
							<option value="04">RISPARMIO</option>
							<option value="05">SUCCESSIONE</option>
							<option value="06">DONAZIONE</option>
							<option value="07">DISINVESTIMENTO STRUMENTO FINANZIARIO</option>
							<option value="08">VINCITA</option>
							<option value="09">LIQUIDAZIONE PREMI ASSICURATIVI</option>
							<option value="10">VENDITA BENI IMMOBILI</option>
							<option value="11">VENDITA BENI MOBILI</option>
							<option value="12">VENDITA/ACQUISTO</option>
							<option value="13">INCASSO DA CLIENTI</option>
							<option value="14">ALTRO</option>
					</select>
	</fieldset>
   </div>
	
   <div style="float:right;">	
	<fieldset>
		<strong>Scopo del rapporto</strong>
		<br><br>
		<select id="scorapsel" onclick="javascript:setScopRapSorifin(this);">
			<option value=" " selected="">Seleziona ...</option>
							<option value="1">INVESTIMENTO FAMILIARE/PERSONALE/RISPARMIO</option>
							<option value="2">INVESTIMENTO PROFESSIONALE/AZIENDALE/COMMERCIALE</option>
							<option value="3">INVESTIMENTO CONTO TERZI</option>
					</select>
	</fieldset>
   </div>

<br>
<br class="clear">
</div>
<table class="form01 form01b">
	 <tbody><tr>	
		<td colspan="4"><strong class="verde">Tempistiche dell'ordine<br></strong>
				Ti ricordiamo che se inserisci un ordine in un giorno lavorativo di borsa aperta prima delle ore 21.00, l'operazione sarà inviata alla SGR alle ore 21.30 del giorno stesso; se inserisci l'ordine dopo le ore 21.00, l'operazione sarà inviata alla SGR il primo giorno lavorativo successivo di borsa aperta alle ore 21.30.<br>
		Se inserisci un ordine in un giorno non lavorativo o di borsa chiusa, l'operazione sarà inviata alla SGR il primo giorno lavorativo successivo di borsa aperta alle ore 21.30.<br><br>
				<div><a title="Tempistiche dell'ordine" class="btnevid1" href="javascript:requestTmp();"><img alt="" src="/img/ret/btn_left_sm1.gif"><span>Tempistiche dell'ordine</span><img alt="" src="/img/ret/btn_right_sm1.gif"></a></div></td>
  	</tr>
  
  	 	<tr> 	
		<td colspan="4">
		<strong class="verde">Avvertenze sull'operazione che stai per effettuare<br></strong>
			<p>Prima di procedere nell'operazione di investimento, <strong>ti preghiamo di consultare nuovamente l'"Informativa preliminare relativa ai Servizi ed alle attività di investimento offerti da </strong><strong class="verde">WeBank</strong><strong>"</strong>.<br> 
			<strong>Verifica</strong>, inoltre, <strong>che le informazioni da te fornite a </strong><strong class="verde">WeBank</strong> in merito al tuo livello di esperienza e conoscenza nell'ambito degli investimenti in strumenti finanziari <strong>siano aggiornate</strong>. Tali informazioni sono necessarie per permettere a WeBank di controllare che tu sia in grado di comprendere i rischi che la presente operazione di investimento comporta. Viceversa, verrà fatto affidamento sulle informazioni che hai già fornito.<br>
			<strong>Ti invitiamo, in particolare, a prendere visione delle seguenti avvertenze</strong> relative all'operazione di investimento che intendi effettuare:</p>	
				
				<ul class="small">
								</ul>
				<ul class="small">
										- Ti informiamo che stai per effettuare un'operazione nella quale Webank ha un conflitto di interessi per prodotti finanziari emessi da una Società direttamente o indirettamente collegate al Gruppo Bipiemme.<br>
										- Ti informiamo che stai per effettuare un'operazione nella quale Webank ha un conflitto di interessi per prodotti finanziari emessi da una Società di cui il Gruppo Bipiemme detiene una partecipazione rilevante.<br>
										- Ti informiamo che stai per effettuare un'operazione nella quale Webank ha un conflitto di interessi per prodotti o servizi di terzi per i quali la Banca percepisce delle commissioni.<br>
								</ul>
				<ul class="small">
									</ul>
			<div class="nobor3">	
			<input name="checkAvvertenze" class="nobor3" type="checkbox">
			<span class="txtinput txtinputlungo"><strong class="small">nonostante le suddette avvertenze, intendo comunque proseguire nell'operazione di investimento.</strong></span>
			</div>
			<br class="clear">
		</td>
	</tr>
			<tr>
		<td colspan="4"><strong class="verde">Dichiarazione relativa agli incentivi<br></strong>
			<p>Ti segnaliamo che in relazione all'operazione di investimento che stai per concludere abbiamo percepito - percepiremo - un incentivo nella misura specificata di seguito</p>
				<ul class="small">
										- PER IL PRESENTE COLLOCAMENTO LA BANCA PERCEPIRA' DAL                L'EMITTENTE LE SEGUENTI COMMISSIONI MASSIME:  72,00% D                ELLE COMMISSIONI DI GESTIONE PERIODICHE PARI A   1,80%                <br>
								</ul>
			<div class="nobor3">
			<input name="checkIncentivi" class="nobor3" type="checkbox">
			<span class="txtinput txtinputlungo"><strong class="small">Dichiaro di avere preso visione delle informazioni relative agli incentivi percepiti da WeBank in relazione alla presente operazione di investimento.</strong></span>
			</div>
		</td>
	</tr>
	
	<tr>
			<td colspan="4"><strong class="verde">Informazioni<br></strong>
			<p><strong>L'unico mezzo di pagamento</strong> previsto per la sottoscrizione/acquisto tramite tecniche di comunicazione a distanza delle quote del fondo <strong>è il bonifico bancario</strong>.<br><br>
			<strong>Ti ricordiamo che, ai sensi dell'art. 67-duodecies comma 5 del D. Lgs. 206/2005, alle sottoscrizioni tramite tecniche di comunicazione a distanza di quote/azioni di fondi/sicav non si applica il diritto di recesso previsto per un eventuale ripensamento da parte dell'investitore entro 14 giorni dall'avvenuta sottoscrizione delle quote/azioni</strong>.<br><br>
			Prima di aderire al fondo, <strong>prendi visione attentamente della</strong> relativa <strong>documentazione</strong> dopo averla stampata e/o salvata su supporto duraturo. In particolare fai attenzione al paragrafo "fattori di rischio" contenuto nel Prospetto Semplificato.
			</p></td>
		</tr>
		<tr>
			<td colspan="4"><strong class="verde">Documentazione obbligatoria<br></strong>
			Ti ricordiamo che nella sezione "Investire in fondi e sicav - Società di gestione" sono sempre disponibili i documenti informativi di cui ti raccomandiamo un'attenta lettura.<p></p>
			<a href="javascript:prospetto('10015','17')"><strong>Documentazione obbligatoria</strong></a><br><br>
			<input name="checkProspetto" class="nobor3" type="checkbox" disabled="Enabled">
			<div class="nobor3">
			<span class="txtinput txtinputlungo"><strong class="small">Confermo di aver preso visione dell'intera documentazione informativa relativa al fondo dopo averla stampata e/o acquisita su supporto duraturo.</strong></span><br class="clear">
			</div>
			</td>
   		</tr>
   		
   		
   		

		
	
	
	<input name="primaSottoscrizione" type="hidden" value="N">
		   			   	
		    <tr> 
				<td colspan="4"><strong class="verde">Conferma ordine<br></strong>
					Premendo “conferma e invia ordine” <strong>confermi la tua volontà di effettuare l'operazione di investimento</strong> e in particolare:<br><br>
					<ul class="small">
						<li>confermi di aver letto nuovamente la documentazione relativa al fondo ed in particolare di quanto previsto in ordine alle modalità di effettuazione delle operazioni successive alla prima sottoscrizione;</li>
						<li>autorizzi WeBank a compiere tutto quanto necessario per eseguire l'operazione di investimento richiesta; autorizzi altresì l'addebito sul conto corrente collegato al deposito titoli precedentemente scelto di quanto necessario per eseguire l'operazione;</li>
						<li>confermi l'autorizzazione generale già rilasciata a WeBank di operare in conflitto di interessi;</li>
						<li>dichiari di avere autonomamente valutato le condizioni economiche dell'operazione di investimento in oggetto e di averle trovate appropriate rispetto alle proprie aspettative di risultato;</li>
						<li>confermi le tue dichiarazioni circa le tue precedenti esperienze ed attuali conoscenze nell'ambito degli investimenti in strumenti finanziari.</li>
					</ul>
				<br>
				L'ordine sarà inviato alla società di gestione del fondo e verrà effettuato l'addebito sul conto corrente collegato al deposito titoli precedentemente scelto.<br><br>
				</td>
		    </tr>   
		    	</tbody></table>

<div style="display: none;" id="layeralert3" class="layeralert3">
<div onmouseover="this.style.cursor='move'; $('layeralert3').dragHandle = new Draggable('layeralert3',{handle: 'handle'}, { scroll: window });" class="head handle" style="cursor: move;"><img onclick="this.parentNode.parentNode.style.display='none';unobscurateAll();closeAlert('layeralert3');" alt="chiudi" src="/img/ret/layeralert_x.gif"/></div>
<div class="body">
<div id="tempi">
	<table class="form01">
	 
	

		<tbody><tr>
<!-- 			<td width="105" class="uno" valign="top"></td>   --> 
			<td> 
				<table class="timetable" style="width:560px !important;" cellpadding="0" cellspacing="0"> 
					<!-- APPENDERE A CLASSE TIMEROW CLASSE CON QUANTITA' timerow4,timerow5,timerow6,timerow7 --> 
					<tbody><tr class="timerow timerow5"> 
	
						<td class="timerowfirst">&nbsp;</td> 
				
						<td>&nbsp;</td> 
				
						<td>&nbsp;</td> 
				
						<td>&nbsp;</td> 
				
						<td>&nbsp;</td> 
				
						<td>&nbsp;</td> 
				
				</tr> 
					
					<tr class="timeday"> 
	
						<td class="selected">oggi</td> 
	
						<td>+1gg</td> 
	
						<td></td> 
	
						<td></td> 
	
						<td></td> 
	
						<td>+5gg</td> 
	
					</tr> 
					
					<tr class="timedesc"> 
	
						<td>
							<ul> 
	
								<li>stato ordine: <strong>inserito</strong></li> 
	
								<li>data operazione</li> 
	
							</ul> 
						</td>
	
						<td>
							<ul> 
	
								<li>stato ordine: <strong>inviato</strong></li> 
	
								<li>data valuta</li> 
	
								<li>calcolo valore quota/NAV</li> 
	
							</ul> 
						</td>
	
						<td></td> 
	
						<td></td> 
	
						<td></td> 
	
						<td>
							<ul> 
	
								<li>aggiornamento portafoglio</li> 
	
								<li>stato ordine: <strong>eseguito</strong></li> 
	
							</ul> 
						</td>
	
					</tr> 
				</tbody></table> 
			</td> 
		</tr> 
	
</tbody></table>

</div>
</div>
<div class="foot"/>
	
</div>



<div id="modifica" style="display: none;" class="fooform" >
	<div class="fooformright">
		<div><a href="javascript:modifica()" class="btnformright" title="modifica"><img src="/img/ret/btn_left_ar.gif" alt="" /><span>modifica</span><img src="/img/ret/btn_right_ar.gif" alt="" /></a></div>
	<br class="clear" />
	</div>	
	<br class="clear" />
</div>

<div style="display: none;" id="layeralert3" class="layeralert3">
<div onmouseover="this.style.cursor='move'; $('layeralert3').dragHandle = new Draggable('layeralert3',{handle: 'handle'}, { scroll: window });" class="head handle" style="cursor: move;"><img onclick="this.parentNode.parentNode.style.display='none';unobscurateAll();closeAlert('layeralert3');" alt="chiudi" src="/img/ret/layeralert_x.gif"/></div>
<div class="body">
<div id="tempi"></div>
</div>
<div class="foot"/></div>
</div>

<div id="erroreFormAnteprima" style="display: none;">
	<div class="boxtop"><img alt="" src="/img/ret/box_msgtop.jpg" border="0"   /></div>
	<div class="boxtxt"><p class="box_mess"><img class="dx" alt="" src="/img/ret/img_or_adeguatezza.gif" border="0"   /><img alt="" src="/img/ret/box_attenzione.jpg" border="0"   /><br />
		
			<ul class="alert">				
					<li id="messaggioAnteprima" style="display: none;"></li>
					<li id="messaggioAnteprimaIndirizzo" style="display: none;"></li>
					<li id="messaggioAnteprimaProvincia" style="display: none;"></li>
					<li id="messaggioAnteprimaComune" style="display: none;"></li>
					<li id="messaggioAnteprimaCAP" style="display: none;"></li>
					<li id="messaggioCheckDocFatca" style="display: none;"></li>
					<li id="messaggioResidenzaFatca" style="display: none;"></li>
					<li id="messaggioTinFatca" style="display: none;"></li>
					<li id="messaggioCheckDatiFatca" style="display: none;"></li>			
			</ul>
		<br class="clear">
		
	</div>
	<br class="clear">
	<div class="boxbottom"><img alt="" src="/img/ret/box_msgbottom.jpg" border="0"   /></div>
</div>
<div id="erroreFatca" style="display: none;"></div>
<div id="formMessaggi"></div>	

</form>
</div>
				
		</div>
		<!-- FINE WRAPPER DELL'INTERO CONTENUTO DELLA PAGINA -->
	</div>
</div>


		
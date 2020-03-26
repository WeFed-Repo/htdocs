<script>


$(document).ready(function(e) {
	var resizeTimer;
	var servVal = false;
	$(window).resize(function () {
		if ( servVal != isMobile() && location.href.search('login') ==-1) {
			clearTimeout(resizeTimer);
			resizeTimer = setTimeout(function() {
				
				$.post(getPathContext()+'/common/refreshBreakpoint.do', { device: getBreakpoint()}, function(response, status) { 
					servVal = isMobile();
				});
			}, 500);
		}
	});
});
</script>

<script type="text/javascript">
function getPathImages() { return "/HT/IMAGES/";}
function getPathImagesFe() { return "/HT/fe/img/";}
function getPathContext() {	return "/WEBHT";}
function getKBanca() {	return "1";}
function getLineaTol() {	return "";}
</script>


	<!--           HEAD           -->






<script language="JavaScript" type="text/javascript">
<!--
	// variabili globali
	var arCat = new Array();
	var a = 0;
	
	
		arCat[a] = 'tasse';
		a=a+1;
	

	
	
 	var arCausali=new Array(arCat.length);
	var stab = "\t";
  	for (var a=0;a<=arCat.length;a++) {
		arCausali[a]=new Array(2);
		arCausali[a][0]=arCat[a];
	}

	
	 	for (a = 0; a < arCat.length; a++) {
			if (arCausali[a][0] =='tasse') {
				arCausali[a][1]=arCausali[a][1] +stab + 'ACC.CREDITO ESTERO';	
			}
		}
	
	 	for (a = 0; a < arCat.length; a++) {
			if (arCausali[a][0] =='tasse') {
				arCausali[a][1]=arCausali[a][1] +stab + 'ACC.DIS.INC.CONSOREL';	
			}
		}
	

	

	// check della categoria 
	function checkCategoria(nome) {
		bInesistente = true;
		if (arCat.length != 0) {
			for (var a=0;a < arCat.length; a++) {
				var nomeTemp = arCat[a];
			 	nomeTemp = nomeTemp.toLowerCase();
			 	nome = nome.toLowerCase();
				if(nomeTemp == nome) {
					bInesistente = false;
					doAlert('Categoria già presente');
					break;
				}
			}
		}
 		return bInesistente;
	}
	
	
	// submit dell'inserimento
	function aggiungiCategoria() {
		var formCreazioneCategorie = document.getElementById("formCreazioneCategorie");	
		var categoria = formCreazioneCategorie.descrCategoria.value;
		var tipo = formCreazioneCategorie.tipoCategoria.options[formCreazioneCategorie.tipoCategoria.selectedIndex].value;
 		if (checkCategoria(categoria) == true) {
			if (categoria == "") {
				doAlert('Inserire il nome della categoria');
				return false;
			}
		
		   	if (tipo == "") {
				doAlert('Inserire il tipo categoria');
				return false;
			}

			if (categoria.length > 30) {
				doAlert('La categoria inserita è di lunghezza eccessiva (massimo 30 caratteri)');
				return false;
			}
		
			if ((categoria.indexOf("&minus;&minus;",0) > 0) || (categoria.substring(0,2) == "&minus;&minus;")) {
				doAlert('Il nome della categoria presenta dei caratteri non validi');
				return false;
			}

			formCreazioneCategorie.submit();
		}
	}
	
	// alert eliminazione e submit
	function eliminaCategoria(nome, tipo, index) {	
		var formCancellazioneCategorie = document.getElementById("formCancellazioneCategorie");	
	    formCancellazioneCategorie.categoriaSel.value = index;		
		formCancellazioneCategorie.tipoCategoriaSel.value = tipo;

		var sMessaggio='';
		var PresenzaCausali=false;
	
		for (var a = 0; a < arCat.length; a++) {
			if (arCausali[a][0] == nome) { 
				var parola= new String(arCausali[a][1]);
				if (parola.length > 9) {
					parola = parola.split("\t");
				 	var b = 1;
				    var sRisult = '';
					PresenzaCausali = true;
					for(var a = 1; a < parola.length; a++) {
						if(b > 10)
							break;
						sRisult = sRisult+ "\n" + parola[b];
						b = b + 1;
					}
				}
				break;
			}
		}
	   	if (PresenzaCausali == true) {
			sMessaggio='Attenzione!<br/>La categoria è associata a queste causali:' + sRisult + '<br/>'; 
		   	if (b > 10)
		    	sMessaggio = sMessaggio + '<br/>per maggiori dettagli consultare Gestione Categorie.  <br/>Le eventuali associazioni verranno perse. <br/>Confermi l\'eliminazione?';
		    else
		    	sMessaggio = sMessaggio + 'Le eventuali associazioni verranno perse.<br/>Confermi l\'eliminazione?';
		} 
		if (sMessaggio == '') {
			formCancellazioneCategorie.submit();
		} else {
			doConfirm(sMessaggio, function() {
									formCancellazioneCategorie.submit();
								  });
		}
	}
	
		function doAlert(message) {
		var messagefmt = "<div class='padding20'>" + message + "</div>" 
		$('<div />').html(messagefmt).dialog({
		    modal:true,
		    title:'',
		    buttons: {
		        'OK':function(){
		            $(this).dialog('close');
		        }
		    },
		    close:function(){ $(this).dialog('destroy').remove(); }
		});
	}
	
	function doConfirm(message, functionSubmit) {
		var messagefmt = "<div class='padding20'>" + message + "</div>" 
		$('<div />').html(messagefmt).dialog({
		    modal:true,
		    title:'',
		    buttons: [
		    	 {
		        "text": 'No',
		         "class": 'notAction',
		         click: function() {                     
                  $(this).dialog("close"); 
               	 }
		        },
		        {
		        "text": 'Si',
		         click: function() {                     
                   functionSubmit.call();
		            $(this).dialog('close');
               		}
               	}
				],
		    
		    close:function(){ $(this).dialog('destroy').remove(); }
		});
	}
	
-->
</script>

<div class="visible-print-block"> 
	<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage" />
	<div class="pull-right">
		  
		26/05/2017	
	</div>
</div>
					
					
					



<!-- This Page Is Valid XHTML 1.0 Transitional -->
<div class="riquadro clearfix">
		
		 
		



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag creazioneCategorie">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
			
				
				
 					<span>Creazione categorie</span>
 					
				
			
			
		
	</h1>
	
		
			
		
		
		





<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: creazione categorie&pagCont=testo02')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line" /></a>






<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header clearfix">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
			
		</div>
    </div>
  </div>
</div>



		
	
	


	<form id="formCreazioneCategorie" method="post" action="/WEBHT/cc/insertCategorie.do">
	<div class="divForm">	
		<div class="section clearfix">
			<h3 class="titleSection">
				
				








		
			Nuova categoria
		
		
		
		

 
			</h3>
			<div class="form-group clearfix">
				<div class="form-field-input col-sm-6 col-xs-12">
					<label class="control-label">
						Nome categoria
					</label>
					<div class="form-field">
						<input type="text" name="descrCategoria" maxlength="30" size="30" value="" onblur="this.value=trimSpaziECaratteri(this.value);" id="descrCategoria" class="formCampo form-control" />
					</div>
				</div>
				<div class="form-field-input col-sm-6 col-xs-12">
					<label class="control-label">
						Tipo categoria 
					</label>
					<div class="form-field">
						<select name="tipoCategoria" id="tipoCategoria" class="formCampo form-control"><option value="" selected="selected">Seleziona...</option>
							<option value="E">Entrate</option>
							<option value="U">Uscite</option></select>
					</div>
				</div>
			</div>
		</div>
	</div>
	</form>

<div class="pull-right margin-bottom20 margin-top10">
	<input type="button" name="aggiungi" value="Aggiungi"  onclick="doAlert('Inserire il nome della categoria')" class="btn btn-primary" />
</div>


	<form id="formCancellazioneCategorie" method="post" action="/WEBHT/cc/deleteCategorie.do">
	
		<input type="hidden" name="categoriaSel" value="" />
		<input type="hidden" name="tipoCategoriaSel" value="" />
		
		
		
		<div class="selezioneCC">
			<div class="table-responsive tabSelezioneCarte" style="display: block;">
			<div class="dataTables_wrapper no-footer">
				<table class="table table-striped dataTable no-footer" role="grid">
					<thead>
						<tr>
							<th>&nbsp;</th>
							<th>Nome categoria </th>
							<th>Tipo categoria </th>
						</tr>
					</thead>
					<tbody>
						
							
								
								
							
							
							
						  	
						<tr>
							<td class="pari">
								<img src="/HT/fe/img/i_cancella.gif" class="imgsrv imgBtn" title="cancella categoria" onclick="eliminaCategoria('tasse','E','0');" />
							</td>
							<td class="pari">
								Prova
							</td>
							<td class="pari">
								Entrata
							</td>
						</tr>
						
						
						
						
					</tbody>
				</table>
			</div>
		</div>
		</div>
	</form>



</div>
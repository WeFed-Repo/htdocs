<script>
// javascript per il controllo di tutti gli accordion
function closeMyMenuSelector(element)
{
	$(element).closest('.mymenuselector').addClass('closed').removeClass('opened');
	$(element).closest('.mymenuselector').find('.selectorbody').hide();
}
function openMyMenuSelector(element)
{
	$(element).closest('.mymenuselector').removeClass('closed').addClass('opened');
	$(element).closest('.mymenuselector').find('.selectorbody').show();
}
function switchMyMenuSelector(element)
{
	if (!$(element).closest('.mymenuselector').find('.selectorbody').is(':visible'))
	{
		openMyMenuSelector(element)
	}
	else
	{closeMyMenuSelector(element)}
}

function closeAllMyMenuVoices (element)
{
	var divarray = $(element).closest('.mymenuselectorWrapper').find('div.mymenuselector');
	for (i=0;i<=divarray.length-1;i++)
	{
		closeMyMenuSelector(divarray[i]);
	}
}
function openAllMyMenuVoices(element)
{
	var divarray = $(element).closest('.mymenuselectorWrapper').find('div.mymenuselector');
	for (i=0;i<=divarray.length-1;i++)
	{
		openMyMenuSelector(divarray[i]);
	}
}

function openSelectedMyMenuVoices (element)
{
	closeAllMyMenuVoices (element);
	var divinput = $(element).closest('.mymenuselectorWrapper').find('.mymenuselector input');
	for (i=0;i<=divinput.length-1;i++)
	{
		if (divinput[i].checked == true)
		{
			openMyMenuSelector(divinput[i]);
		}
	}
}
</script>

<!--funzione per la selezione e deselezione dei check della tabella e per apertura accordion tramite check-->
<script>
$(function(){
var checkInTitle = $('.profiliUtenti   .checkTitle'),
	checkInWrapper = $('.profiliUtenti .checkInWrapper').find('input[type=checkbox]');
	checkInTitle.bind('click', function(){
	if($(this).is(':checked'))
		{
		 $(this).closest('.mymenuselector').find('input[type="checkbox"]').attr('checked','checked');
		 $(this).closest('.selectortitle').next('.selectorbody').show();
		 $(this).closest('.mymenuselector').addClass('opened').removeClass('closed');
		}
	  else {
		 $(this).closest('.mymenuselector').find('input[type="checkbox"]').attr('checked',false);
	  }
	})
	checkInWrapper.bind('click', function(){
	if($(this).is(':checked'))
		{
		 $(this).closest('.checksection').next('.checksection.sectionRight').eq(0).find('input').attr('checked','checked');
		}
	  else {
		  $(this).closest('.checksection').next('.checksection.sectionRight').eq(0).find('input').attr('checked',false);
	  }
	})
	checkInWrapper.bind('click', function(){
	if($(this).is(':checked'))
		{
		 $(this).closest('.row-fluid').find('div[class*="span"]').find('input').attr('checked','checked');
		}
	  else {
		  $(this).closest('.row-fluid').find('div[class*="span"]').find('input').attr('checked',false);
	  }
	})
})
</script>
<script>
<!--funzione per il change della select -->
$(function(){
	isLib = true;
	checkVociProfilo = function () {
	var url = '/profiliUtenti.do',
		pathLibrerie = '/librerie/include/commons/ajax',
		AjaxUrl = (!isLib)? pathSviluppo + url : pathLibrerie + url.replace(/\.do(\?)?/i, '.php$1'),
		parameters = {};
	   jqAJAXCall('post', 'json', AjaxUrl, selectVoci, parameters);
	};
	var selectVoci = function(data) {
	
	if(data !== null)
		{
		  for(i=0; i<data.listaDaAccendere.length;i++)
		  {
		    $('#'+data.listaDaAccendere[i]).attr('checked','checked');
			$('#'+data.listaDaAccendere[0]).closest('.mymenuselector').removeClass('closed').addClass('opened');
			$('#'+data.listaDaAccendere[0]).closest('.mymenuselector').find('.selectorbody').show();
		  }
		}
	}
	$('#profiloUtenteSelect').bind('change', function() {
	   var optionSelected = $(this).val();
	   switch(optionSelected) {
	    case 'nuovo':
		$('.mymenuselector').find('input[type=\'checkbox\']').attr('checked',false); //tutti non checked
		break;
		case 'amministrazione':
		 $('#tesoreriaAccordion .mymenuselector').find('input[type=\'checkbox\']').attr('checked',false); //tesoreria tutti non selezionati
		 $('#sportelloAccordion .mymenuselector').find('input[type=\'checkbox\']').attr('checked','checked'); //tutti checked
		break;
		case 'consultazione':
		  $('.mymenuselector').find('input[type=\'checkbox\']').attr('checked',false); //eventuale reset
		  $('#situazioneAcc,#pagamentiAcc,#incassiAcc').find('input[type=\'checkbox\']').attr('checked','checked'); 
		break;
		case 'stipendi':
			checkVociProfilo();
			//$('.mymenuselector').find('input[type=\'checkbox\']').attr('checked',false); //eventuale reset
			//$('#pagamentiAcc').find('input[type=\'checkbox\']').attr('checked','checked'); 
		break;
		case 'pagamenti':
		 $('.mymenuselector').find('input[type=\'checkbox\']').attr('checked',false); //eventuale reset
		 $('#pagamentiAcc').find('input[type=\'checkbox\']').attr('checked','checked'); 
		break;
		case 'incassi':
		  $('.mymenuselector').find('input[type=\'checkbox\']').attr('checked',false); //eventuale reset
		  $('#incassiAcc').find('input[type=\'checkbox\']').attr('checked','checked'); 
		break;
		case 'tesoreria':
		  $('#sportelloAccordion .mymenuselector').find('input[type=\'checkbox\']').attr('checked',false); //eventuale reset
		  $('#tesoreriaAccordion .mymenuselector').find('input[type=\'checkbox\']').attr('checked','checked'); //tesoreria tutti selezioanti
		 break;
	   }
	})
})
</script>

<h1>CREAZIONE PROFILO - DATI</h1>
<br>
<div class="offStep step">
	<span>1</span> Inserisci i dati
</div>   
<div class="onStep stop step">
	<span>2</span> Abilita le funzioni
</div>  
<div class="step">
	<span>3</span> Abilita i c/c
</div>
<div class="step">
	<span>4</span> Abilita i codici SIA
</div>
<div class="lastStep step">
	<span>5</span>Abilita i rapporti
</div>
<br class="clear" />
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ultricies mi nec nunc cursus et hendrerit urna mollis. Sed commodo gravida erat, non elementum mi eleifend ut. Fusce vehicula magna eget felis iaculis egestas. Nam dapibus sollicitudin volutpat.</p>
<br class="clear">
<div class="formCenteredheader">
<div class="tithelp">
	<div class="helpleft paddTopMedium">Lorem ipsum</div>
	<span class="expleft"><a href="javascript:;" onclick="openPopGuida('/connect.php?page=tpl_popup_priv_book_bus_guida.php');" title=""><br>Guida allo step 2</a></span>
</div>
<br class="clear">
</div>
<div class="borderFormRounded searchFilter">
	<div class="formGeneric">
		<form>
			<div class="row-fluid">
				<div class="span4">
					<label class="nomefield">Scegli tra i profili consigliati</label>
					<select id="profiloUtenteSelect">
						<option value="amministrazione">Amministrazione</option>
						<option value="consultazione">Consultazione</option>
						<option value="stipendi">Gestione stipendi</option>
						<option value="pagamenti">Pagamenti</option>
						<option value="incassi">Incassi</option>
						<option value="tesoreria">Tesoreria</option>
						<option value="nuovo" selected>Nuovo profilo</option>
					</select>
				</div>
				<div class="span8">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ultricies mi nec nunc cursus et hendrerit urna mollis. Sed commodo gravida erat, non elementum mi eleifend ut</p>
				</div>
			</div>
		</form>
	</div>
</div>
<br class="clear"/>
<br>
<div id="sportelloAccordion" class="mymenuselectorWrapper">
	<h2 class="carte cartegr">SPORTELLO</h2><br>
	<div class="mymenutopper">
	<div class="console">
		<a href="javascript:;" onclick="openAllMyMenuVoices(this)"><img src="/img/ret/ico1bt_mymenutopper_open.gif" title="Apri tutti"></a>
		<a href="javascript:;" onclick="openSelectedMyMenuVoices(this)"><img src="/img/ret/ico1bt_mymenutopper_openselected.gif" title="Apri selezionati"></a>
		<a href="javascript:;" onclick="closeAllMyMenuVoices(this)"><img src="/img/ret/ico1bt_mymenutopper_close.gif" title="Chiudi tutti"></a>
	</div>
	</div>
	<br class="clear">
	<div class="profiliUtenti">
	<div class="mymenuselector" id="corporateAcc">
	<div class="selectortop"></div>
		<div class="selectortitle selectorcheckWrapper">
			<span class="selectorcheck">
			<input type="checkbox" class="checkTitle">
			<a href="javascript:;" class="sezioni" title="Corporate home">Corporate home</a></span>
			<a href="javascript:;"  onclick="switchMyMenuSelector(this)" class="selectorswitch" style="background-image: url(/img/ret/ico1bt_checksectiontitle_open.gif);"></a>
		</div>
		<div class="selectorbody" style="display:none">
		<div class="checksection checksectionAll">
			<div class="checksectiontitle"><span>Item 1</span></div>
		</div>
		<div class="checksection noPaddtop">
			<label class="checkInWrapper"><input type="checkbox"><span>Voce 2&quot; livello</span></label>
		</div>
		<div class="checksection noPaddtop sectionRight">
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
		</div>
		<div class="checksection noPaddtop">
			<label class="checkInWrapper"><input type="checkbox"><span>Voce 2&quot; livello</span></label>
		</div>
		<div class="checksection noPaddtop sectionRight">
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
		</div>
		
		<div class="checksection checksectionAll">
			<div class="checksectiontitle"><span>Item 2</span></div>
		</div>
		<div class="checksection noPaddtop">
			<label class="checkInWrapper"><input type="checkbox"><span>Voce 2&quot; livello</span></label>
		</div>
		<div class="checksection noPaddtop sectionRight">
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
		</div>
		<div class="checksection noPaddtop">
			<label class="checkInWrapper"><input type="checkbox"><span>Voce 2&quot; livello</span></label>
		</div>
		<div class="checksection noPaddtop sectionRight">
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
			
		</div>
	</div>
		<div class="selectorbottom"></div>
	</div>
</div>
	<div class="profiliUtenti">
	<div class="mymenuselector" id="situazioneAcc">
		<div class="selectortop"></div>
		<div class="selectortitle selectorcheckWrapper">
			<span class="selectorcheck">
			<input type="checkbox" class="checkTitle">
			<a href="javascript:;" class="sezioni" title="Situazione Azienda">Situazione Azienda</a></span>
			<a href="javascript:;"  onclick="switchMyMenuSelector(this)" class="selectorswitch" style="background-image: url(http://libreriewebank.webank.local/img/ret/ico1bt_checksectiontitle_open.gif);"></a>
		</div>
		<div class="selectorbody" style="display:none">
		<div class="checksection checksectionAll">
			<div class="checksectiontitle"><span>Item 1</span></div>
		</div>
		<div class="row-fluid">
			<div class="checksection noPaddtop">
				<label class="checkInWrapper"><input type="checkbox"><span>Voce 2&quot; livello</span></label>
			</div>
			<!--<div class="checksection noPaddtop sectionRight">
				<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
				<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
				<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
				<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
			</div>-->
		</div>
		<div class="row-fluid">
			<div class="checksection noPaddtop">
				<label class="checkInWrapper"><input type="checkbox"><span>Voce 2&quot; livello</span></label>
			</div>
			<div class="checksection noPaddtop sectionRight">
				<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
				<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
				<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
				<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
			</div>
		</div>
		
		<div class="checksection checksectionAll">
			<div class="checksectiontitle"><span>Item 2</span></div>
		</div>
		<div class="checksection noPaddtop">
			<label class="checkInWrapper"><input type="checkbox"><span>Voce 2&quot; livello</span></label>
		</div>
		<div class="checksection noPaddtop sectionRight">
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
		</div>
		<div class="checksection noPaddtop">
			<label><input type="checkbox"><span>Voce 2&quot; livello</span></label>
		</div>
		<div class="checksection noPaddtop sectionRight">
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
			
		</div>
	</div>
		<div class="selectorbottom"></div>
	</div>
</div>

	<div class="profiliUtenti">	
	<div class="mymenuselector" id="pagamentiAcc">
	<div class="selectortop"></div>
		<div class="selectortitle selectorcheckWrapper">
			<span class="selectorcheck">
			<input type="checkbox" class="checkTitle">
			<a href="javascript:;" class="sezioni" title="Pagamenti">Pagamenti</a></span>
			<a href="javascript:;"  onclick="switchMyMenuSelector(this)" class="selectorswitch" style="background-image: url(http://libreriewebank.webank.local/img/ret/ico1bt_checksectiontitle_open.gif);"></a>
		</div>
		<div class="selectorbody" style="display:none">
			<div class="checksection checksectionAll">
				<div class="checksectiontitle"><span>Item 1</span></div>
			</div>
			<div class="checksection noPaddtop">
				<label class="checkInWrapper"><input type="checkbox" id="paperino"><span>Voce 2&quot; livello</span></label>
			</div>
			<div class="checksection noPaddtop sectionRight">
				<label><input type="checkbox" id="pippo"><span>Voce 3&quot; livello</span></label>
				<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
				<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
				<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
			</div>
			<div class="checksection noPaddtop">
				<label><input type="checkbox"><span>Voce 2&quot; livello</span></label>
			</div>
			<div class="checksection noPaddtop sectionRight">
				<label><input type="checkbox" id="pluto"><span>Voce 3&quot; livello</span></label>
				<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
				<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
				<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
			</div>
			
		</div>
		<div class="selectorbottom"></div>
	</div>
</div>
	<div class="profiliUtenti">
	<div class="mymenuselector" id="incassiAcc">
	<div class="selectortop"></div>
		<div class="selectortitle selectorcheckWrapper">
			<span class="selectorcheck">
			<input type="checkbox" class="checkTitle">
			<a href="javascript:;" class="sezioni" title="Incassi">Incassi</a></span>
			<a href="javascript:;"  onclick="switchMyMenuSelector(this)" class="selectorswitch" style="background-image: url(http://libreriewebank.webank.local/img/ret/ico1bt_checksectiontitle_open.gif);"></a>
		</div>
		<div class="selectorbody" style="display:none">
		<div class="checksection checksectionAll">
			<div class="checksectiontitle"><span>Item 1</span></div>
		</div>
		<div class="checksection noPaddtop">
			<label class="checkInWrapper"><input type="checkbox"><span>Voce 2&quot; livello</span></label>
		</div>
		<div class="checksection noPaddtop sectionRight">
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
		</div>
		<div class="checksection noPaddtop">
			<label><input type="checkbox"><span>Voce 2&quot; livello</span></label>
		</div>
		<div class="checksection noPaddtop sectionRight">
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
		</div>
		
	</div>
	<div class="selectorbottom"></div>
	</div>
	</div>
	<div class="profiliUtenti">
	<div class="mymenuselector" id="serviziAcc">
	<div class="selectortop"></div>
	<div class="selectortitle selectorcheckWrapper">
			<span class="selectorcheck">
			<input type="checkbox" class="checkTitle">
			<a href="javascript:;" class="sezioni" title="Servizi">Servizi</a></span>
			<a href="javascript:;"  onclick="switchMyMenuSelector(this)" class="selectorswitch" style="background-image: url(http://libreriewebank.webank.local/img/ret/ico1bt_checksectiontitle_open.gif);"></a>
		</div>
		<div class="selectorbody" style="display:none">
		<div class="checksection checksectionAll">
			<div class="checksectiontitle"><span>Item 1</span></div>
		</div>
		<div class="checksection noPaddtop">
			<label class="checkInWrapper"><input type="checkbox"><span>Voce 2&quot; livello</span></label>
		</div>
		<div class="checksection noPaddtop sectionRight">
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
		</div>
		<div class="checksection noPaddtop">
			<label><input type="checkbox"><span>Voce 2&quot; livello</span></label>
		</div>
		<div class="checksection noPaddtop sectionRight">
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
			<label><input type="checkbox"><span>Voce 3&quot; livello</span></label>
		</div>
		
	</div>
	<div class="selectorbottom"></div>
	</div>
	</div>
	
</div>
<br class="clear"><br><br><br>
<!--ACCORDION TESORERIA -->

<div id="tesoreriaAccordion" class="mymenuselectorWrapper">
	<h2 class="carte cartegr">TESORERIA</h2><br>
	<div class="mymenutopper">
		<div class="console">
			<a href="javascript:;" onclick="openAllMyMenuVoices(this)"><img src="/img/ret/ico1bt_mymenutopper_open.gif" title="Apri tutti"></a>
			<a href="javascript:;" onclick="openSelectedMyMenuVoices(this)"><img src="/img/ret/ico1bt_mymenutopper_openselected.gif" title="Apri selezionati"></a>
			<a href="javascript:;" onclick="closeAllMyMenuVoices(this)"><img src="/img/ret/ico1bt_mymenutopper_close.gif" title="Chiudi tutti"></a>
		</div>
	</div>
	
		<br class="clear">
	<div class="profiliUtenti">
	<div class="mymenuselector" id="">
		<div class="selectortop"></div>
		<div class="selectortitle selectorcheckWrapper">
			<span class="selectorcheck">
			<input type="checkbox" class="checkTitle">
			<a href="javascript:;" class="sezioni" title="My Home">My Home</a></span>
			<a href="javascript:;"  onclick="switchMyMenuSelector(this)" class="selectorswitch" style="background-image: url(http://libreriewebank.webank.local/img/ret/ico1bt_checksectiontitle_open.gif);"></a>
		</div>
		<div class="selectorbody" style="display:none">
			<div class="checksection checksectionAll">
				<div class="checksectiontitle"><span>Situazione conti</span></div>
			</div>
			<div class="checksection noPaddtop">
				<label class="checkInWrapper"><input type="checkbox"><span>saldo</span></label>
				<label class="checkInWrapper"><input type="checkbox"><span>movimenti</span></label>
				<label class="checkInWrapper"><input type="checkbox"><span>lorem ipsum</span></label>
			</div>
			<div class="checksection checksectionAll">
				<div class="checksectiontitle"><span>Lorem ipsum</span></div>
			</div>
			<div class="checksection noPaddtop">
				<label class="checkInWrapper"><input type="checkbox"><span>saldo</span></label>
				<label class="checkInWrapper"><input type="checkbox"><span>movimenti</span></label>
				<label class="checkInWrapper"><input type="checkbox"><span>lorem ipsum</span></label>
			</div>
		</div>
		<div class="selectorbottom"></div>
	</div>
	</div>
	<div class="profiliUtenti">
	<div class="mymenuselector" id="">
		<div class="selectortop"></div>
		<div class="selectortitle selectorcheckWrapper">
			<span class="selectorcheck">
			<input type="checkbox" class="checkTitle">
			<a href="javascript:;" class="sezioni" title="My Home">Gestione Enti</a></span>
			<a href="javascript:;"  onclick="switchMyMenuSelector(this)" class="selectorswitch" style="background-image: url(http://libreriewebank.webank.local/img/ret/ico1bt_checksectiontitle_open.gif);"></a>
		</div>
		<div class="selectorbody" style="display:none">
			<div class="checksection checksectionAll">
				<div class="checksectiontitle"><span>Situazione conti</span></div>
			</div>
			<div class="checksection noPaddtop">
				<label class="checkInWrapper"><input type="checkbox"><span>lorem</span></label>
				<label class="checkInWrapper"><input type="checkbox"><span>ipsum</span></label>
				<label class="checkInWrapper"><input type="checkbox"><span>lorem ipsum</span></label>
			</div>
			<div class="checksection checksectionAll">
				<div class="checksectiontitle"><span>Lorem ipsum</span></div>
			</div>
			<div class="checksection noPaddtop">
				<label class="checkInWrapper"><input type="checkbox"><span>lorem</span></label>
				<label class="checkInWrapper"><input type="checkbox"><span>ipsum</span></label>
				<label class="checkInWrapper"><input type="checkbox"><span>lorem ipsum</span></label>
			</div>
		</div>
		<div class="selectorbottom"></div>
	</div>
	</div>
	<div class="profiliUtenti">
	<div class="mymenuselector" id="">
		<div class="selectortop"></div>
		<div class="selectortitle selectorcheckWrapper">
			<span class="selectorcheck">
			<input type="checkbox" class="checkTitle">
			<a href="javascript:;" class="sezioni" title="Firma digitale">Firma digitale</a></span>
			<a href="javascript:;"  onclick="switchMyMenuSelector(this)" class="selectorswitch" style="background-image: url(http://libreriewebank.webank.local/img/ret/ico1bt_checksectiontitle_open.gif);"></a>
		</div>
		<div class="selectorbody" style="display:none">
			<div class="checksection checksectionAll">
				<div class="checksectiontitle"><span>Situazione conti</span></div>
			</div>
			<div class="checksection noPaddtop">
				<label class="checkInWrapper"><input type="checkbox"><span>lorem</span></label>
				<label class="checkInWrapper"><input type="checkbox"><span>ipsum</span></label>
				<label class="checkInWrapper"><input type="checkbox"><span>lorem ipsum</span></label>
			</div>
			<div class="checksection checksectionAll">
				<div class="checksectiontitle"><span>Lorem ipsum</span></div>
			</div>
			<div class="checksection noPaddtop">
				<label class="checkInWrapper"><input type="checkbox"><span>lorem</span></label>
				<label class="checkInWrapper"><input type="checkbox"><span>ipsum</span></label>
				<label class="checkInWrapper"><input type="checkbox"><span>lorem ipsum</span></label>
			</div>
		</div>
		<div class="selectorbottom"></div>
	</div>
	</div>
	<div class="profiliUtenti">
	<div class="mymenuselector" id="">
		<div class="selectortop"></div>
		<div class="selectortitle selectorcheckWrapper">
			<span class="selectorcheck">
			<input type="checkbox" class="checkTitle">
			<a href="javascript:;" class="sezioni" title="ICI">ICI</a></span>
			<a href="javascript:;"  onclick="switchMyMenuSelector(this)" class="selectorswitch" style="background-image: url(http://libreriewebank.webank.local/img/ret/ico1bt_checksectiontitle_open.gif);"></a>
		</div>
		<div class="selectorbody" style="display:none">
			<div class="checksection checksectionAll">
				<div class="checksectiontitle"><span>Situazione conti</span></div>
			</div>
			<div class="checksection noPaddtop">
				<label class="checkInWrapper"><input type="checkbox"><span>lorem</span></label>
				<label class="checkInWrapper"><input type="checkbox"><span>ipsum</span></label>
				<label class="checkInWrapper"><input type="checkbox"><span>lorem ipsum</span></label>
			</div>
			<div class="checksection checksectionAll">
				<div class="checksectiontitle"><span>Lorem ipsum</span></div>
			</div>
			<div class="checksection noPaddtop">
				<label class="checkInWrapper"><input type="checkbox"><span>lorem</span></label>
				<label class="checkInWrapper"><input type="checkbox"><span>ipsum</span></label>
				<label class="checkInWrapper"><input type="checkbox"><span>lorem ipsum</span></label>
			</div>
		</div>
		<div class="selectorbottom"></div>
	</div>
	</div>
	<div class="profiliUtenti">
	<div class="mymenuselector" id="">
		<div class="selectortop"></div>
		<div class="selectortitle selectorcheckWrapper">
			<span class="selectorcheck">
			<input type="checkbox" class="checkTitle">
			<a href="javascript:;" class="sezioni" title="Incassi">Incassi</a></span>
			<a href="javascript:;"  onclick="switchMyMenuSelector(this)" class="selectorswitch" style="background-image: url(http://libreriewebank.webank.local/img/ret/ico1bt_checksectiontitle_open.gif);"></a>
		</div>
		<div class="selectorbody" style="display:none">
			<div class="checksection checksectionAll">
				<div class="checksectiontitle"><span>Situazione conti</span></div>
			</div>
			<div class="checksection noPaddtop">
				<label class="checkInWrapper"><input type="checkbox"><span>lorem</span></label>
				<label class="checkInWrapper"><input type="checkbox"><span>ipsum</span></label>
				<label class="checkInWrapper"><input type="checkbox"><span>lorem ipsum</span></label>
			</div>
			<div class="checksection checksectionAll">
				<div class="checksectiontitle"><span>Lorem ipsum</span></div>
			</div>
			<div class="checksection noPaddtop">
				<label class="checkInWrapper"><input type="checkbox"><span>lorem</span></label>
				<label class="checkInWrapper"><input type="checkbox"><span>ipsum</span></label>
				<label class="checkInWrapper"><input type="checkbox"><span>lorem ipsum</span></label>
			</div>
		</div>
		<div class="selectorbottom"></div>
	</div>
	</div>
	
</div>
<br class="clear"><br>
	<div>
		<div class="aButtonconsLeft">
			<span class="btnc"><a class="aButtonClear" href="javascript:;"><span>lorem ipsum</span></a></span>
		</div>
		<div class="aButtonconsRight">
			<span class="btnc"><a class="aButton" href="javascript:;" id=""><span>lorem ipsum</span></a></span>
		</div><br>
	</div>
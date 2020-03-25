
<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX FUNZIONE JAVASCRIPT DI SOLA SIMULAZIONE GRAFICAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX DA NON UTILIZZARE   rifarsi al funzioanmento as isXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<script type="text/javascript">

function push() 
{
if(document.getElementById('mktpush')) {
var btn = document.getElementsByTagName('span');
for(i = 0;i<btn.length; i++) 
		
	{
		
	if(btn[i].className == 'btnnormal') 
		{
		btn[i].className = 'active';
		tabella = document.getElementById('mktpush');
		var celle = tabella.getElementsByTagName('td');
		
		
		for(i=0;i<celle.length;i++) 
			{
			if(celle[i].getAttribute('id')) 
				{
		
				if (navigator.appName == "Microsoft Internet Explorer") { var classe = celle[i].getAttribute('className');}
				else {var classe = celle[i].getAttribute('class');}
		
				classe += ' green1';
				if (navigator.appName == "Microsoft Internet Explorer") {celle[i].setAttribute('className', classe);}
				else {celle[i].setAttribute('class', classe);}
		
				}
			}
		
		}
		
	}
}
}
function pushrev() 
{
if(document.getElementById('mktpush')) {
var btn = document.getElementsByTagName('span');
for(i = 0;i<btn.length; i++) 
	{
	if (btn[i].className == 'active')
		{
		btn[i].className= 'btnnormal';
		tabella = document.getElementById('mktpush');
		var celle = tabella.getElementsByTagName('td');
		
		for(i=0;i<celle.length;i++) 
			{
			if(celle[i].getAttribute('id')) 
				{
		
				if (navigator.appName == "Microsoft Internet Explorer") {var classe = celle[i].getAttribute('className');}
				else {var classe = celle[i].getAttribute('class');}
				classe = classe.replace('green1','');
		
				if (navigator.appName == "Microsoft Internet Explorer") {celle[i].setAttribute('className', classe);}
				else {celle[i].setAttribute('class', classe);}
			}
			}
		
		
		
		}
	
	}	
}
}	

	</script>

<div class="fooform">
	<div class="fooformright">
		<div><a title="lorem ipsum" class="btnformright" href="javascript:push();"><img alt="" src="/img/ret/btn_left_ar.gif"/><span class="btnnormal">Push</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a></div><div><a title="lorem ipsum" class="btnformright" href="javascript:pushrev();"><img alt="" src="/img/ret/btn_left_ar.gif"/><span>Aggiorna</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a></div>
		<div class="lastupdate">Ultimo Aggiornamento: 09/06/2010 ore 11:42:35</div>
		<br class="clear"/>
	</div>	
<br class="clear"/>
</div>
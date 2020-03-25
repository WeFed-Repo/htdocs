<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">
<head>
	<title>www.webank.it</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="Content-Language" content="it" />
	<meta name="script" http-equiv="Content-Script-Type" content="text/javascript" />
	<meta name="script" http-equiv="Content-Style-Type" content="text/css" />
	<!-- INIZIO CODICE-->
	<link href="/wscmn/css/server_int.css" rel="stylesheet" type="text/css" media="all" />
	<link href="/wscmn/css/priv_generic.css" rel="stylesheet" type="text/css" media="all">
	<link href="/wscmn/css/ret/priv_special.css" rel="stylesheet" type="text/css" media="all">
	<link href="/css/ret/priv_color.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" media="print" href="/wscmn/css/priv_print.css" />
	<script src="/wscmn/js/jquery.js"></script>
	<script src="/wscmn/js/ret/priv_utilities.js"></script>
<!-- FINE CODICE-->
</head>
<body>
<?php if($bank=="webank") { ?>

<div id="testa"> 
  <div id="page3">  
    <!-- INIZIO CODICE-->
	<div id="header"> 
		<div id="ctnloghi"><img title=""  alt="" src="/img/lg_webank.png"/></div>		
		<p class="dati"></p>
	</div>
	<br class="clear" />
    <!-- FINE CODICE-->
    <br><br>	   
    <div id="content"> 
      	 
		 <div class="boxLout">
			 <div class="boxLoutTop"></div>
			<div class="boxLoutTxt"><span>Sei uscito correttamente dalla tua area privata</span>
			<p>Per collegarti di nuovo riesegui l'accesso: <a href="#"> www.webank.it</a></p></div>
		 
		 <div class="boxLoutPromo">
			<a href="#"><img alt="Cartimpronta ONE!" src="/img/logout_cartimpronta_2014.jpg"></a>
		 </div>
		
		</div>
    </div>    
</div>
 <!-- INIZIO CODICE-->
    <br class="clear" />
	<div id="footer">
		<p>&#169; WeBank S.p.A. - P.IVA 13191900151 - Gruppo Bipiemme<br />
	</div>
    <!-- FINE CODICE-->
 </div>


<?php
}
?>

<?php if($bank=="bpm") { ?>
<link href="/css/ret/priv_login2.css" media="all" type="text/css" rel="stylesheet" />
<div class="page100">
<div id="testa"> 

    <!-- INIZIO CODICE-->
	<div id="headercontainer">
		<div id="headercontainerFlat">
			<img alt="" class="printlogoNew" src="/img/logo_print_new.gif">
			<img alt="Banca Popolare di Milano" class="logo" src="/img/logo_bpm_flat2.png">
			<img class="flRight" src="/img/header_pubblico_right.gif" alt="">
		</div>
	</div>
	<br class="clear" />
    <!-- FINE CODICE-->
    <br><br>	   
    <div id="content"> 
      	 
		 <div class="boxLout">
			 <div class="boxLoutTop"></div>
			<div class="boxLoutTxt"><span>Sei uscito correttamente dalla tua area privata</span>
			<p>Per collegarti di nuovo riesegui l'accesso: <a href="https://www.bpmbanking.it/pub/xbank/home.do?&amp;cf=0.4881967265441812">www.bpmbanking.it</a></p></div>
		 
		 <div class="boxLoutPromo">
					
			<div id="fllogout">
				<a target="_blank" href="http://www.bpm.it/it-com/privati-e-famiglie/servizi-multicanale/servizi-multicanale/app-bpm-ben-fatto.html"><img alt="BPM Ben Fatto - A breve su tutti i display" src="https://www.bpmbanking.it/img/logout_benfatto_160913.gif"></a>
			</div>
			
			
			<!-- FINE spazio dedicato ai messagi con il content-->
		</div>
		</div>
    </div>    


 </div>
 <!-- INIZIO CODICE-->
    <br class="clear" />
	<div id="footer">
		<p>&#169; Banca Popolare di Milano Società Cooperativa a r.l. - P.IVA 00715120150 - Gruppo Bipiemme<br />
	</div>
    <!-- FINE CODICE-->
</div>
<?php
}
?>

<?php if($bank=="bm") { ?>
<div id="testa">
		<div id="page3">
				
			<div id="header"> 
				<div id="ctnloghi"><img src="/img/ret/logo_bank.gif" alt="" title=""></div>
				<p class="dati"></p>
			</div>
			
			<br class="clear">

			<br><br>
			<div class="boxLout">
				<div id="content">
					<div class="boxLoutTop"></div>
					<div class="boxLoutTxt"><span>Sei uscito correttamente dalla tua area privata</span>
						<p>Per collegarti di nuovo riesegui l'accesso: <a href="#">www.bmbanking.it</a></p>
					</div>
				</div>
				
				<div class="boxLoutPromo">

				</div>

			</div>
		</div>
		<br class="clear">
			<div id="footer"><p>&copy; Banca Popolare di Mantova Spa - Partita IVA: 01906000201 - Gruppo Bipiemme</p><br>
			</div>
	</div>
<?php
}
?>
</body>
</html>
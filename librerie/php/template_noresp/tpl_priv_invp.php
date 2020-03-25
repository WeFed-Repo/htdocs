<?php
/* PAGINA DI COLLEGAMENTO A TEMPLATE 4° LIVELLO */

//autoattribuzione livello 4 al primo presente
if (strLen($ri4)<=0) 
{
	$ri4 = 0;
}

$subpage = "";

switch($ri2)
	{
		case 0:
		switch($ri3)
			{
				case 0: 
				
				switch ($ri4) 
				{
						case "0": 
							$subpage = "tpl_priv_inv_portafoglio_titoli.php";
						break;
						
				}
					
				break;	
				
				case 1: 
				
				switch ($ri4) 
				{
						
						
						case "0": 
							$subpage = "tpl_priv_inv_situazione_ordini.php";
						break;
						
						case "1": 
							$subpage = "tpl_priv_inv_situazione_ordini_coll_obbl.php";
						break;
						
						case "2": 
							$subpage = "tpl_priv_inv_situazione_ordini_PCT.php";
						break;
						
				}
					
				break;	
			 }
		break;
	
	
	
	case 2:
	
	switch ($ri3)
	{
		
		case 0 :
			switch ($ri4)
			{
				case "0": 
					$subpage = "tpl_priv_inv_vantaggi.php";
				break;
				
				case "1": 
					$subpage = "tpl_priv_inv_vantaggi2.php";
				break;
				
				case "2": 
					$subpage = "tpl_priv_inv_soc_gestione.php";
				break;
				
				case "3": 
					$subpage = "tpl_priv_inv_tempi_costi.php";
				break;
				
				case "4": 
					$subpage = "tpl_priv_inv_glossario.php";
				break;
			
				case "5": 
					$subpage = "tpl_priv_pac.php";
				break;
			
			}
		break;
		
		case 1:
			switch ($ri4)
			{
				case "0": 
					$subpage = "tpl_priv_inv_prod_ricerca.php";
				break;
				case "1": 
					$subpage = "tpl_priv_inv_prod_trova_fondi.php";
				break;
				case "2": 
					$subpage = "tpl_priv_inv_prod_classifiche.php";
				break;
				case "3": 
					$subpage = "tpl_priv_inv_prod_confronta.php";
				break;
				case "4": 
					$subpage = "tpl_priv_inv_prod_news.php";
				break;
			}
		break;
		
		case 2:
			switch ($ri4)
			{
				case "0": 
					$subpage = "tpl_priv_inv_acquisto.php";
				break;
				
				case "1": 
					$subpage = "tpl_priv_inv_vendita.php";
				break;
				
				case "2": 
					$subpage = "tpl_priv_inv_switch.php";
				break;
				
				case "3": 
					$subpage = "tpl_priv_inv_ord_versam_aggiuntivi.php";
				break;
				
				case "4": 
					$subpage = "tpl_priv_inv_sit_ordini.php";
				break;
			}
		break;
			case 3:
			switch ($ri4)
			{
				case "0": 
					$subpage = "tpl_priv_ilservizio.php";
				break;
				
			}
		break;
	
	}
			break;
	
	}

if ($subpage == "")	
	{
		print ("TEMPLATE DA SVILUPPARE");
	}
else
	{
		virtual("/librerie/php/".$subpage);
	}
?>
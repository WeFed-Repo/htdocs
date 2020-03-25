<script type="text/javascript" src="/wscmn/js/helium.js"></script>
<script type="text/javascript">
	window.addEventListener('load', function(){
		
		helium.init();

	}, false);
</script>


<?php

	//acquisizione dei filtri
	$customer = "ret";
	$area = "pri";
	$location = "con";
	
	//apertura del file xml
	$xml = new DOMDocument();
  	$xml-> load(dirname(__FILE__) . "/core/object_catalog.xml");
	$blocks = $xml->getElementsByTagName( "block" );
	$noobject = true;

	//scorrimento degli oggetti con filtro
	if ($customer != "" && $area != "" && $location != "")
		{
		$i = 0;
		foreach( $blocks as $block )
		{
			//applicazione dei filtri
				if ( substr_count ($block->getAttribute('customer'),$customer)>0 && substr_count($block->getAttribute('nobank'),$bank) == 0 && substr_count ($block->getAttribute('area'),$area)>0 && substr_count ($block->getAttribute('location'),$location )>0)
				{	
				
					
					$noobject = false;
					//analisi dei nodi figlio
					//se esiste il nodo "contesto", ovvero l'elemento deve essere alienato dalla gerarchia strutturale
					$context = "";
					if ($block->getElementsByTagName("context")->item(0))
					{
						$context = $block->getElementsByTagName("context")->item(0)->nodeValue;
					}
					else
					{
						//Contesti di default
						//XXX Banking
						//Privata retail
						if ($bank != "webank" && $customer == "ret" && $area == "pri" && $location == "con") $context = "<div id=\"content\">[...]</div>";
						if ($bank != "webank" && $customer == "ret" && $area == "pri" && $location == "spa") $context = "<div id=\"contenuti\">[...]</div>";
						if ($bank != "webank" && $customer == "ret" && $area == "pri" && $location == "hom") $context = "<div id=\"contenuti\">[...]</div>";
						if ($bank != "webank" && $customer == "ret" && $area == "pri" && $location == "fro") $context = "<div id=\"content\">[...]</div>";
						//Privata business
						if ($bank != "webank" && $customer == "bus" && $area == "pri" && $location == "con") $context = "<div id=\"content\"><div id=\"main\">[...]</div></div>";
						if ($bank != "webank" && $customer == "bus" && $area == "pri" && $location == "spa") $context = "<div id=\"colsx\">[...]</div>";
						if ($bank != "webank" && $customer == "bus" && $area == "pri" && $location == "hom") $context = "<div id=\"contenuti\">[...]</div>";
						if ($bank != "webank" && $customer == "bus" && $area == "pri" && $location == "fro") $context = "";
						
						//Webank pubblica
						if ($bank == "webank" && $area == "pub" && $location == "hom") $context = "";
						if ($bank == "webank" && $area == "pub" && $location == "fro") $context = "<div id=\"contenuti\">[...]</div>";
						if ($bank == "webank" && $area == "pub" && $location == "spa") $context = "<div id=\"left\">[...]</div>";
						if ($bank == "webank" && $area == "pub" && $location == "con") $context = "<div id=\"maincontent\">[...]</div>";
					
					}
					
					
					include("../librerie/include/commons/".$block->getAttribute('file'));
					print("<br class=\"clear\"><br><br><br>");
        		}
				$i = $i + 1;
 		}
		if ($noobject == true)
		{
			print ("Non sono presenti oggetti in questa categoria.");
		}
	}
	else
	{
		print "Si &egrave; verificato un errore nella ricerca. Tornare alla pagina principale.";
	}
?>

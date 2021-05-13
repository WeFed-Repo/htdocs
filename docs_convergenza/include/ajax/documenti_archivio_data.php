<?php header("content-type: application/json; charset=utf-8"); ?>
{
    "pratiche": [
    <?php 
    
    // Funzione di randomizzazione
    function scramble($par,$minwords=null,$maxwords=null) {
        $scrambled = "";
        $separator = " ";
        // Se $par e' un numero scrive il numero indicato di parole random
        if (is_numeric($par)){
            for($x=0;$x<$par;$x++) {
                $scrarray = explode(" ","Lorem ipsum dolor sit amet consectetur");
                shuffle($scrarray);
                $scrambled = implode(" ", $scrarray);
            }
        }
        else
        {
            if (!is_array($par)){
               // Trasforma il testo in un array diverso a seconda della presenza o meno degli spazi
               if (strrpos($par," ")<=0) {
                    $separator = "";
               }
               $scrarray = explode( $separator, $par);
               shuffle($scrarray);
               if(is_numeric($minwords)) $scrarray = array_slice($scrarray,0, rand($minwords,$maxwords)-1);
               $scrambled = implode($separator,$scrarray);

            }
            else
            {
                $scrarray = $par;
                $scrambled = $scrarray[rand(0,sizeof($scrarray)-1)];
            }
           
        }
        return $scrambled;
    };

    if (rand(0,5)>1) {
    for($x==0;$x<rand(30,199);$x++) {
        print (($x>0)? ",":"") ;
        // Dati fake randomizzati 
        ?>{
        "pratica": "<?php print scramble("Invesco Global Protect Flexible Conto Carta Prepaid Standard Bond Equivalent Lorem Dolor Summa Cum Laude",4,6);?>",
        "codpratica": "a682002b-db58-4325-ba7d-51166868a68f",
        "categoria":"<?php print scramble(["Conti","Carte","Finanziamenti","Investimenti","Assicurazioni"]); ?>",
        "avviatada": "<?php print scramble(["Cliente","Filiale","Gestore","Contact Center"]); ?>",
        "stato": "<?php print scramble(["SOTTOSCRITTA","SCADUTA","REVOCATA DA GESTORE","RIFIUTATA DA CLIENTE"]); ?>",
        "data": "2021-<?php print "0".rand(1,5)."-".rand(11,28); ?>"
        <?php if ($x%3==0 && $x!=0) print (', "pdfurl" : "../pdf/documentopdf.pdf"') ?>
    }
    <?php }
    }
    ?>
]}
<?php
$tableCat = null;

function parseCatalog($customer, $bank, $xmlFile)
{
    global $tableCat;
    $tableCat = array();
    $xml = new DOMDocument();
    $xml->load(dirname(__FILE__) . $xmlFile);

    $blocks = $xml->getElementsByTagName("block");

    /* @var $block \DOMElement */
    foreach ($blocks as $block) {
        //applicazione dei filtri
        if (substr_count($block->getAttribute('customer'), $customer) > 0
            && substr_count($block->getAttribute('nobank'), $bank) == 0) {
            $file = $block->getAttribute('file');
            $area = $block->getAttribute('area');
            $location = $block->getAttribute('location');
            $key = $area . '-' . $location . '-' . substr($file, 0, strpos($file, '/'));
            $tableCat[$key] = true;
        }
    }

    return "&nbsp;";
}

function checkobjects2($area, $location, $type)
{
    global $tableCat, $customer;
    $key = $area . '-' . $location . '-' . $type;

    if (in_array($key, array_keys($tableCat))) {
        if ($area == "pub") $areafullname = "Pubblica";
        else $areafullname = "Privata";

        return "<a href=\"connect.php?page=old_catalog.php&customer=" . $customer . "&area=" . $area . "&location=" . $location . "&type=" . $type . "\">" . $areafullname . "</a>";
    } else return "&nbsp;";
}


function checkobjects_R($customer, $bank, $area, $location, $typeR)
{

    $xml = new DOMDocument();
    $xml->load(dirname(__FILE__) . "/object_catalog_responsive.xml");
    $blocks = $xml->getElementsByTagName("block");

    /* @var $block \DOMElement */
    foreach ($blocks as $block) {
        //applicazione dei filtri
        if (substr_count($block->getAttribute('customer'), $customer) > 0 && substr_count($block->getAttribute('nobank'), $bank) == 0 && substr_count($block->getAttribute('area'), $area) > 0 && substr_count($block->getAttribute('location'), $location) > 0 && substr_count($block->getAttribute('file'), $typeR) > 0) {
            return "<a href=\"connect.php?page=old_catalog_responsive.php&customer=" . $customer . "&area=" . $area . "&location=" . $location . "&type=" . $typeR . "\">" . $area . "</a>";
            break;
        }
    }
    return "&nbsp;";
}


//eventuali funzioni comuni WT

function checkobjectsWt($customer, $bank, $area, $location, $type)
{
    $xml = new DOMDocument();
    $xml->load(dirname(__FILE__) . "/object_catalog_wt.xml");
    $blocks = $xml->getElementsByTagName("block");

    /* @var $block \DOMElement */
    foreach ($blocks as $block) {
        //applicazione dei filtri
        if (substr_count($block->getAttribute('customer'), $customer) > 0 && substr_count($block->getAttribute('nobank'), $bank) == 0 && substr_count($block->getAttribute('area'), $area) > 0 && substr_count($block->getAttribute('location'), $location) > 0 && substr_count($block->getAttribute('file'), $type) > 0) {
            if ($area == "pub") $areafullname = "Pubblica";
            else $areafullname = "Privata";

            return "<a href=\"connect.php?page=old_catalog_wt.php&customer=" . $customer . "&area=" . $area . "&location=" . $location . "&type=" . $type . "\">" . $areafullname . "</a>";
            break;
        }
    }
    return "&nbsp;";
}

function checkobjects_Bpm_new_layout($customer, $location, $typeBpmNL, $area)
{
    $xml = new DOMDocument();
    $xml->load(dirname(__FILE__) . "/object_catalog_bpm_new_layout.xml");
    $blocks = $xml->getElementsByTagName("block");

    /* @var $block \DOMElement */
    foreach ($blocks as $block) {
        //applicazione dei filtri

        if (substr_count($block->getAttribute('customer'), $customer) > 0 && substr_count($block->getAttribute('area'), $area) > 0 && substr_count($block->getAttribute('location'), $location) > 0 && substr_count($block->getAttribute('file'), $typeBpmNL) > 0) {
            return "<a href=\"connect.php?page=old_catalog_bpm_new_layout.php&customer=" . $customer . "&location=" . $location . "&type=" . $typeBpmNL . "\">" . $area . "</a>";
            break;
        }
    }
    return "&nbsp;";
}


//eventuali funzioni comuni
function checkobjects($customer, $bank, $area, $location, $type)
{
    $xml = new DOMDocument();
    $xml->load(dirname(__FILE__) . "/object_catalog.xml");
    $blocks = $xml->getElementsByTagName("block");

    /* @var $block \DOMElement */
    foreach ($blocks as $block) {
        //applicazione dei filtri
        if (substr_count($block->getAttribute('customer'), $customer) > 0
            && substr_count($block->getAttribute('nobank'), $bank) == 0
            && substr_count($block->getAttribute('area'), $area) > 0
            && substr_count($block->getAttribute('location'), $location) > 0
            && substr_count($block->getAttribute('file'), $type) > 0) {
            if ($area == "pub") $areafullname = "Pubblica";
            else $areafullname = "Privata";

            return "<a href=\"connect.php?page=old_catalog.php&customer=" . $customer . "&area=" . $area . "&location=" . $location . "&type=" . $type . "\">" . $areafullname . "</a>";
            break;
        }
    }
    return "&nbsp;";
}

//eventuali funzioni comuni
function checkobjects_old($customer, $bank, $area, $location, $type)
{
    $xml = new DOMDocument();
    $xml->load(dirname(__FILE__) . "/object_catalog_old.xml");
    $blocks = $xml->getElementsByTagName("block");

    /* @var $block \DOMElement */
    foreach ($blocks as $block) {
        //applicazione dei filtri
        if (substr_count($block->getAttribute('customer'), $customer) > 0 && substr_count($block->getAttribute('nobank'), $bank) == 0 && substr_count($block->getAttribute('area'), $area) > 0 && substr_count($block->getAttribute('location'), $location) > 0 && substr_count($block->getAttribute('file'), $type) > 0) {
            return "<a href=\"connect.php?page=catalog_old.php&customer=" . $customer . "&area=" . $area . "&location=" . $location . "&type=" . $type . "\">" . $area . "</a>";
            break;
        }
    }
    return "&nbsp;";
}

function returnobjectname($fullfilename)
{
    $firstletters = strtoupper(substr($fullfilename, 0, 3));
    switch ($firstletters) {
        case "FOO":
            $firstletters = "FOOT";
            break;

        case "FOR":
            $firstletters = "FORM";
            break;

        case "TES":
            $firstletters = "TESTO";
            break;
    }

    $objectnumber = "";
    $splitfilename = str_split($fullfilename);
    $reaching = false;
    foreach ($splitfilename as $splitletter) {
        if (is_numeric($splitletter) && $objectnumber == "") $reaching = true;
        if ($reaching && ($splitletter == "." || $splitletter == "_")) $reaching = false;
        if ($reaching) {
            $objectnumber = $objectnumber . $splitletter;
        }
    }

    return strtoupper($firstletters . "_" . $objectnumber);

}

/* Oggetti no resp */
function checkObjectsNoResp1($customer, $bank, $area, $location, $type)
{
    $xml = new DOMDocument();
    $xml->load(dirname(__FILE__) . "/object_catalog_responsive.xml");
    $blocks = $xml->getElementsByTagName("block");

    /* @var $block \DOMElement */
    foreach ($blocks as $block) {
        //applicazione dei filtri
        if (substr_count($block->getAttribute('customer'), $customer) > 0 && substr_count($block->getAttribute('nobank'), $bank) == 0 && substr_count($block->getAttribute('area'), $area) > 0 && substr_count($block->getAttribute('location'), $location) > 0 && substr_count($block->getAttribute('file'), $type) > 0) {
            //return "<a href=\"connect.php?page=catalog_responsive.php&customer=".$customer."&area=".$area."&location=".$location."&type=".$type."\">".$area."</a>";
            return "<a href=\"connect.php?page=librerie.php&pag=catalog_responsive&responsive=n&customer=" . $customer . "&area=" . $area . "&location=" . $location . "&type=" . $type . "\">" . $area . "</a>";
            break;
        }
    }
    return "&nbsp;";
}

/* Oggetti no resp */
function checkObjectsNoResp2($customer, $area, $location, $type)
{
    global $tableCat, $customer;
    $key = $area . '-' . $location . '-' . $type;

    if (in_array($key, array_keys($tableCat))) {
        /*
        if ($area == "pub") $areafullname = "Pubblica";
        else $areafullname = "Privata";
        */
        return "<a href=\"connect.php?page=librerie.php&pag=catalog_old&responsive=n&customer=" . $customer . "&area=" . $area . "&location=" . $location . "&type=" . $type . "\">" . $area . "</a>";
        // return "<a href=\"connect.php?page=catalog.php&customer=".$customer."&area=".$area."&location=".$location."&type=".$type."\">".$areafullname."</a>";
    } else return "&nbsp;";
}


/* Elementi randomizzati */
/* Ritorna una frase randomizzata della lunghezza specificata */
/* length = lunghezza massima della stringa: fissa se non viene specificato minlength */
/* minlength = lunghezza minima della stringa */

function randomWord() {
    $randomwords = explode(" ", strtolower("lorem ipsum dolor sit amet consectetur adipisicing elit necessitatibus officia eos facilis numquam distinctio repellat quam ad ipsa velit perspiciatis assumenda esse id ipsam voluptas atque aliquam illo nostrum at rerum itaque fuga iure et omnis voluptate Earum asperiores iste autem ducimus quibusdam at culpa illo aperiam officia rem vel molestiae perspiciatis possimus aut assumenda impedit dolorum alias nulla Quae fuga accusantium enim maiores cupiditate eos iusto totam vero odio aliquam odit alias laudantium delectus cumque sint facilis beatae eveniet impedit porro culpa cupiditate quasi quo deleniti nesciunt mollitia reprehenderit nostrum odit eum sint ut at libero veritatis illum culpa"));
    return $randomwords[rand(0,sizeof($randomwords))];
}

function randomText($length,$minlength=null) {
    
    $randomphrase = "";
    if ($minlenght) {
        // Restituisce una lunghezza randomica partendo dal minimo
        $length = rand($minlength,$length);
    }
    for ($x=0;$x<$length;$x++){
        $randomphrase = $randomphrase." ".randomWord();
    }
    $randomphrase = ucfirst(ltrim($randomphrase));
    return $randomphrase;
}

/* Restituisce un testo HTLM random del numero di termini indicato*/
function randomPar($length) {
    $totwords = $length;
    $randompar = "";
    while ($totwords >0) 
    {

        $blocksize = rand(10,30);

        if ($totwords > $blocksize)
            {   
                $normalwords = rand($blocksize/5, $blocksize);
                $specialwords = $blocksize - $normalwords;
                $taggedtext = (rand(1,4)==2)? "<a href=\"#\">||TEXT||</a>" : "<strong>||TEXT||</strong>";
                
                $randompar = $randompar." ".randomText($normalwords);
                $randompar = $randompar." ".str_replace("||TEXT||",randomText($specialwords),$taggedtext);

            }   
        else
            {
                $randompar = $randompar." ".randomText($totwords);
            }

        $totwords=$totwords-$blocksize;
    }
    return ("<p>".ucfirst(ltrim(strtolower($randompar))).".</p>");

    }
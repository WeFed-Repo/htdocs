<?php
header('Content-Type: application/json');
?>{
    "docname": "Lorem ipsum dolor sit amet consectetur",
    "docs": [<?php
    for($x;$x<rand(2,5);$x++) {
        if($x>0) print ",";?>
        {
            "name":"Nome <?php print $x;?> lorem ipsum lorem ipsum",
            "url": "############"
        }
        <?php
    }
?>]
}
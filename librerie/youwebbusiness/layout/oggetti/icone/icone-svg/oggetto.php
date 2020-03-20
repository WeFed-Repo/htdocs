<?php 

require_once('layout/struttura/functions/init.php');

$arr = listFolderFiles('./fe/img/icon',array());
?>

<?php 
echo '<div class="row">';
foreach ($arr as $item) {
    echo "<div class='col-6 col-md-4 col-lg-3 p-1'>";
    echo "<div class='icon-demo'> <!-- icona --> <img src='".$item['dir']."/".$item['entry']."'> <!-- fine icona --> </div>";
    echo str_replace(".svg", "", $item['entry']);
    echo " </div>\n";
}
echo '</div>';
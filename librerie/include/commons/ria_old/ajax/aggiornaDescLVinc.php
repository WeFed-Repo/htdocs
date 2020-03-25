<?php
header('content-type: application/json; charset=utf-8');

$id = (isset($_POST['id']))? $_POST['id'] : '';
$nome = (isset($_POST['nome']) && $_POST['nome'] != '')? $_POST['nome'] : '*#*ND';
?>{
    "lista": [
        ["47", "03\/06\/2011", "2.0", "3", "3.00", "3.01", "", "04\/03\/2011", "<?php if ($id == '47') { echo $nome; } else { ?>WWWWWWWWWWWWWWWWWWWW<?php } ?>"],
        ["45", "03\/09\/2011", "2.5", "6", "33.00", "33.30", "", "04\/03\/2011", "<?php if ($id == '45') { echo $nome; } else { ?>*#*ND<?php } ?>"],
        ["44", "20\/02\/2012", "3.0", "12", "22000.00", "22481.80", "", "21\/02\/2011", "<?php if ($id == '44') { echo $nome; } else { ?>*#*ND<?php } ?>"],
        ["48", "03\/03\/2012", "3.0", "12", "4600.00", "4700.74", "", "04\/03\/2011", "<?php if ($id == '48') { echo $nome; } else { ?>WWWWWWWWWWWWWWWWWWWW<?php } ?>"]
    ]
}
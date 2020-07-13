<!-- CSS -->
<!-- Tutte le pagine, sia webank che youweb -->
<link rel="stylesheet" media="all" href="/common/fe/css/all.css">

<?php if ($site == "webank") { ?>
    <!-- Tutte webank -->
    <link rel="stylesheet" media="all" href="/WB/fe/css/default.css">
	<?php if ($html == "mi"  || empty($html)) { ?>
        <!-- Proprie nuove webank -->
        <link rel="stylesheet" media="all" href="/WB/fe/css/resp.css">
	<?php } else { ?>
        <!-- Straniere nuove webank -->
        <link rel="stylesheet" media="all" href="/WB/fe/css/webank_skin.css">
    <?php } ?>
<?php } else { 
        
        /* youweb */ 
        // Casistiche OLD
        if ($pag=="tpl_priv_dashboard.php") { ?>
        <link media="screen, print" rel="stylesheet" type="text/css" href="/HT/fe/css/jquery-ui_ng.min.css" />
	<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/fe/css/bootstrap.height.plugin.css" />
	<link media="screen" rel="stylesheet" type="text/css" href="/HT/fe/css/ie10-viewport.css"  />
            <link rel="stylesheet" media="all" href="/HT/fe/css/youWeb-main.css"/>
        <?php
        }
        else
        {
        // Casistiche "normali"
        ?>
            <link rel="stylesheet" media="all" href="/HT/fe/css/youweb_generic.css"/>
        <?php
        }
        ?>
    
    <link rel="stylesheet" media="all" href="/HT/fe/css/youWeb-struttura.css"/>
	<?php if ($html == "vr" || empty($html) ) { ?>
        <!-- Proprie nuove youweb -->
        <link rel="stylesheet" media="print" href="/HT/fe/css/print.css"/>
	<?php } else { ?>
        <!-- Straniere nuove youweb -->
        <link rel="stylesheet" media="all" href="/HT/fe/css/youweb_skin.css">
	<?php } ?>
<?php } ?>
<!-- / CSS -->

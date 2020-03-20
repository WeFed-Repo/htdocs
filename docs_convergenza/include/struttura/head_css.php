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
<?php } else { /* youweb */ ?>
    <link rel="stylesheet" media="all" href="/HT/fe/css/youweb_generic.css"/>
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

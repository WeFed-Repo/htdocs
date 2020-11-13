<!-- JS -->
<!-- Tutte le pagine, sia webank che youweb -->
<script src="/common/fe/assets/jquery/jquery.js"></script>
<script src="/common/fe/assets/jquery/jquery-ui.min.js"></script>
<script src="/common/fe/assets/jquery/jquery.ui.touch-punch.min.js"></script>
<script src="/common/fe/assets/jquery/jquery.dataTables.min.js"></script>
<script src="/common/fe/assets/jquery/jquery.dataTables.dateIT.js"></script>
<script src="/common/fe/assets/jquery/jquery.dataTables.altImg.js"></script>
<script src="/common/fe/assets/jquery/jquery.dataTables.formattedNum.js"></script>
<script src="/common/fe/assets/jquery/jquery.form.js"></script>
<script src="/common/fe/assets/jquery/jquery.blockUI.js"></script>
<script src="/common/fe/assets/jquery/jquery-ui.selectToUISlider.js"></script>
<script src="/common/fe/assets/bootstrap/bootstrap.min.js"></script>
<script src="/common/fe/assets/bootstrap/bootstrap-table.js"></script>
<script src="/common/fe/assets/ie10-viewport.js"></script>
<script src="/common/fe/assets/jsapi.js"></script>
<script src="/common/fe/js/funzioni_convergenza.js"></script>

<!-- JS CONFIG -->
<?php if ($site == "webank") { ?>
    <!-- Tutte le pagine webank -->
    <script>
        // Variabili per ambiente, riporta le chiavi del navigatore selezionate
        var sectionTitle = "Webank";

        // Variabili per emulazione
        var isLib = true;
        var librerie = true;
        var cgi_script = "/webankpri";
        var wrp_script = "/webankpri";
        var imgPath = '/WB/fe/img/';
        var pathLibrerie = '/include/ajax';
        var isWebank = true;
        var hasCarte = false;
        var isComunita200Mov = true;
        var rbfLinkObj = {
            'bonifico': 'BON',
            'giroconto': 'GIR',
            'carta': 'PRJ'
        };

        function getPathImages() {
            return "/WB/fe/img/";
        }

        function getPathImagesFe () {
            return "/WB/fe/img/";
        }
    </script>
    <script src="/WB/fe/js/struttura.js"></script>

	<?php if ($html == "mi" || empty($html)) { ?>
        <!-- Tutte le pagine proprie webank -->
        <script src="/WB/fe/js/funzioniWB.js"></script>
	<?php } else { ?>
        <!-- Tutte le pagine straniere webank -->
        <script src="/HT/fe/js/script/funzioniYW.js"></script>
	<?php } ?>
<?php } else { ?>
    <script>
        function getPathImages() {
            return "/HT/fe/css/";
        }

        function getPathContext() {
            return "/WEBHT";
        }

        function getKBanca() {
            return "1";
        }

        function getLineaTol() {
            return "";
        }
    </script>

    <!-- Tutte le pagine youweb -->
    <!--[if lt IE 9]>
    <script src="/HT/fe/js/script/html5.js"></script>
    <script src="/HT/fe/js/script/respond.min.js"></script>
    <![endif]-->
    <script src="/HT/fe/js/script/struttura.js"></script>

	<?php if ($html == "vr" || empty($html)) { ?>
        <!-- Tutte le pagine proprie youweb -->
        <script src="/HT/fe/js/script/funzioniYW.js"></script>
	<?php } else { ?>
        <!-- Tutte le pagine straniere youweb -->
        <script src="/WB/fe/js/funzioniWB.js"></script>
	<?php } ?>
<?php } ?>

<?php if ($site == "youweb") { ?>
    <!-- Tutte le pagine youweb -->

    <script>
        var cgi_script = "",
            wrp_script_direct = "";
        function getPathImages() {
            return "/HT/fe/css/";
        }

        function getPathContext() {
            return "/WEBHT";
        }

        function getKBanca() {
            return "1";
        }

        function getLineaTol() {
            return "";
        }

        // Variabili GTM
        var X = "<?php print rand(11111111,99999999);?>",
            UACode = "UA-77073122-2"

    </script>
    <script src="/HT/fe/js/script/gtag.js"></script>
<?php 

    } else { ?>
    <script>
        var cgi_script = "";

        function getPathImages() {
            return "/WB/fe/img/";
        }
    </script>
<?php } ?>


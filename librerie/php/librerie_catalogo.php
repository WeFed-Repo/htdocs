<!-- FUNZIONI IN PAGINA -->
<script type="text/javascript">
    function windowdetail(filename) {
        // Raccoglie il codice come testo
        $.ajax({
            url: filename,
            dataType: "text",
            success: function (data) {
                var forcoderwin;
                forcoderwin = window.open('', 'name', 'height=500,width=700,toolbar=no,directories=no,status=no,menubar=no,scrollbars=vertical,resizable=no');
                forcoderwin.document.write('<html><body style="margin:0"><textarea style="width: 700px; height: 500px;" >' + data.replace(/</g, "&lt;").replace(/>/g, "&gt;") + '</textarea></body></html>');
            }
        });
    }

    function ridimensionaWidth() {
        var larghezzaWindow = parseFloat($('#selectScreen').val().toString());
        var finestraPopup = window.open('', 'name', 'height=700, width=' + larghezzaWindow + ',toolbar=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no');
        finestraPopup.document.write('<html><body>' + $('#maincontent').html() + '</body></html>');
    }

    $(document).ready(function () {
        $('#content').css('max-width', 1024)
    });
    $('#selectScreen').change(function () {
        ridimensionaWidth();
    })
</script>
<!-- FINE FUNZIONI IN PAGINA -->
<?php
//acquisizione dei filtri
$customer = $_GET["customer"];
$type = $_GET["type"];
$responsive = ($responsive == "n") ? "n" : "";

//apertura del file xml
/*
$xml = new DOMDocument();
  $xml-> load(dirname(__FILE__) . "/core/object_catalog_new.xml");
$blocks = $xml->getElementsByTagName( "block" );
*/
$noobject = true;

function remove_some_dir($dirname) {
    return !(strrpos($dirname, ".") > 0 || $dirname == "." || $dirname == ".svn");
}
?>
<div id="librerie">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="color borderlightcolor">Elenco oggetti: <?php echo($tipoOggetti[$type]) ?></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- RIGHE PER I VARI OGGETTI -->

<div id="main"<?php if ($responsive) { ?> class="noresp"<?php } ?>>
    <div class="wrapper">
        <div class="container-fluid">
            <?php
            $pathoggetti = ($responsive == "n") ? "responsive" : "oggetti";

            // Path di base degli oggetti
            $filebase = ($hostsuffix == "fix") ? "C:/Apache24/librerie/htdocs" : realpath("..");
            $filebase = $_SERVER['SERVER_NAME'] == 'localhost' ? $filebase . '/content' : $filebase;

            //scorrimento degli oggetti nelle cartelle
            $dirnames = array_filter(scandir($filebase . "/librerie/include/" . $pathoggetti . "/" . $type . "/"), 'remove_some_dir');

            if (count($dirnames) > 0) {
                foreach ($dirnames as $dirname) {
                    if ($noobject) $noobject = false;
                    // Assembla il nome del file
                    $objectname = $dirname;
                    $objpath = "/librerie/include/" . $pathoggetti . "/" . $type . "/" . $dirname . "/";
                    ?>
                    <div class="libObjWrap" data-path="<?php echo $objpath; ?>">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="lib2">
                                    <a name="<?php echo $objectname; ?>"></a>
                                    <a id="<?php echo $objectname; ?>" href="#<?php echo $objectname; ?>"
                                       class="libtitle"><?php echo strtoupper($objectname); ?></a>
                                    <span>
                                        <?php echo $objpath . "oggetto.php" ?>
                                        <a href="javascript:"
                                           onclick="windowdetail('<?php echo $objpath."oggetto.php" ?>');"><strong>(Sorgente)</strong></a>
                                        <?php
                                        if ($iswefed) {
                                            // Se esiste il file di informazioni correlato all'oggetto
                                            if (file_exists(realpath("../".$objpath)."descrizione.html")) {
                                                ?>
                                                <a href="javascript:" class="libObjInfo">Info</a>
                                                <?php
                                            } else {
                                                ?>
                                                <a href="javascript:" class="libObjEdit">Edit</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="libObjDetail" style="display:none">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="objDetailHtml">
                                        òkasòldkòlsad
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="libObjEditHtml" style="display:none">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="objEdit">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- INIZIO OGGETTO <?php echo (strtoupper($objectname)) ?> -->
                                <?php
                                virtual ($objpath."oggetto.php");
                                ?>
                                <!-- FINE OGGETTO <?php echo (strtoupper($objectname)) ?> -->
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            if ($noobject == true) {
                echo ("<p>Non sono presenti oggetti in questa categoria.</p>");
            }

            ?>

            <!-- FINE RIGHE PER I VARI OGGETTI -->
        </div>
    </div>
</div>
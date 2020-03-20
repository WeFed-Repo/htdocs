<form class="formGenerico borderFormRounded" role="form">
    <div class="form-group">
	    <div class="row">
	        <div class="col-sm-3">
                <script type="text/javascript">
                //inizializzazione datepicker

                $(function() {
                    $("#datepickerToolSimple").mask("99/99/9999");
                    $("#datepickerToolSimple").datepicker({
                        minDate: 1,
                        showOtherMonths: true,
                        showOn: "button",
                        prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
                        nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
                        buttonImage: "/img/ret/pixel_trasp.gif",
                        buttonImageOnly: true,
                        beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
                        onClose: function() {
                            $('#datePickerWrapper').modal('hide');
                        }
                    })
                    appendDatePickerIcon('datepickerToolSimple');
                });
                </script>

                <label class="control-label" for="datepickerToolSimple">Data</label>
	            <div class="form-inline">
	                <div class="input-group">
	                    <input type="text" id="datepickerToolSimple" placeholder="gg/mm/aaaa" value="22/05/2017" class="form-control clear-x"><a class="input-group-addon date btn-icon" href="#!"><i class="icon icon-calendar_filled"></i></a>
                    </div>
	            </div>

	        </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-sm-3">

            <script type="text/javascript">
 
                 $(function(){

                    // Stringa di date evidenti per il datepicker ed elaborazioni
                    /* STRINGA IN ARRIVO DAL BACKEND */
                    var dateEvidentiStringa = "04|10|2018,02|11|2018,04|12|2018,04|01|2019,04|02|2019";
                    /* FINE STRINGA IN ARRIVO DAL BACKEND */
                    // Conversione della stringa in formato ISO
                    var dateEvidenti = [];
                    $.each(dateEvidentiStringa.split(","),function(i,v){
                        var dataSplit = v.split("|");
                        dateEvidenti.push(dataSplit[2] + "-" + dataSplit[1] + "-" + dataSplit[0]);
                    });
                    


                    $("#datepickerScadenza").mask("99/99/9999");
                    $("#datepickerScadenza").datepicker({

                        // beforeShowDay: noHolidays,  //si applica se si vuole che i fine sttimana e festivi non siano delezionabili
                        minDate: 0,
                        showOtherMonths: true,
                        showOn: "button",
                        prevText: "<i class=\"icon icon-arrow_left\" title=\"mese precedente\"></i>",
                        nextText: "<i class=\"icon icon-arrow_right\" title=\"mese successivo\"></i>",
                        buttonImage: "/img/ret/pixel_trasp.gif",
                        buttonImageOnly: true,
                        maxDate:"+12M",
                        beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
                        onClose: function() {
                            $('#datepickerScadenzaWrapper').modal('hide');
                        },
                        beforeShowDay: function(date) {
                            // stringa di date da evidenziare
                            return [true,($.inArray(date.format("isoDate"),dateEvidenti)>=0 ? "evidente" : "")];
                        }
                    });
                    appendDatePickerIcon('datepickerScadenza');
                });
                </script>


          
                <div class="form-inline">
                    <label class="control-label" for="datepickerScadenza">Datepicker con esempio scadenza</label>
                    <div class="input-group">
                        <input type="text" id="datepickerScadenza" placeholder="gg/mm/aaaa" class="form-control clear-x" readonly><a class="input-group-addon date btn-icon" href="#!"><i class="icon icon-calendar_filled"></i></a>
                    </div>
                </div>
            </div>
        </div>
	</div>
</form>


<div class="dbwidget loading" id="dbcalendario">
    <div class="titlebar">
        <h2>Calendario</h2>
        <a class="minibtn reload" id="dbcalendarioReload" title="Ricarica"><span class="icon icon-aggiorna"></span></a>
    </div>
    
    <!-- Wrapper calendario -->
    <div id="ilMioCalendario"></div>
    <!-- Fine wrapper calendario -->
   
    <!-- Legenda -->
    <div class="legenda-wrap">
    <table class="legenda" id="dbcalendariolegenda">
            <tr class="passato">
                <td class="dot-wrap"><span class="dot festivita"></span></td>
                <td><strong>12/12/2017</strong><br>Festa del lorem ipsum</td>
            </tr>
            <tr>
                <td class="dot-wrap"><span class="dot banking"></span></td>
                 <td><strong>12/12/2017</strong><br>Lorem ipsum dolor sit</td>
            </tr>
             <tr>
                <td class="dot-wrap"><span class="dot personale"></span></td>
                 <td><strong>12/12/2017</strong><br>Amet consectetur adipiscing elit</td>
            </tr>
            <tr>
                <td class="dot-wrap"><span class="dot personale"></span></td>
                 <td><strong>12/12/2017</strong><br>Amet consectetur adipiscing elit</td>
            </tr>
            <tr>
                <td class="dot-wrap"><span class="dot personale"></span></td>
                 <td><strong>12/12/2017</strong><br>Amet consectetur adipiscing elit</td>
            </tr>
      </table>

    </div>


	 <!-- Console "fondo" -->
    <div class="bottom-console">
        <a class="cta" href="#" title="Richiedi appuntamento">Richiedi appuntamento</a>
    </div>
    <!-- Fine console "fondo" -->


    <script type="text/javascript">

    $(function(){

        var getCalendario = function() {
                var wId = $("#dbcalendario").addClass("loading");
                $.ajax({
                    url: "/include/oggetti/Widget home/NEW Widget Calendario/esempio_eventi.json",
                    dataType: "json",
                    success:function(data){
                    var currTime = new Date();
                    var startDateFrom = new Date(currTime.getFullYear(),currTime.getMonth() - 4,1);

                    $("#ilMioCalendario").datepicker({
                        minDate: startDateFrom,
                        maxDate: '+1y',
                        changeMonth: false,
                        monthNames: ["Gen", "Feb", "Mar", "Apr", "Mag", "Giu", "Lug", "Ago", "Set", "Ott", "Nov", "Dic"],
                        dayNamesMin: ["D","L","M","M","G","V","S"],
                        changeYear: false ,
                        beforeShowDay: function(date) {
                           
                                var style = "";
                                var desc = "";
                                var cm = currTime.getMonth();
                                var cd = currTime.getDate();
                                var cy =currTime.getFullYear();
                                var m = date.getMonth();
                                var d = date.getDate();
                                var y = date.getFullYear();
                                
                                if (cy > y) {
                                    style = " ui-datepicker-unselectable ui-state-disabled passato ";
                                } else if (cy == y) {
                                    if (cm > m) {
                                        style = " ui-datepicker-unselectable ui-state-disabled passato ";
                                    } else if (cm == m) {
                                        if (cd > d) {
                                            style = " ui-datepicker-unselectable ui-state-disabled passato ";
                                        }
                                    }
                                }
                                var eventi = data;
                                var eventiTrovati = [];
                                $.each(eventi, function(i, evento) {
                                    if ($.datepicker.formatDate('dd/mm/yy', date) === evento.data) {
                                        
                                        eventiTrovati.push(evento);
                                    }   
                                });
                                
                                if (eventiTrovati.length === 1) {
                                    if (eventiTrovati[0].tipo == 'festivita') style += "noeventi "; 
                                    style += eventiTrovati[0].tipo;
                                    desc = $.trim(eventiTrovati[0].descrizione);
                                } else if (eventiTrovati.length > 1) {
                                    style += 'multi';
                                    desc = eventiTrovati.length + '&nbsp;eventi in calendario';
                                } else if (eventiTrovati.length === 0) {
                                    style += 'noeventi';
                                    desc = "";
                                }
                                return [true, style, desc];
                            }


                            
                        });
                        wId.removeClass("loading");
                     
                    }
                });
           }

           getCalendario();

           $("#dbcalendarioReload").click(getCalendario);

    });

    

    </script>

 </div>
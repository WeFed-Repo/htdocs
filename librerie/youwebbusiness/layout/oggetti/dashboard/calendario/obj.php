<div class="dhb-calendario box bordered w-100 px-3 pt-3 pb-1 m-0 d-flex"></div>

<script>
    // DATI DI TEST
    var date = [
        {
            data: '04/10/2019',
            title: 'lorem',
            text: 'lorem ipsum dolor sit amet',
        },
        {
            data: '06/10/2019',
            title: 'ipsum',
            text: 'lorem ipsum dolor sit amet',
        },
        {
            data: '08/10/2019',
            title: 'dolor dolor',
            text: 'lorem ipsum dolor sit amet',
        },
        {
            data: '11/10/2019',
            title: 'Scadenze fiscali',
            text: '<p>lorem ipsum dolor sit amet</p> <p>lorem ipsum dolor sit amet <br /> lorem ipsum dolor sit amet <br /> lorem ipsum dolor sit amet <br /> lorem ipsum dolor sit amet <br /> lorem ipsum dolor sit amet</p><p>lorem ipsum dolor sit amet</p><p>lorem ipsum dolor sit amet<br />lorem ipsum dolor sit amet<br />lorem ipsum dolor sit amet</p>',
        }
    ];
    $(function(){
        $(".dhb-calendario").datepicker({
            onSelect: function(e,t) {
                var cal = $(this);
                var s = e.split("/");
                var d = new Date(s[2], s[1]-1, s[0]);
                var n = d.getDate();
                var inarray = isInJsonDates(date,e)
                if( inarray ) {
                    cal.find('.calendar-modal').remove(),
                    cal.append('<div class="calendar-modal">'+
                                    '<a href="#" data-dismiss="modal" aria-label="Close" >'+
                                    '<img src="./fe/img/icon/close.svg">'+
                                    '</a>'+
                                    '<span class="data">'+inarray.data+'</span>'+
                                    '<h2 class="title">'+inarray.title+'</h2>'+
                                    '<div class="text">'+inarray.text+'</div>'+
                                '</div>');
                    // fa apparire la modale con l'animazione
                    setTimeout(function(){
                        cal.find('.calendar-modal').addClass('is--visible')
                    }, 100);

                }
            },
            beforeShowDay: function(e){
                var d = ( '0' + e.getDate() ).slice(-2)
                var m = ( '0' + (e.getMonth()+1) ).slice(-2);
                var y = e.getFullYear();
                var n = d+'/'+m+'/'+y;
                var inarray = isInJsonDates(date,n)
                if( inarray ) {
                    return [ true, 'has-event' ]
                } else {
                    return [ true ]
                }
            }
        })
    });
    $(".dhb-calendario").on('click','.calendar-modal .close',function(){
        // fa scomparire la modale con l'animazione
        var modal = $(this).parents('.calendar-modal');
        modal.removeClass('is--visible')
        setTimeout(function(){
            modal.remove();
        }, 750);
    })
    function isInJsonDates(date,n) {
        inarray = false;
        date.forEach(
            function(e) {
                if( !inarray ) {
                if( e.data==n ) {
                    inarray = e;
                    return true
                }
             }
            }
        )
        return inarray;
    }
</script>
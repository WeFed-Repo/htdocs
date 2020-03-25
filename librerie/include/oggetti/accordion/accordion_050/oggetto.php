<!-- 
    Questo oggetto è stato realizzato solo per gestire la pagina utilizzata dal call center
    Bisognava inserire un accordion all'interno dell'oggetto stepper, ma i css dei due oggetti 
    andavano in conflitto e quindi si è deciso di creare un nuovo oggetto
-->

<section>
	<p style="text-align: center">Oggetto utilizzato SOLO x Il call center </p>
<div class="boxAccordionPhone">
     <div class="boxAccordionPhone-section" >
        <a href="#1" class=" boxAccordionPhone-section-title btn-icon " id="contenitoreBoxPhone">
            <i class="icon icon-1x icon-row_expand" id="switchPhone"></i> 
            <span>Call Center</span>
        </a>

        <div id="controlPhone" class="boxAccordionPhone-section-content" style="display: none">
            Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum 
        </div>
    </div>
</div>
</section>





<script type="text/javascript">
    $(function() {
        $('#contenitoreBoxPhone').click(function() {
        
            $('#controlPhone').toggle();

                if($('#controlPhone').is(":visible")){
                    $('#switchPhone').removeClass('icon-row_expand');
                    $('#switchPhone').addClass('icon-row_contract');

                }else{
                    $('#switchPhone').removeClass('icon-row_contract');
                    $('#switchPhone').addClass('icon-row_expand');
                }
        });
    });
</script>

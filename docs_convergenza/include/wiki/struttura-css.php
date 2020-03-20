<section>
    <p>Lista dei file CSS da caricare nei due siti rispetto alle varie casistiche.</p>
</section>

<section>
    <h3>Sia Webank che YouWeb</h3>
    <ul>
        <li>
            <span><strong>Tutte le pagine</strong> > caricare <strong>/common/fe/css/all.css</strong> che importa i seguenti file</span>
            <ul>
                <li><span>@import /common/fe/assets/bootstrap/bootstrap.css</span></li>
                <li><span>@import /common/fe/css/print.css</span></li>
            </ul>
        </li>
    </ul>
</section>

<section>
    <h3>Webank</h3>
    <ul>
        <li>
            <span><strong>Tutte le pagine</strong> > caricare <strong>/WB/fe/css/default.css</strong> che importa i seguenti file</span>
            <ul>
                <li><span>@import /WB/fe/css/webank_struttura.css</span></li>
                <li><span>@import /WB/fe/css/webank_base.css</span></li>
                <li><span>@import /WB/fe/css/webank_generic.css</span></li>
            </ul>
        </li>
        <li>
            <span><strong>Pagine proprie nuove</strong> > aggiungere <strong>/WB/fe/css/resp.css</strong> che importa i seguenti file</span>
            <ul>
                <li><span>@import /WB/fe/css/webank_print.css</span></li>
            </ul>
        </li>
        <li>
            <span><strong>Pagine proprie vecchie</strong> > aggiungere <strong>/WB/fe/css/no_resp.css</strong> che importa i seguenti file</span>
            <ul>
                <li><span>@import /WB/fe/css/priv_calendar.css</span></li>
                <li><span>@import /WB/fe/css/noresp_priv_special_1.css</span></li>
                <li><span>@import /WB/fe/css/noresp_priv_special_2.css</span></li>
                <li><span>@import /WB/fe/css/noresp_priv_generic_common.css</span></li>
                <li><span>@import /WB/fe/css/noresp_priv_generic_objects.css</span></li>
                <li><span>@import /WB/fe/css/noresp_priv_generic_porting.css</span></li>
                <li><span>@import /WB/fe/css/noresp_priv_print.css</span></li>
                <li><span>@import /WB/fe/css/noresp_priv_color.css</span></li>
            </ul>
        </li>
        <li><span><strong>Pagine straniere nuove</strong> > aggiungere <strong>/WB/fe/css/webank_skin.css</strong></span></li>
        <li><span><strong>Pagine straniere vecchie</strong> > aggiungere <strong>/WB/fe/css/webank_skin_old.css</strong> (casistica ancora non presente)</span></li>
    </ul>
</section>

<section>
    <h3>YouWeb</h3>
    <ul>
        <li>
            <span><strong>Pagine proprie nuove</strong> > caricare <strong>/HT/fe/css/youweb_generic.css</strong> e <strong>/HT/fe/css/youWeb-struttura.css</strong> che importano i seguenti file</span>
            <ul>
                <li><span>@import /HT/fe/css/ie10-viewport.css</span></li>
                <li><span>@import /HT/fe/css/bootstrap.height.plugin.css</span></li>
                <li><span>@import /HT/fe/css/jquery-ui_ng.min.css</span></li>
                <li><span>@import /HT/fe/css/youWeb-icone.css</span></li>
                <li><span>@import /HT/fe/css/youWeb-xs-mobile-struttura.css</span></li>
                <li><span>@import /HT/fe/css/youWeb-sm-desktop-struttura.css</span></li>
            </ul>
        </li>
        <li><span><strong>Tutte le pagine proprie</strong> > caricare <strong>/HT/fe/css/print.css</strong></span></li>
        <li><span><strong>Pagine proprie vecchie</strong> > File CSS preesistenti</span></li>
        <li><span><strong>Pagine straniere nuove</strong> > File <strong>/HT/fe/css/youweb_skin.css</strong> aggiuntivo a quelli nuovi</span></li>
        <li><span><strong>Pagine straniere vecchie</strong> > File <strong>/HT/fe/css/youweb_skin_old.css</strong> aggiuntivo a quelli nuovi (casistica ancora non presente)</span></li>
    </ul>
</section>

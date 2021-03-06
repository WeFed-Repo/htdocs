import React, {PureComponent} from 'react';

const helpBody =  {

    "formfields": <><p>Esempio di help sulla label di un campo</p></>,

    "agenda": <p>Il Widget <strong>"Agenda"</strong> mostra gli eventi salvati all’interno del Sistema di posta aziendale Outlook. </p>,

    "rischio" : <div>
        <p>Il Grafico <strong>"Rischio in portafoglio"</strong> evidenzia quanti clienti presentano almeno un rischio che ecceda oltra la soglia ammissibile, determinata dal questionario MIFID.</p>
        <ul>
            <li><strong>Rischio mercato</strong> – viene verificata la congruenza fra il rischio di mercato del portafoglio attuale ed il rischio di mercato ammissibile del cliente. </li>
            <li><strong>Rischio credito</strong> – viene verificata la congruenza fra il rischio di credito del portafoglio attuale ed il livello di rischio di credito ammissibile del cliente.</li>
            <li><strong>Rischio liquidità</strong> – viene verificata la congruenza fra i controvalori espressi in termini percentuali dei prodotti illiquidi e le percentuali dichiarate dal cliente nel questionario di profilatura (orizzonti temporali).</li>
            <li><strong>Grey List</strong> –  viene verificata la concentrazione di prodotti complessi appartenenti alle categorie GreyList presenti nel portafoglio di ciascun cliente e confrontata con la soglia massima ammissibile.</li>
        </ul>
        <p>Se un cliente dovesse risultare fuori soglia per più rischi contemporaneamente esso verrà conteggiato all’interno delle diverse tipologie di rischio tante volte quanti sono i rischi su cui risulta esposto.</p>
    </div>
    ,
    "raccolta" : <p>Il Grafico <strong>"Raccolta per categorie di investimento"</strong> rappresenta la ripartizione in percentuale della raccolta complessiva dei propri clienti per le categorie elencate.</p>,

    "controvalore": <div><p>Il Grafico <strong>"Clienti per Patrimonio"</strong> rappresenta la ripartizione per target delle masse patrimoniali dei propri clienti a livello di NDG.</p><p>Sono riportati in calce al widget anche:</p>
    <ul>
    <li> Il <strong>numero totale dei clienti con patrimonio</strong>,  sono quindi esclusi i clienti con portafoglio a "0". Non sono altresì conteggiati i singoli intestatari di una cointestazione che detengono solo polizze. Interrogando la scheda di dettaglio della cointestazione è possibile comunque ricavare l’informazione sulle polizze detenute da ciascuno consultando la tabella "Dati bancari".</li>
    <li>Il valore <strong>totale del portafoglio</strong>, ricavato dalla somma del controvalore portafoglio di tutti i clienti (compresa la liquidità).</li></ul></div>,

    "mp":<p>Il Widget <strong>"Plus/Minusvalenza gestionale"</strong> mostra quanti clienti presentano una Plus/Minus valenza gestionale. Inoltre viene mostrata la variazione rispetto al giorno precedente: icona rossa se in diminuzione, icona verde se in aumento.</p>,

    "preferiti" : <p>Il widget "<strong>Clienti in Focus</strong>" mostra i primi 5 clienti con il controvalore di portafoglio più elevato.</p>,
    
    "alert": <div>
            <p>Il Widget "<strong>Alert e notifiche</strong>" segnala il numero di quei clienti sui quali è necessario compiere degli interventi per promuovere nuovi investimenti o per sanare situazioni critiche. Gli alert  rappresentati segnalano:</p>
            <ul>
                <li><strong>SCADENZA MIFID</strong> - Mostra quanti clienti presentano il questionario MIFID scaduto o in scadenza (a 30 giorni).</li>
                <li><strong>TITOLI SCADENZA</strong> - Mostra quanti clienti presentano in portafoglio titoli in scadenza (a 10 giorni).</li>
                <li><strong>SCADENZA ADEGUATA VERIFICA</strong> - Mostra quanti clienti presentano il profilo di adeguata verifica scaduto o in scadenza (a 30 giorni).</li>
                <li><strong>SCADENZA DOCUMENTI</strong> - Mostra quanti clienti presentano il proprio documento d’identità scaduto o in scadenza (a 30 giorni).</li>
                <li><strong>CONSISTENZA LIQUIDITA’</strong> - Mostra quanti clienti presentano il saldo liquido all’interno dei seguenti range: 
                    <ul>
                        <li>Alert rosso: Saldo c/c {"<"} 0 € </li> 
                        <li>Alert rosso: Saldo {">"} 10.000 € </li>
                        <li>Alert giallo 0 € {"<"} Saldo c/c {"<"} 500 € </li>
                        <li>Alert giallo 5.000 € {"<"} Saldo c/c {"<"} 10.000 €</li>
                        <li>Alert verde 500 € {"<"} saldo c/c {"<"} 5.000 €: non mostrato come notifica.</li> 
                    </ul>
                </li>
                <li><strong>COMPLEANNO</strong> -  Il widget "Compleanni" indica quanti clienti festeggiano il proprio compleanno quel giorno o nei 30 giorni successivi.</li>
            </ul>
        </div>,

    "proposte" : <div><p>Il Widget <strong>“Proposte di investimento”</strong> evidenzia il numero di proposte di consulenza effettuate (sia cartacee che tramite WebAdvisory). </p>
    <p>Gli stati che la proposta può assumere sono:</p>
            <ul>
                <li><strong>NUOVA</strong><br /> comprende le proposte negli stati: <i>WPPN – Nuova Pubblicata</i>: la proposta è disponibile sul sito YouWeb + <i>ACDC  Documento per Valutazione creato:</i> è la stampa per accettazione + <i>ACNE - Documento per Accettazione non valutato</i></li>
                <li><strong>IN VALUTAZIONE</strong><br /> comprende le proposte nello stato <i>UNEV - In Valutazione</i></li>
                <li><strong>SOPRAVVENUTA INADEGUATEZZA</strong><br /> comprende le proposte negli stati: <i>INEV - Sopravvenuta inadeguatezza in valutazione</i> + <i>WPIN - Sopravvenuta inadeguatezza in stato Nuovo</i></li>
                <li><strong>ACCETTATA</strong><br /> comprende le proposte nello stato <i>ACPT - Accettata</i></li>
                <li><strong>RIFIUTATA</strong><br /> comprende le proposte negli stati: <i> WPBR - Ritirata dal Private Banker</i> + <i>WPRJ - Nuova Rifiutata</i> + <i>ACRJ - Accettazione rifiutata</i></li>
                <li><strong>SCADUTA</strong><br /> comprende le proposte negli stati: <i>EVTM - Valutazione scaduta</i> + <i>WPTM - Nuova scaduta</i></li>
            </ul>
        </div>,
    "datibancari" : <div className="horizontal-scroller">
        <p>I codici tipologia indicati nella tabella <strong>"Dati Bancari"</strong> rappresentano le categorie prodotto indicate nella seguente tabella:</p>
        <table className="margin-bottom-20">
            <thead>
                <tr>
                    <th>Codici</th>
                    <th>Descrizione tipo rapporto</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>CCO</td>
                    <td>Conti Correnti</td>
                </tr>
                <tr>
                    <td>CCE</td>
                    <td>Conto Divisa</td>
                </tr>
                <tr>
                    <td>LIB</td>
                    <td>Libretto</td>
                </tr>
                <tr>
                    <td>CCR</td>
                    <td>Conto Rischio</td>
                </tr>
                <tr>
                    <td>DTF</td>
                    <td>Depositi Titoli</td>
                </tr>
                <tr>
                    <td>DTA</td>
                    <td>Polizze</td>
                </tr>
                <tr>
                    <td>CDE</td>
                    <td>Certificati di Deposito in eur</td>
                </tr>
                <tr>
                    <td>CDD</td>
                    <td>Certificati di Deposito in altre divise</td>
                </tr>
                <tr>
                    <td>GPI</td>
                    <td>Gestioni Patrimoniali</td>
                </tr>
            </tbody>
        </table>
    </div>,
    "categorieinvest" : <p>Il Grafico <strong>"Categorie di investimento"</strong> rappresenta la ripartizione in percentuale della raccolta complessiva dei propri clienti per le categorie elencate.</p>,
    "rischioport" : <div>
        <p>La tabella mostra:</p>
        <ul>
            <li><strong>Rischio mercato</strong> – viene verificata la congruenza fra il rischio di mercato del portafoglio attuale ed il rischio di mercato ammissibile del cliente.</li>
            <li><strong>Rischio credito</strong> – viene verificata la congruenza fra il rischio di credito del portafoglio attuale ed il livello di rischio di credito ammissibile del cliente. </li>
            <li><strong>Rischio liquidità</strong> – viene verificata la congruenza fra i controvalori espressi in termini percentuali dei prodotti illiquidi e le percentuali dichiarate dal cliente nel questionario di profilatura (orizzonti temporali).</li>
            <li><strong>Grey List</strong> - viene verificata la concentrazione di prodotti complessi appartenenti alle categorie GreyList presenti nel portafoglio del cliente e confrontata con la soglia massima ammissibile.</li>
        </ul>
    </div>,
    //PREVIEW CARTA IDENTITA'
    "01_numero" : <div className="doc-img"><img src="/img/01-numero.gif" alt="Numero carta d'identità elettronica"/></div>,
    "01_dataRinnovo" : <div className="doc-img"><img src="/img/01-rilascio.gif" alt="Data di rilascio carta d'identità elettronica"/></div>,
    "01_dataScadenza" : <div className="doc-img"><img src="/img/01-scadenza.gif" alt="Data di scadenza carta d'identità elettronica"/></div>,
    "12_numero" : <div className="doc-img"><img src="/img/12-numero.gif" alt="Numero carta d'identità rinnovata"/></div>,
    "12_dataRinnovo" : <div className="doc-img"><img src="/img/12-rilascio.gif" alt="Data di rilascio carta d'identità rinnovata"/></div>,
    "12_dataScadenza" : <div className="doc-img"><img src="/img/12-scadenza.gif" alt="Data di scadenza d'identità rinnovata"/></div>,
    "11_numero" : <div className="doc-img"><img src="/img/11-numero.gif" alt="Numero carta d'identità cartacea"/></div>,
    "11_dataRinnovo" : <div className="doc-img"><img src="/img/11-rilascio.gif" alt="Data di rilascio carta d'identità cartacea"/></div>,
    "11_dataScadenza" : <div className="doc-img"><img src="/img/11-scadenza.gif" alt="Data di scadenza d'identità cartacea"/></div>,
    "03_numero" : <div className="doc-img"><img src="/img/03-numero.gif" alt="Numero passaporto"/></div>,
    "03_dataRinnovo" : <div className="doc-img"><img src="/img/03-rilascio.gif" alt="Data di rilascio passaporto"/></div>,
    "03_dataScadenza" : <div className="doc-img"><img src="/img/03-scadenza.gif" alt="Data di scadenza passaporto"/></div>,
    "02_numero" : <div className="doc-img"><img src="/img/02-numero.gif" alt="Numero patente elettronica"/></div>,
    "02_dataRinnovo" : <div className="doc-img"><img src="/img/02-rilascio.gif" alt="Data di rilascio patente elettronica"/></div>,
    "02_dataScadenza" : <div className="doc-img"><img src="/img/02-scadenza.gif" alt="Data di scadenza patente elettronica"/></div>,
    "13_numero" : <div className="doc-img"><img src="/img/13-numero.gif" alt="Numero patente cartacea"/></div>,
    "13_dataRinnovo" : <div className="doc-img"><img src="/img/13-rilascio.gif" alt="Data di rilascio patente cartacea"/></div>,
    "13_dataScadenza" : <div className="doc-img"><img src="/img/13-scadenza.gif" alt="Data di scadenza patente cartacea"/></div>,
    "14_numero" : <div className="doc-img"><img src="/img/14-numero.gif" alt="Numero patente rinnovata"/></div>,
    "14_dataRinnovo" : <div className="doc-img"><img src="/img/14-rilascio.gif" alt="Data di rilascio patente rinnovata"/></div>,
    "14_dataScadenza" : <div className="doc-img"><img src="/img/14-scadenza.gif" alt="Data di scadenza patente rinnovata"/></div>,
    "polEsp": <div>
        <strong>PERSONA POLITICAMENTE ESPOSTA</strong><br />
        Art. 1 comma 2 lettera dd) del D.lgs. 231/2007 e s.m.i.<br />
        dd) persone politicamente esposte: le persone fisiche che occupano o hanno cessato di occupare da meno di un anno importanti cariche pubbliche, nonchè i loro familiari e coloro che con i predetti soggetti intrattengono notoriamente stretti legami, come di seguito elencate:<br />
        <ul>
            <li>sono persone fisiche che occupano o hanno occupato importanti cariche pubbliche coloro che ricoprono o hanno ricoperto(*) la carica di:
                <ul>
                    <li>Presidente della Repubblica, Presidente del Consiglio, Ministro, Vice-Ministro e Sottosegretario, Presidente di Regione, assessore regionale, Sindaco di capoluogo di provincia o città metropolitana, Sindaco di comune con popolazione non inferiore a 15.000 abitanti nonchè cariche analoghe in Stati esteri;</li>
                    <li>deputato, senatore, parlamentare europeo, consigliere regionale nonchè cariche analoghe in Stati esteri;</li>
                    <li>membro degli organi direttivi centrali di partiti politici;</li>
                    <li>giudice della Corte Costituzionale, magistrato della Corte di Cassazione o della Corte dei conti, consigliere di Stato e altri componenti del Consiglio di Giustizia Amministrativa per la Regione siciliana nonchè cariche analoghe in Stati esteri;</li>
                    <li>membro degli organi direttivi delle banche centrali e delle autorità indipendenti;</li>
                    <li>ambasciatore, incaricato d'affari ovvero cariche equivalenti in Stati esteri, ufficiale di grado apicale delle forze armate ovvero cariche analoghe in Stati esteri;</li>
                    <li>componente degli organi di amministrazione, direzione o controllo delle imprese controllate, anche indirettamente, dallo Stato italiano o da uno Stato estero ovvero partecipate, in misura prevalente o totalitaria, dalle Regioni, da comuni capoluoghi di provincia e città metropolitane e da comuni con popolazione complessivamente non inferiore a 15.000 abitanti;</li>
                    <li>direttore generale di ASL e di azienda ospedaliera, di azienda ospedaliera universitaria e degli altri enti del servizio sanitario nazionale;</li>
                    <li>direttore, vicedirettore e membro dell'organo di gestione o soggetto svolgenti funzioni equivalenti in organizzazioni internazionali.</li>
                </ul>    
            </li>    
            <li>Sono familiari di persone politicamente esposte: i genitori, il coniuge o la persona legata in unione civile o convivenza di fatto o istituti assimilabili alla persona politicamente esposta, i figli e i loro coniugi nonchè le persone legate ai figli in unione civile o convivenza di fatto o istituti assimilabili;</li>
            <li>Sono soggetti con i quali le persone politicamente esposte intrattengono notoriamente stretti legami:
                <ul>
                    <li>le persone fisiche legate alla persona politicamente esposta per via della titolarità effettiva congiunta di enti giuridici o di altro stretto rapporto di affari;</li>
                    <li>le persone fisiche che detengono solo formalmente il controllo totalitario di un'entità notoriamente costituita, di fatto, nell'interesse e a beneficio di una persona politicamente esposta;</li>
                </ul>
            </li>
        </ul>
        (*) Il gruppo BANCO BPM estende prudenzialmente la definizione di persone politicamente esposte alle persone fisiche che occupano o hanno cessato di occupare cariche pubbliche da meno di tre anni, applicando in coerenza le relative previsioni normative.<br />
        Art. 24 comma 6 del D.lgs. 231/2007 e s.m.i.<br />
        6. I soggetti obbligati, in presenza di un elevato rischio di riciclaggio o di finanziamento del terrorismo applicano misure di adeguata verifica rafforzata di clienti che, originariamente individuati come persone politicamente esposte, abbiano cessato di rivestire le relative cariche pubbliche da più di un anno. La medesima disposizione si applica anche nelle ipotesi in cui il beneficiario della prestazione assicurativa o il titolare effettivo del beneficiario siano state persone politicamente esposte.
    </div>,
    "titEffettivo": ""

}

export default class extends PureComponent {

    render() {
            return ((helpBody[this.props.arg])? helpBody[this.props.arg] : <i>Argomento "<strong>{this.props.arg}</strong>" momentaneamente non disponibile nella guida.</i>);

    }

}

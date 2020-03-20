import React, {PureComponent} from 'react';
import _ from "lodash-es";
import {SortableContainer,SortableElement,SortableHandle,arrayMove} from 'react-sortable-hoc';
import Widget from 'components/dashboard/widgets';
import {NavLink} from 'react-router-dom';
import DbContext from './DbContext';

/* ATTENZIONE RIMOSSI WIDGET NEWS E INDICI */
const widgetConf = {
  "rischio" : {"descrizione":"Rischi in portafoglio"},
  "raccolta" : {"descrizione":"Categorie di Investimento"},
  "controvalore" : {  "descrizione":"Clienti per patrimonio"},
  "agenda" : {"descrizione":"Agenda"},
  "alert" : {"descrizione":"Alert e notifiche"},
  "mp" : { "descrizione":"Plus/Minusvalenza gestionale" },
  "preferiti" : {"descrizione":"Clienti in Focus"},
  /*
  "indici" : {"descrizione":"Mercati finanziari"},
  "news" : {"descrizione": "Breaking news"},
  */
  "proposte": {"descrizione": "Proposte investimento"}
}

/*
class RadBanner extends PureComponent {
    render() {
        return(
            <NavLink to="/onboarding" className="ban-conto">Onboarding</NavLink>
        )
    }

}
*/

class generateWidgets extends PureComponent {
    render() {
      let items = this.props.items,
        hiddenMode = this.props.hiddenMode;
      return (
      <div className='dashboard'>
        <h1>DASHBOARD</h1>
          {
             _.map(items, (function (n, i) {
                 return(
                  <DraggableWidget n={n} index={i} key={n} id={n} hiddenMode={hiddenMode} handle={<WidgetHandle descrizione={widgetConf[n].descrizione} funzione={n} hiddenMode={hiddenMode}/>}/>
                )
              }))
            }
            { /* (this.props.hiddenMode) && <RadBanner /> */}
      </div>
    )
    }
}

const WidgetHandle = SortableHandle(({descrizione,funzione,hiddenMode})=>{
  let linkpath = "/customers/"+ funzione;
  if (funzione === "agenda") linkpath = "/agenda";
  if (funzione === "news") linkpath = "/news";
  /* return(<div className="handle">{(!hiddenMode)? <NavLink className="widget-title" to={linkpath}>{descrizione}</NavLink> : <span className="widget-title">{descrizione}</span>}</div>) */
  return(<div className="handle">{(!hiddenMode && descrizione==="Agenda")? <NavLink className="widget-title" to={linkpath}>{descrizione}</NavLink> : <span className="widget-title">{descrizione}</span>}</div>) 
});


const DraggableWidget = SortableElement(Widget);

const DashboardWidgets = SortableContainer(generateWidgets);

/* Elenco widget per modalita' hidden */
const widgetHiddenMode = ["agenda","indici","news"];

class DashboardWrapper extends PureComponent {
    

    constructor(props) {
        super(props);
        let widget;
        if (this.props.hiddenMode=== true)
            {
                widget =  widgetHiddenMode
            }
            else if (this.props.data.results && this.props.data.results[0]) {
                widget =  this.props.data.results[0].value.split(",");
            }
            else {
                widget = [];
            }

        this.state = {
            /* ATTENZIONE RIMOSSI WIDGET NEWS E INDICI */
            items: widget.filter(function(wdg){return (wdg !== "news" && wdg !== "indici");}),
            widgetOrderSave: false,
            ndgPreferiti: []            
        };
    }

    onSortEnd = ({oldIndex,newIndex}) => {
      this.setState({
        items: arrayMove(this.state.items,oldIndex,newIndex),
        widgetOrderSave: true
      });

      /* Effettua la chiamata "a perdere" per salvare SENZA feedback: richiesto da F. Domanin */
     fetch("/promotori/dashboard/rest/configuration/WIDGET/upsert",{
        method : "POST",
        headers: new Headers({
            "Accept": "application/json",
            "Content-Type": "application/json"
        }),
        body : JSON.stringify({
                key: "ORDER",
                value: this.state.items.join(",")
            })
        }).then(response => {
            if (response.ok) {
                try {
                    console.log ("Salvataggio configurazione widget eseguito.");
                } catch {
                    console.log("Salvataggio non eseguito.");
                }
            }
        });

    };

    /*
    dbRefreshFunction = ()=>{
        this.setState({
            key: this.state.key + 1
        })
    }
    */

    render() {

        window["ndgPreferiti"] = [];

        return (
            <div key={this.state.key}>
                <DbContext.Provider value={{ goToCustomersSearch : this.props.goToCustomersSearch}}>
                    <DashboardWidgets axis="xy" items={this.state.items} hiddenMode={this.props.hiddenMode} onSortEnd={(!this.props.hiddenMode) ? this.onSortEnd : ""} distance={5} helperClass="isDragging" useDragHandle={true} />
                </DbContext.Provider>
            </div>
        )
    }
}

export default DashboardWrapper;

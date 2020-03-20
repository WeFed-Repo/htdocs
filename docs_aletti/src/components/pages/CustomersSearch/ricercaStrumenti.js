import React, {PureComponent} from 'react';
import { Alert } from 'reactstrap';
import DefaultTable from 'components/parts/DefaultTable';
import ClientiPerStrumento from './clientiPerStrumento';


class RicercaStrumenti extends PureComponent {

    constructor(props) {
        super(props);
        this.linkstrumento = this.linkstrumento.bind(this);
    }
    
    state = {
        strumentoTrovato: null
    }

    /* Gestori per la formattazione della tabella */
    linkstrumento(cell, row) {

        if (row.cod_area_finanza) {
            return (<span className="table-link" onClick={row.setSearchIsin} title="Mostra i clienti che hanno questo strumento">{cell}</span>)
        }
        else
        {
            return (cell)
        }
    }

    // Colonne della tabella risultati
    strumentiColumns = [
    {
        text: 'ISIN', 
        dataField: "cod_isin_strumento", 
        sort:true        
    },
    {
        text: 'Strumento',
        dataField: "descrizione_strumento",
        formatter: this.linkstrumento,
        sort:true
    },
    {
        text: 'Tipo Strumento',
        dataField: "descrizione_tipo_strumento",
        sort:true
    },
    {
        text: "Divisa",
        dataField: "divisa_strumento",
        sort:true
    },
    {
        text: "Micro asset class",
        dataField: "descrizione_micro_asset_class",
        sort:true
    },
    {
        text: "Macro asset class",
        dataField: "descrizione_macro_asset_class",
        sort:true
    },
    {
        text: "Emittente",
        dataField: "descrizione_emittente",
        sort:true
    },
    {
        text: "Prodotto in evidenza",
        dataField: "flag_prodotto_evidenza",
        sort:true
    }
    ];

    render() {

        let tData = [],
        searchData = this.props.params;

        searchData.data.forEach((obj,i)=>{

            // Applica eventuali filtri
            let putrow = true;

            // filtro isin
            if (putrow && searchData.isin!== "") {
                if (!obj.cod_isin_strumento || !(obj.cod_isin_strumento.toLowerCase().indexOf(searchData.isin.toLowerCase()) >= 0)) putrow = false;
            }

            // filtro strumento
            if (putrow && searchData.strumento!== "") {
                if (!obj.descrizione_strumento || !(obj.descrizione_strumento.toLowerCase().indexOf(searchData.strumento.toLowerCase()) >= 0)) putrow = false;
            }

            // Tipo
            if (putrow && searchData.tipo!== "") {
                if (!obj.codice_tipo_strumento || !(obj.codice_tipo_strumento===searchData.tipo)) putrow = false;
            }

            // Divisa (select)
            if (putrow && searchData.divisa!== "") {
                if (!obj.divisa_strumento || !(obj.divisa_strumento===searchData.divisa)) putrow = false;
            }

            // Emittente
            if (putrow && searchData.emittente!== "") {
                if (!obj.cod_emittente || !(obj.cod_emittente===searchData.emittente)) putrow = false;
            }

            // Titoli in evidenza
            if (putrow && searchData.evidenza!== "") {
                // Nel caso specifico "N" e nulli vengono mostrati insieme
                if (obj.flag_prodotto_evidenza) {
                    if (obj.flag_prodotto_evidenza !== searchData.evidenza) putrow = false;
                }
                else
                {
                    if(searchData.evidenza !=="N") {
                        putrow = false;
                    }
                }
            }

            // Aggiunge eventuali altri campi
            Object.assign(obj,{
                id: i,
                setSearchIsin: ()=>this.setState({strumentoTrovato: obj})
            });

            if (putrow) tData.push(obj);
        });

        


        return  (
        <div>
            
            {tData.length <= 0 && // Caso senza dati
                    <>
                        <h2>Tabella dei risultati</h2>
                        <Alert color="secondary"><p className="mb-0">La ricerca non ha prodotto risultati.</p></Alert>
                    </>
                }
            {tData.length > 0 &&
                // Caso con dati
                <div className="ricerca-strumenti">
                    <div style={{display: (!this.state.strumentoTrovato)? "" : "none"}}>
                        <h2>Tabella dei risultati</h2>
                        <DefaultTable data={tData} columns={this.strumentiColumns} />
                    </div>
                    {this.state.strumentoTrovato && <ClientiPerStrumento strumento={this.state.strumentoTrovato} backFunction={()=>{this.setState({strumentoTrovato:null})}}/>                           }
                </div>
            }

        </div>
        )

    }
}

export default RicercaStrumenti;
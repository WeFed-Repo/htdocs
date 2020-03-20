import { ambiente } from 'functions/genericVars';


/* URL PER LE CHIAMATE (VARIABILE STATICA)*/
window.jsonUrl = {

    /* Dashboard */
    "dashboard":   (ambiente.isSviluppo || ambiente.isProduzione) ? "/promotori/dashboard/rest/configuration/WIDGET" : "/json_data/dashboard.json",

    /* Ricerca cliente */
    "customers":  (ambiente.isSviluppo || ambiente.isProduzione) ? "/promotori/dashboard/rest/deus/clients" : "/json_data/customers_search_data.json" ,

    /* Dati cliente */
    "customer":  (ambiente.isSviluppo || ambiente.isProduzione) ? "/promotori/dashboard/rest/schedacliente/datibase" : "/json_data/customer/datibase.json",
    "customer_datibancari":  (ambiente.isSviluppo || ambiente.isProduzione) ? "/promotori/dashboard/rest/schedacliente/datibancari" : "/json_data/customer/datibancari.json",
    "customer_documenti":  (ambiente.isSviluppo || ambiente.isProduzione) ? "/promotori/dashboard/rest/instadoc/getList" : "/json_data/customer/documenti.json",
    "customer_movimenti":  (ambiente.isSviluppo || ambiente.isProduzione) ? "/promotori/dashboard/rest/banking/movimenti" : "/json_data/customer/movimenti.json",
    "customer_documenti_all":  (ambiente.isSviluppo || ambiente.isProduzione) ? "/promotori/dashboard/rest/instadoc/getList" : "/json_data/customer/documenti_all.json",
    "customer_movimenti_all":  (ambiente.isSviluppo || ambiente.isProduzione) ? "/promotori/dashboard/rest/banking/movimenti" : "/json_data/customer/movimenti_all.json",

    /* Widget STATICI per DEMO */
    "dashboard_widget_indici": "/json_data/dashboard_widget_indici.json",
    "dashboard_widget_news": "/json_data/dashboard_widget_news.json",
    "dashboard_widget_preferiti":  (ambiente.isSviluppo || ambiente.isProduzione) ? "/promotori/dashboard/rest/deus/clients" : "/json_data/customers_search_data.json",

    /* Widget dinamici */
    "dashboard_widget_agenda":  (ambiente.isSviluppo || ambiente.isProduzione) ? "/promotori/dashboard/rest/appointment/getFullAppointments" : "/json_data/appointment/getAppointments.json",
    "dashboard_widget_raccolta":  (ambiente.isSviluppo || ambiente.isProduzione) ? "/promotori/dashboard/rest/deus/getAssetClass" : "/json_data/dashboard/getAssetClass.json",
    "dashboard_widget_controvalore":  (ambiente.isSviluppo || ambiente.isProduzione) ? "/promotori/dashboard/rest/deus/getClientiPatrimonio" : "/json_data/dashboard/getClientiPatrimonio.json",
    "dashboard_widget_rischio":  (ambiente.isSviluppo || ambiente.isProduzione) ? "/promotori/dashboard/rest/deus/getRischioPortafoglio" : "/json_data/dashboard/getRischioPortafoglio.json",
    "dashboard_widget_mp":  (ambiente.isSviluppo || ambiente.isProduzione) ? "/promotori/dashboard/rest/deus/getClientiPlusMinus" : "/json_data/dashboard/getClientiPlusMinus.json",
    "dashboard_widget_alert":  (ambiente.isSviluppo || ambiente.isProduzione) ? "/promotori/dashboard/rest/alert/all" : "/json_data/dashboard/alert_all.json",
    "dashboard_widget_proposte":  (ambiente.isSviluppo || ambiente.isProduzione) ? "/promotori/dashboard/rest/deus/getProposalByPromotore" : "/json_data/dashboard/getProposalByPromotore.json",

    /* Modali */
    /* "dashboard_modal_customers_data": "/json_data/dashboard_modal_customers_data.json",*/
    "dashboard_modal_agenda": "/json_data/dashboard_modal_agenda.json"
};

const defaultAjaxData = {};
Object.keys(window.jsonUrl).forEach(function (key) {
        defaultAjaxData[key] = {
            error: '',
            isLoading: false,
            updatedAt: null,
            json: null
        }
    }
);

const ajaxData = (state = defaultAjaxData, action) => {
    switch (action.type) {
        case 'LOAD_REQUEST':
            return {
                ...state,
                [action.key]: {
                    isLoading: true,
                    error: ''
                }
            };
        case 'LOAD_SUCCESS':
            return {
                ...state,
                [action.key]: {
                    isLoading: false,
                    json: action.json,
                    updatedAt: action.updatedAt
                }
            };
        case 'LOAD_FAILURE':
            return {
                ...state,
                [action.key]: {
                    isLoading: false,
                    error: action.error
                }
            };
        default:
            return state
    }
};

export default ajaxData;

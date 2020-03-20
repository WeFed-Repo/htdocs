import React, {PureComponent, Component} from 'react';
import moment from "moment";
import './style.scss';
// Widget dinamici
import WidgetAgenda from 'components/dashboard/widgets/WidgetAgenda';
import WidgetAlert from 'components/dashboard/widgets/WidgetAlert';
import WidgetControvalore from 'components/dashboard/widgets/WidgetControvalore';
import WidgetIndici from 'components/dashboard/widgets/WidgetIndici';
import WidgetMp from 'components/dashboard/widgets/WidgetMp';
import WidgetNews from 'components/dashboard/widgets/WidgetNews';
import WidgetPreferiti from 'components/dashboard/widgets/WidgetPreferiti';
import WidgetRaccolta from 'components/dashboard/widgets/WidgetRaccolta';
import WidgetRischio from 'components/dashboard/widgets/WidgetRischio';
import WidgetProposte from 'components/dashboard/widgets/WidgetProposte';
import withAjax from 'components/wrappers/withAjax';
// import DefaultModal from 'components/parts/DefaultModal';
import HelpBtn from 'components/parts/Help'

const WidgetAgendaAjax = withAjax(WidgetAgenda, "dashboard_widget_agenda");
const WidgetAlertAjax = withAjax(WidgetAlert, "dashboard_widget_alert");
const WidgeControvaloreAjax = withAjax(WidgetControvalore, "dashboard_widget_controvalore");
const WidgetIndiciAjax = withAjax(WidgetIndici, "dashboard_widget_indici");
const WidgetMpAjax = withAjax(WidgetMp, "dashboard_widget_mp");
const WidgetNewsAjax = withAjax(WidgetNews, "dashboard_widget_news");
const WidgetPreferitiAjax = withAjax(WidgetPreferiti, "dashboard_widget_preferiti");
const WidgetRaccoltaAjax = withAjax(WidgetRaccolta, "dashboard_widget_raccolta");
const WidgetRischioAjax = withAjax(WidgetRischio, "dashboard_widget_rischio");
const WidgetProposteAjax = withAjax(WidgetProposte, "dashboard_widget_proposte");

class WidgetBody extends Component {

    render() {

        const widgetName = this.props.id,
        hiddenMode = this.props.hiddenMode;

        switch (widgetName) {
            case "agenda":

                // Determina data di inizio e data di fine (da -1 anno a + 1 anno)
                let datafrom = moment().startOf("month").valueOf(), 
                    datato= moment().add(1,"month").endOf("month").valueOf();
                return (<WidgetAgendaAjax initialData={{"appointments": {}}} hiddenMode={hiddenMode} initialLoading={true} params={{"searchDateBegin":datafrom, "searchDateEnd":datato}}/>);

            case "alert":
                return (<WidgetAlertAjax initialData={{"data":[]}} initialLoading={true} params={{"classificazione":""}} />);

            case "controvalore":
                return (<WidgeControvaloreAjax initialData={{"data":[]}} initialLoading={true} hiddenMode={hiddenMode} params={{"classificazione":""}} />);

            case "indici":
                return (<WidgetIndiciAjax initialData={{"data":[]}} initialLoading={true} hiddenMode={hiddenMode} />);

            case "mp":
                return (<WidgetMpAjax initialData={[]} initialLoading={true} hiddenMode={hiddenMode} params={{"classificazione":""}}/>);

            case "news":
                return (<WidgetNewsAjax initialData={{"data":[]}} initialLoading={true} hiddenMode={hiddenMode}/>);

            case "preferiti":
                return (<WidgetPreferitiAjax initialData={[]} initialLoading={true} params={{"classificazione":""}} refreshFunction={this.props.refreshFunction}/>);

            case "raccolta":
                return (<WidgetRaccoltaAjax initialData={{"data":[]}} initialLoading={true} hiddenMode={hiddenMode} params={{"classificazione":""}}/>);

            case "rischio":
                return (<WidgetRischioAjax initialData={{"data":[]}} initialLoading={true}  hiddenMode={hiddenMode} params={{"classificazione":""}}/>);

            case "proposte":
                return (<WidgetProposteAjax initialData={{"data":[]}} initialLoading={true}  hiddenMode={hiddenMode} params={{"classificazione":"TUTTI"}}/>);

            default: return "";
        }
    }
}

class Widget extends PureComponent {

    constructor (props) {
        super(props);
        this.state = {
            refreshCounter: 0
        }
        this.refreshWidget = this.refreshWidget.bind(this);
    }

    refreshWidget () {
        this.setState({
            refreshCounter: this.state.refreshCounter + 1
        })
    }


    render() {

      const { id, widgetData } = this.props;
    
      return (
            <div className={"widget" + ((this.props.hiddenMode)? " hiddenmode" : "")} id={this.props.id} key={id}>
              <div className="widget-box"><HelpBtn arg={this.props.id} />
                {this.props.handle}
                <WidgetBody id={this.props.id} hiddenMode={this.props.hiddenMode} dataFromCall={widgetData} key={"widgetbody_"+id+ "_"+ this.state.refreshCounter} refreshFunction={this.refreshWidget}/>
               </div>
            </div>
        );
    }
}

export default (Widget);

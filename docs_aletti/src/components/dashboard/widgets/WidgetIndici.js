import React, {PureComponent} from 'react';
import formatNumber from 'functions/rad/formatNumber';
import formatDate from 'functions/rad/formatDate';
import _ from "lodash-es";

class WidgetIndici extends PureComponent {

  render(){

    let dataIndici = this.props.data.data,
      rowindex=0;

     /* Forzature per simulazione  */
    this.props.data.timestamp = Date.now() - 86400000;


    if (dataIndici.length>0) {
      return (
        <div className="widget-body">
          <div className="d-none d-xl-block">
            <div className="world-map">
            {
                  _.map(dataIndici, function(row){
                      rowindex +=1;
                      let percSign ="", segno = "neutro";
                      if(row.indice>0) {percSign = "+"; segno = "positivo" }
                      if(row.indice<0) {segno = "negativo" }
                      return(
                        <div className="world-indice" id={row.id} key={rowindex}><span>{row.mercato}</span><span className={segno}>{(" " + percSign + formatNumber(row.indice))}</span></div>
                      )
                  })
            }
            </div>
            </div>
            <div className="d-block d-xl-none">
              <table>
              <thead>
                <tr>
                  <th>Mercato</th>
                  <th className="right">%</th>
                </tr>
              </thead>
              <tbody>
              {
                  _.map(dataIndici, function(row){
                    var percSign ="", segno = "neutro";
                    rowindex+=1;
                    if(percSign>0) {percSign = "+"; segno = "positivo" }
                    if(percSign<0) {segno = "negativo" }
                      return(
                        <tr key={rowindex}><td>{row.mercato}</td><td className="right"><span className={segno}>{(percSign + formatNumber(row.indice))}</span></td></tr>
                      )
                  })
              }
              </tbody>
            </table>
          </div>
          <div className="aggDate"><div className="aggDate-text">Aggiornato al {formatDate(this.props.data.timestamp)}</div></div>
        </div>
      )
    }
    else {
        return(<div className="noDisp"><span>Nessun dato disponibile</span></div>);
    }
    }
}

export default WidgetIndici;

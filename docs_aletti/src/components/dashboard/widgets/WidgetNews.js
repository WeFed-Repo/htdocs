import React, {PureComponent} from 'react';
import formatDate from 'functions/rad/formatDate';
// import {NavLink} from 'react-router-dom';
import {textCut} from 'functions/tableFunctions'

import _ from "lodash-es";

class WidgetNews extends PureComponent {

  render() {
  let dataNews = this.props.data, rowindex=0;
    return(
      <div className="widget-body">
        <div className="scrollable">
          {(dataNews.data.length>0) &&
            _.map(dataNews.data, function(obj) {
              rowindex+=1;
              return (

                <div className={(rowindex % 2 === 0)?"news-block pari" : "news-block dispari"} to={"/news/" + obj.id}  key={rowindex}>
                  <div className="el-box">
                      <h3>{textCut(obj.titolo,40)}</h3>
                      <span>{textCut(obj.abstract,40)}</span>
                      <span className="news-date">{formatDate(obj.timestamp,true)}</span>
                  </div>
                </div>
              )
            })
          }
          {!dataNews.data.length && <div className="noDisp"><span>Nessun dato disponibile</span></div>}
        </div>
      </div>
    );
  }
}

export default WidgetNews;

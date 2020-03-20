import React, {PureComponent} from 'react';

/*
import DefaultCarousel from 'components/parts/DefaultCarousel'
import formatDate from 'functions/rad/formatDate';
*/
import './../style.scss'

export default class extends PureComponent {

    render() {

        let customerData = this.props.data;

        return(
        <div className="relazioni">
            {/*
            <div className="bordered-block">
                <h2>Prossimo contatto</h2>
                    {
                        (customerData.prossimocontatto && customerData.prossimocontatto[0])?
                        <div className="scheda">
                            <div className="data">{formatDate(customerData.prossimocontatto[0].timestamp)}</div>
                            <div className="desc">{customerData.prossimocontatto[0].desc}</div>
                        </div>
                        :
                        <p className="noDisp">Nessun dato disponibile</p>
                    }
            </div>
            
            <div className="bordered-block">
                <h2>Prossimo appuntamento</h2>
                {
                    (customerData.prossimoappuntamento && customerData.prossimoappuntamento[0])?
                    <div className="scheda">
                        <div className="data">{formatDate(customerData.prossimoappuntamento[0].timestamp)}</div>
                        <div className="desc">{customerData.prossimoappuntamento[0].desc}</div>
                    </div>
                    :
                    <p className="noDisp">Nessun dato disponibile</p>
                }
            </div>
            
            <div className="bordered-block">
                <h2>Alert</h2>
                {(customerData.alert)?
                    <DefaultCarousel slides={
                    customerData.alert.map(function(obj,i){
                       return(
                           <div className="scheda" key={i}>
                               <div className="data">{formatDate(obj.timestamp)}</div>
                               <div className="desc">{obj.desc}</div>
                           </div>
                       )
                   })} />

                    :
                    <p className="noDisp">Nessun dato disponibile</p>

                }
            </div>

            <div className="bordered-block">
                <h2>Memo</h2>
                {(customerData.memo)?
                    <DefaultCarousel slides={
                    customerData.memo.map(function(obj,i){
                       return(
                           <div className="scheda" key={i}>
                               <div className="data">{formatDate(obj.timestamp)}</div>
                               <div className="desc">{obj.desc}</div>
                           </div>
                       )
                   })} />

                    :
                    <p className="noDisp">Nessun dato disponibile</p>

                }
            </div>
            */}

         
            <BoxCompleanno dataCompleanno={customerData.dataCompleanno}></BoxCompleanno>
            <BoxInteressi ndg={this.props.params.ndg}></BoxInteressi>
          
            {/*
            <div className="bordered-block">
                <h2>Relazioni</h2>
                <div className="cloud-box">
                    {
                        customerData.relazioni && customerData.relazioni.map(function(obj,i){
                            return(<div className="cloud-arg" key={i} title={obj}>{obj}</div>)
                        })
                    }
                <span className="cloud-insert"></span>
                </div>
            </div>
            */}
        </div>
        )
    }

}

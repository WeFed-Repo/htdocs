import React, {PureComponent} from 'react';
import DefaultCarousel from "components/parts/DefaultCarousel";

export default class extends PureComponent {
    
    render() {

        let alert = this.props.alert;
        
        return(
            <div className="bordered-block">
                <h2>Alert</h2>
                {function(){
                    if(alert && alert.length>0) {

                        // Prepara le slides del carousel
                        let slides = alert.map((el,i)=>{
                            return (<div className="carousel-slide slide-alert" key={i}>
                                {el.data && <span className="date">{el.data}<br/></span>}
                                <span className="description">{el.description}</span>
                                </div>)
                        })

                        return (<DefaultCarousel slides={slides}>{
                          
                        }</DefaultCarousel>)
                    }
                    else
                    {
                        return <p>Non ci sono alert in agenda</p>
                    }    
                }()}
            </div>
        )
    }
}
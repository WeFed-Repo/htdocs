import React, {PureComponent} from 'react';
import {Carousel,CarouselItem,CarouselIndicators} from 'reactstrap';

import './style.scss';

export default class extends PureComponent {

    constructor(props) {
        super(props);
        this.state = {activeIndex: 0};
        this.next = this.next.bind(this);
        this.previous = this.previous.bind(this);
        this.goToIndex = this.goToIndex.bind(this);
    }

    next() {
        if(this.animating) return;
        const nextIndex = this.state.activeIndex === this.props.slides.length -1? 0 : this.state.activeIndex + 1;
        this.setState({activeIndex: nextIndex});
    }

    previous() {
        if(this.animating) return;
        const nextIndex = this.state.activeIndex === 0 ? this.props.slides.length - 1 : this.state.activeIndex -1;
        this.setState({activeIndex: nextIndex});
    }

    goToIndex(newIndex) {
        if(this.animating) return;
        this.setState({activeIndex: newIndex});
    }



    render() {

        const {activeIndex} = this.state;
        let itemIndex = 0;

        return (

            <Carousel activeIndex={activeIndex} next={this.next} previous={this.previous}>
                {this.props.slides.map(function(obj){
                    itemIndex +=1;
                    return(<CarouselItem key={itemIndex}>{obj}</CarouselItem>);
                })}
                <CarouselIndicators items={this.props.slides} activeIndex={activeIndex} onClickHandler={this.goToIndex} />
            </Carousel>

        )


    }

}

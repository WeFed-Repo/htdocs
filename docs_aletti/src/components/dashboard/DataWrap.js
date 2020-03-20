import React, {PureComponent} from 'react';

class DataWrap extends PureComponent{
    render() {
        return(
            <div>{this.props.data.widget}</div>
        )
    }
}
export default DataWrap;

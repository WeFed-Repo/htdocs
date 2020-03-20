import React, {PureComponent} from 'react';
import DashboardWrapper from "components/dashboard";
import withAjax from 'components/wrappers/withAjax';
import "./style.css"

const DashboardWrapperAjax = withAjax(DashboardWrapper,"dashboard")

class Dashboard extends PureComponent {

    constructor(props) {
        super(props);
        this.state = {
            key: 0
        }
        this.sendRefresh = this.sendRefresh.bind(this);
        this.params  ={"widgets": []}

    }

    sendRefresh = ({params}) => {

        this.setState({
            key: this.state.key + 1,
        });
        this.params = params;
    }


    render () {

        return (
            <DashboardWrapperAjax goToCustomersSearch={this.props.goToCustomersSearch} initialData={{"widget": []}} initialLoading={true} hiddenMode={this.props.hiddenMode} params={this.params} sendRefresh={this.sendRefresh} key={this.state.key}/>
        )
    }
}

export default Dashboard;

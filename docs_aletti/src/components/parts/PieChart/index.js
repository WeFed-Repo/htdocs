import 'amcharts3/amcharts/amcharts';
import 'amcharts3/amcharts/pie';
import React, { Component } from 'react';
import PropTypes from 'prop-types';
import AmCharts from '@amcharts/amcharts3-react';
import './style.css';

class PieChart extends Component {
    render() {
        return (
            <div className="piechart" style={{
                width: this.props.width,
                height: this.props.height
            }}>
                <AmCharts.React className="piechart-react" options={this.props.config} />
            </div>
        );
    }
}

PieChart.defaultProps = {
    width: '400px',
    height: '400px'
};

PieChart.propTypes = {
    config: PropTypes.object.isRequired,
    width: PropTypes.string,
    height: PropTypes.string
};

export default PieChart;

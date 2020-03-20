import React, {Component} from 'react';
import PieChart from 'components/parts/PieChart';
import './style.css';

class Commissioning extends Component {
    render() {
        const config = {
            "type": "pie",
            "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
            "labelText": "",
            "pullOutRadius": "0%",
            "labelsEnabled": false,
            "pullOutDuration": 0,
            "startDuration": 0,
            "titleField": "country",
            "valueField": "litres",
            "fontSize": 12,
            "processTimeout": 4,
            "theme": "default",
            "allLabels": [],
            "balloon": {},
            "titles": [],
            "dataProvider": [
                {
                    "country": "Czech Republic",
                    "litres": "356.9"
                },
                {
                    "country": "Ireland",
                    "litres": 131.1
                },
                {
                    "country": "Germany",
                    "litres": 115.8
                },
                {
                    "country": "Australia",
                    "litres": 109.9
                },
                {
                    "country": "Austria",
                    "litres": 108.3
                },
                {
                    "country": "UK",
                    "litres": 65
                },
                {
                    "country": "Belgium",
                    "litres": "20"
                }
            ]
        };
        return (
            <div className='Commissioning'>
                <h1>Situazione portafoglio</h1>
                <PieChart config={config}/>
            </div>
        );
    }
}

export default Commissioning;

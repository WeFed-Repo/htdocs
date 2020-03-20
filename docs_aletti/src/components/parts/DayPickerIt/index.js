import React, { PureComponent } from 'react';
import DayPicker from "react-day-picker";
import DayPickerInput from "react-day-picker/DayPickerInput";
import MomentLocaleUtils from "react-day-picker/moment";
import { CustomInput } from 'reactstrap';
import 'moment/locale/it';
import 'react-day-picker/lib/style.css';
import './style.scss';

const { formatDate, parseDate } = MomentLocaleUtils;

function YearMonthForm({ date, fromMonth, toMonth, localeUtils, onChange }) {
    const months = localeUtils.getMonths("it");

    const years = [];
    for (let i = fromMonth.getFullYear(); i <= toMonth.getFullYear(); i += 1) {
        years.push(i);
    }

    const handleChange = function handleChange(e) {
        const { year, month } = e.target.form;
        onChange(new Date(year.value, month.value));
    };

    return (
        <div className="DayPicker-Caption">
            <CustomInput type="select" id="month" name="month" onChange={ handleChange } value={ date.getMonth() }>
                { months.map((month, i) => (
                    <option key={ month } value={ i }>
                        { month }
                    </option>
                )) }
            </CustomInput>
            <CustomInput type="select" id="year" name="year" onChange={ handleChange } value={ date.getFullYear() }>
                { years.map(year => (
                    <option key={ year } value={ year }>
                        { year }
                    </option>
                )) }
            </CustomInput>
        </div>
    );
}

class DayPickerIt extends PureComponent {
    render() {
        // Variabili per localizzazione
        let dayPickerProps = Object.assign({}, {
            locale: "it",
            localeUtils: MomentLocaleUtils
        }, this.props);

        return (<DayPicker { ...dayPickerProps } className="inline"/>);
    }
}

class DayPickerInputIt extends PureComponent {
    constructor(props) {
        super(props);
        this.dayPickerInputRef = React.createRef();
        this.handleYearMonthChange = this.handleYearMonthChange.bind(this);
    }

    handleYearMonthChange(date) {
        this.dayPickerInputRef.current.getDayPicker().showMonth(date);
    }

    render() {
        const { dayPickerProps, value, ...passedThroughProps } = this.props;

        passedThroughProps.value = value || void 0;

    
        if (dayPickerProps && dayPickerProps.showYearSelect) {
            const { fromMonth, toMonth } = dayPickerProps;
            delete dayPickerProps.showYearSelect;
            dayPickerProps.className = "yearMonthSelect";
            dayPickerProps.captionElement = ({ date, localeUtils }) => (
                <YearMonthForm
                    date={ date }
                    localeUtils={ localeUtils }
                    fromMonth={ fromMonth }
                    toMonth={ toMonth }
                    onChange={ this.handleYearMonthChange }
                />
            );
        }

        

        let dayPickerInputProps = Object.assign({}, {
            formatDate: formatDate,
            parseDate: parseDate,
            format: "DD-MM-YYYY",
            placeholder: "DD-MM-YYYY",
            ref: this.dayPickerInputRef,
            dayPickerProps: {
                locale: "it",
                localeUtils: MomentLocaleUtils
            }
        }, passedThroughProps);



        return (<DayPickerInput { ...dayPickerInputProps } />);
    }
}

export { DayPickerIt, DayPickerInputIt }

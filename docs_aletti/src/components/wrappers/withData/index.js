import React, { PureComponent } from 'react';
import PropTypes from 'prop-types';
import { Progress } from 'reactstrap';
import SelectOptions from 'components/wrappers/withData/SelectOptions';
import getDisplayName from 'functions/getDisplayname';
import './style.css';

export default function withData(WrappedComponent) {
    class withData extends PureComponent {
        componentDidMount() {
            this.loadSelectData();
        }

        componentDidUpdate(prevPros) {
            this.loadSelectData(prevPros);
        }

        loadSelectData(prevPros) {
            const { name, parentValue, loadActive, loadData } = this.props;

            if (typeof parentValue !== "undefined") {
                if ((!prevPros && parentValue !== "") || (prevPros && prevPros.parentValue !== parentValue)) {
                    loadData(name, parentValue);
                    if (prevPros) {
                        this.props.customOnChange(this.props.name, "");
                    }
                }
            }

            if (typeof loadActive !== "undefined") {
                if (!loadActive) {
                    this.props.customOnChange(this.props.name, "");
                } else if (!prevPros || prevPros.loadActive !== loadActive) {
                    loadData(name);
                }
            }
        }

        handleChange = event => {
            const value = this.props.valueAndText ? event.target.value + '|' + event.target.text : event.target.value;
            this.props.customOnChange(this.props.name, value);
        };

        render() {
            const { isLoading, isError, isWarning, description, parentValue, loadActive, data, ...passThroughProps } = this.props;
            const messageOrLoading = isLoading || isError || isWarning;
            const progressProps = {
                value: 100,
                animated: isLoading,
                color: isError ? "danger" : (isWarning ? "info" : "")
            };
            const areDataLoaded = (loadActive || (parentValue && parentValue.toString() !== "")) && data && data.length;
            passThroughProps.disabled = !areDataLoaded;
            passThroughProps.onChange = this.handleChange;
            delete passThroughProps.updatedAt;
            delete passThroughProps.isOK;
            delete passThroughProps.loadData;
            delete passThroughProps.error;

            if (areDataLoaded) {
                passThroughProps.children = <SelectOptions data={ data }/>;
            }

            return messageOrLoading
                ? <Progress className="withprogress" { ...progressProps }>{ description }</Progress>
                : (WrappedComponent && <WrappedComponent { ...passThroughProps }/>);
        }
    }

    withData.propTypes = {
        isLoading: PropTypes.bool,
        loadActive: PropTypes.bool,
        parentValue: PropTypes.string,
        data: PropTypes.arrayOf(PropTypes.shape({
            name: PropTypes.string,
            value: PropTypes.string
        }))
    };
    withData.displayName = 'withData(' + getDisplayName(WrappedComponent) + ')';
    return withData;
};

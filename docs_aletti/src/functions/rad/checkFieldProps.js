import _ from 'lodash-es';

export default function checkFieldProps(currProps, nextProps, key) {
    const name = typeof key === "undefined" ? currProps.name : key;
    return (
        _.get(currProps.values, name) !== _.get(nextProps.values, name) ||
        _.get(currProps.errors, name) !== _.get(nextProps.errors, name) ||
        _.get(currProps.touched, name) !== _.get(nextProps.touched, name) ||
        currProps.value !== nextProps.value ||
        currProps.disabled !== nextProps.disabled ||
        Object.keys(currProps).length !== Object.keys(nextProps).length
    );
}

import getFieldLoader from "containers/rad/loadingFields/fieldsLoader";

const parseData = (results) => results.map(
    (result) => ({
        name: result.description.trim(),
        value: result.code.trim()
    })
);

export default name => getFieldLoader(name, parseData);

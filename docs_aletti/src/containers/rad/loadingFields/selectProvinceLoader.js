import getFieldLoader from "containers/rad/loadingFields/fieldsLoader";

const parseData = (results) => results.map(
    (result) => ({
        name: result,
        value: result
    })
);

export default getFieldLoader('province', parseData);

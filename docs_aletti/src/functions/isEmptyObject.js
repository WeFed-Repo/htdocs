const isEmptyObject = (object) => {
    let empty = false;

    if (typeof object === "object") {
        const properties = Object.getOwnPropertyNames(object).filter((name) => {
            let property = object[name];
            if (Array.isArray(property)) {
                property = property.filter((subProperty) => !isEmptyObject(subProperty));
                return !!property.length;
            } else if (typeof property ===  "object") {
                return isEmptyObject(property);
            }
            return true;
        });

        empty = !properties.length;
    }

    return empty;
};

export default isEmptyObject;
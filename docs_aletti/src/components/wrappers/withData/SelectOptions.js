import React from 'react';

export default React.memo(function (props) {
    return [{ "name": "", "value": "" }].concat(props.data).map(child => (
            <option key={ child.value } value={ child.value }>{ child.name }</option>
        )
    );
});
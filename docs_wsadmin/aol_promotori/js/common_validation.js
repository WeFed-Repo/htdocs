/* jshint strict:false */
/* exported mailAddressValidator */ 

/**
 * function mailAddressValidator( aMail )
 * @param aMail  a string containg a mail address to validate
 * @return true if aMail is compliant (https://html.spec.whatwg.org/multipage/forms.html#valid-e-mail-address).
 * by Gianni D'Elia (regex) and Andrea Grassi (regex js dialect)
 * modified by Andrea Colanicchia (updated regex based on new specs)
 */

function mailAddressValidator (aMail) {
	var re = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)+$/;
	return re.test(aMail);
}

/*
La funzione richiamata per il controllo dell'identificativo creditore h CRIDokay
*/


//Check the checksum of a Ceditor-ID.
function CRIDokay(crid) {
    crid = crid || "";

    if (crid.length != 23) {
        return false;
    }

    return ChecksumCRID(crid) == "97";
}

// Calculate 2-digit checksum of a CRID.
function ChecksumCRID(crid) {
    var country = crid.substring(0, 2);
    var checksum = crid.substring(2, 4);
    ////// OMIT BUSINESS CODE var crcode   = crid.substring(4);
    var crcode = crid.substring(7);

    // Assemble digit string
    var digits = "";
    for (var i = 0; i < crcode.length; ++i) {
        var ch = crcode.charAt(i).toUpperCase();
        if ("0" <= ch && ch <= "9")
            digits += ch;
        else
            digits += capital2digits(ch);
    }

    for (var i = 0; i < country.length; ++i) {
        var ch = country.charAt(i);
        digits += capital2digits(ch);
    }
    digits += checksum;

    // Calculate checksum
    checksum = 98 - mod97(digits);
    return fill0("" + checksum, 2);
}

// Convert a capital letter into digits: A -> 10 ... Z -> 35 (ISO 13616).
function capital2digits(ch) {
    var capitals = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    for (var i = 0; i < capitals.length; ++i)
        if (ch == capitals.charAt(i))
            break;
    return i + 10;
}

// Modulo 97 for huge numbers given as digit strings.
function mod97(digit_string) {
    var m = 0;
    for (var i = 0; i < digit_string.length; ++i)
        m = (m * 10 + parseInt(digit_string.charAt(i))) % 97;
    return m;
}

// Fill the string with leading zeros until length is reached.
function fill0(s, l) {
    while (s.length < l)
        s = "0" + s;
    return s;
}
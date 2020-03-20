export function checkCIN(cf) {
    // Controllo del CIN
    const set1 = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    const set2 = "ABCDEFGHIJABCDEFGHIJKLMNOPQRSTUVWXYZ";
    const setPari = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    const setDisp = "BAKPLCQDREVOSFTGUHMINJWZYX";
    let s = 0;
    let i;

    for (i = 1; i <= 13; i += 2) {
        s += setPari.indexOf(set2.charAt(set1.indexOf(cf.charAt(i))));
    }
    for (i = 0; i <= 14; i += 2) {
        s += setDisp.indexOf(set2.charAt(set1.indexOf(cf.charAt(i))));
    }

    return (s % 26 === cf.charCodeAt(15) - 'A'.charCodeAt(0));
}

export function checkCF(cognome, nome, nascita, sesso, cf11) {
    const ggmmaaaa = nascita.split("-");
    let i, c, aaaa, mm, gg;
    let cf11Calcolato = "";

    // RICAVO IL COGNOME (1-3)
    let vocali = "";
    let consonanti = "";
    for (i = 0; i < cognome.length; i++) {
        c = cognome.charAt(i);
        if (/[AEIOU]/.test(c))
            vocali += c;
        if (/[BCDFGHJKLMNPQRSTVWXYZ]/.test(c))
            consonanti += c;
    }
    consonanti = (consonanti + vocali + "XXX").substr(0, 3);
    cf11Calcolato += consonanti;

    // RICAVO IL NOME (4-6)
    vocali = "";
    consonanti = "";
    for (i = 0; i < nome.length; i++) {
        c = nome.charAt(i);
        if (/[AEIOU]/.test(c))
            vocali += c;
        if (/[BCDFGHJKLMNPQRSTVWXYZ]/.test(c))
            consonanti += c;
    }

    if (consonanti.length > 3) {
        consonanti = consonanti.charAt(0) + consonanti.substr(2, 2);
    } else {
        consonanti = (consonanti + vocali + "XXX").substr(0, 3);
    }

    cf11Calcolato += consonanti;

    // Anno di nascita (7-8)
    aaaa = String(10000 + parseFloat(ggmmaaaa[2])).substr(3);
    cf11Calcolato += aaaa;

    // Mese di nascita (9)
    mm = (" ABCDEHLMPRST").charAt(ggmmaaaa[1]);
    cf11Calcolato += mm;

    // Giorno di nascita e sesso (10-11)
    sesso = (sesso === "F") ? 140 : 100;
    gg = String(parseFloat(ggmmaaaa[0]) + sesso).substr(1);
    cf11Calcolato += gg;

    return cf11Calcolato === cf11;
}
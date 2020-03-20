export default (int2disabled, getStepField) => (int2disabled ? [0] : [0, 1]).reduce((arr, index) => {
    const nome = getStepField(0, "intestatari[" + index + "].nome");
    const cognome = getStepField(0, "intestatari[" + index + "].cognome");

    arr.push(nome.toUpperCase() + ' ' + cognome.toUpperCase());

    return arr;
}, []);
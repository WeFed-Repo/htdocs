import numeral from 'functions/rad/numeralIt';

/* Parametri:
  number: numero da formattare
  decimals: se specificato, fissa il numero di decimali da mostrare
  valueSymbol: appende la valuta specificata
*/

export default function formatNumber(numb,decimals=2,valueSymbol) {
    let formattedNumber = "";
    let decimalsToAdd = "";

    // Sistema il formato in base alle variabili esplicitate
    for (let i = 0; i < decimals; ++i) {
        decimalsToAdd += "0";
    }

    if (typeof numb !== "undefined" && numb != null && !isNaN(numb)) {
        formattedNumber = numeral(numb).format('0,000.'+ decimalsToAdd);
    }
    if (typeof valueSymbol !== "undefined") {
      formattedNumber += " " + valueSymbol;
    }

    return formattedNumber;
}

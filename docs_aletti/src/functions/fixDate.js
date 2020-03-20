/***
 * Sistema le date per poterle confrontare meglio
 * @param date - Data di moment.js
 */

export default function (date) {
    // Controlla se la data è il 29 febbraio e la normalizza al 28 febbraio,
    // per sistemare il confronto tra date con anno bisestile e date senza
    if (date.isLeapYear() && date.month() === 1 && date.date() === 29) {
        date.date(28);
    }
    // Normalizza l'orario portando tutto a 0 (ore, minuti, secondi e millisecondi)
    // per permettere il confronto tra due date uguali che altrimenti
    // potrebbero avere un timestamp diverso a causa dell'ora differente
    return date.startOf('day');
}

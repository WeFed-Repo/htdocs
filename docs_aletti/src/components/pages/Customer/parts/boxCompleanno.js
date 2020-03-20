import React, { PureComponent } from 'react';
import { Button } from 'reactstrap';
import momentIt from 'functions/rad/momentIt';
import getDateDifference from 'functions/getDateDifference';
import moment from 'moment';

export default class extends PureComponent {
    handleSendmail = (email) => {
        window.open("mailto:" + email + "");
    };

    render() {
        let classes = 'bordered-block';
        let nextBirthdayString = '', daysToBirthday = null;

        //date di nascita in array
        const dateToday = momentIt().format('L').split('/'); //oggi

        let dateBirthday = this.props.dataCompleanno ? this.props.dataCompleanno.split('/') : [];

        let age = "";

        if (dateBirthday.length) {
            dateBirthday[2] = dateToday[2]; //data di nascita nell'anno in corso in array
            let dateBirthdayString = dateBirthday.join('/'); //data di nascita nell'anno in corso String
            
            let dateBirthdayNext = [...dateBirthday];
            dateBirthdayNext[2] = (Number(dateToday[2]) + 1).toString(); //data di nascita il prossimo anno
            let dateBirthdayNextString = dateBirthdayNext.join('/'); //data di nascita il prossimo anno String

            /* gestione e controllo anno bisestile*/
            const isBornBisestile = dateBirthday[0] === "29" && dateBirthday[1] === "02",
                isValidDateToday = momentIt(dateBirthdayString, "DDMMYYYY").isValid(),
                isValidDateNextYear = momentIt(dateBirthdayNextString, "DDMMYYYY").isValid();
            /* fine gestione e controllo anno bisestile*/

            //se è nato il 29 e sono in un anno non bisestile gli auguri vanno fatti il 28
            if (isBornBisestile && !isValidDateToday && !isValidDateNextYear) {
                dateBirthday[0] = "28";
                dateBirthdayString = dateBirthday.join('/');
            }
            //se è nato il 29 e sono in un anno non bisestile ma il prossimo è bis gli auguri vanno fatti il 29 prox anno
            else if (isBornBisestile && !isValidDateToday && isValidDateNextYear) {
                dateBirthday[0] = "29";
                dateBirthday[2] = (Number(dateToday[2]) + 1).toString();
            }

            /* console.log(this.props.dataCompleanno); */
            daysToBirthday = getDateDifference(momentIt().format('L'), dateBirthdayString);

            if (daysToBirthday < 0) {
                dateBirthday[2] = (Number(dateToday[2]) + 1).toString();
                dateBirthdayString = dateBirthday.join('/');
                daysToBirthday = getDateDifference(momentIt().format('L'), dateBirthdayString);
            }
            nextBirthdayString = daysToBirthday ? '(' + momentIt([dateBirthday[2] * 1, (dateBirthday[1] * 1) - 1, dateBirthday[0] * 1]).format("DD/MM/YYYY") + ')' : '';

            // Calcola l'eta'
            age = "(" + moment().diff(moment((this.props.dataCompleanno),"DD/MM/YYYY"),"years") + " anni)";

        }

        let messageCompleanno;

        switch (daysToBirthday) {
            case null:
                messageCompleanno = <p>Il dato non e' presente in archivio</p>;
                break;
            case 0:
                classes = classes.concat(' alert-is-birthday');
                messageCompleanno =
                    <div>
                        <p>Oggi è il compleanno di <strong>{ this.props.namecliente }</strong></p>
                        <Button className="btn-primary"
                                onClick={ this.handleSendmail.bind(this, this.props.mailCliente) }>Manda un
                            messaggio</Button>
                    </div>;
                break;
            default:
                messageCompleanno =
                <div>
                    <p>
                        <strong>{ this.props.namecliente }</strong><br />
                        <span>compie gli anni fra { daysToBirthday } giorn{(daysToBirthday===1)?"o":"i"} {nextBirthdayString}</span>
                    </p>
                </div>;
                break;
        }

        return (
            <div className={ classes }>
                <h2>Compleanno</h2>
                <div className="scheda align-center">
                    {messageCompleanno}
                    <p className="note-nascita">Data di nascita: {this.props.dataCompleanno} {age}</p> 
                </div>
            </div>
        )
    }
}
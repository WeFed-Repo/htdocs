import validationSettings from "functions/rad/validationSettings";

/* eslint-disable */
export let yupItMessages = {
    "mixed": {
        "default": "Verifica",
        "require": "Richiesto",
        "oneOf": "Valori validi: ${values}",
        "notOneOf": "Valori non validi: ${values}",
        "notType": "Verifica"
    },
    "string": {
        "length": "Inserire ${length} caratteri",
        "min": "Almeno ${min} caratteri",
        "max": "Al massimo ${max} caratteri",
        "regex": "Verifica",
        "email": "Email non valida",
        "url": "URL non valida",
        "trim": "Niente spazi all'inizio o alla fine",
        "lowercase": "Usare il minuscolo",
        "uppercase": "Usare il maiuscolo",
        /* Custom */
        "numeric": "Soltanto numeri",
        "noNumeric": "Niente numeri"
    },
    "number": {
        "min": "Minimo ${min}",
        "max": "Massimo ${max}",
        "lessThan": "Richiesto minore di ${less}",
        "moreThan": "Richiesto maggiore di ${more}",
        "notEqual": "Richiesto diverso da ${notEqual}",
        "positive": "Richiesto positivo",
        "negative": "Richiesto negativo",
        "integer": "Richiesto intero",
    },
    "date": {
        "min": (params) => {
            return "Data minima " + params.min.format(validationSettings.dateFormat);
        },
        "max": (params) => {
            return "Data massima " + params.max.format(validationSettings.dateFormat);
        }
    },
    "boolean": {},
    "object": {
        "noUnknown": "L'oggetto contiene chiavi sconosciute"
    },
    "array": {
        "min": "Almeno ${min} elementi",
        "max": "Al massimo ${max} elementi"
    }
};
/* eslint-enable */
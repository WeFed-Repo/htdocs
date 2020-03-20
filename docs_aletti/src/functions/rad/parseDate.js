import momentIt from "functions/rad/momentIt";
import validationSettings from "functions/rad/validationSettings";

export default function parseDate(value) {
    let date = null;
    if (typeof value !== "undefined" && value !== null) {
        date = momentIt(value, validationSettings.dateFormat, true);
        date = date.isValid() ? date : null;
    }
    return date;
}
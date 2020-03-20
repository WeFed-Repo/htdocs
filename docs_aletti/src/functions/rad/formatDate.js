import momentIt from "./momentIt";
import validationSettings from "./validationSettings";

export default function formatDate(date, fullTime = false) {
    let parsedDate,
        formattedDate = "",
        formatSetting = (fullTime) ? validationSettings.dateFullFormat : validationSettings.dateFormat;

    if (typeof date !== "undefined" && date !== null) {
        parsedDate = momentIt(date);
        formattedDate = parsedDate.isValid() ? parsedDate.format(formatSetting) : "";
    }

    return formattedDate;
}

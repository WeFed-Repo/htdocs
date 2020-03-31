//
// Copyright (c) 2001-2005 BroadVision, Inc. All rights reserved.
//
// This software is copyrighted.  Under the copyright laws, this software
// may not be copied, in whole or in part, without prior written consent
// of BroadVision, Inc. or its assignees.  This software is provided under
// the terms of a license between BroadVision and the recipient, and its
// use is subject to the terms of that license.
//
// This software may be protected by one or more U.S. and International
// patents.  Certain applications of BroadVision One-To-One software are
// covered by U.S. patent 5,710,887.
//
// TRADEMARKS: BroadVision and BroadVision One-To-One are registered
// trademarks of BroadVision, Inc., in the United States and the European
// Community, and are trademarks of BroadVision, Inc., in other
// countries.  The BroadVision logo, is a trademark of BroadVision, Inc.,
// in the United States and other countries. Additionally, IONA and Orbix
// are trademarks of IONA Technologies, Ltd.  RSA, MD5, and RC2 are
// trademarks of RSA Data Security, Inc.
//

//
// Display the date picker in a popup window.
//
function calendarPopup(url, yr, mn, dy, form, field, minYear, maxYear, locale, div, anchor) {
  if (div == null && anchor == null) {
    if (url != null) {
      if (url.indexOf("?") < 0) {
        url += "?";
      } else {
        url += "&";
      }
    }

    var nameWithEncodedSlashes = escape(field);
    if (null != nameWithEncodedSlashes)
      nameWithEncodedSlashes = nameWithEncodedSlashes.replace(/%u/g, "\\u");

    // to support field name with '/'s such as webforms
    while (nameWithEncodedSlashes.indexOf("\/") != -1) {
      nameWithEncodedSlashes = nameWithEncodedSlashes.replace("\/", "%2F");
    }

    var nameWithNoSpacesAndSlashes = field;
    while (nameWithNoSpacesAndSlashes.indexOf(" ") != -1) {
      nameWithNoSpacesAndSlashes = nameWithNoSpacesAndSlashes.replace(" ", "");
    }

    while (nameWithNoSpacesAndSlashes.indexOf("\/") != -1) {
      nameWithNoSpacesAndSlashes = nameWithNoSpacesAndSlashes.replace("\/", "");
    }

    var minYearParam = "";
    var maxYearParam = "";
    var localeParam = ""; 

    if (null != minYear)
      minYearParam = "&minYear=" + minYear;

    if (null != maxYear)
      maxYearParam = "&maxYear=" + maxYear;

    if (null != locale)
      localeParam = "&locale=" + locale;

    var popup = window.open(url + 'y=' + yr + '&m=' + mn + '&d=' + dy + '&form=' + form + '&field=' + nameWithEncodedSlashes + minYearParam + maxYearParam + localeParam, 'EPCalendarPopup' + nameWithNoSpacesAndSlashes, 'width=220,height=255,resizable=yes,scrollbars=no,status=0');

    if (popup != null) {
      if (popup.opener == null)
        popup.opener = self
    }
  }
  else {
    var popup = new Calendar(div, anchor, mn, dy, yr, form, field);
    popup.show(true);
  }
}

//
// Display the date picker in a popup window.
//
function datePopup(url, form, name, minYear, maxYear, locale, div, anchor) {
  var yearSelectName  = name + ".year";
  var monthSelectName = name + ".month";
  var daySelectName   = name + ".day";

  var thisForm = document.forms[form];
  var elements = thisForm.elements;
  var numElements = elements.length;

  var yearSelect;
  var monthSelect;
  var daySelect;

  var count = 0;

  for (var elementIndex = 0; elementIndex < numElements; elementIndex++) {
    var elementName = elements[elementIndex].name;
    if (elementName == yearSelectName) {
      yearSelect = elements[elementIndex];
      count++;
    }
    else if (elementName == monthSelectName) {
      monthSelect = elements[elementIndex];
      count++;
    }
    else if (elementName == daySelectName) {
      daySelect = elements[elementIndex];
      count++;
    }

    if (count == 3) break;
  }

  var yri = yearSelect.selectedIndex;
  var mni = monthSelect.selectedIndex;
  var dyi = daySelect.selectedIndex;

  var yr = yearSelect.options[yri].value;
  var mn = monthSelect.options[mni].value;
  var dy = daySelect.options[dyi].value;

  calendarPopup(url, yr, mn, dy, form, name, minYear, maxYear, locale, div, anchor);
}


//
// Date picker 'callback' function.
//
function setDate(y, m, d, form, name) {
  var yearSelectName  = name + ".year";
  var monthSelectName = name + ".month";
  var daySelectName   = name + ".day";

  var thisForm = document.forms[form];
  var elements = thisForm.elements;
  var numElements = elements.length;

  var yearSelect;
  var monthSelect;
  var daySelect;

  var count = 0;

  for (var elementIndex = 0; elementIndex < numElements; elementIndex++) {
    var elementName = elements[elementIndex].name;
    if (elementName == yearSelectName) {
      yearSelect = elements[elementIndex];
      count++;
    }
    else if (elementName == monthSelectName) {
      monthSelect = elements[elementIndex];
      count++;
    }
    else if (elementName == daySelectName) {
      daySelect = elements[elementIndex];
      count++;
    }

    if (count == 3) break;
  }

  monthSelect.selectedIndex = m;

  var days = daysInMonth(m, y);
  setDaySelectOptions(daySelect, days, d-1);

  setYearSelectOptions(yearSelect, y);
}

//
// Initialize the time dropdowns.
//
function setTime(hourSelect, minuteSelect, indSelect)
{
  var len;

  var hri = hourSelect.selectedIndex;
  var mmi = minuteSelect.selectedIndex;

  var hr = hourSelect.options[hri].value;
  var mm = minuteSelect.options[mmi].value;

  if ((hr == -1) || (mm == -1)) {
    var numHours = hourSelect.options.length;
    for (var hourIndex = 0; hourIndex < numHours; hourIndex++) {
      if (hourSelect.options[hourIndex].value == 0) {
        hourSelect.selectedIndex = hourIndex;
        break;
      }
    }

    var numMinutes = minuteSelect.options.length;
    for (var minuteIndex = 0; minuteIndex < numMinutes; minuteIndex++) {
      if (minuteSelect.options[minuteIndex].value == 0) {
        minuteSelect.selectedIndex = minuteIndex;
        break;
      }
    }

    var numInd = indSelect.options.length;
    for (var indIndex = 0; indIndex < numInd; indIndex++) {
      if (indSelect.options[indIndex].value == 0) {
        indSelect.selectedIndex = indIndex;
        break;
      }
    }
  }
}

//
// Returns the user's selection for the date/time.
//
// Returns a JavaScript Date object for the selected date/time
// or null if the selection is not valid.
//
function getDate(form, name)
{
  var yearSelectName  = name + ".year";
  var monthSelectName = name + ".month";
  var daySelectName   = name + ".day";
  var hourSelectName  = name + ".hour";
  var minuteSelectName = name + ".minute";
  var indSelectName   = name + ".ind";

  var thisForm = document.forms[form];
  var elements = thisForm.elements;
  var numElements = elements.length;

  var yearSelect;
  var monthSelect;
  var daySelect;
  var hourSelect;
  var minuteSelect;
  var indSelect = null;

  var count = 0;

  for (var elementIndex = 0; elementIndex < numElements; elementIndex++) {
    var elementName = elements[elementIndex].name;
    if (elementName == yearSelectName) {
      yearSelect = elements[elementIndex];
      count++;
    }
    else if (elementName == monthSelectName) {
      monthSelect = elements[elementIndex];
      count++;
    }
    else if (elementName == daySelectName) {
      daySelect = elements[elementIndex];
      count++;
    }

    if (elementName == hourSelectName) {
      hourSelect = elements[elementIndex];
      count++;
    }
    else if (elementName == minuteSelectName) {
      minuteSelect = elements[elementIndex];
      count++;
    }
    else if (elementName == indSelectName) {
      indSelect = elements[elementIndex];
      count++;
    }

    if (count == 6) break;
  }

  var yri = yearSelect.selectedIndex;
  var mni = monthSelect.selectedIndex;
  var dyi = daySelect.selectedIndex;

  var yr = yearSelect.options[yri].value;
  var mn = monthSelect.options[mni].value;
  var dy = daySelect.options[dyi].value;

  if (yr == -1 || mn == -1 || dy == -1)
    return null;

  if (!isBvValidDate(yr, mn, dy))
    return null;

  var hhi = hourSelect.selectedIndex;
  var mmi = minuteSelect.selectedIndex;
  var hh = hourSelect.options[hhi].value;
  var mm = minuteSelect.options[mmi].value;
  var ss = 0;

  //
  // if 12-hour format, check the AM/PM indicator
  //

  if (null != indSelect && indSelect.type == 'select-one') {
    var indi = indSelect.selectedIndex;
    var ind = indSelect.options[indi].value;

    if (hh == -1 || mm == -1 || ind == -1) {
      return null;
    }

    if (ind == 1) {
      hh = parseInt(hh);
      hh += 12;
    }
  }

  if (hh == -1 || mm == -1) {
    return null;
  }

  var date = new Date(yr, mn, dy, hh, mm, ss);

  return date;
}

//
// Returns the user's selection for the date/time.
//
// Returns a JavaScript Date object for the selected date/time
// or null if the selection is not valid.
//
// Time is optional. If all hour, minute and ind fields are empty, we
// default time to 12:00AM.
//
function getDate2(form, name)
{
  var yearSelectName  = name + ".year";
  var monthSelectName = name + ".month";
  var daySelectName   = name + ".day";
  var hourSelectName  = name + ".hour";
  var minuteSelectName = name + ".minute";
  var indSelectName   = name + ".ind";

  var thisForm = document.forms[form];
  var elements = thisForm.elements;
  var numElements = elements.length;

  var yearSelect;
  var monthSelect;
  var daySelect;
  var hourSelect;
  var minuteSelect;
  var indSelect = null;

  var count = 0;

  for (var elementIndex = 0; elementIndex < numElements; elementIndex++) {
    var elementName = elements[elementIndex].name;
    if (elementName == yearSelectName) {
      yearSelect = elements[elementIndex];
      count++;
    }
    else if (elementName == monthSelectName) {
      monthSelect = elements[elementIndex];
      count++;
    }
    else if (elementName == daySelectName) {
      daySelect = elements[elementIndex];
      count++;
    }
    if (elementName == hourSelectName) {
      hourSelect = elements[elementIndex];
      count++;
    }
    else if (elementName == minuteSelectName) {
      minuteSelect = elements[elementIndex];
      count++;
    }
    else if (elementName == indSelectName) {
      indSelect = elements[elementIndex];
      count++;
    }

    if (count == 6) break;
  }
 
  var yri = yearSelect.selectedIndex;
  var mni = monthSelect.selectedIndex;
  var dyi = daySelect.selectedIndex;

  var yr = yearSelect.options[yri].value;
  var mn = monthSelect.options[mni].value;
  var dy = daySelect.options[dyi].value;

  if (yr == -1 || mn == -1 || dy == -1)
    return null;

  if (!isBvValidDate(yr, mn, dy))
    return null;

  var hhi = hourSelect.selectedIndex;
  var mmi = minuteSelect.selectedIndex;
  var hh = hourSelect.options[hhi].value;
  var mm = minuteSelect.options[mmi].value;
  var ss = 0;

  //
  // if 12-hour format, check the AM/PM indicator
  //

  if (null != indSelect && indSelect.type == 'select-one') {
    var indi = indSelect.selectedIndex;
    var ind = indSelect.options[indi].value;

    if (hh == -1 || mm == -1 || ind == -1) {
      return null;
    }

    if (ind == 1) {

      hh = parseInt(hh);
      hh += 12;
    }
  }

  if (hh == -1 || mm == -1) {
    return null;
  }

  var date = new Date(yr, mn, dy, hh, mm, ss);

  return date;
}

//
// Returns the user's selection for a date.  Time will default to 12:00AM.
//
// Returns a JavaScript Date object for the selected date
// or null if the selection is not valid.
//
function getDateOnly(form, name)
{
  var yearSelectName  = name + ".year";
  var monthSelectName = name + ".month";
  var daySelectName   = name + ".day";

  var thisForm = document.forms[form];
  var elements = thisForm.elements;
  var numElements = elements.length;

  var yearSelect;
  var monthSelect;
  var daySelect;

  var count = 0;

  for (var elementIndex = 0; elementIndex < numElements; elementIndex++) {
    var elementName = elements[elementIndex].name;
    if (elementName == yearSelectName) {
      yearSelect = elements[elementIndex];
      count++;
    }
    else if (elementName == monthSelectName) {
      monthSelect = elements[elementIndex];
      count++;
    }
    else if (elementName == daySelectName) {
      daySelect = elements[elementIndex];
      count++;
    }

    if (count == 3) break;
  }
 
  var yri = yearSelect.selectedIndex;
  var mni = monthSelect.selectedIndex;
  var dyi = daySelect.selectedIndex;

  var yr = yearSelect.options[yri].value;
  var mn = monthSelect.options[mni].value;
  var dy = daySelect.options[dyi].value;

  if (yr == -1 || mn == -1 || dy == -1)
    return null;

  if (!isBvValidDate(yr, mn, dy))
    return null;

  var hh = 0;
  var mm = 0;
  var ss = 0;

  var date = new Date(yr, mn, dy, hh, mm, ss);

  return date;
}

//
// Returns the number of days for the given month and year.
//
function daysInMonth(month, year)
{
  var daysInMonthArray = new Array(31,28,31,30,31,30,31,31,30,31,30,31);
  var days = daysInMonthArray[month];

  if (month == 1) {
    if (((year % 4 == 0) && (year % 100 != 0)) || (year % 400 == 0)) {
      days = 29;
    }
  }

  return days;
}

//
// Checks if the given date selection is valid.
//
function isValidDate(year, month, day)
{
  var numDays = daysInMonth(month, year);

  if ((day >= 1) && (day <= numDays))
    return true;

  return false;
}

//
// Checks if the given date selection is valid.
//
function isBvValidDate(year, month, day)
{
  var numDays = daysInMonth(month, year);

  if ((day >= 1) && (day <= numDays))
    return true;

  return false;
}

//
//
//
function onChangeYear(form, name) {
  var yearSelectName  = name + ".year";
  var monthSelectName = name + ".month";
  var daySelectName   = name + ".day";

  var thisForm = form;
  var elements = thisForm.elements;
  var numElements = elements.length;

  var yearSelect;
  var monthSelect;
  var daySelect;

  var count = 0;

  for (var elementIndex = 0; elementIndex < numElements; elementIndex++) {
    var elementName = elements[elementIndex].name;
    if (elementName == yearSelectName) {
      yearSelect = elements[elementIndex];
      count++;
    }
    else if (elementName == monthSelectName) {
      monthSelect = elements[elementIndex];
      count++;
    }
    else if (elementName == daySelectName) {
      daySelect = elements[elementIndex];
      count++;
    }

    if (count == 3) break;
  }

  var yri = yearSelect.selectedIndex;
  var mni = monthSelect.selectedIndex;
  var dyi = daySelect.selectedIndex;

  var yr = yearSelect.options[yri].value;
  var mn = monthSelect.options[mni].value;
  var dy = daySelect.options[dyi].value;

  if (yr == -1)
    return;

  if (mn == 1) {
    var days = daysInMonth(mn, yr);
    setDaySelectOptions(daySelect, days, dyi);
  }
}

//
//
//
function onChangeMonth(form, name) {
  var yearSelectName  = name + ".year";
  var monthSelectName = name + ".month";
  var daySelectName   = name + ".day";

  var thisForm = form;
  var elements = thisForm.elements;
  var numElements = elements.length;

  var yearSelect;
  var monthSelect;
  var daySelect;

  var count = 0;

  for (var elementIndex = 0; elementIndex < numElements; elementIndex++) {
    var elementName = elements[elementIndex].name;
    if (elementName == yearSelectName) {
      yearSelect = elements[elementIndex];
      count++;
    }
    else if (elementName == monthSelectName) {
      monthSelect = elements[elementIndex];
      count++;
    }
    else if (elementName == daySelectName) {
      daySelect = elements[elementIndex];
      count++;
    }

    if (count == 3) break;
  }

  var yri = yearSelect.selectedIndex;
  var mni = monthSelect.selectedIndex;
  var dyi = daySelect.selectedIndex;

  var yr = yearSelect.options[yri].value;
  var mn = monthSelect.options[mni].value;
  var dy = daySelect.options[dyi].value;

  if (mn == -1 || yr == -1)
    return;

  var days = daysInMonth(mn, yr);
  setDaySelectOptions(daySelect, days, dyi);
}

//
//
//
function onChangeDay(form, name) {
}

//
//
//
function setDaySelectOptions(daySelect, days, dyi) {
  var hasBlank = false;

  // Preserve any localization elements appended after the date value.
  // First date value should be '1' or '01'.
  var dayText = "";
  var pad = "";
  var firstDate =  daySelect.options[0].text;
  var offset = 1;
  var needle =  firstDate.substring(0, 1);
  if (needle == '0') {    // date begins with 0 
    offset = 2;
    pad = "0";
  }
  if (offset < firstDate.length) {
    dayText = firstDate.substring(offset);
  }

  for (var index = 0; index < daySelect.length; index++) {
    if (daySelect.options[index].value == -1) {
      hasBlank = true;
      break;
    }
  }

  daySelect.length = 0;
  for (var index = 0; index < days; index++) {
    var day = index + 1;
    if (day > 9) pad = "";
    daySelect[index] = new Option(pad + day + dayText, pad + day);
  }

  if (hasBlank) {
    daySelect[index++] = new Option(" ", -1);
  }

  if (dyi < days) {
    daySelect.selectedIndex = dyi;
  }
}

//
//
//
function setYearSelectOptions(yearSelect, y) {
  var yearFound = false;
  var numYears = yearSelect.options.length;

  for (yearIndex = 0; yearIndex < numYears; yearIndex++) {
    if ((yearSelect.options[yearIndex].value > y && (y != -1)) ||
        (yearSelect.options[yearIndex].value == -1)) {
      break;
    }
    if (yearSelect.options[yearIndex].value == y) {
      yearSelect.selectedIndex = yearIndex;
      yearFound = true;
      break;
    }
  }

  if (!yearFound) {
    var marker = yearIndex;

    for (yearIndex = numYears; yearIndex > marker; yearIndex--) {
      var option = new Option;

      option.text = yearSelect.options[yearIndex-1].text;
      option.value = yearSelect.options[yearIndex-1].value;
      option.selected = false;
      yearSelect.options[yearIndex] = option;
    }

    var option = new Option;

    option.text = y;
    option.value = y;
    option.selected = true;
    yearSelect.options[marker] = option;
  }
}


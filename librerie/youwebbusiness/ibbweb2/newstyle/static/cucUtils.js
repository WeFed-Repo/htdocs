// cucUtils.js

var CUC_BASE_NUMBER = 48;  // atoi('0')
var CUC_BASE_ALPHA  = 65;  // atoi('A')

var CUC_EVEN_CHARS = new Array(
	0,1,2,3,4,5,6,7,8,9, // 0-9, A-J
    10,11,12,13,14,15,16,17,18,19, // K-T
    20,21,22,23,24,25 // U-Z
);

var CUC_ODD_CHARS = new Array(
	1,0,5,7,9,13,15,17,19,21, // 0-9, A-J
    2,4,18,20,11,3,6,8,12,14, // K-T
    16,10,22,25,24,23 // U-Z
);

var CUC_CHECK_CHARS = new Array(
	'A','B','C','D','E','F','G','H','I','J',
    'K','L','M','N','O','P','Q','R','S','T',
    'U','V','W','X','Y','Z'
);

var CUC_CHECK_CHARS_LENGTH = 26;

var CUC_VALID_CHARS =/^([0-9A-Z]){8,8}$/;


// tell if the given cuc has the right check char (at position 8)
function isValidCUC(cuc)
{
	if (cuc == null || cuc.length != 8)
		return false;

	// normalize string
	cuc = cuc.toUpperCase();

	// check chars
	if (!CUC_VALID_CHARS.test(cuc))
		return false;

	var cucCIN = cuc.charAt(7);

	var calculatedCIN = computeCIN(cuc);

	return (cucCIN == calculatedCIN);
}


// calculate the check char (for the position 8) for the given cuc
function computeCIN(cuc)
{
	if (cuc == null || cuc.length != 8)
		return ' ';

	// calculate cin
	var calculatedCIN = 0;
	var baseValue = 0;
	var tmpVal = 0;
	for (var i = 0; i < 7; i++)
	{
		var c = cuc.charAt(i);
		var cIsNumber = parseInt(c);
		if (!isNaN(c))
			baseValue = CUC_BASE_NUMBER;
		else
			baseValue = CUC_BASE_ALPHA;

		var positionIsEven = ((i) % 2 == 0);
		var difference = c.charCodeAt() - baseValue;
		if (positionIsEven)
			tmpVal = CUC_ODD_CHARS[difference];
		else
			tmpVal = CUC_EVEN_CHARS[difference];

		calculatedCIN += tmpVal;
	}

	// var remainderInt = calculatedCIN % CUC_CHECK_CHARS_LENGTH;
	var remainder = calculatedCIN / CUC_CHECK_CHARS_LENGTH;
	var quotient = parseInt(calculatedCIN / CUC_CHECK_CHARS_LENGTH);

	var calculatedCINValue = (remainder - quotient) * CUC_CHECK_CHARS_LENGTH;
	var calculatedCINChar = CUC_CHECK_CHARS[calculatedCINValue];

	return calculatedCINChar;
}


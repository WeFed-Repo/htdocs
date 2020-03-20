/*
 * This library contains functions useful for the CIN calculus. It takes ABI, CAB and C/C number data and return a character
 * that will be used as a control digit for the account number.
 *
 * Author:  Mauro Franceschini
 * Version: 1.0
 * Date:    05/07/2002
 */

/*
 * This mapping is used by the getCodeFromOddPosition method in order to map odd character into numbers according to the
 * ABI specifications
 */
var oddMappings = [1, 0, 5, 7, 9, 13, 15, 17, 19, 21, 2, 4, 18, 20, 11, 3, 6, 8, 12, 14, 16, 10, 22, 25, 24, 23];

/*
 * Return a character code for a character in an odd position into the 22 characters string composed by ABI, CAB and ACCOUNT NUMBER.
 * If the character parameter has a length greater than 1, only the first character is mapped.
 */
function getCodeFromOddPosition(character)
{
    if (character.charAt(0) >= 'A' && character.charAt(0) <= 'Z')
    {
        return oddMappings[character.charCodeAt(0) - 65];
    }
    else if (character.charAt(0) >= '0' && character.charAt(0) <= '9')
    {
        return oddMappings[character.charCodeAt(0) - 48];
    }
    else
    {
        switch (character)
        {
            case '-':
                return 27;
            case '.':
                return 28;
            case ' ':
                return 26;
        }
    }
}

/*
 * Return a character code for a character in an even position into the 22 characters string composed by ABI, CAB and ACCOUNT NUMBER.
 * If the character parameter has a length greater than 1, only the first character is mapped.
 */
function getCodeFromEvenPosition(character)
{
    if (character.charAt(0) >= 'A' && character.charAt(0) <= 'Z')
    {
        return character.charCodeAt(0) - 65;
    }
    else if (character.charAt(0) >= '0' && character.charAt(0) <= '9')
    {
        return character.charCodeAt(0) - 48;
    }
    {
        switch (character)
        {
            case '-':
                return 26;
            case '.':
                return 27;
            case ' ':
                return 28;
        }
    }
}        

/*
 * Calculate a number that is the sum of all the characters converted from the accountString composed by ABI, CAB and ACCOUNT NUMBER
 * and (eventually) right padded with some blanks in order to reach the 22 characters length.
 */
function calculateSum(accountString)
{
    var sum = 0;
    for(var i=0; i<accountString.length; i++)
    {
        if (i % 2 == 0)
        {
            // Odd position (even position in array)
            var value = getCodeFromOddPosition(accountString.charAt(i)); 
            sum += value;
        }
        else
        {
            // Even position (odd position in array)
            var value = getCodeFromEvenPosition(accountString.charAt(i));
            sum += value;
        }
    }
    return sum;
}

/*
 * Retrieve the CIN character starting with ABI, CAB and ACCOUNT number data. ABI and CAB data MUST be 5 characters long (no
 * control is made) while account can be long up to 12 character.
 */
function getCinCharacter(abi, cab, account)
{
    var string22 = abi + cab + account;
    if (string22.length < 22) {
        string22 = (string22 + "                      ").substring(0, 22);
    }
    var cinCode = calculateSum(string22) % 26;
    return String.fromCharCode(cinCode+65);
}

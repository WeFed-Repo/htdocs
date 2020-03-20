// charUtils.js

function contains(array, obj) 
{
	if (array == null)
		return false;

	var i = array.length;
    while (i--) {
       if (array[i] === obj) {
           return true;
       }
    }

    return false;
}

function div(op1, op2) 
{
	return (op1 / op2 - (op1 % op2 / op2));
}

// converts an integer (unicode value) to a char
function itoa(i)
{
   return String.fromCharCode(i);
}

// converts a char into to an integer (unicode value)
function atoi(a)
{
   return a.charCodeAt();
}


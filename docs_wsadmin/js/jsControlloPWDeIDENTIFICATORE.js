//-------------------------------------------------------
function controllaPWD(ParPWD) {
var err = 0;
var numeri = "0123456789";
var letterem = "qwertyuiopasdfghjklzxcvbnm";
var lettereM = "QWERTYUIOPASDFGHJKLZXCVBNM";
var temp;
var almenoUnaLettera = 0;
for (var i=0; i< ParPWD.length; i++) {
  temp = "" + ParPWD.substring(i, i+1);  
  if ((numeri.indexOf(temp) == "-1") &&
      (letterem.indexOf(temp) == "-1") &&
	  (lettereM.indexOf(temp) == "-1")
      )
   {
    err = 1;
   }
  else
   {
        if ((letterem.indexOf(temp) != "-1") ||
	    (lettereM.indexOf(temp) != "-1"))
   	{
    	 almenoUnaLettera = 1;
   	}	
   }
}
if (almenoUnaLettera == 0) err = 1;
return err;
}
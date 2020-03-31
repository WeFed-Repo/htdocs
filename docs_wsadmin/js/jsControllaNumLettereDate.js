//---------------------------------------------------------------------
function ControllaNumero(ParNumero) {
var err = 0;
var numeri = "0123456789";
var temp;
for (var i=0; i<= ParNumero.length; i++) {
  temp = "" + ParNumero.substring(i, i+1);  
  if (numeri.indexOf(temp) == "-1") 
    err = 1;
}
return err;
}
//-------------------------------------
function controllaAlfanumerico(ParPWD) {
var err = 0;
var numeri = "0123456789";
var letterem = "qwertyuiopasdfghjklzxcvbnm";
var lettereM = "QWERTYUIOPASDFGHJKLZXCVBNM";
var temp;
for (var i=0; i<= ParPWD.length; i++) {
  temp = "" + ParPWD.substring(i, i+1);  
  if ((numeri.indexOf(temp) == "-1") &&
      (letterem.indexOf(temp) == "-1") &&
	  (lettereM.indexOf(temp) == "-1")
      )
    err = 1;
}
return err;
}
//---------------------------------------------------------------------
function checkdate1(giorno,mese,anno) {
if ((mese<1) || (mese>12)) return 1;
if ((giorno<1) || (giorno>31)) return 1;
if ((anno<1800) || (anno>2199)) return  1;
if ((mese==4) || (mese==6) || (mese==9) || (mese==11))
{
	if (giorno==31) return 1;
}
if (mese==2)
{	var g=parseInt(anno/4);
	if (isNaN(g)) return 1;	if (giorno>29) return 1;
	if ((giorno==29) && ((anno/4)!= (parseInt(anno/4)))) return 1;
}
  return 0;
}
//-----------------------------------------------------------------

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Ultimo aggiornamento: 12 - Aprile - 2003
 *
 * Questo script e' (C)2003 gianni2000@tin.it - Lo script e' reperibile al sito http://www.jsdir.com - JavaScript Directory
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */


function digit3(num)
{
	var n0_19 = new Array("","uno","due","tre","quattro","cinque","sei","sette","otto","nove","dieci","undici","dodici","tredici","quattordici","quindici","sedici","diciassette","diciotto","diciannove");
	var n10a = new Array("","","venti","trenta","quaranta","cinquanta","sessanta","settanta","ottanta","novanta","cento");
	var n10b = new Array("","","vent","trent","quarant","cinquant","sessant","settant","ottant","novant","cento");
	var str="";
	
	if(num.charAt(0)!='0') {
		str+=((num.charAt(0)!='1')?n0_19[num.charAt(0)]:"")+((num.charAt(1)=='8')?n10b[10]:n10a[10]);
	}
	if(num.charAt(1)>'1') {
		str+=((num.charAt(2)=='1' || num.charAt(2)=='8')?n10b[num.charAt(1)]:n10a[num.charAt(1)])+n0_19[num.charAt(2)];
	} else {
		str+=n0_19[parseInt(num.substring(1,3),10)];
	}
	
	return str;
}

function digitation(num,lower)
{
	var pto1 = new Array("","uno","mille","unmilione","unmiliardo","mille","unmilione");
	var pto2 = new Array("","","mila","milioni","miliardi","mila","milioni");
	var pto3 = new Array("","undecimo","uncentesimo","unmillesimo");
	var pto4 = new Array("","decimi","centesimi","millesimi");
	
	if (isNaN(num)) {
		return '';
	}
	
	if (parseFloat(num) == '0') {
		return (lower)?"zero":"ZERO";
	}
	
	num=String(num);
	for (var i=0;num.charAt(i)=='0';++i);
	
	var pt = num.lastIndexOf(".");
	var num1 = num.substring((i==pt)?(i-1):i,(pt<0)?num.length:pt);
	num1="000".substring((num1.length%3)?num1.length%3:3)+num1;
	
	if (!parseInt(num1,10) && pt<0) {
		return (lower)?"zero":"ZERO";
	}
	
	var str1="";
	var str2="";
	var j=num1.length/3;
	
	if (j>6) {
		return '';
	}
	
	for (i=0;j;--j,i+=3) {
		if (parseInt(num1.substring(i,i+3),10)==1) {
			str1+=pto1[j];
		}
		else if (!parseInt(num1.substring(i,i+3),10) && j==4) {
				str1+=((!parseInt(num1.substring(i-3,i+3),10))?"di":"")+pto2[j];
		}
		else {
			str1+=digit3(num1.substring(i,i+3));
			if (parseInt(num1.substring(i,i+3),10)) {
				str1+=pto2[j];
			}
		}
	}
	
	if (pt>-1) {
		var num2=num.substring(pt+1,pt+4);
		if ((!num2) || (num2 == '')) {
			num2 = '00';
		}
		str2=((str1)?"/":"")+num2;
		if(!str1) {
			str2="zero";
			str2=(lower)?str2:(str2.charAt(0).toUpperCase()+str2.substring(1));
		}
	} else {
		str2+='/00';
	}
	
	if (num1 == "000") {
		str2+='/' + num2
	}
	
	return ((lower)?str1:str1.toUpperCase())+str2;
}

function fillImportoLettere()
{
	document.f23MainForm.importoLettere.value = digitation(document.f23MainForm.elements['saldo'].value, false);
}

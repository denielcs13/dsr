var oneDig=new Array("","One","Two","Three","Four","Five","Six","Seven","Eight","Nine","Ten","Eleven","Twelve","Thirteen","Fourteen","Fifteen","Sixteen","Seventeen","Eighteen","Ninteen");
var twoDig=new Array("","","Twenty","Thirty","Fourty","Fifty","Sixty","Seventy","Eighty","Ninty");
function num_to_word(num,id)
{
	var str="";
	if(num<=99)
	{
		var str=func_two_dig(num);	
	}
	else if(num<=999)
	{
		var str=func_three_dig(num);
	}
	else if(num<=99999)
	{
		var str= func_four_dig(num);
	}
	else if(num<=9999999)
	{
		var rem=num%100000;//9999
		num=parseInt(num/100000);// 9
		var str= func_two_dig(num)+" Lakh "+func_four_dig(rem);
	}
	document.getElementById(id).innerHTML=str+" Only";
}

/////////////////////////////////////////
function func_four_dig(no)
{
	var rem=no%1000;//9999
	no=parseInt(no/1000);// 9
	var str= func_two_dig(no)+" Thousand "+func_three_dig(rem);	
	return str;
}

function func_three_dig(no)
{
		var rem=no%100;
		no=parseInt(no/100);
		if(no>0)
		{
			var str=oneDig[no]+" Hundred "+func_two_dig(rem);
		}
		else
		{
			var str=func_two_dig(rem);
		}
		return str;
}

function func_two_dig(no)
{
	if(no<=19)
	{
		var str=oneDig[no];	
	}
	else if(no<=99)
	{
		var rem=no%10;
		no=parseInt(no/10);
		var str=twoDig[no]+" "+oneDig[rem];
	}
	return str;
}
	
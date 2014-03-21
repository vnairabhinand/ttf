var ie4	= document.all&&navigator.userAgent.indexOf("Opera")==-1;
var ns6	= document.getElementById&&navigator.userAgent.indexOf("Opera")==-1;
var ns4	= document.layers;

//====================================================================================================
//	Function Name	:	IsEmpty
//----------------------------------------------------------------------------------------------------
function IsEmpty(fld, msg)
{
	if((fld.value == "" || fld.value.length == 0) && (msg == ''))
	{
		return false;
	}
	
	if(fld.value == "" || fld.value.length == 0)
	{
		alert(msg);
		fld.focus();
		return false;
	}
	
	return true;
}

//====================================================================================================
//	Function Name	:	IsSelected
//----------------------------------------------------------------------------------------------------
function IsSelected(fld, msg)
{
	if((fld.value == "" || fld.value == 0))
	{
		alert(msg);
		fld.focus();
		return false;
	}
	
	return true;
}

//====================================================================================================
//	Function Name	:	IsEmail
//----------------------------------------------------------------------------------------------------
function IsEmail(fld, msg)
{
	var regex = /^[\w]+(\.[\w]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/ ;
	
	if(!regex.test(fld.value))
	{
		alert(msg);
		fld.focus();
		return false;
	}
	
	return true;
}

//====================================================================================================
//	Function Name	:	IsInt
//----------------------------------------------------------------------------------------------------
function IsInt(fld, msg)
{
	var regex = /^[0-9]*$/;
	
	if(!regex.test(fld.value))
	{
		alert(msg);
		fld.focus();
		return false;
	}
	
	return true;
}

//====================================================================================================
//	Function Name	:	IsFloat
//----------------------------------------------------------------------------------------------------
function IsFloat(fld, msg)
{
	var regex = /^[0-9.]*$/;
	
	if(!regex.test(fld.value))
	{
		alert(msg);
		fld.focus();
		return false;
	}
	
	return true;
}

//====================================================================================================
//	Function Name	:	IsValidString
//----------------------------------------------------------------------------------------------------
function IsValidString(fld, msg)
{
	var regex = /^[_]*[a-zA-Z_]+[a-zA-Z0-9_]*$/;
	
	if(!regex.test(fld.value))
	{
		alert(msg);
		fld.focus();
		return false;
	}
	
	return true;
}

//====================================================================================================
//	Function Name	:	IsPassword
//----------------------------------------------------------------------------------------------------
function IsPassword(fld, msg)
{
	var regex = /^[_]*[a-zA-Z]+[0-9]+[a-zA-Z0-9]*$/;
	
	if(!regex.test(fld.value))
  	{
		alert(msg);
		fld.focus();
		return false;
	}
	
	return true;
}

//====================================================================================================
//	Function Name	:	IsLen
//----------------------------------------------------------------------------------------------------
function IsLen(fld, minlen, maxlen, msg)
{
	if(fld.value.length < minlen || fld.value.length > maxlen)
	{
		alert(msg);
		fld.focus();
		return false;
	}
	
	return true;
}

//====================================================================================================
//	Function Name	:	IsCurrency
//----------------------------------------------------------------------------------------------------
function IsCurrency(fld, msg)
{
    val		= fld.value.replace(/\s/g, "");
	regex	= /^\$?\d{1,3}(,?\d{3})*(\.\d{1,2})?$/;
	
    if(!regex.test(val))
	{
         alert(msg);
		 fld.focus();
		 return false;
    }
	
	return true;
}

//====================================================================================================
//	Function Name	:	IsZip
//----------------------------------------------------------------------------------------------------
function IsZip(fld, msg)
{
	var num = /^[\d]+$/;
	
	if(!num.test(fld.value) || (fld.value.length !=5 && fld.value.length !=6))
	{
		alert(msg);
		fld.focus();
		return false;
	}
	
	return true;
}

//====================================================================================================
//	Function Name	:	IsValidFormat
//----------------------------------------------------------------------------------------------------
function IsValidFormat(fld, filelist, msg)
{
	var regex = new RegExp('(' + filelist.toLowerCase() + ')$');
	
	if(!regex.test(fld.value.toLowerCase()))
	{
		alert(msg);
		fld.focus();
		return false;
	}
	
	return true;
}

//====================================================================================================
//	Function Name	:	IsUrl
//----------------------------------------------------------------------------------------------------
function IsUrl(fld, msg)
{
	//var regex = /^(http:\/\/)/;
	var regex = /^(http:\/\/|https:\/\/)/;
	
	if(!regex.test(fld.value))
	{
		alert(msg);
		fld.focus();
		return false;
	}
	
	return true;
}

//====================================================================================================
//	Function Name	:	IsValidUrl
//----------------------------------------------------------------------------------------------------
function IsValidUrl(fld, msg)
{
	var regex = /^(www|http:\/\/www|https:\/\/www)+\.[A-Za-z0-9-]+\.[A-Za-z0-9]{2,7}/;
	
	if(!regex.test(fld.value))
	{
		alert(msg);
		fld.focus();
		return false;
	}
	
	return true;
}

//====================================================================================================
//	Function Name	:	IsValidSize
//----------------------------------------------------------------------------------------------------
function IsValidSize(fld, msg)
{
	var regex = /^[0-9]*x[0-9]*$/i;
	
	if(!regex.test(fld.value))
	{
		alert(msg);
		fld.focus();
		return false;
	}
	
	return true;
}

//====================================================================================================
//	Function Name	:	IsPhone
//----------------------------------------------------------------------------------------------------
function IsPhone(fld, msg)
{
	var regex = /^[0-9\+\-\s\.]*$/;
	if(!regex.test(fld.value))
  	{
		alert(msg);
		fld.focus();
		return false;
	}
	
	return true;
}

//====================================================================================================
//	Function Name	:	IsNumericKey
//----------------------------------------------------------------------------------------------------
function IsNumericKey()
{
	if(window.event.keyCode < 48 || window.event.keyCode > 57)
	{
		window.event.keyCode = 0;
	}
}

//====================================================================================================
//	Function Name	:	IsValidTime
//----------------------------------------------------------------------------------------------------
function IsValidTime(timeStr)
{
	// Checks if time is in HH:MM:SS AM/PM format.
	// The seconds and AM/PM are optional.
	
	//var timePat = /^(\d{1,2}):(\d{2})(:(\d{2}))?(\s?(AM|am|PM|pm))?$/;
	var timePat		= /^(\d{2}):(\d{2})(:(\d{2}))/;
	var matchArray	= timeStr.match(timePat);
	
	if(matchArray == null)
	{
		alert("Time is not in a valid format.");
		return false;
	}
	
	hour	= matchArray[1];
	minute	= matchArray[2];
	second	= matchArray[4];
	//ampm	= matchArray[6];
	
	/*if(second == "")
	{
		second = null;
	}
	
	if(ampm == "")
	{
		ampm = null;
	}*/
	
	if(hour < 0  || hour > 23)
	{
		//alert("Hour must be between 1 and 12. (or 0 and 23 for military time)");
		alert("Hour must be between 00 and 23");
		return false;
	}
	
	/*if(hour <= 12 && ampm == null)
	{
		if(confirm("Please indicate which time format you are using.  OK = Standard Time, CANCEL = Military Time"))
		{
			alert("You must specify AM or PM.");
			return false;
	   }
	}
	
	if(hour > 12 && ampm != null)
	{
		alert("You can't specify AM or PM for military time.");
		return false;
	}*/
	
	if(minute<0 || minute > 59)
	{
		alert ("Minute must be between 0 and 59.");
		return false;
	}
	
	if(second != null && (second < 0 || second > 59))
	{
		alert ("Second must be between 0 and 59.");
		return false;
	}
	
	return true;
}
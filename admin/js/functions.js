//====================================================================================================
//	Function Name	:	popupWindowURL
//	Purpose			:	Whenever you wanna open a link into a new window just call this function
//						you need to pass some arguemnts as described below.
//	Parameters		:	url		= url to be open in the new window
//						winname = window name for the reference of that window
//						w		= width
//						h		= height
//						menu	= if you want menubar to be enabled on the window
//						resize	= if you wanna resize the window
//						scroll	= if you need
//	Return			:	true or false
//----------------------------------------------------------------------------------------------------
function popupWindowURL(url, winname, w, h, menu, resize, scroll)
{
    var x = (screen.width-w)/2;
    var y = (screen.height-h)/3;
	
	if(winname == null)
		winname = "newWindow";
	
	if(w == null)
		w = 800;
	
	if(h == null)
		h = 600;
	
	if(resize == null)
		resize = 1;
	
	menutype   = "nomenubar";
	resizetype = "noresizable";
	scrolltype = "noscrollbars";
	
	if(menu)
		menutype = "menubar";
	
	if(resize)
		resizetype = "resizable";
	
	if(scroll)
		scrolltype = "scrollbars";
	
    cwin = window.open(url,winname,"top=" + y + ",left=" + x + ",screenX=" + x + ",screenY=" + y + "," + "status," + menutype + "," + scrolltype + "," + resizetype + ",width=" + w + ",height=" + h);
	
	if(!cwin.opener)
		cwin.opener = self;
	
	cwin.focus();
	
	return true;
}

//====================================================================================================
//	Function Name	:	CheckUncheck_Click
//----------------------------------------------------------------------------------------------------
function CheckUncheck_Click(fld, status)
{
	if(fld)
	{
		if(fld.length)
			for(i=0; i<fld.length; i++)
				fld[i].checked = status;
		else
			fld.checked = status;
	}
}

//====================================================================================================
//	Function Name	:	Block_ShowHide
//----------------------------------------------------------------------------------------------------
function Block_ShowHide(id)
{
	var blockId = document.getElementById(id);
	
	if(blockId)
	{
		if(blockId.style.display == 'none')
		{
			blockId.style.visibility	= 'visible';
			blockId.style.display		= 'block';
			SetCookie(id, 'visibility:visible;display:block;');
		}
		else
		{
			blockId.style.visibility 	= 'hidden';
			blockId.style.display 		= 'none';
			SetCookie(id, 'visibility:hidden;display:none;');
		}
	}
}

//====================================================================================================
//	Function Name	:	Menu_ShowHide
//----------------------------------------------------------------------------------------------------
function Menu_ShowHide(menu, img, imgUp, imgDown)
{
	if(menu)
	{
		if(menu.style.display == 'none')
		{
			menu.style.visibility	= 'visible';
			menu.style.display		= 'block';
			img.src					= imgUp;
			SetCookie(menu.id, 'open');
		}
		else
		{
			menu.style.visibility 	= 'hidden';
			menu.style.display 		= 'none';
			img.src					= imgDown;
			SetCookie(menu.id, 'close');
		}
	}
}

//====================================================================================================
//	Function Name	:	UploadImage_Change
//----------------------------------------------------------------------------------------------------
function UploadImage_Change(obj, imgTag, defaultVal, defaultWidth)
{
	imgTag.width = 120;
	
	if(obj.value == '')
		imgTag.src = defaultVal;
	else
	{
		imgTag.src = obj.value;
		
		if(defaultWidth != '')
			imgTag.width = defaultWidth;
	}
}

//====================================================================================================
//	Function Name	:	SetTime
//----------------------------------------------------------------------------------------------------
function SetTime()
{
	if(!document.getElementById('timeId'))	return;
	
	var Hours;
	var Mins;
	var Time;
	
	Stamp = new Date();
	
	Hours = Stamp.getHours();
	
	if(Hours >= 12)
		Time = " PM";
	else
		Time = " AM";
	
	if(Hours > 12)
		Hours -= 12;
	
	if(Hours == 0)
		Hours = 12;
	
	Mins = Stamp.getMinutes();
	
	if(Mins < 10)
		Mins = "0" + Mins;
	
	Sec = Stamp.getSeconds();
	
	if(Sec < 10)
		Sec = "0" + Sec;
	
	document.getElementById('timeId').innerHTML = ("&nbsp;" + Hours + ":" + Mins + ":" + Sec + Time);
}

//setInterval('SetTime()',1000);

//====================================================================================================
//	Function Name	:	getDate
//----------------------------------------------------------------------------------------------------
function getDate(parmDate)
{
	var m_names = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September","October", "November", "December");
	
	var curr_date = parmDate.getDate();
	
	var sup = "";
	
	if(curr_date == 1 || curr_date == 21 || curr_date == 31)
	{
	   sup = "st";
	}
	else if(curr_date == 2 || curr_date == 22)
	{
	   sup = "nd";
	}
	else if(curr_date == 3 || curr_date == 23)
	{
	   sup = "rd";
	}
	else
	{
	   sup = "th";
	}
	
	var curr_month 	= parmDate.getMonth();
	var curr_year 	= parmDate.getFullYear();
	
	return (curr_date + "<sup>" + sup + "</sup> " + m_names[curr_month] + " " + curr_year);
}

//====================================================================================================
//	Function Name	:	GetCookie
//----------------------------------------------------------------------------------------------------
function GetCookie(name)
{
	var arg		= name + "=";
	var alen	= arg.length;
	var clen	= document.cookie.length;
	var i		= 0;
	
	while (i < clen)
	{
		var j = i + alen;
		
		if (document.cookie.substring(i, j) == arg)
			return getCookieVal (j);
		
		i = document.cookie.indexOf(" ", i) + 1;
		
		if (i == 0)
			break;
	}
	
	return null;
}

//====================================================================================================
//	Function Name	:	SetCookie
//----------------------------------------------------------------------------------------------------
function SetCookie(name, value)
{
	var argv = SetCookie.arguments;
	var argc = SetCookie.arguments.length;
	
	var expires = (argc > 2) ? argv[2] : null;
	var path	= (argc > 3) ? argv[3] : null;
	var domain	= (argc > 4) ? argv[4] : null;
	var secure	= (argc > 5) ? argv[5] : false;
	
	document.cookie = name + "=" + escape (value) +
	((expires	== null)	? "" 			: ("; expires=" + expires.toGMTString())) +
	((path		== null)	? "" 			: ("; path=" + path)) +
	((domain	== null)	? "" 			: ("; domain=" + domain)) +
	((secure	== true)	? "; secure"	: "");
}
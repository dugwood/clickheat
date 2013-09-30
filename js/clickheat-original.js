/**
ClickHeat : Suivi et analyse des clics / Tracking and clicks analysis

@author Yvan Taviaud - LabsMedia - www.labsmedia.com/clickheat/
@since 27/10/2006
@update 01/03/2007 - Yvan : correctif Firefox (Károly Marton)
@update 23/03/2007 - Yvan : protection de 2 secondes entre chaque clic, et X clics maximum par page
@update 18/05/2007 - Yvan : suppression de clickHeatPage, ajout de clickHeatGroup et clickHeatSite
@update 27/08/2007 - Yvan : changement du système de débug
@update 28/09/2007 - Yvan : ajout de quelques messages de débug
@update 16/03/2008 - Yvan : utilisation des Listeners - ajout d'un délai pour enregistrer le clic correctement - correctif JSLint
@update 05/07/2010 - Yvan : ajout de Chrome, ajout du test non-Ajax pour libérer le clic plus rapidement
@update 13/08/2010 - Yvan : gestion de IE 8 qui posait des soucis sur l'event
@update 08/03/2011 - Yvan : ajout d'un filtre en cas de clic trop bas (hors du document.body)

Tested under :
Windows 2000 - IE 6.0
Linux - Firefox 2.0.0.1, Konqueror 3.5.5, IE 7
*/

/*global window: true*/

/* Event listener */
function addEvtListener(obj, evtName, f)
{
	/* FF */
	if (document.addEventListener)
	{
		if (obj)
		{
			obj.addEventListener(evtName, f, false);
		}
		else
		{
			addEventListener(evtName, f, false);
		}
	}
	/* IE */
	else if (attachEvent)
	{
		if (obj)
		{
			obj.attachEvent('on' + evtName, f);
		}
		else
		{
			attachEvent('on' + evtName, f);
		}
	}
}

/* Main variables */
var clickHeatGroup = '',
clickHeatSite = '',
clickHeatServer = '',
clickHeatLastIframe = -1,
clickHeatTime = 0,
clickHeatQuota = -1,
clickHeatBrowser = '',
clickHeatDocument = '',
clickHeatWait = 500,
clickHeatLocalWait = 0,
clickHeatDebug = (document.location.href.indexOf('debugclickheat') !== -1);

/**
* Shows a debug string
**/
function showClickHeatDebug(str)
{
	if (clickHeatDebug === true)
	{
		document.getElementById('clickHeatDebuggerSpan').innerHTML = str;
		document.getElementById('clickHeatDebuggerDiv').style.display = 'block';
	}
}

/* Main function */
function catchClickHeat(e)
{
	var c,
	element,
	x, y,
	w, h,
	winw, winh,
	scrollx, scrolly,
	clickTime,
	now,
	clickHeatImg,
	params,
	sent		= false,
	xmlhttp		= false;
	/* Use a try{} to avoid showing errors to users */
	try
	{
		showClickHeatDebug('Gathering click data...');
		if (clickHeatQuota === 0)
		{
			showClickHeatDebug('Click not logged: quota reached');
			return true;
		}
		if (clickHeatGroup === '')
		{
			showClickHeatDebug('Click not logged: group name empty (clickHeatGroup)');
			return true;
		}
		/* Look for the real event */
		if (!e)
		{
			e = window.event;
		}
		c = e.which || e.button;
		element = e.srcElement || null;
		if (c === 0)
		{
			showClickHeatDebug('Click not logged: no button pressed');
			return true;
		}
		/* Filter for same iframe (focus on iframe => popup ad => close ad => new focus on same iframe) */
		if (element !== null && element.tagName.toLowerCase() === 'iframe')
		{
			if (element.sourceIndex === clickHeatLastIframe)
			{
				showClickHeatDebug('Click not logged: same iframe (a click on iframe opens a popup and popup is closed => iframe gets the focus again)');
				return true;
			}
			clickHeatLastIframe = element.sourceIndex;
		}
		else
		{
			clickHeatLastIframe = -1;
		}
		x = e.clientX;
		y = e.clientY;
		w = clickHeatDocument.clientWidth || window.innerWidth;
		h = clickHeatDocument.clientHeight || window.innerHeight;
		scrollx = window.pageXOffset || clickHeatDocument.scrollLeft;
		scrolly = window.pageYOffset || clickHeatDocument.scrollTop;
		winw = Math.max(clickHeatDocument.scrollWidth, clickHeatDocument.offsetWidth, w);
		winh = Math.max(clickHeatDocument.scrollHeight, clickHeatDocument.offsetHeight, h);

		/* Is the click in the viewing area? Not on scrollbars. The problem still exists for FF on the horizontal scrollbar */
		if (x > w || y > h)
		{
			showClickHeatDebug('Click not logged: out of document (should be a click on scrollbars)');
			return true;
		}
		x += scrollx;
		y += scrolly;
		/* Is the click in the document area? */
		if (x < 0 || y < 0 || x > winw || y > winh)
		{
			showClickHeatDebug('Click not logged: out of document (should be a click out of the document\'s body)');
			return true;
		}
		/* Check if last click was at least 1 second ago */
		clickTime = new Date();
		if (clickTime.getTime() - clickHeatTime < 1000)
		{
			showClickHeatDebug('Click not logged: at least 1 second between clicks');
			return true;
		}
		clickHeatTime = clickTime.getTime();
		if (clickHeatQuota > 0)
		{
			clickHeatQuota = clickHeatQuota - 1;
		}
		params = 's=' + clickHeatSite + '&g=' + clickHeatGroup + '&x=' + x + '&y=' + y + '&w=' + w + '&b=' + clickHeatBrowser + '&c=' + c + '&random=' + Date();
		showClickHeatDebug('Ready to send click data...');
		/* Local request (not starting with "http")? Try an ajax call */
		if (clickHeatServer.indexOf('http') !== 0)
		{
			try
			{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
			}
			catch (er)
			{
				try
				{
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch (oc)
				{
					xmlhttp = null;
				}
			}
			if (!xmlhttp && typeof(XMLHttpRequest) !== 'undefined')
			{
				xmlhttp = new XMLHttpRequest();
			}
			if (xmlhttp)
			{
				if (clickHeatDebug === true)
				{
					xmlhttp.onreadystatechange = function ()
					{
						if (xmlhttp.readyState === 4)
						{
							if (xmlhttp.status === 200)
							{
								showClickHeatDebug('Click recorded at ' + clickHeatServer + ' with the following parameters:<br/>x = ' + x + ' (' + (x - scrollx) + 'px from left + ' + scrollx + 'px of horizontal scrolling, max width = ' + winw + ')<br/>y = ' + y + ' (' + (y - scrolly) + 'px from top + ' + scrolly + 'px of vertical scrolling, max height = ' + winh + ')<br/>width = ' + w + '<br/>browser = ' + clickHeatBrowser + '<br/>click = ' + c + '<br/>site = ' + clickHeatSite + '<br/>group = ' + clickHeatGroup + '<br/><br/>Server answer: ' + xmlhttp.responseText);
							}
							else if (xmlhttp.status === 404)
							{
								showClickHeatDebug('click.php was not found at: ' + (clickHeatServer !== '' ? clickHeatServer : '/clickheat/click.php') + ' please set clickHeatServer value');
							}
							else
							{
								showClickHeatDebug('click.php returned a status code ' + xmlhttp.status + ' with the following error: ' + xmlhttp.responseText);
							}
							/* Stop waiting */
							clickHeatLocalWait = 0;
						}
					};
				}
				xmlhttp.open('GET', clickHeatServer + '?' + params, true);
				xmlhttp.send(null);
				sent = true;
			}
		}
		if (sent === false)
		{
			/* This test is needed, as it includes the call to click.php in the iframe */
			if (clickHeatDebug === true)
			{
				showClickHeatDebug('Click recorded at ' + clickHeatServer + ' with the following parameters:<br/>x = ' + (x + scrollx) + ' (' + x + 'px from left + ' + scrollx + 'px of horizontal scrolling)<br/>y = ' + (y + scrolly) + ' (' + y + 'px from top + ' + scrolly + 'px of vertical scrolling)<br/>width = ' + w + '<br/>browser = ' + clickHeatBrowser + '<br/>click = ' + c + '<br/>site = ' + clickHeatSite + '<br/>group = ' + clickHeatGroup + '<br/><br/>Server answer:<br/>' + '<iframe src="' + clickHeatServer + '?' + params + '" width="700" height="60"></iframe>');
			}
			else
			{
				clickHeatImg = new Image();
				clickHeatImg.src = clickHeatServer + '?' + params;
				//			clickHeatImg.onload = function() { clickHeatLocalWait = 0; }
			}
		}
		/* Little waiting cycle: default is to wait until Ajax sent or until the end of the time if no Ajax is available */
		now = new Date();
		clickHeatLocalWait = now.getTime() + clickHeatWait;
		while (clickHeatLocalWait > now.getTime())
		{
			now = new Date();
		}
	}
	catch (err)
	{
		showClickHeatDebug('An error occurred while processing click (Javascript error): ' + err.message);
	}
	return true;
}

function initClickHeat()
{
	var i,
	iFrames,
	b,
	browsers,
	domain,
	div;
	/* Debug Window */
	if (clickHeatDebug === true)
	{
		div = document.createElement('div');
		div.id = 'clickHeatDebuggerDiv';
		div.style.padding = '5px';
		div.style.display = 'none';
		div.style.position = 'absolute';
		div.style.top = '200px';
		div.style.left = '200px';
		div.style.border = '1px solid #888';
		div.style.backgroundColor = '#eee';
		div.style.color = '#a00';
		div.style.zIndex = 99;
		div.innerHTML = '<a href="#" onmouseover="document.getElementById(\'clickHeatDebuggerDiv\').style.display = \'none\'; return false" style="float:right">Rollover to close</a><strong>ClickHeat debug:</strong><br/><br/><span id="clickHeatDebuggerSpan"></span>';
		document.body.appendChild(div);
	}

	if (clickHeatGroup === '' || clickHeatServer === '')
	{
		showClickHeatDebug('ClickHeat NOT initialised: either clickHeatGroup or clickHeatServer is empty');
		return false;
	}

	/* If current website has the same domain as the script, we remove the domain so that the call is made using Ajax */
	domain = document.location.protocol + '//' + document.location.host;
	if (clickHeatServer.indexOf(domain) === 0)
	{
		clickHeatServer = clickHeatServer.substring(domain.length, clickHeatServer.length);
	}
	/* Add onmousedown event using listeners */
	addEvtListener(document, 'mousedown', catchClickHeat);
	/* Add onfocus event on iframes (mostly ads) - Does NOT work with Gecko-powered browsers, because onfocus doesn't exist on iframes */
	iFrames = document.getElementsByTagName('iframe');
	for (i = 0; i < iFrames.length; i += 1)
	{
		addEvtListener(iFrames[i], 'focus', catchClickHeat);
	}
	/* Preparing main variables */
	clickHeatDocument = document.documentElement && document.documentElement.clientHeight !== 0 ? document.documentElement : document.body;
	/* Also the User-Agent is not the best value to use, it's the only one that gives the real browser */
	b = navigator.userAgent ? navigator.userAgent.toLowerCase().replace(/-/g, '') : '';
	/* Always test Chrome before Safari */
	browsers = ['chrome', 'firefox', 'safari', 'msie', 'opera'];
	clickHeatBrowser = 'unknown';
	for (i = 0; i < browsers.length; i += 1)
	{
		if (b.indexOf(browsers[i]) !== -1)
		{
			clickHeatBrowser = browsers[i];
			break;
		}
	}
	showClickHeatDebug('ClickHeat initialised with:<br/>site = ' + clickHeatSite + '<br/>group = ' + clickHeatGroup + '<br/>server = ' + clickHeatServer + '<br/>quota = ' + (clickHeatQuota === -1 ? 'unlimited' : clickHeatQuota) + '<br/>browser = ' + clickHeatBrowser + '<br/><br/><strong>Click in a blank area (not on a link) to test ClickHeat</strong>');
}
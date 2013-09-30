/**
** Main functions for administration of ClickHeat
**
** @author Yvan Taviaud - Labsmedia.com
** @since 01/04/2007
**/

var currentAlpha = 80,
lastDayOfMonth = 0,
weekDays = [],
currentDate = [0, 0, 0, 0, 0, 0],
currentRange = 'd',
currentWidth = 0,
pleaseWait = '',
cleanerRunning = '',
isJsOkay = '',
jsAdminCookie = '',
hideIframes = true,
hideFlashes = true,
isPiwikModule = false,
scriptPath = '',
scriptIndexPath = '';

/** Show layout's parameters */
function showRadioLayout()
{
	for (var i = 0; i < 7; i += 1)
	{
		document.getElementById('layout-span-' + i).style.display = (document.getElementById('layout-radio-' + i).checked ? 'block' : 'none');
	}
}

/** Change Alpha on heatmap */
function changeAlpha(alpha)
{
	document.getElementById('alpha-level-' + currentAlpha).style.borderTop = '1px solid #888';
	document.getElementById('alpha-level-' + currentAlpha).style.borderBottom = '1px solid #888';
	currentAlpha = alpha;
	document.getElementById('alpha-level-' + currentAlpha).style.borderTop = '2px solid #55b';
	document.getElementById('alpha-level-' + currentAlpha).style.borderBottom = '2px solid #55b';
	for (var i = 0; i < document.images.length; i += 1)
	{
		if (document.images[i].id.search(/^heatmap-\d+$/) === 0)
		{
			document.images[i].style.opacity = alpha / 100;
			if (document.body.filters)
			{
				document.images[i].style.filter = 'alpha(opacity=' + alpha + ')';
			}
		}
	}
}

/** Returns the "top" value of an element */
function getTop(obj)
{
	if (obj.offsetParent)
	{
		return (obj.offsetTop + getTop(obj.offsetParent));
	}
	else
	{
		return obj.offsetTop;
	}
}

/** Resize the div relative to window height and selected screen size */
function resizeDiv()
{
	var oD = document.documentElement && document.documentElement.clientHeight !== 0 ? document.documentElement : document.body, iH = oD.innerHeight || oD.clientHeight, iW = oD.innerWidth || oD.clientWidth;
	document.getElementById('overflowDiv').style.height = (iH < 300 ? 400 : iH) - getTop(document.getElementById('overflowDiv')) + 'px';
	/** Width of main display */
	iW = iW < 300 ? 400 : iW;
	if (document.getElementById('formScreen').value === '0')
	{
		currentWidth = iW;
	}
	else
	{
		currentWidth = document.getElementById('formScreen').value - 5;
	}
	document.getElementById('overflowDiv').style.width = currentWidth + 'px';
	document.getElementById('webPageFrame').style.width = currentWidth - 25 + 'px';
}

/** Ajax object */
function getXmlHttp()
{
	var xmlhttp = false;
	try
	{
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	}
	catch (e)
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
	return xmlhttp;
}

/** Ajax request to update PNGs */
function updateHeatmap()
{
	var xmlhttp, screen = 0;
	document.getElementById('pngDiv').innerHTML = '&nbsp;<div style="line-height:20px"><span class="error">' + pleaseWait + '</span></div>';
	xmlhttp = getXmlHttp();
	if (document.getElementById('formScreen').value === '0')
	{
		screen = -1 * currentWidth + 25;
	}
	else
	{
		screen = document.getElementById('formScreen').value;
	}
	xmlhttp.open('GET', scriptIndexPath + 'action=generate&group=' + document.getElementById('formGroup').value + '&screen=' + screen + '&browser=' + document.getElementById('formBrowser').value + '&date=' + currentDate[2] + '-' + currentDate[1] + '-' + currentDate[0] + '&range=' + currentRange + '&heatmap=' + (document.getElementById('formHeatmap').checked ? '1' : '0') + '&rand=' + Date(), true);
	xmlhttp.onreadystatechange = function ()
	{
		if (xmlhttp.readyState === 4 && xmlhttp.status === 200)
		{
			document.getElementById('pngDiv').innerHTML = xmlhttp.responseText.replace(/_JAVASCRIPT_/, isJsOkay);
			document.getElementById('webPageFrame').height = document.getElementById('pngDiv').offsetHeight;
			changeAlpha(currentAlpha);
		}
	};
	xmlhttp.send(null);
}

/** Update calendar selected days */
function updateCalendar(day)
{
	var min, max, week, d;
	if (isPiwikModule === true)
	{
		return;
	}
	/** currentDate[day, month, year, saved_day, month_origin, year_origin] */
	if (day)
	{
		currentDate[3] = day;
	}
	currentDate[1] = currentDate[4];
	currentDate[2] = currentDate[5];
	/** Showing one day */
	if (currentRange === 'd')
	{
		/** Remember the last day used */
		currentDate[0] = currentDate[3];
		min = currentDate[0];
		max = currentDate[0];
	}
	/** Showing one month */
	if (currentRange === 'm')
	{
		currentDate[0] = 1;
		min = 1;
		max = weekDays.length;
	}
	/** Showing one week */
	if (currentRange === 'w')
	{
		/** Remember the last day used */
		currentDate[0] = currentDate[3];
		week = weekDays[currentDate[0]];
		min = 0;
		max = 0;
		for (d = 1; d < weekDays.length; d += 1)
		{
			if (weekDays[d] === week)
			{
				if (min === 0)
				{
					currentDate[0] = d;
					min = d;
				}
				max = d;
			}
		}
		/** Start was on the previous month */
		if (min === 1 && max !== 7)
		{
			currentDate[0] = lastDayOfMonth - 6 + max;
			currentDate[1] -= 1;
			if (currentDate[1] === 0)
			{
				currentDate[1] = 12;
				currentDate[2] -= 1;
			}
		}
	}
	for (d = 1; d < weekDays.length; d += 1)
	{
		document.getElementById('clickheat-calendar-' + d).className = (d >= min && d <= max ? 'clickheat-calendar-on' : '');
	}
	for (d = 1; d < 7; d += 1)
	{
		if (document.getElementById('clickheat-calendar-10' + d))
		{
			document.getElementById('clickheat-calendar-10' + d).className = (currentRange === 'w' && weekDays[min] === weekDays[1] ? 'clickheat-calendar-on' : '');
		}
		if (document.getElementById('clickheat-calendar-11' + d))
		{
			document.getElementById('clickheat-calendar-11' + d).className = (currentRange === 'w' && weekDays[max] === weekDays[weekDays.length - 1] ? 'clickheat-calendar-on' : '');
		}
	}
	document.getElementById('clickheat-calendar-d').className = (currentRange === 'd' ? 'clickheat-calendar-on' : '');
	document.getElementById('clickheat-calendar-w').className = (currentRange === 'w' ? 'clickheat-calendar-on' : '');
	document.getElementById('clickheat-calendar-m').className = (currentRange === 'm' ? 'clickheat-calendar-on' : '');
	updateHeatmap();
}

/** Ajax request to show group layout */
function showGroupLayout()
{
	var xmlhttp;
	xmlhttp = getXmlHttp();
	xmlhttp.open('GET', scriptIndexPath + 'action=layout&group=' + document.getElementById('formGroup').value + '&rand=' + Date(), true);
	xmlhttp.onreadystatechange = function ()
	{
		if (xmlhttp.readyState === 4 && xmlhttp.status === 200)
		{
			document.getElementById('layoutDiv').innerHTML = xmlhttp.responseText;
			document.getElementById('layoutDiv').style.display = 'block';
			showRadioLayout();
		}
	};
	xmlhttp.send(null);
}

/** Hide group layout */
function hideGroupLayout()
{
	document.getElementById('layoutDiv').style.display = 'none';
	document.getElementById('layoutDiv').innerHTML = '';
}

/** Update JS code in display */
function updateJs()
{
	var str = '',
	language = (navigator.language && navigator.language === 'fr' ? 'fr' : 'com'),
	addReturn = document.getElementById('jsShort').checked ? '' : '<br />',
	linkList = [],
	rand;
	str += '&lt;script type="text/javascript" src="';
	str += scriptPath + 'js/clickheat.js"&gt;&lt;/script&gt;' + addReturn;
	if (language === 'fr')
	{
		linkList = ['&lt;a href="http://www.dugwood.fr/clickheat/index.html"&gt;ClickHeat&lt;/a&gt;', '&lt;a href="http://www.dugwood.fr/index.html"&gt;Module Heatmap&lt;/a&gt;', '&lt;a href="http://www.dugwood.fr/index.html"&gt;CMS&lt;/a&gt;', '&lt;a href="http://www.dugwood.fr/index.html"&gt;Outils Open Source&lt;/a&gt;'];
	}
	else
	{
		linkList = ['&lt;a href="http://www.dugwood.com/clickheat/index.html"&gt;ClickHeat&lt;/a&gt;', '&lt;a href="http://www.dugwood.com/index.html"&gt;Heatmap plugin&lt;/a&gt;', '&lt;a href="http://www.dugwood.com/index.html"&gt;CMS&lt;/a&gt;', '&lt;a href="http://www.dugwood.com/index.html"&gt;Open Source Sofware&lt;/a&gt;'];
	}
	if (document.getElementById('jsShowImage').checked)
	{
		str += '&lt;a href="http://www.labsmedia.' + language + '/clickheat/index.html" title="ClickHeat: clicks heatmap"&gt;&lt;img src="' + scriptPath + 'images/logo.png" width="80" height="15" border="0" alt="ClickHeat : track clicks" /&gt;&lt;/a&gt;' + addReturn;
	}
	else
	{
		rand = Math.floor(Math.random() * linkList.length);
		str += '&lt;noscript&gt;&lt;p&gt;' + linkList[rand] + '&lt;/p&gt;&lt;/noscript&gt;' + addReturn;
	}
	str += '&lt;script type="text/javascript"&gt;&lt;!--<br />';
	str += 'clickHeatSite = ';
	/*jslint regexp: false*/
	/** Piwik form */
	if (isPiwikModule === true)
	{
		/*global piwik: false */
		str += piwik.idSite;
	}
	else
	{
		str += '\'<span class="error">' + document.getElementById('jsSite').value.replace(/[^a-z0-9\-_\.]+/gi, '.') + '</span>\'';
	}
	str += ';' + addReturn + 'clickHeatGroup = ';
	if (document.getElementById('jsGroup1').checked)
	{
		str += '\'<span class="error">' + document.getElementById('jsGroup').value.replace(/[^a-z0-9\-_\.]+/gi, '.') + '</span>\'';
	}
	if (document.getElementById('jsGroup2').checked)
	{
		str += '(document.title == \'\' ? \'-none-\' : encodeURIComponent(document.title))';
	}
	if (document.getElementById('jsGroup3').checked)
	{
		str += 'encodeURIComponent(window.location.pathname+window.location.search)';
	}
	str += ';' + addReturn;
	if (document.getElementById('jsQuota').value !== '0')
	{
		str += 'clickHeatQuota = <span class="error">' + document.getElementById('jsQuota').value.replace(/[^0-9]*/g, '') + '</span>;' + addReturn;
	}
	/*jslint regexp: true*/
	str += 'clickHeatServer = \'' + scriptPath + 'click.php\';' + addReturn;
	str += 'initClickHeat(); //--&gt;<br />';
	str += '&lt;/script&gt;';
	document.getElementById('clickheat-js').innerHTML = str;
}

/** Ajax request to show javascript code */
function showJsCode()
{
	var xmlhttp;
	xmlhttp = getXmlHttp();
	xmlhttp.open('GET', scriptIndexPath + 'action=javascript&rand=' + Date(), true);
	xmlhttp.onreadystatechange = function ()
	{
		if (xmlhttp.readyState === 4 && xmlhttp.status === 200)
		{
			document.getElementById('layoutDiv').innerHTML = xmlhttp.responseText;
			document.getElementById('layoutDiv').style.display = 'block';
			updateJs();
		}
	};
	xmlhttp.send(null);
}

/** Ajax request to get associated group in iframe */
function loadIframe()
{
	var xmlhttp;
	xmlhttp = getXmlHttp();
	xmlhttp.open('GET', scriptIndexPath + 'action=iframe&group=' + document.getElementById('formGroup').value + '&rand=' + Date(), true);
	xmlhttp.onreadystatechange = function ()
	{
		if (xmlhttp.readyState === 4 && xmlhttp.status === 200)
		{
			if (document.getElementById('webPageFrame').src.indexOf('clickempty.html') !== -1)
			{
				document.getElementById('webPageFrame').src = xmlhttp.responseText;
				updateCalendar();
			}
			else
			{
				document.getElementById('webPageFrame').src = xmlhttp.responseText;
				updateHeatmap();
			}
		}
	};
	xmlhttp.send(null);
}

/** Show layout's parameters */
function saveGroupLayout()
{
	var i, xmlhttp;
	for (i = 0; i < 7; i += 1)
	{
		if (document.getElementById('layout-radio-' + i).checked)
		{
			break;
		}
	}
	if (i === 7)
	{
		alert('Error');
		return false;
	}
	xmlhttp = getXmlHttp();
	xmlhttp.open('GET', scriptIndexPath + 'action=layoutupdate&group=' + document.getElementById('formGroup').value + '&url=' + encodeURIComponent(document.getElementById('formUrl').value) + '&left=' + document.getElementById('layout-left-' + i).value + '&right=' + document.getElementById('layout-right-' + i).value + '&center=' + document.getElementById('layout-center-' + i).value + '&rand=' + Date(), true);
	xmlhttp.onreadystatechange = function ()
	{
		if (xmlhttp.readyState === 4 && xmlhttp.status === 200)
		{
			if (xmlhttp.responseText !== 'OK')
			{
				alert(xmlhttp.responseText);
			}
			hideGroupLayout();
			loadIframe();
		}
	};
	xmlhttp.send(null);
}

/** Hide iframe's flashes and iframes */
function cleanIframe()
{
	var currentIframeContent, currentIframe, newContent, pos, pos2, reg, oldPos, startReg, endReg, found, width, height;
	if (document.getElementById('webPageFrame').src.search('clickempty.html') !== -1)
	{
		return true;
	}
	if (hideIframes === false && hideFlashes === false)
	{
		return true;
	}
	try
	{
		currentIframe = document.getElementById('webPageFrame');
		if (currentIframe.contentDocument)
		{
			currentIframeContent = currentIframe.contentDocument;
		}
		else if (currentIframe.Document)
		{
			currentIframeContent = currentIframe.Document;
		}
		/** Hide iframes and flashes content */
		if (!currentIframeContent)
		{
			return false;
		}
		newContent = currentIframeContent.body.innerHTML;
		oldPos = 0;
		if (hideIframes === false)
		{
			reg = 'object';
		}
		else
		{
			if (hideFlashes === false)
			{
				reg = 'iframe';
			}
			else
			{
				reg = 'object|iframe';
			}
		}
		startReg = new RegExp('<(' + reg + ')', 'i');
		endReg = new RegExp('<\/(' + reg + ')', 'i');
		while (true)
		{
			pos = newContent.search(startReg);
			pos2 = newContent.search(endReg);
			if (pos === -1 || pos2 === -1 || pos === oldPos || pos > pos2)
			{
				break;
			}
			pos2 += 9;
			found = newContent.substring(pos, pos2);
			width = found.match(/width=["']?(\d+)/); // " quote for Zend
			if (width === null)
			{
				width = [0, 300];
			}
			height = found.match(/height=["']?(\d+)/); // " quote for Zend
			if (height === null)
			{
				height = [0, 150];
			}
			newContent = newContent.substring(0, pos) + '<span style="margin:0; padding:' + Math.ceil(height[1] / 2) + 'px ' + Math.ceil(width[1] / 2) + 'px; line-height:' + (height[1] * 1 + 10) + 'px; border:1px solid #00f; background-color:#aaf; font-size:0;">Flash/Iframe</span>&nbsp;' + newContent.substring(pos2, newContent.length);
			oldPos = pos;
		}
		currentIframeContent.body.innerHTML = newContent;
	}
	catch (e) {}
}

/** Draw alpha selector */
function drawAlphaSelector(obj, max)
{
	var str = '', i, grey, alpha;
	for (i = 0; i < max; i += 1)
	{
		grey = 255 - Math.ceil(i * 255 / max);
		alpha = Math.ceil(i * 100 / max);
		str += '<a href="#" id="alpha-level-' + alpha + '" onclick="changeAlpha(' + alpha + '); this.blur(); return false;" style="font-size:12px; border-top:1px solid #888; border-bottom:1px solid #888;' + (i === 0 ? ' border-left:1px solid #888;' : '') + '' + (i === (max - 1) ? ' border-right:1px solid #888;' : '') + ' text-decoration:none; background-color:rgb(' + grey + ',' + grey + ',' + grey + ');">&nbsp;</a>';
	}
	document.getElementById(obj).innerHTML = str;
	/** Check that currentAlpha exists */
	while (!document.getElementById('alpha-level-' + currentAlpha))
	{
		currentAlpha -= 1;
	}
}

/** Ajax request to show javascript code */
function runCleaner()
{
	document.getElementById('cleaner').innerHTML = cleanerRunning;
	var xmlhttp;
	xmlhttp = getXmlHttp();
	xmlhttp.open('GET', scriptIndexPath + 'action=cleaner&rand=' + Date(), true);
	xmlhttp.onreadystatechange = function ()
	{
		if (xmlhttp.readyState === 4 && xmlhttp.status === 200)
		{
			if (xmlhttp.responseText === 'OK')
			{
				document.getElementById('cleaner').innerHTML = '';
			}
			else
			{
				document.getElementById('cleaner').innerHTML = xmlhttp.responseText;
				if (xmlhttp.responseText.indexOf('JSLint') === -1)
				{
					setTimeout(function ()
					{
						document.getElementById('cleaner').innerHTML = '';
					}, 3000);
				}
				else
				{
					document.getElementById('cleaner').style.display = 'block';
					document.getElementById('cleaner').style.textAlign = 'left';
					document.getElementById('cleaner').style.marginTop = '100px';
				}
			}
		}
	};
	xmlhttp.send(null);
}

/** Ajax request to show latest available version */
function showLatestVersion()
{
	var xmlhttp;
	xmlhttp = getXmlHttp();
	xmlhttp.open('GET', scriptIndexPath + 'action=latest&rand=' + Date(), true);
	xmlhttp.onreadystatechange = function ()
	{
		if (xmlhttp.readyState === 4 && xmlhttp.status === 200)
		{
			document.getElementById('layoutDiv').innerHTML = xmlhttp.responseText;
			document.getElementById('layoutDiv').style.display = 'block';
		}
	};
	xmlhttp.send(null);
}

/** Shows main panel */
function showPanel()
{
	var div = (isPiwikModule === true ? 'contenu' : 'adminPanel');
	if (document.getElementById(div).style.display !== 'none')
	{
		return true;
	}
	if (isPiwikModule === true)
	{
		document.getElementById('topBars').style.display = 'block';
		document.getElementById('header').style.display = 'block';
	}
	document.getElementById(div).style.display = 'block';
	document.getElementById('divPanel').innerHTML = '<img src="' + scriptPath + 'images/arrow-up.png" width="11" height="6" alt="" />';
	resizeDiv();
}
/** Hides main panel */
function hidePanel()
{
	var div = (isPiwikModule === true ? 'contenu' : 'adminPanel');
	if (isPiwikModule === true)
	{
		document.getElementById('topBars').style.display = 'none';
		document.getElementById('header').style.display = 'none';
	}
	document.getElementById(div).style.display = 'none';
	document.getElementById('divPanel').innerHTML = '<img src="' + scriptPath + 'images/arrow-down.png" width="11" height="6" alt="" />';
	resizeDiv();
}

/** Reverse the state of the admin cookie (used not to log the clicks for admin user) */
function adminCookie()
{
	if (confirm(jsAdminCookie))
	{
		document.cookie = 'clickheat-admin=; expires=Fri, 27 Jul 2001 01:00:00 UTC; path=/';
	}
	else
	{
		var date = new Date();
		date.setTime(date.getTime() + 365 * 86400 * 1000);
		document.cookie = 'clickheat-admin=1; expires=' + date.toGMTString() + '; path=/';
	}
}

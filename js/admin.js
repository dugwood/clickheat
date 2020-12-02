/**
 ** Main functions for administration of ClickHeat
 **
 ** @author Yvan Taviaud - Dugwood - www.dugwood.com
 ** @since 01/04/2007
 **/

var chAdmin = {
	currentAlpha: 80,
	lastDayOfMonth: 0,
	weekDays: [],
	currentDate: [0, 0, 0, 0, 0, 0],
	currentRange: 'd',
	currentWidth: 0,
	pleaseWait: '',
	cleanerRunning: '',
	isJsOkay: '',
	jsAdminCookie: '',
	hideIframes: true,
	hideFlashes: true,
	isPiwikModule: false,
	scriptPath: '',
	scriptIndexPath: ''
};

/* Show layout's parameters */
function showRadioLayout()
{
	for (var i = 0; i < 7; i += 1)
	{
		document.getElementById('layout-span-' + i).style.display = (document.getElementById('layout-radio-' + i).checked ? 'block' : 'none');
	}
}

/* Change Alpha on heatmap */
function changeAlpha(alpha)
{
	document.getElementById('alpha-level-' + chAdmin.currentAlpha).style.borderTop = '1px solid #888';
	document.getElementById('alpha-level-' + chAdmin.currentAlpha).style.borderBottom = '1px solid #888';
	chAdmin.currentAlpha = alpha;
	document.getElementById('alpha-level-' + chAdmin.currentAlpha).style.borderTop = '2px solid #55b';
	document.getElementById('alpha-level-' + chAdmin.currentAlpha).style.borderBottom = '2px solid #55b';
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

/* Returns the "top" value of an element */
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

/* Resize the div relative to window height and selected screen size */
function resizeDiv()
{
	var oD = document.documentElement && document.documentElement.clientHeight !== 0 ? document.documentElement : document.body, iH = oD.innerHeight || oD.clientHeight, iW = oD.innerWidth || oD.clientWidth;
	document.getElementById('overflowDiv').style.height = (iH < 300 ? 400 : iH) - getTop(document.getElementById('overflowDiv')) + 'px';
	/* Width of main display */
	iW = iW < 300 ? 400 : iW;
	if (document.getElementById('formScreen').value === '0')
	{
		chAdmin.currentWidth = iW;
	}
	else
	{
		chAdmin.currentWidth = document.getElementById('formScreen').value - 5;
	}
	document.getElementById('overflowDiv').style.width = chAdmin.currentWidth + 'px';
	document.getElementById('webPageFrame').style.width = chAdmin.currentWidth - 25 + 'px';
}

/* Ajax object */
function getXmlHttp()
{
	/* global ActiveXObject */
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
	if (!xmlhttp && typeof (XMLHttpRequest) !== 'undefined')
	{
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}

/* Ajax request to update PNGs */
function updateHeatmap()
{
	var xmlhttp, screen = 0;
	document.getElementById('pngDiv').innerHTML = '&nbsp;<div style="line-height:20px"><span class="error">' + chAdmin.pleaseWait + '</span></div>';
	xmlhttp = getXmlHttp();
	if (document.getElementById('formScreen').value === '0')
	{
		screen = -1 * chAdmin.currentWidth + 25;
	}
	else
	{
		screen = document.getElementById('formScreen').value;
	}
	xmlhttp.open('GET', chAdmin.scriptIndexPath + 'action=generate&group=' + document.getElementById('formGroup').value + '&screen=' + screen + '&browser=' + document.getElementById('formBrowser').value + '&date=' + chAdmin.currentDate[2] + '-' + chAdmin.currentDate[1] + '-' + chAdmin.currentDate[0] + '&range=' + chAdmin.currentRange + '&heatmap=' + (document.getElementById('formHeatmap').checked ? '1' : '0') + '&rand=' + Date(), true);
	xmlhttp.onreadystatechange = function ()
	{
		if (xmlhttp.readyState === 4 && xmlhttp.status === 200)
		{
			document.getElementById('pngDiv').innerHTML = xmlhttp.responseText.replace(/_JAVASCRIPT_/, chAdmin.isJsOkay);
			document.getElementById('webPageFrame').height = document.getElementById('pngDiv').offsetHeight;
			changeAlpha(chAdmin.currentAlpha);
		}
	};
	xmlhttp.send(null);
}

/* Update calendar selected days */
function updateCalendar(day)
{
	var min, max, week, d;
	if (chAdmin.isPiwikModule)
	{
		return;
	}
	/* chAdmin.currentDate[day, month, year, saved_day, month_origin, year_origin] */
	if (day)
	{
		chAdmin.currentDate[3] = day;
	}
	chAdmin.currentDate[1] = chAdmin.currentDate[4];
	chAdmin.currentDate[2] = chAdmin.currentDate[5];
	/* Showing one day */
	if (chAdmin.currentRange === 'd')
	{
		/* Remember the last day used */
		chAdmin.currentDate[0] = chAdmin.currentDate[3];
		min = chAdmin.currentDate[0];
		max = chAdmin.currentDate[0];
	}
	/* Showing one month */
	if (chAdmin.currentRange === 'm')
	{
		chAdmin.currentDate[0] = 1;
		min = 1;
		max = chAdmin.weekDays.length;
	}
	/* Showing one week */
	if (chAdmin.currentRange === 'w')
	{
		/* Remember the last day used */
		chAdmin.currentDate[0] = chAdmin.currentDate[3];
		week = chAdmin.weekDays[chAdmin.currentDate[0]];
		min = 0;
		max = 0;
		for (d = 1; d < chAdmin.weekDays.length; d += 1)
		{
			if (chAdmin.weekDays[d] === week)
			{
				if (min === 0)
				{
					chAdmin.currentDate[0] = d;
					min = d;
				}
				max = d;
			}
		}
		/* Start was on the previous month */
		if (min === 1 && max !== 7)
		{
			chAdmin.currentDate[0] = chAdmin.lastDayOfMonth - 6 + max;
			chAdmin.currentDate[1] -= 1;
			if (chAdmin.currentDate[1] === 0)
			{
				chAdmin.currentDate[1] = 12;
				chAdmin.currentDate[2] -= 1;
			}
		}
	}
	for (d = 1; d < chAdmin.weekDays.length; d += 1)
	{
		document.getElementById('clickheat-calendar-' + d).className = (d >= min && d <= max ? 'clickheat-calendar-on' : '');
	}
	for (d = 1; d < 7; d += 1)
	{
		if (document.getElementById('clickheat-calendar-10' + d))
		{
			document.getElementById('clickheat-calendar-10' + d).className = (chAdmin.currentRange === 'w' && chAdmin.weekDays[min] === chAdmin.weekDays[1] ? 'clickheat-calendar-on' : '');
		}
		if (document.getElementById('clickheat-calendar-11' + d))
		{
			document.getElementById('clickheat-calendar-11' + d).className = (chAdmin.currentRange === 'w' && chAdmin.weekDays[max] === chAdmin.weekDays[chAdmin.weekDays.length - 1] ? 'clickheat-calendar-on' : '');
		}
	}
	document.getElementById('clickheat-calendar-d').className = (chAdmin.currentRange === 'd' ? 'clickheat-calendar-on' : '');
	document.getElementById('clickheat-calendar-w').className = (chAdmin.currentRange === 'w' ? 'clickheat-calendar-on' : '');
	document.getElementById('clickheat-calendar-m').className = (chAdmin.currentRange === 'm' ? 'clickheat-calendar-on' : '');
	updateHeatmap();
}

/* Ajax request to show group layout */
function showGroupLayout()
{
	var xmlhttp;
	xmlhttp = getXmlHttp();
	xmlhttp.open('GET', chAdmin.scriptIndexPath + 'action=layout&group=' + document.getElementById('formGroup').value + '&rand=' + Date(), true);
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

/* Hide group layout */
function hideGroupLayout()
{
	document.getElementById('layoutDiv').style.display = 'none';
	document.getElementById('layoutDiv').innerHTML = '';
}

/* Update JS code in display */
function updateJs()
{
	var str = '',
			language = (navigator.language && navigator.language === 'fr' ? 'fr' : 'com'),
			addReturn = document.getElementById('jsShort').checked ? '' : '<br />',
			linkList = [],
			rand;
	str += '&lt;script type="text/javascript" src="';
	str += chAdmin.scriptPath + 'js/clickheat.js"&gt;&lt;/script&gt;' + addReturn;
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
		str += '&lt;a href="http://www.dugwood.' + language + '/clickheat/index.html" title="ClickHeat: clicks heatmap"&gt;&lt;img src="' + chAdmin.scriptPath + 'images/logo.png" width="80" height="15" border="0" alt="ClickHeat : track clicks" /&gt;&lt;/a&gt;' + addReturn;
	}
	else
	{
		rand = Math.floor(Math.random() * linkList.length);
		str += '&lt;noscript&gt;&lt;p&gt;' + linkList[rand] + '&lt;/p&gt;&lt;/noscript&gt;' + addReturn;
	}
	str += '&lt;script&gt;<br/>';
	str += 'clickHeatSite = ';
	/*jslint regexp: false*/
	/* Piwik form */
	if (chAdmin.isPiwikModule)
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
	str += 'clickHeatServer = \'' + chAdmin.scriptPath + 'click.php\';' + addReturn;
	str += 'initClickHeat();<br />';
	str += '&lt;/script&gt;';
	document.getElementById('clickheat-js').innerHTML = str;
}

/* Ajax request to show javascript code */
function showJsCode()
{
	var xmlhttp;
	xmlhttp = getXmlHttp();
	xmlhttp.open('GET', chAdmin.scriptIndexPath + 'action=javascript&rand=' + Date(), true);
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

/* Ajax request to get associated group in iframe */
function loadIframe()
{
	var xmlhttp;
	xmlhttp = getXmlHttp();
	xmlhttp.open('GET', chAdmin.scriptIndexPath + 'action=iframe&group=' + document.getElementById('formGroup').value + '&rand=' + Date(), true);
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

/* Show layout's parameters */
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
	xmlhttp.open('GET', chAdmin.scriptIndexPath + 'action=layoutupdate&group=' + document.getElementById('formGroup').value + '&url=' + encodeURIComponent(document.getElementById('formUrl').value) + '&left=' + document.getElementById('layout-left-' + i).value + '&right=' + document.getElementById('layout-right-' + i).value + '&center=' + document.getElementById('layout-center-' + i).value + '&rand=' + Date(), true);
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

/* Hide iframe's flashes and iframes */
function cleanIframe()
{
	var currentIframe = document.getElementById('webPageFrame'),
			win = currentIframe.contentWindow || false,
			doc = win && win.document || currentIframe.contentDocument,
			search = [],
			e,
			elements = [],
			width,
			height,
			insert,
			s;
	if (!currentIframe || !doc || currentIframe.src.search('clickempty.html') !== -1)
	{
		return true;
	}
	try
	{
		if (chAdmin.hideIframes)
		{
			search.push('iframe');
		}
		if (chAdmin.hideFlashes)
		{
			search.push('object');
		}
		elements = doc.querySelectorAll(search.join(','));
		for (e = 0; e < elements.length; e++)
		{
			width = parseInt(elements[e].getAttribute('width') || 300);
			height = parseInt(elements[e].getAttribute('height') || 150);
			insert = doc.createElement('span');
			insert.innerHTML = 'Iframe/Object';
			s = insert.style;
			s.padding = Math.ceil(height / 2) + 'px ' + Math.ceil(width / 2) + 'px';
			s.lineHeight = (height + 10) + 'px';
			s.border = '1px solid #00f';
			s.backgroundColor = '#aaf';
			elements[e].parentNode.insertBefore(insert, elements[e]);
			elements[e].parentNode.removeChild(elements[e]);
		}
		elements = doc.querySelectorAll('*');
		for (e = 0; e < elements.length; e++)
		{
			if (elements[e].style && elements[e].style.backdropFilter)
			{
				elements[e].style.backdropFilter = '';
			}
		}
	}
	catch (ex)
	{
	}
}

/* Draw alpha selector */
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
	/* Check that chAdmin.currentAlpha exists */
	while (!document.getElementById('alpha-level-' + chAdmin.currentAlpha))
	{
		chAdmin.currentAlpha -= 1;
	}
}

/* Ajax request to show javascript code */
function runCleaner()
{
	document.getElementById('cleaner').innerHTML = chAdmin.cleanerRunning;
	var xmlhttp;
	xmlhttp = getXmlHttp();
	xmlhttp.open('GET', chAdmin.scriptIndexPath + 'action=cleaner&rand=' + Date(), true);
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

/* Ajax request to show latest available version */
function showLatestVersion()
{
	var xmlhttp;
	xmlhttp = getXmlHttp();
	xmlhttp.open('GET', chAdmin.scriptIndexPath + 'action=latest&rand=' + Date(), true);
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

/* Shows main panel */
function showPanel()
{
	var div = (chAdmin.isPiwikModule ? 'contenu' : 'adminPanel');
	if (document.getElementById(div).style.display !== 'none')
	{
		return true;
	}
	if (chAdmin.isPiwikModule)
	{
		document.getElementById('topBars').style.display = 'block';
		document.getElementById('header').style.display = 'block';
	}
	document.getElementById(div).style.display = 'block';
	document.getElementById('divPanel').innerHTML = '<img src="' + chAdmin.scriptPath + 'images/arrow-up.png" alt=""/>';
	resizeDiv();
}
/* Hides main panel */
function hidePanel()
{
	var div = (chAdmin.isPiwikModule ? 'contenu' : 'adminPanel');
	if (chAdmin.isPiwikModule)
	{
		document.getElementById('topBars').style.display = 'none';
		document.getElementById('header').style.display = 'none';
	}
	document.getElementById(div).style.display = 'none';
	document.getElementById('divPanel').innerHTML = '<img src="' + chAdmin.scriptPath + 'images/arrow-down.png" alt=""/>';
	resizeDiv();
}

/* Reverse the state of the admin cookie (used not to log the clicks for admin user) */
function adminCookie()
{
	if (confirm(chAdmin.jsAdminCookie))
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

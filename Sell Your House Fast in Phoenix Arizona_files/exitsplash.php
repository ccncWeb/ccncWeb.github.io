function addLoadEvent(func) { var oldonload = window.onload; if (typeof window.onload != 'function') { window.onload = func; } else { window.onload = function() { if (oldonload) { oldonload(); }  func(); }}}
function addClickEvent(a,i,func) { if (typeof a[i].onclick != 'function') { a[i].onclick = func; } }
var theDiv = '<div id="ExitSplashDiv" onmouseover="javascript:hideexitcancelbuttonimage();StopExitImpactAudio();" style="display:block; width:100%; height:100%; position:absolute; background:#FFFFFF; margin-top:0px; margin-left:0px;" align="center">';
theDiv = theDiv + '<div id="ExitCancelButtonImageDiv" style="background: #ffffff; width: 100%;" align="left"><img src="http://exitsplash.s3.amazonaws.com/files/exitimpactimage1.gif?exit54134303f20bd" border="0"></div>';
theDiv = theDiv + '<div id="exitsplashimpactaudio"><embed wmode="transparent" src="http://exitsplash.s3.amazonaws.com/player.swf?url=http://exitsplash.s3.amazonaws.com/files/exitsplash3.mp3&mode=play&autostart=true&exit54134303f20bd" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="1" height="1"></embed></div>';
theDiv = theDiv + '<iframe src="'+exitsplashpage+'" width="100%" height="100%" align="middle" frameborder="0"></iframe>';
theDiv = theDiv + '</div>';
theBody = document.body; if (!theBody) {theBody = document.getElementById("body"); if (!theBody) {theBody = document.getElementsByTagName("body")[0];}}
var PreventExitSplash = false;
function DisplayExitSplash(){ if(PreventExitSplash == false){ window.scrollTo(0,0);  PreventExitSplash=true; divtag = document.createElement("div"); divtag.setAttribute("id","ExitSplashMainOuterLayer"); divtag.style.position="absolute"; divtag.style.width="100%"; divtag.style.height="100%"; divtag.style.zIndex="99"; divtag.style.left="0px"; divtag.style.top="0px"; divtag.innerHTML=theDiv; theBody.innerHTML=""; theBody.topMargin="0px"; theBody.rightMargin="0px"; theBody.bottomMargin="0px"; theBody.leftMargin="0px"; theBody.style.overflow="hidden"; theBody.appendChild(divtag); return exitsplashmessage; } }
var a = document.getElementsByTagName('A'); for (var i = 0; i < a.length; i++) { if(a[i].target !== '_blank') {addClickEvent(a,i, function(){ PreventExitSplash=true; });} else{addClickEvent(a,i, function(){ PreventExitSplash=false;});}}disablelinksfunc = function(){var a = document.getElementsByTagName('A'); for (var i = 0; i < a.length; i++) { if(a[i].target !== '_blank') {addClickEvent(a,i, function(){ PreventExitSplash=true; });} else{addClickEvent(a,i, function(){ PreventExitSplash=false;});}}}
hideexitcancelbuttonimage = function(){ document.getElementById('ExitCancelButtonImageDiv').style.display='none'; }
StopExitImpactAudio = function(){ var esDiv = document.getElementById('ExitSplashDiv'); var esiaDiv = document.getElementById('exitsplashimpactaudio'); esDiv.removeChild(esiaDiv); }
addLoadEvent(disablelinksfunc);
disableformsfunc = function(){ var f = document.getElementsByTagName('FORM'); for (var i=0;i<f.length;i++){ if (!f[i].onclick){ f[i].onclick=function(){ PreventExitSplash=true; } }else if (!f[i].onsubmit){ f[i].onsubmit=function(){ PreventExitSplash=true; }}}}
addLoadEvent(disableformsfunc);
window.onbeforeunload = DisplayExitSplash;





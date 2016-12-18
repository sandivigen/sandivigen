
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="robots" content="noodp,nodir,noydir">
    <meta name="keywords" content="Offshore outsourcing, Freelancers, India, Russia, Ukraine, php Programmers, Coders, Developers, Writers, Web Designers, Website Design, Technical Writers">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8"><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"VQIBUF5RGwQBU1BUBgE="};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e,n){function r(t){try{c.console&&console.log(t)}catch(e){}}var o,i=t("ee"),a=t(15),c={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(c.console=!0,o.indexOf("dev")!==-1&&(c.dev=!0),o.indexOf("nr_dev")!==-1&&(c.nrDev=!0))}catch(s){}c.nrDev&&i.on("internal-error",function(t){r(t.stack)}),c.dev&&i.on("fn-err",function(t,e,n){r(n.stack)}),c.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(c,function(t,e){return t}).join(", ")))},{}],2:[function(t,e,n){function r(t,e,n,r,o){try{d?d-=1:i("err",[o||new UncaughtException(t,e,n)])}catch(c){try{i("ierr",[c,(new Date).getTime(),!0])}catch(s){}}return"function"==typeof f&&f.apply(this,a(arguments))}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function o(t){i("err",[t,(new Date).getTime()])}var i=t("handle"),a=t(16),c=t("ee"),s=t("loader"),f=window.onerror,u=!1,d=0;s.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(l){"stack"in l&&(t(8),t(7),"addEventListener"in window&&t(5),s.xhrWrappable&&t(9),u=!0)}c.on("fn-start",function(t,e,n){u&&(d+=1)}),c.on("fn-err",function(t,e,n){u&&(this.thrown=!0,o(n))}),c.on("fn-end",function(){u&&!this.thrown&&d>0&&(d-=1)}),c.on("internal-error",function(t){i("ierr",[t,(new Date).getTime(),!0])})},{}],3:[function(t,e,n){t("loader").features.ins=!0},{}],4:[function(t,e,n){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(8),c=t(7),s="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",l="resource",p="-start",h="-end",m="fn"+p,w="fn"+h,v="bstTimer",y="pushState";t("loader").features.stn=!0,t(6);var g=NREUM.o.EV;o.on(m,function(t,e){var n=t[0];n instanceof g&&(this.bstStart=Date.now())}),o.on(w,function(t,e){var n=t[0];n instanceof g&&i("bst",[n,e,this.bstStart,Date.now()])}),a.on(m,function(t,e,n){this.bstStart=Date.now(),this.bstType=n}),a.on(w,function(t,e){i(v,[e,this.bstStart,Date.now(),this.bstType])}),c.on(m,function(){this.bstStart=Date.now()}),c.on(w,function(t,e){i(v,[e,this.bstStart,Date.now(),"requestAnimationFrame"])}),o.on(y+p,function(t){this.time=Date.now(),this.startPath=location.pathname+location.hash}),o.on(y+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+s]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["c"+s]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["webkitC"+s]()},!1)),document[f]("scroll",r,!1),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],5:[function(t,e,n){function r(t){for(var e=t;e&&!e.hasOwnProperty(u);)e=Object.getPrototypeOf(e);e&&o(e)}function o(t){c.inPlace(t,[u,d],"-",i)}function i(t,e){return t[1]}var a=t("ee").get("events"),c=t(17)(a,!0),s=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";e.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,e){var n=t[1],r=s(n,"nr@wrapped",function(){function t(){if("function"==typeof n.handleEvent)return n.handleEvent.apply(n,arguments)}var e={object:t,"function":n}[typeof n];return e?c(e,"fn-",null,e.name||"anonymous"):n});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],6:[function(t,e,n){var r=t("ee").get("history"),o=t(17)(r);e.exports=r,o.inPlace(window.history,["pushState","replaceState"],"-")},{}],7:[function(t,e,n){var r=t("ee").get("raf"),o=t(17)(r),i="equestAnimationFrame";e.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],8:[function(t,e,n){function r(t,e,n){t[0]=a(t[0],"fn-",null,n)}function o(t,e,n){this.method=n,this.timerDuration="number"==typeof t[1]?t[1]:0,t[0]=a(t[0],"fn-",this,n)}var i=t("ee").get("timer"),a=t(17)(i),c="setTimeout",s="setInterval",f="clearTimeout",u="-start",d="-";e.exports=i,a.inPlace(window,[c,"setImmediate"],c+d),a.inPlace(window,[s],s+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(s+u,r),i.on(c+u,o)},{}],9:[function(t,e,n){function r(t,e){d.inPlace(e,["onreadystatechange"],"fn-",c)}function o(){var t=this,e=u.context(t);t.readyState>3&&!e.resolved&&(e.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,w,"fn-",c)}function i(t){v.push(t),h&&(g=-g,b.data=g)}function a(){for(var t=0;t<v.length;t++)r([],v[t]);v.length&&(v=[])}function c(t,e){return e}function s(t,e){for(var n in t)e[n]=t[n];return e}t(5);var f=t("ee"),u=f.get("xhr"),d=t(17)(u),l=NREUM.o,p=l.XHR,h=l.MO,m="readystatechange",w=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],v=[];e.exports=u;var y=window.XMLHttpRequest=function(t){var e=new p(t);try{u.emit("new-xhr",[e],e),e.addEventListener(m,o,!1)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}return e};if(s(p,y),y.prototype=p.prototype,d.inPlace(y.prototype,["open","send"],"-xhr-",c),u.on("send-xhr-start",function(t,e){r(t,e),i(e)}),u.on("open-xhr-start",r),h){var g=1,b=document.createTextNode(g);new h(a).observe(b,{characterData:!0})}else f.on("fn-end",function(t){t[0]&&t[0].type===m||a()})},{}],10:[function(t,e,n){function r(t){var e=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<d;r++)t.removeEventListener(u[r],this.listener,!1);if(!e.aborted){if(n.duration=(new Date).getTime()-this.startTime,4===t.readyState){e.status=t.status;var i=o(t,this.lastSize);if(i&&(n.rxSize=i),this.sameOrigin){var a=t.getResponseHeader("X-NewRelic-App-Data");a&&(e.cat=a.split(", ").pop())}}else e.status=0;n.cbTime=this.cbTime,f.emit("xhr-done",[t],t),c("xhr",[e,n,this.startTime])}}}function o(t,e){var n=t.responseType;if("json"===n&&null!==e)return e;var r="arraybuffer"===n||"blob"===n||"json"===n?t.response:t.responseText;return h(r)}function i(t,e){var n=s(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}var a=t("loader");if(a.xhrWrappable){var c=t("handle"),s=t(11),f=t("ee"),u=["load","error","abort","timeout"],d=u.length,l=t("id"),p=t(14),h=t(13),m=window.XMLHttpRequest;a.features.xhr=!0,t(9),f.on("new-xhr",function(t){var e=this;e.totalCbs=0,e.called=0,e.cbTime=0,e.end=r,e.ended=!1,e.xhrGuids={},e.lastSize=null,p&&(p>34||p<10)||window.opera||t.addEventListener("progress",function(t){e.lastSize=t.loaded},!1)}),f.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),f.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),f.on("send-xhr-start",function(t,e){var n=this.metrics,r=t[0],o=this;if(n&&r){var i=h(r);i&&(n.txSize=i)}this.startTime=(new Date).getTime(),this.listener=function(t){try{"abort"===t.type&&(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof e.onload))&&o.end(e)}catch(n){try{f.emit("internal-error",[n])}catch(r){}}};for(var a=0;a<d;a++)e.addEventListener(u[a],this.listener,!1)}),f.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),f.on("xhr-load-added",function(t,e){var n=""+l(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),f.on("xhr-load-removed",function(t,e){var n=""+l(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),f.on("addEventListener-end",function(t,e){e instanceof m&&"load"===t[0]&&f.emit("xhr-load-added",[t[1],t[2]],e)}),f.on("removeEventListener-end",function(t,e){e instanceof m&&"load"===t[0]&&f.emit("xhr-load-removed",[t[1],t[2]],e)}),f.on("fn-start",function(t,e,n){e instanceof m&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),f.on("fn-end",function(t,e){this.xhrCbStart&&f.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,e],e)})}},{}],11:[function(t,e,n){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!e.protocol||":"===e.protocol||e.protocol===n.protocol,a=e.hostname===document.domain&&e.port===n.port;return r.sameOrigin=i&&(!e.hostname||a),r}},{}],12:[function(t,e,n){function r(){}function o(t,e,n){return function(){return i(t,[(new Date).getTime()].concat(c(arguments)),e?null:this,n),e?void 0:this}}var i=t("handle"),a=t(15),c=t(16),s=t("ee").get("tracer"),f=NREUM;"undefined"==typeof window.newrelic&&(newrelic=f);var u=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit"],d="api-",l=d+"ixn-";a(u,function(t,e){f[e]=o(d+e,!0,"api")}),f.addPageAction=o(d+"addPageAction",!0),f.setCurrentRouteName=o(d+"routeName",!0),e.exports=newrelic,f.interaction=function(){return(new r).get()};var p=r.prototype={createTracer:function(t,e){var n={},r=this,o="function"==typeof e;return i(l+"tracer",[Date.now(),t,n],r),function(){if(s.emit((o?"":"no-")+"fn-start",[Date.now(),r,o],n),o)try{return e.apply(this,arguments)}finally{s.emit("fn-end",[Date.now()],n)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){p[e]=o(l+e)}),newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),i("err",[t,(new Date).getTime()])}},{}],13:[function(t,e,n){e.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(e){return}}}},{}],14:[function(t,e,n){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),e.exports=r},{}],15:[function(t,e,n){function r(t,e){var n=[],r="",i=0;for(r in t)o.call(t,r)&&(n[i]=e(r,t[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],16:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(o<0?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=r},{}],17:[function(t,e,n){function r(t){return!(t&&t instanceof Function&&t.apply&&!t[a])}var o=t("ee"),i=t(16),a="nr@original",c=Object.prototype.hasOwnProperty,s=!1;e.exports=function(t,e){function n(t,e,n,o){function nrWrapper(){var r,a,c,s;try{a=this,r=i(arguments),c="function"==typeof n?n(r,a):n||{}}catch(f){l([f,"",[r,a,o],c])}u(e+"start",[r,a,o],c);try{return s=t.apply(a,r)}catch(d){throw u(e+"err",[r,a,d],c),d}finally{u(e+"end",[r,a,s],c)}}return r(t)?t:(e||(e=""),nrWrapper[a]=t,d(t,nrWrapper),nrWrapper)}function f(t,e,o,i){o||(o="");var a,c,s,f="-"===o.charAt(0);for(s=0;s<e.length;s++)c=e[s],a=t[c],r(a)||(t[c]=n(a,f?c+o:o,i,c))}function u(n,r,o){if(!s||e){var i=s;s=!0;try{t.emit(n,r,o)}catch(a){l([a,n,r,o])}s=i}}function d(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){l([r])}for(var o in t)c.call(t,o)&&(e[o]=t[o]);return e}function l(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=o),n.inPlace=f,n.flag=a,n}},{}],ee:[function(t,e,n){function r(){}function o(t){function e(t){return t&&t instanceof r?t:t?s(t,c,i):i()}function n(n,r,o){if(!l.aborted){t&&t(n,r,o);for(var i=e(o),a=h(n),c=a.length,s=0;s<c;s++)a[s].apply(i,r);var f=u[y[n]];return f&&f.push([g,n,r,i]),i}}function p(t,e){v[t]=h(t).concat(e)}function h(t){return v[t]||[]}function m(t){return d[t]=d[t]||o(n)}function w(t,e){f(t,function(t,n){e=e||"feature",y[n]=e,e in u||(u[e]=[])})}var v={},y={},g={on:p,emit:n,get:m,listeners:h,context:e,buffer:w,abort:a,aborted:!1};return g}function i(){return new r}function a(){(u.api||u.feature)&&(l.aborted=!0,u=l.backlog={})}var c="nr@context",s=t("gos"),f=t(15),u={},d={},l=e.exports=o();l.backlog=u},{}],gos:[function(t,e,n){function r(t,e,n){if(o.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[e]=r,r}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){o.buffer([t],r),o.emit(t,e,n)}var o=t("ee").get("handle");e.exports=r,r.ee=o},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!b++){var t=g.info=NREUM.info,e=d.getElementsByTagName("script")[0];if(setTimeout(f.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&e))return f.abort();s(v,function(e,n){t[e]||(t[e]=n)}),c("mark",["onload",a()],null,"api");var n=d.createElement("script");n.src="https://"+t.agent,e.parentNode.insertBefore(n,e)}}function o(){"complete"===d.readyState&&i()}function i(){c("mark",["domContent",a()],null,"api")}function a(){return(new Date).getTime()}var c=t("handle"),s=t(15),f=t("ee"),u=window,d=u.document,l="addEventListener",p="attachEvent",h=u.XMLHttpRequest,m=h&&h.prototype;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:h,REQ:u.Request,EV:u.Event,PR:u.Promise,MO:u.MutationObserver},t(12);var w=""+location,v={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-998.min.js"},y=h&&m&&m[l]&&!/CriOS/.test(navigator.userAgent),g=e.exports={offset:a(),origin:w,features:{},xhrWrappable:y};d[l]?(d[l]("DOMContentLoaded",i,!1),u[l]("load",r,!1)):(d[p]("onreadystatechange",o),u[p]("onload",r)),c("mark",["firstbyte",a()],null,"api");var b=0},{}]},{},["loader",2,10,4,3]);</script>

    <meta name="Description" content="This is the website I want to adopt to my WP site.

http://cloudcma.com/api_widget/ee5d35554c2fc630d2a3af35ca619404/show?post_url=cloudcma.com&amp;source_url=ua

Viewer of the website wants to know the home value of an address. Once he types it in, the site finds the address and asks the viewer for his contact info. Once submitted, it sends a POST request to the backend which generates a report and email to the email address viewer submitted.

You can play with it by entering: 1651 10th street, Berkeley, California

I don&#039;t own the backend nor do i have access to it. I have the API key to use it. I just want a customized front end. I was a developer many years ago and have limited web development experience.

Here is what I want to build:
1) my custom frontend that allows me to change background image and heading text on the new frontend from my WP backend.

2) mimic the current site&#039;s behavior: asks viewer to enter an address, use google to validate the address, when user hits &quot;Locate Property&quot;, it shows a big google map pinpointing the address

3) Asks viewer to enter Name, Email address and optional phone number.

4) Once viewer hits &quot;Send to me&quot;, send the same POST request to backend and direct viewer to an URL which I can customize.

I will likely have more development job once this job is completed.">

    <title>Create WordPress front end adoption of an existing web service - Web, Mobile &amp; Software Dev</title>

    <script type="text/javascript">
        function create_mark(name) {
            window.performance && window.performance.mark && window.performance.mark(name);
        }

        function remove_mark(name) {
            window.performance && window.performance.clearMarks && window.performance.clearMarks(name);
        }

        function create_measure(name, startMark, endMark) {
            window.performance && window.performance.measure && window.performance.measure(name, startMark, endMark);
        }

        function remove_measure(name) {
            window.performance && window.performance.clearMeasures && window.performance.clearMeasures(name);
        }
    </script>

    <link rel="stylesheet" href="//www.upwork.com/static/components/1.8.6/air.global.1.8.6.min.css" onload="remove_mark('navCompRenderEnd');remove_measure('navCompRendered');create_mark('navCompRenderEnd');create_measure('navCompRendered', 'navigationStart', 'navCompRenderEnd');"/>
    <link rel="stylesheet" href="//www.upwork.com/static/components/1.8.6/air.components.1.8.6.min.css" onload="remove_mark('navCompRenderEnd');remove_measure('navCompRendered');create_mark('navCompRenderEnd');create_measure('navCompRendered', 'navigationStart', 'navCompRenderEnd');"/>
    <link rel="stylesheet" href="//www.upwork.com/static/fonts/1.11.0/fonts.gotham.1.11.0.css" onload="remove_mark('navCompRenderEnd');remove_measure('navCompRendered');create_mark('navCompRenderEnd');create_measure('navCompRendered', 'navigationStart', 'navCompRenderEnd');"/>
    <link rel="stylesheet" href="//www.upwork.com/static/fonts/1.11.0/fonts.air-icons.1.11.0.css" onload="remove_mark('navCompRenderEnd');remove_measure('navCompRendered');create_mark('navCompRenderEnd');create_measure('navCompRendered', 'navigationStart', 'navCompRenderEnd');"/>

    <link rel="stylesheet" href="/job-details/css/cb12247.css?bfc5e84" />
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />

    <link rel="preload" href="//www.upwork.com/static/fonts/1.11.0/fonts.gotham-async.1.11.0.css" as="style" onload="this.rel='stylesheet'"  />
    <noscript><link rel="stylesheet" href="//www.upwork.com/static/fonts/1.11.0/fonts.gotham-async.1.11.0.css"  /></noscript>
    <link rel="preload" href="//www.upwork.com/static/fonts/1.11.0/fonts.air-icons-async.1.11.0.css" as="style" onload="this.rel='stylesheet'"  />
    <noscript><link rel="stylesheet" href="//www.upwork.com/static/fonts/1.11.0/fonts.air-icons-async.1.11.0.css"  /></noscript>
    <script type="text/javascript">!function(a){var b=function(b,c,d){function j(a){return e.body?a():void setTimeout(function(){j(a)})}function l(){f.addEventListener&&f.removeEventListener("load",l),f.media=d||"all"}var g,e=a.document,f=e.createElement("link");if(c)g=c;else{var h=(e.body||e.getElementsByTagName("head")[0]).childNodes;g=h[h.length-1]}var i=e.styleSheets;f.rel="stylesheet",f.href=b,f.media="only x",j(function(){g.parentNode.insertBefore(f,c?g:g.nextSibling)});var k=function(a){for(var b=f.href,c=i.length;c--;)if(i[c].href===b)return a();setTimeout(function(){k(a)})};return f.addEventListener&&f.addEventListener("load",l),f.onloadcssdefined=k,k(l),f};"undefined"!=typeof exports?exports.loadCSS=b:a.loadCSS=b}("undefined"!=typeof global?global:this);</script>
    <script type="text/javascript">!function(a){if(a.loadCSS){var b=loadCSS.relpreload={};if(b.support=function(){try{return a.document.createElement("link").relList.supports("preload")}catch(b){return!1}},b.poly=function(){for(var b=a.document.getElementsByTagName("link"),c=0;c<b.length;c++){var d=b[c];"preload"===d.rel&&"style"===d.getAttribute("as")&&(a.loadCSS(d.href,d),d.rel=null)}},!b.support()){b.poly();var c=a.setInterval(b.poly,300);a.addEventListener&&a.addEventListener("load",function(){a.clearInterval(c)}),a.attachEvent&&a.attachEvent("onload",function(){a.clearInterval(c)})}}}(this);</script>

    <script type="text/javascript">
        // global Applet object
        var Applet = new function() {
            var basePath = '/job-details';
            var phpVars = {"runtime_id":"313252cb586816b8-ARN","clientStatsDMetrics":true,"smfAjax":false,"pageSpeedMetrics":false,"pageId":"JobDetailsUser","psmetricsTrafficRate":1,"CsrfUserSiteToken":"6bb563cf97d0e099b5e884908dc5267f","activeProposalsRangeEnabled":true};
            var angularCache = [];
            var assetsVersion = "bfc5e84";
            var instanceEnv = "prod";

            var bundleRegex = /^@([^\/]*)Bundle\/(.*)$/;

            this.getBasePath = function() {
                return basePath;
            };

            this.buildPath = function(path) {
                var matches = bundleRegex.exec(path);
                if (matches != null) {
                    var baseUrl = basePath + '/bundles/' + matches[1].toLowerCase() + '/' + matches[2];
                }
                else {
                    var baseUrl = basePath + path;
                }
                if (assetsVersion) {
                    if (baseUrl.indexOf('?') < 0) {
                        return baseUrl + '?' + assetsVersion;
                    } else {
                        return baseUrl + '&' + assetsVersion;
                    }
                } else {
                    return baseUrl;
                }
            };

            var visitorId = null;
            visitorId = "176.112.232.98.1464343673750567";

            this.getVisitorId = function() {
                return visitorId;
            };

            var visitorApiKey = null;
            visitorApiKey = "07e47c46b7792abdacf57a9f95c4e809";
            this.getVisitorApiKey = function() {
                return visitorApiKey;
            };


            var User = null;
            User = new function() {
                this.getUid = function() { return "473108076898066432"; };
                this.getRid = function() { return "5946106"; };
                this.getNid = function() { return "aleksandr_yushko"; };
            };

            this.getUser = function() {
                return User;
            };

            var Organization = null;
            Organization = new function() {
                this.getUid = function() { return "473108076906455041"; };
                this.getRid = function() { return ""; };
                this.isSoleProprietor = function() { return true; };
                this.isBusiness = function() { return false; };
                this.isClient = function() { return false; };
                this.isVendor = function() { return true; };
            };

            this.getOrganization = function() {
                return Organization;
            };

            this.getVar = function(key) {
                return phpVars[key];
            };

            this.getAngularCache = function() {
                return angularCache;
            };

            this.getInstanceEnv = function() {
                return instanceEnv;
            }
        };
    </script>
</head>
<body data-ng-app="jobDetails" class=" default-layout">

<script>
    dataLayer = [{"site":{"application":"JobDetails","version":"bfc5e84","environment":null},"user":{"visitor_id":"176.112.232.98.1464343673750567","recognized":true,"internal":false,"loggedIn":true,"user_id":"473108076898066432","primary-type":"freelancer"}}];
</script>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-N7NC5B&amp;site.application=JobDetails&amp;site.version=bfc5e84&amp;site.environment=&amp;user.visitor_id=176.112.232.98.1464343673750567&amp;user.recognized=1&amp;user.internal=&amp;user.loggedIn=1&amp;user.user_id=473108076898066432&amp;user.primary-type=freelancer" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-N7NC5B');</script>
<!-- End Google Tag Manager -->
<div id="layout">
    <div data-o-smf data-o-smf-location="very_top"></div>
    <header class="header-navbar-skinny" role="banner" data-ng-controller="skinnyHeaderController">


        <nav role="navigation" class="primary-navbar navbar navbar-default navbar-condensed navbar-hover">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#skinny-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="/home/"
                       class="navbar-brand"
                       target="_self">Upwork</a>
                </div>
                <div class="collapse navbar-collapse" id="skinny-nav">
                    <ul class="nav navbar-nav" role="menu">
                        <li class="active  dropdown" data-eo-dropdown data-eo-dropdown-toggle-hover>
                            <a data-eo-dropdown-toggle href="javascript:" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Find Work
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="active">
                                    <a href="/ab/find-work/" target="_self">Find Work</a>
                                </li>
                                <li>
                                    <a href="/jobs/saved" target="_self">Saved Jobs</a>
                                </li>
                                <li>
                                    <a href="/ab/proposals/" target="_self">Proposals</a>
                                </li>
                                <li>
                                    <a href="/freelancers/~015ec38207ecdf1b04" target="_self">Profile</a>
                                </li>
                                <li>
                                    <a href="/my-stats" target="_self">My Stats</a>
                                </li>
                                <li>
                                    <a href="/tests/main" target="_self">Tests</a>
                                </li>
                            </ul>
                        </li>
                        <li class="  dropdown" data-eo-dropdown data-eo-dropdown-toggle-hover>
                            <a data-eo-dropdown-toggle href="javascript:" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                My Jobs
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="/d/home/" target="_self">My Jobs</a>
                                </li>
                                <li>
                                    <a href="/d/contracts/" target="_self">Contracts</a>
                                </li>
                                <li>
                                    <a href="/workdiary?main" target="_self">Work Diary</a>
                                </li>
                            </ul>
                        </li>
                        <li class="  dropdown" data-eo-dropdown data-eo-dropdown-toggle-hover>
                            <a data-eo-dropdown-toggle href="javascript:" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Reports
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="/reports/" target="_self">Overview</a>
                                </li>
                                <li>
                                    <a href="/reports/timelog" target="_self">Timesheet Details</a>
                                </li>
                                <li>
                                    <a href="/reports/timeanalyze" target="_self">Time Analyze</a>
                                </li>
                                <li>
                                    <a href="/reports/earnings" target="_self">Earnings by Client</a>
                                </li>
                                <li>
                                    <a href="/ab/payments/reports/relationship-values" target="_self">Lifetime Billings by Client</a>
                                </li>
                                <li>
                                    <a href="/reports/weekly" target="_self">Weekly Timesheet</a>
                                </li>
                                <li>
                                    <a href="/reports/timelogs" target="_self">Timelogs</a>
                                </li>
                                <li>
                                    <a href="/ab/plans/membership/connects-history" target="_self">Connects History</a>
                                </li>
                                <li>
                                    <a href="/earnings-history" target="_self">Transaction History</a>
                                </li>
                                <li>
                                    <a href="/reports/certificate-of-earnings.pdf" target="_self">Certificate of Earnings</a>
                                </li>
                            </ul>
                        </li>
                        <li class=" messages " >
                            <a href="/messages/" target="_self">
                                Messages
                                <span data-o-badges="dash" data-o-badges-port="473108076906455041"></span>
            <span data-o-badges="dash" data-o-badges-layout="ellipsis" data-o-badges-port="473108076906455041"
                  data-o-badges-key="unimportant" data-o-badges-exclusive="true"></span>

                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">

                        <li class="dropdown">
                            <a href="javascript:" class="dropdown-toggle">
                                <span class="glyphicon air-icon-search"></span>
                            </a>

                            <div data-o-freelancer-search data-is-search-expanded="true">
                                <div data-o-freelancer-search-option data-label="Jobs" data-url="/o/jobs/browse/" data-placeholder="Find Jobs" data-selected="true"></div>
                                <div data-o-freelancer-search-option data-label="Freelancers" data-url="/o/profiles/browse/" data-placeholder="Find Freelancers"></div>
                            </div>                </li>

                        <li data-dropdown class="dropdown" data-on-toggle="toggleHelp(open)">
                            <a data-dropdown-toggle href="javascript:" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon air-icon-question"></span><span data-ng-cloak data-ng-if="helpMenuUnread !== 0" class="badge badge-circle"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="https://support.upwork.com/login" target="_blank">
                                        <span>Help and Support</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://community.upwork.com" target="_blank">
                                        <span>Community and Forums</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/disputes" target="_self">
                                        <span>Disputes</span>
                                        <span data-o-badges="disputes" class="pull-right"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/blog/" target="_blank">
                                        <span>New on Upwork!</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li data-dropdown class="dropdown" data-on-toggle="toggleNotifications(open)">
                            <a data-dropdown-toggle href="javascript:" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon air-icon-notifications"></span><span data-o-badges="notifications" data-o-badges-layout="circle"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li data-ng-repeat="notification in notifications | limitTo:5">
                                    <a data-ng-href="{{notification.href}}" class="dismissable" target="_self">
                                        <button type="button" class="close" data-ng-click="$event.stopPropagation(); removeNotification($event, notification.thread_id)">
                                            <span aria-hidden="true">×</span>
                                            <span class="sr-only">Remove</span>
                                        </button>
                                        {{notification.subject}}
                                    </a>
                                </li>
                                <li>
                                    <a href="/notifications" target="_self">
                                        <mark><strong>See All Notifications</strong></mark>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li data-dropdown class="dropdown account-dropdown">
                            <a data-dropdown-toggle href="javascript:" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" title="Aleksandr Yushko"><img src="https://odesk-prod-portraits.s3.amazonaws.com/Users:aleksandr_yushko:PortraitUrl?AWSAccessKeyId=1XVAX3FNQZAFC9GJCFR2&amp;Expires=2147483647&amp;Signature=rQ36X9pPoVZnM9dEbftM%2FItHwvs%3D&amp;1480438006342914" class="avatar avatar-xs"><span class="organization-selector">Aleksandr Yushko</span><span data-ng-show="unreadIndicator" data-ng-cloak class="badge badge-circle"></span><span class="caret"></span></a>                    <ul class="dropdown-menu" role="menu">
                                <li>
                                    <div class="container">
                                        <div class="form-group">
                                            <div class="btn-group btn-group-justified btn-group-sm" data-ng-click="$event.stopPropagation()" eo-halt="check($event)">
                                                <label class="btn btn-default" data-ng-model="dash.visibility" data-ng-click="setVisibility('VISIBLE')" btn-radio="'VISIBLE'">Online</label>
                                                <label class="btn btn-default" data-ng-model="dash.visibility" data-ng-click="setVisibility('INVISIBLE')" btn-radio="'INVISIBLE'" title="Appear offline to other users">Invisible</label>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <ul class="nav dropdown-menu-inline company-list">
                                        <li data-company-uid="473108076906455041" class="active" title="Aleksandr Yushko">
                                            <a href="javascript:">
                                                <div class="media">
                                                    <img src="https://odesk-prod-portraits.s3.amazonaws.com/Users:aleksandr_yushko:PortraitUrl?AWSAccessKeyId=1XVAX3FNQZAFC9GJCFR2&amp;Expires=2147483647&amp;Signature=rQ36X9pPoVZnM9dEbftM%2FItHwvs%3D&amp;1480438006342914" class="avatar avatar-xs pull-left">
                                                    <span class="pull-right" data-o-badges="dash" data-o-badges-port="473108076906455041"></span>
                                                    <span class="pull-right" data-o-badges="dash" data-o-badges-port="473108076906455041" data-o-badges-key="unimportant" data-o-badges-layout="ellipsis" data-o-badges-exclusive="true"></span>
                                                    <div class="media-body">
                                                        <span data-ng-bind="&quot;Aleksandr Yushko&quot; | truncateByChars:22"></span>
                                                        <small class="text-muted">
                                                            Freelancer
                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="/UserSettings/profile" target="_self">
                                        <span class="glyphicon glyphicon-md air-icon-settings"></span>
                                        Settings
                                    </a>
                                </li>

                                <li>
                                    <a href="javascript:" data-ng-click="logout()">
                                        <form id="nav-logout" method="post" action="/logout"></form>
                                        <span class="glyphicon glyphicon-md air-icon-remove"></span>
                                        Logout
                                        <span class="user-id pull-right">aleksandr_yushko</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <script type="text/javascript">remove_mark('navCompRenderEnd');remove_measure('navCompRendered');create_mark('navCompRenderEnd');create_measure('navCompRendered', 'navigationStart', 'navCompRenderEnd');</script>


    <div class="container" data-ng-controller="JobDetailsRootController">

        <div data-o-smf></div>





        <div class="row">
            <div class="col-md-9">
                <h1 class="m-0-top" data-ng-non-bindable>
                    Create WordPress front end adoption of an existing web service
                </h1>
            </div>
            <div class="col-md-3" ng-controller="JobDetailsFlaggingController">
                <a href="#" class="pull-right m-0-top" id="jsFlagJobLink"
                   ng-show="!success"
                   eo-popover-size="lg"
                   eo-popover="/job-details/bundles/odeskjobdetails/partials/flagging-popover.html?v=bfc5e84"
                   eo-popover-placement="bottom">
                    Flag as inappropriate
                </a>
        <span class="ng-hide" ng-show="success" id="successfulFlaggingMessage">
            Thanks for flagging!
        </span>
            </div>
        </div>                <div class="row">
            <div class="col-md-9">



                <a class="o-tag-skill m-0-left m-0-top m-md-bottom"
                   href="/jobs/?cn1=Web%2C+Mobile+%26+Software+Dev&amp;cn2=Web+Development">Web Development</a>

                <small class="text-muted">
                    Posted
    <span itemprop="datePosted"
          popover="December 18, 2016"
          popover-trigger="mouseenter"
          popover-placement="bottom">
        1 hour ago
    </span>
                </small>

                <div class="row">
                    <div class="col-md-4 p-0-right">
                        <div class="pull-left">
                            <span class="glyphicon air-icon-fixed-price m-0-left-right"></span>
                        </div>
                        <div class="pull-left m-sm-left m-md-bottom col-md-10 p-0-left-right">
                            <p class="m-0-bottom"><strong>Fixed Price</strong></p>
                        </div>
                    </div>
                    <div class="col-md-3 p-0-right">
                        <div class="row m-0">
                            <div class="col-md-1 p-0-left pull-left">
                                <span class="glyphicon air-icon-payment-circle m-0-left-right"></span>
                            </div>
                            <div class="col-md-10 m-md-bottom p-0 pull-right">
                                <p class="m-0-bottom">
                                    <strong>$250</strong>
                                </p>
                                <small class="text-muted">Budget</small>
                            </div>
                        </div>
                    </div>
                    <div class="                        col-md-4
                     p-0-right">
                        <div class="pull-left">$$</div>
                        <div class="pull-left m-sm-left m-md-bottom col-md-10 p-0-left">
                            <p class="m-0-bottom"><strong>Intermediate Level</strong></p>
                            <small class="text-muted">I am looking for a mix of experience and value</small>
                        </div>
                    </div>
                </div>

                <div class="air-card-group">

                    <div class="air-card m-0-top m-0-right">
                        <h2 class="m-0-top">Details</h2>

                        <p class="break" data-ng-non-bindable>
                            This is the website I want to adopt to my WP site.<br />
                            <br />
                            <a href="/leaving-odesk?ref=http%3A%2F%2Fcloudcma.com%2Fapi_widget%2Fee5d35554c2fc630d2a3af35ca619404%2Fshow%3Fpost_url%3Dcloudcma.com%26source_url%3Dua" target="_blank">http://cloudcma.com/api_widget/ee5d35554c2fc630d2a3af35ca619404/show?post_url=cloudcma.com&amp;source_url=ua</a><br />
                            <br />
                            Viewer of the website wants to know the home value of an address. Once he types it in, the site finds the address and asks the viewer for his contact info. Once submitted, it sends a POST request to the backend which generates a report and email to the email address viewer submitted.<br />
                            <br />
                            You can play with it by entering: 1651 10th street, Berkeley, California<br />
                            <br />
                            I don&#039;t own the backend nor do i have access to it. I have the API key to use it. I just want a customized front end. I was a developer many years ago and have limited web development experience.<br />
                            <br />
                            Here is what I want to build:<br />
                            1) my custom frontend that allows me to change background image and heading text on the new frontend from my WP backend.<br />
                            <br />
                            2) mimic the current site&#039;s behavior: asks viewer to enter an address, use google to validate the address, when user hits &quot;Locate Property&quot;, it shows a big google map pinpointing the address<br />
                            <br />
                            3) Asks viewer to enter Name, Email address and optional phone number.<br />
                            <br />
                            4) Once viewer hits &quot;Send to me&quot;, send the same POST request to backend and direct viewer to an URL which I can customize.<br />
                            <br />
                            I will likely have more development job once this job is completed.
                        </p>



                        <ul class="list-unstyled">
                            <div id="form"><li>
                                    <strong class="m-sm-right">API Integration Required:</strong> Other
                                </li><li>
                                    <strong class="m-sm-right">One-time Project:</strong> Develop website from scratch
                                </li><li>
                                    <strong class="m-sm-right">Project Type:</strong> One-time project
                                </li><li>
                                    <strong class="m-sm-right">Project Stage:</strong> Fully Specified
                                </li>    <li data-ng-controller="SkillsPopoverController">
                                    <strong class="m-sm-right">Programming Languages Required:</strong>
        <span data-ng-include="'/job-details/bundles/odeskjobdetails/partials/skills.html?v=bfc5e84'"
              data-ng-init="isVisitorMode = false; skills = [{&quot;uid&quot;:&quot;475721704125923333&quot;,&quot;skill&quot;:&quot;php&quot;,&quot;description&quot;:&quot;PHP is a general-purpose server-side scripting language originally designed for web development to produce dynamic web pages.&quot;,&quot;externalLink&quot;:&quot;http:\/\/en.wikipedia.org\/wiki\/PHP&quot;,&quot;prettyName&quot;:&quot;PHP&quot;},{&quot;uid&quot;:&quot;475721704021065738&quot;,&quot;skill&quot;:&quot;javascript&quot;,&quot;description&quot;:&quot;JavaScript is a prototype-based scripting language that is dynamic, weakly typed and has first-class functions. It is a multi-paradigm language, supporting object-oriented, imperative, and functional programming styles.&quot;,&quot;externalLink&quot;:&quot;http:\/\/en.wikipedia.org\/wiki\/JavaScript&quot;,&quot;prettyName&quot;:&quot;JavaScript&quot;}]"></span>
                                </li>
                                <input type="hidden" id="form__token" name="form[_token]" value="GqJcoSvXlMh4KXu5Pg7OpAQRjFrTlJVIv0mLuMryQK4" /></div>
                        </ul>
                        <script type="text/javascript">
                            create_mark('mainContentRenderedEnd');
                            create_measure('mainContentRendered', 'navigationStart', 'mainContentRenderedEnd');
                        </script>
                    </div>



                    <div class="air-card m-0-right">
                        <p class="m-0-bottom"><strong>
                                You will be asked to answer the following questions when submitting a proposal:
                            </strong></p>
                        <ol class="break">
                            <li data-ng-non-bindable>What is your hourly rate for future additional work?</li>
                            <li data-ng-non-bindable>What hours and timezone will you be able to provide support after the job is completed?</li>
                            <li data-ng-non-bindable>Please propose a payment schedule and define milestones for the proejct.</li>
                        </ol>
                    </div>
                    <div class="air-card m-0-right">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="m-md-bottom"><strong>Preferred Qualifications</strong></p>






                                <p class="m-xs-bottom">
                                    <span class="text-muted">Job Success Score:</span>
                                    At least
                                    90%
                        <span class="text-danger glyphicon glyphicon-md vertical-align-middle air-icon-exclamation-circle"
                              title="You do not meet this qualification"></span>
                                </p>
                                <p class="m-xs-bottom">
                                    <span class="text-muted">Rising Talent:</span>
                                    Yes
                                    <span class="text-danger glyphicon glyphicon-md vertical-align-middle air-icon-exclamation-circle"
                                          title="You do not meet this qualification"></span>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p class="m-md-bottom"><strong>Activity on this Job</strong></p>

                                <p class="m-xs-bottom">
                                    <span class="text-muted">Proposals:</span>
                                    Less than 5<span class="glyphicon glyphicon-md vertical-align-middle air-icon-question-circle"
                                                     data-popover="This range includes relevant proposals, but does not include
                    proposals that are withdrawn, declined, or archived. Please note that all
                    proposals are accessible to clients on their applicants page."
                                                     data-popover-trigger="mouseenter"
                                                     data-popover-append-to-body="true"></span>
                                </p>



                                <p class="m-xs-bottom">
                                    <span class="text-muted">Interviewing:</span>
                                    2
                                </p>

                                <p class="m-xs-bottom">
                                    <span class="text-muted">Invites Sent:</span>
                                    0
                                </p>
                                <p class="m-xs-bottom">
                                    <span class="text-muted">Unanswered Invites:</span>
                                    0
                                </p>

                            </div>
                        </div>
                        <div class="row"
                             data-ng-show="showBidsBlock"
                             data-ng-controller="JobDetailsApplicantsController"
                             data-ng-init="init('~014d88a8e651e5e470');
        bidRangeQt = true;
        bidRangeVisible = false;
        isOwner = false;
        isClient = false;"
                             data-ng-cloak>
                            <div class="col-md-12 m-sm-top">
                                <h3 class="m-0-bottom" data-ng-show="showUpgradeHint">
                                    <div class="bid-range" data-ng-cloak>
                                        <strong>Upgrade your membership to see the bid range</strong>
                <span class="text-primary glyphicon air-icon-question-circle"
                      data-eo-popover="/job-details/bundles/odeskjobdetails/partials/bid-range-merch-popover.html?v=bfc5e84"
                      data-eo-popover-size="lg"
                      data-eo-popover-placement="top"
                      data-eo-popover-animation="false"
                      data-eo-popover-popup-delay="200"
                      data-eo-popover-trigger="mouseenter"
                      data-eo-popover-hoverable="true"></span>
                                    </div>
                                </h3>
                                <h3 class="m-0-bottom" data-ng-show="showBids">
                                    Bid range -
                                    <strong>
                                        High ${{ bidStats.maxRateBid.amount | number:2 }} |
                                        Avg ${{ bidStats.avgRateBid.amount | number:2 }} |
                                        Low ${{ bidStats.minRateBid.amount | number:2 }}
                                    </strong>
                                </h3>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="air-card-group">
                    <div class="air-card m-0-right">
                        <div data-ng-controller="JobDetailsHistoryController" data-ng-cloak>
                            <h2 class="m-0-top">Client's Work History and Feedback ({{ historyLength }})</h2>
                            <div data-ng-include="'/job-details/bundles/odeskjobdetails/partials/workhistory.html?v=bfc5e84'">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="air-card-group">
                    <div class="air-card m-0-right">
                        <div ng-controller="JobDetailsOtherOpenJobsController" data-ng-cloak>
                            <h2 class="m-0-top">Other open jobs by this client ({{ jobsCount }})</h2>
                            <div data-ng-include="'/job-details/bundles/odeskjobdetails/partials/otherjobs.html?v=bfc5e84'"></div>
                        </div>                    </div>
                </div>

                <div class="air-card-group">
                    <div class="air-card m-0-right">
                        <h2 class="m-0-top">Similar Jobs on Upwork</h2>
                        <div ng-controller="JobDetailsSimilarJobsController"
                             ng-include="'/job-details/bundles/odeskjobdetails/partials/similarjobs.html?v=bfc5e84'">
                        </div>                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <section id="jobsProviderAction"
                         class="center-block text-center"
                         ng-controller="JobsProviderActionController"
                         ng-init="init({&quot;preventApply&quot;:false,&quot;messageType&quot;:&quot;&quot;,&quot;messageString&quot;:&quot;&quot;})">
                    <h1 class="hidden">Job Details</h1>

                    <a class="btn btn-primary btn-block m-0-top m-md-bottom" rel="nofollow"
                       ng-click="clickApplyButton($event);"
                    >Submit a Proposal</a>

                    <div class="saveJobLinkContainer"
                         ng-init="isActive = false; openingRef = '~014d88a8e651e5e470'"
                         ng-include="'/job-details/bundles/odeskjobdetails/partials/savejoblink.html?v=bfc5e84'"
                         ng-class="{'invisible': !isSavedKnown}"></div>
                    <p class="m-md-top m-md-bottom"
                       eo-popover="/job-details/bundles/odeskjobdetails/partials/connects-subscription-popover.html?v=bfc5e84"
                       eo-popover-trigger="mouseenter"
                       eo-popover-placement="left"
                       eo-popover-autoclose="true"
                       eo-popover-close="false"
                       eo-popover-toggle="data.showSubscriptionTooltip"
                       class="eo-popover-helper">
                        <small>
                            Required Connects to submit a proposal: 2
                            <a eo-popover="/job-details/bundles/odeskjobdetails/partials/connects-popover.html?v=bfc5e84"
                               eo-popover-trigger="mouseenter"
                               eo-popover-close="false"
                               eo-popover-placement="top"
                               eo-popover-hoverable="true"
                               href="#"
                               class="glyphicon glyphicon-md vertical-align-middle air-icon-question-circle">
                            </a>
                            <br/>
                            Available Connects: 58
                        </small>
                    </p>
                </section>

                <hr/>
                <p class="m-md-bottom">
                    <strong>About the Client </strong>
                    <span ng-if="true"
                          eo-popover="/job-details/bundles/odeskjobdetails/partials/verified.html?v=bfc5e84"
                          eo-popover-trigger="mouseenter"
                          eo-popover-placement="top"
                          eo-popover-close="false"
                          eo-popover-hoverable="true"
                          class="text-primary glyphicon air-icon-verified eoPaymentVerified pull-right"></span>
                </p>



                <div class="oJobsAboutBuyerCompany" data-ng-controller="JobDetailsClientNameController" data-ng-init="init('~014d88a8e651e5e470')" data-ng-show="clientName" data-ng-cloak>
                    <h4>
                        {{ clientName }}
                    </h4>
                </div>

                <p class="m-md-bottom"><strong>
            <span eo-rating
                  class="work-rating vertical-align-middle"
                  read-only="true"
                  stars="5"
                  star-radius="9"
                  ng-init="buyerScore = 4.9783893894"
                  star-empty-color="#E0E0E0"
                  star-fill-color="#5BBC2E"
                  container-color="#F9F9F9"
                  rating-define="star"
                  ng-model="buyerScore">
            </span>
                        (4.98) 14
                        reviews
                    </strong></p>
                <p class="m-md-bottom">
                    <strong>United States</strong><br>
        <span class="text-muted">
            Berkeley
            03:37 AM
        </span>
                </p>
                <p class="m-md-bottom">
                    <strong>
                        25
                        Jobs Posted
                    </strong>
                    <br />
    <span class="text-muted">
        72% Hire Rate,
        3 Open Jobs
    </span>
                </p>
                <p class="m-md-bottom">
                    <strong>
                        $5,522
                        Total Spent
                    </strong><br>
        <span class="text-muted">
            28
            Hires,
            2
            Active
        </span>
                </p>
                <p class="m-md-bottom">
                    <strong>
                        $2.01<span class="text-muted normal">/hr</span>
                        Avg Hourly Rate Paid
                    </strong><br>
        <span class="text-muted">
            2,503
            Hours
        </span>
                </p>
                <small class="text-muted">
                    Member Since Jan 14, 2012
                </small>            </div>
        </div>
    </div>

    <div id="layout-footer"></div>
</div>

<footer class="footer-navbar-wrapper footer-default" role="contentinfo" data-ng-controller="footerController">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row links-section">
                    <div class="col-md-3">
                        <p><a href="/info/about/" target="_self">About Us</a></p>
                        <p><a href="/blog/" target="_self">Blog</a></p>
                        <p data-ng-click="feedback()"><a href="javascript:">Feedback</a></p>
                    </div>
                    <div class="col-md-3">
                        <p><a href="http://community.upwork.com" target="_self">Community</a></p>
                        <p><a href="/info/trust_and_safety/" target="_self">Trust &amp; Safety</a></p>
                        <p><a href="https://support.upwork.com/login" target="_self">Help &amp; Support</a></p>
                    </div>
                    <div class="col-md-3">
                        <p><a href="/legal/terms/" target="_self">Terms of Service</a></p>
                        <p><a href="/legal/privacy/" target="_self">Privacy Policy</a></p>
                        <p><a href="/downloads?source=Footer" target="_self">Desktop App</a></p>
                    </div>
                    <div class="col-md-3">
                        <p><a href="/info/terms/cookie-policy" target="_self">Cookie Policy</a></p>
                        <p><a href="/info/advisory/" target="_self">Enterprise Solutions</a></p>
                        <p><a href="/hiring" target="_self">Hiring Headquarters</a></p>
                        <p><a href="/mobile/" target="_self">Mobile</a></p>
                    </div>
                </div>
                <div class="row service-code-section">
                    <div class="col-md-3">
                        <div eo-service-code class="display-inline-block"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="social-icons-wrapper text-center">
                    <a href="https://plus.google.com/107040851368295259701" target="_self"><i class="glyphicon glyphicon-lg air-icon-social-google-plus"></i></a>
                    <a href="https://twitter.com/Upwork" target="_self"><i class="glyphicon glyphicon-lg air-icon-social-twitter"></i></a>
                    <a href="https://www.facebook.com/upwork" target="_self"><i class="glyphicon glyphicon-lg air-icon-social-facebook"></i></a>
                    <a href="https://www.linkedin.com/company/upwork" target="_self"><i class="glyphicon glyphicon-lg air-icon-social-linkedin"></i></a>
                </div>
                <p class="text-center copyright">
                    &copy; 2015 - 2016 Upwork Global Inc.
                </p>
            </div>
        </div>
    </div>
</footer>

<script src="//www.upwork.com/static/components/1.8.6/core.1.8.6.min.js"></script>


<script src="/job-details/js/ccb59a6.js?bfc5e84"></script>
<script>
    var odesk = odesk || {};
    odesk.isVisitor = false;
    (function(angular){
        var app = angular.module('jobDetails');
        app.value('openingId', '209124412');
        app.value('openingCiphertext', '~014d88a8e651e5e470');
        app.value('openingUrl', '/jobs/Create-WordPress-front-end-adoption-existing-web-service_~014d88a8e651e5e470');
        app.value('openingTeamId', 'saltlightinvest');
        app.value('hiredDevelopers', 0);
        app.value('closeReasons', [["","Please select ..."],["67","Accidental job posting creation",null],["51","All positions filled","API_REAS_ALL_POSITIONS_FILLED"],["49","Filled by alternate source",null],["34","No freelancer for requested skills",null],["41","Project was cancelled",null]]);
        app.value('closeJobUrl', '/jobs/close-job');
        app.value('flaggingReasons', [{"rid":9,"reasonString":"SPAM"},{"rid":10,"reasonString":"Contact information included"},{"rid":13,"reasonString":"Asking for free work"},{"rid":14,"reasonString":"Phishing\/fraud"},{"rid":22,"reasonString":"Job is in wrong category"},{"rid":44,"reasonString":"Advertising"},{"rid":11,"reasonString":"Client requesting to work outside of Upwork"}]);
        app.value('flaggingStates', {"22":"0","11":"0","44":"0","13":"0","14":"0","10":"0","9":"0"});
        app.value('connectsData', {"enabled":true,"currentSubscription":{"planId":1},"canSeeApplicantsRates":false,"showAvailableConnects":true,"isContextAdmin":true,"pricesDifferent":false,"connectsForApply":{"connects":58,"jobsPrice":2}});
        app.value('minRateToApply', 3);
        app.value('otherJobs', [{"type":1,"title":"Funny\/Creative\/Eyecatching Facebook Ad Creative Director","ciphertext":"~01af23e6ad8f5d84ee","access":4,"recno":209015490,"createdOn":null,"isPtcJob":false,"isPtcPrivate":false,"isStaffAugmentation":false},{"type":2,"title":"Real Estate Blogger\/Article Writer with Design Skills","ciphertext":"~0190163c0d9d1565c5","access":4,"recno":209124519,"createdOn":null,"isPtcJob":false,"isPtcPrivate":false,"isStaffAugmentation":false}]);
        app.value('similarJobs', [{"ciphertext":"~01267c0c960811946f","title":"Help with existing wordpress website","snippet":"I need so assistance on a wordpress website.\nI have updated designs in Illustrator format. \n\n(new pages and new footer and top menu)\n\nIts very important that the design and creating using all current standards for wordpress and the responsive web.\n\nKnowledge of Visual Composer is a must.\n\nAlso another very important of this project is QA I will need you to be able to test the site on multiple browsers and devices. This will need to be a clear process with either yourself or someone else on your team.\n\nThe person that can show be they are have great attention to detail will win this job.\n\nThanks\n\n\n"},{"ciphertext":"~01a212a8c8e8df18de","title":"Add Tags to existing Wordpress site","snippet":"Our client is doing a SEO campaign and they require Container Tag and Span Tag  added to pages on the existing site\nWe have both Tags ready to go we need someone to spend some time and go to each page and add the tags \n\nit is only a small job but it needs to be done straight away and completed as the campaign starts tomorrow!!! \n\n"},{"ciphertext":"~0100b50a4a5e8dfa03","title":"Need wordpress developer to complete an existing website","snippet":"Complete developing an existing template monster theme #48160 site.  \u200b\n\nbuild, customize  and get the website ready to go live . adding content, logo, etc...\u200b\n\ntrustworthy, knows how to get the website up and operational.  Efficient and timely.\n\nwww.indyhomedesigncenter.com check it out"},{"ciphertext":"~01ae60a65fc28388e3","title":"Redesigning an existing website on WordPress","snippet":"need to redesign an existing website in WordPress to be make it more up to date design than what it is today.  This is one of the two sites that needs to be redesigned. I have an exact idea of what the new site should look like. please send me message and i will share with you the existing site as well as the new design site.  "},{"ciphertext":"~0112aa869d06e2a32c","title":"Update with existing Wordpress template","snippet":"We have an existing Wordpress template for a website that we want to be uploaded and moved to a new server site."}]);
        app.value('baseUri', '/jobs/');
        app.value('workHistory', [{"jobInfo":{"type":2,"title":"Real Estate Marketing Assitant","ciphertext":null,"access":2,"recno":0},"startDate":"2016-11-01T00:00:00.000Z","endDate":null,"status":null,"contractorInfo":{"contractorName":"Meziel Demeray","ciphertext":"~01a2be51890851d15a","accessType":4},"totalHours":101,"feedback":null,"feedbackToClient":null,"totalCharge":273.68,"rate":{"currencyCode":"USD","amount":3.11},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Hand drawn House Portrait Water Color Artist","ciphertext":null,"access":2,"recno":0},"startDate":"2016-08-01T00:00:00.000Z","endDate":null,"status":null,"contractorInfo":{"contractorName":"Madli Silm","ciphertext":"~01a61dbcb4f712195f","accessType":4},"totalHours":0,"feedback":null,"feedbackToClient":null,"totalCharge":40,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Cartoon Map Illustrator","ciphertext":"~01011a9f77ebfba507","access":4,"recno":208386869},"startDate":"2016-09-01T00:00:00.000Z","endDate":"2016-10-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Sangita Das","ciphertext":"~0107c5dc300bf8aeb1","accessType":1},"totalHours":0,"feedback":{"comment":"She took the job but in a day or two, she started to complain the pay isn't enough for the work required. She's unable to match the style I showed. A project that's supposed to take 4-5 days ended up taking 4-5 weeks. Mid way of the project, I've given up and hired another contractor from UpWork who did an excellent job in 4 days. I paid her the full amount at the end just to compensate for the time she put in. But I will only use the other contractor's work.","score":3.2,"commentAccess":1},"feedbackToClient":{"comment":"Thanks. Awaiting the next set of works.","score":4.55,"commentAccess":1},"totalCharge":80,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Cartoon Map Illustrator","ciphertext":"~01011a9f77ebfba507","access":4,"recno":208386869},"startDate":"2016-09-01T00:00:00.000Z","endDate":"2016-09-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Phoebe Herring","ciphertext":"~011eefb65549c9d012","accessType":4},"totalHours":0,"feedback":{"comment":"Excellent work. Good communication. Will definitely hire again.","score":5,"commentAccess":1},"feedbackToClient":{"comment":"An interesting job and brief with clear fast communication from the client.","score":5,"commentAccess":1},"totalCharge":80,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Trace Floor Plan Image and Produce Clean 2D Floor Plan","ciphertext":"~011c63bb3ea08dcfc5","access":4,"recno":205377817},"startDate":"2015-04-01T00:00:00.000Z","endDate":"2015-04-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Asad M.","ciphertext":"~018314ba328c6fb12d","accessType":4},"totalHours":0,"feedback":{"comment":"I am a tough grader and I don't give out easy 5-stars. I actually like Asad a lot. This is the first job he did for me and it took a few more revisions than I anticipated. But compared to other oDesk freelancer, Asad understood the job requirement WAY BETTER than others I hired. Will definintely use him again.","score":4.85,"commentAccess":1},"feedbackToClient":{"comment":null,"score":5,"commentAccess":1},"totalCharge":18,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":2,"title":"\"Quickbooks Online\" Remote Bookkeeping","ciphertext":"~01ff6bc708b50d7ee0","access":1,"recno":200652563},"startDate":"2012-01-01T00:00:00.000Z","endDate":"2015-01-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Lagrimas R.","ciphertext":"~010f48b8620019fed1","accessType":2},"totalHours":320,"feedback":null,"feedbackToClient":{"comment":null,"score":5,"commentAccess":1},"totalCharge":2135.51,"rate":{"currencyCode":"USD","amount":6.67},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Hand drawn House Portrait Water Color Artist","ciphertext":"~010f24b592c937845a","access":4,"recno":203964651},"startDate":"2014-07-01T00:00:00.000Z","endDate":"2014-09-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Tatiana T.","ciphertext":"~0133409e5c1d5beaa6","accessType":4},"totalHours":0,"feedback":null,"feedbackToClient":{"comment":"Client just stopped communication, some job leved unpayed.","score":2,"commentAccess":1},"totalCharge":22.22,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":2,"title":"Website Content writer","ciphertext":null,"access":2,"recno":0},"startDate":"2014-08-01T00:00:00.000Z","endDate":"2014-08-01T00:00:00.000Z","status":null,"contractorInfo":{"contractorName":"Ekta Sharma","ciphertext":"~016199af96a490bbab","accessType":4},"totalHours":13,"feedback":{"comment":"Will use again.","score":4.6,"commentAccess":1},"feedbackToClient":{"comment":"Great client. Very easy to work with. Thanks.","score":5,"commentAccess":1},"totalCharge":250,"rate":{"currencyCode":"USD","amount":20},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Hand drawn House Portrait Water Color Artist","ciphertext":"~010f24b592c937845a","access":4,"recno":203964651},"startDate":"2014-06-01T00:00:00.000Z","endDate":"2014-06-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Adila Zambakovic","ciphertext":"~01fc4075faf8247055","accessType":4},"totalHours":0,"feedback":{"comment":"I like your pencil rendering work.","score":5,"commentAccess":1},"feedbackToClient":{"comment":null,"score":5,"commentAccess":1},"totalCharge":39.22,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Hand drawn House Portrait Water Color Artist","ciphertext":"~010f24b592c937845a","access":4,"recno":203964651},"startDate":"2014-06-01T00:00:00.000Z","endDate":"2014-06-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Dmitry Yakhovsky","ciphertext":"~015ef722a1b943741c","accessType":4},"totalHours":0,"feedback":{"comment":"Good water color.","score":5,"commentAccess":1},"feedbackToClient":null,"totalCharge":20,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Hand drawn House Portrait Water Color Artist","ciphertext":"~010f24b592c937845a","access":4,"recno":203964651},"startDate":"2014-05-01T00:00:00.000Z","endDate":"2014-06-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Rabia Farooqi","ciphertext":"~01fe2ab9787cb6b401","accessType":4},"totalHours":0,"feedback":{"comment":"Missed agreed-on deadline due to freelancer's exams. No communication for 8 days.\nThe delivered work is much poorer in quality than the ones posted on her portfolio.\nContractor did not even draw basic prospective lines correctly. Parallel lines are NOT converging to vanishing point. I explained these basic principles to her and she agreed. Yet the revision still has the same problem.\n\nI gave her upfront payment to start. I dropped this contract in the middle because I don't think I should be paying and explaining to her about basic prospective drawing.","score":2.1,"commentAccess":1},"feedbackToClient":null,"totalCharge":8.33,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Hand drawn House Portrait Water Color Artist","ciphertext":"~010f24b592c937845a","access":4,"recno":203964651},"startDate":"2014-05-01T00:00:00.000Z","endDate":"2014-06-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Cristina M.","ciphertext":"~01657d5545643ea534","accessType":4},"totalHours":0,"feedback":{"comment":"Good work","score":5,"commentAccess":1},"feedbackToClient":null,"totalCharge":20,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Logo Design for Salt Light Investments Inc","ciphertext":"~015c49a433c83bec70","access":4,"recno":204064078},"startDate":"2014-05-01T00:00:00.000Z","endDate":"2014-05-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Md. aminul Hoque","ciphertext":"~019dc29d5803c37e5b","accessType":4},"totalHours":0,"feedback":{"comment":"Nice graphic design work.","score":5,"commentAccess":1},"feedbackToClient":{"comment":"good","score":5,"commentAccess":1},"totalCharge":9,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":2,"title":"Copywriter, Website content writer, Report writer","ciphertext":"~010beabc79fbbbf1a2","access":4,"recno":204029821},"startDate":"2014-05-01T00:00:00.000Z","endDate":"2014-05-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Ekta Sharma","ciphertext":"~016199af96a490bbab","accessType":4},"totalHours":3,"feedback":{"comment":"Well done","score":5,"commentAccess":1},"feedbackToClient":{"comment":"It was a great experience working with this client.","score":5,"commentAccess":1},"totalCharge":36.66,"rate":{"currencyCode":"USD","amount":12.22},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Hand drawn House Portrait Water Color Artist","ciphertext":"~010f24b592c937845a","access":4,"recno":203964651},"startDate":"2014-05-01T00:00:00.000Z","endDate":"2014-05-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Yanitsa Slavcheva","ciphertext":"~018444f99cf26b4334","accessType":4},"totalHours":0,"feedback":{"comment":"2nd job well done.","score":5,"commentAccess":1},"feedbackToClient":{"comment":"It was very nice and interesting to draw for your project!\nBest wishes!","score":5,"commentAccess":1},"totalCharge":35,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Hand drawn House Portrait Water Color Artist","ciphertext":"~010f24b592c937845a","access":4,"recno":203964651},"startDate":"2014-05-01T00:00:00.000Z","endDate":"2014-05-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Dmitry Yakhovsky","ciphertext":"~015ef722a1b943741c","accessType":4},"totalHours":0,"feedback":{"comment":"Good work. Will hire again.","score":4.3,"commentAccess":1},"feedbackToClient":null,"totalCharge":32.22,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Hand drawn House Portrait Water Color Artist","ciphertext":"~013685ca2fc3128e87","access":4,"recno":203934329},"startDate":"2014-04-01T00:00:00.000Z","endDate":"2014-05-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Yanitsa Slavcheva","ciphertext":"~018444f99cf26b4334","accessType":4},"totalHours":0,"feedback":{"comment":"Good job!","score":4.55,"commentAccess":1},"feedbackToClient":{"comment":"It was very nice experience working on your project :) Thank you!","score":5,"commentAccess":1},"totalCharge":75,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":2,"title":"Standby Team Assistant","ciphertext":"~01bbbb7fae9299649a","access":4,"recno":202570864},"startDate":"2013-05-01T00:00:00.000Z","endDate":"2014-04-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Harun Md. Shahed Bin Naim","ciphertext":"~015a186999ac36c6b1","accessType":4},"totalHours":2063,"feedback":{"comment":"The position is no longer needed. Thank you for your help all this time.","score":3.95,"commentAccess":1},"feedbackToClient":{"comment":"I have found him professional and knowledgeable. Overall it was a nice experience to work with him. In course of work he introduced new tools. Before introducing new tools he provided me proper instructions on how to use those. However, I wish I could know why the contract ended suddenly after working for such a long time!","score":5,"commentAccess":1},"totalCharge":2289.75,"rate":{"currencyCode":"USD","amount":1.11},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Data Entry","ciphertext":"~0193adbfc4ee8870da","access":4,"recno":201540684},"startDate":"2012-08-01T00:00:00.000Z","endDate":"2012-08-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Syeed Razzak","ciphertext":"~01827ad4639dbb01a2","accessType":4},"totalHours":0,"feedback":{"comment":"Typing work was done quickly. Only found one mis-spelling. Overall, I am happy.","score":5,"commentAccess":1},"feedbackToClient":{"comment":"Lexin Shan is an awesome employer. Wish I can work with him again.","score":5,"commentAccess":1},"totalCharge":1.11,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Real Estate Color Rendering","ciphertext":"~01c9f0637e50f36c52","access":4,"recno":200622888},"startDate":"2012-01-01T00:00:00.000Z","endDate":"2012-01-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Ivan Predojev","ciphertext":"~01eb300cc03a3a2993","accessType":4},"totalHours":0,"feedback":{"comment":"Ivan did a nice job rendering a real estate portrait for me. He made two rounds of changes according to my suggestions.","score":5,"commentAccess":1},"feedbackToClient":{"comment":"It was a good experience working on this project for Salt Light Investments Inc. I hope that we will continue cooperation in future.","score":4.8,"commentAccess":1},"totalCharge":38.89,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":2,"title":"\"Quickbooks Online\" Remote Bookkeeping","ciphertext":"~01b695088b58da2b01","access":1,"recno":200627798},"startDate":"2012-01-01T00:00:00.000Z","endDate":"2012-01-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Catherine C.","ciphertext":"~0137da09ed1cd092ab","accessType":1},"totalHours":4,"feedback":{"comment":null,"score":2.9,"commentAccess":null},"feedbackToClient":null,"totalCharge":17.76,"rate":{"currencyCode":"USD","amount":4.44},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false}]);
        app.value('openingUid', '810422717610266624');
        app.value('totalApplicants', '4');
    })(angular);
</script>

<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"8e23a381b9","applicationID":"7171610","transactionName":"NVxRMRBYVhBXUhBQDAwWcgYWUFcNGV4AXBAJZlkKAGZcBkJQDVUQPVNcBz1KXQw=","queueTime":0,"applicationTime":950,"atts":"GRtSR1hCRR4=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>

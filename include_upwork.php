
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="robots" content="noodp,nodir,noydir">
    <meta name="keywords" content="Offshore outsourcing, Freelancers, India, Russia, Ukraine, php Programmers, Coders, Developers, Writers, Web Designers, Website Design, Technical Writers">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8"><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"VQIBUF5RGwQBU1BUBgE="};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e,n){function r(t){try{c.console&&console.log(t)}catch(e){}}var o,i=t("ee"),a=t(15),c={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(c.console=!0,o.indexOf("dev")!==-1&&(c.dev=!0),o.indexOf("nr_dev")!==-1&&(c.nrDev=!0))}catch(s){}c.nrDev&&i.on("internal-error",function(t){r(t.stack)}),c.dev&&i.on("fn-err",function(t,e,n){r(n.stack)}),c.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(c,function(t,e){return t}).join(", ")))},{}],2:[function(t,e,n){function r(t,e,n,r,o){try{d?d-=1:i("err",[o||new UncaughtException(t,e,n)])}catch(c){try{i("ierr",[c,(new Date).getTime(),!0])}catch(s){}}return"function"==typeof f&&f.apply(this,a(arguments))}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function o(t){i("err",[t,(new Date).getTime()])}var i=t("handle"),a=t(16),c=t("ee"),s=t("loader"),f=window.onerror,u=!1,d=0;s.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(l){"stack"in l&&(t(8),t(7),"addEventListener"in window&&t(5),s.xhrWrappable&&t(9),u=!0)}c.on("fn-start",function(t,e,n){u&&(d+=1)}),c.on("fn-err",function(t,e,n){u&&(this.thrown=!0,o(n))}),c.on("fn-end",function(){u&&!this.thrown&&d>0&&(d-=1)}),c.on("internal-error",function(t){i("ierr",[t,(new Date).getTime(),!0])})},{}],3:[function(t,e,n){t("loader").features.ins=!0},{}],4:[function(t,e,n){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(8),c=t(7),s="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",l="resource",p="-start",h="-end",m="fn"+p,w="fn"+h,v="bstTimer",y="pushState";t("loader").features.stn=!0,t(6);var g=NREUM.o.EV;o.on(m,function(t,e){var n=t[0];n instanceof g&&(this.bstStart=Date.now())}),o.on(w,function(t,e){var n=t[0];n instanceof g&&i("bst",[n,e,this.bstStart,Date.now()])}),a.on(m,function(t,e,n){this.bstStart=Date.now(),this.bstType=n}),a.on(w,function(t,e){i(v,[e,this.bstStart,Date.now(),this.bstType])}),c.on(m,function(){this.bstStart=Date.now()}),c.on(w,function(t,e){i(v,[e,this.bstStart,Date.now(),"requestAnimationFrame"])}),o.on(y+p,function(t){this.time=Date.now(),this.startPath=location.pathname+location.hash}),o.on(y+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+s]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["c"+s]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["webkitC"+s]()},!1)),document[f]("scroll",r,!1),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],5:[function(t,e,n){function r(t){for(var e=t;e&&!e.hasOwnProperty(u);)e=Object.getPrototypeOf(e);e&&o(e)}function o(t){c.inPlace(t,[u,d],"-",i)}function i(t,e){return t[1]}var a=t("ee").get("events"),c=t(17)(a,!0),s=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";e.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,e){var n=t[1],r=s(n,"nr@wrapped",function(){function t(){if("function"==typeof n.handleEvent)return n.handleEvent.apply(n,arguments)}var e={object:t,"function":n}[typeof n];return e?c(e,"fn-",null,e.name||"anonymous"):n});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],6:[function(t,e,n){var r=t("ee").get("history"),o=t(17)(r);e.exports=r,o.inPlace(window.history,["pushState","replaceState"],"-")},{}],7:[function(t,e,n){var r=t("ee").get("raf"),o=t(17)(r),i="equestAnimationFrame";e.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],8:[function(t,e,n){function r(t,e,n){t[0]=a(t[0],"fn-",null,n)}function o(t,e,n){this.method=n,this.timerDuration="number"==typeof t[1]?t[1]:0,t[0]=a(t[0],"fn-",this,n)}var i=t("ee").get("timer"),a=t(17)(i),c="setTimeout",s="setInterval",f="clearTimeout",u="-start",d="-";e.exports=i,a.inPlace(window,[c,"setImmediate"],c+d),a.inPlace(window,[s],s+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(s+u,r),i.on(c+u,o)},{}],9:[function(t,e,n){function r(t,e){d.inPlace(e,["onreadystatechange"],"fn-",c)}function o(){var t=this,e=u.context(t);t.readyState>3&&!e.resolved&&(e.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,w,"fn-",c)}function i(t){v.push(t),h&&(g=-g,b.data=g)}function a(){for(var t=0;t<v.length;t++)r([],v[t]);v.length&&(v=[])}function c(t,e){return e}function s(t,e){for(var n in t)e[n]=t[n];return e}t(5);var f=t("ee"),u=f.get("xhr"),d=t(17)(u),l=NREUM.o,p=l.XHR,h=l.MO,m="readystatechange",w=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],v=[];e.exports=u;var y=window.XMLHttpRequest=function(t){var e=new p(t);try{u.emit("new-xhr",[e],e),e.addEventListener(m,o,!1)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}return e};if(s(p,y),y.prototype=p.prototype,d.inPlace(y.prototype,["open","send"],"-xhr-",c),u.on("send-xhr-start",function(t,e){r(t,e),i(e)}),u.on("open-xhr-start",r),h){var g=1,b=document.createTextNode(g);new h(a).observe(b,{characterData:!0})}else f.on("fn-end",function(t){t[0]&&t[0].type===m||a()})},{}],10:[function(t,e,n){function r(t){var e=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<d;r++)t.removeEventListener(u[r],this.listener,!1);if(!e.aborted){if(n.duration=(new Date).getTime()-this.startTime,4===t.readyState){e.status=t.status;var i=o(t,this.lastSize);if(i&&(n.rxSize=i),this.sameOrigin){var a=t.getResponseHeader("X-NewRelic-App-Data");a&&(e.cat=a.split(", ").pop())}}else e.status=0;n.cbTime=this.cbTime,f.emit("xhr-done",[t],t),c("xhr",[e,n,this.startTime])}}}function o(t,e){var n=t.responseType;if("json"===n&&null!==e)return e;var r="arraybuffer"===n||"blob"===n||"json"===n?t.response:t.responseText;return h(r)}function i(t,e){var n=s(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}var a=t("loader");if(a.xhrWrappable){var c=t("handle"),s=t(11),f=t("ee"),u=["load","error","abort","timeout"],d=u.length,l=t("id"),p=t(14),h=t(13),m=window.XMLHttpRequest;a.features.xhr=!0,t(9),f.on("new-xhr",function(t){var e=this;e.totalCbs=0,e.called=0,e.cbTime=0,e.end=r,e.ended=!1,e.xhrGuids={},e.lastSize=null,p&&(p>34||p<10)||window.opera||t.addEventListener("progress",function(t){e.lastSize=t.loaded},!1)}),f.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),f.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),f.on("send-xhr-start",function(t,e){var n=this.metrics,r=t[0],o=this;if(n&&r){var i=h(r);i&&(n.txSize=i)}this.startTime=(new Date).getTime(),this.listener=function(t){try{"abort"===t.type&&(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof e.onload))&&o.end(e)}catch(n){try{f.emit("internal-error",[n])}catch(r){}}};for(var a=0;a<d;a++)e.addEventListener(u[a],this.listener,!1)}),f.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),f.on("xhr-load-added",function(t,e){var n=""+l(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),f.on("xhr-load-removed",function(t,e){var n=""+l(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),f.on("addEventListener-end",function(t,e){e instanceof m&&"load"===t[0]&&f.emit("xhr-load-added",[t[1],t[2]],e)}),f.on("removeEventListener-end",function(t,e){e instanceof m&&"load"===t[0]&&f.emit("xhr-load-removed",[t[1],t[2]],e)}),f.on("fn-start",function(t,e,n){e instanceof m&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),f.on("fn-end",function(t,e){this.xhrCbStart&&f.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,e],e)})}},{}],11:[function(t,e,n){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!e.protocol||":"===e.protocol||e.protocol===n.protocol,a=e.hostname===document.domain&&e.port===n.port;return r.sameOrigin=i&&(!e.hostname||a),r}},{}],12:[function(t,e,n){function r(){}function o(t,e,n){return function(){return i(t,[(new Date).getTime()].concat(c(arguments)),e?null:this,n),e?void 0:this}}var i=t("handle"),a=t(15),c=t(16),s=t("ee").get("tracer"),f=NREUM;"undefined"==typeof window.newrelic&&(newrelic=f);var u=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit"],d="api-",l=d+"ixn-";a(u,function(t,e){f[e]=o(d+e,!0,"api")}),f.addPageAction=o(d+"addPageAction",!0),f.setCurrentRouteName=o(d+"routeName",!0),e.exports=newrelic,f.interaction=function(){return(new r).get()};var p=r.prototype={createTracer:function(t,e){var n={},r=this,o="function"==typeof e;return i(l+"tracer",[Date.now(),t,n],r),function(){if(s.emit((o?"":"no-")+"fn-start",[Date.now(),r,o],n),o)try{return e.apply(this,arguments)}finally{s.emit("fn-end",[Date.now()],n)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){p[e]=o(l+e)}),newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),i("err",[t,(new Date).getTime()])}},{}],13:[function(t,e,n){e.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(e){return}}}},{}],14:[function(t,e,n){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),e.exports=r},{}],15:[function(t,e,n){function r(t,e){var n=[],r="",i=0;for(r in t)o.call(t,r)&&(n[i]=e(r,t[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],16:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(o<0?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=r},{}],17:[function(t,e,n){function r(t){return!(t&&t instanceof Function&&t.apply&&!t[a])}var o=t("ee"),i=t(16),a="nr@original",c=Object.prototype.hasOwnProperty,s=!1;e.exports=function(t,e){function n(t,e,n,o){function nrWrapper(){var r,a,c,s;try{a=this,r=i(arguments),c="function"==typeof n?n(r,a):n||{}}catch(f){l([f,"",[r,a,o],c])}u(e+"start",[r,a,o],c);try{return s=t.apply(a,r)}catch(d){throw u(e+"err",[r,a,d],c),d}finally{u(e+"end",[r,a,s],c)}}return r(t)?t:(e||(e=""),nrWrapper[a]=t,d(t,nrWrapper),nrWrapper)}function f(t,e,o,i){o||(o="");var a,c,s,f="-"===o.charAt(0);for(s=0;s<e.length;s++)c=e[s],a=t[c],r(a)||(t[c]=n(a,f?c+o:o,i,c))}function u(n,r,o){if(!s||e){var i=s;s=!0;try{t.emit(n,r,o)}catch(a){l([a,n,r,o])}s=i}}function d(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){l([r])}for(var o in t)c.call(t,o)&&(e[o]=t[o]);return e}function l(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=o),n.inPlace=f,n.flag=a,n}},{}],ee:[function(t,e,n){function r(){}function o(t){function e(t){return t&&t instanceof r?t:t?s(t,c,i):i()}function n(n,r,o){if(!l.aborted){t&&t(n,r,o);for(var i=e(o),a=h(n),c=a.length,s=0;s<c;s++)a[s].apply(i,r);var f=u[y[n]];return f&&f.push([g,n,r,i]),i}}function p(t,e){v[t]=h(t).concat(e)}function h(t){return v[t]||[]}function m(t){return d[t]=d[t]||o(n)}function w(t,e){f(t,function(t,n){e=e||"feature",y[n]=e,e in u||(u[e]=[])})}var v={},y={},g={on:p,emit:n,get:m,listeners:h,context:e,buffer:w,abort:a,aborted:!1};return g}function i(){return new r}function a(){(u.api||u.feature)&&(l.aborted=!0,u=l.backlog={})}var c="nr@context",s=t("gos"),f=t(15),u={},d={},l=e.exports=o();l.backlog=u},{}],gos:[function(t,e,n){function r(t,e,n){if(o.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[e]=r,r}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){o.buffer([t],r),o.emit(t,e,n)}var o=t("ee").get("handle");e.exports=r,r.ee=o},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!b++){var t=g.info=NREUM.info,e=d.getElementsByTagName("script")[0];if(setTimeout(f.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&e))return f.abort();s(v,function(e,n){t[e]||(t[e]=n)}),c("mark",["onload",a()],null,"api");var n=d.createElement("script");n.src="https://"+t.agent,e.parentNode.insertBefore(n,e)}}function o(){"complete"===d.readyState&&i()}function i(){c("mark",["domContent",a()],null,"api")}function a(){return(new Date).getTime()}var c=t("handle"),s=t(15),f=t("ee"),u=window,d=u.document,l="addEventListener",p="attachEvent",h=u.XMLHttpRequest,m=h&&h.prototype;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:h,REQ:u.Request,EV:u.Event,PR:u.Promise,MO:u.MutationObserver},t(12);var w=""+location,v={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-998.min.js"},y=h&&m&&m[l]&&!/CriOS/.test(navigator.userAgent),g=e.exports={offset:a(),origin:w,features:{},xhrWrappable:y};d[l]?(d[l]("DOMContentLoaded",i,!1),u[l]("load",r,!1)):(d[p]("onreadystatechange",o),u[p]("onload",r)),c("mark",["firstbyte",a()],null,"api");var b=0},{}]},{},["loader",2,10,4,3]);</script>

    <meta name="Description" content="I need to have several simple changes/edits done to a new installation of WordPress. Based on previous projects I&#039;ve done, this should take approximately 2 hrs to complete.

Here are the changes needed:

1. Add image to header area
2. Add image to top and bottom of post template
3. Add 250x250 image to sidebar
4. Find and install some free lightbox plugin
5. Add text from 3 html pages into 3 WP pages
6. Add the html from an .html page into a wp page
">

    <title>Need simple changes to a WP install - Web, Mobile &amp; Software Dev</title>

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
            var phpVars = {"runtime_id":"313479b96b2b0a60-ARN","clientStatsDMetrics":true,"smfAjax":false,"pageSpeedMetrics":false,"pageId":"JobDetailsUser","psmetricsTrafficRate":1,"CsrfUserSiteToken":"6bb563cf97d0e099b5e884908dc5267f","activeProposalsRangeEnabled":true};
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
                    Need simple changes to a WP install
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
        31 minutes ago
    </span>
                </small>

                <div class="row">
                    <div class="col-md-4 p-0-right">
                        <div class="pull-left">
                            <span class="glyphicon air-icon-clock-hourly m-0-left-right"></span>
                        </div>
                        <div class="pull-left m-sm-left m-md-bottom col-md-10 p-0-left-right">
                            <p class="m-0-bottom"><strong>Hourly</strong></p>
                            <small class="text-muted">
                                Less than 30 hrs/week<br />
                                Less than 1 week
                            </small>
                        </div>
                    </div>
                    <div class="                        col-md-6
                     p-0-right">
                        <div class="pull-left">$</div>
                        <div class="pull-left m-sm-left m-md-bottom freelancer-level">
                            <p class="m-0-bottom"><strong>Entry Level</strong></p>
                            <small class="text-muted">I am looking for freelancers with the lowest rates</small>
                        </div>
                    </div>
                </div>

                <div class="air-card-group">

                    <div class="air-card m-0-top m-0-right">
                        <h2 class="m-0-top">Details</h2>

                        <p class="break" data-ng-non-bindable>
                            I need to have several simple changes/edits done to a new installation of WordPress. Based on previous projects I&#039;ve done, this should take approximately 2 hrs to complete.<br />
                            <br />
                            Here are the changes needed:<br />
                            <br />
                            1. Add image to header area<br />
                            2. Add image to top and bottom of post template<br />
                            3. Add 250x250 image to sidebar<br />
                            4. Find and install some free lightbox plugin<br />
                            5. Add text from 3 html pages into 3 WP pages<br />
                            6. Add the html from an .html page into a wp page<br />

                        </p>



                        <ul class="list-unstyled">
                            <div id="form"><li>
                                    <strong class="m-sm-right">Project Stage:</strong> Design
                                </li><li>
                                    <strong class="m-sm-right">One-time Project:</strong> WP changes
                                </li><li>
                                    <strong class="m-sm-right">Project Type:</strong> One-time project
                                </li><input type="hidden" id="form__token" name="form[_token]" value="GqJcoSvXlMh4KXu5Pg7OpAQRjFrTlJVIv0mLuMryQK4" /></div>
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
                            <li data-ng-non-bindable>It&#039;s 5:30pm UTC now, When can you get started on this?</li>
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
                                    15 to 20<span class="glyphicon glyphicon-md vertical-align-middle air-icon-question-circle"
                                                  data-popover="This range includes relevant proposals, but does not include
                    proposals that are withdrawn, declined, or archived. Please note that all
                    proposals are accessible to clients on their applicants page."
                                                  data-popover-trigger="mouseenter"
                                                  data-popover-append-to-body="true"></span>
                                </p>



                                <p class="m-xs-bottom">
                                    <span class="text-muted">Interviewing:</span>
                                    0
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
                             data-ng-init="init('~012c46787052713816');
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
                         ng-init="isActive = false; openingRef = '~012c46787052713816'"
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
                            Available Connects: 54
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



                <div class="oJobsAboutBuyerCompany" data-ng-controller="JobDetailsClientNameController" data-ng-init="init('~012c46787052713816')" data-ng-show="clientName" data-ng-cloak>
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
                  ng-init="buyerScore = 4.732169635"
                  star-empty-color="#E0E0E0"
                  star-fill-color="#5BBC2E"
                  container-color="#F9F9F9"
                  rating-define="star"
                  ng-model="buyerScore">
            </span>
                        (4.73) 972
                        reviews
                    </strong></p>
                <p class="m-md-bottom">
                    <strong>United States</strong><br>
        <span class="text-muted">
            Atlanta
            12:53 PM
        </span>
                </p>
                <p class="m-md-bottom">
                    <strong>
                        1758
                        Jobs Posted
                    </strong>
                    <br />
    <span class="text-muted">
        71% Hire Rate,
        8 Open Jobs
    </span>
                </p>
                <p class="m-md-bottom">
                    <strong>
                        Over $50,000
                        Total Spent
                    </strong><br>
        <span class="text-muted">
            1,474
            Hires,
            31
            Active
        </span>
                </p>
                <p class="m-md-bottom">
                    <strong>
                        $4.01<span class="text-muted normal">/hr</span>
                        Avg Hourly Rate Paid
                    </strong><br>
        <span class="text-muted">
            17,127
            Hours
        </span>
                </p>
                <small class="text-muted">
                    Member Since Jan 23, 2009
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
        app.value('openingId', '209125772');
        app.value('openingCiphertext', '~012c46787052713816');
        app.value('openingUrl', '/jobs/Need-simple-changes-install_~012c46787052713816');
        app.value('openingTeamId', 'intencon');
        app.value('hiredDevelopers', 0);
        app.value('closeReasons', [["","Please select ..."],["67","Accidental job posting creation",null],["51","All positions filled","API_REAS_ALL_POSITIONS_FILLED"],["49","Filled by alternate source",null],["34","No freelancer for requested skills",null],["41","Project was cancelled",null]]);
        app.value('closeJobUrl', '/jobs/close-job');
        app.value('flaggingReasons', [{"rid":9,"reasonString":"SPAM"},{"rid":10,"reasonString":"Contact information included"},{"rid":13,"reasonString":"Asking for free work"},{"rid":14,"reasonString":"Phishing\/fraud"},{"rid":22,"reasonString":"Job is in wrong category"},{"rid":44,"reasonString":"Advertising"},{"rid":11,"reasonString":"Client requesting to work outside of Upwork"}]);
        app.value('flaggingStates', {"13":"0","10":"0","22":"0","14":"0","44":"0","9":"0","11":"0"});
        app.value('connectsData', {"enabled":true,"currentSubscription":{"planId":1},"canSeeApplicantsRates":false,"showAvailableConnects":true,"isContextAdmin":true,"pricesDifferent":false,"connectsForApply":{"connects":54,"jobsPrice":2}});
        app.value('minRateToApply', 3);
        app.value('otherJobs', [{"type":1,"title":"2 hours web research","ciphertext":"~0166b5046b4684cc4c","access":4,"recno":209010008,"createdOn":null,"isPtcJob":false,"isPtcPrivate":false,"isStaffAugmentation":false},{"type":2,"title":"Convert a word doc into a PowerPoint presentation","ciphertext":"~013b579b56413fcfd7","access":4,"recno":208818836,"createdOn":null,"isPtcJob":false,"isPtcPrivate":false,"isStaffAugmentation":false},{"type":2,"title":"Easy 10-minute fix for networking genius","ciphertext":"~01ca49af3d452166ad","access":1,"recno":209002497,"createdOn":null,"isPtcJob":false,"isPtcPrivate":false,"isStaffAugmentation":false},{"type":2,"title":"Part-time email sender","ciphertext":"~019107b6fdd9bc6ad9","access":1,"recno":208719235,"createdOn":null,"isPtcJob":false,"isPtcPrivate":false,"isStaffAugmentation":false},{"type":2,"title":"Schedule Once to Appointment Core transition","ciphertext":"~015c28839c16d4f1ba","access":4,"recno":208969992,"createdOn":null,"isPtcJob":false,"isPtcPrivate":false,"isStaffAugmentation":false},{"type":1,"title":"Type 50 pages of text","ciphertext":"~01d187a5ad08936927","access":4,"recno":208368246,"createdOn":null,"isPtcJob":false,"isPtcPrivate":false,"isStaffAugmentation":false},{"type":2,"title":"ii. Copywriter","ciphertext":"~01096e0257bdb62bd3","access":1,"recno":208174076,"createdOn":null,"isPtcJob":false,"isPtcPrivate":false,"isStaffAugmentation":false}]);
        app.value('similarJobs', []);
        app.value('baseUri', '/jobs/');
        app.value('workHistory', [{"jobInfo":{"type":2,"title":"Quick 2 hr project - Upload content to Wordpress from MS Word Docs","ciphertext":"~0180d81844bb59351c","access":4,"recno":209112525},"startDate":"2016-12-01T00:00:00.000Z","endDate":null,"status":1,"contractorInfo":{"contractorName":"Vivek K.","ciphertext":"~016414fc4a37222891","accessType":4},"totalHours":0.67,"feedback":null,"feedbackToClient":null,"totalCharge":0,"rate":{"currencyCode":"USD","amount":6},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":2,"title":"2 hour project - Convert Word docs to pdf","ciphertext":"~019f07c1030e48ba50","access":4,"recno":209118112},"startDate":"2016-12-01T00:00:00.000Z","endDate":null,"status":1,"contractorInfo":{"contractorName":"Fazle Rahman","ciphertext":"~01276ce6205f3a0300","accessType":4},"totalHours":1.17,"feedback":null,"feedbackToClient":null,"totalCharge":0,"rate":{"currencyCode":"USD","amount":3},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Type text from video into PowerPoint slides","ciphertext":null,"access":2,"recno":0},"startDate":"2016-11-01T00:00:00.000Z","endDate":null,"status":null,"contractorInfo":{"contractorName":"Ronaldo Piopongco","ciphertext":"~010dfbae679eafe60f","accessType":4},"totalHours":0,"feedback":null,"feedbackToClient":null,"totalCharge":5,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":2,"title":"2-hour web research project - Need done today","ciphertext":"~01cad99769915c76bf","access":4,"recno":208892848},"startDate":"2016-11-01T00:00:00.000Z","endDate":null,"status":1,"contractorInfo":{"contractorName":"Rani Khatun","ciphertext":"~01890008c48c22cdfa","accessType":4},"totalHours":1.5,"feedback":null,"feedbackToClient":null,"totalCharge":0,"rate":{"currencyCode":"USD","amount":4},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"350-word article written on marketing and sales","ciphertext":"~010928757c899bef93","access":4,"recno":208784117},"startDate":"2016-10-01T00:00:00.000Z","endDate":null,"status":1,"contractorInfo":{"contractorName":"Williams Mary","ciphertext":"~01eb5d9f132f4aba5b","accessType":4},"totalHours":0,"feedback":null,"feedbackToClient":null,"totalCharge":5,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"3-hour copy\/paste project","ciphertext":"~01c7b34db4dcabfd16","access":4,"recno":208570774},"startDate":"2016-10-01T00:00:00.000Z","endDate":null,"status":1,"contractorInfo":{"contractorName":"Marija Cipusheva","ciphertext":"~0105c7502db81779a5","accessType":2},"totalHours":0,"feedback":null,"feedbackToClient":null,"totalCharge":4.3,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"3-hour copy\/paste project","ciphertext":"~01c7b34db4dcabfd16","access":4,"recno":208570774},"startDate":"2016-10-01T00:00:00.000Z","endDate":null,"status":1,"contractorInfo":{"contractorName":"Tyler Kennedy","ciphertext":"~01a86ae9b47940cbcf","accessType":4},"totalHours":0,"feedback":null,"feedbackToClient":null,"totalCharge":0,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"3-hour copy\/paste project","ciphertext":"~01c7b34db4dcabfd16","access":4,"recno":208570774},"startDate":"2016-10-01T00:00:00.000Z","endDate":null,"status":1,"contractorInfo":{"contractorName":"Ashley Andrews","ciphertext":"~01811e73c25b25ab8e","accessType":4},"totalHours":0,"feedback":null,"feedbackToClient":null,"totalCharge":0,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"30 mins web research - find calendar software","ciphertext":null,"access":2,"recno":0},"startDate":"2016-10-01T00:00:00.000Z","endDate":null,"status":null,"contractorInfo":{"contractorName":"Jarl Taggueg","ciphertext":"~01b36e7c12a6815c36","accessType":4},"totalHours":0,"feedback":null,"feedbackToClient":null,"totalCharge":0,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"2 hours web research","ciphertext":"~010d1e373100e4ef61","access":1,"recno":208353942},"startDate":"2016-09-01T00:00:00.000Z","endDate":null,"status":1,"contractorInfo":{"contractorName":"Shelley Kunkle","ciphertext":"~01ff67695174689cb9","accessType":2},"totalHours":0,"feedback":null,"feedbackToClient":null,"totalCharge":7,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":2,"title":"xiii. Facebook Ad Management Expert","ciphertext":"~011d76e556929bd2a8","access":1,"recno":208027755},"startDate":"2016-08-01T00:00:00.000Z","endDate":null,"status":1,"contractorInfo":{"contractorName":"David Laur","ciphertext":"~01e4abd880e5f665a5","accessType":4},"totalHours":11,"feedback":null,"feedbackToClient":null,"totalCharge":274.99,"rate":{"currencyCode":"USD","amount":25},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"50 minute transcription","ciphertext":"~013c188d93176b1c59","access":4,"recno":207999485},"startDate":"2016-07-01T00:00:00.000Z","endDate":null,"status":1,"contractorInfo":{"contractorName":"Katie V.","ciphertext":"~01a52dc7ae740427bd","accessType":4},"totalHours":0,"feedback":null,"feedbackToClient":null,"totalCharge":25,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":2,"title":"ActiveCampaign AND Everwebinar setup","ciphertext":"~017656d63dfa5d986c","access":4,"recno":208091676},"startDate":"2016-07-01T00:00:00.000Z","endDate":null,"status":1,"contractorInfo":{"contractorName":"Ratul Bin Hasan","ciphertext":"~01e679b592145faad7","accessType":2},"totalHours":11,"feedback":null,"feedbackToClient":null,"totalCharge":192.67,"rate":{"currencyCode":"USD","amount":17},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":2,"title":"Thrive Themes work","ciphertext":null,"access":2,"recno":0},"startDate":"2016-01-01T00:00:00.000Z","endDate":null,"status":null,"contractorInfo":{"contractorName":"Nazmin Nahar","ciphertext":"~0148254bf798b8b049","accessType":4},"totalHours":159,"feedback":null,"feedbackToClient":null,"totalCharge":1239.67,"rate":{"currencyCode":"USD","amount":8},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Need 250-300 words to complete an article","ciphertext":"~01cf02dcc94bbe186c","access":4,"recno":206467203},"startDate":"2015-12-01T00:00:00.000Z","endDate":null,"status":1,"contractorInfo":{"contractorName":"Siobhan Barton","ciphertext":"~01f737a3e003475c95","accessType":4},"totalHours":0,"feedback":null,"feedbackToClient":null,"totalCharge":7,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"2 hr project - Upload content to Wordpress from MS Word Docs","ciphertext":"~01cc96d8dd6ce7a854","access":4,"recno":209092723},"startDate":"2016-12-01T00:00:00.000Z","endDate":"2016-12-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Mohsin Nazar Khakwani","ciphertext":"~0191a7c77d16da3cb4","accessType":4},"totalHours":0,"feedback":{"comment":"Great job on this project","score":5,"commentAccess":1},"feedbackToClient":{"comment":"Nice person to work with.","score":5,"commentAccess":1},"totalCharge":5,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"2 hours web research","ciphertext":"~0166b5046b4684cc4c","access":4,"recno":209010008},"startDate":"2016-12-01T00:00:00.000Z","endDate":"2016-12-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Tiffanie B.","ciphertext":"~01b29ac5cad100f75a","accessType":4},"totalHours":0,"feedback":null,"feedbackToClient":null,"totalCharge":5,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Very simple typing project - NEED DONE NOW","ciphertext":"~0182510ae60482639b","access":4,"recno":208979839},"startDate":"2016-11-01T00:00:00.000Z","endDate":"2016-12-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Maria concepcion M.","ciphertext":"~01bf1b8786844692c9","accessType":4},"totalHours":0,"feedback":{"comment":"Maria did an exceptional job on this project.  Her work ethic is superb. HIGHLY REOMMENDED","score":5,"commentAccess":1},"feedbackToClient":{"comment":"Sir Antonio is someone who is comfortable to work with. He is very cooperative. Truthfully, I enjoyed working with him and hope to have the opportunity to work with him again.","score":4.5,"commentAccess":1},"totalCharge":5,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":2,"title":"Need a very simple logo designed","ciphertext":"~016bf409d91724ebe6","access":4,"recno":209069194},"startDate":"2016-12-01T00:00:00.000Z","endDate":"2016-12-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Zarina Clark","ciphertext":"~013966e894014f5c23","accessType":4},"totalHours":0.5,"feedback":{"comment":"I was in a tight spot and Zarina really helped me out.  I needed a logo quickly and she sent multiple versions within a few minutes.  THANKS for a great job.","score":5,"commentAccess":1},"feedbackToClient":{"comment":"The client was clear about what he both needed and expected. As a result, the project was completed smoothly and in no time at all. Would work with again!","score":5,"commentAccess":1},"totalCharge":7.78,"rate":{"currencyCode":"USD","amount":15.56},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Very simple 2-hour admin job","ciphertext":"~01082f422a3309cc71","access":4,"recno":208880303},"startDate":"2016-11-01T00:00:00.000Z","endDate":"2016-11-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Andrea Yurkiw","ciphertext":"~0102e030fc6717b850","accessType":4},"totalHours":0,"feedback":{"comment":"I got myself into a jam and needed to have this project completed very, very quickly. Andrea did a great job and completed the project within the timeframe I needed. Great provider to work with!","score":5,"commentAccess":1},"feedbackToClient":null,"totalCharge":5,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"20-min transcription","ciphertext":"~01dada1e2975851836","access":4,"recno":208853406},"startDate":"2016-11-01T00:00:00.000Z","endDate":"2016-11-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Shenae Richards","ciphertext":"~01bae5cd86aa17df89","accessType":4},"totalHours":0,"feedback":null,"feedbackToClient":{"comment":null,"score":3.2,"commentAccess":1},"totalCharge":5,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Very simple PowerPoint project","ciphertext":"~016597efb8cd0f5abc","access":4,"recno":208884057},"startDate":"2016-11-01T00:00:00.000Z","endDate":"2016-11-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Anh Khoa Nguyen","ciphertext":"~012ef37839a8e3c0f7","accessType":1},"totalHours":0,"feedback":{"comment":"Ank did a great job on the project","score":5,"commentAccess":1},"feedbackToClient":{"comment":"Great client. Hope to work with you again","score":5,"commentAccess":1},"totalCharge":5,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Easy 1-hour admin job - find and replace text in multiple docs","ciphertext":"~01dcfe4e0849afaed3","access":4,"recno":208812024},"startDate":"2016-11-01T00:00:00.000Z","endDate":"2016-11-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Paula Riascos","ciphertext":"~01006e9a7a1f2ff6a1","accessType":4},"totalHours":0,"feedback":{"comment":"Paula got the work done quickly and did a great job on the project. Will definitely work with her again.","score":5,"commentAccess":1},"feedbackToClient":null,"totalCharge":5,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Simple 1 hour copy paste project","ciphertext":"~01f97599359418710e","access":4,"recno":208853510},"startDate":"2016-11-01T00:00:00.000Z","endDate":"2016-11-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Danielle Hernandez","ciphertext":"~012063e255fa98200d","accessType":4},"totalHours":0,"feedback":{"comment":"One word - WOW!  Danielle went so far and above what was expected, that it's almost unbelievable. I'm so glad I had a chance to work with her. I HIGHLY recommend her as a provider, you will not be disappointed.","score":5,"commentAccess":1},"feedbackToClient":{"comment":"Mr. Thornton asked for a simple task done which I worked on and completed in the time frame he gave me. I hope to have the opportunity to work with him again.","score":5,"commentAccess":1},"totalCharge":5,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Very simple 2-hour admin job","ciphertext":"~01812474c2b8b8a318","access":4,"recno":208844299},"startDate":"2016-11-01T00:00:00.000Z","endDate":"2016-11-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Rebecca Rife","ciphertext":"~01c9f22f765aa0629c","accessType":1},"totalHours":0,"feedback":{"comment":"Rebecca did a great job on this project. Thanks for your help!","score":5,"commentAccess":1},"feedbackToClient":null,"totalCharge":5,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Simple 30-min project - listen to audio","ciphertext":"~0177947eb6a6c2ba48","access":1,"recno":208803727},"startDate":"2016-11-01T00:00:00.000Z","endDate":"2016-11-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"David Spiro","ciphertext":"~010c6fae6a1f6c6142","accessType":4},"totalHours":0,"feedback":{"comment":"David really helped me out of a jam.  He got this done in less than an hour and did a great job.  Thanks!","score":5,"commentAccess":1},"feedbackToClient":{"comment":"Excellent communication and cooperation! Need I say more?\r\n\r\nThanks Antonio","score":5,"commentAccess":1},"totalCharge":5,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Very simple 10-minute project","ciphertext":"~0144ef01bb07324ec7","access":1,"recno":208796584},"startDate":"2016-11-01T00:00:00.000Z","endDate":"2016-11-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Bridget Shadgett","ciphertext":"~01000d512eb2ffa40d","accessType":4},"totalHours":0,"feedback":{"comment":"Thanks Bridget... I know this was as simple project, but I needed it done quickly and you came through! I appreciate your help on this.","score":5,"commentAccess":1},"feedbackToClient":{"comment":"Very simple task. Client was quick to respond.","score":5,"commentAccess":1},"totalCharge":3.5,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"350-word article written on marketing and sales","ciphertext":"~010928757c899bef93","access":4,"recno":208784117},"startDate":"2016-10-01T00:00:00.000Z","endDate":"2016-10-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Tyler Brabo","ciphertext":"~01158bc4f2797ae9da","accessType":4},"totalHours":0,"feedback":{"comment":"Needed an article done quickly and Tyler got it done fast!  Thanks for the great job.","score":5,"commentAccess":1},"feedbackToClient":{"comment":"Antonio was straightforward with what he wanted for this article and I had no problems following his guidelines. 10\/10 client :)","score":5,"commentAccess":1},"totalCharge":17,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"3-hour copy\/paste project","ciphertext":"~01c7b34db4dcabfd16","access":4,"recno":208570774},"startDate":"2016-10-01T00:00:00.000Z","endDate":"2016-10-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Sapana Jaisawal","ciphertext":"~013a24f6c2c489e754","accessType":4},"totalHours":0,"feedback":{"comment":"Sapana  did a great job on this project.  She was one of the few providers who actually completed the work. GREAT JOB!","score":5,"commentAccess":1},"feedbackToClient":{"comment":"Great client. I will certainly  work with him if given a chance.","score":5,"commentAccess":1},"totalCharge":10,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"2 hours web research","ciphertext":"~014296ab6e02565cf4","access":1,"recno":208702302},"startDate":"2016-10-01T00:00:00.000Z","endDate":"2016-10-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Laura U.","ciphertext":"~01b0198e518e5639bf","accessType":4},"totalHours":0,"feedback":{"comment":"This is going to be an unorthodox review, but it's definitely called for.  I hire Laura to find some events and activities for my children and I. She found some of the most amazing activities. I wish I could give her 10 stars because beyond the good work she's done, after a great day with my children, my daughter said to me that I'm the best dad in the world. There aren't enough stars to give to show my appreciation. THANKS LAURA!!","score":5,"commentAccess":1},"feedbackToClient":{"comment":"Client gave very specific instructions and solid deadline which eliminated the need for extra questions or clarification.  Client provided ample time to complete the job and even provided examples to help me get started.  Would definitely work with this client again!  Thanks!!","score":4.7,"commentAccess":1},"totalCharge":10,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"20-min transcription","ciphertext":"~014294750dc0e40700","access":4,"recno":208623103},"startDate":"2016-10-01T00:00:00.000Z","endDate":"2016-10-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Crystal Brown","ciphertext":"~01f1969326b99cae35","accessType":4},"totalHours":0,"feedback":{"comment":"Crystal did a great job on the project. FANTASTIC work and a very quick turnaround. Recommended.","score":5,"commentAccess":1},"feedbackToClient":{"comment":null,"score":5,"commentAccess":1},"totalCharge":5,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"10-hour research project to find colleges and universities","ciphertext":"~01cdda07f9653d4ea3","access":4,"recno":206053446},"startDate":"2015-09-01T00:00:00.000Z","endDate":"2016-10-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Hannah Lucy Pal-ing","ciphertext":"~01a50a165a6fc7733f","accessType":2},"totalHours":0,"feedback":null,"feedbackToClient":{"comment":"Good Client!","score":5,"commentAccess":1},"totalCharge":44.44,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Simple 2 hr transcription job - 100% ENGLISH FLUENCY REQUIRED","ciphertext":"~01655c3ad5bca329f5","access":1,"recno":208631845},"startDate":"2016-10-01T00:00:00.000Z","endDate":"2016-10-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Bianca Daley","ciphertext":"~011a931cec10867f5f","accessType":4},"totalHours":0,"feedback":{"comment":"I think this was Bianca's first project and she did a great job on it.  Thanks for you good work and fast turnaround.","score":5,"commentAccess":1},"feedbackToClient":{"comment":"It was a great experience working for Mr Thornton, specifications were clearly stated and he was accessible for any queries. All the very best sir!","score":5,"commentAccess":1},"totalCharge":5,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Ebook cover from existing design","ciphertext":"~015c775b0bf81c1b50","access":1,"recno":208631466},"startDate":"2016-10-01T00:00:00.000Z","endDate":"2016-10-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Nikola Sudarevic","ciphertext":"~0143afebcec66c7eed","accessType":2},"totalHours":0,"feedback":{"comment":"Nikola did a great job on the project!","score":5,"commentAccess":1},"feedbackToClient":{"comment":null,"score":5,"commentAccess":1},"totalCharge":12,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"PARTIALLY transcribe a 1-hour video","ciphertext":"~01554853960fbd86f6","access":1,"recno":208430702},"startDate":"2016-09-01T00:00:00.000Z","endDate":"2016-09-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Melanie Grosjean","ciphertext":"~0191a34fc71e4a41b5","accessType":4},"totalHours":0,"feedback":{"comment":"I think this was Melanie's first project and she did a great job.  Really professional and great thinker. She gave me some valuable feedback to help me wit the project.","score":5,"commentAccess":1},"feedbackToClient":{"comment":"Was an easy, entry level job for a beginner. Client was easy to work with and I would work with them again in the future.","score":5,"commentAccess":1},"totalCharge":3,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Type 50 pages of text","ciphertext":"~01d187a5ad08936927","access":4,"recno":208368246},"startDate":"2016-09-01T00:00:00.000Z","endDate":"2016-09-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Asra Cassim","ciphertext":"~01a310473a189bf586","accessType":1},"totalHours":0,"feedback":{"comment":"Asra did a good job on this project.","score":5,"commentAccess":1},"feedbackToClient":{"comment":"It was such a pleasure to work with Mr. Antonio. He made payments on time. I really enjoyed working with him and hope to have the opportunity to work with him again.","score":5,"commentAccess":1},"totalCharge":2,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"2 hours web research","ciphertext":"~010d1e373100e4ef61","access":1,"recno":208353942},"startDate":"2016-09-01T00:00:00.000Z","endDate":"2016-09-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Ashley Wells","ciphertext":"~011246bf1c071e8f2e","accessType":4},"totalHours":0,"feedback":{"comment":"I have used sites outsourcing sites like upwork for the past 15 years and have worked with hundreds of service providers. Often when the project is this \"easy\" the provider does the absolute bare minimum. Ashley did the exact opposite. She went way above and beyond what she was asked to do and provided immense value for this project. She has definitely raised the bar! Highly recommended and will definitely hire again.","score":5,"commentAccess":1},"feedbackToClient":{"comment":"Job description was very clear and client was very responsive to messages. I would enjoy working for this client again.","score":4.85,"commentAccess":1},"totalCharge":5,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Super Simple 2-hour copy\/paste (web scraping) project","ciphertext":"~01c3322558a13a83a2","access":4,"recno":208398276},"startDate":"2016-09-01T00:00:00.000Z","endDate":"2016-09-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Dusan P.","ciphertext":"~01c0f0adb699d16eaa","accessType":4},"totalHours":0,"feedback":{"comment":"Dusan did a phenomenal job on the project. We had some problems with the website but Dusan was able to overcome them His accuracy and professionalism are well commended Highly recommended!","score":5,"commentAccess":1},"feedbackToClient":{"comment":"Great employer, patient and helpful, comunicative and always available for guidance. would work with him anytime and highly recommended","score":5,"commentAccess":1},"totalCharge":4,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":2,"title":"xiii. Facebook Ad Management Expert","ciphertext":"~011d76e556929bd2a8","access":1,"recno":208027755},"startDate":"2016-09-01T00:00:00.000Z","endDate":"2016-09-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Usman Khalid","ciphertext":"~01a6fe8b461e7cc246","accessType":4},"totalHours":10,"feedback":{"comment":"Usman was very knowledgeable, communicative, and self-motivated in achieving success for us with our FB campaign. We highly recommend him, and are thankful for his perfect efforts. Thanks Usman!","score":5,"commentAccess":1},"feedbackToClient":{"comment":"Great Working with Khalafani.","score":5,"commentAccess":1},"totalCharge":170,"rate":{"currencyCode":"USD","amount":17},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Super Simple 2-hour copy\/paste (web scraping) project","ciphertext":"~01c3322558a13a83a2","access":4,"recno":208398276},"startDate":"2016-09-01T00:00:00.000Z","endDate":"2016-09-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Ritiek Malhotra","ciphertext":"~01f026707d88524d7a","accessType":4},"totalHours":0,"feedback":{"comment":"Ritiek did a good job on this project.  He completed it in much less time than I thought.  Great provider to work with","score":5,"commentAccess":1},"feedbackToClient":{"comment":"My first client. Antonio provided clear instructions and was quick in clearing my queries. I enjoyed working with him and hope to work with him again! Recommended 10\/10.","score":5,"commentAccess":1},"totalCharge":2.01,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":2,"title":"xi. Summarization Of A Program's Materials - Writing\/Reading\/Viewing A Few Videos","ciphertext":"~01347191b0b3151108","access":1,"recno":208291460},"startDate":"2016-08-01T00:00:00.000Z","endDate":"2016-08-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Jeremy Robertson","ciphertext":"~015380c3f51f41248f","accessType":4},"totalHours":4.67,"feedback":{"comment":"Excellent work on this very specialized task that required a very acute understanding and organization of information. I'm thankful for his high quality of work in such a short turnaround time. Well done Jeremy.","score":5,"commentAccess":1},"feedbackToClient":{"comment":"Great communication as to how they wanted the work done, not afraid of offering feedback throughout the project. I would definitely work with this client again!","score":5,"commentAccess":1},"totalCharge":37.33,"rate":{"currencyCode":"USD","amount":8},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":2,"title":"xiii. Facebook Ad Management Expert","ciphertext":"~011d76e556929bd2a8","access":1,"recno":208027755},"startDate":"2016-08-01T00:00:00.000Z","endDate":"2016-08-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Navneet Kumar","ciphertext":"~01bf736b078ae58269","accessType":2},"totalHours":4.83,"feedback":{"comment":"It was decent working with Navneet. Thank you for your time and attention Navneet! Best of luck to you.","score":5,"commentAccess":1},"feedbackToClient":{"comment":null,"score":4.45,"commentAccess":1},"totalCharge":53.7,"rate":{"currencyCode":"USD","amount":11.11},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":2,"title":"Need 5 pages of web copy for sales\/marketing firm","ciphertext":"~014baec48968e5e4dc","access":4,"recno":208097461},"startDate":"2016-07-01T00:00:00.000Z","endDate":"2016-07-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Nabil A.","ciphertext":"~01dba3c52f655ac315","accessType":4},"totalHours":3,"feedback":null,"feedbackToClient":{"comment":"Amazing client.","score":5,"commentAccess":1},"totalCharge":41.67,"rate":{"currencyCode":"USD","amount":27.78},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Simple 2 hr transcription job - 100% ENGLISH FLUENCY REQUIRED","ciphertext":"~017d7314c928478808","access":1,"recno":208109337},"startDate":"2016-07-01T00:00:00.000Z","endDate":"2016-07-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Kara O'Keefe","ciphertext":"~01b1db90816a80eba2","accessType":4},"totalHours":0,"feedback":{"comment":"I love when providers go above and beyond expectations.  This was an 'easy' project, but tedious...and despite it being a relatively low-paying job, Kara completed it like a true professional by giving 110%. GREAT provider to work with.","score":5,"commentAccess":1},"feedbackToClient":{"comment":"Was very easy to work with Antonio! I was looking to increase my experience on UpWork and this was the perfect entry level project. Antonio gave really clear instructions and was available and prompt when I had questions. Would be happy to work with him again!","score":5,"commentAccess":1},"totalCharge":5,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Quick 2 hour web research to find family activities","ciphertext":"~0169138ca6767d5798","access":4,"recno":208096954},"startDate":"2016-07-01T00:00:00.000Z","endDate":"2016-07-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Veronica M.","ciphertext":"~0173cc8f1e7651ddfe","accessType":4},"totalHours":0,"feedback":{"comment":"Veronica did a great job on this project. She provided exactly what I was looking for. Great provider to work with!","score":5,"commentAccess":1},"feedbackToClient":{"comment":"Great communication and very straightforward job. I would definitely work with him again. Thank you!","score":5,"commentAccess":1},"totalCharge":5,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Very simple 2-hour admin job","ciphertext":"~0158c2d4288ffb8bff","access":4,"recno":208000142},"startDate":"2016-07-01T00:00:00.000Z","endDate":"2016-07-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Melissa Lai","ciphertext":"~0173a9041b2a1ed87b","accessType":1},"totalHours":0,"feedback":{"comment":"Awesome, Awesome, Awesome!  Thanks Melissa for such a great job.  Very professional and a joy to work with.","score":5,"commentAccess":1},"feedbackToClient":{"comment":"Work took a little longer than expected, but great communication. It was a pleasure!","score":4.65,"commentAccess":1},"totalCharge":5.5,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Very simple 7-hour admin job","ciphertext":"~01d3d10e0ccd34a148","access":4,"recno":207987051},"startDate":"2016-07-01T00:00:00.000Z","endDate":"2016-07-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Mely R.","ciphertext":"~01db77edb2317b100d","accessType":2},"totalHours":0,"feedback":{"comment":"Fantastic job.  Thanks for the help Mely!","score":5,"commentAccess":1},"feedbackToClient":{"comment":"Thank you for the opportunity.","score":5,"commentAccess":1},"totalCharge":14,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Super simple 2-hour admin job","ciphertext":"~013c93656be8217a55","access":4,"recno":207986346},"startDate":"2016-07-01T00:00:00.000Z","endDate":"2016-07-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Lorenzo P.","ciphertext":"~0118fbea8f7795e127","accessType":4},"totalHours":0,"feedback":{"comment":"Lorenzo did a GREAT job on this project.  We had some technical difficulties on our end and it caused the project scope to change, but Lorenzo was very patient and helped me out of a tough jam.  A+","score":5,"commentAccess":1},"feedbackToClient":{"comment":"He was a very comprehensive Client with clear and great instructions","score":5,"commentAccess":1},"totalCharge":5,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Very simple 7-hour admin job","ciphertext":"~01d3d10e0ccd34a148","access":4,"recno":207987051},"startDate":"2016-07-01T00:00:00.000Z","endDate":"2016-07-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Prasad B","ciphertext":"~01fd3579fe2d24e10c","accessType":4},"totalHours":0,"feedback":{"comment":"Some providers do a good job on their projects. You hire them to perform a task and they perform that task. But other providers go above and beyond.  Prasad is one of those providers. Not only did he do a great job on the work, but he showed me some things I didn't know about my own software. Highly, highly recommended!","score":5,"commentAccess":1},"feedbackToClient":{"comment":"Client has explained me clearly what need to be done. He was always with me whenever I needed his help or when I'm struck somewhere. He was very cooperative and has encouraged me by giving first opportunity to start my career in upwork. Really a great person to work with.","score":5,"commentAccess":1},"totalCharge":24,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"15-minute transcription","ciphertext":"~01f94261e93bddc6e6","access":4,"recno":207970448},"startDate":"2016-07-01T00:00:00.000Z","endDate":"2016-07-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Katie V.","ciphertext":"~01a52dc7ae740427bd","accessType":4},"totalHours":0,"feedback":{"comment":"I know this was Katie's first project, but she did an excellent job on the transcription. Got it completed in less than an hour. HIGHLY RECOMMENDED","score":5,"commentAccess":1},"feedbackToClient":{"comment":"Antonio gave clear instructions and was easy to work with. Would love to work with him again!","score":5,"commentAccess":1},"totalCharge":1,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false}]);
        app.value('openingUid', '810535781445734400');
        app.value('totalApplicants', '19');
    })(angular);
</script>

<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"8e23a381b9","applicationID":"7171610","transactionName":"NVxRMRBYVhBXUhBQDAwWcgYWUFcNGV4AXBAJZlkKAGZcBkJQDVUQPVNcBz1KXQw=","queueTime":0,"applicationTime":903,"atts":"GRtSR1hCRR4=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>

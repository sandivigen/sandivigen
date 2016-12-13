
<!DOCTYPE html>
<html lang="en">
<head>
                <meta name="robots" content="noodp,nodir,noydir">
        <meta name="keywords" content="Offshore outsourcing, Freelancers, India, Russia, Ukraine, php Programmers, Coders, Developers, Writers, Web Designers, Website Design, Technical Writers">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta charset="utf-8"><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"VQIBUF5RGwQBU1BUBgE="};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e,n){function r(t){try{c.console&&console.log(t)}catch(e){}}var o,i=t("ee"),a=t(15),c={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(c.console=!0,o.indexOf("dev")!==-1&&(c.dev=!0),o.indexOf("nr_dev")!==-1&&(c.nrDev=!0))}catch(s){}c.nrDev&&i.on("internal-error",function(t){r(t.stack)}),c.dev&&i.on("fn-err",function(t,e,n){r(n.stack)}),c.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(c,function(t,e){return t}).join(", ")))},{}],2:[function(t,e,n){function r(t,e,n,r,o){try{d?d-=1:i("err",[o||new UncaughtException(t,e,n)])}catch(c){try{i("ierr",[c,(new Date).getTime(),!0])}catch(s){}}return"function"==typeof f&&f.apply(this,a(arguments))}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function o(t){i("err",[t,(new Date).getTime()])}var i=t("handle"),a=t(16),c=t("ee"),s=t("loader"),f=window.onerror,u=!1,d=0;s.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(l){"stack"in l&&(t(8),t(7),"addEventListener"in window&&t(5),s.xhrWrappable&&t(9),u=!0)}c.on("fn-start",function(t,e,n){u&&(d+=1)}),c.on("fn-err",function(t,e,n){u&&(this.thrown=!0,o(n))}),c.on("fn-end",function(){u&&!this.thrown&&d>0&&(d-=1)}),c.on("internal-error",function(t){i("ierr",[t,(new Date).getTime(),!0])})},{}],3:[function(t,e,n){t("loader").features.ins=!0},{}],4:[function(t,e,n){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(8),c=t(7),s="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",l="resource",p="-start",h="-end",m="fn"+p,w="fn"+h,v="bstTimer",y="pushState";t("loader").features.stn=!0,t(6);var g=NREUM.o.EV;o.on(m,function(t,e){var n=t[0];n instanceof g&&(this.bstStart=Date.now())}),o.on(w,function(t,e){var n=t[0];n instanceof g&&i("bst",[n,e,this.bstStart,Date.now()])}),a.on(m,function(t,e,n){this.bstStart=Date.now(),this.bstType=n}),a.on(w,function(t,e){i(v,[e,this.bstStart,Date.now(),this.bstType])}),c.on(m,function(){this.bstStart=Date.now()}),c.on(w,function(t,e){i(v,[e,this.bstStart,Date.now(),"requestAnimationFrame"])}),o.on(y+p,function(t){this.time=Date.now(),this.startPath=location.pathname+location.hash}),o.on(y+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+s]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["c"+s]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["webkitC"+s]()},!1)),document[f]("scroll",r,!1),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],5:[function(t,e,n){function r(t){for(var e=t;e&&!e.hasOwnProperty(u);)e=Object.getPrototypeOf(e);e&&o(e)}function o(t){c.inPlace(t,[u,d],"-",i)}function i(t,e){return t[1]}var a=t("ee").get("events"),c=t(17)(a,!0),s=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";e.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,e){var n=t[1],r=s(n,"nr@wrapped",function(){function t(){if("function"==typeof n.handleEvent)return n.handleEvent.apply(n,arguments)}var e={object:t,"function":n}[typeof n];return e?c(e,"fn-",null,e.name||"anonymous"):n});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],6:[function(t,e,n){var r=t("ee").get("history"),o=t(17)(r);e.exports=r,o.inPlace(window.history,["pushState","replaceState"],"-")},{}],7:[function(t,e,n){var r=t("ee").get("raf"),o=t(17)(r),i="equestAnimationFrame";e.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],8:[function(t,e,n){function r(t,e,n){t[0]=a(t[0],"fn-",null,n)}function o(t,e,n){this.method=n,this.timerDuration="number"==typeof t[1]?t[1]:0,t[0]=a(t[0],"fn-",this,n)}var i=t("ee").get("timer"),a=t(17)(i),c="setTimeout",s="setInterval",f="clearTimeout",u="-start",d="-";e.exports=i,a.inPlace(window,[c,"setImmediate"],c+d),a.inPlace(window,[s],s+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(s+u,r),i.on(c+u,o)},{}],9:[function(t,e,n){function r(t,e){d.inPlace(e,["onreadystatechange"],"fn-",c)}function o(){var t=this,e=u.context(t);t.readyState>3&&!e.resolved&&(e.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,w,"fn-",c)}function i(t){v.push(t),h&&(g=-g,b.data=g)}function a(){for(var t=0;t<v.length;t++)r([],v[t]);v.length&&(v=[])}function c(t,e){return e}function s(t,e){for(var n in t)e[n]=t[n];return e}t(5);var f=t("ee"),u=f.get("xhr"),d=t(17)(u),l=NREUM.o,p=l.XHR,h=l.MO,m="readystatechange",w=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],v=[];e.exports=u;var y=window.XMLHttpRequest=function(t){var e=new p(t);try{u.emit("new-xhr",[e],e),e.addEventListener(m,o,!1)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}return e};if(s(p,y),y.prototype=p.prototype,d.inPlace(y.prototype,["open","send"],"-xhr-",c),u.on("send-xhr-start",function(t,e){r(t,e),i(e)}),u.on("open-xhr-start",r),h){var g=1,b=document.createTextNode(g);new h(a).observe(b,{characterData:!0})}else f.on("fn-end",function(t){t[0]&&t[0].type===m||a()})},{}],10:[function(t,e,n){function r(t){var e=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<d;r++)t.removeEventListener(u[r],this.listener,!1);if(!e.aborted){if(n.duration=(new Date).getTime()-this.startTime,4===t.readyState){e.status=t.status;var i=o(t,this.lastSize);if(i&&(n.rxSize=i),this.sameOrigin){var a=t.getResponseHeader("X-NewRelic-App-Data");a&&(e.cat=a.split(", ").pop())}}else e.status=0;n.cbTime=this.cbTime,f.emit("xhr-done",[t],t),c("xhr",[e,n,this.startTime])}}}function o(t,e){var n=t.responseType;if("json"===n&&null!==e)return e;var r="arraybuffer"===n||"blob"===n||"json"===n?t.response:t.responseText;return h(r)}function i(t,e){var n=s(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}var a=t("loader");if(a.xhrWrappable){var c=t("handle"),s=t(11),f=t("ee"),u=["load","error","abort","timeout"],d=u.length,l=t("id"),p=t(14),h=t(13),m=window.XMLHttpRequest;a.features.xhr=!0,t(9),f.on("new-xhr",function(t){var e=this;e.totalCbs=0,e.called=0,e.cbTime=0,e.end=r,e.ended=!1,e.xhrGuids={},e.lastSize=null,p&&(p>34||p<10)||window.opera||t.addEventListener("progress",function(t){e.lastSize=t.loaded},!1)}),f.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),f.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),f.on("send-xhr-start",function(t,e){var n=this.metrics,r=t[0],o=this;if(n&&r){var i=h(r);i&&(n.txSize=i)}this.startTime=(new Date).getTime(),this.listener=function(t){try{"abort"===t.type&&(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof e.onload))&&o.end(e)}catch(n){try{f.emit("internal-error",[n])}catch(r){}}};for(var a=0;a<d;a++)e.addEventListener(u[a],this.listener,!1)}),f.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),f.on("xhr-load-added",function(t,e){var n=""+l(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),f.on("xhr-load-removed",function(t,e){var n=""+l(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),f.on("addEventListener-end",function(t,e){e instanceof m&&"load"===t[0]&&f.emit("xhr-load-added",[t[1],t[2]],e)}),f.on("removeEventListener-end",function(t,e){e instanceof m&&"load"===t[0]&&f.emit("xhr-load-removed",[t[1],t[2]],e)}),f.on("fn-start",function(t,e,n){e instanceof m&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),f.on("fn-end",function(t,e){this.xhrCbStart&&f.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,e],e)})}},{}],11:[function(t,e,n){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!e.protocol||":"===e.protocol||e.protocol===n.protocol,a=e.hostname===document.domain&&e.port===n.port;return r.sameOrigin=i&&(!e.hostname||a),r}},{}],12:[function(t,e,n){function r(){}function o(t,e,n){return function(){return i(t,[(new Date).getTime()].concat(c(arguments)),e?null:this,n),e?void 0:this}}var i=t("handle"),a=t(15),c=t(16),s=t("ee").get("tracer"),f=NREUM;"undefined"==typeof window.newrelic&&(newrelic=f);var u=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit"],d="api-",l=d+"ixn-";a(u,function(t,e){f[e]=o(d+e,!0,"api")}),f.addPageAction=o(d+"addPageAction",!0),f.setCurrentRouteName=o(d+"routeName",!0),e.exports=newrelic,f.interaction=function(){return(new r).get()};var p=r.prototype={createTracer:function(t,e){var n={},r=this,o="function"==typeof e;return i(l+"tracer",[Date.now(),t,n],r),function(){if(s.emit((o?"":"no-")+"fn-start",[Date.now(),r,o],n),o)try{return e.apply(this,arguments)}finally{s.emit("fn-end",[Date.now()],n)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){p[e]=o(l+e)}),newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),i("err",[t,(new Date).getTime()])}},{}],13:[function(t,e,n){e.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(e){return}}}},{}],14:[function(t,e,n){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),e.exports=r},{}],15:[function(t,e,n){function r(t,e){var n=[],r="",i=0;for(r in t)o.call(t,r)&&(n[i]=e(r,t[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],16:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(o<0?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=r},{}],17:[function(t,e,n){function r(t){return!(t&&t instanceof Function&&t.apply&&!t[a])}var o=t("ee"),i=t(16),a="nr@original",c=Object.prototype.hasOwnProperty,s=!1;e.exports=function(t,e){function n(t,e,n,o){function nrWrapper(){var r,a,c,s;try{a=this,r=i(arguments),c="function"==typeof n?n(r,a):n||{}}catch(f){l([f,"",[r,a,o],c])}u(e+"start",[r,a,o],c);try{return s=t.apply(a,r)}catch(d){throw u(e+"err",[r,a,d],c),d}finally{u(e+"end",[r,a,s],c)}}return r(t)?t:(e||(e=""),nrWrapper[a]=t,d(t,nrWrapper),nrWrapper)}function f(t,e,o,i){o||(o="");var a,c,s,f="-"===o.charAt(0);for(s=0;s<e.length;s++)c=e[s],a=t[c],r(a)||(t[c]=n(a,f?c+o:o,i,c))}function u(n,r,o){if(!s||e){var i=s;s=!0;try{t.emit(n,r,o)}catch(a){l([a,n,r,o])}s=i}}function d(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){l([r])}for(var o in t)c.call(t,o)&&(e[o]=t[o]);return e}function l(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=o),n.inPlace=f,n.flag=a,n}},{}],ee:[function(t,e,n){function r(){}function o(t){function e(t){return t&&t instanceof r?t:t?s(t,c,i):i()}function n(n,r,o){if(!l.aborted){t&&t(n,r,o);for(var i=e(o),a=h(n),c=a.length,s=0;s<c;s++)a[s].apply(i,r);var f=u[y[n]];return f&&f.push([g,n,r,i]),i}}function p(t,e){v[t]=h(t).concat(e)}function h(t){return v[t]||[]}function m(t){return d[t]=d[t]||o(n)}function w(t,e){f(t,function(t,n){e=e||"feature",y[n]=e,e in u||(u[e]=[])})}var v={},y={},g={on:p,emit:n,get:m,listeners:h,context:e,buffer:w,abort:a,aborted:!1};return g}function i(){return new r}function a(){(u.api||u.feature)&&(l.aborted=!0,u=l.backlog={})}var c="nr@context",s=t("gos"),f=t(15),u={},d={},l=e.exports=o();l.backlog=u},{}],gos:[function(t,e,n){function r(t,e,n){if(o.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[e]=r,r}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){o.buffer([t],r),o.emit(t,e,n)}var o=t("ee").get("handle");e.exports=r,r.ee=o},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!b++){var t=g.info=NREUM.info,e=d.getElementsByTagName("script")[0];if(setTimeout(f.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&e))return f.abort();s(v,function(e,n){t[e]||(t[e]=n)}),c("mark",["onload",a()],null,"api");var n=d.createElement("script");n.src="https://"+t.agent,e.parentNode.insertBefore(n,e)}}function o(){"complete"===d.readyState&&i()}function i(){c("mark",["domContent",a()],null,"api")}function a(){return(new Date).getTime()}var c=t("handle"),s=t(15),f=t("ee"),u=window,d=u.document,l="addEventListener",p="attachEvent",h=u.XMLHttpRequest,m=h&&h.prototype;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:h,REQ:u.Request,EV:u.Event,PR:u.Promise,MO:u.MutationObserver},t(12);var w=""+location,v={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-998.min.js"},y=h&&m&&m[l]&&!/CriOS/.test(navigator.userAgent),g=e.exports={offset:a(),origin:w,features:{},xhrWrappable:y};d[l]?(d[l]("DOMContentLoaded",i,!1),u[l]("load",r,!1)):(d[p]("onreadystatechange",o),u[p]("onload",r)),c("mark",["firstbyte",a()],null,"api");var b=0},{}]},{},["loader",2,10,4,3]);</script>
    
    <meta name="Description" content="Hi,

Looking for someone to help me with the blog at blog.snaplytics.io - have a few problems with the template :)

ASAP is good...

/Thomas">

    <title>Wordpress - fine tuning - Web, Mobile &amp; Software Dev</title>

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
            
        <link rel="stylesheet" href="/job-details/css/cb12247.css?01b191f" />
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
        var phpVars = {"runtime_id":"c6201ca5-9aed-41d6-b952-f3fda01012cc","clientStatsDMetrics":true,"smfAjax":false,"pageSpeedMetrics":false,"pageId":"JobDetailsUser","psmetricsTrafficRate":1,"CsrfUserSiteToken":"6bb563cf97d0e099b5e884908dc5267f","activeProposalsRangeEnabled":true};
        var angularCache = [];
        var assetsVersion = "01b191f";
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
                dataLayer = [{"site":{"application":"JobDetails","version":"01b191f","environment":null},"user":{"visitor_id":"176.112.232.98.1464343673750567","recognized":true,"internal":false,"loggedIn":true,"user_id":"473108076898066432","primary-type":"freelancer"}}];
            </script>
        
                    <!-- Google Tag Manager -->
            <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-N7NC5B&amp;site.application=JobDetails&amp;site.version=01b191f&amp;site.environment=&amp;user.visitor_id=176.112.232.98.1464343673750567&amp;user.recognized=1&amp;user.internal=&amp;user.loggedIn=1&amp;user.user_id=473108076898066432&amp;user.primary-type=freelancer" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
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



    <alert type="info">
        You have already submitted a proposal<br />
            </alert>


        <div class="row">
    <div class="col-md-9">
        <h1 class="m-0-top" data-ng-non-bindable>
            Wordpress - fine tuning
        </h1>
    </div>
        <div class="col-md-3" ng-controller="JobDetailsFlaggingController">
        <a href="#" class="pull-right m-0-top" id="jsFlagJobLink"
           ng-show="!success"
           eo-popover-size="lg"
           eo-popover="/job-details/bundles/odeskjobdetails/partials/flagging-popover.html?v=01b191f"
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
                            <span class="label label-default m-md-right eoLabelTextColor">
                    <strong>Invite-Only</strong>
                </span>
                        
<small class="text-muted">
    Posted
    <span itemprop="datePosted"
          popover="December 13, 2016"
          popover-trigger="mouseenter"
          popover-placement="bottom">
        1 hour ago
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
                    Hi,<br />
<br />
Looking for someone to help me with the blog at blog.snaplytics.io - have a few problems with the template :)<br />
<br />
ASAP is good...<br />
<br />
/Thomas
            </p>


    
                <ul class="list-unstyled">
                <div id="form"><li>
        <strong class="m-sm-right">Project Stage:</strong> Fully Specified
    </li><input type="hidden" id="form__token" name="form[_token]" value="GqJcoSvXlMh4KXu5Pg7OpAQRjFrTlJVIv0mLuMryQK4" /></div>
        </ul>
            <script type="text/javascript">
        create_mark('mainContentRenderedEnd');
        create_measure('mainContentRendered', 'navigationStart', 'mainContentRenderedEnd');
    </script>
</div>



                                            <div class="air-card m-0-right">
                        <div class="row">
                                                        <div class="col-md-6">
                            <p class="m-md-bottom"><strong>Activity on this Job</strong></p>

            <p class="m-xs-bottom">
        <span class="text-muted">Proposals:</span>
        5 to 10<span class="glyphicon glyphicon-md vertical-align-middle air-icon-question-circle"
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
     data-ng-init="init('~01e3d6c66a80e887eb');
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
                    data-eo-popover="/job-details/bundles/odeskjobdetails/partials/bid-range-merch-popover.html?v=01b191f"
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
    <div data-ng-include="'/job-details/bundles/odeskjobdetails/partials/workhistory.html?v=01b191f'">
    </div>
</div>

                    </div>
                </div>
                
                                <div class="air-card-group">
                    <div class="air-card m-0-right">
                    <div ng-controller="JobDetailsOtherOpenJobsController" data-ng-cloak>
    <h2 class="m-0-top">Other open jobs by this client ({{ jobsCount }})</h2>
    <div data-ng-include="'/job-details/bundles/odeskjobdetails/partials/otherjobs.html?v=01b191f'"></div>
</div>                    </div>
                </div>
                
                                <div class="air-card-group">
                    <div class="air-card m-0-right">
                    <h2 class="m-0-top">Similar Jobs on Upwork</h2>
<div ng-controller="JobDetailsSimilarJobsController"
     ng-include="'/job-details/bundles/odeskjobdetails/partials/similarjobs.html?v=01b191f'">
</div>                    </div>
                </div>
                            </div>
            <div class="col-md-3">
                        <section id="jobsProviderAction"
             class="center-block text-center"
             ng-controller="JobsProviderActionController"
             ng-init="init({&quot;preventApply&quot;:false,&quot;messageType&quot;:&quot;&quot;,&quot;messageString&quot;:&quot;&quot;})">
        <h1 class="hidden">Job Details</h1>
                    <button class="btn btn-primary btn-block m-0-top m-md-bottom" disabled="disabled">Submit a Proposal</button>
            </section>

                <hr/>
                    <p class="m-md-bottom">
        <strong>About the Client </strong>
                    <span ng-if="true"
                  eo-popover="/job-details/bundles/odeskjobdetails/partials/verified.html?v=01b191f"
                  eo-popover-trigger="mouseenter"
                  eo-popover-placement="top"
                  eo-popover-close="false"
                  eo-popover-hoverable="true"
                  class="text-primary glyphicon air-icon-verified eoPaymentVerified pull-right"></span>
            </p>

    

            <div class="oJobsAboutBuyerCompany" data-ng-controller="JobDetailsClientNameController" data-ng-init="init('~01e3d6c66a80e887eb')" data-ng-show="clientName" data-ng-cloak>
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
                 ng-init="buyerScore = 5"
                 star-empty-color="#E0E0E0"
                 star-fill-color="#5BBC2E"
                 container-color="#F9F9F9"
                 rating-define="star"
                 ng-model="buyerScore">
            </span>
            (5.00) 4
            reviews
        </strong></p>
        <p class="m-md-bottom">
        <strong>Denmark</strong><br>
        <span class="text-muted">
            Copenhagen
            10:50 AM
        </span>
    </p>
<p class="m-md-bottom">
    <strong>
        25
        Jobs Posted
    </strong>
    <br />
    <span class="text-muted">
        57% Hire Rate,
        1 Open Job
    </span>
</p>
    <p class="m-md-bottom">
        <strong>
            $2,256
            Total Spent
        </strong><br>
        <span class="text-muted">
            14
            Hires,
            2
            Active
        </span>
    </p>
    <p class="m-md-bottom">
        <strong>
            $14.12<span class="text-muted normal">/hr</span>
            Avg Hourly Rate Paid
        </strong><br>
        <span class="text-muted">
            26
            Hours
        </span>
    </p>
<small class="text-muted">
    Member Since Jan 23, 2012
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
            

        <script src="/job-details/js/ccb59a6.js?01b191f"></script>
        <script>
        var odesk = odesk || {};
        odesk.isVisitor = false;
        (function(angular){
            var app = angular.module('jobDetails');
                            app.value('openingId', '209089937');
                app.value('openingCiphertext', '~01e3d6c66a80e887eb');
                app.value('openingUrl', '/jobs/Wordpress-fine-tuning_~01e3d6c66a80e887eb');
                app.value('openingTeamId', 'xirxpdbmvo6dkrlcqmfcma');
                app.value('hiredDevelopers', 0);
                app.value('closeReasons', [["","Please select ..."],["67","Accidental job posting creation",null],["51","All positions filled","API_REAS_ALL_POSITIONS_FILLED"],["49","Filled by alternate source",null],["34","No freelancer for requested skills",null],["41","Project was cancelled",null]]);
                app.value('closeJobUrl', '/jobs/close-job');
                app.value('flaggingReasons', [{"rid":9,"reasonString":"SPAM"},{"rid":10,"reasonString":"Contact information included"},{"rid":13,"reasonString":"Asking for free work"},{"rid":14,"reasonString":"Phishing\/fraud"},{"rid":22,"reasonString":"Job is in wrong category"},{"rid":44,"reasonString":"Advertising"},{"rid":11,"reasonString":"Client requesting to work outside of Upwork"}]);
                app.value('flaggingStates', {"14":"0","22":"0","13":"0","9":"0","11":"0","44":"0","10":"0"});
                app.value('connectsData', {"enabled":true,"currentSubscription":{"planId":1},"canSeeApplicantsRates":false,"showAvailableConnects":true,"isContextAdmin":true,"pricesDifferent":false,"connectsForApply":{"connects":58,"jobsPrice":2}});
                app.value('minRateToApply', 3);
                app.value('otherJobs', [{"type":2,"title":"Fantastic illustrations\/graphics for blog, SoMe, infographics and reports","ciphertext":"~01e8402374136252f9","access":1,"recno":208967540,"createdOn":null,"isPtcJob":false,"isPtcPrivate":false,"isStaffAugmentation":false}]);
                app.value('similarJobs', [{"ciphertext":"~019dde57049b58c863","title":"Wordpress + Shopify fine-tuning","snippet":"I have 2 projects going on. \n\n1 in Shopify AND 1 in Wordpress. \n\nSHOPIFY PROJECT: This is the most pressing. If freelancer works out on this, I will want to keep them on to help me with Wordpress site. I have GOT to launch this Shopify one in the next few days. I\u2019ve gotten pretty far on it but need an app installed and some fine tuning overall. \n\nWORDPRESS PROJECT: I am a designer and decided to finally learn Wordpress on a Portfolio site for a colleague of mine. He is a Cinematographer, so his site has lots of videos. It is very simple site but I want everything to be smart and function properly and cool. I got as far as I could go and now I need help from someone who knows what they are doing. ;-) \n\nThe theme I used is REVEAL from ThemeTrust. \nhttp:\/\/themetrust.com\/demos\/reveal\/\n\nThe overview of what I\u2019m going to be wanting is:\n\n\u2022 I've worked on it very hard so far, and it is almost done but I need some fine-tuning.\n\n\u2022 The first most annoying thing is that I've put up a landing page so I can keep working on the site and get it ready for launch. But, the site changed since putting up that landing page! I can't work on it like that... we need to update plugins, etc to find out what the heck happened...\n\n\u2022 the home \u2018page\u2019 needs to be finessed. I can\u2019t seem to be able to put in the fonts correctly. And a few other (little) things I'd like customized...\n\n\u2022 The Player is from Vimeo, so I will see how far I can go to get that to look right, then we\u2019ll need a little bit of customization on that also.\n\n\u2022 I have a Bio page and need some help just fine-tuning it.\n\n\u2022 contact page\u2026 need help with the format.\n\n\u2022 Menu isn't working correctly.\n\nI hope you could help me. Again, I am very organized and understand that if I'M efficient in communicating, then, you won't have to guess or waste your time doing things that we won't need. \n\nIf you would like to help me, I could send you a .pdf of what I am specifically wanting.\n\nThanks and hope to hear from you!"},{"ciphertext":"~01337c5d289a406702","title":"App fine tuning","snippet":"Finish the app sign in screen seamless flow (image attached). (NO STATIC FIELD PAGES)"},{"ciphertext":"~01e97eeb2850280a88","title":"fine tuning Google Analytics","snippet":"we wish to fine tune our Google Analytics so we can see our conversion rates better. After that we wish to improve our SEO but we need to get this done first in order to measure our progress. Please note that our website is in the Dutch language. It should not be a problem if you don't understand the language but it seems important to mention it. "},{"ciphertext":"~0147a4872b71571a79","title":"Fine Tune Conversion to DIVI","snippet":"Converting an old web site to modern version, using Word Press + Elegant Themes DIVI + Woo Commerce\n\n..... \nOld Site is at www.TurtleCreekCoffee.com\nTemp version, new site is at turtlecreekcoffee.com\/tempwordp\n\n..... \nI need someone to correct a number of glitches that are driving me nuts (I am NOT a web guy, I am a coffee roaster), start with a short phone call and giving me a rough estimate as to how much it will cost ...\u200b\n\nProgramming a web site for a coffee roaster ... already started ...\u200b\n\nGreat with Word Press .....\n\nGreat with Elegant Themes DIVI .....\n\nGreat with Woo Commerce"},{"ciphertext":"~01d0b2f2494cb3f95f","title":"Need a graphic designer to fine tune a graphic image for a tshirt","snippet":"I have an image that was created in the past. I just needed it uploaded and subheading corrected. The overall graphic I have will need the correct color numbers for my t-shirts. Thanks \n\u200b\n\nLaying out the graphic design on the front of the t-shirt image, applying correct color codes for the image which I will provide. Thank you \u200b\n\nGraphic designer. Quick turnaround time."}]);
                app.value('baseUri', '/jobs/');
                app.value('workHistory', [{"jobInfo":{"type":2,"title":"Fantastic illustrations\/graphics for blog, SoMe, infographics and reports","ciphertext":"~01e8402374136252f9","access":1,"recno":208967540},"startDate":"2016-11-01T00:00:00.000Z","endDate":null,"status":1,"contractorInfo":{"contractorName":"Joe Mariel Baring","ciphertext":"~0127aa7bef51d5e2bb","accessType":4},"totalHours":2.17,"feedback":null,"feedbackToClient":null,"totalCharge":8.13,"rate":{"currencyCode":"USD","amount":3.75},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Dedicated tech PR\/Content PRO for making a large splash (1-2 persons in total)","ciphertext":"~01123ff4f5ff3e6162","access":4,"recno":208293352},"startDate":"2016-10-01T00:00:00.000Z","endDate":null,"status":1,"contractorInfo":{"contractorName":"Kathy Cabrera","ciphertext":"~011153a8d394fd602b","accessType":1},"totalHours":0,"feedback":null,"feedbackToClient":null,"totalCharge":350,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":2,"title":"WooCommerce assistance (and WP modding)","ciphertext":"~01eeeb0269530567b9","access":1,"recno":208815896},"startDate":"2016-11-01T00:00:00.000Z","endDate":"2016-11-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Dmitry Alshin","ciphertext":"~010fa89b482ab16d70","accessType":4},"totalHours":5.17,"feedback":{"comment":"Dmitry is extremely good - was actually thinking of leaving a bad review to keep him available for future assignments. Decided not to, and he comes highly recommended.\r\n\r\nDefinitely going to use him again if possible.","score":5,"commentAccess":1},"feedbackToClient":{"comment":null,"score":5,"commentAccess":1},"totalCharge":25.84,"rate":{"currencyCode":"USD","amount":5},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Build file for profile link, profile picture, profile text and 10 last check-ins for list of potential usernames (+ script)","ciphertext":"~01bb2ca0ea59e2853a","access":4,"recno":207500041},"startDate":"2016-04-01T00:00:00.000Z","endDate":"2016-08-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Jacek Aleksander Gruca","ciphertext":"~012270ffd02827ee4a","accessType":4},"totalHours":0,"feedback":{"comment":"Jacek comes highly recommended from here - do problem solving like a champ and delivers on time in quality. Will hire again.","score":5,"commentAccess":1},"feedbackToClient":{"comment":"It was great to work for this customer! Looking forward to our next encounter.","score":5,"commentAccess":1},"totalCharge":250,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":2,"title":"Move wordpress site from UnoEuro to WPEngine without loss of search results","ciphertext":"~013a394825a47e02d2","access":1,"recno":207799060},"startDate":"2016-06-01T00:00:00.000Z","endDate":"2016-06-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Banna H.","ciphertext":"~01a08f97c568c6fee0","accessType":4},"totalHours":11,"feedback":{"comment":null,"score":5,"commentAccess":1},"feedbackToClient":{"comment":null,"score":5,"commentAccess":1},"totalCharge":178.5,"rate":{"currencyCode":"USD","amount":17},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"PowerPoint VBA string to pick a random name from the hat based on a text list of names","ciphertext":"~0126f3f715ae649ccf","access":4,"recno":205998498},"startDate":"2015-09-01T00:00:00.000Z","endDate":"2015-09-01T00:00:00.000Z","status":3,"contractorInfo":{"contractorName":"Yuri Usanov","ciphertext":"~013373ac1fb469876d","accessType":4},"totalHours":0,"feedback":{"comment":"Would definitely hire him again for any VBA jobs.","score":5,"commentAccess":1},"feedbackToClient":{"comment":"It was pleasure working with Thomas! He provided clear instructions and we quickly finished the project.","score":5,"commentAccess":1},"totalCharge":20,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":false,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":2,"title":"Graphic design - InDesign, Photoshop (+frontend developer)","ciphertext":null,"access":null,"recno":51249669},"startDate":"2014-01-09T00:00:00.000Z","endDate":"2014-01-10T00:00:00.000Z","status":null,"contractorInfo":{"contractorName":"Svetoslav Bosakov","ciphertext":null,"accessType":null},"totalHours":1,"feedback":{"comment":"Very good work :)","score":5,"commentAccess":1},"feedbackToClient":{"comment":null,"score":0,"commentAccess":1},"totalCharge":84,"rate":{"currencyCode":"USD","amount":12},"isEDCReplicated":true,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Voice for video (3 actually)","ciphertext":null,"access":null,"recno":50019777},"startDate":"2013-12-04T00:00:00.000Z","endDate":"2013-12-09T00:00:00.000Z","status":null,"contractorInfo":{"contractorName":"Melissa M.","ciphertext":null,"accessType":null},"totalHours":0,"feedback":{"comment":"Great voice and very professional to work with.\n\nDefinitely going to use her again :-)","score":5,"commentAccess":1},"feedbackToClient":{"comment":null,"score":0,"commentAccess":1},"totalCharge":65.75,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":true,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"Graphic Designer Web","ciphertext":null,"access":null,"recno":49491512},"startDate":"2013-11-25T00:00:00.000Z","endDate":"2013-12-09T00:00:00.000Z","status":null,"contractorInfo":{"contractorName":"MTT Design","ciphertext":null,"accessType":null},"totalHours":0,"feedback":{"comment":"Great work - def. recommendable.","score":5,"commentAccess":1},"feedbackToClient":{"comment":null,"score":0,"commentAccess":1},"totalCharge":150,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":true,"isPtcJob":false,"isPtcPrivate":false},{"jobInfo":{"type":1,"title":"VBA Programmning","ciphertext":null,"access":null,"recno":28242722},"startDate":"2012-02-01T00:00:00.000Z","endDate":"2012-02-01T00:00:00.000Z","status":null,"contractorInfo":{"contractorName":"Amit K.","ciphertext":null,"accessType":null},"totalHours":0,"feedback":{"comment":"Great ability to do VBA coding\n","score":2.55,"commentAccess":1},"feedbackToClient":{"comment":null,"score":0,"commentAccess":1},"totalCharge":800,"rate":{"currencyCode":"USD","amount":0},"isEDCReplicated":true,"isPtcJob":false,"isPtcPrivate":false}]);
                app.value('openingUid', '808592987700203520');
                app.value('totalApplicants', '7');
                    })(angular);
    </script>

<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"8e23a381b9","applicationID":"7171610","transactionName":"NVxRMRBYVhBXUhBQDAwWcgYWUFcNGV4AXBAJZlkKAGZcBkJQDVUQPVNcBw==","queueTime":0,"applicationTime":1772,"atts":"GRtSR1hCRR4=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>

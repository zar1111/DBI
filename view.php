<!DOCTYPE html>

<html  dir="ltr" lang="en" xml:lang="en">
<head>
    <title>COMP1041-1-UNNC-SPC-1920: 1) Hosting a PHP page</title>
    <link rel="shortcut icon" href="https://moodle.nottingham.ac.uk/theme/image.php/nottingham_science/theme/1581530212/favicon" />
    <meta content="index, nofollow" name="robots"/>
<meta content="noarchive" name="googlebot"/><meta name="pagetitle" content="Databases and Interfaces (COMP1041 UNNC) (SPC1 19-20)"/>
<meta name="pagetype" content="resource"/>
<meta name="path" content="209/215/799"/>
<meta name="spath" content="UNNC/Faculty+of+Science+and+Engineering/School+of+Computer+Science"/><meta name="modulecode" content="COMP1041"/>
<meta name="session" content="1920"/>
<meta name="country" content="u" /><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={licenseKey:"85d36fdef0",applicationID:"3213358"};window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var i=n[t]={exports:{}};e[t][0].call(i.exports,function(n){var i=e[t][1][n];return r(i||n)},i,i.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<t.length;i++)r(t[i]);return r}({1:[function(e,n,t){function r(){}function i(e,n,t){return function(){return o(e,[u.now()].concat(f(arguments)),n?null:this,t),n?void 0:this}}var o=e("handle"),a=e(4),f=e(5),c=e("ee").get("tracer"),u=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",d=l+"ixn-";a(p,function(e,n){s[n]=i(l+n,!0,"api")}),s.addPageAction=i(l+"addPageAction",!0),s.setCurrentRouteName=i(l+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,i="function"==typeof n;return o(d+"tracer",[u.now(),e,t],r),function(){if(c.emit((i?"":"no-")+"fn-start",[u.now(),r,i],t),i)try{return n.apply(this,arguments)}catch(e){throw c.emit("fn-err",[arguments,this,e],t),e}finally{c.emit("fn-end",[u.now()],t)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=i(d+n)}),newrelic.noticeError=function(e,n){"string"==typeof e&&(e=new Error(e)),o("err",[e,u.now(),!1,n])}},{}],2:[function(e,n,t){function r(e,n){var t=e.getEntries();t.forEach(function(e){"first-paint"===e.name?c("timing",["fp",Math.floor(e.startTime)]):"first-contentful-paint"===e.name&&c("timing",["fcp",Math.floor(e.startTime)])})}function i(e,n){var t=e.getEntries();t.length>0&&c("lcp",[t[t.length-1]])}function o(e){if(e instanceof s&&!l){var n,t=Math.round(e.timeStamp);n=t>1e12?Date.now()-t:u.now()-t,l=!0,c("timing",["fi",t,{type:e.type,fid:n}])}}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var a,f,c=e("handle"),u=e("loader"),s=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){a=new PerformanceObserver(r),f=new PerformanceObserver(i);try{a.observe({entryTypes:["paint"]}),f.observe({entryTypes:["largest-contentful-paint"]})}catch(p){}}if("addEventListener"in document){var l=!1,d=["click","keydown","mousedown","pointerdown","touchstart"];d.forEach(function(e){document.addEventListener(e,o,!1)})}}},{}],3:[function(e,n,t){function r(e,n){if(!i)return!1;if(e!==i)return!1;if(!n)return!0;if(!o)return!1;for(var t=o.split("."),r=n.split("."),a=0;a<r.length;a++)if(r[a]!==t[a])return!1;return!0}var i=null,o=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var f=navigator.userAgent,c=f.match(a);c&&f.indexOf("Chrome")===-1&&f.indexOf("Chromium")===-1&&(i="Safari",o=c[1])}n.exports={agent:i,version:o,match:r}},{}],4:[function(e,n,t){function r(e,n){var t=[],r="",o=0;for(r in e)i.call(e,r)&&(t[o]=n(r,e[r]),o+=1);return t}var i=Object.prototype.hasOwnProperty;n.exports=r},{}],5:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,i=t-n||0,o=Array(i<0?0:i);++r<i;)o[r]=e[n+r];return o}n.exports=r},{}],6:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function i(e){function n(e){return e&&e instanceof r?e:e?c(e,f,o):o()}function t(t,r,i,o){if(!l.aborted||o){e&&e(t,r,i);for(var a=n(i),f=v(t),c=f.length,u=0;u<c;u++)f[u].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function d(e,n){h[e]=v(e).concat(n)}function m(e,n){var t=h[e];if(t)for(var r=0;r<t.length;r++)t[r]===n&&t.splice(r,1)}function v(e){return h[e]||[]}function g(e){return p[e]=p[e]||i(t)}function w(e,n){u(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var h={},y={},b={on:d,addEventListener:d,removeEventListener:m,emit:t,get:g,listeners:v,context:n,buffer:w,abort:a,aborted:!1};return b}function o(){return new r}function a(){(s.api||s.feature)&&(l.aborted=!0,s=l.backlog={})}var f="nr@context",c=e("gos"),u=e(4),s={},p={},l=n.exports=i();l.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(i.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return e[n]=r,r}var i=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){i.buffer([e],r),i.emit(e,n,t)}var i=e("ee").get("handle");n.exports=r,r.ee=i},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,o,function(){return i++})}var i=1,o="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!x++){var e=E.info=NREUM.info,n=d.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();u(y,function(n,t){e[n]||(e[n]=t)}),c("mark",["onload",a()+E.offset],null,"api");var t=d.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function i(){"complete"===d.readyState&&o()}function o(){c("mark",["domContent",a()+E.offset],null,"api")}function a(){return O.exists&&performance.now?Math.round(performance.now()):(f=Math.max((new Date).getTime(),f))-E.offset}var f=(new Date).getTime(),c=e("handle"),u=e(4),s=e("ee"),p=e(3),l=window,d=l.document,m="addEventListener",v="attachEvent",g=l.XMLHttpRequest,w=g&&g.prototype;NREUM.o={ST:setTimeout,SI:l.setImmediate,CT:clearTimeout,XHR:g,REQ:l.Request,EV:l.Event,PR:l.Promise,MO:l.MutationObserver};var h=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1167.min.js"},b=g&&w&&w[m]&&!/CriOS/.test(navigator.userAgent),E=n.exports={offset:f,now:a,origin:h,features:{},xhrWrappable:b,userAgent:p};e(1),e(2),d[m]?(d[m]("DOMContentLoaded",o,!1),l[m]("load",r,!1)):(d[v]("onreadystatechange",i),l[v]("onload",r)),c("mark",["firstbyte",f],null,"api");var x=0,O=e(6)},{}],"wrap-function":[function(e,n,t){function r(e){return!(e&&e instanceof Function&&e.apply&&!e[a])}var i=e("ee"),o=e(5),a="nr@original",f=Object.prototype.hasOwnProperty,c=!1;n.exports=function(e,n){function t(e,n,t,i){function nrWrapper(){var r,a,f,c;try{a=this,r=o(arguments),f="function"==typeof t?t(r,a):t||{}}catch(u){l([u,"",[r,a,i],f])}s(n+"start",[r,a,i],f);try{return c=e.apply(a,r)}catch(p){throw s(n+"err",[r,a,p],f),p}finally{s(n+"end",[r,a,c],f)}}return r(e)?e:(n||(n=""),nrWrapper[a]=e,p(e,nrWrapper),nrWrapper)}function u(e,n,i,o){i||(i="");var a,f,c,u="-"===i.charAt(0);for(c=0;c<n.length;c++)f=n[c],a=e[f],r(a)||(e[f]=t(a,u?f+i:i,o,f))}function s(t,r,i){if(!c||n){var o=c;c=!0;try{e.emit(t,r,i,n)}catch(a){l([a,t,r,i])}c=o}}function p(e,n){if(Object.defineProperty&&Object.keys)try{var t=Object.keys(e);return t.forEach(function(t){Object.defineProperty(n,t,{get:function(){return e[t]},set:function(n){return e[t]=n,n}})}),n}catch(r){l([r])}for(var i in e)f.call(e,i)&&(n[i]=e[i]);return n}function l(n){try{e.emit("internal-error",n)}catch(t){}}return e||(e=i),t.inPlace=u,t.flag=a,t}},{}]},{},["loader"]);</script>
<meta name="keywords" content="moodle, COMP1041-1-UNNC-SPC-1920: 1) Hosting a PHP page" />
<link rel="stylesheet" type="text/css" href="https://moodle.nottingham.ac.uk/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.css" /><script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script><link rel="stylesheet" type="text/css" href="https://moodle.nottingham.ac.uk/theme/styles.php/nottingham_science/1581530212_1563982344/all" />
<script type="text/javascript">
//<![CDATA[
var M = {}; M.yui = {};
M.pageloadstarttime = new Date();
M.cfg = {"wwwroot":"https:\/\/moodle.nottingham.ac.uk","sesskey":"6o0f8KrYpd","themerev":"1581530212","slasharguments":1,"theme":"nottingham_science","iconsystemmodule":"core\/icon_system_fontawesome","jsrev":"1581530212","admin":"admin","svgicons":true,"usertimezone":"Asia\/Shanghai","contextid":6224842};var yui1ConfigFn = function(me) {if(/-skin|reset|fonts|grids|base/.test(me.name)){me.type='css';me.path=me.path.replace(/\.js/,'.css');me.path=me.path.replace(/\/yui2-skin/,'/assets/skins/sam/yui2-skin')}};
var yui2ConfigFn = function(me) {var parts=me.name.replace(/^moodle-/,'').split('-'),component=parts.shift(),module=parts[0],min='-min';if(/-(skin|core)$/.test(me.name)){parts.pop();me.type='css';min=''}
if(module){var filename=parts.join('-');me.path=component+'/'+module+'/'+filename+min+'.'+me.type}else{me.path=component+'/'+component+'.'+me.type}};
YUI_config = {"debug":false,"base":"https:\/\/moodle.nottingham.ac.uk\/lib\/yuilib\/3.17.2\/","comboBase":"https:\/\/moodle.nottingham.ac.uk\/theme\/yui_combo.php?","combine":true,"filter":null,"insertBefore":"firstthemesheet","groups":{"yui2":{"base":"https:\/\/moodle.nottingham.ac.uk\/lib\/yuilib\/2in3\/2.9.0\/build\/","comboBase":"https:\/\/moodle.nottingham.ac.uk\/theme\/yui_combo.php?","combine":true,"ext":false,"root":"2in3\/2.9.0\/build\/","patterns":{"yui2-":{"group":"yui2","configFn":yui1ConfigFn}}},"moodle":{"name":"moodle","base":"https:\/\/moodle.nottingham.ac.uk\/theme\/yui_combo.php?m\/1581530212\/","combine":true,"comboBase":"https:\/\/moodle.nottingham.ac.uk\/theme\/yui_combo.php?","ext":false,"root":"m\/1581530212\/","patterns":{"moodle-":{"group":"moodle","configFn":yui2ConfigFn}},"filter":null,"modules":{"moodle-core-languninstallconfirm":{"requires":["base","node","moodle-core-notification-confirm","moodle-core-notification-alert"]},"moodle-core-maintenancemodetimer":{"requires":["base","node"]},"moodle-core-actionmenu":{"requires":["base","event","node-event-simulate"]},"moodle-core-dock":{"requires":["base","node","event-custom","event-mouseenter","event-resize","escape","moodle-core-dock-loader","moodle-core-event"]},"moodle-core-dock-loader":{"requires":["escape"]},"moodle-core-handlebars":{"condition":{"trigger":"handlebars","when":"after"}},"moodle-core-blocks":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification"]},"moodle-core-event":{"requires":["event-custom"]},"moodle-core-lockscroll":{"requires":["plugin","base-build"]},"moodle-core-popuphelp":{"requires":["moodle-core-tooltip"]},"moodle-core-checknet":{"requires":["base-base","moodle-core-notification-alert","io-base"]},"moodle-core-chooserdialogue":{"requires":["base","panel","moodle-core-notification"]},"moodle-core-dragdrop":{"requires":["base","node","io","dom","dd","event-key","event-focus","moodle-core-notification"]},"moodle-core-tooltip":{"requires":["base","node","io-base","moodle-core-notification-dialogue","json-parse","widget-position","widget-position-align","event-outside","cache-base"]},"moodle-core-formchangechecker":{"requires":["base","event-focus","moodle-core-event"]},"moodle-core-notification":{"requires":["moodle-core-notification-dialogue","moodle-core-notification-alert","moodle-core-notification-confirm","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-core-notification-dialogue":{"requires":["base","node","panel","escape","event-key","dd-plugin","moodle-core-widget-focusafterclose","moodle-core-lockscroll"]},"moodle-core-notification-alert":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-confirm":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-exception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-ajaxexception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core_availability-form":{"requires":["base","node","event","event-delegate","panel","moodle-core-notification-dialogue","json"]},"moodle-backup-backupselectall":{"requires":["node","event","node-event-simulate","anim"]},"moodle-backup-confirmcancel":{"requires":["node","node-event-simulate","moodle-core-notification-confirm"]},"moodle-course-util":{"requires":["node"],"use":["moodle-course-util-base"],"submodules":{"moodle-course-util-base":{},"moodle-course-util-section":{"requires":["node","moodle-course-util-base"]},"moodle-course-util-cm":{"requires":["node","moodle-course-util-base"]}}},"moodle-course-modchooser":{"requires":["moodle-core-chooserdialogue","moodle-course-coursebase"]},"moodle-course-formatchooser":{"requires":["base","node","node-event-simulate"]},"moodle-course-categoryexpander":{"requires":["node","event-key"]},"moodle-course-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-course-coursebase","moodle-course-util"]},"moodle-course-management":{"requires":["base","node","io-base","moodle-core-notification-exception","json-parse","dd-constrain","dd-proxy","dd-drop","dd-delegate","node-event-delegate"]},"moodle-form-dateselector":{"requires":["base","node","overlay","calendar"]},"moodle-form-passwordunmask":{"requires":[]},"moodle-form-shortforms":{"requires":["node","base","selector-css3","moodle-core-event"]},"moodle-form-showadvanced":{"requires":["node","base","selector-css3"]},"moodle-question-searchform":{"requires":["base","node"]},"moodle-question-chooser":{"requires":["moodle-core-chooserdialogue"]},"moodle-question-preview":{"requires":["base","dom","event-delegate","event-key","core_question_engine"]},"moodle-question-qbankmanager":{"requires":["node","selector-css3"]},"moodle-availability_completion-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_date-form":{"requires":["base","node","event","io","moodle-core_availability-form"]},"moodle-availability_grade-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_group-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_grouping-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_profile-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-mod_aspirelists-inline_display":{"requires":["base","node","event","event-delegate"]},"moodle-mod_assign-history":{"requires":["node","transition"]},"moodle-mod_attendance-groupfilter":{"requires":["base","node"]},"moodle-mod_forum-subscriptiontoggle":{"requires":["base-base","io-base"]},"moodle-mod_quiz-quizbase":{"requires":["base","node"]},"moodle-mod_quiz-util":{"requires":["node","moodle-core-actionmenu"],"use":["moodle-mod_quiz-util-base"],"submodules":{"moodle-mod_quiz-util-base":{},"moodle-mod_quiz-util-slot":{"requires":["node","moodle-mod_quiz-util-base"]},"moodle-mod_quiz-util-page":{"requires":["node","moodle-mod_quiz-util-base"]}}},"moodle-mod_quiz-autosave":{"requires":["base","node","event","event-valuechange","node-event-delegate","io-form"]},"moodle-mod_quiz-questionchooser":{"requires":["moodle-core-chooserdialogue","moodle-mod_quiz-util","querystring-parse"]},"moodle-mod_quiz-toolboxes":{"requires":["base","node","event","event-key","io","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-slot","moodle-core-notification-ajaxexception"]},"moodle-mod_quiz-modform":{"requires":["base","node","event"]},"moodle-mod_quiz-repaginate":{"requires":["base","event","node","io","moodle-core-notification-dialogue"]},"moodle-mod_quiz-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-base","moodle-mod_quiz-util-page","moodle-mod_quiz-util-slot","moodle-course-util"]},"moodle-message_airnotifier-toolboxes":{"requires":["base","node","io"]},"moodle-filter_glossary-autolinker":{"requires":["base","node","io-base","json-parse","event-delegate","overlay","moodle-core-event","moodle-core-notification-alert","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-filter_mathjaxloader-loader":{"requires":["moodle-core-event"]},"moodle-editor_atto-rangy":{"requires":[]},"moodle-editor_atto-editor":{"requires":["node","transition","io","overlay","escape","event","event-simulate","event-custom","node-event-html5","node-event-simulate","yui-throttle","moodle-core-notification-dialogue","moodle-core-notification-confirm","moodle-editor_atto-rangy","handlebars","timers","querystring-stringify"]},"moodle-editor_atto-plugin":{"requires":["node","base","escape","event","event-outside","handlebars","event-custom","timers","moodle-editor_atto-menu"]},"moodle-editor_atto-menu":{"requires":["moodle-core-notification-dialogue","node","event","event-custom"]},"moodle-editor_ousupsub-rangy":{"requires":[]},"moodle-editor_ousupsub-editor":{"requires":["base","node","event","event-custom","moodle-editor_ousupsub-rangy"]},"moodle-report_eventlist-eventfilter":{"requires":["base","event","node","node-event-delegate","datatable","autocomplete","autocomplete-filters"]},"moodle-report_loglive-fetchlogs":{"requires":["base","event","node","io","node-event-delegate"]},"moodle-gradereport_grader-gradereporttable":{"requires":["base","node","event","handlebars","overlay","event-hover"]},"moodle-gradereport_history-userselector":{"requires":["escape","event-delegate","event-key","handlebars","io-base","json-parse","moodle-core-notification-dialogue"]},"moodle-tool_capability-search":{"requires":["base","node"]},"moodle-tool_lp-dragdrop-reorder":{"requires":["moodle-core-dragdrop"]},"moodle-tool_monitor-dropdown":{"requires":["base","event","node"]},"moodle-assignfeedback_editpdf-editor":{"requires":["base","event","node","io","graphics","json","event-move","event-resize","transition","querystring-stringify-simple","moodle-core-notification-dialog","moodle-core-notification-alert","moodle-core-notification-warning","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-atto_accessibilitychecker-button":{"requires":["color-base","moodle-editor_atto-plugin"]},"moodle-atto_accessibilityhelper-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_align-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_bold-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_charmap-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_clear-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_collapse-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emoticon-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_equation-button":{"requires":["moodle-editor_atto-plugin","moodle-core-event","io","event-valuechange","tabview","array-extras"]},"moodle-atto_fullscreen-button":{"requires":["event-resize","moodle-editor_atto-plugin"]},"moodle-atto_html-button":{"requires":["promise","moodle-editor_atto-plugin","moodle-atto_html-beautify","moodle-atto_html-codemirror","event-valuechange"]},"moodle-atto_html-codemirror":{"requires":["moodle-atto_html-codemirror-skin"]},"moodle-atto_html-beautify":{},"moodle-atto_image-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_indent-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_italic-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_kalturamedia-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_link-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-usedfiles":{"requires":["node","escape"]},"moodle-atto_media-button":{"requires":["moodle-editor_atto-plugin","moodle-form-shortforms"]},"moodle-atto_noautolink-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_orderedlist-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_recordrtc-button":{"requires":["moodle-editor_atto-plugin","moodle-atto_recordrtc-recording"]},"moodle-atto_recordrtc-recording":{"requires":["moodle-atto_recordrtc-button"]},"moodle-atto_rtl-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_strike-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_subscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_superscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_table-button":{"requires":["moodle-editor_atto-plugin","moodle-editor_atto-menu","event","event-valuechange"]},"moodle-atto_title-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_underline-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_undo-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_unorderedlist-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-local_kaltura-ltipanel":{"requires":["base","node","panel","node-event-simulate"]},"moodle-local_kaltura-ltitinymcepanel":{"requires":["base","node","panel","node-event-simulate"]},"moodle-local_kaltura-ltiservice":{"requires":["base","node","node-event-simulate"]},"moodle-local_kaltura-lticontainer":{"requires":["base","node"]}}},"gallery":{"name":"gallery","base":"https:\/\/moodle.nottingham.ac.uk\/lib\/yuilib\/gallery\/","combine":true,"comboBase":"https:\/\/moodle.nottingham.ac.uk\/theme\/yui_combo.php?","ext":false,"root":"gallery\/1581530212\/","patterns":{"gallery-":{"group":"gallery"}}}},"modules":{"core_filepicker":{"name":"core_filepicker","fullpath":"https:\/\/moodle.nottingham.ac.uk\/lib\/javascript.php\/1581530212\/repository\/filepicker.js","requires":["base","node","node-event-simulate","json","async-queue","io-base","io-upload-iframe","io-form","yui2-treeview","panel","cookie","datatable","datatable-sort","resize-plugin","dd-plugin","escape","moodle-core_filepicker","moodle-core-notification-dialogue"]},"core_comment":{"name":"core_comment","fullpath":"https:\/\/moodle.nottingham.ac.uk\/lib\/javascript.php\/1581530212\/comment\/comment.js","requires":["base","io-base","node","json","yui2-animation","overlay","escape"]},"mathjax":{"name":"mathjax","fullpath":"https:\/\/cdnjs.cloudflare.com\/ajax\/libs\/mathjax\/2.7.2\/MathJax.js?delayStartupUntil=configured"}}};
M.yui.loader = {modules: {}};

//]]>
</script>

<style type="text/css">
<!--
.style1 {
color: #FFFFFF
}

#browser_check { 
display: none;
}
-->
 </style>

<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["setDomains", ["*.moodle.nottingham.ac.uk"]]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//catalyst-analytics.eu/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '25']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//catalyst-analytics.eu/piwik.php?idsite=25" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body  id="page-mod-resource-view" class="format-topics  path-mod path-mod-resource chrome dir-ltr lang-en yui-skin-sam yui3-skin-sam moodle-nottingham-ac-uk pagelayout-incourse course-61579 context-6224842 cmid-4108555 category-799 category-215 category-209 ">

<div id="page-wrapper">

    <div>
    <a class="sr-only sr-only-focusable" href="#maincontent">Skip to main content</a>
</div><script type="text/javascript" src="https://moodle.nottingham.ac.uk/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.js"></script><script type="text/javascript" src="https://moodle.nottingham.ac.uk/lib/javascript.php/1581530212/lib/javascript-static.js"></script>
<script type="text/javascript">
//<![CDATA[
document.body.className += ' jsenabled';
//]]>
</script>


 <div id="browser_check">
<table width="100%" border="0" cellspacing="0" cellpadding="3" height="250">
  <tr>
    <td bgcolor="#ff0000">
    <div align="center"><strong><span class="style1">Your current browser is incompatible with this new version of Moodle. <a href="http://workspace.nottingham.ac.uk/x/05hwC" target="_blank">More Information</a></span></strong>
    </div></td>
  </tr>
</table>

</div>

    <nav class="pos-f-t fixed-top navbar navbar-light bg-white navbar-expand moodle-has-zindex" aria-label="Site navigation">
        <div class="container-fluid navbar-nottingham">
            <a href="https://moodle.nottingham.ac.uk" class="navbar-brand">
                <span class="site-name">moodle.Nottingham</span>
            </a>
    
            <ul class="nav-right">
                <!-- search_box -->
                <li>
                    <span class="hidden-md-down">
                      
                    </span>
                </li>
    
                    <!-- navbar_plugin_output -->
                <li>
                    <div class="pull-right popover-region collapsed">
    <a id="message-drawer-toggle-5e7574c1ba9655e7574c1b8ee22" class="nav-link d-inline-block popover-region-toggle position-relative" href="#"
            role="button">
        <i class="icon fa fa-comment fa-fw "  title="Toggle messaging drawer" aria-label="Toggle messaging drawer"></i>
        <div class="count-container " data-region="count-container"
        aria-label="There are 1 unread conversations">1</div>
    </a>
</div><div class="popover-region collapsed popover-region-notifications"
    id="nav-notification-popover-container" data-userid="211905"
    data-region="popover-region">
    <div class="popover-region-toggle nav-link"
        data-region="popover-region-toggle"
        role="button"
        aria-controls="popover-region-container-5e7574c1bc6bf5e7574c1b8ee23"
        aria-haspopup="true"
        aria-label="Show notification window with no new notifications"
        tabindex="0">
                <i class="icon fa fa-bell fa-fw "  title="Toggle notifications menu" aria-label="Toggle notifications menu"></i>
        <div class="count-container " data-region="count-container"
        aria-label="There are 2 unread notifications">2</div>

    </div>
    <div 
        id="popover-region-container-5e7574c1bc6bf5e7574c1b8ee23"
        class="popover-region-container"
        data-region="popover-region-container"
        aria-expanded="false"
        aria-hidden="true"
        aria-label="Notification window"
        role="region">
        <div class="popover-region-header-container">
            <h3 class="popover-region-header-text" data-region="popover-region-header-text">Notifications</h3>
            <div class="popover-region-header-actions" data-region="popover-region-header-actions">        <a class="mark-all-read-button"
           href="#"
           title="Mark all as read"
           data-action="mark-all-read"
           role="button">
            <span class="normal-icon"><i class="icon fa fa-check fa-fw "  title="Mark all as read" aria-label="Mark all as read"></i></span>
            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
        </a>
        <a href="https://moodle.nottingham.ac.uk/message/notificationpreferences.php?userid=211905"
           title="Notification preferences">
            <i class="icon fa fa-cog fa-fw "  title="Notification preferences" aria-label="Notification preferences"></i>
        </a>
</div>
        </div>
        <div class="popover-region-content-container" data-region="popover-region-content-container">
            <div class="popover-region-content" data-region="popover-region-content">
                        <div class="all-notifications"
            data-region="all-notifications"
            role="log"
            aria-busy="false"
            aria-atomic="false"
            aria-relevant="additions"></div>
        <div class="empty-message" tabindex="0" data-region="empty-message">You have no notifications</div>

            </div>
            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
        </div>
                <a class="see-all-link"
                    href="https://moodle.nottingham.ac.uk/message/output/popup/notifications.php">
                    <div class="popover-region-footer-container">
                        <div class="popover-region-seeall-text">See all</div>
                    </div>
                </a>
    </div>
</div>
                </li>
    
                <!-- user_menu -->
                <li>
                    <div class="usermenu"><div class="action-menu moodle-actionmenu nowrap-items d-inline" id="action-menu-1" data-enhance="moodle-core-actionmenu">

        <div class="menubar d-flex " id="action-menu-1-menubar" role="menubar">

            


                <div class="action-menu-trigger">
                    <div class="dropdown">
                        <a href="#" tabindex="0" class=" dropdown-toggle icon-no-margin" id="dropdown-1" aria-label="User menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" aria-controls="action-menu-1-menu">
                            
                            <span class="userbutton"><span class="usertext mr-1">Angran ZHOU</span><span class="avatars"><span class="avatar current"><img src="https://moodle.nottingham.ac.uk/theme/image.php/nottingham_science/core/1581530212/u/f2" class="userpicture defaultuserpic" width="35" height="35" role="presentation" aria-hidden="true" /></span></span></span>
                                
                            <b class="caret"></b>
                        </a>
                            <div class="dropdown-menu dropdown-menu-right menu  align-tr-br" id="action-menu-1-menu" data-rel="menu-content" aria-labelledby="action-menu-toggle-1" role="menu" data-align="tr-br" id="dropdown-menu-1">
                                        <a href="https://moodle.nottingham.ac.uk/my/" class="dropdown-item menu-action" role="menuitem" data-title="mymoodle,admin" aria-labelledby="actionmenuaction-1">
                                                <i class="icon fa fa-tachometer fa-fw " aria-hidden="true"  ></i>
                                            <span class="menu-action-text" id="actionmenuaction-1">
                                                Dashboard
                                            </span>
                                        </a>
                                        <div class="dropdown-divider" role="presentation"><span class="filler">&nbsp;</span></div>
                                        <a href="https://moodle.nottingham.ac.uk/user/profile.php?id=211905" class="dropdown-item menu-action" role="menuitem" data-title="profile,moodle" aria-labelledby="actionmenuaction-2">
                                                <i class="icon fa fa-user fa-fw " aria-hidden="true"  ></i>
                                            <span class="menu-action-text" id="actionmenuaction-2">
                                                Profile
                                            </span>
                                        </a>
                                        <a href="https://moodle.nottingham.ac.uk/grade/report/overview/index.php" class="dropdown-item menu-action" role="menuitem" data-title="grades,grades" aria-labelledby="actionmenuaction-3">
                                                <i class="icon fa fa-table fa-fw " aria-hidden="true"  ></i>
                                            <span class="menu-action-text" id="actionmenuaction-3">
                                                Grades
                                            </span>
                                        </a>
                                        <a href="https://moodle.nottingham.ac.uk/message/index.php" class="dropdown-item menu-action" role="menuitem" data-title="messages,message" aria-labelledby="actionmenuaction-4">
                                                <i class="icon fa fa-comment fa-fw " aria-hidden="true"  ></i>
                                            <span class="menu-action-text" id="actionmenuaction-4">
                                                Messages
                                            </span>
                                        </a>
                                        <a href="https://moodle.nottingham.ac.uk/user/preferences.php" class="dropdown-item menu-action" role="menuitem" data-title="preferences,moodle" aria-labelledby="actionmenuaction-5">
                                                <i class="icon fa fa-wrench fa-fw " aria-hidden="true"  ></i>
                                            <span class="menu-action-text" id="actionmenuaction-5">
                                                Preferences
                                            </span>
                                        </a>
                                        <div class="dropdown-divider" role="presentation"><span class="filler">&nbsp;</span></div>
                                        <a href="https://moodle.nottingham.ac.uk/login/logout.php?sesskey=6o0f8KrYpd" class="dropdown-item menu-action" role="menuitem" data-title="logout,moodle" aria-labelledby="actionmenuaction-6">
                                                <i class="icon fa fa-sign-out fa-fw " aria-hidden="true"  ></i>
                                            <span class="menu-action-text" id="actionmenuaction-6">
                                                Log out
                                            </span>
                                        </a>
                            </div>
                    </div>
                </div>

        </div>

</div></div>
                </li>
                <li>
                    <div data-region="drawer-toggle">
                        <button aria-expanded="false" aria-controls="nav-drawer" type="button" class="btn pull-xs-right ml-1 btn-secondary" data-action="toggle-drawer" data-side="right" data-preference="drawer-open-nav"><i class="icon fa fa-bars fa-fw " aria-hidden="true"  ></i><span class="sr-only">Side panel</span></button>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div id="page" class="container-fluid">
        <header id="page-header" class="row"><div class="col-xs-12 p-t-1"><div class="card"><div class="card-body"><div class="pull-right context-header-settings-menu"></div><div class="pull-left"><div class="page-context-header"><div class="page-header-headings"><h1>Databases and Interfaces (COMP1041 UNNC) (SPC1 19-20)</h1></div></div></div><div class="clearfix w-100 pull-left" id="page-navbar"><div class="breadcrumb-nav pull-left"><nav role="navigation" aria-label="Navigation bar">
    <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="https://moodle.nottingham.ac.uk/my/"  >Dashboard</a>
                </li>
                <li class="breadcrumb-item">My Modules</li>
                <li class="breadcrumb-item">
                    <a href="https://moodle.nottingham.ac.uk/course/view.php?id=61579"  title="Databases and Interfaces (COMP1041 UNNC) (SPC1 19-20)">Databases and Interfaces (COMP1041 UNNC) (SPC1 19-20)</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="https://moodle.nottingham.ac.uk/course/view.php?id=61579#section-1"  >Teaching Material</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="https://moodle.nottingham.ac.uk/mod/resource/view.php?id=4108555" aria-current="page" title="File">1) Hosting a PHP page</a>
                </li>
    </ol>
</nav></div><div class="breadcrumb-button pull-right"></div></div><div id="course-header"></div></div></div></div></header>

        <div id="page-content" class="row">
            <div id="region-main-box" class="col-12 p-y-1">
                <section id="region-main" >
                    <div class="uon-content">
                        <span class="notifications" id="user-notifications"></span>
                        <div role="main"><span id="maincontent"></span><h2>1) Hosting a PHP page</h2><div class="resourceworkaround">Click <a href="https://moodle.nottingham.ac.uk/pluginfile.php/6224842/mod_resource/content/2/hosting_20200307.pdf" onclick="this.target='_blank'">hosting_20200307.pdf</a> link to view the file.</div></div>
                        <div class="m-t-2 m-b-1 activity-navigation">
<div class="row">
    <div class="col-md-4">        <div class="pull-left">
                <a href="https://moodle.nottingham.ac.uk/mod/kalvidres/view.php?id=4099554&forceview=1" id="prev-activity-link" class="btn btn-link"  title="2.4) Chapter 5: JavaScript and HTML Documents - Part 3 [Video Lecture]" >&#x25C4; 2.4) Chapter 5: JavaScript and HTML Documents - Part 3 [Video Lecture]</a>

        </div>
</div>
    <div class="col-md-4">        <div class="mdl-align">
            <div class="urlselect">
    <form method="post" action="https://moodle.nottingham.ac.uk/course/jumpto.php" class="form-inline" id="url_select_f5e7574c1b8ee212">
        <input type="hidden" name="sesskey" value="6o0f8KrYpd">
            <label for="jump-to-activity" class="sr-only">
                Jump to...
            </label>
        <select  id="jump-to-activity" class="custom-select urlselect" name="jump"
                 >
                    <option value="" selected>Jump to...</option>
                    value="/mod/quiz/view.php?id=4089744&amp;forceview=1" >Coursework 1 - Mini Quiz 6: Chapter 3 Cascading Style Sheets [Post-lecture Quiz]</option>
                    <option value="/mod/quiz/view.php?id=4087401&amp;forceview=1" >Coursework 1 - Mini Quiz 7: Chapter 4 The Basics of JavaScript [Pre-lecture Quiz]</option>
                    <option value="/mod/quiz/view.php?id=4089841&amp;forceview=1" >Coursework 1 - Mini Quiz 8: Chapter 4 The Basics of JavaScript [Post-lecture Quiz]</option>
                    <option value="/mod/quiz/view.php?id=4087403&amp;forceview=1" >Coursework 1 - Mini Quiz 9: Chapter 5 JavaScript and HTML Documents [Pre-lecture Quiz]</option>
                    <option value="/mod/quiz/view.php?id=4103451&amp;forceview=1" >Coursework 1 - Mini Quiz 10: Chapter 5 JavaScript and HTML Documents [Post-lecture Quiz]</option>
                    <option value="/mod/quiz/view.php?id=4110162&amp;forceview=1" >Coursework 1 Mini Quiz 11: Chapter 9 Introduction to PHP [Pre-lecture Quiz - Part 1]</option>
                    <option value="/mod/quiz/view.php?id=4111110&amp;forceview=1" >Coursework 1 Mini Quiz 12: Chapter 9 Introduction to PHP [Pre-lecture Quiz - Part 2]</option>
                    <option value="/mod/resource/view.php?id=4089517&amp;forceview=1" >Coursework 1  Issue Sheet - Feedback</option>
                    <option value="/mod/feedback/view.php?id=4089519&amp;forceview=1" >Coursework 1 - Feedback 1: Online Learning Information Collection</option>
                    <option value="/mod/feedback/view.php?id=4089637&amp;forceview=1" >Coursework 1 - Feedback 2: Learning Preferences</option>
                    <option value="/mod/feedback/view.php?id=4102368&amp;forceview=1" >Coursework 1 - Feedback 3: Online Learning Information Collection [Week 2]</option>
                    <option value="/mod/feedback/view.php?id=4102439&amp;forceview=1" >Coursework 1 - Feedback 4: VARK Modalities</option>
                    <option value="/mod/feedback/view.php?id=4109859&amp;forceview=1" >Coursework 1 - Feedback 5: Online Learning Information Collection [Week 3]</option>
                    <option value="/mod/feedback/view.php?id=4109902&amp;forceview=1" >Coursework 1 Feedback 6: Learning Strategies</option>
                    <option value="/mod/resource/view.php?id=4117042&amp;forceview=1" >Coursework 1 Issue Sheet - Lab Exercises</option>
                    <option value="/mod/resource/view.php?id=4122743&amp;forceview=1" >Example Instruction 2: Coursework 1 Lab Exercises</option>
                    <option value="/mod/resource/view.php?id=4122754&amp;forceview=1" >How to Give Peer Mark and Feedback</option>
                    <option value="/mod/feedback/view.php?id=4123339&amp;forceview=1" >Opinions on Practice Submission for Coursework 1 Lab Exercises</option>
        </select>
            <noscript>
                <input type="submit" class="btn btn-secondary ml-1" value="Go">
            </noscript>
    </form>
</div>

        </div>
</div>
    <div class="col-md-4">        <div class="pull-right">
                <a href="https://moodle.nottingham.ac.uk/mod/resource/view.php?id=4105961&forceview=1" id="next-activity-link" class="btn btn-link"  title="2) Chapter 9: Introduction to PHP [Lecture Slides]" >2) Chapter 9: Introduction to PHP [Lecture Slides] &#x25BA;</a>

        </div>
</div>
</div>
</div>
                        
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div
    id="message-drawer-5e7574c1bf3da5e7574c1b8ee213"
    class="message-drawer bg-light hidden"
    aria-expanded="false"
    aria-hidden="true"
    data-region="message-drawer"
    role="region"
>
    <div class="header-container position-relative" data-region="header-container">
        <div class="hidden border-bottom px-2 py-3" aria-hidden="true" data-region="view-contacts">
            <div class="d-flex align-items-center">
                <div class="align-self-stretch">
                    <a class="h-100 d-flex align-items-center mr-2" href="#" data-route-back role="button">
                        <span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"  ></i></span>
                        <span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"  ></i></span>                    </a>
                </div>
                <div>
                    Contacts
                </div>
                <div class="ml-auto">
                    <a href="#" data-route="view-search" role="button" aria-label="Search">
                        <i class="icon fa fa-search fa-fw " aria-hidden="true"  ></i>
                    </a>
                </div>
            </div>
        </div>        
        <div
            class="hidden bg-white position-relative border-bottom px-2 py-2"
            aria-hidden="true"
            data-region="view-conversation"
        >
            <div class="hidden" data-region="header-content"></div>
            <div class="hidden" data-region="header-edit-mode">
                
                <div class="d-flex p-2 align-items-center">
                    Messages selected:
                    <span class="ml-1" data-region="message-selected-court">1</span>
                    <button type="button" class="ml-auto close" aria-label="Cancel message selection"
                        data-action="cancel-edit-mode">
                            <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div data-region="header-placeholder">
                <div class="d-flex">
                    <div class="align-self-stretch" >
                        <a class="h-100 mr-2 d-flex align-items-center" href="#" data-route-back role="button">
                            <span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"  ></i></span>
                            <span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"  ></i></span>                        </a>
                    </div>
                    <div
                        class="ml-2 rounded-circle bg-pulse-grey align-self-center"
                        style="height: 38px; width: 38px"
                    >
                    </div>
                    <div class="ml-2 " style="flex: 1">
                        <div
                            class="mt-1 bg-pulse-grey w-75"
                            style="height: 16px;"
                        >
                        </div>
                    </div>
                    <div
                        class="ml-2 bg-pulse-grey align-self-center"
                        style="height: 16px; width: 20px"
                    >
                    </div>
                </div>
            </div>
            <div
                class="hidden position-absolute"
                data-region="confirm-dialogue-container"
                style="top: 0; bottom: -1px; right: 0; left: 0; background: rgba(0,0,0,0.3);"
            ></div>
        </div>        <div class="border-bottom px-2 py-3" aria-hidden="false" data-region="view-overview">
            <div class="d-flex align-items-center">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text pr-0 bg-white">
                            <i class="icon fa fa-search fa-fw " aria-hidden="true"  ></i>
                        </span>
                    </div>
                    <input
                        type="text"
                        class="form-control border-left-0"
                        placeholder="Search"
                        aria-label="Search"
                        data-region="view-overview-search-input"
                    >
                </div>
                <div class="ml-2">
                    <a
                        href="#"
                        data-route="view-settings"
                        data-route-param="211905"
                        aria-label="Settings"
                        role="button"
                    >
                        <i class="icon fa fa-cog fa-fw " aria-hidden="true"  ></i>
                    </a>
                </div>
            </div>
            <div class="text-right mt-3">
                <a href="#" data-route="view-contacts" role="button">
                    <i class="icon fa fa-user fa-fw " aria-hidden="true"  ></i>
                    Contacts
                    <span class="badge bg-primary ml-2 hidden"
                    data-region="contact-request-count"
                    aria-label="There are 0 pending contact requests">
                        0
                    </span>
                </a>
            </div>
        </div>
        
        <div class="hidden border-bottom px-2 py-3 view-search" aria-hidden="true" data-region="view-search">
            <div class="d-flex align-items-center">
                <a
                    class="mr-2 align-self-stretch d-flex align-items-center"
                    href="#"
                    data-route-back
                    data-action="cancel-search"
                    role="button"
                >
                    <span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"  ></i></span>
                    <span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"  ></i></span>                </a>
                <div class="input-group">
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Search"
                        aria-label="Search"
                        data-region="search-input"
                    >
                    <div class="input-group-append">
                        <button
                            class="btn btn-outline-secondary"
                            type="button"
                            data-action="search"
                            aria-label="Search"
                        >
                            <span data-region="search-icon-container">
                                <i class="icon fa fa-search fa-fw " aria-hidden="true"  ></i>
                            </span>
                            <span class="hidden" data-region="loading-icon-container">
                                <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>        
        <div class="hidden border-bottom px-2 py-3" aria-hidden="true" data-region="view-settings">
            <div class="d-flex align-items-center">
                <div class="align-self-stretch" >
                    <a class="h-100 d-flex mr-2 align-items-center" href="#" data-route-back role="button">
                        <span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"  ></i></span>
                        <span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"  ></i></span>                    </a>
                </div>
                <div>
                    Settings
                </div>
            </div>
        </div>
    </div>
    <div class="body-container position-relative" data-region="body-container">
        
        <div
            class="hidden"
            data-region="view-contact"
            aria-hidden="true"
        >
            <div class="p-2 pt-3" data-region="content-container"></div>
        </div>        <div class="hidden h-100" data-region="view-contacts" aria-hidden="true" data-user-id="211905">
            <div class="d-flex flex-column h-100">
                <div class="p-3 border-bottom">
                    <ul class="nav nav-pills nav-fill" role="tablist">
                        <li class="nav-item">
                            <a
                                id="contacts-tab-5e7574c1bf3da5e7574c1b8ee213"
                                class="nav-link active"
                                href="#contacts-tab-panel-5e7574c1bf3da5e7574c1b8ee213"
                                data-toggle="tab"
                                data-action="show-contacts-section"
                                role="tab"
                                aria-controls="contacts-tab-panel-5e7574c1bf3da5e7574c1b8ee213"
                                aria-selected="true"
                            >
                                Contacts
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                id="requests-tab-5e7574c1bf3da5e7574c1b8ee213"
                                class="nav-link"
                                href="#requests-tab-panel-5e7574c1bf3da5e7574c1b8ee213"
                                data-toggle="tab"
                                data-action="show-requests-section"
                                role="tab"
                                aria-controls="requests-tab-panel-5e7574c1bf3da5e7574c1b8ee213"
                                aria-selected="false"
                            >
                                Requests
                                <span class="badge bg-primary ml-2 hidden"
                                data-region="contact-request-count"
                                aria-label="There are 0 pending contact requests">
                                    0
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content d-flex flex-column h-100">
                            <div
            class="tab-pane fade show active h-100 lazy-load-list"
            aria-live="polite"
            data-region="lazy-load-list"
            data-user-id="211905"
                                id="contacts-tab-panel-5e7574c1bf3da5e7574c1b8ee213"
                    data-section="contacts"
                    role="tabpanel"
                    aria-labelledby="contacts-tab-5e7574c1bf3da5e7574c1b8ee213"

        >
        
            
            <div class="hidden text-center p-2" data-region="empty-message-container">
                No contacts
            </div>
            <div class="hidden list-group" data-region="content-container">
                
            </div>
            <div class="list-group" data-region="placeholder-container">
                
            </div>
            <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
            </div>
        </div>
        
                            <div
            class="tab-pane fade h-100 lazy-load-list"
            aria-live="polite"
            data-region="lazy-load-list"
            data-user-id="211905"
                                id="requests-tab-panel-5e7574c1bf3da5e7574c1b8ee213"
                    data-section="requests"
                    role="tabpanel"
                    aria-labelledby="requests-tab-5e7574c1bf3da5e7574c1b8ee213"

        >
        
            
            <div class="hidden text-center p-2" data-region="empty-message-container">
                No contact requests
            </div>
            <div class="hidden list-group" data-region="content-container">
                
            </div>
            <div class="list-group" data-region="placeholder-container">
                
            </div>
            <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
            </div>
        </div>
                </div>
            </div>
        </div>        
        <div
            class="view-conversation hidden h-100"
            aria-hidden="true"
            data-region="view-conversation"
            data-user-id="211905"
            data-midnight="1584720000"
            data-message-poll-min="10"
            data-message-poll-max="120"
            data-message-poll-after-max="300"
            style="overflow-y: auto; overflow-x: hidden"
        >
            <div class="position-relative h-100" data-region="content-container" style="overflow-y: auto; overflow-x: hidden">
                <div class="content-message-container hidden h-100 px-2 pt-0" data-region="content-message-container" role="log" style="overflow-y: auto; overflow-x: hidden">
                    <div class="py-3 bg-light sticky-top z-index-1 border-bottom text-center hidden" data-region="contact-request-sent-message-container">
                        <p class="m-0">Contact request sent</p>
                        <p class="font-italic font-weight-light" data-region="text"></p>
                    </div>
                    <div class="hidden text-center p-3" data-region="more-messages-loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</div>
                </div>
                <div class="p-4 w-100 h-100 hidden position-absolute" data-region="confirm-dialogue-container" style="top: 0; background: rgba(0,0,0,0.3);">
                    
                    <div class="p-3 bg-white" data-region="confirm-dialogue" role="alert">
                        <h3 class="h6 hidden" data-region="dialogue-header"></h3>
                        <p class="text-muted" data-region="dialogue-text"></p>
                        <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-block">
                            <span data-region="dialogue-button-text">Block</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-unblock">
                            <span data-region="dialogue-button-text">Unblock</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-remove-contact">
                            <span data-region="dialogue-button-text">Remove</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-add-contact">
                            <span data-region="dialogue-button-text">Add</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-delete-selected-messages">
                            <span data-region="dialogue-button-text">Delete</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-delete-conversation">
                            <span data-region="dialogue-button-text">Delete</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-block hidden" data-action="request-add-contact">
                            <span data-region="dialogue-button-text">Send contact request</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-block hidden" data-action="accept-contact-request">
                            <span data-region="dialogue-button-text">Accept and add to contacts</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                        </button>
                        <button type="button" class="btn btn-secondary btn-block hidden" data-action="decline-contact-request">
                            <span data-region="dialogue-button-text">Decline</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                        </button>
                        <button type="button" class="btn btn-secondary btn-block" data-action="cancel-confirm">Cancel</button>
                    </div>
                </div>
                <div class="px-2 pb-2 pt-0" data-region="content-placeholder">
                    <div class="h-100 d-flex flex-column">
                        <div
                            class="px-2 pb-2 pt-0 bg-light h-100"
                            style="overflow-y: auto"
                        >
                            <div class="mt-4">
                                <div class="mb-4">
                                    <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                            </div>                            <div class="mt-4">
                                <div class="mb-4">
                                    <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                            </div>                            <div class="mt-4">
                                <div class="mb-4">
                                    <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                            </div>                            <div class="mt-4">
                                <div class="mb-4">
                                    <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                            </div>                            <div class="mt-4">
                                <div class="mb-4">
                                    <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                            </div>                        </div>
                    </div>                </div>
            </div>
        </div>
        
        <div
            class="hidden"
            aria-hidden="true"
            data-region="view-group-info"
        >
            <div
                class="pt-3 h-100 d-flex flex-column"
                data-region="group-info-content-container"
                style="overflow-y: auto"
            ></div>
        </div>        <div class="h-100 view-overview-body" aria-hidden="false" data-region="view-overview" data-user-id="211905">
            <div id="message-drawer-view-overview-container" class="d-flex flex-column h-100" style="overflow-y: auto">
                    
                    
                    <div
                        class="section border-0 card"
                        data-region="view-overview-favourites"
                    >
                        <div id="view-overview-favourites-toggle" class="card-header p-0" data-region="toggle">
                            <button
                                class="btn btn-link w-100 text-left p-2 d-flex align-items-center overview-section-toggle collapsed"
                                data-toggle="collapse"
                                data-target="#view-overview-favourites-target"
                                aria-expanded="false"
                                aria-controls="view-overview-favourites-target"
                            >
                                <span class="collapsed-icon-container">
                                    <i class="icon fa fa-caret-right fa-fw " aria-hidden="true"  ></i>
                                </span>
                                <span class="expanded-icon-container">
                                    <i class="icon fa fa-caret-down fa-fw " aria-hidden="true"  ></i>
                                </span>
                                <span class="font-weight-bold">Starred</span>
                                <small class="hidden ml-1" data-region="section-total-count-container"
                                aria-label=" total conversations">
                                    (<span data-region="section-total-count"></span>)
                                </small>
                                <span class="hidden ml-2" data-region="loading-icon-container">
                                    <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
                                </span>
                                <span class="hidden badge badge-pill badge-primary ml-auto bg-primary"
                                data-region="section-unread-count"
                                >
                                    
                                </span>
                            </button>
                        </div>
                                            <div
                        class="collapse border-bottom  lazy-load-list"
                        aria-live="polite"
                        data-region="lazy-load-list"
                        data-user-id="211905"
                                    id="view-overview-favourites-target"
            aria-labelledby="view-overview-favourites-toggle"
            data-parent="#message-drawer-view-overview-container"

                    >
                    
                        
                        <div class="hidden text-center p-2" data-region="empty-message-container">
                                    <p class="text-muted mt-2">No starred conversations</p>

                        </div>
                        <div class="hidden list-group" data-region="content-container">
                            
                        </div>
                        <div class="list-group" data-region="placeholder-container">
                                    <div class="text-center py-2"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</div>

                        </div>
                        <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
                        </div>
                    </div>
                    </div>
                    
                    
                    <div
                        class="section border-0 card"
                        data-region="view-overview-group-messages"
                    >
                        <div id="view-overview-group-messages-toggle" class="card-header p-0" data-region="toggle">
                            <button
                                class="btn btn-link w-100 text-left p-2 d-flex align-items-center overview-section-toggle collapsed"
                                data-toggle="collapse"
                                data-target="#view-overview-group-messages-target"
                                aria-expanded="false"
                                aria-controls="view-overview-group-messages-target"
                            >
                                <span class="collapsed-icon-container">
                                    <i class="icon fa fa-caret-right fa-fw " aria-hidden="true"  ></i>
                                </span>
                                <span class="expanded-icon-container">
                                    <i class="icon fa fa-caret-down fa-fw " aria-hidden="true"  ></i>
                                </span>
                                <span class="font-weight-bold">Group</span>
                                <small class="hidden ml-1" data-region="section-total-count-container"
                                aria-label=" total conversations">
                                    (<span data-region="section-total-count"></span>)
                                </small>
                                <span class="hidden ml-2" data-region="loading-icon-container">
                                    <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
                                </span>
                                <span class="hidden badge badge-pill badge-primary ml-auto bg-primary"
                                data-region="section-unread-count"
                                >
                                    
                                </span>
                            </button>
                        </div>
                                            <div
                        class="collapse border-bottom  lazy-load-list"
                        aria-live="polite"
                        data-region="lazy-load-list"
                        data-user-id="211905"
                                    id="view-overview-group-messages-target"
            aria-labelledby="view-overview-group-messages-toggle"
            data-parent="#message-drawer-view-overview-container"

                    >
                    
                        
                        <div class="hidden text-center p-2" data-region="empty-message-container">
                                    <p class="text-muted mt-2">No group conversations</p>

                        </div>
                        <div class="hidden list-group" data-region="content-container">
                            
                        </div>
                        <div class="list-group" data-region="placeholder-container">
                                    <div class="text-center py-2"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</div>

                        </div>
                        <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
                        </div>
                    </div>
                    </div>
                    
                    
                    <div
                        class="section border-0 card"
                        data-region="view-overview-messages"
                    >
                        <div id="view-overview-messages-toggle" class="card-header p-0" data-region="toggle">
                            <button
                                class="btn btn-link w-100 text-left p-2 d-flex align-items-center overview-section-toggle collapsed"
                                data-toggle="collapse"
                                data-target="#view-overview-messages-target"
                                aria-expanded="false"
                                aria-controls="view-overview-messages-target"
                            >
                                <span class="collapsed-icon-container">
                                    <i class="icon fa fa-caret-right fa-fw " aria-hidden="true"  ></i>
                                </span>
                                <span class="expanded-icon-container">
                                    <i class="icon fa fa-caret-down fa-fw " aria-hidden="true"  ></i>
                                </span>
                                <span class="font-weight-bold">Private</span>
                                <small class="hidden ml-1" data-region="section-total-count-container"
                                aria-label=" total conversations">
                                    (<span data-region="section-total-count"></span>)
                                </small>
                                <span class="hidden ml-2" data-region="loading-icon-container">
                                    <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
                                </span>
                                <span class="hidden badge badge-pill badge-primary ml-auto bg-primary"
                                data-region="section-unread-count"
                                >
                                    
                                </span>
                            </button>
                        </div>
                                            <div
                        class="collapse border-bottom  lazy-load-list"
                        aria-live="polite"
                        data-region="lazy-load-list"
                        data-user-id="211905"
                                    id="view-overview-messages-target"
            aria-labelledby="view-overview-messages-toggle"
            data-parent="#message-drawer-view-overview-container"

                    >
                    
                        
                        <div class="hidden text-center p-2" data-region="empty-message-container">
                                    <p class="text-muted mt-2">No private conversations</p>

                        </div>
                        <div class="hidden list-group" data-region="content-container">
                            
                        </div>
                        <div class="list-group" data-region="placeholder-container">
                                    <div class="text-center py-2"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</div>

                        </div>
                        <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
        
        <div
            data-region="view-search"
            aria-hidden="true"
            class="h-100 hidden"
            data-user-id="211905"
            data-users-offset="0"
            data-messages-offset="0"
            style="overflow-y: auto"
        >
            <div class="hidden" data-region="search-results-container" style="overflow-y: auto">
                
                <div class="d-flex flex-column">
                    <div class="mb-3 bg-white" data-region="all-contacts-container">
                        <div data-region="contacts-container"  class="pt-2">
                            <h4 class="h6 px-2">Contacts</h4>
                            <div class="list-group" data-region="list"></div>
                        </div>
                        <div data-region="non-contacts-container" class="pt-2 border-top">
                            <h4 class="h6 px-2">Non-contacts</h4>
                            <div class="list-group" data-region="list"></div>
                        </div>
                        <div class="text-right">
                            <button class="btn btn-link text-primary" data-action="load-more-users">
                                <span data-region="button-text">Load more</span>
                                <span data-region="loading-icon-container" class="hidden"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                            </button>
                        </div>
                    </div>
                    <div class="bg-white" data-region="messages-container">
                        <h4 class="h6 px-2 pt-2">Messages</h4>
                        <div class="list-group" data-region="list"></div>
                        <div class="text-right">
                            <button class="btn btn-link text-primary" data-action="load-more-messages">
                                <span data-region="button-text">Load more</span>
                                <span data-region="loading-icon-container" class="hidden"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                            </button>
                        </div>
                    </div>
                    <p class="hidden p-3 text-center" data-region="no-results-container">No results</p>
                </div>            </div>
            <div class="hidden" data-region="loading-placeholder">
                <div class="text-center pt-3 icon-size-4"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</div>
            </div>
            <div class="p-3 text-center" data-region="empty-message-container">
                <p>Search people and messages</p>
            </div>
        </div>        
        <div class="h-100 hidden bg-white" aria-hidden="true" data-region="view-settings">
            <div class="hidden" data-region="content-container">
                
                <div data-region="settings" class="p-3">
                    <h3 class="h6 font-weight-bold">Privacy</h3>
                    <p>You can restrict who can message you</p>
                    <div data-preference="blocknoncontacts" class="mb-3">
                            <div class="custom-control custom-radio mb-2">
                                <input
                                    type="radio"
                                    name="message_blocknoncontacts"
                                    class="custom-control-input"
                                    id="block-noncontacts-5e7574c1bf3da5e7574c1b8ee213-1"
                                    value="1"
                                >
                                <label class="custom-control-label ml-2" for="block-noncontacts-5e7574c1bf3da5e7574c1b8ee213-1">
                                    My contacts only
                                </label>
                            </div>
                            <div class="custom-control custom-radio mb-2">
                                <input
                                    type="radio"
                                    name="message_blocknoncontacts"
                                    class="custom-control-input"
                                    id="block-noncontacts-5e7574c1bf3da5e7574c1b8ee213-0"
                                    value="0"
                                >
                                <label class="custom-control-label ml-2" for="block-noncontacts-5e7574c1bf3da5e7574c1b8ee213-0">
                                    My contacts and anyone in my courses
                                </label>
                            </div>
                    </div>
                
                    <div class="hidden" data-region="notification-preference-container">
                        <h3 class="mb-2 mt-4 h6 font-weight-bold">Notification preferences</h3>
                    </div>
                
                    <h3 class="mb-2 mt-4 h6 font-weight-bold">General</h3>
                    <div data-preference="entertosend">
                        <span class="switch">
                            <input type="checkbox"
                                id="enter-to-send-5e7574c1bf3da5e7574c1b8ee213"
                                
                            >
                            <label for="enter-to-send-5e7574c1bf3da5e7574c1b8ee213">
                                Use enter to send
                            </label>
                        </span>
                    </div>
                </div>
            </div>
            <div data-region="placeholder-container">
                
                <div class="d-flex flex-column p-3">
                    <div class="w-25 bg-pulse-grey h6" style="height: 18px"></div>
                    <div class="w-75 bg-pulse-grey mb-4" style="height: 18px"></div>
                    <div class="mb-3">
                        <div class="w-100 d-flex mb-3">
                            <div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
                            <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                        </div>
                        <div class="w-100 d-flex mb-3">
                            <div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
                            <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                        </div>
                        <div class="w-100 d-flex mb-3">
                            <div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
                            <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                        </div>
                    </div>
                    <div class="w-50 bg-pulse-grey h6 mb-3 mt-2" style="height: 18px"></div>
                    <div class="mb-4">
                        <div class="w-100 d-flex mb-2 align-items-center">
                            <div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
                            <div class="bg-pulse-grey w-25 ml-2" style="height: 18px"></div>
                        </div>
                        <div class="w-100 d-flex mb-2 align-items-center">
                            <div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
                            <div class="bg-pulse-grey w-25 ml-2" style="height: 18px"></div>
                        </div>
                    </div>
                    <div class="w-25 bg-pulse-grey h6 mb-3 mt-2" style="height: 18px"></div>
                    <div class="mb-3">
                        <div class="w-100 d-flex mb-2 align-items-center">
                            <div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
                            <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                        </div>
                    </div>
                </div>            </div>
        </div>    </div>
    <div class="footer-container position-relative" data-region="footer-container">
        
        <div
            class="hidden border-top bg-white position-relative"
            aria-hidden="true"
            data-region="view-conversation"
            data-enter-to-send="0"
        >
            <div class="hidden p-2" data-region="content-messages-footer-container">
                
                <div class="d-flex mt-1">
                    <textarea
                        dir="auto"
                        data-region="send-message-txt"
                        class="form-control bg-light"
                        rows="3"
                        data-auto-rows
                        data-min-rows="3"
                        data-max-rows="5"
                        role="textbox"
                        aria-label="Write a message..."
                        placeholder="Write a message..."
                        style="resize: none"
                    ></textarea>
                    <button
                        class="btn btn-link btn-icon icon-size-3 ml-1 mt-auto"
                        aria-label="Send message"
                        data-action="send-message"
                    >
                        <span data-region="send-icon-container"><i class="icon fa fa-paper-plane fa-fw " aria-hidden="true"  ></i></span>
                        <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                    </button>
                </div>
            </div>
            <div class="hidden p-2" data-region="content-messages-footer-edit-mode-container">
                
                <div class="d-flex p-3 justify-content-end">
                    <button
                        class="btn btn-link btn-icon my-1 icon-size-4"
                        data-action="delete-selected-messages"
                        data-toggle="tooltip"
                        data-placement="top"
                        title="Delete selected messages"
                    >
                        <span data-region="icon-container"><i class="icon fa fa-trash fa-fw " aria-hidden="true"  ></i></span>
                        <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                        <span class="sr-only">Delete selected messages</span>
                    </button>
                </div>            </div>
            <div class="hidden bg-secondary p-3" data-region="content-messages-footer-require-contact-container">
                
                <div class="p-3 bg-white">
                    <p data-region="title"></p>
                    <p class="text-muted" data-region="text"></p>
                    <button type="button" class="btn btn-primary btn-block" data-action="request-add-contact">
                        <span data-region="dialogue-button-text">Send contact request</span>
                        <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                    </button>
                </div>
            </div>
            <div class="hidden bg-secondary p-3" data-region="content-messages-footer-require-unblock-container">
                
                <div class="p-3 bg-white">
                    <p class="text-muted" data-region="text">You have blocked this user.</p>
                    <button type="button" class="btn btn-primary btn-block" data-action="request-unblock">
                        <span data-region="dialogue-button-text">Unblock user</span>
                        <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                    </button>
                </div>
            </div>
            <div class="hidden bg-secondary p-3" data-region="content-messages-footer-unable-to-message">
                
                <div class="p-3 bg-white">
                    <p class="text-muted" data-region="text">You are unable to message this user</p>
                </div>
            </div>
            <div class="p-2" data-region="placeholder-container">
                <div class="d-flex">
                    <div class="bg-pulse-grey w-100" style="height: 80px"></div>
                    <div class="mx-2 mb-2 align-self-end bg-pulse-grey" style="height: 20px; width: 20px"></div>
                </div>            </div>
            <div
                class="hidden position-absolute"
                data-region="confirm-dialogue-container"
                style="top: -1px; bottom: 0; right: 0; left: 0; background: rgba(0,0,0,0.3);"
            ></div>
        </div>    </div>
</div>
    <div
        id="nav-drawer"
        data-region="drawer"
        class="hidden-print moodle-has-zindex closed"
        aria-hidden="falsetrue"
        tabindex="-1"
    >
        <div class="usermenu"><div class="action-menu moodle-actionmenu nowrap-items d-inline" id="action-menu-3" data-enhance="moodle-core-actionmenu">

        <div class="menubar d-flex " id="action-menu-3-menubar" role="menubar">

            


                <div class="action-menu-trigger">
                    <div class="dropdown">
                        <a href="#" tabindex="0" class=" dropdown-toggle icon-no-margin" id="dropdown-3" aria-label="User menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" aria-controls="action-menu-3-menu">
                            
                            <span class="userbutton"><span class="usertext mr-1">Angran ZHOU</span><span class="avatars"><span class="avatar current"><img src="https://moodle.nottingham.ac.uk/theme/image.php/nottingham_science/core/1581530212/u/f2" class="userpicture defaultuserpic" width="35" height="35" role="presentation" aria-hidden="true" /></span></span></span>
                                
                            <b class="caret"></b>
                        </a>
                            <div class="dropdown-menu dropdown-menu-right menu  align-tr-br" id="action-menu-3-menu" data-rel="menu-content" aria-labelledby="action-menu-toggle-3" role="menu" data-align="tr-br" id="dropdown-menu-3">
                                        <a href="https://moodle.nottingham.ac.uk/my/" class="dropdown-item menu-action" role="menuitem" data-title="mymoodle,admin" aria-labelledby="actionmenuaction-7">
                                                <i class="icon fa fa-tachometer fa-fw " aria-hidden="true"  ></i>
                                            <span class="menu-action-text" id="actionmenuaction-7">
                                                Dashboard
                                            </span>
                                        </a>
                                        <div class="dropdown-divider" role="presentation"><span class="filler">&nbsp;</span></div>
                                        <a href="https://moodle.nottingham.ac.uk/user/profile.php?id=211905" class="dropdown-item menu-action" role="menuitem" data-title="profile,moodle" aria-labelledby="actionmenuaction-8">
                                                <i class="icon fa fa-user fa-fw " aria-hidden="true"  ></i>
                                            <span class="menu-action-text" id="actionmenuaction-8">
                                                Profile
                                            </span>
                                        </a>
                                        <a href="https://moodle.nottingham.ac.uk/grade/report/overview/index.php" class="dropdown-item menu-action" role="menuitem" data-title="grades,grades" aria-labelledby="actionmenuaction-9">
                                                <i class="icon fa fa-table fa-fw " aria-hidden="true"  ></i>
                                            <span class="menu-action-text" id="actionmenuaction-9">
                                                Grades
                                            </span>
                                        </a>
                                        <a href="https://moodle.nottingham.ac.uk/message/index.php" class="dropdown-item menu-action" role="menuitem" data-title="messages,message" aria-labelledby="actionmenuaction-10">
                                                <i class="icon fa fa-comment fa-fw " aria-hidden="true"  ></i>
                                            <span class="menu-action-text" id="actionmenuaction-10">
                                                Messages
                                            </span>
                                        </a>
                                        <a href="https://moodle.nottingham.ac.uk/user/preferences.php" class="dropdown-item menu-action" role="menuitem" data-title="preferences,moodle" aria-labelledby="actionmenuaction-11">
                                                <i class="icon fa fa-wrench fa-fw " aria-hidden="true"  ></i>
                                            <span class="menu-action-text" id="actionmenuaction-11">
                                                Preferences
                                            </span>
                                        </a>
                                        <div class="dropdown-divider" role="presentation"><span class="filler">&nbsp;</span></div>
                                        <a href="https://moodle.nottingham.ac.uk/login/logout.php?sesskey=6o0f8KrYpd" class="dropdown-item menu-action" role="menuitem" data-title="logout,moodle" aria-labelledby="actionmenuaction-12">
                                                <i class="icon fa fa-sign-out fa-fw " aria-hidden="true"  ></i>
                                            <span class="menu-action-text" id="actionmenuaction-12">
                                                Log out
                                            </span>
                                        </a>
                            </div>
                    </div>
                </div>

        </div>

</div></div>
        <nav class="list-group">
            <a class="list-group-item list-group-item-action " href="https://moodle.nottingham.ac.uk/course/view.php?id=61579" data-key="coursehome" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="60" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" >
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Databases and Interfaces (COMP1041 UNNC) (SPC1 19-20)</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://moodle.nottingham.ac.uk/user/index.php?id=61579" data-key="participants" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="90" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="61579">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-users fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Participants</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://moodle.nottingham.ac.uk/badges/view.php?type=2&amp;id=61579" data-key="badgesview" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="70" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="61579">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-shield fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Badges</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://moodle.nottingham.ac.uk/grade/report/index.php?id=61579" data-key="grades" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="70" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="61579">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-table fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Grades</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://moodle.nottingham.ac.uk/course/view.php?id=61579#section-0" data-key="953529" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="30" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="61579">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-folder-o fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Module Information</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action active" href="https://moodle.nottingham.ac.uk/course/view.php?id=61579#section-1" data-key="953534" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="30" data-nodetype="1" data-collapse="0" data-forceopen="1" data-isactive="1" data-hidden="0" data-preceedwithhr="0" data-parent-key="61579">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-folder-o fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body font-weight-bold">Teaching Material</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://moodle.nottingham.ac.uk/course/view.php?id=61579#section-2" data-key="953535" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="30" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="61579">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-folder-o fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Online Learning Sessions</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://moodle.nottingham.ac.uk/course/view.php?id=61579#section-3" data-key="953536" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="30" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="61579">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-folder-o fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Lab Exercises</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://moodle.nottingham.ac.uk/course/view.php?id=61579#section-4" data-key="953537" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="30" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="61579">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-folder-o fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Assessments</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://moodle.nottingham.ac.uk/local/kalturamediagallery/index.php?courseid=61579" data-key="kalturacoursegallerylink-mycourses" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="0" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="61579">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <img class="icon " alt="" aria-hidden="true" src="https://moodle.nottingham.ac.uk/theme/image.php/nottingham_science/local_kalturamediagallery/1581530212/media-gallery" />
                        </span>
                        <span class="media-body ">Media Gallery</span>
                    </div>
                </div>
            </a>
        </nav>
        <nav class="list-group m-t-1">
            <a class="list-group-item list-group-item-action " href="https://moodle.nottingham.ac.uk/my/" data-key="myhome" data-isexpandable="0" data-indent="0" data-showdivider="1" data-type="1" data-nodetype="1" data-collapse="0" data-forceopen="1" data-isactive="0" data-hidden="0" data-preceedwithhr="0" >
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-tachometer fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Dashboard</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://moodle.nottingham.ac.uk/?redirect=0" data-key="home" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="70" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="myhome">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-home fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Site home</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://moodle.nottingham.ac.uk/local/mymedia/mymedia.php" data-key="mymedia" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="0" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="home">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <img class="icon " alt="" aria-hidden="true" src="https://moodle.nottingham.ac.uk/theme/image.php/nottingham_science/local_mymedia/1581530212/my-media" />
                        </span>
                        <span class="media-body ">My Media</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://moodle.nottingham.ac.uk/calendar/view.php?view=month&amp;course=61579" data-key="calendar" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="60" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="1">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-calendar fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Calendar</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://moodle.nottingham.ac.uk/user/files.php" data-key="privatefiles" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="70" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="1">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-file-o fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Private files</span>
                    </div>
                </div>
            </a>
            <div class="list-group-item" data-key="mycourses" data-isexpandable="1" data-indent="0" data-showdivider="0" data-type="0" data-nodetype="1" data-collapse="0" data-forceopen="1" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="myhome">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body">My Modules</span>
                    </div>
                </div>
            </div>
            <a class="list-group-item list-group-item-action " href="https://moodle.nottingham.ac.uk/course/view.php?id=60542" data-key="60542" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                <div class="m-l-1">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">CELE-Year 2 Transition Courses (UNNC)</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://moodle.nottingham.ac.uk/course/view.php?id=62813" data-key="62813" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                <div class="m-l-1">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Coaching and Support (CAS)</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://moodle.nottingham.ac.uk/course/view.php?id=39383" data-key="39383" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                <div class="m-l-1">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">CELE Common Space (CN)</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://moodle.nottingham.ac.uk/course/view.php?id=30467" data-key="30467" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                <div class="m-l-1">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">David Anstey (CN)</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://moodle.nottingham.ac.uk/course/view.php?id=7314" data-key="7314" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                <div class="m-l-1">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Stephen Waller (CN)</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://moodle.nottingham.ac.uk/course/view.php?id=7300" data-key="7300" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                <div class="m-l-1">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Titus Green (CN)</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://moodle.nottingham.ac.uk/course/view.php?id=61571" data-key="61571" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                <div class="m-l-1">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Fundamentals of Artificial Intelligence (COMP1037 UNNC) (SPC1 19-20)</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://moodle.nottingham.ac.uk/course/view.php?id=61573" data-key="61573" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                <div class="m-l-1">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Programming and Algorithms (COMP1038 UNNC) (AUC1 19-20)</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://moodle.nottingham.ac.uk/course/view.php?id=61575" data-key="61575" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                <div class="m-l-1">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Programming Paradigms (COMP1039 UNNC) (SPC1 19-20)</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://moodle.nottingham.ac.uk/course/view.php?id=61579" data-key="61579" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="1" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                <div class="m-l-1">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Databases and Interfaces (COMP1041 UNNC) (SPC1 19-20)</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://moodle.nottingham.ac.uk/my/" data-key="courseindexpage" data-isexpandable="0" data-indent="1" data-showdivider="0" data-type="60" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                <div class="m-l-1">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-fw fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">More...</span>
                    </div>
                </div>
            </a>
        </nav>
        <nav class="list-menu"><li class="dropdown nav-item">
    <a class="dropdown-toggle nav-link" id="drop-down-5e7574c1c45275e7574c1b8ee222" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" aria-controls="drop-down-menu-5e7574c1c45275e7574c1b8ee222">
        Library Search (NUSearch)
    </a>
    <div class="dropdown-menu" role="menu" id="drop-down-menu-5e7574c1c45275e7574c1b8ee222" aria-labelledby="drop-down-5e7574c1c45275e7574c1b8ee222">
                <a class="dropdown-item" role="menuitem" href="http://nusearch.nottingham.ac.uk" title="UK Campus">UK Campus</a>
                <a class="dropdown-item" role="menuitem" href="http://nusearch.nottingham.edu.cn" title="China Campus">China Campus</a>
                <a class="dropdown-item" role="menuitem" href="http://nusearch.nottingham.edu.my" title="Malaysia Campus">Malaysia Campus</a>
    </div>
</li><li class="dropdown nav-item">
    <a class="dropdown-toggle nav-link" id="drop-down-5e7574c1c45a35e7574c1b8ee223" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" aria-controls="drop-down-menu-5e7574c1c45a35e7574c1b8ee223">
        Library Locations
    </a>
    <div class="dropdown-menu" role="menu" id="drop-down-menu-5e7574c1c45a35e7574c1b8ee223" aria-labelledby="drop-down-5e7574c1c45a35e7574c1b8ee223">
                <a class="dropdown-item" role="menuitem" href="http://www.nottingham.ac.uk/library/index.aspx" title="UK Campus">UK Campus</a>
                <a class="dropdown-item" role="menuitem" href="http://www.nottingham.edu.cn/en/library/index.aspx" title="China Campus">China Campus</a>
                <a class="dropdown-item" role="menuitem" href="http://www.nottingham.edu.my/IS/LibraryServices/index.aspx" title="Malaysia Campus">Malaysia Campus</a>
    </div>
</li><li class="dropdown nav-item">
    <a class="dropdown-toggle nav-link" id="drop-down-5e7574c1c46335e7574c1b8ee224" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" aria-controls="drop-down-menu-5e7574c1c46335e7574c1b8ee224">
        Studying Effectively
    </a>
    <div class="dropdown-menu" role="menu" id="drop-down-menu-5e7574c1c46335e7574c1b8ee224" aria-labelledby="drop-down-5e7574c1c46335e7574c1b8ee224">
                <a class="dropdown-item" role="menuitem" href="http://www.nottingham.ac.uk/studyingeffectively/studying/index.aspx" title="Studying at University">Studying at University</a>
                <a class="dropdown-item" role="menuitem" href="http://www.nottingham.ac.uk/studyingeffectively/teaching/index.aspx" title="Types of teaching">Types of teaching</a>
                <a class="dropdown-item" role="menuitem" href="http://www.nottingham.ac.uk/studyingeffectively/organised/index.aspx" title="Being organised">Being organised</a>
                <a class="dropdown-item" role="menuitem" href="http://www.nottingham.ac.uk/studyingeffectively/reading/index.aspx" title="Reading and interpreting">Reading and interpreting</a>
                <a class="dropdown-item" role="menuitem" href="http://www.nottingham.ac.uk/studyingeffectively/writing/index.aspx" title="Writing">Writing</a>
                <a class="dropdown-item" role="menuitem" href="http://www.nottingham.ac.uk/studyingeffectively/preparing/index.aspx" title="Preparing for assessment">Preparing for assessment</a>
                <a class="dropdown-item" role="menuitem" href="http://www.nottingham.ac.uk/studyingeffectively/peoplewhocanhelp.aspx" title="University Support">University Support</a>
    </div>
</li><li class="dropdown nav-item">
    <a class="dropdown-toggle nav-link" id="drop-down-5e7574c1c46b35e7574c1b8ee225" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" aria-controls="drop-down-menu-5e7574c1c46b35e7574c1b8ee225">
        Help
    </a>
    <div class="dropdown-menu" role="menu" id="drop-down-menu-5e7574c1c46b35e7574c1b8ee225" aria-labelledby="drop-down-5e7574c1c46b35e7574c1b8ee225">
                <a class="dropdown-item" role="menuitem" href="http://workspace.nottingham.ac.uk/display/StudentMoodle/Student+Moodle+Help" title="Moodle Help for Students">Moodle Help for Students</a>
                <a class="dropdown-item" role="menuitem" href="http://workspace.nottingham.ac.uk/display/Moodlehelp/Moodle+Help" title="Moodle Help for Staff">Moodle Help for Staff</a>
                <a class="dropdown-item" role="menuitem" href="https://www.nottingham.ac.uk/library/help/index.aspx" title="Library Help">Library Help</a>
    </div>
</li><li class="nav-item">
    <a class="nav-item nav-link" href="https://moodle.nottingham.ac.uk/mod/page/view.php?id=1260474" title="Accessibility">Accessibility</a>
</li><li class="nav-item">
    <a class="nav-item nav-link" href="https://moodle.nottingham.ac.uk/course/view.php?id=98519" title="Test Your Text">Test Your Text</a>
</li><li class="nav-item">
    <a class="nav-item nav-link" href="https://timetabling.nottingham.ac.uk" title="UNUK Online Timetables">UNUK Online Timetables</a>
</li></nav>
    </div>
    <section class="edge--bottom">&nbsp;</section>
    <footer id="page-footer" class="p-y-1 bg-inverse">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="infoarea">
                        <h4>Site Information</h4>
                        <ul>
<li>
<div><a href="http://workspace.nottingham.ac.uk/display/StudentMoodle/Student+Moodle+Help" target="_blank">Moodle help for Students</a></div>
</li>
<li><a href="http://workspace.nottingham.ac.uk/display/Moodlehelp/Moodle+Help+Guides+for+staff" target="_blank">Moodle help for Staff</a></li>
<li><a href="http://workspace.nottingham.ac.uk/display/Moodlehelp/Moodle+Terms+of+Use" target="_blank">Terms of use</a></li>
<li><a href="https://www.nottingham.ac.uk/it-services/connect/email/index.aspx">UK email access - information</a></li>
<li><a href="https://www.nottingham.edu.cn/en/its/connect-and-communicate/email-services.aspx">China email access - information</a><br></li><li><a href="https://www.nottingham.edu.my/IT-Services/connect/email/index.aspx">Malaysia email access - information</a><br></li>
</ul>
                    </div>
                </div>
    
                <div class="col-sm-12 col-md-4">
                </div>
    
                <div class="col-sm-12 col-md-4">
                    <div class="contactarea">
                        <h4>Get in touch</h4>
                        <h5>China</h5>
<p></p>
<ul>
<li><i class="fa fa-phone"></i> +86 (0574) 8818 0000 (ext.8915)</li>
<li><i class="fa fa-envelope"></i> <a href="mailto:e-learning-support@nottingham.edu.cn">e-learning-support@nottingham.edu.cn</a></li>
</ul>
<h5>Malaysia</h5>
<p></p>
<p></p>
<p></p>
<p></p>
<ul>
<li><i class="fa fa-phone"></i> +6 (03) 8924 8199</li>
<li><i class="fa fa-envelope"></i> <a href="mailto:ITServiceDesk@nottingham.edu.my">ITServiceDesk@nottingham.edu.my</a></li>
</ul>
<h5>United Kingdom</h5>
<p></p>
<ul>
<li><i class="fa fa-phone"></i>&nbsp;+44 (0115) 9516677 (24hrs)</li>
<li><i class="fa fa-envelope"></i> <a href="mailto:itservicedesk@nottingham.ac.uk">itservicedesk@nottingham.ac.uk</a></li>
<li><i class="fa fa-link"></i>&nbsp;<a href="https://selfservice.nottingham.ac.uk">https://selfservice.nottingham.ac.uk</a></li>
</ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright p-y-2">
        <div class="container-fluid">
             &copy; Copyright 2020 University of Nottingham
             <div class="tool_usertours-resettourcontainer"></div>
             <a href="https://download.moodle.org/mobile?version=2018120308.03&amp;lang=en&amp;iosappid=633359593&amp;androidappid=com.moodle.moodlemobile">Get the mobile app</a>
             
<script type="text/javascript">
if (/msie/i.test (navigator.userAgent)) //only override IE
{
	document.nativeGetElementById = document.getElementById;
	document.getElementById = function(id)
	{
		var elem = document.nativeGetElementById(id);
		if(elem)
		{
			//make sure that it is a valid match on id
			if(elem.id == id)
			{
				return elem;
			}
			else
			{
				//otherwise find the correct element
				for(var i=1;i<document.all[id].length;i++)
				{
					if(document.all[id][i].id == id)
					{
						return document.all[id][i];
					}
				}
			}
		}
		return null;
	};
}
</script>

<script type="text/javascript">
function getInternetExplorerVersion() {

var rv = -1; // Return value assumes failure.
if (navigator.appName == 'Microsoft Internet Explorer') {
var ua = navigator.userAgent;
var re = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
if (re.exec(ua) != null)
rv = parseFloat(RegExp.$1);
}
return rv;
}

function checkVersion() {
				var ver = getInternetExplorerVersion();
				
				if (ver > -1) {
				
							if (ver <= 8.0) { 
											//alert("IE8 detected!");
document.getElementById("browser_check").style.display = "block";
var loginboxelements = document.querySelectorAll('.loginbox');

for (var i=0; i < loginboxelements.length; i++) {
	loginboxelements[i].style.display = "none";
}

											}
							}
						}

checkVersion();
</script>
<script type="text/javascript">
//<![CDATA[
var require = {
    baseUrl : 'https://moodle.nottingham.ac.uk/lib/requirejs.php/1581530212/',
    // We only support AMD modules with an explicit define() statement.
    enforceDefine: true,
    skipDataMain: true,
    waitSeconds : 0,

    paths: {
        jquery: 'https://moodle.nottingham.ac.uk/lib/javascript.php/1581530212/lib/jquery/jquery-3.2.1.min',
        jqueryui: 'https://moodle.nottingham.ac.uk/lib/javascript.php/1581530212/lib/jquery/ui-1.12.1/jquery-ui.min',
        jqueryprivate: 'https://moodle.nottingham.ac.uk/lib/javascript.php/1581530212/lib/requirejs/jquery-private'
    },

    // Custom jquery config map.
    map: {
      // '*' means all modules will get 'jqueryprivate'
      // for their 'jquery' dependency.
      '*': { jquery: 'jqueryprivate' },
      // Stub module for 'process'. This is a workaround for a bug in MathJax (see MDL-60458).
      '*': { process: 'core/first' },

      // 'jquery-private' wants the real jQuery module
      // though. If this line was not here, there would
      // be an unresolvable cyclic dependency.
      jqueryprivate: { jquery: 'jquery' }
    }
};

//]]>
</script>
<script type="text/javascript" src="https://moodle.nottingham.ac.uk/lib/javascript.php/1581530212/lib/requirejs/require.min.js"></script>
<script type="text/javascript">
//<![CDATA[
M.util.js_pending("core/first");require(['core/first'], function() {
;
require(["media_videojs/loader"], function(loader) {
    loader.setUp(function(videojs) {
        videojs.options.flash.swf = "https://moodle.nottingham.ac.uk/media/player/videojs/videojs/video-js.swf";
videojs.addLanguage("en",{
 "Audio Player": "Audio Player",
 "Video Player": "Video Player",
 "Play": "Play",
 "Pause": "Pause",
 "Replay": "Replay",
 "Current Time": "Current Time",
 "Duration Time": "Duration Time",
 "Remaining Time": "Remaining Time",
 "Stream Type": "Stream Type",
 "LIVE": "LIVE",
 "Loaded": "Loaded",
 "Progress": "Progress",
 "Progress Bar": "Progress Bar",
 "progress bar timing: currentTime={1} duration={2}": "{1} of {2}",
 "Fullscreen": "Fullscreen",
 "Non-Fullscreen": "Non-Fullscreen",
 "Mute": "Mute",
 "Unmute": "Unmute",
 "Playback Rate": "Playback Rate",
 "Subtitles": "Subtitles",
 "subtitles off": "subtitles off",
 "Captions": "Captions",
 "captions off": "captions off",
 "Chapters": "Chapters",
 "Descriptions": "Descriptions",
 "descriptions off": "descriptions off",
 "Audio Track": "Audio Track",
 "Volume Level": "Volume Level",
 "You aborted the media playback": "You aborted the media playback",
 "A network error caused the media download to fail part-way.": "A network error caused the media download to fail part-way.",
 "The media could not be loaded, either because the server or network failed or because the format is not supported.": "The media could not be loaded, either because the server or network failed or because the format is not supported.",
 "The media playback was aborted due to a corruption problem or because the media used features your browser did not support.": "The media playback was aborted due to a corruption problem or because the media used features your browser did not support.",
 "No compatible source was found for this media.": "No compatible source was found for this media.",
 "The media is encrypted and we do not have the keys to decrypt it.": "The media is encrypted and we do not have the keys to decrypt it.",
 "Play Video": "Play Video",
 "Close": "Close",
 "Close Modal Dialog": "Close Modal Dialog",
 "Modal Window": "Modal Window",
 "This is a modal window": "This is a modal window",
 "This modal can be closed by pressing the Escape key or activating the close button.": "This modal can be closed by pressing the Escape key or activating the close button.",
 ", opens captions settings dialog": ", opens captions settings dialog",
 ", opens subtitles settings dialog": ", opens subtitles settings dialog",
 ", opens descriptions settings dialog": ", opens descriptions settings dialog",
 ", selected": ", selected",
 "captions settings": "captions settings",
 "subtitles settings": "subititles settings",
 "descriptions settings": "descriptions settings",
 "Text": "Text",
 "White": "White",
 "Black": "Black",
 "Red": "Red",
 "Green": "Green",
 "Blue": "Blue",
 "Yellow": "Yellow",
 "Magenta": "Magenta",
 "Cyan": "Cyan",
 "Background": "Background",
 "Window": "Window",
 "Transparent": "Transparent",
 "Semi-Transparent": "Semi-Transparent",
 "Opaque": "Opaque",
 "Font Size": "Font Size",
 "Text Edge Style": "Text Edge Style",
 "None": "None",
 "Raised": "Raised",
 "Depressed": "Depressed",
 "Uniform": "Uniform",
 "Dropshadow": "Dropshadow",
 "Font Family": "Font Family",
 "Proportional Sans-Serif": "Proportional Sans-Serif",
 "Monospace Sans-Serif": "Monospace Sans-Serif",
 "Proportional Serif": "Proportional Serif",
 "Monospace Serif": "Monospace Serif",
 "Casual": "Casual",
 "Script": "Script",
 "Small Caps": "Small Caps",
 "Reset": "Reset",
 "restore all settings to the default values": "restore all settings to the default values",
 "Done": "Done",
 "Caption Settings Dialog": "Caption Settings Dialog",
 "Beginning of dialog window. Escape will cancel and close the window.": "Beginning of dialog window. Escape will cancel and close the window.",
 "End of dialog window.": "End of dialog window."
});

    });
});;
function legacy_activity_onclick_handler_1(e) { e.halt(); window.open('https://moodle.nottingham.ac.uk/mod/resource/view.php?id=4083867&redirect=1'); return false; };
function legacy_activity_onclick_handler_2(e) { e.halt(); window.open('https://moodle.nottingham.ac.uk/mod/resource/view.php?id=4096702&redirect=1'); return false; };
function legacy_activity_onclick_handler_3(e) { e.halt(); window.open('https://moodle.nottingham.ac.uk/mod/resource/view.php?id=4094909&redirect=1'); return false; };
function legacy_activity_onclick_handler_4(e) { e.halt(); window.open('https://moodle.nottingham.ac.uk/mod/resource/view.php?id=4084302&redirect=1'); return false; };
function legacy_activity_onclick_handler_5(e) { e.halt(); window.open('https://moodle.nottingham.ac.uk/mod/resource/view.php?id=4084542&redirect=1'); return false; };
function legacy_activity_onclick_handler_6(e) { e.halt(); window.open('https://moodle.nottingham.ac.uk/mod/resource/view.php?id=4086180&redirect=1'); return false; };
function legacy_activity_onclick_handler_7(e) { e.halt(); window.open('https://moodle.nottingham.ac.uk/mod/resource/view.php?id=4087319&redirect=1'); return false; };
function legacy_activity_onclick_handler_8(e) { e.halt(); window.open('https://moodle.nottingham.ac.uk/mod/resource/view.php?id=4099539&redirect=1'); return false; };
function legacy_activity_onclick_handler_9(e) { e.halt(); window.open('https://moodle.nottingham.ac.uk/mod/resource/view.php?id=4108555&redirect=1'); return false; };
function legacy_activity_onclick_handler_10(e) { e.halt(); window.open('https://moodle.nottingham.ac.uk/mod/resource/view.php?id=4105961&redirect=1'); return false; };
function legacy_activity_onclick_handler_11(e) { e.halt(); window.open('https://moodle.nottingham.ac.uk/mod/resource/view.php?id=4113606&redirect=1'); return false; };
function legacy_activity_onclick_handler_12(e) { e.halt(); window.open('https://moodle.nottingham.ac.uk/mod/resource/view.php?id=4113576&redirect=1'); return false; };
function legacy_activity_onclick_handler_13(e) { e.halt(); window.open('https://moodle.nottingham.ac.uk/mod/resource/view.php?id=4118412&redirect=1'); return false; };
function legacy_activity_onclick_handler_14(e) { e.halt(); window.open('https://moodle.nottingham.ac.uk/mod/resource/view.php?id=4122602&redirect=1'); return false; };
M.util.js_pending('tool_usertours/usertours');
require(['tool_usertours/usertours'], function(amd) {
    amd.init("5", false, 6224842);
    M.util.js_complete('tool_usertours/usertours');
});;

require(
[
    'jquery',
    'core_message/message_popover'
],
function(
    $,
    Popover
) {
    var toggle = $('#message-drawer-toggle-5e7574c1ba9655e7574c1b8ee22');
    Popover.init(toggle);
});
;

require(['jquery', 'message_popup/notification_popover_controller'], function($, controller) {
    var container = $('#nav-notification-popover-container');
    var controller = new controller(container);
    controller.registerEventListeners();
    controller.registerListNavigationEventListeners();
});
;

        require(['jquery'], function($) {
            $('#jump-to-activity').change(function() {
                if (!$(this).val()) {
                    return false;
                }
                $('#url_select_f5e7574c1b8ee212').submit();
            });
        });
    ;

require(['jquery', 'core_message/message_drawer'], function($, MessageDrawer) {
    var root = $('#message-drawer-5e7574c1bf3da5e7574c1b8ee213');
    MessageDrawer.init(root);
});
;

$(document).ready(function(){
    $("#topbutton").hide();
    $(function (scrollTop) {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('#topbutton').fadeIn();
            } else {
                $('#topbutton').fadeOut();
            }
        });

        $('#topbutton').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });
});
;

require(['theme_boost/loader']);
require(['theme_boost/drawer'], function(mod) {
    mod.init();
});
;
M.util.js_pending('local_fullscreen/button');
require(['local_fullscreen/button'], function(amd) {
    amd.init("1");
    M.util.js_complete('local_fullscreen/button');
});;
M.util.js_pending('core/notification');
require(['core/notification'], function(amd) {
    amd.init(6224842, []);
    M.util.js_complete('core/notification');
});;
M.util.js_pending('core/log');
require(['core/log'], function(amd) {
    amd.setConfig({"level":"warn"});
    M.util.js_complete('core/log');
});;
M.util.js_pending('core/page_global');
require(['core/page_global'], function(amd) {
    amd.init();
    M.util.js_complete('core/page_global');
});M.util.js_complete("core/first");
});
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
M.str = {"moodle":{"lastmodified":"Last modified","name":"Name","error":"Error","info":"Information","yes":"Yes","no":"No","ok":"OK","cancel":"Cancel","confirm":"Confirm","areyousure":"Are you sure?","closebuttontitle":"Close","unknownerror":"Unknown error"},"repository":{"type":"Type","size":"Size","invalidjson":"Invalid JSON string","nofilesattached":"No files attached","filepicker":"File picker","logout":"Logout","nofilesavailable":"No files available","norepositoriesavailable":"Sorry, none of your current repositories can return files in the required format.","fileexistsdialogheader":"File exists","fileexistsdialog_editor":"A file with that name has already been attached to the text you are editing.","fileexistsdialog_filemanager":"A file with that name has already been attached","renameto":"Rename to \"{$a}\"","referencesexist":"There are {$a} alias\/shortcut files that use this file as their source","select":"Select"},"admin":{"confirmdeletecomments":"You are about to delete comments, are you sure?","confirmation":"Confirmation"}};
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
(function() {Y.use("moodle-filter_glossary-autolinker",function() {M.filter_glossary.init_filter_autolinking({"courseid":0});
});
Y.use("moodle-filter_mathjaxloader-loader",function() {M.filter_mathjaxloader.configure({"mathjaxconfig":"MathJax.Hub.Config({\r\n    config: [\"Accessible.js\", \"Safe.js\"],\r\n    errorSettings: { message: [\"!\"] },\r\n    skipStartupTypeset: true,\r\n    messageStyle: \"none\"\r\n});\r\n","lang":"en"});
});
M.util.help_popups.setup(Y);
 M.util.js_pending('random5e7574c1b8ee226'); Y.on('domready', function() { M.util.js_complete("init");  M.util.js_complete('random5e7574c1b8ee226'); });
})();
//]]>
</script>

        </div>
    </div>
    
    <a onclick="('')" id="topbutton" class="back-to-top" title="Go to top"><i class="fa fa-chevron-up "></i></a>
    
</div>

<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"85d36fdef0","applicationID":"3213358","transactionName":"NlJTbBQEWksEAEFYXw8YZEoPSllXAUxHVEMOQkNbA0pCUQAUG0FYEQ==","queueTime":0,"applicationTime":173,"atts":"GhVEGlweSRRHAhcLSxxK","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>

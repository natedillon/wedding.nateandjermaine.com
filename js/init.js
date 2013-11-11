// "Google Analytics Downtime Solutions" (http://www.newtonsoft.com/Blog/archive/2006/03/10/11.aspx)
// "The window.onload Problem - Solved!" (http://dean.edwards.name/weblog/2005/09/busted/)

// set Google Analytics account
_uacct = "UA-326107-1";

function init() {
	// quit if this function has already been called
	if (arguments.callee.done) return;

	// flag this function so we don't do the same thing twice
	arguments.callee.done = true;

	// start Google Analytics
	if (typeof(urchinTracker) != 'undefined') urchinTracker('/downloads/webdialog');
};

/* for Mozilla */
if (document.addEventListener) {
	document.addEventListener("DOMContentLoaded", init, null);
}

/* for Internet Explorer */
/*@cc_on @*/
/*@if (@_win32)
	document.write("<script defer src=/js/ie_onload.js><"+"/script>");
/*@end @*/

/* for other browsers */
window.onload = init;

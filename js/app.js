$(document).foundation();

// JavaScript Document


(function() {
"use strict";
//console.log("SEAF Started!");


/*variables*/

/*var backLink = document.querySelector("#backTop");
*///console.log(backLink);

var menuOverlay = document.querySelector("#overlay");
var navMenu = document.querySelector("#smallMenu");
var siteBody = document.querySelector("body");

//var navBar = document.querySelector("#top");



//
//var screenPos;
//var navPos;


/*functions*/








function openNav() {
	console.log("openNav");
	
	
	if(menuOverlay.style.display === "inline") {
//		console.log("1");
		
		TweenMax.to(menuOverlay, 1, {opacity:0, ease:Power2.easeInOut,onComplete:openNavDone});
		}
	else
	{
//		console.log("2");
		menuOverlay.style.display="inline";
		siteBody.classList.add("no-scroll");
		TweenMax.to(menuOverlay, 0.3, {opacity:1, ease:Power2.easeInOut});

		}
	

	
}

function openNavDone() {
menuOverlay.style.display="none";	
	siteBody.classList.remove("no-scroll");	
}







/////Scroll Events
//
//function activate() {
//console.log ("scroll");
//screenPos = window.scrollY;
//console.log(screenPos);
//
//
//
//if(screenPos > 200) {
//	
//document.querySelector("#blackNav").style.position="fixed";
//
//
//document.querySelector("nav").style.height="80px";
//document.querySelector(".menu").style.top="26px";
//document.querySelector("#logo").style.width="50px";
//
//
//
//if (window.matchMedia("(max-width: 64em)").matches) {
//	
//}	
//
//}
//else {
//document.querySelector("#blackNav").style.position="absolute";
//
//
//document.querySelector("nav").style.height="160px";
//document.querySelector(".menu").style.top="70px";
//
//if (window.matchMedia("(max-width: 64em)").matches) {
///*document.querySelector("#blackNav").style.display="inline";
//*/} 
//
//
//}
//
//
//
//
//}
//
//
//
//
//
//
//
//
//
//
//
//



/*listeners*/


navMenu.addEventListener("click", openNav, false);

menuOverlay.addEventListener("click", openNav, false);

//
//window.addEventListener("scroll", activate, false);
//	

})();

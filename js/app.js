$(document).foundation();
// JavaScript Document
(function() {
	"use strict";
	console.log("SEAF Started!");
/*variables*/
	//console.log(backLink);
	var menuOverlay = document.querySelector("#overlay");
	var navMenu = document.querySelector("#smallMenu");
	var siteBody = document.querySelector("body");
	var hamburger = document.querySelector("#hamburger");
/*functions*/
///Opens Mobile Nav Menu
	function openNav() {
		/*console.log("openNav");*/
		if (menuOverlay.style.display === "inline") {
			hamburger.src = "images/hamburger.svg";
			TweenMax.to(menuOverlay, 1, {
				opacity: 0,
				ease: Power2.easeInOut,
				onComplete: openNavDone
			});
		} else {
			//console.log("2");
			menuOverlay.style.display = "inline";
			siteBody.classList.add("no-scroll");
			TweenMax.to(menuOverlay, 0.3, {
				opacity: 1,
				ease: Power2.easeInOut
			});
			hamburger.src = "images/hamburger-close.svg";
		}
	}
///Closes Mobile Nav Menu
	function openNavDone() {
		menuOverlay.style.display = "none";
		siteBody.classList.remove("no-scroll");
	}
/*listeners*/
	navMenu.addEventListener("click", openNav, false);
	menuOverlay.addEventListener("click", openNav, false);
})();
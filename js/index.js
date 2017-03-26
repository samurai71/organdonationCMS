$(document).foundation();
// JavaScript Document
(function() {
	"use strict";
	console.log("Index SEAF Started!");
	/*variables*/
	var screenPos;
	var videoHeight;
	var videoCon = document.querySelector("#hideBody");
	videoHeight = videoCon.offsetTop;
	var videoShowBtn = document.querySelector("#play");
	var videoOverlayInfo = document.querySelector("#videoOverlay");
	var videoToolBar = document.querySelector("#videoToolbar");
	var video = document.querySelector("#video");
	var hideBody = document.querySelector("#hideBody");
	var controls = document.querySelector("#controls");
	var indexNav = document.querySelector("#indexNav");
	var navOut = 0;
/*functions*/
///Scroll Events
	function activate() {
		/*console.log ("scroll");*/
		screenPos = window.scrollY;
		/*console.log(screenPos);*/
		if (screenPos > videoHeight) {
			/*console.log("test");*/
			NavScrollIn();
			document.querySelector("#indexNav").style.position = "fixed";
			document.querySelector("#indexNav").style.background = "#333333";
			document.querySelector("nav").style.height = "80px";
			document.querySelector(".menu").style.top = "22px";
			document.querySelector("#logo").style.width = "260px";
			document.querySelector("#logo").style.top = "10px";
			if (window.matchMedia("(max-width: 64em)").matches) {
				document.querySelector("nav").style.height = "100px";
				document.querySelector("#logo").style.width = "140px";
				document.querySelector("#logo").style.top = "36px";
			}
		} else {
			/*console.log("test2");*/
			navOut = 0;
			document.querySelector("#indexNav").style.position = "absolute";
			document.querySelector("#indexNav").style.background = "none";
			if (window.matchMedia("(max-width: 64em)").matches) {
				document.querySelector("nav").style.height = "100px";
				document.querySelector("#logo").style.width = "140px";
				document.querySelector("#logo").style.top = "36px";
			}
		}
	}
///Sticky Nav Animation Activation
	function NavScrollIn() {
		if (navOut === 0) {
			/*console.log(navOut);*/
			TweenMax.to(indexNav, 0, {
				y: -100
			});
			TweenMax.to(indexNav, 0.2, {
				y: 0,
				ease: Power2.easeIn
			});
			navOut = 1;
		} else {
			/*console.log("nope");*/
		}
	}
///Shows Main Video
	function videoShow() {
		/*console.log("video show");*/
		videoOverlayInfo.style.display = "none";
		videoToolBar.style.display = "block";
		video.src = "video/video2.mp4";
		video.loop = false;
		hideBody.style.display = "none";
		video.muted = false;
		controls.style.display = "block";
		TweenMax.to(controls, 0, {
			opacity: 1
		});
		TweenMax.to(controls, 1, {
			opacity: 0,
			ease: Power2.easeIn,
			onComplete: controlsHide
		});
		//controlsFadeOut();
		if (window.matchMedia("(max-width: 80em)").matches) {
			video.classList.remove("videoFront");
			video.classList.add("videoSmall");
		} else {}
	}
///Hides Main Video
	function videoHide() {
		/*console.log("video hide");*/
		videoOverlayInfo.style.display = "block";
		videoToolBar.style.display = "none";
		video.src = "video/video.mp4";
		video.muted = true;
		video.loop = true;
		hideBody.style.display = "block";
		controls.style.display = "none";
		if (window.matchMedia("(max-width: 80em)").matches) {
			video.classList.add("videoFront");
			video.classList.remove("videoSmall");
		} else {}
	}
///Show Main Video Controls
	function controlsShow() {
		if (controls.style.display === "none") {
			/*console.log("controls");*/
			TweenMax.to(controls, 0.4, {
				opacity: 1,
				ease: Power2.easeIn
			});
			controls.style.display = 'block';
		} else {
			TweenMax.to(controls, 0.4, {
				opacity: 0,
				ease: Power2.easeOut,
				onComplete: controlsHide
			});
		}
	}
	video.onended = function() {
		videoHide();
	};

	function controlsFadeOut() {
		TweenMax.to(controls, 1, {
			opacity: 0,
			ease: Power2.easeOut
		});
	}

	function controlsHide() {
		controls.style.display = "none";
	}
/*listeners*/
	window.addEventListener("scroll", activate, false);
	video.addEventListener("ended", videoHide, false);
	videoShowBtn.addEventListener("click", videoShow, false);
	videoToolBar.addEventListener("click", videoHide, false);
	video.addEventListener("click", controlsShow, false);
})();
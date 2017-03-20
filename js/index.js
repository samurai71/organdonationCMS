$(document).foundation();

// JavaScript Document


(function() {
"use strict";
console.log("SEAF Started!");


/*variables*/



var screenPos;
var videoHeight; 
var videoCon = document.querySelector("#info");
videoHeight = videoCon.offsetTop;


var videoShowBtn = document.querySelector("#play");
var videoOverlayInfo = document.querySelector("#videoOverlay");
var videoToolBar = document.querySelector("#videoToolbar");
var video = document.querySelector("#video");
var hideBody = document.querySelector("#hideBody");


/*functions*/





///Scroll Events

function activate() {
/*console.log ("scroll");
*/screenPos = window.scrollY;
/*console.log(screenPos);
*/


if(screenPos > videoHeight) {
	

document.querySelector("#indexNav").style.position="fixed";
document.querySelector("#indexNav").style.background="#333333";


document.querySelector("nav").style.height="80px";
document.querySelector(".menu").style.top="22px";
document.querySelector("#logo").style.width="260px";
document.querySelector("#logo").style.top="10px";







if (window.matchMedia("(max-width: 64em)").matches) {
	document.querySelector("nav").style.height="100px";
	document.querySelector("#logo").style.width="140px";
	document.querySelector("#logo").style.top="36px";	
}	

}
else {
	

	
document.querySelector("#indexNav").style.position="absolute";
document.querySelector("#indexNav").style.background="none";


//document.querySelector("nav").style.height="160px";
//document.querySelector(".menu").style.top="70px";
//document.querySelector("#logo").style.width="300px";
//document.querySelector("#logo").style.top="50px";






if (window.matchMedia("(max-width: 64em)").matches) {
	document.querySelector("nav").style.height="100px";
	document.querySelector("#logo").style.width="140px";
	document.querySelector("#logo").style.top="36px";
} 

}




}



function videoShow(){
	console.log("video show");
	videoOverlayInfo.style.display="none";

	videoToolBar.style.display="block";
	video.src = "video/video2.mp4";
	video.muted = false;
	video.loop = false;
/*	video.play();*/	
	hideBody.style.display="none";
}

function videoHide(){
	console.log("video hide");
	videoOverlayInfo.style.display="block";
	videoToolBar.style.display="none";
	video.src = "video/video.mp4";
/*	video.pause(); 
*/	video.muted = true;
	video.loop = true;
	hideBody.style.display="block";
	
	

}

function videoPlay(){
	

  if (video.paused === false) {
      video.pause();
  } else {
      video.play();
  }
}


video.onended = function() {
videoHide();
};














/*listeners*/



window.addEventListener("scroll", activate, false);

video.addEventListener("ended", videoHide, false);


videoShowBtn.addEventListener("click", videoShow, false);
videoToolBar.addEventListener("click", videoHide, false);	
video.addEventListener("click", videoPlay, false);



})();

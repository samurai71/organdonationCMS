// JavaScript Document
(function() {
	"use strict";
	console.log("Video SEAF Started!");
	var seekBar = document.querySelector("#seek-bar");
	var volumeBar = document.querySelector("#volume-bar");
	var muteButton = document.querySelector("#mute");
	var toggleButton = document.querySelector("#playVideo");
	
	
	
///Toggles Play Button
	function togglePlay(event) {
		//console.log(event.currentTarget);
		if (video.paused) {
			video.play();
			document.querySelector("#playVideo").style.backgroundImage = "url('images/player-pause.png')";
			event.currentTarget.firstChild.nodeValue = "Pause";
		} else {
			video.pause();
			document.querySelector("#playVideo").style.backgroundImage = "url('images/player-play.png')";
			event.currentTarget.firstChild.nodeValue = "Play";
		}
	}
///Controls Seek Bar
	function seek() {
		var time = video.duration * (seekBar.value / 100);
		video.currentTime = time;
	}

	function seekUpdate() {
		var value = (100 / video.duration) * video.currentTime;
		seekBar.value = value;
	}
///Controls Volume
	function volume() {
		video.volume = volumeBar.value;
	}
///Event listener for the mute button
	function mute() {
		if (video.muted === false) {
			// Mute the video
			video.muted = true;
			// Update the button text
			document.querySelector("#mute").style.backgroundImage = "url('images/player-sound-off.png')";
		} else {
			// Unmute the video
			video.muted = false;
			// Update the button text
			document.querySelector("#mute").style.backgroundImage = "url('images/player-sound-on.png')";
		}
		//  console.log("mute");
	}
	toggleButton.addEventListener("click", togglePlay, false);
	seekBar.addEventListener("change", seek, false);
	video.addEventListener("timeupdate", seekUpdate, false);
	volumeBar.addEventListener("change", volume, false);
	muteButton.addEventListener("click", mute, false);
})();